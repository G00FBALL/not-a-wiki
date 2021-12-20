<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><a href="/realm/Factions/"><img src="http://musicfamily.org/realm/Factions/picks/MakersTopPage.png" align="middle"></a></h6>
	<p><b>In-game description</b></p>

	<p><b>Alignment</b>: Balance</p>

	<p><b>Unlock Requirements</b>: First, Second, and Third Stone Fragments</p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/FirstStoneFragment.png" align="middle"> First Stone Fragment</b></p>
	<p><b>Clue</b>: Click to Carve.</p>
	<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
	<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Elven</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 20,000)%, where x is clicks this game</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/SecondStoneFragment.png" align="middle"> Second Stone Fragment</b></p>
	<p><b>Clue</b>: Stone to stone, buildings to buildings.</p>
	<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
	<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Druid</p>
	<p><b>Chance</b>: (x / 20,000,000 (20 M))%, where x is amount of buildings.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/ThirdStoneFragment.png" align="middle"> Third Stone Fragment</b></p>
	<p><b>Clue</b>: Might be collected with taxes.</p>
	<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
	<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Goblin</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 125,000)%, where x is Tax Collections this game.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersMask.png" align="middle"> Makers Mask</b></p>
	<p><b>Requirement</b>: Find all 3 Stone Fragments.</p>
	<p><b>Cost</b>: 10 Dqag (1e130)</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buidings by 10,000% and gain +50,000 assistants.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersQuest.png" align="middle"> Makers Quest</b></p>
	<p><b>Requirements</b>: R125+, Collect all 3 Stone Fragments and accumulate 1 day of All Creation activity time in this Reincarnation.</p>
	<p><b>Cost</b>: 1 Ocqag (1e147)</p>
	<p><b>Effect</b>: Unlocks Makers Faction</p>
	<br/>
	<p><b>Faction spell</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/InfiniteSpiral.png" align="middle"> Infinite Spiral</b></p>
	<p><b>Cost</b>: 505,000 mana - <b>Duration</b>: 10 seconds</p>
	<p><b>Effect</b>: Temporarily increase assistants based on Maximum Mana (multiplicatively).</p>
	<p><b>Formula</b>: (10 * ln(1 + x) ^ 1.25)%, where x is Maximum Mana.</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coin find chance.</p>
	<p><b>Formula</b>: (1.5 * log10(1 + x) ^ 1.5)%, where x is Faction Coin find chance.</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on Excavations made, including resets, in this Reincarnation.</p>
	<p><b>Formula</b>: (10 + 0.05 * (x * y) ^ 0.75)%, where x is excavations done this Reincarnation (<b>not</b> current excavation count), y is free and ruby Excavation Resets this Reincarnation.</p>
	<br/>
	<p><b>Spell Trophy & Upgrade</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/RealityCraterSpellUpgrade.png" align="middle"> Reality Crater</b></p>
	<p><b>Requirement</b>: R125+, Cast Infinite Spiral with at least 10 excavation resets this game.</p>
	<p><b>Cost</b>: 10 Octg (1e118), A3+ Free</p>
	<p><b>Effect</b>: Infinite Spiral also reduces excavation cost multiplier based on assistants owned.</p>
	<p><b>Formula</b>: -(0.001 * log(1 + x)), where x is assistants owned.</p>
	<hr>
	<center><b>When using Mercenary</b></center>
	<p><b>Note</b>: Elite Faction Upgrades can only be purchased with Mercenary Upgrade 4, 8, 12 and 16.</p>
	<p><b>Note</b>: Elite spells can only be bought from the Mercenary Sorcery contract.</p>
	<hr>
	<p><b>Tier 1 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersTradeTreaty.png" align="middle"> Makers Trade Treaty</b></p>
	<p><b>Description</b>: The legendary old race which is said to have created the world, their watchful eye aims to keep all forces in check. Affiliating with them will increase your ability to dominate all your resources.</p>
	<p><b>Requirements</b>: Vanilla and Prestige Union</p>
	<p><b>Cost</b>: 1 Oc (1e27) Elven and Goblin Coins</p>
	<p><b>Effect</b>: Unlocks Makers Upgrades</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade1.png" align="middle"> Hand of the Makers</b></p>
	<p><b>Cost</b>: 1 NoQag (1e150)</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is clicks made in this Reincarnation.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade2.png" align="middle"> Everlasting Materials</b></p>
	<p><b>Cost</b>: 10 NoQag (1e151)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the highest amount of buildings built in this Reincarnation.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.85)%, where x is highest amount of buildings built in this Reincarnation.</p>
	<br>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade3.png" align="middle"> Infinite Improvements</b></p>
	<p><b>Cost</b>: 100 NoQag (1e152)</p>
	<p><b>Effect</b>: Increase the production of All Buildings based on time spent as Balance.</p>
	<p><b>Formula</b>: (0.3 * x ^ 0.7)%, where x is time spent as balance this Reincarnation.</p>
	<hr>
	<p><b>Tier 2 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersFriendshipPact.png" align="middle"> Makers Friendship Pact</b></p>
	<p><b>Cost</b>: 1 No (1e30) Elven and Goblin Coins</p>
	<p><b>Effect</b>: Unlocks Makers Upgrades</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade4.png" align="middle"> Magical Shards</b></p>
	<p><b>Cost</b>: 100 UQig (1e158)</p>
	<p><b>Effect</b>: Multiplicatively increase mana regeneration based on artifacts found.</p>
	<p><b>Formula</b>: (x ^ 0.95)%, where x is artifacts found.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade5.png" align="middle"> Treasure Mosaic</b></p>
	<p><b>Cost</b>: 1 DQig (1e159)</p>
	<p><b>Effect</b>: Additionally increase Maximum Mana based on Faction Coins found in this game.</p>
	<p><b>Formula</b>: +(27.5 * log10(1 + x) ^ 2.75), where x is Faction Coins found in this game.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade6.png" align="middle"> Art of Commerce</b></p>
	<p><b>Cost</b>: 10 DQig (1e160)</p>
	<p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on their quantity.</p>
	<p><b>Formula</b>: (0.2 * x ^ 0.6)%, where x is Royal Exchanges made.</p>
	<hr>
	<p><b>Tier 3 Upgrades</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersAlliance.png" align="middle"> Makers Alliance</b></p>
	<p><b>Cost</b>: 1 Dc (1e33) Elven and Goblin Coins</p>
	<p><b>Effect</b>: Unlocks Makers Upgrades</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade7.png" align="middle"> Stonecarving</b></p>
	<p><b>Cost</b>: 10 TQig (1e163)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on excavations made in this Reincarnation, including resets.</p>
	<p><b>Formula</b>: (250 + 0.5 * (x * (y + z)) ^ 0.5)%, where x is excavations done this Reincarnation (NOT current excavation count) and y & z are free and ruby excavation resets done in this Reincarnation.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade8.png" align="middle"> Past Trade</b></p>
	<p><b>Cost</b>: 100 TQig (1e164)</p>
	<p><b>Effect</b>: Multiplicatively increase production bonus from Gems based on the time spent on your longest game session in this Reincarnation.</p>
	<p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x is your longest game session this Reincarnation.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade9.png" align="middle"> Structural Stability</b></p>
	<p><b>Cost</b>: 1 QaQig (1e165)</p>
	<p><b>Effect</b>: Increase the production of building tiers directly above or below Unique Buildings based on spells cast in this game.</p>
	<p><b>Formula</b>: (0.2 * x ^ 0.4)%, where x spells cast in this game.</p>
	<p><b>Note</b>: If affected twice, stacks multiplicatively.</p>
	<hr>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersHeritage.png" align="middle"> Makers Heritage</b></p>
	<p><b>Cost</b>: 1 Ud (1e36) Elven and Goblin Coins</p>
	<p><b>Effect</b>: Multiplicatively increase maximum mana based on Tax Collections cast in this game.</p>
	<p><b>Formula</b>: (2 * log10(1 + x) ^ 1.75)%, where x is Tax Collections cast this game.</p>
	<hr>
	<p><b>R130+</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOriginationQuest.png" align="middle"> Hall of Origination Quest</b></p>
	<p><b>Description</b>: Hello, child! Your realm progress looks kinda... obsolete. Would you mind if we help improve your realm with our advanced perks? Please gather more Faction Coins to generate more energy!</p>
	<p><b>Requirements</b>: R130+, Gather 5 TD (5e42) Faction Coins</p>
	<p><b>Cost</b>: 1 QaQig (1e165)</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOriginationUpgrade.png" align="middle"> Hall of Origination Upgrade</b></p>
	<p><b>Requirements</b>: Hall of Origination Quest.</p>
	<p><b>Cost</b>: 1 QiQig (1e168)</p>
	<p><b>Effect</b>: Gives Hall of Origination Unique Building.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/HallofOrigination.png" align="middle"></b></p>
	<p>Upgrade Halls of Legends to Halls of Origination, boosting their production based on assistants owned and unlocking more unique perks for the building.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is assistants owned.</p>
	<p><b>Requirement</b>: Hall of Origination Quest.</p>
	<p><b>Effect</b>: Grants access to Faction Union.</p>
	<hr>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUnion.png" align="middle"> Makers Union</b></p>
	<p><b>Requirement</b>: Halls of Origination Unique Building</p>
	<p><b>Cost</b>: 1 Dd (1e39) Elven and Goblin Coins</p>
	<p><b>Effect</b>: Grants access to Union Upgrades.</p>
	<p><b>Effect</b>: All Creation production effect is based on the highest Mana Regeneration rate in this Reincarnation.</p>
	<p><b>Note</b>: Does not effect Faction Coin find chance.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade10.png" align="middle"> Valuable Antiquity</b></p>
	<p><b>Requirements</b>: Makers Union</p>
	<p><b>Cost</b>: 100 QiQig (1e170)</p>
	<p><b>Effect</b>: Artifacts count more based on time spent in this Reincarnation.</p>
	<p><b>Formula</b>: (0.4 * x ^ 0.4)%, where x is time spent in this Reincarnation.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade11.png" align="middle"> Bedrock Foundations</b></p>
	<p><b>Requirements</b>: Makers Union</p>
	<p><b>Cost</b>: 1 SxQig (1e171)</p>
	<p><b>Effect</b>: Increase the base production of all buildings by +1000 per building tier.</p>
	<br/>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersUpgrade12.png" align="middle"> Reality Marble</b></p>
	<p><b>Requirements</b>: Makers Union</p>
	<p><b>Cost</b>: 10 SxQig (1e172)</p>
	<p><b>Effect</b>: Gain assistants based on clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: +(2.5 * x ^ 0.5), where x is clicks made this Reincarnation.</p>
<?php include "../scripts/footer.html"; ?>