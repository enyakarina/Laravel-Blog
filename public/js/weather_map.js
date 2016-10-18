    (function(){
        "use strict"
        $(document).ready(function(){

            $("#button1").click(function(){
                var userLat = $("#inputLat").val();
                var userLng = $("#inputLong").val();
                console.log(userLat);
                console.log(userLng);
            });

            $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
                APPID: "7a549401f05711a1dca8d76a815a5963",
                //q: "San Antonio, TX",
                lat: 29.423017,
                lon: -98.48527,
                units: "imperial",
                cnt: 3 
            }).done(function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++); {
                    var day1 = $("#day1");
                    day1.append("<p>" + "Max Temp: " + data.list[0].temp.max + "</p>");  
                    day1.append("<p>" + "Min Temp: " + data.list[0].temp.min + "</p>");
                    day1.append("<p>" + "Condition: " + data.list[0].weather[0].description + "</p>");
                    day1.append("<p>" + "Humidity: " + data.list[0].humidity + "</p>");
                    day1.append("<p>" + "Wind: " + data.list[0].speed + "</p>");
                    day1.append("<p>" + "Pressure: " + data.list[0].pressure + "</p>");

                    var day2 = $("#day2");
                    day2.append("<p>" + "Max Temp: " + data.list[1].temp.max + "</p>");
                    day2.append("<p>" + "Min Temp: " + data.list[1].temp.min + "</p>");
                    day2.append("<p>" + "Condition: " + data.list[1].weather[0].description + "</p>");
                    day2.append("<p>" + "Humidity: " + data.list[1].humidity + "</p>");
                    day2.append("<p>" + "Wind: " + data.list[1].speed + "</p>");
                    day2.append("<p>" + "Pressure: " + data.list[1].pressure + "</p>");

                    var day3 = $("#day3");
                    day3.append("<p>" + "Max Temp: " + data.list[2].temp.max + "</p>");
                    day3.append("<p>" + "Min Temp: " + data.list[2].temp.min + "</p>");
                    day3.append("<p>" + "Condition: " + data.list[2].weather[0].description + "</p>");
                    day3.append("<p>" + "Humidity: " + data.list[2].humidity + "</p>");
                    day3.append("<p>" + "Wind: " + data.list[2].speed + "</p>");
                    day3.append("<p>" + "Pressure: " + data.list[2].pressure + "</p>");
                }
            });

            function initialize(){

                var mapOptions = {
                    zoom: 10,
                    center: {
                        lat: 29.423017,
                        lng: -98.48527
                    },
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                    /*var marker = new google.maps.Marker({
                        position: {
                            lat: 29.423017,
                            lng: -98.48527
                            },
                        map: map,
                        draggable: true
                    });*/
            }
        });
    })();
