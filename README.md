
# Página Web para Serviços Web

Este projeto é um site profissional para oferecer serviços de desenvolvimento web, com foco na criação de Landing Pages de alta conversão. Ele inclui um formulário de contato que permite aos usuários inserir seus dados (nome, telefone, e-mail) e informações básicas sobre seu negócio, qualificando potenciais clientes.

## Tecnologias Utilizadas

* HTML
* CSS
* PHP
* MySQL

## Pré-requisitos

* Servidor web Apache
* Banco de dados MySQL
* PHP 7.0 ou superior
* Git (opcional, para contribuições)

## Instalação e Configuração

1. Clone este repositório para o diretório raiz do seu servidor web (geralmente `/var/www/html/`).
2. Crie um banco de dados chamado "meu_banco" no MySQL.
3. Crie uma tabela chamada "leads" com os seguintes campos:
    * `id` (INT UNSIGNED, PRIMARY KEY, AUTO_INCREMENT)
    * `nome` (VARCHAR(50))
    * `telefone` (VARCHAR(15))
    * `email` (VARCHAR(50))
    * `forma_empresarial` (VARCHAR(50))
    * `data_cadastro` (TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
    * `origem` (VARCHAR(50))
    * `estagio_lead` (VARCHAR(50))
4. Configure as variáveis de ambiente no arquivo `~/.bashrc` (ou `~/.zshrc`) com os seguintes valores:

    ```bash
    export DB_SERVERNAME="localhost"
    export DB_USERNAME="seu_usuario"
    export DB_PASSWORD="sua_senha"
    export DB_NAME="meu_banco"
    export DB_PORT="3306"
    ```

    Substitua `seu_usuario` e `sua_senha` pelos seus dados de acesso ao banco de dados.
5. Execute o comando `source ~/.bashrc` (ou `source ~/.zshrc`) para carregar as variáveis de ambiente.
6. Reinicie o servidor web.

## Como Usar

1. Preencha o formulário com seus dados.
2. Clique no botão "Enviar".
3. Verifique os dados inseridos na tabela "leads" usando um cliente MySQL como o phpMyAdmin ou MySQL Workbench.

## Estrutura do Projeto
lucimar_santos/
├── Front/
│   ├── index.html
│   ├── style.css
│   └── script.js
└── Back/
├── db.php
└── processa_form.php
README.md
.gitignore

Claro! Vamos reescrever o seu README.md de forma mais clara e completa, incorporando as melhorias que discutimos.

Markdown

# Página Web para Serviços Web

Este projeto é um site profissional para oferecer serviços de desenvolvimento web, com foco na criação de Landing Pages de alta conversão. Ele inclui um formulário de contato que permite aos usuários inserir seus dados (nome, telefone, e-mail) e informações básicas sobre seu negócio, qualificando potenciais clientes.

## Tecnologias Utilizadas

* HTML
* CSS
* PHP
* MySQL

## Pré-requisitos

* Servidor web Apache
* Banco de dados MySQL
* PHP 7.0 ou superior
* Git (opcional, para contribuições)

## Instalação e Configuração

1. Clone este repositório para o diretório raiz do seu servidor web (geralmente `/var/www/html/`).
2. Crie um banco de dados chamado "meu_banco" no MySQL.
3. Crie uma tabela chamada "leads" com os seguintes campos:
    * `id` (INT UNSIGNED, PRIMARY KEY, AUTO_INCREMENT)
    * `nome` (VARCHAR(50))
    * `telefone` (VARCHAR(15))
    * `email` (VARCHAR(50))
    * `forma_empresarial` (VARCHAR(50))
    * `data_cadastro` (TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
    * `origem` (VARCHAR(50))
    * `estagio_lead` (VARCHAR(50))
4. Configure as variáveis de ambiente no arquivo `~/.bashrc` (ou `~/.zshrc`) com os seguintes valores:

    ```bash
    export DB_SERVERNAME="localhost"
    export DB_USERNAME="seu_usuario"
    export DB_PASSWORD="sua_senha"
    export DB_NAME="meu_banco"
    export DB_PORT="3306"
    ```

    Substitua `seu_usuario` e `sua_senha` pelos seus dados de acesso ao banco de dados.
5. Execute o comando `source ~/.bashrc` (ou `source ~/.zshrc`) para carregar as variáveis de ambiente.
6. Reinicie o servidor web.

## Como Usar

1. Preencha o formulário com seus dados.
2. Clique no botão "Enviar".
3. Verifique os dados inseridos na tabela "leads" usando um cliente MySQL como o phpMyAdmin ou MySQL Workbench.

## Estrutura do Projeto

lucimar_santos/
├── Front/
│   ├── index.html
│   ├── style.css
│   └── script.js
└── Back/
├── db.php
└── processa_form.php
README.md
.gitignore


## Segurança

* As credenciais do banco de dados são armazenadas em variáveis de ambiente para aumentar a segurança.
* É importante usar senhas fortes e exclusivas para o banco de dados.
* Validação e sanitização de dados de entrada para prevenir injeção de SQL e XSS.
* Implementação de proteção contra CSRF (Cross-Site Request Forgery).
* Uso de HTTPS para criptografar a comunicação entre o navegador e o servidor.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests com melhorias ou correções de bugs.

## Licença

Este projeto está licenciado sob a licença MIT.

## Contato

Se você tiver alguma dúvida ou sugestão, entre em contato comigo em lucimarcontas@gmail.com.
