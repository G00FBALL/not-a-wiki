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
	<p><b>From R42+, Spell Tiers become available</b> and based on the number of tiers for a single spell unlocked allows to cast that spell up to that times simultaneously, increasing the overall spell bonus multiplicatively.</p>
	<p>The generalized formula for the final spell bonus is (B ^ T), where B is the base spell production (<b>not</b> as a percentage bonus but as a multiplier) and T is the tier of the spell. The exceptions to this are Gem Grinder, which increases its production by a linear amount, and Dragon's Breath, which simply adds one new type of Dragon Breath to the current breaths in effect. Other peripheral effects, such as the tripling of assistants granted from Fairy Chanting, are also not impacted by spell tiers.</p>
	<p>Each tier also doubles the Mana cost of the spell compared to the previous one starting at the base cost of the spell.</p>
	<p><b>Mana cost for the n-th tier</b>: (c * (2 ^ (T - 1)), where c is the base mana cost and T is the n-th tier of the spell.</p>
	<p><b>From R100+</b>, a tier 7 spell upgrade becomes available to unlock.</p>
	<p><b>Note for Ascension 1</b>: Tier 1-6 production bonus are considered an Ascension 0 upgrade, so each tier defacto adds after ascension penalty +0.1 to the exponent, giving a final production bonus for T6 of (x ^ (0.1 * 6) = x ^ 0.6), where x is the original Ascension 0 production multiplier.</p>
	<p><b>Note for Ascension 2</b>: Tier 7 is considered an Ascension 2 upgrade but with a weaker effect, it adds + 0.2 per tier, making a T7 spell in Ascension 2: ((x ^ 0.6) ^ 0.1 * x ^ 0.2 = x ^ 0.26), where x is the original Ascension 0 production multiplier.</p>
	<p><b>Note for subsequent Ascensions</b>: With no additional tiers the overall bonus is (x ^ 0.026) in Ascension 3 and (x ^ 0.0026) in Ascension 4.</p>
	<br/>
	<hr>
	<p><b>Spell Tier Upgrades and Autocasting</b>:</p>
	<p>Require the <img src="http://musicfamily.org/realm/Factions/picks/TieredAutocastingTrophy.png" align="middle"><b> Tiered Autocasting</b> (R40+, 200 M Mana Produced this Reincarnation) trophy.</p>
	<p>Tiered Autocasting will automatically set the autocasted spell tier at the highest you have bought, but you can change it to a lower tier if you wish.</p>
	<p>The Spell Tier upgrades need to be unlocked once (see chapter below), but they need to be purchased in every abdication and cost Diamond Coins (free in A2+) and Faction Coins.</p>
	<p><b>Additional Effect</b>: The spell tier upgrades also have an additional effect themselves, apart from allowing an extra cast spell. Each tier upgrades increases offline production based on Mana statistics. (Not Tax Collection)</p>
	<p><b>Formula</b>: ((m + r) ^ (1 + 0.05 * T))%, where m is Maximum mana, r is Mana Regeneration and T is the specific tier.</p>
	<p><b>Note</b>: An individual bonus for each tier upgrade (beginning from tier 2 up to tier 6 (or 7 in A2+)), ingame tooltip shows the combined bonus.</p>
	<p><b>Note</b>: Tier 2-6 are considered an Ascension 0 upgrade and Tier 7 is considered an Ascension 1 upgrade for Ascension penalty purposes.</b>
	<br/>
	<hr>
	<p><b>Spell Tier Unlocks</b>
	<p><b>Unlock Requirement</b>: Depends on the respective spell's activity time in this Reincarnation, and is reduced by the number of times you have reincarnated as well as the amount of spell tiers you have already unlocked of any spell (not just the spells available).</p>
	<p><b>Formula</b>: (57600 * (0.4 + 0.1 * T) * ((T ^ 2 + 1) / (0.1 * U + 1)) * (0.97 ^ (R - 35))) Where T is Tier, U is number of unlocked tier upgrades in all spells (so tiers above tier 1), R is is the number of times you have reincarnated.</p>
	<p>Because of above factors, if you attempt to unlock multiple spells at once, the unlock time of tiers will be reduce during the unlock process. For this reason it is difficult to show how long your current tiering target will take.</p>
	<p>The chart below will only show how long it takes to unlock a tier with no other spell tiering in the meantime.</p>
	<p><b>Please use <a target="_blank" href="https://shadowgull.github.io/dox4242.github.io/misc/tiers.html">the following tool</a> for a full tiering timeline.</b></p>
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
				<th><a target="_blank" style="font-size: 30px;color: red;" href="https://shadowgull.github.io/dox4242.github.io/misc/tiers.html">Click here to see your unlocked tiers</a></th>
			</tr>
			</thead>
		</table>
		<table>
			<thead>
			<tr>
				<th>Input the Tier and the Reincarnation you want to unlock it at and the amount of unlocked tiers (tiers gotten above tier 1 in any spell) then click Show</th>
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
<?php include "../scripts/footer.html"; ?>