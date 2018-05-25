<?php  
  if(!file_exists("colorearmapa.pl")) die("No se puede localizar el archivo colorearmapa.pl, el directorio actual es: ".__DIR__);
    $echo  = "echo anda.";
  echo "La consola ".($echo ? $echo : "NO anda");
  $output = 'swipl -s colorearmapa.pl -g "solution([washington/Y1,oregon/Y2,california/Y3,nevada/Y4,idaho/Y5,utah/Y6,arizona/Y7,montana/Y8,wyoming/Y9,colorado/Y10,newmexico/Y11,northdakota/Y12,southdakota/Y13,nebraska/Y14,kansas/Y15,oklahoma/Y16,texas/Y17,minnesota/Y18,iowa/Y19,missouri/Y20,arkansas/Y21,louisiana/Y22,wisconsin/Y23,illinois/Y24,mississippi/Y25,alabama/Y26,florida/Y27,georgia/Y28,southcarolina/Y29,tenesse/Y30,northcarolina/Y31,kentucky/Y32,indiana/Y33,michigan/Y34,ohio/Y35,westvirginia/Y36,virginia/Y37,maryland/Y38,pennsylvania/Y39,delaware/Y40,newjersey/Y41,newyork/Y42,connecticut/Y43,rhodeisland/Y44,massachusetts/Y45,vermont/Y46,newhampshire/Y47,maine/Y48])." -t halt.';

  exec($output,$salida);
  echo "<br>";

  foreach($salida as $var){
    echo $var."<br>";
  }


?>