<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>The Research Facilities</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Warfarer.png" alt="Warfare" align="middle"> <b>Warfare</b></p>
<p>Use strategical prowess and manpower to manipulate the production system in your favor.</p>
<p><b>Increases</B>: <b>Demon</B>, <b>Titan</B>, and <b>Drow</B> production.</p>
<p><b>----------------------------------</b></p>
<h6>Warfare Facility</h6>
<p><b>W1</b> - <b>For</b> Demon - <B>Spell Name</B> Assault</p>
<p><B>Cost</B>: 750 Qag (7.50E125)</P>
<p><B>Effect</B>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
<p><B>Formula</B>: round(70 * x^0.55)%, where x is Hellfire Blasts Cast This Game.
<p><b>----------------------------------</b></p>
<p><b>W10</b> - <b>For</b> Elf - <B>Spell Name</B> Dueling</p>
<p><B>Requirement</B>: 2000 Warrior Barracks
<p><B>Cost</B>: 28.83 Uqag (2.883E127)
<p><B>Effect</B>: Increase the production of all other buildings by 90% per Elven Training Grounds you own.</p>
<p><b>----------------------------------</b></p>
<p><b>W25</b> - <b>For</b> Goblin - <B>Spell Name</B> War Funds
<p><B>Requirement</B>: 1 Tqag (1E132) Coins Gained (This Game)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.
<p><B>Formula</B>: round(5 * x^0.6)%, where x is Tax Collections Cast This Game.
<p><b>----------------------------------</b></p>
<p><b>W50</b> - <b>For</b> Undead - <B>Spell Name</B> Exertion
<p><B>Requirement</B>: 2 days of Evil Play Time
<p><B>Note</B>: Play as any Evil faction, but you must be Demon to unlock this.
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Increase Faction Coin find chance based on the amount of Undercities you own.
<p><B>Formula</B>:(floor(6.5x^0.65))%, where x is the number of Undercities you own.
<p><b>----------------------------------</b></p>
<p><b>W120</b> - <b>For</b> Any - <B>Spell Name</B> Betrayal
<p><B>Requirement</B>: 250 base assistants
<p><B>Cost</B>: 676 Spqag (6.76E146)
<p><B>Effect</B>: Increase the production of non-unique buildings based on the amount of assistants you own.
<p><B>Formula</B>: round(1.5 * x^1.5)%, where x is the amount of assistants you own.
<p><b>----------------------------------</b></p>
<p><b>W135</b> - <b>For</b> Any - <B>Spell Name</B> Rampage
<p><B>Requirement</B>: 580 Trophies(as Demon)
<p><B>Cost</B>: 296 Ocqag (9.6E149)
<p><B>Effect</B>: Increase maximum mana based on the number of trophies you have unlocked.
<p><B>Formula</B>: floor(1.25x), where x is the amount of trophies unlocked.
<p><b>----------------------------------</b></p>
<p><b>W150</b> - <b>For</b> Any - <B>Spell Name</B> Invasion
<p><B>Requirement</B>: Research War Funds (W25) & Trophies (W135)
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of assistants you own.
<p><B>Formula</B>: round(32 * x^0.75)%, where x is the amount of assistants you own.
<p><b>----------------------------------</b></p>
<p><b>W175</b> - <b>For</b> Demon - <B>Spell Name</B> Overwhelm
<p><B>Requirement</B>: Research Assault (W1) & Invasion (W150)
<p><B>Cost</B>: 3.273 Uqig (3.273E156)
<p><B>Effect</B>: You gain additional assistants based on total amount of evil spells cast. (This Game)
<p><B>Formula</B>: floor(0.75 * x^0.55), where x is the amount of evil spells cast.
<p><b>----------------------------------</b></p>
<p><b>W180</b> - <b>For</b> Any - <B>Spell Name</B> Formation
<p><B>Requirement</B>: 1000 Call to Arms (Total) Research Dueling (W10) & Exertion (W50)
<p><B>Cost</B>: 24.85 Uqig (2.485E157)
<p><B>Effect</B>: Each building counts 15 times for Call to Arms purposes.
<p><b>----------------------------------</b></p>
<p><b>W200</b> - <b>For</b> Any - <B>Spell Name</B> Crusade
<p><B>Requirement</B>: Research Hallowing (D50) & Formation (W180)
<p><B>Cost</B>: 82.65 Dqig (8.265E160)
<p><B>Effect</B>: Gain additional assistants based on total time spent as Good.
<p><B>Formula</B>: floor(0.065 * x^0.5), where x is your Time Spent Being Good (Total) stat.
<p><b>----------------------------------</b></p>
<p><b>W205</b> - <b>For</b> Any Evil - <B>Spell Name</B> Berserking
<p><B>Requirement</B>: 850 Blood Frenzy, Research Rampage (W135) & Retribution (D150)
<p><B>Cost</B>: 627.6 Dqig (6.276E161)
<p><B>Effect</B>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.
<p><B>Formula</B>: floor(4.5 * x^0.95) / 10, where x is your Assistants stat.
<p><b>----------------------------------</b></p>
<p><b>W225</b> - <b>For</b> Angel - <B>Spell Name</B> Critical Strike
<p><B>Requirement</B>: Research Dueling (W10) & Transfixion (D55)
<p><B>Cost</B>: 2.087 Qaqig (2.087E165)
<p><B>Effect</B>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this game.
<p><B>Formula</B>: 5 * x^0.65%, where x is Holy Light Active Time This Game in seconds.
<p><b>----------------------------------</b></p>
<p><b>W250</b> - <b>For</b> Any - <B>Spell Name</B> Swarming
<p><B>Requirement</B>: Research Overwhelm (W175) & Berserking (W205)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Gain additional assistants based on the amount of trophies you unlocked.
<p><B>Formula</B>: floor(x / 8), where x is the amount of trophies unlocked.
<p><b>----------------------------------</b></p>
<p><b>W260</b> - <b>For</b> Titan - <B>Spell Name</B> Athletics
<p><B>Requirement</B>: 3,000 Olympian Halls
<p><B>Cost</B>: 3.039 SxQig (3.039E171)
<p><B>Effect</B>: Increase the production of all other buildings by 100% per Olympian Hall you own.
<p><b>----------------------------------</b></p>
<p><b>W275</b> - <b>For</b> Faceless - <B>Spell Name</B> Domination
<p><B>Requirement</B>: 300 Base Assistants (as Faceless)
<p><B>Cost</B>: 1.331 SpQig (1.331E174)
<p><B>Effect</B>: Gain additional Faction Coins per second based on the highest amount of assistants you had in a single game.
<p><B>Formula</B>: floor(1.5 * x^1.15), where x is your Assistants (Max) stat.
<p><b>----------------------------------</b></p>
<p><b>W290</b> - <b>For</b> Any - <B>Spell Name</B> Entrench
<p><B>Requirement</B>: 2,000 Excavations
<p><B>Cost</B>: 582.7 SpQig (5.827E176)
<p><B>Effect</B>: Increase the production of Unique buildings based on the amount of Excavations you made.
<p><B>Formula</B>: round(15 * x^0.8)%, where x is the amount of excavations made.
<p><b>----------------------------------</b></p>
<p><b>W320</b> - <b>For</b> Any - <B>Spell Name</B> Shattering
<p><B>Requirement</B>: 2,750 Excavations
<p><B>Cost</B>: 1.117 NoQig (1.117E180)
<p><B>Effect</B>: Increase your clicking reward based on the amount of Excavations you made.
<p><B>Formula</B>: round(10 * x^0.75)%, where x is the amount of excavations made.
<p><b>----------------------------------</b></p>
<p><b>W330</b> - <b>For</b> Any - <B>Spell Name</B> Heroism
<p><B>Requirement</B>: Research Crusade (W200) & Athletics (W260).
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Increase your click reward based on the amount of trophies you unlocked.
<p><B>Formula</B>: round(2.5 * x)%, where x is the amount of trophies unlocked.
<p><b>----------------------------------</b></p>
<p><b>W350</b> - <b>For</b> Druid - <B>Spell Name</B> Survival
<p><B>Requirement</B>: Research Creeping (A300) & Synthesis (A270).
<p><B>Cost</B>: 21.42 USxg (2.142E187)
<p><B>Effect</B>: Increase the production of all other buildings based on the production of your Stonehenge Circles.
<p><B>Formula</B>: round(50 * log^1.3(1 + x))%, where x is the production of your Stonehenge Circles.
<p><b>----------------------------------</b></p>
<p><b>W400</b> - <b>For</b> Any - <B>Spell Name</B> Siege
<p><B>Requirement</B>: Research Architecture (C251) & Entrench (W290).
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)
<p><B>Effect</B>: Each building in the three highest building tiers count as 2 buildings for all purposes.
<p><B>Note</B>: that all purposes doesn't mean all purposes. W400 counts for most upgrade and spell formulas, but does not count for most trophies. Iron Rush is one exception.
<p><b>----------------------------------</b></p>
<p><b>W405</b> - <b>For</b> Drow - <B>Spell Name</B> Ambush
<p><B>Requirement</B>: Secret Underground upgrade (as Drow)
<p><B>Cost</B>: 103.7 QaSxg (1.037E197)
<p><B>Effect</B>: Increase the production of Spider Sanctuaries based on offline Bonus
<p><B>Formula</B>: 2.5 * x^0.225%, where x is Offline Production Bonus.
<p><b>----------------------------------</b></p>
<p><b>W520</b> - <b>For</b> Drow - <B>Spell Name</B> Stalking
<p><B>Requirement</B>: Research Exertion (W50) and Ambush (W405)
<p><B>Cost</B>: 18.47 Uspg (1.847E217)
<p><B>Effect</B>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)
<p><b>----------------------------------</b></p>
<p><b>W525</b> - <b>For</b> Any - <B>Spell Name</B> Bloodlust
<p><B>Requirement</B>: 1d12h as Evil, Research Berserking (W205) and Spellcraft (S460)
<p><B>Cost</B>: 140.2 USpg (1.402E218)
<p><B>Effect</B>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.
<p><B>Formula</B>: 300 * floor(x^0.3)%p, where x is Faction Spells' Cast This Game (Vanilla + Prestige spell count).
<p><b>----------------------------------</b></p>
<p><b>W560</b> - <b>For</b> Dwarf - <B>Spell Name</B> Resilience
<p><B>Requirement</B>: Research Eternity (D330) and Mercy (D480)
<p><B>Cost</B>: 204.2 TSpg (2.042E224)
<p><B>Effect</B>: Increase clicking reward based on the amount of clicks made in this game.
<p><B>Formula</B>: 5 * x^0.45%, where x is your Treasure Clicks (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>W590</b> - <b>For</b> Demon,Drow - <B>Spell Name</B> Torture
<p><B>Requirement</B>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)
<p><B>Effect</B>: Increase assistants production based on total time spent being Evil.
<p><B>Formula</B>: 8 * x^0.8%, where x is your Time Spent Being Evil stat.
<p><b>----------------------------------</b></p>
<p><b>W1275</b> - <b>For</b> Any - <B>Spell Name</B> Authority
<p><B>Requirement</B>: 43200 Call to Arms Cast Time in a single game.
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of Non-Unique buildings based on the percentage of trophies you unlocked.
<p><B>Formula</B>: 0.2 * x^2, x is percent of trophies unlocked
<p><b>----------------------------------</b></p>
<p><b>W1375</b> - <b>For</b> Any - <B>Spell Name</B> Scavenging
<p><B>Requirement</B>: 86400 Evil Time Spent (1 day)
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the chance to find Faction Coins based on the amount of assistants you own.
<p><B>Formula</B>: 4 * x^1.4, x is assistants
<p><b>----------------------------------</b></p>
<p><b>W1400</b> - <b>For</b> Neutral,Dragon - <B>Spell Name</B> Cataclysm
<p><B>Requirement</B>:  Research W400, A1200, Affiliated Dragon
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase maximum mana based on the amount of clicks made in this game.
<p><B>Formula</B>: floor 65*ln(1+x^4.25), x is clicks
<p><b>----------------------------------</b></p>
<?php include "../scripts/footer.html"; ?>