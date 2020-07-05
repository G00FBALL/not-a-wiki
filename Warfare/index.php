<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
        <h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
        <h6>Warfare Facilities</h6>
        <p><img src="http://musicfamily.org/realm/Factions/picks/Warfarer.png" alt="Warfare" align="middle"> <b>Warfare</b></p>
        <p>Use strategical prowess and manpower to manipulate the production system in your favor.</p>
        <p><b>Increases</b>: <b>Demon</B>, <b>Titan</b>, and <b>Drow</b> production.</p>
        <p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
        <br/>
        <p><b>Research Point Production</b></p>
        <p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
        <br/>
    <p><b>W1</b> - For Demon</p>
	<p><b>Research Name</b>: Assault</p>
	<p><b>Cost</b>: 750 Qag (7.50E125)</p>
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
	<p><b>Formula</b>: (70 * x ^ 0.7)%, where x is Hellfire Blasts Cast This Game.</p>
	<hr>
    <p><b>W10</b> - For Elf</p>
	<p><b>Research Name</b>: Dueling</p>
	<p><b>Hint</b>: Too many soldiers. More barracks!</p>
	<p><b>Requirement</b>: 2000 Warrior Barracks</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 90% per Elven Training Grounds you own.</p>
	<hr>
    <p><b>W25</b> - For Goblin</p>
	<p><b>Research Name</b>: War Funds</p>
	<p><b>Hint</b>: Get rich.</p>
	<p><b>Requirement</b>: 1 Tqag (1E132) Coins Gained (This Game)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</p>
	<p><b>Formula</b>: round(5 * x ^ 0.6)%, where x is Tax Collections Cast This Game.</p>
	<hr>
    <p><b>W50</b> - For Undead</p>
	<p><b>Research Name</b>: Exertion</p>
	<p><b>Hint</b>: Bad times!</p>
	<p><b>Requirement</b>: 12 hours of Evil Play Time this R, Note: Play as any Evil faction, but you must be Demon to unlock this.</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)</p>
	<p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.</p>
	<p><b>Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.</p>
	<hr>
    <p><b>W120</b> - For All Factions</p>
	<p><b>Research Name</b>: Betrayal</p>
	<p><b>Hint</b>: How big of an army can you muster?</p>
	<p><b>Requirement</b>: 250 base assistants</p>
	<p><b>Cost</b>: 676 Spqag (6.76E146)</p>
	<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of assistants you own.</p>
	<p><b>Formula</b>: round(1.5 * x^1.5)%, where x is the amount of assistants you own.</p>
	<hr>
    <p><b>W135</b> - For All Factions</p>
	<p><b>Research Name</b>: Rampage</p>
	<p><b>Hint</b>: Light up those cups!</p>
	<p><b>Requirement</b>: 580 Trophies(as Demon)</p>
	<p><b>Cost</b>: 296 Ocqag (9.6E149)</p>
	<p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.</p>
	<p><b>Formula</b>: floor(1.3 * x ^ 1.1), where x is the amount of trophies unlocked.</p>
	<hr>
    <p><b>W150</b> - For All Factions</p>
	<p><b>Research Name</b>: Invasion</p>
	<p><b>Requirement</b>: Research War Funds (W25) & Rampage (W135)</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.</p>
	<p><b>Formula</b>: round(32 * x ^ 0.75)%, where x is the amount of assistants you own.</p>
	<hr>
    <p><b>W175</b> - For Demon</p>
	<p><b>Research Name</b>: Overwhelm</p>
	<p><b>Requirement</b>: Research Assault (W1) & Invasion (W150)</p>
	<p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
	<p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.</p>
	<p><b>Formula</b>: (8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.</p>
	<hr>
    <p><b>W180</b> - For All Factions</p>
	<p><b>Research Name</b>: Formation</p>
	<p><b>Requirement</b>: 1000 Call to Arms (This R), Research Dueling (W10) & Exertion (W50)</p>
	<p><b>Cost</b>: 24.85 Uqig (2.485E157)</p>
	<p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.</p>
	<hr>
    <p><b>W200</b> - For All Factions</p>
	<p><b>Research Name</b>: Crusade</p>
	<p><b>Requirement</b>: Research Hallowing (D50) & Formation (W180)</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
	<p><b>Effect</b>: Gain additional assistants based on time spent as Good this R.</p>
	<p><b>Formula</b>: floor(0.065 * x ^ 0.5), where x is your Time Spent Being Good (This R) stat.</p>
	<hr>
    <p><b>W205</b> - For All Evil Factions</p>
	<p><b>Research Name</b>: Berserking</p>
	<p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) & Retribution (D150)</p>
	<p><b>Cost</b>: 627.6 Dqig (6.276E161)</p>
	<p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
	<p><b>Formula</b>: floor(0.25x^0.9), where x is your Assistants stat.</p>
	<hr>
    <p><b>W225</b> - For Angel</p>
	<p><b>Research Name</b>: Critical Strike</p>
	<p><b>Requirement</b>: Research Dueling (W10) & Transfixion (D55)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)</p>
	<p><b>Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this game.</p>
	<p><b>Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light Active Time This Game in seconds.</p>
	<hr>
    <p><b>W250</b> - For All Factions</p>
	<p><b>Research Name</b>: Swarming</p>
	<p><b>Requirement</b>: Research Overwhelm (W175) & Berserking (W205)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.</p>
	<p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.</p>
	<hr>
    <p><b>W260</b> - For Titan</p>
	<p><b>Research Name</b>: Athletics</p>
	<p><b>Hint</b>: Too many legends! Need more room!</p>
	<p><b>Requirement</b>: 3,000 Olympian Halls</p>
	<p><b>Cost</b>: 3.039 SxQig (3.039E171)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 100% per Olympian Hall you own.</p>
	<hr>
    <p><b>W275</b> - For Faceless</p>
	<p><b>Research Name</b>: Domination</p>
	<p><b>Hint</b>: How many people are required to throw a party?</p>
	<p><b>Requirement</b>: 300 Base Assistants (as Faceless)</p>
	<p><b>Cost</b>: 1.331 SpQig (1.331E174)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game.(This R)</p>
	<p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.</p>
	<p><b>Formula</b>: (200 * x ^ 0.55), where x is your Assistants (Max) stat.</p>
	<hr>
    <p><b>W290</b> - For All Factions</p>
	<p><b>Research Name</b>: Entrench</p>
	<p><b>Hint</b>: Dig, dig, dig the hole.</p>
	<p><b>Requirement</b>: 2,000 Excavations</p>
	<p><b>Cost</b>: 582.7 SpQig (5.827E176)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of Excavations you made.</p>
	<p><b>Formula</b>: round(15 * x ^ 0.8)%, where x is the amount of excavations made.</p>
	<hr>
    <p><b>W320</b> - For All Factions</p>
	<p><b>Research Name</b>: Shattering</p>
	<p><b>Hint</b>: Down all the way.</p>
	<p><b>Requirement</b>: 2,650 Excavations</p>
	<p><b>Cost</b>: 1.117 NoQig (1.117E180)</p>
	<p><b>Effect</b>: Increase your clicking reward based on the amount of Excavations you made.</p>
	<p><b>Formula</b>: round(10 * x ^ 0.75)%, where x is the amount of excavations made.</p>
	<hr>
    <p><b>W330</b> - For All Factions</p>
	<p><b>Research Name</b>: Heroism</p>
	<p><b>Requirement</b>: Research Crusade (W200) & Athletics (W260).</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)</p>
	<p><b>Effect</b>: Increase your click reward based on the amount of trophies you unlocked.</p>
	<p><b>Formula</b>: round(2.5 * x)%, where x is the amount of trophies unlocked.</p>
	<hr>
    <p><b>W350</b> - For Druid</p>
	<p><b>Research Name</b>: Survival</p>
	<p><b>Requirement</b>: Research Creeping (A300) & Synthesis (A270).</p>
	<p><b>Cost</b>: 21.42 USxg (2.142E187)</p>
	<p><b>Effect</b>: Increase the production of all other buildings based on the production of your Stonehenge Circles.</p>
	<p><b>Formula</b>: (75 * (log10(1 + x)) ^ 1.3))%, where x is the production of your Stonehenge Circles.</p>
	<hr>
    <p><b>W400</b> - For All Factions</p>
	<p><b>Research Name</b>: Siege</p>
	<p><b>Requirement</b>: Research Architecture (C251) & Entrench (W290).</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)</p>
	<p><b>Effect</b>: Each building in the three highest building tiers count as 2 buildings for all purposes.</p>
	<hr>
    <p><b>W405</b> - For Drow</p>
	<p><b>Research Name</b>: Ambush</p>
	<p><b>Requirement</b>: Secrets of the Underworld (as Drow)</p>
	<p><b>Cost</b>: 103.7 QaSxg (1.037E197)</p>
	<p><b>Effect</b>: Increase the production of Spider Sanctuaries based on offline Bonus</p>
	<p><b>Formula</b>: (3.25 * log10(1 + x) ^ 3.25)%, where x is offline production bonus multiplier.</p>
	<hr>
    <p><b>W520</b> - For Drow</p>
	<p><b>Research Name</b>: Stalking</p>
	<p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)</p>
	<p><b>Cost</b>: 18.47 Uspg (1.847E217)</p>
	<p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)</p>
	<hr>
    <p><b>W525</b> - For Evil</p>
	<p><b>Research Name</b>: Bloodlust</p>
	<p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)</p>
	<p><b>Cost</b>: 140.2 USpg (1.402E218)</p>
	<p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.</p>
	<p><b>Formula</b>: (300 * floor(x ^ 0.3))%, where x is Faction Spells' Cast This Game.</p>
	<hr>
    <p><b>W560</b> - For Dwarf</p>
	<p><b>Research Name</b>: Resilience</p>
	<p><b>Requirement</b>: Research Eternity (D330) and Mercy (D480)</p>
	<p><b>Cost</b>: 204.2 TSpg (2.042E224)</p>
	<p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game.</p>
	<p><b>Formula</b>: (4 * x ^ 0.4)%, where x is your Treasure Clicks (This Game) stat.</p>
	<hr>
    <p><b>W590</b> - For Demon,Drow</p>
	<p><b>Research Name</b>: Torture</p>
	<p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
	<p><b>Effect</b>: Increase assistants production based on total time spent being Evil. (This R)</p>
	<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Time Spent Being Evil stat.</p>
	<hr>
    <p><b>W1275</b> - For All Factions</p>
	<p><b>Research Name</b>: Authority</p>
	<p><b>Hint</b>: How long does your Call to Arms last?</p>
	<p><b>Requirement</b>: 43200s (12 hours) Call to Arms Cast Time (This game).</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Non-Unique buildings you own.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Non-Unique buildings you own.</p>
	<hr>
    <p><b>W1375</b> - For All Factions</p>
	<p><b>Research Name</b>: Scavenging</p>
	<p><b>Hint</b>: GUD? More like Evil.</p>
	<p><b>Requirement</b>: 604800s 7 days spent as evil (Across all Rs)</p>
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (100 * x ^ 0.5), where x is assistants.</p>
	<hr>
    <p><b>W1400</b> - For Dragon</p>
	<p><b>Research Name</b>: Cataclysm</p>
	<p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon</p>
	<p><b>Cost</b>: 4.249 Qivg (4.249e78)</p>
	<p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.</p>
	<p><b>Formula</b>: (650 * x ^ 0.35), where x is clicks (this game).</p>
	<hr>
    <p><b>W3050</b> - For Mercenary</p>
	<p><b>Research Name</b>: Flanking</p>
	<p><b>Requirement</b>: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325).</p>
	<p><b>Cost</b>: 809 SpQig (8.09e176)</p>
	<p><b>Effect</b>: Increases the production of buildings one tier directly above or below a Unique Building based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (2 * x ^ 0.8), where x is assistants.</p>
	<hr>
    <p><b>W3150</b> - For All Factions</p>
	<p><b>Research Name</b>: Upheaval</p>
	<p><b>Hint</b>: More of the baseline production buildings!</p>
	<p><b>Requirement</b>: 60000 Farms, Inns and Blacksmiths.</p>
	<p><b>Cost</b>: 731.6 NoQig (7.316e182)</p>
	<p><b>Effect</b>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.</p>
	<p><b>Formula</b>: (150 * (12 - T) ^ 2.15), where T is building tier.</p>
	<hr>
    <p><b>W5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Sovereignty</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Battlefield artifact and upgrade</p>
	<p><b>Effect</b>: Increase the production of two highest tier buildings based on assistants you own.</p>
	<p><b>Formula</b>: (x ^ 0.3), where x is assistants</p>
	<hr>
    <p><b>W5375</b> - For Evil</p>
	<p><b>Research Name</b>: Officers</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Battlefield artifact and upgrade</p>
	<p><b>Effect</b>: Gain assistants multiplicatively based on amount of trophies unlocked.</p>
	<p><b>Formula</b>: (2.5 * x ^ 0.5), where x is trophies</p>
	<hr>
    <p><b>W5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Concealment</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Battlefield artifact and upgrade</p>
	<p><b>Effect</b>: Offline time counts more based on Mana Produced in this game.</p>
	<p><b>Effect</b>: (2.5 * ln(1 + x) ^ 2.5), where x is mana produced (This game)</p>
	<hr>
    <p><b>W5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Patience</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Battlefield artifact and upgrade</p>
	<p><b>Effect</b>: Time spent with Prestige Counts 500% more.</p>
	<p><b>Effect</b>: Time spent with Elite factions Counts 1000% more.</p>
	<hr>
        <?php include "../scripts/footer.html"; ?>
