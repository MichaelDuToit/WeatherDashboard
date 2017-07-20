<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-complatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>WeatherAPI Dashboard</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>   
    <?php 
        require('api-handler.php');
    ?>
    <div class="sidebars">
        <?php timezone("losAngeles", "Los Angeles");
              timezone("newYork", "New York");
              timezone("london", "London");
              ?>
    </div>
    <div class="local-time" id="local-time">
    </div>
    <div class="sidebars">
        <?php 
            timezone("berlin", "Berlin"); 
            timezone("capeTown", "Cape Town");
            timezone("melbourne", "Melbourne");
        ?>
    </div>
</header>
<div class="column col-one">
    <div class="full-box">
        <em>Today</em><br>
        <?php echo $forecast ?>
    </div>
    <div class="small-box">Feel's Like<br/>
        <?php echo $feelslike_c ?>&deg;C
    </div>
    <div class="small-box">Humidity<br/>
        <?php echo $humidity ?>
    </div>
    <div class="small-box">Max Temp<br/>
        <?php echo $max_temp ?>&deg;C
    </div>
    <div class="small-box">Min Temp<br/>
        <?php echo $min_temp ?>&deg;C
    </div>
    <div class="small-box">Pressure<br/>
        <?php echo $pressure_millibars ?> mb
    </div>
    <div class="small-box">Dew Point<br/>
        <?php echo $dewpoint ?>&deg;C
    </div>
    <div class="small-box">Sunrise<br/>
        <?php echo $sunrise_hour ?>:<?php echo $sunrise_min ?>
    </div>
    <div class="small-box">Sunset<br/>
        <?php echo $sunset_hour ?>:<?php echo $sunset_min ?>
    </div>
    <div class="small-box" id="visibility" data-val=<?php echo '"'.$visibility.'"'?>>Visibility<br/>
        <?php echo $visibility ?> km
    </div>
    <div class="small-box">Cloud Cover<br/>
        <?php echo $cloudcover ?>%
    </div>
    <div class="small-box" id="solarRad" data-val=<?php echo '"'.$solarradiation.'"'?>>Solar Radiation<br/>
        <?php echo $solarradiation ?> W/m<sup>2</sup>
    </div>
    <div id="uv" class="small-box" data-val=<?php echo '"'.$uv.'"'?>>UV<br/>
        <?php echo $uv ?>
    </div> 
    <div class="small-box">Pressure Trend<br/>
        <?php echo $pressure_trend ?>
    </div>
    <div class="small-box">Wind Chill<br/>
        <?php echo $windchill_c ?>
    </div>  
    <div class="small-box">Heat Index<br/>
        <?php echo $heat_index_string ?>
    </div> 
    <div class="small-box">Precipitation (1hr)<br/>
        <?php echo $precip_1hr_metric ?>mm
    </div> 
</div>
<div class="column col-two">
    <div class="wrapper">
        <div class="dial">
            <h1><?php echo $temp_c ?>&deg;C</h1>
        </div>
    </div>
    <div class="small">
        <div class="small-dial moon" id="moon" data-value=<?php echo'"'.$moon.'"' ?>>Moon
            <?php echo $moon ?>%
        </div>
        <div class="" id="wind">
                <div id="wind_img" data-val=<?php echo '"'.$wind_degree.'"'?>></div>
                <div class="wind">
                    <?php echo $wind_kph ?>/kph<br/>
                    <?php echo $wind_direction ?>
                </div>
        </div>
    </div>
</div>

<div class="column col-three">
    <article>
        <h2><?php echo $forecast_1day_dayname . ' ' . $forecast_1day_day . ' ' . $forecast_1day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_1day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_1day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_1day_conditions; ?>
        </div>
    </article>
    <hr/>
    <article>
        <h2><?php echo $forecast_2day_dayname . ' ' . $forecast_2day_day . ' ' . $forecast_2day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_2day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_2day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_2day_conditions; ?>
        </div>
    </article>
    <hr/>
    <article>
        <h2><?php echo $forecast_3day_dayname . ' ' . $forecast_3day_day . ' ' . $forecast_3day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_3day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_3day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_3day_conditions; ?>
        </div>
    </article>
    <hr/>
    <article>
        <h2><?php echo $forecast_4day_dayname . ' ' . $forecast_4day_day . ' ' . $forecast_4day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_4day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_4day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_4day_conditions; ?>
        </div>
    </article>
    <hr/>
    <article>
        <h2><?php echo $forecast_5day_dayname . ' ' . $forecast_5day_day . ' ' . $forecast_5day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_5day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_5day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_5day_conditions; ?>
        </div>
    </article>
    <hr/>
    <article>
        <h2><?php echo $forecast_6day_dayname . ' ' . $forecast_6day_day . ' ' . $forecast_6day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_6day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_6day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_6day_conditions; ?>
        </div>
    </article>
    <hr/>
    <article>
        <h2><?php echo $forecast_7day_dayname . ' ' . $forecast_7day_day . ' ' . $forecast_7day_month ?></h2>
        <div class="forecast_temp_container">
            <div class="left">
                High: <?php echo $forecast_7day_tempHigh ?>&deg;C
            </div>
            <div class="right">
                Low: <?php echo $forecast_7day_tempLow ?>&deg;C
            </div>
        </div>
        <div>
            <?php echo $forecast_7day_conditions; ?>
        </div>
    </article>
    <hr/>
</div>
<footer>
    <a href="credits.txt">Credit</a>
</footer>
<script src="moment.js"></script>
<script src="js.js"></script>    
</body>
</html>