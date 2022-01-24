
var donors_first_date;
var current_date;
var payment_day;

var orgs_ending_date;
var orgs_ending_day;
var orgs_ending_month;


orgs_ending_date = 25
orgs_ending_year = 2023
orgs_ending_month = 1;
date_init_for_first_time();
consecutive_dates();

function send_data(){
    orgs_ending_date = new Date(document.getElementById('date').value);
    orgs_ending_day = String(orgs_ending_date.getDate()).padStart(2, '0');
    orgs_ending_month = String(orgs_ending_date.getMonth() + 1).padStart(2, '0');
    orgs_ending_year = orgs_ending_date.getFullYear();
    
    console.log("month = "+orgs_ending_month);
}

function date_init_for_first_time(){
    var today = new Date();
    var day = String(today.getDate()).padStart(2, '0');
    var month = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var year = today.getFullYear();
    
    payment_day = day;
    first_date = day + '/' + month; //  25/01
    first_year = year;
}


function consecutive_dates(){
    var today = new Date();
    var day = String(today.getDate()).padStart(2, '0');
    var month = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var year = (today.getFullYear());

    if(year<=orgs_ending_year && month<=orgs_ending_month && day == payment_day){
        // call transfer function ;

        console.log("Transaction initiated");
    }else{
        console.log("Date Not reached");
    }
     
}
