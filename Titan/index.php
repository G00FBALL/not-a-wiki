<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><a href="/realm/Challenges/"><img src="http://musicfamily.org/realm/Factions/picks/ChallengesTopPage.png"></h6></a>
	<h6 id="TTC1"></h6><p><b>Titan Challenge 1</b></p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/RichFollowersChallenge.png" alt="Rich Followers" align="middle"> <b>Rich Followers</b></p>
	<p>"The mighty Titans have decided to give you and a dozen of you most loyal subjects a chance to prove your kingdom's economy is as strong as theirs."</p>
	<p><b>Requirements</b>: Titan as Base Faction, Reincarnation 4+, Lightning Storm upgrade purchased, Angel and Goblin challenge 1 completed.</p>
	<p><b>Challenge</b>: Have at least 13 assistants and have exactly 13 times that many Royal Exchanges (Total)</p>
	<p><b>Effect</b>: You gain a free assistant for every 80 Royal Exchanges you bought</p>
	<p><b>Upgrade</b>: Works with Titan</p>
	<p><b>Tip</b>: This can be done solely with building assistants where the 5th and 25th building upgrade gives 1 assistant each.</p>
	<p><b>Note</b>: You can have more than 13 assistants so long as you have the required (13 x number of assistants).</p>
	<p><b>Example</b>: 13 x 26 assistants = 338 Royal Exchanges</p>
	<hr>
	<h6 id="TTC2"></h6><p><b>Titan Challenge 2</b></p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/HarmonyofThoughtsChallenge.png" alt="Harmony of Thoughts" align="middle"> <b>Harmony of Thoughts</b></p>
	<p>"The mighty Titans wish for you to harness arcane powers through your fingertips."</p>
	<p><b>Requirements</b>: Titan as Base Faction, Reincarnation 9+, Titan Bloodline, Angel and Goblin challenge 2 and Titan challenge 1 completed.</p>
	<p><b>Challenge</b>: Click 80 times while having at least 3 active spells in a single session.</p>
	<p><b>Effect</b>: Increases the production of buildings based on time spent not playing as Faceless in this Reincarnation. Does not suffer from Ascension penalties.</p>
	<p><b>Formula</b>: (x ^ 0.7)%, where x is time spent not playing as Faceless this Reincarnation.</p>
	<p><b>Upgrade</b>: Works with Faceless</p>
	<p><b>Tip</b>: This challenge does not need to be done within one spell combo. In addition, due to a bug, it counts one click per second if you have at least one assistant. It's possible to meet the condition without clicking the treasure at all while spells are active by casting 3 spells that last 20 seconds together 4 times.</p>
	<hr>
	<h6 id="TTC3"></h6><p><b>Titan Challenge 3</b></p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/BalancedEconomyChallenge.png" alt="Balanced Economy" align="middle"> <b>Balanced Economy</b></p>
	<p>"The mighty Titans are almost ready to accept you into their pantheon. They request that you gather enough offerings to mark your ascension."</p>
	<p><b>Requirements</b>: Titan as Base Faction, Reincarnation 19+, 1000 excavations, Angel and Goblin challenge 3 and Titan challenge 2 completed.</p>
	<p><b>Challenge</b>: Cast 80 Tax Collections within the active duration of a single Lightning Strike.</p>
	<p><b>Effect</b>: Gain additional Maximum Mana based on the number of Faction Coins generated this game.</p>
	<p><b>Formula</b>: (round(2.5 * log10(1 + x)))%, where x is the number of Faction Coins Gained found in this game.</p>
	<p><b>Upgrade</b>: Works with Druid</p>
	<hr>
	<h6 id="TTC4"></h6><p><b>Titan Challenge 4</b></p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/StormofWealthChallenge.png" alt="Storm of Wealth" align="middle"> <b>Storm of Wealth</b></p>
	<p>"The mighty Titans wish to cement their legendary status for perpetuity. You must focus on this task and no other to be able to join them."</p>
	<p><b>Requirements</b>: Titan as Base Faction, Reincarnation 25+, Titan Unique Building, Titan challenge 3 completed.</p>
	<p><b>Challenge</b>: Hit Halls of Legends with Lightning Strike 2 times in a row while having all building types and no researches.</p>
	<p><b>Effect</b>: Increases production of all buildings based on Lightning Strike casts in this Reincarnation. does not suffer from Ascension penalties.</p>
	<p><b>Formula</b>: (15 * x ^ 0.5)%, where x is Lightning Strike casts this Reincarnation.</p>
	<p><b>Upgrade</b>: Works with All</p>
	<p><b>Tip</b>: Buy Olympian Hall, get enough Mana Regeneration from non-Research methods, set Lightning Strike on bronze (Ctrl+Shift). Wait. On average, it takes 132 strikes to get two in a row on HoLs. <a target="_blank" href="http://dox4242.github.io/rws/index.html" research="Allows you to see what Lightning Strike will hit next"> <b>The Realm Weather Service</b></a> can help to forecast.</p>
	<hr>
	<h6 id="TTCR"></h6><p><b>Titan Challenge Reward</b>
	<p><img src="http://musicfamily.org/realm/Factions/picks/ThunderstormChallengeReward.png" alt="Thunderstorm" align="middle"> <b>Thunderstorm</b></p>
	<p><b>Effect</b>: Further increase Faction Coin find chance from Lightning Strike based on building tiers it hits.</p>
	<p><b>Formula</b>: (10 + log10(1 + x) ^ 2 * (1 + 0.2 * sum(T)))%%, where x is your current amount of gems and T the Building Tier Lightning Strike hits.</p></p>
	<p><b>Note</b>: Lightning Strike can hit multiple tiers at once if you have C375 and/or Titan Perk 4.</p>
<?php include "../scripts/footer.html"; ?>