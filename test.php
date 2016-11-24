<?php
    include 'SphinxApi.php';
    
    $q = "dongtai";
    $sql = "";
    $host = "localhost";
    $port = 3312;
    $index = "search";

    $sphinxClient = new SphinxClient();
    $sphinxClient->SetServer($host, $port);
    $res = $sphinxClient->Query($q, $index);

    var_dump($res);
    print_r($sphinxClient->getLastError());
?>