<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>All other Building Research Upgrade Slots</h6>
<p><b>Spellcraft</b></p>
<p><b>S175</b> - <b>For</b>: Elf - <b>Research Name</b>: Empowered Luck</p>
<p><b>Requirement</b>: Research Blessing (D1) & Augmentation (S135)</p>
<p><b>Cost</b>: 3.273 UQig (3.273E156)</p>
<p><b>Effect</b>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.</p>
<br/>
<p><b>S200</b> - <b>For</b>: All Factions - <b>Research Name</b>: Cryomancy</p>
<p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)</p>
<p><b>Cost</b>: 82.65 DQig (8.265E160)</p>
<p><b>Effect</b>: Increase Spell Duration based on mana produced (this game).</p>
<p><b>Formula</b>: (5 * ln(x) ^ 1.25), where x is mana produced (this game).</p>
<br/>
<p><b>S270</b> - <b>For</b>: All Factions - <b>Research Name</b>: Runecarving</p>
<p><b>Requirement</b>: 500,000 clicks (This game)</p>
<p><b>Cost</b>: 175.2 SxQig (1.752E173)</p>
<p><b>Effect</b>: Increase the production of all buildings based on your bonus from Gems.</p>
<p><b>Formula</b>: round(1.15*x^0.75)%, where x is your gem bonus.</p>
<br/>
<p><b>S300</b> - <b>For</b>: Titan - <b>Research Name</b>: Chain Lightning</p>
<p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)
<p><b>Cost</b>: 33 OcQig (3.36E178)</p>
<p><b>Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.</p>
<p><b>Formula</b>: round(120 * x^0.8)%, where x is your Lightning Strikes cast (This Game) stat.</p>
<br/>
<p><b>S305</b> - <b>For</b>: All Factions - <b>Research Name</b>: Mesmerization</p>
<p><b>Hint</b>Face not required for a long time.</p>
<p><b>Requirement</b>: 5 days as Faceless (Total across all R)</p>
<p><b>Cost</b>: 225.2 OcQig (2.252E179)</p>
<p><b>Effect</b>: Increase the production of all buildings by a fraction of your offline production bonus.</p>
<p><b>Formula</b>: 2.5 *log10(1 +x)^2.5, where x is your (pre-Ascension) offline production bonus as a multiplier.</p>
<br/>
<p><b>S330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Reverberation</p>
<p><b>Requirement</b>: Research Cryomancy (A200) &amp; Weather Control (D225)</p>
<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.</p>
<p><b>Formula</b>: 375 * 2^x%, where x is the number of spells currently active.</p>
<br/>
<p><b>S460</b> - <b>For</b>: All Factions - <b>Research Name</b>: Focus</p>
<p><b>Requirement</b>: 25000 spells cast (This game)</p>
<p><b>Cost</b>: 5.023 SpSxg (5,023E206)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the times you cast your faction spell in this game.</p>
<p><b>Formula</b>: 15 * x^0.8%, where x is Faction Spells Cast This Game (Vanilla + Prestige spell count).</p>
<br/>
<p><b>S545</b> - <b>For</b>: All Factions - <b>Research Name</b>: Hierarchy</p>
<p><b>Requirement</b>: 10M (1E7) mana produced (This Game)</p>
<p><b>Cost</b>: 466.3 DSpq (4.663E221)</p>
<p><b>Effect</b>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</p>
<p><b>Formula</b>: (0.1 * x^0.45 * T^2)%, where x is Mana Produced (This Game) stat, and T is the building tier, starting at 11 for Farms and decreasing to 1 for Halls of Legends.</p>
<hr>
<p><b>Craftsmanship</b></p>
<p><b>C135</b> - <b>For</b>: All Factions - <b>Research Name</b>: Reinforcing</p>
<p><b>Requirement</b>: 250,000 clicks (This Game, as Elf)</p>
<p><b>Cost</b>: 296 Ocqag (2.96E149)</p>
<p><b>Effect</b>: Increase the production of all buildings based on your total number of clicks.</p>
<p><b>Formula</b>: (ln(1 + x))^2.75%, where x is your Treasure Clicks (Total) stat.</p>
<br/>
<p><b>C150</b> - <b>For</b>: All Factions - <b>Research Name</b>: Tinkering</p>
<p><b>Requirement</b>: Research Recycling (E10) &amp; Reinforcing (C135)</p>
<p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of research made.</p>
<p><b>Formula</b>: round(125 * x^0.38)%, where x is number of researches made.</p>
<br/>
<p><b>C1500</b> - <b>For</b>: Titan,Dragon - <b>Research Name</b>: Gargantuaness</p>
<p><b>Hint</b>: Trading with the Dragons might prove risky, but rewarding.
<p><b>Requirement</b>: 2500 Royal Exchanges Research E460, D1275 (As Titans)</p>
<p><b>Cost</b>: 25 Spvg (2.52E85)</p>
<p><b>Effect</b>: Increase the production of all buildings based on total time spent as Neutral.</p>
<p><b>Formula</b>: (1.5 * x)^0.7, where x is neutral time (this R) in minutes.</p>
<br/>
<p><b>C3000</b> - <b>For</b>: Mercenary - <b>Research Name</b>: Customizing</p>
<p><b>Requirement</b>: 9000 Excavations as Mercenary.</p>
<p><b>Cost</b>: 280.7 SpQig (2.807e176)</p>
<p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.</p>
<p><b>Formula</b>: (1.5 * x ^ 1.5), where X is artifacts you own.</p>
<hr>
<p><b>Divine</b></p>
<p><b>D25</b> - <b>For</b>: Undead - <b>Research Name</b>: Cursing</p>
<p><b>Requirement</b>: Play 8 hours Offline (as Undead) (This Game)</p>
<p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
<p><b>Effect</b>: Increase the production of all buildings based on your offline production bonus.</p>
<p><b>Formula</b>: 2.75 * log10(1 + x)^2.75, where x is your offline production bonus.</p>
<br/>
<p><b>D480</b> - <b>For</b>: All Factions - <b>Research Name</b>: Mercy</p>
<p><b>Requirement</b>: 12h Spent as each Good, Evil and Neutral alignment (This R)</p>
<p><b>Cost</b>: 1.67 NoSxg (1.67E210)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.</p>
<p><b>Formula</b>: 100000 * (min_time / max_time)^1.5%, where tminis shortest  Time Spent Being Alignment and tmax is longest Time Spent Being Alignment (Total) Stat.</p>
<br/>
<p><b>D1275</b> - <b>For</b>: All Factions - <b>Research Name</b>: Solemnity</p>
<p><b>Requirement</b>: 100000 Total Buildings</p>
<p><b>Cost</b>: 555.1 Dvg (5.551E71)</p>
<p><b>Effect</b>: Increase the production of each building by + 0.3% per building of the same type.</p>
<hr>
<p><b>Economics</b></p>
<p><b>E10</b> - <b>For</b>: Undead - <b>Research Name</b>: Recycling</p>
<p><b>Requirement</b>: 2,000 Undercities</p>
<p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
<p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.</p>
<br/>
<p><b>E150</b> - <b>For</b>: All Factions - <b>Research Name</b>: Investment</p>
<p><b>Requirement</b>: Research Bribing (E135) &amp; Commerce (E25)</p>
<p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own.</p>
<p><b>Formula</b>: round( (ln(1 + x)) ^1.25 )%, where x is the amount of gold you own.</p>
<br/>
<p><b>E200</b> - <b>For</b>: All Factions - <b>Research Name</b>: Acquisition</p>
<p><b>Requirement</b>: Research Investment (E150) &amp; Common Business (E80)</p>
<p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
<p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked.</p>
<p><b>Formula</b>: round(0.0003 * (100 * x)^3.35), where x is trophiesunlocked / trophiesmax.</p>
<br/>
<p><b>E260</b> - <b>For</b>: Druid - <b>Research Name</b>: Sifting</p>
<p><b>Requirement</b>: 3,000 Stonehenge Circles</p>
<p><b>Cost</b>: 3.039 SxQig (3.039E171)</p>
<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.</p>
<p><b>Formula</b>: (100*x), where x is Stone Pillars</p>
<br/>
<p><b>E330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Collection</p>
<p><b>Requirement</b>: Research Acquisition (E200) &amp; Forgery (E225a)</p>
<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found.</p>
<p><b>Formula</b>: round(50 * x^1.1)%, where x is the amount of artifacts found.</p>
<br/>
<p><b>E350</b> - <b>For</b>: Faceless - <b>Research Name</b>: Repurpose</p>
<p><b>Requirement</b>: Research Journeymen (C200) &amp; Adaptation (A330)(as Faceless)</p>
<p><b>Cost</b>: 21.42 USxg (2.142E187)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made.</p>
<p><b>Formula</b>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.</p>
<hr>
<p><b>Alchemy</b></p>
<p><b>A105</b> - <b>For</b>: All Factions - <b>Research Name</b>: Fusion</p>
<p><b>Requirement</b>: 2750 Blacksmiths</p>
<p><b>Cost</b>: 1.544 Spqag (1.544E144)</p>
<p><b>Effect</b>: Increases the production of buildings based on the amount of Faction Coins found this game.</p>
<p><b>Formula</b>: round(0.7 * ln^3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
<br/>
<p><b>A135</b> - <b>For</b>: All Factions - <b>Research Name</b>: Decay</p>
<p><b>Requirement</b>: 1 Day Total Play Time any Faction (This R) (Must be Undead to unlock once condition is met.)</p>
<p><b>Cost</b>: 296 OcQag (9.6E149)</p>
<p><b>Effect</b>: Increase the production on all buildings based on total time spent.</p>
<p><b>Formula</b>: round(c * x^0.7)%, where x is your Playtime (Total) in seconds stat and c is 0.03(2^0.7), which is approximately 0.049.</p>
<br/>
<p><b>A175</b> - <b>For</b>: Undead - <b>Research Name</b>: Soulweaving</p>
<p><b>Requirement</b>: Research Cursing (D25) &amp; Reinforcing (C135)</p>
<p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you Reincarnated.</p>
<p><b>Formula</b>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.</p>
<br/>
<p><b>A330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Adaptation</p>
<p><b>Requirement</b>: Research Mutation (D260) &amp; Meditation (D275)</p>
<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions.</p>
<p><b>Formula</b>: round(0.05 * x^0.7)%, where x is time spent as other factions.</p>
<br/>
<p><b>A590</b> - <b>For</b>: Undead,Drow - <b>Research Name</b>: Hexing</p>
<p><b>Requirement</b>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)</p>
<p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
<p><b>Effect</b>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.</p>
<p><b>Formula</b>: 0.045 * x^0.45 * p%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.</p>
<hr>
<p><b>Warfare</b></p>
<p><b>W25</b> - <b>For</b>: Goblin - <b>Research Name</b>: War Funds</p>
<p><b>Requirement</b>: 1 Tqag (1E132) Coins Gained (This Game)</p>
<p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</p>
<p><b>Formula</b>: round(5 * x^0.6)%, where x is Tax Collections Cast This Game.</p>
<br/>
<p><b>W150</b> - <b>For</b>: All Factions - <b>Research Name</b>: Invasion</p>
<p><b>Requirement</b>: Research War Funds (W25) &amp; Rampage (W135)</p>
<p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
<p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.</p>
<p><b>Formula</b>: round(32 * x^0.75)%, where x is the amount of assistants you own.</p>
<?php include "../scripts/footer.html"; ?>
