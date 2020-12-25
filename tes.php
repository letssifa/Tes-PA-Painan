<?php

function resourceWeb($url){
     $data = curl_init();
  curl_setopt($data, CURLOPT_URL, $url);
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$sumber =  resourceWeb('http://sipp.pa-negara.go.id/list_jadwal_sidang/');
$split = explode('<div id="pageTitle">', $sumber);
$splitLagi = explode('</div>', $split[1]);

$split2 = explode('<div class="cssTable">', $sumber);
$splitLagi2 = explode('</div>', $split2[1]);


echo $splitLagi[0];
echo $splitLagi[1];
echo $splitLagi2[0];

?>


<iframe width="743" height="418" src="https://www.youtube.com/embed/gIB2egm7tL8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>