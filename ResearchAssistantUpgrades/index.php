<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <?php include "../scripts/header.html"; ?>
    <h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png" /></a></h6>
    <h6>Assistant Research Upgrade Slots</h6>
    <p><b>Spellcraft</b></p>
    <p><b>S225</b> - For Undead</p>
    <p><b>Research Name</b>: Necromancy</p>
    <p><b>Requirement</b>: Research Resurrection (D175) & Cryomancy (S200)</p>
    <p><b>Cost</b>: 2.087 QaQig (2.087E165)</p>
    <p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.</p>
    <p><b>Formula</b>: round(5 * x ^ 0.75)%, where x is the number of Necropolises you own.</p>
    <br>
    <p><b>S375</b> - For Faceless</p>
    <p><b>Research Name</b>: Illusion</p>
    <p><b>Requirement</b>: Research Reverberation (S330) & Mesmerization (S305)</p>
    <p><b>Cost</b>: 541 DSxg (5.41E191)</p>
    <p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.</p>
    <p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes</p>
    <br>
    <p><b>S5875</b> - For All Factions</p>
    <p><b>Research Name</b>: Mirrors</p>
    <p><b>Requirement</b>: R181+, Forgotten Relic, Mana Loom artifact and upgrade</p>
    <p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.</p>
    <p><b>Formula</b>: (ln(x) ^ 1.75), where x is spell casts this game.</p>
    <hr>
    <p><b>Craftsmanship</b></p>
    <p><b>C305</b> - For All Factions</p>
    <p><b>Research Name</b>: Golemcraft</p>
    <p><b>Hint</b>: Titanic Patience.</p>
    <p><b>Requirement</b>: 2 days as Titans (Total across all R)</p>
    <p><b>Cost</b>: 255.2 OcQig (2.552E179)</p>
    <p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</p>
    <p><b>Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
    <br>
    <p><b>C1325</b> - For All Factions</p>
    <p><b>Research Name</b>: Plasmation</p>
    <p><b>Hint</b>: I've gotta take a Mana shower.</p>
    <p><b>Requirement</b>: 50m (5e7) Mana Produced (This game)</p>
    <p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
    <p><b>Effect</b>: Gain assistants based on mana produced in this game.</p>
    <p><b>Formula</b>: floor(1.25 * ln(1 + x) ^ 2.25), where x is mana produced (this game).</p>
    <hr>
    <p><b>Divine</b></p>
    <p><b>D175</b> - For Angel</p>
    <p><b>Research Name</b>: Resurrection</p>
    <p><b>Requirement</b>: Research Blessing (D1) & Refraction (A55)</p>
    <p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
    <p><b>Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)</p>
    <p><b>Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).</p>
    <br>
    <p><b>D250</b> - For All Factions</p>
    <p><b>Research Name</b>: Demonology</p>
    <p><b>Requirement</b>: Research Transcendence (D200) & Pyromancy (S150)</p>
    <p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
    <p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.</p>
    <p><b>Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.</p>
    <br>
    <p><b>D320</b> - For All Factions</p>
    <p><b>Research Name</b>: Deliverance</p>
    <p><b>Hint</b>: High-rate mana transfusions.</p>
    <p><b>Requirement</b>: 350 m/s Mana Regen</p>
    <p><b>Cost</b>: 1.117 NoQig (1.117E180)</p>
    <p><b>Effect</b>: Increase assistants production based on mana regeneration.</p>
    <p><b>Formula</b>: (20 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
    <br>
    <p><b>D350</b> - For Titan</p>
    <p><b>Research Name</b>: Descent</p>
    <p><b>Requirement</b>: Research Swarming (W250) & Heroism (W330)</p>
    <p><b>Cost</b>: 21.42 USxg (2.142E187)</p>
    <p><b>Effect</b>: Gain additional assistants based on the amount of Olympian Halls you own.</p>
    <p><b>Formula</b>: floor(x ^ 0.5)%, where x is the number of Olympian Halls you own.</p>
    <br>
    <p><b>D3350</b> - For All Factions</p>
    <p><b>Research Name</b>: Vampirism</p>
    <p><b>Requirement</b>: 100 Sp% (1e26%) offline bonus, (Intervention D2775) and (Upheaval W3150).</p>
    <p><b>Cost</b>: 598.3 TSxg (5.983e194)</p>
    <p><b>Effect</b>: Increase assistants additively and multiplicatively based on your Offline Bonus.</p>
    <p><b>Additive Formula</b>: (3.25 * log10(1 + x) ^ 2.25), where x is your Offline Bonus.</p>
    <p><b>Multiplicative Formula</b>: (0.05 * log10(1 + x) ^ 2), where x is your Offline Bonus.</p>
    <hr>
    <p><b>Economics</b></p>
    <p><b>E25</b> - For Elf</p>
    <p><b>Research Name</b>: Commerce</p>
    <p><b>Hint</b>: Colored wealth.</p>
    <p><b>Requirement</b>: 100 M (1E8) Faction Coins (Found this Game)</p>
    <p><b>Cost</b>: 12.63 Dqag (1.263E130)</p>
    <p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</p>
    <p><b>Formula</b>: floor((1 + 6 * x) ^ 0.5 - 1), where x is your Royal Exchanges Made stat.</p>
    <br>
    <p><b>E590</b> - For Goblin,Drow</p>
    <p><b>Research Name</b>: Slavery</p>
    <p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)</p>
    <p><b>Cost</b>: 39.16 QiSpg (3.916 E229)</p>
    <p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own.</p>
    <p><b>Formula</b>: (0.1 * x ^ 0.8), where x is the number of Non Unique Buildings you own.</p>
    <br>
    <p><b>E3250</b> - For All</p>
    <p><b>Research Name</b>: Hirelings</p>
    <p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
    <p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
    <p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
    <p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
    <hr>
    <p><b>Alchemy</b></p>
    <p><b>A120</b> - For All Factions</p>
    <p><b>Research Name</b>: Vivification</p>
    <p><b>Hint</b>: Maximum Magic!</p>
    <p><b>Requirement</b>: Have 6500 mana</p>
    <p><b>Cost</b>: 676 Spqag (6.76E146)</p>
    <p><b>Effect</b>: Gain additional assistants based on max mana.</p>
    <p><b>Formula</b>: floor((x / 15) ^ 0.825), where x is your maximum mana.</p>
    <br>
    <p><b>A375</b> - For Druid</p>
    <p><b>Research Name</b>: Transfusion</p>
    <p><b>Requirement</b>: Research Infusion (A251) & Engraving (A305)</p>
    <p><b>Cost</b>: 541 DSxg (5.41E191)</p>
    <p><b>Effect</b>: Gain additional assistants based on mana produced this game.</p>
    <p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.</p>
    <br>
    <p><b>A495</b> - For Dwarf</p>
    <p><b>Research Name</b>: Elixirs</p>
    <p><b>Hint</b>: Never enough servitude.</p>
    <p><b>Requirement</b>: 500 Base Assistants (as Drow)</p>
    <p><b>Cost</b>: 731.4 NoSxg (7.314E212)</p>
    <p><b>Effect</b>: Increase assistants production based on the amount of research made.</p>
    <p><b>Formula</b>: (40 * x ^ 0.4)%, where x is the Amount of Researches made.</p>
    <hr>
    <p><b>Warfare</b></p>
    <p><b>W175</b> - For Demon</p>
    <p><b>Research Name</b>: Overwhelm</p>
    <p><b>Requirement</b>: Research Assault (W1) & Invasion (W150)</p>
    <p><b>Cost</b>: 3.273 Uqig (3.273E156)</p>
    <p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.</p>
    <p><b>Formula</b>: (8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.</p>
    <br>
    <p><b>W200</b> - For All Factions</p>
    <p><b>Research Name</b>: Crusade</p>
    <p><b>Requirement</b>: Research Hallowing (D50) & Formation (W180)</p>
    <p><b>Cost</b>: 82.65 Dqig (8.265E160)</p>
    <p><b>Effect</b>: Gain additional assistants based on time spent as Good this R.</p>
    <p><b>Formula</b>: floor(0.065 * x ^ 0.5), where x is your Time Spent Being Good (This R) stat.</p>
    <br>
    <p><b>W250</b> - For All Factions</p>
    <p><b>Research Name</b>: Swarming</p>
    <p><b>Requirement</b>: Research Overwhelm (W175) & Berserking (W205)</p>
    <p><b>Cost</b>: 52.7 Qiqig (5.27E169)</p>
    <p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.</p>
    <p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.</p>
    <br>
    <p><b>W520</b> - For Drow</p>
    <p><b>Research Name</b>: Stalking</p>
    <p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)</p>
    <p><b>Cost</b>: 18.47 Uspg (1.847E217)</p>
    <p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)</p>
    <br>
    <p><b>W590</b> - For Demon,Drow</p>
    <p><b>Research Name</b>: Torture</p>
    <p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)</p>
    <p><b>Cost</b>: 39.16 QiSpg (3.916E229)</p>
    <p><b>Effect</b>: Increase assistants production based on total time spent being Evil. (This R)</p>
    <p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Time Spent Being Evil stat.</p>
    <br>
    <p><b>W5375</b> - For Evil</p>
    <p><b>Research Name</b>: Officers</p>
    <p><b>Requirement</b>: R177+, Forgotten Relic, Battlefield artifact and upgrade</p>
    <p><b>Effect</b>: Gain assistants multiplicatively based on amount of trophies unlocked.</p>
    <p><b>Formula</b>: (2.5 * x ^ 0.5), where x is trophies</p>
    <?php include "../scripts/footer.html"; ?>
