<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
        <h6>Divine Facilities</h6>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Diviner.png" alt="Divine" align="middle"> <b>Divine</b></p>
        <p>Harness the power of the eternals, increasing your spell affinity and bestowing Divine power on all your productivity.</p>
        <p><b>Increases</B>: <b>Angel</B>, <b>Faceless</B>, and <b>Dwarven</B> production.</p>
        <p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
        <br/>
        <p><b>Research Point Production</b></p>
        <p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
        <br/>
        <p><b>D1</b> - For Angel</p>
        <p><b>Research Name</b>: Blessing</p>
        <p><b>Cost</b>: 750 Qag (7.50E125)</p>
        <p><b>Effect</b>: Increase the production of Heaven's Domains based on total time spent with at least one active spell.</p>
        <p><b>Formula</b>: round(2.5 * x ^ 0.8)%, where x is total time spent with at least one active spell.</p>
        <hr>
        <p><b>D10</b> - For Demon</p>
        <p><b>Research Name</b>: Inflame</p>
        <p><b>Requirement</b>: 2,000 Infernal Realms</p>
        <p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
        <p><b>Effect</b>: Increase the production of all other buildings by 110% per Infernal Realm you own.</p>
        <hr>
        <p><b>D25</b> - For Undead</p>
        <p><b>Research Name</b>: Cursing</p>
        <p><b>Requirement</b>: Play 8 hours Offline (as Undead) (This Game)</p>
        <p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on your offline production bonus.</p>
        <p><b>Formula</b>: (2.75 * log10(1 + x) ^ 2.75)%, where x is your offline production bonus multiplier.</p>
        <hr>
        <p><b>D50</b> - For Elf</p>
        <p><b>Research Name</b>: Hallowing</p>
        <p><b>Requirement</b>: 15,000 Good Buildings(as Angel)</p>
        <p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
        <p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.</p>
        <p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Elven Training Grounds you own.</p>
        <hr>
        <p><b>D55</b> - For All Factions</p>
        <p><b>Research Name</b>: Transfixion</p>
        <p><b>Requirement</b>: Produce 3 M (3E6) Mana (This Game)</p>
        <p><b>Cost</b>: 2.421 Qaqag (2.421E135)</p>
        <p><b>Effect</b>: Increase clicking reward based on spell cast in this game.</p>
        <p><b>Formula</b>: round(3.5 * x ^ 0.8)%, where x is your Spells Cast (This Game) stat.</p>
        <hr>
        <p><b>D135</b> - For All Factions</p>
        <p><b>Research Name</b>: Illumination</p>
        <p><b>Requirement</b>: 250 m/s Mana Regen(as Angel)</p>
        <p><b>Cost</b>: 296 Ocqag (2.96E149)</p>
        <p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own.</p>
        <p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10), where x is amount of gems you own.</p>
        <hr>
        <p><b>D150</b> - For All Factions</p>
        <p><b>Research Name</b>: Retribution</p>
        <p><b>Requirement</b>: Research Betrayal (W120) & Transfixion (D55).</p>
        <p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
        <p><b>Effect</b>: Increase chance to find faction coins based on the amount of total research points bought.</p>
        <p><b>Formula</b>: floor(x ^ 1.25), where x is the amount of total research points bought.</p>
        <hr>
        <p><b>D175</b> - For Angel</p>
        <p><b>Research Name</b>: Resurrection</p>
        <p><b>Requirement</b>: Research Blessing (D1) & Refraction (A55)</p>
        <p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
        <p><b>Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)</p>
        <p><b>Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).</p>
        <hr>
        <p><b>D200</b> - For All Factions</p>
        <p><b>Research Name</b>: Transcendence</p>
        <p><b>Requirement</b>: Research Resurrection (D175) & Illumination (D135)</p>
        <p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
        <p><b>Effect</b>: Decrease the cost of all spells by 20% and increase their duration by 20%.</p>
        <hr>
        <p><b>D205</b> - For All Good Factions</p>
        <p><b>Research Name</b>: Communion</p>
        <p><b>Requirement</b>: 777 Holy Lights (Total this R),Research Gemcutting (C175) & Illumination (D135)</p>
        <p><b>Cost</b>: 627.6 Dqig (6.276E161)</p>
        <p><b>Effect</b>: Increase Holy Light duration by 300 seconds.</p>
        <hr>
        <p><b>D225</b> - For Fairy</p>
        <p><b>Research Name</b>: Weather Control</p>
        <p><b>Requirement</b>: Research Light Condenser (C25) & Vacuumancy (S30)</p>
        <p><b>Cost</b>: 2.087 Qaqig (2.087E165)</p>
        <p><b>Effect</b>: Increase the production of Enchanted Fields based on maximum mana.</p>
        <p><b>Formula</b>: floor(2.25 * x ^ 0.8)%, where x is your maximum mana.</p>
        <hr>
        <p><b>D245</b> - For All Factions</p>
        <p><b>Research Name</b>: Sanctification</p>
        <p><b>Requirement</b>: 500 Spiritual Surge (Total this R), Research Soulweaving (A175) & Necromancy (S225)</p>
        <p><b>Cost</b>: 6.94Qiqig (6.94E168)</p>
        <p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique Buildings you own.</p>
        <p><b>Formula</b>: (2.5 * x ^ 0.55), where x is the amount of Non-Unique Buildings you own.</p>
        <hr>
        <p><b>D250</b> - For All Factions</p>
        <p><b>Research Name</b>: Demonology</p>
        <p><b>Requirement</b>: Research Transcendence (D200) & Pyromancy (S150)</p>
        <p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
        <p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.</p>
        <p><b>Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.</p>
        <hr>
        <p><b>D260</b> - For Faceless</p>
        <p><b>Research Name</b>: Mutation</p>
        <p><b>Requirement</b>: 3,000 Sunken Cities</p>
        <p><b>Cost</b>: 3.039 SxQig (3.039E171)</p>
        <p><b>Effect</b>: Increase the production of all other buildings by 95% per Sunken Cities you own.</p>
        <hr>
        <p><b>D275</b> - For Druid</p>
        <p><b>Research Name</b>: Meditation</p>
        <p><b>Requirement</b>: Have 10,000 Mana (as Druid)</p>
        <p><b>Cost</b>: 1.331 SpQig (1.331E174)</p>
        <p><b>Effect</b>: Increase mana regeneration based on your current mana.</p>
        <p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
        <p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.</p>
        <hr>
        <p><b>D290</b> - For All Factions</p>
        <p><b>Research Name</b>: Transubstantiation</p>
        <p><b>Requirement</b>: 1 Rough Stone Artifact</p>
        <p><b>Cost</b>: 582.7 SpQig (5.827E176)</p>
        <p><b>Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.</p>
        <p><b>Additive Formula</b>: (50 * x ^1.1), where x is the number of artifacts found.</p>
        <p><b>Multiplicative Formula</b>: (0.45 * x ^ 1.1), where x is the number of artifacts found.</p>
        <hr>
        <p><b>D320</b> - For All Factions</p>
        <p><b>Research Name</b>: Deliverance</p>
        <p><b>Requirement</b>: 350 m/s Mana Regen</p>
        <p><b>Cost</b>: 1.117 NoQig (1.117E180)</p>
        <p><b>Effect</b>: Increase assistants production based on mana regeneration.</p>
        <p><b>Formula</b>: round(20 * x ^ 0.85)%, where x is your Mana per Second stat.</p>
        <hr>
        <p><b>D330</b> - For All Factions</p>
        <p><b>Research Name</b>: Eternity</p>
        <p><b>Requirement</b>: Research Offering (E275) & Deliverance (D320)</p>
        <p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
        <p><b>Effect</b>: Double the duration of all faction spells.</p>
        <hr>
        <p><b>D350</b> - For Titan</p>
        <p><b>Research Name</b>: Descent</p>
        <p><b>Requirement</b>: Research Swarming (W250) & Heroism (W330)</p>
        <p><b>Cost</b>: 21.42 USxg (2.142E187)</p>
        <p><b>Effect</b>: Gain additional assistants based on the amount of Olympian Halls you own.</p>
        <p><b>Formula</b>: floor(x ^ 0.5)%, where x is the number of Olympian Halls you own.</p>
        <hr>
        <p><b>D400</b> - For All Factions</p>
        <p><b>Research Name</b>: Miracle</p>
        <p><b>Requirement</b>: Research Communion (D205) & Transubstantiation (D290)</p>
        <p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
        <p><b>Effect</b>: Increase the Production of a random building by x250. Target changes every 2 minutes. While offline, increase the production of all buildings by x75.</p>
        <hr>
        <p><b>D435</b> - For Dwarf</p>
        <p><b>Research Name</b>: Devotion</p>
        <p><b>Requirement</b>: 14400s (4 hour) Diamond Pickaxe Cast Time (This Game)</p>
        <p><b>Cost</b>: 19.89 SxSxg (1.989E202)</p>
        <p><b>Effect</b>: Increase the production of Good buildings based on spells cast in this game.</p>
        <p><b>Formula</b>: (2.5 * x ^ 0.85)%, where x is your Spells Cast (This Game) stat.</p>
        <hr>
        <p><b>D480</b> - For All Factions</p>
        <p><b>Research Name</b>: Mercy</p>
        <p><b>Requirement</b>: 12h Spent as each Good, Evil and Neutral alignment (This R)</p>
        <p><b>Cost</b>: 1.67 NoSxg (1.67E210)</p>
        <p><b>Effect</b>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.</p>
        <p><b>Formula</b>: (100000 * (tmin / tmax) ^ 1.5)%, where tmin is shortest Time Spent Being Alignment and tmax is longest Time Spent Being Alignment (Total) Stat.</p>
        <hr>
        <p><b>D525</b> - For Good</p>
        <p><b>Research Name</b>: Purity</p>
        <p><b>Requirement</b>: 1d12h as Good (This R), Research Communion (D205) and Devotion (D435)</p>
        <p><b>Cost</b>: 140.2 USpg (1.402E218)</p>
        <p><b>Effect</b>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.</p>
        <p><b>Formula</b>: (300 * x ^ 0.3)%, where x is your Faction Spells' Cast This Game stat.</p>
        <hr>
        <p><b>D560</b> - For Drow</p>
        <p><b>Research Name</b>: Ritualism</p>
        <p><b>Requirement</b>: Research Necromancy(S225) and Heirlooms(S500)(as drow)</p>
        <p><b>Cost</b>: 204.2 TSpq (2.042E224)</p>
        <p><b>Effect</b>: Increase mana regeneration based on the amount of trophies you unlocked.</p>
        <p><b>Formula</b>: (floor(0.7 * x) / 10), where x is the amount of Trophies Unlocked.</p>
        <hr>
        <p><b>D590</b> - For Angel,Dwarf</p>
        <p><b>Research Name</b>: Dispelling</p>
        <p><b>Requirement</b>: 200 Dwarf Exchanges as Dwangel, Research Shattering (W320) and Waste (A480)</p>
        <p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
        <p><b>Effect</b>: Increase the production of Unique buildings based on mana regeneration.</p>
        <p><b>Formula</b>: (2.5 x ^ 1.25)%, where x is your Mana per Second stat.</p>
        <hr>
        <p><b>D1125</b> - For Neutral,Dragon</p>
        <p><b>Research Name</b>: Oblation</p>
        <p><b>Requirement</b>: Any Neutral,Build Dragons' Unique Building</p>
        <p><b>Cost</b>: 177.2 Nod (1.772e62)</p>
        <p><b>Effect</b>: Increase the production of Wyrm's Den based on Faction Coin find chance.</p>
        <p><b>Formula</b>: 1.55*x^0.55, where x is Faction Coin find chance in percent.</p>
        <hr>
        <p><b>D1275</b> - For All Factions</p>
        <p><b>Research Name</b>: Solemnity</p>
        <p><b>Requirement</b>: 100000 Total Buildings</p>
        <p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
        <p><b>Effect</b>: Increase the production of each building by +0.3% per building of the same type.</p>
        <hr>
        <p><b>D1375</b> - For All Factions</p>
        <p><b>Research Name</b>: Soulrending</p>
        <p><b>Requirement</b>: 604800 seconds, 7 days spent as good (Across all Rs)</p>
        <p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
        <p><b>Effect</b>: Ascensions count 50% more for Spiritual Surge.</p>
        <hr>
        <p><b>D2775</b> - For Mercenary</p>
        <p><b>Research Name</b>: Intervention</p>
        <p><b>Requirement</b>: Secrets of the Warriors.</p>
        <p><b>Cost</b>: 33.73 DQig (3.373e160)</p>
        <p><b>Effect</b>: Increases the production of Unique Building based on time spent with Mercenaries.</p>
        <p><b>Formula</b>: (10 * x ^ 0.7)%, where x is time spent with Mercenary.</p>
        <hr>
        <p><b>D3350</b> - For All Factions</p>
        <p><b>Research Name</b>: Vampirism</p>
        <p><b>Requirement</b>: 100 Sp% (1e26%) offline bonus, (Intervention D2775) and (Upheaval W3150).</p>
        <p><b>Cost</b>: 598.3 TSxg (5.983e194)</p>
        <p><b>Effect</b>: Increase assistants additively and multiplicatively based on your Offline Bonus.</p>
        <p><b>Additive Formula</b>: (3.25 * log10(1 + x) ^ 2.25), where x is your Offline Bonus.</p>
        <p><b>Multiplicative Formula</b>: (0.05 * log10(1 + x) ^ 2), where x is your Offline Bonus.</p>
        <hr>
        <p><b>D5125</b> - For All Factions</p>
        <p><b>Research Name</b>: Selection</p>
        <p><b>Requirement</b>: R175+, Forgotten Relic, Mythos artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Increase the production of Unique buildings based on Clicks in this game.</p>
        <p><b>Formula</b>: (x ^ 0.4), where x is clicks this game.</p>
        <hr>
        <p><b>D5375</b> - For Good</p>
        <p><b>Research Name</b>: Zealotry</p>
        <p><b>Requirement</b>: R177+, Forgotten Relic, Mythos artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges purchased in this game.</p>
        <p><b>Formula</b>: (0.75 * x ^ 0.75), where x is royal exchanges this game</p>
        <hr>
        <p><b>D5625</b> - For All Factions</p>
        <p><b>Research Name</b>: Prophecy</p>
        <p><b>Requirement</b>: R179+, Forgotten Relic, Mythos artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Empowers the effects of your faction's Set based on time spent with your least used faction. Lineage levels count more, by the same amount, for your faction’s Advanced Heritage.</p>
        <p><b>Formula</b>: (0.3 * x ^ 0.7), where x is your least spent faction time.</p>
        <hr>
        <p><b>D5875</b> - For All Factions</p>
        <p><b>Research Name</b>: Birthright</p>
        <p><b>Requirement</b>: R181+, Forgotten Relic, Mythos artifact and upgrade</p>
        <p><b>Cost</b>: Free</p>
        <p><b>Effect</b>: Gain the Bloodline effects of your least used non-mercenary faction. Based on time (This R), can give any vanilla, prestige or elite bloodline.</p>
        <?php include "../scripts/footer.html"; ?>
