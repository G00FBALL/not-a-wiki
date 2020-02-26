<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
        <h6>Spellcraft Facility</h6>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Spellcraftr.png" alt="Spellcraft" align="middle"> <b>Spellcraft</b></p>
        <p>Delve into the arcane mysteries of Spellcraft, discovering new ways to produce and use mana.</p>
        <p><b>Increases</b>: <b>Fairy</b>, <b>Faceless</b>, and <b>Drow</b> production.</p>
        <p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
        <br/>
        <p><b>Research Point Production</b></p>
        <p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
        <br/>
        <p><b>S1</b> - For Fairy</p>
        <p><b>Research Name</b>: Enchanting</p>
        <p><b>Cost</b>: 750 Qag (7.5E125)</p>
        <p><b>Effect</b>: Increase the production of Enchanted Fields based on mana produced.</p>
        <p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.</p>
        <hr>
        <p><b>S10</b> - For Angel</p>
        <p><b>Research Name</b>: Channeling.</p>
        <p><b>Requirement</b>: 2000 Heaven's Gate. (This Game)</p>
        <p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
        <p><b>Effect</b>: Increase the production of all other buildings by 110% per Heaven's Domain you own.</p>
        <hr>
        <p><b>S30</b> - For All Factions</p>
        <p><b>Research Name</b>: Vacuumancy</p>
        <p><b>Requirement</b>: Have 4000 Mana. (This Game)</p>
        <p><b>Cost</b>: 95.88 Dqag (9.588E130)</p>
        <p><b>Effect</b>: Increase maximum mana and mana regeneration rate based on time spent in this game.</p>
        <p><b>Formula</b>: Max Mana:(0.1 * x), where x is your Playtime (This Game) stat in seconds.</p>
        <p><b>Formula</b>: Mana Regeneration:(0.5 * x ^ 0.5), where x is your Playtime (This Game) stat in seconds.</p>
        <hr>
        <p><b>S50</b> - For Goblin</p>
        <p><b>Research Name</b>: Conjuration</p>
        <p><b>Requirement</b>: Have 6000 mana (as Fairy) (This Game)</p>
        <p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
        <p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
        <p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.</p>
        <p><b>Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.</p>
        <hr>
        <p><b>S105</b> - For All Factions</p>
        <p><b>Research Name</b>: Mysticism</p>
        <p><b>Requirement</b>: 600 Researches (Total)</p>
        <p><b>Cost</b>: 1.544 Spqag (1.544E144)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</p>
        <p><b>Formula</b>: floor(x ^ 0.5), where x is number of researches made.</p>
        <hr>
        <p><b>S135</b> - For All Factions</p>
        <p><b>Research Name</b>: Augmentation</p>
        <p><b>Requirement</b>: 5000 Unique Buildings (as Fairy) (This Game)</p>
        <p><b>Cost</b>: 296 Ocqag (2.96E149)</p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on maximum mana.</p>
        <p><b>Formula</b>: round(2 * x^0.8)%, where x is your maximum mana.</p>
        <hr>
        <p><b>S150</b> - For All Factions</p>
        <p><b>Research Name</b>: Pyromancy</p>
        <p><b>Requirement</b>: Research Inflame (D10) & Fusion (A105)</p>
        <p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
        <p><b>Effect</b>: Increase the production of the two highest building tiers based on your mana regeneration.</p>
        <p><b>Formula</b>: round(4 * x^1.3)%, where x is your Mana per Second stat.</p>
        <hr>
        <p><b>S175</b> - For Elf</p>
        <p><b>Research Name</b>: Empowered Luck</p>
        <p><b>Requirement</b>: Research Blessing (D1) & Augmentation (S135)</p>
        <p><b>Cost</b>: 3.273 UQig (3.273E156)</p>
        <p><b>Effect</b>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.</p>
        <hr>
        <p><b>S180</b> - For Fairy</p>
        <p><b>Research Name</b>: Incantation</p>
        <p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)</p>
        <p><b>Cost</b>: 3.273 UQig (3.273E156)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the number of assistants you own.</p>
        <p><b>Formula</b>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.</p>
        <hr>
        <p><b>S200</b> - For All Factions</p>
        <p><b>Research Name</b>: Cryomancy</p>
        <p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)</p>
        <p><b>Cost</b>: 82.65 DQig (8.265E160)</p>
        <p><b>Effect</b>: Increase Spell Duration based on mana produced (this game).</p>
        <p><b>Formula</b>: (5 * ln(x) ^ 1.25), where x is mana produced (this game).</p>
        <hr>
        <p><b>S215</b> - For All Factions</p>
        <p><b>Research Name</b>: Projection</p>
        <p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) & Incantation (S180)</p>
        <p><b>Cost</b>: 36.16 TQig (3.616E163)</p>
        <p><b>Effect</b>: While Spiritual Surge is active, increase the production of all buildings based on the amount of active spells.</p>
        <p><b>Formula</b>: 100 * ((10 * x) ^ y), where x is active spells and y is Spiritual Surge tier.</p>
        <hr>
        <p><b>S225</b> - For Undead</p>
        <p><b>Research Name</b>: Necromancy</p>
        <p><b>Requirement</b>: Research Resurrection (D175) & Cryomancy (S200)</p>
        <p><b>Cost</b>: 2.087 QaQig (2.087E165)</p>
        <p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.</p>
        <p><b>Formula</b>: round(5 * x ^ 0.75)%, where x is the number of Necropolises you own.</p>
        <hr>
        <p><b>S250</b> - For All Factions</p>
        <p><b>Research Name</b>: Aeromancy</p>
        <p><b>Requirement</b>: Research Weather Control (D225) & Explosives (A150)</p>
        <p><b>Cost</b>: 52 QiQig (5.27E169)</p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on mana produced in this game.</p>
        <p><b>Formula</b>: round(0.5 * x ^ 0.58)%, where x is your Mana Produced (This Game) stat.</p>
        <hr>
        <p><b>S251</b> - For Faceless</p>
        <p><b>Research Name</b>: Assimilation</p>
        <p><b>Requirement</b>: Secrets of the Ancients (as Faceless)</p>
        <p><b>Cost</b>: 79.05 QiQig (7.905E169)</p>
        <p><b>Effect</b>: Increase the production of Sunken Cities based on time spent affiliated with factions different than the Faceless.</p>
        <p><b>Formula</b>: round(0.3 * x ^ 0.7)%, where x is total time spent as non-Faceless factions.</p>
        <hr>
        <p><b>S270</b> - For All Factions</p>
        <p><b>Research Name</b>: Runecarving</p>
        <p><b>Requirement</b>: 500,000 clicks (This game)</p>
        <p><b>Cost</b>: 175.2 SxQig (1.752E173)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on your bonus from Gems.</p>
        <p><b>Formula</b>: round(1.15 * x ^ 0.75)%, where x is your gem bonus.</p>
        <hr>
        <p><b>S300</b> - For Titan</p>
        <p><b>Research Name</b>: Chain Lightning</p>
        <p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)</p>
        <p><b>Cost</b>: 33 OcQig (3.36E178)</p>
        <p><b>Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.</p>
        <p><b>Formula</b>: round(120 * x ^ 0.8)%, where x is your Lightning Strikes cast (This Game) stat.</p>
        <hr>
        <p><b>S305</b> - For All Factions</p>
        <p><b>Research Name</b>: Mesmerization</p>
        <p><b>Requirement</b>: 2 days as Faceless (Total across all R)</p>
        <p><b>Cost</b>: 225.2 OcQig (2.252E179)</p>
        <p><b>Effect</b>: Increase the production of all buildings by a fraction of your Offline Production Bonus.</p>
        <p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is your (pre-Ascension) offline production bonus as a multiplier.</p>
        <hr>
        <p><b>S330</b> - For All Factions</p>
        <p><b>Research Name</b>: Reverberation</p>
        <p><b>Requirement</b>: Research Cryomancy (A200) & Weather Control (D225)</p>
        <p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.</p>
        <p><b>Formula</b>: (3000 * 2 ^ (x - 3)), where x is the number of spells currently active. (Capped at 300 spells)</p>
        <hr>
        <p><b>S375</b> - For Faceless</p>
        <p><b>Research Name</b>: Illusion</p>
        <p><b>Requirement</b>: Research Reverberation (S330) & Mesmerization (S305)</p>
        <p><b>Cost</b>: 541 DSxg (5.41E191)</p>
        <p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.</p>
        <p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes</p>
        <hr>
        <p><b>S400</b> - For All Factions</p>
        <p><b>Research Name</b>: Capacity</p>
        <p><b>Requirement</b>: Research Projection (S215) & Domination (W275)</p>
        <p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
        <p><b>Effect</b>: Increase maximum mana based on the highest amount of spells cast in a single game.</p>
        <p><b>Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat.</p>
        <hr>
        <p><b>S435</b> - For Drow</p>
        <p><b>Research Name</b>: Spellbinding</p>
        <p><b>Requirement</b>: 14400s (4 hour) Combo Strike Cast Time (This Game)</p>
        <p><b>Cost</b>: 19.89 SxSxg (1.989e202)</p>
        <p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.</p>
        <hr>
        <p><b>S460</b> - For All Factions</p>
        <p><b>Research Name</b>: Focus</p>
        <p><b>Requirement</b>: 25000 spells cast (This game)</p>
        <p><b>Cost</b>: 5.023 SpSxg (5,023E206)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the times you cast your faction spell in this game.</p>
        <p><b>Formula</b>: (15 * x ^ 0.8)%, where x is Faction Spells Cast This Game.</p>
        <hr>
        <p><b>S500</b> - For All Factions</p>
        <p><b>Research Name</b>: Heirlooms</p>
        <p><b>Requirement</b>: 40 Artifacts (as Drow)</p>
        <p><b>Cost</b>: 5.554 Spg (5,554E213)</p>
        <p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.</p>
        <p><b>Maximum Mana Formula</b>: (75 * x ^ 1.1), where x is amount of artifacts you own.</p>
        <p><b>Mana Regeneration Formula</b>: (5 * x ^ 1.05), where x is amount of artifacts you own.</p>
        <hr>
        <p><b>S545</b> - For All Factions</p>
        <p><b>Research Name</b>: Hierarchy</p>
        <p><b>Requirement</b>: 10M (1E7) mana produced (This Game)</p>
        <p><b>Cost</b>: 466.3 DSpq (4.663E221)</p>
        <p><b>Effect</b>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</p>
        <p><b>Formula</b>: (0.1 * x ^ 0.45 * (12 - T) ^ 2)%, where x is Mana Produced (This Game) stat, and T is building tier.</p>
        <hr>
        <p><b>S590</b> - For Fairy,Dwarf</p>
        <p><b>Research Name</b>: Trickery</p>
        <p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwairy) (This Game), Research Mysticism(S105) & Illusion (S375)</p>
        <p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
        <p><b>Effect</b>: Increase the production of Neutral buildings based on maximum Mana.</p>
        <p><b>Formula</b>: (0.5 * x ^ 1.05)%, where x is Maximum Mana.</p>
        <hr>
        <p><b>S1275</b> - For All Factions</p>
        <p><b>Research Name</b>: Sequence</p>
        <p><b>Requirement</b>: 60,000 spells cast (This Game).</p>
        <p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
        <p><b>Effect</b>: Reduce spell cost for higher spell tiers.</p>
        <p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
        <hr>
        <p><b>S1450</b> - For Neutral,Dragon</p>
        <p><b>Research Name</b>: Spellstorm</p>
        <p><b>Requirement</b>: Research S435, C1325, Any Neutral, Dragon</p>
        <p><b>Cost</b>: 4.041 Sxvg (4.041e81)</p>
        <p><b>Effect</b>: Increase the production of Unique buildings based on the amount of active spells.</p>
        <p><b>Formula</b>: (50 * x ^ 1.5)%, where x is number of active spells, counting tiers.</p>
        <hr>
        <p><b>S1500</b> - For Faceless,Dragon</p>
        <p><b>Research Name</b>: Psionics</p>
        <p><b>Requirement</b>: 1000 Base Assistants, Research S545, E1325, as Faceless, Dragon</p>
        <p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of assistants you own.</p>
        <p><b>Formula</b>: (8.5 * x ^ 0.85)%, where x is assistants.</p>
        <hr>
        <p><b>S2875</b> - For Mercenary</p>
        <p><b>Research Name</b>: Scholarship</p>
        <p><b>Requirement</b>: 11000 Merc Unique Buildings.</p>
        <p><b>Cost</b>: 30.5 QaQig (3.05e166)</p>
        <p><b>Effect</b>: Increases the production of Non-Unique buildings by 5% per Unique building.</p>
        <hr>
        <p><b>S3200</b> - For All Factions</p>
        <p><b>Research Name</b>: Manipulation</p>
        <p><b>Requirement</b>: 1B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).</p>
        <p><b>Cost</b>: 695.7 Sxg (6.957e185)</p>
        <p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (Share Benefits tiers also count).</p>
        <p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 1200%</p>
        <hr>
        <p><b>S5125</b> - For All Factions</p>
        <p><b>Research Name</b>: Spilling</p>
        <p><b>Requirement</b>: R175+, Forgotten Relic, Mana Loom artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced.</p>
        <p><b>Formula</b>: (2 * ln(1 + x) ^ 2), where x is mana produced (This Game)</p>
        <hr>
        <p><b>S5375</b> - For Chaos</p>
        <p><b>Research Name</b>: Invocation</p>
        <p><b>Requirement</b>: R177+, Forgotten Relic, Mana Loom artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.</p>
        <p><b>Formula</b>: Additive: (1000 + 80 * x ^ 0.8)</p>
        <p><b>Formula</b>: Multiplicative: (0.6 * x ^ 0.6), where x is spell activity time in seconds.</p>
        <hr>
        <p><b>S5625</b> - For All Factions</p>
        <p><b>Research Name</b>: Leylines</p>
        <p><b>Requirement</b>: R179+, Forgotten Relic, Mana Loom artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on assistants owned.</p>
        <p><b>Formula</b>: (0.65 * x ^ 0.35), where x is assistants</p>
        <hr>
        <p><b>S5875</b> - For All Factions</p>
        <p><b>Research Name</b>: Mirrors</p>
        <p><b>Requirement</b>: R181+, Forgotten Relic, Mana Loom artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.</p>
        <p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game</p>
        <?php include "../scripts/footer.html"; ?>
