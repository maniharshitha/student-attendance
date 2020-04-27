<?php
// user config
session_start();
define("DB_SERVER", "localhost");

//define("DB_DATABASE", "attendance_system");
//define("DB_USERNAME", "root");
//define("DB_PASSWORD", "");

define("DB_DATABASE", "logistj5_attendance");
define("DB_USERNAME", "mani220300@gmail.com");
define("DB_PASSWORD", "123");

//define("ROOT", "http://localhost/AttSytem/");
//define("BaseROOT", "http://localhost/AttSytem/");

define("ROOT", "http://www.logisticinfotech.com/AttSytem/");
define("BaseROOT", "http://www.logisticinfotech.com/AttSytem/");

//change post data
foreach ($_POST as $key => $value) {
    if(!is_array($value)){
      $_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
    }
}
?>