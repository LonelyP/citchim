<?php
//VALIDACIÓN DE CMAPOS
if(empty($_REQUEST['name']) || empty($_REQUEST['lastname']) || empty($_REQUEST['email']) || empty($_REQUEST['dni'])) || empty($_REQUEST['address']) || empty($_REQUEST['BirthMonth']) || empty($_REQUEST['birthday']) || empty($_REQUEST['birthyear']) || empty($_REQUEST['gender']) || empty($_REQUEST['phone'])
{
	echo "<script> window.location ='index.html';</script>";
}else{
		//RECEPCIÓN DE DATOS
		$nom=$_POST['name'];
		$lasnom=$_POST['lastname'];
		$email=$_POST['email'];
		$dni=$_POST['dni'];
		$address=$_POST['address'];
		$birtm=$_POST['BirthMonth'];
		$birtd=$_POST['birthday'];
		$birty=$_POST['birthyear'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];


		//CORREO DESTINO
		$cor="lufixtec@gmail.com";
		
		//ENVIO DE CORREO
		$de .="MIME-Version: 1.0\n"; 
		$de .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$de .= "Content-type: text/html; charset=UTF-8\r\n"; 
		$de .="From: WWWW.LUFIX.TECH <lufixtec@gmail.com>\r\n";
		//ASUNTO
		$asunto="Registro de Usuario.";
		
		//MENSAJE
		$mensaje="
					Mensaje de:<b>".$nom."</b>
					<br><br>
					<b>DATOS DE CONTACTO</b><br>
					Nombre: <b>".$nom."</b><br>
					Apellido: <b>".$lasnom."</b><br>
					Email: <b>".$email."</b><br><br>
					Dni: <b>".$dni."</b><br><br>
					Dirección: <b>".$address."</b><br>
					Mes: <b>".$birtm."</b><br>
					Día: <b>".$birtd."</b><br>
					Año: <b>".$birty."</b><br>
					Genero: <b>".$gender."</b><br>
					Telf: <b>".$phone."</b><br>
					<hr>
					<a href='http://www.lufix.tech' target='_blank'>http://www.lufix.tech</a>
				";

		//ENVIO DE CORREO
		mail($cor, $asunto, $mensaje, $de) or die('Hubo un error');	
		
		//SCRIPT DE CONFIRMACIÓN
		echo "<script>alert(\"Ya fue registrado, gracias por registrarce, pronto estaremos en contacto con usted.\\n|| www.lufix.tech ||\");</script>";
		echo "<script> window.location='index.html';</script>";
	}
?>