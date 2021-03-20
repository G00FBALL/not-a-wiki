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
		<p><img src='http://musicfamily.org/realm/Factions/picks/Archeology-upgrade.png' align='middle'><b> Archeology Upgrade</b>.</p>
        <p><b>Upgrade Cost</b>: 100 Oc (1e29). To be bought once throughout the entire game and permanently unlocks an "Excavation" button which will appear on the left under the Upgrades tab.</p>
        <br>
        <p>To unlock the chance to find <b>Lore Artifacts</b>, it requires the</p>
        <p><img src='http://musicfamily.org/realm/Factions/picks/SurveyEquipment.png' align='middle'><b> Survey Equipment Upgrade</b>.</p>
        <p><b>Upgrade Cost</b>: 100 Dc (1e35) and at least 100 excavations. To be bought once throughout the entire game and does not show up as bought upgrade.</p>
        <hr>
		<p><b>Excavations</b></p>
        <p>The first excavation costs 1 Oc (1e27) coins, and each subsequent excavation costs without any cost multiplier reduction 20% more than the one before.</p>
        <p><b>Cost Formula for the x-th excavation</b>: (1e27 ^ (0.75 ^ A) * (1 + M ^ (x - 1)), where A is your Ascension and M the excavation cost multiplier.</p>
		<p>The <b>excavation cost multiplier</b> is equal to:<br>
		   - A0: (1 + 0.2 - C), where C is the sum of your flat cost reduction upgrades (such as DN8 or E290).<br>
		   - A1+: (1 + (0.2 - C) / (5 * A)), where C is the sum of your flat cost reduction upgrades and A is your Ascension.</p>
		<p>Everytime you excavate, you have a 35% (40% with 'That Excavated Quickly' upgrade) chance per excavation to find a certain amount of Faction Coins as reward.</p>
        <p><b>Faction Coin Reward Formula</b>: (1500 + 0.05 * (x-1) ^ 2.75), where x is the number of excavations you have.</p>
		<p></b>Note: Everytime you reincarnate or ascend, your excavation counter will be set back to zero.</p>
        <hr>
		<p><b>Excavation Reset</b></p>
		<p>To be able to do more excavations within a Reincarnation you can do an Excavation Reset, which also sets the counter back to zero. There are two options:<br>Ruby Reset and Free Reset.</p> 
        <p><b>Ruby Cost for Ruby Reset</b>: (floor(x / 3000) + 1), where x is the number of excavations.</p>
		<p><b>Note</b>: Not recommended. It is better to spend rubies in ruby power, unless you have very specific reason to spend them on a reset.<p>
        <p><b>Free Reset Requirement Formula</b>: (2000 + 50 * R + 500 * x), where R is the amount of Reincarantions and x is amount of Free Resets already done this Reincarnation.</p>
		<p><b>Note</b>: When doing a Free Reset, you will lose all gold on hand and receive a 90% production penalty until you abdicate or reincarnate.</p>
        <p><b>Note</b>: Free Resets are not available until around R30, since the requirement is too high for lower stages.</p>
        <p><b>Note</b>: Each ruby found from excavation is a single all-time reward. No matter how the counter is set back to zero, you cannot find the same ruby again.</p>
		<hr>
		<p><img src='http://musicfamily.org/realm/Factions/picks/QuestArtifacts.png' usemap="#QuestArtifacts-map"></p>
		<p><img src='http://musicfamily.org/realm/Factions/picks/LoreArtifacts.png' usemap="#LoreArtifacts-map"></p>
		<map name="QuestArtifacts-map">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncientStoneSlab1.png' align='middle'><b> Ancient Stoneslab 1</b></p>
		<p><b>Description</b>: We discovered an ancient stone slab written in old scriptures. It appears to say something about Halls of Legends.</p>
		<p><b>Requirements</b>: 5th Excavation</p>
		<p><b>Effect</b>: 1st clue required to unlock the Titan Alliance.</p>
		" coords="3,43,56,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FossilizedPieceofBark1.png' align='middle'><b> Fossilized Piece of Bark 1</b></p>
		<p><b>Description</b>: We discovered a fossilized piece of Bark with the image of a Faction Coin carved into it.</p>
		<p><b>Requirements</b>: 10th Excavation</p>
		<p><b>Effect</b>: 1st clue required to unlock the Druid Alliance.</p>
		" coords="63,43,116,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BoneFragment1.png' align='middle'><b> Bone Fragment 1</b></p>
		<p><b>Description</b>: We discovered a sundial shaped artefact, probably made of animal bones.</p>
		<p><b>Requirements</b>: 15th Excavation</p>
		<p><b>Effect</b>: 1st clue required to unlock the Faceless Alliance.</p>
		" coords="123,43,176,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncientStoneSlab2.png' align='middle'><b> Ancient Stoneslab 2</b></p>
		<p><b>Description</b>: We discovered an ancient stone slab written in old scriptures.We can recognize the number 300.</p>
		<p><b>Requirements</b>: 20th Excavation</p>
		<p><b>Effect</b>: 2nd clue required to unlock the Titan Alliance.</p>
		" coords="183,43,236,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FossilizedPieceofBark2.png' align='middle'><b> Fossilized Piece of Bark 2</b></p>
		<p><b>Description</b>: We discovered a fossilized piece of Bark with the symbol of One Million.</p>
		<p><b>Requirements</b>: 25th Excavation</p>
		<p><b>Effect</b>: 2nd clue required to unlock the Druid Alliance.</p>
		" coords="243,43,296,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BoneFragment2.png' align='middle'><b> Bone Fragment 2</b></p>
		<p><b>Description</b>: We discovered an artefact shaped like the number 36, probably made of animal bones.</p>
		<p><b>Requirements</b>: 30th Excavation</p>
		<p><b>Effect</b>: 2nd clue required to unlock the Faceless Alliance.</p>
		" coords="303,43,356,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/KeytotheLostCity.png' align='middle'><b> Key to the Lost City</b></p>
		<p><b>Description</b>: Despite being thousands of years old, it's still shiny.</p>
		<p><b>Requirements</b>: 1500th Excavation (total), R23+</p>
		<p><b>Effect</b>: Neutral Research</p>
		" coords="363,43,416,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncientDevice.png' align='middle'><b> Ancient Device</b></p>
		<p><b>Description</b>: This strange Device seems to react to the Ancient Races magical capabilities. We may channel its power to increase their research potential!</p>
		<p><b>Requirements</b>: Play a Neutral Faction and have over 2,000 excavations, Unique Building.</p>
		<p><b>Effect</b>: Provides 2 additional slots: 1 for each related Neutral Faction Facility you are playing.</p>
		<p><b>Chance</b>: 0.2% </p>
		<p><b>Cost</b>: 100 QiSxg (1e200)</p>
		<p><b>Alignment</b>: Neutral</p>
		<p><b>Note</b>: Has no effect R100+/A2</p>
		" coords="3,103,56,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/EarthCore.png' align='middle'><b> Earth Core</b></p>
		<p><b>Description</b>: This piece of rock is continuously shifting its shape, responding to mysterious energy sources.</p>
		<p><b>Requirements</b>: 2750th Excavation, R29+</p>
		<p><b>Effect</b>: Part of the Prestige research quest</p>
		" coords="63,103,116,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/HornoftheKings.png' align='middle'><b> Horn of the Kings</b></p>
		<p><b>Description</b>: It is said that when this horn is blown, the voices of past Dwarven Kings can be heard in the Wind.</p>
		<p><b>Requirements</b>: have Dwarven Forges, 3250+ Excavations (as Dwarf)</p>
		<p><b>Effect</b>: Unlocks Legacy of the Kings upgrade that adds 3 extra slots: 2 for Craftsmanship and 1 to the faction's facility you are playing</p>
		<p><b>Chance</b>: 0.5%</p>
		<p><b>Cost</b></b>: 10 SxSpg (1e232) and 100 M (1e8) Dwarven Coins</p>
		<p><b>Alignment</b>: Dwarf</p>
		" coords="123,103,176,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FlameofBondelnar.png' align='middle'><b> Flame of Bondelnar</b></p>
		<p><b>Description</b>: The magical azure flame of Bondelnar constantly emanates a silent, yet subtle, evil aura.</p>
		<p><b>Requirements</b>: Have Spider Sanctuaries (as Drow) Excavations: 3250+</p>
		<p><b>Effect</b>: Unlocks the upgrade The Dark Light of Bondelnar that adds 3 extra slots: 2 for Warfare and 1 to the faction's facility you are playing</p>
		<p><b>Chance</b>: 0.5%</p>
		<p><b>Cost</b>: 10 SxSpg (1e232), 100 M (1e8) Drow Coins</p>
		<p><b>Alignment</b>: Drow</p>
		" coords="183,103,236,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SpikyRoughEggArtifact.png' align='middle'><b> Spiky Rough Egg</b></p>
		<p><b>Description</b>: What a weird egg... it looks ages old, yet something alive is inside. Perhaps if you wait long enough, something will hatch?</p>
		<p><b>Requirements</b>: R46+, 1500 Excavations</p>
		<p><b>Effect</b>: Unlocks the Hatch! Egg</p>
		<p><b>Chance</b>: 2%</p>
		" coords="243,103,296,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ObsidianShardArtifact.png' align='middle'><b> Obsidian Shard</b></p>
		<p><b>Description</b>: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.</p>
		<p><b>Requirement</b>: 8000th Excavation, any Faction, R75+</p>
		<p><b>Effect</b>: Unlocks Secrets of the Warriors</p>
		" coords="303,103,356,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FirstIronFragment.png' align='middle'><b> First Iron Fragment</b></p>
		<p><b>Clue</b>: This one seems to require a lot of magical renewance.
		<p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Angel</p>
		<p><b>Chance</b>: (log10(1 + x) ^ 3 / 100,000)%, where x is your Mana Regeneration.</p>
		" coords="363,103,416,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SecondIronFragment.png' align='middle'><b> Second Iron Fragment</b></p>
		<p><b>Clue</b>: Found via extensive Royal Trading mandates.
		<p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Titan</p>
		<p><b>Chance</b>: (x ^ 3 / 5,000,000,000 (5 B))%, where x is the individual Royal Exchange bonus.</p>
		" coords="3,163,56,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ThirdIronFragment.png' align='middle'><b> Third Iron Fragment</b></p>
		<p><b>Clue</b>: Chances to find increase while not actively searching.</p>
		<p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Undead</p>
		<p><b>Chance</b>: ((log10(1 + x) - 2) ^ 3 / 500,000)%, where x is offline bonus.</p>
		" coords="63,163,116,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FirstCrystalFragment.png' align='middle'><b> First Crystal Fragment</b></p>
		<p><b>Clue</b>: Assistants will lead the way.</p>
		<p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Fairy</p>
		<p><b>Chance</b>: (x / 100,000,000,000 (100 B))%, where x is assistant count (including temporary assistants).</p>
		" coords="123,163,176,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SecondCrystalFragment.png' align='middle'><b> Second Crystal Fragment</b></p>
		<p><b>Clue</b>: Are Faction Coins attracted to glass?</p>
		<p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Faceless</p>
		<p><b>Chance</b>: (log10(1 + x) ^ 3 / 2,500,000 (2.5 M))%, where x is Faction Coins this game.</p>
		" coords="183,163,236,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ThirdCrystalFragment.png' align='middle'><b> Third Crystal Fragment</b></p>
		<p><b>Clue</b>: Also acts as a spell catalyst.</p>
		<p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Demon</p>
		<p><b>Chance</b>: (x / 50,000,000 (50 M))%, where x is evil spells this Reincarnation.</p>
		" coords="243,163,296,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FirstStoneFragment.png' align='middle'><b> First Stone Fragment</b></p>
		<p><b>Clue</b>: Click to Carve.</p>
		<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
		<p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Elf</p>
		<p><b>Chance</b>: (log10(1 + x) ^ 3 / 20,000)%, where x is the amount of clicks made this game.</p>
		" coords="303,163,356,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SecondStoneFragment.png' align='middle'><b> Second Stone Fragment</b></p>
		<p><b>Clue</b>: Stone to stone, buildings to buildings.</p>
		<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Druid</p>
		<p><b>Chance</b>: (x / 20,000,000 (20 M))%, where x is amount of buildings.</p>
		" coords="363,163,416,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ThirdStoneFragment.png' align='middle'><b> Third Stone Fragment</b></p>
		<p><b>Clue</b>: Might be collected with taxes.</p>
		<p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
		<p><b>Requirements</b>: R125+, 12,500+ Excavations, Play as Goblin</p>
		<p><b>Chance</b>: (log10(1 + x) ^ 3 / 125,000)%, where x is Tax Collections cast this game.</p>
		" coords="3,223,56,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ObsidianCrown.png' align='middle'><b> Obsidian Crown</b></p>
		<p><b>Clue</b>: Only the wisest turns over the same stone twice. Or more.</p>
		<p><b>Description</b>: The legendary Black Crown of the Mercenary Lord. Some words are engraved into the inner circle at its base: &quot;Aran en Ilya, Silas en Quenta&quot;.</p>
		<p><b>Requirements</b>: R170+, play as Mercenary, 10 excavation resets (This game)</p>
		<p><b>Effect</b>: Unlocks Mercenary Union Contract</p>
		<p><b>Chance</b>: ((x - 10) / 1,000)%, x is the number of free and ruby excavation resets (This game)</p>
		" coords="63,223,116,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ForgottenRelic.png' align='middle'><b> Forgotten Relic</b></p>
		<p><b>Clue</b>: Research it!</p>
		<p><b>Description</b>: Intricate leylines of mana cover the surface of this stone, moving and flailing endlessly to create ever-different patterns.</p>
		<p><b>Requirement</b>: R175+</p>
		<p><b>Chance</b>: (x ^ 2 / 100,000,000,000 (100 B))%, where x is spent Research budget.</p>
		<p><b>Effect</b>: Unlocks Research Facility upgrades</p>
		<p><b>Note</b>: Each Facility needs their respective artifact and this artifact to get their respective upgrade.</p>
		" coords="123,223,176,276" shape="rect">
		</map>
		<map name="LoreArtifacts-map">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/RoughStone.png' align='middle'><b> Rough Stone</b></p>
		<p><b>Clue</b>: A first-time only discovery.</p>
		<p><b>Description</b>: A common, totally uninteresting stone.</p>
		<p><b>Effect</b>: Unlocks Research D290</p>
		<p><b>Chance</b>: 2% On the first excavation of a run, after abdication or reincarnation.</p>
			" coords="3,43,56,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ScarabofFortune.png' align='middle'><b> Scarab of Fortune</b></p>
		<p><b>Clue</b>: Rarely found in the pyramids of old.</p>
		<p><b>Description</b>: You found the rarest of relics. This golden scarab will grant you 7 days of good luck, starting from now. Make good use of it.</p>
		<p><b>Effect</b>: Awards an upgrade of the same name that increases the production of all buildings by 0.1% for each trophy you unlocked.</p>
		<p><b>Chance</b>: (x / 1,000)%, where x is the amount of Ancient Pyramids you own.</p>
		<p><b>Cost</b>: 7 Td (7e42)</p>
			" coords="63,43,116,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ChocolateCookie.png' align='middle'><b> Chocolate Cookie</b></p>
		<p><b>Clue</b>: Excavated commonly in all areas.</p>
		<p><b>Description</b>: Found in a wasteland made of cakes and sweets, snatched from the hands of an old woman.</p>
		<p><b>Chance</b>: (x / 50)%, where x is the your Excavation count.</p>
			" coords="123,43,176,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FossilizedRodent.png' align='middle'><b> Fossilized Rodent</b></p>
		<p><b>Clue</b>: Hello, mouse.</p>
		<p><b>Description</b>: What's this, a prehistoric mouse...?</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increase clicking reward based on the amount of artifacts you discovered.</p>
		<p><b>Formula</b>: (10 * x)%, where x is number of artifacts you discovered.</p>
		<p><b>Chance</b>: (x / 5,000,000 (5 M))%, where x is the amount of clicks made in this Reincarnation.</p>
		<p><b>Cost</b>: 100 Qid (1e50)</p>
			" coords="183,43,236,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/PowerOrb.png' align='middle'><b> Power Orb</b></p>
		<p><b>Clue</b>: Attracted by massive concentration of mana.</p>
		<p><b>Description</b>: Throbbing with Arcane Power</p>
		<p><b>Requirement</b>: 3000+ Maximum Mana</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Multiplicatively increases Mana Regeneration by 2.5%.</p>
		<p><b>Chance</b>: (x / 15,000)%, where x is your Maximum Mana.</p>
		<p><b>Cost</b>: 1 QaVg (1e75), A1+: Free</p>
			" coords="243,43,296,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/PinkCarrot.png' align='middle'><b> Pink Carrot</b></p>
		<p><b>Clue</b>: Found randomly in the Farms.</p>
		<p><b>Description</b>: The main product of properly nurtured Farms.</p>
		<p><b>Requirement</b>: Play as Fairy (Not Dwarf)</p>
		<p><b>Chance</b>: (x / 5,000)%, where x is the amount of Farms you own.</p>
			" coords="303,43,356,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BottledVoice.png' align='middle'><b> Bottled Voice</b></p>
		<p><b>Clue</b>: Can be captured when Chanting.</p>
		<p><b>Description</b>: The essence of a melodic Fairy voice.</p>
		<p><b>Requirement</b>: Play as Fairy (Not Dwarf)</p>
		<p><b>Chance</b>: (x / 40,000)%, where x is the is the amount of Fairy Chantings cast this game.</p>
			" coords="363,43,416,96" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/LuckyClover.png' align='middle'><b> Lucky Clover</b></p>
		<p><b>Clue</b>: Requires extreme amounts of luck!</p>
		<p><b>Description</b>: A perfectly shaped four leaf clover. Each leaf is almost unnaturally identical to the other three.</p>
		<p><b>Requirement</b>: Play as Elven (Not Dwarf)</p>
		<p><b>Chance</b>: (x - 1) * 50)%, where x is the highest number of consecutive Elven Lucks.</p>
			" coords="3,103,56,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Mini-treasure.png' align='middle'><b> Mini-treasure</b></p>
		<p><b>Clue</b>: Click your way to the treasure!</p>
		<p><b>Description</b>: It's a small perfect replica of our gold-filled treasure.</p>
		<p><b>Requirement</b>: Play as Elven (Not Dwarf)</p>
		<p><b>Chance</b>: (x / 3,000,000 (3 M))%, where x is the amount of clicks made this game.</p>
			" coords="63,103,116,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Pillarfragment.png' align='middle'><b> Pillar Fragment</b></p>
		<p><b>Clue</b>: May fall from the Heavens.</p>
		<p><b>Description</b>: A tiny piece of the legendary pillars which sustain all the Heavens.</p>
		<p><b>Requirement</b>: Play as Angel (Not Dwarf)</p>
		<p><b>Chance</b>: (x / 3,750)%, where x is the amount of Heaven's Gates you own.</p>
			" coords="123,103,176,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DivineSword.png' align='middle'><b> Divine Sword</b></p>
		<p><b>Clue</b>: Only found by dedicated Angel allies.</p>
		<p><b>Description</b>: The shining golden sword of an Archangel. Its hilt feels pleasantly warm to the pure of heart and burning hot for the villain.</p>
		<p><b>Requirement</b>: Play as Angel (Not Dwarf), 3+ consecutive Angels runs (This R). Even just buying the Angels Trade Treaty counts towards this artifact.</p>
		<p><b>Chance</b>: (x / 60)%, where x is the amount of consecutive times affiliated with Angels this Reincarnation.</p>
			" coords="183,103,236,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncientCoinPiece.png' align='middle'><b> Ancient Coin Piece</b></p>
		<p><b>Clue</b>: Rarely found among other special coins.</p>
		<p><b>Description</b>: A common goblin lucky charm. The older it is, the luckier you are, or so they say.</p>
		<p><b>Requirement</b>: Play as Goblin (Not Drow)</p>
		<p><b>Chance</b>: (x / 50,000,000 (50 M))%, where x is the amount of Faction Coins found this Reincarnation.</p>
			" coords="243,103,296,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/GoblinPurse.png' align='middle'><b> Goblin Purse</b></p>
		<p><b>Clue</b>: Fill your pockets with extorted money.</p>
		<p><b>Description</b>: Heavy and roomy. Definitely too big for just pocket change.</p>
		<p><b>Requirement</b>: Play as Goblin (Not Drow)</p>
		<p><b>Chance</b>: (x / 300,000)%, where x is Tax collections cast this game.</p>
			" coords="303,103,356,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/RottenOrgan.png' align='middle'><b> Rotten Organ</b></p>
		<p><b>Clue</b>: Found among large masses of dead bodies.</p>
		<p><b>Description</b>: Ew... disgusting. It still pulses.</p>
		<p><b>Requirement</b>: Play as Undead (Not Drow)</p>
		<p><b>Chance</b>: (x / 500)%, where x is the amount of assistants you own.</p>
			" coords="363,103,416,156" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/JawBone.png' align='middle'><b> Jaw Bone</b></p>
		<p><b>Clue</b>: Needs some time off.</p>
		<p><b>Description</b>: A jaw, missing more than half of its teeth.</p>
		<p><b>Requirement</b>: Play as Undead (Not Drow), 24h+ offline time (this Reincarnation)</p>
		<p><b>Chance</b>: (x / 864,000)%, where x is offline time in seconds this Reincarnation.</p>
			" coords="3,163,56,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DemonicFigurine.png' align='middle'><b> Demonic Figurine</b></p>
		<p><b>Clue</b>: Look for the trophies of the beast.</p>
		<p><b>Description</b>: An intricate figurine representing the evil face of a lesser demon.</p>
		<p><b>Requirement</b>: Play as Demon (Not Drow), 666+ Trophies unlocked.</p>
		<p><b>Chance</b>: 1%</p>
			" coords="63,163,116,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DemonHorn.png' align='middle'><b> Demon Horn</b></p>
		<p><b>Clue</b>: Only found by dedicated Demon allies.</p>
		<p><b>Description</b>: Still blazing with the flames of Hell. Handle with care.</p>
		<p><b>Requirement</b>: Play as Demon (Not Drow), 3+ consecutive Demon runs (This R). Even just buying the Demons Trade Treaty counts towards this artifact.</p>
		<p><b>Chance</b>: (x / 60)%, where x is the amount of consecutive times affiliated with Demons this Reincarnation.</p>
			" coords="123,163,176,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/HugeTitanStatue.png' align='middle'><b> Huge Titan Statue</b></p>
		<p><b>Clue</b>: Struck by the lightning.</p>
		<p><b>Description</b>: The granite representation of a giant wielding a lightning bolt in its fist. A foot appears to be missing.</p>
		<p><b>Requirement</b>: Play as Titan (Not Dragon)</p>
		<p><b>Chance</b>: (x / 1,000)%, where x is Lightning Strike casts this game.</p>
			" coords="183,163,236,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/TitanShield.png' align='middle'><b> Titan Shield</b></p>
		<p><b>Clue</b>: Don't fret it.</p>
		<p><b>Description</b>: A gargantuan metal shield, twice as tall as a common human.</p>
		<p><b>Requirement</b>: Play as Titan (Not Dragon), 10h+ playtime (This game)</p>
		<p><b>Chance</b>: (x / 180,000)%, where x is time played in this game.</p>
			" coords="243,163,296,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/GlyphTable.png' align='middle'><b> Glyph Table</b></p>
		<p><b>Clue</b>: Balance your buildings.</p>
		<p><b>Description</b>: Contains all the secrets of the Druidic Alphabet.</p>
		<p><b>Requirement</b>: Play as Druid (Not Dragon), same amount of each building tier</p>
		<p><b>Chance</b>: 2%</p>
			" coords="303,163,356,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/StoneOfBalance.png' align='middle'><b> Stone of Balance</b></p>
		<p><b>Clue</b>: A Grand Balance performance.</p>
		<p><b>Description</b>: A carved stone hovering above its pedestal.</p>
		<p><b>Requirement</b>: Play as Druid (Not Dragon)</p>
		<p><b>Chance</b>: (x / 30,000)%, where x is Grand Balance casts this game.</p>
			" coords="363,163,416,216" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/TranslucentGoo.png' align='middle'><b> Translucent Goo</b></p>
		<p><b>Clue</b>: Byproduct of the Brain.</p>
		<p><b>Description</b>: A completely odorless sticky substance with a diaphanous, unsettling glow.</p>
		<p><b>Requirement</b>: Play as Faceless (Not Dragon)</p>
		<p><b>Chance</b>: (x / 400)%, where x is Brainwave casts this game</p>
			" coords="3,223,56,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Octopus-shapedHelmet.png' align='middle'><b> Octopus-shaped Helmet</b></p>
		<p><b>Clue</b>: Found in the Labyrinths.</p>
		<p><b>Description</b>: A large helmet with empty metal prongs to accomodate tentacular appendages.</p>
		<p><b>Requirement</b>: Play as Faceless (Not Dragon)</p>
		<p><b>Chance</b>: (x / 2,000)%, where x is the amount of Labyrinths you own.</p>
			" coords="63,223,116,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DwarvenBow.png' align='middle'><b> Dwarven Bow</b></p>
		<p><b>Clue</b>: Click to throw.</p>
		<p><b>Description</b>: Actually a heavy throwing hammer.</p>
		<p><b>Requirement</b>: Play as Dwarves</p>
		<p><b>Chance</b>: (x / 25,000)%, where x is the amount of clicks made in this game.</p>
			" coords="123,223,176,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/StoneTankard.png' align='middle'><b> Stone Tankard</b></p>
		<p><b>Clue</b>: Found in the Inns.</p>
		<p><b>Description</b>: A very heavy mug for drinking the heaviest beers.</p>
		<p><b>Requirement</b>: Play as Dwarves</p>
		<p><b>Chance</b>: (x / 25,000)%, where x is the amount of Inns you own.</p>
			" coords="183,223,236,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/CeremonialDagger.png' align='middle'><b> Ceremonial Dagger</b></p>
		<p><b>Clue</b>: Avoid hurting your fingers.</p>
		<p><b>Description</b>: Its blade is unnaturally keen and sharp.</p>
		<p><b>Requirement</b>: Play as Drow, 0 Treasure clicks this Game (this includes automatic clicks)</p>
		<p><b>Chance</b>: 2%</p>
			" coords="243,223,296,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ArachnidFigurine.png' align='middle'><b> Arachnid Figurine</b></p>
		<p><b>Clue</b>: Embrace Evil. For a while.</p>
		<p><b>Description</b>: If you are afraid of spiders, Drow aren't your faction.</p>
		<p><b>Requirement</b>: Play as Drow, 24h+ Evil Playtime (All-time)</p>
		<p><b>Chance</b>: (x / 4,320,000 (4.32 M))%, where x is All-time Evil playtime in seconds.</p>
			" coords="303,223,356,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SteelPlate.png' align='middle'><b> Steel Plate</b></p>
		<p><b>Clue</b>: Legacy from 50 generations ago.</p>
		<p><b>Description</b>: A full plate made of hardened steel.</p>
		<p><b>Requirement</b>: R5+, Play as Mercenaries</p>
		<p><b>Chance</b>: (x / 50)%, where x is the amount of Reincarnation you made.</p>
			" coords="363,223,416,276" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BlackSword.png' align='middle'><b> Black Sword</b></p>
		<p><b>Clue</b>: Only found by really, really dedicated Mercenary allies.</p>
		<p><b>Description</b>: A long sword with an extremely sharp blade made of dark metal.</p>
		<p><b>Requirement</b>: Play as Mercenaries, at least 100 Mercenary affiliations (All-time)</p>
		<p><b>Chance</b>: (x / 60,000)%, where x is All-time Mercenary playtime in seconds.</p>
			" coords="3,283,56,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DragonFangArtifact.png' align='middle'><b> Dragon Fang</b></p>
		<p><b>Clue</b>: Found in the Wyrm Dens.</p>
		<p><b>Description</b>: This huge fang can barely fit in the hands of a Titan.</p>
		<p><b>Requirement</b>: R50+, play as Dragons</p>
		<p><b>Chance</b>: (x / 400,000)%, where x is the amount of Iron Strongholds you own.</p>
			" coords="63,283,116,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DragonSoulArtifact.png' align='middle'><b> Dragon Soul</b></p>
		<p><b>Clue</b>: Take five deep breaths.</p>
		<p><b>Description</b>: The extracted soul from an ancient dragon, wields the power to end the world in an instant. Also makes a good soup ingredient.</p>
		<p><b>Requirement</b>: R50+, play as Dragons, have 5 different Dragon Breath effects active simultaneously.</p>
		<p><b>Chance</b>: (x / 200,000)%, where x is Dragon's Breath casts this game.</p>
			" coords="123,283,176,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/VanillaFlavorJuice.png' align='middle'><b> Vanilla Flavor Juice</b></p>
		<p><b>Clue</b>: Quickly!</p>
		<p><b>Description</b>: An essence from extremely savory vanilla beans.</p>
		<p><b>Requirement</b>: R16+, play a Vanilla Faction, first 5 minutes of the game</p>
		<p><b>Chance</b>: 20%</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increase the production of all buildings by 2,500% for the first 25 minutes (this game) for all Vanilla factions. Does not work while offline.</p>
		<p><b>Cost</b>: 1 coin</p>
		<p><b>Note</b>: Effect is nullified if you affiliate with Prestige.</b>
			" coords="183,283,236,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncientCocoaBeanArtifacts.png' align='middle'><b> Ancient Cocoa Bean</b></p>
		<p><b>Clue</b>: True Neutral Flavor.</p>
		<p><b>Description</b>: Despite being centuries old, it still smells like top-quality cocoa.</p>
		<p><b>Requirement</b>: R22+, play a Neutral Faction</p>
		<p><b>Chance</b>: 10%</p>
		<p><b>Effect</b>: Awards an upgrade named Chocolate Flavor Smoothie.</p>
		<p><b>Effect</b>: Increase the production of all buildings by 2,500% for the first 15 minutes (this game) for all Neutral factions. Does not work while offline.</p>
		<p><b>Cost</b>: 1 coin</p>
		<p><b>Note</b>: Effect is nullified if you affiliate with Prestige.</b>

			" coords="243,283,296,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPartI.png' align='middle'><b> Know Your Enemy, Part I</b></p>
		<p><b>Clue</b>: A true Mercenary should learn by all other cultures.</p>
		<p><b>Description</b>: All the knowledge you need, stored in a handy book.</p>
		<p><b>Requirement</b>: R12+, Play as Mercenary, have upgrades from all 11 Factions.</p>    
		<p><b>Chance</b>: 10%</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increases the production of all buildings based on time spent as Non-Mercenary (All Time 'Time spent' with Factions in the stats). Only available to Mercenaries.</p>
		<p><b>Formula</b>: (0.75 * x ^ 0.6)%, where x is time spent as non-mercenary factions in seconds (All Time).</p>
		<p><b>Cost</b>: 100 Vg (1e65)</p>
			" coords="303,283,356,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/VoodooDoll.png' align='middle'><b> Voodoo Doll</b></p>
		<p><b>Clue</b>: Found in the Witch Conclaves.</p>
		<p><b>Description</b>: You are now CURSED! And you feel a sting in your lower rear.</p>
		<p><b>Requirement</b>: R16+, Evil Alignment</p>
		<p><b>Chance</b>: (x / 10,000)%, where x is the amount of Witch Conclaves you own.</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increase the production of all building by 0.1% for each trophy you have unlocked.</p>
		<p><b>Cost</b>: 20 Qig (2e154)</p>
			" coords="363,283,416,336" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/WallFragment.png' align='middle'><b> Wall Fragment</b></p>
		<p><b>Clue</b>: Ascension...</p>
		<p><b>Description</b>: A fragment of an utterly and completely unbreakable wall. Enjoy your paradox.</p>
		<p><b>Requirement</b>: R40+</p>
		<p><b>Chance</b>: 10%</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
		<p><b>Formula</b>: (3 * (2 * (11 - T)) ^ 3)%, where T is building tier.</p>
		<p><b>Cost</b>: 1 M (1e6)</p>
			" coords="3,343,56,396" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FortuntTellerMachineArtifact.png' align='middle'><b> Fortune Teller Machine</b></p>
		<p><b>Clue</b>: Don't choose your allies until you know more.</p>
		<p><b>Description</b>: Will tell you 1 of 24 statements at random.</p>
		<p><b>Requirement</b>: Not affiliated with any Faction</p>
		<p><b>Chance</b>: 0.1%</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Upgrade Requirement</b>: R40+</p>
		<p><b>Effect</b>: Increase the production of Non-Unique buildings based on time spent in this Reincarnation.</p>
		<p><b>Formula</b>: (6.5 * x ^ 0.65)%, where x is time spent in this Reincarnation in seconds.</p>
		<p><b>Cost</b>: 100 Qi (1e20), A2+ Free</p>
			" coords="63,343,116,396" shape="rect">
			<area target="_blank" href="http://musicfamily.org/realm/SunForce/" research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DawnstoneArtifact.png' align='middle'><b> Dawnstone</b></p>
		<p><b>Clue</b>: Relic of the Dawn hours.</p>
		<p><b>Description</b>: Only found during sunrise hours. Emits a faint glow.</p>
		<p><b>Requirement</b>: R16+, excavate between 5:00am and 8:00am (Your local time)</p>
		<p><b>Effect</b>: With Both the Dawnstone and Duskstone artifacts, awards the Sun Force upgrade.</p>
		<p><b>Effect</b>: Grants different effects based on time of the day.</p>
		<p><b>Chance</b>: (x / 10,000)%, where x is your Excavation count.</p>
		<p><b>Note</b>: Click image for details</p>
			" coords="123,343,176,396" shape="rect">
			<area target="_blank" href="http://musicfamily.org/realm/SunForce/" research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DuskstoneArtifact.png' align='middle'><b> Duskstone</b></p>
		<p><b>Clue</b>: Relic of the Dusk hours.</p>
		<p><b>Description</b>: Only found during sunset hours. Absorbs light in a small radius.</p>
		<p><b>Requirement</b>: R16+, excavate between 6:00pm and 9:00pm (Your local time)
		<p><b>Effect</b>: With Both the Dawnstone and Duskstone artifacts, awards the Sun Force upgrade.</p>
		<p><b>Effect</b>: Grants different effects based on time of the day.</p>
		<p><b>Chance</b>: (x / 10,000)%, where x is your Excavation count.</p>
		<p><b>Note</b>: Click image for details</p>
			" coords="183,343,236,396" shape="rect">
			<area target="_blank" href="http://musicfamily.org/realm/Lineages/#LineageCost" research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncientHeirloomTrophy.png' align='middle'><b> Ancient Heirloom</b></p>
		<p><b>Clue</b>: Relic of the Lineage.</p>
		<p><b>Description</b>: Passed down countless generations.</p>
		<p><b>Requirements</b>: Have at least 1 Lineage level purchased.</p>
		<p><b>Chance</b>: (Total Lineage levels / 20)%</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Reduces the cost of Lineages Levels (except for the highest one).</p>
		<p><b>Formula</b>: (Lineage Level Cost ^ 0.9).</p>
		<p><b>Cost</b>: 10 Dtg (1e100), A2+ Free</p>
		<p><b>Note</b>: Click image for details</p>
			" coords="243,343,296,396" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPart2.png' align='middle'><b> Know Your Enemy, Part II</b></p>
		<p><b>Clue</b>: Even an expert Mercenary should learn by all other cultures.</p>
		<p><b>Description</b>: Much more knowledge than you need, stored in a handy book.</p>
		<p><b>Requirement</b>: R75+, Mercenary Unique Building, have upgrades from all 12 Factions.</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increases the production of all buildings based on time spent as Non-Mercenary (All Time 'Time spent' with Factions in the stats). Only available to Mercenaries.</p>
		<p><b>Formula</b>: (0.065 * x ^ 0.65)%, where x is time spent as non-mercenary factions in seconds (All Time).</p>
		<p><b>Chance</b>: 5%</p>
		<p><b>Cost</b>: 100 Noqag (1e152)</p>
			" coords="303,343,356,396" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/VeteranFigurineArtifact.png' align='middle'><b> Veteran Figurine</b></p>
		<p><b>Clue</b>: A reward for the veteran challenger.</p>
		<p><b>Description</b>: The warrior of a thousand battles, ultimate champion of the Realms.</p>
		<p><b>Requirement</b>: R90+, Dragon Challenge 6</p>
		<p><b>Chance</b>: (x / 1,000,000)%, where x is time spent in this game in seconds.</p>
		<p><b>Effect</b>: Passive effect: allows Mercenaries to benefit from all faction challenges of your primary alignment.</p>
		<p><b>Note</b>: Does not grant elite challenges.</p>

			" coords="363,343,416,396" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/WallChunckArtifact.png' align='middle'><b> Wall Chunk</b></p>
		<p><b>Clue</b>: More Ascension...</p>
		<p><b>Description</b>: A bigger piece of the infamous Ascension Wall.</p>
		<p><b>Requirement</b>: R100+</p>
		<p><b>Chance</b>: 10%</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
		<p><b>Formula</b>: (30,000 * (11 - T) ^ 3.5)%, where T is building tier.</p>
		<p><b>Cost</b>: 1 Sx (1e21), A3+ Free</p>
			" coords="3,403,56,456" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ExcavatedMirageArtifact.png' align='middle'><b> Excavated Mirage</b></p>
		<p><b>Clue</b>: Raise your chances.</p>
		<p><b>Description</b>: You know all too well this does not exist, yet it fills you with hope and optimism.</p>
		<p><b>Requirement</b>: R100+</p>
		<p><b>Chance</b>: (log10(x) / 100)%, where x is your Faction Coin find chance.</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Increase Faction Coin find chance by a multiplicative 200%.</p>
		<p><b>Cost</b>: 1 Sx (1e21), A3+ Free</p>
			" coords="63,403,116,456" shape="rect">
			<area target="_blank" href="http://musicfamily.org/realm/Lineages/#LineageCost" research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png' align='middle'><b> Ancestral Hourglass</b></p>
		<p><b>Clue</b>: Really, raise your chances.</p>
		<p><b>Description</b>: The silver sands contained within seem to never stop flowing.</p>
		<p><b>Requirement</b>: R100+</p>
		<p><b>Chance</b>: (x / 5,000,000,000,000,000 (5 QA))%, where x your Faction Coin find chance.</p>
		<p><b>Effect</b>: Awards an upgrade of the same name.</p>
		<p><b>Effect</b>: Lowers Lineage cost exponent based on Reincarnations made.</p>
		<p><b>Formula</b>: (0.01 * R), R is Reincarnations made (NOT affected by invisible bonuses to R count).</p>
		<p><b>Cost</b>: 1 Novg (1e90), A3+ Free</p>
		<p><b>Note</b>: Click image for details</p>
			" coords="123,403,176,456" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SilkClothArtifact.png' align='middle'><b> Silk Cloth</b></p>
		<p><b>Clue</b>: Found in the Swarming Towers.</p>
		<p><b>Description</b>: The purest silk made for Fairies, by Fairies, of Fairies.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Fairy, Pink Carrot and Bottled Voice artifacts.</p>
		<p><b>Chance</b>: ((x - 8,000) / 200,000)%, where x is the amount of Wizard Towers you own (Building count multipliers <b>do not</b> count).</p>
			" coords="183,403,236,456" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/RawEmeraldArtifact.png' align='middle'><b> Raw Emerald</b></p>
		<p><b>Clue</b>: Not found on the first Excavation round.</p>
		<p><b>Description</b>: Just slightly less precious than a raw Ruby.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Elven, Lucky Clover and Mini-treasure artifacts.</p>
		<p><b>Chance</b>: (((3 * x) ^ 4.5) / 10,000)%, where x is free and ruby excavation resets (this game).</p>
			" coords="243,403,296,456" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FossilizedWingArtifact.png' align='middle'><b> Fossilized Wing</b></p>
		<p><b>Clue</b>: Angels may fall after a long time.</p>
		<p><b>Description</b>: The remains of an Angel fallen to earth.</p>
		<p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Angel, Pillar Fragment and Divine Sword artifacts.</p>
		<p><b>Chance</b>: (x / 25,920,000 (25.92 M))%, where x time spent with Angels (All Time) in seconds.</p>
			" coords="303,403,356,456" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SpikedWhipArtifact.png' align='middle'><b> Spiked Whip</b></p>
		<p><b>Clue</b>: Used by the overseers in the Slave Markets.</p>
		<p><b>Description</b>: Use with caution. You do not want to exterminate all your slaves.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Goblin, Ancient Coin Piece and Goblin Purse artifacts.</p>
		<p><b>Chance</b>: ((x - 8,000) / 300,000)%, where x is the amount of Slave Pens you own (Building count multipliers <b>do not</b> count).</p>
			" coords="363,403,416,456" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DustyCoffinArtifact.png' align='middle'><b> Dusty Coffin</b></p>
		<p><b>Clue</b>: Quick! Quick! You have no time to waste!</p>
		<p><b>Description</b>: Sealed since forever, yet you can hear a strange noise from within.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Undead, Rotten Organ and Jaw Bone artifacts.</p>
		<p><b>Chance</b>: (1 / (30 + x ^ 1.5))%, where x is time spent this game in seconds.</p>
			" coords="3,463,56,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/CrystallizedLavaArtifact.png' align='middle'><b> Crystallized Lava</b></p>
		<p><b>Clue</b>: Found in the Burning Abysses.</p>
		<p><b>Description</b>: Incandescent but still. Can be used efficiently as a desk lamp.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Demon, Demonic Figurine and Demon Horn artifacts</p>
		<p><b>Chance</b>: ((x - 8,000) / 200,000)%, where x is the amount of Hall of Legends you own (Building count multipliers <b>do not</b> count).</p>
			" coords="63,463,116,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png' align='middle'><b> Titan Helmet</b></p>
		<p><b>Clue</b>: Found in the trade route used for Exchanges.</p>
		<p><b>Description</b>: Made of enough metal to craft a human-sized full plate.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Titan, Huge Titan Statue and Titan Shield artifacts.</p>
		<p><b>Chance</b>: ((x ^ 2) / 1,500,000,000 (1.5B))%, where x is Royal Exchanges (Royal Exchange count multipliers <b>do not</b> count).</p>
			" coords="123,463,176,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BranchoftheLifeTreeArtifact.png' align='middle'><b> Branch of the Life Tree</b></p>
		<p><b>Clue</b>: Found in the remains of druidic ancestors.</p>
		<p><b>Description</b>: Despite being torn from its source tree, it keeps growing buds and leaves.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Druid, Glyph Table and Stone of Balance artifacts.</p>
		<p><b>Chance</b>: ((x ^ 3) / 2,000,000 (2M))%, where x is level of Druid Lineage.</p>
			" coords="183,463,236,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/NightmareFigmentArtifact.png' align='middle'><b> Nightmare Figment</b></p>
		<p><b>Clue</b>: A strong and quick brain is required.</p>
		<p><b>Description</b>: An unshaped, ephemeral substance which is politely trying to corrupt your mind.</p>
		<p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Faceless, Translucent Goo and Octupus-shaped Helmet artifacts.</p>
		<p><b>Chance</b>: ((x ^ 1.5) / 20,000,000 (20M))%, where x is Brainwave's headstart time in seconds.</p>
			" coords="243,463,296,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BeardHair.png' align='middle'><b> Beard Hair</b></p>
		<p><b>Clue</b>: It requires a lot of beard samples to get the perfect hair.</p>
		<p><b>Description</b>: Hopefully coming from a real dwarven beard.</p>
		<p><b>Requirement</b>: R116+, 2000+ Excavations, Play as Dwarf, Stone Tankard and Dwarven Bow artifacts.</p>
		<p><b>Chance</b>: (x / 1,000,000,000 (1 B))%, where x is the amount of assistant you own (including temporary assistants).</p>
			" coords="303,463,356,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/PoisonVial.png' align='middle'><b> Poison Vial</b></p>
		<p><b>Clue</b>: Combo your way through.</p>
		<p><b>Description</b>: One drop of this is enough to fell thousands of non-immune creatures.</p>
		<p><b>Requirement</b>: R116+, 2000+ Excavations, Play as Drow, Ceremonial Dagger and Arachnid Figurine artifacts.</p>
		<p><b>Chance</b>: ((40 * x ^ 0.9) / 10,000,000 (10 M))%, where x is combo strike counter.</p>
			" coords="363,463,416,516" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DragonScale.png' align='middle'><b> Dragon Scale</b></p>
		<p><b>Clue</b>: Usually found when a lot of magic is lingering.</p>
		<p><b>Description</b>: Very high on the realms' most accurate hardiness rankings.</p>
		<p><b>Requirement</b>: R116+, 2000+ Excavations, Play as Dragon, Dragon Fang and Dragon Soul artifacts.</p>
		<p><b>Chance</b>: (x / 2,500)%, where x is active spells.</p>
			" coords="3,523,56,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/LanternofGuidanceArtifact.png' align='middle'><b> Lantern of Guidance</b></p>
		<p><b>Clue</b>: Massive mana flows can offer guidance.</p>
		<p><b>Description</b>: Follow the guiding light, o wonderer, for it shall bring you fortune.</p>
		<p><b>Requirements</b>: R120+, Proof of Order</p>
		<p><b>Chance</b>: (x / 10,000,000,000 (10 B))%, where x is your Mana Regeneration.</p>
		<p><b>Effect</b>: Unlocks Tier 2 Temporal Flux</p>
			" coords="63,523,116,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/OilLampArtifact.png' align='middle'><b> Oil Lamp</b></p>
		<p><b>Clue</b>: Chaos magic burns brightly.</p>
		<p><b>Description</b>: Rub it, polish it. And remember to express your desires precisely, lest you want to face dire consequences.</p>
		<p><b>Requirements</b>: R120+, Proof of Chaos</p>
		<p><b>Effect</b>: Unlocks Tier 2 Maelstrom</p>
		<p><b>Chance</b>: (min(x, y, z) / 86,400,000 (86.4 M))%, where x is Fairy Chanting spell activity time, y is Hellfire Blast spell activity time, and z is Brainwave spell activity time (All Time).</p>
			" coords="123,523,176,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SparkofLifeArtifact.png' align='middle'><b> Spark of Life</b></p>
		<p><b>Clue</b>: The power of Creation may spark something new.</p>
		<p><b>Description</b>: The spark of Creation, dimly shining from the bottom of its encasing crystal.</p>
		<p><b>Requirements</b>: R120+, Proof of Balance</p>
		<p><b>Effect</b>: Unlocks Tier 2 All Creation</p>
		<p><b>Chance</b>: (log10(1 + x) ^ 2 / 6,000)%, where x is the amount of Faction Coins collected this game.</p>
			" coords="183,523,236,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/PlanetaryForceArtifact.png' align='middle'><b> Planetary Force</b></p>
		<p><b>Clue</b>: Try every day for better luck! Missing a day is the same as breaking a mirror, you know.</p>
		<p><b>Description</b>: Planets aligning seem to affect your realm in different ways...</p>
		<p><b>Requirements</b>: R100+</p>
		<p><b>Effect</b>: Awards an upgrade with the same name.</p>
		<p><b>Effect</b>: Activates all Sun Force effects at once.</p>
		<p><b>Chance</b>: ((x ^ 2.5) / 5,000)%, where x is amount of consecutive days logged in.</p>
		<p><b>Cost</b>: 100 Qi (1e20), A3+ Free</p>
			" coords="243,523,296,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/MercenaryInsigniaArtifact.png' align='middle'><b> Mercenary Insignia</b></p>
		<p><b>Clue</b>: Gem rhabdomancy seems to work best.</p>
		<p><b>Description</b>: The infamous metal cross of the Mercenaries. You should be both proud and afraid to carry one.</p>
		<p><b>Requirement</b>: R160+, Play as Mercenary, Steel Plate and Black Sword artifacts.</p>
		<p><b>Chance</b>: (floor(log10(x) - 37) * 0.1)%, where x is the amount of gems owned.</p>
			" coords="303,523,356,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/ManaLoom.png' align='middle'><b> Mana Loom</b></p>
		<p><b>Clue</b>: Attracted by amassed mana reserves.</p>
		<p><b>Description</b>: Used to weave even the thinnest mana strings.</p>
		<p><b>Requirement</b>: R180+, Chaos Alignment</p>
		<p><b>Chance</b>: (log10(x) ^ 3 / 50,000)%, where x is the amount of mana produced in this game.</p>
		<p><b>Effect</b>: Awards an upgrade with the same name.</p>
		<p><b>Upgrade Requirement</b>: Forgotten Relic, Mana Loom artifact</p>
		<p><b>Upgrade Effect</b>: Expands the Spellcraft research facility, permanently increasing Spellcraft budget by 3,000.</p>
		<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Fairy Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="363,523,416,576" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Factory.png' align='middle'><b> Factory</b></p>
		<p><b>Clue</b>: Dig it manually.</p>
		<p><b>Description</b>: Mass-production is the way to go.</p>
		<p><b>Requirement</b>: R180+, Neutral Alignment</p>
		<p><b>Chance</b>: (log10(x) ^ 3 / 10,000)%, where x is the amount of clicks made in this game.</p>
		<p><b>Effect</b>: Awards an upgrade with same name</p>
		<p><b>Upgrade Requirement</b>: Forgotten Relic, Factory artifact</p>
		<p><b>Upgrade Effect</b>: Expands the Craftsmanship research facility, permanently increasing Craftsmanship budget by 3,000.</p>
		<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Elven Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="3,583,56,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Mythos.png' align='middle'><b> Mythos</b></p>
		<p><b>Clue</b>: Spells get sad when not used for a long time.</p>
		<p><b>Description</b>: Accurate historical list of every existing or non-existing deity.</p>
		<p><b>Requirement</b>: R180+, Good Alignment</p>
		<p><b>Chance</b>: (x / 4,320,000 (4.32 M)%, where x is the activity time (This Reincarnation) of your least used spell (excluding shared benefits, catalyst and holiday spells) in seconds.</p>
		<p><b>Effect</b>: Awards upgrade with same name.</p>
		<p><b>Upgrade Requirement</b>: Forgotten Relic, Mythos artifact.</p>
		<p><b>Upgrade Effect</b>: Expands the Divine research facility, permanently increasing Divine budget by 3,000.</p>
		<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Angel Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="63,583,116,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Vault.png' align='middle'><b> Vault</b></p>
		<p><b>Clue</b>: Show your prowess as a Royal Trader.</p>
		<p><b>Description</b>: Never a place could be more secure.</p>
		<p><b>Requirement</b>: R180+, Balance Alignment</p>
		<p><b>Chance</b>: (x / 100,000,000 (100 M))%, where x is Royal Exchange Bonus.</p>
		<p><b>Effect</b>: Awards upgrade with same name.</p>
		<p><b>Upgrade Requirement</b>: Forgotten Relic, Vault artifact.</p>
		<p><b>Upgrade Effect</b>: Expands the Economics research facility, permanently increasing Economics budget by 3,000.</p>
		<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Goblin Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="123,583,176,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Athanor.png' align='middle'><b> Athanor</b></p>
		<p><b>Clue</b>: Archemy.</p>
		<p><b>Description</b>: The legendary oven that could smelt souls into matter.</p>
		<p><b>Requirement</b>: R180+, Order Alignment</p>
		<p><b>Chance</b>: (x / 1,000,000 (1 M))%, where x is Alchemy research points.</p>
		<p><b>Effect</b>: Awards upgrade with same name.</p>
		<p><b>Upgrade Requirement</b>: Forgotten Relic, Athanor artifact.</p>
		<p><b>Upgrade Effect</b>: Expands the Alchemy research facility, permanently increasing Alchemy budget by 3,000.</p>
		<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Undead Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="183,583,236,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Battlefield.png' align='middle'><b> Battlefield</b></p>
		<p><b>Clue</b>: Would you think an army is enough to excavate this?</p>
		<p><b>Description</b>: An extremely accurate replica of a battle fought long ago.</p>
		<p><b>Requirement</b>: R180+, Evil Alignment</p>
		<p><b>Chance</b>: (log10(x) ^ 3 / 20,000)%, where x is amount of assistants you own.</p>
		<p><b>Effect</b>: Awards an upgrade with same name</p>
		<p><b>Upgrade Requirement</b>: Forgotten Relic, Battlefield artifact.</p>
		<p><b>Upgrade Effect</b>: Expands the Warfare research facility, permanently increasing Warfare budget by 3,000.</p>
		<p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Demon Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="243,583,296,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/Apeiron.png' align='middle'><b> Apeiron</b></p>
		<p><b>Clue</b>: Be different.</p>
		<p><b>Description</b>: The source of everything. Can fit in the average pocket.</p>
		<p><b>Requirement</b>: R175+, Mercenary, 15 different faction upgrades.</p>
		<p><b>Chance</b>: 0.1%</p>
		<p><b>Effect</b>: Awards an upgrade with same name</p>
		<p><b>Upgrade Effect</b>: Unlocks new Research Facility</p>
		<p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
		<p><b>Upgrade Description</b>: Take advantage of the most ancient and secret arts to empower your production beyonds known limits.</p>
		<p><b>Upgrade Description</b>: Unlock the Forbidden research facility and increase Mercenary production by 100%, plus an additional bonus based on Forbidden research point. These upgrades will persist through abdications and reincarnations, providing a permanent bonus to all factions affected.</p>
		<p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
		<p><b>Note</b>: Upgrade only needs to be bought once.</p>
			" coords="303,583,356,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/GlowingWingArtifact.png' align='middle'><b> Glowing Wing</b></p>
		<p><b>Clue</b>: Mana Wings!</p>
		<p><b>Description</b>: And this is why Fairies don't need torches.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Fairy</p>
		<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is mana produced this game</p>
		<p><b>Fairy Set 2nd Effect</b>: Multiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
		<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
			" coords="363,583,416,636" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SylvanMirrorArtifact.png' align='middle'><b> Sylvan Mirror</b></p>
		<p><b>Clue</b>: Pay a barber with Faction Coins.</p>
		<p><b>Description</b>: An Elf with messy hair is not an Elf, by their own laws.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Elf</p>
		<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is your Faction Coin find chance.</p>
		<p><b>Elf Set 2nd effect</b>: Clicks count more based on autocast clicks.</p>
		<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
		<p><b>Note</b>: <b>not</b> affected by any 'clicks count more' effects.</p>
			" coords="3,643,56,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/SolidCloudArtifact.png' align='middle'><b> Solid Cloud</b></p>
		<p><b>Clue</b>: A cloud of spells.</p>
		<p><b>Description</b>: Angels have the power to save your life! And make a backup of it on the internet.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Angel</p>
		<p><b>Chance</b>: (x / 40,000)%, where x is the amount of active spells (Active Spells count more multipliers <b>do not</b> count)</p>
		<p><b>Angel Set 2nd effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
		<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
			" coords="63,643,116,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/OrcFangNecklaceArtifact.png' align='middle'><b> Orc Fang Necklace</b></p>
		<p><b>Clue</b>: Torment your subjects with taxes.</p>
		<p><b>Description</b>: To remind your slaves who's in charge.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Goblin</p>
		<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is TC casts this game</p>
		<p><b>Goblin Set 2nd effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
		<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>	
			" coords="123,643,176,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/BloodChaliceArtifact.png' align='middle'><b> Blood Chalice</b></p>
		<p><b>Clue</b>: Pour a bottle of Frenzy.</p>
		<p><b>Description</b>: The healthiest vampire breakfast.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Undead</p>
		<p><b>Chance</b>: (x / 10,000)%, where x is Blood Frenzy's duration (The duration when it was cast).</p>
		<p><b>Undead Set 2nd effect</b>: Multiplicatively increases production bonus from gems based on Faction Coins found this game.</p>
		<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is the amount of Faction Coins found this game.</p>
			" coords="183,643,236,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/DemonTailArtifact.png' align='middle'><b> Demon Tail</b></p>
		<p><b>Clue</b>: Evil wizardry.</p>
		<p><b>Description</b>: Said to bring great luck to whom it possess...es.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Demon</p>
		<p><b>Chance</b>: (x / 1,000,000)%, where x is Evil Spell Casts this game.</p>
		<p><b>Demon Set 2nd effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
		<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
			" coords="243,643,296,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/FrozenLightningArtifact.png' align='middle'><b> Frozen Lightning</b></p>
		<p><b>Clue</b>: Lightning never strikes the same place a couple million times. Maybe.</p>
		<p><b>Description</b>: A sculpture representing the embodiment of Titanic power.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Titan</p>
		<p><b>Chance</b>: (x / 1,000,000)%, where x is Lightning Strike activity time this game</p>
		<p><b>Titan Set 2nd effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
		<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
			" coords="303,643,356,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/PrimalLeafArtifact.png' align='middle'><b> Primal Leaf</b></p>
		<p><b>Clue</b>: Huuuuge blue ball.</p>
		<p><b>Description</b>: Druid Catalyst for channeling the power of nature.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Druid</p>
		<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is the highest Max Mana this Reincarnation.</p>
		<p><b>Druid Set 2nd effect</b>: Lineage levels count more based on spell casts in this game.</p>
		<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
			" coords="363,643,416,696" shape="rect">
			<area research="
		<p><img src='http://musicfamily.org/realm/Factions/picks/TheBlackestInkArtifact.png' align='middle'><b> The Blackest Ink</b></p>
		<p><b>Clue</b>: Quality takes time.</p>
		<p><b>Description</b>: High-quality, freshly produced Faceless ink.</p>
		<p><b>Requirement</b>: R220+, 10,000+ excavations, play as Faceless</p>
		<p><b>Chance</b>: (x / 10,000)%, where x is the longest game session this R (but <b>not</b> this game) in seconds.</p>
		<p><b>Faceless Set 2nd effect</b>: Increases spell duration based on time spent being offline in this game.</p>
		<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
			" coords="3,703,56,756" shape="rect">
		</map>
		<?php include "../scripts/footer.html"; ?>
