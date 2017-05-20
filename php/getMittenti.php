<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Herrera\Pdo\PdoServiceProvider;
/*
$host="ec2-54-83-26-65.compute-1.amazonaws.com";
$dbname="d7tmei47o4mnnr";
$user="isnivxsqqafmbk";
$pass="7d30c696b3661d3c70af1d34cb6634c2ceae487abb8601ef6f9783ce8b2a231f";
*/
$dbopts = parse_url(getenv('postgres://isnivxsqqafmbk:7d30c696b3661d3c70af1d34cb6634c2ceae487abb8601ef6f9783ce8b2a231f@ec2-54-83-26-65.compute-1.amazonaws.com:5432/d7tmei47o4mnnr'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' .$dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
);