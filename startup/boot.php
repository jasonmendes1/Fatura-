<?php

require_once('./vendor/autoload.php');

define('APP_NAME', 'Minha App');
define('ROUTE_LOGIN', 'auth/login');

ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/fatura',
        )
    );
});
