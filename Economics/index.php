<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>The Research Facilities</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Economicsr.png" alt="Economics" align="middle"> <b>Economics</b></p>
<p>Exploit your resources with Economics knowledge, taking maximum advantage of your properties and turning time into money.</p>
<p><b>Increases</B>: <b>Goblin</B>, <b>Druid</B>, and <b>Dwarven</B> production.</p>
<p><b>----------------------------------</b></p>
<h6>Economics Facility</h6>
<p><b>E1</b> - <b>For</b> Goblin - <B>Research Name</B> Coinage</p>
<p><B>Cost</B>: 750 Qag (7.50E125)</P>
<p><B>Effect</B>: Increase the production of Goblin Banks based on the amount of buildings you own.</p>
<p><B>Formula</B>: round(0.8*x^0.8))%, where x is your Buildings Owned (This Game) stat.</p>
<p><b>----------------------------------</b></p>
<p><b>E10</b> - <b>For</b> Undead - <B>Research Name</B> Recycling</p>
<p><B>Requirement</B>: 2,000 Undercities
<p><B>Cost</B>: 28.83 Uqag (2.883E127)
<p><B>Effect</B>: Increase the production of all other buildings by 95% per Undercity you own.</p>
<p><b>----------------------------------</b></p>
<p><b>E25</b> - <b>For</b> Elf - <B>Research Name</B> Commerce</p>
<p><B>Requirement</B>: 100 M (1E8) Faction Coins (Found this Game)</p>
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</p>
<p><B>Formula</B>: floor((1 + 6x)^0.5 - 1), where x is your Royal Exchanges Made stat.</p>
<p><b>----------------------------------</b></p>
<p><b>E30</b> - <b>For</b> Any - <B>Research Name</B> Diplomacy
<p><B>Requirement</B>: 1000 Exchanges (This Game)
<p><B>Cost</B>: 95.88 Dqag (9.588E130)
<p><B>Effect</B>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.
<p><B>Formula</B>: Faction Coin Chance:floor(1.5 * x^1.05)% Royal Exchange bonus:floor(x^0.6)%, where x is Playtime (This Game in minutes).
<p><b>----------------------------------</b></p>
<p><b>E50</b> - <b>For</b> Fairy - <B>Research Name</B> Bartering
<p><B>Requirement</B>: 1,000 Exchanges (as Goblin)
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Reduce Enchanted Field cost multiplier. Reduces cost multiplier by 0.035; with no other reductions applying, the multiplier will be 1.115 instead of 1.15.
<p><b>----------------------------------</b></p>
<p><b>E80</b> - <b>For</b> Any - <B>Research Name</B> Common Business
<p><B>Requirement</B>: 9,000 Neutral Buildings
<p><B>Cost</B>: 61.13 Qiqag (6.113E139)
<p><B>Effect</B>: Increase the production of Good and Evil buildings based on the amount of neutral buildings.
<p><B>Formula</B>: round((1.75 * x)^0.8)%, where x is the number of neutral buildings you own.
<p><b>----------------------------------</b></p>
<p><b>E135</b> - <b>For</b> Any - <B>Research Name</B> Bribing
<p><B>Requirement</B>: 28,000 Total Buildings (as Goblin)
<p><B>Cost</B>: 296 Ocqag (2.96E149)
<p><B>Effect</B>: Reduce the building cost multiplier for Unique Buildings. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.
<p><b>----------------------------------</b></p>
<p><b>E145</b> - <b>For</b> Any - <B>Research Name</B> Royal Demand
<p><B>Requirement</B>: 5,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)
<p><B>Cost</B>: 17.07 Noqag (1.707E151)
<p><B>Effect</B>: Increase Tax Collection reward by 30 seconds of production.
<p><b>----------------------------------</b></p>
<p><b>E150</b> - <b>For</b> Any - <B>Research Name</B> Investment
<p><B>Requirement</B>: Research Bribing (E135) & Commerce (E25)
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of gold you own.
<p><B>Formula</B>: round( (ln(1 + x)) ^1.25 )%, where x is the amount of gold you own.
<p><b>----------------------------------</b></p>
<p><b>E200</b> - <b>For</b> Any - <B>Research Name</B> Acquisition
<p><B>Requirement</B>: Research Investment (E150) & Common Business (E80)
<p><B>Cost</B>: 82.65 Dqig (8.265E160)
<p><B>Effect</B>: Increase the production of all buildings based on your percentage of trophies unlocked.
<p><B>Formula</B>: round(0.0003 * (100 * x)^3.35), where x is trophiesunlocked / trophiesmax.
<p><b>----------------------------------</b></p>
<p><b>E225</b> - <b>For</b> Goblin - <B>Research Name</B> Forgery
<p><B>Requirement</B>: Research Coinage (E1) & Gilding (A50)
<p><B>Cost</B>: 2.087 Qaqig (2.087E165)
<p><B>Effect</B>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.
<p><B>Formula</B>: round(10 * x^0.85)%, where x is the number of Goblin Banks you own.
<p><b>----------------------------------</b></p>
<p><b>E230</b> - <b>For</b> Demon - <B>Research Name</B> Coercion
<p><B>Requirement</B>: Research Exertion (W50) & Diplomacy (E30)
<p><B>Cost</B>: 2.087 Qaqig (2.087E165)
<p><B>Effect</B>: Increase the production of Infernal Realms based on total time spent being Evil.
<p><B>Formula</B>: round(0.2 * x^0.7)%, where x is your Time Spent Being Evil (Total) stat.
<p><b>----------------------------------</b></p>
<p><b>E250</b> - <b>For</b> Any - <B>Research Name</B> Trade Routes
<p><B>Requirement</B>: Research Forgery (E225) & Royal Demand (E145)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.
<p><B>Formula</B>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.
<p><b>----------------------------------</b></p>
<p><b>E260</b> - <b>For</b> Druid - <B>Research Name</B> Sifting
<p><B>Requirement</B>: 3,000 Stonehenge Circles
<p><B>Cost</B>: 3.039 SxQig (3.039E171)
<p><B>Effect</B>: Increase the production of all other buildings based on the amount of Stone Pillars you own.
<p><B>Formula</B>: (100*x), where x is Stone Pillars.
<p><b>----------------------------------</b></p>
<p><b>E275</b> - <b>For</b> Titan - <B>Research Name</B> Offering
<p><B>Requirement</B>: 1,250 Royal Exchanges (as Titans)
<p><B>Cost</B>: 175.2 SxQig (1.752E173)
<p><B>Effect</B>: Increase mana regeneration based on your Royal Exchange Bonus.
<p><B>Formula</B>: floor(0.9 * x ^ 0.95), where x is your Royal Exchange Bonus.
<p><b>----------------------------------</b></p>
<p><b>E290</b> - <b>For</b> Any - <B>Research Name</B> Surveyorship
<p><B>Requirement</B>: 7 Artifacts
<p><B>Cost</B>: 582.7 SpQig (5.827E176)
<p><B>Effect</B>: Reduce Excavation cost multiplier. Reduces cost multiplier by 0.025; with no other reductions applying, the multiplier will be 1.175 instead of 1.2.
<p><b>----------------------------------</b></p>
<p><b>E320</b> - <b>For</b> Any - <B>Research Name</B> Smuggling
<p><B>Requirement</B>: Have 2x Gems in Abdication Treasury
<p><B>Cost</B>: 1.117 NoQig (1.117E180)
<p><B>Effect</B>: Increase production bonus from gems based on the gems you have in your abdication treasury.
<p><B>Formula</B>: floor(0.45 * log(1+ x)), where x is the amount of gems you will gain upon abdication.
<p><b>----------------------------------</b></p>
<p><b>E330</b> - <b>For</b> Any - <B>Research Name</B> Collection
<p><B>Requirement</B>: Research Acquisition (E200) & Forgery (E225a)
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of artifacts you found.
<p><B>Formula</B>: round(50 * x^1.1)%, where x is the amount of artifacts found.
<p><b>----------------------------------</b></p>
<p><b>E350</b> - <b>For</b> Faceless - <B>Research Name</B> Repurpose
<p><B>Requirement</B>: Research Journeymen (C200) & Adaptation (A330) (as Faceless)
<p><B>Cost</B>: 21.42 USxg (2.142E187)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of Reincarnations you made.
<p><B>Formula</B>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.
<p><b>----------------------------------</b></p>
<p><b>E400</b> - <b>For</b> Any - <B>Research Name</B> Conversion
<p><B>Requirement</B>: Research Philosopher's Stone (A250) & Repurpose (E350).
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)
<p><B>Effect</B>: Increase production bonus from Gems based on your Royal Exchange bonus.
<p><B>Formula</B>: floor(x^0.95)%, where x is your Royal Exchange Bonus.
<p><b>----------------------------------</b></p>
<p><b>E410</b> - <b>For</b> Dwarf - <B>Research Name</B> Marketing
<p><B>Requirement</B>: 5000 Blacksmiths
<p><B>Cost</B>: 787.7 QaSxg (7.877E197)
<p><B>Effect</B>: Increase production of all other buildings by 85% per Dwarven Forge you own.
<p><b>----------------------------------</b></p>
<p><b>E460</b> - <b>For</b> Any - <B>Research Name</B> Inflation
<p><B>Requirement</B>: 100B (1E11) Faction Coins (Found this Game)
<p><B>Cost</B>: 502.3 SpSxg (5.023E206)
<p><B>Effect</B>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game.
<p><B>Formula</B>: floor(3.5 * log(1 + x))%p, where x is your Faction Coins Gained (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>E480</b> - <b>For</b> Any - <B>Research Name</B> Undercutting
<p><B>Requirement</B>: 15000 max mana
<p><B>Cost</B>: 1.67 NoSxg (1.67E210)
<p><B>Effect</B>: Increase the production of non-unique buildings based on total spells cast.
<p><B>Formula</B>: 0.65 * x^0.65%, where x is your Spells Cast (Total) stat.
<p><b>----------------------------------</b></p>
<p><b>E495</b> - <b>For</b> Drow - <B>Research Name</B> Jewellery
<p><B>Requirement</B>: 12000 Unique Buildings (as Dwarf)
<p><B>Cost</B>: 731.4 NoSxg (7.314E212)
<p><B>Effect</B>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own.
<p><B>Formula</B>: (1.2 * x^0.8 / 20)%, where x is the number of Spider Sanctuaries you own.
<p><b>----------------------------------</b></p>
<p><b>E590</b> - <b>For</b> Goblin,Drow - <B>Research Name</B> Slavery
<p><B>Requirement</B>: 200 Drow Exchanges as Droblin, Research Automatons (C225) and Undercutting (E480)
<p><B>Cost</B>: 39.16 QiSpg (3.916 E229)
<p><B>Effect</B>: Gain additional assistants based on the amount of Evil buildings you own.
<p><B>Formula</B>: floor((x/300)^1.05), where x is the number of Non Unique Buildings you own.
<p><b>----------------------------------</b></p>
<p><b>E1225</b> - <b>For</b> Neutral,Dragon - <B>Research Name</B> Hoarding
<p><B>Requirement</B>: 1T Faction Coins (Found this game), Affiliated Dragon
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Reduce Ascension penalty for Royal Exchanges.
<p><B>Formula</B>: ((((((bonus per RE as %)^0.2(if E1225))*number of REs)/100)+1)^0.1(if not E1225).
<p><b>----------------------------------</b></p>
<p><b>E1325</b> - <b>For</b> Any - <B>Research Name</B> Intimidation
<p><B>Requirement</B>: 18000 Unique Buildings
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Reduce Royal Exchange cost multiplier.
<p><B>Formula</B>: Reduces multiplier by 0.025, base multiplier is 1.1
<p><b>----------------------------------</b></p>
<p><b>E1425</b> - <b>For</b> Any Neutral - <B>Research Name</B> Rarity
<p><B>Requirement</B>: 2592000s Time Spent (10 days with Titan, Druid and Faceless), Research A545, D245 (Total all R's)
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase Gem Grinder bonus based on the amount of artifacts you found.
<p><B>Formula</B>: 1.75 * x ^ 1.75, where x is artifacts found. (multiplicative)
<p><b>----------------------------------</b></p>
<p><b>E3250</b> - <b>For</b> Mercenary - <B>Research Name</B> Estates
<p><B>Requirement</B>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).
<p><B>Cost</B>: 419.4 DSxg (4,194e191)
<p><B>Effect</B>: Gives you all the Unique Buildings of your alignment.
<p><b>----------------------------------</b></p>
<p><b>E3300</b> - <b>For</b> Mercenary - <B>Research Name</B> Hirelings
<p><B>Requirement</B>: (Intimidation E1325) and (Scholarship S2875)
<p><B>Cost</B>: 454.5 TSxg (4.545e194)
<p><B>Effect</B>: Gives assistants based on the gold you have.
<p><B>Formula</B>: 2 * log10(x + 1) additive, where x is gold you have.
<?php include "../scripts/footer.html"; ?>




