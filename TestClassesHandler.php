<!DOCTYPE HTML>
<html>
	<?PHP
		require_once 'BenefactorClass.php';
		require_once 'AdminClass.php';
		
		$Bfname =	    $_GET["BeneFName"];
		$Blname =       $_GET["BeneLName"];
		$Bphone =	    $_GET["BenePhoneNumber"];
		$Bemail =	    $_GET["BeneEmail"];
		$title = 	    $_GET["title"];
		$fax = 		    $_GET["Fax"];
		$address =	    $_GET["Address"];
		$employer =	    $_GET["Employer"];
		$AdfName =	    $_GET["AdminFName"];
		$AdlName =      $_GET["AdminLName"];
		$AdPhone =	    $_GET["AdminPhoneNumber"];
		$AdEmail =	    $_GET["AdminEmail"];
		
		$Bene = new Benefactor($Bfname, $Blname, $Bphone, $Bemail, $employer, $address, $title, $fax);
		$admin = new Admin($AdfName, $AdlName, $AdPhone, $AdEmail);
	?>
	<head>
		<title>Are they good?</title>
	</head>
	<body>
		<?PHP
           echo $Bene->     __toString();
           echo "<br>";
           echo $admin->    __toString();
		?>
	</body>