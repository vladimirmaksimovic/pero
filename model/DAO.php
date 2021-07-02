<?php
require_once '../config/db.php';

class DAO
{
  private $db;

  // svi auti iz baze
  private $SELECT_ALL_CARS = "SELECT * FROM auto";

  // unosi auto u bazu
  private $INSERT_CAR = "INSERT INTO auto(marka, cena) VALUES (?,?)";

  //private $SELECT_USER_BY_USERNAME_AND_PASSWORD = "SELECT * FROM users WHERE username = ? AND password = ?";
  //private $SELECT_USER_BY_USERNAME = "SELECT * FROM users WHERE username = ?";

  //private $INSERT_USER = "INSERT INTO users(ime, prezime, godiste, username, password) VALUES (?,?,?,?,?)";

  public function __construct()
  {
    $this->db = DB::createInstance();
  }

  // svi auti iz baze
  public function selectAllCars()
  {
    $statement = $this->db->prepare($this->SELECT_ALL_CARS);
    //$statement->bindValue(1, $id);

    $statement->execute();

    $result = $statement->fetchAll();
    return $result;
  }

  // unosi auto u bazu
  public function insertCar($marka, $cena)
  {
    $statement = $this->db->prepare($this->INSERT_CAR);
    $statement->bindValue(1, $marka);
    $statement->bindValue(2, $cena);

    $statement->execute();
  }

  /* 
  public function selectUserByUsernameAndPassword($username, $password)
  {
    $statement = $this->db->prepare($this->SELECT_USER_BY_USERNAME_AND_PASSWORD);
    $statement->bindValue(1, $username);
    $statement->bindValue(2, $password);

    $statement->execute();

    $result = $statement->fetch();
    return $result;
  }

  public function selectUserByUsername($username)
  {
    $statement = $this->db->prepare($this->SELECT_USER_BY_USERNAME);
    $statement->bindValue(1, $username);

    $statement->execute();

    $result = $statement->fetch();
    return $result;
  }

  public function insertUser($ime, $prezime, $godiste, $username, $password)
  {
    $statement = $this->db->prepare($this->INSERT_USER);
    $statement->bindValue(1, $ime);
    $statement->bindValue(2, $prezime);
    $statement->bindValue(3, $godiste);
    $statement->bindValue(4, $username);
    $statement->bindValue(5, $password);

    $statement->execute();
  }
   */
}
