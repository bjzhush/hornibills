<?php
if (isset($_GET['user']) && isset($_GET['pwd']) && ($_GET['pwd'] == 'allydata') && empty($_COOKIE['user'])) {
    setcookie('user', $_GET['user'], time()+3600*24*365*10);
    exit('Auth succeed ,pleasz refresh !');
}
if (empty($_COOKIE['user'])) {
    exit('Auth Failed');
} else {
    include('tpl.html');
}
