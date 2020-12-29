<?php 

    class Message{

        private $messageArray = array('status' => true, 'msj' => 'succ or err msjs', 'data' => '');

        /**
         * v1 - params status:bool, msj:string, data
         */
        function setMessage($status, $msj, $data = ''){
            
            // * true or false
            $this->messageArray['status'] = $status;
            // * msj
            $this->messageArray['msj']   = $msj;
            // * data json
            $this->messageArray['data'] = $data;
            
        }
        /**
         * v1 - return the 3 params of the json msj
         */
        function getMessage(){
            
            echo json_encode( $this->messageArray );
        }

        
    
    }

?>