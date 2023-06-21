<?php
session_start();
session_destroy();
?>
<script>
    alert("Sesión cerrada correctamente");
    setTimeout(function() {
        window.location.href = "index.php";
    }, 0000);
</script>