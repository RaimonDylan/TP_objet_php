<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP OBJET TP</title>
</head>
<?php
try{
  define('RACINE', __DIR__);
  include_once('config/conf.php');
  include_once(INCLUDE_PATH.'connect.inc.php');
  include_once(INCLUDE_PATH.'traitements.inc.php');
  include_once(INCLUDE_CLASS.'client.php');
  $conn = connectionBd();
  ?>
  <body>
    <div>
      <p><?php recuperationUnClient($conn, 123); ?></p>
      <p><?php afficheTousClients($conn);?> </p>
      <p><?php $unClient=recupUnObjetClient($conn,123); ?></p>
      <p><?php echo $unClient->afficheUnClient(); ?></p>
    </div>
  </body>
  <?php
}catch (Exception $ex){
  echo $ex->getMessage();
} ?>
</html>
