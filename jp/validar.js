function validar() {
    var dados = document.getElementsByClassName("required")
    var ok = true
    for (let i = 0; i  < dados.length; i++) {
        if(dados[i].value == ''){
            ok = false
        }    
    }
    
    if(!ok){
        alert("Preencha todos os campos, por favor!")
        return false
    }

}
