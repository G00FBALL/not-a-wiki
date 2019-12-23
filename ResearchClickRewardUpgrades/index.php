<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Click Rewards Research Upgrade Slots</h6>
<p><b>Craftsmanship</b>
<p><b>C120</b> - <b>For</b>: All Factions - <b>Research Name</b>: Socketing 
<p><b>Requirement</b>: 200,000 clicks (This Game) 
<p><b>Cost</b>: 676 Spqag (6.76E146) 
<p><b>Effect</b>: Increase clicking reward based on the amount of gems you own. 
<p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.
<br/>
<br/>
<p><b>C330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Overload 
<p><b>Requirement</b>: Research Aeromancy (A250) &amp; Critical Strike (W225) 
<p><b>Cost</b>: 6.443 Sxg (6.443E183) 
<p><b>Effect</b>: Increase clicking reward based on the amount of research made. 
<p><b>Formula</b>: round(145 * x^0.38)%, where x is researches made.
<br/>
<br/>
<p><b>C520</b> - <b>For</b>: Dwarf - <b>Research Name</b>: Blacksmithing 
<p><b>Requirement</b>: Research Reinforcing (C135) &amp; Metallurgy (C405) 
<p><b>Cost</b>: 18.47 USpg (1.847E217) 
<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own. 
<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own. 
<p><b>Formula</b>: Clicking Reward: 2.5 * x^0.3%, where x is the number of Dwarven Forges you own. 
<p><b>Formula</b>: Diamond Pickaxe: 20 * x^0.4%, where x is the number of Dwarven Forges you own.
<br/>
<br/>
<p><b>C590</b> - <b>For</b>: Elf,Dwarf - <b>Research Name</b>: Alloys 
<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwelf), Research Fusion(A105) and Blacksmithing(C520) 
<p><b>Cost</b>: 39.16 QiSpg (3.916E229) 
<p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins, (if your FC chance is 10k%, this will be 10k%).
<p><b>Effect</b>: Autoclicks the treasure 10 times per second.
<p><b>------------------------------</p></b>
<p><b>Divine</b>
<p><b>D55</b> - <b>For</b>: All Factions - <b>Research Name</b>: Transfixion 
<p><b>Requirement</b>: Produce 3 M (3E6) Mana (This Game) 
<p><b>Cost</b>: 2.421 Qaqag (2.421E135) 
<p><b>Effect</b>: Increase clicking reward based on spell cast in this game. 
<p><b>Formula</b>: round(3.5 * x^0.8)%, where x is your Spells Cast (This Game) stat.
<p><b>------------------------------</p></b>
<p><b>Alchemy</b>
<p><b>A200</b> - <b>For</b>: All Factions - <b>Research Name</b>: Corrosion 
<p><b>Requirement</b>: Research Plague (A1) &amp; Decay (A135) 
<p><b>Cost</b>: 82.65 Dqig (82.65E160) 
<p><b>Effect</b>: Increase clicking reward based on time spent in this game. 
<p><b>Formula</b>: round(c * x^0.75)%, where x is your Playtime (Total) in seconds stat and c is 0.07(2^0.75), which is approximately 0.118.
<p><b>------------------------------</p></b>
<p><b>Warfare</b>
<p><b>W320</b> - <b>For</b>: All Factions - <b>Research Name</b>: Shattering 
<p><b>Requirement</b>: 2,650 Excavations 
<p><b>Cost</b>: 1.117 NoQig (1.117E180) 
<p><b>Effect</b>: Increase your clicking reward based on the amount of Excavations you made. 
<p><b>Formula</b>: round(10 * x^0.75)%, where x is the amount of excavations made.
<br/>
<br/>
<p><b>W330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Heroism 
<p><b>Requirement</b>: Research Crusade (W200) &amp; Athletics (W260). 
<p><b>Cost</b>: 6.443 Sxg (6.443E183) 
<p><b>Effect</b>: Increase your click reward based on the amount of trophies you unlocked. 
<p><b>Formula</b>: round(2.5 * x)%, where x is the amount of trophies unlocked.
<br/>
<br/>
<p><b>W560</b> - <b>For</b>: Dwarf - <b>Research Name</b>: Resilience 
<p><b>Requirement</b>: Research Eternity (D330) and Mercy (D480) 
<p><b>Cost</b>: 204.2 TSpg (2.042E224) 
<p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game. 
<p><b>Formula</b>: 5 * x^0.45%, where x is your Treasure Clicks (This Game) stat.
<?php include "../scripts/footer.html"; ?>
