<?php

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,035";
          break;

        case "2":
            $xpNext = "4,065";
        break;
        
        case "3":
            $xpNext = "8,125";
        break;
        
        case "4":
            $xpNext = "16,251";
        break;
        
        case "5":
            $xpNext = "32,501";
        break;
        
        case "6":
            $xpNext = "65,001";
        break;        

        case "7":
            $xpNext = "120,001";
        break;
                
        case "8":
            $xpNext = "240,001";
        break;
                
        case "9":
            $xpNext = "360,001";
        break;
                
        case "10":
            $xpNext = "480,001";
        break;
                
        case "11":
            $xpNext = "600,001";
        break;
                
        case "12":
            $xpNext = "720,001";
        break;
                
        case "13":
            $xpNext = "840,001";
        break;
                
        case "14":
            $xpNext = "960,001";
        break;
                
        case "15":
            $xpNext = "1,080,001";
        break;
                
        case "16":
            $xpNext = "1,200,001";
        break;
                
        case "17":
            $xpNext = "1,320,001";
        break;
                
        case "18":
            $xpNext = "1,440,001";
        break;
                
        case "19":
            $xpNext = "1,560,001";
        break;
                
        case "20":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>