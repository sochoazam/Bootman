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

/*$botman->hears('Hola|hi|buen día', function (BotMan $bot) {
   $bot->reply('En qué puedo ayudarte?');
});*/

$botman->hears('mi numero es {numero}', function (BotMan $bot,$numero) {

    $bot->reply('ok te voy a enviar un 
      mensaje a ' .$numero);
 });

 
//Mas ayuda
 $botman->hears('gracias', function (BotMan $bot) {
    $bot->typesAndWaits(5);
    $bot->reply("Hay algo más en lo que le pueda ayudar?");
});

/*$botman->hears('.*ubicación.*', function (BotMan $bot) {
    $bot->reply('Ok. estamos ubicados aquí');    
});*/

//Default
$botman->fallback(function($bot) {
    $bot->reply('Disculpa, no he entendido eso.');
});

function responseb(BotMan $bot){
    $bot->reply('Hay algo más en lo que le pueda ayudar?');
}

//Amenidades
$botman->hears('.*amenidades.*|.*Amenidades.*', function ( BotMan $bot) { 
    $bot->reply('Nuestras amenidades son las siguientes:

                Roof Garden con vista panorámica.
                Área de Fitness Room
                Alberca, Jacuzzi, Chapoteadero.
                2 elevadores por torre.
                Seguridad.
                Está ubicado al lado de una plaza comercial.'); 
});

//Buen dia
$botman->hears('Hola.*|.*Buen dia.*|.*buen dia.*', function (BotMan $bot) {
    $bot->reply('¿Como puedo ayudarte?');
});

//Niveles
$botman->hears('.*cantidad de pisos.*|.*cantidad de niveles.*|.*cuantos niveles.*|.*cuantos pisos.*', function (BotMan $bot) { 
    $bot->reply('La primera torre tiene 8 niveles.
      La segunda torre tiene 13 niveles.');
});

//Apartado
$botman->hears('.*cantidad de apartado.*|.*con cuanto aparto.*|.*cantidad para apartar.*|.*con cuanto puedo apartar.*|.*apartado.*', function (BotMan $bot) { 
    $bot->reply('El monto de apartado es de 10,000 pesos.');
});

//Creditos
$botman->hears('.*aceptan creditos.*|.*cuales creditos aceptan.*|.*puedo pagar con algun credito.*|.*credito.*', function (BotMan $bot) { 
    $bot->reply('Si, aceptamos créditos, y no solo los aceptamos. 
      También te ayudamos a realizar el trámite sin costo. 
      Los créditos aceptados son: 
      INFONAVIT, COFINAVIT, BANCARIOS, FOVISSTE ALIADOS, PENSIONES DEL ESTADO.');
});

//Enganche
$botman->hears('.*enganche.*', function (BotMan $bot) {
    $bot->reply('El enganche va desde el 3% hasta el 10%');
});

//Entrega
$botman->hears('.*cuando entregan*|.*tiempo estimado de entrega.*|.*cuando entregarian.*|.*me dan el departamento.*|.*entrega.*', function (BotMan $bot) {
    $bot->reply('Las fechas de entrega son las siguientes: 

      La primera torre en el cuarto trimestre del 2020.
      La segunda torre en el cuarto trimestre del 2021.');
});

//Final
$botman->hears('Es todo, hasta luego|Es todo, muchas gracias|Es todo|Adios|Hasta luego|gracias|Gracias', function (BotMan $bot) {
    $bot->reply('Espero haberte ayudado.
      Hasta luego.');
});

//Horario
$botman->hears('.*horario de atencion.*|.*horario puedo recibir atencion.*|.*horario pueden atencerme.* ', function (BotMan $bot) {
    $bot->reply('El horario de atención es: 10:00 am - 19:00 pm en horario corrido de Lunes a Domingo.');
});

//Informes
$botman->hears('(^informacion$|^informes$)|^info$|^informacion de lomasur$|^informes de lomasur$|(^En donde (obtengo|obtener) informes$|^Como (obtener|obtengo) informes$).*', function (BotMan $bot) {
    $bot->reply('¿Sobre que aspecto requieres informes?');
});

//Mascotas
$botman->hears('.*Mascotas.*|.*mascotas.*', function (BotMan $bot) {
    $bot->reply('Si, se aceptan mascotas.');
});

//Más ayuda
$botman->hears('.*Muy bien.*|.*excelente.*|.*muy bien.*', function (BotMan $bot) {
    $bot->reply('¿Hay algo más en lo que pueda ayudarte?');
});

//Planes de financiamiento
$botman->hears('.*planes de financiamiento.*|.*plan de financiamiento.*', function (BotMan $bot) {
    $bot->reply('Si, tenemos financiamiento hasta de 12 meses.');
});

//Precios
$botman->hears('.*precios.*|.*precio.* |.*costos.*|.*costo.*|cuanto cuesta.*', function (BotMan $bot) {
    $bot->reply('Nuestro precio de lista es desde 1,710,000, sin embargo, tenemos descuentos exclusivos de preventa.');
});


//Seguridad
$botman->hears('.*seguridad.*', function (BotMan $bot) {
    $bot->reply('Si, cuenta con vigilancia 24/7 además de cámaras de circuito integrado.');
});

//Tamaño
$botman->hears('.*modelos.*|.*tipos de departamento.*|.*dimension.*|.*tamaño.*|.*medida.*|.*cuanto miden.*|.*departamentos.*|informacion (sobre|de) departamentos', function (BotMan $bot) {
    $bot->reply('Tenemos departamentos desde 64 m2 hasta 92 m2 y las características son:
      <br>
      2 y 3 recamaras con 2 baños.
      <br>
      Puedes consultar los prototipos en la siguiente liga:
      <br>
      <a href="https://grupoguia.mx/lomasur/#link-kvqs5v448xr" target="_blank">Da clic aquí para conocer los modelos</a>');
});

//Ubicacion
$botman->hears('.*ubicaci(ó|o)n.*|.*Ubicaci(ó|o)n.*|.*localizaci(ó|o)n.*|.*localizados.*|(E|e)n donde estan.*|.*ubicados.*', function (BotMan $bot) {
    $bot->reply('Estamos ubicados en: Av. Colon  #4965, frente a la terminal de la linea 1 sur del tren ligero. A 900 mts del ITESO.
      <br>
      <a href="https://goo.gl/maps/xH9jwyzh9ZgNJwar8" target="_blank">Da clic aquí para conocer la ubicacion</a>');
});

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