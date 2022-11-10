<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src='http://musicfamily.org/realm/Factions/picks/ExcavationTopPage.png'></h6>
	<p><b>There are two kinds of artifacts</b></p>
	<p><a href="/realm/QuestArtifacts" research="Quest Artifacts"><b>Quest Artifacts</b></a> and <a href="/realm/LoreArtifacts" research="Lore Artifacts"><b>Lore Artifacts</b></a></p>
	<p>For Artifact Sets, go to <a href="/realm/ArtifactSet" research="Artifact Sets"><b>Artifact Sets</b></a></p>
	<p><b>In-game description</b></p>
	<p>Enter the Archeology Association to control the progress of your Excavations. There you will be able to fund more excavations to find Faction Coins, the rare Rubies and ancient Artifacts from the civilizations of the old.</p>
	<p>Archaeology was first implemented in the "Ancient Races" expansion for introducing the Neutral Factions.</p>
	<p>Excavating enables to find Rubies (See the <b><a target="_blank" href="http://musicfamily.org/realm/Rubies/">Ruby</a></b> page), with luck: Faction Coins, and at certain thresholds or under certain conditions: Artifacts. Specific artifacts are required to unlock the Neutral & Prestige Factions.</p>
	<p>Some artifacts will reward direct bonuses and the amount of discovered artifacts take part in some Research upgrades.</p>
	<p><b>Requirements</b></p>
	<p>Archaeology is unlocked once you have over 1 B (1e9) gems, produced over 10 Oc (1e28) coins and bought the</p>
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Archeology-upgrade.png' align='middle'> Archeology Upgrade</b>.</p>
	<p><b>Upgrade Cost</b>: 100 Oc (1e29). To be bought once throughout the entire game and permanently unlocks an "Excavation" button which will appear on the left under the Upgrades tab.</p>
	<br>
	<p>To unlock the chance to find <b>Lore Artifacts</b>, it requires the</p>
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SurveyEquipment.png' align='middle'> Survey Equipment Upgrade</b>.</p>
	<p><b>Upgrade Cost</b>: 100 Dc (1e35) and at least 100 excavations. To be bought once throughout the entire game and does not show up as bought upgrade.</p>
	<hr>
	<p><b>Excavations</b></p>
	<p>The first excavation costs 1 Oc (1e27) coins, and each subsequent excavation costs without any cost multiplier reduction 20% more than the one before.</p>
	<p><b>Cost Formula for the x-th excavation</b>: (1e27 ^ (0.75 ^ A) * M ^ (x - 1)), where A is the number of times you have ascended and M the excavation cost multiplier.</p>
	<p>The <b>excavation cost multiplier</b> is equal to:<br/>
	   - A0: (1 + 0.2 - C), where C is the sum of your flat cost reduction upgrades (such as DN8 or E290).<br/>
	   - A1+: (1 + (0.2 - C) / (5 * A)), where C is the sum of your flat cost reduction upgrades and A is the number of times you have ascended.</p>
	<p>Every time you excavate, you have a 35% (40% with 'That Excavated Quickly' upgrade) chance per excavation to find a certain amount of Faction Coins as reward.</p>
	<p><b>Faction Coin Reward Formula</b>: (1500 + 0.05 * (x - 1) ^ 2.75), where x is the number of excavations you have.</p>
	<p><b>Note</b>: Every time you reincarnate or ascend, your excavation counter will be set back to zero.</p>
	<hr>
	<p><b>Excavation Reset</b></p>
	<p>To be able to do more excavations within a Reincarnation you can do an Excavation Reset, which also sets the counter back to zero. There are two options:<br>Ruby Reset and Free Reset.</p>
	<p><b>Ruby Cost for Ruby Reset</b>: (floor(x / 3000) + 1), where x is the number of excavations.</p>
	<p><b>Note</b>: Not recommended. It is better to spend rubies in ruby power, unless you have very specific reason to spend them on a reset.</p>
	<p><b>Free Reset Requirement Formula</b>: (2000 + 50 * R + 500 * x), where R is the number of times you have reincarnated and x is the amount of Free Resets already done this Reincarnation.</p>
	<p><b>Note</b>: When doing a Free Reset, you will lose all gold on hand and receive a 90% production penalty until you abdicate or reincarnate.</p>
	<p><b>Note</b>: Free Resets are not available until around R30, since the requirement is too high for lower stages.</p>
	<p><b>Note</b>: Each ruby found from excavation is a single all-time reward. No matter how the counter is set back to zero, you cannot find the same ruby again.</p>
	<hr>
	<p><img src="http://musicfamily.org/realm/Factions/picks/QuestArtifacts.png" usemap="#QuestArtifacts-map"></p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/LoreArtifacts.png" usemap="#LoreArtifacts-map"></p>
	<map name="QuestArtifacts-map">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncientStoneSlab1.png' align='middle'> Ancient Stoneslab 1</b></p>
	<p><b>Description</b>: We discovered an ancient stone slab written in old scriptures. It appears to say something about Halls of Legends.</p>
	<p><b>Requirement</b>: 5th Excavation</p>
	<p><b>Effect</b>: 1st clue required to unlock the Titan Alliance.</p>
	" coords="3,43,56,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FossilizedPieceofBark1.png' align='middle'> Fossilized Piece of Bark 1</b></p>
	<p><b>Description</b>: We discovered a fossilized piece of Bark with the image of a Faction Coin carved into it.</p>
	<p><b>Requirement</b>: 10th Excavation</p>
	<p><b>Effect</b>: 1st clue required to unlock the Druid Alliance.</p>
	" coords="63,43,116,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BoneFragment1.png' align='middle'> Bone Fragment 1</b></p>
	<p><b>Description</b>: We discovered a sundial shaped artefact, probably made of animal bones.</p>
	<p><b>Requirement</b>: 15th Excavation</p>
	<p><b>Effect</b>: 1st clue required to unlock the Faceless Alliance.</p>
	" coords="123,43,176,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncientStoneSlab2.png' align='middle'> Ancient Stoneslab 2</b></p>
	<p><b>Description</b>: We discovered an ancient stone slab written in old scriptures.We can recognize the number 300.</p>
	<p><b>Requirement</b>: 20th Excavation</p>
	<p><b>Effect</b>: 2nd clue required to unlock the Titan Alliance.</p>
	" coords="183,43,236,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FossilizedPieceofBark2.png' align='middle'> Fossilized Piece of Bark 2</b></p>
	<p><b>Description</b>: We discovered a fossilized piece of Bark with the symbol of One Million.</p>
	<p><b>Requirement</b>: 25th Excavation</p>
	<p><b>Effect</b>: 2nd clue required to unlock the Druid Alliance.</p>
	" coords="243,43,296,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BoneFragment2.png' align='middle'> Bone Fragment 2</b></p>
	<p><b>Description</b>: We discovered an artefact shaped like the number 36, probably made of animal bones.</p>
	<p><b>Requirement</b>: 30th Excavation</p>
	<p><b>Effect</b>: 2nd clue required to unlock the Faceless Alliance.</p>
	" coords="303,43,356,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/KeytotheLostCity.png' align='middle'> Key to the Lost City</b></p>
	<p><b>Description</b>: Despite being thousands of years old, it's still shiny.</p>
	<p><b>Requirement</b>: R23+, 1500th Excavation</p>
	<p><b>Effect</b>: Part of the Neutral research quest</p>
	" coords="363,43,416,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncientDevice.png' align='middle'> Ancient Device</b></p>
	<p><b>Description</b>: This strange Device seems to react to the Ancient Races magical capabilities. We may channel its power to increase their research potential!</p>
	<p><b>Requirement</b>: Play any Neutral Faction, their Unique Building, 2000+ excavations.</p>
	<p><b>Effect</b>: Provides 2 additional slots: 1 for each related to the Neutral Faction's Facility you are playing.</p>
	<p><b>Chance</b>: 0.2% </p>
	<p><b>Cost</b>: 100 QiSxg (1e200)</p>
	<p><b>Note</b>: Has no effect in R100+</p>
	" coords="3,103,56,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/EarthCore.png' align='middle'> Earth Core</b></p>
	<p><b>Description</b>: This piece of rock is continuously shifting its shape, responding to mysterious energy sources.</p>
	<p><b>Requirement</b>: R29+, 2750th Excavation</p>
	<p><b>Effect</b>: Part of the Prestige research quest</p>
	" coords="63,103,116,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HornoftheKings.png' align='middle'> Horn of the Kings</b></p>
	<p><b>Description</b>: It is said that when this horn is blown, the voices of past Dwarven Kings can be heard in the Wind.</p>
	<p><b>Requirement</b>: Dwarven Faction, Dwarven Forges, 3250+ Excavations</p>
	<p><b>Effect</b>: Unlocks the upgrade Legacy of the Kings that adds 3 extra slots: 2 for Craftsmanship and 1 related to the Good Base Faction's facility you are playing.</p>
	<p><b>Chance</b>: 0.5%</p>
	<p><b>Cost</b></b>: 10 SxSpg (1e232) and 100 M (1e8) Dwarven Coins</p>
	<p><b>Note</b>: Has no effect in R100+</p>
	" coords="123,103,176,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FlameofBondelnar.png' align='middle'> Flame of Bondelnar</b></p>
	<p><b>Description</b>: The magical azure flame of Bondelnar constantly emanates a silent, yet subtle, evil aura.</p>
	<p><b>Requirement</b>: Drow Faction, Spider Sanctuaries, 3250+ Excavations</p>
	<p><b>Effect</b>: Unlocks the upgrade The Dark Light of Bondelnar that adds 3 extra slots: 2 for Warfare and 1 related to the Evil Base Faction's facility you are playing.</p>
	<p><b>Chance</b>: 0.5%</p>
	<p><b>Cost</b>: 10 SxSpg (1e232), 100 M (1e8) Drow Coins</p>
	<p><b>Note</b>: Has no effect in R100+</p>	
	" coords="183,103,236,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SpikyRoughEggArtifact.png' align='middle'> Spiky Rough Egg</b></p>
	<p><b>Description</b>: What a weird egg... it looks ages old, yet something alive is inside. Perhaps if you wait long enough, something will hatch?</p>
	<p><b>Requirement</b>: R46+, 1500 Excavations</p>
	<p><b>Chance</b>: 2%</p>
	<p><b>Effect</b>: Unlocks the Hatch! Egg</p>
	" coords="243,103,296,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ObsidianShardArtifact.png' align='middle'> Obsidian Shard</b></p>
	<p><b>Description</b>: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.</p>
	<p><b>Requirement</b>: R75+, any Faction, 8000th Excavation</p>
	<p><b>Effect</b>: Unlocks Secrets of the Warriors</p>
	" coords="303,103,356,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FirstIronFragment.png' align='middle'> First Iron Fragment</b></p>
	<p><b>Hint</b>: This one seems to require a lot of magical renewance.</p>
	<p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
	<p><b>Requirement</b>: R125+, Angel Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 100,000)%, where x is your Mana Regeneration.</p>
	" coords="363,103,416,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SecondIronFragment.png' align='middle'> Second Iron Fragment</b></p>
	<p><b>Hint</b>: Found via extensive Royal Trading mandates.</p>
	<p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
	<p><b>Requirement</b>: R125+, Titan Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (x ^ 3 / 5,000,000,000 (5 B))%, where x is the individual Royal Exchange bonus.</p>
	" coords="3,163,56,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ThirdIronFragment.png' align='middle'> Third Iron Fragment</b></p>
	<p><b>Hint</b>: Chances to find increase while not actively searching.</p>
	<p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
	<p><b>Requirement</b>: R125+, Undead Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: ((log10(1 + x) - 2) ^ 3 / 500,000)%, where x is offline bonus.</p>
	" coords="63,163,116,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FirstCrystalFragment.png' align='middle'> First Crystal Fragment</b></p>
	<p><b>Hint</b>: Assistants will lead the way.</p>
	<p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
	<p><b>Requirement</b>: R125+, Fairy Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (x / 100,000,000,000 (100 B))%, where x is assistant count (including temporary assistants).</p>
	" coords="123,163,176,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SecondCrystalFragment.png' align='middle'> Second Crystal Fragment</b></p>
	<p><b>Hint</b>: Are Faction Coins attracted to glass?</p>
	<p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
	<p><b>Requirement</b>: R125+, Faceless Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 2,500,000 (2.5 M))%, where x is Faction Coins found this game.</p>
	" coords="183,163,236,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ThirdCrystalFragment.png' align='middle'> Third Crystal Fragment</b></p>
	<p><b>Hint</b>: Also acts as a spell catalyst.</p>
	<p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
	<p><b>Requirement</b>: R125+, Demon Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (x / 50,000,000 (50 M))%, where x is evil spells cast this Reincarnation.</p>
	" coords="243,163,296,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FirstStoneFragment.png' align='middle'> First Stone Fragment</b></p>
	<p><b>Hint</b>: Click to Carve.</p>
	<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
	<p><b>Requirement</b>: R125, Elven Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 20,000)%, where x is the amount of clicks made in this game.</p>
	" coords="303,163,356,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SecondStoneFragment.png' align='middle'> Second Stone Fragment</b></p>
	<p><b>Hint</b>: Stone to stone, buildings to buildings.</p>
	<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
	<p><b>Requirement</b>: R125+, Druid Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (x / 20,000,000 (20 M))%, where x is amount of buildings.</p>
	" coords="363,163,416,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ThirdStoneFragment.png' align='middle'> Third Stone Fragment</b></p>
	<p><b>Hint</b>: Might be collected with taxes.</p>
	<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
	<p><b>Requirement</b>: R125+, Goblin Faction, 12,500+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 125,000)%, where x is Tax Collections cast in this game.</p>
	" coords="3,223,56,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ObsidianCrown.png' align='middle'> Obsidian Crown</b></p>
	<p><b>Hint</b>: Only the wisest turns over the same stone twice. Or more.</p>
	<p><b>Description</b>: The legendary Black Crown of the Mercenary Lord. Some words are engraved into the inner circle at its base: &quot;Aran en Ilya, Silas en Quenta&quot;.</p>
	<p><b>Requirement</b>: R170+, Mercenary Faction, 10 Excavation Resets (This game)</p>
	<p><b>Chance</b>: ((x - 10) / 1,000)%, x is the number of free and ruby excavation resets (This game)</p>
	<p><b>Effect</b>: Unlocks Mercenary Union Contract</p>
	" coords="63,223,116,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ForgottenRelic.png' align='middle'> Forgotten Relic</b></p>
	<p><b>Hint</b>: Research it!</p>
	<p><b>Description</b>: Intricate leylines of mana cover the surface of this stone, moving and flailing endlessly to create ever-different patterns.</p>
	<p><b>Requirement</b>: R175+</p>
	<p><b>Chance</b>: (x ^ 2 / 100,000,000,000 (100 B))%, where x is spent Research budget.</p>
	<p><b>Effect</b>: Unlocks Research Facility upgrades</p>
	<p><b>Note</b>: Each Facility needs their respective artifact and this artifact to get their respective upgrade.</p>
	" coords="123,223,176,276" shape="rect">
	</map>
	<map name="LoreArtifacts-map">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/RoughStone.png' align='middle'> Rough Stone</b></p>
	<p><b>Hint</b>: A first-time only discovery.</p>
	<p><b>Description</b>: A common, totally uninteresting stone.</p>
	<p><b>Chance</b>: 2% on the first excavation of a run, after abdication or reincarnation.</p>
	<p><b>Effect</b>: Unlocks Research D290</p>
		" coords="3,43,56,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ScarabofFortune.png' align='middle'> Scarab of Fortune</b></p>
	<p><b>Hint</b>: Rarely found in the pyramids of old.</p>
	<p><b>Description</b>: You found the rarest of relics. This golden scarab will grant you 7 days of good luck, starting from now. Make good use of it.</p>
	<p><b>Chance</b>: (x / 1,000)%, where x is the amount of Ancient Pyramids you own.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name that increases the production of all buildings by 0.1% for each trophy you unlocked.</p>
	<p><b>Cost</b>: 7 Td (7e42)</p>
		" coords="63,43,116,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ChocolateCookie.png' align='middle'> Chocolate Cookie</b></p>
	<p><b>Hint</b>: Excavated commonly in all areas.</p>
	<p><b>Description</b>: Found in a wasteland made of cakes and sweets, snatched from the hands of an old woman.</p>
	<p><b>Chance</b>: (x / 50)%, where x is the your Excavation count.</p>
		" coords="123,43,176,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FossilizedRodent.png' align='middle'> Fossilized Rodent</b></p>
	<p><b>Hint</b>: Hello, mouse.</p>
	<p><b>Description</b>: What's this, a prehistoric mouse...?</p>
	<p><b>Chance</b>: (x / 5,000,000 (5 M))%, where x is the amount of clicks made in this Reincarnation.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increase clicking reward based on the amount of artifacts you discovered.</p>
	<p><b>Formula</b>: (10 * x)%, where x is number of artifacts you discovered.</p>
	<p><b>Cost</b>: 100 Qid (1e50)</p>
		" coords="183,43,236,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PowerOrb.png' align='middle'> Power Orb</b></p>
	<p><b>Hint</b>: Attracted by massive concentration of mana.</p>
	<p><b>Description</b>: Throbbing with Arcane Power</p>
	<p><b>Requirement</b>: 3000+ Maximum Mana</p>
	<p><b>Chance</b>: (x / 15,000)%, where x is your Maximum Mana.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Multiplicatively increases Mana Regeneration by 2.5%.</p>
	<p><b>Cost</b>: 1 QaVg (1e75), A1+: Free</p>
		" coords="243,43,296,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PinkCarrot.png' align='middle'> Pink Carrot</b></p>
	<p><b>Hint</b>: Found randomly in the Farms.</p>
	<p><b>Description</b>: The main product of properly nurtured Farms.</p>
	<p><b>Requirement</b>: Fairy Faction (Not Dwarven)</p>
	<p><b>Chance</b>: (x / 5,000)%, where x is the amount of Farms you own.</p>
		" coords="303,43,356,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BottledVoice.png' align='middle'> Bottled Voice</b></p>
	<p><b>Hint</b>: Can be captured when Chanting.</p>
	<p><b>Description</b>: The essence of a melodic Fairy voice.</p>
	<p><b>Requirement</b>: Fairy Faction (Not Dwarven)</p>
	<p><b>Chance</b>: (x / 40,000)%, where x is the is the amount of Fairy Chantings cast this game.</p>
		" coords="363,43,416,96" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/LuckyClover.png' align='middle'> Lucky Clover</b></p>
	<p><b>Hint</b>: Requires extreme amounts of luck!</p>
	<p><b>Description</b>: A perfectly shaped four leaf clover. Each leaf is almost unnaturally identical to the other three.</p>
	<p><b>Requirement</b>: Elven Faction (Not Dwarven)</p>
	<p><b>Chance</b>: (x - 1) * 50)%, where x is the highest number of consecutive Elven Lucks.</p>
		" coords="3,103,56,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Mini-treasure.png' align='middle'> Mini-treasure</b></p>
	<p><b>Hint</b>: Click your way to the treasure!</p>
	<p><b>Description</b>: It's a small perfect replica of our gold-filled treasure.</p>
	<p><b>Requirement</b>: Elven Faction (Not Dwarven)</p>
	<p><b>Chance</b>: (x / 3,000,000 (3 M))%, where x is the amount of clicks made this game.</p>
		" coords="63,103,116,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Pillarfragment.png' align='middle'> Pillar Fragment</b></p>
	<p><b>Hint</b>: May fall from the Heavens.</p>
	<p><b>Description</b>: A tiny piece of the legendary pillars which sustain all the Heavens.</p>
	<p><b>Requirement</b>: Angel Faction (Not Dwarven)</p>
	<p><b>Chance</b>: (x / 3,750)%, where x is the amount of Heaven's Gates you own.</p>
		" coords="123,103,176,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DivineSword.png' align='middle'> Divine Sword</b></p>
	<p><b>Hint</b>: Only found by dedicated Angel allies.</p>
	<p><b>Description</b>: The shining golden sword of an Archangel. Its hilt feels pleasantly warm to the pure of heart and burning hot for the villain.</p>
	<p><b>Requirement</b>: Angel Faction (Not Dwarven), 3+ consecutive Angels affiliations in this Reincarnation.</p>
	<p><b>Chance</b>: (x / 60)%, where x is the amount of consecutive times affiliated with Angels in this Reincarnation.</p>
		" coords="183,103,236,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncientCoinPiece.png' align='middle'> Ancient Coin Piece</b></p>
	<p><b>Hint</b>: Rarely found among other special coins.</p>
	<p><b>Description</b>: A common goblin lucky charm. The older it is, the luckier you are, or so they say.</p>
	<p><b>Requirement</b>: Goblin Faction (Not Drow)</p>
	<p><b>Chance</b>: (x / 50,000,000 (50 M))%, where x is the amount of Faction Coins found this Reincarnation.</p>
		" coords="243,103,296,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GoblinPurse.png' align='middle'> Goblin Purse</b></p>
	<p><b>Hint</b>: Fill your pockets with extorted money.</p>
	<p><b>Description</b>: Heavy and roomy. Definitely too big for just pocket change.</p>
	<p><b>Requirement</b>: Goblin Faction (Not Drow)</p>
	<p><b>Chance</b>: (x / 300,000)%, where x is Tax collections cast this game.</p>
		" coords="303,103,356,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/RottenOrgan.png' align='middle'> Rotten Organ</b></p>
	<p><b>Hint</b>: Found among large masses of dead bodies.</p>
	<p><b>Description</b>: Ew... disgusting. It still pulses.</p>
	<p><b>Requirement</b>: Undead Faction (Not Drow)</p>
	<p><b>Chance</b>: (x / 500)%, where x is the amount of assistants you own.</p>
		" coords="363,103,416,156" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/JawBone.png' align='middle'> Jaw Bone</b></p>
	<p><b>Hint</b>: Needs some time off.</p>
	<p><b>Description</b>: A jaw, missing more than half of its teeth.</p>
	<p><b>Requirement</b>: Undead Faction (Not Drow), 24h+ offline time (this Reincarnation)</p>
	<p><b>Chance</b>: (x / 864,000)%, where x is offline time in seconds this Reincarnation.</p>
		" coords="3,163,56,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DemonicFigurine.png' align='middle'> Demonic Figurine</b></p>
	<p><b>Hint</b>: Look for the trophies of the beast.</p>
	<p><b>Description</b>: An intricate figurine representing the evil face of a lesser demon.</p>
	<p><b>Requirement</b>: Demon Faction (Not Drow), 666+ Trophies unlocked.</p>
	<p><b>Chance</b>: 1%</p>
		" coords="63,163,116,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DemonHorn.png' align='middle'> Demon Horn</b></p>
	<p><b>Hint</b>: Only found by dedicated Demon allies.</p>
	<p><b>Description</b>: Still blazing with the flames of Hell. Handle with care.</p>
	<p><b>Requirement</b>: Demon Faction (Not Drow), 3+ consecutive Demon affiliations in this Reincarnation.</p>
	<p><b>Chance</b>: (x / 60)%, where x is the amount of consecutive times affiliated with Demons this Reincarnation.</p>
		" coords="123,163,176,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/HugeTitanStatue.png' align='middle'> Huge Titan Statue</b></p>
	<p><b>Hint</b>: Struck by the lightning.</p>
	<p><b>Description</b>: The granite representation of a giant wielding a lightning bolt in its fist. A foot appears to be missing.</p>
	<p><b>Requirement</b>: Titan Faction (Not Dragon)</p>
	<p><b>Chance</b>: (x / 1,000)%, where x is Lightning Strike casts this game.</p>
		" coords="183,163,236,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TitanShield.png' align='middle'> Titan Shield</b></p>
	<p><b>Hint</b>: Don't fret it.</p>
	<p><b>Description</b>: A gargantuan metal shield, twice as tall as a common human.</p>
	<p><b>Requirement</b>: Titan Faction (Not Dragon), 10+ hours playtime (This game)</p>
	<p><b>Chance</b>: (x / 180,000)%, where x is time played in this game.</p>
		" coords="243,163,296,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GlyphTable.png' align='middle'> Glyph Table</b></p>
	<p><b>Hint</b>: Balance your buildings.</p>
	<p><b>Description</b>: Contains all the secrets of the Druidic Alphabet.</p>
	<p><b>Requirement</b>: Druid Faction (Not Dragon), same amount of each building tier</p>
	<p><b>Chance</b>: 2%</p>
		" coords="303,163,356,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/StoneOfBalance.png' align='middle'> Stone of Balance</b></p>
	<p><b>Hint</b>: A Grand Balance performance.</p>
	<p><b>Description</b>: A carved stone hovering above its pedestal.</p>
	<p><b>Requirement</b>: Druid Faction (Not Dragon)</p>
	<p><b>Chance</b>: (x / 30,000)%, where x is Grand Balance casts this game.</p>
		" coords="363,163,416,216" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TranslucentGoo.png' align='middle'> Translucent Goo</b></p>
	<p><b>Hint</b>: Byproduct of the Brain.</p>
	<p><b>Description</b>: A completely odorless sticky substance with a diaphanous, unsettling glow.</p>
	<p><b>Requirement</b>: Faceless Faction (Not Dragon)</p>
	<p><b>Chance</b>: (x / 400)%, where x is Brainwave casts this game</p>
		" coords="3,223,56,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Octopus-shapedHelmet.png' align='middle'> Octopus-shaped Helmet</b></p>
	<p><b>Hint</b>: Found in the Labyrinths.</p>
	<p><b>Description</b>: A large helmet with empty metal prongs to accommodate tentacular appendages.</p>
	<p><b>Requirement</b>: Faceless Faction (Not Dragon)</p>
	<p><b>Chance</b>: (x / 2,000)%, where x is the amount of Labyrinths you own.</p>
		" coords="63,223,116,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DwarvenBow.png' align='middle'> Dwarven Bow</b></p>
	<p><b>Hint</b>: Click to throw.</p>
	<p><b>Description</b>: Actually a heavy throwing hammer.</p>
	<p><b>Requirement</b>: Dwarven Faction</p>
	<p><b>Chance</b>: (x / 25,000)%, where x is the amount of clicks made in this game.</p>
		" coords="123,223,176,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/StoneTankard.png' align='middle'> Stone Tankard</b></p>
	<p><b>Hint</b>: Found in the Inns.</p>
	<p><b>Description</b>: A very heavy mug for drinking the heaviest beers.</p>
	<p><b>Requirement</b>: Dwarven Faction</p>
	<p><b>Chance</b>: (x / 25,000)%, where x is the amount of Inns you own.</p>
		" coords="183,223,236,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/CeremonialDagger.png' align='middle'> Ceremonial Dagger</b></p>
	<p><b>Hint</b>: Avoid hurting your fingers.</p>
	<p><b>Description</b>: Its blade is unnaturally keen and sharp.</p>
	<p><b>Requirement</b>: Drow Faction, 0 Treasure clicks this Game (including automatic clicks)</p>
	<p><b>Chance</b>: 2%</p>
		" coords="243,223,296,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ArachnidFigurine.png' align='middle'> Arachnid Figurine</b></p>
	<p><b>Hint</b>: Embrace Evil. For a while.</p>
	<p><b>Description</b>: If you are afraid of spiders, Drow aren't your faction.</p>
	<p><b>Requirement</b>: Drow Faction, 24h+ Evil Playtime (All Time)</p>
	<p><b>Chance</b>: (x / 4,320,000 (4.32 M))%, where x is time spent as Evil (All Time).</p>
		" coords="303,223,356,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SteelPlate.png' align='middle'> Steel Plate</b></p>
	<p><b>Hint</b>: Legacy from 50 generations ago.</p>
	<p><b>Description</b>: A full plate made of hardened steel.</p>
	<p><b>Requirement</b>: R5+, Mercenary Faction</p>
	<p><b>Chance</b>: (x / 50)%, where x is the number of times you have reincarnated.</p>
		" coords="363,223,416,276" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BlackSword.png' align='middle'> Black Sword</b></p>
	<p><b>Hint</b>: Only found by really, really dedicated Mercenary allies.</p>
	<p><b>Description</b>: A long sword with an extremely sharp blade made of dark metal.</p>
	<p><b>Requirement</b>: Mercenary Faction, at least 100 Mercenary affiliations (All Time)</p>
	<p><b>Chance</b>: (x / 60,000)%, where x is time spent as Mercenary (All Time).</p>
		" coords="3,283,56,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DragonFangArtifact.png' align='middle'> Dragon Fang</b></p>
	<p><b>Hint</b>: Found in the Wyrm Dens.</p>
	<p><b>Description</b>: This huge fang can barely fit in the hands of a Titan.</p>
	<p><b>Requirement</b>: R50+, Dragon Faction</p>
	<p><b>Chance</b>: (x / 400,000)%, where x is the amount of Iron Strongholds you own.</p>
		" coords="63,283,116,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DragonSoulArtifact.png' align='middle'> Dragon Soul</b></p>
	<p><b>Hint</b>: Take five deep breaths.</p>
	<p><b>Description</b>: The extracted soul from an ancient dragon, wields the power to end the world in an instant. Also makes a good soup ingredient.</p>
	<p><b>Requirement</b>: R50+, Dragon Faction, have 5 different Dragon Breath effects active simultaneously</p>
	<p><b>Chance</b>: (x / 200,000)%, where x is Dragon's Breath casts this game.</p>
		" coords="123,283,176,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/VanillaFlavorJuice.png' align='middle'> Vanilla Flavor Juice</b></p>
	<p><b>Hint</b>: Quickly!</p>
	<p><b>Description</b>: An essence from extremely savory vanilla beans.</p>
	<p><b>Requirement</b>: R16+, any Vanilla Faction, first 5 minutes of the game</p>
	<p><b>Chance</b>: 20%</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increase the production of all buildings by 2,500% for the first 25 minutes (this game) for all Vanilla factions. Does not work while offline.</p>
	<p><b>Cost</b>: 1 coin</p>
	<p><b>Note</b>: Effect is nullified if you affiliate with Prestige.</b>
		" coords="183,283,236,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncientCocoaBeanArtifacts.png' align='middle'> Ancient Cocoa Bean</b></p>
	<p><b>Hint</b>: True Neutral Flavor.</p>
	<p><b>Description</b>: Despite being centuries old, it still smells like top-quality cocoa.</p>
	<p><b>Requirement</b>: R22+, any Neutral Faction</p>
	<p><b>Chance</b>: 10%</p>
	<p><b>Effect</b>: Awards an upgrade named Chocolate Flavor Smoothie.</p>
	<p><b>Effect</b>: Increase the production of all buildings by 2,500% for the first 15 minutes (this game) for all Neutral factions. Does not work while offline.</p>
	<p><b>Cost</b>: 1 coin</p>
	<p><b>Note</b>: Effect is nullified if you affiliate with Prestige.</b>

		" coords="243,283,296,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPartI.png' align='middle'> Know Your Enemy, Part I</b></p>
	<p><b>Hint</b>: A true Mercenary should learn by all other cultures.</p>
	<p><b>Description</b>: All the knowledge you need, stored in a handy book.</p>
	<p><b>Requirement</b>: R12+, Mercenary Faction, have upgrades from all 11 Factions</p>
	<p><b>Chance</b>: 10%</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increases the production of all buildings based on time spent as Non-Mercenary (All Time 'Time spent' with Factions in the stats). Only available to Mercenaries.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.6)%, where x is time spent as non-Mercenary factions (All Time).</p>
	<p><b>Cost</b>: 100 Vg (1e65)</p>
		" coords="303,283,356,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/VoodooDoll.png' align='middle'> Voodoo Doll</b></p>
	<p><b>Hint</b>: Found in the Witch Conclaves.</p>
	<p><b>Description</b>: You are now CURSED! And you feel a sting in your lower rear.</p>
	<p><b>Requirement</b>: R16+, Evil Alignment</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is the amount of Witch Conclaves you own.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increase the production of all building by 0.1% for each trophy you have unlocked.</p>
	<p><b>Cost</b>: 20 Qig (2e154)</p>
		" coords="363,283,416,336" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/WallFragment.png' align='middle'> Wall Fragment</b></p>
	<p><b>Hint</b>: Ascension...</p>
	<p><b>Description</b>: A fragment of an utterly and completely unbreakable wall. Enjoy your paradox.</p>
	<p><b>Requirement</b>: R40+</p>
	<p><b>Chance</b>: 10%</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
	<p><b>Formula</b>: (3 * (2 * (11 - T)) ^ 3)%, where T is building tier.</p>
	<p><b>Cost</b>: 1 M (1e6), A2+ free</p>
		" coords="3,343,56,396" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FortuntTellerMachineArtifact.png' align='middle'> Fortune Teller Machine</b></p>
	<p><b>Hint</b>: Don't choose your allies until you know more.</p>
	<p><b>Description</b>: Will tell you 1 of 24 statements at random.</p>
	<p><b>Requirement</b>: Not affiliated with any Faction</p>
	<p><b>Chance</b>: 0.1%</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Upgrade Requirement</b>: R40+</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on time spent in this Reincarnation.</p>
	<p><b>Formula</b>: (6.5 * x ^ 0.65)%, where x is time spent in this Reincarnation.</p>
	<p><b>Cost</b>: 100 Qi (1e20), A2+ Free</p>
		" coords="63,343,116,396" shape="rect">
		<area target="_blank" href="http://musicfamily.org/realm/SunForce/" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DawnstoneArtifact.png' align='middle'> Dawnstone</b></p>
	<p><b>Hint</b>: Relic of the Dawn hours.</p>
	<p><b>Description</b>: Only found during sunrise hours. Emits a faint glow.</p>
	<p><b>Requirement</b>: R16+, between 5:00 AM and 8:00 AM (Your local time)</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is your Excavation count.</p>
	<p><b>Effect</b>: With Both the Dawnstone and Duskstone artifacts, awards the Sun Force upgrade.</p>
	<p><b>Note</b>: Click image for details</p>
		" coords="123,343,176,396" shape="rect">
		<area target="_blank" href="http://musicfamily.org/realm/SunForce/" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DuskstoneArtifact.png' align='middle'> Duskstone</b></p>
	<p><b>Hint</b>: Relic of the Dusk hours.</p>
	<p><b>Description</b>: Only found during sunset hours. Absorbs light in a small radius.</p>
	<p><b>Requirement</b>: R16+, between 6:00 PM and 9:00 PM (Your local time)</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is your Excavation count.</p>
	<p><b>Effect</b>: With Both the Dawnstone and Duskstone artifacts, awards the Sun Force upgrade.</p>
	<p><b>Note</b>: Click image for details</p>
		" coords="183,343,236,396" shape="rect">
		<area target="_blank" href="http://musicfamily.org/realm/Lineages/#LineageCost" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncientHeirloomTrophy.png' align='middle'> Ancient Heirloom</b></p>
	<p><b>Hint</b>: Relic of the Lineage.</p>
	<p><b>Description</b>: Passed down countless generations.</p>
	<p><b>Requirement</b>: Have at least 1 Lineage level purchased (R60+).</p>
	<p><b>Chance</b>: (x / 20)%, where x is the sum of all lineage levels.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Note</b>: Click image for details</p>
		" coords="243,343,296,396" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPart2.png' align='middle'> Know Your Enemy, Part II</b></p>
	<p><b>Hint</b>: Even an expert Mercenary should learn by all other cultures.</p>
	<p><b>Description</b>: Much more knowledge than you need, stored in a handy book.</p>
	<p><b>Requirement</b>: R75+, Mercenary Faction, Unique Building, have upgrades from all 12 Factions</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increases the production of all buildings based on time spent as Non-Mercenary (All Time 'Time spent' with Factions in the stats). Only available to Mercenaries.</p>
	<p><b>Formula</b>: (0.065 * x ^ 0.65)%, where x is time spent as non-mercenary factions in seconds (All Time).</p>
	<p><b>Chance</b>: 5%</p>
	<p><b>Cost</b>: 100 Noqag (1e152)</p>
		" coords="303,343,356,396" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/VeteranFigurineArtifact.png' align='middle'> Veteran Figurine</b></p>
	<p><b>Hint</b>: A reward for the veteran challenger.</p>
	<p><b>Description</b>: The warrior of a thousand battles, ultimate champion of the Realms.</p>
	<p><b>Requirement</b>: R90+, Dragon Challenge 6</p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is time spent in this game in seconds.</p>
	<p><b>Effect</b>: Passive effect: allows Mercenaries to benefit from all faction challenges of your primary alignment.</p>
	<p><b>Note</b>: Does not grant elite challenges.</p>
		" coords="363,343,416,396" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/WallChunkArtifact.png' align='middle'> Wall Chunk</b></p>
	<p><b>Hint</b>: More Ascension...</p>
	<p><b>Description</b>: A bigger piece of the infamous Ascension Wall.</p>
	<p><b>Requirement</b>: R100+</p>
	<p><b>Chance</b>: 10%</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
	<p><b>Formula</b>: (30,000 * (11 - T) ^ 3.5)%, where T is building tier.</p>
	<p><b>Cost</b>: 1 Sx (1e21), A3+ Free</p>
		" coords="3,403,56,456" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ExcavatedMirageArtifact.png' align='middle'> Excavated Mirage</b></p>
	<p><b>Hint</b>: Raise your chances.</p>
	<p><b>Description</b>: You know all too well this does not exist, yet it fills you with hope and optimism.</p>
	<p><b>Requirement</b>: R100+</p>
	<p><b>Chance</b>: (log10(x) / 100)%, where x is your Faction Coin find chance.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Effect</b>: Increase Faction Coin find chance by a multiplicative 200%.</p>
	<p><b>Cost</b>: 1 Sx (1e21), A3+ Free</p>
		" coords="63,403,116,456" shape="rect">
		<area target="_blank" href="http://musicfamily.org/realm/Lineages/#LineageCost" research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png' align='middle'> Ancestral Hourglass</b></p>
	<p><b>Hint</b>: Really, raise your chances.</p>
	<p><b>Description</b>: The silver sands contained within seem to never stop flowing.</p>
	<p><b>Requirement</b>: R100+</p>
	<p><b>Chance</b>: (x / 5,000,000,000,000,000 (5 QA))%, where x your Faction Coin find chance.</p>
	<p><b>Effect</b>: Awards an upgrade of the same name.</p>
	<p><b>Note</b>: Click image for details</p>
		" coords="123,403,176,456" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SilkClothArtifact.png' align='middle'> Silk Cloth</b></p>
	<p><b>Hint</b>: Found in the Swarming Towers.</p>
	<p><b>Description</b>: The purest silk made for Fairies, by Fairies, of Fairies.</p>
	<p><b>Requirement</b>: R100+, Fairy Faction, Pink Carrot and Bottled Voice artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((x - 8,000) / 200,000)%, where x is the amount of Wizard Towers you own (Building count multipliers <b>do not</b> count).</p>
		" coords="183,403,236,456" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/RawEmeraldArtifact.png' align='middle'> Raw Emerald</b></p>
	<p><b>Hint</b>: Not found on the first Excavation round.</p>
	<p><b>Description</b>: Just slightly less precious than a raw Ruby.</p>
	<p><b>Requirement</b>: R100+, Elven Faction, Lucky Clover and Mini-treasure artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: (((3 * x) ^ 4.5) / 10,000)%, where x is free and ruby excavation resets (this game).</p>
		" coords="243,403,296,456" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FossilizedWingArtifact.png' align='middle'> Fossilized Wing</b></p>
	<p><b>Hint</b>: Angels may fall after a long time.</p>
	<p><b>Description</b>: The remains of an Angel fallen to earth.</p>
	<p><b>Requirement</b>:  R100+, Angel Faction, Pillar Fragment and Divine Sword artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: (x / 25,920,000 (25.92 M))%, where x time spent with Angels (All Time).</p>
		" coords="303,403,356,456" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SpikedWhipArtifact.png' align='middle'> Spiked Whip</b></p>
	<p><b>Hint</b>: Used by the overseers in the Slave Markets.</p>
	<p><b>Description</b>: Use with caution. You do not want to exterminate all your slaves.</p>
	<p><b>Requirement</b>: R100+, Goblin Faction, Ancient Coin Piece and Goblin Purse artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((x - 8,000) / 300,000)%, where x is the amount of Slave Pens you own (Building count multipliers <b>do not</b> count).</p>
		" coords="363,403,416,456" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DustyCoffinArtifact.png' align='middle'> Dusty Coffin</b></p>
	<p><b>Hint</b>: Quick! Quick! You have no time to waste!</p>
	<p><b>Description</b>: Sealed since forever, yet you can hear a strange noise from within.</p>
	<p><b>Requirement</b>: R100+, Undead Faction, Rotten Organ and Jaw Bone artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: (1 / (30 + x ^ 1.5))%, where x is time spent in this game.</p>
		" coords="3,463,56,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/CrystallizedLavaArtifact.png' align='middle'> Crystallized Lava</b></p>
	<p><b>Hint</b>: Found in the Burning Abysses.</p>
	<p><b>Description</b>: Incandescent but still. Can be used efficiently as a desk lamp.</p>
	<p><b>Requirement</b>: R100+, Demon Faction, Demonic Figurine and Demon Horn artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((x - 8,000) / 200,000)%, where x is the amount of Hall of Legends you own (Building count multipliers <b>do not</b> count).</p>
		" coords="63,463,116,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png' align='middle'> Titan Helmet</b></p>
	<p><b>Hint</b>: Found in the trade route used for Exchanges.</p>
	<p><b>Description</b>: Made of enough metal to craft a human-sized full plate.</p>
	<p><b>Requirement</b>: R100+, Titan Faction, Huge Titan Statue and Titan Shield artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((x ^ 2) / 1,500,000,000 (1.5B))%, where x is Royal Exchanges (Royal Exchange count multipliers <b>do not</b> count).</p>
		" coords="123,463,176,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BranchoftheLifeTreeArtifact.png' align='middle'> Branch of the Life Tree</b></p>
	<p><b>Hint</b>: Found in the remains of druidic ancestors.</p>
	<p><b>Description</b>: Despite being torn from its source tree, it keeps growing buds and leaves.</p>
	<p><b>Requirement</b>: R100+, Druid Faction, Glyph Table and Stone of Balance artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((x ^ 3) / 2,000,000 (2M))%, where x is level of Druid Lineage.</p>
		" coords="183,463,236,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/NightmareFigmentArtifact.png' align='middle'> Nightmare Figment</b></p>
	<p><b>Hint</b>: A strong and quick brain is required.</p>
	<p><b>Description</b>: An unshaped, ephemeral substance which is politely trying to corrupt your mind.</p>
	<p><b>Requirement</b>: R100+, Faceless Faction, Translucent Goo and Octupus-shaped Helmet artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((x ^ 1.5) / 20,000,000 (20M))%, where x is Brainwave's headstart time.</p>
		" coords="243,463,296,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BeardHair.png' align='middle'> Beard Hair</b></p>
	<p><b>Hint</b>: It requires a lot of beard samples to get the perfect hair.</p>
	<p><b>Description</b>: Hopefully coming from a real dwarven beard.</p>
	<p><b>Requirement</b>: R116+, Dwarven Faction, Stone Tankard and Dwarven Bow artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: (x / 1,000,000,000 (1 B))%, where x is the amount of assistant you own (including temporary assistants).</p>
		" coords="303,463,356,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PoisonVial.png' align='middle'> Poison Vial</b></p>
	<p><b>Hint</b>: Combo your way through.</p>
	<p><b>Description</b>: One drop of this is enough to fell thousands of non-immune creatures.</p>
	<p><b>Requirement</b>: R116+, Drow Faction, Ceremonial Dagger and Arachnid Figurine artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: ((40 * x ^ 0.9) / 10,000,000 (10 M))%, where x is combo strike counter.</p>
		" coords="363,463,416,516" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DragonScale.png' align='middle'> Dragon Scale</b></p>
	<p><b>Hint</b>: Usually found when a lot of magic is lingering.</p>
	<p><b>Description</b>: Very high on the realms' most accurate hardiness rankings.</p>
	<p><b>Requirement</b>: R116+, Dragon Faction, Dragon Fang and Dragon Soul artifacts, 2000+ Excavations</p>
	<p><b>Chance</b>: (x / 2,500)%, where x is the amount of active spells.</p>
		" coords="3,523,56,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/LanternofGuidanceArtifact.png' align='middle'> Lantern of Guidance</b></p>
	<p><b>Hint</b>: Massive mana flows can offer guidance.</p>
	<p><b>Description</b>: Follow the guiding light, o wonderer, for it shall bring you fortune.</p>
	<p><b>Requirement</b>: R120+, Proof of Order</p>
	<p><b>Chance</b>: (x / 10,000,000,000 (10 B))%, where x is your Mana Regeneration.</p>
	<p><b>Effect</b>: Unlocks Tier 2 Temporal Flux</p>
		" coords="63,523,116,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/OilLampArtifact.png' align='middle'> Oil Lamp</b></p>
	<p><b>Hint</b>: Chaos magic burns brightly.</p>
	<p><b>Description</b>: Rub it, polish it. And remember to express your desires precisely, lest you want to face dire consequences.</p>
	<p><b>Requirement</b>: R120+, Proof of Chaos</p>
	<p><b>Chance</b>: (min(x, y, z) / 86,400,000 (86.4 M))%, where x is Fairy Chanting spell activity time, y is Hellfire Blast spell activity time, and z is Brainwave spell activity time (All Time).</p>
	<p><b>Effect</b>: Unlocks Tier 2 Maelstrom</p>
		" coords="123,523,176,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SparkofLifeArtifact.png' align='middle'> Spark of Life</b></p>
	<p><b>Hint</b>: The power of Creation may spark something new.</p>
	<p><b>Description</b>: The spark of Creation, dimly shining from the bottom of its encasing crystal.</p>
	<p><b>Requirement</b>: R120+, Proof of Balance</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 2 / 6,000)%, where x is the amount of Faction Coins collected this game.</p>
	<p><b>Effect</b>: Unlocks Tier 2 All Creation</p>
		" coords="183,523,236,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PlanetaryForceArtifact.png' align='middle'> Planetary Force</b></p>
	<p><b>Hint</b>: Try every day for better luck! Missing a day is the same as breaking a mirror, you know.</p>
	<p><b>Description</b>: Planets aligning seem to affect your realm in different ways...</p>
	<p><b>Requirement</b>: R100+</p>
	<p><b>Chance</b>: ((x ^ 2.5) / 5,000)%, where x is amount of consecutive days logged in.</p>
	<p><b>Effect</b>: Awards an upgrade with the same name.</p>
	<p><b>Effect</b>: Activates all Sun Force effects at once.</p>
	<p><b>Cost</b>: 100 Qi (1e20), A3+ Free</p>	
		" coords="243,523,296,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/MercenaryInsigniaArtifact.png' align='middle'> Mercenary Insignia</b></p>
	<p><b>Hint</b>: Gem rhabdomancy seems to work best.</p>
	<p><b>Description</b>: The infamous metal cross of the Mercenaries. You should be both proud and afraid to carry one.</p>
	<p><b>Requirement</b>: R160+, Mercenary Faction, Steel Plate and Black Sword artifacts</p>
	<p><b>Chance</b>: (floor(log10(1 + x) - 37) * 0.1)%, where x is the amount of gems owned.</p>
		" coords="303,523,356,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/ManaLoom.png' align='middle'> Mana Loom</b></p>
	<p><b>Hint</b>: Attracted by amassed mana reserves.</p>
	<p><b>Description</b>: Used to weave even the thinnest mana strings.</p>
	<p><b>Requirement</b>: R180+, Chaos Alignment</p>
	<p><b>Chance</b>: (log10(x) ^ 3 / 50,000)%, where x is the amount of Mana produced in this game.</p>
	<p><b>Effect</b>: Awards upgrade with same name.</p>
		" coords="363,523,416,576" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Factory.png' align='middle'> Factory</b></p>
	<p><b>Hint</b>: Dig it manually.</p>
	<p><b>Description</b>: Mass-production is the way to go.</p>
	<p><b>Requirement</b>: R180+, Neutral Alignment</p>
	<p><b>Chance</b>: (log10(x) ^ 3 / 10,000)%, where x is the amount of clicks made in this game.</p>
	<p><b>Effect</b>: Awards upgrade with same name.</p>
		" coords="3,583,56,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Mythos.png' align='middle'> Mythos</b></p>
	<p><b>Hint</b>: Spells get sad when not used for a long time.</p>
	<p><b>Description</b>: Accurate historical list of every existing or non-existing deity.</p>
	<p><b>Requirement</b>: R180+, Good Alignment</p>
	<p><b>Chance</b>: (x / 4,320,000 (4.32 M)%, where x is the activity time in this Reincarnation of your least used spell (excluding Share Benefits, Catalyst and Event spells).</p>
	<p><b>Effect</b>: Awards upgrade with same name.</p>
		" coords="63,583,116,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Vault.png' align='middle'> Vault</b></p>
	<p><b>Hint</b>: Show your prowess as a Royal Trader.</p>
	<p><b>Description</b>: Never a place could be more secure.</p>
	<p><b>Requirement</b>: R180+, Balance Alignment</p>
	<p><b>Chance</b>: (x / 100,000,000 (100 M))%, where x is Royal Exchange Bonus.</p>
	<p><b>Effect</b>: Awards upgrade with same name.</p>
		" coords="123,583,176,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Athanor.png' align='middle'> Athanor</b></p>
	<p><b>Hint</b>: Archemy.</p>
	<p><b>Description</b>: The legendary oven that could smelt souls into matter.</p>
	<p><b>Requirement</b>: R180+, Order Alignment</p>
	<p><b>Chance</b>: (x / 1,000,000 (1 M))%, where x is Alchemy research points.</p>
	<p><b>Effect</b>: Awards upgrade with same name.</p>
		" coords="183,583,236,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Battlefield.png' align='middle'> Battlefield</b></p>
	<p><b>Hint</b>: Would you think an army is enough to excavate this?</p>
	<p><b>Description</b>: An extremely accurate replica of a battle fought long ago.</p>
	<p><b>Requirement</b>: R180+, Evil Alignment</p>
	<p><b>Chance</b>: (log10(1 + x) ^ 3 / 20,000)%, where x is amount of assistants you own.</p>
	<p><b>Effect</b>: Awards an upgrade with same name</p>
		" coords="243,583,296,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/Apeiron.png' align='middle'> Apeiron</b></p>
	<p><b>Hint</b>: Be different.</p>
	<p><b>Description</b>: The source of everything. Can fit in the average pocket.</p>
	<p><b>Requirement</b>: R175+, Mercenary, 15 different Faction upgrades</p>
	<p><b>Chance</b>: 0.1%</p>
	<p><b>Effect</b>: Awards an upgrade with same name.</p>
		" coords="303,583,356,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/GlowingWingArtifact.png' align='middle'> Glowing Wing</b></p>
	<p><b>Hint</b>: Mana Wings!</p>
	<p><b>Description</b>: And this is why Fairies don't need torches.</p>
	<p><b>Requirement</b>: R220+, Fairy Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is Mana produced this game.</p>
		" coords="363,583,416,636" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SylvanMirrorArtifact.png' align='middle'> Sylvan Mirror</b></p>
	<p><b>Hint</b>: Pay a barber with Faction Coins.</p>
	<p><b>Description</b>: An Elf with messy hair is not an Elf, by their own laws.</p>
	<p><b>Requirement</b>: R220+, Elven Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is your Faction Coin find chance.</p>
		" coords="3,643,56,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/SolidCloudArtifact.png' align='middle'> Solid Cloud</b></p>
	<p><b>Hint</b>: A cloud of spells.</p>
	<p><b>Description</b>: Angels have the power to save your life! And make a backup of it on the internet.</p>
	<p><b>Requirement</b>: R220+, Angel Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (x / 40,000)%, where x is the amount of active spells (Active Spells count more multipliers <b>do not</b> count).</p>
		" coords="63,643,116,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/OrcFangNecklaceArtifact.png' align='middle'> Orc Fang Necklace</b></p>
	<p><b>Hint</b>: Torment your subjects with taxes.</p>
	<p><b>Description</b>: To remind your slaves who's in charge.</p>
	<p><b>Requirement</b>: R220+, Goblin Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is Tax Collection casts in this game.</p>
		" coords="123,643,176,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/BloodChaliceArtifact.png' align='middle'> Blood Chalice</b></p>
	<p><b>Hint</b>: Pour a bottle of Frenzy.</p>
	<p><b>Description</b>: The healthiest vampire breakfast.</p>
	<p><b>Requirement</b>: R220+, Undead Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is Blood Frenzy's duration (The duration when it was cast).</p>
		" coords="183,643,236,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DemonTailArtifact.png' align='middle'> Demon Tail</b></p>
	<p><b>Hint</b>: Evil wizardry.</p>
	<p><b>Description</b>: Said to bring great luck to whom it possess...es.</p>
	<p><b>Requirement</b>: R220+, Demon Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is Evil Spell Casts in this game.</p>
		" coords="243,643,296,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/FrozenLightningArtifact.png' align='middle'> Frozen Lightning</b></p>
	<p><b>Hint</b>: Lightning never strikes the same place a couple million times. Maybe.</p>
	<p><b>Description</b>: A sculpture representing the embodiment of Titanic power.</p>
	<p><b>Requirement</b>: R220+, Titan Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is Lightning Strike activity time in this game.</p>
		" coords="303,643,356,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/PrimalLeafArtifact.png' align='middle'> Primal Leaf</b></p>
	<p><b>Hint</b>: Huuuuge blue ball.</p>
	<p><b>Description</b>: Druid Catalyst for channeling the power of nature.</p>
	<p><b>Requirement</b>: R220+, Druid Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is the highest Maximum Mana in this Reincarnation.</p>
		" coords="363,643,416,696" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/TheBlackestInkArtifact.png' align='middle'> The Blackest Ink</b></p>
	<p><b>Hint</b>: Quality takes time.</p>
	<p><b>Description</b>: High-quality, freshly produced Faceless ink.</p>
	<p><b>Requirement</b>: R220+, Faceless Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is the longest game session this Reincarnation (but <b>not</b> this game).</p>
		" coords="3,703,56,756" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/DwarvenAnvilArtifact.png' align='middle'> Dwarven Anvil</b></p>
	<p><b>Hint</b>: Dwarven clicks!</p>
	<p><b>Description</b>: Every dwarven child is required to bring this to school every day.</p>
	<p><b>Requirement</b>: R235+, Dwarven Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) / 10,000)%, where x is your number of clicks in this Reincarnation.</p>
		" coords="63,703,116,756" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/StilettoHeelArtifact.png' align='middle'> Stiletto Heel</b></p>
	<p><b>Hint</b>: A drow trade.</p>
	<p><b>Description</b>: Drow make the most beautiful underground females.</p>
	<p><b>Requirement</b>: R235+, Drow Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is the number of Royal Exchanges you have.</p>
		" coords="123,703,176,756" shape="rect">
		<area research="
	<p><b><img src='http://musicfamily.org/realm/Factions/picks/EyeOfTheDragonArtifact.png' align='middle'> Eye Of The Dragon</b></p>
	<p><b>Hint</b>: Draconic Assistants.</p>
	<p><b>Description</b>: The ultimate thrill of the fight.</p>
	<p><b>Requirement</b>: R235+, Dragon Faction, 10,000+ Excavations</p>
	<p><b>Chance</b>: (log10(1 + x) / 10,000)%, where x is the highest amount of assistants you had in this Reincarnation.</p>
		" coords="183,703,236,756" shape="rect">
	</map>
<?php include "../scripts/footer.html"; ?>