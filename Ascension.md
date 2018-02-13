---
layout: default
---

###### ![Ascend](/realm/img/picks/Reset-Ascend.png "Ascend")

###### Description

At R39 and R99 the Reincarnation Button will say Ascension.

Ascending will reset all the progress a Reincarnation would reset. 

It will not reset your Reincarnation count, and then will revert back to the Reincarnate button for Reincarnation 40 and Reincarnation 100 with new requisites. 

By Ascending you will unlock a new main currency, Diamond Coins at R40, and Emerald Coins at R100 that will be used for post-ascension upgrades and features, resulting in much smaller numbers. 

All upgrades that previously cost Gold Coins will be free, and the formulas for subsequent Reincarnations will change to allow continued progress. All Gifts bonuses, Scry Rewards, Ruby bonuses, Event bonuses and Gem bonuses will NOT be affected by the Ascension reduction.

Ascension is a third kind of soft reset. It was implemented to overcome the limit computers have with very big numbers. All the values were shifted to a smaller range to enable the game to progress further.

**Note**: It is strongly advised to get most, if not all, the trophies, challenges and artifacts possible before ascending (5k buildings, Stoic Resistance etc. Post-ascension, it may take a long time to reach the necessary requirements again.

###### Diamond coins

Everything will appear the same, but the gold coins will disappear, everything that used to cost gold coins will become either free, or are converted to Diamond coins. Early upgrades, faction and research upgrades will be free to a certain point. Buildings and excavations will still cost coins, but Diamond coins.

**WARNING!** It is imperative to ascend before reaching 18.96 Ocqag (1.896E148) gems or 179.7 Uc (1.797E308) gold. If you go above, your game will start to bug. (source)

###### Income Shift

**First Ascension**: (A1 R40-R99)

Gem Requirement Post Ascension 1e27^(ascension^0.75) * 100^(R - 40)

The relation between gold and gems scales the same at 0.5 – 1 million x coins = 1,000x gems.

**Formula**: (sqrt(1 + 8 * c / 1e12) - 1) / 2

The bonus formulas of upgrades will all be shifted to a lower range, resulting in many 2 number bonuses.

Ascension reduces each income boost by raising the respective multiplier to the 1/10 power. For instance, the 6000% of S330 is a 61x multiplier; 61 ^ 0.1 = 1.508, so it's a 50.8% percent increase post-ascension. (by [heeheehee](http://www.kongregate.com/forums/8945-realm-grinder/topics/613680#posts-10289299)), Resulting in the need to change and adapt the Mercenary and research builds.

Ascend [preview](http://www.kongregate.com/forums/8945-realm-grinder/topics/607644) forum post by [Kraide](http://www.kongregate.com/accounts/Kraide)

Values for ascension [upgrades](http://www.kongregate.com/forums/8945-realm-grinder/topics/615701-values-for-ascension-upgrades-assistants-mana-regen-and-no-percent-shown) by [artcrow](http://www.kongregate.com/accounts/artcrow)

**Formula**: ((x / 100 + 1)^0.1^(A – 1)) * 100, where x is original bonus in percentage and A is Ascension count.

###### Multiplier reduction

Ascension reduces multipliers for building cost and excavation. 

**Formula**: 1 + (M - 1) / 5, where M is old multiplier. 

**----------------------------------**

**Second Ascension**: [(A2 R100+)](/realm/Ascension2)
