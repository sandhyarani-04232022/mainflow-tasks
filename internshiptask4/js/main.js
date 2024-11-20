let currentDisplay = "0";
let resultDisplay=false;
let dlt = document.querySelector('.btn-delete');
let button = document.querySelectorAll(".btn");
let clear  = document.querySelector(".btn-clear");
//let delete = document.querySelector(".btn-delete");
let equal = document.querySelector('.btn-equal');
let popup_err_text = document.getElementById('popup_err_text');
let btn_click = 0;
let  maxLen = 15; 

button.forEach(function(button) {    
    function check(){
        if(btn_click <= maxLen || currentDisplay.length <=maxLen){        
            updateDisplay();    
        }else if (btn_click >= maxLen){ 
            var elements = document.getElementsByClassName("btn");
           
            for (var i = 0, len = elements.length; i < len; i++) {
                //console.log(elements[i]);
                elements[i].disabled = true;
            }
            let msg = "Can't accept more than 15 characters";     
            popup_err_text.setAttribute("style", "display:block;");
            popup_err_text.innerHTML = msg;           
        }
    }
 button.addEventListener('click', function(e) {   
    
    btn_click += 1;  
    let value = this.dataset.num;
    
    if (currentDisplay === "0" || resultDisplay) {        
         currentDisplay = value;               
    } else{
        currentDisplay += value;
    } 
    resultDisplay=false;     
    check();
});      
    
});


function updateDisplay() {
     const displayElement = document.querySelector(".display"); 
     displayElement.value = currentDisplay;
}

equal.addEventListener('click', function(){      
    try {
    const result = eval(currentDisplay);
    currentDisplay = result.toString();
    console.log(currentDisplay);
    updateDisplay();
    } catch (error) {
    currentDisplay = "\nError";
    updateDisplay();
    }
    resultDisplay=true;
});

dlt.addEventListener('click', function(){   
       
currentDisplay = currentDisplay.slice(0, -1);
if (currentDisplay == "") {
    currentDisplay = "0";
}
popup_err_text.setAttribute("style", "display:none;");
var elements = document.getElementsByClassName("btn");
           
for (var i = 0, len = elements.length; i < len; i++) {
    //console.log(elements[i]);
    elements[i].disabled = false;
}

updateDisplay(); 
});

clear.addEventListener('click', function(){
currentDisplay = "0";
btn_click = 0;
popup_err_text.setAttribute("style", "display:none;");

var elements = document.getElementsByClassName("btn");
           
for (var i = 0, len = elements.length; i < len; i++) {
    //console.log(elements[i]);
    elements[i].disabled = false;
}
updateDisplay();
});

