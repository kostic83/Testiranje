<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">  <!--pocetak wrappera-->
<?php
include "config.php";
$conn=new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$username=$_POST['username'];
	$username=str_replace("'","",$username);  //sprecavanje injection
	$username=str_replace('"','',$username);  
	$password=$_POST['pass'];
	$password1=$_POST['pass1'];		
	if(strlen($username)<6||strlen($password)<6){   //provera duzine
		echo "Duzina korisnickog imena i lozinke mora biti veca od 6 karaktera.";
	}else{
		$q=$conn->query("select * from registracija where email='{$email}'");
		$rw=$q->fetch_object();
		if($rw){      //ako postoji email
			echo "Taj email je vec registrovan.";
		
		}else{
			$q=$conn->query("select * from registracija where korisnicko_ime='{$username}'");
			$rw=$q->fetch_object();
			if($rw){      //ako postoji korisnicko ime
				echo "To korisnicko ime je zauzeto.Molimo odaberite drugo.";
			}
			else{
				if($password!=$password1){  //ako se lozinke ne poklapaju					
					echo "Unete lozinke se ne poklapaju.";
				}else{   //ako je sve ok
					$q1=$conn->query("insert into registracija values(null,'{$email}','{$username}','{$password}','{$password1}')");
					echo "Uspesno ste se registrovali.<br>Sada se mozete ulogovati: <a href='login.html'>Log In</a>";
				}
			}//korisnik		
		}//email
	} //duzina
}//submit
?>
		</div>  <!--kraj wrappera-->
	</body>
</html>

<?php
$linkovi=new Linkovi; //klasa Linkovi
?>
	
