<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>All Changes and Additions</h6>
        <br/>
<p><b>V4.2.0 October ??, 2021</b></p>
<br/>
<p><b>Events</b></p>
<p><b>New Halloween Event Feat</b>: Check event page after event starts.</p>
<hr>
<p><b>Added Prestige Factions for Ascension 4</b></p>
	<p><b>Requirement</b>: R240+, Base Faction's Alliance Upgrades purchased.</p>
<br/>
<p><b>Prestige Alliance Upgrades Faction Coin costs increased</b>.</p>
	<p><b>Trade Treaties</b>: 1 Oc (1e27)</p>
	<p><b>Friendship Pacts</b>: 1 Dc (1e33)</p>
	<p><b>Alliances</b>: 1 Dd (1e39)</p>
	<p><b>Unions</b>: 1 Qad (1e45)</p>
<p><b>Note</b>: Prestige Alliance Upgrades grant no extra budget.</p>
<br/>
<p><b>Prestige Faction Upgrades costs increased</b>.</p>
	<p><b>Cost Formula</b>: (1e114 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>
	<table class="numtable">
		<tr>
			<th>Faction Upgrade</th>
			<th>Coin Cost</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1e114</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1e117</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1e120</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1e126</td>
		</tr>
		<tr>
			<td>5</td>
			<td>1e129</td>
		</tr>
		<tr>
			<td>6</td>
			<td>1e32</td>
		</tr>
		<tr>
			<td>7</td>
			<td>1e141</td>
		</tr>
		<tr>
			<td>8</td>
			<td>1e144</td>
		</tr>
		<tr>
			<td>9</td>
			<td>1e147</td>
		</tr>
		<tr>
			<td>10</td>
			<td>1e159</td>
		</tr>
		<tr>
			<td>11</td>
			<td>1e162</td>
		</tr>
		<tr>
			<td>12</td>
			<td>1e165</td>
		</tr>

	</table>
<br/>
<p><b>Prestige Legacies</b>: Available from R220+, higher base cost than base Legacies.</p>
	<p><b>Coin Cost</b>: (1e105 * (1,000 ^ (x ^ 2 - x))), where x is your current Legacy container.</p>
	<p><b>Faction Coin Cost</b>: (1e45 * (1,000 ^ ( 0.5 * ( x ^ 2 - x)))), where x is your current Legacy container.</p>
	<table class="numtable">
		<tr>
			<th>Legacy Number</th>
			<th>Coin Cost</th>
			<th>Faction Coin Cost</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1e105</td>
			<td>1e45</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1e111</td>
			<td>1e48</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1e123</td>
			<td>1e54</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1e141</td>
			<td>1e63</td>
		</tr>
	</table>
<br/>
<hr>
<p><b>3 New Lore Artifacts</b>: 1 for each prestige faction, unlocking their set's second effect.</p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenAnvilArtifact.png" align="middle"> Dwarven Anvil</b></p>
	<p><b>Hint</b>: Dwarven clicks!</p>
	<p><b>Description</b>: Every dwarven child is required to bring this to school every day.</p>
	<p><b>Requirement</b>: R240+, 10,000 excavations, play as Dwarf.</p></p>
	<p><b>Chance</b>: (ln(1 + x) / 10,000)%, where x is your number of clicks in this Reincarnation.</p></p>
	<p><b>Dwarf Set 2nd Effect</b>: Multiplicatively increase Mana regen based on time spent in this game.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your time spent in this game in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/StilettoHeelArtifact.png" align="middle"> Stiletto Heel</b></p>
	<p><b>Hint</b>: A drow trade.</p>
	<p><b>Description</b>: Drow make the most beautiful underground females.</p>
	<p><b>Requirement</b>: R240+, 10,000 excavations, play as Drow.</p></p>
	<p><b>Chance</b>: (x / 10,000)%, where x is the number of Royal Exchanges you have.</p>
	<p><b>Drow Set 2nd effect</b>: Spells cast count more based on time spent as Evil in this Reincarnation.</p>
	<p><b>Formula</b>: (6 * ln(1 + x) ^ 1.2)%, where x is time spent as Evil in this Reincarnation in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EyeOfTheDragonArtifact.png" align="middle"> Eye Of The Dragon</b></p>
	<p><b>Hint</b>: Draconic Assistants.</p>
	<p><b>Description</b>: The ultimate thrill of the fight.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Dragon</p></p>
	<p><b>Chance</b>: (ln(1 + x) / 10,000)%, where x is the highest amount of assistants you had in this Reincarnation.</p></p>
	<p><b>Dragon Set 2nd effect</b>: All alignment spells gain 1 additional Tier and all spells activity time count more based on the amount of excavations you made, including resets.</p>
	<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5)%, where x is the number of excavations made, and y is your number of resets in this game.</p>
<br/>
<hr>
<p><b>New Researches</b></p>
<p><b>Spellcraft</b></p>
<p><b>S13125</b> (Fantasia)</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on mana produced in this game.</p>
	<p><b>Formula</b>: (2 * ln(x) ^ 2)%, where x is your mana produced this game.</p>
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
<p><b>F13750</b></p>
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
<p><b>Old Formula</b>: (0.4 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>
<p><b>New Formula</b>: (1.2 * x ^ 0.4)%, where x is time spent as Evil this Reincarnation.</p>	
<br/>
<p><b>Dwarven</b></p>
<p><b>DN3</b> (Mining Prodigies)</p>
<p><b>Old Effect</b>: Increase the production of all buildings based on the total amount of Excavations you made.</p>
<p><b>Old Formula</b>: (9 * x ^ 0.9)%, where x is the current amount of excavations.</p>
<p><b>New Effect</b>: Increase the production of all buildings based on the amount of Excavations you made, including resets, in this Reincarnation.</p>
<p><b>New Formula</b>: (60 * (x * max(1, 0.5 * y) ^ 0.5))%, where x is the number of excavations made this reincarnation, y is the number of excavation resets in this reincarnation.</p>	
<br/>
<p><b>DN11</b> (Stonetalking)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the highest between max mana and mana regeneration.</p>
<p><b>Old Formula</b>: (0.055 * max(x, y) ^ 0.55)%, where x is Maximum Mana and y is Mana Regeneration.</p>
<p><b>New Formula</b>: (2 * ln(1 + max(x,y)) ^ 2)%, where x is Maximum Mana and y is Mana Regeneration.</p>	
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
<p><b>Old Formula</b>: ((1.25 * t) ^ 0.55)%, where t is the total amount of time spent as Neutral in minutes (this R).</p>
<p><b>New Effect</b>: Increase the production of all buildings based on the amount of time spent as Neutral in this Reincarnation. Effect is increased on Stone Pillars, Labyrinths and Hall Of Legends.</p>
<p><b>New Formula</b>: ((x / 60) ^ 0.5)%, where x is your neutral time in seconds. This is multiplied by 10 on Stone Pillars, Labyrinths and Hall of Legends.</p>		
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
<p><b>Old Formula</b>: (0.75 * (x ^ 0.55))%, where x is time spent with Dragons (All Time).</p>
<p><b>New Effect</b>: Increase assistants additively and multiplicatively, and their production, based on time spent affiliated with Dragons.</p>
<p><b>New Formula (Additive)</b>: +(60 * x ^ 0.4), where x is time spent as Dragons (All Time).</p>
<p><b>New Formula (Multiplicative)</b>: (0.5 * x ^ 0.25)%, where x is time spent as Dragons (All Time).</p>
<p><b>New Formula (Production)</b>: (0.8 * x ^ 0.4)%, where x is time spent as Dragons (All Time).</p>
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
<p><b>Old Formula</b>: +(15 * x ^ 0.65), where x is time spent as Dragon this Reincarnation.</p>
<p><b>New Effect</b>: Remove 1 Ascension penalty from Royal Exchange bonus. Also gives Dragon's Breath White Breath a multiplicative effect on assistants based on time spent as dragons.</p>
<p><b>New Formula</b>: (3 * ln(1 + x) ^ 1.5)%, where x is time spent as Dragon this Reincarnation.</p>
<p><b>Note</b>: Unlike other coloured breath effects which stack cumulatively with extra breaths, the multiplicative white breath effect stacks multiplicatively with extra white breaths.</p>
<br/>
<p><b>Makers</b></p>
<p><b>MK8</b> (Past Trade)</p>
<p><b>Old Effect</b>:Remove 1 Ascension penalty from Royal Exchange Bonus. </p>
<p><b>New Effect</b>: Multiplicatively increase production bonus from Gems based on the time spent on your longest game session in this Reincarnation.</p>
<p><b>New Formula</b>: (0.65 * x ^ 0.65)%, where x is your longest game session in this Reincarnation.</p>
<br/>




<p><b>Undead</b></p>
<p><b>DG</b> ()</p>
<p><b>Old Effect</b>: </p>
<p><b>Old Formula</b>: </p>
<p><b>New Effect</b>: </p>
<p><b>New Formula</b>: </p>
<p><b>Note</b>: </p>
<br/>















<p><b>DM2</b> (Devil Tyrant)</p>
<p><b>Effect</b>: The three highest building tiers count more based on time spent as Evil in this Reincarnation.</p>
<p><b>Old Formula</b>: (0.6 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>
<p><b>New Formula</b>: (0.4 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>		
<p><b>Note</b>: Reverted formula back to where it was in v4.0</p> 
<br/>
<p><b>TT4</b> (Titan Drill)</p>
<p><b>Effect</b>: Increase the base production of Warrior Barracks / Slave Pens / Deep Mines by +9635, and Cathedrals / Dark Temples / Monasteries by +98000 (based on your Alignment).</p>
<p><b>Added Effect</b>: Also increases building production of these tiers by 1000%.</p>
<br/>
<p><b>TT8</b> (Heavy Coins)</p>
<p><b>Old Effect</b>: Increases Royal Exchanges production bonus by an additional 40% each, and reduces Royal Exchange cost multiplier by 0.01.</p>
<p><b>New Effect</b>: Increases Royal Exchanges production bonus by an additional 100% each, and reduces Royal Exchange cost multiplier by 0.01.</p>
<br/>
<p><b>Holy Crusaders</b> (Good Mercenary)</p>
<p><b>Old Effect</b>: Increase clicking reward by 1000% per active spell.</p>
<p><b>Old Formula</b>: ((x * 1000) ^ (A + 1))%, where x is the amount of active spells you have and A your Ascension.</p>
<p><b>New Effect</b>: Increase clicking reward by 100% per active spell.</p>
<p><b>New Formula</b>: ((x * 100) ^ (A + 1))%, where x is the amount of active spells you have and A your Ascension.</p>
<br>
<p><b>C3100</b> (Engineering)</p>
<p><b>Old Requirement</b>: 15 days as Mercenary (across all Reincarnations).</p>
<p><b>New Requirement</b>: 12 days as Mercenary (across all Reincarnations).</p>
<br/>
<p><b>Makers Perk 2</b></p>
<p><b>Old Challenge</b>: Have at least 350,000 buildings within 45 seconds of a new run.</p>
<p><b>New Challenge</b>: Have at least 300,000 buildings within 45 seconds of a new run.</p>
<br/>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V4.1.0 June 28, 2021</a></b></p>
		<div class="autohide">
		<br/>
		<p><b>New Upgrade: Legacy Combos</b>.</p>
			<p><b>Effect</b>: Once you purchased 2 different Vanilla Legacies, you will be able to select their specific Legacy Combo upgrade.</p>
			<p><b>Coin Cost</b>: 1 Tvg (1e72).</p>
			<p><b>Faction Coin Cost</b>: 1 Dc (1e33) of both Factions.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/MysticForest.png" align="middle"> Fairy/Elf - Mystic Forest</b></p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the amount of assistants you own.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/DreamRealm.png" align="middle"> Fairy/Angel - Dream Realm</b></p>
			<p><b>Effect</b>: Increase Mana Regeneration based on time spent as Good in this Reincarnation.</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as Good in this Reincarnation.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArtifactCaveau.png" align="middle"> Fairy/Goblin - Artifact Caveau</b></p>
			<p><b>Effect</b>: Increase the production of all buildings based on artifacts found.</p>
			<p><b>Formula</b>: (x ^ 0.95)%, where x is the number of artifacts found.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/TwistingNether.png" align="middle"> Fairy/Undead - Twisting Nether</b></p>
			<p><b>Effect</b>: Gain a new spell with the same name (Duration: 20 seconds, Mana Cost: 1 M (1e6), can be cast up to Tier 99). While active, increases Lineage Level by +1 per Tier.</p>
			<p><b>Note</b>: The Lineage Level increase is only a 'count more' effect and does not affect base lineage in any way.</p>
			<p><b>Note</b>: Twisting Nether counts as a faction spell, but has no alignments for upgrades such as Djinn Challenge 5.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/BroodingAbyss.png" align="middle"> Fairy/Demon - Brooding Abyss</b></p>
			<p><b>Effect</b>: Chaotically increase assistants based on amount of alignments among the active spells you have.</p>
			<p><b>Formula</b>: ((a ^ 1.5 + b ^ 1.5 + c ^ 1.5 + d ^ 1.5 + e ^ 1.5 + f ^ 1.5)^((1 + sum(a, b, c, d, e, f)) * 0.5))%, where a - f represent the six alignments.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/SacredGlade.png" align="middle"> Elf/Angel - Sacred Glade</b></p>
			<p><b>Effect</b>: Increase all spells duration based on clicks made in this game.</p>
			<p><b>Formula</b>: (2.4 * x ^ 0.4)%, where x is the amount of clicks made in this game.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/GreedFactory.png" align="middle"> Elf/Goblin - Greed Factory</b></p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on Tax Collections casts in this game.</p>
			<p><b>Formula</b>: (2.5 * ln(1 + x) ^ 2.5)%, where x is the amount of Tax Collection casts in this game.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/SwampofSorrows.png" align="middle"> Elf/Undead - Swamp of Sorrows</b></p>
			<p><b>Effect</b>: Activity time of all spells counts more based on Maximum Mana.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2.25)%, where x is your Maximum Mana.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/ForbiddenGrove.png" align="middle"> Elf/Demon - Forbidden Grove</b></p>
			<p><b>Effect</b>: Autoclicks per second based on the amount of Unique Buildings you own.</p>
			<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
			<p><b>Formula</b>: +(1 + 1.5 * x ^ 0.2), where x is the amount of Unique Buildings you own.</p>
			<p><b>Effect</b>: Also increases production of Unique Buildings based on Autoclicks this game.</p>
			<p><b>Formula</b>: (2 * log10(1 + x) ^ 2)%, where x is Autoclicks made this game.</p>
			<p><b>Note</b>: 'Clicks count more' effects are <b>not</b> affecting this upgrade.</p>
		<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoldenHeaven.png" align="middle"> Angel/Goblin - Golden Heaven</b></p>
			<p><b>Effect</b>: Increase the production of all buildings based on Gold owned.</p>
			<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is the current amount of Gold you own.</p>
			<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/DarkSanctum.png" align="middle"> Angel/Undead - Dark Sanctum</b></p>
			<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on time spent as Order in this Reincarnation.</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as Order in this Reincarnation.</p>
			<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/EternalBattlefield.png" align="middle"> Angel/Demon - Eternal Battlefield</b></p>
			<p><b>Effect</b>: Increase the production of Evil Buildings based on time spent as Good in this Reincarnation, and vice-versa. Does not affect Neutral Buildings</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as Good/Evil in this Reincarnation.</p>
			<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/HomunculusLab.png" align="middle"> Goblin/Undead - Homunculus Lab</b></p>
			<p><b>Effect</b>: Increase Research Budget based on the least time spent between Order and Balance in this Reincarnation.</p>
			<p><b>Formula</b>: +(2000 + 0.7 * ln(min(x , y)) ^ 3.5)%, where x and y is time spent as Order and Balance respectively in this Reincarnation.</p></p>
			<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/CorruptionZone.png" align="middle"> Goblin/Demon - Corruption Zone</b></p>
			<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the duration of your longest spell.</p>
			<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is the duration of your longest spell.</p></p>
			<br>
		<p><b><img src="http://musicfamily.org/realm/Factions/picks/FrozenWastes.png" align="middle"> Undead/Demon - Frozen Wastes</b></p>
			<p><b>Effect</b>: Increase Offline Production based on time spent offline in this Reincarnation.</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent offline in this Reincarnation.</p>
		<hr>
		<p><b>New Trophy</b></p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NoviceCombinator.png" align="middle"> Novice Combinator</b></p>
			<p><b>Requirement</b>: R220+, Purchase Legacies from 4 different factions in a single game.</p>
			<p><b>Cost</b>: 1 Qavg (1e75)</p>
			<p><b>Effect</b>: Increase production for Good or Evil factions based on time spent with the least used alignment.</p>
			<p><b>Formula</b>: (50 + 0.7 * x ^ 0.7)%, where x is time spent with your least used alignment.</p>
		<hr>
		<p><b>New Researches</b></p>
		<p><b>Note</b>: Research Points now capped at 13,000.</p>
		<p><b>Spellcraft</b></p>	
		<p><b>S11875</b> (Arcane Efficiency)</p>
			<p><b>Effect</b>: While both Holy Light and Fairy Chanting are active, reduce the cost of all spells by 85%.</p>
			<p><b>Note</b>: Catalyst can be used as one of the spells.</p>
		<br/>
		<p><b>S12250</b> (Necrodoomancy)</p>
			<p><b>Effect</b>: Reincarnations count more based on time spent as Undead in this Reincarnation.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is time spent as Undead in this Reincarnation.</p>
		<br/>
		<p><b>Craftsmanship</b></p>	
		<p><b>C11875</b> (Plating)</p>
			<p><b>Effect</b>: Unique Buildings count more for Call to Arms purposes based on Moon Blessing activity time in this Reincarnation.</p>
			<p><b>Formula</b>: +(2 * x ^ 0.8), where x is Moon Blessing activity time in this Reincarnation.</p>
			<p><b>Note</b>: This is an additive bonus and is thus not affected by any multiplicatives such as Good Warcry.</p>
		<br/>
		<p><b>C12250</b> (Compression)</p>
			<p><b>Effect</b>: Brainwave increases Faction Coin find chance progressively over its duration.</p>
			<p><b>Formula</b>: +(floor(1.5 * ((x + y) / 60) ^ 2.25)%, where x is Brainwave runtime and y is Headstart in seconds.</p>
		<br/>	
		<p><b>Divine</b></p>	
		<p><b>D11875</b> (Virtues)</p>
			<p><b>Effect</b>: Increase Tax Collection worth based on the highest amount of Mountain Palaces you built in this Reincarnation.</p>
			<p><b>Formula</b>: (2.5 * x ^ 0.5)%, where x is the highest amount of Mountain Palaces 	built in this Reincarnation.</p>
		<br/>
		<p><b>D12250</b> (Enochian)</p>
			<p><b>Effect</b>: Multiply Angel Coins found based on God's Hand activity time in this Reincarnation.</p>
			<p><b>Formula</b>: *(10 + 0.7 * x ^ 0.7)%, where x is God's Hand activity time in this Reincarnation.</p>
		<br/>	
		<p><b>Economics</b></p>	
		<p><b>E11875</b> (Overworking)</p>
			<p><b>Effect</b>: Goblin's Greed casts additional Tax Collection per second based on the amount of assistants you have.</p>
			<p><b>Formula</b>: +(0.85 * x ^ 0.85), where x is the amount of assistants you have.</p>
			<p><b>Note</b>: Catalyst can also trigger this effect.</p>
		<br/>
		<p><b>E12250</b> (Oilery)</p>
			<p><b>Effect</b>: While both Lightning Strike and Gem Grinder are active, multiplicatively increase the production bonus from Gems based on the duration of your longest spell.</p>
			<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is the duration of your longest spell.</p>
		<br/>
		<p><b>Alchemy</b></p>
		<p><b>A11875</b> (Liquefaction)</p>
			<p><b>Effect</b>: Increase the production of the three highest building tiers based on Hellfire Blast activity time in this Reincarnation.</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is Hellfire Blast activity time in this Reincarnation.</p>
		<br/>
		<p><b>A12250</b> (Folgoration)</p>
			<p><b>Effect</b>: While both Diamond Pickaxe and God's Hand are active, multiplicatively increase Mana Regeneration and Faction Coin find chance based on the amount of Excavations made in this Reincarnation, including resets.</p>
			<p><b>Formula</b>: (15 + 1.75 * (x * y) ^ 0.75)%, where x is the amount of Excavations and y the amount of Excavation resets made in this Reincarnation respectively.</p>
		<br/>
		<p><b>Warfare</b></p>
		<p><b>W11875</b> (Scouting)</p>
			<p><b>Effect</b>: Buildings count more based on the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
			<p><b>Formula</b>: (1.25 * x ^ 1.25)%, where x is the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
			<p><b>Note</b>: Amount of targets can be seen at Druid Challenge Reward, but needs an active Grand Balance to update.</p>
		<br/>
		<p><b>W12250</b> (Raiding)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest Combo Strike counter you had in this Reincarnation.</p>
			<p><b>Formula</b>: (x ^ 0.7)%, where x is the highest Combo Strike counter in this Reincarnation.</p>
		<br/>	
		<p><b>Forbidden</b></p>	
		<p><b>F12000</b> (Revelation)</p>
			<p><b>Effect</b>: Allows the purchase of one additional Legacy Combo upgrade.</p>
		<br/>
		<p><b>F12500</b> (Avatars)</p>
			<p><b>Effect</b>: Multiplactively increase assistants based on the amount of different Factions in your Legacies.</p>
			<p><b>Formula</b>: (50 * x ^ 2.5)%, where x is the amount of different Factions in your Legacies.</p>
		<hr>
		<p><b>Balance Changes</b></p>
		<br/>
		<p><b>Reincarnation Power</b></p>
		<p><b>New R230 Power</b></p>
			<p><b>Effect</b>: While playing as your least used alignment in this Reincarnation, increase the production of all buildings based on Reincarnations made.</p>
			<p><b>Formula</b>: (10 * R)%</p>
		<hr>
		<p><b>Faction Upgrades</b></p>
		<p><b>Fairy</b></p>
		<p><b>FR2</b> (Fairy Workers)</p>
			<p><b>Old Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 15,000%.</p>
			<p><b>New Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 10,000%.</p>
		<br/>
		<p><b>FR6</b> (Spellsmith)</p>
			<p><b>Effect</b>: Blacksmiths also increase your Mana Regeneration rate.</p>
			<p><b>Old Formula</b>: +(x ^ 0.25), where x is the amount of Blacksmiths you own.</p>
			<p><b>New Formula</b>: +(2.75 * x ^ 0.275), where x is the amount of Blacksmiths you own.</p>
		<br/>
		<p><b>FR9</b> (Swarm of Fairies)</p>
			<p><b>Effect</b>: You gain additional assistants based on the amount of Farms, Inns and Blacksmiths you own.</p>
			<p><b>Old Formula</b>: +(0.7 * x ^ 0.5), where x is the amount of Farms, Inns and Blacksmiths you own.</p>
			<p><b>New Formula</b>: +(1.2 * x ^ 0.6), where x is the amount of Farms, Inns and Blacksmiths you own.</p>
		<br/>
		<p><b>Elven</b></p>
		<p><b>EL1</b> (Elven Mint)</p>
			<p><b>Old Effect</b>: The base chance to find Faction Coins is doubled.</p>
			<p><b>New Effect</b>: The base chance to find Faction Coins is increased by a multiplicative 150%.</p>
		<br/>
		<p><b>EL2</b> (Elven Treasure Casing)</p>
			<p><b>Effect</b>: Increase base clicking reward by +25,000 per trophy, and increase chance to find faction coins based on the amount of trophies you unlocked.</p>
			<p><b>Old Formula</b>: +floor((1+0.05 * x) ^ 0.95)%, where x is the amount of Trophies unlocked.</p>
			<p><b>New Formula</b>: +((1 + 0.1 * x) ^ 0.95)%, where x is the amount of Trophies unlocked.</p>
		<br/>
		<p><b>EL3</b> (Ancient Clicking Arts)</p>
			<p><b>Effect</b>: Increase Mana Regeneration based on the amount of clicks made in this Reincarnation.</p>
			<p><b>Old Formula</b>: +(2 * log10(1 + x)), where x is the amount of clicks made in this Reincarnation.</p>
			<p><b>New Formula</b>: +(2 * log10(1 + x) ^ 1.25), where x is the amount of clicks made in this Reincarnation.</p>
		<br/>
		<p><b>EL5</b> (Elven Efficiency)</p>
			<p><b>Effect</b>: Increase Royal Exchange bonus based on Faction Coins found in this game.</p>
			<p><b>Old Formula</b>: +(2 * log10(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
			<p><b>New Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
		<br/>
		<p><b>EL8</b> (Elven Luck)</p>
			<p><b>Effect</b>: Each time you click for money you have 1% chance to gain coins equal to 250000% of your production, also generating Faction Coins based on reincarnation made.</p>
			<p><b>Formula (Coin reward)</b>: (2500 * (x + y)), where x is the production of all buildings, and y is the production of one assistant.</p>
			<p><b>New Effect</b>: Assistants now have the same chance to trigger Elven Luck once every second. Elven Lucks triggered this way have their coin reward multiplied by the amount of assistants you have.</p>
		<br/>
		<p><b>EL10</b> (Wooden Dice)</p>
			<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the highest amount of Arboreal Cities you own in this Reincarnation.</p>
			<p><b>Old Elven Luck Formula</b>: +(x ^ 0.3)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>New Elven Luck Formula</b>: +(x ^ 0.4)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>Old Production Formula</b>: (32 * x ^ 0.8)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>New Production Formula</b>: (40 * x ^ 0.8)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>Old Faction Coin Formula</b>: (3 * x ^ 0.75)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>New Faction Coin Formula</b>: (7.5 * x ^ 0.75)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
		<br/>
		<p><b>Angel</b></p>
		<p><b>AN2</b> (Angelic Determination)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
			<p><b>Old Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is spells cast this Game.</p>
			<p><b>New Formula</b>: (4 * ln(1 + x) ^ 2)%, where x is spells cast this Game.</p>
		<br/>
		<p><b>AN6</b> (Archangel Feathers)</p>
			<p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration by 100%.</p>
			<p><b>New Effect</b>: Multiplicatively increase Mana Regeneration by 50%.</p>
		<br/>
		<p><b>AN7</b> (Magical Gates)</p>
			<p><b>Effect</b>: Increase Maximum Mana based on time spent as Good in this Reincarnation.<p>
			<p><b>Old Formula</b>: +(7 * x ^ 0.7), where x is time spent as Good this Reincarnation.</p>
			<p><b>New Formula</b>: +(3.5 * x ^ 0.7), where x is time spent as Good this Reincarnation.</p>
		<br/>
		<p><b>AN9</b> (Wings of Liberty)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on Mana Regeneration.</p>
			<p><b>Old Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
			<p><b>New Formula</b>: (4 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
		<br/>
		<p><b>Goblin</b></p>
		<p><b>GB2</b> (Slave Trading)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Evil buildings you own.</p>
			<p><b>Old Formula</b>: (2 * x ^ 0.6)%, where x is the amount of Evil buildings you own.</p>
			<p><b>New Formula</b>: (2 * x ^ 0.7)%, where x is the amount of Evil buildings you own.</p>
		<br/>
		<p><b>GB4</b> (Black Market)</p>
			<p><b>Old Effect</b>: Production bonus from gems is doubled.</p>
			<p><b>New Effect</b>: Production bonus from Gems is increased by a multiplicative 150%.</p>
		<br/>
		<p><b>GB5</b> (Goblin Economists)</p>
			<p><b>Old Effect</b>: Mutiplicatively increase Mana Regeneration based on upgrades purchased.</p>
			<p><b>Old Formula</b>: (x ^ 0.9)%, where x is upgrades purchased.</p>
			<p><b>New Effect</b>: Multiplicatively increase Mana Regeneration based on Gold owned.</p>
			<p><b>New Formula</b>: (0.75 * log10(1 + x) ^ 1.25)%, where x is Gold owned.</p>
		<br/>
		<p><b>GB6</b> (Hobgoblin Gladiators)</p>
			<p><b>Old Effect</b>: Gems and upgrades count 200% more.</p>
			<p><b>New Effect</b>: Increase the production of all buildings based on the worth in seconds of your Tax Collection spell.</p>
			<p><b>Formula</b>: (12 * ln(1 + x) ^ 3)%, where x is the seconds of your Tax Collection.</p>
		<br/>
		<p><b>GB9</b> (Green Fingers Discount)</p>
			<p><b>Effect</b>: Gain coins randomly every 10 minutes. Also works while being offline.</p>
			<p><b>Old Formula</b>: (randRange(1 , 1200) * x), where x is your total (buildings + assistants) coin production per second, does not include spells.</p>
			<p><b>New Formula</b>: (randRange(1 , 2500) * x), where x is your total (buildings + assistants) coin production per second, <b>including spells</b>.</p>
		<br/>
		<p><b>Undead</b></p>
		<p><b>UD4</b> (Unholy Rituals)</p>
			<p><b>Effect</b>: Increase offline production based on time spent being offline in this Reincarnation.</p>
			<p><b>Old Formula</b>: (0.3 * x ^ 0.7)%, where x is your offline time this Reincarnation.</p>
			<p><b>New Formula</b>: (0.4 * x ^ 0.8)%, where x is your offline time this Reincarnation.</p>
		<br/>
		<p><b>UD5</b> (Corpse Supply)</p>
			<p><b>Old Effect</b>: Gain additional assistants based on the highest amount of Necropolises you built this Reincarnation.</p>
			<p><b>Old Formula</b>: +(2.5 * x ^ 0.5), where x is the highest amount of Necropolises you built this Reincarnation.</p>
			<p><b>New Effect</b>: Gain additional assistants based on time spent being offline in this Reincarnation.</p>
			<p><b>New Formula</b>: +(0.4 * x ^ 0.6), where x is the time spent offline in this Reincarnation.</p>
		<br/>
		<p><b>UD6</b> (Plagued Buildings)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on time spent in this game.</p>
			<p><b>Old Formula</b>: (0.6 * x ^ 0.7)%, where x is time spent this game.</p>
			<p><b>New Formula</b>: (0.75 * x ^ 0.75)%, where x is time spent this game.</p>
		<br/>
		<p><b>Demon</b></p>
		<p><b>DM2</b> (Devil Tyrant)</p>
			<p><b>Effect</b>: The three highest building tiers count more based on time spent as Evil in this Reincarnation.</p>
			<p><b>Old Formula</b>: (0.4 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>
			<p><b>New Formula</b>: (0.6 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>
		<br/>
		<p><b>DM4</b> (Lava Pits)</p>
			<p><b>Old Effect</b>: Increase the base production of  Evil Fortresses and Hell Portals by +200,000.</p>
			<p><b>New Effect</b>: Increase the base production of Evil Fortresses by +200,000 and Hell Portals by +2,000,000.</p>
			<p><b>New Effect</b>: Your playtime in this game counts more by 6 additional hours.</p>
		<br/>
		<p><b>DM5</b> (Demon Overseers)</p>
			<p><b>Effect</b>: Increase the production of the three highest building tiers based on the amount of trophies you unlocked.</p>
			<p><b>Old Formula</b>: (x ^ 0.8)%, where x is the amount of Trophies unlocked.</p>
			<p><b>New Formula</b>: (2 * x ^ 0.8)%, where x is the amount of trophies unlocked.</p>
		<br/>
		<p><b>DM7</b> (Infernal Magic)</p>
			<p><b>Effect</b>: Hell Portals also increase your Mana Regeneration rate.</p>
			<p><b>Old Formula</b>: +(x ^ 0.35), where x is the amount of Hell Portals you own</p>
			<p><b>New Formula</b>: +(3.5 * x ^ 0.35), where x is the amount of Hell Portals you own.</p>
		<br/>
		<p><b>DM8</b> (Burning Legion)</p>
			<p><b>Effect</b>: You gain assistants based on the amount of Hell Portals you own.</p>
			<p><b>Old Formula</b>: +(x ^ 0.55), where x is the amount of Hell Portals you own.</p>
			<p><b>New Formula</b>: +(1.5 * x ^ 0.65), where x is the amount of Hell Portals you own.</p>
		<br/>
		<p><b>Druid</b></p>
		<p><b>DD5</b> (Bardic Knowledge)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on your Maximum Mana.</p>
			<p><b>Old Formula</b>: (20 * ln(1 + x) ^ 2)%, where x is your Maximum Mana.</p>
			<p><b>New Formula</b>: (16 * ln(1 + x) ^ 2)%, where x is your Maximum Mana.</p>
		<br/>
		<p><b>DD7</b> (Mabinogion)</p>
			<p><b>Effect</b>: Increase Non-Unique buildings production based on their tier, giving the best bonus to the lowest.</p>
			<p><b>Old Formula</b>: (12 * 2 ^ (12 - T))%, where T is building tier.</p>
			<p><b>New Formula</b>: (12 * 1.8 ^ (12 - T))%, where T is building tier.</p>
		<br/>
		<p><b>Faceless</b></p>
		<p><b>FC1</b> (Territorial Expanse)</p>
			<p><b>Effect</b>: Increase the production of Citadels / Necropolises / Labyrinths (based on your Alignment) based on the amount of assistants you own.</p>
			<p><b>Old Formula</b>: (5 * ln(1 + x) ^ 2.5)%, where x is the amount of assistants you own.</p>
			<p><b>New Formula</b>: (50 * ln(1 + x) ^ 2.5)%, where x is the amount of assistants you own.</p>
		<br/>
		<p><b>FC4</b> (Gold Synthesis)</p>
			<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of gold (coins) owned.</p>
			<p><b>Old Formula</b>: (0.2 * log10(1 + x) ^ 2)%, where x is the amount of coins owned.</p>
			<p><b>New Formula</b>: (0.2 * ln(1 + x) ^ 2)%, where x is the amount of coins owned.</p>
		<br/>
		<p><b>FC5</b> (Mitosis)</p>
			<p><b>Effect</b>: Gain additional Faceless Assistants based on the amount of buildings you own.</p>
			<p><b>Old Formula</b>: +floor(0.3 * x ^ 0.5), where x is the amount of buildings you own.</p>
			<p><b>New Formula</b>: +floor(0.5 * x ^ 0.5), where x is the amount of buildings you own.</p>
		<br/>
		<p><b>FC8</b> (Abominations)</p>
			<p><b>Effect</b>: Increase the production of assistants based on the amount of active spells.</p>
			<p><b>Old Formula</b>: (15 * x)%, where x is the amount of active spells.</p>
			<p><b>New Formula</b>: (20 * x ^ 0.9)%, where x is the amount of active spells.</p>
		<hr>
		<p><b>Spells and Spell Upgrades</b></p>
		<p><b>God's Hand</b> (Angel)</p>
			<p><b>Old Effect</b>: Increase the production of all buildings by 150 times your Mana Regeneration rate.</p>
			<p><b>New Effect</b>: Increase the production of all buildings by 120 times your Mana Regeneration rate.</p>
		<hr>
		<p><b>Unique Buildings</b></p>
		<p><b>Infernal Realm</b> (Demon UB1)</p>
			<p><b>Old Effect</b>: Upgrade Hell Portals To Infernal Realms, boosting their production by 100% per Trophy you unlocked and unlocking more unique perks for the building.</p>
			<p><b>New Effect</b>: Upgrade Hell Portals To Infernal Realms, boosting their production by 50% per Trophy you unlocked and unlocking more unique perks for the building.</p>
		<hr>
		<p><b>Research</b></p>
		<br/>
		<p><b>Craftsmanship</b></p>
		<p><b>C50</b> (Refining)</p>
			<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this Game.</p>
			<p><b>Old Formula</b>: (0.8 * ln(1 + x) ^ 3)%, where x is your Demon Coins gained this Game.</p>
			<p><b>New Formula</b>: (0.3 * ln(1 + x) ^ 3)%, where x is your Demon Coins gained this Game.</p>
		<br/>
		<p><b>C200</b> (Journeymen)</p>
			<p><b>Effect</b>: Increase the production of Unique Buildings based on total time spent as that faction.</p>
			<p><b>Old Formula</b>: (0.125 * x ^ 0.7)%, where x is your time spent as the faction of the Unique Building.</p>
			<p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your time spent as the faction of the Unique Building.</p>
		<br/>
		<p><b>Economics</b></p>
		<p><b>E225</b> (Forgery)</p>
			<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.</p>
			<p><b>Old Formula</b>: (10 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
			<p><b>New Formula</b>: (1.5 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
		<br/>
		<p><b>E11375</b> (Heist)</p>
			<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have.</p>
			<p><b>Old Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is the number of assistants you have.</p>
			<p><b>New Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is the number of assistants you have.</p>
		<br/>
		<p><b>Alchemy</b></p>
		<p><b>A25</b> (Deflagration)</p>
			<p><b>Old Effect</b>: Set Hellfire Blast duration to 4 seconds, and it will not be modified by other effects. Also reduce its mana cost by 200 and increase its effect by 1000%.</p>
			<p><b>New Effect</b>: Set Hellfire Blast duration to 4 seconds, and it will not be modified by other effects. Also reduce its mana cost by 200 and increase its effect by 800%.</p>
		<br/>
		<p><b>A330</b> (Adaptation)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions (across all Reincarnations).</p>
			<p><b>Old Formula</b>: (0.05 * (x - y) ^ 0.7)%, where x is All Time playtime, y is the sum of time spent of your current factions.</p>
			<p><b>New Formula</b>: (0.05 * (x - y) ^ 0.7)%, where x is All Time playtime, y is the highest time spent amongst your current factions.</p>
			<p><b>Note</b>: This change is to prevent A330 from giving 0% bonus with Prestige Research.</p>
		<br/>
		<p><b>Warfare</b></p>
		<p><b>W1</b> (Assault)</p>
			<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
			<p><b>Old Formula</b>: (70 * x ^ 0.7)%, where x is Hellfire Blasts Cast this Game.</p>
			<p><b>New Formula</b>: (30 * x ^ 0.7)%, where x is Hellfire Blasts Cast this Game.</p>
		<br/>
		<p><b>W25</b> (War Funds)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</p>
			<p><b>Old Formula</b>: (5 * x ^ 0.6)%, where x is Tax Collections Cast This Game.</p>
			<p><b>New Formula</b>: (5 * x ^ 0.5)%, where x is Tax Collections Cast This Game.</p>
		<br/>
		<p><b>Forbidden</b></p>
		<p><b>F11000</b> (Godslaying)</p>
			<p><b>Effect</b>: Active spells count more based on the sum of your Faction spells activity time.</p>
			<p><b>Old Formula</b>: (0.7 * x ^ 0.7)%, where x is your current faction(s)’ faction spell activity time this Reincarnation in seconds.</p>
			<p><b>New Formula</b>: (0.575 * x ^ 0.575)%, where x is your visible faction spell(s) activity time this Reincarnation in seconds.</p>
		<br/>
		<p><b>F11250</b> (Inanity)</p>
			<p><b>Effect</b>: Excavations count more based on time spent offline in this game.</p>
			<p><b>Old Formula</b>: (0.8 * x ^ 0.4)%, where x is time spent offline this game.</p>
			<p><b>New Formula</b>: (0.9 * x ^ 0.45)%, where x is time spent offline this game.</p>
		<hr>
		<p><b>Event</b></p>
		<p><b>Goblin Invasion</b></p>
		<p><b>Fight the Goblin Army</b></p>
		<p><b>Goblin's Bane 1</b> (Magical Clicks)</p>
			<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
			<p><b>Old Formula</b>: (floor(x ^ 1.2) / 10 + 1), where x is amount of active spells.</p>
			<p><b>New Formula</b>: (floor(0.6 * ln(1 + x) ^ 4 + 1)), where x is the amount of active spells.</p>
		<hr>
		<p><b>Trophies</b></p>
		<p><b>Master Archeologist</b></p>
			<p><b>Old Effect</b>: Increase the production of all buildings by 5% when you are playing as Titan, Druid or Faceless.</p>
			<p><b>New Effect</b>: Increase the production of all buildings by 25% when you are playing as Titan, Druid or Faceless.</p>
		<br/>
		<p><b>Holy Frenzy</b></p>
			<p><b>Additional Effect (A4+ only)</b>: Also multiplicatively increase Faction Coin find chance by 500% while playing as any Good or Evil faction.</p>
		<hr>
		<p><b>Other changes</b></p>
		<p><b>Undead Heritage</b></p>
			<p><b>Effect</b>: You gain additional assistants based on the time spent in this game.</p>
			<p><b>Old Formula</b>: +(floor(1 + 1.5 * x ^ 0.5)), where x is time spent this game in hours.</p>
			<p><b>New Formula</b>: +(floor(1 + 1.6 * (x / 3600) ^ 0.6)), where x is time spent this game in seconds.</p>
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
