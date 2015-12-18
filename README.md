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


///////////////////////////   DIRETRIZES ///////////////////////////////////////
Teste para TI

Olá ,

Uma forma de que possamos avaliar os seus conhecimentos é através de um teste.

O nosso teste consiste em criar uma página WEB que colete dados de um usuário para uma promoção.

O título da promoção é : "Tenha chances de ganhar um Iphone todo mês"

Atenção para os requisitos:

Pode ser escrito em qualquer linguagem;
Deve-se ter um manual com os passos para a execução da aplicação ou ter uma url com a aplicação rodando (exceto php e ruby);
Os campos a ser recolhidos são: nome, e-mail, data de nascimento e gênero;
Validar os campos:
nome (obrigatório, até 255 letras);
e-mail (obrigatório, até 255 letras, formato: [nome de usuario]@[dominio]);
data de nascimento (formato DD-MM-AAAA);
gênero (formato: M ou F);
Comentários no código-fonte (em inglês, ganha-se um ponto a mais);
Clareza no código;
Implementação orientada a objeto;
Armazenar os dados em um banco de dados.

Dicas:

Um exemplo de landingpage, porém esta não está completa;
Um bom design não é requisito obrigatório, mas é critério de desempate;
Pode-se utilizar Twitter Bootstrap ou qualquer framework de frontend;
Pode-se utilizar qualquer framework de Backend;
Caso não entenda ou tenha alguma dificuldade no teste, entre em contato, nenhum ponto é perdido por isso;
Mesmo não completando o teste, nos envie o que foi feito, somos bem flexíveis.

Entregáveis:

Código fonte;
Manual (exceto php e ruby);