function isValidUser()
{
    let password = document.getElementById('uid').value;



    if(password.length === 0)
    {
        document.getElementById('UserError').innerHTML = "User ID Cannot be Empty";
        return false;
    }
    
    else if (password.length < 4)
    {
        document.getElementById('UserError').innerHTML = "User ID Needs to be greater than 3";
        return false;
    }

    else
    {
        document.getElementById('UserError').innerHTML = "";
        return true;
    }
}




function IsvalidForm()
{


    if(isValidUser() === false)
    {
        return false;
    }

    else
    {
        
        return true;
    }


}