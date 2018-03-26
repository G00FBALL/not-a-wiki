<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6>All Changes and Additions</h6>
<h6>Release date, March 26, 2018</h6>
<hr>
<p><b>New Easter Feat</b>: With new reward</p>
<hr>
<p><b>Hourglass</b>: Formula changed</p>
<p><b>Old Formula</b>: ((x / 3600) ^ (1 - 0.01 * ((y ^ 1.01) - z / 5) / 10), where x is hours this game (reset when upgrading lineage), y is lineage level and z is reincarnations.</p>
<p><b>New Formula</b>: ((x / 3600) ^ (1 - 0.01 * ((y ^ 1.1) - z / 5) / 10), where x is hours this game (reset when upgrading lineage), y is lineage level and z is reincarnations.</p>
<hr>
<p><b>Undead Set</b>: Formula and Chance changed</p>
<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
<p><b>Old Formula</b>: (45 * x ^ 0.6), where x is offline Multiplier.</p>
<p><b>New Formula</b>: 35 * log(1 + x) ^ 3.25, where x is offline Multiplier.</p>
<br/>
<p><b>Dusty Coffin</b></p>
<p><b>Old Chance</b>: ((1 / (30 + x ^ 1.75))%, where x is time this game in seconds.</p>
<p><b>New Chance</b>: ((1 / (30 + x ^ 1.5))%, where x is time this game in seconds.</p>
<hr>
<p><b>Elf artifact</b> Chance changed</p>
<p><b>Raw Emerald</b></p>
<p><b>Old Chance</b>: ((2 * x ^ 2) / 10000)%, where x is non-ruby excavation resets (this game).</p>
<p><b>New Chance</b>: ((2 * x ^ 4.5) / 10000)%, where x is non-ruby excavation resets (this game).</p>
<hr>
<p><b>Union Upgrades</b>: Cost changed</p>
<p><b>Upgrade 11</b></p>
<p><b>Old Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>New Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
<p><b>Upgrade 12</b></p>
<p><b>Old Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>New Cost</b>: 100 Tg (1e95) Emerald Coins</p>
<hr>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.1 February 5th, 2018</a></b></p>
        <div class="autohide">
<p><b>108th Reincarnation and up</b>
<p><b>Added</b>: Increase the production of Unique Buildings based on the difference of time spent as their respective faction against your most used faction in this reincarnation.</p>
<p><b>Formula</b>: (0.07 * (x - y) ^ 0.7, where x is highest faction time and y is faction time of the Unique Building affinity<p><b>115th Reincarnation and up</b></p>
<p><b>Added</b>: Increase Faction Coins found if they match your Faction, Bloodline or Artifact Set.</p>
<p><b>Excavation</b></p>
<p><b>Excavations</b>: Free reset if enough times excavated this R 2000 + 50 * R + 500 * x, where x is amount of resets this R</p>
<p><b>Trophies</b></p>
<p><a target="" href="http://musicfamily.org/realm/TrophyPage/"><b>Trophy Map Page</b></a></p>
<p><b>Moved 13 Trophies</b><p> Research associated 'Secret Trophies' moved to 'Misc Trophies'</p>
<p><b>Added</b>  2 Secret Trophies</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyFrenzySecretTrophy.png" align="middle"><b> Holy Frenzy</b></p>
            <p><b>Requirement</b>: A2+, In a single reincarnation, have a 3 day combined activity time of Holy Light and Blood Frenzy.</p>
            <p><b>Effect</b>: While Blood Frenzy or Holy Light are active, increase the production of all buildings.</p>
            <p><b>Formula</b>: (50 * T ^ 2)</p>
            <p><b>Note</b>: Upgrade scales from Holy Light/Blood Frenzy tiers.</p>
            <p><b>Cost</b>: 100 Dc (1e35)</p>
            <hr>
            <p><img src="http://musicfamily.org/realm/Factions/picks/UniformitySecretTrophy.png" align="middle"><b> Uniformity</b></p>
            <p><b>Requirement</b>: A2+, With no less than 3 days of playtime, have less than 1 minute of playtime difference for Order, Chaos and Balance alignments.</p>
            <p><b>Effect</b>: Increases production of all buildings based on time spent as least used alignment.</p>
            <p><b>Formula</b>: 0.7 * min(x ,y, z. s, t ,u) ^ 0.7, where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
            <p><b>Cost</b>: 100 Qid (1e50)</p>
    <hr>
<p><a target="" href="http://musicfamily.org/realm/Artifacts/"><b>Artifacts Page</b></a></p>
<p><b>Added</b>: 10 Artifacts, 9 that unlock Faction Sets</p>
<p><b>Changed</b>: 1 Artifact</p>
   <p><img src="http://musicfamily.org/realm/Factions/picks/WallChunckArtifact.png" alt="Wall Chunck" align="middle"><b> Wall Chunk</b></p>
    <p><b>Description</b>: A bigger piece of the infamous Ascension Wall.</p>
   <p><b>Requirements</b>: R100+</p>
   <p><b>Chance</b>: 10%</p>
   <p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
   <p><b>Cost</b>: 1 Sx (1e21) Emerald Coins</p>
   <p><b>New Formula</b>: 30000 * (11-x) ^ 3.5, where x is building tier.</p>
   <p><b>Old Formula</b>: 100000 * (11-x) ^ 3, where x is building tier.</p>
<br/>
<p><b>Added</b>: 10 Artifacts, 9 that unlock Faction Sets</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png" align="middle"><b> Ancestral Hourglass</b></p>
    <p><b>Description</b>: The silver sands contained within seem to never stop flowing.</p>
    <p><b>Requirement</b>: R100+</p>
    <p><b>Effect</b>: Lower cost of Lineage level based on time spent this game.FC cost is reset when you purchase a new lineage level.</p>
    <p><b>Formula</b>: ((x / 3600) ^ (1 - 0.01 * ((y ^ 1.01) - z / 5) / 10) where x is seconds this game/since lineage bought, y is lineage level and z is reincarnations.</p>
    <p><b>Lineage Cost Formula</b>: (25 * 10 ^ (15 + level - hourglass.formula)) ^ 0.9 if ancient heirloom</p>
    <p><b>Secret Upgrade Cost</b>: 1 Novg (1e90) Emerald Coins</p>
    <p><b>Chance:</b>: (x / 10000000000000000 (10 QA))%, where x is FC chance.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/SilkClothArtifact.png" align="middle"><b> Silk Cloth</b></p>
    <p><b>Description</b>: The purest silk made for Fairies, by Fairies, of Fairies.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Fairy Set.</p>
    <p><b>Chance</b>: (x - 10000) / 200000)%, where x is Wizard Tower.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"><b> Fairy Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Silk Cloth, Pink Carrot, Bottled Voice</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase Farm, Inn and Blacksmith production based on number of assistants owned.</p>
    <p><b>Formula</b>: (0.75 * x ^ 0.75), where x is number of assistants owned.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RawEmeraldArtifact.png" align="middle"><b> Raw Emerald</b></p>
    <p><b>Description</b>: Just slightly less precious than a raw Ruby.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Elven Set.</p>
    <p><b>Chance</b>: ((2 * x ^ 2) / 10000)%, where x is non-ruby excavation resets (this game).</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"><b> Elven Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Raw Emerald, Lucky Clover, Mini-treasure</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase all building production based on total amount of Elven Lucks triggered (This R)(since unlock).</p>
    <p><b>Formula</b>: (0.66 * x ^ 0.6), where x is amount of Elven Lucks triggered.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FossilizedWingArtifact.png" align="middle"><b> Fossilized Wing</b></p>
    <p><b>Description</b>: The remains of an Angel fallen to earth.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Angel Set.</p>
    <p><b>Chance</b>: (x / 25920000 (300 days))%, where x is angel time (all time) in seconds.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelSet.png" align="middle"><b> Angel Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Fossilized Wing, Pillar Fragment, Divine Sword</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase mana regen based on spells cast this game.</p>
    <p><b>Formula</b>: (0.32 * x ^ 0.32), where x is spells cast.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/SpikedWhipArtifact.png" align="middle"><b> Spiked Whip</b></p>
    <p><b>Description</b>: Use with caution. You do not want to exterminate all your slaves.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Goblin Set.</p>
    <p><b>Chance</b>: (x - 10000) / 300000)%, where x is Slave Pens.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinSet.png" align="middle"><b> Goblin Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Spiked Whip, Ancient Coin Piece, Goblin Purse</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.</p>
    <p><b>Formula</b>: (1 + (0.01 * x ^ 0.7)), where x is seconds.</p>
    <p><b>Note</b>: Ingame tooltip is off by one (actual effect is 1 higher)</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DustyCoffinArtifact.png" align="middle"><b> Dusty Coffin</b></p>
    <p><b>Description</b>: Sealed since forever, yet you can hear a strange noise from within.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Undead Set.</p>
    <p><b>Chance</b>: ((1 / (30 + x ^ 1.75))%, where x is time this game in seconds.</p>
    <p><b>Chance</b>: 1 in 3000 in 0 seconds 1 in 132349 at 60 seconds. 1 in 438078 at 120 seconds.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadSet.png" align="middle"><b> Undead Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: DustyCoffin, Rotten Organ, JawBone</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
    <p><b>Formula</b>: (45 * x ^ 0.6), where x is offline Multiplier.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/CrystallizedLavaArtifact.png" align="middle"><b> Crystallized Lava</b></p>
    <p><b>Description</b>: Incandescent but still. Can be used efficiently as a desk lamp.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Demon Set.</p>
    <p><b>Chance</b>: (x - 10000) / 200000)%, where x is Hall of  Legends.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"><b> Demon Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Crystallized Lava, Demonic Figurine, Demon Horn</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase non unique building production based on the sum of your faction spells activity time.</p>
    <p><b>Formula</b>: (0.25 * x ^ 0.75), where x is faction spell activity time.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png" align="middle"><b> Titan Helmet</b></p>
    <p><b>Description</b>: Made of enough metal to craft a human-sized full plate.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Titan Set.</p>
    <p><b>Chance</b>: ((x ^ 2) / 5000000000 (5B))%, where x is Royal Exchanges.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"><b> Titan Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Titan Helmet, Huge Titan Statue, Titan Shield</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
    <p><b>Formula</b>: (0.07 * x ^ 0.7), where x is seconds.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/BranchoftheLifeTreeArtifact.png" align="middle"><b> Branch of the Life Tree</b></p>
    <p><b>Description</b>: Despite being torn from its source tree, it keeps growing buds and leaves.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Druid Set.</p>
    <p><b>Chance</b>: (x ^ 3) / 2000000 (2M))%, where x is level of current lineage.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"><b> Druid Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Branch of the Life Tree, Glyph Table, Stone Of Balance</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase production of all buildings based on their quantity.</p>
    <p><b>Formula</b>: (0.65 * x ^ 0.65), where x is building count.</p>
    <hr>
    <p><img src="http://musicfamily.org/realm/Factions/picks/NightmareFigmentArtifact.png" align="middle"><b> Nightmare Figment</b></p>
    <p><b>Description</b>: An unshaped, ephemeral substance which is politely trying to corrupt your mind.</p>
    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
    <p><b>Effect</b>: Unlocks Faceless Set.</p>
    <p><b>Chance</b>: (x ^ 1.5 / 20000000 (20M))%, where x is headstart time in seconds.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"><b> Faceless Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Nightmare Figment, Translucent Goo, Octopus-shaped Helmet</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase production of all buildings based on highest amount of spells cast in a single game.</p>
    <p><b>Formula</b>: (0.32 * x ^ 0.32), where x is number of spells cast.</p>
<hr>
<p><a target="" href="http://musicfamily.org/realm/Lineages/"><b>Lineage Page</b></a></p>
<p><b>Added</b>: Level 30 Lineage Perks</p>
    <p><b>Fairy Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk4.png" alt="FairyPerk3" align="middle"><b> Fairy Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: When Fairy Chanting is active, increase assistant amount by 10% every 5 minutes of its duration.</p>
    <p><b>Formula</b>: 10 * Floor (x/300), where x is Fairy Chanting duration in seconds.</p>
<br/>
    <p><b>Elven Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk4.png" alt="ElvenPerk3" align="middle"><b> Elven Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: When Moon Blessing is active, multiply your Faction Coin chance by 500%.</p>
<br/>
    <p><b>Angel Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk4.png" alt="AngelPerk3" align="middle"><b> Angel Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: When God's Hand is active, increase max mana by 100%.</p>
<br/>
    <p><b>Goblin Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk4.png" alt="GoblinPerk3" align="middle"><b> Goblin Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: When Goblin's Greed is active, increase seconds worth of Tax Collections based on assistants owned.</p>
    <p><b>Formula</b>: (0.45 * x ^ 0.45), where x is assistants owned.</p>
<br/>
    <p><b>Undead Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk4.png" alt="UndeadPerk3" align="middle"><b> Undead Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: When offline, Night Time production is added to offline bonus. Night Time activity time counts 100% more for all purposes.</p>
<br/>
    <p><b>Demon Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk4.png" alt="DemonPerk4" align="middle"><b> Demon Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: Non-Unique buildings are also targeted by Hellfire Blast.</p>
<br/>
    <p><b>Titan Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk4.png" alt="TitalPerk3" align="middle"><b> Titan Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: Lightning Strike always hits Unique Buildings in addition to its random target. Unique Buildings are no longer random targets.</p>
<br/>
    <p><b>Druid Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk4.png" alt="DruidPerk3" align="middle"><b> Druid Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: Increase Grand Balance duration based on assistants owned. Also increase the  production of all buildings while Grand Balance is active by 10% every 5 minutes of its duration.</p>
    <p><b>Duration Formula</b>: (0.5 * x ^ 0.5), where x is assistants owned.</p>
<br/>
    <p><b>Faceless Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk4.png" alt="FacelessPerk3" align="middle"><b> Faceless Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: Brainwave headstart time is increased by 1000%.</p>
<br/>
    <p><b>Dwarf Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk4.png" alt="DwarfPerk3" align="middle"><b> Dwarf Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: When Diamond Pickaxe is active, increase mana regen based on Faction Coin chance.</p>
    <p><b>Formula</b>: (0 .5 * log(x + 1) ^ 2.5), where x is Faction Coin chance.</p>
<br/>
    <p><b>Drow Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk3.png" alt="DrowPerk4" align="middle"><b> Drow Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: Combo Strike's combo bonus increases by 5% per 30 seconds spent this game.</p>
<br/>
    <p><b>Dragon Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk4.png" alt="DragonPerk4" align="middle"><b> Dragon Perk 4</b></p>
    <p><b>Requirement</b>: R105+</p>
    <p><b>Effect</b>: Activates two breaths per cast.</p>
<hr>
<p><a target="" href="http://musicfamily.org/realm/Ascension2/"><b>A2 Page</b></a></p>
<p><b>Changed</b> All Creation, and Elf Union Upgrade</p>
<p><b>Added</b> 2 new Union upgrades for each faction</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AllCreation.png" alt="All Creation" align="middle"></p>
<p><b>Cost</b>: 6000 Mana</p>
<p><b>Effect</b>: Increase production of all buildings based on mana regeneration rate.</p>
<p><b>Effect</b>: Also multipicatively increase Faction Coin find chance based on your mana regeneration rate.</p>
<p><b>New Formula</b>: floor(2.5 * x ^ 0.44). where x is mana per second.</p>
<p><b>Old Formula</b>: floor(2.5 * x ^ 0.5). where x is mana per second.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" alt="Wooden Dices" align="middle"> <b>Wooden Dice</b></p>
<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
<p><b>Elven Luck Formula</b>: X ^ 0.3, where x is Arboreal Cities count.</p>
<p><b>New Production Formula</b>: (7 * x ^ 0.7), where x is Arboreal Cities count.</p>
<p><b>Old Production Formula</b>: (6 * x ^ 0.6), where x is Arboreal Cities count.</p>
<p><b>New Faction Coin Formula</b>: (1.5 * x ^ 0.7), where x is Arboreal Cities count.</p>
<p><b>Old Faction Coin Formula</b>: (x ^ 0.7), where x is Arboreal Cities count.</p>
<br/>
<p><b>Angel</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/Heaven'sBrilliance.png" alt="Heaven's Brilliance" align="middle"> <b>Heaven's Brilliance</b></p>
<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
<p><b>Requirement</b>: Angels Union</p>
<p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount od Holy Sites you own. All Dragon's Breath effects are increased based on the amount of Holy Sites you own. </p>
<p><b>Formula</b>: (0.6*x^0.6), where x is amount of Holy Sites owned.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AngelicFortitude.png" alt="Angelic Fortitude" align="middle"> <b>Angelic Fortitude</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Angels Union</p>
<p><b>Effect</b>: Increase the production of all buildings based on the sum of all your spells' activity time this R.</p>
<p><b>Formula</b>: (0.035 * x ^ 0.65), where x is seconds in current spells)</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png" alt="Seraphim Feathers" align="middle"> <b>Seraphim Feathers</b></p>
<p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
<p><b>Requirement</b>: Angels Union</p>
<p><b>Effect</b>: Increase mana regeneration by 60%.</p>
<br/>
<p><b>Undead</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/ZombieApocalypse.png" alt="Zombie Apocalypse" align="middle"> <b>Zombie Apocalypse</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Undead Union</p>
<p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is offline time thie R.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/EternalServitude.png" alt="Eternal Servitude" align="middle"> <b>Eternal Servitude</b></p>
<p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
<p><b>Requirement</b>: Undead Union</p>
<p><b>Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
<p><b>Formula</b>: (10000 + 25 * (x / 1800) ^ 2, where x is seconds</p>
<br/>
<p><b>Titan</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/TitanicAuthority.png" alt="Titanic Authority" align="middle"> <b>Titanic Authority</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Titan Union</p>
<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Royal Exchanges you made.</p>
<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is amount of Royal Exchanges you made.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ColossusKingdom.png" alt="Colossus Kingdom" align="middle"> <b>Colossus Kingdom</b></p>
<p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
<p><b>Requirement</b>: Titan Union</p>
<p><b>Effect</b>: Additively gain assistants based on total time spent as Order.</p>
<p><b>Formula</b>: (x ^ 0.7), where x is amount of Order time this R.</p>
<br/>
<p><b>Fairy</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/Pheromones.png" alt="Pheromones" align="middle"> <b>Pheromones</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Fairies Union</p>
<p><b>Effect</b>: Gain assistants based on time spent affiliated with Fairies. (All time)</p>
<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is time spent affiliated with Fairies. (All time)</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DreamCatchers.png" alt="Dream Catchers" align="middle"> <b>Dream Catchers</b></p>
<p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
<p><b>Requirement</b>: Fairies Union</p>
<p><b>Effect</b>: Every 30 minutes, multipicatively increase mana regen by a random amount. (starts at 0% on a new run)</p>
<br/>
<p><b>Demon</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/DemonicFury.png" alt="Demonic Fury" align="middle"> <b>Demonic Fury</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Demons Union</p>
<p><b>Effect</b>: Increase production of all buildings based on least time spent between Evil and Chaos this R.</p>
<p><b>Formula</b>: (0.12 * min(x, y) ^ 0.7, where x is evil time in seconds and y is chaos time in seconds.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" alt="Devastation" align="middle"> <b>Devastation</b></p>
<p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
<p><b>Requirement</b>: Demons Union</p>
<p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
<p><b>Formula</b>:  (0.35 * x ^ 0.65), where x is mana regen.</p>
<br/>
<p><b>Faceless</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/ForbiddenLanguage.png" alt="Forbidden Language" align="middle"> <b>Forbidden Language</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Faceless Union</p>
<p><b>Effect</b>: Increase spell durations based on the amount of Reincarnations made.</p>
<p><b>Formula</b>: (X)</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DimensionDoor.png" alt="Dimension Door" align="middle"> <b>Dimension Door</b></p>
<p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>Requirement</b>: Faceless Union</p>
<p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
<p><b>Formula</b>: (0.013 * x ^ 0.7), where x is highest max mana this R.</p>
<br/>
<p><b>Elven</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" alt="Wooden Dices" align="middle"> <b>Wooden Dice</b></p>
<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
<p><b>Elven Luck Formula</b>: X ^ 0.3, where x is Arboreal Cities count.</p>
<p><b>Production Formula</b>: (7 * x ^ 0.7), where x is Arboreal Cities count.</p>
<p><b>Faction Coin Formula</b>: (1.5 * x ^ 0.7), where x is Arboreal Cities count.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" alt="Camouflage" align="middle"> <b>Camouflage</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Effect</b>: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.</p>
<p><b>Formula</b>: (0.68 * x ^ 0.68)</p>
<p><b>Note</b>: Applies to formulas that use Assistant count, but not actual assistants.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png" alt="Elven Discipline" align="middle"> <b>Elven Discipline</b></p>
<p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game.</p>
<p><b>Formula</b>: (ln(x))</p>
<br/>
<p><b>Goblin</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/MoneyisMagic.png" alt="Money is Magic" align="middle"> <b>Money is Magic</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Goblins Union</p>
<p><b>Effect</b>: Increase mana regeneration based on the amount of Tax Collections cast in this game.</p>
<p><b>Formula</b>: (2 * (ln(x) ^ 1.2)), where x is amount of Tax Collections cast.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/LousyArchitecture.png" alt="Lousy Architecture" align="middle"> <b>Lousy Architecture</b></p>
<p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>Requirement</b>: Goblins Union</p>
<p><b>Effect</b>: Reduce Non-Unique buildings cost multiplier.</p>
<p><b>Formula</b>: (-0.02)</p>
<br/>
<p><b>Druid</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" alt="Lunar Cycle" align="middle"> <b>Lunar Cycle</b></p>
<p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>Requirement</b>: Druids Union</p>
<p><b>Effect</b>: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.</p>
<p><b>Formula</b>: (x + y) ^ 0.65) * (1 / abs(x - y) ^ 0.25), where x is online time in seconds and y is offline time in seconds.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/GroveFarming.png" alt="Grove Farming" align="middle"> <b>Grove Farming</b></p>
<p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>Requirement</b>: Druids Union</p>
<p><b>Effect</b>: Increase the production of all buildings based on their tier. Lower tiers get better bonuses.</p>
<p><b>Formula</b>: (10 * (11 - T) ^ 3), where T is building tier.</p>
    </div>
   </div>
  </div>
<?php include "../scripts/footer.html"; ?>
