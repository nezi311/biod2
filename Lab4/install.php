<?php
require_once('vendor/autoload.php');
\Config\Database\DBConfig::setDBConfig();
 $pdo=\Config\Database\DBConfig::getHandle();

try{


$stmt = $pdo->query("DROP TABLE IF EXISTS `pracownicy`");
$stmt->execute();
$stmt = $pdo->query("CREATE TABLE IF NOT EXISTS `pracownicy`
(
  `id` INT AUTO_INCREMENT,
  `imie` VARCHAR(100) NOT NULL,
  `nazwisko` VARCHAR(100) NOT NULL,
  `dzial` VARCHAR(150) NOT NULL,
  `stanowisko` VARCHAR(150) NOT NULL,
  `telefon` VARCHAR(20) NULL,
  `login` VARCHAR(100) NOT NULL UNIQUE,
  `haslo` VARCHAR(150) NOT NULL,
  `uprawnienia` INT NOT NULL,
  `iloscniepoprawnychlogowan` INT DEFAULT 0,
  `datazmianyhasla` DATE NULL,
  `aktywny` INT DEFAULT 1,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  PRIMARY KEY (id)
);");


$stmt = $pdo->query("DROP TABLE IF EXISTS `Odblokuj`");
$stmt->execute();
$stmt = $pdo->query("CREATE TABLE IF NOT EXISTS `Odblokuj`
(
  `id` INT AUTO_INCREMENT,
  `email` VARCHAR(150) NOT NULL,
  `kod` VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);");
$stmt->execute();


$stmt = $pdo->query("DROP TABLE IF EXISTS `hasla`");
$stmt->execute();
$stmt = $pdo->query("CREATE TABLE IF NOT EXISTS `hasla`
(
  `id` INT AUTO_INCREMENT,
  `tytul` VARCHAR(100) NOT NULL,
  `haslo` VARCHAR(150) NOT NULL,
  PRIMARY KEY (id)
);");
$stmt->execute();



 $users = array();
 $users[]=array('imie'=>'Dawid','nazwisko'=>'Dominiak','dzial'=>'IT','stanowisko'=>'Administrator','telefon'=>'666666666','login'=>'root','haslo'=>'password','uprawnienia'=>0,'datazmianyhasla'=>'1111-11-11','email'=>'dawid.dominiak.94@gmail.com');
 $users[]=array('imie'=>'Marcin','nazwisko'=>'Kornalski','dzial'=>'Obsługa klienta','stanowisko'=>'Pracownik','telefon'=>'777666555','login'=>'pracownik','haslo'=>'password','uprawnienia'=>1,'datazmianyhasla'=>'1111-11-11','email'=>'maciek.maciek@gmail.com');
 foreach($users as $element_user)
 {
   $stmt = $pdo->prepare('INSERT INTO `pracownicy`(`imie`,`nazwisko`,`dzial`,`stanowisko`,`telefon`,`login`,`haslo`,`uprawnienia`,`datazmianyhasla`,`email`) VALUES (:imie,:nazwisko,:dzial,:stanowisko,:telefon,:login,:password,:role,:data,:email)');
   $stmt -> bindValue(':login',$element_user['login'],PDO::PARAM_STR);
   //$md5password = md5($element_user['haslo']);
   //$stmt -> bindValue(':password',$md5password,PDO::PARAM_STR);
   $stmt -> bindValue(':password',$element_user['haslo'],PDO::PARAM_STR);
   $stmt -> bindValue(':role',$element_user['uprawnienia'],PDO::PARAM_INT);
   $stmt -> bindValue(':imie',$element_user['imie'],PDO::PARAM_STR);
   $stmt -> bindValue(':nazwisko',$element_user['nazwisko'],PDO::PARAM_STR);
   $stmt -> bindValue(':dzial',$element_user['dzial'],PDO::PARAM_STR);
   $stmt -> bindValue(':stanowisko',$element_user['stanowisko'],PDO::PARAM_STR);
   $stmt -> bindValue(':telefon',$element_user['telefon'],PDO::PARAM_STR);
   $stmt -> bindValue(':data',$element_user['datazmianyhasla'],PDO::PARAM_STR);
   $stmt -> bindValue(':email',$element_user['email'],PDO::PARAM_STR);
   $wynik_zapytania = $stmt -> execute();

 }




 return true;
}
catch (PDOException $e)
{
 echo ('Wystąpił błąd biblioteki PDO: ' .$e->getMessage());
 return false;
}
echo ("Baza została zainstalowana.");
?>
