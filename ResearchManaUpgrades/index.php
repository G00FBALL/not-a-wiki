<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Mana Research Upgrade Slots</h6>
    <p><b>Spellcraft</b></p>
    <p><b>S30</b> - For All Factions</p>
	<p><b>Research Name</b>: Vacuumancy</p>
	<p><b>Requirement</b>: Have 4000 Mana. (This Game)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)</p>
	<p><b>Effect</b>: Increase maximum mana and mana regeneration rate based on time spent in this game.</p>
	<p><b>Formula</b>: Max Mana:(0.1 * x), where x is your Playtime (This Game) stat in seconds.</p>
	<p><b>Formula</b>: Mana Regeneration:(0.5 * x ^ 0.5), where x is your Playtime (This Game) stat in seconds.</p>
    <br>
    <p><b>S105</b> - For All Factions</p>
	<p><b>Research Name</b>: Mysticism</p>
	<p><b>Hint</b>: I am a Research among Researches.</p>
	<p><b>Requirement</b>: 600 Researches (Total)</p>
	<p><b>Cost</b>: 1.544 Spqag (1.544E144)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</p>
	<p><b>Formula</b>: floor(x ^ 0.5), where x is number of researches made.</p>
    <br>
    <p><b>S180</b> - For Fairy</p>
	<p><b>Research Name</b>: Incantation</p>
	<p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)</p>
	<p><b>Cost</b>: 3.273 UQig (3.273E156)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the number of assistants you own.</p>
	<p><b>Formula</b>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.</p>
    <br>
    <p><b>S400</b> - For All Factions</p>
	<p><b>Research Name</b>: Capacity</p>
	<p><b>Requirement</b>: Research Projection (S215) & Domination (W275)</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
	<p><b>Effect</b>: Increase maximum mana based on the highest amount of spells cast in a single game.</p>
	<p><b>Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat.</p>
    <br>
    <p><b>S500</b> - For All Factions</p>
	<p><b>Research Name</b>: Heirlooms</p>
	<p><b>Hint</b>: I wonder when will I have enough for my collection?</p>
	<p><b>Requirement</b>: 40 Artifacts (as Drow)</p>
	<p><b>Cost</b>: 5.554 Spg (5,554E213)</p>
	<p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.</p>
	<p><b>Maximum Mana Formula</b>: (75 * x ^ 1.1), where x is amount of artifacts you own.</p>
	<p><b>Mana Regeneration Formula</b>: (5 * x ^ 1.05), where x is amount of artifacts you own.</p>
    <br>
    <p><b>S3200</b> - For All Factions</p>
	<p><b>Research Name</b>: Manipulation</p>
  <p><b>Hint</b> First spell, many served.</p>
	<p><b>Requirement</b>: 1B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).</p>
	<p><b>Cost</b>: 695.7 Sxg (6.957e185)</p>
	<p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (Share Benefits tiers also count).</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 1200%.</p>
    <br>
    <p><b>S5375</b> - For Chaos</p>
	<p><b>Research Name</b>: Invocation</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Mana Loom artifact and upgrade</p>
	<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.</p>
    <p><b>Additive</b>: (1000 + 80 * x ^ 0.8), where x is spell activity time in seconds.</p>
    <p><b>Multiplicative</b>: (0.6 * x ^ 0.6), where x is spell activity time in seconds.</p>
    <br>
    <p><b>S5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Leylines</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Mana Loom artifact and upgrade</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on assistants owned.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.25), where x is assistants</p>
    <hr>
    <p><b>Craftsmanship</b></p>
    <p><b>C25</b> - For Angel</p>
	<p><b>Research Name</b>: Light Condenser</p>
	<p><b>Hint</b>: I've cast a spell on you. Now you cast more.</p>
	<p><b>Requirement</b>: 12,000 Spells cast (This R)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast.</p>
	<p><b>Formula</b>: floor(10 * x ^ 0.3) / 10, where x is your Spells Cast (This Game) stat.</p>
    <br>
    <p><b>C330</b> - For All Factions</p>
	<p><b>Research Name</b>: Overload</p>
	<p><b>Requirement</b>: Research Aeromancy (S250) & Critical Strike (W225)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</p>
	<p><b>Formula</b>: (3.5 *  x  ^0.35), where x is researches made.</p>
    <br>
    <p><b>C3100</b> - All Factions</p>
	<p><b>Research Name</b>: Engineering</p>
	<p><b>Hint</b>: Spend some quality time with the Mercenaries.</p>
	<p><b>Requirement</b>: 15 days Mercenary time spent (Across all R's).</p>
	<p><b>Cost</b>: 769.3 OcQig (7.693e179)</p>
	<p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).</p>
	<p><b>Formula</b>: (65 * x ^ 0.35), where x is clicks made.</p>
    <br>
    <p><b>C5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Genuineness</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Factory artifact and upgrade</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.</p>
	<p><b>Formula</b>: (50 + 1.5 * x ^ 0.95), where x is the lowest lineage.</p>
    <hr>
    <p><b>Divine</b></p>
    <p><b>D135</b> - For All Factions</p>
	<p><b>Research Name</b>: Illumination</p>
	<p><b>Hint</b>: Blue regeneration combo.</p>
	<p><b>Requirement</b>: 250 m/s Mana Regen(as Angel)</p>
	<p><b>Cost</b>: 296 Ocqag (2.96E149)</p>
	<p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own.</p>
	<p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10), where x is amount of gems you own.</p>
    <br>
    <p><b>D275</b> - For Druid</p>
	<p><b>Research Name</b>: Meditation</p>
	<p><b>Hint</b>: Maximum magical concentration.</p>
	<p><b>Requirement</b>: Have 10,000 Mana (as Druid)</p>
	<p><b>Cost</b>: 1.331 SpQig (1.331E174)</p>
	<p><b>Effect</b>: Increase mana regeneration based on your current mana.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
	<p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.</p>
    <br>
    <p><b>D290</b> - For All Factions</p>
	<p><b>Research Name</b>: Transubstantiation</p>
	<p><b>Hint</b>: A small buried stone.</p>
	<p><b>Requirement</b>: 1 Rough Stone Artifact</p>
	<p><b>Cost</b>: 582.7 SpQig (5.827E176)</p>
	<p><b>Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.</p>
	<p><b>Additive Formula</b>: (50 * x ^1.1), where x is the number of artifacts found.</p>
	<p><b>Multiplicative Formula</b>: (x ^ 0.95), where x is the number of artifacts found.</p>
    <br>
    <p><b>D560</b> - For Drow</p>
	<p><b>Research Name</b>: Ritualism</p>
	<p><b>Requirement</b>: Research Necromancy(S225) and Heirlooms(S500)(as drow)</p>
	<p><b>Cost</b>: 204.2 TSpq (2.042E224)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of trophies you unlocked.</p>
	<p><b>Formula</b>: (floor(0.7 * x) / 10), where x is the amount of Trophies Unlocked.</p>
    <br>
    <p><b>D5375</b> - For Good</p>
	<p><b>Research Name</b>: Zealotry</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Mythos artifact and upgrade</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges purchased in this game.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.75), where x is royal exchanges this game</p>
    <hr>
    <p><b>Economics</b></p>
    <p><b>E250</b> - For All Factions</p>
	<p><b>Research Name</b>: Trade Routes</p>
	<p><b>Requirement</b>: Research Forgery (E225) & Royal Demand (E145)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.</p>
	<p><b>Formula</b>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.</p>
    <br>
    <p><b>E275</b> - For Titan</p>
	<p><b>Research Name</b>: Offering</p>
	<p><b>Hint</b>: Offer Faction Coins, gain production.</p>
	<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)</p>
	<p><b>Cost</b>: 175.2 SxQig (1.752E173)
	<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.</p>
	<p><b>Formula</b>: (x ^ 0.95), where x is your Royal Exchange Bonus.</p>
    <hr>
    <p><b>Alchemy</b>
    <p><b>A50</b> - For Angel</p>
	<p><b>Research Name</b>: Gilding</p>
	<p><b>Hint</b>: Regeneration magic.</p>
	<p><b>Requirement</b>: 120 m/s Mana Regen(as Undead)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
	<p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate.</p>
	<p><b>Formula</b>: (1.45 * x ^ 0.45), where x is the number of Heaven's Domains you own.</p>
    <br>
    <p><b>A300</b> - For Faceless</p>
	<p><b>Research Name</b>: Creeping</p>
	<p><b>Hint</b>: Blue Production.</p>
	<p><b>Requirement</b>: Produce 5M mana (This game, as Druid)</p>
	<p><b>Cost</b>: 33 OcQig (3.36E178)</p>
	<p><b>Effect</b>: Increase mana regeneration based on mana produced in this game.</p>
	<p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.</p>
    <br>
    <p><b>A545</b> - For All Factions</p>
	<p><b>Research Name</b>: Mineralogy</p>
	<p><b>Hint</b>: Full Showcase.</p>
	<p><b>Requirement</b>: 700 trophies</p>
	<p><b>Cost</b>: 466.3 DSpg (4.663E221)</p>
	<p><b>Effect</b>: Increases mana regeneration based on Gems you own.</p>
	<p><b>Formula</b>: log10(x) / 2, where x is Gems you own.</p>
    <br>
    <p><b>A1325</b> - For All Factions</p>
	<p><b>Research Name</b>: Calefaction</p>
	<p><b>Hint</b>: Excavate me out!</p>
	<p><b>Requirement</b>: 4500 Excavations (This R)<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.</p>
	<p><b>Formula</b>:  floor(0.02 * x), where x is current excavations</p>
	<p><b>Tip</b>: E290 and end of R54.</p>
    <hr>
    <p><b>Warfare</b></p>
    <p><b>W135</b> - For All Factions</p>
	<p><b>Research Name</b>: Rampage</p>
	<p><b>Hint</b>: Light up those cups!</p>
	<p><b>Requirement</b>: 580 Trophies(as Demon)</p>
	<p><b>Cost</b>: 296 Ocqag (9.6E149)</p>
	<p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.</p>
	<p><b>Formula</b>: floor(1.3 * x ^ 1.1), where x is the amount of trophies unlocked.</p>
    <br>
    <p><b>W205</b> - For All Evil Factions</p>
	<p><b>Research Name</b>: Berserking</p>
	<p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) & Retribution (D150)</p>
	<p><b>Cost</b>: 627.6 Dqig (6.276E161)</p>
	<p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
	<p><b>Formula</b>: floor(0.25x^0.9), where x is your Assistants stat.</p>
    <br>
    <p><b>W1400</b> - For Dragon</p>
	<p><b>Research Name</b>: Cataclysm</p>
	<p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon</p>
	<p><b>Cost</b>: 4.249 Qivg (4.249e78)</p>
	<p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.</p>
	<p><b>Formula</b>: (650 * x ^ 0.35), where x is clicks (this game).</p>
<?php include "../scripts/footer.html"; ?>
