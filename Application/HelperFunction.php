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
    public static function addStack(string $name, $file_name)
    {
        global $db;
        $connect = $db->connect();
        if (!empty($_FILES)) {
            $file_name = $_FILES['sta-logo']['name'];
            $file_extension = strrchr($file_name, ".");

            $file_tmp_name = $_FILES['sta-logo']['tmp_name'];
            $file_dest = './src/stack/' . $file_name;

            $extensions_auto = array('.png', '.svg', '.jpg', '.jpeg', '.gif');

            if (in_array($file_extension, $extensions_auto)) {
                if (move_uploaded_file($file_tmp_name, $file_dest));
                if ($connect != null) {
                    $stm = $connect->prepare("INSERT INTO stack_list (name, logo) VALUES (?,?)");
                    $stm->execute(array(
                        $name,
                        $file_name
                    ));
                    return 0;
                }
                return 1;
            } else {
                echo " Seul les images sont autorisé";
            }
        }
    }
    public static function addProject(string $name, string $description, $file_name, int $duration, string $type, string $link, $checkbox)
    {
        global $db;

        $connect = $db->connect();

        if (!empty($_FILES)) {
            $file_name = $_FILES['pro-logo']['name'];
            $file_extension = strrchr($file_name, ".");

            $file_tmp_name = $_FILES['pro-logo']['tmp_name'];
            $file_dest = './src/project/' . $file_name;

            $extensions_auto = array('.png', '.svg', '.jpg', '.jpeg', '.gif');

            $checkbox = $_POST['stack'];

            if (in_array($file_extension, $extensions_auto)) {
                if (move_uploaded_file($file_tmp_name, $file_dest));
                if ($connect != null) {
                    for ($i = 0; $i < count($checkbox); $i++) {
                        $stm = $connect->prepare("INSERT INTO project (name, description, image, duration, type, link, stack_id) VALUES (?,?,?,?,?,?,?)");
                        $stm->execute(array(
                            $name,
                            $description,
                            $file_name,
                            $duration,
                            $type,
                            $link,
                            $checkbox[$i]
                        ));
                    }
                }
            }
            return 1;
        } else {
            echo " Seul les images sont autorisé";
        }
    }
    public static function addFormation(string $name, int $start, int $end)
    {
        global $db;
        $connect = $db->connect();

        if ($connect != null) {
            $stm = $connect->prepare("INSERT INTO formation (name, start, end) VALUES (?,?,?)");
            $stm->execute(array(
                $name,
                $start,
                $end
            ));
            return 0;
        }
        return 1;
    }
    public static function addExperience(string $name, int $start, int $end, string $detail, string $company, string $place)
    {
        global $db;
        $connect = $db->connect();

        if ($connect != null) {
            $stm = $connect->prepare("INSERT INTO experience (name, start, end, detail, company, place) VALUES (?,?,?,?,?,?)");
            $stm->execute(array(
                $name,
                $start,
                $end,
                $detail,
                $company,
                $place
            ));
            return 0;
        }
        return 1;
    }
    public static function addHobbie($file_name, string $name)
    {
        global $db;
        $connect = $db->connect();
        if (!empty($_FILES)) {
            $file_name = $_FILES['image-hob']['name'];
            $file_extension = strrchr($file_name, ".");

            $file_tmp_name = $_FILES['image-hob']['tmp_name'];
            $file_dest = './src/hobbie/' . $file_name;

            $extensions_auto = array('.png', '.svg', '.jpg', '.jpeg', '.gif');

            if (in_array($file_extension, $extensions_auto)) {
                if (move_uploaded_file($file_tmp_name, $file_dest));
                if ($connect != null) {
                    $stm = $connect->prepare("INSERT INTO hobbie (image, name) VALUES (?,?)");
                    $stm->execute(array(
                        $file_name,
                        $name
                    ));
                    return 0;
                }
                return 1;
            } else {
                echo " Seul les images sont autorisé";
            }
        }
    }
}
