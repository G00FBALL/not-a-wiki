<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><img src="http://musicfamily.org/realm/Factions/picks/Reset-Ascend.png" alt="Ascend" align="middle"></h6>
<h6>Description</h6>
<p>Ascension is a third kind of soft reset. It was implemented to overcome the usual representation limit for coins. Most production upgrades will be shifted to a smaller range to enable the game to progress further.</p>
<p>At <b>R39</b>, <b>R99</b>, <b>R159</b> and <b>R219</b> the Reincarnation Button will say Ascension and will reset all the progress a Reincarnation would reset.</p>
<p>It will not reset your Reincarnation count, and then will revert back to the Reincarnate button for R40, R100, R160 and R220 with new requisites.</p>
<p>Each Ascension has its own main currency and ascending will replace the old one.</p>
<p>R0 - R39: Gold Coins</p>
<p>R40 - R99: Diamond Coins</p>
<p>R100 - R159: Emerald Coins</p>
<p>R160 - R219: Amethyst Coins</p>
<p>R220 - R279: Sapphire Coins</p>
<p>All upgrades that have cost coins of a previous currency (<b>not</b> Faction Coins) will be free, and the formulas for subsequent Reincarnations will change to allow continued progress.</p>
<p>All Gifts bonuses, Scry Rewards, Ruby bonuses, Event bonuses and Gem bonuses will <b>not</b> be affected by the Ascension reduction.</p>
<p><b>Note</b>: It is strongly advised to get most, if not all, the trophies, challenges and artifacts possible before ascending.</p>
</br>
<h6>Income Shift</h6>
<p>Each Ascension reduces production boosts by raising the previous respective multiplier to the 1/10-th power, the so called <b>Ascension Penalty</b>, resulting in many 2-digit number bonuses in Ascension 1.<p>
<p>For instance, the 10,000% of Fairy Workers (FR2) is a x101 multiplier; 101 ^ 0.1 = 1.586, so it is now giving a 58.6% increase in Ascension 1.</p>
<p>Upgrades that increase something other than production of buildings, clicking reward or assistant production are not affected.</p>
<p><b>Ascension Penalty Formula</b>:<br>(((x / 100 + 1) ^ (0.1 ^ A) - 1) * 100)%, where x is original bonus in percentage and A the number of Ascension Penalties applied.</p>
</br>
<h6>Multiplier reduction</h6>
<p>Ascensions also reduces the Cost Multipliers for buildings and excavation.</p>
<p>For more information, see <b><a target="" href="http://musicfamily.org/realm/BuildingAlignments/">Buildings Cost</b></a> & <b><a target="" href="http://musicfamily.org/realm/Artifacts/">Excavation Cost</b></a>.</p>
<hr>
<h6>Ascension Details</h6>
<p><b>Pre Ascension</b>: (R0 - R39)</p>
<p><b>Gem Requirement</b>: 1e27 * 1000 ^ R</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e11, where n is gems.</p>
<p><b>Coins to Gems Formula</b>:<br>floor(((1 + 4 * n / 5e11) ^ 0.5 - 1) / 2), where n is coins.</p>
<hr>
<p><b>First Ascension</b>: (R40 - R99)</p>
<p><b>Gem Requirement</b>: 1e27 ^ 0.75 * 100 ^ (R - 40)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e11, where n is gems.</p>
<p><b>Coins to Gems Formula</b>:<br>floor(((1 + 4 * n / 5e11) ^ 0.5 - 1) / 2), where n is coins.</p>
<hr>
<p><b>Second Ascension</b>: (R100 - R159)</p>
<p><b>Gem Requirement</b>: 1e27 ^ 0.75 * R ^ (R - 100)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e3, where n is gems.</p>
<p><b>Coins to Gems Formula</b>:<br>floor(((1 + 4 * n / 5e3) ^ 0.5 - 1) / 2), where n is coins.</p>
<p>When Ascending for the second time, the following will take effect, alongside normal Ascension Changes:</p>
<p>
 - Mercenaries and Prestige Factions will become inaccessible (prestige return in R116).<br>
 - All Lineage levels will be reset back to 25 (if higher).<br>
 - Research is limited to one per branch (not counting Faction specific ones).<br>
 - Tier 7 Spells will become obtainable (see <b><a target="" href="http://musicfamily.org/realm/Spells/">Spells Page</b></a> for time required).<br>
 - Secondary Alignments and Spells will become available.</p>
<p>For more information, see <b><a target="" href="http://musicfamily.org/realm/Ascension2/">Ascension 2</b></a>.</p>
<hr>
<p><b>Third Ascension</b>: (R160 - R219)</p>
<p><b>Gem Requirement</b>: 1e27 * 100 ^ (R - 160)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e11, where n is gems.</p>
<p><b>Coins to Gems Formula</b>:<br>floor(((1 + 4 * n / 5e11) ^ 0.5 - 1) / 2), where n is coins.</p>
<p>When Ascending for the third time, the following will take effect, alongside normal Ascension Changes:</p>
<p>
 - All Lineage levels will be reset back to 50 (if higher).<br> 
 - Research is changed to a Budget System. The cost of each research upgrade is equal to its number. Budget Size starts at 0 and can be increased with Archon Bloodline or later Upgrades.</p>
<hr>
<p><b>Fourth Ascension</b>: (R220 - R279)</p>
<p><b>Gem Requirement</b>: 1e18 * 100 ^ (R - 220)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e26, where n is gems.</p>
<p><b>Coins to Gems Formula</b>:<br>floor(((1 + 4 * n / 5e26) ^ 0.5 - 1) / 2), where n is coins.</p>
<p>When Ascending for the fourth time, the following will take effect, alongside normal Ascension Changes:</p>
<p>
 - Mercenaries, Prestige and Elite Factions will become inaccessible (prestige return in R240).<br>
 - All Lineage levels will be reset back to 75 (if higher).<br>
 - All Research Upgrades from A0 and A1 are removed.<br>
 - All Normal Heritages are removed.<br>
 - All Ascension Penalties from Faction Upgrades and Advanced Heritages are completely removed in A4.<br>
 - Building Cost Multiplier reverted to A0.<br>
 - Legacies introduced.</p>
<p>For more information, see <b><a target="" href="http://musicfamily.org/realm/Ascension4/">Ascension 4</b></a>.</p>
<br/>
<?php include "../scripts/footer.html"; ?>
