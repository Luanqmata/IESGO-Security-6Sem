

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

db_nmap -sS -sV -sC -A -T4 --script=ftp-* -p 21 37.59.174.225

SSH (Porta 22)

db_nmap -sS -sV -sC -A -T4 --script=ssh-* -p 22 37.59.174.225

DNS (Porta 53 TCP)
```sh
db_nmap -sS -sV -sC -A -T4 --script=dns-* -p 53 37.59.174.225

  [*] Nmap: PORT   STATE SERVICE VERSION
  [*] Nmap: 53/tcp open  domain  ISC BIND 9.8.4-rpz2+rl005.12-P1
  [*] Nmap: |_dns-
fuzz: Server didn't response to our probe, can't fuzz
  [*] Nmap: | dns-nsid:
  [*] Nmap: |_  bind.version: 9.8.4-rpz2+rl005.12-P1
  [*] Nmap: | dns-nsec-enum:
  [*] Nmap: |_  No NSEC records found
  [*] Nmap: | dns-nsec3-enum:
  [*] Nmap: |_  DNSSEC NSEC3 not supported
  [*] Nmap: Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port
  [*] Nmap: Aggressive OS guesses: Linux 2.6.32 - 3.10 (94%), Linux 2.6.32 - 3.13 (93%), Linux 3.2 - 4.14 (93%), Linux 3.10 - 4.11 (91%), Linux 3.2 (90%), Linux 3.2 - 3.10 (90%), Linux 3.2 - 3.16 (90%), Linux 3.2 - 3.8 (90%), XBMCbuntu Frodo v12.2 (Linux 3.X) 
  (90%), Olivetti 65C-9 printer (90%)
  [*] Nmap: No exact OS matches for host (test conditions non-ideal).
  [*] Nmap: Uptime guess: 0.145 days (since Tue Aug 19 18:58:08 2025)
  [*] Nmap: Network Distance: 26 hops
  [*] Nmap: TCP Sequence Prediction: Difficulty=249 (Good luck!)
  [*] Nmap: IP ID Sequence Generation: All zeros
  [*] Nmap: Host script results:
  [*] Nmap: | dns-brute:
  [*] Nmap: |   DNS Brute-force hostnames:
  [*] Nmap: |     vpn.ip-37-59-174.eu - 213.251.141.40
  [*] Nmap: |     mail.ip-37-59-174.eu - 193.70.18.144
  [*] Nmap: |     www.ip-37-59-174.eu - 213.186.33.5
  [*] Nmap: |     sip.ip-37-59-174.eu - 213.251.186.57
  [*] Nmap: |     ftp.ip-37-59-174.eu - 213.186.33.5
  [*] Nmap: |_    smtp.ip-37-59-174.eu - 193.70.18.144
  [*] Nmap: | dns-blacklist:
  [*] Nmap: |   SPAM
  [*] Nmap: |     l2.apews.org - FAIL
  [*] Nmap: |     list.quorum.to - SPAM
  [*] Nmap: |_    all.spamrats.com - FAIL
```

HTTP (Porta 80)
bash

db_nmap -sS -sV -sC -A -T4 --script=http-* -p 80 37.59.174.225

RPCBIND (Porta 111)
bash

db_nmap -sS -sV -sC -A -T4 --script=rpc-* -p 111 37.59.174.225

Comando Agressivo Completo (Todas as portas de uma vez)
bash

db_nmap -sS -sV -sC -A -T4 --script="ftp-*,ssh-*,dns-*,http-*,rpc-*" -p 21,22,53,80,111 37.59.174.225 
