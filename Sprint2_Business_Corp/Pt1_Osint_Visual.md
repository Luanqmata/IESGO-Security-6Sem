# 🔎 Análise do site http://businesscorp.com.br/#intro

![Página Inicial](https://github.com/user-attachments/assets/3fa26601-ec93-4987-bc45-d09d374dbf93)

---

## 📌 Pontos que chamaram a atenção na página inicial

- ✉️ **3 e-mails** e 📞 **3 números de contato**:

![Contatos](https://github.com/user-attachments/assets/06bf792a-51b6-49b7-99a6-e9171d29db00)

- 👤 **Possíveis nomes de login** encontrados.

- 📅 **Data antiga** e nome de um possível designer/programador:

![Designer](https://github.com/user-attachments/assets/da0c9f84-5562-4f96-8661-e5a9b21383a5)

- 🔍 Inspecionando o código HTML, **nada de relevante encontrado**.

---

# 🌐 Teste dos 4 links clicáveis

## 1️⃣ Primeiro link: http://businesscorp.com.br/cadastro.php

![Erro 404](https://github.com/user-attachments/assets/e3dcc68c-d58a-4d5c-9d1e-303dd115d654)

- ❌ Página inexistente (**Error 404**), mas retornou informações importantes:
  - 🖥️ Sistema operacional: **Debian**
  - ⚙️ Servidor web: **Apache/2.2.22**

- ⚠️ Isso mostra que **forçar erros pode revelar informações privilegiadas**.

- Encontrado também o link:
  ```
  http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2J1c2luZXNzY29ycC5jb20uYnIvY2FkYXN0cm8ucGhw
  ```
  🔬 Possível laboratório da **Kaspersky** ( Quebrando a 4° parede ).

---

## 2️⃣ Segundo link (Clientes): http://37.59.174.233:8080

![Link Clientes](https://github.com/user-attachments/assets/446b2241-ad5d-4c56-9d05-eb0f41dca275)

- Nada encontrado, APENAS o **endereço de IP: 37.59.174.233**.

---

## 3️⃣ Terceiro link: http://intranet.businesscorp.com.br

![Intranet](https://github.com/user-attachments/assets/32b0d881-9089-46de-8b31-029e7f3cb0f2)

- Página informando que o servidor **está ativo**, aguardando conteúdo.  
  (Possivelmente **Apache ou Nginx**).

---

## 4️⃣ Quarto link: http://mail.businesscorp.com.br

![Mail](https://github.com/user-attachments/assets/1a4a0b47-870a-4361-958d-8740d97ce1ea)

- Página de autenticação encontrada:
  - 📄 Possui formulário **(POST)**
  - 🔓 Possível fraqueza: **Brute Force (Hydra)**

- Nomes a serem testados: **CAMILA** e **ROGÉRIO**

---

## 5️⃣ Quinto link: http://rh.businesscorp.com.br

![RH](https://github.com/user-attachments/assets/951bbcd9-6e75-485c-8bf6-b5f915ced284)

- Apesar de estar mais "escondido", o link revela um formulário:

![Formulário RH](https://github.com/user-attachments/assets/f0c9fe5b-13f7-490a-9200-a45dd00e1f01)

- Ao clicar em **"Submeta seu Currículo"**, abre um formulário mais completo:

![Upload](https://github.com/user-attachments/assets/65b4cb67-666f-47e7-8f41-778a409f2c75)

- ⚠️ Nele é possível **enviar arquivos PDF**, o que pode permitir upload de arquivos maliciosos.  
- Isso indica a existência de um **diretório que armazena os arquivos enviados pelos usuários**.

---

✅ **Resumo Final**:
- Diversos subdomínios ativos.
- Erros revelando informações sensíveis do servidor.
- Formulário vulnerável a brute force.
- Upload de arquivos sem aparente validação.  

🚨 **Pontos críticos a investigar futuramente!**
