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
            background-color: #FFFFFF
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
    </style>
    <?php include "../scripts/header.html"; ?>
    <br/>
    <h6><img src="http://musicfamily.org/realm/Factions/picks/SpellsTopPage.png"></h6>
    <div id="tiercal" class="calculator" style="padding-left: 70px">
        <script src='https://code.jquery.com/jquery-2.1.4.min.js'
                integrity='sha384-R4/ztc4ZlRqWjqIuvf6RX5yb/v90qNGx6fS48N0tRxiGkqveZETq72KgDVJCp2TC'
                crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'
                integrity='sha384-pPttEvTHTuUJ9L2kCoMnNqCRcaMPMVMsWVO+RLaaaYDmfSP5//dP6eKRusbPcqhZ'
                crossorigin='anonymous'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pako/0.2.8/pako.js"
                integrity="sha384-2+IobOaTSbjKqEDmmIZdyBwCBsLf880E4AdS+CXVxRBMrGS01qZi2ZdA69kccuyt"
                crossorigin="anonymous"></script>
        <script>window.Vue || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js" integrity="sha384-oyil/hbn4lE/VRhQytSipUwmWiTbzVK5S3a+wzVrgexPs+UrQ+e4xRatGDd8RNNE" crossorigin="anonymous">\x3C/script>')</script>

        <script src='/realm/scripts/tiers/savecodec2.js'></script>
        <script src='/realm/scripts/tiers/util.js'></script>
        <script src='/realm/scripts/tiers/index.js'></script>
        <div class='container' id='app'>
            <br/>
            <b class='page-header' style="padding-left: 40px">What Tiers do you have unlocked?</b>
            <div class='input-group-btn'>
                <!--                <button id='doReEnter' class='btn btn-success' type='button'>Re-Enter save</button>
                <button id='doSaveCopy' class='btn btn-info' type='button'>Copy save</button>
                <button id='doSaveClear' class='btn btn-danger' type='button' >Clear save</button> -->
            </div>
            <div class='panel panel-primary'>
                <div class='panel-body'>
                    <div class='input-group panelSaveInput'>
                        <label id='saveInputLabel' class='input-group-addon' for='saveInput'><b>Input Save</b>
                            <input id='saveInput' class='form-control' type='text' name='saveInput' value=''>
                            <button id='doSaveClear' class='btn btn-danger' type='button'><b>Clear save</b></button>
                    </div>
                </div>
            </div>
            <ul>
                <li v-for='s in spells' , :style='{fontWeight: s.unlocked != 4?"bold":"normal"}'>
                    {{s.name}}: {{s.unlocked + 1}}
                </li>
            </ul>
        </div>
    </div>
    <b id="tiertimes" class="calculator">
        <form style="background-color:#b3bcc6">
            Input the Tier and the R you want to unlock it at then click Show
        </form>
        <form style="background-color:#b3bcc6">
            Tier : <input type="number" min="2" max="6" maxlength="1" name="tmin" id="tmin" value="2">
            To Tier : <input type="number" min="2" max="6" maxlength="1" name="tmax" id="tmax" value="6">
            From R : <input type="number" min="42" max="105" maxlength="3" name="rmin" id="rmin" value="42">
            To R : <input type="number" min="42" max="105" maxlength="3" name="rmax" id="rmax" value="105">
            <input type="button" value="Show" onclick="commitMainTable(rmin.value,rmax.value,tmin.value,tmax.value)">
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
            var minTier = 2;
            var maxTier = 6;
            var minReinc = 42;
            var maxReinc = 50;
            if (localStorage && (parseInt(localStorage.getItem('mint')) > 0) && (parseInt(localStorage.getItem('maxt')) > 0) && (parseInt(localStorage.getItem('minr')) > 0) && (maxReinc = parseInt(localStorage.getItem('maxr')) > 0)) {
                minTier = parseInt(localStorage.getItem('mint'));
                maxTier = parseInt(localStorage.getItem('maxt'));
                minReinc = parseInt(localStorage.getItem('minr'));
                maxReinc = parseInt(localStorage.getItem('maxr'));
            }
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

            function commitMainTable(Rmin, Rmax, Tmin, Tmax) {
                minReinc = (Rmin >= 42) ? parseInt(Rmin) : 42;
                maxReinc = parseInt(Rmax);
                minTier = (Tmin >= 2) ? parseInt(Tmin) : 2;
                maxTier = parseInt(Tmax);
                if (localStorage) {
                    localStorage.setItem('mint', clamp(minTier, 2));
                    localStorage.setItem('maxt', clamp(maxTier, 6));
                    localStorage.setItem('minr', clamp(minReinc, 42));
                    localStorage.setItem('maxr', clamp(maxReinc, 42));
                }
                commitInput();
                commitMainHead();
                $("#mainTable > tbody").empty();
                for (i = minReinc; i <= maxReinc; i++) {
                    var row = table.getElementsByTagName('tbody')[0].insertRow(-1);
                    var cellR = row.insertCell(-1);
                    cellR.innerHTML = "R" + i;
                    cellR.style.textAlign = "center";
                    for (j = minTier; j <= maxTier; j++) {
                        var Generator = ( Math.pow(j, 2) - j ) * Math.pow(0.98, i - j - 42);
                        var Days = Math.floor(0.5 * Generator);
                        var Hours = Math.floor(12 * Generator) - 24 * Days;
                        var Minutes = Math.round(720 * Generator) - ( 24 * 60 * Days + 60 * Hours );
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
                        cell.innerHTML =
                            (( Math.floor(Days) > 0 ) ? Math.floor(Days) + "d" : "") +
                            (( Math.floor(Hours) > 0 ) ? " " + Math.floor(Hours) + "h" : "") +
                            (( Math.floor(Minutes) > 0 ) ? " " + Math.floor(Minutes) + "m" : "");
                    }
                }
            }

            function commitInput() {
                document.getElementById("tmin").value = minTier;
                document.getElementById("tmax").value = maxTier;
                document.getElementById("rmin").value = minReinc;
                document.getElementById("rmax").value = maxReinc;
            }
            commitMainTable(minReinc, maxReinc, minTier, maxTier);

            //handler for enter button on input not using submit button
            $(function () {
                $("form input").keypress(function (e) {
                    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13))
                        commitMainTable(rmin.value, rmax.value, tmin.value, tmax.value);
                });
            });
        </script>
        </font>
    </b>
    <p>Spells are an active component of the game mechanics that enables to boost production. They require mana to be cast and only work while playing online.
        Their duration, resource gain, mana-cost, and mana regeneration speed can be altered by getting specific Faction, Heritage, Challenge, or Research upgrades. Different aspects of the spells can also be used in other upgrades (eg: while a spell is active, the number of spell casts, based on mana produced, etc.).</p>
    <p>The trick to use spells efficiently relies on finding the best setting: Which spell combination to cast, at what timing, with which automatic-casting tool, and where to set the contingency arrow. Like for upgrades, these choices can make a crucial difference for your game progress.</p>
    <p><b>------------------------------</b>
    <p><b>Tier Spell Upgrades (R42+)</p></b>
    <p>From R42+, for each default spell, 5 tier spell upgrades become available. Each tier gives 1 additional spell cast, and with all tiers combined, allows to cast a single spell up to 6 times simultaneously.
    <p><b>Note</b>: Dragon's Breath will cast a random Dragon's Breath spell for the 6th tier.
    <p>Tier upgrade names start with the default spell's name followed by the tier number, starting from 2 to 6 (Holy Light 2, Holy Light 3, etc.)
    <p>Once tier spell upgrades are bought, you will need to use the Tiered Autocasting on each tier upgraded spell to set the amount of tier casts you wish, or else the casts will remain at tier 1.
    <p><b>Offline bonus for spell tier</b>: (m + 100 * r)^(1 + 0.15 * (t-1)) where m is max mana, r is regen, t is tier.
    <p><b>Unlock Formulas</b>
    <p>Each Tier Spell upgrade requires Time (Total), Coins, and Faction Coins (except for Call to arms)
    <p>Time for tier n + 1: Formula: 43200 * {(n + 1)^2 - (n + 1)} * 0.98^{R - (n + 1) - 42} seconds
    <p>Diamond Coins for tier n + 1: Formula: x^{1 + 0.25 * (n - 1)}
    <p>Faction Coins for tier n + 1: Formula: x^{1 + 0.25 * (n - 1)}
    <p>where x is costs (see above table), R is your Reincarnation count, and n + 1 is number of upgrades.
    <p>Unlocking Tier spell upgrades only need to be done once, but you will still need to gather the coins and FCs necessary to purchase them after each abdication.
    <p><b>Tier Mana Cost</B>: Mana cost for tiers is c*(2^t-1), where c is base mana cost and t is tier (Each tier has double the cost of the previous tier)
    <p><b>------------------------------</b>
    <p><b>Offline Spell Casting</b>
    <p><b>While offline</b>: Spells set on autocasting will gain "Active Time (This game)", but no spell casts will be counted. Instead, a generic non-specific spell will increase your "Spell Casts" entry in the stats.
    <p><b>Offline Activity Time Gain Formula</b>
    <p><b>Formula</b>: t * min(1, m * d / (c^1.5 * n)), where t is offline time, m is mana regen per second, d is spell duration, c is spell mana cost, and n is number of spells set to autocast
    <p><b>Note</b>: When going offline disable Tax Collection as it is counted for the number of spells set to autocast but nothing will be gained from it being set to autocast offline.
    <p><b>For Spells to work offline, you need</b>:
    <p>Offline mana regen upgrades (such as included in the 'Automatic auto-casting' upgrade)
    <p>Offline spell casting upgrades (such as included in the 'Priority Auto-casting' upgrade)
    <p>The bonuses are additional. The total bonus of all the offline auto-casting upgrades is 10 spell casts per minute and 90% of your online mana regeneration rate.
    <p><b>------------------------------</b>
    <h6>All Alignment and Faction Spells</h6>
    <p><b>All Spells Tiers</b>
    <p><b>Note</b>: Each tier also increase offline production based on mana statistics. (Not Tax Collection)
    <p><b>Formula</b>: (m + 100 * r)^(1 + 0.15 * (t-1)) where m is max mana, r is regen, t is tier.
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TaxCollection.png" alt="All Factions" align="middle"> Tax Collection</b> (All Factions)</p>
    <p><b>Works For</b>: All - <b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds </p>
    <p><b>Effect</b>: Instantly gain 30 seconds worth of coin production from buildings and assistants.</p>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/CallToArms.png" alt="All Factions" align="middle"> Call to Arms</b> (All Factions)</p>
    <p><b>Works For</b>: All - <b>Cost</b>: 400 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own.</p>
    <p><b>Formula</b>: (0.3*x)^0.975%, where x is your Buildings Owned (This Game) stat.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Call to Arms Tier 2-6</a></b></p>
            <div class="autohide">
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier2.png" alt="Calltoarms2" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 51 Sxd (5.1e52) - <b>FC</b> 0</p></b>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier3.png" alt="Calltoarms3" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 766.4 Vg (7.664e65) - <b>FC</b> 0</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier4.png" alt="Calltoarms4" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 11.52 Qivg (1.152e79) - <b>FC</b> 0
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier5.png" alt="Calltoarms5" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 173.1 Novg (1.731e92) - <b>FC</b> 0
                <p><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier6.png" alt="Calltoarms6" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.601 Qatg (2.601e105) - <b>FC</b> 0
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Spiritualsurge.png" alt="All Factions" align="middle"> Spiritual Surge</b> (All Factions)</p>
    <p><b>Works For</b>: All (R14+) - <b>Cost</b>: 2500 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings based on the amount of times you reincarnated.</p>
    <p><b>Formula</b>: 10000*1.05^x%, where x is the number of times you have reincarnated.</p>
    <div id="SSCal" class="calculator">
        <table>
            <tr>
                <th style="width:100px; height: 35px" rowspan="2">Reincarnation</th>
                <th style="width:55px" class="SSCalTieHid" rowspan="2">Tier</th>
                <th colspan="2">Production bonus</th>
                <th style="width:120px" class="ResUnl" rowspan="2">D245 production bonus</th>
            </tr>
            <tr class="ResUnl">
                <th>without D245</th>
                <th>with D245</th>
            </tr>
            <tr>
                <td><input id="SSCalRei" type="number" min="14" max="100" value="14"></td>
                <td class="SSCalTieHid"><input id="SSCalTie" type="number" min="1" max="6" value="1"></td>
                <td id="SSCalProNoD245"></td>
                <td id="SSCalProD245" class="ResUnl"></td>
                <td id="SSCalD245" class="ResUnl"></td>
            </tr>
        </table>
        <script>
            function CalSSMul(rei) {
                return 100 * Math.pow(1.05, rei) + 1;
            }
            function MulToBon(mul) {
                return Math.floor(100 * (mul - 1));
            }
            function CalSS() {
                var rei = parseInt($('#SSCalRei').val()),
                    tie = 0,
                    ProNoD245 = 0,
                    ProD245 = 0;
                if (rei < 22) {
                    $('.ResUnl, .SSCalTieHid').css('display', 'none');
                    $('#SSCal th').removeAttr('rowspan colspan');
                    ProNoD245 = CalSSMul(rei);
                    $('#SSCalProNoD245').text(MulToBon(ProNoD245).toFixed(0) + '%');
                } else if (rei < 40) {
                    $('#SSCal tr:eq(0) > th:eq(2)').attr('colspan', '2');
                    $('#SSCal tr:eq(0) > th:not(:eq(2))').attr('rowspan', '2');
                    $('th.ResUnl, td.ResUnl').css('display', 'table-cell');
                    $('tr.ResUnl').css('display', 'table-row');
                    $('.SSCalTieHid').css('display', 'none');
                    ProNoD245 = CalSSMul(rei);
                    $('#SSCalProNoD245').text(MulToBon(ProNoD245).toFixed(0) + '%');
                    ProD245 = CalSSMul(rei * 2);
                    $('#SSCalProD245').text(MulToBon(ProD245).toFixed(0) + '%');
                    $('#SSCalD245').text(MulToBon(ProD245 / ProNoD245).toFixed(0) + '%');
                } else {
                    $('#SSCal tr:eq(0) > th:eq(2)').attr('colspan', '2');
                    $('#SSCal tr:eq(0) > th:not(:eq(2))').attr('rowspan', '2');
                    $('th.ResUnl, td.ResUnl').css('display', 'table-cell');
                    $('tr.ResUnl').css('display', 'table-row');
                    if (rei >= 42) {
                        tie = parseInt($('#SSCalTie').val());
                        $('.SSCalTieHid').css('display', 'table-cell');
                    } else {
                        tie = 1;
                        $('.SSCalTieHid').css('display', 'none');
                    }
                    ProNoD245 = Math.pow(CalSSMul(rei), tie * 0.1);
                    $('#SSCalProNoD245').text(MulToBon(ProNoD245).toFixed(0) + '%');
                    ProD245 = Math.pow(CalSSMul(rei * 2), tie * 0.1);
                    $('#SSCalProD245').text(MulToBon(ProD245).toFixed(0) + '%');
                    $('#SSCalD245').text(MulToBon(ProD245 / ProNoD245).toFixed(0) + '%');
                }
            }
            CalSS();
            $('#SSCalRei, #SSCalTie').on('input', CalSS);
        </script>
    </div>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Spiritual Surge Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Goblin, Undead, Demon, Dwarven, Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier2.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 66 Uvg (6.6e67) - <b>FC</b> 10 T (1e13) each</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier3.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 5.949 Spvg (5.949e84) - <b>FC</b> 891.3 T (8.913e14) each</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier4.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 53.61 Utg (5.361e97) - <b>FC</b> 79.43 Qa (7.943e16) each</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier5.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 48.33 Octg (4.833e118) - <b>FC</b> 7.079 Qi (7.079e18) each</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier6.png" alt="Spiritual Surge" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 4.356 Qaqag (4.356e135) - <b>FC</b> 631 Qi (6.31e20) each</p>
            </div>
        </div>
    </div>
    </br>
    <h6>Alignment Spells</h6>
    <p><b>Faction Spell</b>: Tax Collection
    <p><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefits.png" alt="Round Table" align="middle"> <b>Mercenary Good Alignment</b>
    <p><b>Requirement</b>: Mercenary Camp
    <p><b>Cost</b>: 1 Qaqag (1e135)
    <p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 35 tiers.
    <p><b>Formula</b>: 120 ^ (0.25 * t), where t is tier (FC chance multiplier)
    <p><b>Formula</b>: ((2.20 ^ T) - 1) * 100, multiplicative (production multiplier)
    <br/>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ReapInterests.png" alt="Tyrant Garrison" align="middle"> <b>Mercenary Evil Alignment</b>
    <p><b>Requirement</b>: Tyrant Garrison
    <p><b>Cost</b>: 1 Qaqag (1e135)
    <p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.
    <p><b>Formula</b>: y ^ (1 + 0.2 * Log10(1 + x)), where y is TC original power and x is amount of TC casts
    <p><b>Note</b>: Extra time from reap interests does apply to S50.
    <p><b>Note</b>: S50 tax collections do increase reap interests.
    <br/>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AppraisalVantage.png" alt="Freemason's Hall" align="middle"> <b>Mercenary Neutral Alignment</b>
    <p><b>Requirement</b>: Freemason's Hall
    <p><b>Cost</b>: 1 Qaqag (1e135)
    <p><b>Effect</b>: Generates additional Faction Coins per cast
    <p><b>Formula</b>: 2.65 * x ^ 2.65, where x is original Faction Coin chance.
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLight.png" alt="Good" align="middle"> Holy Light</b> (Any Good Faction)</p>
    <p><b>Works For</b>: Good - <b>Cost</b>: 900 Mana - <b>Duration</b>: 10 seconds </p>
    <p><b>Effect</b>: Increase clicking reward by 2500%</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Holy Light Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Dwarf
                <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier2.png" alt="HolyLightTier2" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 1 B (1e9)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier3.png" alt="HolyLightTier3" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 22.39 B (2.239e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier4.png" alt="HolyLightTier4" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 501.2 B (5.012e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier5.png" alt="HolyLightTier5" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 5 Qa (1.122e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier6.png" alt="HolyLightTier6" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1.e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodFrenzy.png" alt="Evil" align="middle"> Blood Frenzy</b> (Any Evil Faction)</p>
    <p><b>Works For</b>: Evil - <b>Cost</b>: 600 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increases the production of all Evil buildings by 1000%.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Blood Frenzy Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Goblin, Undead, Demon, Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier2.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 1 B (1e9)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier3.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 22.39 B (2.239e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier4.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 501.2 B (5.012e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier5.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 11.22 T (1.122e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier6.png" alt="Bloodfrenzytier" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinder.png" alt="Neutral" align="middle"> Gem Grinder</b> (Any Neutral Faction)</p>
    <p><b>Works For</b>: Neutral - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Multiply production bonus from gems by x50</p>
    <p><b>Tier Formula</b>: ^1.5 for tier 2, ^1.75 for tier 3, ^2.00 for tier 4,^2.25 for tier 5</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Gem Grinder Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Goblin, Undead, Demon, Dwarven, Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier2.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 60 Nod (6E61) - <b>FC</b> 5 B (5e9)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier3.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 166.9 Qavg (1.669E77) - <b>FC</b> 142.5 B (1.425e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier4.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 464.7 Novg (4.647E92) - <b>FC</b> 4.0161 T (4.061e12)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier5.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 1.293 Qitg (1.293E108) - <b>FC</b> 115.7 T (1.157e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier6.png" alt="Gem Grinder" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 3.6 Qag (3.6e123) - <b>FC</b> 3.299 Qa (3.299e15)
            </div>
        </div>
    </div>
    </br>
    <h6>Faction Spells</h6>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChanting.png" alt="Good" align="middle"> Fairy Chanting</b> (Fairies)</p>
    <p><b>Works For</b>: Fairy - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 10 seconds </p>
    <p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 50'000%</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Fairy Choir</b>
    <p><b>Effect</b>: Triples your assistants while Fairy Chanting is active.
    <p><b>Requirement</b>: Cast Fairy Chanting while having 45 or more assistants.</p>
    <p><b>Challenge Upgrade</b>: Fairy Orchestra, Each assistant generates 3 times as many faction coins while Fairy Chanting is active.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Fairy Chanting Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Fairy
                <p><b>Effect</b>: Increases the duration of the spell by 10 seconds per tier.
                <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier2.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier3.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier4.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier5.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier6.png" alt="FairyChanting" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessing.png" alt="Good" align="middle"> Moon Blessing</b> (Elvens)</p>
    <p><b>Works For</b>: Elf - <b>Cost</b>: 700 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings based on Treasure Clicks (Total).</p>
    <p><b>Formula</b>: 1.75 * ln^3.1(1 + x)%, where x is your Treasure Clicks (Total) stat.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Sun Blessing</b>
    <p><b>Effect</b>: Moon Blessing auto-clicks the treasure 15 times per second.
    <p><b>Requirement</b>: Activate Moon Blessing between 6am and 12pm.</p>
    <p><b>Challenge Upgrade</b>: Star Blessing, Clicks from the Sun Blessing spell upgrade have a 5% increased chance to trigger Elven (3,2) Elven Luck.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Moon Blessing Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Elven
                <p><b>Effect</b>: Increase click reward by an additional 35.6% per tier.
                <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier2.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier3.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier4.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier5.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier6.png" alt="MoonBlessing" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Godshand.png" alt="Good" align="middle"> God's Hand</b> (Angel)</p>
    <p><b>Works For</b>: Angel - <b>Cost</b>: 900 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings by 150x your mana regeneration rate.</p>
    <p><b>Spell Trophy & Upgrade: God's Rest</b>
    <p><b>Effect</b>: Gives random Faction Coins based on your mana regeneration for each other spell you cast while God's Hand is active.
    <p><b>Formula</b>: 50 * x, where x is mana regen per second.</p>
    <p><b>Requirement</b>: Cast God's Hand on any Sunday.</p>
    <p><b>Challenge Upgrade</b>: God's Throne, Mana regeneration is increased by 20% while God's Hand is active.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">God's Hand Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Angel
                <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier2.png" alt="God's Hand" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier3.png" alt="God's Hand" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier4.png" alt="God's Hand" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier5.png" alt="God's Hand" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316 Qa (3.162e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier6.png" alt="God's Hand" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxe.png" alt="Good" align="middle"> Diamond Pickaxe</b> (Dwarf)
    <p><b>Works For</b>: Dwarf - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 12 seconds </p>
    <p><b>Effect</b>: Increase clicking reward by 25% per Excavation you made and increase your Faction Coin find chance by 300%.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Minedwarf</b>
    <p><b>Effect</b>: Increases Diamond Pickaxe bonus to "Faction Coin Find Chance" to 300%.
    <p><b>Requirement</b>: Find 30'000 Faction Coins using Diamond Pickaxe in a single game.</p>
    <p><b>Challenge Upgrade</b>: Iron Grip, Increase Diamond Pickaxe duration by 8 seconds, and its bonus to Faction Coin find chance is passively applied as a multiplier to excavations Faction Coin rewards.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Diamond Pickaxe Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Dwarf
                <p><b>Effect</b>: Increases FC find chance per tier.
                <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier2.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 63 Vg (6.3e64) - <b>FC</b> 1 T (1e12)
                <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier3.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 998.1 Qivg (9.981e80) - <b>FC</b> 63.1 T (6.31e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier4.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 15.81 Utg (1.581e97) - <b>FC</b> 3.981 Qa (3.981e15)
                <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier5.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 250.5 Sxtg (2.505e113) - <b>FC</b> 251.2 Qa (2.512e17)
                <p><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier6.png" alt="Diamond Pickaxe" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 3.969 Dqag (3.969e120) - <b>FC</b> 15.85 Qi (1.585e19)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinsGreed.png" alt="Evil" align="middle"> Goblin's Greed</b> (Goblins)</p>
    <p><b>Works For</b>: Goblin - <b>Cost</b>: 800 Mana - <b>Duration</b>: 5 seconds </p>
    <p><b>Effect</b>: Instantly produces Faction Coins based on gems you own Also increases production of all buildings based on the number of Faction Coins found in this game.</p>
    <p><b>FC Formula</b>: floor(ln^3(1 + x) + 20, where x is your current gems.</p>
    <p><b>Production Formula</b>: 0.75 * ln^3.15(1 + x)%, where x is your Faction Coins Gained (This Game) stat.</p>
    <p><b>Spell Trophy & Upgrade: Greed Drive</b>
    <p><b>Effect</b>: Goblin's Greed costs 150 less mana.
    <p><b>Requirements</b>: Cast Goblin's Greed 100 times in a row and do not cast any other spell.
    <p><b>Note</b>: The Goblin Central Bank upgrade does not interfere with getting this trophy.</p>
    <p><b>Challenge Upgrade</b>: Avarice Drive, Increase Goblin's Greed duration by 5 seconds.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin's Greed Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Goblin
                <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier2.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier3.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier4.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier5.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 (1.162e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier6.png" alt="Goblin's Greed" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTime.png" alt="Evil" align="middle"> Night Time</b> (Undead)</p>
    <p><b>Works For</b>: Undead - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: The production of assistants is increased by 30% per Necropolis you own.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>True Night</b>
    <p><b>Effect</b>: Increases Night Time's production of assistants to 40% per Necropolis.
    <p><b>Requirements</b>: Cast Night Time between 11 pm and 6 am.</p>
    <p><b>Challenge Upgrade</b>: Midnight Time, Increase Night Time assistant bonus based on total time spent offline.
    <p><b>Formula</b>: 0.2 * x^0.7%, where x is your Time Spent Offline (Total) stat in seconds.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Night Time Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Undead
                <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier2.png" alt="Night Time" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier3.png" alt="Night Time" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier4.png" alt="Night Time" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier5.png" alt="Night Time" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier6.png" alt="Night Time" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/HellFireBlast.png" alt="Evil" align="middle"> Hellfire Blast</b> (Demons)</p>
    <p><b>Works For</b>: Demon - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of Evil Fortresses and Hell Portals based on the amount of trophies.</p>
    <p><b>Formula</b>: (round(200 * x^0.8))%, where x is your Trophies Unlocked stat.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Hell Rush</b>
    <p><b>Effect</b>: Hellfire Blast also boosts Halls of Legends.
    <p><b>Requirements</b>: Cast the Demon spell Hellfire Blast in the first 60 seconds of a playtime.</p>
    <p><b>Challenge Upgrade</b>: Hellfire Burst, Reduces Hellfire Blast mana cost based on the number of trophies you have unlocked.
    <p><b>Formula</b>: floor(0.25 * x), where x is the amount of trophies unlocked.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Hellfire Blast Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Demon
                <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier2.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier3.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier4.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier5.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)
                <p><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier6.png" alt="Hellfire Blast" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrike.png" alt="Evil" align="middle"> Combo Strike</b> (Drow)</p>
    <p><b>Works For</b>: Drow - <b>Cost</b>: 800 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: Increase the production of all buildings by a progressively higher value as you continue casting this spell (This game).</p>
    <p><b>Formula</b>: 30*(x^0.9)%, where x is the number of times you have cast Combo Strike (This game).</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Perfect Combo</b>
    <p><b>Requirement</b>: Cast Combo Strike 100 times in a single game,The chain is interrupted by casting different spells.</p>
    <p><b>Effect</b>: Increases Combo Strike bonus.
    <p><b>Formula</b>: 40*(x^0.9)%, where x is the number of times you have cast Combo Strike.
    <p><b>Challenge Upgrade</b>: Versatile Combo, Increase Combo Strike counter based on the amount of spells cast in this game, not including Tax Collection.
    <p><b>New Combo Strike Counter Formula</b>: C - Ctax, where C is your Spells Cast (This Game) stat and Ctax is your Tax Collection Cast This Game.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Combo Strike Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier2.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 63 Vg (6.3e64) - <b>FC</b> 1 T (1e12)
                <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier3.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 998.1 Qivg (9.981e80) - <b>FC</b> 63.1 T (6.31e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier4.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 15.81 Uvg (1.581e97) - <b>FC</b> 3.981 Qa (3.981e15)
                <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier5.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 250.5 Sxtg (2.505e113) - <b>FC</b> 251.2 Qa (2.512e17)
                <p><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier6.png" alt="Combo Strike" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 3.969 Dqag (3.969e120) - <b>FC</b> 15.85 Qi (1.585e19)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrike.png" alt="Neutral" align="middle"> Lightning Strike</b> (Titans)</p>
    <p><b>Works For</b>: Titan - <b>Cost</b>: 900 Mana - <b>Duration</b>: 20 seconds </p>
    <p><b>Effect</b>: The production of a random building is multiplied by 300% for each Iron Stronghold. Also grants Faction Coins depending on your current amount of gems.</p>
    <p><b>Formula</b>: round(1.5*ln(1+x)^3), where x is your current gems.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Lightning Storm</b>
    <p><b>Effect</b>: Increase Lightning Strike multiplier to 5x Iron Strongholds.
    <p><b>Requirement</b>: Cast Lightning Strike 100 times in a single game.
    <p><b>Challenge Upgrade</b>: Thunderstorm, Lightning Strike now grants more Faction Coins based on your Faction Coin find chance.
    <p><b>Formula</b>: round(x^0.8)%, where x is your current chance to find Faction Coins.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Lightning Strike Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Angel, Goblin
                <p><b>Effect</b>: Iron Strongholds count for 50% more per tier for the spell bonus.
                <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier2.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5e10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier3.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)
                <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier4.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 13.61 Ocvg (1.361e88) - <b>FC</b> 81.03 T (8.103e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier5.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)
                <p><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier6.png" alt="Lightning Strike" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/Brainwave.png" alt="Neutral" align="middle"> Brainwave</b> (Faceless)</p>
    <p><b>Works For</b>: Faceless - <b>Cost</b>: 600 Mana - <b>Duration</b>: 600 seconds </p>
    <p><b>Effect</b>: Increase production of all buildings by a cumulative 2% per second.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Faceless Overmind</b>
    <p><b>Effect</b>: Increases Brainwave ticks to 3% per second.
    <p><b>Requirement</b>: Affiliate with the Faceless 5 times in a row.</p>
    <p><b>Challenge Upgrade</b>: Focused Thoughts, Give Brainwave a headstart based on the amount of times you cast it in this game, with a minimum of 1 minute,then grows up to maximum duration. +1 second per 5 minutes Active Time (This Game)
    <p><b>Tier Upgrade</b>: +10 minutes per tier of Brainwave past tier 1.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Brainwave Tier 2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Fairy, Undead
                <p><b>Effect</b>: Brainwave headstarts for an additional 10 minutes per tier.
                <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier2.png" alt="Brainwave" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5E10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier3.png" alt="Brainwave" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier4.png" alt="Brainwave" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 13.61 Ocvg (1.360e88) - <b>FC</b> 81.03 T (8.103e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier5.png" alt="Brainwave" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)
                <p><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier6.png" alt="Brainwave" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalance.png" alt="Neutral" align="middle"> Grand Balance</b> (Druid)</p>
    <p><b>Works For</b>: Druid - <b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds (24s/w spell upgrade)</p>
    <p><b>Effect</b>: Increase the production of your least productive building based on the amount of the three most built ones.</p>
    <p><b>Formula</b>: round(0.25*(x*y*z/729)^0.9) where x,y, and z are the number of your three most-built buildings.</p>
    <p><b>Spell Trophy & Upgrade</b>: <b>Halls of Balance</b>
    <p><b>Effect</b>: Increases Grand Balance duration to 24 seconds and lower its cost by 200 mana.
    <p><b>Requirements</b>: Have Grand Balance affect Hall of Legends.</p>
    <p><b>Challenge Upgrade</b>: Primal Balance, Grand Balance now affects extra buildings based on total mana spent.
    <p><b>Formula</b>: floor (x^0.2 / 10), where x is your Mana Produced (Total) stat.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Grand Balance Tier 2-6</a></b></p>
            <div class="autohide">
               <p><b>Faction Coins Needed</b> Elven, Demon
               <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier2.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5E10)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier3.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier4.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 13.61 Ocvg (1.360e88) - <b>FC</b> 81.03 T (8.103e13)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier5.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)
                <p><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier6.png" alt="Grand Balance" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)
            </div>
        </div>
    </div>
    </br>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreath.png" alt="Neutral" align="middle"> Dragons Breath</b> (Dragon)</p>
    <p><b>Works For</b>: Dragon - <b>Cost</b>: 1500 Mana - <b>Duration</b>: 30 seconds</p>
    <p><b>Description</b>: Increase the production of all buildings based on Dragon's Breath activity time. ({1 * x ^ 0.625}%)
    <p><b>Name</b>: Dragon's Breath
    <p><b>Effect</b>: With the Spell Dragon's Roar upgrade produces Faction Coins based on this spell activity time.
    <p><b>Effect</b>: Activates one of the following effects at random for 20 seconds.</p>
    <p><b>Requirement</b>: Dragons Trade Treaty
    <p><b>Cost</b>: 1500M
    <p><b><font color="darkred">Red</font></b>: Increase the production of unique buildings based on the amount of Faction Coins found in this game.</p>
    <p><b><font color="darkred">Formula</b></font>: ({3 * ln^2(1 + x)}%)
    <p><b><font color="darkgreen">Green</b></font>: Increase the production of all buildings based on the amount of spells cast in this game. Higher bonuses are provided to lower building tiers.</p>
    <p><b><font color="darkgreen">Formula</b></font>: (0.01 * x^0.625 * (11-T)^5)%, where x is spells cast (this game) and T is the building tier. (1 for Farms, 11 for Hall of Legends).
    <p><b><font color="darkblue">Blue</b></font>: Increase your mana regeneration by 200%</p>
    <p><b><font color="white">White</b></font>: Temporarily increase the amount of assistants based on total time spent being neutral.</p>
    <p><b><font color="white">Formula</b></font>: (1.35 * floor(x / 60) ^ 0.7)
    <p><b><font color="black">Black</b></font>: Increase the production of all buildings based on Dragon's Breath activity time.</p>
    <p><b><font color="black">Formula</b></font>: ({1 * x ^ 0.625}%)
    <p><b>Spell Trophy & Upgrade: Dragon's Roar</b>
    <p><b>Effect</b>: Dragon's Breath also produces Faction Coins at each cast based on it's activity time.
    <p><b>Formula</b>: floor(135 * x^0.98), x is all Rs activity time in seconds
    <p><b>Challenge Upgrade</b>: Prismatic Breath While all 5 breaths are active, Reincarnations count double for all purposes.</p>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;"> Dragons Breath Tier2-6</a></b></p>
            <div class="autohide">
                <p><b>Faction Coins Needed</b> Dwarf, Drow
                <p><b>Effect</b>: Each tier gives another random effect per cast. Tier 5 will trigger all the effects simultaneously.
                <p><b>Effect</b>: Each tier also increase offline production based on mana statistics
                <p><b>Formula</b>:
                <p><b>Note</b>: No 1 spell will be casted twice in the same cast.
                <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier2.png" alt="DragonsBreathTier2" align="middle"> <b>Tier</b>: 2
                <p><b>Cost</b> 69 Dvg (6.9e70) - <b>FC</b> 1 Qad (1e15) Dwarven, Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier3.png" alt="DragonsBreathTier3" align="middle"> <b>Tier</b>: 3
                <p><b>Cost</b> 35.36 Ocvg (3.536e88) - <b>FC</b> 177.8 Qa (1.778e17) Dwarven, Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier4.png" alt="DragonsBreathTier4" align="middle"> <b>Tier</b>: 4
                <p><b>Cost</b> 18.12 Qatg (1.812e106) - <b>FC</b> 31.63 Qi (3.163e19) Dwarven, Drow
                <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier5.png" alt="DragonsBreathTier5" align="middle"> <b>Tier</b>: 5
                <p><b>Cost</b> 9.289 Qaq (9.289e123) - <b>FC</b> 5.623 Sx (5.623e21) Dwarven, Drow</p>
                <p><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier6.png" alt="DragonsBreathTier5" align="middle"> <b>Tier</b>: 6
                <p><b>Cost</b> 4.751 Sxqag (4.761e141) - <b>FC</b> 1 Sp (1e24) Dwarven, Drow</p>
                <p><b>Note</b>: Dragon's Breath will cast a random Dragon's Breath spell for the 6th tier.
            </div>
        </div>
    </div>

    <?php include "../scripts/footer.html"; ?>
