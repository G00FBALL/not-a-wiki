<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<br/>
<p><b>Neutral Buildings</b> : <b>Any Alignment</b></p>
<p><b>No Proof of Deeds needed</b></p>
<p><b>Tier 1</b>: Farm : <b>Base Production</b> : 2 coins</p>
<p><b>Tier 2</b>: Inn : <b>Base Production</b> : 6 coins</p>
<p><b>Tier 3</b>: Blacksmith : <b>Base Production</b> : 20 coins</p>
<hr>
<p><b>Neutral Building</b> : <b>Any Alignment</b></p>
<p><b>Requires any Proof of Deed</b></p>
<p><b>Tier 11</b>: Hall of Legends</p>
<p><b>Base Production</b> : 250,000 coins per Trophy</p>
<hr>
<p><b>Good Buildings</b> : <b>Good Alignment</b></p>
<p><b>Requires Proof of Good Deed</b></p>
<p><b>Tier 4</b>: Warrior Barracks : <b>Base Production</b> : 65 coins</p>
<p><b>Tier 5</b>: Knight's Joust : <b>Base Production</b> : 200 coins</p>
<p><b>Tier 6</b>: Wizard Tower : <b>Base Production</b> : 650 coins</p>
<p><b>Tier 7</b>: Cathedral : <b>Base Production</b> : 2,000 coins</p>
<p><b>Tier 8</b>: Citadel : <b>Base Production</b> : 8,500 coins</p>
<p><b>Tier 9</b>: Royal Castle : <b>Base Production</b> : 100,000 coins</p>
<p><b>Tier 10</b>: Heaven's Gate : <b>Base Production</b> : 1,200,000 coins</p>
<hr>
<p><b>Evil Buildings</b> : <b>Evil Alignment</b></p>
<p><b>Requires Proof of Evil Deed</b></p>
<p><b>Tier 4</b>: Slave Pen : <b>Base Production</b> : 65 coins</p>
<p><b>Tier 5</b>: Orcish Arena : <b>Base Production</b> : 200 coins</p>
<p><b>Tier 6</b>: Witch Conclave : <b>Base Production</b> : 650 coins</p>
<p><b>Tier 7</b>: Dark Temple : <b>Base Production</b> : 2,000 coins</p>
<p><b>Tier 8</b>: Necropolis : <b>Base Production</b> : 8,500 coins</p>
<p><b>Tier 9</b>: Evil Fortress : <b>Base Production</b> : 100,000 coins</p>
<p><b>Tier 10</b>: Hell Portal : <b>Base Production</b> : 1,200,000 coins</p>
<hr>
<p><b>Neutral Buildings</b> : <b>Neutral Alignment</b></p>
<p><b>Requires Proof of Neutrality</b></p>
<p><b>Tier 4</b>: Deep Mine : <b>Base Production</b> : 65 coins</p>
<p><b>Tier 5</b>: Stone Pillars : <b>Base Production</b> : 200 coins</p>
<p><b>Tier 6</b>: Alchemist Lab : <b>Base Production</b> : 650 coins</p>
<p><b>Tier 7</b>: Monastery : <b>Base Production</b> : 2,000 coins</p>
<p><b>Tier 8</b>: Labyrinth : <b>Base Production</b> : 8,500 coins</p>
<p><b>Tier 9</b>: Iron Stronghold : <b>Base Production</b> : 100,000 coins</p>
<p><b>Tier 10</b>: Ancient Pyramid : <b>Base Production</b> : 1,200,000 coins</p>
<hr>
<p><b>Building Cost</b></p>
<p><b>Tier 1</b>: First Building : 10 coins</p>
<p><b>Tier 2</b>: First Building : 125 coins</p>
<p><b>Tier 3</b>: First Building : 600 coins</p>
<p><b>Tier 4</b>: First Building : 1,800 coins</p>
<p><b>Tier 5</b>: First Building : 5,600 coins</p>
<p><b>Tier 6</b>: First Building : 38,000 coins</p>
<p><b>Tier 7</b>: First Building : 442,000 coins</p>
<p><b>Tier 8</b>: First Building : 7,300,000 coins</p>
<p><b>Tier 9</b>: First Building : 145 M coins</p>
<p><b>Tier 10</b>: First Building : 3.2 B coins</p>
<p><b>Tier 11</b>: First Building : 200 B coins</p>
<p>Costs for successive building in each tier follow a geometric progression, so each building costs a constant factor more than the previous building of that tier.</p>
<p><b>Cost Formula for the x-th building in a tier</b>: (B * M ^ (x - 1)), where B is the cost of first building of that tier and M is the building cost multiplier.</p>
<hr>
<p><b>Building Cost Multiplier</b></p>
<p>The base value of the building cost multiplier is 1.15, but can be reduced by upgrades that give a flat cost reduction (e.g. Gobline) and also depends on your Ascension.</p>
<p><b>Building Cost Formula in A0 and A4</b>: (1 + 0.15 - C), where C is the sum of your flat cost reduction upgrades.</p>
<p><b>Building Cost Formula in A1 - A3</b>: (1 + (0.15 - C) / (5 * A)), where C is the sum of your flat cost reduction upgrades and A is your Ascension.</p>
<?php include "../scripts/footer.html"; ?>
