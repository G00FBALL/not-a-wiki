---
layout: default
---

###### [![](/realm/img/picks/ResearchTopPage.png)](/realm/ResearchUpgrades/)

###### Assistant Research Upgrade Slots

**Spellcraft**

**S225** - **For**: Undead - **Research Name**: Necromancy 

**Requirement**: Research Resurrection (D175) &amp; Cryomancy (S200) 

**Cost**: 2.087 QaQig (2.087E165) 

**Effect**: Increase the production of assistants based on the amount of Necropolises you own. 

**Formula**: round(5 * x^0.75)%, where x is the number of Necropolises you own.

&nbsp;

**S375** - **For**: Faceless - **Research Name**: Illusion 

**Requirement**: Research Reverberation (S330) &amp; Mesmerization (S305) 

**Cost**: 541 DSxg (5.41E191) 

**Effect**: Brainwave also provides progressively more assistants over its duration. 

**Formula**: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes.

---

**Craftsmanship**

**C305** - **For**:  All Factions - **Research Name**: Golemcraft 

**Requirement**: 5 days as Titans(Total across all R) 

**Cost**: 255.2 OcQig (2.552E179) 

**Effect**: Gain additional assistants based on your total time spent offline (in hours). 

**Formula**: floor(2 * x^0.5), where x is your Time Spent Offline (Total) stat.

&nbsp;

**C1325** - **For**:  All Factions - **Research Name**: Plasmation

**Requirement**: 50m (50e6) Mana Produced (This game)

**Cost**: 601.6 Tvg (6.016E74)

**Effect**: Gain assistants based on mana produced in this game.

**Formula**: floor(1.25 * ln(1 + x)^2), where x is mana produced (this game).

---

**Divine**

**D175** - **For**:  Angel - **Research Name**: Resurrection 

**Requirement**: Research Blessing (D1) &amp; Refraction (A55) 

**Cost**: 3.273 Uqig (3.273E156) 

**Effect**: You gain additional assistants based on God's Hands activity time. 

**Formula**: floor(0.45 * (0.15 * x)^0.6), where x is God's Hands Cast Time Activity(This game).

&nbsp;

**D250** - **For**:  All Factions - **Research Name**: Demonology 

**Requirement**: Research Transcendence (D200) &amp; Pyromancy (S150) 

**Cost**: 52.7 Qiqig (5.27E169) 

**Effect**: Gain additional assistants based on the amount of Faction Coins found in this game. 

**Formula**: floor(ln^1.3(1 + x)), where x is your Faction Coins Gained (This Game) stat.

&nbsp;

**D320** - **For**:  All Factions - **Research Name**: Deliverance 

**Requirement**: 350 m/s Mana Regen 

**Cost**: 1.117 NoQig (1.117E180) 

**Effect**: Increase assistants production based on mana regeneration. 

**Formula**: round(20 * x^0.85)%, where x is your Mana per Second stat.

&nbsp;

**D350** - **For**:  Titan - **Research Name**: Descent 

**Requirement**: Research Swarming (W250) &amp; Heroism (W330) 

**Cost**: 21.42 USxg (2.142E187) 

**Effect**: Gain additional assistants based on the amount of Olympian Halls you own. 

**Formula**: floor(x^0.5), where x is the number of Olympian Halls you own.

---

**Economics**

**E25** - **For**:  Elf - **Research Name**: Commerce 

**Requirement**: 100 M (1E8) Faction Coins (Found this Game)

Cost: 12.63 Dqag (1.263E130) 

**Effect**: Gain additional assistants based on the amount of Royal Exchanges you purchased. 

**Formula**: floor((1 + 6x)^0.5 - 1), where x is your Royal Exchanges Made stat.

&nbsp;

**E590** - **For**:  Goblin,Drow - **Research Name**: Slavery 

**Requirement**: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480) 

**Cost**: 39.16 QiSpg (3.916 E229) 

**Effect**: Gain additional assistants based on the amount of Evil buildings you own. 

**Formula**: floor(x/300)^1.05, where x is the number of Non Unique Buildings you own.

&nbsp;

**E3300** - **For**:  Mercenary - **Research Name**: Hirelings 

**Requirement**: (Intimidation E1325) and (Scholarship S2875).  

**Cost**: 454.5 TSxg (4.545e194) 

**Effect**: Gives assistants based on the amount of coins you own.

**Formula**: 2 * log10(x + 1) additive

---

**Alchemy**

**A120** - **For**:  All Factions - **Research Name**: Vivification 

**Requirement**: Have 6500 mana 

**Cost**: 676 Spqag (6.76E146) 

**Effect**: Gain additional assistants based on max mana. 

**Formula**: floor(x/15)^0.825), where x is your maximum mana.Tip: Use Fairy with Faceless bloodline.

&nbsp;

**A375** - **For**:  Druid - **Research Name**: Transfusion 

**Requirement**: Research Infusion (A251) &amp; Engraving (A305) 

**Cost**: 541 DSxg (5.41E191) 

**Effect**: Gain additional assistants based on mana produced this game. 

**Formula**: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.

&nbsp;

**A495** - **For**:  Dwarf - **Research Name**: Elixirs 

**Requirement**: 500 Base Assistants (as Drow) 

**Cost**: 731.4 NoSxg (7.314E212) 

**Effect**: Increase assistants production based on the amount of research made. 

**Formula**: 120 * x^0.42%, where x is the Amount of Researches made.

---

**Warfare**

**W175** - **For**:  Demon - **Research Name**: Overwhelm 

**Requirement**: Research Assault (W1) &amp; Invasion (W150) 

**Cost**: 3.273 Uqig (3.273E156) 

**Effect**: You gain additional assistants based on total amount of evil spells cast. 

**Formula**: floor(0.75 * x ^ 0.6), where x is the amount of evil spells cast.

&nbsp;

**W200** - **For**:  All Factions - **Research Name**: Crusade 

**Requirement**: Research Hallowing (D50) &amp; Formation (W180) 

**Cost**: 82.65 Dqig (8.265E160) 

**Effect**: Gain additional assistants based on total time spent as Good. 

**Formula**: floor(0.065 * x^0.5), where x is your Time Spent Being Good (Total) stat.

&nbsp;

**W250** - **For**:  All Factions - **Research Name**: Swarming 

**Requirement**: Research Overwhelm (W175) &amp; Berserking (W205) 

**Cost**: 52.7 Qiqig (5.27E169) 

**Effect**: Gain additional assistants based on the amount of trophies you unlocked. 

**Formula**: floor(x / 8), where x is the amount of trophies unlocked.

&nbsp;

**W520** - **For**:  Drow - **Research Name**: Stalking 

**Requirement**: Research Exertion (W50) and Ambush (W405) 

**Cost**: 18.47 Uspg (1.847E217) 

**Effect**: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)

&nbsp;

**W590** - **For**:  Demon,Drow - **Research Name**: Torture 

**Requirement**: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520) 

**Cost**: 39.16 QiSpg (3.916E229) 

**Effect**: Increase assistants production based on total time spent being Evil. (This R) 

**Formula**: 8 * x^0.8%, where x is your Time Spent Being Evil stat.
