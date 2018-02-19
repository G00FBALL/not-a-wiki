---
layout: default
---

###### ![](/realm/img/picks/ResearchTopPage.png)

###### Mercenary Research

![](/realm/img/picks/MercenaryEncampmentQuest.png "Mercenary Encampment Quest") **Mercenary Encampment Quest**

We salute you, commander. Your strategical skills had not gone unnoticed within our ranks. We have decided to offer you a chance to establish a formal encampment within your boundaries... Build more structures to strengthen our city.

**Requirement**: Mercenary (Any Alignment), 125000 buildings

**Cost**: 10 Notg (1e121)

**Note**: Only needs bought once.

**Unlocks**: Mercenary Unique Buildings

---

**Unique Buildings**

**Good**

![](/realm/img/picks/MercenaryCamp.png "Mercenary Camp") **Mercenary Camp**

**Requirement**: Mercenary Encampment Quest

**Cost**: 100 Qag (1e125)

**Effect 1**: Allows access to Research Facilities

**Effect 2**: Upgrade Knights Jousts to Mercenary Camps, boosting their production based on the amount of Non-Unique buildings you own and unlocking more unique perks for the building.

**Formula**: 1.5 * (1 + x), where X is number of Non-Unique Buildings.

**Effect 3**: Unlocks Round Table

![](/realm/img/picks/RoundTable.png "Round Table") **Round Table** (Spell Upgrade)

**Requirement**: Mercenary Camp

**Cost**: 1 Qaqag (1e135)

**Effect 1**: Gives 1 additional upgrade from any of the Good factions. 

**Effect 2**: Upgrades Tax Collection spell to Share Benefits. Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 35 tiers.

**Faction Spell**: Tax Collection

![](/realm/img/picks/ShareBenefits.png "Round Table") **Good**

**Requirement**: Mercenary Camp

**Cost**: 1 Qaqag (1e135)

**Effect**: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 35 tiers.

**Formula**: 120 ^ (0.25 * t), where t is tier (FC chance multiplier)

**Formula**: ((2.20 ^ T) - 1) * 100, multiplicative (production multiplier)

&nbsp;

![](/realm/img/picks/GoodMercenaryUpgrade13.png "Round Table") **Good Mercenary Upgrade 13**

You can purchase any upgrade from any Good Faction for an increased price

**Requirement**: Round Table (Good Spell Upgrade)

&nbsp;

**Evil**

![](/realm/img/picks/TyrantGarrison.png "Tyrant Garrison") **Tyrant Garrison**

**Requirement**: Mercenary Encampment Quest

**Cost**: 100 Qag (1e125)

**Effect 1**: Allows access to Research Facilities

**Effect 2**: Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.

**Effect 3**: Unlocks Dark Covenant

**Formula**: 0.5 * log10(1+x) ^ 4.5, where x is Offline Production Bonus

![](/realm/img/picks/ReapInterests.png "Tyrant Garrison") **Evil**

**Requirement**: Tyrant Garrison

**Cost**: 1 Qaqag (1e135)

**Effect**: Additional casts of Reap Interests increase its seconds worth of production.

**Formula**: y ^ (1 + 0.2 * Log10(1 + x)), where y is TC original power and x is amount of TC casts, where y is TC original power and x is amount of TC casts

**Note**: Extra time from reap interests does apply to S50.

**Note**: S50 tax collections do increase reap interests.

&nbsp;

![](/realm/img/picks/DarkCovenant.png "Dark Covenant") **Dark Covenant** (Spell Upgrade)

**Requirement**: Tyrant Garrison

**Cost**: 1 Qaqag (1e135)

**Effect 1**: Gives 1 additional upgrade from any of the Evil factions. 

**Effect 2**: Upgrades Tax Collection spell to Reap Interests Additional casts of Reap Interests increase its seconds worth of production.

![](/realm/img/picks/EvilMercenaryUpgrade13.png "Round Table") **Evil Mercenary Upgrade 13**

You can purchase any upgrade from any Evil Faction for an increased price.

**Requirement**: Tyrant Garrison (Evil Spell Upgrade)

&nbsp;

**Neutral**

![](/realm/img/picks/Freemason'sHall.png "Freemason's Hall") **Freemason's Hall**

**Requirement**: Mercenary Encampment Quest

**Cost**: 100 Qag (1e125)

**Effect 1**: Allows access to Research Facilities

**Effect 2**: Upgrade Alchemist Labs to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.

**Formula**: (2 * x^0.95), where x is assistants you had in a single game (This R)

**Effect 3**: Unlocks Secret Exchange

![](/realm/img/picks/SecretExchange.png "Secret Exchange") **Secret Exchange** (Spell Upgrade)

**Requirement**: Freemason's Hall

**Cost**: 1 Qaqag (1e135)

**Effect**: Upgrades Tax Collection spell to Appraisal Vantage, Generates additional Faction Coins per cast

![](/realm/img/picks/AppraisalVantage.png "Freemason's Hall") **Neutral**

**Requirement**: Freemason's Hall

**Cost**: 1 Qaqag (1e135)

**Effect**: Generates additional Faction Coins per cast

**Formula**: (2.5 * x^2.5), where x is original Faction Coin chance.

&nbsp;

![](/realm/img/picks/ObsidianShardArtifact.png "Secrets of the Warriors") **Obsidian Shard**

**Requirement**: 8000th Excavation as any Faction, R75+

**Description**: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.

**Effect**: Unlocks Secrets of the Warriors

&nbsp;

![](/realm/img/picks/SecretsoftheWarriors.png "Secrets of the Warriors") **Secrets of the Warriors**

**Requirement**: Obsidian Shard

**Cost**: 100 Qiqag (1e140) and 10 Qa (1e16) of every Faction Coin.

**Effect**: Unlocks Researches for Mercenaries and increases their production by 1000%.

---

**Research**

**S2875**: For Mercenary - Spell Name: Scholarship

**Requirement**: 12000 Freemason's Halls.

**Cost**: 7.26 Qiqag (7.26e168)

**Effect**: Increases the production of Non-Unique buildings by 0.4% per Unique building.

&nbsp;

**S3200**: For All Factions - Spell Name: Manipulation

**Requirement**: 1B (1e9) Tax Collection cast, (Calefaction A1325) and (Psionics S1500).

**Cost**: 387 USsx (3.87.188)

**Effect**: Each active spell increases mana regen by an additional 8% (good merc TC tiers also count).

---

**C3000**: For Mercenary - Spell Name: Customizing

**Requirement**: 9000 Excavations as Mercenary.

**Cost**: 280.7 SpQig (2.807e176)

**Effect**: Increases the production of all buildings based on the amount of artifacts you own.

**Formula**: 1.75 * x ^ 1.75, where X is artifacts.

&nbsp;

**C3100**: For All Factions - Spell Name: Engineering

**Requirement**: 15 days Mercenary time spent (Total).

**Cost**: 329.6 NoQig (3.296e182)

**Effect**: Increase maximum mana based on the total amount of clicks made (This R).

**Formula**: (7.5 * log10(x + 1))^2.15, where x is clicks made

---

**D2775**: For Mercenary - Spell Name: Intervention

**Requirement**: Secrets of the Warriors.

**Cost**: 6.182 TQig (6.182e162)

**Effect**: Increases the production of Unique Building based on time spent with Mercenaries.

**Formula**: 0.1 * x ^ 0.7

&nbsp;

**D3350**: For All Factions - Spell Name: Vampirism

**Requirement**: 1QA% (1e15) offline bonus, (Intervention D2775) and (Upheaval W3150).

**Cost**: 492.5 QaSxg (4.925e197)

**Effect**: Increases offline production based on the amount of Reincarnations you made.

**Formula**: 1.7 * x ^ 1.7

---

**E3250**: For Mercenary - Spell Name: Estates

**Requirement**: 50000 Unique buildings, (Hoarding E1225) and (Combination A2950).

**Cost**: 419.4 DSxg (4,194e191)

**Effect**: Gives you all the Unique Buildings of your alignment.

**Effect**: Also unlocks all researches involving these unique buildings.

&nbsp;

**E3300**: For All Factions - Spell Name: Hirelings

**Requirement**: (Intimidation E1325) and (Scholarship S2875).

**Cost**: 454.5 TSxg (4.545e194)

**Effect**: Gives assistants based on the gold you have.

**Formula**: 2 * log10(x + 1) additive

---

**A2950**: For Mercenary - Spell Name: Combination

**Requirement**: All Lineages Level at 15.

**Cost**: 259 SxQig (2.59e173)

**Effect**: Select an aditional bloodline.

**Effect**: You also gain all the base effect of its respective Lineage.

&nbsp;

**A3400**: For All Factions - Spell Name: Chemistry

**Requirement**: 1 No (1e30) FC, (Customizing C3000) and (Manipulation S3200).

**Cost**: 533.7 QiSxg (5.337e200)

**Effect**: Increases Faction Coin find chance based on the total amount of Lineage levels you have.

**Effect**: Also increases Faction Coin find chance by a multiplicative 350%.

**Formula**: 3 * x ^ 2.25, where x is total Lineage levels.

---

**W3050**: For Mercenary - Spell Name: Flanking

**Requirement**: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325).

**Cost**: 304.1 OcQig (2.146e179)

**Effect**: Increases the production of buildings one tiers directly above or below a Unique Building based on the amount of assistants you own.

**Formula**: 0.15 * x ^ 0.8, where X is assistants.

&nbsp;

**W3150**: For All Factions - Spell Name: Upheaval

**Requirement**: 60000 Enchanted Fields, Inns and Dwarven Forges.

**Cost**: 357.2 Sxg (3.572e185)

**Effect**: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.

**Formula**: 50 * (12-T)^2.15, where T is building tier. 
