<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>All Changes and Additions</h6>
        <br/>
<p><b>V4.0.0 December 16, 2020</b></p>
<br/>
<p><b>Added Ascension 4 (R220+)</b>.</p>
	<p><b>Gems Requirement</b>: 1e18 * 100 ^ (R - 220).</p>
	<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e26, where n is gems.</p>
	<p>Amethyst Coins become Sapphire Coins.</p>
	<p><b>Note</b>: When Ascending to Ascension 4, all Lineages will be set back to level 75 if higher.</p>
<br/>
<p><b>All ascension penalties from faction upgrades and advanced heritages will be completely removed in A4.</b></p>
<p><b>All Normal Heritages will become unavailable.</b></p>
<p><b>Prestige, Elite and Mercenary will become unavailable to be affiliated with.</b></p>
<p><b>Building cost formula will revert to A0 values</b>: b * (1.15 - r) ^ x, where b is base cost, x is amount of buildings of that type and r is your flat cost reduction(s).</p>
<br/>
<p><b>Faction Treaties Faction Coin Costs increased</b>.</p>
	<p><b>Trade Treaties</b>: 1 Qa (1e15)</p>
	<p><b>Friendship Pact</b>: 1 Sx (1e21)</p>
	<p><b>Alliance</b>: 1 Oc (1e27)</p>
	<p><b>Union</b>: 1 Dc (1e33)</p>
<br/>
<p><b>Faction Upgrades now cost Sapphire Coin</b>.</p>
	<p><b>Cost Formula</b>: (1e51 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>
	<table class="numtable">
		<tr>
			<th>Faction Upgrade</th>
			<th>Coin Cost</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1e51</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1e54</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1e57</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1e63</td>
		</tr>
		<tr>
			<td>5</td>
			<td>1e66</td>
		</tr>
		<tr>
			<td>6</td>
			<td>1e69</td>
		</tr>
		<tr>
			<td>7</td>
			<td>1e78</td>
		</tr>
		<tr>
			<td>8</td>
			<td>1e81</td>
		</tr>
		<tr>
			<td>9</td>
			<td>1e84</td>
		</tr>
		<tr>
			<td>10</td>
			<td>1e96</td>
		</tr>
		<tr>
			<td>11</td>
			<td>1e99</td>
		</tr>
		<tr>
			<td>12</td>
			<td>1e102</td>
		</tr>

	</table>
<br/>
<p><b>New Upgrade</b>:<img src="http://musicfamily.org/realm/Factions/picks/LegacyContainer.png" align="middle"> <b>Legacy</b>.</p>
	<p><b>Effect</b>: Choose a Legacy (set of 3 faction upgrades of the same tier) that doesn't match your current faction. You can purchase more Legacies for a progressively increasing cost.</p>
	<p><b>Coin Cost</b>: (1e72 * (1,000 ^ (x ^ 2 - x))), where x is your current Legacy container.</p>
	<p><b>Faction Coin Cost</b>: (1e33 * (1,000 ^ ( 0.5 * ( x ^ 2 - x)))), where x is your current Legacy container.</p>
	<table class="numtable">
		<tr>
			<th>Legacy Number</th>
			<th>Coin Cost</th>
			<th>Faction Coin Cost</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1e72</td>
			<td>1e33</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1e78</td>
			<td>1e36</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1e90</td>
			<td>1e42</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1e108</td>
			<td>1e51</td>
		</tr>
	</table>
<hr>
<p><b>A4 Research</b></p>
<p><b>All researches under 5000 point will be unavailable</b>.</p>
<p><b>Research Budget</b>: Budget is further increased by 2,000 for every Treaty, Friendship Pact, Alliance and Union bought.</p>
<p><b>Research Points</b>: Now capped at 12,000.</p>
	<p><b>Coin Cost</b>: (1.4 ^ (0.1 * RP - 7000))</p>
	<p><b>Faction Coin Cost</b>: (10 * 1.15 ^ (0.03 * RP))</p>
<br/>
<p><b>New Researches</b></p>
<p><b>Spellcraft</b></p>
<p><b>S10875</b> (Encompass)</p>
	<p><b>Effect</b>: Increase Maximum Mana based on the highest amount of Maximum Mana you had in this Reincarnation.</p>
	<p><b>Formula</b>: +(15 * ln(1 + x) ^ 3), where x is your highest max mana this R.</p>
<br/>
<p><b>S11125</b> (Multiplication)</p>
	<p><b>Effect</b>: Spells cast count more based on Mana Produced in this game.</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is mana produced this game.</p>
<br/>
<p><b>S11375</b> (Concentration)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on Spells cast in this game.</p>
	<p><b>New Formula</b>: (ln(1 + x) ^ 2)%, where x is spell casts this game.</p>
<br/>
<p><b>S11625</b> (Completeness)</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of Trophies you unlocked.</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.5)%, where x is the amount of Trophies you unlocked.</p>
<br/>
<p><b>Craftsmanship</b></p>
<p><b>C10875</b> (Masterpiece)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on Excavation Resets made in this Reincarnation (Multiplicative).</p>
	<p><b>Formula</b>: (2 * x ^ 2)%, where x is excavation resets this R.</p>
<br/>
<p><b>C11125</b> (Installation)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on their quantity.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is total amount of buildings.</p>
<br/>
<p><b>C11375</b> (Exhibition)</p>
	<p><b>Effect</b>: Trophies count more based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is total amount of buildings.</p>
<br/>
<p><b>C11625</b> (Motus Perpetuum)</p>
	<p><b>Effect</b>: Autoclicks x times per second based on Clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: x = floor(ln(1 + y)), where y is productive clicks this R.</p>
	<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
<br/>
<p><b>Divine</b></p>
<p><b>D10875</b> (Scriptures)</p>
	<p><b>Effect</b>: Increase all spells’ durations based on time spent with their respective requirement.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent in seconds with the faction or alignment that unlocks the spells.</p>
	<p><b>Note</b>: Call to Arms and Spiritual Surge use time spent this R.</p>
	<p><b>Note</b>: Heatwave and Hailstorm (Summer Festival event spells) use time spent as Summeraan and Winterly this R.</p>
	<p><b>Note</b>: All other event spells use time spent this R.</p>
<br/>
<p><b>D11125</b> (Viriditas)</p>
	<p><b>Effect</b>: Lineage levels count more based on the amount of Artifacts you excavated.</p>
	<p><b>Formula</b>: (x ^ 0.75)%, where x is the amount of Artifacts you excavated.</p>
<br/>
<p><b>D11375</b> (Rigor)</p>
	<p><b>Effect</b>: Reincarnations count 100% more.</p>
<br/>
<p><b>D11625</b> (Compassion)</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on time spent with your least used alignment in this Reincarnation.</p>
	<p><b>Formula</b>: (50 + x ^ 0.75)%, where x is time spent as the least used alignment this R.</p>
<br/>
<p><b>Economics</b></p>
<p><b>E10875</b> (Rigmarole)</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus based on the highest amount of assistants you had in this Reincarnation (Additive).</p>
	<p><b>Formula</b>: +(ln(1 + x) ^ 2)%, where x is your highest assistants count this R.</p>
<br/>
<p><b>E11125</b> (Grey Friday)</p>
	<p><b>Effect</b>: Reduce building cost multiplier.</p>
	<p><b>Formula</b>: -0.02, with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>E11375</b> (Heist)</p>
	<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have (Additive).</p>
	<p><b>Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is the amount of assistants you have.</p>
<br/>
<p><b>E11625</b> (Surplus)</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on the amount of Gems you have.</p>
	<p><b>Formula</b>: (25 + 0.25 * ln(1 + x) ^ 1.5)%, where x is the amount of Gems you have.</p>
<br/>
<p><b>Alchemy</b></p>
<p><b>A10875</b> (Toxicity)</p>
	<p><b>Effect</b>: Multiplicatively increase mana regeneration based on time spent with the faction opposite to your current one, in this Reincarnation.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is time spent with opposite-alignment faction this R.</p>
	<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively (therefore Druid counts Druid playtime itself).</p>
<br/>
<p><b>A11125</b> (Alkahest)</p>
	<p><b>Effect</b>: Clicks count more based on the amount of active spells.</p>
	<p><b>Formula</b>: (x ^ 1.5)%, where x is the amount of active spells.</p>
<br/>
<p><b>A11375</b> (Azoth)</p>
	<p><b>Effect</b>: Increase clicking reward based on mana regeneration.</p>
	<p><b>Formula</b>: (2 * log10(1 + x) ^ 2)%, where x is mana regeneration</p>
<br/>
<p><b>A11625</b> (Anima Mundi)</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coins found in this Reincarnation.</p>
	<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2)%, where x is factiom coins found this R</p>
<br/>
<p><b>Warfare</b></p>
<p><b>W10875</b> (Revolution)</p>
	<p><b>Effect</b>: Gain assistants based on Royal Exchanges made.</p>
	<p><b>Formula</b>: +(x ^ 0.75), where x is royal exchanges made.</p>
<br/>
<p><b>W11125</b> (Vengeance)</p>
	<p><b>Effect</b>: Increase Offline production based on the duration of your longest spell.</p>
	<p><b>Formula</b>: (5 + 1.5 * x ^ 0.5)%, where x is the duration of your longest spell.</p>
<br/>
<p><b>W11375</b> (Pacifism)</p>
	<p><b>Effect</b>: Increase all spells durations based on time spent in this game.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent this game.</p>
<br/>
<p><b>W11625</b> (Genocide)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent with the least used faction.</p>
	<p><b>Formula</b>: (50 + x ^ 0.85)%, where x is time spent with the least used faction this R in seconds.</p>
<br/>
<p><b>Forbidden</b></p>
<p><b>F11000</b> (Godslaying)</p>
	<p><b>Effect</b>: Active spells count more based on the sum of your Faction spells activity time.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your current faction(s)’ faction spell activity time this R in seconds.</p>
<br/>
<p><b>F11250</b> (Inanity)</p>
	<p><b>Effect</b>: Excavations count more based on time spent offline in this game.</p>
	<p><b>Formula</b>: (0.8 * x ^ 0.4)%, where x is time spent offline this game.</p>
<br/>
<p><b>F11500</b> (Paradox)</p>
	<p><b>Effect</b>: Gain the Set bonus of your opposite alignment.</p>
	<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
<br/>
<p><b>F11750</b> (Relativity)</p>
	<p><b>Effect</b>: You can purchase one Legacy of your choice for free.</p>
	<p><b>Note</b>: This will not increase the cost of the normal Legacy.</p>
<hr>
<p><b>9 New Lore Artifacts</b>: 1 for each base faction, unlocking their set's second effect</p>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GlowingWingArtifact.png" align="middle"> Glowing Wing</b></p>
	<p><b>Hint</b>: Mana Wings!</p>
	<p><b>Description</b>: And this is why Fairies don't need torches.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Fairy</p></p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is mana produced this game</p></p>
	<p><b>Fairy Set 2nd Effect</b>: Mutiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SylvanMirrorArtifact.png" align="middle"> Sylvan Mirror</b></p>
	<p><b>Hint</b>: Pay a barber with Faction Coins.</p>
	<p><b>Description</b>: An Elf with messy hair is not an Elf, by their own laws.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Elf</p></p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is your faction coins find chance in percent</p>
	<p><b>Elf Set 2nd effect</b>: Clicks count more based on autocast clicks.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
	<p><b>Note</b>: NOT affected by any "clicks count more" effects.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/SolidCloudArtifact.png" align="middle"> Solid Cloud</b></p>
	<p><b>Hint</b>: A cloud of spells.</p>
	<p><b>Description</b>: Angels have the power to save your life! And make a backup of it on the internet.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Angel</p></p>
	<p><b>Chance</b>: (x / 40,000)%, where x is the amount of active spells (Active Spells count more multipliers DO NOT count)</p></p>
	<p><b>Angel Set 2nd effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/OrcFangNecklaceArtifact.png" align="middle"> Orc Fang Necklace</b></p>
	<p><b>Hint</b>: Torment your subjects with taxes.</p>
	<p><b>Description</b>: To remind your slaves who's in charge.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Goblin</p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is TC casts this game</p>
	<p><b>Goblin Set 2nd effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
	<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodChaliceArtifact.png" align="middle"> Blood Chalice</b></p>
	<p><b>Hint</b>: Pour a bottle of Frenzy.</p>
	<p><b>Description</b>: The healthiest vampire breakfast.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Undead</p></p>
	<p><b>Chance</b>: (x / 10,000)%, where x  is an active Blood Frenzy's max duration (The duration when it was cast)</p></p>
	<p><b>Undead Set 2nd effect</b>: Increases production bonus from gems based on FC found this game (Multiplicative).</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is faction coins this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonTailArtifact.png" align="middle"> Demon Tail</b></p>
	<p><b>Hint</b>: Evil wizardry.</p>
	<p><b>Description</b>: Said to bring great luck to whom it possess...es.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Demon</p></p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is Evil Spell Casts this game</p></p>
	<p><b>Demon Set 2nd effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
	<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FrozenLightningArtifact.png" align="middle"> Frozen Lightning</b></p>
	<p><b>Hint</b>: Lightning never strikes the same place a couple million times. Maybe.</p>
	<p><b>Description</b>: A sculpture representing the embodiment of Titanic power.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Titan</p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is Lightning Strike activity time this game</p>
	<p><b>Titan Set 2nd effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
	<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/PrimalLeafArtifact.png" align="middle"> Primal Leaf</b></p>
	<p><b>Hint</b>: Huuuuge blue ball.</p>
	<p><b>Description</b>: Druid Catalyst for channeling the power of nature.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Druid</p></p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is the highest Max Mana this R</p></p>
	<p><b>Druid Set 2nd effect</b>: Lineage levels count more based on spell casts in this game.</p>
	<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TheBlackestInkArtifact.png" align="middle"> The Blackest Ink</b></p>
	<p><b>Hint</b>: Quality takes time.</p>
	<p><b>Description</b>: High-quality, freshly produced Faceless ink.</p>
	<p><b>Requirement</b>: 10,000 excavations, play as Faceless</p></p>
	<p><b>Chance</b>: (x / 10,000)%, where x is the longest game session this R (but NOT this game) in seconds</p></p>
	<p><b>Faceless Set 2nd effect</b>: Increases spell duration based on time spent being offline in this game.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
<hr>
<p><b>Balance Changes</b></p>
<br/>
<p><b>Reincarnation Power</b></p>
<p><b>New Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/Reincarnation_power_upgrade.png" align="middle"> Reincarnation Power 2</p>
	<p><b>Effect</b>: Unlocks the power of Reincarnations from A3 onward (R160+).</p>
<br/>
<p><b>R1 Power</b></p>
	<p><b>Old Effect</b>: Increase the production of all buildings by (25 * R)%.</p>
	<p><b>New Effect</b>: Increase the production of all buildings by (50 * R)%.</p>
	<p><b>Old Effect</b>: Increase Faction Coins find chance by +(R)% (Additive).</p>
	<p><b>New Effect</b>: Increase Faction Coins find chance by +(10 * R)% (Additive).</p>
	<p><b>Old Effect</b>: Increase Mana Regeneration by +(floor(12.5 * (((1 + 8 * R) ^ 0.5) - 1) / 2) / 10) (Additive).</p>
	<p><b>New Effect</b>: Increase Mana Regeneration by +(2 * R) (Additive).</p>
<br/>
<p><b>R70 Power</b></p>
	<p><b>Effect</b>: You gain 1 additional Research slot for each branch.</p>
	<p><b>Changed</b>: Moved to R90.</p>
<br/>
<p><b>R108 Power</b></p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on the difference of time spent as their respective faction against your most used faction in this reincarnation.</p>
	<p><b>Old Formula</b>: (0.07 * (x - y) ^ 0.7)%, where x is highest faction time and y is faction time of the Unique Building affinity.</p>
	<p><b>New Formula</b>: (0.15 * (x - y) ^ 0.75)%, where x is highest faction time and y is faction time of the Unique Building affinity.</p>
<br/>
<p><b>R120 Power</b></p>
	<p><b>Effect</b>: Increase the production of all buildings based on Reincarnations made.</p>
	<p><b>Old Formula</b>: (125 * R)%.</p>
	<p><b>New Formula</b>: (150 * R)%.</p>
<br/>
<p><b>New R170 Power</b></p>
	<p><b>Effect</b>:  Increases research budget by 3,000 in each branch.</p>
<br/>
<p><b>New R180 Power</b></p>
	<p><b>Effect</b>: Increase the production of all buildings based on Reincarnations made.</p>
	<p><b>Formula</b>: (150 * R)%.</p>
<br/>
<p><b>New R210 Power</b></p>
	<p><b>Effect</b>: Increase the production of all buildings based on Reincarnations made.</p>
	<p><b>Formula</b>: (300 * R)%.</p>
<hr>
<p><b>Faction Upgrades</b></p>
<p><b>Fairy</b></p>
<p>FR2 swapped places with FR4, FR3 swapped places with FR7, formulas changed.</p>
<p><b>FR1</b> (Pixie Dust Fertilizer)</p>
        <p><b>Effect</b>: Increase the base production of Farms by +98 and reduce the building cost multiplier.</p>
        <p><b>Old Effect</b>: Reduces cost multiplier by 0.035.</p>
        <p><b>New Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>FR2</b> (Fairy Cuisine)</p>
	<p><b>New Name</b>: Fairy Workers</p>
        <p><b>Old Effect</b>: Increase the base production of Inns by +234 and reduce the building cost multiplier.</p>
        <p><b>New Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 15,000%.</p>
<br/>
<p><b>FR3</b> (Starmetal Alloys)</p>
	<p><b>New Name</b>: Kind Hearts</p>
        <p><b>Old Effect</b>: Increase the base production of Blacksmiths by +580 and reduce the building cost multiplier.</p>
        <p><b>New Effect</b>: Increases maximum mana based on the amount of good buildings you own.</p>
        <p><b>New Formula</b>: +(1.3 * x ^ 0.7), where x is the amount of good buildings you own.</p>
<br/>
<p><b>FR4</b> (Fairy Workers)</p>
	<p><b>New Name</b>: Fairy Cuisine</p>
        <p><b>Old Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 15,000%.</p>
        <p><b>New Effect</b>: Increase the base production of Inns by +234 and reduce the building cost multiplier.</p>
        <p><b>New Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>FR7</b> (Kind Hearts)</p>
	<p><b>New Name</b>: Starmetal Alloys</p>
        <p><b>Old Effect</b>: Increases maximum mana by 1 for every 8 good buildings you own.</p>
        <p><b>New Effect</b>: Increase the base production of Blacksmiths by +580 and reduce the building cost multiplier.</p>
        <p><b>New Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>FR8</b> (Rainbow Link)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 0.3% per Farm, Inn and Blacksmith you own.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the amount of Farms, Inns and Blacksmiths you own.</p>
        <p><b>New Formula</b>: (0.75 * x ^ 0.75)%, where x is the amount of Farms, Inns and Blacksmiths you own.</p>
<br/>
<p><b>FR10</b> (Bubble Swarm)</p>
        <p><b>Old Effect</b>: Increase maximum mana based on the amount of Swarming Towers you own.</p>
        <p><b>Old Formula</b>: +(sumOfDigits(x) * 100 * x ^ 0.45), where x is the amount of Swarming Towers you own.</p>
        <p><b>New Effect</b>: Increase maximum mana based on the highest amount of Swarming Towers you own this R.</p>
        <p><b>New Formula</b>: +(x ^ 1.05), where x is the highest amount of Swarming Towers you own this R.</p>
<br/>
<p><b>FR11</b> (Pheromones)</p>
        <p><b>Old Effect</b>: Gain assistants based on time spent affiliated with Fairies in this Reincarnation (Additive).</p>
		<p><b>Old Formula</b>: +(1.5 * x ^ 0.75), where x is time spent affiliated with Fairies this R.</p>
        <p><b>New Effect</b>: Gain assistants based on time spent as Chaos in this Reincarnation (Additive).</p>
        <p><b>New Formula</b>: +(80 * x ^ 0.8), where x is time spent as Chaos this R.</p>
<br/>
<p><b>FR12</b> (Dream Catchers)</p>
        <p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration by a random amount. Grows additively every 30 minutes (starts at 0% on upgrade bought).</p>
	<p><b>Old Formula</b>: Every 30 minutes, ((current upgrade bonus) + rand(1.5 - 7.5)) (averages out to 216% per day).</p>
        <p><b>New Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Chaos spells cast in this Reincarnation.</p>
        <p><b>New Formula</b>: (1.2 * x ^ 0.8)%, where x is Chaos spells cast this R.</p>
<br/>
<p><b>Elven</b></p>
<p>EL3 swapped places with EL9, EL9's formula changed.</p>
<p><b>EL3</b> (Sylvan Treasure Frills)</p>
	<p><b>New Name</b>: Ancient Clicking Arts</p>
        <p><b>Old Effect</b>: Additively increase base clicking reward by 50% of your building production.</p>
        <p><b>New Effect</b>: Increase mana regeneration based on your total amount of clicks.</p>
        <p><b>New Formula</b>: +(2 * log10(1 + x)), where x is your Productive Clicks (Total) stat.</p>
<br/>
<p><b>EL5</b> (Elven Efficiency)</p>
        <p><b>Old Effect</b>: Increase clicking reward based on the amount of Royal Exchanges.</p>
	<p><b>Old Formula</b>: (2 * x)%, where x is Royal Exchanges made.</p>
        <p><b>New Effect</b>: Increase Royal Exchange bonus based on Faction Coins found in this game (Additive).</p>
        <p><b>New Formula</b>: +(2 * log10(1 + x) ^ 2)%, where x is faction coins found this game.</p>
<br/>
<p><b>EL9</b> (Ancient Clicking Arts)</p>
	<p><b>New Name</b>: Sylvan Treasure Frills</p>
        <p><b>Old Effect</b>: Increase mana regeneration based on your total amount of clicks.</p>
		<p><b>Old Formula</b>: +(floor(10 * log10(1 + x ^ 2)) / 10), where x is your Productive Clicks (Total) stat.</p>
        <p><b>New Effect</b>: Additively increase base clicking reward by 50% of your building production.</p>
<br/>
<p><b>EL10</b> (Wooden Dice)</p>
        <p><b>Effect</b>: When Elven Luck triggers, 100,000 automatic Tax Collections are cast.</p>
		<p><b>Old Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
        <p><b>New Effect</b>: Increase Elven Luck chance to activate and its effects based on the highest amount of Arboreal Cities you own in this reincarnation (formulas unchanged).</p>
        <p><b>New Effect</b>: Also removes 2 ascension penalties from Elven Luck.</p>
<br/>
<p><b>EL11</b> (Camouflage)</p>
        <p><b>Effect</b>: Assistants and Clicks count 1,000% more for all purposes and increase assistant production based on assistant amount.</p>
        <p><b>Old Formula</b>: (0.7 * x ^ 0.7)%, where x is assistant count.</p>
        <p><b>New Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is assistant count.</p>
<br/>
<p><b>EL12</b> (Elven Discipline)</p>
        <p><b>Effect</b>: Increase assistants additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
        <p><b>Old Formula (Additive)</b>: +(100 * ln(1 + x) ^ 1.5), where x is Faction Coins found this game.</p>
        <p><b>New Formula (Additive)</b>: +(50 * ln(1 + x) ^ 1.5), where x is Faction Coins found this game.</p>
        <p><b>Old Formula (Multiplicative)</b>: (1.45 * ln(1 + x))%, where x is Faction Coins found this game.</p>
        <p><b>New Formula (Multiplicative)</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is Faction Coins found this game.</p>
<br/>
<p><b>Angel</b></p>
<p><b>AN1</b> (Holy Bells)</p>
        <p><b>Old Effect</b>: Cathedrals also increase your mana regeneration rate.</p>
	<p><b>Old Formula</b>: +(x ^ 0.25), where x is the number of Cathedrals you own.</p>
        <p><b>New Effect</b>: Increase Mana Regeneration based on the amount of buildings you own.</p>
        <p><b>New Formula</b>: +(2 * x ^ 0.4), where x is the amount of buildings you own.</p>
<br/>
<p><b>AN2</b> (Angelic Determination)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
        <p><b>Old Formula</b>: (1.5 * x ^ 0.85)%, where x is Spells Cast (This Game) stat.</p>
        <p><b>New Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is Spells Cast (This Game) stat.</p>
<br/>
<p><b>AN3</b> (Angel Feathers)</p>
        <p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration by 40%.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance based on the amount of active spells (additive).</p>
        <p><b>New Formula</b>: +(10 * x)%, where x is the amount of active spells.</p>
<br/>
<p><b>AN4</b> (Guardian Angels)</p>
        <p><b>Old Effect</b>: Royal Castles also increase your mana production rate.</p>
	<p><b>Old Formula</b>: +(x ^ 0.3), where x is the number of Royal Castles you own.</p>
        <p><b>New Effect</b>: Spell casts count 100% more.</p>
<br/>
<p><b>AN5</b> (Angelic Wisdom)</p>
        <p><b>Old Effect</b>: Decrease the cost of all spells by 100.</p>
        <p><b>New Effect</b>: Decrease the cost of all spells by 50%.</p>
<br/>
<p><b>AN6</b> (Archangel Feathers)</p>
        <p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration by 60%.</p>
        <p><b>New Effect</b>: Multiplicatively increase Mana Regeneration by 100%.</p>
<br/>
<p><b>AN7</b> (Magical Gates)</p>
        <p><b>Old Effect</b>: Heaven's Gates also increase your mana production rate.</p>
	<p><b>Old Formula</b>: +(x ^ 0.35), where x is the number of Heaven's Gates you own.</p>
        <p><b>New Effect</b>: Increase Max Mana based on time spent as Good in this Reincarnation (additive).</p>
        <p><b>New Formula</b>: +(7 * x ^ 0.7), where x is time spent as Good (this R).</p>
<br/>
<p><b>AN9</b> (Wings of Liberty)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on Mana Regeneration.</p>
        <p><b>Old Formula</b>: (3 * x ^ 0.85)%, where x is your Mana Regeneration.</p>
        <p><b>New Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
<br/>
<p><b>AN10</b> (Heaven's Brilliance)</p>
        <p><b>Old Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. Gem Grinder and all Dragon's Breath effects are increased based on the amount of Holy Sites you own.</p>
        <p><b>New Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the highest amount of Holy Sites you own this R. Gem Grinder and all Dragon's Breath effects are increased based on the highest amount of Holy Sites you own this R (formulas unchanged).</p>
<br/>
<p><b>AN11</b> (Angelic Fortitude)</p>
        <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells' activity time in this Reincarnation.</p>
        <p><b>Old Formula</b>: (0.7 * x ^ 0.7)%, where x is the sum of all your spells' activity time this Reincarnation in seconds.</p>
        <p><b>New Formula</b>: (x ^ 0.7)%, where x is the sum of all your spells' activity time this Reincarnation in seconds.</p>
<br/>
<p><b>Goblin</b></p>
<p>GB5 swapped places with GB6, effects and formulas changed</p>
<p><b>GB1</b> (Strong Currency)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings based on the amount of Faction Coins found in this game.</p>
	<p><b>Old Formula</b>: (ln(1 + x) ^ 3)%, where x is your Faction Coins found this game.</p>
        <p><b>New Effect</b>: Gain assistants based on Faction Coins found in this game.</p>
        <p><b>New Formula</b>: +(0.5 * ln(1 + x) ^ 2.5), where x is Faction Coins found this game.</p>
<br/>
<p><b>GB2</b> (Slave Trading)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 0.75% per Slave Pen you own.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the amount of Evil buildings you own.</p>
        <p><b>New Formula</b>: (2 * x ^ 0.6)%, where x is the amount of Evil buildings you own.</p>
<br/>
<p><b>GB3</b> (Cheap Materials)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings based on the cost of a BuyMAX witch conclave.</p>
	<p><b>Old Formula</b>: (round(2 * ln(1 + x)))%, where x is the cost displayed for witch conclaves with buy set to max.</p>
        <p><b>New Effect</b>: Tax Collection is worth more seconds based on the amount of Buildings you own (additive).</p>
        <p><b>New Formula</b>: +(x ^ 0.5), where x is the amount of Buildings you own.</p>
<br/>
<p><b>GB4</b> (Black Market)</p>
        <p><b>Effect</b>: Production bonus from gems is doubled.</p>
        <p><b>Additional Effect</b>: Also increase Offline production based on the amount of Tax Collection casts in this game.</p>
        <p><b>New Formula</b>: (log10(1 + x) ^ 2)%, where x is Tax Collection casts this game.</p>
<br/>
<p><b>GB5</b> (Hobgoblin Gladiators)</p>
	<p><b>New Name</b>: Goblin Economists</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 0.75% per Orcish Arena you own.</p>
        <p><b>New Effect</b>: Mutiplicatively increase Mana Regeneration based on upgrades purchased.</p>
        <p><b>New Formula</b>: (x ^ 0.9)%, where x is upgrades purchased</p>
<br/>
<p><b>GB6</b> (Goblin Economists)</p>
	<p><b>New Name</b>: Hobgoblin Gladiators</p>
        <p><b>Old Effect</b>: Increase the production of all buildings based on upgrades purchased.</p>
	<p><b>Old Formula</b>: (x ^ 1.2)%, where x is your Upgrades Purchased (This Game) stat.</p>
        <p><b>New Effect</b>: Gems and upgrades count 200% more.</p>
<br/>
<p><b>GB8</b> (Fool's Gold)</p>
        <p><b>Old Effect</b>: Increase Faction Coin find chance based on the amount of Witch Conclaves you own.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance based on the highest amount of Witch Conclaves you own in this reincarnation (formula unchanged).</p>
<br/>
<p><b>GB10</b> (Fool's Gems)</p>
        <p><b>Old Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of Slave Markets you own.</p>
	<p><b>Old Formula</b>: (x ^ 0.5)%, where x is the amount of Slave Markets you own.</p>
        <p><b>New Effect</b>: Multiplicatively increase production bonus from Gems based on the highest amount of Slave Markets you own in this reincarnation.</p>
        <p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Slave Markets you own in this R.</p>
<br/>
<p><b>GB11</b> (Money is Magic)</p>
        <p><b>Effect</b>: Mutiplicatively increase Mana Regeneration based on the amount of Tax Collections cast in this game.</p>
        <p><b>Old Formula</b>: (2 * ln(1 + x) ^ 1.2)%, where x is Tax Collections cast this game.</p>
        <p><b>New Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is Tax Collections cast this game.</p>
<br/>
<p><b>GB12</b> (Lousy Architecture)</p>
        <p><b>Effect</b>: Increase Non-Unique buildings production based on the amount of buildings of the same tier.</p>
        <p><b>Old Effect</b>: Reduces cost multiplier by 0.02.</p>
        <p><b>New Effect</b>: Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
<br/>
<p><b>Undead</b></p>
<p>UD11 swapped places with UD12, effects and formulas changed.</p>
<p><b>UD1</b> (The Walking Dead)</p>
        <p><b>Old Effect</b>: Increase the production of Necropolises by 7,500%. Increase Faction Coin find chance based on assistants owned (Additive).</p>
	<p><b>Old Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is assistants owned.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance based on assistants owned (Additive).</p>
        <p><b>New Formula</b>: +(ln(1 + x) ^ 1.75)%, where x is assistants owned.</p>
<br/>
<p><b>UD2</b> (Deadened Muscles)</p>
        <p><b>Old Effect</b>: Increase the production of all other buildings by 1.5% per Necropolis you own.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the highest amount of Necropolises you built in this Reincarnation.</p>
        <p><b>New Formula</b>: (4 * x ^ 0.8)%, where x is the the highest amount of Necropolises you built this R.</p>
<br/>
<p><b>UD3</b> (Death Temples)</p>
        <p><b>Old Effect</b>: Dark Temples also increase your mana production rate.</p>
        <p><b>New Effect</b>: Increase Mana Regeneration based on the highest amount of Necropolises you built in this Reincarnation (formula unchanged).</p>
<br/>
<p><b>UD4</b> (Unholy Rituals)</p>
        <p><b>Effect</b>: Increase offline production based on time spent being offline in this Reincarnation.</p>
        <p><b>Old Formula</b>: (round((x / 144) ^ 0.75))%, where x is your offline time this Reincarnation in seconds.</p>
        <p><b>New Formula</b>: (0.3 * x ^ 0.7)%, where x is your offline time this Reincarnation in seconds.</p>
<br/>
<p><b>UD5</b> (Corpse Supply)</p>
        <p><b>Old Effect</b>: You gain additional assistants based on the amount of Necropolises you own.</p>
        <p><b>New Effect</b>: Gain additional assistants based on the highest amount of Necropolises you built in this Reincarnation (formula unchanged).</p>
<br/>
<p><b>UD6</b> (Plagued Buildings)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by an additional 0.75% per second of playtime in this game.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on time spent in this game.</p>
        <p><b>New Formula</b>: (0.6 * x ^ 0.7)%, where x is time spent this game.</p>
<br/>
<p><b>UD7</b> (Dead Fields)</p>
        <p><b>Old Effect</b>: Each assistant increases the production of all buildings based on the amount of Assistants and Necropolises you own.</p>
	<p><b>Old Formula</b>: (0.03 * x * y)%, where x is Assistants and y is Necropolises you own.</p>
        <p><b>New Effect</b>: Buildings count 100% more.</p>
<br/>
<p><b>UD9</b> (Undead Resilience)</p>
        <p><b>Old Effect</b>: Increases offline production by 125 times your mana regeneration rate.</p>
        <p><b>New Effect</b>: Increase offline production based on your Mana Regeneration.</p>
        <p><b>New Formula</b>: (125 * ln(1 + x) ^ 2.5)%, where x is your Mana Regeneration.</p>
<br/>
<p><b>UD10</b> (Flesh Servants)</p>
        <p><b>Old Effect</b>: Mutiplicatively increase assistants based on the amount of Flesh Workshops you own.</p>
	<p><b>Old Formula</b>: (1.25 * x ^ 0.75)%, where x is amount of Flesh Workshop owned.</p>
        <p><b>New Effect</b>: Mutiplicatively increase assistants based on the highest amount of Flesh Workshops you built in this Reincarnation.</p>
        <p><b>New Formula</b>: (1.3 * x ^ 0.7)%, where x is the highest amount of Flesh Workshops you built this R.</p>
<br/>
<p><b>UD11</b> (Zombie Apocalypse)</p>
        <p><b>New Name</b>: Eternal Servitude</p>
        <p><b>Old Effect</b>: Gain assistants based on the total amount of time spent offline in this Reincarnation (Additive).</p>
	<p><b>Old Formula</b>: +(20 * x ^ 0.9), where x is offline time this R.</p>
        <p><b>New Effect</b>: Increase Unique buildings production based on time spent in this game.</p>
        <p><b>New Formula</b>: (x ^ 0.7)%, where x is time spent this game.</p>
<br/>
<p><b>UD12</b> (Eternal Servitude)</p>
        <p><b>New Name</b>: Zombie Apocalypse</p>
        <p><b>Old Effect</b>: Increase base production of Undercity by +10,000, and then increase this effect based on time spent in this Reincarnation.</p>
	<p><b>Old Formula</b>: +(10,000 + x ^ 1.05), where x is time spent this R.</p>
        <p><b>New Effect</b>: Gain assistants based on the total amount of time spent offline in this Reincarnation (Additive).</p>
        <p><b>New Formula</b>: +(21 * x ^ 0.7), where x is offline time this R.</p>
<br/>
<p><b>Demon</b></p>
<p><b>DM1</b> (Torture Chambers)</p>
        <p><b>Old Effect</b>: Increase the production of Evil Fortresses by 5% per assistants you own.</p>
        <p><b>New Effect</b>: Increase the production of Royal Castles / Evil Fortresses / Iron Strongholds (based on your Alignment) based on the amount of assistants you own.</p>
        <p><b>New Formula</b>: (6 * ln(1 + x) ^ 3)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>DM2</b> (Devil Tyrant)</p>
        <p><b>Old Effect</b>: Increase the production of the three highest tier buildings by 0.5% per Trophy.</p>
        <p><b>New Effect</b>: The three highest building tiers count more based on time spent as Evil in this Reincarnation.</p>
        <p><b>New Formula</b>: (0.4 * x ^ 0.6)%, where x is time spent as Evil this R.</p>
<br/>
<p><b>DM3</b> (Evil Conquerors)</p>
        <p><b>Old Effect</b>: Increase the production of all other buildings by 1.5% per Evil Fortresses you own.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the highest amount of Hell Portals you built in this Reincarnation.</p>
        <p><b>New Formula</b>: (4 * x ^  0.8)%, where x is the highest amount of Hell Portals you built this R.</p>
<br/>
<p><b>DM5</b> (Demon Overseers)</p>
        <p><b>Old Effect</b>: Increase the production of the three highest tier buildings by 0.5% per Trophy you unlocked.</p>
        <p><b>New Effect</b>: Increase the production of the three highest building tiers based on the amount of trophies you unlocked.</p>
        <p><b>New Formula</b>: (x ^ 0.8)%, where x is amount of trophies unlocked.</p>
<br/>
<p><b>DM6</b> (Demonic Presence)</p>
        <p><b>Old Effect</b>: Increase the production of the two highest tier buildings by 0.2% for each Building you own.</p>
        <p><b>New Effect</b>: Increase Max Mana based on Evil spells cast in this game (Additve).</p>
        <p><b>New Formula</b>: +(6 * x ^ 0.4), where x is Evil spells cast this game.</p>
<br/>
<p><b>DM9</b> (Very Bad Guys)</p>
        <p><b>Old Effect</b>: Let Blood Frenzy target Hall of Legends and increase the production of Halls of Legends by +0.05% per trophy for each Evil Fortress and Hell Portal you own.</p>
        <p><b>New Effect</b>: Increase the production of Heaven's Gate / Hell Portals / Ancient Pyramid (based on your Alignment) based on the highest amount of Hell Portals you built in this Reincarnation.</p>
        <p><b>New Formula</b>: (4 * x ^ 0.8)%, where x is the highest amount of Hell Portals you built this R.</p>
<br/>
<p><b>DM10</b> (Abyssal Furnace)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings based on the amount of Burning Abysses you own. Higher tiers get better bonuses.</p>
	<p><b>Old Formula</b>: (0.5 * (T ^ 2) * (x ^ 0.5))%, where x is Hall of legends count, t is building tier.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the highest amount of Burning Abysses you built in this Reincarnation. Higher tiers get better bonuses.</p>
        <p><b>New Formula</b>: (0.5 * (T ^ 1.5) * (x ^ 0.5)%, where x is the highest amount of Burning Abysses you built this R , T is building tier.</p>
<br/>
<p><b>DM12</b> (Devastation)</p>
        <p><b>Effect</b>: Increase production of three highest building tiers based on mana regeneration.</p>
        <p><b>Old Formula</b>: (4.5 * ln(1 + x) ^ 4.5)%, where x is mana regeneration.</p>
        <p><b>New Formula</b>: (2.5 * ln(1 + x) ^ 2.5)%, where x is mana regeneration.</p>
<br/>
<p><b>Titan</b></p>
<p>TT3 swapped places with TT9, TT6 swapped places with TT7, effects and formulas changed.</p>
<p><b>TT1</b> (Colossal Forge)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 1% per Blacksmith you own.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the amount of buildings you own.</p>
        <p><b>New Formula</b>: (6 * x ^ 0.6)%, where x is the amount of buildings you own.</p>
<br/>
<p><b>TT2</b> (Charged Clicks)</p>
        <p><b>Old Effect</b>: Whenever you cast a spell, your click reward is increased by 250% for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
        <p><b>New Effect</b>: Multiplicatively increase Mana Regeneration based on clicks made in this game.</p>
        <p><b>New Formula</b>: (25 + 2.5 * log10(1 + x) ^ 2.5 + x ^ 0.25)%, where x is clicks made this game.</p>
<br/>
<p><b>TT3</b> (Oversized Legends)</p>
	<p><b>New Name</b>: Titan Obelisk</p>
        <p><b>Old Effect</b>: Reduce Hall of Legends building cost multiplier and increase assistants production by 1% per Hall of Legends you own.</p>
	<p><b>Old Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance based on time spent as Neutral in this Reincarnation (Additve).</p>
        <p><b>New Formula</b>: +(3 * x ^ 0.7)%, where x is time spent as Neutral this R.</p>
<br/>
<p><b>TT4</b> (Titan Drill)</p>
        <p><b>Old Effect</b>: Increases the production of Deep Mines by 250,000%</p>
        <p><b>New Effect</b>: Increase the base production of Warrior Barracks / Slave Pens / Deep Mines by +9635 and Cathedrals / Dark Temples / Monasteries by +98000 (based on your Alignment).</p>
<br/>
<p><b>TT5</b> (Charged Structures)</p>
        <p><b>Old Effect</b>: Whenever you cast a spell, your production is increased by 250% for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
        <p><b>New Effect</b>:  Increase the production of all buildings based on the amount of active spells.</p>
        <p><b>New Formula</b>: (15 * x)%, where x is active spells.</p>
<br/>
<p><b>TT6</b> (Cyclopean Strength)</p>
	<p><b>New Name</b>: Titan Sized Walls</p>
        <p><b>Old Effect</b>: Each assistant increases the production of all buildings by 0.25% per Hall of Legends you own.</p>
        <p><b>New Effect</b>: Increase Hall of Legends production based on the amount of assistants you own.</p>
        <p><b>New Formula</b>: (20 + 2.15 * ln(1 + x) ^ 2.15)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>TT7</b> (Titan Sized Walls)</p>
	<p><b>New Name</b>: Cyclopean Strength</p>
        <p><b>Old Effect</b>: Increases the production of Monasteries by 25,000%.</p>
        <p><b>New Effect</b>: Assistants count 200% more and increase their production by 200%.</p>
<br/>
<p><b>TT8</b> (Heavy Coins)</p>
        <p><b>Effect</b>: Increases Royal Exchanges production bonus by an additional 40% each.</p>
        <p><b>New Effect</b>: Also reduces Royal Exchange cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.09 instead of 1.1.</p>
<br/>
<p><b>TT9</b> (Titan Obelisk)</p>
		<p><b>New Name</b>: Oversized Legends</p>
        <p><b>Old Effect</b>: Increase the production of all other buildings by 2.25% per Ancient Pyramid you own.</p>
        <p><b>New Effect</b>: Reduce Hall of Legends building cost multiplierby 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
        <p><b>New Effect</b>: Also increases assistants production based on the amount of Hall of Legends you own. </p>
		<p><b>New Formula</b>: (6 * x ^ 0.6)%, where x is the amount of Hall of Legends you own.</p>
<br/>
<p><b>TT10</b> (Giant Market)</p>
        <p><b>Old Effect</b>: Increase Royal Exchange count based on the amount of Mountain Palaces you own.</p>
		<p><b>Old Formula</b>: (1.25 * x ^ 0.725)%, where x is amount of Mountain Palaces owned.</p>
        <p><b>New Effect</b>: Increase Royal Exchange count based on the highest amount of Mountain Palaces you built in this Reincarnation.</p>
		<p><b>New Formula</b>: (x ^ 0.7)%, where x is the highest amount of Mountain Palaces you built this R.</p>
<br/>
<p><b>TT11</b> (Titanic Authority)</p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Royal Exchanges you made.</p>
        <p><b>Old Formula</b>: (0.7 * x ^ 0.7)%, where x is amount of Royal Exchanges you made.</p>
		<p><b>New Formula</b>: (x ^ 0.6)%, where x is amount of Royal Exchanges you made.</p>
<br/>
<p><b>Druid</b></p>
<p><b>DD2</b> (Animal Companions)</p>
		<p><b>Effect</b>: You instantly attract 3 Animal assistants and more will come based on the time spent in this game.</p>
        <p><b>Old Formula</b>: +(3 + 1.75 * x ^ 0.5), where x is your Playtime (This Game) stat in <b>hours</b>.</p>
        <p><b>New Formula</b>: +(3 + 1.75 * x ^ 0.5), where x is your Playtime (This Game) stat in <b>seconds</b>.</p>
<br/>
<p><b>DD4</b> (Earthly Bond)</p>
        <p><b>Old Effect</b>: Increase maximum mana by 2.0 for each Stone Pillars you own.</p>
        <p><b>New Effect</b>: Increase maximum mana based on the highest amount of Stone Pillars you built in this Reincarnation.</p>
        <p><b>New Formula</b>: +(2 * x), where x is the highest amount of Stone Pillars you built this R.</p>
<br/>
<p><b>DD5</b> (Bardic Knowledge)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on your maximum mana.</p>
        <p><b>Old Formula</b>: (1.75 * x ^ 0.9)%, where x is your maximum mana.</p>
		<p><b>New Formula</b>: (20 * ln(1 + x) ^ 2)%, where x is your maximum mana.</p>
<br/>
<p><b>DD7</b> (Mabinogion)</p>
        <p><b>Old Effect</b>: Buildings affected by Grand Balance receive an additional bonus based on their tier, giving the best bonus to the lowest.</p>
		<p><b>Old Formula</b>: (3.75 * (4.25 * (12 - T)) ^ t)%, where T is building tier and t is Grand Balance tier (1 if tiers not unlocked).</p>
        <p><b>New Effect</b>: Increase Non-Unique buildings production based on their tier, giving the best bonus to the lowest.</p>
        <p><b>New Formula</b>: (12 * 2 ^ (12 - T))%, where T is building tier.</p>
<br/>
<p><b>DD8</b> (Earthly Soul)</p>
        <p><b>Old Effect</b>: Stone Pillars also increase your mana regeneration rate.</p>
		<p><b>Old Formula</b>: +(x ^ 0.25), where x is Stone Pillars.</p>
        <p><b>New Effect</b>: Increase mana regeneration based on the highest amount of Stone Pillars you built in this Reincarnation.</p>
        <p><b>New Formula</b>: +(x ^ 0.25), where x is the highest amount of Stone Pillars you built this R.</p>
<br/>
<p><b>DD9</b> (Building Jungle)</p>
        <p><b>Old Effect</b>: Increase the production of each building by 1.75% per building of the same type.</p>
        <p><b>New Effect</b>: Increase the production of each building based on the amount of buildings of the same type.</p>
        <p><b>New Formula</b>: (1.5  * x ^ 0.9)%, where x is the amount of buildings of the same type.</p>
<br/>
<p><b>DD10</b> (Building Vines)</p>
        <p><b>Old Effect</b>: Increase Non-Unique building count based on the amount of Ziggurats you own.</p>
	<p><b>Old Formula</b>: (1.5 * x ^ 0.5)%, where x is the amount of Ziggurats you own.</p>
        <p><b>New Effect</b>: Increase spell duration based on the highest amount of Ziggurats you built in this Reincarnation.</p>
        <p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the highest amount of Ziggurats you built this R.</p>
<br/>
<p><b>Faceless</b></p>
<p><b>FC1</b> (Territorial Expanse)</p>
        <p><b>Old Effect</b>: Labyrinth production is increased by 5,000% per assistant you own.</p>
        <p><b>New Effect</b>: Increase the production of Citadels / Necropolises / Labyrinths (based on your Alignment) based on the amount of assistants you own.</p>
        <p><b>New Formula</b>: (5 * ln(1 + x) ^ 2.5)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>FC2</b> (Evolutive Mutation)</p>
        <p><b>Old Effect</b>: Increase Faction Coin find chance based on the amount of Labyrinths you own.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance based on the highest amount of Labyrinths you built in this Reincarnation (formula unchanged).</p>
<br/>
<p><b>FC3</b> (Deep Memory)</p>
        <p><b>Old Effect</b>: Increases production based on the time of your longest game session in this Reincarnation.</p>
	<p><b>Old Formula</b>: floor(35 * x ^ 0.85)%, where x is your Playtime (Longest Session) stat in hours.</p>
        <p><b>New Effect</b>: Multiplicatively increase assistants based on the time spent on your longest game session in this Reincarnation.</p>
        <p><b>New Formula</b>: (0.3 * x ^ 0.7)%, where x is your Playtime (Longest Session) stat this R.</p>
<br/>
<p><b>FC4</b> (Gold Synthesis)</p>
        <p><b>Old Effect</b>: Increases the production of all buildings by 1.5% per Alchemist Lab you own.</p>
        <p><b>New Effect</b>: Increase the production of Neutral buildings based on the amount of gold (coins) owned.</p>
        <p><b>New Formula</b>: (0.2 * log10(1 + x) ^ 2)%, where x is the amount of gold (coins) owned.</p>
<br/>
<p><b>FC7</b> (Magical Treasure)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of assistants you own.</p>
        <p><b>Old Formula</b>: +(0.75 * x ^ 0.75), where x is the amount of assistants you own.</p>
        <p><b>New Formula</b>: +(2.5 * x  ^ 0.5), where x is the amount of assistants you own.</p>
<br/>
<p><b>FC8</b> (Abominations)</p>
        <p><b>Old Effect</b>: Increase the production of assistants by 300% per active spell.</p>
        <p><b>New Effect</b>: Increase the production of assistants based on the amount of active spells.</p>
        <p><b>New Formula</b>: (15 * x)%, where x is the amount of active spells.</p>
<br/>
<p><b>FC9</b> (Hive Mind)</p>
        <p><b>Effect</b>: Increases production based on total time spent affiliated with Faceless. Persists through Reincarnations.</p>
        <p><b>Old Formula</b>: (0.1 * x ^ 0.75)%, where x is total time spent as Faceless in seconds (all time).</p>
        <p><b>New Formula</b>: (x ^ 0.5)%, where x is total time spent as Faceless in seconds (all time).</p>
<br/>
<p><b>FC10</b> (Primal Knowledge)</p>
        <p><b>Old Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of Forbidden Libraries you own. Grows over time and resets every 15 minutes.</p>
	<p><b>Old Formula</b>: (mod(t , 900) / 60 * x ^ 0.4)%, where t is time spent this game, x is Forbidden Libraries count.</p>
        <p><b>New Effect</b>: Multiplicatively increase Faction Coin find chance based on the highest amount of Forbidden Libraries you built in this Reincarnation. Grows over time and resets every 15 minutes.</p>
        <p><b>New Formula</b>: (mod(t , 900) / 75 * x ^ 0.4)%, where t is time spent this game, x is the highest amount of Forbidden Libraries you built this R.</p>
<br/>
<p><b>FC11</b> (Forbidden Language)</p>
        <p><b>Effect</b>: Increase spell durations based on the amount of Reincarnations made.</p>
        <p><b>Old Formula</b>: (x)%, where x is Reincarnations made.</p>
        <p><b>New Formula</b>: (0.8 * x ^ 0.8)%, where x is Reincarnations made.</p>
 <br/>
<p><b>FC12</b> (Dimension Door)</p>
        <p><b>Old Effect</b>: Increase Unique Building production based on highest amount of Maximum Mana you had in this Reincarnation.</p>
	<p><b>Old Formula</b> (0.1 * x ^ 0.65)%, where x is highest max mana this R.:</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the highest amount of Maximum Mana you had in this Reincarnation.</p>
        <p><b>New Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is highest max mana this R.</p>
<br/>
<p><b>Dwarven</b></p>
<p><b>DN1</b> (Dwarven Ale)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 0.8% per Inn you own.</p>
        <p><b>New Effect</b>: Increase Faction Coin find chance based on the amount of Blacksmiths you own (Additive).</p>
        <p><b>New Formula</b>: +(2 * x ^ 0.5)%, where x is the amount of Blacksmiths you own.</p>
<br/>
<p><b>DN2</b> (Expert Masonry)</p>
        <p><b>Effect</b>: Reduce all building cost multipliers.</p>
        <p><b>Old Effect</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
        <p><b>New Effect</b>: Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
<br/>
<p><b>DN4</b> (Underground Citadels)</p>
        <p><b>Old Effect</b>: Increase the production of Citadels based on the gems you own.</p>
	<p><b>Old Formula</b>: (round(210 * log10(1 + x) ^ 1.5)), where x is the amount of Gems you own.</p>
        <p><b>New Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Gems you own.</p>
        <p><b>New Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is the amount of Gems you own.</p>
<br/>
<p><b>DN6</b> (Bearded Assistants)</p>
        <p><b>Effect</b>: Increase the production of assistants based on how long their beard is (it grows over time!).</p>
        <p><b>Old Formula</b>: (0.03 * x ^ 0.7)%, where x is your Playtime (This Game) stat in seconds.</p>
        <p><b>New Formula</b>: (x ^ 0.7)%, where x is your Playtime (This Game) stat in seconds.</p>
<br/>
<p><b>DN8</b> (Magic Resistance)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings based on mana regeneration rate.</p>
	<p><b>Old Formula</b>: (80 * x ^ 0.8)%, where x is your mana regeneration.</p>
        <p><b>New Effect</b>: Reduce Excavation cost multiplier.</p>
        <p><b>New Formula</b>: Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.18 instead of 1.2.</p>
<br/>
<p><b>DN9</b> (Overwatch)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings based on the duration of your longest spell.</p>
	<p><b>Old Formula</b>: (500 + 35 * x ^ 0.35)%, where x is the duration of your longest spell.</p>
        <p><b>New Effect</b>: Increase Maximum Mana based on the duration of your longest spell (Additive).</p>
        <p><b>New Formula</b>: +(50 + 35 * x ^ 0.7), where x is the duration of your longest spell.</p>
<br/>
<p><b>DN10</b> (Solidity)</p>
        <p><b>Old Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of High Bastion you own.</p>
        <p><b>New Effect</b>: Multiplicatively increase production bonus from Gems based on the highest amount of High Bastions you built in this Reincarnation (formula unchanged).</p>
<br/>
<p><b>Drow</b></p>
<p><b>DW2</b> (Honor Among Killers)</p>
        <p><b>Effect</b>: Increase Faction Coin find chance based on the amount of assistants you own (Additive).</p>
        <p><b>Old Formula</b>: +(100 * x ^ 0.5)%, where x is the amount of assistants you own.</p>
        <p><b>New Formula</b>: +(100 + 0.5 * x ^ 0.5)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>DW3</b> (Shadow Advance)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 750% only when you have no spells active. Also further increases offline production by the same amount.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on Max Mana.</p>
        <p><b>New Formula</b>: (2 * log10(1 + x) ^ 2))%, where x is your Max Mana.</p>
<br/>
<p><b>DW5</b> (Blood Sacrifices)</p>
        <p><b>Old Effect</b>: Increase the production of all buildings by 3% per Dark Temple you own.</p>
        <p><b>New Effect</b>: Increase the production of all buildings based on the highest amount of Dark Temples you built in this Reincarnation.</p>
        <p><b>New Formula</b>: (3 * x)%, where x is the highest amount of Dark Temples you built this R.</p>
<br/>
<p><b>DW6</b> (Blackmail)</p>
        <p><b>Effect</b>: Reduce the cost multiplier for Royal Exchanges.</p>
        <p><b>Old Effect</b>: Reduces Royal Exchange cost multiplier by 0.025; with no other reductions applying, the multiplier will be 1.075 instead of 1.1.</p>
        <p><b>New Effect</b>: Reduces Royal Exchange cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.08 instead of 1.1.</p>
<br/>
<p><b>DW7</b> (Spider Gods)</p>
        <p><b>Old Effect</b>: Increase the production of Dark Temples by 8% for each other building you own.</p>
        <p><b>New Effect</b>: Mutiplicatively increase assistants based on the amount of buildings you own.</p>
        <p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of buildings you own.</p>
<br/>
<p><b>DW8</b> (Professional Assassins)</p>
        <p><b>Old Effect</b>: Increase the production of assistants based on the amount of royal exchanges you purchased.</p>
	<p><b>Old Formula</b>: round(9 * x * 0.9)%, where x is Royal Exchanges made.</p>
        <p><b>New Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of Royal Exchanges you made.</p>
        <p><b>New Formula</b>: (0.6 * x ^ 0.6)%, where x is Royal Exchanges made.</p>
<br/>
<p><b>DW10</b> (Spider Clerics)</p>
        <p><b>Old Effect</b>: Increase Royal Exchange bonus based on Brothel amount (Additive).</p>
        <p><b>New Effect</b>: Increase Royal Exchange bonus based on the highest amount of Brothels you built in this Reincarnation (Additive) (formula unchanged).</p>
<br/>
<p><b>DW12</b> (Crystal Servants)</p>
        <p><b>Effect</b>: Multiplicatively gain assistants based on current gem amount.</p>
        <p><b>Old Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is your current amount of gems.</p>
        <p><b>New Formula</b>: (1.75 * log10(1 + x) ^ 1.75)%, where x is your current amount of gems.</p>
<br/>
<p><b>Dragon</b></p>
<p><b>DG10</b> (Fang Food)</p>
        <p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of Dragon Pastures you own.</p>
        <p><b>New Effect</b>: Multiplicatively increase Mana Regeneration based on the highest amount of Dragon Pastures you built in this Reincarnation (formula unchanged).</p>
<br/>
<p><b>DG12</b> (Draconic Supremacy)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on your maximum mana.</p>
		<p><b>Old Formula</b>: (0.6 * x ^ 0.45)%, where x is your maximum mana.</p>
        <p><b>New Formula</b>: (20 * ln(1 + x) ^ 2)%, where x is your maximum mana.</p>
<br/>
<p><b>Djinn</b></p>
<p><b>DJ7</b> (Wishing Well)</p>
        <p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of assistants you own.</p>
	<p><b>Old Formula</b>: (0.05 * x ^ 0.35)%, where x is the amount of assistants you own.</p>
        <p><b>New Formula</b>: (0.03 * x ^ 0.3)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>DJ10</b> (Wishes Come True)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on Limited Wish activity time in this Reincarnation.</p>
	<p><b>Old Formula</b>: (0.35 * x ^ 0.75)%, where x is Limited Wish activity time this Reincarnation.</p>
        <p><b>New Formula</b>: (0.3 * x ^ 0.7)%, where x is Limited Wish activity time this Reincarnation.</p>
<br/>
<p><b>Makers</b></p>
<p><b>MK6</b> (Art of Commerce)</p>
        <p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on their quantity.</p>
	<p><b>Old Formula</b>: (0.2 * x ^ 0.65)%, where x is Royal Exchanges made.</p>
        <p><b>New Formula</b>: (0.2 * x ^ 0.6)%, where x is Royal Exchanges made.</p>
<br/>
<p><b>MK10</b> (Valuable Antiquity)</p>
        <p><b>Effect</b>: Artifacts count more based on time spent in this Reincarnation.</p>
	<p><b>Old Formula</b>: (0.45 * x ^ 0.45)%, where x is time spent this R in seconds.</p>
        <p><b>New Formula</b>: (0.4 * x ^ 0.4)%, where x is time spent this R in seconds.</p>
<hr>
<p><b>Unions</b></p>
<p><b>Undead Union</b></p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
	<p><b>Old Formula</b>: (100 * ln(1 + x) ^ 2.25)%, where x is offline bonus multiplier.</p>
        <p><b>New Formula</b>: (300 * ln(1 + x) ^ 3)%, where x is offline bonus multiplier.</p>
<br/>
<p><b>Demon Union</b></p>
        <p><b>Old Effect</b>: 1% of all Non-Evil spells cast in this game count as Evil.</p>
	<p><b>New Effect</b>: A fraction of Non-Evil spells cast in this game count as Evil.</p>
        <p><b>New Formula</b>: (0.01 * x ^ 0.8)%, where x is Non-Evil spells cast this game.</p>
<br/>
<p><b>Faceless Union</b></p>
        <p><b>Effect</b>: Increase assistants additively based on amount of time spent as a random faction. Updates every 3 minutes.</p>
	<p><b>Old Formula</b>: +(60 * x ^ 0.6), where x is a random faction's playtime across all Rs in seconds.</p>
        <p><b>New Formula</b>: +(65 * x ^ 0.5), where x is a random faction's playtime across all Rs in seconds.</p>
<hr>
<p><b>Spells and Spell Upgrades</b></p>
<p><b>Lightning Strike</b> (Titans)</p>
	<p><b>Cost reduced</b>: From 800 mana down to 600 mana.</p>
	<p><b>Duration reduced</b>: From 20 seconds down to 10 seconds.</p>
	<p><b>Old Effect</b>: The production of a random building is multiplied by 300% for each Iron Stronghold.</p>
	<p><b>New Effect</b>: The production of a random building is multiplied by 500% for each Iron Stronghold.</p>
	<p><b>Old Effect</b>: Also grants Faction Coins based on your current amount of gems.<p>
	<p><b>Old Formula</b>: round(1.5 * ln(1 + x) ^ 3) where x is your current amount of gems.</p>
	<p><b>New Effect</b>: Also multiplicatively increase Faction Coins find chance based on your current amount of gems.</p>
	<p><b>New Formula</b>: (10 + log10(1 + x) ^ 2) where x is your current amount of gems.</p>
<br/>
<p><b>Share Benefits</b> (Good Mercenaries)</p>
	<p><b>Duration reduced</b>: Now fixed at 20 seconds.</p>
        <p><b>Effect</b>: Increases the production of all buildings based on this spell tier level.</p>
	<p><b>Old Formula</b>: (((2.20 ^ T) - 1) * 100)%, where T is tier.</p>
	<p><b>New Formula</b>: ((((1 + 0.01 * (120 + 1.25 * ln(1 + 90 + x) ^ 1.25)) ^ T) - 1) * 100)%, where x is tax collection seconds and T is the Share Benefits tier.</p>
        <p><b>New Effect</b>: Now drains an amount of mana equal to its current cost every second</p>
<br/>
<p><b>Reap Interests</b> (Evil Mercenaries)</p>
        <p><b>Effect</b>: Additional casts of Reap Interests multiplicatively increase its seconds worth of production.</p>
	<p><b>Old Formula</b>: *(120000 * log10(8 + 0.125 * x)), where x is amount of Tax Collection / Reap Interests casts.</p>
	<p><b>New Formula</b>: *(50000 * log10(8 + 0.1 * x)), where x is amount of Tax Collection / Reap Interests casts.</p>
<br/>
<p><b>Temporal Flux</b> (Order Alignment)</p>
        <p><b>Effect</b>: Increase Unique building production by time spent this game.</p>
	<p><b>Old Formula</b>: (3.5 * (x / 60) ^ 0.825)%, where x is time spent this game in seconds.</p>
	<p><b>New Formula</b>: (3.75 * (x / 60) ^ 0.825)%, where x is time spent this game in seconds.</p>
	<p><b>Note</b>: Same 1/10 and 1/100 ratio is kept for other Temporal Flux effects</p>
<br/>
<p><b>All Creation</b> (Balance Alignment)</p>
        <p><b>Effect</b>: Also multiplicatively increase Faction Coin find chance based on your mana regeneration rate.</p>
	<p><b>Old Formula</b>: (0.15 * ln(1 + x) ^ 3.5 + 0.9 * x ^ 0.27)%, where x is mana regeneration.</p>
	<p><b>New Formula</b>: (5 * ln(1 + x) ^ 2.5 + 15 * x ^ 0.15)%, where x is mana regeneration.</p>
<br/>
<p><b>Spell Tiers</b></p>
	<p><b>Effect</b>: Increase Offline Production based on mana statistics.</p>
	<p><b>Old Formula</b>: ((m + 100 * r) ^ (1 + 0.15 * T))%, where m is Maximum Mana, r is Mana Regeneration, T is tier.</p>
	<p><b>New Formula</b>: ((m + r) ^ (1 + 0.05 * T))%, where m is Maximum Mana, r is Mana Regeneration, T is tier.</p>
<br/>
<p><b>Lightning Storm</b> (Titans Spell Upgrade)</p>
	<p><b>Old Effect</b>: Increase Lightning Strike multiplier from 300% to 400% per Iron Stronghold.</p>
	<p><b>New Effect</b>: Increase Lightning Strike multiplier from 500% to 750% per Iron Stronghold.</p>
<hr>
<p><b>Challenges</b></p>
<p><b>Elven</b></p>
<p><b>Elven Challenge 2</b> (Light Collector)</p>
	<p><b>Old Effect</b>: Increase Holy Light power by 10%.</p>
	<p><b>New Effect</b>: Autoclicks once per second.</p>
<br/>
<p><b>Angel</b></p>
<p><b>Angel Challenge 3</b> (Nephilim's Blessing)</p>
	<p><b>Old Effect</b>: Halls of Legends benefit from any Certificate, Validation, Affirmation or Proclamation upgrade.</p>
	<p><b>New Effect</b>: Increase the production of all Unique buildings based on your Mana regeneration. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is your mana regeneration.</p>
<br/>
<p><b>Goblin</b></p>
<p><b>Goblin Challenge 1</b> (Discount Season)</p>
	<p><b>Effect</b>: Green Fingers Discount triggers every 2 minutes instead.</p>
	<p><b>New Effect</b>: Green Fingers Discount now also casts 10 Tax Collections upon triggering.</p>
	<p><b>Note</b>: Tax Collections cast this way will not trigger upgrades such as GB7.</p>
<br/>
<p><b>Goblin Challenge 2</b> (Elite Warriors)</p>
	<p><b>Old Challenge</b>: Buy over 250 upgrades and 17,000 buildings.</p>
	<p><b>New Challenge</b>: Buy over 250 upgrades and 15,000 buildings.</p>
	<p><b>Old Effect</b>: 10% of your purchased upgrades are added to your total trophy count for Hellfire Blast and Hall of Legends purposes.</p>
	<p><b>New Effect</b>: 25% of your purchased upgrades are added to your total trophy count for Hellfire Blast and Hall of Legends purposes.</p>
<br/>
<p><b>Undead</b></p>
<p><b>Undead Challenge 2</b> (Experienced Helpers)</p>
	<p><b>Old Effect</b>: Assistant production is increased by 10%.</p>
	<p><b>New Effect</b>: Assistant production is increased by 10%. Does not suffer from Ascension penalties.</p>
<br/>
<p><b>Demon</b></p>
<p><b>Demon Challenge 1</b> (Trophy Collectors)</p>
	<p><b>Old Effect</b>: Reduce all Heritage costs, except for the Mercenary Badge, based on the percentage of trophies unlocked.</p>
	<p><b>Old Formula</b>: (1 - (x / y))%, where x is your current amount of unlocked trophies, y is the total amount of trophies (900 trophies for v4.0.0).</p>
	<p><b>New Effect</b>: Increase the production of all buildings and Faction Coin find chance based on the amount of upgrades purchased. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: (x)% and +(x)%, where x is the amount of upgrades purchased.</p>
<br/>
<p><b>Demon Challenge 3</b> (Passage to Tartarus)</p>
	<p><b>Old Effect</b>: Increase the production of all buildings by 0.1% per trophy you have unlocked.</p>
	<p><b>New Effect</b>: Increase the production of Non-Unique buildings based on the amount of unlocked trophies. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: (0.8 * x ^ 0.8 )%, where x is the amount of unlocked trophies.</p>
<br/>
<p><b>Titan</b></p>
<p><b>Titan Challenge 2</b> (Harmony of Thoughts)</p>
	<p><b>Old Effect</b>: Faceless' Hive Mind playtime is increased by 10% of the playtime of all other factions.</p>
	<p><b>New Effect</b>: Increases the production of buildings based on time spent not playing as Faceless in this Reincarnation. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: (x ^ 0.7)%, where x is time spent not playing as Faceless this R.</p>
<br/>
<p><b>Titan Challenge 3</b> (Balanced Economy)</p>
	<p><b>Old Challenge</b>: Generate 1 B (1E9) Faction Coins with the Lightning Strike spell.</p>
	<p><b>New Challenge</b>: Cast 80 Tax Collections within the active duration of a single Lightning Strike.</p>
<br/>
<p><b>Titan Challenge 4</b> (Storm of Wealth)</p>
	<p><b>Old Effect</b>: Every 5 minutes you automatically generate Faction Coins based on Lightning Strike's Faction Coins production.</p>
	<p><b>Old Formula</b>: round(0.05 * x), where x is the amount of Faction coins generated from a single Lightning Strike.</p>
	<p><b>New Effect</b>: Increases production of all buildings based on Lightning Strike casts in this Reincarnation. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: (15 * x ^ 0.5)%, where x is Lightning Strike casts this R.</p>
<br/>
<p><b>Thunderstorm</b> (Titan Challenge Spell Reward)</p>
	<p><b>Old Effect</b>: Lightning Strike now grants more Faction Coins based on your Faction Coin find chance.</p>
	<p><b>Old Formula</b>: round(x ^ 1.05), where x is your current Faction Coins find chance.</p>
	<p><b>New Effect</b>: Faction Coin find chance from Lightning Strike is multiplied by the tier of Lightning Strike's target building.</p>
	<p><b>Note</b>: Faction Coin find chance is multiplied by the sum of buildings' tiers if you have C375 and/or Titan Perk 4.</p>
<br/>
<p><b>Druid</b></p>
<p><b>Druid Challenge 1</b> (Silent Assistance)</p>
	<p><b>Old Effect</b>: Animal Companions work faster.</p>
	<p><b>New Effect</b>: Gain assistants based on time spent in this game.</p>
	<p><b>New Formula</b>: +(0.7 * x ^ 0.7), where x is time spent this game.</p>
<br/>
<p><b>Druid Challenge 2</b> (Balanced Current)</p>
	<p><b>Old Challenge</b>: Have exactly 1,600 of each building types for 16 full Grand Balance casts in this game.</p>
	<p><b>New Challenge</b>: Have exactly 1,500 of each building types for 15 full Grand Balance casts in this game.</p>
<br/>
<p><b>Druid Challenge 4</b> (Overflowing Magic)</p>
	<p><b>Old Effect</b>: Increase Non-Unique buildings production based on the duration of your longest spell. Ascension penalty reduces based on time this Reincarnation.</p>
	<p><b>Old Formula</b>: (75 * x ^ 0.75)%, where x is the duration of your longest spell.</p>
	<p><b>New Effect</b>: Increase Non-Unique buildings production based on the duration of your longest spell and buildings' tier. Gives the best bonus to the lowest tier. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: ((7 * x ^ 0.7) * (12 - T))%, where x is the duration of your longest spell, T is building tier.</p>
<br/>
<p><b>Faceless</b></p>
<p><b>Faceless Challenge 1</b> (Recruitment)</p>
	<p><b>Old Challenge</b>: Buy all the Faceless upgrades and have no assistants except from Mitosis.</p>
	<p><b>New Challenge</b>: Have at least 125 assistants within 5 minutes of a new game.</p>
<br/>
<p><b>Faceless Challenge 3</b> (Cyclopean Army)</p>
	<p><b>Old Effect</b>: Gain extra assistants based on your Royal Exchange bonus.</p>
	<p><b>Old Formula</b>: +(floor(2 * x ^ 0.5)), where x is your royal exchange bonus.</p>
	<p><b>New Effect</b>: Multiplicatively increase assistants based on your royal exchange bonus.</p>
	<p><b>New Formula</b>: (0.45 * x ^ 0.45)%, where x is your royal exchange bonus.</p>
<br/>
<p><b>Faceless Challenge 4</b> (Omnipresence)</p>
	<p><b>Old Challenge</b>: Get Hive Mind bonus to at least 1,890%.</p>
	<p><b>New Challenge</b>: Get Hive Mind bonus to at least 500%.</p>
	<p><b>Old Effect</b>: All factions receive a bonus based on your Hive Mind bonus.</p>
	<p><b>Old Formula</b>: (0.05 * x)%, where x is current Hive Mind bonus.</p>
	<p><b>New Effect</b>: All factions receive 5% of your Hive Mind bonus. Does not suffer from Ascension penalties.</p>
<br/>
<p><b>Dwarven</b></p>
<p><b>Dwarven Challenge 2</b> (Biased Architecture)</p>
	<p><b>Old Challenge</b>: Build 2,750 Inns within 2 minutes of a new game.</p>
	<p><b>New Challenge</b>: Build 2,250 Inns within 2 minutes of a new game.</p>
	<p><b>Old Effect</b>: Reduce Inn and Blacksmith cost multipliers.</p>
	<p><b>New Effect</b>: Reduce Farms, Inn and Blacksmith cost multipliers.</p>
	<p><b>Effect</b>: Reduces cost multipliers by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
<br/>
<p><b>Dwarven Challenge 3</b> (Rich Miners)</p>
	<p><b>Old Effect</b>: Increase your Faction Coin find chance by +100% for each active spell.</p>
	<p><b>New Effect</b>: Increase your Faction Coin find chance based on the amount of active spells.</p>
	<p><b>New formula </b>: +(20 * x)%, where x is the amount of active spells.</p>
	<p><b>New Effect</b>: Also multiplicatively increase Faction Coin find chance by 25%.</p>
<br/>
<p><b>Dwarven Challenge 4</b> (Paladins)</p>
	<p><b>Old Challenge</b>: Have at least 3,500 Knights Jousts and as many Wizard Towers.</p>
	<p><b>New Challenge</b>: Have at least 3,000 Knights Jousts and as many Wizard Towers.</p>
<br/>
<p><b>Drow</b></p>
<p><b>Drow Challenge 1</b> (Organized Crime)</p>
	<p><b>Old Effect</b>: Increase Royal Exchange bonus by +0.025% per trophy you own.</p>
	<p><b>New Effect</b>: Increase Royal Exchange bonus based on the amount of unlocked trophies.</p>
	<p><b>New formula </b>: +(0.2 * x ^ 0.8)%, where x is the amount of unlocked trophies..</p>
<br/>
<p><b>Drow Challenge 2</b> (Dark Elegance)</p>
	<p><b>Old Challenge</b>: Build 2,000 Dark Temples.</p>
	<p><b>New Challenge</b>: Build 1,750 Dark Temples.</p>
	<p><b>Old Effect</b>: Increase the production of all buildings based on Faction Coins found this game.</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on Faction Coins found this game. Does not suffer from Ascension penalties (formula unchanged).</p>
<br/>
<p><b>Drow Challenge 3</b> (Sorcerer's Pact)</p>
	<p><b>Old Effect</b>: Online Time (This game) is added to Offline Time (This game).</p>
	<p><b>New Effect</b>: Increases Offline Production based on time spent in this game. Does not suffer from Ascension penalties.</p>
	<p><b>New Formula</b>: (x ^ 0.7)%, where x is time spent this game.</p>
<br/>
<p><b>Drow Challenge 4</b> (Trained Assassins)</p>
	<p><b>Old Challenge</b>: Cast Call to Arms with at least 35,000 buildings.</p>
	<p><b>New Challenge</b>: Cast Call to Arms with at least 30,000 buildings.</p>
<br/>
<p><b>Dragon</b></p>
<p><b>Dragon Challenge 1</b> (Sky Monarch)</p>
	<p><b>Old Challenge</b>: Have at least 7,200 Halls of Legends.</p>
	<p><b>New Challenge</b>: Have at least 6,500 Halls of Legends.</p>
	<p><b>Removed Effect</b>: No longer boosts Titan Drill and Titan Sized Walls upgrade strength.</p>
<br/>
<p><b>Dragon Challenge 3</b> (Serpent Queller)</p>
	<p><b>Removed Effect</b>: No longer increases the bonus and removes an ascension penalty from Deep Memory.</p>
<br/>
<p><b>Dragon Challenge 6</b> (Dracomet Vault)</p>
	<p><b>Old Challenge</b>: Gather at least 2.5e18 faction coins, 1e141 diamond coins, 120,000 buildings, 2e10 mana produced, 7,500 excavations, 6,000 assistants, 300,000 max mana and 175,000 mana regeneration.</p>
	<p><b>New Challenge</b>: Gather at least 2.5e18 faction coins, 1e141 diamond coins, 90,000 buildings, 2e10 mana produced, 7,500 excavations, 6,000 assistants, 300,000 max mana and 175,000 mana regeneration.</p>
	<p><b>Old Effect</b>: Production bonus from Gems is multiplicatively increased over time based on the amount of artifacts you own. Resets on Abdications.</p>
	<p><b>Old Formula</b>: (0.01 * x * (t / 60) ^ 0.7)%, where x is artfiacts found and t is time this game in seconds.</p>
	<p><b>New Effect</b>: Production bonus from Gems is additively increased over time based on the amount of artifacts you own. Resets on Abdications.</p>
	<p><b>New Formula</b>: +(x ^ 0.8 * 0.8 * (t / 60) ^ 0.8)%, where x is artfiacts found and t is time this game in seconds.</p>
<br/>
<p><b>Archon</b></p>
<p><b>Archon Challenge 1</b> (God's Plan)</p>
	<p><b>Old Challenge</b>: Have a Call to Arms bonus of at least 10 M (1e7)% and at least 250,000 Good buildings.</p>
	<p><b>New Challenge</b>: Have a Call to Arms bonus of at least 10 M (1e7)% and at least 200,000 Good buildings.</p>
<br/>
<p><b>Archon Challenge 2</b> (An Untimely Death)</p>
	<p><b>Old Challenge</b>: Have an Offline Bonus of at least 300 No (3e32)% while also having at least 4.5 B (4.5e9) assistants.</p>
	<p><b>New Challenge</b>: Have an Offline Bonus of at least 10 Sp (1e25)% while also having at least 100 B (1e11) assistants.</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on Offline Bonus.</p>
	<p><b>Old Formula</b>: (2 * log10(1 + x) ^ 1.75)%, where x is offline bonus multiplier.</p>
	<p><b>New Formula</b>: (2 * log10(1 + x) ^ 2)%, where x is offline bonus multiplier.</p>
<br/>
<p><b>Archon Challenge 4</b> (Time Merge)</p>
	<p><b>Old Challenge</b>: Have a Temporal Flux bonus of at least 54,321%.</p>
	<p><b>New Challenge</b>: Have a Temporal Flux bonus of at least 43,210%.</p>
<br/>
<p><b>Archon Challenge 5</b> (Power Overwhelming)</p>
	<p><b>Old Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 350% bonus.</p>
	<p><b>New Challenge</b>: Have a Precognition duration of at least 1 day, with a minimum of 315% bonus.</p>
<br/>
<p><b>Djinn</b></p>
<p><b>Djinn Challenge 1</b> (Miniature Lamps)</p>
	<p><b>Old Challenge</b>: Reach 185,000 Enchanted Fields within 2 minutes of a new game.</p>
	<p><b>New Challenge</b>: Reach 50,000 Enchanted Fields within 2 minutes of a new game.</p>
	<p><b>Effect</b>: Fairy Chanting produces Limited Wish casts every second based on maximum mana. Casts provided increase progressively over Fairy Chanting duration.</p>
	<p><b>Old Formula</b>: ((x ^ 0.4) * T * y / 10,000)%, where x is maximum mana, T is Fairy Chanting tier and y is Fairy Chanting runtime in seconds.</p>
	<p><b>New Formula</b>: ((x ^ 0.5) * T * y / 2,000)%, where x is maximum mana, T is Fairy Chanting tier and y is Fairy Chanting runtime in seconds.</p>
<br/>
<p><b>Djinn Challenge 2</b> (Ifrit Ignition)</p>
	<p><b>Effect</b>: Limited Wish casts count more based on Hellfire Blast casts in this game.</p>
	<p><b>Old Formula</b>: (0.78 * x ^ 0.78)%, where x is Hellfire Blast casts this game.</p>
	<p><b>New Formula</b>: (0.8 * x ^ 0.8)%, where x is Hellfire Blast casts this game.</p>
	<p><b>Effect</b>: Each time you cast an Evil spell, you gain additional casts based on the amount of trophies you have.</p>
	<p><b>Old Formula</b>: +(x ^ 0.65), where x is amount of trophies.</p>
	<p><b>New Formula</b>: +(x ^ 0.7), where x is amount of trophies.</p>
	<p><b>Note </b>: Applies only for real evil spells. Casts are added directly to the spell’s casts count and does not trigger upgrades such as GB7.</p>
<br/>
<p><b>Djinn Challenge 3</b> (Identity Shaper)</p>
	<p><b>Old Challenge</b>: Have at least 100 B (1e11) base assistants within 5 minutes of a new game.</p>
	<p><b>New Challenge</b>: Have at least 2 B (2e9) base assistants within 5 minutes of a new game.</p>
<br/>
<p><b>Djinn Challenge 4</b> (Worldly Desires)</p>
	<p><b>Old Challenge</b>: Have a spell duration of at least 275 Days.</p>
	<p><b>New Challenge</b>: Have a spell duration of at least 225 Days.</p>
<br/>
<p><b>Makers</b></p>
<p><b>Makers Challenge 1</b> (Seed of Life)</p>
	<p><b>Old Effect</b>: Gain x5 Faction Coins from any source when they match your Faction, Bloodline or Set.</p>
	<p><b>Old Formula</b>: *(5 ^ a), where a is number of faction/bloodline/set matches.</p>
	<p><b>New Effect</b>: Gain x8 Faction Coins from any source when they match your Faction, Bloodline or Set.</p>
	<p><b>New Formula</b>: *(8 ^ a), where a is number of faction/bloodline/set matches.</p>
	<p><b>Note </b>: +1 for full FC match, +½ for half FC match</p>
<br/>
<p><b>Makers Challenge 2</b> (Artificial Currency)</p>
	<p><b>Old Challenge</b>: Get 1 Qid (1e48) Faction Coins with a minimum of 50 Excavation Resets (free and ruby) in this Reincarnation.</p>
	<p><b>New Challenge</b>: Get 100 Qad (1e47) Faction Coins with a minimum of 50 Excavation Resets (free and ruby) in this Reincarnation.</p>
<br/>
<p><b>Makers Challenge 3</b> (Pillars of Creation)</p>
	<p><b>Old Challenge</b>: Have at least 1 B (1e9) Maximum Mana and 30,000 of each building within 5 minutes of a new game.</p>
	<p><b>New Challenge</b>: Have at least 1 B (1e9) Maximum Mana and 25,000 of each building within 5 minutes of a new game.</p>
<br/>
<p><b>Makers Challenge 4</b> (Stoneheart)</p>
	<p><b>Old Challenge</b>: Without using any Bloodline or Research, reach 35,000 Halls of Origination.</p>
	<p><b>New Challenge</b>: Without using any Bloodline or Research, reach 30,000 Halls of Origination.</p>
<br/>
<p><b>Mercenary</b></p>
<p><b>Mercenary Challenge 4</b> (Return of the King)</p>
	<p><b>Old Requirement</b>: R202+, Any Mercenary, All lineages level 90.</p>
	<p><b>New Requirement</b>: R202+, Any Mercenary, All lineages level 75.</p>
<br/>
<p><b>Mercenary Challenge 5</b> (The Art of War)</p>
	<p><b>Old Requirement</b>: R206+, Any Mercenary, 20,000 Royal Exchanges made in this game, True Harlequin build.</p>
	<p><b>New Requirement</b>: R206+, Any Mercenary, 18,000 Royal Exchanges made in this game, True Harlequin build.</p>
	<p><b>Old Challenge</b>: Have at least 1 day spent with every alignment in this Reincarnation; Have at least 800,000 buildings without using any research.</p>
	<p><b>New Challenge</b>: Have at least 1 day spent with every alignment in this Reincarnation; Have at least 600,000 buildings without using any research.</p>
<br/>
<p><b>Warcry</b> (Mercenary Challenge Spell Reward)</p>
	<p><b>Effect</b>: Call to Arms gains additional effects based on your alignments, scaling off your Call to Arms strength.</p>
	<p><b>General Formula</b>: CtA = (25 + (0.3 * x ^ 0.975)), where x is building count.</p>
<br/>
<p><b>Good Warcry</b></p>
	<p><b>Old Effect</b>: Call to Arms can be cast up to tier 10 and removes one ascension penalty from Call to Arms.</p>
	<p><b>New Effect</b>: Grants one maximum castable Call to Arms tier per ascension and removes one ascension penalty from Call to Arms.</p>
	<p><b>New Effect</b>: Tax Collection casts in this game now increases Call to Arms base bonus.</p>
	<p><b>New Formula</b>: (1.5 * x ^ 0.5)%, where x is Tax Collection casts this game.</p>
	<p><b>Note</b>: This bonus will boost other Warcry effects.</p>
	<p><b>Note</b>: Call to Arms' building count becomes ((base building count) * (Buildings count more multipliers) * (Good Warcry) * W180 + (R150 Power) + C225).</p>
<br/>
<p><b>Evil Warcry</b></p>
	<p><b>Effect</b>: Multiplicatively increase Tax Collection worth in seconds.</p>
	<p><b>Old Formula</b>: (0.5 * CtA ^ 0.5)%.</p>
	<p><b>New Formula</b>: (CtA ^ 0.35)%.</p>
<br/>
<p><b>Neutral Warcry</b></p>
	<p><b>Old Effect</b>: Additively and multiplicatively increase Faction Coins find chance.</p>
	<p><b>Old Additive Formula</b>: +(100 * CtA)%</p>
	<p><b>Old Multiplicative Formula</b>: (CtA ^ 0.5)%</p>
	<p><b>New Effect</b>: Multiplicatively increase Faction Coins find chance.</p>
	<p><b>New Formula</b>: (0.35 * CtA ^ 0.35)%</p>
<br/>
<p><b>Order Warcry</b></p>
	<p><b>Effect</b>: Increases all spells durations.</p>
	<p><b>Old Formula</b>: (25 * ln(1 + CtA))%</p>
	<p><b>New Formula</b>: (2.5 * ln(1 + CtA))%</p>
<br/>
<p><b>Chaos Warcry</b></p>
	<p><b>Effect</b>: Multiplicatively increases assistants, temporarily.</p>
	<p><b>Old Formula</b>: (CtA ^ 0.25)%</p>
	<p><b>New Formula</b>: (0.35 * CtA ^ 0.35)%</p>
<br/>
<p><b>Balance Warcry</b></p>
	<p><b>Effect</b>: Multiplicatively increases Royal Exchange Bonus and makes them count more.</p>
	<p><b>Old Formula</b>: (CtA ^ 0.5)%</p>
	<p><b>New Formula</b>: (0.45 * CtA ^ 0.45)%</p>
<hr>
<p><b>Unique Buildings</b></p>
<p><b>Enchanted Field</b> (Fairy UB1)</p>
	<p><b>Effect</b>: Upgrade Farms to Enchanted Fields, boosting their production based on the amount of assistants you own and unlocking more unique perks for the building.</p>
	<p><b>Old Formula</b>: (47 * (750 * x) ^ 0.7)%, where x is the amount of assistants you own.</p>
	<p><b>New Formula</b>: (50 * (500 * x) ^ 0.5)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>Heaven's Domain</b> (Angel UB1)</p>
	<p><b>Effect</b>: Upgrade Heaven's Gate To Heaven's Domains, boosting their production based on the amount of spells affecting them and unlocking more unique perks for the building.</p>
	<p><b>Old Formula</b>: (35,000 * x)%, where x is the amount of spells affecting Heaven's Domain.</p>
	<p><b>New Formula</b>: (350 * x ^ 1.1)%, where x is the amount of spells affecting Heaven's Domain.</p>
<br/>
<p><b>Holy Site Quest</b> (Angel UB2)</p>
	<p><b>Old Requirement</b>: 2 M (2e6) Mana Regeneration.</p>
	<p><b>New Requirement</b>: 3 M (3e6) Mana Regeneration.</p>
<br/>
<p><b>Flesh Workshop Quest</b> (Undead UB2)</p>
	<p><b>Old Requirement</b>: 85M% (8.5e7%) offline production bonus.</p>
	<p><b>New Requirement</b>: 500,000% offline production bonus.</p>
<br/>
<p><b>Burning Abyss Quest</b> (Demon UB2)</p>
	<p><b>Old Requirement</b>: 120 seconds long Call to Arms.</p>
	<p><b>New Requirement</b>: 3,600 seconds long Call to Arms.</p>
<br/>
<p><b>Olympian Hall</b> (Titan UB1)</p>
	<p><b>Effect</b>: Upgrade Halls of Legend to Olympian Halls, boosting their production based on the amount of Royal Exchanges you've purchased and unlocking more unique perks for the building.</p>
	<p><b>Old Formula</b>: (15 * x)%, where x is the amount of Royal Exchanges made.</p>
	<p><b>New Formula</b>: (0.9 * x ^ 0.9)%, where x is the amount of Royal Exchanges made.</p>
<br/>
<p><b>Mountain Palace Quest</b> (Titan UB2)</p>
	<p><b>Old Requirement</b>: 3,750 Royal Exchange made.</p>
	<p><b>New Requirement</b>: 4,000 Royal Exchange made.</p>
<br/>
<p><b>Stonehenge</b> (Druid UB1)</p>
	<p><b>Effect</b>: Upgrade Stone Pillars to Stonehenges, boosting their production based on your Maximum Mana and unlocking more unique perks for the building.</p>
	<p><b>Old Formula</b>: (30 * x)%, where x is your Maximum Mana.</p>
	<p><b>New Formula</b>: (30 * x ^ 0.6)%, where x is your Maximum Mana.</p>
<br/>
<p><b>Ziggurat Quest</b> (Druid UB2)</p>
	<p><b>Old Requirement</b>: 12,000 Stonehenges.</p>
	<p><b>New Requirement</b>: 10,000 Stonehenges.</p>
<br/>
<p><b>Dwarven Forge Quest</b> (Dwarf UB1)</p>
	<p><b>Old Requirement</b>: 5,000 Blacksmiths.</p>
	<p><b>New Requirement</b>: 3,500 Blacksmiths.</p>
<br/>
<p><b>Spider Sanctuary Quest</b> (Drow UB1)</p>
	<p><b>Old Requirement</b>: 3,333 Dark Temples.</p>
	<p><b>New Requirement</b>: 2,000 Dark Temples.</p>
<br/>
<p><b>Freemason's Hall</b> (Neutral Mercenary UB1)</p>
	<p><b>Effect</b>: Upgrade Inns to Freemason's Hall, boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.</p>
	<p><b>Old Formula</b>: (20 + 20 * x)%, where x is the highest assistants you had in a single game this R.</p>
	<p><b>New Formula</b>: (20 + 20 * x ^ 0.8)%, where x is the highest assistants you had in a single game this R.</p>
<br/>
<p><b>Tyrant Garrison</b> (Evil Mercenary UB1)</p>
	<p><b>Effect</b>: Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.</p>
	<p><b>Old Formula</b>: (0.5 * log10(1 + x) ^ 3.5)%, where x is your offline production.</p>
	<p><b>New Formula</b>: ((log10(1 + x) ^ 3)%, where x is your offline production.</p>
<hr>
<p><b>Research</b></p>
<p><b>General Changes</b></p>
<p><b>A1 Mercenaries</b>: one less research per branch (3 instead of 4).</p>
<p><b>A3+ Research</b>: Start R160 with 0 budget (with the new R170 power and Research Facility changes the final budget in A3 of 6,000 remains).</p>
<br/>
<p><b>Spellcraft</b></p>
<p><b>S135</b> (Augmentation)</p>
	<p><b>Old Requirement</b>: 5,000 Unique Buildings (as Fairy) (This Game)</p>
	<p><b>New Requirement</b>: 4,000 Unique Buildings (as Fairy) (This Game)</p>
<br/>
<p><b>S200</b> (Cryomancy)</p>
	<p><b>Effect</b>: Increase Spell Duration based on mana produced (this game).</p>
	<p><b>Old Formula</b>: (5 * ln(1 + x) ^ 1.25)%, where x is mana produced (this game).</p>
	<p><b>New Formula</b>: (5 * ln(1 + x) ^ 1.5)%, where x is mana produced (this game).</p>
<br/>
<p><b>S270</b> (Runecarving)</p>
	<p><b>Old Effect</b>: Increase the production of all buildings based on your bonus from gems.</p>
	<p><b>Old Formula</b>: round(1.15 * x ^ 0.75)%, where x is your gem bonus.</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on the amount of Gems you own.</p>
	<p><b>New Formula</b>: (1.25 * log10(1 + x) ^ 1.25)%, where x is the amount of Gems you own.</p>
<br/>
<p><b>S300</b> (Chain Lightning)</p>
	<p><b>Old Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.</p>
	<p><b>Old Formula</b>: round(120 * x ^ 0.8)%, where x is your Lightning Strikes cast (This Game) stat.</p>
	<p><b>New Effect</b>: Ligthning Strike duration will not be modified by other effects. While Lightning Strike is active, all non-target buildings have their production increased based on Lightning Strike activity time in this game.</p>
	<p><b>New Formula</b>: (250 * (x / 20) ^ 0.9)%, where x is your Lightning Strike activity time (This Game) stat.</p>
<br/>
<p><b>S5375</b> (Invocation)</p>
	<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.</p>
	<p><b>Old Formula</b>: Multiplicative part: (0.6 * x ^ 0.6)%, where x is spell activity time in seconds.</p>
	<p><b>New Formula</b>: Multiplicative part: (6 + 0.6 * x ^ 0.6)%, where x is spell activity time in seconds.</p>
<br/>
<p><b>Craftsmanship</b></p>
<p><b>C251</b> (Architecture)</p>
	<p><b>Effect</b>: Increase the production of Olympian Halls based on the amount of buildings you own.</p>
	<p><b>Old Formula</b>: round(0.5 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
	<p><b>New Formula</b>: (25 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
<br/>
<p><b>C5875</b> (Genuineness)</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.</p>
	<p><b>Old Formula</b>: (50 + 1.5 * x ^ 0.95)%, where x is the lowest lineage.</p>
	<p><b>New Formula</b>: (50 + x ^ 0.95)%, where x is the lowest lineage.</p>
<br/>
<p><b>Divine</b></p>
<p><b>D1275</b> (Solemnity)</p>
	<p><b>Old Requirement</b>: 100,000 Total Buildings</p>
	<p><b>New Requirement</b>: 80,000 Total Buildings</p>
<br/>
<p><b>D5125</b> (Selection)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on Clicks in this game.</p>
	<p><b>Old Formula</b>: (x ^ 0.4)%, where x is clicks this game.</p>
	<p><b>New Formula</b>: (x ^ 0.5)%, where x is clicks this game.</p>
<br/>
<p><b>D5625</b> (Prophecy)</p>
	<p><b>Effect</b>: Empowers the effects of your faction's Set based on time spent with your least used faction. Lineage levels count more, by the same amount, for your faction’s Advanced Heritage.</p>
	<p><b>Old Formula</b>: (0.3 * x ^ 0.7)%, where x is your least spent faction time (non-mercenary).</p>
	<p><b>New Formula</b>: (50 + 0.25 * x ^ 0.5)%, where x is your least spent faction time.</p>
	<p><b>Note</b>: only considers time spent with factions that are available at the given game stage.</p>
<br/>
<p><b>D5875</b> (Birthright)</p>
	<p><b>Old Effect</b>: Gain the Bloodline effects of your least used non-mercenary faction. Based on time (This R), can give any vanilla, prestige or elite bloodline.</p>
	<p><b>New Effect</b>: Gain the Bloodline effects of your opposite Alignment.</p>
	<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
<br/>
<p><b>Economics</b></p>
<p><b>E50</b> (Bartering)</p>
	<p><b>Old Effect</b>: Reduce Enchanted Fields cost multiplier. Reduces cost multiplier by 0.035; with no other reductions applying, the multiplier will be 1.115 instead of 1.15.</p>
	<p><b>New Effect</b>: Reduce Enchanted Fields cost multiplier. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>E135</b> (Bribing)</p>
	<p><b>Old Effect</b>: Reduce the cost multiplier for Unique Buildings. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
	<p><b>New Effect</b>: Reduce the cost multiplier for Unique Buildings. Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
<br/>
<p><b>E145</b> (Royal Demand)</p>
	<p><b>Old Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)</p>
	<p><b>New Requirement</b>: 50,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)</p>
<br/>
<p><b>E290</b> (Surveyorship)</p>
	<p><b>Old Effect</b>: Reduces Excavation cost multiplier by 0.025; with no other reductions applying, the multiplier will be 1.175 instead of 1.2.</p>
	<p><b>New Effect</b>: Reduces Excavation cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.18 instead of 1.2.</p>
<br/>
<p><b>E400</b> (Conversion)</p>
	<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.</p>
	<p><b>Old Formula</b>: +(0.85 * floor(x ^ 0.85))%, where x is your Royal Exchange Bonus.</p>
	<p><b>New Formula</b>: +(2.5 * floor(x ^ 0.5))%, where x is your Royal Exchange Bonus.</p>
<br/>
<p><b>E5125</b> (Decentralization)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.</p>
	<p><b>Old Formula</b>: ((6 - 0.5 * T) ^ 2 * x ^ 0.75)%, where T is building tier and x is the number of (every) buildings you own.</p>
	<p><b>New Formula</b>: ((3 - 0.25 * T) ^ 4 * x ^ 0.6)%, where T is building tier and x is the number of (every) buildings you own.</p>
<br/>
<p><b>E5625</b> (Loan Sharking)</p>
	<p><b>Effect</b>: Tax Collection is worth more seconds based on Coins owned.</p>
	<p><b>Old Formula</b>: +(log10(1 + x) ^ 1.8), where x is your current amount of coins.</p>
	<p><b>New Formula</b>: +(log10(1 + x) ^ 1.5), where x is your current amount of coins.</p>
<br/>
<p><b>Alchemy</b></p>
<p><b>A270</b> (Synthesis)</p>
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.</p>
	<p><b>Old Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is Factions Coins found (this game).</p>
	<p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 1.5)%, where x is Factions Coins found (this game).</p>
<br/>
<p><b>A5375</b> (Albedo)</p>
	<p><b>Effect</b>: Increase all spells duration based on spell casts in this game.</p>
	<p><b>Old Formula</b>: (ln(1 + x) ^ 1.85)%, where x is spell casts this game.</p>
	<p><b>New Formula</b>: (ln(1 + x) ^ 1.8)%, where x is spell casts this game.</p>
<br/>
<p><b>Warfare</b></p>
<p><b>W175</b> (Overwhelm)</p>
	<p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.</p>
	<p><b>Old Formula</b>: +(8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.</p>
	<p><b>New Formula</b>: +(10 + x ^ 0.9), where x is the amount of evil spells cast.</p>
<br/>
<p><b>W225</b> (Critical Strike)</p>
	<p><b>Old Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this game.</p>
	<p><b>Old Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light active time This Game in seconds.</p>
	<p><b>New Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this Reincarnation.</p>
	<p><b>New Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light active time This Reincarnation in seconds.</p>
<br/>
<p><b>W1275</b> (Authority)</p>
	<p><b>Old Effect</b>: Increase the duration of all spells based on the amount of Non-Unique buildings you own.</p>
	<p><b>Old Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Non-Unique buildings you own.</p>
	<p><b>New Effect</b>: Increase the duration of all spells based on Call to Arms activity time in this Reincarnation.</p>
	<p><b>New Formula</b>: (x ^ 0.5)%, where x is Call to Arms active time This Reincarnation in seconds.</p>
<br/>
<p><b>W5125</b> (Sovereignty)</p>
	<p><b>Effect</b>: Increase the production of two highest tier buildings based on assistants you own.</p>
	<p><b>Old Formula</b>: (x ^ 0.3)%, where x is assistants.</p>
	<p><b>New Formula</b>: (0.5 * x ^ 0.25)%, where x is assistants.</p>
<br/>
<p><b>W5625</b> (Concealment)</p>
	<p><b>Effect</b>: Offline time counts more based on Mana Produced in this game.</p>
	<p><b>Old Formula</b>: (2.5 * ln(1 + x) ^ 2.5)%, where x is mana produced (This game).</p>
	<p><b>New Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is mana produced (This game).</p>
<hr>
<p><b>Bloodlines</b></p>
<p><b>Fairy Bloodline</b></p>
	<p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths based on amount of assistants you own.</p>
	<p><b>Old Formula</b>: (250 * x ^ 0.9)%, where x is the amount of assistants you own.</p>
	<p><b>New Formula</b>: (40 * ln(1 + x) ^ 4)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>Goblin Bloodline</b></p>
	<p><b>Effect</b>: Reduce all building cost multipliers.</p>
	<p><b>Old Effect</b>: Reduces cost multiplier by 0.02.</p>
	<p><b>New Effect</b>: Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
<hr>
<p><b>Lineages</b></p>
<p><b>All Lineage Perk 5 are now unlocked with level 40 instead of 45</b>.</p>
<br/>
<p><b>Fairy Perk 3</b></p>
	<p><b>Old Effect</b>: Gain 1% more assistants for every 2,000 Unique Buildings (multiplicatively).</p>
	<p><b>New Effect</b>: Gain more assistants based on the amount of Unique Buildings you own (additively).</p>
	<p><b>New Formula</b>: +(30 * x ^ 0.7), where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Elven Perk 3</b></p>
	<p><b>Old Effect</b>: Increase base clicking reward by 15% of Unique Building production for every 777 of them (multiplicatively).</p>
	<p><b>New Effect</b>: Increase base clicking reward based on the amount of Unique Buildings you own (additively).</p>
	<p><b>New Formula</b>: +(85 * x ^ 0.85), where x is the amount of Unique Buildings you own.</p>
	<p><b>Added Effect</b>: Also increase clicking reward by a fraction of that amount.</p>
	<p><b>Formula</b>: (0.85 * x ^ 0.85)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Angel Perk 3</b></p>
	<p><b>Effect</b>: Increase God's Hand bonus based on Unique Buildings owned.</p>
	<p><b>Old Formula</b>: (12,000 * floor(x / 1,000))%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (3 * x ^ 0.9)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Goblin Perk 3</b></p>
	<p><b>Effect</b>: Increase base production of Unique Buildings based on their amount (multiplicative).</p>
	<p><b>Old Formula</b>: (25 * x / 650)%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (5 * x ^ 0.5)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Undead Perk 1</b></p>
	<p><b>Old Effect</b>: Undead Bloodline multiplies your assistants by 8% of the amount instead of adding them.</p>
	<p><b>New Effect</b>: Undead Bloodline multiplies your assistants by 5% of the amount instead of adding them.</p>
<br/>
<p><b>Demon Perk 1</b></p>
	<p><b>Effect</b>: While using Demon Bloodline, increase Maximum Mana based on trophies unlocked (additive).</p>
	<p><b>Old Formula</b>: +(20 * x ^ 1.25), where x is trophies unlocked.</p>
	<p><b>New Formula</b>: +(20 * x), where x is trophies unlocked.</p>
<br/>
<p><b>Demon Perk 3</b></p>
	<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of Unique Buildings you own.</p>
	<p><b>Old Formula</b>: (50 * x / 666)%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (0.6 * x ^ 0.66)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Titan Perk 3</b></p>
	<p><b>Effect</b>: Effect: Increase the base production of tier 4 and tier 7 buildings based on the amount of Unique Buildings you own (additive).</p>
	<p><b>Old Tier 4 Formula</b>: +(0.01 * x), where x is the amount of Unique Buildings you own.</p>
	<p><b>Old Tier 7 Formula</b>: +(x), where x is the amount of Unique Buildings you own.</p>
	<p><b>New Tier 4 Formula</b>: +(2.5 * x ^ 0.5), where x is the amount of Unique Buildings you own.</p>
	<p><b>New Tier 7 Formula</b>: +(25 * x ^ 0.5), where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Druid Perk 3</b></p>
	<p><b>Old Effect</b>: Increase Grand Balance bonus based on the amount of Unique Buildings you own.</p>
	<p><b>Old Formula</b>: (12,000 * Floor(x / 1,000))%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Effect</b>: Activity time for all spells counts 3% more for every 1,000 Unique Buildings.</p>
	<p><b>New Formula</b>: (3 * x / 1,000)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Faceless Perk 3</b></p>
	<p><b>Effect</b>: Increase assistants production based on the amount of Unique Buildings you own. Does not suffer from Ascension penalties.</p>
	<p><b>Old Formula</b>: (5 * x / 1,000)%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (x ^ 0.5)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Dwarven Perk 3</b></p>
	<p><b>Effect</b>: Excavations and Artifacts count more based on the amount of Unique Buildings you own.</p>
	<p><b>Old Formula</b>: (1 * x / 1,500)%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Dwarven Perk 4</b></p>
	<p><b>Effect</b>: While Diamond Pickaxe is active, multiplicatively increase Mana Regeneration based on Faction Coin Find chance.</p>
	<p><b>Old Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is Faction Coin Find chance.</p>
	<p><b>New Formula</b>: (log10(1 + x) ^ 2.5)%, where x is Faction Coin Find chance.</p>
<br/>
<p><b>Drow Perk 1</b></p>
	<p><b>Old Effect</b>: While using Drow Bloodline, all time spent counts 100% more for all purposes.</p>
	<p><b>New Effect</b>: Time counts more based on your all-time maximum Combo Strike counter.</p>
	<p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 1.5)%, where x is your all-time maximum Combo Strike counter.</p>
<br/>
<p><b>Drow Perk 3</b></p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
	<p><b>Old Formula</b>: (5 * x / 3,000)%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Archon Perk 3</b></p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regneration based on the amount of Unique Buildings you own.</p>
	<p><b>Old Formula</b>: (3 * x / 1,000)%, where x is the amount of Unique Buildings you own.</p>
	<p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Djinn Perk 3</b></p>
	<p><b>Old Effect</b>: Activity time for all spells counts 3% more for every 1000 Unique Buildings.</p>
	<p><b>New Effect</b>: Tax Collection casts count 3% more for every 1000 Unique Buildings.</p>
<hr>
<p><b>Artifacts</b></p>
	<p><b>Voodoo Doll, Dawnstone and Duskstone</b></p>
	<p><b>Note</b>: Now cannot be found until Reincarnation 16 (chances unchanged).</p>
	<p><b>Mana loom, Factory, Mythos, Vault, Athanor and Battlefield</b></p>
	<p><b>Note</b>: Now cannot be found until Reincarnation 180 (chances unchanged).</p>
<br/>
<p><b>Silk Cloth</b></p>
	<p><b>Old Chance</b>: ((x - 10,000) / 200,000)%, where x is Wizard Towers built (Building count multipliers do NOT count).</p>
	<p><b>New Chance</b>: ((x - 8,000) / 200,000)%, where x is Wizard Towers built (Building count multipliers do NOT count).</p>
<br/>
<p><b>Spiked Whip</b></p>
	<p><b>Old Chance</b>: ((x - 10,000) / 300,000)%, where x is Slave Pens built (Building count multipliers do NOT count).</p>
	<p><b>New Chance</b>: ((x - 8,000) / 300,000)%, where x is Slave Pens built (Building count multipliers do NOT count).</p>
<br/>
<p><b>Crystallized Lava</b></p>
	<p><b>Old Chance</b>: ((x - 10,000) / 200,000)%, where x is Hall of Legends built (Building count multipliers do NOT count).</p>
	<p><b>New Chance</b>: ((x - 8,000) / 200,000)%, where x is Hall of Legends built (Building count multipliers do NOT count).</p>
<br/>
<p><b>Beard Hair</b></p>
	<p><b>Old Chance</b>: (x / 100 M [1e8])%, where x is assistant count (including temporary assistants).</p>
	<p><b>New Chance</b>: (x / 1 B [1e9])%, where x is assistant count (including temporary assistants).</p>
<br/>
<p><b>Third Iron Fragment</b></p>
	<p><b>Old Chance</b>: ((log10(1 + x) - 2) ^ 3 / 1 M [1e6])%, where x is offline bonus.</p>
	<p><b>New Chance</b>: ((log10(1 + x) - 2) ^ 3 / 500,000)%, where x is offline bonus.</p>
<br/>
<p><b>A3 Facility Research Artifact</b> (Mana Loom, Factory, Mythos, Vault, Athanor, Battlefield, Apeiron)</p>
	<p><b>Change</b>: Now increase research budget by 3,000 instead of 2,500 points (to match the other research system changes).</p>
<hr>
<p><b>Faction Sets</b> (1st effect)</p>
<p><b>Fairy Set</b></p>
	<p><b>Old Effect</b>: Increase the production of Farms, Inns and Blacksmiths based on amount of assistants you own.</p>
	<p><b>Old Formula</b>: (x ^ 0.7)%, where x is the amount of assistants you own.</p>
	<p><b>New Effect</b>: Farms, Inns and Blacksmiths count more based on the amount of time spent with Fairies in this Reincarnation.</p>
	<p><b>New Formula</b>: (0.7 * ln(1 + x) ^ 3)%, where x is time spent with Fairies in This Reincarnation in seconds.</p>
<br/>
<p><b>Elf Set</b></p>
	<p><b>Removed Effect</b>: No longer increases clicking reward based on Elven Lucks.</p>
<br/>
<p><b>Undead Set</b></p>
	<p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
	<p><b>Old Formula</b>: +(6 * ln(1 + x) ^ 3), where x is offline Multiplier.</p>
	<p><b>New Formula</b>: +(7 * ln(1 + x) ^ 3.5), where x is offline Multiplier.</p>
<br/>
<p><b>Demon Set</b></p>
	<p><b>Old Effect</b>: Increase the production of Non-Unique Buildings based on the sum of your Faction spells activity time (This Reincarnation).</p>
	<p><b>Old Formula</b>: (0.4 * x ^ 0.75)%, where x is the sum of your Faction spells activity time (This Reincarnation).</p>
	<p><b>New Effect</b>: Trophies count more based on the amount of the three highest tier buildings you own.</p>
	<p><b>New Formula</b>: (0.5 * x ^ 0.5)%, where x is the sum of the three highest tier buildings.</p>
<br/>
<p><b>Druid Set</b></p>
	<p><b>Old Effect</b>: Increase the production of all buildings based on their quantity.</p>
	<p><b>Old Formula</b>: (0.8 * x ^ 0.7)%, where x is building count.</p>
	<p><b>New Effect</b>: Increase the duration of each spell based on their respective activity time (This Game).</p>
	<p><b>New Formula</b>: (x ^ 0.5)%, where x is each individual spell's activity time This Game in seconds.</p>
<br/>
<p><b>Faceless Set</b></p>
	<p><b>Effect</b>: Gain assistants based on the highest amount of assistants you had in a previous game (additively).</p>
	<p><b>Old Formula</b>: +(3 * x ^ 0.5), where x is the highest amount of assistants you had in a previous game.</p>
	<p><b>New Formula</b>: +(0.45 * x ^ 0.45), where x is the highest amount of assistants you had in a previous game.</p>
<br/>
<p><b>Dwarven Set</b></p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on your Royal Exchange bonus.</p>
	<p><b>Old Formula</b>: (0.7 * x ^ 0.7)%, where x is Royal Exchange bonus.</p>
	<p><b>New Formula</b>: (8 * x ^ 0.4)%, where x is Royal Exchange bonus.</p>
<br/>
<p><b>Dragon Set</b></p>
	<p><b>Effect</b>:  Increase the duration of all spells based on spells cast in this Reincarnation.</p>
	<p><b>Old Formula</b>: (1.75 * ln(1 + x) ^ 1.25)%, where x is spells cast in this Reincarnation.</p>
	<p><b>New Formula</b>: (1.25 * ln(1 + x) ^ 1.25)%, where x is spells cast in this Reincarnation.</p>
<hr>
<p><b>Event</b></p>
<p><b>Christmas</b></p>
<p><b>New Event Feat</b>: Check event page after event starts.</p>
<hr>
<p><b>Trophies</b></p>
<p><b>Beard Carpet</b></p>
	<p><b>Old Requirement</b>: Have at least 3 km beards on your assistants (using DN6: Bearded Assistants faction upgrade).</p>
	<p><b>New Requirement</b>: Have at least 1 km beards on your assistants (using DN6: Bearded Assistants faction upgrade).</p>
	<p><b>Note</b>: Now takes 1 day 3 hours and 47 minutes instead of 3 days 11 hours and 20 minutes.</p>
<br/>
<p><b>Coin Pillage</b></p>
	<p><b>Old Requirement</b>: Cast 30 Tax Collections in less than 5 seconds.</p>
	<p><b>New Requirement</b>: Cast 150 Tax Collections in less than 5 seconds.</p>
<br/>
<p><b>Future Linkin</b></p>
	<p><b>Old Requirement</b>: Abdicate with at least 150,000 Unique Buildings.</p>
	<p><b>New Requirement</b>: Abdicate with at least 100,000 Unique Buildings.</p>
<br/>
<p><b>God's Fingers</b></p>
	<p><b>New Requirement</b>: Now requires at least A3 to be unlockable.</p>
<br/>
<p><b>The Architect</b></p>
	<p><b>Old Requirement</b>: Build 250,000 units of any individual building.</p>
	<p><b>New Requirement</b>: Build 125,000 units of any individual building.</p>
<hr>
<p><b>Other changes</b></p>
<p><b>Elven Heritage</b></p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins by +5% and increase your click reward based on your chance to find Faction Coins.</p>
	<p><b>Old Formula</b>: (0.5 * x)%, where x is faction coins find chance.</p>
	<p><b>New Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is faction coins find chance.</p>
<br/>
<p><b>Dragon Heritage</b></p>
	<p><b>Old Effect</b>: Increase assistants production based on time spent affiliated with Dragons all game.</p>
	<p><b>Old Formula</b>: (0.55 * x ^ 0.55)%, x is time in seconds affiliated with Dragons (This Reincarnation).</p>
	<p><b>Old Effect</b>: Increase assistants production based on time spent affiliated with Dragons in this Reincarnation.</p>
	<p><b>Old Formula</b>: (0.3 * x ^ 0.7)%, x is time in seconds affiliated with Dragons (This Reincarnation).</p>
<br/>
<p><b>Spell Cataclysm</b></p>
	<p><b>Old Effect</b>: Increases maximum mana by 75%.</p>
	<p><b>New Effect</b>: Increases maximum mana by 25%.</p>
<br/>
<p><b>Dark Covenant</b> (Evil Mercenary)</p>
	<p><b>Removed Effect</b>: No longer removes an ascension penalty from Heresiarchs.</p>
<br/>
<p><b>Uniformity</b></p>
	<p><b>Effect</b>: Increases production of all buildings based on time spent as least used alignment.</p>
	<p><b>Old Formula</b>: (0.72 * x ^ 0.72)%, where x is the time spent with your least used alignment (primary or secondary).</p>
	<p><b>New Formula</b>: (0.75 * x ^ 0.75)%, where x is the time spent with your least used alignment (primary or secondary).</p>
<br/>
<p><b>Art of the Crow: Good Alignment</b></p>
	<p><b>Effect</b>: Art of the Crow's bonus is based on Excavations made.</p>
	<p><b>Old Formula</b>: (0.05 * x ^ 1.1)%, where x is excavation count.</p>
	<p><b>New Formula</b>: (0.05 * x)%, where x is excavation count.</p>
<br/>
<p><b>Art of the Crow: Evil Alignment</b></p>
	<p><b>Effect</b>: Art of the Crow's bonus is based on production bonus from Gems.</p>
	<p><b>Old Formula</b>: (50 + 30 * x ^ 0.3)%, where x is production bonus from Gems.</p>
	<p><b>New Formula</b>: (50 + 25 * x ^ 0.25)%, where x is production bonus from Gems.</p>
<br/>
<p><b>Art of the Crow: Neutral Alignment</b></p>
	<p><b>Effect</b>: Art of the Crow's bonus is based on Royal Exchanges made.</p>
	<p><b>Old Formula</b>: (x ^ 0.75)%, where x is Royal Exchanges made.</p>
	<p><b>New Formula</b>: (1.5 * x ^ 0.5)%, where x is Royal Exchanges made.</p>
<br/>
<p><b>Makers Mask</b></p>
	<p><b>Old Effect</b>: Increase the production of Non-Unique buidings by 10,000% and gain +1 M (1e6) assistants.</p>
	<p><b>New Effect</b>: Increase the production of Non-Unique buidings by 10,000% and gain +50,000 assistants.</p>
<br/>
<p><b>Secrets of the Underworld</b> (Prestige Research Unlock)</p>
	<p><b>Old Coins Cost</b>: 100 QiSxg (1e200) Coins.</p>
	<p><b>New Coins Cost</b>: 100 SXg (1e185) Coins.</p>
<br/>
 <p><b>Mercenary Duel</b> (A3 Mercenary Unlock)</p>
	<p><b>Old Faction Coins requirement</b>: 1 Nod (1e60) Faction Coins.</p>
	<p><b>New Faction Coins requirement</b>: 10 Vg (1e64) Faction Coins.</p>
	<p><b>Old Buildings requirement</b>: 300,000 Buildings (MAX).</p>
	<p><b>New Buildings requirement</b>: 350,000 Buildings (MAX).</p>
<?php include "../scripts/footer.html"; ?>
