<!DOCTYPE html>
<html>
<head>
<title>Dungeon Crawl Classics Empire of the East Zero Level Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics Empire of the East Zero Level Character Generator. Goodman Games.">
	<meta name="keywords" content="Dungeon Crawl Classics, Jim Wampler, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
		

	<link rel="stylesheet" type="text/css" href="css/dcc_zero_characters.css">
    
    
   <!--<script type="text/javascript" src="js/occupation.js"></script>-->
    
    <script type="text/javascript" src="js/luckySign.js"></script>
   <script type="text/javascript" src="js/adjustments.js"></script>
    
    
</head>
<body>
    
    <!--- php --->
    
    <?php
    
    include 'php/characterSex.php';
    include 'php/characterName.php';
    include 'php/alignment.php';
    include 'php/diceRoll.php';
    include 'php/message.php';
    include 'php/zeroLvOccupation.php';
    include 'php/abilityScoreGen.php';
    
        
        if(isset($_POST["theSex"]))
        {
            $characterSex = $_POST["theSex"];
    
        }
    
    
        $sexOfCharacter0 = getSex($characterSex);
        $sexOfCharacter1 = getSex($characterSex);
        $sexOfCharacter2 = getSex($characterSex);
        $sexOfCharacter3 = getSex($characterSex);
    
        $characterName0 = getCharacterName($sexOfCharacter0);
        $characterName1 = getCharacterName($sexOfCharacter1);
        $characterName2 = getCharacterName($sexOfCharacter2);
        $characterName3 = getCharacterName($sexOfCharacter3);

        $characterSurname0 = getSurname();
        $characterSurname1 = getSurname();
        $characterSurname2 = getSurname();
        $characterSurname3 = getSurname();
    
        if(isset($_POST["theCharacterName"]))
        {
            $nameOption = $_POST["theCharacterName"];
    
        }
    
            
        if(isset($_POST["theAlignment"]))
        {
            $alignOption = $_POST["theAlignment"];
        }
    
        $characterAlignment0 = getAlignment($alignOption);
        $characterAlignment1 = getAlignment($alignOption);
        $characterAlignment2 = getAlignment($alignOption);
        $characterAlignment3 = getAlignment($alignOption);

        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }

        $abilityScoreArray0 = array();
        $abilityScoreArray1 = array();
        $abilityScoreArray2 = array();
        $abilityScoreArray3 = array();
        

        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray0, $abilityScore);

        }       
        
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray1, $abilityScore);

        }       
        
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray2, $abilityScore);

        }       
        
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray3, $abilityScore);

        }

        $strength0 = $abilityScoreArray0[0];
        $agility0 = $abilityScoreArray0[1];
        $stamina0 = $abilityScoreArray0[2];
        $personality0 = $abilityScoreArray0[3];
        $intelligence0 = $abilityScoreArray0[4];
        $luck0 = $abilityScoreArray0[5];
        
        $strengthMod0 = getAbilityModifier($strength0);
        $agilityMod0 = getAbilityModifier($agility0);
        $staminaMod0 = getAbilityModifier($stamina0);
        $personalityMod0 = getAbilityModifier($personality0);
        $intelligenceMod0 = getAbilityModifier($intelligence0);
        $luckMod0 = getAbilityModifier($luck0);

        $strength1 = $abilityScoreArray1[0];
        $agility1 = $abilityScoreArray1[1];
        $stamina1 = $abilityScoreArray1[2];
        $personality1 = $abilityScoreArray1[3];
        $intelligence1 = $abilityScoreArray1[4];
        $luck1 = $abilityScoreArray1[5];
        
        $strengthMod1 = getAbilityModifier($strength1);
        $agilityMod1 = getAbilityModifier($agility1);
        $staminaMod1 = getAbilityModifier($stamina1);
        $personalityMod1 = getAbilityModifier($personality1);
        $intelligenceMod1 = getAbilityModifier($intelligence1);
        $luckMod1 = getAbilityModifier($luck1);
        
        $strength2 = $abilityScoreArray2[0];
        $agility2 = $abilityScoreArray2[1];
        $stamina2 = $abilityScoreArray2[2];
        $personality2 = $abilityScoreArray2[3];
        $intelligence2 = $abilityScoreArray2[4];
        $luck2 = $abilityScoreArray2[5];
        
        $strengthMod2 = getAbilityModifier($strength2);
        $agilityMod2 = getAbilityModifier($agility2);
        $staminaMod2 = getAbilityModifier($stamina2);
        $personalityMod2 = getAbilityModifier($personality2);
        $intelligenceMod2 = getAbilityModifier($intelligence2);
        $luckMod2 = getAbilityModifier($luck2);
        
        $strength3 = $abilityScoreArray3[0];
        $agility3 = $abilityScoreArray3[1];
        $stamina3 = $abilityScoreArray3[2];
        $personality3 = $abilityScoreArray3[3];
        $intelligence3 = $abilityScoreArray3[4];
        $luck3 = $abilityScoreArray3[5];
        
        $strengthMod3 = getAbilityModifier($strength3);
        $agilityMod3 = getAbilityModifier($agility3);
        $staminaMod3 = getAbilityModifier($stamina3);
        $personalityMod3 = getAbilityModifier($personality3);
        $intelligenceMod3 = getAbilityModifier($intelligence3);
        $luckMod3 = getAbilityModifier($luck3);

        $dieRollMessage = dieRollMethodText($abilityScoreGen);

        
        
        if(isset($_POST["theHitPoints"]))
        {
            $hitPointsGen = $_POST["theHitPoints"];
        
        }

        $hitPointsMessage = hitPointsMethodText($hitPointsGen);

        $hitPoints = 0;

        if($hitPointsGen == "1")
        {
            
            $hitPoints = rand(1, 4);

        }

        if($hitPointsGen == "2")
        {
            
            $hitPoints = 4;
        }

        $professionNum0 = getOccupationNumber(); 
        $professionNum1 = getOccupationNumber(); 
        $professionNum2 = getOccupationNumber(); 
        $professionNum3 = getOccupationNumber(); 

        $occupationArray0 = array();
        $occupationArray1 = array();
        $occupationArray2 = array();
        $occupationArray3 = array();

        $occupationArray0 = getOccupationArray($professionNum0);
        $occupationArray1 = getOccupationArray($professionNum1);
        $occupationArray2 = getOccupationArray($professionNum2);
        $occupationArray3 = getOccupationArray($professionNum3);

        
        $profession0 = $occupationArray0[0];
        $profession1 = $occupationArray1[0];
        $profession2 = $occupationArray2[0];
        $profession3 = $occupationArray3[0];

        $trainedWeapon0 = $occupationArray0[1];
        $trainedWeapon1 = $occupationArray1[1];
        $trainedWeapon2 = $occupationArray2[1];
        $trainedWeapon3 = $occupationArray3[1];

        $weaponDamage0 = $occupationArray0[2];
        $weaponDamage1 = $occupationArray1[2];
        $weaponDamage2 = $occupationArray2[2];
        $weaponDamage3 = $occupationArray3[2];

        //$trainedWeapon0 = 

    ?>

    
    
    
<!--Version 3: JQuery  -->
	

  <img id="character_sheet"/>
   <section>
       
	   <aside id="topleft">
    	<span id="name0">
           <?php
            if($nameOption == 0)
               {
                    echo $characterName0 . ' ' . $characterSurname0;   
               }
            else
            {
                echo '';
            }
            ?>
           </span>
           
		<span id="strength0">
        <?php
            echo $strength0;
            ?>
        </span>

        
        <span id="strengthMod0">
        <?php
            echo $strengthMod0;
            ?>
        </span>

		<span id="agility0">
        <?php
            echo $agility0;
            ?>
        </span>

          <span id="agilityMod0">
        <?php
            echo $agilityMod0;
            ?>
        </span>

           
		<span id="stamina0">
        <?php
            echo $stamina0;
            ?>
        </span>

          <span id="staminaMod0">
        <?php
            echo $staminaMod0;
            ?>
        </span>

		<span id="personality0">
        <?php
            echo $personality0;
            ?>
        </span>

         <span id="personalityMod0">
        <?php
            echo $personalityMod0;
            ?>
        </span>

		<span id="intelligence0">
        <?php
            echo $intelligence0;
            ?>
        </span>

         <span id="intelligenceMod0">
        <?php
            echo $intelligenceMod0;
            ?>
        </span>

		<span id="luck0">
        <?php
            echo $luck0;
            ?>
        </span>

         <span id="luckMod0">
        <?php
            echo $luckMod0;
            ?>
        </span>

           
		<p id="birthAugur0"><span id="luckySign0"></span>: <span id="luckyRoll0"></span> (<span id="LuckySignBonus0"></span>)</p>
           
        
        <p id="armourClass0"> <span id="modifiedAC0"></span>(<span id="baseAC0"></span>)</p>

		<span id="hitPoints0"></span> 
           
        <span id="ref0"></span>
        <span id="fort0"></span>
        <span id="will0"></span>
		   
        <span id="init0"></span>
		<span id="melee0"></span>
        <span id="range0"></span>
		<span id="meleeDamage0"></span>
		 <span id="rangeDamage0"></span>
           
        <span id="fumbleDie0"></span>
           
        <span id="sex0">
           <?php
            
            echo $sexOfCharacter0;
            
            ?>
           </span>
           
           
        <span id="alignment0">
           <?php
            
            echo $characterAlignment0;
            
            ?>
           </span>

        <span id="profession0">
           <?php
            
            echo $profession0;
            
            ?>
        </span>

        <span id="weapon0">
           <?php
            
            echo $trainedWeapon0;
            
            ?>
        </span>
        <span id="weaponDamage0">
           <?php
            
            echo $weaponDamage0;
            
            ?>
        </span>
           
           
		<span id="critDie0"></span>
		<!--<span id="critTable0"></span>-->
           
           <span id="wealth0"></span>
           
           <span id="languages0"><span id="baseLanguage0"></span><span id="addLanguages0"></span></span>
		 
           <span id="speed0"></span>
           
           <span id="physicalDescription0"></span>
           
          <!-- <span id="weapons0"><span id="professionWeapon0"></span><span id="randomWeapon0"></span></span>
		   
           <span id="weaponDamage0"><span id="professionalWeaponDamage0"></span><span id="randomWeaponDamage0"><span id="randomWeaponDamageAdjustment"></span></span></span>
           -->

           <span id="equipment0"></span>
           
           <!--<span id="tradeGood0"></span>-->
           
           <span id="armour0"></span>
           <span id="acBonus0"></span>
           <span id="armourFumble0"></span>
		   <span id="dieRollMethod0"> 
           <?php
            
            echo $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>

           <!--<p id="notes0"><span id="raceAbility0"></span><span id="animal0"></span><span id="farmAnimal0"></span></p>
-->
           <span id="damageBonus0"></span>
           	   
		</aside>

              
	   <aside id="topright">
    	<span id="name1">
           <?php
            if($nameOption == 0)
               {
                    echo $characterName1 . ' ' . $characterSurname1;   
               }
            else
            {
                echo '';
            }
            ?>
           </span>

           <span id="strength1">
        <?php
            echo $strength1;
            ?>
        </span>

        
        <span id="strengthMod1">
        <?php
            echo $strengthMod1;
            ?>
        </span>

		<span id="agility1">
        <?php
            echo $agility1;
            ?>
        </span>

          <span id="agilityMod1">
        <?php
            echo $agilityMod1;
            ?>
        </span>

           
		<span id="stamina1">
        <?php
            echo $stamina1;
            ?>
        </span>

          <span id="staminaMod1">
        <?php
            echo $staminaMod1;
            ?>
        </span>

		<span id="personality1">
        <?php
            echo $personality1;
            ?>
        </span>

         <span id="personalityMod1">
        <?php
            echo $personalityMod1;
            ?>
        </span>

		<span id="intelligence1">
        <?php
            echo $intelligence1;
            ?>
        </span>

         <span id="intelligenceMod1">
        <?php
            echo $intelligenceMod1;
            ?>
        </span>

		<span id="luck1">
        <?php
            echo $luck1;
            ?>
        </span>

         <span id="luckMod1">
        <?php
            echo $luckMod1;
            ?>
        </span>

           
		<p id="birthAugur1"><span id="luckySign1"></span>: <span id="luckyRoll1"></span> (<span id="LuckySignBonus1"></span>)</p>
           
        <p id="armourClass1"> <span id="modifiedAC1"></span>(<span id="baseAC1"></span>)</p>

           
		<span id="hitPoints1"></span> 
           
        <span id="ref1"></span>
        <span id="fort1"></span>
        <span id="will1"></span>
		   
        <span id="init1"></span>
		<span id="melee1"></span>
        <span id="range1"></span>
		<span id="meleeDamage1"></span>
		 <span id="rangeDamage1"></span>
           
        <span id="fumbleDie1"></span>
           
        <span id="sex1">
           
           <?php
            
            echo $sexOfCharacter1;
            
            ?>
           </span>
           
        <span id="alignment1">
           <?php
            
            echo $characterAlignment1;
            
            ?>
           </span>

           
        <span id="profession1">
           <?php
            
            echo $profession1;
            
            ?>
        </span>
        
        <span id="weapon1">
           <?php
            
            echo $trainedWeapon1;
            
            ?>
        </span>
        <span id="weaponDamage1">
           <?php
            
            echo $weaponDamage1;
            
            ?>
        </span>
           
		<span id="critDie1"></span>
		<!--<span id="critTable1"></span>-->
           
                      
           <span id="wealth1"></span>
           
           <span id="languages1"><span id="baseLanguage1"></span><span id="addLanguages1"></span></span>
		 
           <span id="speed1"></span>
           
           <span id="physicalDescription1"></span>
           
           <!--
           <span id="weapons1"><span id="professionWeapon1"></span><span id="randomWeapon1"></span></span>
		   
           <span id="weaponDamage1"><span id="professionalWeaponDamage1"></span><span id="randomWeaponDamage1"><span id="randomWeaponDamageAdjustment"></span></span></span>-->
           
           <span id="equipment1"></span>
           <!--<span id="tradeGood1"></span>-->
           
           <span id="armour1"></span>
           <span id="acBonus1"></span>
           <span id="armourFumble1"></span>
           <span id="dieRollMethod1">
           <?php
            
            echo $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>
           
           <!--<p id="notes1"><span id="raceAbility1"></span><span id="animal1"></span><span id="farmAnimal1"></span></p>-->
           
           
           <span id="damageBonus1"></span>
           	   
		</aside>
	    
       
                     
	   <aside id="bottomleft">
    	<span id="name2">
            
           <?php
            if($nameOption == 0)
               {
                    echo $characterName2 . ' ' . $characterSurname2;   
               }
            else
            {
                echo '';
            }
            ?>
           </span>
           
 
           <span id="strength2">
        <?php
            echo $strength2;
            ?>
        </span>

        
        <span id="strengthMod2">
        <?php
            echo $strengthMod2;
            ?>
        </span>

		<span id="agility2">
        <?php
            echo $agility2;
            ?>
        </span>

          <span id="agilityMod2">
        <?php
            echo $agilityMod2;
            ?>
        </span>

           
		<span id="stamina2">
        <?php
            echo $stamina2;
            ?>
        </span>

          <span id="staminaMod2">
        <?php
            echo $staminaMod2;
            ?>
        </span>

		<span id="personality2">
        <?php
            echo $personality2;
            ?>
        </span>

         <span id="personalityMod2">
        <?php
            echo $personalityMod2;
            ?>
        </span>

		<span id="intelligence2">
        <?php
            echo $intelligence2;
            ?>
        </span>

         <span id="intelligenceMod2">
        <?php
            echo $intelligenceMod2;
            ?>
        </span>

		<span id="luck2">
        <?php
            echo $luck2;
            ?>
        </span>

         <span id="luckMod2">
        <?php
            echo $luckMod2;
            ?>
        </span>

           
		<p id="birthAugur2"><span id="luckySign2"></span>: <span id="luckyRoll2"></span> (<span id="LuckySignBonus2"></span>)</p>
          
        <p id="armourClass2"> <span id="modifiedAC2"></span>(<span id="baseAC2"></span>)</p>

           
		<span id="hitPoints2"></span> 
           
        <span id="ref2"></span>
        <span id="fort2"></span>
        <span id="will2"></span>
		   
        <span id="init2"></span>
		<span id="melee2"></span>
        <span id="range2"></span>
		<span id="meleeDamage2"></span>
		 <span id="rangeDamage2"></span>
           
        <span id="fumbleDie2"></span>
           
        <span id="sex2">
           
           <?php
            
            echo $sexOfCharacter2;
            
            ?>
           </span>
           
        <span id="alignment2">
           <?php
            
            echo $characterAlignment2;
            
            ?>
           </span>
           
        <span id="profession2">
           <?php
            
            echo $profession2;
            
            ?>
        </span>
        
        <span id="weapon2">
           <?php
            
            echo $trainedWeapon2;
            
            ?>
        </span>
        <span id="weaponDamage2">
           <?php
            
            echo $weaponDamage2;
            
            ?>
        </span>
           
		<span id="critDie2"></span>
           
                      
           <span id="wealth2"></span>
           
           <span id="languages2"><span id="baseLanguage2"></span><span id="addLanguages2"></span></span>
		 
           <span id="speed2"></span>
           
           <span id="physicalDescription2"></span>
           
           <!--
           <span id="weapons2"><span id="professionWeapon2"></span><span id="randomWeapon2"></span></span>
		   
           <span id="weaponDamage2"><span id="professionalWeaponDamage2"></span><span id="randomWeaponDamage2"><span id="randomWeaponDamageAdjustment"></span></span></span>-->
           
           <span id="equipment2"></span>
           <!--<span id="tradeGood2"></span>-->
           
           <span id="armour2"></span>
           <span id="acBonus2"></span>
           <span id="armourFumble2"></span>
           <span id="dieRollMethod2">
           <?php
            
            echo $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>
           
           
           <!--<p id="notes2"><span id="raceAbility2"></span><span id="animal2"></span><span id="farmAnimal2"></span></p>-->
           
		</aside>
       
       
                            
	   <aside id="bottomright">
    	<span id="name3">
           <?php
            if($nameOption == 0)
               {
                    echo $characterName3 . ' ' . $characterSurname3;   
               }
            else
            {
                echo '';
            }
            ?></span>

<span id="strength3">
        <?php
            echo $strength3;
            ?>
        </span>

        
        <span id="strengthMod3">
        <?php
            echo $strengthMod3;
            ?>
        </span>

		<span id="agility3">
        <?php
            echo $agility3;
            ?>
        </span>

          <span id="agilityMod3">
        <?php
            echo $agilityMod3;
            ?>
        </span>

           
		<span id="stamina3">
        <?php
            echo $stamina3;
            ?>
        </span>

          <span id="staminaMod3">
        <?php
            echo $staminaMod3;
            ?>
        </span>

		<span id="personality3">
        <?php
            echo $personality3;
            ?>
        </span>

         <span id="personalityMod3">
        <?php
            echo $personalityMod3;
            ?>
        </span>

		<span id="intelligence3">
        <?php
            echo $intelligence3;
            ?>
        </span>

         <span id="intelligenceMod3">
        <?php
            echo $intelligenceMod3;
            ?>
        </span>

		<span id="luck3">
        <?php
            echo $luck3;
            ?>
        </span>

         <span id="luckMod3">
        <?php
            echo $luckMod3;
            ?>
        </span>

           
        <p id="birthAugur3"><span id="luckySign3"></span>: <span id="luckyRoll3"></span> (<span id="LuckySignBonus3"></span>)</p>
        
        <p id="armourClass3"> <span id="modifiedAC3"></span>(<span id="baseAC3"></span>)</p>
           

		<span id="hitPoints3"></span> 
           
        <span id="ref3"></span>
        <span id="fort3"></span>
        <span id="will3"></span>
		   
        <span id="init3"></span>
		<span id="melee3"></span>
        <span id="range3"></span>
		<span id="meleeDamage3"></span>
		 <span id="rangeDamage3"></span>
           
        <span id="fumbleDie3"></span>
           
        <span id="sex3">
           
           <?php
            
            echo $sexOfCharacter3;
            
            ?>
           </span>
           
           
        <span id="alignment3">
           <?php
            
            echo $characterAlignment3;
            
            ?>
           </span>
           
        <span id="profession3">
           <?php
            
            echo $profession3;
            
            ?>
        </span>
        
        <span id="weapon3">
           <?php
            
            echo $trainedWeapon3;
            
            ?>
        </span>
        <span id="weaponDamage3">
           <?php
            
            echo $weaponDamage3;
            
            ?>
        </span>
           
		<span id="critDie3"></span>
                      
           <span id="wealth3"></span>
           
           <span id="languages3"><span id="baseLanguage3"></span><span id="addLanguages3"></span></span>
		 
           <span id="speed3"></span>
           
           <span id="physicalDescription3"></span>

           <!--
           
           <span id="weapons3"><span id="professionWeapon3"></span><span id="randomWeapon3"></span></span>
		   
           <span id="weaponDamage3"><span id="professionalWeaponDamage3"></span><span id="randomWeaponDamage3"><span id="randomWeaponDamageAdjustment"></span></span></span>-->
           
           <span id="equipment3"></span>
           <!--<span id="tradeGood3"></span>-->
           
           <span id="armour3"></span>
           <span id="acBonus3"></span>
           <span id="armourFumble3"></span>
           <span id="dieRollMethod3">
           <?php
            
            echo $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>
           
           
           <!--<p id="notes3"><span id="raceAbility3"></span><span id="animal3"></span><span id="farmAnimal3"></span></p>-->

           <span id="damageBonus3"></span>
           	   
		</aside>
       
       
	   	   
	</section>
	

		
  <script>
	  

      
      	  /*
	  rollDice (numberOfSides, numberOfDiceRolled, numberOfDiceRemoved, baseValue)
	  
	  numberOfSides - represents how many sides that they die has (ie. d4, d5, d6)
	  
	  numberOfDiceRolled - represents the number of dice rolled
	  
	  numberOfDiceRemoved - represents the number of dice removed (ie. roll 4 d6 and drop the lowest). The die/dice with the lowest values will always be removed.
	  
	  baseValue - represents the base value that it added to the die rolls.  For instance, a base value of 6 is added to the rolls of 2D6, which is represented as 2D6+6 in game mechanics.
	  */
	  	function rollDice(numberOfSides, numberOfDiceRolled, numberOfDiceRemoved, baseValue) {
		
		if(numberOfSides === undefined || typeof numberOfSides !== 'number'||numberOfSides <=2 || numberOfSides >=30){
			numberOfSides = 6;
		}
		
		if(numberOfDiceRolled < 0){
			numberOfDiceRolled =2;
		}
		
		if(numberOfDiceRemoved === undefined || typeof numberOfDiceRemoved !== 'number'||numberOfDiceRemoved >= numberOfDiceRolled){
			numberOfDiceRemoved =0;
		}
		
		if(baseValue === undefined || typeof baseValue !== 'number'||baseValue < 0){
			baseValue = 0;
		}
		
		let numbers = [];
		

		for(let i = 0; i < numberOfDiceRolled; i++){
			numbers[i] = Math.floor((Math.random() * 6) + 1);
		}
		
        numbers.sort();
        
		let sum = baseValue;
			
		for(let i = numberOfDiceRemoved; i < numberOfDiceRolled; i++){
			sum += numbers[i];
		}
			
		return sum ;
	}
      
      
	  
	/*
	 Character() - Zero Level Character Constructor
	*/
//	function Character() {

   /*
	//let	profession = getOccupation();
	let birthAugur = getLuckySign();
	let strengthModifier = getStrengthModifier(strength);
	let staminaModifier = getStaminaModifier(stamina);
	let agilityModifier = getAgilityModifier(agility);
	let personalityModifier = getPersonalityModifier(personality);
	let intelligenceModifier = getIntelligenceModifier(intelligence);
    let luckModifier = getLuckModifier(luck);
    //let species = profession.race;
    //let language = getBaseLanguages(species, intelligence, luckModifier, species);
   // let bonusLanguages = getBonusLanguages(intelligenceModifier, birthAugur);
    let randomItem = getStartingEquipment();
    //let armour = getArmour(profession);
	let baseAC = getBaseArmourClass(agilityModifier)  + adjustAC(birthAugur, luckModifier);
    let acBonus = getArmourProtection(armour);
		*/

	/*	let zeroLevelCharacter = {
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"personality": personality,
			"intelligence": intelligence,
			"luck": luck,
			"strengthModifier": strengthModifier,
			"agilityModifier": agilityModifier,
			"staminaModifier": staminaModifier,
			"personalityModifier": personalityModifier,
			"intelligenceModifier": intelligenceModifier,
			"luckModifier":  getLuckModifier(luck),
			//"profession":  profession.occupation,
			"luckySign": birthAugur.luckySign,
			"luckyRoll": birthAugur.luckyRoll,
            "luckySignBonus": getLuckModifier(luck),
			"hitPoints":  + staminaModifier + hitPointAdjustPerLevel(birthAugur,  getLuckModifier(luck)),
			"ref": agilityModifier + adjustRef(birthAugur, getLuckModifier(luck)),
			"fort": staminaModifier + adjustFort(birthAugur, getLuckModifier(luck)),
			"will": personalityModifier + adjustWill(birthAugur, getLuckModifier(luck)),
			"init": agilityModifier + adjustInit(birthAugur, getLuckModifier(luck)),
            "melee": strengthModifier + meleeAdjust(birthAugur, getLuckModifier(luck)),
            "meleeDamage": strengthModifier + meleeDamageAdjust(birthAugur, getLuckModifier(luck)),
			"range": agilityModifier + rangeAdjust(birthAugur, getLuckModifier(luck)),
			"rangeDamage": rangeDamageAdjust(birthAugur, getLuckModifier(luck)),
			"critDie": "d4" + addSign(adjustCrit(birthAugur, getLuckModifier(luck))) + "/I",
           // "baseLanguage": language,
            //"addLanguages": bonusLanguages,
			//"speed": 30 + addLuckToSpeed(birthAugur, getLuckModifier(luck)) + "'",
            //"professionWeapon": profession.trainedWeapon,
            //"professionWeaponDam": profession.damage,
           // "startingItem": randomItem.equipment,
			"fumbleDie": getFumbleDie (armour) + "" + addSign(adjustFumble(birthAugur, getLuckModifier(luck))),
            //"armour": armour,
            //"raceTrait": addRaceAbilities(profession),
            "acNoArmoured": baseAC,
            "acWithArmour": baseAC + acBonus,
            //"tradeGoods": profession.tradeGoods,
			//"animal": addAnimal (profession),
			//"farmAnimal": hasFarmAnimal (profession),
			"wealth": Math.floor((Math.random() * 12)) + Math.floor((Math.random() * 12)) + Math.floor((Math.random() * 12)) + Math.floor((Math.random() * 12)) + Math.floor((Math.random() * 12)) + 5 + " cp"
			
	
			

		};
	    if(zeroLevelCharacter.hitPoints <= 0 ){
			zeroLevelCharacter.hitPoints = 1;
		}
		return zeroLevelCharacter;
	  
	  }
      	*/


	  
        let imgData = "images/dcc_zero_character_sheet.png";
        $("#character_sheet").attr("src", imgData);
        

	  //let data = [Character(),Character(),Character(),Character()];
	// for(let index = 0; index < 4 ; index++){
	  
         
          
          //$("#profession" + index).html(data[index].profession);
          
          /*
          $("#strength" + index).html(data[index].strength);
          $("#strengthMod" + index).html(addModifierSign(data[index].strengthModifier));
          
          $("#agility" + index).html(data[index].agility);
          $("#agilityMod" + index).html(addModifierSign(data[index].agilityModifier));
          
          $("#agility" + index).html(data[index].agility);
          $("#agilityMod" + index).html(addModifierSign(data[index].agilityModifier));
          
          $("#stamina" + index).html(data[index].stamina);
          $("#staminaMod" + index).html(addModifierSign(data[index].staminaModifier));
          
          $("#personality" + index).html(data[index].personality);
          $("#personalityMod" + index).html(addModifierSign(data[index].personalityModifier));
          
          $("#intelligence" + index).html(data[index].intelligence);
          $("#intelligenceMod" + index).html(addModifierSign(data[index].intelligenceModifier));
          
          $("#luck" + index).html(data[index].luck);
          $("#luckMod" + index).html(addModifierSign(data[index].luckModifier));
          */
          /*
          $("#luckySign" + index).html(data[index].luckySign);
          $("#luckyRoll" + index).html(data[index].luckyRoll);
          $("#LuckySignBonus" + index).html(addModifierSign(data[index].luckModifier));
          
          $("#hitPoints" + index).html(data[index].hitPoints);
          $("#baseAC" + index).html(data[index].acNoArmoured);
          $("#modifiedAC" + index).html(data[index].acWithArmour);
          
          $("#ref" + index).html(addModifierSign(data[index].ref));
          $("#fort" + index).html(addModifierSign(data[index].fort));
          $("#will" + index).html(addModifierSign(data[index].will));
          
          $("#init" + index).html(addModifierSign(data[index].init));
          $("#melee" + index).html(addModifierSign(data[index].melee));
          $("#meleeDamage" + index).html(addModifierSign(data[index].meleeDamage));
          $("#range" + index).html(addModifierSign(data[index].range));
          $("#rangeDamage" + index).html(addModifierSign(data[index].rangeDamage));
          
          $("#fumbleDie" + index).html(data[index].fumbleDie);
          
          $("#critDie" + index).html(data[index].critDie);*/
         // $("#critTable" + index).html(data[index].critTable);
          
          
        //  $("#baseLanguage" + index).html(data[index].baseLanguage);
          //$("#addLanguages" + index).html(data[index].addLanguages);
          
       //   $("#speed" + index).html(data[index].speed);
          
        //  $("#professionWeapon" + index).html(data[index].professionWeapon);
          
     //     $("#equipment" + index).html(data[index].startingItem);
          
          //$("#professionalWeaponDamage" + index).html(data[index].professionWeaponDam);
         // $("#randomWeaponDamage" + index).html(data[index].randomWeaponDam);
        //  $("#armour" + index).html(data[index].armour);
     //     $("#acBonus" + index).html(data[index].acBonus);
          
          
	  
	  //  $("#animal" + index ).html(data[index].animal); 
        //  $("#farmAnimal" + index).html(data[index].farmAnimal);
          
         // $("#tradeGood" + index).html(data[index].tradeGoods);
         // $("#raceAbility" + index).html(data[index].raceTrait);
  //        
          


	  
//	  }

  </script>
		
	
    
</body>
</html>