# Docker PHP HAPROXY 
Seja bem-vindo!
Esse é o meu projeto da faculdade de Rede de Computadores.

Nele consiste em contêiner com PHP, HAPROXY, MYSQL e PHPMYADMIN.

A função desse projeto é fazer um cluster de 3 contêineres com PHP e com o contêiner do HAProxy, realizar o loadbalance das requisições.

Para instalar é bem simples. Basta ter o docker e o git instalados na máquina.

Baixe o docker_php_haproxy para o seu computador. Acesse a pasta aonde estão os arquivos.
Nele basta dar o comando: docker-compose -f docker-compose.yml up -d

Espere carregar tudo.

Ao terminar, basta entrar no navegador e digitar o endereço: localhost:8100

Pronto! Ao atualizar a página diversas vezes, você consegue verificar o ip de cada contêiner, conforme o loadbalance vai direcionando. 

Se desligar um docker do PHP, continuará funcionando também.
