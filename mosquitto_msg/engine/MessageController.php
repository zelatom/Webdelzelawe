<?php
require "./mqtt_lib.php";
$topic = $_POST["tread"];
$message = $_POST["message"];
$mqtt = new phpMQTT("localhost",1883,"MessageController");//127.0.0.1
$is_connected = $mqtt->connect();
if(!$is_connected)
{
  header('Location: http://localhost/mosquitto_msg/sender.php?conection='.$is_connected);
}
$mqtt->publish($topic, $message);
header('Location: http://localhost/mosquitto_msg/sender.php');
