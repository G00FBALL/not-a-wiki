<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>All Changes and Additions</h6>
        <br/>
<p><b>V3.8.1 June 29, 2020</b></p>
<br>
<p>Text inside the Mana Sphere has been reorganized for better visibility.</p>
<br>
<p><b>Secret Trophy Upgrades Costs changed</b></p>
<p><b>Assistant Squasher</b>: <b>Old Cost</b> 1e17, <b>New Cost</b> 100</p>
<p><b>Beard Carpet</b>: <b>Old Cost</b> 1e61, <b>New Cost</b> 3000</p>
<p><b>Building Hater</b>: <b>Old Cost</b> 1e34, <b>New Cost</b> 1</p>
<p><b>Faction Grinder</b>: <b>Old Cost</b> 6e27, <b>New Cost</b> 1e6</p>
<p><b>Spellfury</b>: <b>Old Cost</b> 4e33, <b>New Cost</b> 4333</p>
<p><b>Unitary</b>: <b>Old Cost</b> 1e7, <b>New Cost</b> 1111</p>
<hr>
<p><b>Faction Upgrades</b></p>
<p><b>Fairy</b></p>
<p><b>FR9</b> (Swarm of Fairies)</p>
        <p><b>Effect</b>: You gain additional assistants based on the amount of Farms, Inns and Blacksmiths you own.</p>
        <p><b>Old Formula</b>: floor((1 + 4 * x) ^ 0.5 - 1) / 3, where x is the number of Farms, Inns, and Blacksmiths you own.</p>
        <p><b>New Formula</b>: (0.7 * x ^ 0.5), where x is the number of Farms, Inns, and Blacksmiths you own.</p>
<br/>
<p><b>Angel</b></p>
<p><b>AN1</b> (Holy Bells)</p>
        <p><b>Effect</b>: Cathedrals also increase your mana regeneration rate.</p>
        <p><b>Old Formula</b>: (x ^ 0.28), where x is the number of Cathedrals you own.</p>
        <p><b>New Formula</b>: (x ^ 0.25), where x is the number of Cathedrals you own.</p>
<br/>
<p><b>AN4</b> (Guardian Angels)</p>
        <p><b>Effect</b>: Royal Castles also increase your mana production rate.</p>
        <p><b>Old Formula</b>: (x ^ 0.305), where x is the number of Royal Castles you own.</p>
        <p><b>New Formula</b>: (x ^ 0.3), where x is the number of Royal Castles you own.</p>
<br/>
<p><b>AN7</b> (Magical Gates)</p>
        <p><b>Effect</b>: Heaven's Gates also increase your mana production rate.</p>
        <p><b>Old Formula</b>: (x ^ 0.33), where x is the number of Heaven's Gates you own.</p>
        <p><b>New Formula</b>: (x ^ 0.35), where x is the number of Heaven's Gates you own.</p>
<br/>
<p><b>Demon</b></p>
<p><b>DM7</b> (Infernal Magic)</p>
        <p><b>Effect</b>: Hell Portals also increase your mana regeneration rate.</p>
        <p><b>Old Formula</b>: (x ^ 0.325), where x is the number of Hell Portals you own.</p>
        <p><b>New Formula</b>: (x ^ 0.35), where x is the number of Hell Portals you own.</p>
<br/>
<p><b>DM8</b> (Burning Legion)</p>
        <p><b>Effect</b>: You gain assistants based on the amount of Hell Portals you own.</p>
        <p><b>Old Formula</b>: (floor(1 + 2.5 * x -1) ^ 0.5), where x is the number of Hell Portals you own.</p>
        <p><b>New Formula</b>: (x ^ 0.55), where x is the number of Hell Portals you own.</p>
<br/>
<p><b>Undead</b></p>
<p><b>UD3</b> (Death Temples)</p>
        <p><b>Effect</b>: Dark Temples also increase your mana production rate.</p>
        <p><b>Old Formula</b>: (x ^ 0.28), where x is the number of Dark Temples you own.</p>
        <p><b>New Formula</b>: (x ^ 0.3), where x is the number of Dark Temples you own.</p>
<br/>
<p><b>UD5</b> (Corpse Supply)</p>
        <p><b>Effect</b>: You gain additional assistants based on the amount of Necropolises you own.</p>
        <p><b>Old Formula</b>: floor(2.5 * x ^ 0.5), where x is the number of Necropolises you own.</p>
        <p><b>New Formula</b>: (2.5 * x ^ 0.5), where x is the number of Necropolises you own.</p>
<br/>
<p><b>Faceless</b></p>
<p><b>FC1</b> (Territorial Expanse)</p>
        <p><b>Old Effect</b>: Chance to have a Labyrinth built for free each time you click the treasure chest. This chance is based on your income per second and the cost of the next Labyrinth. Labyrinth production is increased by 5000% per assistant you own.</p>
        <p><b>New Effect</b>: Labyrinth production is increased by 5000% per assistant you own.</p>
<br/>
<p><b>Druid</b></p>
<p><b>DD2</b> (Animal Companions)</p>
        <p><b>Effect</b>: You instantly attract 3 Animal assistants and more will come based on the time spent in this game.</p>
        <p><b>Old Formula</b>: 3 + floor(((1 + 12 * x) ^ 0.5 - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
        <p><b>New Formula</b>: (3 + 1.75 * x ^ 0.5 ), where x is your Playtime (This Game) stat in hours.</p>
<hr>
<p><b>Faction Set</b></p>
<p><b>Faceless Set</b></p>
         <p><b>Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
         <p><b>Old Formula</b>: (1.5 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
         <p><b>New Formula</b>: (3 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
<hr>
<p><b>Event</b></p>
<p><b>The Summer Event</b></p>
<p><b>New Event Feat</b>: Check event page after event starts</p>
<br/>
<p><b>Goblin Invasion Support 1</b></p>
<p><b>Elite Goblins</b></p>
        <p><b>Effect</b>: All spells activity time counts more based on Evil spells cast in this Reincarnation.</p>
        <p><b>Old Formula</b>: (8 + 0.8 * x ^ 0.8), where x is Evil spells cast in this Reincarnation.</p>
        <p><b>New Formula</b>: (24 + 12 * ln(x)), where x is Evil spells cast in this Reincarnation.</p>
<br/>
<p><b>Goblin Invasion Support 3</b></p>
<p><b>The Slack King</b></p>
<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
<p><b>Formula</b>: (0.01 * x ^ 0.7)%, where x is total time spent in seconds.</p>
<p><b>New</b>: Offline production now suffers from Ascension Penalties.</p>
<hr>
<p><b>Artifacts</b></p>
<p><b>Beard Hair</b></p>
        <p><b>Old Chance</b>: (x / 100,000,000 (100M))%, where x is assistant count</p>
        <p><b>New Chance</b>: (x / 100,000,000 (100M))%, where x is assistant count (including temporary assistants)</p>
<br/>
<p><b>First Crystal Fragment</b></p>
        <p><b>Chance</b>: (x / 100,000,000,000 (100B))%, where x is assistant count.</p>
        <p><b>Chance</b>: (x / 100,000,000,000 (100B))%, where x is assistant count (including temporary assistants).</p>
<hr>
<p><b>Challenges</b></p>
<p><b>Mercenary</b></p>
<p><b>Order Warcry (Call To Arms Spell Upgrade)</b></p>
	    <p><b>Order</b>: Increases all spell durations.</p>
	    <p><b>Old Formula</b>: (y ^ 0.5)</p>
	    <p><b>New Formula</b>: (25 * ln(x))</p>
<br/>
<p><b>Druid</b></p>
<p>Druid Challenge 1 (Silent Assistance)</p>
	   <p><b>Effect</b>: Animal Companions (1,2) works faster</p>
	   <p><b>Old Formula</b>: floor((sqrt(1 + 120 * x) - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
	   <p><b>New Formula</b>: Now changes the 1.75 in DD1 to 6 or DD2 = (3 + 6 * x ^ 0.5 )</p>
<br/>
<p><b>Faceless</b></p>
<p><b>Faceless Challenge 2</b> (Mystic Maze)</p>
<p><b>Old Challenge</b>: Get 1000 Labyrinths (Sunken Cities) using Faceless (1,1) Territorial Expanse and not manually buying any at all.</p>
<p><b>New Challenge</b>: Get to 6500 Max Mana and 8000 Buildings within 10 minutes of a new game.</p>
<hr>
<p><b>More Research Hints</b></p>
<p><b>S215</b> How many of these are required for a seance?</p>
<p><b>S305</b> Face not required for a long time.</p>
<p><b>S1500</b> I require assistance.</p>
<p><b>S3200</b> First spell, many served.</p>
<p><b>C460</b> Clickety</p>
<p><b>C1500</b> Trading with the Dragons might prove risky, but rewarding.</p>
<p><b>D205</b> Shine bright, Holy Light!</p>
<p><b>D245</b> Surgical Spirits.</p>
<p><b>D525</b> Be patiently good.</p>
<p><b>D3350</b> Sound the alarms, production has gone offline!</p>
<p><b>E145</b> Collect those taxes!</p>
<p><b>E1425</b> Be neutral. Be different. For a short week.</p>
<p><b>E3300</b> 50k shades of uniqueness.</p>
<p><b>A1500</b> How long required to achieve a Grand Balance?</p>
<p><b>A3400</b> Get attracted to Faction Coins.</p>

 <div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.8 May 13, 2020</a></b></p>
		<div class="autohide">
        <p><b>V3.8 May 13, 2020</b></p>
        <p>Various texts fixed</p>
        <p>Fixed a production overflow issue in Ascension 3.</p>
        <p>Fixed MAX checks with spells cast in the stats panel.</p>
        <p>The Z key can now be used to shortcut BUY10k</p>
        <p>Shortcuts are now always visible on building buttons</p>
        <p>Spell Tiers time requirements reduced.</p>
        <p><b>Old Formula</b>: (86400 * (0.4 + 0.1 * T) * ((T ^ 2 + 1) / (0.1 * U + 1)) * (0.98 ^ (R - 35)))</p>
        <p><b>New Formula</b>: (57600 * (0.4 + 0.1 * T) * ((T ^ 2 + 1) / (0.1 * U + 1)) * (0.97 ^ (R - 35)))</p>
        <br/>
        <p>Ruby Power and Royal Exchange containers, interface improved.</p>
        <p>Ruby Power bonuses have been buffed to avoid decimals.</p>
        <p>Mana Regen: Old 0.5/0.5% /New 1/1%</p>
        <p>Max Mana: Old 25/2.5% /New 100/1%</p>
        <p>Gem Bonus: Old 0.5/0.5% /New 1/1%</p>
        <p>Exchange Bonus: Old 1.5/1.5% /New 2/2%</p>
        <br/>
        <p><b>Ruby Power Reset no longer costs Rubies but also forces an Abdication.</b></p>
        <p>Ruby Power's multiplicative max mana bonus is now 1%.</p>
        <p><b>PC Version</b>: The option to disable the Building Multibuy button has been removed. Now the Multibuy button is always visible. Hotkeys will override the button settings.</p>
        <br/>
        <p><b>Chocolate Egg</b></p>
        <p><b>Old Effect</b>: Increase base clicking reward by 100% of your Mana Regeneration and clicks once per second.</p>
        <p><b>New Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
        <p><b>Added Effect</b>: Also generates the same amount of clicks while offline.</p>
        <br/>
        <p><b>Fortune Teller Machine</b></p>
        <p><b>Old Upgrade Requirement</b>: R42+</p>
        <p><b>New Upgrade Requirement</b>: R40+</p>
        <p><b>Old Cost</b>: 1 No (1e32), A2+ Free</p>
        <p><b>New Cost</b>: 100 Qi (1e20), A2+ Free</p>
        <br/>
        <p><b>Wall Fragment</b></p>
        <p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
        <p><b>Old Formula</b>: (3 * (11 - T) ^ 2)%, where T is building tier.</p>
        <p><b>New Formula</b>: (3 * (11 - T) ^ 3)%, where T is building tier.</p>
        <br>
        <p><b>Event</b>: Anniversary Blood Wars</p>
        <p>New feat added</p>
        <br>
        <p><b>Mercenary Challenges</b>: Starting at Reincarnation 190, 5 new Mercenary Challenges will be unlocked. Complete them all to gain a new upgrade for the Call to Arms spell! <a href="/realm/Mercenary/"><b>See the Mercenary Challenge page for details</b></a></p>
        <br>
        <p><b>Research</b></p>
        <p>Research unlock hints are added to most researches</p>
        <p>A0 Researches and research point costs are reduced by x1000.</p>
        <br>
        <p><b>Spellcraft</b></p>
        <p><b>S1</b> (Enchanting)</p>
	    <p><b>Effect</b>: Increase the production of Enchanted Fields based on mana produced.</p>
	    <p><b>Old Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.</p>
	    <p><b>New Formula</b>: (0.75 * x ^ 0.75)%, where x is your Mana Produced (This Game) stat.</p>
        <br>
        <p><b>S150</b> (Pyromancy)</p>
	    <p><b>Effect</b>: Increase the production of the two highest building tiers based on your mana regeneration.</p>
	    <p><b>Old Formula</b>: round(4 * x ^ 1.3)%, where x is your Mana per Second stat.</p>
	    <p><b>New Formula</b>: (8 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
        <br>
        <p><b>S590</b> (Trickery)</p>
        <p><b>Effect</b>: Increase the production of Neutral buildings based on maximum Mana.</p>
	    <p><b>Old Formula</b>: (0.5 * x ^ 1.05)%, where x is Maximum Mana.</p>
	    <p><b>New Formula</b>: (0.5 * x ^ 0.95)%, where x is Maximum Mana.</p>
        <br>
        <p><b>S5125</b> (Spilling)</p>
	    <p><b>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced.</p>
	    <p><b>Old Formula</b>: (2 * ln(1 + x) ^ 2), where x is mana produced (This Game)</p>
	    <p><b>New Formula</b>: (1.75 * ln(1 + x) ^ 1.75), where x is mana produced (This Game)</p>
        <br>
        <p><b>S5625</b> (Leylines)</p>
	    <p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on assistants owned.</p>
	    <p><b>Old Formula</b>: (0.65 * x ^ 0.35), where x is assistants</p>
	    <p><b>New Formula</b>: (0.75 * x ^ 0.25), where x is assistants</p>
        <br>
        <p><b>S5875</b> (Mirrors)</p>
        <p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.</p>
	    <p><b>Old Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game.</p>
	    <p><b>New Formula</b>: (ln(x) ^ 1.75), where x is spell casts this game.</p>
        <br>
        <p><b>Craftsmanship</b></p>
        <p><b>C1</b> (Dummy Targets)</p>
        <p><b>Effect</b>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.</p>
	    <p><b>Old Formula</b>: (1.3 * ln(1 + x) ^ 3)%, where x is your Faction Coins Gained (This Game) stat.</p>
	    <p><b>New Formula</b>: (3 * ln(1 + x) ^ 3)%, where x is your Faction Coins Gained (This Game) stat.</p>
        <br>
	    <p><b>C405</b> (Metallurgy)</p>
	    <p><b>Effect</b>: Increase the production of Dwarven Forges based on the Dwarven Forges you own.</p>
	    <p><b>Old Formula</b>: (45 * x ^ 0.825)%, where x is the number of Dwarven Forges you own.</p>
	    <p><b>New Formula</b>: (40 * x ^ 0.8)%, where x is the number of Dwarven Forges you own.</p>
        <br>
	    <p><b>C590</b> (Alloys)</p>
	    <p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins.</p>
	    <p><b>Effect</b>: Autoclicks the treasure 10 times per second.</p>
	    <p><b>Effect</b>: Also generates the same amount clicks while offline.</p>
	    <p><b>New Formula</b>: (0.9 * x ^ 0.9)%, where x is chance to find Faction Coins.</p>
        <br>
        <p><b>Divine</b></p>
	    <p><b>D1</b> (Blessing)</p>
	    <p><b>Effect</b>: Increase the production of Heaven's Domains based on total time spent with at least one active spell.</p>
	    <p><b>Old Formula</b>: round(2.5 * x ^ 0.8)%, where x is total time spent with at least one active spell.</p>
	    <p><b>New Formula</b>: (8 * x ^ 0.8)%, where x is total time spent with at least one active spell.</p>
        <br>
	    <p><b>D25</b> (Cursing)</p>
	    <p><b>Old Requirement</b>: Play 8 hours Offline (as Undead) (This Game)</p>
	    <p><b>New Requirement</b>: Play 5 hours Offline (as Undead) (This Game)</p>
        <br>
	    <p><b>D55</b> (Transfixion)</p>
	    <p><b>Effect</b>: Increase clicking reward based on spell cast in this game.</p>
	    <p><b>Old Formula</b>: round(3.5 * x ^ 0.8)%, where x is your Spells Cast (This Game) stat.</p>
	    <p><b>New Formula</b>: (3 * x ^ 0.7)%, where x is your Spells Cast (This Game) stat.</p>
        <br>
        <p><b>D290 (Transubstantiation)</b></p>
	    <p><b>Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.</p>
	    <p><b>Old Multiplicative Formula</b>: (0.45 * x ^ 1.1), where x is the number of artifacts found.</p>
	    <p><b>New Multiplicative Formula</b>: (x ^ 0.95), where x is the number of artifacts found.</p>
        <br>
	    <p><b>D320</b> (Deliverance)</p>
	    <p><b>Effect</b>: Increase assistants production based on mana regeneration.</p>
	    <p><b>Old Formula</b>: round(20 * x ^ 0.85)%, where x is your Mana per Second stat.</p>
	    <p><b>New Formula</b>: (20 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
        <br>
	    <p><b>D435</b> (Devotion)</p>
	    <p><b>Effect</b>: Increase the production of Good buildings based on spells cast in this game.</p>
	    <p><b>Old Formula</b>: (2.5 * x ^ 0.85)%, where x is your Spells Cast (This Game) stat.</p>
	    <p><b>New Formula</b>: (1.5 * x ^ 0.85)%, where x is your Spells Cast (This Game) stat.</p>
        <br>
	    <p><b>D590</b> (Dispelling)</p>
	    <p><b>Effect</b>: Increase the production of Unique buildings based on mana regeneration.</p>
	    <p><b>Old Formula</b>: (2.5 x ^ 1.25)%, where x is your Mana per Second stat.</p>
	    <p><b>New Formula</b>: (5 x ^ 0.95)%, where x is your Mana per Second stat.</p>
        <br>
        <p><b>Economics</b></p>
	    <p><b>E1</b> (Coinage)</p>
	    <p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own.</p>
	    <p><b>Old Formula</b>: round(0.8 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
	    <p><b>New Formula</b>: (0.85 * x ^ 0.85)%, where x is your Buildings Owned (This Game) stat.</p>
        <br>
	    <p><b>E410</b> (Marketing)</p>
	    <p><b>Old Effect</b>: Increase production of all other buildings by 85% per Dwarven Forge you own.</p>
	    <p><b>New Effect</b>: Increase production of all other buildings by 75% per Dwarven Forge you own.</p>
        <br>
	    <p><b>E5125</b> (Decentralization)</p>
	    <p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.</p>
	    <p><b>Old Formula</b>: ((6 - 0.5 * T) ^ 2 * x ^ 0.85), where T is building tier and x is the number of (every) buildings you own.</p>
	    <p><b>New Formula</b>: ((6 - 0.5 * T) ^ 2 * x ^ 0.75), where T is building tier and x is the number of (every) buildings you own.</p>
        <br>
        <p><b>Alchemy</b></p>
	    <p><b>A1</b> (Plague)</p>
	    <p><b>Cost</b>: 750 Qag (7.50E125)
	    <p><b>Old Effect</b>: Increase the production of Undercities by 8% per assistant you own.</p>
	    <p><b>New Effect</b>: Increase the production of Undercities by 20% per assistant you own.</p>
        <br>
	    <p><b>A495</b> (Elixirs)</p>
	    <p><b>Effect</b>: Increase assistants production based on the amount of research made.</p>
	    <p><b>Old Formula</b>: (120 * x ^ 0.42)%, where x is the Amount of Researches made.</p>
	    <p><b>New Formula</b>: (40 * x ^ 0.4)%, where x is the Amount of Researches made.</p>
        <br>
	    <p><b>A5125</b> (Putrefaction)</p>
	    <p><b>Effect</b>: Increase the production of Non-Unique buildings based on the longest time spent without abdicating in this Reincarnation.</p>
	    <p><b>Old Formula</b>: (x ^ 0.75), where x is the longest time spent without abdicating (This R, can also be This Game)</p>
	    <p><b>New Formula</b>: (0.7 x ^ 0.7), where x is the longest time spent without abdicating (This R, can also be This Game)</p>
        <br>
        <p><b>Warfare</b></p>
	    <p><b>W1</b> (Assault)</p>
	    <p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
	    <p><b>Old Formula</b>: round(70 * x ^ 0.55)%, where x is Hellfire Blasts Cast This Game.</p>
	    <p><b>New Formula</b>: (70 * x ^ 0.7)%, where x is Hellfire Blasts Cast This Game.</p>
        <br>
	    <p><b>W50</b> (Exertion)</p>
	    <p><b>Old Requirement</b>: 1 day of Evil Play Time this R, Note: Play as any Evil faction, but you must be Demon to unlock this.</p>
	    <p><b>New Requirement</b>: 12 hours of Evil Play Time this R, Note: Play as any Evil faction, but you must be Demon to unlock this.</p>
        <br>
	    <p><b>W560</b> (Resilience)</p>
	    <p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game.</p>
	    <p><b>Old Formula</b>: (5 * x ^ 0.45)%, where x is your Treasure Clicks (This Game) stat.</p>
	    <p><b>New Formula</b>: (4 * x ^ 0.4)%, where x is your Treasure Clicks (This Game) stat.</p>
        <br>
        <p><b>Lineages and Perks</b></p>
        <p><b>Dwarven Perk 5</b></p>
        <p><b>Old Effect</b>: Buildings count 100% more.</p>
        <p><b>New Effect</b>: Buildings count 75% more.</p>
        <br>
        <p><b>Unique Buildings</b></p>
        <p><b>Dwarven Forge</b></p>
        <p><b>Old Formula</b>: 100 * x ^ 0.9%, where x is your Mana per Second stat.</p>
        <p><b>New Formula</b>: 80 * x ^ 0.8%, where x is your Mana per Second stat.</p>
        <br>
        <p><b>Spider Sanctuary</b></p>
        <p><b>Old Formula</b>: (30 * x ^ 0.8), where x is your Time Spent Offline (Total) stat.</p>
        <p><b>New Formula</b>: (32 * x ^ 0.8), where x is your Time Spent Offline (Total) stat.</p>
        <br>
        <p><b>Faction Upgrades</b></p>
        <p><b>Undead</b></p>
        <p><b>UD1</b> (The Walking Dead)</p>
        <p><b>Effect</b>: Increase the production of Necropolises by 7500%.</p>
        <p><b>Added Effect</b>: Also increase Faction Coin find chance based on assistants owned.</p>
        <p><b>Formula</b>: (2 * ln(x) ^ 2), where x is assistants owned.</p>
        <br>
        <p><b>UD6</b> (Plagued Buildings)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by an additional 75% per hour of playtime in this game.</p>
        <p><b>New Effect</b>: Increase the production of all buildings by an additional 0.75% per second of playtime in this game.</p>
        <br>
        <p><b>Driud</b></p>
        <p><b>DD3</b> (Natural Recycling)</p>
        <p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on the amount of the total buildings you own.</p>
        <p><b>Old Formula</b>: ((x / 11) ^ 0.35), where x is total buildings you own. (additively and multiplicatively)</p>
        <p><b>New Formula</b>: (0.4 x ^ 0.4), where x is total buildings you own. (additively and multiplicatively)</p>
        <br>
        <p><b>Mercenary</b></p>
        <p><b>Heresiarchs</b></p>
        <p><b>Effect</b>: Increase the production of Evil buildings based on your most built Evil building.</p>
        <p><b>Old Formula</b>: (1.85 * x ^ 0.85), where x is the number of your most-built evil building you own. (A-Nerfed)
        <p><b>New Formula</b>: (1.2 * x ^ 0.8), where x is the number of your most-built evil building you own. (A-Nerfed)</p>
        <br>
        <p><b>Faction Sets</b></p>
        <p><b>Dwarven</b></p>
        <p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
        <p><b>Old Formula</b>: (2 * x ^ 0.7), where x is Royal Exchange bonus.</p>
        <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is Royal Exchange bonus.</p>
        <br>
        <p><b>Faceless</b></p>
        <p><b>Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game.(additively)</p>
        <p><b>Old Formula</b>: (2 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
        <p><b>New Formula</b>: (1.5 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
        <br>
        </div>
    </div>
</div>
<?php include "../scripts/footer.html"; ?>
