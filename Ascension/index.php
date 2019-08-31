<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><img src="http://musicfamily.org/realm/Factions/picks/Reset-Ascend.png" alt="Ascend" align="middle"></h6>
<h6>Description</h6>
<p>Ascension is a third kind of soft reset. It was implemented to overcome the limit computers have with very big numbers. All the values were shifted to a smaller range to enable the game to progress further.</p>
<p>At R39, R99 and R159 the Reincarnation Button will say Ascension.</p>
<p>Ascending will reset all the progress a Reincarnation would reset.</p>
<p>It will not reset your Reincarnation count, and then will revert back to the Reincarnate button for Reincarnation 40 and Reincarnation 100 with new requisites.</p>
<p>By Ascending you will unlock a new main currency, Diamond Coins at R40, Emerald Coins at R100 and Amethyst Coins at R160 that will be used for post-ascension upgrades and features, resulting in much smaller numbers.</p>
<p>All upgrades that have previously cost Coins will be free, and the formulas for subsequent Reincarnations will change to allow continued progress. All Gifts bonuses, Scry Rewards, Ruby bonuses, Event bonuses and Gem bonuses will NOT be affected by the Ascension reduction.</p>
<p><b>Note</b>: It is strongly advised to get most, if not all, the trophies, challenges and artifacts possible before ascending.</p>
<p><b>Note:</b> It is wise to ascend before reaching or 179.7 Uc (1.797E308) gold. If you go above, your coin treasury will become NaN, preventing you from abdicating, making your only options to Reincarnate or to restart the game (which will load the last save with a valid coin count)</p>
</br>
<h6>Income Shift</h6>
<p>Ascension reduces each income boost by raising the respective multiplier to the 1/10 power. For instance, the 6000% of S330 is a 61x multiplier; 61 ^ 0.1 = 1.508, so it's a 50.8% percent increase post-ascension. (by heeheehee <a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/613680#posts-10289299">source</a>), Resulting in the need to change and adapt the Mercenary and research builds.</p>
<p>Ascend <a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/607644">preview</a> forum post by <a target="_blank" href="http://www.kongregate.com/accounts/Kraide">Kraide</a>
<p>Values for ascension <a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/615701-values-for-ascension-upgrades-assistants-mana-regen-and-no-percent-shown">upgrades</a> by <a target="_blank" href="http://www.kongregate.com/accounts/artcrow">artcrow</a></p>
<p>The bonus formulas of upgrades will all be shifted to a lower range, resulting in many 2 number bonuses.</p>
<p><b>Formula</b>: ((x / 100 + 1) ^ 0.1 ^ A) * 100, where x is original bonus in percentage and A is Ascension count.</p>
</br>
<h6>Multiplier reduction</h6>
<p>Ascension reduces multipliers for building cost and excavation.</p>
<p><b>Formula</b>: 1 + (M - 1) / 5, where M is old multiplier.</p>
<hr>
<p><b>Pre Ascension</b>: (R0-R39)</p>
<p><b>Gem Requirement</b>: 1e27 * 1000 ^ R</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e11, where n is gems.</p>
<p><b>Coins to Gems Formula</b>: floor(n ^ 0.5 / 5e11 ^ 0.5), where n is coins.</p>
<hr>
<p><b>First Ascension</b>: (R40-R99)</p>
<p><b>Gem Requirement</b>: 1e27 ^ 0.75 * 100 ^ (R - 40)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e11, where n is gems.</p>
<p><b>Coins to Gems Formula</b>: floor(n ^ 0.5 / 5e11 ^ 0.5), where n is coins.</p>
<p>Gold Coins become Diamond Coins.</p>
<hr>
<p><b>Second Ascension</b>: (R100-R159)</p>
<p><b>Gem Requirement</b>: 1e27 ^ 0.75 * R ^ (R - 100)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e3, where n is gems.</p>
<p><b>Coins to Gems Formula</b>: floor(n ^ 0.5 / 5e3 ^ 0.5), where n is coins.</p>
<p>Diamond Coins become Emerald Coins.</p>
<p><b>Note:</b>: Mercenaries and Prestige factions are locked on ascending.</p>
<p><b>Note:</b>: When Ascending to Ascension 2, all Lineages will be set back to level 25 if higher.</p>
<p>Ascension 2 will give you access to Tier 7 spells. (See spell page for time required).</p>
<p>3 new alignments are added ontop of the regular 3 alignments, with one faction being assigned to each alignment combo. Each new alignment also unlocks an extra spell.</p>
<p>Second unique building also becomes avaliable for each faction, unlocking Faction Union once bought (See each faction's page for more information)
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ProofofOrder.png" alt="Proof of Order" align="middle"> <b>Proof of Order</b></p>
<p>Determine your rulership in an efficient and stable fashion, making the best out of well-planned strategies to let your realm grow even further.</p>
<p>Choosing this alignment will remove Ascension penalties on all alignment spells and let you affiliate with the following factions.</p>
<p><b>Angel</b> (Good), <b>Undead</b> (Evil), and <b>Titans</b> (Neutral)</p>
<p><b>Cost</b>: 1 Qa (1e15) Emerald Coins</p>
<br/>
<p><b>Spell</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/TemporalFlux.png" alt="Temporal Flux" align="middle"> <b>Temporal Flux</b></p>
<p><b>Cost</b>: 5000 Mana</p>
<p><b>Effect</b>: Increase Unique building production by time spent this game.</p>
<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
<p><b>Formula</b>: (3.5 * (x / 60) ^ 0.825)%, where x is time in seconds this game.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ProofofChaos.png" alt="Proof of Chaos" align="middle"> <b>Proof of Chaos</b></p>
<p>Resign your will to eternal entropy that forms and maintains the world itself, prospering in the glory of extreme bursts of random fortune.</p>
<p>Choosing this alignment will remove Ascension penalties on all alignment spells and let you affiliate with the following factions.</p>
<p><b>Fairies</b> (Good), <b>Demons</b> (Evil), and <b>Faceless</b> (Neutral)</p>
<p><b>Cost</b>: 1 Qa (1e15) Emerald Coins</p>
<br/>
<p><b>Spell</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/Maelstrom.png" alt="Maelstrom" align="middle"> <b>Maelstrom</b></p>
<p><b>Cost</b>: 3500 Mana</p>
<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants</p>
<p><b>Formulas</b></p>
<p><b>Mana</b> (0.02 * (log10(1+x)) ^ 5)%, where x is mana produced this game.</p>
<p><b>Trophy Formula</b> (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
<p><b>Faction Coins</b> (0.01 * (log10(1+x)) ^ 4)%, where x is faction coins found this game.</p>
<p><b>Assistants</b>(0.25 * (log10(1+x)) ^ 5)%, where x is amount of assistants.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ProofofBalance.png" alt="Proof of Balance" align="middle"> <b>Proof of Balance</b></p>
<p>Avoid fixating yourself to the rules while not falling to madness as well, Take advantage of everything you can gather and maximize your gains with any possible means.</p>
<p>Choosing this alignment will remove Ascension penalties on all alignment spells and let you affiliate with the following factions.</p>
<p><b>Elves</b> (Good), <b>Goblins</b> (Evil), and <b>Druid</b> (Neutral)</p>
<p><b>Cost</b>: 1 Qa (1e15) Emerald Coins</p>
<br/>
<p><b>Spell</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/AllCreation.png" alt="All Creation" align="middle"> <b>All Creation</b></p>
<p><b>Cost</b>: 6000 Mana</p>
<p><b>Effect</b>: Increase production of all buildings based on mana regeneration rate.</p>
<p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your mana regeneration rate.</p>
<p><b>Formula</b>: (0.15 * ln(x) ^ 3.5 + 0.9 * x ^ 0.27), where x is mana per seconds.</p>
<hr>
<p><b>Third Ascension</b>: (R160+)</p>
<p><b>Gem Requirement</b>: 1e27 * 100 ^ (R - 160)</p>
<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e11, where n is gems.</p>
<p><b>Coins to Gems Formula</b>: floor(n ^ 0.5 / 5e11 ^ 0.5), where n is coins.</p>
<p>Emerald Coins become Amethyst Coins.</p>
<p><b>Note:</b>: When Ascending to Ascension 2, all Lineages will be set back to level 50 if higher.</p>
<br/>
<?php include "../scripts/footer.html"; ?>
