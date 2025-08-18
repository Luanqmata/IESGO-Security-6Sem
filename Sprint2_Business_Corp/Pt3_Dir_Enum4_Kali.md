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
  - http://businesscorp.com.br/demo 
  - http://businesscorp.com.br/js/ 
  - http://businesscorp.com.br/images/
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

### log do dirsearch:
  ```txt      
      301   248B   http://businesscorp.com.br/admin    -> REDIRECTS TO: http://businesscorp.com.br/admin/
      301   247B   http://businesscorp.com.br/js    -> REDIRECTS TO: http://businesscorp.com.br/js/
      301   247B   http://businesscorp.com.br/css    -> REDIRECTS TO: http://businesscorp.com.br/css/
      301   250B   http://businesscorp.com.br/images    -> REDIRECTS TO: http://businesscorp.com.br/images/
      200   119B   http://businesscorp.com.br/config
      301   247B   http://businesscorp.com.br/app    -> REDIRECTS TO: http://businesscorp.com.br/app/
      301   246B   http://businesscorp.com.br/db    -> REDIRECTS TO: http://businesscorp.com.br/db/
      301   247B   http://businesscorp.com.br/site    -> REDIRECTS TO: http://businesscorp.com.br/site/
      200    80B   http://businesscorp.com.br/info
      200     5KB  http://businesscorp.com.br/demo
      200   624B   http://businesscorp.com.br/sitemap
      301   249B   http://businesscorp.com.br/intranet    -> REDIRECTS TO: http://businesscorp.com.br/intranet/
      401   343B   http://businesscorp.com.br/teste
      200   109B   http://businesscorp.com.br/robots
      200    46B   http://businesscorp.com.br/pass
      301   249B   http://businesscorp.com.br/_docs    -> REDIRECTS TO: http://businesscorp.com.br/_docs/
      301   248B   http://businesscorp.com.br/bkp    -> REDIRECTS TO: http://businesscorp.com.br/bkp/
      200     1KB  http://businesscorp.com.br/favicon
      403   241B   http://businesscorp.com.br/server-status
      301   246B   http://businesscorp.com.br/ri    -> REDIRECTS TO: http://businesscorp.com.br/ri/
      200     2KB  http://businesscorp.com.br/js/init
      200    11KB  http://businesscorp.com.br/js/gmaps
      301   250B   http://businesscorp.com.br/css/fonts    -> REDIRECTS TO: http://businesscorp.com.br/css/fonts/
      200     3KB  http://businesscorp.com.br/css/layout
      200     5KB  http://businesscorp.com.br/css/default
      200     3KB  http://businesscorp.com.br/images/logo
      200    31KB  http://businesscorp.com.br/images/preloader
      200   118B   http://businesscorp.com.br/db/update
      301   249B   http://businesscorp.com.br/site/css    -> REDIRECTS TO: http://businesscorp.com.br/site/css/
      301   249B   http://businesscorp.com.br/site/js    -> REDIRECTS TO: http://businesscorp.com.br/site/js/
      301   252B   http://businesscorp.com.br/site/images    -> REDIRECTS TO: http://businesscorp.com.br/site/images/
      200     5KB  http://businesscorp.com.br/site/demo
      301   250B   http://businesscorp.com.br/site/bkp    -> REDIRECTS TO: http://businesscorp.com.br/site/bkp/
      200     1KB  http://businesscorp.com.br/site/favicon
      200    64B   http://businesscorp.com.br/bkp/script
      200    32KB  http://businesscorp.com.br/ri/RI
      301   256B   http://businesscorp.com.br/css/fonts/montserrat    -> REDIRECTS TO: http://businesscorp.com.br/css/fonts/montserrat/
      301   254B   http://businesscorp.com.br/site/css/fonts    -> REDIRECTS TO: http://businesscorp.com.br/site/css/fonts/
      200     3KB  http://businesscorp.com.br/site/css/layout
      200     5KB  http://businesscorp.com.br/site/css/default
      200     2KB  http://businesscorp.com.br/site/js/init
      200    11KB  http://businesscorp.com.br/site/js/gmaps
      200     3KB  http://businesscorp.com.br/site/images/logo
      200    31KB  http://businesscorp.com.br/site/images/preloader
      301   260B   http://businesscorp.com.br/site/css/fonts/montserrat    -> REDIRECTS TO: http://businesscorp.com.br/site/css/fonts/montserrat/
  ```
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
