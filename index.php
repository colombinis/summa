<?php
require_once dirname(__FILE__)."/vendor/autoload.php";

App::Log("Inicio APP ");

$app = new App();

$app->run();

App::Log("End APP ");
?>