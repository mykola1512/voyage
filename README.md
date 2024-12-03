Introdução

Esta é uma aplicação web de gestão de viagens que permite aos utilizadores visualizar destinos, registar-se, efetuar login e gerenciar os seus perfis.

Requisitos do Sistema

Servidor Web: Apache ou Nginx

PHP: Versão 7.4 ou superior

Base de Dados: MySQL 5.7 ou superior

Composer: Para gestão de dependências (opcional)

Bootstrap: Incluído no projeto para estilização

XAMPP/WAMP: Recomendado para desenvolvimento local

Instruções de Instalação

1. Clonar o Repositório

Baixe ou clone este repositório para o seu ambiente local:

git clone <url-do-repositorio>

2. Configurar o Servidor Web

Coloque os arquivos no diretório htdocs (XAMPP) ou no equivalente do seu servidor web.

Certifique-se de que o servidor web está ativo.

3. Configurar a Base de Dados

Crie uma base de dados no MySQL chamada voyage (ou outro nome de sua escolha).

Importe o arquivo database.sql fornecido no repositório para criar as tabelas necessárias:

mysql -u <usuario> -p < senha> voyage < database.sql

Atualize as configurações de conexão no arquivo conexao.php:

$host = 'localhost';
$usuario = 'root';
$senha = '';
$base_de_dados = 'voyage';

4. Configurar o Bootstrap e Outros Recursos

Os arquivos CSS e JS do Bootstrap já estão incluídos no projeto via CDN. Certifique-se de que você tem uma conexão ativa com a Internet para carregar corretamente os recursos.

5. Testar a Aplicação

Abra o navegador e acesse:

http://localhost/<pasta-do-projeto>/index.php

Estrutura do Projeto

index.php: Ponto de entrada principal da aplicação.

css/: Arquivos de estilos personalizados.

php/: Contém lógica de backend, incluindo conexão com o banco de dados e processamento de formulários.

imagens/: Contém imagens usadas no site.

Funcionalidades Principais

Registo: Os utilizadores podem criar uma conta.

Login: Acesso seguro ao sistema.

Gerenciamento de Perfil: Atualização de nome, email e senha.

Visualização de Destinos: Apresentação de destinos em um carrossel visual.

Mensagens de Erro: Exibidas em forma de alertas amigáveis.

Estilização

A aplicação utiliza o Bootstrap 5 para uma interface responsiva e moderna. Ajustes adicionais podem ser feitos no arquivo CSS personalizado localizado em css/estilos.css.

Observações Importantes

Certifique-se de que o PHP está configurado corretamente no servidor local, especialmente a extensão mysqli.

Verifique as permissões da pasta imagens/ para permitir o upload e a exibição correta de arquivos.

Se usar uma API externa, como Amadeus, insira a chave da API nos arquivos apropriados.

Licença

Este projeto é fornecido como software livre. Você pode modificá-lo e distribuí-lo conforme necessário. Por favor, mantenha os créditos do autor.

Autor: Mykola
