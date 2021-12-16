?php
require_once('app/pengguna.php');

$pengguna = new pengguna();
$pengguna->authenticate($_POST['uname'], $_POST['pass']);
?>