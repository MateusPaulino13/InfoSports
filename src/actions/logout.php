<?php
require_once "connect.php";

//destroindo a sessão
session_destroy();

header("Location: login.php");
