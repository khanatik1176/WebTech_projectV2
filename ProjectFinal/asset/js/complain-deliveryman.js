function viewData()
{
let com_name = document.getElementById('Complain-name').value.trim();

    if(com_name === '')
    {
    hide_search();
    return;
    }


    let ajax = new XMLHttpRequest();

    ajax.open('post','http://localhost/FinalProject2/controller/viewCom_check.php',true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send('uname='+com_name);
    ajax.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200)
        {
            
            console.log(ajax.responseText);

            handle_result(ajax.responseText);


        }


    }

}


function handle_result(result) {
    //let search_name = document.getElementById('Search').value;
    let result_divc = document.querySelector(".result-divc");
    let obj = JSON.parse(result);
    let table = "<table class = 'Complain-table'><tr class = 'Complain-row'><td class = 'Complain-header'>Deliveryman Name</td><td class = 'Complain-header'>Complains</td></tr>";

    for (let i = obj.length - 1; i >= 0; i--) {
        table += "<tr class = 'Complain-row'><td class = 'Complain data'>" + obj[i].ReviewerName + "</td><td class = 'Complain data'>" + obj[i].Reviews + "</td></tr>";
    }

    table += "</table>";
    result_divc.innerHTML = table;

    if(obj.length> 0)
    {
    active_search();
    }

    else
    {
        hide_search();
    }
    
}

function active_search()
{
    let result_div = document.querySelector(".result-divc");
    result_div.classList.remove("hide");
}

function hide_search()
{
    let result_div = document.querySelector(".result-divc");
    result_div.classList.add("hide");
}



