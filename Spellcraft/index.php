<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>
    <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
    <h6>Spellcraft Facility</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Spellcraftr.png" alt="Spellcraft" align="middle"> <b>Spellcraft</b></p>
<p>Delve into the arcane mysteries of Spellcraft, discovering new ways to produce and use mana.</p>
<p><B>Increases</B>: <B>Fairy</B>, <B>Faceless</B>, and <B>Drow</B> production.</p>
<p>Pointing to this ingame will tell you how many slots are available also tells you your total research points.</p>
<br/>
<p><b>Research Point Production</b>
<p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
<br/>
<p><b>S1</b> - For <b>Fairy</b> - Research Name: <b>Enchanting</b> <p><b>Cost</b>: 750 Qag (7.5E125) <p><b>Effect</b>: Increase the production of Enchanted Fields based on mana produced. <p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.</p>
<br/>
<p><b>S10</b> - For <b>Angel</b> - Research Name</b>: <b>Channeling</b></p><p><b>Requirement</b>: 2000 Heaven's Gate. (This Game)</b></p><p><b>Cost</b>: 28.83 Uqag (2.883E127)</b></p><p><b>Effect</b>: Increase the production of all other buildings by 110% per Heaven's Domain you own.</p>
<br/>
<p><b>S30</b> - For <b>All Factions</b> - Research Name</b>: <b>Vacuumancy</b></p><p><b>Requirement</b>: Have 4000 Mana. (This Game)</b></p><p><b>Cost</b>: 95.88 Dqag (9.588E130)</b></p><p><b>Effect</b>: Increase maximum mana and mana regeneration rate based on time spent in this game.</b></p><p><b>Formula</b>: Max Mana:(0.1 * x), where x is your Playtime (This Game) stat in hours.</b></p><p><b>Formula</b>: Mana Regeneration:(0.5 * x ^ 0.5), where x is your Playtime (This Game) stat in hours.</p>
<br/>
<p><b>S50</b> - For <b>Goblin</b> - Research Name</b>: <b>Conjuration</b></p><p><b>Requirement</b>: Have 6000 mana (as Fairy) (This Game)<p><b>Cost</b>: 318.8 Tqag (3.188E134)</b></p><p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</b></p><p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.</b></p><p><b>Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.</p>
<br/>
<p><b>S105</b> - For <b>All Factions</b> - Research Name</b>: <b>Mysticism</b></p><p><b>Requirement</b>: 600 Researches (Total)</b></p><p><b>Cost</b>: 1.544 Spqag (1.544E144) <p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</b></p><p><b>Formula</b>: floor(x ^ 0.5), where x is number of researches made.</p>
<br/>
<p><b>S135</b> - For <b>All Factions</b> - Research Name</b>: <b>Augmentation</b></p><p><b>Requirement</b>: 5000 Unique Buildings (as Fairy) (This Game)</b></p><p><b>Cost</b>: 296 Ocqag (2.96E149)</b></p><p><b>Effect</b>: Increase the production of Unique Buildings based on maximum mana.</b></p><p><b>Formula</b>: round(2 * x^0.8)%, where x is your maximum mana.</p>
<br/>
<p><b>S150</b> - For <b>All Factions</b> - Research Name</b>: <b>Pyromancy</b></p><p><b>Requirement</b>: Research Inflame (D10) &amp; Fusion (A105)</b></p><p><b>Cost</b>: 129.6 Noqag (1.296E152)</b></p><p><b>Effect</b>: Increase the production of the two highest building tiers based on your mana regeneration.</b></p><p><b>Formula</b>: round(4 * x^1.3)%, where x is your Mana per Second stats.</p>
<br/>
<p><b>S175</b> - For <b>Elf</b> - Research Name</b>: <b>Empowered Luck</b></p><p><b>Requirement</b>: Research Blessing (D1) & Augmentation (S135)</b></p><p><b>Cost</b>: 3.273 UQig (3.273E156)</b></p><p><b>Effect</b>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.</p>
<br/>
<p><b>S180</b> - For <b>Fairy</b> - Research Name: <b>Incantation</b></p><p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)</b></p><p><b>Cost</b>: 3.273 UQig (3.273E156)</b></p><p><b>Effect</b>: Increase mana regeneration based on the number of assistants you own.</b></p><p><b>Formula</b>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.</p>
<br/>
<p><b>S200</b> - For <b>All Factions</b> - Research Name</b>: <b>Cryomancy</b></p><p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)</b></p><p><b>Cost</b>: 82.65 DQig (8.265E160)</b></p><p><b>Effect</b>: Increase the production of all buildings based on your current mana (the less mana, the better bonus).</b></p><p><b>Formula</b>: round((100 - x) ^ 1.75)%, where x is percentage of max mana.</p>
<br/>
<p><b>S215</b> - For <b>All Factions</b> - Research Name</b>: <b>Projection</b></p><p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) &amp; Incantation (S180)</b></p><p><b>Cost</b>: 36.16 TQig (3.616E163)</b></p><p><b>Effect</b>: While Spiritual Surge is active, increase the production of all buildings based on the amount of active spells.</b></p><p><b>Formula</b>: 100 * ((10 * x) ^ y), where x is active spells and y is ascension. (does not include Spiritual Surge)</p>
<br/>
<p><b>S225</b> - For <b>Undead</b> - Research Name</b>: <b>Necromancy</b></p><p><b>Requirement</b>: Research Resurrection (D175) &amp; Cryomancy (S200) <p> Cost</b>: 2.087 QaQig (2.087E165)</b></p><p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.</b></p><p><b>Formula</b>: round(5 * x ^ 0.75)%, where x is the number of Necropolises you own.</p>
<br/>
<p><b>S250</b> - For <b>All Factions</b> - Research Name</b>: <b>Aeromancy</b></p><p><b>Requirement</b>: Research Weather Control (D225) &amp; Explosives (A150)</b></p><p><b>Cost</b>: 52 QiQig (5.27E169)</b></p><p><b>Effect</b>: Increase the production of Unique Buildings based on mana produced in this game.</b></p><p><b>Formula</b>: round(0.5 * x ^ 0.58)%, where x is your Mana Produced (This Game) stat.</p>
<br/>
<p><b>S251</b> - For <b>Faceless</b> - Research Name</b>: <b>Assimilation</b></p><p><b>Requirement</b>: Secrets of the Ancients (as Faceless)</b></p><p><b>Cost</b>: 79.05 QiQig (7.905E169)</b></p><p><b>Effect</b>: Increase the production of Sunken Cities based on time spent affiliated with factions different than the Faceless.</b></p><p><b>Formula</b>: round(0.3 * x ^ 0.7)%, where x is total time spent as non-Faceless factions.</p>
<br/>
<p><b>S270</b> - For <b>All Factions</b> - Research Name</b>: <b>Runecarving</b></p><p><b>Requirement</b>: 500,000 clicks (This game)</b></p><p><b>Cost</b>: 175.2 SxQig (1.752E173)</b></p><p><b>Effect</b>: Increase the production of all buildings based on your bonus from Gems.</b></p><p><b>Formula</b>: round(1.15 * x ^ 0.75)%, where x is your gem bonus.</p>
<br/>
<p><b>S300</b> - For <b>Titan</b> - Research Name</b>: <b>Chain Lightning</b></p><p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)</b></p><p><b>Cost</b>: 33 OcQig (3.36E178)</b></p><p><b>Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.</b></p><p><b>Formula</b>: round(120 * x ^ 0.8)%, where x is your Lightning Strikes cast (This Game) stat.</p>
<br/>
<p><b>S305</b> - For <b>All Factions</b> - Research Name</b>: <b>Mesmerization</b></p><p><b>Requirement</b>: 2 days as Faceless (Total across all R)</b></p><p><b>Cost</b>: 225.2 OcQig (2.252E179)</b></p><p><b>Effect</b>: Increase the production of all buildings by a fraction of your Offline Production Bonus.</b></p><p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is your (pre-Ascension) offline production bonus as a multiplier.</p>
<br/>
<p><b>S330</b> - For <b>All Factions</b> - Research Name</b>: <b>Reverberation</b></p><p><b>Requirement</b>: Research Cryomancy (A200) &amp; Weather Control (D225)</b></p><p><b>Cost</b>: 6.443 Sxg (6.443E183)</b></p><p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.</b></p><p><b>Formula</b>: 375 * 2^x%, where x is the number of spells currently active.</p>
<br/>
<p><b>S375</b> - For <b>Faceless</b> - Research Name</b>: <b>Illusion</b></p><p><b>Requirement</b>: Research Reverberation (S330) &amp; Mesmerization (S305)</b></p><p><b>Cost</b>: 541 DSxg (5.41E191)</b></p><p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.</b></p><p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes.</p>
<br/>
<p><b>S400</b> - For <b>All Factions</b> - Research Name</b>: <b>Capacity</b></p><p><b>Requirement</b>: Research Projection (S215) &amp; Domination (W275)</b></p><p><b>Cost</b>: 13.66 QaSxg (1.366E196)</b></p><p><b>Effect</b>: Increase maximum mana based on the highest amount of spells cast in a single game.</b></p><p><b>Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat.</p>
<br/>
<p><b>S435</b> - For <b>Drow</b> - Research Name: <b>Spellbinding</b></p><p><b>Requirement</b>: 14400s (4 hour) Combo Strike Cast Time (This Game)</b></p><p><b>Cost</b>: 19.89 SxSxg (1.989e202)</b></p><p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.</p>
<br/>
<p><b>S460</b> - For <b>All Factions</b> - Research Name</b>: <b>Focus</b></p><p><b>Requirement</b>: 25000 spells cast (This game)</b></p><p><b>Cost</b>: 5.023 SpSxg (5,023E206)</b></p><p><b>Effect</b>: Increase the production of all buildings based on the times you cast your faction spell in this game.</b></p><p><b>Formula</b>: (15 * x ^ 0.8)%, where x is Faction Spells Cast This Game.</p>
<br/>
<p><b>S500</b> - For <b>All Factions</b> - Research Name</b>: <b>Heirlooms</b></p><p><b>Requirement</b>: 40 Artifacts (as Drow)</b></p><p><b>Cost</b>: 5.554 Spg (5,554E213)</b></p><p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.</b></p><p><b>Maximum Mana</b>: (75 * x ^ 1.1), where x is amount of artifacts you own.</b></p><p><b>Mana Regeneration</b>: (5 * x ^ 1.05), where x is amount of artifacts you own.</p>
<br/>
<p><b>S545</b> - For <b>All Factions</b> - Research Name</b>: <b>Hierarchy</b></p><p><b>Requirement</b>: 10M (1E7) mana produced (This Game)</b></p><p><b>Cost</b>: 466.3 DSpq (4.663E221)</b></p><p><b>Effect</b>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</b></p><p><b>Formula</b>: (0.1 * x ^ 0.45 * T ^ 2)%, where x is Mana Produced (This Game) stat, and T is the building tier, starting at 11 for Farms and decreasing to 1 for Halls of Legends.</p>
<br/>
<p><b>S590</b> - For <b>Fairy,Dwarf</b> - Research Name: <b>Trickery</b></p><p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwairy) (This Game), Research Mysticism(S105) & Illusion (S375)</b></p><p><b>Cost</b>: 39.16 QiSpg (3.916E229)</b></p><p><b>Effect</b>: Increase the production of Neutral buildings based on maximum Mana.</b></p><p><b>Formula</b>: (0.5 * x ^ 1.05)%, where x is Maximum Mana.</p>
<br/>
<p><b>S1275</b> - For <b>All Factions</b> - Research Name: <b>Sequence</b></p><p><b>Requirement</b>: 60.000 spells cast (This Game).</p><p><b>Cost</b>: 152.4 Dvg (1.524e71)<p><b>Effect</b>: Reduce spell cost for higher spell tiers.<p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
<br/>
<p><b>S1450</b> - For <b>Neutral,Dragon</b> - Research Name: <b>Spellstorm</b></p><p><b>Requirement</b>: Research S435, C1325, Any Neutral, Dragon</p><p><b>Cost</b>: 4.041 Sxvg (4.041e81)<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of active spells.<p><b>Formula</b>: (50 * x ^ 1.5)%, where x is number of active spells, counting tiers.</p>
<br/>
<p><b>S1500</b> - For <b>Faceless,Dragon</b> - Research Name: <b>Psionics</b></p><p><b>Requirement</b>: 1000 Base Assistants, Research S545, E1325, as Faceless, Dragon</p><p><b>Cost</b>: 3.843 Spvg (3.843e84)<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of assistants you own.<p><b>Formula</b>: (8.5 * x ^ 0.85)%, where x is assistants.</p>
<br/>
<p><b>S2875</b> - For <b>Mercenary</b> - Research Name: <b>Scholarship</b></p><p><b>Requirement</b>: 11000 Merc Unique Buildings.</b></p><p><b>Cost</b>: 30.5 QaQig (3.05e166)</p><p><b>Effect</b>: Increases the production of Non-Unique buildings by 3.5% per Unique building.</p>
<br/>
<p><b>S3200</b> - For <b>All Factions</b> - Research Name: <b>Manipulation</b></p><p><b>Requirement</b>: 1B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).</p><p><b>Cost</b>: 695.7 Sxg (6.957e185)</b><p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (Share Benefits tiers also count).</b><p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 1200%.</p>
<?php include "../scripts/footer.html"; ?>
