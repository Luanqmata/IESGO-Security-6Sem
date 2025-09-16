
Colocar o " ' " na tela de login para gerar um erro para coleta de informações:

 <img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/02ed779c-aaba-4a9d-8e68-00c26b6aeef7" />

---

Outro tipo de pratica boa é a captura de cookies que vem logo apos vc conseguir logar com o usuario
vc faz a captura do token e decriptografa ele para obter informações:

<img width="1380" height="419" alt="image" src="https://github.com/user-attachments/assets/0ed2c096-4020-4d02-9818-c7393c194b71" />

Token capturado, indo ao site token decode:
<img width="1880" height="1011" alt="image" src="https://github.com/user-attachments/assets/3f3f6b5a-f677-4128-a575-035207a71184" />

```ruby
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

Conseguimos uma senha batendo o olho ja da pra ver que é MD5 mas vamos jogar no hash identify para ter certeza:

<img width="979" height="515" alt="image" src="https://github.com/user-attachments/assets/ceefd394-4b3b-4a9f-bd11-15963b9bcfe8" />
```ruby
  Possible Hashs:
  [+] MD5
  [+] Domain Cached Credentials - MD4(MD4(($pass)).(strtolower($username)))
  
  Least Possible Hashs:
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
  [+] md5($salt.md5($pass))
  [+] md5($salt.md5($pass.$salt))
  [+] md5($salt.md5($pass.$salt))
  [+] md5($salt.md5($salt.$pass))
  [+] md5($salt.md5(md5($pass).$salt))
  [+] md5($username.0.$pass)
  [+] md5($username.LF.$pass)
  [+] md5($username.md5($pass).$salt)
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

é uma senha md5 agr é so quebrar e ter a senha do admin:

<img width="1366" height="507" alt="image" src="https://github.com/user-attachments/assets/0e3aa279-5b10-4c85-878f-b177070465a1" />
