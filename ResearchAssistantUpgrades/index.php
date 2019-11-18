<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Assistant Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S225</b> - <b>For</b>: Undead - <b>Research Name</b>: Necromancy
<p><b>Requirement</b>: Research Resurrection (D175) &amp; Cryomancy (S200)
<p><b>Cost</b>: 2.087 QaQig (2.087E165)
<p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.
<p><b>Formula</b>: round(5 * x^0.75)%, where x is the number of Necropolises you own.
<br/>
<br/>
<p><b>S375</b> - <b>For</b>: Faceless - <b>Research Name</b>: Illusion
<p><b>Requirement</b>: Research Reverberation (S330) &amp; Mesmerization (S305)
<p><b>Cost</b>: 541 DSxg (5.41E191)
<p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.
<p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes.
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C305</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Golemcraft
<p><b>Requirement</b>: 5 days as Titans(Total across all R)
<p><b>Cost</b>: 255.2 OcQig (2.552E179)
<p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).
<p><b>Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).
<br/>
<br/>
<p><b>C1325</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Plasmation
<p><b>Requirement</b>: 50m (5e7) Mana Produced (This game)
<p><b>Cost</b>: 601.6 Tvg (6.016E74)
<p><b>Effect</b>: Gain assistants based on mana produced in this game.
<p><b>Formula</b>: floor(1.25 * ln(1 + x)^2), where x is mana produced (this game).
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D175</b> - <b>For</b>:  Angel - <b>Research Name</b>: Resurrection
<p><b>Requirement</b>: Research Blessing (D1) &amp; Refraction (A55)
<p><b>Cost</b>: 3.273 Uqig (3.273E156)
<p><b>Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)
<p><b>Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).
<br/>
<br/>
<p><b>D250</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Demonology
<p><b>Requirement</b>: Research Transcendence (D200) &amp; Pyromancy (S150)
<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
<p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.
<p><b>Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>D320</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Deliverance
<p><b>Requirement</b>: 350 m/s Mana Regen
<p><b>Cost</b>: 1.117 NoQig (1.117E180)
<p><b>Effect</b>: Increase assistants production based on mana regeneration.
<p><b>Formula</b>: round(20 * x^0.85)%, where x is your Mana per Second stat.
<br/>
<br/>
<p><b>D350</b> - <b>For</b>:  Titan - <b>Research Name</b>: Descent
<p><b>Requirement</b>: Research Swarming (W250) &amp; Heroism (W330)
<p><b>Cost</b>: 21.42 USxg (2.142E187)
<p><b>Effect</b>: Gain additional assistants based on the amount of Olympian Halls you own.
<p><b>Formula</b>: floor(x^0.5), where x is the number of Olympian Halls you own.
<p><b>------------------------------</b>
<p><b>Economics</b>
<p><b>E25</b> - <b>For</b>:  Elf - <b>Research Name</b>: Commerce
<p><b>Requirement</b>: 100 M (1E8) Faction Coins (Found this Game)
<p>Cost: 12.63 Dqag (1.263E130)
<p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.
<p><b>Formula</b>: floor((1 + 6x)^0.5 - 1), where x is your Royal Exchanges Made stat.
<br/>
<br/>
<p><b>E590</b> - <b>For</b>:  Goblin,Drow - <b>Research Name</b>: Slavery
<p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)
<p><b>Cost</b>: 39.16 QiSpg (3.916 E229)
<p><b>Effect</b>: Gain additional assistants based on the amount of Evil buildings you own.
<p><b>Formula</b>: (0.1 * x ^ 0.8), where x is the number of Non Unique Buildings you own.
<br/>
<br/>
<p><b>E3300</b> - <b>For</b>:  Mercenary - <b>Research Name</b>: Hirelings
<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).
<p><b>Cost</b>: 454.5 TSxg (4.545e194)
<p><b>Effect</b>: Gives assistants based on the amount of coins you own.
<p><b>Formula</b>: 2 * log10(x + 1) additive
<p><b>------------------------------</b>
<p><b>Alchemy</b>
<p><b>A120</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Vivification
<p><b>Requirement</b>: Have 6500 mana
<p><b>Cost</b>: 676 Spqag (6.76E146)
<p><b>Effect</b>: Gain additional assistants based on max mana.
<p><b>Formula</b>: floor(x/15)^0.825), where x is your maximum mana.
<br/>
<br/>
<p><b>A375</b> - <b>For</b>:  Druid - <b>Research Name</b>: Transfusion
<p><b>Requirement</b>: Research Infusion (A251) &amp; Engraving (A305)
<p><b>Cost</b>: 541 DSxg (5.41E191)
<p><b>Effect</b>: Gain additional assistants based on mana produced this game.
<p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A495</b> - <b>For</b>:  Dwarf - <b>Research Name</b>: Elixirs
<p><b>Requirement</b>: 500 Base Assistants (as Drow)
<p><b>Cost</b>: 731.4 NoSxg (7.314E212)
<p><b>Effect</b>: Increase assistants production based on the amount of research made.
<p><b>Formula</b>: 120 * x^0.42%, where x is the Amount of Researches made.
<p><b>------------------------------</b>
<p><b>Warfare</b>
<p><b>W175</b> - <b>For</b>:  Demon - <b>Research Name</b>: Overwhelm
<p><b>Requirement</b>: Research Assault (W1) &amp; Invasion (W150)
<p><b>Cost</b>: 3.273 Uqig (3.273E156)
<p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.
<p><b>Formula</b>: (8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.
<br/>
<br/>
<p><b>W200</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Crusade
<p><b>Requirement</b>: Research Hallowing (D50) &amp; Formation (W180)
<p><b>Cost</b>: 82.65 Dqig (8.265E160)
<p><b>Effect</b>: Gain additional assistants based on total time spent as Good.
<p><b>Formula</b>: floor(0.065 * x^0.5), where x is your Time Spent Being Good (Total) stat.
<br/>
<br/>
<p><b>W250</b> - <b>For</b>:  All Factions - <b>Research Name</b>: Swarming
<p><b>Requirement</b>: Research Overwhelm (W175) &amp; Berserking (W205)
<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
<p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.
<p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.
<br/>
<br/>
<p><b>W520</b> - <b>For</b>:  Drow - <b>Research Name</b>: Stalking
<p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)
<p><b>Cost</b>: 18.47 Uspg (1.847E217)
<p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)
<br/>
<br/>
<p><b>W590</b> - <b>For</b>:  Demon,Drow - <b>Research Name</b>: Torture
<p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)
<p><b>Cost</b>: 39.16 QiSpg (3.916E229)
<p><b>Effect</b>: Increase assistants production based on total time spent being Evil. (This R)
<p><b>Formula</b>: 8 * x^0.8%, where x is your Time Spent Being Evil stat.
<?php include "../scripts/footer.html"; ?>
