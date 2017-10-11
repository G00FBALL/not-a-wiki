<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>The Research Facility</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Alchemyr.png" alt="Alchemy" align="middle"> <b>Alchemy</b></p>
<p>Tap the near-unlimited sources of Alchemy to improve your production and benefit from all your assets.</p>
<p><b>Increases</B>: <b>Undead</B>, <b>Druid</B>, and <b>Drow</B> production.</p>
<p><b>----------------------------------</b></p>
<h6>Alchemy Facility</h6>
<p><b>A1</b> - <b>For</b> Undead - <B>Research Name</B> Plague</p>
<p><B>Cost</B>: 750 Qag (7.50E125)</P>
<p><B>Effect</B>: Increase the production of Undercities by 8% per assistant you own.</p>
<p><b>----------------------------------</b></p>
<p><b>A10</b> - <b>For</b> Goblin - <B>Research Name</B> Transmutation</p>
<p><B>Requirement</B>: 2250 Goblin Banks
<p><B>Cost</B>: 28.83 Uqag (2.883E127)
<p><B>Effect</B>: Increase the production of all other buildings by 85% per Goblin Bank you own.</p>
<p><b>----------------------------------</b></p>
<p><b>A25</b> - <b>For</b> Demon - <B>Research Name</B> Deflagration
<p><B>Requirement</B>: 666 Hellfire Blasts (Total this R)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and multiplies its effect by x7.
<p><b>----------------------------------</b></p>
<p><b>A30</b> - <b>For</b> Fairy - <B>Research Name</B> Delayed Reaction
<p><B>Requirement</B>: 750 Fairy Chanting (Total this R)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.
<p><B>Formula</B>: Additive Production increase: floor(1000 * t^1.5); Duration increase: floor(x / 800)^0.8) seconds; where t is how long FC has been active in seconds, and x is the number of Farms, Inns, and Blacksmiths you own.
<p><b>----------------------------------</b></p>
<p><b>A50</b> - <b>For</b> Angel - <B>Research Name</B> Gilding
<p><B>Requirement</B>: 120 m/s Mana Regen (as Undead)
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Heaven's Domains further increase your mana regeneration rate.
<p><B>Formula</B>: 1.45 * x^0.45, where x is the number of Heaven's Domains you own.
<p><b>----------------------------------</b></p>
<p><b>A55</b> - <b>For</b> Any - <B>Research Name</B> Refraction
<p><B>Requirement</B>: Cast 25000 spells (This Game)
<p><B>Cost</B>: 2.421 Qaqag (2.421E135)
<p><B>Effect</B>: Improve offline production based on spells cast.
<p><B>Formula</B>: 5 * x ^ 0.85, where x is your Spells Cast (Total) stat.
<p><b>----------------------------------</b></p>
<p><b>A105</b> - <b>For</b> Any - <B>Research Name</B> Fusion
<p><B>Requirement</B>: 2750 Blacksmiths
<p><B>Cost</B>: 1.544 Spqag (1.544E144)
<p><B>Effect</B>: Increases the production of buildings based on the amount of Faction Coins found this game.
<p><B>Formula</B>: round(0.7 * ln^3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>A120</b> - <b>For</b> Any - <B>Research Name</B> Vivification
<p><B>Requirement</B>: Have 6500 mana
<p><B>Cost</B>: 676 Spqag (6.76E146)
<p><B>Effect</B>: Gain additional assistants based on max mana.
<p><B>Formula</B>: floor(x/15)^0.825), where x is your maximum mana.
<p><b>----------------------------------</b></p>
<p><b>A135</b> - <b>For</b> Any - <B>Research Name</B> Decay
<p><B>Requirement</B>: 1 Day Total Play Time (This R) (Must be Undead to unlock once condition is met.)
<p><B>Cost</B>: 296 OcQag (9.6E149)
<p><B>Effect</B>: Increase the production on all buildings based on total time spent.
<p><B>Formula</B>: round(c * x^0.7)%, where x is your Playtime (Total) in seconds stat and c is 0.03(2^0.7), which is approximately 0.049.
<p><b>----------------------------------</b></p>
<p><b>A150</b> - <b>For</b> Any - <B>Research Name</B> Explosives
<p><B>Requirement</B>: Research (A25) Deflagration & (A30) Delayed Reaction
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Whenever you cast a spell, increase the production of your most productive building based on the amount of mana produced in this game for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.
<p><B>Formula</B>: round(0.7 * x^0.6)%, where x is your Mana Produced (Total) stat.
<p><b>----------------------------------</b></p>
<p><b>A175</b> - <b>For</b> Undead - <B>Research Name</B> Soulweaving
<p><B>Requirement</B>: Research Cursing (D25) & Reinforcing (C135)
<p><B>Cost</B>: 3.273 Uqig (3.273E156)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of times you Reincarnated.
<p><B>Formula</B>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.
<p><b>----------------------------------</b></p>
<p><b>A200</b> - <b>For</b> Any - <B>Research Name</B> Corrosion
<p><B>Requirement</B>: Research Plague (A1) & Decay (A135)
<p><B>Cost</B>: 82.65 Dqig (82.65E160)
<p><B>Effect</B>: Increase clicking reward based on time spent in this game.
<p><B>Formula</B>: round(c * x^0.75)%, where x is your Playtime (Total) in seconds stat and c is 0.07(2^0.75), which is approximately 0.118.
<p><b>----------------------------------</b></p>
<p><b>A250</b> - <b>For</b> Any - <B>Research Name</B> Philosopher's Stone
<p><B>Requirement</B>: Research Transmutation (A10) & Empowered Luck (S175)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Increase production bonus from gems based on the amount of research made.
<p><B>Formula</B>: floor(x^0.9 / 25)%, where x is the amount of research made.
<p><b>----------------------------------</b></p>
<p><b>A251</b> - <b>For</b> Druid - <B>Research Name</B> Infusion
<p><B>Requirement</B>: Secrets of the Ancients (as Druids)
<p><B>Cost</B>: 79.05 QiQig (7.905E169)
<p><B>Effect</B>: Increase the production of Stonehenge Circles based on mana produced in this game.
<p><B>Formula</B>: round(0.75 * x ^0.6)%, where x is your Mana Produced (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>A270</b> - <b>For</b> Any - <B>Research Name</B> Synthesis
<p><B>Requirement</B>: 20 B (2E10) Faction Coins (Found this game)
<p><B>Cost</B>: 175.2 SxQig (1.752E173)
<p><B>Effect</B>: Increase mana regeneration based on the amount of Faction Coins found in this game.
<p><B>Formula</B>: floor(15 * ln(1 + x)) / 10, where x is your Faction Coins Gained (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>A300</b> - <b>For</b> Faceless - <B>Research Name</B> Creeping
<p><B>Requirement</B>: Produce 5M mana (This game, as Druid)
<p><B>Cost</B>: 33 OcQig (3.36E178)
<p><B>Effect</B>: Increase mana regeneration based on mana produced in this game.
<p><B>Formula</B>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>A305</b> - <b>For</b> Any - <B>Research Name</B> Engraving
<p><B>Requirement</B>: 5 days as Druids (Total across all Rs)
<p><B>Cost</B>: 255.2 OcQig (2.552E179)
<p><B>Effect</B>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.
<p><B>Effect</B>: Also increase Faction Coins find chance by a multiplicative 100%. 
<p><B>Formula</B>: floor(3.5 * logE(1+x) ^ 3.5)%, where x is your Spells Cast (This Game) stat, or approximately floor((ln(x) + 0.69)^2.75)%, where x is your Spells Cast (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>A330</b> - <b>For</b> Any - <B>Research Name</B> Adaptation
<p><B>Requirement</B>: Research Mutation (D260) & Meditation (D275)
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Increase the production of all buildings based on time spent playing as other factions.
<p><B>Formula</B>: round(0.05 * x^0.7)%, where x is time spent as other factions.
<p><b>----------------------------------</b></p>
<p><b>A375</b> - <b>For</b> Druid - <B>Research Name</B> Transfusion
<p><B>Requirement</B>: Research Infusion (A251) & Engraving (A305)
<p><B>Cost</B>: 541 DSxg (5.41E191)
<p><B>Effect</B>: Gain additional assistants based on mana produced this game.
<p><B>Formula</B>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>A400</b> - <b>For</b> Any - <B>Research Name</B> Bloodspring
<p><B>Requirement</B>: Research Assimilation (S251) & Transfusion (A375).
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)
<p><B>Effect</B>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.
<p><B>NOTE</B>: Does not work with two Bloodlines of the same type.
<p><B>NOTE</B>: If you buy a prestige faction upgrade, bloodspring will switch to the prestige bloodline.
<p><b>----------------------------------</b></p>
<p><b>A410</b> - <b>For</b> Drow - <B>Research Name</B> Poisons
<p><B>Requirement</B>: 4000 Sanctuaries
<p><B>Cost</B>: 787.7 QaSxg (7.877E197)
<p><B>Effect</B>: Increase the production of all other buildings by 95% per Spider Sanctuary you own.
<p><b>----------------------------------</b></p>
<p><b>A480</b> - <b>For</b> Any - <B>Research Name</B> Waste
<p><B>Requirement</B>: 2000 Royal Exchanges
<p><B>Cost</B>: 1.67 NoSxg (1.67E210)
<p><B>Effect</B>: Increase offline production based on the amount of Royal Exchanges you purchased.
<p><B>Formula</B>: 120 * x ^ 0.85, where x is your Royal Exchanges Made stat.
<p><b>----------------------------------</b></p>
<p><b>A495</b> - <b>For</b> Dwarf - <B>Research Name</B> Elixirs
<p><B>Requirement</B>: 500 Base Assistants (as Drow)
<p><B>Cost</B>: 731.4 NoSxg (7.314E212)
<p><B>Effect</B>: Increase assistants production based on the amount of research made.
<p><B>Formula</B>: 120 * x^0.42%, where x is the Amount of Researches made.
<p><b>----------------------------------</b></p>
<p><b>A545</b> - <b>For</b> Any - <B>Research Name</B> Mineralogy
<p><B>Requirement</B>: 700 trophies
<p><B>Cost</B>: 466.3 DSpg (4.663E221)
<p><B>Effect</B>: Increase the production of all buildings based on the amount of rubies you own.
<p><B>Formula</B>: 10 * x^1.05%, where x is your Rubies Gained (All Time) stat.
<p><b>----------------------------------</b></p>
<p><b>A590</b> - <b>For</b>  Undead,Drow - <B>Research Name</B> Hexing
<p><B>Requirement</B>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)
<p><B>Effect</B>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.
<p><B>Formula</B>:  (0.045 * x^0.45 * P)%, where x is your Mana Produced (This Game) stat and P is the percentage of your Time Spent Offline for this game.
<p><b>----------------------------------</b></p>
<p><b>A1200</B>: - <b>For</b>  Neutral,Dragon - <B>Research Name</B> Melting
<p><B>Requirement</B>: 5000 Iron Stronghold, Affiliated Dragon
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of all other buildings per Iron Strongholds owned
<p><B>Formula</B>: 0.35 * x, where x is iron strongholds owned
<p><b>----------------------------------</b></p>
<p><b>A1325</b> - <b>For</b>  Any - <B>Research Name</B> Calefaction
<p><B>Requirement</B>: 5500 Excavations (This R)
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase mana regeneration based on the amount of excavations made.
<p><B>Formula</B>:  floor(0.25 * x), where x is current excavations
<p><b>----------------------------------</b></p>
<p><b>A1500</b> - <b>For</b>  Druid,Dragon - <B>Research Name</B> Sublimation
<p><B>Requirement</B>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325,
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase Max Mana based on the amount of Unique Buildings you own.
<p><B>Formula</B>: 8*x^0.8, where x is Unique Buildings owned.
<p><b>----------------------------------</b></p>
<p><b>A2950</b> - <b>For</b>  Mercenary - <B>Research Name</B> Combination
<p><B>Requirement</B>: All Lineages Level at 15.
<p><B>Cost</B>: 259 SxQig (2.59e173)
<p><B>Effect</B>: Select an aditional bloodline.
<p><B>Effect</B>: You also gain all the base effect of its respective Lineage.
<p><b>----------------------------------</b></p>
<p><b>A3400</b> - <b>For</b>  All Factions - <B>Research Name</B> Chemistry
<p><B>Requirement</B>: 1 No (1e30) FC (Found this Game), (Customizing C3000) and (Manipulation S3200).
<p><B>Cost</B>: 533.7 QiSxg (5.337e200)
<p><B>Effect</B>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.
<p><B>Effect</B>: Also increases Faction Coin find chance by a multiplicative 350%.
<p><B>Formula</B>: 3 * x ^ 2.25, where x is total Lineage levels.
<?php include "../scripts/footer.html"; ?>






