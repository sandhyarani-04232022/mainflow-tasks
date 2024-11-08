
  /* Toggle Eye */
  
  function toggle(e){
       var password = document.getElementById('password');
      // toggle the type attribute
      var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye / eye slash icon  
      let txt = e.innerText;
       e.innerText = txt == 'visibility_off' ? 'visibility' : 'visibility_off';

  }




/* on checkbox checked enable submit button */

function checkBox(c){
    if(document.getElementById("check1").checked){
    document.getElementById("register-btn").disabled = false;
    }else {
    document.getElementById("register-btn").disabled = true;
    }
}


function myKeyup(id) {
    document.getElementById(id).nextElementSibling.setAttribute("style", "display:none;");
  }

