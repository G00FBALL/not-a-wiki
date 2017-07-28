<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Assistant Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S225</B>: - <b>For</b> Undead - <B>Research Name</B> Necromancy	
<p><B>Requirement</B>: Research Resurrection (D175) & Cryomancy (S200)	
<p><B>Cost</B>: 2.087 QaQig (2.087E165)	</p>
<p><B>Effect</B>: Increase the production of assistants based on the amount of Necropolises you own.</p>
<p><B>Formula</B>: round(5 * x^0.75)%, where x is the number of Necropolises you own.
<br/>
<br/>
<p><b>S375</B>: - <b>For</b> Faceless - <B>Research Name</B> Illusion	</p>
<p><B>Requirement</B>: Research Reverberation (S330), Mesmerization (S305)</p>
<p><B>Cost</B>: 541 DSxg (5.41E191)	</p>
<p><B>Effect</B>: Brainwave also provides progressively more assistants over its duration.</p>
<p><B>Formula</B>: floor(x^2), where x is how many minutes the spell has been active.</p>
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C305</b> - <b>For</b> Any - <B>Research Name</B> Golemcraft</p>
<p><B>Requirement</B>: 5 days as Titans (Total across all R)</p>
<p><B>Cost</B>: 255.2 OcQig (2.552E179)</p>
<p><B>Effect</B>:Gain additional assistants based on your total time spent offline (in hours).</p>
<p><B>Formula</B>: floor(2\sqrt{x}), where x is your Time Spent Offline (Total) in hours stat.</p>
<br/>
<br/>
<p><b>C1325</b> - <b>For</b> Any - <B>Research Name</B> Plasmation</p>
<p><B>Requirement</B>: 50m  Mana Produced (This game)</p>
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Gain assistants based on mana produced in this game.</p>
<p><B>Formula</B>: floor(1.25 * ln(1 + x)^2), where x is mana produced (this game).</p>
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D175</b> - <b>For</b> Angel - <B>Research Name</B> Resurrection
<p><B>Requirement</B>: Research Blessing (D1) & Refraction (A55)
<p><B>Cost</B>: 3.273 Uqig (3.273E156)
<p><B>Effect</B>: You gain additional assistants based on God's Hands activity time.
<p><B>Formula</B>: floor(0.45 * (0.15 * x)^0.6), where x is God's Hands' Active Time This Game.
<br/>
<br/>
<p><b>D250</b> - <b>For</b> Any - <B>Research Name</B> Demonology
<p><B>Requirement</B>: Research Transcendence (D200) & Pyromancy (S150)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Gain additional assistants based on the amount of Faction Coins found in this game.
<p><B>Formula</B>: floor(ln^1.3(1.5 * x)), where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>D320</b> - <b>For</b> Any - <B>Research Name</B> Deliverance
<p><B>Requirement</B>: 350 m/s Mana Regen
<p><B>Cost</B>: 1.117 NoQig (1.117E180)
<p><B>Effect</B>: Increase assistants production based on mana regeneration.
<p><B>Formula</B>: round(20 * x^0.85)%, where x is your Mana per Second stat.
<br/>
<br/>
<p><b>D350</b> - <b>For</b> Titan - <B>Research Name</B> Descent
<p><B>Requirement</B>: Research Swarming (W250) & Heroism (W330)
<p><B>Cost</B>: 21.42 USxg (2.142E187)
<p><B>Effect</B>: Gain additional assistants based on the amount of Olympian Halls you own.
<p><B>Formula</B>: floor(x^0.5), where x is the number of Olympian Halls you own.
<p><b>------------------------------</b>
<p><b>Economics</b>
<p><b>E25</b> - <b>For</b> Elf - <B>Research Name</B> Commerce</p>
<p><B>Requirement</B>: 100 M (1E8) Faction Coins</p>
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</p>
<p><B>Formula</B>: floor((1 + 6x)^0.5 - 1), where x is your Royal Exchanges Made stat.</p>
<br/>
<br/>
<p><b>E590</b> - <b>For</b> Goblin,Drow - <B>Research Name</B> Slavery
<p><B>Requirement</B>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)
<p><B>Cost</B>: 39.16 QiSpg (3.916 E229)
<p><B>Effect</B>: Gain additional assistants based on the amount of Evil buildings you own.
<p><B>Formula</B>: floor(x/300)^1.05, where x is the number of Non Unique Buildings you own.
<br/>
<br/>
<p><b>E3300</b> - <b>For</b> Mercenary - <B>Research Name</B> Hirelings
<p><B>Requirement</B>: (Intimidation E1325) and (Scholarship S2875)
<p><B>Cost</B>: 454.5 TSxg (4.545e194)
<p><B>Effect</B>: Gives assistants based on the gold you have.
<p><B>Formula</B>: 2 * log10(x + 1) additive, where x is gold you have.
<p><b>------------------------------</b>
<p><b>A120</b> - <b>For</b> Any - <B>Research Name</B> Vivification
<p><B>Requirement</B>: Have 6500 mana
<p><B>Cost</B>: 676 Spqag (6.76E146)
<p><B>Effect</B>: Gain additional assistants based on max mana.
<p><B>Formula</B>: floor(x/15)^0.825), where x is your maximum mana.
<br/>
<br/>
<p><b>A375</b> - <b>For</b> Druid - <B>Research Name</B> Transfusion
<p><B>Requirement</B>: Research Infusion (A251) & Engraving (A305)
<p><B>Cost</B>: 541 DSxg (5.41E191)
<p><B>Effect</B>: Gain additional assistants based on mana produced this game.
<p><B>Formula</B>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A495</b> - <b>For</b> Dwarf - <B>Research Name</B> Elixirs
<p><B>Requirement</B>: 500 Base Assistants (as Drow)
<p><B>Cost</B>: 731.4 NoSxg (7.314E212)
<p><B>Effect</B>: Increase assistants production based on the amount of research made.
<p><B>Formula</B>: 120 * x^0.42%, where x is the Amount of Researches made.
<p><b>------------------------------</b>
<p><b>W175</b> - <b>For</b> Demon - <B>Research Name</B> Overwhelm
<p><B>Requirement</B>: Research Assault (W1) & Invasion (W150)
<p><B>Cost</B>: 3.273 Uqig (3.273E156)
<p><B>Effect</B>: You gain additional assistants based on total amount of evil spells cast. (This Game)
<p><B>Formula</B>: floor(0.75 * x ^ 0.6), where x is the amount of evil spells cast.
<br/>
<br/>
<p><b>W200</b> - <b>For</b> Any - <B>Research Name</B> Crusade
<p><B>Requirement</B>: Research Hallowing (D50) & Formation (W180)
<p><B>Cost</B>: 82.65 Dqig (8.265E160)
<p><B>Effect</B>: Gain additional assistants based on total time spent as Good.
<p><B>Formula</B>: floor(0.065 * x^0.5), where x is your Time Spent Being Good (Total) stat.
<br/>
<br/>
<p><b>W250</b> - <b>For</b> Any - <B>Research Name</B> Swarming
<p><B>Requirement</B>: Research Overwhelm (W175) & Berserking (W205)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Gain additional assistants based on the amount of trophies you unlocked.
<p><B>Formula</B>: floor(x / 8), where x is the amount of trophies unlocked.
<br/>
<br/>
<p><b>W 275</b>: Domination
<p><b>Faction</b>: Faceless
<p><b>Requirement</b>: 300 Base Assistants (as Faceless)
<p><b>Cost</b>: 1.331 SpQig (1.331E174)
<p><b>Effect</b>: Gain additional Faction Coins per second based on the highest amount of assistants you had in a single game.
<p><b>Effect</b>: Also a 50% multiplicative FC chance?
<p><b>Formula</b>: floor(80 * x^0.8), where x is your Assistants (Max) stat.
<br/>
<br/>
<p><b>W520</b> - <b>For</b> Drow - <B>Research Name</B> Stalking
<p><B>Requirement</B>: Research Exertion (W50) and Ambush (W405)
<p><B>Cost</B>: 18.47 Uspg (1.847E217)
<p><B>Effect</B>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)
<br/>
<br/>
<p><b>W590</b> - <b>For</b> Demon,Drow - <B>Research Name</B> Torture
<p><B>Requirement</B>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)
<p><B>Effect</B>: Increase assistants production based on total time spent being Evil.
<p><B>Formula</B>: 8 * x^0.8%, where x is your Time Spent Being Evil stat. (This R)
<?php include "../scripts/footer.html"; ?>