<?php
use db\query\Querybuilder;
use db\connect\database;
return new Querybuilder(database::connection());
?>