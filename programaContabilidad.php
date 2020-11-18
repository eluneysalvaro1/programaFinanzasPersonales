<?php
/**
 * Muestra el menu principal
 * 
*/
function menuPrincipal(){
    echo "( 1 ) Calcular estado de resultados del Dia\n"; 
    echo "( 2 ) Calcular estado de resultados del Semana\n";
    echo "( 3 ) Calcular estado de resultados del Mes\n";
    echo "( 4 ) Calcular solamente Ganancias\n";
    echo "( 5 ) Calcular solamente Gastos\n";
    echo "( 6 ) Crear plan de ahorro en MESES\n";
    echo "( 7 ) Calcular ganancia en base a tasa de interes %\n";
    echo "( 8 ) Informacion basica sobre tus finanzas\n";
    echo "( 0 ) Salir ";

    $opciones = trim(fgets(STDIN));
    
    return $opciones;
};



/**
 * Conseguimos informmacion basica como ingresos, gastos y ahorros
 * 
 * return array $arreglo;
*/
function consultaInformacionPrincipal(){
    //ENTEROS $resultado , $tipoIngreso
    //STRING $iterar , $auxIteracion 
    $arreglo = []; 
    $arreglo[1]["gastos"] = 0; 
    $arreglo[2]["ahorros"] = 0;
    $arreglo[0]["ingresos inversion"] = 0;
    $arreglo[0]["ingresos ganados"] = 0;
    $arreglo[0]["ingresos pasivos"] = 0;
    do {
    echo "¿Que desea ingresar primero?\n ( 1 ) Ingresos\n ( 2 ) Gastos\n ( 3 ) Ahorros ";
    $resultado = trim(fgets(STDIN)); 
    if ($resultado == 1) {
        do { 
        echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo  ";
        $tipoIngreso = trim(fgets(STDIN)); 
            if ($tipoIngreso == 1) {
                echo "¿Cuanto ganó en la semana?";  
                $arreglo[0]["ingresos ganados"] = trim(fgets(STDIN)); 
            }elseif($tipoIngreso == 2){ 
                echo "¿Cuanto ganó en la semana?"; 
                $arreglo[0]["ingresos inversion"] = trim(fgets(STDIN));
            }elseif ($tipoIngreso == 3) {
                echo "¿Cuanto ganó en la semana?"; 
                $arreglo[0]["ingresos pasivos"] = trim(fgets(STDIN));
            } 
            echo "¿Desea ingresar otro tipo de ingreso? (S/N) "; 
            $iterar = trim(fgets(STDIN)); 
        } while ($iterar == "S" || $iterar == "s" );
    }elseif ($resultado == 2) {
        echo "Ingrese el total de sus gastos diarios: "; 
        $arreglo[1]["gastos"] = trim(fgets(STDIN));
    }elseif ($resultado == 3) {
        echo "Ingrese el total de sus ahorros: "; 
        $arreglo[2]["ahorros"] = trim(fgets(STDIN)); 
    }; 
    echo "¿Desea ingresar otro dato? (S/N)";
    $auxIteracion = trim(fgets(STDIN)); 
} while ($auxIteracion == "S" || $auxIteracion == "s");
    $ingresosTotales = $arreglo[0]["ingresos pasivos"] + $arreglo[0]["ingresos ganados"] + $arreglo[0]["ingresos inversion"];
    echo "Sus ingresos totales fueron: " . $ingresosTotales . "\n";
    echo "Sus gastos totales fueron: " . $arreglo[1]["gastos"] . "\n";
    echo "Sus ahorros son de: " . $arreglo[2]["ahorros"] . "\n";     

    return $arreglo; 
};


/**
 * TE ENSEÑA VALOR DE GANANCIAS DE DIFERENTES DIAS, SEMANAS O MESES
 * 
 * 
*/
function solamenteGanancias(){
    $arreglo = [];
    $arreglo[0]["ingresos pasivos"] = 0; 
    $arreglo[0]["ingresos inversion"] = 0; 
    $arreglo[0]["ingresos ganados"] = 0; 

    $arreglo[1]["ingresos pasivos"] = 0; 
    $arreglo[1]["ingresos inversion"] = 0; 
    $arreglo[1]["ingresos ganados"] = 0; 
    
    $arreglo[2]["ingresos pasivos"] = 0; 
    $arreglo[2]["ingresos inversion"] = 0; 
    $arreglo[2]["ingresos ganados"] = 0; 
    
    $arreglo[3]["ingresos pasivos"] = 0; 
    $arreglo[3]["ingresos inversion"] = 0; 
    $arreglo[3]["ingresos ganados"] = 0; 

    $arreglo[4]["ingresos pasivos"] = 0; 
    $arreglo[4]["ingresos inversion"] = 0; 
    $arreglo[4]["ingresos ganados"] = 0; 

    $arreglo[5]["ingresos pasivos"] = 0; 
    $arreglo[5]["ingresos inversion"] = 0; 
    $arreglo[5]["ingresos ganados"] = 0; 
    
    $arreglo[6]["ingresos pasivos"] = 0; 
    $arreglo[6]["ingresos inversion"] = 0; 
    $arreglo[6]["ingresos ganados"] = 0; 

    $cont = 1; 

    $ingresosTotales = 0;
    echo "Le interesa saber sus ingresos sobre: \n ( 1 ) 1 Dia \n ( 2 ) Semana \n ( 3 ) Mes";  
    $ingresosSobre = trim(fgets(STDIN));  

    if ($ingresosSobre == 1) {
        do { 
            echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo  ";
            $tipoIngreso = trim(fgets(STDIN)); 
                if ($tipoIngreso == 1) {
                    echo "¿Cuanto ganó en el dia?";  
                    $arreglo[0]["ingresos ganados"] = trim(fgets(STDIN)); 
                }elseif($tipoIngreso == 2){ 
                    echo "¿Cuanto ganó en el dia?"; 
                    $arreglo[0]["ingresos inversion"] = trim(fgets(STDIN));
                }elseif ($tipoIngreso == 3) {
                    echo "¿Cuanto ganó en el dia?"; 
                    $arreglo[0]["ingresos pasivos"] = trim(fgets(STDIN));
                } 
                echo "¿Desea ingresar otro tipo de ingreso? (S/N) "; 
                $iterar = trim(fgets(STDIN)); 
            } while ($iterar == "S" || $iterar == "s" );
            $ingresosTotales = $arreglo[0]["ingresos pasivos"] + $arreglo[0]["ingresos ganados"] + $arreglo[0]["ingresos inversion"];
            echo "Sus ingresos totales en el dia fueron: " . $ingresosTotales . "\n";
    }elseif ($ingresosSobre == 2) {
        $constanteSemana = 7; 
        for ($i=0; $i < $constanteSemana ; $i++) { 
            do { 
                echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo\n ( 0 ) No hubo ingresos ese dia ";
                $tipoIngreso = trim(fgets(STDIN)); 
                    if ($tipoIngreso == 1) {
                        echo "¿Cuanto ganó en el dia? " . $cont . " :";  
                        $arreglo[$i]["ingresos ganados"] = trim(fgets(STDIN)); 
                    }elseif($tipoIngreso == 2){ 
                        echo "¿Cuanto ganó en el dia? " . $cont . " :"; 
                        $arreglo[$i]["ingresos inversion"] = trim(fgets(STDIN));
                    }elseif ($tipoIngreso == 3) {
                        echo "¿Cuanto ganó en el dia? " . $cont . " :"; 
                        $arreglo[$i]["ingresos pasivos"] = trim(fgets(STDIN));
                    }elseif ($tipoIngreso == 0) {
                        
                    }; 
                    echo "¿Desea ingresar otro tipo de ingreso del dia " . $cont . "? (S/N) "; 
                    $iterar = trim(fgets(STDIN)); 
                } while ($iterar == "S" || $iterar == "s" );
                $cont++;
                $ingresosTotales = $ingresosTotales + $arreglo[$i]["ingresos pasivos"] + $arreglo[$i]["ingresos ganados"] + $arreglo[$i]["ingresos inversion"];
        }
        echo "Sus ingresos totales en la semana fueron: " . $ingresosTotales . "\n";
    }elseif ($ingresosSobre == 3) {
        $constanteMes = 4; 
        for ($i=0; $i < $constanteMes ; $i++) { 
            do { 
                echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo\n ( 0 ) No hubo ingresos esa semana";
                $tipoIngreso = trim(fgets(STDIN)); 
                    if ($tipoIngreso == 1) {
                        echo "¿Cuanto ganó en total en la semana? " . $cont . " :";  
                        $arreglo[$i]["ingresos ganados"] = trim(fgets(STDIN)); 
                    }elseif($tipoIngreso == 2){ 
                        echo "¿Cuanto ganó en la semana? " . $cont . " :"; 
                        $arreglo[$i]["ingresos inversion"] = trim(fgets(STDIN));
                    }elseif ($tipoIngreso == 3) {
                        echo "¿Cuanto ganó en la semana? " . $cont . " :"; 
                        $arreglo[$i]["ingresos pasivos"] = trim(fgets(STDIN));
                    } 
                    echo "¿Desea ingresar otro tipo de ingreso de la semana " . $i . "? (S/N) "; 
                    $iterar = trim(fgets(STDIN)); 
                } while ($iterar == "S" || $iterar == "s" );
                $cont++;
                $ingresosTotales = $ingresosTotales + $arreglo[$i]["ingresos pasivos"] + $arreglo[$i]["ingresos ganados"] + $arreglo[$i]["ingresos inversion"];
                
        };
        echo "Sus ingresos totales en el mes fueron: " . $ingresosTotales . "\n";
    }; 
    return $arreglo; 
};  


/**
 * TE ENSEÑA TUS INGRESOS EN UN DIA
 * 
 */
function ingresosDia(){
    $arreglo[0]["ingresos pasivos"] = 0;
    $arreglo[0]["ingresos ganados"] = 0;
    $arreglo[0]["ingresos inversion"] = 0;
    do { 
        echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo  ";
        $tipoIngreso = trim(fgets(STDIN)); 
            if ($tipoIngreso == 1) {
                echo "¿Cuanto ganó en el dia?";  
                $arreglo[0]["ingresos ganados"] = trim(fgets(STDIN)); 
            }elseif($tipoIngreso == 2){ 
                echo "¿Cuanto ganó en el dia?"; 
                $arreglo[0]["ingresos inversion"] = trim(fgets(STDIN));
            }elseif ($tipoIngreso == 3) {
                echo "¿Cuanto ganó en el dia?"; 
                $arreglo[0]["ingresos pasivos"] = trim(fgets(STDIN));
            } 
            echo "¿Desea ingresar otro tipo de ingreso? (S/N) "; 
            $iterar = trim(fgets(STDIN)); 
        } while ($iterar == "S" || $iterar == "s" );
        $ingresosTotales = $arreglo[0]["ingresos pasivos"] + $arreglo[0]["ingresos ganados"] + $arreglo[0]["ingresos inversion"];
        echo "Sus ingresos totales en el dia fueron: " . $ingresosTotales . "\n";
};




/**
 * TE ENSEÑA TUS INGRESOS EN UNA SEMANA
 * 
 */
function ingresosSemana(){
    $constanteSemana = 7; 
    $cont = 1; 
    $ingresosTotales = 0;
    $arreglo[0]["ingresos pasivos"] = 0; 
    $arreglo[0]["ingresos inversion"] = 0; 
    $arreglo[0]["ingresos ganados"] = 0; 

    $arreglo[1]["ingresos pasivos"] = 0; 
    $arreglo[1]["ingresos inversion"] = 0; 
    $arreglo[1]["ingresos ganados"] = 0; 
    
    $arreglo[2]["ingresos pasivos"] = 0; 
    $arreglo[2]["ingresos inversion"] = 0; 
    $arreglo[2]["ingresos ganados"] = 0; 
    
    $arreglo[3]["ingresos pasivos"] = 0; 
    $arreglo[3]["ingresos inversion"] = 0; 
    $arreglo[3]["ingresos ganados"] = 0; 

    $arreglo[4]["ingresos pasivos"] = 0; 
    $arreglo[4]["ingresos inversion"] = 0; 
    $arreglo[4]["ingresos ganados"] = 0; 

    $arreglo[5]["ingresos pasivos"] = 0; 
    $arreglo[5]["ingresos inversion"] = 0; 
    $arreglo[5]["ingresos ganados"] = 0; 
    
    $arreglo[6]["ingresos pasivos"] = 0; 
    $arreglo[6]["ingresos inversion"] = 0; 
    $arreglo[6]["ingresos ganados"] = 0; 
    for ($i=0; $i < $constanteSemana ; $i++) { 
        do { 
            echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo\n ( 0 ) No hubo ingresos ese dia ";
            $tipoIngreso = trim(fgets(STDIN)); 
                if ($tipoIngreso == 1) {
                    echo "¿Cuanto ganó en el dia? " . $cont . " :";  
                    $arreglo[$i]["ingresos ganados"] = trim(fgets(STDIN)); 
                }elseif($tipoIngreso == 2){ 
                    echo "¿Cuanto ganó en el dia? " . $cont . " :"; 
                    $arreglo[$i]["ingresos inversion"] = trim(fgets(STDIN));
                }elseif ($tipoIngreso == 3) {
                    echo "¿Cuanto ganó en el dia? " . $cont . " :"; 
                    $arreglo[$i]["ingresos pasivos"] = trim(fgets(STDIN));
                }elseif ($tipoIngreso == 0) {
                    
                }; 
                echo "¿Desea ingresar otro tipo de ingreso del dia " . $cont . "? (S/N) "; 
                $iterar = trim(fgets(STDIN)); 
            } while ($iterar == "S" || $iterar == "s" );
            $cont++;
            $ingresosTotales = $ingresosTotales + $arreglo[$i]["ingresos pasivos"] + $arreglo[$i]["ingresos ganados"] + $arreglo[$i]["ingresos inversion"];
    }
    echo "Sus ingresos totales en la semana fueron: " . $ingresosTotales . "\n";
};




/**
 * TE ENSEÑA TUS INGRESOS EN UN MES
 * 
 */
function ingresosMeses(){
    $constanteMes = 4; 
    $cont = 1;
    $ingresosTotales = 0; 
    $arreglo[0]["ingresos pasivos"] = 0; 
    $arreglo[0]["ingresos inversion"] = 0; 
    $arreglo[0]["ingresos ganados"] = 0; 

    $arreglo[1]["ingresos pasivos"] = 0; 
    $arreglo[1]["ingresos inversion"] = 0; 
    $arreglo[1]["ingresos ganados"] = 0; 
    
    $arreglo[2]["ingresos pasivos"] = 0; 
    $arreglo[2]["ingresos inversion"] = 0; 
    $arreglo[2]["ingresos ganados"] = 0; 
    
    $arreglo[3]["ingresos pasivos"] = 0; 
    $arreglo[3]["ingresos inversion"] = 0; 
    $arreglo[3]["ingresos ganados"] = 0; 
        for ($i=0; $i < $constanteMes ; $i++) { 
            do { 
                echo "¿Que tipo de ingreso desea ingresar? \n ( 1 ) Ganado\n ( 2 ) Inversion\n ( 3 ) Pasivo\n ( 0 ) No hubo ingresos esa semana";
                $tipoIngreso = trim(fgets(STDIN)); 
                    if ($tipoIngreso == 1) {
                        echo "¿Cuanto ganó en total en la semana? " . $cont . " :";  
                        $arreglo[$i]["ingresos ganados"] = trim(fgets(STDIN)); 
                    }elseif($tipoIngreso == 2){ 
                        echo "¿Cuanto ganó en la semana? " . $cont . " :"; 
                        $arreglo[$i]["ingresos inversion"] = trim(fgets(STDIN));
                    }elseif ($tipoIngreso == 3) {
                        echo "¿Cuanto ganó en la semana? " . $cont . " :"; 
                        $arreglo[$i]["ingresos pasivos"] = trim(fgets(STDIN));
                    }elseif ($tipoIngreso == 0) {
                    }; 
                    echo "¿Desea ingresar otro tipo de ingreso de la semana " . $cont . "? (S/N) "; 
                    $iterar = trim(fgets(STDIN)); 
                } while ($iterar == "S" || $iterar == "s" );
                $cont++;
                $ingresosTotales = $ingresosTotales + $arreglo[$i]["ingresos pasivos"] + $arreglo[$i]["ingresos ganados"] + $arreglo[$i]["ingresos inversion"];
                
        };
        echo "Sus ingresos totales en el mes fueron: " . $ingresosTotales . "\n";
}; 

/**
 * CALCULA LOS GASTOS TOTALES
 * 
 * 
 */
function calcularGastos(){
    $arreglo = [];
    $arreglo[0]["gastos"] = 0; 
    $arreglo[1]["gastos"] = 0;   
    $arreglo[2]["gastos"] = 0;   
    $arreglo[3]["gastos"] = 0;  
    $arreglo[4]["gastos"] = 0; 
    $arreglo[5]["gastos"] = 0; 
    $arreglo[6]["gastos"] = 0; 
    $cont = 1; 
    $gastosTotales = 0;
    echo "Le interesa saber sus gastos en: \n ( 1 ) 1 Dia \n ( 2 ) Semana \n ( 3 ) Mes";  
    $gastos = trim(fgets(STDIN));  

    if ($gastos == 1) {
            echo "Ingrese sus gastos: ";
            $gastosIngresados = trim(fgets(STDIN)); 
            echo "Sus gastos totales en el dia fueron: " . $gastosIngresados . "\n";
    }elseif ($gastos == 2) {
        $constanteSemana = 7; 
        for ($i=0; $i < $constanteSemana ; $i++) { 
            do { 
                echo "¿Que tipo de dato desea ingresar? \n ( 1 ) Gasto\n ( 0 ) No hubo ingresos ese dia ";
                $gastosIngresados = trim(fgets(STDIN)); 
                    if ($gastosIngresados == 1) {
                        echo "¿Cuanto gastó en el dia? " . $cont . " :";  
                        $arreglo[$i]["gastos"] = trim(fgets(STDIN)); 
                    }elseif ($gastosIngresados == 0) {
                    }; 
                    echo "¿Desea ingresar otro tipo de gasto en el dia " . $cont . "? (S/N) "; 
                    $iterar = trim(fgets(STDIN)); 
                } while ($iterar == "S" || $iterar == "s" );
                $cont++;
                $gastosTotales = $gastosTotales + $arreglo[$i]["gastos"];
        }
        echo "Sus ingresos totales en la semana fueron: " . $gastosTotales . "\n";
    }elseif ($gastos == 3) {
        $constanteMes = 4; 
        for ($i=0; $i < $constanteMes ; $i++) { 
            do { 
                echo "¿Que tipo de dato desea ingresar? \n ( 1 ) Gastos\n ( 0 ) No hubo ingresos esa semana";
                $gastosIngresados = trim(fgets(STDIN)); 
                    if ($gastosIngresados == 1) {
                        echo "¿Cuanto gastó en total en la semana? " . $cont . " :";  
                        $arreglo[$i]["gastos"] = trim(fgets(STDIN)); 
                    }elseif ($gastosIngresados == 0) {
                    };
                    echo "¿Desea ingresar otro tipo de gasto de la semana " . $i . "? (S/N) "; 
                    $iterar = trim(fgets(STDIN)); 
                } while ($iterar == "S" || $iterar == "s" );
                $cont++;
                $gastosTotales = $gastosTotales + $arreglo[$i]["gastos"];
                
        };
        echo "Sus gastos totales en el mes fueron: " . $gastosTotales . "\n";
        return $arreglo; 
    };
};

/**
 * CREA UN PLAN DE AHORRO TOMANDO COMO REFERENCIA DIFERENTES PARAMETROS
 * 
 * @param float $dineroAConseguir $mesesDeAhorroMax , $mesesDeAhorroMin
 * 
 * 
 */
function planAhorro($dineroAConseguir , $mesesDeAhorroMin , $mesesDeAhorroMax){
    $constanteMes = 30; 
    $constanteSemana = 4; 
    
    $resultadosSemanasMin = round(($dineroAConseguir / $mesesDeAhorroMin) / $constanteSemana); //CALCULO QUE MUESTRA CUANTO DINERO POR SEMANAS PARA QUE EN LA CANTIDAD MINIMA DE MESES PUEDA JUNTAR EL DINERO
    $resultadosMesesMin = round(($dineroAConseguir / $mesesDeAhorroMin));  //CALCULO QUE MUESTRA CUANTO DINERO POR MESES PARA CONSEGUIR LA CANTIDAD DE DINERO REQUERIDO
    $resultadosDiasMin = round($resultadosMesesMin / $constanteMes);  //CALCULO QUE MUESTRA CUANTO DINERO POR DIA PARA CONSEGUIR LA CANTIDAD DE DINERO REQUERIDO

    $resultadosSemanasMax = round(($dineroAConseguir / $mesesDeAhorroMax) / $constanteSemana); 
    $resultadosMesesMax = round(($dineroAConseguir / $mesesDeAhorroMax)); 
    $resultadosDiasMax = round($resultadosMesesMax / $constanteMes);  
    
    
    echo "Para ahorrar " . $dineroAConseguir . " en una cantidad MINIMA tendrias que ahorrar lo siguiente: \n (DIAS) Por dia un total de: " . $resultadosDiasMin . "\n (SEMANAS) Por semana un total de: " . $resultadosSemanasMin . "\n (MESES) Por mes un total de: " . $resultadosMesesMin . " "; 
    echo  "\nPara ahorrar " . $dineroAConseguir . " en una cantidad MAXIMA tendrias que ahorrar lo siguiente: \n (DIAS) Por dia un total de: " . $resultadosDiasMax . "\n (SEMANAS) Por semana un total de: " . $resultadosSemanasMax . "\n (MESES) Por mes un total de: " . $resultadosMesesMax . " ";
};


/**
 * SABES EL INTERES QUE VAS A GANAR CON RESPECTO A UNA INVERSION. 
 */
function tasaInteres(){
    echo "Ingrese cuanto dinero tiene pensado invertir: "; 
    $dineroAInvertir = trim(fgets(STDIN));

    echo "¿Con que tasa de interes?: "; 
    $tasaInteres = trim(fgets(STDIN)); 

    $interesAnual = round(($dineroAInvertir * $tasaInteres) / 100);
    $interesMensual = round($interesAnual / 12); 
    $interesDiario = round($interesMensual / 30);
    
    echo "Para la cantidad de: " . $dineroAInvertir . " a una tasa del: " . $tasaInteres . " obtendras lo siguiente: " . "\n En el año: " . $interesAnual . "\n En el mes: " . $interesMensual . "\n Al dia: " . $interesDiario; 
}; 



//-------------------------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------* PROGRAMA PRINCIPAL *-------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------------


$quePasa = menuPrincipal(); 

if ($quePasa == 1) {
    ingresosDia();
}elseif($quePasa == 2){ 
    ingresosSemana(); 
}elseif ($quePasa == 3) {
    ingresosMeses();
}elseif ($quePasa == 4 ) {
    solamenteGanancias();
}elseif ($quePasa == 5) {
    calcularGastos();
}elseif ($quePasa == 6) {
    echo "Cuanto dinero desea ahorrar: "; 
    $dineroAConseguir = trim(fgets(STDIN)); 
    echo "Indique un plazo minimo para hacerlo: "; 
    $plazoMin = trim(fgets(STDIN)); 
    echo "Indique un plazo maximo para hacerlo: ";
    $plazoMax = trim(fgets(STDIN)); 
    planAhorro($dineroAConseguir , $plazoMin , $plazoMax);
}elseif ($quePasa == 7) {
    tasaInteres();
}elseif($quePasa == 8){
    consultaInformacionPrincipal();
}elseif ($quePasa == 0) {
    echo "Cerrando..."; 
};







