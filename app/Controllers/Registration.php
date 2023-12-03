<?php 
  
  namespace App\Controllers;

use App\Models\Repository\UserRepository;

  class Registration {
   
    public function registration()
    {
       $regUser = new UserRepository(string $name,string $email, int $phone_number, string $date_birth,string  $gender,string  $password, string $usertype ); 

      if($regUser->RegisterUser($name, $email, $phone_number, $date_birth, $gender, $password, $usertype)){
        return true;
      } else {
        return false;
      }
      return false;
    }
  }
?>