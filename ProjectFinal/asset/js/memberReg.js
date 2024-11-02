function checkAlphabet(alphabet)
{
    return ((alphabet < 'a' || alphabet > 'z') && (alphabet <'A' || alphabet > 'Z'));
}   

function isValidName() {
    let name = document.getElementById('uname').value;

    if (name.length === 0) 
    {
        document.getElementById('NameError').innerHTML = "Name cannot be empty";
        return false;
    } 

    else if (checkAlphabet(name))
    {
        document.getElementById('NameError').innerHTML = "Name need to be alphabet";
        return false;
    }

    else if (name.length < 4) 
    {
        document.getElementById('NameError').innerHTML = "Name must be greater than 3 characters";
        return false;
    } 
    else 
    {
        document.getElementById('NameError').innerHTML = "";
        return true;
    }
    
}

function isValidEmail() {
    let email = document.getElementById('uemail').value;
    let specialcharacter = email.indexOf('@');
    let dotoperator = email.lastIndexOf('.');
    let password = document.getElementById('upassword').value;

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


function isValidPhoneNumber()
{

    let phoneNumber = document.getElementById('uphone').value;

    if (phoneNumber.length === 0) 
    {
        document.getElementById('ErrorPhone').innerHTML = "Phone Number cannot be empty";
        return false;
    } 
    else if (phoneNumber.length <11 || phoneNumber.length >11) 
    {
        document.getElementById('ErrorPhone').innerHTML = "Invalid Phone Number";
        return false;
    } 
    else if( phoneNumber.length === 11)
    {
        document.getElementById('ErrorPhone').innerHTML = "";
        return true;
    }
}

function isValidNIDNumber()
{
    let NIDNumber = document.getElementById('unid').value;
    if (NIDNumber.length === 0) 
    {
        document.getElementById('ErrorNID').innerHTML = "NID Number cannot be empty";
        return false;
    } 
    else if (NIDNumber.length <10 || NIDNumber.length >10) 
    {
        document.getElementById('ErrorNID').innerHTML = "Invalid NID Number";
        return false;
    } 
    else if(NIDNumber.length === 10)
    {
        document.getElementById('ErrorNID').innerHTML = "";
        return true;
    }
}

function isValidPassword()
{
    let password = document.getElementById('upassword').value;

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
    let password = document.getElementById('upassword').value;
    let repassword = document.getElementById('urepassword').value;

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

function isValidAddress()
{
    let Address = document.getElementById('uaddress').value;

    if(Address.length == 0)
    {
        document.getElementById('ErrorAddress').innerHTML = "This section can not be empty";
        return false;
    }
    else if(Address.length <21)
    {
        document.getElementById('ErrorAddress').innerHTML = "Address limit is 20";
        return false;
    }
    else
    {
        document.getElementById('ErrorAddress').innerHTML = "";
        return true;
    } 
}

function IsvalidForm()
{
    if(isValidName() === false|| isValidEmail() === false || isValidNIDNumber() === false || isValidPhoneNumber() === false || isValidPassword() === false || isValidRePassword() === false)
    {
        return false;
    }

    else
    {
        
        return true;
    }
}
