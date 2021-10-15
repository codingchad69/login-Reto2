<?php
class Usuario {
 
        private $id;
        private $login;
        private $password;
      
        
        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }
    
        /**
         * @return mixed
         */
        public function getLogin()
        {
            return $this->login;
        }
    
        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }
    
        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }
    
        /**
         * @param mixed $login
         */
        public function setLogin($login)
        {
            $this->login = $login;
        }
    
        /**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }
    

        
}

?>