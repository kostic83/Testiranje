<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">  <!--pocetak wrappera-->
<?php
include "config.php";
session_start();

if(!isset($_SESSION['korisnik'])){    //ako nije otvorena sesija
	echo "<h3>Niste ulogovani!<br>Morate se ulogovati da biste pristupili glavnoj strani!</h3>";
?>	
	<h2>Log In</h2>
	<form method="post" action="login.php">
	<table>
	<tr><td>E-mail:</td><td><input required type="email" name="email" placeholder="Unesite korisnicko ime"></td></tr>
	<tr><td>Lozinka:</td><td><input required type="password" name="lozinka" placeholder="Unesite lozinku"></td></tr>
	<tr><td></td><td><input type="submit" name="submit" value="Uloguj se"></td></tr>
	</table>
	</form>
<?php
}
else{   //ako je otvorena sesija
?>
	<div id='ispis'>  <!--pocetak diva ispis -->
	<h2>Pretraga:</h2>
	<h3>Unesite korisnicko ime ili deo korisnickog imena,i bice vam prikazani svi podaci tog korisnika!</h3>
	<form method="post" action="">
	<b>Unesite tekst :</b> <input type="text" name="search" placeholder="search">
	<input type="submit" name="submit" value="search" style="width:100px;text-align:center;font-size:25px">
	</form>
<?php
	$pretraga=isset($_POST['search'])?$_POST['search']:"";   //uzimanje podatka iz search forme
	if(strlen($pretraga)>3){   //duzina minimum 4
		$conn=new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
		$q=$conn->query("select * from registracija where korisnicko_ime like '%{$pretraga}%'");
		$brojRedova=mysqli_num_rows($q);
		echo "<div style='border:1px solid black;padding:4px;font-weight:bold;width:300px'>Ukupno rezultata pretrage : {$brojRedova}</div><hr>";
		while($rw=$q->fetch_object()){
			echo "<h4>Podaci korisnika <u>{$rw->korisnicko_ime}</u></h4>";
			echo "Vas email je : <b>".$rw->email."</b><br>";
			echo "Vase korisnicko ime je : <b>".$rw->korisnicko_ime."</b><br>";
			echo "Vasa lozinka je : <b>".$rw->lozinka."</b><br>";
			echo "Vasa potvrdjena lozinka je : <b>".$rw->lozinka1."</b><br>";
			echo "<hr>";
		}						
	}else{
		echo "Za pretragu morate uneti minimum 4 karaktera.";   
	}
	echo "<h4>Ovde se mozete izlogovati: <a href='logout.php'>Log Out</a></h4>";
	echo "</div>";    //kraj diva ispis	
}
?>
		</div>  <!--kraj wrappera-->
	</body>
</html>

<?php
$linkovi=new Linkovi; //klasa Linkovi
?>


