<!DOCTYPE html>
<html>
<head>
    <title>Kharkiv</title>
    <link rel="stylesheet"      href="{{  URL::asset('css/css.css')  }}">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="background">
        <div class="Circle1"></div>
        <div class="Circle2"></div>
        <div class="Circle3"></div>
        <div class="content">
            <h1 class="Condition"><i class="material-icons sun">  </i> {{  $response ['data']['icon'] }}</h1>
            <h1 class="Temp">{{  $response ['data']['temperature'] }}<span id="F">&#8457;</span></h1>
            <h1 class="Time">{{  date("h:i")  }}</h1>
            <h1 class="Location"><i class="material-icons locationIcon">place</i> Kharkiv</h1>
            <h1 class="wind"><i class="material-icons sun"> air </i> {{  $response ['data']['windSpeed'] }}  </h1>
        </div>
    </div>
</body>

