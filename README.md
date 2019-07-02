# digital-tour

passo a passo instalação do projeto no pc pessoal 

Inicial Basico
--------------------------------------------------------------------------------------------------
1 baixar o repositório do github

2 pelo terminal na pasta do projeto dar um 
$ composer install

3 entrar no editor e vericar se existe o arquivo .env caso nao exista copiar o arquivo .env.example e salvar como .env

4 ainda no .env alterar o banco de dados 

Obs:
1.CASO AINDA NAO CONSIGA RODAR O PHP ARTISAN SERVE
a) de volta ao terminal rodar o comando 
$ php artisan key:generate

2. banco de dados
a) se nao tiver banco criar um no workbench
b) rodar o comando 
$ php artisan migrate
c) em caso de erro ver com americo para resolver o conflito do maria_db e mysql

Qualquer duvida estarei aqui para auxilia-los

------------------------------------------------------------------------------------------------------

Configurar Vue.js no Laravel

--------------------------------------------------------------------------------------------------
1 entrar no site https://nodejs.org/en/download/ e baixar o node para seu pc

2 apos instalacao vamos para terminal ou bach dentro do projeto rodar o comando
$ npm install

3 (opcional) instalar a extensão vue.js no navegador

4 ativar o vue
$ npm run watch
-------------------------------------------------------------------------------------------------------------	

Configurar Vuex

-------------------------------------------------------------------------------------------------------------
1 no terminal parar o vue com ctrl + c

2 instalar o vuex com comando
$ npm i vuex --save
-------------------------------------------------------------------------------------------------------------

Instalacao do Load de Mensagem

-------------------------------------------------------------------------------------------------------------

1 instalar o load mensagem so rodar o comando

$ npm install vue-spinner

-------------------------------------------------------------------------------------------------------------

Implementando o RealTime

-------------------------------------------------------------------------------------------------------------

1 entrar em conf app.php verificar se em * Application Service Providers essa linha esta descomentada
App\Providers\BroadcastServiceProvider::class,

2 ir ao .env alterar linha BROADCAST_DRIVER=log para 
BROADCAST_DRIVER=pusher

3 Criar conta no pusher
https://pusher.com

4 Criar um Create your Channels app

5 Verificar na aba Ruby se gerou 

pusher_client = Pusher::Client.new(
  app_id: '**',
  key: '********',
  secret: '********',
  cluster: 'us2',
  encrypted: true
)

6 copiar e colar na .env

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

7 ir no terminal dentro do projeto rodar o comando 
$ composer require pusher/pusher-php-server

8 e por ultimo instalar atraves do bash o pusher js e o laravel eco
$ npm install pusher-js laravel-echo --save



Projeto rede-social com laravel, vue e angular.

Projeto Integrador - Digital House
