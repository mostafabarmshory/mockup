<?php
// TODO: Hadi - 1396-04-23: This code should be move to an appropriate place.
// Pluf::loadFunction('Geo_DB_PointToDB');

return array(
    'debug' => true,
    'general_domain' => 'pluf.ir',
    'general_admin_email' => array(
        'info@pluf.ir'
    ),
    'installed_apps' => array(
        'Pluf',
        'Mockup'
    ),
    'middleware_classes' => array(),
    'tmp_folder' =>  __DIR__ . '/tmp',
    'encoding' => 'UTF-8',
    'secret_key' => 'adsfasefaea',
    
    'db_engine' => 'MySQL',
    
    'db_version' => '5.5.33',
    'db_login' => 'root',
    'db_password' => '',
    'db_server' => 'localhost',
    'db_database' => 'demo',
    'db_table_prefix' => '',
);

