# 🔎 Usando `db_nmap` no MF6  

## 🌐 Scan de Todas as Portas TCP  
```txt
db_nmap -sV -sS -O -A -p- -v 37.59.174.225
```

<img width="727" height="430" alt="image" src="https://github.com/user-attachments/assets/5aa624c2-217b-4ab2-829b-59d801321886" />  
---  
<img width="796" height="386" alt="image" src="https://github.com/user-attachments/assets/45232b4c-850c-4462-b071-bab89cc67f1d" />  

---

## 📡 Scaneando Portas UDP  
```txt
db_nmap -sU -sV --host-timeout 30m --max-retries 2 -p- -v 37.59.174.225
```

---

## 🎯 Scan Único e Agressivo  

### 📂 FTP (Porta 21)  
```sh
msf6 > db_nmap -p 21 -sV -sC 37.59.174.225
```

📌 Resultado:  
- Serviço: **ProFTPD 1.3.4a**  
- Sistema: **Unix**  

---

### 🔑 SSH (Porta 22)  
```sh
db_nmap -sS -sV -sC -A -T4 --script=ssh-* -p 22 37.59.174.225
```

📌 Destaques:  
- Serviço: **OpenSSH 6.0p1 Debian 4+deb7u2**  
- Métodos de autenticação: `publickey`, `password`  
- Chaves aceitas: Nenhuma  
- HostKeys detectados: DSA, RSA, ECDSA  

🔍 Testando algoritmos:  
```sh
msf6 > db_nmap -p 22 --script ssh2-enum-algos 37.59.174.225
```

🔎 Auditoria SSH:  
```sh
ssh-audit 37.59.174.225
```

---

### 🌍 DNS (Porta 53 - TCP)  
```sh
db_nmap -sS -sV -sC -A -T4 --script=dns-* -p 53 37.59.174.225
```

📌 Resultado:  
- Serviço: **ISC BIND 9.8.4**  
- DNS Brute-Force: Encontrados hosts `vpn`, `mail`, `www`, `ftp`, `sip`, `smtp`  

---

### 🌐 HTTP (Porta 80)  
```bash
db_nmap -sS -sV -sC -A -T4 --script=http-* -p 80 37.59.174.225
```

---

### ⚙️ RPCBIND (Porta 111)  
```sh
db_nmap -sS -sV -sC -A -T4 --script=rpc-* -p 111 37.59.174.225
```

📌 Resultado:  
- Serviço: **rpcbind 2-4**  
- Portas RPC identificadas (TCP e UDP)  

---

## 🛠️ Comando Agressivo Completo  
Executando todos os módulos de uma vez:  

```bash
db_nmap -sS -sV -sC -A -T4 --script="ftp-*,ssh-*,dns-*,http-*,rpc-*" -p 21,22,53,80,111 37.59.174.225
```

---

# 💣 Payloads no MF6  

### 🔓 Login Encontrado no FTP e SSH (Porta 22)  
<img width="853" height="235" alt="image" src="https://github.com/user-attachments/assets/5c7364a0-bba9-466a-ace2-b902774b0c7c" />  

---

### 👤 Reconhecimento de Usuários com Payload do MF6  
<img width="975" height="812" alt="image" src="https://github.com/user-attachments/assets/d150ad96-c994-428b-87d2-db59396d234c" />  

📌 Resultado:  
- Diversos usuários encontrados via brute force.  

---

## 📁 Lista de Usuários Extraída  
```sh
root
ftp
longatto
backup
www-data
nobody
daemon
bin
sys
sync
games
man
lp
mail
news
uucp
proxy
list
irc
gnats
Debian_exim
sshd
proftpd
bind
```
