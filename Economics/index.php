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
        <p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
        <br/>
        <p><b>Research Point Production</b></p>
        <p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
        <br/>
    <p><b>E1</b> - For Goblin</p>
	<p><b>Research Name</b>: Coinage</p>
	<p><b>Cost</b>: 750 Qag (7.50E125)</p>
	<p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (0.85 * x ^ 0.85)%, where x is your Buildings Owned (This Game) stat.</p>
	<hr>
    <p><b>E10</b> - For Undead</p>
	<p><b>Research Name</b>: Recycling</p>
	<p><b>Hint</b>: Nation of the dead.</p>
	<p><b>Requirement</b>: 2,000 Undercities</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.</p>
	<hr>
    <p><b>E25</b> - For Elf</p>
	<p><b>Research Name</b>: Commerce</p>
	<p><b>Hint</b>: Colored wealth.</p>
	<p><b>Requirement</b>: 100 M (1E8) Faction Coins (Found this Game)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</p>
	<p><b>Formula</b>: floor((1 + 6 * x) ^ 0.5 - 1), where x is your Royal Exchanges Made stat.</p>
	<hr>
    <p><b>E30</b> - For All Factions</p>
	<p><b>Research Name</b>: Diplomacy</p>
	<p><b>Hint</b>: Exchange more.</p>
	<p><b>Requirement</b>: 1000 Exchanges (This Game)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.</p>
	<p><b>Formula</b>: Faction Coin Chance: floor(1.5 * x ^ 1.05)%</p>
	<p><b>Formula</b>: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).</p>
	<hr>
    <p><b>E50</b> - For Fairy</p>
	<p><b>Research Name</b>: Bartering</p>
	<p><b>Hint</b>: Royalties earnings.</p>
	<p><b>Requirement</b>: 1,000 Exchanges(as Goblin)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
	<p><b>Effect</b>: Reduce Enchanted Field cost multiplier. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
	<hr>
    <p><b>E80</b> - For Good/Evil</p>
	<p><b>Research Name</b>: Common Business</p>
	<p><b>Hint</b>: Neutral urbanistics.</p>
	<p><b>Requirement</b>: 9,000 Neutral Buildings</p>
	<p><b>Cost</b>: 61.13 Qiqag (6.113E139)</p>
	<p><b>Effect</b>: Increase the production of Good and Evil buildings based on the amount of neutral buildings.</p>
	<p><b>Formula</b>: round((1.75 * x) ^ 0.8)%, where x is the number of neutral buildings you own.</p>
	<hr>
    <p><b>E135</b> - For All Factions</p>
	<p><b>Research Name</b>: Bribing</p>
	<p><b>Hint</b>: Architectural advantage.</p>
	<p><b>Requirement</b>: 28,000 Total Buildings(as Goblin)</p>
	<p><b>Cost</b>: 296 Ocqag (2.96E149)</p>
	<p><b>Effect</b>: Reduce the building cost multiplier for Unique Buildings. Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
	<hr>
    <p><b>E145</b> - For All Factions</p>
	<p><b>Research Name</b>: Royal Demand</p>
	<p><b>Hint</b>: Collect those taxes!</p>
	<p><b>Requirement</b>: 50,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)</p>
	<p><b>Cost</b>: 17.07 Noqag (1.707E151)</p>
	<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.</p>
	<hr>
    <p><b>E150</b> - For All Factions</p>
	<p><b>Research Name</b>: Investment</p>
	<p><b>Requirement</b>: Research Bribing (E135) & Commerce (E25)</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own.</p>
	<p><b>Formula</b>: round(ln(1 + x) ^ 1.25)%, where x is the amount of gold you own.</p>
	<hr>
    <p><b>E200</b> - For All Factions</p>
	<p><b>Research Name</b>: Acquisition</p>
	<p><b>Requirement</b>: Research Investment (E150)  Common Business (E80)</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked.</p>
	<p><b>Formula</b>: round(0.0003 * (100 * x) ^ 3.35), where x is trophies unlocked / max trophies.</p>
	<hr>
    <p><b>E225</b> - For Goblin</p>
	<p><b>Research Name</b>: Forgery</p>
	<p><b>Requirement</b>: Research Coinage (E1) & Gilding (A50)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)</p>
	<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.</p>
	<p><b>Formula</b>: round(10 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
	<hr>
    <p><b>E230</b> - For Demon</p>
	<p><b>Research Name</b>: Coercion</p>
	<p><b>Requirement</b>: Research Exertion (W50) & Diplomacy (E30)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)</p>
	<p><b>Effect</b>: Increases trophy count based on time spent as Evil this R.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.5), where x is time spent as Evil this R.</p>
	<hr>
    <p><b>E250</b> - For All Factions</p>
	<p><b>Research Name</b>: Trade Routes</p>
	<p><b>Requirement</b>: Research Forgery (E225) & Royal Demand (E145)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.</p>
	<p><b>Formula</b>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.</p>
	<hr>
    <p><b>E260</b> - For Druid</p>
	<p><b>Research Name</b>: Sifting</p>
	<p><b>Hint</b>: A lot of men-hirs.</p>
	<p><b>Requirement</b>: 3,000 Stonehenge Circles</p>
	<p><b>Cost</b>: 3.039 SxQig (3.039E171)</p>
	<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.</p>
	<p><b>Formula</b>: (100 * x), where x is Stone Pillars</p>
	<hr>
    <p><b>E275</b> - For Titan</p>
	<p><b>Research Name</b>: Offering</p>
	<p><b>Hint</b>: Offer Faction Coins, gain production.</p>
	<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)</p>
	<p><b>Cost</b>: 175.2 SxQig (1.752E173)</p>
	<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.</p>
	<p><b>Formula</b>: (x ^ 0.95), where x is your Royal Exchange Bonus.</p>
	<hr>
    <p><b>E290</b> - For All Factions</p>
	<p><b>Research Name</b>: Surveyorship</p>
	<p><b>Hint</b>: Take an interest in archeology.</p>
	<p><b>Requirement</b>: 7 Artifacts</p>
	<p><b>Cost</b>: 582.7 SpQig (5.827E176)</p>
	<p><b>Effect</b>: Reduces Excavation cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.18 instead of 1.2.</p>
	<hr>
    <p><b>E320</b> - For All Factions</p>
	<p><b>Research Name</b>: Smuggling</p>
	<p><b>Hint</b>: You shouldn\'t abdicate so poorly.</p>
	<p><b>Requirement</b>: Have 2x Gems in Abdication Treasury</p>
	<p><b>Cost</b>: 1.117 NoQig (1.117E180)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings owned.</p>
	<p><b>Effect</b>: Also increase FC chance find chance by a multiplicative 100%.</p>
	<p><b>Formula</b>: 5 * x ^ 0.9, where x is Unique Building owned</p>
	<hr>
    <p><b>E330</b> - For All Factions</p>
	<p><b>Research Name</b>: Collection</p>
	<p><b>Requirement</b>: Research Acquisition (E200) & Forgery (E225)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found.</p>
	<p><b>Formula</b>: round(50 * x ^ 1.1)%, where x is the amount of artifacts found.</p>
	<hr>
    <p><b>E350</b> - For Faceless</p>
	<p><b>Research Name</b>: Repurpose</p>
	<p><b>Requirement</b>: Research Journeymen (C200) & Adaptation (A330)(as Faceless)</p>
	<p><b>Cost</b>: 21.42 USxg (2.142E187)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made.</p>
	<p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.</p>
	<hr>
    <p><b>E400</b> - For All Factions</p>
	<p><b>Research Name</b>: Conversion</p>
	<p><b>Requirement</b>: Research Philosopher's Stone (A250) & Repurpose (E350).</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
	<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.</p>
	<p><b>Formula</b>: +(2.5 * floor(x ^ 0.5))%, where x is your Royal Exchange Bonus.</p>
	<hr>
    <p><b>E410</b> - For Dwarf</p>
	<p><b>Research Name</b>: Marketing</p>
	<p><b>Hint</b>: A Blacksmith army.</p>
	<p><b>Requirement</b>: 5000 Blacksmiths</p>
	<p><b>Cost</b>: 787.7 QaSxg (7.877E197)</p>
	<p><b>Effect</b>: Increase production of all other buildings by 75% per Dwarven Forge you own.</p>
	<hr>
    <p><b>E460</b> - For All Factions</p>
	<p><b>Research Name</b>: Inflation</p>
	<p><b>Hint</b>: Got enough Faction Coins?</p>
	<p><b>Requirement</b>: 100B (1E11) Faction Coins (Found this Game)</p>
	<p><b>Cost</b>: 502.3 SpSxg (5.023E206)</p>
	<p><b>Effect</b>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula</b>: floor(3.5 * log10(1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
	<hr>
    <p><b>E480</b> - For All Factions</p>
	<p><b>Research Name</b>: Undercutting</p>
	<p><b>Hint</b>: Maximum magic resources required.</p>
	<p><b>Requirement</b>: 15000 max mana</p>
	<p><b>Cost</b>: 1.67 NoSxg (1.67E210)</p>
	<p><b>Effect</b>: Increase the production of non-unique buildings based on total spells cast.</p>
	<p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x is your Spells Cast (Total) stat.</p>
	<hr>
    <p><b>E495</b> - For Drow</p>
	<p><b>Research Name</b>: Jewellery</p>
	<p><b>Hint</b>: Special architecture.</p>
	<p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf)</p>
	<p><b>Cost</b>: 731.4 NoSxg (7.314E212)</p>
	<p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own.</p>
	<p><b>Formula</b>: (0.06 * x ^ 0.8)%, where x is the number of Spider Sanctuaries you own.</p>
	<hr>
    <p><b>E590</b> - For Goblin,Drow</p>
	<p><b>Research Name</b>: Slavery</p>
	<p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916 E229)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own.</p>
	<p><b>Formula</b>: (0.1 * x ^ 0.8), where x is the number of Non Unique Buildings you own.</p>
	<hr>
    <p><b>E1225</b> - For Neutral,Dragon</p>
	<p><b>Research Name</b>: Hoarding</p>
	<p><b>Hint</b>: Massive numismatics.</p>
	<p><b>Requirement</b>: 1T (1E12) Faction coins (Found this game)</p>
	<p><b>Cost</b>: 160.2 Uvg (1.602e68)</p>
	<p><b>Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.</p>
	<hr>
    <p><b>E1325</b> - For All Factions</p>
	<p><b>Research Name</b>: Intimidation</p>
	<p><b>Hint</b>: Unique wonders of the realm.</p>
	<p><b>Requirement</b>: 18000 Unique Buildings</p>
	<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
	<p><b>Effect</b>: Reduce Royal Exchange cost multiplier.</p>
	<p><b>Formula</b>: Reduces multiplier by 0.025; with no other reductions applying, base multiplier is 1.1</p>
	<hr>
    <p><b>E1425</b> - For All Neutral Factions</p>
	<p><b>Research Name</b>: Rarity</p>
    <p><b>Hint</b>: Be neutral. Be different. For a short week.</p>
	<p><b>Requirement</b>: 5 days playtime each with Titan, Druid and Faceless, Research A545, C1300</p>
	<p><b>Cost</b>: 131 Qivg (1.31e80)</p>
	<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</p>
	<p><b>Formula</b>: (1.25 * x ^ 1.25), where x is artifacts found.</p>
	<hr>
    <p><b>E3250</b> - For All</p>
	<p><b>Research Name</b>: Hirelings</p>
	<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
	<p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
	<p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
	<p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
	<hr>
    <p><b>E3300</b> - For Mercenary</p>
	<p><b>Research Name</b>: Estates</p>
    <p><b>Hint</b>: 50k shades of uniqueness.</p>
	<p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</p>
	<p><b>Cost</b>: 629.2 DSxg (6.292e191)</p>
	<p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.
	<p><b>Effect</b>: Ascension 3: Gain all the Unique Buildings that match your alignments.</p>
	<hr>
    <p><b>E5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Decentralization</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.</p>
	<p><b>Formula</b>: ((3 - 0.25 * T) ^ 4 * x ^ 0.6)%, where T is building tier and x is the number of (every) buildings you own.</p
	<hr>
    <p><b>E5375</b> - For Balance</p>
	<p><b>Research Name</b>: Whipround</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus additively and multiplicatively based on Tax Collections cast in this game.</p>
    <p><b>Formulas</b></p>
    <p><b>Additive</b>: (x ^ 0.2), where x is tax collections (This game)</p>
    <p><b>Multiplicative</b>: (0.85 * x ^ 0.15), where x is tax collections (This game)</p>
	<hr>
    <p><b>E5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Loan Sharking</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Tax Collection is worth more based on Gold owned.</p>
	<p><b>Formula</b>: +(log10(1 + x) ^ 1.5), where x is your current amount of coins.</p>
	<hr>
    <p><b>E5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Prosperity</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on your faction spell activity in this game.</p>
	<p><b>Formula</b>: (0.4 * x ^ 0.4), where x is your least used faction spell (This game)</p>
	<p><b>Note</b>: Only checks the base faction spell of your faction(s). On mercs, scales off Share Benefits and the two chosen Faction Spells.</p>
	<hr>
	<p><b>E10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Rigmarole</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus based on the highest amount of assistants you had in this Reincarnation (Additive).</p>
	<p><b>Formula</b>: +(ln(1 + x) ^ 2)%, where x is your highest assistants count this R.</p>
	<hr>
	<p><b>E11125</b> - For All Factions</p>
	<p><b>Research Name</b>:  Grey Friday</p>
	<p><b>Effect</b>: Reduce building cost multiplier.</p>
	<p><b>Formula</b>: -0.02, with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
	<hr>
	<p><b>E11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Heist</p>
	<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have (Additive).</p>
	<p><b>Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is the amount of assistants you have.</p>
	<hr>
	<p><b>E11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Surplus</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on the amount of Gems you have.</p>
	<p><b>Formula</b>: (25 + 0.25 * ln(1 + x) ^ 1.5)%, where x is the amount of Gems you have.</p>
	<hr>	
        <?php include "../scripts/footer.html"; ?>
