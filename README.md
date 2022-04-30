# Teste para desenvolvedor Pleno - Bis2Bis

Este projeto foi desenvolvido como amostra das habilidades que possuo como desenvolvedor de software. A ideia desse projeto é criar um blog de notícias.

## Requistios mínimos

<div style="display: flex;">
    <span style="margin-right: 10px;">
        <img src="https://img.shields.io/static/v1?label=Bootstrap&message=5.1&labelColor=purple&color=gray&style=flat">
    </span>
    <span style="margin-right: 10px;">
        <img src="https://img.shields.io/static/v1?label=EcmaScript&message=6&labelColor=yellow&color=gray&style=flat">
    </span>
    <span style="margin-right: 10px;">
        <img src="https://img.shields.io/static/v1?label=Twig&message=3.x&labelColor=green&color=gray&style=flat">
    </span>
    <span style="margin-right: 10px;">
        <img src="https://img.shields.io/static/v1?label=PHP&message=7.2^&labelColor=blue&color=gray&style=flat">
    </span>
    <span style="margin-right: 10px;">
        <img src="https://img.shields.io/static/v1?label=Composer&message=1.8.6&labelColor=blue&color=gray&style=flat">
    </span>
    <span style="margin-right: 10px;">
        <img src="https://img.shields.io/static/v1?label=MySQL&message=5.7&labelColor=blue&color=gray&style=flat">
    </span>
</div>

## Instalação
Supondo que você já tenha todo o ambiente web já instalado e configurado em sua máquina, seguindo os passos abaixo você conseguirá implatar essa aplicação em seu ambiente local. Mas caso você não tenha instalado o ambiente web em seu computador, eu sugiro que você instale o [XAMPP](https://www.apachefriends.org/pt_br/download.html) que é um pacote de ferramentas que simula um servidor web em sua máquina local.  

#### Rodando a aplicação
- Baixe o código-fonte da aplicação direto do repositório do [GitHub](https://github.com/brunohmduarte/magento-full-developer-test) e acesse a branch Master
- Clone o repositório no local correto de seu ambiente de desenvolvimento.
- Abra o prompt de comandos, navegue até a pasta da aplicação e digite o seguinte comando:  (Vou deixar um exemplo da estrutura de pasta do meu ambiente dev)    
  ```~ $ cd docker/lamp/www/var ```  
  ```~/docker/lamp/www/var $ git init ```  
  ```~/docker/lamp/www/var $ git clone https://github.com/brunohmduarte/magento-full-developer-test.git blog ```  
  ```~/docker/lamp/www/var $ cd blog ```  
  ```~/docker/lamp/www/var/blog $ composer install ```  
   
 Com isso o blog praticamente já estará rodando em sua máquina, porém, ainda não estará totalmente configurado. Para isso, você já pode acessar o blog em seu navegador:    
```http://localhost/blog/```  
  
Para concluirmos, precisamos configurar nossa aplicação para que ela possa rodar suas rotas perfeitamente e o nosso banco de dados para que os dados que iremos inserir na aplicação, possa ser persistido em um repositório de dados.

Para isso, iremos primeiro configurar **hostname** da nossa aplicação da seguinte forma:  
  
- Nos arquivos do projeto, navegue até o arquivo **Config.php** que se encontra em:  
```Src/Config.php```  
- Na variável **URL_BASE**, informe o hostname da aplicação da mesma forma que o exemplo abaixo:  
```define("URL_BASE", "http://localhost/blog");```  

E por fim, agora precisamos configurar o nosso banco de dados para que os nossos registros possam serem persistidos e assim toda vez que sairmos da aplicação e voltarmos, os dados do blog ainda estão lá.  
  
Na raiz do projeto, existe um arquivo chamado **database_blog.sql** é dentro desse que arquivo se encontra a nossa base de dados. E para instalá-lo basta realizar a importação de arquivo utilizando um **SGBD** de sua preferência.  
  
## Inicializando a aplicação

Contudo já configurado e pronto para o uso, agora teremos que criar um novo usuário para podermos logar na área administrativa e assim utilizarmos todos os recursos da aplicação.  
Para isso, acesse o link **Registrar** e informe todos os seus dados e logo após, realize o login para poder acessar o painel adminitrativo.  

Pronto, agora é só utilizar os recursos da aplicação.

## Autor
Bruno Duarte
