<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Spell Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S50</B>: - <b>For</b> Goblin - <B>Research Name</B> Conjuration</p>
<p><B>Requirement</B>: Have 6000 mana(as Fairy)</p>
<p><B>Cost</B>: 318.8 Tqag (3.188E134)</p>
<p><B>Effect</B>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
<p><B>Formula</B>: floor(x /650), where x is the number of Goblin Banks you own.</p>
<br/>
<br/>
<p><b>S215</B>: - <b>For</b> Any - <B>Research Name</B> Projection	
<p><B>Requirement</B>: 300 Spiritual Surge (Total), Research Channeling (S10) & Incantation (S175)</p>	
<p><B>Cost</B>: 36.16 TQig (3.616E163)	</p>
<p><B>Effect</B>: (150*x)^(y+1), where x is active spells and y is ascension. (does not include Spiritual Surge)</p>
<br/>
<br/>
<p><b>S375</B>: - <b>For</b> Faceless - <B>Research Name</B> Illusion	</p>
<p><B>Requirement</B>: Research Reverberation (S330), Mesmerization (S305)</p>
<p><B>Cost</B>: 541 DSxg (5.41E191)	</p>
<p><B>Effect</B>: Brainwave also provides progressively more assistants over its duration.</p>
<p><B>Formula</B>: floor(1.15*((x/30+y)/60)^2), where x is how many minutes the spell has been active.</p>
<br/>
<br/>
<p><b>S435</B>: - <b>For</b> Drow - <B>Research Name</B> Spellbinding</p>    
<p><B>Requirement</B>: 4h Combo Strike Cast Time</p>
<p><B>Cost</B>: 1.989e213	</p>
<p><B>Effect</B>: Passively grants the effects from Call to Arms while offline.</p>
<br/>
<br/>
<p><B>S1275</B>:  - <b>For</b> Any - <B>Research Name</B> Sequence</p>    
<p><B>Requirement</B>: 60.000 spells cast.
<p><B>Requirement</B>: Post Ascension Only
<p><B>Cost</B>: 555.1 Dvg (5.551e71)</p>
<p><B>Effect</B>: Reduce spell cost for higher spell tiers.
<p><B>Formula</B>: reduces multiplier by 0.5, base multiplier is 2.</p>
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C300</b> - <b>For</b> Druid - <B>Research Name</B> Weighting</p>
<p><B>Requirement</B>: 650 Lightning Strikes</p>
<p><B>Cost</B>: 33.6 OcQig (33.6E177)</p>
<p><B>Effect</B>: Increase Grand Balance multiplier by x20 when hitting Stonehenge Circles. Also increase its multiplier for every target based on maximum mana.</p>
<p><B>Formula</B>: round(1.5*ln(1+x))^2)^y), where x is your maximum mana and y is spell tier.</p>
<br/>
<br/>
<p><b>C520</b> - <b>For</b> Dwarf - <B>Research Name</B> Blacksmithing</p>
<p><B>Requirement</B>: Research Reinforcing (C135) & Metallurgy (C405)</p>
<p><B>Cost</B>: 18.47 USpg (1.847E217)</p>
<p><B>Effect</B>: Increase clicking reward for Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Effect</B>: Also increase Faction Coin find chance bonus of Diamon Pickaxe based on the amount of Dwarvin Forges you own.</p>
<p><B>Formula</B>: Clicking Reward:2.5 * x^0.3%, Diamond Pickaxe:20 * x^0.4%; where x is the number of Dwarven Forges you own.</p>
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D200</b> - <b>For</b> Any - <B>Research Name</B> Transcendence
<p><B>Requirement</B>: Research Resurrection (D175) & Illumination (D135)
<p><B>Cost</B>: 82.65 Dqig (8.265E160)
<p><B>Effect</B>: Decrease the cost of all spells by 20% and increase their duration by 20%.
<br/>
<br/>
<p><b>D205</b> - <b>For</b> Any Good - <B>Research Name</B> Communion
<p><B>Requirement</B>: 777 Holy Lights (Total),Research Gemcutting (C175) & Illumination (D135)
<p><B>Cost</B>: 627.6 Dqig (6.276E161)
<p><B>Effect</B>: Increase Holy Light duration by 110 seconds.
<br/>
<br/>
<p><b>D245</b> - <b>For</b> Any - <B>Research Name</B> Soulrending
<p><B>Requirement</B>: 500 Spiritual Surge, Research Soulweaving (A175) & Necromancy (S225)
<p><B>Cost</B>: 6.94Qiqig (6.94E168)
<p><B>Effect</B>: Reincarnations count twice for Spiritual Surge.
<p><B>Formula</B>: 100*(1.05^x)%, where x is the amount of times you reincarnated.
<br/>
<br/>
<p><b>D330</b> - <b>For</b> Any - <B>Research Name</B> Eternity
<p><B>Requirement</B>: Research Offering (E275) & Deliverance (D320)
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Double the duration of all faction spells.
<br/>
<br/>
<p><b>D525</b> - <b>For</b> Good - <B>Research Name</B> Purity
<p><B>Requirement</B>: 1d12h as Good(Current R), Research Communion(D205) and Devotion(D435)
<p><B>Cost</B>: 140.2 USpg (1.402E218)
<p><B>Effect</B>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.
<p><B>Formula</B>: 300 * x^0.3%p, where x is your Faction Spells' Cast This Game (Vanilla + Prestige spell count) stat.
<p><b>------------------------------</b>
<p><b>Economicsy</b>
<p><b>E145</b> - <b>For</b> Any - <B>Research Name</B> Royal Demand
<p><B>Requirement</B>: 5,000 Tax Collections (Total), Research Cultivation (C10) & Woodcraft (C105)
<p><B>Cost</B>: 17.07 Noqag (1.707E151)
<p><B>Effect</B>: Increase Tax Collection reward by 30 seconds of production.
<br/>
<br/>
<p><b>E1425</b> - <b>For</b> Any Neutral - <B>Research Name</B> Rarity
<p><B>Requirement</B>: 2592000 Time Spent (10 days with Titan, Druid and Faceless), Research A545, D245
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase Gem Grinder bonus based on the amount of artifacts you found.
<p><B>Formula</B>: 1.5 * x^1.5, where x is artifacts found. (multiplicative)
<p><b>------------------------------</b>
<p><b>Alchemy</b>
<p><b>A25</b> - <b>For</b> Demon - <B>Research Name</B> Deflagration
<p><B>Requirement</B>: 666 Hellfire Blasts (Total)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and multiplies its effect by x7.
<br/>
<br/>
<p><b>A30</b> - <b>For</b> Fairy - <B>Research Name</B> Delayed Reaction
<p><B>Requirement</B>: 750 Fairy Chanting(Total)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.
<p><B>Formula</B>: Production increase: floor(10 * ceil^1.5(t)); Duration increase: floor(x /800)^0.8) seconds; where t is how long FC has been active in seconds, and x is the number of Farms, Inns, and Blacksmiths you own.
<p><b>------------------------------</b>
<p><b>Warfare</b>
<p><b>W180</b> - <b>For</b> Any - <B>Research Name</B> Formation
<p><B>Requirement</B>: 1000 Call to Arms (Total) Research Dueling (W10) & Exertion (W50)
<p><B>Cost</B>: 24.85 Uqig (2.485E157)
<p><B>Effect</B>: Each building counts 15 times for Call to Arms purposes.
<br/>
<br/>
<p><b>W205</b> - <b>For</b> Any Evil - <B>Research Name</B> Berserking
<p><B>Requirement</B>: 850 Blood Frenzy, Research Rampage (W135) & Retribution (D150)
<p><B>Cost</B>: 627.6 Dqig (6.276E161)
<p><B>Effect</B>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.
<p><B>Formula</B>: floor(0.25x^0.9), where x is your Assistants stat.
<br/>
<br/>
<p><b>W525</b> - <b>For</b> Any - <B>Research Name</B> Bloodlust
<p><B>Requirement</B>: 1d12h as Evil, Research Berserking (W205) and Spellcraft (S460)
<p><B>Cost</B>: 140.2 USpg (1.402E218)
<p><B>Effect</B>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.
<p><B>Formula</B>: 300 * floor(x^0.3)%p, where x is Faction Spells' Cast This Game (Vanilla + Prestige spell count).
<?php include "../scripts/footer.html"; ?>
