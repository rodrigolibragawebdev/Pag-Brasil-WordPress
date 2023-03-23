<h1>Projeto tema Pag Brasil - WordPress 6.0.2</h1>

<p align="center">
  
</p>

> Status do Projeto: :heavy_check_mark: (concluido)

<!-- > Status do Proheto: :large_orange_circle: (em andamento) -->

### Tópicos

:small_blue_diamond: [Descrição do projeto](#descrição-do-projeto)

:small_blue_diamond: [Funcionalidades](#funcionalidades)

:small_blue_diamond: [Deploy da Aplicação](#deploy-da-aplicação-dash)

:small_blue_diamond: [Pré-requisitos](#pré-requisitos)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação-arrow_forward)

## Descrição do projeto

<p align="justify">
  Desenvolvimento de tema, conforme necessidade da empresa Pag Brasil.
</p>

## Funcionalidades

:heavy_check_mark: estruturação de tema para WordPress.

## Deploy da Aplicação :dash:

> Link do deploy da aplicação: não foi realizado.

## Pré-requisitos

:warning: WordPress 6.0.2<br>
:warning: PHP<br>
:warning: JAVASCRIPT<br>
:warning: SCSS / CSS3<br>
:warning: BOOTSTRAP 4.6 <br>

<strong>Dependências e libs que você deve ter instalado na máquina antes de rodar a aplicação</strong>

- sem dependências obrigatórias

<strong>Dependências de Desenvolvimento</strong>

Recomenda-se:
SASS e BOOTSTRAP (opcional)

- Foi utilizado o sass para compilação do CSS, usar o seguinte comando:
- npm install -g sass
- sass --watch assets/css/custom-css.scss:assets/css/custom.css
- também foi utilizada extensão para facilitar identação em php/html, opcional (conforme package.json na pasta themes/pagbrasil)

<strong>Sugestões de extensões - IDE VS Code</strong>

- Auto Rename Tag
- Live Server
- Prettier (+)
- HTML in PHP

## Como rodar a aplicação :arrow_forward:

No terminal, clone o projeto:

```
git clone git@github.com:rodrigolibragawebdev/Pag-Brasil-WordPress.git
```

```
Passo a passo:
- Crie o seu banco de dados (pode ser localhost)
- Instale ou copie os arquivos da versão 6.0.2 do WordPress
- Copie o tema para a pasta "/wp-content/themes/"
- Instale o tema no seu CMS WordPress (acessando o 'seu_endereço/wp-admin')
- Crie uma página /home - /sobre-nos - /blog (slugs)
- crie quantos posts desejar (não esqueça das imagens em destaque e categorias)
- o tema automaticamente será aplicado!
```

-
