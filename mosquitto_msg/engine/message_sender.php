<?php

  function send_message($a_config,$topic,$message)
  {
    $broker = $a_config["BROKER"];
    $port   = $a_config["PORT"];
    // $client = $a_config["CLIENT_ID"];
    
    define('BROKER', $broker); //'localhost'
    define('PORT', $port);     //1883
    define('CLIENT_ID', "pubclient_" + getmypid());

    $client = new Mosquitto\Client(CLIENT_ID);
    $client->connect(BROKER, PORT, 60);

    while ($client->loop() == 0)
    {
      $message = "[ ".date("Y-m-d H:i:s")." ] -> ".$message;
      $client->publish($topic, $message, 0, false);
      $client->loop();
      sleep(1);
    }

  }
