---
layout: default
---

###### [![](/realm/img/picks/ResearchTopPage.png)](/realm/ResearchUpgrades/)

**Spellcraft**

**S50** - **For**: Goblin - **Research Name**: Conjuration 

**Requirement**: Have 6000 mana (as Fairy) (This Game)

**Cost**: 318.8 Tqag (3.188E134) 

**Effect**: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own. 

**Effect**: Also increases offline spell cast amount by multiplicatively by 150%. 

**Formula**: floor(x /650), where x is the number of Goblin Banks you own.

---

**Craftsmanship**

**C105** - **For**: All Factions - **Research Name**: Woodcraft 

**Requirement**: 25,000 clicks (This Game) 

**Cost**: 1.544 Spqag (1.544E144) 

**Effect**: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own. 

**Formula**: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.

&nbsp;

**C250** - **For**: All Factions - **Research Name**: Magnetism 

**Requirement**: Research Tinkering (C150) &amp; Critical Strike (W225). 

**Cost**: 52.7 Qiqig (5.27E169)

**Effect**: Increase the chance to find Faction Coins by a multiplicative 50%

**Effect**: Increase the chance to find faction coins based on total time spent offline. (in minutes) 

**Formula**: floor(2.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.

&nbsp;

**C400** - **For**: All Factions - **Research Name**: Gravitation 

**Requirement**: Research Magnetism (C250) &amp; Weighting (C300) 

**Cost**: 13.66 QaSxg (1.366E196) 

**Effect**: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.

**Effect**: Also increase the chance to find Faction Coins by a multiplicative 175%.

**Formula**: floor(3.5 * ln^3(x + 1)), where x is your Faction Coins Gained (This Game) stat.

&nbsp;

**C520** - **For**: Dwarf - **Research Name**: Blacksmithing 

**Requirement**: Research Reinforcing (C135) &amp; Metallurgy (C405) 

**Cost**: 18.47 USpg (1.847E217) 

**Effect**: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarvin Forges you own. 

**Effect**: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarvin Forges you own. 

**Formula**: Clicking Reward: 2.5 * x^0.3%, where x is the number of Dwarven Forges you own.

**Formula**: Diamond Pickaxe: 20 * x^0.4%, where x is the number of Dwarven Forges you own.

---

**Divine**

**D50** - **For**: Elf - **Research Name**: Hallowing 

**Requirement**: 15,000 Good Buildings(as Angel) 

**Cost**: 318.8 Tqag (3.188E134) 

**Effect**: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own. 

**Formula**: floor(5 * x^0.85)%, where x is the number of Elven Training Grounds you own.

&nbsp;

**D150** - **For**: All Factions - **Research Name**: Retribution 

**Requirement**: Research Betrayal (W120) &amp; Transfixion (D55). 

**Cost**: 129.6 Noqag (1.296E152) 

**Effect**: Increase chance to find faction coins based on the amount of research made. 

**Formula**: floor(0.05 * x ^ 1.25), where x is the amount of research made.

---

**Economics**

**E30** - **For**: All Factions - **Research Name**: Diplomacy 

**Requirement**: 1000 Exchanges (This Game)

**Cost**: 95.88 Dqag (9.588E130) 

**Effect**: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game. 

**Formula**: Faction Coin Chance: floor(1.5 * x^1.05)% 

**Formula**: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).

&nbsp;

**E145** - **For**: All Factions - **Research Name**: Royal Demand 

**Requirement**: 5,000 Tax Collections (This R), Research Cultivation (C10) &amp; Woodcraft (C105) 

**Cost**: 17.07 Noqag (1.707E151) 

**Effect**: Increase Tax Collection reward by 30 seconds of production.

---

**Alchemy**

**A305** - **For**: All Factions - **Research Name**: Engraving 

**Requirement**: 5 days as Druids (Total across all Rs)

**Cost**: 255.2 OcQig (2.552E179) 

**Effect**: Increase your chance to find Faction Coins based on the amount of spells cast in this game.

**Effect**: Also increase Faction Coins find chance by a multiplicative 100%.

**Formula**: floor(3.5 * logE(1+x) ^ 3.5)%, where x is your Spells Cast (This Game) stat, 

 or approximately

**Formula**: floor((ln(x) + 0.69)^{2.75})%, where x is your Spells Cast (This Game) stat.

&nbsp;

**A3400** - **For**: Any - **Research Name**: Chemistry 

**Requirement**: 1 No (1e30) FC (Found this Game), (Customizing C3000) and (Manipulation S3200).  

**Cost**: 533.7 QiSxg (5.337e200) 

**Effect**: Increases Faction Coin find chance based on the total amount of Lineage levels you have.

**Effect**: Also increases Faction Coin find chance by a multiplicative 350%.

**Formula**: 3 * x ^ 2.25, where x is total Lineage levels.

---

**Warfare**

**W50** - **For**: Undead - **Research Name**: Exertion 

**Requirement**: 2 days of Evil Play Time, Note: Play as any Evil faction, but you must be Demon to unlock this. 

**Cost**: 318.8 Tqag (3.188E134) 

**Effect**: Increase faction coin find chance based on the number of Undercities you own. 

**Formula**: (floor(6.5x^0.65))%, where x is the number of Undercities you own.

&nbsp;

**W275** - **For**: Faceless - **Research Name**: Domination 

**Requirement**: 300 Base Assistants (as Faceless) 

**Cost**: 1.331 SpQig (1.331E174)

**Effect**: Gain additional Faction Coins per second based on the highest amount of assistants you had in a single game.

**Effect**: Also a 50% multiplicative Faction Coin find chance.

**Formula**: floor(125 * x&^0.75), where x is your Assistants (Max) stat.

&nbsp;

**W1375** - **For**: Any - **Research Name**: Scavenging

Requirement: 86400s 7 days spent as evil (Across all Rs)

**Cost**: 651.9 Qavg (6.519E77)

**Effect**: Increases Faction Coin find chance by a multiplicative 275%.

**Effect**: Increase the chance to find Faction Coins based on the amount of assistants you own.

**Formula**: (2500 * x^0.425), where x is assistants
