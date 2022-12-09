<?php

$conn = mysqli_connect('localhost', 'root', 'AnreDeWoodydisney35', 'db_woody_users');

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}