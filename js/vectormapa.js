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