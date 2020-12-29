<?php 

    class ValidationForm{

        // * Attributes
        private $id;
        private $name;
        private $lastName;
        private $email;
        private $phone;
        private $freeGame;
        private $bill;
        
        private $error = '';

        // * Regex
        private $regexNombreApellido  = "/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]{2,40}$/";
        private $regexEmail  = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
        private $regexNumero  = "/^[0-9]{4}?[0-9]{4}$/";
    
        // * Validations
        function nameValidation(){
           
            if(empty($_POST["txtNombreContacto"])) {

                $this->error .= "• Ingresa tu Nombre <br>";
                return false;
            } else {
                $this->name = $_POST["txtNombreContacto"];
                $this->name = filter_var($this->name, FILTER_SANITIZE_STRING);
                $this->name = trim($this->name);
      
                if ($this->name == '') {
                    $this->error .= '• Nombre está vacio <br>';
                    return false;
                }elseif (preg_match($this->regexNombreApellido, $this->name) == 0) {

                    $this->error .= "• Formato de Nombre es incorrecto <br>";
                    return false;
                }     
                return $this->name;
            }
        }

        function lastNameValidation(){
            if(empty($_POST["txtApellidoContacto"])) {
                $this->error .= "• Ingresa tu Apellido <br>";
                return false;
            } else {
                $this->lastName = $_POST["txtApellidoContacto"];
                $this->lastName = filter_var($this->lastName, FILTER_SANITIZE_STRING);
                $this->lastName = trim($this->lastName);
        
                if ($this->lastName == '') {
                    $this->error .= '• Apellido está vacio <br>';
                    return false;
                }elseif (preg_match($this->regexNombreApellido, $this->lastName) == 0) {
                    $this->error .= "• Formato de apellido es incorrecto <br>";
                    return false;
                }   
                return $this->lastName;
            }
        
        }

        function emailValidation(){
            if (empty($_POST['txtCorreoContacto'])) {
                $this->error .= "• Ingresa tu Correo Electrónico <br>";
                return false;
            } else {
                $this->email = $_POST['txtCorreoContacto'];
                
                if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                    $this->error .= "• Ingresa un Correo Electrónico válido <br>";
                    return false;
                } else {
                    $this->email = filter_var($this->email, FILTER_SANITIZE_EMAIL);
                    return $this->email;
                }
            }
        }

        function phoneValidation(){
                //Validando numero
            if(empty($_POST["txtNumeroContacto"])) {
                $this->error .= "• Ingresa tu Número de contácto<br>";
                return false;
            } else {
                $this->phone = $_POST["txtNumeroContacto"];
                $this->phone = trim($this->phone);
                $this->phone = filter_var($this->phone, FILTER_SANITIZE_NUMBER_INT);

                if ($this->phone == '') {
                    $this->error .= '• Número está vacio <br>';
                    return false;
                }elseif (preg_match($this->regexNumero, $this->phone) == 0) {
                    $this->error .= "• Formato de Número es incorrecto <br>";
                    return false;
                }   
                return $this->phone;
            }
        }

        function freeGameValidation(){

            return true;
                //Validando numero
            // if(empty($_POST["t"])) {
            //     $this->error .= "• Ingresa tu Número de Factura<br>";
            //     return false;
            // } else {
            //     $this->phone = $_POST["txtBill"];
            //     $this->phone = trim($this->phone);
            //     $this->phone = filter_var($this->phone, FILTER_SANITIZE_NUMBER_INT);

            //     if ($this->phone == '') {
            //         $this->error .= '• Factura está vacio <br>';
            //         return false;
            //     }
            //     // elseif (preg_match($this->regexNumero, $this->phone) == 0) {
            //     //     $this->error .= "• Formato de Factura es incorrecto <br>";
            //     //     return false;
            //     // }   
            //     return $this->phone;
            // }
        }

        function billValidation(){
                //Validando numero
            if(empty($_POST["txtFacturaContacto"])) {
                $this->error .= "• Ingresa tu Número de Factura<br>";
                return false;
            } else {
                $this->bill = $_POST["txtFacturaContacto"];
                $this->bill = trim($this->bill);
                $this->bill = filter_var($this->bill, FILTER_SANITIZE_STRING);

                if ($this->bill == '') {
                    $this->error .= '• Factura está vacio <br>';
                    return false;
                }
      
                return $this->phone;
            }
        }

        // * FN error
        function errorMessage(){
            return $this->error;
        }

    }// * class

?>