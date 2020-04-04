<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 4/4/20
 * Time: 1:57 PM
 */

require_once 'app/start.php';
use Person\Name\FirstName as FirstName;
use State\Origin\MyState;


$name = new FirstName();
$state = new MyState();

echo $name->name() ." is from ".$state->StateName();