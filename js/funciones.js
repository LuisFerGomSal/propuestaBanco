
//Funcion para validar que solo se ingresen números en el campo.
function validateNumber(evt) {
    var theEvent = evt || window.event;
  
    // Pegar
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {

    // Teclear
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }