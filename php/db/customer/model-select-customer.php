<?php 

    include __DIR__.'/ClsCustomer.php';

    $customer = new Customer();
    $customers = $customer->selectCustomers();

    // echo gettype($customers);
    // echo '<br> -----------------';
    // echo $customers;

    if (!$customers) {
        echo json_encode('no hay datos en la tabla'); // no enviar string sino cae en fail
    } else {
        
        foreach ($customers as $value) {
            $arreglo[] = $value;
        }
    
        echo json_encode($arreglo);
    }   

?>