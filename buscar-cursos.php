<?php

require 'vendor/autoload.php';


use GuzzleHttp\Client;
use Rapha\BuscadordeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://lista.mercadolivre.com.br', 'verify'=>false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/veiculos/carros-antigos/#CATEGORY_ID=MLB1745&S=hc_carros-motos-e-outros&c_id=undefined&c_element_order=undefined&c_campaign=CARROS-ANTIGOS&c_uid=f17eb130-0edc-11ee-8a79-238beee90d4d');
foreach ($cursos as $curso){

    echo $curso . PHP_EOL;
}