# Cadastra
cadastro de um usuário em um banco mysql utilizando o framework codeigniter

Tutorial de execução do projeto ‘Cadastra’

1º  - O Primeiro passo consiste em subir o banco de dados do projeto. 
O dump do banco esta na raiz do projeto e o banco deve se chamar cadastro.

2º - O segundo passo consiste em configurar as credenciais de acesso ao banco. 
Acesse :

    /application/config/database.php 
E altere as credenciais do banco de dados "hostname" e "username".

3º - Configurar a base_url do projeto. Acessar o seguinte caminho:
    /application/config/config.php 
    Alterar a linha 26 para a URL do projeto como segue:
$config[‘base_url’]= <URL que o projeto irá rodar>

example: $config[‘base_url’]= "http://localhost/cadastro/"

