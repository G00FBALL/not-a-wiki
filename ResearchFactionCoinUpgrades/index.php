<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<p><b>Craftsmanship</b></p>
    <p><b>C105</b> - For All Factions</p>
	<p><b>Research Name</b>: Woodcraft</p>
	<p><b>Hint</b>: 25k reiterations of the same movement.</p>
	<p><b>Requirement</b>: 25,000 clicks (This Game)</p>
	<p><b>Cost</b>: 1.544 Spqag (1.544E144)</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</p>
	<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.</p>
<br/>
    <p><b>C250</b> - For All Factions</p>
	<p><b>Research Name</b>: Magnetism</p>
	<p><b>Requirement</b>: Research Tinkering (C150) & Critical Strike (W225).</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins by a multiplicative 50%</p>
	<p><b>Effect</b>: Increase the chance to find faction coins based on total time spent offline. (in minutes)</p>
	<p><b>Formula</b>: floor(7.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.</p>
<br/>
    <p><b>C400</b> - For All Factions</p>
	<p><b>Research Name</b>: Gravitation</p>
	<p><b>Requirement</b>: Research Magnetism (C250) & Weighting (C300)</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.</p>
	<p><b>Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 100%.</p>
	<p><b>Formula</b>: floor(3.5 * ln(x + 1) ^ 3), where x is your Faction Coins Gained (This Game) stat.</p>
<br/>
    <p><b>C520</b> - For Dwarf</p>
	<p><b>Research Name</b>: Blacksmithing</p>
	<p><b>Requirement</b>: Research Reinforcing (C135) & Metallurgy (C405)</p>
	<p><b>Cost</b>: 18.47 USpg (1.847E217)</p>
	<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
	<p><b>Formula</b>: Clicking Reward: (2.5 * x^0.3)%, where x is the number of Dwarven Forges you own.</p>
	<p><b>Formula</b>: Diamond Pickaxe: (20 * x^0.4)%, where x is the number of Dwarven Forges you own.</p>
<br/>
    <p><b>C5375</b> - For Neutral</p>
	<p><b>Research Name</b>: Manufacture</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Factory artifact and upgrade</p>
	<p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on Clicks made in this game.</p>
    <p><b>Formulas</b></p>
    <p><b>Additive</b>: (6 * x ^ 0.6),  where x is clicks in this game</p>
    <p><b>Multiplicative</b>: (x ^ 0.35), where x is clicks in this game</p>
<hr>
    <p><b>Divine</b></p>
    <p><b>D50</b> - For Elf</p>
	<p><b>Research Name</b>: Hallowing</p>
	<p><b>Hint</b>: Have you been good enough?</p>
	<p><b>Requirement</b>: 15,000 Good Buildings(as Angel)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.</p>
	<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Elven Training Grounds you own.</p>
<br/>
    <p><b>D150</b> - For All Factions</p>
	<p><b>Research Name</b>: Retribution</p>
	<p><b>Requirement</b>: Research Betrayal (W120) & Transfixion (D55).</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
	<p><b>Effect</b>: Increase chance to find faction coins based on the amount of total research points bought.</p>
	<p><b>Formula</b>: floor(x ^ 1.25), where x is the amount of total research points bought.</p>
<hr>
    <p><b>Economics</b></p>
    <p><b>E30</b> - For All Factions</p>
	<p><b>Research Name</b>: Diplomacy</p>
	<p><b>Hint</b>: Exchange more.</p>
	<p><b>Requirement</b>: 1000 Exchanges (This Game)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.</p>
	<p><b>Formula</b>: Faction Coin Chance: floor(1.5 * x ^ 1.05)%</p>
	<p><b>Formula</b>: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).</p>
<br/>
    <p><b>E320</b> - For All Factions</p>
	<p><b>Research Name</b>: Smuggling</p>
	<p><b>Hint</b>: You shouldn\'t abdicate so poorly.</p>
	<p><b>Requirement</b>: Have 2x Gems in Abdication Treasury</p>
	<p><b>Cost</b>: 1.117 NoQig (1.117E180)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings owned.</p>
	<p><b>Effect</b>: Also increase FC chance find chance by a multiplicative 100%.</p>
	<p><b>Formula</b>: 5 * x ^ 0.9, where x is Unique Building owned</p>
<br/>
    <p><b>E5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Prosperity</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Vault artifact and upgrade</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on your faction spell activity in this game.</p>
	<p><b>Formula</b>: (0.4 * x ^ 0.4), where x is your least used faction spell (This game)</p>
	<p><b>Note</b>: Only checks the base faction spell of your faction(s). On mercs, scales off Share Benefits and the two chosen Faction Spells.</p>
<hr>
    <p><b>Alchemy</b></p>
    <p><b>A305</b> - For All Factions</p>
	<p><b>Research Name</b>: Engraving</p>
	<p><b>Hint</b>: Druidic experience.</p>
	<p><b>Requirement</b>: 2 days as Druids (Total across all R)</p>
	<p><b>Cost</b>: 255.2 OcQig (2.552E179)</p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.</p>
	<p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.</p>
	<p><b>Formula</b>: floor(3.5 * ln(1 + x) ^ 3.5)%, where x is your Spells Cast (This Game) stat</p>
<br/>
    <p><b>A1500</b> - For Druid,Dragon</p>
	<p><b>Research Name</b>: Sublimation</p>
	<p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon</p>
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 250%.</p>
	<p><b>Formula</b>: (40 * x * 0.8), where x is Unique Buildings owned.</p>
<br/>
    <p><b>A3400</b> - For All Factions</p>
	<p><b>Research Name</b>: Chemistry</p>
	<p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) & (Manipulation S3200).</p>
	<p><b>Cost</b>: 894.5 QiQig (5.69e197)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.</p>
	<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 300%.</p>
	<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.</p>
<hr>
    <p><b>Warfare</b></p>
    <p><b>W50</b> - For Undead</p>
	<p><b>Research Name</b>: Exertion</p>
	<p><b>Hint</b>: Bad times!</p>
	<p><b>Requirement</b>: 12 hours of Evil Play Time this R, Note: Play as any Evil faction, but you must be Demon to unlock this.</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
	<p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.</p>
	<p><b>Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.</p>
<br/>
    <p><b>W275</b> - For Faceless</p>
	<p><b>Research Name</b>: Domination</p>
	<p><b>Hint</b>: How many people are required to throw a party?</p>
	<p><b>Requirement</b>: 300 Base Assistants (as Faceless)</p>
	<p><b>Cost</b>: 1.331 SpQig (1.331E174)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game.(This R)</p>
	<p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.</p>
	<p><b>Formula</b>: (200 * x ^ 0.55), where x is your Assistants (Max) stat.</p>
<br/>
    <p><b>W1375</b> - For All Factions</p>
	<p><b>Research Name</b>: Scavenging</p>
	<p><b>Hint</b>: GUD? More like Evil.</p>
	<p><b>Requirement</b>: 604800s 7 days spent as evil (Across all Rs)</p>
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (100 * x ^ 0.5), where x is assistants.</p>
<?php include "../scripts/footer.html"; ?>
