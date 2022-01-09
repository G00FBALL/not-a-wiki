<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><a href="/realm/Challenges/"><img src="http://musicfamily.org/realm/Factions/picks/ChallengesTopPage.png"></h6></a>
	<h6 id="DJC1"></h6><p><b>Djinn Challenge 1</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/MiniatureLampsChallenge.png" align="middle"> Miniature Lamps</b></p>
	<p>"In the beginning, we shared with the mortals mystical wishes to give them some entertaining tales to tell."</p>
	<p><b>Requirements</b>: Fairy as Base Faction, Djinn as Elite Faction, Reincarnation 135+, Persistent Entropy upgrade purchased.</p>
	<p><b>Challenge</b>: Reach 50,000 Enchanted Fields within 2 minutes of a new game.</p>
	<p><b>Effect</b>: Maelstrom multiplicatively increases assistants based on lowest building tier targeted.</p>
	<p><b>Formula</b>: ((12 - T) * 100)%, where T is tier of lowest maelstrom building targeted.</p>
	<p><b>Effect</b>: Fairy Chanting produces Limited Wish casts every second based on Maximum Mana. Casts provided increase progressively over Fairy Chanting's runtime (time since last cast).</p>
	<p><b>Formula</b>: +((x ^ 0.5) * T * y / 2,000), where x is Maximum Mana, T is Fairy Chanting tier and y is Fairy Chanting runtime.</p>
	<p><b>Upgrade</b>: Works with Fairy + Dwarves + Djinn</p>
	<hr>
	<h6 id="DJC2"></h6><p><b>Djinn Challenge 2</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/IfritIgnitionChallenge.png" align="middle"> Ifrit Ignition</b></p>
	<p>"As the years passed through, this benevolence fell on deaf ears. The mortals decided to enslave us; dictate to us their every whim. How dare they command us to do their bidding, give them hell!"</p>
	<p><b>Requirements</b>: Demon as Base Faction, Djinn as Elite Faction, Reincarnation 139+, Djinn Bloodline active, Djinn challenge 1 completed.</p>
	<p><b>Challenge</b>: Have at least 66 B (6.6e10) Mana Produced within 6 hours of a new game.</p>
	<p><b>Effect</b>: Limited Wish casts count more based on Hellfire Blast casts in this game.</p>
	<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is Hellfire Blast casts this game.</p>
	<p><b>Effect</b>: Each time you cast an Evil spell, you gain additional casts based on the amount of trophies you have.</p>
	<p><b>Formula</b>: +(x ^ 0.7), where x is amount of trophies.</p>
	<p><b>Note</b>: Applies only for real evil spells. Casts are added directly to the spell’s casts count and does not trigger upgrades such as GB7.</p>
	<p><b>Upgrade</b>: Works with Demon + Drow + Djinn</p>
	<hr>
	<h6 id="DJC3"></h6><p><b>Djinn Challenge 3</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/IdentityShaperChallenge.png" align="middle"> Identity Shaper</b></p>
	<p>"Interesting, they're showing us some compassion. But it matters not, for we're still bound towards these vessels."</p>
	<p><b>Requirements</b>: Faceless as Base Faction, Djinn as Elite Faction, Reincarnation 143+, 25,000 excavations, Faceless Set active, Djinn challenge 2 completed.</p>
	<p><b>Challenge</b>: Have at least 2 B (2e9) base assistants within 5 minutes of a new game.</p>
	<p><b>Effect</b>: Catalyst casts one additional spell.</p>
	<p><b>Effect</b>: Catalyst also adds 100 casts per spell.</p>
	<p><b>Effect</b>: Increase the minimum value on which Limited Wish is based.</p>
	<p><b>Formula</b>: +(0.1 * x ^ 0.9), where x is research points spent.</p>
	<p><b>Upgrade</b>: Works with Faceless + Dragon + Djinn</p>
	<hr>
	<h6 id="DJC4"></h6><p><b>Djinn Challenge 4</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/WorldlyDesiresChallenge.png" align="middle"> Worldly Desires</b></p>
	<p>"This generation decided that we should give them a few more wishes before they give in to our demands for a change."</p>
	<p><b>Requirements</b>: Fairy, Demon or Faceless as Base Faction, Djinn as Elite Faction, Reincarnation 148+, Djinn Unique Building Purchased (Pavilion), Djinn challenge 3 completed.</p>
	<p><b>Challenge</b>: Have a spell duration of at least 225 Days.</p>
	<p><b>Effect</b>: Multiplicatively increase Assistants, production bonus from Gems and Maximum Mana by 88%, 88% and 888%, targets chosen randomly and refreshing every 88 seconds.</p>
	<p><b>Upgrade</b>: Works with any Djinn combination</p>
	<hr>
	<h6 id="DJC5"></h6><p><b>Djinn Challenge 5</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/AltarofWishesChallenge.png" align="middle"> Altar of Wishes</b></p>
	<p>"Freedom... at last. Onwards we go, to a better future. So long, mortals."</p>
	<p><b>Requirements</b>: Fairy, Demon or Faceless as Base Faction, Djinn as Elite Faction, Reincarnations 153+, All Chaos Lineages at level 45, Djinn challenge 4 completed.</p>
	<p><b>Challenge</b>: Cast all Chaos spells at least 88 times each in a single Reincarnation.</p>
	<p><b>Spells</b>: Fairy Chanting, Hellfire Blast, Brainwave, Maelstrom, Limited Wish, Catalyst</p>
	<p><b>Effect</b>: Multiplicatively increases one of your assets based on the amount of alignments tied to your faction spells.</p>
	<p><b>Formula</b>: (50 ^ (1 + 0.25 * x))%, where x is amount of spells with a given alignment.</p>
	<p><b>Good</b>: Assistants</p>
	<p><b>Evil</b>: Trophy Count</p>
	<p><b>Neutral</b>: Production Bonus from Gems</p>
	<p><b>Order</b>: Mana Regeneration</p>
	<p><b>Chaos</b>: Maximum Mana</p>
	<p><b>Balance</b>: Faction Coin Find Chance</p>
	<br>
	<p><b>Examples</b>:</p>
	<p><b>Faceline Fairy with A400</b></p>
	<p><b>4 Chaos Spells</b>: Brainwave, Fairy Chanting, Limited Wish, Catalyst = 2500% Maximum Mana</p>
	<p><b>2 Good Spells</b>: Fairy Chanting, Diamond Pickaxe = 353% Assistants</p>
	<p><b>1 Neutral Spell</b>: Brainwave = 132% Production Bonus from Gems</p>
	<p><b>Archonline Goblin</b></p>
	<p><b>2 Evil Spells</b>: Goblin's Greed, Combo Strike = 353% Trophy Count</p>
	<p><b>2 Balance Spell</b>: Infinite Spiral, Goblin's Greed = 353% Faction Coin Find Chance</p>
	<p><b>1 Order Spell</b>: Precognition = 132% Mana Regeneration</p>
	<p><b>Upgrade</b>: Works with All</p>
	<hr>
	<h6 id="DJCR"></h6><p><b>Djinn Challenge Reward</b></p>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/FullWishChallengeReward.png" align="middle"> Full Wish</b></p>
	<p><b>Effect</b>: Production of all buildings effect of Limited Wish is active on every cast and is no longer a possible random outcome.</p>
<?php include "../scripts/footer.html"; ?>