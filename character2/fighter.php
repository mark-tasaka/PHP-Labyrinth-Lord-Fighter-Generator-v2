<!DOCTYPE html>
<html>
<head>
<title>Labyrinth Lord Fighter Character Generator Version 2</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics Fighter Character Generator..">
	<meta name="keywords" content="Dungeon Crawl Classics,,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2022">
    
    <link rel="icon" href="../../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/fighter.css">
    
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/classDetails.php';
    include 'php/abilityScoreGen.php';
    include 'php/xp.php';
    include 'php/diceRoll.php';
    include 'php/wealth.php';
    include 'php/nameSelect.php';
    include 'php/gender.php';
    include 'php/languages.php';
    include 'php/movementRate.php';
    


        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }

        if(isset($_POST["theGivenName"]))
        {
            $givenName = $_POST["theGivenName"];

        }

        if($givenName == '100')
        {
            $givenName = rand(0, 49);
        }
        else
        {
            $givenName = $givenName;
        }
        


        if(isset($_POST["theSurname"]))
        {
            $surname = $_POST["theSurname"];

        }

        if($surname == '100')
        {
            $surname = rand(0, 37);
        }
        else
        {
            $surname = $surname;
        }


        if(isset($_POST['theCheckBoxCustomName']) && $_POST['theCheckBoxCustomName'] == 1) 
        {
            $givenName = 200;
            $surname = 200;
            
        } 
    
            
        if(isset($_POST["theGender"]))
        {
            $gender = $_POST["theGender"];
        }
        
        $genderName = getGenderName($gender);
        $genderNameIdentifier = genderNameGeneration ($gender);
        
        $fullName = getName($givenName, $surname, $genderNameIdentifier);
        
        


        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 

        
        
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
    
        }


        
        $xpNextLevel = getXPNextLevel ($level);
        
        /*
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }*/
        
        
        if(isset($_POST["theWealth"]))
        {
            $wealthOption = $_POST["theWealth"];
        
        } 
        
        $coinsArray = array();
        $coinCount = 0;

        $silverCoins = getSilver($wealthOption);
        $coinCount += $silverCoins;
        array_push($coinsArray, $silverCoins);
        
        $electrumCoins = getElectrum($wealthOption);
        $coinCount += $electrumCoins;
        array_push($coinsArray, $electrumCoins);
        
        $goldCoins = getGold($wealthOption);
        $coinCount += $goldCoins;
        array_push($coinsArray, $goldCoins);
        
        $platnumCoins = getPlatnum($wealthOption);
        $coinCount += $platnumCoins;
        array_push($coinsArray, $platnumCoins);

        $coinWeightDecimal = $coinCount * 0.1;

        $coinWeight = ceil($coinWeightDecimal);

        $wealth = getWealth($wealthOption, $coinsArray);

        if(isset($_POST['theCustomAbilityScore']) && $_POST['theCustomAbilityScore'] == 1) 
        {        
            
            if(isset($_POST["theStrength"]))
            {
                $strengthString = $_POST["theStrength"];
                $strength = intval($strengthString);
            }      

            if(isset($_POST["theDexterity"]))
            {
                $dexterityString = $_POST["theDexterity"];
                $dexterity = intval($dexterityString);
            }     

            if(isset($_POST["theConstitution"]))
            {
                $constitutionString = $_POST["theConstitution"];
                $constitution = intval($constitutionString);
            }       

            if(isset($_POST["theIntelligence"]))
            {
                $intelligenceString = $_POST["theIntelligence"];
                $intelligence = intval($intelligenceString);
            }  

            if(isset($_POST["theWisdom"]))
            {
                $wisdomString = $_POST["theWisdom"];
                $wisdom = intval($wisdomString);
            }  

            if(isset($_POST["theCharisma"]))
            {
                $charismaString = $_POST["theCharisma"];
                $charisma = intval($charismaString);
            }  

            $nameGenMessage = "Custom Name";
            $generationMessage = "Custom Ability Scores";

        }
        else
        {        if(isset($_POST["theAbilityScore"]))
            {
                $abilityScoreGen = $_POST["theAbilityScore"];
            
            }
            
            
            $abilityScoreArray = array();
            
            for($i = 0; $i < 6; ++$i)
            {
                $abilityScore = rollAbilityScores ($abilityScoreGen);
    
                array_push($abilityScoreArray, $abilityScore);
    
            }       
    
            $strength = $abilityScoreArray[0];
            $dexterity = $abilityScoreArray[1];
            $constitution = $abilityScoreArray[2];
            $intelligence = $abilityScoreArray[3];
            $wisdom = $abilityScoreArray[4];
            $charisma = $abilityScoreArray[5];
            
            
            $nameGenMessage = getNameDescript($givenName, $surname);
            $generationMessage = generationMesssage ($abilityScoreGen);

        } 

        
        $strengthMod = getAbilityModifier($strength);
        $dexterityMod = getAbilityModifier($dexterity);
        $constitutionMod = getAbilityModifier($constitution);
        $intelligenceMod = getAbilityModifier($intelligence);
        $wisdomMod = getAbilityModifier($wisdom);
        $charismaMod = getAbilityModifier($charisma);


        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }
    
        $armourName = getArmour($armour)[0];
        
        $armourACBonus = getArmour($armour)[1];
        $armourWeight = getArmour($armour)[2];

        if(isset($_POST['theCheckBoxShield']) && $_POST['theCheckBoxShield'] == 1) 
        {
            $shield = 1;
        }
        else
        {
            $shield = 0;
        }
        
    
        $shieldName = getShield($shield)[0];
        
        $shieldACBonus = getShield($shield)[1];
        $shieldWeight = getShield($shield)[2];

       $totalAcDefense = $armourACBonus + $shieldACBonus;


       //$speed = 30;


       $baseArmourClass = 9 - $dexterityMod;

       $armourClass = $baseArmourClass + $totalAcDefense;


       //Hit Points
       $hitPoints = getHitPoints($level, $constitutionMod);



        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
    
    //For Random Select weapon
    if(isset($_POST['thecheckBoxRandomWeaponsV3']) && $_POST['thecheckBoxRandomWeaponsV3'] == 1) 
    {
        $weaponArray = getRandomWeapons();

    }
    else
    {
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    }

    
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }

    $armourAndWeapomWeight = $totalWeaponWeight + $armourWeight + $shieldWeight;
    
        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    

    //For Random Select gear
    if(isset($_POST['theCheckBoxRandomGear']) && $_POST['theCheckBoxRandomGear'] == 1) 
    {
        $gearArray = getRandomGear();


    }
    else
    {
        //For Manually select gear
        if(isset($_POST["theGear"]))
            {
                foreach($_POST["theGear"] as $gear)
                {
                    array_push($gearArray, $gear);
                }
            }

    }

    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        foreach($gearArray as $select)
        {
            array_push($gearWeight, getGear($select)[1]);
        }
        
        $totalWeightGear = 0;

        foreach($gearArray as $select)
        {
            $totalWeightGear += getGear($select)[1];
        }

        $totalWeightCarried = $armourAndWeapomWeight + $totalWeightGear + $coinWeight;

        $turnMovement = turnMovement($totalWeightCarried);
        $encounterMovement = encounterMovement($totalWeightCarried);
        $runningMovement = runningMovement($totalWeightCarried);

        $saveBreath = saveBreathAttack($level);
        $savePoisonDeath = savePoisonDeath($level);
        $savePetrify = savePetrify($level);
        $saveWands = saveWands($level);
        $saveWands -= $wisdomMod;
        $saveSpells = saveSpells($level);
        $saveSpells -= $wisdomMod;
    
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
       
           
        <span id="strength">
        <?php
            echo $strength;
            ?>
        </span>

        
        <span id="strengthMod">
        <?php
            ?>
        </span>

		<span id="dexterity">
        <?php
            echo $dexterity;
            ?>
        </span>

          <span id="dexterityMod">
        <?php
            ?>
        </span>

           
		<span id="constitution">
        <?php
            echo $constitution;
            ?>
        </span>

          <span id="constitutionMod">
        <?php
            ?>
        </span>
        
		<span id="intelligence">
        <?php
            echo $intelligence;
            ?>
        </span>

         <span id="intelligenceMod">
        <?php
            ?>
        </span>

		<span id="wisdom">
        <?php
            echo $wisdom;
            ?>
        </span>

         <span id="wisdomMod">
        <?php
            ?>
        </span>


		<span id="charisma">
        <?php
            echo $charisma;
            ?>
        </span>

         <span id="charismaMod">
        <?php
            ?>
        </span>

       
       <span id="gender">
           <?php
           echo $genderName;
           ?>
       </span>
       
       
       
       <span id="class">Fighter</span>
       
       <span id="armourClass">
           <?php
           echo $armourClass;
           ?>
           </span>

       
           <span id="armourClassBase">
           <?php
           echo '(' . $baseArmourClass . ')';
           ?>
           </span>
       
       <span id="hitPoints">
           <?php
           echo $hitPoints;
           ?>
           </span>


       

       <span id="wealth">
       <?php
           echo $wealth;
           ?>
       </span>

       
       <span id="coinWeight">
       <?php
           echo $coinWeight;
           ?>
       </span>

       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>

        
       <span id="xpNextLevel">
           <?php
                echo $xpNextLevel;
           ?>
        </span>

       

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>

             
       <span id="characterName2">
           <?php
                echo $fullName;
           ?>
        </span>

              
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
       
       
       
              
         <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
        
        <span id="speed">
           <?php
           ?></span>
        


              
       <span id="armourName">
           <?php
                echo $armourName;
           ?>
        </span>

        <span id="armourACBonus">
            <?php
                echo $armourACBonus;
            ?>
        </span>

        
        <span id="armourWeight">
            <?php
                echo $armourWeight;
            ?>
        </span>

                      
       <span id="shieldName">
           <?php

           if($shield === 1)
           {
                echo $shieldName;
           }
           ?>
        </span>
              
       <span id="shieldACBonus">
           <?php
           if($shield === 1)
           {
                echo $shieldACBonus;
           }
           ?>
        </span>
              
       <span id="shieldWeight">
           <?php
           
           if($shield === 1)
           {
                echo $shieldWeight;
           }
           ?>
        </span>
        

       
        <span id="weaponsList">
           <?php
           $val1 = 0;
           $val2 = 0;
           $val3 = 0;
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
               $val1 = isWeaponTwoHanded($theWeapon, $val1);
               $val2 = isWeaponBastardSword($theWeapon, $val2);
           }
           
           $val3 = $val1 + $val2;
           
           $weaponNotes = weaponNotes($val3);
           
           ?>  
        </span>
       
       <span id="weaponNotes">
           <?php
                echo $weaponNotes;
           ?>
        </span>
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

            
       <span id="weaponsList3">
           <?php
           foreach($weaponWeight as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           ?>        
        </span>
       
       <span id="totalWeaponWeight">
           <?php
           echo $armourAndWeapomWeight;
           ?>
       </span>

       

       <span id="gearList">
           <?php
           foreach($gearNames as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>
       </span>

       
       <span id="gearList2">
           <?php
           foreach($gearWeight as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>
       </span>

       <span id="totalWeightCarried">
           <?php
                echo $totalWeightCarried . " lbs.";
           ?>
       </span>



       <span id="totalWeightGear">
           <?php
                echo $totalWeightGear;
           ?>
       </span>

        <span id="turnMovement">
           <?php
                echo $turnMovement;
           ?>
       </span>
       
       <span id="encounterMovement">
           <?php
                echo $encounterMovement;
           ?>
       </span>

       <span id="runningMovement">
           <?php
                echo $runningMovement;
           ?>
       </span>



       <span id="abilityScoreGeneration">
            <?php
           echo $generationMessage . '; ' . $nameGenMessage;
           ?>
       </span>
       
       <span id="saveBreath">
           <?php
                echo $saveBreath;
           ?>
       </span>

       <span id="savePoisonDeath">
           <?php
                echo $savePoisonDeath;
           ?>
       </span>

       <span id="savePetrify">
           <?php
                echo $savePetrify;
           ?>
       </span>

        <span id="saveWands">
            <?php
                echo $saveWands;
            ?>
        </span>

        <span id="saveSpells">
            <?php
                echo $saveSpells;
            ?>
        </span>
        
       

       
	</section>
	

		
  <script>
      

  
       let imgData = "images/fighter.png";
      
        $("#character_sheet").attr("src", imgData);
      

    
	 
  </script>
		
	
    
</body>
</html>