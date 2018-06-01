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
    <!-- <script src="js/jquery-jvectormap-us-aea.js"></script> -->
    <script src="js/jqueryusprueba.js"></script>
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
                <a class="link-github icon-github" href="#">Repositorio en GitHub</a>
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
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionUSA">Buscar solución USA</button>
                        </div>
                        <div id="appSouthAmerica" class="mapa__contenido">
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionSA">Buscar solución SA</button>
                        </div>
                        <div id="appGermany" class="mapa__contenido">
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionGER">Buscar solución GER</button>
                        </div>
                        <div id="appPoland" class="mapa__contenido">
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionPO">Buscar solución POL</button>
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
            <a class="link-facebook icon-facebook" href="">Facebook</a>
            <div class="copyright">
                <span> &copy; 2018 Todos los derechos reservados | </span>
                <a href="#">innovdevelopers.com</a>
            </div>
            <a class="link-youtube icon-youtube" href="">YouTube</a>
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

        let codigosUSA=[];
        let codigosSA=[];
        let codigosGER=[];
        let codigosPO=[];

        <?php
            require_once('prologQuery.php');
            $arregloCodigosUSA = prologQuery('usa');
            $arregloCodigosSA = prologQuery('sa');
            $arregloCodigosGER = prologQuery('germany');
            $arregloCodigosPO = prologQuery('poland');

            for($i=0; $i<count($arregloCodigosUSA);$i++){
                $var = explode(":",$arregloCodigosUSA[$i]);
        ?>      codigosUSA.push(['<?php echo $var[0] ?>',<?php echo $var[1] ?>]);
        <?php
            }
            for($i=0; $i<count($arregloCodigosSA);$i++){
                $var = explode(":",$arregloCodigosSA[$i]);
        ?>      codigosSA.push(['<?php echo $var[0] ?>',<?php echo $var[1] ?>]);
        <?php
            }
            for($i=0; $i<count($arregloCodigosGER);$i++){
                $var = explode(":",$arregloCodigosGER[$i]);
        ?>      codigosGER.push(['<?php echo $var[0] ?>',<?php echo $var[1] ?>]);
        <?php
            }
            for($i=0; $i<count($arregloCodigosPO);$i++){
                $var = explode(":",$arregloCodigosPO[$i]);
        ?>      codigosPO.push(['<?php echo $var[0] ?>',<?php echo $var[1] ?>]);
        <?php
            }
        ?>

        function colorear(mapObject, arregloCodigos){
            let delayColor = 750;
            /* Separacion de las regiones por su color
                1 == rojo
                2 == verde
                3 == azul
                4 == amarillo
            */
            let auxiliar; 
           

           console.log(arregloCodigos);

            for(let i=0; i<arregloCodigos.length ;i++){

                

                /* let auxiliar = new Object(),arregloCodigos[i][0] = 1; */

                console.log(auxiliar);

                 if(arregloCodigos[i][1] == 1){
                    /* setTimeout(() => { */
                        mapObject.series.regions[0].setValues(auxiliar);
                    /* }, delayColor); */
                }else{
                    if(arregloCodigos[i][1] == 2){
                        /* setTimeout(() => { */
                                mapObject.series.regions[1].setValues(auxiliar);
                        /* }, delayColor); */
                    }else{
                        if(arregloCodigos[i][1] == 3){
                            /* setTimeout(() => { */
                                mapObject.series.regions[2].setValues(auxiliar);
                            /* }, delayColor); */
                        }else{
                            /* setTimeout(() => { */
                                mapObject.series.regions[3].setValues(auxiliar);
                            /* }, delayColor); */
                        }
                    }
                } 
                
                delayColor += 750;
            }

            console.log(mapObject.series);
            return delayColor;
        }

        $('#btnBuscarSolucionUSA').click(function(){
            let mapObjectUSA = $('#usaMap').vectorMap('get', 'mapObject');
            let delayColor = colorear(mapObjectUSA,codigosUSA);
            
            /* Color para Hawaii */
            setTimeout(() => {
                mapObjectUSA.series.regions[1].setValues({US_HI:1});
            }, delayColor);
            
            delayColor += 750;

            /* Color para Alaska */
            setTimeout(() => {
                mapObjectUSA.series.regions[3].setValues({US_AK:1});
            }, delayColor);

        });

        $('#btnBuscarSolucionSA').click(function(){
            let mapObjectSA = $('#saMap').vectorMap('get', 'mapObject');
            let delayColor = colorear(mapObjectSA,codigosSA);
            /* Color para Islas Malvinas */
            setTimeout(() => {
                mapObjectSA.series.regions[1].setValues({'FK':1});
            }, delayColor);
        });

        $('#btnBuscarSolucionGER').click(function(){
            let mapObjectGER = $('#gerMap').vectorMap('get', 'mapObject');
            let delayColor = colorear(mapObjectGER,codigosGER);
        });

        $('#btnBuscarSolucionPO').click(function(){
            let mapObjectPO = $('#polMap').vectorMap('get', 'mapObject');
            let delayColor = colorear(mapObjectPO,codigosPO);
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