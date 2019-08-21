<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>Warfare Facilities</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Warfarer.png" alt=Warfare" align="middle"> <b>Warfare</b></p>
<p>Use strategical prowess and manpower to manipulate the production system in your favor.</p>
<p><b>Increases</B>: <b>Demon</B>, <b>Titan</B>, and <b>Drow</B> production.</p>
<p>Pointing to this ingame will tell you how many slots are available also tells you your total research points.</p>
<br/>
<p><b>Research Point Production</b></p>
<p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
<br/>
<p><b>W1</b> - For <b>Demon</b> - Research Name: <b>Assault</b><p><b>Cost</b>: 750 Qag (7.50E125)</b><p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</b><p><b>Formula</b>: round(70 * x ^ 0.55)%, where x is Hellfire Blasts Cast This Game.</p>
<br/>
<p><b>W10</b> - For <b>Elf</b> - Research Name: <b>Dueling</b><p><b>Requirement</b>: 2000 Warrior Barracks</b><p><b>Cost</b>: 28.83 Uqag (2.883E127)</b><p><b>Effect</b>: Increase the production of all other buildings by 90% per Elven Training Grounds you own.</p>
<br/>
<p><b>W25</b> - For <b>Goblin</b> - Research Name: <b>War Funds</b><p><b>Requirement</b>: 1 Tqag (1E132) Coins Gained (This Game)</b><p><b>Cost</b>: 12.63 Dqag (1.263E130)</b><p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</b><p><b>Formula</b>: round(5 * x ^ 0.6)%, where x is Tax Collections Cast This Game.</p>
<br/>
<p><b>W50</b> - For <b>Undead</b> - Research Name: <b>Exertion</b><p><b>Requirement</b>: 1 day of Evil Play Time this R, Note: Play as any Evil faction, but you must be Demon to unlock this.</b><p><b>Cost</b>: 318.8 Tqag (3.188E134)</b><p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.</b><p><b>Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.</p>
<br/>
<p><b>W120</b> - For <b>All Factions</b> - Research Name: <b>Betrayal</b><p><b>Requirement</b>: 250 base assistants</b><p><b>Cost</b>: 676 Spqag (6.76E146)</b><p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of assistants you own.</b><p><b>Formula</b>: round(1.5 * x^1.5)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>W135</b> - For <b>All Factions</b> - Research Name: <b>Rampage</b><p><b>Requirement</b>: 580 Trophies(as Demon)</b><p><b>Cost</b>: 296 Ocqag (9.6E149)</b><p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.</b><p><b>Formula</b>: floor(1.3 * x ^ 1.1), where x is the amount of trophies unlocked.</p>
<br/>
<p><b>W150</b> - For <b>All Factions</b> - Research Name: <b>Invasion</b><p><b>Requirement</b>: Research War Funds (W25) &amp; Rampage (W135)</b><p><b>Cost</b>: 129.6 Noqag (1.296E152)</b><p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.</b><p><b>Formula</b>: round(32 * x ^ 0.75)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>W175</b> - For <b>Demon</b> - Research Name: <b>Overwhelm</b><p><b>Requirement</b>: Research Assault (W1) &amp; Invasion (W150)</b><p><b>Cost</b>: 3.273 Uqig (3.273E156) </b><p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast. </b><p><b>Formula</b>: (8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.</p>
<br/>
<p><b>W180</b> - For <b>All Factions</b> - Research Name: <b>Formation</b><p><b>Requirement</b>: 1000 Call to Arms (Total this R), Research Dueling (W10) &amp; Exertion (W50)</b><p><b>Cost</b>: 24.85 Uqig (2.485E157)</b><p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.</p>
<br/>
<p><b>W200</b> - For <b>All Factions</b> - Research Name: <b>Crusade</b><p><b>Requirement</b>: Research Hallowing (D50) &amp; Formation (W180)</b><p><b>Cost</b>: 82.65 Dqig (8.265E160)</b><p><b>Effect</b>: Gain additional assistants based on time spent as Good this R.</b><p><b>Formula</b>: floor(0.065 * x ^ 0.5), where x is your Time Spent Being Good (This R) stat.</p>
<br/>
<p><b>W205</b> - For <b>All Evil Factions</b> - Research Name: <b>Berserking</b><p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) &amp; Retribution (D150)</b><p><b>Cost</b>: 627.6 Dqig (6.276E161)</b><p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own. </b><p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%. </b><p><b>Formula</b>: floor(0.25x^0.9), where x is your Assistants stat.</p>
<br/>
<p><b>W225</b> - For <b>Angel</b> - Research Name: <b>Critical Strike</b><p><b>Requirement</b>: Research Dueling (W10) &amp; Transfixion (D55) </b><p><b>Cost</b>: 2.087 Qaqig (2.087E165)</b><p><b>Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this game.</b><p><b>Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light Active Time This Game in seconds.</p>
<br/>
<p><b>W250</b> - For <b>All Factions</b> - Research Name: <b>Swarming</b><p><b>Requirement</b>: Research Overwhelm (W175) &amp; Berserking (W205)</b><p><b>Cost</b>: 52.7 Qiqig (5.27E169)</b><p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.</b><p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.</p>
<br/>
<p><b>W260</b> - For <b>Titan</b> - Research Name: <b>Athletics</b><p><b>Requirement</b>: 3,000 Olympian Halls</b><p><b>Cost</b>: 3.039 SxQig (3.039E171)</b><p><b>Effect</b>: Increase the production of all other buildings by 100% per Olympian Hall you own.</p>
<br/>
<p><b>W275</b> - For <b>Faceless</b> - Research Name: <b>Domination</b><p><b>Requirement</b>: 300 Base Assistants (as Faceless)</b><p><b>Cost</b>: 1.331 SpQig (1.331E174)</b><p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game.(This R)</b><p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance. </b><p><b>Formula</b>: floor(200 * x ^ 0.55), where x is your Assistants (Max) stat.</p>
<br/>
<p><b>W290</b> - For <b>All Factions</b> - Research Name: <b>Entrench</b><p><b>Requirement</b>: 2,000 Excavations</b><p><b>Cost</b>: 582.7 SpQig (5.827E176)</b><p><b>Effect</b>: Increase the production of Unique buildings based on the amount of Excavations you made.</b><p><b>Formula</b>: round(15 * x ^ 0.8)%, where x is the amount of excavations made.</p>
<br/>
<p><b>W320</b> - For <b>All Factions</b> - Research Name: <b>Shattering</b><p><b>Requirement</b>: 2,650 Excavations</b><p><b>Cost</b>: 1.117 NoQig (1.117E180)</b><p><b>Effect</b>: Increase your clicking reward based on the amount of Excavations you made.</b><p><b>Formula</b>: round(10 * x ^ 0.75)%, where x is the amount of excavations made.</p>
<br/>
<p><b>W330</b> - For <b>All Factions</b> - Research Name: <b>Heroism</b><p><b>Requirement</b>: Research Crusade (W200) &amp; Athletics (W260).</b><p><b>Cost</b>: 6.443 Sxg (6.443E183)</b><p><b>Effect</b>: Increase your click reward based on the amount of trophies you unlocked.</b><p><b>Formula</b>: round(2.5 * x)%, where x is the amount of trophies unlocked.</p>
<br/>
<p><b>W350</b> - For <b>Druid</b> - Research Name: <b>Survival</b><p><b>Requirement</b>: Research Creeping (A300) &amp; Synthesis (A270).</b><p><b>Cost</b>: 21.42 USxg (2.142E187)</b><p><b>Effect</b>: Increase the production of all other buildings based on the production of your Stonehenge Circles.</b><p><b>Formula</b>: (75 * (log10(1 + x)) ^ 1.3))%, where x is the production of your Stonehenge Circles.</p>
<br/>
<p><b>W400</b> - For <b>All Factions</b> - Research Name: <b>Siege</b><p><b>Requirement</b>: Research Architecture (C251) &amp; Entrench (W290).</b><p><b>Cost</b>: 13.66 QaSxg (1.366E196)</b><p><b>Effect</b>: Each building in the three highest building tiers count as 2 buildings for all purposes.</p>
<br/>
<p><b>W405</b> - For <b>Drow</b> - Research Name: <b>Ambush</b><p><b>Requirement</b>: Secrets of the Underworld (as Drow)</b><p><b>Cost</b>: 103.7 QaSxg (1.037E197)</b><p><b>Effect</b>: Increase the production of Spider Sanctuaries based on offline Bonus</b><p><b>Formula</b>: (3.25 * log10(1 + x) ^ 3.25)%, where x is offline production bonus multiplier.</p>
<br/>
<p><b>W520</b> - For <b>Drow</b> - Research Name: <b>Stalking</b><p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)</b><p><b>Cost</b>: 18.47 Uspg (1.847E217)</b><p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)</p>
<br/>
<p><b>W525</b> - For <b>All Factions</b> - Research Name: <b>Bloodlust</b><p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)</b><p><b>Cost</b>: 140.2 USpg (1.402E218)</b><p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.</b><p><b>Formula</b>: (300 * floor(x ^ 0.3))%, where x is Faction Spells' Cast This Game.</p>
<br/>
<p><b>W560</b> - For <b>Dwarf</b> - Research Name: <b>Resilience</b><p><b>Requirement</b>: Research Eternity (D330) and Mercy (D480)</b><p><b>Cost</b>: 204.2 TSpg (2.042E224)</b><p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game.</b><p><b>Formula</b>: (5 * x ^ 0.45)%, where x is your Treasure Clicks (This Game) stat.</p>
<br/>
<p><b>W590</b> - For <b>Demon,Drow</b> - Research Name: <b>Torture </b><p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)</b><p><b>Cost</b>: 39.16 QiSpg (3.916E229)</b><p><b>Effect</b>: Increase assistants production based on total time spent being Evil. (This R)</b><p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Time Spent Being Evil stat.</p>
<br/>
<p><b>W1275</b> - For <b>All Factions</b> - Research Name: <b>Authority</b><p><b>Requirement</b>: 43200s (12 hours) Call to Arms Cast Time (This game).</b><p><b>Cost</b>: 152.4 Dvg (1.524e71)</b><p><b>Effect</b>: Increase the duration of all spells based on the amount of Non-Unique buildings you own.</b><p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Non-Unique buildings you own.</p>
<br/>
<p><b>W1375</b> - For <b>All Factions</b> - Research Name: <b>Scavenging</b><p><b>Requirement</b>: 604800s 7 days spent as evil (Across all Rs)</b><p><b>Cost</b>: 137.8 Qavg (1.378e77)</b><p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.</b><p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.</b><p><b>Formula</b>: (100 * x ^ 0.5) where x is assistants</p>
<br/>
<p><b>W1400</b> - For <b>Dragon</b> - Research Name: <b>Cataclysm</b><p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon</b><p><b>Cost</b>: 4.249 Qivg (4.249e78)</b><p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.</b><p><b>Formula</b>: (650 * x ^ 0.35), where x is clicks (this game).</p>
<br/>
<p><b>W3050</b> - For <b>Mercenary</b> - Research Name: <b>Flanking</b><p><b>Requirement</b>: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325). </b><p><b>Cost</b>: 809 SpQig (8.09e176)</b><p><b>Effect</b>: Increases the production of buildings one tier directly above or below a Unique Building based on the amount of assistants you own.</b><p><b>Formula</b>: (2 * x ^ 0.8), where x is assistants.</p>
<br/>
<p><b>W3150</b> - For <b>All Factions</b> - Research Name: <b>Upheaval</b><p><b>Requirement</b>: 60000 Farms, Inns and Blacksmiths.  </b><p><b>Cost</b>: 731.6 NoQig (7.316e182)</b><p><b>Effect</b>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.</b><p><b>Formula</b>: (150 * (12 - T) ^ 2.15), where T is building tier.</p>
<?php include "../scripts/footer.html"; ?>
