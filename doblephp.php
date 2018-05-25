<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="js/jquery-jvectormap-us-aea.js"></script>
    <link rel="stylesheet" href="css/jquery-jvectormap-2.0.3.css">
    <title>Colorear mapa</title>
</head>
<body>
    <div id="usa-map" style="width: 640px; height: 360px"></div>
    <footer> Derechos reservados &copy; Innovative Developers</footer>
    <script>
        $(function(){
            var gdpData = {
                            "US-PA": 1,
                            "US-NH": 1,
                            "US-VT": 1,
                        };
            var gdpData2 = {
                            "US-NJ": 1,
                            "US-CA": 1,
                            "US-SC": 1,
                        };
            var gdpData3 = {
                            "US-WI": 1,
                            "US-OR": 1,
                            "US-KY": 1,
                        };
            var gdpData4 = {
                            "US-ME": 1,
                            "US-OH": 1,
                            "US-OK": 1,
                        };        
            $('#usa-map').vectorMap({
                map: 'us_aea',
                backgroundColor:['#0288D1'],
                series: {
                    regions: [
                        {
                            values: gdpData,
                            scale: ['#FF0000'],
                        },
                        {
                            values: gdpData2,
                            scale: ['#00FF00'],
                        },
                        {
                            values: gdpData3,
                            scale: ['#0000FF'],
                        },
                        {
                            values: gdpData4,
                            scale: ['#FBC02D']
                        }
                    ]
                }
            });
        });
    </script>
</body>
</html>