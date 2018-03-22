$(document).ready(function(){
  $("#create-user-button").on( "click", function(event) { 
    event.preventDefault();
    createuser('create-user'); 
  });

  $("#auth-button").on( "click", function(event) { 
    event.preventDefault();
    auth('auth'); 
  });

});                    

function auth(formname) {

  var form, message, response;
  form = jQuery('#'+formname);
  showerrors(form);

  form.validate({
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      email: {
        required: 'Digité el correo',
        email: 'Correo electr&oacute;nico erroneo (ejemplo@dominio.com).'
      }
    }
  });
  if (form.valid()) {
    jQuery( "#"+formname ).submit();  
  }
};


function createuser(formname) {

  var form, message, response;
  form = jQuery('#'+formname);
  showerrors(form);

  form.validate({
    rules: {
      name: {
        required: true
      },
      lastname: {
        required: true
      },
      company: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      position: {
        required: true
      },
      adress: {
        required: true
      },
      city: {
        required: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: 'Digité su nombre'
      },
      lastname: {
        required: 'Digité su apellido'
      },
      company: {
        required: 'Digité su empresa'
      },
      email: {
        required: 'Digité el correo',
        email: 'Correo electr&oacute;nico erroneo (ejemplo@dominio.com).'
      },
      position: {
        required: 'Digité su cargo'
      },
      adress: {
        required: 'Digité su dirección'
      },
      city: {
        required: 'Digité su ciudad'
      },
      phone: {
        required: 'Digité su telefono'
      }
    }
  });
  if (form.valid()) {
    jQuery( "#"+formname ).submit();  
  }
};