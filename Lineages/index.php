<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>


    <h6>Lineages</h6>
    <p><b>Requirement</b>: R60+
    <p>At R60 you will unlock Lineages, powerful upgrades to your chosen Bloodline that will even allow you to use the spell of other Factions, provided you complete their challenges.
    <p>Your Lineage can't match your Faction.
    <p>Your Lineage is dependant on the Bloodline you chose.
    <p>Lineages need 400 Royal Exchanges of the respective Faction plus their Bloodline to be used. (Needs to be bought Every Abdication)
    <p><b>Note</b>: Levels only need to be bought once.
    <p><b>Note</b>: All Lineages <b>REQUIRE</b> Prestige Faction.</p>
    <div class="shlisting">
        <div class="shelementwhole" style="padding-left: 20px">
            <h6 onclick="shohid($(this));"><b><a href="#" onclick="return false;"><font color="black">Lineage Level Cost</font></a></b></h6>
            <div class="autohide">
                <p>The base costs for lineages are 25 Qa (2.5e16) Faction Coins and each level costs 10 times more. The Ancient Heirloom reduces the cost of lineages that aren't at the maximum level by raising them to the 0.9th power, making the cost multiplier 10^0.9 or 7.943 instead.
                <p><img src="http://musicfamily.org/realm/Factions/picks/AncientHeirloomTrophy.png" alt="Ancient Heirloom" align="middle"><b> Ancient Heirloom</b> (Lore Artifact)</p>
                <p><b>Requirements</b>: Have at least 1 Lineage level purchased.
                <p><b>Chance</b>: Total Lineage levels/2000
                <p><b>Effect</b>: Reduces the cost of Lineages(Except for the highest one).
                <p><b>Cost</b>: 10 Dtg (1e100)
                <p><b>Formula</b>: Without Ancient Heirloom 25 * 10^(15+lineages)
                <p><b>Formula</b>: With Ancient Heirloom (25 * 10^(15+lineages))^0.9
                <p><b>Note</b>: The cost listed below is <b>Without</b> Ancient Heirloom
                <p><b>Level 1</b>: 25 Qa (2.5e16)
                <p><b>Level 2</b>: 250 Qa (2.5e17)
                <p><b>Level 3</b>: 2.5 Qi (2.5e18)
                <p><b>Level 4</b>: 25 Qi (2.5e19)
                <p><b>Level 5</b>: 250 Qi (2.5e20)
                <p><b>Level 6</b>: 2.5 Sx (2.5e21)
                <p><b>Level 7</b>: 25 Sx (2.5e22)
                <p><b>Level 8</b>: 250 Sx (2.5e23)
                <p><b>Leve 9</b>: 2.5 Sp (2.5e24)
                <p><b>Level 10</b>: 25 Sp (2.5e25)
                <p><b>Level 11</b>: 250 Sp (2.5e26)
                <p><b>Level 12</b>: 2.5 Oc (2.5e27)
                <p><b>Level 13</b>: 25 Oc (2.5e28)
                <p><b>Level 14</b>: 250 Oc (2.5e29)
                <p><b>Level 15</b>: 2.5 No (2.5e30)
                <p><b>Level 16</b>: 25 No (2.5e31)
                <p><b>Level 17</b>: 250 No (2.5e32)
                <p><b>Level 18</b>: 2.5 Dc (2.5e33)
                <p><b>Level 19</b>: 25 Dc (2.5e34)
                <p><b>Level 20</b>: 250 Dc (2.5e35)
            </div>
        </div>
    </div>
    <p>You can get Lineage for each Faction (12 in Total)
    <p>You get 3 perks and a Faction Coin boost plus Champion trophy after reaching level 20.
    <p><b>level 5</b>: Perk 1
    <p><b>level 10</b>: Specific FC boost
    <p><b>level 15</b>: Perk 2 - Unlocks Faction spell. (adjusted for your alignment if necessary)

    <p><b>level 20</b>: Perk 3 plus Grand Champion trophy
    <h6> Lineage Menu</h6>
    <h6><img src="http://musicfamily.org/realm/Factions/picks/Lineages.png" usemap="#Lineages-map"></h6>

    <map name="Lineages-map">

        <area target="" research="<b>Fairy Lineage</b><p><b>Base Effect</b>: Makes Farms, Inns and Blacksmiths count 15% more per Lineage level.<p><b>Cost</b>: 400 Fairy Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,14,68,69" shape="rect">
        <area target="" research="<b>Elven Lineage</b><p><b>Base Effect</b>: Gives 1 autoclick per Lineage level.<p><b>Cost</b>: 400 Elven Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,14,131,67" shape="rect">
        <area target="" research="<b>Angel Lineage</b><p><b>Base Effect</b>: Adds 10% mana regeneration per level.<p><b>Cost</b>: 400 Angel Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,16,188,67" shape="rect">
        <area target="" research="<b>Goblin Lineage</b><p><b>Base Effect</b>: Multiplicative 3% gem bonus per level.<p><b>Cost</b>: 400 Goblin Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,76,68,125" shape="rect">
        <area target="" research="<b>Undead Lineage</b><p><b>Base Effect</b>: +1% more Assistants per level.<p><b>Cost</b>: 400 Undead Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,75,130,127" shape="rect">
        <area target="" research="<b>Demon Lineage</b><p><b>Base Effect</b>: Trophies count 50% more per level.<p><b>Cost</b>: 400 Demon Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,73,191,127" shape="rect">
        <area target="" research="<b>Titan Lineage</b><p><b>Base Effect</b>: Royal Exchanges count 100% more per level.<p><b>Cost</b>: 400 Angel and 400 Goblin Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,135,68,187" shape="rect">
        <area target="" research="<b>Druid Lineage</b><p><b>Base Effect</b>: Increase spell duration by 2% per level.<p><b>Cost</b>: 400 Elven and 400 Demon Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,133,130,187" shape="rect">
        <area target="" research="<b>Faceless Lineage</b><p><b>Base Effect</b>: Increase Max Mana by 1% per level.<p><b>Cost</b>: 400 Fairy and 400 Undead Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,134,190,187" shape="rect">
        <area target="" research="<b>Dwarf Lineage</b><p><b>Base Effect</b>: Excavations and Artifacts count 10% more per level.<p><b>Cost</b>: 400 Dwarf Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,193,70,246" shape="rect">
        <area target="" research="<b>Drow Lineage</b><p><b>Base Effect</b>: 5% more offline production per level, Also reduces Drow Bloodline Post Ascension nerf.<p><b>Cost</b>: 400 Drow Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,193,128,247" shape="rect">
        <area target="" research="<b>Dragon Lineage</b><p><b>Base Effect</b>: Unique Buildings count as 12% more per level for all purposes.<p><b>Cost</b>: 400 Dwarf and 400 Drow Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,193,190,246" shape="rect">


    </map>

    <p><b>----------------------------------</b>
    <H6>Fairy</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyLineage.png" alt="Fairy Lineage" align="middle"><b> Fairy Lineage</b></p>
    <p><b>Cost</b>: 400 Fairy Royal Exchanges.
    <p><b>Effect</b>: Makes Farms, Inns and Blacksmiths count 15% more per Lineage level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk1.png" alt="FairyPerk1" align="middle"><b> Fairy Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Makes Fairy Bloodline affect Hall of Legends.
    <p><b>Effect</b>: Also reduces Fairy Bloodline Post Ascension nerf.
    <p><b>Formula</b>: 250 * ((a^0.9)^5)
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Fairy Faction Coins find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk2.png" alt="FairyPerk2" align="middle"><b> Fairy Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Fairy Lineage Challenge.
    <p><b>Challenge</b>: 2k Assistants in less than 10 minutes.
    <p><b>Effect</b>: Unlocks Faction spell. (Fairy Chanting)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk3.png" alt="FairyPerk3" align="middle"><b> Fairy Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Assistants count 1% more per 2000 Unique Buildings.
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyGrandChampionTrophy.png" alt="FairyGrandChampionTrophy.png" align="middle"> Fairy Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Fairy Lineage to level 20 and purchase 3 Fairy Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Elven</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenLineage.png" alt="Elven Lineage" align="middle"><b> Elven Lineage</b></p>
    <p><b>Cost</b>: 400 Elven Royal Exchanges.
    <p><b>Effect</b>: Gives 1 autoclick per Lineage level.
    <p><b>Effect</b>: Also increase clicks count by a multiplicative 5000% per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk1.png" alt="ElvenPerk1" align="middle"><b> Elven Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Increase autoclicks provided by Elven Bloodlines to 9 per second and their multiplier to x10000.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Elven Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk2.png" alt="ElvenPerk2" align="middle"><b> Elven Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Elven Lineage Challenge.
    <p><b>Challenge</b>: 7777 autoclicks in the first 5 minutes of a run.
    <p><b>Effect</b>: Unlocks Faction spell. (Moon Blessing)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk3.png" alt="ElvenPerk3" align="middle"><b> Elven Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Increase base clicking reward by 5% of Unique Building production for every 777 of them.
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenGrandChampionTrophy.png" alt="ElvenGrandChampionTrophy.png" align="middle"> Elven Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Elven Lineage to level 20 and purchase 3 Elven Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Angel</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelLineage.png" alt="AngelLineage" align="middle"><b> Angel Lineage</b></p>
    <p><b>Cost</b>: 400 Angel Royal Exchanges.
    <p><b>Effect</b>: Adds 10% mana regeneration per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk1.png" alt="AngelPerk1" align="middle"><b> Angel Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Removes Angel Bloodline dropoff when no spells are active.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Angel Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk2.png" alt="AngelPerk2" align="middle"><b> Angel Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Angel Lineage Challenge.
    <p><b>Challenge</b>: Play 8 hours straight with at least 1 spell active. Note: This must be done within first 8 hours and 1 minute since start of run.
    <p><b>Effect</b>: Unlocks Faction spell. (God's Hand)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk3.png" alt="AngelPerk3" align="middle"><b> Angel Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20
    <p><b>Effect</b>: Increase God's Hand bonus by an additional 500000.0% for every 1000 Unique Buildings.(rounded down to nearest 1000)
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelGrandChampionTrophy.png" alt="AngelGrandChampionTrophy.png" align="middle"> Angel Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Angel Lineage to level 20 and purchase 3 Angel Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Goblin</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinLineage.png" alt="GoblinLineage" align="middle"><b> Goblin Lineage</b></p>
    <p><b>Cost</b>: 400 Goblin Royal Exchanges.
    <p><b>Effect</b>: Multiplicative 2.5% gem bonus per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk1.png" alt="GoblinPerk1" align="middle"><b> Goblin Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: +120 seconds of production for tax collection.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Goblin Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk2.png" alt="GoblinPerk2" align="middle"><b> Goblin Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Goblin Lineage Challenge.
    <p><b>Challenge</b>: Cast 1 million TCs in a single game.
    <p><b>Effect</b>: Unlocks Faction spell. (Goblin's Greed)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk3.png" alt="GoblinPerk3" align="middle"><b> Goblin Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Unique Building's base production increased by 2% for every 650 Unique Buildings.
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinGrandChampionTrophy.png" alt="GoblinGrandChampionTrophy.png" align="middle"> Goblin Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Goblin Lineage to level 20 and purchase 3 Goblin Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Undead</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadLineage.png" alt="UndeadLineage" align="middle"><b> Undead Lineage</b></p>
    <p><b>Cost</b>: 400 Undead Royal Exchanges.
    <p><b>Effect</b>: +1% more Assistants per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk1.png" alt="UndeadPerk1" align="middle"><b> Undead Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Undead Bloodline multiplies your assistants by 8% of the amount instead of adding them.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Undead Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk2.png" alt="UndeadPerk2" align="middle"><b> Undead Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Undead Lineage Challenge.
    <p><b>Challenge</b>: Have Night Time's spell duration be higher than 1 minute.
    <p><b>Effect</b>: Unlocks Faction spell. (Night Time)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk3.png" alt="UndeadPerk3" align="middle"><b> Undead Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Gain 10 assistants for every 500 Unique Buildings.
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadGrandChampionTrophy.png" alt="UndeadGrandChampionTrophy.png" align="middle"> Undead Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Undead Lineage to level 20 and purchase 3 Undead Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Demon</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonLineage.png" alt="DemonLineage" align="middle"><b> Demon Lineage</b></p>
    <p><b>Cost</b>: 400 Demon Royal Exchanges.
    <p><b>Effect</b>: Trophies count 30% more per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk1.png" alt="DemonPerk1" align="middle"><b> Demon Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: 25 max mana per 6 trophies unlocked.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Demon Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk2.png" alt="DemonPerk2" align="middle"><b> Demon Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Demon Lineage Challenge.
    <p><b>Challenge</b>: 10 days of HFB activity time this game.
    <p><b>Effect</b>: Unlocks Faction spell. (Hellfire Blast)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk3.png" alt="DemonPerk3" align="middle"><b> Demon Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: 50% to gem production per 666 Unique Buildings (multiplicative)
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonGrandChampionTrophy.png" alt="DemonGrandChampionTrophy.png" align="middle"> Demon Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Demon Lineage to level 20 and purchase 3 Demon Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Titan</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanLineage.png" alt="TitanLineage" align="middle"><b> Titan Lineage</b></p>
    <p><b>Cost</b>: 400 Angel and 400 Goblin Royal Exchanges.
    <p><b>Effect</b>: Royal Exchanges count 100% more per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk1.png" alt="TitanPerk1" align="middle"><b> Titan Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Reduces spell costs by 25%.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x50 more Angel and Goblin Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk2.png" alt="TitanPerk2" align="middle"><b> Titan Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Titan Lineage Challenge.
    <p><b>Challenge</b>: 25K mana per second as pure Titan. (so no Dragon Trade Treaty)
    <p><b>Effect</b>: Unlocks Faction spell. (Lightning Strike)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk3.png" alt="TitalPerk3" align="middle"><b> Titan Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: All tier 4 buildings are boosted by 100M% (1e8%) and all tier 7 buildings are boosted by 1M% (1e6%) for every 765 Unique Buildings.
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanGrandChampionTrophy.png" alt="TitanGrandChampionTrophy.png" align="middle"> Titan Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Titan Lineage to level 20 and purchase 3 Titan Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Druid</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidLineage.png" alt="DruidLineage" align="middle"><b> Druid Lineage</b></p>
    <p><b>Cost</b>: 400 Elven and 400 Demon Royal Exchanges.
    <p><b>Effect</b>: Increase spell duration by 2% per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk1.png" alt="DruidPerk1" align="middle"><b> Druid Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: increases Non-Unique buildings production based on time spent in this game.
    <p><b>Formula</b>: 0.015 * x ^ 1.025 where x is seconds (this game)
    <p><b>Level 10</b>
    <p><b>Effect</b>: x50 more Elven and Demon Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk2.png" alt="DruidPerk2" align="middle"><b> Druid Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Druid Lineage Challenge.
    <p><b>Challenge</b>: Have a mana regeneration of at least double your max mana.
    <p><b>Effect</b>: Unlocks Faction spell. (Grand Balance)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk3.png" alt="DruidPerk3" align="middle"><b> Druid Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Grand Balance multiplier is increased by 0.5% per 750 Unique Buildings. (hopefully multiplicative)
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidGrandChampionTrophy.png" alt="DruidGrandChampionTrophy.png" align="middle"> Druid Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Druid Lineage to level 20 and purchase 3 Druid Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Faceless</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessLineage.png" alt="FacelessLineage" align="middle"><b> Faceless Lineage</b></p>
    <p><b>Cost</b>: 400 Fairy and 400 Undead Royal Exchanges.
    <p><b>Effect</b>: Increase Max Mana by 1.5% per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk1.png" alt="FacelessPerk1" align="middle"><b> Faceless Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Faceless Bloodline counts total mana produced (This R) and increases mana per second based on the amount of assistants you own.
    <p><b>Formula</b>: 0.95 * x ^ 0.95, where x is assistants you own
    <p><b>Level 10</b>
    <p><b>Effect</b>: x50 more Fairy and Undead Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk2.png" alt="FacelessPerk2" align="middle"><b> Faceless Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Faceless Lineage Challenge.
    <p><b>Challenge</b>: Cast 100 Brainwaves in a single game.
    <p><b>Effect</b>: Unlocks Faction spell. (Brainwave)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk3.png" alt="FacelessPerk3" align="middle"><b> Faceless Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: 5% more assistant production per 1k Unique Buildings.
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessGrandChampionTrophy.png" alt="FacelessGrandChampionTrophy.png" align="middle"> Faceless Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Faceless Lineage to level 20 and purchase 3 Faceless Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Dwarf</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfLineage.png" alt="DwarfLineage" align="middle"><b> Dwarf Lineage</b></p>
    <p><b>Cost</b>: 400 Dwarf Royal Exchanges.
    <p><b>Effect</b>: Excavations and Artifacts count 10% more per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk1.png" alt="DwarfPerk1" align="middle"><b> Dwarf Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Dwarven Bloodline increases faction coin find chance based on total time spent as Good. (1 day of Good = 19,520%).
    <p><b>Formula</b>: 50 * x ^ 0.75 where x is seconds of good alignment (this R)
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Dwarf Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk2.png" alt="DwarfPerk2" align="middle"><b> Dwarf Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Dwarf Lineage Challenge.
    <p><b>Challenge</b>: Have 10k Excavations.
    <p><b>Effect</b>: Unlocks Faction spell. (Diamond Pickaxe)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk3.png" alt="DwarfPerk3" align="middle"><b> Dwarf Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Increase Faction Coin find chance with excavations by 250% for every 500 Unique Building.
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfGrandChampionTrophy.png" alt="Dwarf Grand Champion.png" align="middle"> Dwarf Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Dwarf Lineage to level 20 and purchase 3 Dwarf Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Drow</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowLineage.png" alt="DrowLineage" align="middle"><b> Drow Lineage</b></p>
    <p><b>Cost</b>: 400 Drow Royal Exchanges.
    <p><b>Effect</b>: Multiplicative 75% more offline production per level.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk1.png" alt="DrowPerk1" align="middle"><b> Drow Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Drow Bloodline also counts online playtime in this game and reduces ascension penalty from ^0.1 to ^0.9.
    <p><b>Formula</b>: (0.15 * (t1 + t2))^0.9, where t1 is offline time this R, t2 is online time this game.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x100 Drow Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk2.png" alt="DrowPerk2" align="middle"><b> Drow Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Drow Lineage Challenge.
    <p><b>Challenge</b>: 30 days offline across all Reincarnations.
    <p><b>Effect</b>: Unlocks Faction spell. (Combo Strike)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk3.png" alt="DrowPerk3" align="middle"><b> Drow Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Increase offline production by 10.0% for every 500 Unique Building.
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowGrandChampionTrophy.png" alt="DrowGrandChampionTrophy.png" align="middle"> Drow Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Drow Lineage to level 20 and purchase 3 Drow Lineage perks.
    <p><b>----------------------------------</b>
    <H6>Dragon</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonLineage.png" alt="Dragonineage" align="middle"><b> Dragon Lineage</b></p>
    <p><b>Cost</b>: 400 Dwarf and 400 Drow Royal Exchanges.
    <p><b>Effect</b>: Unique Buildings count as 12% more per level for all purposes.
    <p><b>Level 5</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk1.png" alt="DragonPerk1" align="middle"><b> Dragon Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.
    <p><b>Effect</b>: Dragon Bloodline increases the production of Unique Buildings by 1.75% per building of the same type.
    <p><b>Level 10</b>
    <p><b>Effect</b>: x50 more Dwarf and Drow Faction Coin find chance.
    <p><b>Level 15</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk2.png" alt="DragonPerk2" align="middle"><b> Dragon Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.
    <p><b>Effect</b>: Unlocks Dragon Lineage Challenge.
    <p><b>Challenge</b>: 5 spells at Tier 5 in less than 10 minutes.
    <p><b>Effect</b>: Unlocks Faction spell. (Dragons Breath)
    <p><b>Level 20</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk3.png" alt="DragonPerk3" align="middle"><b> Dragon Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.
    <p><b>Effect</b>: Maximum mana increased by 1.25 for every 2 Unique Buildings.
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonGrandChampionTrophy.png" alt="DragonGrandChampionTrophy.png" align="middle"> Dragon Grand Champion Trophy.
    <p><b>Requirement</b>: Upgrade Dragon Lineage to level 20 and purchase 3 Dragon Lineage perks.
    <p><b>----------------------------------</b>
        <?php include "../scripts/footer.html"; ?>
