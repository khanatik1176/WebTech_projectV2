
function isValidComplain()
{
    let Address = document.getElementById('comarea').value;

    if(Address.length == 0)
    {
        document.getElementById('ErrorAddress').innerHTML = "This section can not be empty";
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


    if(isValidComplain() == false)
    {
        return false;
    }

    else
    {
        
        return true;
    }


}