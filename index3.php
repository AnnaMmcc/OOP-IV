<?php

require_once "Models/Korisnik.php";

$korisnik = new Korisnik();

$email = "anja@admin.com";

if($korisnik->userInBase($email) == false)
{
 $korisnik->register($email, "adfadfa");
}

$korisnik2 = new Korisnik();
$email2 = "anja@anjaa.com";

$korisnik2->deleteUser("anja@anjaa.com");

$korisnik2->updateUser("tomaredstar@gmail.com", "ttoma@gmail.com", "sifrasifra");