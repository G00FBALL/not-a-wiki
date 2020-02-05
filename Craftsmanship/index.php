<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
        <h6>Craftsmanship Facility</h6>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Craftsmanshipr.png" alt="Craftsmanship" align="middle"> <b>Craftsmanship</b></p>
        <p>Learn how to use tools and experience to improve your production by mastering Craftsmanship.</p>
        <p><b>Increases</b>: <b>Elven</b>, <b>Titan</b>, and <b>Dwarven</b> production.</p>
        <p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
        <br/>
        <p><b>Research Point Production</b></p>
        <p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
        <br/>
        <p><b>C1</b> - For Elf</p>
        <p><b>Research Name</b>: Dummy Targets</p>
        <p><b>Cost</b>: 750 Qag (7.5E125)</p>
        <p><b>Effect</b>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.</p>
        <p><b>Formula</b>: round(1.3 * ln ^3 (1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
        <hr>
        <p><b>C10</b> - For Fairy</p>
        <p><b>Research Name</b>: Cultivation</p>
        <p><b>Requirement</b>: 2500 Farms</p>
        <p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
        <p><b>Effect</b>: Increases production of Blacksmith and Inn by 60% per Enchanted field that you have.</p>
        <hr>
        <p><b>C25</b> - For Angel</p>
        <p><b>Research Name</b>: Light Condenser</p>
        <p><b>Requirement</b>: 12,000 Spells cast (This R)</p>
        <p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast.</p>
        <p><b>Formula</b>: floor(10 * x^0.3) / 10, where x is your Spells Cast (This Game) stat.</p>
        <hr>
        <p><b>C50</b> - For Demon</p>
        <p><b>Research Name</b>: Refining</p>
        <p><b>Requirement</b>: 1 B (1E9) Faction Coins (as Elf)</p>
        <p><b>Cost</b>: 318.8 Tgag (3.188E134)</p>
        <p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this Game.</p>
        <p><b>Formula</b>: round(0.8 * ln^3(1 + x))%, where x is your Demon Coins Gained (This Game) stat.</p>
        <hr>
        <p><b>C80</b> - For All Factions</p>
        <p><b>Research Name</b>: Apprenticeship</p>
        <p><b>Requirement</b>: 16,000 Good and Evil buildings</p>
        <p><b>Cost</b>: 61.13 Qiqag (6.113E139)</p>
        <p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of Good and Evil buildings.</p>
        <p><b>Formula</b>: round(x^0.8)%, where x is the number of Good and Evil Buildings you own.</p>
        <hr>
        <p><b>C105</b> - For All Factions</p>
        <p><b>Research Name</b>: Woodcraft</p>
        <p><b>Requirement</b>: 25,000 clicks (This Game)</p>
        <p><b>Cost</b>: 1.544 Spqag (1.544E144)</p>
        <p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</p>
        <p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.</p>
        <hr>
        <p><b>C120</b> - For All Factions</p>
        <p><b>Research Name</b>: Socketing</p>
        <p><b>Requirement</b>: 200,000 clicks (This Game)</p>
        <p><b>Cost</b>: 676 Spqag (6.76E146)</p>
        <p><b>Effect</b>: Increase clicking reward based on the amount of gems you own.</p>
        <p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.</p>
        <hr>
        <p><b>C135</b> - For All Factions</p>
        <p><b>Research Name</b>: Reinforcing</p>
        <p><b>Requirement</b>: 250,000 clicks (This Game, as Elf)</p>
        <p><b>Cost</b>: 296 Ocqag (2.96E149)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on your total number of clicks.</p>
        <p><b>Formula</b>: (ln(1 + x) ^ 2.75)%, where x is your Treasure Clicks (Total) stat.</p>
        <hr>
        <p><b>C150</b> - For All Factions</p>
        <p><b>Research Name</b>: Tinkering</p>
        <p><b>Requirement</b>: Research Recycling (E10) & Reinforcing (C135)</p>
        <p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the amount of total research points bought.</p>
        <p><b>Formula</b>: round(125 * x ^ 0.38)%, where x is number of total research points bought.</p>
        <hr>
        <p><b>C175</b> - For Goblin</p>
        <p><b>Research Name</b>: Gemcutting</p>
        <p><b>Requirement</b>: Research Refining (C50) & Socketing (C120)</p>
        <p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
        <p><b>Effect</b>: Increase the production bonus from gems based on the number of buildings you own.</p>
        <p><b>Formula</b>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.</p>
        <hr>
        <p><b>C200</b> - For All Factions</p>
        <p><b>Research Name</b>: Journeymen</p>
        <p><b>Requirement</b>: Research Apprenticeship (C80) & Bartering (E50).</p>
        <p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on total time spent as that faction.</p>
        <p><b>Formula</b>: round(0.125 * x ^ 0.7)%, where x is your Time Spent as that faction stat.</p>
        <hr>
        <p><b>C225</b> - For Elf</p>
        <p><b>Research Name</b>: Automatons</p>
        <p><b>Requirement</b>: Research Dummy Targets (C1) & Vivification (A120).</p>
        <p><b>Cost</b>: 2.087 Qaqig (2.087E165)</p>
        <p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.</p>
        <hr>
        <p><b>C250</b> - For All Factions</p>
        <p><b>Research Name</b>: Magnetism</p>
        <p><b>Requirement</b>: Research Tinkering (C150) & Critical Strike (W225).</p>
        <p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
        <p><b>Effect</b>: Increase the chance to find Faction Coins by a multiplicative 50%</p>
        <p><b>Effect</b>: Increase the chance to find faction coins based on total time spent offline. (in minutes)</p>
        <p><b>Formula</b>: floor(7.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
        <hr>
        <p><b>C251</b> - For Titan</p>
        <p><b>Research Name</b>: Architecture</p>
        <p><b>Requirement</b>: Secrets of the Ancients (as Titan)</p>
        <p><b>Cost</b>: 79.05 QiQig (79.05E168)</p>
        <p><b>Effect</b>: Increase the production of Olympian Halls based on the amount of buildings you own.</p>
        <p><b>Formula</b>: round(0.5 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
        <hr>
        <p><b>C300</b> - For Druid</p>
        <p><b>Research Name</b>: Weighting</p>
        <p><b>Requirement</b>: 650 Lightning Strikes (This R)</p>
        <p><b>Cost</b>: 33.6 OcQig (33.6E177)</p>
        <p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.</p>
        <p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.</p>
        <p><b>Formula</b>: 10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.</p>
        <hr>
        <p><b>C305</b> - For All Factions</p>
        <p><b>Research Name</b>: Golemcraft</p>
        <p><b>Requirement</b>: 2 days as Titans (Total across all R)</p>
        <p><b>Cost</b>: 255.2 OcQig (2.552E179)</p>
        <p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</p>
        <p><b>Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
        <hr>
        <p><b>C330</b> - For All Factions</p>
        <p><b>Research Name</b>: Overload</p>
        <p><b>Requirement</b>: Research Aeromancy (S250) & Critical Strike (W225)</p>
        <p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</p>
        <p><b>Formula</b>: (3.5 * x ^0.35), where x is researches made.</p>
        <hr>
        <p><b>C340</b> - For All Factions</p>
        <p><b>Research Name</b>: Gem Duster</p>
        <p><b>Requirement</b>: 800 Gem Grinders (This R),Research Sifting (E260) & Surveyorship (E290)</p>
        <p><b>Cost</b>: 371.5 Sxg (3.715E185)</p>
        <p><b>Effect</b>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative)</p>
        <p><b>Formula</b>: floor(10 * x), where x is your Rubies Gained (All Time) stat.</p>
        <hr>
        <p><b>C375</b> - For Titan</p>
        <p><b>Research Name</b>: Lightning Rod</p>
        <p><b>Requirement</b>: Research Chain Lightning (S300) & Overload (C330)</p>
        <p><b>Cost</b>: 541 DSxg (5.41E191)</p>
        <p><b>Effect</b>: Olympian Halls are always hit by Lightning Strike in addition to the primary target. Olympian Halls can no longer be a primary target.</p>
        <hr>
        <p><b>C400</b> - For All Factions</p>
        <p><b>Research Name</b>: Gravitation</p>
        <p><b>Requirement</b>: Research Magnetism (C250) & Weighting (C300)</p>
        <p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
        <p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.</p>
        <p><b>Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 100%.</p>
        <p><b>Formula</b>: floor(3.5 * ln(x + 1) ^ 3), where x is your Faction Coins Gained (This Game) stat.</p>
        <hr>
        <p><b>C405</b> - For Dwarf</p>
        <p><b>Research Name</b>: Metallurgy</p>
        <p><b>Requirement</b>: Secrets of the Underworld (as Dwarf)</p>
        <p><b>Cost</b>: 103.7 QaSxg (1.037E197)</p>
        <p><b>Effect</b>: Increase the production of Dwarven Forges based on the Dwarven Forges you own.</p>
        <p><b>Formula</b>: (45 * x ^ 0.825)%, where x is the number of Dwarven Forges you own.</p>
        <hr>
        <p><b>C460</b> - For All Factions</p>
        <p><b>Research Name</b>: Distribution</p>
        <p><b>Requirement</b>: 1M Clicks (This game)</p>
        <p><b>Cost</b>: 502.3 SpSxg (5.023E206)</p>
        <p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of clicks you made in this game.</p>
        <p><b>Formula</b>: (35 * x ^ 0.5)%, where x is your Treasure Clicks (This Game) stat.</p>
        <hr>
        <p><b>C500</b> - For All Factions</p>
        <p><b>Research Name</b>: Minecrafting</p>
        <p><b>Requirement</b>: 3250 excavations (as Dwarf)</p>
        <p><b>Cost</b>: 5.554Spg (5.554E213)</p>
        <p><b>Effect</b>: Increases production bonus from gems based on the amount of excavations you made.</p>
        <p><b>Formula</b>: (3 * x ^ 0.35)%, where x is the amount of Excavations you made.</p>
        <hr>
        <p><b>C520</b> - For Dwarf</p>
        <p><b>Research Name</b>: Blacksmithing</p>
        <p><b>Requirement</b>: Research Reinforcing (C135) & Metallurgy (C405)</p>
        <p><b>Cost</b>: 18.47 USpg (1.847E217)</p>
        <p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
        <p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
        <p><b>Formula</b>: Clicking Reward: (2.5 * x^0.3)%, where x is the number of Dwarven Forges you own.</p>
        <p><b>Formula</b>: Diamond Pickaxe: (20 * x^0.4)%, where x is the number of Dwarven Forges you own.</p>
        <hr>
        <p><b>C590</b> - For Elf,Dwarf</p>
        <p><b>Research Name</b>: Alloys</p>
        <p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwelf), Research Fusion(A105) and Blacksmithing(C520)</p>
        <p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
        <p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins, (if your FC chance is 10k%, this will be 10k%).</p>
        <p><b>Effect</b>: Autoclicks the treasure 10 times per second.</p>
        <hr>
        <p><b>C1300</b> - For Neutral,Dragon</p>
        <p><b>Research Name</b>: Scintillation</p>
        <p><b>Requirement</b>: 30000 Max Mana, as any Neutral,Dragon (This game)</p>
        <p><b>Cost</b>: 4.698 Tvg (4.698e72)</p>
        <p><b>Effect</b>: Increase production of buildings based on max mana and additive gem bonus. (Higher boost for lower gem bonus.)</p>
        <p><b>Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total additive gem bonus.</p>
        <hr>
        <p><b>C1325</b> - For All Factions</p>
        <p><b>Research Name</b>: Plasmation</p>
        <p><b>Requirement</b>: 50m (5e7) Mana Produced (This game)</p>
        <p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
        <p><b>Effect</b>: Gain assistants based on mana produced in this game.</p>
        <p><b>Formula</b>: floor(1.25 * ln(1 + x) ^ 2.25), where x is mana produced (this game).</p>
        <hr>
        <p><b>C1500</b> - For Titan,Dragon</p>
        <p><b>Research Name</b>: Gargantuaness</p>
        <p><b>Requirement</b>: 2500 Royal Exchanges Research E460, D1275 (As Titan, Dragon)</p>
        <p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on total time spent as Neutral.</p>
        <p><b>Formula</b>: (1.5 * x) ^ 0.7, where x is neutral time (this R) in minutes.</p>
        <hr>
        <p><b>C3000</b> - For Mercenary</p>
        <p><b>Research Name</b>: Customizing</p>
        <p><b>Requirement</b>: 9000 Excavations as Mercenary.</p>
        <p><b>Cost</b>: 850.7 SxQig (8.507e173)</p>
        <p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.</p>
        <p><b>Formula</b>: (2 * x ^ 2), where X is artifacts you own.</p>
        <hr>
        <p><b>C3100</b> - All Factions</p>
        <p><b>Research Name</b>: Engineering</p>
        <p><b>Requirement</b>: 15 days Mercenary time spent (Across all R's).</p>
        <p><b>Cost</b>: 769.3 OcQig (7.693e179)</p>
        <p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).</p>
        <p><b>Formula</b>: (65 * x ^ 0.35), where x is clicks made.</p>
        <hr>
        <p><b>C5125</b> - For All Factions</p>
        <p><b>Research Name</b>: Restauration</p>
        <p><b>Requirement</b>: R175+, Forgotten Relic, Factory artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase the production of all buildings based on assistants owned.</p>
        <p><b>Formula</b>: (0.5 * x ^ 0.25), where x is assistants owned</p>
        <hr>
        <p><b>C5375</b> - For Neutral</p>
        <p><b>Research Name</b>: Manufacture</p>
        <p><b>Requirement</b>: R177+, Forgotten Relic, Factory artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on Clicks made in this game.</p>
        <p><b>Additive Formula</b>: (6 * x ^ 0.6), where x is clicks in this game.</p>
        <p><b>Multiplicative Formula</b>: (x ^ 0.35), where x is clicks in this game.</p>
        <hr>
        <p><b>C5625</b> - For All Factions</p>
        <p><b>Research Name</b>: Discovery</p>
        <p><b>Requirement</b>: R179+, Forgotten Relic, Factory artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Trophies and Artifacts count more based on excavations, including resets made in this game.</p>
        <p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5), where x is excavations (This R) and y is excavation resets (This Game).</p>
        <hr>
        <p><b>C5875</b> - For All Factions</p>
        <p><b>Research Name</b>: Genuineness</p>
        <p><b>Requirement</b>: R181+, Forgotten Relic, Factory artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.</p>
        <p><b>Formula</b>: (50 + 1.5 * x ^ 0.95), where x is the lowest lineage.</p>
        <?php include "../scripts/footer.html"; ?>
