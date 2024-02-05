<?php 

$connect = mysqli_connect('localhost','root','root','yoga_intensive');

if(!$connect){
  die ('Error connect to database');
} ;