<?php 

    namespace App\Models\Repository;

    use App\Models\Services\DbConnection;
    use PDO;

    /* Repository responsable to register User into Database */

    /* @author Rafael <rafaelbarros95@icloud.com>; */

    class UserRepository extends DbConnection
    {
      /* @param string $name
        @param string $email
        ... */
      /*   @return bool */  

        public function RegisterUser(string $name, string $email, int $phone_number, string $date_birth, string $gender, string $password, string $usertype)
        {
            $query_reg_user = "INSERT INTO registration(name, email, phone_number, date_birth, gender, password, usertype) VALUES (:name, :email, :phone_number, :date_birth, :gender, :password, :usertype)";

            $reg_user = $this->getConnection()->prepare($query_reg_user);

            $reg_user->bindvalue(':name', $name, PDO::PARAM_STR);

            if($reg_user->execute()){
                return true;
            } else {
                return false;
            }
        }


    }

?>