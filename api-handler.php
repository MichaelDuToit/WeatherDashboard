<?php
    $api_key = file_get_contents('key.php');
    $json_wunderunderground = file_get_contents("http://api.wunderground.com/api/".$api_key."/geolookup/conditions/forecast/hourly/forecast10day/astronomy/q/New_Zealand/Upper_Hutt.json");
    $response = json_decode($json_wunderunderground);

    $location = $response->{'location'}->{'city'};
    $temp_c = $response->{'current_observation'}->{'temp_c'};
    $summary = $response->{'current_observation'}->{'weather'};
    $humidity = $response->{'current_observation'}->{'relative_humidity'};
    $heat_index_string = $response->{'current_observation'}->{'heat_index_string'};
    $wind_direction = $response->{'current_observation'}->{'wind_dir'};
    $wind_degree = $response->{'current_observation'}->{'wind_degrees'};
    $wind_kph = $response->{'current_observation'}->{'wind_kph'};
    $pressure_millibars = $response->{'current_observation'}->{'pressure_mb'};
    $pressure_trend = $response->{'current_observation'}->{'pressure_trend'};
    $dewpoint = $response->{'current_observation'}->{'dewpoint_c'};
    $heat_index_c = $response->{'current_observation'}->{'heat_index_c'};
    $windchill_c = $response->{'current_observation'}->{'windchill_c'};
    $feelslike_c = $response->{'current_observation'}->{'feelslike_c'};
    $visibility = $response->{'current_observation'}->{'visibility_km'};
    $solarradiation = $response->{'current_observation'}->{'solarradiation'};
    $uv = $response->{'current_observation'}->{'UV'};
    $cloudcover = $response->{'hourly_forecast'}[0]->{'sky'};
    $precip_1hr_metric = $response->{'current_observation'}->{'precip_1hr_metric'};
    $sunrise_hour = $response->{'moon_phase'}->{'sunrise'}->{'hour'};
    $sunrise_min = $response->{'moon_phase'}->{'sunrise'}->{'minute'};
    $sunset_hour = $response->{'moon_phase'}->{'sunset'}->{'hour'};
    $sunset_min = $response->{'moon_phase'}->{'sunset'}->{'minute'};
    $moon = $response->{'moon_phase'}->{'percentIlluminated'};
    $max_temp = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[0]->{'high'}->{'celsius'};
    $min_temp = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[0]->{'low'}->{'celsius'};

    $forecast = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[0]->{'fcttext_metric'};

    //Three Day Forecast
    $forecast_1day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[1]->{'date'}->{'day'};
    $forecast_1day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[1]->{'date'}->{'monthname'};
    $forecast_1day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[1]->{'date'}->{'weekday'};
    $forecast_1day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[1]->{'high'}->{'celsius'};
    $forecast_1day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[1]->{'low'}->{'celsius'};
    $forecast_1day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[2]->{'fcttext_metric'};

    $forecast_2day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[2]->{'date'}->{'day'};
    $forecast_2day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[2]->{'date'}->{'monthname'};
    $forecast_2day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[2]->{'date'}->{'weekday'};
    $forecast_2day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[2]->{'high'}->{'celsius'};
    $forecast_2day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[2]->{'low'}->{'celsius'};
    $forecast_2day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[4]->{'fcttext_metric'};

    $forecast_3day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[3]->{'date'}->{'day'};
    $forecast_3day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[3]->{'date'}->{'monthname'};
    $forecast_3day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[3]->{'date'}->{'weekday'};
    $forecast_3day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[3]->{'high'}->{'celsius'};
    $forecast_3day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[3]->{'low'}->{'celsius'};
    $forecast_3day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[6]->{'fcttext_metric'};


    $forecast_4day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[4]->{'date'}->{'day'};
    $forecast_4day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[4]->{'date'}->{'monthname'};
    $forecast_4day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[4]->{'date'}->{'weekday'};
    $forecast_4day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[4]->{'high'}->{'celsius'};
    $forecast_4day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[4]->{'low'}->{'celsius'};
    $forecast_4day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[8]->{'fcttext_metric'};

    $forecast_5day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[5]->{'date'}->{'day'};
    $forecast_5day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[5]->{'date'}->{'monthname'};
    $forecast_5day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[5]->{'date'}->{'weekday'};
    $forecast_5day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[5]->{'high'}->{'celsius'};
    $forecast_5day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[5]->{'low'}->{'celsius'};
    $forecast_5day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[10]->{'fcttext_metric'};

    $forecast_6day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[6]->{'date'}->{'day'};
    $forecast_6day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[6]->{'date'}->{'monthname'};
    $forecast_6day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[6]->{'date'}->{'weekday'};
    $forecast_6day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[6]->{'high'}->{'celsius'};
    $forecast_6day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[6]->{'low'}->{'celsius'};
    $forecast_6day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[12]->{'fcttext_metric'};

    $forecast_7day_day = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[7]->{'date'}->{'day'};
    $forecast_7day_month = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[7]->{'date'}->{'monthname'};
    $forecast_7day_dayname = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[7]->{'date'}->{'weekday'};
    $forecast_7day_tempHigh = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[7]->{'high'}->{'celsius'};
    $forecast_7day_tempLow = $response->{'forecast'}->{'simpleforecast'}->{'forecastday'}[7]->{'low'}->{'celsius'};
    $forecast_7day_conditions = $response->{'forecast'}->{'txt_forecast'}->{'forecastday'}[14]->{'fcttext_metric'};

    //Time zone Function
    function timezone($city, $cityName){
        echo '<div id="'.$city.'"><span id="date"></span><br/><span id="time"></span><br/>'.$cityName .'</div>';
        };

?>
