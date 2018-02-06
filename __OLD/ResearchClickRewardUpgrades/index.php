<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Click Rewards Research Upgrade Slots</h6>
<p><b>Craftsmanship</b>
<p><b>C120</b> - <b>For</b> Any - <B>Research Name</B> Socketing</p>
<p><B>Requirement</B>: 200,000 clicks(This Game)</p>
<p><B>Cost</B>: 676 Spqag (6.76E146)</p>
<p><B>Effect</B>: Increase clicking reward based on the amount of gems you own.</p>
<p><B>Formula</B>: round(20 * log(1 + x))%, where x is your current number of gems.</p>
<br/>
<br/>
<p><b>C330</b> - <b>For</b> Any - <B>Research Name</B> Overload</p>
<p><B>Requirement</B>: Research Aeromancy (A250) & Critical Strike (W225)</p>
<p><B>Cost</B>: 6.443 Sxg (6.443E183)</p>
<p><B>Effect</B>: Increase clicking reward based on the amount of research made.</p>
<p><B>Formula</B>: round(145 * x ^0.38)%, where x is researches made.</p>
<br/>
<br/>
<p><b>C520</b> - <b>For</b> Dwarf - <B>Research Name</B> Blacksmithing</p>
<p><B>Requirement</B>: Research Reinforcing (C135) & Metallurgy (C405)</p>
<p><B>Cost</B>: 18.47 USpg (1.847E217)</p>
<p><B>Effect</B>: Increase clicking reward for Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Effect</B>: Also increase Faction Coin find chance bonus of Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Formula</B>: Clicking Reward:2.5 * x^0.3%, Diamond Pickaxe:20 * x^0.4%; where x is the number of Dwarven Forges you own.</p>
<br/>
<br/>
<p><b>C590</b> - <b>For</b> Elf,Dwarf - <B>Research Name</B> Alloys</p>
<p><B>Requirement</B>: 200 Dwarf Exchanges (as Dwarf), Research Fusion(A105) and Blacksmithing(C520)</p>
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)</p>
<p><B>Effect</B>: Increase clicking reward based on your chance to find Faction Coins, (if your FC chance is 10k%, this will be 10k%).</p>
<p><B>Effect</B>: Autoclicks the treasure 10 times per second.</p>
<p><b>------------------------------</p></b>
<p><b>Divine</b>
<p><b>D55</b> - <b>For</b> Any - <B>Research Name</B> Transfixion
<p><B>Requirement</B>: Produce 3 M (3E6) Mana(This Game)
<p><B>Cost</B>: 2.421 Qaqag (2.421E135)
<p><B>Effect</B>: Increase clicking reward based on spell cast in this game.
<p><B>Formula</B>: round(3.5 * x^0.8)%, where x is your Spells Cast (This Game) stat.
<p><b>------------------------------</p></b>
<p><b>Alchemy</b>
<p><b>A200</b> - <b>For</b> Any - <B>Research Name</B> Corrosion
<p><B>Requirement</B>: Research Plague (A1) & Decay (A135)
<p><B>Cost</B>: 82.65 Dqig (82.65E160)
<p><B>Effect</B>: Increase clicking reward based on time spent in this game.
<p><B>Formula</B>: round(c * x^0.75)%, where x is your Playtime (Total) in seconds stat and c is 0.07(2^0.75), which is approximately 0.118.
<p><b>------------------------------</p></b>
<p><b>Warfare</b>
<p><b>W320</b> - <b>For</b> Any - <B>Research Name</B> Shattering
<p><B>Requirement</B>: 2,750 Excavations
<p><B>Cost</B>: 1.117 NoQig (1.117E180)
<p><B>Effect</B>: Increase your clicking reward based on the amount of Excavations you made.
<p><B>Formula</B>: round(10 * x^0.75)%, where x is the amount of excavations made.
<br/>
<br/>
<p><b>W330</b> - <b>For</b> Any - <B>Research Name</B> Heroism
<p><B>Requirement</B>: Research Crusade (W200) & Athletics (W260).
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Increase your click reward based on the amount of trophies you unlocked.
<p><B>Formula</B>: round(2.5 * x)%, where x is the amount of trophies unlocked.
<br/>
<br/>
<p><b>W560</b> - <b>For</b> Dwarf - <B>Research Name</B> Resilience
<p><B>Requirement</B>: Research Eternity (D330) and Mercy (D480)
<p><B>Cost</B>: 204.2 TSpg (2.042E224)
<p><B>Effect</B>: Increase clicking reward based on the amount of clicks made in this game.
<p><B>Formula</B>: 5 * x^0.45%, where x is your Treasure Clicks (This Game) stat.
<?php include "../scripts/footer.html"; ?>