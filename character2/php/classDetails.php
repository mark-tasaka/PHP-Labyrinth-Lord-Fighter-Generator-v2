<?php

/*Fighter */

function getHitPoints($level, $conMod)
{
    $hitPoints = 0;

    if($level < 10)
    {
        for($i = 0; $i < $level; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }
    }
    else
    {
        for($i = 0; $i < $level; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }

        $levelTenPlusHP = ($level - 9) * 2;

        $hitPoints += $levelTenPlusHP;

    }


    return $hitPoints;

}


function saveBreathAttack($level)
{
    if($level <= 3)
    {
        return 15;
    }
    else if($level >= 4 && $level >= 6)
    {
        return 13;
    }
    else if($level >= 7 && $level >= 9)
    {
        return 9;
    }
    else if($level >= 10 && $level >= 12)
    {
        return 7;
    }
    else if($level >= 13 && $level >= 15)
    {
        return 5;
    }
    else
    {
        return 4;
    }

}


function savePoisonDeath($level)
{
    if($level <= 3)
    {
        return 12;
    }
    else if($level >= 4 && $level >= 6)
    {
        return 10;
    }
    else if($level >= 7 && $level >= 9)
    {
        return 8;
    }
    else if($level >= 10 && $level >= 12)
    {
        return 6;
    }
    else if($level >= 13 && $level >= 18)
    {
        return 4;
    }
    else
    {
        return 3;
    }

}


function savePetrify($level)
{
    if($level <= 3)
    {
        return 14;
    }
    else if($level >= 4 && $level >= 6)
    {
        return 12;
    }
    else if($level >= 7 && $level >= 9)
    {
        return 10;
    }
    else if($level >= 10 && $level >= 12)
    {
        return 8;
    }
    else if($level >= 13 && $level >= 15)
    {
        return 6;
    }
    else if($level >= 16 && $level >= 18)
    {
        return 5;
    }
    else
    {
        return 4;
    }

}


function saveWands($level)
{
    if($level <= 3)
    {
        return 13;
    }
    else if($level >= 4 && $level >= 6)
    {
        return 11;
    }
    else if($level >= 7 && $level >= 9)
    {
        return 9;
    }
    else if($level >= 10 && $level >= 12)
    {
        return 7;
    }
    else if($level >= 13 && $level >= 15)
    {
        return 5;
    }
    else if($level >= 16 && $level >= 18)
    {
        return 4;
    }
    else
    {
        return 3;
    }

}


function saveSpells($level)
{
    if($level <= 3)
    {
        return 16;
    }
    else if($level >= 4 && $level >= 6)
    {
        return 14;
    }
    else if($level >= 7 && $level >= 9)
    {
        return 12;
    }
    else if($level >= 10 && $level >= 12)
    {
        return 10;
    }
    else if($level >= 13 && $level >= 15)
    {
        return 8;
    }
    else if($level >= 16 && $level >= 18)
    {
        return 7;
    }
    else
    {
        return 6;
    }

}




?>