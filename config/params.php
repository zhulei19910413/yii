<?php

//中国城市
define('CITY_GROUP_FILE', 'china_city.php');

return [
    'adminEmail' => 'admin@example.com',

    //分类相关配置
    'citylist' => require_once(__DIR__.'/china_city.php'),

];
