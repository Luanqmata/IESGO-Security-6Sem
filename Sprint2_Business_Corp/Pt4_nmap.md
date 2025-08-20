# 🔎 Usando `db_nmap` no MF6  

<img width="697" height="517" alt="image" src="https://github.com/user-attachments/assets/55ce8e9a-141f-423a-bf45-fb260005f2a1" />

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
  [*] Nmap: Starting Nmap 7.95 ( https://nmap.org ) at 2025-08-20 01:50 -03
  [*] Nmap: Nmap scan report for ip225.ip-37-59-174.eu (37.59.174.225) 
  [*] Nmap: Host is up (0.22s latency). 
  [*] Nmap: PORT STATE SERVICE VERSION 
  [*] Nmap: 21/tcp open ftp ProFTPD 1.3.4a 
  [*] Nmap: Service Info: OS: Unix
  
```

📌 Resultado:  
- Serviço: **ProFTPD 1.3.4a**  
- Sistema: **Unix**  

---

### 🔑 SSH (Porta 22)  
```sh
db_nmap -sS -sV -sC -A -T4 --script=ssh-* -p 22 37.59.174.225
    [*] Nmap: PORT STATE SERVICE VERSION 
    [*] Nmap: 22/tcp open ssh OpenSSH 6.0p1 Debian 4+deb7u2 (protocol 2.0) 
    [*] Nmap: | ssh-auth-methods: 
    [*] Nmap: | Supported authentication methods: 
    [*] Nmap: | publickey 
    [*] Nmap: |_ password 
    [*] Nmap: | ssh-publickey-acceptance: 
    [*] Nmap: |_ Accepted Public Keys: No public keys accepted 
    [*] Nmap: | ssh-hostkey: 
    [*] Nmap: | 1024 d8:c4:e6:f1:cb:d0:67:51:8e:65:c3:52:a6:d5:c9:b4 (DSA) 
    [*] Nmap: | 2048 e2:c5:29:de:7f:e5:4a:3e:66:15:a7:a6:96:9c:73:a2 (RSA) 
    [*] Nmap: |_ 256 ec:59:07:9b:7c:61:52:9d:a2:10:9f:92:8f:0c:ed:4a (ECDSA) 
    [*] Nmap: |_ssh-run: Failed to specify credentials and command to run. 
    [*] Nmap: | ssh-brute: 
    [*] Nmap: | Accounts: No valid accounts found 
    [*] Nmap: |_ Statistics: Performed 1184 guesses in 301 seconds, average tps: 3.8 
    [*] Nmap: Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port 
    [*] Nmap: Aggressive OS guesses: Linux 2.6.32 - 3.10 (94%), Linux 2.6.32 - 3.13 (93%), Linux 3.2 - 4.14 (93%), 
        Linux 3.10 - 4.11 (91%), Linux 3.2 (90%), Linux 3.2 - 3.10 (90%), Linux 3.2 - 3.16 (90%), Linux 3.2 - 3.8 (90%), 
        XBMCbuntu Frodo v12.2 (Linux 3.X) (90%), Olivetti 65C-9 printer (90%) msf6 > db_nmap -p 22 --script ssh2-enum-algos 37.59.174.225
    [*] Nmap: Starting Nmap 7.95 ( https://nmap.org ) at 2025-08-19 23:28 -03 
    [*] Nmap: Nmap scan report for ip225.ip-37-59-174.eu (37.59.174.225) 
    [*] Nmap: Host is up (0.23s latency). 
    [*] Nmap: PORT STATE SERVICE 
    [*] Nmap: 22/tcp open ssh 
    [*] Nmap: | ssh2-enum-algos: 
    [*] Nmap: | kex_algorithms: (7) 
    [*] Nmap: | ecdh-sha2-nistp256 
    [*] Nmap: | ecdh-sha2-nistp384 
    [*] Nmap: | ecdh-sha2-nistp521 
    [*] Nmap: | diffie-hellman-group-exchange-sha256 
    [*] Nmap: | diffie-hellman-group-exchange-sha1 
    [*] Nmap: | diffie-hellman-group14-sha1 
    [*] Nmap: | diffie-hellman-group1-sha1 
    [*] Nmap: | server_host_key_algorithms: (3) 
    [*] Nmap: | ssh-rsa 
    [*] Nmap: | ssh-dss 
    [*] Nmap: | ecdsa-sha2-nistp256 
    [*] Nmap: | encryption_algorithms: (13) 
    [*] Nmap: | aes128-ctr 
    [*] Nmap: | aes192-ctr 
    [*] Nmap: | aes256-ctr 
    [*] Nmap: | arcfour256 
    [*] Nmap: | arcfour128 
    [*] Nmap: | aes128-cbc 
    [*] Nmap: | 3des-cbc 
    [*] Nmap: | blowfish-cbc 
    [*] Nmap: | cast128-cbc 
    [*] Nmap: | aes192-cbc 
    [*] Nmap: | aes256-cbc 
    [*] Nmap: | arcfour 
    [*] Nmap: | rijndael-cbc@lysator.liu.se 
    [*] Nmap: | mac_algorithms: (11) 
    [*] Nmap: | hmac-md5 
    [*] Nmap: | hmac-sha1 
    [*] Nmap: | umac-64@openssh.com 
    [*] Nmap: | hmac-sha2-256 
    [*] Nmap: | hmac-sha2-256-96 
    [*] Nmap: | hmac-sha2-512 
    [*] Nmap: | hmac-sha2-512-96 
    [*] Nmap: | hmac-ripemd160 
    [*] Nmap: | hmac-ripemd160@openssh.com 
    [*] Nmap: | hmac-sha1-96 
    [*] Nmap: | hmac-md5-96 
    [*] Nmap: | compression_algorithms: (2) 
    [*] Nmap: | none 
    [*] Nmap: |_ zlib@openssh.com 
    [*] Nmap: Nmap done: 1 IP address (1 host up) scanned in 1.48 seconds 
    
    ┌──(china㉿Dragao-Vermelho)-[~/Desktop/SecLists/Usernames/Names] 
    └─$ ssh-audit 37.59.174.225 # general (gen) banner: 
    SSH-2.0-OpenSSH_6.0p1 Debian-4+deb7u2 (gen) s
    oftware: OpenSSH 6.0p1 (gen) compatibility: OpenSSH 5.9-6.0, 
    Dropbear SSH 2013.62+ (some functionality from 0.52) (gen) compression: enabled (zlib@openssh.com)
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
ssh-audit 37.59.174.225:22

  👉 Aqui sim: serviço SSH rodando, versão OpenSSH 6.0p1 (bem antiga, ~2012).
  O ssh-audit apontou várias falhas:
  Algoritmos fracos (diffie-hellman-group1-sha1, 3des-cbc, blowfish-cbc, arcfour/RC4, etc).
  Chaves pequenas (1024 bits).
  Uso de SHA-1 e MD5, considerados quebrados.
  Vulnerável a ataques como Logjam.
  
  Ou seja, essa versão está cheia de fraquezas criptográficas.

  📌 Isso não significa exploit direto = shell, mas mostra que:
  Pode ser possível downgrade de criptografia.
  Pode rolar ataque de brute force ou user enumeration explorando essas configs.
  Como é Debian antigo, também pode existir exploit para OpenSSH 6.0p1 + kernel (dependendo do alvo).
  
```

---

### 🌍 DNS (Porta 53 - TCP)  
```sh
db_nmap -sS -sV -sC -A -T4 --script=dns-* -p 53 37.59.174.225
    
    [*] Nmap: PORT STATE SERVICE VERSION 
    [*] Nmap: 53/tcp open domain ISC BIND 9.8.4-rpz2+rl005.12-P1 
    [*] Nmap: |_dns- fuzz: Server didn't response to our probe, can't fuzz 
    [*] Nmap: | dns-nsid: 
    [*] Nmap: |_ bind.version: 9.8.4-rpz2+rl005.12-P1 
    [*] Nmap: | dns-nsec-enum: 
    [*] Nmap: |_ No NSEC records found 
    [*] Nmap: | dns-nsec3-enum:
    [*] Nmap: |_ DNSSEC NSEC3 not supported 
    [*] Nmap: Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port 
    [*] Nmap: Aggressive OS guesses: Linux 2.6.32 - 3.10 (94%), Linux 2.6.32 - 3.13 (93%), 
          Linux 3.2 - 4.14 (93%), Linux 3.10 - 4.11 (91%), Linux 3.2 (90%), Linux 3.2 - 3.10 (90%), 
          Linux 3.2 - 3.16 (90%), Linux 3.2 - 3.8 (90%), XBMCbuntu Frodo v12.2 (Linux 3.X) (90%), 
          Olivetti 65C-9 printer (90%)
    [*] Nmap: No exact OS matches for host (test conditions non-ideal). 
    [*] Nmap: Uptime guess: 0.145 days (since Tue Aug 19 18:58:08 2025) 
    [*] Nmap: Network Distance: 26 hops 
    [*] Nmap: TCP Sequence Prediction: Difficulty=249 (Good luck!) 
    [*] Nmap: IP ID Sequence Generation: All zeros 
    [*] Nmap: Host script results: 
    [*] Nmap: | dns-brute: 
    [*] Nmap: | DNS Brute-force hostnames: 
    [*] Nmap: | vpn.ip-37-59-174.eu - 213.251.141.40 
    [*] Nmap: | mail.ip-37-59-174.eu - 193.70.18.144 
    [*] Nmap: | www.ip-37-59-174.eu - 213.186.33.5 
    [*] Nmap: | sip.ip-37-59-174.eu - 213.251.186.57 
    [*] Nmap: | ftp.ip-37-59-174.eu - 213.186.33.5 
    [*] Nmap: |_ smtp.ip-37-59-174.eu - 193.70.18.144 
    [*] Nmap: | dns-blacklist: 
    [*] Nmap: | SPAM 
    [*] Nmap: | l2.apews.org - FAIL 
    [*] Nmap: | list.quorum.to - SPAM 
    [*] Nmap: |_ all.spamrats.com - FAIL

```

📌 Resultado:  
- Serviço: **ISC BIND 9.8.4**  
- DNS Brute-Force: Encontrados hosts `vpn`, `mail`, `www`, `ftp`, `sip`, `smtp`  

---

### 🌐 HTTP (Porta 80)  
```bash
db_nmap -sS -sV -sC -A -T4 --script=http-* -p 80 37.59.174.225

  [*] Nmap: |_        <!-- About Section End-->
  [*] Nmap: |_http-apache-negotiation: mod_negotiation enabled.
  [*] Nmap: |_http-title: Business Corp
  [*] Nmap: |_http-userdir-enum: Potential Users: administrator
  [*] Nmap: | http-robots.txt: 4 disallowed entries
  [*] Nmap: |_/_restrito /_docs /admin /bkp
  [*] Nmap: | http-referer-checker:
  [*] Nmap: | Spidering limited to: maxpagecount=30
  [*] Nmap: |_  http://ajax.googleapis.com:80/ajax/libs/jquery/1.10.2/jquery.min.js
  [*] Nmap: |_http-xssed: No previously reported XSS vuln.
  [*] Nmap: | http-vhosts:
  [*] Nmap: |_128 names had status 200
  [*] Nmap: |_http-csrf: Couldn't find any CSRF vulnerabilities.
  [*] Nmap: |_http-fetch: Please enter the complete path of the directory to save data in.
  [*] Nmap: |_http-internal-ip-disclosure: ERROR: Script execution failed (use -d to debug)
  [*] Nmap: | http-methods:
  [*] Nmap: |_  Supported Methods: GET HEAD POST OPTIONS
  [*] Nmap: | http-brute:
  [*] Nmap: |_  Path "/" does not require authentication
  [*] Nmap: | http-grep:
  [*] Nmap: |   (4) http://ip225.ip-37-59-174.eu:80/:
  [*] Nmap: |     (1) ip:
  [*] Nmap: |       + 37.59.174.233
  [*] Nmap: |     (3) email:
  [*] Nmap: |       + rogerio@businesscorp.com.br
  [*] Nmap: |       + camila@businesscorp.com.br
  [*] Nmap: |_      + ti@businesscorp.com.br
  [*] Nmap: |_http-slowloris: false
  [*] Nmap: |_http-dombased-xss: Couldn't find any DOM based XSS.
  [*] Nmap: | http-sitemap-generator:
  [*] Nmap: |   Directory structure:
  [*] Nmap: |     /
  [*] Nmap: |       Other: 1; png: 1
  [*] Nmap: |     /css/
  [*] Nmap: |       css: 3
  [*] Nmap: |     /images/
  [*] Nmap: |       gif: 1; png: 1
  [*] Nmap: |     /js/
  [*] Nmap: |       Other: 1; js: 8
  [*] Nmap: |   Longest directory structure:
  [*] Nmap: |     Depth: 1
  [*] Nmap: |     Dir: /js/
  [*] Nmap: |   Total files found (by extension):
  [*] Nmap: |_    Other: 2; css: 3; gif: 1; js: 8; png: 2
  [*] Nmap: |_http-chrono: Request times for /; avg: 1573.15ms; min: 1253.32ms; max: 1745.01ms
  [*] Nmap: |_http-stored-xss: Couldn't find any stored XSS vulnerabilities.
  [*] Nmap: |_http-backup-finder: ERROR: Script execution failed (use -d to debug)
  [*] Nmap: |_http-server-header: Apache/2.2.22 (Debian)
  [*] Nmap: |_http-favicon: Unknown favicon MD5: 3A56D63B1535E6264C3722C08D6F4D48
  [*] Nmap: | http-headers:
  [*] Nmap: |   Date: Sat, 28 Sep 2019 14:53:26 GMT
  [*] Nmap: |   Server: Apache/2.2.22 (Debian)
  [*] Nmap: |   Last-Modified: Wed, 25 Sep 2019 17:05:45 GMT
  [*] Nmap: |   ETag: "20463-1bb6-59363a9ea0957"
  [*] Nmap: |   Accept-Ranges: bytes
  [*] Nmap: |   Content-Length: 7094
  [*] Nmap: |   Vary: Accept-Encoding
  [*] Nmap: |   Connection: close
  [*] Nmap: |   Content-Type: text/html
  [*] Nmap: |
  [*] Nmap: |_  (Request type: HEAD)
  [*] Nmap: | http-traceroute:
  [*] Nmap: |_  Possible reverse proxy detected.
  [*] Nmap: |_http-feed: Couldn't find any feeds.
  [*] Nmap: | http-enum:
  [*] Nmap: |   /admin/: Possible admin folder
  [*] Nmap: |   /robots.txt: Robots file
  [*] Nmap: |   /info.php: Possible information file
  [*] Nmap: |   /db/: BlogWorx Database
  [*] Nmap: |   /app/: Potentially interesting folder
  [*] Nmap: |   /css/: Potentially interesting directory w/ listing on 'apache/2.2.22 (debian)'
  [*] Nmap: |   /db/: Potentially interesting folder
  [*] Nmap: |   /images/: Potentially interesting directory w/ listing on 'apache/2.2.22 (debian)'
  [*] Nmap: |   /intranet/: Potentially interesting folder
  [*] Nmap: |   /js/: Potentially interesting directory w/ listing on 'apache/2.2.22 (debian)'
  [*] Nmap: |   /site/: Potentially interesting folder
  [*] Nmap: |_  /_docs/: Potentially interesting directory w/ listing on 'apache/2.2.22 (debian)'
  [*] Nmap: |_http-mobileversion-checker: No mobile version detected.
```

---

### ⚙️ RPCBIND (Porta 111)  
```sh
db_nmap -sS -sV -sC -A -T4 --script=rpc-* -p 111 37.59.174.225

      [*] Nmap: 111/tcp open rpcbind 2-4 (RPC #100000) 
      [*] Nmap: | rpcinfo: [*] Nmap: | program version port/proto service 
      [*] Nmap: | 100000 2,3,4 111/tcp rpcbind 
      [*] Nmap: | 100000 2,3,4 111/udp rpcbind 
      [*] Nmap: | 100000 3,4 111/tcp6 rpcbind 
      [*] Nmap: |_ 100000 3,4 111/udp6 rpcbind 
      [*] Nmap: Warning: OSScan results may be unreliable because we could not find at least 1 open and 1 closed port 
      [*] Nmap: Aggressive OS guesses: Linux 2.6.32 - 3.10 (94%), Linux 2.6.32 - 3.13 (93%), Linux 3.2 - 4.14 (93%), Linux 3.10 - 4.11 (91%), Linux 3.2 (90%), 
          Linux 3.2 - 3.10 (90%), Linux 3.2 - 3.16 (90%), Linux 3.2 - 3.8 (90%), Olivetti 65C-9 printer (90%), Linux 2.6.32 - 3.5 (90%) 
      [*] Nmap: No exact OS matches for host (test conditions non-ideal). 
      [*] Nmap: Network Distance: 26 hops 
      [*] Nmap: TRACEROUTE (using port 443/tcp) msf6 > rpcinfo -p 37.59.174.225 
      [*] exec: rpcinfo -p 37.59.174.225 program vers proto port service 100000 4 tcp 111 portmapper 100000 3 tcp 111 portmapper 100000 2 tcp 111 portmapper 100000 4 udp 111 portmapper 100000 3 udp 111 portmapper 100000 2 udp 111 portmapper
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
<img width="949" height="519" alt="image" src="https://github.com/user-attachments/assets/0cd7787d-f883-4975-ac5d-3e059f781307" />


# ✅ Resumo do que você encontrou:

 - FTP → ProFTPD 1.3.4a (versão com histórico de exploits, incluindo mod_copy).
 - SSH → OpenSSH 6.0p1 (fraco, vários algos quebrados).
 - HTTP → Apache 2.2.22 (antigo e vulnerável a exploits como mod_ssl, slowloris, etc).
