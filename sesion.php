<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Iniciar Sesion</title>
</head>
<style type="text/css">
body{ 
	background: URL(fondo.png) 0 0 no-repeat;	
	} 

form.login {
	background: none repeat scroll 0 0 #F1F1F1;
	border: 1px solid #DDDDDD;
	font-family: sans-serif;
	margin-top: auto;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: auto;
	padding: 20px;
	width: 350px;
	box-shadow: 0px 0px 20px black;
	border-radius: 10px;
	text-align: center;
		   } 
form.login div {
	margin-left: auto;
	margin-right: auto;
	width: 340px;
} 
form.login div label { 
    display: block; 
    float: center; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] {
	border: 1px solid #DCDCDC;
	float: center;
	padding-top: 2px;
	padding-right: 2px;
	padding-left: 2px;
	padding-bottom: 2px;
} 
form.login div button[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #D3D3D3; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 

form button
	{
	width:150px;
	height:25px;
	margin:0px 25px;
	background: #; /* Old browsers */
	background: -moz-linear-gradient(top,  #d8e0de 0%, #aebfbc 22%, #99afab 33%, #8ea6a2 50%, #829d98 67%, #4e5c5a 82%, #0e0e0e 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d8e0de), color-stop(22%,#aebfbc), color-stop(33%,#99afab), color-stop(50%,#8ea6a2), color-stop(67%,#829d98), color-stop(82%,#4e5c5a), color-stop(100%,#0e0e0e)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #d8e0de 0%,#aebfbc 22%,#99afab 33%,#8ea6a2 50%,#829d98 67%,#4e5c5a 82%,#0e0e0e 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #d8e0de 0%,#aebfbc 22%,#99afab 33%,#8ea6a2 50%,#829d98 67%,#4e5c5a 82%,#0e0e0e 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #d8e0de 0%,#aebfbc 22%,#99afab 33%,#8ea6a2 50%,#829d98 67%,#4e5c5a 82%,#0e0e0e 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #d8e0de 0%,#aebfbc 22%,#99afab 33%,#8ea6a2 50%,#829d98 67%,#4e5c5a 82%,#0e0e0e 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d8e0de', endColorstr='#0e0e0e',GradientType=0 ); /* IE6-9 */
						
	border:1px solid#232323;
	color:#fff;
	box-shadow:0px 2px 0px #000;
	-moz-box-shadow:0px 2px 0px #000;
	-webkit-box-shadow:0px 2px 0px #000;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}
		
form button:hover
{
	background:#3a3a3a;
}
	
form button:active
{
	background: #D3D3D3; /* Old browsers */
	background: -moz-linear-gradient(top,  #D3D3D3 0%, #D3D3D3 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#D3D3D3), color-stop(100%,#D3D3D3)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #D3D3D3 0%,#D3D3D3 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #D3D3D3 0%,#D3D3D3 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #D3D3D3 0%,#D3D3D3 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #D3D3D3 0%,#D3D3D3 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#D3D3D3', endColorstr='#D3D3D3',GradientType=0 ); /* IE6-9 */
	margin-right: 30px;
	margin-left: 30px;
	margin-top: 0px;
	text-align: center;
				}
</style>
<img src="salud.png" width="100" height="100" align="left">
<img src="h.jpg"  width="100" height="100" align="right"> 
<br>
<br>
<br> 
<center><h2><FONT COLOR=#228B22 size=25> BIENVENIDO AL H.R.A.E.I</FONT></h2>
<body>
 <br/>
	<div id="registro"</div> 
	<div class="container">
	<div class="login">
  	<h1 class="login-heading">
      <form action="iniciar sesion" method="post">
<br>
<br>
<font color=#2F4F4F size=5> Login  <input name="usuario" type="text" autofocus id="usuario" onChange="VerificaEspacios(this.form)" placeholder="     Ingrese su Nombre"  size="" align="center"></font>
<br>
<br>
<br>
<font color=#2F4F4F size=5> Password  <input name="contrasena" type="password" autofocus id="contrasena" onChange="VerificaEspacios(this.form)" placeholder="     Ingrese No_checar" size="" align="center" /></font>
<br>
<br>
<br>
<td align="center" ><button type="subimit" size="">INICIAR SESION</button></td>
<br>
<br>
<br>
<br>
<div class="black-text"> 
	<div class="container brown-text text-darken-4"> 
	<!-- Modal Trigger --> 
	<center><font color="808080"size="3">Carretera Federal Mexico- Puebla Km 34.5, Pueblo de Zoquiapan, Municipio de Ixtapaluca.</font> 
	</center> 
	</div>
	</div>
	</form>
	</h1>
	</div>
	</div>
	</div>
</body>
</html>