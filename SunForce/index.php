<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="http://musicfamily.org/realm/Factions/picks/TopPageUpgrade.png" alt="Sun Force" align="middle"></h6>
	<h6>Sun Force</h6>
	<p>Obtained by excavating both the Dawnstone and Duskstone lore artifacts. It has different effects depending on the time of day.</p>
	<p>At R100+ you can get Planetary Force (Lore Artifact) which activates all Sun Force effects at once. See details below.</p>
	<p><img src="http://musicfamily.org/realm/Factions/picks/DawnstoneArtifact.png" alt="Dawnstone" align="middle"><b> Dawnstone</b></p>
	<p><b>Hint</b>: Relic of the Dawn hours.</p>
	<p><b>Description</b>: Only found during sunrise hours. Emits a faint glow.</p>
	<p><b>Requirement</b>: R16+, between 5:00 AM and 8:00 AM (Your local time)</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is your Excavation count.</p>
	<br/>
	<p><img src="http://musicfamily.org/realm/Factions/picks/DuskstoneArtifact.png" alt="Duskstone" align="middle"><b> Duskstone</b></p>
	<p><b>Hint</b>: Relic of the Dusk hours.</p>
	<p><b>Description</b>: Only found during sunset hours. Absorbs light in a small radius.</p>
	<p><b>Requirement</b>: R16+, between 6:00 PM and 9:00 PM (Your local time)</p>
	<p><b>Chance</b>: (x / 10,000)%, where x is your Excavation count.</p>
	<h6>Sun Force</h6>
	<p><b>Upgrade Cost</b>: 1 Notg (1e120) Coins, A1+ free</p>
	<p><b>Note</b>: All times are based on UTC time.</p>
	<p><b>Note</b>: Current
	<a style="text-decoration: none" class="clock24" id="tz24-1509892643-tzutc-eyJob3VydHlwZSI6MTIsInNob3dkYXRlIjoiMCIsInNob3dzZWNvbmRzIjoiMSIsInNob3d0aW1lem9uZSI6IjEiLCJ0eXBlIjoiZCIsImxhbmciOiJlbiJ9">UTC Time</a>
	<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
	<p><img src="http://musicfamily.org/realm/Factions/picks/SunForce12am6am.png" alt="SunForce12pm6pm" align="middle"><b><font color="red"> 12 AM - 6 AM</font></b></p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of gems you own.</p>
	<p><b>Formula</b>: +(floor(ln(1 + x) ^ 1.35)), where x is the amount of gems you own.</p>
	<br/>
	<p><img src="http://musicfamily.org/realm/Factions/picks/SunForce6am12pm.png" alt="SunForce12pm6pm" align="middle"><b><font color="red"> 6 AM - 12 PM</font></b></p>
	<p><b>Effect</b>: Increase Mana Regeneration based on the amount of assistants you own. (Additive)</p>
	<p><b>Formula</b>: +(1.75 * ln(1 + x) ^ (1.75 + 0.5 * A)), where x is the amount of assistants you own and A is how many times you have ascended.</p>
	<br/>
	<p><img src="http://musicfamily.org/realm/Factions/picks/SunForce12pm6pm.png" alt="SunForce12pm6pm" align="middle"><b><font color="red"> 12 PM - 6 PM</font></b></p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Faction Coins you collected in this game.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ (3 + 3 * A))%, where x is your faction coins and A is how many times you have ascended.</p>
	<br/>
	<p><img src="http://musicfamily.org/realm/Factions/picks/SunForce6pm12am.png" alt="SunForce6pm12am" align="middle"><b><font color="red"> 6 PM - 12 AM</font></b></p>
	<p><b>Effect</b>: Increase offline production based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (10 * x ^ (0.85 + 0.15 * A))%, where x is the number of buildings you own and A is how many times you have ascended.</p>
	<hr>
	<p><b><img src="http://musicfamily.org/realm/Factions/picks/PlanetaryForceArtifact.png" align="middle"> Planetary Force</p></b>
	<p><b>Hint</b>: Try every day for better luck! Missing a day is the same as breaking a mirror, you know.</p>
	<p><b>Description</b>: Planets aligning seem to affect your realm in different ways...</p>
	<p><b>Requirements</b>: R100+</p>
	<p><b>Chance</b>: ((x ^ 2.5) / 5000)%, where x is amount of consecutive days logged in.</p>
	<p><b>Effect</b>: Gives upgrade with the same name</p>
	<p><b>Upgrade Effect</b>: Activates all Sun Force effects at once.</p>
	<p><b>Upgrade Cost</b>: 100 Qi (1e20) Coins, A3+ free</p>
<?php include "../scripts/footer.html"; ?>