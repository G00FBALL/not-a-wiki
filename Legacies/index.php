<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><img src="http://musicfamily.org/realm/Factions/picks/LegacyBanner.png"></h6>
        <p>
        <h6>Legacies</h6>
           
        <center><b>Legacy Menu</b></center>
        <center><img src="http://musicfamily.org/realm/Factions/picks/LegacyMenu.png" usemap="#Legacies-map"></center>
        <map name="Legacies-map">
        <area href="#FairyBronzeLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/KindHeartsFactionUpgrade.png align=middle><b> Fairy Bronze Legacy</b></p>
		<p><b>Pixie Dust Fertilizer</b></p>
		<p><b>Effect</b>: Increase the base production of Farms by +98.</p>
        	<p><b>Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
        	<p></p>
		<p><b>Fairy Workers</b></p>
        	<p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 15,000%.</p>
        	<p></p>
		<p><b>Kind Hearts</b></p>
        	<p><b>Effect</b>: Increases maximum Mana additively based on Good buildings you own.</p>
        	<p><b>Formula</b>: +(1.3 * x ^ 0.7), where x is the amount of Good buildings you own.</p>
	" coords="10,10,64,64" shape="rect">
	<area href="#FairySilverLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/SpellsmithFactionUpgrade.png align=middle><b> Fairy Silver Legacy</b></p>
		<p><b>Fairy Cuisine</b></p>
		<p><b>Effect</b>: Increase the base production of Inns by +234 and reduce the building cost multiplier.</p>
        	<p><b>Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
        	<p></p>
		<p><b>Golden Pots</b></p>
        	<p><b>Effect</b>: Additively increase base clicking reward by 20% of the building production of Farms, Inns and Blacksmiths combined.</p>
        	<p></p>
		<p><b>Spellsmith</b></p>
        	<p><b>Effect</b>: Blacksmiths also increase your Mana Regeneration additively.</p>
        	<p><b>Formula</b>: (x ^ 0.25), where x is the number of Blacksmiths you own.</p>
	" coords="70,10,124,64" shape="rect"> 
	<area href="#FairyGoldLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/SwarmofFairiesFactionUpgrade.png align=middle><b> Fairy Gold Legacy</b></p>
		<p><b>Starmetal Alloys</b></p>
		<p><b>Effect</b>: Increase the base production of Blacksmiths by +580.</p>
        	<p><b>Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
        	<p></p>
		<p><b>Rainbow Link</b></p>
        	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Farms, Inns and Blacksmiths you own.</p>
        	<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is the amount of Farms, Inns and Blacksmiths you own.</p>
        	<p></p>
		<p><b>Swarm of Fairies</b></p>
        	<p><b>Effect</b>: You gain additional assistants based on the amount of Farms, Inns and Blacksmiths you own.</p>
        	<p><b>Formula</b>: (0.7 * x ^ 0.5), where x is the number of Farms, Inns, and Blacksmiths you own.</p>
	" coords="130,10,184,64" shape="rect">
	<area href="#FairyDiamondLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/DreamCatchers.png align=middle><b> Fairy Diamond Legacy</b></p>
		<p><b>Bubble Swarm</b></p>
		<p><b>Effect</b>: Increase maximum mana based on the highest amount of Swarming Towers you made this Reincarnation.</p>
        	<p><b>Formula</b>: +(x ^ 1.05), where x is highest amount of Swarming Towers made this Reincarnation.</p>
        	<p></p>
		<p><b>Pheromones</b></p>
        	<p><b>Effect</b>: Gain assistants additively based on time spent as Chaos this Reincarnation.</p>
        	<p><b>Formula</b>: +(80 * x ^ 0.6), where x is time spent as Chaos this Reincarnation.</p>
        	<p></p>
		<p><b>Dream Catchers</b></p>
        	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Chaos spells cast this Reincarnation.</p>
        	<p><b>Formula</b>: (1.2 * x ^ 0.8)%, where x is Chaos spells cast this Reincarnation.</p>
	" coords="190,10,244,64" shape="rect">
	<area href="#ElvenBronzeLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/AncientClickingArtsFactionUpgrade.png align=middle><b> Elven Bronze Legacy</b></p>
		<p><b>Elven Mint</b></p>
		<p><b>Effect</b>: The base chance to find Faction Coins is doubled.</p>
        	<p></p>
		<p><b>Elven Treasure Casing</b></p>
        	<p><b>Effect</b>: Increase base clicking reward by 25,000 per Trophy unlocked, and increase chance to find Faction Coins based on the amount of Trophies you unlocked.</p>
        	<p><b>Formula</b>: floor((1 + 0.05 * x)^ 0.95), where x is your Trophies unlocked.</p>
        	<p></p>
		<p><b>Ancient Clicking Arts</b></p>
        	<p><b>Effect</b>: Increase Mana Regeneration based on your total amount of Clicks all time.</p>
        	<p><b>Formula</b>: +(2 * log10(1 + x)), where x is the amount of clicks made in this Reincarnation.</p>
	" coords="10,70,64,124" shape="rect">
	<area href="#ElvenSilverLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/SecretClickingTechniquesFactionUpgrade.png align=middle><b> Elven Silver Legacy</b></p>
		<p><b>Elven Emissary</b></p>
		<p><b>Effect</b>: Increase clicking reward based on the amount of Good buildings you own, and assistants find 3 times as many Faction Coins.</p>
        	<p><b>Formula</b>: (x ^ 0.6)%, where x is the number of Good Buildings you own.</p>
        	<p></p>
		<p><b>Elven Efficiency</b></p>
        	<p><b>Effect</b>: Increase Royal Exchange bonus additively based on Faction Coins found this game.</p>
	    	<p><b>Formula</b>: +(2 * log10(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
        	<p></p>
		<p><b>Secret Clicking Techniques</b></p>
        	<p><b>Effect</b>: Increase the production of all buildings based on Clicks total.</p>
        	<p><b>Formula</b>: (2 * x ^ 0.4)%, where x is your Treasure Clicks all time.</p>
	" coords="70,70,124,124" shape="rect"> 
	<area href="#ElvenGoldLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/SylvanTreasureFrillsFactionUpgrade.png align=middle><b> Elven Gold Legacy</b></p>
		<p><b>Elven Diplomacy</b></p>
		<p><b>Effect</b>: Clicks count more based on Faction Coins found this game.</p>
        	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
        	<p></p>
		<p><b>Elven Luck</b></p>
        	<p><b>Effect</b>: Each time you click for money you have 1% chance to gain coins equal to 250,000% of your production and gathering (R + 1) * x random faction coins, where x is Faction Coin chance.</p>
        	<p></p>
		<p><b>Sylvan Treasure Frills</b></p>
        	<p><b>Effect</b>: Additively increase base clicking reward by 50% of your building production.</p>
	" coords="130,70,184,124" shape="rect">
	<area href="#ElvenDiamondLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png align=middle><b> Elven Diamond Legacy</b></p>
		<p><b>Wooden Dice</b></p>
		<p><b>Effect</b>: When Elven Luck triggers, 100,000 automatic Tax Collections are cast.</p>
        	<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the highest amount of Arboreal Cities you made this Reincarnation.</p>
     		<p><b>Effect</b>: Also removes two Ascension penalties from Elven Luck.</p>
        	<p><b>Elven Luck Formula</b>: (x ^ 0.3), where x is Arboreal Cities count.</p>
        	<p><b>Production Formula</b>: (32 * x ^ 0.8), where x is highest amount of Arboreal Cities this Reincarnation.</p>
        	<p><b>Faction Coin Formula</b>: (3 * x ^ 0.75), where x is highest amount of Arboreal Cities this Reincarnation.</p>
        	<p></p>
		<p><b>Camouflage</b></p>
        	<p><b>Effect</b>: Assistants and Clicks count 1,000% more for all purposes and increase assistant production based on amount of assistants.</p>
        	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is assistants owned.</p>
        	<p></p>
		<p><b>Elven Discipline</b></p>
        	<p><b>Effect</b>: Increase assistants additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
        	<p><b>Formula</b>: +(50 * ln(1 + x) ^ 1.5), where x is Faction Coins found this game (additively).</p>
        	<p><b>Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is Faction Coins found this game (multiplicatively).</p>
	" coords="190,70,244,124" shape="rect">
	<area href="#AngelBronzeLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/AngelFeathersFactionUpgrade.png align=middle><b> Angel Bronze Legacy</b></p>
		<p><b>Holy Bells</b></p>
		<p><b>Effect</b>: Increase Mana Regeneration based on the amount of buildings you own.</p>
		<p><b>Formula</b>: +(2 * x ^ 0.4), where x is the amount of buildings you own.</p>
        	<p></p>
		<p><b>Angelic Determination</b></p>
        	<p><b>Effect</b>: Increase the production of all buildings based on spells cast this game.</p>
		<p><b>Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is spells cast this game.</p>
        	<p></p>
		<p><b>Angel Feathers</b></p>
        	<p><b>Effect</b>: Increase Faction Coin find chance additively based on the amount of active spells.</p>
		<p><b>Formula</b>: +(10 * x)%, where x is the amount of active spells.</p>
	" coords="10,130,64,184" shape="rect">
	<area href="#AngelSilverLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/ArchangelFeathersFactionUpgrade.png align=middle><b> Angel Silver Legacy</b></p>
		<p><b>Guardian Angels</b></p>
		<p><b>Effect</b>: Spell casts count 100% more.</p>
        	<p></p>
		<p><b>Angelic Wisdom</b></p>
        	<p><b>Effect</b>: Decrease the cost of all spells by 50%.</p>
		<p><b>Effect</b>: Also increases offline spell cast amount by multiplicatively based on your offline mana regeneration.</p>
		<p><b>Formula</b>: (10 * log10(1 + x))%, where x is your offline mana regeneration.</p>
        	<p></p>
		<p><b>Archangel Feathers</b></p>
        	<p><b>Effect</b>: Increase Mana Regeneration multiplicatively by 100%.</p>
	" coords="70,130,124,184" shape="rect"> 
	<area href="#AngelGoldLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/WingsofLibertyFactionUpgrade.png align=middle><b> Angel Gold Legacy</b></p>
		<p><b>Magical Gates</b></p>
		<p><b>Effect</b>: Increase maximum Mana additively based on time spent as Good in this Reincarnation.</p>
		<p><b>Formula</b>: +(7 * x ^ 0.7), where x is time spent as Good this Reincarnation.</p>
        	<p></p>
		<p><b>Angelic Dominance</b></p>
        	<p><b>Effect</b>: Spell durations are increased by 50%.</p>
        	<p></p>
		<p><b>Wings of Liberty</b></p>
        	<p><b>Effect</b>: Increase the production of all buildings based on Mana Regeneration.</p>
		<p><b>Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
	" coords="130,130,184,184" shape="rect">
	<area href="#AngelDiamondLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png align=middle><b> Angel Diamond Legacy</b></p>
		<p><b>Heaven's Brilliance</b></p>
		<p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the highest amount of Holy Sites you own in this Reincarnation. Gem Grinder and all Dragon's Breath effects are increased based on the highest amount of Holy Sites you own in this Reincarnation.</p>
		<p><b>Formula</b>: (0.02 * ln(1 + x)), where x is highest amount of Holy Sites owned this Reincarnation.</p>
		<p><b>Gem Grinder and Dragon's Breath Formula</b>: (0.65 * x ^ 0.65), where x is highest amount of Holy Sites owned this Reincarnation.</p>
        	<p></p>
		<p><b>Angelic Fortitude</b></p>
        	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells' activity time (this R).</p>
		<p><b>Formula</b>: (x ^ 0.7)%, where x is sum of all your spells' activity time in seconds this Reincarnation.</p>
        	<p></p>
		<p><b>Seraphim Wings</b></p>
        	<p><b>Effect</b>: Multiplicatively increase Maximum Mana, Mana Regeneration, Faction Coin find chance and assistants by 200%.</p>
	" coords="190,130,244,184" shape="rect">
	<area href="#GoblinBronzeLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/CheapMaterialsFactionUpgrade.png align=middle><b> Goblin Bronze Legacy</b></p>
		<p><b>Strong Currency</b></p>
		<p><b>Effect</b>: Gain assistants additively based on the amount of Faction Coins found in this game.</p>
        	<p><b>Formula</b>: +(0.5 * ln(1 + x) ^ 2.5), where x is Faction Coins found this game.</p>
        	<p></p>
		<p><b>Slave Trading</b></p>
        	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Evil buildings you own.</p>
        	<p><b>Formula</b>: (2 * x ^ 0.6)%, where x is the amount of Evil buildings you own</p>
        	<p></p>
		<p><b>Cheap Materials</b></p>
        	<p><b>Effect</b>: Tax Collection is worth more seconds additively based on the amount of buildings you own.</p>
        	<p><b>Formula</b>: +(x ^ 0.5), where x is the amount of buildings you own.</p>
	" coords="10,190,64,244" shape="rect">
	<area href="#GoblinSilverLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/ArchangelFeathersFactionUpgrade.png align=middle><b> Goblin Silver Legacy</b></p>
		<p><b>Guardian Angels</b></p>
		<p><b>Effect</b>: Spell casts count 100% more.</p>
        	<p></p>
		<p><b>Angelic Wisdom</b></p>
        	<p><b>Effect</b>: Decrease the cost of all spells by 50%.</p>
		<p><b>Effect</b>: Also increases offline spell cast amount by multiplicatively based on your offline mana regeneration.</p>
		<p><b>Formula</b>: (10 * log10(1 + x))%, where x is your offline mana regeneration.</p>
        	<p></p>
		<p><b>Archangel Feathers</b></p>
        	<p><b>Effect</b>: Increase Mana Regeneration multiplicatively by 100%.</p>
	" coords="70,190,124,244" shape="rect"> 
	<area href="#GoblinGoldLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/WingsofLibertyFactionUpgrade.png align=middle><b> Goblin Gold Legacy</b></p>
		<p><b>Magical Gates</b></p>
		<p><b>Effect</b>: Increase maximum Mana additively based on time spent as Good in this Reincarnation.</p>
		<p><b>Formula</b>: +(7 * x ^ 0.7), where x is time spent as Good this Reincarnation.</p>
        	<p></p>
		<p><b>Angelic Dominance</b></p>
        	<p><b>Effect</b>: Spell durations are increased by 50%.</p>
        	<p></p>
		<p><b>Wings of Liberty</b></p>
        	<p><b>Effect</b>: Increase the production of all buildings based on Mana Regeneration.</p>
		<p><b>Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
	" coords="130,190,184,244" shape="rect">
	<area href="#GoblinDiamondLegacy" research="
		<p><img src=http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png align=middle><b> Goblin Diamond Legacy</b></p>
		<p><b>Heaven's Brilliance</b></p>
		<p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the highest amount of Holy Sites you own in this Reincarnation. Gem Grinder and all Dragon's Breath effects are increased based on the highest amount of Holy Sites you own in this Reincarnation.</p>
		<p><b>Formula</b>: (0.02 * ln(1 + x)), where x is highest amount of Holy Sites owned this Reincarnation.</p>
		<p><b>Gem Grinder and Dragon's Breath Formula</b>: (0.65 * x ^ 0.65), where x is highest amount of Holy Sites owned this Reincarnation.</p>
        	<p></p>
		<p><b>Angelic Fortitude</b></p>
        	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells' activity time (this R).</p>
		<p><b>Formula</b>: (x ^ 0.7)%, where x is sum of all your spells' activity time in seconds this Reincarnation.</p>
        	<p></p>
		<p><b>Seraphim Wings</b></p>
        	<p><b>Effect</b>: Multiplicatively increase Maximum Mana, Mana Regeneration, Faction Coin find chance and assistants by 200%.</p>
	" coords="190,190,244,244" shape="rect">
        </map>
	<?php include "../scripts/footer.html"; ?>
