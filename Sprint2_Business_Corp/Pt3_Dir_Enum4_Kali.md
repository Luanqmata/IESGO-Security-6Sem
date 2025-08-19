# 🔍 Exploração do Site — ☢️ Penetratium ☢️ - Team 📡

## 📘 Matéria: Segurança Ofensiva

-   👨‍🏫 Professor: JPGress
-   🧭 Categoria: Fuzzing

---

## 🚀 Utilizando Gobuster
<p align="center">

<img width="898" height="636" alt="image" src="https://github.com/user-attachments/assets/6857a9c7-b31f-4450-849a-9cc2721ebece" />

</p>

---

## 🧭 Utilizando Dirsearch

    dirsearch -u http://businesscorp.com.br -w /usr/share/seclists/Discovery/Web-Content/raft-large-directories.txt -r -t 50 -e * -o resultado.txt

<p align="center">
  <img width="450" height="877" alt="image" src="https://github.com/user-attachments/assets/8e5491bd-4151-4455-9a26-a8237e249342" />
</p>

---


## 📂 Diretórios encontrados

-   🌐 http://businesscorp.com.br/demo → Nada relevante por enquanto
-   📜 http://businesscorp.com.br/js/  → Arquivos sensíveis
-   🖼 http://businesscorp.com.br/images/  → Imagens do site
-   📄 http://businesscorp.com.br/ri/ → Arquivos .doc
-   🗺 http://businesscorp.com.br/sitemap  → Redireciona para http://businesscorp.com.br/painelcliente/ → KEY no código-fonte
-   ℹ️ http://businesscorp.com.br/info  → KEY encontrada
-   ⚙️ http://businesscorp.com.br/config → KEY + CRED
-   🔑 http://businesscorp.com.br/pass → Credenciais + Cripto MD5
-   🔐 http://businesscorp.com.br/app/ → Tela de login
-   🗃 http://businesscorp.com.br/db/update  → Download + KEY

-   🥚 Easter Egg: https://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&id=e65110b38d


## 📑 Analisando Arquivos JavaScript Encontrados

<p align="center">
  <img width="500" height="473" alt="image" src="https://github.com/user-attachments/assets/42e93ecb-844b-487a-8d51-ca61468ae280" />
</p>

### Os arquivos JavaScript encontrados apresentam riscos em diferentes níveis:

## 📌 Arquivos e Possíveis Riscos:

-   backstretch.js
    - Biblioteca para imagens de fundo responsivas.
    - 🔸 Risco: Baixo, mas pode vazar caminhos internos (ex.:/var/www/internal_images/).

-   getClient.js
    - Pode lidar com dados do cliente.
    - 🔸 Risco: Alto, se contiver:

        - Credenciais em hardcode (API_KEY = "12345")
        - Lógica de autenticação / tokens de sessão
        - Endpoints internos de API (https://api.site.com/internal/users)

-   init.js
    - Script de inicialização do site.
    - 🔸 Risco: Pode conter configurações de ambiente (ex.: baseURL = "http://interno.site.com")

-   jquery-1.10.2.min.js e jquery-migrate-1.2.1.min.js
    - Versões antigas (2013).
    - 🔸 Risco: Vulnerabilidades conhecidas (XSS, CVE-2020-11022).

-   jquery.countdown.js
    - Biblioteca para contadores regressivos.
    - 🔸 Risco: Baixo, mas pode expor prazos internos (ex.: endDate = "2025-12-31")

-   modernizr.js
    - Detecta recursos do navegador.
    - 🔸 Risco: Quase nulo, exceto se modificado para coletar dados sensíveis.

---

# Arquivos JS Comprometidos:

## Arquivo: getClient.js

- Vazamentos de dados ( LGPD ) = caminho encontrado = http://businesscorp.com.br/apiClients
- Requisição sem autenticação
- Gravidade Alta

<p align="center">
    <img width="440" height="251" alt="image" src="https://github.com/user-attachments/assets/0a6ed6fd-938a-4ccb-b9a9-55635903f294" />
</p>    
    
    
        Cliente - conta

        Rafael Albertoni - 278834
        Julia Carla Stefan - 293884
        Wilson Santos - 298333
        Osmar Bueno Provincio - 265009 
        Franchesco Oligar - 283748
        Jose dos Santos - 275829

---
 
# Acessando : http://businesscorp.com.br/ri/

<p align="center">
    <img width="443" height="226" alt="image" src="https://github.com/user-attachments/assets/2cf4aef4-6541-4bd7-ba09-7eb02d07c822" />
</p>

## arquivo encontrado; conteudo do .doc:

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

# Sobrenome do Rogerio : SEVEROVISK
 
---
