🔍 Exploração do Site — ☢️ Penetratium ☢️ - Team 📡

📘 Matéria: Segurança Ofensiva

-   👨‍🏫 Professor: JPGress
-   🧭 Categoria: Fuzzing

------------------------------------------------------------------------

------------------------------------------------------------------------

⚡ Utilizando Gobuster:

📂 Diretórios Encontrados:

-   🌐 http://businesscorp.com.br/demo → Nada relevante até o momento
-   📜 http://businesscorp.com.br/js/ → Arquivos sensíveis
-   🖼️ http://businesscorp.com.br/images/ → Imagens do site
-   📄 http://businesscorp.com.br/ri/ → Arquivos .doc
-   🗺️ http://businesscorp.com.br/sitemap →
    http://businesscorp.com.br/painelcliente/ → 🔑 Key no código-fonte
-   ℹ️ http://businesscorp.com.br/info → 🔑 Key
-   ⚙️ http://businesscorp.com.br/config → 🔑 Key + Credenciais
-   🔐 http://businesscorp.com.br/pass → Credenciais + Hashes MD5
-   🔑 http://businesscorp.com.br/app/ → Tela de login
-   💾 http://businesscorp.com.br/db/update → Download + Key
-   🥚 https://facebook.us8.list-manage.com/… → Easter Egg

------------------------------------------------------------------------

🕵️ Utilizando Dirsearch:

    dirsearch -u http://businesscorp.com.br -w /usr/share/seclists/Discovery/Web-Content/raft-large-directories.txt -r -t 50 -e * -o resultado.txt

------------------------------------------------------------------------

🧩 Analisando Arquivos JS Encontrados

-   Neste diretório foram encontrados arquivos executáveis .js, uma
    falha grave, contendo arquivos de baixo a alto risco.

📌 Arquivos e Possíveis Riscos

backstretch.js
🖼️ Biblioteca para imagens de fundo responsivas.
⚠️ Risco: Baixo — Pode vazar caminhos internos de imagens (ex.:
/var/www/internal_images/).

getClient.js
👤 Sugere lidar com dados de clientes.
⚠️ Risco: Alto — Pode conter:
- Credenciais hardcoded (ex.: API_KEY = "12345")
- Lógica de autenticação ou tokens de sessão
- Endpoints internos de APIs (ex.: https://api.site.com/internal/users)

gmaps.js
🗺️ Integração com Google Maps.
⚠️ Risco: Médio — Pode expor:
- Chaves de API Google (ex.: key=AIza...)
- Coordenadas de locais sensíveis (ex.: -23.5505,-46.6333 [São Paulo])

init.js
⚙️ Script de inicialização do site.
⚠️ Risco: Pode conter configurações de ambiente (ex.:
baseURL = "http://interno.site.com").

jquery-1.10.2.min.js e jquery-migrate-1.2.1.min.js
📦 Versões antigas do jQuery (2013).
⚠️ Risco: Vulnerabilidades conhecidas (ex.: XSS, CVE-2020-11022).

jquery.countdown.js
⏳ Biblioteca para contadores regressivos.
⚠️ Risco: Baixo — Pode expor prazos internos (ex.:
endDate = "2025-12-31").

modernizr.js
🧪 Detecta recursos do navegador.
⚠️ Risco: Quase nulo, a menos que seja alterado para coleta de dados
sensíveis.
