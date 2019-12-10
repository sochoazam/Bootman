<?php
   require_once 'vendor/autoload.php';

   use BotMan\BotMan\BotMan;
   use BotMan\BotMan\BotManFactory;
   use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Incoming\Answer;

$config = [
    // Your driver-specific configuration
    // "telegram" => [
    //    "token" => "TOKEN"
    // ]
];

   DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

  


   $botman = BotManFactory::create($config);

   $botman1 = BotManFactory::create($config);


  
 

    date_default_timezone_set('America/Mexico_City');

        
    $hora =  date('h:i:s'); 
    

    $hora_n = str_replace(':','',$hora);

    $hora_1 =  date('h:i:s'); 
    

    $hora_n1 = str_replace(':','',$hora);

    
  


   

  
  

   
   
  // Give the bot something to listen for.

$botman->hears('Hola|hi|buen día', function (BotMan $bot) {
   
   

   $bot->reply('En qué puedo ayudarte?');

  

   
});







$botman->hears('mi numero es {numero}', function (BotMan $bot,$numero) {

    
    $bot->reply('ok te voy a enviar un mensaje a ' .$numero);
 });


 


 $botman->hears('gracias', function (BotMan $bot) {
    $bot->typesAndWaits(5);
    $bot->reply("Hay algo más en lo que le pueda ayudar?");
});



$botman->hears('.*ubicación.*', function (BotMan $bot) {
    $bot->reply('Ok. estamos ubicados aquí');

    
    
});


$botman->fallback(function($bot) {
    $bot->reply('No puedo entender eso, tarado...');

    
});



function responseb(BotMan $bot){
    $bot->reply('Hay algo más en lo que le pueda ayudar?');
}

/*function setInterval($f, $milliseconds)
{
    $seconds=(int)$milliseconds/1000;
    while(true)
    {
        $f();
        sleep($seconds);

        echo '<script> alert("funciona") </script>';
    }
} */


//$botman1->setInterval();




// Start listening
$botman->listen();