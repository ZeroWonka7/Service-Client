<?php

$username = $_POST['username'];
$password = $_POST['password'];

$url = "http://168.63.209.85/service.php?username=".$username."&password=".$passw$
$bacaxml = simplexml_load_file($url);

foreach($bacaxml->response as $respon)
{

  if ($respon == "TRUE") echo "Login Berhasil";
  else if ($respon == "FALSE") echo "Login Gagal";
}

?>
