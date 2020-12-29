class Controller{

    service = new Service();

     msjExito = $('.msj-exito');
     msjError = $('.msj-error');


    async printInfo(entity){
        const data = await this.service.getData(entity);
        console.log(data);
    }
    
    async registerData(entity, body){
        
        const response = await this.service.registerData(entity, body);
        
        if (response) {
            const {status, msj} = JSON.parse(response);
            if (!status) {
                controller.phpError(msj);
            }else{
                const currentUserMail = $('#correo').val();
                const currentUserName = $('#nombre').val();
                console.log(currentUserMail);
    
                this.setCurrentUserName(currentUserName);
                this.setCurrentUser(currentUserMail);
    
                jugar();
            }
            
        } else {
            
        }

    }

    phpError(text){

        this.msjError.removeClass('d-none');
        this.msjError.html(text);
    }

    setCurrentUserName(currentUserMail){
        localStorage.setItem('userName', currentUserMail);
    }
    
    getCurrentUserName(){
        return localStorage.getItem('userName');
    }

    setCurrentUser(currentUserMail){
        localStorage.setItem('userID', currentUserMail);
    }
    
    getCurrentUser(){
        return localStorage.getItem('userID');
    }
    
}

// -- Variables

const entity = 'php/db/customer/model-select-customer.php';
const entityRegisterCustomer = 'php/db/customer/model-insert-customer.php';

    // * DOM
const formRuleta = $('#formRuleta')

    // * Obj Classes
const controller = new Controller();
const service = new Service();


// -- Events

// test de select customer
controller.printInfo(entity);

$( formRuleta ).submit(function( event ) {
    console.log(`submit`);
    event.preventDefault();

    // Form body
    const body = $(this).serialize();
    
    controller.registerData(entityRegisterCustomer, body);

});