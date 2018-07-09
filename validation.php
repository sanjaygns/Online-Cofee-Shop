<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "root", "kupsip");
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

$s_name = $_POST['name'];
$s_email = $_POST['email'];
$s_pass = md5($_POST['pass']);
?>
<script>
    alert("sujay");
</script>
<?php
$result = $conn->query("INSERT INTO users (u_name, u_email, u_pass) VALUES ('$s_name', '$s_email', '$s_pass')");
echo "Form Submitted Succesfully";
$conn->close();

?>