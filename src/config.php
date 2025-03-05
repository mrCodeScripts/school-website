<?php

declare(strict_types=1);

class AppConfig {
    public static $Settings = [
        "system_db_username" => "root",
        "system_db_password" => "",
        "system_db_name" => "zsnhs_database",
        "system_db_host" => "localhost",
        "system_db_option" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ],
        "system_domain_name" => "http://localhost:9090",
            "assets" => [
            "css" => [
                "/css/variable.css",
                "/css/login.pg.css",
                "/css/signup.pg.css",
                "/css/main.pg.css",
            ],
            "js" => [
                
            ],
            "img" => [
                "/assets/zsnhs-logo.png",
                "/assets/education.vector-1.png",
            ]
        ]   
    ];
}