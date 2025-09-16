# 🔍 Exploração de Vulnerabilidade — 👨‍🔬 Testes Juice Lab

## 🔗 Matéria: Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress  
- 🔍 **Tipo de atividade:** Vulnerabilidade prática de injection (OWASP TOP 1 2017)  
- 🧾 **Ferramenta:** OWASP Juice Shop (ambiente intencionalmente vulnerável)

---

### 📝 Teste de Injeção — Coleta de informações
Colocando o caractere **'** na tela de login, geramos um erro que permite **coleta de informações** (reconhecimento).

<p align="center">
  <img width="1600" height="900" alt="Erro de login" src="https://github.com/user-attachments/assets/02ed779c-aaba-4a9d-8e68-00c26b6aeef7" />
</p>

---

### 🕵️‍♂️ Captura de cookies e tokens
Após logar com um usuário, é possível capturar o **token JWT** e decodificá-lo para obter informações do usuário.

<p align="center">
  <img width="1380" height="419" alt="Captura de token" src="https://github.com/user-attachments/assets/0ed2c096-4020-4d02-9818-c7393c194b71" />
</p>

Decodificando o token no site **JWT Decode**:

<p align="center">
  <img width="1880" height="1011" alt="Token decodificado" src="https://github.com/user-attachments/assets/3f3f6b5a-f677-4128-a575-035207a71184" />
</p>

```json
{
  "status": "success",
  "data": {
    "id": 1,
    "username": "",
    "email": "admin@juice-sh.op",
    "password": "0192023a7bbd73250516f069df18b500",
    "role": "admin",
    "deluxeToken": "",
    "lastLoginIp": "127.0.0.1",
    "profileImage": "assets/public/images/uploads/defaultAdmin.png",
    "totpSecret": "",
    "isActive": true,
    "createdAt": "2025-09-16 02:35:27.988 +00:00",
    "updatedAt": "2025-09-16 02:37:22.923 +00:00",
    "deletedAt": null
  },
  "iat": 1757990652
}
```

---

### 🔑 Identificação da senha
O hash da senha é **MD5**. Utilizando ferramentas de **hash identify**, confirmamos:

<p align="center">
 <img width="979" height="515" alt="Hash identify" src="https://github.com/user-attachments/assets/ceefd394-4b3b-4a9f-bd11-15963b9bcfe8" />
</p>

Exemplos de hashes possíveis identificados:

```text
Possible Hashes:
[+] MD5
[+] Domain Cached Credentials - MD4(MD4(($pass)).(strtolower($username)))

Least Possible Hashes:
[+] RAdmin v2.x
[+] NTLM
[+] MD4
[+] MD2
[+] MD5(HMAC)
[+] MD4(HMAC)
[+] MD2(HMAC)
[+] MD5(HMAC(Wordpress))
[+] Haval-128
[+] Haval-128(HMAC)
[+] RipeMD-128
[+] RipeMD-128(HMAC)
[+] SNEFRU-128
[+] SNEFRU-128(HMAC)
[+] Tiger-128
[+] Tiger-128(HMAC)
[+] md5($pass.$salt)
[+] md5($salt.$pass)
[+] md5($salt.$pass.$salt)
[+] md5($salt.$pass.$username)
[+] md5($salt.md5($pass))
[+] md5($salt.md5($pass.$salt))
[+] md5($salt.md5($salt.$pass))
[+] md5(md5($pass))
[+] md5(md5($pass).$salt)
[+] md5(md5($pass).md5($salt))
[+] md5(md5($salt).$pass)
[+] md5(md5($salt).md5($pass))
[+] md5(md5($username.$pass).$salt)
[+] md5(md5(md5($pass)))
[+] md5(md5(md5(md5($pass))))
[+] md5(md5(md5(md5(md5($pass)))))
[+] md5(sha1($pass))
[+] md5(sha1(md5($pass)))
[+] md5(sha1(md5(sha1($pass))))
[+] md5(strtoupper(md5($pass)))
```

---

### 🔓 Quebra da senha e acesso admin
Depois de identificar que a senha é **MD5**, podemos quebrá-la e obter acesso completo ao **usuário admin**.

<p align="center">
  <img width="1366" height="507" alt="Senha MD5 quebrada" src="https://github.com/user-attachments/assets/0e3aa279-5b10-4c85-878f-b177070465a1" />
</p>
