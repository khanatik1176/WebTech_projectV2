function checkAlphabet(alphabet)
        {
            return ((alphabet < 'a' || alphabet > 'z') && (alphabet <'A' || alphabet > 'Z'));  
        }   

        function isValidParcelName() 
        {
            let parcelName = document.getElementById('pname').value;
        
            if (parcelName.length === 0) 
            {
                document.getElementById('NameError').innerHTML = "Name cannot be empty";
                return false;
            } 
        
            else if (checkAlphabet(parcelName))
            {
                document.getElementById('NameError').innerHTML = "Name need to be alphabet";
                return false;
            }
            else if (parcelName.length < 4) 
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
        
        function isValidRecName() 
        {
            let name = document.getElementById('rname').value;
        
            if (name.length === 0) 
            {
                document.getElementById('NameError2').innerHTML = "Name cannot be empty";
                return false;
            } 
        
            else if (checkAlphabet(name))
            {
                document.getElementById('NameError2').innerHTML = "Name need to be alphabet";
                return false;
            }
            else if (name.length < 4) 
            {
                document.getElementById('NameError2').innerHTML = "Name must be greater than 3 characters";
                return false;
            } 
            else 
            {
                document.getElementById('NameError2').innerHTML = "";
                return true;
            } 
        }



function isValidPhoneNumber()
        {
            let phoneNumber = document.getElementById('rnumber').value;

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
            else if(phoneNumber.length === 11)
            {
                document.getElementById('ErrorPhone').innerHTML = "";
                return true;
            }
        }