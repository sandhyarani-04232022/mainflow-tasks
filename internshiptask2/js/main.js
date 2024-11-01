
/* onkeyup, hide current focus element error message  */

function myFunction(id) {
    document.getElementById(id).nextElementSibling.setAttribute("style", "display:none;");
  }

/* Initialize dom on load */
window.onload=function(){
//document.getElementsByClassName("error-msg").setAttribute("style", "display:none;"); 
document.getElementById("alert-msg").setAttribute("style", "display:none;");
/* Initially set error message to none */

var error_msg_array = document.getElementsByClassName('error-msg');
    for (let i = 0; i < error_msg_array .length; i++) {
        error_msg_array [i].setAttribute("style", "display:none;");
    }
/* Validation code */

const myForm = document.getElementById('myForm');
myForm?.addEventListener('submit', (event) => {
    event.preventDefault(); 
    var namePattern =/^[a-zA-Z\s-]+$/;
    var emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var mobilePattern = /^[1-9]{1}[0-9]{9}$/;
    var firstname = document.getElementById("fname");
    var fname = firstname.value;
    var lastname = document.getElementById("lname");
    var lname = lastname.value;
    var ef = document.getElementById("email");
    var email = ef.value;
    var phone = document.getElementById("mobile");
    var mobile = phone.value;
  //  console.log(namePattern.test(lname));
    if(fname === "" && lname === "" && email === "" && mobile === ""){ 
        for (let i = 0; i < error_msg_array .length; i++) {
          //  error_msg_array [i].setAttribute("style", "display:block;");
            error_msg_array [i].style.display ="block";
            error_msg_array [i].setAttribute("style", "margin-top:10;margin-bottom:10px;"); 
            error_msg_array [i].innerHTML = "* This field is required";  
        }
      firstname.focus();          
    }else if(fname != "" && !namePattern.test(fname)) {
      document.getElementById('alert-msg').setAttribute("style", "display:none;");
      document.getElementById('fname').nextElementSibling.setAttribute("style", "display:block;");
      document.getElementById('fname').nextElementSibling.setAttribute("style", "display:block;"); 
       document.getElementById('fname').nextElementSibling.innerHTML = "Please enter valid characters only";
     }else if(lname != "" && !namePattern.test(lname)) {
        //document.getElementById('lname').nextElementSibling.setAttribute("style", "display:block;");
        document.getElementById('alert-msg').setAttribute("style", "display:none;");
        document.getElementById('lname').nextElementSibling.style.display ="block";
        document.getElementById('lname').nextElementSibling.setAttribute("style", "margin-top:10;margin-bottom:10px;"); 
         document.getElementById('lname').nextElementSibling.innerHTML = "Please enter valid characters only";
     }else if(email != "" && !email.match(emailPattern)) {
      document.getElementById('alert-msg').setAttribute("style", "display:none;");
        document.getElementById('email').nextElementSibling.setAttribute("style", "display:block;");
        document.getElementById('email').nextElementSibling.setAttribute("style", "margin-top:10;margin-bottom:10px;"); 
         document.getElementById('email').nextElementSibling.innerHTML = "Please enter valid email id";     
      }else if(mobile != "" && !mobile.match(mobilePattern)) {
        document.getElementById('alert-msg').setAttribute("style", "display:none;");
        document.getElementById('mobile').nextElementSibling.setAttribute("style", "display:block;");
        document.getElementById('mobile').nextElementSibling.setAttribute("style", "margin-top:10;margin-bottom:10px;"); 
         document.getElementById('mobile').nextElementSibling.innerHTML = "Please enter valid mobile number";     
     }else if((fname != "" && lname === "" && email === "" && mobile === "") || (fname === "" && lname != "" && email === "" && mobile === "") ||
     (fname === "" && lname === "" && email != "" && mobile === "") || (fname === "" && lname === "" && email === "" && mobile != "")) {
      for (let i = 0; i < error_msg_array .length; i++) {
        error_msg_array [i].setAttribute("style", "display:none;");
      }
      document.getElementById('alert-msg').setAttribute("style", "display:block;");
        document.getElementById('alert-msg').setAttribute("style", "margin-top:20px;margin-bottom:20px;"); 
        document.getElementById('alert-msg').innerHTML = "* Please enter all mandatory fields";     
     }else{
        document.getElementById("myForm").reset();
        document.getElementById('alert-msg').setAttribute("style", "display:none;");
        document.getElementById('success-msg').setAttribute("style", "display:block;");
        document.getElementById('success-msg').innerHTML = "Form submitted successfully. We will get back to you soon";     
     }
});}

function myToggle() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Hello") {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Hello";
  }
}

