<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<p>Each Faction has its own unique and universal Heritage that you can unlock and buy in each subsequent abdication.</p>
	<p>To unlock them, you need to unlock the Champion Trophy of the respective faction, which requires buying the 9 faction upgrades in this game as well as the Trade Treaty, Friendship Pact and Alliance)</p>
	<p>Once unlocked, the upgrades cost the following amount of Faction Coins (of the matching type):</p>
	<p><b>Vanilla</b>: 5,000 of that faction.</p>
	<p><b>Neutral</b>: 25,000 of the two matching factions.</p>
	<p><b>Prestige</b>: 75,000 of that faction.</p>
	<p><b>Mercenary (R3+)</b>: 100,000 of every faction coin type.</p>
	<p><b>Neutral Prestige (R46+)</b>: 400 B (4e11) of the two matching factions.</p>
	<p><b>Elite (R125+)</b>: 1 Ud (1e36) each of the two matching factions.</p>
	<hr>
	<br style="clear: both"/>
	<a id="Heritages"></a>
	<center>
		<table class="imgtable">
			<tr>
				<td>
					<center>Heritages Menu</center>
					<center><img src="http://musicfamily.org/realm/Factions/picks/Heritages.png" usemap="#Heritages-map"></center>
				</td>
				<td>
					<center>Advanced Heritages Menu</center>
					<center><img src="http://musicfamily.org/realm/Factions/picks/AdvancedHeritages.png" usemap="#AdvancedHeritages-map"></center>
				</td>
			</tr>
		</table>
	</center>
	<map name="Heritages-map">
		<area href="#FRH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/FairyHeritage.png alt=Fairy Heritage align=middle> Fairy Heritage</b></p>
	<p><b>Cost</b>: 5,000 Fairy Coins</p>
	<p><b>Requirements</b>: Fairy Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings by 0.075% per Farm, Inn and Blacksmith you own.</p>
		" coords="10,10,64,64" shape="rect">
		<area href="#ELH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/ElvenHeritage.png alt=Elven Heritage align=middle> Elven Heritage</b></p>
	<p><b>Cost</b>: 5,000 Elven Coins</p>
	<p><b>Requirements</b>: Elven Champion Trophy</p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins by +5% and increase your click reward based on your chance to find Faction Coins.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is your chance to find faction coins.</p>
		" coords="70,10,124,64" shape="rect">
		<area href="#ANH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AngelHeritage.png alt=Angelic Heritage align=middle> Angelic Heritage</b></p>
	<p><b>Cost</b>: 5,000 Angel Coins</p>
	<p><b>Requirements</b>: Angel Champion Trophy</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 10%.</p>
		" coords="130,10,184,64" shape="rect">
		<area href="#GBH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/GoblinHeritage.png alt=Goblin Heritage align=middle> Goblin Heritage</b></p>
	<p><b>Cost</b>: 5,000 Goblin Coins</p>
	<p><b>Requirements</b>: Goblin Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of gems you own.</p>
	<p><b>Formula</b>: floor(7.5 * log10(1 + x))%, where x is the amount of gems you have.</p>
		" coords="10,70,64,124" shape="rect">
		<area href="#UDH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/UndeadHeritage.png alt=Undead Heritage align=middle> Undead Heritage</b></p>
	<p><b>Cost</b>: 5,000 Undead Coins</p>
	<p><b>Requirements</b>: Undead Champion Trophy</p>
	<p><b>Effect</b>: You gain additional assistants based on the time spent in this game.</p>
	<p><b>Formula</b>: +(floor(1 + 1.6 * (x / 3600) ^ 0.6)), where x is time spent this game.</p>
		" coords="70,70,124,124" shape="rect">
		<area href="#DMH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/DemonHeritage.png alt=Demonic Heritage align=middle> Demonic Heritage</b></p>
	<p><b>Cost</b>: 5,000 Demon Coins</p>
	<p><b>Requirements</b>: Demon Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings by 0.3% per Hall of Legends you own.</p>
		" coords="130,70,184,124" shape="rect">
		<area href="#TTH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/TitanHeritage.png alt=Titan Heritage align=middle> Titan Heritage</b></p>
	<p><b>Cost</b>: 25,000 Angel Coins, 25,000 Goblin Coins</p>
	<p><b>Requirements</b>: Titan Champion Trophy</p>
	<p><b>Effect</b>: Increase Royal Exchanges production bonus by an additional 15% each.</p>
		" coords="10,130,64,184" shape="rect">
		<area href="#DDH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/DruidHeritage.png alt=Druid Heritage align=middle> Druid Heritage</b></p>
	<p><b>Cost</b>: 25,000 Elven Coins, 25,000 Demon Coins</p>
	<p><b>Requirements</b>: Druid Champion Trophy</p>
	<p><b>Effect</b>: Increase maximum Mana by +1 every 15 buildings you own.</p>
		" coords="70,130,124,184" shape="rect">
		<area href="#FCH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/FacelessHeritage.png alt=Faceless Heritage align=middle> Faceless Heritage</b></p>
	<p><b>Cost</b>: 25,000 Fairy Coins, 25,000 Undead Coins</p>
	<p><b>Requirements</b>: Faceless Champion Trophy</p>
	<p><b>Effect</b>: Your production is increased based on the highest amount of buildings purchased in a single game.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.75)%, where x is your Buildings Owned (Max) stat.</p>
		" coords="130,130,184,184" shape="rect">
		<area href="#DNH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/DwarvenHeritage.png alt=Dwarven Heritage align=middle> Dwarven Heritage</b></p>
	<p><b>Cost</b>: 75,000 Dwarven Coins</p>
	<p><b>Requirements</b>: Dwarven Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Excavations you made.</p>
	<p><b>Formula</b>: (2 * (x ^ 0.9))%, where x is the number of excavations you've purchased.</p>
		" coords="10,190,64,244" shape="rect">
		<area href="#DWH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/DrowHeritage.png alt=Drow Heritage align=middle> Drow Heritage</b></p>
	<p><b>Cost</b>: 75,000 Drow Coins</p>
	<p><b>Requirements</b>: Drow Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of assistants based on the amount of Royal Exchanges you purchased in this game.</p>
	<p><b>Formula</b>: (2 * x ^ 0.8)%, where x is the amount of Royal Exchanges purchased in this game.</p>
		" coords="70,190,124,244" shape="rect">
		<area href="#DGH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/DragonHeritage.png alt=Dragon Heritage align=middle> Dragon Heritage</b></p>
	<p><b>Cost</b>: 400 B (4e11) Dwarven and Drow coins</p>
	<p><b>Requirements</b>: Dragons Champion Trophy</p>
	<p><b>Effect</b>: Increase assistants production based on time spent affiliated with Dragons in this Reincarnation.</p>
	<p><b>Formula</b>: (0.3 * x ^ 0.7)%, x is time in seconds affiliated with Dragons (This Reincarnation).</p>
		" coords="130,190,184,244" shape="rect">
		<area href="#ARH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/ArchonHeritage.png align=middle> Archon Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Angel and Undead Coins</p>
	<p><b>Requirements</b>: Archon Champion Trophy<p>
	<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 10%.</p>
		" coords="10,250,64,304" shape="rect">
		<area href="#DJH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/DjinnHeritage.png align=middle> Djinn Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Fairy and Demon Coins</p>
	<p><b>Requirements</b>: Djinn Champion Trophy<p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on Limited Wish activity time in this Reincarnation.</p>
	<p><b>Formula</b>: (0.3 * x ^ 0.65)%, where x is Limited Wish activity time in this Reincarnation in seconds.</p>
		" coords="70,250,124,304" shape="rect">
		<area href="#MKH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/MakersHeritage.png align=middle> Makers Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Elven and Goblin Coins</p>
	<p><b>Requirements</b>: Makers Champion Trophy<p>
	<p><b>Effect</b>: Multiplicatively increase maximum mana based on Tax Collections cast in this game.</p>
	<p><b>Formula</b>: (2 * log10(1 + x) ^ 1.75)%, where x is Tax Collections cast this game.</p>
		" coords="130,250,184,304" shape="rect">
		<area href="#MCH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/MercenaryBadge.png alt=Mercenary Badge align=middle> Mercenary Badge</b></p>
	<p><b>Cost</b>: 100,000 (of each) Faction Coins</p>
	<p><b>Unlock Requirements</b>: Mercenary Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of coins you gained in a single game.</p>
	<p><b>Formula</b>: floor(5 * log10(1 + x))%, where x is your Coins Gained (Max) stat.</p>
		" coords="10,310,64,364" shape="rect">
	</map>
	<map name="AdvancedHeritages-map">
		<area href="#FRAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedFairyHeritage.png align=middle> Advanced Fairy Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Fairy Coins</p>
	<p><b>Requirements</b>: Fairy Master trophy and 6 hours activity time (This Game) of Fairy Chanting.<p>
	<p><b>Effect</b>: Gain assistants based on amount of Farms, Inns and Blacksmiths (additive).</p>
	<p><b>Formula</b>: +(2 * x ^ 0.8), where x is amount of Farms, Inns and Blacksmiths you own.</p>
		" coords="10,10,64,64" shape="rect">
		<area href="#ELAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedElvenHeritage.png align=middle> Advanced Elven Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Elven Coins</p>
	<p><b>Requirements</b>: Elven Master trophy and 6 hours activity time (This Game) of Moon Blessing.<p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: (0.25 * ln(1 + x) ^ 2)%, where x is amount of clicks this reincarnation.</p>
		" coords="70,10,124,64" shape="rect">
		<area href="#ANAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedAngelHeritage.png align=middle> Advanced Angelic Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Angel Coins</p>
	<p><b>Requirements</b>: Angel Master trophy and 6 hours activity time (This Game) of God's Hand.<p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast in this game.</p>
	<p><b>Formula</b>: +(5 * x ^ 0.25), where x is spells cast this game.</p>
		" coords="130,10,184,64" shape="rect">
		<area href="#GBAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedGoblinHeritage.png align=middle> Advanced Goblin Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Goblin Coins</p>
	<p><b>Requirements</b>: Goblin Master trophy and 6 hours activity time (This Game) of Goblin's Greed.<p>
	<p><b>Effect</b>: Tax Collections are worth more seconds of production based on Gems owned. (multiplicative).</p>
	<p><b>Formula</b>: (0.25 * log10(1 + x) ^ 0.95)%, where x is gems owned.</p>
		" coords="10,70,64,124" shape="rect">
		<area href="#UDAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedUndeadHeritage.png align=middle> Advanced Undead Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Undead Coins</p>
	<p><b>Requirements</b>: Undead Master trophy and 6 hours activity time (This Game) of Night Time.<p>
	<p><b>Effect</b>: Assistants count more based on your Offline Bonus.</p>
	<p><b>Formula</b>: (0.025 * ln(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
		" coords="70,70,124,124" shape="rect">
		<area href="#DMAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedDemonHeritage.png align=middle> Advanced Demonic Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Demon Coins</p>
	<p><b>Requirements</b>: Demon Master trophy and 6 hours activity time (This Game) of Hellfire Blast.<p>
	<p><b>Effect</b>: Increase the production of all buildings based on trophies unlocked.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.75)%, where x is amount of trophies unlocked.</p>
		" coords="130,70,184,124" shape="rect">
		<area href="#TTAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedTitanHeritage.png align=middle> Advanced Titan Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Angel and Goblin Coins</p>
	<p><b>Requirements</b>: Titan Master trophy and 6 hours activity time (This Game) of Lightning Strike.<p>
	<p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
	<p><b>Formula</b>: (0.85 * ln(1 + x) ^ 1.15)%, where x is Royal Exchanges purchased.</p>
		" coords="10,130,64,184" shape="rect">
		<area href="#DDAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedDruidHeritage.png align=middle> Advanced Druid Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Elven and Demon Coins</p>
	<p><b>Requirements</b>: Druid Master trophy and 6 hours activity time (This Game) of Grand Balance.<p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells durations.</p>
	<p><b>Formula</b>: (9 * x ^ 0.3)%, where x is the sum of all your spell durations.</p>
		" coords="70,130,124,184" shape="rect">
		<area href="#FCAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedFacelessHeritage.png align=middle> Advanced Faceless Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Fairy and Undead Coins</p>
	<p><b>Requirements</b>: Faceless Master trophy and 6 hours activity time (This Game) of Brainwave.<p>
	<p><b>Effect</b>: Gain assistants based on the amount of Unique Buildings owned (additive).</p>
	<p><b>Formula</b>: +(2.5 * x ^ 0.8), where x is Unique Buildings owned.</p>
		" coords="130,130,184,184" shape="rect">
		<area href="#DNAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedDwarvenHeritage.png align=middle> Advanced Dwarven Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Dwarven Coins</p>
	<p><b>Requirements</b>: Dwarf Master Trophy and 6 hours activity time (This Game) of Diamond Pickaxe.<p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of current excavations and excavation resets. (This Reincarnation).</p>
	<p><b>Formula</b>: (0.025 * (x * (1 + y + z)) ^ 0.65)%, where x is current excavations and y & z are free and ruby excavation resets done in this Reincarnation.</p>
		" coords="10,190,64,244" shape="rect">
		<area href="#DWAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedDrowHeritage.png align=middle> Advanced Drow Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Drow Coins</p>
	<p><b>Requirements</b>: Drow Master trophy and 6 hours activity time (This Game) of Combo Strike.<p>
	<p><b>Effect</b>: Increase the production of all buildings based on offline bonus and time spent in this game.</p>
	<p><b>Formula</b>: (0.0008 * log10(1 + x) * y ^ 0.8)%, where x offline bonus and y is time spent this game.</p>
		" coords="70,190,124,244" shape="rect">
		<area href="#DGAH" research="
	<p><b><img src=http://musicfamily.org/realm/Factions/picks/AdvancedDragonHeritage.png align=middle> Advanced Dragon Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Dwarven and Drow Coins</p>
	<p><b>Requirements</b>: Dragon Master trophy and 6 hours activity time (This Game) of Dragon's Breath.<p>
	<p><b>Effect</b>: The amount of active spells counts 5% more for all purposes.</p>
		" coords="130,190,184,244" shape="rect">
	</map>
	<hr>
	<h6 id="Heritages">Heritages</h6>
	<p id="FRH"><img src="http://musicfamily.org/realm/Factions/picks/FairyHeritage.png" alt="Fairy Heritage" align="middle"><b> Fairy Heritage</b></p>
	<p><b>Cost</b>: 5,000 Fairy Coins</p>
	<p><b>Requirements</b>: Fairy Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings by 0.075% per Farm, Inn and Blacksmith you own.</p>
	<br/>
	<p id="ELH"><img src="http://musicfamily.org/realm/Factions/picks/ElvenHeritage.png" alt="Elven Heritage" align="middle"><b> Elven Heritage</b></p>
	<p><b>Cost</b>: 5,000 Elven Coins</p>
	<p><b>Requirements</b>: Elven Champion Trophy</p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins by +5% and increase your click reward based on your chance to find Faction Coins.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is your chance to find faction coins.</p>
	<br/>
	<p id="ANH"><img src="http://musicfamily.org/realm/Factions/picks/AngelHeritage.png" alt="Angelic Heritage" align="middle"><b> Angelic Heritage</b></p>
	<p><b>Cost</b>: 5,000 Angel Coins</p>
	<p><b>Requirements</b>: Angel Champion Trophy</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 10%.</p>
	<br/>
	<p id="GBH"><img src="http://musicfamily.org/realm/Factions/picks/GoblinHeritage.png" alt="Goblin Heritage" align="middle"><b> Goblin Heritage</b></p>
	<p><b>Cost</b>: 5,000 Goblin Coins</p>
	<p><b>Requirements</b>: Goblin Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of gems you own.</p>
	<p><b>Formula</b>: floor(7.5 * log10(1 + x))%, where x is the amount of gems you have.</p>
	<br/>
	<p id="UDH"><img src="http://musicfamily.org/realm/Factions/picks/UndeadHeritage.png" alt="Undead Heritage" align="middle"><b> Undead Heritage</b></p>
	<p><b>Cost</b>: 5,000 Undead Coins</p>
	<p><b>Requirements</b>: Undead Champion Trophy</p>
	<p><b>Effect</b>: You gain additional assistants based on the time spent in this game.</p>
	<p><b>Formula</b>: +(floor(1 + 1.6 * (x / 3600) ^ 0.6)), where x is time spent this game.</p>
	<br/>
	<p id="DMH"><img src="http://musicfamily.org/realm/Factions/picks/DemonHeritage.png" alt="Demonic Heritage" align="middle"><b> Demonic Heritage</b></p>
	<p><b>Cost</b>: 5,000 Demon Coins</p>
	<p><b>Requirements</b>: Demon Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings by 0.3% per Hall of Legends you own.</p>
	<br/>
	<p id="TTH"><img src="http://musicfamily.org/realm/Factions/picks/TitanHeritage.png" alt="Titan Heritage" align="middle"><b> Titan Heritage</b></p>
	<p><b>Cost</b>: 25,000 Angel Coins, 25,000 Goblin Coins</p>
	<p><b>Requirements</b>: Titan Champion Trophy</p>
	<p><b>Effect</b>: Increase Royal Exchanges production bonus by an additional 15% each.</p>
	<br/>
	<p id="DDH"><img src="http://musicfamily.org/realm/Factions/picks/DruidHeritage.png" alt="Druid Heritage" align="middle"><b> Druid Heritage</b></p>
	<p><b>Cost</b>: 25,000 Elven Coins, 25,000 Demon Coins</p>
	<p><b>Requirements</b>: Druid Champion Trophy</p>
	<p><b>Effect</b>: Increase maximum Mana by +1 every 15 buildings you own.</p>
	<br/>
	<p id="FCH"><img src="http://musicfamily.org/realm/Factions/picks/FacelessHeritage.png" alt="Faceless Heritage" align="middle"><b> Faceless Heritage</b></p>
	<p><b>Cost</b>: 25,000 Fairy Coins, 25,000 Undead Coins</p>
	<p><b>Requirements</b>: Faceless Champion Trophy</p>
	<p><b>Effect</b>: Your production is increased based on the highest amount of buildings purchased in a single game.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.75)%, where x is your Buildings Owned (Max) stat.</p>
	<br/>
	<p id="DNH"><img src="http://musicfamily.org/realm/Factions/picks/DwarvenHeritage.png" alt="Dwarven Heritage" align="middle"><b> Dwarven Heritage</b></p>
	<p><b>Cost</b>: 75,000 Dwarven Coins</p>
	<p><b>Requirements</b>: Dwarven Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Excavations you made.</p>
	<p><b>Formula</b>: (2 * (x ^ 0.9))%, where x is the number of excavations you've purchased.</p>
	<br/>
	<p id="DWH"><img src="http://musicfamily.org/realm/Factions/picks/DrowHeritage.png" alt="Drow Heritage" align="middle"><b> Drow Heritage</b></p>
	<p><b>Cost</b>: 75,000 Drow Coins</p>
	<p><b>Requirements</b>: Drow Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of assistants based on the amount of Royal Exchanges you purchased in this game.</p>
	<p><b>Formula</b>: (2 * x ^ 0.8)%, where x is the amount of Royal Exchanges purchased in this game.</p>
	<br/>
	<p id="MCH"><img src="http://musicfamily.org/realm/Factions/picks/MercenaryBadge.png" alt="Mercenary Badge" align="middle"><b> Mercenary Badge</b></p>
	<p><b>Cost</b>: 100,000 (of each) Faction Coins</p>
	<p><b>Unlock Requirements</b>: Mercenary Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of coins you gained in a single game.</p>
	<p><b>Formula</b>: floor(5 * log10(1 + x))%, where x is your Coins Gained (Max) stat.</p>
	<br/>
	<p id="DGH"><img src="http://musicfamily.org/realm/Factions/picks/DragonHeritage.png" alt="Dragon Heritage" align="middle"><b> Dragon Heritage</b></p>
	<p><b>Cost</b>: 400 B (4e11) Dwarven and Drow coins</p>
	<p><b>Requirements</b>: Dragons Champion Trophy</p>
	<p><b>Effect</b>: Increase assistants production based on time spent affiliated with Dragons in this Reincarnation.</p>
	<p><b>Formula</b>: (0.3 * x ^ 0.7)%, x is time in seconds affiliated with Dragons (This Reincarnation).</p>
	<br/>
	<p id="ARH"><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonHeritage.png" align="middle"> Archon Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Angel and Undead Coins</p>
	<p><b>Requirements</b>: Archon Champion Trophy</p>
	<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 10%.</p>
	<br/>
	<p id="DJH"><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnHeritage.png" align="middle"> Djinn Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Fairy and Demon Coins</p>
	<p><b>Requirements</b>: Djinn Champion Trophy</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on Limited Wish activity time in this Reincarnation.</p>
	<p><b>Formula</b>: (0.3 * x ^ 0.65)%, where x is Limited Wish activity time in this Reincarnation in seconds.</p>
	<br/>
	<p id="MKH"><b><img src="http://musicfamily.org/realm/Factions/picks/MakersHeritage.png" align="middle"> Makers Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Elven and Goblin Coins</p>
	<p><b>Requirements</b>: Makers Champion Trophy</p>
	<p><b>Effect</b>: Multiplicatively increase maximum mana based on Tax Collections cast in this game.</p>
	<p><b>Formula</b>: (2 * log10(1 + x) ^ 1.75)%, where x is Tax Collections cast this game.</p>
	<hr>
	<h6 id="AdvancedHeritages">Advanced Heritages</h6>
	<p>Advanced Heritages appear in R116+, and can be unlocked for all but the Elite Prestige and Mercenary factions.</p>
	<p>To unlock them, you need to unlock the <b><a href="http://musicfamily.org/realm/TrophyPage/#Master"> Master Trophy</a></b> of that faction, which requires buying the 16 faction upgrades in this game (this includes Trade Treaty, Friendship Pact, Alliance and Union), while having Level 30 in their respective lineage, and then get 6 hours of spell activity time this game in their respective spell.</p>
	<p>Once unlocked, the upgrades cost 1 Sp (1e24) Faction Coins of the matching type.</p>
	<p><b>Note</b>: When using their lineage, Advanced Heritage powers are multiplied by the level of the lineage.</p>
	<p><b>Formula</b>: *(1 + 0.3 * level)</p>
	<p><b>Note</b>: Faction Ruler doubles the power of an individual Advanced Heritage if it matches the current alignment (quadruples the power if both alignments match).</p>
	<br/>
	<p id="FRAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedFairyHeritage.png" align="middle"> Advanced Fairy Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Fairy Coins</p>
	<p><b>Requirements</b>: Fairy Master trophy and 6 hours activity time (This Game) of Fairy Chanting.</p>
	<p><b>Effect</b>: Gain assistants based on amount of Farms, Inns and Blacksmiths (additive).</p>
	<p><b>Formula</b>: +(2 * x ^ 0.8), where x is amount of Farms, Inns and Blacksmiths you own.</p>
	<br/>
	<p id="ELAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedElvenHeritage.png" align="middle"> Advanced Elven Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Elven Coins</p>
	<p><b>Requirements</b>: Elven Master trophy and 6 hours activity time (This Game) of Moon Blessing.</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: (0.25 * ln(1 + x) ^ 2)%, where x is amount of clicks this reincarnation.</p>
	<br/>
	<p id="ANAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedAngelHeritage.png" align="middle"> Advanced Angelic Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Angel Coins</p>
	<p><b>Requirements</b>: Angel Master trophy and 6 hours activity time (This Game) of God's Hand.</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast in this game.</p>
	<p><b>Formula</b>: +(5 * x ^ 0.25), where x is spells cast this game.</p>
	<br/>
	<p id="GBAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedGoblinHeritage.png" align="middle"> Advanced Goblin Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Goblin Coins</p>
	<p><b>Requirements</b>: Goblin Master trophy and 6 hours activity time (This Game) of Goblin's Greed.</p>
	<p><b>Effect</b>: Tax Collections are worth more seconds of production based on Gems owned. (multiplicative).</p>
	<p><b>Formula</b>: (0.25 * log10(1 + x) ^ 0.95)%, where x is gems owned.</p>
	<br/>
	<p id="UDAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedUndeadHeritage.png" align="middle"> Advanced Undead Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Undead Coins</p>
	<p><b>Requirements</b>: Undead Master trophy and 6 hours activity time (This Game) of Night Time.</p>
	<p><b>Effect</b>: Assistants count more based on your Offline Bonus.</p>
	<p><b>Formula</b>: (0.025 * ln(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
	<br/>
	<p id="DMAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDemonHeritage.png" align="middle"> Advanced Demonic Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Demon Coins</p>
	<p><b>Requirements</b>: Demon Master trophy and 6 hours activity time (This Game) of Hellfire Blast.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on trophies unlocked.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.75)%, where x is amount of trophies unlocked.</p>
	<br/>
	<p id="TTAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedTitanHeritage.png" align="middle"> Advanced Titan Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Angel and Goblin Coins</p>
	<p><b>Requirements</b>: Titan Master trophy and 6 hours activity time (This Game) of Lightning Strike.</p>
	<p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
	<p><b>Formula</b>: (0.85 * ln(1 + x) ^ 1.15)%, where x is Royal Exchanges purchased.</p>
	<br/>
	<p id="DDAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDruidHeritage.png" align="middle"> Advanced Druid Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Elven and Demon Coins</p>
	<p><b>Requirements</b>: Druid Master trophy and 6 hours activity time (This Game) of Grand Balance.</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells durations.</p>
	<p><b>Formula</b>: (9 * x ^ 0.3)%, where x is the sum of all your spell durations.</p>
	<br/>
	<p id="FCAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedFacelessHeritage.png" align="middle"> Advanced Faceless Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Fairy and Undead Coins</p>
	<p><b>Requirements</b>: Faceless Master trophy and 6 hours activity time (This Game) of Brainwave.</p>
	<p><b>Effect</b>: Gain assistants based on the amount of Unique Buildings owned (additive).</p>
	<p><b>Formula</b>: +(2.5 * x ^ 0.8), where x is Unique Buildings owned.</p>
	<br/>
	<p id="DNAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDwarvenHeritage.png" align="middle"> Advanced Dwarven Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Dwarven Coins</p>
	<p><b>Requirements</b>: Dwarf Master Trophy and 6 hours activity time (This Game) of Diamond Pickaxe.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of current excavations and excavation resets. (This Reincarnation).</p>
	<p><b>Formula</b>: (0.025 * (x * (1 + y + z)) ^ 0.65)%, where x is current excavations and y & z are free and ruby excavation resets done in this Reincarnation.</p>
	<br/>
	<p id="DWAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDrowHeritage.png" align="middle"> Advanced Drow Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Drow Coins</p>
	<p><b>Requirements</b>: Drow Master trophy and 6 hours activity time (This Game) of Combo Strike.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on offline bonus and time spent in this game.</p>
	<p><b>Formula</b>: (0.0008 * log10(1 + x) * y ^ 0.8)%, where x offline bonus and y is time spent this game.</p>
	<br/>
	<p id="DGAH"><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDragonHeritage.png" align="middle"> Advanced Dragon Heritage</b></p>
	<p><b>Cost</b>: 1 Sp (1e24) Dwarven and Drow Coins</p>
	<p><b>Requirements</b>: Dragon Master trophy and 6 hours activity time (This Game) of Dragon's Breath.</p>
	<p><b>Effect</b>: The amount of active spells counts 5% more for all purposes.</p>
<?php include "../scripts/footer.html"; ?>