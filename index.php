<?php
    require_once('prologQuery.php');
    $arregloCodigos = prologQuery();
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
                <div id="usa-map">
                </div>
                <a class="link-github icon-github" href="#">Repositorio en GitHub</a>
            </article>
            <article class="seccion__der">
                <h2 class="app__title">$ DESCRIPCION</h2>
                <p class="app__descripcion">El teorema de los cuatro colores consiste básicamente, en que cualquier mapa puede ser coloreado solamente con cuatro colores distintos de tal manera que dos regiones adyacentes (es decir, que tienen una frontera en común y no sólo un punto) no tengan el mismo color. 
                Aunque parece un problema no matemático, sin embargo lo es y su demostración no es nada sencilla, ha costado mucho esfuerzo y 125 años el conseguirlo.</p>
                <div class="app__funciones">
                    <ul class="mapa__lista">    
                        <a class="mapa__lista__item" href="appUsaMap">USA</a>
                        <a class="mapa__lista__item" href="appSouthAmerica">South America</a>
                        <a class="mapa__lista__item" href="appGermany">Germany</a>
                    </ul>
                    <div class="mapa__contenidos">
                        <div id="appUsaMap" class="mapa__contenido">
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionUSA">Buscar solución USA</button>
                        </div>
                        <div id="appSouthAmerica" class="mapa__contenido">
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionSA">Buscar solución SA</button>
                        </div>
                        <div id="appGermany" class="mapa__contenido">
                            <button class="btnBuscarSolucion" id="btnBuscarSolucionGER">Buscar solución GER</button>
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

            $('#usa-map').vectorMap({

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

            let mapObject = $('#usa-map').vectorMap('get', 'mapObject');

            $('#btnBuscarSolucion').click(function(){
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
                    mapObject.series.regions[1].setValues({'US-HI':1});
                }, delayColor);
                
                delayColor += 750;

                /* Color para Alaska */
                setTimeout(() => {
                    mapObject.series.regions[3].setValues({'US-AK':1});
                }, delayColor);

            });
        
    </script>

    <script>
        $(".mapa__contenido").hide(); //Ocultar todos las funciones de los mapas

        //Activo el primer ITEM
        $(".mapa__lista__item:first-child").addClass("mapa__lista__item__active");
        $(".mapa__contenido:first-child").fadeIn(); 

        //Change mapas
        $(".mapa__lista__item").on("click",function(e){
            e.preventDefault();
            //Reinicio todo
            $(".mapa__lista__item").removeClass("mapa__lista__item__active");
            $(".mapa__contenido").hide()
            
            //ID
            let idMapa = $(this).attr("href");

            $("#"+idMapa).fadeIn();
            $(this).addClass("mapa__lista__item__active");
        })

    </script>
</body>
</html>