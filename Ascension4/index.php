<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6>Ascension 4</h6>
	<p>Added with v4.0</p>
	<p>At R219 the Reincarnation button will change to Ascension.</p>
	<p><b>Gems Requirement</b>: 1e18 * 100 ^ (R - 220).</p>
	<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e26, where n is gems.</p>
	<p>Currency will change to Sapphire Coins, and all upgrades costing Amethyst Coins will be free to purchase.</p>
	<p>All Ascension Penalties from Faction Upgrades and Advanced Heritages are completely removed in A4. Other production upgrades receive the Ascension penalty as usual. Building Cost multiplier is the same as in A0.</p>
	<p><b><font color="darkred">When Ascending to Ascension 4, all Lineages will be set back to level 75 if higher. All Researches from A0 and A1 (Research number less than 5000) as well as normal Heritages will become inaccessible. This includes the Mercenary Badge.</font></b></p>
	<p><b><font color="darkred">You will once more not be able to affiliate with Mercenary or Prestige Factions and Elite Factions. Make sure to have all trophies regarding them before ascending.</font></b></p>
	</br>
	<p>Faction Coin Costs of Faction Treaties are increased in A4.</p>
	<table class="numtable" style="color: black;">
		<tr>
			<th>Faction Upgrade</th>
			<th>Base Faction (R220+)</th>
			<th>Prestige Faction (R240+)</th>
		</tr>
		<tr>
			<td>Trade Treaties</td>
			<td>1 Qa (1e15)</td>
			<td>1 Oc (1e27)</td>
		</tr>
		<tr>
			<td>Friendship Pact</td>
			<td>1 Sx (1e21)</td>
			<td>1 Dc (1e33)</td>
		</tr>
		<tr>
			<td>Alliance</td>
			<td>1 Oc (1e27)</td>
			<td>1 Dd (1e39)</td>
		</tr>
		<tr>
			<td>Union</td>
			<td>1 Dc (1e33)</td>
			<td>1 Qad (1e45)</td>
		</tr>
	</table>
	<p>Faction Upgrades cost Sapphire Coins in Ascension 4.</p>
		<p><b>Cost Formula for Base Faction</b>: (1e51 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>
		<p><b>Cost Formula for Prestige Faction</b>: (1e114 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>
		<table class="numtable" style="color: black;">
			<tr>
				<th>Faction Upgrade</th>
				<th>Base Faction</th>
				<th>Prestige Faction</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1 Sxd (1e51)</td>
				<td>1 Sptg (1e114)</td>
			</tr>
			<tr>
				<td>2</td>
				<td>1 Spd (1e54)</td>
				<td>1 Octg (1e117)</td>
			</tr>
			<tr>
				<td>3</td>
				<td>1 Ocd (1e57)</td>
				<td>1 Notg (1e120)</td>
			</tr>
			<tr>
				<td>4</td>
				<td>1 Vg (1e63)</td>
				<td>1 Uqag (1e126)</td>
			</tr>
			<tr>
				<td>5</td>
				<td>1 Uvg (1e66)</td>
				<td>1 Dqag (1e129)</td>
			</tr>
			<tr>
				<td>6</td>
				<td>1 Dvg (1e69)</td>
				<td>1 Tqag (1e132)</td>
			</tr>
			<tr>
				<td>7</td>
				<td>1 Qivg (1e78)</td>
				<td>1 Sxqag (1e141)</td>
			</tr>
			<tr>
				<td>8</td>
				<td>1 Sxvg (1e81)</td>
				<td>1 Spqag (1e144)</td>
			</tr>
			<tr>
				<td>9</td>
				<td>1 Spvg (1e84)</td>
				<td>1 Ocqag (1e147)</td>
			</tr>
			<tr>
				<td>10</td>
				<td>1 Utg (1e96)</td>
				<td>1 DQig (1e159)</td>
			</tr>
			<tr>
				<td>11</td>
				<td>1 Dtg (1e99)</td>
				<td>1 TQig (1e162)</td>
			</tr>
			<tr>
				<td>12</td>
				<td>1 Ttg (1e102)</td>
				<td>1 QaQig (1e165)</td>
			</tr>		
		</table>
	<br/>	
	<hr>
	<p>Ascension 4 Research:</p>
	<p><b>All researches under 5000 points will be unavailable</b>.</p>
	<p><b>Research Budget</b>: Budget is further increased by 2,000 for every Treaty, Friendship Pact, Alliance and Union bought from the Base Faction.</p>	
	<p><b>Research Points</b>: Now capped at 14,000.</p>
	<p><b>Coin Cost</b>: (1.4 ^ (0.1 * RP - 7000))</p>	
	<p><b>Faction Coin Cost</b>: (10 * 1.15 ^ (0.03 * RP))</p>	
	<br/>	
	<hr>
	<p><b>New Upgrade: Legacy</b>.</p>
	<p><b>Effect</b>: Choose a Legacy that doesn't match your current faction. You can purchase more Legacies for a progressively increasing cost. This unlocks that set of faction upgrades for purchase for their normal coin cost.</p>
	<p>See the <a href="/realm/Legacies" research="Legacies"><b>Legacies</b></a> page for more details.</p>
<?php include "../scripts/footer.html"; ?>