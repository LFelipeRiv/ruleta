class RuletaController {

    service = new Service();

    printUserInfo(userID, userName) {

        userID.html(this.getCurrentUserMail());
        userName.html(this.getCurrentUserName());
    }

    getCurrentUserMail() {
        return localStorage.getItem('userID');
    }

    getCurrentUserName() {
        return localStorage.getItem('userName');
    }


    girarRuleta(btnGirar) {

        const userMail = this.getCurrentUserMail();
        const userName = this.getCurrentUserName();
        const entityUpdateFreeGame = 'php/db/customer/model-update-customer.php';


        const body = {
            name: userName,
            mail: userMail
        }
        this.service.updateData(entityUpdateFreeGame, body);
    }


}

// -- Variables

const ruleta = new RuletaController();

// * DOM
const btnGirar = $('#btn_girar');
const userID = $('#userID');
const userName = $('#userName');


ruleta.printUserInfo(userID, userName);

// -- Events


$(btnGirar).click(function (e) {
    e.preventDefault();

    console.log(`girando`);
    ruleta.girarRuleta();

});