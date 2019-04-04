<?php
    class Airline
    {
        private $id;
        private $name;
        private $code;
        private $sign_in_available;
        private $sign_up_available;
        private $display_name;
        private $is_commercial;
        private $employee_number_required;
        private $partner;
        private $lang;
        private $currency;
        private $email_domains;
     
        public function __construct(){

        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getCode(){
            return $this->code;
        }

        public function setCode($code){
            $this->code = $code;
        }

        public function getSignInAvailable(){
            return $this->sign_in_available;
        }

        public function setSignInAvailable($sign_in_available){
            $this->sign_in_available = $sign_in_available;
        }

        public function getSignUpAvailable(){
            return $this->sign_up_available;
        }

        public function setSignUpAvailable($sign_up_available){
            $this->sign_up_available = $sign_up_available;
        }

        public function getDisplayName(){
            return $this->display_name;
        }

        public function setDisplayName($display_name){
            $this->display_name = $display_name;
        }

        public function isCommercial(){
            return $this->is_commercial;
        }

        public function setIsCommercial($is_commercial){
            $this->is_commercial = $is_commercial;            
        }

        public function getEmployeeNumberRequired(){
            return $this->employee_number_required;
        }

        public function setEmployeeNumberRequired($employee_number_required){
            $this->employee_number_required = $employee_number_required;
        }

        public function getPartner(){
            return $this->partner;
        }

        public function setPartner($partner){
            $this->partner = $partner;
        }

        public function getLang(){
            return $this->lang;
        }

        public function setLang($lang){
            $this->lang = $lang;
        }

        public function getCurrency(){
            return $this->currency;
        }

        public function setCurrency($currency){
            $this->currency = $currency;
        }

        public function getEmailDomains(){
            return $this->email_domains;
        }
   
        public function setEmailDomains($email_domains){ 
            $this->email_domains = $email_domains;
        }
    }
