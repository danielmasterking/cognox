  function valideKey(evt){		
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // backspace.
      return true;
    } else if(code>=48 && code<=57) { // is a number.
      return true;
    } else{ // other keys.
      return false;
    }
  }

  function ValidaLongitud(campo, longitudMaxima) {
    try {
      if (campo.value.length > (longitudMaxima - 1))
        return false;
      else
        return true;             
    } catch (e) {
      return false;
    }
  }