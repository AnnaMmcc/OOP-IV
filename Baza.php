<?php

class Baza 
{
 public $baza;

 public function __construct()
 {
  $this->baza = mysqli_connect("localhost","root", "", "web_shop");
 }
}
