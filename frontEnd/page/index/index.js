window.onload = () => {
    addEvent();
}

async function showToken(userName, password) {
    let url = window.location.origin + "/backEnd/controller/tokenController.php?function='create'";
    await fetch(url);
}

function addEvent() {
    let frmLog = document.querySelector("#frmLogIn");
    let userName = frmLog.userName.value;
    let password = frmLog.password.value;

    frmLog.onsubmit = () => {
        showToken(userName, password);
    }
}
