<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>All Building Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S175</B>: - <b>For</b> Elf - <B>Research Name</B> Empowered Luck	
<p><B>Requirement</B>: Research Blessing (D1) & Augmentation (S135)</p>
<p><B>Cost</B>: 3.273 UQig (3.273E156)</p>
<p><B>Effect</B>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.</p>
<br/>
<br/>
<p><b>S270</B>: - <b>For</b> Any - <B>Research Name</B> Runecarving</p>	
<p><B>Requirement</B>: 500,000 clicks(This game)</p>
<p><B>Cost</B>: 175.2 SxQig (1.752E173)	</p>
<p><B>Effect</B>: Increase the production of all buildings except the most productive one based on maximum mana. While offline, affects all buildings.</p>
<p><B>Formula</B>: round(x^0.9)%, where x is your maximum mana.</p>
<br/>
<br/>
<p><b>S305</B>: - <b>For</b> Any - <B>Research Name</B> Mesmerization	</p>
<p><B>Requirement</B>: 5 days as Faceless(Total across all R)</p>
<p><B>Cost</B>: 225.2 OcQig (2.252E179)	</p>
<p><B>Effect</B>: Increase the production of all buildings by a fraction of your offline production bonus.</p>
<p><B>Formula</B>: 2.5 *log(1 +x)^2.5, where x is your (pre-Ascension) offline production bonus as a multiplier.
<br/>
<br/>
<p><b>S330</B>: - <b>For</b> Any - <B>Research Name</B> Reverberation	</p>
<p><B>Requirement</B>: Research Cryomancy (A200) & Weather Control (D225)</p>	
<p><B>Cost</B>: 6.443 Sxg (6.443E183)</p>
<p><B>Effect</B>: Increase the production of all buildings by 3000% while you have 3 active spells, 6000% when you have 4.</p>
<br/>
<br/>
<p><b>S460</B>: - <b>For</b> Any - <B>Research Name</B> Focus</p>    
<p><B>Requirement</B>: 25000 spells cast (This game)</p>
<p><B>Cost</B>: 5.023 SpSxg (5,023E206)</p>
<p><B>Effect</B>: Increase the production of all buildings based on the times you cast your faction spell in this game.</p>
<p><B>Formula</B>: 15 * x^0.8%, where x is Faction Spells' Cast This Game (Vanilla + Prestige spell count).</p>
<br/>
<br/>
<p><b>S545</B>: - <b>For</b> Any - <B>Research Name</B> Hierarchy</p>    
<p><B>Requirement</B>: 10M (1E7) mana produced (total)</p>
<p><B>Cost</B>: 466.3 DSpq (4.663E221)</p>
<p><B>Effect</B>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</p>
<p><B>Formula</B>: (0.1 * x^0.45 * T^2)%, where x is Mana Produced (This Game) stat, and T is the building tier, starting at 11 for Farms and decreasing to 1 for Halls of Legends</p>
<p><b>----------------------------------</b></p>
<p><b>Craftsmanship</b>
<p><b>C135</b> - <b>For</b> Any - <B>Research Name</B> Reinforcing</p>
<p><B>Requirement</B>: 250,000 clicks(This Game, as Elf)</p>
<p><B>Cost</B>: 296 Ocqag (2.96E149)</p>
<p><B>Effect</B>: Increase the production of all buildings based on your total number of clicks.</p>
<p><B>Formula</B>: (ln(1 + x))^2.75%, where x is your Treasure Clicks (Total) stat.</p>
<br/>
<br/>
<p><b>C150</b> - <b>For</b> Any - <B>Research Name</B> Tinkering</p>
<p><B>Requirement</B>: Research Recycling (E10) & Reinforcing (C135)</p>
<p><B>Cost</B>: 129.6 Noqag (1.296E152)</p>
<p><B>Effect</B>: Increase the production of all buildings based on the amount of research made.</p>
<p><B>Formula</B>: round(125 * x^0.38)%, where x is number of researches made.</p>
<br/>
<br/>
<p><b>C1500</b> - <b>For</b> Titan,Dragon - <B>Research Name</B> Gargantuaness</p>
<p><B>Requirement</B>: 2500 Royal Exchanges, D1275, Affiliated Titan/Dragon</p>
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of all buildings based on total time spent as Neutral.</p>
<p><B>Formula</B>: (1.5 * x)^0.7, where x is neutral time (this R) in minutes.</p>
<br/>
<br/>
<p><b>C3000</b> - <b>For</b> Mercenary - <B>Research Name</B> Customizing</p>
<p><B>Requirement</B>: 9000 Excavations as Mercenary.</p>
<p><B>Cost</B>: 280.7 SpQig (2.807e176)
<p><B>Effect</B>: Increases the production of all buildings based on the amount of artifacts you own.</p>
<p><B>Formula</B>: 1.75 * x ^ 1.75, where x is artifacts</p>
<p><b>----------------------------------</b></p>
<p><b>Divine</b>
<p><b>D25</b> - <b>For</b> Undead - <B>Research Name</B> Cursing
<p><B>Requirement</B>: Play 8 hours Offline(as Undead)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increase the production of all buildings based on your offline production bonus.
<p><B>Formula</B>: 2.75 * log(1 + x)^2.75, where x is your offline production bonus.
<br/>
<br/>
<p><b>D480</b> - <b>For</b> Any - <B>Research Name</B> Mercy
<p><B>Requirement</B>: 12h Spent as each Good, Evil and Neutral alignment
<p><B>Cost</B>: 1.67 NoSxg (1.67E210)
<p><B>Effect</B>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.
<p><B>Formula</B>:  100000 * (tmin / tmax)^1.5%, where tmin and tmax are the shortest and longest Time Spent Being Alignment (Total) Stat.
<br/>
<br/>
<p><b>D1275</b> - <b>For</b> Any - <B>Research Name</B> Solemnity
<p><B>Requirement</B>: 100000 Total Buildings
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of each building by + 0.25% per building of the same type.
<p><B>Formula</B>: N/A
<p><b>----------------------------------</b></p>
<p><b>Economics</b>
<p><b>E150</b> - <b>For</b> Any - <B>Research Name</B> Investment
<p><B>Requirement</B>: Research Bribing (E135) & Commerce (E25)
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of gold you own.
<p><B>Formula</B>: round( (ln(1 + x)) ^1.25 )%, where x is the amount of gold you own.
<br/>
<br/>
<p><b>E200</b> - <b>For</b> Any - <B>Research Name</B> Acquisition
<p><B>Requirement</B>: Research Investment (E150) & Common Business (E80)
<p><B>Cost</B>: 82.65 Dqig (8.265E160)
<p><B>Effect</B>: Increase the production of all buildings based on your percentage of trophies unlocked.
<p><B>Formula</B>: round(0.0003 * (100 * x)^3.35), where x is trophiesunlocked / trophiesmax.
<br/>
<br/>
<p><b>E330</b> - <b>For</b> Any - <B>Research Name</B> Collection
<p><B>Requirement</B>: Research Acquisition (E200) & Forgery (E225a)
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of artifacts you found.
<p><B>Formula</B>: round(50 * x^1.1)%, where x is the amount of artifacts found.
<br/>
<br/>
<p><b>E350</b> - <b>For</b> Faceless - <B>Research Name</B> Repurpose
<p><B>Requirement</B>: Research Journeymen (C200) & Adaptation (A330)(as Faceless)
<p><B>Cost</B>: 21.42 USxg (2.142E187)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of Reincarnations you made.
<p><B>Formula</B>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.
<p><b>----------------------------------</b></p>
<p><b>Alchemy</b>
<p><b>A105</b> - <b>For</b> Any - <B>Research Name</B> Fusion
<p><B>Requirement</B>: 2750 Blacksmiths
<p><B>Cost</B>: 1.544 Spqag (1.544E144)
<p><B>Effect</B>: Increases the production of buildings based on the amount of Faction Coins found this game.
<p><B>Formula</B>: round(0.7 * ln^3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>A135</b> - <b>For</b> Any - <B>Research Name</B> Decay
<p><B>Requirement</B>: 1 Day Total Play Time (as Undead)
<p><B>Cost</B>: 296 OcQag (9.6E149)
<p><B>Effect</B>: Increase the production on all buildings based on total time spent.
<p><B>Formula</B>: round(c * x^0.7)%, where x is your Playtime (Total) in seconds stat and c is 0.03(2^0.7), which is approximately 0.049.
<br/>
<br/>
<p><b>A175</b> - <b>For</b> Undead - <B>Research Name</B> Soulweaving
<p><B>Requirement</B>: Research Cursing (D25) & Reinforcing (C135)
<p><B>Cost</B>: 3.273 Uqig (3.273E156)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of times you Reincarnated.
<p><B>Formula</B>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.
<br/>
<br/>
<p><b>A330</b> - <b>For</b> Any - <B>Research Name</B> Adaptation
<p><B>Requirement</B>: Research Mutation (D260) & Meditation (D275)
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Increase the production of all buildings based on time spent playing as other factions.
<p><B>Formula</B>: round(0.05 * x^0.7)%, where x is time spent as other factions.
<br/>
<br/>
<p><b>A545</b> - <b>For</b> Any - <B>Research Name</B> Mineralogy
<p><B>Requirement</B>: 700 trophies
<p><B>Cost</B>: 466.3 DSpg (4.663E221)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of rubies you own.
<p><B>Formula</B>: 10 * x^1.05%, where x is your Rubies Gained (All Time) stat.
<br/>
<br/>
<p><b>A590</b> - <b>For</b>  Undead,Drow - <B>Research Name</B> Hexing
<p><B>Requirement</B>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)
<p><B>Effect</B>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.
<p><B>Formula</B>:  (0.045 * x^0.45 * P)%, where x is your Mana Produced (This Game) stat and P is the percentage of your Time Spent Offline for this game.
<p><b>----------------------------------</b></p>
<p><b>Warfare</b>
<p><b>W25</b> - <b>For</b> Goblin - <B>Research Name</B> War Funds
<p><B>Requirement</B>: 1 Tqag (1E132) Coins Gained (This Game)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.
<p><B>Formula</B>: round(5 * x^0.6)%, where x is Tax Collections Cast This Game.
<br/>
<br/>
<p><b>W150</b> - <b>For</b> Any - <B>Research Name</B> Invasion
<p><B>Requirement</B>: Research War Funds (W25) & Trophies (W135)
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of assistants you own.
<p><B>Formula</B>: round(32 * x^0.75)%, where x is the amount of assistants you own.
<br/>
<br/>
<p><b>W3150</b> - <b>For</b> All Factions - <B>Research Name</B> Upheaval
<p><B>Requirement</B>: 60000 Enchanted Fields, Inns and Dwarven Forges.
<p><B>Cost</B>: 357.2 Sxg (3.572e185)
<p><B>Effect</B>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.
<p><B>Formula</B>: 50*(12-T)^2.15, where T is building tier.
<?php include "../scripts/footer.html"; ?>