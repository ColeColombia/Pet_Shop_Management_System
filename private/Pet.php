<?php declare(strict_types=1);

require_once('Crud.php');

class Pet{
  private $name;
  private $gender;
  private $age;
  private $color;
  private $type;
  private $breed;
  private $description;
  private $picture;

  public function setName($name) : void{
    $this->name = $name;
  }

  public function getName() : String{
    return $this->name;
  }

  public function setGender($gender) : void{
    $this->gender = $gender;
  }

  public function getGender() : String{
    return $this->gender;
  }

  public function setAge($age) : void{
    $this->age = $age;
  }

  public function getAge() : int{
    return $this->age;
  }

  public function setColor($color) : void{
    $this->color = $color;
  }

  public function getColor() : String{
    return $this->color;
  }

  public function setType($type) : void{
    $this->type = $type;
  }

  public function getType() : String{
    return $this->type;
  }

  public function setBreed($breed) : void{
    $this->breed = $breed;
  }

  public function getBreed() : String{
    return $this->breed;
  }

  public function setDescription($description) : void{
    $this->price = $description;
  }

  public function getDescription() : String{
    return $this->description;
  }

  public function setPicture($picture) : void{
    $this->picture = $picture;
  }

  public function getPicture() : String{
    return $this->picture;
  }

  public function insertPet($name, $gender, $age, $color, $type, $breed, $description, $picture) : void{
    $crud   = new Crud();
    $crud->insertPet([$name, $gender, $age, $color, $type, $breed, $description, $picture]);
  }

  public function getPets() : void{

    $crud   = new Crud();
    $pets   = $crud->getAllPets();

    if($pets){
      foreach ($pets as $key => $row) {
        echo "<div class='col-lg-3 colom'>
                <a href='petinfo.php?pet_id=".$row['pet_id']."'><img class='img-fluid' src='" .$row['picture']. "' alt=''>
                <p class='text-center'>" .$row['name']. "</p></a>
            </div>";
    }

    }
  }

  public function getByGender($gender, $type){
    $crud   = new Crud();
    $pets   = $crud->getByGender($gender, $type);

    if($pets){
      foreach ($pets as $key => $row) {
        echo "<div class='col-lg-3 colom'>
                <a href='petinfo.php?pet_id=".$row['pet_id']."'><img class='img-fluid' src='" .$row['picture']. "' alt=''>
                <p class='text-center'>" .$row['name']. "</p></a>
            </div>";
    }

    }
  }

  public function findByBreed($breed){
    $crud   = new Crud();
    $pets   = $crud->getByBreed("%$breed%");

    if($pets){
      foreach ($pets as $key => $row) {
        echo "<div class='col-lg-3 colom'>
                <a href='petinfo.php?pet_id=".$row['pet_id']."'><img class='img-fluid' src='" .$row['picture']. "' alt=''>
                <p class='text-center'>" .$row['name']. "</p></a>
            </div>";
    }

    }
  }

}

 ?>
