<?php
session_start();
require "function.php";

$gambar = query("SELECT * FROM picture");

if(@$terkirim == true){
  echo '<style type="text/css">
  #alert1 {
      display: block;
  }
  </style>';
}
if(@$gagal == true){
  echo '<style type="text/css">
  #alert2 {
      display: block;
  }
  </style>';
}

if(isset($_POST['btncontact'])){

  $maxpesan = strlen($_POST['pesan']);
  if($maxpesan <= 300){
    if(contact($_POST) > 0){
      $terkirim = true;
    }else{
      $gagal = true;
    }
  }else{
    $gagal = true;
  }
}
?>