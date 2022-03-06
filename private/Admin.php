<?php

require_once('Crud.php');
require_once('Pet.php');

class Admin{

  private $username;
  private $password;

  /*public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
  }*/

  public function setUsername($username){
    $this->username = $username;
  }

  public function getUsername(){
    return $this->username;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getPets(){
    $crud = new Crud();
    $pets = $crud->getAllPets();

    if($pets){
      foreach ($pets as $key => $row) {
        echo "<div class='row py-2 border_pet my-5'>
            <div class='col-3'>
              <img src='" .$row['picture']. "' class='img-thumbnail' alt=''>
            </div>
            <div class='col-3'>
              <h5 class='mt-lg-5 text-center'>".$row['name']."</h5>
            </div>
            <div class='col-3'>
              <a href='admin_page.php?pet=".$row['pet_id']."' type='button' class='btn mt-lg-5 remove_button btn-danger'>Remove Pet</a>
            </div>
          </div>";
        }
      }
  }

  public function showPetDetails($ped_id){

    $crud = new Crud();
    $pet = $crud->getById($ped_id);

    if($pet){
    echo "     <div class='row'>
           <div class='col-lg-6'>
             <div class='' data-animate-effect='fadeIn'>
               <img src='".$pet['picture']."' class='img-fluid' alt=''>
             </div>
           </div>
           <div class='col-lg-6'>
             <div class='text-lg-end display-tc'>
               <h2>".$pet['name']."</h2>
               <h5 class='mt-3'>Age: ".$pet['age']."years old</h5>
               <h5 class='mt-3'>Gender: ".$pet['gender']."</h5>
               <h5 class='mt-3'>Breed: ".$pet['breed']."</h5>
               <p class=''>".$pet['description']."</p>
             </div>
             <div class=''>
               <a href='#' type='button' class='btn add btn-success'>Request a quote</a>
             </div>
           </div>
         </div>";
  }
}

  public function removePet($pet_id){
    $crud = new Crud();
    $crud->removePet($pet_id);
  }

}


 ?>
