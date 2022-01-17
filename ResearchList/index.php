<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6>
	<p>Information about how Research Slots / Budget work can be found at <b><a href = "http://musicfamily.org/realm/Research">Research</a></b>.</p>
	<p>All Researches can also be found in a graphical form at: <b><a href="http://musicfamily.org/realm/Researchtree">Research Tree</a></b>.<p>
	<hr>
	<p><b>Research Facilities</b>:<p>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Spellcraft.png" alt="Spellcraft" align="middle"><a href="#" onclick="return false;"><b> Spellcraft</b></a></p>
			<div class="autohide">
				<p><b>S1</b> - For Fairy</p>
				<p><b>Research Name</b>: Enchanting</p>
				<p><b>Cost</b>: 750 Qag (7.5e125)</p>
				<p><b>Effect</b>: Increase the production of Enchanted Fields based on mana produced in this game.</p>
				<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is your mana produced this game.</p>
				<hr>
				<p><b>S10</b> - For Angel</p>
				<p><b>Research Name</b>: Channeling</p>
				<p><b>Hint</b>: Open the Gates of Heaven.</p>
				<p><b>Requirement</b>: 2,000 Heaven's Gate. (This Game)</p>
				<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
				<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Heaven's Domain you own.</p>
				<p><b>Formula</b>: (110 * x)%, where x is the amount of Enchanted Fields you own.</p>
				<hr>
				<p><b>S30</b> - For All Factions</p>
				<p><b>Research Name</b>: Vacuumancy</p>
				<p><b>Requirement</b>: Have 4,000 Mana. (This Game)</p>
				<p><b>Cost</b>: 95.88 Dqag (9.588e130)</p>
				<p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration rate based on time spent in this game.</p>
				<p><b>Maximum Mana Formula</b>: +(0.1 * x), where x is time spent in this game.</p>
				<p><b>Mana Regeneration Formula</b>: +(0.5 * x ^ 0.5), where x is time spent in this game.</p>
				<hr>
				<p><b>S50</b> - For Goblin</p>
				<p><b>Research Name</b>: Conjuration</p>
				<p><b>Hint</b>: Under a large blue pool...</p>
				<p><b>Requirement</b>: Have 6,000 mana (as Fairy) (This Game)</p>
				<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
				<p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
				<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.</p>
				<p><b>Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.</p>
				<hr>
				<p><b>S105</b> - For All Factions</p>
				<p><b>Research Name</b>: Mysticism</p>
				<p><b>Hint</b>: I am a Research among Researches.</p>
				<p><b>Requirement</b>: 600 Researches (Total)</p>
				<p><b>Cost</b>: 1.544 Spqag (1.544e144)</p>
				<p><b>Effect</b>: Increase Mana Regeneration based on the amount of research made.</p>
				<p><b>Formula</b>: +floor(x ^ 0.5), where x is the amount of researches made.</p>
				<hr>
				<p><b>S135</b> - For All Factions</p>
				<p><b>Research Name</b>: Augmentation</p>
				<p><b>Hint</b>: More Unique buildings will do the trick!</p>
				<p><b>Requirement</b>: 4,000 Unique Buildings (as Fairy) (This Game)</p>
				<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
				<p><b>Effect</b>: Increase the production of Unique Buildings based on Maximum Mana.</p>
				<p><b>Formula</b>: round(2 * x^0.8)%, where x is your Maximum Mana.</p>
				<hr>
				<p><b>S150</b> - For All Factions</p>
				<p><b>Research Name</b>: Pyromancy</p>
				<p><b>Requirement</b>: Research Inflame (D10) & Fusion (A105)</p>
				<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
				<p><b>Effect</b>: Increase the production of the two highest building tiers based on your Mana Regeneration.</p>
				<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Mana Regeneration.</p>
				<hr>
				<p><b>S175</b> - For Elf</p>
				<p><b>Research Name</b>: Empowered Luck</p>
				<p><b>Requirement</b>: Research Blessing (D1) & Augmentation (S135)</p>
				<p><b>Cost</b>: 3.273 UQig (3.273e156)</p>
				<p><b>Effect</b>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by +24%.</p>
				<hr>
				<p><b>S180</b> - For Fairy</p>
				<p><b>Research Name</b>: Incantation</p>
				<p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)</p>
				<p><b>Cost</b>: 3.273 UQig (3.273e156)</p>
				<p><b>Effect</b>: Increase Mana Regeneration based on the number of assistants you own.</p>
				<p><b>Formula</b>: +(floor(16 * x ^ 0.6) / 10), where x is the number of assistants you own.</p>
				<hr>
				<p><b>S200</b> - For All Factions</p>
				<p><b>Research Name</b>: Cryomancy</p>
				<p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)</p>
				<p><b>Cost</b>: 82.65 DQig (8.265e160)</p>
				<p><b>Effect</b>: Increase Spell Duration based on mana produced in this game.</p>
				<p><b>Formula</b>: (5 * ln(1 + x) ^ 1.5)%, where x is mana produced this game.</p>
				<hr>
				<p><b>S215</b> - For All Factions</p>
				<p><b>Research Name</b>: Projection</p>
				<p><b>Hint</b>: How many of these are required for a seance?</p>
				<p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) & Incantation (S180)</p>
				<p><b>Cost</b>: 36.16 TQig (3.616e163)</p>
				<p><b>Effect</b>: While Spiritual Surge is active, increase the production of all buildings based on the amount of active spells.</p>
				<p><b>Formula</b>: (100 * (10 * x) ^ y)%, where x is active spells and y is Spiritual Surge tier.</p>
				<hr>
				<p><b>S225</b> - For Undead</p>
				<p><b>Research Name</b>: Necromancy</p>
				<p><b>Requirement</b>: Research Resurrection (D175) & Cryomancy (S200)</p>
				<p><b>Cost</b>: 2.087 QaQig (2.087e165)</p>
				<p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.</p>
				<p><b>Formula</b>: (round(5 * x ^ 0.75))%, where x is the number of Necropolises you own.</p>
				<hr>
				<p><b>S250</b> - For All Factions</p>
				<p><b>Research Name</b>: Aeromancy</p>
				<p><b>Requirement</b>: Research Weather Control (D225) & Explosives (A150)</p>
				<p><b>Cost</b>: 52 QiQig (5.27e169)</p>
				<p><b>Effect</b>: Increase the production of Unique Buildings based on mana produced in this game.</p>
				<p><b>Formula</b>: (round(0.5 * x ^ 0.58))%, where x mana produced this game.</p>
				<hr>
				<p><b>S251</b> - For Faceless</p>
				<p><b>Research Name</b>: Assimilation</p>
				<p><b>Requirement</b>: Secrets of the Ancients (as Faceless)</p>
				<p><b>Cost</b>: 79.05 QiQig (7.905e169)</p>
				<p><b>Effect</b>: Increase the production of Sunken Cities based on time spent affiliated with factions different than the Faceless.</p>
				<p><b>Formula</b>: (round(0.3 * x ^ 0.7))%, where x is time spent as non-Faceless factions in this Reincarnation.</p>
				<hr>
				<p><b>S270</b> - For All Factions</p>
				<p><b>Research Name</b>: Runecarving</p>
				<p><b>Hint</b>: Click your way through.</p>
				<p><b>Requirement</b>: 500,000 clicks (This game)</p>
				<p><b>Cost</b>: 175.2 SxQig (1.752e173)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of Gems you own.</p>
				<p><b>Formula</b>: (1.25 * log10(1 + x) ^ 1.25)%, where x is the amount of Gems you own.</p>
				<hr>
				<p><b>S300</b> - For Titan</p>
				<p><b>Research Name</b>: Chain Lightning</p>
				<p><b>Hint</b>: I can feel the waves...</p>
				<p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)</p>
				<p><b>Cost</b>: 33 OcQig (3.36e178)</p>
				<p><b>Effect</b>: Lightning Strike duration will not be modified by other effects. While Lightning Strike is active, all non-target buildings have their production increased based on Lightning Strike activity time in this game.</p>
				<p><b>Formula</b>: (250 * (x / 20) ^ 0.9)%, where x is your Lightning Strike activity time this game.</p>
				<hr>
				<p><b>S305</b> - For All Factions</p>
				<p><b>Research Name</b>: Mesmerization</p>
				<p><b>Hint</b>: Face not required for a long time.</p>
				<p><b>Requirement</b>: 2 days as Faceless (across all Reincarnations)</p>
				<p><b>Cost</b>: 225.2 OcQig (2.252e179)</p>
				<p><b>Effect</b>: Increase the production of all buildings by a fraction of your Offline Production Bonus.</p>
				<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is your (pre-Ascension) offline production bonus as a multiplier.</p>
				<p><b>Note</b>: This research is treated as an A1 upgrade for A-nerf purposes.</p>
				<hr>
				<p><b>S330</b> - For All Factions</p>
				<p><b>Research Name</b>: Reverberation</p>
				<p><b>Requirement</b>: Research Cryomancy (S200) & Weather Control (D225)</p>
				<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.</p>
				<p><b>Formula</b>: (3000 * 2 ^ (x - 3))%, where x is the number of currently active spells (capped at 300 spells).</p>
				<hr>
				<p><b>S375</b> - For Faceless</p>
				<p><b>Research Name</b>: Illusion</p>
				<p><b>Requirement</b>: Research Reverberation (S330) & Mesmerization (S305)</p>
				<p><b>Cost</b>: 541 DSxg (5.41e191)</p>
				<p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.</p>
				<p><b>Formula</b>: +(floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes</p>
				<p><b>Note</b>: Those assistants do not count as base assistants and are not multiplied by upgrades that increase assistants count (such as FC3).</p>
				<hr>
				<p><b>S400</b> - For All Factions</p>
				<p><b>Research Name</b>: Capacity</p>
				<p><b>Requirement</b>: Research Projection (S215) & Domination (W275)</p>
				<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
				<p><b>Effect</b>: Increase Maximum Mana based on the highest amount of spells cast in a single game.</p>
				<p><b>Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat in this Reincarnation.</p>
				<hr>
				<p><b>S435</b> - For Drow</p>
				<p><b>Research Name</b>: Spellbinding</p>
				<p><b>Hint</b>: Combo Breaker!</p>
				<p><b>Requirement</b>: 14,400s (4 hour) Combo Strike Cast Time (This Game)</p>
				<p><b>Cost</b>: 19.89 SxSxg (1.989e202)</p>
				<p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.</p>
				<hr>
				<p><b>S460</b> - For All Factions</p>
				<p><b>Research Name</b>: Focus</p>
				<p><b>Hint</b>: Cast! Cast more!</p>
				<p><b>Requirement</b>: 25,000 spells cast (This game)</p>
				<p><b>Cost</b>: 5.023 SpSxg (5.023e206)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the times you cast your faction spell in this game.</p>
				<p><b>Formula</b>: (15 * x ^ 0.8)%, where x is the sum of Faction Spells Cast in this game.</p>
				<hr>
				<p><b>S500</b> - For All Factions</p>
				<p><b>Research Name</b>: Heirlooms</p>
				<p><b>Hint</b>: I wonder when will I have enough for my collection?</p>
				<p><b>Requirement</b>: 40 Artifacts (as Drow)</p>
				<p><b>Cost</b>: 5.554 Spg (5.554e213)</p>
				<p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.</p>
				<p><b>Maximum Mana Formula</b>: +(75 * x ^ 1.1), where x is the amount of artifacts you own.</p>
				<p><b>Mana Regeneration Formula</b>: +(5 * x ^ 1.05), where x is the amount of artifacts you own.</p>
				<hr>
				<p><b>S545</b> - For All Factions</p>
				<p><b>Research Name</b>: Hierarchy</p>
				<p><b>Hint</b>: I thirst for mana.</p>
				<p><b>Requirement</b>: 10 M (1e7) mana produced (This Game)</p>
				<p><b>Cost</b>: 466.3 DSpq (4.663e221)</p>
				<p><b>Effect</b>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</p>
				<p><b>Formula</b>: (0.1 * x ^ 0.45 * (12 - T) ^ 2)%, where x is mana produced in this game and T is building tier.</p>
				<hr>
				<p><b>S590</b> - For Fairy,Dwarf</p>
				<p><b>Research Name</b>: Trickery</p>
				<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwairy) (This Game), Research Mysticism(S105) & Illusion (S375)</p>
				<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
				<p><b>Effect</b>: Increase the production of Neutral buildings based on Maximum Mana.</p>
				<p><b>Formula</b>: (0.5 * x ^ 0.95)%, where x is your Maximum Mana.</p>
				<hr>
				<p><b>S1275</b> - For All Factions</p>
				<p><b>Research Name</b>: Sequence</p>
				<p><b>Hint</b>: Cast and cast and cast and cast!</p>
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
				<p><b>Hint</b>: I require assistance.</p>
				<p><b>Requirement</b>: 1,000 Base Assistants, Research S545, E1325, as Faceless, Dragon</p>
				<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
				<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of assistants you own.</p>
				<p><b>Formula</b>: (8.5 * x ^ 0.85)%, where x is the amount of assistants you own.</p>
				<hr>
				<p><b>S2875</b> - For Mercenary</p>
				<p><b>Research Name</b>: Scholarship</p>
				<p><b>Hint</b>: More buildings for the Black Army!</p>
				<p><b>Requirement</b>: 11,000 Merc Unique Buildings.</p>
				<p><b>Cost</b>: 30.5 QaQig (3.05e166)</p>
				<p><b>Effect</b>: Increases the production of Non-Unique buildings by 5% per Unique building.</p>
				<hr>
				<p><b>S3200</b> - For All Factions</p>
				<p><b>Research Name</b>: Manipulation</p>
				<p><b>Hint</b> First spell, many served.</p>
				<p><b>Requirement</b>: 1 B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).</p>
				<p><b>Cost</b>: 695.7 Sxg (6.957e185)</p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 8% per active spells.</p>
				<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 1200%.</p></p>
				<hr>
				<p><b>S5125</b> - For All Factions</p>
				<p><b>Research Name</b>: Spilling</p>
				<p><b>Requirement</b>: R175+, Forgotten Relic, Mana Loom artifact and upgrade</p>
				<p><b>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced in this game.</p>
				<p><b>Formula</b>: (1.75 * ln(1 + x) ^ 1.75)%, where x is mana produced this game.</p>
				<hr>
				<p><b>S5375</b> - For Chaos</p>
				<p><b>Research Name</b>: Invocation</p>
				<p><b>Requirement</b>: R177+, Forgotten Relic, Mana Loom artifact and upgrade</p>
				<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.</p>
				<p><b>Additive</b>: +(1000 + 80 * x ^ 0.8), where x is the spell activity time of your least used spell in this Reincarnation.</p>
				<p><b>Multiplicative</b>: (6 + 0.6 * x ^ 0.6)%, where x is the spell activity time of your least used spell in this Reincarnation.</p>
				<hr>
				<p><b>S5625</b> - For All Factions</p>
				<p><b>Research Name</b>: Leylines</p>
				<p><b>Requirement</b>: R179+, Forgotten Relic, Mana Loom artifact and upgrade</p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of assistants you own.</p>
				<p><b>Formula</b>: (0.75 * x ^ 0.25)%, where x is the amount of assistants you own.</p>
				<hr>
				<p><b>S5875</b> - For All Factions</p>
				<p><b>Research Name</b>: Mirrors</p>
				<p><b>Requirement</b>: R181+, Forgotten Relic, Mana Loom artifact and upgrade</p>
				<p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.</p>
				<p><b>Formula</b>: (ln(1 + x) ^ 1.75)%, where x is spell casts this game.</p>
				<hr>
				<p><b>S10875</b> - For All Factions</p>
				<p><b>Research Name</b>: Encompass</p>
				<p><b>Requirement</b>: R221+</p>
				<p><b>Effect</b>: Increase Maximum Mana based on the highest amount of Maximum Mana you had in this Reincarnation.</p>
				<p><b>Formula</b>: +(15 * ln(1 + x) ^ 3), where x is your highest max mana this Reincarnation.</p>
				<hr>
				<p><b>S11125</b> - For All Factions</p>
				<p><b>Research Name</b>: Multiplication</p>
				<p><b>Requirement</b>: R223+</p>
				<p><b>Effect</b>: Spells cast count more based on Mana produced in this game.</p>
				<p><b>Formula</b>: (ln(1 + x) ^ 1.5)%, where x is Mana produced in this game.</p>
				<hr>
				<p><b>S11375</b> - For All Factions</p>
				<p><b>Research Name</b>: Concentration</p>
				<p><b>Requirement</b>: R225+</p>
				<p><b>Effect</b>: Increase the production of Unique buildings based on Spells cast in this game.</p>
				<p><b>Formula</b>: (ln(1 + x) ^ 2)%, where x is spell casts this game.</p>
				<hr>
				<p><b>S11625</b> - For All Factions</p>
				<p><b>Research Name</b>: Completeness</p>
				<p><b>Requirement</b>: R227+</p>
				<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of Trophies you unlocked.</p>
				<p><b>Formula</b>: (1.5 * x ^ 0.5)%, where x is the amount of Trophies you unlocked.</p>
				<hr>
				<p><b>S11875</b> - For All Factions</p>
				<p><b>Research Name</b>: Arcane Efficiency</p>
				<p><b>Requirement</b>: R229+</p>
				<p><b>Effect</b>: While both Holy Light and Fairy Chanting are active, reduce the cost of all spells by 85%.</p>
				<p><b>Note</b>: Catalyst can be used as one of the spells.</p>
				<hr>
				<p><b>S12250</b> - For All Factions</p>
				<p><b>Research Name</b>: Necrodoomancy</p>
				<p><b>Requirement</b>: R232+</p>
				<p><b>Effect</b>: Reincarnations count more based on time spent as Undead in this Reincarnation.</p>
				<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is time spent as Undead in this Reincarnation.</p>
				<hr>
				<p><b>S13125</b> - All Factions</p>
				<p><b>Research Name</b>: Fantasia</p>
				<p><b>Requirement</b>: R239+</p>
				<p><b>Effect</b>: Multiplicatively increase assistants based on Mana produced in this game.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is your Mana produced this game.</p>
				<hr>
				<p><b>S13500</b> - For All Factions</p>
				<p><b>Research Name</b>: Legerdemain</p>
				<p><b>Requirement</b>: R242+</p>
				<p><b>Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your Royal Exchange bonus.</p>
				<hr>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Craftsmanship.png" alt="Craftsmanship" align="middle"><a href="#" onclick="return false;"><b> Craftsmanship</b></a></p>
			<div class="autohide">
				<p><b>C1</b> - For Elf</p>
				<p><b>Research Name</b>: Dummy Targets</p>
				<p><b>Cost</b>: 750 Qag (7.5e125)</p>
				<p><b>Effect</b>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.</p>
				<p><b>Formula</b>: (3 * ln(1 + x) ^ 3)%, where x is your Faction Coins found this game.</p>
				<hr>
				<p><b>C10</b> - For Fairy</p>
				<p><b>Research Name</b>: Cultivation</p>
				<p><b>Hint</b>: More farms, more crops!</p>
				<p><b>Requirement</b>: 2500 Enchanted Fields</p>
				<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
				<p><b>Effect</b>: Increases production of Blacksmith and Inn based on the amount of Enchanted Field you own.</p>
				<p><b>Formula</b>: (60 * x)%, where x is the amount of Enchanted Fields you own.</p>
				<hr>
				<p><b>C25</b> - For Angel</p>
				<p><b>Research Name</b>: Light Condenser</p>
				<p><b>Hint</b>: I've cast a spell on you. Now you cast more.</p>
				<p><b>Requirement</b>: 12,000 Spells cast (This R)</p>
				<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
				<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast.</p>
				<p><b>Formula</b>: +(floor(10 * x ^ 0.3) / 10), where x is your spells cast this game.</p>
				<hr>
				<p><b>C50</b> - For Demon</p>
				<p><b>Research Name</b>: Refining</p>
				<p><b>Hint</b>: Faction Coin treasury.</p>
				<p><b>Requirement</b>: 1 B (1e9) Faction Coins (as Elf)</p>
				<p><b>Cost</b>: 318.8 Tgag (3.188e134)</p>
				<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this game.</p>
				<p><b>Formula</b>: (0.3 * ln(1 + x) ^ 3)%, where x is your Demon Coins gained this game.</p>
				<hr>
				<p><b>C80</b> - For All Factions</p>
				<p><b>Research Name</b>: Apprenticeship</p>
				<p><b>Hint</b>: Shall i paint these buildings blue or red? I can't decide.</p>
				<p><b>Requirement</b>: 16,000 Good and Evil buildings</p>
				<p><b>Cost</b>: 61.13 Qiqag (6.113e139)</p>
				<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of Good and Evil buildings.</p>
				<p><b>Formula</b>: (x ^ 0.8)%, where x is the number of Good and Evil Buildings you own.</p>
				<hr>
				<p><b>C105</b> - For All Factions</p>
				<p><b>Research Name</b>: Woodcraft</p>
				<p><b>Hint</b>: 25k reiterations of the same movement.</p>
				<p><b>Requirement</b>: 25,000 clicks (This Game)</p>
				<p><b>Cost</b>: 1.544 Spqag (1.544e144)</p>
				<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</p>
				<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.</p>
				<hr>
				<p><b>C120</b> - For All Factions</p>
				<p><b>Research Name</b>: Socketing</p>
				<p><b>Hint</b>: Fingers crossed!</p>
				<p><b>Requirement</b>: 200,000 clicks (This Game)</p>
				<p><b>Cost</b>: 676 Spqag (6.76e146)</p>
				<p><b>Effect</b>: Increase clicking reward based on the amount of gems you own.</p>
				<p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.</p>
				<hr>
				<p><b>C135</b> - For All Factions</p>
				<p><b>Research Name</b>: Reinforcing</p>
				<p><b>Hint</b>: Clickety Click.</p>
				<p><b>Requirement</b>: 250,000 clicks (This Game, as Elf)</p>
				<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on your total number of clicks.</p>
				<p><b>Formula</b>: (ln(1 + x) ^ 2.75)%, where x is your Treasure Clicks (Total) stat.</p>
				<hr>
				<p><b>C150</b> - For All Factions</p>
				<p><b>Research Name</b>: Tinkering</p>
				<p><b>Requirement</b>: Research Recycling (E10) & Reinforcing (C135)</p>
				<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of total research points bought.</p>
				<p><b>Formula</b>: round(125 * x ^ 0.38)%, where x is number of total research points bought.</p>
				<hr>
				<p><b>C175</b> - For Goblin</p>
				<p><b>Research Name</b>: Gemcutting</p>
				<p><b>Requirement</b>: Research Refining (C50) & Socketing (C120)</p>
				<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
				<p><b>Effect</b>: Increase the production bonus from gems based on the number of buildings you own.</p>
				<p><b>Formula</b>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.</p>
				<hr>
				<p><b>C200</b> - For All Factions</p>
				<p><b>Research Name</b>: Journeymen</p>
				<p><b>Requirement</b>: Research Apprenticeship (C80) & Bartering (E50).</p>
				<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
				<p><b>Effect</b>: Increase the production of Unique Buildings based on time spent as that faction in this Reincarnation.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as the faction of the Unique Building in this Reincarnation.</p>
				<hr>
				<p><b>C225</b> - For Elf</p>
				<p><b>Research Name</b>: Automatons</p>
				<p><b>Requirement</b>: Research Dummy Targets (C1) & Vivification (A120).</p>
				<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
				<p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.</p>
				<hr>
				<p><b>C250</b> - For All Factions</p>
				<p><b>Research Name</b>: Magnetism</p>
				<p><b>Requirement</b>: Research Tinkering (C150) & Critical Strike (W225).</p>
				<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
				<p><b>Effect</b>: Increase Faction Coin find chance based on time spent offline in this Reincarnation.</p>
				<p><b>Formula</b>: +floor(7.5 * x ^ 0.75), where x is your time spent offline in this Reincarnation.</p>
				<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 50%.</p>
				<hr>
				<p><b>C251</b> - For Titan</p>
				<p><b>Research Name</b>: Architecture</p>
				<p><b>Requirement</b>: Secrets of the Ancients (as Titan)</p>
				<p><b>Cost</b>: 79.05 QiQig (79.05e168)</p>
				<p><b>Effect</b>: Increase the production of Olympian Halls based on the amount of buildings you own.</p>
				<p><b>Formula</b>: (0.5 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
				<hr>
				<p><b>C300</b> - For Druid</p>
				<p><b>Research Name</b>: Weighting</p>
				<p><b>Hint</b>: A lightning strike may hit the same target twice. Or hundreds of times.</p>
				<p><b>Requirement</b>: 650 Lightning Strikes (This R)</p>
				<p><b>Cost</b>: 33.6 OcQig (33.6e177)</p>
				<p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.</p>
				<p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.</p>
				<p><b>Formula</b>: 10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.</p>
				<hr>
				<p><b>C305</b> - For All Factions</p>
				<p><b>Research Name</b>: Golemcraft</p>
				<p><b>Hint</b>: Titanic Patience.</p>
				<p><b>Requirement</b>: 2 days as Titans (across all Reincarnations)</p>
				<p><b>Cost</b>: 255.2 OcQig (2.552e179)</p>
				<p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</p>
				<p><b>Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
				<hr>
				<p><b>C330</b> - For All Factions</p>
				<p><b>Research Name</b>: Overload</p>
				<p><b>Requirement</b>: Research Aeromancy (S250) & Critical Strike (W225)</p>
				<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
				<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</p>
				<p><b>Formula</b>: (3.5 *  x  ^0.35), where x is researches made.</p>
				<hr>
				<p><b>C340</b> - For All Factions</p>
				<p><b>Research Name</b>: Gem Duster</p>
				<p><b>Requirement</b>: 800 Gem Grinders (This R),Research Sifting (E260) & Surveyorship (E290)</p>
				<p><b>Cost</b>: 371.5 Sxg (3.715e185)</p>
				<p><b>Effect</b>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative)</p>
				<p><b>Formula</b>: floor(10 * x), where x is your Rubies Gained (All Time) stat.</p>
				<hr>
				<p><b>C375</b> - For Titan</p>
				<p><b>Research Name</b>: Lightning Rod</p>
				<p><b>Requirement</b>: Research Chain Lightning (S300) & Overload (C330)</p>
				<p><b>Cost</b>: 541 DSxg (5.41e191)</p>
				<p><b>Effect</b>: Olympian Halls are always hit by Lightning Strike in addition to the primary target. Olympian Halls can no longer be a primary target.</p>
				<hr>
				<p><b>C400</b> - For All Factions</p>
				<p><b>Research Name</b>: Gravitation</p>
				<p><b>Requirement</b>: Research Magnetism (C250) & Weighting (C300)</p>
				<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
				<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Faction Coins found in this game.</p>
				<p><b>Formula</b>: +floor(3.5 * ln(x + 1) ^ 3)%, where x is Faction Coins found in this game.</p>
				<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 100%.</p>
				<hr>
				<p><b>C405</b> - For Dwarf</p>
				<p><b>Research Name</b>: Metallurgy</p>
				<p><b>Requirement</b>: Secrets of the Underworld (as Dwarf)</p>
				<p><b>Cost</b>: 103.7 QaSxg (1.037e197)</p>
				<p><b>Effect</b>: Increase the production of Dwarven Forges based on the Dwarven Forges you own.</p>
				<p><b>Formula</b>: (40 * x ^ 0.8)%, where x is the number of Dwarven Forges you own.</p>
				<hr>
				<p><b>C460</b> - For All Factions</p>
				<p><b>Hint</b> Clickety</p>
				<p><b>Research Name</b>: Distribution</p>
				<p><b>Requirement</b>: 1M Clicks (This game)</p>
				<p><b>Cost</b>: 502.3 SpSxg (5.023e206)</p>
				<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of clicks you made in this game.</p>
				<p><b>Formula</b>: (35 * x ^ 0.5)%, where x is your Treasure Clicks (This Game) stat.</p>
				<hr>
				<p><b>C500</b> - For All Factions</p>
				<p><b>Research Name</b>: Minecrafting</p>
				<p><b>Hint</b>: Excavate to the bottom!</p>
				<p><b>Requirement</b>: 3250 excavations (as Dwarf)</p>
				<p><b>Cost</b>: 5.554Spg (5.554e213)</p>
				<p><b>Effect</b>: Increases production bonus from gems based on the amount of excavations you made.</p>
				<p><b>Formula</b>: (3 * x ^ 0.35)%, where x is the amount of Excavations you made.</p>
				<hr>
				<p><b>C520</b> - For Dwarf</p>
				<p><b>Research Name</b>: Blacksmithing</p>
				<p><b>Requirement</b>: Research Reinforcing (C135) & Metallurgy (C405)</p>
				<p><b>Cost</b>: 18.47 USpg (1.847e217)</p>
				<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
				<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
				<p><b>Formula</b>: Clicking Reward: (2.5 * x ^ 0.3)%, where x is the number of Dwarven Forges you own.</p>
				<p><b>Formula</b>: Diamond Pickaxe: (20 * x ^ 0.4)%, where x is the number of Dwarven Forges you own.</p>
				<hr>
				<p><b>C590</b> - For Elf,Dwarf</p>
				<p><b>Research Name</b>: Alloys</p>
				<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwelf), Research Fusion(A105) and Blacksmithing(C520)</p>
				<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
				<p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins.</p>
				<p><b>Formula</b>: (0.9 * x ^ 0.9)%, where x is chance to find Faction Coins.</p>
				<p><b>Effect</b>: Autoclicks the treasure 10 times per second.</p>
				<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
				<hr>
				<p><b>C1300</b> - For Neutral,Dragon</p>
				<p><b>Research Name</b>: Scintillation</p>
				<p><b>Hint</b>: Increase your magic potential.</p>
				<p><b>Requirement</b>: 30000 Max Mana, as any Neutral,Dragon (This game)</p>
				<p><b>Cost</b>: 4.698 Tvg (4.698e72)</p>
				<p><b>Effect</b>: Increase production of buildings based on max mana and additive gem bonus. (Higher boost for lower gem bonus.)</p>
				<p><b>Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total additive gem bonus.</p>
				<hr>
				<p><b>C1325</b> - For All Factions</p>
				<p><b>Research Name</b>: Plasmation</p>
				<p><b>Hint</b>: I've gotta take a Mana shower.</p>
				<p><b>Requirement</b>: 50m (5e7) Mana Produced (This game)</p>
				<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
				<p><b>Effect</b>: Gain assistants based on mana produced in this game.</p>
				<p><b>Formula</b>: floor(1.25 * ln(1 + x) ^ 2.25), where x is mana produced (this game).</p>
				<hr>
				<p><b>C1500</b> - For Titan,Dragon</p>
				<p><b>Research Name</b>: Gargantuaness</p>
				<p><b>Hint</b>: Trading with the Dragons might prove risky, but rewarding.
				<p><b>Requirement</b>: 2500 Royal Exchanges Research E460, D1275 (As Titan, Dragon)</p>
				<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on total time spent as Neutral.</p>
				<p><b>Formula</b>: (1.5 * x) ^ 0.7, where x is neutral time (this R) in minutes.</p>
				<hr>
				<p><b>C3000</b> - For Mercenary</p>
				<p><b>Research Name</b>: Customizing</p>
				<p><b>Hint</b>: Go into a deeper tunnel.</p>
				<p><b>Requirement</b>: 9000 Excavations as Mercenary.</p>
				<p><b>Cost</b>: 850.7 SxQig (8.507e173)</p>
				<p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.</p>
				<p><b>Formula</b>: (2 * x ^ 2), where x is artifacts you own.</p>
				<hr>
				<p><b>C3100</b> - All Factions</p>
				<p><b>Research Name</b>: Engineering</p>
				<p><b>Hint</b>: Spend some quality time with the Mercenaries.</p>
				<p><b>Requirement</b>: 12 days as Mercenary (across all Reincarnations)</p>
				<p><b>Cost</b>: 769.3 OcQig (7.693e179)</p>
				<p><b>Effect</b>: Increase Maximum Mana based on the total amount of clicks made in this Reincarnation.</p>
				<p><b>Formula</b>: +(65 * x ^ 0.35), where x is clicks made in this Reincarnation.</p>
				<hr>
				<p><b>C5125</b> - For All Factions</p>
				<p><b>Research Name</b>: Restauration</p>
				<p><b>Requirement</b>: R175+, Forgotten Relic, Factory artifact and upgrade,</p>
				<p><b>Effect</b>: Increase the production of all buildings based on assistants owned.</p>
				<p><b>Formula</b>: (0.5 * x ^ 0.25)%, where x is assistants owned.</p>
				<hr>
				<p><b>C5375</b> - For Neutral</p>
				<p><b>Research Name</b>: Manufacture</p>
				<p><b>Requirement</b>: R177+, Forgotten Relic, Factory artifact and upgrade,</p>
				<p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on clicks made in this game.</p>
				<p><b>Additive Formula</b>: +(7.5 * x ^ 0.5)%, where x is clicks made in this game.</p>
				<p><b>Multiplicative Formula</b>: (1.3 * x ^ 0.3)%, where x is clicks made in this game.</p>
				<hr>
				<p><b>C5625</b> - For All Factions</p>
				<p><b>Research Name</b>: Discovery</p>
				<p><b>Requirement</b>: R179+, Forgotten Relic, Factory artifact and upgrade,</p>
				<p><b>Effect</b>: Trophies and Artifacts count more based on excavations, including resets made in this game.</p>
				<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5)%, where x is excavation count and y is excavation resets (This Game).</p>
				<hr>
				<p><b>C5875</b> - For All Factions</p>
				<p><b>Research Name</b>: Genuineness</p>
				<p><b>Requirement</b>: R181+, Forgotten Relic, Factory artifact and upgrade,</p>
				<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.</p>
				<p><b>Formula</b>: (50 + x ^ 0.95)%, where x is the lowest lineage.</p>
				<hr>
				<p><b>C10875</b> - For All Factions</p>
				<p><b>Research Name</b>: Masterpiece</p>
				<p><b>Requirement</b>: R221+</p>
				<p><b>Effect</b>: Increase Faction Coin find chance based on Excavation Resets made in this Reincarnation (Multiplicative).</p>
				<p><b>Formula</b>: (2 * x ^ 2)%, where x is excavation resets this R.</p>
				<hr>
				<p><b>C11125</b> - For All Factions</p>
				<p><b>Research Name</b>: Installation</p>
				<p><b>Requirement</b>: R223+</p>
				<p><b>Effect</b>: Increase the production of all buildings based on their quantity.</p>
				<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is the amount of buildings of the same tier.</p>
				<hr>
				<p><b>C11375</b> - For All Factions</p>
				<p><b>Research Name</b>: Exhibition</p>
				<p><b>Requirement</b>: R225+</p>
				<p><b>Effect</b>: Trophies count more based on the amount of buildings you own.</p>
				<p><b>Formula</b>: (x ^ 0.5)%, where x is total amount of buildings.</p>
				<hr>
				<p><b>C11625</b> - For All Factions</p>
				<p><b>Research Name</b>: Motus Perpetuum</p>
				<p><b>Requirement</b>: R227+</p>
				<p><b>Effect</b>: Autoclicks x times per second based on Clicks made in this Reincarnation.</p>
				<p><b>Formula</b>: x = floor(ln(1 + y)), where y is productive clicks this R.</p>
				<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
				<hr>
				<p><b>C11875</b> - For All Factions</p>
				<p><b>Research Name</b>: Plating</p>
				<p><b>Requirement</b>: R229+</p>
				<p><b>Effect</b>: Unique Buildings count more for Call to Arms purposes based on Moon Blessing activity time in this Reincarnation.</p>
				<p><b>Formula</b>: +(2 * x ^ 0.8), where x is Moon Blessing activity time in this Reincarnation.</p>
				<p><b>Note</b>: This is an additive bonus and is thus not affected by any multiplicatives such as Good Warcry.</p>
				<hr>
				<p><b>C12250</b> - For All Factions</p>
				<p><b>Research Name</b>: Compression</p>
				<p><b>Requirement</b>: R232+</p>
				<p><b>Effect</b>: Brainwave increases Faction Coin find chance progressively over its duration.</p>
				<p><b>Formula</b>: +(floor(1.5 * ((x + y) / 60) ^ 2.25))%, where x and y are Brainwave runtime and Headstart respectively.</p>
				<hr>
				<p><b>C13125</b> - For All Factions</p>
				<p><b>Research Name</b>: Pottery</p>
				<p><b>Requirement</b>: R239+</p>
				<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of active spells.</p>
				<p><b>Formula</b>: (9 * x ^ 0.9)%, where x is the number of active spells.</p>
				<hr>
				<p><b>C13500</b> - For All Factions</p>
				<p><b>Research Name</b>: Assembly Line</p>
				<p><b>Requirement</b>: R242+</p>
				<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the amount of assistants you own.</p>
				<p><b>Formula</b>: (0.75 * x ^ 0.25)%, where x is the number of assistants you own.</p>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Divine.png" alt="Divine" align="middle"><a href="#" onclick="return false;"><b> Divine</b></a></p>
			<div class="autohide">
				<p><b>D1</b> - For Angel</p>
				<p><b>Research Name</b>: Blessing</p>
				<p><b>Cost</b>: 750 Qag (7.50e125)</p>
				<p><b>Effect</b>: Increase the production of Heaven's Domains based on total time spent with at least one active spell.</p>
				<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is total time spent with at least one active spell.</p>
				<hr>
				<p><b>D10</b> - For Demon</p>
				<p><b>Research Name</b>: Inflame</p>
				<p><b>Hint</b>: Build a highway to hell.</p>
				<p><b>Requirement</b>: 2,000 Infernal Realms</p>
				<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 110% per Infernal Realm you own.</p>
				<hr>
				<p><b>D25</b> - For Undead</p>
				<p><b>Research Name</b>: Cursing</p>
				<p><b>Hint</b>: Spend some time in absence.</p>
				<p><b>Requirement</b>: Play 5 hours Offline (as Undead) (This Game)</p>
				<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on your offline production bonus.</p>
				<p><b>Formula</b>: (2.75 * log10(1 + x) ^ 2.75)%, where x is your offline production bonus multiplier.</p>
				<p><b>Note</b>: This research is treated as an A1 upgrade for A-nerf purposes.</p>
				<hr>
				<p><b>D50</b> - For Elf</p>
				<p><b>Research Name</b>: Hallowing</p>
				<p><b>Hint</b>: Have you been good enough?</p>
				<p><b>Requirement</b>: 15,000 Good Buildings(as Angel)</p>
				<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
				<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.</p>
				<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Elven Training Grounds you own.</p>
				<hr>
				<p><b>D55</b> - For All Factions</p>
				<p><b>Research Name</b>: Transfixion</p>
				<p><b>Hint</b>: Massively produced blue energy.</p>
				<p><b>Requirement</b>: Produce 3 M (3e6) Mana (This Game)</p>
				<p><b>Cost</b>: 2.421 Qaqag (2.421e135)</p>
				<p><b>Effect</b>: Increase clicking reward based on spell cast in this game.</p>
				<p><b>Formula</b>: (3 * x ^ 0.7)%, where x is your Spells Cast (This Game) stat.</p>
				<hr>
				<p><b>D135</b> - For All Factions</p>
				<p><b>Research Name</b>: Illumination</p>
				<p><b>Hint</b>: Blue regeneration combo.</p>
				<p><b>Requirement</b>: 250 m/s Mana Regen(as Angel)</p>
				<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
				<p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own.</p>
				<p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10), where x is amount of gems you own.</p>
				<hr>
				<p><b>D150</b> - For All Factions</p>
				<p><b>Research Name</b>: Retribution</p>
				<p><b>Requirement</b>: Research Betrayal (W120) & Transfixion (D55).</p>
				<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
				<p><b>Effect</b>: Increase chance to find faction coins based on the amount of total research points bought.</p>
				<p><b>Formula</b>: floor(x ^ 1.25), where x is the amount of total research points bought.</p>
				<hr>
				<p><b>D175</b> - For Angel</p>
				<p><b>Research Name</b>: Resurrection</p>
				<p><b>Requirement</b>: Research Blessing (D1) & Refraction (A55)</p>
				<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
				<p><b>Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)</p>
				<p><b>Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).</p>
				<hr>
				<p><b>D200</b> - For All Factions</p>
				<p><b>Research Name</b>: Transcendence</p>
				<p><b>Requirement</b>: Research Resurrection (D175) & Illumination (D135)</p>
				<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
				<p><b>Effect</b>: Decrease the cost of all spells by 20% and increase their duration by 20%.</p>
				<hr>
				<p><b>D205</b> - For All Good Factions</p>
				<p><b>Research Name</b>: Communion</p>
				<p><b>Hint</b>: Shine bright, Holy Light!</p>
				<p><b>Requirement</b>: 777 Holy Lights (Total this R),Research Gemcutting (C175) & Illumination (D135)</p>
				<p><b>Cost</b>: 627.6 Dqig (6.276e161)</p>
				<p><b>Effect</b>: Increase Holy Light duration by 300 seconds.</p>
				<hr>
				<p><b>D225</b> - For Fairy</p>
				<p><b>Research Name</b>: Weather Control</p>
				<p><b>Requirement</b>: Research Light Condenser (C25) & Vacuumancy (S30)</p>
				<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
				<p><b>Effect</b>: Increase the production of Enchanted Fields based on maximum mana.</p>
				<p><b>Formula</b>: floor(2.25 * x ^ 0.8)%, where x is your maximum mana.</p>
				<hr>
				<p><b>D245</b> - For All Factions</p>
				<p><b>Research Name</b>: Sanctification</p>
				<p><b>Hint</b>: Surgical Spirits.</p>
				<p><b>Requirement</b>: 500 Spiritual Surge (Total this R), Research Soulweaving (A175) & Necromancy (S225)</p>
				<p><b>Cost</b>: 6.94Qiqig (6.94e168)</p>
				<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique Buildings you own.</p>
				<p><b>Formula</b>: (2.5 * x ^ 0.55), where x is the amount of Non-Unique Buildings you own.</p>
				<hr>
				<p><b>D250</b> - For All Factions</p>
				<p><b>Research Name</b>: Demonology</p>
				<p><b>Requirement</b>: Research Transcendence (D200) & Pyromancy (S150)</p>
				<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
				<p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.</p>
				<p><b>Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.</p>
				<hr>
				<p><b>D260</b> - For Faceless</p>
				<p><b>Research Name</b>: Mutation</p>
				<p><b>Hint</b>: Lost in the maze? Build your path.</p>
				<p><b>Requirement</b>: 3,000 Sunken Cities</p>
				<p><b>Cost</b>: 3.039 SxQig (3.039e171)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 95% per Sunken Cities you own.</p>
				<hr>
				<p><b>D275</b> - For Druid</p>
				<p><b>Research Name</b>: Meditation</p>
				<p><b>Hint</b>: Maximum magical concentration.</p>
				<p><b>Requirement</b>: Have 10,000 Mana (as Druid)</p>
				<p><b>Cost</b>: 1.331 SpQig (1.331e174)</p>
				<p><b>Effect</b>: Increase mana regeneration based on your current mana.</p>
				<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
				<p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.</p>
				<hr>
				<p><b>D290</b> - For All Factions</p>
				<p><b>Research Name</b>: Transubstantiation</p>
				<p><b>Hint</b>: A small buried stone.</p>
				<p><b>Requirement</b>: 1 Rough Stone Artifact</p>
				<p><b>Cost</b>: 582.7 SpQig (5.827e176)</p>
				<p><b>Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.</p>
				<p><b>Additive Formula</b>: (50 * x ^1.1), where x is the number of artifacts found.</p>
				<p><b>Multiplicative Formula</b>: (x ^ 0.95), where x is the number of artifacts found.</p>
				<hr>
				<p><b>D320</b> - For All Factions</p>
				<p><b>Research Name</b>: Deliverance</p>
				<p><b>Hint</b>: High-rate mana transfusions.</p>
				<p><b>Requirement</b>: 350 m/s Mana Regen</p>
				<p><b>Cost</b>: 1.117 NoQig (1.117e180)</p>
				<p><b>Effect</b>: Increase assistants production based on mana regeneration.</p>
				<p><b>Formula</b>: (20 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
				<hr>
				<p><b>D330</b> - For All Factions</p>
				<p><b>Research Name</b>: Eternity</p>
				<p><b>Requirement</b>: Research Offering (E275) & Deliverance (D320)</p>
				<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
				<p><b>Effect</b>: Double the duration of all faction spells.</p>
				<hr>
				<p><b>D350</b> - For Titan</p>
				<p><b>Research Name</b>: Descent</p>
				<p><b>Requirement</b>: Research Swarming (W250) & Heroism (W330)</p>
				<p><b>Cost</b>: 21.42 USxg (2.142e187)</p>
				<p><b>Effect</b>: Gain additional assistants based on the amount of Olympian Halls you own.</p>
				<p><b>Formula</b>: floor(x ^ 0.5)%, where x is the number of Olympian Halls you own.</p>
				<hr>
				<p><b>D400</b> - For All Factions</p>
				<p><b>Research Name</b>: Miracle</p>
				<p><b>Requirement</b>: Research Communion (D205) & Transubstantiation (D290)</p>
				<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
				<p><b>Effect</b>: Increase the Production of a random building by x250. Target changes every 2 minutes. While offline, increase the production of all buildings by x75.</p>
				<hr>
				<p><b>D435</b> - For Dwarf</p>
				<p><b>Research Name</b>: Devotion</p>
				<p><b>Hint</b>: More diamond hits!</p>
				<p><b>Requirement</b>: 14400s (4 hour) Diamond Pickaxe Cast Time (This Game)</p>
				<p><b>Cost</b>: 19.89 SxSxg (1.989e202)</p>
				<p><b>Effect</b>: Increase the production of Good buildings based on spells cast in this game.</p>
				<p><b>Formula</b>: (1.5 * x ^ 0.85)%, where x is your Spells Cast (This Game) stat.</p>
				<hr>
				<p><b>D480</b> - For All Factions</p>
				<p><b>Research Name</b>: Mercy</p>
				<p><b>Hint</b>: You should try everything at least once. Or 12 times.</p>
				<p><b>Requirement</b>: 12h Spent as each Good, Evil and Neutral alignment (This R)</p>
				<p><b>Cost</b>: 1.67 NoSxg (1.67e210)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.</p>
				<p><b>Formula</b>: (100000 * (tmin / tmax) ^ 1.5)%, where tmin is shortest Time Spent Being Alignment and tmax is longest Time Spent Being Alignment (Total) Stat.</p>
				<hr>
				<p><b>D525</b> - For Good</p>
				<p><b>Research Name</b>: Purity</p>
				<p><b>Hint</b>: Be patiently good.</p>
				<p><b>Requirement</b>: 1d12h as Good (This R), Research Communion (D205) and Devotion (D435)</p>
				<p><b>Cost</b>: 140.2 USpg (1.402e218)</p>
				<p><b>Effect</b>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.</p>
				<p><b>Formula</b>: (300 * x ^ 0.3)%, where x is your Faction Spells' Cast This Game stat.</p>
				<hr>
				<p><b>D560</b> - For Drow</p>
				<p><b>Research Name</b>: Ritualism</p>
				<p><b>Requirement</b>: Research Necromancy(S225) and Heirlooms(S500)(as drow)</p>
				<p><b>Cost</b>: 204.2 TSpq (2.042e224)</p>
				<p><b>Effect</b>: Increase mana regeneration based on the amount of trophies you unlocked.</p>
				<p><b>Formula</b>: (floor(0.6 * x) / 10), where x is the amount of Trophies Unlocked.</p>
				<hr>
				<p><b>D590</b> - For Angel,Dwarf</p>
				<p><b>Research Name</b>: Dispelling</p>
				<p><b>Requirement</b>: 200 Dwarf Exchanges as Dwangel, Research Shattering (W320) and Waste (A480)</p>
				<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
				<p><b>Effect</b>: Increase the production of Unique buildings based on Mana Regeneration.</p>
				<p><b>Formula</b>: (5 * x ^ 0.95)%, where x is your Mana Regeneration.</p>
				<hr>
				<p><b>D1125</b> - For Neutral,Dragon</p>
				<p><b>Research Name</b>: Oblation</p>
				<p><b>Requirement</b>: Any Neutral,Build Dragons' Unique Building</p>
				<p><b>Cost</b>: 177.2 Nod (1.772e62)</p>
				<p><b>Effect</b>: Increase the production of Wyrm's Den based on Faction Coin find chance.</p>
				<p><b>Formula</b>: (1.55 * x ^ 0.55)%, where x is your Faction Coin find chance.</p>
				<hr>
				<p><b>D1275</b> - For All Factions</p>
				<p><b>Research Name</b>: Solemnity</p>
				<p><b>Hint</b>: Urban development.</p>
				<p><b>Requirement</b>: 80,000 Total Buildings</p>
				<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
				<p><b>Effect</b>: Increase the production of each building by +0.3% per building of the same type.</p>
				<hr>
				<p><b>D1375</b> - For All Factions</p>
				<p><b>Research Name</b>: Soulrending</p>
				<p><b>Hint</b>: Be good, wish for the best.</p>
				<p><b>Requirement</b>: 7 days spent as good (across all Reincarnations)</p>
				<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
				<p><b>Effect</b>: Ascensions count 50% more for Spiritual Surge.</p>
				<hr>
				<p><b>D2775</b> - For Mercenary</p>
				<p><b>Research Name</b>: Intervention</p>
				<p><b>Requirement</b>: Secrets of the Warriors.</p>
				<p><b>Cost</b>: 33.73 DQig (3.373e160)</p>
				<p><b>Effect</b>: Increases the production of Unique Building based on time spent with Mercenaries (All Time).</p>
				<p><b>Formula</b>: (10 * x ^ 0.7)%, where x is time spent with Mercenary (All Time).</p>
				<hr>
				<p><b>D3350</b> - For All Factions</p>
				<p><b>Research Name</b>: Vampirism</p>
				<p><b>Hint</b>: Sound the alarms, production has gone offline!</p>
				<p><b>Requirement</b>: 100 Sp% (1e26%) offline bonus, (Intervention D2775) and (Upheaval W3150).</p>
				<p><b>Cost</b>: 598.3 TSxg (5.983e194)</p>
				<p><b>Effect</b>: Increase assistants additively and multiplicatively based on your Offline Bonus.</p>
				<p><b>Additive Formula</b>: (3.25 * log10(1 + x) ^ 2.25), where x is your Offline Bonus.</p>
				<p><b>Multiplicative Formula</b>: (0.05 * log10(1 + x) ^ 2), where x is your Offline Bonus.</p>
				<hr>
				<p><b>D5125</b> - For All Factions</p>
				<p><b>Research Name</b>: Selection</p>
				<p><b>Requirement</b>: R175+, Forgotten Relic, Mythos artifact and upgrade.</p>
				<p><b>Effect</b>: Increase the production of Unique buildings based on Clicks in this game.</p>
				<p><b>Formula</b>: (x ^ 0.5), where x is clicks this game.</p>
				<hr>
				<p><b>D5375</b> - For Good</p>
				<p><b>Research Name</b>: Zealotry</p>
				<p><b>Requirement</b>: R177+, Forgotten Relic, Mythos artifact and upgrade.</p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges purchased in this game.</p>
				<p><b>Formula</b>: (0.75 * x ^ 0.75), where x is royal exchanges this game.</p>
				<hr>
				<p><b>D5625</b> - For All Factions</p>
				<p><b>Research Name</b>: Prophecy</p>
				<p><b>Requirement</b>: R179+, Forgotten Relic, Mythos artifact and upgrade.</p>
				<p><b>Effect</b>: Empowers the effects of your faction's Set based on time spent with your least used faction. Lineage levels count more, by the same amount, for your faction’s Advanced Heritage.</p>
				<p><b>Formula</b>: (50 + 0.25 * x ^ 0.5)%, where x is your least spent faction time.</p>
				<p><b>Note</b>: only considers time spent with factions that are available at the given game stage.</p>
				<hr>
				<p><b>D5875</b> - For All Factions</p>
				<p><b>Research Name</b>: Birthright</p>
				<p><b>Requirement</b>: R181+, Forgotten Relic, Mythos artifact and upgrade.</p>
				<p><b>Effect</b>: Gain the Bloodline effects of your opposite alignment.</p>
				<p><b>Note</b>: Only gain the effects of the Base Faction that matches both alignments. For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
				<hr>
				<p><b>D10875</b> - For All Factions</p>
				<p><b>Research Name</b>: Scriptures</p>
				<p><b>Requirement</b>: R221+</p>
				<p><b>Effect</b>: Increase all spells’ durations based on time spent with their respective requirement.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent in seconds with the faction or alignment of the spell.</p>
				<p><b>Note</b>: Call to Arms and Spiritual Surge use time spent this R.</p>
				<p><b>Note</b>: Heatwave and Hailstorm (Summer Festival event spells) use time spent as Summeraan and Winterly this R.</p>
				<p><b>Note</b>: All other event spells use time spent this R.</p>
				<hr>
				<p><b>D11125</b> - For All Factions</p>
				<p><b>Research Name</b>: Viriditas</p>
				<p><b>Requirement</b>: R223+</p>
				<p><b>Effect</b>: Lineage levels count more based on the amount of Artifacts you excavated.</p>
				<p><b>Formula</b>: (x ^ 0.75)%, where x is the amount of Artifacts you excavated.</p>
				<hr>
				<p><b>D11375</b> - For All Factions</p>
				<p><b>Research Name</b>: Rigor</p>
				<p><b>Requirement</b>: R225+</p>
				<p><b>Effect</b>: Reincarnations count 100% more.</p>
				<hr>
				<p><b>D11625</b> - For All Factions</p>
				<p><b>Research Name</b>: Compassion</p>
				<p><b>Requirement</b>: R227+</p>
				<p><b>Effect</b>: Increase the production of Non-Unique buildings based on time spent with your least used alignment in this Reincarnation.</p>
				<p><b>Formula</b>: (50 + x ^ 0.75)%, where x is time spent as the least used alignment this R.</p>
				<hr>
				<p><b>D11875</b> - For All Factions</p>
				<p><b>Research Name</b>: Virtues</p>
				<p><b>Requirement</b>: R229+</p>
				<p><b>Effect</b>: Increase Tax Collection worth based on the highest amount of Mountain Palaces you built in this Reincarnation.</p>
				<p><b>Formula</b>: (2.5 * x ^ 0.5)%, where x is the highest amount of Mountain Palaces 	built in this Reincarnation.</p>
				<hr>
				<p><b>D12250</b> - For All Factions</p>
				<p><b>Research Name</b>: Enochian</p>
				<p><b>Requirement</b>: R232+</p>
				<p><b>Effect</b>: Multiply Angel Coins found based on God's Hand activity time in this Reincarnation.</p>
				<p><b>Formula</b>: *(10 + 0.7 * x ^ 0.7)%, where x is God's Hand activity time in this Reincarnation.</p>
				<hr>
				<p><b>D13125</b> - For All Factions</p>
				<p><b>Research Name</b>: Asceticism</p>
				<p><b>Requirement</b>: R239+</p>
				<p><b>Effect</b>: Neutral Buildings also count as both Good and Evil buildings. Non-Unique buildings also count as Unique buildings.</p>
				<p><b>Note</b>: Neutral Buildings in this instance refers to only Farms, Inns, Blacksmiths and Hall of Legends.</p>
				<p><b>Note</b>: The effect on Unique Buildings is only applied to effects that specifically check for Unique Buildings, such as Lineage Perk 3s. The Non-Unique Buildings will still only count as Non-Unique when it comes to building modifiers, such as E135. Essentially, effects that are "...based on the amount of Unique Buildings" are now "...based on your total amount of buildings".</p>
				<p><b>Effect</b>: When you spend time with a faction, you also gain a fraction of that time spent with all factions.</p>
				<p><b>Note</b>: You gain 0.1 second of playtime for each faction (including Mercenary and Elites) every second. This does not include your current Faction(s), which gain time normally. This effect works both offline and in time warps. Time gained is added as real stat.</p>
				<hr>
				<p><b>D13500</b> - For All Factions</p>
				<p><b>Research Name</b>: Afterlife</p>
				<p><b>Requirement</b>: R242+</p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the highest amount of Mana Regeneration you had in this Reincarnation.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest Mana Regeneration you had this Reincarnation.</p>
				<hr>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Economics.png" alt="Economics" align="middle"><a href="#" onclick="return false;"><b> Economics</b></a></p>
			<div class="autohide">
				<p><b>E1</b> - For Goblin</p>
				<p><b>Research Name</b>: Coinage</p>
				<p><b>Cost</b>: 750 Qag (7.50e125)</p>
				<p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own.</p>
				<p><b>Formula</b>: (0.85 * x ^ 0.85)%, where x is your Buildings Owned (This Game) stat.</p>
				<hr>
				<p><b>E10</b> - For Undead</p>
				<p><b>Research Name</b>: Recycling</p>
				<p><b>Hint</b>: Nation of the dead.</p>
				<p><b>Requirement</b>: 2,000 Undercities</p>
				<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.</p>
				<hr>
				<p><b>E25</b> - For Elf</p>
				<p><b>Research Name</b>: Commerce</p>
				<p><b>Hint</b>: Colored wealth.</p>
				<p><b>Requirement</b>: 100 M (1e8) Faction Coins (Found this Game)</p>
				<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
				<p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</p>
				<p><b>Formula</b>: +(floor((1 + 6 * x) ^ 0.5 - 1)), where x is the amount of Royal Exchanges purchased.</p>
				<hr>
				<p><b>E30</b> - For All Factions</p>
				<p><b>Research Name</b>: Diplomacy</p>
				<p><b>Hint</b>: Exchange more.</p>
				<p><b>Requirement</b>: 1,000 Exchanges (This Game)</p>
				<p><b>Cost</b>: 95.88 Dqag (9.588e130)</p>
				<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.</p>
				<p><b>Faction Coin Chance Formula</b>: +(floor(1.5 * (x / 60) ^ 1.05))%, where x is time spent in this game.</p>
				<p><b>Royal Exchange Bonus Formula</b>: +(floor((x / 60) ^ 0.6))%, where x is time spent in this game.</p>
				<hr>
				<p><b>E50</b> - For Fairy</p>
				<p><b>Research Name</b>: Bartering</p>
				<p><b>Hint</b>: Royalties earnings.</p>
				<p><b>Requirement</b>: 1,000 Exchanges(as Goblin)</p>
				<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
				<p><b>Effect</b>: Reduce Enchanted Field cost multiplier. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
				<hr>
				<p><b>E80</b> - For Good/Evil</p>
				<p><b>Research Name</b>: Common Business</p>
				<p><b>Hint</b>: Neutral urbanistics.</p>
				<p><b>Requirement</b>: 9,000 Neutral Buildings</p>
				<p><b>Cost</b>: 61.13 Qiqag (6.113e139)</p>
				<p><b>Effect</b>: Increase the production of Good and Evil buildings based on the amount of neutral buildings.</p>
				<p><b>Formula</b>: (round((1.75 * x) ^ 0.8))%, where x is the number of neutral buildings you own.</p>
				<hr>
				<p><b>E135</b> - For All Factions</p>
				<p><b>Research Name</b>: Bribing</p>
				<p><b>Hint</b>: Architectural advantage.</p>
				<p><b>Requirement</b>: 28,000 Total Buildings(as Goblin)</p>
				<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
				<p><b>Effect</b>: Reduce the building cost multiplier for Unique Buildings. Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
				<hr>
				<p><b>E145</b> - For All Factions</p>
				<p><b>Research Name</b>: Royal Demand</p>
				<p><b>Hint</b>: Collect those taxes!</p>
				<p><b>Requirement</b>: 50,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)</p>
				<p><b>Cost</b>: 17.07 Noqag (1.707e151)</p>
				<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.</p>
				<hr>
				<p><b>E150</b> - For All Factions</p>
				<p><b>Research Name</b>: Investment</p>
				<p><b>Requirement</b>: Research Bribing (E135) & Commerce (E25)</p>
				<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own.</p>
				<p><b>Formula</b>: (round(ln(1 + x) ^ 1.25))%, where x is the amount of gold you own.</p>
				<hr>
				<p><b>E200</b> - For All Factions</p>
				<p><b>Research Name</b>: Acquisition</p>
				<p><b>Requirement</b>: Research Investment (E150)  Common Business (E80)</p>
				<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked.</p>
				<p><b>Formula</b>: (round(0.0003 * (100 * x) ^ 3.35))%, where x is trophies unlocked / max trophies.</p>
				<hr>
				<p><b>E225</b> - For Goblin</p>
				<p><b>Research Name</b>: Forgery</p>
				<p><b>Requirement</b>: Research Coinage (E1) & Gilding (A50)</p>
				<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
				<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.</p>
				<p><b>Formula</b>: (1.5 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
				<hr>
				<p><b>E230</b> - For Demon</p>
				<p><b>Research Name</b>: Coercion</p>
				<p><b>Requirement</b>: Research Exertion (W50) & Diplomacy (E30)</p>
				<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
				<p><b>Effect</b>: Increases trophy count based on time spent as Evil this Reincarnation.</p>
				<p><b>Formula</b>: (0.25 * x ^ 0.5)%, where x is time spent as Evil this Reincarnation.</p>
				<hr>
				<p><b>E250</b> - For All Factions</p>
				<p><b>Research Name</b>: Trade Routes</p>
				<p><b>Requirement</b>: Research Forgery (E225) & Royal Demand (E145)</p>
				<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
				<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.</p>
				<p><b>Formula</b>: +(floor(10 * x ^ 0.55) / 10), where x is the amount of Royal Exchanges purchased.</p>
				<hr>
				<p><b>E260</b> - For Druid</p>
				<p><b>Research Name</b>: Sifting</p>
				<p><b>Hint</b>: A lot of men-hirs.</p>
				<p><b>Requirement</b>: 3,000 Stonehenge Circles</p>
				<p><b>Cost</b>: 3.039 SxQig (3.039e171)</p>
				<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.</p>
				<p><b>Formula</b>: (100 * x)%, where x is the amount of Stone Pillars you own.</p>
				<hr>
				<p><b>E275</b> - For Titan</p>
				<p><b>Research Name</b>: Offering</p>
				<p><b>Hint</b>: Offer Faction Coins, gain production.</p>
				<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)</p>
				<p><b>Cost</b>: 175.2 SxQig (1.752e173)</p>
				<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.</p>
				<p><b>Formula</b>: +(x ^ 0.95), where x is your Royal Exchange Bonus.</p>
				<hr>
				<p><b>E290</b> - For All Factions</p>
				<p><b>Research Name</b>: Surveyorship</p>
				<p><b>Hint</b>: Take an interest in archeology.</p>
				<p><b>Requirement</b>: 7 Artifacts</p>
				<p><b>Cost</b>: 582.7 SpQig (5.827e176)</p>
				<p><b>Effect</b>: Reduces Excavation cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.18 instead of 1.2.</p>
				<hr>
				<p><b>E320</b> - For All Factions</p>
				<p><b>Research Name</b>: Smuggling</p>
				<p><b>Hint</b>: You shouldn't abdicate so poorly.</p>
				<p><b>Requirement</b>: Have twice as many Gems in Abdication Treasury</p>
				<p><b>Cost</b>: 1.117 NoQig (1.117e180)</p>
				<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings owned.</p>
				<p><b>Effect</b>: Also increase FC chance find chance by a multiplicative 100%.</p>
				<p><b>Formula</b>: +(5 * x ^ 0.9)%, where x is Unique Building owned</p>
				<hr>
				<p><b>E330</b> - For All Factions</p>
				<p><b>Research Name</b>: Collection</p>
				<p><b>Requirement</b>: Research Acquisition (E200) & Forgery (E225)</p>
				<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found.</p>
				<p><b>Formula</b>: round(50 * x ^ 1.1)%, where x is the amount of artifacts found.</p>
				<hr>
				<p><b>E350</b> - For Faceless</p>
				<p><b>Research Name</b>: Repurpose</p>
				<p><b>Requirement</b>: Research Journeymen (C200) & Adaptation (A330)(as Faceless)</p>
				<p><b>Cost</b>: 21.42 USxg (2.142e187)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made.</p>
				<p><b>Formula</b>: (round(2.5 * x ^ 2.25))%, where x is the amount of times you reincarnated.</p>
				<hr>
				<p><b>E400</b> - For All Factions</p>
				<p><b>Research Name</b>: Conversion</p>
				<p><b>Requirement</b>: Research Philosopher's Stone (A250) & Repurpose (E350).</p>
				<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
				<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.</p>
				<p><b>Formula</b>: +(2.5 * floor(x ^ 0.5))%, where x is your Royal Exchange Bonus.</p>
				<hr>
				<p><b>E410</b> - For Dwarf</p>
				<p><b>Research Name</b>: Marketing</p>
				<p><b>Hint</b>: A Blacksmith army.</p>
				<p><b>Requirement</b>: 5,000 Blacksmiths</p>
				<p><b>Cost</b>: 787.7 QaSxg (7.877e197)</p>
				<p><b>Effect</b>: Increase production of all other buildings by 75% per Dwarven Forge you own.</p>
				<hr>
				<p><b>E460</b> - For All Factions</p>
				<p><b>Research Name</b>: Inflation</p>
				<p><b>Hint</b>: Got enough Faction Coins?</p>
				<p><b>Requirement</b>: 100 B (1e11) Faction Coins (Found this Game)</p>
				<p><b>Cost</b>: 502.3 SpSxg (5.023e206)</p>
				<p><b>Effect</b>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game.</p>
				<p><b>Formula</b>: +(floor(3.5 * log10(1 + x)))%, where x is the amount of Faction Coins found in this game.</p>
				<hr>
				<p><b>E480</b> - For All Factions</p>
				<p><b>Research Name</b>: Undercutting</p>
				<p><b>Hint</b>: Maximum magic resources required.</p>
				<p><b>Requirement</b>: 15000 max mana</p>
				<p><b>Cost</b>: 1.67 NoSxg (1.67e210)</p>
				<p><b>Effect</b>: Increase the production of Non-Unique Buildings based on Spells cast in this Reincarnation.</p>
				<p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x the amount of Spells cast in this Reincarnation.</p>
				<hr>
				<p><b>E495</b> - For Drow</p>
				<p><b>Research Name</b>: Jewellery</p>
				<p><b>Hint</b>: Special architecture.</p>
				<p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf)</p>
				<p><b>Cost</b>: 731.4 NoSxg (7.314e212)</p>
				<p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own.</p>
				<p><b>Formula</b>: +(0.06 * x ^ 0.8)%, where x is the amount of Spider Sanctuaries you own.</p>
				<hr>
				<p><b>E590</b> - For Goblin,Drow</p>
				<p><b>Research Name</b>: Slavery</p>
				<p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)</p>
				<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
				<p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own.</p>
				<p><b>Formula</b>: +(0.1 * x ^ 0.8), where x is the amount of Non-Unique Buildings you own.</p>
				<hr>
				<p><b>E1225</b> - For Neutral,Dragon</p>
				<p><b>Research Name</b>: Hoarding</p>
				<p><b>Hint</b>: Massive numismatics.</p>
				<p><b>Requirement</b>: 1 T (1e12) Faction coins found this game</p>
				<p><b>Cost</b>: 160.2 Uvg (1.602e68)</p>
				<p><b>Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.</p>
				<hr>
				<p><b>E1325</b> - For All Factions</p>
				<p><b>Research Name</b>: Intimidation</p>
				<p><b>Hint</b>: Unique wonders of the realm.</p>
				<p><b>Requirement</b>: 18000 Unique Buildings</p>
				<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
				<p><b>Effect</b>: Reduce Royal Exchange cost multiplier.</p>
				<p><b>Formula</b>: Reduces multiplier by 0.025; with no other reductions applying, the multiplier will be 1.075 instead of 1.1.</p>
				<hr>
				<p><b>E1425</b> - For All Neutral Factions</p>
				<p><b>Research Name</b>: Rarity</p>
				<p><b>Hint</b>: Be neutral. Be different. For a short week.</p>
				<p><b>Requirement</b>: 5 days playtime each with Titan, Druid and Faceless + Research A545 & C1300</p>
				<p><b>Cost</b>: 131 Qivg (1.31e80)</p>
				<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</p>
				<p><b>Formula</b>: (1.25 * x ^ 1.25)%, where x is artifacts found.</p>
				<hr>
				<p><b>E3250</b> - For All</p>
				<p><b>Research Name</b>: Hirelings</p>
				<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
				<p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
				<p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
				<p><b>Formula</b>: +(1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
				<hr>
				<p><b>E3300</b> - For Mercenary</p>
				<p><b>Research Name</b>: Estates</p>
				<p><b>Hint</b>: 50k shades of uniqueness.</p>
				<p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</p>
				<p><b>Cost</b>: 629.2 DSxg (6.292e191)</p>
				<p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.</p>
				<p><b>Effect</b>: Ascension 3: Gain all the Unique Buildings that match your alignments.</p>
				<hr>
				<p><b>E5125</b> - For All Factions</p>
				<p><b>Research Name</b>: Decentralization</p>
				<p><b>Requirement</b>: R175+, Forgotten Relic, Vault artifact and upgrade.</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.</p>
				<p><b>Formula</b>: ((3 - 0.25 * T) ^ 4 * x ^ 0.6)%, where T is building tier and x is the number of (every) buildings you own.</p>
				<hr>
				<p><b>E5375</b> - For Balance</p>
				<p><b>Research Name</b>: Whipround</p>
				<p><b>Requirement</b>: R177+, Forgotten Relic, Vault artifact and upgrade.</p>
				<p><b>Effect</b>: Increase Royal Exchange bonus additively and multiplicatively based on Tax Collections cast in this game.</p>
				<p><b>Additive Formula</b>: +(x ^ 0.2), where x is the amount of Tax Collections cast this game.</p>
				<p><b>Multiplicative Formula</b>: (0.85 * x ^ 0.15)%, where x is Tax collections cast this game.</p>
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
				<p><b>Formula</b>: (0.4 * x ^ 0.4)%, where x is your least used faction spell (This game)</p>
				<p><b>Note</b>: Only checks the base faction spell of your faction(s). On mercs, scales off Share Benefits and the two chosen Faction Spells.</p>
				<hr>
				<p><b>E10875</b> - For All Factions</p>
				<p><b>Research Name</b>: Rigmarole</p>
				<p><b>Requirement</b>: R221+</p>
				<p><b>Effect</b>: Increase Royal Exchange bonus based on the highest amount of assistants you had in this Reincarnation (Additive).</p>
				<p><b>Formula</b>: +(ln(1 + x) ^ 2)%, where x is your highest assistants count this Reincarnation.</p>
				<hr>
				<p><b>E11125</b> - For All Factions</p>
				<p><b>Research Name</b>:  Grey Friday</p>
				<p><b>Requirement</b>: R223+</p>
				<p><b>Effect</b>: Reduce building cost multiplier and increase the production of all buildings based on Royal Exchange bonus.</p>
				<p><b>Formula</b>: -0.02, with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
				<p><b>Formula</b>: (1.2 * x ^ 0.8)%, where x is your Royal Exchange bonus.</p>
				<hr>
				<p><b>E11375</b> - For All Factions</p>
				<p><b>Research Name</b>: Heist</p>
				<p><b>Requirement</b>: R225+</p>
				<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have.</p>
				<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is the amount of assistants you have.</p>
				<hr>
				<p><b>E11625</b> - For All Factions</p>
				<p><b>Research Name</b>: Surplus</p>
				<p><b>Requirement</b>: R227+</p>
				<p><b>Effect</b>: Multiplicatively increase assistants based on the amount of Gems you have.</p>
				<p><b>Formula</b>: (25 + 0.25 * ln(1 + x) ^ 1.5)%, where x is the amount of Gems you have.</p>
				<hr>
				<p><b>E11875</b> - For All Factions</p>
				<p><b>Research Name</b>: Overworking</p>
				<p><b>Requirement</b>: R229+</p>
				<p><b>Effect</b>: Goblin's Greed casts additional Tax Collection per second based on the amount of assistants you have.</p>
				<p><b>Formula</b>: +(1.5 * x ^ 0.5), where x is the amount of assistants you have.</p>
				<p><b>Note</b>: Catalyst can also trigger this effect.</p>
				<hr>
				<p><b>E12250</b> - For All Factions</p>
				<p><b>Research Name</b>: Oilery</p>
				<p><b>Requirement</b>: R232+</p>
				<p><b>Effect</b>: While both Lightning Strike and Gem Grinder are active, multiplicatively increase the production bonus from Gems based on the duration of your longest spell.</p>
				<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is the duration of your longest spell.</p>
				<hr>
				<p><b>E13125</b> - For All Factions</p>
				<p><b>Research Name</b>: Discount</p>
				<p><b>Requirement</b>: R239+</p>
				<p><b>Effect</b>: Reduce Royal Exchange, Excavation and Building cost multipliers. All spells cost 50% less mana to cast.</p>
				<p><b>Note</b>: Cost multiplier reduction is -0.02 for all three.</p>
				<hr>
				<p><b>E13500</b> - For All Factions</p>
				<p><b>Research Name</b>: Recession</p>
				<p><b>Requirement</b>: R242+</p>
				<p><b>Effect</b>: Gain all Lineage base effects that match your alignments, up to a maximum of level 25.</p>
				<p><b>Note</b>: This will reduce the level of all lineages you do not pick to 25 for the current run (including lineages that don't match your alignments), which will lower the effectiveness of upgrades based on those lineage levels.</p>
				<hr>	
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Alchemy.png" alt="Alchemy" align="middle"><a href="#" onclick="return false;"><b> Alchemy</b></a></p>
			<div class="autohide">
				<p><b>A1</b> - For Undead</p>
				<p><b>Research Name</b>: Plague</p>
				<p><b>Cost</b>: 750 Qag (7.50e125)</p>
				<p><b>Effect</b>: Increase the production of Undercities by 20% per assistant you own.</p>
				<hr>
				<p><b>A10</b> - For Goblin</p>
				<p><b>Research Name</b>: Transmutation</p>
				<p><b>Hint</b>: Too many witches, not enough houses!</p>
				<p><b>Requirement</b>: 2250 Goblin Banks</p>
				<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 85% per Goblin Bank you own.</p>
				<hr>
				<p><b>A25</b> - For Demon</p>
				<p><b>Research Name</b>: Deflagration</p>
				<p><b>Hint</b>: Hellfire!</p>
				<p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)</p>
				<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
				<p><b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and increases its effect by 800%.</p>
				<hr>
				<p><b>A30</b> - For Fairy</p>
				<p><b>Research Name</b>: Delayed Reaction</p>
				<p><b>Hint</b>: Fairy Greatest Hits.</p>
				<p><b>Requirement</b>: 750 Fairy Chanting (Total this R)</p>
				<p><b>Cost</b>: 95.88 Dqag (9.588e130)</p>
				<p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.</p>
				<p><b>Additive Production increase formula</b>: floor(1000 * t ^ 1.5), where t is how long FC has been active in seconds.</p>
				<p><b>Duration increase formula</b>: floor(x / 800) ^ 0.8) seconds, where x is the number of Farms, Inns, and Blacksmiths you own.</p>
				<hr>
				<p><b>A50</b> - For Angel</p>
				<p><b>Research Name</b>: Gilding</p>
				<p><b>Hint</b>: Regeneration magic.</p>
				<p><b>Requirement</b>: 120 Mana Regen (as Undead)</p>
				<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
				<p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate.</p>
				<p><b>Formula</b>: (1.45 * x ^ 0.45), where x is the number of Heaven's Domains you own.</p>
				<hr>
				<p><b>A55</b> - For All Factions</p>
				<p><b>Research Name</b>: Refraction</p>
				<p><b>Hint</b>: Iacta Incantatio.</p>
				<p><b>Requirement</b>: Cast 25000 spells (This Game)</p>
				<p><b>Cost</b>: 2.421 Qaqag (2.421e135)</p>
				<p><b>Effect</b>: Improve offline production based on spells cast.</p>
				<p><b>Formula</b>: round(5 * x ^ 0.85), where x is your Spells Cast (Total) stat.</p>
				<hr>
				<p><b>A105</b> - For All Factions</p>
				<p><b>Research Name</b>: Fusion</p>
				<p><b>Hint</b>: Blacksmith City.</p>
				<p><b>Requirement</b>: 2750 Blacksmiths</p>
				<p><b>Cost</b>: 1.544 Spqag (1.544e144)</p>
				<p><b>Effect</b>: Increases the production of buildings based on the amount of Faction Coins found this game.</p>
				<p><b>Formula</b>: round(0.7 * ln ^ 3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
				<hr>
				<p><b>A120</b> - For All Factions</p>
				<p><b>Research Name</b>: Vivification</p>
				<p><b>Hint</b>: Maximum Magic!</p>
				<p><b>Requirement</b>: Have 6500 Max Mana.</p>
				<p><b>Cost</b>: 676 Spqag (6.76e146)</p>
				<p><b>Effect</b>: Gain additional assistants based on max mana.</p>
				<p><b>Formula</b>: floor((x / 15) ^ 0.825), where x is your maximum mana.</p>
				<hr>
				<p><b>A135</b> - For All Factions</p>
				<p><b>Research Name</b>: Decay</p>
				<p><b>Hint</b>: Spend some quality time.</p>
				<p><b>Requirement</b>: 1 Day playtime (This Reincarnation) (Unlock as Undead)</p>
				<p><b>Cost</b>: 296 OcQag (9.6e149)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation.</p>
				<p><b>Formula</b>: (0.03 * (2 * x) ^ 0.7)%, where x is time spent in this Reincarnation in seconds.</p>
				<hr>
				<p><b>A150</b> - For All Factions</p>
				<p><b>Research Name</b>: Explosives</p>
				<p><b>Requirement</b>: Research (A25) Deflagration & (A30) Delayed Reaction</p>
				<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
				<p><b>Effect</b>: Whenever you cast a spell, increase the production of your most productive building based on the amount of mana produced in this game for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
				<p><b>Formula</b>: round(0.7 * x ^ 0.6)%, where x is your Mana Produced (Total) stat.</p>
				<hr>
				<p><b>A175</b> - For Undead</p>
				<p><b>Research Name</b>: Soulweaving</p>
				<p><b>Requirement</b>: Research Cursing (D25) & Reinforcing (C135)</p>
				<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you Reincarnated.</p>
				<p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.</p>
				<hr>
				<p><b>A200</b> - For All Factions</p>
				<p><b>Research Name</b>: Corrosion</p>
				<p><b>Requirement</b>: Research Plague (A1) & Decay (A135)</p>
				<p><b>Cost</b>: 82.65 Dqig (82.65e160)</p>
				<p><b>Effect</b>: Increase clicking reward based on time spent in this game.</p>
				<p><b>Formula</b>: (0.07 * (2 * x) ^ 0.75)%, where x is your Playtime (This Game) in seconds.</p>
				<hr>
				<p><b>A250</b> - For All Factions</p>
				<p><b>Research Name</b>: Philosopher's Stone</p>
				<p><b>Requirement</b>: Research Transmutation (A10) & Empowered Luck (S175)</p>
				<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
				<p><b>Effect</b>: Increase production bonus from gems based on the amount of research made.</p>
				<p><b>Formula</b>: floor(x ^ 0.9 / 25)%, where x is the amount of research made.</p>
				<hr>
				<p><b>A251</b> - For Druid</p>
				<p><b>Research Name</b>: Infusion</p>
				<p><b>Requirement</b>: Secrets of the Ancients (as Druids)</p>
				<p><b>Cost</b>: 79.05 QiQig (7.905e169)</p>
				<p><b>Effect</b>: Increase the production of Stonehenge Circles based on mana produced in this game.</p>
				<p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.</p>
				<hr>
				<p><b>A270</b> - For All Factions</p>
				<p><b>Research Name</b>: Synthesis</p>
				<p><b>Hint</b>: Faction Currency.</p>
				<p><b>Requirement</b>: 20 B (2e10) Faction Coins (This game)</p>
				<p><b>Cost</b>: 175.2 SxQig (1.752e173)</p>
				<p><b>Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.</p>
				<p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5)%, where x is Factions Coins found (This game).</p>
				<hr>
				<p><b>A300</b> - For Faceless</p>
				<p><b>Research Name</b>: Creeping</p>
				<p><b>Hint</b>: Blue Production.</p>
				<p><b>Requirement</b>: Produce 5M mana (This game) as Druid</p>
				<p><b>Cost</b>: 33 OcQig (3.36e178)</p>
				<p><b>Effect</b>: Increase mana regeneration based on mana produced in this game.</p>
				<p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.</p>
				<hr>
				<p><b>A305</b> - For All Factions</p>
				<p><b>Research Name</b>: Engraving</p>
				<p><b>Hint</b>: Druidic experience.</p>
				<p><b>Requirement</b>: 2 days as Druids (across all Reincarnations)</p>
				<p><b>Cost</b>: 255.2 OcQig (2.552e179)</p>
				<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.</p>
				<p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.</p>
				<p><b>Formula</b>: floor(3.5 * ln(1 + x) ^ 3.5)%, where x is your Spells Cast (This Game) stat.</p>
				<hr>
				<p><b>A330</b> - For All Factions</p>
				<p><b>Research Name</b>: Adaptation</p>
				<p><b>Requirement</b>: Research Mutation (D260) & Meditation (D275)</p>
				<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions.</p>
				<p><b>Formula</b>: (0.05 * (x - y) ^ 0.7)%, where x is All Time playtime and y is the highest All Time spent amongst your current factions.</p>
				<hr>
				<p><b>A375</b> - For Druid</p>
				<p><b>Research Name</b>: Transfusion</p>
				<p><b>Requirement</b>: Research Infusion (A251) & Engraving (A305)</p>
				<p><b>Cost</b>: 541 DSxg (5.41e191)</p>
				<p><b>Effect</b>: Gain additional assistants based on mana produced this game.</p>
				<p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.</p>
				<hr>
				<p><b>A400</b> - For All Factions But Mercenary</p>
				<p><b>Research Name</b>: Bloodspring</p>
				<p><b>Requirement</b>: Research Assimilation (S251) & Transfusion (A375).</p>
				<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
				<p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.</p>
				<p><b>Note</b>: Provides Prestige Bloodline for Elite Factions from R125 to R129, MAD bloodlines at R130+.</p>
				<p><b>Note</b>: Does not work with two Bloodlines of the same type.</p>
				<hr>
				<p><b>A410</b> - For Drow</p>
				<p><b>Research Name</b>: Poisons</p>
				<p><b>Hint</b>: Evil Churches.</p>
				<p><b>Requirement</b>: 4000 Sanctuaries</p>
				<p><b>Cost</b>: 787.7 QaSxg (7.877e197)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 95% per Spider Sanctuary you own.</p>
				<hr>
				<p><b>A480</b> - For All Factions</p>
				<p><b>Research Name</b>: Waste</p>
				<p><b>Hint</b>: Royal Trade Network.</p>
				<p><b>Requirement</b>: 2000 Royal Exchanges</p>
				<p><b>Cost</b>: 1.67 NoSxg (1.67e210)</p>
				<p><b>Effect</b>: Increase offline production based on the amount of Royal Exchanges you purchased.</p>
				<p><b>Formula</b>: 120 * x ^ 0.85, where x is your Royal Exchanges Made stat.</p>
				<hr>
				<p><b>A495</b> - For Dwarf</p>
				<p><b>Research Name</b>: Elixirs</p>
				<p><b>Hint</b>: Never enough servitude.</p>
				<p><b>Requirement</b>: 500 Base Assistants (as Drow)</p>
				<p><b>Cost</b>: 731.4 NoSxg (7.314e212)</p>
				<p><b>Effect</b>: Increase assistants production based on the amount of research made.</p>
				<p><b>Formula</b>: (40 * x ^ 0.4)%, where x is the Amount of Researches made.</p>
				<hr>
				<p><b>A545</b> - For All Factions</p>
				<p><b>Research Name</b>: Mineralogy</p>
				<p><b>Hint</b>: Full Showcase.</p>
				<p><b>Requirement</b>: 700 trophies</p>
				<p><b>Cost</b>: 466.3 DSpg (4.663e221)</p>
				<p><b>Effect</b>: Increases mana regeneration based on Gems you own.</p>
				<p><b>Formula</b>: (log10(x) / 2), where x is Gems you own.</p>
				<hr>
				<p><b>A590</b> - For Undead,Drow</p>
				<p><b>Research Name</b>: Hexing</p>
				<p><b>Requirement</b>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)</p>
				<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.</p>
				<p><b>Formula</b>: (0.045 * x ^ 0.45 * p)%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.</p>
				<hr>
				<p><b>A1200</b> - For Neutral,Dragon</p>
				<p><b>Research Name</b>: Melting</p>
				<p><b>Hint</b>: Steel Stronghold.</p>
				<p><b>Requirement</b>: 5000 Iron Stronghold, Any Neutral Dragon</p>
				<p><b>Cost</b>: 5.195 Uvg (5.195e66)</p>
				<p><b>Effect</b>: Increase the production of all other buildings per Iron Strongholds owned by 0.35%</p>
				<p><b>Formula</b>: (0.35 * x)%, where x is Iron Strongholds owned.</p>
				<hr>
				<p><b>A1325</b> - For All Factions</p>
				<p><b>Research Name</b>: Calefaction</p>
				<p><b>Hint</b>: Excavate me out!</p>
				<p><b>Requirement</b>: 4500 Excavations (This R)</p>
				<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
				<p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.</p>
				<p><b>Formula</b>: floor(0.02 * x), where x is current excavations.</p>
				<hr>
				<p><b>A1500</b> - For Druid,Dragon</p>
				<p><b>Research Name</b>: Sublimation</p>
				<p><b>Hint</b>: How long required to achieve a Grand Balance?</p>
				<p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon</p>
				<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
				<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
				<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 250%.</p>
				<p><b>Formula</b>: (40 * x * 0.8), where x is Unique Buildings owned.</p>
				<hr>
				<p><b>A2950</b> - For Mercenary</p>
				<p><b>Research Name</b>: Combination</p>
				<p><b>Hint</b>: Some lineage?</p>
				<p><b>Requirement</b>: All Lineages Level at 15.</p>
				<p><b>Cost</b>: 259 SxQig (2.59e173)</p>
				<p><b>Effect</b>: Select an additional bloodline.</p>
				<p><b>Effect</b>: You also gain the base effect of its respective Lineage.</p>
				<p><b>Effect</b>: Combination Bloodline effects R60/R115 power.</p>
				<hr>
				<p><b>A3400</b> - For All Factions</p>
				<p><b>Research Name</b>: Chemistry</p>
				<p><b>Hint</b>: Get attracted to Faction Coins.</p>
				<p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) & (Manipulation S3200).</p>
				<p><b>Cost</b>: 894.5 QiQig (5.69e197)</p>
				<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.</p>
				<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 300%.</p>
				<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.</p>
				<hr>
				<p><b>A5125</b> - For All Factions</p>
				<p><b>Research Name</b>: Putrefaction</p>
				<p><b>Requirement</b>: R175+, Forgotten Relic, Athanor artifact and upgrade.</p>
				<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the longest time spent without abdicating in this Reincarnation.</p>
				<p><b>Formula</b>: (0.7 x ^ 0.7), where x is the longest time spent without abdicating (This R).</p>
				<hr>
				<p><b>A5375</b> - For Order</p>
				<p><b>Research Name</b>: Albedo</p>
				<p><b>Requirement</b>: R177+, Forgotten Relic, Athanor artifact and upgrade.</p>
				<p><b>Effect</b>: Increase all spells duration based on spell casts in this game.</p>
				<p><b>Formula</b>: (ln(1 + x) ^ 1.8)%, where x is spell casts this game.</p>
				<hr>
				<p><b>A5625</b> - For All Factions</p>
				<p><b>Research Name</b>: Reduction</p>
				<p><b>Requirement</b>: R179+, Forgotten Relic, Athanor artifact and upgrade.</p>
				<p><b>Effect</b>: Reduce all spells cost based on their individual duration.</p>
				<p><b>Formula</b>: Additive reduction: ((x/y) ^ 0.65), where x is duration and y is base duration.</p>
				<hr>
				<p><b>A5875</b> - For All Factions</p>
				<p><b>Research Name</b>: Equivalence</p>
				<p><b>Requirement</b>: R181+, Forgotten Relic, Athanor artifact and upgrade.</p>
				<p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on Faction Coin found in this game.</p>
				<p><b>Formula</b>: (log10(x) ^ 1.5), where x is faction coins this game</p>
				<hr>
				<p><b>A10875</b> - For All Factions</p>
				<p><b>Research Name</b>: Toxicity</p>
				<p><b>Requirement</b>: R221+</p>
				<p><b>Effect</b>: Multiplicatively increase mana regeneration based on time spent with the faction opposite to your current one, in this Reincarnation.</p>
				<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is time spent with opposite-alignment faction this R.</p>
				<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively (therefore Druid counts Druid playtime itself).</p>
				<hr>
				<p><b>A11125</b> - For All Factions</p>
				<p><b>Research Name</b>: Alkahest</p>
				<p><b>Requirement</b>: R223+</p>
				<p><b>Effect</b>: Clicks count more based on the amount of active spells.</p>
				<p><b>Formula</b>: (x ^ 1.5)%, where x is the amount of active spells.</p>
				<hr>
				<p><b>A11375</b> - For All Factions</p>
				<p><b>Research Name</b>: Azoth</p>
				<p><b>Requirement</b>: R225+</p>
				<p><b>Effect</b>: Increase clicking reward based on Mana Regeneration.</p>
				<p><b>Formula</b>: (2 * log10(1 + x) ^ 2)%, where x is Mana Regeneration</p>
				<hr>
				<p><b>A11625</b> - For All Factions</p>
				<p><b>Research Name</b>: Anima Mundi</p>
				<p><b>Requirement</b>: R227+</p>
				<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coins found in this Reincarnation.</p>
				<p><b>Formula</b>: (0.4 * log10(1 + x) ^ 2)%, where x is Faction Coins found in this Reincarnation.</p>
				<hr>
				<p><b>A11875</b> - For All Factions</p>
				<p><b>Research Name</b>: Liquefaction</p>
				<p><b>Requirement</b>: R229+</p>
				<p><b>Effect</b>: Increase the production of the three highest building tiers based on Hellfire Blast activity time in this Reincarnation.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is Hellfire Blast activity time in this Reincarnation.</p>
				<hr>
				<p><b>A12250</b> - For All Factions</p>
				<p><b>Research Name</b>: Folgoration</p>
				<p><b>Requirement</b>: R232+</p>
				<p><b>Effect</b>: While both Diamond Pickaxe and God's Hand are active, multiplicatively increase Mana Regeneration and Faction Coin find chance based on the amount of Excavations made in this Reincarnation, including resets.</p>
				<p><b>Formula</b>: (15 + 1.75 * (x * y) ^ 0.75)%, where x is the amount of Excavations and y the amount of Excavation resets made in this Reincarnation respectively.</p>
				<hr>
				<p><b>A13125</b> - For All Factions</p>
				<p><b>Research Name</b>: Cinnabar</p>
				<p><b>Requirement</b>: R239+</p>
				<p><b>Effect</b>: All spells activity time counts more based on Tax Collection casts in this game.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the number of Tax Collections cast this game.</p>
				<hr>
				<p><b>A13500</b> - For All Factions</p>
				<p><b>Research Name</b>: Lunafaction</p>
				<p><b>Requirement</b>: R242+</p>
				<p><b>Effect</b>: All Balance spells can be cast up to 3 tier above their maximum. Increase Offline production based on time spent as Balance in this Reincarnation.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as Balance this Reincarnation.</p>
				<p><b>Note</b>: All Creation can be cast up to Tier 5 (This research overrides Dragon Set 2). Moon Blessing, Goblin’s Greed and Grand Balance can be cast up to Tier 10. Infinite Spiral can be cast up to Tier 4.</p>
				<hr>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Warfare.png" alt="Warfare" align="middle"><a href="#" onclick="return false;"><b> Warfare</b></a></p>
			<div class="autohide">
				<p><b>W1</b> - For Demon</p>
				<p><b>Research Name</b>: Assault</p>
				<p><b>Cost</b>: 750 Qag (7.50e125)</p>
				<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
				<p><b>Formula</b>: (30 * x ^ 0.7)%, where x is Hellfire Blasts Cast This Game.</p>
				<hr>
				<p><b>W10</b> - For Elf</p>
				<p><b>Research Name</b>: Dueling</p>
				<p><b>Hint</b>: Too many soldiers. More barracks!</p>
				<p><b>Requirement</b>: 2000 Warrior Barracks</p>
				<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 90% per Elven Training Grounds you own.</p>
				<hr>
				<p><b>W25</b> - For Goblin</p>
				<p><b>Research Name</b>: War Funds</p>
				<p><b>Hint</b>: Get rich.</p>
				<p><b>Requirement</b>: 1 Tqag (1e132) Coins Gained (This Game)</p>
				<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</p>
				<p><b>Formula</b>: round(5 * x ^ 0.5)%, where x is Tax Collections Cast This Game.</p>
				<hr>
				<p><b>W50</b> - For Undead</p>
				<p><b>Research Name</b>: Exertion</p>
				<p><b>Hint</b>: Bad times!</p>
				<p><b>Requirement</b>: 12 hours of Evil Play Time this R (Unlock as Demon)</p>
				<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
				<p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.</p>
				<p><b>Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.</p>
				<hr>
				<p><b>W120</b> - For All Factions</p>
				<p><b>Research Name</b>: Betrayal</p>
				<p><b>Hint</b>: How big of an army can you muster?</p>
				<p><b>Requirement</b>: 250 base assistants</p>
				<p><b>Cost</b>: 676 Spqag (6.76e146)</p>
				<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of assistants you own.</p>
				<p><b>Formula</b>: round(1.5 * x^1.5)%, where x is the amount of assistants you own.</p>
				<hr>
				<p><b>W135</b> - For All Factions</p>
				<p><b>Research Name</b>: Rampage</p>
				<p><b>Hint</b>: Light up those cups!</p>
				<p><b>Requirement</b>: 580 Trophies (as Demon)</p>
				<p><b>Cost</b>: 296 Ocqag (9.6e149)</p>
				<p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.</p>
				<p><b>Formula</b>: floor(1.3 * x ^ 1.1), where x is the amount of trophies unlocked.</p>
				<hr>
				<p><b>W150</b> - For All Factions</p>
				<p><b>Research Name</b>: Invasion</p>
				<p><b>Requirement</b>: Research War Funds (W25) & Rampage (W135)</p>
				<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.</p>
				<p><b>Formula</b>: round(32 * x ^ 0.75)%, where x is the amount of assistants you own.</p>
				<hr>
				<p><b>W175</b> - For Demon</p>
				<p><b>Research Name</b>: Overwhelm</p>
				<p><b>Requirement</b>: Research Assault (W1) & Invasion (W150)</p>
				<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
				<p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.</p>
				<p><b>Formula</b>: +(10 + x ^ 0.9), where x is the amount of evil spells cast.</p>
				<hr>
				<p><b>W180</b> - For All Factions</p>
				<p><b>Research Name</b>: Formation</p>
				<p><b>Requirement</b>: 1000 Call to Arms (This R), Research Dueling (W10) & Exertion (W50)</p>
				<p><b>Cost</b>: 24.85 Uqig (2.485e157)</p>
				<p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.</p>
				<hr>
				<p><b>W200</b> - For All Factions</p>
				<p><b>Research Name</b>: Crusade</p>
				<p><b>Requirement</b>: Research Hallowing (D50) & Formation (W180)</p>
				<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
				<p><b>Effect</b>: Gain additional assistants based on time spent as Good this R.</p>
				<p><b>Formula</b>: floor(0.065 * x ^ 0.5), where x is your Time Spent Being Good (This R) stat.</p>
				<hr>
				<p><b>W205</b> - For All Evil Factions</p>
				<p><b>Research Name</b>: Berserking</p>
				<p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) & Retribution (D150)</p>
				<p><b>Cost</b>: 627.6 Dqig (6.276e161)</p>
				<p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.</p>
				<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
				<p><b>Formula</b>: floor(0.25 * x ^ 0.9), where x is your Assistants stat.</p>
				<hr>
				<p><b>W225</b> - For Angel</p>
				<p><b>Research Name</b>: Critical Strike</p>
				<p><b>Requirement</b>: Research Dueling (W10) & Transfixion (D55)</p>
				<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
				<p><b>Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this Reincarnation.</p>
				<p><b>Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light active time This Reincarnation in seconds.</p>
				<hr>
				<p><b>W250</b> - For All Factions</p>
				<p><b>Research Name</b>: Swarming</p>
				<p><b>Requirement</b>: Research Overwhelm (W175) & Berserking (W205)</p>
				<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
				<p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.</p>
				<p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.</p>
				<hr>
				<p><b>W260</b> - For Titan</p>
				<p><b>Research Name</b>: Athletics</p>
				<p><b>Hint</b>: Too many legends! Need more room!</p>
				<p><b>Requirement</b>: 3,000 Olympian Halls</p>
				<p><b>Cost</b>: 3.039 SxQig (3.039e171)</p>
				<p><b>Effect</b>: Increase the production of all other buildings by 100% per Olympian Hall you own.</p>
				<hr>
				<p><b>W275</b> - For Faceless</p>
				<p><b>Research Name</b>: Domination</p>
				<p><b>Hint</b>: How many people are required to throw a party?</p>
				<p><b>Requirement</b>: 300 Base Assistants (as Faceless)</p>
				<p><b>Cost</b>: 1.331 SpQig (1.331e174)</p>
				<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game.(This R)</p>
				<p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.</p>
				<p><b>Formula</b>: (200 * x ^ 0.55), where x is your Assistants (Max) stat.</p>
				<hr>
				<p><b>W290</b> - For All Factions</p>
				<p><b>Research Name</b>: Entrench</p>
				<p><b>Hint</b>: Dig, dig, dig the hole.</p>
				<p><b>Requirement</b>: 2,000 Excavations</p>
				<p><b>Cost</b>: 582.7 SpQig (5.827e176)</p>
				<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of Excavations you made.</p>
				<p><b>Formula</b>: round(15 * x ^ 0.8)%, where x is the amount of excavations made.</p>
				<hr>
				<p><b>W320</b> - For All Factions</p>
				<p><b>Research Name</b>: Shattering</p>
				<p><b>Hint</b>: Down all the way.</p>
				<p><b>Requirement</b>: 2,650 Excavations</p>
				<p><b>Cost</b>: 1.117 NoQig (1.117e180)</p>
				<p><b>Effect</b>: Increase your clicking reward based on the amount of Excavations you made.</p>
				<p><b>Formula</b>: round(10 * x ^ 0.75)%, where x is the amount of excavations made.</p>
				<hr>
				<p><b>W330</b> - For All Factions</p>
				<p><b>Research Name</b>: Heroism</p>
				<p><b>Requirement</b>: Research Crusade (W200) & Athletics (W260).</p>
				<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
				<p><b>Effect</b>: Increase your click reward based on the amount of trophies you unlocked.</p>
				<p><b>Formula</b>: round(2.5 * x)%, where x is the amount of trophies unlocked.</p>
				<hr>
				<p><b>W350</b> - For Druid</p>
				<p><b>Research Name</b>: Survival</p>
				<p><b>Requirement</b>: Research Creeping (A300) & Synthesis (A270).</p>
				<p><b>Cost</b>: 21.42 USxg (2.142e187)</p>
				<p><b>Effect</b>: Increase the production of all other buildings based on the production of your Stonehenge Circles.</p>
				<p><b>Formula</b>: (75 * (log10(1 + x)) ^ 1.3))%, where x is the production of your Stonehenge Circles.</p>
				<hr>
				<p><b>W400</b> - For All Factions</p>
				<p><b>Research Name</b>: Siege</p>
				<p><b>Requirement</b>: Research Architecture (C251) & Entrench (W290).</p>
				<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
				<p><b>Effect</b>: Each building in the three highest building tiers count as 2 buildings for all purposes.</p>
				<hr>
				<p><b>W405</b> - For Drow</p>
				<p><b>Research Name</b>: Ambush</p>
				<p><b>Requirement</b>: Secrets of the Underworld (as Drow)</p>
				<p><b>Cost</b>: 103.7 QaSxg (1.037e197)</p>
				<p><b>Effect</b>: Increase the production of Spider Sanctuaries based on offline Bonus</p>
				<p><b>Formula</b>: (3.25 * log10(1 + x) ^ 3.25)%, where x is offline production bonus multiplier.</p>
				<p><b>Note</b>: This research is treated as an A1 upgrade for A-nerf purposes.</p>
				<hr>
				<p><b>W520</b> - For Drow</p>
				<p><b>Research Name</b>: Stalking</p>
				<p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)</p>
				<p><b>Cost</b>: 18.47 Uspg (1.847e217)</p>
				<p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time (This Game).</p>
				<hr>
				<p><b>W525</b> - For Evil</p>
				<p><b>Research Name</b>: Bloodlust</p>
				<p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)</p>
				<p><b>Cost</b>: 140.2 USpg (1.402e218)</p>
				<p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.</p>
				<p><b>Formula</b>: (300 * floor(x ^ 0.3))%, where x is Faction Spells' Cast This Game.</p>
				<hr>
				<p><b>W560</b> - For Dwarf</p>
				<p><b>Research Name</b>: Resilience</p>
				<p><b>Requirement</b>: Research Eternity (D330) and Mercy (D480)</p>
				<p><b>Cost</b>: 204.2 TSpg (2.042e224)</p>
				<p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game.</p>
				<p><b>Formula</b>: (4 * x ^ 0.4)%, where x is your Treasure Clicks (This Game) stat.</p>
				<hr>
				<p><b>W590</b> - For Demon,Drow</p>
				<p><b>Research Name</b>: Torture</p>
				<p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)</p>
				<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
				<p><b>Effect</b>: Increase assistants production based on total time spent being Evil (This R). </p>
				<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Time Spent Being Evil stat.</p>
				<hr>
				<p><b>W1275</b> - For All Factions</p>
				<p><b>Research Name</b>: Authority</p>
				<p><b>Hint</b>: How long does your Call to Arms last?</p>
				<p><b>Requirement</b>: 43200s (12 hours) Call to Arms Cast Time (This game).</p>
				<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
				<p><b>Effect</b>: Increase the duration of all spells based on Call to Arms activity time in this Reincarnation.</p>
				<p><b>Formula</b>: (x ^ 0.5)%, where x is Call to Arms active time This Reincarnation in seconds.</p>
				<hr>
				<p><b>W1375</b> - For All Factions</p>
				<p><b>Research Name</b>: Scavenging</p>
				<p><b>Hint</b>: GUD? More like Evil.</p>
				<p><b>Requirement</b>: 7 days spent as evil (across all Reincarnations)</p>
				<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
				<p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.</p>
				<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.</p>
				<p><b>Formula</b>: (100 * x ^ 0.5), where x is assistants.</p>
				<hr>
				<p><b>W1400</b> - For Dragon</p>
				<p><b>Research Name</b>: Cataclysm</p>
				<p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon</p>
				<p><b>Cost</b>: 4.249 Qivg (4.249e78)</p>
				<p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.</p>
				<p><b>Formula</b>: +(650 * x ^ 0.35), where x is the amount of clicks made in this game.</p>
				<hr>
				<p><b>W3050</b> - For Mercenary</p>
				<p><b>Research Name</b>: Flanking</p>
				<p><b>Requirement</b>: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325).</p>
				<p><b>Cost</b>: 809 SpQig (8.09e176)</p>
				<p><b>Effect</b>: Increases the production of buildings one tier directly above or below a Unique Building based on the amount of assistants you own.</p>
				<p><b>Formula</b>: (2 * x ^ 0.8)%, where x is assistants.</p>
				<hr>
				<p><b>W3150</b> - For All Factions</p>
				<p><b>Research Name</b>: Upheaval</p>
				<p><b>Hint</b>: More of the baseline production buildings!</p>
				<p><b>Requirement</b>: 60000 Farms, Inns and Blacksmiths.</p>
				<p><b>Cost</b>: 731.6 NoQig (7.316e182)</p>
				<p><b>Effect</b>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.</p>
				<p><b>Formula</b>: (150 * (12 - T) ^ 2.15)%, where T is building tier.</p>
				<hr>
				<p><b>W5125</b> - For All Factions</p>
				<p><b>Research Name</b>: Sovereignty</p>
				<p><b>Requirement</b>: R175+, Forgotten Relic, Battlefield artifact and upgrade.</p>
				<p><b>Effect</b>: Increase the production of two highest tier buildings based on assistants you own.</p>
				<p><b>Formula</b>: (0.5 * x ^ 0.25)%, where x is assistants.</p>
				<hr>
				<p><b>W5375</b> - For Evil</p>
				<p><b>Research Name</b>: Officers</p>
				<p><b>Requirement</b>: R177+, Forgotten Relic, Battlefield artifact and upgrade.</p>
				<p><b>Effect</b>: Multiplactively increase assistants based on the amount of trophies unlocked.</p>
				<p><b>Formula</b>: (2.5 * x ^ 0.5), where x is trophies.</p>
				<hr>
				<p><b>W5625</b> - For All Factions</p>
				<p><b>Research Name</b>: Concealment</p>
				<p><b>Requirement</b>: R179+, Forgotten Relic, Battlefield artifact and upgrade.</p>
				<p><b>Effect</b>: Offline time counts more based on Mana Produced in this game.</p>
				<p><b>Effect</b>: (2 * ln(1 + x) ^ 2)%, where x is mana produced (This game).</p>
				<hr>
				<p><b>W5875</b> - For All Factions</p>
				<p><b>Research Name</b>: Patience</p>
				<p><b>Requirement</b>: R181+, Forgotten Relic, Battlefield artifact and upgrade</p>
				<p><b>Effect</b>: Time spent with Prestige Counts 500% more.</p>
				<p><b>Effect</b>: Time spent with Elite factions Counts 1000% more.</p>
				<hr>
				<p><b>W10875</b> - For All Factions</p>
				<p><b>Research Name</b>: Revolution</p>
				<p><b>Requirement</b>: R221+</p>
				<p><b>Effect</b>: Gain assistants based on Royal Exchanges made.</p>
				<p><b>Formula</b>: +(x ^ 0.75), where x is royal exchanges made.</p>
				<hr>
				<p><b>W11125</b> - For All Factions</p>
				<p><b>Research Name</b>: Vengeance</p>
				<p><b>Requirement</b>: R223+</p>
				<p><b>Effect</b>: Increase Offline production based on the duration of your longest spell.</p>
				<p><b>Formula</b>: (5 + 1.5 * x ^ 0.5)%, where x is the duration of your longest spell.</p>
				<hr>
				<p><b>W11375</b> - For All Factions</p>
				<p><b>Research Name</b>: Pacifism</p>
				<p><b>Requirement</b>: R225+</p>
				<p><b>Effect</b>: Increase all spells durations based on time spent in this game.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent this game.</p>
				<hr>
				<p><b>W11625</b> - For All Factions</p>
				<p><b>Research Name</b>: Genocide</p>
				<p><b>Requirement</b>: R227+</p>
				<p><b>Effect</b>: Increase the production of all buildings based on time spent with the least used faction.</p>
				<p><b>Formula</b>: (50 + x ^ 0.85)%, where x is time spent with the least used faction this R in seconds.</p>
				<hr>
				<p><b>W11875</b> - For All Factions</p>
				<p><b>Research Name</b>: Scouting</p>
				<p><b>Requirement</b>: R229+</p>
				<p><b>Effect</b>: Buildings count more based on the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
				<p><b>Formula</b>: (x ^ 0.9)%, where x is the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
				<p><b>Note</b>: Amount of targets can be seen at Druid Challenge Reward, but needs an active Grand Balance to update.</p>
				<hr>
				<p><b>W12250</b> - For All Factions</p>
				<p><b>Research Name</b>: Raiding</p>
				<p><b>Requirement</b>: R232+</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the highest Combo Strike counter you had in this Reincarnation.</p>
				<p><b>Formula</b>: (2.5 * x ^ 0.5)%, where x is the highest Combo Strike counter in this Reincarnation.</p>
				<hr>
				<p><b>W13125</b> - For All Factions</p>
				<p><b>Research Name</b>: Artillery</p>
				<p><b>Requirement</b>: R239+</p>
				<p><b>Effect</b>: Increase all spell duration based on the highest amount of spells cast in this Reincarnation.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest number of spells cast in a single run this Reincarnation.</p>
				<hr>
				<p><b>W13500</b> - For All Factions</p>
				<p><b>Research Name</b>: Backfire</p>
				<p><b>Requirement</b>: R242+</p>
				<p><b>Effect</b>: Increase the production of Evil buildings based on time spent as Good, the production of Chaos buildings based on time spent as Order, and the production of Chaos Evil buildings as the sum of time spent as Good and Order. Also increases the production of Good and Order buildings based on Evil and Chaos in the same way.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the respective time stat in seconds.</p>
				<p><b>Note</b>: Buildings only receive the highest effect (That is, if the building is Evil/Chaos, it only gets the Evil/Chaos bonus, not the Evil or the Chaos individual bonuses).</p>
				<p><b>Note</b>: The Good/Evil alignment of a building applies normally, while the Order/Chaos alignment of a building only applies to Base Faction's Unique Buildings (both UB1 and UB2) and Elite Unique Buildings</p>
				<hr>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><img src="http://musicfamily.org/realm/Factions/picks/Forbidden.png" alt="Forbidden" align="middle"><a href="#" onclick="return false;"><b> Forbidden</b></a></p>
			<div class="autohide">
				<p><b>F5250</b> - For All Factions</p>
				<p><b>Research Name</b>: Dreamwalking</p>
				<p><b>Requirement</b>: R176+, Forgotten Relic, Apeiron artifact and upgrade.</p>
				<p><b>Cost</b>: Free</p>
				<p><b>Effect</b>: Increase Offline Bonus based on time spent offline in this Reincarnation.</p>
				<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is offline time (This R).</p>
				<hr>
				<p><b>F5500</b> - For All Factions</p>
				<p><b>Research Name</b>: Gathering</p>
				<p><b>Requirement</b>: R178+, Forgotten Relic, Apeiron artifact and upgrade.</p>
				<p><b>Cost</b>: Free</p>
				<p><b>Effect</b>: Additively increase production bonus from Gems based on your Faction Coin find chance.</p>
				<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is faction coin find chance.</p>
				<hr>
				<p><b>F5750</b> - For All Factions</p>
				<p><b>Research Name</b>: Corruption</p>
				<p><b>Requirement</b>: R180+, Forgotten Relic, Apeiron artifact and upgrade.</p>
				<p><b>Cost</b>: Free</p>
				<p><b>Effect</b>: Gain the base Union effect of your opposite Alignment.</p>
				<p><b>Note</b>: Only gain the effects of the Base Faction that matches both alignments. For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
				<hr>
				<p><b>F6000</b> - For All Factions</p>
				<p><b>Research Name</b>: Inevitability</p>
				<p><b>Requirement</b>: R182+, Forgotten Relic, Apeiron artifact and upgrade.</p>
				<p><b>Cost</b>: Free</p>
				<p><b>Effect</b>: Increase your next time head start based on time spent in this game.</p>
				<p><b>Note</b>: Capped at time spent in your current Reincarnation.</p>
				<p><b>Note</b>: Does not count when  Reincarnating.</p>
				<p><b>Formula</b>: (x ^ 0.75), where x is time spent (This Game).</p>
				<hr>
				<p><b>F11000</b> - For All Factions</p>
				<p><b>Research Name</b>: Godslaying</p>
				<p><b>Requirement</b>: R222+</p>
				<p><b>Effect</b>: Active spells count more based on the sum of your Faction spells activity time.</p>
				<p><b>Formula</b>: (0.575 * x ^ 0.575)%, where x is your current faction(s)’ faction spell activity time this R in seconds.</p>
				<hr>
				<p><b>F11250</b> - For All Factions</p>
				<p><b>Research Name</b>: Inanity</p>
				<p><b>Requirement</b>: R224+</p>
				<p><b>Effect</b>: Excavations count more based on time spent offline in this game.</p>
				<p><b>Formula</b>: (0.9 * x ^ 0.45)%, where x is time spent offline this game.</p>
				<hr>
				<p><b>F11500</b> - For All Factions</p>
				<p><b>Research Name</b>: Paradox</p>
				<p><b>Requirement</b>: R226+</p>
				<p><b>Effect</b>: Gain the Set bonus of your opposite alignment.</p>
				<p><b>Note</b>: Only gain the effects of the Base Faction that matches both alignments. For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
				<hr>
				<p><b>F11750</b> - For All Factions</p>
				<p><b>Research Name</b>: Relativity</p>
				<p><b>Requirement</b>: R228+</p>
				<p><b>Effect</b>: You can purchase one Legacy of your choice for free.</p>
				<p><b>Note</b>: This will not increase the cost of the normal Legacy.</p>
				<hr>
				<p><b>F12000</b> - For All Factions</p>
				<p><b>Research Name</b>: Revelation</p>
				<p><b>Requirement</b>: R230+</p>
				<p><b>Effect</b>: Allows the purchase of one additional Legacy Combo upgrade.</p>
				<hr>
				<p><b>F12500</b> - For All Factions</p>
				<p><b>Research Name</b>: Avatars</p>
				<p><b>Requirement</b>: R234+</p>
				<p><b>Effect</b>: Multiplactively increase assistants based on the amount of different Factions in your Legacies.</p>
				<p><b>Formula</b>: (50 * x ^ 2.5)%, where x is the amount of different Factions in your Legacies.</p>
				<hr>
				<p><b>F13250</b> - For All Factions</p>
				<p><b>Research Name</b>: Taboo</p>
				<p><b>Requirement</b>: R240+</p>
				<p><b>Effect</b>: Increase the production of all buildings based on the amount of faction upgrades different than your own.</p>
				<p><b>Formula</b>: (1.2 * x ^ 1.2)%, where x is the number of faction upgrades you have that are not part of your faction.</p>
				<p><b>Note</b>: Faction upgrades in this instance refers to only the main 12 faction upgrades (that you get via Legacies). Lineage Perks, Advanced Heritages and such are not counted toward this research.</p>
				<br/>
				<p><b>F13750</b> - For All Factions</p>
				<p><b>Research Name</b>: The Unseen</p>
				<p><b>Requirement</b>: R244+</p>
				<p><b>Effect</b>: Increase Offline production based on the maximum amount of assistants you had in this Reincarnation.</p>
				<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest number of assistants you had this Reincarnation.</p>
			</div>
		</div>
	</div>
<?php include "../scripts/footer.html"; ?>