<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
	<h6><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6>
	<div id="calrps">
		<style>
			th, td {
				border: 1px solid black;
			}
			th {
				background-color: #b3bcc6;
			}
		</style>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<table style="border-collapse: collapse">
			<tr>
				<th colspan="5">Maximum Research Points and Cost Per Reincarnation</th>
			</tr>
			<tr class="calc">
				<th style="width:100px">Reincarnation</th>
				<th style="width:80px">Research Points</th>
				<th style="width:120px">Cost in Coins</th>
				<th style="width:120px">Recommended Gems</th>
				<th>Cost in Faction Coins</th>
			</tr>
			<tr class="calc">
				<td><input id="reinc" type="number" min="16" max="246" style="text-align: center; background-color: #b3bcc6;" value="16"></td>
				<td id="rp"></td>
				<td id="Coins"></td>
				<td id="Gems"></td>
				<td id="FC"></td>
			</tr>
		</table>
		<script>
			var rtorp = {
				"16": {"RP": "136", "CoinSc": "1.60e151", "CoinSh": "15.98 Noqag", "FCSc": "8.94e7", "FCSh": "89.36 M", "GemsSc": "5.65e69", "GemsSh": "5.65 Dvg"},
				"17": {"RP": "153", "CoinSc": "1.57e154", "CoinSh": "15.65 Qig", "FCSc": "5.31e7", "FCSh": "53.09 M", "GemsSc": "1.77e71", "GemsSh": "176.93 Dvg"},
				"18": {"RP": "171", "CoinSc": "2.32e157", "CoinSh": "23.18 Uqig", "FCSc": "1.32e8", "FCSh": "132.00 M", "GemsSc": "6.81e72", "GemsSh": "6.81 Tvg"},
				"19": {"RP": "190", "CoinSc": "5.15e160", "CoinSh": "51.46 Dqig", "FCSc": "2.04e8", "FCSh": "204.21 M", "GemsSc": "3.21e74", "GemsSh": "320.80 Tvg"},
				"20": {"RP": "210", "CoinSc": "1.71e164", "CoinSh": "171.26 Tqig", "FCSc": "2.96e8", "FCSh": "296.02 M", "GemsSc": "1.85e76", "GemsSh": "18.51 Qavg"},
				"21": {"RP": "231", "CoinSc": "8.55e167", "CoinSh": "854.74 Qaqig", "FCSc": "4.34e8", "FCSh": "434.49 M", "GemsSc": "1.31e78", "GemsSh": "1.31 Qivg"},
				"22": {"RP": "253", "CoinSc": "6.40e171", "CoinSh": "6.40 Sxqig", "FCSc": "6.14e8", "FCSh": "614.30 M", "GemsSc": "1.13e80", "GemsSh": "113.12 Qivg"},
				"23": {"RP": "276", "CoinSc": "7.18e175", "CoinSh": "71.82 Spqig", "FCSc": "8.68e8", "FCSh": "868.18 M", "GemsSc": "1.20e82", "GemsSh": "11.98 Sxvg"},
				"24": {"RP": "300", "CoinSc": "1.21e180", "CoinSh": "1.21 Noqig", "FCSc": "1.20e9", "FCSh": "1.20 B", "GemsSc": "1.56e84", "GemsSh": "1.56 Spvg"},
				"25": {"RP": "325", "CoinSc": "3.05e184", "CoinSh": "30.54 Sxg", "FCSc": "1.64e9", "FCSh": "1.64 B", "GemsSc": "2.47e86", "GemsSh": "247.13 Spvg"},
				"26": {"RP": "351", "CoinSc": "1.16e189", "CoinSh": "1.16 Dsxg", "FCSc": "2.22e9", "FCSh": "2.22 B", "GemsSc": "4.81e88", "GemsSh": "48.10 Ocvg"},
				"27": {"RP": "378", "CoinSc": "6.57e193", "CoinSh": "65.72 Tsxg", "FCSc": "2.97e9", "FCSh": "2.97 B", "GemsSc": "1.15e91", "GemsSh": "11.47 Novg"},
				"28": {"RP": "406", "CoinSc": "5.60e198", "CoinSh": "5.60 Qisxg", "FCSc": "3.92e9", "FCSh": "3.92 B", "GemsSc": "3.35e93", "GemsSh": "3.35 Tg"},
				"29": {"RP": "435", "CoinSc": "7.16e203", "CoinSh": "716.06 Sxsxg", "FCSc": "5.15e9", "FCSh": "5.15 B", "GemsSc": "1.20e96", "GemsSh": "1.20 Utg"},
				"30": {"RP": "465", "CoinSc": "1.37e209", "CoinSh": "137.31 Ocsxg", "FCSc": "6.69e9", "FCSh": "6.69 B", "GemsSc": "5.24e98", "GemsSh": "524.04 Utg"},
				"31": {"RP": "496", "CoinSc": "3.95e214", "CoinSh": "39.49 Spg", "FCSc": "8.63e9", "FCSh": "8.63 B", "GemsSc": "2.81e101", "GemsSh": "281.05 Dtg"},
				"32": {"RP": "528", "CoinSc": "1.70e220", "CoinSh": "17.04 Dspg", "FCSc": "1.10e10", "FCSh": "11.03 B", "GemsSc": "1.85e104", "GemsSh": "184.60 Ttg"},
				"33": {"RP": "561", "CoinSc": "1.10e226", "CoinSh": "11.03 Qaspg", "FCSc": "1.40e10", "FCSh": "14.00 B", "GemsSc": "1.49e107", "GemsSh": "148.51 Qatg"},
				"34": {"RP": "595", "CoinSc": "1.07e232", "CoinSh": "10.70 Sxspg", "FCSc": "1.76e10", "FCSh": "17.65 B", "GemsSc": "1.46e110", "GemsSh": "146.32 Qitg"},
				"35": {"RP": "630", "CoinSc": "1.56e238", "CoinSh": "15.59 Ocspg", "FCSc": "2.21e10", "FCSh": "22.11 B", "GemsSc": "1.77e113", "GemsSh": "176.56 Sxtg"},
				"36": {"RP": "666", "CoinSc": "3.40e244", "CoinSh": "34.04 Ocg", "FCSc": "2.75e10", "FCSh": "27.52 B", "GemsSc": "2.61e116", "GemsSh": "260.94 Sptg"},
				"37": {"RP": "703", "CoinSc": "1.12e251", "CoinSh": "111.54 Docg", "FCSc": "3.41e10", "FCSh": "34.06 B", "GemsSc": "4.72e119", "GemsSh": "472.31 Octg"},
				"38": {"RP": "741", "CoinSc": "5.48e257", "CoinSh": "548.14 Qaocg", "FCSc": "4.19e10", "FCSh": "41.92 B", "GemsSc": "1.05e123", "GemsSh": "1.05 Qag"},
				"39": {"RP": "780", "CoinSc": "4.04e264", "CoinSh": "4.04 Spocg", "FCSc": "5.13e10", "FCSh": "51.33 B", "GemsSc": "2.84e126", "GemsSh": "2.84 Uqag"},
				"40": {"RP": "820", "CoinSc": "1.23e46", "CoinSh": "12.28 Qad", "FCSc": "6.25e10", "FCSh": "62.53 B", "GemsSc": "1.57e17", "GemsSh": "156.69 Qa"},
				"41": {"RP": "861", "CoinSc": "3.72e48", "CoinSh": "3.72 Qid", "FCSc": "7.58e10", "FCSh": "75.82 B", "GemsSc": "2.73e18", "GemsSh": "2.73 Qi"},
				"42": {"RP": "903", "CoinSc": "1.32e51", "CoinSh": "1.32 Sxd", "FCSc": "9.15e10", "FCSh": "91.51 B", "GemsSc": "5.14e19", "GemsSh": "51.42 Qi"},
				"43": {"RP": "946", "CoinSc": "5.40e53", "CoinSh": "539.84 Sxd", "FCSc": "1.10e11", "FCSh": "109.98 B", "GemsSc": "1.04e21", "GemsSh": "1.04 Sx"},
				"44": {"RP": "990", "CoinSc": "2.53e56", "CoinSh": "253.39 Spd", "FCSc": "1.32e11", "FCSh": "131.63 B", "GemsSc": "2.25e22", "GemsSh": "22.51 Sx"},
				"45": {"RP": "1035", "CoinSc": "1.37e59", "CoinSh": "136.74 Ocd", "FCSc": "1.57e11", "FCSh": "156.92 B", "GemsSc": "5.23e23", "GemsSh": "522.96 Sx"},
				"46": {"RP": "1081", "CoinSc": "8.48e61", "CoinSh": "84.85 Nod", "FCSc": "1.86e11", "FCSh": "186.36 B", "GemsSc": "1.30e25", "GemsSh": "13.03 Sp"},
				"47": {"RP": "1128", "CoinSc": "6.05e64", "CoinSh": "60.53 Vg", "FCSc": "2.21e11", "FCSh": "220.54 B", "GemsSc": "3.48e26", "GemsSh": "347.94 Sp"},
				"48": {"RP": "1176", "CoinSc": "4.97e67", "CoinSh": "49.65 Uvg", "FCSc": "2.60e11", "FCSh": "260.06 B", "GemsSc": "9.97e27", "GemsSh": "9.97 Oc"},
				"49": {"RP": "1225", "CoinSc": "4.68e70", "CoinSh": "46.83 Dvg", "FCSc": "3.06e11", "FCSh": "305.67 B", "GemsSc": "3.06e29", "GemsSh": "306.05 Oc"},
				"50": {"RP": "1275", "CoinSc": "5.08e73", "CoinSh": "50.79 Tvg", "FCSc": "3.58e11", "FCSh": "358.11 B", "GemsSc": "1.01e31", "GemsSh": "10.08 No"},
				"51": {"RP": "1326", "CoinSc": "6.33e76", "CoinSh": "63.34 Qavg", "FCSc": "4.18e11", "FCSh": "418.28 B", "GemsSc": "3.56e32", "GemsSh": "355.93 No"},
				"52": {"RP": "1378", "CoinSc": "9.08e79", "CoinSh": "90.83 Qivg", "FCSc": "4.87e11", "FCSh": "487.10 B", "GemsSc": "1.35e34", "GemsSh": "13.48 Dc"},
				"53": {"RP": "1431", "CoinSc": "1.50e83", "CoinSh": "149.79 Sxvg", "FCSc": "5.66e11", "FCSh": "565.64 B", "GemsSc": "5.47e35", "GemsSh": "547.33 Dc"},
				"54": {"RP": "1485", "CoinSc": "2.84e86", "CoinSh": "284.03 Spvg", "FCSc": "6.55e11", "FCSh": "655.04 B", "GemsSc": "2.38e37", "GemsSh": "23.83 Ud"},
				"55": {"RP": "1540", "CoinSc": "6.19e89", "CoinSh": "619.33 Ocvg", "FCSc": "7.57e11", "FCSh": "756.57 B", "GemsSc": "1.11e39", "GemsSh": "1.11 Dd"},
				"56": {"RP": "1596", "CoinSc": "1.55e93", "CoinSh": "1.55 Tg", "FCSc": "8.72e11", "FCSh": "871.61 B", "GemsSc": "5.57e40", "GemsSh": "55.73 Dd"},
				"57": {"RP": "1653", "CoinSc": "4.48e96", "CoinSh": "4.48 Utg", "FCSc": "1.00e12", "FCSh": "1.00 T", "GemsSc": "2.99e42", "GemsSh": "2.99 Td"},
				"58": {"RP": "1711", "CoinSc": "1.48e100", "CoinSh": "14.85 Dtg", "FCSc": "1.15e12", "FCSh": "1.15 T", "GemsSc": "1.72e44", "GemsSh": "172.32 Td"},
				"59": {"RP": "1770", "CoinSc": "5.66e103", "CoinSh": "56.62 Ttg", "FCSc": "1.31e12", "FCSh": "1.31 T", "GemsSc": "1.06e46", "GemsSh": "10.64 Qad"},
				"60": {"RP": "1830", "CoinSc": "2.48e107", "CoinSh": "248.25 Qatg", "FCSc": "1.50e12", "FCSh": "1.50 T", "GemsSc": "7.05e47", "GemsSh": "704.63 Qad"},
				"61": {"RP": "1891", "CoinSc": "1.25e111", "CoinSh": "1.25 Sxtg", "FCSc": "1.71e12", "FCSh": "1.71 T", "GemsSc": "5.00e49", "GemsSh": "50.04 Qid"},
				"62": {"RP": "1953", "CoinSc": "7.26e114", "CoinSh": "7.26 Sptg", "FCSc": "1.94e12", "FCSh": "1.94 T", "GemsSc": "3.81e51", "GemsSh": "3.81 Sxd"},
				"63": {"RP": "2016", "CoinSc": "4.84e118", "CoinSh": "48.41 Octg", "FCSc": "2.20e12", "FCSh": "2.20 T", "GemsSc": "3.11e53", "GemsSh": "311.15 Sxd"},
				"64": {"RP": "2080", "CoinSc": "3.71e122", "CoinSh": "371.20 Notg", "FCSc": "2.49e12", "FCSh": "2.49 T", "GemsSc": "2.72e55", "GemsSh": "27.25 Spd"},
				"65": {"RP": "2145", "CoinSc": "3.27e126", "CoinSh": "3.27 Uqag", "FCSc": "2.82e12", "FCSh": "2.82 T", "GemsSc": "2.56e57", "GemsSh": "2.56 Ocd"},
				"66": {"RP": "2211", "CoinSc": "3.32e130", "CoinSh": "33.20 Dqag", "FCSc": "3.18e12", "FCSh": "3.18 T", "GemsSc": "2.58e59", "GemsSh": "257.67 Ocd"},
				"67": {"RP": "2278", "CoinSc": "3.87e134", "CoinSh": "387.17 Tqag", "FCSc": "3.57e12", "FCSh": "3.57 T", "GemsSc": "2.78e61", "GemsSh": "27.83 Nod"},
				"68": {"RP": "2346", "CoinSc": "5.19e138", "CoinSh": "5.19 Qiqag", "FCSc": "4.02e12", "FCSh": "4.02 T", "GemsSc": "3.22e63", "GemsSh": "3.22 Vg"},
				"69": {"RP": "2415", "CoinSc": "8.01e142", "CoinSh": "80.09 Sxqag", "FCSc": "4.51e12", "FCSh": "4.51 T", "GemsSc": "4.00e65", "GemsSh": "400.21 Vg"},
				"70": {"RP": "2485", "CoinSc": "1.42e147", "CoinSh": "1.42 Ocqag", "FCSc": "5.05e12", "FCSh": "5.05 T", "GemsSc": "5.33e67", "GemsSh": "53.30 Uvg"},
				"71": {"RP": "2556", "CoinSc": "2.90e151", "CoinSh": "28.97 Noqag", "FCSc": "5.65e12", "FCSh": "5.65 T", "GemsSc": "7.61e69", "GemsSh": "7.61 Dvg"},
				"72": {"RP": "2628", "CoinSc": "6.80e155", "CoinSh": "679.60 Qig", "FCSc": "6.31e12", "FCSh": "6.31 T", "GemsSc": "1.17e72", "GemsSh": "1.17 Tvg"},
				"73": {"RP": "2701", "CoinSc": "1.83e160", "CoinSh": "18.33 Dqig", "FCSc": "7.03e12", "FCSh": "7.03 T", "GemsSc": "1.91e74", "GemsSh": "191.48 Tvg"},
				"74": {"RP": "2775", "CoinSc": "5.69e164", "CoinSh": "568.68 Tqig", "FCSc": "7.83e12", "FCSh": "7.83 T", "GemsSc": "3.37e76", "GemsSh": "33.72 Qavg"},
				"75": {"RP": "2850", "CoinSc": "2.03e169", "CoinSh": "20.29 Qiqig", "FCSc": "8.70e12", "FCSh": "8.70 T", "GemsSc": "6.37e78", "GemsSh": "6.37 Qivg"},
				"76": {"RP": "2926", "CoinSc": "8.32e173", "CoinSh": "832.26 Sxqig", "FCSc": "9.66e12", "FCSh": "9.66 T", "GemsSc": "1.29e81", "GemsSh": "1.29 Sxvg"},
				"77": {"RP": "3003", "CoinSc": "3.93e178", "CoinSh": "39.26 Ocqig", "FCSc": "1.07e13", "FCSh": "10.71 T", "GemsSc": "2.80e83", "GemsSh": "280.23 Sxvg"},
				"78": {"RP": "3081", "CoinSc": "2.13e183", "CoinSh": "2.13 Sxg", "FCSc": "1.19e13", "FCSh": "11.86 T", "GemsSc": "6.53e85", "GemsSh": "65.27 Spvg"},
				"79": {"RP": "3160", "CoinSc": "1.33e188", "CoinSh": "132.92 Usxg", "FCSc": "1.31e13", "FCSh": "13.12 T", "GemsSc": "1.63e88", "GemsSh": "16.30 Ocvg"},
				"80": {"RP": "3240", "CoinSc": "9.54e192", "CoinSh": "9.54 Tsxg", "FCSc": "1.45e13", "FCSh": "14.49 T", "GemsSc": "4.37e90", "GemsSh": "4.37 Novg"},
				"81": {"RP": "3321", "CoinSc": "7.87e197", "CoinSh": "786.93 Qasxg", "FCSc": "1.60e13", "FCSh": "15.98 T", "GemsSc": "1.25e93", "GemsSh": "1.25 Tg"},
				"82": {"RP": "3403", "CoinSc": "7.47e202", "CoinSh": "74.67 Sxsxg", "FCSc": "1.76e13", "FCSh": "17.61 T", "GemsSc": "3.86e95", "GemsSh": "386.45 Tg"},
				"83": {"RP": "3486", "CoinSc": "8.15e207", "CoinSh": "8.15 Ocsxg", "FCSc": "1.94e13", "FCSh": "19.38 T", "GemsSc": "1.28e98", "GemsSh": "127.66 Utg"},
				"84": {"RP": "3570", "CoinSc": "1.02e213", "CoinSh": "1.02 Spg", "FCSc": "2.13e13", "FCSh": "21.30 T", "GemsSc": "4.52e100", "GemsSh": "45.22 Dtg"},
				"85": {"RP": "3655", "CoinSc": "1.48e218", "CoinSh": "147.58 Uspg", "FCSc": "2.34e13", "FCSh": "23.39 T", "GemsSc": "1.72e103", "GemsSh": "17.18 Ttg"},
				"86": {"RP": "3741", "CoinSc": "2.45e223", "CoinSh": "24.49 Tspg", "FCSc": "2.57e13", "FCSh": "25.66 T", "GemsSc": "7.00e105", "GemsSh": "7.00 Qatg"},
				"87": {"RP": "3828", "CoinSc": "4.67e228", "CoinSh": "4.67 Qispg", "FCSc": "2.81e13", "FCSh": "28.11 T", "GemsSc": "3.06e108", "GemsSh": "3.06 Qitg"},
				"88": {"RP": "3916", "CoinSc": "1.03e234", "CoinSh": "1.03 Spspg", "FCSc": "3.08e13", "FCSh": "30.77 T", "GemsSc": "1.43e111", "GemsSh": "1.43 Sxtg"},
				"89": {"RP": "4005", "CoinSc": "2.59e239", "CoinSh": "258.99 Ocspg", "FCSc": "3.36e13", "FCSh": "33.65 T", "GemsSc": "7.20e113", "GemsSh": "719.71 Sxtg"},
				"90": {"RP": "4095", "CoinSc": "7.52e244", "CoinSh": "75.18 Ocg", "FCSc": "3.68e13", "FCSh": "36.76 T", "GemsSc": "3.88e116", "GemsSh": "387.76 Sptg"},
				"91": {"RP": "4186", "CoinSc": "2.51e250", "CoinSh": "25.10 Docg", "FCSc": "4.01e13", "FCSh": "40.11 T", "GemsSc": "2.24e119", "GemsSh": "224.03 Octg"},
				"92": {"RP": "4278", "CoinSc": "9.63e255", "CoinSh": "9.63 Qaocg", "FCSc": "4.37e13", "FCSh": "43.74 T", "GemsSc": "1.39e122", "GemsSh": "138.81 Notg"},
				"93": {"RP": "4371", "CoinSc": "4.25e261", "CoinSh": "4.25 Sxocg", "FCSc": "4.76e13", "FCSh": "47.64 T", "GemsSc": "9.22e124", "GemsSh": "92.23 Qag"},
				"94": {"RP": "4465", "CoinSc": "2.16e267", "CoinSh": "2.16 Ococg", "FCSc": "5.19e13", "FCSh": "51.85 T", "GemsSc": "6.57e127", "GemsSh": "65.71 Uqag"},
				"95": {"RP": "4560", "CoinSc": "1.26e273", "CoinSh": "1.26 Nog", "FCSc": "5.64e13", "FCSh": "56.38 T", "GemsSc": "5.02e130", "GemsSh": "50.21 Dqag"},
				"96": {"RP": "4656", "CoinSc": "8.46e278", "CoinSh": "846.41 Unog", "FCSc": "6.13e13", "FCSh": "61.26 T", "GemsSc": "4.11e133", "GemsSh": "41.14 Tqag"},
				"97": {"RP": "4753", "CoinSc": "6.54e284", "CoinSh": "653.54 Tnog", "FCSc": "6.65e13", "FCSh": "66.49 T", "GemsSc": "3.62e136", "GemsSh": "36.15 Qaqag"},
				"98": {"RP": "4851", "CoinSc": "5.80e290", "CoinSh": "580.31 Qinog", "FCSc": "7.21e13", "FCSh": "72.12 T", "GemsSc": "3.41e139", "GemsSh": "34.07 Qiqag"},
				"99": {"RP": "4950", "CoinSc": "5.93e296", "CoinSh": "592.58 Spnog", "FCSc": "7.82e13", "FCSh": "78.16 T", "GemsSc": "3.44e142", "GemsSh": "34.43 Sxqag"},
				"100": {"RP": "5000", "CoinSc": "N/A", "CoinSh": "", "FCSc": "8.46e13", "FCSh": "84.63 T", "GemsSc": "N/A", "GemsSh": ""},
				"175": {"RP": "5125", "CoinSc": "1.091e129", "CoinSh": "1.091 Dqag", "FCSc": "1.253e38", "FCSh": "125.3 Ud", "GemsSc": "4.671e58", "GemsSh": "46.71 Ocd"},
				"176": {"RP": "5250", "CoinSc": "1.191e132", "CoinSh": "1.191 Tqag", "FCSc": "1.594e38", "FCSh": "159.4 Ud", "GemsSc": "1.543e60", "GemsSh": "1.543 Nod"},
				"177": {"RP": "5375", "CoinSc": "1.3e135", "CoinSh": "1.3 Qaqag", "FCSc": "2.016e38", "FCSh": "201.6 Ud", "GemsSc": "5.099e61", "GemsSh": "50.99 Nod"},
				"178": {"RP": "5500", "CoinSc": "1.419e138", "CoinSh": "1.419 Qiqag", "FCSc": "2.538e38", "FCSh": "253.8 Ud", "GemsSc": "1.685e63", "GemsSh": "1.685 Vg"},
				"179": {"RP": "5625", "CoinSc": "1.548e141", "CoinSh": "1.548 Sxqag", "FCSc": "3.177e38", "FCSh": "317.7 Ud", "GemsSc": "5.564e64", "GemsSh": "55.64 Vg"},
				"180": {"RP": "5750", "CoinSc": "1.69e144", "CoinSh": "1.69 Spqag", "FCSc": "3.958e38", "FCSh": "395.8 Ud", "GemsSc": "1.838e66", "GemsSh": "1.838 Uvg"},
				"181": {"RP": "5875", "CoinSc": "1.844e147", "CoinSh": "1.844 Ocqag", "FCSc": "4.907e38", "FCSh": "490.7 Ud", "GemsSc": "6.073e67", "GemsSh": "60.73 Uvg"},
				"182": {"RP": "6000", "CoinSc": "2.013e150", "CoinSh": "2.013 Noqag", "FCSc": "6.057e38", "FCSh": "605.7 Ud", "GemsSc": "2.006e69", "GemsSh": "2.006 Dvg"},
				"183": {"RP": "6125", "CoinSc": "2.197e153", "CoinSh": "2.197 Qig", "FCSc": "7.443e38", "FCSh": "744.3 Ud", "GemsSc": "6.629e70", "GemsSh": "66.29 Dvg"},
				"184": {"RP": "6250", "CoinSc": "2.397e156", "CoinSh": "2.397 Uqig", "FCSc": "9.11e38", "FCSh": "911 Ud", "GemsSc": "2.19e72", "GemsSh": "2.19 Tvg"},
				"185": {"RP": "6375", "CoinSc": "2.617e159", "CoinSh": "2.617 Dqig", "FCSc": "1.11e39", "FCSh": "1.11 Dd", "GemsSc": "7.235e73", "GemsSh": "72.35 Tvg"},
				"186": {"RP": "6500", "CoinSc": "2.856e162", "CoinSh": "2.856 Tqig", "FCSc": "1.348e39", "FCSh": "1.348 Dd", "GemsSc": "2.39e75", "GemsSh": "2.39 Qavg"},
				"187": {"RP": "6625", "CoinSc": "3.117e165", "CoinSh": "3.117 Qaqig", "FCSc": "1.631e39", "FCSh": "1.631 Dd", "GemsSc": "7.896e76", "GemsSh": "78.96 Qavg"},
				"188": {"RP": "6750", "CoinSc": "3.401e168", "CoinSh": "3.401 Qiqig", "FCSc": "1.966e39", "FCSh": "1.966 Dd", "GemsSc": "2.608e78", "GemsSh": "2.608 Qivg"},
				"189": {"RP": "6875", "CoinSc": "3.712e171", "CoinSh": "3.712 Sxqig", "FCSc": "2.362e39", "FCSh": "2.362 Dd", "GemsSc": "8.616e79", "GemsSh": "86.16 Qivg"},
				"190": {"RP": "7000", "CoinSc": "4.051e174", "CoinSh": "4.051 Spqig", "FCSc": "2.829e39", "FCSh": "2.829 Dd", "GemsSc": "2.846e81", "GemsSh": "2.846 Sxvg"},
				"220": {"RP": "10750", "CoinSc": "6.281e54", "CoinSh": "6.281 Spd", "FCSc": "3.759e20", "FCSh": "375.9 Qi", "GemsSc": "1.120e14", "GemsSh": "112 T"},
				"221": {"RP": "10875", "CoinSc": "4.213e56", "CoinSh": "421.3 Spd", "FCSc": "6.348e20", "FCSh": "634.8 Qi", "GemsSc": "9.179e14", "GemsSh": "917.9 T"},
				"222": {"RP": "11000", "CoinSc": "2.826e58", "CoinSh": "28.26 Ocd", "FCSc": "1.072e21", "FCSh": "1.072 Sx", "GemsSc": "7.518e15", "GemsSh": "7.518 Qa"},
				"223": {"RP": "11125", "CoinSc": "1.896e60", "CoinSh": "1.896 Nod", "FCSc": "1.811e21", "FCSh": "1.811 Sx", "GemsSc": "6.158e16", "GemsSh": "61.58 Qa"},
				"224": {"RP": "11250", "CoinSc": "1.272e62", "CoinSh": "127.2 Nod", "FCSc": "3.059e21", "FCSh": "3.059 Sx", "GemsSc": "5.044e17", "GemsSh": "504.4 Qa"},
				"225": {"RP": "11375", "CoinSc": "8.531e63", "CoinSh": "8.531 Vg", "FCSc": "5.166e21", "FCSh": "5.166 Sx", "GemsSc": "4.131e18", "GemsSh": "4.131 Qi"},
				"226": {"RP": "11500", "CoinSc": "5.723e65", "CoinSh": "572.3 Vg", "FCSc": "8.725e21", "FCSh": "8.725 Sx", "GemsSc": "3.383e19", "GemsSh": "33.83 Qi"},
				"227": {"RP": "11625", "CoinSc": "3.839e67", "CoinSh": "38.39 Vg", "FCSc": "1.474e22", "FCSh": "14.74 Sx", "GemsSc": "2.771e20", "GemsSh": "277.1 Qi"},
				"228": {"RP": "11750", "CoinSc": "2.575e69", "CoinSh": "2.575 Dvg", "FCSc": "2.489e22", "FCSh": "24.89 Sx", "GemsSc": "2.269e21", "GemsSh": "2.269 Sx"},
				"229": {"RP": "11875", "CoinSc": "1.727e71", "CoinSh": "172.7 Dvg", "FCSc": "4.203e22", "FCSh": "42.03 Sx", "GemsSc": "1.858e22", "GemsSh": "18.58 Sx"},
				"230": {"RP": "12000", "CoinSc": "1.159e73", "CoinSh": "11.59 Tvg", "FCSc": "7.099e22", "FCSh": "70.99 Sx", "GemsSc": "1.522e23", "GemsSh": "152.2 Sx"},
				"231": {"RP": "12125", "CoinSc": "7.774e74", "CoinSh": "777.4 Tvg", "FCSc": "1.199e23", "FCSh": "119.9 Sx", "GemsSc": "1.247e24", "GemsSh": "1.247 Sp"},
				"232": {"RP": "12250", "CoinSc": "5.215e76", "CoinSh": "52.15 Qavg", "FCSc": "2.025e23", "FCSh": "202.5 Sx", "GemsSc": "1.021e25", "GemsSh": "10.21 Sp"},
				"233": {"RP": "12375", "CoinSc": "3.498e78", "CoinSh": "3.498 Qivg", "FCSc": "3.420e23", "FCSh": "342.0 Sx", "GemsSc": "8.364e25", "GemsSh": "83.64 Sp"},
				"234": {"RP": "12500", "CoinSc": "2.346e80", "CoinSh": "234.6 Qivg", "FCSc": "5.777e23", "FCSh": "577.7 Sx", "GemsSc": "6.851e26", "GemsSh": "685.1 Sp"},
				"235": {"RP": "12625", "CoinSc": "1.574e82", "CoinSh": "15.74 Sxvg", "FCSc": "9.757e23", "FCSh": "975.7 Sx", "GemsSc": "5.611e27", "GemsSh": "5.611 Oc"},
				"236": {"RP": "12750", "CoinSc": "1.056e84", "CoinSh": "1.056 Spvg", "FCSc": "1.648e24", "FCSh": "1.648 Sp", "GemsSc": "4.595e28", "GemsSh": "45.95 Oc"},
				"237": {"RP": "12875", "CoinSc": "7.083e85", "CoinSh": "70.83 Spvg", "FCSc": "2.783e24", "FCSh": "2.783 Sp", "GemsSc": "3.764e29", "GemsSh": "376.4 Oc"},
				"238": {"RP": "13000", "CoinSc": "4.751e87", "CoinSh": "4.751 Ocvg", "FCSc": "4.701e24", "FCSh": "4.701 Sp", "GemsSc": "3.083e30", "GemsSh": "3.083 No"},
				"239": {"RP": "13125", "CoinSc": "3.187e89", "CoinSh": "318.7 Ocvg", "FCSc": "7.939e24", "FCSh": "7.939 Sp", "GemsSc": "2.525e31", "GemsSh": "25.25 No"},
				"240": {"RP": "13250", "CoinSc": "2.138e91", "CoinSh": "21.38 Novg", "FCSc": "1.341e25", "FCSh": "13.41 Sp", "GemsSc": "2.068e32", "GemsSh": "206.8 No"},
				"241": {"RP": "13375", "CoinSc": "1.434e93", "CoinSh": "1.434 Tg", "FCSc": "2.265e25", "FCSh": "22.65 Sp", "GemsSc": "1.694e33", "GemsSh": "1.694 Dc"},
				"242": {"RP": "13500", "CoinSc": "9.621e94", "CoinSh": "96.21 Tg", "FCSc": "3.825e25", "FCSh": "38.25 Sp", "GemsSc": "1.387e34", "GemsSh": "13.87 Dc"},
				"243": {"RP": "13625", "CoinSc": "6.454e96", "CoinSh": "6.454 Utg", "FCSc": "6.460e25", "FCSh": "64.60 Sp", "GemsSc": "1.136e35", "GemsSh": "113.6 Dc"},
				"244": {"RP": "13750", "CoinSc": "4.329e98", "CoinSh": "432.9 Utg", "FCSc": "1.091e26", "FCSh": "109.1 Sp", "GemsSc": "9.305e35", "GemsSh": "930.5 Dc"},
				"245": {"RP": "13875", "CoinSc": "2.904e100", "CoinSh": "29.04 Dtg", "FCSc": "1.843e26", "FCSh": "184.3 Sp", "GemsSc": "7.621e36", "GemsSh": "7.621 Ud"},
				"246": {"RP": "14000 (Maxed)", "CoinSc": "1.948e102", "CoinSh": "1.948 Ttg", "FCSc": "3.112e26", "FCSh": "311.2 Sp", "GemsSc": "6.242e37", "GemsSh": "62.42 Ud"}
			};
			function CalcCost() {
				var reinc = parseInt($('#reinc').val());
				// Rather than duplicating 75 lines..
				if (reinc < 175 && reinc > 100) {
					reinc = 100;
				}
				if (reinc > 190 && reinc < 220) {
					reinc = 190
				}
				$('#rp').text(rtorp[reinc].RP);
				$('#Coins').text(rtorp[reinc].CoinSh + " (" + rtorp[reinc].CoinSc + ")");
				$('#Gems').text(rtorp[reinc].GemsSh + " (" + rtorp[reinc].GemsSc + ")");
				$('#FC').text(rtorp[reinc].FCSh + " (" + rtorp[reinc].FCSc + ")");
			}
			CalcCost();
			//$('div#calrps').find('table, th, td').css({"border": "1px solid black", "border-collapse": "collapse", "padding": "1px 3px"});
			$('#reinc').on('input', CalcCost);
		</script>
	</div>
	<br/>
	<p><b>For R100-R174: research points are capped at 5000.</b></p>
	<p><b>For R190-219: research points are capped at 7000.</b></p>
	<p><b>For R246+: research points are capped at 14000.</b></p>
	<p>Information about how Research Slots / Budget work can be found at <b><a href = "/realm/Research">Research</a></b>.</p>
	<p><b>All Researches in Text Version</b>: <b><a href="http://musicfamily.org/realm/ResearchList">Research List</a></b>.<p>
	<hr>
	<p><img src="/realm/Factions/picks/ResearchTreeA4.png" usemap="#ResearchTreeA4-map" class="centerimg">
<map name="ResearchTreeA4-map">
		<area research="<p><center>Spellcraft Research Facility</center></p>
	<p>Delve into the arcane mysteries of Spellcraft, discovering new ways to produce and use mana.</p>
	<p>Increases: Fairy, Faceless, and Drow production.</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,3,83,82" shape="rect">
		<area research="<p><center>Craftsmanship Research Facility</center></p>
	<p>Learn how to use tools and experience to improve your production by mastering Craftsmanship.</p>
	<p>Increases Elven, Titan, and Dwarven production.</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,213,83,292" shape="rect">
		<area research="<p><center>Divine Research Facility</center></p>
	<p>Harness the power of the eternals, increasing your spell affinity and bestowing Divine power on all your productivity.</p>
	<p>Increases Angel, Faceless, and Dwarven production.</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,423,83,503" shape="rect">
		<area research="<p><center>Economics Research Facility</center></p>
	<p>Exploit your resources with Economics knowledge, taking maximum advantage of your properties and turning time into money.</p>
	<p>Increases Goblin, Druid, and Dwarven production.</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,633,83,712" shape="rect">
		<area research="<p><center>Alchemy Research Facility</center></p>
	<p>Tap the near-unlimited sources of Alchemy to improve your production and benefit from all your assets.</p>
	<p>Increases Undead, Druid, and Drow production.</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,843,83,922" shape="rect">
		<area research="<p><center>Warfare Research Facility</center></p>
	<p>Use strategical prowess and manpower to manipulate the production system in your favor.</p>
	<p>Increases: Demon, Titan, and Drow production.</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,1053,83,1132" shape="rect">
		<area research="<p><center>Forbidden Research Facility</center></p>
	<p>Take advantage of the most ancient and secret arts to empower your production beyond known limits.</p>
	<p>Increases: Mercenary production</p>
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.</p>
	" coords="4,1263,83,1342" shape="rect">
		<area research="<p><b>S1</b> - For Fairy</p>
	<p><b>Research Name</b>: Enchanting</p>
	<p><b>Cost</b>: 750 Qag (7.5e125)</p>
	<p><b>Effect</b>: Increase the production of Enchanted Fields based on mana produced.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.75)%, where x is your Mana Produced (This Game) stat.</p>
	" coords="86,2,126,42" shape="rect">
		<area research="<p><b>S10</b> - For Angel</p>
	<p><b>Research Name</b>: Channeling</p>
	<p><b>Hint</b>: Open the Gates of Heaven.</p>
	<p><b>Requirement</b>: 2,000 Heaven's Gate. (This Game)</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 110% per Heaven's Domain you own.</p>
	" coords="128,2,168,42" shape="rect">
		<area research="<p><b>S30</b> - For All Factions</p>
	<p><b>Research Name</b>: Vacuumancy</p>
	<p><b>Requirement</b>: Have 4,000 Mana. (This Game)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588e130)</p>
	<p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration rate based on time spent in this game.</p>
	<p><b>Maximum Mana Formula</b>: +(0.1 * x), where x is time spent in this game in seconds.</p>
	<p><b>Mana Regeneration Formula</b>: +(0.5 * x ^ 0.5), where x is time spent in this game in seconds.</p>
	" coords="170,2,210,42" shape="rect">
		<area research="<p><b>S50</b> - For Goblin</p>
	<p><b>Research Name</b>: Conjuration</p>
	<p><b>Hint</b>: Under a large blue pool...</p>
	<p><b>Requirement</b>: Have 6,000 mana (as Fairy) (This Game)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
	<p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.</p>
	<p><b>Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.</p>
	" coords="212,2,252,42" shape="rect">
		<area research="<p><b>S105</b> - For All Factions</p>
	<p><b>Research Name</b>: Mysticism</p>
	<p><b>Hint</b>: I am a Research among Researches.</p>
	<p><b>Requirement</b>: 600 Researches (Total)</p>
	<p><b>Cost</b>: 1.544 Spqag (1.544e144)</p>
	<p><b>Effect</b>: Increase Mana Regeneration based on the amount of research made.</p>
	<p><b>Formula</b>: +floor(x ^ 0.5), where x is the amount of researches made.</p>
	" coords="254,2,294,42" shape="rect">
		<area research="<p><b>S135</b> - For All Factions</p>
	<p><b>Research Name</b>: Augmentation</p>
	<p><b>Hint</b>: More Unique buildings will do the trick!</p>
	<p><b>Requirement</b>: 4000 Unique Buildings (as Fairy) (This Game)</p>
	<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on Maximum mana.</p>
	<p><b>Formula</b>: round(2 * x^0.8)%, where x is your Maximum mana.</p>
	" coords="296,2,336,42" shape="rect">
		<area research="<p><b>S150</b> - For All Factions</p>
	<p><b>Research Name</b>: Pyromancy</p>
	<p><b>Requirement</b>: Research Inflame (D10) & Fusion (A105)</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
	<p><b>Effect</b>: Increase the production of the two highest building tiers based on your Mana Regeneration.</p>
	<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Mana Regeneration.</p>
	" coords="338,2,378,42" shape="rect">
		<area research="<p><b>S175</b> - For Elf</p>
	<p><b>Research Name</b>: Empowered Luck</p>
	<p><b>Requirement</b>: Research Blessing (D1) & Augmentation (S135)</p>
	<p><b>Cost</b>: 3.273 UQig (3.273e156)</p>
	<p><b>Effect</b>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.</p>
	" coords="380,2,420,42" shape="rect">
		<area research="<p><b>S180</b> - For Fairy</p>
	<p><b>Research Name</b>: Incantation</p>
	<p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)</p>
	<p><b>Cost</b>: 3.273 UQig (3.273e156)</p>
	<p><b>Effect</b>: Increase Mana Regeneration based on the number of assistants you own.</p>
	<p><b>Formula</b>: +(floor(16 * x ^ 0.6) / 10), where x is the number of assistants you own.</p>
	" coords="86,44,126,84" shape="rect">
		<area research="<p><b>S200</b> - For All Factions</p>
	<p><b>Research Name</b>: Cryomancy</p>
	<p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)</p>
	<p><b>Cost</b>: 82.65 DQig (8.265e160)</p>
	<p><b>Effect</b>: Increase Spell Duration based on mana produced in this game.</p>
	<p><b>Formula</b>: (5 * ln(1 + x) ^ 1.5)%, where x is mana produced this game.</p>
	" coords="128,44,168,84" shape="rect">
		<area research="<p><b>S215</b> - For All Factions</p>
	<p><b>Research Name</b>: Projection</p>
  	<p><b>Hint</b>: How many of these are required for a seance?</p>
	<p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) & Incantation (S180)</p>
	<p><b>Cost</b>: 36.16 TQig (3.616e163)</p>
	<p><b>Effect</b>: While Spiritual Surge is active, increase the production of all buildings based on the amount of active spells.</p>
	<p><b>Formula</b>: (100 * (10 * x) ^ y)%, where x is active spells and y is Spiritual Surge tier.</p>
	" coords="170,44,210,84" shape="rect">
		<area research="<p><b>S225</b> - For Undead</p>
	<p><b>Research Name</b>: Necromancy</p>
	<p><b>Requirement</b>: Research Resurrection (D175) & Cryomancy (S200)</p>
	<p><b>Cost</b>: 2.087 QaQig (2.087e165)</p>
	<p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.</p>
	<p><b>Formula</b>: (round(5 * x ^ 0.75))%, where x is the number of Necropolises you own.</p>
	" coords="212,44,252,84" shape="rect">
		<area research="<p><b>S250</b> - For All Factions</p>
	<p><b>Research Name</b>: Aeromancy</p>
	<p><b>Requirement</b>: Research Weather Control (D225) & Explosives (A150)</p>
	<p><b>Cost</b>: 52 QiQig (5.27e169)</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on mana produced in this game.</p>
	<p><b>Formula</b>: (round(0.5 * x ^ 0.58))%, where x mana produced this game.</p>
	" coords="254,44,294,84" shape="rect">
		<area research="<p><b>S251</b> - For Faceless</p>
	<p><b>Research Name</b>: Assimilation</p>
	<p><b>Requirement</b>: Secrets of the Ancients (as Faceless)</p>
	<p><b>Cost</b>: 79.05 QiQig (7.905e169)</p>
	<p><b>Effect</b>: Increase the production of Sunken Cities based on time spent affiliated with factions different than the Faceless.</p>
	<p><b>Formula</b>: (round(0.3 * x ^ 0.7))%, where x is time spent as non-Faceless factions in this Reincarnation.</p>
	" coords="296,44,336,84" shape="rect">
		<area research="<p><b>S270</b> - For All Factions</p>
	<p><b>Research Name</b>: Runecarving</p>
	<p><b>Hint</b>: Click your way through.</p>
	<p><b>Requirement</b>: 500,000 clicks (This game)</p>
	<p><b>Cost</b>: 175.2 SxQig (1.752e173)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Gems you own.</p>
	<p><b>Formula</b>: (1.25 * log10(1 + x) ^ 1.25)%, where x is the amount of Gems you own.</p>
	" coords="338,44,378,84" shape="rect">
		<area research="<p><b>S300</b> - For Titan</p>
	<p><b>Research Name</b>: Chain Lightning</p>
	<p><b>Hint</b>: I can feel the waves...</p>
	<p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)</p>
	<p><b>Cost</b>: 33 OcQig (3.36e178)</p>
	<p><b>Effect</b>: Lightning Strike duration will not be modified by other effects. While Lightning Strike is active, all non-target buildings have their production increased based on Lightning Strike activity time in this game.</p>
	<p><b>Formula</b>: (250 * (x / 20) ^ 0.9)%, where x is your Lightning Strike activity time (This Game) stat.</p>
	" coords="380,44,420,84" shape="rect">
		<area research="<p><b>S305</b> - For All Factions</p>
	<p><b>Research Name</b>: Mesmerization</p>
  	<p><b>Hint</b>: Face not required for a long time.</p>
	<p><b>Requirement</b>: 2 days as Faceless (across all Reincarnations)</p>
	<p><b>Cost</b>: 225.2 OcQig (2.252e179)</p>
	<p><b>Effect</b>: Increase the production of all buildings by a fraction of your Offline Production Bonus.</p>
	<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is your (pre-Ascension) offline production bonus as a multiplier.</p>
	<p><b>Note</b>: This research is treated as an A1 upgrade for A-nerf purposes.</p>
	" coords="2,86,42,126" shape="rect">
		<area research="<p><b>S330</b> - For All Factions</p>
	<p><b>Research Name</b>: Reverberation</p>
	<p><b>Requirement</b>: Research Cryomancy (S200) & Weather Control (D225)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.</p>
	<p><b>Formula</b>: (3000 * 2 ^ (x - 3))%, where x is the number of currently active spells (capped at 300 spells).</p>
	" coords="44,86,84,126" shape="rect">
		<area research="<p><b>S375</b> - For Faceless</p>
	<p><b>Research Name</b>: Illusion</p>
	<p><b>Requirement</b>: Research Reverberation (S330) & Mesmerization (S305)</p>
	<p><b>Cost</b>: 541 DSxg (5.41e191)</p>
	<p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.</p>
	<p><b>Formula</b>: +(floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes</p>
	<p><b>Note</b>: Those assistants do not count as base assistants and are not multiplied by upgrades that increase assistants count (such as FC3).</p>
	" coords="86,86,126,126" shape="rect">
		<area research="<p><b>S400</b> - For All Factions</p>
	<p><b>Research Name</b>: Capacity</p>
	<p><b>Requirement</b>: Research Projection (S215) & Domination (W275)</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
	<p><b>Effect</b>: Increase Maximum Mana based on the highest amount of spells cast in a single game.</p>
	<p><b>Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat in this Reincarnation.</p>
	" coords="128,86,168,126" shape="rect">
		<area research="<p><b>S435</b> - For Drow</p>
	<p><b>Research Name</b>: Spellbinding</p>
	<p><b>Hint</b>: Combo Breaker!</p>
	<p><b>Requirement</b>: 14,400s (4 hour) Combo Strike Cast Time (This Game)</p>
	<p><b>Cost</b>: 19.89 SxSxg (1.989e202)</p>
	<p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.</p>
	" coords="170,86,210,126" shape="rect">
		<area research="<p><b>S460</b> - For All Factions</p>
	<p><b>Research Name</b>: Focus</p>
	<p><b>Hint</b>: Cast! Cast more!</p>
	<p><b>Requirement</b>: 25000 spells cast (This game)</p>
	<p><b>Cost</b>: 5.023 SpSxg (5.023e206)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the times you cast your faction spell in this game.</p>
	<p><b>Formula</b>: (15 * x ^ 0.8)%, where x is the sum of Faction Spells Cast in this game.</p>
	" coords="212,86,252,126" shape="rect">
		<area research="<p><b>S500</b> - For All Factions</p>
	<p><b>Research Name</b>: Heirlooms</p>
	<p><b>Hint</b>: I wonder when will I have enough for my collection?</p>
	<p><b>Requirement</b>: 40 Artifacts (as Drow)</p>
	<p><b>Cost</b>: 5.554 Spg (5.554e213)</p>
	<p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.</p>
	<p><b>Maximum Mana Formula</b>: +(75 * x ^ 1.1), where x is the amount of artifacts you own.</p>
	<p><b>Mana Regeneration Formula</b>: +(5 * x ^ 1.05), where x is the amount of artifacts you own.</p>
	" coords="254,86,294,126" shape="rect">
		<area research="<p><b>S545</b> - For All Factions</p>
	<p><b>Research Name</b>: Hierarchy</p>
	<p><b>Hint</b>: I thirst for mana.</p>
	<p><b>Requirement</b>: 10 M (1e7) mana produced (This Game)</p>
	<p><b>Cost</b>: 466.3 DSpq (4.663e221)</p>
	<p><b>Effect</b>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.</p>
	<p><b>Formula</b>: (0.1 * x ^ 0.45 * (12 - T) ^ 2)%, where x is mana produced in this game and T is building tier.</p>
	" coords="296,86,336,126" shape="rect">
		<area research="<p><b>S590</b> - For Fairy,Dwarf</p>
	<p><b>Research Name</b>: Trickery</p>
	<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwairy) (This Game), Research Mysticism(S105) & Illusion (S375)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
	<p><b>Effect</b>: Increase the production of Neutral buildings based on Maximum Mana.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.95)%, where x is your Maximum Mana.</p>
	" coords="338,86,378,126" shape="rect">
		<area research="<p><b>S1275</b> - For All Factions</p>
	<p><b>Research Name</b>: Sequence</p>
	<p><b>Hint</b>: Cast and cast and cast and cast!</p>
	<p><b>Requirement</b>: 60,000 spells cast (This Game).</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Reduce spell cost for higher spell tiers.</p>
	<p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
	" coords="380,86,420,126" shape="rect">
		<area research="<p><b>S1450</b> - For Neutral,Dragon</p>
	<p><b>Research Name</b>: Spellstorm</p>
	<p><b>Requirement</b>: Research S435, C1325, Any Neutral, Dragon</p>
	<p><b>Cost</b>: 4.041 Sxvg (4.041e81)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of active spells.</p>
	<p><b>Formula</b>: (50 * x ^ 1.5)%, where x is number of active spells, counting tiers.</p>
	" coords="2,128,42,168" shape="rect">
		<area research="<p><b>S1500</b> - For Faceless,Dragon</p>
	<p><b>Research Name</b>: Psionics</p>
	<p><b>Hint</b>: I require assistance.</p>
	<p><b>Requirement</b>: 1,000 Base Assistants, Research S545, E1325, as Faceless, Dragon</p>
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (8.5 * x ^ 0.85)%, where x is the amount of assistants you own.</p>
	" coords="44,128,84,168" shape="rect">
		<area research="<p><b>S2875</b> - For Mercenary</p>
	<p><b>Research Name</b>: Scholarship</p>
	<p><b>Hint</b>: More buildings for the Black Army!</p>
	<p><b>Requirement</b>: 11,000 Merc Unique Buildings.</p>
	<p><b>Cost</b>: 30.5 QaQig (3.05e166)</p>
	<p><b>Effect</b>: Increases the production of Non-Unique buildings by 5% per Unique building.</p>
	" coords="86,128,126,168" shape="rect">
		<area research="<p><b>S3200</b> - For All Factions</p>
	<p><b>Research Name</b>: Manipulation</p>
	<p><b>Hint</b>: First spell, many served.</p>
	<p><b>Requirement</b>: 1 B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).</p>
	<p><b>Cost</b>: 695.7 Sxg (6.957e185)</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration by 8% per active spells (counting tiers).</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 1200%.</p>
	" coords="128,128,168,168" shape="rect">
		<area research="<p><b>S5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Spilling</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Mana Loom artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced in this game.</p>
	<p><b>Formula</b>: (1.75 * ln(1 + x) ^ 1.75)%, where x is mana produced this game.</p>
	" coords="170,128,210,168" shape="rect">
		<area research="<p><b>S5375</b> - For Chaos</p>
	<p><b>Research Name</b>: Invocation</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Mana Loom artifact and upgrade.</p>
	<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.</p>
    <p><b>Additive</b>: +(1000 + 80 * x ^ 0.8), where x is spell activity time in seconds.</p>
    <p><b>Multiplicative</b>: (6 + 0.6 * x ^ 0.6), where x is spell activity time in seconds.</p>
	" coords="212,128,252,168" shape="rect">
		<area research="<p><b>S5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Leylines</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Mana Loom artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.25)%, where x is the amount of assistants you own.</p>
	" coords="254,128,294,168" shape="rect">
		<area research="<p><b>S5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Mirrors</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Mana Loom artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 1.75)%, where x is spell casts this game.</p>
	" coords="296,128,336,168" shape="rect">
		<area research="<p><b>S10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Encompass</p>
	<p><b>Requirement</b>: R221+</p>
	<p><b>Effect</b>: Increase Maximum Mana based on the highest amount of Maximum Mana you had in this Reincarnation.</p>
	<p><b>Formula</b>: +(15 * ln(1 + x) ^ 3), where x is your highest max mana this Reincarnation.</p>
	" coords="338,128,378,168" shape="rect">
		<area research="<p><b>S11125</b> - For All Factions</p>
	<p><b>Research Name</b>: Multiplication</p>
	<p><b>Requirement</b>: R223+</p>
	<p><b>Effect</b>: Spells cast count more based on Mana produced in this game.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 1.5)%, where x is Mana produced in this game.</p>
	" coords="380,128,420,168" shape="rect">
		<area research="<p><b>S11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Concentration</p>
	<p><b>Requirement</b>: R225+</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on Spells cast in this game.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 2)%, where x is spell casts this game.</p>
	" coords="2,170,42,210" shape="rect">
		<area research="<p><b>S11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Completeness</p>
	<p><b>Requirement</b>: R227+</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of Trophies you unlocked.</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.5)%, where x is the amount of Trophies you unlocked.</p>
	" coords="44,170,84,210" shape="rect">
		<area research="<p><b>S11875</b> - For All Factions</p>
	<p><b>Research Name</b>: Arcane Efficiency</p>
	<p><b>Requirement</b>: R229+</p>
	<p><b>Effect</b>: While both Holy Light and Fairy Chanting are active, reduce the cost of all spells by 85%.</p>
	<p><b>Note</b>: Catalyst can be used as one of the spells.</p>
	" coords="86,170,126,210" shape="rect">
		<area research="<p><b>S12250</b> - For All Factions</p>
	<p><b>Research Name</b>: Necrodoomancy</p>
	<p><b>Requirement</b>: R232+</p>
	<p><b>Effect</b>: Reincarnations count more based on time spent as Undead in this Reincarnation.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is time spent as Undead in this Reincarnation.</p>
	" coords="128,170,168,210" shape="rect">
		<area research="<p><b>S13125</b> - All Factions</p>
	<p><b>Research Name</b>: Fantasia</p>
	<p><b>Requirement</b>: R239+</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on Mana produced in this game.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 2)%, where x is Mana produced this game.</p>
	" coords="170,170,210,210" shape="rect">
		<area research="<p><b>S13500</b> - For All Factions</p>
	<p><b>Research Name</b>: Legerdemain</p>
	<p><b>Requirement</b>: R242+</p>
	<p><b>Effect</b>: Increase the production of all buildings based on Royal Exchange bonus.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your Royal Exchange bonus.</p>
	" coords="212,170,254,210" shape="rect">
		<area research="<p><b>C1</b> - For Elf</p>
	<p><b>Research Name</b>: Dummy Targets</p>
	<p><b>Cost</b>: 750 Qag (7.5e125)</p>
	<p><b>Effect</b>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.</p>
	<p><b>Formula</b>: (3 * ln(1 + x) ^ 3)%, where x is your Faction Coins Gained (This Game) stat.</p>
	" coords="86,212,126,252" shape="rect">
		<area research="<p><b>C10</b> - For Fairy</p>
	<p><b>Research Name</b>: Cultivation</p>
	<p><b>Hint</b>: More farms, more crops!</p>
	<p><b>Requirement</b>: 2500 Enchanted Fields</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
	<p><b>Effect</b>: Increases production of Blacksmith and Inn by 60% per Enchanted Field that you have.</p>
	" coords="128,212,168,252" shape="rect">
		<area research="<p><b>C25</b> - For Angel</p>
	<p><b>Research Name</b>: Light Condenser</p>
	<p><b>Hint</b>: I've cast a spell on you. Now you cast more.</p>
	<p><b>Requirement</b>: 12,000 Spells cast (This R)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast.</p>
	<p><b>Formula</b>: floor(10 * x ^ 0.3) / 10, where x is your Spells Cast (This Game) stat.</p>
	" coords="170,212,210,252" shape="rect">
		<area research="<p><b>C50</b> - For Demon</p>
	<p><b>Research Name</b>: Refining</p>
	<p><b>Hint</b>: Faction Coin treasury.</p>
	<p><b>Requirement</b>: 1 B (1e9) Faction Coins (as Elf)</p>
	<p><b>Cost</b>: 318.8 Tgag (3.188e134)</p>
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this game.</p>
	<p><b>Formula</b>: (0.3 * ln(1 + x) ^ 3)%, where x is your Demon Coins gained this game.</p>
	" coords="212,212,252,252" shape="rect">
		<area research="<p><b>C80</b> - For All Factions</p>
	<p><b>Research Name</b>: Apprenticeship</p>
	<p><b>Hint</b>: Shall i paint these buildings blue or red? I can't decide.</p>
	<p><b>Requirement</b>: 16,000 Good and Evil buildings</p>
	<p><b>Cost</b>: 61.13 Qiqag (6.113e139)</p>
	<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of Good and Evil buildings.</p>
	<p><b>Formula</b>: (x ^ 0.8)%, where x is the number of Good and Evil Buildings you own.</p>
	" coords="254,212,294,252" shape="rect">
		<area research="<p><b>C105</b> - For All Factions</p>
	<p><b>Research Name</b>: Woodcraft</p>
	<p><b>Hint</b>: 25k reiterations of the same movement.</p>
	<p><b>Requirement</b>: 25,000 clicks (This Game)</p>
	<p><b>Cost</b>: 1.544 Spqag (1.544e144)</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.</p>
	<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.</p>
	" coords="296,212,336,252" shape="rect">
		<area research="<p><b>C120</b> - For All Factions</p>
	<p><b>Research Name</b>: Socketing</p>
	<p><b>Hint</b>: Fingers crossed!</p>
	<p><b>Requirement</b>: 200,000 clicks (This Game)</p>
	<p><b>Cost</b>: 676 Spqag (6.76e146)</p>
	<p><b>Effect</b>: Increase clicking reward based on the amount of gems you own.</p>
	<p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.</p>
	" coords="338,212,378,252" shape="rect">
		<area research="<p><b>C135</b> - For All Factions</p>
	<p><b>Research Name</b>: Reinforcing</p>
	<p><b>Hint</b>: Clickety Click.</p>
	<p><b>Requirement</b>: 250,000 clicks (This Game, as Elf)</p>
	<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on your total number of clicks.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 2.75)%, where x is your Treasure Clicks (Total) stat.</p>
	" coords="380,212,420,252" shape="rect">
		<area research="<p><b>C150</b> - For All Factions</p>
	<p><b>Research Name</b>: Tinkering</p>
	<p><b>Requirement</b>: Research Recycling (E10) & Reinforcing (C135)</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of total research points bought.</p>
	<p><b>Formula</b>: round(125 * x ^ 0.38)%, where x is number of total research points bought.</p>
	" coords="86,254,126,294" shape="rect">
		<area research="<p><b>C175</b> - For Goblin</p>
	<p><b>Research Name</b>: Gemcutting</p>
	<p><b>Requirement</b>: Research Refining (C50) & Socketing (C120)</p>
	<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
	<p><b>Effect</b>: Increase the production bonus from gems based on the number of buildings you own.</p>
	<p><b>Formula</b>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.</p>
	" coords="128,254,168,294" shape="rect">
		<area research="<p><b>C200</b> - For All Factions</p>
	<p><b>Research Name</b>: Journeymen</p>
	<p><b>Requirement</b>: Research Apprenticeship (C80) & Bartering (E50).</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on time spent as that faction in this Reincarnation.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as the faction of the Unique Building in this Reincarnation.</p>
	" coords="170,254,210,294" shape="rect">
		<area research="<p><b>C225</b> - For Elf</p>
	<p><b>Research Name</b>: Automatons</p>
	<p><b>Requirement</b>: Research Dummy Targets (C1) & Vivification (A120).</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
	<p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.</p>
	" coords="212,254,252,294" shape="rect">
		<area research="<p><b>C250</b> - For All Factions</p>
	<p><b>Research Name</b>: Magnetism</p>
	<p><b>Requirement</b>: Research Tinkering (C150) & Critical Strike (W225).</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on time spent offline in this Reincarnation.</p>
	<p><b>Formula</b>: +floor(7.5 * x ^ 0.75), where x is your time spent offline in this Reincarnation.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 50%.</p>
	" coords="254,254,294,294" shape="rect">
		<area research="<p><b>C251</b> - For Titan</p>
	<p><b>Research Name</b>: Architecture</p>
	<p><b>Requirement</b>: Secrets of the Ancients (as Titan)</p>
	<p><b>Cost</b>: 79.05 QiQig (79.05e168)</p>
	<p><b>Effect</b>: Increase the production of Olympian Halls based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (25 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.</p>
	" coords="296,254,336,294" shape="rect">
		<area research="<p><b>C300</b> - For Druid</p>
	<p><b>Research Name</b>: Weighting</p>
	<p><b>Hint</b>: A lightning strike may hit the same target twice. Or hundreds of times.</p>
	<p><b>Requirement</b>: 650 Lightning Strikes (This R)</p>
	<p><b>Cost</b>: 33.6 OcQig (33.6e177)</p>
	<p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.</p>
	<p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.</p>
	<p><b>Formula</b>: 10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.</p>
	" coords="338,254,378,294" shape="rect">
		<area research="<p><b>C305</b> - For All Factions</p>
	<p><b>Research Name</b>: Golemcraft</p>
	<p><b>Hint</b>: Titanic Patience.</p>
	<p><b>Requirement</b>: 2 days as Titans (across all Reincarnations)</p>
	<p><b>Cost</b>: 255.2 OcQig (2.552e179)</p>
	<p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).</p>
	<p><b>Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).</p>
	" coords="380,254,420,294" shape="rect">
		<area research="<p><b>C330</b> - For All Factions</p>
	<p><b>Research Name</b>: Overload</p>
	<p><b>Requirement</b>: Research Aeromancy (S250) & Critical Strike (W225)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.</p>
	<p><b>Formula</b>: (3.5 *  x  ^0.35), where x is researches made.</p>
	" coords="2,296,42,336" shape="rect">
		<area research="<p><b>C340</b> - For All Factions</p>
	<p><b>Research Name</b>: Gem Duster</p>
	<p><b>Requirement</b>: 800 Gem Grinders (This R),Research Sifting (E260) & Surveyorship (E290)</p>
	<p><b>Cost</b>: 371.5 Sxg (3.715e185)</p>
	<p><b>Effect</b>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative)</p>
	<p><b>Formula</b>: floor(10 * x), where x is your Rubies Gained (All Time) stat.</p>
	" coords="44,296,84,336" shape="rect">
		<area research="<p><b>C375</b> - For Titan</p>
	<p><b>Research Name</b>: Lightning Rod</p>
	<p><b>Requirement</b>: Research Chain Lightning (S300) & Overload (C330)</p>
	<p><b>Cost</b>: 541 DSxg (5.41e191)</p>
	<p><b>Effect</b>: Olympian Halls are always hit by Lightning Strike in addition to the primary target. Olympian Halls can no longer be a primary target.</p>
	" coords="86,296,126,336" shape="rect">
		<area research="<p><b>C400</b> - For All Factions</p>
	<p><b>Research Name</b>: Gravitation</p>
	<p><b>Requirement</b>: Research Magnetism (C250) & Weighting (C300)</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula</b>: +floor(3.5 * ln(x + 1) ^ 3)%, where x is Faction Coins found in this game.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 100%.</p>
	" coords="128,296,168,336" shape="rect">
		<area research="<p><b>C405</b> - For Dwarf</p>
	<p><b>Research Name</b>: Metallurgy</p>
	<p><b>Requirement</b>: Secrets of the Underworld (as Dwarf)</p>
	<p><b>Cost</b>: 103.7 QaSxg (1.037e197)</p>
	<p><b>Effect</b>: Increase the production of Dwarven Forges based on the Dwarven Forges you own.</p>
	<p><b>Formula</b>: (40 * x ^ 0.8)%, where x is the number of Dwarven Forges you own.</p>
	" coords="170,296,210,336" shape="rect">
		<area research="<p><b>C460</b> - For All Factions</p>
	<p><b>Research Name</b>: Distribution</p>
	<p><b>Hint</b>: Clickety</p>
	<p><b>Requirement</b>: 1M Clicks (This game)</p>
	<p><b>Cost</b>: 502.3 SpSxg (5.023e206)</p>
	<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of clicks you made in this game.</p>
	<p><b>Formula</b>: (35 * x ^ 0.5)%, where x is your Treasure Clicks (This Game) stat.</p>
	" coords="212,296,252,336" shape="rect">
		<area research="<p><b>C500</b> - For All Factions</p>
	<p><b>Research Name</b>: Minecrafting</p>
	<p><b>Hint</b>: Excavate to the bottom!</p>
	<p><b>Requirement</b>: 3250 excavations (as Dwarf)</p>
	<p><b>Cost</b>: 5.554Spg (5.554e213)</p>
	<p><b>Effect</b>: Increases production bonus from gems based on the amount of excavations you made.</p>
	<p><b>Formula</b>: (3 * x ^ 0.35)%, where x is the amount of Excavations you made.</p>
	" coords="254,296,294,336" shape="rect">
		<area research="<p><b>C520</b> - For Dwarf</p>
	<p><b>Research Name</b>: Blacksmithing</p>
	<p><b>Requirement</b>: Research Reinforcing (C135) & Metallurgy (C405)</p>
	<p><b>Cost</b>: 18.47 USpg (1.847e217)</p>
	<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.</p>
	<p><b>Formula</b>: Clicking Reward: (2.5 * x ^ 0.3)%, where x is the number of Dwarven Forges you own.</p>
	<p><b>Formula</b>: Diamond Pickaxe: (20 * x ^ 0.4)%, where x is the number of Dwarven Forges you own.</p>
	" coords="296,296,336,336" shape="rect">
		<area research="<p><b>C590</b> - For Elf,Dwarf</p>
	<p><b>Research Name</b>: Alloys</p>
	<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwelf), Research Fusion(A105) and Blacksmithing(C520)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
	<p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins.</p>
	<p><b>Formula</b>: (0.9 * x ^ 0.9)%, where x is chance to find Faction Coins.</p>
	<p><b>Effect</b>: Autoclicks the treasure 10 times per second.</p>
	<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
	" coords="338,296,378,336" shape="rect">
		<area research="<p><b>C1300</b> - For Neutral,Dragon</p>
	<p><b>Research Name</b>: Scintillation</p>
	<p><b>Hint</b>: Increase your magic potential.</p>
	<p><b>Requirement</b>: 30000 Max Mana, as any Neutral,Dragon (This game)</p>
	<p><b>Cost</b>: 4.698 Tvg (4.698e72)</p>
	<p><b>Effect</b>: Increase production of buildings based on max mana and additive gem bonus. (Higher boost for lower gem bonus.)</p>
	<p><b>Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total additive gem bonus.</p>
	" coords="380,296,420,336" shape="rect">
		<area research="<p><b>C1325</b> - For All Factions</p>
	<p><b>Research Name</b>: Plasmation</p>
	<p><b>Hint</b>: I've gotta take a Mana shower.</p>
	<p><b>Requirement</b>: 50m (5e7) Mana Produced (This game)</p>
	<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
	<p><b>Effect</b>: Gain assistants based on mana produced in this game.</p>
	<p><b>Formula</b>: floor(1.25 * ln(1 + x) ^ 2.25), where x is mana produced (this game).</p>
	" coords="2,338,42,378" shape="rect">
		<area research="<p><b>C1500</b> - For Titan,Dragon</p>
	<p><b>Research Name</b>: Gargantuaness</p>
	<p><b>Hint</b>: Trading with the Dragons might prove risky, but rewarding.</p>
	<p><b>Requirement</b>: 2500 Royal Exchanges Research E460, D1275 (As Titan, Dragon)</p>
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on total time spent as Neutral.</p>
	<p><b>Formula</b>: (1.5 * x) ^ 0.7, where x is neutral time (this R) in minutes.</p>
	" coords="44,338,84,378" shape="rect">
		<area research="<p><b>C3000</b> - For Mercenary</p>
	<p><b>Research Name</b>: Customizing</p>
	<p><b>Hint</b>: Go into a deeper tunnel.</p>
	<p><b>Requirement</b>: 9000 Excavations as Mercenary.</p>
	<p><b>Cost</b>: 850.7 SxQig (8.507e173)</p>
	<p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.</p>
	<p><b>Formula</b>: (2 * x ^ 2), where X is artifacts you own.</p>
	" coords="86,338,126,378" shape="rect">
		<area research="<p><b>C3100</b> - All Factions</p>
	<p><b>Research Name</b>: Engineering</p>
	<p><b>Hint</b>: Spend some quality time with the Mercenaries.</p>
	<p><b>Requirement</b>: 12 days as Mercenary (across all Reincarnations)</p>
	<p><b>Cost</b>: 769.3 OcQig (7.693e179)</p>
	<p><b>Effect</b>: Increase Maximum Mana based on the total amount of clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: +(65 * x ^ 0.35), where x is clicks made in this Reincarnation.</p>
	" coords="128,338,168,378" shape="rect">
		<area research="<p><b>C5125</b> - For All Factions</p>
    <p><b>Research Name</b>: Restauration</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Factory artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on assistants owned.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.25)%, where x is assistants owned.</p>
	" coords="170,338,210,378" shape="rect">
		<area research="<p><b>C5375</b> - For Neutral</p>
	<p><b>Research Name</b>: Manufacture</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Factory artifact and upgrade.</p>
	<p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on clicks made in this game.</p>
	<p><b>Additive Formula</b>: +(7.5 * x ^ 0.5)%, where x is clicks made in this game.</p>
	<p><b>Multiplicative Formula</b>: (1.3 * x ^ 0.3)%, where x is clicks made in this game.</p>
	" coords="212,338,252,378" shape="rect">
		<area research="<p><b>C5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Discovery</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Factory artifact and upgrade.</p>
	<p><b>Effect</b>: Trophies and Artifacts count more based on excavations, including resets made in this game.</p>
	<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5)%, where x is excavation count and y is excavation resets (This Game).</p>
	" coords="254,338,294,378" shape="rect">
		<area research="<p><b>C5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Genuineness</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Factory artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.</p>
	<p><b>Formula</b>: (50 + x ^ 0.95)%, where x is the lowest lineage.</p>
	" coords="296,338,336,378" shape="rect">
		<area research="<p><b>C10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Masterpiece</p>
	<p><b>Requirement</b>: R221+</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on Excavation Resets made in this Reincarnation (Multiplicative).</p>
	<p><b>Formula</b>: (2 * x ^ 2)%, where x is excavation resets this R.</p>
	" coords="338,338,378,378" shape="rect">
		<area research="<p><b>C11125</b> - For All Factions</p>
	<p><b>Research Name</b>: Installation</p>
	<p><b>Requirement</b>: R223+</p>
	<p><b>Effect</b>: Increase the production of all buildings based on their quantity.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is the amount of buildings of the same tier.</p>
	" coords="380,338,420,378" shape="rect">
		<area research="<p><b>C11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Exhibition</p>
	<p><b>Requirement</b>: R225+</p>
	<p><b>Effect</b>: Trophies count more based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is total amount of buildings.</p>
	" coords="2,380,42,420" shape="rect">
		<area research="<p><b>C11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Motus Perpetuum</p>
	<p><b>Requirement</b>: R227+</p>
	<p><b>Effect</b>: Autoclicks x times per second based on Clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: x = floor(ln(1 + y)), where y is productive clicks this R.</p>
	<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
	" coords="44,380,84,420" shape="rect">
		<area research="<p><b>C11875</b> - For All Factions</p>
	<p><b>Research Name</b>: Plating</p>
	<p><b>Requirement</b>: R229+</p>
	<p><b>Effect</b>: Unique Buildings count more for Call to Arms purposes based on Moon Blessing activity time in this Reincarnation.</p>
	<p><b>Formula</b>: +(2 * x ^ 0.8), where x is Moon Blessing activity time in this Reincarnation.</p>
	<p><b>Note</b>: This is an additive bonus and is thus not affected by any multiplicatives such as Good Warcry.</p>
	" coords="86,380,126,420" shape="rect">
		<area research="<p><b>C12250</b> - For All Factions</p>
	<p><b>Research Name</b>: Compression</p>
	<p><b>Requirement</b>: R232+</p>
	<p><b>Effect</b>: Brainwave increases Faction Coin find chance progressively over its duration.</p>
	<p><b>Formula</b>: +(floor(1.5 * ((x + y) / 60) ^ 2.25))%, where x and y are Brainwave runtime and Headstart respectively.</p>
	" coords="128,380,168,420" shape="rect">
		<area research="<p><b>C13125</b> - For All Factions</p>
	<p><b>Research Name</b>: Pottery</p>
	<p><b>Requirement</b>: R239+</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of active spells.</p>
	<p><b>Formula</b>: (9 * x ^ 0.9)%, where x is the number of active spells.</p>
	" coords="170,380,210,420" shape="rect">
		<area research="<p><b>C13500</b> - For All Factions</p>
	<p><b>Research Name</b>: Assembly Line</p>
	<p><b>Requirement</b>: R242+</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.25)%, where x is the number of assistants you own.</p>
	" coords="212,380,252,420" shape="rect">
		<area research="<p><b>D1</b> - For Angel</p>
	<p><b>Research Name</b>: Blessing</p>
	<p><b>Cost</b>: 750 Qag (7.50e125)</p>
	<p><b>Effect</b>: Increase the production of Heaven's Domains based on total time spent with at least one active spell.</p>
	<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is total time spent with at least one active spell.</p>
	" coords="86,422,126,462" shape="rect">
		<area research="<p><b>D10</b> - For Demon</p>
	<p><b>Research Name</b>: Inflame</p>
	<p><b>Hint</b>: Build a highway to hell.</p>
	<p><b>Requirement</b>: 2,000 Infernal Realms</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 110% per Infernal Realm you own.</p>
	" coords="128,422,168,462" shape="rect">
		<area research="<p><b>D25</b> - For Undead</p>
	<p><b>Research Name</b>: Cursing</p>
	<p><b>Hint</b>: Spend some time in absence.</p>
	<p><b>Requirement</b>: Play 5 hours Offline (as Undead) (This Game)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on your offline production bonus.</p>
	<p><b>Formula</b>: (2.75 * log10(1 + x) ^ 2.75)%, where x is your offline production bonus multiplier.</p>
	<p><b>Note</b>: This research is treated as an A1 upgrade for A-nerf purposes.</p>
	" coords="170,422,210,462" shape="rect">
		<area research="<p><b>D50</b> - For Elf</p>
	<p><b>Research Name</b>: Hallowing</p>
	<p><b>Hint</b>: Have you been good enough?</p>
	<p><b>Requirement</b>: 15,000 Good Buildings(as Angel)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.</p>
	<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Elven Training Grounds you own.</p>
	" coords="212,422,252,462" shape="rect">
		<area research="<p><b>D55</b> - For All Factions</p>
	<p><b>Research Name</b>: Transfixion</p>
	<p><b>Hint</b>: Massively produced blue energy.</p>
	<p><b>Requirement</b>: Produce 3 M (3e6) Mana (This Game)</p>
	<p><b>Cost</b>: 2.421 Qaqag (2.421e135)</p>
	<p><b>Effect</b>: Increase clicking reward based on spell cast in this game.</p>
	<p><b>Formula</b>: (3 * x ^ 0.7)%, where x is your Spells Cast (This Game) stat.</p>
	" coords="254,422,294,462" shape="rect">
		<area research="<p><b>D135</b> - For All Factions</p>
	<p><b>Research Name</b>: Illumination</p>
	<p><b>Hint</b>: Blue regeneration combo.</p>
	<p><b>Requirement</b>: 250 m/s Mana Regen(as Angel)</p>
	<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
	<p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own.</p>
	<p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10), where x is amount of gems you own.</p>
	" coords="296,422,336,462" shape="rect">
		<area research="<p><b>D150</b> - For All Factions</p>
	<p><b>Research Name</b>: Retribution</p>
	<p><b>Requirement</b>: Research Betrayal (W120) & Transfixion (D55).</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
	<p><b>Effect</b>: Increase chance to find faction coins based on the amount of total research points bought.</p>
	<p><b>Formula</b>: floor(x ^ 1.25), where x is the amount of total research points bought.</p>
	" coords="338,422,378,462" shape="rect">
		<area research="<p><b>D175</b> - For Angel</p>
	<p><b>Research Name</b>: Resurrection</p>
	<p><b>Requirement</b>: Research Blessing (D1) & Refraction (A55)</p>
	<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
	<p><b>Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)</p>
	<p><b>Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).</p>
	" coords="380,422,420,462" shape="rect">
		<area research="<p><b>D200</b> - For All Factions</p>
	<p><b>Research Name</b>: Transcendence</p>
	<p><b>Requirement</b>: Research Resurrection (D175) & Illumination (D135)</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
	<p><b>Effect</b>: Decrease the cost of all spells by 20% and increase their duration by 20%.</p>
	" coords="86,464,126,504" shape="rect">
		<area research="<p><b>D205</b> - For All Good Factions</p>
	<p><b>Research Name</b>: Communion</p>
	<p><b>Hint</b>: Shine bright, Holy Light!</p>
	<p><b>Requirement</b>: 777 Holy Lights (Total this R),Research Gemcutting (C175) & Illumination (D135)</p>
	<p><b>Cost</b>: 627.6 Dqig (6.276e161)</p>
	<p><b>Effect</b>: Increase Holy Light duration by 300 seconds.</p>
	" coords="128,464,168,504" shape="rect">
		<area research="<p><b>D225</b> - For Fairy</p>
	<p><b>Research Name</b>: Weather Control</p>
	<p><b>Requirement</b>: Research Light Condenser (C25) & Vacuumancy (S30)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
	<p><b>Effect</b>: Increase the production of Enchanted Fields based on maximum mana.</p>
	<p><b>Formula</b>: floor(2.25 * x ^ 0.8)%, where x is your maximum mana.</p>
	" coords="170,464,210,504" shape="rect">
		<area research="<p><b>D245</b> - For All Factions</p>
	<p><b>Research Name</b>: Sanctification</p>
	<p><b>Hint</b>: Surgical Spirits.</p>
	<p><b>Requirement</b>: 500 Spiritual Surge (Total this R), Research Soulweaving (A175) & Necromancy (S225)</p>
	<p><b>Cost</b>: 6.94Qiqig (6.94e168)</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique Buildings you own.</p>
	<p><b>Formula</b>: (2.5 * x ^ 0.55), where x is the amount of Non-Unique Buildings you own.</p>
	" coords="212,464,252,504" shape="rect">
		<area research="<p><b>D250</b> - For All Factions</p>
	<p><b>Research Name</b>: Demonology</p>
	<p><b>Requirement</b>: Research Transcendence (D200) & Pyromancy (S150)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.</p>
	" coords="254,464,294,504" shape="rect">
		<area research="<p><b>D260</b> - For Faceless</p>
	<p><b>Research Name</b>: Mutation</p>
	<p><b>Hint</b>: Lost in the maze? Build your path.</p>
	<p><b>Requirement</b>: 3,000 Sunken Cities</p>
	<p><b>Cost</b>: 3.039 SxQig (3.039e171)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Sunken Cities you own.</p>
	" coords="296,464,336,504" shape="rect">
		<area research="<p><b>D275</b> - For Druid</p>
	<p><b>Research Name</b>: Meditation</p>
	<p><b>Hint</b>: Maximum magical concentration.</p>
	<p><b>Requirement</b>: Have 10,000 Mana (as Druid)</p>
	<p><b>Cost</b>: 1.331 SpQig (1.331e174)</p>
	<p><b>Effect</b>: Increase mana regeneration based on your current mana.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
	<p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.</p>
	" coords="338,464,378,504" shape="rect">
		<area research="<p><b>D290</b> - For All Factions</p>
	<p><b>Research Name</b>: Transubstantiation</p>
	<p><b>Hint</b>: A small buried stone.</p>
	<p><b>Requirement</b>: 1 Rough Stone Artifact</p>
	<p><b>Cost</b>: 582.7 SpQig (5.827e176)</p>
	<p><b>Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.</p>
	<p><b>Additive Formula</b>: (50 * x ^1.1), where x is the number of artifacts found.</p>
	<p><b>Multiplicative Formula</b>: (x ^ 0.95), where x is the number of artifacts found.</p>
	" coords="380,464,420,504" shape="rect">
		<area research="<p><b>D320</b> - For All Factions</p>
	<p><b>Research Name</b>: Deliverance</p>
	<p><b>Hint</b>: High-rate mana transfusions.</p>
	<p><b>Requirement</b>: 350 m/s Mana Regen</p>
	<p><b>Cost</b>: 1.117 NoQig (1.117e180)</p>
	<p><b>Effect</b>: Increase assistants production based on mana regeneration.</p>
	<p><b>Formula</b>: (20 * x ^ 0.8)%, where x is your Mana per Second stat.</p>
	" coords="2,506,42,546" shape="rect">
		<area research="<p><b>D330</b> - For All Factions</p>
	<p><b>Research Name</b>: Eternity</p>
	<p><b>Requirement</b>: Research Offering (E275) & Deliverance (D320)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
	<p><b>Effect</b>: Double the duration of all faction spells.</p>
	" coords="44,506,84,546" shape="rect">
		<area research="<p><b>D350</b> - For Titan</p>
	<p><b>Research Name</b>: Descent</p>
	<p><b>Requirement</b>: Research Swarming (W250) & Heroism (W330)</p>
	<p><b>Cost</b>: 21.42 USxg (2.142e187)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of Olympian Halls you own.</p>
	<p><b>Formula</b>: floor(x ^ 0.5)%, where x is the number of Olympian Halls you own.</p>
	" coords="86,506,126,546" shape="rect">
		<area research="<p><b>D400</b> - For All Factions</p>
	<p><b>Research Name</b>: Miracle</p>
	<p><b>Requirement</b>: Research Communion (D205) & Transubstantiation (D290)</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
	<p><b>Effect</b>: Increase the Production of a random building by x250. Target changes every 2 minutes. While offline, increase the production of all buildings by x75.</p>
	" coords="128,506,168,546" shape="rect">
		<area research="<p><b>D435</b> - For Dwarf</p>
	<p><b>Research Name</b>: Devotion</p>
	<p><b>Hint</b>: More diamond hits!</p>
	<p><b>Requirement</b>: 14400s (4 hour) Diamond Pickaxe Cast Time (This Game)</p>
	<p><b>Cost</b>: 19.89 SxSxg (1.989e202)</p>
	<p><b>Effect</b>: Increase the production of Good buildings based on spells cast in this game.</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.85)%, where x is your Spells Cast (This Game) stat.</p>
	" coords="170,506,210,546" shape="rect">
		<area research="<p><b>D480</b> - For All Factions</p>
	<p><b>Research Name</b>: Mercy</p>
	<p><b>Hint</b>: You should try everything at least once. Or 12 times.</p>
	<p><b>Requirement</b>: 12h Spent as each Good, Evil and Neutral alignment (This R)</p>
	<p><b>Cost</b>: 1.67 NoSxg (1.67e210)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.</p>
	<p><b>Formula</b>: (100000 * (tmin / tmax) ^ 1.5)%, where tmin is shortest Time Spent Being Alignment and tmax is longest Time Spent Being Alignment (Total) Stat.</p>
	" coords="212,506,252,546" shape="rect">
		<area research="<p><b>D525</b> - For Good</p>
	<p><b>Research Name</b>: Purity</p>
	<p><b>Hint</b>: Be patiently good.</p>
	<p><b>Requirement</b>: 1d12h as Good (This R), Research Communion (D205) and Devotion (D435)</p>
	<p><b>Cost</b>: 140.2 USpg (1.402e218)</p>
	<p><b>Effect</b>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.</p>
	<p><b>Formula</b>: (300 * x ^ 0.3)%, where x is your Faction Spells' Cast This Game stat.</p>
	" coords="254,506,294,546" shape="rect">
		<area research="<p><b>D560</b> - For Drow</p>
	<p><b>Research Name</b>: Ritualism</p>
	<p><b>Requirement</b>: Research Necromancy(S225) and Heirlooms(S500)(as drow)</p>
	<p><b>Cost</b>: 204.2 TSpq (2.042e224)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of trophies you unlocked.</p>
	<p><b>Formula</b>: (floor(0.5 * x) / 10), where x is the amount of Trophies Unlocked.</p>
	" coords="296,506,336,546" shape="rect">
		<area research="<p><b>D590</b> - For Angel,Dwarf</p>
	<p><b>Research Name</b>: Dispelling</p>
	<p><b>Requirement</b>: 200 Dwarf Exchanges as Dwangel, Research Shattering (W320) and Waste (A480)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on Mana Regeneration.</p>
	<p><b>Formula</b>: (5 * x ^ 0.95)%, where x is your Mana Regeneration.</p>
	" coords="338,506,378,546" shape="rect">
		<area research="<p><b>D1125</b> - For Neutral,Dragon</p>
	<p><b>Research Name</b>: Oblation</p>
	<p><b>Requirement</b>: Any Neutral,Build Dragons' Unique Building</p>
	<p><b>Cost</b>: 177.2 Nod (1.772e62)</p>
	<p><b>Effect</b>: Increase the production of Wyrm's Den based on Faction Coin find chance.</p>
	<p><b>Formula</b>: (1.55 * x ^ 0.55)%, where x is your Faction Coin find chance.</p>
	" coords="380,506,420,546" shape="rect">
		<area research="<p><b>D1275</b> - For All Factions</p>
	<p><b>Research Name</b>: Solemnity</p>
	<p><b>Hint</b>: Urban development.</p>
	<p><b>Requirement</b>: 80,000 Total Buildings</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Increase the production of each building by +0.3% per building of the same type.</p>
	" coords="2,548,42,588" shape="rect">
		<area research="<p><b>D1375</b> - For All Factions</p>
	<p><b>Research Name</b>: Soulrending</p>
	<p><b>Hint</b>: Be good, wish for the best.</p>
	<p><b>Requirement</b>: 7 days spent as good (across all Reincarnations)</p>
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
	<p><b>Effect</b>: Ascensions count 50% more for Spiritual Surge.</p>
	" coords="44,548,84,588" shape="rect">
		<area research="<p><b>D2775</b> - For Mercenary</p>
	<p><b>Research Name</b>: Intervention</p>
	<p><b>Requirement</b>: Secrets of the Warriors.</p>
	<p><b>Cost</b>: 33.73 DQig (3.373e160)</p>
	<p><b>Effect</b>: Increases the production of Unique Building based on time spent with Mercenaries (All Time).</p>
	<p><b>Formula</b>: (10 * x ^ 0.7)%, where x is time spent with Mercenary (All Time).</p>
	" coords="86,548,126,588" shape="rect">
		<area research="<p><b>D3350</b> - For All Factions</p>
	<p><b>Research Name</b>: Vampirism</p>
	<p><b>Hint</b>: Sound the alarms, production has gone offline!</p>
	<p><b>Requirement</b>: 100 Sp% (1e26%) offline bonus, (Intervention D2775) and (Upheaval W3150).</p>
	<p><b>Cost</b>: 598.3 TSxg (5.983e194)</p>
	<p><b>Effect</b>: Increase assistants additively and multiplicatively based on your Offline Bonus.</p>
	<p><b>Additive Formula</b>: (3.25 * log10(1 + x) ^ 2.25), where x is your Offline Bonus.</p>
	<p><b>Multiplicative Formula</b>: (0.05 * log10(1 + x) ^ 2), where x is your Offline Bonus.</p>
	" coords="128,548,168,588" shape="rect">
		<area research="<p><b>D5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Selection</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Mythos artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on Clicks in this game.</p>
	<p><b>Formula</b>: (x ^ 0.5), where x is clicks this game.</p>
	" coords="170,548,210,588" shape="rect">
		<area research="<p><b>D5375</b> - For Good</p>
	<p><b>Research Name</b>: Zealotry</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Mythos artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges purchased in this game.</p>
	<p><b>Formula</b>: (0.75 * x ^ 0.75), where x is royal exchanges this game</p>
	" coords="212,548,252,588" shape="rect">
		<area research="<p><b>D5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Prophecy</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Mythos artifact and upgrade.</p>
	<p><b>Effect</b>: Empowers the effects of your faction's Set based on time spent with your least used faction. Lineage levels count more, by the same amount, for your faction’s Advanced Heritage.</p>
	<p><b>Formula</b>: (50 + 0.25 * x ^ 0.5)%, where x is your least spent faction time.</p>
	<p><b>Note</b>: Only considers time spent with factions that are available at the given game stage.</p>
	" coords="254,548,294,588" shape="rect">
		<area research="<p><b>D5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Birthright</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Mythos artifact and upgrade.</p>
	<p><b>Effect</b>: Gain the Bloodline effects of your opposite alignment.</p>
	<p><b>Note</b>: Only gain the effects of the Base Faction that matches both alignments. For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
	" coords="296,548,336,588" shape="rect">
		<area research="<p><b>D10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Scriptures</p>
	<p><b>Requirement</b>: R221+</p>
	<p><b>Effect</b>: Increase all spells’ durations based on time spent with their respective requirement.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent in seconds with the faction or alignment of the spell.</p>
	<p><b>Note</b>: Call to Arms and Spiritual Surge use time spent this R.</p>
	<p><b>Note</b>: Heatwave and Hailstorm (Summer Festival event spells) use time spent as Summeraan and Winterly this R.</p>
	<p><b>Note</b>: All other event spells use time spent this R.</p>
	" coords="338,548,378,588" shape="rect">
		<area research="<p><b>D11125</b> - For All Factions</p>
	<p><b>Research Name</b>: Viriditas</p>
	<p><b>Requirement</b>: R223+</p>
	<p><b>Effect</b>: Lineage levels count more based on the amount of Artifacts you excavated.</p>
	<p><b>Formula</b>: (x ^ 0.75)%, where x is the amount of Artifacts you excavated.</p>
	" coords="380,548,420,588" shape="rect">
		<area research="<p><b>D11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Rigor</p>
	<p><b>Requirement</b>: R225+</p>
	<p><b>Effect</b>: Reincarnations count 100% more.</p>
	" coords="2,590,42,630" shape="rect">
		<area research="<p><b>D11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Compassion</p>
	<p><b>Requirement</b>: R227+</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on time spent with your least used alignment in this Reincarnation.</p>
	<p><b>Formula</b>: (50 + x ^ 0.75)%, where x is time spent as the least used alignment this R.</p>
	" coords="44,590,84,630" shape="rect">
		<area research="<p><b>D11875</b> - For All Factions</p>
	<p><b>Research Name</b>: Virtues</p>
	<p><b>Requirement</b>: R229+</p>
	<p><b>Effect</b>: Increase Tax Collection worth based on the highest amount of Mountain Palaces you built in this Reincarnation.</p>
	<p><b>Formula</b>: (2.5 * x ^ 0.5)%, where x is the highest amount of Mountain Palaces 	built in this Reincarnation.</p>
	" coords="86,590,126,630" shape="rect">
		<area research="<p><b>D12250</b> - For All Factions</p>
	<p><b>Research Name</b>: Enochian</p>
	<p><b>Requirement</b>: R232+</p>
	<p><b>Effect</b>: Multiply Angel Coins found based on God's Hand activity time in this Reincarnation.</p>
	<p><b>Formula</b>: *(10 + 0.7 * x ^ 0.7)%, where x is God's Hand activity time in this Reincarnation.</p>
	" coords="128,590,168,630" shape="rect">
		<area research="<p><b>D13125</b> - For All Factions</p>
	<p><b>Research Name</b>: Asceticism</p>
	<p><b>Requirement</b>: R239+</p>
	<p><b>Effect</b>: Neutral Buildings also count as both Good and Evil buildings. Non-Unique buildings also count as Unique buildings.</p>
	<p><b>Note</b>: Neutral Buildings in this instance refers to only Farms, Inns, Blacksmiths and Hall of Legends.</p>
	<p><b>Note</b>: The effect on Unique Buildings is only applied to effects that specifically check for Unique Buildings, such as Lineage Perk 3s. The Non-Unique Buildings will still only count as Non-Unique when it comes to building modifiers, such as E135. Essentially, effects that are '...based on the amount of Unique Buildings' are now '...based on your total amount of buildings'.</p>
	<p><b>Effect</b>: When you spend time with a faction, you also gain a fraction of that time spent with all factions.</p>
	<p><b>Note</b>: You gain 0.1 second of playtime for each faction (including Mercenary and Elites) every second. This does not include your current Faction(s), which gain time normally. This effect works both offline and in time warps. Time gained is added as real stat.</p>
	" coords="170,590,210,630" shape="rect">
		<area research="<p><b>D13500</b> - For All Factions</p>
	<p><b>Research Name</b>: Afterlife</p>
	<p><b>Requirement</b>: R242+</p>
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on the highest amount of Mana Regeneration you had in this Reincarnation.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest Mana Regeneration you had this Reincarnation.</p>
	" coords="212,590,254,630" shape="rect">
		<area research="<p><b>E1</b> - For Goblin</p>
	<p><b>Research Name</b>: Coinage</p>
	<p><b>Cost</b>: 750 Qag (7.50e125)</p>
	<p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (0.85 * x ^ 0.85)%, where x is your Buildings Owned (This Game) stat.</p>
	" coords="86,632,126,672" shape="rect">
		<area research="<p><b>E10</b> - For Undead</p>
	<p><b>Research Name</b>: Recycling</p>
	<p><b>Hint</b>: Nation of the dead.</p>
	<p><b>Requirement</b>: 2,000 Undercities</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.</p>
	" coords="128,632,168,672" shape="rect">
		<area research="<p><b>E25</b> - For Elf</p>
	<p><b>Research Name</b>: Commerce</p>
	<p><b>Hint</b>: Colored wealth.</p>
	<p><b>Requirement</b>: 100 M (1e8) Faction Coins (Found this Game)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.</p>
	<p><b>Formula</b>: +(floor((1 + 6 * x) ^ 0.5 - 1)), where x is the amount of Royal Exchanges purchased.</p>
	" coords="170,632,210,672" shape="rect">
		<area research="<p><b>E30</b> - For All Factions</p>
	<p><b>Research Name</b>: Diplomacy</p>
	<p><b>Hint</b>: Exchange more.</p>
	<p><b>Requirement</b>: 1,000 Exchanges (This Game)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588e130)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.</p>
	<p><b>Faction Coin Chance Formula</b>: +(floor(1.5 * (x / 60) ^ 1.05))%, where x is time spent in this game.</p>
	<p><b>Royal Exchange Bonus Formula</b>: +(floor((x / 60) ^ 0.6))%, where x is time spent in this game.</p>
	" coords="212,632,252,672" shape="rect">
		<area research="<p><b>E50</b> - For Fairy</p>
	<p><b>Research Name</b>: Bartering</p>
	<p><b>Hint</b>: Royalties earnings.</p>
	<p><b>Requirement</b>: 1,000 Exchanges(as Goblin)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
	<p><b>Effect</b>: Reduce Enchanted Field cost multiplier. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
	" coords="254,632,294,672" shape="rect">
		<area research="<p><b>E80</b> - For Good/Evil</p>
	<p><b>Research Name</b>: Common Business</p>
	<p><b>Hint</b>: Neutral urbanistics.</p>
	<p><b>Requirement</b>: 9,000 Neutral Buildings</p>
	<p><b>Cost</b>: 61.13 Qiqag (6.113e139)</p>
	<p><b>Effect</b>: Increase the production of Good and Evil buildings based on the amount of neutral buildings.</p>
	<p><b>Formula</b>: (round((1.75 * x) ^ 0.8))%, where x is the number of neutral buildings you own.</p>
	" coords="296,632,336,672" shape="rect">
		<area research="<p><b>E135</b> - For All Factions</p>
	<p><b>Research Name</b>: Bribing</p>
	<p><b>Hint</b>: Architectural advantage.</p>
	<p><b>Requirement</b>: 28,000 Total Buildings(as Goblin)</p>
	<p><b>Cost</b>: 296 Ocqag (2.96e149)</p>
	<p><b>Effect</b>: Reduce the building cost multiplier for Unique Buildings. Reduces cost multiplier by 0.01; with no other reductions applying, the multiplier will be 1.14 instead of 1.15.</p>
	" coords="338,632,378,672" shape="rect">
		<area research="<p><b>E145</b> - For All Factions</p>
	<p><b>Research Name</b>: Royal Demand</p>
	<p><b>Hint</b>: Collect those taxes!</p>
	<p><b>Requirement</b>: 50,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)</p>
	<p><b>Cost</b>: 17.07 Noqag (1.707e151)</p>
	<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.</p>
	" coords="380,632,420,672" shape="rect">
		<area research="<p><b>E150</b> - For All Factions</p>
	<p><b>Research Name</b>: Investment</p>
	<p><b>Requirement</b>: Research Bribing (E135) & Commerce (E25)</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own.</p>
	<p><b>Formula</b>: (round(ln(1 + x) ^ 1.25))%, where x is the amount of gold you own.</p>
	" coords="86,674,126,714" shape="rect">
		<area research="<p><b>E200</b> - For All Factions</p>
	<p><b>Research Name</b>: Acquisition</p>
	<p><b>Requirement</b>: Research Investment (E150)  Common Business (E80)</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked.</p>
	<p><b>Formula</b>: (round(0.0003 * (100 * x) ^ 3.35))%, where x is trophies unlocked / max trophies.</p>
	" coords="128,674,168,714" shape="rect">
		<area research="<p><b>E225</b> - For Goblin</p>
	<p><b>Research Name</b>: Forgery</p>
	<p><b>Requirement</b>: Research Coinage (E1) & Gilding (A50)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
	<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
	" coords="170,674,210,714" shape="rect">
		<area research="<p><b>E230</b> - For Demon</p>
	<p><b>Research Name</b>: Coercion</p>
	<p><b>Requirement</b>: Research Exertion (W50) & Diplomacy (E30)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
	<p><b>Effect</b>: Increases trophy count based on time spent as Evil this Reincarnation.</p>
	<p><b>Formula</b>: (0.25 * x ^ 0.5)%, where x is time spent as Evil this Reincarnation.</p>
	" coords="212,674,252,714" shape="rect">
		<area research="<p><b>E250</b> - For All Factions</p>
	<p><b>Research Name</b>: Trade Routes</p>
	<p><b>Requirement</b>: Research Forgery (E225) & Royal Demand (E145)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.</p>
	<p><b>Formula</b>: +(floor(10 * x ^ 0.55) / 10), where x is the amount of Royal Exchanges purchased.</p>
	" coords="254,674,294,714" shape="rect">
		<area research="<p><b>E260</b> - For Druid</p>
	<p><b>Research Name</b>: Sifting</p>
	<p><b>Hint</b>: A lot of men-hirs.</p>
	<p><b>Requirement</b>: 3,000 Stonehenge Circles</p>
	<p><b>Cost</b>: 3.039 SxQig (3.039e171)</p>
	<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.</p>
	<p><b>Formula</b>: (100 * x)%, where x is the amount of Stone Pillars you own.</p>
	" coords="296,674,336,714" shape="rect">
		<area research="<p><b>E275</b> - For Titan</p>
	<p><b>Research Name</b>: Offering</p>
	<p><b>Hint</b>: Offer Faction Coins, gain production.</p>
	<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)</p>
	<p><b>Cost</b>: 175.2 SxQig (1.752e173)</p>
	<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.</p>
	<p><b>Formula</b>: +(x ^ 0.95), where x is your Royal Exchange Bonus.</p>
	" coords="338,674,378,714" shape="rect">
		<area research="<p><b>E290</b> - For All Factions</p>
	<p><b>Research Name</b>: Surveyorship</p>
	<p><b>Hint</b>: Take an interest in archeology.</p>
	<p><b>Requirement</b>: 7 Artifacts</p>
	<p><b>Cost</b>: 582.7 SpQig (5.827e176)</p>
	<p><b>Effect</b>: Reduces Excavation cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.18 instead of 1.2.</p>
	" coords="380,674,420,714" shape="rect">
		<area research="<p><b>E320</b> - For All Factions</p>
	<p><b>Research Name</b>: Smuggling</p>
	<p><b>Hint</b>: You shouldn\'t abdicate so poorly.</p>
	<p><b>Requirement</b>: Have twice as many Gems in Abdication Treasury</p>
	<p><b>Cost</b>: 1.117 NoQig (1.117e180)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings owned.</p>
	<p><b>Effect</b>: Also increase FC chance find chance by a multiplicative 100%.</p>
	<p><b>Formula</b>: +(5 * x ^ 0.9)%, where x is Unique Building owned</p>
	" coords="2,716,42,756" shape="rect">
		<area research="<p><b>E330</b> - For All Factions</p>
	<p><b>Research Name</b>: Collection</p>
	<p><b>Requirement</b>: Research Acquisition (E200) & Forgery (E225)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found.</p>
	<p><b>Formula</b>: round(50 * x ^ 1.1)%, where x is the amount of artifacts found.</p>
	" coords="44,716,84,756" shape="rect">
		<area research="<p><b>E350</b> - For Faceless</p>
	<p><b>Research Name</b>: Repurpose</p>
	<p><b>Requirement</b>: Research Journeymen (C200) & Adaptation (A330)(as Faceless)</p>
	<p><b>Cost</b>: 21.42 USxg (2.142e187)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made.</p>
	<p><b>Formula</b>: (round(2.5 * x ^ 2.25))%, where x is the amount of times you reincarnated.</p>
	" coords="86,716,126,756" shape="rect">
		<area research="<p><b>E400</b> - For All Factions</p>
	<p><b>Research Name</b>: Conversion</p>
	<p><b>Requirement</b>: Research Philosopher's Stone (A250) & Repurpose (E350).</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
	<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.</p>
	<p><b>Formula</b>: +(2.5 * floor(x ^ 0.5))%, where x is your Royal Exchange Bonus.</p>
	" coords="128,716,168,756" shape="rect">
		<area research="<p><b>E410</b> - For Dwarf</p>
	<p><b>Research Name</b>: Marketing</p>
	<p><b>Hint</b>: A Blacksmith army.</p>
	<p><b>Requirement</b>: 5,000 Blacksmiths</p>
	<p><b>Cost</b>: 787.7 QaSxg (7.877e197)</p>
	<p><b>Effect</b>: Increase production of all other buildings by 75% per Dwarven Forge you own.</p>
	" coords="170,716,210,756" shape="rect">
		<area research="<p><b>E460</b> - For All Factions</p>
	<p><b>Research Name</b>: Inflation</p>
	<p><b>Hint</b>: Got enough Faction Coins?</p>
	<p><b>Requirement</b>: 100 B (1e11) Faction Coins (Found this Game)</p>
	<p><b>Cost</b>: 502.3 SpSxg (5.023e206)</p>
	<p><b>Effect</b>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula</b>: +(floor(3.5 * log10(1 + x)))%, where x is the of Faction Coins found in this game.</p>
	" coords="212,716,252,756" shape="rect">
		<area research="<p><b>E480</b> - For All Factions</p>
	<p><b>Research Name</b>: Undercutting</p>
	<p><b>Hint</b>: Maximum magic resources required.</p>
	<p><b>Requirement</b>: 15000 max mana</p>
	<p><b>Cost</b>: 1.67 NoSxg (1.67e210)</p>
	<p><b>Effect</b>: Increase the production of Non-Unique Buildings based on Spells cast in this Reincarnation.</p>
	<p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x the amount of Spells cast in this Reincarnation.</p>
	" coords="254,716,294,756" shape="rect">
		<area research="<p><b>E495</b> - For Drow</p>
	<p><b>Research Name</b>: Jewellery</p>
	<p><b>Hint</b>: Special architecture.</p>
	<p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf)</p>
	<p><b>Cost</b>: 731.4 NoSxg (7.314e212)</p>
	<p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own.</p>
	<p><b>Formula</b>: +(0.06 * x ^ 0.8)%, where x is the amount of Spider Sanctuaries you own.</p>
	" coords="296,716,336,756" shape="rect">
		<area research="<p><b>E590</b> - For Goblin,Drow</p>
	<p><b>Research Name</b>: Slavery</p>
	<p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own.</p>
	<p><b>Formula</b>: +(0.1 * x ^ 0.8), where x is the amount of Non-Unique Buildings you own.</p>
	" coords="338,716,378,756" shape="rect">
		<area research="<p><b>E1225</b> - For Neutral,Dragon</p>
	<p><b>Research Name</b>: Hoarding</p>
	<p><b>Hint</b>: Massive numismatics.</p>
	<p><b>Requirement</b>: 1 T (1e12) Faction coins found this game</p>
	<p><b>Cost</b>: 160.2 Uvg (1.602e68)</p>
	<p><b>Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.</p>
	" coords="380,716,420,756" shape="rect">
		<area research="<p><b>E1325</b> - For All Factions</p>
	<p><b>Research Name</b>: Intimidation</p>
	<p><b>Hint</b>: Unique wonders of the realm.</p>
	<p><b>Requirement</b>: 18000 Unique Buildings</p>
	<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
	<p><b>Effect</b>: Reduce Royal Exchange cost multiplier.</p>
	<p><b>Formula</b>: Reduces multiplier by 0.025; with no other reductions applying, the multiplier will be 1.075 instead of 1.1.</p>
	" coords="2,758,42,798" shape="rect">
		<area research="<p><b>E1425</b> - For All Neutral Factions</p>
	<p><b>Research Name</b>: Rarity</p>
    <p><b>Hint</b>: Be neutral. Be different. For a short week.</p>
	<p><b>Requirement</b>: 5 days playtime each with Titan, Druid and Faceless + Research A545 & C1300</p>
	<p><b>Cost</b>: 131 Qivg (1.31e80)</p>
	<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.</p>
	<p><b>Formula</b>: (1.25 * x ^ 1.25)%, where x is artifacts found.</p>
	" coords="44,758,84,798" shape="rect">
		<area research="<p><b>E3250</b> - For All Factions</p>
	<p><b>Research Name</b>: Hirelings</p>
	<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
	<p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
	<p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
	<p><b>Formula</b>: +(1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
	" coords="86,758,126,798" shape="rect">
		<area research="<p><b>E3300</b> - For Mercenary</p>
	<p><b>Research Name</b>: Estates</p>
    <p><b>Hint</b>: 50k shades of uniqueness.</p>
	<p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</p>
	<p><b>Cost</b>: 629.2 DSxg (6.292e191)</p>
	<p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.</p>
	<p><b>Effect</b>: Ascension 3: Gain all the Unique Buildings that match your alignments.</p>
	" coords="128,758,168,798" shape="rect">
		<area research="<p><b>E5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Decentralization</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.</p>
	<p><b>Formula</b>: ((3 - 0.25 * T) ^ 4 * x ^ 0.6)%, where T is building tier and x is the number of (every) buildings you own.</p>
	" coords="170,758,210,798" shape="rect">
		<area research="<p><b>E5375</b> - For Balance</p>
	<p><b>Research Name</b>: Whipround</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus additively and multiplicatively based on Tax Collections cast in this game.</p>
    <p><b>Additive Formula</b>: +(x ^ 0.2), where x is the amount of Tax Collections cast this game.</p>
    <p><b>Multiplicative Formula</b>: (0.85 * x ^ 0.15)%, where x is Tax collections cast this game.</p>
	" coords="212,758,252,798" shape="rect">
		<area research="<p><b>E5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Loan Sharking</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Tax Collection is worth more based on Gold owned.</p>
	<p><b>Formula</b>: +(log10(1 + x) ^ 1.5), where x is your current amount of coins.</p>
	" coords="254,758,294,798" shape="rect">
		<area research="<p><b>E5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Prosperity</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Vault artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on your faction spell activity in this game.</p>
	<p><b>Formula</b>: (0.4 * x ^ 0.4)%, where x is your least used faction spell (This game)</p>
	<p><b>Note</b>: Only checks the base faction spell of your faction(s). On mercs, scales off Share Benefits and the two chosen Faction Spells.</p>
	" coords="296,758,336,798" shape="rect">
		<area research="<p><b>E10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Rigmarole</p>
	<p><b>Requirement</b>: R221+</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus based on the highest amount of assistants you had in this Reincarnation (Additive).</p>
	<p><b>Formula</b>: +(ln(1 + x) ^ 2)%, where x is your highest assistants count this Regeneration.</p>
	" coords="338,758,378,798" shape="rect">
		<area research="<p><b>E11125</b> - For All Factions</p>
	<p><b>Research Name</b>:  Grey Friday</p>
	<p><b>Requirement</b>: R223+</p>
	<p><b>Effect</b>: Reduce building cost multiplier and increase the production of all buildings based on Royal Exchange bonus.</p>
	<p><b>Formula</b>: -0.02, with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
	<p><b>Formula</b>: (1.2 * x ^ 0.8)%, where x is your Royal Exchange bonus.</p>
	" coords="380,758,420,798" shape="rect">
		<area research="<p><b>E11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Heist</p>
	<p><b>Requirement</b>: R225+</p>
	<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have.</p>
	<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is the amount of assistants you have.</p>
	" coords="2,800,42,840" shape="rect">
		<area research="<p><b>E11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Surplus</p>
	<p><b>Requirement</b>: R227+</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on the amount of Gems you have.</p>
	<p><b>Formula</b>: (25 + 0.25 * ln(1 + x) ^ 1.5)%, where x is the amount of Gems you have.</p>
	" coords="44,800,84,840" shape="rect">
		<area research="<p><b>E11875</b> - For All Factions</p>
	<p><b>Research Name</b>: Overworking</p>
	<p><b>Requirement</b>: R229+</p>
	<p><b>Effect</b>: Goblin's Greed casts additional Tax Collection per second based on the amount of assistants you have.</p>
	<p><b>Formula</b>: +(1.5 * x ^ 0.5), where x is the amount of assistants you have.</p>
	<p><b>Note</b>: Catalyst can also trigger this effect.</p>
	" coords="86,800,126,840" shape="rect">
		<area research="<p><b>E12250</b> - For All Factions</p>
	<p><b>Research Name</b>: Oilery</p>
	<p><b>Requirement</b>: R232+</p>
	<p><b>Effect</b>: While both Lightning Strike and Gem Grinder are active, multiplicatively increase the production bonus from Gems based on the duration of your longest spell.</p>
	<p><b>Formula</b>: (0.8 * x ^ 0.8)%, where x is the duration of your longest spell.</p>
	" coords="128,800,168,840" shape="rect">
		<area research="<p><b>E13125</b> - For All Factions</p>
	<p><b>Research Name</b>: Discount</p>
	<p><b>Requirement</b>: R239+</p>
	<p><b>Effect</b>: Reduce Royal Exchange, Excavation and Building cost multipliers. All spells cost 50% less mana to cast.</p>
	<p><b>Note</b>: Cost multiplier reduction is -0.02 for all three.</p>
	" coords="170,800,210,840" shape="rect">
		<area research="<p><b>E13500</b> - For All Factions</p>
	<p><b>Research Name</b>: Recession</p>
	<p><b>Requirement</b>: R242+</p>
	<p><b>Effect</b>: Gain all Lineage base effects that match your alignments, up to a maximum of level 25.</p>
	<p><b>Note</b>: This will reduce the level of all lineages you do not pick to 25 for the current run (including lineages that don't match your alignments), which will lower the effectiveness of upgrades based on those lineage levels.</p>
	" coords="212,800,252,840" shape="rect">	
	    <area research="<p><b>A1</b> - For Undead</p>
	<p><b>Research Name</b>: Plague</p>
	<p><b>Cost</b>: 750 Qag (7.50e125)</p>
	<p><b>Effect</b>: Increase the production of Undercities by 20% per assistant you own.</p>
	" coords="86,842,126,882" shape="rect">
		<area research="<p><b>A10</b> - For Goblin</p>
	<p><b>Research Name</b>: Transmutation</p>
	<p><b>Hint</b>: Too many witches, not enough houses!</p>
	<p><b>Requirement</b>: 2250 Goblin Banks</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 85% per Goblin Bank you own.</p>
	" coords="128,842,168,882" shape="rect">
		<area research="<p><b>A25</b> - For Demon</p>
	<p><b>Research Name</b>: Deflagration</p>
	<p><b>Hint</b>: Hellfire!</p>
	<p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
	<p><b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and increases its effect by 800%.</p>
	" coords="170,842,210,882" shape="rect">
		<area research="<p><b>A30</b> - For Fairy</p>
	<p><b>Research Name</b>: Delayed Reaction</p>
	<p><b>Hint</b>: Fairy Greatest Hits.</p>
	<p><b>Requirement</b>: 750 Fairy Chanting (Total this R)</p>
	<p><b>Cost</b>: 95.88 Dqag (9.588e130)</p>
	<p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.</p>
	<p><b>Additive Production increase formula</b>: floor(1000 * t ^ 1.5), where t is how long FC has been active in seconds.</p>
	<p><b>Duration increase formula</b>: floor(x / 800) ^ 0.8) seconds, where x is the number of Farms, Inns, and Blacksmiths you own.</p>
	" coords="212,842,252,882" shape="rect">
		<area research="<p><b>A50</b> - For Angel</p>
	<p><b>Research Name</b>: Gilding</p>
	<p><b>Hint</b>: Regeneration magic.</p>
	<p><b>Requirement</b>: 120 Mana Regen (as Undead)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
	<p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate.</p>
	<p><b>Formula</b>: (1.45 * x ^ 0.45), where x is the number of Heaven's Domains you own.</p>
	" coords="254,842,294,882" shape="rect">
		<area research="<p><b>A55</b> - For All Factions</p>
	<p><b>Research Name</b>: Refraction</p>
	<p><b>Hint</b>: Iacta Incantatio.</p>
	<p><b>Requirement</b>: Cast 25000 spells (This Game)</p>
	<p><b>Cost</b>: 2.421 Qaqag (2.421e135)</p>
	<p><b>Effect</b>: Improve offline production based on spells cast.</p>
	<p><b>Formula</b>: round(5 * x ^ 0.85), where x is your Spells Cast (Total) stat.</p>
	" coords="296,842,336,882" shape="rect">
		<area research="<p><b>A105</b> - For All Factions</p>
	<p><b>Research Name</b>: Fusion</p>
	<p><b>Hint</b>: Blacksmith City.</p>
	<p><b>Requirement</b>: 2750 Blacksmiths</p>
	<p><b>Cost</b>: 1.544 Spqag (1.544e144)</p>
	<p><b>Effect</b>: Increases the production of buildings based on the amount of Faction Coins found this game.</p>
	<p><b>Formula</b>: round(0.7 * ln ^ 3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.</p>
	" coords="338,842,378,882" shape="rect">
		<area research="<p><b>A120</b> - For All Factions</p>
	<p><b>Research Name</b>: Vivification</p>
	<p><b>Hint</b>: Maximum Magic!</p>
	<p><b>Requirement</b>: Have 6500 Max Mana.</p>
	<p><b>Cost</b>: 676 Spqag (6.76e146)</p>
	<p><b>Effect</b>: Gain additional assistants based on max mana.</p>
	<p><b>Formula</b>: floor((x / 15) ^ 0.825), where x is your maximum mana.</p>
	" coords="380,842,420,882" shape="rect">
		<area research="<p><b>A135</b> - For All Factions</p>
	<p><b>Research Name</b>: Decay</p>
	<p><b>Hint</b>: Spend some quality time.</p>
	<p><b>Requirement</b>: 1 Day playtime (This Reincarnation) (Unlock as Undead)</p>
	<p><b>Cost</b>: 296 OcQag (9.6e149)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation.</p>
	<p><b>Formula</b>: (0.03 * (2 * x) ^ 0.7)%, where x is time spent in this Reincarnation in seconds.</p>
	" coords="86,884,126,924" shape="rect">
		<area research="<p><b>A150</b> - For All Factions</p>
	<p><b>Research Name</b>: Explosives</p>
	<p><b>Requirement</b>: Research (A25) Deflagration & (A30) Delayed Reaction</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
	<p><b>Effect</b>: Whenever you cast a spell, increase the production of your most productive building based on the amount of mana produced in this game for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
	<p><b>Formula</b>: round(0.7 * x ^ 0.6)%, where x is your Mana Produced (Total) stat.</p>
	" coords="128,884,168,924" shape="rect">
		<area research="<p><b>A175</b> - For Undead</p>
	<p><b>Research Name</b>: Soulweaving</p>
	<p><b>Requirement</b>: Research Cursing (D25) & Reinforcing (C135)</p>
	<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you Reincarnated.</p>
	<p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.</p>
	" coords="170,884,210,924" shape="rect">
		<area research="<p><b>A200</b> - For All Factions.</p>
	<p><b>Research Name</b>: Corrosion</p>
	<p><b>Requirement</b>: Research Plague (A1) & Decay (A135)</p>
	<p><b>Cost</b>: 82.65 Dqig (82.65e160)</p>
	<p><b>Effect</b>: Increase clicking reward based on time spent in this game.</p>
	<p><b>Formula</b>: (0.07 * (2 * x) ^ 0.75)%, where x is your Playtime (This Game) in seconds.</p>
	" coords="212,884,252,924" shape="rect">
		<area research="<p><b>A250</b> - For All Factions</p>
	<p><b>Research Name</b>: Philosopher's Stone</p>
	<p><b>Requirement</b>: Research Transmutation (A10) & Empowered Luck (S175)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
	<p><b>Effect</b>: Increase production bonus from gems based on the amount of research made.</p>
	<p><b>Formula</b>: floor(x ^ 0.9 / 25)%, where x is the amount of research made.</p>
	" coords="254,884,294,924" shape="rect">
		<area research="<p><b>A251</b> - For Druid</p>
	<p><b>Research Name</b>: Infusion</p>
	<p><b>Requirement</b>: Secrets of the Ancients (as Druids)</p>
	<p><b>Cost</b>: 79.05 QiQig (7.905e169)</p>
	<p><b>Effect</b>: Increase the production of Stonehenge Circles based on mana produced in this game.</p>
	<p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.</p>
	" coords="296,884,336,924" shape="rect">
		<area research="<p><b>A270</b> - For All Factions</p>
	<p><b>Research Name</b>: Synthesis</p>
	<p><b>Hint</b>: Faction Currency.</p>
	<p><b>Requirement</b>: 20 B (2e10) Faction Coins (This game)</p>
	<p><b>Cost</b>: 175.2 SxQig (1.752e173)</p>
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.</p>
	<p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5)%, where x is Factions Coins found (This game).</p>
	" coords="338,884,378,924" shape="rect">
		<area research="<p><b>A300</b> - For Faceless</p>
	<p><b>Research Name</b>: Creeping</p>
	<p><b>Hint</b>: Blue Production.</p>
	<p><b>Requirement</b>: Produce 5M mana (This game) as Druid</p>
	<p><b>Cost</b>: 33 OcQig (3.36e178)</p>
	<p><b>Effect</b>: Increase mana regeneration based on mana produced in this game.</p>
	<p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.</p>
	" coords="380,884,420,924" shape="rect">
		<area research="<p><b>A305</b> - For All Factions</p>
	<p><b>Research Name</b>: Engraving</p>
	<p><b>Hint</b>: Druidic experience.</p>
	<p><b>Requirement</b>: 2 days as Druids (across all Reincarnations)</p>
	<p><b>Cost</b>: 255.2 OcQig (2.552e179)</p>
	<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.</p>
	<p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.</p>
	<p><b>Formula</b>: floor(3.5 * ln(1 + x) ^ 3.5)%, where x is your Spells Cast (This Game) stat.</p>
	" coords="2,926,42,966" shape="rect">
		<area research="<p><b>A330</b> - For All Factions</p>
	<p><b>Research Name</b>: Adaptation</p>
	<p><b>Requirement</b>: Research Mutation (D260) & Meditation (D275)</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions.</p>
	<p><b>Formula</b>: (0.05 * (x - y) ^ 0.7)%, where x is All Time playtime and y is the highest All Time spent amongst your current factions.</p>
	" coords="44,926,84,966" shape="rect">
		<area research="<p><b>A375</b> - For Druid</p>
	<p><b>Research Name</b>: Transfusion</p>
	<p><b>Requirement</b>: Research Infusion (A251) & Engraving (A305)</p>
	<p><b>Cost</b>: 541 DSxg (5.41e191)</p>
	<p><b>Effect</b>: Gain additional assistants based on mana produced this game.</p>
	<p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.</p>
	" coords="86,926,126,966" shape="rect">
		<area research="<p><b>A400</b> - For All Factions But Mercenary</p>
	<p><b>Research Name</b>: Bloodspring</p>
	<p><b>Requirement</b>: Research Assimilation (S251) & Transfusion (A375).</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
	<p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.</p>
	<p><b>Note</b>: Provides Prestige Bloodline for Elite Factions from R125 to R129, MAD bloodlines at R130+.</p>
	<p><b>Note</b>: Does not work with two Bloodlines of the same type.</p>
	" coords="128,926,168,966" shape="rect">
		<area research="<p><b>A410</b> - For Drow</p>
	<p><b>Research Name</b>: Poisons</p>
	<p><b>Hint</b>: Evil Churches.</p>
	<p><b>Requirement</b>: 4000 Sanctuaries</p>
	<p><b>Cost</b>: 787.7 QaSxg (7.877e197)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Spider Sanctuary you own.</p>
	" coords="170,926,210,966" shape="rect">
		<area research="<p><b>A480</b> - For All Factions</p>
	<p><b>Research Name</b>: Waste</p>
	<p><b>Hint</b>: Royal Trade Network.</p>
	<p><b>Requirement</b>: 2000 Royal Exchanges</p>
	<p><b>Cost</b>: 1.67 NoSxg (1.67e210)</p>
	<p><b>Effect</b>: Increase offline production based on the amount of Royal Exchanges you purchased.</p>
	<p><b>Formula</b>: 120 * x ^ 0.85, where x is your Royal Exchanges Made stat.</p>
	" coords="212,926,252,966" shape="rect">
		<area research="<p><b>A495</b> - For Dwarf</p>
	<p><b>Research Name</b>: Elixirs</p>
	<p><b>Hint</b>: Never enough servitude.</p>
	<p><b>Requirement</b>: 500 Base Assistants (as Drow)</p>
	<p><b>Cost</b>: 731.4 NoSxg (7.314e212)</p>
	<p><b>Effect</b>: Increase assistants production based on the amount of research made.</p>
	<p><b>Formula</b>: (40 * x ^ 0.4)%, where x is the Amount of Researches made.</p>
	" coords="254,926,294,966" shape="rect">
		<area research="<p><b>A545</b> - For All Factions</p>
	<p><b>Research Name</b>: Mineralogy</p>
	<p><b>Hint</b>: Full Showcase.</p>
	<p><b>Requirement</b>: 700 trophies</p>
	<p><b>Cost</b>: 466.3 DSpg (4.663e221)</p>
	<p><b>Effect</b>: Increases mana regeneration based on Gems you own.</p>
	<p><b>Formula</b>: (log10(x) / 2), where x is Gems you own.</p>
	" coords="296,926,336,966" shape="rect">
		<area research="<p><b>A590</b> - For Undead,Drow</p>
	<p><b>Research Name</b>: Hexing</p>
	<p><b>Requirement</b>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.</p>
	<p><b>Formula</b>: (0.045 * x ^ 0.45 * p)%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.</p>
	" coords="338,926,378,966" shape="rect">
		<area research="<p><b>A1200</b> - For Neutral,Dragon</p>
	<p><b>Research Name</b>: Melting</p>
	<p><b>Hint</b>: Steel Stronghold.</p>
	<p><b>Requirement</b>: 5000 Iron Stronghold, Any Neutral Dragon</p>
	<p><b>Cost</b>: 5.195 Uvg (5.195e66)</p>
	<p><b>Effect</b>: Increase the production of all other buildings per Iron Strongholds owned by 0.35%</p>
	<p><b>Formula</b>: (0.35 * x)%, where x is Iron Strongholds owned.</p>
	" coords="380,926,420,966" shape="rect">
		<area research="<p><b>A1325</b> - For All Factions</p>
	<p><b>Research Name</b>: Calefaction</p>
	<p><b>Hint</b>: Excavate me out!</p>
	<p><b>Requirement</b>: 4500 Excavations (This R)</p>
	<p><b>Cost</b>: 144.9 Tvg (1.449e74)</p>
	<p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.</p>
	<p><b>Formula</b>: floor(0.02 * x), where x is current excavations.</p>
	" coords="2,968,42,1008" shape="rect">
		<area research="<p><b>A1500</b> - For Druid,Dragon</p>
	<p><b>Research Name</b>: Sublimation</p>
	<p><b>Hint</b>: How long required to achieve a Grand Balance?</p>
	<p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon</p>
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 250%.</p>
	<p><b>Formula</b>: (40 * x * 0.8), where x is Unique Buildings owned.</p>
	" coords="44,968,84,1008" shape="rect">
		<area research="<p><b>A2950</b> - For Mercenary</p>
	<p><b>Research Name</b>: Combination</p>
	<p><b>Hint</b>: Some lineage?</p>
	<p><b>Requirement</b>: All Lineages Level at 15.</p>
	<p><b>Cost</b>: 259 SxQig (2.59e173)</p>
	<p><b>Effect</b>: Select an additional bloodline.</p>
	<p><b>Effect</b>: You also gain the base effect of its respective Lineage.</p>
	<p><b>Effect</b>: Combination Bloodline effects R60/R115 power.</p>
	" coords="86,968,126,1008" shape="rect">
		<area research="<p><b>A3400</b> - For All Factions</p>
	<p><b>Research Name</b>: Chemistry</p>
	<p><b>Hint</b>: Get attracted to Faction Coins.</p>
	<p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) & (Manipulation S3200).</p>
	<p><b>Cost</b>: 894.5 QiQig (5.69e197)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.</p>
	<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 300%.</p>
	<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.</p>
	" coords="128,968,168,1008" shape="rect">
		<area research="<p><b>A5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Putrefaction</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Athanor artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the longest time spent without abdicating in this Reincarnation.</p>
	<p><b>Formula</b>: (0.7 x ^ 0.7), where x is the longest time spent without abdicating (This R).</p>
	" coords="170,968,210,1008" shape="rect">
		<area research="<p><b>A5375</b> - For Order</p>
	<p><b>Research Name</b>: Albedo</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Athanor artifact and upgrade.</p>
	<p><b>Effect</b>: Increase all spells duration based on spell casts in this game.</p>
	<p><b>Formula</b>: (ln(x) ^ 1.8), where x is spell casts this game.</p>
	" coords="212,968,252,1008" shape="rect">
		<area research="<p><b>A5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Reduction</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Athanor artifact and upgrade.</p>
	<p><b>Effect</b>: Reduce all spells cost based on their individual duration.</p>
	<p><b>Formula</b>: Additive reduction: ((x/y) ^ 0.65), where x is duration and y is base duration.</p>
	" coords="254,968,294,1008" shape="rect">
		<area research="<p><b>A5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Equivalence</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Athanor artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on Faction Coin found in this game.</p>
	<p><b>Formula</b>: (log10(x) ^ 1.5), where x is faction coins this game</p>
	" coords="296,968,336,1008" shape="rect">
		<area research="<p><b>A10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Toxicity</p>
	<p><b>Requirement</b>: R221+</p>
	<p><b>Effect</b>: Multiplicatively increase mana regeneration based on time spent with the faction opposite to your current one, in this Reincarnation.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is time spent with opposite-alignment faction this R.</p>
	<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively (therefore Druid counts Druid playtime itself).</p>
	" coords="338,968,378,1008" shape="rect">
		<area research="<p><b>A11125</b> - For All Factions</p>
	<p><b>Research Name</b>: Alkahest</p>
	<p><b>Requirement</b>: R223+</p>
	<p><b>Effect</b>: Clicks count more based on the amount of active spells.</p>
	<p><b>Formula</b>: (x ^ 1.5)%, where x is the amount of active spells.</p>
	" coords="380,968,420,1008" shape="rect">
		<area research="<p><b>A11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Azoth</p>
	<p><b>Requirement</b>: R225+</p>
	<p><b>Effect</b>: Increase clicking reward based on Mana regeneration.</p>
	<p><b>Formula</b>: (2 * log10(1 + x) ^ 2)%, where x is Mana regeneration.</p>
	" coords="2,1010,42,1050" shape="rect">
		<area research="<p><b>A11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Anima Mundi</p>
	<p><b>Requirement</b>: R227+</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coins found in this Reincarnation.</p>
	<p><b>Formula</b>: (0.4 * log10(1 + x) ^ 2)%, where x is Faction Coins found in this Reincarnation.</p>
	" coords="44,1010,84,1050" shape="rect">
		<area research="<p><b>A11875</b> - For All Factions</p>
	<p><b>Research Name</b>: Liquefaction</p>
	<p><b>Requirement</b>: R229+</p>
	<p><b>Effect</b>: Increase the production of the three highest building tiers based on Hellfire Blast activity time in this Reincarnation.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is Hellfire Blast activity time in this Reincarnation.</p>
	" coords="86,1010,126,1050" shape="rect">
		<area research="<p><b>A12250</b> - For All Factions</p>
	<p><b>Research Name</b>: Folgoration</p>
	<p><b>Requirement</b>: R232+</p>
	<p><b>Effect</b>: While both Diamond Pickaxe and God's Hand are active, multiplicatively increase Mana Regeneration and Faction Coin find chance based on the amount of Excavations made in this Reincarnation, including resets.</p>
	<p><b>Formula</b>: (15 + 1.75 * (x * y) ^ 0.75)%, where x is the amount of Excavations and y the amount of Excavation resets made in this Reincarnation respectively.</p>
	" coords="128,1010,168,1050" shape="rect">
		<area research="<p><b>A13125</b> - For All Factions</p>
	<p><b>Research Name</b>: Cinnabar</p>
	<p><b>Requirement</b>: R239+</p>
	<p><b>Effect</b>: All spells activity time counts more based on Tax Collection casts in this game.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the number of Tax Collections cast this game.</p>
	" coords="170,1010,210,1050" shape="rect">
		<area research="<p><b>A13500</b> - For All Factions</p>
	<p><b>Research Name</b>: Lunafaction</p>
	<p><b>Requirement</b>: R242+</p>
	<p><b>Effect</b>: All Balance spells can be cast up to 3 tier above their maximum. Increase Offline production based on time spent as Balance in this Reincarnation.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent as Balance this Reincarnation.</p>
	<p><b>Note</b>: All Creation can be cast up to Tier 5 (This research overrides Dragon Set 2). Moon Blessing, Goblin’s Greed and Grand Balance can be cast up to Tier 10. Infinite Spiral can be cast up to Tier 4.</p>
	" coords="212,1010,252,1050" shape="rect">
		<area research="<p><b>W1</b> - For Demon</p>
	<p><b>Research Name</b>: Assault</p>
	<p><b>Cost</b>: 750 Qag (7.50e125)</p>
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
	<p><b>Formula</b>: (30 * x ^ 0.7)%, where x is Hellfire Blasts Cast This Game.</p>
	" coords="86,1052,126,1092" shape="rect">
		<area research="<p><b>W10</b> - For Elf</p>
	<p><b>Research Name</b>: Dueling</p>
	<p><b>Hint</b>: Too many soldiers. More barracks!</p>
	<p><b>Requirement</b>: 2000 Warrior Barracks</p>
	<p><b>Cost</b>: 28.83 Uqag (2.883e127)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 90% per Elven Training Grounds you own.</p>
	" coords="128,1052,168,1092" shape="rect">
		<area research="<p><b>W25</b> - For Goblin</p>
	<p><b>Research Name</b>: War Funds</p>
	<p><b>Hint</b>: Get rich.</p>
	<p><b>Requirement</b>: 1 Tqag (1e132) Coins Gained (This Game)</p>
	<p><b>Cost</b>: 12.63 Dqag (1.263e130)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</p>
	<p><b>Formula</b>: round(5 * x ^ 0.6)%, where x is Tax Collections Cast This Game.</p>
	" coords="170,1052,210,1092" shape="rect">
		<area research="<p><b>W50</b> - For Undead</p>
	<p><b>Research Name</b>: Exertion</p>
	<p><b>Hint</b>: Bad times!</p>
	<p><b>Requirement</b>: 12 hours of Evil Play Time this R (Unlock as Demon)</p>
	<p><b>Cost</b>: 318.8 Tqag (3.188e134)</p>
	<p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.</p>
	<p><b>Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.</p>
	" coords="212,1052,252,1092" shape="rect">
		<area research="<p><b>W120</b> - For All Factions</p>
	<p><b>Research Name</b>: Betrayal</p>
	<p><b>Hint</b>: How big of an army can you muster?</p>
	<p><b>Requirement</b>: 250 base assistants</p>
	<p><b>Cost</b>: 676 Spqag (6.76e146)</p>
	<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of assistants you own.</p>
	<p><b>Formula</b>: round(1.5 * x^1.5)%, where x is the amount of assistants you own.</p>
	" coords="254,1052,294,1092" shape="rect">
		<area research="<p><b>W135</b> - For All Factions</p>
	<p><b>Research Name</b>: Rampage</p>
	<p><b>Hint</b>: Light up those cups!</p>
	<p><b>Requirement</b>: 580 Trophies (as Demon)</p>
	<p><b>Cost</b>: 296 Ocqag (9.6e149)</p>
	<p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.</p>
	<p><b>Formula</b>: floor(1.3 * x ^ 1.1), where x is the amount of trophies unlocked.</p>
	" coords="296,1052,336,1092" shape="rect">
		<area research="<p><b>W150</b> - For All Factions</p>
	<p><b>Research Name</b>: Invasion</p>
	<p><b>Requirement</b>: Research War Funds (W25) & Rampage (W135)</p>
	<p><b>Cost</b>: 129.6 Noqag (1.296e152)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.</p>
	<p><b>Formula</b>: round(32 * x ^ 0.75)%, where x is the amount of assistants you own.</p>
	" coords="338,1052,378,1092" shape="rect">
		<area research="<p><b>W175</b> - For Demon</p>
	<p><b>Research Name</b>: Overwhelm</p>
	<p><b>Requirement</b>: Research Assault (W1) & Invasion (W150)</p>
	<p><b>Cost</b>: 3.273 Uqig (3.273e156)</p>
	<p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.</p>
	<p><b>Formula</b>: (10 + x ^ 0.9), where x is the amount of evil spells cast.</p>
	" coords="380,1052,420,1092" shape="rect">
		<area research="<p><b>W180</b> - For All Factions</p>
	<p><b>Research Name</b>: Formation</p>
	<p><b>Requirement</b>: 1000 Call to Arms (This R), Research Dueling (W10) & Exertion (W50)</p>
	<p><b>Cost</b>: 24.85 Uqig (2.485e157)</p>
	<p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.</p>
	" coords="86,1094,126,1134" shape="rect">
		<area research="<p><b>W200</b> - For All Factions</p>
	<p><b>Research Name</b>: Crusade</p>
	<p><b>Requirement</b>: Research Hallowing (D50) & Formation (W180)</p>
	<p><b>Cost</b>: 82.65 Dqig (8.265e160)</p>
	<p><b>Effect</b>: Gain additional assistants based on time spent as Good this R.</p>
	<p><b>Formula</b>: floor(0.065 * x ^ 0.5), where x is your Time Spent Being Good (This R) stat.</p>
	" coords="128,1094,168,1134" shape="rect">
		<area research="<p><b>W205</b> - For All Evil Factions</p>
	<p><b>Research Name</b>: Berserking</p>
	<p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) & Retribution (D150)</p>
	<p><b>Cost</b>: 627.6 Dqig (6.276e161)</p>
	<p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.</p>
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.</p>
	<p><b>Formula</b>: floor(0.25 * x ^ 0.9), where x is your Assistants stat.</p>
	" coords="170,1094,210,1134" shape="rect">
		<area research="<p><b>W225</b> - For Angel</p>
	<p><b>Research Name</b>: Critical Strike</p>
	<p><b>Requirement</b>: Research Dueling (W10) & Transfixion (D55)</p>
	<p><b>Cost</b>: 2.087 Qaqig (2.087e165)</p>
	<p><b>Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this Reincarnation.</p>
	<p><b>Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light Active Time This Game in seconds.</p>
	" coords="212,1094,252,1134" shape="rect">
		<area research="<p><b>W250</b> - For All Factions</p>
	<p><b>Research Name</b>: Swarming</p>
	<p><b>Requirement</b>: Research Overwhelm (W175) & Berserking (W205)</p>
	<p><b>Cost</b>: 52.7 Qiqig (5.27e169)</p>
	<p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.</p>
	<p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.</p>
	" coords="254,1094,294,1134" shape="rect">
		<area research="<p><b>W260</b> - For Titan</p>
	<p><b>Research Name</b>: Athletics</p>
	<p><b>Hint</b>: Too many legends! Need more room!</p>
	<p><b>Requirement</b>: 3,000 Olympian Halls</p>
	<p><b>Cost</b>: 3.039 SxQig (3.039e171)</p>
	<p><b>Effect</b>: Increase the production of all other buildings by 100% per Olympian Hall you own.</p>
	" coords="296,1094,336,1134" shape="rect">
		<area research="<p><b>W275</b> - For Faceless</p>
	<p><b>Research Name</b>: Domination</p>
	<p><b>Hint</b>: How many people are required to throw a party?</p>
	<p><b>Requirement</b>: 300 Base Assistants (as Faceless)</p>
	<p><b>Cost</b>: 1.331 SpQig (1.331e174)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game (This R).</p>
	<p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.</p>
	<p><b>Formula</b>: (200 * x ^ 0.55), where x is your Assistants (Max) stat.</p>
	" coords="338,1094,378,1134" shape="rect">
		<area research="<p><b>W290</b> - For All Factions</p>
	<p><b>Research Name</b>: Entrench</p>
	<p><b>Hint</b>: Dig, dig, dig the hole.</p>
	<p><b>Requirement</b>: 2,000 Excavations</p>
	<p><b>Cost</b>: 582.7 SpQig (5.827e176)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of Excavations you made.</p>
	<p><b>Formula</b>: round(15 * x ^ 0.8)%, where x is the amount of excavations made.</p>
	" coords="380,1094,420,1134" shape="rect">
		<area research="<p><b>W320</b> - For All Factions</p>
	<p><b>Research Name</b>: Shattering</p>
	<p><b>Hint</b>: Down all the way.</p>
	<p><b>Requirement</b>: 2,650 Excavations</p>
	<p><b>Cost</b>: 1.117 NoQig (1.117e180)</p>
	<p><b>Effect</b>: Increase your clicking reward based on the amount of Excavations you made.</p>
	<p><b>Formula</b>: round(10 * x ^ 0.75)%, where x is the amount of excavations made.</p>
	" coords="2,1136,42,1176" shape="rect">
		<area research="<p><b>W330</b> - For All Factions</p>
	<p><b>Research Name</b>: Heroism</p>
	<p><b>Requirement</b>: Research Crusade (W200) & Athletics (W260).</p>
	<p><b>Cost</b>: 6.443 Sxg (6.443e183)</p>
	<p><b>Effect</b>: Increase your click reward based on the amount of trophies you unlocked.</p>
	<p><b>Formula</b>: round(2.5 * x)%, where x is the amount of trophies unlocked.</p>
	" coords="44,1136,84,1176" shape="rect">
		<area research="<p><b>W350</b> - For Druid</p>
	<p><b>Research Name</b>: Survival</p>
	<p><b>Requirement</b>: Research Creeping (A300) & Synthesis (A270).</p>
	<p><b>Cost</b>: 21.42 USxg (2.142e187)</p>
	<p><b>Effect</b>: Increase the production of all other buildings based on the production of your Stonehenge Circles.</p>
	<p><b>Formula</b>: (75 * (log10(1 + x)) ^ 1.3))%, where x is the production of your Stonehenge Circles.</p>
	" coords="86,1136,126,1176" shape="rect">
		<area research="<p><b>W400</b> - For All Factions</p>
	<p><b>Research Name</b>: Siege</p>
	<p><b>Requirement</b>: Research Architecture (C251) & Entrench (W290).</p>
	<p><b>Cost</b>: 13.66 QaSxg (1.366e196)</p>
	<p><b>Effect</b>: Each building in the three highest building tiers count as 2 buildings for all purposes.</p>
	" coords="128,1136,168,1176" shape="rect">
		<area research="<p><b>W405</b> - For Drow
	<p><b>Research Name</b>: Ambush</p>
	<p><b>Requirement</b>: Secrets of the Underworld (as Drow)</p>
	<p><b>Cost</b>: 103.7 QaSxg (1.037e197)</p>
	<p><b>Effect</b>: Increase the production of Spider Sanctuaries based on offline Bonus.</p>
	<p><b>Formula</b>: (3.25 * log10(1 + x) ^ 3.25)%, where x is offline production bonus multiplier.</p>
	<p><b>Note</b>: This research is treated as an A1 upgrade for A-nerf purposes.</p>
	" coords="170,1136,210,1176" shape="rect">
		<area research="<p><b>W520</b> - For Drow</p>
	<p><b>Research Name</b>: Stalking</p>
	<p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)</p>
	<p><b>Cost</b>: 18.47 Uspg (1.847e217)</p>
	<p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time (This Game).</p>
	" coords="212,1136,252,1176" shape="rect">
		<area research="<p><b>W525</b> - For Evil</p>
	<p><b>Research Name</b>: Bloodlust</p>
	<p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)</p>
	<p><b>Cost</b>: 140.2 USpg (1.402e218)</p>
	<p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.</p>
	<p><b>Formula</b>: (300 * floor(x ^ 0.3))%, where x is Faction Spells' Cast This Game.</p>
	" coords="254,1136,294,1176" shape="rect">
		<area research="<p><b>W560</b> - For Dwarf</p>
	<p><b>Research Name</b>: Resilience</p>
	<p><b>Requirement</b>: Research Eternity (D330) and Mercy (D480)</p>
	<p><b>Cost</b>: 204.2 TSpg (2.042e224)</p>
	<p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game.</p>
	<p><b>Formula</b>: (4 * x ^ 0.4)%, where x is your Treasure Clicks (This Game) stat.</p>
	" coords="296,1136,336,1176" shape="rect">
		<area research="<p><b>W590</b> - For Demon,Drow</p>
	<p><b>Research Name</b>: Torture</p>
	<p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)</p>
	<p><b>Cost</b>: 39.16 QiSpg (3.916e229)</p>
	<p><b>Effect</b>: Increase assistants production based on total time spent being Evil (This R). </p>
	<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Time Spent Being Evil stat.</p>
	" coords="338,1136,378,1176" shape="rect">
		<area research="<p><b>W1275</b> - For All Factions</p>
	<p><b>Research Name</b>: Authority</p>
	<p><b>Hint</b>: How long does your Call to Arms last?</p>
	<p><b>Requirement</b>: 43,200s (12 hours) Call to Arms Cast Time (This game).</p>
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)</p>
	<p><b>Effect</b>: Increase the duration of all spells based on Call to Arms activity time in this Reincarnation.</p>
	<p><b>Formula</b>:  (x ^ 0.5)%, where x is Call to Arms active time This Reincarnation in seconds.</p>
	" coords="380,1136,420,1176" shape="rect">
		<area research="<p><b>W1375</b> - For All Factions</p>
	<p><b>Research Name</b>: Scavenging</p>
	<p><b>Hint</b>: GUD? More like Evil.</p>
	<p><b>Requirement</b>: 7 days spent as evil (across all Reincarnations)</p>
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)</p>
	<p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.</p>
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (100 * x ^ 0.5), where x is assistants.</p>
	" coords="2,1178,42,1218" shape="rect">
		<area research="<p><b>W1400</b> - For Dragon</p>
	<p><b>Research Name</b>: Cataclysm</p>
	<p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon</p>
	<p><b>Cost</b>: 4.249 Qivg (4.249e78)</p>
	<p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.</p>
	<p><b>Formula</b>: +(650 * x ^ 0.35), where x is the amount of clicks made in this game.</p>
	" coords="44,1178,84,1218" shape="rect">
		<area research="<p><b>W3050</b> - For Mercenary</p>
	<p><b>Research Name</b>: Flanking</p>
	<p><b>Requirement</b>: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325).</p>
	<p><b>Cost</b>: 809 SpQig (8.09e176)</p>
	<p><b>Effect</b>: Increases the production of buildings one tier directly above or below a Unique Building based on the amount of assistants you own.</p>
	<p><b>Formula</b>: (2 * x ^ 0.8)%, where x is assistants.</p>
	" coords="86,1178,126,1218" shape="rect">
		<area research="<p><b>W3150</b> - For All Factions</p>
	<p><b>Research Name</b>: Upheaval</p>
	<p><b>Hint</b>: More of the baseline production buildings!</p>
	<p><b>Requirement</b>: 60000 Farms, Inns and Blacksmiths.</p>
	<p><b>Cost</b>: 731.6 NoQig (7.316e182)</p>
	<p><b>Effect</b>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.</p>
	<p><b>Formula</b>: (150 * (12 - T) ^ 2.15)%, where T is building tier.</p>
	" coords="128,1178,168,1218" shape="rect">
		<area research="<p><b>W5125</b> - For All Factions</p>
	<p><b>Research Name</b>: Sovereignty</p>
	<p><b>Requirement</b>: R175+, Forgotten Relic, Battlefield artifact and upgrade.</p>
	<p><b>Effect</b>: Increase the production of two highest tier buildings based on assistants you own.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.25)%, where x is assistants.</p>
	" coords="170,1178,210,1218" shape="rect">
		<area research="<p><b>W5375</b> - For Evil</p>
	<p><b>Research Name</b>: Officers</p>
	<p><b>Requirement</b>: R177+, Forgotten Relic, Battlefield artifact and upgrade.</p>
	<p><b>Effect</b>: Multiplactively increase assistants based on the amount of trophies unlocked.</p>
	<p><b>Formula</b>: (2.5 * x ^ 0.5), where x is trophies.</p>
	" coords="212,1178,252,1218" shape="rect">
		<area research="<p><b>W5625</b> - For All Factions</p>
	<p><b>Research Name</b>: Concealment</p>
	<p><b>Requirement</b>: R179+, Forgotten Relic, Battlefield artifact and upgrade.</p>
	<p><b>Effect</b>: Offline time counts more based on Mana Produced in this game.</p>
	<p><b>Effect</b>: (2 * ln(1 + x) ^ 2)%, where x is mana produced (This game).</p>
	" coords="254,1178,294,1218" shape="rect">
		<area research="<p><b>W5875</b> - For All Factions</p>
	<p><b>Research Name</b>: Patience</p>
	<p><b>Requirement</b>: R181+, Forgotten Relic, Battlefield artifact and upgrade.</p>
	<p><b>Effect</b>: Time spent with Prestige Counts 500% more.</p>
	<p><b>Effect</b>: Time spent with Elite factions Counts 1000% more.</p>
	" coords="296,1178,336,1218" shape="rect">
		<area research="<p><b>W10875</b> - For All Factions</p>
	<p><b>Research Name</b>: Revolution</p>
	<p><b>Requirement</b>: R221+</p>
	<p><b>Effect</b>: Gain assistants based on Royal Exchanges made.</p>
	<p><b>Formula</b>: +(x ^ 0.75), where x is royal exchanges made.</p>
	" coords="338,1178,378,1218" shape="rect">
		<area research="<p><b>W11125</b> - For All Factions</p>
	<p><b>Research Name</b>: Vengeance</p>
	<p><b>Requirement</b>: R223+</p>
	<p><b>Effect</b>: Increase Offline production based on the duration of your longest spell.</p>
	<p><b>Formula</b>: (5 + 1.5 * x ^ 0.5)%, where x is the duration of your longest spell.</p>
	" coords="380,1178,420,1218" shape="rect">
		<area research="<p><b>W11375</b> - For All Factions</p>
	<p><b>Research Name</b>: Pacifism</p>
	<p><b>Requirement</b>: R225+</p>
	<p><b>Effect</b>: Increase all spells durations based on time spent in this game.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent this game.</p>
	" coords="2,1220,42,1260" shape="rect">
		<area research="<p><b>W11625</b> - For All Factions</p>
	<p><b>Research Name</b>: Genocide</p>
	<p><b>Requirement</b>: R227+</p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent with the least used faction.</p>
	<p><b>Formula</b>: (50 + x ^ 0.85)%, where x is time spent with the least used faction this R in seconds.</p>
	" coords="44,1220,84,1260" shape="rect">
		<area research="<p><b>W11875</b> - For All Factions</p>
	<p><b>Research Name</b>: Scouting</p>
	<p><b>Requirement</b>: R229+</p>
	<p><b>Effect</b>: Buildings count more based on the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
	<p><b>Formula</b>: (x ^ 0.9)%, where x is the maximum amount of Grand Balance targets you had in this Reincarnation.</p>
	<p><b>Note</b>: Amount of targets can be seen at Druid Challenge Reward, but needs an active Grand Balance to update.</p>
	" coords="86,1220,126,1260" shape="rect">
		<area research="<p><b>W12250</b> - For All Factions</p>
	<p><b>Research Name</b>: Raiding</p>
	<p><b>Requirement</b>: R232+</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the highest Combo Strike counter you had in this Reincarnation.</p>
	<p><b>Formula</b>: (2.5 * x ^ 0.5)%, where x is the highest Combo Strike counter in this Reincarnation.</p>
	" coords="128,1220,168,1260" shape="rect">
		<area research="<p><b>W13125</b> - For All Factions</p>
	<p><b>Research Name</b>: Artillery</p>
	<p><b>Requirement</b>: R239+</p>
	<p><b>Effect</b>: Increase all spell duration based on the highest amount of spells cast in this Reincarnation.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest number of spells cast in a single run this Reincarnation.</p>
	" coords="170,1220,210,1260" shape="rect">
		<area research="<p><b>W13500</b> - For All Factions</p>
	<p><b>Research Name</b>: Backfire</p>
	<p><b>Requirement</b>: R242+</p>
	<p><b>Effect</b>: Increase the production of Evil buildings based on time spent as Good, the production of Chaos buildings based on time spent as Order, and the production of Chaos Evil buildings as the sum of time spent as Good and Order. Also increases the production of Good and Order buildings based on Evil and Chaos in the same way.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the respective time stat in seconds.</p>
	<p><b>Note</b>: Buildings only receive the highest effect (That is, if the building is Evil/Chaos, it only gets the Evil/Chaos bonus, not the Evil or the Chaos individual bonuses).</p>
	<p><b>Note</b>: The Good/Evil alignment of a building applies normally, while the Order/Chaos alignment of a building only applies to Base Faction's Unique Buildings (both UB1 and UB2) and Elite Unique Buildings</p>
	" coords="212,1220,254,1260" shape="rect">
		<area research="<p><b>F5250</b> - For All Factions</p>
	<p><b>Research Name</b>: Dreamwalking</p>
	<p><b>Requirement</b>: R176+, Forgotten Relic, Forbidden artifact and upgrade.</p>
	<p><b>Effect</b>: Increase Offline Bonus based on time spent offline in this Reincarnation.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is offline time (This R)</p>
	" coords="86,1262,126,1302" shape="rect">
		<area research="<p><b>F5500</b> - For All Factions</p>
	<p><b>Research Name</b>: Gathering</p>
	<p><b>Requirement</b>: R178+, Forgotten Relic, Forbidden artifact and upgrade.</p>
	<p><b>Effect</b>: Additively increase production bonus from Gems based on your Faction Coin find chance.</p>
	<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is faction coin find chance.</p>
	" coords="128,1262,168,1302" shape="rect">
		<area research="<p><b>F5750</b> - For All Factions</p>
	<p><b>Research Name</b>: Corruption</p>
	<p><b>Requirement</b>: R180+, Forgotten Relic, Forbidden artifact and upgrade.</p>
	<p><b>Effect</b>: Gain the base Union effect of your opposite Alignment.</p>
	<p><b>Note</b>: Only gain the effects of the Base Faction that matches both alignments. For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
	" coords="170,1262,210,1302" shape="rect">
		<area research="<p><b>F6000</b> - For All Factions</p>
	<p><b>Research Name</b>: Inevitability</p>
	<p><b>Requirement</b>: R182+, Forgotten Relic, Forbidden artifact and upgrade.</p>
	<p><b>Effect</b>: Increase your next time head start based on time spent in this game.</p>
	<p><b>Note</b>: Capped at time spent in your current Reincarnation.</p>
	<p><b>Note</b>: Does not count when  Reincarnating.</p>
	<p><b>Formula</b>: (x ^ 0.75), where x is time spent (This Game)</p>
	" coords="212,1262,252,1302" shape="rect">
		<area research="<p><b>F11000</b> - For All Factions</p>
	<p><b>Research Name</b>: Godslaying</p>
	<p><b>Requirement</b>: R222+</p>
	<p><b>Effect</b>: Active spells count more based on the sum of your Faction spells activity time.</p>
	<p><b>Formula</b>: (0.575 * x ^ 0.575)%, where x is your current faction(s)’ faction spell activity time this R in seconds.</p>
	" coords="254,1262,294,1302" shape="rect">
		<area research="<p><b>F11250</b> - For All Factions</p>
	<p><b>Research Name</b>: Inanity</p>
	<p><b>Requirement</b>: R224+</p>
	<p><b>Effect</b>: Excavations count more based on time spent offline in this game.</p>
	<p><b>Formula</b>: (0.9 * x ^ 0.45)%, where x is time spent offline this game.</p>
	" coords="296,1262,336,1302" shape="rect">
		<area research="<p><b>F11500</b> - For All Factions</p>
	<p><b>Research Name</b>: Paradox</p>
	<p><b>Requirement</b>: R226+</p>
	<p><b>Effect</b>: Gain the Set bonus of your opposite alignment.</p>
	<p><b>Note</b>: Only gain the effects of the Base Faction that matches both alignments. For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
	" coords="338,1262,378,1302" shape="rect">
		<area research="<p><b>F11750</b> - For All Factions</p>
	<p><b>Research Name</b>: Relativity</p>
	<p><b>Requirement</b>: R228+</p>
	<p><b>Effect</b>: You can purchase one Legacy of your choice for free.</p>
	<p><b>Note</b>: This will not increase the cost of the normal Legacy.</p>
	" coords="380,1262,420,1302" shape="rect">
		<area research="<p><b>F12000</b> - For All Factions</p>
	<p><b>Research Name</b>: Revelation</p>
	<p><b>Requirement</b>: R230+</p>
	<p><b>Effect</b>: Allows the purchase of one additional Legacy Combo upgrade.</p>
	" coords="86,1304,126,1344" shape="rect">
		<area research="<p><b>F12500</b> - For All Factions</p>
	<p><b>Research Name</b>: Avatars</p>
	<p><b>Requirement</b>: R234+</p>
	<p><b>Effect</b>: Multiplactively increase assistants based on the amount of different Factions in your Legacies.</p>
	<p><b>Formula</b>: (50 * x ^ 2.5)%, where x is the amount of different Factions in your Legacies.</p>
	" coords="128,1304,168,1344" shape="rect">
		<area research="<p><b>F13250</b> - For All Factions</p>
	<p><b>Research Name</b>: Taboo</p>
	<p><b>Requirement</b>: R240+</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of faction upgrades different than your own.</p>
	<p><b>Formula</b>: (1.2 * x ^ 1.2)%, where x is the number of faction upgrades you have that are not part of your faction.</p>
	<p><b>Note</b>: Faction upgrades in this instance refers to only the main 12 faction upgrades (that you get via Legacies). Lineage Perks, Advanced Heritages and such are not counted toward this research.</p>
	" coords="170,1304,210,1344" shape="rect">
		<area research="<p><b>F13750</b> - For All Factions</p>
	<p><b>Research Name</b>: The Unseen</p>
	<p><b>Requirement</b>: R244+</p>
	<p><b>Effect</b>: Increase Offline production based on the maximum amount of assistants you had in this Reincarnation.</p>
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2)%, where x is the highest number of assistants you had this Reincarnation.</p>
	" coords="212,1304,252,1344" shape="rect">
		<area research="Unlocked Upgrade (X): You cannot use this upgrade with the faction you are playing. (There is an option to hide these icons.)
	" coords="296,170,335,209" shape="rect">
		<area research="Locked Upgrade (? question mark): You cannot unlock this upgrade with the Faction you are playing.
	" coords="338,170,377,209" shape="rect">
		<area research="Locked Upgrade (! exclamation mark): You can unlock this upgrade with the Faction you are playing. The Icon tool-tip will show your unlock progress %.
	" coords="380,170,419,209" shape="rect">
</map>
<?php include "../scripts/footer.html"; ?>