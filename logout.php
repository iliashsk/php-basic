<?php

            include("connection.php");

            session_start();

            unset($_SESSION);

            session_destroy();

            mysqli_close($conn);

            header('location:loginform.php');

?>