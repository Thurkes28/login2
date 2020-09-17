<?php
require 'mysqli.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$sql = "SELECT * FROM login WHERE Username = ? AND password = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss', $Username, $Password);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows>0){
	header('location: selamatdatang.php');
}else{
?>
<script>
alert('Maaf Username dengan Password tidak wujud(<?php echo $Username . '|'.$Password; ?>)');
window.location = 'index.php';
</script>
<?php
exit;
}