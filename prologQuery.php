<?php
function prologQuery(){
    $output = `swipl -s USA.pl -g "solution([washington/US_WA,oregon/US_OR,california/US_CA,nevada/US_NV,idaho/US_ID,utah/US_UT,arizona/US_AZ,montana/US_MT,wyoming/US_WY,colorado/US_CO,newmexico/US_NM,northdakota/US_ND,southdakota/US_SD,nebraska/US_NE,kansas/US_KS,oklahoma/US_OK,texas/US_TX,minnesota/US_MN,iowa/US_IA,missouri/US_MO,arkansas/US_AR,louisiana/US_LA,wisconsin/US_WI,illinois/US_IL,mississippi/US_MS,alabama/US_AL,florida/US_FL,georgia/US_GA,southcarolina/US_SC,tenesse/US_TN,northcarolina/US_NC,kentucky/US_KY,indiana/US_IN,michigan/US_MI,ohio/US_OH,westvirginia/US_WV,virginia/US_VA,maryland/US_MD,pennsylvania/US_PA,delaware/US_DE,newjersey/US_NJ,newyork/US_NY,connecticut/US_CT,rhodeisland/US_RI,massachusetts/US_MA,vermont/US_VT,newhampshire/US_NH,maine/US_ME]),write('US-WA:'),write(US_WA), write(',US-OR:'),write(US_OR), write(',US-CA:'),write(US_CA), write(',US-NV:'),write(US_NV),write(',US-ID:'),write(US_ID), write(',US-UT:'),write(US_UT),write(',US-AZ:'),write(US_AZ), write(',US-MT:'),write(US_MT),write(',US-WY:'),write(US_WY), write(',US-CO:'),write(US_CO),write(',US-NM:'),write(US_NM), write(',US-ND:'),write(US_ND),write(',US-SD:'),write(US_SD), write(',US-NE:'),write(US_NE),write(',US-KS:'),write(US_KS), write(',US-OK:'),write(US_OK),write(',US-TX:'),write(US_TX), write(',US-MN:'),write(US_MN),write(',US-IA:'),write(US_IA), write(',US-MO:'),write(US_MO),write(',US-AR:'),write(US_AR), write(',US-LA:'),write(US_LA),write(',US-WI:'),write(US_WI), write(',US-IL:'),write(US_IL),write(',US-MS:'),write(US_MS), write(',US-AL:'),write(US_AL),write(',US-FL:'),write(US_FL), write(',US-GA:'),write(US_GA),write(',US-SC:'),write(US_SC), write(',US-TN:'),write(US_TN),write(',US-NC:'),write(US_NC), write(',US-KY:'),write(US_KY),write(',US-IN:'),write(US_IN), write(',US-MI:'),write(US_MI),write(',US-OH:'),write(US_OH), write(',US-WV:'),write(US_WV),write(',US-VA:'),write(US_VA), write(',US-MD:'),write(US_MD),write(',US-PA:'),write(US_PA), write(',US-DE:'),write(US_DE),write(',US-NJ:'),write(US_NJ), write(',US-NY:'),write(US_NY),write(',US-CT:'),write(US_CT), write(',US-RI:'),write(US_RI),write(',US-MA:'),write(US_MA), write(',US-VT:'),write(US_VT),write(',US-NH:'),write(US_NH), write(',US-ME:'),write(US_ME)." -t halt.`;


/* 
    SouthAmerica

    $output = `swipl -s SouthAmerica.pl -g "solution([ecuador/EC,peru/PE,colombia/CO,venezuela/VE,guyana/GY,surinam/SR,brasil/BR,bolivia/BO,chile/CL,paraguay/PY,argentina/AR,uruguay/UY]), write('EC:'), write(EC),write(',PE:'),write(PE),write(',VE:'), write(VE),write(',GY:'), write(GY),write(',SR:'), write(SR),write(',BR:'), write(BR), write(',BO:'), write(BO), write(',CL:'), write(CL), write(',PY:'), write(PY), write(',AR:'), write(AR), write(',UY:'), write(UY)." -t halt.`

 */


 /* 
    Poland

$output = `swipl -s SouthAmerica.pl -g "solution([westpomeranian/PL_ZP,pomeranian/PL_PM,greaterpoland/PL_WP,lubusz/PL_LB,lowersilesian/PL_DS,opole/PL_OP,silesian/PL_SL,lodz/PL_LD,kuyavianpomeranian/PL_KP,warmianmasurian/PL_WN,podlachian/PL_PD,masovian/PL_MZ,swietokrzyskie/PL_SK,lesserpoland/PL_MA,subcarpathian/PL_PK,lublin/PL_LU]), write('PL-ZP:'),write(PL_ZP),write(',PL-PM:'),write(PL_PM),write(',PL-WP:'),write(PL_WP),write(',PL-LB:'),write(PL_LB),write(',PL-DS:'),write(PL_DS),write(',PL-OP:'),write(PL_OP),write(',PL-SL:'),write(PL_SL),write(',PL-LD:'),write(PL_LD),write(',PL-KP:'),write(PL_KP),write(',PL-WN:'),write(PL_WN),write(',PL-PD:'),write(PL_PD),write(',PL-MZ:'),write(PL_MZ),write(',PL-SK:'),write(PL_SK),write(',PL-MA:'),write(PL_MA),write(',PL-PK:'),write(PL_PK),write(',PL-LU:'),write(PL_LU)." -t halt.`
 
 */

 /* 
    Germany

$output = `swipl -s Germany.pl -g "solution([berlin/DE_BE,sachsenanhalt/DE_ST,rheinlandpfalz/DE_RP,brandenburg/DE_BB,niedersachsen/DE_NI,mecklenburgvorpommern/DE_MV,thuringen/DE_TH,badenwurttemberg/DE_BW,hamburg/DE_HH,schleswigholstein/DE_SH,nordrheinwestfalen/DE_NW,sachsen/DE_SN,bremen/DE_HB,saarland/DE_SL,bayern/DE_BY,hessen/DE_HE]), write('DE-SH:'), write(DE_SH),write('DE-MV:'),write(DE_MV),write('DE-HH:'),write(DE_HH),write('DE-NI:'),write(DE_NI),write('DE-HB:'),write(DE_HB),write('DE-ST:'),write(DE_ST),write('DE-BB:'),write(DE_BB),write('DE-BE:'),write(DE_BE),write('DE-NW:'),write(DE_NW),write('DE-HE:'),write(DE_HE),write('DE-TH:'),write(DE_TH),write('DE-SN:'),write(DE_SN),write('DE-RP:'),write(DE_RP),write('DE-SL:'),write(DE_SL),write('DE-BW:'),write(DE_BW),write('DE-BY:'),write(DE_BY)." -t halt.`
 
 */

    $codigos = explode(",",$output);

    /* Se regresa un array de todos los codigos de las regiones y sus colores(número) */
    return $codigos;
}
?>