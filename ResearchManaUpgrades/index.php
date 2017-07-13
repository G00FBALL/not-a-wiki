<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Mana Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S30</b> - <b>For</b> Any - <B>Research Name</B> Vacuumancy</p>
<p><B>Requirement</B>: Have 4000 Mana</P>
<p><B>Cost</B>: 95.88 Dqag (9.588E130)</P>
<p><B>Effect</B>: Increase maximum mana and mana regeneration rate based on time spent in this game.</p>
<p><B>Formula</B>: Maximum Mana: floor(45x), Mana Regeneration: \frac {floor(75x^{0.4})} {10}, where x is your Playtime (This Game) stat in hours.</p>
<br/>
<br/>
<p><b>S105</B>: - <b>For</b> Any - <B>Research Name</B> Mysticism	</p>
<p><B>Requirement</B>: 600 Researches</p>
<p><B>Cost</B>: 1.544 Spqag (1.544E144)	</p>
<p><B>Effect</B>: Increase mana regeneration based on the amount of research made.</p>
<p><B>Formula</B>: floor(x^0.5), where x is number of researches made.</p>
<br/>
<br/>
<p><b>S180</B>: - <b>For</b> Fairy - <B>Research Name</B> Incantation    </p>
<p><B>Requirement</B>: Research Enchanting (S1) & Mysticism (S105)</p>
<p><B>Cost</B>: 3.273 UQig (3.273E156)</p>
<p><B>Effect</B>: Increase mana regeneration based on the number of assistants you own.</p>
<p><B>Formula</B>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.</p>
<br/>
<br/>
<p><b>S400</B>: - <b>For</b> Any - <B>Research Name</B> Capacity</p>	
<p><B>Requirement</B>: Research Projection (S215) & Incantation (S175)</p>
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)	</p>
<p><B>Effect</B>: Increase maximum mana based on the highest amount of spells cast in a single game.</p>
<p><B>Formula</B>: floor(35 * x ^ 0.35), where x is your Spell Cast (Max) stat.</p>
<br/>
<br/>
<p><b>S500</B>: - <b>For</b> Any - <B>Research Name</B> Heirlooms</p>    
<p><B>Requirement</B>: 40 Artifacts (as Drow)</p>
<p><B>Cost</B>: 5.554 Spg (5,554E213)</p>
<p><B>Effect</B>: Increases maximum mana based on artifacts found.</p>
<p><B>Formula</B>: 100 * x ^ 1.1, where x is artifacts found.
<br/>
<br/>
<p><b>S3200</b>: - For All Factions - Research Name Manipulation
<p><b>Requirement</b>: 1B (1e9) Tax Collection cast, (Calefaction A1325) and (Psionics S1500).
<p><b>Cost</b>: 387 USsx (3.87.188)
<p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (good merc TC tiers also count).
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C25</b> - <b>For</b> Angel - <B>Research Name</B> Light Condenser</p>
<p><B>Requirement</B>: 12,000 Spells cast(Total)</p>
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increase mana regeneration based on the amount of spells cast.</p>
<p><B>Formula</B>: floor(10 * x^0.3) / 10, where x is your Spells Cast (This Game) stat.</p>
<br/>
<br/>
<p><b>C3100</b> - <b>For</b> All Factions - <B>Research Name</B> Engineering</p>
<p><B>Requirement</B>: 15 days Mercenary time spent (Total).</p>
<p><B>Cost</B>: 329.6 NoQig (3.296e182)
<p><B>Effect</B>: Increase maximum mana based on the total amount of clicks made (This R).</p>
<p><B>Formula</B>: (7.5 * log10(x + 1))^2.15, where x is clicks made</p>
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D135</b> - <b>For</b> Any - <B>Research Name</B> Illumination
<p><B>Requirement</B>: 250 m/s Mana Regen(as Angel)
<p><B>Cost</B>: 296 Ocqag (2.96E149)
<p><B>Effect</B>: Increases mana regeneration based on the amount of gems you own.
<p><B>Formula</B>: floor(10 * log(1+x) / 8, where x is amount of gems you own.
<br/>
<br/>
<p><b>D275</b> - <b>For</b> Druid - <B>Research Name</B> Meditation
<p><B>Requirement</B>: Have 10,000 Mana (as Druid)
<p><B>Cost</B>: 1.331 SpQig (1.331E174)
<p><B>Effect</B>: Increase mana regeneration based on your current mana.
<p><B>Formula</B>: round(50 - \frac{x}{2})%, where x is percentage of your current mana.
<br/>
<br/>
<p><b>D290</b> - <b>For</b> Any - <B>Research Name</B> Transubstantiation
<p><B>Requirement</B>: 1 Rough Stone Artifact
<p><B>Cost</B>: 582.7 SpQig (5.827E176)
<p><B>Effect</B>: Each artifact you discover increases mana regeneration by 1.0 m/s.
<p><B>Formula</B>: 1.5 * x, where x is artifacts
<br/>
<br/>
<p><b>D560</b> - <b>For</b> Drow - <B>Research Name</B> Ritualism
<p><B>Requirement</B>: Research Necromancy(S225) and Heirlooms(S500)(as drow)
<p><B>Cost</B>: 204.2 TSpq (2.042E224)
<p><B>Effect</B>: Increase mana regeneration based on the amount of trophies you unlocked.
<p><B>Formula</B>: floor(0.7x) / 10, where x is the amount of Trophies Unlocked.
<p><b>------------------------------</b>
<p><b>Economics</b>
<p><b>E250</b> - <b>For</b> Any - <B>Research Name</B> Trade Routes
<p><B>Requirement</B>: Research Forgery (E225) & Royal Demand (E145)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.
<p><B>Formula</B>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.
<br/>
<br/>
<p><b>E275</b> - <b>For</b> Titan - <B>Research Name</B> Offering
<p><B>Requirement</B>: 1,250 Royal Exchanges(as Titans)
<p><B>Cost</B>: 175.2 SxQig (1.752E173)
<p><B>Effect</B>: Increase mana regeneration based on your Royal Exchange Bonus.
<p><B>Formula</B>: floor(0.9 * x ^ 0.95), where x is your Royal Exchange Bonus.
<p><b>------------------------------</b>
<p><b>Alchemy</b>
<p><b>A50</b> - <b>For</b> Angel - <B>Research Name</B> Gilding
<p><B>Requirement</B>: 120 m/s Mana Regen(as Undead)
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Heaven's Domains further increase your mana regeneration rate.
<p><B>Formula</B>: 1.45 * x^0.45, where x is the number of Heaven's Domains you own.
<br/>
<br/>
<p><b>A270</b> - <b>For</b> Any - <B>Research Name</B> Synthesis
<p><B>Requirement</B>: 20 B (2E10) Faction Coins(This game)
<p><B>Cost</B>: 175.2 SxQig (1.752E173)
<p><B>Effect</B>: Increase mana regeneration based on the amount of Faction Coins found in this game.
<p><B>Formula</B>: floor(15 * ln(1 + x)) / 10, where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>A300</b> - <b>For</b> Faceless - <B>Research Name</B> Creeping
<p><B>Requirement</B>: Produce 5M mana(This game, as Druid)
<p><B>Cost</B>: 33 OcQig (3.36E178)
<p><B>Effect</B>: Increase mana regeneration based on mana produced in this game.
<p><B>Formula</B>: floor(10 * (1.5 * ln(1 + x))) / 10, where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A1325</b> - <b>For</b>  Any - <B>Research Name</B> Calefaction
<p><B>Requirement</B>: 5500 Excavations
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase mana regeneration based on the amount of excavations made.
<p><B>Formula</B>:  floor(0.25 * x), where x is current excavations
<br/>
<br/>
<p><b>A1500</b> - <b>For</b>  Druid,Dragon - <B>Research Name</B> Sublimation
<p><B>Requirement</B>: 21600 Grand Balance Cast Time in a single game, Research D590 & A1325,
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase Max Mana based on the amount of Unique Buildings you own.
<p><B>Formula</B>: 7.5* x^0.75, where x is unique buildings owned
<p><b>------------------------------</b>
<p><b>Warfare</b>
<p><b>W135</b> - <b>For</b> Any - <B>Research Name</B> Rampage
<p><B>Requirement</B>: 580 Trophies(as Demon)
<p><B>Cost</B>: 296 Ocqag (9.6E149)
<p><B>Effect</B>: Increase maximum mana based on the number of trophies you have unlocked.
<p><B>Formula</B>: floor(1.25x), where x is the amount of trophies unlocked.
<br/>
<br/>
<p><b>W205</b> - <b>For</b> Any Evil - <B>Research Name</B> Berserking
<p><B>Requirement</B>: 850 Blood Frenzy, Research Rampage (W135) & Retribution (D150)
<p><B>Cost</B>: 627.6 Dqig (6.276E161)
<p><B>Effect</B>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.
<p><B>Formula</B>: floor(0.25x^0.9), where x is your Assistants stat.
<br/>
<br/>
<p><b>W1400</b> - <b>For</b> Neutral,Dragon - <B>Research Name</B> Cataclysm
<p><B>Requirement</B>: Research W400, A1200, Affiliated Dragon
<p><B>Effect</B>: Increase maximum mana based on the amount of clicks made in this game.
<p><B>Formula</B>: 25 * log(1+x) ^ 2.5, where x is clicks
<?php include "../scripts/footer.html"; ?>