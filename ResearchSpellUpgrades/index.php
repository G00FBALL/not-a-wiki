<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Spell Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S50</b> - <b>For</b>: Goblin - <b>Research Name</b>: Conjuration
<p><b>Requirement</b>: Have 6000 mana (as Fairy) (This Game)
<p><b>Cost</b>: 318.8 Tqag (3.188E134)
<p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.
<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.
<p><b>Formula</b>: floor(x /650), where x is the number of Goblin Banks you own.
<br/>
<br/>
<p><b>S215</b> - <b>For</b>: All Factions - <b>Research Name</b>: Projection
<p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) &amp; Incantation (S180)
<p><b>Cost</b>: 36.16 TQig (3.616E163)
<p><b>Effect</b>: Increase Spiritual Surge effect based on the amount of active spells.
<p><b>Formula</b>: 100 * ((10 * x) ^ Y) x4.44, where x is active spells and y is ascension. (does not include Spiritual Surge)
<br/>
<br/>
<p><b>S300</b> - <b>For</b>: Titan - <b>Research Name</b>: Chain Lightning
<p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)
<p><b>Cost</b>: 33 OcQig (3.36E178)
<p><b>Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.
<p><b>Formula</b>: round(120 * x^0.8)%, where x is your Lightning Strikes cast (This Game) stat.
<br/>
<br/>
<p><b>S375</b> - <b>For</b>: Faceless - <b>Research Name</b>: Illusion
<p><b>Requirement</b>: Research Reverberation (S330) &amp; Mesmerization (S305)
<p><b>Cost</b>: 541 DSxg (5.41E191)
<p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.
<p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes
<br/>
<br/>
<p><b>S435</b> - <b>For</b>: Drow - <b>Research Name</b>: Spellbinding
<p><b>Requirement</b>: 14400s (4 hour) Combo Strike Cast Time (This Game)
<p><b>Cost</b>: 1.989e213
<p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.
<br/>
<br/>
<p><b>S1275</b> - <b>For</b>: All Factions - <b>Research Name</b>: Sequence
<p><b>Requirement</b>: 60,000 spells cast (This Game).
<p><b>Cost</b>: 555.1 Dvg (5.551E71)
<p><b>Effect</b>: Reduce spell cost for higher spell tiers.
<p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
<br/>
<br/>
<p><b>S3200</b> - <b>For</b>: All Factions - <b>Research Name</b>: Manipulation
<p><b>Requirement</b>: 1B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).
<p><b>Cost</b>: 387 USsx (3.87e188)
<p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (Share Benefits tiers also count).
  <p><b>Effect</b>: Also increases offline spells cast amount multiplicatively by 1200%</p>
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C225</b> - <b>For</b>: Elf - <b>Research Name</b>: Automatons
<p><b>Requirement</b>: Research Dummy Targets (C1) &amp; Vivification (A120).
<p><b>Cost</b>: 2.087 Qaqig (2.087E165)
<p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.
<br/>
<br/>
<p><b>C300</b> - <b>For</b>: Druid - <b>Research Name</b>: Weighting
<p><b>Requirement</b>: 650 Lightning Strikes (This R)
<p><b>Cost</b>: 33.6 OcQig (33.6E177)
<p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.
<p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.
<p><b>Formula</b>: round10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.
<br/>
<br/>
<p><b>C520</b> - <b>For</b>: Dwarf - <b>Research Name</b>: Blacksmithing
<p><b>Requirement</b>: Research Reinforcing (C135) &amp; Metallurgy (C405)
<p><b>Cost</b>: 18.47 USpg (1.847E217)
<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.
<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.
<p><b>Formula</b>: Clicking Reward:2.5 * x^0.3%, Diamond Pickaxe:20 * x^0.4%; where x is the number of Dwarven Forges you own.
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D200</b> - <b>For</b>: All Factions - <b>Research Name</b>: Transcendence
<p><b>Requirement</b>: Research Resurrection (D175) &amp; Illumination (D135)
<p><b>Cost</b>: 82.65 Dqig (8.265E160)
<p><b>Effect</b>: Decrease the cost of all spells by 20% and increase their duration by 20%.
<br/>
<br/>
<p><b>D205</b> - <b>For</b>: All Good Factions - <b>Research Name</b>: Communion
<p><b>Requirement</b>: 777 Holy Lights (Total this R),Research Gemcutting (C175) &amp; Illumination (D135)
<p><b>Cost</b>: 627.6 Dqig (6.276E161)
<p><b>Effect</b>: Increase Holy Light duration by 110 seconds.
<br/>
<br/>
<p><b>D245</b> - <b>For</b>: All Factions - <b>Research Name</b>: Soulrending
<p><b>Requirement</b>: 500 Spiritual Surge (Total this R), Research Soulweaving (A175) &amp; Necromancy (S225)
<p><b>Cost</b>: 6.94Qiqig (6.94E168)
<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique Buildings you own.
<p><b>Formula</b>: (2.5 * x ^ 0.55), where x is the amount of Non-Unique Buildings you own.
<br/>
<br/>
<p><b>D275</b> - <b>For</b>: Druid - <b>Research Name</b>: Meditation
<p><b>Requirement</b>: Have 10,000 Mana (as Druid)
<p><b>Cost</b>: 1.331 SpQig (1.331E174)
<p><b>Effect</b>: Increase mana regeneration based on your current mana.
<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.
<p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.
<br/>
<br/>
<p><b>D330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Eternity
<p><b>Requirement</b>: Research Offering (E275) &amp; Deliverance (D320)
<p><b>Cost</b>: 6.443 Sxg (6.443E183)
<p><b>Effect</b>: Double the duration of all faction spells.
<br/>
<br/>
<p><b>D525</b> - <b>For</b>: Good - <b>Research Name</b>: Purity
<p><b>Requirement</b>: 1d12h as Good (This R), Research Communion (D205) and Devotion (D435)
<p><b>Cost</b>: 140.2 USpg (1.402E218)
<p><b>Effect</b>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.
<p><b>Formula</b>: 300 * x^0.3%, where x is your Faction Spells' Cast This Game (Vanilla + Prestige spell count) stat.
<p><b>------------------------------</b>
<p><b>Economics</b>
<p><b>E145</b> - <b>For</b>: All Factions - <b>Research Name</b>: Royal Demand
<p><b>Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) &amp; Woodcraft (C105)
<p><b>Cost</b>: 17.07 Noqag (1.707E151)
<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.
<br/>
<br/>
<p><b>E1425</b> - <b>For</b>: All Neutral Factions - <b>Research Name</b>: Rarity
<p><b>Requirement</b>: 7 days playtime each with Titan, Druid and Faceless, Research A545, C1300
<p><b>Cost</b>: 706.4 Qivg (7.064E80)
<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.
<p><b>Formula</b>: (1.65 * x ^ 1.65)%, where x is artifacts found. (multiplicative)
<p><b>------------------------------</b>
<p><b>Alchemy</b>
<p><b>A25</b> - <b>For</b>: Demon - <b>Research Name</b>: Deflagration
<p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)
<p><b>Cost</b>: 12.63 Dqag (1.263E130)
<p><b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and multiplies its effect by x7.
<br/>
<br/>
<p><b>A30</b> - <b>For</b>: Fairy - <b>Research Name</b>: Delayed Reaction
<p><b>Requirement</b>: 750 Fairy Chanting (Total this R)
<p><b>Cost</b>: 12.63 Dqag (1.263E130) <p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.
<p><b>Formula</b>: Additive Production increase: floor(1000 * t^1.5);
<p><b>Formula</b>: Duration increase: floor(x / 800)^0.8) seconds; where t is how long FC has been active in seconds, and x is the number of Farms, Inns, and Blacksmiths you own.
<p><b>------------------------------</b>
<p><b>Warfare</b>
<p><b>W180</b> - <b>For</b>: All Factions - <b>Research Name</b>: Formation
<p><b>Requirement</b>: 1000 Call to Arms (Total this R), Research Dueling (W10) &amp; Exertion (W50)
<p><b>Cost</b>: 24.85 Uqig (2.485E157)
<p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.
<br/>
<br/>
<p><b>W525</b> - <b>For</b>: All Factions - <b>Research Name</b>: Bloodlust
<p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)
<p><b>Cost</b>: 140.2 USpg (1.402E218)
<p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.
<p><b>Formula</b>: 300 * floor(x^0.3)%, where x is Faction Spells' Cast This Game (Vanilla + Prestige spell count).
<?php include "../scripts/footer.html"; ?>
