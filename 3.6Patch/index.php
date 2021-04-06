<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>3.6 Patches/Updates</h6>
        <br/>
        <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.6.3 October 24th, 2019</a></b></p>
                <div class="autohide">
                    <p><b>V3.6.3 October 24th, 2019</b></p>
                    <p><b>Event Update</b>: Halloween Event</p>
                    <p><b>Added</b>: Added a new Halloween feat and upgrade.</p>
                    <p><b>Fixed</b>: Spell switching in Halloween.</p>
                    <p>Check <a target="_blank" href="http://musicfamily.org/realm/Events/"><b>Event</b></a> page once event starts.</p>
                    <p><b>Note</b>: Event stacks increased to 720 (12 Hours). Feats that required full stacks of resources still require 480 resources.</p>
                    <br/>
                    <p><b>Added</b>: An option to manually set game resolution for the mobile.</p>
                    <br/>
                    <p><b>Changed</b>: Tax Collection no longer counts against spells in autocast for offline activity time generation.</p>
                    <br/>
                    <p><b>Upgrades Changed</b></p>
                    <p><b>Mana Wave, River, Lake, Sea, Ocean</b></p>
                    <p><b>Old Effect</b>: Increase Mana regeneration by +5.00.</p>
                    <p><b>New Effect</b>: Increase Mana regeneration by +50.00.</p>
                    <br/>
                    <p><b>Mana Falls, Spring</b></p>
                    <p><b>Old Effect</b>: Increase Mana regeneration by +10.00.</p>
                    <p><b>New Effect</b>: Increase Mana regeneration by +100.00.</p>
                    <br/>
                    <p><b>Wall Fragment</b></p>
                    <p><b>Effect</b>: Increases the production of all buildings based on their tier.</p>
                    <p><b>Old Formula</b>: (250 * (11 - T) ^ 2), where x is the building tier, starting at 1 for Halls of Legends and increasing to 11 for Farms.</p>
                    <p><b>New Formula</b>: (300 * (11 - T) ^ 2), where x is the building tier, starting at 1 for Halls of Legends and increasing to 11 for Farms.</p>
                    <br/>
                    <p><b>Spells</b></p>
                    <p><b>Note</b>: Spell tier unlock formula reworked: Higher tiers take less to unlock, Time reduction now based on tiers unlocked so far instead of Arcane Brilliance Trophies.</p>
                    <p><b>New Spell Tier time formula</b>: Spell Activity Required This R (in seconds) for Tier T : (86400 * (0.4 + 0.1 * T) * ((T ^ 2 + 1) / (0.1 * U + 1)) * (0.98 ^ (R - 35))), Where T = tier, U = number of unlocked tiers, R = reincarnation.</p>
                    <br/>
                    <p><b>Arcane Brilliance</b></p>
                    <p><b>Old Effect</b>: Reduces tier unlock time.</p>
                    <p><b>New Effect</b>: No longer has an effect.</p>
                    <br/>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.6.2 September 17th, 2019</a></b></p>
                <div class="autohide">
                    <p><b>New Event</b>: Idilium Event</p>
                    <p>Check <a target="_blank" href="http://musicfamily.org/realm/Events/"><b>Event</b></a> page once event starts</p>
                    <br/>
                    <p><b>Hotkey/Shortcut</b>: P Key will activate 11th spell.</p>
                    <br/>
                    <p><b>Spell Tier</b>: Spell tier upgrades now automatically set the autocast tier to maximum when purchased. You can still set their properties with the Tiered Autocast function.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ReverseAutocasting.png" align="middle"> Reverse Autocasting</b></p>
                    <p><b>Effect</b>: Allows you to manually reset spells.</p>
                    <p><b>Changed</b>: Now has a 2 second cooldown per spell.</p>
                    <br/>
                    <p><b>Djinn Challenge 2</b></p>
                    <p><b>Old Challenge</b>: Have at least 666 B (6.66e11) Mana Produced within 6 hours of a new game.</p>
                    <p><b>New Challenge</b>: Have at least 66 B (6.6e10) Mana Produced within 6 hours of a new game.</p>
                    <p><b>Added</b>: Now gives additional evil cast for each tier of spell autocast.</p>
                    <p><b>Note</b>: This is equal to manually casting each tier.</p>
                    <br/>
                    <p><b>Djinn Challenge 3</b></p>
                    <p><b>Old Challenge</b>: Have at least 8e12 assistants within 5 minutes of a new game.</p>
                    <p><b>New Challenge</b>: Have at least 1e11 assistants within 5 minutes of a new game.</p>
                    <p><b>Note</b>: No longer counts temporary assistants.</p>
                    <br/>
                    <p><b>Archon Challenge 2</b></p>
                    <p><b>Old Challenge</b>: Have an Offline Bonus of at least 20 Dc (2e34)% while also having at least 5e10 assistants.</p>
                    <p><b>New Challenge</b>: Have an Offline Bonus of at least 300 No (3e32)% while also having at least 4.5 B (4.5e9) assistants.</p>
                    <br/>
                    <p><b>Archon Challenge 5</b></p>
                    <p><b>Old Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 400% bonus.</p>
                    <p><b>New Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 390% bonus.</p>
                    <br/>
                    <p><b>Goblin Union</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
                    <p><b>Old Formula</b>: (2 * log10(1 + x) ^ 2), where x is spells cast in this game.</p>
                    <p><b>New Formula</b>: (2.25 * log10(1 + x) ^ 2.25), where x is spells cast in this game.</p>
                    <br/>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.6.1 August 21st, 2019</a></b></p>
                <div class="autohide">
                    <p><b>V3.6.1 August 21st, 2019</b></p>
                    <p><b>New Feat with new upgrade</b>: ?</p>
                    <p><b>Event Upgrades</b></p>
                    <p><b>The Undecided Armada</b></p>
                    <p><b>Effect</b>: Gain assistants based on the amount of buildings you own.</p>
                    <p><b>Old Formula</b>: (0.45 * x ^ 0.45), where x is amount of buildings you own. (multiplicative)</p>
                    <p><b>New Formula</b>: (0.65 * x ^ 0.35), where x is amount of buildings you own. (multiplicative)</p>
                    <br/>
                    <p><b>R120 Power</b></p>
                    <p><b>Old Effect</b>: Increases the production of all buildings based on Reincarnations made when not affiliated with Mercenaries or Elite factions.</p>
                    <p><b>Old Formula</b>: (100 * R)</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on Reincarnations made.</p>
                    <p><b>New Formula</b>: (125 * R)</p>
                    <br/>
                    <p><b>Archon Mask</b></p>
                    <p><b>Old Effect</b>: Increase Faction Coin find chance by 200%.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance by 500%.</p>
                    <br/>
                    <p><b>Mercenary Building Contract</b></p>
                    <p><b>Old Requirement</b>: R160+</p>
                    <p><b>New Requirement</b>: R165+</p>
                    <hr>
                    <p><b>Spells</b></p>
                    <br/>
                    <p><b>Catalyst</b>: now forecasts its next 3 spells.</p>
                    <br/>
                    <p><b>Reap Interests</b></p>
                    <p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.</p>
                    <p><b>Old Formula</b>: (120000 * log10(0.125 * x))</p>
                    <p><b>New Formula</b>: (120000 * log10(8 + 0.125 * x))</p>
                    <br/>
                    <p><b>Infinite Spiral</b></p>
                    <p><b>Effect</b>: Increase assistants based on Maximum Mana.</p>
                    <p><b>Old Formula</b>: (12.5 * (ln(1 + x) ^ 1.25)</p>
                    <p><b>New Formula</b>: (10 * (ln(1 + x) ^ 1.25)</p>
                    <p><b>Effect</b>: Increase max mana based on FC chance.</p>
                    <p><b>Old Formula</b>: (1.65 * log10(1 + x) ^ 1.65)</p>
                    <p><b>New Formula</b>: (1.5 * log10(1 + x) ^ 1.5)</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (10 + 0.025 * (x * (y + z)) ^ 0.75), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Formula</b>: (10 + 0.05 * (x * (y + z)) ^ 0.75), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b>Chrono Loading</b></p>
                    <p><b>Old Requirement</b>: R125+, Cast Precognition with at least 1 Qi (1e18) mana regeneration.</p>
                    <p><b>New Requirement</b>: R125+, Cast Precognition with at least 100 Qa (1e17) mana regeneration.</p>
                    <p><b>Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
                    <p><b>Old Formula</b>: (7 * x ^ 0.7), where x is Precognition duration.(seconds)</p>
                    <p><b>New Formula</b>: (25 * x ^ 0.55), where x is Precognition duration.(seconds)</p>
                    <br/>
                    <hr>
                    <p><b>Faction Union</b></p>
                    <p><b>Goblin Union</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
                    <p><b>Old Formula</b>: (0.45 * x ^ 0.45), where x is spells cast in this game.</p>
                    <p><b>New Effect</b>: Multiplicatively increase Faction Coins find chance based on spells cast in this game.</p>
                    <p><b>New Formula</b>: (2 * log10(x) ^ 2), where x is spells cast in this game.</p>
                    <br/>
                    <p><b>Drow Chaos Union</b></p>
                    <p><b>Old Effect</b>: Increase the production of a specific building tier depending on building amount, and increase its production based on time spent offline this reincarnation.</p>
                    <p><b>Old Formula</b>: (4 * x ^ 0.6)</p>
                    <p><b>New Effect</b>: Increase the production of a specific building tier, depending on the amount of buildings you own, based on time spent offline in this Reincarnation.</p>
                    <p><b>New Formula</b>: (8 * x ^ 0.8)</p>
                    <p><b>Note</b>: Targeting is not affected by building modifiers.</p>
                    <br/>
                    <p><b>Dragon Chaos Union</b></p>
                    <p><b>Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend ln(FC chance) (even for Unique, odd for Non-Unique).</p>
                    <p><b>Old Formula</b>: Non-Unique (25 * 0.58 * x ^ 0.58), where x is assistant count.</p>
                    <p><b>New Formula</b>: Non-Unique (25 * 0.6 * x ^ 0.6), where x is assistant count.</p>
                    <p><b>Old Formula</b>: Unique (0.58 * x ^ 0.58), where x is assistant count.</p>
                    <p><b>New Formula</b>: Unique (0.6 * x ^ 0.6), where x is assistant count.</p>
                    <hr>
                    <p><b>Bloodlines</b></p>
                    <p><b>Elven Bloodline</b></p>
                    <p><b>Effect</b>: Increase the chance to find Faction Coins based on Faction Coins found in this game and autoclick 3 times per second. Autoclicks made this way benefit from a 100 times higher clicking reward and Faction Coin find chance.</p>
                    <p><b>Old Formula</b>: floor(15 * ln(1 + x) ^ 1.75), where x is number of Faction Coins found in this game.</p>
                    <p><b>New Formula</b>: (10 * ln(1 + x) ^ 1.75), where x is number of Faction Coins found in this game.</p>
                    <p><b>Effect</b>: Multiplies Faction Coin find chance based on clicks made.</p>
                    <p><b>Old Formula</b>: floor(log10(1 + x) * 10)</p>
                    <p><b>New Formula</b>: (10 * floor(log10(1 + x))</p>
                    <br/>
                    <p><b>Drow Bloodline</b></p>
                    <p><b>Effect</b>: Multiplicatively increase the chance to find Faction Coins based on time spent in this game.</p>
                    <p><b>Old Formula</b>: (1.6 * x ^ 0.6)</p>
                    <p><b>New Formula</b>: (1.7 * x ^ 0.7)</p>
                    <hr>
                    <p><b>Lineage</b></p>
                    <p><b>Lineage Cost Modifier</b>: +1 every 30 levels -> +0.5 every 30 levels</p>
                    <br/>
                    <p><b>Demon Base Lineage</b>: Now A-nerfed, but ascension penalties are removed over time.</p>
                    <p><b>Formula</b>: (floor(ln(1 + (3 * x) / 86400 ) / ln(3))) , x is seconds (This Reincarnation)</p>
                    <br/>
                    <p><b>Titan Base Lineage</b></p>
                    <p><b>Tooltip Fix</b>: Royal Exchange counts more added to tooltip (Increase Royal Exchange bonus and Royal Exchange count by 200% for every level.)</p>
                    <hr>
                    <p><b>Sets</b></p>
                    <p><b>Goblin Set</b></p>
                    <p><b>Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on time spent in this game.</p>
                    <p><b>Old Formula</b>: Multiplicative FC: (0.5 * x ^ 0.5)</p>
                    <p><b>New Formula</b>: Multiplicative FC: (0.6 * x ^ 0.6)</p>
                    <br/>
                    <p><b>Dragon Set</b></p>
                    <p><b>Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.75 * ln(1 + x) ^ 2.25)</p>
                    <p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 1.5)</p>
                    <br/>
                    <p><b>Mercenary Set</b></p>
                    <p><b>Old Effect</b>: Allows you to pick the same lineage as your faction.</p>
                    <p><b>Added Effect</b>: Also allows you to pick Prestige/Elite lineage of same alignment.</p>
                    <hr>
                    <p><b>Challenges</b></p>
                    <p><b>Druid Challenge 4</b></p>
                    <p><b>Old Effect</b>: Increase Non-Unique buildings production based on the duration of your longest spell. Does not suffer from Ascension penalties.</p>
                    <p><b>New Effect</b>: Increase Non-Unique buildings production based on the duration of your longest spell. More Ascension penalties are removed as time passes in this Reincarnation.</p>
                    <p><b>Ascension penalties formula</b>: (floor(ln(1 + (3 * x) / 86400 ) / ln(3))), where x is seconds (This Reincarnation)</p>
                    <br/>
                    <p><b>Archon Challenge 1</b></p>
                    <p><b>Old Effect</b>: Precognition also increases God's Hand bonus.</p>
                    <p><b>New Effect</b>: Precognition also increases Seraphim Wings and God’s Hand bonus, by double its value</p>
                    <br/>
                    <p><b>Archon Challenge 2</b></p>
                    <p><b>Effect</b>: Multiplicatively increase assistants based on Offline Bonus.</p>
                    <p><b>Old Formula</b>: (1.5 * log10(1 + x) ^ 1.5)</p>
                    <p><b>New Formula</b>: (1.75 * log10(1 + x) ^ 1.75)</p>
                    <br/>
                    <p><b>Archon Challenge 3</b></p>
                    <p><b>Effect</b>: Multiplicatively increase time spent in this game based on Royal Exchanges bought.</p>
                    <p><b>Old Formula</b>: (5 * x ^ 0.25), where x is Royal Exchanges bought.</p>
                    <p><b>New Formula</b>: (2.5 * ln(1 + x) ^ 1.25), where x is Royal Exchanges bought.</p>
                    <br/>
                    <p><b>Archon Challenge 4</b></p>
                    <p><b>Old Challenge</b>: Have a Temporal Flux bonus of at least 6543210%.</p>
                    <p><b>New Challenge</b>: Have a Temporal Flux bonus of at least 54,321%.</p>
                    <p><b>Old Effect</b>: 25% of Chaos and Balance time spent in this Reincarnation is added to time spent in this game.</p>
                    <p><b>Old Effect</b>: 20% of Chaos and Balance time spent in this Reincarnation is added to time spent in this game.</p>
                    <p><b>Added Effect</b>: Increase Unique Building production based on time spent in this game</p>
                    <p><b>Formula</b>: (3.5 * ln(1 + x / ln(10)) ^ 3.5), where x is time spent in this game</p>
                    <br/>
                    <p><b>Djinn Challenge 1</b></p>
                    <p><b>Effect</b>: Maelstrom increase assistants based on the lowest tier targeted. Provides a better bonus for lower tier buildings.</p>
                    <p><b>Old Formula</b>: Alternative Formula Assistant Multiplier: ((36 - x - y - z)*100)</p>
                    <p><b>New Formula</b>: Multiplicative to base assistants: sum of ((12 - T) * 100), T is lowest tier of maelstrom’s targets.</p>
                    <br/>
                    <p><b>Djinn Challenge 2</b></p>
                    <p><b>Old Challenge</b>: Have at least 6 T (6e12) Mana Produced within 6 hours of a new game.</p>
                    <p><b>New Challenge</b>: Have at least 666 B (6.66e11) Mana Produced within 6 hours of a new game.</p>
                    <p><b>Effect</b>: Limited Wish casts count more based on Hellfire Blast casts in this game.</p>
                    <p><b>Old Formula</b>: Multiplicative: (0.6 * x ^ 0.4), where x is Hellfire Blast casts (this game).</p>
                    <p><b>New Formula</b>: Multiplicative: (0.8 * x ^ 0.8), where x is Hellfire Blast casts (this game).</p>
                    <br/>
                    <p><b>Djinn Challenge 3</b></p>
                    <p><b>Added Effect</b>: Grants the ability to cast Catalyst.</p>
                    <p><b>Added Effect</b>: Catalyst now also adds 100 casts per spell.</p>
                    <br/>
                    <p><b>Djinn Challenge 4</b></p>
                    <p><b>Effect</b>: Multiplicatively increase Assistants, production bonus from Gems and Maximum Mana by 8%, 88% and 888%, targets chosen randomly and refreshing every 88 seconds.</p>
                    <p><b>Old Challenge</b>: Have a spell duration of at least 2 years.</p>
                    <p><b>New Challenge</b>: Have a spell duration of at least 1 year.</p>
                    <br/>
                    <p><b>Makers Challenge 2</b></p>
                    <p><b>Effect</b>: While Mana Regeneration is higher than Maximum Mana, each time you cast a spell, you also cast free Tax Collections based on the difference between them.</p>
                    <p><b>Old Formula</b>: (((log10(1 + x)) ^ 2 - (log10(1 + y)) ^ 2) ^ 1.25), where x is mana regen, y is max mana.</p>
                    <p><b>New Formula</b>: (((log10(1 + x)) ^ 2.5 - (log10(1 + y)) ^ 2.5) ^ 1.25), where x is mana regen, y is max mana.</p>
                    <br/>
                    <p><b>Makers Challenge 3</b></p>
                    <p><b>Old Effect</b>: Infinite Spiral's assistant effect is also increased by Mana Regeneration.</p>
                    <p><b>New Effect</b>: Assistants and Maximum Mana Infinite Spiral effects are also increased by Mana Regeneration.</p>
                    <br/>
                    <p><b>Makers Challenge 4</b></p>
                    <p><b>Old Effect</b>: Pick an additional Set.</p>
                    <p><b>New Effect</b>: Pick an additional Set. Increase Faction Coins found matching that Set by 1000%</p>
                    <br/>
                    <p><b>Makers Challenge 5</b></p>
                    <p><b>Old Challenge</b>: Have at least 10 T (1e13) assistants, 10e9 Maximum Mana and 2e22 Faction Coin find chance within 8 minutes of a new game.</p>
                    <p><b>New Challenge</b>: Have at least 1 T (1e12) assistants, 1 B (1e9) Maximum Mana and 20 Sx (2e22) Faction Coin find chance within 8 minutes of a new game.</p>
                    <hr>
                    <p><b>Faction Upgrades</b></p>
                    <p><b>Angel 10</b>: (Heaven’s Brilliance)</p>
                    <p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. Gem Grinder and all Dragon's Breath effects are increased based on the amount of Holy Sites you own.</p>
                    <p><b>Old Formula</b>: (0.01 * ln(1 + x)), where x is amount of Holy Sites owned.</p>
                    <p><b>New Formula</b>: (0.02 * ln(1 + x)), where x is amount of Holy Sites owned.</p>
                    <br/>
                    <p><b>Angel 11</b>: (Angelic Fortitude)</p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells' activity time (this R).</p>
                    <p><b>Old Formula</b>: (0.3 * x ^ 0.7), where x is seconds in current spells.</p>
                    <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is seconds in current spells.</p>
                    <br/>
                    <p><b>Goblin 12</b>: (Lousy Architecture)</p>
                    <p><b>Effect</b>: Reduce Non-Unique buildings cost multiplier.</p>
                    <p><b>Formula</b>: (-0.02)</p>
                    <p><b>Added Effect</b>: Increase Non-Unique buildings production based on their quantity.</p>
                    <p><b>Added Formula</b>: (x ^ 0.65), where x is amount of Non-Unique buildings.</p>
                    <br/>
                    <p><b>Undead 11</b>: (Zombie Apocalypse)</p>
                    <p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
                    <p><b>Old Formula</b>: (3.5 * x ^ 0.7), where x is offline time this R.</p>
                    <p><b>New Formula</b>: (15 * x ^ 0.85), where x is offline time this R.</p>
                    <br/>
                    <p><b>Faceless 12</b>: (Dimension Door)</p>
                    <p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
                    <p><b>Old Formula</b>: (0.01 * x ^ 0.65), where x is highest max mana this R.</p>
                    <p><b>New Formula</b>: (0.1 * x ^ 0.65), where x is highest max mana this R.</p>
                    <br/>
                    <p><b>Archon 1</b>: (Star Trading)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the maximum amount of Royal Exchanges you made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.25 * x), where x is Royal Exchanges.</p>
                    <p><b>New Formula</b>: (0.9 * x), where x is Royal Exchanges.</p>
                    <br/>
                    <p><b>Archon 2</b>: (Energy Recharge)</p>
                    <p><b>Old Effect</b>: Maximum Mana counts more based on the amount of time spent as Order in this Reincarnation.</p>
                    <p><b>New Effect</b>: Maximum Mana counts more based on the amount of time spent as Order in this Reincarnation. Also increase Precognition base and scaling.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.55), where x is time spent as Order this R in seconds.</p>
                    <p><b>New Formula</b>: (0.25 * x ^ 0.5), where x is time spent as Order this R in seconds.</p>
                    <br/>
                    <p><b>Archon 5</b>: (Archon Pride)</p>
                    <p><b>Effect</b>: Increase assistants based on your current Lineage level.</p>
                    <p><b>Old Formula</b>: (1.25 * x ^ 1.25), where x is your current Lineage level.</p>
                    <p><b>New Formula</b>: (x), where x is your current Lineage level.</p>
                    <br/>
                    <p><b>Archon 7</b>: (Superior Consciousness)</p>
                    <p><b>Effect</b>: Increase the production of Unique buildings based on their quantity.</p>
                    <p><b>Old Formula</b>: (0.85 * x ^ 0.85), where x is Unique Buildings.</p>
                    <p><b>New Formula</b>: (x), where x is Unique Buildings.</p>
                    <br/>
                    <p><b>Archon 8</b>: (Strange Attraction)</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on the activity time of your least used spell.</p>
                    <p><b>Old Formula</b>: (50 + 0.75 * x ^ 0.75), where x is spell with least activity time this R in seconds.</p>
                    <p><b>New Formula</b>: (100 + 0.8 * x ^ 0.8), where x is spell with least activity time this R in seconds.</p>
                    <br/>
                    <p><b>Archon 9</b>: (Arcane Core)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on mana produced in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (log10(1 + x) ^ 2.5), where x is mana produced in this Reincarnation.</p>
                    <p><b>New Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is mana produced in this Reincarnation.</p>
                    <br/>
                    <p><b>Archon 10</b>: (Purity of Form)</p>
                    <p><b>Old Effect</b>: Lineage levels count 300% more for all purposes. Increase Precognition base and scaling.</p>
                    <p><b>New Effect</b>: Lineage levels count 200% more for all purposes.</p>
                    <p><b>Old Formula</b>: (1.25 * ln(x) ^ 1.5), where x is mana produced in this game.</p>
                    <br/>
                    <p><b>Djinn 1</b>: (The Desire Within)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on spells of your current alignments cast in this game.</p>
                    <p><b>Old Formula</b>: (25 * ln(1 + x) ^ 2), where x is alignments spells cast in this game.</p>
                    <p><b>New Formula</b>: (25 * ln(1 + x) ^ 2.5), where x is alignments spells cast in this game.</p>
                    <br/>
                    <p><b>Djinn 3</b>: (Magical Circuit)</p>
                    <p><b>Effect</b>: Increase Maximum Mana based on researches selected.</p>
                    <p><b>Old Formula</b>: sum(sumOfDigits(bought research number)) ^ 1.3</p>
                    <p><b>New Formula</b>: sum(sumOfDigits(bought research number)) ^ 1.15</p>
                    <br/>
                    <p><b>Djinn 4</b>: (Aura of Magic)</p>
                    <p><b>Effect</b>: Increase non-unique building production based on mana produced this game.</p>
                    <p><b>Old Formula</b>: (0.125 * x ^ 0.325), where x is mana produced this game.</p>
                    <p><b>New Formula</b>: (0.325 * x ^ 0.325), where x is mana produced this game.</p>
                    <br/>
                    <p><b>Djinn 5</b>: (Spiritual Bindings)</p>
                    <p><b>Effect</b>: Increase assistants based on time spent offline.</p>
                    <p><b>Old Formula</b>: (0.65 * x ^ 0.35), where x is time spent offline this game in seconds.</p>
                    <p><b>New Formula</b>: (0.65 * x ^ 0.5), where x is time spent offline this game in seconds.</p>
                    <br/>
                    <p><b>Djinn 6</b>: (Wild Surge)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 0.65), where x is the duration of your longest spell.</p>
                    <p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is the duration of your longest spell.</p>
                    <br/>
                    <p><b>Djinn 7</b>: (Wishing Well)</p>
                    <p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.04 * x ^ 0.4), where x is amount of assistants you own.</p>
                    <p><b>New Formula</b>: (0.05 * x ^ 0.35), where x is amount of assistants you own.</p>
                    <br/>
                    <p><b>Djinn 9</b>: (Mana Creatures)</p>
                    <p><b>Effect</b>: Increase assistants based on the highest mana produced in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (2 * log10(1 + x) ^ 2), where x is highest mana produced in a single game this reincarnation.</p>
                    <p><b>New Formula</b>: (1.8 * log10(1 + x) ^ 1.8), where x is highest mana produced in a single game this reincarnation.</p>
                    <br/>
                    <p><b>Makers 2</b>: (Everlasting Materials)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.2 * x ^ 0.85), where x is highest amount of buildings built this Reincarnation.</p>
                    <p><b>New Formula</b>: (0.25 * x ^ 0.85), where x is highest amount of buildings built this Reincarnation.</p>
                    <br/>
                    <p><b>Makers 3</b>: (Infinite Improvements)</p>
                    <p><b>Effect</b>: Increase the production of Unique buildings based on time spent as Balance.</p>
                    <p><b>New Effect</b>: Increase the production of All Buildings based on time spent as Balance.</p>
                    <p><b>Formula</b>: (0.3 * x ^ 0.7), where x is time spent as balance this R in seconds.</p>
                    <br/>
                    <p><b>Makers 7</b>: (Stonecarving)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
                    <p><b>Old Formula</b>: (30 + 0.03 * (x * (y + z)) ^ 0.7), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Formula</b>: (30 + 0.3 * (x * (y + z)) ^ 0.7), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b>Makers 10</b>: (Valuable Antiquity)</p>
                    <p><b>Effect</b>: Artifacts count more based on time spent in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.5 * x ^ 0.5), where x is time spent this Reincarnation.(in seconds)</p>
                    <p><b>New Formula</b>: (0.45 * x ^ 0.45), where x is time spent this Reincarnation.(in seconds)</p>
                    <hr>
                    <p><b>Advanced Heritage</b></p>
                    <p><b>Advanced Elven Heritage</b></p>
                    <p><b>Old Formula</b>: (0.2 * ln(x) ^ 2), where x is amount of clicks this reincarnation.</p>
                    <p><b>New Formula</b>: (0.25 * ln(x) ^ 2), where x is amount of clicks this reincarnation.</p>
                    <hr>
                    <p><b>Unique Buildings</b></p>
                    <p><b>Flesh Workshops</b></p>
                    <p><b>Effect</b>: Increase production based on mana regen.</p>
                    <p><b>Old Formula</b>: (10 * x ^ 0.6), where x is mana regen per second.</p>
                    <p><b>New Formula</b>: (15 * x ^ 0.65), where x is mana regen per second.</p>
                    <br/>
                    <p><b>Forbidden Library</b></p>
                    <p><b>Effect</b>: Increase production based on spells cast.</p>
                    <p><b>Old Formula</b>: (15 * (ln (1 + x) / ln(x % 10 + 2)) ^ 1.5)%, where x is spells cast.</p>
                    <p><b>New Formula</b>: (18 * (ln (1 + x) / ln(x % 10 + 2)) ^ 1.8)%, where x is spells cast.</p>
                    <br/>
                    <p><b>Mercenary Duel</b></p>
                    <p><b>Old Requirements</b>: R160+, 1 Qi (1e18) Spells cast, 10 M (1e7) Clicks, 1 Nod (1e60) Faction Coins, 300000 Buildings (MAX), 1 Qi (1e18) Assistants (MAX)</p>
                    <p><b>New Requirements</b>: R160+, 1 Qi (1e18) Spells cast, 10 M (1e7) Clicks, 1 Nod (1e60) Faction Coins, 300000 Buildings (MAX), 100 Qa (1e17) Assistants (MAX)</p>
                    <hr>
                    <p><b>Research</b></p>
                    <p><b>S200</b>: (Cryomancy)</p>
                    <p><b>Effect</b>: Increase Spell Duration based on mana produced (this game).</p>
                    <p><b>Old Formula</b>: (2 * ln(x) ^ 1.75)%, where x is mana produced (this game).</p>
                    <p><b>New Formula</b>: (5 * ln(x) ^ 1.25), where x is mana produced (this game).</p>
                    <br/>
                    <p><b>S2875</b>: (Scholarship)</p>
                    <p><b>Old</b>: For Good Mercenary</p>
                    <p><b>New</b>: For All Mercenary</p>
                    <br/>
                    <p><b>C250</b>: (Magnetizing)</p>
                    <p><b>Effect</b>: Increase the chance to find Faction Coins by a multiplicative 50%</p>
                    <p><b>Effect</b>: Increase the chance to find faction coins based on total time spent offline. (in minutes)</p>
                    <p><b>Old Formula</b>: floor(2.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
                    <p><b>New Formula</b>: floor(7.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
                    <br/>
                    <p><b>C305</b>: (Golemcraft)</p>
                    <p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</p>
                    <p><b>Old Formula</b>: floor(0.2 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
                    <p><b>New Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
                    <br/>
                    <p><b>C3000</b>: (Customizing)</p>
                    <p><b>Old</b>: For Neutral Mercenary</p>
                    <p><b>New</b>: For All Mercenary</p>
                    <br/>
                    <p><b>E230</b>: (Coercion)</p>
                    <p><b>Effect</b>: Increases trophy count based on time spent as Evil this R.</p>
                    <p><b>Old Formula</b>: (0.2 * x ^ 0.65), where x is time spent as Evil this R.</p>
                    <p><b>New Formula</b>: (0.25 * x ^ 0.5), where x is time spent as Evil this R.</p>
                    <br/>
                    <p><b>W590</b>: (Torture)</p>
                    <p><b>Fixed</b>: Now correctly requires D245.</p>
                    <br/>
                    <p><b>W3050</b>: (Flanking)</p>
                    <p><b>Old</b>: For Evil Mercenary</p>
                    <p><b>New</b>: For All Mercenary</p>
                    <br/>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.6 July 15, 2019</a></b></p>
                <div class="autohide">
                    <p><b>3.6 July 15, 2019</b></p>
                    <p>Added Ascension 3 (R160)</p>
                    <p>Emerald Coins change to Amethyst Coins in A3</p>
                    <p><b>Gem Formula to R</b>: (1e27 * 100 ^ (R - 160))</p>
                    <p><b>Gems to Coins</b>: ((1e12 * (x * (x + 1))) / 2) where x is gems</p>
                    <br/>
                    <p><b>All Lineages above L50 will be lowered to L50 in A3</b></p>
                    <br/>
                    <p><b>Added R120 Power</b></p>
                    <p><b>Effect</b>: Increases the production of all buildings based on Reincarnations made when not affiliated with Mercenaries or Elite factions.</p>
                    <p><b>Formula</b>: (100 * R), where R is Reincarnations made.</p>
                    <br>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ChallengePower.png" align="middle"> Challenge Power</b> (<b>New Upgrade</b>)</p>
                    <p><b>Effect</b>: Unlock the power of Challenges. Once purchased all available Challenges will be automatically selected.</p>
                    <p><b>Note</b>: Challenges can no longer be toggled on/off</p>
                    <br>
                    <p><b>Event Changes</b></p>
                    <p>New Feat and Upgrade Added, 2 other changes...???</p>
                    <br>
                    <p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
                    <p><b>OldEffect</b>: All spells activity time counts more based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.35 * ln(1 + x) ^ 3.5)%, where x is amount of assistants you own.</p>
                    <p><b>New Effect</b>: All spells activity time counts more based on Evil spells cast in this Reincarnation.</p>
                    <p><b>New Formula</b>: (8 + 0.8 * x ^ 0.8)%, where x is Evil spells cast in this Reincarnation.</p>
                    <br>
                    <p><b><img src=http://musicfamily.org/realm/Factions/picks/ChocolateEgg2019.png align=middle> Chocolate Egg</b></p>
                    <p><b>Old Effect</b>: Increase base clicking reward by 1% of your Mana Regeneration.</p>
                    <p><b>New Effect</b>: Increase base clicking reward by 100% of your Mana Regeneration.</p>
                    <p><b>Added Effect</b>: Also clicks once per second.</p>--!>
                    <br>
                    <p><b>6 New Trophies</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AssistantStratum.png" align="middle"> Assistant Stratum</b></p>
                    <p><b>Requirements</b>: Have 5e18 Assistants.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/150Reincarnations.png" align="middle"> 150 Reincarnations</b></p>
                    <p><b>Requirements</b>: Reincarnate 150 times.</p>
                    <p><b>Cost</b>: (To Reincarnate to R150) 1.134 Dqag (1.134e129) Gems</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/EliteChallenger.png" align="middle"> Elite Challenger</b></p>
                    <p><b>Requirements</b>: Complete all the MAD Challenges.</p>
                    <p><b>Effect</b>: Increase the overall production of Elite Factions by 25%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ReverseAutocasting.png" align="middle"> Reverse Autocasting</b></p>
                    <p><b>Requirements</b>: Reach 1.5e8 mana and unlock the Reverse Autocasting upgrade. Can only be unlocked after Ascension 1 at Reincarnation 40+.</p>
                    <p><b>Effect</b>: Allows you to manually reset spells.</p>
                    <p><b>Note</b>: Can not reset spells with a fixed duration.</p>
                    <p><b>Note</b>: Only while offline, increase your mana produced amount by an additional 10% of your Mana Regeneration per second, and your spells cast amount multiplicatively based on your offline Mana Regeneration.</p>
                    <p><b>Formula</b>: (1000 * log10(1 + x)), where x is Mana Regeneration</p>
                    <p><b>Cost</b>: 3.2 Dc (3.2e33), A3+: Free</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TheArchitect.png" align="middle"> The Architect</b></p>
                    <p><b>Requirements</b>: Build 250,000 units of any individual building.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sFingers.png" align="middle"> God's Fingers</b></p>
                    <p><b>Requirements</b>: Reach 700 M (7e8) automatic clicks in this Reincarnation.</p>
                    <hr>
                    <p><b>Added Elite Challenges</b></p>
                    <p><b>Archon</b></p>
                    <p><b>Archon Challenge 1</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/God’sPlan.png" align="middle"> God’s Plan</b></p>
                    <p>The ascended crusade wishes to test the strength of it's angelic understudies; perhaps a huge celestial army is worthy of their attention.</p>
                    <p><b>Requirements</b>: Angel as Base Faction, Archon as Elite Faction, 135 Reincarnations, Chrono Loading spell upgrade purchased.</p>
                    <p><b>Challenge</b>: Have a Call to Arms bonus of at least 10 M (1e7%) and at least 250,000 Good buildings.</p>
                    <p><b>Effect</b>: Increase Mana Regeneration additively and multiplicatively based on the amount of Order buildings you own.</p>
                    <p><b>Formula</b>: Additive: (0.2 * x ^ 2), Multiplicative: (0.5 * x ^ 0.5)</p>
                    <p><b>Effect</b>: Precognition also increases God's Hand bonus.</p>
                    <p><b>Upgrade</b>: Good for Angel</p>
                    <br/>
                    <p><b>Archon Challenge 2</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AnUntimelyDeath.png" align="middle"> An Untimely Death</b></p>
                    <p>A glorious victory! May we reap the rewards of war with new undead adversaries to join our quest.</p>
                    <p><b>Requirements</b>: Undead as Base Faction, Archon as Elite Faction, 139 Reincarnations, Archon Bloodline active, Completion of Archon Challenge 1</p>
                    <p><b>Challenge</b>: Have an Offline Bonus of at least 20 Dc (2e34)% while also having at least 5e10 assistants.</p>
                    <p><b>Effect</b>: Multiplicatively increase assistants based on Offline Bonus.</p>
                    <p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is offline bonus multiplier</p>
                    <p><b>Effect</b>: Temporal Flux also increases Offline Bonus. (Same Formula as production bonus)</p>
                    <p><b>Upgrade</b>: Good for Undead</p>
                    <br/>
                    <p><b>Archon Challenge 3</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Titanomachy.png" align="middle"> Titanomachy</b></p>
                    <p>Through mastery of life and death, the final venture of creator's assistance stands between total dominion of the higher planes.</p>
                    <p><b>Requirements</b>: Titan as Base Faction, Archon as Elite Faction, 143 Reincarnations, 25,000 excavations, Titan Set active, Completion of Archon Challenge 2</p>
                    <p><b>Challenge</b>: Have an individual Royal Exchange bonus of at least 5000% within 5 minutes of a new game.</p>
                    <p><b>Effect</b>: Reduce Royal Exchange cost multiplier by -0.02 and increase Royal Exchange bonus by 100%.</p>
                    <p><b>Effect</b>: Multiplicatively increase time spent in this game based on Royal Exchanges bought.</p>
                    <p><b>Formula</b>: (5 * x ^ 0.25), where x is Royal Exchanges bought.</p>
                    <p><b>Upgrade</b>: Good for Titan</p>
                    <br/>
                    <p><b>Archon Challenge 4</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TimeMerge.png" align="middle"> Time Merge</b></p>
                    <p>In order to satiate our campaign we need to delve deeper into the abstract. Behold, even time itself yields to the crusade.</p>
                    <p><b>Requirements</b>: Archon as Elite Faction, 148 Reincarnations, Archon Unique Building Purchased (Nexus), Completion of Archon Challenge 3</p>
                    <p><b>Challenge</b>: Have a Temporal Flux bonus of at least 6543210%.</p>
                    <p><b>Effect</b>: 25% of Chaos and Balance time spent in this Reincarnation is added to time spent in this game.</p>
                    <p><b>Upgrade</b>: Good for Archon</p>
                    <br/>
                    <p><b>Archon Challenge 5</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PowerOverwhelming.png" align="middle"> Power Overwhelming</b></p>
                    <p>All-powerful ruler, we've experienced all this worldline had to offer. Shall we bridge to another and continue?</p>
                    <p><b>Requirements</b>: Archon as Elite Faction, 153 Reincarnations, Have all Order Lineages at least level 45, Completion of Archon Challenge 4</p>
                    <p><b>Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 400% bonus.</p>
                    <p><b>Effect</b>: The Advanced Heritage that matches your Lineage counts 50% of its level. All others get 5% of their respective Lineage level.</p>
                    <p><b>Upgrade</b>: Good for All</p>
                    <br/>
                    <p><b>In-Game Challenge Final Reward</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Omniscience.png" align="middle"> Omniscience</b></p>
                    <p><b>Effect</b>: Precognition also makes Excavations, Artifacts, Reincarnations, Research points and Lineage levels count 15% more.</p>
                    <hr>
                    <p><b>Djinn</b></p>
                    <p><b>Djinn Challenge 1</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MiniatureLamps.png" align="middle"> Miniature Lamps</b></p>
                    <p>In the beginning, we shared with the mortals mystical wishes to give them some entertaining tales to tell.</p>
                    <p><b>Requirements</b>: Fairy as Base Faction, Djinn as Elite Faction, 135 Reincarnations, Persistent Entropy spell upgrade purchased.</p>
                    <p><b>Challenge</b>: Reach 185,000 Enchanted Fields within 2 minutes of a new game.</p>
                    <p><b>Effect</b>: Maelstrom increase assistants based on building tiers targeted. Provides a better bonus for lower tier buildings.</p>
                    <p><b>Formula</b>: Multiplicative to base assistants: sum of ((12-T) * 100 )%, each T is tier of targeted maelstrom building.</p>
                    <p><b>Alternative Formula</b>: ((36-x-y-z) * 100)%, where x,y and z are the respective tiers of Maelstrom’s target buildings.</p>
                    <p><b>Effect</b>: Fairy Chanting produces Limited Wish casts every second based on maximum mana. Casts provided increase progressively over Fairy Chanting duration.</p>
                    <p><b>Additive to LW casts</b>: (0.0001 * (x ^ 0.4) * y * z), where x = maximum mana, y = Fairy Chanting tier, z = Fairy Chanting runtime (seconds).</p>
                    <p><b>Upgrade</b>: Good for Fairy</p>
                    <br/>
                    <p><b>Djinn Challenge 2</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/IfritIgnition.png" align="middle"> Ifrit Ignition</b></p>
                    <p>As the years passed through, this benevolence fell on deaf ears. The mortals decided to enslave us; dictate to us their every whim. How dare they command us to do their bidding, give them hell!</p>
                    <p><b>Requirements</b>: Demon as Base Faction, Djinn as Elite Faction, 139 Reincarnations, Djinn Bloodline active, Completion of Djinn Challenge 1.</p>
                    <p><b>Challenge</b>: Have at least 6e12 Mana Produced within 6 hours of a new game.</p>
                    <p><b>Effect</b>: Limited Wish casts count more based on Hellfire Blast casts in this game.</p>
                    <p><b>Formula</b>: Multiplicative: (0.6 * x ^ 0.4), where x is Hellfire Blast casts (this game).</p>
                    <p><b>Effect</b>: Each time you cast an Evil spell, you gain additional casts equal to the amount of trophies you have.</p>
                    <p><b>Formula</b>: Additive: (x ^ 0.7), where x is number of trophies. Applies only for real evil spells, adds casts directly to the spell’s casts.</p>
                    <p><b>Upgrade</b>: Good for Demon</p>
                    <br/>
                    <p><b>Djinn Challenge 3</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/IdentityShaper.png" align="middle"> Identity Shaper</b></p>
                    <p>Interesting, they're showing us some compassion. But it matters not, for we're still bound towards these vessels.</p>
                    <p><b>Requirements</b>: Faceless as Base Faction, Djinn as Elite Faction, 143 Reincarnations, 25,000 excavations, Faceless Set active, Completion of Djinn Challenge 2.</p>
                    <p><b>Challenge</b>: Have at least 8e12 assistants within 5 minutes of a new game.</p>
                    <p><b>Effect</b>: Catalyst casts one additional spell.</p>
                    <p><b>Effect</b>: Makes Limited Wish scale faster based on Research Points used in this game.</p>
                    <p><b>Formula</b>: (y = ln(1 + sum of x))%, where x = all selected researches' number (e.g. W275 = 275)</p>
                    <p><b>Formula</b>: y converted to a multiplier (so 5% = 1.05) is applied to both exponents of LW: ( (2.25 * ln(1+a) ^ (1.35 * y)) * (b^(0.45 * y)), where a= duration, b = casts.</p>
                    <p><b>Upgrade</b>: Good for Faceless</p>
                    <br/>
                    <p><b>Djinn Challenge 4</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/WorldlyDesires.png" align="middle"> Worldly Desires</b></p>
                    <p>This generation decided that we should give them a few more wishes before they give in to our demands for a change.</p>
                    <p><b>Requirements</b>: Djinn as Elite Faction, 148 Reincarnations, Djinn Unique Building Purchased (Pavilion), Completion of Djinn Challenge 3.</p>
                    <p><b>Challenge</b>: Have a spell duration of at least 2 year.</p>
                    <p><b>Effect</b>: Multiplicatively increase Assistants, production bonus from Gems and Maximum Mana by 8%, 88% and 888%, targets chosen randomly and refreshing every 88 seconds.</p>
                    <p><b>Upgrade</b>: Good for Djinn</p>
                    <br/>
                    <p><b>Djinn Challenge 5</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AltarofWishes.png" align="middle"> Altar of Wishes</b></p>
                    <p>Freedom... at last. Onwards we go, to a better future. So long, mortals.</p>
                    <p><b>Requirements</b>: Djinn as Elite Faction, 153 Reincarnations, All Chaos Lineages at level 45, Completion of Djinn Challenge 4.</p>
                    <p><b>Challenge</b>: Cast all Chaos spells 88 times each in a single Reincarnation.</p>
                    <p><b>Spells</b>: Fairy Chanting, HFB, Brainwave, Maelstrom, LW, Catalyst</p>
                    <p><b>Effect</b>: Multiplicatively increases one of your assets based on the amount of alignments tied to your faction spells.</p>
                    <p><b>Good</b>: Assistants</p>
                    <p><b>Evil</b>: Trophy Count</p>
                    <p><b>Neutral</b>: Production Bonus from Gems</p>
                    <p><b>Order</b>: Mana Regeneration</p>
                    <p><b>Chaos</b>: Maximum Mana</p>
                    <p><b>Balance</b>: Faction Coin Find Chance</p>
                    <p><b>Upgrade</b>: Good for All</p>
                    <p><b>Note</b>: Base + Prestige + Elite means you will always have at least a 353% bonus for a primary and secondary alignment’s effect</p>
                    <p>132%, 353%, 940%, 2500% (only possible with chaos + chaos lineage + a400; or mercs) for 1, 2 , 3 and 4 faction spells of the same alignment respectively</p>
                    <p><b>Examples</b></p>
                    <p><b>Faceline Fairy with A400</b></p>
                    <p><b>4 Chaos Spells</b>: Brainwave, Fairy Chanting, Limited Wish, Catalyst = 2500% Maximum Mana</p>
                    <p><b>2 Good Spells</b>: Fairy Chanting, Diamond Pickaxe = 353% Assistants</p>
                    <p><b>1 Neutral Spell</b>: Brainwave = 132% Production Bonus from Gems</p>
                    <p><b>Archonline Goblin</b></p>
                    <p><b>2 Evil Spells</b>: Goblin's Greed, Combo Strike = 353% Trophy Count</p>
                    <p><b>2 Balance Spell</b>: Infinite Spiral, Goblin's Greed = 353% Faction Coin Find Chance</p>
                    <p><b>1 Order Spell</b>: Precognition = 132% Mana Regeneration</p>
                    <br/>
                    <p><b>In-Game Challenge Final Reward</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FullWish.png" align="middle"> Full Wish</b></p>
                    <p><b>Effect</b>: Production of all buildings effect of Limited Wish is active on every cast and is no longer a possible random outcome.</p>
                    <hr>
                    <p><b>Makers</b></p>
                    <p><b>Makers Challenge 1</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SeedofLife.png" align="middle"> Seed of Life</b></p>
                    <p>If you wish to make an apple pie from scratch, you must first invent the universe. And the apple tree, you will have to nurse.</p>
                    <p><b>Requirements</b>: Elves as Base Faction, Makers as Elite Faction, 135 Reincarnations, Reality Crater spell upgrade purchased.</p>
                    <p><b>Challenge</b>: Get 1e7 clicks in this Reincarnation and trigger Elven Luck at least 7777 times in this game.</p>
                    <p><b>Effect</b>: Increase assistants based on the amount of Elven Luck triggered in this game.</p>
                    <p><b>Formula</b>: Multiplicative: (1.5 * x ^ 0.85)%, where x is Elven Lucks this game.</p>
                    <p><b>Effect</b>: Gain x5 Faction Coins from any source when they match your Faction, Bloodline or Set.</p>
                    <p><b>Formula</b>: Multiplicative: (5 ^ x), where x is number of faction/bloodline/set FC matches (+1 for full FC match, +½ for half FC match) (includes A2950 and Stoneheart).</p>
                    <p><b>Upgrade</b>: Good for Elves</p>
                    <br/>
                    <p><b>Makers Challenge 2</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArtificialCurrency.png" align="middle"> Artificial Currency</b></p>
                    <p>Extinction is the rule. Survival is the exception, which can only be achieved through subtle deception.</p>
                    <p><b>Requirements</b>: Goblin as Base Faction, Makers as Elite Faction, 139 Reincarnations, Makers Bloodline active, Completion of Makers Challenge 1.</p>
                    <p><b>Challenge</b>: Get 1e48 Faction Coins with a minimum of 50 Excavation Resets in this Reincarnation.</p>
                    <p><b>Effect</b>: While Mana Regeneration is higher than Maximum Mana, each time you cast a spell, you also cast free Tax Collections based on the difference between them.</p>
                    <p><b>Formula</b>: (((log10(1+x)) ^2 / (log10(1+y)) ^2) ^ 1.25), where x is mana regen, y is max mana.</p>
                    <p><b>Effect</b>: Production bonus from Gems is increased based on Tax Collections cast in this game.</p>
                    <p><b>Formula</b>: Multiplicative: (0.7 * ln(1+x) ^ 1.7), where x is number of Tax Collections (This game)</p>
                    <p><b>Upgrade</b>: Good for Goblin</p>
                    <br/>
                    <p><b>Makers Challenge 3</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PillarsofCreation.png" align="middle"> Pillars of Creation</b></p>
                    <p>We are like butterflies who flutter for a day and think it is forever. This can be accomplished when you sincerely endeavor.</p>
                    <p><b>Requirements</b>: Druid as Base Faction, Makers as Elite Faction, 143 Reincarnations, 25,000 excavations, Druid Set active, Completion of Makers Challenge 2.</p>
                    <p><b>Challenge</b>: "Have at least 1e9 Maximum Mana and 30000 of each building within 5 minutes of a new game.</p>
                    <p><b>Effect</b>: Infinite Spiral's assistant effect is also increased by Mana Regeneration.</p>
                    <p><b>Formula</b>: (12.5 * (ln(1+x * y) ^ 1.25), where x is max mana, y is mana regen</p>
                    <p><b>Effect</b>: Your Lineage levels count double.</p>
                    <p><b>Upgrade</b>: Good for Druid</p>
                    <br/>
                    <p><b>Makers Challenge 4</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Stoneheart.png" align="middle"> Stoneheart</b></p>
                    <p>We are a way for the cosmos to know itself. Manipulate existence to plant an evocation of yourself.</p>
                    <p><b>Requirements</b>: Makers as Elite Faction, 148 Reincarnations, Makers Unique Building Purchased (Halls of Origination), Completion of Makers Challenge 3.</p>
                    <p><b>Challenge</b>: Without using any Bloodline or Research, reach 35000 Halls of Origination.</p>
                    <p><b>Effect</b>: Pick an additional Set.</p>
                    <p><b>Upgrade</b>: Good for Makers</p>
                    <br/>
                    <p><b>Makers Challenge 5</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GreatestInvention.png" align="middle"> Greatest Invention</b></p>
                    <p>Somewhere, something incredible is waiting to be known. Sculpt from your boundless imagination and make it your own.</p>
                    <p><b>Requirements</b>: Makers as Elite Faction, 153 Reincarnations, All Balance Lineages at level 45, Completion of Makers Challenge 4.</p>
                    <p><b>Challenge</b>: Have at least 1e13 assistants, 10e9 Maximum Mana and 2e22 Faction Coin find chance within 8 minutes of a new game.</p>
                    <p><b>Effect</b>: Increase Maximum Mana based on Faction Coins gained and mana produced in this game; spells cast and clicks made in this Reincarnation.</p>
                    <p><b>Formula</b>: Multiplicative: ( 0.3 * log10(1+a) + log10(1+b) + log10(1+c) + 3 * log10(1+d) )^1.5, a is factions coins (this game), b is mana produced (this game), c is spells cast (this reincarnation), d is clicks made (this reincarnation)</p>
                    <p><b>Upgrade</b>: Good for All</p>
                    <br/>
                    <p><b>In-Game Challenge Final Reward</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Gaia'sCradle.png" align="middle"> Gaia's Cradle</b></p>
                    <p><b>Effect</b>: All Infinite Spiral effects scale 15% faster.</p>
                    <hr>
                    <p><b>Mercenary Added back in A3</b>:</p>
                    <p><b>Note</b>: Elite Faction Upgrades can only be purchased with Mercenary Upgrade 4, 8, 12 and 16</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryDuel.png" align="middle"> Mercenary Duel</b></p>
                    <p><b>In-game description</b>: The Mercenary Lord has challenged you to a duel of skills. Complete the following tasks in a single Reincarnation to show your ability as a ruler.</p>
                    <p><b>Requirements</b>: R160+, 1 Qi (1e18) Spells cast, 10 M (1e7) Clicks, 1 Nod (1e60) Faction Coins, 300000 Buildings (MAX), 1 Qi (1e18) Assistants (MAX)</p>
                    <p><b>Note</b>: 1 time purchase</p>
                    <p><b>Effect</b>: Unlocks Mercenary in Ascension 3</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryBuildingContract.png" align="middle"> Mercenary Building Contract</b></p>
                    <p>You can purchase one Ascension 2 Unique Building from any faction, provided you meet the requisites. You will not be able to change it during the current run.</p>
                    <p><b>Cost</b>: Free</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryFourthContract.png" align="middle"> Mercenary Fourth Contract</b></p>
                    <p><b>Requirements</b>: R160+, Mercenary Duel purchased</p>
                    <p><b>Cost</b>: 100 Qid 1e50</p>
                    <p><b>Effect</b>: Unlocks Tier 4 Upgrades 3</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryUpgrade13.png" align="middle"> Mercenary Upgrade 13</b></p>
                    <p>You can purchase a tier 4 upgrade from any faction for an increased price.</p>
                    <p><b>Cost</b>: 7500 FC</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryUpgrade14.png" align="middle"> Mercenary Upgrade 14</b></p>
                    <p>You can purchase a tier 4 upgrade from any faction for an increased price.</p>
                    <p><b>Cost</b>: 16500 FC</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryUpgrade15.png" align="middle"> Mercenary Upgrade 15</b></p>
                    <p>You can purchase a tier 4 upgrade from any faction for an increased price.</p>
                    <p><b>Cost</b>: 24000 FC</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryUpgrade16.png" align="middle"> Mercenary Upgrade 16</b></p>
                    <p>You can purchase a tier 4 upgrade from any faction for an increased price.</p>
                    <p><b>Cost</b>: 33000 FC</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ObsidianCrown.png" align="middle"> Obsidian Crown</b></p>
                    <p><b>Requirements</b>: R170+, Aligned with Mercs, 10 excavation resets (This game)</p>
                    <p><b>Chance</b>: ((x - 10) / 1000)%, x is the number of free and ruby excavation resets (This game)</p>
                    <p><b>Effect</b>: Unlocks Mercenary Union Contract</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MercenaryUnionContract.png" align="middle"> Mercenary Union Contract</b></p>
                    <p><b>Requirements</b>: Obsidian Crown</p>
                    <p>You can purchase one Union Power from any faction, provided you meet the requisites. You will not be able to change it during the current run.</p>
                    <p><b>Cost</b>: Free</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/MercenarySet.png" align="middle"><b> Mercenary Set</b></p>
                    <p><b>Requirement</b>: A3+ (R160+),</p>
                    <p><b>Artifacts Required</b>: Steel Plate, Black Sword, Mercenary Insignia</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Allows you to pick the same lineage as your faction.</p>
                    <p><b>Effect</b>: Lineage levels count 100% more.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SteelPlate.png" alt="Steel Plate" align="middle"><b> Steel Plate</b></p>
                    <p><b>Clue</b>: Legacy from 50 generations ago.</p>
                    <p><b>Description</b>: A full plate made of hardened steel.</p>
                    <p><b>Requirement</b>: Play as Mercenaries +R5</p>
                    <p><b>Chance</b>: (#R / 50)%</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BlackSword.png" alt="Black Sword" align="middle"><b> Black Sword</b></p>
                    <p><b>Clue</b>: Only found by really, really dedicated Mercenary allies.</p>
                    <p><b>Description</b>: A long sword with an extremely sharp blade made of dark metal.</p>
                    <p><b>Requirement</b>: Play as Mercenaries, +100 Merc affiliations (All-time)</p>
                    <p><b>Chance</b>: (All-time Mercenary playtime / 16h 40m)%</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/MercenaryInsigniaArtifact.png" align="middle"><b> Mercenary Insignia</b></p>
                    <p><b>Clue</b>: Gem rhabdomancy seems to work best.</p>
                    <p><b>Description</b>: The infamous metal cross of the Mercenaries. You should be both proud and afraid to carry one.</p>
                    <p><b>Requirement</b>: R160+, Play as Mercenary, 2000+ Excavations</p>
                    <p><b>Chance</b>: ((log10(x) - 37) * 0.1)%, x is gems owned.</p>
                    <p><b>Effect</b>: Unlocks Mercenary Set.</p>
                    <br>
                    <p><b>Changes to Mercenary and it's Upgrades</b></p>
                    <p><b>Note</b>: Mercenaries in A3 can buy Dragon Upgrades with any Mercenary Upgrade with increased price.</p>
                    <p><b>Note</b>: MAD upgrades can only be bought with the Mercenary Fourth Contract and only with Mercenary Upgrade 16.</p>
                    <p><b>Note</b>: MAD spells can only be bought from the Sorcery contract.</p>
                    <br>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/NoRecruitingSecretTrophy.png align=middle><b> No Recruiting</b></p>
                    <p><b>Effect</b>: Increase Mercenary production by 1% per Reincarnation.</p>
                    <p><b>New Note</b>: No longer A-nerfed.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefitsSpell.png" alt="Round Table" align="middle"> <b>Share Benefits</b> (Good Mercenaries)</p>
                    <p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 36 tiers.</p>
                    <p><b>Formula</b>: 120 ^ (0.25 * T), where T is tier (FC chance multiplier)</p>
                    <p><b>Formula</b>: ((2.20 ^ T) - 1) * 100, multiplicative (production multiplier)</p>
                    <p><b>Old Effect</b>: Adds Tax Collections casts based on its duration and current tier cast.</p>
                    <p><b>Old Formula</b>: (10 * x * T), where x is spell duration and T is spell tier (per tier)</p>
                    <p><b>New Effect</b>: Also produce Tax Collection casts per second based on your Maximum Mana.</p>
                    <p><b>New Formula</b>: (0.01 * y * T), where y is max mana, T is tier</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AppraisalVantageSpell.png" alt="Appraisal Vantage" align="middle"> <b>Appraisal Vantage</b></p>
                    <p><b>Old Effect</b>: Generates additional Faction Coins per cast</p>
                    <p><b>Old Formula</b>: (2.5 * x ^ 2.5), where x is original Faction Coin chance.</p>
                    <p><b>New Effect</b>: Generates additional Faction Coins based on the amount of assistants you own.</p>
                    <p><b>New Formula</b>: (y * x ^ 1.25), where y is FC%, x is assistants owned.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DarkCovenant.png" alt="Dark Covenant" align="middle"> <b>Dark Covenant</b> (Spell Upgrade)</p>
                    <p><b>Note</b>: Reap Interests upgrade.</p>
                    <p><b>Effect 1</b>: Gives 1 additional upgrade from any of the Evil factions.</p>
                    <p><b>Effect 2</b>: Upgrades Tax Collection spell to Reap Interests, Additional casts of Reap Interests increase its seconds worth of production.</p>
                    <p><b>Added Effect</b>: Removes 1 Ascension Penalty from Heresiarchs.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HeresiarchsMercenaryUpgrade.png" alt="Heresiarchs" align="middle"> Heresiarchs (<u>For Evil Alignments</u>)</b></p>
                    <p><b>Effect</b>: Increase the production of Evil buildings based on your most built Evil building.</p>
                    <p><b>Old Formula</b>: round(1.15 * x ^ 0.85)%, where x is the number of your most-built evil building you own.</p>
                    <p><b>Added Effect</b>: A-nerfed</p>
                    <p><b>New Formula</b>: (1.85 * x ^ 0.85).</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ReapInterestsSpell.png" align="middle"> <b>Reap Interests </b></p>
                    <p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.</p>
                    <p><b>Old Formula</b>: (y ^ (1 + 0.24 * log10(1 + x))), where y is TC original power and x is amount of TC casts.</p>
                    <p><b>New Formula</b>: (120000 * log10(0.125 * x)), where x is amount of TC casts.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TyrantGarrison.png" alt="Tyrant Garrison" align="middle"> <b>Tyrant Garrison Upgrade</b></p>
                    <p><b>Effect 1</b>: Allows access to Research Facilities</p>
                    <p><b>Effect 2</b>: Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.</p>
                    <p><b>Old Formula</b>: (0.5 * log10(x) ^ 3.5), where x is Offline Production Bonus.</p>
                    <p><b>New Formula</b>: (log10(x) ^ 3.5), where x is Offline Production Bonus.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Freemason'sHall.png" alt="Freemason's Hall" align="middle"> <b>Freemason's Hall Upgrade</b></p>
                    <p><b>Old</b>: Upgraded from Alchemist Labs</p>
                    <p><b>New</b>: Upgraded from Inns</p>
                    <p><b>Old Effect</b>: Upgrade Alchemist Labs to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.</p>
                    <p><b>Old Formula</b>: (2 * x ^ 0.95), where x is assistants you had in a single game (This R).</p>
                    <p><b>New Effect</b>: Upgrade Inns to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.</p>
                    <p><b>New Formula</b>: (20 + 20 * x), where x is assistants you had in a single game (This R).</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/VeteranFigurineArtifact.png" alt="Veteran Figureine" align="middle"><b> Veteran Figurine</b></p>
                    <p><b>Old Requirement</b>: R90+</p>
                    <p><b>New Requirement</b>: R90+, Dragon Challenge 6</p>
                    <p><b>Old Effect</b>: Passive effect: allows Mercenaries to benefit from all challenges.</p>
                    <p><b>New Effect</b>: Passive effect: allows Mercenaries to benefit from all faction challenges of your alignment.</p>
                    <p><b>Note</b>: Does not grant elite challenges.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPart2.png" alt="Know Your Enemy, Part II" align="middle"><b> Know Your Enemy, Part II</b></p>
                    <p><b>Old Requirement</b>: R76+, Upgrade from all 12 Factions</p>
                    <p><b>New Requirement</b>: R75+, Mercenary Unique Building, Upgrade from all 12 Factions</p>
                    <hr>
                    <p><b>Upgrades Changes</b></p>
                    <p><b>Challenger Trophies</b>: No longer A-nerfed.</p>
                    <br>
                    <p>Production bonus from Research Points changed from 350 all to 1 all</p>
                    <br>
                    <p>Ruby Power, Reincarnation Power and Gem power have been removed from the BuyALL cycle.</p>
                    <br>
                    <p>Added Buy All Upgrades in option, enabled by default (Includes Unique Buildings)</p>
                    <br>
                    <p>BuySMART is now actually smart and adjusts itself according to your money.</p>
                    <br>
                    <p>Autoclicks no longer count against click cap.</p>
                    <br>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/MasterResearcherSecretTrophy.png align=middle><b> Master Researcher</b></p>
                    <p><b>Old Effect</b>: Increase the overall production of Dragons by 150%.</p>
                    <p><b>New Effect</b>: Increase the overall production of Dragons by 100%.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GrandmasterResearcherSecretTrophy.png" alt="Grandmaster Researcher" align="middle"><b> Grandmaster Researcher</b></p>
                    <p><b>Old Effect</b>: Increase the overall production of Mercenaries by 100%.</p>
                    <p><b>New Effect</b>: Increase the overall production of Mercenaries by 150%.</p>
                    <br>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TieredAutocastingUpgrade.png" alt="Tiered Autocasting" align="middle"> Tiered Autocasting</b></p>
                    <p><b>Old Cost</b>: Free</p>
                    <p><b>New Cost</b>: 100 Qid (1e50)</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/VanillaFlavorJuice.png" alt="Vanilla Flavor Juice" align="middle"><b> Vanilla Flavor Juice</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings by 25,000% for the first 25 minutes of the game (this game) for all Vanilla factions. Doesn't work while offline.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by 2500% for the first 25 minutes of the game (this game) for all Vanilla factions. Doesn't work while offline.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AncientCocoaBeanArtifacts.png" alt="Ancient Cocoa Bean" align="middle"><b> Ancient Cocoa Bean</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings by 25,000% for the first 15 minutes of the game for all Neutral factions.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by 2500% for the first 15 minutes of the game for all Neutral factions.</p>
                    <br/>
                    <p><b>All MAD Contracts and Heritages cost reduced</b></p>
                    <p><b>Trade Treaties</b></p>
                    <p><b>Old Cost</b>: 1 No (1e30)</p>
                    <p><b>New Cost</b>: 1 Oc (1e27)</p>
                    <br>
                    <p><b>Friendship Pacts</b></p>
                    <p><b>Old Cost</b>: 1 Ud (1e36)</p>
                    <p><b>New Cost</b>: 1 No (1e30)</p>
                    <br>
                    <p><b>Alliances</b></p>
                    <p><b>Old Cost</b>: 1 Dd (1e39)</p>
                    <p><b>New Cost</b>: 1 Dc (1e33)</p>
                    <br>
                    <p><b>Unions</b></p>
                    <p><b>Old Cost</b>: 1 Qad (1e45)</p>
                    <p><b>New Cost</b>: 1 Dd (1e39)</p>
                    <br>
                    <p><b>Heritages</b></p>
                    <p><b>Old Cost</b>: 1 Td (1e42)</p>
                    <p><b>New Cost</b>: 1 Ud (1e36)</p>
                    <hr>
                    <p><b>Spells</b></p>
                    <style>
                        div#images {
                            width: 100%;
                            text-align: left;
                        }

                        div#images div {
                            display: inline-block;
                        }
                    </style>
                    <p><b>Ascension 2, Tier 2 Spells</b></p>
                    <br>
                    <center>
                        <div id="images">
                            <div>
                                <center><img src="http://musicfamily.org/realm/Factions/picks/TemporalFluxTier2.png" /></center>
                                <center><b>Temporal Flux</b></center>
                            </div>
                            &nbsp
                            <div>
                                <center><img src="http://musicfamily.org/realm/Factions/picks/MaelstromSpellTier2.png" /></center>
                                <center><b>Maelstrom</b></center>
                            </div>
                            &nbsp
                            <div>
                                <center><img src="http://musicfamily.org/realm/Factions/picks/AllCreationSpellTier2.png" /></center>
                                <center><b>All Creation</b></center>
                            </div>
                        </div>
                    </center>
                    <p><b>Old Coin Cost</b>: 123 Qaq (1.23e125) Emerald coins</p>
                    <p><b>Old FC Cost</b>: 1 Oc (1e27)</p>
                    <p><b>New Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
                    <p><b>New FC Cost</b>: 1 Sp (1e24)</p>
                    <br>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrike.png" alt="Evil" align="middle"> Combo Strike</b></p>
                    <p><b>Duration Changed</b>: Now fixed at 16 seconds</p>
                    <br>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinder.png" alt="Neutral" align="middle"> Gem Grinder</b> (Any Neutral Faction)</p>
                    <p><b>Works For</b>: Neutral - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
                    <p><b>Old Effect</b>: Multiply production bonus from gems by x50</p>
                    <p><b>New Effect</b>: Increase production bonus from Gems</p>
                    <p><b>Note</b>: Gem Grinder formula changed to work with Reincarnations and Ascensions.</p>
                    <p><b>New Formula</b>: ((5000 * (1+0.1rei)) ^ (0.8 ^ asc))</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/PrecognitionSpell.png" alt="All Creation" align="middle"> <b>Precognition</b> (Archons)</p>
                    <p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
                    <p><b>Old Formula</b>: 1.3 * ln(x)^1.7, where x is mana produced in this game.</p>
                    <p><b>New Formula</b>: (ln(x) ^ 1.25) (without AR10), (1.25 * ln(x) ^ 1.5) (with AR10), where x is mana produced in this game.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" alt="Infinite Spiral" align="middle"> <b>Infinite Spiral</b> (Makers)</p>
                    <p><b>Cost</b>: 505000 mana</p>
                    <p><b>Effect</b>: Increase assistants based on Maximum Mana.</p>
                    <p><b>Old Formula</b>: (12.5 * (ln(1 + x) ^ 1.25), where x is Maximum Mana.</p>
                    <p><b>New Formula</b>: (10 + 0.025 * (x * (y + z)) ^ 0.75), where x is Maximum Mana.</p>
                    <br>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/CatalystSpell.png" alt="Catalyst" align="middle"> <b>Catalyst</b> (Djinn Bloodline)</p>
                    <p>Catalyst no longer grants access to Holy Frenzy regardless of alignment.</p>
                    <br/>
                    <p><b>Spell Upgrades</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Dragon'sRoarFactionUpgrade.png" alt="Dragon's Roar" align="middle"> <b>Dragon's Roar</b></p>
                    <p><b>Old Effect</b>: Dragon's Breath also produces Faction Coins at each cast based on its activity time.</p>
                    <p><b>Old Formula</b>: floor(135 * x^0.98), where x is all Rs activity time in seconds.</p>
                    <p><b>New Effect</b>: Dragon's Breath multiplicatively increases Faction Coin find chance based on its duration.</p>
                    <p><b>New Formula</b>: (6 * x ^0.6), where x is duration in seconds.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png" align="middle"> <b>Chrono Loading</b></p>
                    <p><b>Old Requirement</b>: R125+, Cast Precognition with at least 10 Qi (1e19) mana regeneration.</p>
                    <p><b>New Requirement</b>: R125+, Cast Precognition with at least 1 Qi (1e18) mana regeneration.</p>
                    <p><b>Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
                    <p><b>New Effect Added</b>: Now scale off invisible spell duration modifiers.</p>
                    <p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is Precognition duration.</p>
                    <p><b>New Formula</b>: (7 * x ^ 0.7), where x is Precognition duration.(seconds)</p>
                    <hr>
                    <p><b>Artifacts</b></p>
                    <p><b>Eligible Artifacts</b>: Now show their excavation chance in their tooltip.</p>
                    <br/>
                    <p><b>All A2 Faction Artifacts Sets</b></p>
                    <p><b>Old Requirement</b>: R100+, 3000+ Excavations</p>
                    <p><b>New Requirement</b>: R100+, 2000+ Excavations</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ExcavatedMirageArtifact.png" alt="Excavated Mirage" align="middle"><b> Excavated Mirage</b></p>
                    <p><b>Old Effect</b>: Increase Faction Coin find chance by a multiplicative 2000%.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance by a multiplicative 200%.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/RawEmeraldArtifact.png" align="middle"><b> Raw Emerald</b></p>
                    <p><b>Old Chance</b>: (((2 * x) ^ 4.5) / 10000)%, where x is non-ruby excavation resets (this game).</p>
                    <p><b>New Chance</b>: (((3 * x) ^ 4.5) / 10000)%, where x is non-ruby excavation resets (this game).</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/SecondCrystalFragment.png align=middle><b> Second Crystal Fragment</b></p>
                    <p><b>Old Chance</b>: (log10(1 + x) ^ 3 / 5000000 (5M))%, where x is faction coins this game.</p>
                    <p><b>New Chance</b>: (log10(1 + x) ^ 3 / 2500000 (2.5M))%, where x is faction coins this game.</p>
                    <br/>
                    <p><b>Lineage Note</b>: Base cost scaling reduced to 8 from 15. Now increases base cost multiplier by 1 every 30 levels</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png" align="middle"><b> Ancestral Hourglass</b></p>
                    <p><b>Old Effect</b>: Lower Lineage cost exponent based on Reincarnations made.</p>
                    <p><b>Old Formula</b>: (x ^ (0.9 - 0.01 * (((y - 20) ^ 1.4) - z / 4)) / 10), where x is hours this game, y is lineage level and z is reincarnations. (reset when upgrading lineage),</p>
                    <p><b>New Effect</b>: Lower Lineage cost multiplier based on Reincarnations made.</p>
                    <p><b>New Formula</b>: (0.01 * R), R is Reincarnations made.</p>
                    <p><b>Old Chance:</b>: (x / 10000000000000000 (10 QA))%, where x is FC chance.</p>
                    <p><b>New Chance:</b>: 2 * (x / 10000000000000000 (10 QA))%, where x is FC chance.</p>
                    <p><b>Lineage Cost Formula</b>: (25 * 10 ^ (8 + level - hourglass.formula)) ^ 0.9 (if ancient heirloom).</p>
                    <p>The base costs for lineages are 25 Qa (2.5e16) Faction Coins and each level costs 10 times more. The Ancient Heirloom reduces the cost of lineages that aren't at the maximum level by raising them to the 0.9th power, making the cost multiplier 10^0.9 or 7.943 instead.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SparkofLifeArtifact.png" align="middle"> Spark of Life</b></p>
                    <p><b>Old Chance</b>: (ln(1 + x) ^ 2 / 12000)%, where x is FC collected this game.</p>
                    <p><b>New Chance</b>: 2 * (ln(1 + x) ^ 2 / 12000)%, where x is FC collected this game.</p>
                    <br/>
                    <p><b>Artifacts Sets</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonSet.png" align="middle"><b> Dragon Set</b></p>
                    <p><b>Old Effect</b>: Increase the production of Non-Unique buildings based on Faction Coins found in this game.</p>
                    <p><b>Old Formula</b>: (16 * log10(1 + x) ^ 2), where x is Faction Coins found.</p>
                    <p><b>New Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
                    <p><b>New Formula</b>: (0.75 * ln(x) ^ 2.25), where x is spells cast in this Reincarnation.</p>
                    <hr>
                    <p><b>Challenges</b></p>
                    <p><b>Druid Challenge 2</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BalancedCurrentChallenges.png" alt="Balanced Current" align="middle"> <b>Balanced Current</b></p>
                    <p><b>Old Effect</b>: Mana regeneration is increased by 1% for every 200 Stone Pillars you own</p>
                    <p><b>New Effect</b>: Mana regeneration is increased by 1% for every 5000 buildings.</p>
                    <br/>
                    <p><b>Druid Challenge 3</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/EldritchArchitectureChallenges.png" alt="Eldritch Architecture" align="middle"> <b>Eldritch Architecture</b></p>
                    <p><b>Old Effect</b>: You gain 1.5 additional max mana for every 4 Labyrinths owned. (Ingame tooltip says 1.25 max mana but is wrong)</p>
                    <p><b>New Effect</b>: You gain 1.5 additional max mana for every 100 buildings.</p>
                    <br/>
                    <p><b>Druid Challenge 4</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/OverflowingManaChallenges.png" alt="Overflowing Mana" align="middle"> <b>Overflowing Mana</b></p>
                    <p><b>New Name</b>: Overflowing Magic</p>
                    <p><b>Old Effect</b>: All spell durations are increased based on Maximum Mana. Cannot exceed a bonus of 100,000%.</p>
                    <p><b>Old Formula</b>: (0.005 * x ^ 0.85), where x is max mana.</p>
                    <p><b>New Effect</b>: Increase Non-Unique buildings production based on the duration of your longest spell. Does not suffer from Ascension penalties.</p>
                    <p><b>New Formula</b>: (75 * x ^0.75), where x is the duration of your longest spell.</p>
                    <br/>
                    <p><b>Druid Challenge Final Reward</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/PrimalBalanceChallenges.png" alt="Primal Balance" align="middle"> <b>Primal Balance</b></p>
                    <p><b>Effect</b>: Grand Balance affects extra buildings based on mana produced in this R.</p>
                    <p><b>Formula</b>: (0.00001 * x) ^ (0.2 - 0.025 * A), where x is mana produced (This Reincarnation) and A is Ascension stat.</p>
                    <p><b>Added Effect</b>: When the amount of additional targets exceeds 11, increase the production of all affected buildings based on the exceeding amount.</p>
                    <p><b>Formula</b>: (3 * (x - 10) ^ 1.5), where x is the amount of additional targets, not A-nerfed.</p>
                    <br/>
                    <p><b>Faceless Challenge 2</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/MysticMazeChallenges.png" alt="Mystic Maze" align="middle"> <b>Mystic Maze</b></p>
                    <p><b>Old Effect</b>: You gain +10 max mana for every 20 labyrinths built.</p>
                    <p><b>New Effect</b>: You gain +10 max mana for every 500 buildings.</p>
                    <br/>
                    <p><b>Drow Challenge 4</b>:</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TrainedAssasinsChallenges.png" alt="Trained Assassins" align="middle"> <b>Trained Assassins</b></p>
                    <p><b>Old Effect</b>: Increase your Offline Time (This Game) based on spells cast in this game.</p>
                    <p><b>Old Formula</b>: (0.2 * x ^ 0.8) where x is spells cast in this game.</p>
                    <p><b>Old Effect</b>: Increase your Offline Time (This Game) based on spells cast in this R.</p>
                    <p><b>New Formula</b>: (8 * log10(x) ^ 4) where x is spells cast in this R.</p>
                    <br/>
                    <p><b>Dragon Challenge 1</b>:</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SkyMonarchChallenges.png" alt="Sky Monarch" align="middle"> <b>Sky Monarch</b></p>
                    <p><b>Effect</b>: Mutiplicatively increase faction coin chance by 12% per Lightning Strike tier bought.</p>
                    <p><b>Old Effect</b>: Also increase Post-Ascension bonuses for Titan Drill and Titan Sized Walls.</p>
                    <p><b>Old Formula</b>: (250000^2.4)% and (25000^2.4)%</p>
                    <p><b>New Effect</b>: Also increase Post-Ascension bonuses for Titan Drill by 100x and Titan Sized Walls 10x.</p>
                    <br/>
                    <p><b>Dragon Challenge 2</b>:</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BarkscalesChallenges.png" alt="Barkscales" align="middle"> <b>Barkscales</b></p>
                    <p><b>Old Effect</b>: Increase Stone Pillars production based on the amount of Grand Balance targets.</p>
                    <p><b>Old Formula</b>: (6000 * x ^ 1.75), where x is number of targets.</p>
                    <p><b>New Effect</b>: Increase Non-Unique Buildings production based on the amount of Grand Balance targets. Does not suffer from Ascension penalties.</p>
                    <p><b>New Formula</b>: (20 * x ^ 2), where x is number of targets.</p>
                    <p><b>Old Effect</b>: Also reduces all Spell Tier upgrade costs based on Grand Balance activity time in this game.</p>
                    <p><b>New Effect</b>: Also reduces all Spell Tier upgrades costs based on Grand Balance activity time in this R.</p>
                    <p><b>Formula</b>: max(0, (1-t/28)^9) t is Grand Balance activity time in days.</p>
                    <br/>
                    <p><b>Dragon In-Game Challenge Final Reward</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/PrismaticBreathChallenges.png" alt="Prismatic Breath" align="middle"> <b>Prismatic Breath</b></p>
                    <p><b>Old Effect</b>: While all 5 breaths are active, Reincarnations count double for all purposes.</p>
                    <p><b>New Effect</b>: While all 5 breaths are active, Reincarnations count 50% more.</p>
                    <hr>
                    <p><b>Unique Buildings</b>:</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FleshWorkshopUniqueBuilding.png" alt="Flesh Workshop" align="middle"></p>
                    <p><b>Effect</b>: Increase production based on mana regen.</p>
                    <p><b>Old Formula</b>: (15 * x ^ 0.65), where x is mana regen per second.</p>
                    <p><b>New Formula</b>: (10 * x ^ 0.6), where x is mana regen per second.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/HolySiteUniqueBuilding.png" alt="Holy Site" align="middle"></p>
                    <p><b>Effect</b>: Increase production based on time spent as good.</p>
                    <p><b>Old Formula</b>: (0.08 * x ^ 0.8), where x is time in second as good in this R.</p>
                    <p><b>Old Formula</b>: (x ^ 0.85), where x is time in second as good in this R.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SwarmingTowersUniqueBuilding.png" alt="Swarming Towers" align="middle"></p>
                    <p><b>Effect</b>: Increase production based on the amount of active spells.</p>
                    <p><b>Old Formula</b>: (0.4 * x ^ 2.4)%, where x is active spells.</p>
                    <p><b>New Formula</b>: (0.5 * x ^ 2.5)%, where x is active spells.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/PavillionUniqueBuilding.png"></p>
                    <p>Pavilion now replaces Tier 4 buildings instead of Tier 5</p>
                    <p><b>Old buildings</b>: Upgraded from Orcish Arena/Stone Pillars/Knights Jousts</p>
                    <p><b>New buildings</b>: Upgraded from Slave Pen/Warrior Barracks/Deep Mine</p>
                    <hr>
                    <p><b>Bloodline Changes</b></p>
                    <p><b>Old</b>: Bloodlines appears at the 7th reincarnation and require 100 Faction Upgrades purchased. (any 1 faction)</p>
                    <p><b>New</b>: Bloodlines appears at the 7th reincarnation. (No longer require 100 of a single faction upgrades)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ArchonBloodline.png" align="middle"> <b>Archon</b></p>
                    <p><b>Effect</b>: Gain additional research slots based on time spent this game.</p>
                    <p><b>Old Formula</b>: (1 + floor(0.5 * ((1 + x / 10800) ^ 0.5 - 1))), where x is time spent this game.</p>
                    <p><b>New Formula</b>: (1 + floor(0.5 * ((1 + x / 21600) ^ 0.5 - 1))), where x is time spent this game.</p>
                    <hr>
                    <p><b>Lineage and Perk Changes</b></p>
                    <p><b>All Perk 5</b></p>
                    <p><b>Old Requirements</b>: Reach Lineage Level 50.</p>
                    <p><b>New Requirements</b>: Reach Lineage Level 45.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk4.png" align="middle"><b> Fairy Perk 4</b></p>
                    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
                    <p><b>Old Effect</b>: While Fairy Chanting is active, further increase your temporary assistants by 8% every 5 minutes of its duration.</p>
                    <p><b>New Effect</b>: While Fairy Chanting is active, further increase your temporary assistants based on its duration.</p>
                    <p><b>Old Formula</b>: (8 * Floor (x/300)), where x is Fairy Chanting duration in seconds.</p>
                    <p><b>New Formula</b>: (2.5 * (x * 30) ^ 0.5), where x is Fairy Chanting duration in seconds.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk5.png" align="middle"> <b>Drow Perk 5</b></p>
                    <p><b>Effect</b>: Maximum Mana counts 300% more.</p>
                    <p><b>Added Effect</b>: Removes 1 Ascension penalty from Call to Arms.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk1.png" align="middle"><b> Goblin Perk 1</b></p>
                    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
                    <p><b>Effect</b>: When using Goblin Bloodline, Tax Collections are worth more seconds based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 0.35), where x is amount of assistants you own.</p>
                    <p><b>New Formula</b>: (0.75 * x ^ 0.25), where x is amount of assistants you own.</p>
                    <br/>
                    <p><b>Goblin</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk5.png" align="middle"> <b>Goblin Perk 5</b></p>
                    <p><b>Old Effect</b>: Faction Coin find chance counts 1000% more.</p>
                    <p><b>New Effect</b>: Increase Faction Coin Find Chance by 1000%.</p>
                    <br/>
                    <p><b>Titan</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanLineage.png" align="middle"><b> Titan Lineage</b></p>
                    <p><b>Old Effect</b>: Royal Exchanges count 100% more per level.</p>
                    <p><b>New Effect</b>: Increase Royal Exchange bonus by 200% for every level.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk1.png" align="middle"><b> Titan Perk 1</b></p>
                    <p><b>Old Effect</b>: Reduces spell costs by 25%.</p>
                    <p><b>New Effect</b>: Removes 1 Ascension penalty from Titan Bloodline.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk3.png" align="middle"><b> Titan Perk 3</b></p>
                    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
                    <p><b>Old Effect</b>: All tier 4 buildings are boosted by 100M% (1e8%) and all tier 7 buildings are boosted by 1M% (1e6%) for every 765 Unique Buildings.</p>
                    <p><b>New Effect</b>: Increase the base production of tier 4 and tier 7 buildings based on Unique Buildings owned.</p>
                    <p><b>New Formula</b>: (0.01 * x and y), where x is tier 4 and tier 7, y is Unique Buildings owned.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk5.png" align="middle"> <b>Titan Perk 5</b></p>
                    <p><b>Effect</b>: Royal Exchanges count 500% more.</p>
                    <p><b>Added Effect</b>: Removes 1 Ascension penalty from Royal Exchanges.</p>
                    <br/>
                    <p><b>Faceless</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessLineage.png" align="middle"><b> Faceless Lineage</b></p>
                    <p><b>Old Effect</b>: Increase Max Mana by 1.5% per level.</p>
                    <p><b>New Effect</b>: Increase the duration of all spells based on lineage level</p>
                    <p><b>New Formula</b>: (x ^ 2.25)%, where x is lineage level.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk4.png" align="middle"><b> Druid Perk 4</b></p>
                    <p><b>Effect</b>: Grand Balance lasts longer based on the amount of assistants you own.</p>
                    <p><b>Formula</b>: (x ^ 0.5) ^ (1 + 0.01 * y), where x is amount of assistants you own.</p>
                    <p><b>Effect</b>: Also, while Grand Balance is active, increase the production of its targets based on Grand Balance duration.</p>
                    <p><b>Old Formula</b>: (2.25 * ln(1 + x) ^ 2.25), where x is spell duration in seconds and y is amount of grand balance targets.</p>
                    <p><b>New Formula</b>: (3 * ln(1+x) ^ 3), where x is spell duration in seconds and y is amount of grand balance targets.</p>
                    <br/>
                    <p><b>Djinn</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk1.png" align="middle"> <b>Djinn Perk 1</b></p>
                    <p><b>Old Effect</b>: While using Djinn Bloodline, Catalyst casts in this game also increase Limited Wish counter for the purpose of increasing its bonus.</p>
                    <p><b>Added Effect</b>: All spells cost 25% less.</p>
                    <hr>
                    <p><b>Faction Upgrade Changes</b>:</p>
                    <style>
                        div#images {
                            width: 100%;
                            text-align: left;
                        }

                        div#images div {
                            display: inline-block;
                        }
                    </style>
                    <p><b>Neutral Trade Treaties</b></p>
                    <div id="images">
                        <div>
                            <center><img src="http://musicfamily.org/realm/Factions/picks/TitansTradeTreatyFactionUpgrade.png" /></center>
                            <center><b>Titan</b></center>
                        </div>
                        <div>
                            <center><img src="http://musicfamily.org/realm/Factions/picks/DruidsTradeTreatyFactionUpgrade.png" /></center>
                            <center><b>Druid</b></center>
                        </div>
                        <div>
                            <center><img src="http://musicfamily.org/realm/Factions/picks/FacelessTradeTreatyFactionUpgrade.png" /></center>
                            <center><b>Faceless</b></center>
                        </div>
                    </div>
                    <p><b>Old Cost</b>: 500 Faction Coins of 2 Factions</p>
                    <p><b>New Cost</b>: 250 Faction Coins of 2 Factions</p>
                    <br/>
                    <p><b>Angel</b>:</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelicFortitude.png" alt="Angelic Fortitude" align="middle"> <b>Angelic Fortitude</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the sum of all your spells' activity time this R.</p>
                    <p><b>Old Formula</b>: (0.07 * x ^ 0.7), where x is seconds in current spells.</p>
                    <p><b>New Formula</b>: (0.3 * x ^ 0.7), where x is seconds in current spells.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png" alt="Seraphim Wings" align="middle"> <b>Seraphim Wings</b></p>
                    <p><b>Old Effect</b>: Increase Mana Regeneration, Faction Coin find chance and assistants by 160%.</p>
                    <p><b>New Effect</b>: Multiplicatively increase Maximum Mana, Mana Regeneration, Faction Coin find chance and assistants by 200%.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" alt="Angels Union" align="middle"> <b>Angels Union</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
                    <p><b>Old Formula</b>: (4 * ln(x) ^ 2.25 + ln(y) ^ 2.25), where x is mana spent this game and y is mana regeneration.</p>
                    <p><b>New  Effect</b>: Increase Mana Regeneration based on mana produced in this game.(Multiplicative)</p>
                    <p><b>New Formula</b>: 2.5 * ln(1 + x) ^ 2.5, where x is mana spent this game.</p>
                    <br/>
                    <p><b>Drow</b>:</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BladeDanceFactionUpgrade.png align="middle"> Blade Dance</b></p>
                    <p><b>Cost</b>: 50 Spd (5E55)</p>
                    <p><b>Old Effect</b>: Part of the Combo Strike chain bonus is applied passively.</p>
                    <p><b>Old Formula</b>: x, where x is your current Combo Strike bonus.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings based on Combo Strike casts in this game.</p>
                    <p><b>New Formula</b>: (30 * x ^ 0.9), where x is Combo Strike casts in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HonorAmongKillersFactionUpgrade.png" align="middle"> Honor Among Killers</b></p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: floor(2 * x ^ 0.9), where x is your Assistants stat.</p>
                    <p><b>New Formula</b>: (100 * x ^ 0.5), where x is your Assistants stat.</p>
                    <br/>
                    <p><b>Makers</b>:</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/StoneServants.png" align="middle"> Stonecarving</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
                    <p><b>Old Formula</b>: (0.03 * (x * (y + z)) ^ 0.7), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <p><b>New Formula</b>: (30 + 0.03 * (x * (y + z)) ^ 0.7), where x is excavations done this R (NOT current excavation count), y is free resets this R, and z is ruby resets this R.</p>
                    <br/>
                    <p><b>Archon</b>:</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Absentmindedness.png" align="middle"> Absent-mindedness</b></p>
                    <p><b>Effect</b>: Increase Offline bonus based on Excavation Resets made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (3 * (x + y) ^ 3), where x is free resets this R and y is ruby resets this R.</p>
                    <p><b>New Formula</b>: (30 + 3 * (x + y) ^ 3), where x is free resets this R and y is ruby resets this R.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PurityofForm.png" align="middle"> Purity of Form</b></p>
                    <p><b>Old Effect</b>: Lineage levels count 300% more for all purposes.</p>
                    <p><b>New Effect</b>: Lineage levels count 300% more for all purposes. Increase Precognition base and scaling.</p>
                    <p><b>New Formula</b>: (1.25 * ln(x) ^ 1.5), where x is mana produced in this game.</p>
                    <hr>
                    <p><b>Heritage</b></p>
                    <p><b>Advanced Heritages</b>: Cost reduced from 7.5 Oc (7.5e27) to 1 Sp (1e24) faction coins</p>
                    <br/>
                    <p><b>Elite Heritages</b>: Cost reduced from 1 Td (1e42) to 1 Ud (1e36) faction coins</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedElvenHeritage.png" align="middle"> Advanced Elven Heritage</b></p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.4), where x is amount of clicks this reincarnation.</p>
                    <p><b>New Formula</b>: (0.2 * ln(x) ^ 2), where x is amount of clicks this reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDruidHeritage.png" align="middle"> Advanced Druid Heritage</b></p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells durations.</p>
                    <p><b>Old Formula</b>: (0.01 * x ^ 0.85)%, where x is the sum of all your spell durations.</p>
                    <p><b>New Formula</b>: (9 * x ^ 0.3)%, where x is the sum of all your spell durations.</p>
                    <hr>
                    <p><b>Elite Mask</b>:</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonMask.png" align="middle"> Archon Mask</b></p>
                    <p><b>Old Effect</b>: Increase Faction Coin find chance by 2000%.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance by 200%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnMask.png" align="middle"> Djinn Mask</b></p>
                    <p><b>Old Effect</b>: Increase Maximum Mana by 750%.</p>
                    <p><b>New Effect</b>: Increase Maximum Mana by 150%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersMask.png" align="middle"> Makers Mask</b></p>
                    <p><b>Effect</b>: Increase the production of Non-Unique buidings by 10000%.</p>
                    <p><b>New Effect</b>: Increase the production of Non-Unique buidings by 10000% and gain 1 M (1e6) assistants.</p>
                    <hr>
                    <p><b>Research Changes</b></p>
                    <p><b>RP Production</b></p>
                    <p><b>Old Formula</b>: 100000 * (1 + 3.5 * x ^ 0.7), where x is RP total of facility affinities.</p>
                    <p><b>New Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
                    <br/>
                    <p><b>Template builds are now sorted alphabetically</b></p>
                    <br>
                    <p><b>Spellcraft</b></p>
                    <p><b>S200</b>: Cryomancy</p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on your current mana (the less mana, the better bonus).</p>
                    <p><b>Old Formula</b>: round((100 - x) ^ 1.75)%, where x is percentage of max mana.</p>
                    <p><b>New Effect</b>: Increase Spell Duration based on mana produced (this game).</p>
                    <p><b>New Formula</b>: (2 * ln(x) ^ 1.75)%, where x is mana produced (this game).</p>
                    <br/>
                    <p><b>S330</b>: Reverberation</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.</p>
                    <p><b>Formula</b>: (375 * 2 ^ x)%, where x is the number of spells currently active.</p>
                    <p><b>Added Cap</b>: Now capped at 300 spells.</p>
                    <br/>
                    <p><b>S2875</b> Scholarship</p>
                    <p><b>Old For</b> Mercenary</p>
                    <p><b>New For</b> Mercenary-Good alignment only</p>
                    <p><b>Old Effect</b>: Increases the production of Non-Unique buildings by 3.5% per Unique building.</p>
                    <p><b>New Effect</b>: Increases the production of Non-Unique buildings by 5% per Unique building.</p>
                    <br/>
                    <p><b>Craftsmanship</b></p>
                    <p><b>C400</b> - <b>For</b> All Factions - <b>Research Name</b>: Gravitation</p>
                    <p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.</p>
                    <p><b>Formula</b>: floor(3.5 * ln^3(x + 1)), where x is your Faction Coins Gained (This Game) stat.</p>
                    <p><b>Old Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 175%.</p>
                    <p><b>New Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 100%.</p>
                    <br/>
                    <p><b>C3000</b> Customizing</p>
                    <p><b>Old For</b> Mercenary</p>
                    <p><b>New For</b> Mercenary-Neutral alignment only</p>
                    <p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.</p>
                    <p><b>Old Formula</b>: (1.5 * x ^ 1.5), where X is artifacts you own.</p>
                    <p><b>New Formula</b>: (2 * x ^ 2), where X is artifacts you own.</p>
                    <br/>
                    <p><b>Divine</b></p>
                    <p><b>D205</b>: Communion</p>
                    <p><b>Old Effect</b>: Increase Holy Light duration by 110 seconds.</p>
                    <p><b>New Effect</b>: Increase Holy Light duration by 300 seconds.</p>
                    <br/>
                    <p><b>Old D245</b>: Soulrending</p>
                    <p><b>New D245</b>: Sanctification</p>
                    <p><b>Note</b>: This was a name swap only</p>
                    <br/>
                    <p><b>Old D1375</b> Sanctification</p>
                    <p><b>New D1375</b> Soulrending</p>
                    <p><b>Note</b>: This was a name swap only</p>
                    <br/>
                    <p><b>D2775</b> Intervention</p>
                    <p><b>Effect</b>: Increases the production of Unique Building based on time spent with Mercenaries.</p>
                    <p><b>Old Formula</b>: (0.1 * x ^ 0.7)%, where x is time spent with Mercenary.</p>
                    <p><b>New Formula</b>: (10 * x ^ 0.7)%, where x is time spent with Mercenary.</p>
                    <br/>
                    <p><b>Economics</b></p>
                    <p><b>E1425</b>: Rarity</p>
                    <p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</p>
                    <p><b>Old Formula</b>: (1.65 * x ^ 1.65)%, where x is artifacts found. (multiplicative)</p>
                    <p><b>New Formula</b>: (1.25 * x ^ 1.25), where x is artifacts found.</p>
                    <br/>
                    <p><b>E3300</b> Estates</p>
                    <p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.</p>
                    <p><b>Added Effect</b>: Ascension 3: Gain all the Unique Buildings that match your alignments.</p>
                    <br/>
                    <p><b>Alchemy</b></p>
                    <p><b>A270</b>: Synthesis</p>
                    <p><b>Old Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game.</p>
                    <p><b>Old Formula</b>: floor(12 * ln(1 + x)) / 10, where x is your Faction Coins Gained (This Game) stat.</p>
                    <p><b>New Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.</p>
                    <p><b>New Formula</b>: (1.25 * ln(1+x) ^ 1.25), where x is Factions Coins found (this game).</p>
                    <br/>
                    <p><b>A400</b>: Bloodspring</p>
                    <p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.</p>
                    <p><b>Old Note</b>: Works for Elite Bloodline when you're an elite faction.</p>
                    <p><b>New Note</b>: Provides Prestige Bloodline for Elite Factions from R125 to R129, MAD bloodlines at R130.</p>
                    <br/>
                    <p><b>A2950</b>: Combination</p>
                    <p><b>Effect</b>: Select an additional bloodline.</p>
                    <p><b>Effect</b>: You also gain all the base effect of its respective Lineage.</p>
                    <p><b>Added Effect</b>: Combination Bloodline now affected by R60/R115 power.</p>
                    <br/>
                    <p><b>A3400</b> Chemistry</p>
                    <p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.</p>
                    <p><b>Formula</b>: (3 * x ^ 2.25), where x is total Lineage levels.</p>
                    <p><b>Old Effect</b>: Also increases Faction Coin find chance by a multiplicative 350%.</p>
                    <p><b>New Effect</b>: Also increases Faction Coin find chance by a multiplicative 300%.</p>
                    <br/>
                    <p><b>Warfare</b></p>
                    <p><b>W275</b> Domination</p>
                    <p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game.(This R)</p>
                    <p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.</p>
                    <p><b>Old Formula</b>: floor(125 * x ^ 0.75), where x is your Assistants (Max) stat.</p>
                    <p><b>New Formula</b>: (200 * x ^ 0.55), where x is your Assistants (Max) stat.</p>
                    <br/>
                    <p><b>W1275</b>: Authority</p>
                    <p><b>Old Effect</b>: Increase the production of Non-Unique buildings based on the percentage of trophies you unlocked.</p>
                    <p><b>Old Formula</b>: (0.2 * x ^ 2)%, where x is percent of trophies unlocked</p>
                    <p><b>New Effect</b>: Increase the duration of all spells based on the amount of Non-Unique buildings you own.</p>
                    <p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Non-Unique buildings you own.</p>
                    <br/>
                    <p><b>W1375</b> Scavenging</p>
                    <p><b>Old Effect</b>: Increases Faction Coin find chance by a multiplicative 275%.</p>
                    <p><b>New Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.</p>
                    <p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (2500 * x ^ 0.425), where x is assistants</p>
                    <p><b>New Formula</b>: (100 * x ^ 0.5), where x is assistants</p>
                    <br/>
                    <p><b>W3050</b> Flanking</p>
                    <p><b>Old For</b> Mercenary</p>
                    <p><b>New For</b> Mercenary-Evil alignment only</p>
                    <p><b>Effect</b>: Increases the production of buildings one tiers directly above or below a Unique Building based on the amount of assistants you own.</p>
                    <p><b>Old Formula</b>: (0.2 * x ^ 0.7), where x is assistants.</p>
                    <p><b>New Formula</b>: (2 * x ^ 0.8), where x is assistants.</p>
                    <hr>
                </div>
            </div>
        </div>
        <?php include "../scripts/footer.html"; ?>
