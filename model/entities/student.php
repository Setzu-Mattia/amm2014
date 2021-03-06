<?php

    require_once dirname(__FILE__).'/../factories/settings.php';

    require_once dirname(__FILE__).'/person.php';
    require_once dirname(__FILE__).'/user.php';


    class Student extends User{
        
        
        /**
         * @param String    $name       The student's name.
         * @param String    $surname    The student's surname.
         * @param DateTime  $birthday   The student's birthday.
         * @param String    $ward       The student's ward.
         * @param String    $email      The student's email.
         * @param String    $password   The student's password.
         * @param int       $id         The student's id.
         */
        public function __construct($name, $surname, $birthday, $ward, $email, $password, $id){

            parent::__construct($name, $surname, $birthday, $ward, $email, $password, $id);

        }

        public function getRole() {
            return get_class($this);
        }        
    }
        
?>
