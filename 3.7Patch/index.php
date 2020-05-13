<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>3.7 Patches/Updates</h6>
        <br/>
         <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.7.4 APR 3, 2020</a></b></p>
                <div class="autohide">
        <p><b>Global Reminder</b>: The Easter Event will be starting on Apr 09th 2020, 12.01 PM UTC and will end on Apr 16th 2020, 6.59 PM UTC.</p>
        <p>Forbidden Research branch now correctly adds to the Research Points stat.</p>
        <p>Rough Stone Artifact now correctly requires the Survey Equipment upgrade.</p>
        <p>Hard Reset now correctly resets spell timers and all stats.</p>
        <p>Stats panel layout improved.</p>
        <p>Mana Bar colors, Share Benefits tier pictures, tooltips, and various other minor issues have been fixed.</p>
                </div>
            </div>
            </div>
         <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.7.3 January 31, 2020</a></b></p>
                <div class="autohide">
        <br/>
        <p><b>Global Reminder</b>: The Valentine Event will be starting on Feb 12th 2020, 1.01 PM UTC and will end on Feb 16th 2020, 7.59 PM UTC.</p>
        <p><b>ADDED</b>: A NEW VALENTINE FEAT, unlocking new cosmetic options.</p>
        <p><b>Fixed</b>: Heart per second production rate for Valentine.</p>
        <p><b>Fixed</b>: several event tooltips regarding stack sizes.</p>
        <p><b>Fixed</b>: Autocast tutorials locking game progress.</p>
        <p><b>ADDED</b>: graphics for later Share Benefits tiers.</p>
                </div>
            </div>
            </div>
         <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.7.2.1 January 16, 2020</a></b></p>
                <div class="autohide">
        <br/>
        <p><b>Fixed</b>: S180 unlock</p>
        <p><b>Fixed</b>: W5375 formula, was a direct multiplier rather than a percentage multiplier.</p>
        <p><b>Fixed</b>: Stats panel layout (Mobile)</p>
        <p><b>Fixed</b>: Spell tutorial not advancing when using hotkeys</p>
        <p><b>Fixed</b>: Research branches in Ascension 2 now show the correct amount of slots.</p>
        <p><b>Added</b>: Spiritual Surge and Catalyst in the Magic section of the Stats panel.</p>
        <p><b>Added</b>: Spell Tier levels are now visible in the spells tooltips.</p>
        <p><b>Added</b>: Lineage levels are now shown in the Stats panel.</p>
        <p><b>Added</b>: NEW REINCARNATION POWER at Reincarnation 150</p>
        <p><b>Effect</b>: Unique Buildings count more for Call to Arms purposes based on Reincarnations made.</p>
        <p><b>Formula</b>: (buildings * R)</p>
        <p><b>Fixed</b>: Rough Stone artifact, Unlock chance and unlock requirements.</p>
        <p><b>Fixed</b>: Mercenary now count their Tax Collection alternatives as faction spells, for the purpose of several upgrades' formulas.</p>
        <p><b>Changed</b>: Buy10000 is no longer available in Ascension 0.</p>
        <br/>
        <p><b>Fixed</b>: <b>Drow Challenge 1</b>: (Organized Crime)</p>
        <p>Now requires Honor Among Killers purchased, as intended.</p>
        <br/>
        <p><b>Mercenary Set</b></p>
        <p><b>Old Effect</b>: Lineage levels count 50% more.</p>
        <p><b>New Effect</b>: Lineage levels count 25% more.</p>
        <br/>
        <p><b>Archon Lineage</b></p>
        <p><b>Old Effect</b>: Increase Faction Coin find chance multiplicatively by 25% per level.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance multiplicatively by 20% per level.</p>
        <br/>
        <p><b>Archon Challenge 4</b>: (Time Merge)</p>
        <p><b>Effect</b>: Increase Unique Building production based on time spent in this game.</p>
        <p><b>Old Formula</b>: (3.5 * log10(1 + x) ^ 3.5), where x is time spent in this game.</p>
        <p><b>New Formula</b>: (8 * log10(1 + x) ^ 4), where x is time spent in this game.</p>
        <br/>
        <p><b>Djinn Challenge 4</b>: (Worldly Desires)</p>
        <p><b>Old Challenge</b>: Have a spell duration of at least 1 year (365 Days).</p>
        <p><b>New Challenge</b>: Have a spell duration of at least 275 Days.</p>
        <p><b>Old Effect</b>: Multiplicatively increase Assistants, production bonus from Gems and Maximum Mana by 8%, 88% and 888%, targets chosen randomly and refreshing every 88 seconds.</p>
        <p><b>New Effect</b>: Multiplicatively increase Assistants, production bonus from Gems and Maximum Mana by 88%, 88% and 888%, targets chosen randomly and refreshing every 88 seconds.</p>
        <br/>
        <p><b>Spellcraft 5125</b>: (Spilling)</p>
        <p><b>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced.</p>
        <p><b>Old Formula</b>: (2.5 * ln(1 + x) ^ 2.5), where x is mana produced (This Game)</p>
        <p><b>New Formula</b>: (2 * ln(1 + x) ^ 2), where x is mana produced (This Game)</p>
        <br/>
        <p><b>Craftsmanship 5125</b>: (Restauration)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on assistants owned.</p>
        <p><b>Old Formula</b>: (0.75 * x ^ 0.25), where x is assistants owned.</p>
        <p><b>New Formula</b>: (0.5 * x ^ 0.25), where x is assistants owned.</p>
        <br/>
        <p><b>Craftsmanship 5375</b>: (Manufacture)</p>
        <p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on Clicks made in this game.</p>
        <p><b>Old Additive Formula</b>: (6.5 * x ^ 0.65), where x is clicks in this game.</p>
        <p><b>New Additive Formula</b>: (6 * x ^ 0.6), where x is clicks in this game.</p>
        <br/>
        <p><b>Craftsmanship 5625</b>: (Discovery)</p>
        <p><b>Effect</b>: Trophies and Artifacts count more based on excavations, including resets made in this game.</p>
        <p><b>Old Formula</b>: (0.5 * (x * (y + 1)) ^ 0.5), where x is excavations (This R) and y is excavation resets (This Game).</p>
        <p><b>New Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5), where x is excavations (This R) and y is excavation resets (This Game).</p>
        <br/>
        <p><b>Divine 5875</b>: (Birthright)</p>
        <p><b>Old Effect</b>: Gain the Bloodline effects of your <b>most</b> used non-mercenary faction. Based on time (This R), can give any vanilla, prestige or elite bloodline</p>
        <p><b>New Effect</b>: Gain the Bloodline effects of your <b>least</b> used non-mercenary faction. Based on time (This R), can give any vanilla, prestige or elite bloodline</p>
        <br/>
        <p><b>Economics 5875</b>: (Prosperity)</p>
        <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on your faction spell activity in this game.</p>
        <p><b>Old Formula</b>: (0.5 * x ^ 0.5), where x is your least used faction spell (This game)</p>
        <p><b>New Formula</b>: (0.4 * x ^ 0.4), where x is your least used faction spell (This game)</p>
        <br/>
        <p><b>Forbidden 6000</b>: (Inevitability)</p>
        <p><b>Effect</b>: Increase your next time head start based on time spent in this game.</p>
        <p><b>Changed</b></p>
        <p>Headstart is now capped at time spent in your current Reincarnation.</p>
        <p>No longer gives double time in this Reincarnation.</p>
        <p>No longer provides a headstart when Reincarnating.</p>
        <br/>
        <p><b>Share Benefits</b></p>
        <p>Tier 41 and above cost x4/x2.25 (with S1275) instead of x2/x1.5 (with S1275)</p>
                </div>
            </div>
            </div>
        <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.7.0 December 16, 2019</a></b></p>
                <div class="autohide">
        <br/>
        <p><b>Added</b>: Added a new Christmas feat and upgrade.</p>
        <p>Check <a target="_blank" href="http://musicfamily.org/realm/Events/"><b>Event</b></a> page once event starts.</p>
        <br/>
        <p><b>Changed A3 Only</b>: Research now has a budget system: Each branch is given a 3500 budget, and now research cost their number to buy.</p>
        <p><b>Changed</b>: Faction Research in A3 is no longer free.</p>
        <p><b>Changed</b>: Research Points cap increased to 7000 starting from A3-R175+.</p>
        <p><b>Formula</b>: Tiers FC cost for A3+ increased to (10 * (x + 1) ^ 10), where x is fc cost.</p>
        <br/>
        <br/>
        <p><b>New Artifacts</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/ForgottenRelic.png" align="middle"> Forgotten Relic</b></p>
        <p><b>Clue</b>: Research it!</p>
        <p><b>Description</b>: Intricate leylines of mana cover the surface of this stone, moving and flailing endlessly to create ever-different patterns.</p>
        <p><b>Requirement</b>: R175+</p>
        <p><b>Chance</b>: (x ^ 2 / 100000000000), where x is spent Research points.</p>
        <p><b>Effect</b>: Unlocks Research Facility upgrades</p>
        <p><b>Note</b>: Each Facility needs their respective artifact and this artifact to get their respective upgrade.</p>
        <br/>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/Apeiron.png" align="middle"> Apeiron</b></p>
        <p><b>Clue</b>: Be different.</p>
        <p><b>Description</b>: The source of everything. Can fit in the average pocket.</p>
        <p><b>Requirement</b>: R175, Mercenary, 15 different faction upgrades.</p>
        <p><b>Chance</b>: 0.1%</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Effect</b>: Unlocks new Research Facility</p>
        <p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
        <p><b>Upgrade Description</b>: Take advantage of the most ancient and secret arts to empower your production beyonds known limits.</p>
        <p><b>Upgrade Description</b>: Unlock the Forbidden research facility and increase Mercenary production by 100%, plus an additional bonus based on Forbidden research point. These upgrades will persist through abdications and reincarnations, providing a permanent bonus to all factions affected.</p>
        <p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/Forbidden.png" align="middle"> Forbidden (New Facility)</b></p>
        <p><b>Requirement</b>: Forgotten Relic, Apeiron artifact and upgrade.</p>
        <p><b>Effect</b>: Increase Mercenary production based on Forbidden research points. (Not A nerfed)</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/ManaLoom.png" align="middle"> <b>Mana Loom</b></p>
        <p><b>Clue</b>: Attracted by amassed mana reserves.</p>
        <p><b>Description</b>: Used to weave even the thinnest mana strings.</p>
        <p><b>Requirement</b>: R175, Chaos Alignment</p>
        <p><b>Chance</b>: (log10(x) ^ 3 / 50000), where x is mana produced (This Game)</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Requirement</b>: Forgotten Relic, Mana Loom artifact and upgrade.</p>
        <p><b>Upgrade Effect</b>: Expands the Spellcraft research facility, permanently increasing Spellcraft budget by 2500.</p>
        <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Fairy Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Factory.png" align="middle"> <b>Factory</b></p>
        <p><b>Clue</b>: Dig it manually.</p>
        <p><b>Description</b>: Mass-production is the way to go.</p>
        <p><b>Requirement</b>: R175, True Neutral Alignment</p>
        <p><b>Chance</b>: (log10(x) ^ 3 / 10000), where x is clicks (This Game)</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Requirement</b>: Forgotten Relic, Factory artifact and upgrade.</p>
        <p><b>Upgrade Effect</b>: Expands the Craftsmanship research facility, permanently increasing Craftsmanship budget by 2500.</p>
        <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Elven Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Mythos.png" align="middle"> <b>Mythos</b></p>
        <p><b>Clue</b>: Spells get sad when not used for a long time.</p>
        <p><b>Description</b>: Accurate historical list of every existing or non-existing deity.</p>
        <p><b>Requirement</b>: R175, Good Alignment</p>
        <p><b>Chance</b>: (x / 4320000), where x is minimum spell activity time. (This Reincarnation)</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Requirement</b>: Forgotten Relic, Mythos artifact and upgrade.</p>
        <p><b>Upgrade Effect</b>: Expands the Divine research facility, permanently increasing Divine budget by 2500.</p>
        <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Angel Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Vault.png" align="middle"> <b>Vault</b></p>
        <p><b>Clue</b>: Show your prowess as a Royal Trader.</p>
        <p><b>Description</b>: Never a place could be more secure.</p>
        <p><b>Requirement</b>: R175, Balance Alignment</p>
        <p><b>Chance</b>: (x / 100000000), where x is Royal Exchange Bonus.</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Requirement</b>: Forgotten Relic, Vault artifact and upgrade.</p>
        <p><b>Upgrade Effect</b>: Expands the Economics research facility, permanently increasing Economics budget by 2500.</p>
        <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Goblin Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Athanor.png" align="middle"> <b>Athanor</b></p>
        <p><b>Clue</b>: Archemy.</p>
        <p><b>Description</b>: The legendary oven that could smelt souls into matter.</p>
        <p><b>Requirement</b>: R175, Order Alignment</p>
        <p><b>Chance</b>: (x / 1000000), where x is Alchemy Research Points.</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Requirement</b>: Forgotten Relic, Athanor artifact and upgrade.</p>
        <p><b>Upgrade Effect</b>: Expands the Alchemy research facility, permanently increasing Alchemy budget by 2500.</p>
        <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Undead Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <br/>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Battlefield.png" align="middle"> <b>Battlefield</b></p>
        <p><b>Clue</b>: Would you think an army is enough to excavate this?</p>
        <p><b>Description</b>: An extremely accurate replica of a battle fought long ago.</p>
        <p><b>Requirement</b>: R175, Evil Alignment</p>
        <p><b>Chance</b>: (log10(x) ^ 3 / 20000), where x is the number of Assistants. (base and temporary, not invisible)</p>
        <p><b>Effect</b>: Gives upgrade with same name</p>
        <p><b>Upgrade Requirement</b>: Forgotten Relic, Battlefield artifact and upgrade.</p>
        <p><b>Upgrade Effect</b>: Expands the Warfare research facility, permanently increasing Warfare budget by 2500.</p>
        <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Demon Coins</p>
        <p><b>Note</b>: Upgrade only needs to be bought once.</p>
        <hr>
        <p><b>New Researches</b></p>
        <center>
            <p><b>Spellcraft</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Spellcraft.png" align="middle"> </p>
        </center>
        <p><b>S5125</b>: For all Factions</p>
        <p><b>Research Name</b>: Spilling</p>
        <p><b>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced.</p>
        <p><b>Formula</b>: (2.5 * ln(1 + x) ^ 2.5), where x is mana produced (This Game)</p>
        <br/>
        <p><b>S5375</b>: For Chaos</p>
        <p><b>Research Name</b>: Invocation</p>
        <p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.</p>
        <p><b>Formulas</b></p>
        <p><b>Additive</b>: (1000 + 80 * x ^ 0.8), where x is spell activity time in seconds.</p>
        <p><b>Multiplicative</b>: (0.6 * x ^ 0.6), where x is spell activity time in seconds.</p>
        <br/>
        <p><b>S5625</b>: For all Factions</p>
        <p><b>Research Name</b>: Leylines</p>
        <p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on assistants owned.</p>
        <p><b>Formula</b>: (0.65 * x ^ 0.35), where x is assistants</p>
        <br/>
        <p><b>S5875</b>: For all Factions</p>
        <p><b>Research Name</b>: Mirrors</p>
        <p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.</p>
        <p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game</p>
        <br/>
        <center>
            <p><b>Craftsmanship</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Craftsmanship.png" align="middle"> </p>
        </center>
        <p><b>C5125</b>: For all Factions</p>
        <p><b>Research Name</b>: Restaurantian</p>
        <p><b>Effect</b>: Increase the production of all buildings based on assistants owned.</p>
        <p><b>Formula</b>: (0.75 * x ^ 0.25), where x is assistants owned</p>
        <br/>
        <p><b>C5375</b>: For Neutral</p>
        <p><b>Research Name</b>: Manufacture</p>
        <p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on Clicks made in this game.</p>
        <p><b>Formulas</b></p>
        <p><b>Additive</b>: (6.5 * x ^ 0.65), where x is clicks in this game</p>
        <p><b>Multiplicative</b>: (x ^ 0.35), where x is clicks in this game</p>
        <br/>
        <p><b>C5625</b>: For all Factions</p>
        <p><b>Research Name</b>: Discovery</p>
        <p><b>Effect</b>: Trophies and Artifacts Count more based on excavation and excavation resets in this game.</p>
        <p><b>Formula</b>: (0.5 * (x * (y + 1)) ^ 0.5), where x is excavations (This R) and y is excavation resets (This Game)</p>
        <br/>
        <p><b>C5875</b>: For all Factions</p>
        <p><b>Research Name</b>: Genuineness</p>
        <p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.</p>
        <p><b>Formula</b>: (50 + 1.5 * x ^ 0.95), where x is the lowest lineage</p>
        <br/>
        <center>
            <p><b>Divine</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Divine.png" align="middle"> </p>
        </center>
        <p><b>D5125</b>: For all Factions</p>
        <p><b>Research Name</b>: Selection</p>
        <p><b>Effect</b>: Increase the production of Unique buildings based on Clicks in this game.</p>
        <p><b>Formula</b>: (x ^ 0.4), where x is clicks this game</p>
        <br/>
        <p><b>D5375</b>: For Good</p>
        <p><b>Research Name</b>: Zealotry</p>
        <p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges purchased in this game.</p>
        <p><b>Formula</b>: (0.75 * x ^ 0.75), where x is royal exchanges this game</p>
        <br/>
        <p><b>D5625</b>: For all Factions</p>
        <p><b>Research Name</b>: Prophecy</p>
        <p><b>Effect</b>: Empowers the effects of your faction's Set based on time spent with your least used faction. Lineage levels count more, by the same amount, for your faction’s Advanced Heritage.</p>
        <p><b>Formulas</b>: (0.3 * x ^ 0.7), where x is your least spent faction time</p>
        <br/>
        <p><b>D5875</b>: For all Factions</p>
        <p><b>Research Name</b>: Birthright</p>
        <p><b>Effect</b>: Gain the Bloodline effects of your most used non-mercenary faction.</p>
        <p><b>Note</b>: Based on time (This R), can give any vanilla, prestige or elite bloodline</p>
        <br/>
        <center>
            <p><b>Economics</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Economics.png" align="middle"> </p>
        </center>
        <p><b>E5125</b>: For all Factions</p>
        <p><b>Research Name</b>: Decentralization</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.</p>
        <p><b>Formula</b>: ((6 - 0.5 * T) ^ 2 * x ^ 0.85), where T is building tier and x is the number of (every) buildings you own</p>
        <br/>
        <p><b>E5375</b>: For Balance</p>
        <p><b>Research Name</b>: Whipround</p>
        <p><b>Effect</b>: Increase Royal Exchange bonus additively and multiplicatively based on Tax Collections cast in this game.</p>
        <p><b>Formulas</b></p>
        <p><b>Additive</b>: (x ^ 0.2), where x is tax collections (This game)</p>
        <p><b>Multiplicative</b>: (0.85 * x ^ 0.15), where x is tax collections (This game)</p>
        <br/>
        <p><b>E5625</b>: For all Factions</p>
        <p><b>Research Name</b>: Loan Sharking</p>
        <p><b>Effect</b>: Tax Collection is worth more based on Gold owned.</p>
        <p><b>Formula</b>: (log10(1 + x) ^ 1.8), where x is your current gold</p>
        <br/>
        <p><b>E5875</b>: For all Factions</p>
        <p><b>Research Name</b>: Prosperity</p>
        <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on your faction spell activity in this game.</p>
        <p><b>Formula</b>: (0.5 * x ^ 0.5), where x is the sum of your faction spells’ activity time (This game)</p>
        <p><b>Note</b>: Only checks the base faction spell of your faction(s). On mercs, scales off Share Benefits and the two chosen Faction Spells.</p>
        <br/>
        <center>
            <p><b>Alchemy</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Alchemy.png" align="middle"> </p>
        </center>
        <p><b>A5125</b>: For all Factions</p>
        <p><b>Research Name</b>: Putrefaction</p>
        <p><b>Effect</b>: Increase the production of Non-Unique buildings based on the longest time spent without abdicating in this Reincarnation.</p>
        <p><b>Formula</b>: (x ^ 0.75), where x is the longest time spent without abdicating (This R, can also be This Game)</p>
        <br/>
        <p><b>A5375</b>: For Order</p>
        <p><b>Research Name</b>: Albedo</p>
        <p><b>Effect</b>: Increase all spells duration based on spell casts in this game.</p>
        <p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game</p>
        <br/>
        <p><b>A5625</b>: For all Factions</p>
        <p><b>Research Name</b>: Reduction</p>
        <p><b>Effect</b>: Reduce all spells cost based on their individual duration.</p>
        <p><b>Formula</b>: Additive reduction: ((x/y) ^ 0.65), where x is duration and y is base duration.</p>
        <br/>
        <p><b>A5875</b>: For all Factions</p>
        <p><b>Research Name</b>: Equivalence</p>
        <p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on Faction Coin found in this game.</p>
        <p><b>Formula</b>: (log10(x) ^ 1.5), where x is faction coins this game</p>
        <br/>
        <center>
            <p><b>Warfare</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Warfare.png" align="middle"> </p>
        </center>
        <p><b>W5125</b>: For all Factions</p>
        <p><b>Research Name</b>: Sovereignty</p>
        <p><b>Effect</b>: Increase the production of two highest tier buildings based on assistants you own.</p>
        <p><b>Formula</b>: (x ^ 0.3), where x is assistants</p>
        <br/>
        <p><b>W5375</b>: For Evil</p>
        <p><b>Research Name</b>: Officers</p>
        <p><b>Effect</b>: Gain assistants multiplicatively based on amount of trophies unlocked.</p>
        <p><b>Formula</b>: (2.5 * x ^ 0.5), where x is trophies</p>
        <br/>
        <p><b>W5625</b>: For all Factions</p>
        <p><b>Research Name</b>: Concealment</p>
        <p><b>Effect</b>: Offline time counts more based on Mana Produced in this game.</p>
        <p><b>Formula</b>: (2.5 * ln(1 + x) ^ 2.5), where x is mana produced (This game)</p>
        <br/>
        <p><b>W5875</b>: For all Factions</p>
        <p><b>Research Name</b>: Patience</p>
        <p><b>Effect</b>: Time spent with Prestige Counts 500% more. Time spent with Elite factions Counts 1000% more.</p>
        <br/>
        <center>
            <p><b>Forbidden</b></p>
        </center>
        <center>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Forbidden.png" align="middle"> </p>
        </center>
        <p><b>F5250</b>: For all Factions</p>
        <p><b>Research Name</b>: Dreamwalking</p>
        <p><b>Effect</b>: Increase Offline Bonus based on time spent offline in this Reincarnation.</p>
        <p><b>Formula</b>: (0.7 * x ^ 0.7), where x is offline time (This R)</p>
        <br/>
        <p><b>F5500</b>: For all Factions</p>
        <p><b>Research Name</b>: Gathering</p>
        <p><b>Effect</b>: Additively increase production bonus from Gems based on your Faction Coin find chance.</p>
        <p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is faction coin find chance</p>
        <br/>
        <p><b>F5750</b>: For all Factions</p>
        <p><b>Research Name</b>: Corruption</p>
        <p><b>Effect</b>: Gain the base Union effect of your opposite Alignment.</p>
        <p><b>Note</b>: Neutral and Balance don’t have opposites so they stay the same</p>
        <br/>
        <p><b>F6000</b>: For all Factions</p>
        <p><b>Research Name</b>: Inevitability</p>
        <p><b>Effect</b>: Increase your next time head start based on time spent in this game.</p>
        <p><b>Formula</b>: (x ^ 0.75), where x is time spent (This Game)</p>
        <hr>
        <p><b>New Secret Trophy</b></p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/TrueHarlequin.png" align="middle"> <b>True Harlequin</b></p>
        <p><b>Requirement</b>: As a Mercenary, purchase one upgrade from 15 different factions.</p>
        <p><b>Effect</b>: Gives Upgrade with same name.</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the amount of different factions involved in your Mercenary upgrades.</p>
        <p><b>Formula</b>: (x ^ 3), where x is different upgrades from different factions (up to 3375% maximum possible).</p>
        <p><b>Cost</b>: 1e152 (100 Noqag)</p>
        <br/>
        <p><b>Changed</b></p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/God'sFingers.png" align="middle"> <b>God's Fingers</b></p>
        <p>Now a Secret Trophy.</p>
        <p><b>Old Requirement</b>: Reach 700 M (7e8) automatic clicks in this Reincarnation.</p>
        <p><b>New Requirement</b>: Reach 100 M (1e8) automatic clicks in this Reincarnation.</p>
        <p><b>Old Effect</b>: None</p>
        <p><b>New Effect</b>: Gives Upgrade with same name.</p>
        <p><b>Effect</b>: Clicks count 100% more and autoclicks 5 times per second.</p>
        <p><b>Cost</b>: 200 QiSxg (2e200), A1+ Free</p>
        <hr>
        <p><b>Changed Research</b></p>
        <p><b>E400 - Conversion</b></p>
        <p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.</p>
        <p><b>Old Formula</b>: floor(x ^ 0.95), where x is your Royal Exchange Bonus.</p>
        <p><b>New Formula</b>: (0.85 * floor(x ^ 0.85)), where x is your Royal Exchange Bonus.</p>
        <br/>
        <p><b>E1425 - Rarity</b></p>
        <p><b>Old Requirement</b>: 7 days playtime each with Titan, Druid and Faceless, Research A545, C1300</p>
        <p><b>New Requirement</b>: 5 days playtime each with Titan, Druid and Faceless, Research A545, C1300</p>
        <hr>
        <p><b>Changed Challenges</b></p>
        <p><b>Archon Challenge 2</b></p>
        <p><b>Effect</b>: Multiplicatively increase assistants based on Offline Bonus.</p>
        <p><b>Old Formula</b>: (1.75 * log10(1 + x) ^ 1.75), where x is offline bonus multiplier</p>
        <p><b>New Formula</b>: (2 * log10(1 + x) ^ 1.75), where x is offline bonus multiplier</p>
        <br/>
        <p><b>Archon Challenge 3</b></p>
        <p><b>Effect</b>: Reduce Royal Exchange cost multiplier by -0.02 and increase Royal Exchange bonus by 100%.</p>
        <p><b>Effect</b>: Multiplicatively increase time spent in this game based on Royal Exchanges bought.</p>
        <p><b>Old Formula</b>: (2.5 * ln(1 + x) ^ 1.25), where x is Royal Exchanges bought.</p>
        <p><b>New Formula</b>: (3 * ln(x) ^ 1.3), where x is Royal Exchanges bought.</p>
        <br/>
        <p><b>Archon Challenge 5</b></p>
        <p><b>Old Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 390% bonus.</p>
        <p><b>New Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 350% bonus.</p>
        <br/>
        <p><b>Djinn Challenge 2</b></p>
        <p><b>Effect</b>: Limited Wish casts count more based on Hellfire Blast casts in this game.</p>
        <p><b>Old Formula</b>: Multiplicative: (0.8 * x ^ 0.8), where x is Hellfire Blast casts (this game).</p>
        <p><b>New Formula</b>: Multiplicative: (0.78 * x ^ 0.78), where x is Hellfire Blast casts (this game).</p>
        <p><b>Effect</b>: Each time you cast an Evil spell, you gain additional casts equal to the amount of trophies you have.</p>
        <p><b>Old Formula</b>: Additive: (x ^ 0.7), where x is number of trophies. Applies only for real evil spells, adds casts directly to the spell’s casts.</p>
        <p><b>New Formula</b>: Additive: (x ^ 0.65), where x is number of trophies. Applies only for real evil spells, adds casts directly to the spell’s casts.</p>
        <br/>
        <p><b>Djinn Challenge 3</b></p>
        <p><b>Old Effect</b>: Makes Limited Wish scale faster based on Research Points used in this game.</p>
        <p><b>New Effect</b>: Increase the minimum value on which Limited Wish is based.</p>
        <p><b>New Formula</b>: (0.1 * x ^ 0.9), where x is research points spent.</p>
        <br/>
        <p><b>Demon Perk 2</b></p>
        <p><b>Old Challenge</b>: 5 days of HFB activity time (This R).</p>
        <p><b>New Challenge</b>: 2 days of HFB activity time (This R).</p>
        <br/>
        <p><b>Makers Challenge 2</b></p>
        <p><b>Effect</b>: Production bonus from Gems is increased multiplicatively based on Tax Collections cast in this game.</p>
        <p><b>Old Formula</b>: (0.7 * ln(1 + x) ^ 1.7), where x is number of Tax Collections. (This game)</p>
        <p><b>New Formula</b>: (ln(x) ^ 2), where x is number of Tax Collections. (This game)</p>
        <br/>
        <p><b>Makers Challenge 3</b></p>
        <p><b>Effect</b>: Assistants and Maximum Mana Infinite Spiral effects are also increased by Mana Regeneration.</p>
        <p><b>Old Formula</b>: (12.5 * (ln(1 + x * y) ^ 1.25), where x is max mana, y is mana regeneration.</p>
        <p><b>New Formula</b>: (12.5 * (ln(1 + x * y) ^ 1.3), where x is max mana, y is mana regeneration</p>
        <hr>
        <p><b>Changed Artifact Sets</b></p>
        <p><b>Fairy Set</b></p>
        <p><b>Effect</b>: Increase Farm, Inn and Blacksmith production based on number of assistants owned.</p>
        <p><b>Old Formula</b>: (0.65 * x ^ 0.65), where x is number of assistants owned.</p>
        <p><b>New Formula</b>: (x ^ 0.7), where x is number of assistants owned.</p>
        <br/>
        <p><b>Elf Set</b></p>
        <p><b>Old Effect</b>: Increase all building production based on total amount of Elven Lucks triggered (This R)(since unlock).</p>
        <p><b>New Effect</b>: Increase clicking reward based on the total amount of Elven Luck effects triggered.</p>
        <p><b>Formula</b>: (6 * x ^ 0.6), where x is amount of Elven Lucks triggered.</p>
        <p><b>New Effect</b>: Also autoclicks 10 times per second.(Affected by artifact set buffs)</p>
        <br/>
        <p><b>Angel Set</b></p>
        <p><b>Effect</b>: Additively increase Mana Regeneration based on highest amount of spells cast in a single game.</p>
        <p><b>Old Formula</b>: (3 * x ^ 0.3), where x is spells cast in a single game.</p>
        <p><b>New Formula</b>: (3.5 * x ^ 0.35), where x is spells cast in a single game.</p>
        <br/>
        <p><b>Dragon Set</b></p>
        <p><b>Effect</b>: Increase the duration of all spells based on spells cast in this Reincarnation.</p>
        <p><b>Old Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is spells cast in this Reincarnation.</p>
        <p><b>New Formula</b>: (1.75 * ln(x) ^1.25), where x is spells cast in this Reincarnation.</p>
        <br/>
        <p><b>Mercenary Set</b></p>
        <p><b>Effect</b>: Lineage levels count 100% more.</p>
        <p><b>Effect</b>: Lineage levels count 50% more.</p>
        <hr>
        <p><b>Changed Faction Upgrades</b></p>
        <p><b>Elven</b></p>
        <p><b>Camouflage (EL11)</b></p>
        <p><b>Old Effect</b>: Assistants and Clicks count 1,500% more for all purposes and increase assistant production based on assistant amount.</p>
        <p><b>Old Formula</b>: (0.75 * x ^ 0.75), where x is assistant count.</p>
        <p><b>New Effect</b>: Assistants and Clicks count 1,000% more for all purposes and increase assistant production based on assistant amount.</p>
        <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is assistant count.</p>
        <br/>
        <p><b>Undead</b></p>
        <p><b>Flesh Servants (Undead 10)</b></p>
        <p><b>Effect</b>: Increase assistants based on the amount of Flesh Workshops you own.</p>
        <p><b>Old Formula</b>: (1.25 * x ^ 0.7), where x is amount of Flesh Workshop owned.</p>
        <p><b>New Formula</b>: (1.25 * x ^ 0.75), where x is amount of Flesh Workshop owned.</p>
        <br/>
        <p><b>Zombie Apocalypse (Undead 11)</b></p>
        <p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
        <p><b>Old Formula</b>: (15 * x ^ 0.85), where x is offline time this R.</p>
        <p><b>New Formula</b>: (20 * x ^ 0.9), where x is offline time this R.</p>
        <hr>
        <p><b>Changed Faction Unions</b></p>
        <p><b>Fairy Union</b></p>
        <p><b>Effect</b>: Increase assistant production based on amount of Enchanted Fields, Inns and Blacksmiths if building count is even, or all other buildings if building count is odd.</p>
        <p><b>Old Even Formula</b>: (15 * x ^ 0.5), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
        <p><b>Old Odd Formula</b>: (15 * x ^ 0.5), where x is T4-T11 Buildings (If building count is odd)</p>
        <p><b>New Even Formula</b>: (6 * x ^ 0.6), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
        <p><b>New Odd Formula</b>: (6 * x ^ 0.6), where x is T4-T11 Buildings (If building count is odd)</p>
        <br/>
        <p><b>Undead Union</b></p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
        <p><b>Old Formula</b>: (75 * ln(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
        <p><b>New Formula</b>: (100 * ln(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
        <br/>
        <p><b>Faceless Union</b></p>
        <p><b>Effect</b>: Increase assistants additively based on amount of time spent as a random faction. Updates every 3 minutes.</p>
        <p><b>Old Formula</b>: (55 * x ^ 0.55), where x is random faction all time in seconds.</p>
        <p><b>New Formula</b>: (60 * x ^ 0.6), where x is random faction all time in seconds.</p>
        <br/>
        <p><b>Dwarven Chaos Union</b></p>
        <p><b>Effect</b>: Chaotically Multiplicatively increase assistant count based on spells cast this R.</p>
        <p><b>Old Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2), for each digit of x, 2 * sum(mod(x, 10) ^ y) ^ 0.9</p>
        <p><b>New Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2), for each digit of x, sum(mod(x, 10) ^ y) ^ 0.9</p>
        <br/>
        <p><b>Dragon Union</b></p>
        <p><b>Order Effect</b>: Increase the production of all buildings based on time spent as Order this R.</p>
        <p><b>Old Formula</b>: (6.5 * x ^ 0.65), where x is time spent as Order this R.</p>
        <p><b>New Formula</b>: (7 * x ^ 0.7), where x is time spent as Order this R.</p>
        <br/>
        <p><b>Chaos Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend on (ln(x)) where x is FC chance (even for Unique, odd for Non-Unique).</p>
        <p><b>Old Formulas</b></p>
        <p><b>Non-Unique</b>: (25 * 0.6 * x ^ 0.6), where x is assistant count.</p>
        <p><b>Unique</b>: (0.6 * x ^ 0.6), where x is assistant count.</p>
        <p><b>New Formula</b>: (0.2 * x ^ 0.8), where x is assistant count.</p>
        <hr>
        <p><b>Other Changes</b></p>
        <p><b>Undead Unique Building</b></p>
        <p><b>Flesh Workshop</b></p>
        <p><b>Effect</b>: Increase production based on mana regen.</p>
        <p><b>Old Formula</b>: (15 * x ^ 0.65), where x is mana regen per second.</p>
        <p><b>New Formula</b>: (35 * x ^ 0.65), where x is mana regen per second.</p>
        <br/>
        <p><b>Archon Bloodline</b></p>
        <p><b>New Effect</b>: You can purchase additional researches based on their research points cost. This budget increases with time spent in this game.</p>
        <p><b>New Formula</b>: (500 + 0.1 * ln(1 + x) ^ 4), where x is this game in seconds.</p>
        <p><b>Note</b>: Only for A3, A2 will still keep the old effect.</p>
        <br/>
        <p><b>Chrono Loading</b></p>
        <p><b>Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
        <p><b>Old Formula</b>: (25 * x ^ 0.55), where x is Precognition duration.(seconds)</p>
        <p><b>New Formula</b>: (3600 + 60 * x ^ 0.4), where x is Precognition duration.(seconds)</p>
        <br/>
        <p><b>Faceless Lineage</b></p>
        <p><b>Effect</b>: Increase the duration of all spells based on lineage level.</p>
        <p><b>Old Formula</b>: (x ^ 2.25)%, where x is lineage level.</p>
        <p><b>New Formula</b>: (x ^ 2)%, where x is lineage level.</p>
        <br/>
        <p><b>Art of the Crow</b></p>
        <p><b>Evil Effect</b>: The amount increased is Based on production bonus from Gems.</p>
        <p><b>Old Formula</b>: (30 + 30 * x ^ 0.3), where x is production bonus from Gems.</p>
        <p><b>New Formula</b>: (50 + 30 * x ^ 0.3), where x is production bonus from Gems.</p>
        <br/>
        <p><b>Art of the Crow</b></p>
        <p><b>Neutral Effect</b>: The amount increased is based on Royal Exchanges made.</p>
        <p><b>Old Formula</b>: (0.8 * x ^ 0.8), where x royal exchanges made.</p>
        <p><b>New Formula</b>: (x ^ 0.75), where x royal exchanges made.</p>
        <br/>
        <p><b>MAD Unlocks</b></p>
        <p><b>Old Requirement</b>: 2 days this Game spell activity time</p>
        <p><b>New Requirement</b>: 2 days this Reincarnation spell activity time</p>
        <br/>
        <p><b>Nonexistent Ruler</b></p>
        <p><b>Old Cost</b>: 10 Qig (1E154)</p>
        <p><b>New Cost</b>: 10 Spd (1E55)</p>
        <br/>
        <p><b>Changed</b>: Elven Bloodline, Elven Lineage, Elven Union, Elven Set, Craftsmanship 590 (Alloys) and Chocolate Egg now also generate offline clicks.</p>
        <p><b>Changed</b>: Spell costs now have a low cap at 1.</p>
        <p><b>Changed</b>: R60 bonus moved to R58.</p>
        <p><b>Changed</b>: Call to Arms now has a 25% starting bonus.</p>
        <p><b>Changed</b>: Tier 7 no longer visible in spell tooltip pre-A2</p>
        <p><b>Changed</b>: Increased Share Benefits tier cap to 99 in A3 only.</p>
        <p><b>Changed</b>: Share Benefits now keeps track and shows this game stats.</p>
        <p><b>Changed</b>: Lineage Container is now visible before purchasing a Bloodline. This should help planning for this game strategies without having to look out-game for information.</p>
        <p><b>Fixed</b>: Game no longer breaks with coin cap.</p>
        <p><b>Mobile</b>: Trophies now display a red dot when newly discovered. Dots disappear upon closing the trophy panel.</p>
        <p><b>Added</b>: R46 Dragon Quests timers</p>
        <p><b>New Tutorials</b>: Multibuy, Treaties, Free Treaty Description, Automatic Casting, Spell Tiers, Bloodline Selection, 2nd Ascension + Alignments, Lineages</p>
        <p><b>Fixed</b>: Many tooltips</p>
                </div>
            </div>
            </div>
        <?php include "../scripts/footer.html"; ?>
