<?php 

    include __DIR__.'/ClsCustomer.php';
    include __DIR__.'/ClsValidationForm.php';
    include_once __DIR__.'/../ClsMessage.php';

    $customer = new Customer();
    // $validationF = new ValidationForm();
    $message = new Message();

    if (isset($_POST['name']) && isset($_POST['mail'])) {
       
        $name = $_POST['name'];
        $email = $_POST['mail'];

        $customer->setEmail($email);
        

        $customer->updateCustomerFreeGame();
    }
    
    
   

?>