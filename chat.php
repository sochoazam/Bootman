<?php
   require_once 'vendor/autoload.php';

   use BotMan\BotMan\BotMan;
   use BotMan\BotMan\BotManFactory;
   use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Incoming\Answer;
require 'mail.php';


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

$contI = 0;

  // Give the bot something to listen for.

/*$botman->hears('Hola|hi|buen día', function (BotMan $bot) {
   $bot->reply('En qué puedo ayudarte?');
});*/

/*class Seguimiento extends Conversation
{
    BotMan $bot;

    protected $nombre;

    protected $email;

    protected $telefono;

    public function preguntarNombre()
    {
        $bot->ask('¿Cuál es tu nombre 😁?', function(Answer $answer) {
            // Save result
            $this->nombre = $answer->getText();

            $bot->say('Mucho gusto '.$this->firstname);
            $bot->preguntaEmail();
        });
    }

    public function preguntaEmail()
    {
        $bot->ask('¿Podrías proporcionarme un correo electrónico en donde pueda contactarte?', function(Answer $answer) {
            // Save result
            $this->email = $answer->getText();

            $bot->say('Muchas gracias , '.$this->firstname);
            $bot->preguntaTelefono();
        });
    }

    public function preguntaTelefono()
    {
        $bot->ask('Por ultimo, ¿Podrías proporcionarme tu número telefonico?', function(Answer $answer) {
            // Save result
            $this->telefono = $answer->getText();

            $bot->say('Gracias por la información.
              <br>
              En un horario de 10:00 am - 19:00pm nuestro asesor se comunicará contigo.'.$this->firstname);
            //$bot->preguntaEmail();
        });
    }

    public function run()
    {
      BotMan $bot;
        // This will be called immediately
        $bot->preguntarNombre();
    }
}*/




//Telefono de contacto8
$botman->hears('.*(n|N)(u|ú)mero.*|.*(t|T)el(é|e)fono.*|.*(H|h)ablar.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('Puedes comunicarte al número 3333333333 😊');
    
});

//Cantidad de departamentos
$botman->hears('.*(c|C)u(a|á)ntos (departamentos|depas|deptos).*|.*(c|C)antidad de (departamentos|depas|deptos).*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('142 Departamentos en 2 torres con  2 elevadores por torre 🏢.');
});

//Mas ayuda
 $botman->hears('(g|G)racias|(m|M)uchas gracias', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply("¿Hay algo más en lo que le pueda ayudar?");
});

/*$botman->hears('.*ubicación.*', function (BotMan $bot) {
    $bot->reply('Ok. estamos ubicados aquí');    
});*/

//Default
$botman->fallback(function($bot) {
    $bot->reply('Disculpa, no he entendido eso.');
});

function responseb(BotMan $bot){
    $bot->reply('¿Hay algo más en lo que le pueda ayudar?');
}

//Amenidades
$botman->hears('.*(a|A)menidad.*', function ( BotMan $bot) {  
    $bot->typesAndWaits(2);
    $bot->reply('Nuestras amenidades son las siguientes:
                <br>
                🍃 Roof Garden con vista panorámica.
                <br>
                🏋‍♀ Área de Fitness Room
                <br>
                🏊‍♂ Alberca/Chapoteadero.
                <br>
                🏢 2 elevadores por torre.
                <br>
                👨‍✈ Ingreso controlado y seguridad 24 horas.
                <br>
                🏬 Centro Comercial.'); 
});


//Buen dia
$botman->hears('(H|h)ola.*|.*(B|b)uen dia.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('¿Como puedo ayudarte 😊?');
});

//Niveles
$botman->hears('.*cantidad de pisos.*|.*cantidad de niveles.*|.*(N|n)iveles.*|.*(P|p)isos.*', function (BotMan $bot) { 
    $bot->typesAndWaits(2);
    $bot->reply('🔝 La primera torre tiene 8 niveles.
      <br>
      🔝 La segunda torre tiene 13 niveles.');
});

//Apartado
$botman->hears('.*cantidad de apartado.*|.*con cuanto aparto.*|.*cantidad para apartar.*|.*con cuanto puedo apartar.*|.*apartado.*|.*apartar.*', function (BotMan $bot) { 
    $bot->typesAndWaits(2);
    $bot->reply('El monto de apartado es de 10,000 pesos.');
});

//Creditos
$botman->hears('.*aceptan creditos.*|.*cuales creditos aceptan.*|.*puedo pagar con algun credito.*|.*(C|c)r(e|é)dito.*', function (BotMan $bot) { 
    $bot->typesAndWaits(2);
    $bot->reply('Si, aceptamos créditos 💳, y no solo los aceptamos.
      <br> 
      También te ayudamos a realizar el trámite sin costo 🙌. 
      <br>
      Los créditos aceptados son: 
      <br>
      INFONAVIT, COFINAVIT, BANCARIOS, FOVISSTE ALIADOS, PENSIONES DEL ESTADO.');
});

//Enganche
$botman->hears('.*enganche.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('El enganche va desde el 3% hasta el 10% 💰');
});

//Entrega
$botman->hears('.*cuando entregan*|.*tiempo estimado de entrega.*|.*cuando entregarian.*|.*me dan el departamento.*|.*entrega.*', function (BotMan $bot) {
  $bot->typesAndWaits(2);
    $bot->reply('🚧 Las fechas de entrega aproximadas son las siguientes: 
      <br>
      La primera torre en el cuarto trimestre del 2020.
      <br>
      La segunda torre en el cuarto trimestre del 2021.');
});

//Final
$botman->hears('(e|E)s todo, hasta luego|(E|e)s todo, muchas gracias|(E|e)s todo|(e|E)s todo, gracias|(a|A)dios|(h|H)asta luego|(b|B)ye|(N|n)ada m(a|á)s', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('Espero haberte ayudado.
      <br>
      Hasta luego 😁.');
});

//Horario
$botman->hears('.*(h|H)orario.*|.*(h|H)ora.*|.*(a|A)pertura.*|.*(C|c)ierre.*|.*(c|C)ierra.*|.*(a|A)bre.*|.*(i|I)nicia.*|.*(c|C)omieza.*|.*(t|T)ermina.*|.*(E|e)mpieza.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('El horario de atención es: 10:00 am - 19:00 pm en horario corrido de Lunes a Domingo 🙋‍♀.');
});

//Informes
$botman->hears('(^informacion$|^informes$)|^info$|^informacion de lomasur$|^informes de lomasur$|(^En donde (obtengo|obtener) informes$|^Como (obtener|obtengo) informes$|^(m|M)e (puedes|podr(í|i)as) dar (informaci(ó|o)n|informes)).*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('¿Sobre que aspecto requieres informes?');
});

//Mascotas
$botman->hears('.*(M|m)ascota.*', function (BotMan $bot) {
    $bot->typesAndWaits(1);
    $bot->reply('🐱 Si, se aceptan mascotas 🐶.');
});

//Más ayuda
$botman->hears('.*Muy bien.*|.*excelente.*|.*muy bien.*|.*(g|G)enial.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('¿Hay algo más en lo que pueda ayudarte 😁?');
});

//Planes de financiamiento
$botman->hears('.*(F|f)inanciamiento.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('Si, tenemos financiamiento hasta de 12 meses 🤩.');
});

//Precios
$botman->hears('.*precios.*|.*precio.* |.*costos.*|.*costo.*|cuanto cuesta.*|valor.*|valor.*|costo.*|valen.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('Nuestro precio de lista es desde 1,710,000, sin embargo, tenemos descuentos exclusivos de preventa 🤩.');
});


//Seguridad
$botman->hears('.*seguridad.*', function (BotMan $bot) {
    $bot->reply('👩‍✈ Si, cuenta con vigilancia 24/7 además de cámaras de circuito integrado 👨‍✈.');
});

//Tamaño
$botman->hears('.*(M|m)odelos.*|.*(D|d)imensi(o|ó)n.*|.*(T|t)amaño.*|.*(m|M)edida.*|.*miden.*|informaci(o|ó)n (sobre|de) departamento.*|.*superficie.*|.*metros.*|.*mts.*|.*m2.*|.*magnitud.*|.*espacio.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('Tenemos departamentos desde 64 m2 hasta 92 m2 😉 y las características son:
      <br>
      2 y 3 recamaras con 2 baños.
      <br>
      <br>
      Estos son algunos de nuestros modelos: 
      <br>
      <br>
      <img src="BuenosAires.jpg" width="250" height="300">
      <br>
      <br>
      <img src="Atenas.jpg" width="250" height="300">
      <br>
      <br>
      <img src="Madeira.jpg" width="250" height="300">
      <br>
      <br>
      Puedes consultar todos nuestros prototipos en la siguiente liga:
      <br>
      <br>
      <a href="https://grupoguia.mx/lomasur/#link-kvqs5v448xr" target="_blank">Da clic aquí para conocer todos nuestros modelos</a>');
});

//Ubicacion
$botman->hears('.*ubicaci(ó|o)n.*|.*Ubicaci(ó|o)n.*|.*localizaci(ó|o)n.*|.*localizados.*|(E|e)n donde estan.*|.*ubicados.*|.*ubican.*|.*(E|e)n donde se encuentran.*|.*localiza.*|.*ubica.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('Estamos ubicados en: Av. Colon  #4965, frente a la terminal de la linea 1 sur del tren ligero 🚟. A 900 mts del ITESO.
      <br>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.411880960158!2d-103.39728604802622!3d20.6120617543422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ad07a962f927%3A0x1a8a7229d4a0678b!2sAv.%20Crist%C3%B3bal%20Col%C3%B3n%204965%2C%20Cerro%20del%20Tesoro%2C%2045606%20San%20Pedro%20Tlaquepaque%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1576509782035!5m2!1ses-419!2smx" width="270" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>'
      /*<a href="https://goo.gl/maps/xH9jwyzh9ZgNJwar8" target="_blank">Da clic aquí para conocer la ubicacion</a>*/);
});

//protos
$botman->hears('.*protos.*|.*prototipos.*', function (BotMan $bot) {
    $bot->typesAndWaits(1);
    $bot->reply('Tenemos 8 diferentes prototipos');
});

//departamentos muestra 
$botman->hears('.*depto muestra.*|.*departamento muestra.*|.*muestra.*', function (BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('De momento no tenemos departamento muestra 😭, pero contamos con showrom en donde puedes ver las
    caracteristicas del desarrollo, ¿Quieres agendar una cita? 🤩 ');
});


//Seguimiento para contacto
$botman->hears('(C|c)omo puedo comunicarme con ustedes.*|^como (puedo obtener|obtengo) mas informacion$|^(M|m)e (puedes|podrias) (mandar|mandarme) (informes|informaci(o|ó)n)$|.*cotizacion.*|.*cita.*', function(BotMan $bot) {
    $bot->typesAndWaits(2);
    $bot->reply('¿Deseas que uno de nuestros asesores se comunique contigo? 😁?');

});

$botman->hears('(s|S)(í|i)', function(BotMan $bot){
      $bot->typesAndWaits(2);
      $bot->reply('¡Muy bien!, ¿Puedes enviarme por favor tu Nombre, Número y Correo de contacto 😁?');
});



$botman->hears('(n|N)(o|O)', function(BotMan $bot){
      $bot->typesAndWaits(2);
      $bot->reply('¡Entendido!, ¿Hay algo más en lo que pueda ayudarte 😁?');
});

/*$botman->hears('(M|m)i nombre es {name}|(M|m)e llamo {name1}', function (BotMan $bot,$name,$name1) {

    if($name != null ){
      $bot->reply('Mucho gusto ' .$name); 
      $bot->reply('¿Podrías proporcionarme un correo electrónico en donde pueda contactarte 😊?'); 
    }
    else if($name1 != null){
      $bot->reply('Mucho gusto ' .$name1);
      $bot->reply('¿Podrías proporcionarme un correo electrónico en donde pueda contactarte 😊?');
    }


 }); */

$botman->hears('{name} {tel} {email}', function (BotMan $bot,$name,$tel,$email) {

    //$bot->reply($name);
    if($name != null){
      //$bot->reply('primer if' .$tel);

      if(strpos($tel, '1') || strpos($tel, '2') || strpos($tel, '3') || strpos($tel, '4') || strpos($tel, '5') || strpos($tel, '6') || strpos($tel, '7') || strpos($tel, '8') || strpos($tel, '9') || strpos($tel, '0')){
        //$bot->reply('segundo if' .$email .$name);
        if($email != null && strpos($email, '@') !== false){ 
          //$bot->reply('tercer if');
          $bot->typesAndWaits(2);
          $bot->reply('Gracias por la información 😊.
                <br>
                En un horario de 10:00 am - 19:00pm nuestro asesor se comunicará contigo.');
                $bot->sendMail($name, $tel, $email);

                
        }
      }
    }

    /*
    else if($name2 != null){
      if(strpos($tel2, '1') || strpos($tel2, '2') || strpos($tel2, '3') || strpos($tel2, '4') || strpos($tel2, '5') || strpos($tel2, '6') || strpos($tel2, '7') || strpos($tel2, '8') || strpos($tel2, '9') || strpos($tel2, '0')){
        if($email != null && strpos($email2, '@') !== false && strpos($email2, '.') !== false){ 
          $bot->reply('Gracias por la información 😊.
                <br>
                En un horario de 10:00 am - 19:00pm nuestro asesor se comunicará contigo.');
        }
      }
    }
    */
 });

/*$botman->hears('(M|m)i numero es {telefono}|{telefono2}', function (BotMan $bot,$telefono, $telefono2) {

    if($telefono != null){
      $bot->reply('Muy bien! ' .$telefono);
      $bot->reply('Gracias por la información 😊.
                <br>
                En un horario de 10:00 am - 19:00pm nuestro asesor se comunicará contigo.');
    }
    else if($telefono2 != null && strpos($telefono2, '3') !== false) {
      $bot->reply('Muy bien! ' .$telefono2);
      $bot->reply('Gracias por la información 😊.
                <br>
                En un horario de 10:00 am - 19:00pm nuestro asesor se comunicará contigo.');
    }
    /*
      Envío de correo 
 });*/


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


// Start listening
$botman->listen();