<html>
<head>
	<title></title>
</head>
<body>

<h1>Seja bem vindo.</h1>



<div>

	<?php

	echo form_open('maincontroller/editar_usuario/'.$usuario->id);
	echo form_fieldset('Novo Usuario');
	echo ('Nome:');
	echo form_input('nome', set_value('nome',$usuario->nome));
	echo ('Email:');
	echo form_input('email', set_value('nome', $usuario->email));
	echo ('Senha:');
	echo form_password('Senha:');
	echo form_fieldset_close();
	echo form_submit("submit", "Enviar");
    echo form_close();


	?>


</div>




</body>
</html>