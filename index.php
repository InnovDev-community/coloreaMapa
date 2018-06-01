<?php
    require_once('prologQuery.php');
    $arregloCodigos = $arregloCodigosUSA = prologQuery('usa');
    $arregloCodigosSA = prologQuery('sa');
    $arregloCodigosGER = prologQuery('germany');
    $arregloCodigosPO = prologQuery('poland');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InnovDev | Teorema de los 4 colores</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-jvectormap-2.0.3.min.js"></script>
    
    <!-- Mapas-->
    <script src="js/jquery-jvectormap-us-aea.js"></script>
    <script src="js/jquery-jvectormap-de-mill.js"></script>
    <script src="js/jquery-jvectormap-south_america-mill.js"></script>
    <script src="js/jquery-jvectormap-pl-mill.js"></script>

    <link rel="stylesheet" href="css/jquery-jvectormap-2.0.3.css">    
</head>
<body>
    <main>
        <header class="header">
            <img src="logoID.png" alt="Innovative Developers - Logotipo">
            <h1>#Teorema4Colores</h1>
        </header>
        <section class="seccion">
            <article class="seccion__izq">
                <div class="mapas">
                    <div class="map" id="usaMap"></div>
                    <div class="map" id="saMap"></div>
                    <div class="map" id="gerMap"></div>
                    <div class="map" id="polMap"></div>
                </div>
                </div>
                <a class="link-github icon-github" target="_blank" href="https://github.com/InnovDev-community/coloreaMapa">Repositorio en GitHub</a>
            </article>
            <article class="seccion__der">
                <h2 class="app__title">$ DESCRIPCION</h2>
                <p class="app__descripcion">El teorema de los cuatro colores consiste básicamente, en que cualquier mapa puede ser coloreado solamente con cuatro colores distintos de tal manera que dos regiones adyacentes (es decir, que tienen una frontera en común y no sólo un punto) no tengan el mismo color. 
                Aunque parece un problema no matemático, sin embargo lo es y su demostración no es nada sencilla, ha costado mucho esfuerzo y 125 años el conseguirlo.</p>
                <div class="app__funciones">
                    <ul class="mapa__lista">    
                        <a class="mapa__lista__item" href="appUsa">USA</a>
                        <a class="mapa__lista__item" href="appSouthAmerica">South America</a>
                        <a class="mapa__lista__item" href="appGermany">Germany</a>
                        <a class="mapa__lista__item" href="appPoland">Poland</a>
                    </ul>
                    <div class="mapa__contenidos">
                        <div id="appUsa" class="mapa__contenido">
                            <button class="btnMapa" id="btnBuscarSolucionUSA">Buscar solución USA</button>
                            <button class="btnMapa icon-refresh" id="btnClearMapaUSA">Clear</button>
                        </div>
                        <div id="appSouthAmerica" class="mapa__contenido">
                            <button class="btnMapa" id="btnBuscarSolucionSA">Buscar solución SA</button>
                            <button class="btnMapa icon-refresh" id="btnClearMapaSA">Clear</button>
                        </div>
                        <div id="appGermany" class="mapa__contenido">
                            <button class="btnMapa" id="btnBuscarSolucionGER">Buscar solución GER</button>
                            <button class="btnMapa icon-refresh" id="btnClearMapaGER">Clear</button>
                        </div>
                        <div id="appPoland" class="mapa__contenido">
                            <button class="btnMapa" id="btnBuscarSolucionPOL">Buscar solución POL</button>
                            <button class="btnMapa icon-refresh" id="btnClearMapaPOL">Clear</button>
                        </div>
                    </div>
                </div>
                <ul class="app__autores">
                    <li class="app__autores__item">Panana Rosales, <span>Andy Martín.</span></li>
                    <li class="app__autores__item">Valera Flores, <span>Cleiver.</span></li>
                </ul>
            </article>
        </section>
        <footer class="footer">
            <a class="link-facebook icon-facebook" target="_blank" href="https://www.facebook.com/innovdevelopers">Facebook</a>
            <div class="copyright">
                <span> &copy; 2018 Todos los derechos reservados | </span>
                <a target="_blank" href="http://innovdevelopers.com/">innovdevelopers.com</a>
            </div>
            <a class="link-youtube icon-youtube" target="_blank" href="https://www.youtube.com/channel/UCT6AMFzuC-G0U18k_25wmDQ?view_as=subscriber">YouTube</a>
        </footer>
    </main>

    <script type='text/javascript'>

        //Cargar todos los mapas y ocultarlos.
        loadMap("usa");
        loadMap("sa");
        loadMap("ger");
        loadMap("pol");

        //Ocultar todos los mapas
        $(".mapa__contenido").hide(); 

        //Activo el primer Mapa
        $(".mapa__lista__item:first-child").addClass("mapa__lista__item__active");
        $(".mapa__contenido:first-child").fadeIn(); 

        //Change mapas
        $(".mapa__lista__item").on("click",function(e){
            e.preventDefault();
            //Reinicio todo (Listas y Mapas)
            $(".mapa__lista__item").removeClass("mapa__lista__item__active");
            $(".mapa__contenido").hide();
            //
            $('#usaMap').hide(); $('#saMap').hide(); $('#gerMap').hide(); $('#polMap').hide();
            
            //ID
            let idMapa = $(this).attr("href");

            //Activar el mapa adecuado
            $("#"+idMapa).fadeIn();
            $(this).addClass("mapa__lista__item__active");
            
            switch(idMapa){
                case "appUsa":
                        $('#usaMap').fadeIn();
                    break;

                case "appSouthAmerica":
                        $('#saMap').fadeIn();
                    break;

                case "appGermany":
                        $('#gerMap').fadeIn();
                    break;

                case "appPoland":
                        $('#polMap').fadeIn();
                    break;
            }
            
        })

        //Mapa - Funciones
        //let mapObject = $('#map').vectorMap('get', 'mapObject');


        /* function pintar(mapObject){

        } */

        //Funciones de BUSCAR SOLUCION
        
        $('#btnBuscarSolucionUSA').click(function(){
            let mapObjectUSA = $('#usaMap').vectorMap('get', 'mapObject');

            let mapObject = mapObjectUSA;
            <?php
                $arregloCodigos = $arregloCodigosUSA;
            ?>

            let delayColor = 750;
            <?php
                /* Separacion de las regiones por su color
                    1 == rojo
                    2 == verde
                    3 == azul
                    4 == amarillo
                */
                for($i=0; $i<count($arregloCodigos);$i++){
                    $aux = explode(":",$arregloCodigos[$i]);
                
                    if($aux[1] == 1){
            ?>
                        setTimeout(() => {
                            mapObject.series.regions[0].setValues({"<?php echo $aux[0];?>":1});
                        }, delayColor);
            <?php
                    }else{
                        if($aux[1] == 2){
            ?>
                            setTimeout(() => {
                                    mapObject.series.regions[1].setValues({"<?php echo $aux[0];?>":1});
                            }, delayColor);
            <?php
                        }else{
                            if($aux[1] == 3){
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[2].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }else{
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[3].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }
                        }
                    }
            ?>
            
            delayColor += 750;

            <?php
                }
            ?>
            
            /* Color para Hawaii */
            setTimeout(() => {
                mapObjectUSA.series.regions[1].setValues({'US-HI':1});
            }, delayColor);
            
            delayColor += 750;

            /* Color para Alaska */
            setTimeout(() => {
                mapObjectUSA.series.regions[3].setValues({'US-AK':1});
            }, delayColor);

        });

        $('#btnBuscarSolucionSA').click(function(){
            let mapObjectSA = $('#saMap').vectorMap('get', 'mapObject');
            let mapObject = mapObjectSA;
            <?php
                $arregloCodigos = $arregloCodigosSA;
            ?>

            let delayColor = 750;
            <?php
                /* Separacion de las regiones por su color
                    1 == rojo
                    2 == verde
                    3 == azul
                    4 == amarillo
                */
                for($i=0; $i<count($arregloCodigos);$i++){
                    $aux = explode(":",$arregloCodigos[$i]);
                
                    if($aux[1] == 1){
            ?>
                        setTimeout(() => {
                            mapObject.series.regions[0].setValues({"<?php echo $aux[0];?>":1});
                        }, delayColor);
            <?php
                    }else{
                        if($aux[1] == 2){
            ?>
                            setTimeout(() => {
                                    mapObject.series.regions[1].setValues({"<?php echo $aux[0];?>":1});
                            }, delayColor);
            <?php
                        }else{
                            if($aux[1] == 3){
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[2].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }else{
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[3].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }
                        }
                    }
            ?>
            
            delayColor += 750;

            <?php
                }
            ?>
            
            /* Color para Islas Malvinas */
            setTimeout(() => {
                mapObjectSA.series.regions[1].setValues({'FK':1});
            }, delayColor);

        });

        $('#btnBuscarSolucionGER').click(function(){
            let mapObjectGER = $('#gerMap').vectorMap('get', 'mapObject');
            let mapObject = mapObjectGER;
            <?php
                $arregloCodigos = $arregloCodigosGER;
            ?>

            let delayColor = 750;
            <?php
                /* Separacion de las regiones por su color
                    1 == rojo
                    2 == verde
                    3 == azul
                    4 == amarillo
                */
                for($i=0; $i<count($arregloCodigos);$i++){
                    $aux = explode(":",$arregloCodigos[$i]);
                
                    if($aux[1] == 1){
            ?>
                        setTimeout(() => {
                            mapObject.series.regions[0].setValues({"<?php echo $aux[0];?>":1});
                        }, delayColor);
            <?php
                    }else{
                        if($aux[1] == 2){
            ?>
                            setTimeout(() => {
                                    mapObject.series.regions[1].setValues({"<?php echo $aux[0];?>":1});
                            }, delayColor);
            <?php
                        }else{
                            if($aux[1] == 3){
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[2].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }else{
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[3].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }
                        }
                    }
            ?>
            
            delayColor += 750;

            <?php
                }
            ?>

        });

        $('#btnBuscarSolucionPOL').click(function(){
            let mapObjectPO = $('#polMap').vectorMap('get', 'mapObject');
            let mapObject = mapObjectPO;
            <?php
                $arregloCodigos = $arregloCodigosPO;
            ?>

            let delayColor = 750;
            <?php
                /* Separacion de las regiones por su color
                    1 == rojo
                    2 == verde
                    3 == azul
                    4 == amarillo
                */
                for($i=0; $i<count($arregloCodigos);$i++){
                    $aux = explode(":",$arregloCodigos[$i]);
                
                    if($aux[1] == 1){
            ?>
                        setTimeout(() => {
                            mapObject.series.regions[0].setValues({"<?php echo $aux[0];?>":1});
                        }, delayColor);
            <?php
                    }else{
                        if($aux[1] == 2){
            ?>
                            setTimeout(() => {
                                    mapObject.series.regions[1].setValues({"<?php echo $aux[0];?>":1});
                            }, delayColor);
            <?php
                        }else{
                            if($aux[1] == 3){
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[2].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }else{
            ?>
                                setTimeout(() => {
                                    mapObject.series.regions[3].setValues({"<?php echo $aux[0];?>":1});
                                }, delayColor);
            <?php
                            }
                        }
                    }
            ?>
            
            delayColor += 750;

            <?php
                }
            ?>

        });

        //Funciones de LIMPIAR MAPAS    
        //gdpMapas - USA- SA - GER -POL
        gdpUSA={
            'US-VA': 1,
            'US-PA': 1,
            'US-TN': 1,
            'US-WV': 1,
            'US-NV': 1,
            'US-TX': 1,
            'US-NH': 1,
            'US-NY': 1,
            'US-HI': 1,
            'US-VT': 1,
            'US-NM': 1,
            'US-NC': 1,
            'US-ND': 1,
            'US-NE': 1,
            'US-LA': 1,
            'US-SD': 1,
            'US-DC': 1,
            'US-DE': 1,
            'US-FL': 1,
            'US-CT': 1,
            'US-WA': 1,
            'US-KS': 1,
            'US-WI': 1,
            'US-OR': 1,
            'US-KY': 1,
            'US-ME': 1,
            'US-OH': 1,
            'US-OK': 1,
            'US-ID': 1,
            'US-WY': 1,
            'US-UT': 1,
            'US-IN': 1,
            'US-IL': 1,
            'US-AK': 1,
            'US-NJ': 1,
            'US-CO': 1,
            'US-MD': 1,
            'US-MA': 1,
            'US-AL': 1,
            'US-MO': 1,
            'US-MN': 1,
            'US-CA': 1,
            'US-IA': 1,
            'US-MI': 1,
            'US-GA': 1,
            'US-AZ': 1,
            'US-MT': 1,
            'US-MS': 1,
            'US-SC': 1,
            'US-RI': 1,
            'US-AR': 1 
        }

        gdpSA={
            'PY': 1,
            'CO': 1,
            'VE': 1,
            'CL': 1,
            'SR': 1,
            'BO': 1,
            'EC': 1,
            'AR': 1,
            'GY': 1,
            'BR': 1,
            'PE': 1,
            'UY': 1,
            'FK': 1
        }

        gdpGER={
            'DE-BE': 1,
            'DE-ST': 1,
            'DE-RP': 1,
            'DE-BB': 1,
            'DE-NI': 1,
            'DE-MV': 1,
            'DE-TH': 1,
            'DE-BW': 1,
            'DE-HH': 1,
            'DE-SH': 1,
            'DE-NW': 1,
            'DE-SN': 1,
            'DE-HB': 1,
            'DE-SL': 1,
            'DE-BY': 1,
            'DE-HE': 1
        }

        gdpPOL={
            'PL-WP': 1,
            'PL-SK': 1,
            'PL-ZP': 1,
            'PL-SL': 1,
            'PL-PK': 1,
            'PL-MZ': 1,
            'PL-PD': 1,
            'PL-LB': 1,
            'PL-LD': 1,
            'PL-KP': 1,
            'PL-LU': 1,
            'PL-OP': 1,
            'PL-PM': 1,
            'PL-DS': 1,
            'PL-MA': 1,
            'PL-WN': 1
        }

        $('#btnClearMapaUSA').click(function(){
            let mapObjectUSA = $('#usaMap').vectorMap('get', 'mapObject');
            mapObjectUSA.series.regions[4].setValues(gdpUSA);
        });

        $('#btnClearMapaSA').click(function(){
            let mapObjectSA = $('#saMap').vectorMap('get', 'mapObject');
            mapObjectSA.series.regions[4].setValues(gdpSA);
        });

        $('#btnClearMapaGER').click(function(){
            let mapObjectGER = $('#gerMap').vectorMap('get', 'mapObject');
            mapObjectGER.series.regions[4].setValues(gdpGER);
        });

        $('#btnClearMapaPOL').click(function(){
            let mapObjectPOL = $('#polMap').vectorMap('get', 'mapObject');
            mapObjectPOL.series.regions[4].setValues(gdpPOL);
        });


        
        function loadMap(mapa){
            switch(mapa){
                case "usa":
                    $('#usaMap').vectorMap({
                        /* Seleccion de mapa */
                        map: 'us_aea',

                        /* Fondo del mapa */
                        backgroundColor:['#03A9F4'],

                        series: {

                            /* Estilo para las regiones */
                            regions: [
                                {
                                    /* Arreglo de regiones rojas */
                                    values: {}, 

                                    /* Indice de colores rojos */     
                                    scale: ['#FF0000'], 
                                },
                                {
                                    /* Arreglo de regiones verdes */
                                    values: {},

                                    /* Indice de colores verdes */   
                                    scale: ['#00FF00'], 
                                },
                                {
                                    /* Arreglo de regiones azules */
                                    values: {},

                                    /* Indice de colores azules */    
                                    scale: ['#0000FF'], 
                                },
                                {
                                    /* Arreglo de regiones amarillas */
                                    values: {},

                                    /* Indice de colores amarillos */
                                    scale: ['#FBC02D']  
                                },
                                {
                                    /* Arreglo de regiones blancas */
                                    values: {},

                                    /* Indice de colores blancas */
                                    scale: ['#FFFFFF']  
                                }
                            ]
                        }
                    });
                    break;
                case "sa":
                    $('#saMap').vectorMap({
                        /* Seleccion de mapa */
                        map: 'south_america_mill',

                        /* Fondo del mapa */
                        backgroundColor:['#03A9F4'],

                        series: {

                            /* Estilo para las regiones */
                            regions: [
                                {
                                    /* Arreglo de regiones rojas */
                                    values: {}, 

                                    /* Indice de colores rojos */     
                                    scale: ['#FF0000'], 
                                },
                                {
                                    /* Arreglo de regiones verdes */
                                    values: {},

                                    /* Indice de colores verdes */   
                                    scale: ['#00FF00'], 
                                },
                                {
                                    /* Arreglo de regiones azules */
                                    values: {},

                                    /* Indice de colores azules */    
                                    scale: ['#0000FF'], 
                                },
                                {
                                    /* Arreglo de regiones amarillas */
                                    values: {},

                                    /* Indice de colores amarillos */
                                    scale: ['#FBC02D']  
                                },
                                {
                                    /* Arreglo de regiones blancas */
                                    values: {},

                                    /* Indice de colores blancas */
                                    scale: ['#FFFFFF']  
                                }
                            ]
                        }
                    });
                    $('#saMap').hide(); 
                    break;
                case "ger":
                    $('#gerMap').vectorMap({
                        /* Seleccion de mapa */
                        map: 'de_mill',

                        /* Fondo del mapa */
                        backgroundColor:['#03A9F4'],

                        series: {

                            /* Estilo para las regiones */
                            regions: [
                                {
                                    /* Arreglo de regiones rojas */
                                    values: {}, 

                                    /* Indice de colores rojos */     
                                    scale: ['#FF0000'], 
                                },
                                {
                                    /* Arreglo de regiones verdes */
                                    values: {},

                                    /* Indice de colores verdes */   
                                    scale: ['#00FF00'], 
                                },
                                {
                                    /* Arreglo de regiones azules */
                                    values: {},

                                    /* Indice de colores azules */    
                                    scale: ['#0000FF'], 
                                },
                                {
                                    /* Arreglo de regiones amarillas */
                                    values: {},

                                    /* Indice de colores amarillos */
                                    scale: ['#FBC02D']  
                                },
                                {
                                    /* Arreglo de regiones blancas */
                                    values: {},

                                    /* Indice de colores blancas */
                                    scale: ['#FFFFFF']  
                                }
                            ]
                        }
                    });
                    $('#gerMap').hide(); 
                    break;
                case "pol":
                    $('#polMap').vectorMap({
                        /* Seleccion de mapa */
                        map: 'pl_mill',

                        /* Fondo del mapa */
                        backgroundColor:['#03A9F4'],

                        series: {

                            /* Estilo para las regiones */
                            regions: [
                                {
                                    /* Arreglo de regiones rojas */
                                    values: {}, 

                                    /* Indice de colores rojos */     
                                    scale: ['#FF0000'], 
                                },
                                {
                                    /* Arreglo de regiones verdes */
                                    values: {},

                                    /* Indice de colores verdes */   
                                    scale: ['#00FF00'], 
                                },
                                {
                                    /* Arreglo de regiones azules */
                                    values: {},

                                    /* Indice de colores azules */    
                                    scale: ['#0000FF'], 
                                },
                                {
                                    /* Arreglo de regiones amarillas */
                                    values: {},

                                    /* Indice de colores amarillos */
                                    scale: ['#FBC02D']  
                                },
                                {
                                    /* Arreglo de regiones blancas */
                                    values: {},

                                    /* Indice de colores blancas */
                                    scale: ['#FFFFFF']  
                                }
                            ]
                        }
                    });
                    $('#polMap').hide(); 
                    break;
            }
            //Mapa
        }  
        
    </script>
</body>
</html>