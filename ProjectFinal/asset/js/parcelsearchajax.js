function parcel_Track()
{


    let parcel_id = document.getElementById('track').value.trim();

    if(parcel_id === '')
    {
        hide_search();
        return;
    }


    let ajax = new XMLHttpRequest();

    ajax.open('post','../controller/ParcelSearchController.php',true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send('pars='+parcel_id);
    ajax.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200)
        {

            handle_result(ajax.responseText);
        }


    }

}


function handle_result(result) {

    let result_divt = document.querySelector(".result-divt");
    let obj = JSON.parse(result);
    let table = "<table class = 'track-table'><tr class = 'track-row'><td class = 'track-header'>Parcel Name</td><td class = 'track-header'>Parcel type</td> <td class = 'track-header'>Parcel Status</td></tr>";

    for (let i = obj.length - 1; i >= 0; i--) {
        table += "<tr class = 'track-row'><td class = 'track data'>" + obj[i].parcelName + "</td><td class = 'track data'>" + obj[i].parcelType + "</td><td class = 'track data'>" + obj[i].ParcelStatus + "</td></tr>";
    }

    table += "</table>";
    result_divt.innerHTML = table;
    
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
    let result_div = document.querySelector(".result-divt");
    result_div.classList.remove("hide");
}

function hide_search()
{
    let result_div = document.querySelector(".result-divt");
    result_div.classList.add("hide");
}
