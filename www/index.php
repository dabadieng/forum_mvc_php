<?php
require "../_include/inc_config.php";
$module = $_GET["module"] ?? "accueil";
$action = $_GET["action"] ?? "edit";
$module = "Ctr_" . $module;
new $module($action);
