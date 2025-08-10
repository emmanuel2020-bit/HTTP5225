<?php
  $connect = mysqli_connect('localhost', 'root', '', 'schoolsss');
  
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }