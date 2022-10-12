<?php include('header.php'); ?>
<?php
$result = "";
if (isset($_GET['msg'])) {
    $result = $_GET['msg'];
}
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="Home.php">Inicio</a><i class="fa fa-angle-right"></i>Cambiar Password</li>
</ol>
<form method="POST" action="controller/login.php">
    <div class="container-fluid" style="margin-bottom: 30px;margin-top: 10px; background: white;">
        <div class="row">
            <h2 style="color: #1abc9c;">Cambiar Contraseña</h2>
            <hr>
            <div class="col-md-5 control-label">
                <label class="control-label">Contraseña Actual</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                    <input type="password" name="oldpass" title="Old Password" placeholder="Contraseña Actual" class="form-control">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="row">
            <div class="col-md-5 control-label">
                <label class="control-label">Nueva Contraseña</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                    <input type="password" title="New Password" name="npassword" placeholder="Nueva Contraseña" class="form-control">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="row">
            <div class="col-md-5 control-label">
                <label class="control-label">Confirmar Contraseña</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                    <input type="password" name="cpassword" title="Confirm Password" placeholder="Confirmar Contraseña" class="form-control">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <h4 style="color: #F1C40F;"><?php echo $result ?></h4>
        <div class="row">
            <div class="col-md-3 form-group">
                <button type="submit" name="save" title="Save" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-default" title="Reset">Resetear Valores</button>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</form>

<?php include('footer.php'); ?>