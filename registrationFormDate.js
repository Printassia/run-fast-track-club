const todayDate = new Date();
// Day Of The Week(0-6)
let dayOfWeek = todayDate.getDay();
// Month(0-11)
let month = todayDate.getMonth();
// Date(1-31)
let dateOfMonth = todayDate.getDate();
// Year(YYYY)
let year = todayDate.getFullYear();

function weekdays(){
    switch(dayOfWeek){
        case 0: dayOfWeek = "Sunday"; break;
        case 1: dayOfWeek = "Monday"; break;
        case 2: dayOfWeek = "Tuesday"; break;
        case 3: dayOfWeek = "Wednesday"; break;
        case 4: dayOfWeek = "Thursday"; break;
        case 5: dayOfWeek = "Friday"; break;
        case 6: dayOfWeek = "Saturday"; 
    }
}

function calendarMonths(){
    switch(month){
        case 0: month = "Jan"; break;
        case 1: month = "Feb"; break;
        case 2: month = "Mar"; break;
        case 3: month = "Apr"; break;
        case 4: month = "May"; break;
        case 5: month = "Jun"; break;
        case 6: month = "Jul"; break;
        case 7: month = "Aug"; break;
        case 8: month = "Sept"; break;
        case 9: month = "Oct"; break;
        case 10: month = "Nov"; break;
        case 11: month = "Dec"; break;

    }
}

weekdays();
calendarMonths();

let output =  dayOfWeek + " " + month + " " + dateOfMonth + " " + year;
document.getElementById("date").innerHTML = output;