<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <style>
        .calculator table {
            border-collapse: collapse;
        }

        .calculator th {
            font-size: 14px;
        }

        .calculator td {
            font-size: 14px;
        }

        .calculator th, .calculator td {
            border: 1px solid #000000;
        }

        .calculator tr:hover {
            background-color: #ffffff
        }

        .calculator table {
            width: 100%;
        }

        .calculator td {
            text-align: center;
        }

        .calculator form {
            text-align: center;
        }

        .calculator input {
            text-align: center;
        }

        .calculator th {
            background-color: #b3bcc6;
            color: black;
        }
        #calcformtiers td input {
            width: 100px;
            box-sizing: border-box;
        }
        #calcformtiers td {
            width: 50%;
        }
    </style>
    <?php include "../scripts/header.html"; ?>
    <h6><img src="http://musicfamily.org/realm/Factions/picks/SpellsTopPage.png"></h6>
    <br/>
    <p>Spells are an active component of the game mechanics that boost production. They require mana to be cast and only work while playing online.</p>
    <p>Their duration, resource gain, mana-cost, and mana regeneration speed can be altered by getting specific Faction, Heritage, Challenge, or Research upgrades. Different aspects of the spells can also be used in other upgrades (eg: while a spell is active, the number of spell casts, based on mana produced, etc.).</p>
    <p>The trick to use spells efficiently relies on finding the best setting: Which spell combination to cast, at what timing, with which automatic-casting tool, and where to set the contingency arrow. Like for upgrades, these choices can make a crucial difference for your game progress.</p>
    <hr>
    <b><center>Spell Tiers and Offline Casting</center></b>
    <div class="shlisting">
            <div class="shelementwhole">
            <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Spell Tier Unlock Time</a></b></p>
            <div class="autohide">
    <p>Tier unlock time depends on your spell activity time this Reincarnation, and is reduced by the amount of reincarnations you make, as well as by the amount of spell tiers you have already unlocked of any spell (not just the spells available).</p>
	<p>Because of above factors, if one tiers multiple spells at once, tier unlock time will reduce while tiering. For this reason it is difficult to show how long your current tiering target will take, because of the factors involved.</p>
	<p>The chart below will only show how long it takes to unlock a tier with no other spell tiering in the meantime.</p>
	<p><b>Please use <a target="_blank" href="https://dox4242.github.io/misc/tiers.html">the following tool</a> for a full tiering timeline.</b></p>
    <div id="tiercal" class="calculator" style="padding-left: 70px">
    </div>
    <br/>
    <b id="tiertimes" class="calculator">
        <table>
            <thead>
            <tr>
                <th>At R40 you can unlock <a research="Tiered Autocasting<p>Requirement: R40+, 200M Mana Produced (Total this R).<p>Note: This trophy unlocks at R40, The upgrade unlocks at R42"><font color="DarkBlue"><u>Tiered Autocasting</u></font></a>, At R42 you can unlock spell tiers</th>
            </tr>
            </thead>
        </table>
        <table>
            <thead>
            <tr>
                <th><a target="_blank" style="font-size: 30px;color: red;" href="https://dox4242.github.io/misc/tiers.html">Click here to see your unlocked tiers</a></th>
            </tr>
            </thead>
        </table>
        <table>
            <thead>
            <tr>
                <th>Input the Tier and the R you want to unlock it at and the amount of unlocked tiers (tiers gotten above tier 1 in any spell) then click Show</th>
            </tr>
            </thead>
        </table>
            <table id="calcformtiers" border="0">
                <tr>
                    <td>Tiers</td>
                    <td><input type="number" min="2" max="7" name="tmin" id="tmin" value="2">-<input type="number" min="2" max="7" name="tmax" id="tmax" value="6"></td>
                </tr>
				<tr>
                    <td>Total Unlocked Tier Upgrades</td>
                    <td><input title="Number of total unlocked tier upgrades" type="number" min="0" max="102" maxlength="1" name="ut" id="ut" value="0"></td>
                </tr>
                <tr>
                    <td>Reincarnations</td>
                    <td><input type="number" min="42" max="220" name="rmin" id="rmin" value="42">-<input type="number" min="42" max="220" name="rmax" id="rmax" value="42"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" value="Show" onclick="commitMainTable(rmin.value,rmax.value,ut.value,tmin.value,tmax.value)"></td>
                </tr>

            </table>
        </form>
        <table>
            <thead>
            <tr>
                <th>Unlock Spell Active Time (Total) Per R# &amp; Tier</th>
            </tr>
            </thead>
        </table>
        <table id="mainTable">
            <thead>
            </thead>
            <tbody>
            </tbody>
        </table>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script>
            var minTier = document.getElementById("tmin").value;
            var maxTier = document.getElementById("tmax").value;
            var unlockedTiers = document.getElementById("ut").value;
            var minReinc = document.getElementById("rmin").value;
            var maxReinc = document.getElementById("rmax").value;
            var table = document.getElementById("mainTable");
            function clamp(x, min, max) {
                return Math.min(Math.max(x, min), max);
            }

            function commitMainHead() {
                $("#mainTable > thead").empty();
                var row = table.tHead.insertRow(-1);
                var th = document.createElement('th');
                th.innerHTML = "Reincarnation";
                row.appendChild(th);
                for (i = parseInt(minTier); i <= parseInt(maxTier); i++) {
                    var th2 = document.createElement('th');
                    th2.innerHTML = "Tier " + i;
                    row.appendChild(th2);
                }
            }

            function commitMainTable(Rmin, Rmax, UT, Tmin, Tmax) {
                minReinc = Math.max(parseInt(Rmin), 40);
                maxReinc = Math.max(parseInt(Rmax), 40);
                unlockedTiers = clamp(parseInt(UT), 0, 102);
                minTier = clamp(parseInt(Tmin), 2, 7);
                maxTier = clamp(parseInt(Tmax), 2, 7);
                if (localStorage) { //TODO: actually pull from localstorage
                    localStorage.setItem('mint', minTier);
                    localStorage.setItem('maxt', maxTier);
                    localStorage.setItem('ut', unlockedTiers);
                    localStorage.setItem('minr', minReinc);
                    localStorage.setItem('maxr', maxReinc);
                }
                commitMainHead();
                $("#mainTable > tbody").empty();
                for (i = minReinc; i <= maxReinc; i++) {
                    var row = table.getElementsByTagName('tbody')[0].insertRow(-1);
                    var cellR = row.insertCell(-1);
                    cellR.innerHTML = "R" + i;
                    cellR.style.textAlign = "center";
                    for (j = minTier; j <= maxTier; j++) {
                        var ut = unlockedTiers;
						//57600 * (0.4 + 0.1 * j) * ((j ^ 2 + 1) / (0.1 * ut + 1)) * (0.97 ^ (i - 35))
						//Where j = tier, ut = number of unlocked tiers, i = reincarnation
                        var Generator = (2 / 3) * (0.4 + 0.1 * j) * ((j ** 2 + 1)  / (0.1 * ut + 1)) * (0.97 ** (i - 35));
                        var Days = Math.floor(Generator);
                        var Hours = Math.floor(24 * Generator) - 24 * Days;
                        var Minutes = Math.round(1440 * Generator) - ( 24 * 60 * Days + 60 * Hours );
                        //I can't be assed to do the 60 rounded minute correction properly...
                        if (Minutes == 60) {
                            Minutes = 0;
                            if (Hours + 1 == 24) {
                                Hours = 0;
                                Days++;
                            }
                            else Hours++;
                        }
                        var cell = row.insertCell(-1);
                        cell.style.textAlign = "center";
                        if (j<7 || i >= 100) {
                            cell.innerHTML =
                                (( Math.floor(Days) > 0 ) ? Math.floor(Days) + "d" : "") +
                                (( Math.floor(Hours) > 0 ) ? " " + Math.floor(Hours) + "h" : "") +
                                (( Math.floor(Minutes) > 0 ) ? " " + Math.floor(Minutes) + "m" : "");
                        } else {
                            cell.innerHTML = "N/A";
                        }
                    }
                }
            }
            commitMainTable(minReinc, maxReinc, unlockedTiers, minTier, maxTier);

            //handler for enter button on input not using submit button
            $(function () {
                $("form input").keypress(function (e) {
                    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13))
                        commitMainTable(rmin.value, rmax.value, ut.value, tmin.value, tmax.value);
                });
            });
        </script>
        </font>
    </b>
            </div>
        </div>
          <div class="shelementwhole">
            <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Tier Spell Upgrades (R42+)</a></b></p>
            <div class="autohide">
    <p><b>All Spells Tiers</b></p>
    <p><b>Note</b>: Each tier also increase offline production based on mana statistics. (Not Tax Collection)</p>
    <p><b>Formula</b>: (m + 100 * r) ^ (1 + 0.15 * t) where m is max mana, r is regen, t is tier.</p>
    <p><b>Note</b>: Tier 1-6 is + 0.1 per tier and is considered an A1 upgrade, Tier 7 is + 0.2 per tier and is considered an A2 upgrade, a T7 spell is ^0.26 in A2</p>
    <br>
    <p><b>Requirements</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TieredAutocastingTrophy.png" align="middle"><b> Tiered Autocasting</b></p>
    <p>Requirement: R40+, 200M Mana Produced (Total this R).</p>
    <p><b>Note</b>: This trophy unlocks at R40, The uprade is available at R40, but tiers do not unlock until R42.</p>
    <p><b>Upgrade Cost</b>:  100 Qid (1.0e50), A2+ Free</p>
    <p><b>Effect</b>: Allows you to set the maximum tier you wish to autocast each spell to.</p>
    <p><b>Note</b>: In the spell tooltip, use the diamond icon to change its mode until you get to the desired maximum tier number. Spells will still follow their previous priority rules.</p>
    <p><b>Effect</b>: Only while offline, increase mana produced by an additional 10% (for a total of 90%) of your mana regeneration per second and your spells cast amount multiplicatively based on your offline mana regeneration.</p>
    <p><b>Formulas</b>: (1000 * log10(1 + x))</p>
    <hr>
    <p><b>From R42+</b>, for each default spell, tier 6 spell upgrades become available. Each tier gives 1 additional spell cast, and with all tiers combined, allows to cast a single spell up to 6 times simultaneously.</p>
    <p>The generalized formula for spell tiers is B^T, where B is the base spell production and T is the tier of the spell. The exceptions to this are Gem Grinder, which increases its production by a linear amount, and Dragon's Breath, which simply adds one new type of Dragon Breath to the current breaths in effect. Other peripheral effects, such as the tripling of assistants granted from Fairy Chanting, are also not impacted by spell tiers.</p>
    <p><b>Note</b>: Dragon's Breath will cast a random Dragon's Breath color for 6th and above casts.</p>
    <p><b>From R100+</b>, for each default spell, tier 7 spell upgrades becomes available.
    <p>Tier upgrade names start with the default spell's name followed by the tier number, starting from 2 to 7 (Holy Light 2, Holy Light 3, etc.)</p>
    <p>Tiered Autocasting will automatically set the autocasted spell tier at the highest you have bought, but you can change it to a lower tier if you wish.</p>
    <p><b>Offline bonus for spell tier</b>: (m + 100 * r)^(1 + 0.15 * (t)) where m is max mana, r is regen, t is tier.</p>
    <p><b>Note</b>: For offline bonuses, A1 tier upgrades count as A0 upgrades and A2 tier upgrades count as A1 upgrades for ascension penalty purposes.</p>
    <p><b>Unlock Formulas</b></p>
    <p>Each Tier Spell upgrade requires Time (Total), Coins, and Faction Coins (except for Call to arms)</p>
    <p>Time for tier: Formula: (57600 * (0.4 + 0.1 * T) * ((T ^ 2 + 1) / (0.1 * U + 1)) * (0.97 ^ (R - 35))) Where T is Tier, U is number of unlocked tier upgrades in all spells (Aka tiers above tier 1), R is reincarnation count.</p>
    <p>Diamond Coins for tier n + 1: Formula: x^{1 + 0.25 * (n - 1)}</p>
    <p>Faction Coins for tier n + 1: Formula: x^{1 + 0.25 * (n - 1)}</p>
    <p>where x is costs (see above table), R is your Reincarnation count, and n + 1 is number of upgrades.</p>
    <p>Unlocking Tier spell upgrades only need to be done once, but you will still need to gather the coins and FCs necessary to purchase them after each abdication.</p>
    <p><b>Tier Mana Cost</B>: Mana cost for tiers is c*(2^t-1), where c is base mana cost and t is tier (Each tier has double the cost of the previous tier)</p>
            </div>
        </div>
		<div class="shelementwhole">
            <p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Offline Spell Casting</a></b></p>
            <div class="autohide">
    <p><b>While offline</b>: Spells set on autocasting will gain "Active Time (This game)", but no spell casts will be counted. Instead, a generic non-specific spell will increase your "Spell Casts" entry in the stats.</p>
    <p><b>Offline Activity Time Gain Formula (Requires Masterful Autocast)</b></p>
    <p><b>Formula</b>: t * min(1, m * d / (n * c ^ 1.5)), where t is offline time, m is mana regen per second, d is spell duration in seconds, c is spell mana cost (as tier 1), and n is number of spells set to autocast</p>
    <p><b>Note</b>: Tax Collection does not count against spells in autocast for offline activity time generation.</p>
                </div>
            </div>
        </div>
    <hr>
    <b><center>All Faction Default Spells</center></b>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TaxCollection.png" alt="All Factions" align="middle"> Tax Collection</b> (All Factions)</p>
    <p><b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds </p>
    <p><b>Effect</b>: Instantly gain 30 seconds worth of coin production from buildings and assistants.</p>
    <br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/CallToArms.png" alt="All Factions" align="middle"> Call to Arms</b> (All Factions)</p>
    <p><b>Cost</b>: 400 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own.</p>
    <p><b>Formula</b>: ((25 + 0.3 * x) ^ 0.975)%, where x is your Buildings Owned (This Game) stat.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Call to Arms Tier 2-7</a></b> (R42+)</p>
            <div class="autohide">
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier2.png" alt="Calltoarms2" align="middle"> <b>Tier</b>: 2</p>
                <p><b>Cost</b> 51 Sxd (5.1e52) - <b>FC</b> 0</b></p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier3.png" alt="Calltoarms3" align="middle"> <b>Tier</b>: 3</p>
                <p><b>Cost</b> 766.4 Vg (7.664e65) - <b>FC</b> 0</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier4.png" alt="Calltoarms4" align="middle"> <b>Tier</b>: 4</p>
                <p><b>Cost</b> 11.52 Qivg (1.152e79) - <b>FC</b> 0</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier5.png" alt="Calltoarms5" align="middle"> <b>Tier</b>: 5</p>
                <p><b>Cost</b> 173.1 Novg (1.731e92) - <b>FC</b> 0</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier6.png" alt="Calltoarms6" align="middle"> <b>Tier</b>: 6</p>
                <p><b>Cost</b> 2.601 Qatg (2.601e105) - <b>FC</b> 0</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier7.png" alt="Calltoarms6" align="middle"> <b>Tier</b>: 7</p>
                <p><b>Cost</b> Free - <b>FC</b> 0</p>
            </div>
        </div>
    </div>
    <br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Spiritualsurge.png" alt="All Factions" align="middle"> Spiritual Surge</b> (All Factions, R14+)</p>
    <p><b>Cost</b>: 2500 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings based on the amount of times you reincarnated and ascended.</p>
    <p><b>Formula</b>: (2500 * (R ^ 1.05)) ^ (1 + A * 0.5)%, where R is the number of times you have reincarnated and A is how many times you ascended.</p>
    <br>
    <div id="SSCal" class="calculator">
        <table>
            <tr>
                <th style="width:100px; height: 68px" rowspan="2">Reincarnation</th>
                <th style="width:55px" class="SSCalTieHid" rowspan="2">Tier</th>
                <th style="width:80px" class="SSCalDDLinHid" rowspan="2">Active Druid Lineage Level</th>
                <th style="width:55px" class="SSCalDra" title="Prismatic Breath" rowspan="2">PB</th>
                <th colspan="2">Production bonus</th>
                <th style="width:100px" class="ResUnl" rowspan="2">D1375 production bonus</th>
            </tr>
            <tr class="ResUnl">
                <th>without D1375</th>
                <th>with D1375</th>
            </tr>
            <tr>
                <td><input id="SSCalRei" type="number" min="14" max="279" value="14"></td>
                <td class="SSCalTieHid"><input id="SSCalTie" type="number" min="1" max="7" value="1"></td>
                <td class="SSCalDDLinHid"><input id="SSCalDDLin" type="number" min="0" value="0"></td>
                <td class="SSCalDra" title="Prismatic Breath"><input id="SSCalPB" type="checkbox"></td>
                <td id="SSCalProNoD1375"></td>
                <td id="SSCalProD1375" class="ResUnl"></td>
                <td id="SSCalD1375" class="ResUnl"></td>
            </tr>
        </table>
        <script>
            function CalSSHidSho(r) {
                $('.ResUnl, .SSCalTieHid, .SSCalDDLinHid, .SSCalDra ').css('display', 'none');
                $('#SSCal th').removeAttr('rowspan colspan');
                if (r >= 52) {
                    $('#SSCal tr:eq(0) > th:eq(4)').attr('colspan', '2');
                    $('#SSCal tr:eq(0) > th:not(:eq(4))').attr('rowspan', '2');
                    $('th.ResUnl, td.ResUnl').css('display', 'table-cell');
                    $('tr.ResUnl').css('display', 'table-row');
                }
                if (r >= 40) {
                    $('.SSCalTieHid').css('display', 'table-cell');
                }
                if (r >= 60) {
                    $('.SSCalDDLinHid').css('display', 'table-cell');
                }
                if (r >= 63) {
                    $('.SSCalDra').css('display', 'table-cell');
                }
            }

            /**
             * @return {number}
             * @param rei
             * @param [D1375]
             * @param [dp]
             * @param [tier]
             */
            function CalSSMul(rei, D1375 = false, tier = 1, druidLevel = 0, dp = false) {
                var ascension = (rei >= 40) + (rei >= 100) + (rei >= 160) + (rei >= 220);
                rei = rei + 2 * druidLevel;
                rei = (dp) ? rei * 1.5 : rei;
                var base = (2500 * rei ** 1.05) ** (1 + (D1375?1.5:1) * ascension * 0.5);
                base = (base/100 + 1)**((0.1 ** ascension)*Math.min(tier,6) + 0.2*Math.max(0,tier-6) / (10**Math.max(0,ascension-2)));
                return base;
            }

            /**
             * @return {string}
             */
            function MulToBon(mul) {
                var percent = Math.floor(100 * (mul - 1));
                var length = percent.toString().length;
                percent = length > 6?percent.toPrecision(4):percent.toPrecision(length).replace('.0','');
                if (length > 3 && length <= 6) percent = percent.substring(0,length-3) + "," + percent.substring(length-3,length);
                return percent;
            }

            function CalSS() {
                var rei = parseInt($('#SSCalRei').val()),
                    tie = 1,
                    dp = $('#SSCalPB').is(':checked'),
                    ProNoD1375 = 0,
                    ProD1375 = 0,
                    DruidLevel = 0;
                CalSSHidSho(rei);
                if (rei < 40) {
                    ProNoD1375 = CalSSMul(rei);
              } else if (rei < 52) {
                    tie = parseInt($('#SSCalTie').val());
                    ProNoD1375 = CalSSMul(rei, false, tie);
                } else if (rei < 60) {
                    tie = parseInt($('#SSCalTie').val());
                    ProNoD1375 = CalSSMul(rei, false, tie);
                    ProD1375 = CalSSMul(rei, true, tie);
                } else if (rei < 63) {
                    tie = parseInt($('#SSCalTie').val());
                    DruidLevel = parseInt($('#SSCalDDLin').val());
                    ProNoD1375 = CalSSMul(rei, false, tie, DruidLevel);
                    ProD1375 = CalSSMul(rei, true, tie, DruidLevel);
                } else {
                    tie = parseInt($('#SSCalTie').val());
                    DruidLevel = parseInt($('#SSCalDDLin').val());
                    ProNoD1375 = CalSSMul(rei, false, tie, DruidLevel, dp);
                    ProD1375 = CalSSMul(rei, true, tie, DruidLevel, dp);
                }
                if (rei < 100 && tie > 6) {
                    $('#SSCalProNoD1375').text('N/A');
                    $('#SSCalProD1375').text('N/A');
                    $('#SSCalD1375').text('N/A');
                } else {
                    $('#SSCalProNoD1375').text(MulToBon(ProNoD1375) + '%');
                    $('#SSCalProD1375').text(MulToBon(ProD1375) + '%');
                    $('#SSCalD1375').text(MulToBon(ProD1375 / ProNoD1375) + '%');
                }
            }
            CalSS();
            $('#SSCalRei, #SSCalTie, #SSCalDDLin').on('input', CalSS);
            $('#SSCalPB').on('change', CalSS);
        </script>
</div>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Spiritual Surge Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Goblin, Undead, Demon, Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier2.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 66 Uvg (6.6e67) - <b>FC</b> 10 T (1e13) each</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier3.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 5.949 Spvg (5.949e84) - <b>FC</b> 891.3 T (8.913e14) each</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier4.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 53.61 Utg (5.361e97) - <b>FC</b> 79.43 Qa (7.943e16) each</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier5.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 48.33 Octg (4.833e118) - <b>FC</b> 7.079 Qi (7.079e18) each</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier6.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 4.356 Qaqag (4.356e135) - <b>FC</b> 631 Qi (6.31e20) each</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier7.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 56.23 Sx (5.623e22) each</p>
        </div>
    </div>
</div>
<hr>
<b><center>Alignment Spells</center></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLight.png" alt="Good" align="middle"> Holy Light</b> (Proof of Good Deed)</p>
<p><b>Cost</b>: 900 Mana - <b>Duration</b>: 10 seconds</p>
<p><b>Effect</b>: Increase clicking reward by 1750%</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Holy Light Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Dwarf</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier2.png" alt="HolyLightTier2" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 1 B (1e9)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier3.png" alt="HolyLightTier3" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 22.39 B (2.239e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier4.png" alt="HolyLightTier4" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 501.2 B (5.012e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier5.png" alt="HolyLightTier5" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 5 T (1.122e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier6.png" alt="HolyLightTier6" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 251.2 Sxtg (2.916e111) - <b>FC</b> 10 T (2.514e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier7.png" alt="HolyLightTier7" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 5.623 Qa (5.623e15)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodFrenzy.png" alt="Evil" align="middle"> Blood Frenzy</b> (Proof of Evil Deed)</p>
<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increases the production of all Evil buildings by 1250%.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Blood Frenzy Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Goblin, Undead, Demon, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier2.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 1 B (1e9)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier3.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 22.39 B (2.239e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier4.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 501.2 B (5.012e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier5.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 11.22 T (1.122e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier6.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 251.2 T (2.512e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier7.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 5.623 Qa (5.623e15)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinder.png" alt="Neutral" align="middle"> Gem Grinder</b> (Proof of Neutrality)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increase production bonus from Gems</p>
<p><b>Note</b>: Gem Grinder formula changed to work with Reincarnations and Ascensions.</p>
<p><b>Tier Formula</b>: ((5000 * (1 + 0.1 * R)) ^ (0.8 ^ A)), where R is Reincarnation and A is Ascension</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Gem Grinder Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Goblin, Undead, Demon, Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier2.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 60 Nod (6E61) - <b>FC</b> 5 B (5e9)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier3.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 166.9 Qavg (1.669E77) - <b>FC</b> 142.5 B (1.425e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier4.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 464.7 Novg (4.647E92) - <b>FC</b> 4.0161 T (4.061e12)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier5.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 1.293 Qitg (1.293E108) - <b>FC</b> 115.7 T (1.157e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier6.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 3.6 Qag (3.6e123) - <b>FC</b> 3.299 Qa (3.299e15)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier7.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 94.02 Qa (9.402e16)</p>
        </div>
    </div>
</div>
<hr>
<b><center>Faction Spells</center></b>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChanting.png" alt="Good" align="middle"> Fairy Chanting</b> (Fairy)</p>
<p>Cost</b>: 1000 Mana - <b>Duration</b>: 10 seconds </p>
<p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 50,000%</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/FairyChoirFactionUpgrade.png" align="middle"> <b>Fairy Choir</b></p>
<p><b>Requirement</b>: Cast Fairy Chanting while having 45 or more assistants.</p>
<p><b>Effect</b>: Triples your assistants while Fairy Chanting is active.</p>
<p><b>Upgrade Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/FairyOrchestraFinalReward.png" align="middle"> <b>Fairy Orchestra</b> (R18+)</p>
<p><b>Effect</b>: Each assistant generates 3 times as many faction coins while Fairy Chanting is active.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Fairy Chanting Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Fairy</p>
            <p><b>Effect</b>: Increases the duration of the spell by 10 seconds per tier.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier2.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier3.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier4.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier5.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier6.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier7.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessing.png" alt="Good" align="middle"> Moon Blessing</b> (Elven)</p>
<p><b>Cost</b>: 700 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increase the production of all buildings based on Treasure Clicks (Total).</p>
<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your Treasure Clicks (Total) stat.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/SunBlessingFactionUpgrade.png" align="middle"> <b>Sun Blessing</b></p>
<p><b>Requirement</b>: Activate Moon Blessing between 6am and 1pm.</p>
<p><b>Effect</b>: Moon Blessing auto-clicks the treasure 15 times per second.</p>
<p><b>Upgrade Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/StarBlessingChallenges.png" align="middle"> <b>Star Blessing</b> (R18+)</p>
<p><b>Effect</b>: Automatic clicks from Sun Blessing always trigger Elven Luck.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Moon Blessing Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Elven</p>
            <p><b>Effect</b>: Increase click reward by an additional 35.6% per tier.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier2.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier3.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier4.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier5.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier6.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier7.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Godshand.png" alt="Good" align="middle"> God's Hand</b> (Angel)</p>
<p><b>Cost</b>: 900 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increase the production of all buildings by 150x your mana regeneration rate.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/God'sRestFactionUpgrade.png" align="middle"> <b>God's Rest</b></p>
<p><b>Requirement</b>: Cast God's Hand on any Sunday.</p>
<p><b>Effect</b>: Gives random Faction Coins based on your Faction Coin find chance for each other spell you cast while God's Hand is active.</p>
<p><b>Formula</b>: (floor(x ^ 1.1), where x is FC chance.</p>
<p><b>Upgrade Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/God'sThroneChallenges.png" align="middle"> <b>God's Throne</b> (R18+)</p>
<p><b>Effect</b>: Mana regeneration is increased by 50% while God's Hand is active.</p>
<p><b>Effect</b>: Also increase offline spells cast amount multiplicatively based on your offline Mana Regeneration.</p>
<p><b>Formula</b>: (10 * log10(1 + x)), where x is offline mana regeneration.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">God's Hand Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Angel</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier2.png" alt="God's Hand" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier3.png" alt="God's Hand" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier4.png" alt="God's Hand" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier5.png" alt="God's Hand" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316 Qa (3.162e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier6.png" alt="God's Hand" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier7.png" alt="God's Hand" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxe.png" alt="Good" align="middle"> Diamond Pickaxe</b> (Dwarven)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 12 seconds </p>
<p><b>Effect</b>: Increase clicking reward by 25% per Excavation you made and increase your Faction Coin find chance by 200%.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/MinedwarfFactionUpgrade.png" align="middle"> <b>Minedwarf</b></p>
<p><b>Requirement</b>: Find 30,000 Faction Coins using Diamond Pickaxe in a single game.</p>
<p><b>Effect</b>: Increases Diamond Pickaxe bonus to "Faction Coin Find Chance" to 300%.</p>
<p><b>Upgrade Cost</b>: 100 Sxd (1e53), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/IronGripChallenges.png" align="middle"> <b>Iron Grip</b> (R33+)</p>
<p><b>Effect</b>: Increase Diamond Pickaxe duration by 8 seconds, and its bonus to Faction Coin find chance is passively applied as a multiplier to excavations Faction Coin rewards.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Diamond Pickaxe Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Dwarf</p>
            <p><b>Effect</b>: Increases FC find chance per tier.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier2.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 63 Vg (6.3e64) - <b>FC</b> 1 T (1e12)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier3.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 998.1 Qivg (9.981e80) - <b>FC</b> 63.1 T (6.31e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier4.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 15.81 Utg (1.581e97) - <b>FC</b> 3.981 Qa (3.981e15)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier5.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 250.5 Sxtg (2.505e113) - <b>FC</b> 251.2 Qa (2.512e17)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier6.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 3.969 Dqag (3.969e120) - <b>FC</b> 15.85 Qi (1.585e19)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier7.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 1 Sx (1e21)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinsGreed.png" alt="Evil" align="middle"> Goblin's Greed</b> (Goblin)</p>
<p><b>Cost</b>: 800 Mana - <b>Duration</b>: 5 seconds </p>
<p><b>Effect</b>: Instantly produces Faction Coins based on gems you own Also increases production of all buildings based on the number of Faction Coins found in this game.</p>
<p><b>FC Formula</b>: (20 + ln(1 + x) ^ 3), where x is your current gems.</p>
<p><b>Production Formula</b>: (0.75 * ln(1 + x) ^ 3.15)%, where x is your Faction Coins Gained (This Game) stat.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/GreedDriveFactionUpgrade.png" align="middle"> <b>Greed Drive</b></p>
<p><b>Requirements</b>: Cast Goblin's Greed 100 times in a row and do not cast any other spell.</p>
<p><b>Note</b>: The Goblin Central Bank upgrade does not interfere with getting this trophy.</p>
<p><b>Effect</b>: Goblin's Greed costs 150 less mana.</p>
<p><b>Upgrade Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/AvariceDriveChallenges.png" align="middle"> <b>Avarice Drive</b> (R18+)</p>
<p><b>Effect</b>: Goblin's Greed counts Faction Coins found in this Reincarnation.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin's Greed Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Goblin</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier2.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier3.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier4.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier5.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 (3.162e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier6.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier7.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTime.png" alt="Evil" align="middle"> Night Time</b> (Undead)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: The production of assistants is increased by 30% per Necropolis you own.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/TrueNightFactionUpgrade.png" align="middle"> <b>True Night</b></p>
<p><b>Requirements</b>: Cast Night Time between 11 pm and 6 am.</p>
<p><b>Effect</b>: Increases Night Time's production of assistants to 40% per Necropolis.</p>
<p><b>Upgrade Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/MidnightTimeChallenges.png" align="middle"> <b>Midnight Time</b> (R18+)</p>
<p><b>Effect</b>: Increase Night Time assistant bonus based on time spent offline in this Reincarnation.</p>
<p><b>Formula</b>: (0.2 * (x / 60) ^ 0.7)%, where x is time spent offline in this Reincarnation.(in seconds)</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Night Time Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Undead</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier2.png" alt="Night Time" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier3.png" alt="Night Time" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier4.png" alt="Night Time" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier5.png" alt="Night Time" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier6.png" alt="Night Time" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier7.png" alt="Night Time" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellFireBlast.png" alt="Evil" align="middle"> Hellfire Blast</b> (Demon)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase the production of Evil Fortresses and Hell Portals based on your amount of trophies.</p>
<p><b>Formula</b>: (round(200 * x ^ 0.8))%, where x is your Trophies Unlocked stat.</p>
<p><b>Effect</b>: Also make Evil spells cast count 50% more per tier.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/HellRushFactionUpgrade.png" align="middle"> <b>Hell Rush</b></p>
<p><b>Requirements</b>: Cast the Demon spell Hellfire Blast in the first 60 seconds of a playtime.</p>
<p><b>Effect</b>: Hellfire Blast also boosts Halls of Legends.</p>
<p><b>Upgrade Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/HellfireBurstChallenges.png" align="middle"> <b>Hellfire Burst</b> (R18+)</p>
<p><b>Effect</b>: Hellfire Blast also counts Evil spells cast in this reincarnation to increase its bonus.</p>
<p><b>Formula</b>: (0.1 * x), where x is evil spells cast in this reincarnation.</p>"
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Hellfire Blast Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Demon</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier2.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier3.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier4.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier5.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier6.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier7.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrike.png" alt="Evil" align="middle"> Combo Strike</b> (Drow)</p>
<p><b>Cost</b>: 800 Mana - <b>Duration</b>: Fixed to 16 seconds</p>
<p><b>Effect</b>: Increase the production of all buildings by a progressively higher value as you continue casting this spell (This game).</p>
<p><b>Formula</b>: (30 * (x ^ 0.9))%, where x is the number of times you have cast Combo Strike (This game).</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/PerfectComboFactionUpgrade.png" align="middle"> <b>Perfect Combo</b></p>
<p><b>Requirement</b>: Cast Combo Strike 100 times in a single game,The chain is interrupted by casting different spells.</p>
<p><b>Effect</b>: Increases Combo Strike bonus.</p>
<p><b>Formula</b>: (40 * (x ^ 0.9))%, where x is the number of times you have cast Combo Strike.</p>
<p><b>Upgrade Cost</b>: 100 Sxd (1e53), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/VersaltileComboChallenges.png" align="middle"> <b>Versatile Combo</b> (R33+)</p>
<p><b>Effect</b>: Increase Combo Strike counter based on the amount of spells cast in this game, not including Tax Collection.</p>
<p><b>New Combo Strike Counter Formula</b>: (x + y), where x is your Combo Strike cast count and y is every other spell (except tax collection and generic) cast count.</p>
<p><b>Effect</b>: Also increase offline spells cast amount multiplicatively based on your offline Mana Regeneration.</p>
<p><b>Formula</b>: (10 * log10(1 + x))%, where x is your offline Mana Regeneration.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Combo Strike Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Drow</p>
            <p><b>Effect</b>: Combo strike cast stat increases more when you cast higher tiers.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier2.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 63 Vg (6.3e64) - <b>FC</b> 1 T (1e12)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier3.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 998.1 Qivg (9.981e80) - <b>FC</b> 63.1 T (6.31e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier4.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 15.81 Uvg (1.581e97) - <b>FC</b> 3.981 Qa (3.981e15)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier5.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 250.5 Sxtg (2.505e113) - <b>FC</b> 251.2 Qa (2.512e17)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier6.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 3.969 Dqag (3.969e120) - <b>FC</b> 15.85 Qi (1.585e19)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier7.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 1 Sx (1e21)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/spellLightningStrike.png" alt="Neutral" align="middle"> Lightning Strike</b> (Titan)</p>
<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 10 seconds </p>
<p><b>Effect</b>: The production of a random building is multiplied by 500% for each Iron Stronghold. Also multiplicatively increase Faction Coins find chance based on your current amount of gems.</p>
<p><b>Formula</b>: (10 + log10(1 + x) ^ 2)%, where x is your current amount of gems.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/LightningStormFactionUpgrade.png" align="middle"> <b>Lightning Storm</b></p>
<p><b>Requirement</b>: Cast Lightning Strike 100 times in a single game.</p>
<p><b>Effect</b>: Increase Lightning Strike bonus to 750% for each Iron Strongholds.</p>
<p><b>Upgrade Cost</b>: 10 Dd (1e40), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/ThunderstormChallenges.png" align="middle"> <b>Thunderstorm</b> (R25+)</p>
<p><b>Effect</b>: Further increase Faction Coin find chance from Lightning Strike based on building tiers it hits.</p>
<p><b>Formula</b>: (10 + log10(1 + x) ^ 2 * (1 + 0.2 * sum(T))%, where x is your current amount of gems and T the Building Tier LS hits.</p></p>
<p><b>Note</b>: LS can hit multiple tiers at once if you have C375 and/or Titan Perk 4.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Lightning Strike Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Angel, Goblin</p>
            <p><b>Effect</b>: Iron Strongholds count for 75% more per tier for the spell bonus.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier2.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5e10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier3.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier4.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 13.61 Ocvg (1.361e88) - <b>FC</b> 81.03 T (8.103e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier5.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier6.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier7.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 5.287 Qi (5.287e18)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/Brainwave.png" alt="Neutral" align="middle"> Brainwave</b> (Faceless)</p>
<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 600 seconds </p>
<p><b>Effect</b>: Increase production of all buildings by a cumulative 2% per second.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/FacelessOvermindFactionUpgrade.png" align="middle"> <b>Faceless Overmind</b></p>
<p><b>Requirement</b>: Affiliate with the Faceless 5 times in a row.</p>
<p><b>Effect</b>: Increases Brainwave ticks to 3% per second.</p>
<p><b>Upgrade Cost</b>: 10 Dd (1e40), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/FocusedThoughtsChallenges.png" align="middle"> <b>Focused Thoughts</b> (R25+)</p>
<p><b>Effect</b>: Give Brainwave a headstart based on its activity time in this game, with a minimum of 1 minute.</p>
<p><b>Formula</b>: +1 second per 5 minutes Active Time (This Game).</p>
<br>
<p><b>Tier Upgrade</b>: +10 minutes per tier of Brainwave past tier 1.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Brainwave Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Fairy, Undead</p>
            <p><b>Effect</b>: Brainwave headstarts for an additional 10 minutes per tier.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier2.png" alt="Brainwave" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5E10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier3.png" alt="Brainwave" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier4.png" alt="Brainwave" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 13.61 Ocvg (1.360e88) - <b>FC</b> 81.03 T (8.103e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier5.png" alt="Brainwave" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier6.png" alt="Brainwave" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier7.png" alt="Brainwave" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 5.287 Qi (5.287e18)</p>
        </div>
    </div>
</div>
<br>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalance.png" alt="Neutral" align="middle"> Grand Balance</b> (Druid)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase the production of your least productive building based on the amount of the three most built ones.</p>
<p><b>Formula</b>: (25 * (x * y * z / (A + 3) ^ 6) ^ 0.9) where x, y and z are the number of your three most-built buildings and A is Ascension.</p>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/HallsofBalanceFactionUpgrade.png" align="middle"> <b>Halls of Balance</b> (R25+)</p>
<p><b>Requirements</b>: Have Grand Balance affect Hall of Legends.</p>
<p><b>Effect</b>: Increases Grand Balance duration to 24 seconds and lower its cost by 200 mana.</p>
<p><b>Upgrade Cost</b>: 10 Dd (1e40), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/PrimalBalanceChallenges.png" align="middle"> Primal Balance</b></p>
<p><b>Effect</b>: Grand Balance now affects extra buildings based on mana spent this reincarnation.</p>
<p><b>Formula</b>: (0.00001 * x) ^ (0.2 - 0.025 * A), where x is mana produced (This Reincarnation) and A is Ascension stat.</p>
<br/>
<a id="Primal Balance"></a>
<table class="numtable">
    <thead>
      <tr>
          <th>Targets</th>
          <th>A0</th>
          <th>A1</th>
          <th>A2</th>
          <th>A3</th>
          <th>A4</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>1</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
      </tr>
      <tr>
          <td>+1</td>
          <td>1e5</td>
          <td>1e5</td>
          <td>1e5</td>
          <td>1e5</td>
          <td>1e5</td>
      </tr>
      <tr>
          <td>+2</td>
          <td>3.2e6</td>
          <td>5.250e6</td>
          <td>1.016e7</td>
          <td>2.560e7</td>
          <td>1.024e8</td>
      </tr>
      <tr>

          <td>+3</td>
          <td>2.430e7</td>
          <td>5.326e7</td>
          <td>1.516e8</td>
          <td>6.561e8</td>
          <td>5.905e9</td>
      </tr>
      <tr>
          <td>+4</td>
          <td>1.024e8</td>
          <td>2.756e8</td>
          <td>1.032e9</td>
          <td>6.554e9</td>
          <td>1.049e11</td>
      </tr>
      <tr>
          <td>+5</td>
          <td>3.125e8</td>
          <td>9.865e8</td>
          <td>4.569e9</td>
          <td>3.906e10</td>
          <td>9.766e11</td>
      </tr>
      <tr>
          <td>+6</td>
          <td>7.776e8</td>
          <td>2.796e9</td>
          <td>1.541e10</td>
          <td>1.680e11</td>
          <td>6.047e12</td>
      </tr>
      <tr>
          <td>+7</td>
          <td>1.681e9</td>
          <td>6.747e9</td>
          <td>4.305e10</td>
          <td>5.765e11</td>
          <td>2.825e13</td>
      </tr>
      <tr>
          <td>+8</td>
          <td>3.277e9</td>
          <td>1.447e10</td>
          <td>1.049e11</td>
          <td>1.678e12</td>
          <td>1.074e14</td>
      </tr>
      <tr>
          <td>+9</td>
          <td>5.905e9</td>
          <td>2.837e10</td>
          <td>2.299e11</td>
          <td>4.305e12</td>
          <td>3.487e14</td>
      </tr>
      <tr>
          <td>+10</td>
          <td>1e10</td>
          <td>5.179e10</td>
          <td>4.642e11</td>
          <td>1e13</td>
          <td>1e15</td>
      </tr>
    </tbody>
</table>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Grand Balance Tier 2-7</a></b> (R42+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Elven, Demon</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier2.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5E10)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier3.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier4.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 13.61 Ocvg (1.360e88) - <b>FC</b> 81.03 T (8.103e13)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier5.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier6.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier7.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 5.287 Qi (5.287e18)</p>
        </div>
    </div>
</div>
<hr>
<center><b>Ascension 1 Spells</b> (R40+)</center>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreath.png" alt="Neutral" align="middle"> Dragon's Breath</b> (Dragon, R46+)</p>
<p><b>Cost</b>: 1500 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Activates one of the following effects at random for 20 seconds.</p>
<p><b><font color="darkred">Red</font></b>: Increase the production of unique buildings based on the amount of Faction Coins found in this game.</p>
<p><b><font color="darkred">Formula</font></b>: (2 * (ln(1 + x) ^ 2)%, where x is Faction Coins found in this game.</p>
<br>
<p><b><font color="darkgreen">Green</font></b>: Increase the production of all buildings based on the amount of spells cast in this game. Higher bonuses are provided to lower building tiers.</p>
<p><b><font color="darkgreen">Formula</font></b>: (0.01 * x ^ 0.625 * (11 - T) ^ 5)%, where x is spells cast (this game) and T is the building tier. (1 for Farms, 11 for Hall of Legends).</p>
<br>
<p><b><font color="darkblue">Blue</font></b>: Increase your mana regeneration by 200%</p>
<br>
<p><b><font color="white">White</font></b>: Temporarily increase the amount of assistants based on total time spent being neutral.</p>
<p><b><font color="white">Formula</font></b>: (1.35 * floor(x / 60) ^ 0.7), where x is time as neutral this R in seconds.</p>
<br>
<p><b><font color="black">Black</b></font>: Increase the production of all buildings based on Dragon's Breath activity time.</p>
<p><b><font color="black">Formula</font></b>: (0.5 * x ^ 0.75)%, where x is Dragon's Breath activity time.</p>
<br>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/Dragon'sRoarFactionUpgrade.png" align="middle"> <b>Dragon's Roar</b></p>
<p><b>Requirement</b>: Cast Dragon's Breath while having at least 4 other active spells.</p>
<p><b>Effect</b>: Dragon's Breath multiplicatively increases Faction Coin find chance based on its duration.</p>
<p><b>Formula</b>: (6 * x ^ 0.6), where x is duration in seconds.</p>
<p><b>Upgrade Cost</b>: 10 Dd (1e40), A2+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/PrismaticBreathChallenges.png" align="middle"> <b>Prismatic Breath</b> (R63+)</p>
<p><b>Effect</b>: While all 5 breaths are active, Reincarnations count 50% more.</p>
<div class="shlisting">
    <div class="shelementwhole">
        <p onclick="shohid($(this));"><b><a href="#" onclick="return false;"> Dragons Breath Tier 2-7</a></b> (R46+)</p>
        <div class="autohide">
            <p><b>Faction Coins Needed</b> Dwarf, Drow</p>
            <p><b>Effect</b>: Each tier gives another random effect per cast. Tier 5 will trigger all the effects simultaneously.</p>
            <p><b>Effect</b>: Each tier also increase offline production based on mana statistics</p>
            <p><b>Formula</b></p>
            <p><b>Note</b>: No 1 spell will be casted twice in the same cast.</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier2.png" alt="DragonsBreathTier2" align="middle"> <b>Tier</b>: 2</p>
            <p><b>Cost</b> 69 Dvg (6.9e70) - <b>FC</b> 1 Qa (1e15) Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier3.png" alt="DragonsBreathTier3" align="middle"> <b>Tier</b>: 3</p>
            <p><b>Cost</b> 35.36 Ocvg (3.536e88) - <b>FC</b> 177.8 Qa (1.778e17) Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier4.png" alt="DragonsBreathTier4" align="middle"> <b>Tier</b>: 4</p>
            <p><b>Cost</b> 18.12 Qatg (1.812e106) - <b>FC</b> 31.62 Qi (3.162e19) Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier5.png" alt="DragonsBreathTier5" align="middle"> <b>Tier</b>: 5</p>
            <p><b>Cost</b> 9.289 Qaq (9.289e123) - <b>FC</b> 5.623 Sx (5.623e21) Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier6.png" alt="DragonsBreathTier6" align="middle"> <b>Tier</b>: 6</p>
            <p><b>Cost</b> 4.751 Sxqag (4.761e141) - <b>FC</b> 1 Sp (1e24) Dwarven, Drow</p>
            <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier7.png" alt="DragonsBreathTier7" align="middle"> <b>Tier</b>: 7</p>
            <p><b>Cost</b> Free - <b>FC</b> 177.8 Sp (1.778e26) Dwarven, Drow</p>
            <p><b>Note</b>: Dragon's Breath will cast a random Dragon's Breath spell for the 6th tier.</p>
            <p><b>Note</b>: Dragon's Breath will cast 2 random Dragon's Breath spell for the 7th tier.</p>
        </div>
    </div>
</div>
<br/>
<p><b>Mercenary</b>: Modified Tax Collection (R75+)</p>
<p><b>Note: Spell altered with new name and effects - still count as Tax Collection for all purposes.</p>  
<p><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefitsSpell.png" alt="Round Table" align="middle"> <b>Share Benefits</b> (Good Mercenary)</p>
<p><b>Cost</b>: 200 Mana - <b>Duration</b>: Fixed to 20 seconds</p>
<p><b>Requirement</b>: Round Table</p>
<p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level.</p>
<p><b>Effect</b>: Also produce Tax Collection casts per second based on your Maximum Mana.</p>
<p><b>Formula</b>: ((((1 + 0.01 * (120 + 1.25 * ln(1 + 90 + x) ^ 1.25)) ^ T) - 1) * 100)%, where x is tax collection seconds and T the Share Benefits tier (Production bonus).</p>
<p><b>Formula</b>: 120 ^ (0.25 * T)%, where T is Share Benefits (Faction Coin find chance multiplier).</p>
<p><b>Formula</b>: (0.01 * x * T), where x is Maximum Mana and T Share Benefits tier (Additional Tax Collection).</p>
<p><b>Note</b>: Can be cast up to 36 tiers (Ascension 1) / 99 tiers (Ascension 3).</p>
<p><b>Note</b>: Each tier costs x2/1.5 (with S1275) more mana than the previous one until Tier 40 - above x4/x2.25 than the previous one.<p>
<p><b>Note</b>: Drains every second Mana equal to its current cost.</p>
<p><b>Note</b>: Upgrades that cast free Tax Collection are disabled.</p> 
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ReapInterestsSpell.png" alt="Tyrant Garrison" align="middle"> <b>Reap Interests </b> (Evil Mercenary)</p>
<p><b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds</p>
<p><b>Requirement</b>: Dark Covenant</p>
<p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.</p>
<p><b>Formula</b>: *(50000 * log10(8 + 0.1 * x)), where x is amount of Reap Interests casts.</p>
<p><b>Note</b>: Upgrades that cast free Tax Collection are treated as Reap Interests casts.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AppraisalVantageSpell.png" alt="Freemason's Hall" align="middle"> <b>Appraisal Vantage</b> (Neutral Mercenary)</p>
<p><b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds</p>
<p><b>Requirement</b>: Secret Exchange</p>
<p><b>Effect</b>: Generates additional Faction Coins based on the amount of assistants you own.</p>
<p><b>Formula</b>: (x * y ^ 1.275), where x is assistants owned, y is Faction coin chance.</p>
<p><b>Note</b>: Upgrades that cast free Tax Collection are treated as Appraisal Vantage casts.</p>
<hr>
<b><center>Ascension 2</b> (R100+)</center>
<b><center>Secondary Alignment Spells</center></b>
<p><img src="http://musicfamily.org/realm/Factions/picks/TemporalFluxSpell.png" alt="Temporal Flux" align="middle"> <b>Temporal Flux</b> (Proof of Order)</p>
<p><b>Requirement</b>: Ascension 2</p>
<p><b>Cost</b>: 5000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase Unique building production by time spent this game.</p>
<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
<p><b>Formula</b>: (3.75 * (x / 60) ^ 0.825)%, where x is time in seconds this game.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/TemporalFluxTier2.png" alt="Temporal Flux" align="middle"> <b>Tier 2</b> (R120+)</p>
<p><b>Requirement</b>: Lantern of Guidance (Artifact)</p>
<p><b>Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
<p><b>FC Cost</b>: 1 Sp (1e24) Angel, Undead, Dwarven and Drow Coins.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/MaelstromSpell.png" alt="Maelstrom" align="middle"> <b>Maelstrom</b> (Proof of Chaos)</p>
<p><b>Requirement</b>: Ascension 2</p>
<p><b>Cost</b>: 3500 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants</p>
<p><b>Formulas:</b></p>
<p><b>Mana</b> - (0.02 * (log10(1 + x)) ^ 5)%, where x is mana produced this game.</p>
<p><b>Trophy</b> - (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
<p><b>Faction Coins</b> - (0.01 * (log10(1 + x)) ^ 4)%, where x is faction coins found this game.</p>
<p><b>Assistants</b> - (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/MaelstromSpellTier2.png" alt="Maelstrom" align="middle"> <b>Tier 2</b> (R120+)</p>
<p><b>Requirement</b>: Oil Lamp (Artifact)</p>
<p><b>Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
<p><b>FC Cost</b>: 1 Sp (1e24) Fairy, Demon, Dwarven and Drow Coins.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AllCreationSpell.png" alt="All Creation" align="middle"> <b>All Creation</b> (Proof Of Balance) </p>
<p><b>Requirement</b>: Ascension 2</p>
<p><b>Cost</b>: 6000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase production of all buildings based on your Mana Regeneration rate.</p>
<p><b>Formula</b>: (0.15 * ln(1 + x) ^ 3.5 + 0.9 * x ^ 0.27)%, where x is Mana Regeneration.</p>
<p><b>Effect</b>: Also multiplicatively increase Faction Coin find chance based on your mana regeneration rate.</p>
<p><b>Formula</b>: (5 * ln(1 + x) ^ 2.5 + 15 * x ^ 0.15)%, where x is Mana Regeneration.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AllCreationSpellTier2.png" alt="All Creation" align="middle"> <b>Tier 2</b> (R120+)</p>
<p><b>Requirement</b>: Spark of Life (Artifact)</p>
<p><b>Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
<p><b>FC Cost</b>: 1 Sp (1e24) Elven, Goblin, Dwarven and Drow Coins.</p>
<hr>
<b><center>Ascension 2</b> (R125+)</center>
<b><center>Elite Faction Spells</center></b>
<p><img src="http://musicfamily.org/realm/Factions/picks/PrecognitionSpell.png" alt="All Creation" align="middle"> <b>Precognition</b> (Archon)</p>
<p><b>Cost</b>: 123456 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on mana produced in this game.</p>
<p><b>Formula</b>: (ln(1 + x) ^ 1.25)%, where x is mana produced in this game.</p>
<p><b>Note: Formula Improved to (1.25 * ln(1 + x) ^ 1.5)% with AR2.</p>
<br/>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png" align="middle"> <b>Chrono Loading</b></p>
<p><b>Requirement</b>: R125+, Cast Precognition with at least 100 Qa (1e17) mana regeneration.</p>
<p><b>Note</b>: Precognition raises regen itself. Make sure that you have 100 Qa (1e17) with it not active</p>
<p><b>Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
<p><b>Formula</b>: (3600 + 60 * x ^ 0.4), where x is Precognition Duration (seconds).</p>
<p><b>Effect</b>: Also scale off invisible spell duration modifiers.</p>
<p><b>Upgrade Cost</b>: 10 Octg (1e118), A3+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/Omniscience.png" align="middle"> <b>Omniscience</b> (R153+)</p>
<p><b>Effect</b>: Precognition also makes Excavations, Artifacts, Reincarnations, Research points and Lineage levels count 15% more.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/LimitedWishSpell.png" alt="Limited wish" align="middle"> <b>Limited Wish</b> (Djinn)</p>
<p><b>Cost</b>: 888888 mana</p> - <b>Duration</b>: Fixed to 12 seconds</p>
<p><b>Effect</b>: Provide a random effect based on your chosen base alignment, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
<p><b>Possible Effects</b></p>
<p><b>Good</b></p>
<p><b>1</b>: Increase the production of all buildings</p>
<p><b>2</b>: Increase Assistants</p>
<p><b>3</b>: All spells durations count more</p>
<p><b>4</b>: Increase Mana Regeneration</p>
<p><b>Evil</b></p>
<p><b>1</b>: Increase the production of all buildings</p>
<p><b>2</b>: Increase Trophy count and Offline Bonus</p>
<p><b>3</b>: Increase Mana Regeneration</p>
<p><b>4</b>: Increase Faction Coin find chance.</p>
<p><b>Neutral</b></p>
<p><b>1</b>: Increase the production of all buildings</p>
<p><b>2</b>: All spells durations count more</p>
<p><b>3</b>: Increase Faction Coin find chance</p>
<p><b>4</b>: Increase Maximum Mana</p>
<p><b>Formula</b>: (2.25 * (ln(1 + x) ^ 1.35) * (y ^ 0.45)), where x is Limited Wish activity time this game in seconds and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
<br/>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/PersistentEntropySpellUpgrade.png" align="middle"> <b>Persistent Entropy</b></p>
<p><b>Requirement</b>: R125+, Cast Limited Wish 100 times within 30 minutes of a new game.</p>
<p><b>Effect</b>: Adds 150 casts to Limited wish formula.</p>
<p><b>Upgrade Cost</b>: 10 Octg (1e118), A3+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/FullWish.png" align="middle"> <b>Full Wish</b> (R153+)</p>
<p><b>Effect</b>: Production of all buildings effect of Limited Wish is active on every cast and is no longer a possible random outcome.</p>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" alt="Infinite Spiral" align="middle"> <b>Infinite Spiral</b> (Makers)</p>
<p><b>Cost</b>: 505000 mana</p> - <b>Duration</b>: 10 seconds</p>
<p><b>Effect</b>: Temporarily increase assistants based on Maximum Mana (multiplicative).</p>
<p><b>Formula</b>: (10 * (ln(1 + x) ^ 1.25)%, where x is Maximum Mana.</p>
<br/>
<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coin find chance.</p>
<p><b>Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is FC chance.</p>
<br/>
<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
<p><b>Formula</b>: (10 + 0.05 * (x * y) ^ 0.75)%, where x is excavations done this R (NOT current excavation count), y is free and ruby Excavation Resets this R</p>
<br/>
<p><b>Spell Trophy & Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/RealityCraterSpellUpgrade.png" align="middle"> <b>Reality Crater</b></p>
<p><b>Requirements</b>: R125+, Cast Infinite Spiral with at least 10 excavation resets this game.</p>
<p><b>Effect</b>: Infinite Spiral also reduces excavation cost multiplier based on assistants owned.</p>
<p><b>Formula</b>: (0.001 * log(1 + x)), where x is assistants owned.</p>
<p><b>Upgrade Cost</b>: 10 Octg (1e118), A3+ Free</p>
<p><b>Challenge Upgrade</b>: <img src="http://musicfamily.org/realm/Factions/picks/Gaia'sCradle.png" align="middle"> <b>Gaia's Cradle</b> (R153+)</p>
<p><b>Effect</b>: All Infinite Spiral effects scale 15% faster.</p>
<hr>
<p><img src="http://musicfamily.org/realm/Factions/picks/CatalystSpell.png" alt="Catalyst" align="middle"> <b>Catalyst</b> (Djinn Bloodline, R130+)</p>
<p><b>Cost</b>: 500000 Mana</p> - <b>Duration</b>: Fixed to 60 seconds</p>
<p><b>Requirements</b>: R130+, Djinn Bloodline</p>
<p><b>Effect</b>: Activates a random vanilla or base alignment spell at tier 7 for 60 seconds. This spell's duration cannot be modified.</p>
<p><b>Note</b>: Can not access Holy Frenzy regardless of alignment.</p>
<p><b>Notes</b></p>
<p><b>1</b>. Choosing this Bloodline or having/buying A400 with Djinn gives you the vanilla spell upgrades that enable the challenge reward when bought.</p>
<p><b>2</b>. Cannot cast a spell that is already avaliable.</p>
<p><b>3</b>. The Spell Pool is 8 for Neutral factions, 7 for Good/Evil (-1 faction and -1 alignment spell)</p>
<hr>
<p><img src="http://musicfamily.org/realm/Factions/picks/ChaosMadnessSpell.png" alt="ChaosMadness" align="middle"> <b>Chaos Madness</b> (Chaos Mercenary) (R194+)</p>
<p><b>Cost</b>: 500000 Mana - <b>Duration</b>: Fixed to 20 seconds</p>
<p><b>Requirements</b>: R194+, Mercenary Challenge 2 completed</p>
<p><b>Effect</b>: Grants the effect of a random lineage, with the level of your highest lineage for 20 seconds.</p>
<p><b>Note</b>: Does not select a lineage that is already avaiable.</p>
<?php include "../scripts/footer.html"; ?>
