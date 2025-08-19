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
# Ultilizando Dirsearch:

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

    📌 Arquivos e Possíveis Riscos
    backstretch.js
    
    Biblioteca para imagens de fundo responsivas.
    
    Risco: Baixo, mas se mal configurado, pode vazar caminhos internos de imagens (ex.: /var/www/internal_images/).
    
    getClient.js
    
    Nome sugere que pode lidar com dados do cliente (usuário).
    
    Risco: Alto se contiver:
    
    Credenciais em hardcode (ex.: API_KEY = "12345").
    
    Lógica de autenticação ou tokens de sessão.
    
    Endpoints internos de APIs (ex.: https://api.site.com/internal/users).
    
    gmaps.js
    
    Biblioteca para integração com Google Maps.
    
    Risco: Médio se incluir:
    
    Chaves de API do Google expostas (ex.: key=AIza...).
    
    Coordenadas de locais sensíveis (ex.: -23.5505,-46.6333 [São Paulo]).
    
    init.js
    
    Script de inicialização do site.
    
    Risco: Pode conter configurações de ambiente (ex.: baseURL = "http://interno.site.com").
    
    jquery-1.10.2.min.js e jquery-migrate-1.2.1.min.js
    
    Versões antigas do jQuery (janeiro de 2013).
    
    Risco: Vulnerabilidades conhecidas (ex.: XSS, CVE-2020-11022).
    
    jquery.countdown.js
    
    Biblioteca para contadores regressivos.
    
    Risco: Baixo, mas pode expor prazos internos (ex.: endDate = "2025-12-31").
    
    modernizr.js
    
    Ferramenta para detectar recursos do navegador.
    
    Risco: Quase nulo, a menos que seja modificado para coletar dados sensíveis.






