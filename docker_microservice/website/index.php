<?php 
function curlme($url)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ]);
    $ret = curl_exec($curl);
    curl_close($curl);
    return $ret;
}

function debug($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>
<html>
<head>
</head>
<body>
    Mantap bro bro from website
    <?php 
    $json = curlme('http://localhost:5001');
    debug($json);
    $json = json_decode($json,1);

    $json = $json['product'];
    foreach ($json as $rs) {
        echo "<li>$rs</li>";
    }
    ?>
</body>
</html>