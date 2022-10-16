function validPassForce() {
    var senha = document.getElementById('passF').value
    var strength = 0

    if((senha.length >= 5) && (senha.length <= 7)){
        strength += 12;
    } else if (senha.length > 8){
        strength += 25;
    }

    if ((senha.length >= 6) && (senha.match(/[a-z]+/))){
        strength += 12;
    }

    if ((senha.length >= 7) && (senha.match(/[A-Z]+/))){
        strength += 17;
    }

    if ((senha.length > 8) && (senha.match(/[@#$%&*]/))){
        strength += 25;
    }

    showForce(strength)
}

function showForce(strength){

    if ((strength < 12)){
        document.getElementById("errorPassForce").innerHTML = '<span>Inclua maiúsculas e caracteres especiais como:<strong>"@#$%&*"</strong></span>';
    }else if(strength < 38){
        document.getElementById("errorPassForce").innerHTML = "<span style='color: #ff0000'>Senha Fraca</span>";

    } else if ((strength >= 46) && (strength < 70)){
        document.getElementById("errorPassForce").innerHTML = "<span style='color: #ffd700'>Senha Média</span>";

    } else if ((strength >= 46) && (strength < 96)){
        document.getElementById("errorPassForce").innerHTML = "<span style='color: #7fff00'>Senha Forte</span>";
    }

}

function verifyPass(){
    var pass = formuser.passF.value;
    var confirm_pass = formuser.confirm_pass.value;

            if(pass == '' || pass.length <= 7){
                document.getElementById('congrats').innerHTML = "<span style='color: #000000'>Confirme aqui a senha acima</span>"
                formuser.confirm_pass.focus();
                return true;
            }
            if(confirm_pass == '' || confirm_pass.length <= 7){
                document.getElementById('congrats').innerHTML = "<span style='color: #ff0000'>É necessário ter no mínimo 8 caracteres </span>"
                formuser.confirm_pass.focus();
                return true;
            }
            if(pass != confirm_pass){
                document.getElementById('congrats').innerHTML = "<span style='color: #ffd841'>Senhas não coincidem</span>"
                formuser.confirm_pass.focus();
                return false;
            }
            if(pass == confirm_pass){
                document.getElementById('congrats').innerHTML = "<span style='color: #00f413'>Senhas corretas</span>"
                return true;
            }
}
function showPass(){
    var tipo = document.getElementById('passF') 
    if(tipo.type == "password"){
        tipo.type = 'text';
    }else{
        tipo.type = 'password'
    }
  }