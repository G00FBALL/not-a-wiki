<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Spell Research Upgrade Slots</h6>
<p><b>Spellcraft</b></p>
    <p><b>S50</b>: - For Goblin</p>
	<p><b>Research Name</b>: Conjuration</p>
	<p><b>Hint</b>: Under a large blue pool...</p>
	<p><b>Requirement</b>: Have 6000 mana (as Fairy) (This Game)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
	<p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.</p>
	<p><b>Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.</p>
<br/>
    <p><b>S200</b>: - For All Factions</p>
	<p><b>Research Name</b>: Cryomancy</p>
	<p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)</p>
	<p><b>Cost</b>: 82.65 DQig (8.265E160)</p>
	<p><b>Effect</b>: Increase Spell Duration based on mana produced (this game).</p>
    <p><b>Formula</b>: (5 * ln(x) ^ 1.25), where x is mana produced (this game).</p>
<br/>
    <p><b>S215</b>: - For All Factions</p>
	<p><b>Research Name</b>: Projection</p>
	<p><b>Hint</b>: How many of these are required for a seance?</p>
	<p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) & Incantation (S180)</p>
	<p><b>Cost</b>: 36.16 TQig (3.616E163)</p>
	<p><b>Effect</b>: While Spiritual Surge is active, increase the production of all buildings based on the amount of active spells.</p>
	<p><b>Formula</b>: 100 * ((10 * x) ^ y), where x is active spells and y is Spiritual Surge tier.</p>
<br/>
    <p><b>S300</b>: - For Titan</p>
	<p><b>Research Name</b>: Chain Lightning</p>
	<p><b>Hint</b>: I can feel the waves...</p>
	<p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)</p>
	<p><b>Cost</b>: 33 OcQig (3.36E178)</p>
	<p><b>Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.</p>
	<p><b>Formula</b>: round(120 * x ^ 0.8)%, where x is your Lightning Strikes cast (This Game) stat.</p>
<br/>
    <p><b>S375</b>: - For Faceless</p>
	<p><b>Research Name</b>: Illusion</p>
	<p><b>Requirement</b>: Research Reverberation (S330) & Mesmerization (S305)</p>
	<p><b>Cost</b>: 541 DSxg (5.41E191)</p>
	<p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.</p>
	<p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes</p>
<br/>
    <p><b>S435</b>: - For Drow</p>
	<p><b>Research Name</b>: Spellbinding</p>
	<p><b>Hint</b>: Combo Breaker!</p>
	<p><b>Requirement</b>: 14400s (4 hour) Combo Strike Cast Time (This Game)</p>
	<p><b>Cost</b>: 19.89 SxSxg (1.989e202)</p>
	<p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.</p>
<br/>
    <p><b>S1275</b>: - For All Factions</p>
	<p><b>Research Name</b>: Sequence</p>
	<p><b>Hint</b>: Cast and cast and cast and cast!</p>
	<p><b>Requirement</b>: 60,000 spells cast (This Game).</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Reduce spell cost for higher spell tiers.</p>
	<p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
<br/>
    <p><b>S1275</b>: - For All Factions</p>
	<p><b>Research Name</b>: Sequence</p>
	<p><b>Hint</b>: Cast and cast and cast and cast!</p>
	<p><b>Requirement</b>: 60,000 spells cast (This Game).</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Reduce spell cost for higher spell tiers.</p>
	<p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
<hr>
<p><b>Craftsmanship</b></p>
    <p><b>C225</b> - For Elf</p>
	<p><b>Research Name</b>: Automatons</p>
	<p><b>Requirement</b>: Research Dummy Targets (C1) & Vivification (A120).</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)</p>
	<p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.</p>
<br/>
    <p><b>C300</b> - For Druid</p>
	<p><b>Research Name</b>: Weighting</p>
	<p><b>Hint</b>: A lightning strike may hit the same target twice. Or hundreds of times.</p>
	<p><b>Requirement</b>: 650 Lightning Strikes (This R)</p>
	<p><b>Cost</b>: 33.6 OcQig (33.6E177)</p>
	<p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.</p>
	<p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.</p>
	<p><b>Formula</b>: 10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.</p>
<br/>
    <p><b>C520</b> - For Dwarf</p>
	<p><b>Research Name</b>: Blacksmithing</p>
	<p><b>Requirement</b>: Research Reinforcing (C135) & Metallurgy (C405)</p>
	<p><b>Cost</b>: 18.47 USpg (1.847E217)</p>
	<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
	<p><b>Formula</b>: Clicking Reward: (2.5 * x^0.3)%, where x is the number of Dwarven Forges you own.</p>
	<p><b>Formula</b>: Diamond Pickaxe: (20 * x^0.4)%, where x is the number of Dwarven Forges you own.</p>
<hr>
    <p><b>Divine</b></p>
    <p><b>D200</b> - For All Factions</p>
	<p><b>Research Name</b>: Transcendence</p>
	<p><b>Requirement</b>: Research Resurrection (D175) & Illumination (D135)</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
	<p><b>Effect</b>: Decrease the cost of all spells by 20% and increase their duration by 20%.</p>
<br/>
    <p><b>D205</b> - For All Good Factions</p>
	<p><b>Research Name</b>: Communion</p>
  <p><b>Hint</b>: Shine bright, Holy Light!</p>
	<p><b>Requirement</b>: 777 Holy Lights (Total this R),Research Gemcutting (C175) & Illumination (D135)</p>
	<p><b>Cost</b>: 627.6 Dqig (6.276E161)</p>
	<p><b>Effect</b>: Increase Holy Light duration by 300 seconds.</p>
<br/>
    <p><b>D275</b> - For Druid</p>
	<p><b>Research Name</b>: Meditation</p>
	<p><b>Hint</b>: Maximum magical concentration.</p>
	<p><b>Requirement</b>: Have 10,000 Mana (as Druid)</p>
	<p><b>Cost</b>: 1.331 SpQig (1.331E174)</p>
	<p><b>Effect</b>: Increase mana regeneration based on your current mana.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
	<p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.</p>
<br/>
    <p><b>D330</b> - For All Factions</p>
	<p><b>Research Name</b>: Eternity</p>
	<p><b>Requirement</b>: Research Offering (E275) & Deliverance (D320)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
	<p><b>Effect</b>: Double the duration of all faction spells.</p>
<br/>
    <p><b>D525</b> - For Good</p>
	<p><b>Research Name</b>: Purity</p>
  <p><b>Hint</b>: Be patiently good.</p>
	<p><b>Requirement</b>: 1d12h as Good (This R), Research Communion (D205) and Devotion (D435)</p>
	<p><b>Cost</b>: 140.2 USpg (1.402E218)</p>
	<p><b>Effect</b>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.</p>
	<p><b>Formula</b>: (300 * x ^ 0.3)%, where x is your Faction Spells' Cast This Game stat.</p>
<br/>
    <p><b>D1375</b> - For All Factions</p>
	<p><b>Research Name</b>: Soulrending</p>
	<p><b>Hint</b>: Be good, wish for the best.</p>
	<p><b>Requirement</b>: 604800s 7 days spent as good (Across all Rs)</p>
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
	<p><b>Effect</b>: Ascensions count 50% more for Spiritual Surge.</p>
<hr>
    <p><b>Economics</b></p>
    <p><b>E145</b> - For All Factions</p>
	<p><b>Research Name</b>: Royal Demand</p>
	<p><b>Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)</p>
	<p><b>Cost</b>: 17.07 Noqag (1.707E151)</p>
	<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.</p>
<br/>
    <p><b>E1425</b> - For All Neutral Factions</p>
	<p><b>Research Name</b>: Rarity</p>
  <p><b>Hint</b>: Be neutral. Be different. For a short week.</p>
	<p><b>Requirement</b>: 5 days playtime each with Titan, Druid and Faceless, Research A545, C1300</p>
	<p><b>Cost</b>: 131 Qivg (1.31e80)</p>
	<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</p>
	<p><b>Formula</b>: (1.25 * x ^ 1.25), where x is artifacts found.</p>
<br/>
    <p><b>E5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Loan Sharking</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Vault artifact and upgrade</p>
	<p><b>Effect</b>: Tax Collection is worth more based on Gold owned.</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 1.8), where x is your current gold</p>
<hr>
    <p><b>Alchemy</b></p>
    <p><b>A25</b> - For Demon</p>
	<p><b>Research Name</b>: Deflagration</p>
	<p><b>Hint</b>: Hellfire!</p>
	<p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
	<p><b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and increases its effect by 1000%.</p>
<br/>
    <p><b>A30</b> - For Fairy</p>
	<p><b>Research Name</b>: Delayed Reaction</p>
	<p><b>Hint</b>: Fairy Greatest Hits.</p>
	<p><b>Requirement</b>: 750 Fairy Chanting (Total this R)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)</p>
	<p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.</p>
	<p><b>Formula</b>: Additive Production increase: floor(1000 * t ^ 1.5), where t is how long FC has been active in seconds.</p>
	<p><b>Formula</b>: Duration increase: floor(x / 800) ^ 0.8) seconds, where x is the number of Farms, Inns, and Blacksmiths you own.</p>
<br/>
    <p><b>A270</b> - For All Factions</p>
	<p><b>Research Name</b>: Synthesis</p>
	<p><b>Hint</b>: Faction Currency.</p>
	<p><b>Requirement</b>: 20 B (2E10) Faction Coins (Found this game)</p>
	<p><b>Cost</b>: 175.2 SxQig (1.752E173)</p>
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25), where x is Factions Coins found (this game).</p>
<br/>
    <p><b>A5375</b> - For Order</p>
	<p><b>Research Name</b>: Albedo
	<p><b>Requirement</b>: R177+, Forgotten Relic, Athanor artifact and upgrade</p>
	<p><b>Effect</b>: Increase all spells duration based on spell casts in this game.</p>
	<p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game</p>
<br/>
    <p><b>A5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Reduction</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Athanor artifact and upgrade</p>
	<p><b>Effect</b>: Reduce all spells cost based on their individual duration.</p>
	<p><b>Formula</b>: Additive reduction: ((x/y) ^ 0.65), where x is duration and y is base duration.</p>
<hr>
    <p><b>Warfare</b></p>
    <p><b>W180</b> - For All Factions</p>
	<p><b>Research Name</b>: Formation</p>
	<p><b>Requirement</b>: 1000 Call to Arms (This R), Research Dueling (W10) & Exertion (W50)</p>
	<p><b>Cost</b>: 24.85 Uqig (2.485E157)</p>
	<p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.</p>
<br/>
    <p><b>W525</b> - For Evil</p>
	<p><b>Research Name</b>: Bloodlust</p>
	<p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)</p>
	<p><b>Cost</b>: 140.2 USpg (1.402E218)</p>
	<p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.</p>
	<p><b>Formula</b>: (300 * floor(x ^ 0.3))%, where x is Faction Spells' Cast This Game.</p>
<br/>
    <p><b>W1275</b> - For All Factions</p>
	<p><b>Research Name</b>: Authority</p>
	<p><b>Hint</b>: How long does your Call to Arms last?</p>
	<p><b>Requirement</b>: 43200s (12 hours) Call to Arms Cast Time (This game).</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Non-Unique buildings you own.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Non-Unique buildings you own.</p>
<?php include "../scripts/footer.html"; ?>
