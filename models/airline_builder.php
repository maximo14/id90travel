<?php
    require "airline.php";
    
    class AirlineBuilder{
        private $airline;
        
        public function __construct(){
            $this->airline = new Airline();
        }
    
        public function id($id){
            $this->airline->setId($id);
            return $this;
        }

        public function name($name){
            $this->airline->setName($name);
            return $this;
        }

        public function code($code){
            $this->airline->setCode($code);
            return $this;
        }

        public function signInAvailable($sign_in_available){
            $this->airline->setSignInAvailable($sign_in_available);
            return $this;
        }

        public function signUpAvailable($sign_up_available){
            $this->airline->setSignUpAvailable($sign_up_available);
            return $this;
        }

        public function displayName($display_name){
            $this->airline->setDisplayName($display_name);
            return $this;
        }

        public function isCommercial($is_commercial){
            $this->airline->isCommercial($is_commercial);
            return $this;
        }

        public function employeeNumberRequired($employee_number_required){
            $this->airline->setEmployeeNumberRequired($employee_number_required);
            return $this;
        }

        public function partner($partner){
            $this->airline->setPartner($partner);
            return $this;
        }

        public function lang($lang){
            $this->airline->setLang($lang);
            return $this;
        }

        public function currency($currency){
            $this->airline->setCurrency($currency);
            return $this;
        }

        public function emailDomains($email_domains){
            $this->airline->setEmailDomains($email_domains);
            return $this;
        }

        public function build(){
            return $this->airline;
        }
    }
?>