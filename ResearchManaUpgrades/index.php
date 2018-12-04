<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Mana Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S30</b> - <b>For</b>: All Factions - <b>Research Name</b>: Vacuumancy
<p><b>Requirement</b>: Have 4000 Mana. (This Game)
<p><b>Cost</b>: 95.88 Dqag (9.588E130)
<p><b>Effect</b>: Increase maximum mana and mana regeneration rate based on time spent in this game.
<p><b>Formula</b>: Max Mana:floor(45 * X),<p><b>Formula</b>: Mana Regeneration:floor(75 * x^0.4) / 10, where x is your Playtime (This Game) stat in hours.
<br/>
<br/>
<p><b>S105</b> - <b>For</b>: All Factions - <b>Research Name</b>: Mysticism
<p><b>Requirement</b>: 600 Researches (Total)
<p><b>Cost</b>: 1.544 Spqag (1.544E144)
<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.
<p><b>Formula</b>: floor(x^0.5), where x is number of researches made.
<br/>
<br/>
<p><b>S180</b> - <b>For</b>: Fairy - <b>Research Name</b>: Incantation
<p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)
<p><b>Cost</b>: 3.273 UQig (3.273E156)
<p><b>Effect</b>: Increase mana regeneration based on the number of assistants you own.
<p><b>Formula</b>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.
<br/>
<br/>
<p><b>S400</b> - <b>For</b>: All Factions - <b>Research Name</b>: Capacity
<p><b>Requirement</b>: Research Projection (S215) &amp; Domination (W275)
<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
<p><b>Effect</b>: Increase maximum mana based on the highest amount of spells cast in a single game.
<p><b>Formula</b>: 35 * x ^ 0.35, where x is your Spell Cast (Max) stat.
<br/>
<br/>
<p><b>S500</b> - <b>For</b>: All Factions - <b>Research Name</b>: Heirlooms
<p><b>Requirement</b>: 40 Artifacts (as Drow)
<p><b>Cost</b>: 5.554 Spg (5,554E213)
<p><b>Effect</b>: increases maximum mana based on the amount of artifacts you own.
<p><b>Formula</b>: 100 * x ^ 1.1, where x is artifacts.
<br/>
<br/>
<p><b>S3200</b> - <b>For</b>: All Factions - <b>Research Name</b>: Manipulation
<p><b>Requirement</b>: 1B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).
<p><b>Cost</b>: 387 USsx (3.87e188)
<p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (Share Benefits tiers also count).
  <p><b>Effect</b>: Also increases offline spells cast amount multiplicatively by 1200%</p>
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C25</b> - <b>For</b>: Angel - <b>Research Name</b>: Light Condenser
<p><b>Requirement</b>: 12,000 Spells cast (This R)
<p><b>Cost</b>: 12.63 Dqag (1.263E130)
<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.
<p><b>Formula</b>: floor(10 * x^0.3) / 10, where x is your Spells Cast (This Game) stat.
<br/>
<br/>
<p><b>C330</b> - <b>For</b>: All Factions - <b>Research Name</b>: Overload
<p><b>Requirement</b>: Research Aeromancy (S250) Critical Strike (W225)
<p>Cost: 36.443 Sxg (6.443E183)
<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.
<p><b>Formula</b>: (3.5 *  x  ^0.35),, where x is researches made.
<br/>
<br/>
<p><b>C3100</b> - <b>For</b>: All Factions - <b>Research Name</b>: Engineering
<p><b>Requirement</b>: 15 days Mercenary time spent (Across all R's).
<p>Cost: 329.6 NoQig (3.296e182)
<p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).
<p><b>Formula</b>: (7.5 * log10(x + 1))^2.15, where x is clicks made
<br/>
<br/>
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D135</b> - <b>For</b>: All Factions - <b>Research Name</b>: Illumination
<p><b>Requirement</b>: 250 m/s Mana Regen(as Angel)
<p><b>Cost</b>: 296 Ocqag (2.96E149)
<p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own.
<p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10, where x is amount of gems you own.
<br/>
<br/>
<p><b>D275</b> - <b>For</b>: Druid - <b>Research Name</b>: Meditation
<p><b>Requirement</b>: Have 10,000 Mana (as Druid)
<p><b>Cost</b>: 1.331 SpQig (1.331E174)
<p><b>Effect</b>: Increase mana regeneration based on your current mana.
<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.
<p><b>Formula</b>: 0.5 * (100 - x)%, where x is percent of max mana.
<br/>
<br/>
<p><b>D290</b> - <b>For</b>: All Factions - <b>Research Name</b>: Transubstantiation
<p><b>Requirement</b>: 1 Rough Stone Artifact
<p><b>Cost</b>: 582.7 SpQig (5.827E176)
<p><b>Effect</b>: Each artifact you discover increases mana regeneration by 1.5 m/s
<p><b>Formula</b>: floor(1.5 * x)), where x is the number of artifacts found.
<br/>
<br/>
<p><b>D560</b> - <b>For</b>: Drow - <b>Research Name</b>: Ritualism
<p><b>Requirement</b>: Research Necromancy(S225) and Heirlooms(S500)(as drow)
<p><b>Cost</b>: 204.2 TSpq (2.042E224)
<p><b>Effect</b>: Increase mana regeneration based on the amount of trophies you unlocked.
<p><b>Formula</b>: floor(0.7x) / 10, where x is the amount of Trophies Unlocked.
<p><b>------------------------------</b>
<p><b>Economics</b>
<p><b>E250</b> - <b>For</b>: All Factions - <b>Research Name</b>: Trade Routes
<p><b>Requirement</b>: Research Forgery (E225) &amp; Royal Demand (E145)
<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.
<p><b>Formula</b>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.
<br/>
<br/>
<p><b>E275</b> - <b>For</b>: Titan - <b>Research Name</b>: Offering
<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)
<p><b>Cost</b>: 175.2 SxQig (1.752E173)
<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.
<p><b>Formula</b>: floor(0.9 * x ^ 0.95), where x is your Royal Exchange Bonus.
<p><b>------------------------------</b>
<p><b>Alchemy</b>
<p><b>A50</b> - <b>For</b>: Angel - <b>Research Name</b>: Gilding
<p><b>Requirement</b>: 120 m/s Mana Regen(as Undead)
<p><b>Cost</b>: 318.8 Tqag (3.188E134)
<p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate.
<p><b>Formula</b>: 1.45 * x^0.45, where x is the number of Heaven's Domains you own.
<br/>
<br/>
<p><b>A270</b> - <b>For</b>: All Factions - <b>Research Name</b>: Synthesis
<p><b>Requirement</b>: 20 B (2E10) Faction Coins (Found this game)
<p><b>Cost</b>: 175.2 SxQig (1.752E173)
<p><b>Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game.
<p><b>Formula</b>: floor(12 * ln(1 + x)) / 10, where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>A300</b> - <b>For</b>: Faceless - <b>Research Name</b>: Creeping
<p><b>Requirement</b>: Produce 5M mana (This game, as Druid)
<p><b>Cost</b>: 33 OcQig (3.36E178)
<p><b>Effect</b>: Increase mana regeneration based on mana produced in this game.
<p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A545</b> - <b>For</b>: All Factions - <b>Research Name</b>: Mineralogy
<p><b>Requirement</b>: 700 trophies
<p><b>Cost</b>: 466.3 DSpg (4.663E221)
<p><b>Effect</b>: Increases mana regeneration based on Gems you own.
<p><b>Formula</b>: log10(x) / 2, where x is Gems you own.
<br/>
<br/>
<p><b>A1325</b> - <b>For</b>: Any - <b>Research Name</b>: Calefaction
<p><b>Requirement</b>: 4500 Excavations (This R)
<p>Cost: 601.6 Tvg (6.016E74)
<p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.
<p><b>Formula</b>:  floor(0.02 * X), where x is current excavations<p>Tip: E290 and end of R54.
<br/>
<br/>
<p><b>A1500</b> - <b>For</b>: Druid,Dragon - <b>Research Name</b>: Sublimation
<p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon
<p>Cost: 25.2 Spvg (2.52e85)
<p><b>Effect</b>: Increase Max Mana based on the amount of Unique Buildings you own.
<p><b>Formula</b>: 8 * x ^0.8, where x is Unique Buildings owned.
<p><b>------------------------------</b>
<p><b>Warfare</b>
<p><b>W135</b> - <b>For</b>: All Factions - <b>Research Name</b>: Rampage
<p><b>Requirement</b>: 580 Trophies(as Demon)
<p><b>Cost</b>: 296 Ocqag (9.6E149)
<p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.
<p><b>Formula</b>: 1.3 * x ^ 1.1, where x is the amount of trophies unlocked.
<br/>
<br/>
<p><b>W205</b> - <b>For</b>: All Evil Factions - <b>Research Name</b>: Berserking
<p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) &amp; Retribution (D150)
<p><b>Cost</b>: 627.6 Dqig (6.276E161)
<p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.
<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%. <p><b>Formula</b>: floor(0.25x^0.9), where x is your Assistants stat.
<br/>
<br/>
<p><b>W1400</b> - <b>For</b>: Dragon - <b>Research Name</b>: Cataclysm
<p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon
<p>Cost: 21.46 Qivg (2.146E79)
<p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.
<p><b>Formula</b>: floor 25 * log10(1+x) ^ 2.5, where x is clicks (this game).
<?php include "../scripts/footer.html"; ?>
