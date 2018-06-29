<?php
$base = '';

return array(
    array(
        'app' => 'Mockup',
        'regex' => '#^/api/v1/mockup#',
        'base' => $base,
        'sub' => include 'Mockup/urls.php'
    ),
    array(
        'regex' => '#^(?P<path>.*)#',
        'base' => $base,
        'model' => 'Mockup_Views',
        'method' => 'main',
    )
);

