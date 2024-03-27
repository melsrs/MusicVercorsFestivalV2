<?php

$errorCode = null;

if (isset($_GET['error'])) {
  $errorCode = (int) $_GET['error'];
}

header("location: /public/");
