<?php 

function curlnew($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

function debug($arr,$is_die=FALSE)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    if ($is_die) die; 
}
?>
<html>
<head>
</head>
<body>
    Mantap bro bro get API from website: http://liquid.grevialabs.com/api/v1/user/get_list
    <?php 
    // $str = 'http://localhost:5001';
    $str = 'http://liquid.grevialabs.com/api/v1/user/get_list?token=macbook';
    $json = curlnew($str);
    $json = json_decode($json,1);
    // debug($json,1);

    $json = $json['data'];
    foreach ($json as $rs) {
        echo "<li>UserID : $rs[user_id]</li>";
    }
    ?>
</body>
</html>