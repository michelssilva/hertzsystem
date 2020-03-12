function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla>47 && tecla<58)){

        // sonumero.style.backgroundColor = "#ffffff";
        sonumero.style.borderColor = '#c6c8ca';
        sonumero.autofocus;


        return true;
    }

    else{
        sonumero.style.borderColor = '#c6c8ca';
        if (tecla==8 || tecla==0) return true;
        else  return false;
    }
}

