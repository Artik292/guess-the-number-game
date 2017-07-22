<?php

session_start();
unset($_SESSION['game']);
unset($_SESSION['n']);
unset($_SESSION['w']);
unset($_SESSION['s']);
header('Location: index.php');
