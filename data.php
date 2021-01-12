<?php
// <!-- 4 _ kuriamas img masyvas-->
$images = [
	"img/1.jpg", "img/2.jpg", "img/3.jpg",
	"img/4.jpg", "img/5.jpg", "img/6.jpg",
	"img/7.jpg", "img/8.jpg", "img/9.jpg",
	"img/10.jpg", "img/11.jpg", "img/12.jpg",
];

// 11 _ iskvieciama f-ja, kuri nurodo grazinamos informacijos tipa
// naudojamas header() f-ja, nes narsykle veikia per headerius
// Content-Type nurodo grazinamos informacijos tipa
header('Content-Type: application/json');

// 21 _ $_GET specialus masyvo tipo php kintamasis, kuriami randasi visi get parametrai
// 22 _ $from is 20 zingsnio 
$from = $_GET["from"];

// 23 _ array_slice - array karpymas (duotas masyvas, nuo kelinto, ilgis)
// 24 _ sukuriamas atkirptas kintamasis
$sliced = array_slice($images, $from, 4);

// 5 _ json_encode naudojamas,
// kad masyva pateikti js suprantamu formatu
// ir atspausdinamas jsonas
// json - (js objektine notacija)
// 25 _ vietoje echo json_encode($images) argumento idedamas $sliced
echo json_encode($sliced);

