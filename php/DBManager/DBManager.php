<?php

namespace php\DBManager;

use php\DBManager\DBModel;
require_once "DBModel.php";

class DBManager
{
    private $dbModel;
    public function __construct($config) {
        $this->dbModel = new DBModel($config);
    }

}