<?php

class Database extends PDO
{
    public function __construct()
    {
        $dbn = "mysql:host=" . localhost . ";dbname=" . root . ";charset=utf8";
        $param = array('PDO::ATTR_PERSISTENT' => 'true');
        parent::__construct($dbn, root, '', $param);
    }
}
