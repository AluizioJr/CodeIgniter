<html>
<head>
	<title></title>
</head>
<body>

<h1>Seja bem vindo.</h1>

<div>
	<?php if($this->session->flashdata('msg')) ?>
	<?php echo $this->session->flashdata('msg'); ?> </div>

<!-- <div>

	<?php

	echo form_open('MainController/login');
	echo form_fieldset('Conjuntos de Campos do Form');
	echo ('Usuario');
	echo form_input('usuario');
	echo ('Senha');
	echo form_password('senha');
	echo form_fieldset_close();
	echo form_submit("submit", "Enviar");
    echo form_close();


	?>


</div>
-->



<div>

	<?php

	echo form_open('MainController/create_usuario');
	echo form_fieldset('Novo Usuario');
	echo ('Nome:');
	echo form_input('nome');
	echo ('Email:');
	echo form_input('email');
	echo ('Senha:');
	echo form_password('Senha:');
	echo form_fieldset_close();
	echo form_submit("submit", "Enviar");
    echo form_close();


	?>


</div>


<div>

<ul>
<?php

	foreach($usuarios as $a){

		echo '<li>'.anchor("maincontroller/apagar_usuario/$a->nome", 'Apagar').'-'.$a->nome.'-'.$a->email.'</li>';



	};


?>
</ul>


</div>

</body>
</html>