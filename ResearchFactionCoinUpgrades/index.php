<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<p><b>Spellcraft</b>
<p><b>S50</B>: - <b>For</b> Goblin - <B>Research Name</B> Conjuration</p>
<p><B>Requirement</B>: Have 6000 mana(as Fairy)</p>
<p><B>Cost</B>: 318.8 Tqag (3.188E134)</p>
<p><B>Effect</B>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
<p><B>Formula</B>: floor(x /650), where x is the number of Goblin Banks you own.</p>
<p><b>------------------------------</p></b>
<p><b>Craftsmanship</b>
<p><b>C105</b> - <b>For</b> Any - <B>Research Name</B> Woodcraft</p>
<p><B>Requirement</B>: 25,000 clicks(This Game)</p>
<p><B>Cost</B>: 1.544 Spqag (1.544E144)</p>
<p><B>Effect</B>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</p>
<p><B>Formula</B>:  1.5 * x ^ 1.05, where x is the number of Unique Buildings you own.</p>
<br/>
<br/>
<p><b>C250</b> - <b>For</b> Any - <B>Research Name</B> Magnetism</p>
<p><B>Requirement</B>: Research Tinkering (C150) & Critical Strike (W225).</p>
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Increase the chance to find Faction Coins by a multiplicative 50%</p>
<p><B>Effect</B>: Increase the chance to find Faction Coins based on total time spent offline. [in minutes]</p>
<p><B>Formula</B>: floor(2.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
<br/>
<br/>
<p><b>C400</b> - <b>For</b> Any - <B>Research Name</B> Gravitation</p>
<p><B>Requirement</B>: Research Magnetism (C250) & Weighting (C300)</p>
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)</p>
<p><B>Effect</B>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.</p>
<p><B>Effect</B>: Also increase the chance to find Faction Coins by a multiplicative 175%</p>
<p><B>Formula</B>:  floor(3.5 * ln^3(x + 1)), where x is your Faction Coins Gained (This Game) stat.</p>
<br/>
<br/>
<p><b>C520</b> - <b>For</b> Dwarf - <B>Research Name</B> Blacksmithing</p>
<p><B>Requirement</B>: Research Reinforcing (C135) & Metallurgy (C405)</p>
<p><B>Cost</B>: 18.47 USpg (1.847E217)</p>
<p><B>Effect</B>: Increase clicking reward for Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Effect</B>: Also increase Faction Coin find chance bonus of Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Formula</B>: Clicking Reward:2.5 * x^0.3%, Diamond Pickaxe:20 * x^0.4%; where x is the number of Dwarven Forges you own.</p>
<p><b>------------------------------</p></b>
<p><b>Divine</b>
<p><b>D50</b> - <b>For</b> Elf - <B>Research Name</B> Hallowing
<p><B>Requirement</B>: 15,000 Good Buildings(as Angel)
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.
<p><B>Formula</B>: floor(3 * x^0.85)%, where x is the number of Elven Training Grounds you own.
<br/>
<br/>
<p><b>D150</b> - <b>For</b> Any - <B>Research Name</B> Retribution
<p><B>Requirement</B>: Research Betrayal (W120) & Transfixion (D55).
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Produce additional Faction Coins based on the amount of research made.
<p><B>Formula</B>: floor(0.05 * x ^ 1.25, where x is the amount of research made.
<p><b>------------------------------</p></b>
<p><b>Economics</b>
<p><b>E30</b> - <b>For</b> Any - <B>Research Name</B> Diplomacy
<p><B>Requirement</B>: 1000 Exchanges
<p><B>Cost</B>: 95.88 Dqag (9.588E130)
<p><B>Effect</B>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.
<p><B>Formula</B>: Faction Coin Chance:floor(10 * x)% Royal Exchange bonus:floor(7 * x^0.6)%, where x is Playtime (This Game in hours).
<br/>
<br/>
<p><b>E145</b> - <b>For</b> Any - <B>Research Name</B> Royal Demand
<p><B>Requirement</B>: 5,000 Tax Collections (Total), Research Cultivation (C10) & Woodcraft (C105)
<p><B>Cost</B>: 17.07 Noqag (1.707E151)
<p><B>Effect</B>: Increase Tax Collection reward by 30 seconds of production.
<p><b>------------------------------</p></b>
<p><b>Alchemy</b>
<p><b>A305</b> - <b>For</b> Any - <B>Research Name</B> Engraving
<p><B>Requirement</B>: 5 days as Druids (Total across all Rs)
<p><B>Cost</B>: 255.2 OcQig (2.552E179)
<p><B>Effect</B>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.
<p><B>Effect</B>: Also increase Faction Coins find chance ba a multiplicative 100%. 
<p><B>Formula</B>: floor(3.5 * logE(1+x) ^ 3.5)%, where x is your Spells Cast (This Game) stat., or approximately floor((ln(x) + 0.69)^2.75)%, where x is your Spells Cast (This Game) stat.
<br/>
<br/>
<p><b>A3400</b> - <b>For</b>  All Factions - <B>Research Name</B> Chemistry
<p><B>Requirement</B>: 1 No (1e30) FC, (Customizing C3000) and (Manipulation S3200).
<p><B>Cost</B>: 533.7 QiSxg (5.337e200)
<p><B>Effect</B>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.
<p><B>Effect</B>: Also increases Faction Coin find chance by a multiplicative 350%.
<p><B>Formula</B>: 3 * x ^ 2.25, where x is total Lineage levels.
<p><b>------------------------------</p></b>
<p><b>Warfare</b>
<p><b>W50</b> - <b>For</b> Undead - <B>Research Name</B> Exertion
<p><B>Requirement</B>: 2 days of Evil Play Time
<p><B>Note</B>: Play as any Evil faction, but you must be Demon to unlock this.
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Increase Faction Coin find chance based on the amount of Undercities you own.
<p><B>Formula</B>:(floor(6.5x^0.65))%, where x is the number of Undercities you own.
<br/>
<br/>
<p><b>W275</b> - <b>For</b> Faceless - <B>Research Name</B> Domination
<p><B>Requirement</B>: 300 Base Assistants (as Faceless)
<p><B>Cost</B>: 1.331 SpQig (1.331E174)
<p><B>Effect</B>: Gain additional Faction Coins per second based on the highest amount of assistants you had in a single game.
<p><B>Effect</B>: Also a 50% multiplicative FC chance?
<p><B>Formula</B>: floor(80 * x^0.8), where x is your Assistants (Max) stat.
<br/>
<br/>
<p><b>W1375</b> - <b>For</b> Any - <B>Research Name</B> Scavenging
<p><B>Requirement</B>: 86400 Evil Time Spent (1 day)
<p><B>Effect</B>: Increases Faction Coin find chance by a multiplicative 250%.
<p><B>Effect</B>: Increase the chance to find Faction Coins based on the amount of assistants you own.
<p><B>Formula</B>: 2500 * x^0.41, where x is assistants.
<?php include "../scripts/footer.html"; ?>