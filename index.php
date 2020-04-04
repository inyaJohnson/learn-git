<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 4/4/20
 * Time: 1:57 PM
 */

require_once 'app/start.php';
use Person\Name\FirstName as FirstName;


$name = new FirstName();
return $name;