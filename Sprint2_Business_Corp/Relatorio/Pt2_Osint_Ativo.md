# 🔍 Exploração do Site — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Osint Ativo

---

## 🌐 Utilizando o WHOIS
<p align="center">
  <img width="866" height="768" alt="image" src="https://github.com/user-attachments/assets/f5cf66f3-14cd-4783-8b73-b20c6ac2adfc" />
  <img width="865" height="744" alt="image" src="https://github.com/user-attachments/assets/e7d5055d-18ad-4a49-9d9b-943bd3e1e869" />
  
  <img width="250" height="250" alt="image" src="https://github.com/user-attachments/assets/d0d404fb-f9b0-42ab-9989-c20184f7ee83" />
  <br>
  https://www.linkedin.com/in/ricardolongatto/?originalSubdomain=br
</p>

---

## 📡 Consulta DNS com Script PowerShell (.ps1)
<p align="center">
  <a href="https://github.com/Luanqmata/-Windows-Is-Life-/blob/main/dns_scan_melh_basic.ps1">
    <img src="https://img.shields.io/badge/Link-Script-39ff14?style=for-the-badge&logo=cloudflare&logoColor=white" />
  </a>
  <br>
  <img width="424" height="578" alt="image" src="https://github.com/user-attachments/assets/9d0da0ce-bb58-41d5-abfe-3b014db74469" />
</p>

<p align="center">
  <img width="516" height="668" alt="image" src="https://github.com/user-attachments/assets/c3884ca7-edb1-4dec-8b9d-d6ce0b3bda30" />
</p>

- ⚡ Executando o script, encontramos possíveis **links e diretórios ocultos** (ativos e inativos).  
- 🔎 Após uma boa filtragem, o script identificou:

```txt
=== 8. Verificação do arquivo robots.txt ===

Procurando robots.txt...

Conteúdo do robots.txt:
User-agent: *
Disallow: /_restrito
Disallow: /_docs
Disallow: /admin
Disallow: /bkp
Allow: /configuracoes/comunicacao/projeto.txt
```

➡️ Foram encontrados **4 diretórios sem proteção**. Vamos testá-los diretamente no navegador.

---

# 🌐 Testando os 5 Diretórios Encontrados

## 1️⃣ http://businesscorp.com.br/_restrito/
<p align="center">
  <img width="689" height="155" alt="image" src="https://github.com/user-attachments/assets/30e4c53d-802e-4342-a7f6-5ce91045c802" />
</p>

- 📄 Nada relevante, mas foi identificado um usuário **Anonymous**.  
- 🔗 Mantido para referência futura.

---

## 2️⃣ http://businesscorp.com.br/_docs/
<p align="center">
  <img width="360" height="177" alt="image" src="https://github.com/user-attachments/assets/c886e152-34ad-43be-91ea-fef18834e745" />
</p>

- 📂 Encontrado um **senhas** (`.txt`):

- 🎯 **Bingo!** Encontrado um arquivo contendo **credenciais**:

```txt
admin:123
dev:desenvolvimento
```

- 🔐 Próxima etapa: validar se essas senhas funcionam nos painéis de login.

---

## 3️⃣ http://businesscorp.com.br/admin/
<p align="center">
  <img width="338" height="154" alt="image" src="https://github.com/user-attachments/assets/9f1e64c6-0341-44fd-b606-ba9ad7df19ff" />
</p>

- 📌 Sem informações úteis visíveis.

---

## 4️⃣ http://businesscorp.com.br/bkp/
<p align="center">
  <img width="339" height="179" alt="image" src="https://github.com/user-attachments/assets/c37897d2-bf3b-463c-a342-e9b9bc73af90" />
</p>

- 📂 Encontrado um **script de backup** (`.sh`):

```sh
#!/bin/bash
# Backup diário
cp /var/www/db/update.sql /var/bkp/
```

- ⚠️ O arquivo sugere um **backup diário automatizado**.  
- 🚨 Possível vetor de ataque: modificar o script para injetar um **reverse shell**.

---

## 5️⃣ http://businesscorp.com.br/configuracoes/comunicacao/

<p align="center">
  <img width="433" height="182" alt="image" src="https://github.com/user-attachments/assets/adeef2f0-ab85-4750-bac1-b81f505e4a8b" />
</p>

- 📂 Se voltarmos 1 vez é Encontrado um **db** (`.sql`):

<p align="center">
  <img width="361" height="209" alt="image" src="https://github.com/user-attachments/assets/3486424d-3f63-49a0-91d1-7872643a4e9d" />
</p>

- Baixando o arquivo e abrindo temos:

```sql
  CREATE DATABASE intra;

  CREATE TABLE `login` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `login` varchar(32) NOT NULL,
    `pass` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
  );
  
  INSERT INTO `login` (`id`,`login`, `password`) VALUES (1,`ti`,`2483e14219cce6fe63d8ac91afc92618`);
```

- 🎯 **Bingo! Denovo** Encontrado um arquivo contendo **credencial intra**:
- Aparentemente senha criptografada 🔒


📌 **Resumo Técnico:**  
- Diretórios sensíveis foram localizados via `robots.txt`.  
- Credenciais iniciais foram descobertas em `/docs`.  
- Arquivo de backup em `/bkp` representa risco de escalonamento de privilégios.  
- Encontrado credenciais da pagina do intra
- Potencial de exploração futura com **engenharia social** + **modificação de scripts automatizados**. 
