<?php

class IndexModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $select = "SELECT `ter_id`, `ter_name` FROM `cities` WHERE ter_type_id = 0";
        $sth = $this->db->query($select);
        while ($res = $sth->fetch()) {
            $data .= "<option value='{$res['ter_id']}'>" . $res['ter_name'] . "</option>";
        }
        return $data;
    }
}