<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="/realm/Factions/picks/EventsTopPage.png"></h6>
	<p>Realm Grinder Events take place at annual festivals such as Thanksgiving, Christmas, Easter etc. Playing during an Event gives the players special one-time Trophies and temporary and/or permanent perks.</p>
	<p>All Event perks work only during the event. All event items, resources (including current stack size), event spell casts and unlock progress for quest and feats persist during the event, throughout Abdications, Reincarnations and Ascensions.</p>
	<p><b>Note: All Events are based on UTC Time.</a></b>
	<p><b>Current UTC time:</b></p>
	<p id="currentTime">
	</p>
	<p><b>Event will start in</b></p>
	<p id="start">
	</p>
	<p><b>Event will end in</b></p>
	<p id="end">
	</p>
	<script>
		var currentTime = new Date().getTime();
		var countDownDate1 = new Date("Oct 28, 2022 12:01:00 UTC").getTime();
		var countDownDate2 = new Date("Nov 04, 2022 19:59:00 UTC").getTime();
		var x = setInterval(function() {
			var now = new Date().getTime();
			var distance = countDownDate1 - now;
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			if (distance < 0) {
				document.getElementById("start").innerHTML = "Started";
			}
			else
			{
				document.getElementById("start").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
			}

			var now = new Date().getTime();
			var distance = countDownDate2 - now;
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			if (distance < 0) {
				document.getElementById("end").innerHTML = "Last Event has ended";
				document.getElementById("start").innerHTML = "To be announced";
			}
			else
			{
				document.getElementById("end").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
			}

			document.getElementById("currentTime").innerHTML = new Date().toUTCString();
		}, 1000);
	</script>
	<br/>
	<a id="Events"></a>
	<center>
		<table class="numtable">
			<thead>
				<tr>
					<th>Rubies</th>
					<th colspan="1">Event</th>
					<th colspan="8">Total Cumulative Bonus: 501%</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>201 Total </td>
					<td></td>
					<td>2015</td>
					<td>2016</td>
					<td>2017</td>
					<td>2018</td>
					<td>2019</td>
					<td>2020</td>
					<td>2021</td>
					<td>2022</td>
				</tr>
				<tbody>
					<tr>
						<td>21 (3)</td>
						<td>Valentines</td>
						<td></td>
						<td>4%</td>
						<td>4%</td>
						<td>4%</td>
						<td>4%</td>
						<td>4%</td>
						<td>4%</td>
						<td>4%</td>
					</tr>
					<tr>
						<td>56 (8)</td>
						<td>Easter</td>
						<td></td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
					</tr>
					<tr>
						<td>0</td>
						<td>April Fool's</td>
						<td></td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
					</tr>
					<tr>
						<td>0</td>
						<td>Anniversary</td>
						<td></td>
						<td></td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
					</tr>
					<tr>
						<td>0</td>
						<td>Goblin Invasion</td>
						<td></td>
						<td></td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
					</tr>
					<tr>
						<td>0</td>
						<td>Summer Festival</td>
						<td></td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
						<td>8%</td>
					</tr>
					<tr>
						<td>0</td>
						<td>Idillium</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>12%</td>
						<td>12%</td>
						<td>12%</td>
						<td>12%</td>
					</tr>
					<tr>
						<td>56 (8)</td>
						<td>Halloween</td>
						<td></td>
						<td>11%</td>
						<td>11%</td>
						<td>11%</td>
						<td>11%</td>
						<td>11%</td>
						<td>11%</td>
						<td>11%</td>
					</tr>
					<tr>
						<td>0</td>
						<td>Thanksgiving</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
						<td>&#10004;</td>
					</tr>
					<tr>
						<td>12 (12)</td>
						<td>Ruby Shine</td>
						<td></td>
						<td></td>
						<td>&#10004;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>56 (8)</td>
						<td>Christmas</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
						<td>14%</td>
					</tr>
				</tbody>
		</table>
	</center>
	<hr>
	<center>
		<p><b>Event Panel</b></p>
		<p>Event-related items can be viewed in the Event Panel, accessible by clicking the Events button (in game) on the left bottom tab.</p>
		<p><img src="/realm/Factions/picks/TotalEvent.png" usemap="#TotalEvent.-map">
		<map name="TotalEvent.-map">
			<area research="
			<p><b><img src='/realm/Factions/picks/Thanksgiving.png' align='middle'> Thanksgiving</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Play during Thanksgiving</p>
			<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
			" coords="3,3,57,57" shape="rect">
			<area research="
			<p><b><img src='/realm/Factions/picks/RubyShineUpgrade.png' align='middle'> Ruby Shine</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Play during the Ruby Shine event.</p>
			<p><b>Effect</b>: Increase the production of all buildings based on the amount of Rubies you own for the duration of the Ruby Shine event.</p>
			<p><b>Formula</b>: (x ^ 1.15)%, where x is Rubies owned.</p>
			<p><b>Note</b>: During the Ruby Shine event you will receive 3 Rubies per day.</p>
			" coords="63,3,117,57" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/SantasHelpers2016.png' align='middle'> Santa's Helpers</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Play as Elves during the Christmas season, and get at least 50 assistants.</p>
			<p><b>Note</b>: Dwarven is allowed.</p>
			<p><b>Note</b>: Unlockable in R7 using undead bloodline.</p>
			" coords="123,3,177,57" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/Unholidays2016.png' align='middle'> Unholidays</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Ally with Undead, purchase Undead Trade Treaty, Undead Friendship Pact, and Undead Alliance, during the Christmas season.</p>
			" coords="183,3,237,57" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/Snowpile42016.png' align='middle'> Snowpile</b></p>
			<p><b>Type</b>: Feat, 4 Quest Series</p>
			<p><b>Requirement</b>: Collect 1000, 5000, 12000 and 25000 Snowballs.</p>
			<p><b>Effect</b>: Full Series Event Bonus: 7%</p>
			" coords="243,3,297,57" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/GiftCollector2016.png' align='middle'> Gift Collector</b></p>
			<p><b>Type</b>: Feat, 4 Quest Series</p>
			<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
			<p><b>Effect</b>: Full Series Event Bonus: 7%</p>
			" coords="303,3,357,57" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/FreezingHell2018.png' align='middle'> Freezing Hell</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Snowballs with a single click while affiliated with the Demons.</p>
			" coords="363,3,417,57" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/PerfectSnowflake.png' align='middle'> Perfect Snowflake</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect Snowballs to find the Perfect Snowflake. Your chances increase as you collect more.</p>
			<p><b>Chance</b>: min(1, (x ^ 2 / 9,000,000,000 (9 T))), where x is snowballs collected.</p>
			<p><b>Effect</b>: Reduce Royal Exchange cost multiplier by 0.01.</p>
			" coords="3,63,57,117" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/SnowballFight.png' align='middle'> Snowball Fight</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Snowballs while Call to Arms is active.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="63,63,117,117" shape="rect">
			<area research="
			<p><b>Christmas</b></p>
			<p><b><img src='/realm/Factions/picks/GoldenSnowballs.png' align='middle'> Golden Snowballs</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Play as Goblin during the Christmas season, and get at least 1 Nod (1e60) coins in a single click.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase clicking reward by 50%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="123,63,177,117" shape="rect">
			<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/Valentine2017Quest4.png' align='middle'> Feel the Love</b></p>
			<p><b>Type</b>: Feat, 3 Quest Series</p>
			<p><b>Requirement</b>: Purchase 100, 250, and 500 Heart Upgrades.</p>
			<p><b>Effect</b>: Full Series Event Bonus: 4%</p>
			" coords="183,63,237,117" shape="rect">
			<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/ILoveYouinEveryLanguage2017.png' align='middle'> I Love You in Every Language</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Cast Call to Love at least once with 6 different factions.</p>
			" coords="243,63,297,117" shape="rect">
			<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/AssistantLove2018.png' align='middle'> Assistant Love</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Reach 50 assistants with Heart Upgrades only.</p>
			<p><b>Note</b>: Assistants from other upgrades do not effect this feat, just get 50 assistants from Heart Upgrades.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new color option for the mana bar.</p>
			" coords="303,63,357,117" shape="rect">
			<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/ChocolateBoxFeat2019.png' align='middle'> Chocolate Box</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Have at least 72 hours of Call to Love activity time during the Valentine event.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase your event bonus by a multiplicative 50%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
			" coords="363,63,417,117" shape="rect">
				<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/UnrequitednessFeat2021.png' align='middle'> Unrequitedness</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Cast Call to Love while being affiliated with a Neutral Faction and with at least 2 hours of activity time with the spell during the Valentine event.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase Neutral production by 50%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
			" coords="3,123,57,177" shape="rect">
			<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/FairyLove.png' align='middle'> Fairy Love</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: While affiliated with the fairies, click 1000 times during the Valentine event.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="63,123,117,177" shape="rect">
			<area research="
			<p><b>Valentines</b></p>
			<p><b><img src='/realm/Factions/picks/BurningPassion.png' align='middle'> Burning Passion</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Have at least 2 hour of Hellfire Blast activity time during the Valentine event.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="123,123,177,177" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/EggHunter7000Easter2017.png' align='middle'> Egg Hunter</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect 7000 Common Eggs. Buying Eggs will not influence this total.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="183,123,237,177" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/EggCollection8Easter2017.png' align='middle'> Egg Collection</b></p>
			<p><b>Type</b>: Feat, 4 Quest Series</p>
			<p><b>Requirement</b>: Find 1, 3, 5 and 8 Unique eggs</p>
			<p><b>Effect</b>: Full Series Event Bonus: 7%</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="243,123,297,177" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/GoldenChickenEaster2017.png' align='middle'> Golden Chicken</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 eggs with a single click while playing as Goblin or Droblin (1m per egg = 8h)</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="303,123,357,177" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/GreyEaster2017.png' align='middle'> Grey Easter</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Find at least 1 Rare Egg while playing with no faction. To get this Feat simply make a big stack, abdicate and then collect before aligning or affiliating.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="363,123,417,177" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/BunnyHelpers2018.png' align='middle'> Bunny Helpers</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Eggs with a single click while having exactly 480 assistants.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="3,183,57,237" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/ChocolateEgg2019.png' align='middle'> Chocolate Egg</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Eggs with a single click while having at least 3 active spells.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
			<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="63,183,117,237" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/Eggsceptional.png' align='middle'> Eggsceptional</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a full stack of 720 Eggs at any time during the Easter event.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="123,183,177,237" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/RottenEgg2021.png' align='middle'> Rotten Egg</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a full stack of 720 Eggs while being affiliated with the Undead.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase offline production by 100%.</p></p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="183,183,237,237" shape="rect">
			<area research="
			<p><b>Easter</b></p>
			<p><b><img src='/realm/Factions/picks/Colorfull.png' align='middle'> Colorfull</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Eggs while Fairy Chanting is active.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="243,183,297,237" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/ChillOut.png' align='middle'> Chill Out</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect 480 Frost Orbs while affiliated with the Summeraans.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="303,183,357,237" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/WarmUp.png' align='middle'> Warm Up</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect 480 Flame Orbs while affiliated with the Winterly.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="363,183,417,237" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/SummeraanAlliance.png' align='middle'> Summeraan Champion</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Purchase all 3 Summeraan upgrades</p>
			<p><b>Effect</b>: Completing the 3 Quest series will increase your Event Bonus by 4%</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="3,243,57,297" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/WinterlyAlliance.png' align='middle'> Winterly Champion</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Purchase all 3 Winterly upgrades.</p>
			<p><b>Effect</b>: Completing the 3 Quest series will increase your Event Bonus by 4%</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="63,243,117,297" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/ClimateForecast.png' align='middle'> Climate Forecast</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 of any Orbs with a single click while unaffilliated with either of the Summer Festival faction.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="123,243,177,297" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/Frostmelter.png' align='middle'> Frostmelter</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 of any Orbs with a single click while having all three upgrades of either Summeraan or Winterly.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on clicks made all time.</p>
			<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is clicks made all time.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="183,243,237,297" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/LateSpringtime.png' align='middle'> Late Springtime</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: While affliated with the Fairies, collect a stack of 720 Orbs.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="243,243,297,297" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/SearingSummer.png' align='middle'> Searing Summer</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Flame Orbs while Holy Light and Call to Arms are active simultaneously.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase the production of all buildings by 50%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="303,243,357,297" shape="rect">
			<area research="
			<p><b>Summer Festival</b></p>
			<p><b><img src='/realm/Factions/picks/MidsummerNightsDream.png' align='middle'> Midsummer Night's Dream</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Frost Orbs while Night Time is active.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="363,243,417,297" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/MonsterBreederFeat.png' align='middle'> Monster Breeder</b></p>
			<p><b>Type</b>: Feat, 3 part Quest</p>
			<p><b>Requirement</b>: Grow all monsters to level 50.</p>
			<p><b>Effect</b>: Completing the 3 Quest series step will increase your Event Bonus by 4%</p>
			" coords="3,303,57,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/PumpkinSmasher4.png' align='middle'> Pumpkin Smasher</b></p>
			<p><b>Type</b>: Feat, 4 part Quest</p>
			<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
			<p><b>Effect</b>: Completing the 4 Quest series will increase your Event Bonus by 7%</p>
			" coords="63,303,117,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/Spooky.png' align='middle'> Spooky</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Ectoplasm with a single click while using Ghost monster pet.</p>
			" coords="123,303,177,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/BloodThirsty.png' align='middle'> Bloodthirsty</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Blood with a single click while using Vampire monster pet.</p>
			" coords="183,303,237,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/BonePicker.png' align='middle'> Bonepicker</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Bones with a single click while using Skeleton monster pet.</p>
			" coords="243,303,297,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/HalloweenMagic.png' align='middle'> Halloween Magic</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Cast each Halloween Spell at least 100 times in this reincarnation.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="303,303,357,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/SpectralSurge.png' align='middle'> Spectral Surge</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 of each resource in a single run.(This Game)</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Turn Spiritual Surge into Spectral Surge, and multiplies Spectral Surge base bonus by the Cumulative Event Bonus.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="363,303,417,357" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/PumpkinCollector.png' align='middle'> Pumpkin Collector</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 of any resource after having smashed at least 3 Pumpkins..</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="3,363,57,417" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/Monstrous.png' align='middle'> Monstrous</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at stack of at least 720 of any resource while using any level 50 monster.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 20%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="63,363,117,417" shape="rect">
			<area research="
			<p><b>Halloween</b></p>
			<p><b><img src='/realm/Factions/picks/CurseoftheFallen.png' align='middle'> Curse of the Fallen</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Have at least 2 hours of Holy Light activity time while using a level 50 Vampire. (BUGGED: check is 2 hours this game with any Vampire and only when Holy Light is cast).</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="123,363,177,417" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/SacredHoliness2017.png' align='middle'> Sacred Holiness</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Holy Symbols with a single click while affiliated with the Angels.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="183,363,237,417" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/DarkestHeresy2017.png' align='middle'> Darkest Heresy</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click while affiliated with the Demon.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="243,363,297,417" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/Indifference2018.png' align='middle'> Indifference</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 of any resource with a single click while affiliated with a Neutral faction.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="303,363,357,417" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/SeraphimChampion2017.png' align='middle'> Seraphim Champion</b></p>
			<p><b>Type</b>: Feat, 3 part Quest Series Seraphim Alliance</p>
			<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
			<p><b>Effect</b>: Adds 4% cumulative bonus to you total Event bonus.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="363,363,417,417" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/AsmondeanChampion2017.png' align='middle'> Asmodean Champion</b></p>
			<p><b>Type</b>: Feat, 3 part Quest Series Asmodean Alliance</p>
			<p><b>Requirement</b>: Purchase all Asmondean Upgrades.</p>
			<p><b>Effect</b>: Adds 4% cumulative bonus to you total Event bonus.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="3,423,57,477" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/WorldRestoration.png' align='middle'> World Restoration</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Have the same amount of Holy Symbols and Lava Stone at any given time, while having at least 1400.(Total)</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase the production of aligned buildings based on time spent as your least used alignment in this Reincarnation.</p>
			<p><b>Formula</b>: (25 + 0.5 * x ^ 0.5)%, where x is your least used alignment in this Reincarnation (in seconds).</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="63,423,117,477" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/FrenziedArmy2021.png' align='middle'> Frenzied Army</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while Blood Frenzy and Call to Arms are active simultaneously.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase assistants by 10%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="123,423,177,477" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/PlanarTax.png' align='middle'> Planar Tax</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 of any resource in a game with at least 1000 Tax Collection casts.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="183,423,237,477" shape="rect">
			<area research="
			<p><b>Anniversary - Blood War</b></p>
			<p><b><img src='/realm/Factions/picks/EternalBattle.png' align='middle'> Eternal Battle</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while having 3 upgrades of any Blood War faction.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="243,423,297,477" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/GoblinsBane2017.png' align='middle'> Goblins Bane</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="303,423,357,477" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/GoblinsCommander2017.png' align='middle'> Goblin's Commander</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="363,423,417,477" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/GoblinsEverywhere!2017.png' align='middle'> Goblins Everywhere!</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="3,483,57,537" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/GoldHunt2018.png' align='middle'> Gold Hunt</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 480 Goblin Crowns with a single click while affiliated with Goblins.</p>
			<p><b>Note</b>: As prestige, only prestige will count. For example, Angel/Dwarven counts as Dwarven for feat purposes.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="63,483,117,537" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/TheUndecidedArmada.png' align='middle'> The Undecided Armada</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 480 Goblin Crowns while having no faction.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase assistants based on the amount of buildings you own (multiplicative).</p>
			<p><b>Formula</b>: (0.65 * x ^ 0.35)%, where x is the amount of buildings you own.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="123,483,177,537" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/PlatinumTrophy.png' align='middle'> Platinum Trophy</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: While affiliated with the Goblins and having supported the Army at least 70 times, collect a stack of at least 720 Goblin Crowns.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="183,483,237,537" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/BloodyCrown.png' align='middle'> Bloody Crown</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Goblin Crowns while Blood Frenzy and Call to Arms are active simultaneously.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Increase production bonus from Gems by a multiplicative 10%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="243,483,297,537" shape="rect">
			<area research="
			<p><b>Goblin Invasion</b></p>
			<p><b><img src='/realm/Factions/picks/UnderaGreenSun.png' align='middle'> Under a Green Sun</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Goblin Crowns while having at least 2 hours of Goblin's Greed activity time in this Reincarnation (BUGGED: check is 2 hours this game).</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="303,483,357,537" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/GentleCollector.png' align='middle'> Gentle Collector</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 720 Entropic Drops with a single click while affiliated with the Fairies.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="363,483,417,537" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/AggressiveCollector.png' align='middle'> Aggressive Collector</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect at least 720 Crystal Prisms with a single click while affiliated with the Undead.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="3,543,57,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/GoldenAge.png' align='middle'> Golden Age</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Cast Remnant spells at least 1000 times.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="63,543,117,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/OrderRestoration.png' align='middle'> Order Restoration</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Upgrade Order Remnant to Level 15.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="123,543,177,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/ChaosRestoration.png' align='middle'> Chaos Restoration</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Upgrade Chaos Remnant to Level 15.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="183,543,237,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/BalanceRestoration.png' align='middle'> Balance Restoration</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Upgrade Balance Remnant to Level 15.</p>
			<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
			" coords="243,543,297,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/BalancedCollector.png' align='middle'> Balanced Collector</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: While affiliated with the Druids, collect a stack of at least 720 Equilibrium Fragments.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
			" coords="303,543,357,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/IdilliumExplorer.png' align='middle'> Idillium Explorer</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Cast a Remnant spell with 6 different factions.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
			<p><b>Effect</b>: Reduce the cost of all spells by 10%.</p>
			<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
			" coords="363,543,417,597" shape="rect">
			<area research="
			<p><b>Idillium</b></p>
			<p><b><img src='/realm/Factions/picks/BeyondtheLookingGlass.png' align='middle'> Beyond the Looking Glass</b></p>
			<p><b>Type</b>: Feat</p>
			<p><b>Requirement</b>: Collect a stack of at least 720 Equilibrium Fragments while Moon Blessing is active.</p>
			<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
			" coords="3,603,57,657" shape="rect">
		</map>
	</p>
	</center>
	<hr>
	<br style="clear: both" />
	<a id="ManaColors"></a>
	<center>
		<table class="ManaColors">
			<thead>
				<tbody>
					<tr>
						<th colspan="3">Event Mana Colors Options</th>
					</tr>
					<tr>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleStandard.png" width="54" height="54" /></center>
							<center>Standard</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleValentine.png" width="54" height="54" /></center>
							<center>Valentine</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleEaster.png" width="54" height="54" /></center>
							<center>Easter</center>
						</td>
					</tr>
					<tr>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleBloodwar.png" width="54" height="54" /></center>
							<center>Blood War</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleGoblinInvasion.png" width="54" height="54" /></center>
							<center>Goblin Invasion</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleSummerFest.png" width="54" height="54" /></center>
							<center>Summer Festival</center>
						</td>
					</tr>
					<tr>
						<td>
							<center><img src="/realm/Factions/picks/ManaBubbleHalloween.png" width="54" height="54" /></center>
							<center>Halloween</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ChristmasMana.png" width="54" height="54" /></center>
							<center>Christmas</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/IdilliumMana.png" width="54" height="54" /></center>
							<center>Idillium</center>
						</td>
					</tr>
				</tbody>
			</thead>
		</table>
	</center>
	<br style="clear: both" />
	<a id="ManaColors"></a>
	<center>
		<table class="ManaColors">
			<thead>
				<tbody>
					<tr>
						<th colspan="3">Event Coin Particles Options</th>
					</tr>
					<tr>
						<td>
							<center><img src="/realm/Factions/picks/FactionCoinTrophy6.png" width="54" height="54" /></center>
							<center>Standard</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ParticleValentine.png" width="54" height="54" /></center>
							<center>Valentine</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ParticleEgg1.png" width="54" height="54" /></center>
							<center>Easter</center>
						</td>
					</tr>
					<tr>
						<td>
							<center><img src="/realm/Factions/picks/ParticleCloud1.png" width="54" height="54" /></center>
							<center>Blood War</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ParticleNugget.png" width="54" height="54" /></center>
							<center>Goblin Invasion</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/SummerParticles.gif" width="54" height="54" /></center>
							<center>Summer Festival</center>
						</td>
					</tr>
					<tr>
						<td>
							<center><img src="/realm/Factions/picks/ParticleIdillium.png" width="54" height="54" /></center>
							<center>Idillium</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ParticleHalloween.png" width="54" height="54" /></center>
							<center>Halloween</center>
						</td>
						<td>
							<center><img src="/realm/Factions/picks/ParticleChristmas.png" width="54" height="54" /></center>
							<center>Christmas</center>
						</td>
					</tr>
				</tbody>
			</thead>
		</table>
	</center>
	<br>
	<p><b>Requirement</b>: If you unlock certain event feats, you will permanently unlock a new color option for the mana bowl or new coin particles from that event.</p>
	<p>Once unlocked these can be changed in the Event tab. (Only while no event is going on)</p>
	<hr>
	<div class="shlisting">
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Seasonal Event Upgrades</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p><b>Note</b>: Once unlocked, these upgrades are available during all Seasonal Events.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/ChocolateBoxFeat2019.png" align="middle"> Chocolate Box (Valentine)</b></p>
				<p><b>Effect</b>: Increase your event bonus by a multiplicative 50%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/UnrequitednessFeat2021.png" align="middle"> Unrequitedness (Valentine)</b></p>
				<p><b>Effect</b>: Increase Neutral production by 50%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/ChocolateEgg2019.png" align="middle"> Chocolate Egg (Easter)</b></p>
				<p><b>Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
				<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/RottenEgg2021.png" align="middle"> Rotten Egg (Easter)</b></p>
				<p><b>Effect</b>: Increase offline production by 100%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/WorldRestoration.png" align="middle"> World Restoration (Blood War)</b></p>
				<p><b>Effect</b>: Increase the production of aligned buildings based on time spent as your least used alignment in this Reincarnation.</p>
				<p><b>Formula</b>: (25 + 0.5 * x ^ 0.5)%, where x is your least used alignment in this Reincarnation (in seconds).</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/FrenziedArmy2021.png" align="middle"> Frenzied Army (Blood War)</b></p>
				<p><b>Effect</b>: Multiplicatively increase assistants by 10%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/TheUndecidedArmada.png" align="middle"> The Undecided Armada (Goblin Invasion)</b></p>
				<p><b>Effect</b>: Multiplicatively increase assistants based on the amount of buildings you own.</p>
				<p><b>Formula</b>: (0.65 * x ^ 0.35)%, where x is the amount of buildings you own.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/BloodyCrown.png" align="middle"> Bloody Crown (Goblin Invasion)</b></p>
				<p><b>Effect</b>: Increase production bonus from Gems by a multiplicative 10%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/Frostmelter.png" align="middle"> Frostmelter (Summer Event)</b></p>
				<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on clicks made all time.</p>
				<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is clicks made all time.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/SearingSummer.png" align="middle"> Searing Summer (Summer Event)</b></p>
				<p><b>Effect</b>: Increase the production of all buildings by 50%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/IdilliumExplorer.png" align="middle"> Idillium Explorer (Idillium)</b></p>
				<p><b>Effect</b>: Reduce the cost of all spells by 10%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/SpectralSurge.png" align="middle"> Spectral Surge (Halloween Event)</b></p>
				<p><b>Effect</b>: Turn Spiritual Surge into Spectral Surge, and multiplies Spectral Surge base bonus by the Cumulative Event Bonus.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/Monstrous.png" align="middle"> Monstrous (Halloween Event)</b></p>
				<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 20%.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/PerfectSnowflake.png" align="middle"> Perfect Snowflake (Christmas Event)</b></p>
				<p><b>Effect</b>: Reduce Royal Exchange cost multiplier by 0.01.</p>
				<br/>
				<p><b><img src="/realm/Factions/picks/GoldenSnowballs.png" align="middle"> Golden Snowballs (Christmas Event)</b></p>
				<p><b>Effect</b>: Increase clicking reward by 50%.</p>					
			</div>
		</div>
	</div>
	<hr>
	<p><b>Events</b></p>
	<div class="shlisting">
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">2022 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 28 - Nov 4, 2022)</a></b></p>
				<div class="autohide">
					<p>The Halloween event will be starting on <b>Oct 28th 2022, 12:01 PM UTC</b> and will end on <b>Nov 4th 2022, 7:59 PM UTC</b>.</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realms. Choose your own, feed and grow it to its maximum potential!</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/Blood.png" /></center>
								<center><b>Blood</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Ectoplasm.png" width="74%" height="74%" /></center>
								<center><b>Ectoplasm</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Bones.png" /></center>
								<center><b>Bones</b></center>
							</div>
						</center>
					</div>
					<br/>
					<p>You will need 3058 of each (Blood, Ectoplasm and Bones) to complete event.</p>
					<p>The event will feature three Resources, <b>Blood</b>, <b>Ectoplasm</b> and <b>Bones</b>. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 720 units (12 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><center><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Pumpkin Smasher</center></b></p>
					<p>You will get a Pumpkin Smasher once a day (1:01PM UTC Time). (8 Total)</p>
					<p>Each Pumpkin Smasher includes 75 of each resources (Added to total), 1 Ruby and 1 of 3 Monster (<b>Skeleton</b>, <b>Ghost</b> and <b>Vampire</b>) if you are missing any.</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Note</b>: You need to click on monster to activate it and get the Crucible Of Darkness upgrade.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect at least 480 Ectoplasm with a single click while <b>USING</b> Ghost monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect at least 480 Blood with a single click while <b>USING</b> Vampire monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect at least 480 Bones with a single click while <b>USING</b> Skeleton monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenMagic.png" alt="Halloween" align="middle"> Halloween Magic</b></p>
					<p><b>Requirement</b>: Cast each Halloween Spell at least 100 times in this reincarnation.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SpectralSurge.png" alt="Halloween" align="middle"> Spectral Surge</b></p>
					<p><b>Requirement</b>: Collect at least 480 of each resource in a single run.(This Game)</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Turn Spiritual Surge into Spectral Surge, and multiplies Spectral Surge base bonus by the Cumulative Event Bonus.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinCollector.png" alt="Halloween" align="middle"> Pumpkin Collector</b></p>
					<p><b>Requirement</b>:Collect a stack of at least 720 of any resource after having smashed at least 3 Pumpkins.</p>
					<p><b>Effect</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Monstrous.png" align='middle'> Monstrous</b></p>
					<p><b>Requirement</b>: Collect at stack of at least 720 of any resource while using any level 50 monster.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 20%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/CurseoftheFallen.png" align="middle"> Curse of the Fallen</b></p>
					<p><b>Requirement</b>: Have at least 2 hours of Holy Light activity time while using a level 50 Vampire. (BUGGED: check is 2 hours this game with any Vampire and only when Holy Light is cast).</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of prestige factions outside your alignment at once.</p>
					<p><b>Note</b>: You cannot select any Lineage based on those bloodlines.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Reduce the cost of faction spells by 75%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: Level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: Multiplicatively increase Maximum Mana and Mana Regeneration based on clicks made in this game.</p>
					<p><b>Formula</b>: Max Mana: (log10(1 + x) ^ 2.5)%, where x is clicks made this game.</p>
					<p><b>Formula</b>: Mana Regeneration: (log10(1 + x) ^ 2.25)%, where x is clicks made this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 100 times greater Faction Coin find chance.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: (0.2 * (R + 1) * x ^ 0.45)%, where R is reincarnation count and x is mana produced this game.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b>Note</b>: Not affected by ascension penalties</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Triple your offline productions of Faction Coins, clicks, mana, spells cast and spell activity time.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Idillium (Sep 23 - Sep 30, 2022)</a></b></p>
				<div class="autohide">
					<p>The Idillium event will be starting on <b>Sep 23rd 2022, 12:01 PM UTC</b> and will end on <b>Sep 30th 2022, 6:59 PM UTC</b>.</p>
					<p>The event will feature three Resources, <b>Crystal Prisms</b>, <b>Entropic Drops</b> and <b>Equilibrium Fragments</b>, They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 16 hours, up to 960.</p>
					<p>Being aligned with an elite faction will double the speed a resource is gained.</p>
					<p>You need 2814 resources of each (8442 total) to complete all quests.</p>
					<p>Total time needed 5 days 20 hours and 42 minutes without elite factions or scrying.</p>
					<p>Which prism appears depends on what faction you are aligned with:</p>
					<p>As Fairy, Demon or Faceless, Entropic Drop appears.</p>
					<p>As Elven, Goblin or Druid, Equilibrium Fragment appears.</p>
					<p>As Angel, Undead or Titan, Crystal Prism appears.</p>
					<p>As factionless or Mercenary, all three will appear.</p>
					<p>As Factionless or Mercenary you can collect any of the three. By collecting one, the others will disappear.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/CrystalPrismCurrency.png" width="54%" height="54%" /></center>
								<center><b>Crystal Prism</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EntropicDropCurrency.png" width="54%" height="54%" /></center>
								<center><b>Entropic Drop</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EquilibriumFragmentCurrency.png" width="34%" height="34%" /></center>
								<center><b>Equilibrium Fragment</b></center>
							</div>
						</center>
					</div>
					<hr>
					<p><b>Event Upgrades</b></p>
					<p><img src="/realm/Factions/picks/BrokenMirror.png" align="middle"> <b>Broken Mirror</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Idillium Resources collected.</p>
					<p><b>Formula</b>: ((1 + 0.0035 * ((x + y + z) / 3)) * [(1 + min(1.6 * (x / 25) - 0.002 * (x / 25) ^ 2 + 0.000024 * (x / 25) ^ 3,12500)) * (repeat, replace x with y and z)] ^ 0.4), where x is Crystal Prisms (Order), y is Entropic Drops (Chaos), z is Equilibrium Fragments (Balance)</p>
					<br>
					<p><b>Remnants</b></p>
					<p><b>Cost to Upgrade</b>: floor((13 * x + 1) ^ 1.15) Prisms, where x is remnant level.</p>
					<p><b>Level 5</b>: Perk 1: total cost: 230 Prisms.</p>
					<p><b>Level 10</b>: Perk 2: total cost: 1138 Prisms.</p>
					<p><b>Level 15</b>: Perk 3: total cost: 2814 Prisms.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRemnant.png" align="middle"> <b>Order Remnant</b></p>
					<p><b>Requirement to Collect</b>: Angels, Undead, Titans, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Remnant level. Does not suffer Ascension penalties.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRemnant.png" align="middle"> <b>Chaos Remnant</b></p>
					<p><b>Requirement to Collect</b>: Fairies, Demon, Faceless, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Assistants based on remnant level.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRemnant.png" align="middle"> <b>Balance Remnant</b></p>
					<p><b>Requirement to Collect</b>: Elves, Goblins, Druids, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Faction Coin Find Chance based on remnant level.(multiplicative)</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Completing all Quest will increase your Cumulative Event bonus by an additional 12%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration1.png" align="middle"> <b>Order Restoration 1</b></p>
					<p><b>Requirement</b>: Order Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk1.png" align="middle"> <b>Order Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases all spells duration and reduce all spells cost by 10%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration2.png" align="middle"> <b>Order Restoration 2</b></p>
					<p><b>Requirement</b>: Order Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk2.png" align="middle"> <b>Order Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Temporal Flux spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/TemporalFlux.png" align="middle"></p>
					<p><b>Effect</b>: Increase Unique building production based on time spent in this game.</p>
					<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
					<p><b>Formula</b>: (3.5 * (x / 60) ^ 0.825)%, where x is time spent in this game this game.</p>
					<p><b>Note</b>: Temporal Flux obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration3.png" align="middle"> <b>Order Restoration 3</b></p>
					<p><b>Requirement</b>: Order Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk3.png" align="middle"> <b>Order Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Maximum Mana by 25%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/ChaosRestoration1.png" align="middle"> <b>Chaos Restoration 1</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk1.png" align="middle"> <b>Chaos Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Production Bonus from Gems by 18%.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration2.png" align="middle"> <b>Chaos Restoration 2</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk2.png" align="middle"> <b>Chaos Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Maelstrom spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/Maelstrom.png" align="middle"></p>
					<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants.</p>
					<p><b>Formulas</b></p>
					<p><b>Mana</b>: (0.02 * (log10(1 + x)) ^ 5)%, where x is mana produced this game.</p>
					<p><b>Trophy</b>: Formula (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
					<p><b>Faction Coins</b>: (0.01 * (log10(1 + x)) ^ 4)%, where x is faction coins found this game.</p>
					<p><b>Assistants</b>: (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
					<p><b>Note</b>: Maelstrom obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration3.png" align="middle"> <b>Chaos Restoration 3</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk3.png" align="middle"> <b>Chaos Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Mana Regeneration by 50%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/BalanceRestoration1.png" align="middle"> <b>Balance Restoration 1</b></p>
					<p><b>Requirement</b>: Balance Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk1.png" align="middle"> <b>Balance Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Tax Collection worth by 30 seconds.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration2.png" align="middle"> <b>Balance Restoration 2</b></p>
					<p><b>Requirement</b>: Balance Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk2.png" align="middle"> <b>Balance Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants All Creation spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/AllCreation.png" align="middle"></p>
					<p><b>Effect</b>: Increase production of all buildings based on your Mana Regeneration.</p>
					<p><b>Formula</b>: (0.15 * ln(1 + x) ^ 3.5 + 0.9 * x ^ 0.27)%, where x is your Mana Regeneration.</p>
					<p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your Mana Regeneration.</p>
					<p><b>Formula</b>: (5 * ln(1 + x) ^ 2.5 + 15 * x ^ 0.15)%, where x is your Mana Regeneration.</p>
					<p><b>Note</b>: All Creation obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration3.png" align="middle"> <b>Balance Restoration 3</b></p>
					<p><b>Requirement</b>: Balance Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk3.png" align="middle"> <b>Balance Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Royal Exchange Bonus by 20% (Additive).</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br>
					<p><img src="/realm/Factions/picks/GentleCollector.png" align="middle"> <b>Gentle Collector</b></p>
					<p><b>Requirement</b>: Collect at least 720 Entropic Drops with a single click while affiliated with the Fairies.</p>
					<br>
					<p><img src="/realm/Factions/picks/AggressiveCollector.png" align="middle"> <b>Aggressive Collector</b></p>
					<p><b>Requirement</b>: Collect at least 720 Crystal Prisms with a single click while affiliated with the Undead.</p>
					<br>
					<p><img src="/realm/Factions/picks/GoldenAge.png" align="middle"> <b>Golden Age</b></p>
					<p><b>Requirement</b>: Cast Remnant spells at least 1000 times.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration.png" align="middle"> <b>Order Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Order Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration.png" align="middle"> <b>Chaos Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Chaos Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration.png" align="middle"> <b>Balance Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Balance Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalancedCollector.png" align="middle"> <b>Balanced Collector</b></p>
					<p><b>Requirement</b>: While affiliated with the Druids, collect a stack of at least 720 Equilibrium Fragments.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br>
					<p><img src="/realm/Factions/picks/IdilliumExplorer.png" align="middle"> <b>Idillium Explorer</b></p>
					<p><b>Requirement</b>: Cast a Remnant spell with 6 different factions.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Reduce the cost of all spells by 10%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br>
					<p><img src="/realm/Factions/picks/BeyondtheLookingGlass.png" align="middle"> <b>Beyond the Looking Glass</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 Equilibrium Fragments while Moon Blessing is active.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><img src="/realm/Factions/picks/IdilliumShop45.png" align="middle"> <b>1200 each Idillium Resource</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A shady prophet wants to sell you 1200 units of each Idillium Resource for 45 Rubies.</p>
					<p><b>Note</b>: You can purchase this an infinite amount of times.</p>
					<br/>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 17 - Aug 24, 2022)</a></b></p>
				<div class="autohide">
					<p>The Summer event will be starting on <b>Aug 17th 2022, 12.01 PM UTC</b> and will end on <b>Aug 24th 2022, 6.59 PM UTC</b>.</p>
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 12 hours, up to 720 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p>You need 4500 each of <b>Flame</b> and <b>Frost Orbs</b> to complete all quests and unlocking all upgrades from Summeraans & Winterly, 400 to unlock the faction and 4100 for the 3 upgrades (800,1300 and 2000 respectively).</p>
					<p>Total time 6 days 6 hours without scrying.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<br/>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<br/>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.</p>
					<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
					<p><b>Formula</b>: min(100000, (x / 27) - (x ^ 2 / 36450) + (x ^ 3 / 98415000))%, where x is the number of Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
					<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Unlocked when aligned with Winterly</p>
					<p><b>Mana Cost</b>: 1000</p>
					<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
					<p><b>Formula</b>: (0.1 * x ^ 0.6 * (y * 30) ^ 1.1)%, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
					<p><b>Formula</b>: (20 * x ^ 0.75)%, where x is time spent aligned with the Winterly in hours.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
					<p><b>Formula</b>: (x ^ 1.03)%, where x is the number of Frost Orbs collected in total.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
					<p><b>Effect</b>: Spell durations are increased by 100%.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
					<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Unlocked when aligned with Summeraan</p>
					<p><b>Mana Cost</b>: 300</p>
					<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game for 12s.</p>
					<p><b>Formula</b>: (5 * x ^ 0.85)%, where x is the number of spells cast this game.</p>
					<p><b>Effect</b>: Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
					<p><b>Formula</b>: (x * y ^ 1.1)%, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
					<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
					<p><b>Formula</b>: (25 * x)%, where x is the number of Flame Orbs collected with the last click.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
					<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
					<p><b>Formula</b>: +(2 * log(1 + x ^ 2)), where x is the number of clicks made in this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
					<p><b>Effect</b>: Decrease the cost of all spells by 50%. (multiplicative)</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Winterly Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle">  Winterly Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" align="middle">   Winterly Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" align="middle"> Winterly Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
					<br/>
					<p><b>Summeraan Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" align="middle"> Summeraan Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
					<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
					<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
					<p><b>Unlock</b>: Collect at least 480 Flame Orbs with a single click while affiliated with the Winterly.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
					<p><b>Unlock</b>: Collect at least 480 Frost Orbs with a single click while affiliated with the Summeraans.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ClimateForecast.png" alt="Climate Forecast" align="middle"> Climate Forecast</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while unaffilliated with either of the Summer Festival factions.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Frostmelter.png" alt="Frostmelter" align="middle"> Frostmelter</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while having all three upgrades of either Summeraan or Winterly.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade upgrade with the same name.</p>
					<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on clicks made all time.</p>
					<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is clicks made all time.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/LateSpringtime.png" alt="Late Springtime" align="middle"> Late Springtime</b></p>
					<p><b>Unlock</b>: While affliated with the Fairies, collect a stack of 720 Orbs.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SearingSummer.png" align="middle"> Searing Summer</b></p>
					<p><b>Unlock</b>: Collect a stack of at least 720 Flame Orbs while Holy Light and Call to Arms are active simultaneously.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase the production of all buildings by 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b>Summer Festival</b></p>
					<p><b><img src="/realm/Factions/picks/MidsummerNightsDream.png" align="middle"> Midsummer Night's Dream</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Unlock</b>: Collect a stack of at least 720 Frost Orbs while Night Time is active.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<br/>
					<hr>
					<p><b>Shop Items</b></p>
					<p><b><img src="/realm/Factions/picks/75OrbShopItem.png" alt="Shop Item" align="middle"> 75 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300OrbShopItem.png" alt="Shop Item" align="middle"> 300 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 300 Frost and Flame Orbs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250OrbShopItem.png" alt="Shop Item" align="middle"> 1250 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 1250 Frost and Flame Orbs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500OrbShopItem.png" alt="Shop Item" align="middle"> 3500 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 3500 Frost and Flame Orbs for 100 Rubies. These are all the orbs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin Invasion (Jul 13 - Jul 17, 2022)</a></b></p>
				<div class="autohide">
					<p>The Goblin Invasion event will be starting on <b>Jul 13th 2022, 12:01 PM UTC</b> and will end on <b>Jul 17th 2022, 6:59 PM UTC</b>.</p>
					<p><b><img src="/realm/Factions/picks/TheGreatestArmy2017.png" alt="The Greatest Army" align="middle"> The Greatest Army</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Goblin Crowns collected.</p>
					<p><b>Formula</b>: (x / 20 - 0.005 * (x / 20) ^ 2 + 0.00045 * (x / 20) ^ 3)%, where x is amount of collected Goblin Crowns. Capped at 100000%.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<br/>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/GobinCrown2017.png" alt="Goblin Crowns" align="middle"> Goblin Crowns</b></p>
					<p>During the Goblin Invasion Event you will be able to collect Goblin Crowns, appearing in a random location of your screen at a rate of 1 per minute, stacking up to 720 units (12 hours). These Resources will be used to either fight or support the invading Goblin Army: both choices will grant you new bonuses and unlock new unique upgrades. You can also complete Quests and Feats, also found in the Event panel. Aside for completion purposes, completed quests will also grant a small permanent production bonus. Remember that all Goblin Invasion upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<p>The Formula for the cost needed to level a faction is floor((level + 1) ^ 0.85) Goblin Crowns</p>
					<p>You need 203 Goblin Crowns (total) to level a faction to level 25, 740 to level 50, and 2685 to level 100.</p>
					<p>You need 5370 Goblin Crowns to complete all quest by leveling both factions to level 100, Total time 3 days 17 hours 30 minutes without scrying.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FighttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Fight the Goblin Army</b></p>
					<p><b>Requirement</b>: Good or Neutral alignment</p>
					<p><b>Effect</b>: Increase maximum mana and mana regeneration by 1% per level.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SupporttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Support the Goblin Army</b></p>
					<p><b>Requirement</b>: Evil or Neutral alignment</p>
					<p><b>Effect</b>: Increase your assistants by 1% per level.</p>
					<hr>
					<p><b>Event Quest</b></p>
					<p><b>Goblin's Bane Quest</b>: Fight the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 1 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Magical Clicks</b></p>
					<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
					<p><b>Formula</b>: (floor(0.6 * ln(1 + x) ^ 4 + 1)), where x is the amount of active spells.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 2 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Eye of the King</b></p>
					<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of clicks made in this Reincarnation.</p>
					<p><b>Formula</b>: ((log10(1 + x)) ^ 3.5)%, where x is the amount of clicks made in this reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 3 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Spare Green Hands</b></p>
					<p><b>Effect</b>: Each manual click counts as 1000 clicks for all purposes.</p>
					<hr>
					<p><b>Goblin's Commander Quest</b>: Support the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 1 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
					<p><b>Effect</b>: All spells activity time counts more based on Evil spells cast in this Reincarnation.</p>
					<p><b>Formula</b>: (24 + 12 * ln(1 + x))%, where x is Evil spells cast in this Reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 2 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin Commandos</b></p>
					<p><b>Effect</b>: Increases the production of Neutral Buildings based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (150 * x ^ 0.25)%, where x is amount of assistants you own.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 3 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> The Slack King</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
					<p><b>Formula</b>: (0.01 * x ^ 0.7)%, where x is time spent in this Reincarnation.</p>
					<hr>
					<p><b>Event Feat</b></p>
					<p><b><img src="/realm/Factions/picks/GoblinsBane2017.png" alt="Seraphim Champion" align="middle"> Goblins Bane</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsCommander2017.png" alt="Seraphim Champion" align="middle"> Goblin's Commander</b></p>
					<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsEverywhere!2017.png" alt="Seraphim Champion" align="middle"> Goblins Everywhere!</b></p>
					<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
					<p><b>Note</b>: Prestige Factions count as 1 for Good, Evil, and Neutral alignment (Example Angel/Dwarven is 1, any other Good/Dwarven is not counted)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldHunt2018.png" align="middle"> Gold Hunt</b></p>
					<p><b>Requirement</b>: Collect at least 480 Goblin Crowns with a single click while affiliated with Goblins.</p>
					<p><b>Note</b>: As prestige, only prestige will count. For example, Angel/Dwarven counts as Dwarven for feat purposes.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/TheUndecidedArmada.png" align="middle"> The Undecided Armada</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 480 Goblin Crowns while having no faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase assistants based on the amount of buildings you own (multiplicative).</p>
					<p><b>Formula</b>: (0.65 * x ^ 0.35)%, where x is the amount of buildings you own.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PlatinumTrophy.png" align="middle"> Platinum Trophy</b></p>
					<p><b>Requirement</b>: While affiliated with the Goblins and having supported the Army at least 70 times, collect a stack of at least 720 Goblin Crowns.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodyCrown.png" align="middle"> Bloody Crown</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 Goblin Crowns while Blood Frenzy and Call to Arms are active simultaneously.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase production bonus from Gems by a multiplicative 10%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/UnderaGreenSun.png" align="middle"> Under a Green Sun</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 Goblin Crowns while having at least 2 hours of Goblin's Greed activity time in this Reincarnation (BUGGED: check is 2 hours this game).</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/75GoblinCrowns2017.png" align="middle"> 75 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 75 Goblin Crowns for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300GoblinCrowns2017.png" align="middle"> 300 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 300 Goblin Crowns 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250GoblinCrowns2017.png" align="middle"> 1250 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 1250 Goblin Crowns for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500GoblinCrowns2017.png" align="middle"> 3500 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 3500 Goblin Crowns for 100 Rubies.</p>
					<p>These are all the crowns he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">7th Anniversary - Blood War (May 17 - May 21, 2022)</a></b></p>
				<div class="autohide">
					<p>The Blood War event will be starting on <b>May 17th 2022, 12:01 PM UTC</b> and will end on <b>May 21st 2022, 6:59 PM UTC</b>.</p>
					<p><b><img src="/realm/Factions/picks/NephilimGlory2017.png" alt="Nephilim Glory" align="middle"> Nephilim Glory</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Holy Symbols and Lava Stones collected.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<p><b><center>Event Resources</center></b></p>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/HolySymbolCurrency.png" width="54%" height="54%" /></center>
								<center><b>Holy Symbols</b></center>
							</div>
							<div>
								<center><img src="/realm/Factions/picks/LavaStoneCurrency.png" width="64%" height="64%" /></center>
								<center><b>Lava Stones</b></center>
							</div>
						</center>
					</div>
					<br>
					<p>Holy Symbols and Lava Stones will appear on a random location of the game screen and you simply have to click to collect them, then wait for more Resources to appear. Or you can let them grow bigger over time (at a rate of 1 Resource per Minute) if you are idle or offline, up to a maximum size of 720 Holy Symbols or Lava Stones! Be careful though, you can only collect one stack of Holy Symbols or Lava Stones - by doing so, the other will disappear.</p>
					<p><b>Note</b>: You need 2350 of each resource to get all the upgrades.</p>
					<p><b>Note</b>: All upgrades has a 1 time cost but needs selected every Abdication and Reincarnation.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SeraphimAlliance2017.png" alt="Seraphim Alliance" align="middle"> Seraphim Alliance</b></p>
					<p><b>Cost</b>: 200 Holy Symbols</p>
					<p><b>Description</b>: The highest Angelic ranks carry wings blazing with pure light, whose every feather is infused with enough magical power to revive a dead soul or purify the hearts of a thousand sinners. Affiliating with the Seraphim will increase your magical abilities to the extreme, but you can only do so when playing as Good or Neutral.</p>
					<br/>
					<p><b>Seraphim Quest</b></p>
					<p><b>Seraphim Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/HeavenlyFeathers2017.png" alt="Heavenly Feathers" align="middle"> Heavenly Feathers</b></p>
					<p><b>Cost</b>: 400 Holy Symbols.</p>
					<p><b>Effect</b>: All buildings also increase your mana regeneration.</p>
					<p><b>Formula</b>: (2 * x ^ 0.2)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/God'sChamber2017.png" alt="God's Chamber" align="middle"> God's Chamber</b></p>
					<p><b>Cost</b>: 750 Holy Symbols.</p>
					<p><b>Effect</b>: Increase maximum mana by 1 for every 10 buildings you own.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/BoonofRadiance2017.png" alt="Boon of Radiance" align="middle"> Boon of Radiance</b></p>
					<p><b>Cost</b>: 1000 Holy Symbols.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
					<p><b>Formula</b>: (0.2 * (x * 30) ^ 0.85), where x is current mana regeneration.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus.</p>
					<p><b>Effect</b>: Also completes Seraphim Champion Feat.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/AsmondeanAlliance2017.png" alt="Asmodean Alliance" align="middle"> Asmodean Alliance</b></p>
					<p><b>Cost</b>: 200 Lava Stones</p>
					<p><b>Description</b>: The most cruel of Demons also happen to be the biggest and most deformed abyssal creatures, featuring all kinds of unnatural flesh and bone appendages. Their very existence is a pain to see and hear driving all but the most strong souls to madness. Affiliating with the Asmodeans will bolster your assistant army unbelievably, but you can only do so when playing as Evil or Neutral.</p>
					<br/>
					<p><b>Asmodean Quest</b></p>
					<p><b>Asmodean Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/Broodmothers2017.png" alt="Broodmothers" align="middle"> Broodmothers</b></p>
					<p><b>Cost</b>: 400 Lava Stones</p>
					<p><b>Effect</b>: Gain additional assistants based on time spent affiliated with the Asmodeans.</p>
					<p><b>Formula</b>: (0.25 * x * (x + 1)), where x is hours</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/AbyssalGaze2017.png" alt="Abyssal Gaze" align="middle"> Abyssal Gaze</b></p>
					<p><b>Cost</b>: 750 Lava Stones</p>
					<p><b>Effect</b>: Increase assistant production based on time spent as Evil (This R).</p>
					<p><b>Formula</b>: (2 * x ^ 0.7)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/Legion'sLimbs2017.png" alt="Legion's Limbs" align="middle"> Legion's Limbs</b></p>
					<p><b>Cost</b>: 1000 Lava Stones</p>
					<p><b>Effect</b>: Increase clicking rewards based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (x ^ 0.85)</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus</p>
					<p><b>Effect</b>: Also completes Asmodean Champion Feat.</p>
					<hr>
					<p><b>Event Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/SeraphimChampion2017.png" alt="Seraphim Champion" align="middle"> Seraphim Champion</b></p>
					<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AsmondeanChampion2017.png" alt="Asmodean Champion" align="middle"> Asmodean Champion</b></p>
					<p><b>Requirement</b>: Purchase all Asmodean Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SacredHoliness2017.png" alt="Sacred Holiness" align="middle"> Sacred Holiness</b></p>
					<p><b>Requirement</b>: Collect at least 480 Holy Symbols with a single click while affiliated with the Angels.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/DarkestHeresy2017.png" alt="Darkest Heresy" align="middle"> Darkest Heresy</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click while affiliated with the Demons</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Indifference2018.png" alt="Indifference" align="middle"> Indifference</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click or Holy Symbols while affiliated with a Neutral faction</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WorldRestoration.png" alt="World Restoration" align="middle"> World Restoration</b></p>
					<p><b>Requirement</b>: Have the same amount of Holy Symbols and Lava Stone at any given time, while having at least 1400.(Total)</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of aligned buildings based on time spent as your least used alignment in this Reincarnation.</p>
					<p><b>Formula</b>: (25 + 0.5 * x ^ 0.5)%, where x is your least used alignment in this Reincarnation (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FrenziedArmy2021.png" alt="Frenzied Army" align="middle"> Frenzied Army</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while Blood Frenzy and Call to Arms are active simultaneously.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase assistants by 10%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PlanarTax.png" align="middle"> Planar Tax</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 of any resource in a game with at least 1000 Tax Collection casts.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EternalBattle.png" align="middle"> Eternal Battle</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while having 3 upgrades of any Blood War faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/40HolySymbolsandLavaStones2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 40 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 40 Holy Symbols and Lava Stones for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/150HolySymbolsandLavaStones2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 150 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 150 Holy Symbols and Lava Stones for 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/650HolySymbolsandLavaStones2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 650 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 650 Holy Symbols and Lava Stones for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1800HolySymbolsandLavaStones2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 1800 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 1800 Holy Symbols and Lava Stones for 100 Rubies.</p>
					<p>These are all the resources he could gather.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 Lave Stone and 1 Holy Synbol every 10 minutes for 4 hours.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Apr 14 - Apr 21, 2022)</a></b></p>
				<div class="autohide">
					<p>The Easter event will be starting on <b>Apr 14th 2022, 12:01 PM UTC</b> and will end on <b>Apr 21st 2022, 6:59 PM UTC</b>.</p>
					<p>You get a RNG state for Eggs when the event begins, Which predetermines when you'll get certain eggs.</p>
					<p>Paste your Export in the <a target="_blank" href="http://dox4242.github.io/mri/index.html"><b>Meggnetic Resonance Imager</a></b> to see when you will get your next Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EventResourceEaster2017.png" alt="Blue Omelette" align="middle"> Event Resource</b></p>
					<p>Eggs will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Egg to appear. Or, you can let them grow bigger over time (at a rate of 1 Egg per minute) if you are idle or offline- up to a maximum size of 720 Eggs! Eggs are divided into Common, Rare and Unique Eggs, and each time you collect them you will get random types based on their rarity. Each time you find or buy a Unique Egg, you also gain 1 free Ruby!</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BlueOmeletteEaster2017.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of rare eggs collected.</p>
					<p><b>Formula</b>: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000%.</p>
					<p><b>Note</b>: Using Rare Eggs to buy Unique Eggs will not effect the bonus.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEggEaster2017.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Note</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg3000Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Note</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUnique100Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Note</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b>Egg Hunter Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggHunter750Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Collect 750 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter2000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Collect 2000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter4000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Collect 4000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Hunter Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<hr>
					<p><b>Egg Collection Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggCollection1Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Find 1 Unique Egg.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection3Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Find 3 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection5Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Find 5 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Find 8 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Collection Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<hr>
					<p><b>Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldenChickenEaster2017.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GreyEaster2017.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BunnyHelpers2018.png" alt="Bunny Helpers" align="middle"> Bunny Helpers</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having exactly 480 assistants.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bowl.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateEgg2019.png" align="middle"> Chocolate Egg</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having at least 3 active spells.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
					<p><b>Note</b>: Upgrade only available during seasonal events.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Eggsceptional.png" align="middle"> Eggsceptional</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Requirement</b>: Collect a full stack of 720 Eggs at any time during the Easter event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/RottenEgg2021.png" align="middle"> Rotten Egg</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Requirement</b>: Collect a full stack of 720 Eggs while being affiliated with the Undead.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase offline production by 100%.</p></p>
					<p><b>Note</b>: Upgrade only available during seasonal events.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Colorfull.png" align='middle'> Colorfull</b></p>
					<p><b>Kind</b>: Feat</p>					
					<p><b>Requirement</b>: Collect a stack of at least 720 Eggs while Fairy Chanting is active.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p><b><img src="/realm/Factions/picks/UGiantEggEaster2017.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEggEaster2017.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect</b>: Increase the production of all buildings by 100%</p>
					<p><b>Effect A1</b>: Increase the production of all buildings by 7.18%.</p>
					<p><b>Effect A2</b>: Increase the production of all buildings by 0.7%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEggEaster2017.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEggEaster2017.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect</b>: Increase clicking reward by 100%</p>
					<p><b>Effect A1</b>: Increase clicking reward by 7.18%</p>
					<p><b>Effect A2</b>: Increase clicking reward by 0.07</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEggEaster2017.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEggEaster2017.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect</b>: Increase offline production by 500%</p>
					<p><b>Effect A1</b>: Increase offline production by 19.6%</p>
					<p><b>Effect A2</b>: Increase offline production by 1.81%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEggEaster2017.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations base cost (base excavation cost reduced from 1e27 to 1e24).</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEggEaster2017.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b>Scry</b> Produce 1 random Egg every 5 minutes for 4 hours.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs150Easter2017.png" alt="Bundle of Eggs" align="middle"> 150 Eggs</b></p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs600Easter2017.png" alt="Bundle of Eggs" align="middle"> 600 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 15 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 600 eggs for 15 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs2500Easter2017.png" alt="Bundle of Eggs" align="middle"> 2500 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 45 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 2500 eggs for 45 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs7000Easter2017.png" alt="Bundle of Eggs" align="middle"> 7000 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 100 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 7000 eggs for 100 rubies. These are all the eggs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2022)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/AprilFools2017.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b>Note</b>: If you got this upgrade in the past it will only show in purchased upgrades.</p>
					<p><b>Note</b>: This upgrade does nothing.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (Feb 12 - Feb 16, 2022)</a></b></p>
				<div class="autohide">
					<p>The Valentine event will be starting on <b>Feb 12th 2022, 1:01 PM UTC</b> and will end on <b>Feb 16th 2022, 7:59 PM UTC</b>.</p>
					<p><b>Event Theme</b>: <b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts</b></p>
					<p>Collected online and offline at a base rate of 1 per second and can be increased up to 4/s during the length of the event as follows:</p>
					<p><b><img src="/realm/Factions/picks/CalltoLove2017.png" alt="CalltoLove" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Play during the Valentines Event</p>
					<p><b>Mana Cost</b>: 200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>: In addition to the Call to Arms spell effect, increases heart production per second based on the active time for Call to Love.</p>
					<p><b>Base Production</b>: 1 heart/sec with no active time for CtL</p>
					<p>2 hearts/sec for 10 seconds of active time for CtL (All time)</p>
					<p>3 hearts/sec for 1000 seconds (16 min, 40 sec) of active time for CtL  (All time)</p>
					<p>4 hearts/sec for 100000 seconds of active time for CtL (27 hours, 47 min) (All time)</p>
					<p><b>Formula</b>:floor(1.5 + 0.5 * floor(log10(1 + x)))</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts Upgrades</b></p>
					<p><b>Note</b>: Every 100 Heart Upgrades purchased will give 1 free Ruby.</p>
					<p><b>Note</b>: All Heart Upgrades will be like Ruby Upgrades for the duration of Event.(<b>Additive only</b>)</p>
					<p><b>Note</b>: The first Upgrade for each is 100 Hearts. It increases by 100 for each additional Upgrade (ie..100,200,300).</p>
					<p><b>Effects</b></p>
					<p><b>Assistants</b>: Increases by 1 Assistant with each Upgrade.</p>
					<p><b>Mana Regen</b>: Increases by 0.5 with each Upgrade.</p>
					<p><b>Max Mana</b>: Increases by 25 with each Upgrade.</p>
					<p><b>Gem Bonus</b>: Increases by 0.50 with each Upgrade.</p>
					<p><b>Exchange Bonus</b>: Increases by 1.50 with each Upgrade.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Buy 50 Heart Upgrades of each to complete Quest (<b>Must show 5100+ for each upgrade</b>)</p>
					<p><b>Note</b>: Total Hearts needed to complete all quest <b>if spread equally</b> 637500</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> Feel the Love 1</b></p>
					<p><b>Requirement</b>: 50 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> Feel the Love 2</b></p>
					<p><b>Requirement</b>: 125 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Feel the Love 3</b></p>
					<p><b>Requirement</b>: 250 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 2%.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Purchase 250 Heart Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage2017.png" alt="" align="middle"> I Love You in Every Language</b></p>
					<p><b>Requirement</b>: Cast Call to Love at least once with 6 different Factions.</p>
					<p><b>Note</b>: When doing the cast with 6 factions, if you do it to fast the game will not register it.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AssistantLove2018.png" alt="" align="middle"> Assistant Love</b></p>
					<p><b>Requirement</b>: Reach 50 Assistants from Heart Upgrades.</p>
					<p><b>Reward</b>: If you unlock this feat, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateBoxFeat2019.png" align="middle"> Chocolate Box</b></p>
					<p><b>Requirement</b>: Have at least 72 hours of Call to Love activity time during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase your event bonus by a multiplicative 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FairyLove.png" align="middle"> Fairy Love</b></p>
					<p><b>Requirement</b>: While affiliated with the fairies, click 1000 times during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/UnrequitednessFeat2021.png" align="middle"> Unrequitedness</b></p>
					<p><b>Requirement</b>: Cast Call to Love while being affiliated with a Neutral Faction and with at least 2 hours of activity time with the spell during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase Neutral production by 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BurningPassion.png" align="middle"> Burning Passion</b></p>				
					<p><b>Requirement</b>: Have at least 2 hour of Hellfire Blast activity time during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new icon option for the spell.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" align="middle"> 15000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 15000 Hearts for 5 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" align="middle"> 50000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 50000 Hearts for 55 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest3.png" align="middle"> 175000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 175000 Hearts for 45 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" align="middle"> 400000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 400000 Hearts for 100 Rubies. It will run out of power after you use this last time.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 heart every 5 seconds for 4 hours.</p>
					<hr>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">2021 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 20, 2021 - Jan 4, 2022)</a></b></p>
				<div class="autohide">
					<p>The Christmas event will be starting on <b>Dec 20th 2021, 1:01 PM UTC</b> and will end on <b>Jan 4th 2022, 7:59 PM UTC</b>.</p>
					<p>It's Christmas time! The subjects of your Realm are sensing the aura of power in the air, inspiring them in their daily life and making them feel proud of your righteous leadership. Encouraged by your unmatched abilities as a ruler, they believed it would be appropriate to offer you a daily tribute for the duration of the Holidays.</p>
					<p><b>Event Theme</b>: Snowballs. They will accumulate at a rate of 1 per minute, up to a maximum of 720 (12 hours). Collecting Snowballs will allow you to complete quests and increase your Avalanche upgrade bonus.</p>
					<p>Every day you will receive a Christmas Present containing Snowballs or Rubies. Presents are required to complete quests and can only be retrieved once per day by going online.</p>
					<p><b>Note</b>: The daily Christmas presents contains 1 Ruby or 200 Snowballs (every other present)</p>
					<p><b>Event Bonus</b>: Total cumulative and permanent quest bonus at the end of the Event: 14%</p>
					<p><b>Note</b>: If you didn't unlock all the Christmas feats last year, you have a chance to do so with this one! If you already did, you will be able to gain additional permanent production bonuses from completing all the quests again, and benefit from the massive bonus from the Avalanche upgrade once again.</p>
					<p>You can find all this information in a guide by pressing the "?" button in the Event Panel.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Avalanche2017.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected.</p>
					<p><b>Formula</b>: (0.8 * (s / 35) + -0.006 * (s / 35)^2 + 0.00004 * (s / 35)^3)% (max 100000% bonus), where s is amount of collected snowballs.</p>
					<p><b>Formula</b>: (1 + 0.01 * x) ^ (0.1 ^ A) where A is ascension and x is avalanche formula in percentage.</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HeavyAvalanche2017.png" alt="Avalanche" align="middle"> Heavy Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R40+.</p>
					<p><b>Cost</b>: 5000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (2.5 * A)), where x is original bonus in percentage</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GrandAvalanche2017.png" alt="Avalanche" align="middle"> Grand Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R100+.</p>
					<p><b>Cost</b>: 10000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (5 * A)), where x is original bonus in percentage (overrides Heavy Avalanche)</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Snowpile2016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Collect 1000, 4500, 10000 and 21000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile12016.png" alt="Snowpile 1" align="middle"> Snowpile 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Collect 1000 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile22016.png" alt="Snowpile 2" align="middle"> Snowpile 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Collect 4500 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile32016.png" alt="Snowpile 3" align="middle"> Snowpile 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Collect 10000 Snowballs</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile 4" align="middle"> Snowpile 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Collect 21000 Snowballs</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector12016.png" alt="Gift Collector 1" align="middle"> Gift Collector 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Open 1 present</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector22016.png" alt="Gift Collector 2" align="middle"> Gift Collector 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Open 4 presents</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector32016.png" alt="Gift Collector 3" align="middle"> Gift Collector 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Open 8 presents</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector 4" align="middle"> Gift Collector 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Open 13 presents</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/SantasHelpers2016.png" alt="SantasHelpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play Elves and get 50 assistants</p>
					<p><b>Note</b>: Unlockable in R7 using undead bloodline.</p>
					<p><b>Note</b>: Dwarven is allowed.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Unholidays2016.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Ally with Undead, purchase Undead Trade Treaty, Undead Friendship Pact, and Undead Alliance, during the Christmas season.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Complete all the Snowpile quests</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="GiftCollector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Open 13 Presents</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FreezingHell2018.png" alt="FreezingHell" align="middle"> Freezing Hell</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect at least 480 Snowballs with a single click while affiliated with the Demons.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PerfectSnowflake.png" align="middle"> Perfect Snowflake</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect Snowballs to find the Perfect Snowflake. Your chances increase as you collect more.</p>
					<p><b>Chance</b>: (min(1, (x ^ 2 / 9,000,000,000 (9 T))), where x is snowballs collected.</p>
					<p><b>Effect</b>: Reduce Royal Exchange cost multiplier by 0.01.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SnowballFight.png" alt="SnowballFight" align="middle"> Snowball Fight</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect a stack of at least 720 Snowballs while Call to Arms is active.</p>
					<p><b>Effect</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldenSnowballs.png" alt="GoldenSnowballs" align="middle"> Golden Snowballs</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play as Goblin during the Christmas season, and get at least 1 Nod (1e60) coins in a single click.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase clicking reward by 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/500Snowballs2016Shop.png" alt="500 Snowballs" align="middle"> 500 Snowballs</b></p>
					<p><b>500 Snowballs</b>: An adventurer wants to sell you 500 Snowballs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 5 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1750Snowballs2016Shop.png" alt="1750 Snowballs" align="middle"> 1750 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 1750 Snowballs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 15 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/6000Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 6000 Snowballs</b></p>
					<p><b>6000 Snowballs</b>: An adventurer wants to sell you 6000 Snowballs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 45 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/13500Snowballs2016Shop.png" alt="13500 Snowballs" align="middle"> 13500 Snowballs</b></p>
					<p><b>13500 Snowballs</b>: An adventurer wants to sell you 13500 Snowballs for 100 Rubies. This is all the snow he could gather.</p>
					<p><b>Cost</b>: 100 Rubies</p>
					<br/>
					<p><b>Scrying</b></p>
					<p><b>Effect</b>: Produce 1 snowball every 5 minute for 4 hours.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Thanksgiving (Nov 25 - Nov 29, 2021)</a></b></p>
				<div class="autohide">
					<p>The Thanksgiving event will be starting on <b>Nov 25th 2021, 1:01 PM UTC</b> and will end on <b>Nov 29th 2021, 7:59 PM UTC</b>.</p>
					<p>Remember the Thanksgiving upgrade and bonuse will disappear after the event is over, the Feat achievement will remain.</p>
					<p><b><img src="/realm/Factions/picks/Thanksgiving.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 29 - Nov 5, 2021)</a></b></p>
				<div class="autohide">
					<p>The Halloween event will be starting on <b>Oct 29th 2021, 12:01 PM UTC</b> and will end on <b>Nov 5th 2021, 7:59 PM UTC</b>.</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realms. Choose your own, feed and grow it to its maximum potential!</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/Blood.png" /></center>
								<center><b>Blood</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Ectoplasm.png" width="74%" height="74%" /></center>
								<center><b>Ectoplasm</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Bones.png" /></center>
								<center><b>Bones</b></center>
							</div>
						</center>
					</div>
					<br/>
					<p>You will need 3058 of each (Blood, Ectoplasm and Bones) to complete event.</p>
					<p>The event will feature three Resources, <b>Blood</b>, <b>Ectoplasm</b> and <b>Bones</b>. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 720 units (12 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><center><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Pumpkin Smasher</center></b></p>
					<p>You will get a Pumpkin Smasher once a day (1:01PM UTC Time). (8 Total)</p>
					<p>Each Pumpkin Smasher includes 75 of each resources (Added to total), 1 Ruby and 1 of 3 Monster (<b>Skeleton</b>, <b>Ghost</b> and <b>Vampire</b>) if you are missing any.</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Note</b>: You need to click on monster to activate it and get the Crucible Of Darkness upgrade.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect at least 480 Ectoplasm with a single click while <b>USING</b> Ghost monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect at least 480 Blood with a single click while <b>USING</b> Vampire monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect at least 480 Bones with a single click while <b>USING</b> Skeleton monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenMagic.png" alt="Halloween" align="middle"> Halloween Magic</b></p>
					<p><b>Requirement</b>: Cast each Halloween Spell at least 100 times in this reincarnation.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SpectralSurge.png" alt="Halloween" align="middle"> Spectral Surge</b></p>
					<p><b>Requirement</b>: Collect at least 480 of each resource in a single run.(This Game)</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Turn Spiritual Surge into Spectral Surge, and multiplies Spectral Surge base bonus by the Cumulative Event Bonus.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinCollector.png" alt="Halloween" align="middle"> Pumpkin Collector</b></p>
					<p><b>Requirement</b>:Collect a stack of at least 720 of any resource after having smashed at least 3 Pumpkins.</p>
					<p><b>Effect</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Monstrous.png" align='middle'> Monstrous</b></p>
					<p><b>Requirement</b>: Collect at stack of at least 720 of any resource while using any level 50 monster.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 20%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>	
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of prestige factions outside your alignment at once.</p>
					<p><b>Note</b>: You cannot select any Lineage based on those bloodlines.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Reduce the cost of faction spells by 75%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: Level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: Multiplicatively increase Maximum Mana and Mana Regeneration based on clicks made in this game.</p>
					<p><b>Formula</b>: Max Mana: (log10(1 + x) ^ 2.5)%, where x is clicks made this game.</p>
					<p><b>Formula</b>: Mana Regeneration: (log10(1 + x) ^ 2.25)%, where x is clicks made this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 100 times greater Faction Coin find chance.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: (0.2 * (R + 1) * x ^ 0.45)%, where R is reincarnation count and x is mana produced this game.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b>Note</b>: Not affected by ascension penalties</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Triple your offline productions of Faction Coins, clicks, mana, spells cast and spell activity time.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Idillium (Sep 23 - Sep 30, 2021)</a></b></p>
				<div class="autohide">
					<p>The Idillium event will be starting on <b>Sep 23rd 2021, 12:01 PM UTC</b> and will end on <b>Sep 30th 2021, 6:59 PM UTC</b>.</p>
					<p>The event will feature three Resources, <b>Crystal Prisms</b>, <b>Entropic Drops</b> and <b>Equilibrium Fragments</b>, They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 16 hours, up to 960.</p>
					<p>Being aligned with an elite faction will double the speed a resource is gained.</p>
					<p>You need 2814 resources of each (8442 total) to complete all quests.</p>
					<p>Total time needed 5 days 20 hours and 42 minutes without elite factions or scrying.</p>
					<p>Which prism appears depends on what faction you are aligned with:</p>
					<p>As Fairy, Demon or Faceless, Entropic Drop appears.</p>
					<p>As Elven, Goblin or Druid, Equilibrium Fragment appears.</p>
					<p>As Angel, Undead or Titan, Crystal Prism appears.</p>
					<p>As factionless or Mercenary, all three will appear.</p>
					<p>As Factionless or Mercenary you can collect any of the three. By collecting one, the others will disappear.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/CrystalPrismCurrency.png" width="54%" height="54%" /></center>
								<center><b>Crystal Prism</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EntropicDropCurrency.png" width="54%" height="54%" /></center>
								<center><b>Entropic Drop</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EquilibriumFragmentCurrency.png" width="34%" height="34%" /></center>
								<center><b>Equilibrium Fragment</b></center>
							</div>
						</center>
					</div>
					<hr>
					<p><b>Event Upgrades</b></p>
					<p><img src="/realm/Factions/picks/BrokenMirror.png" align="middle"> <b>Broken Mirror</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Idillium Resources collected.</p>
					<p><b>Formula</b>: ((1 + 0.0035 * ((x + y + z) / 3)) * [(1 + min(1.6 * (x / 25) - 0.002 * (x / 25) ^ 2 + 0.000024 * (x / 25) ^ 3,12500)) * (repeat, replace x with y and z)] ^ 0.4), where x is Crystal Prisms (Order), y is Entropic Drops (Chaos), z is Equilibrium Fragments (Balance)</p>
					<br>
					<p><b>Remnants</b></p>
					<p><b>Cost to Upgrade</b>: floor((13 * x + 1) ^ 1.15) Prisms, where x is remnant level.</p>
					<p><b>Level 5</b>: Perk 1: total cost: 230 Prisms.</p>
					<p><b>Level 10</b>: Perk 2: total cost: 1138 Prisms.</p>
					<p><b>Level 15</b>: Perk 3: total cost: 2814 Prisms.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRemnant.png" align="middle"> <b>Order Remnant</b></p>
					<p><b>Requirement to Collect</b>: Angels, Undead, Titans, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Remnant level. Does not suffer Ascension penalties.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRemnant.png" align="middle"> <b>Chaos Remnant</b></p>
					<p><b>Requirement to Collect</b>: Fairies, Demon, Faceless, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Assistants based on remnant level.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRemnant.png" align="middle"> <b>Balance Remnant</b></p>
					<p><b>Requirement to Collect</b>: Elves, Goblins, Druids, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Faction Coin Find Chance based on remnant level.(multiplicative)</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Completing all Quest will increase your Cumulative Event bonus by an additional 12%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration1.png" align="middle"> <b>Order Restoration 1</b></p>
					<p><b>Requirement</b>: Order Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk1.png" align="middle"> <b>Order Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases all spells duration and reduce all spells cost by 10%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration2.png" align="middle"> <b>Order Restoration 2</b></p>
					<p><b>Requirement</b>: Order Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk2.png" align="middle"> <b>Order Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Temporal Flux spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/TemporalFlux.png" align="middle"></p>
					<p><b>Effect</b>: Increase Unique building production based on time spent in this game.</p>
					<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
					<p><b>Formula</b>: (3.5 * (x / 60) ^ 0.825)%, where x is time spent in this game this game.</p>
					<p><b>Note</b>: Temporal Flux obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration3.png" align="middle"> <b>Order Restoration 3</b></p>
					<p><b>Requirement</b>: Order Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk3.png" align="middle"> <b>Order Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Maximum Mana by 25%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/ChaosRestoration1.png" align="middle"> <b>Chaos Restoration 1</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk1.png" align="middle"> <b>Chaos Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Production Bonus from Gems by 18%.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration2.png" align="middle"> <b>Chaos Restoration 2</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk2.png" align="middle"> <b>Chaos Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Maelstrom spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/Maelstrom.png" align="middle"></p>
					<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants.</p>
					<p><b>Formulas</b></p>
					<p><b>Mana</b>: (0.02 * (log10(1 + x)) ^ 5)%, where x is mana produced this game.</p>
					<p><b>Trophy</b>: Formula (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
					<p><b>Faction Coins</b>: (0.01 * (log10(1 + x)) ^ 4)%, where x is faction coins found this game.</p>
					<p><b>Assistants</b>: (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
					<p><b>Note</b>: Maelstrom obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration3.png" align="middle"> <b>Chaos Restoration 3</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk3.png" align="middle"> <b>Chaos Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Mana Regeneration by 50%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/BalanceRestoration1.png" align="middle"> <b>Balance Restoration 1</b></p>
					<p><b>Requirement</b>: Balance Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk1.png" align="middle"> <b>Balance Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Tax Collection worth by 30 seconds.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration2.png" align="middle"> <b>Balance Restoration 2</b></p>
					<p><b>Requirement</b>: Balance Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk2.png" align="middle"> <b>Balance Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants All Creation spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/AllCreation.png" align="middle"></p>
					<p><b>Effect</b>: Increase production of all buildings based on your Mana Regeneration.</p>
					<p><b>Formula</b>: (0.15 * ln(1 + x) ^ 3.5 + 0.9 * x ^ 0.27)%, where x is your Mana Regeneration.</p>
					<p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your Mana Regeneration.</p>
					<p><b>Formula</b>: (5 * ln(1 + x) ^ 2.5 + 15 * x ^ 0.15)%, where x is your Mana Regeneration.</p>
					<p><b>Note</b>: All Creation obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration3.png" align="middle"> <b>Balance Restoration 3</b></p>
					<p><b>Requirement</b>: Balance Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk3.png" align="middle"> <b>Balance Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Royal Exchange Bonus by 20% (Additive).</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br>
					<p><img src="/realm/Factions/picks/GentleCollector.png" align="middle"> <b>Gentle Collector</b></p>
					<p><b>Requirement</b>: Collect at least 720 Entropic Drops with a single click while affiliated with the Fairies.</p>
					<br>
					<p><img src="/realm/Factions/picks/AggressiveCollector.png" align="middle"> <b>Aggressive Collector</b></p>
					<p><b>Requirement</b>: Collect at least 720 Crystal Prisms with a single click while affiliated with the Undead.</p>
					<br>
					<p><img src="/realm/Factions/picks/GoldenAge.png" align="middle"> <b>Golden Age</b></p>
					<p><b>Requirement</b>: Cast Remnant spells at least 1000 times.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration.png" align="middle"> <b>Order Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Order Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration.png" align="middle"> <b>Chaos Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Chaos Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration.png" align="middle"> <b>Balance Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Balance Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalancedCollector.png" align="middle"> <b>Balanced Collector</b></p>
					<p><b>Requirement</b>: While affiliated with the Druids, collect a stack of at least 720 Equilibrium Fragments.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br>
					<p><img src="/realm/Factions/picks/IdilliumExplorer.png" align='middle'> <b>Idillium Explorer</b></p>
					<p><b>Requirement</b>: Cast a Remnant spell with 6 different factions.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Reduce the cost of all spells by 10%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><img src="/realm/Factions/picks/IdilliumShop45.png" align="middle"> <b>1200 each Idillium Resource</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A shady prophet wants to sell you 1200 units of each Idillium Resource for 45 Rubies.</p>
					<p><b>Note</b>: You can purchase this an infinite amount of times.</p>
					<br/>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 26 - Sep 2, 2021)</a></b></p>
				<div class="autohide">
					<p>The Summer event will be starting on <b>Aug 26th 2021, 12.01 PM UTC</b> and will end on <b>Sep 2nd 2021, 6.59 PM UTC</b>.</p>
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 12 hours, up to 720 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p>You need 4500 each of <b>Flame</b> and <b>Frost Orbs</b> to complete all quests and unlocking all upgrades from Summeraans & Winterly, 400 to unlock the faction and 4100 for the 3 upgrades (800,1300 and 2000 respectively).</p>
					<p>Total time 6 days 6 hours without scrying.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<br/>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<br/>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.</p>
					<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
					<p><b>Formula</b>: min(100000, (x / 27) - (x ^ 2 / 36450) + (x ^ 3 / 98415000))%, where x is the number of Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
					<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Unlocked when aligned with Winterly</p>
					<p><b>Mana Cost</b>: 1000</p>
					<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
					<p><b>Formula</b>: (0.1 * x ^ 0.6 * (y * 30) ^ 1.1)%, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
					<p><b>Formula</b>: (20 * x ^ 0.75)%, where x is time spent aligned with the Winterly in hours.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
					<p><b>Formula</b>: (x ^ 1.03)%, where x is the number of Frost Orbs collected in total.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
					<p><b>Effect</b>: Spell durations are increased by 100%.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
					<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Unlocked when aligned with Summeraan</p>
					<p><b>Mana Cost</b>: 300</p>
					<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game for 12s.</p>
					<p><b>Formula</b>: (5 * x ^ 0.85)%, where x is the number of spells cast this game.</p>
					<p><b>Effect</b>: Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
					<p><b>Formula</b>: (x * y ^ 1.1)%, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
					<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
					<p><b>Formula</b>: (25 * x)%, where x is the number of Flame Orbs collected with the last click.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
					<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
					<p><b>Formula</b>: +(2 * log(1 + x ^ 2)), where x is the number of clicks made in this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
					<p><b>Effect</b>: Decrease the cost of all spells by 50%. (multiplicative)</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Winterly Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle">  Winterly Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" align="middle">   Winterly Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" align="middle"> Winterly Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
					<br/>
					<p><b>Summeraan Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" align="middle"> Summeraan Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
					<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
					<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
					<p><b>Unlock</b>: Collect at least 480 Flame Orbs with a single click while affiliated with the Winterly.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
					<p><b>Unlock</b>: Collect at least 480 Frost Orbs with a single click while affiliated with the Summeraans.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ClimateForecast.png" alt="Climate Forecast" align="middle"> Climate Forecast</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while unaffilliated with either of the Summer Festival factions.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Frostmelter.png" alt="Frostmelter" align="middle"> Frostmelter</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while having all three upgrades of either Summeraan or Winterly.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade upgrade with the same name.</p>
					<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on clicks made all time.</p>
					<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is clicks made all time.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/LateSpringtime.png" alt="Late Springtime" align="middle"> Late Springtime</b></p>
					<p><b>Unlock</b>: While affliated with the Fairies, collect a stack of 720 Orbs.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SearingSummer.png" align="middle"> Searing Summer</b></p>
					<p><b>Unlock</b>: Collect a stack of at least 720 Flame Orbs while Holy Light and Call to Arms are active simultaneously.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase the production of all buildings by 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<hr>
					<p><b>Shop Items</b></p>
					<p><b><img src="/realm/Factions/picks/75OrbShopItem.png" alt="Shop Item" align="middle"> 75 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300OrbShopItem.png" alt="Shop Item" align="middle"> 300 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 300 Frost and Flame Orbs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250OrbShopItem.png" alt="Shop Item" align="middle"> 1250 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 1250 Frost and Flame Orbs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500OrbShopItem.png" alt="Shop Item" align="middle"> 3500 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 3500 Frost and Flame Orbs for 100 Rubies. These are all the orbs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin Invasion (Jul 26 - Jul 30, 2021)</a></b></p>
				<div class="autohide">
					<p>The Goblin Invasion event will be starting on <b>Jul 26th 2021, 12:01 PM UTC</b> and will end on <b>Jul 30th 2021, 6:59 PM UTC</b>.</p>
					<p><b><img src="/realm/Factions/picks/TheGreatestArmy2017.png" alt="The Greatest Army" align="middle"> The Greatest Army</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Goblin Crowns collected.</p>
					<p><b>Formula</b>: (x / 20 - 0.005 * (x / 20) ^ 2 + 0.00045 * (x / 20) ^ 3)%, where x is amount of collected Goblin Crowns. Capped at 100000%.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<br/>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/GobinCrown2017.png" alt="Goblin Crowns" align="middle"> Goblin Crowns</b></p>
					<p>During the Goblin Invasion Event you will be able to collect Goblin Crowns, appearing in a random location of your screen at a rate of 1 per minute, stacking up to 720 units (12 hours). These Resources will be used to either fight or support the invading Goblin Army: both choices will grant you new bonuses and unlock new unique upgrades. You can also complete Quests and Feats, also found in the Event panel. Aside for completion purposes, completed quests will also grant a small permanent production bonus. Remember that all Goblin Invasion upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<p>The Formula for the cost needed to level a faction is floor((level + 1) ^ 0.85) Goblin Crowns</p>
					<p>You need 203 Goblin Crowns (total) to level a faction to level 25, 740 to level 50, and 2685 to level 100.</p>
					<p>You need 5370 Goblin Crowns to complete all quest by leveling both factions to level 100, Total time 3 days 17 hours 30 minutes without scrying.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FighttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Fight the Goblin Army</b></p>
					<p><b>Requirement</b>: Good or Neutral alignment</p>
					<p><b>Effect</b>: Increase maximum mana and mana regeneration by 1% per level.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SupporttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Support the Goblin Army</b></p>
					<p><b>Requirement</b>: Evil or Neutral alignment</p>
					<p><b>Effect</b>: Increase your assistants by 1% per level.</p>
					<hr>
					<p><b>Event Quest</b></p>
					<p><b>Goblin's Bane Quest</b>: Fight the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 1 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Magical Clicks</b></p>
					<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
					<p><b>Formula</b>: (floor(0.6 * ln(1 + x) ^ 4 + 1)), where x is the amount of active spells.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 2 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Eye of the King</b></p>
					<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of clicks made in this Reincarnation.</p>
					<p><b>Formula</b>: ((log10(1 + x)) ^ 3.5)%, where x is the amount of clicks made in this reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 3 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Spare Green Hands</b></p>
					<p><b>Effect</b>: Each manual click counts as 1000 clicks for all purposes.</p>
					<hr>
					<p><b>Goblin's Commander Quest</b>: Support the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 1 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
					<p><b>Effect</b>: All spells activity time counts more based on Evil spells cast in this Reincarnation.</p>
					<p><b>Formula</b>: (24 + 12 * ln(1 + x))%, where x is Evil spells cast in this Reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 2 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin Commandos</b></p>
					<p><b>Effect</b>: Increases the production of Neutral Buildings based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (150 * x ^ 0.25)%, where x is amount of assistants you own.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 3 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> The Slack King</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
					<p><b>Formula</b>: (0.01 * x ^ 0.7)%, where x is time spent in this Reincarnation.</p>
					<hr>
					<p><b>Event Feat</b></p>
					<p><b><img src="/realm/Factions/picks/GoblinsBane2017.png" alt="Seraphim Champion" align="middle"> Goblins Bane</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsCommander2017.png" alt="Seraphim Champion" align="middle"> Goblin's Commander</b></p>
					<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsEverywhere!2017.png" alt="Seraphim Champion" align="middle"> Goblins Everywhere!</b></p>
					<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
					<p><b>Note</b>: Prestige Factions count as 1 for Good, Evil, and Neutral alignment (Example Angel/Dwarven is 1, any other Good/Dwarven is not counted)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldHunt2018.png" align="middle"> Gold Hunt</b></p>
					<p><b>Requirement</b>: Collect at least 480 Goblin Crowns with a single click while affiliated with Goblins.</p>
					<p><b>Note</b>: As prestige, only prestige will count. For example, Angel/Dwarven counts as Dwarven for feat purposes.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/TheUndecidedArmada.png" align="middle"> The Undecided Armada</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 480 Goblin Crowns while having no faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase assistants based on the amount of buildings you own (multiplicative).</p>
					<p><b>Formula</b>: (0.65 * x ^ 0.35)%, where x is the amount of buildings you own.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PlatinumTrophy.png" align="middle"> Platinum Trophy</b></p>
					<p><b>Requirement</b>: While affiliated with the Goblins and having supported the Army at least 70 times, collect a stack of at least 720 Goblin Crowns.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodyCrown.png" align="middle"> Bloody Crown</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 Goblin Crowns while Blood Frenzy and Call to Arms are active simultaneously.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase production bonus from Gems by a multiplicative 10%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/75GoblinCrowns2017.png" align="middle"> 75 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 75 Goblin Crowns for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300GoblinCrowns2017.png" align="middle"> 300 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 300 Goblin Crowns 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250GoblinCrowns2017.png" align="middle"> 1250 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 1250 Goblin Crowns for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500GoblinCrowns2017.png" align="middle"> 3500 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 3500 Goblin Crowns for 100 Rubies.</p>
					<p>These are all the crowns he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">6th Anniversary - Blood War (May 17 - May 21, 2021)</a></b></p>
				<div class="autohide">
					<p>The Blood War event will be starting on <b>May 17th 2021, 12:01 PM UTC</b> and will end on <b>May 21st 2021, 6:59 PM UTC</b>.</p>
					<p><b><img src="/realm/Factions/picks/NephilimGlory2017.png" alt="Nephilim Glory" align="middle"> Nephilim Glory</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Holy Symbols and Lava Stones collected.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<p><b><center>Event Resources</center></b></p>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/HolySymbolCurrency.png" width="54%" height="54%" /></center>
								<center><b>Holy Symbols</b></center>
							</div>
							<div>
								<center><img src="/realm/Factions/picks/LavaStoneCurrency.png" width="64%" height="64%" /></center>
								<center><b>Lava Stones</b></center>
							</div>
						</center>
					</div>
					<br>
					<p>Holy Symbols and Lava Stones will appear on a random location of the game screen and you simply have to click to collect them, then wait for more Resources to appear. Or you can let them grow bigger over time (at a rate of 1 Resource per Minute) if you are idle or offline, up to a maximum size of 720 Holy Symbols or Lava Stones! Be careful though, you can only collect one stack of Holy Symbols or Lava Stones - by doing so, the other will disappear.</p>
					<p><b>Note</b>: You need 2350 of each resource to get all the upgrades.</p>
					<p><b>Note</b>: All upgrades has a 1 time cost but needs selected every Abdication and Reincarnation.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SeraphimAlliance2017.png" alt="Seraphim Alliance" align="middle"> Seraphim Alliance</b></p>
					<p><b>Cost</b>: 200 Holy Symbols</p>
					<p><b>Description</b>: The highest Angelic ranks carry wings blazing with pure light, whose every feather is infused with enough magical power to revive a dead soul or purify the hearts of a thousand sinners. Affiliating with the Seraphim will increase your magical abilities to the extreme, but you can only do so when playing as Good or Neutral.</p>
					<br/>
					<p><b>Seraphim Quest</b></p>
					<p><b>Seraphim Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/HeavenlyFeathers2017.png" alt="Heavenly Feathers" align="middle"> Heavenly Feathers</b></p>
					<p><b>Cost</b>: 400 Holy Symbols.</p>
					<p><b>Effect</b>: All buildings also increase your mana regeneration.</p>
					<p><b>Formula</b>: (2 * x ^ 0.2)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/God'sChamber2017.png" alt="God's Chamber" align="middle"> God's Chamber</b></p>
					<p><b>Cost</b>: 750 Holy Symbols.</p>
					<p><b>Effect</b>: Increase maximum mana by 1 for every 10 buildings you own.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/BoonofRadiance2017.png" alt="Boon of Radiance" align="middle"> Boon of Radiance</b></p>
					<p><b>Cost</b>: 1000 Holy Symbols.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
					<p><b>Formula</b>: (0.2 * (x * 30) ^ 0.85), where x is current mana regeneration.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus.</p>
					<p><b>Effect</b>: Also completes Seraphim Champion Feat.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/AsmondeanAlliance2017.png" alt="Asmodean Alliance" align="middle"> Asmodean Alliance</b></p>
					<p><b>Cost</b>: 200 Lava Stones</p>
					<p><b>Description</b>: The most cruel of Demons also happen to be the biggest and most deformed abyssal creatures, featuring all kinds of unnatural flesh and bone appendages. Their very existence is a pain to see and hear driving all but the most strong souls to madness. Affiliating with the Asmodeans will bolster your assistant army unbelievably, but you can only do so when playing as Evil or Neutral.</p>
					<br/>
					<p><b>Asmodean Quest</b></p>
					<p><b>Asmodean Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/Broodmothers2017.png" alt="Broodmothers" align="middle"> Broodmothers</b></p>
					<p><b>Cost</b>: 400 Lava Stones</p>
					<p><b>Effect</b>: Gain additional assistants based on time spent affiliated with the Asmodeans.</p>
					<p><b>Formula</b>: (0.25 * x * (x + 1)), where x is hours</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/AbyssalGaze2017.png" alt="Abyssal Gaze" align="middle"> Abyssal Gaze</b></p>
					<p><b>Cost</b>: 750 Lava Stones</p>
					<p><b>Effect</b>: Increase assistant production based on time spent as Evil (This R).</p>
					<p><b>Formula</b>: (2 * x ^ 0.7)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/Legion'sLimbs2017.png" alt="Legion's Limbs" align="middle"> Legion's Limbs</b></p>
					<p><b>Cost</b>: 1000 Lava Stones</p>
					<p><b>Effect</b>: Increase clicking rewards based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (x ^ 0.85)</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus</p>
					<p><b>Effect</b>: Also completes Asmodean Champion Feat.</p>
					<hr>
					<p><b>Event Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/SeraphimChampion2017.png" alt="Seraphim Champion" align="middle"> Seraphim Champion</b></p>
					<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AsmondeanChampion2017.png" alt="Asmodean Champion" align="middle"> Asmodean Champion</b></p>
					<p><b>Requirement</b>: Purchase all Asmodean Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SacredHoliness2017.png" alt="Sacred Holiness" align="middle"> Sacred Holiness</b></p>
					<p><b>Requirement</b>: Collect at least 480 Holy Symbols with a single click while affiliated with the Angels.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/DarkestHeresy2017.png" alt="Darkest Heresy" align="middle"> Darkest Heresy</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click while affiliated with the Demons</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Indifference2018.png" alt="Indifference" align="middle"> Indifference</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click or Holy Symbols while affiliated with a Neutral faction</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WorldRestoration.png" alt="World Restoration" align="middle"> World Restoration</b></p>
					<p><b>Requirement</b>: Have the same amount of Holy Symbols and Lava Stone at any given time, while having at least 1400.(Total)</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of aligned buildings based on time spent as your least used alignment in this Reincarnation.</p>
					<p><b>Formula</b>: (25 + 0.5 * x ^ 0.5)%, where x is your least used alignment in this Reincarnation (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FrenziedArmy2021.png" alt="Frenzied Army" align="middle"> Frenzied Army</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while Blood Frenzy and Call to Arms are active simultaneously.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase assistants by 10%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EternalBattle.png" align="middle"> Eternal Battle</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while having 3 upgrades of any Blood War faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/40HolySymbolsandLavaStones2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 40 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 40 Holy Symbols and Lava Stones for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/150HolySymbolsandLavaStones2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 150 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 150 Holy Symbols and Lava Stones for 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/650HolySymbolsandLavaStones2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 650 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 650 Holy Symbols and Lava Stones for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1800HolySymbolsandLavaStones2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 1800 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 1800 Holy Symbols and Lava Stones for 100 Rubies.</p>
					<p>These are all the resources he could gather.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 Lave Stone and 1 Holy Synbol every 10 minutes for 4 hours.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Apr 2 - Apr 9, 2021)</a></b></p>
				<div class="autohide">
					<p>The Easter event will be starting on <b>Apr 2nd 2021, 12:01 PM UTC</b> and will end on <b>Apr 9th 2021, 6:59 PM UTC</b>.</p>
					<p>You get a RNG state for Eggs when the event begins, Which predetermines when you'll get certain eggs.</p>
					<p>Paste your Export in the <a target="_blank" href="http://dox4242.github.io/mri/index.html"><b>Meggnetic Resonance Imager</a></b> to see when you will get your next Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EventResourceEaster2017.png" alt="Blue Omelette" align="middle"> Event Resource</b></p>
					<p>Eggs will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Egg to appear. Or, you can let them grow bigger over time (at a rate of 1 Egg per minute) if you are idle or offline- up to a maximum size of 720 Eggs! Eggs are divided into Common, Rare and Unique Eggs, and each time you collect them you will get random types based on their rarity. Each time you find or buy a Unique Egg, you also gain 1 free Ruby!</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BlueOmeletteEaster2017.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of rare eggs collected.</p>
					<p><b>Formula</b>: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000%.</p>
					<p><b>Note</b>: Using Rare Eggs to buy Unique Eggs will not effect the bonus.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEggEaster2017.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Note</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg3000Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Note</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUnique100Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Note</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b>Egg Hunter Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggHunter750Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Collect 750 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter2000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Collect 2000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter4000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Collect 4000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Hunter Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<hr>
					<p><b>Egg Collection Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggCollection1Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Find 1 Unique Egg.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection3Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Find 3 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection5Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Find 5 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Find 8 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Collection Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<hr>
					<p><b>Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldenChickenEaster2017.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GreyEaster2017.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BunnyHelpers2018.png" alt="Bunny Helpers" align="middle"> Bunny Helpers</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having exactly 480 assistants.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bowl.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateEgg2019.png" align="middle"> Chocolate Egg</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having at least 3 active spells.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
					<p><b>Note</b>: Upgrade only available during seasonal events.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Eggsceptional.png" align="middle"> Eggsceptional</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Requirement</b>: Collect a full stack of 720 Eggs at any time during the Easter event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/RottenEgg2021.png" align="middle"> Rotten Egg</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Requirement</b>: Collect a full stack of 720 Eggs while being affiliated with the Undead.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase offline production by 100%.</p></p>
					<p><b>Note</b>: Upgrade only available during seasonal events.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p><b><img src="/realm/Factions/picks/UGiantEggEaster2017.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEggEaster2017.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect</b>: Increase the production of all buildings by 100%</p>
					<p><b>Effect A1</b>: Increase the production of all buildings by 7.18%.</p>
					<p><b>Effect A2</b>: Increase the production of all buildings by 0.7%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEggEaster2017.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEggEaster2017.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect</b>: Increase clicking reward by 100%</p>
					<p><b>Effect A1</b>: Increase clicking reward by 7.18%</p>
					<p><b>Effect A2</b>: Increase clicking reward by 0.07</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEggEaster2017.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEggEaster2017.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect</b>: Increase offline production by 500%</p>
					<p><b>Effect A1</b>: Increase offline production by 19.6%</p>
					<p><b>Effect A2</b>: Increase offline production by 1.81%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEggEaster2017.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations base cost (base excavation cost reduced from 1e27 to 1e24).</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEggEaster2017.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b>Scry</b> Produce 1 random Egg every 5 minutes for 4 hours.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs150Easter2017.png" alt="Bundle of Eggs" align="middle"> 150 Eggs</b></p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs600Easter2017.png" alt="Bundle of Eggs" align="middle"> 600 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 15 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 600 eggs for 15 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs2500Easter2017.png" alt="Bundle of Eggs" align="middle"> 2500 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 45 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 2500 eggs for 45 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs7000Easter2017.png" alt="Bundle of Eggs" align="middle"> 7000 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 100 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 7000 eggs for 100 rubies. These are all the eggs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2021)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/AprilFools2017.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b>Note</b>: If you got this upgrade in the past it will only show in purchased upgrades.</p>
					<p><b>Note</b>: This upgrade does nothing.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (Feb 12 - Feb 16, 2021)</a></b></p>
				<div class="autohide">
					<p>The Valentine event will be starting on <b>Feb 12th 2021, 1:01 PM UTC</b> and will end on <b>Feb 16th 2021, 7:59 PM UTC</b>.</p>
					<p><b>Event Theme</b>: <b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts</b></p>
					<p>Collected online and offline at a base rate of 1 per second and can be increased up to 4/s during the length of the event as follows:</p>
					<p><b><img src="/realm/Factions/picks/CalltoLove2017.png" alt="CalltoLove" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Play during the Valentines Event</p>
					<p><b>Mana Cost</b>: 200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>: In addition to the Call to Arms spell effect, increases heart production per second based on the active time for Call to Love.</p>
					<p><b>Base Production</b>: 1 heart/sec with no active time for CtL</p>
					<p>2 hearts/sec for 10 seconds of active time for CtL (All time)</p>
					<p>3 hearts/sec for 1000 seconds (16 min, 40 sec) of active time for CtL  (All time)</p>
					<p>4 hearts/sec for 100000 seconds of active time for CtL (27 hours, 47 min) (All time)</p>
					<p><b>Formula</b>:floor(1.5 + 0.5 * floor(log10(1 + x)))</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts Upgrades</b></p>
					<p><b>Note</b>: Every 100 Heart Upgrades purchased will give 1 free Ruby.</p>
					<p><b>Note</b>: All Heart Upgrades will be like Ruby Upgrades for the duration of Event.(<b>Additive only</b>)</p>
					<p><b>Note</b>: The first Upgrade for each is 100 Hearts. It increases by 100 for each additional Upgrade (ie..100,200,300).</p>
					<p><b>Effects</b></p>
					<p><b>Assistants</b>: Increases by 1 Assistant with each Upgrade.</p>
					<p><b>Mana Regen</b>: Increases by 0.5 with each Upgrade.</p>
					<p><b>Max Mana</b>: Increases by 25 with each Upgrade.</p>
					<p><b>Gem Bonus</b>: Increases by 0.50 with each Upgrade.</p>
					<p><b>Exchange Bonus</b>: Increases by 1.50 with each Upgrade.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Buy 50 Heart Upgrades of each to complete Quest (<b>Must show 5100+ for each upgrade</b>)</p>
					<p><b>Note</b>: Total Hearts needed to complete all quest <b>if spread equally</b> 637500</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> Feel the Love 1</b></p>
					<p><b>Requirement</b>: 50 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> Feel the Love 2</b></p>
					<p><b>Requirement</b>: 125 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Feel the Love 3</b></p>
					<p><b>Requirement</b>: 250 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 2%.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Purchase 250 Heart Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage2017.png" alt="" align="middle"> I Love You in Every Language</b></p>
					<p><b>Requirement</b>: Cast Call to Love at least once with 6 different Factions.</p>
					<p><b>Note</b>: When doing the cast with 6 factions, if you do it to fast the game will not register it.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AssistantLove2018.png" alt="" align="middle"> Assistant Love</b></p>
					<p><b>Requirement</b>: Reach 50 Assistants from Heart Upgrades.</p>
					<p><b>Reward</b>: If you unlock this feat, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateBoxFeat2019.png" align="middle"> Chocolate Box</b></p>
					<p><b>Requirement</b>: Have at least 72 hours of Call to Love activity time during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase your event bonus by a multiplicative 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FairyLove.png" align="middle"> Fairy Love</b></p>
					<p><b>Requirement</b>: While affiliated with the fairies, click 1000 times during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/UnrequitednessFeat2021.png" align="middle"> Unrequitedness</b></p>
					<p><b>Requirement</b>: Cast Call to Love while being affiliated with a Neutral Faction and with at least 2 hours of activity time with the spell during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase Neutral production by 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" align="middle"> 15000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 15000 Hearts for 5 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" align="middle"> 50000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 50000 Hearts for 55 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest3.png" align="middle"> 175000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 175000 Hearts for 45 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" align="middle"> 400000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 400000 Hearts for 100 Rubies. It will run out of power after you use this last time.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 heart every 5 seconds for 4 hours.</p>
					<hr>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">2020 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 21, 2020 - Jan 5, 2021)</a></b></p>
				<div class="autohide">
					<p>The Christmas event will be starting on <b>Dec 21st 2020, 1:01 PM UTC</b> and will end on <b>Jan 5th 2021, 7:59 PM UTC</b>.</p>
					<p>It's Christmas time! The subjects of your Realm are sensing the aura of power in the air, inspiring them in their daily life and making them feel proud of your righteous leadership. Encouraged by your unmatched abilities as a ruler, they believed it would be appropriate to offer you a daily tribute for the duration of the Holidays.</p>
					<p><b>Event Theme</b>: Snowballs. They will accumulate at a rate of 1 per minute, up to a maximum of 720 (12 hours). Collecting Snowballs will allow you to complete quests and increase your Avalanche upgrade bonus.</p>
					<p>Every day you will receive a Christmas Present containing Snowballs or Rubies. Presents are required to complete quests and can only be retrieved once per day by going online.</p>
					<p><b>Note</b>: The daily Christmas presents contains 1 Ruby or 200 Snowballs (every other present)</p>
					<p><b>Event Bonus</b>: Total cumulative and permanent quest bonus at the end of the Event: 14%</p>
					<p><b>Note</b>: If you didn't unlock all the Christmas feats last year, you have a chance to do so with this one! If you already did, you will be able to gain additional permanent production bonuses from completing all the quests again, and benefit from the massive bonus from the Avalanche upgrade once again.</p>
					<p>You can find all this information in a guide by pressing the "?" button in the Event Panel.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Avalanche2017.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected.</p>
					<p><b>Formula</b>: (0.8 * (s / 35) + -0.006 * (s / 35)^2 + 0.00004 * (s / 35)^3)% (max 100000% bonus), where s is amount of collected snowballs.</p>
					<p><b>Formula</b>: (1 + 0.01 * x) ^ (0.1 ^ A) where A is ascension and x is avalanche formula in percentage.</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HeavyAvalanche2017.png" alt="Avalanche" align="middle"> Heavy Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R40+.</p>
					<p><b>Cost</b>: 5000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (2.5 * A)), where x is original bonus in percentage</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GrandAvalanche2017.png" alt="Avalanche" align="middle"> Grand Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R100+.</p>
					<p><b>Cost</b>: 10000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (5 * A)), where x is original bonus in percentage (overrides Heavy Avalanche)</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Snowpile2016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Collect 1000, 4500, 10000 and 21000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile12016.png" alt="Snowpile 1" align="middle"> Snowpile 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Collect 1000 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile22016.png" alt="Snowpile 2" align="middle"> Snowpile 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Collect 4500 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile32016.png" alt="Snowpile 3" align="middle"> Snowpile 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Collect 10000 Snowballs</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile 4" align="middle"> Snowpile 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Collect 21000 Snowballs</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector12016.png" alt="Gift Collector 1" align="middle"> Gift Collector 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Open 1 present</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector22016.png" alt="Gift Collector 2" align="middle"> Gift Collector 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Open 4 presents</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector32016.png" alt="Gift Collector 3" align="middle"> Gift Collector 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Open 8 presents</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector 4" align="middle"> Gift Collector 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Open 13 presents</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/SantasHelpers2016.png" alt="SantasHelpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play Elves and get 50 assistants</p>
					<p><b>Note</b>: Unlockable in R7 using undead bloodline.</p>
					<p><b>Note</b>: Dwarven is allowed.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Unholidays2016.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Ally with Undead, purchase Undead Trade Treaty, Undead Friendship Pact, and Undead Alliance, during the Christmas season.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Complete all the Snowpile quests</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="GiftCollector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Open 13 Presents</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FreezingHell2018.png" alt="FreezingHell" align="middle"> Freezing Hell</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect at least 480 Snowballs with a single click while affiliated with the Demons.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PerfectSnowflake.png" align="middle"> Perfect Snowflake</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect Snowballs to find the Perfect Snowflake. Your chances increase as you collect more.</p>
					<p><b>Chance</b>: min(1, (x ^ 2 / 9,000,000,000 (9 T))), where x is snowballs collected.</p>
					<p><b>Effect</b>: Reduce Royal Exchange cost multiplier by 0.01.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SnowballFight.png" alt="SnowballFight" align="middle"> Snowball Fight</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect a stack of at least 720 Snowballs while Call to Arms is active.</p>
					<p><b>Effect</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/500Snowballs2016Shop.png" alt="500 Snowballs" align="middle"> 500 Snowballs</b></p>
					<p><b>500 Snowballs</b>: An adventurer wants to sell you 500 Snowballs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 5 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1750Snowballs2016Shop.png" alt="1750 Snowballs" align="middle"> 1750 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 1750 Snowballs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 15 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/6000Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 6000 Snowballs</b></p>
					<p><b>6000 Snowballs</b>: An adventurer wants to sell you 6000 Snowballs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 45 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/13500Snowballs2016Shop.png" alt="13500 Snowballs" align="middle"> 13500 Snowballs</b></p>
					<p><b>13500 Snowballs</b>: An adventurer wants to sell you 13500 Snowballs for 100 Rubies. This is all the snow he could gather.</p>
					<p><b>Cost</b>: 100 Rubies</p>
					<br/>
					<p><b>Scrying</b></p>
					<p><b>Effect</b>: Produce 1 snowball every 5 minute for 4 hours.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Thanksgiving (Nov 24 - Nov 28, 2020)</a></b></p>
				<div class="autohide">
					<p>The Thanksgiving event will be starting on <b>Nov 24th 2020, 1:01 PM UTC</b> and will end on <b>Nov 28th 2020, 7:59 PM UTC</b>.</p>
					<p>Remember the Thanksgiving upgrade and bonuse will disappear after the event is over, the Feat achievement will remain.</p>
					<p><b><img src="/realm/Factions/picks/Thanksgiving.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 28 - Nov 4, 2020)</a></b></p>
				<div class="autohide">
					<p>The Halloween event will be starting on <b>Oct 28th 2020, 1:01 PM UTC</b> and will end on <b>Nov 4th 2020, 7:59 PM UTC</b>.</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realms. Choose your own, feed and grow it to its maximum potential!</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/Blood.png" /></center>
								<center><b>Blood</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Ectoplasm.png" width="74%" height="74%" /></center>
								<center><b>Ectoplasm</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Bones.png" /></center>
								<center><b>Bones</b></center>
							</div>
						</center>
					</div>
					<br/>
					<p>You will need 3058 of each (Blood, Ectoplasm and Bones) to complete event.</p>
					<p>The event will feature three Resources, <b>Blood</b>, <b>Ectoplasm</b> and <b>Bones</b>. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 720 units (12 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><center><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Pumpkin Smasher</center></b></p>
					<p>You will get a Pumpkin Smasher once a day (1:01PM UTC Time). (8 Total)</p>
					<p>Each Pumpkin Smasher includes 75 of each resources (Added to total), 1 Ruby and 1 of 3 Monster (<b>Skeleton</b>, <b>Ghost</b> and <b>Vampire</b>) if you are missing any.</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Note</b>: You need to click on monster to activate it and get the Crucible Of Darkness upgrade.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect at least 480 Ectoplasm with a single click while <b>USING</b> Ghost monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect at least 480 Blood with a single click while <b>USING</b> Vampire monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect at least 480 Bones with a single click while <b>USING</b> Skeleton monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenMagic.png" alt="Halloween" align="middle"> Halloween Magic</b></p>
					<p><b>Requirement</b>: Cast each Halloween Spell at least 100 times in this reincarnation.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SpectralSurge.png" alt="Halloween" align="middle"> Spectral Surge</b></p>
					<p><b>Requirement</b>: Collect at least 480 of each resource in a single run.(This Game)</p>
					<p>If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Turn Spiritual Surge into Spectral Surge, and multiplies Spectral Surge base bonus by the Cumulative Event Bonus.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinCollector.png" alt="Halloween" align="middle"> Pumpkin Collector</b></p>
					<p><b>Requirement</b>:Collect a stack of at least 720 of any resource after having smashed at least 3 Pumpkins.</p>
					<p><b>Effect</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of prestige factions outside your alignment at once.</p>
					<p><b>Note</b>: You cannot select any Lineage based on those bloodlines.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Reduce the cost of faction spells by 75%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: Level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: Multiplicatively increase Maximum Mana and Mana Regeneration based on clicks made in this game.</p>
					<p><b>Formula</b>: Max Mana: (log10(1 + x) ^ 2.5)%, where x is clicks made this game.</p>
					<p><b>Formula</b>: Mana Regeneration: (log10(1 + x) ^ 2.25)%, where x is clicks made this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 100 times greater Faction Coin find chance.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: (0.2 * (R + 1) * x ^ 0.45)%, where R is reincarnation count and x is mana produced this game.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b>Note</b>: Not affected by ascension penalties</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Triple your offline productions of Faction Coins, clicks, mana, spells cast and spell activity time.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Idillium (Sep 23 - Sep 30, 2020)</a></b></p>
				<div class="autohide">
					<p>The Idillium event will be starting on <b>Sep 23rd 2020, 12:01 PM UTC</b> and will end on <b>Sep 30th 2020, 6:59 PM UTC</b>.</p>
					<p>The event will feature three Resources, <b>Crystal Prisms</b>, <b>Entropic Drops</b> and <b>Equilibrium Fragments</b>, They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 16 hours, up to 960.</p>
					<p>Being aligned with an elite faction will double the speed a resource is gained.</p>
					<p>You need 2814 resources of each (8442 total) to complete all quests.</p>
					<p>Total time needed 5 days 20 hours and 42 minutes without elite factions or scrying.</p>
					<p>Which prism appears depends on what faction you are aligned with:</p>
					<p>As Fairy, Demon or Faceless, Entropic Drop appears.</p>
					<p>As Elven, Goblin or Druid, Equilibrium Fragment appears.</p>
					<p>As Angel, Undead or Titan, Crystal Prism appears.</p>
					<p>As factionless or Mercenary, all three will appear.</p>
					<p>As Factionless or Mercenary you can collect any of the three. By collecting one, the others will disappear.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/CrystalPrismCurrency.png" width="54%" height="54%" /></center>
								<center><b>Crystal Prism</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EntropicDropCurrency.png" width="54%" height="54%" /></center>
								<center><b>Entropic Drop</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EquilibriumFragmentCurrency.png" width="34%" height="34%" /></center>
								<center><b>Equilibrium Fragment</b></center>
							</div>
						</center>
					</div>
					<hr>
					<p><b>Event Upgrades</b></p>
					<p><img src="/realm/Factions/picks/BrokenMirror.png" align="middle"> <b>Broken Mirror</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Idillium Resources collected.</p>
					<p><b>Formula</b>: ((1 + 0.0035 * ((x + y + z) / 3)) * [(1 + min(1.6 * (x / 25) - 0.002 * (x / 25) ^ 2 + 0.000024 * (x / 25) ^ 3,12500)) * (repeat, replace x with y and z)] ^ 0.4), where x is Crystal Prisms (Order), y is Entropic Drops (Chaos), z is Equilibrium Fragments (Balance)</p>
					<br>
					<p><b>Remnants</b></p>
					<p><b>Cost to Upgrade</b>: floor((13 * x + 1) ^ 1.15) Prisms, where x is remnant level.</p>
					<p><b>Level 5</b>: Perk 1: total cost: 230 Prisms.</p>
					<p><b>Level 10</b>: Perk 2: total cost: 1138 Prisms.</p>
					<p><b>Level 15</b>: Perk 3: total cost: 2814 Prisms.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRemnant.png" align="middle"> <b>Order Remnant</b></p>
					<p><b>Requirement to Collect</b>: Angels, Undead, Titans, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Remnant level. Does not suffer Ascension penalties.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRemnant.png" align="middle"> <b>Chaos Remnant</b></p>
					<p><b>Requirement to Collect</b>: Fairies, Demon, Faceless, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Assistants based on remnant level.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRemnant.png" align="middle"> <b>Balance Remnant</b></p>
					<p><b>Requirement to Collect</b>: Elves, Goblins, Druids, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Faction Coin Find Chance based on remnant level.(multiplicative)</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Completing all Quest will increase your Cumulative Event bonus by an additional 12%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration1.png" align="middle"> <b>Order Restoration 1</b></p>
					<p><b>Requirement</b>: Order Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk1.png" align="middle"> <b>Order Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases all spells duration and reduce all spells cost by 10%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration2.png" align="middle"> <b>Order Restoration 2</b></p>
					<p><b>Requirement</b>: Order Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk2.png" align="middle"> <b>Order Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Temporal Flux spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/TemporalFlux.png" align="middle"></p>
					<p><b>Effect</b>: Increase Unique building production based on time spent in this game.</p>
					<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
					<p><b>Note</b>: Temporal Flux obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration3.png" align="middle"> <b>Order Restoration 3</b></p>
					<p><b>Requirement</b>: Order Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk3.png" align="middle"> <b>Order Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Maximum Mana by 25%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/ChaosRestoration1.png" align="middle"> <b>Chaos Restoration 1</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk1.png" align="middle"> <b>Chaos Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Production Bonus from Gems by 18%.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration2.png" align="middle"> <b>Chaos Restoration 2</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk2.png" align="middle"> <b>Chaos Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Maelstrom spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/Maelstrom.png" align="middle"></p>
					<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants.</p>
					<p><b>Formulas</b></p>
					<p><b>Mana</b>: (0.02 * (log10(1 + x)) ^ 5)%, where x is mana produced this game.</p>
					<p><b>Trophy</b>: Formula (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
					<p><b>Faction Coins</b>: (0.01 * (log10(1 + x)) ^ 4)%, where x is faction coins found this game.</p>
					<p><b>Assistants</b>: (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
					<p><b>Note</b>: Maelstrom obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration3.png" align="middle"> <b>Chaos Restoration 3</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk3.png" align="middle"> <b>Chaos Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Mana Regeneration by 50%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/BalanceRestoration1.png" align="middle"> <b>Balance Restoration 1</b></p>
					<p><b>Requirement</b>: Balance Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk1.png" align="middle"> <b>Balance Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Tax Collection worth by 30 seconds.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration2.png" align="middle"> <b>Balance Restoration 2</b></p>
					<p><b>Requirement</b>: Balance Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk2.png" align="middle"> <b>Balance Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants All Creation spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/AllCreation.png" align="middle"></p>
					<p><b>Effect</b>: Increase production of all buildings based on mana regeneration rate.</p>
					<p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your mana regeneration rate.</p>
					<p><b>Formula</b>: (0.15 * ln(x) ^ 3.5 + 0.9 * x ^ 0.27), where x is mana per second.</p>
					<p><b>Note</b>: All Creation obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration3.png" align="middle"> <b>Balance Restoration 3</b></p>
					<p><b>Requirement</b>: Balance Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk3.png" align="middle"> <b>Balance Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Royal Exchange Bonus by 20% (Additive).</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br>
					<p><img src="/realm/Factions/picks/GentleCollector.png" align="middle"> <b>Gentle Collector</b></p>
					<p><b>Requirement</b>: Collect at least 720 Entropic Drops with a single click while affiliated with the Fairies.</p>
					<br>
					<p><img src="/realm/Factions/picks/AggressiveCollector.png" align="middle"> <b>Aggressive Collector</b></p>
					<p><b>Requirement</b>: Collect at least 720 Crystal Prisms with a single click while affiliated with the Undead.</p>
					<br>
					<p><img src="/realm/Factions/picks/GoldenAge.png" align="middle"> <b>Golden Age</b></p>
					<p><b>Requirement</b>: Cast Remnant spells at least 1000 times.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration.png" align="middle"> <b>Order Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Order Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration.png" align="middle"> <b>Chaos Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Chaos Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration.png" align="middle"> <b>Balance Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Balance Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalancedCollector.png" align="middle"> <b>Balanced Collector</b></p>
					<p><b>Requirement</b>: While affiliated with the Druids, collect a stack of at least 720 Equilibrium Fragments.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><img src="/realm/Factions/picks/IdilliumShop45.png" align="middle"> <b>1200 each Idillium Resource</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A shady prophet wants to sell you 1200 units of each Idillium Resource for 45 Rubies.</p>
					<p><b>Note</b>: You can purchase this an infinite amount of times.</p>
					<br/>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 17 - Aug 24, 2020)</a></b></p>
				<div class="autohide">
					<p>The Summer event will be starting on <b>Aug 17th 2020, 12:01 PM UTC</b> and will end on <b>Aug 24th 2020, 6:59 PM UTC</b>.</p>
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 12 hours, up to 720 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p>You need 4500 each of <b>Flame</b> and <b>Frost Orbs</b> to complete all quests and unlocking all upgrades from Summeraans & Winterly, 400 to unlock the faction and 4100 for the 3 upgrades (800,1300 and 2000 respectively).</p>
					<p>Total time 6 days 6 hours without scrying.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<br/>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<br/>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.</p>
					<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
					<p><b>Formula</b>: min(100000, (x / 27) - (x ^ 2 / 36450) + (x ^ 3 / 98415000))%, where x is the number of Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
					<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Unlocked when aligned with Winterly</p>
					<p><b>Mana Cost</b>: 1000</p>
					<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
					<p><b>Formula</b>: (0.1 * x ^ 0.6 * (y * 30) ^ 1.1)%, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
					<p><b>Formula</b>: (20 * x ^ 0.75)%, where x is time spent aligned with the Winterly in hours.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
					<p><b>Formula</b>: (x ^ 1.03)%, where x is the number of Frost Orbs collected in total.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
					<p><b>Effect</b>: Spell durations are increased by 100%.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
					<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Unlocked when aligned with Summeraan</p>
					<p><b>Mana Cost</b>: 300</p>
					<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game for 12s.</p>
					<p><b>Formula</b>: (5 * x ^ 0.85)%, where x is the number of spells cast this game.</p>
					<p><b>Effect</b>: Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
					<p><b>Formula</b>: (x * y ^ 1.1)%, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
					<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
					<p><b>Formula</b>: (25 * x)%, where x is the number of Flame Orbs collected with the last click.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
					<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
					<p><b>Formula</b>: +(2 * log(1 + x ^ 2)), where x is the number of clicks made in this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
					<p><b>Effect</b>: Decrease the cost of all spells by 50%. (multiplicative)</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Winterly Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle">  Winterly Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" align="middle">   Winterly Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" align="middle"> Winterly Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
					<br/>
					<p><b>Summeraan Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" align="middle"> Summeraan Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
					<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
					<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
					<p><b>Unlock</b>: Collect at least 480 Flame Orbs with a single click while affiliated with the Winterly.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
					<p><b>Unlock</b>: Collect at least 480 Frost Orbs with a single click while affiliated with the Summeraans.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ClimateForecast.png" alt="Climate Forecast" align="middle"> Climate Forecast</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while unaffilliated with either of the Summer Festival factions.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Frostmelter.png" alt="Frostmelter" align="middle"> Frostmelter</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while having all three upgrades of either Summeraan or Winterly.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade upgrade with the same name.</p>
					<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on clicks made all time.</p>
					<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is clicks made all time.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/LateSpringtime.png" alt="Late Springtime" align="middle"> Late Springtime</b></p>
					<p><b>Unlock</b>: While affliated with the Fairies, collect a stack of 720 Orbs.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<br/>
					<hr>
					<p><b>Shop Items</b></p>
					<p><b><img src="/realm/Factions/picks/75OrbShopItem.png" alt="Shop Item" align="middle"> 75 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300OrbShopItem.png" alt="Shop Item" align="middle"> 300 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 300 Frost and Flame Orbs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250OrbShopItem.png" alt="Shop Item" align="middle"> 1250 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 1250 Frost and Flame Orbs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500OrbShopItem.png" alt="Shop Item" align="middle"> 3500 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 3500 Frost and Flame Orbs for 100 Rubies. These are all the orbs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin Invasion (Jul 9 - Jul 13, 2020)</a></b></p>
				<div class="autohide">
					<p>The Goblin Invasion event will be starting on <b>Jul 9th 2020, 12:01 PM UTC</b> and will end on <b>Jul 13th 2020, 6:59 PM UTC</b>.</p>
					<p><b><img src="/realm/Factions/picks/TheGreatestArmy2017.png" alt="The Greatest Army" align="middle"> The Greatest Army</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Goblin Crowns collected.</p>
					<p><b>Formula</b>: (x / 20 - 0.005 * (x / 20) ^ 2 + 0.00045 * (x / 20) ^ 3)%, where x is amount of collected Goblin Crowns. Capped at 100000%.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<br/>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/GobinCrown2017.png" alt="Goblin Crowns" align="middle"> Goblin Crowns</b></p>
					<p>During the Goblin Invasion Event you will be able to collect Goblin Crowns, appearing in a random location of your screen at a rate of 1 per minute, stacking up to 720 units (12 hours). These Resources will be used to either fight or support the invading Goblin Army: both choices will grant you new bonuses and unlock new unique upgrades. You can also complete Quests and Feats, also found in the Event panel. Aside for completion purposes, completed quests will also grant a small permanent production bonus. Remember that all Goblin Invasion upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<p>The Formula for the cost needed to level a faction is floor((level + 1) ^ 0.85) Goblin Crowns</p>
					<p>You need 203 Goblin Crowns (total) to level a faction to level 25, 740 to level 50, and 2685 to level 100.</p>
					<p>You need 5370 Goblin Crowns to complete all quest by leveling both factions to level 100, Total time 3 days 17 hours 30 minutes without scrying.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FighttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Fight the Goblin Army</b></p>
					<p><b>Requirement</b>: Good or Neutral alignment</p>
					<p><b>Effect</b>: Increase maximum mana and mana regeneration by 1% per level.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SupporttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Support the Goblin Army</b></p>
					<p><b>Requirement</b>: Evil or Neutral alignment</p>
					<p><b>Effect</b>: Increase your assistants by 1% per level.</p>
					<hr>
					<p><b>Event Quest</b></p>
					<p><b>Goblin's Bane Quest</b>: Fight the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 1 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Magical Clicks</b></p>
					<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
					<p><b>Formula</b>: (floor(x ^ 1.2) / 10 + 1), where x is amount of active spells.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 2 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Eye of the King</b></p>
					<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of clicks made in this Reincarnation.</p>
					<p><b>Formula</b>: ((log10(1 + x)) ^ 3.5)%, where x is the amount of clicks made in this reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 3 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Spare Green Hands</b></p>
					<p><b>Effect</b>: Each manual click counts as 1000 clicks for all purposes.</p>
					<hr>
					<p><b>Goblin's Commander Quest</b>: Support the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 1 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
					<p><b>Effect</b>: All spells activity time counts more based on Evil spells cast in this Reincarnation.</p>
					<p><b>Formula</b>: (24 + 12 * ln(1 + x))%, where x is Evil spells cast in this Reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 2 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin Commandos</b></p>
					<p><b>Effect</b>: Increases the production of Neutral Buildings based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (150 * x ^ 0.25)%, where x is amount of assistants you own.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 3 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> The Slack King</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
					<p><b>Formula</b>: (0.01 * x ^ 0.7)%, where x is time spent in this Reincarnation.</p>
					<hr>
					<p><b>Event Feat</b></p>
					<p><b><img src="/realm/Factions/picks/GoblinsBane2017.png" alt="Seraphim Champion" align="middle"> Goblins Bane</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsCommander2017.png" alt="Seraphim Champion" align="middle"> Goblin's Commander</b></p>
					<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsEverywhere!2017.png" alt="Seraphim Champion" align="middle"> Goblins Everywhere!</b></p>
					<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
					<p><b>Note</b>: Prestige Factions count as 1 for Good, Evil, and Neutral alignment (Example Angel/Dwarven is 1, any other Good/Dwarven is not counted)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldHunt2018.png" align="middle"> Gold Hunt</b></p>
					<p><b>Requirement</b>: Collect at least 480 Goblin Crowns with a single click while affiliated with Goblins.</p>
					<p><b>Note</b>: As prestige, only prestige will count. For example, Angel/Dwarven counts as Dwarven for feat purposes.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/TheUndecidedArmada.png" align="middle"> The Undecided Armada</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 480 Goblin Crowns while having no faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase assistants based on the amount of buildings you own (multiplicative).</p>
					<p><b>Formula</b>: (0.65 * x ^ 0.35)%, where x is the amount of buildings you own.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PlatinumTrophy.png" align="middle"> Platinum Trophy</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: While affiliated with the Goblins and having supported the Army at least 70 times, collect a stack of at least 720 Goblin Crowns.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/75GoblinCrowns2017.png" align="middle"> 75 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 75 Goblin Crowns for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300GoblinCrowns2017.png" align="middle"> 300 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 300 Goblin Crowns 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250GoblinCrowns2017.png" align="middle"> 1250 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 1250 Goblin Crowns for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500GoblinCrowns2017.png" align="middle"> 3500 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 3500 Goblin Crowns for 100 Rubies.</p>
					<p>These are all the crowns he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">5th Anniversary - Blood War (May 17 - May 21, 2020)</a></b></p>
				<div class="autohide">
					<p>The Blood War event will be starting on <b>May 17th 2020, 12:01 PM UTC</b> and will end on <b>May 21st 2020, 6:59 PM UTC</b>.</p>
					<p><b><img src="/realm/Factions/picks/NephilimGlory2017.png" alt="Nephilim Glory" align="middle"> Nephilim Glory</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Holy Symbols and Lava Stones collected.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<p><b><center>Event Resources</center></b></p>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/HolySymbolCurrency.png" width="54%" height="54%" /></center>
								<center><b>Holy Symbols</b></center>
							</div>
							<div>
								<center><img src="/realm/Factions/picks/LavaStoneCurrency.png" width="64%" height="64%" /></center>
								<center><b>Lava Stones</b></center>
							</div>
						</center>
					</div>
					<br>
					<p>Holy Symbols and Lava Stones will appear on a random location of the game screen and you simply have to click to collect them, then wait for more Resources to appear. Or you can let them grow bigger over time (at a rate of 1 Resource per Minute) if you are idle or offline, up to a maximum size of 720 Holy Symbols or Lava Stones! Be careful though, you can only collect one stack of Holy Symbols or Lava Stones - by doing so, the other will disappear.</p>
					<p><b>Note</b>: You need 2350 of each resource to get all the upgrades.</p>
					<p><b>Note</b>: All upgrades has a 1 time cost but needs selected every Abdication and Reincarnation.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SeraphimAlliance2017.png" alt="Seraphim Alliance" align="middle"> Seraphim Alliance</b></p>
					<p><b>Cost</b>: 200 Holy Symbols</p>
					<p><b>Description</b>: The highest Angelic ranks carry wings blazing with pure light, whose every feather is infused with enough magical power to revive a dead soul or purify the hearts of a thousand sinners. Affiliating with the Seraphim will increase your magical abilities to the extreme, but you can only do so when playing as Good or Neutral.</p>
					<br/>
					<p><b>Seraphim Quest</b></p>
					<p><b>Seraphim Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/HeavenlyFeathers2017.png" alt="Heavenly Feathers" align="middle"> Heavenly Feathers</b></p>
					<p><b>Cost</b>: 400 Holy Symbols.</p>
					<p><b>Effect</b>: All buildings also increase your mana regeneration.</p>
					<p><b>Formula</b>: (2 * x ^ 0.2)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/God'sChamber2017.png" alt="God's Chamber" align="middle"> God's Chamber</b></p>
					<p><b>Cost</b>: 750 Holy Symbols.</p>
					<p><b>Effect</b>: Increase maximum mana by 1 for every 10 buildings you own.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/BoonofRadiance2017.png" alt="Boon of Radiance" align="middle"> Boon of Radiance</b></p>
					<p><b>Cost</b>: 1000 Holy Symbols.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
					<p><b>Formula</b>: (0.2 * (x * 30) ^ 0.85), where x is current mana regeneration.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus.</p>
					<p><b>Effect</b>: Also completes Seraphim Champion Feat.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/AsmondeanAlliance2017.png" alt="Asmodean Alliance" align="middle"> Asmodean Alliance</b></p>
					<p><b>Cost</b>: 200 Lava Stones</p>
					<p><b>Description</b>: The most cruel of Demons also happen to be the biggest and most deformed abyssal creatures, featuring all kinds of unnatural flesh and bone appendages. Their very existence is a pain to see and hear driving all but the most strong souls to madness. Affiliating with the Asmodeans will bolster your assistant army unbelievably, but you can only do so when playing as Evil or Neutral.</p>
					<br/>
					<p><b>Asmodean Quest</b></p>
					<p><b>Asmodean Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/Broodmothers2017.png" alt="Broodmothers" align="middle"> Broodmothers</b></p>
					<p><b>Cost</b>: 400 Lava Stones</p>
					<p><b>Effect</b>: Gain additional assistants based on time spent affiliated with the Asmodeans.</p>
					<p><b>Formula</b>: (0.25 * x * (x + 1)), where x is hours</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/AbyssalGaze2017.png" alt="Abyssal Gaze" align="middle"> Abyssal Gaze</b></p>
					<p><b>Cost</b>: 750 Lava Stones</p>
					<p><b>Effect</b>: Increase assistant production based on time spent as Evil (This R).</p>
					<p><b>Formula</b>: (2 * x ^ 0.7)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/Legion'sLimbs2017.png" alt="Legion's Limbs" align="middle"> Legion's Limbs</b></p>
					<p><b>Cost</b>: 1000 Lava Stones</p>
					<p><b>Effect</b>: Increase clicking rewards based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (x ^ 0.85)</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus</p>
					<p><b>Effect</b>: Also completes Asmodean Champion Feat.</p>
					<hr>
					<p><b>Event Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/SeraphimChampion2017.png" alt="Seraphim Champion" align="middle"> Seraphim Champion</b></p>
					<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AsmondeanChampion2017.png" alt="Asmodean Champion" align="middle"> Asmodean Champion</b></p>
					<p><b>Requirement</b>: Purchase all Asmodean Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SacredHoliness2017.png" alt="Sacred Holiness" align="middle"> Sacred Holiness</b></p>
					<p><b>Requirement</b>: Collect at least 480 Holy Symbols with a single click while affiliated with the Angels.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/DarkestHeresy2017.png" alt="Darkest Heresy" align="middle"> Darkest Heresy</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click while affiliated with the Demons</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Indifference2018.png" alt="Indifference" align="middle"> Indifference</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click or Holy Symbols while affiliated with a Neutral faction</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WorldRestoration.png" alt="World Restoration" align="middle"> World Restoration</b></p>
					<p><b>Requirement</b>: Have the same amount of Holy Symbols and Lava Stone at any given time, while having at least 1400.(Total)</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of aligned buildings based on time spent as your least used alignment in this Reincarnation.</p>
					<p><b>Formula</b>: (25 + 0.5 * x ^ 0.5)%, where x is your least used alignment in this Reincarnation (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EternalBattle.png" align="middle"> Eternal Battle</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect a stack of at least 720 of any resource while having 3 upgrades of any Blood War faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/40HolySymbolsandLavaStones2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 40 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 40 Holy Symbols and Lava Stones for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/150HolySymbolsandLavaStones2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 150 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 150 Holy Symbols and Lava Stones for 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/650HolySymbolsandLavaStones2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 650 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 650 Holy Symbols and Lava Stones for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1800HolySymbolsandLavaStones2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 1800 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 1800 Holy Symbols and Lava Stones for 100 Rubies.</p>
					<p>These are all the resources he could gather.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 Lave Stone and 1 Holy Synbol every 10 minutes for 4 hours.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Apr 9 - Apr 16, 2020)</a></b></p>
				<div class="autohide">
					<p>The Easter event will be starting on <b>Apr 9th 2020, 12:01 PM UTC</b> and will end on <b>Apr 16th 2020, 6:59 PM UTC</b>.</p>
					<p>You get a RNG state for Eggs when the event begins, Which predetermines when you'll get certain eggs.</p>
					<p>Paste your Export in the <a target="_blank" href="http://dox4242.github.io/mri/index.html"><b>Meggnetic Resonance Imager</a></b> to see when you will get your next Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EventResourceEaster2017.png" alt="Blue Omelette" align="middle"> Event Resource</b></p>
					<p>Eggs will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Egg to appear. Or, you can let them grow bigger over time (at a rate of 1 Egg per minute) if you are idle or offline- up to a maximum size of 720 Eggs! Eggs are divided into Common, Rare and Unique Eggs, and each time you collect them you will get random types based on their rarity. Each time you find or buy a Unique Egg, you also gain 1 free Ruby!</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BlueOmeletteEaster2017.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of rare eggs collected.</p>
					<p><b>Formula</b>: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000%.</p>
					<p><b>Note</b>: Using Rare Eggs to buy Unique Eggs will not effect the bonus.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEggEaster2017.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Note</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg3000Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Note</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUnique100Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Note</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b>Egg Hunter Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggHunter750Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Collect 750 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter2000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Collect 2000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter4000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Collect 4000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Hunter Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<hr>
					<p><b>Egg Collection Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggCollection1Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Find 1 Unique Egg.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection3Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Find 3 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection5Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Find 5 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Find 8 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Collection Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<hr>
					<p><b>Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldenChickenEaster2017.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GreyEaster2017.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BunnyHelpers2018.png" alt="Bunny Helpers" align="middle"> Bunny Helpers</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having exactly 480 assistants.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bowl.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateEgg2019.png" align="middle"> Chocolate Egg</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having at least 3 active spells.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
					<p><b>Note</b>: Upgrade only available during seasonal events.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Eggsceptional.png" align="middle"> Eggsceptional</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Requirement</b>: Collect a full stack of 720 Eggs at any time during the Easter event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p><b><img src="/realm/Factions/picks/UGiantEggEaster2017.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEggEaster2017.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect</b>: Increase the production of all buildings by 100%</p>
					<p><b>Effect A1</b>: Increase the production of all buildings by 7.18%.</p>
					<p><b>Effect A2</b>: Increase the production of all buildings by 0.7%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEggEaster2017.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEggEaster2017.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect</b>: Increase clicking reward by 100%</p>
					<p><b>Effect A1</b>: Increase clicking reward by 7.18%</p>
					<p><b>Effect A2</b>: Increase clicking reward by 0.07</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEggEaster2017.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEggEaster2017.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect</b>: Increase offline production by 500%</p>
					<p><b>Effect A1</b>: Increase offline production by 19.6%</p>
					<p><b>Effect A2</b>: Increase offline production by 1.81%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEggEaster2017.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations cost multiplier (excavation cost multiplier decrease by 0.025).</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEggEaster2017.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b>Scry</b> Produce 1 random Egg every 5 minutes for 4 hours.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs150Easter2017.png" alt="Bundle of Eggs" align="middle"> 150 Eggs</b></p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs600Easter2017.png" alt="Bundle of Eggs" align="middle"> 600 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 15 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 600 eggs for 15 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs2500Easter2017.png" alt="Bundle of Eggs" align="middle"> 2500 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 45 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 2500 eggs for 45 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs7000Easter2017.png" alt="Bundle of Eggs" align="middle"> 7000 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 100 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 7000 eggs for 100 rubies. These are all the eggs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2020)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/AprilFools2017.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b>Note</b>: If you got this upgrade in the past it will only show in purchased upgrades.</p>
					<p><b>Note</b>: This upgrade does nothing.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (Feb 11 - Feb 15, 2020)</a></b></p>
				<div class="autohide">
					<p>The Valentine event will be starting on <b>Feb 11th 2020, 1:01 PM UTC</b> and will end on <b>Feb 15th 2020, 7:59 PM UTC</b>.</p>
					<p><b>Event Theme</b>: <b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts</b></p>
					<p>Collected online and offline at a base rate of 1 per second and can be increased up to 4/s during the length of the event as follows:</p>
					<p><b><img src="/realm/Factions/picks/CalltoLove2017.png" alt="CalltoLove" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Play during the Valentines Event</p>
					<p><b>Mana Cost</b>: 200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>: In addition to the Call to Arms spell effect, increases heart production per second based on the active time for Call to Love.</p>
					<p><b>Base Production</b>: 1 heart/sec with no active time for CtL</p>
					<p>2 hearts/sec for 10 seconds of active time for CtL (All time)</p>
					<p>3 hearts/sec for 1000 seconds (16 min, 40 sec) of active time for CtL  (All time)</p>
					<p>4 hearts/sec for 100000 seconds of active time for CtL (27 hours, 47 min) (All time)</p>
					<p><b>Formula</b>:floor(1.5 + 0.5 * floor(log10(1 + x)))</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts Upgrades</b></p>
					<p><b>Note</b>: Every 100 Heart Upgrades purchased will give 1 free Ruby.</p>
					<p><b>Note</b>: All Heart Upgrades will be like Ruby Upgrades for the duration of Event.(<b>Additive only</b>)</p>
					<p><b>Note</b>: The first Upgrade for each is 100 Hearts. It increases by 100 for each additional Upgrade (ie..100,200,300).</p>
					<p><b>Effects</b></p>
					<p><b>Assistants</b>: Increases by 1 Assistant with each Upgrade.</p>
					<p><b>Mana Regen</b>: Increases by 0.5 with each Upgrade.</p>
					<p><b>Max Mana</b>: Increases by 25 with each Upgrade.</p>
					<p><b>Gem Bonus</b>: Increases by 0.50 with each Upgrade.</p>
					<p><b>Exchange Bonus</b>: Increases by 1.50 with each Upgrade.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Buy 50 Heart Upgrades of each to complete Quest (<b>Must show 5100+ for each upgrade</b>)</p>
					<p><b>Note</b>: Total Hearts needed to complete all quest <b>if spread equally</b> 637500</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> Feel the Love 1</b></p>
					<p><b>Requirement</b>: 50 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> Feel the Love 2</b></p>
					<p><b>Requirement</b>: 125 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Feel the Love 3</b></p>
					<p><b>Requirement</b>: 250 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 2%.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Purchase 250 Heart Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage2017.png" alt="" align="middle"> I Love You in Every Language</b></p>
					<p><b>Requirement</b>: Cast Call to Love at least once with 6 different Factions.</p>
					<p><b>Note</b>: When doing the cast with 6 factions, if you do it to fast the game will not register it.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AssistantLove2018.png" alt="" align="middle"> Assistant Love</b></p>
					<p><b>Requirement</b>: Reach 50 Assistants from Heart Upgrades.</p>
					<p><b>Reward</b>: If you unlock this feat, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateBoxFeat2019.png" align="middle"> Chocolate Box</b></p>
					<p><b>Requirement</b>: Have at least 72 hours of Call to Love activity time during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase your event bonus by a multiplicative 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FairyLove.png" align="middle"> Fairy Love</b></p>
					<p><b>Requirement</b>: While affiliated with the fairies, click 1000 times during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new cosmetic shape for your coin particles.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" align="middle"> 15000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 15000 Hearts for 5 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" align="middle"> 50000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 50000 Hearts for 55 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest3.png" align="middle"> 175000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 175000 Hearts for 45 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" align="middle"> 400000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 400000 Hearts for 100 Rubies. It will run out of power after you use this last time.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 heart every 5 seconds for 4 hours.</p>
					<hr>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">2019 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 20, 2019 - Jan 4, 2020)</a></b></p>
				<div class="autohide">
					<p>The Christmas event will be starting on <b>Dec 20th 2019, 1:01 PM UTC</b> and will end on <b>Jan 4th 2020, 7:59 PM UTC</b>.</p>
					<p>It's Christmas time! The subjects of your Realm are sensing the aura of power in the air, inspiring them in their daily life and making them feel proud of your righteous leadership. Encouraged by your unmatched abilities as a ruler, they believed it would be appropriate to offer you a daily tribute for the duration of the Holidays.</p>
					<p><b>Event Theme</b>: Snowballs. They will accumulate at a rate of 1 per minute, up to a maximum of 720 (12 hours). Collecting Snowballs will allow you to complete quests and increase your Avalanche upgrade bonus.</p>
					<p>Every day you will receive a Christmas Present containing Snowballs or Rubies. Presents are required to complete quests and can only be retrieved once per day by going online.</p>
					<p><b>Note</b>: The daily Christmas presents contains 1 Ruby or 200 Snowballs (every other present)</p>
					<p><b>Event Bonus</b>: Total cumulative and permanent quest bonus at the end of the Event: 14%</p>
					<p><b>Note</b>: If you didn't unlock all the Christmas feats last year, you have a chance to do so with this one! If you already did, you will be able to gain additional permanent production bonuses from completing all the quests again, and benefit from the massive bonus from the Avalanche upgrade once again.</p>
					<p>You can find all this information in a guide by pressing the "?" button in the Event Panel.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Avalanche2017.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected.</p>
					<p><b>Formula</b>: (0.8 * (s / 35) + -0.006 * (s / 35)^2 + 0.00004 * (s / 35)^3)% (max 100000% bonus), where s is amount of collected snowballs.</p>
					<p><b>Formula</b>: (1 + 0.01 * x) ^ (0.1 ^ A) where A is ascension and x is avalanche formula in percentage.</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HeavyAvalanche2017.png" alt="Avalanche" align="middle"> Heavy Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R40+.</p>
					<p><b>Cost</b>: 5000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (2.5 * A)), where x is original bonus in percentage</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GrandAvalanche2017.png" alt="Avalanche" align="middle"> Grand Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R100+.</p>
					<p><b>Cost</b>: 10000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (5 * A)), where x is original bonus in percentage (overrides Heavy Avalanche)</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Snowpile2016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Collect 1000, 4500, 10000 and 21000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile12016.png" alt="Snowpile 1" align="middle"> Snowpile 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Collect 1000 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile22016.png" alt="Snowpile 2" align="middle"> Snowpile 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Collect 4500 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile32016.png" alt="Snowpile 3" align="middle"> Snowpile 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Collect 10000 Snowballs</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile 4" align="middle"> Snowpile 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Collect 21000 Snowballs</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector12016.png" alt="Gift Collector 1" align="middle"> Gift Collector 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Open 1 present</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector22016.png" alt="Gift Collector 2" align="middle"> Gift Collector 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Open 4 presents</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector32016.png" alt="Gift Collector 3" align="middle"> Gift Collector 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Open 8 presents</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector 4" align="middle"> Gift Collector 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Open 13 presents</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/SantasHelpers2016.png" alt="SantasHelpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play Elves and get 50 assistants</p>
					<p><b>Note</b>: Unlockable in R7 using undead bloodline.</p>
					<p><b>Note</b>: Dwarven is allowed.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Unholidays2016.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Ally with Undead, purchase Undead Trade Treaty, Undead Friendship Pact, and Undead Alliance, during the Christmas season.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Complete all the Snowpile quests</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="GiftCollector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Open 13 Presents</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FreezingHell2018.png" alt="FreezingHell" align="middle"> Freezing Hell</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect at least 480 Snowballs with a single click while affiliated with the Demons.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PerfectSnowflake.png" align="middle"> Perfect Snowflake</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect Snowballs to find the Perfect Snowflake. Your chances increase as you collect more.</p>
					<p><b>Chance</b>: min(1, (x ^ 2 / 9,000,000,000 (9 T))), where x is snowballs collected.</p>
					<p><b>Effect</b>: Reduce Royal Exchange cost multiplier by 0.01.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/500Snowballs2016Shop.png" alt="500 Snowballs" align="middle"> 500 Snowballs</b></p>
					<p><b>500 Snowballs</b>: An adventurer wants to sell you 500 Snowballs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 5 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1750Snowballs2016Shop.png" alt="1750 Snowballs" align="middle"> 1750 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 1750 Snowballs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 15 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/6000Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 6000 Snowballs</b></p>
					<p><b>6000 Snowballs</b>: An adventurer wants to sell you 6000 Snowballs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 45 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/13500Snowballs2016Shop.png" alt="13500 Snowballs" align="middle"> 13500 Snowballs</b></p>
					<p><b>13500 Snowballs</b>: An adventurer wants to sell you 13500 Snowballs for 100 Rubies. This is all the snow he could gather.</p>
					<p><b>Cost</b>: 100 Rubies</p>
					<br/>
					<p><b>Scrying</b></p>
					<p><b>Effect</b>: Produce 1 snowball every 5 minute for 4 hours.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Thanksgiving (Nov 26 - Nov 30, 2019)</a></b></p>
				<div class="autohide">
					<p>The Thanksgiving event will be starting on <b>Nov 26th 2018, 1:01 PM UTC</b> and will end on <b>Nov 30th 2019, 6:59 PM UTC</b>.</p>
					<p>Remember the Thanksgiving upgrade and bonuse will disappear after the event is over, the Feat achievement will remain.</p>
					<p><b><img src="/realm/Factions/picks/Thanksgiving.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 30 - Nov 6, 2019)</a></b></p>
				<div class="autohide">
					<p>The Halloween event will be starting on <b>Oct 30th 2019, 1:01 PM UTC</b> and will end on <b>Nov 6th 2019, 7:59 PM UTC</b>.</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realms. Choose your own, feed and grow it to its maximum potential!</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/Blood.png" /></center>
								<center><b>Blood</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Ectoplasm.png" width="74%" height="74%" /></center>
								<center><b>Ectoplasm</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Bones.png" /></center>
								<center><b>Bones</b></center>
							</div>
						</center>
					</div>
					<br/>
					<p>You will need 3058 of each (Blood, Ectoplasm and Bones) to complete event.</p>
					<p>The event will feature three Resources, <b>Blood</b>, <b>Ectoplasm</b> and <b>Bones</b>. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 720 units (12 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><center><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Pumpkin Smasher</center></b></p>
					<p>You will get a Pumpkin Smasher once a day (1:01PM UTC Time). (8 Total)</p>
					<p>Each Pumpkin Smasher includes 75 of each resources (Added to total), 1 Ruby and 1 of 3 Monster (<b>Skeleton</b>, <b>Ghost</b> and <b>Vampire</b>) if you are missing any.</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Note</b>: You need to click on monster to activate it and get the Crucible Of Darkness upgrade.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect at least 480 Ectoplasm with a single click while <b>USING</b> Ghost monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect at least 480 Blood with a single click while <b>USING</b> Vampire monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect at least 480 Bones with a single click while <b>USING</b> Skeleton monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenMagic.png" alt="Halloween" align="middle"> Halloween Magic</b></p>
					<p><b>Requirement</b>: Cast each Halloween Spell at least 100 times in this reincarnation.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SpectralSurge.png" alt="Halloween" align="middle"> Spectral Surge</b></p>
					<p><b>Requirement</b>: Collect at least 480 of each resource in a single run.(This Game)</p>
					<p>If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Turn Spiritual Surge into Spectral Surge, and multiplies Spectral Surge base bonus by the Cumulative Event Bonus.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<p><b>Note</b>: This Feat is not needed to unlock new mana color.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of prestige factions outside your alignment at once.</p>
					<p><b>Note</b>: You cannot select any Lineage based on those bloodlines.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Reduce the cost of faction spells by 75%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: Level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: Multiplicatively increase Maximum Mana and Mana Regeneration based on clicks made in this game.</p>
					<p><b>Formula</b>: Max Mana: (log10(1 + x) ^ 2.5)%, where x is clicks made this game.</p>
					<p><b>Formula</b>: Mana Regeneration: (log10(1 + x) ^ 2.25)%, where x is clicks made this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 100 times greater Faction Coin find chance.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: 0.2 * (R + 1) * x ^ 0.45, where R is reincarnation count and x is mana produced.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b>Note</b>: Not affected by ascension penalties</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Triple your offline productions of Faction Coins, clicks, mana, spells cast and spell activity time.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Idillium (Sep 23 - Sep 30, 2019)</a></b></p>
				<div class="autohide">
					<p>The event will feature three Resources, <b>Crystal Prisms</b>, <b>Entropic Drops</b> and <b>Equilibrium Fragments</b>, They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 16 hours, up to 960.</p>
					<p>Being aligned with an elite faction will double the speed a resource is gained.</p>
					<p>You need 2814 resources of each (8442 total) to complete all quests.</p>
					<p>Total time needed 5 days 20 hours and 42 minutes without elite factions or scrying.</p>
					<p>Which prism appears depends on what faction you are aligned with:</p>
					<p>As Fairy, Demon or Faceless, Entropic Drop appears.</p>
					<p>As Elven, Goblin or Druid, Equilibrium Fragment appears.</p>
					<p>As Angel, Undead or Titan, Crystal Prism appears.</p>
					<p>As factionless or Mercenary, all three will appear.</p>
					<p>As Factionless or Mercenary you can collect any of the three. By collecting one, the others will disappear.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/CrystalPrismCurrency.png" width="54%" height="54%" /></center>
								<center><b>Crystal Prism</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EntropicDropCurrency.png" width="54%" height="54%" /></center>
								<center><b>Entropic Drop</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/EquilibriumFragmentCurrency.png" width="34%" height="34%" /></center>
								<center><b>Equilibrium Fragment</b></center>
							</div>
						</center>
					</div>
					<hr>
					<p><b>Event Upgrades</b></p>
					<p><img src="/realm/Factions/picks/BrokenMirror.png" align="middle"> <b>Broken Mirror</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Idillium Resources collected.</p>
					<p><b>Formula</b>: ((1 + 0.0035 * ((x + y + z) / 3)) * [(1 + min(1.6 * (x / 25) - 0.002 * (x / 25) ^ 2 + 0.000024 * (x / 25) ^ 3,12500)) * (repeat, replace x with y and z)] ^ 0.4), where x is Crystal Prisms (Order), y is Entropic Drops (Chaos), z is Equilibrium Fragments (Balance)</p>
					<br>
					<p><b>Remnants</b></p>
					<p><b>Cost to Upgrade</b>: floor((13 * x + 1) ^ 1.15) Prisms, where x is remnant level.</p>
					<p><b>Level 5</b>: Perk 1: total cost: 230 Prisms.</p>
					<p><b>Level 10</b>: Perk 2: total cost: 1138 Prisms.</p>
					<p><b>Level 15</b>: Perk 3: total cost: 2814 Prisms.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRemnant.png" align="middle"> <b>Order Remnant</b></p>
					<p><b>Requirement to Collect</b>: Angels, Undead, Titans, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Remnant level. Does not suffer Ascension penalties.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRemnant.png" align="middle"> <b>Chaos Remnant</b></p>
					<p><b>Requirement to Collect</b>: Fairies, Demon, Faceless, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Assistants based on remnant level.</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRemnant.png" align="middle"> <b>Balance Remnant</b></p>
					<p><b>Requirement to Collect</b>: Elves, Goblins, Druids, Mercenary or factionless.</p>
					<p><b>Effect</b>: Increases Faction Coin Find Chance based on remnant level.(multiplicative)</p>
					<p><b>Formula</b>: (x + 10 * 1.1 ^ (10 + x)), where x is remnant level.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Completing all Quest will increase your Cumulative Event bonus by an additional 12%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration1.png" align="middle"> <b>Order Restoration 1</b></p>
					<p><b>Requirement</b>: Order Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk1.png" align="middle"> <b>Order Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases all spells duration and reduce all spells cost by 10%.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration2.png" align="middle"> <b>Order Restoration 2</b></p>
					<p><b>Requirement</b>: Order Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk2.png" align="middle"> <b>Order Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Temporal Flux spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/TemporalFlux.png" align="middle"></p>
					<p><b>Effect</b>: Increase Unique building production based on time spent in this game.</p>
					<p><b>Effect</b>: Also multiplicatively increase Mana Regeneration based on time spent in this game.</p>
					<p><b>Note</b>: Temporal Flux obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration3.png" align="middle"> <b>Order Restoration 3</b></p>
					<p><b>Requirement</b>: Order Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Order Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/OrderRemnantPerk3.png" align="middle"> <b>Order Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Maximum Mana by 25%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/ChaosRestoration1.png" align="middle"> <b>Chaos Restoration 1</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk1.png" align="middle"> <b>Chaos Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Production Bonus from Gems by 18%.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration2.png" align="middle"> <b>Chaos Restoration 2</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk2.png" align="middle"> <b>Chaos Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants Maelstrom spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/Maelstrom.png" align="middle"></p>
					<p><b>Effect</b>: Increase the production of three random buildings based on one of these stats in this game, chosen at random: mana produced, trophies unlocked, Faction Coins found or amount of assistants.</p>
					<p><b>Formulas</b></p>
					<p><b>Mana</b>: (0.02 * (log10(1 + x)) ^ 5)%, where x is mana produced this game.</p>
					<p><b>Trophy</b>: Formula (2.5 * x ^ 0.9)%, where x is trophies unlocked.</p>
					<p><b>Faction Coins</b>: (0.01 * (log10(1 + x)) ^ 4)%, where x is faction coins found this game.</p>
					<p><b>Assistants</b>: (0.25 * (log10(1 + x)) ^ 5)%, where x is amount of assistants.</p>
					<p><b>Note</b>: Maelstrom obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration3.png" align="middle"> <b>Chaos Restoration 3</b></p>
					<p><b>Requirement</b>: Chaos Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Chaos Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/ChaosRemnantPerk3.png" align="middle"> <b>Chaos Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Mana Regeneration by 50%.</p>
					<hr>
					<p><img src="/realm/Factions/picks/BalanceRestoration1.png" align="middle"> <b>Balance Restoration 1</b></p>
					<p><b>Requirement</b>: Balance Remnant level 5.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 1.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk1.png" align="middle"> <b>Balance Remnant Perk 1</b></p>
					<p><b>Effect</b>: Increases Tax Collection worth by 30 seconds.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration2.png" align="middle"> <b>Balance Restoration 2</b></p>
					<p><b>Requirement</b>: Balance Remnant level 10.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 2.</p>
					<p><b>Effect</b>: Adds 1% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk2.png" align="middle"> <b>Balance Remnant Perk 2</b></p>
					<p><b>Effect</b>: Grants All Creation spell with a cost of 1000 mana.</p>
					<p><img src="/realm/Factions/picks/AllCreation.png" align="middle"></p>
					<p><b>Effect</b>: Increase production of all buildings based on mana regeneration rate.</p>
					<p><b>Effect</b>: Also multiplicative increase Faction Coin find chance based on your mana regeneration rate.</p>
					<p><b>Formula</b>: (0.15 * ln(x) ^ 3.5 + 0.9 * x ^ 0.27), where x is mana per second.</p>
					<p><b>Note</b>: All Creation obtained this way cannot be tiered.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration3.png" align="middle"> <b>Balance Restoration 3</b></p>
					<p><b>Requirement</b>: Balance Remnant level 15.</p>
					<p><b>Effect</b>: Unlocks Balance Remnant Perk 3.</p>
					<p><b>Effect</b>: Adds 2% to your Cumulative Event bonus.</p>
					<p><img src="/realm/Factions/picks/BalanceRemnantPerk3.png" align="middle"> <b>Balance Remnant Perk 3</b></p>
					<p><b>Effect</b>: Increases Royal Exchange Bonus by 20% (Additive).</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b>Note</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<br>
					<p><img src="/realm/Factions/picks/GentleCollector.png" align="middle"> <b>Gentle Collector</b></p>
					<p><b>Requirement</b>: Collect at least 480 Entropic Drops with a single click while affiliated with the Fairies.</p>
					<br>
					<p><img src="/realm/Factions/picks/AggressiveCollector.png" align="middle"> <b>Aggressive Collector</b></p>
					<p><b>Requirement</b>: Collect at least 480 Crystal Prisms with a single click while affiliated with the Undead.</p>
					<br>
					<p><img src="/realm/Factions/picks/GoldenAge.png" align="middle"> <b>Golden Age</b></p>
					<p><b>Requirement</b>: Cast Remnant spells at least 1000 times.</p>
					<br>
					<p><img src="/realm/Factions/picks/OrderRestoration.png" align="middle"> <b>Order Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Order Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/ChaosRestoration.png" align="middle"> <b>Chaos Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Chaos Remnant to Level 15.</p>
					<br>
					<p><img src="/realm/Factions/picks/BalanceRestoration.png" align="middle"> <b>Balance Restoration</b></p>
					<p><b>Requirement</b>: Upgrade Balance Remnant to Level 15.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><img src="/realm/Factions/picks/IdilliumShop45.png" align="middle"> <b>1200 each Idillium Resource</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A shady prophet wants to sell you 1200 units of each Idillium Resource for 45 Rubies.</p>
					<p><b>Note</b>: You can purchase this an infinite amount of times.</p>
					<br/>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 26 - Sep 2, 2019)</a></b></p>
				<div class="autohide">
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 12 hours, up to 720 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p>You need 4500 each of <b>Flame</b> and <b>Frost Orbs</b> to complete all quests and unlocking all upgrades from Summeraans & Winterly, 400 to unlock the faction and 4100 for the 3 upgrades (800,1300 and 2000 respectively).</p>
					<p>Total time 6 days 6 hours without scrying.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<br/>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<br/>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.</p>
					<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
					<p><b>Formula</b>: min(100000, (x / 27) - (x ^ 2 / 36450) + (x ^ 3 / 98415000))%, where x is the number of Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
					<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:1000 (Unlocked when aligned with Winterly)</p>
					<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
					<p><b>Formula</b>: (0.1 * x ^ 0.6 * (y * 30) ^ 1.1)%, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
					<p><b>Formula</b>: (20 * x ^ 0.75)%, where x is time spent aligned with the Winterly in hours.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
					<p><b>Formula</b>: (x ^ 1.03)%, where x is the number of Frost Orbs collected in total.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
					<p><b>Effect</b>: Spell durations are increased by 100%.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
					<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:300 (Unlocked when aligned with Summeraan)</p>
					<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game for 12s.</p>
					<p><b>Formula</b>: (5 * x ^ 0.85)%, where x is the number of spells cast this game.</p>
					<p><b>Effect</b>: Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
					<p><b>Formula</b>: (x * y ^ 1.1)%, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
					<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
					<p><b>Formula</b>: (25 * x)%, where x is the number of Flame Orbs collected with the last click.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
					<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
					<p><b>Formula</b>: +(2 * log(1 + x ^ 2)), where x is the number of clicks made in this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
					<p><b>Effect</b>: Decrease the cost of all spells by 50%. (multiplicative)</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Winterly Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle">  Winterly Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" align="middle">   Winterly Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" align="middle"> Winterly Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
					<br/>
					<p><b>Summeraan Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" align="middle"> Summeraan Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
					<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
					<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
					<p><b>Unlock</b>: Collect at least 480 Flame Orbs with a single click while affiliated with the Winterly.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
					<p><b>Unlock</b>: Collect at least 480 Frost Orbs with a single click while affiliated with the Summeraans.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ClimateForecast.png" alt="Chill Out" align="middle"> Climate Forecast</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while unaffilliated with either of the Summer Festival factions.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Frostmelter.png" align="middle"> Frostmelter</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while having all three upgrades of either Summeraan or Winterly.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade upgrade with the same name.</p>
					<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on clicks made all time.</p>
					<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2.5)%, where x is clicks made all time.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><b><img src="/realm/Factions/picks/75OrbShopItem.png" alt="Shop Item" align="middle"> 75 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300OrbShopItem.png" alt="Shop Item" align="middle"> 300 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 300 Frost and Flame Orbs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250OrbShopItem.png" alt="Shop Item" align="middle"> 1250 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 1250 Frost and Flame Orbs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500OrbShopItem.png" alt="Shop Item" align="middle"> 3500 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 3500 Frost and Flame Orbs for 100 Rubies. These are all the orbs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin Invasion (Jul 22 - Jul 26, 2019)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/TheGreatestArmy2017.png" alt="The Greatest Army" align="middle"> The Greatest Army</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Goblin Crowns collected.</p>
					<p><b>Formula</b>: (x / 20 - 0.005 * (x / 20) ^ 2 + 0.00045 * (x / 20) ^ 3)%, where x is amount of collected Goblin Crowns. Capped at 100000%.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<br/>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/GobinCrown2017.png" alt="Goblin Crowns" align="middle"> Goblin Crowns</b></p>
					<p>During the Goblin Invasion Event you will be able to collect Goblin Crowns, appearing in a random location of your screen at a rate of 1 per minute, stacking up to 720 units (12 hours). These Resources will be used to either fight or support the invading Goblin Army: both choices will grant you new bonuses and unlock new unique upgrades. You can also complete Quests and Feats, also found in the Event panel. Aside for completion purposes, completed quests will also grant a small permanent production bonus. Remember that all Goblin Invasion upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<p>The Formula for the cost needed to level a faction is floor((level + 1) ^ 0.85) Goblin Crowns</p>
					<p>You need 203 Goblin Crowns (total) to level a faction to level 25, 740 to level 50, and 2685 to level 100.</p>
					<p>You need 5370 Goblin Crowns to complete all quest by leveling both factions to level 100, Total time 3 days 17 hours 30 minutes without scrying.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FighttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Fight the Goblin Army</b></p>
					<p><b>Requirement</b>: Good or Neutral alignment</p>
					<p><b>Effect</b>: Increase maximum mana and mana regeneration by 1% per level.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SupporttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Support the Goblin Army</b></p>
					<p><b>Requirement</b>: Evil or Neutral alignment</p>
					<p><b>Effect</b>: Increase your assistants by 1% per level.</p>
					<hr>
					<p><b>Event Quest</b></p>
					<p><b>Goblin's Bane Quest</b>: Fight the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 1 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Magical Clicks</b></p>
					<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
					<p><b>Formula</b>: (floor(x ^ 1.2) / 10 + 1), where x is amount of active spells.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 2 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Eye of the King</b></p>
					<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of clicks made in this Reincarnation.</p>
					<p><b>Formula</b>: ((log10(1 + x)) ^ 3.5)%, where x is the amount of clicks made in this reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 3 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Spare Green Hands</b></p>
					<p><b>Effect</b>: Each manual click counts as 1000 clicks for all purposes.</p>
					<br/>
					<p><b>Goblin's Commander Quest</b>: Support the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 1 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
					<p><b>Effect</b>: All spells activity time counts more based on Evil spells cast in this Reincarnation.</p>
					<p><b>Formula</b>: (8 + 0.8 * x ^ 0.8)%, where x is Evil spells cast in this Reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 2 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin Commandos</b></p>
					<p><b>Effect</b>: Increases the production of Neutral Buildings based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (150 * x ^ 0.25)%, where x is amount of assistants you own.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 3 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> The Slack King</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
					<p><b>Formula</b>: (0.01 * x ^ 0.7)%, where x is time spent in this Reincarnation.</p>
					<hr>
					<p><b>Event Feat</b></p>
					<p><b><img src="/realm/Factions/picks/GoblinsBane2017.png" alt="Seraphim Champion" align="middle"> Goblins Bane</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsCommander2017.png" alt="Seraphim Champion" align="middle"> Goblin's Commander</b></p>
					<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsEverywhere!2017.png" alt="Seraphim Champion" align="middle"> Goblins Everywhere!</b></p>
					<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
					<p><b>Note</b>: Prestige Factions count as 1 for Good, Evil, and Neutral alignment (Example Angel/Dwarven is 1, any other Good/Dwarven is not counted)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldHunt2018.png" align="middle"> Gold Hunt</b></p>
					<p><b>Requirement</b>: Collect at least 480 Goblin Crowns with a single click while affiliated with Goblins.</p>
					<p><b>Note</b>: As prestige, only prestige will count. For example, Angel/Dwarven counts as Dwarven for feat purposes.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/TheUndecidedArmada.png" align="middle"> The Undecided Armada</b></p>
					<p><b>Requirement</b>: Collect a stack of at least 480 Goblin Crowns while having no faction.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase assistants based on the amount of buildings you own (multiplicative).</p>
					<p><b>Formula</b>: (0.65 * x ^ 0.35)%, where x is the amount of buildings you own.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/75GoblinCrowns2017.png" align="middle"> 75 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 75 Goblin Crowns for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300GoblinCrowns2017.png" align="middle"> 300 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 300 Goblin Crowns 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250GoblinCrowns2017.png" align="middle"> 1250 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 1250 Goblin Crowns for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500GoblinCrowns2017.png" align="middle"> 3500 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 3500 Goblin Crowns for 100 Rubies.</p>
					<p>These are all the crowns he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">4th Anniversary - Blood War (May 17 - May 21, 2019)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/NephilimGlory2017.png" alt="Nephilim Glory" align="middle"> Nephilim Glory</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Holy Symbols and Lava Stones collected.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<p><b><center>Event Resources</center></b></p>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/HolySymbolCurrency.png" width="54%" height="54%" /></center>
								<center><b>Holy Symbols</b></center>
							</div>
							<div>
								<center><img src="/realm/Factions/picks/LavaStoneCurrency.png" width="64%" height="64%" /></center>
								<center><b>Lava Stones</b></center>
							</div>
						</center>
					</div>
					<br>
					<p>Holy Symbols and Lava Stones will appear on a random location of the game screen and you simply have to click to collect them, then wait for more Resources to appear. Or you can let them grow bigger over time (at a rate of 1 Resource per Minute) if you are idle or offline, up to a maximum size of 720 Holy Symbols or Lava Stones! Be careful though, you can only collect one stack of Holy Symbols or Lava Stones - by doing so, the other will disappear.</p>
					<p><b>Note</b>: You need 2350 of each resource to get all the upgrades.</p>
					<p><b>Note</b>: All upgrades has a 1 time cost but needs selected every Abdication and Reincarnation.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SeraphimAlliance2017.png" alt="Seraphim Alliance" align="middle"> Seraphim Alliance</b></p>
					<p><b>Cost</b>: 200 Holy Symbols</p>
					<p><b>Description</b>: The highest Angelic ranks carry wings blazing with pure light, whose every feather is infused with enough magical power to revive a dead soul or purify the hearts of a thousand sinners. Affiliating with the Seraphim will increase your magical abilities to the extreme, but you can only do so when playing as Good or Neutral.</p>
					<br/>
					<p><b>Seraphim Quest</b></p>
					<p><b>Seraphim Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/HeavenlyFeathers2017.png" alt="Heavenly Feathers" align="middle"> Heavenly Feathers</b></p>
					<p><b>Cost</b>: 400 Holy Symbols.</p>
					<p><b>Effect</b>: All buildings also increase your mana regeneration.</p>
					<p><b>Formula</b>: (2 * x ^ 0.2)</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/God'sChamber2017.png" alt="God's Chamber" align="middle"> God's Chamber</b></p>
					<p><b>Cost</b>: 750 Holy Symbols.</p>
					<p><b>Effect</b>: Increase maximum mana by 1 for every 10 buildings you own.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<br/>
					<p><b>Seraphim Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/BoonofRadiance2017.png" alt="Boon of Radiance" align="middle"> Boon of Radiance</b></p>
					<p><b>Cost</b>: 1000 Holy Symbols.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
					<p><b>Formula</b>: (0.2 * (x * 30) ^ 0.85), where x is current mana regeneration.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus.</p>
					<p><b>Effect</b>: Also completes Seraphim Champion Feat.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/AsmondeanAlliance2017.png" alt="Asmodean Alliance" align="middle"> Asmodean Alliance</b></p>
					<p><b>Cost</b>: 200 Lava Stones</p>
					<p><b>Description</b>: The most cruel of Demons also happen to be the biggest and most deformed abyssal creatures, featuring all kinds of unnatural flesh and bone appendages. Their very existence is a pain to see and hear driving all but the most strong souls to madness. Affiliating with the Asmodeans will bolster your assistant army unbelievably, but you can only do so when playing as Evil or Neutral.</p>
					<br/>
					<p><b>Asmodean Quest</b></p>
					<p><b>Asmodean Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/Broodmothers2017.png" alt="Broodmothers" align="middle"> Broodmothers</b></p>
					<p><b>Cost</b>: 400 Lava Stones</p>
					<p><b>Effect</b>: Gain additional assistants based on time spent affiliated with the Asmodeans.</p>
					<p><b>Formula</b>: (0.25 * x * (x + 1)), where x is hours</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/AbyssalGaze2017.png" alt="Abyssal Gaze" align="middle"> Abyssal Gaze</b></p>
					<p><b>Cost</b>: 750 Lava Stones</p>
					<p><b>Effect</b>: Increase assistant production based on total time spent as Evil.</p>
					<p><b>Formula</b>: (2 x ^ 0.7), where x is seconds of total evil time</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<br/>
					<p><b>Asmodean Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/Legion'sLimbs2017.png" alt="Legion's Limbs" align="middle"> Legion's Limbs</b></p>
					<p><b>Cost</b>: 1000 Lava Stones</p>
					<p><b>Effect</b>: Increase offline production bonus based on the amount of assistants you own.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus</p>
					<p><b>Effect</b>: Also completes Asmodean Champion Feat</p>
					<hr>
					<p><b>Event Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/SeraphimChampion2017.png" alt="Seraphim Champion" align="middle"> Seraphim Champion</b></p>
					<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AsmondeanChampion2017.png" alt="Asmodean Champion" align="middle"> Asmodean Champion</b></p>
					<p><b>Requirement</b>: Purchase all Asmodean Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SacredHoliness2017.png" alt="Sacred Holiness" align="middle"> Sacred Holiness</b></p>
					<p><b>Requirement</b>: Collect at least 480 Holy Symbols with a single click while affiliated with the Angels.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/DarkestHeresy2017.png" alt="Darkest Heresy" align="middle"> Darkest Heresy</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click while affiliated with the Demons</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Indifference2018.png" alt="Indifference" align="middle"> Indifference</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click or Holy Symbols while affiliated with a Neutral faction</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WorldRestoration.png" alt="World Restoration" align="middle"> World Restoration</b></p>
					<p><b>Requirement</b>: Have the same amount of Holy Symbols and Lava Stone at any given time, while having at least 1400.(Total)</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of aligned buildings based on time spent as your least used alignment in this Reincarnation.</p>
					<p><b>Formula</b>: (25 + 0.5 * x ^ 0.5)%, where x is your least used alignment in this Reincarnation (in seconds).</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/40HolySymbolsandLavaStones2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 40 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 40 Holy Symbols and Lava Stones for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/150HolySymbolsandLavaStones2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 150 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 150 Holy Symbols and Lava Stones for 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/650HolySymbolsandLavaStones2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 650 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 650 Holy Symbols and Lava Stones for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1800HolySymbolsandLavaStones2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 1800 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 1800 Holy Symbols and Lava Stones for 100 Rubies.</p>
					<p>These are all the resources he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Apr 18 - Apr 25, 2019)</a></b></p>
				<div class="autohide">
					<p>Starts on Apr 18th, 12:01 PM UTC and will end on Apr 25th, 6:59 PM UTC.</p>
					<p>You get a RNG state for Eggs when the event begins, Which predetermines when you'll get certain eggs.</p>
					<p>Paste your Export in the <a target="_blank" href="http://dox4242.github.io/mri/index.html"><b>Meggnetic Resonance Imager</a></b> to see when you will get your next Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EventResourceEaster2017.png" alt="Blue Omelette" align="middle"> Event Resource</b></p>
					<p>Eggs will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Egg to appear. Or, you can let them grow bigger over time (at a rate of 1 Egg per minute) if you are idle or offline- up to a maximum size of 720 Eggs! Eggs are divided into Common, Rare and Unique Eggs, and each time you collect them you will get random types based on their rarity. Each time you find or buy a Unique Egg, you also gain 1 free Ruby!</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BlueOmeletteEaster2017.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect & Notes</b>: Increase the production of all buildings based on the amount of rare eggs collected.</p>
					<p><b>Formula</b>: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000%.</p>
					<p><b>Note</b>: Using Rare Eggs to buy Unique Eggs will not effect the bonus.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEggEaster2017.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg3000Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUnique100Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b>Egg Hunter Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggHunter750Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Collect 750 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter2000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Collect 2000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter4000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Collect 4000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Hunter Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<hr>
					<p><b>Egg Collection Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggCollection1Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Find 1 Unique Egg.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection3Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Find 3 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection5Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Find 5 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Find 8 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Collection Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<hr>
					<p><b>Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldenChickenEaster2017.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GreyEaster2017.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BunnyHelpers2018.png" alt="Bunny Helpers" align="middle"> Bunny Helpers</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having exactly 480 assistants.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bowl.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateEgg2019.png" align="middle"> Chocolate Egg</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect at least 480 Eggs with a single click while having at least 3 active spells.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Effect</b>: Increase base clicking reward by 100% and clicks once per second.</p>
					<p><b>Note</b>: Upgrade only available during seasonal events.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p><b><img src="/realm/Factions/picks/UGiantEggEaster2017.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEggEaster2017.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect</b>: Increase the production of all buildings by 100%</p>
					<p><b>Effect A1</b>: Increase the production of all buildings by 7.18%.</p>
					<p><b>Effect A2</b>: Increase the production of all buildings by 0.7%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEggEaster2017.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEggEaster2017.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect</b>: Increase clicking reward by 100%</p>
					<p><b>Effect A1</b>: Increase clicking reward by 7.18%</p>
					<p><b>Effect A2</b>: Increase clicking reward by 0.07</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEggEaster2017.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEggEaster2017.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect</b>: Increase offline production by 500%</p>
					<p><b>Effect A1</b>: Increase offline production by 19.6%</p>
					<p><b>Effect A2</b>: Increase offline production by 1.81%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEggEaster2017.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations cost multiplier (excavation cost multiplier decrease by 0.025).</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEggEaster2017.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b>Scry</b> Produce 1 random Egg every 5 minutes for 4 hours.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs150Easter2017.png" alt="Bundle of Eggs" align="middle"> 150 Eggs</b></p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs600Easter2017.png" alt="Bundle of Eggs" align="middle"> 600 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 15 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 600 eggs for 15 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs2500Easter2017.png" alt="Bundle of Eggs" align="middle"> 2500 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 45 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 2500 eggs for 45 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs7000Easter2017.png" alt="Bundle of Eggs" align="middle"> 7000 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 100 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 7000 eggs for 100 rubies. These are all the eggs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2019)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/AprilFools2017.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b>Note</b>: If you got this upgrade in the past it will only show in purchased upgrades.</p>
					<p><b>Note</b>: This upgrade does nothing.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (Feb 11 - Feb 15, 2019)</a></b></p>
				<div class="autohide">
					<p><b>Event Theme</b>: <b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts</b></p>
					<p>Collected online and offline at a base rate of 1 per second and can be increased up to 3.5/s during the length of the event as follows:</p>
					<p><b><img src="/realm/Factions/picks/CalltoLove2017.png" alt="CalltoLove" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Play during the Valentines Event</p>
					<p><b>Mana Cost</b>: 200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>: In addition to the Call to Arms spell effect, increases heart production per second based on the active time for Call to Love.</p>
					<p><b>Base Production</b>: 1 heart/sec with no active time for CtL</p>
					<p>1.5 hearts/sec for 10 seconds of active time for CtL (All time)</p>
					<p>2 hearts/sec for 100 seconds (1 min, 40 sec) of active time for CtL (All time)</p>
					<p>2.5 hearts/sec for 1000 seconds (16 min, 40 sec) of active time for CtL  (All time)</p>
					<p>3 hearts/sec for 10000 seconds of active time for CtL (2 hours, 46 min, 40 sec) (All time)</p>
					<p>3.5 hearts/sec for 100000 seconds of active time for CtL (27 hours, 47 min) (All time)</p>
					<p><b>Formula</b>:1 + 0.5 * floor(log10(x))</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts Upgrades</b></p>
					<p><b>Note</b>: Every 100 Heart Upgrades purchased will give 1 free Ruby.</p>
					<p><b>Note</b>: All Heart Upgrades will be like Ruby Upgrades for the duration of Event.(<b>Additive only</b>)</p>
					<p><b>Note</b>: The first Upgrade for each is 100 Hearts. It increases by 100 for each additional Upgrade (ie..100,200,300).</p>
					<p><b>Effects</b></p>
					<p><b>Assistants</b>: Increases by 1 Assistant with each Upgrade.</p>
					<p><b>Mana Regen</b>: Increases by 0.5 with each Upgrade.</p>
					<p><b>Max Mana</b>: Increases by 25 with each Upgrade.</p>
					<p><b>Gem Bonus</b>: Increases by 0.50 with each Upgrade.</p>
					<p><b>Exchange Bonus</b>: Increases by 1.50 with each Upgrade.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Buy 50 Heart Upgrades of each to complete Quest (<b>Must show 5100+ for each upgrade</b>)</p>
					<p><b>Note</b>: Total Hearts needed to complete all quest <b>if spread equally</b> 637500</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> Feel the Love 1</b></p>
					<p><b>Requirement</b>: 50 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> Feel the Love 2</b></p>
					<p><b>Requirement</b>: 125 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Feel the Love 3</b></p>
					<p><b>Requirement</b>: 250 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 2%.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Call to Love</b></p>
					<p><b>Requirement</b>: Purchase 250 Heart Upgrades</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage2017.png" alt="" align="middle"> I Love You in Every Language</b></p>
					<p><b>Requirement</b>: Cast Call to Love at least once with 6 different Factions.</p>
					<p><b>Note</b>: When doing the cast with 6 factions, if you do it to fast the game will not register it.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/AssistantLove2018.png" alt="" align="middle"> Assistant Love</b></p>
					<p><b>Requirement</b>: Reach 50 Assistants from Heart Upgrades.</p>
					<p><b>Reward</b>: If you unlock this feat, you will permanently unlock a new color option for the mana bar.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChocolateBoxFeat2019.png" align="middle"> Chocolate Box</b></p>
					<p><b>Requirement</b>: Have at least 72 hours of Call to Love activity time during the Valentine event.</p>
					<p><b>Note</b>: If you unlock this feat, you will permanently unlock a new upgrade with the same name.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase your event bonus by a multiplicative 50%.</p>
					<p><b>Note</b>: Once unlocked, it is available during any Seasonal Event.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> 15000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 15000 Hearts for 5 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> 50000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 50000 Hearts for 55 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest3.png" alt="Avalanche" align="middle"> 175000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 175000 Hearts for 45 Rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="Avalanche" align="middle"> 400000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 400000 Hearts for 100 Rubies. It will run out of power after you use this last time.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" alt="Avalanche" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 heart every 5 seconds for 4 hours.</p>
					<hr>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">2018 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 21, 2018 - Jan 5, 2019)</a></b></p>
				<div class="autohide">
					<p>The Christmas Event will be starting on <b>Dec 21st 2018, 1:01 PM UTC</b> and will end on <b>Jan 5th 2019, 7:59 PM UTC</b>.</p>
					<p>It's Christmas time! The subjects of your Realm are sensing the aura of power in the air, inspiring them in their daily life and making them feel proud of your righteous leadership. Encouraged by your unmatched abilities as a ruler, they believed it would be appropriate to offer you a daily tribute for the duration of the Holidays.</p>
					<p><b>Event Theme</b>: Snowballs. They will accumulate at a rate of 1 per minute, up to a maximum of 720 (12 hours). Collecting Snowballs will allow you to complete quests and increase your Avalanche upgrade bonus.</p>
					<p>Every day you will receive a Christmas Present containing Snowballs or Rubies. Presents are required to complete quests and can only be retrieved once per day by going online.</p>
					<p><b>Note</b>: The daily Christmas presents contains 1 Ruby or 200 Snowballs (every other present)</p>
					<p><b>Event Bonus</b>: Total cumulative and permanent quest bonus at the end of the Event: 14%</p>
					<p><b>Note</b>: If you didn't unlock all the Christmas feats last year, you have a chance to do so with this one! If you already did, you will be able to gain additional permanent production bonuses from completing all the quests again, and benefit from the massive bonus from the Avalanche upgrade once again.</p>
					<p>You can find all this information in a guide by pressing the "?" button in the Event Panel.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Avalanche2017.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected.</p>
					<p><b>Formula</b>: (0.8 * (s / 35) + -0.006 * (s / 35)^2 + 0.00004 * (s / 35)^3)% (max 100000% bonus), where s is amount of collected snowballs.</p>
					<p><b>Formula</b>: (1 + 0.01 * x) ^ (0.1 ^ A) where A is ascension and x is avalanche formula in percentage.</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HeavyAvalanche2017.png" alt="Avalanche" align="middle"> Heavy Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R40+.</p>
					<p><b>Cost</b>: 5000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (2.5 * A)), where x is original bonus in percentage</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GrandAvalanche2017.png" alt="Avalanche" align="middle"> Grand Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R100+.</p>
					<p><b>Cost</b>: 10000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: (x ^ (5 * A)), where x is original bonus in percentage (overrides Heavy Avalanche)</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Snowpile2016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Collect 1000, 4500, 10000 and 21000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile12016.png" alt="Snowpile 1" align="middle"> Snowpile 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Collect 1000 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile22016.png" alt="Snowpile 2" align="middle"> Snowpile 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Collect 4500 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile32016.png" alt="Snowpile 3" align="middle"> Snowpile 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Collect 10000 Snowballs</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile 4" align="middle"> Snowpile 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Collect 21000 Snowballs</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector12016.png" alt="Gift Collector 1" align="middle"> Gift Collector 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Open 1 present</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector22016.png" alt="Gift Collector 2" align="middle"> Gift Collector 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Open 4 presents</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector32016.png" alt="Gift Collector 3" align="middle"> Gift Collector 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Open 8 presents</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector 4" align="middle"> Gift Collector 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Open 13 presents</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/SantasHelpers2016.png" alt="SantasHelpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play Elves and get 50 assistants</p>
					<p><b>Note</b>: Unlockable in R7 using undead bloodline.</p>
					<p><b>Note</b>: Dwarven is allowed.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Unholidays2016.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Ally with Undead, purchase Undead Trade Treaty, Undead Friendship Pact, and Undead Alliance, during the Christmas season.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Complete all the Snowpile quests</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="GiftCollector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Open 13 Presents</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FreezingHell2018.png" alt="FreezingHell" align="middle"> Freezing Hell</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Collect at least 480 Snowballs with a single click while affiliated with the Demons.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/500Snowballs2016Shop.png" alt="500 Snowballs" align="middle"> 500 Snowballs</b></p>
					<p><b>500 Snowballs</b>: An adventurer wants to sell you 500 Snowballs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 5 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1750Snowballs2016Shop.png" alt="1750 Snowballs" align="middle"> 1750 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 1750 Snowballs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 15 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/6000Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 6000 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 6000 Snowballs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 45 Rubies</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/13500Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 13500 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 13500 Snowballs for 100 Rubies. This is all the snow he could gather.</p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Scrying</b></p>
					<p><b>Effect</b>: Produce 1 snowball every 5 minute for 4 hours.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Thanksgiving (Nov 30 - Dec 4, 2018)</a></b></p>
				<div class="autohide">
					<p>The Thanksgiving event will be starting on <b>Nov 30th 2018, 1:01 PM UTC</b> and will end on <b>Dec 4th 2018, 6:59 PM UTC</b>.</p>
					<p>Remember that all Thanksgiving upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements</p>
					<p><b>Note</b>: If you don't get the upgrade go to settings and un x (Dont Group Upgrades by Category)</p>
					<p><b><img src="/realm/Factions/picks/Thanksgiving.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 29 - Nov 5, 2018)</a></b></p>
				<div class="autohide">
					<p>Hello Everyone!</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realms. Choose your own, feed and grow it to its maximum potential!</p>
					<p>The Halloween event will be starting on <b>Oct 29th 2018, 1:01 PM UTC and will end on Nov 05th 2018, 7:59 PM UTC</b>.</p>
					<p>This event will feature daily presents (as we did for the last Christmas), inside which you will found a random monster, up to a maximum of three. Once you have found a monster, you will be able to feed it resources (see below) to make it grow, unlocking perks and bonuses in the process.</p>
					<p>There will be three new resources for the event: Blood, Ectoplasm and Bones. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 720 units (12 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Halloween</b></p>
					<hr>
					<p>You will get a Pumpkin Smasher once a day (1:01PM UTC Time).</p>
					<p>You will also get some 75 of each resources and a Ruby with each Pumpkin Smasher.</p>
					<p>Pumpkin Smasher should give you 1 of 3 Monster (Skeleton, Ghost and Vampire) if you are missing any.</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Note</b>: You need to click on monster to activate it and get the Crucible Of Darkness upgrade.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will give you 1 of 3 Monsters, also gives resources and a gift</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect at least 480 Ectoplasm with a single click while <b>USING</b> Ghost monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect at least 480 Blood with a single click while <b>USING</b> Vampire monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect at least 480 Bones with a single click while <b>USING</b> Skeleton monster pet.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenMagic.png" alt="Halloween" align="middle"> Halloween Magic</b></p>
					<p><b>Requirement</b>: Cast each Halloween Spell at least 100 times in this reincarnation.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
					<hr>
					<style>
						div#images {
							width: 100%;
							text-align: left;
						}
						div#images div {
							display: inline-block;
						}
					</style>
					<br>
					<p><b><center>Event Resources</center></b></p>
					<br>
					<div id="images">
						<center>
							<div>
								<center><img src="/realm/Factions/picks/Blood.png" /></center>
								<center><b>Blood</b></center>
							</div>
							&nbsp&nbsp&nbsp&nbsp&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Ectoplasm.png" width="74%" height="74%" /></center>
								<center><b>Ectoplasm</b></center>
							</div>
							&nbsp
							<div>
								<center><img src="/realm/Factions/picks/Bones.png" /></center>
								<center><b>Bones</b></center>
							</div>
						</center>
					</div>
					<br/>
					<p>You will need 3058 of each (Blood, Ectoplasm and Bones) to complete event.</p>
					<p>They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 480 units (8 hours).</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of prestige factions outside your alignment at once.</p>
					<p><b>Note</b>: You cannot select any Lineage based on those bloodlines.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Reduce the cost of faction spells by 75%.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: Level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: Multiplicatively increase Maximum Mana and Mana Regeneration based on clicks made in this game.</p>
					<p><b>Formula</b>: Max Mana: (log10(1 + x) ^ 2.5)%, where x is clicks made this game.</p>
					<p><b>Formula</b>: Mana Regeneration: (log10(1 + x) ^ 2.25)%, where x is clicks made this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 100 times greater Faction Coin find chance.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: 0.2 * (R + 1) * x ^ 0.45, where R is reincarnation count and x is mana produced.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b>Note</b>: Not affected by ascension penalties</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Triple your offline productions of Faction Coins, clicks, mana, spells cast and spell activity time.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 23 - Aug 30, 2018)</a></b></p>
				<div class="autohide">
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 8 hours, up to 480 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<br/>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<br/>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.</p>
					<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
					<p><b>Formula</b>: min(100000, (x / 27) - (x^2 / 36450) + (x^3 / 98415000)) %, where x is the number of Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
					<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:1000 (Unlocked when aligned with Winterly)</p>
					<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
					<p><b>Formula</b>: 0.1 * x^0.6 * y^1.1 %, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
					<p><b>Formula</b>: 20 * x ^ 0.75%, where x is time spent aligned with the Winterly in hours.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
					<p><b>Formula</b>: x^1.03 %, where x is the number of Frost Orbs collected in total.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
					<p><b>Effect</b>: Spell durations are increased by 100%.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
					<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:300 (Unlocked when aligned with Summeraan)</p>
					<p><b>Effect</b>:Increase the production of all buildings based on spells cast in this game for 12s. Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
					<p><b>Formula</b>: 5 * x^0.85%, where x is the number of spells cast this game, and x * y^1.1, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
					<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
					<p><b>Formula</b>: 25 * x%, where x is the number of Flame Orbs collected with the last click.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
					<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
					<p><b>Formula</b>: 2 * log (1 + x^2), where x is the number of clicks made in this game.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
					<p><b>Effect</b>: Decrease the cost of all spells by 50%. (multiplicative)</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Winterly Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle">  Winterly Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" align="middle">   Winterly Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" align="middle"> Winterly Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
					<br/>
					<p><b>Summeraan Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" align="middle"> Summeraan Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
					<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
					<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
					<p><b>Unlock</b>: Collect at least 480 Flame Orbs with a single click while affiliated with the Winterly.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
					<p><b>Unlock</b>: Collect at least 480 Frost Orbs with a single click while affiliated with the Summeraans.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/ClimateForecast.png" alt="Chill Out" align="middle"> Climate Forecast</b></p>
					<p><b>Unlock</b>: Collect at least 480 of any Orbs with a single click while unaffilliated with either of the Summer Festival factions.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><b><img src="/realm/Factions/picks/75OrbShopItem.png" alt="Shop Item" align="middle"> 75 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300OrbShopItem.png" alt="Shop Item" align="middle"> 300 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 300 Frost and Flame Orbs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250OrbShopItem.png" alt="Shop Item" align="middle"> 1250 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 1250 Frost and Flame Orbs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500OrbShopItem.png" alt="Shop Item" align="middle"> 3500 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 3500 Frost and Flame Orbs for 100 Rubies. These are all the orbs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin Invasion (Aug 3 - Aug 7, 2018)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/TheGreatestArmy2017.png" alt="The Greatest Army" align="middle"> The Greatest Army</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Goblin Crowns collected.</p>
					<p><b>Formula</b>: (x / 20 - 0.005 * (x / 20) ^ 2 + 0.00045 * (x / 20) ^ 3)%, where x is amount of collected Goblin Crowns. Capped at 100000%.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/GobinCrown2017.png" alt="Goblin Crowns" align="middle"> Goblin Crowns</b></p>
					<p>During the Goblin Invasion Event you will be able to collect Goblin Crowns, appearing in a random location of your screen at a rate of 1 per minute, stacking up to 480 units (8 hours). These Resources will be used to either fight or support the invading Goblin Army: both choices will grant you new bonuses and unlock new unique upgrades. You can also complete Quests and Feats, also found in the Event panel. Aside for completion purposes, completed quests will also grant a small permanent production bonus. Remember that all Goblin Invasion upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<p>The Formula for the cost needed to level a faction is floor((level + 1) ^ 0.85) Goblin Crowns</p>
					<p>You need 203 Goblin Crowns (total) to level a faction to level 25, 740 to level 50, and 2685 to level 100.</p>
					<p>You need 5370 Goblin Crowns to complete all quest by leveling both factions to level 100, Total time 3 days 17 hours 30 minutes without scrying.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FighttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Fight the Goblin Army</b></p>
					<p><b>Requirement</b>: Good or Neutral alignment</p>
					<p><b>Effect</b>: Increase maximum mana and mana regeneration by 1% per level.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SupporttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Support the Goblin Army</b></p>
					<p><b>Requirement</b>: Evil or Neutral alignment</p>
					<p><b>Effect</b>: Increase your assistants by 1% per level.</p>
					<hr>
					<p><b>Event Quest</b></p>
					<p><b>Goblin's Bane Quest</b>: Fight the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 1 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Magical Clicks</b></p>
					<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
					<p><b>Formula</b>: (30 / floor(x ^ 1.2) / 10 + 1), where x is amount of active spells.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 2 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Eye of the King</b></p>
					<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of clicks made in this Reincarnation.</p>
					<p><b>Formula</b>: ((log10(1 + x)) ^ 3.5)%, where x is the amount of clicks made in this reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 3 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> God's Finger</b></p>
					<p><b>Effect</b>: Each manual click counts as 1000 clicks for all purposes.</p>
					<br/>
					<p><b>Goblin's Commander Quest</b>: Support the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 1 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
					<p><b>Effect</b>: All spells activity time counts more based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (0.35 * ln(1 + x) ^ 3.5)%, where x is amount of assistants you own.</p>
					<p><b>Note</b>: Does NOT work for spell tier leveling</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 2 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin Commandos</b></p>
					<p><b>Effect</b>: Increases the production of Neutral Buildings based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (150 * x ^ 0.25)%, where x is amount of assistants you own.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 3 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> The Slack King</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
					<p><b>Formula</b>: (0.01 * x ^ 0.7)%, where x is time spent in this Reincarnation.</p>
					<hr>
					<p><b>Event Feat</b></p>
					<p><b><img src="/realm/Factions/picks/GoblinsBane2017.png" alt="Seraphim Champion" align="middle"> Goblins Bane</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsCommander2017.png" alt="Seraphim Champion" align="middle"> Goblin's Commander</b></p>
					<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoblinsEverywhere!2017.png" alt="Seraphim Champion" align="middle"> Goblins Everywhere!</b></p>
					<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
					<p><b>Note</b>: Prestige Factions count as 1 for Good, Evil, and Neutral alignment (Example Angel/Dwarven is 1, any other Good/Dwarven is not counted)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldHunt2018.png" align="middle"> Gold Hunt</b></p>
					<p><b>Requirement</b>: Collect at least Goblin Crowns with a single click while affiliated with Goblins.</p>
					<p><b>Note</b>: As prestige, only prestige will count. For example, Angel/Dwarven counts as Dwarven for feat purposes.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/75GoblinCrowns2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 75 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 75 Goblin Crowns for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300GoblinCrowns2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 300 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 300 Goblin Crowns 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250GoblinCrowns2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 1250 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 1250 Goblin Crowns for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500GoblinCrowns2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 3500 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 3500 Goblin Crowns for 100 Rubies.</p>
					<p>These are all the crowns he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">3rd Anniversary - Blood War (May 18 - May 22, 2018)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/NephilimGlory2017.png" alt="Nephilim Glory" align="middle"> Nephilim Glory</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Holy Symbols and Lava Stones collected.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/HolySymbols2017.png" alt="Holy Symbols" align="middle"> Holy Symbols</b></p>
					<p><b><img src="/realm/Factions/picks/LavaStones2017.png" alt="Lava Stones" align="middle"> Lava Stones</b></p>
					<p>Holy Symbols and Lava Stones will appear on a random location of the game screen and you simply have to click to collect them, then wait for more Resources to appear. Or you can let them grow bigger over time (at a rate of 1 Resource per Minute) if you are idle or offline, up to a maximum size of 480 Holy Symbols or Lava Stones! Be careful though, you can only collect one stack of Holy Symbols or Lava Stones - by doing so, the other will disappear.</p>
					<p><b>Note</b>: You need 2350 of each resource to get all the upgrades.</p>
					<p><b>Note</b>: All upgrades has a 1 time cost but needs selected every Abdication and Reincarnation.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SeraphimAlliance2017.png" alt="Seraphim Alliance" align="middle"> Seraphim Alliance</b></p>
					<p><b>Cost</b>: 200 Holy Symbols</p>
					<p><b>Description</b>: The highest Angelic ranks carry wings blazing with pure light, whose every feather is infused with enough magical power to revive a dead soul or purify the hearts of a thousand sinners. Affiliating with the Seraphim will increase your magical abilities to the extreme, but you can only do so when playing as Good or Neutral.</p>
					<p><b>Seraphim Quest</b></p>
					<p><b>Seraphim Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/HeavenlyFeathers2017.png" alt="Heavenly Feathers" align="middle"> Heavenly Feathers</b></p>
					<p><b>Cost</b>: 400 Holy Symbols.</p>
					<p><b>Effect</b>: All buildings also increase your mana regeneration.</p>
					<p><b>Formula</b>: 2 * x ^ 0.2</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<p><b>Seraphim Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/God'sChamber2017.png" alt="God's Chamber" align="middle"> God's Chamber</b></p>
					<p><b>Cost</b>: 750 Holy Symbols.</p>
					<p><b>Effect</b>: Increase maximum mana by 1 for every 10 buildings you own.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
					<p><b>Seraphim Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/BoonofRadiance2017.png" alt="Boon of Radiance" align="middle"> Boon of Radiance</b></p>
					<p><b>Cost</b>: 1000 Holy Symbols.</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
					<p><b>Formula</b>: 0.2 * (x * 30) ^ 0.85</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus.</p>
					<p><b>Effect</b>: Also completes Seraphim Champion Feat.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/AsmondeanAlliance2017.png" alt="Asmodean Alliance" align="middle"> Asmodean Alliance</b></p>
					<p><b>Cost</b>: 200 Lava Stones</p>
					<p><b>Description</b>: The most cruel of Demons also happen to be the biggest and most deformed abyssal creatures, featuring all kinds of unnatural flesh and bone appendages. Their very existence is a pain to see and hear driving all but the most strong souls to madness. Affiliating with the Asmodeans will bolster your assistant army unbelievably, but you can only do so when playing as Evil or Neutral.</p>
					<br/>
					<p><b>Asmodean Quest</b></p>
					<p><b>Asmodean Champion 1</b></p>
					<p><b><img src="/realm/Factions/picks/Broodmothers2017.png" alt="Broodmothers" align="middle"> Broodmothers</b></p>
					<p><b>Cost</b>: 400 Lava Stones</p>
					<p><b>Effect</b>: Gain additional assistants based on time spent affiliated with the Asmodeans.</p>
					<p><b>Formula</b>: 0.25 * x * (x + 1) where x is hours</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<p><b>Asmodean Champion 2</b></p>
					<p><b><img src="/realm/Factions/picks/AbyssalGaze2017.png" alt="Abyssal Gaze" align="middle"> Abyssal Gaze</b></p>
					<p><b>Cost</b>: 750 Lava Stones</p>
					<p><b>Effect</b>: Increase assistant production based on total time spent as Evil.</p>
					<p><b>Formula</b>: 2 x ^ 0.7 where x is seconds of total evil time</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
					<p><b>Asmodean Champion 3</b></p>
					<p><b><img src="/realm/Factions/picks/Legion'sLimbs2017.png" alt="Legion's Limbs" align="middle"> Legion's Limbs</b></p>
					<p><b>Cost</b>: 1000 Lava Stones</p>
					<p><b>Effect</b>: Increase offline production bonus based on the amount of assistants you own.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus</p>
					<p><b>Effect</b>: Also completes Asmodean Champion Feat</p>
					<hr>
					<p><b>Event Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/SeraphimChampion2017.png" alt="Seraphim Champion" align="middle"> Seraphim Champion</b></p>
					<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
					<p><b><img src="/realm/Factions/picks/AsmondeanChampion2017.png" alt="Asmodean Champion" align="middle"> Asmodean Champion</b></p>
					<p><b>Requirement</b>: Purchase all Asmodean Upgrades</p>
					<p><b><img src="/realm/Factions/picks/SacredHoliness2017.png" alt="Sacred Holiness" align="middle"> Sacred Holiness</b></p>
					<p><b>Requirement</b>: Collect at least 480 Holy Symbols with a single click while affiliated with the Angels.</p>
					<p><b><img src="/realm/Factions/picks/DarkestHeresy2017.png" alt="Darkest Heresy" align="middle"> Darkest Heresy</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click while affiliated with the Demons</p>
					<p><b><img src="/realm/Factions/picks/Indifference2018.png" alt="Indifference" align="middle"> Indifference</b></p>
					<p><b>Requirement</b>: Collect at least 480 Lava Stones with a single click or Holy Symbols while affiliated with a Neutral faction</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/40HolySymbolsandLavaStones2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 40 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 40 Holy Symbols and Lava Stones for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/150HolySymbolsandLavaStones2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 150 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 150 Holy Symbols and Lava Stones for 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/650HolySymbolsandLavaStones2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 650 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 650 Holy Symbols and Lava Stones for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/1800HolySymbolsandLavaStones2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 1800 Holy Symbols and Lava Stones</b></p>
					<p>A hooded shady merchant wants to sell you 1800 Holy Symbols and Lava Stones for 100 Rubies.</p>
					<p>These are all the resources he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Mar 30 - Apr 6, 2018)</a></b></p>
				<div class="autohide">
					<p>Starts on Mar 30th, 12:01 PM UTC and will end on Apr 6th, 6:59 PM UTC.</p>
					<p>You get a RNG state for Eggs when the event begins, Which predetermines when you'll get certain eggs.</p>
					<p>Paste your Export in the <a target="_blank" href="http://dox4242.github.io/mri/index.html"><b>Meggnetic Resonance Imager</a></b> to see when you will get your next Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EventResourceEaster2017.png" alt="Blue Omelette" align="middle"> Event Resource</b></p>
					<p>Eggs will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Egg to appear. Or, you can let them grow bigger over time (at a rate of 1 Egg per minute) if you are idle or offline- up to a maximum size of 480 Eggs! Eggs are divided into Common, Rare and Unique Eggs, and each time you collect them you will get random types based on their rarity. Each time you find or buy a Unique Egg, you also gain 1 free Ruby!</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BlueOmeletteEaster2017.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect & Notes</b>: Increase the production of all buildings based on the amount of rare eggs collected.</p>
					<p><b>Formula</b>: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000%.</p>
					<p><b>Note</b>: Using Rare Eggs to buy Unique Eggs will not effect the bonus.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEggEaster2017.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg3000Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUnique100Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b>Egg Hunter Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggHunter750Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Collect 750 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter2000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Collect 2000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter4000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Collect 4000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Hunter Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<hr>
					<p><b>Egg Collection Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggCollection1Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Find 1 Unique Egg.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection3Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Find 3 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection5Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Find 5 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Find 8 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Collection Feat.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<hr>
					<p><b>Feats</b></p>
					<p>If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bar.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GoldenChickenEaster2017.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect a full stack of 480 eggs while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/GreyEaster2017.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BunnyHelpers2018.png" alt="Bunny Helpers" align="middle"> Bunny Helpers</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect a full stack of 480 Eggs while having exactly 480 assistants.</p>
					<p><b>Effect</b>: If you unlock all of this event's feats, you will permanently unlock a new color option for the mana bowl.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p><b><img src="/realm/Factions/picks/UGiantEggEaster2017.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEggEaster2017.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect</b>: Increase the production of all buildings by 100%</p>
					<p><b>Effect A1</b>: Increase the production of all buildings by 7.18%.</p>
					<p><b>Effect A2</b>: Increase the production of all buildings by 0.7%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEggEaster2017.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEggEaster2017.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect</b>: Increase clicking reward by 100%</p>
					<p><b>Effect A1</b>: Increase clicking reward by 7.18%</p>
					<p><b>Effect A2</b>: Increase clicking reward by 0.07</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEggEaster2017.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEggEaster2017.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect</b>: Increase offline production by 500%</p>
					<p><b>Effect A1</b>: Increase offline production by 19.6%</p>
					<p><b>Effect A2</b>: Increase offline production by 1.81%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEggEaster2017.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations cost multiplier (excavation cost multiplier decrease by 0.025).</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEggEaster2017.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b>Scry</b> Produce 1 random Egg every 5 minutes for 4 hours.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs150Easter2017.png" alt="Bundle of Eggs" align="middle"> 150 Eggs</b></p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs600Easter2017.png" alt="Bundle of Eggs" align="middle"> 600 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 15 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 600 eggs for 15 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs2500Easter2017.png" alt="Bundle of Eggs" align="middle"> 2500 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 45 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 2500 eggs for 45 rubies. It will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/BundleofEggs7000Easter2017.png" alt="Bundle of Eggs" align="middle"> 7000 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 100 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 7000 eggs for 100 rubies. These are all the eggs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2018)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/AprilFools2017.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b>Note</b>: If you got this upgrade in the past it will only show in purchased upgrades.</p>
					<p><b>Note</b>: This upgrade does nothing.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (Feb 14 - 18, Feb 2018)</a></b></p>
				<div class="autohide">
					<p><b>Event Theme</b>: <b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts</b></p>
					<p>Collected online and offline at a base rate of 1 per second and can be increased up to 3/s during the length of the event as follows:</p>
					<p><b><img src="/realm/Factions/picks/CalltoLove2017.png" alt="Avalanche" align="middle"> Call to Love</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>: In addition to the Call to Arms spell effect, increases heart production per second based on the amount of spell casts.</p>
					<p>Base Production 1 heart/sec with no active time for CtL</p>
					<p>2 hearts/sec for 1000 seconds of active time for CtL (16 min, 40 sec) (Total all Rs)</p>
					<p>3 hearts/sec for 100000 seconds of active time for CtL (27 hours, 47 min) ((Total all Rs)</p>
					<p><b>Formula</b>:1 + 0.5 * floor(log10(x))</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="" align="middle"> Hearts Upgrades</b></p>
					<p>Every 100 Heart Upgrades purchased will give 1 free Ruby.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Cost</b>: The first Upgrade for each is 100 Hearts. It increases by 100 for each additional Upgrade (ie..100,200,300).</p>
					<p><b>Effect</b></p>
					<p><b>Assistants</b>: Increases by 1 Assistant with each Upgrade.</p>
					<p><b>Mana Regen</b>: Increases by 0.5 with each Upgrade.</p>
					<p><b>Max Mana</b>: Increases by 25 with each Upgrade.</p>
					<p><b>Gem Bonus</b>: Increases by 0.50 with each Upgrade.</p>
					<p><b>Exchange Bonus</b>: Increases by 1.50 with each Upgrade.</p>
					<p><b>Note</b>: All Heart Upgrades will be like Ruby Upgrades for the duration of Event.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Note</b>: Buy 50 Heart Upgrades of each to complete Quest</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> Feel the Love 1</b></p>
					<p><b>Cost</b>: 50 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> Feel the Love 2</b></p>
					<p><b>Cost</b>: 125 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Feel the Love 3</b></p>
					<p><b>Cost</b>: 250 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 2%.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="" align="middle"> Call to Love</b></p>
					<p><b>Cost</b>: Purchase 250 Heart Upgrades</p>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage2017.png" alt="" align="middle"> I Love You in Every Language</b></p>
					<p><b>Cost</b>: Cast Call to Love at least once with 6 different Factions.</p>
					<p><b>Note</b>: When doing the cast with 6 factions, if you do it to fast the game will not register it.</p>
					<p><b><img src="/realm/Factions/picks/AssistantLove2018.png" alt="" align="middle"> Assistant Love</b></p>
					<p><b>Cost</b>: Reach 50 Assistants from Heart Upgrades.</p>
					<p><b>Reward</b>: Adds a button in the top left cornor of Event window to change the mana to be either blue or red.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="" align="middle"> 15000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 15000 Hearts for 5 Rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="" align="middle"> 50000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 50000 Hearts for 55 Rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest3.png" alt="Avalanche" align="middle"> 175000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 175000 Hearts for 45 Rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="Avalanche" align="middle"> 400000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 400000 Hearts for 100 Rubies. It will run out of power after you use this last time.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" alt="Avalanche" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 heart every 5 seconds for 4 hours.</p>
					<hr>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">2017 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 20, 2017 - Jan 4, 2018)</a></b></p>
				<div class="autohide">
					<p>The Christmas Event will be starting on <b>Dec 20th 2017, 1:01 PM UTC</b> and will end on <b>Jan 4th 2018, 7:59 PM UTC</b>.</p>
					<p>It's Christmas time! The subjects of your Realm are sensing the aura of power in the air, inspiring them in their daily life and making them feel proud of your righteous leadership. Encouraged by your unmatched abilities as a ruler, they believed it would be appropriate to offer you a daily tribute for the duration of the Holidays.</p>
					<p><b>Event Theme</b>: Snowballs. They will accumulate at a rate of 1 per minute, up to a maximum of 480 (8 hours). Collecting Snowballs will allow you to complete quests and increase your Avalanche upgrade bonus.</p>
					<p>Every day you will receive a Christmas Present containing Snowballs or Rubies. Presents are required to complete quests and can only be retrieved once per day by going online.</p>
					<p><b>Note</b>: The daily Christmas presents contains 1 Ruby or 200 Snowballs (every other present)</p>
					<p><b>Event Bonus</b>: Total cumulative and permanent quest bonus at the end of the Event: 14%</p>
					<p><b>Note</b>: If you didn't unlock all the Christmas feats last year, you have a chance to do so with this one! If you already did, you will be able to gain additional permanent production bonuses from completing all the quests again, and benefit from the massive bonus from the Avalanche upgrade once again.</p>
					<p>You can find all this information in a guide by pressing the "?" button in the Event Panel.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Avalanche2017.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected.</p>
					<p><b>Formula</b>: (0.8 * (s / 35) + -0.006 * (s / 35)^2 + 0.00004 * (s / 35)^3)% (max 100000% bonus), where s is amount of collected snowballs.</p>
					<p><b>Note</b>: Ascension penalty for this upgrade is bugged and applies to the percentage rather than to the multiplier.</p>
					<p><b>Formula</b>: final bonus multiplier = 1 + 0.01 * (x ^ (0.1 ^ A)) instead of (1 + 0.01 * x) ^ (0.1 ^ A) where A is ascension and x is avalanche formula in percentage.</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<p><b><img src="/realm/Factions/picks/HeavyAvalanche2017.png" alt="Avalanche" align="middle"> Heavy Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R40+.</p>
					<p><b>Cost</b>: 5000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: reduces ascension penalty ^0.1 to ^0.4</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<p><b><img src="/realm/Factions/picks/GrandAvalanche2017.png" alt="Avalanche" align="middle"> Grand Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Requirement</b>: Play during the Christmas Event, R100+.</p>
					<p><b>Cost</b>: 10000 Snowballs</p>
					<p><b>Effect</b>: Improve the effect of Avalanche for higher Ascensions.</p>
					<p><b>Formula</b>: reduces ascension penalty ^0.4 to ^0.7</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Snowpile2016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Collect 1000, 4500, 10000 and 21000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<p><b><img src="/realm/Factions/picks/Snowpile12016.png" alt="Snowpile 1" align="middle"> Snowpile 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Collect 1000 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<p><b><img src="/realm/Factions/picks/Snowpile22016.png" alt="Snowpile 2" align="middle"> Snowpile 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Collect 4500 Snowballs</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<p><b><img src="/realm/Factions/picks/Snowpile32016.png" alt="Snowpile 3" align="middle"> Snowpile 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Collect 10000 Snowballs</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile 4" align="middle"> Snowpile 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Collect 21000 Snowballs</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector12016.png" alt="Gift Collector 1" align="middle"> Gift Collector 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Open 1 present</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector22016.png" alt="Gift Collector 2" align="middle"> Gift Collector 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Open 4 presents</p>
					<p><b>Effect</b>: Adds 1% to you cumulative bonus</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector32016.png" alt="Gift Collector 3" align="middle"> Gift Collector 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Open 8 presents</p>
					<p><b>Effect</b>: Adds 2% to you cumulative bonus</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector 4" align="middle"> Gift Collector 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Open 13 presents</p>
					<p><b>Effect</b>: Adds 3% to you cumulative bonus</p>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/SantasHelpers2016.png" alt="SantasHelpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play Elves and get 50 assistants</p>
					<p><b>Note</b>: Unlockable in R7 using undead bloodline.</p>
					<p><b><img src="/realm/Factions/picks/Unholidays2016.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Ally with the Undead</p>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Complete all the Snowpile quests</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="GiftCollector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Open 13 Presents</p>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/500Snowballs2016Shop.png" alt="500 Snowballs" align="middle"> 500 Snowballs</b></p>
					<p><b>500 Snowballs</b>: An adventurer wants to sell you 500 Snowballs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b><img src="/realm/Factions/picks/1750Snowballs2016Shop.png" alt="1750 Snowballs" align="middle"> 1750 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 1750 Snowballs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b><img src="/realm/Factions/picks/6000Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 6000 Snowballs</b></p>
					<p><b>6000 Snowballs</b>: An adventurer wants to sell you 6000 Snowballs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b><img src="/realm/Factions/picks/13500Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 13500 Snowballs</b></p>
					<p><b>13500 Snowballs</b>: An adventurer wants to sell you 13500 Snowballs for 100 Rubies. This is all the snow he could gather.</p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Scrying</b></p>
					<p><b>Effect</b>: Produce 1 snowball every 5 minute for 4 hours.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Ruby Shine - Thanksgiving (Nov 27 - Nov 30, 2017)</a></b></p>
				<div class="autohide">
					<p>The Ruby Shine event will be starting on <b>Nov 27th 2017, 1:01 PM UTC</b> and will end on <b>Nov 30th 2017, 5.59 PM UTC</b>.</p>
					<p>Your miners have found a rich vein of Rubies within your realm! With the abundance of new specimen, researchers discovered ways to grant better improvements to your production. They also sent a sample of the new minerals collected for you to try out!</p>
					<p>You will receive 3 Rubies per day during the Ruby Shine event.</p>
					<p><b>Note</b>: There is no Cumulative and Permanent Bonuses from this Events.</p>
					<p><b><img src="/realm/Factions/picks/RubyShineUpgrade.png" alt="Ruby Shine" align="middle"> Ruby Shine</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during the Ruby Shine event.</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of Rubies you own for the duration of the Ruby Shine event.</p>
					<p><b>Formula</b>: x ^ 1.15, where x is Rubies you own.</p>
					<hr>
					<p><b>Thanksgiving</b></p>
					<p>Remember that all Thanksgiving upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements</p>
					<p><b>Note</b>: If you don't get the upgrade go to settings and un x (Dont Group Upgrades by Category)</p>
					<p><b><img src="/realm/Factions/picks/Thanksgiving.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 30 - Nov 06, 2017)</a></b></p>
				<div class="autohide">
					<p>Hello Everyone!</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realms. Choose your own, feed and grow it to its maximum potential!</p>
					<p>The Halloween event will be starting on <b>Oct 30th 2017, 1:01 PM UTC and will end on Nov 06th 2017, 7:59 PM UTC</b>.</p>
					<p>This event will feature daily presents (as we did for the last Christmas), inside which you will found a random monster, up to a maximum of three. Once you have found a monster, you will be able to feed it resources (see below) to make it grow, unlocking perks and bonuses in the process.</p>
					<p>There will be three new resources for the event: Blood, Ectoplasm and Bones. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 480 units (8 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Halloween</b></p>
					<hr>
					<p>You will get a Pumpkin Smasher once a day (1:01PM UTC Time).</p>
					<p>You will also get some 75 of each resources and a Ruby with each Pumpkin Smasher.</p>
					<p>Pumpkin Smasher should give you 1 of 3 Monster (Skeleton, Ghost and Vampire) if you are missing any.</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Note</b>: You need to click on monster to activate it and get the Crucible Of Darkness upgrade.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will give you 1 of 3 Monsters, also gives resources and a gift</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect a full stack of 480 Ectoplasm while <b>USING</b> Ghost monster pet.(Must have the spell)</p>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect a full stack of 480 Blood while <b>USING</b> Vampire monster pet.(Must have the spell)</p>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect a full stack of 480 Bones while <b>USING</b> Skeleton monster pet.(Must have the spell)</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
					<hr>
					<p><b>Resources</b></p>
					<p><b><img src="/realm/Factions/picks/Blood.png" alt="Blood" align="middle"> Blood</b>
						<b><img src="/realm/Factions/picks/Ectoplasm.png" alt="Ectoplasm" align="middle"> Ectoplasm</b>
						<b><img src="/realm/Factions/picks/Bones.png" alt="Vampire" align="middle"> Bones</b></p>
					<p>You will need 3058 of each (Blood, Ectoplasm and Bones) to complete event.</p>
					<p>They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 480 units (8 hours).</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of prestige factions outside your alignment at once.</p>
					<p><b>Note</b>: You can select any Lineage based on those bloodlines.</p>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Reduce the cost of faction spells by 75%.</p>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: Level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: Multiplicatively increase Maximum Mana and Mana Regeneration based on clicks made in this game.</p>
					<p><b>Formula</b>: Max Mana: (log10(1 + x) ^ 2.5)%, where x is clicks made this game.</p>
					<p><b>Formula</b>: Mana Regeneration: (log10(1 + x) ^ 2.25)%, where x is clicks made this game.</p>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 100 times greater Faction Coin find chance.</p>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: (0.2 * (R + 1) * x ^ 0.45)%, where R is reincarnation count and x is mana produced this game.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b>Note</b>: Not affected by ascension penalties</p>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Triple your offline productions of Faction Coins, clicks, mana, spells cast and spell activity time.</p>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 16 - Aug 23, 2017)</a></b></p>
				<div class="autohide">
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 8 hours, up to 480 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.</p>
					<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
					<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
					<p><b>Formula</b>: min(100000, (x / 27) - (x^2 / 36450) + (x^3 / 98415000)) %, where x is the number of Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:1000 (Unlocked when aligned with Winterly)</p>
					<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
					<p><b>Formula</b>: 0.1 * x^0.6 * y^1.1 %, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
					<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
					<p><b>Formula</b>: 20 * x ^ 0.75%, where x is time spent aligned with the Winterly in hours.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
					<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
					<p><b>Formula</b>: x^1.03 %, where x is the number of Frost Orbs collected in total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
					<p><b>Effect</b>: Spell durations are increased by 100%.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:300 (Unlocked when aligned with Summeraan)</p>
					<p><b>Effect</b>:Increase the production of all buildings based on spells cast in this game for 12s. Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
					<p><b>Formula</b>: 5 * x^0.85%, where x is the number of spells cast this game, and x * y^1.1, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
					<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
					<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
					<p><b>Formula</b>: 25 * x%, where x is the number of Flame Orbs collected with the last click.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
					<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
					<p><b>Formula</b>: 2 * log (1 + x^2), where x is the number of clicks made in this game.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
					<p><b>Effect</b>: Decrease the cost of all spells by 50%. (multiplicative)</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b>Winterly Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle">  Winterly Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" align="middle">   Winterly Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" align="middle"> Winterly Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
					<br/>
					<p><b>Summeraan Champion</b></p>
					<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 1</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" align="middle"> Summeraan Champion 2</b></p>
					<p><b>Effect</b>: +1% Event bonus.</p>
					<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" align="middle"> Summeraan Champion 3</b></p>
					<p><b>Effect</b>: +2% Event bonus.</p>
					<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock</b>: Collect a full stack of 480 Flame Orbs while affiliated with the Winterly.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock</b>: Collect a full stack of 480 Frost Orbs while affiliated with the Summeraans.</p>
					<hr>
					<p><b>Shop Items</b></p>
					<p><b><img src="/realm/Factions/picks/75OrbShopItem.png" alt="Shop Item" align="middle"> 75 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/300OrbShopItem.png" alt="Shop Item" align="middle"> 300 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 300 Frost and Flame Orbs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/1250OrbShopItem.png" alt="Shop Item" align="middle"> 1250 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 1250 Frost and Flame Orbs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/3500OrbShopItem.png" alt="Shop Item" align="middle"> 3500 Frost and Flame Orbs</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Description</b>: A spring wizard wants to sell you 3500 Frost and Flame Orbs for 100 Rubies. These are all the orbs he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Goblin Invasion (Jul 21 - Jul 25, 2017)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/TheGreatestArmy2017.png" alt="The Greatest Army" align="middle"> The Greatest Army</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Goblin Crowns collected.</p>
					<p><b>Formula</b>: (x / 20 - 0.005 * (x / 20) ^ 2 + 0.00045 * (x / 20) ^ 3)%, where x is amount of collected Goblin Crowns. Capped at 100000%.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/GobinCrown2017.png" alt="Goblin Crowns" align="middle"> Goblin Crowns</b></p>
					<p>During the Goblin Invasion Event you will be able to collect Goblin Crowns, appearing in a random location of your screen at a rate of 1 per minute, stacking up to 480 units (8 hours). These Resources will be used to either fight or support the invading Goblin Army: both choices will grant you new bonuses and unlock new unique upgrades. You can also complete Quests and Feats, also found in the Event panel. Aside for completion purposes, completed quests will also grant a small permanent production bonus. Remember that all Goblin Invasion upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<p>The Formula for the cost needed to level a faction is floor((level + 1) ^ 0.85) Goblin Crowns</p>
					<p>You need 203 Goblin Crowns (total) to level a faction to level 25, 740 to level 50, and 2685 to level 100.</p>
					<p>You need 5370 Goblin Crowns to complete all quest by leveling both factions to level 100, Total time 3 days 17 hours 30 minutes without scrying.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/FighttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Fight the Goblin Army</b></p>
					<p><b>Requirement</b>: Good or Neutral alignment</p>
					<p><b>Effect</b>: Increase maximum mana and mana regeneration by 1% per level.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/SupporttheGoblinArmy2017.png" alt="Goblin Crowns" align="middle"> Support the Goblin Army</b></p>
					<p><b>Requirement</b>: Evil or Neutral alignment</p>
					<p><b>Effect</b>: Increase your assistants by 1% per level.</p>
					<hr>
					<p><b>Event Quest</b></p>
					<p><b>Goblin's Bane Quest</b>: Fight the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 1 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane12017.png" alt="Goblin's Bane" align="middle"> Magical Clicks</b></p>
					<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
					<p><b>Formula</b>: floor(x^1.2/10) clicks per seconds, where x is amount of active spells.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 2 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane22017.png" alt="Goblin's Bane" align="middle"> Eye of the King</b></p>
					<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of clicks made in this Reincarnation.</p>
					<p><b>Formula</b>: ((log10(1 + x)) ^ 3.5)%, where x is the amount of clicks made in this reincarnation.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> Goblin's Bane 3 of 3</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sBane32017.png" alt="Goblin's Bane" align="middle"> God's Finger</b></p>
					<p><b>Effect</b>: Each manual click counts as 1000 clicks for all purposes.</p>
					<br/>
					<p><b>Goblin's Commander Quest</b>: Support the Goblin Army</p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 1 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 25.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander12017.png" alt="Goblin's Bane" align="middle"> Elite Goblins</b></p>
					<p><b>Effect</b>: All spells activity time counts more based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (x ^ 0.5)%, where x is amount of assistants you own.</p>
					<p><b>Note</b>: Does NOT work for spell tier leveling</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 2 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 50.</p>
					<p><b>Effect</b>: Adds 1% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander22017.png" alt="Goblin's Bane" align="middle"> Goblin Commandos</b></p>
					<p><b>Effect</b>: Increases the production of Neutral Buildings based on the amount of assistants you own.</p>
					<p><b>Formula</b>: (150 * x ^ 0.25)%, where x is amount of assistants you own.</p>
					<br/>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> Goblin's Commander 3 of 3</b></p>
					<p><b>Requirement</b>: Support the Goblin Army level 100.</p>
					<p><b>Effect</b>: Adds 2% cumulative bonus to your total Event bonus.</p>
					<p><b>Reward</b></p>
					<p><b><img src="/realm/Factions/picks/Goblin'sCommander32017.png" alt="Goblin's Bane" align="middle"> The Slack King</b></p>
					<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation. Also further increase Offline production by the same amount.</p>
					<p><b>Formula</b>: (0.01*x ^ 0.7)%, where x is time spent in this Reincarnation.</p>
					<hr>
					<p><b>Event Feat</b></p>
					<p><b><img src="/realm/Factions/picks/GoblinsBane2017.png" alt="Seraphim Champion" align="middle"> Goblins Bane</b></p>
					<p><b>Requirement</b>: Fight the Goblin Army 100 times.</p>
					<p><b><img src="/realm/Factions/picks/GoblinsCommander2017.png" alt="Seraphim Champion" align="middle"> Goblin's Commander</b></p>
					<p><b>Requirement</b>: Support the Goblin Army 100 times.</p>
					<p><b><img src="/realm/Factions/picks/GoblinsEverywhere!2017.png" alt="Seraphim Champion" align="middle"> Goblins Everywhere!</b></p>
					<p><b>Requirement</b>: Collect at least 10 Goblin Crowns in a single click while affiliated with any 6 different factions.</p>
					<p><b>Note</b>: Prestige Factions count as 1 for Good, Evil, and Neutral alignment (Example Angel/Dwarven is 1, any other Good/Dwarven is not counted)</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/75GoblinCrowns2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 75 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 75 Goblin Crowns for 5 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/300GoblinCrowns2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 300 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 300 Goblin Crowns 15 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/1250GoblinCrowns2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 1250 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 1250 Goblin Crowns for 45 Rubies.</p>
					<p>He will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/3500GoblinCrowns2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 3500 Goblin Crowns</b></p>
					<p>A greedy shady merchant wants to exchange 3500 Goblin Crowns for 100 Rubies.</p>
					<p>These are all the crowns he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">2nd Anniversary - Blood War (Jun 2 - Jun 6, 2017)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/NephilimGlory2017.png" alt="Nephilim Glory" align="middle"> Nephilim Glory</b></p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Holy Symbols and Lava Stones collected.</p>
					<p><b>Note</b>: Persist through Abdication and Reincarnation. Will Disappear at the end of the event.</p>
					<p><b>Event Resources</b></p>
					<p><b><img src="/realm/Factions/picks/HolySymbols2017.png" alt="Holy Symbols" align="middle"> Holy Symbols</b></p>
					<p><b><img src="/realm/Factions/picks/LavaStones2017.png" alt="Lava Stones" align="middle"> Lava Stones</b></p>
					<p>Holy Symbols and Lava Stones will appear on a random location of the game screen and you simply have to click to collect them, then wait for more Resources to appear. Or you can let them grow bigger over time (at a rate of 1 Resource per Minute) if you are idle or offline, up to a maximum size of 480 Holy Symbols or Lava Stones! Be careful though, you can only collect one stack of Holy Symbols or Lava Stones - by doing so, the other will disappear.</p>
					<p><b>Note</b>: You need 2350 of each resource to get all the upgrades.</p>
					<p><b>Note</b>: All upgrades has a 1 time cost but needs selected every Abdication and Reincarnation.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SeraphimAlliance2017.png" alt="Seraphim Alliance" align="middle"> Seraphim Alliance</b></p>
					<p><b>Cost</b>: 200 Holy Symbols
						<p><b>Description</b>: The highest Angelic ranks carry wings blazing with pure light, whose every feather is infused with enough magical power to revive a dead soul or purify the hearts of a thousand sinners. Affiliating with the Seraphim will increase your magical abilities to the extreme, but you can only do so when playing as Good or Neutral.</p>
						<p><b>Seraphim Quest</b></p>
						<p><b>Seraphim Champion 1</b></p>
						<p><b><img src="/realm/Factions/picks/HeavenlyFeathers2017.png" alt="Heavenly Feathers" align="middle"> Heavenly Feathers</b></p>
						<p><b>Cost</b>: 400 Holy Symbols.</p>
						<p><b>Effect</b>: All buildings also increase your mana regeneration.</p>
						<p><b>Formula</b>: 2 * x ^ 0.2</p>
						<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
						<p><b>Seraphim Champion 2</b></p>
						<p><b><img src="/realm/Factions/picks/God'sChamber2017.png" alt="God's Chamber" align="middle"> God's Chamber</b></p>
						<p><b>Cost</b>: 750 Holy Symbols.</p>
						<p><b>Effect</b>: Increase maximum mana by 1 for every 10 buildings you own.</p>
						<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus.</p>
						<p><b>Seraphim Champion 3</b></p>
						<p><b><img src="/realm/Factions/picks/BoonofRadiance2017.png" alt="Boon of Radiance" align="middle"> Boon of Radiance</b></p>
						<p><b>Cost</b>: 1000 Holy Symbols.</p>
						<p><b>Effect</b>: Increase the production of all buildings based on mana regeneration.</p>
						<p><b>Formula</b>: 0.2 * (x * 30) ^ 0.85</p>
						<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus.</p>
						<p><b>Effect</b>: Also completes Seraphim Champion Feat.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/AsmondeanAlliance2017.png" alt="Asmodean Alliance" align="middle"> Asmodean Alliance</b></p>
						<p><b>Cost</b>: 200 Lava Stones</p>
						<p><b>Description</b>: The most cruel of Demons also happen to be the biggest and most deformed abyssal creatures, featuring all kinds of unnatural flesh and bone appendages. Their very existence is a pain to see and hear. Affiliating with the Asmodeans will bolster your assistant army unbelievably, but you can only do so when playing as Evil or Neutral.</p>
						<br/>
						<p><b>Asmodean Quest</b></p>
						<p><b>Asmodean Champion 1</b></p>
						<p><b><img src="/realm/Factions/picks/Broodmothers2017.png" alt="Broodmothers" align="middle"> Broodmothers</b></p>
						<p><b>Cost</b>: 400 Lava Stones</p>
						<p><b>Effect</b>: Gain additional assistants based on time spent affiliated with the Asmodeans.</p>
						<p><b>Formula</b>: 0.25 * x * (x + 1) where x is hours</p>
						<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
						<p><b>Asmodean Champion 2</b></p>
						<p><b><img src="/realm/Factions/picks/AbyssalGaze2017.png" alt="Abyssal Gaze" align="middle"> Abyssal Gaze</b></p>
						<p><b>Cost</b>: 750 Lava Stones</p>
						<p><b>Effect</b>: Increase assistant production based on total time spent as Evil.</p>
						<p><b>Formula</b>: 2 x ^ 0.7 where x is seconds of total evil time</p>
						<p><b>Effect</b>: Adds 1% cumulative bonus to you total Event bonus</p>
						<p><b>Asmodean Champion 3</b></p>
						<p><b><img src="/realm/Factions/picks/Legion'sLimbs2017.png" alt="Legion's Limbs" align="middle"> Legion's Limbs</b></p>
						<p><b>Cost</b>: 1000 Lava Stones</p>
						<p><b>Effect</b>: Increase offline production bonus based on the amount of assistants you own.</p>
						<p><b>Effect</b>: Adds 2% cumulative bonus to you total Event bonus</p>
						<p><b>Effect</b>: Also completes Asmodean Champion Feat</p>
						<hr>
						<p><b>Event Feats</b></p>
						<p><b><img src="/realm/Factions/picks/SeraphimChampion2017.png" alt="Seraphim Champion" align="middle"> Seraphim Champion</b></p>
						<p><b>Requirement</b>: Purchase all Seraphim Upgrades.</p>
						<p><b><img src="/realm/Factions/picks/AsmondeanChampion2017.png" alt="Asmodean Champion" align="middle"> Asmodean Champion</b></p>
						<p><b>Requirement</b>: Purchase all Asmodean Upgrades</p>
						<p><b><img src="/realm/Factions/picks/SacredHoliness2017.png" alt="Sacred Holiness" align="middle"> Sacred Holiness</b></p>
						<p><b>Requirement</b>: Collect a full stack of 480 Holy Symbols while affiliated with the Angels.</p>
						<p><b><img src="/realm/Factions/picks/DarkestHeresy2017.png" alt="Darkest Heresy" align="middle"> Darkest Heresy</b></p>
						<p><b>Requirement</b>: Collect a full stack of 480 Lava Stones while affiliated with the Demons</p>
						<hr>
						<p><b>Shop Item</b></p>
						<p><b><img src="/realm/Factions/picks/40HolySymbolsandLavaStones2017.png" alt="40 Holy Symbols and Lava Stones" align="middle"> 40 Holy Symbols and Lava Stones</b></p>
						<p>A hooded shady merchant wants to sell you 40 Holy Symbols and Lava Stones for 5 Rubies.</p>
						<p>He will offer you a new deal if you accept.</p>
						<p><b><img src="/realm/Factions/picks/150HolySymbolsandLavaStones2017.png" alt="150 Holy Symbols and Lava Stones" align="middle"> 150 Holy Symbols and Lava Stones</b></p>
						<p>A hooded shady merchant wants to sell you 150 Holy Symbols and Lava Stones for 15 Rubies.</p>
						<p>He will offer you a new deal if you accept.</p>
						<p><b><img src="/realm/Factions/picks/650HolySymbolsandLavaStones2017.png" alt="650 Holy Symbols and Lava Stones" align="middle"> 650 Holy Symbols and Lava Stones</b></p>
						<p>A hooded shady merchant wants to sell you 650 Holy Symbols and Lava Stones for 45 Rubies.</p>
						<p>He will offer you a new deal if you accept.</p>
						<p><b><img src="/realm/Factions/picks/1800HolySymbolsandLavaStones2017.png" alt="1800 Holy Symbols and Lava Stones" align="middle"> 1800 Holy Symbols and Lava Stones</b></p>
						<p>A hooded shady merchant wants to sell you 1800 Holy Symbols and Lava Stones for 100 Rubies.</p>
						<p>These are all the resources he could gather.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Apr 12 - Apr 19, 2017)</a></b></p>
				<div class="autohide">
					<p>Starts on Apr 12th, 12.00 PM UTC and will end on Apr 19th, 7.00 PM UTC.</p>
					<p>You get a RNG state for Eggs when the event begins, Which predetermines when you'll get certain eggs.</p>
					<p>Paste your Export in the <a target="_blank" href="http://dox4242.github.io/mri/index.html"><b>Meggnetic Resonance Imager</a></b> to see when you will get your next Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EventResourceEaster2017.png" alt="Blue Omelette" align="middle"> Event Resource</b></p>
					<p>Eggs will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Egg to appear. Or, you can let them grow bigger over time (at a rate of 1 Egg per minute) if you are idle or offline- up to a maximum size of 480 Eggs! Eggs are divided into Common, Rare and Unique Eggs, and each time you collect them you will get random types based on their rarity. Each time you find or buy a Unique Egg, you also gain 1 free Ruby!</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BlueOmeletteEaster2017.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect & Notes</b>: Increase the production of all buildings based on the amount of rare eggs collected.</p>
					<p><b>Formula</b>: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000%.</p>
					<p><b>Note</b>: Using Rare Eggs to buy Unique Eggs will not effect the bonus.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEggEaster2017.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg3000Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUnique100Easter2017.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<p><b>Note</b>: This disappears after you get your last Unique Egg.</p>
					<hr>
					<p><b>Egg Hunter Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggHunter750Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Collect 750 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter2000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Collect 2000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter4000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Collect 4000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Hunter Feat.</p>
					<p><b><img src="/realm/Factions/picks/EggHunter7000Easter2017.png" alt="Egg Hunter" align="middle"> Egg Hunter Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Hunter Quest.</p>
					<hr>
					<p><b>Egg Collection Quest</b></p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<p><b><img src="/realm/Factions/picks/EggCollection1Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 1</b></p>
					<p><b>Unlock / Price</b>: Find 1 Unique Egg.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 2.</p>
					<p><b><img src="/realm/Factions/picks/EggCollection3Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 2</b></p>
					<p><b>Unlock / Price</b>: Find 3 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 1%, which will be added to your cumulative Event bonus, Unlocks Quest 3.</p>
					<p><b><img src="/realm/Factions/picks/EggCollection5Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 3</b></p>
					<p><b>Unlock / Price</b>: Find 5 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 2%, which will be added to your cumulative Event bonus, Unlocks Quest 4.</p>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Quest Series 4</b></p>
					<p><b>Unlock / Price</b>: Find 8 Unique Eggs.</p>
					<p><b>Effect</b>: Completing this Quest step will increase your Event bonus by an additional 3%, which will be added to your cumulative Event bonus, Gives Egg Collection Feat.</p>
					<p><b><img src="/realm/Factions/picks/EggCollection8Easter2017.png" alt="Egg Collection" align="middle"> Egg Collection Feat</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Complete all 4 Egg Collection Quest.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GoldenChickenEaster2017.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect a full stack of 480 eggs while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GreyEaster2017.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p><b><img src="/realm/Factions/picks/UGiantEggEaster2017.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEggEaster2017.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect Pre Ascension</b>: Increase the production of all buildings by 100%</p>
					<p><b>Effect Post Ascension</b>: Increase the production of all buildings by 7.18%.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEggEaster2017.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEggEaster2017.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect Pre Ascension</b>: Increase clicking reward by 100%</p>
					<p><b>Effect Post Ascension</b>: Increase clicking reward by 7.18%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEggEaster2017.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEggEaster2017.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect Pre Ascension</b>: Increase offline production by 500%</p>
					<p><b>Effect Post Ascension</b>: Increase offline production by 19.6%, Gives 1 Ruby.</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEggEaster2017.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations cost multiplier (excavation cost multiplier decrease by 0.025).</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEggEaster2017.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
					<p><b>Effect</b>: Gives 1 Ruby.</p>
					<hr>
					<p><b>Scry</b> Produce 1 random Egg every 5 minutes for 4 hours.</p>
					<hr>
					<p><b>Shop Item</b></p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs150Easter2017.png" alt="Bundle of Eggs" align="middle"> 150 Eggs</b></p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs600Easter2017.png" alt="Bundle of Eggs" align="middle"> 600 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 15 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 600 eggs for 15 rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs2500Easter2017.png" alt="Bundle of Eggs" align="middle"> 2500 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 45 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 2500 eggs for 45 rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/BundleofEggs7000Easter2017.png" alt="Bundle of Eggs" align="middle"> 7000 Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 100 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 7000 eggs for 100 rubies. These are all the eggs he could gather.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2017)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/AprilFools2017.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b>Note</b>: If you got this upgrade in the past it will only show in purchased upgrades.</p>
					<p><b>Note</b>: This upgrade does nothing.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (14 - 18 Feb 2017)</a></b></p>
				<div class="autohide">
					<p><b>Event Theme</b>: <b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="Avalanche" align="middle"> Hearts</b></p>
					<p>Collected online and offline at a base rate of 1 per second and can be increased up to 3/s during the length of the event as follows:</p>
					<p><b><img src="/realm/Factions/picks/CalltoLove2017.png" alt="Avalanche" align="middle"> Call to Love</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>: In addition to the Call to Arms spell effect, increases heart production per second based on the amount of spell casts.</p>
					<p>Base Production 1 heart/sec with no active time for CtL</p>
					<p>2 hearts/sec for 2000 seconds of active time for CtL (33 minutes and 20 seconds)</p>
					<p>3 hearts/sec for 200000 seconds of active time for CtL (2 days 7 hours 33 minutes and 20 seconds)</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017ThemeHeart.png" alt="Avalanche" align="middle"> Hearts Upgrades</b></p>
					<p>Every 100 Heart Upgrades purchased will give 1 free Ruby.</p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Cost</b>: The first Upgrade for each is 100 Hearts. It increases by 100 for each additional Upgrade (ie..100,200,300).</p>
					<p><b>Effect</b></p>
					<p><b>Assistants</b>: Increases by 1 Assistant with each Upgrade.</p>
					<p><b>Mana Regen</b>: Increases by 0.5 with each Upgrade.</p>
					<p><b>Max Mana</b>: Increases by 25 with each Upgrade.</p>
					<p><b>Gem Bonus</b>: Increases by 0.50 with each Upgrade.</p>
					<p><b>Exchange Bonus</b>: Increases by 1.50 with each Upgrade.</p>
					<p><b>Note</b>: All Heart Upgrades will be like Ruby Upgrades for the duration of Event.</p>
					<hr>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="Avalanche" align="middle"> Feel the Love 1</b></p>
					<p><b>Cost</b>: 50 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="Avalanche" align="middle"> Feel the Love 2</b></p>
					<p><b>Cost</b>: 125 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 1%.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="Avalanche" align="middle"> Feel the Love 3</b></p>
					<p><b>Cost</b>: 250 Heart Upgrades</p>
					<p><b>Effect</b>: Increases total Event bonus by 2%.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="Avalanche" align="middle"> Call to Love</b></p>
					<p><b>Cost</b>: 250 Heart Upgrades</p>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage2017.png" alt="Avalanche" align="middle"> I Love You in Every Language</b></p>
					<p><b>Cost</b>: Cast Call to Love at least once with 6 different Factions.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest1.png" alt="Avalanche" align="middle"> 15000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 15000 Hearts for 5 Rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest2.png" alt="Avalanche" align="middle"> 50000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 50000 Hearts for 55 Rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest3.png" alt="Avalanche" align="middle"> 175000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 175000 Hearts for 45 Rubies. It will offer you a new deal if you accept.</p>
					<p><b><img src="/realm/Factions/picks/Valentine2017Quest4.png" alt="Avalanche" align="middle"> 400000 Hearts</b></p>
					<p><b>Effect</b>: A Love Machine will produce 400000 Hearts for 100 Rubies. It will run out of power after you use this last time.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Valentine2017Scry.png" alt="Avalanche" align="middle"> Scrying</b></p>
					<p><b>Effect</b>: Produces 1 heart every 5 seconds for 4 hours.</p>
					<hr>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">2016 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 20, 2016 - Jan 4, 2017</a></b></p>
				<div class="autohide">
					<p>The Christmas Event will be starting on <b>Dec 20th 2016, 1:01 PM UTC</b> and will end on <b>Jan 4th 2017, 7:59 PM UTC</b>.</p>
					<p>It's Christmas time! The subjects of your Realm are sensing the aura of power in the air, inspiring them in their daily life and making them feel proud of your righteous leadership. Encouraged by your unmatched abilities as a ruler, they believed it would be appropriate to offer you a daily tribute for the duration of the Holidays.</p>
					<p><b>Event Theme</b>: Snowballs. They will accumulate at a rate of 1 per minute, up to a maximum of 480 (8 hours). Collecting Snowballs will allow you to complete quests and increase your Avalanche upgrade bonus.</p>
					<p>Every day, you will also receive a Christmas Present (image) containing Snowballs or Rubies. Presents are required to complete quests and can only be retrieved once per day by going online.</p>
					<p><b>Note</b>: The daily Christmas presents contains 1 Ruby and 200 or 500 Snowballs</p>
					<p><b>Event Bonus</b>: Total cumulative and permanent quest bonus at the end of the Event: 14</p>
					<p><b>Note</b>: If you didn't unlock all the Christmas feats last year, you have a chance to do so with this one! If you already did, you will be able to gain additional permanent production bonuses from completing all the quests again, and benefit from the massive bonus from the Avalanche upgrade once again.</p>
					<p>You can find all this information in a guide by pressing the "?" button in the Event Panel.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Avalanche2016.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Type</b>: Upgrade</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected.</p>
					<p><b>Formula</b>: min(0 + 0.8 * (s / 35) + -0.006 * (s / 35)^2 + 0.00004 * (s / 35)^3, 100000), where s is amount of collected snowballs.</p>
					<p><b>Note</b>: Persists through Abdications and Reincarnations.</p>
					<p><b>Note</b>: Upgrade will disappear at the end of the current event.</p>
					<p><b>Quest</b></p>
					<p><b><img src="/realm/Factions/picks/Snowpile2016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Collect 1000, 4500, 10000 and 21000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<p><b><img src="/realm/Factions/picks/Snowpile12016.png" alt="Snowpile 1" align="middle"> Snowpile 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Collect 1000 Snowballs</p>
					<p><b><img src="/realm/Factions/picks/Snowpile22016.png" alt="Snowpile 2" align="middle"> Snowpile 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Collect 4500 Snowballs dropped from 5000 Snowballs</p>
					<p><b><img src="/realm/Factions/picks/Snowpile32016.png" alt="Snowpile 3" align="middle"> Snowpile 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Collect 10000 Snowballs dropped from 12000 Snowballs</p>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile 4" align="middle"> Snowpile 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Collect 21000 Snowballs dropped from 25000 Snowballs</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Quest series</p>
					<p><b>Requirement</b>: Find 1, 4, 8 and 13 Presents.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector12016.png" alt="Gift Collector 1" align="middle"> Gift Collector 1</b></p>
					<p><b>Type</b>: Quest series 1 of 4</p>
					<p><b>Requirement</b>: Open 1 present</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector22016.png" alt="Gift Collector 2" align="middle"> Gift Collector 2</b></p>
					<p><b>Type</b>: Quest series 2 of 4</p>
					<p><b>Requirement</b>: Open 4 presents</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector32016.png" alt="Gift Collector 3" align="middle"> Gift Collector 3</b></p>
					<p><b>Type</b>: Quest series 3 of 4</p>
					<p><b>Requirement</b>: Open 8 presents</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="Gift Collector 4" align="middle"> Gift Collector 4</b></p>
					<p><b>Type</b>: Quest series 4 of 4</p>
					<p><b>Requirement</b>: Open 13 presents</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/SantasHelpers2016.png" alt="SantasHelpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Play Elves and get 50 assistants</p>
					<p><b><img src="/realm/Factions/picks/Unholidays2016.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Ally with the Undead</p>
					<p><b><img src="/realm/Factions/picks/Snowpile42016.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Complete all the Snowpile quests</p>
					<p><b><img src="/realm/Factions/picks/GiftCollector2016.png" alt="GiftCollector" align="middle"> Gift Collector</b></p>
					<p><b>Type</b>: Feat</p>
					<p><b>Requirement</b>: Open 13 Presents</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/500Snowballs2016Shop.png" alt="500 Snowballs" align="middle"> 500 Snowballs</b></p>
					<p><b>500 Snowballs</b>: An adventurer wants to sell you 500 Snowballs for 5 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b><img src="/realm/Factions/picks/1750Snowballs2016Shop.png" alt="1750 Snowballs" align="middle"> 1750 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 1750 Snowballs for 15 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b><img src="/realm/Factions/picks/6000Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 6000 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 6000 Snowballs for 45 Rubies. He will offer you a new deal if you accept.</p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b><img src="/realm/Factions/picks/13500Snowballs2016Shop.png" alt="6000 Snowballs" align="middle"> 13500 Snowballs</b></p>
					<p><b>1750 Snowballs</b>: An adventurer wants to sell you 13500 Snowballs for 100 Rubies. This is all the snow he could gather.</p>
					<p><b>Cost</b>: 100 Rubies</p>
					<hr>
					<p><b>Scrying</b></p>
					<p><b>Effect</b>: Produce 1 snowball every 5 minute for 4 hours.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Thanksgiving (Nov 24 - Nov 26, 2016)</a></b></p>
				<div class="autohide">
					<p>Thanksgiving & Black Friday Sale Guide.</p>
					<p>The main feature of the Thanksgiving & Black Friday Sale is a 50% discount on Gifts of the Heroes in the shop, but you will also get a new feat and a unique upgrade for the duration of the event. Look for it in your Upgrades panel!.</p>
					<p>Remember that all Thanksgiving upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements</p>
					<p><b>Note</b>: If you don't get the upgrade go to settings and un x (Dont Group Upgrades by Category)</p>
					<p><b><img src="/realm/Factions/picks/Thanksgiving.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
					<p><b>Note</b>: This is a repeat of the 1st Realm Grinder Event.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Halloween (Oct 28 - Nov 04, 2016)</a></b></p>
				<div class="autohide">
					<p>Hello Everyone!</p>
					<p>Shadows are gathering, and monsters are starting to lurk in the dark corners of the Realmsâ€¦ Choose your own, feed and grow it to its maximum potential!</p>
					<p>The Halloween event will be starting on <b>Oct 28th 2016, 12:01 PM UTC and will end on Nov 04th 2016, 7:59 PM UTC</b>.</p>
					<p>This event will feature daily presents (as we did for the last Christmas), inside which you will found a random monster, up to a maximum of three. Once you have found a monster, you will be able to feed it resources (see below) to make it grow, unlocking perks and bonuses in the process.</p>
					<p>There will be three new resources for the event: Blood, Ectoplasm and Bones. They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 480 units (8 hours). You can only collect one type of resource: by doing so, the others will disappear.</p>
					<p>Each resource will be used to feed a single monster, which will gain levels as it grows. At levels 1, 10, 25 and 50 each monster will grant you new perks, including new unique spells and upgrades. You will be able to gain advantage of one single monster at a time, but they can be toggled on and off on the fly in the Event panel.</p>
					<p>As usual, there will be Quests and Feats to unlock: you will be able to find every information you need in the Events panel in game!</p>
					<p>Remember that all Halloween upgrades and their bonuses will disappear after the event is over, with the exception of Quest bonuses and Feat achievements.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/MainPumpkin.png" alt="Halloween" align="middle"> Halloween</b></p>
					<hr>
					<p>You will get a Pumpkin Smasher once a day (1:01 UTC Time).</p>
					<p>You will also get some resources and a gift (Ruby?) with each Pumpkin Smasher.</p>
					<p>The first Pumpkin Smasher should give you 1 of 3 Monster (Skeleton, Ghost and Vampire).</p>
					<p>The first Pumpkin Smasher also gives <b><img src="/realm/Factions/picks/CrucibleOfDarkness.png" alt="CrucibleOfDarkness" align="middle"> Crucible Of Darkness</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings based on Halloween Resources collected. Increases as you gain new monsters.</p>
					<p><b>Formula</b>: Formula: 1 + 0.0035 * ((Blood + Ectoplasm + Bones) / 3) * ((1 + min(0 + 1.6 * (Blood/25) - 0.002 * (Blood/25)^2 + 0.000024 * (Blood/25)^3), 12500) * (same for Ectoplasm and Bones))^0.4</p>
					<p>The next 2 Pumpkins should give you 1 of 2 remaining Monster (Skeleton, Ghost and Vampire).</p>
					<hr>
					<p>Collect all 4 Quest to complete a Feat</p>
					<p>Collect 6 Pumpkin Smashers to complete a Feat</p>
					<p><b>Quests</b></p>
					<p><b>Pumpkin Smasher</b></p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher1.png" alt="Halloween" align="middle"> Pumpkin Smasher 1</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will give you 1 of 3 Monsters, also gives resources and a gift</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus.</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher2.png" alt="Halloween" align="middle"> Pumpkin Smasher 2</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus.</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher3.png" alt="Halloween" align="middle"> Pumpkin Smasher 3</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus.</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher 4</b></p>
					<p><b>Requirement</b>: Log in once a day to collect the pumpkin.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus.</p>
					<hr>
					<p>Collect all 3 Quest to complete a Feat</p>
					<p><b>Monster Breeder</b></p>
					<p><b>Kind</b>: 3 Quest Series</p>
					<p><b>Requirement</b>: Grow all monsters to level 10, 25, 50.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder1.png" alt="Halloween" align="middle"> Monster Breeder 1</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 10.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 1% (Total), which will be added to your Cumulative Event Bonus.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder2.png" alt="Halloween" align="middle"> Monster Breeder 2</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 25.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 2% (Total), which will be added to your Cumulative Event Bonus.</p>
					<p><b><img src="/realm/Factions/picks/MonsterBreeder3.png" alt="Halloween" align="middle"> Monster Breeder 3</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this quest step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus.</p>
					<hr>
					<p><b>Feats</b></p>
					<p><b><img src="/realm/Factions/picks/MonsterBreederFeat.png" alt="Halloween" align="middle"> Monster Breeder</b></p>
					<p><b>Requirement</b>: Grow all monsters to level 50.</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 4% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/PumpkinSmasher4.png" alt="Halloween" align="middle"> Pumpkin Smasher</b></p>
					<p><b>Requirement</b>: Smash 6 Halloween Pumpkins</p>
					<p><b>Effect</b>: Completing this Feat step will increase your Event Bonus by 7% (Total), which will be added to your Cumulative Event Bonus</p>
					<p><b><img src="/realm/Factions/picks/Spooky.png" alt="Halloween" align="middle"> Spooky</b></p>
					<p><b>Requirement</b>: Collect a full stack of 480 Ectoplasm while <b>USING</b> Ghost monster pet.</p>
					<p><b><img src="/realm/Factions/picks/BloodThirsty.png" alt="Halloween" align="middle"> Blood Thirsty</b></p>
					<p><b>Requirement</b>: Collect a full stack of 480 Blood while <b>USING</b> Vampire monster pet.</p>
					<p><b><img src="/realm/Factions/picks/BonePicker.png" alt="Halloween" align="middle"> Bone Picker</b></p>
					<p><b>Requirement</b>: Collect a full stack of 480 Bones while <b>USING</b> Skeleton monster pet.</p>
					<hr>
					<p><b>Shop</b></p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop1.png" alt="Halloween" align="middle"> Shop 1</b></p>
					<p><b>Cost</b>: 5 Rubies</p>
					<p><b>Effect</b>: Gives you 50 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop2.png" alt="Halloween" align="middle"> Shop 2</b></p>
					<p><b>Cost</b>: 15 Rubies</p>
					<p><b>Effect</b>: Gives you 225 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop3.png" alt="Halloween" align="middle"> Shop 3</b></p>
					<p><b>Cost</b>: 45 Rubies</p>
					<p><b>Effect</b>: Gives you 875 Blood, Ectoplasm and Bones and offer you a new deal.</p>
					<p><b><img src="/realm/Factions/picks/HalloweenShop4.png" alt="Halloween" align="middle"> Shop 4</b></p>
					<p><b>Cost</b>: 100 Rubies</p>
					<p><b>Effect</b>: Gives you 2250 Blood, Ectoplasm and Bones</p>
					<hr>
					<p><b>Resources</b></p>
					<p><b><img src="/realm/Factions/picks/Blood.png" alt="Blood" align="middle"> Blood</b>
						<b><img src="/realm/Factions/picks/Ectoplasm.png" alt="Ectoplasm" align="middle"> Ectoplasm</b>
						<b><img src="/realm/Factions/picks/Bones.png" alt="Vampire" align="middle"> Bones</b></p>
					<p>They will appear in a random location of the game screen at a rate of 1 per minute, stacking up to 480 units (8 hours).</p>
					<p>Scrying will add 1 of each to your total (not your stack) every 15 minutes for 4 hours.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Vampire.png" alt="Vampire" align="middle"> Vampire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<p><b><img src="/realm/Factions/picks/VanpireSire.png" alt="VampireSire" align="middle"> Vampire Sire</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Blood</p>
					<p><b>Effect</b>: Gives the spell (Shadow Embrace)</p>
					<p><b><img src="/realm/Factions/picks/VampireLord.png" alt="VampireLord" align="middle"> Vampire Lord</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Blood</p>
					<p><b>Effect</b>: Gain all Bloodline effects of your alignment (comment: good, evil, neutral) at once.</p>
					<p><b><img src="/realm/Factions/picks/VampireKing.png" alt="VampireKing" align="middle"> Vampire King</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Blood</p>
					<p><b>Effect</b>: Set the cost of faction spells to 1 mana.</p>
					<p><b><img src="/realm/Factions/picks/ShadowEmbrace.png" alt="ShadowEmbrace" align="middle"> Shadow Embrace</b></p>
					<p><b>Requirement</b>: level 10 Vampire Monster</p>
					<p><b>Effect</b>: Increase the size of your assistant army based on the amount of Reincarnations you made for 20 seconds. Increases progressively as you continue casting this spell.</p>
					<p><b>Formula</b>: +((R + 1) * x ^ 0.5), where x is amount of Shadow Embrace casts in this game and R is the amount of Reincarnation you made.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Ghost.png" alt="Ghost" align="middle"> Ghost</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<p><b><img src="/realm/Factions/picks/Banshee.png" alt="Banshee" align="middle"> Banshee</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Ectoplasm</p>
					<p><b>Effect</b>: Gives the spell (Wail of the Banshee)</p>
					<p><b><img src="/realm/Factions/picks/Wrath.png" alt="Wraith" align="middle"> Wraith</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks generate 0.1% of your maximum mana.</p>
					<p><b><img src="/realm/Factions/picks/Spectre.png" alt="Spectre" align="middle"> Spectre</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Ectoplasm</p>
					<p><b>Effect</b>: All productive clicks benefit from a 10 times greater Faction Coin find chance.</p>
					<p><b><img src="/realm/Factions/picks/WailoftheBanshee.png" alt="WailoftheBanshee" align="middle"> Wail of the Banshee</b></p>
					<p><b>Requirement</b>: Level 10 Ghost Monster</p>
					<p><b>Effect</b>: Increase the production of all buildings based on mana produced in this game and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: (0.2 * (R + 1) * x ^ 0.45)%, where R is reincarnation count and x is mana produced this game.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Skeleton.png" alt="Skeleton" align="middle"> Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 1</p>
					<p><b>Unlock / Price</b>: Free from daily pumpkin present</p>
					<p><b><img src="/realm/Factions/picks/BigSkeleton.png" alt="" align="middle"> Big Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 10</p>
					<p><b>Unlock / Price</b>: 198 Bones</p>
					<p><b>Effect</b>: Gives the spell (Cannibalize)</p>
					<p><b><img src="/realm/Factions/picks/HugeSkeleton.png" alt="" align="middle"> Huge Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 25</p>
					<p><b>Unlock / Price</b>: 660 Bones</p>
					<p><b>Effect</b>: Increase Offline production bonus based on time spent with the faction you are affiliated with.</p>
					<p><b>Formula</b>: (x ^ 0.7)%, where x is the time spent with the faction you are affiliated with.</p>
					<p><b><img src="/realm/Factions/picks/GiantSkeleton.png" alt="" align="middle"> Giant Skeleton</b></p>
					<p><b>Kind</b>: Monster</p>
					<p><b>Level</b>: 50</p>
					<p><b>Unlock / Price</b>: 2200 Bones</p>
					<p><b>Effect</b>: Double your offline productions of clicks, mana, spells cast and spell activity time.</p>
					<p><b><img src="/realm/Factions/picks/Cannibalize.png" alt="Cannibalize" align="middle"> Cannibalize</b></p>
					<p><b>Requirement</b>: Level 10 Skeleton Monster</p>
					<p><b>Effect</b>: Increase Faction Coin find chance based on the total amount of Bones collected and the amount of Reincarnations you made for 20 seconds.</p>
					<p><b>Formula</b>: +(ceil(0.75 * (R + 1) * x ^ 0.75))%, where R is Reincarnation count and x is bones collected.</p>
					<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Summer Festival (Aug 30 - Sept 6, 2016)</a></b></p>
				<div class="autohide">
					<p>The event will feature two new mini-factions, the <b>Summeraans</b> and the <b>Winterly</b>, which will last for the duration of the event, they will stack upon any existing faction and will provide <b>3 new upgrades and a new spell</b> to boost your production!</p>
					<p>There will be two new resources for the event: <b>Flame</b> and <b>Frost Orbs</b>. They will appear in a random location of the game screen at a rate of 1 per minute, you can stack them for 8 hours, up to 480 orbs.</p>
					<p>You can only collect one type of orb: by doing so, the other will disappear.</p>
					<p><b>Event Resource</b></p>
					<p><img src="/realm/Factions/picks/FrostOrbs.png" alt="Frost Orbs" align="middle"> <b>Frost Orbs</b> used to purchase and empower Winterly upgrades.</p>
					<p><img src="/realm/Factions/picks/FlameOrbs.png" alt="Flame Orbs" align="middle"> <b>Flame Orbs</b> used to purchase and empower Summeraan upgrades.</p>
					<p>As with any faction in Realm Grinder, you can choose to affiliate with only one of them per abdication - upgrades will remain free if you purchased them once though.</p>
					<p>Collected orbs will persist through soft resets and remain until the end of the event.
						<p><b>Flame Orbs</b> can be used to buy upgrades from the <b>Summeraan</b> faction, whereas <b>Frost Orbs</b> can be used to buy upgrades from the <b>Winterly</b> faction.</p>
						<p><b><img src="/realm/Factions/picks/Antipodes.png" alt="Antipodes" align="middle"> Antipodes</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: Free</p>
						<p><b>Effect</b>: Increase the production of all buildings based on the total amount of Orbs collected in this event. This upgrade persists through Abdications and Reincarnations.</p>
						<p><b>Formula</b>: min(100000, (x / 27) - (x^2 / 36450) + (x^3 / 98415000)) %, where x is the number of Orbs collected in total.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/Hailstorm.PNG" alt="Hailstorm" align="middle"> Hailstorm</b></p>
						<p><b>Kind</b>: Spell</p>
						<p><b>Unlock / Price</b>: Mana Cost:1000 (Unlocked when aligned with Winterly)</p>
						<p><b>Effect</b>:Increase the production of all buildings based on Hailstorm activity time for 2m. Bonus provided increases progressively over the duration of the spell.</p>
						<p><b>Formula</b>: 0.1 * x^0.6 * y^1.1 %, where x is the Hailstorm activity time this game (in seconds), and y is the duration of the current Hailstorm (in seconds).</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Alliance" align="middle"> Winterly Alliance</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 400 Frost Orbs</p>
						<p><b>Effect</b>: Unlocks Hailstorm, and allows purchasing Winterly upgrades.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Glaciality" align="middle"> Glaciality</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 800 Frost Orbs</p>
						<p><b>Effect</b>: Increase the production of all buildings based on time spent affiliated with the Winterly.</p>
						<p><b>Formula</b>: 20 * x ^ 0.75%, where x is time spent aligned with the Winterly in hours.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Permafrost" align="middle"> Permafrost</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 1300 Frost Orbs</p>
						<p><b>Effect</b>: Increase the production of assistants based on the total amount of Frost Orbs collected in this event.</p>
						<p><b>Formula</b>: x^1.03 %, where x is the number of Frost Orbs collected in total.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Cold Blood" align="middle"> Cold Blood</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 2000 Frost Orbs</p>
						<p><b>Effect</b>: Spell durations are increased by 100%.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/Heatwave.PNG" alt="Heatwave" align="middle"> Heatwave</b></p>
						<p><b>Kind</b>: Spell</p>
						<p><b>Unlock / Price</b>: Mana Cost:300 (Unlocked when aligned with Summeraan)</p>
						<p><b>Effect</b>:Increase the production of all buildings based on spells cast in this game for 12s. Also grants faction coins based on the amount of Flame Orbs collected in this event.</p>
						<p><b>Formula</b>: 5 * x^0.85%, where x is the number of spells cast this game, and x * y^1.1, where x is your faction coin chance, and y is the number of Flame Orbs collected in this event.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Alliance" align="middle"> Summeraan Alliance</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 400 Flame Orbs</p>
						<p><b>Effect</b>: Unlocks Heatwave, and allows purchasing Summeraan upgrades.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Sun Beams" align="middle"> Sun Beams</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 800 Flame Orbs</p>
						<p><b>Effect</b>: Whenever you collect Flame Orbs floating on your realm, the production of all buildings is increased based on the amount of Orbs collected with this click for 10 seconds.</p>
						<p><b>Formula</b>: 25 * x%, where x is the number of Flame Orbs collected with the last click.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Eruption" align="middle"> Eruption</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 1300 Flame Orbs</p>
						<p><b>Effect</b>: Gain additional assistants based on the clicks made in this game.</p>
						<p><b>Formula</b>: 2 * log (1 + x^2), where x is the number of clicks made in this game.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Burning Rage" align="middle"> Burning Rage</b></p>
						<p><b>Kind</b>: Upgrade</p>
						<p><b>Unlock / Price</b>: 2000 Flame Orbs</p>
						<p><b>Effect</b>: Decrease the cost of all spells by 50%.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival4.PNG" alt="Winterly Champion 1" align="middle"> <img src="/realm/Factions/picks/SummerFestival5.PNG" alt="Winterly Champion 2" axlign="middle"> <img src="/realm/Factions/picks/SummerFestival6.PNG" alt="Winterly Champion 1" axlign="middle"> Winterly Champion</b></p>
						<p><b>Kind</b>: Quest</p>
						<p><b>Unlock</b>: Purchase 1/2/3 Winterly upgrades.</p>
						<p><b>Effect</b>: +1%/+2%/+4% Event bonus (overall).</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummerFestival1.PNG" alt="Summeraan Champion 1" align="middle"> <img src="/realm/Factions/picks/SummerFestival2.PNG" alt="Summeraan Champion 2" axlign="middle"> <img src="/realm/Factions/picks/SummerFestival3.PNG" alt="Summeraan Champion 1" axlign="middle"> Summeraan Champion</b></p>
						<p><b>Kind</b>: Quest</p>
						<p><b>Unlock</b>: Purchase 1/2/3 Summeraan upgrades.</p>
						<p><b>Effect</b>: +1%/+2%/+4% Event bonus (overall).</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/WinterlyAlliance.png" alt="Winterly Champion" align="middle"> Winterly Champion</b></p>
						<p><b>Kind</b>: Feat</p>
						<p><b>Unlock</b>: Purchase all Winterly upgrades.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/SummeraanAlliance.png" alt="Summeraan Champion" align="middle"> Summeraan Champion</b></p>
						<p><b>Kind</b>: Feat</p>
						<p><b>Unlock</b>: Purchase all Summeraan upgrades.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/WarmUp.png" alt="Warm Up" align="middle"> Warm Up</b></p>
						<p><b>Kind</b>: Feat</p>
						<p><b>Unlock</b>: Collect a full stack of 480 Flame Orbs while affiliated with the Winterly.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/ChillOut.png" alt="Chill Out" align="middle"> Chill Out</b></p>
						<p><b>Kind</b>: Feat</p>
						<p><b>Unlock</b>: Collect a full stack of 480 Frost Orbs while affiliated with the Summeraans.</p>
						<hr>
						<p><b><img src="/realm/Factions/picks/OrbShopItem.png" alt="Shop Item" align="middle"> Shop Item</b></p>
						<p><b>Cost</b>: 5 Rubies</p>
						<p><b>Kind</b>: Shop Item</p>
						<p><b>Description</b>: A spring wizard wants to sell you 75 Frost and Flame Orbs for 5 Rubies. He will offer you a new deal if you accept. (Offer is increased at each purchase)</p>
						<hr>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">1st Anniversary (May 19 - May 20, 2016)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/1stAnniversary.png" align="middle"> 1st Anniversary</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Cost</b>: 1 Coin</p>
					<p><b>Effect</b>: Increase the production of all buildings based on all the time you spent playing Realm Grinder.</p>
					<p><b>Formula</b>: 0.003 * R * ((T + T' / 2) * (R / 2.5))0.7%, where R is your Reincarnation count, T is your total time spent across all Reincarnation, and T' is your Playtime (Total) stat.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">April Fools (Apr 1, 2016)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/Aprilfools1.png" align="middle"> Enhanced Production</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect & Notes</b>: Increase the production of all buildings by 1e6%.</p>
					<p><b><img src="/realm/Factions/picks/Aprilfools2.png" align="middle"> Enhanced Production Activator</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect & Notes</b>: Activates the upgrade you just bought.</p>
					<p><b><img src="/realm/Factions/picks/Aprilfools3.png" align="middle"> Enhanced Production Fix</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect & Notes</b>: Fixes a bug in the Activator that prevented the upgrade from working correctly</p>
					<p><b><img src="/realm/Factions/picks/Aprilfools4.png" align="middle"> Enhanced Production Complaint</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect & Notes</b>: Complain about about the upgrade not working yet, even after the fix.</p>
					<p><b><img src="/realm/Factions/picks/Aprilfools5.png" align="middle"> Enhanced Production Report</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect & Notes</b>: Report the bug to the Powers That Be and hope it gets fixed before the event is over.</p>
					<p><b><img src="/realm/Factions/picks/Aprilfools6.png" align="middle"> Enhanced Production Fooled</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1 Coin</p>
					<p><b>Effect & Notes</b>: The Enhanced Production timer is over! We hope you enjoyed your huge production bonus and hopefully didn't get too greedy. Happy April Fools' Day!</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Easter (Mar 25 - Mar 31, 2016)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/BlueOmelette.png" alt="Blue Omelette" align="middle"> Blue Omelette</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 200 Rare Eggs</p>
					<p><b>Effect & Notes</b>: Increase the production of all buildings based on the amount of rare eggs collected. (Growth: (3 * (Rare eggs) - 0.03 * (Rare eggs)^2 + 0.0002 * (Rare eggs)^3 ) % and it is limited by 100000% (<b><a target="_blank" href="http://www.kongregate.com/forums/8945-realm-grinder/topics/613177-spoiler-unique-easter-eggs-bonuses">source</a></b> by daemonik92))</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyRareEgg.png" alt="Buy Rare Egg" align="middle"> Buy Rare Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 125 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 125 Common Eggs for 1 Rare Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueEgg.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 3000 Common Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 3000 Common Eggs for 1 Unique Egg.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BuyUniqueFromRare.png" alt="Buy Unique Egg" align="middle"> Buy Unique Egg</b></p>
					<p><b>Kind</b>: Converter</p>
					<p><b>Unlock / Price</b>: 100 Rare Eggs</p>
					<p><b>Effect & Notes</b>: Exchange 100 Rare Eggs for 1 Unique Egg</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EggHunter.png" alt="Egg Hunter" align="middle"> Egg Hunter</b></p>
					<p><b>Kind</b>: Quest Series</p>
					<p><b>Unlock / Price</b>: 4 series: Collect 750, 2000, 4000, 7000 Common eggs</p>
					<p><b>Effect</b>: Unlocks Egg Hunter Feat</p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EggCollection.png" alt="Egg Collection" align="middle"> Egg Collection</b></p>
					<p><b>Kind</b>: Quest Series</p>
					<p><b>Unlock / Price</b>: 4 series: Find 1, 3, 5 and 8 Unique eggs</p>
					<p><b>Effect</b>: Unlocks Egg Collection Feat</p>
					<p><b>Note</b>: Each Quest step will increase your Event bonus, which will be added to your Cumulative Event bonus. (Total: 7%)</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EggHunterFeat.png" alt="Egg Hunter" align="middle"> Egg Hunter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect 7000 Common Eggs.</p>
					<p><b>Note</b>: Buying Eggs will not influence this total.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/EggCollectionFeat.png" alt="Egg Collection" align="middle"> Egg Collection</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect 8 Unique Eggs.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GoldenChicken.png" alt="Golden Chicken" align="middle"> Golden Chicken</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Collect a full stack of 480 eggs while playing as Goblin or Droblin (1m per egg = 8h)</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GreyEaster.png" alt="Grey Easter" align="middle"> Grey Easter</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Find at least 1 Rare Egg while playing with no faction.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/BundleofEggs.png" alt="Bundle of Eggs" align="middle"> Bundle of Eggs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 5 Rubies</p>
					<p><b>Note</b>: The Easter Bunny wants to sell you 150 eggs for 5 rubies. He will offer you a deal if you accept.</p>
					<hr>
					<p><b>Unique Egg Upgrades</b>: You can find up to 8 unique eggs: One of each kind, and you cannot have more, nor 2 of the same kind. Unique eggs are found by 'luck' and the upgrades are free. When a unique egg is found, its upgrade will instantly appear in the upgrade tab, and will count towards the 'bought upgrades' stats.</p>
					<p>In addition, when you buy or find an Unique Egg, you will also gain a free Ruby!</p>
					<p><b><img src="/realm/Factions/picks/UGiantEgg.png" alt="Giant Egg" align="middle"> Giant Egg</b></p>
					<p><b>Effect</b>: Increase maximum mana by 500</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UGoldenEgg.png" alt="Golden Egg" align="middle"> Golden Egg</b></p>
					<p><b>Effect</b>: Increase the production of all buildings by 100%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UArcaneEgg.png" alt="Arcane Egg" align="middle"> Arcane Egg</b></p>
					<p><b>Effect</b>: Increase mana regeneration by 10%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/URadiantEgg.png" alt="Radiant Egg" align="middle"> Radiant Egg</b></p>
					<p><b>Effect</b>: Increase clicking reward by 100%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UWoodenEgg.png" alt="Wooden Egg" align="middle"> Wooden Egg</b></p>
					<p><b>Effect</b>: Increase chance to find Faction Coins by 25%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UDarkEgg.png" alt="Dark Egg" align="middle"> Dark Egg</b></p>
					<p><b>Effect</b>: Increase offline production by 500%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UAncientEgg.png" alt="Ancient Egg" align="middle"> Ancient Egg</b></p>
					<p><b>Effect</b>: Reduce excavations cost multiplier (excavation cost multiplier decrease by 0.025).</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/UCrystalEgg.png" alt="Crystal Egg" align="middle"> Crystal Egg</b></p>
					<p><b>Effect</b>: Increase production bonus from gems by an additional 8%</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Valentine (Feb 12 - Feb 16, 2016)</a></b></p>
				<div class="autohide">
					<p><b>Event Theme</b>: Hearts. Collected passively online and offline at a base rate of 1 per second. Each can be increased up to 5/s during the length of the event as follows:</p>
					<p>Online Hearts per second will go up by 1 every time you cast an amount of Call to Love equal to one less than a power of 10. Total online production is 1 + floor(log10(1 + x)), where x is number of CtL casts over all reincarnations. Note that the first cast of each abdication does not count towards this.</p>
					<p>Upgrades that increase offline hearts per second by 1 will be unlocked when your offline time over all reincarnations during the event is 200, 2000, 20000, and 200000 seconds.</p>
					<p><b><img src="/realm/Factions/picks/VDayCalltoLove.png" alt="Call to Love" align="middle"> Call to Love</b></p>
					<p><b>Kind</b>: Spell</p>
					<p><b>Unlock / Price</b>: Mana Cost:200 (Replaces Call to Arms)</p>
					<p><b>Effect</b>:In addition to the Call to Arms spell effect, progressively increases heart production per second based on the amount of spell casts. Does not work offline.</p>
					<p><b>Formula</b>: 1 + floor(log10(1 + x)), where x is the number of CtL casts.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/DistantLove.png" alt="Distant Love" align="middle"> Distant Love</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: Stay offline for specific amount of times</p>
					<p><b>Note</b>: 1st Upgrade: 5 min Price: 10 coins</p>
					<p><b>Effect</b>: Increase your Hearts per second rate while offline by +1.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/HeartUpgrades.png" alt="Heart Upgrades" align="middle"> Heart Upgrades</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: +50 Hearts per upgrade</p>
					<p><b>Effect</b>: Same system as for Rubies, Heart upgrades enable to boost assistants, mana regeneration, max mana, production bonus from gems and production bonus from royal exchanges.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/FeeltheLove.png" alt="Feel the Love" align="middle"> Feel the Love</b></p>
					<p><b>Kind</b>: Quest</p>
					<p><b>Unlock / Price</b>: 3 Series: Purchase 100, 250, 500 Heart Upgrades.</p>
					<p><b>Effect</b>: +1%, +2%, +4% Event bonus (added to your past cumulated event bonuses)</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/ILoveYouinEveryLanguage.png" alt="I Love You in Every Language" align="middle"> I Love You in Every Language</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Cast Call to Love at least once with 6 different factions.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/LoveMachine.png" alt="Love Machine" align="middle"> Love Machine</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 110000 hearts for 15 rubies, 240000 for 30, 520000 for 50, and 1400000 for 80</p>
					<p><b>Effect</b>: Produces increasing bundles of Hearts.</p>
				</div>
			</div>
		</div>
		<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">2015 Events</a></b></p>
		<div class="category autohide">
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Christmas (Dec 21, 2015 - Jan 5, 2016)</a></b></p>
				<div class="autohide">
					<p><b>Event Theme</b>: Snowballs (image). They will appear on a random location of the game screen and you simply have to click to collect them, then wait for another Snowball to appear. Or, you can let them grow bigger over time if you are idle or offline - up to a maximum size of 360 Snowballs! (later updated to 1000)</p>
					<p>During the Event, Players will also receive a daily Christmas Present. (Requires to go online to be retrieved.)</p>
					<p><b><img src="/realm/Factions/picks/Avalanche.png" alt="Avalanche" align="middle"> Avalanche</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 5000 Snowballs</p>
					<p><b>Effect</b>: Increase the production of all buildings based on the amount of snowballs collected. Persists through Reincarnations.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Snowman.png" alt="Snowman Assistant" align="middle"> Snowman Assistant</b></p>
					<p><b>Kind</b>: Upgrade</p>
					<p><b>Unlock / Price</b>: 1000 Snowballs</p>
					<p><b>Effect</b>: Automatically produces and collects 1 Snowball every 3 min. Persists through Reincarnations.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Snowpile.png" alt="Snowpile" align="middle"> Snowpile</b></p>
					<p><b>Kind</b>: Quest</p>
					<p><b>Unlock / Price</b>: 4 Quest Series: Collect 1000, 5000, 12000 and 25000 Snowballs.</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/GiftCollector.png" alt="Gift Collector" align="middle"> Gift Collector</b></p>
					<p><b>Kind</b>: Quest</p>
					<p><b>Unlock / Price</b>: 4 Quest Series:Find 1, 4, 8 and 13 Presents</p>
					<p><b>Effect</b>: Quests total Event bonus : +7%</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/SantasHelpers.png" alt="Santa's Helpers" align="middle"> Santa's Helpers</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Play as Elves during the Christmas season, and get at least 50 assistants.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Unholidays.png" alt="Unholidays" align="middle"> Unholidays</b></p>
					<p><b>Kind</b>: Feat</p>
					<p><b>Unlock / Price</b>: Ally with the Undead during the Christmas season.</p>
					<hr>
					<p><b><img src="/realm/Factions/picks/Rubysnowballs.png" alt="1000 snowballs" align="middle"> 1000 snowballs</b></p>
					<p><b>Kind</b>: Shop Item</p>
					<p><b>Unlock / Price</b>: 10 Rubies</p>
					<p><b>Note</b>: "An adventurer wants to sell you 1000 snowballs for 10 Rubies. He will offer you a new deal if you accept."Buy increasing amounts of Snowballs for Rubies.</p>
				</div>
			</div>
			<div class="shelementwhole">
				<p onclick="shohid($(this));"><b><a href="#" onclick="return false;">Thanksgiving (Nov 26 - Nov 30, 2015)</a></b></p>
				<div class="autohide">
					<p><b><img src="/realm/Factions/picks/Thanksgiving2015.png" alt="Thanksgiving" align="middle"> Thanksgiving</b></p>
					<p><b>Kind</b>: Upgrade/Feat</p>
					<p><b>Requirement</b>: Play during Thanksgiving</p>
					<p><b>Cost</b>: Free</p>
					<p><b>Effect</b>: Increase the production of all buildings by 25% for the duration of the Thanksgiving season.</p>
					<p><b>Note</b>: This was the 1st time Realm Grinder had an Event. The Feats not giving any bonus must have not been decided then.</p>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<p><b>Event Items</b></p>
	<p><b>Feats</b>: Special kind of Trophies which can only be unlocked during their respective Event. Feats may have any kind of requirement and you will sometimes have to discover what you need to do.</p>
	<p>If you unlock all of their respective feats, you will permanently unlock a Cosmetic Award that allows you to change the mana color. (Not all Event Feats have this award)</p>
	<p><b>Event Quests</b>: Missions entirely based on event-specific mechanics that can be completed during their respective Event. Unlike Feats, completing Quest series will award a permanent bonus which will stack with the Quest bonuses from past and future Events.</p>
	<p>The bonus of each quest series is determined with</p>
	<p><b>Formula</b>: (0.5 * (2 - x + x^2))%, where x is is the number of quests completed in the series.</p>
	<p>Players who participate in all our Events will be rewarded with a greater cumulative bonus.</p>
	<p><b>Event Announcements</b></p>
	<p>Events are announced a few days in advance, by DivineGames, in the <a target="_blank" href="https://www.divinegames.it/discuss/viewtopic.php?id=395">Realm Grinder forums Developer Diary</a> at divinegames.it.
<?php include "../scripts/footer.html"; ?>
