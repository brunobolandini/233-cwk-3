<?php

    setcookie("logged_in", "false", time() - 60, "233-cwk-3/php/");
    header("location: ./../php/index.php" );

?>