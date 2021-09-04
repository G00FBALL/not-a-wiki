<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6>3.3 Patches/Updates</h6>
        <br/>
        <div class="shlisting">
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.3 July 26, 2018</a></b></p>
                <div class="autohide">
                    <p><b>Changed</b>: Base mana regen</p>
                    <p><b>Old Base</b>: 0.5/sec</p>
                    <p><b>New Base</b>: 1/sec</p>
                    <br/>
                    <p><b>Added</b>: Music</p>
                    <p>Short instrumental music for Good, Evil and Neutral (with and without Proof of Neutrality) alignments.</p>
                    <br/>
                    <p><b>Goblin Invasion</b>: New feat with new reward</p>
                    <br/>
                    <p><b>Added</b>: 25 Building Upgrades</p>
                    <p><b>Requirements</b>: Reach 18000 of each building to get its upgrade.</p>
                    <br/>
                    <p><b>Added</b>: 12 Allegiances Trophies</p>
                    <p><b>Requirements</b>: A2, Level 30 Lineage for each faction and buy all it's faction upgrades.</p>
                    <hr>
                    <p><b>Added</b>: 3 Artifacts</p>
                    <p><b>Effect</b>: Unlocks A2 Tier 2 Spells</p>
                    <p><b>Coin Cost</b>: 123 Qaq (1.23e125) Emerald coins</p>
                    <p><b>FC Cost</b>: 1 Oc (1e27) good/evil faction coins of the alignment and dwarf/drow</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/OilLampArtifact.png" align="middle"> Oil Lamp</b></p>
                    <p><b>Hint</b>: Chaos magic burns brightly.</p>
                    <p><b>Description</b>: Rub it, polish it. And remember to express your desires precisely, lest you want to face dire consequences.</p>
                    <p><b>Requirements</b>: R120+, Proof of Chaos</p>
                    <p><b>Chance</b>: (min(x, y, z) / 1000 days)%, where x is Fairy Chanting spell activity time, y is Hellfire Blast spell activity time, and z is Brainwave spell activity time (all time).</p>
                    <p><b>Effect</b>: Unlocks Tier 2 Maelstrom</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/LanternofGuidanceArtifact.png" align="middle"> Lantern of Guidance</b></p>
                    <p><b>Hint</b>: Massive mana flows can offer guidance.</p>
                    <p><b>Description</b>: Follow the guiding light, o wonderer, for it shall bring you fortune.</p>
                    <p><b>Requirements</b>: R120+, Proof of Order</p>
                    <p><b>Chance</b>: (x / 10,000,000,000 (10B))%, where x is mana regen.</p>
                    <p><b>Effect</b>: Unlocks Tier 2 Temporal Flux</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SparkofLifeArtifact.png" align="middle"> Spark of Life</b></p>
                    <p><b>Hint</b>: The power of Creation may spark something new.</p>
                    <p><b>Description</b>: The spark of Creation, dimly shining from the bottom of its encasing crystal.</p>
                    <p><b>Requirements</b>: R120+, Proof of Balance</p>
                    <p><b>Chance</b>: (ln(1 + x) ^ 2 / 12000)%, where x is FC collected this game.</p>
                    <p><b>Effect</b>: Unlocks Tier 2 All Creation</p>
                    <hr>
                    <p><b>Added</b>: Advanced Heritages for each faction</p>
                    <p><b>Requirements</b>: A2, Lineage Level 30 and buying all upgrades of that faction and 8 hours activity time (This Game) of that Faction's spell</p>
                    <p>When using their lineage, Advanced Heritage powers are multiplied by the level of the lineage.</p>
                    <p><b>Formula</b>: (1 + 0.3 * level)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedFairyHeritage.png" align="middle"> Advanced Fairy Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Fairy Coins</p>
                    <p><b>Effect</b>: Gain assistants based on amount of Farms, Inns and Blacksmiths (additive).</p>
                    <p><b>Formula</b>: (2 * (x + y + z) ^ 0.8), where x is amount of Farms, y is amount Inns and z is amount Blacksmiths.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedElvenHeritage.png" align="middle"> Advanced Elven Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Elven Coins</p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
                    <p><b>Formula</b>: (0.3 * ln(1 + x) ^ 1.5)%, where x is amount of clicks this reincarnation.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedAngelicHeritage.png" align="middle"> Advanced Angelic Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Angel Coins</p>
                    <p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast in this game.</p>
                    <p><b>Formula</b>: (2.5 * x ^ 0.25)%, where x is spells cast this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedGoblinHeritage.png" align="middle"> Advanced Goblin Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Goblin Coins</p>
                    <p><b>Effect</b>: Tax Collections are worth more seconds of production based on Gems owned. (multiplicative).</p>
                    <p><b>Formula</b>: (0.25 * log10(1 + x) ^ 0.95), where x is gems owned.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedUndeadHeritage.png" align="middle"> Advanced Undead Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Undead Coins</p>
                    <p><b>Effect</b>: Assistants count more based on your Offline Bonus.</p>
                    <p><b>Formula</b>: (0.018 * log10(1 + x) ^ 2)%, where x is offline bonus.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDemonicHeritage.png" align="middle"> Advanced Demonic Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Demon Coins</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on trophies unlocked.</p>
                    <p><b>Formula</b>: (0.25 * x ^ 0.75)%, where x is amount of trophies unlocked.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedTitanHeritage.png" align="middle"> Advanced Titan Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Angel and Goblin Coins</p>
                    <p><b>Effect</b>: Increase maximum mana based on the amount of Royal Exchanges purchased.</p>
                    <p><b>Formula</b>: (0.05 * ln(x) ^ 1.5), where x is Royal Exchanges purchased.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDruidHeritage.png" align="middle"> Advanced Druid Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Elven and Demon Coins</p>
                    <p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the sum of all your spells durations.</p>
                    <p><b>Formula</b>: (0.01 * x ^ 0.85)%, where x is the sum of all your spell durations.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedFacelessHeritage.png" align="middle"> Advanced Faceless Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Fairy and Undead Coins</p>
                    <p><b>Effect</b>: Gain assistants based on the amount of Unique Buildings owned (additive).</p>
                    <p><b>Formula</b>: (2.5 * x ^ 0.8), where x is Unique Buildings owned.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDwarvenHeritage.png" align="middle"> Advanced Dwarven Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Dwarven Coins</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the amount of excavations and excavation resets. (This R).</p>
                    <p><b>Formula</b>: (0.01 * x ^ (0.85 + 0.01 * y)), where x is excavations and y is excavation resets this R (ruby and free resets).</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDrowHeritage.png" align="middle"> Advanced Drow Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Drow Coins</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on offline bonus and time spent in this game.</p>
                    <p><b>Formula</b>: (0.0008 * log10(1 + x) * y ^ 0.8), where x offline bonus and y is time spent this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AdvancedDragonHeritage.png" align="middle"> Advanced Dragon Heritage</b></p>
                    <p><b>Cost</b>: 7.5 Oc (7.5e27) Dwarven and Drow Coins</p>
                    <p><b>Effect</b>: The amount of active spells counts 5% more for all purposes.</p>
                    <hr>
                    <p><b>Added</b>: 1 Secret Trophy</p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FactionRulerSecret.png" align="middle"> Faction Ruler</b></p>
                    <p><b>Requirements</b>: Unlock all the Advanced Heritages</p>
                    <p><b>Cost</b>: 120 Notg (1.2e122)</p>
                    <p><b>Effect</b>: Double Advanced Heritage powers if they match any of your alignments (cumulative).</p>
                    <hr>
                    <p><b>Secret Upgrade Changes</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/LeetSecretTrophy.png" align="middle"> Leet</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings by 1.337%</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by 13.37%, No A nerf</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UnitarySecretTrophy.png" align="middle"> Unitary</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings by 1.11111111%</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by 11.11111111%, No A nerf</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandDiplomatSecretTrophy.png" align="middle"> Grand Diplomat</b></p>
                    <p><b>Old Effect</b>: Increase your chance to find Faction Coins by an additional 1%</p>
                    <p><b>New Effect</b>: Increase your chance to find Faction Coins by an additional 2%</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FactionGrinderSecretTrophy.png" align="middle"> Faction Grinder</b></p>
                    <p><b>Old Effect</b>: Increase your chance to find Faction Coins by additional 1%</p>
                    <p><b>New Effect</b>: Increase your chance to find Faction Coins by additional 2%</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/glhokohhlsnodSecretTrophy.png" align="middle"> Glho kohhl snod</b></p>
                    <p><b>Old Effect</b>: Increase base clicking reward by 1</p>
                    <p><b>New Effect</b>: Increase base clicking reward by 50%, no A-nerf</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SuggestionMasterSecretTrophy.png" align="middle"> Suggestion Master</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings base on mysterious events.</p>
                    <p><b>Formula</b>: hotfix.patch%, where hotfix and patch are the 4th and 3rd elements of the game's version number.</p>
                    <p><b>Old Formula</b>: (a.b.c.d) (0.01 * d + c)%</p>
                    <p><b>New Formula</b>: (10 * b) + a + (0.1 * d) * (0.01 * c)%, no A-nerf</p>
                    <hr>
                    <p><b>Quest Changes</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BurningAbyssQuest.png" alt="Burning Abyss Quest" align="middle"> <b>Burning Abyss Quest</b></p>
                    <p><b>Old Requirement</b>: 160 seconds long Call to Arms.</p>
                    <p><b>New Requirement</b>: 120 seconds long Call to Arms.</p>
                    <hr>
                    <p><b>Faction Upgrade Changes</b></p>
                    <p><b>Undead</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/PlaguedBuildingsFactionUpgrade.png" align="middle"> Plagued Buildings (UD 2,3)</b></p>
                    <p><b>Old Effect</b>: Increase the production of all buildings by an additional 50% per hour of playtime in this game.</p>
                    <p><b>New Effect</b>: Increase the production of all buildings by an additional 75% per hour of playtime in this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DeadFieldsFactionUpgrade.png" align="middle"> Dead Fields (UD 3,1)</b></p>
                    <p><b>Effect</b>: Each assistants increases the production of all buildings based on the amount of Assistants and Necropolises you own.</p>
                    <p><b>OldFormula</b>: (0.02 * x * y), where x is Assistants and y is Necropolises you own</p>
                    <p><b>New Formula</b>: (0.03 * x * y), where x is Assistants and y is Necropolises you own</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TirelessWorkersFactionUpgrade.png" align="middle"> Tireless Workers (UD 3,2)</b></p>
                    <p><b>Old Effect</b>: Increase the production of assistants by 1000%.</p>
                    <p><b>New Formula</b>: Increase the production of assistants by 1500%</p>
                    <br/>
                    <p><b>Faceless</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DimensionDoor.png" align="middle"> Dimension Door (FC 4,3)</b></p>
                    <p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
                    <p><b>Old Formula</b>: (0.013 * x ^ 0.7), where x is highest max mana this R.</p>
                    <p><b>New Formula</b>: (0.013 * x ^ 0.67), where x is highest max mana this R.</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/NaturalRecyclingFactionUpgrade.png" align="middle"> Natural Recycling (DD 1,3)</b></p>
                    <p><b>Old Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on the amount of the <b>least productive building</b> you own.</p>
                    <p><b>New Effect</b>: Increase Faction Coin find chance additively and multiplicatively based on the amount of the <b>total buildings</b> you own.</p>
                    <p><b>Formula</b>: (x ^ 0.35), where x is total buildings you own. (additively and multiplicatively)</p>
                    <br/>
                    <p><b>Drow</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/CrystalServantsUnionUpgrade3.png" align="middle"> Crystal Servants (DW 4,3) (Upgrade 12)</b></p>
                    <p><b>Effect</b>: Multiplicatively gain assistants based on current gem amount.</p>
                    <p><b>Old Formula</b>: (0.75 * (log10(x) ^ 2), where x is amount of current gems.</p>
                    <p><b>New Formula</b>: (5 * log10(x) ^ 1.5), where x is amount of current gems.</p>
                    <hr>
                    <p><b>Union Changes</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" align="middle"> Druids Union</b></p>
                    <p><b>Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
                    <p><b>Old Formula</b>: ((x * y) / 2.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <p><b>New Formula</b>: (5 * ((x * y) / 2.5)), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadUnion.png" align="middle"> Undead Union</b></p>
                    <p><b>Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
                    <p><b>Old Formula</b>: (10 * log10(1 + x) ^ 2), where x is offline bonus multiplier.</p>
                    <p><b>New Formula</b>: (75 * log10(1 + x) ^ 2.25), where x is offline bonus multiplier.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"> Dragon Union</b></p>
                    <p><b>Chaos Dragon Union</b></p>
                    <p><b>Old Formula</b>: FC chance</p>
                    <p><b>New Formula</b>: log10(FC chance)</p>
                    <br/>
                    <p><b>Old Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend <b>FC chance</b> (even for Unique, odd for Non-Unique).</p>
                    <p><b>New Effect</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend <b>log10(FC chance)</b> (even for Unique, odd for Non-Unique).</p>
                    <p><b>Old  Formula</b>: Non-Unique (25 * 0.6 * x ^ 0.6), where x is FC chance.</p>
                    <p><b>New Formula</b>: Non-Unique (25 * 0.58 * x ^ 0.58), where x is FC chance.</p>
                    <p><b>Old  Formula</b>: Unique (0.6 * x ^ 0.6), where x is FC chance.</p>
                    <p><b>New Formula</b>: Unique (0.58 * x ^ 0.58), where x is FC chance.</p>
                    <br/>
                    <p><b>Order Dragon Union</b></p>
                    <p><b>Effect</b>: Increase the production of all buildings based on time spent as Order.</p>
                    <p><b>Old  Formula</b>: (1.6 * x ^ 0.6), where x is time spent this Order.</p>
                    <p><b>New Formula</b>: (1.65 * x ^ 0.65), where x is time spent this Order.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"> Dwarven Union</b></p>
                    <p><b>Chaos Dwarven Union</b></p>
                    <p><b>Effect</b>: Chaotically Multiplicatively increase assistant count based on spells cast this R.</p>
                    <p><b>Old Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2), for each digit of x, sum(2 * (mod(x,10) ^ y)</p>
                    <p><b>New Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2), for each digit of x, 2 * sum(mod(x,10) ^ y) ^ 0.9</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowUnion.png" align="middle"> Drow Union</b></p>
                    <p><b>Balance Drow Union</b></p>
                    <p><b>Effect</b>: Multiplicatively Increase max mana based on Tax Collections cast this game.</p>
                    <p><b>Old Formula</b>: (0.1 * ln(1 + x) ^ 2.8), where x is Tax Collections cast this game.</p>
                    <p><b>New Formula</b>: (0.07 * ln(1 + x) ^ 2.7), where x is Tax Collections cast this game.</p>
                    <hr>
                    <p><b>Challenge Upgrade Changes</b></p>
                    <p><b>Fairy Challenge 1</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/PixieMischiefChallenge.png" alt="Pixie Mischief</p>" align="middle"> <b>Pixie Mischief</b></p>
                    <p><b>Effect</b>: You gain assistants based on the amount of Fairy affiliated (faction upgrades, heritage, bloodline, research) upgrades you own.</p>
                    <p><b>Old Formula</b>: (x ^ 1.75), where x is amount of Fairy affiliated upgrades.</p>
                    <p><b>New Formula</b>: (0.35 * x ^ 1.75), where x is amount of Fairy affiliated upgrades.</p>
                    <br/>
                    <p><b>Goblin Challenge 1</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DiscountSeasonChallenges.png" align="middle"> Discount Season</b></p>
                    <p><b>Old Effect</b>: Goblin (3,3) Green Fingers Discount triggers every 8 minutes.</p>
                    <p><b>New Effect</b>: Goblin (3,3) Green Fingers Discount triggers every 2 minutes.</p>
                    <br/>
                    <p><b>Goblin Challenge 3</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SmuggledJewelsChallenges.png" align="middle"> Smuggled Jewels</b></p>
                    <p><b>Old Effect</b>: Increase production bonus from Gems by 0.005% for each upgrade purchased.</p>
                    <p><b>New Effect</b>: Increase production bonus from Gems by 0.01% for each upgrade purchased.</p>
                    <br/>
                    <p><b>Undead Challenge 1</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DeadlyImpatienceChallenges.png" align="middle"> Deadly Impatience</b></p>
                    <p><b>Old Effect</b>: Undead Heritage works 1000% faster.</p>
                    <p><b>New Effect</b>: Undead Heritage works 5000% faster.</p>
                    <br/>
                    <p><b>Druid Challenge 1</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/SilentAssistanceChallenges.png" align="middle"> Silent Assistance</b></p>
                    <p><b>Effect</b>: Animal Companions (1,2) works faster</p>
                    <p><b>Old Formula</b>: floor((sqrt(1 + 16 * x) - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
                    <p><b>Old Formula</b>: 1.1547x</p>
                    <p><b>New Formula</b>: floor((sqrt(1 + 120 * x) - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
                    <p><b>New Formula</b>: 3.1622x</p>
                    <br/>
                    <p><b>Druid challenge 4</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/OverflowingManaChallenges.png" align="middle"> Overflowing Mana</b></p>
                    <p><b>Old Effect</b>: All spell durations increased by 1% for every 1,500 max mana.</p>
                    <p><b>New Effect</b>: All spell durations increased based on max mana.</p>
                    <p><b>New Formula</b>: (0.005 * x ^ 0.85), where x is max mana.</p>
                    <br/>
                    <p><b>Dragon Challenge 6</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DracometVaultChallenges.png" align="middle"> Dracomet Vault</b></p>
                    <p><b>Effect</b>: Production bonus from Gems is multiplicatively increased over time based on the amount of artifacts you own. Resets on Abdications.</p>
                    <p><b>Old Formula</b>: (0.002 * x * (y / 60) ^ 0.7), where x is artfiact found and y is time this game in seconds.</p>
                    <p><b>New Formula</b>: (0.01 * x * (y / 60) ^ 0.7), where x is artfiact found and y is time this game in seconds.</p>
                    <hr>
                    <p><b>Unique Building Changes</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FleshWorkshopUniqueBuilding.png" align="middle"></b></p>
                    <p><b>Effect</b>: Increase production based on mana regen.</p>
                    <p><b>Old Formula</b>: (2 * x ^ 0.6), where x is mana regen per second.</p>
                    <p><b>New Formula</b>: (35 * x ^ 0.65), where x is mana regen per second.</p>
                    <hr>
                    <p><b>Spell Changes</b></p>
                    <p>All spell durations are now capped to 10000x their base duration.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MaelstromSpell.png" align="middle"></b></p>
                    <p><b>Maelstrom click formula</b></p>
                    <p><b>Old Clicks  Formula</b>: (0.075 * (log10(1 + x)) ^ 2.5)%, where x is clicks this game.</p>
                    <p><b>New Clicks  Formula</b>: (0.075 * (log10(1 + x)) ^ 2.75)%, where x is clicks this game.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TemporalFluxSpell.png" align="middle"></b></p>
                    <p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on time spent in this game.</p>
                    <p><b>Old Formula</b>: (5 * (x/60) ^ 0.7)%, where x is time in seconds this game.</p>
                    <p><b>New Formula</b>: (3.2 * (x/60) ^ 0.82))%, where x is time in seconds this game.</p>
                    <hr>
                    <p><b>Lineage Changes</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyLineage.png" align="middle"> Fairy Lineage</b></p>
                    <p><b>Fairy Lineage base</b></p>
                    <p><b>Old Effect</b>: Makes Farms, Inns and Blacksmiths count 15% more per Lineage level.</p>
                    <p><b>New Effect</b>: Makes Farms, Inns and Blacksmiths count 18% more per Lineage level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk1.png" align="middle"> Fairy Perk 1</b></p>
                    <p><b>Effect</b>: Makes Fairy Bloodline affect Hall of Legends.</p>
                    <p><b>Effect</b>: Also reduces Fairy Bloodline Post Ascension nerf.</p>
                    <p><b>Old Formula</b>: 250 * ((a ^ 0.9) ^5)</p>
                    <p><b>New Effect</b>: Fairy Bloodline also effects Hall of Legends and removes 1 ascenion penalty.</p>
                    <p><b>New Formula</b>: 250 * (a ^ 0.9), A1 nerf removed</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelLineage.png" align="middle"> AngelLineage</b></p>
                    <p><b>Old Effect</b>: Effect: Adds 10% mana regeneration per level.</p>
                    <p><b>New Effect</b>: Effect: Adds 7% mana regeneration per level.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk3.png" align="middle"> Angel Perk 3</b></p>
                    <p><b>Effect</b>: Increase God's Hand bonus based on Unique Buildings owned.</p>
                    <p><b>Old Formula</b>: (25000 * (x / 1000))%, Unique Buildings.(rounded down to nearest 1000)</p>
                    <p><b>New Formula</b>: (12000 * (x / 1000))%, Unique Buildings.(rounded down to nearest 1000)</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk4.png" align="middle"> Angel Perk 4</b></p>
                    <p><b>Old Effect</b>: When God's Hand is active, increase max mana by 100%.</p>
                    <p><b>New Effect</b>: When God's Hand is active, increase max mana by 50%.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk3.png" align="middle"> Goblin Perk 3</b></p>
                    <p><b>Old Effect</b>: Unique Building's base production increased by 2% for every 650 Unique Buildings.</p>
                    <p><b>New Effect</b>: Unique Building's base production increased by 3% for every 650 Unique Buildings.</p>
                    <hr>
                    <p><b>Set Changes</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"> Titan Set</b></p>
                    <p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
                    <p><b>Old Formula</b>: (0.07 * x ^ 0.7), where x is seconds.</p>
                    <p><b>New Formula</b>: (0.5 * x ^ 0.7), where x is seconds.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"> Druid Set</b></p>
                    <p><b>Effect</b>: Increase production of all buildings based on their quantity.</p>
                    <p><b>Old Formula</b>: (0.65 * x ^ 0.65), where x is building count.</p>
                    <p><b>New Formula</b>: (0.75 * x ^ 0.75), where x is building count.</p>
                    <br/>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"> Faceless Set</b></p>
                    <p><b>Effect</b>: Increase production of all buildings based on highest amount of spells cast in a single game.</p>
                    <p><b>Old Formula</b>: (0.32 * x ^ 0.32), where x is number of spells cast.</p>
                    <p><b>New Formula</b>: (0.32 * x ^ 0.28), where x is number of spells cast.</p>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.2 May 16, 2018</a></b></p>
                <div class="autohide">
                    <p><b>Fixed</b></p>
                    <p>Setting 8 spells set with same autocast now working</p>
                    <p>Bunny Helper</p>
                    <hr>
                    <p><b>Changes</b></p>
                    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png" align="middle"> Ancestral Hourglass</b></p>
                    <p><b>Effect</b>: Lower cost of Lineage level based on time spent this game.FC cost is reset when you purchase a new lineage level.</p>
                    <p><b>Old Formula</b>: (x ^ (1 - 0.01 * ((y ^ 1.1) - z / 5)) / 10), where x is hours this game, y is lineage level and z is reincarnations.</p>
                    <p><b>New Formula</b>: (x ^ (0.9 - 0.01 * (((y - 20) ^ 1.4) - z / 4)) / 10), where x is hours this game, y is lineage level and z is reincarnations.</p>
                    <p><b>Lineage Cost Formula</b>: (25 * 10 ^ (8 + level - hourglass.formula)) ^ 0.9 (if ancient heirloom).</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/HolyFrenzySecretTrophy.png align=middle><b> Holy Frenzy</b></p>
                    <p><b>Effect</b>: While Blood Frenzy or Holy Light are active, increase the production of all buildings.</p>
                    <p><b>Old Formula</b>: (50 * T ^ 2)</p>
                    <p><b>New Formula</b>: (250 * T ^ 2)</p>
                    <hr>
                    <p><b>Research</b>: C1300 - Scintillation</p>
                    <p><b>Old Effect</b>: Increase production bonus from gems based on maximum mana.</p>
                    <p><b>Old Formula</b>: (2 * x^0.4), where x is max mana</p>
                    <br/>
                    <p><b>New Effect</b>: Increase production of buildings based on max mana and gem bonus.</p>
                    <p><b>New Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total bonus from gem bonus upgrades</p>
                    <hr>
                    <p><b>Artifact Set Changes</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"><b> Demon Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Demonic Figurine, Demon Horn, Crystallized Lava</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase non unique building production based on the sum of your faction spells activity time.</p>
                    <p><b>Old Formula</b>: (0.25 * x ^ 0.75), where x is faction spell activity time.</p>
                    <p><b>New Formula</b>: (0.4 * x ^ 0.75), where x is faction spell activity time.</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/UndeadSet.png align=middle><b> Undead Set</b></p>
                    <p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
                    <p><b>Old Formula</b>: (35 * log10(1 + x) ^ 3.25), where x is offline Multiplier.</p>
                    <p><b>New Formula</b>: (9 * ln(1 + x) ^3), where x is offline Multiplier.</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/GoblinSet.png align=middle><b> Goblin Set</b></p>
                    <p><b>Effect</b>: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.</p>
                    <p><b>Old Formula</b>: (0.01 * x ^ 0.7), where x is time spent this game.</p>
                    <p><b>New Formula</b>: (0.1 * x ^ 0.7 ), where x is time spent this game.</p>
                    <br/>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/AngelSet.png align=middle><b> Angel Set</b></p>
                    <p><b>Effect</b>: Increase mana regen based on spells cast this game.</p>
                    <p><b>Old Formula</b>: (0.32 * x ^ 0.32), where x is spells cast.</p>
                    <p><b>New Formula</b>: (0.35 * x ^ 0.35), where x is spells cast.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"><b> Titan Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Huge Titan Statue, Titan Shield, Titan Helmet</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
                    <p><b>Old Formula</b>: (0.07 * x ^ 0.7), where x is seconds.</p>
                    <p><b>New Formula</b>: (0.09 * x ^ 0.7), where x is seconds.</p>
                    <hr>
                    <p><b>Added Base Union Effects</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelsUnion.png" alt="Angels Union" align="middle"> <b>Angels Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase the production of all buildings based on the sum of your mana regeneration and mana produced in this game.</p>
                    <p><b>Formula</b>: (ln(x) ^ 1.8 + ln(y) ^ 2.1), where x is mana spent this game and y is mana regeneration.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadUnion.png" alt="Undead Union" align="middle"> <b>Undead Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase the production of Unique Buildings based on your Offline Bonus.</p>
                    <p><b>Formula</b>: (10 * log10(1 + x) ^ 2), where x is offline bonus multiplier.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitansUnion.png" alt="Titans Union" align="middle"> <b>Titans Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Multiplicatively increase Faction Coin find chance by 5% per hour spent in this game.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FairiesUnion.png" alt="Fairies Union" align="middle"> <b>Fairies Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase assistant production based on amount of Enchanted Fields, Inns and Blacksmiths if building count is even, or all other buildings if building count is odd.</p>
                    <p><b>Formula</b>: (15 * x ^ 0.475), where x is Enchanted Fields, Inns and Blacksmiths (If building count is even)</p>
                    <p><b>Formula</b>: (15 * x ^ 0.475), where x is T4-T11 Buildings (If building count is odd)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonsUnion.png" alt="Demons Union" align="middle"> <b>Demons Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: 1% of all Non-Evil spells cast in this game count as Evil.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessUnion.png" alt="Faceless Union" align="middle"> <b>Faceless Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase assistants based on the amount of time spent as a random faction. Updates every 3 minutes.</p>
                    <p><b>Formula</b>: (50 * x ^ 0.5), where x is random faction all time in seconds.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenUnion.png" alt="Elven Union" align="middle"> <b>Elven Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase click production based on faction coins found in this Reincarnation.</p>
                    <p><b>Formula</b>: (2 * ln(1 + x) ^ 2.5), where x is faction coins found in this Reincarnation.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinsUnion.png" alt="Goblins Union" align="middle"> <b>Goblin Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
                    <p><b>Formula</b>: (0.4 * x ^ 0.4), where x is spells cast in this game.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidsUnion.png" alt="Druids Union" align="middle"> <b>Druids Union</b></p>
                    <p><b>Effect Requirement</b>: R111+</p>
                    <p><b>Added Effect</b>: Increase the production of Non-Unique buildings based on your total Lineage level and the maximum amount of Grand Balance targets.</p>
                    <p><b>Formula</b>: ((x * y) / 2.5), where x is total Lineage levels and y is amount of buildings targeted by Grand Balance.</p>
                    <hr>
                    <p><b>Union Upgrade Changes</b></p>
                    <br/>
                    <p><b>Fairy</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Pheromones.png" alt="Pheromones" align="middle"> <b>Pheromones</b></p>
                    <p>Fairy Upgrade 11</p>
                    <p><b>Cost</b>: 10 Spvg (1e80) Emerald Coins</p>
                    <p><b>Requirement</b>: Fairies Union</p>
                    <p><b>Effect</b>: Gain assistants based on time spent affiliated with Fairies. (This R)</p>
                    <p><b>Old Formula</b>: (0.7 * x ^ 0.7), where x is time spent affiliated with Fairies. (This R)</p>
                    <p><b>New Formula</b>: (1.5 * x ^ 0.75), where x is time spent affiliated with Fairies. (This R)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DreamCatchers.png" alt="Dream Catchers" align="middle"> <b>Dream Catchers</b></p>
                    <p>Fairy Upgrade 12</p>
                    <p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
                    <p><b>Requirement</b>: Fairies Union</p>
                    <p><b>Effect</b>: multiplicative increase mana regen by a random amount. Grows additively every 30 minutes (starts at 0% on upgrade bought)</p>
                    <p><b>Old Formula</b>: Every 30 minutes, ((upgrade bonus) + rand(0.5, 5))% (averages out to 132% per day).</p>
                    <p><b>New Formula</b>: Every 30 minutes, ((upgrade bonus) + rand(1.5 - 7.5))% (averages out to 216% per day).</p>
                    <br/>
                    <p><b>Undead</b></p>
                    <p><img src=http://musicfamily.org/realm/Factions/picks/EternalServitude.png align=middle><b> Eternal Servitude</b></p>
                    <p>Undead Upgrade 12</p>
                    <p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
                    <p><b>Requirement</b>: Undead Union</p>
                    <p><b>Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
                    <p><b>Old Formula</b>: (10000 + 25 * (x / 1800) ^ 2), where x is seconds this game.</p>
                    <p><b>New Formula</b>: (10000 + 75 * (x / 1800) ^ 2), where x is seconds this game.</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" alt="Lunar Cycle" align="middle"> <b>Lunar Cycle</b></p>
                    <p>Druid Upgrade 11</p>
                    <p><b>Cost</b>: 10 Spvg (1e80) Emerald Coins</p>
                    <p><b>Requirement</b>: Druids Union</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.</p>
                    <p><b>Old Formula</b>: (x + y) ^0.65 * ( 1 / (1 + abs(x - y) ) ) ^0.25, where x is time this game in seconds and y is offline time this game in seconds.</p>
                    <p><b>New Formula</b>: (x + y) ^ 0.65 * (1 / (1 + abs(x - 2y))) ^ 0.25, where x is time this game in seconds and y is offline time this game in seconds.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GroveFarming.png" alt="Grove Farming" align="middle"> <b>Grove Farming</b></p>
                    <p>Druid Upgrade 12</p>
                    <p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
                    <p><b>Requirement</b>: Druids Union</p>
                    <p><b>Old Effect</b>: Increase the production of all buildings based on their tier. Lower tiers get better bonuses.</p>
                    <p><b>Old Formula</b>: (10 * (11 - T) ^ 3), where T is building tier.</p>
                    <br/>
                    <p><b>New Effect</b>: Increase the production of all buildings based on their tier. Middle tiers get better bonuses.</p>
                    <p><b>New Formula</b>: (0.75 * ((6 - abs(6 - T)) ^ 5), where T is building tier.</p>
                    <br/>
                    <p><b>Elven</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" alt="Wooden Dices" align="middle"> <b>Wooden Dice</b></p>
                    <p>Elf Upgrade 10</p>
                    <p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
                    <p><b>Elven Luck Formula</b>: (x ^ 0.3), where x is Arboreal Cities count.</p>
                    <p><b>Old Production Formula</b>: (7 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <p><b>New Production Formula</b>: (8 * x ^ 0.8), where x is Arboreal Cities count.</p>
                    <p><b>Old Faction Coin Formula</b>: (1.5 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <p><b>New Faction Coin Formula</b>: (1.45 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" alt="Camouflage" align="middle"> <b>Camouflage</b></p>
                    <p>Elf Upgrade 11</p>
                    <p><b>Cost</b>: 10 Spvg (1e80) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Effect</b>: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.</p>
                    <p><b>Old Formula</b>: (0.68 * x ^ 0.68), where x is assistant amount.</p>
                    <p><b>New Formula</b>: (0.7 * x ^ 0.7), where x is assistant amount.</p>
                    <p><b>Note</b>: Applies to formulas that use Assistant count, but not actual assistants.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png" alt="Elven Discipline" align="middle"> <b>Elven Discipline</b></p>
                    <p>Elf Upgrade 12</p>
                    <p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Old Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game.</p>
                    <p><b>Old Formula</b>: (ln(x))</p>
                    <p><b>New Effect</b>: Increase mana regeneration additively and multiplicatively based on the amount of Faction Coins found in this game.</p>
                    <p><b>New Formula</b>: (100 * ln(x) ^ 1.5), where x is Faction Coins found in this game.(additively)</p>
                    <p><b>New Formula</b>: (1.45 * ln(x)), where x is Faction Coins found in this game.(multiplicatively)</p>
                    <br/>
                    <p><b>Titan</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ColossusKingdom.png" alt="Colossus Kingdom" align="middle"> <b>Colossus Kingdom</b></p>
                    <p>Titan Upgrade 12</p>
                    <p><b>Cost</b>: 10 Dtg (1e95) Emerald Coins</p>
                    <p><b>Requirement</b>: Titan Union</p>
                    <p><b>Old Effect</b>: Additively gain assistants based on total time spent as Order.</p>
                    <p><b>New Effect</b>: Multiplicative gain assistants based on total time spent as Order.</p>
                    <p><b>Old Formula</b>: (x ^ 0.7), where x is seconds this R.</p>
                    <p><b>New Formula</b>: (20 * x ^ 0.7), where x is seconds this R.</p>
                    <br/>
                    <p><b>Demon</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" alt="Devastation" align="middle"> <b>Devastation</b></p>
                    <p>Demon Upgrade 12</p>
                    <p><b>Cost</b>: 100 Tg (1e95) Emerald Coins</p>
                    <p><b>Requirement</b>: Demons Union</p>
                    <p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 0.65), where x is mana regen.</p>
                    <p><b>Old Formula</b>: (0.35 * x ^ 0.6), where x is mana regen.</p>
                    <hr>
                    <p><b>Unique Building Changes</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SwarmingTowersUniqueBuilding.png" alt="Swarming Towers" align="middle"></p>
                    <p>Upgrade Wizard Towers to Swarming Towers, boosting their production based on the amount of active spells and unlocking more unique perks for the building.</p>
                    <p><b>Effect</b>: Increase production based on the amount of active spells.</p>
                    <p><b>Effect</b>: Also grants access to Faction Union.</p>
                    <p><b>Old Formula</b>: (0.35*x^2.35)%, where x is active spells.</p>
                    <p><b>New Formula</b>: (0.4 * x ^ 2.4)%, where x is active spells.</p>
                    <hr>
                    <p><b>Added</b>: 1 Trophy</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ArtoftheCrowTrophy.png" align="middle"><b> Art of the Crow Trophy</b></p>
                    <p><b>Requirement</b>: Have any 6 complete Faction Artifact Sets.</p>
                    <p><b>Effect</b>: Gives upgrade with the same name.</p>
                    <br/>
                    <p><b> Art of the Crow Upgrade</b></p>
                    <p><b>Requirement</b>: Faction and Set Alignments has to match to buy the upgrade (Evil, Good, Neutral).</p>
                    <p><b>Cost</b>: 1 Qavg (1.0e75)</p>
                    <br>
                    <style>
                        div#images {
                            width: 100%;
                            text-align: left;
                        }

                        div#images div {
                            display: inline-block;
                        }
                    </style>
                    <p><b>Alignments</b></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Proof of Order</b>
                    <div id="images">
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCOrderGood.png" width="54" height="54" />
                            <center>Good</center>
                        </div>
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCOrderEvil.png" width="54" height="54" />
                            <center>Evil</center>
                        </div>
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCOrderNeutral.png" width="54" height="54" />
                            <center>Neutral</center>
                        </div>
                    </div>
                    <p><b>Effect</b>: Multiplicatively increase max mana.</p>
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b>Proof of Chaos</b>
                    <br>
                    <div id="images">
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCChaosGood.png" width="54" height="54" />
                            <center>Good</center>
                        </div>
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCChaosEvil.png" width="54" height="54" />
                            <center>Evil</center>
                        </div>
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCChaosNeutral.png" width="54" height="54" />
                            <center>Neutral</center>
                        </div>
                    </div>
                    <p><b>Effect</b>: Multiplicatively increase assistants.</p>
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b>Proof of Balance</b>
                    <br>
                    <div id="images">
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCBalanceGood.png" width="54" height="54" />
                            <center>Good</center>
                        </div>
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCBalanceEvil.png" width="54" height="54" />
                            <center>Evil</center>
                        </div>
                        <div>
                            <img src="http://musicfamily.org/realm/Factions/picks/AotCBalanceNeutral.png" width="54" height="54" />
                            <center>Neutral</center>
                        </div>
                    </div>
                    <p><b>Balance</b>: Multiplicatively increase mana regeneration.</p>
                    <br>
                    <p><b>Good Effect</b>: The amount increased is based on Excavations made.</p>
                    <p><b>Formula</b>: (0.05 * x ^ 1.1), where x is excavation count.</p>
                    <br/>
                    <p><b>Evil Effect</b>: The amount increased is based on time spent in this game.</p>
                    <p><b>Formula</b>: (4 * x ^ 0.44), where x is time spent this game.</p>
                    <br/>
                    <p><b>Neutral Effect</b>: The amount increased is based on Royal Exchanges made</p>
                    <p><b>Formula</b>: (0.8 * x ^ 0.8), where x royal exchanges made.</p>
                    <hr>
                    <p><b>Added</b>: 3 Artifacts for Prestige Factions</p>
                    <p><b>Dwarven</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BeardHair.png" align="middle"><b> Beard Hair</b></p>
                    <p><b>Description</b>: Hopefully coming from a real dwarven beard.</p>
                    <p><b>Requirement</b>: R116+, 3000+ Excavations, Play as Dwarf</p>
                    <p><b>Chance</b>: (x / 100000000 (100M))%, where x is assistant count</p>
                    <br/>
                    <p><b>Drow</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/PoisonVial.png" align="middle"><b> Poison Vial</b></p>
                    <p><b>Description</b>: One drop of this is enough to fell thousands of non-immune creatures.</p>
                    <p><b>Requirement</b>: R116+, 3000+ Excavations, Play as Drow</p>
                    <p><b>Chance</b>: (x / 10000000 (10M))%, where x is combo strike production bonus</p>
                    <br/>
                    <p><b>Dragon</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonScale.png" align="middle"><b> Dragon Scale</b></p>
                    <p><b>Description</b>: Very high on the realms' most accurate hardiness rankings.</p>
                    <p><b>Requirement</b>: R116+, 3000+ Excavations, Play as Dragon</p>
                    <p><b>Chance</b>: (x / 2500)%, where x is active spells</p>
                    <hr>
                    <p><b>Added</b>: 3 Artifacts Sets for Prestige Factions</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarvenSet.png" align="middle"><b> Dwarven Set</b></p>
                    <p><b>Requirement</b>: R116+</p>
                    <p><b>Artifacts Required</b>: Dwarven Bow, Stone Tankard, Beard Hair</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase assistants based on your Royal Exchange bonus.</p>
                    <p><b>Formula</b>: (x ^ 0.9), where x is Royal Exchange bonus.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowSet.png" align="middle"><b> Drow Set</b></p>
                    <p><b>Requirement</b>: R116+</p>
                    <p><b>Artifacts Required</b>: Ceremonial Dagger, Arachnid Figurine, Poison Vial</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase offline production based on evil spells cast (this R).</p>
                    <p><b>Formula</b>: (0.75 * x ^0.75 ), where x is total evil spells cast (this R).</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonSet.png" align="middle"><b> Dragon Set</b></p>
                    <p><b>Requirement</b>: R116+</p>
                    <p><b>Artifacts Required</b>: Dragon Fang, Dragon Soul, Dragon Scale</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase the production of Non-Unique buildings based on Faction Coins found in this game.</p>
                    <p><b>Formula</b>: (16 * log10(1 + x) ^ 2), where x is Faction Coins found.</p>
                    <hr>
                    <p><b>Added</b>: Prestige Factions</p>
                    <p><b>Drow</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BrothelQuest.png" align="middle"><b> Brothel Quest</b></p>
                    <p><b>Description</b>: Yawn... Kivvil, your realm is starting to bore us. We need better places to have fun and Rest. Show us your spellcasting ability and we'll teach you a few new things about underworld fun.</p>
                    <p><b>Requirement</b>: 1 B (1e9) spells cast this game</p>
                    <p><b>Cost</b>: 100 Vg (1e65)</p>
                    <p><b>Effect</b>: Unlocks 2nd Unique Building for Drow</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Brothel.png" align="middle"><b> Brothel Upgrade</b></p>
                    <p><b>Cost</b>: 100 Qivg (1e80)</p>
                    <p><b>Effect</b>: Upgrade Inns to Brothels, boosting their production based on Royal Exchanges made and unlocking more unique perks for the buildings.</p>
                    <p><b>Formula</b>: (10 * x ^1.05), where x is royal exchanges this game</p>
                    <br/>
                    <p><b>Drow Unique Building</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BrothelUniqueBuilding.png" align="middle"></p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowUnion.png" align="middle"><b> Drow Union</b></p>
                    <p><b>Cost</b>: 1e24 Drow coins</p>
                    <p><b>Effect</b>: Unlocks Union Upgrades</p>
                    <br/>
                    <p><b>Other Effects</b></p>
                    <p><b>Proof of Order</b>: Increase offline bonus based on max mana.</p>
                    <p><b>Formula</b>: (0.1 * x ^ 0.85), where x is max mana</p>
                    <br/>
                    <p><b>Proof of Balance</b>: Multiplicatively Increase max mana based on Tax Collections cast this game.</p>
                    <p><b>Formula</b>: (0.1 * ln(1 + x) ^ 2.8), where x is Tax Collections cast this game.</p>
                    <br/>
                    <p><b>Proof of Chaos</b>: Increase the production of a specific building tier depending on building amount, and increase its production based on time spent offline this reincarnation.</p>
                    <p><b>Formula</b>: (6 * x ^0.6 building chosen (tier): 1 + floor(x % 11)</p>
                    <br/>
                    <p><b>Union Upgrades</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SpiderClericsUnionUpgrade1.png" align="middle"><b> Spider Clerics</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100)</p>
                    <p><b>Effect</b>: Increase Royal Exchange bonus based on Brothel amount.</p>
                    <p><b>Formula</b>: (1.75 * x ^ 0.75), where x is Brothels</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AncillaeObscureUnionUpgrade2.png" align="middle"><b> Ancillae Obscurae</b></p>
                    <p><b>Cost</b>: 100 Qitg (1e110)</p>
                    <p><b>Effect</b>: Increase Non-Unique building production based on amount of Unique Buildings.</p>
                    <p><b>Formula</b>: (45 * x ^ 0.45), where x is amount of Unique Buildings.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/CrystalServantsUnionUpgrade3.png" align="middle"><b> Crystal Servants</b></p>
                    <p><b>Cost</b>: 1 Notg (1e120)</p>
                    <p><b>Effect</b>: Multiplicatively gain assistants based on current gem amount.</p>
                    <p><b>Formula</b>: (log10(x) ^ 2), where x is amount of current gems.</p>
                    <hr>
                    <p><b>Dwarf</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/HighBastionQuest.png" align="middle"><b> High Bastion Quest</b></p>
                    <p><b>Description</b>: Aye lad! Yer castle looks solid, but we think we can do better, yes? Excavate to yer best and then again from the start, we'll have a deal.</p>
                    <p><b>Requirement</b>: 5 free excav resets this R</p>
                    <p><b>Cost</b>: 100 Vg (1e65)</p>
                    <p><b>Effect</b>: Unlocks 2nd Unique Building for Dwarf</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/HighBastion.png" align="middle"><b> High Bastion Upgrade</b></p>
                    <p><b>Cost</b>: 100 Qivg (1e80)</p>
                    <p><b>Effect</b>: Upgrade Royal Castles to High Bastions, boosting their production based on clicks made in this reincarnation and unlocking more unique perks for the building.</p>
                    <p><b>Formula</b>: (ln(1 + x) ^ 2), where x is clicks this R</p>
                    <br/>
                    <p><b>Dwarf Unique Building</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/HighBastionUniqueBuilding.png" align="middle"></p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarvenUnion.png" align="middle"><b> Dwarven Union</b></p>
                    <p><b>Cost</b>: 1 Sp (1e24) Dwarven coins</p>
                    <p><b>Effect</b>: Unlock Union Upgrades.</p>
                    <br/>
                    <p><b>Other Effects</b></p>
                    <p><b>Proof of Order</b>: Increase all building production based on time spent this reincarnation.</p>
                    <p><b>Formula</b>: (0.65 * x ^ 0.65), where x is time spent this reincarnation.</p>
                    <br/>
                    <p><b>Proof of Balance</b>: Increase mana regen based on clicks made this reincarnation.</p>
                    <p><b>Formula</b>: (ln(1 + x) ^ 2.45), where x is amount of clicks made this game.</p>
                    <br/>
                    <p><b>Proof of Chaos</b>: Chaotically Multiplicatively increase assistant count based on spells cast this R.</p>
                    <p><b>Formula</b>: (y = floor(log10(1 + x) + 1) / 10 + 2, for each digit of x, sum(2 * (mod(x,10) ^ y)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SolidityUnionUpgrade1.png" align="middle"><b> Solidity</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100)</p>
                    <p><b>Effect</b>: Multiplicatively increase gem production based on High Bastion you own. </p>
                    <p><b>Formula</b>: (1.55 * x ^ 0.55), where x is royal castles multiplicative.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/StonetalkingUnionUpgrade2.png" align="middle"><b> Stonetalking</b></p>
                    <p><b>Cost</b>: 100 Qitg (1e110)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the highest between max mana and mana regeneration.</p>
                    <p><b>Formula</b>: (0.055 * max(x, y) ^ 0.55), where x is max mana and y is mana regen.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/RefinedMineralsUnionUpgrade3.png" align="middle"><b> Refined Minerals</b></p>
                    <p><b>Cost</b>: 1 Notg (1e120)</p>
                    <p><b>Effect</b>: Multiplicatively increase mana regen and max mana based on highest time spent as Order, Balance or Chaos.</p>
                    <p><b>Formula</b>: (0.03 * max(x, y ,z) ^ 0.7), where x is order time, y is balance time, and z is chaos time (All in seconds this R).</p>
                    <hr>
                    <p><b>Dragon</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureQuest.png" align="middle"><b> Dragon Pasture Quest</b></p>
                    <p><b>Description</b>: Insignificant creature, you have much to do to gain our full respect. Our hatchlings need more food... yes, this would be a task worthy of your stature. Show your ability to maintain powerful magic at the same time, and we will let you serve us.</p>
                    <p><b>Requirement</b>: 42 active spells</p>
                    <p><b>Cost</b>: 1e65</p>
                    <p><b>Effect</b>: Unlocks 2nd Unique Building for Dragon</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPasture.png" align="middle"><b> Dragon Pasture Upgrade</b></p>
                    <p><b>Cost</b>: 1e80</p>
                    <p><b>Effect</b>: Upgrade Farm to Dragon Pastures, boosting their production based on your max mana and unlocking more unique perks for the building.</p>
                    <p><b>Formula</b>: (0.65 * x ^ 0.65), where x is your max mana.</p>
                    <br/>
                    <p><b>Dragon Unique Building</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPastureUniqueBuilding.png" align="middle"></p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonUnion.png" align="middle"><b> Dragon Union</b></p>
                    <p><b>Cost</b>: 100 Sp (1e26) Dwarven and Drow coins</p>
                    <p><b>Effect</b>: Unlock Union Upgrades.</p>
                    <br/>
                    <p><b>Other Effects</b></p>
                    <p><b>Proof of Order</b>: Increase the production of all buildings based on time spent as Order.</p>
                    <p><b>Formula</b>: (1.6 * x ^ 0.6), where x is time spent this Order.</p>
                    <br/>
                    <p><b>Proof of Balance</b>: Multiplicatively increase max mana based on your current Lineage level.</p>
                    <p><b>Formula</b>: (1.3 * x ^ 1.3), where x is Lineage level.</p>
                    <br/>
                    <p><b>Proof of Chaos</b>: Increase the production of Unique or Non-Unique buildings based on the amount of assistants you own. Target buildings depend FC chance(even for Unique, odd for Non-Unique).</p>
                    <p><b>Formula</b>: Non-Unique (25 * 0.6 * x ^ 0.6), where x is FC chance.</p>
                    <p><b>Formula</b>: Unique (0.6 * x ^ 0.6), where x is FC chance.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FangFood.png" align="middle"><b> Fang Food</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100)</p>
                    <p><b>Effect</b>: Increase mana regeneration based on the amount of Dragon Pastures you own.</p>
                    <p><b>Formula</b>: (0.65 * x ^ 0.65), where x is Dragon Pastures you own.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sRest.png" align="middle"><b> Wyrm's Rest</b></p>
                    <p><b>Cost</b>: 100 Qitg (1e110)</p>
                    <p><b>Effect</b>: Gain assistants based on the amount of time spent as Dragon this Reincarnation.</p>
                    <p><b>Formula</b>: (15 * x ^ 0.65), where x is time spent as Dragon this Reincarnation.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DraconicSupremacy.png" align="middle"><b> Draconic Supremacy</b></p>
                    <p><b>Cost</b>: 1 Notg (1e120)</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on your max mana.</p>
                    <p><b>Formula</b>: (0.6 * x ^ 0.45), where x is max mana.</p>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.1.1 March 26, 2018</a></b></p>
                <div class="autohide">
                    <p><b>New Easter Feat</b>: With new reward</p>
                    <hr>
                    <p><b>Hourglass</b>: Formula changed</p>
                    <p><b>Old Formula</b>: (x ^ (1 - 0.01 * ((y ^ 1.01) - z / 5) / 10), where x is hours this game (reset when upgrading lineage), y is lineage level and z is reincarnations.</p>
                    <p><b>New Formula</b>: (x ^ (1 - 0.01 * ((y ^ 1.1) - z / 5) / 10), where x is hours this game (reset when upgrading lineage), y is lineage level and z is reincarnations.</p>
                    <hr>
                    <p><b>Undead Set</b>: Formula and Chance changed</p>
                    <p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
                    <p><b>Old Formula</b>: (45 * x ^ 0.6), where x is offline Multiplier.</p>
                    <p><b>New Formula</b>: 35 * log10(1 + x) ^ 3.25, where x is offline Multiplier.</p>
                    <br/>
                    <p><b>Dusty Coffin</b></p>
                    <p><b>Old Chance</b>: ((1 / (30 + x ^ 1.75))%, where x is time this game in seconds.</p>
                    <p><b>New Chance</b>: ((1 / (30 + x ^ 1.5))%, where x is time this game in seconds.</p>
                    <hr>
                    <p><b>Elf artifact</b> Chance changed</p>
                    <p><b>Raw Emerald</b></p>
                    <p><b>Old Chance</b>: (((2 * x) ^ 2) / 10000)%, where x is non-ruby excavation resets (this game).</p>
                    <p><b>New Chance</b>: (((3 * x) ^ 4.5) / 10000)%, where x is non-ruby excavation resets (this game).</p>
                    <hr>
                    <p><b>Union Upgrades</b>: Cost changed</p>
                    <p><b>Upgrade 11</b></p>
                    <p><b>Old Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>New Cost</b>: 100 Qivg (1e80) Emerald Coins</p>
                    <p><b>Upgrade 12</b></p>
                    <p><b>Old Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
                    <p><b>New Cost</b>: 100 Tg (1e95) Emerald Coins</p>
                    <hr>
                </div>
            </div>
            <div class="shelementwhole">
                <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">v3.1 February 5th, 2018</a></b></p>
                <div class="autohide">
                    <p><b>108th Reincarnation and up</b></p>
                    <p><b>Added</b>: Increase the production of Unique Buildings based on the difference of time spent as their respective faction against your most used faction in this reincarnation.</p>
                    <p><b>Formula</b>: (0.07 * (x - y) ^ 0.7, where x is highest faction time and y is faction time of the Unique Building affinity</p>
                    <p><b>115th Reincarnation and up</b></p>
                    <p><b>Added</b>: Increase Faction Coins found if they match your Faction, Bloodline or Artifact Set.</p>
                    <p><b>Excavation</b></p>
                    <p><b>Excavations</b>: Free reset if enough times excavated this R 2000 + 50 * R + 500 * x, where x is amount of resets this R</p>
                    <p><b>Trophies</b></p>
                    <p><a target="" href="http://musicfamily.org/realm/TrophyPage/"><b>Trophy Map Page</b></a></p>
                    <p><b>Moved 13 Trophies</b></p>
                    <p> Research associated 'Secret Trophies' moved to 'Misc Trophies'</p>
                    <p><b>Added</b> 2 Secret Trophies</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/HolyFrenzySecretTrophy.png" align="middle"><b> Holy Frenzy</b></p>
                    <p><b>Requirement</b>: A2+, In a single reincarnation, have a 3 day combined activity time of Holy Light and Blood Frenzy.</p>
                    <p><b>Effect</b>: While Blood Frenzy or Holy Light are active, increase the production of all buildings.</p>
                    <p><b>Formula</b>: (50 * T ^ 2)</p>
                    <p><b>Note</b>: Upgrade scales from Holy Light/Blood Frenzy tiers.</p>
                    <p><b>Cost</b>: 100 Dc (1e35)</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/UniformitySecretTrophy.png" align="middle"><b> Uniformity</b></p>
                    <p><b>Requirement</b>: A2+, With no less than 3 days of playtime, have less than 1 minute of playtime difference for Order, Chaos and Balance alignments.</p>
                    <p><b>Effect</b>: Increases production of all buildings based on time spent as least used alignment.</p>
                    <p><b>Formula</b>: (0.72 * min(x, y, z, s, t, u) ^ 0.72), where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).</p>
                    <p><b>Cost</b>: 100 Qid (1e50)</p>
                    <hr>
                    <p><a target="" href="http://musicfamily.org/realm/Artifacts/"><b>Artifacts Page</b></a></p>
                    <p><b>Added</b>: 10 Artifacts, 9 that unlock Faction Sets</p>
                    <p><b>Changed</b>: 1 Artifact</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/WallChunkArtifact.png" alt="Wall Chunk" align="middle"><b> Wall Chunk</b></p>
                    <p><b>Description</b>: A bigger piece of the infamous Ascension Wall.</p>
                    <p><b>Requirements</b>: R100+</p>
                    <p><b>Chance</b>: 10%</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
                    <p><b>Cost</b>: 1 Sx (1e21) Emerald Coins</p>
                    <p><b>New Formula</b>: 30000 * (11-x) ^ 3.5, where x is building tier.</p>
                    <p><b>Old Formula</b>: 100000 * (11-x) ^ 3, where x is building tier.</p>
                    <br/>
                    <p><b>Added</b>: 10 Artifacts, 9 that unlock Faction Sets</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png" align="middle"><b> Ancestral Hourglass</b></p>
                    <p><b>Description</b>: The silver sands contained within seem to never stop flowing.</p>
                    <p><b>Requirement</b>: R100+</p>
                    <p><b>Effect</b>: Lower cost of Lineage level based on time spent this game.FC cost is reset when you purchase a new lineage level.</p>
                    <p><b>Formula</b>: ((x / 3600) ^ (1 - 0.01 * ((y ^ 1.01) - z / 5) / 10) where x is seconds this game/since lineage bought, y is lineage level and z is reincarnations.</p>
                    <p><b>Lineage Cost Formula</b>: (25 * 10 ^ (15 + level - hourglass.formula)) ^ 0.9 if ancient heirloom</p>
                    <p><b>Secret Upgrade Cost</b>: 1 Novg (1e90) Emerald Coins</p>
                    <p><b>Chance:</b>: (x / 10000000000000000 (10 QA))%, where x is FC chance.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SilkClothArtifact.png" align="middle"><b> Silk Cloth</b></p>
                    <p><b>Description</b>: The purest silk made for Fairies, by Fairies, of Fairies.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Fairy Set.</p>
                    <p><b>Chance</b>: (x - 10000) / 200000)%, where x is Wizard Tower.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FairySet.png" align="middle"><b> Fairy Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Silk Cloth, Pink Carrot, Bottled Voice</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase Farm, Inn and Blacksmith production based on number of assistants owned.</p>
                    <p><b>Formula</b>: (0.75 * x ^ 0.75), where x is number of assistants owned.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/RawEmeraldArtifact.png" align="middle"><b> Raw Emerald</b></p>
                    <p><b>Description</b>: Just slightly less precious than a raw Ruby.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Elven Set.</p>
                    <p><b>Chance</b>: ((2 * x ^ 2) / 10000)%, where x is non-ruby excavation resets (this game).</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenSet.png" align="middle"><b> Elven Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Raw Emerald, Lucky Clover, Mini-treasure</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase all building production based on total amount of Elven Lucks triggered (This R)(since unlock).</p>
                    <p><b>Formula</b>: (0.66 * x ^ 0.6), where x is amount of Elven Lucks triggered.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FossilizedWingArtifact.png" align="middle"><b> Fossilized Wing</b></p>
                    <p><b>Description</b>: The remains of an Angel fallen to earth.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Angel Set.</p>
                    <p><b>Chance</b>: (x / 25920000 (300 days))%, where x is angel time (all time) in seconds.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelSet.png" align="middle"><b> Angel Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Fossilized Wing, Pillar Fragment, Divine Sword</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase mana regen based on spells cast this game.</p>
                    <p><b>Formula</b>: (0.32 * x ^ 0.32), where x is spells cast.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SpikedWhipArtifact.png" align="middle"><b> Spiked Whip</b></p>
                    <p><b>Description</b>: Use with caution. You do not want to exterminate all your slaves.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Goblin Set.</p>
                    <p><b>Chance</b>: (x - 10000) / 300000)%, where x is Slave Pens.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinSet.png" align="middle"><b> Goblin Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Spiked Whip, Ancient Coin Piece, Goblin Purse</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.</p>
                    <p><b>Formula</b>: (1 + (0.01 * x ^ 0.7)), where x is seconds.</p>
                    <p><b>Note</b>: Ingame tooltip is off by one (actual effect is 1 higher)</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DustyCoffinArtifact.png" align="middle"><b> Dusty Coffin</b></p>
                    <p><b>Description</b>: Sealed since forever, yet you can hear a strange noise from within.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Undead Set.</p>
                    <p><b>Chance</b>: ((1 / (30 + x ^ 1.75))%, where x is time this game in seconds.</p>
                    <p><b>Chance</b>: 1 in 3000 in 0 seconds 1 in 132349 at 60 seconds. 1 in 438078 at 120 seconds.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadSet.png" align="middle"><b> Undead Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: DustyCoffin, Rotten Organ, Jaw Bone</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Additively Increase max mana based on offline bonus.</p>
                    <p><b>Formula</b>: (45 * x ^ 0.6), where x is offline Multiplier.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/CrystallizedLavaArtifact.png" align="middle"><b> Crystallized Lava</b></p>
                    <p><b>Description</b>: Incandescent but still. Can be used efficiently as a desk lamp.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Demon Set.</p>
                    <p><b>Chance</b>: (x - 10000) / 200000)%, where x is Hall of Legends.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonSet.png" align="middle"><b> Demon Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Crystallized Lava, Demonic Figurine, Demon Horn</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase non unique building production based on the sum of your faction spells activity time.</p>
                    <p><b>Formula</b>: (0.25 * x ^ 0.75), where x is faction spell activity time.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png" align="middle"><b> Titan Helmet</b></p>
                    <p><b>Description</b>: Made of enough metal to craft a human-sized full plate.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Titan Set.</p>
                    <p><b>Chance</b>: ((x ^ 2) / 5000000000 (5B))%, where x is Royal Exchanges.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanSet.png" align="middle"><b> Titan Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Titan Helmet, Huge Titan Statue, Titan Shield</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
                    <p><b>Formula</b>: (0.07 * x ^ 0.7), where x is seconds.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/BranchoftheLifeTreeArtifact.png" align="middle"><b> Branch of the Life Tree</b></p>
                    <p><b>Description</b>: Despite being torn from its source tree, it keeps growing buds and leaves.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Druid Set.</p>
                    <p><b>Chance</b>: (x ^ 3) / 2000000 (2M))%, where x is level of current lineage.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidSet.png" align="middle"><b> Druid Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Branch of the Life Tree, Glyph Table, Stone Of Balance</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase production of all buildings based on their quantity.</p>
                    <p><b>Formula</b>: (0.65 * x ^ 0.65), where x is building count.</p>
                    <hr>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/NightmareFigmentArtifact.png" align="middle"><b> Nightmare Figment</b></p>
                    <p><b>Description</b>: An unshaped, ephemeral substance which is politely trying to corrupt your mind.</p>
                    <p><b>Requirement</b>: A2+, 3000+ Excavations</p>
                    <p><b>Effect</b>: Unlocks Faceless Set.</p>
                    <p><b>Chance</b>: (x ^ 1.5 / 20000000 (20M))%, where x is headstart time in seconds.</p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessSet.png" align="middle"><b> Faceless Set</b></p>
                    <p><b>Requirement</b>: A2+</p>
                    <p><b>Artifacts Required</b>: Nightmare Figment, Translucent Goo, Octopus-shaped Helmet</p>
                    <p><b>Cost</b>: Free</p>
                    <p><b>Effect</b>: Increase production of all buildings based on highest amount of spells cast in a single game.</p>
                    <p><b>Formula</b>: (0.32 * x ^ 0.32), where x is number of spells cast.</p>
                    <hr>
                    <p><a target="" href="http://musicfamily.org/realm/Lineages/"><b>Lineage Page</b></a></p>
                    <p><b>Added</b>: Level 30 Lineage Perks</p>
                    <p><b>Fairy Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk4.png" alt="FairyPerk3" align="middle"><b> Fairy Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: When Fairy Chanting is active, increase assistant amount by 10% every 5 minutes of its duration.</p>
                    <p><b>Formula</b>: 10 * Floor (x/300), where x is Fairy Chanting duration in seconds.</p>
                    <br/>
                    <p><b>Elven Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk4.png" alt="ElvenPerk3" align="middle"><b> Elven Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: When Moon Blessing is active, multiply your Faction Coin chance by 500%.</p>
                    <br/>
                    <p><b>Angel Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk4.png" alt="AngelPerk3" align="middle"><b> Angel Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: When God's Hand is active, increase max mana by 100%.</p>
                    <br/>
                    <p><b>Goblin Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk4.png" alt="GoblinPerk3" align="middle"><b> Goblin Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: When Goblin's Greed is active, increase seconds worth of Tax Collections based on assistants owned.</p>
                    <p><b>Formula</b>: (0.45 * x ^ 0.45), where x is assistants owned.</p>
                    <br/>
                    <p><b>Undead Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk4.png" alt="UndeadPerk3" align="middle"><b> Undead Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: When offline, Night Time production is added to offline bonus. Night Time activity time counts 100% more for all purposes.</p>
                    <br/>
                    <p><b>Demon Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk4.png" alt="DemonPerk4" align="middle"><b> Demon Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: Non-Unique buildings are also targeted by Hellfire Blast.</p>
                    <br/>
                    <p><b>Titan Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk4.png" alt="TitalPerk3" align="middle"><b> Titan Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: Lightning Strike always hits Unique Buildings in addition to its random target. Unique Buildings are no longer random targets.</p>
                    <br/>
                    <p><b>Druid Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk4.png" alt="DruidPerk3" align="middle"><b> Druid Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: Increase Grand Balance duration based on assistants owned. Also increase the production of all buildings while Grand Balance is active by 10% every 5 minutes of its duration.</p>
                    <p><b>Duration Formula</b>: (0.5 * x ^ 0.5), where x is assistants owned.</p>
                    <br/>
                    <p><b>Faceless Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk4.png" alt="FacelessPerk3" align="middle"><b> Faceless Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: Brainwave headstart time is increased by 1000%.</p>
                    <br/>
                    <p><b>Dwarf Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk4.png" alt="DwarfPerk3" align="middle"><b> Dwarf Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: When Diamond Pickaxe is active, increase mana regen based on Faction Coin chance.</p>
                    <p><b>Formula</b>: (0 .5 * log10(x + 1) ^ 2.5), where x is Faction Coin chance.</p>
                    <br/>
                    <p><b>Drow Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk3.png" alt="DrowPerk4" align="middle"><b> Drow Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: Combo Strike's combo bonus increases by 5% per 30 seconds spent this game.</p>
                    <br/>
                    <p><b>Dragon Level 30</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk4.png" alt="DragonPerk4" align="middle"><b> Dragon Perk 4</b></p>
                    <p><b>Requirement</b>: R105+</p>
                    <p><b>Effect</b>: Activates two breaths per cast.</p>
                    <hr>
                    <p><a target="" href="http://musicfamily.org/realm/Ascension2/"><b>A2 Page</b></a></p>
                    <p><b>Changed</b> All Creation, and Elf Union Upgrade</p>
                    <p><b>Added</b> 2 new Union upgrades for each faction</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AllCreation.png" alt="All Creation" align="middle"></p>
                    <p><b>Cost</b>: 6000 Mana</p>
                    <p><b>Effect</b>: Increase production of all buildings based on mana regeneration rate.</p>
                    <p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your mana regeneration rate.</p>
                    <p><b>New Formula</b>: floor(2.5 * x ^ 0.44). where x is mana per second.</p>
                    <p><b>Old Formula</b>: floor(2.5 * x ^ 0.5). where x is mana per second.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" alt="Wooden Dices" align="middle"> <b>Wooden Dice</b></p>
                    <p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
                    <p><b>Elven Luck Formula</b>: X ^ 0.3, where x is Arboreal Cities count.</p>
                    <p><b>New Production Formula</b>: (7 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <p><b>Old Production Formula</b>: (6 * x ^ 0.6), where x is Arboreal Cities count.</p>
                    <p><b>New Faction Coin Formula</b>: (1.5 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <p><b>Old Faction Coin Formula</b>: (x ^ 0.7), where x is Arboreal Cities count.</p>
                    <br/>
                    <p><b>Angel</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Heaven'sBrilliance.png" alt="Heaven's Brilliance" align="middle"> <b>Heaven's Brilliance</b></p>
                    <p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
                    <p><b>Requirement</b>: Angels Union</p>
                    <p><b>Effect</b>: Increase the bonus multiplier for all spells at tier 7 and above based on the amount of Holy Sites you own. All Dragon's Breath effects are increased based on the amount of Holy Sites you own. </p>
                    <p><b>Formula</b>: (0.6 * x ^ 0.6), where x is amount of Holy Sites owned.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelicFortitude.png" alt="Angelic Fortitude" align="middle"> <b>Angelic Fortitude</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Angels Union</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the sum of all your spells' activity time this R.</p>
                    <p><b>Formula</b>: (0.035 * x ^ 0.65), where x is seconds in current spells)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/SeraphimFeathers.png" alt="Seraphim Feathers" align="middle"> <b>Seraphim Feathers</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
                    <p><b>Requirement</b>: Angels Union</p>
                    <p><b>Effect</b>: Increase mana regeneration by 60%.</p>
                    <br/>
                    <p><b>Undead</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ZombieApocalypse.png" alt="Zombie Apocalypse" align="middle"> <b>Zombie Apocalypse</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Undead Union</p>
                    <p><b>Effect</b>: Gain assistants based on the total amount of time spent offline. (This R)</p>
                    <p><b>Formula</b>: (0.7 * x ^ 0.7), where x is offline time this R.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/EternalServitude.png" alt="Eternal Servitude" align="middle"> <b>Eternal Servitude</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
                    <p><b>Requirement</b>: Undead Union</p>
                    <p><b>Effect</b>: Increase base production of Undercity by +10000, then increase this effect based on time spent this game.</p>
                    <p><b>Formula</b>: (10000 + 25 * (x / 1800) ^ 2, where x is seconds</p>
                    <br/>
                    <p><b>Titan</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanicAuthority.png" alt="Titanic Authority" align="middle"> <b>Titanic Authority</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Titan Union</p>
                    <p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Royal Exchanges you made.</p>
                    <p><b>Formula</b>: (0.7 * x ^ 0.7), where x is amount of Royal Exchanges you made.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ColossusKingdom.png" alt="Colossus Kingdom" align="middle"> <b>Colossus Kingdom</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
                    <p><b>Requirement</b>: Titan Union</p>
                    <p><b>Effect</b>: Additively gain assistants based on total time spent as Order.</p>
                    <p><b>Formula</b>: (x ^ 0.7), where x is amount of Order time this R.</p>
                    <br/>
                    <p><b>Fairy</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Pheromones.png" alt="Pheromones" align="middle"> <b>Pheromones</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Fairies Union</p>
                    <p><b>Effect</b>: Gain assistants based on time spent affiliated with Fairies. (All time)</p>
                    <p><b>Formula</b>: (0.7 * x ^ 0.7), where x is time spent affiliated with Fairies. (All time)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DreamCatchers.png" alt="Dream Catchers" align="middle"> <b>Dream Catchers</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
                    <p><b>Requirement</b>: Fairies Union</p>
                    <p><b>Effect</b>: Every 30 minutes, multiplicative increase mana regen by a random amount. (starts at 0% on a new run)</p>
                    <br/>
                    <p><b>Demon</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonicFury.png" alt="Demonic Fury" align="middle"> <b>Demonic Fury</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Demons Union</p>
                    <p><b>Effect</b>: Increase production of all buildings based on least time spent between Evil and Chaos this R.</p>
                    <p><b>Formula</b>: (0.12 * min(x, y) ^ 0.7, where x is evil time in seconds and y is chaos time in seconds.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Devastation.png" alt="Devastation" align="middle"> <b>Devastation</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e00) Emerald Coins</p>
                    <p><b>Requirement</b>: Demons Union</p>
                    <p><b>Effect</b>: Increase production of three highest building tiers based on mana regen.</p>
                    <p><b>Formula</b>: (0.35 * x ^ 0.65), where x is mana regen.</p>
                    <br/>
                    <p><b>Faceless</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ForbiddenLanguage.png" alt="Forbidden Language" align="middle"> <b>Forbidden Language</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Faceless Union</p>
                    <p><b>Effect</b>: Increase spell durations based on the amount of Reincarnations made.</p>
                    <p><b>Formula</b>: (X)</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/DimensionDoor.png" alt="Dimension Door" align="middle"> <b>Dimension Door</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
                    <p><b>Requirement</b>: Faceless Union</p>
                    <p><b>Effect</b>: Increase Unique Building production based on highest max mana this reincarnation.</p>
                    <p><b>Formula</b>: (0.013 * x ^ 0.7), where x is highest max mana this R.</p>
                    <br/>
                    <p><b>Elven</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/WoodenDices.png" alt="Wooden Dices" align="middle"> <b>Wooden Dice</b></p>
                    <p><b>Cost</b>: 1 Nod (1e60) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.</p>
                    <p><b>Elven Luck Formula</b>: X ^ 0.3, where x is Arboreal Cities count.</p>
                    <p><b>Production Formula</b>: (7 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <p><b>Faction Coin Formula</b>: (1.5 * x ^ 0.7), where x is Arboreal Cities count.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/Camouflage.png" alt="Camouflage" align="middle"> <b>Camouflage</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Effect</b>: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.</p>
                    <p><b>Formula</b>: (0.68 * x ^ 0.68)</p>
                    <p><b>Note</b>: Applies to formulas that use Assistant count, but not actual assistants.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenDiscipline.png" alt="Elven Discipline" align="middle"> <b>Elven Discipline</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
                    <p><b>Requirement</b>: Elven Union</p>
                    <p><b>Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game.</p>
                    <p><b>Formula</b>: (ln(x))</p>
                    <br/>
                    <p><b>Goblin</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/MoneyisMagic.png" alt="Money is Magic" align="middle"> <b>Money is Magic</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Goblins Union</p>
                    <p><b>Effect</b>: Increase mana regeneration based on the amount of Tax Collections cast in this game.</p>
                    <p><b>Formula</b>: (2 * (ln(x) ^ 1.2)), where x is amount of Tax Collections cast.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/LousyArchitecture.png" alt="Lousy Architecture" align="middle"> <b>Lousy Architecture</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
                    <p><b>Requirement</b>: Goblins Union</p>
                    <p><b>Effect</b>: Reduce Non-Unique buildings cost multiplier.</p>
                    <p><b>Formula</b>: (-0.02)</p>
                    <br/>
                    <p><b>Druid</b></p>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/LunarCycle.png" alt="Lunar Cycle" align="middle"> <b>Lunar Cycle</b></p>
                    <p><b>Cost</b>: 10 Spvg (1e85) Emerald Coins</p>
                    <p><b>Requirement</b>: Druids Union</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.</p>
                    <p><b>Formula</b>: (x + y) ^ 0.65) * (1 / abs(x - y) ^ 0.25), where x is online time in seconds and y is offline time in seconds.</p>
                    <br/>
                    <p><img src="http://musicfamily.org/realm/Factions/picks/GroveFarming.png" alt="Grove Farming" align="middle"> <b>Grove Farming</b></p>
                    <p><b>Cost</b>: 10 Dtg (1e100) Emerald Coins</p>
                    <p><b>Requirement</b>: Druids Union</p>
                    <p><b>Effect</b>: Increase the production of all buildings based on their tier. Lower tiers get better bonuses.</p>
                    <p><b>Formula</b>: (10 * (11 - T) ^ 3), where T is building tier.</p>
                </div>
            </div>
        </div>
        <?php include "../scripts/footer.html"; ?>
