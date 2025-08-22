# 🔍 Exploração do Site — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Injection

---

<p align="center">
  <img width="625" height="607" alt="image" src="https://github.com/user-attachments/assets/aa82316a-be84-4c1d-9b43-1603a418197c" />
</p>
2 novos diretorios encontrados:

- http://www.businesscorp.com.br/~administrator/?C=FUZZ
<p align="center">
  <img width="459" height="249" alt="image" src="https://github.com/user-attachments/assets/4b3d6f37-86f6-4f1e-a7dc-91dda80643cc" />
</p>

- http://businesscorp.com.br/info.php?=FUZZ
<p align="center">
  <img width="622" height="813" alt="image" src="https://github.com/user-attachments/assets/17fc035f-4b25-47be-9353-b348abc59cae" />
</p>

## 🔒 Análise do Arquivo PHP (info.php)

## 📊 Configurações Relevantes:

- PHP 5.4.45 (Versão extremamente desatualizada)
- Exibição de Erros: Desativada ✅
- Upload de Arquivos: Ativado (2MB max) ⚠️
- Funções Perigosas: Parcialmente desativadas ✅
- allow_url_fopen: Ativado ⚠️
- allow_url_include: Desativado ✅

## 🔍 Observações Importantes:

- Arquivo expõe informações sensíveis do ambiente
- Não possui restrições de acesso específicas
- Revela caminhos absolutos do sistema (/var/www)
- Mostra versões exatas de todos componentes

---

<p align="center">
  <img width="1004" height="486" alt="image" src="https://github.com/user-attachments/assets/61e78faf-fe33-4644-a8fb-1e0af8220c7e" />
</p>

-- 2 novos diretorios:

<p align="center">
  <img width="399" height="271" alt="image" src="https://github.com/user-attachments/assets/d38f5f24-c97f-4c9b-8e92-ae6bea24f3fd" />
</p>

-- tela de login Entrada testar possiveis credenciais ou procurar exploit

exploit : https://legalhackers.com/advisories/SquirrelMail-Exploit-Remote-Code-Exec-CVE-2017-7692-Vuln.html

<img width="1211" height="785" alt="image" src="https://github.com/user-attachments/assets/7d539959-2f68-49e3-a0cd-c9b55c6e40d5" />

