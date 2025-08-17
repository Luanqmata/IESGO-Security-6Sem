# 🔍 Exploração do Site — ☢️ Penetratium ☢️ - Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Osint Superficial

---
# 🔎 Análise do site http://businesscorp.com.br/#intro

<p align="center">
  <img src="https://github.com/user-attachments/assets/3fa26601-ec93-4987-bc45-d09d374dbf93" alt="Página Inicial" />
</p>

---

## 📌 Pontos que chamaram a atenção na página inicial

- ✉️ **3 e-mails** e 📞 **3 números de contato**:

<p align="center">
  <img src="https://github.com/user-attachments/assets/06bf792a-51b6-49b7-99a6-e9171d29db00" alt="Contatos" />
</p>

- 👤 **Possíveis nomes de login** encontrados.

- 📅 **Data antiga** e nome de um possível designer/programador:

<p align="center">
  <img src="https://github.com/user-attachments/assets/da0c9f84-5562-4f96-8661-e5a9b21383a5" alt="Designer" />
</p>

- 🔍 Inspecionando o código HTML, **nada de relevante encontrado**.

---

# 🌐 Teste dos 5 links clicáveis

## 1️⃣ Primeiro link: http://businesscorp.com.br/cadastro.php

<p align="center">
  <img src="https://github.com/user-attachments/assets/e3dcc68c-d58a-4d5c-9d1e-303dd115d654" alt="Erro 404" />
</p>

- ❌ Página inexistente (**Error 404**), mas retornou informações importantes:
  - 🖥️ Sistema operacional: **Debian**
  - ⚙️ Servidor web: **Apache/2.2.22**

- ⚠️ mostra que **forçar erros pode revelar informações privilegiadas**.

- Encontrado também o link (no f12):
  ```
  http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2J1c2luZXNzY29ycC5jb20uYnIvY2FkYXN0cm8ucGhw
  ```
  🔬 Possível laboratório da **Kaspersky** ( Quebrando a 4° parede ).

---

## 2️⃣ Segundo link (Clientes): http://37.59.174.233:8080

<p align="center">
  <img src="https://github.com/user-attachments/assets/446b2241-ad5d-4c56-9d05-eb0f41dca275" alt="Link Clientes" />
</p>

- Nada encontrado, APENAS o **endereço de IP: 37.59.174.233**.

---

## 3️⃣ Terceiro link: http://intranet.businesscorp.com.br

<p align="center">
  <img src="https://github.com/user-attachments/assets/32b0d881-9089-46de-8b31-029e7f3cb0f2" alt="Intranet" />
</p>

- Página informando que o servidor **está ativo**, aguardando conteúdo.  
  (Possivelmente **Apache ou Nginx**).

---

## 4️⃣ Quarto link: http://mail.businesscorp.com.br

<p align="center">
  <img src="https://github.com/user-attachments/assets/1a4a0b47-870a-4361-958d-8740d97ce1ea" alt="Mail" />
</p>

- Página de autenticação encontrada:
  - 📄 Possui formulário **(POST)**
  - 🔓 Possível fraqueza: **Brute Force (Hydra)**

- Nomes a serem testados: **CAMILA** e **ROGÉRIO**

---

## 5️⃣ Quinto link: http://rh.businesscorp.com.br

<p align="center">
  <img src="https://github.com/user-attachments/assets/951bbcd9-6e75-485c-8bf6-b5f915ced284" alt="RH" />
</p>

- Apesar de estar mais "escondido", o link revela um formulário:

<p align="center">
  <img src="https://github.com/user-attachments/assets/f0c9fe5b-13f7-490a-9200-a45dd00e1f01" alt="Formulário RH" />
</p>

- Ao clicar em **"Submeta seu Currículo"**, abre um formulário mais completo:

<p align="center">
  <img src="https://github.com/user-attachments/assets/65b4cb67-666f-47e7-8f41-778a409f2c75" alt="Upload" />
</p>

- ⚠️ Nele é possível **Anexar arquivos PDF**, o que pode permitir upload de arquivos maliciosos.
  
- Isso indica a existência de um **diretório que armazena os arquivos enviados pelos usuários**.

---

✅ **Resumo Final**:
- Rogerio , camila , ti
- Apache/2.2.22 - linux debian
- 37.59.174.233
- Formulário possivelmente vulnerável a brute force.
- Upload de arquivos sem aparente validação.  

🚨 **Pontos críticos a investigar futuramente!**
