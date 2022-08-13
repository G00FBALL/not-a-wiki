<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><a href="/realm/Factions/"><img src="http://musicfamily.org/realm/Factions/picks/DragonTopPage.png" alt="Spellcraft" align="middle"></a></h6>
	<p><b>In-game description</b></p>
	<p>The Dragon is the mightiest, most imposing creature of all the realms. None may stand a chance alone against a Dragon, not even the fiercest of heroes. They usually care little for the lower creatures, but you have piqued their interest.</p>
	<p><b>Alignment</b>: Neutral</p>
	<p>The Dragon Faction appears in addition to a Neutral faction, this enables the player to use all the 2 faction spells and 18 upgrades from both the Neutral and Dragon factions.</p>
	<p>The Dragon faction cannot be combined with Good or Evil Factions.</p>
	<br/>
	<p><b>Unlock Requirements</b></p>
	<p>These Requirements can be done in separate game plays, and only need to be done once throughout the entire game-play.</p>
	<p><b>You can Abdicate and Reincarnate during the 12 hour wait of all 4 stages.</b></p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpikyRoughEggArtifact.png" align="middle"> Spiky Rough Egg Artifact</b></p>
	<p><b>Description</b>: What a weird egg... it looks ages old, yet something alive is inside. Perhaps if you wait long enough, something will hatch?</p>
	<p><b>Requirement</b>: R46+, 1500+ Excavations</p>
	<p><b>Chance</b>: 2%</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/Hatch!Artifact.png" align="middle"> Hatch!</b></p>
	<p><b>Description</b>: After waiting for a while... hatch the spiky egg and reveal what's inside!</p>
	<p><b>Requirement</b>: Spiky Rough Egg, 12 hours since obtaining the quest artifact</p>
	<p><b>Cost</b>: 1e64 (10 Vg), 1e7 (10 M) of each Faction Coin</p>
	<p><b>Effect</b>: Hatches the Egg.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrakelingFactionUpgrade.png" align="middle"> Drakeling</b></p>
	<p><b>Description</b>: The baby dragon needs to learn how to breathe flames first... perhaps a fair amount of Hellfire Blasts will help. Once it is ready, grow your baby dragon into a drakeling.</p>
	<p><b>Requirement</b>: Hatch!, 12 hours of active Hellfire Blast since purchasing the previous stage.</p>
	<p><b>Cost</b>: 1e67 (10 Uvg), 1e8 (100 M) of each Faction Coin</p>
	<p><b>Effect</b>: Grows Drakeling into Dragon.</p>
	<p><b>Note</b>: Do not use Research A25 as it will mess up the timer even worse and could increase the time needed.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonFactionUpgrade.png" align="middle"> Dragon</b></p>
	<p><b>Description</b>: The drakeling can now breathe fire, but it is not self-sufficient yet. A decent army of Fairy assistants will surely help. Once it is ready, grow your drakeling into a mature dragon.</p>
	<p><b>Requirement</b>: Drakeling, 12 hours since purchasing the previous stage, 3750 Fairy Assistants (Assists from Fairy Chanting count)</p>
	<p><b>Cost</b>: 1e70 (10 Dvg), 1e9 (1 B) of each Faction Coin</p>
	<p><b>Effect</b>: Grows Dragon into Elder Dragon</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElderDragonFactionUpgrade.png" align="middle"> Elder Dragon</b></p>
	<p><b>Description</b>: The dragon is now mature and has learned the customs of your realm. The only thing that remains is to feed him with a large amount of magical power... increase your maximum mana. Once it is ready, grow your dragon into an elder dragon.</p>
	<p><b>Requirement</b>: Dragon, 12 hours since purchasing the previous stage, 50000 Max Mana</p>
	<p><b>Cost</b>: 1e73 (10 Tvg), 1e10 (10 B) of each Faction Coin</p>
	<p><b>Effect</b>: Gives Dragon Tamer Trophy</p>
	<p><b>Note</b>: Remaining time until next stage never resets, it persists through Abdications, Reincarnations and Ascensions.</p>
	<br/>
	<p><b>Faction spell</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreath.png" align="middle"> Dragon's Breath</b></p>
	<p><b>Cost</b>: 1,500 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Activates one of the following effects at random for 20 seconds.</p>
	<p><b><font color="darkred">Red</font></b>: Increase the production of unique buildings based on the amount of Faction Coins found in this game.</p>
	<p><b><font color="darkred">Formula</font></b>: (2 * (ln(1 + x) ^ 2)%, where x is the amount of Faction Coins found in this game.</p>
	<br>
	<p><b><font color="darkgreen">Green</font></b>: Increase the production of all buildings based on the amount of spells cast in this game. Higher bonuses are provided to lower building tiers.</p>
	<p><b><font color="darkgreen">Formula</font></b>: (0.01 * x ^ 0.625 * (11 - T) ^ 5)%, where x is spells cast (this game) and T is the building tier. (1 for Farms, 11 for Hall of Legends).</p>
	<br>
	<p><b><font color="darkblue">Blue</font></b>: Multiplicatively increase your Mana Regeneration by 200%.</p>
	<br>
	<p><b><font color="white">White</font></b>: Temporarily increase the amount of assistants based on time spent being Neutral in this Reincarnation.</p>
	<p><b><font color="white">Formula</font></b>: +(30 * x ^ 0.7), where x is time spent as Neutral this Reincarnation.</p>
	<br>
	<p><b><font color="black">Black</b></font>: Increase the production of all buildings based on Dragon's Breath activity time in this game.</p>
	<p><b><font color="black">Formula</font></b>: (0.5 * x ^ 0.75)%, where x is Dragon's Breath activity time in this game.</p>
	<br/>
	<p><b>Spell Trophy &#38; Upgrade</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsRoarSpellUpgrade.png" align="middle"> Dragon's Roar</b></p>
	<p><b>Requirement</b>: Cast Dragon's Breath while having at least 4 other active spells.</p>
	<p><b>Cost</b>: 10 Dd (1e40), A2+ Free</p>
	<p><b>Effect</b>: Dragon's Breath multiplicatively increases Faction Coin find chance based on its duration.</p>
	<p><b>Formula</b>: (6 * x ^ 0.6)%, where x is its duration.</p>
	<hr>
	<p><b>Note</b>: In A1, Only 1 Dragon Upgrade per Mercenary tier and must be purchased with 4th upgrade of each tier.</p>
	<p><b>Note</b>: Mercenaries in A3 can buy Dragon Upgrades with any Mercenary Upgrade with increased price.</p>
	<hr>
	<p><b>Tier 1 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonTradeTreaty.png" align="middle"> Dragons Trade Treaty</b></p>
	<p><b>Description</b>: The Dragon is the mightiest, most imposing creature of all the realms. None may stand a chance alone against a Dragon, not even the fiercest of heroes. They usually care little for the lower creatures, but you have piqued their interest.</p>
	<p><b>Requirement</b>: Dragon Tamer Trophy, any Neutral alliance</p>
	<p><b>Cost</b>: 5 B (5e9) Dwarven and Drow coins</p>
	<p><b>Effect</b>: Unlocks Tier 1 Upgrades.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade1.png" align="middle"> Dragonscales</b></p>
	<p><b>Requirement</b>: Dragons Trade Treaty</p>
	<p><b>Cost</b>: 5 Uvg (5e66)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of time spent as Neutral in this Reincarnation. Effect is increased on Stone Pillars, Labyrinths and Hall Of Legends.</p>
	<p><b>Formula</b>: ((x / 60) ^ 0.5)%, where x is time spent as Neutral this Reincarnation. This is multiplied by 10 on Stone Pillars, Labyrinths and Hall of Legends.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade2.png" align="middle"> Iron Flight</b></p>
	<p><b>Requirement</b>: Dragons Trade Treaty</p>
	<p><b>Cost</b>: 50 Uvg (5e67)</p>
	<p><b>Effect</b>: Increase the production of Iron Stronghold by 200% per spell affecting it.</p>
	<p><b>Note</b>: Each instance of spell effects count as one spell (represented by the spell effect icons on the building icons). This includes Red, Green & Black Breath, A150 and D400.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade3.png" align="middle"> Imposing Presence</b></p>
	<p><b>Requirement</b>: Dragons Trade Treaty</p>
	<p><b>Cost</b>: 500 Uvg (5e68)</p>
	<p><b>Effect</b>: Increase Mana Regeneration additively based on the amount of Neutral buildings you own.</p>
	<p><b>Formula</b>: +(0.5 * x ^ 0.5), where x is the number of Neutral buildings owned.</p>
	<hr>
	<p><b>Tier 2 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonFriendshipPact.png" align="middle"> Dragons Friendship Pact</b></p>
	<p><b>Requirement</b>: Dragons Trade Treaty</p>
	<p><b>Cost</b>: 25 B (2.5e10) Dwarven and Drow coins</p>
	<p><b>Effect</b>: Unlocks Tier 2 Upgrades.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade4.png" align="middle"> Dragonborn</b></p>
	<p><b>Requirement</b>: Dragons Friendship Pact</p>
	<p><b>Cost</b>: 50 Dvg (5e70)</p>
	<p><b>Effect</b>: Increase assistants additively and multiplicatively, and their production, based on time spent affiliated with Dragons.</p>
	<p><b>Formula (Additive)</b>: +(50 * x ^ 0.5), where x is time spent as Dragons (All Time).</p>
	<p><b>Formula (Multiplicative)</b>: (0.5 * x ^ 0.25)%, where x is time spent as Dragons (All Time).</p>
	<p><b>Formula (Production)</b>: (0.7 * x ^ 0.3)%, where x is time spent as Dragons (All Time).</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade5.png" align="middle"> Bountiful Hoard</b></p>
	<p><b>Requirement</b>: Dragons Friendship Pact</p>
	<p><b>Cost</b>: 500 Dvg (5e71)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Artifacts you found.</p>
	<p><b>Formula</b>: (5 * (x ^ 1.25))%, where x is amount of artifacts you found.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade6.png" align="middle"> Sharp Claws</b></p>
	<p><b>Requirement</b>: Dragons Friendship Pact</p>
	<p><b>Cost</b>: 5 Tvg (5e72)</p>
	<p><b>Effect</b>: Multiplicatively increase Royal Exchange Bonus and Faction Coin find chance based on clicks made in this game.</p>
	<p><b>Formula</b>: (0.8 * x ^ 0.35)%, where x is the number of clicks this game.</p>
	<hr>
	<p><b>Tier 3 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonAlliance.png" align="middle"> Dragons Alliance</b></p>
	<p><b>Requirement</b>: Dragons Friendship Pact</p>
	<p><b>Cost</b>: 65b (6.5e10) Dwarven and Drow coins</p>
	<p><b>Effect</b>: Unlocks Tier 3 Upgrades.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade7.png" align="middle"> Ancient Hunger</b></p>
	<p><b>Requirement</b>: Dragons Alliance</p>
	<p><b>Cost</b>: 500 Tvg (5e74)</p>
	<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula (Additive)</b>: +(20 * ln(1 + x) ^ 2), where x is Faction Coins found this game.</p>
	<p><b>Formula (Multiplicative)</b>: (0.75 * ln(1 + x) ^ 1.25)%, where x is Faction Coins found this game.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade8.png" align="middle"> Eternal Wisdom</b></p>
	<p><b>Requirement</b>: Dragons Alliance</p>
	<p><b>Cost</b>: 5 Qavg (5e75)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.95)%, where x is individual Royal Exchange bonus.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade9.png" align="middle"> Chromatic Scales</b></p>
	<p><b>Requirement</b>: Dragons Alliance</p>
	<p><b>Cost</b>: 50 Qavg (5e76)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of active Dragon's Breath effects.</p>
	<p><b>Formula</b>: (100 * (x ^ 2))%, where x is amount of active Dragon's Breath effects.</p>
	<hr>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonHeritage.png" alt="Dragon Heritage" align="middle"> Dragon Heritage</b></p>
	<p><b>Requirements</b>: Dragons Champion Trophy</p>
	<p><b>Cost</b>: 400 B (4e11) Dwarven and Drow coins</p>
	<p><b>Effect</b>: Increase assistants production based on time spent with Dragons in this Reincarnation.</p>
	<p><b>Formula</b>: (0.3 * x ^ 0.7)%, where x is time spent with Dragons in this Reincarnation.</p>
	<hr>
	<p><b>Dragons Research Requirements</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sDenQuestFactionUpgrade.png" align="middle"> Wyrm's Den Quest</b></p>
	<p><b>Description</b>: Ava'yorn thurirl. Our kind needs large spaces and a place to take flight. Build enough Iron Strongholds to make room for us.</p>
	<p><b>Requirement</b>: R46 + 4500 Iron Strongholds</p>
	<p><b>Cost</b>: 100 Tvg (1e74)</p>
	<p><b>Effect</b>: Unlocks Wyrm's Den</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sDenFactionUpgrade.png" align="middle"> Wyrm's Den</b></p>
	<p>Upgrade Iron Stronghold to Wyrm's Den, boosting their production based on the total amount of Faction Coins you collected and unlocking more unique perks for the building.</p>
	<p><b>Formula</b>: (0.065 * (ln(1 + (x / 2) + y)) ^ 3.65) where x is faction coins (This Game) and y is Faction Coins (This R)</p>
	<p><b>Requirement</b>: R46 + 4500 Iron Strongholds</p>
	<p><b>Cost</b>: 10 Nod (1e61)</p>
	<p><b>Effect</b>: Unlocks Wyrm's Den Unique Building</p>
	<br/>
	<p><b>Unique Building</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUniqueBuilding.png" alt="Unique building Dragon" align="middle"></b></p>
	<p>Upgraded from Iron Stronghold</p>
	<p>At R46, Dragon's Iron Stronghold building can be upgraded to a Unique Building: Wyrm's Den, which is required for some research quests.</p>
	<hr>
	<p><b>Ascension 2 - R116+</b></p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureQuest.png" align="middle"> Dragon Pasture Quest</b></p>
	<p><b>Description</b>: Insignificant creature, you have much to do to gain our full respect. Our hatchlings need more food... yes, this would be a task worthy of your stature. Show your ability to maintain powerful magic at the same time, and we will let you serve us.</p>
	<p><b>Requirement</b>: 42 active spells</p>
	<p><b>Cost</b>: 100 Vg (1e65)</p>
	<p><b>Effect</b>: Grants access to Unique Building.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonPasture.png" align="middle"> Dragon Pasture Upgrade</b></p>
	<p><b>Requirement</b>: Dragon Pasture Quest</p>
	<p><b>Cost</b>: 100 Qivg (1e80)</p>
	<p><b>Effect</b>: Gives Dragon Pasture Unique Building.</p>
	<br/>
	<p><b>Unique Building</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureUniqueBuilding.png" align="middle"></b></p>
	<p><b>Effect</b>: Upgrade Farm to Dragon Pastures, boosting their production based on your max mana and unlocking more unique perks for the building.</p>
	<p><b>Formula</b>: (0.63 * x ^ 0.63)%, where x is your Maximum Mana.</p>
	<p><b>Effect</b>: Grants access to Faction Union.</p>
	<hr>
	<p><b>Tier 4 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"> Dragon Union</b></p>
	<p><b>Requirement</b>: Dragon Pastures Unique Building</p>
	<p><b>Cost</b>: 100 Sp (1e26) Dwarven and Drow coins</p>
	<p><b>Effect</b>: Grants access to Union Upgrades.</p>
	<p><b>Effect (based on Alignment)</b>:</p>
	<p><b>Proof of Order</b>: Increase the production of all buildings based on time spent as Order this Reincarnation.</p>
	<p><b>Formula</b>: (3 * x ^ 0.7)%, where x is time spent as Order this Reincarnation.</p>
	<br/>
	<p><b>Proof of Chaos</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend on floor(ln(1+x)) where x is FC chance (even for Unique, odd for Non-Unique).</p>
	<p><b>Formula (Unique)</b>: (0.9 * x ^ 0.35)%, where x is assistants owned.</p>
	<p><b>Formula (Non-Unique)</b>: (2.7 * x ^ 0.35)%, where x is assistants owned.</p>
	<br/>
	<p><b>Proof of Balance</b>: Multiplicatively increase Maximum Mana based on your current Lineage level.</p>
	<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your current Lineage level.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade10.png" align="middle"> Fang Food</b></p>
	<p><b>Cost</b>: 10 Dtg (1e100)</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration and Assistants based on the highest amount of Dragon Pastures you built in this Reincarnation.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Dragon Pastures owned in this Reincarnation.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade11.png" align="middle"> Wyrm's Rest</b></p>
	<p><b>Cost</b>: 100 Qitg (1e110)</p>
	<p><b>Effect</b>: Remove 1 Ascension penalty from Royal Exchange bonus. Also gives Dragon's Breath White Breath a multiplicative effect on Assistants based on time spent as Dragons.</p>
	<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is time spent as Dragon this Reincarnation.</p>
	<p><b>Note</b>: The multiplicative White Breath effect stacks multiplicatively with extra White Breaths.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUpgrade12.png" align="middle"> Draconic Supremacy</b></p>
	<p><b>Cost</b>: 1 Notg (1e120)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on Maximum Mana.</p>
	<p><b>Formula</b>: (20 * ln(1 + x) ^ 2)%, where x is your Maximum Mana.</p>
	<hr>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDragonHeritage.png" align="middle"> Advanced Dragon Heritage</b></p>
	<p><b>Requirement</b>: Dragon Master trophy and 6 hours activity time (This Game) of Dragon's Breath.</p>
	<p><b>Cost</b>: 1 Sp (1e24) Dwarven and Drow Coins</p>
	<p><b>Effect</b>: The amount of active spells counts 5% more for all purposes.</p>
	<p><b>Note</b>: When using their lineage, Advanced Heritage powers are multiplied by the level of the lineage.</p>
	<p><b>Formula</b>: *(1 + 0.3 * level)</p>
<?php include "../scripts/footer.html"; ?>