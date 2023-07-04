<?php

session_start();
if (isset($_SESSION['name'])) {
  include "../layouts/nav-bar.php";
} else {

  include '../layouts/nav-bar-new.php';
}
