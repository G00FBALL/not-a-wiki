<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/Factions/"><img src="http://musicfamily.org/realm/Factions/picks/DragonTopPage.png" alt="Spellcraft" align="middle"></a></h6>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonChampionTrophy.png" alt="Smiley face" align="middle"><b> Champion Trophy</b></p>
        <p><b>In-game description</b></p>
        <p>The Dragon is the mightiest, most imposing creature of all the realms. None may stand a chance alone against a Dragon, not even the fiercest of heroes. They usually care little for the lower creatures, but you have piqued their interest.</p>
        <p>The Dragon Faction appears in addition to a Neutral faction, this enables the player to use all the 2 faction spells and 18 upgrades from both the Neutral and Dragon factions.</p>
        <p>The Dragon faction cannot be combined with Good or Evil Factions.</p>
        <p><b>Alignment</b>: Prestige (Neutral)</p>
        <br/>
        <p><b>Unlock Requirements</b></p>
        <p>These Requirements can be done in separate game plays, and only need to be done once throughout the entire game-play.</p>
        <p><b>You can Abdicate and Reincarnate during the 12 hour wait of all 4 stages.</b></p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/SpikyRoughEggArtifact.png" alt="Smiley face" align="middle"><b> Spiky Rough Egg Artifact</b></p>
        <p><b>Description</b>: What a weird egg... it looks ages old, yet something alive is inside. Perhaps if you wait long enough, something will hatch?</p>
        <p><b>Requirement</b>: R46+, 1500+ Excavations</p>
        <p><b>Chance</b>: 2%</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Hatch!Artifact.png" alt="Smiley face" align="middle"><b> Hatch!</b></p>
        <p><b>Description</b>: After waiting for a while... hatch the spiky egg and reveal what's inside!</p>
        <p><b>Requirement</b>: Spiky Rough Egg, 12 hours since obtaining the quest artifact</p>
        <p><b>Cost</b>: 10Vg (1e64), (10m (1e7) each FC)</p>
        <p><b>Effect</b>: Hatches the Egg</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DrakelingFactionUpgrade.png" alt="Smiley face" align="middle"><b> Drakeling</b></p>
        <p><b>Description</b>: The baby dragon needs to learn how to breathe flames first... perhaps a fair amount of Hellfire Blasts will help. Once it is ready, grow your baby dragon into a drakeling.</p>
        <p><b>Requirement</b>: Hatch!, 12 hours of active Hellfire Blast since purchasing the previous stage.</p>
        <p><b>Cost</b>: 1.0e67, 100m (1e8) each FC</p>
        <p><b>Effect</b>: Grows Drakeling into Dragon.</p>
        <p><b>Note</b>: Do not use Research A25 as it will mess up the timer even worse and could increase the time needed.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonFactionUpgrade.png" alt="Smiley face" align="middle"><b> Dragon</b></p>
        <p><b>Description</b>: The drakeling can now breathe fire, but it is not self-sufficient yet. A decent army of Fairy assistants will surely help. Once it is ready, grow your drakeling into a mature dragon.</p>
        <p><b>Requirement</b>: Drakeling, 12 hours since purchasing the previous stage, 3750 Fairy Assistants (Assists from Fairy Chanting count)</p>
        <p><b>Cost</b>: 1.0e70, 1b (1e9) FC</p>
        <p><b>Effect</b>: Grows Dragon into Elder Dragon</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/ElderDragonFactionUpgrade.png" alt="Smiley face" align="middle"><b> Elder Dragon</b></p>
        <p><b>Description</b>: The dragon is now mature and has learned the customs of your realm. The only thing that remains is to feed him with a large amount of magical power... increase your maximum mana. Once it is ready, grow your dragon into an elder dragon.</p>
        <p><b>Requirement</b>: Dragon, 12 hours since purchasing the previous stage, 50000 Max Mana</p>
        <p><b>Cost</b>: 1.0e73, 10b (1e10) of each FC</p>
        <p><b>Effect</b>: Gives Dragon Tamer Trophy</p>
        <br/>
        <p><b>Faction spell</b></p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreath.png" alt="Smiley face" align="middle"><b> Dragon's Breath</b></p>
        <p><b>Effect</b>: Activates one of the following effects at random.</p>
        <p><b><font color="darkred">Red</font></b>: Increase the production of unique buildings based on the amount of Faction Coins found in this game.</p>
        <p><b><font color="darkred">Formula</b></font>: (2 * (ln(1 + X) ^ 2)), where x is Faction Coins found in this game.</p>
        <br/>
        <p><b><font color="darkgreen">Green</b></font>: Increase the production of all buildings based on the amount of spells cast in this game. Higher bonuses are provided to lower building tiers.</p>
        <p><b><font color="darkgreen">Formula</b></font>: (0.01 * x ^ 0.625 * (11-T) ^ 5)%, where x is spells cast (this game) and T is the building tier. (1 for Farms, 11 for Hall of Legends).</p>
        <p><b><font color="darkgreen">Formula</b></font>: (0.32 * x ^ 0.625) Druid and Faceless boost with the above Formula.</p>
        <br/>
        <p><b><font color="darkblue">Blue</b></font>: Increase your mana regeneration by 200%</p>
        <br/>
        <p><b><font color="white">White</b></font>: Temporarily increase the amount of assistants based on total time spent being neutral.</p>
        <p><b><font color="white">Formula</b></font>: (1.35 * floor(x / 60) ^ 0.7), where x is time as neutral this R in seconds.</p>
        <br/>
        <p><b><font color="black">Black</b></font>: Increase the production of all buildings based on Dragon's Breath activity time.</p>
        <p><b><font color="black">Formula</b></font>: (0.5 * x ^ 0.75)%, where x is Dragon's Breath activity time.</p>
        <br/>
        <p><b>Spell Trophy &#38; Upgrade</b></p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Dragon'sRoarFactionUpgrade.png" alt="God's Rest" align="middle"> <b>Dragon's Roar</b></p>
        <p><b>Requirement</b>: Cast Dragon's Breath while having at least 4 other active spells.</p>
        <p><b>Effect</b>: Dragon's Breath multiplicatively increases Faction Coin find chance based on its duration.</p>
        <p><b>Formula</b>: (6 * x ^0.6), where x is duration in seconds.</p>
        <p><b>Upgrade Cost</b>: 10 Dd (1e40), A2+ Free</p>
        <hr>
        <p><b>Note</b>: In A1, Only 1 Dragon Upgrade per Mercenary tier and must be purchased with 4th upgrade of each tier.</p>
        <p><b>Note</b>: Mercenaries in A3 can buy Dragon Upgrades with any Mercenary Upgrade with increased price.</p>
        <hr>
        <p><b>Tier 1 Upgrades</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsTradeTreatyFactionUpgrade.png" alt="Smiley face" align="middle"> Dragons Trade Treaty</b></p>
        <p><b>Description</b>: The Dragon is the mightiest, most imposing creature of all the realms. None may stand a chance alone against a Dragon, not even the fiercest of heroes. They usually care little for the lower creatures, but you have piqued their interest.</p>
        <p><b>Requirement</b>: Dragon Tamer Trophy, any Neutral alliance</p>
        <p><b>Cost</b>: 5b (5e9) Dwarven and Drow coins</p>
        <p><b>Effect</b>: Unlocks Tier 1 Upgrades.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonscalesFactionUpgrade.png" alt="Smiley face" align="middle"> Dragonscales</b></p>
        <p><b>Requirement</b>: Dragons Trade Treaty</p>
        <p><b>Cost</b>: 5 Uvg (5.0e66)</p>
        <p><b>Effect</b>: Increase the production of Stone Pillars, Labyrinth and Hall of Legends based on the total amount of time spent as Neutral.</p>
        <p><b>Formula</b>: ((1.25 * t) ^ 0.55) where t is total amount of time spent as Neutral in minutes (this R).</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/IronFlightFactionUpgrade.png" alt="Smiley face" align="middle"> Iron Flight</b></p>
        <p><b>Requirement</b>: Dragons Trade Treaty</p>
        <p><b>Cost</b>: 50 Uvg (5.0e67)</p>
        <p><b>Effect</b>: Increase the production of Iron Stronghold by 2000% when affected by any Spell.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/EternalWisdomFactionUpgrade.png" alt="Smiley face" align="middle"> Eternal Wisdom</b></p>
        <p><b>Requirement</b>: Dragons Trade Treaty</p>
        <p><b>Cost</b>: 500 Uvg (5.0e68)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
        <p><b>Formula</b>: (2 * (x ^ 1.15)) where x is Royal Exchange bonus.</p>
        <hr>
        <p><b>Tier 2 Upgrades</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsFriendshipPactFactionUpgrade.png" alt="Smiley face" align="middle"> Dragons Friendship Pact</b></p>
        <p><b>Requirement</b>: Dragons Trade Treaty</p>
        <p><b>Cost</b>: 25b (2.5e10) Dwarven and Drow coins</p>
        <p><b>Effect</b>: Unlocks Tier 2 Upgrades.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonbornFactionUpgrade.png" alt="Smiley face" align="middle"> Dragonborn</b></p>
        <p><b>Requirement</b>: Dragons Friendship Pact</p>
        <p><b>Cost</b>: 50 Dvg (5.0e70)</p>
        <p><b>Effect</b>: Increase assistants production based on time spent affiliated with Dragons.</p>
        <p><b>Formula</b>: (0.75 * (x ^ 0.55))% where x is amount of time spent with Dragons (All game).</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/BountifulHoardFactionUpgrade.png" alt="Smiley face" align="middle"> Bountiful Hoard</b></p>
        <p><b>Requirement</b>: Dragons Friendship Pact</p>
        <p><b>Cost</b>: 500 Dvg (5e71 DC)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the amount of Artifacts you found.</p>
        <p><b>Formula</b>: (5 * (x ^ 1.25))% where x is amount of artifacts you found.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/SharpClawsFactionUpgrade.png" alt="Smiley face" align="middle"> Sharp Claws</b></p>
        <p><b>Requirement</b>: Dragons Friendship Pact</p>
        <p><b>Cost</b>: 5 Tvg (5e72 DC)</p>
        <p><b>Effect</b>: Gain additional assistants based on clicks made in this game.</p>
        <p><b>Formula</b>: (1.35 * x ^ 0.35), where x is clicks made in this game.</p>
        <hr>
        <p><b>Tier 3 Upgrades</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsAllianceFactionUpgrade.png" alt="Smiley face" align="middle"> Dragons Alliance</b></p>
        <p><b>Requirement</b>: Dragons Friendship Pact</p>
        <p><b>Cost</b>: 65b (6.5e10) Dwarven and Drow coins</p>
        <p><b>Effect</b>: Unlocks Tier 3 Upgrades.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/AncientHungerFactionUpgrade.png" alt="Smiley face" align="middle"> Ancient Hunger</b></p>
        <p><b>Requirement</b>: Dragons Alliance</p>
        <p><b>Cost</b>: 500 Tvg (5.0e74)</p>
        <p><b>Effect</b>: Increase maximum mana based on the amount of Faction Coins found in this game.</p>
        <p><b>Formula</b>: floor(45 * ln(1 + x) ^ 1.45) where x is amount of FCs found (This Game).</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/ImposingPresenceFactionUpgrade.png" alt="Smiley face" align="middle"> Imposing Presence</b></p>
        <p><b>Requirement</b>: Dragons Alliance</p>
        <p><b>Cost</b>: 5 Qavg (5.0e75)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of neutral buildings you own.</p>
        <p><b>Formula</b>: (0.1 * floor(x ^ 0.5)) where x is amount of neutral buildings.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/ChromaticScalesFactionUpgrade.png" alt="Smiley face" align="middle"> Chromatic Scales</b></p>
        <p><b>Requirement</b>: Dragons Alliance</p>
        <p><b>Cost</b>: 50 Qavg (5.0e76)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the amount of active Dragon's Breath effects.</p>
        <p><b>Formula</b>: (100 * (x ^ 2)) where x is amount of active Dragon's Breath effects.</p>
        <hr>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonHeritageFactionUpgrade.png" alt="Drow Heritage" align="middle"><b> Dragon Heritage</b></p>
        <p><b>Requirements</b>: Dragons Champion Trophy</p>
        <p><b>Cost</b>: 400b (4e11) Dwarven and Drow coins</p>
        <p><b>Effect</b>: Increase assistants production based on time spent affiliated with Dragons (All Game).</p>
        <p><b>Formula</b>: (0.55 * x ^ 0.55)%, x is hours affiliated with dragon at all R's.</p>
        <hr>
        <p><b>Dragons Research Requirements</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sDenQuestFactionUpgrade.png" alt="Smiley face" align="middle"> Wyrm's Den Quest</b></p>
        <p>Ava'yorn thurirl. Our kind needs large spaces and a place to take flight. Build enough Iron Strongholds to make room for us.</p>
        <p><b>Requirement</b>: R46 + 4500 Iron Strongholds</p>
        <p><b>Cost</b>: 100 Tvg (1.0e74)</p>
        <p><b>Effect</b>: Unlocks Wyrm's Den</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sDenFactionUpgrade.png" alt="Smiley face" align="middle"> Wyrm's Den</b></p>
        <p>Upgrade Iron Stronghold to Wyrm's Den, boosting their production based on the total amount of Faction Coins you collected and unlocking more unique perks for the building.</p>
        <p><b>Formula</b>: 0.065 * (ln(1 + (x / 2) + y)) ^ 3.65 where x is faction coins (This Game) and y is Faction Coins (This R)</p>
        <p><b>Requirement</b>: R46 + 4500 Iron Strongholds</p>
        <p><b>Cost</b>: 10 Nod (1.e61)</p>
        <p><b>Effect</b>: Unlocks Wyrm's Den Unique Building</p>
        <br/>
        <p><b>Unique Building</b></p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonUniqueBuilding.png" alt="Unique building Dragon" align="middle"></p>
        <p>Upgraded from Iron Stronghold</p>
        <p>At R46, Dragon's Iron Stronghold building can be upgraded to a Unique Building: Wyrm's Den, which is required for some research quests.</p>
        <hr>
        <p><b>Ascension 2 - R116+</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDragonHeritage.png" align="middle"> Advanced Dragon Heritage</b></p>
        <p><b>Requirements</b>: Dragon Master trophy and 8 hours activity time (This Game) of Dragon's Breath.</p>
        <p><b>Cost</b>: 1 Sp (1e24) Dwarven and Drow Coins</p>
        <p><b>Effect</b>: The amount of active spells counts 5% more for all purposes.</p>
        <p><b>Note</b>: When using their lineage, Advanced Heritage powers are multiplied by the level of the lineage.</p>
        <p><b>Formula</b>: (1 + 0.3 * level)</p>
        <p><b>Note</b>: Not available till R116</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureQuest.png" align="middle"><b> Dragon Pasture Quest</b></p>
        <p><b>Description</b>: Insignificant creature, you have much to do to gain our full respect. Our hatchlings need more food... yes, this would be a task worthy of your stature. Show your ability to maintain powerful magic at the same time, and we will let you serve us.</p>
        <p><b>Requirement</b>: 42 active spells</p>
        <p><b>Cost</b>: 1e65</p>
        <p><b>Effect</b>: Grants access to Unique Building.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPasture.png" align="middle"><b> Dragon Pasture Upgrade</b></p>
        <p><b>Requirement</b>: Dragon Pasture Quest</p>
        <p><b>Cost</b>: 1e80</p>
        <p><b>Effect</b>: Gives Dragon Pasture Unique Building.</p>
        <br/>
        <p><b>Unique Building</b></p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureUniqueBuilding.png" align="middle"></p>
        <p><b>Effect</b>: Upgrade Farm to Dragon Pastures, boosting their production based on your max mana and unlocking more unique perks for the building.</p>
        <p><b>Formula</b>: (0.63 * x ^ 0.63), where x is your max mana.</p>
        <p><b>Effect</b>: Grants access to Faction Union.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"><b> Dragon Union</b></p>
        <p><b>Cost</b>: 100 Sp (1e26) Dwarven and Drow coins</p>
        <p><b>Effect</b>: Grants access to Union Upgrades.</p>
        <br/>
        <p><b>Other Effects</b></p>
        <p><b>Proof of Order</b>: Increase the production of all buildings based on time spent as Order this R.</p>
        <p><b>Formula</b>: (7 * x ^ 0.7), where x is time spent as Order this R.</p>
        <br/>
        <p><b>Proof of Balance</b>: Multiplicatively increase max mana based on your current Lineage level.</p>
        <p><b>Formula</b>: (1.3 * x ^ 1.3), where x is Lineage level.</p>
        <br/>
        <p><b>Proof of Chaos</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend on (ln(x)) where x is FC chance (even for Unique, odd for Non-Unique).</p>
        <p><b>Formula</b>: Non-Unique (0.2 * x ^ 0.8), where x is assistant count.</p>
        <p><b>Formula</b>: Unique (0.6 * x ^ 0.6), where x is assistant count.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/FangFood.png" align="middle"><b> Fang Food</b></p>
        <p><b>Cost</b>: 10 Dtg (1e100)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of Dragon Pastures you own.</p>
        <p><b>Formula</b>: (0.65 * x ^ 0.65), where x is Dragon Pastures you own.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sRest.png" align="middle"><b> Wyrm's Rest</b></p>
        <p><b>Cost</b>: 100 Qitg (1e110)</p>
        <p><b>Effect</b>: Gain assistants based on the amount of time spent as Dragon this Reincarnation.</p>
        <p><b>Formula</b>: (15 * x ^ 0.65), where x is time spent as Dragon this Reincarnation.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/DraconicSupremacy.png" align="middle"><b> Draconic Supremacy</b></p>
        <p><b>Cost</b>: 1 Notg (1e120)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on your max mana. </p>
        <p><b>Formula</b>: (0.6 * x ^ 0.45), where x is max mana.</p>
        <?php include "../scripts/footer.html"; ?>
