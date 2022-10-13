<?php include('userheader.php'); ?>
<?php
include_once('../controller/connect.php');

$dbs = new database();
$db = $dbs->connection();

$empid = $_SESSION['User']['EmployeeId'];
$sql = mysqli_query($db, "select * from type_of_leave ");
if (isset($_POST['Apply'])) {
  $leave = $_POST['leavestatus'];
  $reason = $_POST['reason'];
  $startdate = $_POST['startdate'];
  $enddate = $_POST['enddate'];
  $leavestatus = "Pendient";
  /*date formate*/
  $date = str_replace('/', '-', $startdate);
  $startd = date('Y-m-d', strtotime($date));
  $datee = str_replace('/', '-', $enddate);
  $endd = date('Y-m-d', strtotime($datee));
  /*end date formate*/

  mysqli_query($db, "insert into leavedetails values(null,'$empid','$leave','$reason','$startd','$endd','$leavestatus')");
  echo "<script>window.location='applyleave.php';</script>";
}
?>
<div class="s-12 l-10">
  <h1>Aplicación de Permiso</h1>
  <hr>
  <div class="clearfix"></div>
</div>
<div class="s-12 l-6">
  <form action="" method="post">
    <label>Tipo de Permiso</label>
    <select id="country" name="leavestatus" title="Select Leave" required="">
      <option value="">-- Seleccionar --</option>
      <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
        <option value="<?php echo $row['LeaveId']; ?>"><?php echo ucfirst($row['Type_of_Name']); ?></option>
      <?php } ?>
    </select>
    <label for="lname">Motivo</label>
    <input type="text" id="lname" name="reason" placeholder="Motivo" title="Reason" required="" autocomplete="off">
    <label for="lname">Fecha de Inicio</label>
    <input type="text" id="StartDate" name="startdate" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off" placeholder="Fecha Inicio" title="Start Date" required="">
    <label for="lname">Fecha Fin</label>
    <input type="text" id="EndDate" name="enddate" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off" placeholder="Fecha Fin" title="End Date" required="">

    <input type="submit" name="Apply" title="Submit" value="Enviar">
  </form>
</div>

<?php include('userfooter.php'); ?>

<script type="text/javascript">
  $('#EndDate').datetimepicker({
    yearOffset: 0,
    lang: 'ch',
    timepicker: false,
    format: 'd/m/Y',
    formatDate: 'Y/m/d',
    minDate: '2015/01/01', // yesterday is minimum date
    maxDate: '2030/01/01' // and tommorow is maximum date calendar
  });

  $('#StartDate').datetimepicker({
    yearOffset: 0,
    lang: 'ch',
    timepicker: false,
    format: 'd/m/Y',
    formatDate: 'Y/m/d',
    minDate: '2015/01/01', // yesterday is minimum date
    maxDate: '2030/01/01' // and tommorow is maximum date calendar
  });
</script>
