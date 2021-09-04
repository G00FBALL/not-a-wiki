<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>
        <h6>3.4 Patches/Updates</h6>
        <br/>
        <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.4.3 Dec 19, 2018</a></b></p>
                <div class="autohide">
                    <p><b>v3.4.3 Dec 19, 2018</b></p>
                    <br/>
                    <p><b>Christmas Event</b>: Will start Dec 21, 2018</p>
                    <p><b>Added</b>: New feat with new reward</p>
                    <br/>
                    <p><b>Changed</b>: Heavy Avalanche now (x ^ (2.5 * A)), where x is original bonus in percentage</p>
                    <p><b>Changed</b>: Grand Avalanche now (x ^ (5 * A)), where x is original bonus in percentage (overrides Heavy Avalanche)</p>
                    <br/>
                    <p><b>Elven Challenge 3</b>: Fixed</p>
                    <br/>
                    <p><b>Elite Faction Union</b></p>
                    <p><b>Old Cost</b>: 1 Td (1e42) Faction Coins</p>
                    <p><b>New Cost</b>: 1 Qad (1e45) Faction Coins</p>
                    <br/>
                    <p><b>Elite Faction Heritage</b></p>
                    <p><b>Old Cost</b>: 1 Qid (1e48)</p>
                    <p><b>New Cost</b>: 1 Td (1e42)</p>
                    <br/>
                    <p><b>Faction Mask</b></p>
                    <p><b>Old Cost</b>: 1 QiQag (1.e138)</p>
                    <p><b>New Cost</b>: 10 Dqag (1e130)</p>
                    <hr>
                    <p><b>Faction Changes</b></p>
                    <p><b>Elven</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" alt="Camouflage" align="middle"> Camouflage (EL11)</b></p>
                    <p><b>Effect</b>: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.</p>
                    <p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is assistant count.</p>
                    <p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is assistant count.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUnion.png" alt="Elven Union" align="middle"> Elven Union</b></p>
                    <p><b>Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (2.85 * ln(x) ^ 2.85), where x is faction coins found in this Reincarnation.</p>
                    <p><b>New Formula</b>: (3 * ln(x) ^ 3), where x is faction coins found in this Reincarnation.</p>
                    <hr>
                    <p><b>Angel</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" alt="Angels Union" align="middle"> Angels Union</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
                    <p><b>Old Formula</b>: (ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
                    <p><b>New Formula</b>: (4 * ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
                    <hr>
                    <p><b>Undead</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ZombieApocalypse.png" alt="Zombie Apocalypse" align="middle"> Zombie Apocalypse (UD11)</b></p>
                    <p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
                    <p><b>Old Formula</b>: (0.72 * x ^ 0.72), where x is offline time this R.</p>
                    <p><b>New Formula</b>: (3.5 * x ^ 0.7), where x is offline time this R.</p>
                    <hr>
                    <p><b>Demon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AbyssalFurnace.png" alt="Abyssal Furnace" align="middle"> Abyssal Furnace (DM10)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the amount of Burning Abysses you own. Higher tiers get better bonuses.</p>
                    <p><b>Old Formula</b>: (0.1 * (t ^ 2) * (x ^ 0.5)), where x is Hall of legends count, t is building tier.</p>
                    <p><b>New Formula</b>: (0.5 * (t ^ 2) * (x ^ 0.5)), where x is Hall of legends count, t is building tier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonicFury.png" alt="Demonic Fury" align="middle"> Demonic Fury (DM11)</b></p>
                    <p><b>Old Effect</b>: Increase production of all buildings based on least time spent between Evil and Chaos this R.</p>
                    <p><b>New Effect</b>: Increase faction coin find chance based on least time spent between Evil and Chaos this R.</p>
                    <p><b>Formula</b>: (0.12 * min(x, y) ^ 0.7), where x is evil time in seconds and y is chaos time in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" alt="Devastation" align="middle"> Devastation (DM12)</b></p>
                    <p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 0.6), where x is mana regen.</p>
                    <p><b>New Formula</b>: (3.5 * ln(1+ x) ^ 3.5), where x is mana regen.</p>
                    <hr>
                    <p><b>Titan</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GiantMarket.png" alt="Giant Market" align="middle"> Giant Market (TT10)</b></p>
                    <p><b>Effect</b>: Increase Royal Exchanges count based on the amount of Mountain Palaces you own.</p>
                    <p><b>Old Formula</b>: (1.25 * x ^ 0.75), where x is amount of Mountain Palaces owned.</p>
                    <p><b>New Formula</b>: (1.25 * x ^ 0.725), where x is amount of Mountain Palaces owned.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png" align="middle"> Titan Helmet (Artifact)</b></p>
                    <p><b>Old Chance</b>: ((x ^ 2) / 5000000000 (5B))%, where x is Royal Exchanges (Royal Exchange count multipliers DO count).</p>
                    <p><b>New Chance</b>: ((x ^ 2) / 1,500,000,000 (1.5B))%, where x is Royal Exchanges (Royal Exchange count multipliers <b>DO NOT</b> count).</p>
                    <hr>
                    <p><b>Druid</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GroveFarming.png" alt="Grove Farming" align="middle"> Grove Farming (DD12)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on their tier. Middle tiers get better bonuses.</p>
                    <p><b>Old Formula</b>: (0.75 * ((6 - abs(6 - T)) ^ 5)), where T is building tier.</p>
                    <p><b>New Formula</b>: (0.8 * ((6 - abs(6 - T)) ^ 5)), where T is building tier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" alt="Druids Union" align="middle"> Druids Union</b></p>
                    <p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
                    <p><b>Old Formula</b>: (5 * ((x * y) / 2.5)), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <p><b>New Formula</b>: (3 * x * y ^ 1.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <hr>
                    <p><b>Dwarf</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"> Dwarven Union</b></p>
                    <p><b>Effect</b></p>
                    <p><b>Proof of Order</b>: Increase all building production based on time spent this reincarnation.</p>
                    <p><b>Old Formula</b>: (0.8 * x ^ 0.65), where x is time spent this reincarnation.</p>
                    <p><b>New Formula</b>: (3.5 * x ^ 0.65), where x is time spent this reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"> Dwarven Set</b></p>
                    <p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
                    <p><b>Old Formula</b>: (x ^ 0.9), where x is Royal Exchange bonus.</p>
                    <p><b>New Formula</b>: (2.5 * x ^ 0.75), where x is Royal Exchange bonus.</p>
                    <hr>
                    <p><b>Drow</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AncillaeObscureUnionUpgrade2.png" align="middle"> Ancillae Obscurae (DW11)</b></p>
                    <p><b>Effect</b>: Increase Non-Unique building production based on amount of Unique Buildings.</p>
                    <p><b>Old Formula</b>: (45 * x ^ 0.45), where x is amount of Unique Buildings.</p>
                    <p><b>New Formula</b>: (50 * x ^ 0.5), where x is amount of Unique Buildings.</p>
                    <hr>
                    <p><b>Dragon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"> Dragon Union</b></p>
                    <p><b>Effect</b></p>
                    <p><b>Proof of Order</b>: Increase the production of all buildings based on time spent as Order this R.</p>
                    <p><b>Old Formula</b>: (1.65 * x ^ 0.65), where x is time spent this Order.</p>
                    <p><b>New Formula</b>: (6.5 * x ^ 0.65), where x is time spent this Order.</p>
                    <hr>
                    <p><b>Archon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StarTrading.png" align="middle"> Star Trading (AR1)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the maximum amount of Royal Exchanges you made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.9), where x is Royal Exchanges.</p>
                    <p><b>New Formula</b>: (0.25 * x), where x is Royal Exchanges.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EnergyRecharge.png" align="middle"> Energy Recharge (AR2)</b></p>
                    <p><b>Effect</b>: Maximum Mana counts more based on the amount of time spent as Order in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.32 * x ^ 0.58), where x is time spent as Order this R in seconds.</p>
                    <p><b>New Formula</b>: (0.25 * x ^ 0.55), where x is time spent as Order this R in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPride.png" align="middle"> Archon Pride (AR5)</b></p>
                    <p><b>Effect</b>: Increase assistants based on time spent as your least used faction.</p>
                    <p><b>Old Formula</b>: (50 + (1.3 * x ^ 0.7)), where x is least used faction.</p>
                    <p><b>New Formula</b>: (50 + 0.3 * x ^ 0.7), where x is least used faction.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SuperiorConsciousness.png" align="middle"> Superior Consciousness (AR7)</b></p>
                    <p><b>Effect</b>: Increase the production of Unique buildings based on their quantity.</p>
                    <p><b>Old Formula</b>: (0,8 * x ^ 0.8), where x is Unique Buildings.</p>
                    <p><b>New Formula</b>: (0.85 * x ^ 0.85), where x is Unique Buildings.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonHeritage.png" align="middle"> Archon Heritage</b></p>
                    <p><b>Old Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 15%.</p>
                    <p><b>New Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 10%.</p>
                    <hr>
                    <p><b>Djinn</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TheDesireWithin.png" align="middle"> The Desire Within (DJ1)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on spells of your current alignments cast in this game.</p>
                    <p><b>Old Formula</b>: (25 * ln(1 + x) ^ 2.35), where x is alignments spells cast in this game.</p>
                    <p><b>New Formula</b>: (25 * ln(1 + x) ^ 2), where x is alignments spells cast in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AuraofMagic.png" align="middle"> Aura of Magic (DJ4)</b></p>
                    <p><b>Effect</b>: Increase non-unique building production based on mana produced this game.</p>
                    <p><b>Old Formula</b>: (0.75 * x ^ 0.35), where x is mana produced this game.</p>
                    <p><b>New Formula</b>: (0.125 * x ^ 0.325), where x is mana produced this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WildSurge.png" align="middle"> Wild Surge (DJ6)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.75), where x is the duration of your longest spell.</p>
                    <p><b>New Formula</b>: (0.35 * x ^ 0.65), where x is the duration of your longest spell.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WishingWell.png" align="middle"> Wishing Well (DJ7)</b></p>
                    <p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.045 * x ^ 0.45), where x is amount of assistants you own.</p>
                    <p><b>New Formula</b>: (0.04 * x ^ 0.4), where x is amount of assistants you own.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FlashyStorm.png" align="middle"> Flashy Storm (DJ8)</b></p>
                    <p><b>Effect</b>: Increase the production of even-tier buildings on odd days of the month, odd-tier buildings on even days.</p>
                    <p><b>Note</b>: The bonus is based on assistants owned.</p>
                    <p><b>Old Formula</b>: (0.125 * x ^ 0.425), where x is assistants owned.</p>
                    <p><b>New Formula</b>: (ln(1 + x) ^ 2.5), where x is assistants owned.</p>
                    <hr>
                    <p><b>Makers</b></p>
                    <p><b>MK2 and MK4 switch places</b></p>
                    <p><b>Old MK2</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicalShards.png" align="middle"> Magical Shards (MK2)</b></p>
                    <p><b>Effect</b>: Increase mana regeneration based on artifacts found.(Multiplicatively)</p>
                    <p><b>Formula</b>: (x ^ 0.95), where x is artifacts found.</p>
                    <p><b>New MK2</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicalShards.png" align="middle"> Everlasting Materials (MK2)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.2 * x ^ 0.7), where x is highest amount of buildings built this Reincarnation.</p>
                    <br/>
                    <p><b>Old MK4</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EverlastingMaterials.png" align="middle"> Everlasting Materials (MK4)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.15 * x ^ 0.7), where x is highest amount of buildings built this Reincarnation.</p>
                    <p><b>New MK4</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EverlastingMaterials.png" align="middle"> Magical Shards (MK4)</b></p>
                    <p><b>Effect</b>: Increase mana regeneration based on artifacts found.(Multiplicatively)</p>
                    <p><b>Formula</b>: (x ^ 0.95), where x is artifacts found.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StoneServants.png" align="middle"> Stonecarving (MK7)</b></p>
                    <p><b>Old Effect</b>: Increase assistants based on excavations made in this Reincarnation, including resets.</p>
                    <p><b>Old Formula</b>: (0.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
                    <p><b>New Formula</b>: (2.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StructuralStability.png" align="middle"> Structural Stability (MK9)</b></p>
                    <p><b>Effect</b>: Increase the production of building tiers directly above or below Unique Buildings based on spells cast in this game.</p>
                    <p><b>Old Formula</b>: (0.1 * x ^ 0.375), where x spells cast in this game.</p>
                    <p><b>New Formula</b>: (0.2 * x ^ 0.4), where x spells cast in this game.</p>
                    <p><b>Note</b>: MK9 now works like W3150 ( ^ 2 bonus when able).</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble (MK12)</b></p>
                    <p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (4 * ln(x) ^ 4), where x is clicks made this Reincarnation.</p>
                    <p><b>New Formula</b>: (3 * ln(x) ^ 3), where x is clicks made this Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersHeritage.png" align="middle"> Makers Heritage</b></p>
                    <p><b>Effect</b>: Increase maximum mana based on Tax Collections cast in this game.</p>
                    <p><b>Old Formula</b>: (2.2 * log10(1 + x) ^ 1.8), where x is Tax Collections cast this game.</p>
                    <p><b>New Formula</b>: (2 * log10(x) ^ 1.75), where x is Tax Collections cast this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUnion.png" align="middle"> Makers Union</b></p>
                    <p><b>Old Effect</b>: All Creation is based on highest mana regeneration rate this reincarnation.</p>
                    <p><b>New Effect</b>: All Creation production effect is based on the highest mana regeneration rate in this Reincarnation.</p>
                    <p><b>Note</b>: No longer effects All creation FC chance</p>
                    <hr>
                    <p><b>Spells</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PrecognitionSpell.png" alt="Precognition"></b></p>
                    <p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
                    <p><b>Old Formula</b>: (1.25 * log10(1 + x) ^ 2), where x is mana produced in this game.</p>
                    <p><b>New Formula</b>: (1.25 * log10(1 + x) ^ 1.75), where x is mana produced in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/LimitedWishSpell.png" alt="Limited Wish" align="middle"></b></p>
                    <p><b>Effect</b>: Provide a random effect based on your base faction, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
                    <p><b>Possible Effects</b></p>
                    <p><b>Fairy</b></p>
                    <p><b>1</b>: Increase the production of all buildings</p>
                    <p><b>2</b>: Increase Assistants</p>
                    <p><b>3: Old Effect</b>: Increase Faction Coin find chance</p>
                    <p><b>3: New Effect</b>: All spells durations count more</p>
                    <p><b>4</b>: Increase Mana Regeneration</p>
                    <br/>
                    <p><b>Demon</b></p>
                    <p><b>1</b>: Increase the production of all buildings</p>
                    <p><b>2</b>: Increase Trophy count and Offline Bonus</p>
                    <p><b>3</b>: Increase Mana Regeneration</p>
                    <p><b>4: Old Effect</b>: Increase all spells activity time count except Limited Wish.</p>
                    <p><b>4: New Effect</b>: Increase Faction Coin find chance</p>
                    <br/>
                    <p><b>Faceless</b></p>
                    <p><b>1</b>: Increase the production of all buildings</p>
                    <p><b>2: Old Effect</b>: Increase all spells activity time count except Limited Wish</p>
                    <p><b>2: New Effect</b>: All spells durations count more</p>
                    <p><b>3</b>: Increase Faction Coin find chance</p>
                    <p><b>4</b>: Increase Maximum Mana</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" alt="All Creation" align="middle"></b></p>
                    <p><b>Effect</b>: Increase assistants based on Maximum Mana.</p>
                    <p><b>Old Formula</b>: (0.045 * x ^ 0.45), where x is Maximum Mana.</p>
                    <p><b>New Formula</b>: (12.5 * (ln(1 + x) ^ 1.25), where x is Maximum Mana.</p>
                    <br/>
                    <p><b>Effect</b>: Increase max mana based on FC chance.</p>
                    <p><b>Formula</b>: (1.65 * log10(1 + x) ^ 1.65), where x is FC chance.</p>
                    <br/>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (1.35 * x ^ (0.5 + 0.0025 * (y + z))), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Formula</b>: (1.35 * x ^ (0.5 + 0.002 * (y + z))), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <hr>
                    <p><b>Research</b></p>
                    <p><b>C305</b> - <b>For</b> All Factions - <b>Research Name</b>: Golemcraft</p>
                    <p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</p>
                    <p><b>Old Formula</b>: floor(0.15 * (x / 60) ^ 0.95), where x is your Time Spent Offline(this R).</p>
                    <p><b>New Formula</b>: floor(0.2 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
                    <hr>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.4 Nov 27, 2018</a></b></p>
                <div class="autohide">
                    <br/>
                    <p><b>Added</b>: 3 new Factions, each with upgrades, spells, artifacts and trophies</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonChampion.png" align="middle"> Archon Champion</b></p>
                    <p><b>Requirement</b>: R125+, 12 faction upgrades (this includes faction treaty)</p>
                    <br/>
                    <p><b>Archon (AR)</b></p>
                    <p><b>Alignment</b>: (Order)</p>
                    <p><b>Faction spell</b>: Precognition</p>
                    <p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
                    <p><b>Formula</b>: (1.15 * log10(1 + x) ^ 2.15), where x is mana produced in this game.</p>
                    <hr>
                    <p><b>Unlock Requirements</b>: First, Second, and Third Iron Fragment</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FirstIronFragment.png" align="middle"> First Iron Fragment</b></p>
                    <p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Angel</p>
                    <p><b>Chance</b>: (log10(1 + x) ^ 3 / 100000 (100K))%, where x is mana regen.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SecondIronFragment.png" align="middle"> Second Iron Fragment</b></p>
                    <p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Titan</p>
                    <p><b>Chance</b>: (x ^ 3 / 5000000000 (5B))%, where x is royal exchange bonus.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ThirdIronFragment.png" align="middle"> Third Iron Fragment</b></p>
                    <p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Undead</p>
                    <p><b>Chance</b>: (log10(1 + x) ^ 3 / 1000000 (1M))%, where x is offline bonus multiplier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonMask.png" align="middle"> Archon Mask</b></p>
                    <p><b>Requirement</b>: Find all 3 Iron Fragments.</p>
                    <p><b>Cost</b>: 1 QiQag (1.e138)</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance by 2000%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonQuest.png" align="middle"> Archon Quest</b></p>
                    <p><b>Requirements</b>: Collect all 3 Iron Fragments and accumulate 2 days of Temporal Flux activity time in this game.</p>
                    <p><b>Cost</b>: 1 Ocqag (1e147)</p>
                    <p><b>Effect</b>: Unlocks Archon Faction</p>
                    <hr>
                    <p><b>Tier 1 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonTradeTreaty.png" align="middle"> Archon Trade Treaty</b></p>
                    <p><b>Description</b>: The Archon value loyalty and any systematic and efficient plan of action. Affiliating with them will increase your ability to boost your production immensely over long periods of time.</p>
                    <p><b>Requirements</b>: Vanilla and Prestige Union</p>
                    <p><b>Cost</b>: 1 Dc (1e33) Angel and Undead Coins</p>
                    <p><b>Effect</b>: Unlocks Archon Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StarTrading.png" align="middle"> Star Trading</b></p>
                    <p><b>Cost</b>: 1 NoQag (1e150)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the maximum amount of Royal Exchanges you made in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.25 * x ^ 0.9), where x is Royal Exchanges.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EnergyRecharge.png" align="middle"> Energy Recharge</b></p>
                    <p><b>Cost</b>: 10 NoQag (1e151)</p>
                    <p><b>Effect</b>: Maximum Mana counts more based on the amount of time spent as Order in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.32 * x ^ 0.58), where x is time spent as Order this R in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/CosmicResonance.png" align="middle"> Cosmic Resonance</b></p>
                    <p><b>Cost</b>: 100 NoQag (1e152)</p>
                    <p><b>Effect</b>: Increase Royal Exchange bonus based on clicks made in this Reincarnation.</p>
                    <p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is clicks made.</p>
                    <hr>
                    <p><b>Tier 2 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonFriendshipPact.png" align="middle"> Archon Friendship Pact</b></p>
                    <p><b>Cost</b>: 1 UD (1e36) Angel and Undead Coins</p>
                    <p><b>Effect</b>: Unlocks Archon Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Constellation.png" align="middle"> Constellation</b></p>
                    <p><b>Cost</b>: 100 UQig (1e158)</p>
                    <p><b>Effect</b>: Increase Mana Regeneration based on the amount of Unique Buildings owned.</p>
                    <p><b>Formula</b>: (0.5 * x ^ 0.5), where x is Unique Buildings.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPride.png" align="middle"> Archon Pride</b></p>
                    <p><b>Cost</b>: 1 DQig (1e159)</p>
                    <p><b>Effect</b>: Increase assistants based on time spent as your least used faction.</p>
                    <p><b>Formula</b>: (50 + (1.3 * x ^ 0.7)), where x is least used faction.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Absentmindedness.png" align="middle"> Absent-mindedness</b></p>
                    <p><b>Cost</b>: 10 DQig (1e160)</p>
                    <p><b>Effect</b>: Increase Offline bonus based on Excavation Resets made in this Reincarnation.</p>
                    <p><b>Formula</b>: (3 * (x + y) ^ 3), where x is free resets this R and y is ruby resets this R.</p>
                    <hr>
                    <p><b>Tier 3 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonAlliance.png" align="middle"> Archon Alliance</b></p>
                    <p><b>Cost</b>: 1 Dd (1e39) Angel and Undead Coins</p>
                    <p><b>Effect</b>: Unlocks Archon Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SuperiorConsciousness.png" align="middle"> Superior Consciousness</b></p>
                    <p><b>Cost</b>: 10 TQig (1e163)</p>
                    <p><b>Effect</b>: Increase the production of Unique buildings based on their quantity.</p>
                    <p><b>Formula</b>: (0,8 * x ^ 0.8), where x is Unique Buildings.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StrangeAttraction.png" align="middle"> Strange Attraction</b></p>
                    <p><b>Cost</b>: 100 TQig (1e164)</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on the activity time of your least used spell.</p>
                    <p><b>Formula</b>: (25 + (0.25 * x ^ 0.75)), where x is spell with least acttivity time this R in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArcaneCore.png" align="middle"> Arcane Core</b></p>
                    <p><b>Cost</b>: 1 QaQig (1e165)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game.</p>
                    <p><b>Formula</b>: (2.35 * log10(1 + x) ^ 2.35), where x is mana produced in this game.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonHeritage.png" align="middle"> Archon Heritage</b></p>
                    <p><b>Cost</b>: 1 Td (1e42) Angel and Undead Coins</p>
                    <p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 15%.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUnion.png" align="middle"> Archon Union</b></p>
                    <p><b>Requirements</b>: R130</p>
                    <p><b>Cost</b>: 1 Qad (1e45) Angel and Undead Coins</p>
                    <p><b>Effect</b>: Temporal Flux also increases Maximum Mana.</p>
                    <p><b>Formula</b>: (0.35 * (x / 60) ^ 0.825), where x is time this game in seconds</p>
                    <p><b>Effect</b>: Unlocks Archon Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PurityofForm.png" align="middle"> Purity of Form</b></p>
                    <p><b>Requirements</b>: Archon Union</p>
                    <p><b>Cost</b>: 1 QiQig (1e168) </p>
                    <p><b>Effect</b>: Lineage levels count 300% more for all purposes.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AbsoluteHierarchy.png" align="middle"> Absolute Hierarchy</b></p>
                    <p><b>Requirements</b>: Archon Union</p>
                    <p><b>Cost</b>: 10 QiQig (1e169) </p>
                    <p><b>Effect</b>: Remove 1 Ascension Penalty from Call to Arms.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EssenceExtractor.png" align="middle"> Essence Extractor</b></p>
                    <p><b>Requirements</b>: Archon Union</p>
                    <p><b>Cost</b>: 100 QiQig (1e170) </p>
                    <p><b>Effect</b>: Increase production bonus from Gems based on the duration of your longest spell.</p>
                    <p><b>Formula</b>: (0.15 * x ^ 0.7), where x is the duration of your longest spell.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnChampion.png" align="middle"> Djinn Champion</b></p>
                    <p><b>Requirement</b>: R125+, 12 faction upgrades (this includes faction treaty)</p>
                    <br/>
                    <p><b>Djinn (DJ)</b></p>
                    <p><b>Alignment</b>: (Chaos)</p>
                    <p><b>Faction spell</b>: Limited Wish</p>
                    <p><b>Effect</b>: Provide a random effect based on your base faction, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
                    <p><b>Possible Effects</b></p>
                    <p><b>Fairy</b></p>
                    <p><b>1</b>: Increase the production of all buildings</p>
                    <p><b>2</b>: Increase Assistants</p>
                    <p><b>3</b>: Increase Faction Coin find chance</p>
                    <p><b>4</b>: Increase Mana Regeneration</p>
                    <p><b>Demon</b>: </p>
                    <p><b>1</b>: Increase the production of all buildings</p>
                    <p><b>2</b>: Increase Trophy count and Offline Bonus</p>
                    <p><b>3</b>: Increase Mana Regeneration</p>
                    <p><b>4</b>: Increase all spells activity time count except Limited Wish.</p>
                    <p><b>Faceless</b>: </p>
                    <p><b>1</b>: Increase the production of all buildings</p>
                    <p><b>2</b>: Increase all spells activity time count except Limited Wish</p>
                    <p><b>3</b>: Increase Faction Coin find chance</p>
                    <p><b>4</b>: Increase Maximum Mana</p>
                    <br/>
                    <p><b>Formula</b>: (1.725 * (ln(1 + x) ^ 1.25) * (y ^ 0.65)), where x is Limited Wish activity time this game in seconds and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
                    <hr>
                    <p><b>Unlock Requirements</b>: First, Second, and Third Crystal Fragment</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FirstCrystalFragment.png" align="middle"> First Crystal Fragment</b></p>
                    <p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Fairy</p>
                    <p><b>Chance</b>: (x / 100000000000 (100B))%, where x is assistant count.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SecondCrystalFragment.png" align="middle"> Second Crystal Fragment</b></p>
                    <p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Faceless</p>
                    <p><b>Chance</b>: (log10(1 + x) ^ 3 / 5000000 (5M))%, where x is faction coins this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ThirdCrystalFragment.png" align="middle"> Third Crystal Fragment</b></p>
                    <p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Demon</p>
                    <p><b>Chance</b>: (x / 50000000 (50M))%, where x is evil spells this R.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnMask.png" align="middle"> Djinn Mask</b></p>
                    <p><b>Requirement</b>: Find all 3 Crystal Fragments.</p>
                    <p><b>Cost</b>: 1 QiQag (1.e138)</p>
                    <p><b>Effect</b>: Increase Maximum Mana by 750%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnQuest.png" align="middle"> Djinn Quest</b></p>
                    <p><b>Requirements</b>: Collect all 3 Crystal Fragments and accumulate 2 days of Maelstrom Flux activity time in this game.</p>
                    <p><b>Cost</b>: 1 Ocqag (1e147)</p>
                    <p><b>Effect</b>: Unlocks Djinn Faction</p>
                    <hr>
                    <p><b>Tier 1 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnTradeTreaty.png" align="middle"> Djinn Trade Treaty</b></p>
                    <p><b>Description</b>: A magical race of ephemeral and elusive beings, unbound by natural rules but instead commanding them. Affiliating with them will grant you the ability to manipulate random outcomes to your advantage.</p>
                    <p><b>Requirements</b>: Vanilla and Prestige Union</p>
                    <p><b>Cost</b>: 1 Dc (1e33) Fairy and Demon Coins</p>
                    <p><b>Effect</b>: Unlocks Djinn Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TheDesireWithin.png" align="middle"> The Desire Within</b></p>
                    <p><b>Cost</b>: 1 NoQag (1e150)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on spells of your current alignments cast in this game.</p>
                    <p><b>Formula</b>: (25 * ln(1 + x) ^ 2.35), where x is alignments spells cast in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ForbiddenWill.png" align="middle"> Forbidden Will</b></p>
                    <p><b>Cost</b>: 10 NoQag (1e151)</p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the highest amount of Faction Coins found in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.2 * log10(1 + x) ^ 2), where x is highest amount of Faction Coins found in this Reincarnation.</p>
                    <br>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicalCircuit.png" align="middle"> Magical Circuit</b></p>
                    <p><b>Cost</b>: 100 NoQag (1e152)</p>
                    <p><b>Effect</b>: Increase Maximum Mana based on researches selected.</p>
                    <p><b>Formula</b>: sum(sumOfDigits(bought research number)) ^ 1.4</p>
                    <hr>
                    <p><b>Tier 2 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnFriendshipPact.png" align="middle"> Djinn Friendship Pact</b></p>
                    <p><b>Cost</b>: 1 UD (1e36) Fairy and Demon Coins</p>
                    <p><b>Effect</b>: Unlocks Djinn Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AuraofMagic.png" align="middle"> Aura of Magic</b></p>
                    <p><b>Cost</b>: 100 UQig (1e158)</p>
                    <p><b>Effect</b>: Increase non-unique building production based on mana produced this game.</p>
                    <p><b>Formula</b>: (0.75 * x ^ 0.35), where x is mana produced this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualBindings.png" align="middle"> Spiritual Bindings</b></p>
                    <p><b>Cost</b>: 1 DQig (1e159)</p>
                    <p><b>Effect</b>: Increase assistants based on time spent offline.</p>
                    <p><b>Formula</b>: (0.65 * x ^ 0.35), where x is time spent offline this game in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WildSurge.png" align="middle"> Wild Surge</b></p>
                    <p><b>Cost</b>: 10 DQig (1e160)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
                    <p><b>Formula</b>: (0.25 * x ^ 0.75), where x is the duration of your longest spell.</p>
                    <hr>
                    <p><b>Tier 3 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnAlliance.png" align="middle"> Djinn Alliance</b></p>
                    <p><b>Cost</b>: 1 Dd (1e39) Fairy and Demon Coins</p>
                    <p><b>Effect</b>: Unlocks Djinn Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WishingWell.png" align="middle"> Wishing Well</b></p>
                    <p><b>Cost</b>: 10 TQig (1e163)</p>
                    <p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
                    <p><b>Formula</b>: (0.045 * x ^ 0.45), where x is amount of assistants you own..</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FlashyStorm.png" align="middle"> Flashy Storm</b></p>
                    <p><b>Cost</b>: 100 TQig (1e164)</p>
                    <p><b>Effect</b>: Increase the production of even-tier buildings on odd days of the month, odd-tier buildings on even days.</p>
                    <p><b>Note</b>: The bonus is based on assistants owned.</p>
                    <p><b>Formula</b>: (0.125 * x ^ 0.425), where x is assistants owned.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ManaCreatures.png" align="middle"> Mana Creatures</b></p>
                    <p><b>Cost</b>: 1 QaQig (1e165)</p>
                    <p><b>Effect</b>: Increase assistants based on the highest mana produced in this Reincarnation.</p>
                    <p><b>Formula</b>: (2 * log10(1 + x) ^ 2), where x is highest mana produced in a single game this reincarnation.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnHeritage.png" align="middle"> Djinn Heritage</b></p>
                    <p><b>Cost</b>: 1 Td (1e42) Fairy and Demon Coins</p>
                    <p><b>Effect</b>: Increase the production of Unique Buildings based on Limited Wish activity time in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.3 * x ^ 0.65), where x is Limited Wish activity time in this Reincarnation.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUnion.png" align="middle"> Djinn Union</b></p>
                    <p><b>Requirements</b>: R130</p>
                    <p><b>Cost</b>: 1 Qad (1e45) Fairy and Demon Coins</p>
                    <p><b>Effect</b>: Maelstrom bonuses scale faster.</p>
                    <p><b>Effect</b>: Unlocks Djinn Upgrades</p>
                    <p><b>Formula</b>: + 1.25 multiplier to exponent of maelstrom formulas.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WishesComeTrue.png" align="middle"> Wishes Come True</b></p>
                    <p><b>Requirements</b>: Djinn Union</p>
                    <p><b>Cost</b>: 1 QiQig (1e168) </p>
                    <p><b>Effect</b>: Increase the production of Unique Buildings based on Limited Wish activity time in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.35 * x ^ 0.75), where x is Limited Wish activity time in this Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BluePowder.png" align="middle"> Blue Powder</b></p>
                    <p><b>Requirements</b>: Djinn Union</p>
                    <p><b>Cost</b>: 10 QiQig (1e169) </p>
                    <p><b>Effect</b>: Increase mana regeneration based on Royal Exchanges made.</p>
                    <p><b>Formula</b>: (0.3 * x ^ 0.8), where x is Royal Exchanges made.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AcademicProdigy.png" align="middle"> Academic Prodigy</b></p>
                    <p><b>Requirements</b>: Djinn Union</p>
                    <p><b>Cost</b>: 100 QiQig (1e170) </p>
                    <p><b>Effect</b>: Tax Collections are worth more seconds based on trophies unlocked.</p>
                    <p><b>Formula</b>: (5 * x ^ 0.5), where x is trophies unlocked.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersChampion.png" align="middle"> Makers Champion</b></p>
                    <p><b>Requirement</b>: R125+, 12 faction upgrades (this includes faction treaty)</p>
                    <br/>
                    <p><b>Makers (MK)</b></p>
                    <p><b>Alignment</b>: (Balance)</p>
                    <p><b>Faction spell</b>: Infinite Spiral</p>
                    <p><b>Effect</b>: Increase assistants based on Maximum Mana.</p>
                    <p><b>Formula</b>: (0.045 * x ^ 0.45), where x is Maximum Mana.</p>
                    <br/>
                    <p><b>Effect</b>: Increase max mana based on FC chance.</p>
                    <p><b>Formula</b>: (1.65 * log10(1 + x) ^ 1.65), where x is FC chance.</p>
                    <br/>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
                    <p><b>Formula</b>: (1.35 * x ^ (0.5 + 0.0025 * (y + z))), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <hr>
                    <p><b>Unlock Requirements</b>: First, Second, and Third Stone Fragment</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FirstStoneFragment.png" align="middle"> First Stone Fragment</b></p>
                    <p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Elf</p>
                    <p><b>Chance</b>: (log10(1 + x) ^ 3) / 20000 (20K))%, where x is clicks this game</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SecondStoneFragment.png" align="middle"> Second Stone Fragment</b></p>
                    <p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Druid</p>
                    <p><b>Chance</b>: (x / 20000000 (20M))%, where x is amount of buildings.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ThirdStoneFragment.png" align="middle"> Third Stone Fragment</b></p>
                    <p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
                    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Goblin</p>
                    <p><b>Chance</b>: (log10(1 + x) ^ 3) / 125000 (125K))%, where x is Tax Collections this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersMask.png" align="middle"> Makers Mask</b></p>
                    <p><b>Requirement</b>: Find all 3 Stone Fragments.</p>
                    <p><b>Cost</b>: 10 Dqag (1e130)</p>
                    <p><b>Effect</b>: Increase the production of Non-Unique buidings by 10000%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersQuest.png" align="middle"> Makers Quest</b></p>
                    <p><b>Requirements</b>: Collect all 3 Stone Fragments and accumulate 2 days of All Creation activity time in this game.</p>
                    <p><b>Cost</b>: 1 Ocqag (1e147)</p>
                    <p><b>Effect</b>: Unlocks Makers Faction</p>
                    <hr>
                    <p><b>Tier 1 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersTradeTreaty.png" align="middle"> Makers Trade Treaty</b></p>
                    <p><b>Description</b>: The legendary old race which is said to have created the world, their watchful eye aims to keep all forces in check. Affiliating with them will increase your ability to dominate all your resources.</p>
                    <p><b>Requirements</b>: Vanilla and Prestige Union</p>
                    <p><b>Cost</b>: 1 Dc (1e33) Elven and Goblin Coins</p>
                    <p><b>Effect</b>: Unlocks Makers Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HandoftheMakers.png" align="middle"> Hand of the Makers</b></p>
                    <p><b>Cost</b>: 1 NoQag (1e150)</p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
                    <p><b>Formula</b>: (3.5 * log10(1 + x) ^ 2), where x is clicks made in this Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicalShards.png" align="middle"> Magical Shards</b></p>
                    <p><b>Cost</b>: 10 NoQag (1e151)</p>
                    <p><b>Effect</b>: Increase mana regeneration based on artifacts found.(Multiplicatively)</p>
                    <p><b>Formula</b>: (x ^ 0.95), where x is artifacts found.</p>
                    <br>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteImprovements.png" align="middle"> Infinite Improvements</b></p>
                    <p><b>Cost</b>: 100 NoQag (1e152)</p>
                    <p><b>Effect</b>: Increase the production of Unique buildings based on time spent as Balance.</p>
                    <p><b>Formula</b>: (0.3 * x ^ 0.7), where x is time spent as balance this R in seconds.</p>
                    <hr>
                    <p><b>Tier 2 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersFriendshipPact.png" align="middle"> Makers Friendship Pact</b></p>
                    <p><b>Cost</b>: 1 UD (1e36) Elven and Goblin Coins</p>
                    <p><b>Effect</b>: Unlocks Makers Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EverlastingMaterials.png" align="middle"> Everlasting Materials</b></p>
                    <p><b>Cost</b>: 100 UQig (1e158)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.15 * x ^ 0.7), where x is highest amount of buildings built this Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TreasureMosaic.png" align="middle"> Treasure Mosaic</b></p>
                    <p><b>Cost</b>: 1 DQig (1e159)</p>
                    <p><b>Effect</b>: Additionally increase Maximum Mana based on Faction Coins found in this game.(additively)</p>
                    <p><b>Formula</b>: (27.5 * log10(1 + x) ^ 2.75), where x is Faction Coins found in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArtofCommerce.png" align="middle"> Art of Commerce</b></p>
                    <p><b>Cost</b>: 10 DQig (1e160)</p>
                    <p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on their quantity.</p>
                    <p><b>Formula</b>: (0.2 * x ^ 0.65), where x is Royal Exchange quantity.</p>
                    <hr>
                    <p><b>Tier 3 Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersAlliance.png" align="middle"> Makers Alliance</b></p>
                    <p><b>Cost</b>: 1 Dd (1e39) Elven and Goblin Coins</p>
                    <p><b>Effect</b>: Unlocks Makers Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StoneServants.png" align="middle"> Stonecarving</b></p>
                    <p><b>Cost</b>: 10 TQig (1e163)</p>
                    <p><b>Effect</b>: Increase assistants based on excavations made in this Reincarnation, including resets.</p>
                    <p><b>Formula</b>: (0.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PastTrade.png" align="middle"> Past Trade</b></p>
                    <p><b>Cost</b>: 100 TQig (1e164)</p>
                    <p><b>Effect</b>: Remove 1 Ascension penalty from Royal Exchange Overall Bonus.</p>
                    <p><b>Note</b>: Stacks with E1225 for no A-nerf.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StructuralStability.png" align="middle"> Structural Stability</b></p>
                    <p><b>Cost</b>: 1 QaQig (1e165)</p>
                    <p><b>Effect</b>: Increase the production of building tiers directly above or below Unique Buildings based on spells cast in this game.</p>
                    <p><b>Formula</b>: (0.1 * x ^ 0.375), where x spells cast in this game.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersHeritage.png" align="middle"> Makers Heritage</b></p>
                    <p><b>Cost</b>: 1 Qid (1e48) Elven and Goblin Coins</p>
                    <p><b>Effect</b>: Increase maximum mana based on Tax Collections cast in this game.</p>
                    <p><b>Formula</b>: (2.2 * log10(1 + x) ^ 1.8), where x is Tax Collections cast this game.</p>
                    <hr>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUnion.png" align="middle"> Makers Union</b></p>
                    <p><b>Requirements</b>: R130</p>
                    <p><b>Cost</b>: 1 Qad (1e45) Elven and Goblin Coins</p>
                    <p><b>Effect</b>: All Creation is based on highest mana regeneration rate this reincarnation.</p>
                    <p><b>Effect</b>: Unlocks Makers Upgrades</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ValuableAntiquity.png" align="middle"> Valuable Antiquity</b></p>
                    <p><b>Requirements</b>: Makers Union</p>
                    <p><b>Cost</b>: 1 QiQig (1e168) </p>
                    <p><b>Effect</b>: Artifacts count more based on time spent in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.5 * x ^ 0.5), where x is time spent this Reincarnation.(in seconds)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BedrockFoundations.png" align="middle"> Bedrock Foundations</b></p>
                    <p><b>Requirements</b>: Makers Union</p>
                    <p><b>Cost</b>: 10 QiQig (1e169) </p>
                    <p><b>Effect</b>: Increase the base production of all buildings by 1000 per building tier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble</b></p>
                    <p><b>Requirements</b>: Makers Union</p>
                    <p><b>Cost</b>: 100 QiQig (1e170) </p>
                    <p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
                    <p><b>Formula</b>: (4 * ln(x) ^ 4), where x is clicks made this Reincarnation.</p>
                    <hr>
                    <p><b>New Trophies</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MadMasksSecretTrophy.png" align="middle"> MAD Masks (Secret Trophy)</b></p>
                    <p><b>Requirement</b>: Find all fragments of the Makers, Archon and Djinn masks.</p>
                    <p><b>Effect</b>: Gives upgrade with same name.</p>
                    <p><b>Upgrade Cost</b>: 1 SpQag (1.e144)</p>
                    <p><b>Upgrade Effect</b>: Increase the production of all buildings based on the highest amount of excavations made in a single Reincarnation.</p>
                    <p><b>Formula</b>: (1.5 * x ^ 0.6), where x is highest amount of excavations made in a single Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandmasterGrinder.png" align="middle"> Grandmaster Grinder</b></p>
                    <p><b>Requirement</b>: Build 300000 buildings in a single game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/1SeptendecillionFactionCoins.png" align="middle"> 1 Septendecillion Faction Coins</b></p>
                    <p><b>Requirement</b>: Find 1 Spd (1e54) Faction Coins in a single game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AssistantDimension.png" align="middle"> Assistant Dimension</b></p>
                    <p><b>Requirement</b>: Have 5 B (5e9) Assistants.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AssistantMultiverse.png" align="middle"> Assistant Multiverse</b></p>
                    <p><b>Requirement</b>: Have 5 T (5e12) Assistants.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/75Artifacts.png" align="middle"> 75 Artifacts</b></p>
                    <p><b>Requirement</b>: Find 75 artifacts.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/125Reincarnations.png" align="middle"> 125 Reincarnations</b></p>
                    <p><b>Requirement</b>: Reincarnations 125 times.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ManaFalls.png" align="middle"> Mana Falls</b></p>
                    <p><b>Requirement</b>: R100+, Produce 200 Qi (2e20) mana.</p>
                    <p><b>Effect</b>: Gives upgrade with same name.</p>
                    <p><b>Upgrade Cost</b>: 10 Dqag (1e130)</p>
                    <p><b>Upgrade Effect</b>: Increase mana regeneration by 10.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SpellGrinder.png" align="middle"> Spell Grinder</b></p>
                    <p><b>Requirement</b>: Cast 10 Qa (1e16) spells in a single game.</p>
                    <br/>
                    <p><b>25 Building Trophies</b></p>
                    <p><b>Requirement</b>: 20000 of each building for each trophy.</p>
                    <hr>
                    <p><b>Changes</b></p>
                    <p><b>BuyMax</b></p>
                    <p>No longer capped at 20000, now buys what ever you can afford.</p>
                    <hr>
                    <p><b>Drow Challenge Final Reward</b></p>
                    <p><b>Versatile Combo</b></p>
                    <p>Increase Combo Strike counter based on the amount of spells cast in this game, not including Tax Collection.</p>
                    <p><b>Old</b> New Combo Strike Counter Formula: x + (y ^ 0.7), where x is your Combo Strike cast count and y is every other spell (except tax collection) cast count.</p>
                    <p><b>New</b> New Combo Strike Counter Formula: x + y, where x is your Combo Strike cast count and y is every other spell (except tax collection and generic) cast count.</p>
                    <p><b>Effect</b>: Also increases offline spell cast amount by multiplicatively based on your offline mana regeneration (10 * log10(1 + x)).</p>
                    <hr>
                    <p><b>Fairy</b></p>
                    <p><b>Bubble Swarm (FR10)</b> Formula fix , ~10% nerf</p>
                    <hr>
                    <p><b>Elven</b></p>
                    <p><b>Elven Union</b></p>
                    <p><b>Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (2 * ln(1 + x) ^ 2.5), where x is faction coins found in this Reincarnation.</p>
                    <p><b>New Formula</b>: (2.85 * ln(1 + x) ^ 2.85), where x is faction coins found in this Reincarnation.</p>
                    <br/>
                    <p><b>Wooden Dice (EL10)</b></p>
                    <p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
                    <p><b>Elven Luck Formula</b>: (x ^ 0.3), where x is Arboreal Cities count.</p>
                    <p><b>Old Production Formula</b>: (8 * x ^ 0.8), where x is Arboreal Cities count.</p>
                    <p><b>New Production Formula</b>: (32 * x ^ 0.8), where x is Arboreal Cities count.</p>
                    <p><b>Faction Coin Formula</b>: (1.45 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <br/>
                    <p><b>Elven Discipline (EL12)</b></p>
                    <p><b>Effect</b>: Increase mana regeneration additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
                    <p><b>Old Formula</b>: (100 * ln(1 + x) ^ 1.45), where x is Faction Coins found in this game.(additively).</p>
                    <p><b>New Formula</b>: (100 * ln(1 + x) ^ 1.35), where x is Faction Coins found in this game.(additively).</p>
                    <hr>
                    <p><b>Angel</b></p>
                    <p><b>Advanced Angelic Heritage</b></p>
                    <p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast in this game.</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ 0.25), where x is amount of spells cast in this game</p>
                    <p><b>New Formula</b>: (5 * x ^ 0.25), where x is amount of spells cast in this game</p>
                    <br/>
                    <p><b>Angels Union</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
                    <p><b>Old Formula</b>: (ln(x) ^ 1.8 + ln(y) ^ 2.1), where x is mana spent this game and y is mana regeneration.</p>
                    <p><b>New Formula</b>: (ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
                    <br/>
                    <p><b>Angels Perk 2</b></p>
                    <p><b>Challenge</b></p>
                    <p><b>Was</b>: Play 8 hours straight with at least 1 spell active.</p>
                    <p><b>Now</b>: Play 2 hours straight with at least 1 spell active.</p>
                    <br/>
                    <p><b>Angelic Fortitude (AN11)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the sum of all your spells' activity time this R.</p>
                    <p><b>Old Formula</b>: (0.035 * x ^ 0.65), where x is seconds in current spells.</p>
                    <p><b>New Formula</b>: (0.04 * x ^ 0.675), where x is seconds in current spells.</p>
                    <br/>
                    <p><b>Seraphim Feathers (AN12)</b></p>
                    <p><b>Old Effect</b>: Increase mana regeneration by 60%.</p>
                    <p><b>New Effect</b>: Increase mana regeneration by 80%.</p>
                    <hr>
                    <p><b>Goblin</b></p>
                    <p><b>Goblin Perk 3</b></p>
                    <p><b>Old Effect</b>: Unique Building's base production increased by 3% for every 650 Unique Buildings.</p>
                    <p><b>New Effect</b>: Unique Building's base production increased by 25% for every 650 Unique Buildings.</p>
                    <br/>
                    <p><b>Goblin Perk 4</b></p>
                    <p><b>Added Effect</b>: Also makes Tax Collection casts count 100% more.</p>
                    <br/>
                    <p><b>Goblin Lineage</b></p>
                    <p><b>Old Effect</b>: Increase production bonus from Gems by a multiplicative 2.5% for every level.</p>
                    <p><b>New Effect</b>: Increase production bonus from Gems by a multiplicative 6.5% for every level.</p>
                    <hr>
                    <p><b>Undead</b></p>
                    <p><b>Flesh Servants (UD10)</b></p>
                    <p><b>Effect</b>: Increase assistants based on the amount of Flesh Workshops you own.</p>
                    <p><b>Old Formula</b>: (1.2 * x ^ 0.65), where x is amount of Flesh Workshop owned.</p>
                    <p><b>New Formula</b>: (1.25 * x ^ 0.7), where x is amount of Flesh Workshop owned.</p>
                    <br/>
                    <p><b>Zombie Apocalypse (UD11)</b></p>
                    <p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
                    <p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is offline time this R.</p>
                    <p><b>New Formula</b>: (0.72 * x ^ 0.72), where x is offline time this R.</p>
                    <br/>
                    <p><b>Eternal Servitude (UD12)</b></p>
                    <p><b>Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
                    <p><b>Old Formula</b>: (10000 + 75 * (x / 1800) ^ 2), where x is seconds this game.</p>
                    <p><b>New Formula</b>: (10000 + 0.75 * x ^ 1.5), where x is seconds this game.</p>
                    <hr>
                    <p><b>Demon</b></p>
                    <p><b>Demon Perk 2</b></p>
                    <p><b>Old Challenge</b>: 10 days of HFB activity time (This R).</p>
                    <p><b>New Challenge</b>: 5 days of HFB activity time (This R).</p>
                    <br/>
                    <p><b>Demon Union</b></p>
                    <p><b>Effect</b>: 1% of all Non-Evil spells cast in this game count as Evil.</p>
                    <p><b>Added Effect</b>: Trophies count 100% more.</p>
                    <hr>
                    <p><b>Titan</b></p>
                    <p><b>Advanced Titan Heritage</b></p>
                    <p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
                    <p><b>Old Formula</b>: (0.05 * ln(x) ^ 1.5), where x is Royal Exchanges purchased.</p>
                    <p><b>New Formula</b>: (0.2 * ln(x) ^ 1.5), where x is Royal Exchanges purchased.</p>
                    <br/>
                    <p><b>Titan Union</b></p>
                    <p><b>Old Effect</b>: Multiplicatively increase Faction Coin find chance by 5% per hour spent in this game.</p>
                    <p><b>New Effect</b>: Multiplicatively increase Faction Coin find chance based on time spent in this game.</p>
                    <p><b>New Formula</b>: 50 * (x / 3600) ^ 0.85), where x is time spent in this game.(per hours).</p>
                    <br/>
                    <p><b>Added Effect</b>: Also increase Maximum Mana based on time spent in this game.</p>
                    <p><b>Formula</b>: (20 * x ^ 0.75), where x is time spent in this game.(in seconds)</p>
                    <br/>
                    <p><b>Giant Market (TT10)</b></p>
                    <p><b>Effect</b>: Increase Royal Exchanges count based on the amount of Mountain Palaces you own.</p>
                    <p><b>Old Formula</b>: (1.5 * x ^ 0.5), where x is amount of Mountain Palaces owned.</p>
                    <p><b>New Formula</b>: (1.25 * x ^ 0.75), where x is amount of Mountain Palaces owned.</p>
                    <br/>
                    <p><b>Colossus Kingdom (TT12)</b></p>
                    <p><b>Effect</b>: Additively gain assistants based on total time spent as Order.</p>
                    <p><b>Old Formula</b>: (20 * x ^ 0.7), where x is seconds this R.</p>
                    <p><b>New Formula</b>: (25 * x ^ 0.7), where x is seconds this R.</p>
                    <hr>
                    <p><b>Druid</b></p>
                    <p><b>Druid Bloodline</b></p>
                    <p><b>Effect</b>: Increase mana regeneration based on maximum mana.</p>
                    <p><b>Old Formula</b>: 0.03 * x ^ 0.9, where x is your maximum mana.</p>
                    <p><b>New Formula</b>: (0.18 * x ^ 0.65) + (0.0018 * log10(x) ^ 8), where x is your maximum mana.</p>
                    <br/>
                    <p><b>Druid Set</b></p>
                    <p><b>Effect</b>: Increase production of all buildings based on their quantity.</p>
                    <p><b>Added</b>: Now considers building count upgrades.</p>
                    <p><b>Old Formula</b>: (0.75 * x ^ 0.75), where x is building count.</p>
                    <p><b>New Formula</b>: (0.8 * x ^ 0.7), where x is building count.</p>
                    <br/>
                    <p><b>Druid Perk 4</b></p>
                    <p><b>Old Effect</b>: Increase Grand Balance duration based on assistants owned.</p>
                    <p><b>Old Formula</b>: (0.5 * x ^ 0.5), where x is assistants owned.</p>
                    <p><b>Old Effect</b>: Also increase the production of all buildings while Grand Balance is active by 10% every 5 minutes of its duration.</p>
                    <p><b>Old Formula</b>: ((5 * floor(x / 300)) ^ T), where x is Grand Balance duration in seconds, and T is Grand Balance tier.</p>
                    <p><b>New Effect</b>: Grand Balance lasts longer based on the amount of assistants you own.</p>
                    <p><b>New Formula</b>: 2.25 * ln(1 + x) ^ 2.25, where x is amount of assistants you own.</p>
                    <p><b>New Effect</b>: Also, while Grand Balance is active, increase the production of its targets based on Grand Balance duration.</p>
                    <p><b>New Formula</b>: (x ^ 0.5) ^ (1 + 0.01 * y), where x is spell duration in seconds and y is amount of grand balance targets</p>
                    <hr>
                    <p><b>Faceless</b></p>
                    <p><b>Forbidden Language (FC11)</b></p>
                    <p><b>Effect</b>: Increase spell durations based on the amount of Reincarnations made.</p>
                    <p><b>Old Formula</b>: (x), where x is Reincarnations made.</p>
                    <p><b>New Formula</b>: (x ^ 1.1), where x is Reincarnations made.</p>
                    <br/>
                    <p><b>Faceless Perk 3</b></p>
                    <p>Ascension penalties removed</p>
                    <hr>
                    <p><b>Drow</b></p>
                    <p><b>Drow Challenge 4</b></p>
                    <p><b>Old Effect</b>: Increase your Offline Time (This Game) by 1 second for every 10 spells cast in this game.</p>
                    <p><b>Old Formula</b>: (0.1 * x) where x is every 10 spells cast in this game.</p>
                    <p><b>New Effect</b>: Increase your Offline Time (This Game) based on spells cast in this game.</p>
                    <p><b>New Formula</b>: (0.2 * x ^ 0.8) where x is spells cast in this game.</p>
                    <br/>
                    <p><b>Drow Set</b></p>
                    <p><b>Old Effect</b>: Increase offline production based on evil spells cast (this R).</p>
                    <p><b>Old Formula</b>: (0.75 * x ^ 0.75), where x is total evil spells cast (this R).</p>
                    <p><b>New Effect</b>: Increase Mana Regeneration based on Evil spells cast (this R). (additive)</p>
                    <p><b>New Formula</b>: (50 * x ^ 0.5), where x is total evil spells cast (this R).</p>
                    <hr>
                    <p><b>Research</b></p>
                    <p><b>S50 - Conjuration</b></p>
                    <p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
                    <p><b>Effect</b>: Also increases offline spell cast amount by multiplicatively by 150%.</p>
                    <p><b>Old Formula</b>: floor(x /650), where x is the number of Goblin Banks you own.</p>
                    <p><b>New Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.</p>
                    <br/>
                    <p><b>S305 - Mesmerization</b></p>
                    <p><b>Old Requirement</b>: 5 days as Faceless (Total across all R)</p>
                    <p><b>New Requirement</b>: 2 days as Faceless (Total across all R)</p>
                    <br/>
                    <p><b>S400 - Capacity</b></p>
                    <p><b>Effect</b>: Increase maximum mana based on the highest amount of spells cast in a single game.</p>
                    <p><b>Old Formula</b>: (35 * x ^ 0.35), where x is your Spell Cast (Max) stat.</p>
                    <p><b>New Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat.</p>
                    <br/>
                    <p><b>C305 - Golemcraft</b></p>
                    <p><b>Old Requirement</b>: 5 days as Titans (Total across all R)</p>
                    <p><b>New Requirement</b>: 2 days as Titans (Total across all R)</p>
                    <p><b>Effect</b>: Gain assistants based on time spent offline in this Reincarnation.(in hours).</p>
                    <p><b>Old Formula</b>: (2 * (x / 3600) * 0.5), where x is your Time Spent Offline (this R).</p>
                    <p><b>New Formula</b>: (0.15 * (x / 60) ^ 0.95), where x is your Time Spent Offline(this R)..</p>
                    <br/>
                    <p><b>A305 - Engraving</b></p>
                    <p><b>Old Requirement</b>: 5 days as Druids (Total across all R)</p>
                    <p><b>New Requirement</b>: 2 days as Druids (Total across all R)</p>
                    <br/>
                    <p><b>W50 - Exertion</b></p>
                    <p><b>Old Requirement</b>: 2 days of Evil Play Time this R</p>
                    <p><b>New Requirement</b>: 1 day of Evil Play Time this R</p>
                    <p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.</p>
                    <p><b>Old Formula</b>: (floor(1.5 * x ^ 1.05))% where x is the number of Undercities you own.</p>
                    <p><b>New Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.</p>
                    <br/>
                    <p><b>Dragon UB2</b></p>
                    <p><b>Dragon Pasture</b></p>
                    <p><b>Effect</b>: Increase production based on your max mana.</p>
                    <p><b>Old Formula</b>: (0.65 * x ^ 0.65), where x is your max mana.</p>
                    <p><b>New Formula</b>: (0.63 * x ^ 0.63), where x is your max mana.</p>
                    <hr>
                    <p><b>Spells</b></p>
                    <p><b>Reap Interests</b></p>
                    <p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.</p>
                    <p><b>Old Formula</b>: (y ^ (1 + 0.2 * Log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
                    <p><b>New Formula</b>: (y ^ (1 + 0.24 * log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
                    <br/>
                    <p><b>Temporal Flux</b></p>
                    <p><b>Effect</b>: Increase Unique building production by time spent this game.</p>
                    <p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
                    <p><b>Old Formula</b>: (3.2 * (x/60) ^ 0.82))%, where x is time in seconds this game.</p>
                    <p><b>New Formula</b>: (3.5 * (x / 60) ^ 0.825)%, where x is time in seconds this game.</p>
                    <br/>
                    <p><b>Maelstrom</b></p>
                    <p><b>Old Effect</b>: Increase the production of three random buildings based on these stats in this game, chosen at random: mana produced, clicks made, Faction Coin found or amount of assistants.</p>
                    <p><b>New Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants</p>
                    <p><b>Mana Formula</b>: (0.02 * (log10(1+x)) ^ 5%, where x is mana produced this game.</p>
                    <p><b>Old Clicks Formula</b>: (0.075 * (log10(1 + x)) ^ 2.75)%, where x is clicks this game.</p>
                    <p><b>New Trophy Formula</b>: (2.5 * x ^ 0.9), where x is trophies unlocked.</p>
                    <p><b>Faction Coins Formula</b>: (0.01 * (log10(1+x)) ^ 4)%, where x is faction coins found this game.</p>
                    <p><b>Assistants Formula</b>: (0.25 * (log10(1+x)) ^ 5)%, where x is amount of assistants.</p>
                    <br/>
                    <p><b>All Creation</b></p>
                    <p><b>Effect</b>: Increase production of all buildings based on mana regeneration rate.</p>
                    <p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your mana regeneration rate.</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ 0.44), where x is mana per seconds.</p>
                    <p><b>New Formula</b>: (0.15 * ln(x) ^ 3.5 + 0.9 * x ^ 0.27), where x is mana per seconds.</p>
                    <hr>
                    <p><b>Upgrades</b></p>
                    <p><b>Excavated Mirage</b></p>
                    <p><b>Effect</b>: Increase Faction Coin find chance by a multiplicative 1000%.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance by a multiplicative 1500%.</p>
                    <br/>
                    <p><b>Sunforce</b></p>
                    <p><b>Effect</b>: multiplicative increase Faction Coin find chance based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: floor(0.25 * X ^ (0.4 + 0.05 * A), where x is your assistants stat and A is Ascension count.</p>
                    <p><b>New Formula</b>: floor(0.25 * ln(x) ^ (2 + 0.25 * A)), where x is your assistants stat and A is Ascension count.</p>
                    <br/>
                    <p><b>Versatile Combo</b></p>
                    <p><b>Old Formula</b>: (x ^ 0.7), where x is spells cast this game</p>
                    <p><b>New Formula</b>: (x), where x is spells cast this game (No generic casts)</p>
                    <br/>
                    <p><b>Know Your Enemy, Part I (KYE1)</b></p>
                    <p><b>Effect</b>: Increases the production of all buildings based on time spent as Non-Mercenary. ("Time allied with..." in the stats)</p>
                    <p><b>Old Formula</b>: (0.5 * x ^ 0.75), where x is amount of time spent as non-mercenary factions (in seconds).</p>
                    <p><b>New Formula</b>: (0.75 * x ^ 0.6), where x is amount of time spent as non-mercenary factions (in seconds).</p>
                    <br/>
                    <p><b>Autocasting</b></p>
                    <p><b>Automatic Casting</b></p>
                    <p><b>Old Effect</b>: While you have at least 1 spell in autocasting mode, your mana regen rate is reduced by 50%.</p>
                    <p><b>New Effect</b>: While you have at least 1 spell in autocasting mode.(no longer reduces mana regen)</p>
                    <br/>
                    <p><b>Improved Autocasting</b></p>
                    <p><b>Old Effect</b>: Reduces mana regeneration penalty to Autocast to -25%.</p>
                    <p><b>New Effect</b>: Increases mana regeneration by 5%.</p>
                    <br/>
                    <p><b>Masterful Autocasting</b></p>
                    <p><b>Old Effect</b>: Totally removes mana regeneration penalty from Autocast.</p>
                    <p><b>New Effect</b>: Increases mana regeneration by 10%.</p>
                    <br/>
                    <p><b>Helden Sterben Nicht</b></p>
                    <p><b>Old Effect</b>: Increase mana regeneration and maximum mana by 15%.</p>
                    <p><b>New Effect</b>: Increase mana regeneration and maximum mana by 10%.</p>
                    <br/>
                    <p><b>Prismatic Mana</b></p>
                    <p><b>Old Effect</b>: 35% Mana Regeneration (multiplicative).</p>
                    <p><b>New Effect</b>: 25% Mana Regeneration (multiplicative).</p>
                    <br/>
                    <p><b>Mana Matrix</b></p>
                    <p><b>Old Effect</b>: Increase maximum mana by 10%.</p>
                    <p><b>New Effect</b>: Increase maximum mana by 15%.</p>
                </div>
            </div>
        </div>
        <?php include "../scripts/footer.html"; ?>
