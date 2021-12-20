<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6>
	<p>All Researches can be found here: <b><a href="http://musicfamily.org/realm/Researchtree"> Research Tree</a></b> or <b><a href="http://musicfamily.org/realm/ResearchList"> Research List</a></b>.</p>
	<p>Research was implemented in the Secrets expansion series (Secrets of the Realm, Secrets of the ancients, Secrets of the underworld) bringing "secret" powers to enhance each mythical faction. Overtaking the Mercenaries, it is accessible from R16 for Vanilla, R23 for Neutral, R29 for Prestige Factions, and R75 for Mercenary.</p>
	<p>Enter the Research Facilities to improve your grinding potential.</p>
	<p>There you will be able to advance your research progress, unlock and buy special upgrades which will boost all your abilities hugely.</p>
	<p>Your research points in each branch are limited by the amount of Reincarnations you have.</p>
	<hr>
	<p><b>The Facilities & Related Factions</b></p>
	<p>Each Facility is related to several Factions: Vanilla factions are related to one facility, Neutral to two, Prestige to three, and Mercenary to one. Each facility increases the production of the related Faction's based on Research Points invested (see next section).</p>
	<p><b>Production Bonus</b>: (100000 * (1 + 0.01 * x ^ 0.7))%, where x is the amount of Research Points invested in the facility.</p>
	<p><b>Secrets Production Bonus</b>: 1000%</p>
	<p><b>Facility cost</b>: 10 Notg (1e121) coins, 1 M (1e6) Faction Coins of the related faction(s).</p>
	<hr>
	<p><b>Research Points</b></p>
	<p>With increasing number of Reincarnations, you can spend more Research Points (RP) to upgrade each facility. The available Research Points per facility are based on the number of Reincarnations made.</p>
	<p><b>Formula (A0, A1)</b>: ((x + 1) * x / 2), where x is the number of Reincarnations made.</p>
	<p><b>Formula (A3 [R175-R190], and A4 [R220-R246])</b>: (5000 + (125 * (x - 174)), where x is the number of Reincarnations made.</p>
	<p>The RP upgrade cost increases according to the following formulas (x is the number of to be invested RP).</p>
	<p><b>A0 (1 - 780)</b>:<br> Coins: (1e126 * 1.5 ^ x)<br> Faction Coins: ((x + 1) ^ 3)</p>
	<p><b>A1 (781 - 5000)</b>:<br> Formula: (1e42 * 1.147 ^ (x - 780))<br> Faction Coins: ((x + 1) ^ 3)</p>
	<p><b>A3 (5001 - 7000)</b>:<br> Formula: (1e126 * 1.75 ^ ((x - 5000) / 10))<br> Faction Coins: (10 * (x + 1) ^ 10)</p>
	<p><b>A4 (7001 - 14000)</b>:<br> Formula: (1.4 ^ (0.1 * (x - 7000)))<br> Faction Coins: (10 * 1.15 ^ (0.03 * x)</p>
	<p><b><center>Research Slots/Budget</center></b></p>
	<p><b>R16-R99 (A0, A1)</b>: You get a limited number of Research slots for each facility, depending on what upgrades you have you can have up to 6 slots for each facility.</p>
	<p><b>R100-R159 (A2)</b>: You get 1 Research slot for each facility, and A0 and A1 research slot upgrades are removed, however, faction researches are free and take no slots.</p>
	<p><b>R160-R219 (A3)</b>: The research slots change to a budget based on each research's point value and starts at 0, increasable by R170 power (+3000) and a 2nd Facility Upgrade (+3000) to a total of 6000. The budget can be further increased with Archon Bloodline (+500 and more).</p>
	<p><b>R220+ (A4)</b>: The budget system from A3 is the same, but each Trade Treaty, Friendship Pact, Alliance and Union will also give +2000 each to the budget, for a total of +8000 currently (14,000 in total).</p>
	<p>Upon abdication, your purchased Research Points will persist, but your Research Upgrade Slots/Budget will reset so you can make different research builds each run.</p>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Research Slot/Budget Upgrade Requirements</a></b></p>
			<div class="autohide">
				<p><b>Research Slot Upgrade Requirements</b></p>
				<p><img src="http://musicfamily.org/realm/Factions/picks/MagicianSlotUpgrade.png" alt="Warfare" align="middle"> <b>Magician</b> (R20+)</p>
				<p><b>Requirement</b>: Discover at least 10 Spellcraft Researches.</p>
				<p><b>Cost</b>: 250 Noqag (2.5e152)</p>
				<p><b>Effect</b>: Increase Spellcraft upgrade slot by 1</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/ArtisanSlotUpgrade.png" alt="Warfare" align="middle"> <b>Artisan</b> (R19+)</p>
				<p><b>Requirement</b>: Discover at least 10 Craftsmanship Researches.</p>
				<p><b>Cost</b>: 250 Noqag (2.5e152)</p>
				<p><b>Effect</b>: Increase Craftsmanship upgrade slot by 1</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/DemigodSlotUpgrade.png" alt="Warfare" align="middle"> <b>Demigod</b> (R20+)</p>
				<p><b>Requirement</b>: Discover at least 10 Divine Researches.</p>
				<p><b>Cost</b>: 250 Noqag (2.5e152)</p>
				<p><b>Effect</b>: Increase Divine upgrade slot by 1</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/BusinessmanSlotUpgrade.png" alt="Warfare" align="middle"> <b>Businessman</b> (R20+)</p>
				<p><b>Requirement</b>: Discover at least 10 Economics Researches</p>
				<p><b>Cost</b>: 250 Noqag (2.5e152)</p>
				<p><b>Effect</b>: Increase Economics upgrade slot by 1</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/ApothecarySlotUpgrade.png" alt="Warfare" align="middle"> <b>Apothecary</b> (R17+)</p>
				<p><b>Requirement</b>: Discover at least 10 Alchemy Researches</p>
				<p><b>Cost</b>: 250 Noqag (2.5e152)</p>
				<p><b>Effect</b>: Increase Alchemy upgrade slot by 1</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/WarlordSlotUpgrade.png" alt="Warfare" align="middle"> <b>Warlord</b> (R20+)</p>
				<p><b>Requirement</b>: R20, Discover at least 10 Warfare Researches</p>
				<p><b>Cost</b>: 250 Noqag (2.5e152)</p>
				<p><b>Effect</b>: Increase Warfare upgrade slot by 1</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/AncientDeviceSlotUpgrade.png" alt="Warfare" align="middle"> <b>Artifact-Ancient Device</b> (R23+)</p>
				<p><b>Requirement</b>: Find the Ancient Device (Play a Neutral Faction, 2000+ Excavations, Unique Building.</p>
				<p><b>Chance</b>: 0.2% per excavation</p>
				<p><b>Cost</b>: 100 QiSxg (1e200)</p>
				<p><b>Effect</b>: Provides 2 additional slots for Neutral researches(1 for each related Neutral Faction Facility you are playing).</p>
				<p><b>Note</b>: Needs purchased for each Neutral research run.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/HornoftheKingsSlotUpgrade.png" alt="Warfare" align="middle"> <b>Artifact-Horn of the Kings</b> (R29+)</p>
				<p><b>Requirement</b>: Find the Horn of the Kings (Have Dwarven Forges, 3250+ Excavations)</p>
				<p><b>Cost</b>: 10 SxSpg (1e232), 10m Dwarven Coins</p>
				<p><b>Effect</b>: Provides 3 additional slots for Dwarven research (+2 Craftsman slots, +1 to the Good faction's facility you are playing).</p>
				<p><b>Note</b>: Needs purchased for each Prestige research run.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/FlameofBondelnarSlotUpgrade.png" alt="Warfare" align="middle"> <b>Artifact-Flame of Bondelnar</b> (R29+)</p>
				<p><b>Requirement</b>: R29, Find the Flame of Bondelnar (Have Spider Sanctuaries, 3250+ Excavations)</p>
				<p><b>Cost</b>: 10 SxSpg (1e232), 10m Drow Coins</p>
				<p><b>Effect</b>: Provides 3 additional slots for Drow research: (+2 Warfare slots, +1 to the Evil faction's facility you are playing).</p>
				<p><b>Note</b>: Needs purchased for each Prestige research run.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/ForgottenRelic.png" align=middle> <b>Artifact-Forgotten Relic</b> (R175+)</p>
				<p><b>Clue</b>: Research it!</p>
				<p><b>Description</b>: Intricate leylines of mana cover the surface of this stone, moving and flailing endlessly to create ever-different patterns.</p>
				<p><b>Requirement</b>: R175+</p>
				<p><b>Effect</b>: Unlocks Facility Research upgrades</p>
				<p><b>Note</b>: Each Facility needs their respective artifact and this artifact to get their respective upgrade.</p>
				<p><b>Chance</b>: (x ^ 2 / 100,000,000,000)%, where x is spent Research points.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/ManaLoom.png" align="middle"> <b>Artifact-Mana Loom</b> (R180+)</p>
				<p><b>Clue</b>: Attracted by amassed mana reserves.</p>
				<p><b>Description</b>: Used to weave even the thinnest mana strings.</p>
				<p><b>Requirement</b>: R180+, Chaos Alignment</p>
				<p><b>Chance</b>: (log10(1 + x) ^ 3 / 50000)%, where x is mana produced (This Game)</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Requirement</b>: Forgotten Relic, Mana Loom artifact and upgrade.</p>
				<p><b>Upgrade Effect</b>: Expands the Spellcraft research facility, permanently increasing Spellcraft budget by +3000.</p>
				<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Fairy Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
				<br>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Factory.png" align="middle"> <b>Artifact-Factory</b> (R180+)</p>
				<p><b>Clue</b>: Dig it manually.</p>
				<p><b>Description</b>: Mass-production is the way to go.</p>
				<p><b>Requirement</b>: R180+, Neutral Alignment</p>
				<p><b>Chance</b>: (log10(1 + x) ^ 3 / 10000)%, where x is clicks (This Game)</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Requirement</b>: Forgotten Relic, Factory artifact and upgrade.</p>
				<p><b>Upgrade Effect</b>: Expands the Craftsmanship research facility, permanently increasing Craftsmanship budget by +3000.</p>
				<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Elven Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
				<br>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Mythos.png" align="middle"> <b>Artifact-Mythos</b> (R180+)</p>
				<p><b>Clue</b>: Spells get sad when not used for a long time.</p>
				<p><b>Description</b>: Accurate historical list of every existing or non-existing deity.</p>
				<p><b>Requirement</b>: R180+, Good Alignment</p>
				<p><b>Chance</b>: (x / 4,320,000)%, where x is minimum spell activity time. (This Reincarnation)</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Requirement</b>: Forgotten Relic, Mythos artifact and upgrade.</p>
				<p><b>Upgrade Effect</b>: Expands the Divine research facility, permanently increasing Divine budget by +3000.</p>
				<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Angel Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
				<br>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Vault.png" align="middle"> <b>Artifact-Vault</b> (R180+)</p>
				<p><b>Clue</b>: Show your prowess as a Royal Trader.</p>
				<p><b>Description</b>: Never a place could be more secure.</p>
				<p><b>Requirement</b>: R180+, Balance Alignment</p>
				<p><b>Chance</b>: (x / 100,000,000)%, where x is Royal Exchange Bonus.</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Requirement</b>: Forgotten Relic, Vault artifact and upgrade.</p>
				<p><b>Upgrade Effect</b>: Expands the Economics research facility, permanently increasing Economics budget by +3000.</p>
				<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Goblin Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
				<br>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Athanor.png" align="middle"> <b>Artifact-Athanor</b> (R180+)</p>
				<p><b>Clue</b>: Archemy.</p>
				<p><b>Description</b>: The legendary oven that could smelt souls into matter.</p>
				<p><b>Requirement</b>: R180+, Order Alignment</p>
				<p><b>Chance</b>: (x / 1,000,000)%, where x is Alchemy Research Points.</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Requirement</b>: Forgotten Relic, Athanor artifact and upgrade.</p>
				<p><b>Upgrade Effect</b>: Expands the Alchemy research facility, permanently increasing Alchemy budget by +3000.</p>
				<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Undead Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
				<br>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Battlefield.png" align="middle"> <b>Artifact-Battlefield</b> (R180+)</p>
				<p><b>Clue</b>: Would you think an army is enough to excavate this?</p>
				<p><b>Description</b>: An extremely accurate replica of a battle fought long ago.</p>
				<p><b>Requirement</b>: R180+, Evil Alignment</p>
				<p><b>Chance</b>: (log10(1 + x) ^ 3 / 20,000), where x is the number of Assistants. (base and temporary, not invisible)</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Requirement</b>: Forgotten Relic, Battlefield artifact and upgrade.</p>
				<p><b>Upgrade Effect</b>: Expands the Warfare research facility, permanently increasing Warfare budget by +3000.</p>
				<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Demon Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
				<br>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Apeiron.png" align="middle"> <b>Artifact-Apeiron</b> (R175+)</p>
				<p><b>Clue</b>: Be different.</p>
				<p><b>Description</b>: The source of everything. Can fit in the average pocket.</p>
				<p><b>Requirement</b>: R175, Mercenary, 15 different faction upgrades.</p>
				<p><b>Chance</b>: 0.1%</p>
				<p><b>Effect</b>: Unlocks upgrade with same name.</p>
				<p><b>Upgrade Effect</b>: Unlocks new Research Facility at R180.</p>
				<p><b>Upgrade Description</b>: Take advantage of the most ancient and secret arts to empower your production beyonds known limits.</p>
				<p><b>Upgrade Description</b>: Unlock the Forbidden research facility and increase Mercenary production by 100%, plus an additional bonus based on Forbidden research point. These upgrades will persist through abdications and reincarnations, providing a permanent bonus to all factions affected.</p>
				<p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
				<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			</div>
		</div>
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Research Facilities</a></b></p>
			<div class="autohide">
				<p><b>Short and long names</b></p>
				<p><b>S</b>=Spellcraft, <b>C</b>=Craftsmanship, <b>D</b>=Divine, <b>E</b>=Economics, <b>A</b>=Alchemy, <b>W</b>=Warfare, and <b>F</b>=Forbidden</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Spellcraft.png" alt="Spellcraft" align="middle"> <b>Spellcraft</b> (R16+)</p>
				<p>Delve into the arcane mysteries of Spellcraft, discovering new ways to produce and use mana.</p>
				<p><b>Effect</b>: Increases <b>Fairy</b>, <b>Faceless</b> and <b>Drow</b> production.</p>
				<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Craftsmanship.png" alt="Craftsmanship" align="middle"> <b>Craftsmanship</b> (R16+)</p>
				<p>Learn how to use tools and experience to improve your production by mastering Craftsmanship.</p>
				<p><b>Effect</b>: Increases <b>Elven</b>, <b>Titan</b> and <b>Dwarven</b> production.</p>
				<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Divine.png" alt="Divine" align="middle"> <b>Divine</b> (R16+)</p>
				<p>Harness the power of the eternals, increasing your spell affinity and bestowing Divine power on all your productivity.</p>
				<p><b>Effect</b>: Increases <b>Angel</b>, <b>Faceless</b> and <b>Dwarven</b> production.</p>
				<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Economics.png" alt="Economics" align="middle"> <b>Economics</b> (R16+)</p>
				<p>Exploit your resources with Economics knowledge, taking maximum advantage of your properties and turning time into money.</p>
				<p><b>Effect</b>: Increases <b>Goblin</b>, <b>Druid</b> and <b>Dwarven</b> production.</p>
				<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Alchemy.png" alt="Alchemy" align="middle"> <b>Alchemy</b> (R16+)</p>
				<p>Tap the near-unlimited sources of Alchemy to improve your production and benefit from all your assets.</p>
				<p><b>Effect</b>: Increases <b>Undead</b>, <b>Druid</b> and <b>Drow</b> production.</p>
				<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Warfare.png" alt="Warfare" align="middle"> <b>Warfare</b> (R16+)</p>
				<p>Use strategical prowess and manpower tp manipulate the production system in your favor.</p>
				<p><b>Effect</b>: Increases <b>Demon</b>, <b>Titan</b> and <b>Drow</b> production.</p>
				<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Forbidden.png" align="middle"> <b>Forbidden</b> (R180+)</p>
				<p>Take advantage of the most ancient and secret arts to empower your production beyonds known limits.</p>
				<p><b>Effect</b>: Increases <b>Mercenary</b> production.</p>
				<p>Pointing to this ingame will tell you how many Points are available and also tells you your total research points.</p>
				<p><b>Research Point Production</b>:</p>
				<p><b>Formula</b>: (100,000 * (1 + 0.01 * x ^ 0.7))%, where x is RP total of facility affinities.</p>
				<br/>
			</div>
		</div>
	</div>
	<br>
	<center><b>Research Requirements</b></center>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Vanilla Research</a></b> (R16+)</p>
			<div class="autohide">
				<h6>Fairy</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Fairyr1.png" align="middle"> Enchanted Field Quest</b></p>
				<p>Hey! Listen! A True Fairy has never enough Farms! We will offer you the chance to improve them!</p>
				<p><b>Requirement</b>: R16 + 2250 Farms</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Fairyr2.png" alt="Enchanted Field" align="middle"> Enchanted Field</b></p>
				<p>Upgrade Farms to Enchanted Fields, boosting their production based on the amount of assistants you own and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (50 * (500 * x) ^ 0.5), where x is your Assistants stat.</p>
				<p><b>Requirement</b>: Buy "Enchanted Field Quest"</p>
				<p><b>Effect</b>: Grants access to the Research Facilities.</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Spellweaveryr.png" alt="Enchanted Field" align="middle"> Spellweavery</b></p>
				<p>Unlocks the Spellcraft research facility and increases Fairy production by 100000%, plus an additional bonus based on Spellcraft research points.</p>
				<p><b>Requirement</b>: All Fairy faction upgrades bought, Enchanted Field</p>
				<p><b>Cost</b>: 1E121 coins, 1E6 Fairy coins</p>
				<hr>
				<h6>Elf</h6>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Elfr1.png" alt="Training Grounds Quest" align="middle"> Elven Training Grounds Quest</p>
				<p>Hello, mellonamin. We require a new place to train our soldiers. Build enough Warrior Barracks, and we'll make them worthy of you.</p>
				<p><b>Requirement</b>: R16 + 1750 Warrior Barracks</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Elfr2.png" alt="Elven Training Grounds" align="middle"> Elven Training Grounds</p>
				<p>Upgrade Warrior Barracks To Elven Training Grounds, boosting their production based on the total amount of clicks you made and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: ((50 * x^0.85) + 50 * ln^6(1 + x))%, where x is your Treasure Clicks (Total) stat.</p>
				<p><b>Requirement</b>: Buy "Elven Training Grounds Quest"</p>
				<p><b>Effect</b>: Grants access to the Research Facilities.</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Carpentryr.png" alt="Elven Training Grounds" align="middle"> Carpentry</p>
				<p>Unlocks the Craftsmanship research facility and increases Elven production by 100000%, plus an additional bonus based on Craftsmanship research points.</p>
				<p><b>Requirement</b>: All Elven faction upgrades bought, Elven Training Grounds</p>
				<p><b>Cost</b>: 1E121 coins, 1E6 Elven coins</p>
				<hr>
				<h6>Angel</h6>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Angelr1.png" alt="Heaven's Domain Quest" align="middle"> Heaven's Domain Quest</p>
				<p>Bless you, dear friend. The Lands of the sky are expanding as more good souls are joining our ranks. Would you be so kind to provide them a place to stay in the Heavens?</p>
				<p><b>Requirement</b>: R16 + 1500 Heaven's Gates</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Angelr2.png" alt="Heaven's Domain" align="middle"> Heaven's Domain</p>
				<p>Upgrade Heaven's Gate To Heaven's Domains, boosting their production by 35000% per spell affecting them and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (350 * x ^ 1.1), where x is the amount of Active Spells</p>
				<p><b>Requirement</b>: Buy "Heaven's Domain Quest"</p>
				<p><b>Effect</b>: Grants access to the Research Facilities.</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Pantheonr.png" alt="Heaven's Domain Quest" align="middle"> Pantheon</p>
				<p>Unlocks the Divine research facility and increases Angel production by 100000%, plus an additional bonus based on Divine research points.</p>
				<p><b>Requirement</b>: All Angel faction upgrades bought, Heaven's Domain</p>
				<p><b>Cost</b>: 1E121 coins, 1E6 Angel coins</p>
				<hr>
				<h6>Goblin</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblinr1.png" alt="Goblin Banks Quest" align="middle"> Goblin Banks Quest</b></p>
				<p>Hey There! We need a safe place to keep our honestly earned savings. We'll turn those Witch Conclaves into something more... useful, if you build enough of them.</p>
				<p><b>Requirement</b>: R16 + 1750 Witch Conclaves</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Goblinr2.png" alt="Goblin Banks" align="middle"> Goblin Banks</b></p>
				<p>Upgrade Witch Conclaves To Goblin Banks, boosting their production based on the amount of gold you own and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: 650 + 10000 * log^1.5(1 + x), where x is your current amount of Coins.</p>
				<p><b>Requirement</b>: Buy "Goblin Banks Quest"</p>
				<p><b>Effect</b>: Grants access to the Research Facilities.</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Exchequerr.png" alt="Goblin Banks Quest" align="middle"> Exchequer</b></p>
				<p>Unlocks the Economics research facility and increases Goblin production by 100000%, plus an additional bonus based on Economics research points.</p>
				<p><b>Requirement</b>: All Goblin faction upgrades bought, Goblin Banks</p>
				<p><b>Cost</b>: 1E121 coins, 1E6 Goblin coins</p>
				<hr>
				<h6>Undead</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Undeadr1.png" alt="Undercities Quest" align="middle"> Undercities Quest</b></p>
				<p>Hello there. The dead stand ready. Give them a place to rise and live again... Build enough Necropolises, we'll take care of the rest.</p>
				<p><b>Requirement</b>: R16 + 1750 Necropolises</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Undeadr2.png" alt="Undercities" align="middle"> Undercities</b></p>
				<p>Upgrade Necropolises To Undercities, boosting their production based on time spent in this game and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (10 * (2x)^0.75)%, where x is your Playtime (This Game) stat.</p>
				<p><b>Requirement</b>: Buy "Undercities Quest"</p>
				<p><b>Effect</b>: Grants access to the Research Facilities.</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Laboratoryr.png" alt="Laboratory" align="middle"> Laboratory</b></p>
				<p>Unlocks the Alchemy research facility and increases Undead production by 100000%, plus an additional bonus based on Alchemy research points.</p>
				<p><b>Requirement</b>: Undercities and all Undead faction upgrades bought</p>
				<p><b>Cost</b>: 1E121 coins, 1E6 Undead coins</p>
				<hr>
				<h6>Demon</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Demonr1.png" alt="Infernal Realm Quest" align="middle"> Infernal Realm Quest</b></p>
				<p>Useless underling, be warned! The Demons are going to invade your world with all their might. If you know which side you want to be on when that happens, build those Hell Portals!</p>
				<p><b>Requirement</b>: R16 + 1500 Hell Portals</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Demonr2.png" alt="Infernal Realm" align="middle"> Infernal Realm</b></p>
				<p>Upgrade Hell Portals To Infernal Realms, boosting their production by 100% per Trophy you unlocked and unlocking more unique perks for the building.</p>
				<p><b>Requirement</b>: Buy "Infernal Realm Quest"</p>
				<p><b>Effect</b>: Grants access to the Research Facilities.</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/StrategyRoomr.png" alt="Strategy Room" align="middle"> Strategy Room</b></p>
				<p>Unlocks the Warfare research facility and increases Demon production by 100000%, plus an additional bonus based on Warfare research points.</p>
				<p><b>Requirement</b>: All Demon faction upgrades bought, Infernal Realm</p>
				<p><b>Cost</b>: 1E121 coins, 1E6 Demon coins</p>
			</div>
		</div>
	</div>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Neutral Research</a></b> (R23+)</p>
			<div class="autohide">
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/SecretsoftheAncientsr.png" alt="Secrets of the Ancients" align="middle"> Secrets of the Ancients</b></p>
				<p>Unlocks research for Titan, Druids and Faceless and increases production by 100,000%, plus an additional bonus based on Economics research points.</p>
				<p><b>Requirement</b>: Neutral Unique Building</p>
				<p><b>Requirement</b>: The Key To The Lost City artifact (for this you need: 1500 excavations, R23+)</p>
				<p><b>Cost</b>: 1 Noqag (1e151) Coins, 1 M (1e6) Fairy, Elven, Angel, Goblin, Undead and Demon coins</p>
				<hr>
				<h6>Titan</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Titanr1.png" alt="Olympian Halls Quest" align="middle"> Olympian Halls Quest</b></p>
				<p>Khaire, ruler. More of our people will join your cause if you build enough Hall of Legends. Our architects will take care of expanding them to accommodate the almighty Titans.</p>
				<p><b>Requirement</b>: R22+</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Titanr2.png" alt="Olympian Halls" align="middle"> Olympian Halls</b></p>
				<p>Upgrade Halls of Legend to Olympian Halls, boosting their production by 15% per Royal Exchange you've purchased and unlocking more unique perks for the building.</p>
				<p><b>Requirement</b> 2000 Halls of Legends</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<hr>
				<h6>Druid</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Druidr1.png" alt="Stonehenge Circles Quest" align="middle"> Stonehenge Circles Quest</b></p>
				<p>Hello, friend. The balance of nature requires more magic to sustain it. Build enough Stone Pillars, we'll gather our elders to improve them.</p>
				<p><b>Requirement</b>: R22+</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Druidr2.png" alt="Stonehenge Circles" align="middle"> Stonehenge Circles</b></p>
				<p>Upgrade Stone Pillars to Stonehenge Circles, boosting their production by 25% per point of Maximum Mana and unlocking more unique perks for the building.</p>
				<p><b>Note</b>: The bonus is not a multiple of 25; this may be due to max. mana appearing as a floating point number instead of an integer.</p>
				<p><b>Requirement</b>: 2000 Stone Pillars</p>
				<p><b>Cost</b>: 10 Ttg (1E103)</p>
				<hr>
				<h6>Faceless</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Facelessr1.png" alt="Sunken Cities Quest" align="middle"> Sunken Cities Quest</b></p>
				<p>C-uh'e sll'ha hrii nog nwyar. Kn'a wgah'n ph'sgn'wahl. (Those unpronounceable words with no apparent meaning have spoken directly to your mind: you have to build enough Labyrinths).</p>
				<p><b>Requirement</b>: R22+</p>
				<p><b>Cost</b>: 10 Dtg (1E100)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Facelessr2.png" alt="Sunken Cities" align="middle"> Sunken Cities</b></p>
				<p>Upgrade Labyrinths to Sunken Cities, boosting their production based on time spent in your longest game session and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (75 * (x / 3600) ^ 0.9)%, where x is your Playtime (Longest Session) stat.</p>
				<p><b>Requirement</b>: 2000 Labyrinths</p>
				<p><b>Cost</b>: 10 Ttg (1E103))</p>
			</div>
		</div>
	</div>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Prestige Research</a></b> (R29+)</p>
			<div class="autohide">
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/EarthCoreArtifactr.png" alt="Earth Core Artifact" align="middle"> Artifact-Earth Core</b></p>
				<p>Your Magesty, our miners report to have found an unstable substance, throbbing with magical power. The Dwarves and Drow are ready to share the Secrets of the Underworld!</p>
				<p><b>Requirement</b>: R29 + 2750th Excavation</p>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/SecretsoftheUnderworldFactionUpgrade.png" alt="Secrets of the Underworld" align="middle"> Secrets of the Underworld</b></p>
				<p>Unlocks researches for Dwarven and Drow and provides a bonus for individual research branches.</p>
				<p><b>Requirement</b>: Prestige Unique Building (Dwarf or Drow), Artifact-Earth Core</p>
				<p><b>Cost</b>: 100 SXg (1E185), 10M of each faction coin</p>
				<p><b>Note</b>: Secrets of the Underworld allows Prestige factions to benefit from RP production formula with no extra bonus.</p>
				<hr>
				<h6>Dwarf</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwravenForgeQuestr.png" alt="Dwarven Forge Quest" align="middle"> Dwarven Forge Quest</b></p>
				<p>Aye again lad! Don't ye want a better place to forge yer weapons? With Enough Blacksmiths me people can help ye!</p>
				<p><b>Requirement</b>: R28, 3500 Blacksmiths</p>
				<p><b>Cost</b>: 10 Sxg (1E184)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenForgesr.png" alt="Dwarven Forges" align="middle"> Dwarven Forges</b></p>
				<p><b>In-game Description</b></p>
				<p>Upgrade Blacksmiths to Dwarven Forges, boosting their production based on mana regen and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (80 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
				<p><b>Requirement</b>: Dwarven Forge Quest</p>
				<p><b>Cost</b>: 10 USxg (1E187)</p>
				<hr>
				<h6>Drow</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiderSanctuaryQuestr.png" alt="Spider Sanctuary Quest" align="middle"> Spider Sanctuary Quest</b></p>
				<p><b>In-game Description</b></p>
				<p>Kivvil. Our Valsharess requires more places to worship the almighty Spider Queen. Build enough Dark Temples, and our priestresses will consecrate them.</p>
				<p><b>Requirement</b>: R28, 2000 Dark Temples</p>
				<p><b>Cost</b>: 10 Sxg (1E184)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/SpiderSanctuaryr.png" alt="Spider Sanctuary" align="middle"> Spider Sanctuary</b></p>
				<p><b>In-game Description</b></p>
				<p>Upgrade Dark Temples to Spider Sanctuaries, boosting their production based on time spent offline and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (32 * x ^ 0.8), where x is your Time Spent Offline (Total) stat.</p>
				<p><b>Requirement</b>: Spider Sanctuary Quest</p>
				<p><b>Cost</b>: 10 USxg (1E187)</p>
				<hr>
				<h6>Dragons</h6>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sDenQuestFactionUpgrade.png" align="middle"> Wyrm's Den Quest</b></p>
				<p>Ava'yorn thurirl. Our kind needs large spaces and a place to take flight. Build enough Iron Strongholds to make room for us.</p>
				<p><b>Effect</b>: Unlocks Wyrm's Den</p>
				<p><b>Requirement</b>: R46+, 4500 Iron Strongholds</p>
				<p><b>Cost</b>: 100 Tvg (1.0e74)</p>
				<br/>
				<p><b><img src="http://musicfamily.org/realm/Factions/picks/Wyrm'sDenFactionUpgrade.png" align="middle"> Wyrm's Den</b></p>
				<p>Upgrade Iron Stronghold to Wyrm's Den, boosting their production based on the total amount of Faction Coins you collected and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: 0.065 * (ln(1 + (x / 2) + y)) ^ 3.65 where x is faction coins (This Game) and y is Faction Coins (This R)</p>
				<p><b>Effect</b>: Unlocks Wyrm's Den Unique Building</p>
				<p><b>Requirement</b>: Wyrm's Den Quest, Dragon's Trade Treaty</p>
				<p><b>Cost</b>: 10 Nod (1.e61)</p>
			</div>
		</div>
	</div>
	<div class="shlisting">
		<div class="shelementwhole">
			<p onclick="shohid($(this));"><b> <a href="#" onclick="return false;">Mercenary</a></b> (R75-R99, R160-219)</p>
			<div class="autohide">
				<p><b>Note</b>: At R160+ you will need to unlock Mercenary again, click <a href="http://musicfamily.org/realm/MercenaryFaction/#MercenaryDuel"><b>here</b></a> to see requirements.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/ObsidianShardArtifact.png" alt="Secrets of the Warriors" align="middle"> <b>Artifact-Obsidian Shard</b></p>
				<p><b>Requirement</b>: 8000 Excavations any Faction.</p>
				<p><b>Description</b>: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.</p>
				<p><b>Effect</b>: Unlocks Secrets of the Warriors.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/SecretsoftheWarriors.png" alt="Secrets of the Warriors" align="middle"> <b>Secrets of the Warriors</b></p>
				<p><b>Requirement</b>: Obsidian Shard</p>
				<p><b>Cost</b>: 100 Qiqag (1e140) and 10 Qa (1e16) of every Faction Coin.</p>
				<p><b>Effect</b>: Unlocks Researches for Mercenaries and increases their production by 1000%.</p>
				<br/>
				<p><img src="http://musicfamily.org/realm/Factions/picks/MercenaryEncampmentQuest.png" alt="Mercenary Encampment Quest" align="middle"> <b>Mercenary Encampment Quest</b></p>
				<p>We salute you, commander. Your strategical skills had not gone unnoticed within our ranks. We have decided to offer you a chance to establish a formal encampment within your boundaries... Build more structures to strengthen our city.</p>
				<p><b>Requirement</b>: Mercenary (Any Alignment), 125k buildings</p>
				<p><b>Cost</b>: 10 Notg (1e121)</p>
				<p><b>Note</b>: Only needs bought once.</p>
				<p><b>Unlocks</b>: Mercenary Unique Buildings</p>
				<br/>
				<p><b>Good Alignment</b></p>
				<p><img src="http://musicfamily.org/realm/Factions/picks/MercenaryCamp.png" alt="Mercenary Camp" align="middle"> <b>Mercenary Camp</b></p>
				<p><b>Requirement</b>: Mercenary Encampment Quest</p>
				<p><b>Cost</b>: 100 Qag (1e125)</p>
				<p><b>Effect 1</b>: Allows access to Research Facilities</p>
				<p><b>Effect 2</b>: Upgrade Knights Jousts to Mercenary Camps, boosting their production based on the amount of Non-Unique buildings you own and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (1.25 * (1 + x) ^ 1.05), where x is number of Non-Unique Buildings.</p>
				<p><b>Effect 3</b>: Unlocks Round Table</p>
				<br/>
				<p><b>Evil Alignment</b></p>
				<p><img src="http://musicfamily.org/realm/Factions/picks/TyrantGarrison.png" alt="Tyrant Garrison" align="middle"> <b>Tyrant Garrison</b></p>
				<p><b>Requirement</b>: Mercenary Encampment Quest</p>
				<p><b>Cost</b>: 100 Qag (1e125)</p>
				<p><b>Effect 1</b>: Allows access to Research Facilities</p>
				<p><b>Effect 2</b>: Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (0.5 * log10(x) ^ 3.5), where x is Offline Production Bonus.</p>
				<p><b>Effect 3</b>: Unlocks Dark Covenant</p>
				<br/>
				<p><b>Neutral Alignment</b></p>
				<p><img src="http://musicfamily.org/realm/Factions/picks/Freemason'sHall.png" alt="Freemason's Hall" align="middle"> <b>Freemason's Hall</b></p>
				<p><b>Requirement</b>: Mercenary Encampment Quest</p>
				<p><b>Cost</b>: 100 Qag (1e125)</p>
				<p><b>Effect 1</b>: Allows access to Research Facilities</p>
				<p><b>Effect 2</b>: Upgrade Inns to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.</p>
				<p><b>Formula</b>: (20 + 20 * x), where x is assistants you had in a single game (This R).</p>
				<p><b>Effect 3</b>: Unlocks Secret Exchange</p>
			</div>
		</div>
	</div>
<?php include "../scripts/footer.html"; ?>
