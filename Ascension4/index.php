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
		</br>
		<p>Currency will change to Sapphire Coins, and all upgrades costing Amethyst Coins will be free to purchase.</p>
		<p>All Ascension Penalties from Faction Upgrades and Advanced Heritages are completely removed in A4. Other production upgrades receive the Ascension penalty as usual. Building Cost multiplier is the same as in A0.</p>
		<p><b><font color="red">When Ascending to Ascension 4, all Lineages will be set back to level 75 if higher.<font></b></p>
		</br>
		<p>You will lose access to Mercenaries, Prestige and Elite Factions.</p>
		<p><b><font color="red">Make sure to have all trophies regarding them before ascending.<font></b></p>
		</br>
		<p>All Researches from A0 and A1 (<5000) as well as normal Heritages will become inaccessible. This includes the Mercenary Badge.</p>
		<p>Ascension 4 will give you access to Legacies.</p>
		</br>
		<hr>
		<p>Faction Treaties Faction Coin Costs are increased in A4.</p>
		<p><b>Trade Treaties</b>: 1 Qa (1e15)</p>
		<p><b>Friendship Pact</b>: 1 Sx (1e21)</p>
		<p><b>Alliance</b>: 1 Oc (1e27)</p>
		<p><b>Union</b>: 1 Dc (1e33)</p>
		</br>
		<p>Faction Upgrades cost Sapphire Coins in A4.</p>
			<p><b>Cost Formula</b>: (1e51 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>	
			<table class="numtable" style="color: black;">
				<tr>
					<th>Faction Upgrade</th>
					<th>Coin Cost</th>
				</tr>
				<tr>
					<td>1</td>
					<td>1e51</td>
				</tr>
				<tr>
					<td>2</td>
					<td>1e54</td>
				</tr>
				<tr>
					<td>3</td>
					<td>1e57</td>
				</tr>
				<tr>
					<td>4</td>
					<td>1e63</td>
				</tr>
				<tr>
					<td>5</td>
					<td>1e66</td>
				</tr>
				<tr>
					<td>6</td>
					<td>1e69</td>
				</tr>
				<tr>
					<td>7</td>
					<td>1e78</td>
				</tr>
				<tr>
					<td>8</td>
					<td>1e81</td>
				</tr>
				<tr>
					<td>9</td>
					<td>1e84</td>
				</tr>
				<tr>
					<td>10</td>
					<td>1e96</td>
				</tr>
				<tr>
					<td>11</td>
					<td>1e99</td>
				</tr>
				<tr>
					<td>12</td>
					<td>1e102</td>
				</tr>		
			</table>
		<br/>	
		<hr>
		<p>A4 Research:</p>
		<p><b>All researches under 5000 points will be unavailable</b>.</p>
		<p><b>Research Budget</b>: Budget is further increased by 2,000 for every Treaty, Friendship Pact, Alliance and Union bought.</p>	
		<p><b>Research Points</b>: Now capped at 12,000.</p>
			<p><b>Coin Cost</b>: (1.4 ^ (0.1 * RP - 7000))</p>	
			<p><b>Faction Coin Cost</b>: (10 * 1.15 ^ (0.03 * RP))</p>	
		<br/>	
		<hr>
		<p><b>New Upgrade: Legacy</b>.</p>
			<p><b>Effect</b>: Choose a Legacy that doesn't match your current faction. You can purchase more Legacies for a progressively increasing cost. This unlocks that set of faction upgrades for purchase for their normal coin cost.</p>
			<p>See the <a href="/realm/Legacies" research="Legacies"><b>Legacies</b></a> page for more details.</p>
		<?php include "../scripts/footer.html"; ?>
