<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>The Research Facility</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Craftsmanshipr.png" alt="Craftsmanship" align="middle"> <b>Craftsmanship</b></p>
<p>Learn how to use tools and experience to improve your production by mastering Craftsmanship.</p>
<p><b>Increases</B>: <b>Elven</B>, <b>Titan</B>, and <b>Dwarven</B> production.</p>
<p><b>----------------------------------</B></p>
<h6>Craftsmanship Facility</h6>
<p><b>C1</b> - <b>For</b> Elf - <B>Research Name</B> Dummy Targets</p>
<p><B>Cost</B>: 750 Qag (7.5E125)</P>
<p><B>Effect</B>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.</p>
<p><B>Formula</B>: round(1.3 * ln^3(1+ x))%, where x is your Faction Coins Gained (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C10</b> - <b>For</b> Fairy - <B>Research Name</B> Cultivation</p>
<p><B>Requirement</B>: 2500 Farms
<p><B>Cost</B>: 28.83 Uqag (2.883E127)</p>
<p><B>Effect</B>: Increases production of Blacksmith and Inn by 60% per Enchanted field that you have.</p>
<p><b>----------------------------------</B></p>
<p><b>C25</b> - <b>For</b> Angel - <B>Research Name</B> Light Condenser</p>
<p><B>Requirement</B>: 12,000 Spells cast (This R)</p>
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increase mana regeneration based on the amount of spells cast.</p>
<p><B>Formula</B>: floor(10 * x^0.3) / 10, where x is your Spells Cast (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C50</b> - <b>For</b> Demon - <B>Research Name</B> Refining</p>
<p><B>Requirement</B>: 1 B (1E9) Faction Coins (as Elf)</p>
<p><B>Cost</B>: 318.8 Tgag (3.188E134)</p>
<p><B>Effect</B>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this Game.</p>
<p><B>Formula</B>: round(0.8 * ln^3(1 + x))%, where x is your Demon Coins Gained (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C80</b> - <b>For</b> Any - <B>Research Name</B> Apprenticeship</p>
<p><B>Requirement</B>: 16,000 Good and Evil buildings</p>
<p><B>Cost</B>: 61.13 Qiqag (6.113E139)</p>
<p><B>Effect</B>: Increase the production of Neutral buildings based on the amount of Good and Evil buildings.</p>
<p><B>Formula</B>: round(x^0.8)%, where x is the number of Good and Evil Buildings you own.
<p><b>----------------------------------</B></p>
<p><b>C105</b> - <b>For</b> Any - <B>Research Name</B> Woodcraft</p>
<p><B>Requirement</B>: 25,000 clicks (This Game)</p>
<p><B>Cost</B>: 1.544 Spqag (1.544E144)</p>
<p><B>Effect</B>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</p>
<p><B>Formula</B>:  1.5 * x ^ 1.05, where x is the number of Unique Buildings you own.</p>
<p><b>----------------------------------</B></p>
<p><b>C120</b> - <b>For</b> Any - <B>Research Name</B> Socketing</p>
<p><B>Requirement</B>: 200,000 clicks (This Game)</p>
<p><B>Cost</B>: 676 Spqag (6.76E146)</p>
<p><B>Effect</B>: Increase clicking reward based on the amount of gems you own.</p>
<p><B>Formula</B>: round(20 * log(1 + x))%, where x is your current number of gems.</p>
<p><b>----------------------------------</B></p>
<p><b>C135</b> - <b>For</b> Any - <B>Research Name</B> Reinforcing</p>
<p><B>Requirement</B>: 250,000 clicks (This Game, as Elf)</p>
<p><B>Cost</B>: 296 Ocqag (2.96E149)</p>
<p><B>Effect</B>: Increase the production of all buildings based on your total number of clicks.</p>
<p><B>Formula</B>: (ln(1 + x))^2.75%, where x is your Treasure Clicks (Total) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C150</b> - <b>For</b> Any - <B>Research Name</B> Tinkering</p>
<p><B>Requirement</B>: Research Recycling (E10) & Reinforcing (C135)</p>
<p><B>Cost</B>: 129.6 Noqag (1.296E152)</p>
<p><B>Effect</B>: Increase the production of all buildings based on the amount of research made.</p>
<p><B>Formula</B>: round(125 * x^0.38)%, where x is number of researches made.</p>
<p><b>----------------------------------</B></p>
<p><b>C175</b> - <b>For</b> Goblin - <B>Research Name</B> Gemcutting</p>
<p><B>Requirement</B>: Research Refining (C50) & Socketing (C120)</p>
<p><B>Cost</B>: 3.273 Uqig (3.273E156)</p>
<p><B>Effect</B>: Increase the production bonus from gems based on the number of buildings you own.</p>
<p><B>Formula</B>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C200</b> - <b>For</b> Any - <B>Research Name</B> Journeymen</p>
<p><B>Requirement</B>: Research Apprenticeship (C80) & Bartering (E50).</p>
<p><B>Cost</B>: 82.65 Dqig (8.265E160)</p>
<p><B>Effect</B>: Increase the production of Unique Buildings based on total time spent as that faction.</p>
<p><B>Formula</B>: round(0.125 * x^0.7)%, where x is your Time Spent as that faction stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C225</b> - <b>For</b> Elf - <B>Research Name</B> Automatons</p>
<p><B>Requirement</B>: Research Dummy Targets (C1) & Vivification (A120).</p>
<p><B>Cost</B>: 2.087 Qaqig (2.087E165)</p>
<p><B>Effect</B>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.</p>
<p><b>----------------------------------</B></p>
<p><b>C250</b> - <b>For</b> Any - <B>Research Name</B> Magnetism</p>
<p><B>Requirement</B>: Research Tinkering (C150) & Critical Strike (W225).</p>
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Increase the chance to find Faction Coins by a multiplicative 50%</p>
<p><B>Effect</B>: Increase the chance to find Faction Coins based on total time spent offline. [in minutes]</p>
<p><B>Formula</B>: floor(2.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C251</b> - <b>For</b> Titan - <B>Research Name</B> Architecture</p>
<p><B>Requirement</B>: Secrets of the Ancients (as Titan)</p>
<p><B>Cost</B>: 79.05 QiQig (79.05E168)</p>
<p><B>Effect</B>: Increase the production of Olympian Halls based on the amount of buildings you own.
<p><B>Formula</B>: round(0.5 * x ^0.8)%, where x is your Buildings Owned (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C300</b> - <b>For</b> Druid - <B>Research Name</B> Weighting</p>
<p><B>Requirement</B>: 650 Lightning Strikes (This R)</p>
<p><B>Cost</B>: 33.6 OcQig (33.6E177)</p>
<p><B>Effect</B>: Increase Grand Balance multiplier by x20 when hitting Stonehenge Circles. Also increase its multiplier for every target based on maximum mana.</p>
<p><B>Formula</B>: round((1.5 * ln(1 + x))^2)%, where x is your maximum mana.</p>
<p><b>----------------------------------</B></p>
<p><b>C305</b> - <b>For</b> Any - <B>Research Name</B> Golemcraft</p>
<p><B>Requirement</B>: 5 days as Titans (Total across all R)</p>
<p><B>Cost</B>: 255.2 OcQig (2.552E179)</p>
<p><B>Effect</B>: Gain additional assistants based on your total time spent offline (in hours).</p>
<p><B>Formula</B>: floor(2\sqrt{x}), where x is your Time Spent Offline (Total) in hours stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C330</b> - <b>For</b> Any - <B>Research Name</B> Overload</p>
<p><B>Requirement</B>: Research Aeromancy (A250) & Critical Strike (W225)</p>
<p><B>Cost</B>: 6.443 Sxg (6.443E183)</p>
<p><B>Effect</B>: Increase clicking reward based on the amount of research made.</p>
<p><B>Formula</B>: round(145 * x ^0.38)%, where x is researches made.</p>
<p><b>----------------------------------</B></p>
<p><b>C340</b> - <b>For</b> Any - <B>Research Name</B> Neutral	Gem Duster</p>
<p><B>Requirement</B>: 800 Gem Grinders (This R), Research Sifting (E260) & Surveyorship (E290)</p>
<p><B>Cost</B>: 371.5 Sxg (3.715E185)</p>
<p><B>Effect</B>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative)</p>
<p><B>Formula</B>:  10 * x%, where x is your Rubies Gained (All Time) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C375</b> - <b>For</b> Titan - <B>Research Name</B> Lightning Rod</p>
<p><B>Requirement</B>: Research Chain Lightning (S300) & Overload (C330)</p>
<p><B>Cost</B>: 541 DSxg (5.41E191)</p>
<p><B>Effect</B>: Olympian Halls are always hit by Lightning Strike in addition to the primary target. Olympian Halls can no longer be a primary target.</p>
<p><b>----------------------------------</B></p>
<p><b>C400</b> - <b>For</b> Any - <B>Research Name</B> Gravitation</p>
<p><B>Requirement</B>: Research Magnetism (C250) & Weighting (C300)</p>
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)</p>
<p><B>Effect</B>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.</p>
<p><B>Effect</B>: Also increase the chance to find Faction Coins by a multiplicative 175%</p>
<p><B>Formula</B>:  floor(3.5 * ln^3(x + 1)), where x is your Faction Coins Gained (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C405</b> - <b>For</b> Dwarf - <B>Research Name</B> Metallurgy</p>
<p><B>Requirement</B>: Secrets of the Underworld (as Dwarf)</p>
<p><B>Cost</B>: 103.7 QaSxg (1.037E197)</p>
<p><B>Effect</B>: Increase Dwarven Forges based on the Dwarven Forges you own.</p>
<p><B>Formula</B>: 45 * x^0.825%, where x is the number of Dwarven Forges you own.</p>
<p><b>----------------------------------</B></p>
<p><b>C460</b> - <b>For</b> Any (Prestige Neutral) - <B>Research Name</B> Distribution</p>
<p><B>Requirement</B>: 1M Clicks (This game)</p>
<p><B>Cost</B>: 502.3 SpSxg (5.023E206)</p>
<p><B>Effect</B>: Increase the production of non-unique buildings based on the amount of clicks you made in this game.</p>
<p><B>Formula</B>: 35 * x^0.5%, where x is your Treasure Clicks (This Game) stat.</p>
<p><b>----------------------------------</B></p>
<p><b>C500</b> - <b>For</b> Any - <B>Research Name</B> Minecrafting</p>
<p><B>Requirement</B>: 3250 excavations (as Dwarf)</p>
<p><B>Cost</B>: 5.554Spg (5.554E213)</p>
<p><B>Effect</B>: Increases production bonus from gems based on the amount of excavations you made.</p>
<p><B>Formula</B>: 3 * x^0.35%p, where x is the amount of Excavations you made.</p>
<p><b>----------------------------------</B></p>
<p><b>C520</b> - <b>For</b> Dwarf - <B>Research Name</B> Blacksmithing</p>
<p><B>Requirement</B>: Research Reinforcing (C135) & Metallurgy (C405)</p>
<p><B>Cost</B>: 18.47 USpg (1.847E217)</p>
<p><B>Effect</B>: Increase clicking reward for Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Effect</B>: Also increase Faction Coin find chance bonus of Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Formula</B>: Clicking Reward:2.5 * x^0.3%, Diamond Pickaxe:20 * x^0.4%; where x is the number of Dwarven Forges you own.</p>
<p><b>----------------------------------</B></p>
<p><b>C590</b> - <b>For</b> Elf,Dwarf - <B>Research Name</B> Alloys</p>
<p><B>Requirement</B>: 200 Dwarf Exchanges (as Dwarf), Research Fusion(A105) and Blacksmithing(C520)</p>
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)</p>
<p><B>Effect</B>: Increase clicking reward based on your chance to find Faction Coins, (if your FC chance is 10k%, this will be 10k%).</p>
<p><B>Effect</B>: Autoclicks the treasure 10 times per second.</p>
<p><b>----------------------------------</B></p>
<p><b>C1300</b> - <b>For</b> Neutral,Dragon - <B>Research Name</B> Scintillation</p>
<p><B>Requirement</B>: 30000 Max Mana,  Affiliated Dragon (This game)</p>
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase production bonus from gems based on maximum mana.</p>
<p><B>Formula</B>: 2 * x^0.4, where x is max mana</p>
<p><b>----------------------------------</B></p>
<p><b>C1325</b> - <b>For</b> Any - <B>Research Name</B> Plasmation</p>
<p><B>Requirement</B>: 50m  Mana Produced (This game)</p>
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Gain assistants based on mana produced in this game.</p>
<p><B>Formula</B>: floor(1.25 * ln(1 + x)^2), where x is mana produced (this game).</p>
<p><b>----------------------------------</B></p>
<p><b>C1500</b> - <b>For</b> Titan,Dragon - <B>Research Name</B> Gargantuaness</p>
<p><B>Requirement</B>: 2500 Royal Exchanges, D1275, Affiliated Titan/Dragon</p>
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of all buildings based on total time spent as Neutral.</p>
<p><B>Formula</B>: (1.5 * x)^0.7, where x is neutral time (this R) in minutes.</p>
<p><b>----------------------------------</B></p>
<p><b>C3000</b> - <b>For</b> Mercenary - <B>Research Name</B> Customizing</p>
<p><B>Requirement</B>: 9000 Excavations as Mercenary.</p>
<p><B>Cost</B>: 280.7 SpQig (2.807e176)
<p><B>Effect</B>: Increases the production of all buildings based on the amount of artifacts you own.</p>
<p><B>Formula</B>: 1.75 * x ^ 1.75, where x is artifacts</p>
<p><b>----------------------------------</B></p>
<p><b>C3100</b> - <b>For</b> All Factions - <B>Research Name</B> Engineering</p>
<p><B>Requirement</B>: 15 days Mercenary time spent (Across all R's).</p>
<p><B>Cost</B>: 329.6 NoQig (3.296e182)
<p><B>Effect</B>: Increase maximum mana based on the total amount of clicks made (This R).</p>
<p><B>Formula</B>: (7.5 * log10(x + 1))^2.15, where x is clicks made</p>
<?php include "../scripts/footer.html"; ?>

