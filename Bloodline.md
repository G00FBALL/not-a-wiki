---
layout: default
---

###### ![Bloodline](/realm/img/picks/BloodlineTopPage.png "Bloodline")

###### The Bloodline

This upgrade appears at the 7th reincarnation and requires to have bought a total of 100 "Faction upgrades" of each faction, total across reincarnations. Upgrades such as Trade Treaties, Friendship Pacts, Alliances, Heritages and Spell Upgrades all count towards this.

This upgrade enables to choose a Faction Bloodline, giving a kind of cross-faction perk that resets at abdications.

**Cost**: Free

**Trophy & Upgrade**

![Bloodstream](/realm/img/picks/BloodstreamSecretTrophy.png "Bloodstream") **Bloodstream**

Unlocking all Faction Bloodlines grants the Bloodstream Secret Trophy, which in turn grants the Bloodstream upgrade.

**In-game description**: Increase the production of all buildings based on the time spent as faction of the bloodline you are using. While you are Mercenary, a fraction of the total time spent as mercenary is added to your Bloodstream bonus based on the amount of mercenary upgrades purchased in this game from the faction of the bloodline you are using.

**Cost**: 1Tg (1e93 coins)

**Effect**: Increases the production of all buildings based on the total time allied with the faction bloodline you are playing. ('Time Spent Allied with' at the bottom of the stats)

**Formula**: 0.1 * x^0.65%, where x is your (adjusted) time spent affiliated with the bloodline's faction in seconds.

**R28+**: Starting from R28, you might get Bloodspring research upgrade, that will grant you bloodline of the faction you're currently playing, in addition to the bloodline that you have chosen by basic upgrade.

---

![Fairy](/realm/img/picks/FairyBloodline.png "Fairy") **Fairy**

**Effect**: Increase the production of Farm, Inn and Blacksmith based on the assistants you own.

**Formula**: 250 * x^0.9%, where x is the number of assistants you have.

---

![Elven](/realm/img/picks/ElvenBloodline.png "Elven") **Elven**

**Effect**: Increase the chance to find Faction Coins based on Faction Coins found in this game and autoclick 3 times per second. Autoclicks made this way benefit from a 100 times higher clicking reward and Faction Coin find chance.

**Formula**: floor(15 * ln(1 + x)^1.75), where x is number of Faction Coins found in this game.

---

![Angel](/realm/img/picks/AngelBloodline.png "Angel") **Angel**

**Effect**: Increase mana regeneration based on spells cast this game.

**Formula**: (1.31 * x ^ 0.31), where x is spell casts (this game)

---

![Goblin](/realm/img/picks/GoblinBloodline.png "Goblin") **Goblin**

**Effect**: Reduce all building cost multipliers.

Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.

---

![Undead](/realm/img/picks/UndeadBloodline.png "Undead") **Undead**

**Effect**: Gain additional assistants based on the amount of times you reincarnated.

**Formula**: floor(8 * x^0.8), where x is the number of times you have reincarnated.

---

![Demon](/realm/img/picks/DemonBloodline.png "Demon") **Demon**

**Effect**: Increase production bonus from gems based on total time spent being Evil.

**Formula**: floor(0.04 * x^0.8)%, where x is your Time Spent Being Evil (Total) in seconds stat.

---

![Titan](/realm/img/picks/TitanBloodline.png "Titan") **Titan**

**Effect**: Increase the production of all buildings based on the amount of Royal Exchanges you purchased.

**Formula**: 15 * x^0.85%, where x is the amount of Royal Exchanges you own.

---

![Druid](/realm/img/picks/DruidBloodline.png "Druid") **Druid**

**Effect**: Increase mana regeneration based on maximum mana.

**Formula**: 0.03 * x ^ 0.9, where m is your maximum mana.

---

![Faceless](/realm/img/picks/FacelessBloodline.png "Faceless") **Faceless**

**Effect**: Increase maximum mana based on mana produced in this game.

**Formula**: floor(30 * (log10(1 + x) ^ 3.5), where x is your Mana Produced (This Game) stat.

---

![Dwarf](/realm/img/picks/DwarvenBloodline.png "Dwarf") **Dwarf**

**Effect**: Increase the production of all buildings based on the amount of excavations you made.

**Formula**: 10 * x^0.8%, where x is your number of excavations purchased.

---

![Drow](/realm/img/picks/DrowBloodline.png "Drow") **Drow**

**Effect**: Multiplicatively increase the chance to find Faction Coins based on time spent in this game.

**Formula**: 1.6 * x^0.6, where x is time spent in this game in seconds.

---

![Dragon](/realm/img/picks/DragonBloodline.png "Dragon") **Dragon**

**Effect**: Increase the production of all buildings based on Faction Coin find chance.

**Formula**: 4 * (x ^ 0.4), where x is Faction Coin find chance.
