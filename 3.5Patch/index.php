<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>3.5 Patches/Updates</h6>
        <br/>
        <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.5.2 May 14, 2019</a></b></p>
                <div class="autohide">
                    <p><b>3.5.2 May 14, 2019</b></p>
                    <p><b>Artifact Sets</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"> Fairy Set</b></p>
                    <p><b>Effect</b>: Increase Farm, Inn and Blacksmith production based on number of assistants owned.</p>
                    <p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is number of assistants owned.</p>
                    <p><b>New Formula</b>: (0.65*x^0.65), where x is number of assistants owned.</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/UndeadSet.png align=middle><b> Undead Set</b></p>
                    <p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
                    <p><b>Old Formula</b>: (9 * ln(1 + x) ^3), where x is offline Multiplier.</p>
                    <p><b>New Formula</b>: (6 * ln(1 + x) ^3), where x is offline Multiplier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"> Faceless Set</b></p>
                    <p><b>Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
                    <p><b>New Formula</b>: (2 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"> Dwarven Set</b></p>
                    <p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
                    <p><b>Old Formula</b>: (2.25 * x ^ 0.75), where x is Royal Exchange bonus.</p>
                    <p><b>New Formula</b>: (2 * x ^ 0.7), where x is Royal Exchange bonus.</p>
                    <hr>
                    <p><b>Faction Upgrades</b></p>
                    <p><b>Undead</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/EternalServitude.png" alt="Eternal Servitude" align="middle"> <b>Eternal Servitude (UD12)</b></p>
                    <p><b>Effect</b>: Increase base production of Undercity by +10000, and then increase this effect based on time spent in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (10000 + 1.3 * x ^ 1.3), where x is time spent this Reincarnation.</p>
                    <p><b>New Formula</b>: (10000 + x ^ 1.05), where x is time spent in this Reincarnation.</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" alt="Lunar Cycle" align="middle"> <b>Lunar Cycle (DD11)</b></p>
                    <p><b>Effect</b>: Increase Maximum Mana additively based on time spent online in this game.</p>
                    <p><b>Old Online Formula</b>: (50 * x ^ 0.95), where x is time spent online in this game.</p>
                    <p><b>New Online Formula</b>: (50 * x ^ 0.85), where x is time spent online in this game.</p>
                    <p><b>Effect</b>: Increase Maximum Mana multiplicatively based on time spent offline in this game.</p>
                    <p><b>Offline Formula</b>: (0.5 * x ^ 0.5), where x is time spent offline in this game.</p>
                    <br/>
                    <p><b>Dwarf</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/OverwatchFactionUpgrade.png align="middle"> Overwatch (DN9)</b></p>
                    <p><b>Old Effect</b>: Your production is increased by 600% so long as there are mouse movements. Clicking and casting are not considered as movements.</p>
                    <p><b>Old Effect</b>: This bonus falls off by 1% per second, down to 0 while inactive.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
                    <p><b>Formula</b>: (500 + 35 * x ^ 0.35), where x is the duration of your longest spell.</p>
                    <br/>
                    <p><b>Drow</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UnderworldTyrannyFactionUpgrade.png align="middle"> Underworld Tyranny (DW1)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on your total time spent being Evil in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (x ^ 0.7), where x is your Time Spent Being Evil (Total) stat in seconds.</p>
                    <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is your Time Spent Being Evil (Total) stat in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ManaAddictsFactionUpgrade.png align="middle"> Mana Addicts (DW4)</b></p>
                    <p><b>Effect</b>: Mana regeneration increases over time.</p>
                    <p><b>Old Formula</b>: (2.5 + 0.25 * x ^ 0.55), where x is your Play Time (This Game) stat in seconds.</p>
                    <p><b>New Formula</b>: (2.5 + 0.25 * x ^ 0.5), where x is your Play Time (This Game) stat in seconds.</p>
                    <br/>
                    <p><b>Djinn</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WishesComeTrue.png" align="middle"> Wishes Come True (DJ10)</b></p>
                    <p><b>Requirements</b>: Djinn Union</p>
                    <p><b>Cost</b>: 1 QiQig (1e168) </p>
                    <p><b>Old Effect</b>: Increase the production of Unique Buildings based on Limited Wish activity time in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.35 * x ^ 0.75), where x is Limited Wish activity time in this Reincarnation.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on Limited Wish activity time in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.35 * x ^ 0.75), where x is Limited Wish activity time in this Reincarnation.</p>
                    <hr>
                    <p><b>Spells</b></p>
                    <p>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png" align="middle"> <b>Chrono Loading</b></p>
                    <p><b>Old Effect</b>: A fraction of Precognition activity time in this Reincarnation is added to time spent in this game.</p>
                    <p><b>Old Formula</b>: (0.85 * x ^ 0.85), where x is Precognition activity time in this Reincarnation.</p>
                    <p><b>New Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
                    <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is Precognition duration.</p>
                    <br/>
                    <p><b>Mercenary</b>: Tax Collection</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefitsSpell.png" alt="Round Table" align="middle"> <b>Mercenary Good Alignment</b></p>
                    <p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 36 tiers.</p>
                    <p><b>Formula</b>: (120 ^ (0.25 * t)), where t is tier (FC chance multiplier)</p>
                    <p><b>Formula</b>: ((2.20 ^ T) - 1) * 100, multiplicative (production multiplier)</p>
                    <p><b>New Effect added in 3.5</b>: Now adds Tax Collections casts based on its duration and current tier cast.</p>
                    <p><b>New Formula</b>: (10 * x * T), where x is spell duration and T is spell tier</p>
                    <p><b>New Formula</b>: sum formula is (x ^ (0.15 * T)), where x is spell duration and T is spell tier</p>
                    <hr>
                    <p><b>Unique Buildings</b></p>
                    <p><b>Archon</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/NexusUniqueBuilding.png"></p>
                    <p><b>Old Formula</b>: (75 * x ^ 0.75), where x is time spent as Order this R.</p>
                    <p><b>New Formula</b>: (80 * x ^ 0.8), where x is time spent as Order this R.</p>
                    <hr>
                    <p><b>E1225</b> - <b>For</b> Neutral,Dragon - <b>Research Name</b>: Hoarding</p>
                    <p><b>Old Formula</b>: Remove 1 Ascension penalty from Royal Exchange bonus, but reduce their overall production by 90%.</p>
                    <p><b>New Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.</p>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.5 April 15, 2019</a></b></p>
                <div class="autohide">
                    <p><b>V3.5 April 15, 2019</b></p>
                    <p><b>Bloodlines</b>: Now auto unlocked (No longer require 100 upgrades to unlock).</p>
                    <p><b>Currently Bugged</b>: Requires 100 Faction Upgrades purchased. (any 1 faction).</p>
                    <br/>
                    <p><b>Changed autoclick handler</b>: All autoclicks perform only once per second, but they increase click stat and reward as if they clicked X times (depending on the effect). This should greatly reduce lag and screen littering.</p>
                    <p><b>Faceless Unlock</b>: Octopus Shaped Bones now requires 36 hours in this reincarnation instead of this game.</p>
                    <br/>
                    <p><b>Trophies</b></p>
                    <p><b>4 new trophies added</b></p>
                    <p><b>1 Secret Trophy</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FutureLinkinSecretTrophy.png" align="middle"> Future Linkin</b></p>
                    <p><b>Requirements</b>: A2+, Abdicate with at least 150,000 Unique Buildings.</p>
                    <p><b>Cost</b>: 10 Sptg (1e115)</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on time spent in the last game session.</p>
                    <p><b>Formula</b>: (214 + 0.03 * x ^ 0.7), where x is time spent in last game.</p>
                    <p><b>Base</b>: 214%</p>
                    <br/>
                    <p><b>3 Magic Trophies</b></p>
                    <p><b>A2 Spell Upgrade and Trophies</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png" align="middle"> Chrono Loading</b></p>
                    <p><b>Requirements</b>: R125+, Cast Precognition with at least 10 Qi (1e19) mana regeneration.</p>
                    <p><b>Cost</b>: 10 Octg (1e118)</p>
                    <p><b>Effect</b>: A fraction of Precognition activity time in this Reincarnation is added to time spent in this game.</p>
                    <p><b>Formula</b>: (0.85 * x ^ 0.85), where x is Precognition activity time in this Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PersistentEntropySpellUpgrade.png" align="middle"> Persistent Entropy</b></p>
                    <p><b>Requirements</b>: R125+, Cast Limited Wish 100 times within 30 minutes of a new game.</p>
                    <p><b>Cost</b>: 10 Octg (1e118)</p>
                    <p><b>Effect</b>: Also adds 150 casts to Limited wish formula.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityCraterSpellUpgrade.png" align="middle"> Reality Crater</b></p>
                    <p><b>Requirements</b>: R125+, Cast Infinite Spiral with at least 10 excavation resets this game.</p>
                    <p><b>Cost</b>: 10 Octg (1e118)</p>
                    <p><b>Effect</b>: Infinite Spiral also reduces excavation cost multiplier based on assistants owned.</p>
                    <p><b>Formula</b>: (0.001 * log(1 + x)), where x is assistants owned.</p>
                    <br/>
                    <hr>
                    <p><b>1 new Artifact</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PlanetaryForceArtifact.png" align="middle"> Planetary Force</b></p>
                    <p><b>Clue</b>: Try every day for better luck! Missing a day is the same as breaking a mirror, you know.</p>
                    <p><b>Description</b>: Planets aligning seem to affect your realm in different ways...</p>
                    <p><b>Requirements</b>: R100+</p>
                    <p><b>Chance</b>: ((x ^ 2.5) / 5000)%, where x is amount of consecutive days logged in.</p>
                    <p><b>Note</b>: Restarting the game is required to increase the counter</p>
                    <p><b>Effect</b>: Gives upgrade with the same name</p>
                    <p><b>Upgrade Effect</b>: Activates all Sun Force effects at once.</p>
                    <p><b>Upgrade Cost</b>: 100 Qi (1e20)</p>
                    <br/>
                    <hr>
                    <p><b>Unique Buildings for Elite Factions added</b></p>
                    <p><b>Unique Building Quest</b></p>
                    <p><b>Makers</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOriginationQuest.png" align="middle"> Hall of Origination Quest</b></p>
                    <p>Hello, child! Your realm progress looks kinda... obsolete. Would you mind if we help improve your realm with our advanced perks? Please gather more Faction Coins to generate more energy!</p>
                    <p><b>Requirements</b>: R130+, Gather 5 TD (5e42) Faction Coins</p>
                    <p><b>Cost</b>: 1 QaQig (1e165)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOriginationUpgrade.png" align="middle"> Hall of Origination Upgrade</b></p>
                    <p>Upgrade Halls of Legends to Halls of Origination, boosting their production based on assistants owned and unlocking more unique perks for the building.</p>
                    <p><b>Formula</b>: (0.75 * x ^ 0.75), where x is assistants owned.</p>
                    <p><b>Requirements</b>: Hall of Origination Quest.</p>
                    <p><b>Cost</b>: 1 QiQig (1e168)</p>
                    <br/>
                    <p><b>Archon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/NexusQuest.png" align="middle"> Nexus Quest</b></p>
                    <p>Hassar, Ruler. Our kind wants to establish better communications with you. Please build more Wizard Towers/Witch Conclaves/Alchemist Labs to convert.</p>
                    <p><b>Requirements</b>: R130+, Buy 25,000 Wizard Towers/Witch Conclaves/Alchemist Labs.</p>
                    <p><b>Cost</b>: 1 QaQig (1e165)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/NexusUpgrade.png" align="middle"> Nexus Upgrade</b></p>
                    <p>Upgrade Wizard Towers/Witch Conclaves/Alchemist Labs to Nexuses, boosting their production based on time spent as Order and unlocking more unique perks for the building.</p>
                    <p><b>Formula</b>: (75 * x ^ 0.75), where x is time spent as Order this R.</p>
                    <p><b>Requirements</b>: Nexus Quest.</p>
                    <p><b>Cost</b>: 1 QiQig (1e168)</p>
                    <br/>
                    <p><b>Djinn</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PavilionQuest.png" align="middle"> Pavilion Quest</b></p>
                    <p>Greetings. You will have the honor of hosting our people. Cover your realm in Chaos magic for us!</p>
                    <p><b>Requirements</b>: R130+, 5 days of chaos spells this game</p>
                    <p><b>Cost</b>: 1 QaQig (1e165)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PavilionUpgrade.png" align="middle"> Pavilion Upgrade</b></p>
                    <p>Upgrade Orcish Arena/Stone Pillars/Knights Jousts to Pavilions, boosting their production based on spells cast in this Reincarnation and unlocking more unique perks for the building.</p>
                    <p><b>Formula</b>: (10 * x ^ 0.5), where x is spells cast this R.</p>
                    <p><b>Requirements</b>: Pavilion Quest.</p>
                    <p><b>Cost</b>: 1 QiQig (1e168)</p>
                    <br/>
                    <hr>
                    <p><b>Elite Bloodlines added</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonBloodline.png" align="middle"> Archon</b></p>
                    <p><b>Requirements</b>: R130+</p>
                    <p><b>Effect</b>: Gain additional research slots based on time spent this game.</p>
                    <p><b>Formula</b>: (1 + floor(0.5 * ((1 + x / 10800) ^ 0.5 - 1))), where x is time spent this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnBloodline.png" align="middle"> Djinn</b></p>
                    <p><b>Requirements</b>: R130+</p>
                    <p><b>Effect</b>: Gain a new spell that costs 500,000 mana and lasts 1 minute as a fixed duration. Each time you cast it, it activates a vanilla or primary alignment spell at tier 7.</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/CatalystSpell.png"></b></p>
                    <p><b>Note</b></p>
                    <p><b>1</b>. Spell comes with tier bonus.</p>
                    <p><b>2</b>. Choosing this Bloodline or having/buying A400 with Djinn gives you the vanilla spell upgrades that enable the challenge reward when bought.</p>
                    <p><b>3</b>. Cannot cast a spell that is already active</p>
                    <p><b>4</b>. The Spell Pool is 8 for Neutral factions (No Gem Grinder), 7 for Good/Evil (-1 faction and -1 alignment spell)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersBloodline.png" align="middle"> Makers</b></p>
                    <p><b>Requirements</b>: R130+</p>
                    <p><b>Effect</b>: Increase your Set power based on faction coins collected this game.</p>
                    <p><b>Formula</b>: (0.75 * log10(1 + x) ^ 1.5), where x is coins collected this game.</p>
                    <p><b>Note</b> Includes Dwarf 5.</p>
                    <br/>
                    <hr>
                    <p><b>Elite Lineages added</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonLineage.png" align="middle"> Archon Lineage</b></p>
                    <p><b>Requirements</b>: R130+</p>
                    <p><b>Cost</b>: 400 Angel, Undead Royal Exchanges</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance multiplicatively by 25% per level.</p>
                    <br/>
                    <p><b>Level 5</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk1.png" align="middle"> Archon Perk 1</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 5.</p>
                    <p><b>Effect</b>: While using Archon Bloodline, increase production of Elite Unique Buildings based on maximum mana.</p>
                    <p><b>Formula</b>: (0.8 * x ^ 0.8), where x is maximum mana.</p>
                    <br/>
                    <p><b>Level 10</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 10.</p>
                    <p><b>Effect</b>: x50 more Angel and Undead Faction Coin find chance.</p>
                    <br/>
                    <p><b>Level 15</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk2.png" align="middle"> Archon Perk 2</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 15.</p>
                    <p><b>Effect</b>: Unlocks Archon Lineage Challenge.</p>
                    <p><b>Challenge</b>: Have at least 30B (3e10) mana regeneration within 45 seconds of a new run.</p>
                    <p><b>Effect</b>: Unlocks Faction spell. (Precognition).</p>
                    <br/>
                    <p><b>Level 20</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk3.png" align="middle"> Archon Perk 3</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 20.</p>
                    <p><b>Effect</b>: Increase mana regeneration by 3% per 1000 Unique Buildings.</p>
                    <br/>
                    <p><b>Level 30</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk4.png" align="middle"> Archon Perk 4</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 30.</p>
                    <p><b>Effect</b>: Precognition also effects trophies, gems owned and faction coins found.</p>
                    <br/>
                    <p><b>Level 50</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk5.png" align="middle"> Archon Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Unique Buildings count 100% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnLineage.png" align="middle"> Djinn Lineage</b></p>
                    <p><b>Requirements</b>: R130+</p>
                    <p><b>Cost</b>: 400 Fairy, Demon Royal Exchanges</p>
                    <p><b>Effect</b>: Increase production bonus from gems by a multiplicative 8% for every level.</p>
                    <br/>
                    <p><b>Level 5</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk1.png" align="middle"> Djinn Perk 1</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 5.</p>
                    <p><b>Effect</b>: Catalyst casts in this game also increase Limited Wish counter for the purpose of increasing its bonus.</p>
                    <br/>
                    <p><b>Level 10</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 10.</p>
                    <p><b>Effect</b>: x50 more Fairy and Demon Faction Coin find chance.</p>
                    <br/>
                    <p><b>Level 15</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk2.png" align="middle"> Djinn Perk 2</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 15.</p>
                    <p><b>Effect</b>: Unlocks Djinn Lineage Challenge.</p>
                    <p><b>Challenge</b>: Have at least 1B (1e9) assistants within 45 seconds of a new run.</p>
                    <p><b>Effect</b>: Unlocks Faction spell. (Limited Wish).</p>
                    <br/>
                    <p><b>Level 20</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk3.png" align="middle"> Djinn Perk 3</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 20.</p>
                    <p><b>Effect</b>: Activity time for all spells counts 2.5% more for every 1000 Unique Buildings.</p>
                    <br/>
                    <p><b>Level 30</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk4.png" align="middle"> Djinn Perk 4</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 30.</p>
                    <p><b>Effect</b>: When Limited Wish is cast, gain +888 to automatic clicks this reincarnation.</p>
                    <br/>
                    <p><b>Level 50</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk5.png" align="middle"> Djinn Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Mana regeneration counts 200% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineage.png" align="middle"> Makers Lineage</b></p>
                    <p><b>Requirements</b>: R130+</p>
                    <p><b>Cost</b>: 400 Elven, Goblin Royal Exchanges</p>
                    <p><b>Effect</b>: Increase Royal Exchange bonus by multiplicative 8% per level.</p>
                    <br/>
                    <p><b>Level 5</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk1.png" align="middle"> Makers Perk 1</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 5.</p>
                    <p><b>Effect</b>: While using Makers Bloodline, the requirement for Free Excavation Reset is reduced by 25%.</p>
                    <br/>
                    <p><b>Level 10</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 10.</p>
                    <p><b>Effect</b>: x50 more Elven and Goblin Faction Coin find chance.</p>
                    <br/>
                    <p><b>Level 15</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk2.png" align="middle"> Makers Perk 2</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 15.</p>
                    <p><b>Effect</b>: Unlocks Makers Lineage Challenge.</p>
                    <p><b>Challenge</b>: Have at least 350000 buildings within 45 seconds of a new run.</p>
                    <p><b>Effect</b>: Unlocks Faction spell. (Infinite Spiral).</p>
                    <br/>
                    <p><b>Level 20</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk3.png" align="middle"> Makers Perk 3</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 20.</p>
                    <p><b>Effect</b>: Increase Offline bonus by 10% per 500 Unique Buildings.</p>
                    <br/>
                    <p><b>Level 30</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk4.png" align="middle"> Makers Perk 4</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 30.</p>
                    <p><b>Effect</b>: While infinite spiral is active, production of all buildings increases by 1% each second, up to its maximum duration.</p>
                    <br/>
                    <p><b>Level 50</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk5.png" align="middle"> Makers Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Excavations count 200% more.</p>
                    <br/>
                    <hr>
                    <p><b>Perk 5 for all other Lineages added</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk5.png" align="middle"> Fairy Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Assistants count 300% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk5.png" align="middle"> Elven Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Faction Coins count 1000% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk5.png" align="middle"> Angel Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Spells cast count 1000% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk5.png" align="middle"> Demon Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Trophies count 1000% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk5.png" align="middle"> Goblin Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Faction Coin find chance counts 1000% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk5.png" align="middle"> Undead Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Reincarnation Power Counts Reincarnations as 100% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk5.png" align="middle"> Druid Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Mana produced counts 1000% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk5.png" align="middle"> Faceless Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Time passed counts 100% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk5.png" align="middle"> Titan Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Royal Exchanges count 500% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenPerk5.png" align="middle"> Dwarf Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Buildings count 100% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk5.png" align="middle"> Drow Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Maximum Mana counts 300% more.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk5.png" align="middle"> Dragon Perk 5</b></p>
                    <p><b>Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>Effect</b>: Lineage levels count 100% more.</p>
                    <br/>
                    <hr>
                    <p><b>Changes</b></p>
                    <p><b>Lineage</b></p>
                    <p><b>Fairy</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk4.png" align="middle"> Fairy Perk 4</b></p>
                    <p><b>Old Effect</b>: While Fairy Chanting is active, further increase your temporary assistants by 10% every 5 minutes of its duration.</p>
                    <p><b>Old Formula</b>: (10 * Floor (x/300)), where x is Fairy Chanting duration in seconds.</p>
                    <p><b>New Effect</b>: While Fairy Chanting is active, further increase your temporary assistants by 8% every 5 minutes of its duration.</p>
                    <p><b>New Formula</b>: (8 * Floor (x/300)), where x is Fairy Chanting duration in seconds.</p>
                    <br/>
                    <p><b>Elven</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenLineage.png" align="middle"> Elven Lineage</b></p>
                    <p><b>Old Effect</b>: Also increase clicks count by a multiplicative 5000% per level.</p>
                    <p><b>New Effect</b>: Also increases clicks count by 5000% per level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk3.png" align="middle"> Elven Perk 3</b></p>
                    <p><b>Old Effect</b>: Increase base clicking reward by 5% of Unique Building production for every 777 of them.</p>
                    <p><b>Old Formula</b>: 5 * floor(x / 777)</p>
                    <p><b>New Effect</b>: Increase base clicking reward by 15% of Unique Building production for every 777 of them.</p>
                    <p><b>New Formula</b>: 15 * floor(x / 777)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk4.png" align="middle"> Elven Perk 4</b></p>
                    <p><b>Old Effect</b>: When Moon Blessing is active, multiply your fc chance by 500%.</p>
                    <p><b>New Effect</b>: When Moon Blessing is active, multiply your fc chance by 1500%.</p>
                    <br/>
                    <p><b>Goblin</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinLineage.png" align="middle"> Goblin Lineage</b></p>
                    <p><b>Old Effect</b>: Increase production bonus from Gems by a multiplicative 6.5% for every level.</p>
                    <p><b>New Effect</b>: Increase Tax Collection worth in seconds by 25 for every level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk1.png" align="middle"> Goblin Perk 1</b></p>
                    <p><b>Old Effect</b>: +120 seconds of production for tax collection.</p>
                    <p><b>New Effect</b>: While Goblin's Greed is active, Tax Collections are worth more seconds multiplicatively based on the amount of assistants you own.</p>
                    <p><b>Formula</b>: (0.35 * x ^ 0.35), where x is amount of assistants you own.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk4.png" align="middle"> Goblin Perk 4</b></p>
                    <p><b>Old Effect</b>: When Goblin's Greed is active, increase seconds worth of Tax Collections based on assistants owned.</p>
                    <p><b>Old Formula</b>: (0.45 * x ^ 0.45), where x is assistants owned.</p>
                    <p><b>New Effect</b>: Goblin's Greed stops producing Faction Coins instantly. Instead, increase your Faction Coin find chance based on the Gems required for your next Reincarnation.</p>
                    <p><b>New Formula</b>: (20 + ln(1 + x) ^ 1.85), where x is Gems required for your next Reincarnation.</p>
                    <br/>
                    <p><b>Undead</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk4.png" align="middle"> Undead Perk 4</b></p>
                    <p><b>Old Effect</b>: When offline, Night Time production is added to offline bonus. Night Time activity time counts 100% more for all purposes.</p>
                    <p><b>New Effect</b>: Increase Offline Bonus based on Night Time activity time in this game.</p>
                    <p><b>Formula</b>: (7 * x ^ 0.7), where x is Night Time activity time this game.</p>
                    <br/>
                    <p><b>Demon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonLineage.png" align="middle"> Demon Lineage</b></p>
                    <p><b>Old Effect</b>: Trophies count 30% more per level.</p>
                    <p><b>New Effect</b>: Increase Non-Unique Buildings production based on Lineage level. Does not suffer from Ascension penalties.</p>
                    <p><b>Formula</b>: (100 * x ^ 2), where x is Lineage level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk1.png" align="middle"> Demon Perk 1</b></p>
                    <p><b>Old Effect</b>: While using Demon Bloodline, maximum mana is increased by 25 for every 6 trophies you unlocked.</p>
                    <p><b>New Effect</b>: While using Demon Bloodline, increase Maximum Mana based on trophies unlocked.</p>
                    <p><b>New Formula</b>: (20 * x ^ 1.25), where x is trophies unlocked.</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidLineage.png" align="middle"> Druid Lineage</b></p>
                    <p><b>Old Effect</b>: Increase spell duration by 2% per level.</p>
                    <p><b>New Effect</b>: Each lineage level counts as 2 additional Reincarnations.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk1.png" align="middle"> Druid Perk 1</b></p>
                    <p><b>Effect</b>: Increases Non-Unique buildings production based on time spent in this game.</p>
                    <p><b>Old Formula</b>: (0.15 * x ^ 1.25), where x is seconds this game.</p>
                    <p><b>New Formula</b>: (0.25 * x ^ 1.25), where x is seconds this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk3.png" align="middle"> Druid Perk 3</b></p>
                    <p><b>Old Effect</b>: While Grand Balance is active, increase the production of its targets based on the amount of Unique Buildings you own.</p>
                    <p><b>Old Formula</b>: (0.5 * floor(x/750)) ^y), where x is Unique Buildings and y is spell tier.</p>
                    <p><b>New Effect</b>: Increase Grand Balance bonus based on the amount of Unique Buildings you own.</p>
                    <p><b>Added Effect</b>: One ascension penalty is removed.</p>
                    <p><b>New Formula</b>: ((12000 * (x / 1000))), where x is amount of Unique Buildings you own.</p>
                    <br/>
                    <p><b>Faceless</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk4.png" align="middle"> Faceless Perk 4</b></p>
                    <p><b>Effect</b>: Brainwave headstart time is increased by 1000%.</p>
                    <p><b>New Effect</b>: Remove 1 Ascension penalty from Brainwave on Unique Buildings.</p>
                    <br/>
                    <p><b>Dwarf</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarfLineage.png" align="middle"> Dwarf Lineage</b></p>
                    <p><b>Old Effect</b>: Excavations and Artifacts count 10% more per level.</p>
                    <p><b>New Effect</b>: Increase the base production of each building based on their tier (additively). The bonus is multiplied by the Lineage level.</p>
                    <p><b>Formula</b>: (L * 10 ^ (0.2 * T ^ 1.4)), where L is Lineage level and T is Building tier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk3.png" align="middle"> Dwarven Perk 3</b></p>
                    <p><b>Old Effect</b>: Increase Faction Coin find chance with excavations by 250% for every 500 Unique Building.</p>
                    <p><b>New Effect</b>: Excavations and Artifacts count 1% more for every 1500 Unique Buildings.</p>
                    <br/>
                    <p><b>Drow</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowLineage.png" align="middle"> Drow Lineage</b></p>
                    <p><b>Old Effect</b>: Increase offline production bonus by a multiplicative 75% for every level.</p>
                    <p><b>New Effect</b>: Increase offline production bonus based on Lineage level. Does not suffer from Ascension penalties.</p>
                    <p><b>Formula</b>: (150 * L ^ 2.25), where L is Lineage level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk3.png" align="middle"> Drow Perk 3</b></p>
                    <p><b>Old Effect</b>: Increase offline production by 10.0% for every 500 Unique Building.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance by 5% per 3000 unique buildings.</p>
                    <hr>
                    <p><b>Faction Upgrades</b></p>
                    <p><b>Elite Prestige Trade Treaties</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonTradeTreaty.png" align="middle"> Archon Trade Treaty</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnTradeTreaty.png" align="middle"> Djinn Trade Treaty</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersTradeTreaty.png" align="middle"> Makers Trade Treaty</b></p>
                    <p><b>Old Cost</b> 1 Dc (1e33) Faction Coins.</p>
                    <p><b>New Cost</b> 1 No (1e30) Faction Coins.</p>
                    <br/>
                    <p><b>Elite Prestige Faction Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PurityofForm.png" align="middle"> Purity of Form (AR10)</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WishesComeTrue.png" align="middle"> Wishes Come True (DJ10)</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ValuableAntiquity.png" align="middle"> Valuable Antiquity (MK10)</b></p>
                    <p><b>Old Cost</b> 1 QiQig (1e168)</p>
                    <p><b>New Cost</b> 100 QiQig (1e170)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AbsoluteHierarchy.png" align="middle"> Absolute Hierarchy (AR11)</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BluePowder.png" align="middle"> Blue Powder (DJ11)</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BedrockFoundations.png" align="middle"> Bedrock Foundations (MK11)</b></p>
                    <p><b>Old Cost</b>10 QiQig (1e169)</p>
                    <p><b>New Cost</b> 1 SxQig (1e171)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EssenceExtractor.png" align="middle"> Essence Extractor (AR12)</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AcademicProdigy.png" align="middle"> Academic Prodigy (DJ12)</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble (MK12)</b></p>
                    <p><b>Old Cost</b> 100 QiQig (1e170)</p>
                    <p><b>New Cost</b> 10 SxQig (1e172)</p>
                    <br/>
                    <p><b>Elven</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SylvanTreasureFrillsFactionUpgrade.png" align="middle"> Sylvan Treasure Frills (EL3)</b></p>
                    <p><b>Old Effect</b>: Increase clicking reward by 80% of your total production.</p>
                    <p><b>New Effect</b>: Increase clicking reward by 50% of your total production.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SecretClickingTechniquesFactionUpgrade.png" align="middle"> Secret Clicking Techniques (EL6)</b></p>
                    <p><b>Effect</b>: Increases the production of all buildings based on your total of clicks.</p>
                    <p><b>Old Formula</b>: (ln(1 + x) ^ 2.5)%, where x is your Treasure Clicks (Total) stat.</p>
                    <p><b>New Formula</b>: (2 * x ^ 0.4)%, where x is your Treasure Clicks (Total) stat.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiplomacyFactionUpgrade.png" align="middle"> Elven Diplomacy (EL7)</b></p>
                    <p><b>Old Effect</b>: Increases the production of all buildings based on your chance to find Faction Coins.</p>
                    <p><b>Old Formula</b>: (2 * x), where x is your chance to find Faction Coins.</p>
                    <p><b>New Effect</b>: Increase click count based on Faction Coins found in this game.</p>
                    <p><b>New Formula</b>: (2 * ln(1 + x) ^ 2), where x is Faction Coins found in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" align="middle"> Wooden Dice (EL10)</b></p>
                    <p><b>New Effect added</b>: When Elven Luck triggers, 100000 automatic Tax Collections are cast.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" align="middle"> Camouflage (EL11)</b></p>
                    <p><b>Old Effect</b>: Assistants count 1,500% more for all purposes and increase assistant production based on assistant amount.</p>
                    <p><b>New Effect</b>: Assistants and Clicks count 1,500% more for all purposes and increase assistant production based on assistant amount.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png" align="middle"> Elven Discipline (EL12)</b></p>
                    <p><b>Old Effect</b>: Increase mana regeneration additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
                    <p><b>New Effect</b>: Increase assistants additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
                    <p><b>Formula</b>: (100 * ln(1 + x) ^ 1.35), where x is Faction Coins found in this game.(additively)</p>
                    <p><b>Formula</b>: (1.45 * ln(x)), where x is Faction Coins found in this game.(multiplicatively)</p>
                    <p><b>Note</b>: Formulas did not change.</p>
                    <br/>
                    <p><b>Angel</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchangelFeathersFactionUpgrade.png" align="middle"> Archangel Feathers (AN6)</b></p>
                    <p><b>Old Effect</b>: Increase Mana production by 40%.</p>
                    <p><b>New Effect</b>: Increase Mana production by 60%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Heaven'sBrilliance.png" align="middle"> Heaven's Brilliance (AN10)</b></p>
                    <p><b>Old Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. All Dragon's Breath effects are increased based on the amount of Holy Sites you own.</p>
                    <p><b>Old Formula</b>: (0.01 * log10(1 + x)), where x is T7 spells.</p>
                    <p><b>Dragon's Breath Old Formula:</b> (0.6 * x ^ 0.6), where x is amount of Holy Sites owned.</p>
                    <p><b>New Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. Gem Grinder and all Dragon's Breath effects are increased based on the amount of Holy Sites you own.</p>
                    <p><b>New Formula</b>: (0.01 * ln(1 + x)), where x is amount of Holy Sites owned.</p>
                    <p><b>Gem Grinder and Dragon's Breath New Formula</b>: (0.65 * x ^ 0.65), where x is amount of Holy Sites owned.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelicFortitude.png" align="middle"> Angelic Fortitude (AN11)</b></p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells' activity time this R.</p>
                    <p><b>Old Formula</b>: (0.04 * x ^ 0.675), where x is seconds in current spells.</p>
                    <p><b>New Formula</b>: (0.07 * x ^ 0.7), where x is seconds in current spells.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png" align="middle"> Seraphim Feathers (AN12)</b></p>
                    <p><b>New Name</b>: Seraphim Wings</p>
                    <p><b>Old Effect</b>: Increase mana regeneration by 80%.</p>
                    <p><b>New Effect</b>: Increase Mana Regeneration, Faction Coin find chance and assistants by 160%.</p>
                    <br/>
                    <p><b>Goblin</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MoneyisMagic.png" align="middle"> Money is Magic (GB11)</b></p>
                    <p><b>Effect</b>: Increase mana regeneration based on the amount of Tax Collections cast in this game.</p>
                    <p><b>Old Formula</b>: (2 * (ln(x) ^ 1.2)), where x is amount of Tax Collections cast.</p>
                    <p><b>New Formula</b>: (2 * (ln(1 + x) ^ 1.2)), where x is amount of Tax Collections cast.</p>
                    <br/>
                    <p><b>Undead</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EternalServitude.png" align="middle"> Eternal Servitude (UD12)</b></p>
                    <p><b>Old Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
                    <p><b>Old Formula</b>: (10000 + 0.75 * x ^ 1.5), where x is seconds this game.</p>
                    <p><b>New Effect</b>: Increase base production of Undercity by +10000, and then increase this effect based on time spent in this Reincarnation.</p>
                    <p><b>New Formula</b>: (10000 + 1.3 * x ^ 1.3), where x is time spent this Reincarnation.</p>
                    <p><b>Added Effect</b>: Also effects Flesh Workshops.</p>
                    <br/>
                    <p><b>Demon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonicFury.png" align="middle"> Demonic Fury (DM11)</b></p>
                    <p><b>Effect</b>: Multiplicatively increase faction coin find chance based on least time spent between Evil and Chaos this R.</p>
                    <p><b>Old Formula</b>: (0.12 * min(x, y) ^ 0.7), where x is evil time in seconds and y is chaos time in seconds.</p>
                    <p><b>New Formula</b>: (0.25 * min(x,y) ^ 0.75), where x is evil time in seconds and y is chaos time in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" align="middle"> Devastation (DM12)</b></p>
                    <p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
                    <p><b>Old Formula</b>: (3.5 * ln(1 + x) ^ 3.5), where x is mana regen.</p>
                    <p><b>New Formula</b>: (4.5 * ln(1 + x) ^ 4.5), where x is mana regen.</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" align="middle"> Lunar Cycle (DD11)</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.</p>
                    <p><b>Old Formula</b>: ((x + y) ^ 0.65 * (1 / (1 + abs(x - 2y))) ^ 0.25), where x is time this game in seconds and y is offline time this game in seconds.</p>
                    <p><b>New Effect</b>: Increase Maximum Mana additively based on time spent online in this game.</p>
                    <p><b>Online Formula</b>: (50 * x ^ 0.95), where x is time spent online in this game.</p>
                    <p><b>New Effect</b>: Increase Maximum Mana multiplicatively based on time spent offline in this game.</p>
                    <p><b>Offline Formula</b>: (0.5 * x ^ 0.5), where x is time spent offline in this game.</p>
                    <br/>
                    <p><b>Faceless</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DimensionDoor.png" align="middle"> Dimension Door (FC12)</b></p>
                    <p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
                    <p><b>Old Formula</b>: (0.013 * x ^ 0.67), where x is highest max mana this R.</p>
                    <p><b>New Formula</b>: (0.01 * x ^ 0.65), where x is highest max mana this R.</p>
                    <br/>
                    <p><b>Dwarf</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenAleFactionUpgrade.png" align="middle"> Dwarven Ale (DN1)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings by 1% per Inn you own.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by 0.8% per Inn you own.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MiningProdigiesFactionUpgrade.png" align="middle"> Mining Prodigies (DN3)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the total amount of Excavations you made.</p>
                    <p><b>Old Formula</b>: (10 * x ^ 0.9)%, where x is the number of excavations you've purchased.</p>
                    <p><b>New Formula</b>: (9 * x ^ 0.9)%, where x is the number of excavations you've purchased.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BattlehammersFactionUpgrade.png" align="middle"> Battlehammers (DN7)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the amount of Dwarven Coins found in this game.</p>
                    <p><b>Old Formula</b>: (1.5 * ln(1 + x) ^ 3)%, where x is your Dwarven Coins Gained (This Game) stat.</p>
                    <p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 2.5))%, where x is your Dwarven Coins Gained (This Game) stat.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicResistanceFactionUpgrade.png" align="middle"> Magic Resistance (DN8)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on mana regeneration rate.</p>
                    <p><b>Old Formula</b>: (80 * x ^ 0.85)%, where x is your Mana per Second stat.</p>
                    <p><b>New Formula</b>: (80 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SolidityUnionUpgrade1.png" align="middle"> Solidity (DN10)</b></p>
                    <p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of High Bastion you own.</p>
                    <p><b>Old Formula</b>: (1.55 * x ^ 0.55), where x is High Bastion.</p>
                    <p><b>New Formula</b>: (1.6 * x ^ 0.6), where x is High Bastion.</p>
                    <br/>
                    <p><b>Drow</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UnderworldTyrannyFactionUpgrade.png" align="middle"> Underworld Tyranny (DW1)</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on your total time spent being Evil.</p>
                    <p><b>Old Formula</b>: (15 * floor(x / 3600) ^ 0.7)%, where x is your Time Spent Being Evil (Total) stat in seconds.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on your total time spent being Evil in this Reincarnation.</p>
                    <p><b>New Formula</b>: (x ^ 0.7), where x is your Time Spent Being Evil (Total) stat in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ManaAddictsFactionUpgrade.png" align="middle"> Mana Addicts (DW4)</b></p>
                    <p><b>Effect</b>: Mana regeneration increases over time.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.55), where x is your Play Time (This Game) stat in seconds.</p>
                    <p><b>New Formula</b>: (2.5 + 0.25 * x ^ 0.55), where x is your Play Time (This Game) stat in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodSacrificesFactionUpgrade.png" align="middle"> Blood Sacrifices (DW5)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings by 2.5% per Dark Temple you own.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by 3% per Dark Temple you own.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiderGodsFactionUpgrade.png" align="middle"> Spider Gods (DW7)</b></p>
                    <p><b>Effect</b>: Increase the production of Dark Temples by 5% for each other building you own.</p>
                    <p><b>New Effect</b>: Increase the production of Dark Temples by 8% for each other building you own.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ProfessionalAssassinsFactionUpgrade.png" align="middle"> Professional Assassins (DW8)</b></p>
                    <p><b>Effect</b>: Increase the production of assistants based on the amount of royal exchanges you purchased.</p>
                    <p><b>Old Formula</b>: round(10 * x ^ 0.8)%, where x is your Royal Exchanges Made stat.</p>
                    <p><b>New Formula</b>: round(9 * x * 0.9)%, where x is your Royal Exchanges Made stat.</p>
                    <br/>
                    <p><b>Dragon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SharpClawsFactionUpgrade.png" align="middle"> Sharp Claws (DG6)</b></p>
                    <p><b>Effect</b>: Gain additional assistants based on clicks made in this game.</p>
                    <p><b>Old Formula</b>: floor(0.1 * ln(1 + x)^2.75), where x is clicks made in this game.</p>
                    <p><b>New Formula</b>: (1.35 * x ^0.35), where x is clicks made in this game.</p>
                    <br/>
                    <p><b>Mecernary</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyCrusadersMercenaryUpgrade.png" align="middle"> Holy Crusaders</b></p>
                    <p><b>Effect</b>: You gain additional Crusader Assistants based on the amount of spells cast in this game.</p>
                    <p><b>Old Formula</b>: (0.5 * ((1 + 0.2 * x) ^ 0.5 - 1)), where x is amount of spells cast in this game.</p>
                    <p><b>New Formula</b>: (0.5 * ((1 + 0.2 * x) ^ (0.1 + A) - 1)), where x is amount of spells cast in this game and A is Ascenion.</p>
                    <br/>
                    <p><b>Effect</b>: Also increase clicking reward by 1000% per active spell.</p>
                    <p><b>Old Formula</b>: (1000 * x), where x is active spells.</p>
                    <p><b>New Formula</b>: ((1000 * x) ^ (1 + A)), where x is active spells and A is Ascenion.</p>
                    <br/>
                    <p><b>Archon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/CosmicResonance.png" align="middle"> Cosmic Resonance (AR3)</b></p>
                    <p><b>Effect</b>: Increase Royal Exchange bonus based on clicks made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is clicks made.</p>
                    <p><b>New Formula</b>: (0.5 * x ^ 0.5), where x is clicks made.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPride.png" align="middle"> Archon Pride (AR5)</b></p>
                    <p><b>Old Effect</b>: Increase assistants based on time spent as your least used faction.</p>
                    <p><b>Old Formula</b>: (50 + 0.3 * x ^ 0.7), where x is least used faction.</p>
                    <p><b>New Effect</b>: Increase assistants based on your current Lineage level.</p>
                    <p><b>New Formula</b>: (1.25 * x ^ 1.25), where x is your current Lineage level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StrangeAttraction.png" align="middle"> Strange Attraction (AR8)</b></p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on the activity time of your least used spell.(excluding Catalyst)</p>
                    <p><b>Old Formula</b>: (25 + (0.25 * x ^ 0.75)), where x is spell with least activity time this R in seconds.</p>
                    <p><b>New Formula</b>: (50 + 0.75 * x ^ 0.75), where x is spell with least activity time this R in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArcaneCore.png" align="middle"> Arcane Core (AR9)</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on mana produced in this game.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on mana produced in this R.</p>
                    <p><b>Old Formula</b>: (2.35 * log10(1 + x) ^ 2.35), where x is mana produced in this game.</p>
                    <p><b>New Formula</b>: (log10(1 + x) ^ 2.5), where x is mana produced in this R.</p>
                    <br/>
                    <p><b>Makers</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HandoftheMakers.png" align="middle"> Hand of the Makers (MK1)</b></p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (3.5 * log10(1 + x) ^ 1.5), where x is clicks made in this Reincarnation.</p>
                    <p><b>New Formula</b>: (0.5 * x ^ 0.5), where x is clicks made in this Reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StoneServants.png" align="middle"> Stone Servants (MK7)</b></p>
                    <p><b>Renamed</b>: Stonecarving</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Formula</b>: (0.03 * (x * (y + z)) ^ 0.7), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble (MK12)</b></p>
                    <p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (3 * ln(x) ^ 3), where x is clicks made this Reincarnation.</p>
                    <p><b>New Formula</b>: (2.5 * x ^ 0.5), where x is clicks made this Reincarnation.</p>
                    <br/>
                    <hr>
                    <p><b>Faction Unions</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairiesUnion.png" align="middle"> Fairies Union</b></p>
                    <p><b>Effect</b>: Increase assistant production based on amount of Enchanted Fields, Inns and Blacksmiths if building count is even, or all other buildings if building count is odd.</p>
                    <p><b>Old Formula</b>: (15 * x ^ 0.475), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
                    <p><b>Old Formula</b>: (15 * x ^ 0.475), where x is T4-T11 Buildings (If building count is odd)</p>
                    <p><b>New Formula</b>: (15 * x ^ 0.5), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
                    <p><b>New Formula</b>: (15 * x ^ 0.5), where x is T4-T11 Buildings (If building count is odd)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUnion.png" align="middle"> Elven Union</b></p>
                    <p><b>Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
                    <p><b>Formula</b>: (3 * ln(x) ^ 3), where x is faction coins found in this Reincarnation.</p>
                    <p><b>New Effect Added</b>: Also autoclicks 10 times per second.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" align="middle"> Angels Union</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
                    <p><b>Old Formula</b>: (4 * ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
                    <p><b>New Formula</b>: (4 * ln(x) ^ 2.25 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUnion.png" align="middle"> Undead Union</b></p>
                    <p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
                    <p><b>Old Formula</b>: (75 * log10(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
                    <p><b>New Formula</b>: (75 * ln(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinsUnion.png" align="middle"> Goblins Union</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
                    <p><b>Old Formula</b>: (0.4 * x ^ 0.4), where x is spells cast in this game.</p>
                    <p><b>New Formula</b>: (0.45 * x ^ 0.45), where x is spells cast in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" align="middle"> Druids Union</b></p>
                    <p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
                    <p><b>Old Formula</b>: (3 * x * y ^ 1.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <p><b>New Formula</b>: (3 * x ^ 1.03 * y ^ 1.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUnion.png" align="middle"> Faceless Union</b></p>
                    <p><b>Effect</b>: Increase assistants additively based on amount of time spent as a random faction. Updates every 3 minutes.</p>
                    <p><b>Old Formula</b>: (50 * x ^ 0.5), where x is random faction all time in seconds.</p>
                    <p><b>New Formula</b>: (55 * x ^ 0.55), where x is random faction all time in seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"> Dwarven Union</b></p>
                    <p><b>Proof of Balance</b></p>
                    <p><b>Effect</b>: Increase mana regen based on clicks made this reincarnation.</p>
                    <p><b>Old Formula</b>: (1.25 * ln(1 + x) ^ 2.45), where x is amount of clicks made this reincarnation.</p>
                    <p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 2.5), where x is amount of clicks made this reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUnion.png" align="middle"> Archon Union</b></p>
                    <p><b>Old Requirement</b>: R130</p>
                    <p><b>New Requirement</b>: R130, Unique Building</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUnion.png" align="middle"> Djinn Union</b></p>
                    <p><b>Old Requirement</b>: R130</p>
                    <p><b>New Requirement</b>: R130, Unique Building</p>
                    <p><b>Effect</b>: Maelstrom bonuses scale faster.</p>
                    <p><b>Old Formula</b>: x1.15 multiplier to exponent of maelstrom formulas.</p>
                    <p><b>New Formula</b>: x1.1 multiplier to exponent of maelstrom formulas.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUnion.png" align="middle"> Makers Union</b></p>
                    <p><b>Old Requirement</b>: R130</p>
                    <p><b>New Requirement</b>: R130, Unique Building</p>
                    <br/>
                    <hr>
                    <p><b>Advanced Heritage</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedUndeadHeritage.png" align="middle"> Advanced Undead Heritage</b></p>
                    <p><b>Effect</b>: Assistants count more based on your Offline Bonus.</p>
                    <p><b>Old Formula</b>: (0.018 * ln(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
                    <p><b>New Formula</b>: (0.025 * ln(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedTitanHeritage.png" align="middle"> Advanced Titan Heritage</b></p>
                    <p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
                    <p><b>Old Formula</b>: (0.2 * ln(x) ^ 1.5)%, where x is Royal Exchanges purchased.</p>
                    <p><b>New Formula</b>: (0.85 * ln(1 + x) ^ 1.15)%, where x is Royal Exchanges purchased.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDwarvenHeritage.png" align="middle"> Advanced Dwarven Heritage</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the amount of excavations and excavation resets. (This R).</p>
                    <p><b>Old Formula</b>: (0.01 * x ^ (0.85 + 0.01 * y))%, where x is excavations and y is excavation resets this R (ruby and free resets).</p>
                    <p><b>New Formula</b>: (0.025 * (x * y) ^ 0.65)%, where x is excavations and y is excavation resets this R (ruby and free resets).</p>
                    <p><b>Note</b>: Reset count now starts from 1 (no more 0% bonus).</p>
                    <hr>
                    <p><b>Faction Sets</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"> Fairy Set</b></p>
                    <p><b>Effect</b>: Increase Farm, Inn and Blacksmith production based on number of assistants owned.</p>
                    <p><b>Old Formula</b>: (0.75 * x ^ 0.75), where x is number of assistants owned.</p>
                    <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is number of assistants owned.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"> Elven Set</b></p>
                    <p><b>Effect</b>: Increase all building production based on total amount of Elven Lucks triggered (This R)(since unlock)</p>
                    <p><b>Old Formula</b>: (0.66 * x ^ 0.6), where x is amount of Elven Lucks triggered.</p>
                    <p><b>New Formula</b>: (6 * x ^ 0.6), where x is amount of Elven Lucks triggered.</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/AngelSet.png align=middle><b> Angel Set</b></p>
                    <p><b>Old Effect</b>: Increase mana regen based on spells cast this game.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 0.35), where x is spells cast.</p>
                    <p><b>New Effect</b>: Additively increase Mana Regeneration based on highest amount of spells cast in a single game.</p>
                    <p><b>New Formula</b>: (3 * x ^ 0.3), where x is spells cast.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinSet.png" align="middle"> Goblin Set</b></p>
                    <p><b>Old Effect</b>: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.</p>
                    <p><b>Old Formula</b>: (0.1 * x ^ 0.7), where x is seconds this game.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
                    <p><b>Formula Additively</b>: (70 * x ^ 0.7), where x is time spent in this game.</p>
                    <p><b>Formula Multiplicatively</b>: (0.5 * x ^ 0.5), where x is time spent in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"> Titan Set</b></p>
                    <p><b>Old Effect</b>: Increase Unique building production based on time spent this game.</p>
                    <p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is seconds this game.</p>
                    <p><b>New Effect</b>: Increase Royal Exchange Bonus additively and multiplicatively based on time spent in this game.</p>
                    <p><b>Formula Additively</b>: (0.3 * x ^ 0.7), where x is time spent in this game.</p>
                    <p><b>Formula Multiplicatively</b>: (0.45 * x ^ 0.45), where x is time spent in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"> Faceless Set</b></p>
                    <p><b>Old Effect</b>: Increase production of all buildings based on highest amount of spells cast in a single game.</p>
                    <p><b>Old Formula</b>: (0.32 * x ^ 0.28), where x is number of spells cast.</p>
                    <p><b>New Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
                    <p><b>Formula</b>: (2.5 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"> Dwarven Set</b></p>
                    <p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ 0.75), where x is Royal Exchange bonus.</p>
                    <p><b>New Formula</b>: (2.25 * x ^ 0.75), where x is Royal Exchange bonus.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"> Drow Set</b></p>
                    <p><b>Old Effect</b>: Increase Mana Regeneration based on Evil spells cast (this R). (additive)</p>
                    <p><b>Old Formula</b>: (50 * x ^ 0.5), where x is total evil spells cast (this R).</p>
                    <p><b>New Effect</b>: Increase the production of Unique Buildings based on Evil spells cast in this Reincarnation.</p>
                    <p><b>New Formula</b>: (0.45 * x ^ 0.45), where x is total evil spells cast (this R).</p>
                    <br/>
                    <hr>
                    <p><b>Challenges</b></p>
                    <p><b>Fairy</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PixieMischiefChallenge.png" align="middle"> Pixie Mischief (FC1)</b></p>
                    <p><b>Effect</b>: You gain assistants based on the amount of Fairy affiliated (faction upgrades, heritage, bloodline, research) upgrades you own.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 1.75), where x is amount of Fairy affiliated upgrades.</p>
                    <p><b>New Formula</b>: (2 * x), where x is amount of Fairy affiliated upgrades.</p>
                    <br/>
                    <p><b>Demon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBurstChallenges.png" align="middle"> Hellfire Burst (Challenge Final Reward)</b></p>
                    <p><b>Old Effect</b>: Reduces Hellfire Blast mana cost based on the number of trophies you have unlocked.</p>
                    <p><b>Old Formula</b>: floor(0.25 * x), where x is the amount of trophies unlocked.</p>
                    <p><b>New Effect</b>: Hellfire Blast also counts Evil spells cast in this reincarnation to increase its bonus.</p>
                    <p><b>New Formula</b>: (0.1 * x), where x is evil spells cast in this reincarnation.</p>
                    <br/>
                    <p><b>Dragon</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SerpentQuellerChallenges.png" align="middle"> Serpent Queller (DC3)</b></p>
                    <p><b>Old Requirement</b>: Reincarnation 54, Completion of Titan, Druid, Faceless, Dwarven and Drow Challenge 3, Completion Dragon Challenge 2, Play as Faceless/Dragon, Have a combined total of <b>25</b> days played as faceless and dragons with a minimum of <b>8</b> days as each one.</p>
                    <p><b>New Requirement</b>: Reincarnation 54, Completion of Titan, Druid, Faceless, Dwarven and Drow Challenge 3, Completion Dragon Challenge 2, Play as Faceless/Dragon, Have a combined total of <b>8</b> days played as faceless and dragons with a minimum of <b>2</b> days as each one.</p>
                    <br/>
                    <hr>
                    <p><b>Spells</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessing.png" align="middle"> Moon Blessing (Elvens)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on Treasure Clicks (Total).</p>
                    <p><b>Old Formula</b>: 1.75 * ln^3.1(1 + x)%, where x is your Treasure Clicks (Total) stat.</p>
                    <p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your Treasure Clicks (Total) stat.</p>
                    <p><b>Effect</b>: Moon Blessing also auto-clicks the treasure 15 times per second.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefits.png" align="middle"> Good Mercenary Spell</b></p>
                    <p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 36 tiers.</p>
                    <p><b>Old Formula</b>: (y ^ (1 + 0.24 * log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
                    <p><b>New Formula</b>: (y ^ (1 + 0.2 * log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
                    <p><b>Added Effect</b>: Share Benefits now also gives TC casts.</p>
                    <p><b>New Formula</b>: ?</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PrecognitionSpell.png" align="middle"> Precognition (Proof of Order)</b></p>
                    <p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
                    <p><b>Old Formula</b>: (1.25 * log10(1 + x) ^ 1.75), where x is mana produced in this game.</p>
                    <p><b>New Formula</b>: (1.3 * ln(1 + x) ^ 1.7), where x is mana produced in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/LimitedWishSpell.png" align="middle"> Limited Wish (Proof of Chaos)</b></p>
                    <p><b>Old Effect</b>: Provide a random effect based on your base faction, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
                    <p><b>New Effect</b>: Provide a random effect based on your chosen alignment, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
                    <p><b>Old Formula</b>: (1.725 * (ln(1 + x) ^ 1.25) * (y ^ 0.65)), where x is Limited Wish activity time this game in seconds and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
                    <p><b>New Formula</b>: (2.25 * (ln(1 + x) ^ 1.35) * (y ^ 0.45)), where x is Limited Wish activity time this game in seconds and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" align="middle"> Infinite Spiral (Proof of Balance)</b></p>
                    <p><b>Effect</b>: Increase assistants based on Maximum Mana.</p>
                    <p><b>Formula</b>: (12.5 * (ln(1 + x) ^ 1.25), where x is Maximum Mana.</p>
                    <p><b>Effect</b>: Increase max mana based on FC chance.</p>
                    <p><b>Formula</b>: (1.65 * log10(1 + x) ^ 1.65), where x is FC chance.</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (1.35 * x ^ (0.5 + 0.002 * (y + z))), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Formula</b>: (0.025 * (x * (y + z)) ^ 0.75), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Spiritualsurge.png" align="middle"> Spiritual Surge (All Factions)</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the amount of times you reincarnated and ascended.</p>
                    <p><b>Old Formula</b>: (10000*1.05^x)^(1+0.5*y)%, where x is the number of times you have reincarnated and y is how many times you ascended.</p>
                    <p><b>New Formula</b>: (2500 * (R ^ 1.05)) ^ (1 + A * 0.5)%, where R is the number of times you have reincarnated and A is how many times you ascended.</p>
                    <br/>
                    <hr>
                    <p><b>Unique Buildings</b></p>
                    <p><b>Elf</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArborealCityUniqueBuilding.png"></b></p>
                    <p>Upgraded From Citadels</p>
                    <p>Upgrade Citadels to Arboreal Cities, boosting their production based on Faction Coin find chance and unlocking more unique perks for the building.</p>
                    <p><b>Effect</b>: Increase production based on Faction Coin find chance.</p>
                    <p><b>Effect</b>: Also grants access to Faction Union.</p>
                    <p><b>Old Formula</b>: floor(20 * (log10(1 + x)) ^ 2)), where x is FC chance.</p>
                    <p><b>New Formula</b>: floor(20 * (ln(1 + x)) ^ 2), where x is FC chance.</p>
                    <br/>
                    <p><b></b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FleshWorkshopUniqueBuilding.png"></b></p>
                    <p>Upgraded From Orcish Arenas</p>
                    <p>Upgrade Orcish Arenas to Flesh Workshops, boosting their production based on your mana regeneration rate and unlocking more unique perks for the building.</p>
                    <p><b>Effect</b>: Increase the production of Flesh Workshops based on mana regen.</p>
                    <p><b>Old Formula</b>: (35 * x ^ 0.65), where x is mana regen per second.</p>
                    <p><b>New Formula</b>: (15 * x ^ 0.65), where x is mana regen per second.</p>
                    <br/>
                    <p><b>Titan</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MountainPalaceUniqueBuilding.png"></b></p>
                    <p>Upgraded From Deep Mines</p>
                    <p>Upgrade Deep Mines to Mountain Palaces, boosting their production based on buildings owned and unlocking more unique perks for the building.</p>
                    <p><b>Effect</b>: Increase production based on buildings owned.</p>
                    <p><b>Effect</b>: Also grants access to Faction Union.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.75), where x is buildings owned.</p>
                    <p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is buildings owned.</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ZigguratUniqueBuilding.png"></b></p>
                    <p>Upgraded From Ancient Pyramids</p>
                    <p>Upgrade Ancient Pyramids to Ziggurats, boosting their production based on lineage levels and unlocking more unique perks for the building.</p>
                    <p><b>Effect</b>: Increase production based on total lineage levels.</p>
                    <p><b>Effect</b>: Also grants access to Faction Union.</p>
                    <p><b>Old Formula</b>: floor(x ^ 1.1)%, where x is total level of lineages.</p>
                    <p><b>New Formula</b>: floor(x ^ 1.2)%, where x is total level of lineages.</p>
                    <br/>
                    <p><b>Dwarf</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HighBastionUniqueBuilding.png"></b></p>
                    <p>Upgraded From Royal Castle</p>
                    <p>Upgrade Royal Castles to High Bastions, boosting their production based on clicks made in this reincarnation and unlocking more unique perks for the building.</p>
                    <p><b>Effect</b>: Increase production based on clicks made in this reincarnation.</p>
                    <p><b>Effect</b>: Also grants access to Faction Union.</p>
                    <p><b>Old Formula</b>: (ln(1 + x) ^ 2), where x is clicks this R.</p>
                    <p><b>New Formula</b>: (0.5 * x ^ 0.5), where x is clicks this R.</p>
                    <br/>
                    <p><b>Mercenary</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoodMercUniqueBuilding.png" align="middle"> Good Alignment</b></p>
                    <p>Upgraded from Knights Jousts</p>
                    <p>Upgrade Knights Jousts to Mercenary Camps, boosting their production based on the amount of Non-Unique buildings you own and unlocking more unique perks for the building.</p>
                    <p><b>Old Formula</b>: (1.5 * (1 + x)) where X is number of Non-Unique Buildings.</p>
                    <p><b>New Formula</b>: (1.25 * (1 + x) ^ 1.05), where X is number of Non-Unique Buildings.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EvilMercUniqueBuilding.png" align="middle"> Evil Alignment</b></p>
                    <p>Upgraded from Evil Fortresses</p>
                    <p>Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.</p>
                    <p><b>Old Formula</b>: (0.5 * (log10( 1 + x)) ^ 4.5) where x is Offline Production Bonus.</p>
                    <p><b>New Formula</b>: (0.5 * log10(x) ^ 3.5), where x is Offline Production Bonus.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/NeutralMercUniqueBuilding.png" align="middle"> Neutral Alignment</b></p>
                    <p>Upgraded from Alchemist Labs</p>
                    <p>Upgrade Alchemist Labs to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.</p>
                    <p><b>Old Formula</b>: (2 * x ^ 0.95), where x is assistants you had in a single game (This R)</p>
                    <p><b>New Formula</b>: (2 * x ^ 1), where x is assistants you had in a single game (This R)</p>
                    <br/>
                    <hr>
                    <p><b>Secret Trophy Upgrades</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GenealogistSecretTrophy.png" align="middle"> Genealogist</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the total amount of lineage levels you have.</p>
                    <p><b>Old Formula</b>: (2.5 * x ^1.25), where x is total amount of lineage levels you have.</p>
                    <p><b>New Formula</b>: (2.5 * x ^1.35), where x is total amount of lineage levels you have.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UniformitySecretTrophy.png" align="middle"> Uniformity</b></p>
                    <p><b>Effect</b>: Increases production of all buildings based on time spent as least used alignment.</p>
                    <p><b>Old Formula</b>: 0.7 * min(x, y, z, s, t, u) ^ 0.7, where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
                    <p><b>New Formula</b>: (0.72 * min(x, y, z, s, t, u) ^ 0.72), where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArtoftheCrowTrophy.png" align="middle"> Art of the Crow (Evil)</b></p>
                    <p><b>Old Effect</b>: The amount increased is based on time spent in this game.</p>
                    <p><b>Old Formula</b>: (4 * x ^ 0.44), where x is time spent this game.</p>
                    <p><b>New Effect</b>: The amount increased is Based on production bonus from Gems.</p>
                    <p><b>New Formula</b>: (30 + 30 * x ^ 0.3), where x is production bonus from Gems.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SunForce6am12pm.png" align="middle"> 6 AM - 12 PM</b></p>
                    <p><b>Old Effect</b>: multiplicative increase Faction Coin find chance based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.25 * ln(1 + x) ^ (2 + 0.25 * A)), where x is your assistants stat.</p>
                    <p><b>New Effect</b>: Increase Mana Regeneration based on the amount of assistants you own. (Additive)</p>
                    <p><b>New Formula</b>: (1.75 * ln(1 + x) ^ (1.75 + 0.5 * A)), where x is amount of assistants you own.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ExcavatedMirageArtifact.png" align="middle"> Excavated Mirage</b></p>
                    <p><b>Old Effect</b>: Increase Faction Coin find chance by a multiplicative 1500%.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance by a multiplicative 2000%.</p>
                    <br/>
                    <hr>
                    <p><b>R Power</b></p>
                    <p><b>108th Reincarnation</b>: R108 power now considers Elite factions.</p>
                    <br/>
                    <p><b>50th Reincarnation</b></p>
                    <p><b>Old Effect</b>: Increase FC chance multiplicatively by (x ^ 1.1)%.</p>
                    <p><b>New Effect</b>: Increase FC chance multiplicatively</p>
                    <p><b>New Formula</b>: (2.5 * x ^ 1.1), where x is number of Reincarnations made.</p>
                    <br/>
                    <hr>
                    <p><b>Research</b></p>
                    <p><b>S30</b> - <b>For</b> All Factions - <b>Research Name</b>: Vacuumancy</p>
                    <p><b>Effect</b>: Increase maximum mana and mana regeneration rate based on time spent in this game.</p>
                    <p><b>Old Formula</b>: Max Mana:floor(45 * X), where x is your Playtime (This Game) stat in hours.</p>
                    <p><b>New Formula</b>: Max Mana:(0.1 * x), where x is your Playtime (This Game) stat in hours.</p>
                    <p><b>Old Formula</b>: Mana Regeneration:floor(75 * x^0.4) / 10, where x is your Playtime (This Game) stat in hours.</p>
                    <p><b>New Formula</b>: Mana Regeneration:(0.5 * x ^ 0.5), where x is your Playtime (This Game) stat in hours.</p>
                    <br/>
                    <p><b>S500</b> - <b>For</b> All Factions - <b>Research Name</b>: Heirlooms</p>
                    <p><b>Effect</b>: Increases maximum mana based on the amount of artifacts you own.</p>
                    <p><b>Old Formula</b>: 100 * x ^ 1.1, where x is amount of artifacts you own.</p>
                    <p><b>New Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.</p>
                    <p><b>New Formula</b></p>
                    <p><b>Maximum Mana</b>: (75 * x ^ 1.1), where x is amount of artifacts you own.</p>
                    <p><b>Mana Regeneration</b>: (5 * x ^ 1.05), where x is amount of artifacts you own.</p>
                    <br/>
                    <p><b>S2875</b> - <b>For</b> Mercenary - <b>Research Name</b>: Scholarship</p>
                    <p><b>Old Effect</b>: Increases the production of Non-Unique buildings by 35% per Unique building.</p>
                    <p><b>New Effect</b>: Increases the production of Non-Unique buildings by 3.5% per Unique building.</p>
                    <br/>
                    <p><b>C3000</b> - <b>For</b> Mercenary - <b>Research Name</b>: Customizing</p>
                    <p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.</p>
                    <p><b>Old Formula</b>: (1.65 * x ^ 1.65), where X is artifacts you own.</p>
                    <p><b>New Formula</b>: (1.5 * x ^ 1.5), where X is artifacts you own.</p>
                    <br/>
                    <p><b>C3100</b> - <b>For</b> All Factions - <b>Research Name</b>: Engineering</p>
                    <p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).</p>
                    <p><b>Old Formula</b>: (7.5 * log10(x + 1)) ^ 2.15, where x is clicks made</p>
                    <p><b>New Formula</b>: (65 * x ^ 0.35), where x is clicks made</p>
                    <br/>
                    <p><b>D175</b> - <b>For</b> Angel - <b>Research Name</b>: Resurrection</p>
                    <p><b>Old Effect</b>: You gain additional assistants based on God's Hands activity time. (This Game)</p>
                    <p><b>Old Formula</b>: floor(0.45 * (0.15 * x) ^ 0.6), where x is God's Hands Cast Time Activity (This Game).</p>
                    <p><b>New Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)</p>
                    <p><b>New Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).</p>
                    <br/>
                    <p><b>D245</b> - <b>For</b> All Factions - <b>Research Name</b>: Soulrending</p>
                    <p><b>Old Effect</b>: Reincarnations count twice for Spiritual Surge.</p>
                    <p><b>New Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique Buildings you own.</p>
                    <p><b>Formula</b>: (2.5 * x ^ 0.55), where x is the amount of Non-Unique Buildings you own.</p>
                    <br/>
                    <p><b>D250</b> - <b>For</b> All Factions - <b>Research Name</b>: Demonology</p>
                    <p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.</p>
                    <p><b>Old Formula</b>: floor(ln(1 + x) ^ 1.3), where x is your Faction Coins Gained (This Game) stat.</p>
                    <p><b>New Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.</p>
                    <br/>
                    <p><b>D275</b> - <b>For</b> Druid - <b>Research Name</b>: Meditation</p>
                    <p><b>Effect</b>: Increase mana regeneration based on your current mana.</p>
                    <p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
                    <p><b>Old Formula</b>: (0.5 * (100 - x))%, where x is percent of max mana.</p>
                    <p><b>New Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.</p>
                    <br/>
                    <p><b>D290</b> - <b>For</b> All Factions - <b>Research Name</b>: Transubstantiation</p>
                    <p><b>Old Effect</b>: Each artifact you discover increases mana regeneration by 1.5 m/s.</p>
                    <p><b>Old Formula</b>: floor(1.5 * x), where x is the number of artifacts found.</p>
                    <p><b>New Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.</p>
                    <p><b>New Formula</b></p>
                    <p><b>Additively</b>: (50 * x ^1.1), where x is the number of artifacts found.</p>
                    <p><b>Multiplicatively</b>: (0.45 * x ^ 1.1), where x is the number of artifacts found.</p>
                    <br/>
                    <p><b>D1375</b> - <b>For</b> All Factions - <b>Research Name</b>: Sanctification</p>
                    <p><b>Old Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique buildings you own.</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ 0.55), where x is non-unique building owned.</p>
                    <p><b>New Effect</b>: Ascensions count 50% more for Spiritual Surge.</p>
                    <br/>
                    <p><b>D3350</b> - <b>For</b> All Factions - <b>Research Name</b>: Vampirism</p>
                    <p><b>Old Effect</b>: Increases offline production based on the amount of Reincarnations you made.</p>
                    <p><b>Old Formula</b>: (1.7 * x ^ 1.7)%, where x is your Reincarnation count.</p>
                    <p><b>New Effect</b>: Increase assistants additively and multiplicatively based on your Offline Bonus.</p>
                    <p><b>New Formula</b></p>
                    <p><b>Additive</b>(3.25 * log10(1 + x) ^ 2.25), where x is your Offline Bonus.</p>
                    <p><b>Multiplicative</b> (0.05 * log10(1 + x) ^ 2), where x is your Offline Bonus.</p>
                    <br/>
                    <p><b>E230</b> - <b>For</b> Demon - <b>Research Name</b>: Coercion</p>
                    <p><b>Old Effect</b>: Increase the production of Infernal Realms based on total time spent being Evil.</p>
                    <p><b>Old Formula</b>: round(0.2 * x ^ 0.7)%, where x is your Time Spent Being Evil (Total) stat.</p>
                    <p><b>New Effect</b>: Increases trophy count based on time spent as Evil this R.</p>
                    <p><b>New Formula</b>: (0.2 * x ^ 0.65), where x is time spent as Evil this R.</p>
                    <br/>
                    <p><b>E590</b> - <b>For</b> Goblin,Drow - <b>Research Name</b>: Slavery</p>
                    <p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own.</p>
                    <p><b>Old Formula</b>: (floor(x / 300) ^ 1.05), where x is the number of Non Unique Buildings you own.</p>
                    <p><b>New Formula</b>: (0.1 * x ^ 0.8), where x is the number of Non Unique Buildings you own.</p>
                    <br/>
                    <p><b>E1225</b> - <b>For</b> Neutral,Dragon - <b>Research Name</b>: Hoarding</p>
                    <p><b>Old Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.</p>
                    <p><b>New Formula</b>: Remove 1 Ascension penalty from Royal Exchange bonus, but reduce their overall production by 90%.</p>
                    <br/>
                    <p><b>E1425</b> - <b>For</b> All Neutral Factions - <b>Research Name</b>: Rarity</p>
                    <p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</p>
                    <p><b>Old Formula</b>: (1.75 * x ^ 1.75)%, where x is artifacts found. (multiplicative)</p>
                    <p><b>New Formula</b>: (1.65 * x ^ 1.65)%, where x is artifacts found. (multiplicative)</p>
                    <br/>
                    <p><b>E3250 and E3300 swap places</b></p>
                    <p><b>Old E3250</b> - <b>For</b> Mercenary - <b>Research Name</b>: Estates</p>
                    <p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</p>
                    <p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
                    <p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.</p>
                    <br/>
                    <p><b>New E3250</b> - <b>For</b> <strike>Mercenary</strike> All - <b>Research Name</b>: Hirelings</p>
                    <p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
                    <p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
                    <p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
                    <p><b>Old Formula</b>: (2 * log(1 + x)), where x is amount of coins you own.</p>
                    <p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
                    <br/>
                    <p><b>Old E3300</b> - <b>For</b> Mercenary - <b>Research Name</b>: Hirelings</p>
                    <p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
                    <p><b>Cost</b>: 629.2 DSxg (6.292e191)</p>
                    <p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
                    <p><b>Formula</b>: 2 * log10(x + 1)</p>
                    <br/>
                    <p><b>New E3300</b> - <b>For</b> Mercenary - <b>Research Name</b>: Estates</p>
                    <p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</p>
                    <p><b>Cost</b>: 629.2 DSxg (6.292e191)</p>
                    <p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.</p>
                    <br/>
                    <p><b>A400</b> - <b>For</b> All Factions But Mercenary - <b>Research Name</b>: Bloodspring</p>
                    <p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.</p>
                    <p><b>New Note</b>: Now works for Elite Bloodline when you're an elite faction.</p>
                    <p><b>Note</b>: Does not work with two Bloodlines of the same type.</p>
                    <br/>
                    <p><b>A1500</b> - <b>For</b> Druid,Dragon - <b>Research Name</b>: Sublimation</p>
                    <p><b>Old Effect</b>: Increase Max Mana based on the amount of Unique Buildings you own.</p>
                    <p><b>Old Formula</b>: (8 * x ^ 0.8), where x is Unique Buildings owned.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
                    <p><b>New Effect</b>: Also increase Faction Coin find chance by a multiplicative 250%</p>
                    <p><b>New Formula</b>: (40 * x * 0.8)</p>
                    <br/>
                    <p><b>W175</b> - <b>For</b> For Demon - <b>Research Name</b>: Overwhelm</p>
                    <p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.</p>
                    <p><b>Old Formula</b>: floor(0.75 * x ^ 0.75), where x is the amount of evil spells cast.</p>
                    <p><b>New Formula</b>: (8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.</p>
                    <br/>
                    <p><b>W1400</b> - <b>For</b> Dragon - <b>Research Name</b>: Cataclysm</p>
                    <p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.</p>
                    <p><b>Old Formula</b>: floor(25 * log10(1 + x) ^ 2.5), where x is clicks (this game).</p>
                    <p><b>New Formula</b>: (650 * x ^ 0.35), where x is clicks (this game).</p>
                    <br/>
                    <p><b>W3050</b> - <b>For</b> Mercenary - <b>Research Name</b>: Flanking</p>
                    <p><b>Effect</b>: Increases the production of buildings one tiers directly above or below a Unique Building based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.15 * x ^ 0.8), where x is assistants.</p>
                    <p><b>New Formula</b>: (0.2 * x ^ 0.7), where x is assistants.</p>
                </div>
            </div>
        </div>
        <?php include "../scripts/footer.html"; ?>
