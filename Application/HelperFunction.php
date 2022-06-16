<?php

namespace Application;

class HelperFunction
{
    public function __construct()
    {
    }

    public static function myGet(string $index): ?string
    {
        $url = $_SERVER["REQUEST_URI"];
        $exp =  explode("?", $url, 2);
        if (count($exp) <= 1)
            return null;
        $gets = explode("&", $exp[1]);
        foreach ($gets as $get) {
            $idval = explode("=", $get, 2);
            if (count($idval) == 2 && $idval[1] != "" && $idval[0] == $index) {
                return $idval[1];
            }
        }
        return null;
    }

    public static function getProjectModel(int $id)
    {
        global $db;
        $res = array();

        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM project WHERE id=? ");
            $stm->execute(array($id));
            return $stm->fetchAll();
        }
        return $res;
    }
}
