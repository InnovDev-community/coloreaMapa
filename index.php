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
    <script src="js/jquery-jvectormap-us-aea.js"></script>
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
                    <button id="btnBuscarSolucion">Buscar solución</button>
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


<!--     <script type='text/javascript'>
        let codigoColor = [];
        <?php
            /*0or($i=0; $i<count($arregloCodigos);$i++){
                $aux = explode(":",$arregloCodigos[$i]); */
        ?>      codigoColor.push(['<?php /*echo $aux[0];*/?>', <?php/* echo $aux[1];*/?>]);
        <?php
            /*}*/
        ?>
        console.log(codigoColor);
    </script> -->

    <script type='text/javascript'>
        $(function(){
            let rojos = {};
            let verdes = {};
            let azules = {};
            let amarillos = {}; 
            let codigoColor = [];
            <?php
                for($i=0; $i<count($arregloCodigos);$i++){
                    $aux = explode(":",$arregloCodigos[$i]);
                    if($aux[1] == 1){
            ?>
                        rojos["<?php echo $aux[0];?>"] = 1;
            <?php
                    }else{
                        if($aux[1] == 2){
            ?>
                            verdes["<?php echo $aux[0];?>"] = 1;
            <?php
                        }else{
                            if($aux[1] == 3){
            ?>
                                azules["<?php echo $aux[0];?>"] = 1;
            <?php
                            }else{
            ?>
                                amarillos["<?php echo $aux[0];?>"] = 1;
            <?php
                            }
                        }
                    }
                }
            ?>
            /* Formato */
            
                        
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
    </script>
</body>
</html>