<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>Craftsmanship Facility</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Craftsmanshipr.png" alt="Craftsmanship" align="middle"> <b>Craftsmanship</b></p>
<p>Learn how to use tools and experience to improve your production by mastering Craftsmanship.</p>
<p><b>Increases</B>: <b>Elven</B>, <b>Titan</B>, and <b>Dwarven</B> production.</p>
<p>Pointing to this ingame will tell you how many slots are available also tells you your total research points.</p>
<br/>
<p><b>Research Point Production</b>
<p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
<br/>
<p><b>C1</b> - For <b>Elf</b> - Research Name: <b>Dummy Targets</b><p><b>Cost</b>: 750 Qag (7.5E125)</b><p><b>Effect</b>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.</b><p><b>Formula</b>: round(1.3 * ln ^3 (1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
<br/>
<p><b>C10</b> - For <b>Fairy</b> - Research Name: <b>Cultivation</b><p><b>Requirement</b>: 2500 Farms</b><p><b>Cost</b>: 28.83 Uqag (2.883E127)</b><p><b>Effect</b>: Increases production of Blacksmith and Inn by 60% per Enchanted field that you have.</p>
<br/>
<p><b>C25</b> - For <b>Angel</b> - Research Name: <b>Light Condenser</b><p><b>Requirement</b>: 12,000 Spells cast (This R)</b><p><b>Cost</b>: 12.63 Dqag (1.263E130)</b><p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast.</b><p><b>Formula</b>: floor(10 * x^0.3) / 10, where x is your Spells Cast (This Game) stat.</p>
<br/>
<p><b>C50</b> - For <b>Demon</b> - Research Name: <b>Refining</b><p><b>Requirement</b>: 1 B (1E9) Faction Coins (as Elf)</b><p><b>Cost</b>: 318.8 Tgag (3.188E134)</b><p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this Game.</b><p><b>Formula</b>: round(0.8 * ln^3(1 + x))%, where x is your Demon Coins Gained (This Game) stat.</p>
<br/>
<p><b>C80</b> - For <b>All Factions</b> - Research Name: <b>Apprenticeship</b><p><b>Requirement</b>: 16,000 Good and Evil buildings</b><p><b>Cost</b>: 61.13 Qiqag (6.113E139)</b><p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of Good and Evil buildings.</b><p><b>Formula</b>: round(x^0.8)%, where x is the number of Good and Evil Buildings you own.</p>
<br/>
<p><b>C105</b> - For <b>All Factions</b> - Research Name: <b>Woodcraft</b><p><b>Requirement</b>: 25,000 clicks (This Game)</b><p><b>Cost</b>: 1.544 Spqag (1.544E144)</b><p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</b><p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.</p>
<br/>
<p><b>C120</b> - For <b>All Factions</b> - Research Name: <b>Socketing</b><p><b>Requirement</b>: 200,000 clicks (This Game)</b><p><b>Cost</b>: 676 Spqag (6.76E146)</b><p><b>Effect</b>: Increase clicking reward based on the amount of gems you own.</b><p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.</p>
<br/>
<p><b>C135</b> - For <b>All Factions</b> - Research Name: <b>Reinforcing</b><p><b>Requirement</b>: 250,000 clicks (This Game, as Elf)</b><p><b>Cost</b>: 296 Ocqag (2.96E149)</b><p><b>Effect</b>: Increase the production of all buildings based on your total number of clicks.</b><p><b>Formula</b>: (ln(1 + x) ^ 2.75)%, where x is your Treasure Clicks (Total) stat.</p>
<br/>
<p><b>C150</b> - For <b>All Factions</b> - Research Name: <b>Tinkering</b><p><b>Requirement</b>: Research Recycling (E10) &amp; Reinforcing (C135)</b><p><b>Cost</b>: 129.6 Noqag (1.296E152)</b><p><b>Effect</b>: Increase the production of all buildings based on the amount of research made.</b><p><b>Formula</b>: round(125 * x ^ 0.38)%, where x is number of researches made.</p>
<br/>
<p><b>C175</b> - For <b>Goblin</b> - Research Name: <b>Gemcutting</b><p><b>Requirement</b>: Research Refining (C50) &amp; Socketing (C120)</b><p><b>Cost</b>: 3.273 Uqig (3.273E156)</b><p><b>Effect</b>: Increase the production bonus from gems based on the number of buildings you own.</b><p><b>Formula</b>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.</p>
<br/>
<p><b>C200</b> - For <b>All Factions</b> - Research Name: <b>Journeymen</b><p><b>Requirement</b>: Research Apprenticeship (C80) &amp; Bartering (E50).</b><p><b>Cost</b>: 82.65 Dqig (8.265E160)</b><p><b>Effect</b>: Increase the production of Unique Buildings based on total time spent as that faction.</b><p><b>Formula</b>: round(0.125 * x ^ 0.7)%, where x is your Time Spent as that faction stat.</p>
<br/>
<p><b>C225</b> - For <b>Elf</b> - Research Name: <b>Automatons</b><p><b>Requirement</b>: Research Dummy Targets (C1) &amp; Vivification (A120).</b><p><b>Cost</b>: 2.087 Qaqig (2.087E165)</b><p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.</p>
<br/>
<p><b>C250</b> - For <b>All Factions</b> - Research Name: <b>Magnetism</b><p><b>Requirement</b>: Research Tinkering (C150) &amp; Critical Strike (W225).</b><p><b>Cost</b>: 52.7 Qiqig (5.27E169)<p><b>Effect</b>: Increase the chance to find Faction Coins by a multiplicative 50%<p><b>Effect</b>: Increase the chance to find faction coins based on total time spent offline. (in minutes)</b><p><b>Formula</b>: floor(2.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
<br/>
<p><b>C251</b> - For <b>Titan</b> - Research Name: <b>Architecture</b><p><b>Requirement</b>: Secrets of the Ancients (as Titan)</b><p><b>Cost</b>: 79.05 QiQig (79.05E168)</b><p><b>Effect</b>: Increase the production of Olympian Halls based on the amount of buildings you own.</b><p><b>Formula</b>: round(0.5 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
<br/>
<p><b>C300</b> - For <b>Druid</b> - Research Name: <b>Weighting</b><p><b>Requirement</b>: 650 Lightning Strikes (This R)<p><b>Cost</b>: 33.6 OcQig (33.6E177)</b><p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.</b><p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.</b><p><b>Formula</b>: 10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.</p>
<br/>
<p><b>C305</b> - For <b>All Factions</b> - Research Name: <b>Golemcraft</b><p><b>Requirement</b>: 2 days as Titans (Total across all R)<p><b>Cost</b>: 255.2 OcQig (2.552E179)</b><p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</b><p><b>Formula</b>: floor(0.2 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
<br/>
<p><b>C330</b> - For <b>All Factions</b> - Research Name: <b>Overload</b><p><b>Requirement</b>: Research Aeromancy (S250) &amp; Critical Strike (W225)</b><p><b>Cost</b>: 6.443 Sxg (6.443E183)</b><p><b>Effect</b>: Increase mana regeneration based on the amount of research made.<p><b>Formula</b>: (3.5 *  x  ^0.35), where x is researches made.</p>
<br/>
<p><b>C340</b> - For <b>All Factions</b> - Research Name: <b>Gem Duster</b><p><b>Requirement</b>: 800 Gem Grinders (This R),Research Sifting (E260) &amp; Surveyorship (E290)</b><p><b>Cost</b>: 371.5 Sxg (3.715E185)</b><p><b>Effect</b>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative)</b><p><b>Formula</b>: floor(10 * x), where x is your Rubies Gained (All Time) stat.</p>
<br/>
<p><b>C375</b> - For <b>Titan</b> - Research Name: <b>Lightning Rod</b><p><b>Requirement</b>: Research Chain Lightning (S300) &amp; Overload (C330)</b><p><b>Cost</b>: 541 DSxg (5.41E191)</b><p><b>Effect</b>: Olympian Halls are always hit by Lightning Strike in addition to the primary target. Olympian Halls can no longer be a primary target.</p>
<br/>
<p><b>C400</b> - For <b>All Factions</b> - Research Name: <b>Gravitation</b><p><b>Requirement</b>: Research Magnetism (C250) &amp; Weighting (C300)</b><p><b>Cost</b>: 13.66 QaSxg (1.366E196)</b><p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.<p><b>Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 175%.<p><b>Formula</b>: floor(3.5 * ln^3(x + 1)), where x is your Faction Coins Gained (This Game) stat.</p>
<br/>
<p><b>C405</b> - For <b>Dwarf</b> - Research Name: <b>Metallurgy</b><p><b>Requirement</b>: Secrets of the Underworld (as Dwarf)</b><p><b>Cost</b>: 103.7 QaSxg (1.037E197)</b><p><b>Effect</b>: Increase the production of Dwarven Forges based on the Dwarven Forges you own.</b><p><b>Formula</b>: (45 * x ^ 0.825)%, where x is the number of Dwarven Forges you own.</p>
<br/>
<p><b>C460</b> - For <b>All Factions</b> - Research Name: <b>Distribution</b><p><b>Requirement</b>: 1M Clicks (This game)</b><p><b>Cost</b>: 502.3 SpSxg (5.023E206)</b><p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of clicks you made in this game.</b><p><b>Formula</b>: (35 * x ^ 0.5)%, where x is your Treasure Clicks (This Game) stat.</p>
<br/>
<p><b>C500</b> - For <b>All Factions</b> - Research Name: <b>Minecrafting</b><p><b>Requirement</b>: 3250 excavations (as Dwarf)</b><p><b>Cost</b>: 5.554Spg (5.554E213)</b><p><b>Effect</b>: Increases production bonus from gems based on the amount of excavations you made.</b><p><b>Formula</b>: (3 * x ^ 0.35)%, where x is the amount of Excavations you made.</p>
<br/>
<p><b>C520</b> - For <b>Dwarf</b> - Research Name: <b>Blacksmithing</b><p><b>Requirement</b>: Research Reinforcing (C135) &amp; Metallurgy (C405)</b><p><b>Cost</b>: 18.47 USpg (1.847E217)</b><p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarvin Forges you own.</b><p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarvin Forges you own.</b><p><b>Formula</b>: Clicking Reward: 2.5 * x^0.3%, where x is the number of Dwarven Forges you own.</b><p><b>Formula</b>: Diamond Pickaxe: 20 * x^0.4%, where x is the number of Dwarven Forges you own.</p>
<br/>
<p><b>C590</b> - For <b>Elf,Dwarf</b> - Research Name: <b>Alloys</b><p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwelf), Research Fusion(A105) and Blacksmithing(C520)</b><p><b>Cost</b>: 39.16 QiSpg (3.916E229)</b><p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins, (if your FC chance is 10k%, this will be 10k%).<p><b>Effect</b>: Autoclicks the treasure 10 times per second.</p>
<br/>
<p><b>C1300</b> - For <b>Neutral,Dragon</b> - Research Name: <b>Scintillation</b><p><b>Requirement</b>: 30000 Max Mana, as any Neutral,Dragon (This game)</b><p><b>Cost</b>: 4.698 Tvg (4.698e72)<p><b>Effect</b>: Increase production of buildings based on max mana and gem bonus. (Higher boost for lower gem bonus.)<p><b>Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total bonus from gem bonus upgrades.</p>
<br/>
<p><b>C1325</b> - For <b>All Factions</b> - Research Name: <b>Plasmation</b><p><b>Requirement</b>: 50m (50e6) Mana Produced (This game)</b><p><b>Cost</b>: 144.9 Tvg (1.449e74)<p><b>Effect</b>: Gain assistants based on mana produced in this game.<p><b>Formula</b>: floor(1.25 * ln(1 + x) ^ 2.25), where x is mana produced (this game).</p>
<br/>
<p><b>C1500</b> - For <b>Titan,Dragon</b> - Research Name: <b>Gargantuaness</b><p><b>Requirement</b>: 2500 Royal Exchanges Research E460, D1275 (As Titan, Dragon)</b><p><b>Cost</b>: 3.843 Spvg (3.843e84)<p><b>Effect</b>: Increase the production of all buildings based on total time spent as Neutral.<p><b>Formula</b>: (1.5 * x) ^ 0.7, where x is neutral time (this R) in minutes.</p>
<br/>
<p><b>C3000</b> - For <b>Mercenary</b> - Research Name: <b>Customizing</b><p><b>Requirement</b>: 9000 Excavations as Mercenary.</b><p><b>Cost</b>: 850.7 SxQig (8.507e173)<p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.<p><b>Formula</b>: (1.5 * x ^ 1.5), where X is artifacts you own.</p>
<br/>
<p><b>C3100</b> - For <b>All Factions</b> - Research Name: <b>Engineering</b><p><b>Requirement</b>: 15 days Mercenary time spent (Across all R's).</b><p><b>Cost</b>: 769.3 OcQig (7.693e179)<p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).<p><b>Formula</b>: (65 * x ^ 0.35), where x is clicks made.</p>
<?php include "../scripts/footer.html"; ?>
