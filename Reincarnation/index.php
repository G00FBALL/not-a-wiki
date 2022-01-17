<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="http://musicfamily.org/realm/Factions/picks/ReincarnationTopPage.png" alt="Spellcraft" align="middle"></h6>
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
	<p><b>Requirements</b></p>
	<p>Reincarnation can only be performed for the first time when the user reaches 1 Oc (1e27) Gems, and each subsequent reincarnation costs 1000 times more gems.</p>
	<p>Along the way, try to get all the Trophies and Artifacts you can get at each progress level.</p>
	<br/>
	<div id="ReiCosCal">
		<table style="width:98%">
			<tr>
				<th align="right" style="line-height: 1.6;">
					Complete List of benefits for Reincarnation: <input id="ReiCosRei" style="max-width: 15%; float:right;" type="number" min="0" max="279" value="0"><br/>
					<span id="R10"> Time this Reincarnation (hours): <input id="R10TimeTot" style="max-width: 15%; float:right;" type="number" min="0" max="876000" value="0"><br/></span>
					<span id="R20"> Buildings of a certain tier: <input id="R20SpecBui" style="max-width: 15%; float:right;" type="number" min="0" max="9999999" value="0"><br/></span>
					<span id="R60"> (Active) Druid Lineage Level: <input id="R60DDLin" style="max-width: 15%; float:right;" type="number" min="0" max="150" value="0"><br/></span>
					<span id="R63"> Prismatic Breath <input id="R63PB" style="width: unset" type="checkbox"></span>
					<span id="R139"> Undead Perk 5 <input id="R139UDP5" style="width: unset" type="checkbox"></span>
					<span id="R153"> Omniscience <input id="R153Omni" style="width: unset" type="checkbox"></span>
					<span id="R225"> D11375 <input id="R225D11375" style="width: unset" type="checkbox"><br/></span>
					<span id="R232"> S12250 - Undead time this Reincarnation (hours): <input id="R232S12250" style="max-width: 15%; float:right;" type="number" min="0" max="876000" value="0"></span>
				</th>
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
					<p id="R58FCChaMul"></p>
					<p id="R85AssPerR"></p>
					<p id="R90AddResSlo"></p>
					<p id="R100ManRegPerR"></p>
					<p id="R108ProdUBTimeDiff"></p>
					<p id="R115FCChaMul"></p>
					<p id="R120NEMPro"></p>
					<p id="R150CTABoost"></p>
					<p id="R170ResBudget"></p>
					<p id="R190NEMPro"></p>
					<p id="R210NEMPro"></p>
					<p id="R230NEMPro"></p>
					<p id="RNex"></p>
					<p id="RUnl"></p>
				</td>
			</tr>
		</table>
		<script>
			function Runl(unl) {
				$('#RUnl').html('The next Reincarnation unlocks <b>' + unl + '</b>.');
				$('#RUnl').css('display', 'block');
			}
			function GetANerfValue(bonus, reqR, asc) {
				// R40 and R100 have A-nerfs, so if reqR is >= 40, don't A-nerf twice, but only once
				if (reqR >= 40)  {asc -= 1;}
				if (reqR >= 100) {asc -= 1;}
				if (reqR >= 160) {asc -= 1;}
				if (reqR >= 220) {asc -= 1;}
				return (Math.pow(1 + bonus / 100, Math.pow(0.1, asc)) - 1) * 100;
			}
			// Array of "tuples" containing:
			//  * Req R
			//  * element to put data in
			//  * whether it's A-nerfed
			//  * decimals of precision (for bonus text)
			//  * function to calculate bonus (rNum -> bonusValue)
			//  * function to create bonus text (rNum -> bonus (already toFixed) -> string)
			var RBenefits = [
				[ 1, 999, '#R1AllBuiPro', true, 0
				, function(rei) {return 50 * rei;}
				, function(rei, bonus) {return 'Production of all buildings is increased by ' + bonus + '%.';}
				],
				[ 1, 999, '#R1OffPro', true, 0
				, function(rei) {return 500 * rei;}
				, function(rei, bonus) {return 'Offline production is increased by ' + bonus + '%.';}
				],
				[ 1, 999, '#R1FCChaMul', false, 0
				, function(rei) {return 10 * rei;}
				, function(rei, bonus) {return 'Faction coin chance is increased by +' + bonus + '%.';}
				],
				[ 1, 999, '#R1MpS', false, 0
				, function(rei) {return 2 * rei;}
				, function(rei, bonus) {return 'Mana regeneration is increased by +' + bonus + '.';}
				],
				[ 2, 999, '#R2GemPro', false, 1
				, function(rei) {return 0.2 * rei;}
				, function(rei, bonus) {return 'Gem production is increased by +' + bonus + '%.';}
				],
				[ 5, 999, '#R5Ass', true, 0
				, function(rei) {return 2 * rei;}
				, function(rei, bonus) {return 'Add ' + Math.floor(0.5 * rei) + ' assistants and their production is increased by ' + bonus + '%.';}
				],
				[ 10, 999, '#R10AllBuiPro', true, 0
				, function(rei) {return Math.pow(rei, 1.75) * Math.pow(parseInt($('#R10TimeTot').val()), 0.65);}
				, function(rei, bonus) {return 'Production of all buildings is increased by ' + bonus + '%.';}
				],
				[ 12, 999, '#R12MaxMan', false, 0
				, function(rei) {return 35 * rei;}
				, function(rei, bonus) {return 'Maximum mana is increased by +' + bonus + '.';}
				],
				[ 20, 999, '#R20ProEacBui', true, 0
				, function(rei) {return 0.01 * rei * parseInt($('#R20SpecBui').val());}
				, function(rei, bonus) {return 'Given buildings\' production is increased by ' + bonus + '%.';}
				],
				[ 25, 999, '#R25RE', false, 1
				, function(rei) {return 0.5 * rei;}
				, function(rei, bonus) {return 'Royal Exchange bonus is increased by +' + bonus + '%.';}
				],
				[ 41, 999, '#R41UniBuiPro', true, 0
				, function(rei) {return 1200 * Math.pow(rei, 1.15);}
				, function(rei, bonus) {return 'Unique Buildings\' production is increased by ' + bonus + '%.';}
				],
				[ 45, 999, '#R45MaxMan', false, 0
				, function(rei) {return 70 * Math.pow(rei, 1.25);}
				, function(rei, bonus) {return 'Maximum mana is increased by +' + bonus + '. Total increase is +' + ((70 * Math.pow(rei, 1.25)) + 35 * rei).toFixed(0) + '.';}
				],
				[ 50, 999, '#R50FCChaAdd', false, 0
				, function(rei) {return 2.5 * Math.pow(rei, 1.1);}
				, function(rei, bonus) {return 'Faction coin chance is multiplicatively increased by ' + bonus + '%.';}
				],
				[ 58, 999, '#R58FCChaMul', false, 0
				, function(rei) {return Math.floor(1.2 * Math.pow(rei, 1.05));}
				, function(rei, bonus) {return 'Faction coin chance is increased ' + bonus + ' times if they match your Faction or Bloodline.';}
				],
				[ 85, 999, '#R85AssPerR', false, 0
				, function(rei) {return rei;}
				, function(rei, bonus) {return 'Add ' + Math.floor(4 * bonus) + ' additional Assistants. Total bonus is '+ Math.floor(5 * bonus) + ' additional assistants.';}
				],
				[ 90, 100, '#R90AddResSlo', false, 0
				, function(rei) {return 0;}
				, function(rei, bonus) {return 'You gain 1 additional Research slot for each branch.';}
				],
				[ 100, 999, '#R100ManRegPerR', false, 0
				, function(rei) {return rei;}
				, function(rei, bonus) {return 'Multiplicatively increase Mana Regeneration by ' + bonus + '%.';}
				],
				[ 108, 999, '#R108ProdUBTimeDiff', false, 0
				, function(rei) {return rei;}
				, function(rei, bonus) {return 'Increase the production of Unique Buildings based on the difference of time spent as their respective faction against your most most used faction this Reincarnation.';}
				],
				[ 115, 999, '#R115FCChaMul', false, 0
				, function(rei) {return Math.floor(1.2 * Math.pow(rei, 1.05));}
				, function(rei, bonus) {return 'Faction coin chance is increased ' + bonus + ' times if they match your Faction, Bloodline or Artifact Set.';}
				],
				[ 120, 999, '#R120NEMPro', true, 0
				, function(rei) {return 150 * rei;}
				, function(rei, bonus) {return 'Increase the production of all buildings based on Reincarnations made by ' + bonus + '%.';}
				],
				[ 150, 999, '#R150CTABoost', false, 0
				, function(rei) {return rei;}
				, function(rei, bonus) {return 'Unique Buildings count ' + bonus + ' times more for Call to Arms purposes.';}
				],
				[ 170, 999, '#R170ResBudget', false, 0
				, function(rei) {return rei;}
				, function(rei, bonus) {return 'Increases research budget by 3,000 in each branch.';}
				],
				[ 190, 999, '#R190NEMPro', true, 1
				, function(rei) {return 150 * rei;}
				, function(rei, bonus) {return 'Increase the production of all buildings based on Reincarnations made by ' + bonus + '%.';}
				],				
				[ 210, 999, '#R210NEMPro', true, 1
				, function(rei) {return 300 * rei;}
				, function(rei, bonus) {return 'Increase the production of all buildings based on Reincarnations made by ' + bonus + '%.';}
				],
				[ 230, 999, '#R230NEMPro', true, 1
				, function(rei) {return 10 * rei;}
				, function(rei, bonus) {return 'While playing as your least used alignment in this Reincarnation, increase the production of all buildings based on Reincarnations made by ' + bonus + '%.';}
				],				
			];
			function CalRBen() {
				var rei = parseInt($('#ReiCosRei').val());
				//get Ascension# for Prodnerf
				if (rei > 39){
					var asc = 1;
				}
				if (rei > 99){
					var asc = 2;
				}
				if (rei > 159){
					var asc = 3;
				}
				if (rei > 219){
					var asc = 4;
				}
				// Boosted R num - Prismatic Breath (and stuff?)
				var reiEff = rei;
				if (parseInt($('#R60DDLin').val()) > 0) {
					reiEff += parseInt($('#R60DDLin').val()) * 2;
				}
				if ($('#R63PB').is(':checked')) {
					reiEff *= 1.5;
				}
				if ($('#R139UDP5').is(':checked')) {
					reiEff *= 2;
				}
				if ($('#R153Omni').is(':checked')) {
					reiEff *= 1.15;
				}
				if ($('#R225D11375').is(':checked')) {
					reiEff *= 2;
				}
				if (parseInt($('#R232S12250').val()) > 0 ) {
					reiEff *= 1 + 0.005 * Math.pow(parseInt($('#R232S12250').val()) * 3600,0.5);
				}
				// Reincarnation Perks
				var arrLen = RBenefits.length;
				for (var i = 0; i < arrLen; ++i) {
					var benefit = RBenefits[i];

					var reqR         = benefit[0];
					var maxR         = benefit[1]
					var htmlElem     = benefit[2];
					var doANerf      = benefit[3];
					var decimalCount = benefit[4];
					var bonusFun     = benefit[5];
					var textFun      = benefit[6];

					if (rei >= reqR && rei < maxR) {
						var bonus = bonusFun(reiEff);
						if (rei >= 40 && doANerf === true) {
							bonus = GetANerfValue(bonus, reqR, asc);
						}
						$(htmlElem).text(textFun(reiEff, bonus.toFixed(decimalCount)));
						$(htmlElem).css('display', 'block');
					} else {
						$(htmlElem).css('display', 'none');
					}
				}
				// Hide/show inputs based on R
				if (rei >= 10) {
					$('#R10').css('display', 'block');
				} else {
					$('#R10').css('display', 'none');
				}
				if (rei >= 20) {
					$('#R20').css('display', 'block');
				} else {
					$('#R20').css('display', 'none');
				}
				if (rei >= 60) {
					$('#R60').css('display', 'block');
				} else {
					$('#R60').css('display', 'none');
				}
				if (rei >= 63) {
					$('#R63').css('display', 'inline');
				} else {
					$('#R63').css('display', 'none');
				}
				if (rei >= 139) {
					$('#R139').css('display', 'inline');
				} else {
					$('#R139').css('display', 'none');
				}
				if (rei >= 153) {
					$('#R153').css('display', 'inline');
				} else {
					$('#R153').css('display', 'none');
				}
				if (rei >= 225) {
					$('#R225').css('display', 'inline');
				} else {
					$('#R225').css('display', 'none');
				}
				if (rei >= 232) {
					$('#R232').css('display', 'block');
				} else {
					$('#R232').css('display', 'none');
				}
				//Gem Costs for next R
				var nextR = rei + 1;
				if (rei < 40) {
					$('#RNex').html('To Reincarnate to R' + nextR.toFixed(0) + ', you need <b>1e' + (24 + nextR * 3).toFixed(0) + '</b> gems.');
				} else if (rei < 100){
					$('#RNex').html('To Reincarnate to R' + nextR.toFixed(0) + ', you need <b>1.778e' + (nextR * 2 - 62).toFixed(0) + '</b> gems.');
				} else if (rei < 160){
					$('#RNex').html('To Reincarnate to R' + nextR.toFixed(0) + ', you need <b>' + (Math.pow(1e27,0.75) * Math.pow((nextR-1) , (nextR - 101))).toExponential(4) + '</b> gems.');
				} else if (rei < 220){
					$('#RNex').html('To Reincarnate to R' + nextR.toFixed(0) + ', you need <b>1e' + (25 + (nextR - 160) * 2) + '</b> gems.');
				} else {
					$('#RNex').html('To Reincarnate to R' + nextR.toFixed(0) + ', you need <b>1e' + (16 + (nextR - 220) * 2).toFixed(0) + '</b> gems.');
				}
				//Unlocks next R
				switch (rei + 1) {
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
						Runl('Prestige Research');
						break;
					case 40:
						Runl('Ascension 1');
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
						Runl('Lineages');
						break;
					case 75:
						Runl('Mercenary Research');
						break;
					case 100:
						Runl('Ascension 2 and Second Alignments');
						break;
					case 111:
						Runl('Union Upgrades')
						break;
					case 116:
						Runl('Prestige Factions')
						break;
					case 120:
						Runl('A2 Spells Tier 2')
						break;
					case 125:
						Runl('Archon, Djinn, and Makers Factions');
						break;
					case 130:
						Runl('Archon, Djinn, and Makers Bloodlines, Lineages and Unions');
						break;
					case 135:
						Runl('Archon, Djinn and Makers Challenges');
						break;
					case 160:
						Runl('Ascension 3');
						break;
					case 165:
						Runl('Mercenary Building Contract');
						break;
					case 170:
						Runl('Mercenary Union Contract');
						break;
					case 180:
						Runl('Forbidden Research');
						break;	
					case 190:
						Runl('Mercenary Challenges');
						break;	
					case 220:
						Runl('Ascension 4');
						break;
					default:
						$('#RUnl').css('display', 'none');
						break;
				}
			}
			$('#ReiCosRei, #R10TimeTot, #R20SpecBui, #R60DDLin, #R63PB, #R139UDP5, #R153Omni, #R225D11375, #R232S12250').on('input', CalRBen);
			CalRBen();
		</script>
	</div>
	<br/>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Reincarnation Perks</a></b></p>
			<div class="autohide">
				<p><b>x in formulas is the amount of times you reincarnated.</b></p>
				<p><b>1st Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Production by (50 * x)%</p>
				<p><b>Effect</b>: Increase Offline production by (500 * x)%.</p>
				<p><b>Effect</b>: Increase FC chance by +(10 * x)%.</p>
				<p><b>Effect</b>: Increase Mana Regeneration by +(2 * x).</p>
				<br/>
				<p><b>2nd Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Gem production bonus by +(0.2 * x)%.</p>
				<br/>
				<p><b>5th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Assistants by +x and assistant production is increased by (2 * x)%.</p>
				<br/>
				<p><b>10th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Production of all buildings by (x ^ 1.75 * (t / 3600) ^ 0.65)%, where t is time spent in this Reincarnation.</p>
				<br/>
				<p><b>12th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Maximum mana by +(35 * x).</p>
				<br/>
				<p><b>20th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Production of each building by (0.01 * x * b)%, where b is amount of specific building. (e.g. R20 with 2,000 Farms and 1,000 Blacksmiths is (0.01 * 20 * 2000)% = 400% bonus to Farms and (0.01 * 20 * 1000)% = 200% bonus to Blacksmiths)</p>
				<br/>
				<p><b>25th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Royal Exchange Bonus by +(0.5 * x)%.</p>
				<br/>
				<p><b>41st Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Production of Unique Buildings by (1200 * (x ^ 1.15))%.</p>
				<br/>
				<p><b>45th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Maximum Mana by +(70 * x ^ 1.25).</p>
				<br/>
				<p><b>50th Reincarnation and up</b></p>
				<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance by (2.5 * x ^ 1.1)%.</p>
				<br/>
				<p><b>58th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase FC chance multiplicatively by *(1.2 * x ^ 1.05) if they match your Faction or Bloodline.</p>
				<br/>
				<p><b>85th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase Assistants by +(4 * x).</p>
				<br/>
				<p><b>90th Reincarnation and up</b></p>
				<p><b>Effect</b>: You gain 1 additional Research slot for each branch.</p>
				<br/>
				<p><b>100th Reincarnation and up</b></p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by x%.</p>
				<br/>
				<p><b>108th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase the production of Unique Buildings based on the difference of time spent as their respective faction against your most used faction in this reincarnation.</p>
				<p><b>Formula</b>: (0.15 * (x - y) ^ 0.75)%, where x is highest faction time and y is faction time of the Unique Building affinity</p>
				<br/>
				<p><b>115th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase FC chance multiplicatively by *(1.2 * x ^ 1.05) if they match your Faction or Bloodline or Artifact set (Stacks multiplicatively with R58 power)</p>
				<br/>
				<p><b>120th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase the production of all buildings by (150 * x)%.</p>
				<br/>
				<p><b>150th Reincarnation and up</b></p>
				<p><b>Effect</b>: Unique Buildings count more for Call to Arms purposes by *(1 + x).</p>
				<br/>
				<p><b>170th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increases research budget by +3,000 in each branch.</p>
				<br/>
				<p><b>190th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase the production of all buildings by (150 * x)%.</p>
				<br/>
				<p><b>210th Reincarnation and up</b></p>
				<p><b>Effect</b>: Increase the production of all buildings by (300 * x)%.</p>
				<br/>
				<p><b>230th Reincarnation and up</b></p>
				<p><b>Effect</b>: While playing as your least used alignment in this Reincarnation, increase the production of all buildings by (10 * x)%.</p>
				<br/>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Reincarnation Unlocks</a></b></p>
			<div class="autohide">
				<p><b>R0</b>: Neutral Factions</p>
				<p><b>R0</b>: Prestige Factions</p>
				<p><b>R2-R18</b>: Vanilla challenges</p>
				<p><b>R3</b>: Mercenaries</p>
				<p><b>R4-R25</b>: Neutral Challenges</p>
				<p><b>R6-R33</b>: Prestige Challenges</p>
				<p><b>R7</b>: Bloodlines</p>
				<p><b>R14</b>: New Spell (Spiritual Surge)</p>
				<p><b>R16</b>: Vanilla Research</p>
				<p><b>R23</b>: Neutral Research</p>
				<p><b>R29</b>: Prestige Research</p>
				<p><b>R40</b>: Ascension 1</p>
				<p><b>R42</b>: Tiered Autocasting</p>
				<p><b>R46</b>: Neutral Prestige (Dragons)</p>
				<p><b>R47</b>: Neutral Prestige Research</p>
				<p><b>R48-R65</b>: Dragon Challenges</p>
				<p><b>R60</b>: Lineages and Perks</p>
				<p><b>R75</b>: Mercenary Research</p>
				<p><b>R100</b>: Ascension 2, New Alignments</p>
				<p><b>R111</b>: Union Effects</p>
				<p><b>R116</b>: Prestige Factions Reintroduced</p>
				<p><b>R120</b>: Second Alignment Spells Tier 2</p>
				<p><b>R125</b>: Elite Factions (Archon, Djinn, and Makers)</p>
				<p><b>R130</b>: Elite Unions and Lineages</p>
				<p><b>R135-R153</b>: Elite Challenges</p>
				<p><b>R160</b>: Ascension 3</p>
				<p><b>R160-R170</b>: Mercenary Reintroduced</p>
				<p><b>R170</b>: Research budget increase</p>
				<p><b>R180</b>: Forbidden Research, Research budget increase</p>
				<p><b>R190-R206</b>: Mercenary Challenges</p>
				<p><b>R220</b>: Ascension 4</p>
				<p><b>R235</b>: Prestige Factions Reintroduced</p>
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
				<p><b>At second Ascension (R100), Access to prestige factions and Mercenaries is lost !</b></p>
				<hr>
				<p><b>Kept or Gained at Reincarnation</b></p>
				<p>All Trophies (and their associated unlocks)</p>
				<p>Heritages (technically from trophies)</p>
				<p>Excavation unlocks, Max Count</p>
				<p>Rubies & Ruby Powers</p>
				<p>Completed Challenges</p>
				<p>Total times allied and spent in every faction. Applied only to Bloodlines and Faceless.</p>
				<p>Research quests</p>
				<p>Researches completed</p>
				<p>Completed Faction quests</p>
				<p>Gained research points if above R16. # gained is equal to the new R#, At R100 research points are capped at 5000.</p>
				<p>Reincarnation Power (Upgrade)</p>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Reincarnations Trophies</a></b></p>
			<div class="autohide">
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/1Reincarnation.png" alt="1 Reincarnation" align="middle"> 1 Reincarnation</b></p>
				<p><b>Requirement</b>: Reincarnate 1 time</p>
				<p><b>Cost</b>: (To Reincarnate to R1) 1 Oc (1e27) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/3Reincarnations.png" alt="3 Reincarnations" align="middle"> 3 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 3 times</p>
				<p><b>Cost</b>: (To Reincarnate to R3) 1 Dc (1e33) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/7Reincarnations.png" alt="7 Reincarnations" align="middle"> 5 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 5 times</p>
				<p><b>Cost</b>: (To Reincarnate to R5) 1 Dd (1e39) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/7Reincarnations.png" alt="7 Reincarnations" align="middle"> 7 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 7 times</p>
				<p><b>Cost</b>: (To Reincarnate to R7) 1 Qad (1e45) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/10Reincarnations.png" alt="10 Reincarnations" align="middle"> 10 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 10 times</p>
				<p><b>Cost</b>: (To Reincarnate to R10) 1 Spd (1e54) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/12Reincarnations.png" alt="12 Reincarnations" align="middle"> 12 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 12 times</p>
				<p><b>Cost</b>: (To Reincarnate to R12) 1 Nod (1e60) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/15Reincarnations.png" alt="15 Reincarnations" align="middle"> 15 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 15 times</p>
				<p><b>Cost</b>: (To Reincarnate to R15) 1 Dvg (1e69) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/20Reincarnations.png" alt="20 Reincarnations" align="middle"> 20 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 20 times</p>
				<p><b>Cost</b>: (To Reincarnate to R20) 1 Spvg (1e84) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/25Reincarnations.png" alt="25 Reincarnations" align="middle"> 25 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 25 times</p>
				<p><b>Cost</b>: (To Reincarnate to R25) 1 Dtg (1e99) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/30Reincarnations.png" alt="30 Reincarnations" align="middle"> 30 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 30 times</p>
				<p><b>Cost</b>: (To Reincarnate to R30) 1 Sptg (1e114) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/35Reincarnations.png" alt="35 Reincarnations" align="middle"> 35 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 35 times</p>
				<p><b>Cost</b>: (To Reincarnate to R35) 1 Dqag (1e129) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/40Reincarnations.png" alt="40 Reincarnations" align="middle"> 40 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 40 times</p>
				<p><b>Cost</b>: (To Reincarnate to R40) 1 Spqag (1e144) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/45Reincarnations.png" alt="45 Reincarnations" align="middle"> 45 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 45 times</p>
				<p><b>Cost</b>: (To Reincarnate to R45) 17.78 Oc Sp (1.778e28) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/50Reincarnations.png" alt="50 Reincarnations" align="middle"> 50 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 50 times</p>
				<p><b>Cost</b>: (To Reincarnate to R50) 177.8 Ud (1.778e38) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/60Reincarnations.png" alt="60 Reincarnations" align="middle"> 60 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 60 times</p>
				<p><b>Cost</b>: (To Reincarnate to R60) 17.78 Ocd (1.778e58) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/70Reincarnations.png" alt="70 Reincarnations" align="middle"> 70 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 70 times</p>
				<p><b>Cost</b>: (To Reincarnate to R70) 17.78 Qivg (1.778e70) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/85Reincarnations.png" alt="85 Reincarnations" align="middle"> 85 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 85 times</p>
				<p><b>Cost</b>: (To Reincarnate to R85) 1.778 Qitg (1.778e108) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/100Reincarnations.png" alt="100 Reincarnations" align="middle"> 100 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 100 times</p>
				<p><b>Cost</b>: (To Reincarnate to R100) 1.778 Qiqag (1.778e138) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/125Reincarnations.png" alt="125 Reincarnations" align="middle"> 125 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 125 times</p>
				<p><b>Cost</b>: (To Reincarnate to R125) 31.05 Dvg (3.105e70) Gems</p>
				<hr>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/150Reincarnations.png" alt="150 Reincarnations" align="middle"> 150 Reincarnations</b></p>
				<p><b>Requirement</b>: Reincarnate 150 times</p>
				<p><b>Cost</b>: (To Reincarnate to R150) 1.134 Dqag (1.134e129) Gems</p>
			</div>
		</div>
	</div>
<?php include "../scripts/footer.html"; ?>
