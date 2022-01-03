<?php
session_start();

unset($_SESSION['txtUser']);

session_destroy();

//header('Location:index.html');
?>

<script>
var Backlen = history.length;
history.go(-Backlen);
alert("Sucessfully Logged Out...!");
window.location.href = "index.html";
</script><!-- comment -->