function validar() {
    console
    if(document.getElementById('senha').value != document.getElementById('senhaConfirma').value){
        alert("Você preencheu os campos de senhas com valores distintos!")
        return false
    }
    else return true
}
