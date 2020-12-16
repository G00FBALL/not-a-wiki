<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/Challenges/"><img src="http://musicfamily.org/realm/Factions/picks/ChallengesTopPage.png"></h6></a>
        <H6 id="MakersMC1"></h6>
        <p><b>Makers Challenge 1</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/SeedofLife.png" align="middle"> Seed of Life</b></p>
        <p>"If you wish to make an apple pie from scratch, you must first invent the universe. And the apple tree, you will have to nurse."</p>
        <p><b>Requirements</b>: Elves as Base Faction, Makers as Elite Faction, Reincarnation 135+, Reality Crater upgrade purchased.</p>
        <p><b>Challenge</b>: Get 10 M (1e7) clicks in this Reincarnation and trigger Elven Luck at least 7777 times in this game.</p>
        <p><b>Effect</b>: Multiplicatively increase assistants based on the amount of Elven Luck triggered in this game.</p>
        <p><b>Formula</b>: (1.5 * x ^ 0.85)%, where x is Elven Lucks this game.</p>
        <p><b>Effect</b>: Gain x8 Faction Coins from any source when they match your Faction, Bloodline or Set.</p>
	    <p><b>Formula</b>: *(8 ^ x), where x is number of faction/bloodline/set FC matches (+1 for full FC match, +½ for half FC match) (includes A2950 and Stoneheart).</p>
        <p><b>Upgrade</b>: Works with Elves+Dwarves+Makers</p>
        <hr>
        <H6 id="MakersMC2"></h6>
        <p><b>Makers Challenge 2</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArtificialCurrency.png" align="middle"> Artificial Currency</b></p>
        <p>"Extinction is the rule. Survival is the exception, which can only be achieved through subtle deception."</p>
        <p><b>Requirements</b>: Goblin as Base Faction, Makers as Elite Faction, Reincarnation 139+, Makers Bloodline active, Makers challenge 1 completed.</p>
        <p><b>Challenge</b>: Get 100 Qad (1e47) Faction Coins with a minimum of 50 free and ruby Excavation Resets in this Reincarnation.</p>
        <p><b>Effect</b>: While Mana Regeneration is higher than Maximum Mana, each time you cast a spell, you also cast free Tax Collections based on the difference between them.</p>
        <p><b>Formula</b>: (((log10(1 + x)) ^ 2.5 - (log10(1 + y)) ^ 2.5) ^ 1.25), where x is mana regen, y is max mana.</p>
        <p><b>Effect</b>: Production bonus from Gems is increased multiplicatively based on Tax Collections cast in this game.</p>
        <p><b>Formula</b>: (ln(1 + x) ^ 2), where x is number of Tax Collections. (This game)</p>
        <p><b>Upgrade</b>: Works with Goblin+Drow+Makers</p>
        <hr>
        <H6 id="MakersMC3"></h6>
        <p><b>Makers Challenge 3</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/PillarsofCreation.png" align="middle"> Pillars of Creation</b></p>
        <p>"We are like butterflies who flutter for a day and think it is forever. This can be accomplished when you sincerely endeavor."</p>
        <p><b>Requirements</b>: Druid as Base Faction, Makers as Elite Faction, Reincarnation 143+, 25,000 excavations, Druid Set active, Makers challenge 2 completed.</p>
        <p><b>Challenge</b>: Have at least 1 B (1e9) Maximum Mana and 25,000 of each building within 5 minutes of a new game.</p>
        <p><b>Effect</b>: Assistants and Maximum Mana Infinite Spiral effects are also increased by Mana Regeneration.</p>
        <p><b>Formula</b>: (12.5 * (ln(1 + x * y) ^ 1.3), where x is max mana, y is mana regeneration</p>
        <p><b>Effect</b>: Your Lineage levels count double.</p>
        <p><b>Upgrade</b>: Works with Druid+Dragon+Makers</p>
        <hr>
        <H6 id="MakersMC4"></h6>
        <p><b>Makers Challenge 4</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/Stoneheart.png" align="middle"> Stoneheart</b></p>
        <p>"We are a way for the cosmos to know itself. Manipulate existence to plant an evocation of yourself."</p>
        <p><b>Requirements</b>: Elves, Goblin or Druid as Base Faction, Makers as Elite Faction, Reincarnation 148+, Makers Unique Building, Makers challenge 3 completed.</p>
        <p><b>Challenge</b>: Without using any Bloodline or Research, reach 30,000 Halls of Origination.</p>
        <p><b>Effect</b>: Pick an additional Set. Increase Faction Coins found matching that Set by 1000%</p>
        <p><b>Upgrade</b>: Works with Elves+Dwarves+Makers, Goblin+Drow+Makers and Druid+Dragon+Makers</p>
        <hr>
        <H6 id="MakersMC5"></h6>
        <p><b>Makers Challenge 5</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/GreatestInvention.png" align="middle"> Greatest Invention</b></p>
        <p>"Somewhere, something incredible is waiting to be known. Sculpt from your boundless imagination and make it your own."</p>
        <p><b>Requirements</b>: Elves, Goblin or Druid as Base Faction, Makers as Elite Faction, Reincarnation 153+, All Balance Lineages at level 45, Makers challenge 4 completed.</p>
        <p><b>Challenge</b>: Have at least 1 T (1e12) assistants, 1 B (1e9) Maximum Mana and 20 Sx (2e22) Faction Coin find chance within 8 minutes of a new game.</p>
        <p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coins gained and mana produced in this game; spells cast and clicks made in this Reincarnation.</p>
        <p><b>Formula</b>: ((0.3 * log10(1 + a) + log10(1 + b) + log10(1 + c) + 3 * log10(1 + d)) ^ 1.5), a is factions coins (this game), b is mana produced (this game), c is spells cast (this reincarnation), d is clicks made (this reincarnation)</p>
        <p><b>Upgrade</b>: Works with All</p>
        <hr>
        <H6 id="MakersMCR"></h6>
        <p><b>In-Game Challenge Final Reward</b></p>
        <p><b><img src="http://musicfamily.org/realm/Factions/picks/Gaia'sCradle.png" align="middle"> Gaia's Cradle</b></p>
        <p><b>Effect</b>: All Infinite Spiral effects scale 15% faster.</p>
        <?php include "../scripts/footer.html"; ?>
