<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/weather_map.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">                                 
</head>
<body> 
    <div id="wrapper" class="container-fluid">

        <div class="page-header">
            <h1>WEATHER MAGIC <span>ϟ</span></h1>
        </div>
        
            <p class="description">Drag and click the wand below, and magic from beyond will show you that place's 3 day weather. And no, there's no science or logic or anything else involved. It's magic.</p>

        <div class="container col-lg-12 col-xs-12 weather-boxes">
        <h2></h2>
            <div id="day1" class="col-lg-4 col-md-4 col-xs-12"></div>
            <div id="day2" class="col-lg-4 col-md-4 col-xs-12"></div>
            <div id="day3" class="col-lg-4 col-md-4 col-xs-12"></div>
        </div>

        <div class="form1">
            <form id="search-form">
                <input type="text" id="latLngCity" placeholder="Enter a city" class="search-city"> <br><br>
                <button class="btn">Submit</button>
            </form>
        </div>
      
        <div id="map-canvas"></div>

        <div id="latlong">
            <p>Latitude: <input type="text" id="latbox" name="lat" ></p>
            <p>Longitude: <input type="text" id="lngbox" name="lng" ></p>
        </div> 
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIIhTF6IvCIBMBYMkgcy7MAgivggBnzwU"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/weather_map.js"></script>
</body>
</html>