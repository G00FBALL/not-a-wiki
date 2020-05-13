<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>All Changes and Additions</h6>
        <br/>
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































<!--         <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">V3.7.4 APR 3, 2020</a></b></p>
                <div class="autohide">
        <p><b>APR 3, 2020 4:43AM</b></p>
        <p><b>Global Reminder</b>: The Easter Event will be starting on Apr 09th 2020, 12.01 PM UTC and will end on Apr 16th 2020, 6.59 PM UTC.</p>
        <p>Forbidden Research branch now correctly adds to the Research Points stat.</p>
        <p>Rough Stone Artifact now correctly requires the Survey Equipment upgrade.</p>
        <p>Hard Reset now correctly resets spell timers and all stats.</p>
        <p>Stats panel layout improved.</p>
        <p>Mana Bar colors, Share Benefits tier pictures, tooltips, and various other minor issues have been fixed.</p>
                </div>
            </div>
            </div>--!>
        <hr>
        <p><b>Old Patches</b></p>
        <p><a href="http://musicfamily.org/realm/3.7Patch/" target="_blank"><b>V3.7</b></a>
        <a href="http://musicfamily.org/realm/3.6Patch/" target="_blank"><b>V3.6</b></a>
            <a href="http://musicfamily.org/realm/3.5Patch/" target="_blank"><b>V3.5</b></a>
            <a href="http://musicfamily.org/realm/3.4Patch/" target="_blank"><b>V3.4</b></a>
            <a href="http://musicfamily.org/realm/3.3Patch/" target="_blank"><b>V3.3</b></a></p>
        <p>No history for older patches, see <a href="http://musicfamily.org/realm/Changelog/" target="_blank"><b>Changelogs</b></a></p>
        <?php include "../scripts/footer.html"; ?>
