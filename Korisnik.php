<?php

require_once "Baza.php";

class Korisnik extends baza
{

 public function userInBase($email)
 {

    $email = $this->baza->real_escape_string($email);
  $rezultat = $this->baza->query("SELECT * FROM korisnici WHERE email = '$email'");


  if($rezultat->num_rows > 0)
  {
    return true;
  }
  else
  {
  return false;
  }
  
 }


 public function register($email, $sifra)
 {
    $sifra = password_hash($sifra, PASSWORD_BCRYPT);
    $email = $this->baza->real_escape_string($email);
    $sifra = $this->baza->real_escape_string($sifra);

    $this->baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$sifra')");
 }

public function deleteUser($email)
{
    $email = $this->baza->real_escape_string($email);
    $this->baza->query("DELETE FROM korisnici WHERE email = '$email'");
}
public function updateUser($userEmail, $email, $sifra)
{
    $sifra = password_hash($sifra, PASSWORD_BCRYPT);
    $email = $this->baza->real_escape_string($email);
    $sifra = $this->baza->real_escape_string($sifra);
    $userEmail = $this->baza->real_escape_string($userEmail);

    $this->baza->query("UPDATE korisnici SET email = '$email', sifra = '$sifra' WHERE email = '$userEmail'");
}
}

