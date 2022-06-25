<?php


function getWealth($input)
{
    $wealth = '';
    $mon = 0;
    $shu = 0;
    $ryu = 0;


    if($input == 2)
    {
        for($k = 0; $k < 6; ++$k)
        {
            $monCoin = rand(1, 20);
            $mon += $monCoin;
        }
        
        for($i = 0; $i < 3; ++$i)
        {
            $shuCoin = rand(1, 12);
            $shu += $shuCoin;
        }
        
        for($m = 0; $m < 3; ++$m)
        {
            $ryuCoin = rand(1, 6);
            $ryu += $ryuCoin;
        }

        $wealth = $ryu . ' ryu, ' . $shu . ' shu & ' . $mon  . ' mon';
    }

    if($input == 3)
    {
        for($k = 0; $k < 3; ++$k)
        {
            $monCoin = rand(1, 12);
            $mon += $monCoin;
        }
        
        for($i = 0; $i < 3; ++$i)
        {
            $shuCoin = rand(1, 12);
            $shu += $shuCoin;
        }
        
        for($m = 0; $m < 3; ++$m)
        {
            $ryuCoin = rand(1, 12);
            $ryu += $ryuCoin;
        }

        $wealth = $ryu . ' ryu, ' . $shu . ' shu & ' . $mon  . ' mon';
    }
    
    if($input == 4)
    {
        for($i = 0; $i < 6; ++$i)
        {
            $shuCoin = rand(1, 12);
            $shu += $shuCoin;
        }
        
        for($m = 0; $m < 6; ++$m)
        {
            $ryuCoin = rand(1, 12);
            $ryu += $ryuCoin;
        }

        $wealth = $ryu . ' ryu & ' . $shu . ' shu';
    }
    
    if($input == 5)
    {
        for($i = 0; $i < 6; ++$i)
        {
            $shuCoin = rand(1, 12);
            $shu += $shuCoin;
        }
        
        for($m = 0; $m < 12; ++$m)
        {
            $ryuCoin = rand(1, 12);
            $ryu += $ryuCoin;
        }

        $wealth = $ryu . ' ryu & ' . $shu . ' shu';
    }
    return $wealth;

}


?>