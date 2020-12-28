// Declaring Variable
let dispValue = 0;
let preValue = 0;
let result =0;
opt = '+';
let reset = 1;


// To Clear screen 
function clearBox(){
    dispValue = '';
    document.getElementById('display').value = dispValue;
}

// To get Numeric Input
function calculate (operand) {
    if (reset == 0){
        dispValue = 0;
        preValue = 0;
        opt = '+';
        result = 0;
        reset = 1;
    }
    dispValue += operand;
    document.getElementById('display').value = dispValue;
}

// To perform operator on numeric value;
function operator (operator) {
    reset=1
    switch (opt) {
        case '+':
            result = (parseInt(preValue) + parseInt(dispValue));
            break;

        case '-':
            result = (parseInt(preValue) - parseInt(dispValue));
            break;

        case '*':
            result = (parseInt(preValue) * parseInt(dispValue));
            break;

        case '/':
            result = (parseInt(preValue) / parseInt(dispValue));
            break;
    }

    // Swaping values
    dispValue = '';
    preValue = result;
    opt = operator;



    //  Getting Value after Result
   if (opt == '='){
       
        switch (opt) {
            case '+':
                result = parseInt(parseInt(preValue) + parseInt(dispValue));
                break;
        
            case '-':
                result = parseInt(parseInt(preValue) - parseInt(dispValue));
                break;

            case '*':
                result = parseInt(parseInt(preValue) * parseInt(dispValue));
                break;

            case '/':
                result = parseInt(parseInt(preValue) / parseInt(dispValue));
                break;
        }
        document.getElementById('display').value = result;
        reset = 0;
    }
    else{
        x=result+operator;
        document.getElementById('display').value = x;
    }

}
document.getElementById('h1').innerHTML = "Calculator Task";