<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">  <!--pocetak wrappera-->
<?php
include "config.php";
session_start();

if(!isset($_SESSION['korisnik'])){
	echo "<h4>Niste ulogovani.<br> Ulogujte se ovde: <a href='login.html'>Log In</a></h4>";
}
else{
	session_destroy();    //prekidanje sesije
	unset($_SESSION['korisnik']);
	echo "<h4>Uspesno ste se izlogovali.<br>Ulogujte se ponovo : <a href='login.html'>Log In</a></h4>";
}
?>
		</div>  <!--kraj wrappera-->
	</body>
</html>

<?php
$linkovi=new Linkovi; //klasa Linkovi
?>