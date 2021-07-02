<?php
    require_once '../model/DAO.php';

    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
    var_dump($action);

    switch ($action) {
        case 'doPost':

            session_start();

            $marka = isset($_REQUEST['marka']) ? $_REQUEST['marka'] : "";
            $cena = isset($_REQUEST['cena']) ? $_REQUEST['cena'] : "";

            if(!empty($marka) && !empty($cena)) {
                if(is_numeric($cena)) {
                    $dao = new DAO();

                    $dao->insertCar($marka, $cena);
                    $dao->selectAllCars();

                    header('Location: ./view/components/prikaz.php');
                } else {
                    $msg = 'Cena mora biti broj!';
                    include './view/components/prikaz.php';
                }
            } else {
                $msg = 'Morate popuniti sva polja!';
                include 'index.php';
            }
            break;

        case 'doGet':
            session_destroy();
            header('location: index.php');
            break;

        default:
            header("location: index.php");
            break;
    }
?>