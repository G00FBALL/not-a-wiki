<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6>All Changes and Additions</h6>
<p><b>V3.5 Date April 15, 2019</b></p>
<p><b>Bloodlines</b>: Now auto unlocked (No longer require 100 upgrades to unlock).</p>
<p><b>Currently Bugged</b>: Requires 100 Faction Upgrades purchased. (any 1 faction).</p>
<br/>
<p><b>Changed autoclick handler</b>: All autoclicks perform only once per second, but they increase click stat and reward as if they clicked X times (depending on the effect). This should greatly reduce lag and screen littering.</p>
<p><b>Faceless Unlock</b>: Octopus Shaped Bones now requires 36 hours in this reincarnation instead of this game.</p>
<br/>
<p><b>Trophies</b></p>
<p><b>4 new trophies added</p></b>
<p><b>1 Secret Trophy</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FutureLinkinSecretTrophy.png" align="middle"> Future Linkin</p></b>
<p><b>Requirements</b>: A2+, Abdicate with at least 150,000 Unique Buildings.</p>
<p><b>Cost</b>: 10 Sptg (1e115)</p>
<p><b>Effect</b>: Increase Faction Coin find chance based on time spent in the last game session.</p>
<p><b>Formula</b>: (214 + 0.03 * x  ^ 0.7), where x is time spent in last game.</p>
<p><b>Base</b>: 214%</p>
<br/>
<p><b>3 Magic Trophies</p></b>
<p><b>A2 Spell Upgrade and Trophies</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png" align="middle"> Chrono Loading</p></b>
<p><b>Requirements</b>: R125+, Cast Precognition with at least 10 Qi (1e19) mana regeneration.</p>
<p><b>Cost</b>: 10 Octg (1e118)</p>
<p><b>Effect</b>: A fraction of Precognition activity time in this Reincarnation is added to time spent in this game.</p>
<p><b>Formula</b>: (0.85 * x ^ 0.85), where x is Precognition activity time in this Reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PersistentEntropySpellUpgrade.png" align="middle"> Persistent Entropy</p></b>
<p><b>Requirements</b>: R125+, Cast Limited Wish 100 times within 30 minutes of a new game.</p>
<p><b>Cost</b>: 10 Octg (1e118)</p>
<p><b>Effect</b>: Also adds 150 casts to Limited wish formula.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityCraterSpellUpgrade.png" align="middle"> Reality Crater</p></b>
<p><b>Requirements</b>: R125+, Cast Infinite Spiral with at least 10 excavation resets this game.</p>
<p><b>Cost</b>: 10 Octg (1e118)</p>
<p><b>Effect</b>: Infinite Spiral also reduces excavation cost multiplier based on assistants owned.</p>
<p><b>Formula</b>: (0.001 * log(1 + x)), where x is assistants owned.</p>
<br/>
<hr>
<p><b>1 new Artifact</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PlanetaryForceArtifact.png" align="middle"> Planetary Force</p></b>
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
<p><b>Unique Buildings for Elite Factions added</p></b>
<p><b>Unique Building Quest</p></b>
<p><b>Makers</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOriginationQuest.png" align="middle"> Hall of Origination Quest</p></b>
<p>Hello, child! Your realm progress looks kinda... obsolete. Would you mind if we help improve your realm with our advanced perks? Please gather more Faction Coins to generate more energy!</p>
<p><b>Requirements</b>: R130+, Gather 5 TD (5e42) Faction Coins</p>
<p><b>Cost</b>: 1 QaQig (1e165)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOriginationUpgrade.png" align="middle"> Hall of Origination Upgrade</p></b>
<p>Upgrade Halls of Legends to Halls of Origination, boosting their production based on assistants owned and unlocking more unique perks for the building.</p>
<p><b>Formula</b>: (0.75 * x ^ 0.75), where x is assistants owned.</p>
<p><b>Requirements</b>: Hall of Origination Quest.</p>
<p><b>Cost</b>: (1 QiQig (1e168)</p>
<br/>
<p><b>Archon</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/NexusQuest.png" align="middle"> Nexus Quest</p></b>
<p>Hassar, Ruler. Our kind wants to establish better communications with you. Please build more Wizard Towers/Witch Conclaves/Alchemist Labs to convert.</p>
<p><b>Requirements</b>: R130+, Buy 25,000 Wizard Towers/Witch Conclaves/Alchemist Labs.</p>
<p><b>Cost</b>: 1 QaQig (1e165)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/NexusUpgrade.png" align="middle"> Nexus Upgrade</p></b>
<p>Upgrade Wizard Towers/Witch Conclaves/Alchemist Labs to Nexuses, boosting their production based on time spent as Order and unlocking more unique perks for the building.</p>
<p><b>Formula</b>: (75 * x ^ 0.75), where x is time spent as Order this R.</p>
<p><b>Requirements</b>: Nexus Quest.</p>
<p><b>Cost</b>: (1 QiQig (1e168)</p>
<br/>
<p><b>Djinn</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PavilionQuest.png" align="middle"> Pavilion Quest</p></b>
<p>Greetings. You will have the honor of hosting our people. Cover your realm in Chaos magic for us!</p>
<p><b>Requirements</b>: R130+, 5 days of chaos spells this game</p>
<p><b>Cost</b>: 1 QaQig (1e165)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PavilionUpgrade.png" align="middle"> Pavilion Upgrade</p></b>
<p>Upgrade Orcish Arena/Stone Pillars/Knights Jousts to Pavilions, boosting their production based on spells cast in this Reincarnation and unlocking more unique perks for the building.</p>
<p><b>Formula</b>: (10 * x ^ 0.5), where x is spells cast this R.</p>
<p><b>Requirements</b>: Pavilion Quest.</p>
<p><b>Cost</b>: (1 QiQig (1e168)</p>
<br/>
<hr>
<p><b>Elite Bloodlines added</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonBloodline.png" align="middle"> Archon</p></b>
<p><b>Requirements</b>: R130+</p>
<p><b>Effect</b>: Gain additional research slots based on time spent this game.</p>
<p><b>Formula</b>: (1 + floor(0.5 * ((1 + x / 10800) ^ 0.5 - 1))), where x is time spent this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnBloodline.png" align="middle"> Djinn</p></b>
<p><b>Requirements</b>: R130+</p>
<p><b>Effect</b>: Gain a new spell that costs 500,000 mana and lasts 1 minute as a fixed duration. Each time you cast it, it activates a vanilla or primary alignment spell at tier 7.</p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/CatalystSpell.png"></p></b>
<p><b>Notes</b>
<p><b>1</b>. Spell comes with tier bonus.
<p><b>2</b>. Choosing this Bloodline or having/buying A400 with Djinn gives you the vanilla spell upgrades that enable the challenge reward when bought.</p>
<p><b>3</b>. Cannot cast a spell that is already active
<p><b>4</b>. The Spell Pool is 8 for Neutral factions (No Gem Grinder), 7 for Good/Evil (-1 faction and -1 alignment spell)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersBloodline.png" align="middle"> Makers</p></b>
<p><b>Requirements</b>: R130+</p>
<p><b>Effect</b>: Increase your Set power based on faction coins collected this game.</p>
<p><b>Formula</b>: (0.75 * log10(1 + x) ^ 1.5), where x is coins collected this game.</p>
<p><b>Note</b> Includes Dwarf 5.</p>
<br/>
<hr>
<p><b>Elite Lineages added</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonLineage.png" align="middle"> Archon Lineage</p></b>
<p><b>Requirements</b>: R130+</p>
<p><b>Cost</b>: 400 Angel, Undead Royal Exchanges</p>
<p><b>Effect</b>: Increase Faction Coin find chance multiplicatively by 25% per level.</p>
<br/>
<p><b>Level 5</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk1.png" align="middle"> Archon Perk 1</p></b>
<p><b>Requirements</b>: Reach Lineage Level 5.</p>
<p><b>Effect</b>: While using Archon Bloodline, increase production of Elite Unique Buildings based on maximum mana.</p>
<p><b>Formula</b>: (0.8 * x ^ 0.8), where x is maximum mana.</p>
<br/>
<p><b>Level 10</b></p>
<p><b>Requirements</b>: Reach Lineage Level 10.</p>
<p><b>Effect</b>: x50 more Angel and Undead Faction Coin find chance.</p>
<br/>
<p><b>Level 15</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk2.png" align="middle"> Archon Perk 2</p></b>
<p><b>Requirements</b>: Reach Lineage Level 15.</p>
<p><b>Effect</b>: Unlocks Archon Lineage Challenge.</p>
<p><b>Challenge</b>: Have at least 30B (3e10) mana regeneration within 45 seconds of a new run.</p>
<p><b>Effect</b>: Unlocks Faction spell. (Precognition).</p>
<br/>
<p><b>Level 20</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk3.png" align="middle"> Archon Perk 3</p></b>
<p><b>Requirements</b>: Reach Lineage Level 20.</p>
<p><b>Effect</b>: Increase mana regeneration by 3% per 1000 Unique Buildings.</p>
<br/>
<p><b>Level 30</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk4.png" align="middle"> Archon Perk 4</p></b>
<p><b>Requirements</b>: Reach Lineage Level 30.</p>
<p><b>Effect</b>: Precognition also effects trophies, gems owned and faction coins found.</p>
<br/>
<p><b>Level 50</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk5.png" align="middle"> Archon Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Unique Buildings count 100% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnLineage.png" align="middle"> Djinn Lineage</p></b>
<p><b>Requirements</b>: R130+</p>
<p><b>Cost</b>: 400 Fairy, Demon Royal Exchanges</p>
<p><b>Effect</b>: Increase production bonus from gems by a multiplicative 8% for every level.</p>
<br/>
<p><b>Level 5</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk1.png" align="middle"> Djinn Perk 1</p></b>
<p><b>Requirements</b>: Reach Lineage Level 5.</p>
<p><b>Effect</b>: Catalyst casts in this game also increase Limited Wish counter for the purpose of increasing its bonus.</p>
<br/>
<p><b>Level 10</b></p>
<p><b>Requirements</b>: Reach Lineage Level 10.</p>
<p><b>Effect</b>: x50 more Fairy and Demon Faction Coin find chance.</p>
<br/>
<p><b>Level 15</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk2.png" align="middle"> Djinn Perk 2</p></b>
<p><b>Requirements</b>: Reach Lineage Level 15.</p>
<p><b>Effect</b>: Unlocks Djinn Lineage Challenge.</p>
<p><b>Challenge</b>: Have at least 1B (1e9) assistants within 45 seconds of a new run.</p>
<p><b>Effect</b>: Unlocks Faction spell. (Limited Wish).</p>
<br/>
<p><b>Level 20</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk3.png" align="middle"> Djinn Perk 3</p></b>
<p><b>Requirements</b>: Reach Lineage Level 20.</p>
<p><b>Effect</b>: Activity time for all spells counts 2.5% more for every 1000 Unique Buildings.</p>
<br/>
<p><b>Level 30</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk4.png" align="middle"> Djinn Perk 4</p></b>
<p><b>Requirements</b>: Reach Lineage Level 30.</p>
<p><b>Effect</b>: When Limited Wish is cast, gain +888 to automatic clicks this reincarnation.</p>
<br/>
<p><b>Level 50</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk5.png" align="middle"> Djinn Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Mana regeneration counts 200% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineage.png" align="middle"> Makers Lineage</p></b>
<p><b>Requirements</b>: R130+</p>
<p><b>Cost</b>: 400 Elven, Goblin Royal Exchanges</p>
<p><b>Effect</b>: Increase Royal Exchange bonus by multiplicative 8% per level.</p>
<br/>
<p><b>Level 5</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk1.png" align="middle"> Makers Perk 1</p></b>
<p><b>Requirements</b>: Reach Lineage Level 5.</p>
<p><b>Effect</b>: While using Makers Bloodline, the requirement for Free Excavation Reset is reduced by 25%.</p>
<br/>
<p><b>Level 10</b></p>
<p><b>Requirements</b>: Reach Lineage Level 10.</p>
<p><b>Effect</b>: x50 more Elven and Goblin Faction Coin find chance.</p>
<br/>
<p><b>Level 15</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk2.png" align="middle"> Makers Perk 2</p></b>
<p><b>Requirements</b>: Reach Lineage Level 15.</p>
<p><b>Effect</b>: Unlocks Makers Lineage Challenge.</p>
<p><b>Challenge</b>: Have atleast 350000 buildings within 45 seconds of a new run.</p>
<p><b>Effect</b>: Unlocks Faction spell. (Infinite Spiral).</p>
<br/>
<p><b>Level 20</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk3.png" align="middle"> Makers Perk 3</p></b>
<p><b>Requirements</b>: Reach Lineage Level 20.</p>
<p><b>Effect</b>: Increase Offline bonus by 10% per 500 Unique Buildings.</p>
<br/>
<p><b>Level 30</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk4.png" align="middle"> Makers Perk 4</p></b>
<p><b>Requirements</b>: Reach Lineage Level 30.</p>
<p><b>Effect</b>: While infinite spiral is active, production of all buildings increases by 1% each second, up to its maximum duration.</p>
<br/>
<p><b>Level 50</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk5.png" align="middle"> Makers Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Excavations count 200% more.</p>
<br/>
<hr>
<p><b>Perk 5 for all other Lineages added</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk5.png" align="middle"> Fairy Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Assistants count 300% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk5.png" align="middle"> Elven Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Faction Coins count 1000% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk5.png" align="middle"> Angel Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Spells cast count 1000% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk5.png" align="middle"> Demon Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Trophies count 1000% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk5.png" align="middle"> Goblin Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Faction Coin find chance counts 1000% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk5.png" align="middle"> Undead Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Reincarnation Power Counts Reincarnations as 100% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk5.png" align="middle"> Druid Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Mana produced counts 1000% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk5.png" align="middle"> Faceless Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Time passed counts 100% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk5.png" align="middle"> Titan Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Royal Exchanges count 500% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenPerk5.png" align="middle"> Dwarf Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Buildings count 100% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk5.png" align="middle"> Drow Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Maximum Mana counts 300% more.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk5.png" align="middle"> Dragon Perk 5</p></b>
<p><b>Requirements</b>: Reach Lineage Level 50.</p>
<p><b>Effect</b>: Lineage levels count 100% more.</p>
<br/>
<hr>
<p><b>Changes</b></p>
<p><b>Lineage</b></p>
<p><b>Fairy</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk4.png" align="middle"> Fairy Perk 4</p></b>
<p><b>Old Effect</b>: While Fairy Chanting is active, further increase your temporary assistants by 10% every 5 minutes of its duration.</p>
<p><b>Old Formula</b>: (10 * Floor (x/300)), where x is Fairy Chanting duration in seconds.</p>
<p><b>New Effect</b>: While Fairy Chanting is active, further increase your temporary assistants by 8% every 5 minutes of its duration.</p>
<p><b>New Formula</b>: (8 * Floor (x/300)), where x is Fairy Chanting duration in seconds.</p>
<br/>
<p><b>Elven</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenLineage.png" align="middle"> Elven Lineage</p></b>
<p><b>Old Effect</b>: Also increase clicks count by a multiplicative 5000% per level.</p>
<p><b>New Effect</b>: Also increases clicks count by 5000% per level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk3.png" align="middle"> Elven Perk 3</p></b>
<p><b>Old Effect</b>: Increase base clicking reward by 5% of Unique Building production for every 777 of them.</p>
<p><b>Old Formula</b>: 5 * floor(x / 777)</p>
<p><b>New Effect</b>: Increase base clicking reward by 15% of Unique Building production for every 777 of them.</p>
<p><b>New Formula</b>: 15 * floor(x / 777)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk4.png" align="middle"> Elven Perk 4</p></b>
<p><b>Old Effect</b>: When Moon Blessing is active, multiply your fc chance by 500%.</p>
<p><b>New Effect</b>: When Moon Blessing is active, multiply your fc chance by 1500%.</p>
<br/>
<p><b>Goblin</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinLineage.png" align="middle"> Goblin Lineage</p></b>
<p><b>Old Effect</b>: Increase production bonus from Gems by a multiplicative 6.5% for every level.</p>
<p><b>New Effect</b>: Increase Tax Collection worth in seconds by 25 for every level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk1.png" align="middle"> Goblin Perk 1</p></b>
<p><b>Old Effect</b>: +120 seconds of production for tax collection.</p>
<p><b>New Effect</b>: While Goblin's Greed is active, Tax Collections are worth more seconds multiplicatively based on the amount of assistants you own.</p>
<p><b>Formula</b>: (0.35 * x ^ 0.35), where x is amount of assistants you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk4.png" align="middle"> Goblin Perk 4</p></b>
<p><b>Old Effect</b>: When Goblin's Greed is active, increase seconds worth of Tax Collections based on assistants owned.</p>
<p><b>Old Formula</b>: (0.45 * x ^ 0.45), where x is assistants owned.</p>
<p><b>New Effect</b>: Goblin's Greed stops producing Faction Coins instantly. Instead, increase your Faction Coin find chance based on the Gems required for your next Reincarnation.</p>
<p><b>New Formula</b>: (20 + ln(1 + x) ^ 1.85), where x is Gems required for your next Reincarnation.</p>
<br/>
<p><b>Undead</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk4.png" align="middle"> Undead Perk 4</p></b>
<p><b>Old Effect</b>: When offline, Night Time production is added to offline bonus. Night Time activity time counts 100% more for all purposes.</p>
<p><b>New Effect</b>: Increase Offline Bonus based on Night Time activity time in this game.</p>
<p><b>Formula</b>: (7 * x ^ 0.7), where x is Night Time activity time this game.</p>
<br/>
<p><b>Demon</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonLineage.png" align="middle"> Demon Lineage</p></b>
<p><b>Old Effect</b>: Trophies count 30% more per level.</p>
<p><b>New Effect</b>: Increase Non-Unique Buildings production based on Lineage level. Does not suffer from Ascension penalties.</p>
<p><b>Formula</b>: (100 * x ^ 2), where x is Lineage level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk1.png" align="middle"> Demon Perk 1</p></b>
<p><b>Old Effect</b>: While using Demon Bloodline, maximum mana is increased by 25 for every 6 trophies you unlocked.
<p><b>New Effect</b>: While using Demon Bloodline, increase Maximum Mana based on trophies unlocked.</p>
<p><b>New Formula</b>: (20 * x ^ 1.25), where x is trophies unlocked.</p>
<br/>
<p><b>Druid</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidLineage.png" align="middle"> Druid Lineage</p></b>
<p><b>Old Effect</b>: Increase spell duration by 2% per level.</p>
<p><b>New Effect</b>: Each lineage level counts as 2 additional Reincarnations.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk1.png" align="middle"> Druid Perk 1</p></b>
<p><b>Effect</b>: Increases Non-Unique buildings production based on time spent in this game.</p>
<p><b>Old Formula</b>: (0.15 * x ^ 1.25), where x is seconds this game.</p>
<p><b>New Formula</b>: (0.25 * x ^ 1.25), where x is seconds this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk3.png" align="middle"> Druid Perk 3</p></b>
<p><b>Old Effect</b>: While Grand Balance is active, increase the production of its targets based on the amount of Unique Buildings you own.</p>
<p><b>Old Formula</b>: (0.5 * floor(x/750)) ^y), where x is Unique Buildings and y is spell tier.</p>
<p><b>New Effect</b>: Increase Grand Balance bonus based on the amount of Unique Buildings you own.</p>
<p><b>Added Effect</b>: One ascension penalty is removed.</p>
<p><b>New Formula</b>: ((12000 * (x / 1000))), where x is amount of Unique Buildings you own.</p>
<br/>
<p><b>Faceless</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk4.png" align="middle"> Faceless Perk 4</p></b>
<p><b>Effect</b>: Brainwave headstart time is increased by 1000%.</p>
<p><b>New Effect</b>: Remove 1 Ascension penalty from Brainwave on Unique Buildings.</p>
<br/>
<p><b>Dwarf</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarfLineage.png" align="middle"> Dwarf Lineage</p></b>
<p><b>Old Effect</b>: Excavations and Artifacts count 10% more per level.</p>
<p><b>New Effect</b>: Increase the base production of each building based on their tier (additively). The bonus is multiplied by the Lineage level.</p>
<p><b>Formula</b>: (L * 10 ^ (0.2 * T  ^ 1.4)), where L is Lineage level and T is Building tier.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk3.png" align="middle"> Dwarven Perk 3</p></b>
<p><b>Old Effect</b>: Increase Faction Coin find chance with excavations by 250% for every 500 Unique Building.</p>
<p><b>New Effect</b>: Excavations and Artifacts count 1% more for every 1500 Unique Buildings.</p>
<br/>
<p><b>Drow</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowLineage.png" align="middle"> Drow Lineage</p></b>
<p><b>Old Effect</b>: Increase offline production bonus by a multiplicative 75% for every level.</p>
<p><b>New Effect</b>: Increase offline production bonus based on Lineage level. Does not suffer from Ascension penalties.</p>
<p><b>Formula</b>: (150 * L ^ 2.25), where x is Lineage level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk3.png" align="middle"> Drow Perk 3</p></b>
<p><b>Old Effect</b>: Increase offline production by 10.0% for every 500 Unique Building.</p>
<p><b>New Effect</b>: Increase Faction Coin find chance by 5% per 3000 unique buildings.</p>
<hr>
<p><b>Faction Upgrades</b></p>
<p><b>Elite Prestige Trade Treaties</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonTradeTreaty.png" align="middle"> Archon Trade Treaty</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnTradeTreaty.png" align="middle"> Djinn Trade Treaty</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersTradeTreaty.png" align="middle"> Makers Trade Treaty</p></b>
<p><b>Old Cost</b> 1 Dc (1e33) Faction Coins.</p>
<p><b>New Cost</b> 1 No (1e30) Faction Coins.</p>
<br/>
<p><b>Elite Prestige Faction Upgrades</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PurityofForm.png" align="middle"> Purity of Form (AR10)</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/WishesComeTrue.png" align="middle"> Wishes Come True (DJ10)</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ValuableAntiquity.png" align="middle"> Valuable Antiquity (MK10)</p></b>
<p><b>Old Cost</b> 1 QiQig (1e168)</p>
<p><b>New Cost</b> 100 QiQig (1e170)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AbsoluteHierarchy.png" align="middle"> Absolute Hierarchy (AR11)</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/BluePowder.png" align="middle"> Blue Powder (DJ11)</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/BedrockFoundations.png" align="middle"> Bedrock Foundations (MK11)</p></b>
<p><b>Old Cost</b>10 QiQig (1e169)</p>
<p><b>New Cost</b> 1 SxQig (1e171)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EssenceExtractor.png" align="middle"> Essence Extractor (AR12)</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AcademicProdigy.png" align="middle"> Academic Prodigy (DJ12)</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble (MK12)</p></b>
<p><b>Old Cost</b> 100 QiQig (1e170)</p>
<p><b>New Cost</b> 10 SxQig (1e172)</p>
<br/>
<p><b>Elven</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SylvanTreasureFrillsFactionUpgrade.png" align="middle"> Sylvan Treasure Frills (EL3)</p></b>
<p><b>Old Effect</b>: Increase clicking reward by 80% of your total production.</p>
<p><b>New Effect</b>: Increase clicking reward by 50% of your total production.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SecretClickingTechniquesFactionUpgrade.png" align="middle"> Secret Clicking Techniques (EL6)</p></b>
<p><b>Effect</b>: Increases the production of all buildings based on your total of clicks.</p>
<p><b>Old Formula</b>: (ln(1 + x) ^ 2.5)%, where x is your Treasure Clicks (Total) stat.</p>
<p><b>New Formula</b>: (2 * x ^ 0.4)%, where x is your Treasure Clicks (Total) stat.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiplomacyFactionUpgrade.png" align="middle"> Elven Diplomacy (EL7)</p></b>
<p><b>Old Effect</b>: Increases the production of all buildings based on your chance to find Faction Coins.</p>
<p><b>Old Formula</b>: (2 * x), where x is your chance to find Faction Coins.</p>
<p><b>New Effect</b>: Increase click count based on Faction Coins found in this game.</p>
<p><b>New Formula</b>: (2 * ln(1 + x) ^ 2), where x is Faction Coins found in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" align="middle"> Wooden Dice (EL10)</p></b>
<p><b>New Effect added</b>: When Elven Luck triggers, 100000 automatic Tax Collections are cast.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" align="middle"> Camouflage (EL11)</p></b>
<p><b>Old Effect</b>: Assistants count 1,500% more for all purposes and increase assistant production based on assistant amount.</p>
<p><b>New Effect</b>: Assistants and Clicks count 1,500% more for all purposes and increase assistant production based on assistant amount.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png" align="middle"> Elven Discipline (EL12)</p></b>
<p><b>Old Effect</b>: Increase mana regeneration additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
<p><b>New Effect</b>: Increase assistants additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
<p><b>Formula</b>: (100 * ln(1 + x) ^ 1.35), where x is Faction Coins found in this game.(additively)</p>
<p><b>Formula</b>: (1.45 * ln(x)), where x is Faction Coins found in this game.(multiplicatively)</p>
<p><b>Note</b>: Formulas did not change.</p>
<br/>
<p><b>Angel</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchangelFeathersFactionUpgrade.png" align="middle"> Archangel Feathers (AN6)</p></b>
<p><b>Old Effect</b>: Increase Mana production by 40%.</p>
<p><b>New Effect</b>: Increase Mana production by 60%.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Heaven'sBrilliance.png" align="middle"> Heaven's Brilliance (AN10)</p></b>
<p><b>Old Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. All Dragon's Breath effects are increased based on the amount of Holy Sites you own.</p>
<p><b>Old Formula</b>: (0.01 * log10(1 + x)), where x is T7 spells.</p>
<p><b>Dragon's Breath Old Formula:</b> (0.6 * x ^ 0.6), where x is amount of Holy Sites owned.</p>
<p><b>New Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. Gem Grinder and all Dragon's Breath effects are increased based on the amount of Holy Sites you own.</p>
<p><b>New Formula</b>: (0.01 * ln(1 + x)), where x is amount of Holy Sites owned.</p>
<p><b>Gem Grinder and Dragon's Breath New Formula</b>: (0.65 * x ^ 0.65), where x is amount of Holy Sites owned.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelicFortitude.png" align="middle"> Angelic Fortitude (AN11)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the sum of all your spells' activity time this R.</p>
<p><b>Old Formula</b>: (0.04 * x ^ 0.675), where x is seconds in current spells.</p>
<p><b>New Formula</b>: (0.07 * x ^ 0.7), where x is seconds in current spells.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png" align="middle"> Seraphim Feathers (AN12)</p></b>
<p><b>New Name</b>: Seraphim Wings
<p><b>Old Effect</b>: Increase mana regeneration by 80%.</p>
<p><b>New Effect</b>: Increase Mana Regeneration, Faction Coin find chance and assistants by 160%.</p>
<br/>
<p><b>Goblin</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoneyisMagic.png" align="middle"> Money is Magic (GB11)</p></b>
<p><b>Effect</b>: Increase mana regeneration based on the amount of Tax Collections cast in this game.</p>
<p><b>Old Formula</b>: (2 * (ln(x) ^ 1.2)), where x is amount of Tax Collections cast.</p>
<p><b>New Formula</b>: (2 * (ln(1 + x) ^ 1.2)), where x is amount of Tax Collections cast.</p>
<br/>
<p><b>Undead</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EternalServitude.png" align="middle"> Eternal Servitude (UD12)</p></b>
<p><b>Old Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
<p><b>Old Formula</b>: (10000 + 0.75 * x ^ 1.5), where x is seconds this game.</p>
<p><b>New Effect</b>: Increase base production of Undercity by +10000, and then increase this effect based on time spent in this Reincarnation.</p>
<p><b>New Formula</b>: (10000 + 1.3 * x ^ 1.3), where x is time spent this Reincarnation.</p>
<p><b>Added Effect</b>: Also effects Flesh Workshops.</p>
<br/>
<p><b>Demon</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonicFury.png" align="middle"> Demonic Fury (DM11)</p></b>
<p><b>Effect</b>: Multiplicatively increase faction coin find chance based on least time spent between Evil and Chaos this R.</p>
<p><b>Old Formula</b>: (0.12 * min(x, y) ^ 0.7), where x is evil time in seconds and y is chaos time in seconds.</p>
<p><b>New Formula</b>: (0.25 * min(x,y) ^ 0.75), where x is evil time in seconds and y is chaos time in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" align="middle"> Devastation (DM12)</p></b>
<p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
<p><b>Old Formula</b>: (3.5 * ln(1 + x) ^ 3.5), where x is mana regen.</p>
<p><b>New Formula</b>: (4.5 * ln(1 + x) ^ 4.5), where x is mana regen.</p>
<br/>
<p><b>Druid</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" align="middle"> Lunar Cycle (DD11)</p></b>
<p><b>Old Effect</b>: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.</p>
<p><b>Old Formula</b>: ((x + y) ^ 0.65 * (1 / (1 + abs(x - 2y))) ^ 0.25), where x is time this game in seconds and y is offline time this game in seconds.</p>
<p><b>New Effect</b>: Increase Maximum Mana additively based on time spent online in this game.</p>
<p><b>Online Formula</b>: (50 * x ^ 0.95), where x is time spent online in this game.</p>
<p><b>New Effect</b>: Increase Maximum Mana multiplicatively based on time spent offline in this game.</p>
<p><b>Offline Formula</b>: (0.5 * x ^ 0.5), where x is time spent offline in this game.</p>
<br/>
<p><b>Faceless</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DimensionDoor.png" align="middle"> Dimension Door (FC12)</p></b>
<p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
<p><b>Old Formula</b>: (0.013 * x ^ 0.67), where x is highest max mana this R.</p>
<p><b>New Formula</b>: (0.01 * x ^ 0.65), where x is highest max mana this R.</p>
<br/>
<p><b>Dwarf</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenAleFactionUpgrade.png" align="middle"> Dwarven Ale (DN1)</p></b>
<p><b>Effect</b>: Increase the production of all buildings by 1% per Inn you own.</p>
<p><b>New Effect</b>: Increase the production of all buildings by 0.8% per Inn you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MiningProdigiesFactionUpgrade.png" align="middle"> Mining Prodigies (DN3)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Excavations you made.</p>
<p><b>Old Formula</b>: (10 * x ^ 0.9)%, where x is the number of excavations you've purchased.</p>
<p><b>New Formula</b>: (9 * x ^ 0.9)%, where x is the number of excavations you've purchased.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/BattlehammersFactionUpgrade.png" align="middle"> Battlehammers (DN7)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of Dwarven Coins found in this game.</p>
<p><b>Old Formula</b>: (1.5 * ln(1 + x) ^ 3)%, where x is your Dwarven Coins Gained (This Game) stat.</p>
<p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 2.5))%, where x is your Dwarven Coins Gained (This Game) stat.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicResistanceFactionUpgrade.png" align="middle"> Magic Resistance (DN8)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration rate.</p>
<p><b>Old Formula</b>: (80 * x ^ 0.85)%, where x is your Mana per Second stat.</p>
<p><b>New Formula</b>: (80 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SolidityUnionUpgrade1.png" align="middle"> Solidity (DN10)</p></b>
<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of High Bastion you own.</p>
<p><b>Old Formula</b>: (1.55 * x ^ 0.55), where x is High Bastion.</p>
<p><b>New Formula</b>: (1.6 * x ^ 0.6), where x is High Bastion.</p>
<br/>
<p><b>Drow</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UnderworldTyrannyFactionUpgrade.png" align="middle"> Underworld Tyranny (DW1)</p></b>
<p><b>Old Effect</b>: Increase the production of all buildings based on your total time spent being Evil.</p>
<p><b>Old Formula</b>: (15 * floor(x / 3600) ^ 0.7)%, where x is your Time Spent Being Evil (Total) stat in seconds.</p>
<p><b>New Effect</b>: Increase the production of all buildings based on your total time spent being Evil in this Reincarnation.</p>
<p><b>New Formula</b>: (x ^ 0.7), where x is your Time Spent Being Evil (Total) stat in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ManaAddictsFactionUpgrade.png" align="middle"> Mana Addicts (DW4)</p></b>
<p><b>Effect</b>: Mana regeneration increases over time.</p>
<p><b>Old Formula</b>: (0.25 * x ^ 0.55), where x is your Play Time (This Game) stat in seconds.</p>
<p><b>New Formula</b>: (2.5 + 0.25 * x ^ 0.55), where x is your Play Time (This Game) stat in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodSacrificesFactionUpgrade.png" align="middle"> Blood Sacrifices (DW5)</p></b>
<p><b>Effect</b>: Increase the production of all buildings by 2.5% per Dark Temple you own.</p>
<p><b>New Effect</b>: Increase the production of all buildings by 3% per Dark Temple you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiderGodsFactionUpgrade.png" align="middle"> Spider Gods (DW7)</p></b>
<p><b>Effect</b>: Increase the production of Dark Temples by 5% for each other building you own.</p>
<p><b>New Effect</b>: Increase the production of Dark Temples by 8% for each other building you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ProfessionalAssassinsFactionUpgrade.png" align="middle"> Professional Assassins (DW8)</p></b>
<p><b>Effect</b>: Increase the production of assistants based on the amount of royal exchanges you purchased.</p>
<p><b>Old Formula</b>: round(10 * x ^ 0.8)%, where x is your Royal Exchanges Made stat.</p>
<p><b>New Formula</b>: round(9 * x * 0.9)%, where x is your Royal Exchanges Made stat.</p>
<br/>
<p><b>Dragon</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SharpClawsFactionUpgrade.png" align="middle"> Sharp Claws (DG6)</p></b>
<p><b>Effect</b>: Gain additional assistants based on clicks made in this game.</p>
<p><b>Old Formula</b>: floor(0.1 * ln(1 + x)^2.75), where x is clicks made in this game.</p>
<p><b>New Formula</b>: (1.35 * x ^0.35), where x is clicks made in this game.</p>
<br/>
<p><b>Mecernary</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyCrusadersMercenaryUpgrade.png" align="middle"> Holy Crusaders</p></b>
<p><b>Effect</b>: You gain additional Crusader Assistants based on the amount of spells cast in this game.</p>
<p><b>Old Formula</b>: (0.5 * ((1 + 0.2 * x) ^ 0.5 - 1)), where x is amount of spells cast in this game.</p>
<p><b>New Formula</b>: (0.5 * ((1 + 0.2 * x) ^ (0.1 + A) - 1)), where x is amount of spells cast in this game and A is Ascenion.</p>
<br/>
<p><b>Effect</b>: Also increase clicking reward by 1000% per active spell.</p>
<p><b>Old Formula</b>: (1000 * x), where x is active spells.</p>
<p><b>New Formula</b>: ((1000 * x) ^ (1 + A)), where x is active spells and A is Ascenion.</p>
<br/>
<p><b>Archon</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/CosmicResonance.png" align="middle"> Cosmic Resonance (AR3)</p></b>
<p><b>Effect</b>: Increase Royal Exchange bonus based on clicks made in this Reincarnation.</p>
<p><b>Old Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is clicks made.</p>
<p><b>New Formula</b>: (0.5 * x ^ 0.5), where x is clicks made.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPride.png" align="middle"> Archon Pride (AR5)</p></b>
<p><b>Old Effect</b>: Increase assistants based on time spent as your least used faction.</p>
<p><b>Old Formula</b>: (50 + 0.3 * x ^ 0.7), where x is least used faction.</p>
<p><b>New Effect</b>: Increase assistants based on your current Lineage level.</p>
<p><b>New Formula</b>: (1.25 * x ^ 1.25), where x is your current Lineage level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/StrangeAttraction.png" align="middle"> Strange Attraction (AR8)</p></b>
<p><b>Effect</b>: Increase Faction Coin find chance based on the activity time of your least used spell.(excluding Catalyst)</p>
<p><b>Old Formula</b>: (25 + (0.25 * x ^ 0.75)), where x is spell with least activity time this R in seconds.</p>
<p><b>New Formula</b>: (50 + 0.75 * x ^ 0.75), where x is spell with least activity time this R in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArcaneCore.png" align="middle"> Arcane Core (AR9)</p></b>
<p><b>Old Effect</b>: Increase the production of all buildings based on mana produced in this game.</p>
<p><b>New Effect</b>: Increase the production of all buildings based on mana produced in this R.</p>
<p><b>Old Formula</b>: (2.35 * log10(1 + x) ^ 2.35), where x is mana produced in this game.</p>
<p><b>New Formula</b>: (log10(1 + x) ^ 2.5), where x is mana produced in this R.</p>
<br/>
<p><b>Makers</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HandoftheMakers.png" align="middle"> Hand of the Makers (MK1)</p></b>
<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
<p><b>Old Formula</b>: (3.5 * log10(1 + x) ^ 1.5), where x is clicks made in this Reincarnation.</p>
<p><b>New Formula</b>: (0.5 * x ^ 0.5), where x is clicks made in this Reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/StoneServants.png" align="middle"> Stone Servants (MK7)</p></b>
<p><b>Renamed</b>: Stonecarving
<p><b>Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
<p><b>Old Formula</b>: (2.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
<p><b>New Formula</b>: (0.03 * (x * (y + z)) ^ 0.7), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble (MK12)</p></b>
<p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
<p><b>Old Formula</b>: (3 * ln(x) ^ 3), where x is clicks made this Reincarnation.</p>
<p><b>New Formula</b>: (2.5 * x ^ 0.5), where x is clicks made this Reincarnation.</p>
<br/>
<hr>
<p><b>Faction Unions</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairiesUnion.png" align="middle"> Fairies Union</p></b>
<p><b>Effect</b>: Increase assistant production based on amount of Enchanted Fields, Inns and Blacksmiths if building count is even, or all other buildings if building count is odd.</p>
<p><b>Old Formula</b>: (15 * x ^ 0.475), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
<p><b>Old Formula</b>: (15 * x ^ 0.475), where x is T4-T11 Buildings (If building count is odd)</p>
<p><b>New Formula</b>: (15 * x ^ 0.5), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
<p><b>New Formula</b>: (15 * x ^ 0.5), where x is T4-T11 Buildings (If building count is odd)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUnion.png" align="middle"> Elven Union</p></b>
<p><b>Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
<p><b>Formula</b>: (3 * ln(x) ^ 3), where x is faction coins found in this Reincarnation.</p>
<p><b>New Effect Added</b>: Also autoclicks 10 times per second.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" align="middle"> Angels Union</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
<p><b>Old Formula</b>: (4 * ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
<p><b>New Formula</b>: (4 * ln(x) ^ 2.25 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUnion.png" align="middle"> Undead Union</p></b>
<p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
<p><b>Old Formula</b>: (75 * log10(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
<p><b>New Formula</b>: (75 * ln(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinsUnion.png" align="middle"> Goblins Union</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
<p><b>Old Formula</b>: (0.4 * x ^ 0.4), where x is spells cast in this game.</p>
<p><b>New Formula</b>: (0.45 * x ^ 0.45), where x is spells cast in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" align="middle"> Druids Union</p></b>
<p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
<p><b>Old Formula</b>: (3 * x * y ^ 1.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<p><b>New Formula</b>: (3 * x ^ 1.03 * y ^ 1.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessUnion.png" align="middle"> Faceless Union</p></b>
<p><b>Effect</b>: Increase assistants additively based on amount of time spent as a random faction. Updates every 3 minutes.</p>
<p><b>Old Formula</b>: (50 * x ^ 0.5), where x is random faction all time in seconds.</p>
<p><b>New Formula</b>: (55 * x ^ 0.55), where x is random faction all time in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"> Dwarven Union</p></b>
<p><b>Proof of Balance</b>
<p><b>Effect</b>: Increase mana regen based on clicks made this reincarnation.</p>
<p><b>Old Formula</b>: (1.25 * ln(1 + x) ^ 2.45), where x is amount of clicks made this reincarnation.</p>
<p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 2.5), where x is amount of clicks made this reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonUnion.png" align="middle"> Archon Union</p></b>
<p><b>Old Requirement</b>: R130</p>
<p><b>New Requirement</b>: R130, Unique Building</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnUnion.png" align="middle"> Djinn Union</p></b>
<p><b>Old Requirement</b>: R130</p>
<p><b>New Requirement</b>: R130, Unique Building</p>
<p><b>Effect</b>: Maelstrom bonuses scale faster.</p>
<p><b>Old Formula</b>: x1.15 multiplier to exponent of maelstrom formulas.</p>
<p><b>New Formula</b>: x1.1 multiplier to exponent of maelstrom formulas.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUnion.png" align="middle"> Makers Union</p></b>
<p><b>Old Requirement</b>: R130</p>
<p><b>New Requirement</b>: R130, Unique Building</p>
<br/>
<hr>
<p><b>Advanced Heritage</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedUndeadHeritage.png" align="middle"> Advanced Undead Heritage</p></b>
<p><b>Effect</b>: Assistants count more based on your Offline Bonus.</p>
<p><b>Old Formula</b>: (0.018 * ln(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
<p><b>New Formula</b>: (0.025 * ln(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedTitanHeritage.png" align="middle"> Advanced Titan Heritage</p></b>
<p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
<p><b>Old Formula</b>: (0.2 * ln(x) ^ 1.5)%, where x is Royal Exchanges purchased.</p>
<p><b>New Formula</b>: (0.85 * ln(1 + x) ^ 1.15)%, where x is Royal Exchanges purchased.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDwarvenHeritage.png" align="middle"> Advanced Dwarven Heritage</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of excavations and excavation resets. (This R).</p>
<p><b>Old Formula</b>: (0.01 * x ^ (0.85 + 0.01 * y))%, where x is excavations and y is excavation resets this R (ruby and free resets).</p>
<p><b>New Formula</b>: (0.025 * (x  * y) ^ 0.65)%, where x is excavations and y is excavation resets this R (ruby and free resets).</p>
<p><b>Note</b>: Reset count now starts from 1 (no more 0% bonus).
<hr>
<p><b>Faction Sets</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"> Fairy Set</p></b>
<p><b>Effect</b>: Increase Farm, Inn and Blacksmith production based on number of assistants owned.</p>
<p><b>Old Formula</b>: (0.75 * x ^ 0.75), where x is number of assistants owned.</p>
<p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is number of assistants owned.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"> Elven Set</p></b>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinSet.png" align="middle"> Goblin Set</p></b>
<p><b>Old Effect</b>: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.</p>
<p><b>Old Formula</b>: (0.1 * x ^ 0.7), where x is seconds this game.</p>
<p><b>New Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
<p><b>Formula Additively</b>: (70 * x ^ 0.7), where x is time spent in this game.</p>
<p><b>Formula Multiplicatively</b>: (0.5 * x ^ 0.5), where x is time spent in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"> Titan Set</p></b>
<p><b>Old Effect</b>: Increase Unique building production based on time spent this game.</p>
<p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is seconds this game.</p>
<p><b>New Effect</b>: Increase Royal Exchange Bonus additively and multiplicatively based on time spent in this game.</p>
<p><b>Formula Additively</b>: (0.3 * x ^ 0.7), where x is time spent in this game.</p>
<p><b>Formula Multiplicatively</b>: (0.45 * x  ^ 0.45), where x is time spent in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"> Faceless Set</p></b>
<p><b>Old Effect</b>: Increase production of all buildings based on highest amount of spells cast in a single game.</p>
<p><b>Old Formula</b>: (0.32 * x ^ 0.28), where x is number of spells cast.</p>
<p><b>New Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
<p><b>Formula</b>: (2.5 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"> Dwarven Set</p></b>
<p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
<p><b>Old Formula</b>: (2.5 * x ^ 0.75), where x is Royal Exchange bonus.</p>
<p><b>New Formula</b>: (2.25 * x ^ 0.75), where x is Royal Exchange bonus.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"> Drow Set</p></b>
<p><b>Old Effect</b>: Increase Mana Regeneration based on Evil spells cast (this R). (additive)</p>
<p><b>Old Formula</b>: (50 * x ^ 0.5), where x is total evil spells cast (this R).</p>
<p><b>New Effect</b>: Increase the production of Unique Buildings based on Evil spells cast in this Reincarnation.</p>
<p><b>New Formula</b>: (0.45 * x ^ 0.45), where x is total evil spells cast (this R).</p>
<br/>
<hr>
<p><b>Challenges</b></p>
<p><b>Fairy</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PixieMischiefChallenge.png" align="middle"> Pixie Mischief (FC1)</p></b>
<p><b>Effect</b>: You gain assistants based on the amount of Fairy affiliated (faction upgrades, heritage, bloodline, research) upgrades you own.</p>
<p><b>Old Formula</b>: (0.35 * x ^ 1.75), where x is amount of Fairy affiliated upgrades.</p>
<p><b>New Formula</b>: (2 * x), where x is amount of Fairy affiliated upgrades.</p>
<br/>
<p><b>Demon</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBurstChallenges.png" align="middle"> Hellfire Burst (Challenge Final Reward)</p></b>
<p><b>Old Effect</b>: Reduces Hellfire Blast mana cost based on the number of trophies you have unlocked.</p>
<p><b>Old Formula</b>: floor(0.25 * x), where x is the amount of trophies unlocked.</p>
<p><b>New Effect</b>: Hellfire Blast also counts Evil spells cast in this reincarnation to increase its bonus.</p>
<p><b>New Formula</b>: (0.1 * x), where x is evil spells cast in this reincarnation.</p>
<br/>
<p><b>Dragon</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SerpentQuellerChallenges.png" align="middle"> Serpent Queller (DC3)</p></b>
<p><b>Old Requirement</b>: Reincarnation 54, Completion of Titan, Druid, Faceless, Dwarven and Drow Challenge 3, Completion Dragon Challenge 2, Play as Faceless/Dragon, Have a combined total of <b>25</b> days played as faceless and dragons with a minimum of <b>8</b> days as each one.</p>
<p><b>New Requirement</b>: Reincarnation 54, Completion of Titan, Druid, Faceless, Dwarven and Drow Challenge 3, Completion Dragon Challenge 2, Play as Faceless/Dragon, Have a combined total of <b>8</b> days played as faceless and dragons with a minimum of <b>2</b> days as each one.</p>
<br/>
<hr>
<p><b>Spells</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessing.png" align="middle"> Moon Blessing (Elvens)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on Treasure Clicks (Total).</p>
<p><b>Old Formula</b>: 1.75 * ln^3.1(1 + x)%, where x is your Treasure Clicks (Total) stat.</p>
<p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your Treasure Clicks (Total) stat.</p>
<p><b>Effect</b>: Moon Blessing also auto-clicks the treasure 15 times per second.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefits.png" align="middle"> Good Mercenary Spell</p></b>
<p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 36 tiers.</p>
<p><b>Old Formula</b>: (y ^ (1 + 0.24 * log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
<p><b>New Formula</b>: (y ^ (1 + 0.2 * log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
<p><b>Added Effect</b>: Share Benefits now also gives TC casts.</p>
<p><b>New Formula</b>: ?</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PrecognitionSpell.png" align="middle"> Precognition (Proof of Order)</p></b>
<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
<p><b>Old Formula</b>: (1.25 * log10(1 + x) ^ 1.75), where x is mana produced in this game.</p>
<p><b>New Formula</b>: (1.3 * ln(1 + x) ^ 1.7), where x is mana produced in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/LimitedWishSpell.png" align="middle"> Limited Wish (Proof of Chaos)</p></b>
<p><b>Old Effect</b>: Provide a random effect based on your base faction, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
<p><b>New Effect</b>: Provide a random effect based on your chosen alignment, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
<p><b>Old Formula</b>: (1.725 * (ln(1 + x) ^ 1.25) * (y ^ 0.65)), where x is Limited Wish activity time this game in seconds and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
<p><b>New Formula</b>: (2.25 * (ln(1 + x) ^ 1.35) * (y ^ 0.45)), where x is Limited Wish activity time this game in seconds and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" align="middle"> Infinite Spiral (Proof of Balance)</p></b>
<p><b>Effect</b>: Increase assistants based on Maximum Mana.</p>
<p><b>Formula</b>: (12.5 * (ln(1 + x) ^ 1.25), where x is Maximum Mana.</p>
<p><b>Effect</b>: Increase max mana based on FC chance.</p>
<p><b>Formula</b>: (1.65 * log10(1 + x) ^ 1.65), where x is FC chance.</p>
<p><b>Effect</b>: Increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
<p><b>Old Formula</b>: (1.35 * x ^ (0.5 + 0.002 * (y + z))), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
<p><b>New Formula</b>: (0.025 * (x * (y + z)) ^ 0.75), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Spiritualsurge.png" align="middle"> Spiritual Surge (All Factions)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you reincarnated and ascended.</p>
<p><b>Old Formula</b>: (10000*1.05^x)^(1+0.5*y)%, where x is the number of times you have reincarnated and y is how many times you ascended.</p>
<p><b>New Formula</b>: (2500 * (R ^ 1.05)) ^ (1 + A * 0.5)%, where R is the number of times you have reincarnated and A is how many times you ascended.</p>
<br/>
<hr>
<p><b>Unique Buildings</b></p>
<p><b>Elf</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArborealCityUniqueBuilding.png"></p></b>
<p>Upgraded From Citadels</p>
<p>Upgrade Citadels to Arboreal Cities, boosting their production based on Faction Coin find chance and unlocking more unique perks for the building.</p>
<p><b>Effect</b>: Increase production based on Faction Coin find chance.</p>
<p><b>Effect</b>: Also grants access to Faction Union.</p>
<p><b>Old Formula</b>: floor(20 * (log10(1 + x)) ^ 2)), where x is FC chance.</p>
<p><b>New Formula</b>: floor(20 * (ln(1 + x)) ^ 2), where x is FC chance.</p>
<br/>
<p><b></b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FleshWorkshopUniqueBuilding.png"></p></b>
<p>Upgraded From Orcish Arenas</p>
<p>Upgrade Orcish Arenas to Flesh Workshops, boosting their production based on your mana regeneration rate and unlocking more unique perks for the building.</p>
<p><b>Effect</b>: Increase the production of Flesh Workshops based on mana regen.</p>
<p><b>Old Formula</b>: (35 * x ^ 0.65), where x is mana regen per second.</p>
<p><b>New Formula</b>: (15 * x ^ 0.65), where x is mana regen per second.</p>
<br/>
<p><b>Titan</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MountainPalaceUniqueBuilding.png"></p></b>
<p>Upgraded From Deep Mines</p>
<p>Upgrade Deep Mines to Mountain Palaces, boosting their production based on buildings owned and unlocking more unique perks for the building.</p>
<p><b>Effect</b>: Increase production based on buildings owned.</p>
<p><b>Effect</b>: Also grants access to Faction Union.</p>
<p><b>Old Formula</b>: (0.25 * x ^ 0.75), where x is buildings owned.</p>
<p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is buildings owned.</p>
<br/>
<p><b>Druid</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ZigguratUniqueBuilding.png"></p></b>
<p>Upgraded From Ancient Pyramids</p>
<p>Upgrade Ancient Pyramids to Ziggurats, boosting their production based on lineage levels and unlocking more unique perks for the building.</p>
<p><b>Effect</b>: Increase production based on based on total lineage levels.</p>
<p><b>Effect</b>: Also grants access to Faction Union.</p>
<p><b>Old Formula</b>: floor(x ^ 1.1)%, where x is total level of lineages.</p>
<p><b>New Formula</b>: floor(x ^ 1.2)%, where x is total level of lineages.</p>
<br/>
<p><b>Dwarf</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HighBastionUniqueBuilding.png"></p></b>
<p>Upgraded From Royal Castle</p>
<p>Upgrade Royal Castles to High Bastions, boosting their production based on clicks made in this reincarnation and unlocking more unique perks for the building.</p>
<p><b>Effect</b>: Increase production based on clicks made in this reincarnation.</p>
<p><b>Effect</b>: Also grants access to Faction Union.</p>
<p><b>Old Formula</b>: (ln(1 + x) ^ 2), where x is clicks this R.</p>
<p><b>New Formula</b>: (0.5 * x ^ 0.5), where x is clicks this R.</p>
<br/>
<p><b>Mercenary</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoodMercUniqueBuilding.png" align="middle"> Good Alignment</p></b>
<p>Upgraded from Knights Jousts</p>
<p>Upgrade Knights Jousts to Mercenary Camps, boosting their production based on the amount of Non-Unique buildings you own and unlocking more unique perks for the building.</p>
<p><b>Old Formula</b>: (1.5 * (1 + x)) where X is number of Non-Unique Buildings.</p>
<p><b>New Formula</b>: (1.25 * (1 + x) ^ 1.05), where X is number of Non-Unique Buildings.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EvilMercUniqueBuilding.png" align="middle"> Evil Alignment</p></b>
<p>Upgraded from Evil Fortresses</p>
<p>Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.</p>
<p><b>Old Formula</b>: (0.5 * (log10( 1 + x)) ^ 4.5) where x is Offline Production Bonus.</p>
<p><b>New Formula</b>: (0.5 * log10(x) ^ 3.5), where x is Offline Production Bonus.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/NeutralMercUniqueBuilding.png" align="middle"> Neutral Alignment</p></b>
<p>Upgraded from Alchemist Labs</p>
<p>Upgrade Alchemist Labs to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.</p>
<p><b>Old Formula</b>: (2 * x ^ 0.95), where x is assistants you had in a single game (This R)</p>
<p><b>New Formula</b>: (2 * x ^ 1), where x is assistants you had in a single game (This R)</p>
<br/>
<hr>
<p><b>Secret Trophy Upgrades</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GenealogistSecretTrophy.png" align="middle"> Genealogist</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the total amount of lineage levels you have.</p>
<p><b>Old Formula</b>: (2.5 * x ^1.25), where x is total amount of lineage levels you have.</p>
<p><b>New Formula</b>: (2.5 * x ^1.35), where x is total amount of lineage levels you have.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UniformitySecretTrophy.png" align="middle"> Uniformity</p></b>
<p><b>Effect</b>: Increases production of all buildings based on time spent as least used alignment.</p>
<p><b>Old Formula</b>: 0.7 * min(x, y, z, s, t, u) ^ 0.7, where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
<p><b>New Formula</b>: (0.72 * min(x, y, z, s, t, u) ^ 0.72), where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArtoftheCrowTrophy.png" align="middle"> Art of the Crow (Evil)</p></b>
<p><b>Old Effect</b>: The amount increased is based on time spent in this game.</p>
<p><b>Old Formula</b>: (4 * x ^ 0.44), where x is time spent this game.</p>
<p><b>New Effect</b>: The amount increased is Based on production bonus from Gems.</p>
<p><b>New Formula</b>: (30 + 30 * x ^ 0.3), where x is production bonus from Gems.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SunForce6am12pm.png" align="middle"> 6 AM - 12 PM</p></b>
<p><b>Old Effect</b>: multiplicative increase Faction Coin find chance based on the amount of assistants you own.</p>
<p><b>Old Formula</b>: (0.25 * ln(1 + x) ^ (2 + 0.25 * A)), where x is your assistants stat.</p>
<p><b>New Effect</b>: Increase Mana Regeneration based on the amount of assistants you own. (Additive)</p>
<p><b>New Formula</b>: (1.75 * ln(1 + x) ^ (1.75 + 0.5 * A)), where x is amount of assistants you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ExcavatedMirageArtifact.png" align="middle"> Excavated Mirage</p></b>
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
<p><b>New Formula</b>
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
<p><b>New Formula</b>: (40 * x  * 0.8)</p>
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
<br/>







































<hr>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.4.3 Dec 19, 2018</a></b></p>
        <div class="autohide">
<p><b>v3.4.3 Dec 19, 2018</b>
<br/>
<p><b>Christmas Event</b>: Will start Dec 21, 2018</p>
<p><b>Added</b>: New feat with new reward</p>
<br/>
<p><b>Changed</b>: Heavy Avalanche now (x ^ (2.5 * A)), where x is original bonus in precentage</p>
<p><b>Changed</b>: Grand Avalanche now (x ^ (5 * A)), where x is original bonus in precentage (overrides Heavy Avalanche)</p>
<br/>
<p><b>Elven Challenge 3</b>: Fixed</p>
<br/>
<p><b>Elite Faction Union</b>
<p><b>Old Cost</b>: 1 Td (1e42) Faction Coins</p>
<p><b>New Cost</b>: 1 Qad  (1e45) Faction Coins</p>
<br/>
<p><b>Elite Faction Heritage</p></b>
<p><b>Old Cost</b>: 1 Qid (1e48)</p>
<p><b>New Cost</b>: 1 Td (1e42)</p>
<br/>
<p><b>Faction Mask</p></b>
<p><b>Old Cost</b>: 1 QiQag (1.e138)</p>
<p><b>New Cost</b>: 10 Dqag (1e130)</p>
<hr>
<p><b>Faction Changes</p></b>
<p><b>Elven</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" alt="Camouflage" align="middle"> Camouflage (EL11)</b></p>
<p><b>Effect</b>: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.</p>
<p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is assistant count.</p>
<p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is assistant count.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenUnion.png" alt="Elven Union" align="middle"> Elven Union</p></b>
<p><b>Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
<p><b>Old Formula</b>: (2.85 * ln(x) ^ 2.85), where x is faction coins found in this Reincarnation.</p>
<p><b>New Formula</b>: (3 * ln(x) ^ 3), where x is faction coins found in this Reincarnation.</p>
<hr>
<p><b>Angel</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" alt="Angels Union" align="middle"> Angels Union</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
<p><b>Old Formula</b>: (ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
<p><b>New Formula</b>: (4 * ln(x) ^ 2 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
<hr>
<p><b>Undead</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ZombieApocalypse.png" alt="Zombie Apocalypse" align="middle"> Zombie Apocalypse (UD11)</b></p>
<p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
<p><b>Old Formula</b>: (0.72 * x ^ 0.72), where x is offline time this R.</p>
<p><b>New Formula</b>: (3.5 * x ^ 0.7), where x is offline time this R.</p>
<hr>
<p><b>Demon</p></b>
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
<p><b>Titan</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GiantMarket.png" alt="Giant Market" align="middle"> Giant Market (TT10)</p></b>
<p><b>Effect</b>: Increase Royal Exchanges count based on the amount of Mountain Palaces you own.</p>
<p><b>Old Formula</b>: (1.25 * x ^ 0.75), where x is amount of Mountain Palaces owned.</p>
<p><b>New Formula</b>: (1.25 * x ^ 0.725), where x is amount of Mountain Palaces owned.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png" align="middle"> Titan Helmet (Artifact)</p></b>
<p><b>Old Chance</b>: ((x ^ 2) / 5000000000 (5B))%, where x is Royal Exchanges (Royal Exchange count multipliers DO count).</p>
<p><b>New Chance</b>: ((x ^ 2) / 1,500,000,000 (1.5B))%, where x is Royal Exchanges (Royal Exchange count multipliers <b>DO NOT</b> count).</p>
<hr>
<p><b>Druid</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GroveFarming.png" alt="Grove Farming" align="middle"> Grove Farming (DD12)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on their tier. Middle tiers get better bonuses.</p>
<p><b>Old Formula</b>: (0.75 * ((6 - abs(6 - T)) ^ 5)), where T is building tier.</p>
<p><b>New Formula</b>: (0.8 * ((6 - abs(6 - T)) ^ 5)), where T is building tier.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" alt="Druids Union" align="middle"> Druids Union</p></b>
<p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
<p><b>Old Formula</b>: (5 * ((x * y) / 2.5)), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<p><b>New Formula</b>: (3 * x * y ^ 1.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<hr>
<p><b>Dwarf</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"> Dwarven Union</p></b>
<p><b>Effect</b></p>
<p><b>Proof of Order</b>: Increase all building production based on time spent this reincarnation.</p>
<p><b>Old Formula</b>: (0.8 * x ^ 0.65), where x is time spent this reincarnation.</p>
<p><b>New Formula</b>: (3.5 * x ^ 0.65), where x is time spent this reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"> Dwarven Set</p></b>
<p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
<p><b>Old Formula</b>: (x ^ 0.9), where x is Royal Exchange bonus.</p>
<p><b>New Formula</b>: (2.5 * x ^ 0.75), where x is Royal Exchange bonus.</p>
<hr>
<p><b>Drow</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AncillaeObscureUnionUpgrade2.png" align="middle"> Ancillae Obscurae (DW11)</p></b>
<p><b>Effect</b>: Increase Non-Unique building production based on amount of Unique Buildings.</p>
<p><b>Old Formula</b>: (45 * x ^ 0.45), where x is amount of Unique Buildings.</p>
<p><b>New Formula</b>: (50 * x ^ 0.5), where x is amount of Unique Buildings.</p>
<hr>
<p><b>Dragon</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"> Dragon Union</p></b>
<p><b>Effect</b></p>
<p><b>Proof of Order</b>: Increase the production of all buildings based on time spent as Order this R.</p>
<p><b>Old Formula</b>: (1.65 * x ^ 0.65), where x is time spent this Order.</p>
<p><b>New Formula</b>: (6.5 * x ^ 0.65), where x is time spent this Order.</p>
<hr>
<p><b>Archon</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/StarTrading.png" align="middle"> Star Trading (AR1)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the maximum amount of Royal Exchanges you made in this Reincarnation.</p>
<p><b>Old Formula</b>: (0.25 * x ^ 0.9), where x is Royal Exchanges.</p>
<p><b>New Formula</b>: (0.25 * x), where x is Royal Exchanges.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EnergyRecharge.png" align="middle"> Energy Recharge (AR2)</p></b>
<p><b>Effect</b>: Maximum Mana counts more based on the amount of time spent as Order in this Reincarnation.</p>
<p><b>Old Formula</b>: (0.32 * x ^ 0.58), where x is time spent as Order this R in seconds.</p>
<p><b>New Formula</b>: (0.25 * x ^ 0.55), where x is time spent as Order this R in seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPride.png" align="middle"> Archon Pride (AR5)</p></b>
<p><b>Effect</b>: Increase assistants based on time spent as your least used faction.</p>
<p><b>Old Formula</b>: (50 + (1.3 * x ^ 0.7)), where x is least used faction.</p>
<p><b>New Formula</b>: (50 + 0.3 * x ^ 0.7), where x is least used faction.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SuperiorConsciousness.png" align="middle"> Superior Consciousness (AR7)</p></b>
<p><b>Effect</b>: Increase the production of Unique buildings based on their quantity.</p>
<p><b>Old Formula</b>: (0,8 * x ^ 0.8), where x is Unique Buildings.</p>
<p><b>New Formula</b>: (0.85 * x ^ 0.85), where x is Unique Buildings.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonHeritage.png" align="middle"> Archon Heritage</p></b>
<p><b>Old Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 15%.</p>
<p><b>New Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more, by 10%.</p>
<hr>
<p><b>Djinn</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TheDesireWithin.png" align="middle"> The Desire Within (DJ1)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on spells of your current alignments cast in this game.</p>
<p><b>Old Formula</b>: (25 * ln(1 + x) ^ 2.35), where x is alignments spells cast in this game.</p>
<p><b>New Formula</b>: (25 * ln(1 + x) ^ 2), where x is alignments spells cast in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AuraofMagic.png" align="middle"> Aura of Magic (DJ4)</p></b>
<p><b>Effect</b>: Increase non-unique building production based on mana produced this game.</p>
<p><b>Old Formula</b>: (0.75 * x ^ 0.35), where x is mana produced this game.</p>
<p><b>New Formula</b>: (0.125 * x ^ 0.325), where x is mana produced this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/WildSurge.png" align="middle"> Wild Surge (DJ6)</b></p>
<p><b>Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
<p><b>Old Formula</b>: (0.25 * x ^ 0.75), where x is the duration of your longest spell.</p>
<p><b>New Formula</b>: (0.35 * x ^ 0.65), where x is the duration of your longest spell.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/WishingWell.png" align="middle"> Wishing Well (DJ7)</p></b>
<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
<p><b>Old Formula</b>: (0.045 * x ^ 0.45), where x is mount of assistants you own.</p>
<p><b>New Formula</b>: (0.04 * x ^ 0.4), where x is mount of assistants you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FlashyStorm.png" align="middle"> Flashy Storm (DJ8)</p></b>
<p><b>Effect</b>: Increase the production of even-tier buildings on odd days of the month, odd-tier buildings on even days.</p>
<p><b>Note</b>: The bonus is based on assistants owned.</p>
<p><b>Old Formula</b>: (0.125 * x ^ 0.425), where x is assistants owned.</p>
<p><b>New Formula</b>: (ln(1 + x) ^ 2.5), where x is assistants owned.</p>
<hr>
<p><b>Makers</p></b>
<p><b>MK2 and MK4 switch places</p></b>
<p><b>Old MK2</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicalShards.png" align="middle"> Magical Shards (MK2)</p></b>
<p><b>Effect</b>: Increase mana regeneration based on artifacts found.(Multiplicatively)</p>
<p><b>Formula</b>: (x ^ 0.95), where x is artifacts found.</p>
<p><b>New MK2</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MagicalShards.png" align="middle"> Everlasting Materials (MK2)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
<p><b>Formula</b>: (0.2 * x ^ 0.7), where x is highest amount of buildings built this Reincarnation.</p>
<br/>
<p><b>Old MK4</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EverlastingMaterials.png" align="middle"> Everlasting Materials (MK4)</p></b>
<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
<p><b>Formula</b>: (0.15 * x ^ 0.7), where x is highest amount of buildings built this Reincarnation.</p>
<p><b>New MK4</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/EverlastingMaterials.png" align="middle"> Magical Shards (MK4)</p></b>
<p><b>Effect</b>: Increase mana regeneration based on artifacts found.(Multiplicatively)</p>
<p><b>Formula</b>: (x ^ 0.95), where x is artifacts found.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/StoneServants.png" align="middle"> Stonecarving (MK7)</p></b>
<p><b>Old Effect</b>: Increase assistants based on excavations made in this Reincarnation, including resets.</p>
<p><b>Old Formula</b>: (0.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
<p><b>New Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
<p><b>New Formula</b>: (2.5 * x ^ (0.4 + 0.004 * y + 0.001 * z)), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/StructuralStability.png" align="middle"> Structural Stability (MK9)</p></b>
<p><b>Effect</b>: Increase the production of building tiers directly above or below Unique Buildings based on spells cast in this game.</p>
<p><b>Old Formula</b>: (0.1 * x ^ 0.375), where x spells cast in this game.</p>
<p><b>New Formula</b>: (0.2 * x ^ 0.4), where x spells cast in this game.</p>
<p><b>Note</b>: MK9 now works like W3150 ( ^ 2 bonus when able).</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle"> Reality Marble (MK12)</p></b>
<p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
<p><b>Old Formula</b>: (4 * ln(x) ^ 4), where x is clicks made this Reincarnation.</p>
<p><b>New Formula</b>: (3 * ln(x) ^ 3), where x is clicks made this Reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersHeritage.png" align="middle"> Makers Heritage</p></b>
<p><b>Effect</b>: Increase maximum mana based on Tax Collections cast in this game.</p>
<p><b>Old Formula</b>: (2.2 * log10(1 + x) ^ 1.8), where x is Tax Collections cast this game.</p>
<p><b>New Formula</b>: (2 * log10(x) ^ 1.75), where x is Tax Collections cast this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUnion.png" align="middle"> Makers Union</p></b>
<p><b>Old Effect</b>: All Creation is based on highest mana regeneration rate this reincarnation.</p>
<p><b>New Effect</b>: All Creation production effect is based on the highest mana regeneration rate in this Reincarnation.</p>
<p><b>Note</b>: No longer effects All creation FC chance</p>
<hr>
<p><b>Spells</p></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PrecognitionSpell.png" alt="Precognition"></p></b>
<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
<p><b>Old Formula</b>: (1.25 * log10(1 + x) ^ 2), where x is mana produced in this game.</p>
<p><b>New Formula</b>: (1.25 * log10(1 + x) ^ 1.75), where x is mana produced in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/LimitedWishSpell.png" alt="Limited Wish" align="middle"></p></b>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" alt="All Creation" align="middle"></p></b>
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
<p><b>Research</p></b>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonFriendshipPact.png" align="middle">  Archon Friendship Pact</b></p>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonAlliance.png" align="middle">  Archon Alliance</b></p>
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
<p><b>Possible Effects</b>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnFriendshipPact.png" align="middle">  Djinn Friendship Pact</b></p>
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
<p><b>Formula</b>: (0.25 * x  ^ 0.75), where x is the duration of your longest spell.</p>
<hr>
<p><b>Tier 3 Upgrades</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnAlliance.png" align="middle">  Djinn Alliance</b></p>
<p><b>Cost</b>: 1 Dd (1e39) Fairy and Demon Coins</p>
<p><b>Effect</b>: Unlocks Djinn Upgrades</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/WishingWell.png" align="middle"> Wishing Well</b></p>
<p><b>Cost</b>: 10 TQig (1e163)</p>
<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
<p><b>Formula</b>: (0.045 * x ^ 0.45), where x is mount of assistants you own..</p>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersFriendshipPact.png" align="middle">  Makers Friendship Pact</b></p>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersAlliance.png" align="middle">  Makers Alliance</b></p>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityMarble.png" align="middle">  Reality Marble</b></p>
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
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandmasterGrinder.png" align="middle">  Grandmaster Grinder</b></p>
<p><b>Requirement</b>: Build 300000 buildings in a single game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/1SeptendecillionFactionCoins.png" align="middle">  1 Septendecillion Faction Coins</b></p>
<p><b>Requirement</b>: Find 1 Spd (1e54) Faction Coins in a single game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AssistantDimension.png" align="middle">  Assistant Dimension</b></p>
<p><b>Requirement</b>: Have 5 B (5e9) Assistants.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AssistantMultiverse.png" align="middle">  Assistant Multiverse</b></p>
<p><b>Requirement</b>: Have 5 T (5e12) Assistants.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/75Artifacts.png" align="middle">  75 Artifacts</b></p>
<p><b>Requirement</b>: Find 75 artifacts.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/125Reincarnations.png" align="middle">  125 Reincarnations</b></p>
<p><b>Requirement</b>: Reincarnations 125 times.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ManaFalls.png" align="middle">  Mana Falls</b></p>
<p><b>Requirement</b>: R100+, Produce 200 Qi (2e20) mana.</p>
<p><b>Effect</b>: Gives upgrade with same name.</p>
<p><b>Upgrade Cost</b>: 10 Dqag (1e130)</p>
<p><b>Upgrade Effect</b>: Increase mana regeneration by 10.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpellGrinder.png" align="middle">  Spell Grinder</b></p>
<p><b>Requirement</b>: Cast 10 Qa (1e16) spells in a single game.</p>
<br/>
<p><b>25 Building Trophies</b></p>
<p><b>Requirement</b>: 20000 of each building for each trophy.</p>
<hr>
<p><b>Changes</b>
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
<p><b>Elven Discipline (EL12)</b>
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
<p><b>New  Effect</b>: Unique Building's base production increased by 25% for every 650 Unique Buildings.</p>
<br/>
<p><b>Goblin Perk 4</b></p>
<p><b>Added  Effect</b>: Also makes Tax Collection casts count 100% more.</p>
<br/>
<p><b>Goblin Lineage</b></p>
<p><b>Old Effect</b>: Increase production bonus from Gems by a multiplicative 2.5% for every level.</p>
<p><b>New  Effect</b>: Increase production bonus from Gems by a multiplicative 6.5% for every level.</p>
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
<p><b>Added  Effect</b>: Trophies count 100% more.</p>
<hr>
<p><b>Titan</b></p>
<p><b>Advanced Titan Heritage</b></p>
<p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
<p><b>Old Formula</b>: (0.05 * ln(x) ^ 1.5), where x is Royal Exchanges purchased.</p>
<p><b>New Formula</b>: (0.2 * ln(x) ^ 1.5), where x is Royal Exchanges purchased.</p>
<br/>
<p><b>Titan Union</b></p>
<p><b>Old Effect</b>: Multiplicatively increase Faction Coin find chance by 5% per hour spent in this game.</p>
<p><b>New  Effect</b>: Multiplicatively increase Faction Coin find chance based on time spent in this game.</p>
<p><b>New  Formula</b>: 50 * (x / 3600) ^ 0.85), where x is time spent in this game.(per hours).</p>
<br/>
<p><b>Added  Effect</b>: Also increase Maximum Mana based on time spent in this game.</p>
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
<p><b>Forbidden Language (FC11)</b>
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
<p><b>New Effect</b>:  Increase Faction Coin find chance by a multiplicative 1500%.</p>
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
<p><b>Automatic Casting</b>
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
<p><b>New Effect</b>:  Increase maximum mana by 15%.</p>
<hr>
    </div>
   </div>
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.3 July 26, 2018</a></b></p>
        <div class="autohide">
<p><b>Changed</b>: Base mana regen</p>
<p><b>Old Base</b>: 0.5/sec</p>
<p><b>New Base</b>: 1/sec</p>
<br/>
<p><b>Added</b>: Music</p>
<p>Short instrumental music for Good, Evil and Neutral (with and without Proof of Neutrality) alignments.</p>
<br/>
<p><b>Goblin Invasion</b>: New feat with new reward</p>
<br/>
<p><b>Added</b>: 25 Building Upgrades</p>
<p><b>Requirements</b>: Reach 18000 of each building to get its upgrade.</p>
<br/>
<p><b>Added</b>: 12 Allegiances Trophies</p>
<p><b>Requirements</b>: A2, Level 30 Lineage for each faction and buy all it's faction upgrades.</p>
<hr>
<p><b>Added</b>: 3 Artifacts</p>
<p><b>Effect</b>: Unlocks A2 Tier 2 Spells</p>
<p><b>Coin Cost</b>: 123 Qaq (1.23e125) Emerald coins</p>
<p><b>FC Cost</b>: 1 Oc (1e27) good/evil faction coins of the alignment and dwarf/drow</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/OilLampArtifact.png" align="middle"> Oil Lamp</b></p>
<p><b>Hint</b>: Chaos magic burns brightly.</p>
<p><b>Description</b>: Rub it, polish it. And remember to express your desires precisely, lest you want to face dire consequences.</p>
<p><b>Requirements</b>: R120+, Proof of Chaos</p>
<p><b>Chance</b>: (min(x, y, z) / 1000 days)%, where x is Fairy Chanting spell activity time, y is Hellfire Blast spell activity time, and z is Brainwave spell activity time (all time).</p>
<p><b>Effect</b>: Unlocks Tier 2 Maelstrom</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/LanternofGuidanceArtifact.png" align="middle"> Lantern of Guidance</b></p>
<p><b>Hint</b>: Massive mana flows can offer guidance.</p>
<p><b>Description</b>: Follow the guiding light, o wonderer, for it shall bring you fortune.</p>
<p><b>Requirements</b>: R120+, Proof of Order</p>
<p><b>Chance</b>: (x / 10,000,000,000 (10B))%, where x is mana regen.</p>
<p><b>Effect</b>: Unlocks Tier 2 Temporal Flux</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SparkofLifeArtifact.png" align="middle"> Spark of Life</b></p>
<p><b>Hint</b>: The power of Creation may spark something new.</p>
<p><b>Description</b>: The spark of Creation, dimly shining from the bottom of its encasing crystal.</p>
<p><b>Requirements</b>: R120+, Proof of Balance</p>
<p><b>Chance</b>: (ln(1 + x) ^ 2 / 12000)%, where x is FC collected this game.</p>
<p><b>Effect</b>: Unlocks Tier 2 All Creation</p>
<hr>
<p><b>Added</b>: Advanced Heritages for each faction</p>
<p><b>Requirements</b>: A2, Lineage Level 30 and buying all upgrades of that faction and 8 hours activity time (This Game) of that Faction's spell</p>
<p>When using their lineage, Advanced Heritage powers are multiplied by the level of the lineage.</p>
<p><b>Formula</b>: (1 + 0.3 * level)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedFairyHeritage.png" align="middle"> Advanced Fairy Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Fairy Coins</p>
<p><b>Effect</b>: Gain assistants based on amount of Farms, Inns and Blacksmiths (additive).</p>
<p><b>Formula</b>: (2 * (x + y + z)  ^ 0.8), where x is amount of Farms, y is amount Inns and z is amount Blacksmiths.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedElvenHeritage.png" align="middle"> Advanced Elven Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Elven Coins</p>
<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
<p><b>Formula</b>: (0.3 * ln(1 + x) ^ 1.5)%, where x is amount of clicks this reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedAngelicHeritage.png" align="middle"> Advanced Angelic Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Angel Coins</p>
<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast in this game.</p>
<p><b>Formula</b>: (2.5 * x ^ 0.25)%, where x is spells cast this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedGoblinHeritage.png" align="middle"> Advanced Goblin Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Goblin Coins</p>
<p><b>Effect</b>: Tax Collections are worth more seconds of production based on Gems owned. (multiplicative).</p>
<p><b>Formula</b>: (0.25 * log10(1 + x) ^ 0.95), where x is gems owned.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedUndeadHeritage.png" align="middle"> Advanced Undead Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Undead Coins</p>
<p><b>Effect</b>: Assistants count more based on your Offline Bonus.</p>
<p><b>Formula</b>: (0.018 * log10(1 + x) ^ 2)%, where x is offline bonus.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDemonicHeritage.png" align="middle"> Advanced Demonic Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Demon Coins</p>
<p><b>Effect</b>: Increase the production of all buildings based on trophies unlocked.</p>
<p><b>Formula</b>: (0.25 * x ^ 0.75)%, where x is amount of trophies unlocked.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedTitanHeritage.png" align="middle"> Advanced Titan Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Angel and Goblin Coins</p>
<p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
<p><b>Formula</b>: (0.05 * ln(x) ^ 1.5), where x is Royal Exchanges purchased.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDruidHeritage.png" align="middle"> Advanced Druid Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Elven and Demon Coins</p>
<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells durations.</p>
<p><b>Formula</b>: (0.01 * x ^ 0.85)%, where x is the sum of all your spell durations.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedFacelessHeritage.png" align="middle"> Advanced Faceless Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Fairy and Undead Coins</p>
<p><b>Effect</b>: Gain assistants based on the amount of Unique Buildings owned (additive).</p>
<p><b>Formula</b>: (2.5 * x ^ 0.8), where x is Unique Buildings owned.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDwarvenHeritage.png" align="middle"> Advanced Dwarven Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Dwarven Coins</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of excavations and excavation resets. (This R).</p>
<p><b>Formula</b>: (0.01 * x ^ (0.85 + 0.01 * y)), where x is excavations and y is excavation resets this R (ruby and free resets).</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDrowHeritage.png" align="middle"> Advanced Drow Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Drow Coins</p>
<p><b>Effect</b>: Increase the production of all buildings based on offline bonus and time spent in this game.</p>
<p><b>Formula</b>: (0.0008 * log10(1 + x) * y ^ 0.8), where x offline bonus and y is time spent this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDragonHeritage.png" align="middle"> Advanced Dragon Heritage</b></p>
<p><b>Cost</b>: 7.5 Oc (7.5e27) Dwarven and Drow Coins</p>
<p><b>Effect</b>: The amount of active spells counts 5% more for all purposes.</p>
<hr>
<p><b>Added</b>: 1 Secret Trophy</p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FactionRulerSecret.png" align="middle"> Faction Ruler</b></p>
<p><b>Requirements</b>: Unlock all the Advanced Heritages</p>
<p><b>Cost</b>: 120 Notg (1.2e122)</p>
<p><b>Effect</b>: Double Advanced Heritage powers if they match any of your alignments (cumulative).</p>
<hr>
<p><b>Secret Upgrade Changes</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/LeetSecretTrophy.png" align="middle"> Leet</b></p>
<p><b>Old Effect</b>: Increase the production of all buildings by 1.337%</p>
<p><b>New Effect</b>: Increase the production of all buildings by 13.37%, No A nerf</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UnitarySecretTrophy.png" align="middle"> Unitary</b></p>
<p><b>Old Effect</b>: Increase the production of all buildings by 1.11111111%</p>
<p><b>New Effect</b>: Increase the production of all buildings by 11.11111111%, No A nerf</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandDiplomatSecretTrophy.png" align="middle"> Grand Diplomat</b></p>
<p><b>Old Effect</b>: Increase your chance to find Faction Coins by an additional 1%</p>
<p><b>New Effect</b>: Increase your chance to find Faction Coins by an additional 2%</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FactionGrinderSecretTrophy.png" align="middle"> Faction Grinder</b></p>
<p><b>Old Effect</b>: Increase your chance to find Faction Coins by additional 1%</p>
<p><b>New Effect</b>: Increase your chance to find Faction Coins by additional 2%</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/glhokohhlsnodSecretTrophy.png" align="middle"> Glho kohhl snod</b></p>
<p><b>Old Effect</b>: Increase base clicking reward by 1</p>
<p><b>New Effect</b>: Increase base clicking reward by 50%, no A-nerf</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SuggestionMasterSecretTrophy.png" align="middle"> Suggestion Master</b></p>
<p><b>Effect</b>: Increase the production of all buildings base on mysterious events.</p>
<p><b>Formula</b>: hotfix.patch%, where hotfix and patch are the 4th and 3rd elements of the game's version number.</p>
<p><b>Old Formula</b>: (a.b.c.d) (0.01 * d + c)%</p>
<p><b>New Formula</b>: (10 * b) + a + (0.1 * d) * (0.01 * c)%, no A-nerf</p>
<hr>
<p><b>Quest Changes</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/BurningAbyssQuest.png" alt="Burning Abyss Quest" align="middle"> <b>Burning Abyss Quest</b></p>
<p><b>Old Requirement</b>: 160 seconds long Call to Arms.</p>
<p><b>New Requirement</b>: 120 seconds long Call to Arms.</p>
<hr>
<p><b>Faction Upgrade Changes</b></p>
<p><b>Undead</b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PlaguedBuildingsFactionUpgrade.png" align="middle"> Plagued Buildings (UD 2,3)</b></p>
<p><b>Old Effect</b>: Increase the production of all buildings by an additional 50% per hour of playtime in this game.</p>
<p><b>New Effect</b>: Increase the production of all buildings by an additional 75% per hour of playtime in this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DeadFieldsFactionUpgrade.png" align="middle"> Dead Fields (UD 3,1)</b></p>
<p><b>Effect</b>: Each assistants increases the production of all buildings based on the amount of Assistants and Necropolises you own.</p>
<p><b>OldFormula</b>: (0.02 * x * y), where x is Assistants and y is Necropolises you own</p>
<p><b>New Formula</b>: (0.03 * x * y), where x is Assistants and y is Necropolises you own</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TirelessWorkersFactionUpgrade.png" align="middle"> Tireless Workers (UD 3,2)</b></p>
<p><b>Old Effect</b>: Increase the production of assistants by 1000%.</p>
<p><b>New Formula</b>: Increase the production of assistants by 1500%</p>
<br/>
<p><b>Faceless</b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DimensionDoor.png" align="middle"> Dimension Door (FC 4,3)</b></p>
<p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
<p><b>Old Formula</b>: (0.013 * x ^ 0.7), where x is highest max mana this R.</p>
<p><b>New Formula</b>: (0.013 * x ^ 0.67), where x is highest max mana this R.</p>
<br/>
<p><b>Druid</b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/NaturalRecyclingFactionUpgrade.png" align="middle"> Natural Recycling (DD 1,3)</b></p>
<p><b>Old Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on the amount of the <b>least productive building</b> you own.</p>
<p><b>New Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on the amount of the <b>total buildings</b> you own.</p>
<p><b>Formula</b>: (x ^ 0.35), where x is total buildings you own. (additively and multiplicatively)</p>
<br/>
<p><b>Drow</b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/CrystalServantsUnionUpgrade3.png" align="middle"> Crystal Servants (DW 4,3) (Upgrade 12)</b></p>
<p><b>Effect</b>: Multiplicatively gain assistants based on current gem amount.</p>
<p><b>Old Formula</b>: (0.75 * (log10(x) ^ 2), where x is amount of current gems.</p>
<p><b>New Formula</b>: (5 * log10(x) ^ 1.5), where x is amount of current gems.</p>
<hr>
<p><b>Union Changes</b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" align="middle"> Druids Union</b></p>
<p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
<p><b>Old Formula</b>: ((x * y) / 2.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<p><b>New Formula</b>: (5 * ((x * y) / 2.5)), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUnion.png" align="middle"> Undead Union</b></p>
<p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
<p><b>Old Formula</b>: (10 * log10(1 + x) ^ 2), where x is offline bonus multiplier.</p>
<p><b>New Formula</b>: (75 * log10(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"> Dragon Union</b></p>
<p><b>Chaos Dragon Union</b></p>
<p><b>Old Formula</b>: FC chance</p>
<p><b>New Formula</b>: log10(FC chance)</p>
<br/>
<p><b>Old Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend <b>FC chance</b> (even for Unique, odd for Non-Unique).</p>
<p><b>New Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend <b>log10(FC chance)</b> (even for Unique, odd for Non-Unique).</p>
<p><b>Old  Formula</b>: Non-Unique (25 * 0.6 * x ^ 0.6), where x is FC chance.</p>
<p><b>New Formula</b>: Non-Unique (25 * 0.58 * x ^ 0.58), where x is FC chance.</p>
<p><b>Old  Formula</b>:  Unique (0.6 * x ^ 0.6), where x is FC chance.</p>
<p><b>New Formula</b>: Unique (0.58 * x ^ 0.58), where x is FC chance.</p>
<br/>
<p><b>Order Dragon Union</b></p>
<p><b>Effect</b>: Increase the production of all buildings based on time spent as Order.</p>
<p><b>Old  Formula</b>: (1.6 * x ^ 0.6), where x is time spent this Order.</p>
<p><b>New Formula</b>: (1.65 * x ^ 0.65), where x is time spent this Order.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"> Dwarven Union</b></p>
<p><b>Chaos Dwarven Union</b></p>
<p><b>Effect</b>: Chaotically Multiplicatively increase assistant count based on spells cast this R.</p>
<p><b>Old Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2), for each digit of x, sum(2 * (mod(x,10) ^ y)</p>
<p><b>New Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2), for each digit of x, 2 * sum(mod(x,10) ^ y) ^ 0.9</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUnion.png" align="middle"> Drow Union</b></p>
<p><b>Balance Drow Union</b></p>
<p><b>Effect</b>: Multiplicatively Increase max mana based on Tax Collections cast this game.</p>
<p><b>Old Formula</b>: (0.1 * ln(1 + x) ^ 2.8), where x is Tax Collections cast this game.</p>
<p><b>New Formula</b>: (0.07 * ln(1 + x) ^ 2.7), where x is Tax Collections cast this game.</p>
<hr>
<p><b>Challenge Upgrade Changes</b></p>
<p><b>Fairy Challenge 1</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/PixieMischiefChallenge.png" alt="Pixie Mischief</p>" align="middle"> <b>Pixie Mischief</b></p>
<p><b>Effect</b>: You gain assistants based on the amount of Fairy affiliated (faction upgrades, heritage, bloodline, research) upgrades you own.</p>
<p><b>Old Formula</b>: (x ^ 1.75), where x is amount of Fairy affiliated upgrades.
<p><b>New Formula</b>: (0.35 * x ^ 1.75), where x is amount of Fairy affiliated upgrades.
<br/>
<p><b>Goblin Challenge 1</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiscountSeasonChallenges.png" align="middle"> Discount Season</b></p>
<p><b>Old Effect</b>: Goblin (3,3) Green Fingers Discount triggers every 8 minutes.</p>
<p><b>New Effect</b>: Goblin (3,3) Green Fingers Discount triggers every 2 minutes.</p>
<br/>
<p><b>Goblin Challenge 3</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SmuggledJewelsChallenges.png" align="middle"> Smuggled Jewels</b></p>
<p><b>Old Effect</b>: Increase production bonus from Gems by 0.005% for each upgrade purchased.</p>
<p><b>New Effect</b>: Increase production bonus from Gems by 0.01% for each upgrade purchased.</p>
<br/>
<p><b>Undead Challenge 1</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DeadlyImpatienceChallenges.png" align="middle"> Deadly Impatience</b></p>
<p><b>Old Effect</b>: Undead Heritage works 1000% faster.</p>
<p><b>New Effect</b>: Undead Heritage works 5000% faster.</p>
<br/>
<p><b>Druid Challenge 1</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SilentAssistanceChallenges.png" align="middle"> Silent Assistance</b></p>
<p><b>Effect</b>: Animal Companions (1,2) works faster
<p><b>Old Formula</b>: floor((sqrt(1 + 16 * x) - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
<p><b>Old Formula</b>: 1.1547x</p>
<p><b>New Formula</b>: floor((sqrt(1 + 120 * x) - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
<p><b>New Formula</b>: 3.1622x</p>
<br/>
<p><b>Druid challenge 4</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/OverflowingManaChallenges.png" align="middle"> Overflowing Mana</b></p>
<p><b>Old Effect</b>: All spell durations increased by 1% for every 1,500 max mana.</p>
<p><b>New Effect</b>: All spell durations increased based on max mana.</p>
<p><b>New Formula</b>: (0.005 * x ^ 0.85), where x is max mana.</p>
<br/>
<p><b>Dragon Challenge 6</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DracometVaultChallenges.png" align="middle"> Dracomet Vault</b></p>
<p><b>Effect</b>: Production bonus from Gems is multiplicatively increased over time based on the amount of artifacts you own. Resets on Abdications.</p>
<p><b>Old Formula</b>: (0.002 * x * (y / 60) ^ 0.7), where x is artfiact found and y is time this game in seconds.</p>
<p><b>New Formula</b>: (0.01 *  x * (y / 60) ^ 0.7), where x is artfiact found and y is time this game in seconds.</p>
<hr>
<p><b>Unique Building Changes</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FleshWorkshopUniqueBuilding.png" align="middle"></b></p>
<p><b>Effect</b>: Increase production based on mana regen.</p>
<p><b>Old Formula</b>: (2 * x ^ 0.6), where x is mana regen per second.</p>
<p><b>New Formula</b>: (35 * x ^ 0.65), where x is mana regen per second.</p>
<hr>
<p><b>Spell Changes</b></p>
<p>All spell durations are now capped to 10000x their base duration.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MaelstromSpell.png" align="middle"></b></p>
<p><b>Maelstrom click formula</b></p>
<p><b>Old Clicks  Formula</b>: (0.075 * (log10(1 + x)) ^ 2.5)%, where x is clicks this game.</p>
<p><b>New Clicks  Formula</b>: (0.075 * (log10(1 + x)) ^ 2.75)%, where x is clicks this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TemporalFluxSpell.png" align="middle"></b></p>
<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on time spent in this game.</p>
<p><b>Old Formula</b>: (5 * (x/60) ^ 0.7)%, where x is time in seconds this game.</p>
<p><b>New Formula</b>: (3.2 * (x/60) ^ 0.82))%, where x is time in seconds this game.</p>
<hr>
<p><b>Lineage Changes</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyLineage.png" align="middle"> Fairy Lineage</b></p>
<p><b>Fairy Lineage base</b></p>
<p><b>Old Effect</b>: Makes Farms, Inns and Blacksmiths count 15% more per Lineage level.</p>
<p><b>New Effect</b>: Makes Farms, Inns and Blacksmiths count 18% more per Lineage level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk1.png" align="middle"> Fairy Perk 1</b></p>
<p><b>Effect</b>: Makes Fairy Bloodline affect Hall of Legends.</p>
<p><b>Effect</b>: Also reduces Fairy Bloodline Post Ascension nerf.</p>
<p><b>Old Formula</b>: 250 * ((a ^ 0.9) ^5)</p>
<p><b>New Effect</b>: Fairy Bloodline also effects Hall of Legends and removes 1 ascenion penalty.</p>
<p><b>New Formula</b>: 250 * (a ^ 0.9), A1 nerf removed</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelLineage.png" align="middle"> AngelLineage</b></p>
<p><b>Old Effect</b>: Effect: Adds 10% mana regeneration per level.</p>
<p><b>New Effect</b>: Effect: Adds 7% mana regeneration per level.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk3.png" align="middle"> Angel Perk 3</b></p>
<p><b>Effect</b>: Increase God's Hand bonus based on Unique Buildings owned.</p>
<p><b>Old Formula</b>: (25000 * (x / 1000))%, Unique Buildings.(rounded down to nearest 1000)</p>
<p><b>New Formula</b>: (12000 * (x / 1000))%, Unique Buildings.(rounded down to nearest 1000)</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk4.png" align="middle"> Angel Perk 4</b></p>
<p><b>Old Effect</b>: When God's Hand is active, increase max mana by 100%.</p>
<p><b>New Effect</b>: When God's Hand is active, increase max mana by 50%.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk3.png" align="middle"> Goblin Perk 3</b></p>
<p><b>Old Effect</b>: Unique Building's base production increased by 2% for every 650 Unique Buildings.</p>
<p><b>New Effect</b>: Unique Building's base production increased by 3% for every 650 Unique Buildings.</p>
<hr>
<p><b>Set Changes</b></p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"> Titan Set</b></p>
<p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
<p><b>Old Formula</b>: (0.07 * x ^ 0.7), where x is seconds.</p>
<p><b>New Formula</b>: (0.5 * x ^ 0.7), where x is seconds.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"> Druid Set</b></p>
<p><b>Effect</b>: Increase production of all buildings based on their quantity.</p>
<p><b>Old Formula</b>: (0.65 * x ^ 0.65), where x is building count.</p>
<p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is building count.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"> Faceless Set</b></p>
<p><b>Effect</b>: Increase production of all buildings based on highest amount of spells cast in a single game.</p>
<p><b>Old Formula</b>: (0.32 * x ^ 0.32), where x is number of spells cast.</p>
<p><b>New Formula</b>: (0.32 * x ^ 0.28), where x is number of spells cast.</p>
    </div>
   </div>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.2 May 16, 2018</a></b></p>
        <div class="autohide">
<p><b>Fixed</b>
<p>Setting 8 spells set with same autocast now working</p>
<p>Bunny Helper</p>
<hr>
<p><b>Changes</b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png" align="middle"> Ancestral Hourglass</b></p>
<p><b>Effect</b>: Lower cost of Lineage level based on time spent this game.FC cost is reset when you purchase a new lineage level.</p>
<p><b>Old Formula</b>: (x ^ (1 - 0.01 * ((y ^ 1.1) - z / 5)) / 10), where x is hours this game, y is lineage level and z is reincarnations.</p>
<p><b>New Formula</b>:  (x ^ (0.9 - 0.01 * (((y - 20) ^ 1.4) - z / 4)) / 10), where x is hours this game, y is lineage level and z is reincarnations.</p>
<br/>
<p><img src=http://musicfamily.org/realm/Factions/picks/HolyFrenzySecretTrophy.png align=middle><b> Holy Frenzy</b></p>
<p><b>Effect</b>: While Blood Frenzy or Holy Light are active, increase the production of all buildings.</p>
<p><b>Old Formula</b>: (50 * T ^ 2)</p>
<p><b>New Formula</b>: (250 * T ^ 2)</p>
<hr>
<p><b>Research</b>: C1300 - Scintillation</p>
<p><b>Old Effect</b>: Increase production bonus from gems based on maximum mana.</p>
<p><b>Old Formula</b>: (2 * x^0.4), where x is max mana</p>
<br/>
<p><b>New Effect</b>: Increase production of buildings based on max mana and gem bonus.</p>
<p><b>New Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total bonus from gem bonus upgrades</p>
<hr>
<p><b>Artifact Set Changes</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"><b> Demon Set</b></p>
<p><b>Requirement</b>: A2+</p>
<p><b>Artifacts Required</b>: Demonic Figurine, Demon Horn, Crystallized Lava</p>
<p><b>Cost</b>: Free</p>
<p><b>Effect</b>: Increase non unique building production based on the sum of your faction spells activity time.</p>
<p><b>Old Formula</b>: (0.25 * x ^ 0.75), where x is faction spell activity time.</p>
<p><b>New Formula</b>: (0.4 * x ^ 0.75), where x is faction spell activity time.</p>
<br/>
<p><img src=http://musicfamily.org/realm/Factions/picks/UndeadSet.png align=middle><b> Undead Set</b></p>
<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
<p><b>Old Formula</b>: (35 * log10(1 + x) ^ 3.25), where x is offline Multiplier.</p>
<p><b>New Formula</b>: (9 * ln(1 + x) ^3), where x is offline Multiplier.</p>
<br/>
<p><img src=http://musicfamily.org/realm/Factions/picks/GoblinSet.png align=middle><b> Goblin Set</b></p>
<p><b>Effect</b>: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.</p>
<p><b>Old Formula</b>: (0.01 * x ^ 0.7), where x is time spent this game.</p>
<p><b>New Formula</b>: (0.1 * x ^ 0.7 ), where x is time spent this game.</p>
<br/>
<p><img src=http://musicfamily.org/realm/Factions/picks/AngelSet.png align=middle><b> Angel Set</b></p>
<p><b>Effect</b>: Increase mana regen based on spells cast this game.</p>
<p><b>Old Formula</b>: (0.32 * x ^ 0.32), where x is spells cast.</p>
<p><b>New Formula</b>: (0.35 * x ^ 0.35), where x is spells cast.</p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"><b> Titan Set</b></p>
    <p><b>Requirement</b>: A2+</p>
    <p><b>Artifacts Required</b>: Huge Titan Statue, Titan Shield, Titan Helmet</p>
    <p><b>Cost</b>: Free</p>
    <p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
    <p><b>Old Formula</b>: (0.07 * x ^ 0.7), where x is seconds.</p>
    <p><b>New Formula</b>: (0.09 * x ^ 0.7), where x is seconds.</p>
<hr>
<p><b>Added Base Union Effects</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" alt="Angels Union" align="middle"> <b>Angels Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
<p><b>Formula</b>: (ln(x) ^ 1.8 + ln(y) ^ 2.1), where x is mana spent this game and y is mana regeneration.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/UndeadUnion.png" alt="Undead Union" align="middle"> <b>Undead Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
<p><b>Formula</b>: (10 * log10(1 + x) ^ 2), where x is offline bonus multiplier.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/TitansUnion.png" alt="Titans Union" align="middle"> <b>Titans Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Multiplicatively increase Faction Coin find chance by 5% per hour spent in this game.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/FairiesUnion.png" alt="Fairies Union" align="middle"> <b>Fairies Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase assistant production based on amount of Enchanted Fields, Inns and Blacksmiths if building count is even, or all other buildings if building count is odd.</p>
<p><b>Formula</b>: (15 * x ^ 0.475), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
<p><b>Formula</b>: (15 * x ^ 0.475), where x is T4-T11 Buildings (If building count is odd)</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DemonsUnion.png" alt="Demons Union" align="middle"> <b>Demons Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: 1% of all Non-Evil spells cast in this game count as Evil.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/FacelessUnion.png" alt="Faceless Union" align="middle"> <b>Faceless Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase assistants based on the amount of time spent as a random faction. Updates every 3 minutes.</p>
<p><b>Formula</b>: (50 * x ^ 0.5), where x is random faction all time in seconds.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ElvenUnion.png" alt="Elven Union" align="middle"> <b>Elven Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
<p><b>Formula</b>: (2 * ln(1 + x) ^ 2.5), where x is faction coins found in this Reincarnation.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/GoblinsUnion.png" alt="Goblins Union" align="middle"> <b>Goblins Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase the production of all buildings based on spells cast in this game.
<p><b>Formula</b>: (0.4 * x ^ 0.4), where x is spells cast in this game.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" alt="Druids Union" align="middle"> <b>Druids Union</b></p>
<p><b>Effect Requirement</b>: R111+
<p><b>Added Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.
<p><b>Formula</b>: ((x * y) / 2.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
<hr>
<p><b>Union Upgrade Changes</b>
<br/>
<p><b>Fairy</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/Pheromones.png" alt="Pheromones" align="middle"> <b>Pheromones</b></p>
<p>Fairy Upgrade 11</p>
<p><b>Cost</b>: 10 Spvg (1e80) Emerald Coins</p>
<p><b>Requirement</b>: Fairies Union</p>
<p><b>Effect</b>: Gain assistants based on time spent affiliated with Fairies. (This R)</p>
<p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is time spent affiliated with Fairies. (This R)</p>
<p><b>New Formula</b>: (1.5 * x ^ 0.75), where x is time spent affiliated with Fairies. (This R)</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DreamCatchers.png" alt="Dream Catchers" align="middle"> <b>Dream Catchers</b></p>
<p>Fairy Upgrade 12</p>
<p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
<p><b>Requirement</b>: Fairies Union</p>
<p><b>Effect</b>: multiplicative increase mana regen by a random amount. Grows additively every 30 minutes (starts at 0% on upgrade bought)</p>
<p><b>Old Formula</b>: Every 30 minutes, ((upgrade bonus) + rand(0.5, 5))% (averages out to 132% per day).</p>
<p><b>New Formula</b>: Every 30 minutes, ((upgrade bonus) + rand(1.5 - 7.5))% (averages out to 216% per day).</p>
<br/>
<p><b>Undead</b>
<p><img src=http://musicfamily.org/realm/Factions/picks/EternalServitude.png align=middle><b> Eternal Servitude</b></p>
<p>Undead Upgrade 12</p>
<p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
<p><b>Requirement</b>: Undead Union</p>
<p><b>Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
<p><b>Old Formula</b>: (10000 + 25 * (x / 1800) ^ 2), where x is seconds this game.</p>
<p><b>New Formula</b>: (10000 + 75 * (x / 1800) ^ 2), where x is seconds this game.</p>
<br/>
<p><b>Druid</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" alt="Lunar Cycle" align="middle"> <b>Lunar Cycle</b></p>
<p>Druid Upgrade 11</p>
<p><b>Cost</b>: 10 Spvg (1e80) Emerald Coins</p>
<p><b>Requirement</b>: Druids Union</p>
<p><b>Effect</b>: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.</p>
<p><b>Old Formula</b>: (x + y) ^0.65 * ( 1 / (1 + abs(x - y) ) ) ^0.25, where x is time this game in seconds and y is offline time this game in seconds.</p>
<p><b>New Formula</b>: (x + y) ^ 0.65 * (1 / (1 + abs(x - 2y))) ^ 0.25, where x is time this game in seconds and y is offline time this game in seconds.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/GroveFarming.png" alt="Grove Farming" align="middle"> <b>Grove Farming</b></p>
<p>Druid Upgrade 12</p>
<p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
<p><b>Requirement</b>: Druids Union</p>
<p><b>Old Effect</b>: Increase the production of all buildings based on their tier. Lower tiers get better bonuses.</p>
<p><b>Old Formula</b>: (10 * (11 - T) ^ 3), where T is building tier.</p>
<br/>
<p><b>New Effect</b>: Increase the production of all buildings based on their tier. Middle tiers get better bonuses.</p>
<p><b>New Formula</b>: (0.75 * ((6 - abs(6 - T)) ^ 5), where T is building tier.</p>
<br/>
<p><b>Elven</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" alt="Wooden Dices" align="middle"> <b>Wooden Dice</b></p>
<p>Elf Upgrade 10</p>
<p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
<p><b>Elven Luck Formula</b>: (x ^ 0.3), where x is Arboreal Cities count.</p>
<p><b>Old Production Formula</b>: (7 * x ^ 0.7), where x is Arboreal Cities count.</p>
<p><b>New Production Formula</b>: (8 * x ^ 0.8), where x is Arboreal Cities count.</p>
<p><b>Old Faction Coin Formula</b>: (1.5 * x ^ 0.7), where x is Arboreal Cities count.</p>
<p><b>New Faction Coin Formula</b>: (1.45 * x ^ 0.7), where x is Arboreal Cities count.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" alt="Camouflage" align="middle"> <b>Camouflage</b></p>
<p>Elf Upgrade 11</p>
<p><b>Cost</b>: 10 Spvg (1e80) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Effect</b>: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.</p>
<p><b>Old Formula</b>: (0.68 * x ^ 0.68), where x is assistant amount.</p>
<p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is assistant amount.</p>
<p><b>Note</b>: Applies to formulas that use Assistant count, but not actual assistants.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png" alt="Elven Discipline" align="middle"> <b>Elven Discipline</b></p>
<p>Elf Upgrade 12</p>
<p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>Requirement</b>: Elven Union</p>
<p><b>Old Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game.</p>
<p><b>Old Formula</b>: (ln(x))</p>
<p><b>New Effect</b>: Increase mana regeneration additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
<p><b>New Formula</b>: (100 * ln(x) ^ 1.5), where x is Faction Coins found in this game.(additively)</p>
<p><b>New Formula</b>: (1.45 * ln(x)), where x is Faction Coins found in this game.(multiplicatively)</p>
<br/>
<p><b>Titan</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/ColossusKingdom.png" alt="Colossus Kingdom" align="middle"> <b>Colossus Kingdom</b></p>
<p>Titan Upgrade 12</p>
<p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
<p><b>Requirement</b>: Titan Union</p>
<p><b>Old Effect</b>: Additively gain assistants based on total time spent as Order.</p>
<p><b>New Effect</b>: Multiplicative gain assistants based on total time spent as Order.</p>
<p><b>Old Formula</b>: (x ^ 0.7), where x is seconds this R.</p>
<p><b>New Formula</b>: (20 * x ^ 0.7), where x is seconds this R.</p>
<br/>
<p><b>Demon</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" alt="Devastation" align="middle"> <b>Devastation</b></p>
<p>Demon Upgrade 12</p>
<p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
<p><b>Requirement</b>: Demons Union</p>
<p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
<p><b>Old Formula</b>: (0.35 * x ^ 0.65), where x is mana regen.</p>
<p><b>Old Formula</b>: (0.35 * x ^ 0.6), where x is mana regen.</p>
<hr>
<p><b>Unique Building Changes</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/SwarmingTowersUniqueBuilding.png" alt="Swarming Towers" align="middle"></p>
<p>Upgrade Wizard Towers to Swarming Towers, boosting their production based on the amount of active spells and unlocking more unique perks for the building.</p>
<p><b>Effect</b>: Increase production based on the amount of active spells.</p>
<p><b>Effect</b>: Also grants access to Faction Union.</p>
<p><b>Old Formula</b>: (0.35*x^2.35)%, where x is active spells.</p>
<p><b>New Formula</b>: (0.4 * x ^ 2.4)%, where x is active spells.</p>
<hr>
<p><b>Added</b>: 1 Trophy</p>
<p><img src="http://musicfamily.org/realm/Factions/picks/ArtoftheCrowTrophy.png" align="middle"><b> Art of the Crow Trophy</b></p>
<p><b>Requirement</b>: Have any 6 complete Faction Artifact Sets.</p>
<p><b>Effect</b>: Gives upgrade with the same name.</p>
<br/>
<p><b> Art of the Crow Upgrade</b></p>
<p><b>Requirement</b>: Faction and Set Alignments has to match to buy the upgrade (Evil, Good, Neutral).</p>
<p><b>Cost</b>: 1 Qavg (1.0e75)</p>
<br>
<style>
  div#images{
  width:100%;
  text-align:left;
}
div#images div{
  display:inline-block;
}
</style>
<p><b>Alignments</b></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Proof of Order</b>
<div id="images">
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCOrderGood.png" width="54" height="54" />
    <center>Good</center>
  </div>
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCOrderEvil.png" width="54" height="54" />
    <center>Evil</center>
  </div>
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCOrderNeutral.png" width="54" height="54" />
    <center>Neutral</center>
  </div>
</div>
<p><b>Effect</b>: Multiplicatively increase max mana.</p>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Proof of Chaos</b>
<br>
<div id="images">
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCChaosGood.png" width="54" height="54" />
    <center>Good</center>
  </div>
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCChaosEvil.png" width="54" height="54" />
    <center>Evil</center>
  </div>
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCChaosNeutral.png" width="54" height="54" />
    <center>Neutral</center>
  </div>
</div>
<p><b>Effect</b>: Multiplicatively increase assistants.</p>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Proof of Balance</b>
<br>
<div id="images">
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCBalanceGood.png" width="54" height="54" />
    <center>Good</center>
  </div>
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCBalanceEvil.png" width="54" height="54" />
    <center>Evil</center>
  </div>
  <div>
  <img src="http://musicfamily.org/realm/Factions/picks/AotCBalanceNeutral.png" width="54" height="54" />
    <center>Neutral</center>
  </div>
</div>
<p><b>Balance</b>: Multiplicatively increase mana regeneration.</p>
<br>
<p><b>Good Effect</b>: The amount increased is based on on Excavations made.</p>
<p><b>Formula</b>: (0.05 *  x ^ 1.1), where x is excavation count.</p>
<br/>
<p><b>Evil Effect</b>: The amount increased is based on time spent in this game.</p>
<p><b>Formula</b>: (4 * x ^ 0.44), where x is time spent this game.</p>
<br/>
<p><b>Neutral Effect</b>: The amount increased is based on Royal Exchanges made</p>
<p><b>Formula</b>: (0.8 * x ^ 0.8), where x royal exchanges made.</p>
<hr>
<p><b>Added</b>: 3 Artifacts for Prestige Factions</p>
<p><b>Dwarven</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/BeardHair.png" align="middle"><b> Beard Hair</b></p>
<p><b>Description</b>: Hopefully coming from a real dwarven beard.</p>
<p><b>Requirement</b>: R116+, 3000+ Excavations, Play as Dwarf</p>
<p><b>Chance</b>: (x / 100000000 (100M))%, where x is assistant count</p>
<br/>
<p><b>Drow</b>:
<p><img src="http://musicfamily.org/realm/Factions/picks/PoisonVial.png" align="middle"><b> Poison Vial</b></p>
<p><b>Description</b>: One drop of this is enough to fell thousands of non-immune creatures.</p>
<p><b>Requirement</b>: R116+, 3000+ Excavations, Play as Drow</p>
<p><b>Chance</b>: (x / 10000000 (10M))%, where x is combo strike production bonus</p>
<br/>
<p><b>Dragon</b>:
<p><img src="http://musicfamily.org/realm/Factions/picks/DragonScale.png" align="middle"><b> Dragon Scale</b></p>
<p><b>Description</b>: Very high on the realms' most accurate hardiness rankings.</p>
<p><b>Requirement</b>: R116+, 3000+ Excavations, Play as Dragon</p>
<p><b>Chance</b>: (x / 2500)%, where x is active spells</p>
<hr>
<p><b>Added</b>: 3 Artifacts Sets for Prestige Factions</p>
<p><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"><b> Dwarven Set</b></p>
<p><b>Requirement</b>: R116+</p>
<p><b>Artifacts Required</b>: Dwarven Bow, Stone Tankard, Beard Hair</p>
<p><b>Cost</b>: Free</p>
<p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
<p><b>Formula</b>: (x ^ 0.9), where x is Royal Exchange bonus.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"><b> Drow Set</b></p>
<p><b>Requirement</b>: R116+</p>
<p><b>Artifacts Required</b>: Ceremonial Dagger, Arachnid Figurine, Poison Vial</p>
<p><b>Cost</b>: Free</p>
<p><b>Effect</b>: Increase offline production based on evil spells cast (this R).</p>
<p><b>Formula</b>: (0.75 * x ^0.75 ), where x is total evil spells cast (this R).</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DragonSet.png" align="middle"><b> Dragon Set</b></p>
<p><b>Requirement</b>: R116+</p>
<p><b>Artifacts Required</b>: Dragon Fang, Dragon Soul, Dragon Scale</p>
<p><b>Cost</b>: Free</p>
<p><b>Effect</b>: Increase the production of Non-Unique buildings based on Faction Coins found in this game.</p>
<p><b>Formula</b>: (16 * log10(1 + x) ^ 2), where x is Faction Coins found.</p>
<hr>
<p><b>Added</b>: Prestige Factions</p>
<p><b>Drow</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/BrothelQuest.png" align="middle"><b> Brothel Quest</b></p>
<p><b>Description</b>: Yawn... Kivvil, your realm is starting to bore us. We need better places to have fun and Rest. Show us your spellcasting ability and we'll teach you a few new things about underworld fun.</p>
<p><b>Requirement</b>: 1 B (1e9) spells cast this game</p>
<p><b>Cost</b>: 100 Vg (1e65)</p>
<p><b>Effect</b>: Unlocks 2nd Unique Building for Drow</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/Brothel.png" align="middle"><b> Brothel Upgrade</b></p>
<p><b>Cost</b>: 100 Qivg (1e80)</p>
<p><b>Effect</b>: Upgrade Inns to Brothels, boosting their production based on Royal Exchanges made and unlocking more unique perks for the buildings.</p>
<p><b>Formula</b>: (10 * x ^1.05), where x is royal exchanges this game</p>
<br/>
<p><b>Drow Unique Building</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/BrothelUniqueBuilding.png" align="middle"></p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DrowUnion.png" align="middle"><b> Drow Union</b></p>
<p><b>Cost</b>: 1e24 Drow coins</p>
<p><b>Effect</b>: Unlocks Union Upgrades</p>
<br/>
<p><b>Other Effects</b></p>
<p><b>Proof of Order</b>: Increase offline bonus based on max mana.</p>
<p><b>Formula</b>:  (0.1 * x ^ 0.85), where x is max mana</p>
<br/>
<p><b>Proof of Balance</b>: Multiplicatively Increase max mana based on Tax Collections cast this game.</p>
<p><b>Formula</b>: (0.1 * ln(1 + x) ^ 2.8), where x is Tax Collections cast this game.</p>
<br/>
<p><b>Proof of Chaos</b>: Increase the production of a specific building tier depending on building amount, and increase its production based on time spent offline this reincarnation.</p>
<p><b>Formula</b>: (6 * x ^0.6 building chosen (tier): 1 + floor(x % 11)</p>
<br/>
<p><b>Union Upgrades</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/SpiderClericsUnionUpgrade1.png" align="middle"><b> Spider Clerics</b></p>
<p><b>Cost</b>: 10 Dtg (1e100)</p>
<p><b>Effect</b>: Increase Royal Exchange bonus based on Brothel amount.</p>
<p><b>Formula</b>: (1.75 * x ^ 0.75), where x is Brothels</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AncillaeObscureUnionUpgrade2.png" align="middle"><b> Ancillae Obscurae</b></p>
<p><b>Cost</b>: 100 Qitg (1e110)</p>
<p><b>Effect</b>: Increase Non-Unique building production based on amount of Unique Buildings.</p>
<p><b>Formula</b>: (45 * x ^ 0.45), where x is amount of Unique Buildings.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/CrystalServantsUnionUpgrade3.png" align="middle"><b> Crystal Servants</b></p>
<p><b>Cost</b>: 1 Notg (1e120)</p>
<p><b>Effect</b>: Multiplicatively gain assistants based on current gem amount.</p>
<p><b>Formula</b>: (log10(x) ^ 2), where x is amount of current gems.</p>
<hr>
<p><b>Dwarf</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/HighBastionQuest.png" align="middle"><b> High Bastion Quest</b></p>
<p><b>Description</b>: Aye lad! Yer castle looks solid, but we think we can do better, yes? Excavate to yer best and then again from the start, we'll have a deal.</p>
<p><b>Requirement</b>: 5 free excav resets this R</p>
<p><b>Cost</b>: 100 Vg (1e65)</p>
<p><b>Effect</b>: Unlocks 2nd Unique Building for Dwarf</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/HighBastion.png" align="middle"><b> High Bastion Upgrade</b></p>
<p><b>Cost</b>: 100 Qivg (1e80)</p>
<p><b>Effect</b>: Upgrade Royal Castles to High Bastions, boosting their production based on clicks made in this reincarnation and unlocking more unique perks for the building.</p>
<p><b>Formula</b>: (ln(1 + x) ^ 2), where x is clicks this R</p>
<br/>
<p><b>Dwarf Unique Building</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/HighBastionUniqueBuilding.png" align="middle"></p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"><b> Dwarven Union</b></p>
<p><b>Cost</b>: 1 Sp (1e24) Dwarven coins</p>
<p><b>Effect</b>: Unlock Union Upgrades.</p>
<br/>
<p><b>Other Effects</b></p>
<p><b>Proof of Order</b>: Increase all building production based on time spent this reincarnation.</p>
<p><b>Formula</b>:  (0.65 * x ^ 0.65), where x is time spent this reincarnation.</p>
<br/>
<p><b>Proof of Balance</b>: Increase mana regen based on clicks made this reincarnation.</p>
<p><b>Formula</b>: (ln(1 + x) ^ 2.45), where x is amount of clicks made this game.</p>
<br/>
<p><b>Proof of Chaos</b>: Chaotically Multiplicatively increase assistant count based on spells cast this R.</p>
<p><b>Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2, for each digit of x, sum(2 * (mod(x,10) ^ y)</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/SolidityUnionUpgrade1.png" align="middle"><b> Solidity</b></p>
<p><b>Cost</b>: 10 Dtg (1e100)</p>
<p><b>Effect</b>: Multiplicatively increase gem production based on High Bastion you own. </p>
<p><b>Formula</b>: (1.55 * x ^ 0.55), where x is royal castles multiplicative.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/StonetalkingUnionUpgrade2.png" align="middle"><b> Stonetalking</b></p>
<p><b>Cost</b>: 100 Qitg (1e110)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the highest between max mana and mana regeneration.</p>
<p><b>Formula</b>: (0.055 * max(x, y) ^ 0.55), where x is max mana and y is mana regen.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/RefinedMineralsUnionUpgrade3.png" align="middle"><b> Refined Minerals</b></p>
<p><b>Cost</b>: 1 Notg (1e120)</p>
<p><b>Effect</b>: Multiplicatively increase mana regen and max mana based on highest time spent as Order, Balance or Chaos.</p>
<p><b>Formula</b>: (0.03 * max(x, y ,z) ^ 0.7), where x is order time, y is balance time, and z is chaos time (All in seconds this R).</p>
<hr>
<p><b>Dragon</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureQuest.png" align="middle"><b> Dragon Pasture Quest</b></p>
<p><b>Description</b>: Insignificant creature, you have much to do to gain our full respect. Our hatchlings need more food... yes, this would be a task worthy of your stature. Show your ability to maintain powerful magic at the same time, and we will let you serve us.</p>
<p><b>Requirement</b>: 42 active spells</p>
<p><b>Cost</b>: 1e65</p>
<p><b>Effect</b>: Unlocks 2nd Unique Building for Dragon</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DragonPasture.png" align="middle"><b> Dragon Pasture Upgrade</b></p>
<p><b>Cost</b>: 1e80</p>
<p><b>Effect</b>: Upgrade Farm to Dragon Pastures, boosting their production based on your max mana and unlocking more unique perks for the building.</p>
<p><b>Formula</b>: (0.65 * x ^ 0.65), where x is your max mana.</p>
<br/>
<p><b>Dragon Unique Building</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureUniqueBuilding.png" align="middle"></p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"><b> Dragon Union</b></p>
<p><b>Cost</b>: 100 Sp (1e26) Dwarven and Drow coins</p>
<p><b>Effect</b>: Unlock Union Upgrades.</p>
<br/>
<p><b>Other Effects</b></p>
<p><b>Proof of Order</b>:  Increase the production of all buildings based on time spent as Order.</p>
<p><b>Formula</b>: (1.6 * x ^ 0.6), where x is time spent this Order.</p>
<br/>
<p><b>Proof of Balance</b>: Multiplicatively increase max mana based on your current Lineage level.</p>
<p><b>Formula</b>: (1.3 * x ^ 1.3), where x is Lineage level.</p>
<br/>
<p><b>Proof of Chaos</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend FC chance(even for Unique, odd for Non-Unique).</p>
<p><b>Formula</b>: Non-Unique (25  * 0.6 * x ^ 0.6), where x is FC chance.</p>
<p><b>Formula</b>: Unique (0.6 * x ^ 0.6), where x is FC chance.</p>
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
<p><b>Effect</b>: Increase the production of all buildings based on your max mana.</p>
<p><b>Formula</b>: (0.6 * x ^ 0.45), where x is max mana.</p>
    </div>
   </div>
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.1.1 March 26, 2018</a></b></p>
        <div class="autohide">
<p><b>New Easter Feat</b>: With new reward</p>
<hr>
<p><b>Hourglass</b>: Formula changed</p>
<p><b>Old Formula</b>: (x ^ (1 - 0.01 * ((y ^ 1.01) - z / 5) / 10), where x is hours this game (reset when upgrading lineage), y is lineage level and z is reincarnations.</p>
<p><b>New Formula</b>: (x ^ (1 - 0.01 * ((y ^ 1.1) - z / 5) / 10), where x is hours this game (reset when upgrading lineage), y is lineage level and z is reincarnations.</p>
<hr>
<p><b>Undead Set</b>: Formula and Chance changed</p>
<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
<p><b>Old Formula</b>: (45 * x ^ 0.6), where x is offline Multiplier.</p>
<p><b>New Formula</b>: 35 * log10(1 + x) ^ 3.25, where x is offline Multiplier.</p>
<br/>
<p><b>Dusty Coffin</b></p>
<p><b>Old Chance</b>: ((1 / (30 + x ^ 1.75))%, where x is time this game in seconds.</p>
<p><b>New Chance</b>: ((1 / (30 + x ^ 1.5))%, where x is time this game in seconds.</p>
<hr>
<p><b>Elf artifact</b> Chance changed</p>
<p><b>Raw Emerald</b></p>
<p><b>Old Chance</b>: (((2 * x) ^ 2) / 10000)%, where x is non-ruby excavation resets (this game).</p>
<p><b>New Chance</b>: (((2 * x) ^ 4.5) / 10000)%, where x is non-ruby excavation resets (this game).</p>
<hr>
<p><b>Union Upgrades</b>: Cost changed</p>
<p><b>Upgrade 11</b></p>
<p><b>Old Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
<p><b>New Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
<p><b>Upgrade 12</b></p>
<p><b>Old Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
<p><b>New Cost</b>: 100 Tg (1e95) Emerald Coins</p>
<hr>
    </div>
   </div>
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
            <p><b>Formula</b>: (0.72 * min(x, y, z, s, t, u) ^ 0.72), where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
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
    <p><b>Artifacts Required</b>: DustyCoffin, Rotten Organ, Jaw Bone</p>
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
    <p><b>Formula</b>: (0 .5 * log10(x + 1) ^ 2.5), where x is Faction Coin chance.</p>
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
<p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your mana regeneration rate.</p>
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
<p><b>Effect</b>: Every 30 minutes, multiplicative increase mana regen by a random amount. (starts at 0% on a new run)</p>
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
    </div>
<?php include "../scripts/footer.html"; ?>
