<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
        <h6>Alchemy Facility</h6>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Alchemyr.png" alt="Alchemy" align="middle"> <b>Alchemy</b></p>
        <p>Tap the near-unlimited sources of Alchemy to improve your production and benefit from all your assets.</p>
        <p><b>Increases</B>: <b>Undead</B>, <b>Druid</B>, and <b>Drow</B> production.</p>
        <p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
        <br/>
        <p><b>Research Point Production</b></p>
        <p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
        <br/>
        <p><b>A1</b> - For Undead</p>
        <p><b>Research Name</b>: Plague</p>
        <p><b>Cost</b>: 750 Qag (7.50E125)</p>
        <p><b>Effect</b>: Increase the production of Undercities by 8% per assistant you own.</p>
        <hr>
        <p><b>A10</b> - For Goblin</p>
        <p><b>Research Name</b>: Transmutation</p>
        <p><b>Requirement</b>: 2250 Goblin Banks</p>
        <p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
        <p><b>Effect</b>: Increase the production of all other buildings by 85% per Goblin Bank you own.</p>
        <hr>
        <p><b>A25</b> - For Demon</p>
        <p><b>Research Name</b>: Deflagration</p>
        <p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)</p>
        <p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
        <p><b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and increases its effect by 1000%.</p>
        <hr>
        <p><b>A30</b> - For Fairy</p>
        <p><b>Research Name</b>: Delayed Reaction</p>
        <p><b>Requirement</b>: 750 Fairy Chanting (Total this R)</p>
        <p><b>Cost</b>: 95.88 Dqag (9.588E130)</p>
        <p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.</p>
        <p><b>Formula</b>: Additive Production increase: floor(1000 * t ^ 1.5), where t is how long FC has been active in seconds.</p>
        <p><b>Formula</b>: Duration increase: floor(x / 800) ^ 0.8) seconds, where x is the number of Farms, Inns, and Blacksmiths you own.</p>
        <hr>
        <p><b>A50</b> - For Angel</p>
        <p><b>Research Name</b>: Gilding</p>
        <p><b>Requirement</b>: 120 m/s Mana Regen(as Undead)</p>
        <p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
        <p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate.</p>
        <p><b>Formula</b>: (1.45 * x ^ 0.45), where x is the number of Heaven's Domains you own.</p>
        <hr>
        <p><b>A55</b> - For All Factions</p>
        <p><b>Research Name</b>: Refraction</p>
        <p><b>Requirement</b>: Cast 25000 spells (This Game)</p>
        <p><b>Cost</b>: 2.421 Qaqag (2.421E135)</p>
        <p><b>Effect</b>: Improve offline production based on spells cast.</p>
        <p><b>Formula</b>: round(5 * x ^ 0.85), where x is your Spells Cast (Total) stat.</p>
        <hr>
        <p><b>A105</b> - For All Factions</p>
        <p><b>Research Name</b>: Fusion</p>
        <p><b>Requirement</b>: 2750 Blacksmiths</p>
        <p><b>Cost</b>: 1.544 Spqag (1.544E144)</p>
        <p><b>Effect</b>: Increases the production of buildings based on the amount of Faction Coins found this game.</p>
        <p><b>Formula</b>: round(0.7 * ln ^ 3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
        <hr>
        <p><b>A120</b> - For All Factions</p>
        <p><b>Research Name</b>: Vivification</p>
        <p><b>Requirement</b>: Have 6500 mana</p>
        <p><b>Cost</b>: 676 Spqag (6.76E146)</p>
        <p><b>Effect</b>: Gain additional assistants based on max mana.</p>
        <p><b>Formula</b>: floor((x / 15) ^ 0.825), where x is your maximum mana.</p>
        <hr>
        <p><b>A135</b> - For All Factions</p>
        <p><b>Research Name</b>: Decay</p>
        <p><b>Requirement</b>: 1 Day Total Play Time any Faction (This R) (Must be Undead to unlock once condition is met.)</p>
        <p><b>Cost</b>: 296 OcQag (9.6E149)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation.</p>
        <p><b>Formula</b>: (0.03 * (2x) ^ 0.7)%, where x is time spent in this Reincarnation in seconds.</p>
        <hr>
        <p><b>A150</b> - For All Factions</p>
        <p><b>Research Name</b>: Explosives</p>
        <p><b>Requirement</b>: Research (A25) Deflagration & (A30) Delayed Reaction</p>
        <p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
        <p><b>Effect</b>: Whenever you cast a spell, increase the production of your most productive building based on the amount of mana produced in this game for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
        <p><b>Formula</b>: round(0.7 * x ^ 0.6)%, where x is your Mana Produced (Total) stat.</p>
        <hr>
        <p><b>A175</b> - For Undead</p>
        <p><b>Research Name</b>: Soulweaving</p>
        <p><b>Requirement</b>: Research Cursing (D25) & Reinforcing (C135)</p>
        <p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the amount of times you Reincarnated.</p>
        <p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.</p>
        <hr>
        <p><b>A200</b> - For All Factions</p>
        <p><b>Research Name</b>: Corrosion</p>
        <p><b>Requirement</b>: Research Plague (A1) & Decay (A135)</p>
        <p><b>Cost</b>: 82.65 Dqig (82.65E160)</p>
        <p><b>Effect</b>: Increase clicking reward based on time spent in this game.</p>
        <p><b>Formula</b>: (0.07 * (2x) ^ 0.75)%, where x is your Playtime (This Game) in seconds.</p>
        <hr>
        <p><b>A250</b> - For All Factions</p>
        <p><b>Research Name</b>: Philosopher's Stone</p>
        <p><b>Requirement</b>: Research Transmutation (A10) & Empowered Luck (S175)</p>
        <p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
        <p><b>Effect</b>: Increase production bonus from gems based on the amount of research made.</p>
        <p><b>Formula</b>: floor(x ^ 0.9 / 25)%, where x is the amount of research made.</p>
        <hr>
        <p><b>A251</b> - For Druid</p>
        <p><b>Research Name</b>: Infusion</p>
        <p><b>Requirement</b>: Secrets of the Ancients (as Druids)</p>
        <p><b>Cost</b>: 79.05 QiQig (7.905E169)</p>
        <p><b>Effect</b>: Increase the production of Stonehenge Circles based on mana produced in this game.</p>
        <p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.</p>
        <hr>
        <p><b>A270</b> - For All Factions</p>
        <p><b>Research Name</b>: Synthesis</p>
        <p><b>Requirement</b>: 20 B (2E10) Faction Coins (Found this game)</p>
        <p><b>Cost</b>: 175.2 SxQig (1.752E173)</p>
        <p><b>Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.</p>
        <p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25), where x is Factions Coins found (this game).</p>
        <hr>
        <p><b>A300</b> - For Faceless</p>
        <p><b>Research Name</b>: Creeping</p>
        <p><b>Requirement</b>: Produce 5M mana (This game, as Druid)</p>
        <p><b>Cost</b>: 33 OcQig (3.36E178)</p>
        <p><b>Effect</b>: Increase mana regeneration based on mana produced in this game.</p>
        <p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.</p>
        <hr>
        <p><b>A305</b> - For All Factions</p>
        <p><b>Research Name</b>: Engraving</p>
        <p><b>Requirement</b>: 2 days as Druids (Total across all R)</p>
        <p><b>Cost</b>: 255.2 OcQig (2.552E179)</p>
        <p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.</p>
        <p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.</p>
        <p><b>Formula</b>: floor(3.5 * ln(1 + x) ^ 3.5)%, where x is your Spells Cast (This Game) stat,</p>
        <hr>
        <p><b>A330</b> - For All Factions</p>
        <p><b>Research Name</b>: Adaptation</p>
        <p><b>Requirement</b>: Research Mutation (D260) & Meditation (D275)</p>
        <p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions.</p>
        <p><b>Formula</b>: round(0.05 * x ^ 0.7)%, where x is time spent as other factions.</p>
        <hr>
        <p><b>A375</b> - For Druid</p>
        <p><b>Research Name</b>: Transfusion</p>
        <p><b>Requirement</b>: Research Infusion (A251) & Engraving (A305)</p>
        <p><b>Cost</b>: 541 DSxg (5.41E191)</p>
        <p><b>Effect</b>: Gain additional assistants based on mana produced this game.</p>
        <p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.</p>
        <hr>
        <p><b>A400</b> - For All Factions But Mercenary</p>
        <p><b>Research Name</b>: Bloodspring</p>
        <p><b>Requirement</b>: Research Assimilation (S251) & Transfusion (A375).</p>
        <p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
        <p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.</p>
        <p><b>Note</b>: Provides Prestige Bloodline for Elite Factions from R125 to R129, MAD bloodlines at R130+.</p>
        <p><b>Note</b>: Does not work with two Bloodlines of the same type.</p>
        <hr>
        <p><b>A410</b> - For Drow</p>
        <p><b>Research Name</b>: Poisons</p>
        <p><b>Requirement</b>: 4000 Sanctuaries</p>
        <p><b>Cost</b>: 787.7 QaSxg (7.877E197)</p>
        <p><b>Effect</b>: Increase the production of all other buildings by 95% per Spider Sanctuary you own.</p>
        <hr>
        <p><b>A480</b> - For All Factions</p>
        <p><b>Research Name</b>: Waste</p>
        <p><b>Requirement</b>: 2000 Royal Exchanges</p>
        <p><b>Cost</b>: 1.67 NoSxg (1.67E210)</p>
        <p><b>Effect</b>: Increase offline production based on the amount of Royal Exchanges you purchased.</p>
        <p><b>Formula</b>: 120 * x ^ 0.85, where x is your Royal Exchanges Made stat.</p>
        <hr>
        <p><b>A495</b> - For Dwarf</p>
        <p><b>Research Name</b>: Elixirs</p>
        <p><b>Requirement</b>: 500 Base Assistants (as Drow)</p>
        <p><b>Cost</b>: 731.4 NoSxg (7.314E212)</p>
        <p><b>Effect</b>: Increase assistants production based on the amount of research made.</p>
        <p><b>Formula</b>: (120 * x ^ 0.42)%, where x is the Amount of Researches made.</p>
        <hr>
        <p><b>A545</b> - For All Factions</p>
        <p><b>Research Name</b>: Mineralogy</p>
        <p><b>Requirement</b>: 700 trophies</p>
        <p><b>Cost</b>: 466.3 DSpg (4.663E221)</p>
        <p><b>Effect</b>: Increases mana regeneration based on Gems you own.</p>
        <p><b>Formula</b>: log10(x) / 2, where x is Gems you own.</p>
        <hr>
        <p><b>A590</b> - For Undead,Drow</p>
        <p><b>Research Name</b>: Hexing</p>
        <p><b>Requirement</b>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)</p>
        <p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.</p>
        <p><b>Formula</b>: (0.045 * x ^ 0.45 * p)%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.</p>
        <hr>
        <p><b>A1200</b> - For Neutral,Dragon</p>
        <p><b>Research Name</b>: Melting</p>
        <p><b>Requirement</b>: 5000 Iron Stronghold, Any Neutral Dragon</p>
        <p><b>Cost</b>: 5.195 Uvg (5.195e66)</p>
        <p><b>Effect</b>: Increase the production of all other buildings per Iron Strongholds owned by 0.35%</p>
        <p><b>Formula</b>: (0.35 * x)%, where x is Iron Strongholds owned</p>
        <hr>
        <p><b>A1325</b> - For All Factions</p>
        <p><b>Research Name</b>: Calefaction</p>
        <p><b>Requirement</b>: 4500 Excavations (This R)</p>
        <p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.</p>
        <p><b>Formula</b>: floor(0.02 * x), where x is current excavations</p>
        <p><b>Tip</b>: E290 and end of R54.</p>
        <hr>
        <p><b>A1500</b> - For Druid,Dragon</p>
        <p><b>Research Name</b>: Sublimation</p>
        <p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon</p>
        <p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
        <p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
        <p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 250%.</p>
        <p><b>Formula</b>: (40 * x * 0.8), where x is Unique Buildings owned.</p>
        <hr>
        <p><b>A2950</b> - For Mercenary</p>
        <p><b>Research Name</b>: Combination</p>
        <p><b>Requirement</b>: All Lineages Level at 15.</p>
        <p><b>Cost</b>: 259 SxQig (2.59e173)</p>
        <p><b>Effect</b>: Select an additional bloodline.</p>
        <p><b>Effect</b>: You also gain the base effect of its respective Lineage.</p>
        <p><b>Effect</b>: Combination Bloodline effects R60/R115 power.</p>
        <hr>
        <p><b>A3400</b> - For All Factions</p>
        <p><b>Research Name</b>: Chemistry</p>
        <p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) & (Manipulation S3200).</p>
        <p><b>Cost</b>: 894.5 QiQig (5.69e197)</p>
        <p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.</p>
        <p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 300%.</p>
        <p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.</p>
        <hr>
        <p><b>A5125</b> - For All Factions</p>
        <p><b>Research Name</b>: Putrefaction</p>
        <p><b>Requirement</b>: R175+, Forgotten Relic, Athanor artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase the production of Non-Unique buildings based on the longest time spent without abdicating in this Reincarnation.</p>
        <p><b>Formula</b>: (x ^ 0.75), where x is the longest time spent without abdicating (This R, can also be This Game)</p>
        <hr>
        <p><b>A5375</b> - For Order</p>
        <p><b>Research Name</b>: Albedo</p>
        <p><b>Requirement</b>: R177+, Forgotten Relic, Athanor artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase all spells duration based on spell casts in this game.</p>
        <p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game</p>
        <hr>
        <p><b>A5625</b> - For All Factions</p>
        <p><b>Research Name</b>: Reduction</p>
        <p><b>Requirement</b>: R179+, Forgotten Relic, Athanor artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Reduce all spells cost based on their individual duration.</p>
        <p><b>Formula</b>: Additive reduction: ((x/y) ^ 0.65), where x is duration and y is base duration.</p>
        <hr>
        <p><b>A5875</b> - For All Factions</p>
        <p><b>Research Name</b>: Equivalence</p>
        <p><b>Requirement</b>: R181+, Forgotten Relic, Athanor artifact and upgrade/p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on Faction Coin found in this game.</p>
        <p><b>Formula</b>: (log10(x) ^ 1.5), where x is faction coins this game</p>
        <?php include "../scripts/footer.html"; ?>
