# 🔍 Exploração do Site — ☢️ Penetratium ☢️ - Team 📡

## 📘 Matéria: Segurança Ofensiva

- 👨‍🏫 **Professor:** JPGress  
- 🧭 **Categoria:** Fuzzing

---

<p align="center">

<img width="984" height="512" alt="image" src="https://github.com/user-attachments/assets/04c4300e-bbf8-4408-b0ff-3835dd3b282f" />

</p>

---


# Ultilizando gobuster:
<p align="center">

<img width="898" height="636" alt="image" src="https://github.com/user-attachments/assets/6857a9c7-b31f-4450-849a-9cc2721ebece" />

</p>

  ## diretorios encontrados:
  - http://businesscorp.com.br/demo -> por enquanto nada de mais
  - http://businesscorp.com.br/js/  -> arquivos sensiveis
  - http://businesscorp.com.br/images/ -> Imagens do site
  - http://businesscorp.com.br/ri/ -> .doc
  - http://businesscorp.com.br/sitemap => http://businesscorp.com.br/painelcliente/ -> KEY NO CDG FONTE
  - http://businesscorp.com.br/info -> KEY 
  - http://businesscorp.com.br/config -> KEY + CRED
  - http://businesscorp.com.br/pass -> CRED + CRIPTO MD5
  - http://businesscorp.com.br/app/ -> Tela de logon
  - http://businesscorp.com.br/db/update -> DOWLOAD + KEY 
  
  - https://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&id=e65110b38d -> easter egg

--- 

```sh
  dirsearch -u http://businesscorp.com.br -w /usr/share/seclists/Discovery/Web-Content/raft-large-directories.txt -r -t 50 -e * -o resultado.txt
```
<p align="center">
  <img width="450" height="877" alt="image" src="https://github.com/user-attachments/assets/8e5491bd-4151-4455-9a26-a8237e249342" />
</p>

---

## Analizando arquivos js encontrados

<p align="center">
  <img width="500" height="473" alt="image" src="https://github.com/user-attachments/assets/42e93ecb-844b-487a-8d51-ca61468ae280" />
</p>

- Neste diretorios temos arquivos executaveis .js, um falha lastimavel , contendo arquivos de baixo a alto risco

 arquivo : backstretch.js
  Biblioteca para imagens de fundo responsivas.
  Risco: Baixo, mas se mal configurado, pode vazar caminhos internos de imagens





--- 

conteudo do .doc

```doc
  FATO RELEVANTE
  RELACAO COM INVESTIDORES
  ROGERIO SEVEROVISK
  2019
  
  RELAÇÃO COM INVESTIDORES (RI)
  
  GRUPO BUSINESS CORP

  Em observância ao artigo 157, parágrafo 4º, da Lei nº 6.404, de 15 de dezembro de 1976, conforme alterada, 
  e à Instrução da Comissão de Valores Mobiliários (“CVM”) nº 358, de 3 de janeiro de 2002, conforme alterada,
  vem a público informar aos seus acionistas e ao mercado que celebrou um Memorando de Entendimentos com objetivo de firma uma parceria...
```

## senha do usuario moikano:$apr1$V00rWFKx$wjJgy.fDsede3BPTRkeAe0

<img width="772" height="439" alt="image" src="https://github.com/user-attachments/assets/0142404b-faa5-4b99-9b13-13f3af27a122" />

## tecnologia na pag de login .php 

<img width="403" height="150" alt="image" src="https://github.com/user-attachments/assets/7142c4e2-2569-480b-8221-4b11d9009794" />

