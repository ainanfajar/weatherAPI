<?php
$api_url = 'https://api.openweathermap.org/data/2.5/weather?lat=-6.1780600&lon=106.629997&appid=690e90fdd92a469000c38e6c97e7ee99&units=metric';

$weather_data = json_decode(file_get_contents($api_url), true);

// echo '<pre>';
// print_r($weather_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <title>Weather App</title>

    <style>
        html {
            background: url(background.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;


        }

        body {

            background: none;

        }

        .container {

            text-align: center;
            margin-top: 100px;
            width: 450px;

        }

        input {

            margin: 20px 0;

        }
    </style>
</head>

<body>
    <div class="container">

        <h1>What's The Weather In Tangerang?</h1>

        <div class="container">
            <div class="card" style="background-color: gray;">
                <div class="card-body" style="padding: 10px;">
                    <p class="card-title">
                        <?php print_r($weather_data['name']); ?>
                    </p>
                    <p class="card-text" style="text-align: left;">
                        Cuaca:
                        <?php print_r($weather_data['weather'][0]['main']); ?>
                        <?php $weather_icon = $weather_data['weather'][0]['icon'];
                        echo "<img src='http://openweathermap.org/img/wn/" . $weather_icon . "@2x.png'/>";
                        ?>
                    </p>
                    <p class="card-text" style="text-align: left;">
                        Temperatur:
                        <?php print_r($weather_data['main']['temp']); ?>
                    </p>
                    <p class="card-text" style="text-align: left;">
                        Temperatur min:
                        <?php print_r($weather_data['main']['temp_min']); ?>
                    </p>
                    <p class="card-text" style="text-align: left;">
                        Temperatur max:
                        <?php print_r($weather_data['main']['temp_max']); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>

</html>