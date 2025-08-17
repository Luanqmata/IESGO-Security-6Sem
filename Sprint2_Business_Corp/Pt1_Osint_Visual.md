# Ao abrir o link da http://businesscorp.com.br/#intro

<img width="492" height="945" alt="image" src="https://github.com/user-attachments/assets/3fa26601-ec93-4987-bc45-d09d374dbf93" />

----

# Pontos que chamaram a atenção na pagina inicial

3 emails e 3 numeros de contato:
----

<img width="454" height="159" alt="image" src="https://github.com/user-attachments/assets/06bf792a-51b6-49b7-99a6-e9171d29db00" />

----
aqui temos 2 nomes de possiveis logins

---

Temos a data uma data antiga , e o nome de um possivel desinger/programador :
---

<img width="266" height="64" alt="image" src="https://github.com/user-attachments/assets/da0c9f84-5562-4f96-8661-e5a9b21383a5" />

---

Inspecionei o codigo HTML em busca de algo , e nada encontrado !


# Os 4 links clicaveis ( Testando 1 por 1 ):

## Primeiro link: http://businesscorp.com.br/cadastro.php

---

<img width="437" height="159" alt="image" src="https://github.com/user-attachments/assets/e3dcc68c-d58a-4d5c-9d1e-303dd115d654" />

---

## Após clicar no primeiro link , Tive o retorno que a pagina não existe error 404 por outro lado ela me cospiu algma informações importantes
    
  info 1 = Debian == Já sabemos que possivelmente é uma Distro Linux
  info 2 = Versão do apache == Apache/2.2.22 

Aqui : Temos 2 informaçoes de bandeija, Forçar um error pode te mostrar informações previlegiadas , no futuro tiraremos a prova!

Olhando o f12 Encontrei esse link : http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2J1c2luZXNzY29ycC5jb20uYnIvY2FkYXN0cm8ucGhw

Este é um possivel laboratorio da Kaspersky Quebrando a 4° parede .


## Segundo link ( Clicando clientes ): http://37.59.174.233:8080

---

<img width="475" height="615" alt="image" src="https://github.com/user-attachments/assets/446b2241-ad5d-4c56-9d05-eb0f41dca275" />

---

Nada encontrado, à não ser o link : 37.59.174.233 que te entrega um endereço de IP .

## Terceiro link : http://intranet.businesscorp.com.br

---

<img width="549" height="159" alt="image" src="https://github.com/user-attachments/assets/32b0d881-9089-46de-8b31-029e7f3cb0f2" />

---

Aqui encontramos a mensagem que esta funcionando , Está a espera de ser preenchido com alguma pagina WEB ( Apache ou Nginx )

## Quarto link : http://mail.businesscorp.com.br

<img width="957" height="536" alt="image" src="https://github.com/user-attachments/assets/1a4a0b47-870a-4361-958d-8740d97ce1ea" />

Aqui nos deparamos com uma pagina de autenticação:
    Possue um FORMS ( Formulario de preenchimento )
    Recebe metodo POST
    Fraqueza : Possivel abuso de brute force ( Hydra )    

OBS : E aqui Podemos testar o nome da (  CAMILA E ROGERIO  )

## Quinto link : http://rh.businesscorp.com.br

---

<img width="332" height="121" alt="image" src="https://github.com/user-attachments/assets/951bbcd9-6e75-485c-8bf6-b5f915ced284" />

--- 
Esse está um pouco mais encondido porém não passa despercebido:

<img width="1877" height="1008" alt="image" src="https://github.com/user-attachments/assets/f0c9fe5b-13f7-490a-9200-a45dd00e1f01" />

Fazendo a analise da pagina nela não a nada demais mas quando clicamos em '' Submeta seu Curriculo '' 
<img width="1876" height="1007" alt="image" src="https://github.com/user-attachments/assets/65b4cb67-666f-47e7-8f41-778a409f2c75" />

Ela abre esse formulario mais completo , onde vc pode upar arquivos PDF , podendo upar um arquivo malicioso.
Mostrando que existe um diretorio que armazena Esses arquivos q é upado pelos usuarios.
