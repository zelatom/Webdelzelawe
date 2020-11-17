<?php
  // require "engine/mqtt_lib.php";
  // require "receptor.php";
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<h1>Prueba de Interacción e Integración con MQTT</h1>

<form class="form-horizontal" method="POST" action="engine/MessageController.php">
  <fieldset>

    <!-- Form Name -->
    <legend>Enviar Mensaje</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="tread">Hilo</label>
      <div class="col-md-4">
        <input id="tread" name="tread" type="text" placeholder="'sensor','taringa','4chan.org'" class="form-control input-md">
        <span class="help-block">Topico al que estas suscrito</span>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="message">Mensaje</label>
      <div class="col-md-4">
        <input id="message" name="message" type="text" placeholder="'hola','atun','chalupa'" class="form-control input-md">
        <span class="help-block">Mensaje que quieres publicar </span>
      </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id">Double Button</label>
      <div class="col-md-8">
        <button onclick="executeSend()" id="button1id" name="button1id" class="btn btn-success">Enviar Mensaje a MQTT</button>
        <!-- <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button> -->
      </div>
    </div>

  </fieldset>
</form>

<form class="form-horizontal" method="POST" action="engine/bot.php">
<div class="form-group">
      <label class="col-md-4 control-label" for="tread">Hilo</label>
      <div class="col-md-4">
        <input id="tread" name="tread" type="text" placeholder="'sensor','taringa','4chan.org'" class="form-control block-md">
        <span class="help-block">Topico al que estas suscrito</span>
      </div>
    </div>
<button onclick="executeSend()" id="button1id" name="button1id" class="btn btn-success">Activar bot</button>
</form>