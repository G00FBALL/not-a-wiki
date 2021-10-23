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
<p><b>Old Formula</b>: (8 * x ^ 0.8)%, where x is time spent offline this Reincarnation.</p>
<p><b>New Formula</b>: (0.666 * x ^ 0.666)%, where x is time spent offline this Reincarnation.</p>
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
<p><b>Effect</b>: Multiplicatively increase max mana based on your current Lineage level.</p>
<p><b>Old Formula</b>: (1.3 * x ^ 1.3)%, where x is your current Lineage level.</p>
<p><b>New Formula</b>: (7 * x ^ 0.9)%, where x is your current Lineage level.</p>
<br/>




<p><b>Undead</b></p>
<p><b>DG</b> ()</p>
<p><b>Old Effect</b>: </p>
<p><b>Old Formula</b>: </p>
<p><b>New Effect</b>: </p>
<p><b>New Formula</b>: </p>
<p><b>Note</b>: </p>
<br/>










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
