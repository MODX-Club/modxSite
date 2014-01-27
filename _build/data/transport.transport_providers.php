<?php

$providers = array();

 
$provider = $modx->newObject('transport.modTransportProvider', array(
    'name' => 'modxstore.ru',
    'description' => 'modxclub.ru transport facility for 3rd party components.',
    'service_url'   => 'http://rest.modxstore.ru/extras/',
));
$provider->set('id', 0);
        
$providers[] = $provider;


return $providers;
        