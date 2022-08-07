<?php

/*
 * This project purpose for xqwtxon links redirect.
 * 
 * This project is protected by MIT LICENSE (c)
 * 
 * @author xqwtxon
 * @link https://xqwtxon.ml/
 */
 
 if(!isset($_GET['u'])){
     redirect();
 } else {
     if(isset($_GET['p'])){
         return;
     }
     return redirect($_GET['u']);
 }
 
 const GETURL = "https://raw.githubusercontent.com/xqwtxon/website/main/redirect/%s.txt";
 
 function redirect($url = "https://xqwtxon.ml/"){
     header("Location: " . $url);
 }
 
 switch($_GET['p']){
     case "discord":
     case "dc":
         redirect(@file_get_contents(vsprintf(GETURL, ["discord"])));
         break;
     case "youtube":
     case "yt":
         redirect(@file_get_contents(vsprintf(GETURL, ["youtube"])));
         break;
     case "twitter":
     case "twt":
         redirect(@file_get_contents(vsprintf(GETURL, ["twitter"])));
         break;
     default:
         redirect();
         break;
 }
