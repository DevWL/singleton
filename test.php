<?php

include "Singleton.php";

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

echo $instance1 === $instance2; // no output === false  | should return 1 if variables holds the reference to same instnace
