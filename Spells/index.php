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
	<p>Spells are an active component of the game mechanics that boost production. They require mana to be cast and <b>only work while playing online</b>.</p>
	<p>Their duration, mana cost and effect bonus can be altered by getting specific Faction, Heritage, Challenge, or Research upgrades. Different aspects of the spells can also be used in other upgrades (while a spell is active, the number of spell casts, based on mana produced, etc.).</p>
	<p>The trick to use spells efficiently relies on finding the best setting: Which spell combination to cast, at what timing, with which automatic-casting tool, and where to set the contingency arrow. Like for upgrades, these choices can make a crucial difference for your game progress.</p>
	<p>In later stages of the game you unlock more spells and spells can also have additional tiers. More information on Spell Tiers can be found <a target="_blank" href="http://musicfamily.org/realm/SpellTiers/">here</a>.</p>
	<hr>
	<p><b>While offline</b>: Spells set on autocasting will gain "Active Time", but no spell will actually be cast. Instead, a generic non-specific spell will increase your "Spell Casts" entry in the stats.</p>
	<p><b>Offline Activity Time Gain Formula</b>:<br/>(Requires Masterful Autocast)</p>
	<p><b>(t * min(1, m * d / (n * c ^ 1.5)))</b>, where t is offline time, m is offline Mana Regeneration, d is spell duration, c is the spell's base mana cost (of tier 1), and n is number of spells set to autocast (not counting Tax Collection).</p>
	<br style="clear: both" />
	<a id="Spells"></a>
	<hr>
	<center>
		<table class="imgtable">
			<tr>
				<td>
					<center>Spells Menu</center>
					<center><img src="http://musicfamily.org/realm/Factions/picks/SpellsMap.png" usemap="#Spells-map"></center>
				</td>
			</tr>
		</table>
	</center>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Spell Trophies and Challenge Rewards</a></b></p>
			<div class="autohide">
				<a id="SpellTrophy+ChallengeRewards"></a>
				<center>
					<table class="imgtable">
						<tr>
							<td>
								<center>Spell Trophy Menu</center>
								<center><img src="http://musicfamily.org/realm/Factions/picks/SpellTrophyMap.png" usemap="#SpellTrophy-map"></center>
							</td>
							<td>
								<center>Challenge Reward Menu</center>
								<center><img src="http://musicfamily.org/realm/Factions/picks/ChallengeRewardMap.png" usemap="#ChallengeReward-map"></center>
							</td>
						</tr>
					</table>
				</center>
			</div>
		</div>
	</div>
	<map name="Spells-map">
		<area href="#GodsHand" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Godshand.png' alt='Good' align='middle'> God's Hand</b></p>
	<p><b>Spell Type</b>: (Good/Order) Angel Faction Spell</p>
	<p><b>Cost</b>: 900 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increase the production of all buildings based on your Mana Regeneration rate.</p>
	<p><b>Formula</b>: (120 * x)%, where x is your Mana Regeneration.</p>
		" coords="10,10,64,64" shape="rect">
		<area href="#FairyChanting" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FairyChanting.png' alt='Good' align='middle'> Fairy Chanting</b></p>
	<p><b>Spell Type</b>: (Good/Chaos) Fairy Faction Spell</p>
	<p><b>Cost</b>: 1,000 Mana - <b>Duration</b>: 10 seconds</p>
	<p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 50,000%.</p>
		" coords="70,10,124,64" shape="rect">
		<area href="#MoonBlessing" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/MoonBlessing.png' alt='Good' align='middle'> Moon Blessing</b></p>
	<p><b>Spell Type</b>: (Good/Balance) Elven Faction Spell</p>
	<p><b>Cost</b>: 700 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increases the production of all buildings based on on the amount of clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of clicks made in this Reincarnation.</p>
		" coords="130,10,184,64" shape="rect">
		<area href="#HolyLight" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HolyLight.png' alt='Good' align='middle'> Holy Light</b></p>
	<p><b>Spell Type</b>: Good Alignment Spell</p>
	<p><b>Cost</b>: 900 Mana - <b>Duration</b>: 10 seconds</p>
	<p><b>Effect</b>: Increase clicking reward by 1750%.</p>
		" coords="190,10,244,64" shape="rect">
		<area href="#DiamondPickaxe" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DiamondPickaxe.png' alt='Good' align='middle'> Diamond Pickaxe</b></p>
	<p><b>Spell Type</b>: (Good) Dwarven Faction Spell</p>
	<p><b>Cost</b>: 1,000 Mana - <b>Duration</b>: 12 seconds</p>
	<p><b>Effect</b>: Increase clicking reward based on amount of Excavation you made and increase your Faction Coin find chance by +200%.</p>
	<p><b>Formula</b>: (25 * x)%, where x is the amount of Excavations you made.
		" coords="250,10,304,64" shape="rect">
		<area href="#ShareBenefits" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ShareBenefits.png' alt='Good' align='middle'> Share Benefits</b></p>
	<p><b>Spell Type</b>: (Good) Mercenary Faction Spell (R75+)</p>
	<p><b>Cost</b>: 200 Mana - <b>Duration</b>: Fixed to 20 seconds</p>
	<p><b>Effect</b>: Alters Tax Collection with new name and effect (still counts as Tax Collection for all purposes).</p>
	<p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level.</p>
	<p><b>Effect</b>: Also produce Tax Collection casts per second based on your Maximum Mana.</p>
	<p><b>Formula (Production bonus)</b>: ((((1 + 0.01 * (120 + 1.25 * ln(1 + 90 + x) ^ 1.25)) ^ T) - 1) * 100)%, where x is Tax Collection worth in seconds and T the Share Benefits tier.</p>
	<p><b>Formula (Faction Coin find chance multiplier)</b>: 120 ^ (0.25 * T)%, where T is Share Benefits.</p>
	<p><b>Formula (Additional Tax Collection)</b>: +(0.01 * x * T), where x is Maximum Mana and T Share Benefits tier.</p>
		" coords="310,10,364,64" shape="rect">
		<area href="#NightTime" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/NightTime.png' alt='Evil' align='middle'> Night Time</b></p>
	<p><b>Spell Type</b>: (Evil/Order) Undead Faction Spell</p>
	<p><b>Cost</b>: 1,000 Mana - <b>Duration</b>: 20 seconds </p>
	<p><b>Effect</b>: The production of assistants is increased by 30% per Necropolis you own.</p>
		" coords="10,70,64,124" shape="rect">
		<area href="#HellfireBlast" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HellfireBlast.png' alt='Evil' align='middle'> Hellfire Blast</b></p>
	<p><b>Spell Type</b>: (Evil/Chaos) Demon Faction Spell</p>
	<p><b>Cost</b>: 1,000 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increase the production of Evil Fortresses and Hell Portals based on your amount of trophies.</p>
	<p><b>Formula</b>: (round(200 * x ^ 0.8))%, where x is your amount of trophies.</p>
		" coords="70,70,124,124" shape="rect">
		<area href="#GoblinsGreed" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GoblinsGreed.png' alt='Evil' align='middle'> Goblin's Greed</b></p>
	<p><b>Spell Type</b>: (Evil/Balance) Goblin Faction Spell</p>
	<p><b>Cost</b>: 800 Mana - <b>Duration</b>: 5 seconds</p>
	<p><b>Effect</b>: Instantly produces Faction Coins based on gems you own. Also increases production of all buildings based on the number of Faction Coins found in this game.</p>
	<p><b>Faction Coin Formula</b>: +(20 + ln(1 + x) ^ 3), where x is your current amount of gems.</p>
	<p><b>Production Formula</b>: (0.75 * ln(1 + x) ^ 3.15)%, where x is the number of Faction Coins found in this game.</p>
		" coords="130,70,184,124" shape="rect">
		<area href="#BloodFrenzy" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BloodFrenzy.png' alt='Evil' align='middle'> Blood Frenzy</b></p>
	<p><b>Spell Type</b>: Evil Alignment Spell</p>
	<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increases the production of all Evil buildings by 1250%.</p>
		" coords="190,70,244,124" shape="rect">
		<area href="#ComboStrike" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ComboStrike.png' alt='Evil' align='middle'> Combo Strike</b></p>
	<p><b>Spell Type</b>: (Evil) Drow Faction Spell</p>
	<p><b>Cost</b>: 800 Mana - <b>Duration</b>: Fixed to 16 seconds</p>
	<p><b>Effect</b>: Increase the production of all buildings by a progressively higher value as you continue casting this spell (This game).</p>
	<p><b>Formula</b>: (30 * (x ^ 0.9))%, where x is the number of times you have cast Combo Strike (This game).</p>
		" coords="250,70,304,124" shape="rect">
		<area href="#ReapInterests" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ReapInterests.png' alt='Evil' align='middle'> Reap Interests</b></p>
	<p><b>Spell Type</b>: (Evil) Mercenary Faction Spell (R75+)</p>
	<p><b>Cost</b>: 200 Mana - <b>Duration</b>: None</p>
	<p><b>Effect</b>: Alters Tax Collection with new name and effect (still counts as Tax Collection for all purposes).</p>
	<p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.</p>
	<p><b>Formula</b>: *(50000 * log10(8 + 0.1 * x)), where x is amount of Reap Interests casts.</p>
	<p><b>Note</b>: Upgrades that cast free Tax Collection are treated as Reap Interests casts.</p>
		" coords="310,70,364,124" shape="rect">
		<area href="#LightningStrike" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/LightningStrike.png' alt='Neutral' align='middle'> Lightning Strike</b></p>
	<p><b>Spell Type</b>: (Neutral/Order) Titan Faction Spell</p>
	<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 10 seconds </p>
	<p><b>Effect</b>: The production of a random building is multiplied by 500% for each Iron Stronghold. Also multiplicatively increase Faction Coins find chance based on your current amount of gems.</p>
	<p><b>Formula</b>: (10 + log10(1 + x) ^ 2)%, where x is your current amount of gems.</p>
		" coords="10,130,64,184" shape="rect">
		<area href="#Brainwave" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Brainwave.png' alt='Neutral' align='middle'> Brainwave</b></p>
	<p><b>Spell Type</b>: (Neutral/Chaos) Faceless Faction Spell</p>
	<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 600 seconds </p>
	<p><b>Effect</b>: Increase production of all buildings by a cumulative 2% per second.</p>
		" coords="70,130,124,184" shape="rect">
		<area href="#GrandBalance" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GrandBalance.png' alt='Neutral' align='middle'> Grand Balance</b></p>
	<p><b>Spell Type</b>: (Neutral/Balance) Druid Faction Spell</p>
	<p><b>Cost</b>: 1,000 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increase the production of your least productive building based on the amount of the three most built ones.</p>
	<p><b>Formula</b>: (25 * (x * y * z / (A + 3) ^ 6) ^ 0.9)%, where x, y and z are the number of your three most-built buildings and A is how many times you have ascended.</p>
		" coords="130,130,184,184" shape="rect">
		<area href="#GemGrinder" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GemGrinder.png' alt='Neutral' align='middle'> Gem Grinder</b></p>
	<p><b>Spell Type</b>: Neutral Alignment Spell</p>
	<p><b>Cost</b>: 1,000 Mana - <b>Duration</b>: 20 seconds </p>
	<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the amount of times you reincarnated and ascended.</p>
	<p><b>Formula</b>: ((5000 * (1 + 0.1 * R)) ^ (0.8 ^ A))%, where R is the number of times you have reincarnated and A is how many times you have ascended.</p>
		" coords="190,130,244,184" shape="rect">
		<area href="#DragonsBreath" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DragonsBreath.png' alt='Neutral' align='middle'> Dragon's Breath</b></p>
	<p><b>Spell Type</b>: (Neutral) Dragon Faction Spell (R46+)</p>
	<p><b>Cost</b>: 1,500 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Activates one of the following effects at random for 20 seconds.</p>
	<p><b><font color='red'>Red</font></b>: Increase the production of unique buildings based on the amount of Faction Coins found in this game.</p>
	<p><b><font color='red'>Formula</font></b>: (2 * (ln(1 + x) ^ 2)%, where x is the amount of Faction Coins found in this game.</p>
	<p><b><font color='green'>Green</font></b>: Increase the production of all buildings based on the amount of spells cast in this game. Higher bonuses are provided to lower building tiers.</p>
	<p><b><font color='green'>Formula</font></b>: (0.01 * x ^ 0.625 * (11 - T) ^ 5)%, where x is spells cast (this game) and T is the building tier. (1 for Farms, 11 for Hall of Legends).</p>
	<p><b><font color='blue'>Blue</font></b>: Multiplicatively increase your Mana Regeneration by 200%.</p>
	<p><b><font color='white'>White</font></b>: Temporarily increase the amount of assistants based on time spent being Neutral in this Reincarnation.</p>
	<p><b><font color='white'>Formula</font></b>: +(30 * x ^ 0.65), where x is time spent as Neutral this Reincarnation.</p>
	<p><b><font color='grey'>Black</b></font>: Increase the production of all buildings based on Dragon's Breath activity time in this game.</p>
	<p><b><font color='grey'>Formula</font></b>: (0.5 * x ^ 0.75)%, where x is Dragon's Breath activity time in this game.</p>
		" coords="250,130,304,184" shape="rect">
		<area href="#AppraisalVantage" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AppraisalVantage.png' alt='Neutral' align='middle'> Appraisal Vantage</b></p>
	<p><b>Spell Type</b>: (Neutral) Mercenary Faction Spell (R75+)</p>
	<p><b>Cost</b>: 200 Mana - <b>Duration</b>: None</p>
	<p><b>Effect</b>: Alters Tax Collection with new name and effect (still counts as Tax Collection for all purposes).</p>
	<p><b>Effect</b>: Generates additional Faction Coins based on the amount of assistants you own.</p>
	<p><b>Formula</b>: +(x * y ^ 1.275), where x is assistants owned and y is Faction Coin find chance.</p>
	<p><b>Note</b>: Upgrades that cast free Tax Collection are treated as Appraisal Vantage casts.</p>
		" coords="310,130,364,184" shape="rect">
		<area href="#TemporalFlux" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TemporalFlux.png' alt='Order' align='middle'> Temporal Flux</b></p>
	<p><b>Spell Type</b>: Order Alignment Spell (R100+)</p>
	<p><b>Cost</b>: 5,000 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increase Unique building production based on time spent this game.</p>
	<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
	<p><b>Formula</b>: (3.75 * (x / 60) ^ 0.825)%, where x is time spent in this game.</p>
		" coords="10,190,64,244" shape="rect">
		<area href="#Maelstrom" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Maelstrom.png' alt='Chaos' align='middle'> Maelstrom</b></p>
	<p><b>Spell Type</b>: Chaos Alignment Spell (R100+)</p>
	<p><b>Cost</b>: 3,500 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: Mana produced, trophies unlocked, Faction Coins found or amount of assistants</p>
	<p><b>Formula (Mana)</b>: (0.02 * (log10(1 + x)) ^ 5)%, where x is Mana produced this game.</p>
	<p><b>Formula (Trophies)</b>: (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
	<p><b>Formula (Faction Coins)</b>: (0.01 * (log10(1 + x)) ^ 4)%, where x is faction coins found this game.</p>
	<p><b>Formula (Assistants)</b>: (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
		" coords="70,190,124,244" shape="rect">
		<area href="#AllCreation" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AllCreation.png' alt='Balance' align='middle'> All Creation</b></p>
	<p><b>Spell Type</b>: Balance Alignment Spell (R100+)</p>
	<p><b>Cost</b>: 6,000 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Increase production of all buildings based on your Mana Regeneration rate.</p>
	<p><b>Formula</b>:  (0.15 * ln(1 + x) ^ 3 + 0.75 * x ^ 0.25)%, where x is your Mana Regeneration.</p>
	<p><b>Effect</b>: Also multiplicatively increase Faction Coin find chance based on your Mana Regeneration rate.</p>
	<p><b>Formula</b>: (4.5 * ln(1 + x) ^ 2.25 + 12.5 * x ^ 0.125)%, where x is your Mana Regeneration.</p>
		" coords="130,190,184,244" shape="rect">
		<area href="#Precognition" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Precognition.png' alt='Order' align='middle'> Precognition</b></p>
	<p><b>Spell Type</b>: (Order) Archon Faction Spell (R125+)</p>
	<p><b>Cost</b>: 123,456 Mana - <b>Duration</b>: 60 seconds</p>
	<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on Mana produced in this game.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 1.25)%, where x is Mana produced in this game.</p>
	<p><b>Note</b>: Formula Improved to (1.25 * ln(1 + x) ^ 1.5)% with AR2.</p>
		" coords="10,250,64,304" shape="rect">
		<area href="#LimitedWish" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/LimitedWish.png' alt='Chaos' align='middle'> Limited Wish</b></p>
	<p><b>Spell Type</b>: (Chaos) Djinn Faction Spell (R125+)</p>
	<p><b>Cost</b>: 888,888 mana - <b>Duration</b>: Fixed to 12 seconds</p>
	<p><b>Effect</b>: Provide a random effect based on your chosen base alignment, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
	<p><b>Formula</b>: (2.25 * (ln(1 + x) ^ 1.35) * y ^ 0.45)%, where x is Limited Wish activity time in this game and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
	<p><b>Possible Effects</b></p>
	<p><b>1</b>: Increase the production of all buildings.</p>
	<p><b>Good Alignment</b></p>
	<p><b>2</b>: Temporarily increase Assistants (multiplicatively).</p>
	<p><b>3</b>: All spells durations count more.</p>
	<p><b>4</b>: Multiplicatively increase Mana Regeneration.</p>
	<p><b>Evil Alignment</b></p>
	<p><b>2</b>: Multiplicatively increase Trophy count and Offline Bonus.</p>
	<p><b>3</b>: Multiplicatively increase Mana Regeneration.</p>
	<p><b>4</b>: Multiplicatively increase Faction Coin find chance.</p>
	<p><b>Neutral Alignment</b></p>
	<p><b>2</b>: Multiplicatively increase Maximum Mana.</p>
	<p><b>3</b>: All spells durations count more.</p>
	<p><b>4</b>: Multiplicatively increase Faction Coin find chance.</p>
		" coords="70,250,124,304" shape="rect">
		<area href="#InfiniteSpiral" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png' alt='Balance' align='middle'> Infinite Spiral</b></p>
	<p><b>Spell Type</b>: (Balance) Makers Faction Spell (R125+)</p>
	<p><b>Cost</b>: 505,000 mana - <b>Duration</b>: 10 seconds</p>
	<p><b>Effect</b>: Temporarily increase assistants based on Maximum Mana (multiplicatively).</p>
	<p><b>Formula</b>: (10 * ln(1 + x) ^ 1.25)%, where x is Maximum Mana.</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coin find chance.</p>
	<p><b>Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is Faction Coin find chance.</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
	<p><b>Formula</b>: (10 + 0.05 * (x * y) ^ 0.75)%, where x is excavations done this Reincarnation (<b>not</b> current excavation count), y is free and ruby Excavation Resets this Reincarnation.</p>
		" coords="130,250,184,304" shape="rect">
		<area href="#Catalyst" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Catalyst.png' alt='Order' align='middle'> Catalyst</b></p>
	<p><b>Spell Type</b>: (Chaos) Djinn Faction Spell (R130+)</p>
	<p><b>Cost</b>: 500,000 Mana - <b>Duration</b>: Fixed to 60 seconds</p>
	<p><b>Effect</b>: Imitates a random vanilla or base alignment spell at tier 7 for 60 seconds. This spell's duration cannot be modified.</p>
	<p><b>Note</b>: Having access to this spell also enables the spell trophies and the challenge rewards of those spells.</p>
	<p><b>Note</b>: Cannot cast a spell that is already available.</p>
		" coords="40,310,94,364" shape="rect">
		<area href="#ChaosMadness" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ChaosMadness.png' alt='Order' align='middle'> Chaos Madness</b></p>
	<p><b>Spell Type</b>: (Chaos) Mercenary Faction Spell (R194+)</p>
	<p><b>Cost</b>: 500,000 Mana - <b>Duration</b>: Fixed to 20 seconds</p>
	<p><b>Effect</b>: Grants the effect of a random lineage, with the level of your highest lineage for 20 seconds.</p>
	<p><b>Note</b>: Does not select a lineage that is already available.</p>
		" coords="100,310,154,364" shape="rect">
		<area href="#TaxCollection" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TaxCollection.png' alt='Order' align='middle'> Tax Collection</b></p>
	<p><b>Spell Type</b>: Default Spell</p>
	<p><b>Cost</b>: 200 Mana - <b>Duration</b>: None</p>
	<p><b>Effect</b>: Instantly gain 30 seconds worth of coin production from buildings and assistants.</p>
		" coords="220,220,274,274" shape="rect">
		<area href="#CalltoArms" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/CalltoArms.png' alt='Order' align='middle'> Call to Arms</b></p>
	<p><b>Spell Type</b>: Default Spell </p>
	<p><b>Cost</b>: 400 Mana - <b>Duration</b>: 20 seconds </p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own.</p>
	<p><b>Formula</b>: ((25 + 0.3 * x) ^ 0.975)%, where x is your Buildings Owned (This Game) stat.</p>
		" coords="280,220,334,274" shape="rect">
		<area href="#SpiritualSurge" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Spiritualsurge.png' alt='Order' align='middle'> Spiritual Surge</b></p>
	<p><b>Spell Type</b>: Default Spell (R14+)</p>
	<p><b>Cost</b>: 2,500 Mana - <b>Duration</b>: 20 seconds </p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you reincarnated and ascended.</p>
	<p><b>Formula</b>: (2500 * (R ^ 1.05)) ^ (1 + A * 0.5)%, where R is the number of times you have reincarnated and A is how many times you have ascended.</p>
		" coords="220,280,274,334" shape="rect">
		<area href="#TwistingNether" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TwistingNether.png' alt='Order' align='middle'> Twisting Nether</b></p>
	<p><b>Spell Type</b>: Faction Spell (R220+)</p>
	<p><b>Cost</b>: 1,000,000 Mana - <b>Duration</b>: 20 seconds</p>
	<p><b>Effect</b>: Lineage Levels count +1 more per Tier.</p>
	<p><b>Note</b>: Twisting Nether counts as a faction spell, but has no alignments for upgrades such as Djinn Challenge 5.</p>
		" coords="280,280,334,334" shape="rect">
	</map>
	<map name="SpellTrophy-map">
		<area href="#FairyChanting" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FairyChoirSpellUpgrade.png' align='middle'> Fairy Choir</b></p>
	<p><b>Requirement</b>: Cast Fairy Chanting while having 45 or more assistants.</p>
	<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
	<p><b>Effect</b>: Triples your assistants while Fairy Chanting is active.</p>
		" coords="10,10,64,64" shape="rect">
		<area href="#MoonBlessing" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SunBlessingSpellUpgrade.png' align='middle'> Sun Blessing</b></p>
	<p><b>Requirement</b>: Cast Moon Blessing between 6 AM and 1 PM (local time).</p>
	<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
	<p><b>Effect</b>: Autoclicks 15 times per second while Moon Blessing is active.</p>
		" coords="70,10,124,64" shape="rect">
		<area href="#GodsHand" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GodsRestSpellUpgrade.png' align='middle'> God's Rest</b></p>
	<p><b>Requirement</b>: Cast God's Hand on any Sunday (check on weekday is based on UTC time).</p>
	<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
	<p><b>Effect</b>: Gives random Faction Coins based on your Faction Coin find chance for each other spell you cast while God's Hand is active.</p>
	<p><b>Formula</b>: (floor(x ^ 1.1), where x is Faction Coin find chance.</p>
		" coords="130,10,184,64" shape="rect">
		<area href="#DiamondPickaxe" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/MinedwarfSpellUpgrade.png' align='middle'> Minedwarf</b></p>
	<p><b>Requirement</b>: Find 30,000 Faction Coins using Diamond Pickaxe in a single game.</p>
	<p><b>Cost</b>: 100 Sxd (1e53), A1+ Free</p>
	<p><b>Effect</b>: Increases Diamond Pickaxe bonus to Faction Coin find chance to +300%.</p>
		" coords="190,10,244,64" shape="rect">
		<area href="#GoblinsGreed" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GreedDriveSpellUpgrade.png' align='middle'> Greed Drive</b></p>
	<p><b>Requirement</b>: Cast Goblin's Greed 100 times in a row and do not cast any other spell.</p>
	<p><b>Note</b>: The Goblin Central Bank upgrade does not interfere with getting this trophy.</p>
	<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
	<p><b>Effect</b>: Goblin's Greed costs 150 less mana.</p>
		" coords="10,70,64,124" shape="rect">
		<area href="#NightTime" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TrueNightSpellUpgrade.png' align='middle'> True Night</b></p>
	<p><b>Requirement</b>: Cast Night Time between 11 PM and 6 AM (local time).</p>
	<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
	<p><b>Effect</b>: Increases Night Time's production of assistants to 40% per Necropolis.</p>
		" coords="70,70,124,124" shape="rect">
		<area href="#HellfireBlast" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HellRushSpellUpgrade.png' align='middle'> Hell Rush</b></p>
	<p><b>Requirement</b>: Cast the Demon spell Hellfire Blast in the first 60 seconds of a playtime.</p>
	<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
	<p><b>Effect</b>: Hellfire Blast also boosts Halls of Legends.</p>
		" coords="130,70,184,124" shape="rect">
		<area href="#ComboStrike" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PerfectComboSpellUpgrade.png' align='middle'> Perfect Combo</b></p>
	<p><b>Requirement</b>: Cast Combo Strike 100 times in a single game. The chain is interrupted by casting different spells.</p>
	<p><b>Cost</b>: 100 Sxd (1e53), A1+ Free</p>
	<p><b>Effect</b>: Increases Combo Strike bonus.</p>
	<p><b>Formula</b>: (40 * (x ^ 0.9))%, where x is the number of times you have cast Combo Strike.</p>
		" coords="190,70,244,124" shape="rect">
		<area href="#LightningStrike" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/LightningStormSpellUpgrade.png' align='middle'> Lightning Storm</b></p>
	<p><b>Requirement</b>: Cast Lightning Strike 100 times in a single game.</p>
	<p><b>Cost</b>: 10 Dd (1e40), A1+ Free</p>
	<p><b>Effect</b>: Increase Lightning Strike bonus to 750% for each Iron Stronghold.</p>
		" coords="10,130,64,184" shape="rect">
		<area href="#GrandBalance" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HallsofBalanceSpellUpgrade.png' align='middle'> Halls of Balance</b></p>
	<p><b>Requirement</b>: Have Grand Balance affect Hall of Legends.</p>
	<p><b>Cost</b>: 10 Dd (1e40), A1+ Free</p>
	<p><b>Effect</b>: Increases Grand Balance duration to 24 seconds and lower its cost by 200 mana.</p>
		" coords="70,130,124,184" shape="rect">
		<area href="#Brainwave" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FacelessOvermindSpellUpgrade.png' align='middle'> Faceless Overmind</b></p>
	<p><b>Requirement</b>: Affiliate with the Faceless 5 times in a row.</p>
	<p><b>Cost</b>: 10 Dd (1e40), A1+ Free</p>
	<p><b>Effect</b>: Increases Brainwave ticks to 3% per second.</p>
		" coords="130,130,184,184" shape="rect">
		<area href="#DragonsBreath" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DragonsRoarSpellUpgrade.png' align='middle'> Dragon's Roar</b></p>
	<p><b>Requirement</b>: Cast Dragon's Breath while having at least 4 other active spells.</p>
	<p><b>Cost</b>: 10 Dd (1e40), A2+ Free</p>
	<p><b>Effect</b>: Dragon's Breath multiplicatively increases Faction Coin find chance based on its duration.</p>
	<p><b>Formula</b>: (6 * x ^ 0.6)%, where x is its duration.</p>
		" coords="190,130,244,184" shape="rect">
		<area href="#Precognition" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png' align='middle'> Chrono Loading</b></p>
	<p><b>Requirement</b>: Cast Precognition with at least 100 Qa (1e17) Mana Regeneration.</p>
	<p><b>Note</b>: Precognition raises regen itself. Make sure that you have 100 Qa (1e17) before being cast.</p>
	<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
	<p><b>Effect</b>: A fraction of Precognition's duration is added to time spent in this game.</p>
	<p><b>Formula</b>: (100 * ln(1 + x / 60) ^ 2.5), where x is its duration.</p>
		" coords="10,190,64,244" shape="rect">
		<area href="#LimitedWish" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PersistentEntropySpellUpgrade.png' align='middle'> Persistent Entropy</b></p>
	<p><b>Requirement</b>: Cast Limited Wish 100 times within 30 minutes of a new game.</p>
	<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
	<p><b>Effect</b>: Adds 150 casts to Limited Wish's formula.</p>
		" coords="70,190,124,244" shape="rect">
		<area href="#InfiniteSpiral" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/RealityCraterSpellUpgrade.png' align='middle'> Reality Crater</b></p>
	<p><b>Requirement</b>: R125+, Cast Infinite Spiral with at least 10 excavation resets this game.</p>
	<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
	<p><b>Effect</b>: Infinite Spiral also reduces excavation cost multiplier based on assistants owned.</p>
	<p><b>Formula</b>: -(0.001 * log(1 + x)), where x is assistants owned.</p>
		" coords="130,190,184,244" shape="rect">
		<area href="#TaxCollection" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/CoinPillageSpellUpgrade.png' align='middle'> Coin Pillage</b></p>
	<p><b>Requirement</b>: Cast 150 Tax Collections in less than 5 seconds.</p>
	<p><b>Cost</b>: 1 Dc (1e33), A1+ Free</p>
	<p><b>Effect</b>: Tax Collection also finds 30 seconds worth of Faction Coins.</p>
		" coords="190,190,244,244" shape="rect">
	</map>
	<map name="ChallengeReward-map">
		<area href="#FairyChanting" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FairyOrchestraChallengeReward.png' align='middle'> Fairy Orchestra</b></p>
	<p><b>Effect</b>: Each assistant generates 3 times as many faction coins while Fairy Chanting is active.</p>
		" coords="10,10,64,64" shape="rect">
		<area href="#MoonBlessing" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/StarBlessingChallengeReward.png' align='middle'> Star Blessing</b></p>
	<p><b>Effect</b>: Automatic clicks from Sun Blessing always trigger Elven Luck (1 per second).</p>
		" coords="70,10,124,64" shape="rect">
		<area href="#GodsHand" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GodsThroneChallengeReward.png' align='middle'> God's Throne</b></p>
	<p><b>Effect</b>: Mana Regeneration is multiplicatively increased by 50% while God's Hand is active.</p>
	<p><b>Effect</b>: Also increase offline spells cast amount multiplicatively based on your offline Mana Regeneration.</p>
	<p><b>Formula</b>: (10 * log10(1 + x)), where x is offline mana regeneration.</p>
		" coords="130,10,184,64" shape="rect">
		<area href="#DiamondPickaxe" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/IronGripChallengeReward.png' align='middle'> Iron Grip</b></p>
	<p><b>Effect</b>: Increase Diamond Pickaxe duration by 8 seconds, and its bonus to Faction Coin find chance is passively applied as a multiplier to excavations Faction Coin rewards.</p>
		" coords="190,10,244,64" shape="rect">
		<area href="#GoblinsGreed" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AvariceDriveChallengeReward.png' align='middle'> Avarice Drive</b></p>
	<p><b>Effect</b>: Goblin's Greed counts Faction Coins found in this Reincarnation.</p>
		" coords="10,70,64,124" shape="rect">
		<area href="#NightTime" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/MidnightTimeChallengeReward.png' align='middle'> Midnight Time</b></p>
	<p><b>Effect</b>: Increase Night Time assistant bonus based on time spent offline in this Reincarnation.</p>
	<p><b>Formula</b>: (0.2 * (x / 60) ^ 0.7)%, where x is time spent offline in this Reincarnation.</p>
		" coords="70,70,124,124" shape="rect">
		<area href="#HellfireBlast" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HellfireBurstChallengeReward.png' align='middle'> Hellfire Burst</b></p>
	<p><b>Effect</b>: Hellfire Blast also counts Evil spells cast in this reincarnation to increase its bonus.</p>
	<p><b>Formula</b>: (0.1 * x), where x is Evil spells cast in this reincarnation.</p>
		" coords="130,70,184,124" shape="rect">
		<area href="#ComboStrike" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/VersaltileComboChallengeReward.png' align='middle'> Versatile Combo</b></p>
	<p><b>Effect</b>: Increase Combo Strike counter based on the amount of spells cast in this game, not including Tax Collection.</p>
	<p><b>New Combo Strike Counter Formula</b>: (x + y), where x is your Combo Strike cast count and y is every other spell (except tax collection and generic) cast count.</p>
	<p><b>Effect</b>: Also increase offline spells cast amount multiplicatively based on your offline Mana Regeneration.</p>
	<p><b>Formula</b>: (10 * log10(1 + x))%, where x is your offline Mana Regeneration.</p>
		" coords="190,70,244,124" shape="rect">
		<area href="#LightningStrike" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ThunderstormChallengeReward.png' align='middle'> Thunderstorm</b></p>
	<p><b>Effect</b>: Further increase Faction Coin find chance from Lightning Strike based on building tiers it hits.</p>
	<p><b>Formula</b>: (10 + log10(1 + x) ^ 2 * (1 + 0.2 * sum(T)))%, where x is your current amount of gems and T the Building Tier Lightning Strike hits.</p></p>
	<p><b>Note</b>: Lightning Strike can hit multiple tiers at once if you have C375 and/or Titan Perk 4.</p>
		" coords="10,130,64,184" shape="rect">
		<area href="#GrandBalance" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PrimalBalanceChallengeReward.png' align='middle'> Primal Balance</b></p>
	<p><b>Effect</b>: Grand Balance now affects extra buildings based on Mana produced in this Reincarnation.</p>
	<p><b>Formula</b>: (0.00001 * x) ^ (0.2 - 0.025 * A), where x is Mana produced in this Reincarnation and A is how many times you have ascended.</p>
	<p><b>Effect</b>: When the amount of additional targets exceeds 11, increase the production of all affected buildings based on the exceeding amount. Does not suffer from Ascension penalties.</p>
	<p><b>Formula</b>: (3 * (x - 10) ^ 1.5)%, where x is the amount of additional targets.</p>
		" coords="70,130,124,184" shape="rect">
		<area href="#Brainwave" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FocusedThoughtsChallengeReward.png' align='middle'> Focused Thoughts</b></p>
	<p><b>Effect</b>: Give Brainwave a headstart based on its activity time in this game, with a minimum of 1 minute.</p>
	<p><b>Formula</b>: +1 second per 5 minutes of Brainwave active time this game.</p>
		" coords="130,130,184,184" shape="rect">
		<area href="#DragonsBreath" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PrismaticBreathChallengeReward.png' align='middle'> Prismatic Breath</b></p>
	<p><b>Effect</b>: While all 5 breaths are active, Reincarnations count 50% more.</p>
		" coords="190,130,244,184" shape="rect">
		<area href="#Precognition" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/OmniscienceChallengeReward.png' align='middle'> Omniscience</b></p>
	<p><b>Effect</b>: Precognition also makes Excavations, Artifacts, Reincarnations, Research points and Lineage levels count 15% more.</p>
		" coords="10,190,64,244" shape="rect">
		<area href="#LimitedWish" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FullWishChallengeReward.png' align='middle'> Full Wish</b></p>
	<p><b>Effect</b>: Production of all buildings effect of Limited Wish is active on every cast and is no longer a possible random outcome.</p>
		" coords="70,190,124,244" shape="rect">
		<area href="#InfiniteSpiral" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GaiasCradleChallengeReward.png' align='middle'> Gaia's Cradle</b></p>
	<p><b>Effect</b>: All Infinite Spiral effects scale 15% faster.</p>
		" coords="130,190,184,244" shape="rect">
		<area href="#CalltoArms" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/WarcryChallengeReward.png' align='middle'> Warcry</b></p>
	<p>Call to Arms gains additional effects based on your alignments, scaling off your Call to Arms strength.</p>
	<p><b>Good</b>: Grants one maximum castable Call to Arms tier per ascension and removes one ascension penalty from Call to Arms. Tax Collection casts in this game now increases Call to Arms base bonus (this bonus will boost the other Warcry effect).</p>
	<p><b>Evil</b>: Multiplicatively increase Tax Collection worth in seconds.</p>
	<p><b>Neutral</b>: Multiplicatively increase Faction Coins find chance.</p>
	<p><b>Order</b>: Increases all spell durations.</p>
	<p><b>Chaos</b>: Multiplicatively increase assistants (Temporary).</p>
	<p><b>Balance</b>: Increases Royal Exchange Bonus multiplicatively and makes them count more.</p>
		" coords="190,190,244,244" shape="rect">
	</map>
	<hr>
	<b><center>All Faction Default Spells</center></b>
	<p id="TaxCollection"><b><img src="http://musicfamily.org/realm/Factions/picks/TaxCollection.png" alt="All Factions" align="middle"> Tax Collection</b> (All Factions)</p>
	<p><b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds </p>
	<p><b>Effect</b>: Instantly gain 30 seconds worth of coin production from buildings and assistants.</p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/CoinPillageSpellUpgrade.png" align="middle"> Coin Pillage</b></p>
	<p><b>Requirement</b>: Cast 150 Tax Collections in less than 5 seconds.</p>
	<p><b>Effect</b>: Tax Collection also finds 30 seconds worth of Faction Coins.</p>
	<p><b>Cost</b>: 1 Dc (1e33), A1+ Free</p>
	<br>
	<p id="CalltoArms"><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArms.png" alt="All Factions" align="middle"> Call to Arms</b> (All Factions)</p>
	<p><b>Cost</b>: 400 Mana - <b>Duration</b>: 20 seconds </p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own.</p>
	<p><b>Formula</b>: ((25 + 0.3 * x) ^ 0.975)%, where x is your Buildings Owned (This Game) stat.</p>
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/WarcryChallengeReward.png' align='middle'> Warcry</b> (R206+)</p>	
	<p>Call to Arms gains additional effects based on your alignments, scaling off your Call to Arms strength.</p>
	<p><b>Good</b>: Grants one maximum castable Call to Arms tier per ascension and removes one ascension penalty from Call to Arms. Tax Collection casts in this game now increases Call to Arms base bonus (This bonus will boost the other Warcry effect. Stacks multiplicatively with W180, additively with C225 & R150 power).</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.5)%, where x is Tax Collection casts this game.</p>
	<p><b>Evil</b>: Multiplicatively increase Tax Collection worth in seconds.</p>
	<p><b>Formula</b>: (y ^ 0.35)%</p>
	<p><b>Neutral</b>: Multiplicatively increase Faction Coins find chance.</p>
	<p><b>Formula</b>: (0.35 * y ^ 0.35)%</p>
	<p><b>Order</b>: Increases all spell durations.</p>
	<p><b>Formula</b>: (2.5 * ln(1 + y))</p>
	<p><b>Chaos</b>: Multiplicatively increase assistants (Temporary).</p>
	<p><b>Formula</b>: (0.35 * y ^ 0.35)</p>
	<p><b>Balance</b>: Increases Royal Exchange Bonus multiplicatively and makes them count more.</p>
	<p><b>Formula</b>: (0.45 * y ^ 0.45)</p>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Call to Arms Tier 2-7</a></b> (R42+)</p>
			<div class="autohide">
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier2.png" alt="Calltoarms2" align="middle"> Tier</b>: 2</p>
				<p><b>Cost</b> 51 Sxd (5.1e52) - <b>FC</b> 0</b></p>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier3.png" alt="Calltoarms3" align="middle"> Tier</b>: 3</p>
				<p><b>Cost</b> 766.4 Vg (7.664e65) - <b>FC</b> 0</p>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier4.png" alt="Calltoarms4" align="middle"> Tier</b>: 4</p>
				<p><b>Cost</b> 11.52 Qivg (1.152e79) - <b>FC</b> 0</p>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier5.png" alt="Calltoarms5" align="middle"> Tier</b>: 5</p>
				<p><b>Cost</b> 173.1 Novg (1.731e92) - <b>FC</b> 0</p>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier6.png" alt="Calltoarms6" align="middle"> Tier</b>: 6</p>
				<p><b>Cost</b> 2.601 Qatg (2.601e105) - <b>FC</b> 0</p>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/CalltoArmsTier7.png" alt="Calltoarms6" align="middle"> Tier</b>: 7</p>
				<p><b>Cost</b> Free - <b>FC</b> 0</p>
			</div>
		</div>
	</div>
	<br>
	<p id="SpiritualSurge"><b><img src="http://musicfamily.org/realm/Factions/picks/Spiritualsurge.png" alt="All Factions" align="middle"> Spiritual Surge</b> (All Factions, R14+)</p>
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
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier2.png" alt="Spiritual Surge" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 66 Uvg (6.6e67) - <b>FC</b> 10 T (1e13) each</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier3.png" alt="Spiritual Surge" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 5.949 Spvg (5.949e84) - <b>FC</b> 891.3 T (8.913e14) each</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier4.png" alt="Spiritual Surge" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 53.61 Utg (5.361e97) - <b>FC</b> 79.43 Qa (7.943e16) each</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier5.png" alt="Spiritual Surge" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 48.33 Octg (4.833e118) - <b>FC</b> 7.079 Qi (7.079e18) each</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier6.png" alt="Spiritual Surge" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 4.356 Qaqag (4.356e135) - <b>FC</b> 631 Qi (6.31e20) each</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiritualSurgeTier7.png" alt="Spiritual Surge" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 56.23 Sx (5.623e22) each</p>
		</div>
	</div>
</div>
<hr>
<b><center>Alignment Spells</center></b>
<p id="HolyLight"><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLight.png" alt="Good" align="middle"> Holy Light</b> (Proof of Good Deed)</p>
<p><b>Cost</b>: 900 Mana - <b>Duration</b>: 10 seconds</p>
<p><b>Effect</b>: Increase clicking reward by 1750%</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Holy Light Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Dwarf</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier2.png" alt="HolyLightTier2" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 1 B (1e9)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier3.png" alt="HolyLightTier3" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 22.39 B (2.239e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier4.png" alt="HolyLightTier4" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 501.2 B (5.012e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier5.png" alt="HolyLightTier5" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 5 T (1.122e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier6.png" alt="HolyLightTier6" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 251.2 Sxtg (2.916e111) - <b>FC</b> 10 T (2.514e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HolyLightTier7.png" alt="HolyLightTier7" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 5.623 Qa (5.623e15)</p>
		</div>
	</div>
</div>
<br>
<p id="BloodFrenzy"><b><img src="http://musicfamily.org/realm/Factions/picks/BloodFrenzy.png" alt="Evil" align="middle"> Blood Frenzy</b> (Proof of Evil Deed)</p>
<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increases the production of all Evil buildings by 1250%.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Blood Frenzy Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Goblin, Undead, Demon, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier2.png" alt="Bloodfrenzytier" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 1 B (1e9)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier3.png" alt="Bloodfrenzytier" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 22.39 B (2.239e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier4.png" alt="Bloodfrenzytier" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 501.2 B (5.012e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier5.png" alt="Bloodfrenzytier" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 11.22 T (1.122e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier6.png" alt="Bloodfrenzytier" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 251.2 T (2.512e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BloodfrenzyTier7.png" alt="Bloodfrenzytier" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 5.623 Qa (5.623e15)</p>
		</div>
	</div>
</div>
<br>
<p id="GemGrinder"><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinder.png" alt="Neutral" align="middle"> Gem Grinder</b> (Proof of Neutrality)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increase production bonus from Gems</p>
<p><b>Note</b>: Gem Grinder formula changed to work with Reincarnations and Ascensions.</p>
<p><b>Tier Formula</b>: ((5000 * (1 + 0.1 * R)) ^ (0.8 ^ A)), where R is Reincarnation and A is Ascension</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Gem Grinder Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Fairy, Elven, Angel, Goblin, Undead, Demon, Dwarven, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier2.png" alt="Gem Grinder" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 60 Nod (6E61) - <b>FC</b> 5 B (5e9)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier3.png" alt="Gem Grinder" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 166.9 Qavg (1.669E77) - <b>FC</b> 142.5 B (1.425e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier4.png" alt="Gem Grinder" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 464.7 Novg (4.647E92) - <b>FC</b> 4.0161 T (4.061e12)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier5.png" alt="Gem Grinder" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 1.293 Qitg (1.293E108) - <b>FC</b> 115.7 T (1.157e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier6.png" alt="Gem Grinder" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 3.6 Qag (3.6e123) - <b>FC</b> 3.299 Qa (3.299e15)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GemGrinderTier7.png" alt="Gem Grinder" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 94.02 Qa (9.402e16)</p>
		</div>
	</div>
</div>
<hr>
<b><center>Faction Spells</center></b>
<p id="FairyChanting"><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChanting.png" alt="Good" align="middle"> Fairy Chanting</b> (Fairy)</p>
<p>Cost</b>: 1000 Mana - <b>Duration</b>: 10 seconds </p>
<p><b>Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 50,000%</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/FairyChoirSpellUpgrade.png" align="middle"> Fairy Choir</b></p>
<p><b>Requirement</b>: Cast Fairy Chanting while having 45 or more assistants.</p>
<p><b>Effect</b>: Triples your assistants while Fairy Chanting is active.</p>
<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/FairyOrchestraChallengeReward.png" align="middle"> Fairy Orchestra</b> (R18+)</p>
<p><b>Effect</b>: Each assistant generates 3 times as many faction coins while Fairy Chanting is active.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Fairy Chanting Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Fairy</p>
			<p><b>Effect</b>: Increases the duration of the spell by 10 seconds per tier.</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier2.png" alt="FairyChanting" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier3.png" alt="FairyChanting" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier4.png" alt="FairyChanting" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier5.png" alt="FairyChanting" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier6.png" alt="FairyChanting" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyChantingTier7.png" alt="FairyChanting" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
		</div>
	</div>
</div>
<br>
<p id="MoonBlessing"><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessing.png" alt="Good" align="middle"> Moon Blessing</b> (Elven)</p>
<p><b>Cost</b>: 700 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increases the production of all buildings based on on the amount of clicks made in this Reincarnation for 20 seconds.</p>
<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of clicks made in this Reincarnation.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/SunBlessingSpellUpgrade.png" align="middle"> Sun Blessing</b></p>
<p><b>Requirement</b>: Activate Moon Blessing between 6 AM and 1 PM (local time).</p>
<p><b>Effect</b>: Autoclicks 15 times per second while Moon Blessing is active.</p>
<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/StarBlessingChallengeReward.png" align="middle"> Star Blessing</b> (R18+)</p>
<p><b>Effect</b>: Automatic clicks from Sun Blessing always trigger Elven Luck.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Moon Blessing Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Elven</p>
			<p><b>Effect</b>: Increase click reward by an additional 35.6% per tier.</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier2.png" alt="MoonBlessing" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier3.png" alt="MoonBlessing" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier4.png" alt="MoonBlessing" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier5.png" alt="MoonBlessing" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier6.png" alt="MoonBlessing" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/MoonBlessingTier7.png" alt="MoonBlessing" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
		</div>
	</div>
</div>
<br>
<<p id="GodsHand"><b><img src="http://musicfamily.org/realm/Factions/picks/Godshand.png" alt="Good" align="middle"> God's Hand</b> (Angel)</p>
<p><b>Cost</b>: 900 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: Increase the production of all buildings by 120 times your Mana Regeneration rate.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/GodsRestSpellUpgrade.png" align="middle"> God's Rest</b></p>
<p><b>Requirement</b>: Cast God's Hand on any Sunday.</p>
<p><b>Effect</b>: Gives random Faction Coins based on your Faction Coin find chance for each other spell you cast while God's Hand is active.</p>
<p><b>Formula</b>: (floor(x ^ 1.1), where x is Faction Coin find chance.</p>
<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/GodsThroneChallengeReward.png" align="middle"> God's Throne</b> (R18+)</p>
<p><b>Effect</b>: Mana Regeneration is multiplicatively increased by 50% while God's Hand is active.</p>
<p><b>Effect</b>: Also increase offline spells cast amount multiplicatively based on your offline Mana Regeneration.</p>
<p><b>Formula</b>: (10 * log10(1 + x)), where x is offline mana regeneration.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">God's Hand Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Angel</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier2.png" alt="God's Hand" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier3.png" alt="God's Hand" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier4.png" alt="God's Hand" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier5.png" alt="God's Hand" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316 Qa (3.162e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier6.png" alt="God's Hand" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/God'sHandTier7.png" alt="God's Hand" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
		</div>
	</div>
</div>
<br>
<p id="DiamondPickaxe"><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxe.png" alt="Good" align="middle"> Diamond Pickaxe</b> (Dwarven)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 12 seconds </p>
<p><b>Effect</b>: Increase clicking reward by 25% per Excavation you made and increase your Faction Coin find chance by 200%.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/MinedwarfSpellUpgrade.png" align="middle"> Minedwarf</b></p>
<p><b>Requirement</b>: Find 30,000 Faction Coins using Diamond Pickaxe in a single game.</p>
<p><b>Effect</b>: Increases Diamond Pickaxe bonus to "Faction Coin Find Chance" to +300%.</p>
<p><b>Cost</b>: 100 Sxd (1e53), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/IronGripChallengeReward.png" align="middle"> Iron Grip</b> (R33+)</p>
<p><b>Effect</b>: Increase Diamond Pickaxe duration by 8 seconds, and its bonus to Faction Coin find chance is passively applied as a multiplier to excavations Faction Coin rewards.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Diamond Pickaxe Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Dwarf</p>
			<p><b>Effect</b>: Increases FC find chance per tier.</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier2.png" alt="Diamond Pickaxe" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 63 Vg (6.3e64) - <b>FC</b> 1 T (1e12)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier3.png" alt="Diamond Pickaxe" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 998.1 Qivg (9.981e80) - <b>FC</b> 63.1 T (6.31e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier4.png" alt="Diamond Pickaxe" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 15.81 Utg (1.581e97) - <b>FC</b> 3.981 Qa (3.981e15)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier5.png" alt="Diamond Pickaxe" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 250.5 Sxtg (2.505e113) - <b>FC</b> 251.2 Qa (2.512e17)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier6.png" alt="Diamond Pickaxe" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 3.969 Dqag (3.969e120) - <b>FC</b> 15.85 Qi (1.585e19)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DiamondPickaxeTier7.png" alt="Diamond Pickaxe" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 1 Sx (1e21)</p>
		</div>
	</div>
</div>
<br>
<p id="GoblinsGreed"><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinsGreed.png" alt="Evil" align="middle"> Goblin's Greed</b> (Goblin)</p>
<p><b>Cost</b>: 800 Mana - <b>Duration</b>: 5 seconds </p>
<p><b>Effect</b>: Instantly produces Faction Coins based on gems you own. Also increases production of all buildings based on the number of Faction Coins found in this game.</p>
<p><b>Faction Coin Formula</b>: +(20 + ln(1 + x) ^ 3), where x is your current amount of gems.</p>
<p><b>Production Formula</b>: (0.75 * ln(1 + x) ^ 3.15)%, where x is the number of Faction Coins found in this game.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/GreedDriveSpellUpgrade.png" align="middle"> Greed Drive</b></p>
<p><b>Requirement</b>: Cast Goblin's Greed 100 times in a row and do not cast any other spell.</p>
<p><b>Note</b>: The Goblin Central Bank upgrade does not interfere with getting this trophy.</p>
<p><b>Effect</b>: Goblin's Greed costs 150 less mana.</p>
<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/AvariceDriveChallengeReward.png" align="middle"> Avarice Drive</b> (R18+)</p>
<p><b>Effect</b>: Goblin's Greed counts Faction Coins found in this Reincarnation.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin's Greed Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Goblin</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier2.png" alt="Goblin's Greed" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier3.png" alt="Goblin's Greed" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier4.png" alt="Goblin's Greed" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier5.png" alt="Goblin's Greed" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 (3.162e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier6.png" alt="Goblin's Greed" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblin'sGreedTier7.png" alt="Goblin's Greed" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
		</div>
	</div>
</div>
<br>
<p id="NightTime"><b><img src="http://musicfamily.org/realm/Factions/picks/NightTime.png" alt="Evil" align="middle"> Night Time</b> (Undead)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds </p>
<p><b>Effect</b>: The production of assistants is increased by 30% per Necropolis you own.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/TrueNightSpellUpgrade.png" align="middle"> True Night</b></p>
<p><b>Requirement</b>: Cast Night Time between 11 pm and 6 am.</p>
<p><b>Effect</b>: Increases Night Time's production of assistants to 40% per Necropolis.</p>
<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/MidnightTimeChallengeReward.png" align="middle"> Midnight Time</b> (R18+)</p>
<p><b>Effect</b>: Increase Night Time assistant bonus based on time spent offline in this Reincarnation.</p>
<p><b>Formula</b>: (0.2 * (x / 60) ^ 0.7)%, where x is time spent offline in this Reincarnation.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Night Time Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Undead</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier2.png" alt="Night Time" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier3.png" alt="Night Time" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier4.png" alt="Night Time" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier5.png" alt="Night Time" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier6.png" alt="Night Time" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/NightTimeTier7.png" alt="Night Time" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
		</div>
	</div>
</div>
<br>
<p id="HellfireBlast"><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlast.png" alt="Evil" align="middle"> Hellfire Blast</b> (Demon)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase the production of Evil Fortresses and Hell Portals based on your amount of trophies.</p>
<p><b>Formula</b>: (round(200 * x ^ 0.8))%, where x is your Trophies Unlocked stat.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/HellRushSpellUpgrade.png" align="middle"> Hell Rush</b></p>
<p><b>Requirement</b>: Cast the Demon spell Hellfire Blast in the first 60 seconds of a playtime.</p>
<p><b>Effect</b>: Hellfire Blast also boosts Halls of Legends.</p>
<p><b>Cost</b>: 1 M (1e6), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBurstChallengeReward.png" align="middle"> Hellfire Burst</b> (R18+)</p>
<p><b>Effect</b>: Hellfire Blast also counts Evil spells cast in this reincarnation to increase its bonus.</p>
<p><b>Formula</b>: (0.1 * x), where x is evil spells cast in this reincarnation.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Hellfire Blast Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Demon</p>
			<p><b>Effect</b>: Evils spells count more per Tier.</b>
			<p><b>Formula</b>: (50 * (T - 1))%, where T is the Hellfire Blast Tier.</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier2.png" alt="Hellfire Blast" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 54 Spd (5.4e55) - <b>FC</b> 10 B (1e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier3.png" alt="Hellfire Blast" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 4.629 Dvg (4.629e69) - <b>FC</b> 316.2 B (3.162e11)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier4.png" alt="Hellfire Blast" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 396.8 Sxvg (3.968e83) - <b>FC</b> 10 T (1e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier5.png" alt="Hellfire Blast" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 34.02 Utg (3.402e97) - <b>FC</b> 316.2 T (3.162e14)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier6.png" alt="Hellfire Blast" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 2.916 Sxtg (2.916e111) - <b>FC</b> 10 Qa (1e16)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/HellfireBlastTier7.png" alt="Hellfire Blast" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 316.2 Qa (3.162e17)</p>
		</div>
	</div>
</div>
<br>
<p id="ComboStrike"><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrike.png" alt="Evil" align="middle"> Combo Strike</b> (Drow)</p>
<p><b>Cost</b>: 800 Mana - <b>Duration</b>: Fixed to 16 seconds</p>
<p><b>Effect</b>: Increase the production of all buildings by a progressively higher value as you continue casting this spell (This game).</p>
<p><b>Formula</b>: (30 * (x ^ 0.9))%, where x is the number of times you have cast Combo Strike (This game).</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/PerfectComboSpellUpgrade.png" align="middle"> Perfect Combo</b></p>
<p><b>Requirement</b>: Cast Combo Strike 100 times in a single game,The chain is interrupted by casting different spells.</p>
<p><b>Effect</b>: Increases Combo Strike bonus.</p>
<p><b>Formula</b>: (40 * (x ^ 0.9))%, where x is the number of times you have cast Combo Strike.</p>
<p><b>Cost</b>: 100 Sxd (1e53), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/VersaltileComboChallengeReward.png" align="middle"> Versatile Combo</b> (R33+)</p>
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
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier2.png" alt="Combo Strike" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 63 Vg (6.3e64) - <b>FC</b> 1 T (1e12)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier3.png" alt="Combo Strike" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 998.1 Qivg (9.981e80) - <b>FC</b> 63.1 T (6.31e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier4.png" alt="Combo Strike" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 15.81 Uvg (1.581e97) - <b>FC</b> 3.981 Qa (3.981e15)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier5.png" alt="Combo Strike" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 250.5 Sxtg (2.505e113) - <b>FC</b> 251.2 Qa (2.512e17)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier6.png" alt="Combo Strike" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 3.969 Dqag (3.969e120) - <b>FC</b> 15.85 Qi (1.585e19)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/ComboStrikeTier7.png" alt="Combo Strike" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 1 Sx (1e21)</p>
		</div>
	</div>
</div>
<br>
<p id="LightningStrike"><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrike.png" alt="Neutral" align="middle"> Lightning Strike</b> (Titan)</p>
<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 10 seconds </p>
<p><b>Effect</b>: The production of a random building is multiplied by 500% for each Iron Stronghold. Also multiplicatively increase Faction Coins find chance based on your current amount of gems.</p>
<p><b>Formula</b>: (10 + log10(1 + x) ^ 2)%, where x is your current amount of gems.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/LightningStormSpellUpgrade.png" align="middle"> Lightning Storm</b></p>
<p><b>Requirement</b>: Cast Lightning Strike 100 times in a single game.</p>
<p><b>Effect</b>: Increase Lightning Strike bonus to 750% for each Iron Strongholds.</p>
<p><b>Cost</b>: 10 Dd (1e40), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/ThunderstormChallengeReward.png" align="middle"> Thunderstorm</b> (R25+)</p>
<p><b>Effect</b>: Further increase Faction Coin find chance from Lightning Strike based on building tiers it hits.</p>
<p><b>Formula</b>: (10 + log10(1 + x) ^ 2 * (1 + 0.2 * sum(T)))%, where x is your current amount of gems and T the Building Tier Lightning Strike hits.</p></p>
<p><b>Note</b>: Lightning Strike can hit multiple tiers at once if you have C375 and/or Titan Perk 4.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Lightning Strike Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Angel, Goblin</p>
			<p><b>Effect</b>: Iron Strongholds count for 75% more per tier for the spell bonus.</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier2.png" alt="Lightning Strike" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5e10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier3.png" alt="Lightning Strike" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier4.png" alt="Lightning Strike" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 13.61 Ocvg (1.361e88) - <b>FC</b> 81.03 T (8.103e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier5.png" alt="Lightning Strike" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier6.png" alt="Lightning Strike" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/LightningStrikeTier7.png" alt="Lightning Strike" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 5.287 Qi (5.287e18)</p>
		</div>
	</div>
</div>
<br>
<p id="Brainwave"><b><img src="http://musicfamily.org/realm/Factions/picks/Brainwave.png" alt="Neutral" align="middle"> Brainwave</b> (Faceless)</p>
<p><b>Cost</b>: 600 Mana - <b>Duration</b>: 600 seconds </p>
<p><b>Effect</b>: Increase production of all buildings by a cumulative 2% per second.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/FacelessOvermindSpellUpgrade.png" align="middle"> Faceless Overmind</b></p>
<p><b>Requirement</b>: Affiliate with the Faceless 5 times in a row.</p>
<p><b>Effect</b>: Increases Brainwave ticks to 3% per second.</p>
<p><b>Cost</b>: 10 Dd (1e40), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/FocusedThoughtsChallengeReward.png" align="middle"> Focused Thoughts</b> (R25+)</p>
<p><b>Effect</b>: Give Brainwave a headstart based on its activity time in this game, with a minimum of 1 minute.</p>
<p><b>Formula</b>: +1 second per 5 minutes of Brainwave active time (This Game).</p>
<br>
<p><b>Tier Upgrade</b>: +10 minutes per tier of Brainwave past tier 1.</p>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Brainwave Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Fairy, Undead</p>
			<p><b>Effect</b>: Brainwave headstarts for an additional 10 minutes per tier.</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier2.png" alt="Brainwave" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5E10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier3.png" alt="Brainwave" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier4.png" alt="Brainwave" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 13.61 Ocvg (1.360e88) - <b>FC</b> 81.03 T (8.103e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier5.png" alt="Brainwave" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier6.png" alt="Brainwave" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/BrainwaveTier7.png" alt="Brainwave" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 5.287 Qi (5.287e18)</p>
		</div>
	</div>
</div>
<br>
<p id="GrandBalance"><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalance.png" alt="Neutral" align="middle"> Grand Balance</b> (Druid)</p>
<p><b>Cost</b>: 1000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase the production of your least productive building based on the amount of the three most built ones.</p>
<p><b>Formula</b>: (25 * (x * y * z / (A + 3) ^ 6) ^ 0.9) where x, y and z are the number of your three most-built buildings and A is Ascension.</p>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/HallsofBalanceSpellUpgrade.png" align="middle"> Halls of Balance</b> (R25+)</p>
<p><b>Requirement</b>: Have Grand Balance affect Hall of Legends.</p>
<p><b>Effect</b>: Increases Grand Balance duration to 24 seconds and lower its cost by 200 mana.</p>
<p><b>Cost</b>: 10 Dd (1e40), A1+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/PrimalBalanceChallengeReward.png" align="middle"> Primal Balance</b></p>
<p><b>Effect</b>: Grand Balance now affects extra buildings based on Mana produced in this Reincarnation.</p>
<p><b>Formula</b>: (0.00001 * x) ^ (0.2 - 0.025 * A), where x is Mana produced in this Reincarnation and A is how many times you have ascended.</p>
<p><b>Effect</b>: When the amount of additional targets exceeds 11, increase the production of all affected buildings based on the exceeding amount. Does not suffer from Ascension penalties.</p>
<p><b>Formula</b>: (3 * (x - 10) ^ 1.5)%, where x is the amount of additional targets.</p>
<p><b>Note</b>: A table for the amount of Mana needed can be found <a target="_blank" href="http://musicfamily.org/realm/Druid/#DruidDCR">here</a>.</p>
<a id="Primal Balance"></a>
<div class="shlisting">
	<div class="shelementwhole">
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Grand Balance Tier 2-7</a></b> (R42+)</p>
		<div class="autohide">
			<p><b>Faction Coins Needed</b> Elven, Demon</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier2.png" alt="Grand Balance" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 57 Ocd (5.7e58) - <b>FC</b> 50 B (5E10)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier3.png" alt="Grand Balance" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 27.85 Tvg (2.785e73) - <b>FC</b> 2.013 T (2.013e12)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier4.png" alt="Grand Balance" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 13.61 Ocvg (1.360e88) - <b>FC</b> 81.03 T (8.103e13)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier5.png" alt="Grand Balance" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 6.649 Ttg (6.649e102) - <b>FC</b> 3.262 Qa (3.262e15)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier6.png" alt="Grand Balance" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 3.249 Octg (3.249e117) - <b>FC</b> 131.3 Qa (1.313e17)</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/GrandBalanceTier7.png" alt="Grand Balance" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 5.287 Qi (5.287e18)</p>
		</div>
	</div>
</div>
<hr>
<center><b>Ascension 1 Spells</b> (R40+)</center>
<p id="DragonsBreath"><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreath.png" alt="Neutral" align="middle"> Dragon's Breath</b> (Dragon, R46+)</p>
<p><b>Cost</b>: 1500 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Activates one of the following effects at random for 20 seconds.</p>
<p><b><font color="darkred">Red</font></b>: Increase the production of unique buildings based on the amount of Faction Coins found in this game.</p>
<p><b><font color="darkred">Formula</font></b>: (2 * (ln(1 + x) ^ 2)%, where x is the amount of Faction Coins found in this game.</p>
<br>
<p><b><font color="darkgreen">Green</font></b>: Increase the production of all buildings based on the amount of spells cast in this game. Higher bonuses are provided to lower building tiers.</p>
<p><b><font color="darkgreen">Formula</font></b>: (0.01 * x ^ 0.625 * (11 - T) ^ 5)%, where x is spells cast (this game) and T is the building tier. (1 for Farms, 11 for Hall of Legends).</p>
<br>
<p><b><font color="darkblue">Blue</font></b>: Multiplicatively increase your Mana Regeneration by 200%.</p>
<br>
<p><b><font color="white">White</font></b>: Temporarily increase the amount of assistants based on total time spent being Neutral.</p>
<p><b><font color="white">Formula</font></b>: +(30 * x ^ 0.65), where x is time spent as Neutral this Reincarnation</p>
<br>
<p><b><font color="black">Black</b></font>: Increase the production of all buildings based on Dragon's Breath activity time.</p>
<p><b><font color="black">Formula</font></b>: (0.5 * x ^ 0.75)%, where x is Dragon's Breath activity time.</p>
<br>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/DragonsRoarSpellUpgrade.png" align="middle"> Dragon's Roar</b></p>
<p><b>Requirement</b>: Cast Dragon's Breath while having at least 4 other active spells.</p>
<p><b>Effect</b>: Dragon's Breath multiplicatively increases Faction Coin find chance based on its duration.</p>
<p><b>Formula</b>: (6 * x ^ 0.6)%, where x is its duration.</p>
<p><b>Cost</b>: 10 Dd (1e40), A2+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/PrismaticBreathChallengeReward.png" align="middle"> Prismatic Breath</b> (R63+)</p>
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
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier2.png" alt="DragonsBreathTier2" align="middle"> Tier</b>: 2</p>
			<p><b>Cost</b> 69 Dvg (6.9e70) - <b>FC</b> 1 Qa (1e15) Dwarven, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier3.png" alt="DragonsBreathTier3" align="middle"> Tier</b>: 3</p>
			<p><b>Cost</b> 35.36 Ocvg (3.536e88) - <b>FC</b> 177.8 Qa (1.778e17) Dwarven, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier4.png" alt="DragonsBreathTier4" align="middle"> Tier</b>: 4</p>
			<p><b>Cost</b> 18.12 Qatg (1.812e106) - <b>FC</b> 31.62 Qi (3.162e19) Dwarven, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier5.png" alt="DragonsBreathTier5" align="middle"> Tier</b>: 5</p>
			<p><b>Cost</b> 9.289 Qaq (9.289e123) - <b>FC</b> 5.623 Sx (5.623e21) Dwarven, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier6.png" alt="DragonsBreathTier6" align="middle"> Tier</b>: 6</p>
			<p><b>Cost</b> 4.751 Sxqag (4.761e141) - <b>FC</b> 1 Sp (1e24) Dwarven, Drow</p>
			<p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonsBreathTier7.png" alt="DragonsBreathTier7" align="middle"> Tier</b>: 7</p>
			<p><b>Cost</b> Free - <b>FC</b> 177.8 Sp (1.778e26) Dwarven, Drow</p>
			<p><b>Note</b>: Dragon's Breath will cast a random Dragon's Breath spell for the 6th tier.</p>
			<p><b>Note</b>: Dragon's Breath will cast 2 random Dragon's Breath spell for the 7th tier.</p>
		</div>
	</div>
</div>
<br/>
<p><b>Mercenary</b>: Modified Tax Collection (R75+)</p>
<p id="ShareBenefits"><b><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefits.png" alt="Round Table" align="middle"> Share Benefits</b> (Good Mercenary)</p>
<p><b>Cost</b>: 200 Mana - <b>Duration</b>: Fixed to 20 seconds</p>
<p><b>Requirement</b>: Round Table</p>
<p><b>Effect</b>: Alters Tax Collection with new name and effect (still counts as Tax Collection for all purposes).</p>
<p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level.</p>
<p><b>Effect</b>: Also produce Tax Collection casts per second based on your Maximum Mana.</p>
<p><b>Formula (Production bonus)</b>: ((((1 + 0.01 * (120 + 1.25 * ln(1 + 90 + x) ^ 1.25)) ^ T) - 1) * 100)%, where x is Tax Collection worth in seconds and T the Share Benefits tier.</p>
<p><b>Formula (Faction Coin find chance multiplier)</b>: 120 ^ (0.25 * T)%, where T is Share Benefits.</p>
<p><b>Formula (Additional Tax Collection)</b>: +(0.01 * x * T), where x is Maximum Mana and T Share Benefits tier.</p>
<p><b>Note</b>: Can be cast up to 36 tiers (Ascension 1) / 99 tiers (Ascension 3).</p>
<p><b>Note</b>: Each tier costs x2/1.5 (with S1275) more mana than the previous one until Tier 40 - above x4/x2.25 than the previous one.<p>
<p><b>Note</b>: Drains every second Mana equal to its current cost.</p>
<p><b>Note</b>: Upgrades that cast free Tax Collection are disabled.</p>
<br/>
<p id="ReapInterests"><b><img src="http://musicfamily.org/realm/Factions/picks/ReapInterests.png" alt="Tyrant Garrison" align="middle"> Reap Interests </b> (Evil Mercenary)</p>
<p><b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds</p>
<p><b>Requirement</b>: Dark Covenant</p>
<p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.</p>
<p><b>Formula</b>: *(50000 * log10(8 + 0.1 * x)), where x is amount of Reap Interests casts.</p>
<p><b>Note</b>: Upgrades that cast free Tax Collection are treated as Reap Interests casts.</p>
<br/>
<p id="AppraisalVantage"><b><img src="http://musicfamily.org/realm/Factions/picks/AppraisalVantage.png" alt="Freemason's Hall" align="middle"> Appraisal Vantage</b> (Neutral Mercenary)</p>
<p><b>Cost</b>: 200 Mana - <b>Duration</b>: 0 seconds</p>
<p><b>Requirement</b>: Secret Exchange</p>
<p><b>Effect</b>: Generates additional Faction Coins based on the amount of assistants you own.</p>
<p><b>Formula</b>: (x * y ^ 1.275), where x is assistants owned, y is Faction coin chance.</p>
<p><b>Note</b>: Upgrades that cast free Tax Collection are treated as Appraisal Vantage casts.</p>
<hr>
<b><center>Ascension 2</b> (R100+)</center>
<b><center>Secondary Alignment Spells</center></b>
<p id="TemporalFlux"><b><img src="http://musicfamily.org/realm/Factions/picks/TemporalFlux.png" alt="Temporal Flux" align="middle"> Temporal Flux</b> (Proof of Order)</p>
<p><b>Requirement</b>: Ascension 2</p>
<p><b>Cost</b>: 5000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase Unique building production by time spent this game.</p>
<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
<p><b>Formula</b>: (3.75 * (x / 60) ^ 0.825)%, where x is time in seconds this game.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/TemporalFluxTier2.png" alt="Temporal Flux" align="middle"> Tier 2</b> (R120+)</p>
<p><b>Requirement</b>: Lantern of Guidance (Artifact)</p>
<p><b>Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
<p><b>FC Cost</b>: 1 Sp (1e24) Angel, Undead, Dwarven and Drow Coins.</p>
<br/>
<p id="Maelstrom"><b><img src="http://musicfamily.org/realm/Factions/picks/Maelstrom.png" alt="Maelstrom" align="middle"> Maelstrom</b> (Proof of Chaos)</p>
<p><b>Requirement</b>: Ascension 2</p>
<p><b>Cost</b>: 3500 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: Mana produced, trophies unlocked, Faction Coins found or amount of assistants</p>
<p><b>Formula (Mana)</b>: (0.02 * (log10(1 + x)) ^ 5)%, where x is Mana produced this game.</p>
<p><b>Formula (Trophies)</b>: (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
<p><b>Formula (Faction Coins)</b>: (0.01 * (log10(1 + x)) ^ 4)%, where x is Faction Coins found this game.</p>
<p><b>Formula (Assistants)</b>: (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/MaelstromSpellTier2.png" alt="Maelstrom" align="middle"> Tier 2</b> (R120+)</p>
<p><b>Requirement</b>: Oil Lamp (Artifact)</p>
<p><b>Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
<p><b>FC Cost</b>: 1 Sp (1e24) Fairy, Demon, Dwarven and Drow Coins.</p>
<br/>
<p id="AllCreation"><b><img src="http://musicfamily.org/realm/Factions/picks/AllCreation.png" alt="All Creation" align="middle"> All Creation</b> (Proof Of Balance) </p>
<p><b>Requirement</b>: Ascension 2</p>
<p><b>Cost</b>: 6000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Effect</b>: Increase production of all buildings based on your Mana Regeneration rate.</p>
<p><b>Formula</b>:  (0.15 * ln(1 + x) ^ 3 + 0.75 * x ^ 0.25)%, where x is your Mana Regeneration.</p>
<p><b>Effect</b>: Also multiplicatively increase Faction Coin find chance based on your Mana Regeneration rate.</p>
<p><b>Formula</b>: (4.5 * ln(1 + x) ^ 2.25 + 12.5 * x ^ 0.125)%, where x is your Mana Regeneration.</p>
<br/>
<p><b><img src="http://musicfamily.org/realm/Factions/picks/AllCreationSpellTier2.png" alt="All Creation" align="middle"> Tier 2</b> (R120+)</p>
<p><b>Requirement</b>: Spark of Life (Artifact)</p>
<p><b>Coin Cost</b>: 120 Notg (1.2e122) Emerald coins</p>
<p><b>FC Cost</b>: 1 Sp (1e24) Elven, Goblin, Dwarven and Drow Coins.</p>
<hr>
<b><center>Ascension 2</b> (R125+)</center>
<b><center>Elite Faction Spells</center></b>
<p id="Precognition"><b><img src="http://musicfamily.org/realm/Factions/picks/Precognition.png" alt="Order" align="middle"> Precognition</b> (Archon)</p>
<p><b>Cost</b>: 123456 Mana - <b>Duration</b>: 60 seconds</p>
<p><b>Effect</b>: Buildings, Assistants, Royal Exchanges, Spells cast and Clicks count more based on Mana produced in this game.</p>
<p><b>Formula</b>: (ln(1 + x) ^ 1.25)%, where x is Mana produced in this game.</p>
<p><b>Note</b>: Formula Improved to (1.25 * ln(1 + x) ^ 1.5)% with AR2.</p>
<br/>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/ChronoLoadingSpellUpgrade.png" align="middle"> Chrono Loading</b></p>
<p><b>Requirement</b>: R125+, Cast Precognition with at least 100 Qa (1e17) mana regeneration.</p>
<p><b>Note</b>: Precognition raises regen itself. Make sure that you have 100 Qa (1e17) with it not active</p>
<p><b>Effect</b>: A fraction of Precognition duration is added to time spent in this game.</p>
<p><b>Formula</b>: (100 * ln(1 + x / 60) ^ 2.5), where x is its duration.</p>
<p><b>Effect</b>: Also scale off invisible spell duration modifiers.</p>
<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/OmniscienceChallengeReward.png" align="middle"> Omniscience</b> (R153+)</p>
<p><b>Effect</b>: Precognition also makes Excavations, Artifacts, Reincarnations, Research points and Lineage levels count 15% more.</p>
<br/>
<p id="LimitedWish"><b><img src="http://musicfamily.org/realm/Factions/picks/LimitedWish.png" alt="Chaos" align="middle"> Limited Wish</b> (Djinn)</p>
<p><b>Cost</b>: 888888 mana - <b>Duration</b>: Fixed to 12 seconds</p>
<p><b>Effect</b>: Provide a random effect based on your chosen base alignment, for 12 seconds. The duration of the spell cannot be modified. Its power increases as you continue casting this spell.</p>
<p><b>Formula</b>: (2.25 * (ln(1 + x) ^ 1.35) * y ^ 0.45)%, where x is Limited Wish activity time in this game and y is a random number between 1 and Limited Wish casts this game rolled on cast.</p>
<p><b>Possible Effects</b></p>
<p><b>1</b>: Increase the production of all buildings.</p>
<p><b>Good Alignment</b></p>
<p><b>2</b>: Temporarily increase Assistants.</p>
<p><b>3</b>: All spells durations count more.</p>
<p><b>4</b>: Multiplicatively increase Mana Regeneration.</p>
<p><b>Evil Alignment</b></p>
<p><b>2</b>: Multiplicatively increase Trophy count and Offline Bonus.</p>
<p><b>3</b>: Multiplicatively increase Mana Regeneration.</p>
<p><b>4</b>: Multiplicatively increase Faction Coin find chance.</p>
<p><b>Neutral Alignment</b></p>
<p><b>2</b>: Multiplicatively increase Maximum Mana.</p>
<p><b>3</b>: All spells durations count more.</p>
<p><b>4</b>: Multiplicatively increase Faction Coin find chance.</p>
<br/>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/PersistentEntropySpellUpgrade.png" align="middle"> Persistent Entropy</b></p>
<p><b>Requirement</b>: R125+, Cast Limited Wish 100 times within 30 minutes of a new game.</p>
<p><b>Effect</b>: Adds 150 casts to Limited wish formula.</p>
<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/FullWishChallengeReward.png" align="middle"> Full Wish</b> (R153+)</p>
<p><b>Effect</b>: Production of all buildings effect of Limited Wish is active on every cast and is no longer a possible random outcome.</p>
<br/>
<p id="InfiniteSpiral"><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" alt="Infinite Spiral" align="middle"> Infinite Spiral</b> (Makers)</p>
<p><b>Cost</b>: 505000 mana - <b>Duration</b>: 10 seconds</p>
<p><b>Effect</b>: Temporarily increase assistants based on Maximum Mana (multiplicative).</p>
<p><b>Formula</b>: (10 * ln(1 + x) ^ 1.25)%, where x is your Maximum Mana.</p>
<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coin find chance.</p>
<p><b>Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is your Faction Coin find chance.</p>
<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
<p><b>Formula</b>: (10 + 0.05 * (x * y) ^ 0.75)%, where x is excavations done this Reincarnation (NOT current excavation count), y is free and ruby Excavation Resets this Reincarnation</p>
<br/>
<p><b>Spell Trophy & Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/RealityCraterSpellUpgrade.png" align="middle"> Reality Crater</b></p>
<p><b>Requirement</b>: R125+, Cast Infinite Spiral with at least 10 excavation resets this game.</p>
<p><b>Effect</b>: Infinite Spiral also reduces excavation cost multiplier based on assistants owned.</p>
<p><b>Formula</b>: -(0.001 * log(1 + x)), where x is assistants owned.</p>
<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
<p><b>Challenge Upgrade</b>: <b><img src="http://musicfamily.org/realm/Factions/picks/GaiasCradleChallengeReward.png" align="middle"> Gaia's Cradle</b> (R153+)</p>
<p><b>Effect</b>: All Infinite Spiral effects scale 15% faster.</p>
<hr>
<p id="Catalyst"><b><img src="http://musicfamily.org/realm/Factions/picks/Catalyst.png" alt="Catalyst" align="middle"> Catalyst</b></p>
<p><b>Spell Type</b>: (Chaos) Djinn Faction Spell (R130+)</p>
<p><b>Cost</b>: 500,000 Mana - <b>Duration</b>: Fixed to 60 seconds</p>
<p><b>Requirement</b>: R130+, Djinn Bloodline</p>
<p><b>Effect</b>: Imitates a random vanilla or base alignment spell at tier 7 for 60 seconds. This spell's duration cannot be modified.</p>
<p><b>Note</b>: Having access to this spell also enables the spell trophies and the challenge rewards of those spells.</p>
<p><b>Note</b>: Can not cast a spell that is already available.</p>
<p><b>Note</b>: Does not give access to Holy Frenzy for Neutral alignment.</p>
<hr>
<p id="ChaosMadness"><b><img src="http://musicfamily.org/realm/Factions/picks/ChaosMadness.png" alt="Chaos Madness" align="middle"> Chaos Madness</b> (Chaos Mercenary)</p>
<p><b>Spell Type</b>: (Chaos) Mercenary Faction Spell (R194+)</p>
<p><b>Cost</b>: 500,000 Mana - <b>Duration</b>: Fixed to 20 seconds</p>
<p><b>Requirement</b>: Mercenary Challenge 2 active</p>
<p><b>Effect</b>: Grants the effect of a random lineage, with the level of your highest lineage for 20 seconds.</p>
<p><b>Note</b>: Does not select a lineage that is already available.</p>
<hr>
<p id="TwistingNether"><b><img src="http://musicfamily.org/realm/Factions/picks/TwistingNether.png" alt="Twisting Nether" align="middle"> Twisting Nether</b></p>
<p><b>Spell Type</b>: Faction Spell (R220+)</p>
<p><b>Cost</b>: 1,000,000 Mana - <b>Duration</b>: 20 seconds</p>
<p><b>Requirement</b>: Twisting Nether (Fairy/Undead) Legacy Combo</p>
<p><b>Effect</b>: Lineage Levels count +1 more per Tier.</p>
<p><b>Note</b>: Twisting Nether counts as a faction spell, but has no alignments for upgrades such as Djinn Challenge 5.</p>
<?php include "../scripts/footer.html"; ?>
