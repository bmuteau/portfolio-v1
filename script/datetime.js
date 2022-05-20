function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    document.getElementById('time').innerHTML =
        h + ":" + m;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10
    return i;
}

startTime();

var m_names = ["Janvier", "Février", "Mars",
    "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
    "Octobre", "Novembre", "Decembre"
];

var d_names = ["Dimanche", "Lundi", "Mardi", "Mercredi",
    "Jeudi", "Vendredi", "Samedi"
];

var myDate = new Date();
myDate.setDate(myDate.getDate() + 7);
var curr_date = myDate.getDate();
var curr_month = myDate.getMonth();
var curr_day = myDate.getDay();
document.getElementById('date').innerHTML = d_names[curr_day] + " " + curr_date + " " + m_names[curr_month];