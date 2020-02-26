<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><img src="http://musicfamily.org/realm/Factions/picks/ExcavationTopPage.png"></h6>
        <p><b>There are two kinds of artifacts</b></p>
        <p><a href="/realm/QuestArtifacts" research="Quest Artifacts"><b>Quest Artifacts</b></a> and
            <a href="/realm/LoreArtifacts" research="Lore Artifacts"><b>Lore Artifacts</b></a></p>
        <p>For Artifact Sets, go to <a href="/realm/ArtifactSet" research="Artifact Sets"><b>Artifact Sets</b></a></p>
        <p><b>In-game description</b></p>
        <p>Enter the Archeology Association to control the progress of your Excavations. There you will be able to fund more excavations to find Faction Coins, the rare Rubies and ancient Artifacts from the civilizations of the old.</p>
        <p>Archaeology was first implemented in the "Ancient Races" expansion for introducing the Neutral Factions.</p>
        <p>Excavating enables to find Rubies (See the <b><a target="_blank" href="http://musicfamily.org/realm/Rubies/">Ruby</a></b> page), with luck: Faction Coins, and at certain thresholds or under certain conditions: Artifacts. Specific artifacts are required to unlock the Neutral & Prestige Factions.</p>
        <p>Some artifacts will reward direct bonuses and the amount of discovered artifacts take part in some Research upgrades.</p>
        <p><b>Requirements</b></p>
        <p>Archaeology is unlocked once you have over 1B gems, produced over 10 Oc (1E28) coins and bought the<b><img src="http://musicfamily.org/realm/Factions/picks/Archeology-upgrade.png" alt="Smiley face" align="middle"> Archeology Upgrade</b>.</p>
        <p><b>Cost</b>: 100 Oc (1e29)</p>
        <p>An "Excavation" button will then appear on the top left of the Upgrades tab and you may commence excavations.</p>
        <br/>
        <p>The chance to find <b>Lore Artifacts</b> requires the</p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/SurveyEquipment.png" alt="Smiley face" align="middle"><b> Survey Equipment Upgrade</b></p>
        <p><b>Requirements</b>: 100 excavations</p>
        <p><b>Cost</b>: 1e35 (100 Dc). To be bought once throughout the entire game and does not show up as bought upgrade.</p>
        <p><b>Cost & Faction Coins</b></p>
        <p><b>Excavation</b>: The first excavation costs 1 Oc (1E27) coins, and each subsequent excavation costs 20% more than the last.</p>
        <p><b>Formula</b>: 1e27 ^ (0.75 ^ A) * (1 + (0.2 - 0.025 (if E290) - 0.025 (if Ancient Egg)) / 5A) ^ x where A is number of ascensions and x is number of excavations.</p>
        <p><b>Faction Coins</b>: 35% (40% with That Excavated Quickly upgrade) per excavation</p>
        <p><b>Formula</b>: 1500 + 0.05 * x ^ 2.75, where x is the number of excavations you have (not including the one just purchased).</p>
        <p><b>Excavation Reset</b></p>
        <p><b>Cost</b>: floor(x / 3000) + 1 rubies where x is number of excavations.</p>
        <p><b>Note</b>: When resetting excavations you will loose all gold on hand and 90% production until you abdicate or reincarnate.</p>
        <p><b>Note</b>: Free reset if enough times excavated this R (R40+ to afford reset amount)</p>
        <p><b>Formula</b>: 2000 + 50 * R + 500 * x where x is amount of resets this R.</p>
        <p><b>Note</b>: It will reset the excavation counter to zero, all previously gained Excavation rewards and Rubies will persist and you can not find them again.</p>
        <p><img src="http://musicfamily.org/realm/Factions/picks/QuestArtifacts3.7.png" usemap="#QuestArtifacts-map">
            <p><img src="http://musicfamily.org/realm/Factions/picks/LoreArtifacts3.7.png" usemap="#LoreArtifacts-map">
                <map name="QuestArtifacts-map">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncientStoneSlab1.png alt=Artifacts align=middle><b> Ancient Stoneslab 1</b></p>
    <p><b>Description</b>: We discovered an ancient stone slab written in old scriptures. It appears to say something about Halls of Legends.</p>
    <p><b>Requirements</b>: 5th Excavation</p></p>
    <p><b>Effect</b>: 1st clue required to unlock the Titan Alliance.</p>
    " coords="5,45,61,100" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FossilizedPieceofBark1.png alt=Artifacts align=middle><b> Fossilized Piece of Bark 1</b></p>
    <p><b>Description</b>: We discovered a fossilized piece of Bark with the image of a Faction Coin carved into it.</p>
    <p><b>Requirements</b>: 10th Excavation</p>
    <p><b>Effect</b>: 1st clue required to unlock the Druid Alliance.</p>
    " coords="69,45,126,101" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/BoneFragment1.png alt=Artifacts align=middle><b> Bone Fragment 1</b></p>
    <p><b>Description</b>: We discovered a sundial shaped artefact, probably made of animal bones.</p>
    <p><b>Requirements</b>: 15th Excavation</p>
    <p><b>Effect</b>: 1st clue required to unlock the Faceless Alliance.</p>
    " coords="133,44,191,101" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncientStoneSlab2.png alt=Artifacts align=middle><b> Ancient Stone Slab 2</b></p>
    <p><b>Description</b>: We discovered an ancient stone slab written in old scriptures.We can recognize the number 300.</p>
    <p><b>Requirements</b>: 20th Excavation</p>
    <p><b>Effect</b>: 2nd clue required to unlock the Titan Alliance.</p>
    " coords="197,45,253,101" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FossilizedPieceofBark2.png alt=Artifacts align=middle><b> Fossilized Piece of Bark 2</b></p>
    <p><b>Description</b>: We discovered a fossilized piece of Bark with the symbol of One Million.</p>
    <p><b>Requirements</b>: 25th Excavation</p>
    <p><b>Effect</b>: 2nd clue required to unlock the Druid Alliance.</p>
    " coords="261,43,318,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/BoneFragment2.png alt=Artifacts align=middle><b> Bone Fragment 2</b></p>
    <p><b>Description</b>: We discovered an artefact shaped like the number 36, probably made of animal bones.</p>
    <p><b>Requirements</b>: 30th Excavation</p>
    <p><b>Effect</b>: 2nd clue required to unlock the Faceless Alliance.</p>
    " coords="325,44,382,101" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/KeytotheLostCity.png alt=Artifacts align=middle><b> Key to the Lost City</b></p>
    <p><b>Description</b>: Despite being thousands of years old, it's still shiny.</p>
    <p><b>Requirements</b>: 1500th Excavation (total), R23+</p>
    <p><b>Effect</b>: Neutral Research</p>
    " coords="389,44,446,101" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncientDevice.png alt=Artifacts align=middle><b> Ancient Device</b></p>
    <p><b>Description</b>: This strange Device seems to react to the Ancient Races magical capabilities. We may channel its power to increase their research potential!</p>
    <p><b>Requirements</b>: Play a Neutral Faction and have over 2,000 excavations, Unique Building.</p>
    <p><b>Effect</b>: Provides 2 additional slots: 1 for each related Neutral Faction Facility you are playing.</p>
    <p><b>Chance</b>: 0.2%<p><b>Cost</b>: 100 QiSxg (1E200)</p>
    <p><b>Alignment</b>: Neutral</p>
    <p><b>Note</b>: Has no effect R100+/A2</p>
    " coords="6,109,62,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/EarthCore.png alt=Earth Core align=middle><b> Earth Core</b></p>
    <p><b>Description</b>: This piece of rock is continuously shifting its shape, responding to mysterious energy sources.</p>
    <p><b>Requirements</b>: 2750th Excavation, R29+</p>
    <p><b>Effect</b>: Part of the Prestige research quest</p>
    " coords="70,109,127,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/HornoftheKings.png alt=Horn of the Kings align=middle><b> Horn of the Kings</b></p>
    <p><b>Description</b>: It is said that when this horn is blown, the voices of past Dwarven Kings can be heard in the Wind.</p>
    <p><b>Requirements</b>: have Dwarven Forges, 3250+ Excavations (as Dwarf)</p>
    <p><b>Effect</b>: Unlocks Legacy of the Kings upgrade that adds 3 extra slots: 2 for Craftsmanship and 1 to the faction's facility you are playing</p>
    <p><b>Chance</b>: 0.5%</p>
    <p><b>Cost</b></b>: 10 SxSpg (1E232) and 10m Dwarven Coins</p>
    <p><b>Alignment</b>: Dwarf</p>
    " coords="132,107,190,166" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FlameofBondelnar.png alt=Flame of Bondelnar align=middle><b> Flame of Bondelnar</b></p>
    <p><b>Description</b>: The magical azure flame of Bondelnar constantly emanates a silent, yet subtle, evil aura.</p>
    <p><b>Requirements</b>: Have Spider Sanctuaries (as Drow) Excavations: 3250+</p>
    <p><b>Effect</b>: Unlocks the upgrade The Dark Light of Bondelnar that adds 3 extra slots: 2 for Warfare and 1 to the faction's facility you are playing</p>
    <p><b>Chance</b>: 0.5%</p>
    <p><b>Cost</b>: 10 SxSpg (1E232), 10m Drow Coins</p>
    <p><b>Alignment</b>: Drow</p>
    " coords="197,108,253,166" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SpikyRoughEggArtifact.png alt=Flame of Bondelnar align=middle><b> Spiky Rough Egg</b></p>
    <p><b>Description</b>: What a weird egg... it looks ages old, yet something alive is inside. Perhaps if you wait long enough, something will hatch?</p>
    <p><b>Requirements</b>: R46+, 1500 Excavations</p>
    <p><b>Effect</b>: Unlocks the Hatch! Egg</p>
    <p><b>Chance</b>: 2%</p>
    " coords="261,109,318,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ObsidianShardArtifact.png alt=Obsidian Shard align=middle><b> Obsidian Shard</b></p>
    <p><b>Description</b>: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.</p>
    <p><b>Requirement</b>: 8000th Excavation, any Faction, R75+</p>
    <p><b>Effect</b>: Unlocks Secrets of the Warriors</p>
    " coords="324,108,382,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FirstIronFragment.png align=middle><b> First Iron Fragment</b></p>
    <p><b>Clue</b>: This one seems to require a lot of magical renewance.<p>Description: It looks like a piece of an iron object. It's broken off on two sides.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Angel</p>
    <p><b>Chance</b>: (log10(1 + x) ^ 3 / 100,000 (100K))%, where x is mana regen.</p>
    " coords="388,109,446,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SecondIronFragment.png align=middle><b> Second Iron Fragment</b></p>
    <p><b>Clue</b>: Found via extensive Royal Trading mandates.<p>Description: It looks like a piece of an iron object. It's broken off on two sides.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Titan</p>
    <p><b>Chance</b>: (x ^ 3 / 5,000,000,000 (5B))%, where x is individual royal exchange bonus.</p>
    " coords="5,172,62,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ThirdIronFragment.png align=middle><b> Third Iron Fragment</b></p>
    <p><b>Clue</b>: Chances to find increase while not actively searching.</p>
    <p><b>Description</b>: It looks like a piece of an iron object. It's broken off on two sides.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Undead</p>
    <p><b>Chance</b>: ((log10(1 + x) - 2) ^ 3 / 1,000,000 (1M))%, where x is offline bonus precentage.</p>
    " coords="69,172,125,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FirstCrystalFragment.png align=middle><b> First Crystal Fragment</b></p>
    <p><b>Clue</b>: Assistants will lead the way.</p>
    <p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Fairy</p>
    <p><b>Chance</b>: (x / 100,000,000,000 (100B))%, where x is assistant count.</p>
    " coords="133,173,190,228" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SecondCrystalFragment.png align=middle><b> Second Crystal Fragment</b></p>
    <p><b>Clue</b>: Are Faction Coins attracted to glass?</p>
    <p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Faceless</p>
    <p><b>Chance</b>: (log10(1 + x) ^ 3 / 2,500,000 (2.5M))%, where x is faction coins this game.</p>
    " coords="197,172,254,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ThirdCrystalFragment.png align=middle><b> Third Crystal Fragment</b></p>
    <p><b>Clue</b>: Also acts as a spell catalyst.</p>
    <p><b>Description</b>: A strange, glass-like material that appears to have been shattered into three pieces.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Demon</p>
    <p><b>Chance</b>: (x / 50,000,000 (50M))%, where x is evil spells this R.</p>
    " coords="261,173,317,228" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FirstStoneFragment.png align=middle><b> First Stone Fragment</b></p>
    <p><b>Clue</b>: Click to Carve.</p>
    <p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Elf</p>
    <p><b>Chance</b>: (log10(1 + x) ^ 3) / 20,000 (20K))%, where x is clicks this game</p>
    " coords="325,172,383,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SecondStoneFragment.png align=middle><b> Second Stone Fragment</b></p>
    <p><b>Clue</b>: Stone to stone, buildings to buildings.</p>
    <p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Druid</p>
    <p><b>Chance</b>: (x / 20,000,000 (20M))%, where x is amount of buildings.</p>
    " coords="388,172,446,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ThirdStoneFragment.png align=middle><b> Third Stone Fragment</b></p>
    <p><b>Clue</b>: Might be collected with taxes.</p>
    <p><b>Description</b>: Made from stone so ancient it is unknown to the current world. Two parts seem to be missing.</p>
    <p><b>Requirements</b>: R125, 12,500+ Excavations, Play as Goblin</p>
    <p><b>Chance</b>: (log10(1 + x) ^ 3) / 125,000 (125K))%, where x is Tax Collections this game.</p>
    " coords="5,236,62,293" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ObsidianCrown.png align=middle><b> Obsidian Crown</b></p>
    <p><b>Clue</b>: Only the wisest turns over the same stone twice. Or more.</p>
    <p><b>Description</b>: The legendary Black Crown of the Mercenary Lord. Some words are engraved into the inner circle at its base: &quot;Aran en Ilya, Silas en Quenta&quot;.</p>
    <p><b>Requirements</b>: R170+, Play as Mercenary, 10 excavation resets (This game)</p>
    <p><b>Effect</b>: Unlocks Mercenary Union Contract</p>
    <p><b>Chance</b>: ((x - 10) / 1,000)%, x is the number of free and ruby excavation resets (This game)</p>
    " coords="68,236,124,292" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ForgottenRelic.png align=middle><b> Forgotten Relic</b></p>
    <p><b>Clue</b>: Research it!</p>
    <p><b>Description</b>: Intricate leylines of mana cover the surface of this stone, moving and flailing endlessly to create ever-different patterns.</p>
    <p><b>Requirement</b>: R175+</p>
    <p><b>Chance</b>: (x ^ 2 / 100,000,000,000 (100B))%, where x is spent Research budget.</p>
    <p><b>Effect</b>: Unlocks Research Facility upgrades</p>
    <p><b>Note</b>: Each Facility needs their respective artifact and this artifact to get their respective upgrade.</p>
    " coords="132,237,188,292" shape="rect">
                </map>
                <map name="LoreArtifacts-map">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/RoughStone.png alt=Artifact align=middle> <b>Rough Stone</b></p>
    <p><b>Clue</b>: A first-time only discovery.</p>
    <p><b>Description</b>: A common, totally uninteresting stone.</p>
    <p><b>Effect</b>: Unlocks Research D290</p>
    <p><b>Chance</b>: 2% On the first excavation of a run, after abdication or reincarnation.</p>
    " coords="5,44,61,101" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ScarabofFortune.png alt=Scarab of Fortune align=middle><b> Scarab of Fortune</b></p>
    <p><b>Clue</b>: Rarely found in the pyramids of old.</p>
    <p><b>Description</b>: You found the rarest of relics. This golden scarab will grant you 7 days of good luck, starting from now. Make good use of it.</p>
    <p><b>Effect</b>: Awards an upgrade of the same name that increases the production of all buildings by 0.1% for each trophy you unlocked.</p>
    <p><b>Chance</b>: (#Ancient Pyramids)% / 1,000.</p>
    <p><b>Cost</b>: 7 Td (7E42)</p>
    " coords="68,44,125,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ChocolateCookie.png alt=Chocolate Cookie align=middle> <b>Chocolate Cookie</b></p>
    <p><b>Clue</b>: Excavated commonly in all areas.</p>
    <p><b>Description</b>: Found in a wasteland made of cakes and sweets, snatched from the hands of an old woman.</p>
    <p><b>Chance</b>: (# excavations / 50)%</p>
    " coords="131,44,188,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FossilizedRodent.png alt=Fossilized Rodent align=middle> <b>Fossilized Rodent</b></p>
    <p><b>Clue</b>: Hello, mouse.</p>
    <p><b>Description</b>: What's this, a prehistoric mouse...?</p>
    <p><b>Effect</b>: Awards an upgrade of the same name.</p>
    <p><b>Effect</b>: Increase clicking reward based on the amount of artifacts you discovered.</p>
    <p><b>Formula</b>: (10 * x), where x is number of artifacts you discovered.</p>
    <p><b>Chance</b>: (# Treasure clicks this R / 5,000,000 (5M))%</p>
    <p><b>Cost</b>: 100 Qid (1E50)</p>
    " coords="196,45,253,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/PowerOrb.png alt=Power Orb align=middle> <b>Power Orb</b></p>
    <p><b>Clue</b>: Attracted by massive concentration of mana.</p>
    <p><b>Description</b>: Throbbing with Arcane Power</p>
    <p><b>Requirement</b>: +3000 max mana</p>
    <p><b>Effect</b>: Awards an upgrade of the same name.</p>
    <p><b>Effect</b>: Increases mana regeneration by 2.5%.</p>
    <p><b>Chance</b>: (max mana / 15,000)%</p>
    <p><b>Cost</b>: 1 QaVg (1E75), A1+: Free</p>
    <p><b>Alignment</b>: Any</p>
    " coords="260,45,317,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/PinkCarrot.png alt=Smiley face align=middle> <b>Pink Carrot</b></p>
    <p><b>Clue</b>: Found randomly in the Farms.</p>
    <p><b>Description</b>: The main product of properly nurtured Farms.</p>
    <p><b>Requirement</b>: Play as Fairy (Not Dwarf)</p>
    <p><b>Chance</b>: (# Farms / 5,000)%</p>
    " coords="324,45,382,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/BottledVoice.png alt=Smiley face align=middle> <b>Bottled Voice</b></p>
    <p><b>Clue</b>: Can be captured when Chanting.</p>
    <p><b>Description</b>: The essence of a melodic Fairy voice.</p>
    <p><b>Requirement</b>: Play as Fairy (Not Dwarf)</p>
    <p><b>Chance</b>: (Fairy Chanting casts this game / 40,000)%</p>
    " coords="388,45,443,100" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/LuckyClover.png alt=Smiley face align=middle> <b>Lucky Clover</b></p>
    <p><b>Clue</b>: Requires extreme amounts of luck!</p>
    <p><b>Description</b>: A perfectly shaped four leaf clover. Each leaf is almost unnaturally identical to the other three.</p>
    <p><b>Requirement</b>: Play as Elven (Not Dwarf)</p>
    <p><b>Chance</b>: (Highest # of consecutive Elven Luck - 1) * 50)%</p>
    " coords="5,107,61,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Mini-treasure.png alt=Smiley face align=middle> <b>Mini-treasure</b></p>
    <p><b>Clue</b>: Click your way to the treasure!</p>
    <p><b>Description</b>: It's a small perfect replica of our gold-filled treasure.</p>
    <p><b>Requirement</b>: Play as Elven (Not Dwarf)</p>
    <p><b>Chance</b>: (# Clicks this game / 3,000,000 (3M))%</p>
    " coords="68,108,124,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Pillarfragment.png alt=Smiley face align=middle> <b>Pillar Fragment</b></p>
    <p><b>Clue</b>: May fall from the Heavens.</p>
    <p><b>Description</b>: A tiny piece of the legendary pillars which sustain all the Heavens.</p>
    <p><b>Requirement</b>: Play as Angel (Not Dwarf)</p>
    <p><b>Chance</b>: (# Heaven's Gate / 3,750)%</p>
    " coords="132,108,189,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DivineSword.png alt=Smiley face align=middle> <b>Divine Sword</b></p>
    <p><b>Clue</b>: Only found by dedicated Angel allies.</p>
    <p><b>Description</b>: The shining golden sword of an Archangel. Its hilt feels pleasantly warm to the pure of heart and burning hot for the villain.</p>
    <p><b>Requirement</b>: Play as Angel (Not Dwarf)+3 consecutive Angels runs (This R). Even just buying the Angels Trade Treaty counts towards this artifact.</p>
    <p><b>Chance</b>: (Consecutive times allied with Angels this R / 60)%</p>
    " coords="196,108,253,164" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncientCoinPiece.png alt=Artifacts align=middle> <b>Ancient Coin Piece</b></p>
    <p><b>Clue</b>: Rarely found among other special coins.</p>
    <p><b>Description</b>: A common goblin lucky charm. The older it is, the luckier you are, or so they say.</p>
    <p><b>Requirement</b>: Play as Goblin (Not Drow)</p>
    <p><b>Chance</b>: (#Faction Coins this R# / 50,000,000 (50M))%</p>
    " coords="260,108,316,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/GoblinPurse.png alt=Artifacts align=middle> <b>Goblin Purse</b></p>
    <p><b>Clue</b>: Fill your pockets with extorted money.</p>
    <p><b>Description</b>: Heavy and roomy. Definitely too big for just pocket change.</p>
    <p><b>Requirement</b>: Play as Goblin (Not Drow)</p>
    <p><b>Chance</b>: (Tax collection casts this game / 300,000)%</p>
    " coords="323,107,380,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/RottenOrgan.png alt=Artifacts align=middle> <b>Rotten Organ</b></p>
    <p><b>Clue</b>: Found among large masses of dead bodies.</p>
    <p><b>Description</b>: Ew... disgusting. It still pulses.</p>
    <p><b>Requirement</b>: Play as Undead (Not Drow)</p>
    <p><b>Chance</b>: (# Assistants / 500)%</p>
    " coords="387,107,444,165" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/JawBone.png alt=Artifacts align=middle> <b>Jaw Bone</b></p>
    <p><b>Clue</b>: Needs some time off.</p>
    <p><b>Description</b>: A jaw, missing more than half of its teeth.</p>
    <p><b>Requirement</b>: Play as Undead (Not Drow) +24h offline (This R)</p>
    <p><b>Chance</b>: (Offline playtime this R / 864,000 (10 days))%</p>
    " coords="5,171,61,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DemonicFigurine.png alt=Artifacts align=middle> <b>Demonic Figurine</b></p>
    <p><b>Clue</b>: Look for the trophies of the beast.</p>
    <p><b>Description</b>: An intricate figurine representing the evil face of a lesser demon.</p>
    <p><b>Requirement</b>: Play as Demon (Not Drow) 666 Trophies unlocked.</p>
    <p><b>Chance</b>: 1%</p>
    " coords="67,173,124,229" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DemonHorn.png alt=Artifacts align=middle> <b>Demon Horn</b></p>
    <p><b>Clue</b>: Only found by dedicated Demon allies.</p>
    <p><b>Description</b>: Still blazing with the flames of Hell. Handle with care.</p>
    <p><b>Requirement</b>: Play as Demon (Not Drow) +3 consecutive Demon runs (This R). Even just buying the Demons Trade Treaty counts towards this artifact.</p>
    <p><b>Chance</b>: (Consecutive times allied with Demon this R / 60)%</p>
    " coords="132,172,189,228" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/HugeTitanStatue.png alt=Artifacts align=middle> <b>Huge Titan Statue</b></p>
    <p><b>Clue</b>: Struck by the lightning.</p>
    <p><b>Description</b>: The granite representation of a giant wielding a lightning bolt in its fist. A foot appears to be missing.</p>
    <p><b>Requirement</b>: Play as Titan (Not Dragon)</p>
    <p><b>Chance</b>: (Lightning Strike Casts this game / 1,000)%</p>
    " coords="196,170,253,228" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/TitanShield.png alt=Artifacts align=middle> <b>Titan Shield</b></p>
    <p><b>Clue</b>: Don't fret it.</p>
    <p><b>Description</b>: A gargantuan metal shield, twice as tall as a common human.</p>
    <p><b>Requirement</b>: Play as Titan (Not Dragon) +10h playtime (This game)</p>
    <p><b>Chance</b>: (Playtime this game / 180,000 (50 Hours))%</p>
    " coords="259,173,317,228" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/GlyphTable.png alt=Artifacts align=middle> <b>Glyph Table</b></p>
    <p><b>Clue</b>: Balance your buildings.</p>
    <p><b>Description</b>: Contains all the secrets of the Druidic Alphabet.</p>
    <p><b>Requirement</b>: Play as Druid (Not Dragon) +Same amount of each Neutral building.</p>
    <p><b>Chance</b>: 2%</p>
    " coords="324,172,380,228" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/StoneOfBalance.png alt=Artifacts align=middle> <b>Stone of Balance</b></p>
    <p><b>Clue</b>: A Grand Balance performance.</p>
    <p><b>Description</b>: A carved stone hovering above its pedestal.</p>
    <p><b>Requirement</b>: Play as Druid (Not Dragon)</p>
    <p><b>Chance</b>: (Grand Balance Casts this game / 30,000)%</p>
    " coords="387,172,445,230" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/TranslucentGoo.png alt=Artifacts align=middle> <b>Translucent Goo</b></p>
    <p><b>Clue</b>: Byproduct of the Brain.</p>
    <p><b>Description</b>: A completely odorless sticky substance with a diaphanous, unsettling glow.</p>
    <p><b>Requirement</b>: Play as Faceless (Not Dragon)</p>
    <p><b>Chance</b>: (Brainwave casts this game / 400)%</p>
    " coords="5,235,62,294" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Octopus-shapedHelmet.png alt=Artifacts align=middle> <b>Octopus-shaped Helmet</b></p>
    <p><b>Clue</b>: Found in the Labyrinths.</p>
    <p><b>Description</b>: A large helmet with empty metal prongs to accomodate tentacular appendages.</p>
    <p><b>Requirement</b>: Play as Faceless (Not Dragon)</p>
    <p><b>Chance</b>: (# Labyrinths / 2,000)%</p>
    " coords="68,236,124,292" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DwarvenBow.png alt=Artifacts align=middle> <b>Dwarven Bow</b></p>
    <p><b>Clue</b>: Click to throw.</p>
    <p><b>Description</b>: Actually a heavy throwing hammer.</p>
    <p><b>Requirement</b>: Play as Dwarves</p>
    <p><b>Chance</b>: (# clicks this game / 25,000)%</p>
    " coords="132,235,188,292" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/StoneTankard.png alt=Artifacts align=middle> <b>Stone Tankard</b></p>
    <p><b>Clue</b>: Found in the Inns.</p>
    <p><b>Description</b>: A very heavy mug for drinking the heaviest beers.</p>
    <p><b>Requirement</b>: Play as Dwarves</p>
    <p><b>Chance</b>: (# Inns / 25,000)%</p>
    " coords="196,235,252,292" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/CeremonialDagger.png alt=Artifacts align=middle> <b>Ceremonial Dagger</b></p>
    <p><b>Clue</b>: Avoid hurting your fingers.</p>
    <p><b>Description</b>: Its blade is unnaturally keen and sharp.</p>
    <p><b>Requirement</b>: Play as Drow, 0 Treasure clicks (This Game) (This includes automatic clicks)</p>
    <p><b>Chance</b>: 2%</p>
    " coords="259,236,317,292" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ArachnidFigurine.png alt=Arachnid Figurine align=middle> <b>Arachnid Figurine</b></p>
    <p><b>Clue</b>: Embrace Evil. For a while.</p>
    <p><b>Description</b>: If you are afraid of spiders, Drow aren't your faction.</p>
    <p><b>Requirement</b>: Play as Drow +24h Evil Playtime (All-time)</p>
    <p><b>Chance</b>: (All-time Evil playtime / 4,320,000 (50 Days))%</p>
    " coords="324,235,381,292" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SteelPlate.png alt=Steel Plate align=middle> <b>Steel Plate</b></p>
    <p><b>Clue</b>: Legacy from 50 generations ago.</p>
    <p><b>Description</b>: A full plate made of hardened steel.</p>
    <p><b>Requirement</b>: Play as Mercenaries, R5+</p>
    <p><b>Chance</b>: (#R / 50)%</p>
    " coords="387,236,445,292" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/BlackSword.png alt=Black Sword align=middle> <b>Black Sword</b></p>
    <p><b>Clue</b>: Only found by really, really dedicated Mercenary allies.</p>
    <p><b>Description</b>: A long sword with an extremely sharp blade made of dark metal.</p>
    <p><b>Requirement</b>: Play as Mercenaries, at least 100 Merc affiliations (All-time)</p>
    <p><b>Chance</b>: (All-time Mercenary playtime / 60,000 (16 Hours, 40 Minutes))%</p>
    " coords="3,298,62,356" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DragonFangArtifact.png alt=Dragon Fang align=middle> <b>Dragon Fang</b></p>
    <p><b>Clue</b>: Found in the Wyrm Dens.</p>
    <p><b>Description</b>: This huge fang can barely fit in the hands of a Titan.</p>
    <p><b>Requirement</b>: R50+, play as Dragons</p>
    <p><b>Chance</b>: (# Iron Strongholds / 400,000)%</p>
    <p><b>Alignment</b>: Neutral faction, Dragons</p>
    " coords="68,299,125,356" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DragonSoulArtifact.png alt=Dragon Soul align=middle> <b>Dragon Soul</b></p>
    <p><b>Clue</b>: Take five deep breaths.</p>
    <p><b>Description</b>: The extracted soul from an ancient dragon, wields the power to end the world in an instant. Also makes a good soup ingredient.</p>
    <p><b>Requirement</b>: R50+, play as Dragons, have 5 different Dragon Breath effects active simultaneously.</p>
    <p><b>Chance</b>: Excavate (# Dragon Breath casts this game / 200,000)%</p>
    <p><b>Alignment</b>: Neutral faction, Dragons</p>
    " coords="132,300,188,356" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/VanillaFlavorJuice.png alt=Smiley face align=middle> <b>Vanilla Flavor Juice</b></p>
    <p><b>Clue</b>: Quickly!</p>
    <p><b>Description</b>: An essence from extremely savory vanilla beans.</p>
    <p><b>Effect</b>: Increase the production of all buildings by 2,500% for the first 25 minutes of the game (this game) for all Vanilla factions. Doesn't work while offline.</p>
    <p><b>Note</b>: Effect is canceled if you Prestige.</p>
    <p><b>Requirement</b>: +R16</p>
    <p><b>Chance</b>: 20% in the first 5m of a game</p>
    <p><b>Cost</b>: 1 coin</p>
    <p><b>Alignment</b>: Vanilla faction</p>
    " coords="196,300,253,357" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncientCocoaBeanArtifacts.png align=middle> <b>Ancient Cocoa Bean</b></p>
    <p><b>Clue</b>: True Neutral Flavor.</p>
    <p><b>Description</b>: Despite being centuries old, it still smells like top-quality cocoa.</p>
    <p><b>Requirement</b>: Neutral, R22+, Must be Neutral Faction to buy upgrade</p>
    <p><b>Effect</b>: Gives an upgrade named Chocolate Flavored Smoothie</p>
    <p><b>Effect</b>: Increase the production of all buildings by 2,500% for the first 15 minutes of the game for all Neutral factions. Does not work while offline.</p>
    <p><b>Chance</b>: 10%</p>
    " coords="259,299,317,356" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPartI.png align=middle> <b>Know Your Enemy, Part I</b></p>
    <p><b>Clue</b>: A true Mercenary should learn by all other cultures.</p>
    <p><b>Description</b>: All the knowledge you need, stored in a handy book.</p>
    <p><b>Effect</b>: Awards an upgrade of the same name that</p>
    <p><b>Effect</b>: Increases the production of all buildings based on time spent as Non-Mercenary. ('Time allied with...' in the stats)</p>
    <p><b>Formula</b>: (0.75 * x ^ 0.6)%, where x is amount of time spent as non-mercenary factions (in seconds).</p>
    <p><b>Requirement</b>: Play as Mercenaries, have upgrades from each 11 factions. +R12</p>
    <p><b>Chance</b>: 10%</p>
    <p><b>Cost</b>: 100 Vg (1E65)</p>
    <p><b>Alignment</b>: Mercenary</p>
    " coords="324,300,381,356" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/VoodooDoll.png align=middle> <b>Voodoo Doll</b></p>
    <p><b>Clue</b>: Found in the Witch Conclaves.</p>
    <p><b>Description</b>: You are now CURSED! And you feel a sting in your lower rear.</p>
    <p><b>Requirement</b>: Play as Evil (Only required to get Witch Conclaves)</p>
    <p><b>Effect</b>: Increase the production of all building by 0.1% for each trophy you have unlocked</p>
    <p><b>Chance</b>: (number of Witch Conclaves / 10,000)%</p>
    <p><b>Cost</b>: 20 Qig (2E154)</p>
    <p><b>Alignment</b>: Any</p>
    " coords="387,298,445,358" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/WallFragment.png align=middle> <b>Wall Fragment</b></p>
    <p><b>Clue</b>: Ascension...</p>
    <p><b>Description</b>: A fragment of an utterly and completely unbreakable wall. Enjoy your paradox.</p>
    <p><b>Requirement</b>: At least 1 Ascension</p>
    <p><b>Effect</b>: Increase the production of all buildings based on their tier.</p>
    <p><b>Formula</b>: (2.5 * (12 - T) ^ 2)%, where T is building tier.</p>
    <p><b>Chance</b>: 10%</p>
    <p><b>Cost</b>: 1 M (1E6)</p>
    <p><b>Alignment</b>: Any</p>
    " coords="4,363,60,421" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FortuntTellerMachineArtifact.png align=middle> <b>Fortune Teller Machine</b></p>
    <p><b>Clue</b>: Don't choose your allies until you know more.</p>
    <p><b>Description</b>: Will tell you 1 of 24 statements at random.</p>
    <p><b>Requirement</b>: No Faction</p>
    <p><b>Upgrade Requirement</b>: R42+</p>
    <p><b>Effect</b>: Increase the production of Non-Unique buildings based on total time spent. (Time in seconds this R)</p>
    <p><b>Formula</b>: (6.5 * x ^ 0.65)%, where x is time this R</p>
    <p><b>Chance</b>: 0.1%</p>
    <p><b>Cost</b>: 1 No (1e32), A2 Free</p>
    " coords="67,364,127,421" shape="0">
                    <area target="_blank" research="<img src=http://musicfamily.org/realm/Factions/picks/DawnstoneArtifact.png align=middle> <b>Dawnstone</b></p>
    <p><b>Clue</b>: Relic of the Dawn hours.</p>
    <p><b>Description</b>: Only found during sunrise hours. Emits a faint glow.</p>
    <p><b>Requirement</b>: Excavate between 5:00am and 8:00am (Your local time)</p>
    <p><b>Effect</b>: With Both the Dawnstone and Duskstone artifacts, awards the Sun Force upgrade.</p>
    <p><b>Effect</b>: Grants different effects based on time of the day.</p>
    <p><b>Chance</b>: (Excavation count / 10,000)%</p>
    <p><b>Note</b>: Click image for details " href="http://musicfamily.org/realm/SunForce/
    " coords="132,363,190,422" shape="0">
                    <area target="_blank" research="<img src=http://musicfamily.org/realm/Factions/picks/DuskstoneArtifact.png align=middle> <b>Duskstone</b></p>
    <p><b>Clue</b>: Relic of the Dusk hours.</p>
    <p><b>Description</b>: Only found during sunset hours. Absorbs light in a small radius.</p>
    <p><b>Requirement</b>: Excavate between 6:00pm and 9:00pm (Your local time)
    <p><b>Effect</b>: With Both the Dawnstone and Duskstone artifacts, awards the Sun Force upgrade.</p>
    <p><b>Effect</b>: Grants different effects based on time of the day.</p>
    <p><b>Chance</b>: (Excavation count / 10,000)%</p>
    <p><b>Note</b>: Click image for details " href="http://musicfamily.org/realm/SunForce/
    " coords="196,364,253,421" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncientHeirloomTrophy.png align=middle> <b>Ancient Heirloom</b></p>
    <p><b>Clue</b>: Relic of the Lineage.</p>
    <p><b>Requirements</b>: Have at least 1 Lineage level purchased.</p>
    <p><b>Effect</b>: Reduces the cost multiplier of Lineage by 10%, (Except for the highest one) (Instead of 10x more per level it is 9x more per level)</p>
    <p><b>Formula</b>: Without Ancient Heirloom 25 * 10 ^ (8 + lineage level)</p>
	<p><b>Formula</b>: With Ancient Heirloom (25 * 10 ^ (8 + lineage level) ^ 0.9)</p>
    <p><b>Chance</b>: (Total Lineage levels / 20)%</p>
    <p><b>Cost</b>: 10 Dtg (1e100)</p>
    " coords="260,362,317,421" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/KnowYourEnemyPart2.png align=middle> <b>Know Your Enemy, Part 2</b></p>
    <p><b>Clue</b>: Even an expert Mercenary should learn by all other cultures.</p>
    <p><b>Description</b>: Much more knowledge than you need, stored in a handy book.</p>
    <p><b>Requirement</b>: R75+, Mercenary Unique Building, Upgrade from all 12 Factions</p>
    <p><b>Effect</b>: Awards an upgrade of the same name.</p>
    <p><b>Effect</b>: Increase the production of all buildings based on time spent as Non-Mercenaries.</p>
    <p><b>Formula</b>: (0.065 * x ^ 0.65) where x is amount of time spent as non-mercenary factions (in seconds).</p>
    <p><b>Note</b>: Only available to Mercenaries</p>
    <p><b>Chance</b>: 5%</p>
    <p><b>Cost</b>: 100 Noqag (1e152)</p>
    " coords="325,364,381,421" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/VeteranFigurineArtifact.png align=middle> <b>Veteran Figurine</b></p>
    <p><b>Clue</b>: A reward for the veteran challenger.</p>
    <p><b>Description</b>: The warrior of a thousand battles, ultimate champion of the Realms.</p>
    <p><b>Requirement</b>: R90+, Dragon Challenge 6</p>
    <p><b>Effect</b>: Passive effect: allows Mercenaries to benefit from all faction challenges of your alignment.</p>
    <p><b>Note</b>: Does not grant elite challenges.</p>
    <p><b>Chance</b>: (x / 1,000,000)%, where x is seconds this game.</p>
    " coords="387,363,446,422" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/WallChunckArtifact.png align=middle> <b>Wall Chunk</b></p>
    <p><b>Clue</b>: More Ascension...</p>
    <p><b>Description</b>: A bigger piece of the infamous Ascension Wall.</p>
    <p><b>Requirement</b>: R100+</p>
    <p><b>Effect</b>: Awards an upgrade of the same name.</p>
    <p><b>Effect</b>: Increase the production of all buildings based on their tier</p>
    <p><b>Formula</b>: (30,000 * (11 - T) ^ 3.5)%, where T is building tier.</p>
    <p><b>Chance</b>: 10%</p>
    <p><b>Cost</b>: 1 Sx (1e21)</p>
    " coords="4,426,60,485" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ExcavatedMirageArtifact.png align=middle> <b>Excavated Mirage</b></p>
    <p><b>Clue</b>: Raise your chances.</p>
    <p><b>Description</b>: You know all too well this does not exist, yet it fills you with hope and optimism.</p>
    <p><b>Requirement</b>: Ascension 2</p>
    <p><b>Effect</b>: Awards an upgrade of the same name.</p>
    <p><b>Effect</b>: Increase Faction Coin find chance by a multiplicative 200%.</p>
    <p><b>Chance</b>: (log10(x) / 100)%, where x is FC chance</p>
    <p><b>Cost</b>: 1 Sx (1e21)</p>
    " coords="67,427,126,486" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/AncestralHourglassArtifact.png align=middle> <b>Ancestral Hourglass</b></p>
    <p><b>Clue</b>: Really, raise your chances.</p>
    <p><b>Description</b>: The silver sands contained within seem to never stop flowing.</p>
    <p><b>Requirement</b>:  R100+</p>
    <p><b>Effect</b>: Awards an upgrade of the same name.</p>
    <p><b>Effect</b>: Lower Lineage cost exponent based on Reincarnations made.</p>
    <p><b>Formula</b>: (0.01 * R), R is Reincarnations made (NOT affected by invisible bonuses to R count).</p>
    <p><b>Note</b>: FC cost is reset when you purchase a new lineage level.</p>
    <p><b>Chance</b>: (x / 5,000,000,000,000,000 (5 QA))%, where x is FC chance.</p>
    <p><b>Cost</b>: (1e90)</p>
    " coords="132,428,189,486" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SilkClothArtifact.png align=middle> <b>Silk Cloth</b></p>
    <p><b>Clue</b>: Found in the Swarming Towers.</p>
    <p><b>Description</b>: The purest silk made for Fairies, by Fairies, of Fairies.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Fairy, Pink Carrot and Bottled Voice artifacts.</p>
    <p><b>Chance</b>: ((x - 10000) / 200,000)%, where x is Wizard Towers built (Building count multipliers do NOT count).</p>
    " coords="196,428,252,486" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/RawEmeraldArtifact.png align=middle> <b>Raw Emerald</b></p>
    <p><b>Clue</b>: Not found on the first Excavation round.</p>
    <p><b>Description</b>: Just slightly less precious than a raw Ruby.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Elven, Lucky Clover and Mini-treasure artifacts.</p>
    <p><b>Chance</b>: (((3 * x) ^ 4.5) / 10,000)%, where x is free and ruby excavation resets (this game).</p>
    " coords="260,429,317,486" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/FossilizedWingArtifact.png align=middle> <b>Fossilized Wing</b></p>
    <p><b>Clue</b>: Angels may fall after a long time.</p>
    <p><b>Description</b>: The remains of an Angel fallen to earth.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Angel, Pillar Fragment and Divine Sword artifacts.</p>
    <p><b>Chance</b>: (x / 25,920,000 (300 Days))%, where x is angel time (all time) in seconds.</p>
    " coords="324,428,382,485" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SpikedWhipArtifact.png align=middle> <b>Spiked Whip</b></p>
    <p><b>Clue</b>: Used by the overseers in the Slave Markets.</p>
    <p><b>Description</b>: Use with caution. You do not want to exterminate all your slaves.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Goblin, Ancient Coin Piece and Goblin Purse artifacts.</p>
    <p><b>Chance</b>: ((x - 10000) / 300,000)%, where x is Slave Pens (Building count multipliers do NOT count).</p>
    " coords="387,428,445,485" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DustyCoffinArtifact.png align=middle> <b>Dusty Coffin</b></p>
    <p><b>Clue</b>: Quick! Quick! You have no time to waste!</p>
    <p><b>Description</b>: Sealed since forever, yet you can hear a strange noise from within.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Undead, Rotten Organ and Jaw Bone artifacts.</p>
    <p><b>Chance</b>: (1 / (30 + x ^ 1.5))%, where x is time this game in seconds.</p>
    " coords="4,492,60,550" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/CrystallizedLavaArtifact.png align=middle> <b>Crystallized Lava</b></p>
    <p><b>Clue</b>: Found in the Burning Abysses.</p>
    <p><b>Description</b>: Incandescent but still. Can be used efficiently as a desk lamp.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Demon, Demonic Figurine and Demon Horn artifacts</p>
    <p><b>Chance</b>: ((x - 10000) / 200,000)%, where x is Hall of Legends (Building count multipliers do NOT count).</p>
    " coords="68,492,125,548" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/TitanHelmetArtifact.png align=middle> <b>Titan Helmet</b></p>
    <p><b>Clue</b>: Found in the trade route used for Exchanges.</p>
    <p><b>Description</b>: Made of enough metal to craft a human-sized full plate.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Titan, Huge Titan Statue and Titan Shield artifacts.</p>
    <p><b>Chance</b>: ((x ^ 2) / 1,500,000,000 (1.5B))%, where x is Royal Exchanges (Royal Exchange count multipliers <b>DO NOT</b> count).</p>
    " coords="132,491,189,548" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/BranchoftheLifeTreeArtifact.png align=middle> <b>Branch of the Life Tree</b></p>
    <p><b>Clue</b>: Found in the remains of druidic ancestors.</p>
    <p><b>Description</b>: Despite being torn from its source tree, it keeps growing buds and leaves.</p>
    <p><b>Requirement</b>: R100+, 2000+ Excavations, Play as Druid, Glyph Table and Stone of Balance artifacts.</p>
    <p><b>Chance</b>:  ((x ^ 3) / 2,000,000 (2M))%, where x is level of druid lineage.</p>
    " coords="196,490,253,548" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/NightmareFigmentArtifact.png align=middle> <b>Nightmare Figment</b></p>
    <p><b>Clue</b>: A strong and quick brain is required.</p>
    <p><b>Description</b>: An unshaped, ephemeral substance which is politely trying to corrupt your mind.</p>
    <p><b>Requirement</b>:  R100+, 2000+ Excavations, Play as Faceless, Translucent Goo and Octupus-shaped Helmet artifacts.</p>
    <p><b>Chance</b>: ((x ^ 1.5) / 20,000,000 (20M))%, where x is headstart time in seconds.</p>
    " coords="260,491,317,549" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/BeardHair.png align=middle> <b>Beard Hair</b></p>
    <p><b>Clue</b>: It requires a lot of beard samples to get the perfect hair.</p>
    <p><b>Description</b>: Hopefully coming from a real dwarven beard.</p>
    <p><b>Requirement</b>: R116+, 2000+ Excavations, Play as Dwarf, Stone Tankard and Dwarven Bow artifacts.</p>
    <p><b>Chance</b>: (x / 100,000,000 (100M))%, where x is assistant count</p>
    " coords="323,493,381,551" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/PoisonVial.png align=middle> <b>Poison Vial</b></p>
    <p><b>Clue</b>: Combo your way through.</p>
    <p><b>Description</b>: One drop of this is enough to fell thousands of non-immune creatures.</p>
    <p><b>Requirement</b>: R116+, 2000+ Excavations, Play as Drow, Ceremonial Dagger and Arachnid Figurine artifacts.</p>
    <p><b>Chance</b>: ((40 * x ^ 0.9) / 10,000,000 (10M))%, where x is combo strike count</p>
    " coords="388,492,446,550" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/DragonScale.png align=middle> <b>Dragon Scale</b></p>
    <p><b>Clue</b>: Usually found when a lot of magic is lingering.</p>
    <p><b>Description</b>: Very high on the realms' most accurate hardiness rankings.</p>
    <p><b>Requirement</b>: R116+, 2000+ Excavations, Play as Dragon, Dragon Fang and Dragon Soul artifacts.</p>
    <p><b>Chance</b>: (x / 2,500)%, where x is active spells</p>
    " coords="4,555,60,613" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/LanternofGuidanceArtifact.png align=middle> <b>Lantern of Guidance</b></p>
    <p><b>Clue</b>: Massive mana flows can offer guidance.</p>
    <p><b>Description</b>: Follow the guiding light, o wonderer, for it shall bring you fortune.</p>
    <p><b>Requirements</b>: R120+, Proof of Order</p>
    <p><b>Chance</b>: (x / 10,000,000,000 (10B))%, where x is mana regen.</p>
    <p><b>Effect</b>: Unlocks Tier 2 Temporal Flux</p>
    " coords="67,555,124,612" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/OilLampArtifact.png align=middle> <b>Oil Lamp</b></p>
    <p><b>Clue</b>: Chaos magic burns brightly.</p>
    <p><b>Description</b>: Rub it, polish it. And remember to express your desires precisely, lest you want to face dire consequences.</p>
    <p><b>Requirements</b>: R120+, Proof of Chaos</p>
    <p><b>Effect</b>: Unlocks Tier 2 Maelstrom</p>
    <p><b>Chance</b>: (min(x, y, z) / 86,400,000 (1000 Days))%, where x is Fairy Chanting spell activity time, y is Hellfire Blast spell activity time, and z is Brainwave spell activity time (all time).</p>
    " coords="132,557,189,612" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/SparkofLifeArtifact.png align=middle> <b>Spark of Life</b></p>
    <p><b>Clue</b>: The power of Creation may spark something new.</p>
    <p><b>Description</b>: The spark of Creation, dimly shining from the bottom of its encasing crystal.</p>
    <p><b>Requirements</b>: R120+, Proof of Balance</p>
    <p><b>Effect</b>: Unlocks Tier 2 All Creation</p>
    <p><b>Chance</b>: (ln(1 + x) ^ 2 / 6,000)%, where x is FC collected this game.</p>
    " coords="196,557,253,613" shape="0">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/PlanetaryForceArtifact.png align=middle> <b>Planetary Force</b></p>
    <p><b>Clue</b>: Try every day for better luck! Missing a day is the same as breaking a mirror, you know.</p>
    <p><b>Description</b>: Planets aligning seem to affect your realm in different ways...</p>
    <p><b>Requirements</b>: R100+</p>
    <p><b>Effect</b>: Gives upgrade with the same name</p>
    <p><b>Effect</b>: Activates all Sun Force effects at once.</p>
    <p><b>Chance</b>: ((x ^ 2.5) / 5,000)%, where x is amount of consecutive days logged in.</p>
    <p><b>Note</b>: Restarting the game is required to increase the counter</p>
    <p><b>Cost</b>: 100 Qi (1e20)</p>
    " coords="259,555,316,612" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/MercenaryInsigniaArtifact.png align=middle> <b>Mercenary Insignia</b></p>
    <p><b>Clue</b>: Gem rhabdomancy seems to work best.</p>
    <p><b>Description</b>: The infamous metal cross of the Mercenaries. You should be both proud and afraid to carry one.</p>
    <p><b>Requirement</b>: R160+, Play as Mercenary, Steel Plate and Black Sword artifacts.</p>
    <p><b>Chance</b>: (floor(log10(x) - 37) * 0.1)%, x is gems owned.</p>
    " coords="324,555,381,612" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/ManaLoom.png align=middle> <b>Mana Loom</b></p>
    <p><b>Clue</b>: Attracted by amassed mana reserves.</p>
    <p><b>Description</b>: Used to weave even the thinnest mana strings.</p>
    <p><b>Requirement</b>: R175+, Chaos Alignment</p>
    <p><b>Chance</b>: (log10(x) ^ 3 / 50,000)%, where x is mana produced (This Game)</p>
    <p><b>Effect</b>: Gives upgrade with the same name</p>
    <p><b>Upgrade Requirement</b>: Forgotten Relic, Mana Loom artifact and upgrade.</p>
    <p><b>Upgrade Effect</b>: Expands the Spellcraft research facility, permanently increasing Spellcraft budget by 2500.</p>
    <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Fairy Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="389,556,446,613" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Factory.png align=middle> <b>Factory</b></p>
    <p><b>Clue</b>: Dig it manually.</p>
    <p><b>Description</b>: Mass-production is the way to go.</p>
    <p><b>Requirement</b>: R175+, Neutral Alignment</p>
    <p><b>Chance</b>: (log10(x) ^ 3 / 10,000)%, where x is clicks (This Game)</p>
    <p><b>Effect</b>: Gives upgrade with same name</p>
    <p><b>Upgrade Requirement</b>: Forgotten Relic, Factory artifact and upgrade.</p>
    <p><b>Upgrade Effect</b>: Expands the Craftsmanship research facility, permanently increasing Craftsmanship budget by 2500.</p>
    <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Elven Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="4,620,59,676" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Mythos.png align=middle> <b>Mythos</b></p>
    <p><b>Clue</b>: Spells get sad when not used for a long time.</p>
    <p><b>Description</b>: Accurate historical list of every existing or non-existing deity.</p>
    <p><b>Requirement</b>: R175+, Good Alignment</p>
    <p><b>Chance</b>: (x / 4,320,000 (50 Days))%, where x is the activity time (This Reincarnation) of your least used spell (excluding shared benefits, catalyst and holiday spells)</p>
    <p><b>Effect</b>: Gives upgrade with same name</p>
    <p><b>Upgrade Requirement</b>: Forgotten Relic, Mythos artifact and upgrade.</p>
    <p><b>Upgrade Effect</b>: Expands the Divine research facility, permanently increasing Divine budget by 2500.</p>
    <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Angel Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="67,621,125,676" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Vault.png align=middle> <b>Vault</b></p>
    <p><b>Clue</b>: Show your prowess as a Royal Trader.</p>
    <p><b>Description</b>: Never a place could be more secure.</p>
    <p><b>Requirement</b>: R175+, Balance Alignment</p>
    <p><b>Chance</b>: (x / 100,000,000 (100M))%, where x is Royal Exchange Bonus.</p>
    <p><b>Effect</b>: Gives upgrade with same name</p>
    <p><b>Upgrade Requirement</b>: Forgotten Relic, Vault artifact and upgrade.</p>
    <p><b>Upgrade Effect</b>: Expands the Economics research facility, permanently increasing Economics budget by 2500.</p>
    <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Goblin Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="131,621,189,676" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Athanor.png align=middle> <b>Athanor</b></p>
    <p><b>Clue</b>: Archemy.</p>
    <p><b>Description</b>: The legendary oven that could smelt souls into matter.</p>
    <p><b>Requirement</b>: R175+, Order Alignment</p>
    <p><b>Chance</b>: (x / 1,000,000 (1M))%, where x is Alchemy research points.</p>
    <p><b>Effect</b>: Gives upgrade with same name</p>
    <p><b>Upgrade Requirement</b>: Forgotten Relic, Athanor artifact and upgrade.</p>
    <p><b>Upgrade Effect</b>: Expands the Alchemy research facility, permanently increasing Alchemy budget by 2500.</p>
    <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Undead Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="195,621,253,676" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Battlefield.png align=middle> <b>Battlefield</b></p>
    <p><b>Clue</b>: Would you think an army is enough to excavate this?</p>
    <p><b>Description</b>: An extremely accurate replica of a battle fought long ago.</p>
    <p><b>Requirement</b>: R175+, Evil Alignment</p>
    <p><b>Chance</b>: (log10(x) ^ 3 / 20,000)%, where x is the number of Assistants.</p>
    <p><b>Effect</b>: Gives upgrade with same name</p>
    <p><b>Upgrade Requirement</b>: Forgotten Relic, Battlefield artifact and upgrade.</p>
    <p><b>Upgrade Effect</b>: Expands the Warfare research facility, permanently increasing Warfare budget by 2500.</p>
    <p><b>Upgrade Cost</b>: 10 Dtg (1e100), 1 Qid (1e48) Demon Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="260,620,318,676" shape="rect">
                    <area research="<img src=http://musicfamily.org/realm/Factions/picks/Apeiron.png align=middle> <b>Apeiron</b></p>
    <p><b>Clue</b>: Be different.</p>
    <p><b>Description</b>: The source of everything. Can fit in the average pocket.</p>
    <p><b>Requirement</b>: R175+, Mercenary, 15 different faction upgrades.</p>
    <p><b>Chance</b>: 0.1%</p>
    <p><b>Effect</b>: Gives upgrade with same name</p>
    <p><b>Upgrade Effect</b>: Unlocks new Research Facility</p>
    <p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
    <p><b>Upgrade Description</b>: Take advantage of the most ancient and secret arts to empower your production beyonds known limits.</p>
    <p><b>Upgrade Description</b>: Unlock the Forbidden research facility and increase Mercenary production by 100%, plus an additional bonus based on Forbidden research point. These upgrades will persist through abdications and reincarnations, providing a permanent bonus to all factions affected.</p>
    <p><b>Upgrade Cost</b>: 1 Qatg (1e105), 100 Qid (1e50) Dwarven and Drow Coins</p>
    <p><b>Note</b>: Upgrade only needs to be bought once.</p>
    " coords="324,619,382,676" shape="rect">
                </map>
                <?php include "../scripts/footer.html"; ?>
