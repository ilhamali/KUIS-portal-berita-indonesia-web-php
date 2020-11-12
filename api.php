<?php 
$apiKey="f1ab0e366bca4957834fbc0b6cb3d965";
// API CADANGAN  
// 3d70cafa17fe4f98b19bde7dc9b6712a
// e6cc951bd3af4e4e8d5749bd66672f0c
// e31ff8052c0b4cb9b98a29f18aa5400c
// 5db76253af074eec8265dbb51670e65f
// 38757c4d0ec74f92982e2d68d7869dd7
// f1ab0e366bca4957834fbc0b6cb3d965
// 0920939a910145298c7956fed38b0db4
// e72d7901218f4563bb2be2629d5900e6
 ?>
<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&apiKey="."$apiKey");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $populer = json_decode($output, true);
?>

<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&category=sports&apiKey="."$apiKey");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $sports = json_decode($output, true);
?>

<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey="."$apiKey");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $health = json_decode($output, true);
?>

