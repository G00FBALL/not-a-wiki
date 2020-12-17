<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><img src="http://musicfamily.org/realm/Factions/picks/ExcavationTopPage.png"></h6>
        <h6>Artifact Sets</h6>
		<p><b>Finding all the faction artifacts for a specific faction</b>(R100+) will also unlock a new selection of upgrades called "Artifact Sets". You will be able to pick one per game only, similar to Bloodlines and Lineages. Abdicating will reset your choice and allow to pick another.</p>
		<p><b>Requires all lore artifacts related to the faction to use its set.</b> All artifacts can be found on the <a href="/realm/LoreArtifacts" research="Lore Artifacts"><b>Lore Artifacts</b></a> page.</p>
		<h6><center><img src="http://musicfamily.org/realm/Factions/picks/FactionSets3.6.png" usemap="#FactionSets-map"></h6></center>
		<map name="FactionSets-map">
			<area href="#Fairy" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"><b> Fairy Set</b></p>
			<p><b>Requirement</b>: R100+, Pink Carrot, Bottled Voice, Silk Cloth</p>
			<p><b>Effect</b>: Farms, Inns and Blacksmiths count more based on the amount of time spent with Fairies in this Reincarnation.</p>
			<p><b>Formula</b>: (0.7 * ln(1 + x) ^ 3)%, where x is time spent with Fairies in This Reincarnation in seconds.</p>
			<p><b>Second Effect Requirement</b>: R220+, Glowing Wing</p>
			<p><b>Effect</b>: Mutiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
			<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
			"coords="30,22,76,69" shape="rect">
			<area href="#Elven" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"><b> Elven Set</b></p>
			<p><b>Requirement</b>: R100+, Lucky Clover, Mini-treasure, Raw Emerald</p>
			<p><b>Effect</b>: Autoclicks 10 times per second.</p>
			<p><b>Second Effect Requirement</b>: R220+, Sylvan Mirror</p>
			<p><b>Effect</b>: Clicks count more based on autocast clicks.</p>
			<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
			<p><b>Note</b>: NOT affected by any "clicks count more" effects.</p>
			" coords="82,22,129,70" shape="rect">
			<p><img src="http://musicfamily.org/realm/Factions/picks/AngelSet.png" align="middle"><b> Angel Set</b></p>
			<p><b>Requirement</b>: R100+, Pillar Fragment, Divine Sword, Fossilized Wing</p>
			<p><b>Effect</b>: Additively increase Mana Regeneration based on highest amount of spells cast in a single game.</p>
			<p><b>Formula</b>: (3.5 * x ^ 0.35), where x is spells cast in a single game.</p>
			<p><b>Second Effect Requirement</b>: R220+, Solid Cloud</p>
			<p><b>Effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
			<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
			" coords="134,22,182,69" shape="rect">
			<area href="#Goblin" target="" research="
			<p><b>Requirement</b>: R100+, Ancient Coin Piece, Goblin Purse, Spiked Whip</p>
			<p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
			<p><b>Additive Formula</b>: (70 * x ^ 0.7), where x is time spent in this game.</p>
			<p><b>Multiplicative Formula</b>: (0.6 * x ^ 0.6), where x is time spent in this game.</p>
			<p><b>Second Effect Requirement</b>: R220+, Orc Fang Necklace</p>
			<p><b>Effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
			<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>
			" coords="28,75,77,120" shape="rect">
			<area href="#Undead" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/UndeadSet.png" align="middle"><b> Undead Set</b></p>
			<p><b>Requirement</b>: R100+, Rotten Organ, Jaw Bone, DustyCoffin</p>
			<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
			<p><b>Formula</b>: +(7 * ln(1 + x) ^ 3.5), where x is offline Multiplier.</p>
			<p><b>Second Effect Requirement</b>: R220+, Blood Chalice</p>
			<p><b>Effect</b>: Increases production bonus from gems based on FC found this game (Multiplicative).</p>
			<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is faction coins this game.</p>
			" coords="81,73,130,124" shape="rect">
			<area href="#Demon" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"><b> Demon Set</b></p>
			<p><b>Requirement</b>: R100+, Demonic Figurine, Demon Horn, Crystallized Lava</p>
			<p><b>Effect</b>: Trophies count more based on the amount of the three highest tier buildings you own.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the sum of the three highest tier buildings.</p>
			<p><b>Second Effect Requirement</b>: R220+, Demon Tail</p>
			<p><b>Effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
			<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
			" coords="133,74,182,121" shape="rect">
			<area href="#Titan" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"><b> Titan Set</b></p>
			<p><b>Requirement</b>: R100+, Huge Titan Statue, Titan Shield, Titan Helmet</p>
			<p><b>Effect</b>: Increase Royal Exchange Bonus additively and multiplicatively based on time spent in this game.</p>
			<p><b>Aditive Formula</b>: (0.3 * x ^ 0.7), where x is time spent in this game.</p>
			<p><b>Multiplicative Formula</b>: (0.45 * x ^ 0.45), where x is time spent in this game.</p>
			<p><b>Second Effect Requirement</b>: R220+, Frozen Lightning</p>
			<p><b>Effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
			<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
			" coords="30,127,78,174" shape="rect">
			<area href="#Druid" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"><b> Druid Set</b></p>
			<p><b>Requirement</b>: R100+, Glyph Table, Stone Of Balance, Branch of the Life Tree</p>
			<p><b>Effect</b>: Increase the duration of each spell based on their respective activity time (This Game).</p>
			<p><b>Formula</b>: (x ^ 0.5)%, where x is each invididual spell's activity time This Game in seconds.</p>
			<p><b>Second Effect Requirement</b>: R220+, Primal Leaf</p>
			<p><b>Effect</b>: Lineage levels count more based on spell casts in this game.</p>
			<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
			" coords="81,127,130,175" shape="rect">
			<area href="#Faceless" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"><b> Faceless Set</b></p>
			<p><b>Requirement</b>: R100+, Translucent Goo, Octopus-shaped Helmet, Nightmare Figment</p>
			<p><b>Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
			<p><b>Formula</b>: +(0.45 * x ^ 0.45), where x is the highest amount of assistants you had in a previous game.</p>
			<p><b>Second Effect Requirement</b>: R220+, The Blackest Ink</p>
			<p><b>Effect</b>: Increases spell duration based on time spent being offline in this game.</p>
			<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
			" coords="135,127,183,174" shape="rect">
			<area href="#Dwarven" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"><b> Dwarven Set</b></p>
			<p><b>Requirement</b>: R116+, Dwarven Bow, Stone Tankard, Beard Hair</p>
			<p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
			<p><b>Formula</b>: (8 * x ^ 0.4)%, where x is Royal Exchange bonus.</p>
			" coords="28,179,77,225" shape="rect">
			<area href="#Drow" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"><b> Drow Set</b></p>
			<p><b>Requirement</b>: R116+, Ceremonial Dagger, Arachnid Figurine, Poison Vial</p>
			<p><b>Effect</b>: Increase the production of Unique Buildings based on Evil spells cast in this Reincarnation.(additive)</p>
			<p><b>Formula</b>: (0.45 * x ^ 0.45), where x is total evil spells cast Reincarnation.</p>
			" coords="81,178,130,225" shape="rect">
			<area href="#Dragon" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/DragonSet.png" align="middle"><b> Dragon Set</b></p>
			<p><b>Requirement</b>: R116+, Dragon Fang, Dragon Soul, Dragon Scale</p>
			<p><b>Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
			<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is spells cast in this Reincarnation.</p>
			" coords="136,180,182,226" shape="rect">
			<area href="#Mercenary" target="" research="
			<p><img src="http://musicfamily.org/realm/Factions/picks/MercenarySet.png" align="middle"><b> Mercenary Set</b></p>
			<p><b>Requirement</b>: R160+, Steel Plate, Black Sword, Mercenary Insignia</p>
			<p><b>Effect</b>: Allows you to pick the same lineage as your faction including Prestige/Elite lineage of same alignment.</p>
			<p><b>Effect</b>: Lineage levels count 25% more.</p>
			" coords="26,231,75,279" shape="rect">
		</map>
		<br/>
		<H6 id="Fairy"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"><b> Fairy Set</b></p>
		<p><b>Requirement</b>: R100+, Pink Carrot, Bottled Voice, Silk Cloth</p>
		<p><b>Effect</b>: Farms, Inns and Blacksmiths count more based on the amount of time spent with Fairies in this Reincarnation.</p>
		<p><b>Formula</b>: (0.7 * ln(1 + x) ^ 3)%, where x is time spent with Fairies in This Reincarnation in seconds.</p>
		<p><b>Second Effect Requirement</b>: R220+, Glowing Wing</p>
		<p><b>Effect</b>: Mutiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
		<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
		<br/>
		<H6 id="Elven"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"><b> Elven Set</b></p>
		<p><b>Requirement</b>: R100+, Lucky Clover, Mini-treasure, Raw Emerald</p>
		<p><b>Effect</b>: Autoclicks 10 times per second.</p>
		<p><b>Second Effect Requirement</b>: R220+, Sylvan Mirror</p>
		<p><b>Effect</b>: Clicks count more based on autocast clicks.</p>
		<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
		<p><b>Note</b>: NOT affected by any "clicks count more" effects.</p>
		<br/>
		<H6 id="Angel"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/AngelSet.png" align="middle"><b> Angel Set</b></p>
		<p><b>Requirement</b>: R100+, Pillar Fragment, Divine Sword, Fossilized Wing</p>
		<p><b>Effect</b>: Additively increase Mana Regeneration based on highest amount of spells cast in a single game.</p>
		<p><b>Formula</b>: (3.5 * x ^ 0.35), where x is spells cast in a single game.</p>
		<p><b>Second Effect Requirement</b>: R220+, Solid Cloud</p>
		<p><b>Effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
		<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
		<br/>
		<H6 id="Goblin"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/GoblinSet.png" align="middle"><b> Goblin Set</b></p>
		<p><b>Requirement</b>: R100+, Ancient Coin Piece, Goblin Purse, Spiked Whip</p>
		<p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
		<p><b>Additive Formula</b>: (70 * x ^ 0.7), where x is time spent in this game.</p>
		<p><b>Multiplicative Formula</b>: (0.6 * x ^ 0.6), where x is time spent in this game.</p>
		<p><b>Second Effect Requirement</b>: R220+, Orc Fang Necklace</p>
		<p><b>Effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
		<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>
		<br/>
		<H6 id="Undead"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/UndeadSet.png" align="middle"><b> Undead Set</b></p>
		<p><b>Requirement</b>: R100+, Rotten Organ, Jaw Bone, DustyCoffin</p>
		<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
		<p><b>Formula</b>: +(7 * ln(1 + x) ^ 3.5), where x is offline Multiplier.</p>
		<p><b>Second Effect Requirement</b>: R220+, Blood Chalice</p>
		<p><b>Effect</b>: Increases production bonus from gems based on FC found this game (Multiplicative).</p>
		<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is faction coins this game.</p>
		<br/>
		<H6 id="Demon"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"><b> Demon Set</b></p>
		<p><b>Requirement</b>: R100+, Demonic Figurine, Demon Horn, Crystallized Lava</p>
		<p><b>Effect</b>: Trophies count more based on the amount of the three highest tier buildings you own.</p>
		<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the sum of the three highest tier buildings.</p>
		<p><b>Second Effect Requirement</b>: R220+, Demon Tail</p>
		<p><b>Effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
		<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
		<br/>
		<H6 id="Titan"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"><b> Titan Set</b></p>
		<p><b>Requirement</b>: R100+, Huge Titan Statue, Titan Shield, Titan Helmet</p>
		<p><b>Effect</b>: Increase Royal Exchange Bonus additively and multiplicatively based on time spent in this game.</p>
		<p><b>Aditive Formula</b>: (0.3 * x ^ 0.7), where x is time spent in this game.</p>
		<p><b>Multiplicative Formula</b>: (0.45 * x ^ 0.45), where x is time spent in this game.</p>
		<p><b>Second Effect Requirement</b>: R220+, Frozen Lightning</p>
		<p><b>Effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
		<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
		<br/>
		<H6 id="Druid"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"><b> Druid Set</b></p>
		<p><b>Requirement</b>: R100+, Glyph Table, Stone Of Balance, Branch of the Life Tree</p>
		<p><b>Effect</b>: Increase the duration of each spell based on their respective activity time (This Game).</p>
		<p><b>Formula</b>: (x ^ 0.5)%, where x is each invididual spell's activity time This Game in seconds.</p>
		<p><b>Second Effect Requirement</b>: R220+, Primal Leaf</p>
		<p><b>Effect</b>: Lineage levels count more based on spell casts in this game.</p>
		<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
		<br/>
		<H6 id="Faceless"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"><b> Faceless Set</b></p>
		<p><b>Requirement</b>: R100+, Translucent Goo, Octopus-shaped Helmet, Nightmare Figment</p>
		<p><b>Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
		<p><b>Formula</b>: +(0.45 * x ^ 0.45), where x is the highest amount of assistants you had in a previous game.</p>
		<p><b>Second Effect Requirement</b>: R220+, The Blackest Ink</p>
		<p><b>Effect</b>: Increases spell duration based on time spent being offline in this game.</p>
		<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
		<br/>
		<H6 id="Dwarven"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"><b> Dwarven Set</b></p>
		<p><b>Requirement</b>: R116+, Dwarven Bow, Stone Tankard, Beard Hair</p>
		<p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
		<p><b>Formula</b>: (8 * x ^ 0.4)%, where x is Royal Exchange bonus.</p>
		<br/>
		<H6 id="Drow"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"><b> Drow Set</b></p>
		<p><b>Requirement</b>: R116+, Ceremonial Dagger, Arachnid Figurine, Poison Vial</p>
		<p><b>Effect</b>: Increase the production of Unique Buildings based on Evil spells cast in this Reincarnation.(additive)</p>
		<p><b>Formula</b>: (0.45 * x ^ 0.45), where x is total evil spells cast Reincarnation.</p>
		<br/>
		<H6 id="Dragon"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/DragonSet.png" align="middle"><b> Dragon Set</b></p>
		<p><b>Requirement</b>: R116+, Dragon Fang, Dragon Soul, Dragon Scale</p>
		<p><b>Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
		<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is spells cast in this Reincarnation.</p>
		<br/>
		<H6 id="Mercenary"></h6>
		<p><img src="http://musicfamily.org/realm/Factions/picks/MercenarySet.png" align="middle"><b> Mercenary Set</b></p>
		<p><b>Requirement</b>: R160+, Steel Plate, Black Sword, Mercenary Insignia</p>
		<p><b>Effect</b>: Allows you to pick the same lineage as your faction including Prestige/Elite lineage of same alignment.</p>
		<p><b>Effect</b>: Lineage levels count 25% more.</p>
		<br/>
		<?php include "../scripts/footer.html"; ?>
