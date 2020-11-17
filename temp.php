<?php 
session_start();
$_SESSION['user'] = $_GET['user']; 
 ?>
<!doctype html>
<html lang="es">
<header>
  <style>
    #egt {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #egt td,
    #egt th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #egt tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #egt tr:hover {
      background-color: #ddd;
    }

    #egt th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
  </style>
</header>
<pre>
  </pre>
<?if (isset($_SESSION['user'])):?>
<title> Control de Temperatura </title>

<center>

  <body>
    <h1>Bienvenido <?=$_SESSION['user'] ?></h1>
    <table id="egt">
      <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Fecha</td>
        <td>Temperatura</td>
      </tr>
      <tr>
        <td>"dato a dato"</td>
        <td>"dato a dato"</td>
        <td>"dato a dato"</td>
        <td>"dato a dato"</td>
      </tr>

    </table>
    <form action="http://127.0.0.1/phpmyadmin/sql.php?db=temperatura&table=Contador&pos=0" method="GET">
    </form>
  </body>
</center>

</html>
<?endif;?>