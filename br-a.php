<?php 
	$dados = file_get_contents("https://www.placardefutebol.com.br/brasileirao-serie-a");
	$dados2 = str_replace("/brasileirao-serie-a", "http://canalfutebolnoradio.com.br/redireciona.php?url=https://www.placardefutebol.com.br/brasileirao-serie-a", $dados);
   $dados3 = str_replace('<a', '<a target="_BLACK"', $dados2);
	$var1 = explode('<div class="container content">', $dados3);
	print_r($var1[1]);
 ?>
 <style type="text/css">
 .badge-penalties{
   color: red;
 }
 h4{
   margin: 0;
 }
 .banner{
   display: none;
 }
 .status {
    width: 150px !important;
    font-size: 14pt !important;
    background-color: green;
    margin-left: 20px;
    color: #fff !important;
    padding: 5px;
    border-radius: 10px;
    margin-right: 20px;

}
 .w-25{
   display: inline-block;
   text-align: center;
 }
   img{
      display: none;
   }
   .team-name{
      color: black;
      font-family: calibri;
      font-size: 18pt;
      margin: -30px;
      width: 35.5% !important;
   }
   .match-vs {
    width: 3% !important;
    color: black;
   }
   .h5{
      color:  black;
   }
   h4 > span{
      font-size: 15pt;
   }
   .text-center{
      color:  black;
      font-family: calibri;
      font-size: 20pt;
   }
   a{
      text-decoration: none;
   }
   hr{
      width: 700px;
   }
   h4{
      text-align: center;
      color: green;
      font-family: calibri;
   }
   .row{
      background-color: #ffff;
      width: 700px;
      margin-right: auto;
      margin-left: auto;
   }
 </style>