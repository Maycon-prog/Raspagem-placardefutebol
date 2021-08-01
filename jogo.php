
<?php
    // recebe os dados
    $url = file_get_contents($_GET['url']);
    // cronometro
   $var1 = explode('<div class="col-lg-2 col-4 text-center match-scoreboard">',$url);
   $var2 = explode('<span class="badge badge-default match-score-text">', $var1[1]);
   $cronometro = $var2[0]; // var com o cronometro
   $var7 = explode('>', $cronometro);
   $var8 = explode('</span', $var7[1] );  
   $cronometrolimpo = $var8[0];
   // cronometro e placar
   $var3 = explode('<div class="row match-card-first-row justify-content-md-center">',$url);
   $var4 = explode('<div class="row match-card-second-row justify-content-md-center">', $var3[1]);
   $placarecron = $var4[0]; // var com tudo
   // somente placar
   $array = array("MIN",":"," ","t-centermatch-score-vs-te","</span>",'<divclass="col-lg-3col-4te','t">','<spanclass="h4te');
   $retira = str_replace($array, "", $placarecron);
   $dividi = explode('x', $retira);
   $remove = str_replace('t">', "", $dividi[4]);

   $resolvebug = explode('img-resizecenter-blocklogo',$dividi[8]);
    if($resolvebug[0]=='"class="'){
        $time2 = 0;
        $time1 = 0;
    }else{
        $time2 = $dividi[8]; // var placar time 2
        $time1 = $remove; // var placar time 1
    };


   // nome dos times
   $res = preg_match("/<title>(.*)<\/title>/siU", $url, $title_matches);
   $titulo = explode('x', $title_matches[1]);
   $escudo1 = $titulo[0]; // Nome do time 1
   //$escudo1 = str_replace(" ", "", $escudo1); // remove espaço
   $escudo2separa = explode('AO', $titulo[1]);
   $escudo2 = $escudo2separa[0]; // Nome do time 2
   //$escudo2 = str_replace(" ", "", $escudo2); // remove espaço


    echo "<meta http-equiv='refresh' content='20'>";
    // mostra cronometro e status
    echo "$cronometrolimpo";
    echo "<br>";
    // mostra placar e nome dos times
    echo "$escudo1 $time1 X $time2 $escudo2";

