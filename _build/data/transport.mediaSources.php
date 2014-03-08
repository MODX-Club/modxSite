<?php

$mediaSources = array();


// Smarty templates 
$params = array(
    "basePath" => array(
        "name" => "basePath",
        "desc" => "prop_file.basePath_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++core_path]]components/modxsite/templates/",
        "lexicon" => "core:source",
        "basePathRelative"
    ),
    'basePathRelative' => 
    array (
        'name' => 'basePathRelative',
        'desc' => 'prop_file.basePathRelative_desc',
        'type' => 'combo-boolean',
        'options' => 
            array (
            ),
        'value' => false,
        'lexicon' => 'core:source',
    ),
    "baseUrl" => Array
    (
        "name" => "baseUrl",
        "desc" => "prop_file.baseUrl_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "",
        "lexicon" => "core:source",
    )
);

$mediaSource = $modx->newObject('sources.modMediaSource', array(
    'name' => 'Smarty templates',
    'class_key' => 'sources.modFileMediaSource',
    'description' => '',
    'properties' => $params,
));
$mediaSource->set('id', 0);
        
$mediaSources[] = $mediaSource;


// Public templates 
$params = array(
    "basePath" => array(
        "name" => "basePath",
        "desc" => "prop_file.basePath_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++assets_path]]components/modxsite/templates/",
        "lexicon" => "core:source",
    ),
    'basePathRelative' => 
    array (
        'name' => 'basePathRelative',
        'desc' => 'prop_file.basePathRelative_desc',
        'type' => 'combo-boolean',
        'options' => 
            array (
            ),
        'value' => false,
        'lexicon' => 'core:source',
    ),
    "baseUrl" => Array
    (
        "name" => "baseUrl",
        "desc" => "prop_file.baseUrl_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++assets_url]]components/modxsite/templates/",
        "lexicon" => "core:source",
    )
);

$mediaSource = $modx->newObject('sources.modMediaSource', array(
    'name' => 'Public templates',
    'class_key' => 'sources.modFileMediaSource',
    'description' => '',
    'properties' => $params,
));
$mediaSource->set('id', 0);
        
$mediaSources[] = $mediaSource;


// Images 
$params = array(
    "basePath" => array(
        "name" => "basePath",
        "desc" => "prop_file.basePath_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++assets_path]]images/",
        "lexicon" => "core:source",
    ),
    'basePathRelative' => 
    array (
        'name' => 'basePathRelative',
        'desc' => 'prop_file.basePathRelative_desc',
        'type' => 'combo-boolean',
        'options' => 
            array (
            ),
        'value' => false,
        'lexicon' => 'core:source',
    ),
    "baseUrl" => Array
    (
        "name" => "baseUrl",
        "desc" => "prop_file.baseUrl_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++assets_url]]images/",
        "lexicon" => "core:source",
    )
);

$mediaSource = $modx->newObject('sources.modMediaSource', array(
    'name' => 'Images',
    'class_key' => 'sources.modFileMediaSource',
    'description' => '',
    'properties' => $params,
));
$mediaSource->set('id', 0);
        
$mediaSources[] = $mediaSource;


// Files 
$params = array(
    "basePath" => array(
        "name" => "basePath",
        "desc" => "prop_file.basePath_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++assets_path]]files/",
        "lexicon" => "core:source",
    ),
    'basePathRelative' => 
    array (
        'name' => 'basePathRelative',
        'desc' => 'prop_file.basePathRelative_desc',
        'type' => 'combo-boolean',
        'options' => 
            array (
            ),
        'value' => false,
        'lexicon' => 'core:source',
    ),
    "baseUrl" => Array
    (
        "name" => "baseUrl",
        "desc" => "prop_file.baseUrl_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++assets_url]]files/",
        "lexicon" => "core:source",
    )
);

$mediaSource = $modx->newObject('sources.modMediaSource', array(
    'name' => 'Files',
    'class_key' => 'sources.modFileMediaSource',
    'description' => '',
    'properties' => $params,
));
$mediaSource->set('id', 0);
        
$mediaSources[] = $mediaSource;


// Controllers
$params = array(
    "basePath" => array(
        "name" => "basePath",
        "desc" => "prop_file.basePath_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "[[++core_path]]components/modxsite/controllers/",
        "lexicon" => "core:source",
    ),
    'basePathRelative' => 
    array (
        'name' => 'basePathRelative',
        'desc' => 'prop_file.basePathRelative_desc',
        'type' => 'combo-boolean',
        'options' => 
            array (
            ),
        'value' => false,
        'lexicon' => 'core:source',
    ),
    "baseUrl" => Array
    (
        "name" => "baseUrl",
        "desc" => "prop_file.baseUrl_desc",
        "type" => "textfield",
        "options" => Array(),
        "value" => "",
        "lexicon" => "core:source",
    )
);

$mediaSource = $modx->newObject('sources.modMediaSource', array(
    'name' => 'Controllers',
    'class_key' => 'sources.modFileMediaSource',
    'description' => '',
    'properties' => $params,
));
$mediaSource->set('id', 0);
        
$mediaSources[] = $mediaSource;



return $mediaSources;
        