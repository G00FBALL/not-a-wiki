<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>The Research Facilities</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Diviner.png" alt="Divine" align="middle"> <b>Divine</b></p>
<p>Harness the power of the eternals, increasing your spell affinity and bestowing Divine power on all your productivity.</p>
<p><b>Increases</B>: <b>Angel</B>, <b>Faceless</B>, and <b>Dwarven</B> production.</p>

<p><b>----------------------------------</b></p>
<h6>Divine Facility</h6>
<p><b>D1</b> - <b>For</b> Angel - <B>Spell Name</B> Blessing</p>
<p><B>Cost</B>: 750 Qag (7.50E125)</P>
<p><B>Effect</B>: Increase the production of Heaven's Domains based on total time spent with at least one active spell.</p>
<p><B>Formula</B>: round(2.5 * x^0.8)%, where x is total time spent with at least one active spell.</p>
<p><b>----------------------------------</b></p>
<p><b>D10</b> - <b>For</b> Demon - <B>Spell Name</B> Inflame
<p><B>Requirement</B>: 2,000 Infernal Realms
<p><B>Cost</B>: 28.83 Uqag (2.883E127)
<p><B>Effect</B>: Increase the production of all other buildings by 110% per Infernal Realm you own.
<p><b>----------------------------------</b></p>
<p><b>D25</b> - <b>For</b> Undead - <B>Spell Name</B> Cursing
<p><B>Requirement</B>: Play 8 hours Offline(as Undead)
<p><B>Cost</B>: 12.63 Dqag (1.263E130)
<p><B>Effect</B>: Increase the production of all buildings based on your offline production bonus.
<p><B>Formula</B>: 15 * x^0.215%, where x is your offline production bonus.
<p><b>----------------------------------</b></p>
<p><b>D50</b> - <b>For</b> Elf - <B>Spell Name</B> Hallowing
<p><B>Requirement</B>: 15,000 Good Buildings(as Angel)
<p><B>Cost</B>: 318.8 Tqag (3.188E134)
<p><B>Effect</B>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.
<p><B>Formula</B>: floor(3 * x^0.85)%, where x is the number of Elven Training Grounds you own.
<p><b>----------------------------------</b></p>
<p><b>D55</b> - <b>For</b> Any - <B>Spell Name</B> Transfixion
<p><B>Requirement</B>: Produce 3 M (3E6) Mana(This Game)
<p><B>Cost</B>: 2.421 Qaqag (2.421E135)
<p><B>Effect</B>: Increase clicking reward based on spell cast in this game.
<p><B>Formula</B>: round(3.5 * x^0.8)%, where x is your Spells Cast (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>D135</b> - <b>For</b> Any - <B>Spell Name</B> Illumination
<p><B>Requirement</B>: 250 m/s Mana Regen(as Angel)
<p><B>Cost</B>: 296 Ocqag (2.96E149)
<p><B>Effect</B>: Increases mana regeneration based on the amount of gems you own.
<p><B>Formula</B>: floor(10 * ln(1 + x) / 7.5) / 10, where x is amount of gems you own.
<p><b>----------------------------------</b></p>
<p><b>D150</b> - <b>For</b> Any - <B>Spell Name</B> Retribution
<p><B>Requirement</B>: Research Betrayal (W120) & Transfixion (D55).
<p><B>Cost</B>: 129.6 Noqag (1.296E152)
<p><B>Effect</B>: Produce additional Faction Coins based on the amount of research made.
<p><B>Formula</B>: floor(0.05 * x^1.1, where x is the amount of research made.
<p><b>----------------------------------</b></p>
<p><b>D175</b> - <b>For</b> Angel - <B>Spell Name</B> Resurrection
<p><B>Requirement</B>: Research Blessing (D1) & Refraction (A55)
<p><B>Cost</B>: 3.273 Uqig (3.273E156)
<p><B>Effect</B>: You gain additional assistants based on God's Hands activity time.
<p><B>Formula</B>: floor(0.45 * (3 * x / 20)^0.6), where x is God's Hands' Active Time This Game.
<p><b>----------------------------------</b></p>
<p><b>D200</b> - <b>For</b> Any - <B>Spell Name</B> Transcendence
<p><B>Requirement</B>: Research Resurrection (D175) & Illumination (D135)
<p><B>Cost</B>: 82.65 Dqig (8.265E160)
<p><B>Effect</B>: Decrease the cost of all spells by 20% and increase their duration by 20%.
<p><b>----------------------------------</b></p>
<p><b>D205</b> - <b>For</b> Any Good - <B>Spell Name</B> Communion
<p><B>Requirement</B>: 777 Holy Lights (Total),Research Gemcutting (C175) & Illumination (D135)
<p><B>Cost</B>: 627.6 Dqig (6.276E161)
<p><B>Effect</B>: Increase Holy Light duration by 110 seconds.
<p><b>----------------------------------</b></p>
<p><b>D225</b> - <b>For</b> Fairy - <B>Spell Name</B> Weather Control
<p><B>Requirement</B>: Research Light Condenser (C25) & Vacuumancy (S30)
<p><B>Cost</B>: 2.087 Qaqig (2.087E165)	
<p><B>Effect</B>: Increase the production of Enchanted Fields based on maximum mana.
<p><B>Formula</B>: floor(2.25 * x0.8)%, where x is your maximum mana.
<p><b>----------------------------------</b></p>
<p><b>D245</b> - <b>For</b> Any - <B>Spell Name</B> Soulrending
<p><B>Requirement</B>: 500 Spiritual Surge, Research Soulweaving (A175) & Necromancy (S225)
<p><B>Cost</B>: 6.94Qiqig (6.94E168)
<p><B>Effect</B>: Reincarnations count twice for Spiritual Surge.
<p><B>Formula</B>: 100*(1.05^x)%, where x is the amount of times you reincarnated.
<p><b>----------------------------------</b></p>
<p><b>D250</b> - <b>For</b> Any - <B>Spell Name</B> Demonology
<p><B>Requirement</B>: Research Transcendence (D200) & Pyromancy (S150)
<p><B>Cost</B>: 52.7 Qiqig (5.27E169)
<p><B>Effect</B>: Gain additional assistants based on the amount of Faction Coins found in this game.
<p><B>Formula</B>: floor(ln^1.3(1 + x)), where x is your Faction Coins Gained (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>D260</b> - <b>For</b> Faceless - <B>Spell Name</B> Mutation
<p><B>Requirement</B>: 3,000 Sunken Cities
<p><B>Cost</B>: 3.039 SxQig (3.039E171)
<p><B>Effect</B>: Increase the production of all other buildings by 95% per Sunken Cities you own.
<p><b>----------------------------------</b></p>
<p><b>D275</b> - <b>For</b> Druid - <B>Spell Name</B> Meditation
<p><B>Requirement</B>: Have 10,000 Mana (as Druid)
<p><B>Cost</B>: 1.331 SpQig (1.331E174)
<p><B>Effect</B>: Increase mana regeneration based on your current mana.
<p><B>Formula</B>: round(50 - \frac{x}{2})%, where x is percentage of your current mana.
<p><b>----------------------------------</b></p>
<p><b>D290</b> - <b>For</b> Any - <B>Spell Name</B> Transubstantiation
<p><B>Requirement</B>: 1 Rough Stone Artifact
<p><B>Cost</B>: 582.7 SpQig (5.827E176)
<p><B>Effect</B>: Each artifact you discover increases mana regeneration by 1 m/s.
<p><b>----------------------------------</b></p>
<p><b>D320</b> - <b>For</b> Any - <B>Spell Name</B> Deliverance
<p><B>Requirement</B>: 350 m/s Mana Regen
<p><B>Cost</B>: 1.117 NoQig (1.117E180)
<p><B>Effect</B>: Increase assistants production based on mana regeneration.
<p><B>Formula</B>: round(20 * x^0.85)%, where x is your Mana per Second stat.
<p><b>----------------------------------</b></p>
<p><b>D330</b> - <b>For</b> Any - <B>Spell Name</B> Eternity
<p><B>Requirement</B>: Research Offering (E275) & Deliverance (D320)
<p><B>Cost</B>: 6.443 Sxg (6.443E183)
<p><B>Effect</B>: Double the duration of all faction spells.
<p><b>----------------------------------</b></p>
<p><b>D350</b> - <b>For</b> Titan - <B>Spell Name</B> Descent
<p><B>Requirement</B>: Research Swarming (W250) & Heroism (W330)
<p><B>Cost</B>: 21.42 USxg (2.142E187)
<p><B>Effect</B>: Gain additional assistants based on the amount of Olympian Halls you own.
<p><B>Formula</B>: floor(x^0.5), where x is the number of Olympian Halls you own.
<p><b>----------------------------------</b></p>
<p><b>D400</b> - <b>For</b> Any - <B>Spell Name</B> Miracle
<p><B>Requirement</B>: Research Communion (D205) & Transubstantiation (D290)
<p><B>Cost</B>: 13.66 QaSxg (1.366E196)
<p><B>Effect</B>: Increase the Production of a random building by x250. Target changes every 2 minutes. While offline, increase the production of all buildings by x75.
<p><b>----------------------------------</b></p>
<p><b>D435</b> - <b>For</b> Dwarf - <B>Spell Name</B> Devotion
<p><B>Requirement</B>: 4h Diamond Pickaxe Cast Time (This Game)
<p><B>Cost</B>: 19.89 SxSxg (1.989E202)
<p><B>Effect</B>: Increase the production of Good buildings based on spells cast in this game.
<p><B>Formula</B>: 2.5 * x^0.85%, where x is your Spells Cast (This Game) stat.
<p><b>----------------------------------</b></p>
<p><b>D480</b> - <b>For</b> Any - <B>Spell Name</B> Mercy
<p><B>Requirement</B>: 12h Spent as each Good, Evil and Neutral alignment
<p><B>Cost</B>: 1.67 NoSxg (1.67E210)
<p><B>Effect</B>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.
<p><B>Formula</B>:  100000 * (tmin / tmax)^1.5%, where tmin and tmax are the shortest and longest Time Spent Being Alignment (Total) Stat.
<p><b>----------------------------------</b></p>
<p><b>D525</b> - <b>For</b> Good - <B>Spell Name</B> Purity
<p><B>Requirement</B>: 1d12h as Good(Current R), Research Communion(D205) and Devotion(D435)
<p><B>Cost</B>: 140.2 USpg (1.402E218)
<p><B>Effect</B>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.
<p><B>Formula</B>: 300 * x^0.3%p, where x is your Faction Spells' Cast This Game (Vanilla + Prestige spell count) stat.
<p><b>----------------------------------</b></p>
<p><b>D560</b> - <b>For</b> Drow - <B>Spell Name</B> Ritualism
<p><B>Requirement</B>: Research Necromancy(S225) and Heirlooms(S500)(as drow)
<p><B>Cost</B>: 204.2 TSpq (2.042E224)
<p><B>Effect</B>: Increase mana regeneration based on the amount of trophies you unlocked.
<p><B>Formula</B>: floor(0.7x) / 10, where x is the amount of Trophies Unlocked.
<p><b>----------------------------------</b></p>
<p><b>D590</b> - <b>For</b> Angel,Dwarf - <B>Spell Name</B> Dispelling
<p><B>Requirement</B>: 200 Dwarf Exchanges as Dwangel, Research Shattering (W320) and Waste (A480)
<p><B>Cost</B>: 39.16 QiSpg (3.916E229)
<p><B>Effect</B>: Increase the production of Unique buildings based on mana regeneration.
<p><B>Formula</B>: 2.5 x^1.25%, where x is your Mana per Second stat.
<p><b>----------------------------------</b></p>
<p><b>D1125</b> - <b>For</b> Neutral/Dragon - <B>Spell Name</B> Oblation
<p><B>Requirement</B>: Affiliated Dragon
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of Wyrm's Den based on Faction Coin find chance.
<p><B>Formula</B>: 1.5 * x^0.5, x is faction coin find chance in percent.
<p><b>----------------------------------</b></p>
<p><b>D1275</b> - <b>For</b> Any - <B>Spell Name</B> Solemnity
<p><B>Requirement</B>: 100000 Total Buildings
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of each building by + 0.25.to Fixed(2) + % per building of the same type.
<p><B>Formula</B>: N/A
<p><b>----------------------------------</b></p>
<p><b>D1375</b> - <b>For</b> Any - <B>Spell Name</B> Sanctification
<p><B>Requirement</B>: 24 hours spent as good
<p><B>Requirement</B>: Post Ascension Only
<p><B>Effect</B>: Increase the production of Unique Buildings based on the amount of Non-Unique buildings you own.
<p><B>Formula</B>: 2 * x^0.55, x is non-unique building owned.
<p><b>----------------------------------</b></p>
<?php include "../scripts/footer.html"; ?>