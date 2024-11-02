function search()
{

    let search_name = document.getElementById('Search').value.trim();

    if(search_name === '')
    {
        hide_search();
        return;
    }
    let ajax = new XMLHttpRequest();

    ajax.open('post','../controller/Search-controller.php',true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send('uname='+search_name);
    ajax.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200)
        {

            handle_result(ajax.responseText);
        }
    }

}


function handle_result(result) {
    let search_name = document.getElementById('Search').value;
    let result_div = document.querySelector(".result-div");
    let obj = JSON.parse(result);
    let table = "<table class = 'search-table'><tr class = 'search-row'><td class = 'search-header'>User Name</td><td class = 'search-header'>User Email</td> <td class = 'search-header'>User Password</td><td class = 'search-header'>User Role</td></tr>";

    for (let i = obj.length - 1; i >= 0; i--) {
        table += "<tr class = 'search-row'><td class = 'search data'>" + obj[i].UserName + "</td><td class = 'search data'>" + obj[i].UserEmail + "</td><td class = 'search data'>" + obj[i].UserPassword + "</td><td class = 'search data'>" + obj[i].UserRole + "</td></tr>";
    }

    table += "</table>";
    result_div.innerHTML = table;
    
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
    let result_div = document.querySelector(".result-div");
    result_div.classList.remove("hide");
}

function hide_search()
{
    let result_div = document.querySelector(".result-div");
    result_div.classList.add("hide");
}



