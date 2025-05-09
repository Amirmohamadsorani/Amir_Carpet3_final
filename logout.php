<?php
include("tag_a.php");
unset($_SESSION["login"]);
unset($_SESSION["admin"]);
    ?>
    <script>
        location.replace("index2.php");
    </script>
    <?php

include("footer2.html");
?>