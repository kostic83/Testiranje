<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">  <!--pocetak wrappera-->
<?php
include "config.php";

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['lozinka'];
	
	$conn=new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
	$q=$conn->query("select * from registracija where email='{$email}' and lozinka='{$password}'");  //provera unetih podataka
	$rw=$q->fetch_object();
	if($rw){
		session_start();      //pokretanje sesije ako je sve ok
		$_SESSION['korisnik']=$rw->id;		
		echo "<h4>Dobrodosli! Ulogovani ste kao <u><i>{$rw->korisnicko_ime}</i></u>.<br>Sada mozete pristupiti glavnoj strani: <a href='index.php'>Home Page</a></h4>";
		echo "<h4>Ovde se mozete izlogovati: <a href='logout.php'>Log Out</a></h4>";		
	}else{
		echo "<h4>Pogresan email ili lozinka.Pokusajte ponovo!</h4>";
	}
}
?>
		</div>  <!--kraj wrappera-->
	</body>
</html>

<?php
$linkovi=new Linkovi; //klasa Linkovi
?>