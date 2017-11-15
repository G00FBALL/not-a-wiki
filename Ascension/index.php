<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><img src="http://musicfamily.org/realm/Factions/picks/Reset-Ascend.png" alt="Ascend" align="middle"></h6>
<h6>Description</h6>
<p>At R39 and R99 the Reincarnation Button will say Ascension.
<p>Ascending will reset all the progress a Reincarnation would reset. 
<p>It will not reset your Reincarnation count, and then will revert back to the Reincarnate button for Reincarnation 40 and Reincarnation 100 with new requisites. 
<p>By Ascending you will unlock a new main currency, Diamond Coins at R40, and Emerald Coins at R100 that will be used for post-ascension upgrades and features, resulting in much smaller numbers. 
<p>All upgrades that previously cost Gold Coins will be free, and the formulas for subsequent Reincarnations will change to allow continued progress. All Gifts bonuses, Scry Rewards, Ruby bonuses, Event bonuses and Gem bonuses will NOT be affected by the Ascension reduction.
<p>Ascension is a third kind of soft reset. It was implemented to overcome the limit computers have with very big numbers. All the values were shifted to a smaller range to enable the game to progress further.
<p><b>Note</b>: It is strongly advised to get most, if not all, the trophies, challenges and artifacts possible before ascending (5k buildings, Stoic Resistance etc. Post-ascension, it may take a long time to reach the necessary requirements again.
<h6>Diamond coins</h6>
<p>Everything will appear the same, but the gold coins will disappear, everything that used to cost gold coins will become either free, or are converted to Diamond coins. Early upgrades, faction and research upgrades will be free to a certain point. Buildings and excavations will still cost coins, but Diamond coins.
<p><b>WARNING!</b> It is imperative to ascend before reaching 18.96 Ocqag (1.896E148) gems or 179.7 Uc (1.797E308) gold. If you go above, your game will start to bug. (source)
<h6>Income Shift</h6>
<p><b>First Ascension</b>: (A1 R40-R99)
<p>Gem Requirement Post Ascension 1e27^(ascension^0.75) * 100^(R - 40)
<p>The relation between gold and gems scales the same at 0.5 – 1 million x coins = 1,000x gems.
<p><b>Formula</b>: (sqrt(1 + 8 * c / 1e12) - 1) / 2</p>
<p>The bonus formulas of upgrades will all be shifted to a lower range, resulting in many 2 number bonuses.
<p>Ascension reduces each income boost by raising the respective multiplier to the 1/10 power. For instance, the 6000% of S330 is a 61x multiplier; 61 ^ 0.1 = 1.508, so it's a 50.8% percent increase post-ascension. (by heeheehee <a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/613680#posts-10289299">source</a>), Resulting in the need to change and adapt the Mercenary and research builds.
<p>Ascend <a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/607644">preview</a> forum post by <a target="_blank" href="http://www.kongregate.com/accounts/Kraide">Kraide</a>
<p>Values for ascension <a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/615701-values-for-ascension-upgrades-assistants-mana-regen-and-no-percent-shown">upgrades</a> by <a target="_blank" href="http://www.kongregate.com/accounts/artcrow">artcrow</a>
<p><b>Formula</b>: ((x / 100 + 1)^0.1^(A – 1)) * 100, where x is original bonus in percentage and A is Ascension count.
<h6>Multiplier reduction</h6>
<p> Ascension reduces multipliers for building cost and excavation. 
<p><b>Formula</b>: 1 + (M - 1) / 5, where M is old multiplier. 
<br/>
<br/>
<p><b>----------------------------------</b>
<p><b>Second Ascension</b>: (A2 R100+)

<?php include "../scripts/footer.html"; ?>
