<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6>All Changes and Additions</h6>
	<br/>
	<p><b>V4.2.1 December 18th, 2021</b></p>
	<br/>
	<p><b>Added</b></p>
	<p><b>New Christmas Event Feat</b>: Check event page after event starts.</p>
	<br/>
	<hr>
	<p><b>Bug Fix</b>: Prestige artifacts can now be excavated properly, now eligible from R235+.</p>
	<br/>
	<hr>
	<p><b>Balance Changes</b></p>
	<p><b>A4 Prestige Change</b>: Availability lowered from R240 to R235.</p>
	<br/>
	<p><b>Reincarnation Power</b></p>
	<p><b>R180 Power reintroduced</b>: R180 power has revived, moved to R190.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on Reincarnations made.</p>
	<p><b>Formula</b>: (150 * R)%, where R is how many times you have reincarnated.</p>
	<br/>
	<hr>
	<p><b>Faction Upgrades</b></p>
	<p><b>Angel</b></p>
	<p><b>AN1</b> (Holy Bells)</p>
	<p><b>Effect</b>: Increase Mana Regeneration based on the amount of buildings you own.</p>
	<p><b>Old Formula</b>: +(2 * x ^ 0.4), where x is the amount of buildings you own.</p>
	<p><b>New Formula</b>: +(1.6 * x ^ 0.4), where x is the amount of buildings you own.</p>
	<br/>
	<p><b>AN2</b> (Angelic Determination)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
	<p><b>New Additional Effect</b>: Also increase Angel Coins found (from all sources) by 500%.</p>
	<br/>
	<p><b>AN10</b> (Heaven's Brilliance)</p>
	<p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the highest amount of Holy Sites you built this Reincarnation. Gem Grinder and all Dragon's Breath effects are increased based on the highest amount of Holy Sites you built this Reincarnation.</p>
	<p><b>Old Tier 7 Formula</b>: +(0.02 * ln(1 + x)), where x is highest amount of Holy Sites owned in this Reincarnation.</p>
	<p><b>New Tier 7 Formula</b>: +(0.025 * ln(1 + x)), where x is highest amount of Holy Sites owned in this Reincarnation.</p>
	<br/>
	<p><b>Druid</b></p>
	<p><b>DD12</b> (Grove Farming)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on their tier. Middle tiers get better bonuses.</p>
	<p><b>Old Formula</b>: (0.75 * ((6 - abs(6 - T)) ^ 5))%, where T is building tier</p>
	<p><b>New Formula</b>: (0.8 * ((6 - abs(6 - T)) ^ 4))%, where T is building tier.</p>
	<br/>
	<p><b>Dragon</b></p>
	<p><b>DG4</b> (Dragonborn)</p>
	<p><b>Effect</b>: Increase assistants additively and multiplicatively, and their production, based on time spent affiliated with Dragons.</p>
	<p><b>Change</b>: All formulas are now affected by time modifiers</p>
	<p><b>Old Formula (Additive)</b>: +(60 * x ^ 0.4), where x is time spent as Dragons (All Time).</p>
	<p><b>New Formula (Additive)</b>: +(50 * x ^ 0.5), where x is time spent as Dragons (All Time).</p>
	<p><b>Old Formula (Production)</b>: (0.8 * x ^ 0.4)%, where x is time spent as Dragons (All Time).</p>
	<p><b>New Formula (Production)</b>: (0.7 * x ^ 0.3)%, where x is time spent as Dragons (All Time).</p>
	<br/>
	<p><b>DG6</b> (Sharp Claws)</p>
	<p><b>Effect</b>: Increase Royal Exchange Bonus and Faction Coin find Chance based on clicks made in this game (multiplicative).</p>
	<p><b>Old Formula</b>: (0.8 * x ^ 0.4)%, where x is the number of Clicks this game.</p>
	<p><b>New Formula</b>: (0.8 * x ^ 0.35)%, where x is the number of Clicks this game.</p>
	<br/>
	<p><b>DG8</b> (Eternal Wisdom)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
	<p><b>Old Formula</b>: (1.5 * x ^ 0.95)%, where x is individual Royal Exchange bonus.</p>
	<p><b>New Formula</b>: (1.5 * x ^ 0.9)%, where x is individual Royal Exchange bonus.</p>
	<br/>
	<p><b>DG11</b> (Wyrm's Rest)</p>
	<p><b>Effect</b>: Remove 1 Ascension penalty from Royal Exchange bonus. Also gives Dragon's Breath White Breath a multiplicative effect on Assistants based on time spent as Dragons.</p>
	<p><b>Old Formula</b>: (3 * ln(1 + x) ^ 1.5)%, where x is time spent as Dragon this Reincarnation.</p>
	<p><b>New Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is time spent as Dragon this Reincarnation.</p>
	<br/>
	<p><b>Archon</b></p>
	<p><b>AR2</b> (Energy Recharge)</p>
	<p><b>Old Effect</b>: Also increase Precognition base and scaling.</p>
	<p><b>New Effect</b>: Also increase Precognition base, scaling, and changes its starting duration to 5 minutes (formula unchanged).</p>
	<br/>
	<p><b>Makers</b></p>
	<p><b>MK7</b> (Stonecarving)</p>
	<p><b>Effect</b>:Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
	<p><b>Old Formula</b>: (30 + 0.3 * (x * (y + z)) ^ 0.7)%, where x is excavations done this Reincarnation (NOT current excavation count) and y & z are free and ruby excavation resets done in this Reincarnation.</p>
	<p><b>New Formula</b>: (250 + 0.5 * (x * (y + z)) ^ 0.5)%, where x is excavations done this Reincarnation (NOT current excavation count) and y & z are free and ruby excavation resets done in this Reincarnation.</p>
	<br/>
	<hr>
	<p><b>Unions</b></p>
	<p><b>Druid Union</b></p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
	<p><b>Old Formula</b>: (3 * x ^ 1.03 * y ^ 1.5)%, where x is total Lineage levels and y is amount of buildings targeted by Grand Balance (maximum is 11).</p>
	<p><b>New Formula</b>: (2.4 * x ^ 1.025 * y ^ 1.2)%, where x is total Lineage levels and y is amount of buildings targeted by Grand Balance (maximum is 11).</p>
	<br/>
	<p><b>Dragon Order Union</b></p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent as Order this Reincarnation.</p>
	<p><b>Old Formula</b>: (7 * x ^ 0.7)%, where x is time spent as Order this Reincarnation.</p>
	<p><b>New Formula</b>: (3 * x ^ 0.7)%, where x is time spent as Order this Reincarnation.</p>
	<br/>
	<p><b>Dragon Chaos Union</b></p>
	<p><b>Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend on Faction Coin find chance.</p>
	<p><b>Old Formula (Unique)</b>: (0.8 * x ^ 0.4)%, where x is assistants owned.</p>
	<p><b>New Formula (Unique)</b>: (0.9 * x ^ 0.35)%, where x is assistants owned.</p>
	<p><b>Old Formula (Non-Unique)</b>: (2.4 * x ^ 0.4)%, where x is assistants owned.</p>
	<p><b>New Formula (Non-Unique)</b>: (2.7 * x ^ 0.35)%, where x is assistants owned.</p>
	<br/>
	<p><b>Dragon Balance Union</b></p>
	<p><b>Effect</b>: Multiplicatively increase your Maximum Mana based on your current Lineage level.</p>
	<p><b>Old Formula</b>: (7 * x ^ 0.9)%, where x is your current Lineage level.</p>
	<p><b>New Formula</b>: (8 * x ^ 0.8)%, where x is your current Lineage level.</p>
	<br/>
	<hr>
	<p><b>Research</b></p>
	<p><b>Spellcraft</b></p>
	<p><b>S11125</b> (Multiplication)</p>
	<p><b>Effect</b>: Spells cast count more based on Mana produced in this game.</p>
	<p><b>Old Formula</b>: (log10(1 + x) ^ 2)%, where x is Mana Produced this game.</p>
	<p><b>New Formula</b>: (ln(1 + x) ^ 1.5)%, where x is Mana Produced this game.</p>
	<br/>
	<p><b>S13125</b> (Fantasia)</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on Mana produced in this game.</p>
	<p><b>Old Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is Mana produced this game.</p>
	<p><b>New Formula</b>: (ln(1 + x) ^ 2)%, where x is Mana produced this game.</p>
	<br/>
	<p><b>S13500</b> (Legerdemain)</p>
	<p><b>Old Effect</b>: Mana produced counts more based on the amount of Faction Coins found in this game.</p>
	<p><b>Old Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the amount of Faction Coins found this game.</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
	<p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your Royal Exchange bonus.</p>
	<br/>
	<p><b>Craftsmanship</b></p>
	<p><b>C5375</b> (Manufacture)</p>
	<p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on clicks made in this game.</p>
	<p><b>Old Formula (Additive)</b>: +(6 * x ^ 0.6)%, where x is clicks made in this game.</p>
	<p><b>Old Formula (Multiplicative)</b>: (x ^ 0.35)%, where x is clicks made in this game.</p>
	<p><b>New Formula (Additive)</b>: +(7.5 * x ^ 0.5)%, where x is clicks made in this game.</p>
	<p><b>New Formula (Multiplicative)</b>: (1.3 * x ^ 0.3)%, where x is clicks made in this game.</p>
	<br/>
	<p><b>Divine</b></p>
	<p><b>D13125</b> (Asceticism)</p>
	<p><b>Additional Effect</b>: When you spend time with a faction, you also gain a fraction of that time spent with all factions.</p>
	<p><b>Note</b>: You gain 0.1 second of playtime for each faction (including Mercenary and Elites) every second. This does not include your current Faction(s), which gain time normally. This effect works both offline and in time warps. Time gained is added as real stat.</p>
	<br/>
	<p><b>Economics</b></p>
	<p><b>E11125</b> (Grey Friday)</p>
	<p><b>Additional Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
	<p><b>Formula</b>: (1.2 * x ^ 0.8)%, where x is your Royal Exchange bonus.</p>
	<br/>
	<p><b>E11875</b> (Overworking)</p>
	<p><b>Effect</b>: Goblin's Greed casts additional Tax Collection per second based on the amount of assistants you have.</p>
	<p><b>Old Formula</b>: +(0.85 * x ^ 0.85), where x is the amount of assistants you have.</p>
	<p><b>New Formula</b>: +(1.5 * x ^ 0.5), where x is the amount of assistants you have.</p>
	<br/>
	<p><b>Warfare</b></p>
	<p><b>W12250</b> (Raiding)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the highest Combo Strike counter you had in this Reincarnation.</p>
	<p><b>Old Formula</b>: (x ^ 0.7)%, where x is the highest Combo Strike counter in this Reincarnation.</p>
	<p><b>New Formula</b>: (2.5 * x ^ 0.5)%, where x is the highest Combo Strike counter in this Reincarnation.</p>
	<br/>
	<hr>
	<p><b>Spells</b></p>
	<p><b>Dragon's Breath</b></p>
	<p><b>White Effect</b>: Temporarily increase the amount of assistants based on time spent being Neutral in this Reincarnation.</p>
	<p><b>Old Formula</b>: +(30 * x ^ 0.7), where x is time spent as Neutral this Reincarnation.</p>
	<p><b>New Formula</b>: +(30 * x ^ 0.65), where x is time spent as Neutral this Reincarnation.</p>
	<br/>
	<p><b>Chrono Loading</b> (Precognition Spell Upgrade)</p>
	<p><b>Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
	<p><b>Old Formula</b>: (3600 + 60 * x ^ 0.4), where x is its duration.</p>
	<p><b>New Formula</b>: (100 * ln(1 + x / 60) ^ 2.5), where x is its duration.</p>
	<br/>
	<p><b>All Creation</b></p>	
	<p><b>Effect</b>: Increase production of all buildings based on your Mana Regeneration rate.</p>
	<p><b>Old Formula</b>: (0.15 * ln(1 + x) ^ 3.5 + 0.9 * x ^ 0.27)%, where x is your Mana Regeneration.</p>
	<p><b>New Formula</b>: (0.15 * ln(1 + x) ^ 3 + 0.75 * x ^ 0.25)%, where x is your Mana Regeneration.</p>
	<p><b>Effect</b>: Also multiplicatively increase Faction Coin find chance based on your Mana Regeneration rate.</p>
	<p><b>Old Formula</b>: (5 * ln(1 + x) ^ 2.5 + 15 * x ^ 0.15)%, where x is your Mana Regeneration.</p>
	<p><b>New Formula</b>: (4.5 * ln(1 + x) ^ 2.25 + 12.5 * x ^ 0.125)%, where x is your Mana Regeneration.</p>
	<br/>
	<hr>
	<p><b>Challenges</b></p>
	<p><b>Archon Challenge 1/2/3</b></p>
	<p><b>Additional Effect</b>: Also removes Ascension penalties from AN9, UD9 and TT9 respectively.</p>
	<br/>
	<hr>	
	<p><b>Lineages</b></p>
	<p><b>Requirement for Perk 5</b>: raised from R130 to R139.</p>
	<br/>
	<hr>	
	<p><b>Artifact sets</b></p>
	<p><b>Drowset</b>: Swapped first and second effect.</p>
	<p><b>First Effect</b>: Spells cast count more based on time spent as Evil in this Reincarnation.</p>
	<p><b>Old Formula</b>: (6 * ln(1 + x) ^ 1.2)%, where x is time spent as Evil in this Reincarnation.</p>
	<p><b>New Formula</b>: (6 * ln(1 + x) ^ 1.8)%, where x is time spent as Evil in this Reincarnation.</p>
	<br/>
	<hr>	
	<p><b>Legacy Combos</b></p>
	<p><b>Brooding Abyss (Fairy/Demon)</b></p>
	<p><b>Effect</b>: Chaotically increase assistants based on amount of alignments among the active spells you have.</p>
	<p><b>Old Formula</b>: ((a ^ 1.5 + b ^ 1.5 + c ^ 1.5 + d ^ 1.5 + e ^ 1.5 + f ^ 1.5) ^ (1 + 0.5 * (a + b + c + d + e + f)))%, where a - f are the amount of spells in the respective alignment.</p>
	<p><b>New Formula</b>: ((a ^ 1.3 + b ^ 1.3 + c ^ 1.3 + d ^ 1.3 + e ^ 1.3 + f ^ 1.3) ^ (1 + 0.3 * (a + b + c + d + e + f)))%, where a - f are the amount of spells in the respective alignment.</p>
	<br/>
	<p><b>Homunculus Lab (Goblin/Undead)</b></p>
	<p><b>Effect</b>: Increase Research Budget based on the least time spent between Order and Balance in this Reincarnation.</p>
	<p><b>Old Formula</b>: +(2000 + 0.7 * ln(1 + min(x , y)) ^ 3.5), where x and y is time spent as Order and Balance respectively in this Reincarnation.</p>
	<p><b>New Formula</b>: +(75 + ln(1 + min(x , y)) ^ 3.25), where x and y is time spent as Order and Balance respectively in this Reincarnation.</p>
	<p><b>Additional Effect</b>: Also increase the production of all buildings based on unspent research budget.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is the sum of your unspent research budget across all branches.</p>
	<br/>
	<hr>
	<p><b>Secret Trophies</b></p>
	<p><b>True Harlequin</b></p>
	<p><b>Effect</b>: Increases the production of all buildings based on the number of upgrades bought this game from different Factions.</p>
	<p><b>Old Formula</b>: (x ^ 3)%, where x is the number of Factions with at least one of their upgrades being used (up to 3375% maximum possible).</p>
	<p><b>New Formula</b>: ((x * floor(1 + x / 5)) ^ 3)%, where x is the number of Factions with at least one of their upgrades being used (up to 216,000% maximum possible).</p>	
	<p><b>Note</b>: Upgrade now only requires 5 different faction upgrades instead of 15 to be purchasable.</p> 
	<br/>
	<p><b>Novice Combinator</b></p>	
	<p><b>Old Effect</b>: Increase the production of all buildings when playing a Good or Evil Faction based on time spent with the least used alignment.</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on time spent with the least used alignment (available for all factions).</p>
	<p><b>Formula</b>: (50 + 0.7 * x ^ 0.7)%, where x is time spent with your least used alignment.</p>
	<br/>
	<p><b>Expert Combinator</b></p>	
	<p><b>Old Effect</b>: Increase the production of all buildings when playing a Prestige Faction based on time spent with the least used alignment.</p>
	<p><b>Old Formula</b>: (x)%, where x is time spent with your least used alignment.</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on time spent with the least used alignment.</p>
	<p><b>New Formula</b>: (50 + 0.7 * x ^ 0.7)%, where x is time spent with your least used alignment.</p>
	<br/>
	<p><b>Need a head start</b></p>
	<p><b>Old Effect</b>: Instantly adds 10 gold coins.</p>
	<p><b>New Effect</b>: Instantly adds 25 gold coins.</p>
	<br/>
	<p><b>The following Upgrades won the "I got reduced to 1 coin cost" lottery</b>: Faction Run, Grand Diplomat, Speed Run, Stoic Resistance, Vanilla Challenger.</p>
	<br/>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V4.2.0 October 27th, 2021</a></b></p>
			<div class="autohide">
			<br/>
			<p><b>Events</b></p>
			<p><b>New Halloween Event Feat</b>: Check event page after event starts.</p>
			<hr>
			<p><b>Added Prestige Factions for Ascension 4</b></p>
				<p><b>Requirement</b>: R240+, Base Faction's Alliance Upgrades purchased.</p>
			<br/>
			<p><b>Prestige Alliance Upgrades Faction are higher compared to Base Faction</b>.</p>
				<p><b>Trade Treaties</b>: 1 Oc (1e27)</p>
				<p><b>Friendship Pacts</b>: 1 Dc (1e33)</p>
				<p><b>Alliances</b>: 1 Dd (1e39)</p>
				<p><b>Unions</b>: 1 Qad (1e45)</p>
			<p><b>Note</b>: Prestige Alliance Upgrades grant no extra Research Budget.</p>
			<br/>
			<p><b>Prestige Faction Upgrades costs are higher compared to Base Faction</b>.</p>
				<p><b>Cost Formula</b>: (1e114 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>
			<br/>
			<p><b>Legacies</b></p>
			<p>Increased Maximum amount of Legacies from 4 to 9</p>
			<p>Added Prestige Legacies</b>: Available from R220+, higher cost than base Legacies.</p>
				<p><b>Coin Cost</b>: (1e105 * (1,000 ^ (x ^ 2 - x))), where x is your current Legacy container.</p>
				<p><b>Faction Coin Cost</b>: (1e45 * (1,000 ^ ( 0.5 * ( x ^ 2 - x)))), where x is your current Legacy container.</p>
			<br/>
			<hr>
			<p><b>3 New Lore Artifacts</b>: 1 for each prestige faction, unlocking their set's second effect (currently <b>bugged, not unlockable</b>).</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenAnvilArtifact.png" align="middle"> Dwarven Anvil</b></p>
				<p><b>Hint</b>: Dwarven clicks!</p>
				<p><b>Description</b>: Every dwarven child is required to bring this to school every day.</p>
				<p><b>Requirement</b>: R240+, Dwarven Faction, 10,000+ Excavations</p>
				<p><b>Chance</b>: (log10(1 + x) / 10,000)%, where x is your number of clicks in this Reincarnation.</p>
				<p><b>Dwarf Set 2nd Effect</b>: Multiplicatively increase Mana Regeneration based on time spent in this game.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your time spent in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/StilettoHeelArtifact.png" align="middle"> Stiletto Heel</b></p>
				<p><b>Hint</b>: A drow trade.</p>
				<p><b>Description</b>: Drow make the most beautiful underground females.</p>
				<p><b>Requirement</b>: R240+, Drow Faction, 10,000+ Excavations</p>
				<p><b>Chance</b>: (x / 10,000)%, where x is the number of Royal Exchanges you have.</p>
				<p><b>Drow Set 2nd effect</b>: Spells cast count more based on time spent as Evil in this Reincarnation.</p>
				<p><b>Formula</b>: (6 * ln(1 + x) ^ 1.2)%, where x is time spent as Evil in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/EyeOfTheDragonArtifact.png" align="middle"> Eye Of The Dragon</b></p>
				<p><b>Hint</b>: Draconic Assistants.</p>
				<p><b>Description</b>: The ultimate thrill of the fight.</p>
				<p><b>Requirement</b>: R220+, Dragon Faction, 10,000+ Excavations</p>
				<p><b>Chance</b>: (log10(1 + x) / 10,000)%, where x is the highest amount of assistants you had in this Reincarnation.</p>
				<p><b>Dragon Set 2nd effect</b>: All alignment spells gain 1 additional Tier and all spells activity time count more based on the amount of excavations you made, including resets.</p>
				<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5)%, where x is the number of excavations made, and y is your number of resets in this game.</p>
			<hr>
			<p><b>1 New Trophy</b>:</p>
				<p><img src="http://musicfamily.org/realm/Factions/picks/ExpertCombinator.png" align="middle"> <b>Expert Combinator</b></p>
				<p><b>Requirement</b>: R220+, Purchase Legacies from 6 different factions in a single game.</p>
				<p><b>Cost</b>: 10 Dtg (1e100)</p>
				<p><b>Effect</b>: Increase the production of all buildings when playing a Prestige Faction based on time spent with the least used alignment.</p>
				<p><b>Formula</b>: (x)%, where x is time spent with your least used alignment.</p>
			<hr>
			<p><b>New Researches</b></p>
			<p><b>Spellcraft</b></p>
			<p><b>S13125</b> (Fantasia)</p>
				<p><b>Effect</b>: Multiplicatively increase assistants based on Mana produced in this game.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is Mana produced this game.</p>
			<br/>
			<p><b>S13500</b> (Legerdemain)</p>
				<p><b>Effect</b>: Mana produced counts more based on the amount of Faction Coins found in this game.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the amount of Faction Coins found this game.</p>
			<br/>
			<p><b>Craftsmanship</b></p>
			<p><b>C13125</b> (Pottery)</p>
				<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of active spells.</p>
				<p><b>Formula</b>: (9 * x ^ 0.9)%, where x is the number of active spells.</p>
			<br/>
			<p><b>C13500</b> (Assembly Line)</p>
				<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the amount of assistants you own.</p>
				<p><b>Formula</b>: (0.75 * x ^ 0.25)%, where x is the number of assistants you own.</p>
			<br/>
			<p><b>Divine</b></p>
			<p><b>D13125</b> (Asceticism)</p>
				<p><b>Effect</b>: Neutral Buildings also count as both Good and Evil buildings. Non-Unique buildings also count as Unique buildings.</p>
				<p><b>Note</b>: Neutral Buildings in this instance refers to only Farms, Inns, Blacksmiths and Hall of Legends.</p>
				<p><b>Note</b>: The second effect is only applied to effects that specifically check for Unique Buildings, such as Lineage Perk 3s. The Non-Unique Buildings will still only count as Non-Unique when it comes to building modifiers, such as E135.</p>
				<p>Essentially, effects that are "...based on the amount of Unique Buildings" are now "...based on your total amount of buildings".</p>
			<br/>
			<p><b>D13500</b> (Afterlife)</p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the highest amount of Mana Regeneration you had in this Reincarnation.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest Mana Regeneration you had this Reincarnation.</p>
			<br/>
			<p><b>Economics</b></p>
			<p><b>E13125</b> (Discount)</p>
				<p><b>Effect</b>: Reduce Royal Exchange, Excavation and Building cost multipliers. All spells cost 50% less mana to cast.</p>
				<p><b>Reduction</b>: -0.02 for all three.</p>
			<br/>
			<p><b>E13500</b> (Recession)</p>
				<p><b>Effect</b>: Gain all Lineage base effects that match your alignments, up to a maximum of level 25.</p>
				<p><b>Note</b>: This will reduce the level of all lineages you do not pick to 25 for the current run (including lineages that don't match your alignments), which will lower the effectiveness of upgrades based on those lineage levels.</p>
			<br/>
			<p><b>Alchemy</b></p>
			<p><b>A13125</b> (Cinnabar)</p>
				<p><b>Effect</b>: All spells activity time counts more based on Tax Collection casts in this game.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the number of Tax Collections cast this game.</p>
			<br/>
			<p><b>A13500</b> (Lunafaction)</p>
				<p><b>Effect</b>: All Balance spells can be cast up to 3 tier above their maximum. Increase Offline production based on the maximum amount of time spent as Balance in this Reincarnation.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the maximum time spent as Balance this reincarnation in seconds.</p>
				<p><b>Note</b>: All Creation can be cast up to Tier 5 (This research overrides Dragon Set 2). Moon Blessing, Goblin’s Greed and Grand Balance can be cast up to Tier 10. Infinite Spiral can be cast up to Tier 4.</p>
			<br/>
			<p><b>Warfare</b></p>
			<p><b>W13125</b> (Artillery)</p>
				<p><b>Effect</b>: Increase all spell duration based on the highest amount of spells cast in this Reincarnation.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest number of spells cast in a single run this Reincarnation.</p>
			<br/>
			<p><b>W13500</b> (Backfire)</p>
				<p><b>Effect</b>: Increase the production of Evil buildings based on time spent as Good, the production of Chaos buildings based on time spent as Order, and the production of Chaos Evil buildings as the sum of time spent as Good and Order. Also increases the production of Good and Order buildings based on Evil and Chaos in the same way.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the respective time stat in seconds.</p>
				<p><b>Note</b>: Buildings only receive the highest effect (That is, if the building is Evil/Chaos, it only gets the Evil/Chaos bonus, not the Evil or the Chaos individual bonuses).</p>
				<p><b>Note</b>: The Good/Evil alignment of a building applies normally, while the Order/Chaos alignment of a building only applies to Base Faction's Unique Buildings (both UB1 and UB2) and Elite Unique Buildings</p>
			<br/>
			<p><b>Forbidden</b></p>
			<p><b>F13250</b> (Taboo)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of faction upgrades different than your own.</p>
				<p><b>Formula</b>: (1.2 * x ^ 1.2)%, where x is the number of faction upgrades you have that are not part of your faction.</p>
				<p><b>Note</b>: Faction upgrades in this instance refers to only the main 12 faction upgrades (that you get via Legacies). Lineage Perks, Advanced Heritages and such are not counted toward this research.</p>
			<br/>
			<p><b>F13750</b> (The Unseen)</p>
				<p><b>Effect</b>: Increase Offline production based on the maximum amount of assistants you had in this Reincarnation.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest number of assistants you had this Reincarnation.</p>
			<br/>
			<hr>
			<p><b>Balance Changes</b></p>
			<br/>
			<p><b>Reincarnation Power</b></p>
			<p><b>R180 Power</b></p>
				<p><b>Removed</b>: R180 power is DEAD.</p>
				<p><b>Old Effect</b>: Increase the production of all buildings based on Reincarnations made.</p>
				<p><b>Old Formula</b>: (150 * R)%.</p>
			<br/>
			<hr>
			<p><b>Faction Upgrades</b></p>
			<p><b>Undead</b></p>
			<p><b>UD7</b> (Dead Fields)</p>
			<p><b>Old Effect</b>: Buildings count 100% more.</p>
			<p><b>New Effect</b>: Buildings count 75% more.</p>
			<br/>
			<p><b>Demon</b></p>
			<p><b>DM2</b> (Devil Tyrant)</p>
			<p><b>Effect</b>: The three highest building tiers count more based on time spent as Evil in this Reincarnation.</p>
			<p><b>Old Formula</b>: (0.4 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation in seconds.</p>
			<p><b>New Formula</b>: (1.2 * x ^ 0.4)%, where x is time spent as Evil this Reincarnation in seconds.</p>	
			<br/>
			<p><b>Dwarven</b></p>
			<p><b>DN3</b> (Mining Prodigies)</p>
			<p><b>Old Effect</b>: Increase the production of all buildings based on the total amount of Excavations you made.</p>
			<p><b>Old Formula</b>: (9 * x ^ 0.9)%, where x is the current amount of excavations.</p>
			<p><b>New Effect</b>: Increase the production of all buildings based on the amount of Excavations you made, including resets, in this Reincarnation.</p>
			<p><b>New Formula</b>: (40 * (x * max(1 , 2 * y) ^ 0.4))%, where x is the number of excavations made this Reincarnation, y is the number of excavation resets in this Reincarnation.</p>	
			<br/>
			<p><b>DN7</b> (Battlehammers)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Dwarven Coins found in this game.</p>
			<p><b>Old Formula</b>: (1.5 * ln(1 + x) ^ 2.5))%, where x is the amount of Dwarven Coins found in this game.</p>
			<p><b>New Formula</b>: (2 * ln(1 + x) ^ 2))%, where x is the amount of Dwarven Coins found in this game.</p>
			<br/>
			<p><b>DN11</b> (Stonetalking)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest between max mana and mana regeneration.</p>
			<p><b>Old Formula</b>: (0.055 * max(x , y) ^ 0.55)%, where x is Maximum Mana and y is Mana Regeneration.</p>
			<p><b>New Formula</b>: (2 * ln(1 + max(x , y)) ^ 2)%, where x is Maximum Mana and y is Mana Regeneration.</p>	
			<br/>
			<p><b>Drow</b></p>
			<p><b>DW9</b> (Blade Dance)</p>
			<p><b>Old Effect</b>: Increase the production of all buildings based on Combo Strike casts in this game.</p>
			<p><b>Old Formula</b>: (30 * x ^ 0.9)%, where x is Combo Strike casts in this game.</p>
			<p><b>New Effect</b>: Increase the production of all buildings based on Combo Strike counter in this game.</p>
			<p><b>New Formula</b>: (100 + 80 * x ^ 0.4)%, where x is your Combo Strike counter.</p>	
			<br/>
			<p><b>Dragon</b></p>
			<p>DG3 swapped places with DG8, formulas changed.</p>
			<p><b>DG1</b> (Dragonscales)</p>
			<p><b>Old Effect</b>: Increase the production of Stone Pillars, Labyrinth and Hall of Legends based on the total amount of time spent as Neutral.</p>
			<p><b>Old Formula</b>: ((1.25 * (x / 60)) ^ 0.55)%, where x is time spent as Neutral this Reincarnation in seconds.</p>
			<p><b>New Effect</b>: Increase the production of all buildings based on the amount of time spent as Neutral in this Reincarnation. Effect is increased on Stone Pillars, Labyrinths and Hall Of Legends.</p>
			<p><b>New Formula</b>: ((x / 60) ^ 0.5)%, where x is time spent as Neutral this Reincarnation in seconds. This is multiplied by 10 on Stone Pillars, Labyrinths and Hall of Legends.</p>		
			<br/>
			<p><b>DG2</b> Iron Flight</p>
			<p><b>Old Effect</b>: Increase the production of Iron Stronghold by 2000% when affected by any Spell.</p>
			<p><b>New Effect</b>: Increase the production of Iron Stronghold by 200% per spell affecting it.</p>		
			<p><b>Note</b>: Each instance of spell effects count as one spell (represented by the spell effect icons on the building icons). This includes Red, Green & Black Breath, A150 and D400.</p> 
			<br/>
			<p><b>DG3</b> (Eternal Wisdom)</p>
			<p><b>New Name</b>: Imposing Presence</p>
			<p><b>Old Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
			<p><b>Old Formula</b>: (2 * x ^ 1.15)%, where x is individual Royal Exchange bonus.</p>
			<p><b>New Effect</b>: Increase Mana Regeneration based on the amount of neutral buildings you own.</p>
			<p><b>New Formula</b>: +(0.5 * x ^ 0.5), where x is the number of neutral buildings owned.</p>
			<br/>
			<p><b>DG4</b> (Dragonborn)</p>
			<p><b>Old Effect</b>: Increase assistants production based on time spent affiliated with Dragons.</p>
			<p><b>Old Formula</b>: (0.75 * (x ^ 0.55))%, where x is time spent with Dragons in seconds (All Time).</p>
			<p><b>New Effect</b>: Increase assistants additively and multiplicatively, and their production, based on time spent affiliated with Dragons.</p>
			<p><b>New Formula (Additive)</b>: +(60 * x ^ 0.4), where x is time spent as Dragons in seconds (All Time).</p>
			<p><b>New Formula (Multiplicative)</b>: (0.5 * x ^ 0.25)%, where x is time spent as Dragons in seconds (All Time).</p>
			<p><b>New Formula (Production)</b>: (0.8 * x ^ 0.4)%, where x is time spent as Dragons in seconds (All Time).</p>
			<p><b>Note</b>: All formulas are unaffected by “Time counts more” effects.</p> 
			<br/>
			<p><b>DG6</b> (Sharp Claws)</p>
			<p><b>Old Effect</b>: Gain additional assistants based on clicks made in this game.</p>
			<p><b>Old Formula</b>: +(1.35 * x ^ 0.35), where x is clicks made in this game.</p>
			<p><b>New Effect</b>: Increase Royal Exchange Bonus and Faction Coin find Chance based on clicks made in this game.</p>
			<p><b>New Formula</b>: (0.8 * x ^ 0.4)%, where x is the number of clicks this game.</p>
			<p><b>Note</b>: Both effects are multiplicative.</p>
			<br/>
			<p><b>DG7</b> (Ancient Hunger)</p>
			<p><b>Old Effect</b>: Increase Maximum Mana based on the amount of Faction Coins found in this game.</p>
			<p><b>Old Formula</b>: +floor(45 * ln(1 + x) ^ 1.45), where x is faction coins found this game.</p>
			<p><b>New Effect</b>: Increase Maximum Mana additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
			<p><b>New Formula (Additive)</b>: +(20 * ln(1 + x) ^ 2), where x is faction coins found this game.</p>
			<p><b>New Formula (Multiplicative)</b>: (0.75 * ln(1 + x) ^ 1.25)%, where x is faction coins found this game.</p>
			<br/>
			<p><b>DG8</b> (Imposing Presence)</p>
			<p><b>New Name</b>: Eternal Wisdom</p>
			<p><b>Old Effect</b>: Increase Mana Regeneration based on the amount of neutral buildings you own.</p>
			<p><b>Old Formula</b>: +(0.1 * floor(x ^ 0.5)), where x is the number of neutral buildings owned.</p>
			<p><b>New Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
			<p><b>New Formula</b>: (1.5 * x ^ 0.95)%, where x is individual Royal Exchange bonus.</p>
			<br/>
			<p><b>DG10</b> (Fang Food)</p>
			<p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration based on the highest amount of Dragon Pastures you built in this Reincarnation.</p>
			<p><b>Old Formula</b>: (0.65 * x ^ 0.65)%, where x is the highest amount of Dragon Pastures owned this Reincarnation.</p>
			<p><b>New Effect</b>: Multiplicatively increase Mana Regeneration and assistants based on the highest amount of Dragon Pastures you built in this Reincarnation.</p>
			<p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Dragon Pastures owned this Reincarnation.</p>
			<br/>
			<p><b>DG11</b> (Wyrm's Rest)</p>
			<p><b>Old Effect</b>: Gain assistants based on the amount of time spent as Dragon this Reincarnation.</p>
			<p><b>Old Formula</b>: +(15 * x ^ 0.65), where x is time spent as Dragon this Reincarnation in seconds.</p>
			<p><b>New Effect</b>: Remove 1 Ascension penalty from Royal Exchange bonus. Also gives Dragon's Breath White Breath a multiplicative effect on assistants based on time spent as dragons.</p>
			<p><b>New Formula</b>: (3 * ln(1 + x) ^ 1.5)%, where x is time spent as Dragon this Reincarnation in seconds.</p>
			<p><b>Note</b>: Unlike other coloured breath effects which stack cumulatively with extra breaths, the multiplicative white breath effect stacks multiplicatively with extra white breaths.</p>
			<br/>
			<p><b>Makers</b></p>
			<p><b>MK8</b> (Past Trade)</p>
			<p><b>Old Effect</b>:Remove 1 Ascension penalty from Royal Exchange Bonus. </p>
			<p><b>New Effect</b>: Multiplicatively increase production bonus from Gems based on the time spent on your longest game session in this Reincarnation.</p>
			<p><b>New Formula</b>: (0.65 * x ^ 0.65)%, where x is your longest game session this Reincarnation in seconds.</p>
			<br/>
			<hr>
			<p><b>Unions</b></p>
			<p><b>Unions no longer suffer from any Ascension penalties.</b></p>
			<br/>
			<p><b>Elven Union</b></p>
			<p><b>Effect</b>: Increase click production based on faction coins found this Reincarnation.</p>
			<p><b>Old Formula</b>: (ln(1 + x) ^ 3)%, where x is your faction coins found this reincarnation.</p>
			<p><b>New Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is your faction coins found this reincarnation.</p>
			<br/>
			<p><b>Undead Union</b></p>
			<p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
			<p><b>Old Formula</b>: (300 * ln(1 + x) ^ 3)%, where x is your offline production.</p>
			<p><b>New Formula</b>: (360 * ln(1 + x) ^ 2.8)%, where x is your offline production.</p>
			<br/>
			<p><b>Drow Chaos Union</b></p>
			<p><b>Effect</b>: Increase the production of a specific building tier, depending on the amount of buildings you own, based on time spent offline in this Reincarnation.</p>
			<p><b>Old Formula</b>: (8 * x ^ 0.8)%, where x is time spent offline this Reincarnation in seconds.</p>
			<p><b>New Formula</b>: (0.666 * x ^ 0.666)%, where x is time spent offline this Reincarnation in seconds.</p>
			<br/>
			<p><b>Drow Balance Union</b></p>
			<p><b>Effect</b>: Multiplicatively Increase Maximum Mana based on Tax Collections cast this game.</p>
			<p><b>Old Formula</b>: (0.07 * ln(1 + x) ^ 2.7)%, where x is Tax Collections cast this game.</p>
			<p><b>New Formula</b>: (0.05 * ln(1 + x) ^ 2.5)%, where x is Tax Collections cast this game.</p>
			<br/>
			<p><b>Dragon Chaos Union</b></p>
			<p><b>Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend on Faction Coin find chance.</p>
			<p><b>Old Formula (Unique)</b>: (0.2 * x ^ 0.8)%, where x is assistants owned.</p>
			<p><b>Old Formula (Non-Unique)</b>: (5 * x ^ 0.8)%, where x is assistants owned.</p>
			<p><b>New Formula (Unique)</b>: (0.8 * x ^ 0.4)%, where x is assistants owned.</p>
			<p><b>New Formula (Non-Unique)</b>: (2.4 * x ^ 0.4)%, where x is assistants owned.</p>
			<br/>
			<p><b>Dragon Balance Union</b></p>
			<p><b>Effect</b>: Multiplicatively increase your Maximum Mana based on your current Lineage level.</p>
			<p><b>Old Formula</b>: (1.3 * x ^ 1.3)%, where x is your current Lineage level.</p>
			<p><b>New Formula</b>: (7 * x ^ 0.9)%, where x is your current Lineage level.</p>
			<br/>
			<hr>
			<p><b>Spells & Spell Effects</b></p>
			<p><b>Dragon’s Breath</b> (Dragon)</p>
			<p><b><font color="white">White Breath</font></b></p>
			<p><b>Effect</b>: Temporarily increase the amount of assistants based on total time spent being neutral.</p>
			<p><b>Old Formula</b>: +(1.35 * floor(x / 60) ^ 0.7), where x is time spent as neutral this Reincarnation.</p>
			<p><b>New Formula</b>: +(30 * x ^ 0.7), where x is time spent as neutral this Reincarnation.</p>
			<br/>
			<hr>
			<p><b>Challenges</b></p>
			<p><b>Dragon</b></p>
			<p><b>Dragon Challenge 1</b> (Sky Monarch)</p>
			<p><b>Old Effect</b>: Mutiplicatively increase faction coin chance by 12% per Lightning Strike tier bought.</p>
			<p><b>New Effect</b>: Multiplicatively increase Faction Coin chance based on Lightning Strike activity time in this game.</p>
			<p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your Lightning Strike activity time in this game.</p>
			<br/>
			<p><b>Dragon Challenge 5</b> (Ancient Incantation)</p>
			<p><b>Old Effect</b>: Tax Collections are 20% more powerful for every spell tier you have active.</p>
			<p><b>New Effect</b>: Increase Tax Collection worth in seconds based on the amount of active spells.</p>
			<p><b>New Formula</b>: (30 * x ^ 0.8)%, where x is the number of active spells.</p>
			<br/>
			<hr>
			<p><b>Unique Buildings</b></p>
			<p><b>Dwarven Forge</b> (Dwarf UB1)</p>
			<p><b>Effect</b>: Upgrade Blacksmiths to Dwarven Forges, boosting their production based on Mana Regeneration and unlocking more unique perks for the building.</p>
			<p><b>Old Formula</b>: (80 * x ^ 0.8)%, where x is your Mana Regeneration.</p>
			<p><b>New Formula</b>: (300 * x ^ 0.6)%, where x is your Mana Regeneration.</p>
			<br/>
			<p><b>Dragon Pastures</b> (Dragon UB2)</p>
			<p><b>Effect</b>: Upgrade Farm to Dragon Pastures, boosting their production based on your max mana and unlocking more unique perks for the building.
			<p><b>Old Formula</b>: (0.63 * x ^ 0.63)%, where x is your Maximum Mana.
			<p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your Maximum Mana.
			<hr>
			<p><b>Research</b></p>
			<p><b>Warfare</b></p>
			<p><b>W11875</b> (Scouting)</p>
			<p><b>Effect</b>: Buildings count more based on the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
			<p><b>Old Formula</b>: (1.25 * x ^ 1.25)%, where x is the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
			<p><b>New Formula</b>: (x ^ 0.9)%, where x is the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
			<br/>
			<hr>
			<p><b>Lineage</b></p>
			<p><b>Fairy</b></p>
			<p><b>Fairy Perk 4</b></p>
			<p><b>Effect</b>: While Fairy Chanting is active, further increase your temporary assistants based on its duration.</p>
			<p><b>Old Formula</b>: (2.5 * x ^ 0.5)%, where x is Fairy Chanting duration in seconds.</p>
			<p><b>New Formula</b>: (2.5 * x ^ 0.25)%, where x is Fairy Chanting duration in seconds.</p>
			<br/>
			<p><b>Dwarf</b></p>
			<p><b>Dwarven Perk 3</b></p>
			<p><b>Effect</b>: Excavations and Artifacts count more based on the amount of Unique Buildings you own.</p>
			<p><b>Old Formula</b>: (0.5 * x ^ 0.5)%, where x is the number of Unique Buildings you own.</p>
			<p><b>New Formula</b>: (0.58 * x ^ 0.58)%, where x is the number of Unique Buildings you own.</p>
			<br/>
			<hr>
			<p><b>Artifact Sets</b></p>
			<p><b>Fairy</b></p>
			<p><b>Fairy Set 1</b></p>
			<p><b>Effect</b>: Farms, Inns and Blacksmiths count more based on the amount of time spent with Fairies in this Reincarnation.</p>
			<p><b>Old Formula</b>: (0.7 * ln(1 + x) ^ 3)%, where x is time spent with Fairies in this Reincarnation.</p>
			<p><b>New Formula</b>: (2 * ln(1 + x) ^ 1.5)%, where x is time spent with Fairies in this Reincarnation.</p>
			<br/>
			<p><b>Drow</b></p>
			<p><b>Drow Set 1</b></p>
			<p><b>Old Effect</b>: Increase the production of Unique Buildings based on Evil spells cast in this Reincarnation.</p>
			<p><b>Old Formula</b>: (0.45 * x ^ 0.45)%, where x is total evil spells cast Reincarnation.</p>
			<p><b>New Effect</b>: Remove Ascension penalties from Royal Exchange bonus, starting from 0 and removing more levels of penalty over time and increase their production based on the amount of Gems you own.</p>
			<p><b>New Formula</b>: (log10(1 + x) ^ 2)%, where x is the amount of Gems you own.</p>
			<p><b>New Penalties Reduction</b>: (round((0.3 * x / 3600) ^ 0.5) - 1), where x is playtime this game.</p>
				<table class="numtable">
					<tr>
						<th>Penalties Removed</th>
						<th>Time</th>
					</tr>
					<tr>
						<td>1</td>
						<td>7 Hours 30 Minutes</td>
					</tr>
					<tr>
						<td>2</td>
						<td>20 Hours 50 Minutes</td>
					</tr>
					<tr>
						<td>3</td>
						<td>1 Day 16 Hours 50 Minutes</td>
					</tr>
					<tr>
						<td>4</td>
						<td>2 Days 19 Hours 30 Minutes</td>
					</tr>
				</table>
			<p><b>Note</b>: Unaffected by Set power bonuses.</p>
			<br/>
			<hr>
			<p><b>Other Changes</b></p>
			<p><b>Uniformity</b></p>
			<p><b>Effect</b>: Increases the production of all buildings based on time spent as the least used alignment.</p>
			<p><b>Old Formula</b>: (0.75 * x ^ 0.75)%, where x is time spent with your least used alignment (primary or secondary) in seconds.</p>
			<p><b>New Formula</b>: (x ^ 0.75)%, where x is time spent with your least used alignment (primary or secondary) in seconds.</p>
			<br/>
			<p><b>MAD Quests</b> (Archon, Djinn, Makers unlocks)</p>
			<p>Alignment spells activity time requirement reduced from 2 days to 1 day.</p>
			<br/>
			<p><b>Advanced Heritage Unlocks</b></p>
			<p>Faction spells activity time requirement reduced from 8 hours to 6 hours.</p>
			<br/>
			<p><b>Twisted Nether</b>: Twisting Nether was adding points to the sum of Lineage levels, not per individual Lineage. This has been fixed.</p>
			<br>
			<p><b>Focused Thoughts (Faceless Challenge Reward)</b>: Spell activity time count more upgrades now interact with Brainwave's headstart.</p>
			</div>
		</div>
	</div>
	<hr>
	<br/>
	<p><b>Old Patches</b></p>
	<p>
		<a href="http://musicfamily.org/realm/4.1Patch/" target="_blank"><b>V4.1</b></a>
		<a href="http://musicfamily.org/realm/4.0Patch/" target="_blank"><b>V4.0</b></a>
		<a href="http://musicfamily.org/realm/3.8Patch/" target="_blank"><b>V3.8</b></a>
		<a href="http://musicfamily.org/realm/3.7Patch/" target="_blank"><b>V3.7</b></a>
		<a href="http://musicfamily.org/realm/3.6Patch/" target="_blank"><b>V3.6</b></a>
		<a href="http://musicfamily.org/realm/3.5Patch/" target="_blank"><b>V3.5</b></a>
		<a href="http://musicfamily.org/realm/3.4Patch/" target="_blank"><b>V3.4</b></a>
		<a href="http://musicfamily.org/realm/3.3Patch/" target="_blank"><b>V3.3</b></a>
	</p>
	<p>No history for older patches, see <a href="http://musicfamily.org/realm/Changelog/" target="_blank"><b>Changelogs</b></a></p>
<?php include "../scripts/footer.html"; ?>
