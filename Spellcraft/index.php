<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>
    <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a><h6>The Research Facilities</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/Spellcraftr.png" alt="Spellcraft" align="middle"> <b>Spellcraft</b></p>
    <p>Delve into the arcane mysteries of Spellcraft, discovering new ways to produce and use mana.</p>
    <p><B>Increases</B>: <B>Fairy</B>, <B>Faceless</B>, and <B>Drow</B> production.</p>
    <p><b>----------------------------------</B></p>
    <h6>Spellcraft Facility</h6>
    <p><b>S1</b> - <b>For</b> Fairy - <B>Research Name</B> Enchanting</p>
    <p><B>Cost</B>: 750 Qag (7.5E125)</P>
    <p><B>Effect</B>: Increase the production of Enchanted Fields based on mana produced.</p>
    <p><B>Formula</B>: round(0.75 * x^0.6)%, where x is your Mana Produced (This Game) stat.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S10</b> - <b>For</b> Angel - <B>Research Name</B> Channeling</p>
    <p><B>Requirement</B>: 2000 Heaven's Gate</P>
    <p><B>Cost</B>: 28.83 Uqag (2.883E127)</P>
    <p><B>Effect</B>: Increase the production of all other buildings by 110% per Heaven's Domain you own.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S30</b> - <b>For</b> Any - <B>Research Name</B> Vacuumancy</p>
    <p><B>Requirement</B>: Have 4000 Mana</P>
    <p><B>Cost</B>: 95.88 Dqag (9.588E130)</P>
    <p><B>Effect</B>: Increase maximum mana and mana regeneration rate based on time spent in this game.</p>
    <p><B>Formula</B>: Maximum Mana: floor(45x), Mana Regeneration: \frac {floor(75x^{0.4})} {10}, where x is your Playtime (This Game) stat in hours.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S50</B>: - <b>For</b> Goblin - <B>Research Name</B> Conjuration</p>
    <p><B>Requirement</B>: Have 6000 mana(as Fairy)</p>
    <p><B>Cost</B>: 318.8 Tqag (3.188E134)</p>
    <p><B>Effect</B>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
    <p><B>Formula</B>: floor(x /650), where x is the number of Goblin Banks you own.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S105</B>: - <b>For</b> Any - <B>Research Name</B> Mysticism </p>
    <p><B>Requirement</B>: 600 Researches</p>
    <p><B>Cost</B>: 1.544 Spqag (1.544E144) </p>
    <p><B>Effect</B>: Increase mana regeneration based on the amount of research made.</p>
    <p><B>Formula</B>: floor(x^0.5), where x is number of researches made.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S135</B>: - <b>For</b> Any - <B>Research Name</B> Augmentation</p>
    <p><B>Requirement</B>: 5000 Unique Buildings(as Fairy)</p>
    <p><B>Cost</B>: 296 Ocqag (2.96E149)</p>
    <p><B>Effect</B>: Increase the production of Unique Buildings based on maximum mana.</p>
    <p><B>Formula</B>: round(2 * x^0.8)%, where x is your maximum mana.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S150</B>: - <b>For</b> Any - <B>Research Name</B> Pyromancy </p>
    <p><B>Requirement</B>: Research Inflame (D10) & Fusion (A105)</p>
    <p><B>Cost</B>: 129.6 Noqag (1.296E152) </p>
    <p><B>Effect</B>: Increase the production of the two highest building tiers based on your mana regeneration.</p>
    <p><B>Formula</B>: round(4 * x^1.3)%, where x is your Mana per Second stat.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S175</B>: - <b>For</b> Elf - <B>Research Name</B> Empowered Luck
    <p><B>Requirement</B>: Research Blessing (D1) & Augmentation (S135)</p>
    <p><B>Cost</B>: 3.273 UQig (3.273E156)</p>
    <p><B>Effect</B>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S180</B>: - <b>For</b> Fairy - <B>Research Name</B> Incantation </p>
    <p><B>Requirement</B>: Research Enchanting (S1) & Mysticism (S105)</p>
    <p><B>Cost</B>: 3.273 UQig (3.273E156)</p>
    <p><B>Effect</B>: Increase mana regeneration based on the number of assistants you own.</p>
    <p><B>Formula</B>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S200</B>: - <b>For</b> Any - <B>Research Name</B> Cryomancy
    <p><B>Requirement</B>: Research Conjuration (S50) & Refraction (A55)</p>
    <p><B>Cost</B>: 82.65 DQig (8.265E160)</p>
    <p><B>Effect</B>: Increase the production of all buildings based on your current mana (the less mana, the better bonus).</p>
    <p><B>Formula</B>: round(x^1.75)%, where x is percentage of current mana.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S215</B>: - <b>For</b> Any - <B>Research Name</B> Projection
    <p><B>Requirement</B>: 300 Spiritual Surge (Total this R), Research Channeling (S10) & Incantation (S180)</p>
    <p><B>Cost</B>: 36.16 TQig (3.616E163) </p>
    <p><B>Effect</B>: Increase Spiritual Surge effect by 150% per other active spell.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S225</B>: - <b>For</b> Undead - <B>Research Name</B> Necromancy
    <p><B>Requirement</B>: Research Resurrection (D175) & Cryomancy (S200)
    <p><B>Cost</B>: 2.087 QaQig (2.087E165) </p>
    <p><B>Effect</B>: Increase the production of assistants based on the amount of Necropolises you own.</p>
    <p><B>Formula</B>: round(5 * x^0.75)%, where x is the number of Necropolises you own.
    <p><b>----------------------------------</B></p>
    <p><b>S250</B>: - <b>For</b>Any - <B>Research Name</B> Aeromancy </p>
    <p><B>Requirement</B>: Research Weather Control (D225) & Explosives (A150)</p>
    <p><B>Cost</B>: 52 QiQig (5.27E169) </p>
    <p><B>Effect</B>: Increase the production of Unique Buildings based on mana produced in this game.</p>
    <p><B>Formula</B>: round(0.5 * x^0.58)%, where x is your Mana Produced (This Game) stat.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S251</B>: - <b>For</b> Faceless - <B>Research Name</B> Assimilation </p>
    <p><B>Requirement</B>: Secrets of the Ancients (as Faceless)
    <p><B>Cost</B>: 79.05 QiQig (7.905E169)
    <p><B>Effect</B>: Increase the production of Sunken Cities based on time spent affiliated with factions different than the Faceless.</p>
    <p><B>Formula</B>: round(0.3 * x^0.7)%, where x is total time spent as non-Faceless factions.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S270</B>: - <b>For</b> Any - <B>Research Name</B> Runecarving</p>
    <p><B>Requirement</B>: 500,000 clicks (This game)</p>
    <p><B>Cost</B>: 175.2 SxQig (1.752E173) </p>
    <p><B>Effect</B>: Increase the production of all buildings except the most productive one based on maximum mana. While offline, affects all buildings.</p>
    <p><B>Formula</B>: round(x^0.9)%, where x is your maximum mana.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S300</B>: - <b>For</b> Titan - <B>Research Name</B> Chain Lightning</p>
    <p><B>Requirement</B>: 25 Brainwaves (Faceless) (This R)</p>
    <p><B>Cost</B>: 33 OcQig (3.36E178) </p>
    <p><B>Effect</B>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.</p>
    <p><B>Formula</B>: 250 * (x / 20)^0.9%, where x is your Lightning Strikes Active Time This Game stat.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S305</B>: - <b>For</b> Any - <B>Research Name</B> Mesmerization </p>
    <p><B>Requirement</B>: 5 days as Faceless (Total across all R)</p>
    <p><B>Cost</B>: 225.2 OcQig (2.252E179) </p>
    <p><B>Effect</B>: Increase the production of all buildings by a fraction of your offline production bonus.</p>
    <p><B>Formula</B>: 2.5 *log(1 +x)^2.5, where x is your (pre-Ascension) offline production bonus as a multiplier.
    <p><b>----------------------------------</B></p>
    <p><b>S330</B>: - <b>For</b> Any - <B>Research Name</B> Reverberation </p>
    <p><B>Requirement</B>: Research Cryomancy (A200) & Weather Control (D225)</p>
    <p><B>Cost</B>: 6.443 Sxg (6.443E183)</p>
    <p><B>Effect</B>: Increase the production of all buildings by 3000% while you have 3 active spells, 6000% when you have 4.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S375</B>: - <b>For</b> Faceless - <B>Research Name</B> Illusion </p>
    <p><B>Requirement</B>: Research Reverberation (S330), Mesmerization (S305)</p>
    <p><B>Cost</B>: 541 DSxg (5.41E191) </p>
    <p><B>Effect</B>: Brainwave also provides progressively more assistants over its duration.</p>
    <p><B>Formula</B>: floor(x^2), where x is how many minutes the spell has been active.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S400</B>: - <b>For</b> Any - <B>Research Name</B> Capacity</p>
    <p><B>Requirement</B>: Research Projection (S215) & Incantation (S175)</p>
    <p><B>Cost</B>: 13.66 QaSxg (1.366E196) </p>
    <p><B>Effect</B>: Increase maximum mana based on the highest amount of spells cast in a single game.</p>
    <p><B>Formula</B>: floor(35 * x ^ 0.35), where x is your Spell Cast (Max) stat.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S435</B>: - <b>For</b> Drow - <B>Research Name</B> Spellbinding</p>
    <p><B>Requirement</B>: 14400s (4 hour) Combo Strike Cast Time (This Game)</p>
    <p><B>Cost</B>: 1.989e213 </p>
    <p><B>Effect</B>: Passively grants the effects from Call to Arms while offline.</p>
    <p><b>----------------------------------</B></p>
    <p><b>S460</B>: - <b>For</b> Any - <B>Research Name</B> Focus</p>
    <p><B>Requirement</B>: 25000 spells cast (This game)</p>
    <p><B>Cost</B>: 5.023 SpSxg (5,023E206)</p>
    <p><B>Effect</B>: Increase the production of all buildings based on the times you cast your faction spell in this game.</p>
    <p><B>Formula</B>: 15 * x^0.8%, where x is Faction Spells' Cast This Game (Vanilla + Prestige spell count).</p>
    <p><b>----------------------------------</B></p>
    <p><b>S500</B>: - <b>For</b> Any - <B>Research Name</B> Heirlooms</p>
    <p><B>Requirement</B>: 40 Artifacts (as Drow)</p>
    <p><B>Cost</B>: 5.554 Spg (5,554E213)</p>
    <p><B>Effect</B>: Increases maximum mana based on artifacts found.</p>
    <p><B>Formula</B>: 100 * x ^ 1.1, where x is artifacts found.
    <p><b>----------------------------------</B></p>
    <p><b>S545</B>: - <b>For</b> Any - <B>Research Name</B> Hierarchy</p>
    <p><B>Requirement</B>: 10M (1E7) mana produced (This Game)</p>
    <p><B>Cost</B>: 466.3 DSpq (4.663E221)</p>
    <p><B>Effect</B>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</p>
    <p><B>Formula</B>: (0.1 * x^0.45 * T^2)%, where x is Mana Produced (This Game) stat, and T is the building tier, starting at 11 for Farms and decreasing to 1 for Halls of Legends</p>
    <p><b>----------------------------------</B></p>
    <p><b>S590</B>: - <b>For</b> Fairy,Dwarf - <B>Research Name</B> Trickery</p>
    <p><B>Requirement</B>: 200 Dwarf Exchanges (as Dwairy), Research Mysticism(S105) and Illusion (S375)</p>
    <p><B>Cost</B>: 39.16 QiSpg (3.916E229) </p>
    <p><B>Effect</B>: Increase the production of Neutral buildings based on maximum Mana.</p>
    <p><B>Formula</B>: 0.5 * x^1.05%, where x is Maximum Mana.</p>
    <p><b>----------------------------------</B></p>
    <p><B>S1275</B>: - <b>For</b> Any - <B>Research Name</B> Sequence</p>
    <p><B>Requirement</B>: 60.000 spells cast. (This Game)
    <p><B>Requirement</B>: Post Ascension Only
    <p><B>Cost</B>: 555.1 Dvg (5.551e71)</p>
    <p><B>Effect</B>: Reduce spell cost for higher spell tiers.
    <p><B>Formula</B>: reduces multiplier by 0.5, base multiplier is 2.</p>
    <p><b>----------------------------------</B></p>
    <p><B>S1450</B>: - <b>For</b> Neutral,Dragon - <B>Research Name</B> Spellstorm</p>
    <p><B>Requirement</B>: Research S435, C1325, Affiliated Dragon
    <p><B>Requirement</B>: Post Ascension Only
    <p><B>Effect</B>: Increase the production of Unique buildings based on the amount of active spells.
    <p><B>Formula</B>: 50* x^1.5, where x is number of active spells, counting tiers.</p>
    <p><b>----------------------------------</B></p>
    <p><B>S1500</B>: - <b>For</b> Faceless,Dragon - <B>Research Name</B> Psionics</p>
    <p><B>Requirement</B>: 1000 Base Assistants, Research S545, E1325, Affiliated Faceless/Dragon
    <p><B>Requirement</B>: Post Ascension Only
    <p><B>Effect</B>: Increase the production of Unique Buildings based on the amount of assistants you own.
    <p><B>Formula</B>: 8.5* x ^0.85, where x is assistants.</p>
    <p><b>----------------------------------</B></p>
    <p><B>S2875</B>: - <b>For</b> Mercenary - <B>Research Name</B> Scholarship</p>
    <p><B>Requirement</B>: 12000 Freemason's Halls.
    <p><B>Cost</B>: 7.26 Qiqag (7.26e168)
    <p><B>Effect</B>: Increases the production of Non-Unique buildings by 0.4% per Unique building.
    <p><b>----------------------------------</B></p>
    <p><B>S3200</B>: - <b>For</b> All Factions - <B>Research Name</B> Manipulation</p>
    <p><B>Requirement</B>: 1B (1e9) Tax Collection cast (This R), (Calefaction A1325) and (Psionics S1500).
    <p><B>Cost</B>: 387 USxg (3.87e188)
    <p><B>Effect</B>: Each active spell increases mana regen by an additional 8% (good merc TC tiers also count).
<?php include "../scripts/footer.html"; ?>
