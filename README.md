# Como clonar e instalar o sistema em outra máquina
Precisa ter uma conta ativa no GitHub (https://github.com/)

## Pré-requisito:

- Xampp (https://www.apachefriends.org/)
- Mysql Workbench (https://dev.mysql.com/downloads/workbench/)
- Git (https://git-scm.com/)
- GitHub Desktop (https://desktop.github.com/)
- Visual Studio Code (https://code.visualstudio.com/)
- Instalar no Visual Studio Code a extensão Laravel Extension Pack (https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack)
- Node (https://nodejs.org/)
OBS.: Não esqueça de reiniciar o computador


### 1) Clonar o repositório do GitHub
Vá até o projeto no GitHub que deseja clonar e clique no botão verde escrito "<> Code" então vai abrir um submenu e você deve clicar em "Open with GitHub Desktop".
O GitHub Desktop vai abrir perguntando onde deve clonar o repositório. Clonar dentro do diretório "c:/xampp/htdocs/"

### 2) Abra o projeto no Visual Studio Code

### 3) Criar o arquivo .env com base no arquivo .env.example
Abra o terminal e execute o código entre aspas "copy .env.example .env"

### 4) Mudar o nome do banco no arquivo .env
Deve estar na linha 14 escrito desta forma "DB_DATABASE=laravel"

### 5) Instale as depedências
Abra o terminal e execute o código entre aspas "composer install"

### 6) Gere a APP_KEY (chave de criptografia)
Abra o terminal e execute o código entre aspas "php artisan key:generate"

### 7) Rode as migrations (criação das tabelas)
Abra o terminal e execute o código entre aspas "php artisan migrate"

### 8) Rode os SEEDs (inserção dos dados nas tabelas)
Abra o terminal e execute o código entre aspas "php artisan db:seed"
