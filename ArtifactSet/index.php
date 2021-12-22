<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="http://musicfamily.org/realm/Factions/picks/ExcavationTopPage.png"></h6>
	<h6>Artifact Sets</h6>
	<p><b>Finding all the faction artifacts for a specific faction</b>(R100+) will also unlock a new selection of upgrades called "Artifact Sets". You will be able to pick one per game only, similar to Bloodlines and Lineages. Abdicating will reset your choice and allow to pick another.</p>
	<p><b>Requires all lore artifacts related to the faction to use its set.</b> All artifacts can be found on the <a href="/realm/LoreArtifacts" research="Lore Artifacts"><b>Lore Artifacts</b></a> page.</p>
	<h6><center><img src="http://musicfamily.org/realm/Factions/picks/ArtifactSets.png" usemap="#ArtifactSets-map"></h6></center>
	<map name="ArtifactSets-map">
		<area href="#Fairy" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/FairySet.png' align='middle'> Fairy Set</b></p>
		<p><b>Requirement</b>: R100+, Pink Carrot, Bottled Voice, Silk Cloth</p>
		<p><b>Effect</b>: Farms, Inns and Blacksmiths count more based on the amount of time spent with Fairies in this Reincarnation.</p>
		<p><b>Formula</b>: (2 * ln(1 + x) ^ 1.5)%, where x is time spent with Fairies in this Reincarnation.</p>
		<p><b>Second Effect Requirement</b>: R220+, Glowing Wing</p>
		<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
		<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
		" coords="10,10,64,64" shape="rect">
		<area href="#Elven" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/ElvenSet.png' align='middle'> Elven Set</b></p>
		<p><b>Requirement</b>: R100+, Lucky Clover, Mini-treasure, Raw Emerald</p>
		<p><b>Effect</b>: Autoclicks 10 times per second.</p>
		<p><b>Note</b>: Also generates the same amount of clicks offline.</p>
		<p><b>Second Effect Requirement</b>: R220+, Sylvan Mirror</p>
		<p><b>Effect</b>: Clicks count more based on automatic clicks.</p>
		<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
		<p><b>Note</b>: NOT affected by any 'clicks count more' effects.</p>
		" coords="70,10,124,64" shape="rect">
		<area href="#Angel" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/AngelSet.png' align='middle'> Angel Set</b></p>
		<p><b>Requirement</b>: R100+, Pillar Fragment, Divine Sword, Fossilized Wing</p>
		<p><b>Effect</b>: Additively increase Mana Regeneration based on highest amount of spells cast in a single game.</p>
		<p><b>Formula</b>: +(3.5 * x ^ 0.35), where x is spells cast in a single game.</p>
		<p><b>Second Effect Requirement</b>: R220+, Solid Cloud</p>
		<p><b>Effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
		<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
		" coords="130,10,184,64" shape="rect">
		<area href="#Goblin" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/GoblinSet.png' align='middle'> Goblin Set</b></p>
		<p><b>Requirement</b>: R100+, Ancient Coin Piece, Goblin Purse, Spiked Whip</p>
		<p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
		<p><b>Additive Formula</b>: +(70 * x ^ 0.7)%, where x is time spent in this game.</p>
		<p><b>Multiplicative Formula</b>: (0.6 * x ^ 0.6)%, where x is time spent in this game.</p>
		<p><b>Second Effect Requirement</b>: R220+, Orc Fang Necklace</p>
		<p><b>Effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
		<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>
		" coords="10,70,64,124" shape="rect">
		<area href="#Undead" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/UndeadSet.png' align='middle'> Undead Set</b></p>
		<p><b>Requirement</b>: R100+, Rotten Organ, Jaw Bone, DustyCoffin</p>
		<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
		<p><b>Formula</b>: +(7 * ln(1 + x) ^ 3.5), where x is offline Multiplier.</p>
		<p><b>Second Effect Requirement</b>: R220+, Blood Chalice</p>
		<p><b>Effect</b>: Multiplicatively increases production bonus from Gems based on Faction Coins found this game.</p>
		<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
		" coords="70,70,124,124" shape="rect">
		<area href="#Demon" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/DemonSet.png' align='middle'> Demon Set</b></p>
		<p><b>Requirement</b>: R100+, Demonic Figurine, Demon Horn, Crystallized Lava</p>
		<p><b>Effect</b>: Trophies count more based on the amount of the three highest tier buildings you own.</p>
		<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the sum of the three highest tier buildings.</p>
		<p><b>Second Effect Requirement</b>: R220+, Demon Tail</p>
		<p><b>Effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
		<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
		" coords="130,70,184,124" shape="rect">
		<area href="#Titan" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/TitanSet.png' align='middle'> Titan Set</b></p>
		<p><b>Requirement</b>: R100+, Huge Titan Statue, Titan Shield, Titan Helmet</p>
		<p><b>Effect</b>: Increase Royal Exchange Bonus additively and multiplicatively based on time spent in this game.</p>
		<p><b>Additive Formula</b>: +(0.3 * x ^ 0.7)%, where x is time spent in this game.</p>
		<p><b>Multiplicative Formula</b>: (0.45 * x ^ 0.45)%, where x is time spent in this game.</p>
		<p><b>Second Effect Requirement</b>: R220+, Frozen Lightning</p>
		<p><b>Effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
		<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
		" coords="10,130,64,184" shape="rect">
		<area href="#Druid" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/DruidSet.png' align='middle'> Druid Set</b></p>
		<p><b>Requirement</b>: R100+, Glyph Table, Stone Of Balance, Branch of the Life Tree</p>
		<p><b>Effect</b>: Increase the duration of each spell based on their respective activity time (This Game).</p>
		<p><b>Formula</b>: (x ^ 0.5)%, where x is each individual spell's activity time This Game in seconds.</p>
		<p><b>Second Effect Requirement</b>: R220+, Primal Leaf</p>
		<p><b>Effect</b>: Lineage levels count more based on spell casts in this game.</p>
		<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
		" coords="70,130,124,184" shape="rect">
		<area href="#Faceless" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/FacelessSet.png' align='middle'> Faceless Set</b></p>
		<p><b>Requirement</b>: R100+, Translucent Goo, Octopus-shaped Helmet, Nightmare Figment</p>
		<p><b>Effect</b>: Additively gain Assistants based on the highest amount of Assistants you had in a previous game.</p>
		<p><b>Formula</b>: +(0.45 * x ^ 0.45), where x is the highest amount of Assistants you had in a previous game.</p>
		<p><b>Second Effect Requirement</b>: R220+, The Blackest Ink</p>
		<p><b>Effect</b>: Increases spell duration based on time spent being offline in this game.</p>
		<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
		" coords="130,130,184,184" shape="rect">
		<area href="#Dwarven" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/DwarvenSet.png' align='middle'> Dwarven Set</b></p>
		<p><b>Requirement</b>: R116+, Dwarven Bow, Stone Tankard, Beard Hair</p>
		<p><b>Effect</b>: Multiplicatively increase Assistants based on your Royal Exchange bonus.</p>
		<p><b>Formula</b>: (8 * x ^ 0.4)%, where x is Royal Exchange bonus.</p>
		<p><b>Second Effect Requirement</b>: R235+, Dwarven Anvil</p>
		<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on time spent in this game.</p>
		<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your time spent in this game.</p>
		" coords="10,190,64,244" shape="rect">
		<area href="#Drow" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/DrowSet.png' align='middle'> Drow Set</b></p>
		<p><b>Requirement</b>: R116+, Ceremonial Dagger, Arachnid Figurine, Poison Vial</p>
		<p><b>Effect</b>: Spells cast count more based on time spent as Evil in this Reincarnation.</p>
		<p><b>Formula</b>: (6 * ln(1 + x) ^ 1.6)%, where x is time spent as Evil in this Reincarnation.</p>
		<p><b>Second Effect Requirement</b>: R235+, Stiletto Heel</p>
		<p><b>Effect</b>: Remove Ascension penalties from Royal Exchange bonus, starting from 0 and removing more levels of penalty over time and increase their production based on the amount of Gems you own.</p>
		<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is the amount of Gems you own.</p>
		<p><b>Penalties Reduction</b>: (round((0.3 * x / 3600) ^ 0.5) - 1), where x is time spent in this game.</p>
		<p><b>Note</b>: Penalty Reduction unaffected by Set power bonuses.</p>
		" coords="70,190,124,244" shape="rect">
		<area href="#Dragon" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/DragonSet.png' align='middle'> Dragon Set</b></p>
		<p><b>Requirement</b>: R116+, Dragon Fang, Dragon Soul, Dragon Scale</p>
		<p><b>Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
		<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is spells cast in this Reincarnation.</p>
		<p><b>Second Effect Requirement</b>: R235+, Eye of the Dragon</p>
		<p><b>Effect</b>: All alignment spells gain 1 additional Tier and all spells activity time count more based on the amount of excavations you made, including resets.</p>
		<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5)%, where x is the number of excavations made, and y is your number of resets in this game.</p>
		" coords="130,190,184,244" shape="rect">
		<area href="#Mercenary" target="" research="
		<p><b><img src='http://musicfamily.org/realm/Factions/picks/MercenarySet.png' align='middle'> Mercenary Set</b></p>
		<p><b>Requirement</b>: R160+, Steel Plate, Black Sword, Mercenary Insignia</p>
		<p><b>Effect</b>: Allows you to pick the same lineage as your faction including Prestige/Elite lineage of same alignment.</p>
		<p><b>Effect</b>: Lineage levels count 25% more.</p>
		" coords="10,250,64,304" shape="rect">
	</map>
	<br/>
	<H6 id="Fairy"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"> Fairy Set</b></p>
	<p><b>Requirement</b>: R100+, Pink Carrot, Bottled Voice, Silk Cloth</p>
	<p><b>Effect</b>: Farms, Inns and Blacksmiths count more based on the amount of time spent with Fairies in this Reincarnation.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 1.5)%, where x is time spent with Fairies in this Reincarnation.</p>
	<p><b>Second Effect Requirement</b>: R220+, Glowing Wing</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
	<br/>
	<H6 id="Elven"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"> Elven Set</b></p>
	<p><b>Requirement</b>: R100+, Lucky Clover, Mini-treasure, Raw Emerald</p>
	<p><b>Effect</b>: Autoclicks 10 times per second.</p>
	<p><b>Note</b>: Also generates the same amount of clicks offline.</p>
	<p><b>Second Effect Requirement</b>: R220+, Sylvan Mirror</p>
	<p><b>Effect</b>: Clicks count more based on automatic clicks.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
	<p><b>Note</b>: NOT affected by any "clicks count more" effects.</p>
	<br/>
	<H6 id="Angel"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelSet.png" align="middle"> Angel Set</b></p>
	<p><b>Requirement</b>: R100+, Pillar Fragment, Divine Sword, Fossilized Wing</p>
	<p><b>Effect</b>: Additively increase Mana Regeneration based on highest amount of spells cast in a single game.</p>
	<p><b>Formula</b>: +(3.5 * x ^ 0.35), where x is spells cast in a single game.</p>
	<p><b>Second Effect Requirement</b>: R220+, Solid Cloud</p>
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
	<br/>
	<H6 id="Goblin"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinSet.png" align="middle"> Goblin Set</b></p>
	<p><b>Requirement</b>: R100+, Ancient Coin Piece, Goblin Purse, Spiked Whip</p>
	<p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
	<p><b>Additive Formula</b>: +(70 * x ^ 0.7)%, where x is time spent in this game.</p>
	<p><b>Multiplicative Formula</b>: (0.6 * x ^ 0.6)%, where x is time spent in this game.</p>
	<p><b>Second Effect Requirement</b>: R220+, Orc Fang Necklace</p>
	<p><b>Effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
	<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>
	<br/>
	<H6 id="Undead"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadSet.png" align="middle"> Undead Set</b></p>
	<p><b>Requirement</b>: R100+, Rotten Organ, Jaw Bone, DustyCoffin</p>
	<p><b>Effect</b>: Additively increase max mana based on offline bonus.</p>
	<p><b>Formula</b>: +(7 * ln(1 + x) ^ 3.5), where x is offline Multiplier.</p>
	<p><b>Second Effect Requirement</b>: R220+, Blood Chalice</p>
	<p><b>Effect</b>: Multiplicatively increases production bonus from gems based on Faction Coins found this game.</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is faction coins this game.</p>
	<br/>
	<H6 id="Demon"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"> Demon Set</b></p>
	<p><b>Requirement</b>: R100+, Demonic Figurine, Demon Horn, Crystallized Lava</p>
	<p><b>Effect</b>: Trophies count more based on the amount of the three highest tier buildings you own.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the sum of the three highest tier buildings.</p>
	<p><b>Second Effect Requirement</b>: R220+, Demon Tail</p>
	<p><b>Effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
	<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
	<br/>
	<H6 id="Titan"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"> Titan Set</b></p>
	<p><b>Requirement</b>: R100+, Huge Titan Statue, Titan Shield, Titan Helmet</p>
	<p><b>Effect</b>: Increase Royal Exchange Bonus additively and multiplicatively based on time spent in this game.</p>
	<p><b>Additive Formula</b>: +(0.3 * x ^ 0.7)%, where x is time spent in this game.</p>
	<p><b>Multiplicative Formula</b>: (0.45 * x ^ 0.45)%, where x is time spent in this game.</p>
	<p><b>Second Effect Requirement</b>: R220+, Frozen Lightning</p>
	<p><b>Effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
	<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
	<br/>
	<H6 id="Druid"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"> Druid Set</b></p>
	<p><b>Requirement</b>: R100+, Glyph Table, Stone Of Balance, Branch of the Life Tree</p>
	<p><b>Effect</b>: Increase the duration of each spell based on their respective activity time (This Game).</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is each individual spell's activity time This Game in seconds.</p>
	<p><b>Second Effect Requirement</b>: R220+, Primal Leaf</p>
	<p><b>Effect</b>: Lineage levels count more based on spell casts in this game.</p>
	<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
	<br/>
	<H6 id="Faceless"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"> Faceless Set</b></p>
	<p><b>Requirement</b>: R100+, Translucent Goo, Octopus-shaped Helmet, Nightmare Figment</p>
	<p><b>Effect</b>: Additively gain Assistants based on the highest amount of Assistants you had in a previous game.</p>
	<p><b>Formula</b>: +(0.45 * x ^ 0.45), where x is the highest amount of Assistants you had in a previous game.</p>
	<p><b>Second Effect Requirement</b>: R220+, The Blackest Ink</p>
	<p><b>Effect</b>: Increases spell duration based on time spent being offline in this game.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
	<br/>
	<H6 id="Dwarven"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"> Dwarven Set</b></p>
	<p><b>Requirement</b>: R116+, Dwarven Bow, Stone Tankard, Beard Hair</p>
	<p><b>Effect</b>: Multiplicatively increase Assistants based on your Royal Exchange bonus.</p>
	<p><b>Formula</b>: (8 * x ^ 0.4)%, where x is Royal Exchange bonus.</p>
	<p><b>Second Effect Requirement</b>: R235+, Dwarven Anvil</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on time spent in this game.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your time spent in this game.</p>
	<br/>
	<H6 id="Drow"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"> Drow Set</b></p>
	<p><b>Requirement</b>: R116+, Ceremonial Dagger, Arachnid Figurine, Poison Vial</p>
	<p><b>Effect</b>: Spells cast count more based on time spent as Evil in this Reincarnation.</p>
	<p><b>Formula</b>: (6 * ln(1 + x) ^ 1.6)%, where x is time spent as Evil in this Reincarnation.</p>
	<p><b>Second Effect Requirement</b>: R235+, Stiletto Heel</p>
	<p><b>Effect</b>: Remove Ascension penalties from Royal Exchange bonus, starting from 0 and removing more levels of penalty over time and increase their production based on the amount of Gems you own.</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is the amount of Gems you own.</p>
	<p><b>Penalty Reduction</b>: (round((0.3 * x / 3600) ^ 0.5) - 1), where x is time spent in this game.</p>
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
	<p><b>Note</b>: Penalty Reduction unaffected by Set power bonuses.</p>
	<br/>
	<H6 id="Dragon"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonSet.png" align="middle"> Dragon Set</b></p>
	<p><b>Requirement</b>: R116+, Dragon Fang, Dragon Soul, Dragon Scale</p>
	<p><b>Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
	<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is spells cast in this Reincarnation.</p>
	<p><b>Second Effect Requirement</b>: R235+, Eye of the Dragon</p>
	<p><b>Effect</b>: All alignment spells gain 1 additional Tier and all spells activity time count more based on the amount of excavations you made, including resets.</p>
	<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5)%, where x is the number of excavations made, and y is your number of resets in this game.</p>
	<br/>
	<H6 id="Mercenary"></h6>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenarySet.png" align="middle"> Mercenary Set</b></p>
	<p><b>Requirement</b>: R160+, Steel Plate, Black Sword, Mercenary Insignia</p>
	<p><b>Effect</b>: Allows you to pick the same lineage as your faction including Prestige/Elite lineage of same alignment.</p>
	<p><b>Effect</b>: Lineage levels count 25% more.</p>
	<br/>
<?php include "../scripts/footer.html"; ?>
