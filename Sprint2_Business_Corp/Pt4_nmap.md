

# Usando db_nmap no MF6

```txt
  db_nmap -sV -sS -O -A -p- -v 37.59.174.225
```

<img width="727" height="430" alt="image" src="https://github.com/user-attachments/assets/5aa624c2-217b-4ab2-829b-59d801321886" />

---

<img width="796" height="386" alt="image" src="https://github.com/user-attachments/assets/45232b4c-850c-4462-b071-bab89cc67f1d" />

---

- Scaneando portas UDP 

```txt
  db_nmap -sU -sV --host-timeout 30m --max-retries 2 -p- -v 37.59.174.225
```

--- scan unico e agressivo em cada porta:

FTP (Porta 21)
bash

db_nmap -sS -sV -sC -A -T4 --script=ftp-* -p 21 37.59.174.225

SSH (Porta 22)
bash

db_nmap -sS -sV -sC -A -T4 --script=ssh-* -p 22 37.59.174.225

DNS (Porta 53 TCP)
bash

db_nmap -sS -sV -sC -A -T4 --script=dns-* -p 53 37.59.174.225

HTTP (Porta 80)
bash

db_nmap -sS -sV -sC -A -T4 --script=http-* -p 80 37.59.174.225

RPCBIND (Porta 111)
bash

db_nmap -sS -sV -sC -A -T4 --script=rpc-* -p 111 37.59.174.225

Comando Agressivo Completo (Todas as portas de uma vez)
bash

db_nmap -sS -sV -sC -A -T4 --script="ftp-*,ssh-*,dns-*,http-*,rpc-*" -p 21,22,53,80,111 37.59.174.225 
