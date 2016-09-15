<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
<?php
	include_once "conecta.php";
	$sql=mysqli_query($con,"INSERT INTO funcionario VALUES ('$_POST[cpf]','$_POST[nome]','$_POST[cargo]')");
	
	echo "<script language=javascript>alert('Inserção de dados completada com sucesso');</script>";
?>



</body>
</html>
