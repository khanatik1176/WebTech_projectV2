function isValidEmail() {
    let email = document.getElementById('email').value;
    let specialcharacter = email.indexOf('@');
    let dotoperator = email.lastIndexOf('.');
    let password = document.getElementById('password').value;

    if (email.length === 0) 
    {
        document.getElementById('EmailError').innerHTML = "Email cannot be empty";
        return false;
    } 
    else if (specialcharacter === -1 || specialcharacter === 0 || dotoperator === -1 || dotoperator <= specialcharacter+1 || dotoperator === email.length -1) 
    {
        document.getElementById('EmailError').innerHTML = "Invalid Email Address";
        return false;
    } 
    else 
    {
        document.getElementById('EmailError').innerHTML = "";
        return true;
    }
}

function isValidPassword()
{
    let password = document.getElementById('password').value;

    if(password.length === 0)
    {
        document.getElementById('PassError').innerHTML = "Password Cannot be Empty";
        return false;
    }
    
    else if (password.length <8)
    {
        document.getElementById('PassError').innerHTML = "Password Needs to be greater than 8";
        return false;
    }

    else
    {
        document.getElementById('PassError').innerHTML = "";
        return true;
    }
}

function isValidRePassword()
{
    let password = document.getElementById('password').value;
    let repassword = document.getElementById('repassword').value;

    if (password.length <8)
    {
        document.getElementById('RePassError').innerHTML = "RePassword Needs to be greater than 8";
        return false;
    }

    else if (password != repassword)
    {
        document.getElementById('RePassError').innerHTML = "Password Mismatched! Try again";
        return false;
    }

    else
    {
        document.getElementById('RePassError').innerHTML = "";
        return true;
    }
}

function IsvalidForm()
{


    if(isValidEmail() === false || isValidPassword() === false || isValidRePassword() == false)
    {
        return false;
    }

    else
    {
        
        return true;
    }


}