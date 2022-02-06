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
            <tbody><tr><th colspan="9">Ruby Excavation Count and Cost</th></tr>
            <tr>
		<th style="width: 10%">Ruby</th>
		<th style="width: 7%" id="Ascension"></th>
		<th style="width: 7%">DN8</th>
		<th style="width: 7%">Easter</th>
		<th style="width: 13%">Maker</th>
		<th style="width: 14%">Ascension</th>
		<th style="width: 14%">Excavation</th>
		<th style="width: 14%">Coins</th>
		<th style="width: 14%">Gems</th>
            </tr>
            <tr>
		<td><input id="rub" type="number" min="1" max="99" value="1"></td>
		<td><label><input id="Research" type="checkbox"></label></td>
		<td><label><input id="DN8" type="checkbox"></label></td>
                <td><label><input id="eas" type="checkbox"></label></td>
                <td><input id="maker" type="number" step="0.001" min="0.000" max="0.100" value="0.000"></td>
                <td><input id="asc" type="number" min="0" max="4" value="0"></td>
                <td id="exc"></td>
                <td id="coi"></td>
                <td id="gem"></td>
            </tr>
        </tbody></table>
        <script>
            function rubcalc() {
                var asc = parseInt($('input#asc').val());
                var maker = parseFloat($('input#maker').val());
                var rub = parseInt($('input#rub').val()),
                    mult = 1.2,
                    cost = 0,
                    base = ($('#eas').prop('checked')) ? 1e24 : 1e27;
                    base = (asc > 0) ? Math.pow(base , Math.pow(0.75 , asc)) : base;
                var exc = 25 * rub * (rub + 1);
                $('#exc').html(exc);
		if ($('#Research').prop('checked')) mult -= 0.02;
		if ($('#DN8').prop('checked')) mult -= 0.02;
                if (maker > 0) {
                    mult -= maker;
                }
                if (asc > 0) {
                    mult = 1 + ((mult - 1) / (asc * 5));
                }
                cost = base * ((1 - Math.pow(mult , exc)) / (1 - mult));
                $('#coi').html(cost.toExponential(2));
                if (asc == 2) {
                    $('#gem').html((((1 + 8e-4 * cost) ** 0.5 - 1) * 0.5).toExponential(2));
                } else if (asc == 4) {
                    $('#gem').html((((1 + 8e-27 * cost) ** 0.5 - 1) * 0.5).toExponential(2));
                } else {
                    $('#gem').html((((1 + 8e-12 * cost) ** 0.5 - 1) * 0.5).toExponential(2));
                }
		if (asc < 4) {
			document.getElementById("Ascension").innerHTML = "E290";
		} else {
			document.getElementById("Ascension").innerHTML = "E13125";
		}
            }
            rubcalc();
            $('#rubcalc').on('input', rubcalc);
            $('#rubcalc :checkbox').on('change', rubcalc);
        </script>
    </div>
    <p>The formula for the number of excavations required for each ruby is (25 * n * (n + 1)), where n is the number of rubies found from excavations.</p>
    <p>Finding the 1st, 10th, 25th and 50th ruby rewards a trophy.</p>
    <p><b>Spending Rubies</b></p>
    <p>Rubies enable you to buy: Excavation Resets (see <b><a target="_blank" href="http://musicfamily.org/realm/Artifacts/">Artifacts</a></b> page)), Event items (such as snowballs during the Christmas event) or mainly <b>Ruby Upgrades</b>.</p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/RubyPower.png" align="middle"><b> Ruby Power Upgrade</b></p>
    <p>Finding 1 Ruby will unlock the Ruby power upgrade which unlocks The Power of Rubies.</p>
    <p>Each Ruby enables you to purchase one of the Ruby powers listed below:</p>
    <p>Ruby power bonus will also increase by Tier based on all-time amounts of Rubies collected. See Ruby Upgrades for more details.</p>
    <hr>
    <p><b>Ruby Upgrade Panel</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/RubyUpgradePanel.png" alt=""></p>
       <a id="Upgrades"></a>
    <table class="numtable">
        <tr>
            <th colspan="4">Ruby Upgrades</th>
       </tr>
        <thead>
        <tr>
            <th colspan="4">All Ruby upgrades have both an additive and a multiplicative bonus.</th>
       </tr>
        <tr>
            <th colspan="4">All ruby upgrades persists through Abdications and Reincarnations.</td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Requirement</th>
            <th>Effect</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Assistant</td>
            <td>1 Ruby (+1 for every time this upgrade has been purchased)</td>
            <td>Unlocked by Ruby Power</td>
            <td>+1 assistant and +1% assistant count (per upgrade)</td>
        </tr>
        <tbody>
        <tr>
            <td>Mana Regeneration</td>
            <td>1 Ruby (+1 for every time this upgrade has been purchased)</td>
            <td>Unlocked by Ruby Power</td>
            <td>+1 mana regen and +1% mana regen (per upgrade)</td>
        </tr>
        <tr>
            <td>Max Mana</td>
            <td>1 Ruby (+1 for every time this upgrade has been purchased)</td>
            <td>Unlocked by Ruby Power</td>
            <td>+100 max mana and +1% max mana (per upgrade)</td>
        </tr>
        <tr>
            <td>Gem Bonus</td>
            <td>1 Ruby (+1 for every time this upgrade has been purchased)</td>
            <td>Unlocked by Ruby Power</td>
            <td>+1% gem production bonus additively and multiplicatively (per upgrade)</td>
        </tr>
        <tr>
            <td>Royal Trading</td>
            <td>1 Ruby (+1 for every time this upgrade has been purchased)</td>
            <td>Unlocked by Ruby Power</td>
            <td>+2% royal exchange production bonus additively and multiplicatively (per upgrade)</td>
        </tr>
        <tr>
            <td>Bonus Reset</td>
            <td>Free</td>
            <td></td>
            <td>Reset all the ruby upgrades to 0 and get all your rubies back (Forces abdication)</td>
        </tr>
        </tbody>
    </table>
<br>



       <a id="Events"></a>
    <table class="numtable">
        <thead>
        <tr>
            <th>Ruby Tier</th>
            <th>Cost</th>
            <th>Requirement</th>
            <th>Effect</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> <img src="http://musicfamily.org/realm/Factions/picks/RubyTier1.png" alt="" align="center"> <b>1</b></td>
            <td>1 Coin</td>
            <td>50 Rubies</td>
            <td>Increases ruby power by 100% to 200%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">58 rubies can be purchased in the Shop for 125 kreds.<p>160 kreds for $15 with 35 kreds extra.</p></th>
       </tr>
        </thead>
        <tbody>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier2.png" alt="" align="center"> <b>2</b></td>
            <td>1 Coin</td>
            <td>100 Rubies</td>
            <td>Increases ruby power 100% to 300%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">104 rubies can be purchased for 200 kreds.<p>225 kreds for $20 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier3.png" alt="" align="center"> <b>3</b></td>
            <td>1 Coin</td>
            <td>150 Rubies</td>
            <td>Increases ruby power 100% to 400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">152 rubies can be purchased for 300 kreds.<p>335 kreds for $30 with 35 kreds extra.</p></th>
       </tr>
        </thead>
       <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier4.png" alt="" align="center"> <b>4</b></td>
            <td>1 Coin</td>
            <td>250 Rubies</td>
            <td>Increases ruby power 200% to 600%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">280 rubies can be purchased for 500 kreds.<p>500 kreds for $45 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier5.png" alt="" align="center"> <b>5</b></td>
            <td>1 Coin</td>
            <td>350 Rubies</td>
            <td>Increases ruby power 200% to 800%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">350 rubies can be purchased for 650 kreds.<p>675 kreds for $60 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier6.png" alt="" align="center"> <b>6</b></td>
            <td>1 Coin</td>
            <td>450 Rubies</td>
            <td>Increases ruby power 200% to 1000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">454 rubies can be purchased for 850 kreds.<p>900 kreds for $80 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier7.png" alt="" align="center"> <b>7</b></td>
            <td>1 Coin</td>
            <td>550 Rubies</td>
            <td>Increases ruby power 200% to 1200%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">560 rubies can be purchased for 1000 kreds.<p>1015 kreds for $90 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier8.png" alt="" align="center"> <b>8</b></td>
            <td>1 Coin</td>
            <td>650 Rubies</td>
            <td>Increases ruby power 200% to 1400%.</td>
        </tr>
        </tbody>
        <thead>
        <tr>
            <th colspan="4">664 rubies can be purchased for 1200 kreds.<p>1200 kreds for $105 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier9.png" alt="" align="center"> <b>9</b></td>
            <td>1 Coin</td>
            <td>800 Rubies</td>
            <td>Increases ruby power 300% to 1700%.</td>
        </tr>
        </tbody>
        <thead>
        <tr>
            <th colspan="4">800 rubies can be purchased for 1475 kreds.<p>1485 kreds for $130 with 10 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier10.png" alt="" align="center"> <b>10</b></td>
            <td>1 Coin</td>
            <td>950 Rubies</td>
            <td>Increases ruby power 300% to 2000%.</td>
        </tr>
        </tbody>
        <thead>
        <tr>
            <th colspan="4">954 rubies can be purchased for 1725 kreds.<p>1765 kreds for $155 with 40 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier11.png" align="center"> <b>11</b></td>
            <td>1 Coin</td>
            <td>1100 Rubies</td>
            <td>Increases ruby power 300% to 2300%.</td>
        </tr>
        </tbody>
        <thead>
        <tr>
            <th colspan="4">1120 rubies can be purchased for 2000 kreds.<p>2050 kreds for $180 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier12.png" alt="" align="center"> <b>12</b></td>
            <td>1 Coin</td>
            <td>1250 Rubies</td>
            <td>Increases ruby power 300% to 2600%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">1256 rubies can be purchased for 2275 kreds.<p>2300 kreds for $200 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier13.png" alt="" align="center"> <b>13</b></td>
            <td>1 Coin</td>
            <td>1400 Rubies</td>
            <td>Increases ruby power 300% to 2900%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">1400 rubies can be purchased for 2500 kreds.<p>2525 kreds for $220 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier14.png" alt="" align="center"> <b>14</b></td>
            <td>1 Coin</td>
            <td>1600 Rubies</td>
            <td>Increases ruby power 400% to 3300%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">1608 rubies can be purchased for 2900 kreds.<p>2915 kreds for $255 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier15.png" alt="" align="center"> <b>15</b></td>
            <td>1 Coin</td>
            <td>1800 Rubies</td>
            <td>Increases ruby power 400% to 3700%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">1806 rubies can be purchased for 3250 kreds.<p>3250 kreds for $285 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier16.png" alt="" align="center"> <b>16</b></td>
            <td>1 Coin</td>
            <td>2000 Rubies</td>
            <td>Increases ruby power 400% to 4100%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">2008 rubies can be purchased for 3600 kreds.<p>3610 kreds for $315 with 10 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier17.png" alt="" align="center"> <b>17</b></td>
            <td>1 Coin</td>
            <td>2200 Rubies</td>
            <td>Increases ruby power 400% to 4500%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">2200 rubies can be purchased for 3975 kreds.<p>4015 kreds for $350 with 40 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier18.png" alt="" align="center"> <b>18</b></td>
            <td>1 Coin</td>
            <td>2400 Rubies</td>
            <td>Increases ruby power 400% to 4900%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">2402 rubies can be purchased for 4325 kreds.<p>4350 kreds for $380 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier19.png" alt="" align="center"> <b>19</b></td>
            <td>1 Coin</td>
            <td>2650 Rubies</td>
            <td>Increases ruby power 500% to 5400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">2656 rubies can be purchased for 4775 kreds.<p>4825 kreds for $420 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier20.png" alt="" align="center"> <b>20</b></td>
            <td>1 Coin</td>
            <td>2900 Rubies</td>
            <td>Increases ruby power 500% to 5900%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">2904 rubies can be purchased for 5200 kreds.<p>5215 kreds for $455 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier21.png" alt="" align="center"> <b>21</b></td>
            <td>1 Coin</td>
            <td>3150 Rubies</td>
            <td>Increases ruby power 500% to 6400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">3150 rubies can be purchased for 5650 kreds.<p>5665 kreds for $495 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier22.png" alt="" align="center"> <b>22</b></td>
            <td>1 Coin</td>
            <td>3400 Rubies</td>
            <td>Increases ruby power 500% to 6900%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">3408 rubies can be purchased for 6100 kreds.<p>6135 kreds for $535 with 35 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier23.png" alt="" align="center"> <b>23</b></td>
            <td>1 Coin</td>
            <td>3650 Rubies</td>
            <td>Increases ruby power 500% to 7400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">3650 rubies can be purchased for 6525 kreds.<p>6540 kreds for $570 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier24.png" alt="" align="center"> <b>24</b></td>
            <td>1 Coin</td>
            <td>3900 Rubies</td>
            <td>Increases ruby power 600% to 8000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">3920 rubies can be purchased for 7000 kreds.<p>7010 kreds for $610 with 10 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier25.png" alt="" align="center"> <b>25</b></td>
            <td>1 Coin</td>
            <td>4200 Rubies</td>
            <td>Increases ruby power 600% to 8600%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">4200 rubies can be purchased for 7500 kreds.<p>7515 kreds for $655 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier26.png" alt="" align="center"> <b>26</b></td>
            <td>1 Coin</td>
            <td>4500 Rubies</td>
            <td>Increases ruby power 600% to 9200%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">4502 rubies can be purchased for 8050 kreds.<p>8050 kreds for $700 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier27.png" alt="" align="center"> <b>27</b></td>
            <td>1 Coin</td>
            <td>4800 Rubies</td>
            <td>Increases ruby power 600% to 9800%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">4808 rubies can be purchased for 8600 kreds.<p>8615 kreds for $750 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier28.png" alt="" align="center"> <b>28</b></td>
            <td>1 Coin</td>
            <td>5150 Rubies</td>
            <td>Increases ruby power 600% to 10400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">5154 rubies can be purchased for 9225 kreds.<p>9250 kreds for $805 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier29.png" alt="" align="center"> <b>29</b></td>
            <td>1 Coin</td>
            <td>5500 Rubies</td>
            <td>Increases ruby power 600% to 11000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">5504 rubies can be purchased for 9875 kreds.<p>9875 kreds for $860 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier30.png" alt="" align="center"> <b>30</b></td>
            <td>1 Coin</td>
            <td>5850 Rubies</td>
            <td>Increases ruby power 700% to 11700%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">5880 rubies can be purchased for 10500 kreds.<p>10510 kreds for $915 with 10 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier31.png" alt="" align="center"> <b>31</b></td>
            <td>1 Coin</td>
            <td>6200 Rubies</td>
            <td>Increases ruby power 700% to 12400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">6208 rubies can be purchased for 11100 kreds.<p>11140 kreds for $970 with 40 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier32.png" alt="" align="center"> <b>32</b></td>
            <td>1 Coin</td>
            <td>6550 Rubies</td>
            <td>Increases ruby power 700% to 13100%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">6554 rubies can be purchased for 11725 kreds.<p>11725 kreds for $1020 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier33.png" alt="" align="center"> <b>33</b></td>
            <td>1 Coin</td>
            <td>6900 Rubies</td>
            <td>Increases ruby power 700% to 13800%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">6904 rubies can be purchased for 12375 kreds.<p>12400 kreds for $1080 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier34.png" alt="" align="center"> <b>34</b></td>
            <td>1 Coin</td>
            <td>7300 Rubies</td>
            <td>Increases ruby power 700% to 14500%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">7302 rubies can be purchased for 13050 kreds.<p>13100 kreds for $1140 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier35.png" alt="" align="center"> <b>35</b></td>
            <td>1 Coin</td>
            <td>7700 Rubies</td>
            <td>Increases ruby power 800% to 15300%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">7712 rubies can be purchased for 13800 kreds.<p>13800 kreds for $1200 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier36.png" alt="" align="center"> <b>36</b></td>
            <td>1 Coin</td>
            <td>8100 Rubies</td>
            <td>Increases ruby power 800% to 16100%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">8120 rubies can be purchased for 14500 kreds.<p>14525 kreds for $1265 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier37.png" alt="" align="center"> <b>37</b></td>
            <td>1 Coin</td>
            <td>8500 Rubies</td>
            <td>Increases ruby power 800% to 16900%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">8504 rubies can be purchased for 15200 kreds.<p>15225 kreds for $1325 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier38.png" alt="" align="center"> <b>38</b></td>
            <td>1 Coin</td>
            <td>8900 Rubies</td>
            <td>Increases ruby power 800% to 17700%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">8910 rubies can be purchased for 15950 kreds.<p>15965 kreds for $1390 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier39.png" alt="" align="center"> <b>39</b></td>
            <td>1 Coin</td>
            <td>9350 Rubies</td>
            <td>Increases ruby power 800% to 18500%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">9354 rubies can be purchased for 16725 kreds.<p>16775 kreds for $1460 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier40.png" alt="" align="center"> <b>40</b></td>
            <td>1 Coin</td>
            <td>9800 Rubies</td>
            <td>Increases ruby power 900% to 19400%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">9800 rubies can be purchased for 17500 kreds.<p>17525 kreds for $1525 with 25 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier41.png" alt="" align="center"> <b>41</b></td>
            <td>1 Coin</td>
            <td>10250 Rubies</td>
            <td>Increases ruby power 900% to 20300%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">10254 rubies can be purchased for 18350 kreds.<p>18400 kreds for $1600 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier42.png" alt="" align="center"> <b>42</b></td>
            <td>1 Coin</td>
            <td>10700 Rubies</td>
            <td>Increases ruby power 900% to 21200%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">10710 rubies can be purchased for 19150 kreds.<p>19190 kreds for $1670 with 40 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier43.png" alt="" align="center"> <b>43</b></td>
            <td>1 Coin</td>
            <td>11150 Rubies</td>
            <td>Increases ruby power 900% to 22100%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">11150 rubies can be purchased for 19950 kreds.<p>20000 kreds for $1740 with 50 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier44.png" alt="" align="center"> <b>44</b></td>
            <td>1 Coin</td>
            <td>11650 Rubies</td>
            <td>Increases ruby power 900% to 23000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">11654 rubies can be purchased for 20850 kreds.<p>20860 kreds for $1815 with 10 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier45.png" alt="" align="center"> <b>45</b></td>
            <td>1 Coin</td>
            <td>12150 Rubies</td>
            <td>Increases ruby power 1000% to 24000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">12154 rubies can be purchased for 21725 kreds.<p>21765 kreds for $1895 with 40 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier46.png" alt="" align="center"> <b>46</b></td>
            <td>1 Coin</td>
            <td>12650 Rubies</td>
            <td>Increases ruby power 1000% to 25000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">12658 rubies can be purchased for 22625 kreds.<p>22640 kreds for $1970 with 15 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier47.png" alt="" align="center"> <b>47</b></td>
            <td>1 Coin</td>
            <td>13150 Rubies</td>
            <td>Increases ruby power 1000% to 26000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">13160 rubies can be purchased for 23500 kreds.<p>23500 kreds for $2045 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier48.png" alt="" align="center"> <b>48</b></td>
            <td>1 Coin</td>
            <td>13650 Rubies</td>
            <td>Increases ruby power 1000% to 27000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">13658 rubies can be purchased for 24425 kreds.<p>24425 kreds for $2125 with 0 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier49.png" alt="" align="center"> <b>49</b></td>
            <td>1 Coin</td>
            <td>14200 Rubies</td>
            <td>Increases ruby power 1000% to 28000%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">14208 rubies can be purchased for 25400 kreds.<p>25410 kreds for $2210 with 10 kreds extra.</p></th>
       </tr>
        </thead>
        <tr>
            <td><img src="http://musicfamily.org/realm/Factions/picks/RubyTier50.png" alt="" align="center"> <b>50</b></td>
            <td>1 Coin</td>
            <td>14750 Rubies</td>
            <td>Increases ruby power 1100% to 29100%.</td>
        </tr>
        <thead>
        <tr>
            <th colspan="4">14768 rubies can be purchased for 26400 kreds.<p>26450 kreds for $2300 with 50 kreds extra.</p></th>
       </tr>
        </thead>
    </table>
<?php include "../scripts/footer.html"; ?>
