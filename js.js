//Local Time Clock
setInterval(function localtime(){
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();
    var currentMinutesLeadZero = currentMinutes > 9 ? currentMinutes : '0' + currentMinutes;
    var currentSecondsLeadZero = currentSeconds > 9 ? currentSeconds : '0' + currentSeconds;
    var currentDate = currentTime.getDate();
    var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
    var currentDay = weekday[currentTime.getDay()];
    var actualmonth = ["Januray","February","March","April","May","June","July","August","September","October","November","December"];
    var currentMonth = actualmonth[currentTime.getMonth()];
    var localclock = '<div><span>Upper Hutt</span><h1>'+ currentHours + ":" + currentMinutesLeadZero + ":" + currentSecondsLeadZero + '</h1><span>' + currentDay + " " + currentDate + " " + currentMonth + " " + currentTime.getFullYear() + "</span></div>";
    document.getElementById("local-time").innerHTML = localclock;
}, 100);

//UV Bar Color
(function UVcolor(){
        var uv = document.getElementById('uv');
        var uvdata = uv.dataset.val
        var uv_val = parseFloat(uvdata).toFixed(2);
        if(uv_val >= 0 && uv_val <= 2.9){
            uv.className = "small-box uv-lvl1";
        }
        if(uv_val >= 3 && uv_val <= 5.9){
            uv.className = "small-box uv-lvl2";
        }
       if(uv_val >= 6 && uv_val <= 7.9){
            uv.className = "small-box uv-lvl3";
        }
        if(uv_val >= 8 && uv_val <= 10.9){
            uv.className = "small-box uv-lvl4";
        }
        if(uv_val >= 11){
            uv.className = "small-box uv-lvl5";
        }
});

//Moon Phase
(function moonPhase(){
     var moon = document.getElementById("moon");
     var moon_data = moon.dataset.value;
     if (moon_data <= 0){
         moon.style.backgroundImage = "url(img/new_moon.png)";
     }
     if (moon_data > 0 && moon_data < 48){
         moon.style.backgroundImage = "url(img/crescent_moon.png)";
     }
     if (moon_data > 48 && moon_data < 51){
         moon.style.backgroundImage = "url(img/quarter_moon.png)";
     }
     if (moon_data > 51 && moon_data < 99){
         moon.style.backgroundImage = "url(img/gibbous_moon.png)";
     }
     if (moon_data > 99){
         moon.style.backgroundImage = "url(img/full_moon.png)";
     }
})

//Visibility 
var visibility = document.getElementById("visibility");
var visibility_data = visibility.dataset.val;
var max_value = "10.0";
if (visibility_data == max_value){
    visibility.innerHTML = 'Visibility<br/>'+visibility_data + 'km +';
}

//Different Time Zones
function timeZoner(city, timezone){
    city = document.getElementById(city);
    var time = city.querySelector("#time");
    var date = city.querySelector("#date");
    var m = moment(new Date()).tz(timezone);
    time.innerHTML = m.format("HH:mm:ss");
    date.innerHTML = m.format("DD MMM YYYY");
}
setInterval(function(){
    timeZoner('newYork', 'America/Los_Angeles');
    timeZoner('losAngeles', 'America/New_York');
    timeZoner('london', 'Europe/London');
    timeZoner('berlin', 'Europe/Berlin');
    timeZoner('capeTown', 'Africa/Johannesburg');   
    timeZoner('melbourne', 'Australia/Melbourne');
}, 100);

//Wind Degree
var wind = document.getElementById("wind_img");
var wind_deg = wind.dataset.val;
wind.style.transform = "rotate("+wind_deg+"deg)";


//Solar Radiance
(function solarRadiation(){
    var solarRad = document.getElementById("solarRad");
    var solarRadValue = solarRad.dataset.val;
    var rad = (solarRadValue / 1000 * 24);
    if (rad <= 1000){
        solarRad.style.backgroundColor = "#256EC2";}
    if (rad >= 1000 && rad <= 1100){
        solarRad.style.backgroundColor = "#3D9ABE";}
    if (rad > 1100 && rad <= 1200){
        solarRad.style.backgroundColor = "#42C695";}
    if (rad > 1200 && rad <= 1300){
        solarRad.style.backgroundColor = "#5DD64B";}
    if (rad > 1300 && rad <= 1400){
        solarRad.style.backgroundColor = "#AEE34E";}
    if (rad > 1400 && rad <= 1500){
        solarRad.style.backgroundColor = "#DDEC53";}
    if (rad > 1500 && rad <= 1600){
        solarRad.style.backgroundColor = "#F8EE49";}
    if (rad > 1600 && rad <= 1700){
        solarRad.style.backgroundColor = "#F6D53A";}
    if (rad > 1700 && rad <= 1800){
        solarRad.style.backgroundColor = "#F5B52D";}
    if (rad > 1800 && rad <= 1900){
        solarRad.style.backgroundColor = "#EE8913";}
    if (rad > 1900 && rad <= 2000){
        solarRad.style.backgroundColor = "#E16310";}
    if (rad > 2000 && rad <= 2100){
        solarRad.style.backgroundColor = "#CB4707";}
    if (rad > 2100 && rad <= 2200){
        solarRad.style.backgroundColor = "#B61904";}
    if (rad > 2000){
        solarRad.style.backgroundColor = "#9B0000";}
});