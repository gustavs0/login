# login
Sistema de Login em PHP e Javascript

---
#

#aula10 - 18/11/2019
- Preparação para a geração de uma nova senha

# aula09 - 22/10/2019
- Autenticação do usuário completa
- Permissão de navegação atravez da SESSÃO
- Lembrar senha e usuário com COOKIES

# aula08 - 21/10/2019
- Autenticação do usuário e permissão de acaso ao perfil.php
- Conceito de sessão

# aula07 - 18/10/2019
- Início da autenticação e entrada no sistema

# aula06 - 15/10/2019
 - Persistênica de dados no banco de dados.

# aula05 - 04/10/2019
 - envio de dadoas para o front-end para back-end, métodos GET e POST.

# aula04 - 01/10/2019
 - Validação com HTML5
 - Validação dos campos com jQuery validate

# aula03 - 30/09/2019
 - Formulário de Cadastro de novos usuários
 - ~Validação dos campos com jQuery validate~
 - ~Oculter e Mostrar os formulários com jQuery~

 jQuery é uma biblioteca de função javascript.

# aula02 - 24/09/2019
layout bootstrap para os formulários
- Formulário de login
- Formulário de recuperação de senha
- Formulário de Cadastro de novos usuários

# aula01 - 23/09/2019

aula inicial, configuração do projeto no Github.

# Passo a passo em todo início da aula

Habilitar o Proxy
Tecla Windows - Abrir a janela Prompt de Comando
Copie e cole a linha abaixo - selecione e pressione as teclas Ctrl C

git config --global http.proxy http://10.1.21.254:3128

Pressione Enter

## Clonar o repositório **login ** na pasta** c:\xampp\htdocs **
  - Tecla Windows - Abrir o Github Desktop
  - Clique em *Sing in to Github.com*
  - Digite seu Login e Senha do Github
  - Selecione o repositório **login** e logo abaixo clique no botão azul *Clone...*
  - Clique no botão *Choose* e encontre no disco local htdocs
  - Selecione a pasta e confira se o *Local path* foi *c:\xampp\htdocs\login*
  - Clique no btotão *clone*
  
  
 ## Habilitar o servidor web **Apache** e o servidor **MySQL**
   - Tecla windows - Abrir o XAMPP Control Panel 
   - Clique em Start para o Apache
   - Clique em Start para o MySQL
   - Verifique se ficou verde o Apache e MySQL
   
  ## Testar se está funcionando
  
  - Abra o navegador Firefox azul e digite http://localhost/login
  
 ## Editar utilizando o VS code
   
   - Abrir pasta no VS code escolha c:\xampp\htdocs\


 # Imortar o banco de dados
 - Acessar no Navegador http://localhost/phpmyadmin
 - Clicar em importar
 - Slecionar o arquivo, clicando em Browse ou escolha o arquivo
 - Abra o arquivo 127.0.0.1.sql e clique em executar
 - O banco deve ter sido importado corretamente
