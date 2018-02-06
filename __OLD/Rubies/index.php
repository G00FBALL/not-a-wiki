<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>
    <p><b>In game description:</b>
    <p>Rubies are a rare resource which allows you to increase all aspects of your production. Accumulating them will unlock new upgrades and trophies, providing both a permanent passive bonus and the ability to spend them to purchase new perks.
    <p>Rubies persist through Abdications and Reincarnations.</p>
    <p>Prior to "The Secrets of the Ancients" expansion, Rubies were only available in the shop. Since then, Rubies can also be found for free by excavating.
    <p>Along with coins, Faction coins and gems, Rubies are another kind of currency. They enable you to buy special items that cannot be bought otherwise.
    <p><b>Getting Rubies</b>
    <p>You can either buy Rubies in the shop, find free Rubies at Events, or by excavating.
    <p>You can buy an unlimited number of Rubies, or you can excavate for them but they get progressively harder to find.
    <div id="rubcalc" class="calc">
        <table>
            <tr>
                <th>Ruby Excavation Count and Cost</th>
            </tr>
        </table>
        <table>
            <tr>
                <th style="width: 15%">Ruby</th>
                <th style="width: 10%">E290</th>
                <th style="width: 10%">Easter</th>
                <th style="width: 15%">Ascension</th>
                <th style="width: 15%">Excavation</th>
                <th style="width: 17.5%">Coins</th>
                <th>Gems</th>
            </tr>
            <tr>
                <td><input id="rub" type="number" min="1" max="29" value="1"/></td>
                <td><label><input id="E290" type="checkbox"/></label></td>
                <td><label><input id="eas" type="checkbox"/></label></td>
                <td><label><input id="asc" type="checkbox"/></label></td>
                <td id="exc"></td>
                <td id="coi"></td>
                <td id="gem"></td>
            </tr>
        </table>
        <script>
            function rubcalc() {
                var rub = parseInt($('input#rub').val()),
                    mult = 1.2,
                    cost = 0,
                    base = $('#asc').prop('checked') ? 1e27 ** 0.75 : 1e27;
                var exc = 25 * rub * (rub + 1);
                $('#exc').html(exc);
                if ($('#E290').prop('checked')) mult -= 0.025;
                if ($('#eas').prop('checked')) mult -= 0.025;
                if ($('#asc').prop('checked')) mult = 1 + (mult - 1) / 5;
                cost = base * (1 - mult ** exc) / (1 - mult);
                $('#coi').html(cost.toExponential(2));
                $('#gem').html((1.41421e-6 * (cost + 125e9) ** 0.5 - 0.5).toExponential(2));
            }
            rubcalc();
            $('#rubcalc').on('input', rubcalc);
            $('#rubcalc :checkbox').on('change', rubcalc);
        </script>
    </div>
    <p>The formula for the number of excavations required for each ruby is 25n(n+1), where n is the number of rubies.
    <p>Finding the 1st, 10th, 25th and 50th ruby rewards a trophy.
    <p><b>Spending Rubies</b>
    <p>Rubies enable you to buy:
    <p>Excavation Resets : Costs 1 Ruby - 1-2999, 2 Rubies 3000-5999, 3 Rubies 6000-8999, 4 Rubies 9000-11999, 5 Rubies 12000-14999.
    <p>Note: The counter is reset, but you will not find rubies again.
    <p>Event items (such as snowballs during the Christmas event)
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyPower.png" align="middle"><b> Ruby Power Upgrade</b></p>
    <p>Finding 1 Ruby will unlock the Ruby power upgrade which unlocks The Power of Rubies.
    <p>Each Ruby enables you to purchase one of the Ruby powers listed below:
    <p>Ruby power bonus will also increase by Tier based on all-time amounts of Rubies collected. See Ruby Upgrades for more details.
    <p><b>------------------------------</b>
    <p><b>Ruby Upgrades</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyUpgradePanel.png" alt=""></p>
    <p><b>Ruby Assistant</b></p>
    <p><b>Cost</b>: 1 Ruby (+ 1 for every time this upgrade has been purchased)
    <p><b>Unlock Requirements</b>: Unlocked by Ruby Power
    <p><b>Effect</b>: Adds 1 assistant
    <p>Persists through Abdications and Reincarnations
    <p><b>------------------------------</b>
    <p><b>Ruby Mana Regeneration</b></p>
    <p><b>Cost</b>: 1 Ruby (+ 1 for every time this upgrade has been purchased)
    <p><b>Unlock Requirements</b>: Unlocked by Ruby Power
    <p><b>Effect</b>: Adds 0.5 mana regen
    <p>Persists through Abdications and Reincarnations
    <p><b>------------------------------</b>
    <p><b>Ruby Max Mana</b></p>
    <p><b>Cost</b>: 1 Ruby (+ 1 for every time this upgrade has been purchased)
    <p><b>Unlock Requirements</b>: Unlocked by Ruby Power
    <p><b>Effect</b>: Adds 25 mana
    <p>Persists through Abdications and Reincarnations
    <p><b>------------------------------</b>
    <p><b>Ruby Gem Bonus</b></p>
    <p><b>Cost</b>: 1 Ruby (+ 1 for every time this upgrade has been purchased)
    <p><b>Unlock Requirements</b>: Unlocked by Ruby Power
    <p><b>Effect</b>: Adds 0.5% to the gem production bonus
    <p>Persists through Abdications and Reincarnations
    <p><b>------------------------------</b>
    <p><b>Ruby Royal Trading</b></p>
    <p><b>Cost</b>: 1 Ruby (+ 1 for every time this upgrade has been purchased)
    <p><b>Unlock Requirements</b>: Unlocked by Ruby Power
    <p><b>Effect</b>: Adds 1.5% to the royal exchange production bonus
    <p>Persists through Abdications and Reincarnations
    <p><b>------------------------------</b>
    <p><b>Ruby Bonus Reset</b></p>
    <p>Reset all the ruby powers to 0 and get all your rubies back. Cost: 1 Ruby.</p>
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier1.png" alt="" align="middle"> <b>Ruby Tier: 1</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 50 Rubies
    <p><b>Effect</b>: Increases ruby power by 100% to 200%.
    <p><b>Note</b>: 58 rubies can be purchased in the Shop for 125 kreds (160 kreds for $15 with 35 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier2.png" alt="" align="middle"> <b>Ruby Tier: 2</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 100 Rubies
    <p><b>Effect</b>: Increases ruby power by 100% to 300%.
    <p><b>Note</b>: 104 rubies can be purchased for 200 kreds (225 kreds for $20 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier3.png" alt="" align="middle"> <b>Ruby Tier: 3</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 150 Rubies
    <p><b>Effect</b>: Increases ruby power by 100% to 400%.
    <p><b>Note</b>: 152 rubies can be purchased for 300 kreds (335 kreds for $30 with 35 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier4.png" alt="" align="middle"> <b>Ruby Tier: 4</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 250 Rubies
    <p><b>Effect</b>: Increases ruby power by 200% to 600%.
    <p><b>Note</b>: 280 rubies can be purchased for 500 kreds (500 kreds for $45 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier5.png" alt="" align="middle"> <b>Ruby Tier: 5</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 350 Rubies
    <p><b>Effect</b>: Increases ruby power by 200% to 800%.
    <p><b>Note</b>: 350 rubies can be purchased for 650 kreds (675 kreds for $60 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier6.png" alt="" align="middle"> <b>Ruby Tier: 6</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 450 Rubies
    <p><b>Effect</b>: Increases ruby power by 200% to 1000%.
    <p><b>Note</b>: 454 rubies can be purchased for 850 kreds (900 kreds for $80 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier7.png" alt="" align="middle"> <b>Ruby Tier: 7</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 550 Rubies
    <p><b>Effect</b>: Increases ruby power by 200% to 1200%.
    <p><b>Note</b>: 560 rubies can be purchased for 1000 kreds (1015 kreds for $90 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier8.png" alt="" align="middle"> <b>Ruby Tier: 8</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 650 Rubies
    <p><b>Effect</b>: Increases ruby power by 200% to 1400%.
    <p><b>Note</b>: 664 rubies can be purchased for 1200 kreds (1200 kreds for $105 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier9.png" alt="" align="middle"> <b>Ruby Tier: 9</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 800 Rubies
    <p><b>Effect</b>: Increases ruby power by 300% to 1700%.
    <p><b>Note</b>: 800 rubies can be purchased for 1475 kreds (1485 kreds for $130 with 10 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier10.png" alt="" align="middle"> <b>Ruby Tier: 10</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 950 Rubies
    <p><b>Effect</b>: Increases ruby power by 300% to 2000%.
    <p><b>Note</b>: 954 rubies can be purchased for 1725 kreds (1765 kreds for $155 with 40 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier11.png" alt="" align="middle"> <b>Ruby Tier: 11</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 1100 Rubies
    <p><b>Effect</b>: Increases ruby power by 300% to 2300%.
    <p><b>Note</b>: 1120 rubies can be purchased for 2000 kreds (2050 kreds for $180 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier12.png" alt="" align="middle"> <b>Ruby Tier: 12</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 1250 Rubies
    <p><b>Effect</b>: Increases ruby power by 300% to 2600%.
    <p><b>Note</b>: 1256 rubies can be purchased for 2275 kreds (2300 kreds for $200 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier13.png" alt="" align="middle"> <b>Ruby Tier: 13</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 1400 Rubies
    <p><b>Effect</b>: Increases ruby power by 300% to 2900%.
    <p><b>Note</b>: 1400 rubies can be purchased for 2500 kreds (2525 kreds for $220 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier14.png" alt="" align="middle"> <b>Ruby Tier: 14</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 1600 Rubies
    <p><b>Effect</b>: Increases ruby power by 400% to 3300%.
    <p><b>Note</b>: 1608 rubies can be purchased for 2900 kreds (2915 kreds for $255 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier15.png" alt="" align="middle"> <b>Ruby Tier: 15</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 1800 Rubies
    <p><b>Effect</b>: Increases ruby power by 400% to 3700%.
    <p><b>Note</b>: 1806 rubies can be purchased for 3250 kreds (3250 kreds for $285 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier16.png" alt="" align="middle"> <b>Ruby Tier: 16</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 2000 Rubies
    <p><b>Effect</b>: Increases ruby power by 400% to 4100%.
    <p><b>Note</b>: 2008 rubies can be purchased for 3600 kreds (3610 kreds for $315 with 10 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier17.png" alt="" align="middle"> <b>Ruby Tier: 17</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 2200 Rubies
    <p><b>Effect</b>: Increases ruby power by 400% to 4500%.
    <p><b>Note</b>: 2200 rubies can be purchased for 3975 kreds (4015 kreds for $350 with 40 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier18.png" alt="" align="middle"> <b>Ruby Tier: 18</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 2400 Rubies
    <p><b>Effect</b>: Increases ruby power by 400% to 4900%.
    <p><b>Note</b>: 2402 rubies can be purchased for 4325 kreds (4350 kreds for $380 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier19.png" alt="" align="middle"> <b>Ruby Tier: 19</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 2650 Rubies
    <p><b>Effect</b>: Increases ruby power by 500% to 5400%.
    <p><b>Note</b>: 2656 rubies can be purchased for 4775 kreds (4825 kreds for $420 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier20.png" alt="" align="middle"> <b>Ruby Tier: 20</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 2900 Rubies
    <p><b>Effect</b>: Increases ruby power by 500% to 5900%.
    <p><b>Note</b>: 2904 rubies can be purchased for 5200 kreds (5215 kreds for $455 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier21.png" alt="" align="middle"> <b>Ruby Tier: 21</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 3150 Rubies
    <p><b>Effect</b>: Increases ruby power by 500% to 6400%.
    <p><b>Note</b>: 3150 rubies can be purchased for 5650 kreds (5665 kreds for $495 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier22.png" alt="" align="middle"> <b>Ruby Tier: 22</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 3400 Rubies
    <p><b>Effect</b>: Increases ruby power by 500% to 6900%.
    <p><b>Note</b>: 3408 rubies can be purchased for 6100 kreds (6135 kreds for $535 with 35 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier23.png" alt="" align="middle"> <b>Ruby Tier: 23</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 3650 Rubies
    <p><b>Effect</b>: Increases ruby power by 500% to 7400%.
    <p><b>Note</b>: 3650 rubies can be purchased for 6525 kreds (6540 kreds for $570 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier24.png" alt="" align="middle"> <b>Ruby Tier: 24</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 3900 Rubies
    <p><b>Effect</b>: Increases ruby power by 600% to 8000%.
    <p><b>Note</b>: 3920 rubies can be purchased for 7000 kreds (7010 kreds for $610 with 10 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier25.png" alt="" align="middle"> <b>Ruby Tier: 25</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 4200 Rubies
    <p><b>Effect</b>: Increases ruby power by 600% to 8600%.
    <p><b>Note</b>: 4200 rubies can be purchased for 7500 kreds (7515 kreds for $655 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier26.png" alt="" align="middle"> <b>Ruby Tier: 26</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 4500 Rubies
    <p><b>Effect</b>: Increases ruby power by 600% to 9200%.
    <p><b>Note</b>: 4502 rubies can be purchased for 8050 kreds (8050 kreds for $700 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier27.png" alt="" align="middle"> <b>Ruby Tier: 27</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 4800 Rubies
    <p><b>Effect</b>: Increases ruby power by 600% to 9800%.
    <p><b>Note</b>: 4808 rubies can be purchased for 8600 kreds (8615 kreds for $750 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier28.png" alt="" align="middle"> <b>Ruby Tier: 28</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 5150 Rubies
    <p><b>Effect</b>: Increases ruby power by 600% to 10400%.
    <p><b>Note</b>: 5154 rubies can be purchased for 9225 kreds (9250 kreds for $805 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier29.png" alt="" align="middle"> <b>Ruby Tier: 29</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 5500 Rubies
    <p><b>Effect</b>: Increases ruby power by 600% to 11000%.
    <p><b>Note</b>: 5504 rubies can be purchased for 9875 kreds (9875 kreds for $860 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier30.png" alt="" align="middle"> <b>Ruby Tier: 30</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 5850 Rubies
    <p><b>Effect</b>: Increases ruby power by 700% to 11700%.
    <p><b>Note</b>: 5880 rubies can be purchased for 10500 kreds (10510 kreds for $915 with 10 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier31.png" alt="" align="middle"> <b>Ruby Tier: 31</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 6200 Rubies
    <p><b>Effect</b>: Increases ruby power by 700% to 12400%.
    <p><b>Note</b>: 6208 rubies can be purchased for 11100 kreds (11140 kreds for $970 with 40 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier32.png" alt="" align="middle"> <b>Ruby Tier: 32</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 6550 Rubies
    <p><b>Effect</b>: Increases ruby power by 700% to 13100%.
    <p><b>Note</b>: 6554 rubies can be purchased for 11725 kreds (11725 kreds for $1020 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier33.png" alt="" align="middle"> <b>Ruby Tier: 33</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 6900 Rubies
    <p><b>Effect</b>: Increases ruby power by 700% to 13800%.
    <p><b>Note</b>: 6904 rubies can be purchased for 12375 kreds (12400 kreds for $1080 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier34.png" alt="" align="middle"> <b>Ruby Tier: 34</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 7300 Rubies
    <p><b>Effect</b>: Increases ruby power by 700% to 14500%.
    <p><b>Note</b>: 7302 rubies can be purchased for 13050 kreds (13100 kreds for $1140 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier35.png" alt="" align="middle"> <b>Ruby Tier: 35</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 7700 Rubies
    <p><b>Effect</b>: Increases ruby power by 800% to 15300%.
    <p><b>Note</b>: 7712 rubies can be purchased for 13800 kreds (13800 kreds for $1200 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier36.png" alt="" align="middle"> <b>Ruby Tier: 36</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 8100 Rubies
    <p><b>Effect</b>: Increases ruby power by 800% to 16100%.
    <p><b>Note</b>: 8120 rubies can be purchased for 14500 kreds (14525 kreds for $1265 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier37.png" alt="" align="middle"> <b>Ruby Tier: 37</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 8500 Rubies
    <p><b>Effect</b>: Increases ruby power by 800% to 16900%.
    <p><b>Note</b>: 8504 rubies can be purchased for 15200 kreds (15225 kreds for $1325 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier38.png" alt="" align="middle"> <b>Ruby Tier: 38</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 8900 Rubies
    <p><b>Effect</b>: Increases ruby power by 800% to 17700%.
    <p><b>Note</b>: 8910 rubies can be purchased for 15950 kreds (15965 kreds for $1390 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier39.png" alt="" align="middle"> <b>Ruby Tier: 39</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 9350 Rubies
    <p><b>Effect</b>: Increases ruby power by 800% to 18500%.
    <p><b>Note</b>: 9354 rubies can be purchased for 16725 kreds (16775 kreds for $1460 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier40.png" alt="" align="middle"> <b>Ruby Tier: 40</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 9800 Rubies
    <p><b>Effect</b>: Increases ruby power by 900% to 19400%.
    <p><b>Note</b>: 9800 rubies can be purchased for 17500 kreds (17525 kreds for $1525 with 25 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier41.png" alt="" align="middle"> <b>Ruby Tier: 41</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 10250 Rubies
    <p><b>Effect</b>: Increases ruby power by 900% to 20300%.
    <p><b>Note</b>: 10254 rubies can be purchased for 18350 kreds (18400 kreds for $1600 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier42.png" alt="" align="middle"> <b>Ruby Tier: 42</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 10700 Rubies
    <p><b>Effect</b>: Increases ruby power by 900% to 21200%.
    <p><b>Note</b>: 10710 rubies can be purchased for 19150 kreds (19190 kreds for $1670 with 40 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier43.png" alt="" align="middle"> <b>Ruby Tier: 43</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 11150 Rubies
    <p><b>Effect</b>: Increases ruby power by 900% to 22100%.
    <p><b>Note</b>: 11150 rubies can be purchased for 19950 kreds (20000 kreds for $1740 with 50 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier44.png" alt="" align="middle"> <b>Ruby Tier: 44</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 11650 Rubies
    <p><b>Effect</b>: Increases ruby power by 900% to 23000%.
    <p><b>Note</b>: 11654 rubies can be purchased for 20850 kreds (20860 kreds for $1815 with 10 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier45.png" alt="" align="middle"> <b>Ruby Tier: 45</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 12150 Rubies
    <p><b>Effect</b>: Increases ruby power by 1000% to 24000%.
    <p><b>Note</b>: 12154 rubies can be purchased for 21725 kreds (21765 kreds for $1895 with 40 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier46.png" alt="" align="middle"> <b>Ruby Tier: 46</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 12650 Rubies
    <p><b>Effect</b>: Increases ruby power by 1000% to 25000%.
    <p><b>Note</b>: 12658 rubies can be purchased for 22625 kreds (22640 kreds for $1970 with 15 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier47.png" alt="" align="middle"> <b>Ruby Tier: 47</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 13150 Rubies
    <p><b>Effect</b>: Increases ruby power by 1000% to 26000%.
    <p><b>Note</b>: 13160 rubies can be purchased for 23500 kreds (23500 kreds for $2045 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier48.png" alt="" align="middle"> <b>Ruby Tier: 48</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 13650 Rubies
    <p><b>Effect</b>: Increases ruby power by 1000% to 27000%.
    <p><b>Note</b>: 13658 rubies can be purchased for 24425 kreds (24425 kreds for $2125 with 0 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier49.png" alt="" align="middle"> <b>Ruby Tier: 49</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 14200 Rubies
    <p><b>Effect</b>: Increases ruby power by 1000% to 28000%.
    <p><b>Note</b>: 14208 rubies can be purchased for 25400 kreds (25410 kreds for $2210 with 10 kreds extra).
    <p><b>------------------------------</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyTier50.png" alt="" align="middle"> <b>Ruby Tier: 50</b></p>
    <p><b>Cost</b>: 1 Coin
    <p><b>Unlock Requirements</b>: 14750 Rubies
    <p><b>Effect</b>: Increases ruby power by 1100% to 29100%.
    <p><b>Note</b>: 14768 rubies can be purchased for 26400 kreds (26450 kreds for $2300 with 50 kreds extra).
    <p><b>------------------------------</b>
<?php include "../scripts/footer.html"; ?>