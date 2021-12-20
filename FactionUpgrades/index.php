<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<br/>
<h6><img src="http://musicfamily.org/realm/Factions/picks/UpgradesTopPage.png" alt="Spellcraft" align="middle"></h6>
<br/>
<p><b>This page was put together for Mercenary builds.</b></p>
<br/>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Tier 1 Upgrades</a></b></p>
		<div class="autohide">
			<h6>Fairy</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade1.png" align="middle"> Pixie Dust Fertilizer</b></p>
			<p><b>Mercenary Template</b>: FR1</p>
			<p><b>Cost</b>: 50 M (5e7)</p>
			<p><b>Effect</b>: Increase the base production of Farms by +98 and reduce the building cost multiplier.</p>
			<p><b>Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade2.png" align="middle"> Fairy Workers</b></p>
			<p><b>Mercenary Template</b>: FR2</p>
			<p><b>Cost</b>: 500 M (5e8)</p>
			<p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 10,000%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade3.png" align="middle"> Kind Hearts</b></p>
			<p><b>Mercenary Template</b>: FR3</p>
			<p><b>Cost</b>: 5 B (5e9)</p>
			<p><b>Effect</b>: Increases maximum mana based on the amount of good buildings you own.</p>
			<p><b>Formula</b>: +(1.3 * x ^ 0.7), where x is the amount of good buildings you own.</p>
			<hr>
			<h6>Elven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade1.png" align="middle"> Elven Mint</b></p>
			<p><b>Mercenary Template</b>: EL1</p>
			<p><b>Cost</b>: 50 M (5e7)</p>
			<p><b>Effect</b>: The base chance to find Faction Coins is increased by a multiplicative 150%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade2.png" align="middle"> Elven Treasure Casing</b></p>
			<p><b>Mercenary Template</b>: EL2</p>
			<p><b>Cost</b>: 500 M (5e8)</p>
			<p><b>Effect</b>: Increase base clicking reward by +25,000 per trophy, and increase chance to find faction coins based on the amount of trophies you unlocked.</p>
			<p><b>Formula</b>: +((1 + 0.1 * x) ^ 0.95)%, where x is the amount of Trophies unlocked.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade3.png" align="middle"> Ancient Clicking Arts</b></p>
			<p><b>Mercenary Template</b>: EL3</p>
			<p><b>Cost</b>: 5 B (5e9)</p>
			<p><b>Effect</b>: Increase Mana Regeneration based on the amount of clicks made in this Reincarnation.</p>
			<p><b>Formula</b>: +(2 * log10(1 + x) ^ 1.25), where x is the amount of clicks made in this Reincarnation.</p>
			<hr>
			<h6>Angel</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade1.png" align="middle"> Holy Bells</b></p>
			<p><b>Mercenary Template</b>: AN1</p>
			<p><b>Cost</b>: 50 M (5e7)</p>
			<p><b>Effect</b>: Increase Mana Regeneration based on the amount of buildings you own.</p>
			<p><b>Formula</b>: +(1.6 * x ^ 0.4), where x is the amount of buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade2.png" align="middle"> Angelic Determination</b></p>
			<p><b>Mercenary Template</b>: AN2</p>
			<p><b>Cost</b>: 500 M (5e8)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
			<p><b>Formula</b>: (4 * ln(1 + x) ^ 2)%, where x is Spells Cast (This Game) stat.</p>
			<p><b>Effect</b>: Also increase Angel Coins found (from all sources) by 500%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade3.png" align="middle"> Angel Feathers</b></p>
			<p><b>Mercenary Template</b>: AN3</p>
			<p><b>Cost</b>: 5 B (5e9)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of active spells (additive).</p>
			<p><b>Formula</b>: +(10 * x)%, where x is the amount of active spells.</p>
			<hr>
			<h6>Goblin</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade1.png" align="middle"> Strong Currency</b></p>
			<p><b>Mercenary Template</b>: GB1</p>
			<p><b>Cost</b>: 50 M (5e7)</p>
			<p><b>Effect</b>: Increase assistants based on Faction Coins found in this game.</p>
			<p><b>Formula</b>: +(0.5 * ln(1 + x) ^ 2), where x is Faction Coins found this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade2.png" align="middle"> Slave Trading</b></p>
			<p><b>Mercenary Template</b>: GB2</p>
			<p><b>Cost</b>: 500 M (5e8)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Evil buildings you own.</p>
			<p><b>Formula</b>: (2 * x ^ 0.7)%, where x is the amount of Evil buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade3.png" align="middle"> Cheap Materials</b></p>
			<p><b>Mercenary Template</b>: GB3</p>
			<p><b>Cost</b>: 5 B (5e9)</p>
			<p><b>Effect</b>: Tax Collection is worth more seconds based on the amount of Buildings you own (additive).</p>
			<p><b>Formula</b>: +(x ^ 0.5), where x is the amount of Buildings you own.</p>
			<hr>
			<h6>Undead</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade1.png" align="middle"> The Walking Dead</b></p>
			<p><b>Mercenary Template</b>: UD1</p>
			<p><b>Cost</b>: 50 M (5e7)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance based on assistants owned (Additive).</p>
			<p><b>Formula</b>: +(ln(1 + x) ^ 1.75)%, where x is assistants owned.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade2.png" align="middle"> Deadened Muscles</b></p>
			<p><b>Mercenary Template</b>: UD2</p>
			<p><b>Cost</b>: 500 M (5e8)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of Necropolises you built in this Reincarnation.</p>
			<p><b>Formula</b>: (4 * x ^ 0.8)%, where x is the the highest amount of Necropolises you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade3.png" align="middle"> Death Temples</b></p>
			<p><b>Mercenary Template</b>: UD3</p>
			<p><b>Cost</b>: 5 B (5e9)</p>
			<p><b>Effect</b>: Increase Mana Regeneration based on the highest amount of Necropolises you built in this Reincarnation.</p>
			<p><b>Formula</b>: (x ^ 0.3), where x is the highest amount of Necropolises you built in this Reincarnation.</p>
			<hr>
			<h6>Demon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade1.png" align="middle"> Torture Chambers</b></p>
			<p><b>Mercenary Template</b>: DM1</p>
			<p><b>Cost</b>: 50 M (5e7)</p>
			<p><b>Effect</b>: Increase the production of Royal Castles / Evil Fortresses / Iron Strongholds (based on your Alignment) based on the amount of assistants you own.</p>
			<p><b>Formula</b>: (6 * ln(1 + x) ^ 3)%, where x is the amount of assistants you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade2.png" align="middle"> Devil Tyrant</b></p>
			<p><b>Mercenary Template</b>: DM2</p>
			<p><b>Cost</b>: 500 M (5e8)</p>
			<p><b>Effect</b>: The three highest building tiers count more based on time spent as Evil in this Reincarnation.</p>
			<p><b>Formula</b>: (1.2 * x ^ 0.4)%, where x is time spent as Evil this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade3.png" align="middle"> Evil Conquerors</b></p>
			<p><b>Mercenary Template</b>: DM3</p>
			<p><b>Cost</b>: 5 B (5e9)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of Hell Portals you built in this Reincarnation.</p>
			<p><b>Formula</b>: (4 * x ^ 0.8)%, where x is the highest amount of Hell Portals you built in this Reincarnation.</p>
			<hr>
			<h6>Titan</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade1.png" align="middle"> Colossal Forge</b></p>
			<p><b>Mercenary Template</b>: TT1</p>
			<p><b>Cost</b>: 500 Qi (5e20)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own.</p>
			<p><b>Formula</b>: (6 * x ^ 0.6)%, where x is the amount of buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade2.png" align="middle"> Charged Clicks</b></p>
			<p><b>Mercenary Template</b>: TT2</p>
			<p><b>Cost</b>: 5 Sx (5e21)</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on clicks made in this game.</p>
			<p><b>Formula</b>: (25 + 2.5 * log10(1 + x) ^ 2.5 + x ^ 0.25)%, where x is clicks made this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade3.png" align="middle"> Titan Obelisk</b></p>
			<p><b>Mercenary Template</b>: TT3</p>
			<p><b>Cost</b>: 50 Sx (5e22)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance additively based on time spent as Neutral in this Reincarnation.</p>
			<p><b>Formula</b>: +(3 * x ^ 0.7)%, where x is time spent as Neutral in this Reincarnation.</p>
			<hr>
			<h6>Druid</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade1.png" align="middle"> Druidic Vocabulary</b></p>
			<p><b>Mercenary Template</b>: DD1</p>
			<p><b>Cost</b>: 500 Qi (5e20)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on their tier, giving the best bonus to the lowest.</p>
			<p><b>Formula</b>: (4000 * (12 - T))%, where T is building tier.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade2.png" align="middle"> Animal Companions</b></p>
			<p><b>Mercenary Template</b>: DD2</p>
			<p><b>Cost</b>: 5 Sx (5e21)</p>
			<p><b>Effect</b>: You instantly attract 3 Animal assistants and more will come based on the time spent in this game.</p>
			<p><b>Formula</b>: +(3 + 1.75 * x ^ 0.5), where x is time spent in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade3.png" align="middle"> Natural Recycling</b></p>
			<p><b>Mercenary Template</b>: DD3</p>
			<p><b>Cost</b>: 50 Sx (5e22)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on the amount of the total buildings you own.</p>
			<p><b>Formula</b>: (0.4 x ^ 0.4), where x is total buildings you own.</p>
			<hr>
			<h6>Faceless</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade1.png" align="middle"> Territorial Expanse</b></p>
			<p><b>Mercenary Template</b>: FC1</p>
			<p><b>Cost</b>: 500 Qi (5e20)</p>
			<p><b>Effect</b>: Increase the production of Citadels / Necropolises / Labyrinths (based on your Alignment) based on the amount of assistants you own.</p>
			<p><b>Formula</b>: (50 * ln(1 + x) ^ 2.5)%, where x is the amount of assistants you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade2.png" align="middle"> Evolutive Mutation</b></p>
			<p><b>Mercenary Template</b>: FC2</p>
			<p><b>Cost</b>: 5 Sx (5e21)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of Labyrinths you built in this Reincarnation.</p>
			<p><b>Formula</b>: +floor(3 * x ^ 0.6)%, where x is the highest amount of Labyrinths you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade3.png" align="middle"> Deep Memory</b></p>
			<p><b>Mercenary Template</b>: FC3</p>
			<p><b>Cost</b>: 50 Sx (5e22)</p>
			<p><b>Effect</b>: Multiplicatively increase assistants based on the time spent on your longest game session in this Reincarnation.</p>
			<p><b>Formula</b>: (0.3 * x ^ 0.7)%, where x is your Playtime (Longest Session) stat this Reincarnation.</p>
			<hr>
			<h6>Dwarven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade1.png" align="middle"> Dwarven Ale</b></p>
			<p><b>Mercenary Template</b>: DN1</p>
			<p><b>Cost</b>: 5 Qad (5e45)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Blacksmiths you own (Additive).</p>
			<p><b>Formula</b>: +(2 * x ^ 0.5)%, where x is the amount of Blacksmiths you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade2.png" align="middle"> Expert Masonry</b></p>
			<p><b>Mercenary Template</b>: DN2</p>
			<p><b>Cost</b>: 50 Qad (5e46)</p>
			<p><b>Effect</b>: Reduce all building cost multipliers.</p>
			<p><b>Effect</b>: Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade3.png" align="middle"> Mining Prodigies</b></p>
			<p><b>Mercenary Template</b>: DN3</p>
			<p><b>Cost</b>: 500 Qad (5e47)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Excavations you made, including resets, in this Reincarnation.</p>
			<p><b>Formula</b>: (40 * (x * (1 + 2 * y)) ^ 0.4)%, where x is the number of excavations made this Reincarnation, y is the number of excavation resets in this Reincarnation.</p>	
			<hr>
			<h6>Drow</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade1.png" align="middle"> Underworld Tyranny</b></p>
			<p><b>Mercenary Template</b>: DW1</p>
			<p><b>Cost</b>: 5 Qad (5e45)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on your total time spent being Evil in this Reincarnation.</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is time spent being Evil in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade2.png" align="middle"> Honor Among Killers</b></p>
			<p><b>Mercenary Template</b>: DW2</p>
			<p><b>Cost</b>: 50 Qad (5e46)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of assistants you own.</p>
			<p><b>Formula</b>: +(100 + 0.5 * x ^ 0.5)%, where x is the amount of assistants you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade3.png" align="middle"> Shadow Advance</b></p>
			<p><b>Mercenary Template</b>: DW3</p>
			<p><b>Cost</b>: 500 Qad (5e47)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on Maximum Mana.</p>
			<p><b>Formula</b>: (2 * log10(1 + x) ^ 2))%, where x is your Maximum Mana.</p>
			<hr>
			<h6>Dragon</h6>
			<p><b>Note</b>: Only 1 Dragon Upgrade per Mercenary tier.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade1.png" align="middle"> Dragonscales</b></p>
			<p><b>Mercenary Template</b>: DG1</p>
			<p><b>Cost</b>: 5 Uvg (5.0e66)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of time spent as Neutral in this Reincarnation. Effect is increased on Stone Pillars, Labyrinths and Hall Of Legends.</p>
			<p><b>Formula</b>: ((x / 60) ^ 0.5)%, where x is time spent as Neutral this Reincarnation. This is multiplied by 10 on Stone Pillars, Labyrinths and Hall of Legends.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade2.png" align="middle"> Iron Flight</b></p>
			<p><b>Mercenary Template</b>: DG2</p>
			<p><b>Cost</b>: 50 Uvg (5.0e67)</p>
			<p><b>Effect</b>: Increase the production of Iron Stronghold by 200% per spell affecting it.</p>
			<p><b>Note</b>: Each instance of spell effects count as one spell (represented by the spell effect icons on the building icons). This includes Red, Green & Black Breath, A150 and D400.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade3.png" align="middle"> Imposing Presence</b></p>
			<p><b>Mercenary Template</b>: DG3</p>
			<p><b>Cost</b>: 500 Uvg (5.0e68)</p>
			<p><b>Effect</b>: Increase Mana Regeneration based on the amount of Neutral buildings you own.</p>
			<p><b>Formula</b>: +(0.5 * x ^ 0.5), where x is the number of Neutral buildings owned.</p>
			<hr>
			<h6>Archon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade1.png" align="middle"> Star Trading</b></p>
			<p><b>Mercenary Template</b>: AR1</p>
			<p><b>Cost</b>: 1 NoQag (1e150)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the maximum amount of Royal Exchanges you made in this Reincarnation.</p>
			<p><b>Formula</b>: (0.9 * x)%, where x is the maximum amount of Royal Exchanges you made in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade2.png" align="middle"> Energy Recharge</b></p>
			<p><b>Mercenary Template</b>: AR2</p>
			<p><b>Cost</b>: 10 NoQag (1e151)</p>
			<p><b>Effect</b>: Maximum Mana counts more based on the amount of time spent as Order in this Reincarnation.</p>
			<p><b>Formula</b>: (0.25 * x ^ 0.5)%, where x is time spent as Order in this Reincarnation.</p>
			<p><b>Effect</b>: Also increase Precognition base, scaling, and changes its starting duration to 5 minutes.</p>
			<p><b>Precognition Formula</b>: (1.25 * ln(1 + x) ^ 1.5)%, where x is Mana produced in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade3.png" align="middle"> Cosmic Resonance</b></p>
			<p><b>Mercenary Template</b>: AR3</p>
			<p><b>Cost</b>: 100 NoQag (1e152)</p>
			<p><b>Effect</b>: Increase Royal Exchange bonus based on clicks made in this Reincarnation.</p>
			<p><b>Formula</b>: +(0.5 * x ^ 0.5)%, where x is clicks made this Reincarnation.</p>
			<hr>
			<h6>Djinn</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade1.png" align="middle"> The Desire Within</b></p>
			<p><b>Mercenary Template</b>: DJ1</p>
			<p><b>Cost</b>: 1 NoQag (1e150)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on spells of your current alignments cast in this game.</p>
			<p><b>Formula</b>: (25 * ln(1 + x) ^ 2.5)%, where x is alignments spells cast in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade2.png" align="middle"> Forbidden Will</b></p>
			<p><b>Mercenary Template</b>: DJ2</p>
			<p><b>Cost</b>: 10 NoQag (1e151)</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the highest amount of Faction Coins found in this Reincarnation.</p>
			<p><b>Formula</b>: (0.2 * log10(1 + x) ^ 2)%, where x is highest amount of Faction Coins found in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade3.png" align="middle"> Magical Circuit</b></p>
			<p><b>Mercenary Template</b>: DJ3</p>
			<p><b>Cost</b>: 100 NoQag (1e152)</p>
			<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on researches selected.</p>
			<p><b>Formula</b>: (sum(sumOfDigits(x)) ^ 1.15)%, where x is any single selected research upgrade.</p>
			<hr>
			<h6>Makers</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade1.png" align="middle"> Hand of the Makers</b></p>
			<p><b>Mercenary Template</b>: MK1</p>
			<p><b>Cost</b>: 1 NoQag (1e150)</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is clicks made in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade2.png" align="middle"> Everlasting Materials</b></p>
			<p><b>Mercenary Template</b>: MK2</p>
			<p><b>Cost</b>: 10 NoQag (1e151)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
			<p><b>Formula</b>: (0.25 * x ^ 0.85)%, where x is highest amount of buildings built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade3.png" align="middle"> Infinite Improvements</b></p>
			<p><b>Mercenary Template</b>: MK3</p>
			<p><b>Cost</b>: 100 NoQag (1e152)</p>
			<p><b>Effect</b>: Increase the production of All Buildings based on time spent as Balance.</p>
			<p><b>Formula</b>: (0.3 * x ^ 0.7)%, where x is time spent as Balance in this Reincarnation.</p>
		 </div>
	</div>
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Tier 2 Upgrades</a></b></p>
		<div class="autohide">
			<h6>Fairy</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade4.png" align="middle"> Fairy Cuisine</b></p>
			<p><b>Mercenary Template</b>: FR4</p>
			<p><b>Cost</b>: 500 B (5e11)</p>
			<p><b>Effect</b>: Increase the base production of Inns by +234 and reduce the building cost multiplier.</p>
			<p><b>Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade5.png" align="middle"> Golden Pots</b></p>
			<p><b>Mercenary Template</b>: FR5</p>
			<p><b>Cost</b>: 5 T (5e12)</p>
			<p><b>Effect</b>: Additively increase base clicking reward by 20% of the building production of Farms, Inns and Blacksmiths combined.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade6.png" align="middle"> Spellsmith</b></p>
			<p><b>Mercenary Template</b>: FR6</p>
			<p><b>Cost</b>: 50 T (5e13)</p>
			<p><b>Effect</b>: Blacksmiths also increase your Mana Regeneration.</p>
			<p><b>Formula</b>: +(2.75 * x ^ 0.275), where x is the number of Blacksmiths you own.</p>
			<hr>
			<h6>Elven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade4.png" align="middle"> Elven Emissary</b></p>
			<p><b>Mercenary Template</b>: EL4</p>
			<p><b>Cost</b>: 500 B (5e11)</p>
			<p><b>Effect</b>: Increase clicking reward based on the amount of Good buildings you own, and assistants find 3 times as many Faction Coins.</p>
			<p><b>Formula</b>: (x ^ 0.6)%, where x is the number of Good Buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade5.png" align="middle"> Elven Efficiency</b></p>
			<p><b>Mercenary Template</b>: EL5</p>
			<p><b>Cost</b>: 5 T (5e12)</p>
			<p><b>Effect</b>: Increase Royal Exchange bonus based on Faction Coins found this game.</p>
			<p><b>Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade6.png" align="middle"> Secret Clicking Techniques</b></p>
			<p><b>Mercenary Template</b>: EL6</p>
			<p><b>Cost</b>: 50 T (5e13)</p>
			<p><b>Effect</b>: Increases the production of all buildings based on your total of clicks.</p>
			<p><b>Formula</b>: (2 * x ^ 0.4)%, where x is your Treasure Clicks (Total) stat.</p>
			<hr>
			<h6>Angel</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade4.png" align="middle"> Guardian Angels</b></p>
			<p><b>Mercenary Template</b>: AN4</p>
			<p><b>Cost</b>: 500 B (5e11)</p>
			<p><b>Effect</b>: Spell casts count 100% more.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade5.png" align="middle"> Angelic Wisdom</b></p>
			<p><b>Mercenary Template</b>: AN5</p>
			<p><b>Cost</b>: 5 T (5e12)</p>
			<p><b>Effect</b>: Decrease the cost of all spells by 50%.</p>
			<p><b>Effect</b>: Also increases offline spell cast amount by multiplicatively based on your offline Mana Regeneration.</p>
			<p><b>Formula</b>: (10 * log10(1 + x))%, where x is your offline Mana Regeneration.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade6.png" align="middle"> Archangel Feathers</b></p>
			<p><b>Mercenary Template</b>: AN6</p>
			<p><b>Cost</b>: 50 T (5e13)</p>
			<p><b>Effect</b>: Increase Mana production by 50%.</p>
			<hr>
			<h6>Goblin</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade4.png" align="middle"> Black Market</b></p>
			<p><b>Mercenary Template</b>: GB4</p>
			<p><b>Cost</b>: 500 B (5e11)</p>
			<p><b>Effect</b>: Production bonus from gems is increased by a multiplicative 150%.</p>
			<p><b>Effect</b>: Also increase Offline production based on the amount of Tax Collection casts in this game.</p>
			<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is Tax Collection casts this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade5.png" align="middle"> Goblin Economists</b></p>
			<p><b>Mercenary Template</b>: GB5</p>
			<p><b>Cost</b>: 5 T (5e12)</p>
			<p><b>Effect</b>: Mutiplicatively increase Mana Regeneration based on Gold owned.</p>
			<p><b>Formula</b>: (0.75 * log10(1 + x) ^ 1.25)%, where x is Gold owned.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade6.png" align="middle"> Hobgoblin Gladiators</b></p>
			<p><b>Mercenary Template</b>: GB6</p>
			<p><b>Cost</b>: 50 T (5e13)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the worth in seconds of your Tax Collection spell.</p>
			<p><b>Formula</b>: (12 * ln(1 + x) ^ 3)%, where x is the seconds of your Tax Collection.</p>
			<hr>
			<h6>Undead</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade4.png" align="middle"> Unholy Rituals</b></p>
			<p><b>Mercenary Template</b>: UD4</p>
			<p><b>Cost</b>: 500 B (5e11)</p>
			<p><b>Effect</b>: Increase offline production based on time spent being offline in this Reincarnation.</p>
			<p><b>Formula</b>: (0.4 * x ^ 0.8)%, where x is your offline time this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade5.png" align="middle"> Corpse Supply</b></p>
			<p><b>Mercenary Template</b>: UD5</p>
			<p><b>Cost</b>: 5 T (5e12)</p>
			<p><b>Effect</b>: Gain additional assistants based on time spent being offline in this Reincarnation.</p>
			<p><b>Formula</b>: +(0.4 * x ^ 0.6), where x is the time spent offline in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade6.png" align="middle"> Plagued Buildings</b></p>
			<p><b>Mercenary Template</b>: UD6</p>
			<p><b>Cost</b>: 50 T (5e13)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on time spent in this game.</p>
			<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is time spent this game.</p>
			<hr>
			<h6>Demon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade4.png" align="middle"> Lava Pits</b></p>
			<p><b>Mercenary Template</b>: DM4</p>
			<p><b>Cost</b>: 500 B (5e11)</p>
			<p><b>Effect</b>: Increase the base production of Evil Fortresses by +200,000 and Hell Portals by +2,000,000.</p>
			<p><b>Effect</b>: Your playtime in this game counts more by 6 additional hours.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade5.png" align="middle"> Demon Overseers</b></p>
			<p><b>Mercenary Template</b>: DM5</p>
			<p><b>Cost</b>: 5 T (5e12)</p>
			<p><b>Effect</b>: Increase the production of the three highest building tiers based on the amount of trophies you unlocked.</p>
			<p><b>Formula</b>: (2 * x ^ 0.8)%, where x is the amount of trophies unlocked.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade6.png" align="middle"> Demonic Presence</b></p>
			<p><b>Mercenary Template</b>: DM6</p>
			<p><b>Cost</b>: 50 T (5e13)</p>
			<p><b>Effect</b>: Increase Max Mana based on Evil spells cast in this game (Additve).</p>
			<p><b>Formula</b>: +(6 * x ^ 0.4), where x is Evil spells cast this game.</p>
			<hr>
			<h6>Titan</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade4.png" align="middle"> Titan Drill</b></p>
			<p><b>Mercenary Template</b>: TT4</p>
			<p><b>Cost</b>: 5 Sp (5e24)</p>
			<p><b>Effect</b>: Increase the base production of Warrior Barracks / Slave Pens / Deep Mines by +9635 and Cathedrals / Dark Temples / Monasteries by +98000 (based on your Alignment). Also increases building production of these tiers by 1000%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade5.png" align="middle"> Charged Structures</b></p>
			<p><b>Mercenary Template</b>: TT5</p>
			<p><b>Cost</b>: 50 Sp (5e25)</p>
			<p><b>Effect</b>:  Increase the production of all buildings based on the amount of active spells.</p>
			<p><b>Formula</b>: (15 * x)%, where x is the amount of active spells.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade6.png" align="middle"> Titan Sized Walls</b></p>
			<p><b>Mercenary Template</b>: TT6</p>
			<p><b>Cost</b>: 500 Sp (5e26)</p>
			<p><b>Effect</b>: Increase Hall of Legends production based on the amount of assistants you own.</p>
			<p><b>Formula</b>: (20 + 2.15 * ln(1 + x) ^ 2.15)%, where x is the amount of assistants you own.</p>
			<hr>
			<h6>Druid</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade4.png" align="middle"> Earthly Bond</b></p>
			<p><b>Mercenary Template</b>: DD4</p>
			<p><b>Cost</b>: 5 Sp (5e24)</p>
			<p><b>Effect</b>: Increase maximum mana based on the highest amount of Stone Pillars you built in this Reincarnation.</p>
			<p><b>Formula</b>: +(2 * x), where x is the highest amount of Stone Pillars you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade5.png" align="middle"> Bardic Knowledge</b></p>
			<p><b>Mercenary Template</b>: DD5</p>
			<p><b>Cost</b>: 50 Sp (5e25)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on your Maximum Mana.</p>
			<p><b>Formula</b>: (16 * ln(1 + x) ^ 2)%, where x is your Maximum mana.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade6.png" align="middle"> Shapeshifting</b></p>
			<p><b>Mercenary Template</b>: DD6</p>
			<p><b>Cost</b>: 500 Sp (5e26)</p>
			<p><b>Effect</b>: Increase mana regeneration based on the amount of assistants you own.</p>
			<p><b>Formula</b>: (1.3 * x ^ 0.7), where x is the amount of assistants you own.</p>
			<hr>
			<h6>Faceless</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade4.png" align="middle"> Gold Synthesis</b></p>
			<p><b>Mercenary Template</b>: FC4</p>
			<p><b>Cost</b>: 5 Sp (5e24)</p>
			<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of coins owned.</p>
			<p><b>Formula</b>: (0.2 * ln(1 + x) ^ 2)%, where x is the amount of coins owned.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade5.png" align="middle"> Mitosis</b></p>
			<p><b>Mercenary Template</b>: FC5</p>
			<p><b>Cost</b>: 50 Sp (5e25)</p>
			<p><b>Effect</b>: Gain additional Faceless Assistants based on the amount of buildings you own.</p>
			<p><b>Formula</b>: +floor(0.5 * x ^ 0.5), where x is the amount of buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade6.png" align="middle"> Overgrowth</b></p>
			<p><b>Mercenary Template</b>: FC6</p>
			<p><b>Cost</b>: 500 Sp (5e26)</p>
			<p><b>Effect</b>: Increases production based on the highest amount of buildings purchased in a single game in this Reincarnation.</p>
			<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is the highest amount of buildings purchased in a single game in this Reincarnation.</p>
			<hr>
			<h6>Dwarven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade4.png" align="middle"> Underground Citadels</b></p>
			<p><b>Mercenary Template</b>: DN4</p>
			<p><b>Cost</b>: 50 Qid (5e49)</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Gems you own.</p>
			<p><b>Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is the amount of Gems you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade5.png" align="middle"> Indestructible Treasure</b></p>
			<p><b>Mercenary Template</b>: DN5</p>
			<p><b>Cost</b>: 500 Qid (5e50)</p>
			<p><b>Effect</b>: Increase clicking reward based on the amount of buildings you own.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.65)%, where x is the amount of buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade6.png" align="middle"> Bearded Assistants</b></p>
			<p><b>Mercenary Template</b>: DN6</p>
			<p><b>Cost</b>: 5 Sxd (5e51)</p>
			<p><b>Effect</b>: Increase the production of assistants based on how long their beard is (it grows over time!).</p>
			<p><b>Formula</b>: (x ^ 0.7)%, where x is time spent in this game.</p>
			<hr>
			<h6>Drow</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade4.png" align="middle"> Mana Addicts</b></p>
			<p><b>Mercenary Template</b>: DW4</p>
			<p><b>Cost</b>: 50 Qid (5e49)</p>
			<p><b>Effect</b>: Mana Regeneration increases over time.</p>
			<p><b>Formula</b>: +(2.5 + 0.25 * x ^ 0.5), where x is time spent in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade5.png" align="middle"> Blood Sacrifices</b></p>
			<p><b>Mercenary Template</b>: DW5</p>
			<p><b>Cost</b>: 500 Qid (5e50)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of Dark Temples you built in this Reincarnation.</p>
			<p><b>Formula</b>: (3 * x)%, where x is the highest amount of Dark Temples you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade6.png" align="middle"> Blackmail</b></p>
			<p><b>Mercenary Template</b>: DW6</p>
			<p><b>Cost</b>: 5 Sxd (5e51)</p>
			<p><b>Effect</b>: Reduces Royal Exchange cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.08 instead of 1.1.</p>
			<hr>
			<h6>Dragon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade4.png" align="middle"> Dragonborn</b></p>
			<p><b>Mercenary Template</b>: DG4</p>
			<p><b>Cost</b>: 50 Dvg (5.0e70)</p>
			<p><b>Effect</b>: Increase assistants additively and multiplicatively, and their production, based on time spent affiliated with Dragons.</p>
			<p><b>Formula (Additive)</b>: +(50 * x ^ 0.5), where x is time spent as Dragons (All Time).</p>
			<p><b>Formula (Multiplicative)</b>: (0.5 * x ^ 0.25)%, where x is time spent as Dragons (All Time).</p>
			<p><b>Formula (Production)</b>: (0.7 * x ^ 0.3)%, where x is time spent as Dragons (All Time).</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade5.png" align="middle"> Bountiful Hoard</b></p>
			<p><b>Mercenary Template</b>: DG5</p>
			<p><b>Cost</b>: 500 Dvg (5e71 DC)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Artifacts you found.</p>
			<p><b>Formula</b>: (5 * (x ^ 1.25))%, where x is amount of artifacts you found.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade6.png" align="middle"> Sharp Claws</b></p>
			<p><b>Mercenary Template</b>: DG6</p>
			<p><b>Cost</b>: 5 Tvg (5e72 DC)</p>
			<p><b>Effect</b>: Multiplicatively increase Royal Exchange Bonus and Faction Coin find chance based on Clicks made in this game.</p>
			<p><b>Formula</b>: (0.8 * x ^ 0.35)%, where x is the number of Clicks this game.</p>
			<hr>
			<h6>Archon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade4.png" align="middle"> Constellation</b></p>
			<p><b>Mercenary Template</b>: AR4</p>
			<p><b>Cost</b>: 100 UQig (1e158)</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Unique Buildings owned.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Unique Buildings owned.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade5.png" align="middle"> Archon Pride</b></p>
			<p><b>Mercenary Template</b>: AR5</p>
			<p><b>Cost</b>: 1 DQig (1e159)</p>
			<p><b>Effect</b>: Multiplicatively increase assistants based on your current Lineage level.</p>
			<p><b>Formula</b>: (x)%, where x is your current Lineage level.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade6.png" align="middle"> Absent-mindedness</b></p>
			<p><b>Mercenary Template</b>: AR6</p>
			<p><b>Cost</b>: 10 DQig (1e160)</p>
			<p><b>Effect</b>: Increase Offline bonus based on Excavation Resets made in this Reincarnation.</p>
			<p><b>Formula</b>: (30 + 3 * (x + y) ^ 3)%, where x and y are free and ruby excavation resets done in this Reincarnation.</p>
			<hr>
			<h6>Djinn</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade4.png" align="middle"> Aura of Magic</b></p>
			<p><b>Mercenary Template</b>: DJ4</p>
			<p><b>Cost</b>: 100 UQig (1e158)</p>
			<p><b>Effect</b>: Increase non-unique building production based on Mana produced this game.</p>
			<p><b>Formula</b>: (0.325 * x ^ 0.325)%, where x is Mana produced this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade5.png" align="middle"> Spiritual Bindings</b></p>
			<p><b>Mercenary Template</b>: DJ5</p>
			<p><b>Cost</b>: 1 DQig (1e159)</p>
			<p><b>Effect</b>: Multiplicatively increase assistants based on time spent offline.</p>
			<p><b>Formula</b>: (0.65 * x ^ 0.5)%, where x is time spent offline this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade6.png" align="middle"> Wild Surge</b></p>
			<p><b>Mercenary Template</b>: DJ6</p>
			<p><b>Cost</b>: 10 DQig (1e160)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
			<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is the duration of your longest spell.</p>
			<hr>
			<h6>Makers</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade4.png" align="middle"> Magical Shards</b></p>
			<p><b>Mercenary Template</b>: MK4</p>
			<p><b>Cost</b>: 100 UQig (1e158)</p>
			<p><b>Effect</b>: Multiplicatively increase mana regeneration based on artifacts found.</p>
			<p><b>Formula</b>: (x ^ 0.95)%, where x is artifacts found.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade5.png" align="middle"> Treasure Mosaic</b></p>
			<p><b>Mercenary Template</b>: MK5</p>
			<p><b>Cost</b>: 1 DQig (1e159)</p>
			<p><b>Effect</b>: Additionally increase Maximum Mana based on Faction Coins found in this game.</p>
			<p><b>Formula</b>: +(27.5 * log10(1 + x) ^ 2.75), where x is Faction Coins found in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade6.png" align="middle"> Art of Commerce</b></p>
			<p><b>Mercenary Template</b>: MK6</p>
			<p><b>Cost</b>: 10 DQig (1e160)</p>
			<p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on their quantity.</p>
			<p><b>Formula</b>: (0.2 * x ^ 0.6)%, where x is Royal Exchanges made.</p>
		</div>
	</div>
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Tier 3 Upgrades</a></b></p>
		<div class="autohide">
			<h6>Fairy</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade7.png" align="middle"> Starmetal Alloys</b></p>
			<p><b>Mercenary Template</b>: FR7</p>
			<p><b>Cost</b>: 5 Qa (5e15)</p>
			<p><b>Effect</b>: Increase the base production of Blacksmiths by +580 and reduce the building cost multiplier.</p>
			<p><b>Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade8.png" align="middle"> Rainbow Link</b></p>
			<p><b>Mercenary Template</b>: FR8</p>
			<p><b>Cost</b>: 50 Qa (5e16)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Farms, Inns and Blacksmiths you own.</p>
			<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is the amount of Farms, Inns and Blacksmiths you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade9.png" align="middle"> Swarm of Fairies</b></p>
			<p><b>Mercenary Template</b>: FR9</p>
			<p><b>Cost</b>: 500 Qa (5e17)</p>
			<p><b>Effect</b>: You gain additional assistants based on the amount of Farms, Inns and Blacksmiths you own.</p>
			<p><b>Formula</b>: +(1.2 * x ^ 0.6), where x is the number of Farms, Inns, and Blacksmiths you own.</p>
			<hr>
			<h6>Elven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade7.png" align="middle"> Elven Diplomacy</b></p>
			<p><b>Mercenary Template</b>: EL7</p>
			<p><b>Cost</b>: 5 Qa (5e15)</p>
			<p><b>Effect</b>: Increase click count based on Faction Coins found in this game.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2), where x is Faction Coins found in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade8.png" align="middle"> Elven Luck</b></p>
			<p><b>Mercenary Template</b>: EL8</p>
			<p><b>Cost</b>: 50 Qa (5e16)</p>
			<p><b>Effect</b>: Each time you click for money you have 1% chance to gain coins equal to 250000% of your production, also generating Faction Coins based on Reincarnation made.</p>
			<p><b>Formula (Production)</b>: (2500 * (x + y)), where x is the production of all buildings, and y is the production of one assistant.</p>
			<p><b>Formula (Faction Coins)</b>: (x * (R + 1)) of a random type, where x is Faction Coin chance and R is the number of times you have reincarnated.</p>
			<p><b>Effect</b>: Assistants have the same chance to trigger Elven Luck once every second. Elven Lucks triggered this way have their coin reward multiplied by the amount of assistants you have.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade9.png" align="middle"> Sylvan Treasure Frills</b></p>
			<p><b>Mercenary Template</b>: EL9</p>
			<p><b>Cost</b>: 500 Qa (5e17)</p>
			<p><b>Effect</b>: Additively increase base clicking reward by 50% of your building production.</p>
			<hr>
			<h6>Angel</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade7.png" align="middle"> Magical Gates</b></p>
			<p><b>Mercenary Template</b>: AN7</p>
			<p><b>Cost</b>: 5 Qa (5e15)</p>
			<p><b>Effect</b>: Increase Maximum Mana based on time spent as Good in this Reincarnation.</p>
			<p><b>Formula</b>: +(3.5 * x ^ 0.7), where x is time spent as Good in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade8.png" align="middle"> Angelic Dominance</b></p>
			<p><b>Mercenary Template</b>: AN8</p>
			<p><b>Cost</b>: 50 Qa (5e16)</p>
			<p><b>Effect</b>: Spell durations are increased by 50%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade9.png" align="middle"> Wings of Liberty</b></p>
			<p><b>Mercenary Template</b>: AN9</p>
			<p><b>Cost</b>: 500 Qa (5e17)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
			<p><b>Formula</b>: (4 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
			<hr>
			<h6>Goblin</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade7.png" align="middle"> Goblin Central Bank</b></p>
			<p><b>Mercenary Template</b>: GB7</p>
			<p><b>Cost</b>: 5 Qa (5e15)</p>
			<p><b>Effect</b>: Whenever you cast a spell, also cast Tax Collection for free.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade8.png" align="middle"> Fool's Gold</b></p>
			<p><b>Mercenary Template</b>: GB8</p>
			<p><b>Cost</b>: 50 Qa (5e16)</p>
			<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of Witch Conclaves you own in this Reincarnation.</p>
			<p><b>Formula</b>: (2 * x ^ 0.6)%, where x is the number of Witch Conclaves you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade9.png" align="middle"> Green Fingers Discount</b></p>
			<p><b>Mercenary Template</b>: GB9</p>
			<p><b>Cost</b>: 500 Qa (5e17)</p>
			<p><b>Effect</b>: Gain coins randomly every 10 minutes. Also works while being offline.</p>
			<p><b>Formula</b>: (randRange(1 , 2500) * x), where x is your total (buildings + assistants) coin production per second, <b>including spells</b>.</p>
			<hr>
			<h6>Undead</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade7.png" align="middle"> Dead Fields</b></p>
			<p><b>Mercenary Template</b>: UD7</p>
			<p><b>Cost</b>: 5 Qa (5e15)</p>
			<p><b>Effect</b>: Buildings count 75% more.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade8.png" align="middle"> Tireless Workers</b></p>
			<p><b>Mercenary Template</b>: UD8</p>
			<p><b>Cost</b>: 50 Qa (5e16)</p>
			<p><b>Effect</b>: Increase the production of assistants by 1500%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade9.png" align="middle"> Undead Resilience</b></p>
			<p><b>Mercenary Template</b>: UD9</p>
			<p><b>Cost</b>: 500 Qa (5e17)</p>
			<p><b>Effect</b>: Increase offline production based on your Mana Regeneration.</p>
			<p><b>Formula</b>: (125 * ln(1 + x) ^ 2.5)%, where x is your Mana Regeneration.</p>
			<hr>
			<h6>Demon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade7.png" align="middle"> Infernal Magic</b></p>
			<p><b>Mercenary Template</b>: DM7</p>
			<p><b>Cost</b>: 5 Qa (5e15)</p>
			<p><b>Effect</b>: Hell Portals also increase your Mana Regeneration rate.</p>
			<p><b>Formula</b>: +(3.5 * x ^ 0.35), where x is the amount of Hell Portals you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade8.png" align="middle"> Burning Legion</b></p>
			<p><b>Mercenary Template</b>: DM8</p>
			<p><b>Cost</b>: 50 Qa (5e16)</p>
			<p><b>Effect</b>: You gain assistants based on the amount of Hell Portals you own.</p>
			<p><b>Formula</b>: +(1.5 * x ^ 0.65), where x is the number of Hell Portals you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade9.png" align="middle"> Very Bad Guys</b></p>
			<p><b>Mercenary Template</b>: DM9</p>
			<p><b>Cost</b>: 500 Qa (5e17)</p>
			<p><b>Effect</b>: Increase the production of Heaven's Gate / Hell Portals / Ancient Pyramid (based on your Alignment) based on the highest amount of Hell Portals you built in this Reincarnation.</p>
			<p><b>Formula</b>: (4 * x ^ 0.8)%, where x is the highest amount of Hell Portals you built in this Reincarnation.</p>
			<hr>
			<h6>Titan</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade7.png" align="middle"> Cyclopean Strength</b></p>
			<p><b>Mercenary Template</b>: TT7</p>
			<p><b>Cost</b>: 50 Oc (5e28)</p>
			<p><b>Effect</b>: Assistants count 200% more and increase their production by 200%.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade8.png" align="middle"> Heavy Coins</b></p>
			<p><b>Mercenary Template</b>: TT8</p>
			<p><b>Cost</b>: 500 Oc (5e29)</p>
			<p><b>Effect</b>: Increases Royal Exchanges production bonus by an additional 100% each.</p>
			<p><b>Effect</b>: Also reduces Royal Exchange cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.09 instead of 1.1.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade9.png" align="middle"> Oversized Legends</b></p>
			<p><b>Mercenary Template</b>: TT9</p>
			<p><b>Cost</b>: 5 No (5e30)</p>
			<p><b>Effect</b>: Reduce Hall of Legends building cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
			<p><b>Effect</b>: Also increases assistants production based on the amount of Hall of Legends you own. </p>
			<p><b>Formula</b>: (6 * x ^ 0.6)%, where x is the amount of Hall of Legends you own.</p>
			<hr>
			<h6>Druid</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade7.png" align="middle"> Mabinogion</b></p>
			<p><b>Mercenary Template</b>: DD7</p>
			<p><b>Cost</b>: 50 Oc (5e28)</p>
			<p><b>Effect</b>: Increase Non-Unique buildings production based on their tier, giving the best bonus to the lowest.</p>
			<p><b>Formula</b>: (12 * 1.8 ^ (12 - T))%, where T is building tier.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade8.png" align="middle"> Earthly Soul</b></p>
			<p><b>Mercenary Template</b>: DD8</p>
			<p><b>Cost</b>: 500 Oc (5e29)</p>
			<p><b>Effect</b>: Increase mana regeneration based on the highest amount of Stone Pillars you built in this Reincarnation.</p>
			<p><b>Formula</b>: +(x ^ 0.25), where x is the highest amount of Stone Pillars you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade9.png" align="middle"> Building Jungle</b></p>
			<p><b>Mercenary Template</b>: DD9</p>
			<p><b>Cost</b>: 5 No (5e30)</p>
			<p><b>Effect</b>: Increase the production of each building based on the amount of buildings of the same type.</p>
			<p><b>Formula</b>: (1.5  * x ^ 0.9)%, where x is the amount of buildings of the same type.</p>
			<hr>
			<h6>Faceless</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade7.png" align="middle"> Magical Treasure</b></p>
			<p><b>Mercenary Template</b>: FC7</p>
			<p><b>Cost</b>: 50 Oc (5e28)</p>
			<p><b>Effect</b>: Increase mana regeneration based on the amount of assistants you own.</p>
			<p><b>Formula</b>: +(2.5 * x ^ 0.5), where x is the amount of assistants you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade8.png" align="middle"> Abominations</b></p>
			<p><b>Mercenary Template</b>: FC8</p>
			<p><b>Cost</b>: 500 Oc (5e29)</p>
			<p><b>Effect</b>: Increase the production of assistants based on the amount of active spells.</p>
			<p><b>Formula</b>: (20 * x ^ 0.9)%, where x is the amount of active spells.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade9.png" align="middle"> Hive Mind</b></p>
			<p><b>Mercenary Template</b>: FC9</p>
			<p><b>Cost</b>: 5 No (5e30)</p>
			<p><b>Effect</b>: Increases production based on total time spent affiliated with Faceless. Persists through Reincarnations.</p>
			<p><b>Formula</b>: (x ^ 0.5)%, where x is time spent as Faceless (All Time).</p>
			<hr>
			<h6>Dwarven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade7.png" align="middle"> Battlehammers</b></p>
			<p><b>Mercenary Template</b>: DN7</p>
			<p><b>Cost</b>: 500 Sxd (5e53)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Dwarven Coins found in this game.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2))%, where x is the amount of Dwarven Coins found in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade8.png" align="middle"> Magic Resistance</b></p>
			<p><b>Mercenary Template</b>: DN8</p>
			<p><b>Cost</b>: 5 Spd (5e54)</p>
			<p><b>Effect</b>: Reduce Excavation cost multiplier.</p>
			<p><b>Formula</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.18 instead of 1.2.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade9.png" align="middle"> Overwatch</b></p>
			<p><b>Mercenary Template</b>: DN9</p>
			<p><b>Cost</b>: 50 Spd (5e55)</p>
			<p><b>Effect</b>: Increase Maximum Mana based on the duration of your longest spell.</p>
			<p><b>Formula</b>: +(50 + 35 * x ^ 0.7), where x is the duration of your longest spell.</p>
			<hr>
			<h6>Drow</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade7.png" align="middle"> Spider Gods</b></p>
			<p><b>Mercenary Template</b>: DW7</p>
			<p><b>Cost</b>: 500 Sxd (5e53)</p>
			<p><b>Effect</b>: Mutiplicatively increase assistants based on the amount of buildings you own.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of buildings you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade8.png" align="middle"> Professional Assassins</b></p>
			<p><b>Mercenary Template</b>: DW8</p>
			<p><b>Cost</b>: 5 Spd (5e54)</p>
			<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of Royal Exchanges you made.</p>
			<p><b>Formula</b>: (0.6 * x ^ 0.6)%, where x is Royal Exchanges made.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade9.png" align="middle"> Blade Dance</b></p>
			<p><b>Mercenary Template</b>: DW9</p>
			<p><b>Cost</b>: 50 Spd (5e55)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on Combo Strike counter in this game.</p>
			<p><b>Formula</b>: (100 + 80 * x ^ 0.4)%, where x is your Combo Strike counter.</p>
			<hr>
			<h6>Dragon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade7.png" align="middle"> Ancient Hunger</b></p>
			<p><b>Mercenary Template</b>: DG7</p>
			<p><b>Cost</b>: 500 Tvg (5.0e74)</p>
			<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
			<p><b>Formula (Additive)</b>: +(20 * ln(1 + x) ^ 2), where x is Faction Coins found this game.</p>
			<p><b>Formula (Multiplicative)</b>: (0.75 * ln(1 + x) ^ 1.25)%, where x is Faction Coins found this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade8.png" align="middle"> Eternal Wisdom</b></p>
			<p><b>Mercenary Template</b>: DG8</p>
			<p><b>Cost</b>: 5 Qavg (5.0e75)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
			<p><b>Formula</b>: (1.5 * x ^ 0.9)%, where x is individual Royal Exchange bonus.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade9.png" align="middle"> Chromatic Scales</b></p>
			<p><b>Mercenary Template</b>: DG9</p>
			<p><b>Cost</b>: 50 Qavg (5.0e76)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of active Dragon's Breath effects.</p>
			<p><b>Formula</b>: ({100 * ((x) ^ 2)}%) where x is amount of active Dragon's Breath effects.</p>
			<hr>
			<h6>Archon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade7.png" align="middle"> Superior Consciousness</b></p>
			<p><b>Mercenary Template</b>: AR7</p>
			<p><b>Cost</b>: 10 TQig (1e163)</p>
			<p><b>Effect</b>: Increase the production of Unique buildings based on their quantity.</p>
			<p><b>Formula</b>: (x)%, where x is Unique Buildings.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade8.png" align="middle"> Strange Attraction</b></p>
			<p><b>Mercenary Template</b>: AR8</p>
			<p><b>Cost</b>: 100 TQig (1e164)</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the activity time of your least used spell.</p>
			<p><b>Formula</b>: (100 + 0.8 * x ^ 0.8)%, where x is spell with least activity time in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade9.png" align="middle"> Arcane Core</b></p>
			<p><b>Mercenary Template</b>: AR9</p>
			<p><b>Cost</b>: 1 QaQig (1e165)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this Reincarnation.</p>
			<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is mana produced in this Reincarnation.</p>
			<hr>
			<h6>Djinn</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade7.png" align="middle"> Wishing Well</b></p>
			<p><b>Mercenary Template</b>: DJ7</p>
			<p><b>Cost</b>: 10 TQig (1e163)</p>
			<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
			<p><b>Formula</b>: (0.03 * x ^ 0.3)%, where x is the amount of assistants you own.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade8.png" align="middle"> Flashy Storm</b></p>
			<p><b>Mercenary Template</b>: DJ8</p>
			<p><b>Cost</b>: 100 TQig (1e164)</p>
			<p><b>Effect</b>: Increase the production of even-tier buildings on odd days of the month, odd-tier buildings on even days.</p>
			<p><b>Note</b>: The bonus is based on assistants owned.</p>
			<p><b>Formula</b>: (ln(1 + x) ^ 2.5), where x is assistants owned.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade9.png" align="middle"> Mana Creatures</b></p>
			<p><b>Mercenary Template</b>: DJ9</p>
			<p><b>Cost</b>: 1 QaQig (1e165)</p>
			<p><b>Effect</b>: Multiplicatively increase assistants based on the highest Mana produced in this Reincarnation.</p>
			<p><b>Formula</b>: (1.8 * log10(1 + x) ^ 1.8)%, where x is highest Mana produced in a single game this reincarnation.</p>
			<hr>
			<h6>Makers</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade7.png" align="middle"> Stonecarving</b></p>
			<p><b>Mercenary Template</b>: MK7</p>
			<p><b>Cost</b>: 10 TQig (1e163)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
			<p><b>Formula</b>: (250 + 0.5 * (x * (y + z)) ^ 0.5)%, where x is excavations done this Reincarnation (NOT current excavation count) and y & z are free and ruby excavation resets done in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade8.png" align="middle"> Past Trade</b></p>
			<p><b>Mercenary Template</b>: MK8</p>
			<p><b>Cost</b>: 100 TQig (1e164)</p>
			<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the time spent on your longest game session in this Reincarnation.</p>
			<p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x is your longest game session this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade9.png" align="middle"> Structural Stability</b></p>
			<p><b>Mercenary Template</b>: MK9</p>
			<p><b>Cost</b>: 1 QaQig (1e165)</p>
			<p><b>Effect</b>: Increase the production of building tiers directly above or below Unique Buildings based on spells cast in this game.</p>
			<p><b>Formula</b>: (0.2 * x ^ 0.4)%, where x spells cast in this game.</p>
			<p><b>Note</b>: MK9 now works like W3150 ( ^ 2 bonus when able).</p>
		</div>
	</div>
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Tier 4 Upgrades (R100+)</a></b></p>
		<div class="autohide">
			<h6>Fairy</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade10.png" align="middle"> Bubble Swarm</b></p>
			<p><b>Mercenary Template</b>: FR10</p>
			<p><b>Requirement</b>: A2+, Fairies Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Increase maximum mana based on the highest amount of Swarming Towers you own in this Reincarnation.</p>
			<p><b>Formula</b>: +(x ^ 1.05), where x is the highest amount of Swarming Towers you own in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade11.png" align="middle"> Pheromones</b></p>
			<p><b>Mercenary Template</b>: FR11</p>
			<p><b>Requirement</b>: A2+, Fairies Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Gain assistants based on time spent as Chaos in this Reincarnation (Additive).</p>
			<p><b>Formula</b>: +(80 * x ^ 0.8), where x is time spent as Chaos in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyUpgrade12.png" align="middle"> Dream Catchers</b></p>
			<p><b>Mercenary Template</b>: FR12</p>
			<p><b>Requirement</b>: A2+, Fairies Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Chaos spells cast in this Reincarnation.</p>
			<p><b>Formula</b>:  (1.2 * x ^ 0.8)%, where x is Chaos spells cast this in this Reincarnation.</p>
			<hr>
			<h6>Elven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade10.png" align="middle"> Wooden Dice</b></p>
			<p><b>Mercenary Template</b>: EL10</p>
			<p><b>Requirement</b>: A2+, Elven Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the highest amount of Arboreal Cities you own in this Reincarnation.</p>
			<p><b>Elven Luck Formula</b>: +(x ^ 0.4)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>Production Formula</b>: (40 * x ^ 0.8)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>Faction Coin Formula</b>: +(7.5 * x ^ 0.75)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
			<p><b>Effect</b>: When Elven Luck triggers, 100000 automatic Tax Collections are cast.</p>
			<p><b>Effect</b>: Also removes 2 ascension penalties from Elven Luck.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade11.png" align="middle"> Camouflage</b></p>
			<p><b>Mercenary Template</b>: EL11</p>
			<p><b>Requirement</b>: A2+, Elven Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Assistants and Clicks count 1,000% more for all purposes and increase assistant production based on assistant amount.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is assistant count.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUpgrade12.png" align="middle"> Elven Discipline</b></p>
			<p><b>Mercenary Template</b>: EL12</p>
			<p><b>Requirement</b>: A2+, Elven Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Increase assistants additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
			<p><b>Additive Formula</b>: +(50 * ln(1 + x) ^ 1.5), where x is Faction Coins found this game.</p>
			<p><b>Multiplicative Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is Faction Coins found this game.</p>
			<hr>
			<h6>Angel</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade10.png" align="middle"> Heaven's Brilliance</b></p>
			<p><b>Mercenary Template</b>: AN10</p>
			<p><b>Requirement</b>: A2+, Angels Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the highest amount of Holy Sites you own in this Reincarnation. Gem Grinder and all Dragon's Breath effects are increased based on the highest amount of Holy Sites you own in this Reincarnation.</p>
			<p><b>Formula</b>: +(0.025 * ln(1 + x)), where x is highest amount of Holy Sites owned in this Reincarnation.</p>
			<p><b>Gem Grinder and Dragon's Breath Formula</b>: (0.65 * x ^ 0.65)%, where x is highest amount of Holy Sites owned in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade11.png" align="middle"> Angelic Fortitude</b></p>
			<p><b>Mercenary Template</b>: AN11</p>
			<p><b>Requirement</b>: A2+, Angels Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells' activity time (this Reincarnation).</p>
			<p><b>Formula</b>: (x ^ 0.7)%, where x is the sum of all your spells' activity time in this Reincarnation.</p>
			<p><b>Note</b>: Counts only the activity time of the spells you have in this game available.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelUpgrade12.png" align="middle"> Seraphim Wings</b></p>
			<p><b>Mercenary Template</b>: AN12</p>
			<p><b>Requirement</b>: A2+, Angels Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Multiplicatively increase Maximum Mana, Mana Regeneration, Faction Coin find chance and assistants by 200%.</p>
			<hr>
			<h6>Goblin</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade10.png" align="middle"> Fools Gems</b></p>
			<p><b>Mercenary Template</b>: GB10</p>
			<p><b>Requirement</b>: A2+, Goblins Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the highest amount of Slave Markets you own in this Reincarnation.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Slave Markets you own in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade11.png" align="middle"> Money is Magic</b></p>
			<p><b>Mercenary Template</b>: GB11</p>
			<p><b>Requirement</b>: A2+, Goblins Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Increase mana regeneration based on the amount of Tax Collections cast in this game.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is Tax Collections cast this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinUpgrade12.png" align="middle"> Lousy Architecture</b></p>
			<p><b>Mercenary Template</b>: GB12</p>
			<p><b>Requirement</b>: A2+, Goblins Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
			<p><b>Effect</b>: Increase Non-Unique buildings production based on the amount of buildings of the same tier.</p>
			<p><b>Formula</b>: (x ^ 0.65)%, where x is the amount of buildings of the same tier. </p>
			<hr>
			<h6>Undead</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade10.png" align="middle"> Flesh Servants</b></p>
			<p><b>Mercenary Template</b>: UD10</p>
			<p><b>Requirement</b>: A2+, Undead Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Mutiplicatively increase assistants based on the highest amount of Flesh Workshops you built in this Reincarnation.</p>
			<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is the highest amount of Flesh Workshops you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade11.png" align="middle"> Eternal Servitude</b></p>
			<p><b>Mercenary Template</b>: UD11</p>
			<p><b>Requirement</b>: A2+, Undead Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Increase Unique buildings production based on time spent in this game.</p>
			<p><b>Formula</b>: (x ^ 0.7)%, where x is time spent this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUpgrade12.png" align="middle"> Zombie Apocalypse</b></p>
			<p><b>Mercenary Template</b>: UD12</p>
			<p><b>Requirement</b>: A2+, Undead Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Gain assistants based on the total amount of time spent offline in this Reincarnation (Additive).</p>
			<p><b>Formula</b>: +(21 * x ^ 0.7), where x is offline time this Reincarnation.</p>
			<hr>
			<h6>Demon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade10.png" align="middle"> Abyssal Furnace</b></p>
			<p><b>Mercenary Template</b>: DM10</p>
			<p><b>Requirement</b>: A2+, Demons Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of Burning Abysses you built in this Reincarnation. Higher tiers get better bonuses.</p>
			<p><b>Formula</b>: (0.5 * (T ^ 1.5) * (x ^ 0.5)%, where x is the highest amount of Burning Abysses you built in this Reincarnation, T is building tier.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade11.png" align="middle"> Demonic Fury</b></p>
			<p><b>Mercenary Template</b>: DM11</p>
			<p><b>Requirement</b>: A2+, Demons Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on least time spent between Evil and Chaos this Reincarnation.</p>
			<p><b>Formula</b>: (0.25 * min(x , y) ^ 0.75)%, where x is evil time and y is chaos time spent in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonUpgrade12.png" align="middle"> Devastation</b></p>
			<p><b>Mercenary Template</b>: DM12</p>
			<p><b>Requirement</b>: A2+, Demons Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Increase production of three highest building tiers based on your Mana Regeneration.</p>
			<p><b>Formula</b>: (2.5 * ln(1 + x) ^ 2.5)%, where x is your Mana Regeneration.</p>
			<hr>
			<h6>Titan</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade10.png" align="middle"> Giant Market</b></p>
			<p><b>Mercenary Template</b>: TT10</p>
			<p><b>Requirement</b>: A2+, Titan Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Increase Royal Exchange count based on the highest amount of Mountain Palaces you built in this Reincarnation.</p>
			<p><b>Formula</b>: (x ^ 0.7)%, where x is the highest amount of Mountain Palaces you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade11.png" align="middle"> Titanic Authority</b></p>
			<p><b>Mercenary Template</b>: TT11</p>
			<p><b>Requirement</b>: A2+, Titan Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Royal Exchanges you made.</p>
			<p><b>Formula</b>: (x ^ 0.6)%, where x is amount of Royal Exchanges you made.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanUpgrade12.png" align="middle"> Colossus Kingdom</b></p>
			<p><b>Mercenary Template</b>: TT12</p>
			<p><b>Requirement</b>: A2+, Titan Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Gain assistants based on time spent as Order in this Reincarnation.</p>
			<p><b>Formula</b>: +(25 * x ^ 0.7), where x time spent as Order in this Reincarnation.</p>
			<hr>
			<h6>Druid</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade10.png" align="middle"> Building Vines</b></p>
			<p><b>Mercenary Template</b>: DD10</p>
			<p><b>Requirement</b>: A2+, Druids Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Increase spell duration based on the highest amount of Ziggurats you built in this Reincarnation.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Ziggurats you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade11.png" align="middle"> Lunar Cycle</b></p>
			<p><b>Mercenary Template</b>: DD11</p>
			<p><b>Requirement</b>: A2+, Druids Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Increase Maximum Mana additively based on time spent online in this game.</p>
			<p><b>Online Formula</b>: +(50 * x ^ 0.85), where x is time spent online in this game.</p>
			<p><b>Effect</b>: Increase Maximum Mana multiplicatively based on time spent offline in this game.</p>
			<p><b>Offline Formula</b>: (0.5 * x ^ 0.5)%, where x is time spent offline in this game.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidUpgrade12.png" align="middle"> Grove Farming</b></p>
			<p><b>Mercenary Template</b>: DD12</p>
			<p><b>Requirement</b>: A2+, Druids Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Increase the production of all buildings based on their tier. Middle tiers get better bonuses.</p>
			<p><b>Formula</b>: (0.8 * ((6 - abs(6 - T)) ^ 4))%, where T is building tier.</p>
			<hr>
			<h6>Faceless</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade10.png" align="middle"> Primal Knowledge</b></p>
			<p><b>Mercenary Template</b>: FC10</p>
			<p><b>Requirement</b>: A2+, Faceless Union</p>
			<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the highest amount of Forbidden Libraries you own in this Reincarnation. Grows over time and resets every 15 minutes.</p>
			<p><b>Formula</b>: ((t % 900) / 75 * x ^ 0.4)%, where t is time spent this game, x is the highest amount of Forbidden Libraries owned this Reincarnation.</p></p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade11.png" align="middle"> Forbidden Language</b></p>
			<p><b>Mercenary Template</b>: FC11</p>
			<p><b>Requirement</b>: A2+, Faceless Union</p>
			<p><b>Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
			<p><b>Effect</b>: Increase spell durations based on the amount of Reincarnations made.</p>
			<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is the number of times you have reincarnated.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUpgrade12.png" align="middle"> Dimension Door</b></p>
			<p><b>Mercenary Template</b>: FC12</p>
			<p><b>Requirement</b>: A2+, Faceless Union</p>
			<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of Maximum Mana you had in this Reincarnation.</p>
			<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is highest Maximum Mana you had in this Reincarnation.</p>
			<hr>
			<h6>Dwarven</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade10.png" align="middle"> Solidity</b></p>
			<p><b>Mercenary Template</b>: DN10</p>
			<p><b>Requirement</b>: R116+, Dwarven Union</p>
			<p><b>Cost</b>: 10 Dtg (1e100)</p>
			<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the highest amount of High Bastions you built in this Reincarnation.</p>
			<p><b>Formula</b>: (1.6 * x ^ 0.6), where x is the highest amount of High Bastions you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade11.png" align="middle"> Stonetalking</b></p>
			<p><b>Mercenary Template</b>: DN11</p>
			<p><b>Requirement</b>: R116+, Dwarven Union</p>
			<p><b>Cost</b>: 100 Qitg (1e110)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the highest between Maximum Mana and Mana Regeneration.</p>
			<p><b>Formula</b>: (2 * ln(1 + max(x , y)) ^ 2)%, where x is Maximum Mana and y is Mana Regeneration.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUpgrade12.png" align="middle"> Refined Minerals</b></p>
			<p><b>Mercenary Template</b>: DN12</p>
			<p><b>Requirement</b>: R116+, Dwarven Union</p>
			<p><b>Cost</b>: 1 Notg (1e120)</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration and Maximum Mana based on highest time spent as Order, Balance or Chaos.</p>
			<p><b>Formula</b>: (0.03 * max(x, y, z) ^ 0.7)%, where x, y & z is time spent as Order, Balance and Chaos in this Reincarnation respectively.</p>
			<hr>
			<h6>Drow</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade10.png" align="middle"> Spider Clerics</b></p>
			<p><b>Mercenary Template</b>: DW10</p>
			<p><b>Requirement</b>: R116+, Drow Union</p>
			<p><b>Cost</b>: 10 Dtg (1e100)</p>
			<p><b>Effect</b>: Increase Royal Exchange bonus based on the highest amount of Brothels you built in this Reincarnation (Additive).</p>
			<p><b>Formula</b>: +(1.75 * x ^ 0.75)%, where x is the highest amount of Brothels you built in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade11.png" align="middle"> Ancillae Obscure</b></p>
			<p><b>Mercenary Template</b>: DW11</p>
			<p><b>Requirement</b>: R116+, Drow Union</p>
			<p><b>Cost</b>: 100 Qitg (1e110)</p>
			<p><b>Effect</b>: Increase Non-Unique building production based on amount of Unique Buildings.</p>
			<p><b>Formula</b>: (50 * x ^ 0.5)%, where x is amount of Unique Buildings.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUpgrade12.png" align="middle"> Crystal Servants</b></p>
			<p><b>Mercenary Template</b>: DW12</p>
			<p><b>Requirement</b>: R116+, Drow Union</p>
			<p><b>Cost</b>: 1 Notg (1e120)</p>
			<p><b>Effect</b>: Multiplicatively gain assistants based on current gem amount.</p>
			<p><b>Formula</b>: (1.75 * log10(1 + x) ^ 1.75)%, where x is your current amount of gems.</p>
			<hr>
			<h6>Dragon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade10.png" align="middle"> Fang Food</b></p>
			<p><b>Mercenary Template</b>: DG10</p>
			<p><b>Requirement</b>: R116+, Dragon Union</p>
			<p><b>Cost</b>: 10 Dtg (1e100)</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration and Assistants based on the highest amount of Dragon Pastures you built in this Reincarnation.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Dragon Pastures owned in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade11.png" align="middle"> Wyrm's Rest</b></p>
			<p><b>Mercenary Template</b>: DG11</p>
			<p><b>Requirement</b>: R116+, Dragon Union</p>
			<p><b>Cost</b>: 100 Qitg (1e110)</p>
			<p><b>Effect</b>: Remove 1 Ascension penalty from Royal Exchange bonus. Also gives Dragon's Breath White Breath a multiplicative effect on Assistants based on time spent as Dragons.</p>
			<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is time spent as Dragon this Reincarnation.</p>
			<p><b>Note</b>: The multiplicative White Breath effect stacks multiplicatively with extra White Breaths.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade12.png" align="middle"> Draconic Supremacy</b></p>
			<p><b>Mercenary Template</b>: DG12</p>
			<p><b>Requirement</b>: R116+, Dragon Union</p>
			<p><b>Cost</b>: 1 Notg (1e120)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on your Maximum Mana.</p>
			<p><b>Formula</b>: (20 * ln(1 + x) ^ 2)%, where x is your Maximum Mana.</p>
			<hr>
			<h6>Archon</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade10.png" align="middle"> Purity of Form</b></p>
			<p><b>Mercenary Template</b>: AR10</p>
			<p><b>Requirement</b>: R130+, Archon Union</p>
			<p><b>Cost</b>: 100 QiQig (1e170)</p>
			<p><b>Effect</b>: Lineage levels count 200% more for all purposes.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade11.png" align="middle"> Absolute Hierarchy</b></p>
			<p><b>Mercenary Template</b>: AR11</p>
			<p><b>Requirement</b>: R130+, Archon Union</p>
			<p><b>Cost</b>: 1 SxQig (1e171)</p>
			<p><b>Effect</b>: Remove 1 Ascension Penalty from Call to Arms.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUpgrade12.png" align="middle"> Essence Extractor</b></p>
			<p><b>Mercenary Template</b>: AR12</p>
			<p><b>Requirement</b>: R130+, Archon Union</p>
			<p><b>Cost</b>: 10 SxQig (1e172)</p>
			<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the duration of your longest spell.</p>
			<p><b>Formula</b>: (0.15 * x ^ 0.7)%, where x is the duration of your longest spell.</p>
			<hr>
			<h6>Djinn</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade10.png" align="middle"> Wishes Come True</b></p>
			<p><b>Mercenary Template</b>: DJ10</p>
			<p><b>Requirement</b>: R130+, Djinn Union</p>
			<p><b>Cost</b>: 100 QiQig (1e170)</p>
			<p><b>Effect</b>: Increase the production of all buildings based on Limited Wish activity time in this Reincarnation.</p>
			<p><b>Formula</b>: (0.3 * x ^ 0.7)%, where x is Limited Wish activity time in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade11.png" align="middle"> Blue Powder</b></p>
			<p><b>Mercenary Template</b>: DJ11</p>
			<p><b>Requirement</b>: R130+, Djinn Union</p>
			<p><b>Cost</b>: 1 SxQig (1e171)</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges made.</p>
			<p><b>Formula</b>: (0.3 * x ^ 0.8)%, where x is Royal Exchanges made.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUpgrade12.png" align="middle"> Academic Prodigy</b></p>
			<p><b>Mercenary Template</b>: DJ12</p>
			<p><b>Requirement</b>: R130+, Djinn Union</p>
			<p><b>Cost</b>: 10 SxQig (1e172)</p>
			<p><b>Effect</b>: Tax Collections are worth more seconds based on trophies unlocked.</p>
			<p><b>Formula</b>: (5 * x ^ 0.5)%, where x is trophies unlocked.</p>
			<hr>
			<h6>Makers</h6>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade10.png" align="middle"> Valuable Antiquity</b></p>
			<p><b>Mercenary Template</b>: MK10</p>
			<p><b>Requirement</b>: R130+, Makers Union</p>
			<p><b>Cost</b>: 100 QiQig (1e170)</p>
			<p><b>Effect</b>: Artifacts count more based on time spent in this Reincarnation.</p>
			<p><b>Formula</b>: (0.4 * x ^ 0.4)%, where x is time spent in this Reincarnation.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade11.png" align="middle"> Bedrock Foundations</b></p>
			<p><b>Mercenary Template</b>: MK11</p>
			<p><b>Requirement</b>: R130+, Makers Union</p>
			<p><b>Cost</b>: 1 SxQig (1e171)</p>
			<p><b>Effect</b>: Increase the base production of all buildings by +1000 per building tier.</p>
			<br/>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade12.png" align="middle"> Reality Marble</b></p>
			<p><b>Mercenary Template</b>: MK12</p>
			<p><b>Requirement</b>: R130+, Makers Union</p>
			<p><b>Cost</b>: 10 SxQig (1e172)</p>
			<p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
			<p><b>Formula</b>: +(2.5 * x ^ 0.5), where x is clicks made this Reincarnation.</p>
		</div>
	</div>
</div>
<?php include "../scripts/footer.html"; ?>