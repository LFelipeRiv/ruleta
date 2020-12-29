
    

<?php 

    include_once __DIR__.'/../ClsDB.php';
    include_once __DIR__.'/../ClsMessage.php';

    class Customer extends DB{

        private $id;
        private $name;
        private $lastName;
        private $email;
        private $phone;
        private $freeGame;
        private $bill;

        private $customerTable = 'customer';

        public function setId($id){
            $this->id = $id;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }

        public function getPhone(){
            return $this->phone;
        }

        public function setBill($bill){
            $this->bill = $bill;
        }

        public function getBill(){
            return $this->bill;
        }

        public function setFreeGame($freeGame){
            $this->freeGame = $freeGame;
        }

        public function getFreeGame(){
            return $this->freeGame;
        }


        
        // * Methods
        public function selectCustomers(){

            $query = $this->connect()->query('SELECT * FROM ' . $this->customerTable,PDO::FETCH_ASSOC);

            $rows = $query->rowCount();

            if ($rows <= 0) {
                return false;
            } else {
                return $query;
            }
            
        }

        public function insertCustomer(){
            try {
                
                $query = $this->connect()->prepare('INSERT INTO ' . $this->customerTable . ' VALUES(:id, :name, :lastName, :email, :phone, :freeGame, :bill)');

                $query->execute(['id' => $this->getId(), 'name' => $this->getName(), 'lastName' => $this->getLastName(), 'email' => $this->getEmail(), 'phone' => $this->getPhone(), 'freeGame' => $this->getFreeGame(), 'bill' => $this->getBill()]);
                
                // Message to send 
                $message = new Message();

                $message->setMessage(true, 'Cliente Registrado');

                $message->getMessage();
                

            } catch (PDOException $e) {
                // throw $th;

                $message = new Message();

                $errorMsj = $e->getMessage();

                if (strpos($errorMsj, 'Duplicate') && strpos($errorMsj, 'entry')) {
                    // echo 'true';
                    
                    $message->setMessage(true, 'El correo ya ha sido registrado', $e);
    
                    $message->getMessage();

                }


            } catch (Exception $e){
                $message = new Message();
                $message->setMessage(false, 'Error', $e);
                
                $message->getMessage();
            }
           
        }

        // public function deleteCustomer(){

        //     $query = $this->connect()->prepare('DELETE FROM ' . $customerTable . 'WHERE id = :id');

        //     $query->execute(['id' => $this->getId()]);

        //     if ($query) {
        //         echo 'exito';
        //     }
        //     else {
        //         echo 'error';
        //     }

        // }

        public function updateCustomerFreeGame(){

            try {
               // set it to false or 0
            $this->setFreeGame(0);

            $query = $this->connect()->prepare('UPDATE ' .$this->customerTable . ' SET freeGame = :freeGame WHERE email = :email');

            $query->execute(['freeGame' => $this->getFreeGame(), 'email' => $this->getEmail()]);

            $message = new Message();

            if ($query) {
                $message->setMessage(true, 'Actualizado: '. $this->getEmail() . ' valor: ' . $this->getFreeGame());
                $message->getMessage();
            }
            else {
                
                $message->setMessage(false, 'No se pudo actualizar');
                $message->getMessage();
            }
            } catch (\Throwable $th) {
                //throw $th;
                $message->setMessage(false, 'No se pudo actualizar', $th);
                $message->getMessage();
            }
            

        }


 

    }

?>
