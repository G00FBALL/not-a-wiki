<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>
    <p>    <h6><img src="http://musicfamily.org/realm/Factions/picks/ReincarnationTopPage.png" alt="Spellcraft" align="middle"></h6>
    <br/>
    <p>Reincarnation was introduced in the Underworld Expansion. In terms of game-play, it's a second kind of soft reset where players can trade in all of their gems and have most of their stats reset for other bonuses.</p>
    <p><b>Reincarnation Power</b></p>
    <p>When you reincarnate the first time, you will automatically be awarded the</p>
    <p><b>Reincarnation Power upgrade</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/Reincarnation_power_upgrade.png" usemap="#Reincarnation_power_upgrade-map">
        <map name="Reincarnation_power_upgrade-map">
            <area target="" alt="Reincarnation Power upgrade" research="Reincarnation Power upgrade <p> Pointing to this <u>in game</u> under <u>Purchased Upgrades</u> will tell you all information about your current Recarnation level" href="" coords="-1,1,48,49" shape="rect">
        </map>
    <p>It is this upgrade that enables the reincarnation perks.</p>
    <p>Hovering over it (<u>in game</u>) located under the <u>Upgrade</u> tab will reveal all the details about your reincarnation perks.</p>
    <p><b>Requirements</b>
    <p>Reincarnation can only be performed for the first time when the user reaches 1 Oc Gems, and each subsequent reincarnation costs 1000 times more gems.</p>
    <p>Along the way, try to get all the Trophies and Artifacts you can get at each progress level.</p>
    <br/>
    <div id="ReiCosCal">
        <table style="width:98%">
            <tr>
                <th>Complete list of Reincarnation benefits <input id="ReiCosRei" type="number" min="1" max="100" value="1"><span id="R10"> with time(total) <input id="R10TimTot" type="number" min="0" max="876000" value="1"> in hours</span><span id="R20"> and <input id="R20SpeBui" type="number" min="0" max="9999999" value="1">buildings of given type.</span></th>
            </tr>
            <tr>
                <td id="Ben">
                    <p id="R1AllBuiPro"></p>
                    <p id="R1OffPro"></p>
                    <p id="R1FCChaMul"></p>
                    <p id="R1MpS"></p>
                    <p id="R2GemPro"></p>
                    <p id="R5Ass"></p>
                    <p id="R10AllBuiPro"></p>
                    <p id="R12MaxMan"></p>
                    <p id="R20ProEacBui"></p>
                    <p id="R25RE"></p>
                    <p id="R41UniBuiPro"></p>
                    <p id="R45MaxMan"></p>
                    <p id="R50FCChaAdd"></p>
                    <p id="R60FCChaMul"></p>
                    <p id="R70AddResSlo"></p>
                    <p id="RNex"></p>
                    <p id="RUnl"></p>
                </td>
            </tr>
        </table>
        <script>
            function Runl(unl) {
                $('#RUnl').html('This Reincarnation unlocks <b>' + unl + '</b>.');
                $('#RUnl').css('display', 'block');
            }
            function CalRBen() {
                var rei = parseInt($('#ReiCosRei').val());
                if (rei >= 1) {
                    var bonus = (rei < 40) ? 25 * rei : (Math.pow(1 + 0.25 * rei, 0.1) - 1) * 100;
                    $('#R1AllBuiPro').text('Production of all buildings is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R1AllBuiPro').css('display', 'block');
                } else {
                    $('#R1AllBuiPro').css('display', 'none');
                }
                if (rei >= 1) {
                    var bonus = (rei < 40) ? 500 * rei : (Math.pow(1 + 5 * rei, 0.1) - 1) * 100;
                    $('#R1OffPro').text('Offline production is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R1OffPro').css('display', 'block');
                } else {
                    $('#R1OffPro').css('display', 'none');
                }
                if (rei >= 1) {
                    var bonus = Math.pow(rei, 1.1);
                    $('#R1FCChaMul').text('Faction coin chance is multiplicatively increased by ' + bonus.toFixed(1) + '%.');
                    $('#R1FCChaMul').css('display', 'block');
                } else {
                    $('#R1FCChaMul').css('display', 'none');
                }
                if (rei >= 1) {
                    var bonus = Math.floor(12.5 * (Math.pow(1 + 8 * rei, 0.5) - 1) / 2) / 10;
                    $('#R1MpS').text('Mana regeneration is increased by +' + bonus.toFixed(1) + ' m/s.');
                    $('#R1MpS').css('display', 'block');
                } else {
                    $('#R1MpS').css('display', 'none');
                }
                if (rei >= 2) {
                    var bonus = 0.2 * rei;
                    $('#R2GemPro').text('Gem production bonus is increased by +' + bonus.toFixed(1) + '%.');
                    $('#R2GemPro').css('display', 'block');
                } else {
                    $('#R2GemPro').css('display', 'none');
                }
                if (rei >= 5) {
                    var bonus = (rei < 40) ? 2 * rei : (Math.pow(1 + 0.02 * rei, 0.1) - 1) * 100;
                    $('#R5Ass').text('Add ' + rei + ' assistants and their production is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R5Ass').css('display', 'block');
                } else {
                    $('#R5Ass').css('display', 'none');
                }
                if (rei >= 10) {
                    var bonus = (rei < 40) ? Math.pow(rei, 1.75) * Math.pow(parseInt($('#R10TimTot').val()), 0.65) : (Math.pow(1 + Math.pow(rei, 1.75) * Math.pow(parseInt($('#R10TimTot').val()), 0.65) / 100, 0.1) - 1) * 100;
                    $('#R10AllBuiPro').text('Production of all buildings is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R10AllBuiPro, #R10').css('display', 'block');
                } else {
                    $('#R10AllBuiPro, #R10').css('display', 'none');
                }
                if (rei >= 12) {
                    var bonus = 35 * rei;
                    $('#R12MaxMan').text('Maximum mana is increased by +' + bonus.toFixed(0) + '.');
                    if (rei >= 45) $('#R12MaxMan').append(' Total increase is +' + (bonus + 70 * Math.pow(rei, 1.2)).toFixed(0) + '.');
                    $('#R12MaxMan').css('display', 'block');
                } else {
                    $('#R12MaxMan').css('display', 'none');
                }
                if (rei >= 20) {
                    var bonus = (rei < 40) ? 0.01 * rei * parseInt($('#R20SpeBui').val()) : (Math.pow(1 + 0.0001 * rei * parseInt($('#R20SpeBui').val()), 0.1) - 1) * 100;
                    $('#R20ProEacBui').text('Given buildings\' production is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R20ProEacBui, #R20').css('display', 'block');
                } else {
                    $('#R20ProEacBui, #R20').css('display', 'none');
                }
                if (rei >= 25) {
                    var bonus = 0.5 * rei;
                    $('#R25RE').text('Royal Exchange bonus is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R25RE').css('display', 'block');
                } else {
                    $('#R25RE').css('display', 'none');
                }
                if (rei >= 41) {
                    var bonus = 1200 * Math.pow(rei, 1.1);
                    $('#R41UniBuiPro').text('Unique Buildings\' production is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R41UniBuiPro').css('display', 'block');
                } else {
                    $('#R41UniBuiPro').css('display', 'none');
                }
                if (rei >= 45) {
                    var bonus = 70 * Math.pow(rei, 1.2);
                    $('#R45MaxMan').text('Maximum mana is increased by +' + bonus.toFixed(0) + '. Total increase is +' + (bonus + 35 * rei).toFixed(0) + '.');
                    $('#R45MaxMan').css('display', 'block');
                } else {
                    $('#R45MaxMan').css('display', 'none');
                }
                if (rei >= 50) {
                    var bonus = rei;
                    $('#R50FCChaAdd').text('Faction coin chance is increased by ' + bonus.toFixed(1) + '%.');
                    $('#R50FCChaAdd').css('display', 'block');
                } else {
                    $('#R50FCChaAdd').css('display', 'none');
                }
                if (rei >= 60) {
                    var bonus = 1.2 * Math.pow(rei, 1.05);
                    $('#R60FCChaMul').text('Faction coin chance is increased ' + bonus.toFixed(0) + ' times if they match your Faction or Bloodline.');
                    $('#R60FCChaMul').css('display', 'block');
                } else {
                    $('#R60FCChaMul').css('display', 'none');
                }
                if (rei >= 70) {
                    $('#R70AddResSlo').text('You gain 1 additional Research slot for each branch.');
                    $('#R70AddResSlo').css('display', 'block');
                } else {
                    $('#R70AddResSlo').css('display', 'none');
                }
                if (rei <= 40) {
                    $('#RNex').html('To Reincarnate to R' + rei.toFixed(0) + ', you need <b>1e' + (24 + rei * 3).toFixed(0) + '</b> gems.');
                } else {
                    $('#RNex').html('To Reincarnate to R' + rei.toFixed(0) + ', you need <b>1.778e' + (rei * 2 - 62).toFixed(0) + '</b> gems.');
                }
                switch (rei) {
                    case 2:
                        Runl('Vanilla Challenges');
                        break;
                    case 3:
                        Runl('Mercenaries');
                        break;
                    case 4:
                        Runl('Neutral Challenges');
                        break;
                    case 6:
                        Runl('Prestige Challenges');
                        break;
                    case 7:
                        Runl('Bloodlines');
                        break;
                    case 16:
                        Runl('Vanilla Research');
                        break;
                    case 23:
                        Runl('Neutral Research');
                        break;
                    case 29:
                        Runl('prestige research');
                        break;
                    case 40:
                        Runl('Ascension');
                        break;
                    case 42:
                        Runl('Tiered Autocasting');
                        break;
                    case 46:
                        Runl('Neutral Prestige (Dragons)');
                        break;
                    case 47:
                        Runl('Neutral Prestige Research');
                        break;
                    case 48:
                        Runl('Dragon Challenges');
                        break;
                    case 60:
                        Runl('lineages');
                        break;
                    case 75:
                        Runl('Mercenary Research');
                        break;
                    default:
                        $('#RUnl').css('display', 'none');
                        break;
                }
            }
            $('#ReiCosRei, #R10TimTot, #R20SpeBui').on('input', CalRBen);
            CalRBen();
        </script>
    </div>
    <br/>
    <div class="shlisting">
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Reincarnation Perks</a></b></p>
            <div class="autohide">
                <p><b>x in formulas is amount of times you reincarnated.</b></p>
                <p><b>Increase</b>: Production by 25*x%.</p>
                <p><b>Increase</b>: Offline production by (500 * x)%.</p>
                <p><b>Increase</b>: FC chance multiplicatively by (x^1.1)%. Note: Tooltip is wrong and display actual bonus for 50th reincarnation and up.</p>
                <p><b>Increase</b>: Mana per Second by floor(12.5*(sqrt(1+8*x)-1)/2)/10.</p>
                <p><b>2nd Reincarnation and up</b>
                <p><b>Increase</b>: Gem production bonus by 0.2*x%.
                <p><b>5th Reincarnation and up</b>
                <p><b>Increase</b>: Assistants by x and assistant production is increased by 2*x%.
                <p><b>10th Reincarnation and up</b>
                <p><b>Increase</b>: Production of all buildings by x^(1.75)*t^(0.65), where t is time(total) in hours.
                <p><b>12th Reincarnation and up</b>
                <p><b>Increase</b>: Maximum mana by 35*x.</p>
                <p><b>20th Reincarnation and up</b>
                <p><b>Increase</b>: Production of each building by 0.01*x*b%, where b is amount of specific building. (e.g. R20 with 2000 Farms and 1000 Blacksmith is 0.01*20*2000%=400% bonus to Farms and 0.01*20*1000%=200% bonus to Blacksmith)</p>
                <p><b>25th Reincarnation and up</b>
                <p><b>Increase</b>: Royal Exchange bonus by 0.5*x%.
                <p><b>41st Reincarnation and up</b>
                <p><b>Increase</b>: Production of Unique Buildings by 1200*(x^1.1)%.
                <p><b>45th Reincarnation and up</b>
                <p><b>Increase</b>: Maximum mana by 70*x^1.2. Note: Tooltip is wrong and this power neither replace nor improve Reincarnation 12 power. </p>
                <p><b>50th Reincarnation and up</b>
                <p><b>Increase</b>: FC chance by x%. Note: Tooltip is wrong and display actual bonus for 1st reincarnation and up.
                <p><b>60th Reincarnation and up</b>
                <p><b>Increase</b>: FC change multiplicatively by 1.2*x^1.05 if they match your Faction or Bloodline.
                <p><b>70th Reincarnation and up</b>
                <p><b>Added</b>: You gain 1 additional Research slot for each branch.
            </div>
        </div>
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Reincarnation Unlocks</a></b></p>
            <div class="autohide">
                <p><b>R0</b>: Neutral Factions</p>
                <p><b>R0</b>: Prestige Factions</p>
                <p><b>R2-R18</b>: Vanilla challenges</p>
                <p><b>R3</b>: Mercenaries</p>
                <p><b>R4-R19</b>: Neutral Challenges</p>
                <p><b>R6-R33</b>: Prestige Challenges</p>
                <p><b>R7</b>: Bloodlines</p>
                <p><b>R16</b>: Vanilla Research</p>
                <p><b>R23</b>: Neutral Research</p>
                <p><b>R29</b>: Prestige Research</p>
                <p><b>R40</b>: Ascension</p>
                <p><b>R42</b>: Tiered Autocasting</p>
                <p><b>R46</b>: Neutral Prestige (Dragons)</p>
                <p><b>R47</b>: Neutral Prestige Research</p>
                <p><b>R48</b>: Dragon Challenges
                <p><b>R60</b>: Lineages
                <p><b>R75</b>: Mercenary Research
            </div>
        </div>
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Items & Stats</a></b></p>
            <div class="autohide">
                <p><b>Lost or Reset at Reincarnation</b></p>
                <p>Gems</p>
                <p>Gem upgrades</p>
                <p>Coins</p>
                <p>Clicks</p>
                <p>Spell casts</p>
                <p>Playtime (Still tracked/kept for Bloodlines)This is the "Metagame" section of stats page</p>
                <p>Excavations made</p>
                <p>Upgrades purchased (max) stat</p>
                <p>Grinding Dedication upgrade</p>
                <p>Buildings (max) stat</p>
                <p>All Faction coin stats</p>
                <p>Click upgrades (50k clicks, 100k clicks)</p>
                <p>All the "Magic" section of stats page.</p>
                <p>----------------------------------</p>
                <p><b>Kept or Gained at Reincarnation</b></p>
                <p>All Trophies (and their associated unlocks)</p>
                <p>Heritages (technically from trophies)</p>
                <p>Excavation unlocks</p>
                <p>Rubies & Ruby Powers</p>
                <p>Completed Challenges</p>
                <p>Total times allied and spent in every faction. Applied only to Bloodlines and Faceless.</p>
                <p>Research quests</p>
                <p>Researches completed</p>
                <p>Completed Faction quests</p>
                <p>Gain research points if above R16. # gained is equal to the new R#.</p>
                <p>Reincarnation Power (Upgrade)</p>
            </div>
        </div>
        <div class="shelementwhole">
            <p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Reincarnations Trophies</a></b></p>
            <div class="autohide">
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/1Reincarnation.png" alt="1 Reincarnation" align="middle"> 1 Reincarnation</b></p>
                <p><b>Requirement</b>: Reincarnate 1 time</p>
                <p><b>Cost</b>: (To Reincarnate to R1) 1 Oc (1e27) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/3Reincarnations.png" alt="3 Reincarnations" align="middle"> 3 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 3 times</p>
                <p><b>Cost</b>: (To Reincarnate to R3) 1 Dc (1e33) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/7Reincarnations.png" alt="7 Reincarnations" align="middle"> 5 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 5 times</p>
                <p><b>Cost</b>: (To Reincarnate to R5) 1 Dd (1e39) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/7Reincarnations.png" alt="7 Reincarnations" align="middle"> 7 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 7 times</p>
                <p><b>Cost</b>: (To Reincarnate to R7) 1 Qad (1e45) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/10Reincarnations.png" alt="10 Reincarnations" align="middle"> 10 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 10 times</p>
                <p><b>Cost</b>: (To Reincarnate to R10) 1 Spd (1e54) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/12Reincarnations.png" alt="12 Reincarnations" align="middle"> 12 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 12 times</p>
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/15Reincarnations.png" alt="15 Reincarnations" align="middle"> 15 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 15 times</p>
                <p><b>Cost</b>: (To Reincarnate to R15) 1 Dvg (1e69) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/20Reincarnations.png" alt="20 Reincarnations" align="middle"> 20 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 20 times</p>
                <p><b>Cost</b>: (To Reincarnate to R20) 1 Spvg (1e84) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/25Reincarnations.png" alt="25 Reincarnations" align="middle"> 25 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 25 times</p>
                <p><b>Cost</b>: (To Reincarnate to R25) 1 Dtg (1e99) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/30Reincarnations.png" alt="30 Reincarnations" align="middle"> 30 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 30 times</p>
                <p><b>Cost</b>: (To Reincarnate to R30) 1 Sptg (1e114) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/35Reincarnations.png" alt="35 Reincarnations" align="middle"> 35 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 35 times</p>
                <p><b>Cost</b>: (To Reincarnate to R35) 1 Dqag (1e129) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/40Reincarnations.png" alt="40 Reincarnations" align="middle"> 40 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 40 times</p>
                <p><b>Cost</b>: (To Reincarnate to R40) 1 Spqag (1e144) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/45Reincarnations.png" alt="45 Reincarnations" align="middle"> 45 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 45 times</p>
                <p><b>Cost</b>: (To Reincarnate to R45) 17.78 Oc Sp (1.778e28) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/50Reincarnations.png" alt="50 Reincarnations" align="middle"> 50 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 50 times</p>
                <p><b>Cost</b>: (To Reincarnate to R50) 177.8 Ud (1.778e38) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/60Reincarnations.png" alt="60 Reincarnations" align="middle"> 60 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 60 times</p>
                <p><b>Cost</b>: (To Reincarnate to R60) 17.78 Ocd (1.778e58) Gems
                <p>------------------------------</p>
                <p><b><img src="http://musicfamily.org/realm/Factions/picks/70Reincarnations.png" alt="70 Reincarnations" align="middle"> 70 Reincarnations</b></p>
                <p><b>Requirement</b>: Reincarnate 70 times</p>
                <p><b>Cost</b>: (To Reincarnate to R70) 17.78 Qivg (1.778e70) Gems</p>
            </div>
        </div>
    </div>

    <p>----------------------------------</p>
    <p><b>Tips</b></p>
    <p>There are many paths you can take to progress, there is no "one correct path". Each player finds their own path, adapted to their play-style and personal progress bonuses. Trying to find your own path is the best way to learn and understand each faction.</p>
    <p>The below steps are an example guideline but I would encourage players to step out of the guide, try all factions and note down which factions work best at which gem amounts to create your personal path.
    <p>In general when things get slow, optimize your runs by doing build-up runs using special builds. (eg: Run "Foreplay" or "Everything is Awesome" merc builds to optimize your click total or your Faceless Heritage.)
    <p><b>1-3 Reincarnations</b>:
    <p>0 Gems: Try Elf for at least the first run, for their high Faction Coin Find chance.
    <p>Around 1 T (1E12) gems, try Titan, Druid.
    <p><b>In R0</b>: you'll want fairy to unlock Drow/Dwarf (if you want it as early as possible) and then dwarf/elf for max profit
    <p>Around 100 Qi (1E20) gems, try Fairy into Dwarf (Dwairies). Angel / Dwarf (Dwangels) also work well for those wishing to cast lots of spells fast and stack bonuses from them.
    <p><b>3-12 Reincarnations</b>:
    <p>Play as the above, Once you have reached No (1E32) gems, you are ready to try the Mercenary Faction. See Merc Builds and Magmardooom's guide.
    <p><b>13-16 Reincarnations</b>:
    <p>Vg -Dvg Many Mercenary builds will start slowing down. Do not panic.
    <p>Lightning Forge will still be one of the fastest choice, but requires constant activity. Elven Farms and Diamond Forge will get you to Dvg a bit slower, but Diamond Forge can be almost entirely idled, which makes them better choices for a lot of players.
    <p>Around Dvg - Tvg, things become really very slow. If you aren't fed up. Lightning Forge still has potential for active players. Hopefully, this is the last stretch to research! (min 1 Tvg required).

<?php include "../scripts/footer.html"; ?>
