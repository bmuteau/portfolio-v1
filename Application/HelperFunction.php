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

    public static function isConnected(): bool
    {
        if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
            return true;
        }
        return false;
    }

    public static function connexion(string $email, string $password)
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM admin WHERE email=? ");
            $stm->execute(array($email));
            $stmresult = $stm->fetch();

            if ($stmresult) {
                if ($stmresult['password'] == $password) {
                    $_SESSION['id'] = $stmresult['id'];
                    $_SESSION['email'] = $stmresult['email'];
                    $_SESSION['password'] = $password;

                    return 0; // tout est ok
                } else {
                    return 1; // password incorect
                }
            }
            return 2; // email erronné
        }
        return 3; // erreur avec de connexion avec la DB
    }

    public static function disconnected()
    {
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
        }
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);
        }


        if (isset($_SESSION['password'])) {
            unset($_SESSION['password']);
        }
    }
}
