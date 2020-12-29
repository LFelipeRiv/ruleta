<?php 

    include __DIR__.'/ClsCustomer.php';
    include __DIR__.'/ClsValidationForm.php';
    include_once __DIR__.'/../ClsMessage.php';
    // include  __DIR__ . '/../../mail/ClsSendEmail.php';

    $customer = new Customer();
    $validationF = new ValidationForm();
    // $sendEmail = new SendEmail();
    $message = new Message();

    // $id = $validationF->idValidation();
    $name = $validationF->nameValidation();
    $lastName = $validationF->lastNameValidation();
    $email = $validationF->emailValidation();
    $phone = $validationF->phoneValidation();
    $freeGame = $validationF->freeGameValidation();
    $bill = $validationF->billValidation();

    
    // $comments = $_POST['txtComentariosContacto'];

    if (!$name || !$lastName || !$email || !$phone || !$freeGame || !$bill) {
        
        $msjError = $validationF->errorMessage();

        $message->setMessage(false, $msjError);
        $message->getMessage();

    }else{

        // $customer->setId($id);
        $customer->setName($name);
        $customer->setLastName($lastName);
        $customer->setEmail($email);
        $customer->setPhone($phone);
        $customer->setFreeGame($freeGame);
        $customer->setBill($bill);
    
        $result = $customer->insertCustomer();

           
    }

?>