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
<p>Pointing to this ingame will tell you how many slots are available also tells you your total research points.
<br/>
<br/>
<p><b>E1</b> - <b>For Goblin</b> - <b>Research Name</b>: Coinage 
<p><b>Cost</b>: 750 Qag (7.50E125) 
<p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own. 
<p><b>Formula</b>: round(0.8*x^0.8))%, where x is your Buildings Owned (This Game) stat.
<br/>
<br/>
<p><b>E10</b> - <b>For Undead</b> - <b>Research Name</b>: Recycling 
<p><b>Requirement</b>: 2,000 Undercities 
<p><b>Cost</b>: 28.83 Uqag (2.883E127) 
<p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.
<br/>
<br/>
<p><b>E25</b> - <b>For Elf</b> - <b>Research Name</b>: Commerce 
<p><b>Requirement</b>: 100 M (1E8) Faction Coins (Found this Game)
<p><b>Cost</b>: 12.63 Dqag (1.263E130) 
<p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased. 
<p><b>Formula</b>: floor((1 + 6x)^0.5 - 1), where x is your Royal Exchanges Made stat.
<br/>
<br/>
<p><b>E30</b> - <b>For All Factions</b> - <b>Research Name</b>: Diplomacy 
<p><b>Requirement</b>: 1000 Exchanges (This Game)
<p><b>Cost</b>: 95.88 Dqag (9.588E130) 
<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game. 
<p><b>Formula</b>: Faction Coin Chance: floor(1.5 * x^1.05)% 
<p><b>Formula</b>: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).
<br/>
<br/>
<p><b>E50</b> - <b>For Fairy</b> - <b>Research Name</b>: Bartering 
<p><b>Requirement</b>: 1,000 Exchanges(as Goblin) 
<p><b>Cost</b>: 318.8 Tqag (3.188E134) 
<p><b>Effect</b>: Reduce Enchanted Field cost multiplier. Reduces cost multiplier by 0.035; with no other reductions applying, the multiplier will be 1.115 instead of 1.15.
<br/>
<br/>
<p><b>E80</b> - <b>For All Factions</b> - <b>Research Name</b>: Common Business 
<p><b>Requirement</b>: 9,000 Neutral Buildings 
<p><b>Cost</b>: 61.13 Qiqag (6.113E139) 
<p><b>Effect</b>: Increase the production of Good and Evil buildings based on the amount of neutral buildings. 
<p><b>Formula</b>: round((1.75 * x)^0.8)%, where x is the number of neutral buildings you own.
<br/>
<br/>
<p><b>E135</b> - <b>For All Factions</b> - <b>Research Name</b>: Bribing 
<p><b>Requirement</b>: 28,000 Total Buildings(as Goblin) 
<p><b>Cost</b>: 296 Ocqag (2.96E149) 
<p><b>Effect</b>: Reduce the building cost multiplier for Unique Buildings. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.
<br/>
<br/>
<p><b>E145</b> - <b>For All Factions</b> - <b>Research Name</b>: Royal Demand 
<p><b>Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) &amp; Woodcraft (C105) 
<p><b>Cost</b>: 17.07 Noqag (1.707E151) 
<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.
<br/>
<br/>
<p><b>E150</b> - <b>For All Factions</b> - <b>Research Name</b>: Investment 
<p><b>Requirement</b>: Research Bribing (E135) &amp; Commerce (E25) 
<p><b>Cost</b>: 129.6 Noqag (1.296E152) 
<p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own. 
<p><b>Formula</b>: round( (ln(1 + x)) ^1.25 )%, where x is the amount of gold you own.
<br/>
<br/>
<p><b>E200</b> - <b>For All Factions</b> - <b>Research Name</b>: Acquisition 
<p><b>Requirement</b>: Research Investment (E150) &amp; Common Business (E80) 
<p><b>Cost</b>: 82.65 Dqig (8.265E160) 
<p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked. 
<p><b>Formula</b>: round(0.0003 * (100 * x)^3.35), where x is trophiesunlocked / trophiesmax.
<br/>
<br/>
<p><b>E225</b> - <b>For Goblin</b> - <b>Research Name</b>: Forgery 
<p><b>Requirement</b>: Research Coinage (E1) &amp; Gilding (A50) 
<p><b>Cost</b>: 2.087 Qaqig (2.087E165) 
<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own. 
<p><b>Formula</b>: round(10 * x^0.85)%, where x is the number of Goblin Banks you own.
<br/>
<br/>
<p><b>E230</b> - <b>For Demon</b> - <b>Research Name</b>: Coercion 
<p><b>Requirement</b>: Research Exertion (W50) &amp; Diplomacy (E30) 
<p><b>Cost</b>: 2.087 Qaqig (2.087E165) 
<p><b>Effect</b>: Increase the production of Infernal Realms based on total time spent being Evil. 
<p><b>Formula</b>: round(0.2 * x^0.7)%, where x is your Time Spent Being Evil (Total) stat.
<br/>
<br/>
<p><b>E250</b> - <b>For All Factions</b> - <b>Research Name</b>: Trade Routes 
<p><b>Requirement</b>: Research Forgery (E225) &amp; Royal Demand (E145) 
<p><b>Cost</b>: 52.7 Qiqig (5.27E169) 
<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased. 
<p><b>Formula</b>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.
<br/>
<br/>
<p><b>E260</b> - <b>For Druid</b> - <b>Research Name</b>: Sifting 
<p><b>Requirement</b>: 3,000 Stonehenge Circles 
<p><b>Cost</b>: 3.039 SxQig (3.039E171) 
<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.
<p><b>Formula</b>: (100*x), where x is Stone Pillars.
<br/>
<br/>
<p><b>E275</b> - <b>For Titan</b> - <b>Research Name</b>: Offering 
<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans) 
<p><b>Cost</b>: 175.2 SxQig (1.752E173) 
<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus. 
<p><b>Formula</b>: floor(0.9 * x ^ 0.95), where x is your Royal Exchange Bonus.
<br/>
<br/>
<p><b>E290</b> - <b>For All Factions</b> - <b>Research Name</b>: Surveyorship 
<p><b>Requirement</b>: 7 Artifacts 
<p><b>Cost</b>: 582.7 SpQig (5.827E176) 
<p><b>Effect</b>: Reduces Excavation cost multiplier by 0.025; with no other reductions applying, the multiplier will be 1.175 instead of 1.2.
<br/>
<br/>
<p><b>E320</b> - <b>For All Factions</b> - <b>Research Name</b>: Smuggling 
<p><b>Requirement</b>: Have 2x Gems in Abdication Treasury 
<p><b>Cost</b>: 1.117 NoQig (1.117E180) 
<p><b>Effect</b>: Increase production bonus from gems based on the gems you have in your abdication treasury. 
<p><b>Formula</b>: floor(0.45 * log(1+ x)), where x is the amount of gems you will gain upon abdication.
<br/>
<br/>
<p><b>E330</b> - <b>For All Factions</b> - <b>Research Name</b>: Collection 
<p><b>Requirement</b>: Research Acquisition (E200) &amp; Forgery (E225a) 
<p><b>Cost</b>: 6.443 Sxg (6.443E183) 
<p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found. 
<p><b>Formula</b>: round(50 * x^1.1)%, where x is the amount of artifacts found.
<br/>
<br/>
<p><b>E350</b> - <b>For Faceless</b> - <b>Research Name</b>: Repurpose 
<p><b>Requirement</b>: Research Journeymen (C200) &amp; Adaptation (A330)(as Faceless) 
<p><b>Cost</b>: 21.42 USxg (2.142E187) 
<p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made. 
<p><b>Formula</b>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.
<br/>
<br/>
<p><b>E400</b> - <b>For All Factions</b> - <b>Research Name</b>: Conversion 
<p><b>Requirement</b>: Research Philosopher's Stone (A250) &amp; Repurpose (E350). 
<p><b>Cost</b>: 13.66 QaSxg (1.366E196) 
<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus. 
<p><b>Formula</b>: floor(x^0.95)%, where x is your Royal Exchange Bonus.
<br/>
<br/>
<p><b>E410</b> - <b>For Dwarf</b> - <b>Research Name</b>: Marketing 
<p><b>Requirement</b>: 5000 Blacksmiths 
<p><b>Cost</b>: 787.7 QaSxg (7.877E197) 
<p><b>Effect</b>: Increase production of all other buildings by 85% per Dwarven Forge you own.
<br/>
<br/>
<p><b>E460</b> - <b>For All Factions</b> - <b>Research Name</b>: Inflation 
<p><b>Requirement</b>: 100B (1E11) Faction Coins (Found this Game)
<p><b>Cost</b>: 502.3 SpSxg (5.023E206) 
<p><b>Effect</b>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game. 
<p><b>Formula</b>: floor(3.5 * log(1 + x))%, where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>E480</b> - <b>For All Factions</b> - <b>Research Name</b>: Undercutting 
<p><b>Requirement</b>: 15000 max mana 
<p><b>Cost</b>: 1.67 NoSxg (1.67E210) 
<p><b>Effect</b>: Increase the production of non-unique buildings based on total spells cast. 
<p><b>Formula</b>: 0.65 * x^0.65%, where x is your Spells Cast (Total) stat.
<br/>
<br/>
<p><b>E495</b> - <b>For Drow</b> - <b>Research Name</b>: Jewellery 
<p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf) 
<p><b>Cost</b>: 731.4 NoSxg (7.314E212) 
<p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own. 
<p><b>Formula</b>: x^0.8 / 20%, where x is the number of Spider Sanctuaries you own.
<br/>
<br/>
<p><b>E590</b> - <b>For Goblin,Drow</b> - <b>Research Name</b>: Slavery 
<p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480) 
<p><b>Cost</b>: 39.16 QiSpg (3.916 E229) 
<p><b>Effect</b>: Gain additional assistants based on the amount of Evil buildings you own. 
<p><b>Formula</b>: floor(x/300)^1.05, where x is the number of Non Unique Buildings you own.
<br/>
<br/>
<p><b>E1225</b> - <b>For Neutral,Dragon</b> - <b>Research Name</b>: Hoarding
<p><b>Requirement</b>: 1T (1E12) Faction coins (Found this game)
<p><b>Cost</b>: 512.3 Uvg (5.123E68)
<p><b>Effect</b>: Reduce Ascension penalty for Royal Exchanges.
<p><b>Formula</b>: ((((((bonus per RE as %)^0.2(if E1225))*number of REs)/100)+1)^0.1(if not E1225).
<br/>
<br/>
<p><b>E1325</b> - <b>For All Factions</b> - <b>Research Name</b>: Intimidation
<p><b>Requirement</b>: 18000 Unique Buildings
<p><b>Cost</b>: 601.6 Tvg (6.016E74)
<p><b>Effect</b>: Reduce Royal Exchange cost multiplier.
<p><b>Formula</b>: Reduces multiplier by 0.025; with no other reductions applying, base multiplier is 1.1
<br/>
<br/>
<p><b>E1425</b> - <b>For All Neutral Factions</b> - <b>Research Name</b>: Rarity
<p><b>Requirement</b>: 7 days playtime each with Titan, Druid and Faceless, Research A545, C1300
<p><b>Cost</b>: 706.4 Qivg (7.064E80)
<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.
<p><b>Formula</b>: 1.75 * x ^ 1.75, where x is artifacts found. (multiplicative)
<br/>
<br/>
<p><b>E3250</b> - <b>For Mercenary</b> - <b>Research Name</b>: Estates  
<p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).  
<p><b>Cost</b>: 419.4 DSxg (4,194e191) 
<p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.
<br/>
<br/>
<p><b>E3300</b> - <b>For Mercenary</b> - <b>Research Name</b>: Hirelings 
<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).  
<p><b>Cost</b>: 454.5 TSxg (4.545e194) 
<p><b>Effect</b>: Gives assistants based on the amount of coins you own.
<p><b>Formula</b>: 2 * log10(x + 1) additive
<?php include "../scripts/footer.html"; ?>

