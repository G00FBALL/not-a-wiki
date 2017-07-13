<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6>All Changes and Additions</h6>
<h6>May 30, 2017</h6>
<p><b>Note</b>: To see previous version of any changes go to that page and add <b>oldindex.php</b> to the address 

<p><b>Note</b>: Fairy and Goblin Treaties will be free at R0 and 0 gems.

<p><b>Artifacts</b>
<p><b>Added</b>: 2 new artifacts
<p><b>Obsidian Shard</b>
<p><b>Description</b>: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.
<p><b>Unlocks</b>: Secrets of the Warriors
<p><b>Requirements</b>: 8000 Excavations any Faction, R75+
<br/>
<br/>
<p><b>Know Your Enemy, Part 2</b> (Secret Upgrade)
<p><b>Description</b>: Much more knowledge than you need, stored in a handy book.
<p><b>Requirement</b>: R76, Mercenary, Upgrade from all 12 Factions
<p><b>Effect</b>: Awards an upgrade of the same name that Increase the production of all buildings based on time spent as Non-Mercenaries.
<p><b>Note</b>: Only available to Mercenaries
<p><b>Formula</b>: 0.065 * x^0.65 where x is amount of time spent as non-mercenary factions (in seconds).
<p><b>Secret Upgrade Cost</b>: 100 Noqag (1e152)

<p><b>------------------------------</b>
<p><b>Spells</b>
<p><b>New Spell Tier Unlock display</b> (For this site only)
<p><b>Fixed</b>: collaspes not closing previously opened ones (For this site only)
<p><b>Fixed</b>: Footer now shows (For this site only)
<p><b>Added</b>: All Spells get Tier 6
<p><b>Note</b>: Dragons Breath Tier 6 will cast a random spell
<p><b>Note</b>: Tax Collection with Good Mercenary can be casted up to 35 Tiers
<p><b>Changed</b>: Goblin's Greed FC Formula = floor(ln^3(1 + x) + 20, where x is your current gems.</p>
<p><b>------------------------------</b>

<p><b>Trophies</b>
<p><b>Added</b>: 3 Secret Trophies
<p><b>Grandmaster Researcher</b>: (Also a Secret Upgrade)
<p><b>Requirements</b>: Research 18500 times across all fields.
<p><b>Cost</b>: 10 SpQig (1e175)
<p><b>Effect</b>: Increas the overall production of Mercenaries by 100%.
<br/>
<br/>
<p><b>Exchange High Lord</b>: (Also a Secret Upgrade)
<p><b>Requirements</b>: 5000 Royal Exchanges
<p><b>Cost</b>: 10 DQig (1e160) 
<p><b>Effect</b>: Increase royal exchange bonus by 50%.
<br/>
<br/>
<p><b>Genealogist</b> (Also a Secret Upgrade)
<p><b>Requirements</b>: Have a total of 300 Lineage levels across all Lineage.
<p><b>Cost</b>: Free
<p><b>Effect</b>: Increase the production of all buildings based on the total amount of lineage levels you have.
<p><b>Formula</b>: 2.5 * x^1.25
<br/>
<br/>
<p><b>Added</b>: 2 Mana Trophies
<p><b>Mana Sea</b></p>
<p><b>Requirement</b>: 10 T (1E13) mana produced</p>
<br/>
<p><b>Mana Ocean</b></p>
<p><b>Requirement</b>: 20 T (2E14) mana produced</p>
<br/>
<br/>

<p><b>Changed</b>: Van!shment = 1.25 * log10(1+x) ^ 1.25 where x is the pre-A offline multiplier.
<p><b>Changed</b>: Helden Sterben Nicht = Increase mana regeneration and maximum mana by 15%.
<p><b>Changed</b>: Advisor Insight = now cost Pre A
<p><b>Changed</b>: Mana Matrix = Increase maximum mana by 10%.
<p><b>Changed</b>: Spell Cataclysm = Increases maximum mana by 75%
<p><b>Changed</b>: Prismatic Mana = 35% Mana Regeneration (multiplicative).
<p><b>Changed</b>: Premeditation = Increase maximum mana by 250
<p><b>Changed</b>: Mana Waste = 126 * log(1 + x) ^ 2.6




<p><b>------------------------------</b>
<p><b>Buildings</b>
<p><b>Added</b>: the 3 Mercenary Unique Buildings
<p><b>Changed</b>: Drow Unquie Building Formula = 30 * x ^ 0.8
<p><b>Added</b>: 10K of each Building Upgrades
<p><b>Changed</b>: #21 and #22 Building Upgrades
changed S1450 Formula: 50* x^1.5, where x is number of active spells, counting tiers.
changed S1500 Formula: 8.5* x ^0.85, where x is assistants.


<p><b>------------------------------</b>
<p><b>Research</b></p>
<p><b>Added</b>: Mercenary Research
<p><b>Changed</b>: S30 = Maximum Mana:floor(45x), Mana Regeneration:\frac {floor(75x^{0.4})} {10},
<p><b>Changed</b>: S180 = floor(1.6 * x ^ 0.6) / 10
<p><b>Changed</b>: s305 = 2.5 *log(1 +x)^2.5
<p><b>Changed</b>: S400 = 35 * x ^ 0.35 where x is spells cast
<p><b>Changed</b>: S500 = 100 * x ^ 1.1 where x is artifacts you own
<p><b>Changed</b>: S1450 = 50* x^1.5, where x is number of active spells, counting tiers.
<p><b>Changed</b>: S1500 = 8.5* x ^0.85, where x is assistants.
<p><b>Changed</b>: C105 = 1.5 * x ^ 1.05
<p><b>Changed</b>: C250 = 2.5 * x ^ 0.75
<p><b>Added</b>: C250 = Increase the chance to find Faction Coins by a multiplicative 50%
<p><b>Changed</b>: C400 = 3 * log(1+x) ^ 3
<p><b>Added</b>: C400 = Also increase the chance to find Faction Coins by a multiplicative 150%
<p><b>Changed</b>: C3100 = 7.5 * log (1+x) ^ 2
<p><b>Changed</b>: D25 = 2.75 * log(1 + x)^2.75
<p><b>Changed</b>: D135 = floor(10 * log(1+x) / 8
<p><b>Changed</b>: D150 = 0.05 * x ^ 1.25
<p><b>Changed</b>: D290 = floor(ln^1.3(1.5 * x))
<p><b>Changed</b>: D290 = Each artifact you discover increases mana regeneration by 1.5 m/s.
<p><b>Changed</b>: E250 = floor(10 * x ^ 0.55) / 10
<p><b>Changed</b>: E275 = floor(0.9 * x ^ 0.95)
<p><B>Changed</B>: E590 = floor(x/300)^1.05, where x is the number of Non Unique Buildings you own.
<p><b>Changed</b>: A30 Duration increase: floor(x /800)^0.8) seconds
<p><b>Changed</b>: A55 = 5 * x ^ 0.85 where x is your Spells Cast (Total) stat
<p><b>Changed</b>: A120 floor(x /15^0.85), where x is your maximum mana.
<p><b>Changed</b>: A305 = floor(3.5 * logE(1+x) ^ 3.5)%
<p><b>Added</b>: A305 = Also increase Faction Coins find chance ba a multiplicative 100%. 
<p><b>Changed</b>: A325 = floor(0.02 * X) / 10
<p><b>Changed</b>: A480 = 120 * x ^ 0.85 where x is your Royal Exchanges Made stat.
<p><b>Changed</b>: A1500 = 7.5* x^0.75, where x is Unique Buildings owned
<p><b>Changed</b>: W175 = Formula: round(32 * x^0.75)%, where x is the amount of assistants you own.
<p><b>Changed</b>: W205 = floor(0.25x^0.9)
<p><b>Changed</b>: W275 = floor(2.5* x ^1.05), where x is assistants
<p><b>Changed</b>: W405 = 3.25 * log(1+x) ^ 3.25
<p><b>Changed</b>: W590 = (This R)
<p><b>Changed</b>: W1375 = 1400 * x ^ 0.45
<p><b>Added</b>: W1375 = Also increases Faction Coin find chance by a multiplicative 250%
<p><b>Changed</b>: W1400 = 25 * log(1+x) ^ 2.5, where x is clicks (this game)
<p><b>------------------------------</b>
<p><b><a target="_blank" href="http://musicfamily.org/realm/MercResearch">Merc Research</a></b> <---Click Me!!!</p>
<p><b>Added</b>: 12 new Research
<p><b>------------------------------</b>
<p><b><a target="_blank" href="http://musicfamily.org/realm/Events/">Events</a></b> <---Click Me!!!</p>
<p><b>Added</b>:  New Event (Blood War)
<p><b>------------------------------</b>
<p><b>Lineages</b>
<p><b>Added</b>: Fairy Bloodline <b>Formula</b>: 250 * ((a^0.9)^5)
<p><b>Changed</b>: Fairy Base = Makes Farms, Inns and Blacksmiths count 15% more per Lineage level.
<p><b>Changed</b>: Fairy Perk 3 = Assistants count 1% more per 2000 Unique Buildings.
<p><b>Changed</b>: Angel Perk 3 = (Increase God's Hand bonus by an additional 500000.0% for every 1000 Unique Buildings.(rounded down to nearest 1000)
<p><b>Added</b>: Elven base = Also increase clicks count by a multiplicative 5000% per level.
<p><b>Changed</b>: Elven Perk 1 = Increase autoclicks provided by Elven Bloodlines to 9 per second and their multiplier to x10000.
<p><b>Changed</b>: Elven Perk 3 = Increase base clicking reward by 5% of Unique Building production for every 777 of them. (to match game text)
<p><b>Changed</b>: Undead perk 1 = Undead Bloodline multiplies your assistants by 8% of the amount instead of adding them.
<p><b>Added</b>: Undead perk 1 = Formula: 0.95 * x ^ 0.95, where x is assistants you own
<p><b>Changed</b>: Dwarven perk 1 = Dwarven Bloodline increases faction coin find chance based on total time spent as Good. (1 day of Good = 19,520%).
<p><b>Formula</b>: 50 * x ^ 0.75 where x is seconds of good alignment (this R)
<p><b>Changed</b>: Dwarven perk 3 = Increase Faction Coin find chance with excavations by 250% for every 500 Unique Building.
<p><b>Changed</b>: Drow Base = Multiplicative 75% more offline production per level.
<p><b>Changed</b>: Drow perk 1 = Drow Bloodline also counts online playtime in this game and reduces ascension penalty from ^0.1 to ^0.9.
<p><b>Added</b>: Formula: (0.15 * (t1 + t2))^0.9, where t1 is offline time this R, t2 is online time this game.
<p><b>Changed</b>: Drow perk 3 = Increase offline production by 10.0% for every 500 Unique Building.
<p><b>Changed</b>: Goblin Base = Multiplicative 2.5% gem bonus per level.
<p><b>Changed</b>: Demon Perk 1 = 25 max mana per 6 trophies unlocked.
<p><b>Changed</b>: Demon base = Trophies count 30% more per level.
<p><b>Added</b>: Druid Perk 1 = Formula: 0.015 * x ^ 1.025 where x is seconds (this game)
<p><b>Changed</b>: Druid Perk 3 = Formula: 0.5% per 750 Unique Buildings.
<p><b>Changed</b>: Dgraon base = Unique Buildings count as 12% more per level.
<p><b>Changed</b>: Dgraon Perk 1 = Dragon Bloodline increases the production of Unique Buildings by 1.75% per building of the same type.
<p><b>Changed</b>: Dgraon Perk 3 = Effect: Maximum mana increased by 1.25 for every 2 Unique Buildings.
<p><b>Changed</b>: Dwarf base = Excavations and Artifacts count 10% more per level.
<p><b>Changed</b>: Faceless base = Increase Max Mana by 1.5% per level.
<p><b>------------------------------</b>
<p><b>Bloodline</b></p>
<p><b>Changed</b>: Faceless floor(30 * (log10(1 + x) ^ 3.5), where x is your Mana Produced (This Game) stat.
<p><b>Changed</b>: Dragon = 4 * (x ^ 0.4), where x is Faction Coin find chance.
<p><b>Changed</b>: Druid = 0.03 * x ^ 0.9
<p><b>------------------------------</b>
<p><b>Faction Upgrades</b>
<p><b>Changed</b>: Advisor Insight = now cost Pre A (Post A Free)
<p><b>Druid</b></p>
<p><b>Changed</b>: Shapeshifting
<p><b>Effect</b>: Increase mana regeneration based on the amount of assistants you own.</p>
<p><b>Formula</b>: 0.28 * x ^0.9, where x is the amount of assistants you own.
<p><b>Changed</b>: Earthly Bond = Increase maximum mana by 2.0 for each Stone Pillars you own.
<p><b>Changed</b>: Druid Heritage = Increase maximum Mana by 1 every 15 buildings you own.
<br/>
<br/>
<p><b>Faceless</b></p>
<p><b>Changed</b>: Magical Treasure
<p><b>Effect</b>: Increase mana regeneration based on the amount of assistants you own.</p>
<p><b>Formula</b>: 0.35 * x ^ 0.9, where x is the amount of assistants you own.
<br/>
<br/>
<p><b>Fairy</b></p>
<p><b>Changed</b>: Fairy Workers = Increase the production of Farms, Inns and Blacksmiths by 15000%.
<p><b>Changed</b>: Spellsmith = x ^ 0.25, where x is the number of Blacksmiths you own.
<p><b>Changed</b>: Kind Hearts = Increases maximum mana by 1 for every 8 good buildings you own.
<br/>
<br/>
<p><b>Undead</b></p>
<p><b>Changed</b>: The Walking Dead = Increase the production of Necropolises by 5000%.
<p><b>Changed</b>: Deadened Muscles = Increase the production of all other buildings by 1.5% per Necropolis you own.
<p><b>Changed</b>: Corpse Supply = floor(sqrt(3*x+1)-1)
<p><b>Changed</b>: Plagued Buildings = Increase the production of all buildings by an additional 35% per hour of playtime in this game.
<p><b>Changed</b>: Dead Fields = Each assistants increases the production of all buildings by 0.02% per Necropolises you own.
<p><b>Changed</b>: Tireless Workers = Increase the production of assistants by 1000%.
<p><b>Changed</b>: Undead Resilience = Increases offline production by 125 times your mana regeneration rate.
<br/>
<br/>
<p><b><a target="_blank" href="http://musicfamily.org/realm/DrowFaction/newindex.php">Drow Faction</a></b></p>
<p><b>Changed</b>: Mana Addicts = 0.25 * x ^ 0.55, where x is your Play Time (This Game) stat in seconds.
<br/>
<br/>
<p><b>Mercenary Faction</b></p>
<p><b>Changed</b>: Heresiarchs = floor(10*log(1+x^1.5))/10, where x is your Faction Coins Gained (This Game) stat.
<p><b>------------------------------</b>
<p><b>Challenges</b></p>
<p><b>Changed</b>: Faceless C2 = You gain +10 max mana for every 20 labyrinths built
<p><b>Changed</b>: Angel C2 = Increases maximum mana by 25%.
<p><b>Changed</b>: Fairy C3 = (0.1x)^2.25, where x is your Buildings Owned (This Game) stat.
<p><b>Changed</b>: Elf C3 = Increase your mana regeneration by +0.85 m/s for every 100 Royal Exchanges purchased.
<p><b>Changed</b>: Demon C2 = Increase max mana by 6.66% of your number of Halls of Legends.
<p><b>Changed</b>: Titan C3 = round(2.5 * log10(1+x))%, where x is your Faction Coins Gained (This Game) stat.
<p><b>Changed</b>: Druid C3 = You gain 1.25 additional max mana for every 4 Labyrinths owned.
<p><b>Changed</b>: Druid C4 = All spell durations increased by 1% for every 1,500 max mana.
<p><b>Changed</b>: Dragon C4 x ^ 4.5 (%), where x is number of artifacts.
<p><b>------------------------------</b>






<?php include "../scripts/footer.html"; ?>