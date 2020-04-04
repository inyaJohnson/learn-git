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
use State\Origin\myLocalGovernment;


$name = new FirstName();
$state = new MyState();
$lga = new myLocalGovernment();

echo $name->name() .$lga->localGovernmentName() .$state->StateName();