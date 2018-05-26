$(function(){

    /* Formato */
    let rojos = {};
    rojos["US-PA"] = 1;

    let verdes = {};
    verdes["US-CA"] = 1;
    verdes["US-SC"] = 1;

    let azules = {};
    azules["US-ME"] = 1;
    azules["US-NJ"] = 1;

    let amarillos = {};
    amarillos["US-OH"] = 1,
    amarillos["US-OK"] = 1;  
                
                
    /* for(tamaño de el array){
        if(variable[i][1] == 1){
            rojos
        }else{
            if(variable[i][1] == 2){
                verdes
            }else{
                if(variable[i][1]==3){
                    azules
                }else{
                    amarillos
                }
            }
        }
    } */
    $('#usa-map').vectorMap({
        map: 'us_aea',
        backgroundColor:['#0288D1'],
        series: {
            regions: [
                {
                    values: rojos,
                    scale: ['#FF0000'],
                },
                {
                    values: verdes,
                    scale: ['#00FF00'],
                },
                {
                    values: azules,
                    scale: ['#0000FF'],
                },
                {
                    values: amarillos,
                    scale: ['#FBC02D']
                }
            ]
        }
    });
});