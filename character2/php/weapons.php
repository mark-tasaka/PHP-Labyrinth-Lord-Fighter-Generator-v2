<?php


    function getWeapon($input)
    {
        $a00 = array("Battleaxe [Tetsubo]", "1d10");
        $a01 = array("Blackjack", "1d3/2d6");
        $a02 = array("Blowgun [Fukiya]", "1d3/1d5");
        $a03 = array("Club", "1d4");
        $a04 = array("Crossbow [Shudo]", "1d6");
        $a05 = array("Dagger [Tanto]", "1d4/1d10");
        $a06 = array("Dart [Shuriken]", "1d4");
        $a07 = array("Flail [Chigiriki]", "1d6");
        $a08 = array("Garrote", "1/3d4");
        $a09 = array("Handaxe [Ono]", "1d6");
        $a10 = array("Javelin", "1d6");
        $a11 = array("Lance", "1d12");
        $a12 = array("Longbow [Daikyu]", "1d6");
        $a13 = array("Longsword [Katana]", "1d8");
        $a14 = array("Mace", "1d6");
        $a15 = array("Polearm [Naganata]", "1d10");
        $a16 = array("Shortbow [Hankyu]", "1d6");
        $a17 = array("Short sword [Wakizashi]", "1d6");
        $a18 = array("Sling", "1d4");
        $a19 = array("Spear [Yari]", "1d8");
        $a20 = array("Staff [bo/jo]", "1d4");
        $a21 = array("Two-handed sword [No-dachi]", "1d10");
        $a22 = array("Warhammer [Otsuchi]", "1d8");
        $a23 = array("Nunchaku", "2d4");
        $a24 = array("Jutte", "1d2x2");
        $a25 = array("Tonfa", "1d4x2");
        $a26 = array("Sai", "1d2x2");
        $a27 = array("Kama", "1d4x2");


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27);
        
        return $array1[$input];
        
    }

    function getRandomWeapons()
    {
       
        $weaponsArray = array(5, 6, 10, 12, 13, 16, 17, 18, 19, 20);
    
        //shuffle $weaponsArray
        shuffle($weaponsArray); 
    
        $numberOfWeapons = rand (2, 5);
    
        $weaponsHas = array();
    
        for($j = 0; $j < $numberOfWeapons; ++$j)
        {
            $weapon = $weaponsArray[$j];
            array_push($weaponsHas, $weapon);
        }
    
        return $weaponsHas;
    }




?>