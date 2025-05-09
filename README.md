# Sistema de Cadastro e Exibição de Produtos de Rock 🎸

## Descrição
Projeto simples em PHP que permite o cadastro e exibição de produtos relacionados ao tema rock, como camisetas, guitarras e baterias. Os produtos são categorizados como instrumento, roupa ou acessório.

## Funcionalidades
- Cadastro de produtos com:
  - Nome
  - Preço
  - Quantidade em estoque
  - Categoria (Instrumento, Roupa ou Acessório)
- Exibição de todos os produtos cadastrados em uma tabela.

## Tecnologias Utilizadas
- PHP (MySQLi procedural)
- MySQL
- HTML

## Estrutura de Arquivos
- `index.php` – Formulário para cadastrar novos produtos.
- `salvar.php` – Processa e insere os dados no banco de dados.
- `listar.php` – Exibe os produtos cadastrados.
- `conexao.php` – Faz a conexão com o banco de dados.
- `estoque.sql` – Script para criação do banco de dados e tabela.

## Como Usar
1. Importe o arquivo `estoque.sql` no phpMyAdmin para criar o banco de dados.
2. Altere os dados de conexão em `conexao.php`, se necessário.
3. Coloque os arquivos em uma pasta dentro do seu servidor local (ex: `htdocs` no XAMPP).
4. Acesse `http://localhost/rock/index.php` no navegador.

## Requisitos
- Servidor local com suporte a PHP (ex: XAMPP, WampServer)
- MySQL
- Navegador

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Marcela dos Santos Gorge (34408088)

