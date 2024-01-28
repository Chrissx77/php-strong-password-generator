<?php

session_start();
$message = $_SESSION['variabilePass'];

echo $message;