# truckTest
Requisitos do ambiente para rodar a aplicação

PHP >= 7.1.3

Composer

MariaDB 10.1.38


Crie um banco de dados através de um SGBD de sua preferência ou linha de comando com o nome de "truck_test"

As credenciais do banco de dados devem ser checadas e configuradas em /.env

Banco de dados: truck_test

Usuário: root

Senha: (padrão da instalação, podendo utilizar a de sua preferência, levando em conta que o arquivo .env deve ser atualizado de acordo)


Executar os seguintes comandos a partir da raiz do projeto

php artisan migrate

php artisan db:seed

php artisan serve
