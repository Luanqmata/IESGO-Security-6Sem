# 🔍 Exploração do Site — ☢️ Penetratium ☢️ - Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Osint-Aprofundado

---

## 🌐 Usando o Whois:
<p align="center">
  <img width="866" height="768" alt="image" src="https://github.com/user-attachments/assets/f5cf66f3-14cd-4783-8b73-b20c6ac2adfc" />
  <img width="865" height="744" alt="image" src="https://github.com/user-attachments/assets/e7d5055d-18ad-4a49-9d9b-943bd3e1e869" />
</p>

## 📡 Usando um script ps1 de DNS request:

---
<p align="center">

  <img width="424" height="578" alt="image" src="https://github.com/user-attachments/assets/9d0da0ce-bb58-41d5-abfe-3b014db74469" />
  

  <br>
  <a href="https://github.com/Luanqmata/-Windows-Is-Life-/blob/main/dns_scan_melh_basic.ps1">
    <img src="https://img.shields.io/badge/Link-Programa-39ff14?style=for-the-badge&logo=cloudflare&logoColor=white" />
  </a>
</p>

---
<p align="center">
  <img width="516" height="668" alt="image" src="https://github.com/user-attachments/assets/c3884ca7-edb1-4dec-8b9d-d6ce0b3bda30" />
</p>

- Rodando o programa nos deparamos com algumas descobertas; links e possiveis diretorios escondidos ( ativados e desativados ).
   Fazendo uma bela filtrangem do que realmente importa , o script achou:
   
  ```txt
    === 8. Verifica o arquivo robots.txt ===
  
     Procurando robots.txt...
    
     Conteudo do robots.txt:
    User-agent: *
    Disallow: /_restrito
    Disallow: /_docs
    Disallow: /admin
    Disallow: /bkp
    Allow: /configuracoes/comunicacao/projeto.txt
    
  ```

  Achamos esses 4 diretorios que estão sem proteção agora vamos copiar e cola-los apos uma / no DNS do site
  
# 🌐 Teste dos 4 links clicáveis

## 1️⃣ Primeiro link: http://businesscorp.com.br/_restrito/

<p align="center">
  <img width="689" height="155" alt="image" src="https://github.com/user-attachments/assets/30e4c53d-802e-4342-a7f6-5ce91045c802" />
</p>

- Aparentemente nada demais ,estamos no caminho achei um anonymous resolvir anexa-lo junto
  
---

## 2️⃣ Segundo link: http://businesscorp.com.br/_docs/

<p align="center">
  <img width="360" height="177" alt="image" src="https://github.com/user-attachments/assets/c886e152-34ad-43be-91ea-fef18834e745" />
</p>
  
 - Bingo!! Aparentemente achamos um arquivo que possue senhas:
    Credenciais encontradas:
```txt
          admin:123
      dev:desenvolvimento
```
Depois iremos tirar a prova, das senhas.

---

## 3️⃣ Terceiro link: http://businesscorp.com.br/admin/

<p align="center">
  <img width="338" height="154" alt="image" src="https://github.com/user-attachments/assets/9f1e64c6-0341-44fd-b606-ba9ad7df19ff" />
</p>

-- Nada demais

--- 

## 4️⃣ Quarto link: http://businesscorp.com.br/bkp/

<p align="center">
  <img width="339" height="179" alt="image" src="https://github.com/user-attachments/assets/c37897d2-bf3b-463c-a342-e9b9bc73af90" />
</p> 

- Aqui encontramos outro arquivo aparentemente um executavel .sh

-- Conteudo do arquivo

```sh
  #!/bin/bash
  #Backup diario
  
  cp /var/www/db/update.sql /var/bkp/
```

-- Ó , Achamos um backup ou um arquivo que é executado todo final de dia.
-- Conteudo pode ser mudado para executar um shell reverse 

