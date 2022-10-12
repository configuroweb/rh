<?php include('userheader.php'); ?>
<?php
$result = "";
if (isset($_GET['msg'])) {
	$result = $_GET['msg'];
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
?>
<div class="s-12 l-10">
	<h1>Cambiar Contraseña</h1>
	<hr>
	<div class="clearfix"></div>
</div>
<div class="s-12 l-6">
	<form action="../controller/login.php" method="post">
		<label for="fname">Actual</label>
		<input type="Password" id="fname" title="Old Password" name="oldpass" placeholder="Ingresa tu actual contraseña">
		<label for="lname">Nueva</label>
		<input type="Password" title="New Password" id="email" name="npassword" placeholder="Ingresa Nueva Contraseña">
		<label for="message">Confirmar</label>
		<input type="Password" id="message" name="cpassword" title="Retry Password" placeholder="Confirma nueva contraseña">
		<?php if ($result) { ?>
			<h5 style="color: #E73D3D;"><?php echo (isset($result)) ? $result : "";
									} else { ?></h5>
			<h5 style="color: #127409;"><?php echo (isset($id)) ? $id : "";
									} ?></h5>

			<input type="submit" title="Submit" name="usave" value="Enviar">
	</form>
</div>
<?php include('userfooter.php'); ?>