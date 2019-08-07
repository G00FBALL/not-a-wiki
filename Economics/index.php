<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>Economics Facilities</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Economicsr.png" alt="Economics" align="middle"> <b>Economics</b></p>
<p>Exploit your resources with Economics knowledge, taking maximum advantage of your properties and turning time into money.</p>
<p><b>Increases</B>: <b>Goblin</B>, <b>Druid</B>, and <b>Dwarven</B> production.</p>
<p>Pointing to this ingame will tell you how many slots are available also tells you your total research points.</p>
<br/>
<p><b>Research Point Production</b>
<p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
<br/>
<p><b>E1</b> - For <b>Goblin</b> - Research Name: <b>Coinage</b><p><b>Cost</b>: 750 Qag (7.50E125)</b><p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own.</b><p><b>Formula</b>: round(0.8 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
<br/>
<p><b>E10</b> - For <b>Undead</b> - Research Name: <b>Recycling</b><p><b>Requirement</b>: 2,000 Undercities</b><p><b>Cost</b>: 28.83 Uqag (2.883E127)</b><p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.</p></p>
<br/>
<p><b>E25</b> - For <b>Elf</b> - Research Name: <b>Commerce</b><p><b>Requirement</b>: 100 M (1E8) Faction Coins (Found this Game)</b><p><b>Cost</b>: 12.63 Dqag (1.263E130)</b><p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</b><p><b>Formula</b>: floor((1 + 6 * x) ^ 0.5 - 1), where x is your Royal Exchanges Made stat.</p>
<br/>
<p><b>E30</b> - For <b>All Factions</b> - Research Name: <b>Diplomacy</b><p><b>Requirement</b>: 1000 Exchanges (This Game) </b><p><b>Cost</b>: 95.88 Dqag (9.588E130)</b><p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.</b><p><b>Formula</b>: Faction Coin Chance: floor(1.5 * x ^ 1.05)%</b><p><b>Formula</b>: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).</p>
<br/>
<p><b>E50</b> - For <b>Fairy</b> - Research Name: <b>Bartering</b><p><b>Requirement</b>: 1,000 Exchanges(as Goblin)</b><p><b>Cost</b>: 318.8 Tqag (3.188E134)</b><p><b>Effect</b>: Reduce Enchanted Field </b><p><b>Cost</b> multiplier. Reduces </b><p><b>Cost</b> multiplier by 0.035; with no other reductions applying, the multiplier will be 1.115 instead of 1.15.</p>
<br/>
<p><b>E80</b> - For <b>All Factions</b> - Research Name: <b>Common Business</b><p><b>Requirement</b>: 9,000 Neutral Buildings</b><p><b>Cost</b>: 61.13 Qiqag (6.113E139)</b><p><b>Effect</b>: Increase the production of Good and Evil buildings based on the amount of neutral buildings.</b><p><b>Formula</b>: round((1.75 * x) ^ 0.8)%, where x is the number of neutral buildings you own.</p>
<br/>
<p><b>E135</b> - For <b>All Factions</b> - Research Name: <b>Bribing</b><p><b>Requirement</b>: 28,000 Total Buildings(as Goblin)</b><p><b>Cost</b>: 296 Ocqag (2.96E149)</b><p><b>Effect</b>: Reduce the building </b><p><b>Cost</b> multiplier for Unique Buildings. Reduces </b><p><b>Cost</b> multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>E145</b> - For <b>All Factions</b> - Research Name: <b>Royal Demand</b><p><b>Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) &amp; Woodcraft (C105)</b><p><b>Cost</b>: 17.07 Noqag (1.707E151)</b><p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.</p>
<br/>
<p><b>E150</b> - For <b>All Factions</b> - Research Name: <b>Investment</b><p><b>Requirement</b>: Research Bribing (E135) &amp; Commerce (E25)</b><p><b>Cost</b>: 129.6 Noqag (1.296E152)</b><p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own.</b><p><b>Formula</b>: round(ln(1 + x) ^ 1.25)%, where x is the amount of gold you own.</p>
<br/>
<p><b>E200</b> - For <b>All Factions</b> - Research Name: <b>Acquisition</b><p><b>Requirement</b>: Research Investment (E150) &amp; Common Business (E80)</b><p><b>Cost</b>: 82.65 Dqig (8.265E160)</b><p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked.</b><p><b>Formula</b>: round(0.0003 * (100 * x) ^ 3.35), where x is trophies unlocked / max trophies.</p>
<br/>
<p><b>E225</b> - For <b>Goblin</b> - Research Name: <b>Forgery</b><p><b>Requirement</b>: Research Coinage (E1) &amp; Gilding (A50)</b><p><b>Cost</b>: 2.087 Qaqig (2.087E165)</b><p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.</b><p><b>Formula</b>: round(10 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
<br/>
<p><b>E230</b> - For <b>Demon</b> - Research Name: <b>Coercion</b><p><b>Requirement</b>: Research Exertion (W50) &amp; Diplomacy (E30)</b><p><b>Cost</b>: 2.087 Qaqig (2.087E165)</b><p><b>Effect</b>: Increases trophy count based on time spent as Evil this R. </b><p><b>Formula</b>: (0.2 * x ^ 0.65), where x is time spent as Evil this R.</p>
<br/>
<p><b>E250</b> - For <b>All Factions</b> - Research Name: <b>Trade Routes</b><p><b>Requirement</b>: Research Forgery (E225) &amp; Royal Demand (E145)</b><p><b>Cost</b>: 52.7 Qiqig (5.27E169)</b><p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.</b><p><b>Formula</b>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.</p>
<br/>
<p><b>E260</b> - For <b>Druid</b> - Research Name: <b>Sifting</b><p><b>Requirement</b>: 3,000 Stonehenge Circles</b><p><b>Cost</b>: 3.039 SxQig (3.039E171)</b><p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.</b><p><b>Formula</b>: (100 * x), where x is Stone Pillars</p>
<br/>
<p><b>E275</b> - For <b>Titan</b> - Research Name: <b>Offering</b><p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)</b><p><b>Cost</b>: 175.2 SxQig (1.752E173)</b><p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.</b><p><b>Formula</b>: floor(0.9 * x ^ 0.95), where x is your Royal Exchange Bonus.</p>
<br/>
<p><b>E290</b> - For <b>All Factions</b> - Research Name: <b>Surveyorship</b><p><b>Requirement</b>: 7 Artifacts</b><p><b>Cost</b>: 582.7 SpQig (5.827E176)</b><p><b>Effect</b>: Reduces Excavation </b><p><b>Cost</b> multiplier by 0.025; with no other reductions applying, the multiplier will be 1.175 instead of 1.2.</p>
<br/>
<p><b>E320</b> - For <b>All Factions</b> - Research Name: <b>Smuggling</b><p><b>Requirement</b>: Have 2x Gems in Abdication Treasury</b><p><b>Cost</b>: 1.117 NoQig (1.117E180)</b><p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings owned.Also increase FC chance find chance by a multiplicative 100%.</b><p><b>Formula</b>: 5 * x ^ 0.9, where x is Unique Building owned.</p>
<br/>
<p><b>E330</b> - For <b>All Factions</b> - Research Name: <b>Collection</b><p><b>Requirement</b>: Research Acquisition (E200) &amp; Forgery (E225)</b><p><b>Cost</b>: 6.443 Sxg (6.443E183)</b><p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found.</b><p><b>Formula</b>: round(50 * x ^ 1.1)%, where x is the amount of artifacts found.</p>
<br/>
<p><b>E350</b> - For <b>Faceless</b> - Research Name: <b>Repurpose</b><p><b>Requirement</b>: Research Journeymen (C200) &amp; Adaptation (A330)(as Faceless)</b><p><b>Cost</b>: 21.42 USxg (2.142E187)</b><p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made.</b><p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.</p>
<br/>
<p><b>E400</b> - For <b>All Factions</b> - Research Name: <b>Conversion</b><p><b>Requirement</b>: Research Philosopher's Stone (A250) &amp; Repurpose (E350).</b><p><b>Cost</b>: 13.66 QaSxg (1.366E196)</b><p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.</b><p><b>Formula</b>: floor(x ^ 0.95)%, where x is your Royal Exchange Bonus.</p>
<br/>
<p><b>E410</b> - For <b>Dwarf</b> - Research Name: <b>Marketing</b><p><b>Requirement</b>: 5000 Blacksmiths</b><p><b>Cost</b>: 787.7 QaSxg (7.877E197)</b><p><b>Effect</b>: Increase production of all other buildings by 85% per Dwarven Forge you own.</p>
<br/>
<p><b>E460</b> - For <b>All Factions</b> - Research Name: <b>Inflation</b><p><b>Requirement</b>: 100B (1E11) Faction Coins (Found this Game) </b><p><b>Cost</b>: 502.3 SpSxg (5.023E206)</b><p><b>Effect</b>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game.</b><p><b>Formula</b>: floor(3.5 * log10(1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
<br/>
<p><b>E480</b> - For <b>All Factions</b> - Research Name: <b>Undercutting</b><p><b>Requirement</b>: 15000 max mana</b><p><b>Cost</b>: 1.67 NoSxg (1.67E210)</b><p><b>Effect</b>: Increase the production of non-unique buildings based on total spells cast.</b><p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x is your Spells Cast (Total) stat.</p>
<br/>
<p><b>E495</b> - For <b>Drow</b> - Research Name: <b>Jewellery</b><p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf)</b><p><b>Cost</b>: 731.4 NoSxg (7.314E212)</b><p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own.</b><p><b>Formula</b>: (0.06 * x ^ 0.8)%, where x is the number of Spider Sanctuaries you own.</p>
<br/>
<p><b>E590</b> - For <b>Goblin,Drow</b> - Research Name: <b>Slavery</b><p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)</b><p><b>Cost</b>: 39.16 QiSpg (3.916 E229)</b><p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own. </b><p><b>Formula</b>: (0.1 * x ^ 0.8), where x is the number of Non Unique Buildings you own.</p>
<br/>
<p><b>E1225</b> - For <b>Neutral,Dragon</b> - Research Name: <b>Hoarding</b><p><b>Requirement</b>: 1T (1E12) Faction coins (Found this game)</b><p><b>Cost</b>: 160.2 Uvg (1.602e68)</b><p><b>Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.</p>
<br/>
<p><b>E1325</b> - For <b>All Factions</b> - Research Name: <b>Intimidation</b><p><b>Requirement</b>: 18000 Unique Buildings</b><p><b>Cost</b>: 144.9 Tvg (1.449e74)</b><p><b>Effect</b>: Reduce Royal Exchange </b><p><b>Cost</b> multiplier.</b><p><b>Formula</b>: Reduces multiplier by 0.025; with no other reductions applying, base multiplier is 1.1</p>
<br/>
<p><b>E1425</b> - For <b>All Neutral Factions</b> - Research Name: <b>Rarity</b><p><b>Requirement</b>: 7 days playtime each with Titan, Druid and Faceless, Research A545, C1300</b><p><b>Cost</b>: 131 Qivg (1.31e80)</b><p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</b><p><b>Formula</b>: (1.25 * x ^ 1.25)%, where x is artifacts found. (multiplicative)</p>
<br/>
<p><b>E3250</b> - For <b>All</b> - Research Name: <b>Hirelings</b><p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</b><p><b>Cost</b>: 661.6 USxg (6.616e188)</b><p><b>Effect</b>: Gives assistants based on the amount of coins you own.</b><p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
<br/>
<p><b>E3300</b> - For <b>Mercenary</b> - Research Name: <b>Estates</b><p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</b><p><b>Cost</b>: 629.2 DSxg (6.292e191)</b><p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.</p><p><b>Effect</b>: Ascension 3: Gain all the Unique Buildings that match your alignments.</p>
<?php include "../scripts/footer.html"; ?>
