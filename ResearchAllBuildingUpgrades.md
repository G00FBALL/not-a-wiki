---
layout: default
---

###### [![](/realm/img/picks/ResearchTopPage.png)](/realm/ResearchUpgrades/)

###### All other Building Research Upgrade Slots

**Spellcraft**

**S175** - **For**: Elf - **Research Name**: Empowered Luck 

**Requirement**: Research Blessing (D1) & Augmentation (S135) 

**Cost**: 3.273 UQig (3.273E156) 

**Effect**: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.

&nbsp;

**S200** - **For**: All Factions - **Research Name**: Cryomancy 

**Requirement**: Research Conjuration (S50) and Refraction (A55) 

**Cost**: 82.65 DQig (8.265E160) 

**Effect**: Increase the production of all buildings based on your current mana (the less mana, the better bonus). 

**Formula**: round((100-x)^1.75)%%, where x is percentage of max mana.

&nbsp;

**S270** - **For**: All Factions - **Research Name**: Runecarving 

**Requirement**: 500,000 clicks (This game) 

**Cost**: 175.2 SxQig (1.752E173) 

**Effect**: Increase the production of all buildings based on your bonus from Gems. 

**Formula**: round(1.15 * x^0.75)%, where x is your gem bonus.

&nbsp;

**S300** - **For**: Titan - **Research Name**: Chain Lightning 

**Requirement**: 25 Brainwaves (Faceless) (This R) 

**Cost**: 33 OcQig (3.36E178) 

**Effect**: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game. 

**Formula**: round(120 * x^0.8)%, where x is your Lightning Strikes cast (This Game) stat.

&nbsp;

**S305** - **For**: All Factions - **Research Name**: Mesmerization 

**Requirement**: 5 days as Faceless (Total across all R) 

**Cost**: 225.2 OcQig (2.252E179) 

**Effect**: Increase the production of all buildings by a fraction of your offline production bonus. 

**Formula**: 2.5  * log(1 +x)^2.5, where x is your (pre-Ascension) offline production bonus as a multiplier.

&nbsp;

**S330** - **For**: All Factions - **Research Name**: Reverberation 

**Requirement**: Research Cryomancy (A200) &amp; Weather Control (D225) 

**Cost**: 6.443 Sxg (6.443E183) 

**Effect**: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus. 

**Formula**: 375 * 2^x%, where x is the number of spells currently active.

&nbsp;

**S460** - **For**: All Factions - **Research Name**: Focus 

**Requirement**: 25000 spells cast (This game) 

**Cost**: 5.023 SpSxg (5,023E206) 

**Effect**: Increase the production of all buildings based on the times you cast your faction spell in this game. 

**Formula**: 15 * x^0.8%, where x is Faction Spells Cast This Game (Vanilla + Prestige spell count).

&nbsp;

**S545** - **For**: All Factions - **Research Name**: Hierarchy 

**Requirement**: 10M (1E7) mana produced (This Game)

**Cost**: 466.3 DSpq (4.663E221) 

**Effect**: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers. 

**Formula**: (0.1 * x^0.45 * T^2)%, where x is Mana Produced (This Game) stat, and T is the building tier, starting at 11 for Farms and decreasing to 1 for Halls of Legends.

---

**Craftsmanship**

**C135** - **For**: All Factions - **Research Name**: Reinforcing 

**Requirement**: 250,000 clicks (This Game, as Elf) 

**Cost**: 296 Ocqag (2.96E149) 

**Effect**: Increase the production of all buildings based on your total number of clicks. 

**Formula**: (ln(1 + x))^2.75%, where x is your Treasure Clicks (Total) stat.

&nbsp;

**C150** - **For**: All Factions - **Research Name**: Tinkering 

**Requirement**: Research Recycling (E10) &amp; Reinforcing (C135) 

**Cost**: 129.6 Noqag (1.296E152) 

**Effect**: Increase the production of all buildings based on the amount of research made. 

**Formula**: round(125 * x^0.38)%, where x is number of researches made.

&nbsp;

**C1500** - **For**: Titan,Dragon - **Research Name**: Gargantuaness

**Requirement**: 2500 Royal Exchanges Research E460, D1275 (As Titans)

**Cost**: 25 Spvg (2.52E85)

**Effect**: Increase the production of all buildings based on total time spent as Neutral.

**Formula**: (1.5 * x)^0.7, where x is neutral time (this R) in minutes.

&nbsp;

**C3000** - **For**: Mercenary - **Research Name**: Customizing 

**Requirement**: 9000 Excavations as Mercenary. 

**Cost**: 280.7 SpQig (2.807e176) 

**Effect**: Increases the production of all buildings based on the amount of artifacts you own.

**Formula**: 1.65 * x ^ 1.65, where X is artifacts

---

**Divine**

**D25** - **For**: Undead - **Research Name**: Cursing 

**Requirement**: Play 8 hours Offline (as Undead) (This Game)

**Cost**: 12.63 Dqag (1.263E130) 

**Effect**: Increase the production of all buildings based on your offline production bonus. 

**Formula**: 2.75 * log(1 + x)^2.75, where x is your offline production bonus.

&nbsp;

**D480** - **For**: All Factions - **Research Name**: Mercy 

**Requirement**: 12h Spent as each Good, Evil and Neutral alignment (This R) 

**Cost**: 1.67 NoSxg (1.67E210) 

**Effect**: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus. 

**Formula**: 100000 * (min_time / max_time)^1.5%, where tminis shortest  Time Spent Being Alignment and tmax is longest Time Spent Being Alignment (Total) Stat.

&nbsp;

**D1275** - **For**: All Factions - **Research Name**: Solemnity

**Requirement**: 100000 Total Buildings

**Cost**: 555.1 Dvg (5.551E71)

**Effect**: Increase the production of each building by + 0.3% per building of the same type.

---

**Economics**

**E10** - **For**: Undead - **Research Name**: Recycling 

**Requirement**: 2,000 Undercities 

**Cost**: 28.83 Uqag (2.883E127) 

**Effect**: Increase the production of all other buildings by 95% per Undercity you own.

&nbsp;

**E150** - **For**: All Factions - **Research Name**: Investment 

**Requirement**: Research Bribing (E135) &amp; Commerce (E25) 

**Cost**: 129.6 Noqag (1.296E152) 

**Effect**: Increase the production of all buildings based on the amount of coins you own. 

**Formula**: round( (ln(1 + x)) ^1.25 )%, where x is the amount of gold you own.

&nbsp;

**E200** - **For**: All Factions - **Research Name**: Acquisition 

**Requirement**: Research Investment (E150) &amp; Common Business (E80) 

**Cost**: 82.65 Dqig (8.265E160) 

**Effect**: Increase the production of all buildings based on your percentage of trophies unlocked. 

**Formula**: round(0.0003 * (100 * x)^3.35), where x is trophiesunlocked / trophiesmax.

&nbsp;

**E260** - **For**: Druid - **Research Name**: Sifting 

**Requirement**: 3,000 Stonehenge Circles 

**Cost**: 3.039 SxQig (3.039E171) 

**Effect**: Increase the production of all other buildings based on the amount of Stone Pillars you own.

**Formula**: (100 * x), where x is Stone Pillars

&nbsp;

**E330** - **For**: All Factions - **Research Name**: Collection 

**Requirement**: Research Acquisition (E200) &amp; Forgery (E225a) 

**Cost**: 6.443 Sxg (6.443E183) 

**Effect**: Increase the production of all buildings based on the amount of artifacts you found. 

**Formula**: round(50 * x^1.1)%, where x is the amount of artifacts found.

&nbsp;

**E350** - **For**: Faceless - **Research Name**: Repurpose 

**Requirement**: Research Journeymen (C200) &amp; Adaptation (A330)(as Faceless) 

**Cost**: 21.42 USxg (2.142E187) 

**Effect**: Increase the production of all buildings based on the amount of Reincarnations you made. 

**Formula**: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.

---

**Alchemy**

**A105** - **For**: All Factions - **Research Name**: Fusion 

**Requirement**: 2750 Blacksmiths 

**Cost**: 1.544 Spqag (1.544E144) 

**Effect**: Increases the production of buildings based on the amount of Faction Coins found this game. 

**Formula**: round(0.7 * ln^3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.

&nbsp;

**A135** - **For**: All Factions - **Research Name**: Decay 

**Requirement**: 1 Day Total Play Time any Faction (This R) (Must be Undead to unlock once condition is met.)

**Cost**: 296 OcQag (9.6E149) 

**Effect**: Increase the production on all buildings based on total time spent. 

**Formula**: round(c * x^0.7)%, where x is your Playtime (Total) in seconds stat and c is 0.03(2^0.7), which is approximately 0.049.

&nbsp;

**A175** - **For**: Undead - **Research Name**: Soulweaving 

**Requirement**: Research Cursing (D25) &amp; Reinforcing (C135) 

**Cost**: 3.273 Uqig (3.273E156) 

**Effect**: Increase the production of all buildings based on the amount of times you Reincarnated. 

**Formula**: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.

&nbsp;

**A330** - **For**: All Factions - **Research Name**: Adaptation 

**Requirement**: Research Mutation (D260) &amp; Meditation (D275) 

**Cost**: 6.443 Sxg (6.443E183) 

**Effect**: Increase the production of all buildings based on time spent playing as other factions. 

**Formula**: round(0.05 * x^0.7)%, where x is time spent as other factions.

&nbsp;

**A590** - **For**: Undead,Drow - **Research Name**: Hexing 

**Requirement**: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410) 

**Cost**: 39.16 QiSpg (3.916E229) 

**Effect**: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game. 

**Formula**: 0.045 * x^0.45 * p%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.

---

**Warfare**

**W25** - **For**: Goblin - **Research Name**: War Funds 

**Requirement**: 1 Tqag (1E132) Coins Gained (This Game) 

**Cost**: 12.63 Dqag (1.263E130) 

**Effect**: Increase the production of all buildings based on the amount of Tax Collections cast in this game. 

**Formula**: round(5 * x^0.6)%, where x is Tax Collections Cast This Game.

&nbsp;

**W150** - **For**: All Factions - **Research Name**: Invasion 

**Requirement**: Research War Funds (W25) &amp; Trophies (W135) 

**Cost**: 129.6 Noqag (1.296E152) 

**Effect**: Increase the production of all buildings based on the amount of assistants you own. 

**Formula**: round(32 * x^0.75)%, where x is the amount of assistants you own.
