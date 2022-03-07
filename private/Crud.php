<?php
require_once("Database.php");

class Crud extends Database{

  private $connect;

  public function __construct(){
    $this->connect = Database::instance();
  }

  public function createTables($query){
    try{
      $this->connect->exec($query);
    }
    catch(PDOException $ex){
      echo $ex;
    }
  }

  public function createPetTable(){
    $this->createTables("CREATE TABLE IF NOT EXISTS pet(pet_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    gender VARCHAR(255),
    age VARCHAR(255),
    color VARCHAR(255),
    type VARCHAR(255),
    breed VARCHAR(255),
    description VARCHAR(255),
    picture VARCHAR(255));");
  }

  public function getAllPets(){
    $pdo = $this->connect;

    $pets = $pdo->query("SELECT * FROM pet")->fetchAll();
    return $pets;
  }//end of getAllPets functions

  public function removePet($pet_id){
    $pdo    = $this->connect;
    $sql    = 'DELETE FROM pet WHERE pet_id=?';
    $stmt   = $pdo->prepare($sql);
    $stmt->execute([$pet_id]);
  }

  public function updatePet($update=[]){
    $pdo    = $this->connect;
    $sql    = 'UPDATE pet SET name=?, gender=?, age=?, color=?, type=?, breed=?, description=? WHERE pet_id=?';
    $stmt   = $pdo->prepare($sql);
    $result = $stmt->execute($update);

    if(!$result){
      return "Something went wrong";
    }
  }

  public function getByType($type){
    $pdo    = $this->connect;
    $sql    = "SELECT * FROM pet WHERE type=?";
    $stmt   = $pdo->prepare($sql);
    $result = $stmt->execute([$type]);

    if(!$result){
      return "Something went wrong";
    }
  }

  public function removeAll(){
    $pdo    = $this->connect;
    $sql    = "TRUNCATE TABLE pet";
    $stmt   = $pdo->prepare($sql);
    $result = $stmt->execute();

    if(!$result){
      return "Something went wrong";
    }
    else{
      return "Data cleared succesfully";
    }
  }

  public function getByBreed($breed){
    $pdo    = $this->connect;
    $sql    = "SELECT * FROM pet WHERE breed LIKE ?";
    $stmt   = $pdo->prepare($sql);
    $result = $stmt->execute([$breed]);
    $result = $stmt->fetchAll();
    return $result;
  }

  public function getById($ped_id){
    $pdo = $this->connect;
    $stmt = $pdo->prepare("SELECT * FROM pet WHERE pet_id=?");
    $stmt->execute([$ped_id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function getByName($name){
    $pdo    = $this->connect;
    $sql    = "SELECT * FROM pet WHERE name=?";
    $stmt   = $pdo->prepare($sql);
    $result = $stmt->execute([$name]);

    if(!$result){
      return "Something went wrong";
    }
  }

  public function getByGender($gender, $type){
    $pdo    = $this->connect;
    $sql    = "SELECT * FROM pet WHERE gender=? AND type=?";
    $stmt   = $pdo->prepare($sql);
    $stmt->execute([$gender, $type]);
    $result = $stmt->fetchAll();
    return $result;
  }

  public function insertPet($pet=[]){
    $pdo    = $this->connect;
    $sql    = "INSERT INTO pet (name, gender, age, color, type, breed, description, picture) VALUES (?,?,?,?,?,?,?,?)";
    $stmt   = $pdo->prepare($sql);
    $result = $stmt->execute($pet);

    if($result){
      return "Pet added succesfully";
    }
    else{
      return "Something went wrong";
    }

  }
}

 ?>
