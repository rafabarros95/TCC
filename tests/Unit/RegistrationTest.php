<?php 

   namespace Tests\Unit;

   use App\Controllers\Registration;
   use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase {
        public function testRegistration(){
            /* intance of a class Registration */
            $register = new Registration();

            /* call the method registration and its user data */
            $register -> registration();

            /* use assertives to make sure if the registration passed */
            $result = $register->registration();

            $this->assertTrue($result);
        }
    }

?>