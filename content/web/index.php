<?php 

//VARIAVEIS E SETUPS GERAIS
$vTitlePage = 'MULHERES NAS LIGAS
OFICIAIS DE LEAGUE OF
LEGENDS NO BRASIL®';
$vDescription = 'Este site é um projeto de TCC (Trabalho de Conclusão de Curso) do curso de jornalismo da ECA-USP (Escola de comunicações e Artes da Universidade de São Paulo)';
//$vContent ;


//CONTENT HTML - ESTRUTURA
//TOPO GLOBAL
vTopoHtml () ;

    //TITLE PAGE
    vTitleHtml($vTitlePage,$vDescription);
    
    /****** **********/
    //HEAD MAIN
    include_once('cliki/head.php');
    //CSS MAIN
    include_once('cliki/libs/cliki/css.php');
    //CSS LIB MAIN
    include_once('cliki/libs/litho/css.php');
    /****************/


    //CSS TEMA 
    include_once('css.php');

//HEAD GLOBAL
vMiddleHtml();

//PAGES
//include('page/home.php');

//PAGE WITH SETUPS SECTION CONFIG
include_once('page.php');


//JS LIB MAIN
include_once('cliki/libs/litho/js.php');

//JS TEMA
include_once('js.php');

//BOTTOM GLOBAL
vBottomHtml ();
?>
