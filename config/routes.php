<?php

return [
    "root" => [
        "pattern" => "/",
        "method" => "GET",
        "action" => "Mystore\\IndexController@index"
    ],
    "product_list" =>
        [
            "pattern" => "/product",
            "method" => "GET",
            "action" => "GoodController@getAllGoods"
        ],
    "single_product" => [
        "pattern" => "/product/{id}/params/{name}",
        "method" => "GET",
        "variables" => [
            "id" => "\d+"
        ],
        "action" => "Mystore\\IndexController@getProduct"
    ]
];
