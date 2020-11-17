<?php
require "./mqtt_lib.php";
$topic = $_POST["tread"];
$mqtt = new phpMQTT("localhost",1883,"BOT");//127.0.0.1
$is_connected = $mqtt->connect();
if(!$is_connected)
{
  header('Location: http://localhost/mosquitto_msg/sender.php?conection='.$is_connected);
}
$counter = 0;
while(true)
{
  $counter = $counter +1;
  $mqtt->publish($topic, rand(10,100));
  if($counter>1000)
  {
    $mqtt->publish($topic, "ha sobrepasado las 1000 lecturas");
    exit();
  }
  usleep(250000);
}
header('Location: http://localhost/mosquitto_msg/sender.php');
