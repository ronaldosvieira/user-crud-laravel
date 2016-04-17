# user-crud-laravel
```user-crud-laravel``` é um simples aplicativo web de cadastro de usuários que explora a habilidade de desenvolvimento rápido fornecida pelo framework Laravel. O aplicativo é feito em PHP e utiliza o PostgreSQL para armazenar seus dados. Sua hospedagem é feita através do Heroku.

## Requisitos
* :white_check_mark: **Usar o framework PHP Laravel**;
  * Foi utilizado o framework Laravel requerido para este projeto.
* :white_check_mark: **Usar o PostgreSQL para a persistência dos registros**;
  * Foi utilizado o banco de dados PostgreSQL fornecido pelo Heroku para este projeto.
* :white_check_mark: **Realizar validações dos tipos de campos**;
  * Foi utilizada a funcionalidade de validação de formulários fornecida pelo Laravel.
* :white_check_mark: **Usar design responsivo para as telas**.
  * Foi utilizado o framework Bootstrap para a confecção do front-end. As páginas são completamente responsivas.

## Descrição
#### Página inicial
A página apresenta uma lista com os nomes dos usuários presentes no banco de dados. É possível ver as informações de um determinado usuário clicando em seu nome. Para cada usuário, são dispostos dois botões ```Edit``` e ```Delete``` que respectivamente possibilitam a edição de seus dados e sua deleção. Ao clicar no último, uma janela de confirmação é exibida.
Após a lista de usuários há um botão ```Add a User``` que possibilita a adição de um novo usuário aos registros.

#### Página de criação de usuário
A página apresenta um formulário contendo os campos ```name```, ```email```, ```birthday```, ```occupation``` e ```notes```, todos em branco. Para efetuar a adição do usuário, é necessário clicar no botão ```Add User``` localizado abaixo do formulário. Para que a adição seja efetuada com sucesso, deve-se satisfazer os seguintes requisitos:
* Os campos ```name```, ```email```, ```birthday``` e ```notes``` devem ser preenchidos;
* O campo ```email``` deve conter um e-mail válido;
* O campo ```email``` deve conter um e-mail que não pertence a nenhum usuário já inserido nos registros;
* O campo ```birthday``` deve conter uma data no formato ```yyyy-mm-dd```.
Ao clicar no botão ```Add User```, se pelo menos um dos requisitos acima não tiver sido satisfeito, será mostrada a mesma página porém com um alerta descrevendo o(s) requisito(s) não satisfeito(s).

#### Página de visualização de usuário
A página apresenta uma tabela contendo todas as informações relacionadas ao usuário. Após esta tabela, são dispostos dois botões ```Edit``` e ```Delete``` que respectivamente possibilitam a edição de seus dados e sua deleção. Ao clicar no último, uma janela de confirmação é exibida.

#### Página de edição de usuário
A página apresenta funcionalidade semelhante à página de criação de usuário, exceto que ao entrar na página de edição os campos já estarão preenchidos com as informações previamente registradas. O funcionamento do botão ```Update```, disposto após o formulário, é semelhante à do botão ```Add User``` da página de criação de usuário, exceto que não adicionará um novo usuário ao banco mas alterará o usuário existente.

## Possíveis melhorias
* Modularizar e reutilizar componentes do front-end (ex. formulário);
* Utilizar eventuais recursos inexplorados do Laravel (algumas partes do aplicativo podem ter sido desenvolvidas de maneira subótima por falta de conhecimento do framework).
