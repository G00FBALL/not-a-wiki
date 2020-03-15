<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<?php include "../scripts/header.html"; ?>
</link>
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
            <th style="width:115px">Research Points</th>
            <th style="width:175px">Cost in Coins</th>
            <th style="width:175px">Recommended Gems</th>
            <th>Cost in Faction Coins</th>
        </tr>
        <tr class="calc">
            <td><input id="reinc" type="number" min="16" max="190" style="text-align: center; background-color: #b3bcc6;" value="16"></td>
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
			"190": {"RP": "7000 Maxed", "CoinSc": "4.051e174", "CoinSh": "4.051 Spqig", "FCSc": "2.829e39", "FCSh": "2.829 Dd", "GemsSc": "2.846e81", "GemsSh": "2.846 Sxvg"}
        };
        function CalcCost() {
            var reinc = parseInt($('#reinc').val());
			// Rather than duplicating 75 lines..
			if (reinc < 175 && reinc > 100) {
				reinc = 100;
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
<p><a href="http://musicfamily.org/realm/ResearchFacilities/"><b>Research Tree Mobile Text Version</b></a></p>
<br/>
<p><b> At Ascension 2 R100+ research points are capped at 5000.</b></p>
<p><b> At Ascension 3 R175+ research points are capped at 7000.</b></p>
<p><b>Research Point Production</b></p>
<p><b>Formula</b>: 100000 * (1 + 0.01 * x ^ 0.7), where x is RP total of facility affinities.</p>
<p><img src="http://musicfamily.org/realm/Factions/picks/ResearchTreeA3.png" usemap="#ResearchTreeA3-map">
    <map name="ResearchTreeA3-map">
        <area research="<center>Spellcraft Research Facility</center>
	<p>Delve into the arcane mysteries of Spellcraft, discovering new ways to produce and use mana.
	<p>Increases: Fairy, Faceless, and Drow production.
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="4,30,105,130" shape="rect">
        <area research="<center>Craftsmanship Research Facility</center>
	<p>Learn how to use tools and experience to improve your production by mastering Craftsmanship.
	<p>Increases Elven, Titan, and Dwarven production.
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="4,272,105,374" shape="rect">
        <area research="<center>Divine Research Facility</center>
	<p>Harness the power of the eternals, increasing your spell affinity and bestowing Divine power on all your productivity.
	<p>Increases Angel, Faceless, and Dwarven production.
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="3,514,105,615" shape="rect">
        <area research="<center>Economics Research Facility</center>
	<p>Exploit your resources with Economics knowledge, taking maximum advantage of your properties and turning time into money.
	<p>Increases Goblin, Druid, and Dwarven production.
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="2,748,106,852" shape="rect">
        <area research="<center>Alchemy Research Facility</center>
	<p>Tap the near-unlimited sources of Alchemy to improve your production and benefit from all your assets.
	<p>Increases Undead, Druid, and Drow production.
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="3,988,105,1090" shape="rect">
        <area research="<center>Warfare Research Facility</center>
	<p>Use strategical prowess and manpower to manipulate the production system in your favor.
	<p>Increases: Demon, Titan, and Drow production.
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="3,1229,106,1330" shape="rect">
        <area research="<center>Forbidden Research Facility</center>
	<p>Take advantage of the most ancient and secret arts to empower your production beyonds known limits.
	<p>Increases: Mercenary production
	<p>Pointing to this ingame will tell you how many Slots (R16-R159) / Points (R160+) are available also tells you your total research points.
	" coords="4,1463,105,1566" shape="rect">
        <area research="S1 - For Fairy
	<p><b>Research Name</b>: Enchanting
	<p><b>Cost</b>: 750 Qag (7.5E125)
	<p><b>Effect</b>: Increase the production of Enchanted Fields based on mana produced.
	<p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.
	" coords="113,27,161,77" shape="rect">
        <area research="S10 - For Angel
	<p><b>Research Name</b>: Channeling.
	<p><b>Requirement</b>: 2000 Heaven's Gate. (This Game)
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)
	<p><b>Effect</b>: Increase the production of all other buildings by 110% per Heaven's Domain you own.
	" coords="168,29,216,76" shape="rect">
        <area research="S30 - For All Factions
	<p><b>Research Name</b>: Vacuumancy
	<p><b>Requirement</b>: Have 4000 Mana. (This Game)
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)
	<p><b>Effect</b>: Increase maximum mana and mana regeneration rate based on time spent in this game.
	<p><b>Formula</b>: Max Mana:(0.1 * x), where x is your Playtime (This Game) stat in seconds.
	<p><b>Formula</b>: Mana Regeneration:(0.5 * x ^ 0.5), where x is your Playtime (This Game) stat in seconds.
	" coords="222,30,273,77" shape="rect">
        <area research="S50 - For Goblin
	<p><b>Research Name</b>: Conjuration
	<p><b>Requirement</b>: Have 6000 mana (as Fairy) (This Game)
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)
	<p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.
	<p><b>Formula</b>: floor((x / 600) ^ 0.9), where x is the number of Goblin Banks you own.
	" coords="279,29,326,75" shape="rect">
        <area research="S105 - For All Factions
	<p><b>Research Name</b>: Mysticism
	<p><b>Requirement</b>: 600 Researches (Total)
	<p><b>Cost</b>: 1.544 Spqag (1.544E144)
	<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.
	<p><b>Formula</b>: floor(x ^ 0.5), where x is number of researches made.
	" coords="334,30,381,76" shape="rect">
        <area research="S135 - For All Factions
	<p><b>Research Name</b>: Augmentation
	<p><b>Requirement</b>: 5000 Unique Buildings (as Fairy) (This Game)
	<p><b>Cost</b>: 296 Ocqag (2.96E149)
	<p><b>Effect</b>: Increase the production of Unique Buildings based on maximum mana.
	<p><b>Formula</b>: round(2 * x^0.8)%, where x is your maximum mana.
	" coords="387,30,436,76" shape="rect">
        <area research="S150 - For All Factions
	<p><b>Research Name</b>: Pyromancy
	<p><b>Requirement</b>: Research Inflame (D10) & Fusion (A105)
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)
	<p><b>Effect</b>: Increase the production of the two highest building tiers based on your mana regeneration.
	<p><b>Formula</b>: round(4 * x^1.3)%, where x is your Mana per Second stat.
	" coords="442,29,491,75" shape="rect">
        <area research="S175 - For Elf
	<p><b>Research Name</b>: Empowered Luck
	<p><b>Requirement</b>: Research Blessing (D1) & Augmentation (S135)
	<p><b>Cost</b>: 3.273 UQig (3.273E156)
	<p><b>Effect</b>: Increase production of buildings by 36,000% for 20 seconds each time you trigger Elven Luck and increase the chance to trigger it by 24%.
	" coords="497,29,546,76" shape="rect">
        <area research="S180 - For Fairy
	<p><b>Research Name</b>: Incantation
	<p><b>Requirement</b>: Research Enchanting (S1) & Mysticism (S105)
	<p><b>Cost</b>: 3.273 UQig (3.273E156)
	<p><b>Effect</b>: Increase mana regeneration based on the number of assistants you own.
	<p><b>Formula</b>: floor(16 * x ^ 0.6) / 10, where x is the number of assistants you have.
	" coords="113,84,161,131" shape="rect">
        <area research="S200 - For All Factions
	<p><b>Research Name</b>: Cryomancy
	<p><b>Requirement</b>: Research Conjuration (S50) and Refraction (A55)
	<p><b>Cost</b>: 82.65 DQig (8.265E160)
	<p><b>Effect</b>: Increase Spell Duration based on mana produced (this game).<p><b>Formula</b>: (5 * ln(x) ^ 1.25), where x is mana produced (this game).
	" coords="168,85,216,130" shape="rect">
        <area research="S215 - For All Factions
	<p><b>Research Name</b>: Projection
	<p><b>Requirement</b>: 300 Spiritual Surge (Total this R), Research Channeling (S10) & Incantation (S180)
	<p><b>Cost</b>: 36.16 TQig (3.616E163)
	<p><b>Effect</b>: While Spiritual Surge is active, increase the production of all buildings based on the amount of active spells.
	<p><b>Formula</b>: 100 * ((10 * x) ^ y), where x is active spells and y is Spiritual Surge tier.
	" coords="223,85,271,131" shape="rect">
        <area research="S225 - For Undead
	<p><b>Research Name</b>: Necromancy
	<p><b>Requirement</b>: Research Resurrection (D175) & Cryomancy (S200)
	<p><b>Cost</b>: 2.087 QaQig (2.087E165)
	<p><b>Effect</b>: Increase the production of assistants based on the amount of Necropolises you own.
	<p><b>Formula</b>: round(5 * x ^ 0.75)%, where x is the number of Necropolises you own.
	" coords="279,82,328,130" shape="rect">
        <area research="S250 - For All Factions
	<p><b>Research Name</b>: Aeromancy
	<p><b>Requirement</b>: Research Weather Control (D225) & Explosives (A150)
	<p><b>Cost</b>: 52 QiQig (5.27E169)
	<p><b>Effect</b>: Increase the production of Unique Buildings based on mana produced in this game.
	<p><b>Formula</b>: round(0.5 * x ^ 0.58)%, where x is your Mana Produced (This Game) stat.
	" coords="334,83,381,131" shape="rect">
        <area research="S251 - For Faceless
	<p><b>Research Name</b>: Assimilation
	<p><b>Requirement</b>: Secrets of the Ancients (as Faceless)
	<p><b>Cost</b>: 79.05 QiQig (7.905E169)
	<p><b>Effect</b>: Increase the production of Sunken Cities based on time spent affiliated with factions different than the Faceless.
	<p><b>Formula</b>: round(0.3 * x ^ 0.7)%, where x is total time spent as non-Faceless factions.
	" coords="388,84,436,131" shape="rect">
        <area research="S270 - For All Factions
	<p><b>Research Name</b>: Runecarving
	<p><b>Requirement</b>: 500,000 clicks (This game)
	<p><b>Cost</b>: 175.2 SxQig (1.752E173)
	<p><b>Effect</b>: Increase the production of all buildings based on your bonus from Gems.
	<p><b>Formula</b>: round(1.15 * x ^ 0.75)%, where x is your gem bonus.
	" coords="445,85,491,131" shape="rect">
        <area research="S300 - For Titan
	<p><b>Research Name</b>: Chain Lightning
	<p><b>Requirement</b>: 25 Brainwaves (Faceless) (This R)
	<p><b>Cost</b>: 33 OcQig (3.36E178)
	<p><b>Effect</b>: While Lightning Strike is active, all non-target buildings have their production increased based on the amount of Lightning Strikes cast in this game.
	<p><b>Formula</b>: round(120 * x ^ 0.8)%, where x is your Lightning Strikes cast (This Game) stat.
	" coords="497,83,546,131" shape="rect">
        <area research="S305 - For All Factions
	<p><b>Research Name</b>: Mesmerization
	<p><b>Requirement</b>: 2 days as Faceless (Total across all R)
	<p><b>Cost</b>: 225.2 OcQig (2.252E179)
	<p><b>Effect</b>: Increase the production of all buildings by a fraction of your Offline Production Bonus.
	<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5)%, where x is your (pre-Ascension) offline production bonus as a multiplier.
	" coords="2,139,51,186" shape="rect">
        <area research="S330 - For All Factions
	<p><b>Research Name</b>: Reverberation
	<p><b>Requirement</b>: Research Cryomancy (A200) & Weather Control (D225)
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)
	<p><b>Effect</b>: Increase the production of all buildings based on the number of active spells you have. You must have at least 3 active spells to generate a bonus.
	<p><b>Formula</b>: (3000 * 2 ^ (x - 3)), where x is the number of spells currently active. (Capped at 300 spells)
	" coords="57,139,105,186" shape="rect">
        <area research="S375 - For Faceless
	<p><b>Research Name</b>: Illusion
	<p><b>Requirement</b>: Research Reverberation (S330) & Mesmerization (S305)
	<p><b>Cost</b>: 541 DSxg (5.41E191)
	<p><b>Effect</b>: Brainwave also provides progressively more assistants over its duration.
	<p><b>Formula</b>: Floor(1.15 * (x + y) ^ 2), where x is brainwave runtime in minutes and y is headstart in minutes
	" coords="114,138,161,187" shape="rect">
        <area research="S400 - For All Factions
	<p><b>Research Name</b>: Capacity
	<p><b>Requirement</b>: Research Projection (S215) & Domination (W275)
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
	<p><b>Effect</b>: Increase maximum mana based on the highest amount of spells cast in a single game.
	<p><b>Formula</b>: (1.2 * log10(x) ^ 4.8), where x is your Spell Cast (Max) stat.
	" coords="169,138,217,186" shape="rect">
        <area research="S435 - For Drow
	<p><b>Research Name</b>: Spellbinding
	<p><b>Requirement</b>: 14400s (4 hour) Combo Strike Cast Time (This Game)
	<p><b>Cost</b>: 19.89 SxSxg (1.989e202)
	<p><b>Effect</b>: Passively grants the effects from Call to Arms while offline.
	" coords="224,139,273,188" shape="rect">
        <area research="S460 - For All Factions
	<p><b>Research Name</b>: Focus
	<p><b>Requirement</b>: 25000 spells cast (This game)
	<p><b>Cost</b>: 5.023 SpSxg (5,023E206)
	<p><b>Effect</b>: Increase the production of all buildings based on the times you cast your faction spell in this game.
	<p><b>Formula</b>: (15 * x ^ 0.8)%, where x is Faction Spells Cast This Game.
	" coords="279,140,327,186" shape="rect">
        <area research="S500 - For All Factions
	<p><b>Research Name</b>: Heirlooms
	<p><b>Requirement</b>: 40 Artifacts (as Drow)
	<p><b>Cost</b>: 5.554 Spg (5,554E213)
	<p><b>Effect</b>: Increase Maximum Mana and Mana Regeneration based on the amount of artifacts you own.
	<p>Maximum Mana Formula: (75 * x ^ 1.1), where x is amount of artifacts you own.
	<p>Mana Regeneration Formula: (5 * x ^ 1.05), where x is amount of artifacts you own.
	" coords="334,138,382,186" shape="rect">
        <area research="S545 - For All Factions
	<p><b>Research Name</b>: Hierarchy
	<p><b>Requirement</b>: 10M (1E7) mana produced (This Game)
	<p><b>Cost</b>: 466.3 DSpq (4.663E221)
	<p><b>Effect</b>: Increase the production of buildings based on mana produced in this game, depending on their tiers. Gives better bonuses for lower tiers.
	<p><b>Formula</b>: (0.1 * x ^ 0.45 * (12 - T) ^ 2)%, where x is Mana Produced (This Game) stat, and T is building tier.
	" coords="389,139,437,186" shape="rect">
        <area research="S590 - For Fairy,Dwarf
	<p><b>Research Name</b>: Trickery
	<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwairy) (This Game), Research Mysticism(S105) & Illusion (S375)
	<p><b>Cost</b>: 39.16 QiSpg (3.916E229)
	<p><b>Effect</b>: Increase the production of Neutral buildings based on maximum Mana.
	<p><b>Formula</b>: (0.5 * x ^ 1.05)%, where x is Maximum Mana.
	" coords="444,139,493,189" shape="rect">
        <area research="S1275 - For All Factions
	<p><b>Research Name</b>: Sequence
	<p><b>Requirement</b>: 60,000 spells cast (This Game).
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)
	<p><b>Effect</b>: Reduce spell cost for higher spell tiers.
	<p><b>Formula</b>: Reduces cost multiplier by 0.5; with no other reductions applying, the multiplier will be 1.5 instead of 2.</p>
	" coords="499,139,547,186" shape="rect">
        <area research="S1450 - For Neutral,Dragon
	<p><b>Research Name</b>: Spellstorm
	<p><b>Requirement</b>: Research S435, C1325, Any Neutral, Dragon
	<p><b>Cost</b>: 4.041 Sxvg (4.041e81)
	<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of active spells.
	<p><b>Formula</b>: (50 * x ^ 1.5)%, where x is number of active spells, counting tiers.</p>
	" coords="3,193,50,241" shape="rect">
        <area research="S1500 - For Faceless,Dragon
	<p><b>Research Name</b>: Psionics
	<p><b>Requirement</b>: 1000 Base Assistants, Research S545, E1325, as Faceless, Dragon
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)
	<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of assistants you own.
	<p><b>Formula</b>: (8.5 * x ^ 0.85)%, where x is assistants.</p>
	" coords="58,194,105,241" shape="rect">
        <area research="S2875 - For Mercenary
	<p><b>Research Name</b>: Scholarship
	<p><b>Requirement</b>: 11000 Merc Unique Buildings.
	<p><b>Cost</b>: 30.5 QaQig (3.05e166)
	<p>Effect</b>: Increases the production of Non-Unique buildings by 5% per Unique building.
	" coords="113,193,162,240" shape="rect">
        <area research="S3200 - For All Factions
	<p><b>Research Name</b>: Manipulation
	<p><b>Requirement</b>: 1B (1e9) Tax Collections (This R), (Calefaction A1325) and (Psionics S1500).
	<p><b>Cost</b>: 695.7 Sxg (6.957e185)
	<p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (Share Benefits tiers also count).
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 1200%.
	" coords="168,193,216,240" shape="rect">
        <area research="S5125 - For All Factions
	<p><b>Research Name</b>: Spilling
	<p><b>Requirement</b>: R175+, Forgotten Relic, Mana Loom artifact and upgrade
	<p>Effect</b>: Increase the production of buildings affected by at least 3 spells based on Mana Produced.
	<p><b>Formula</b>: (2 * ln(1 + x) ^ 2), where x is mana produced (This Game)
	" coords="224,193,273,240" shape="rect">
        <area research="S5375 - For Chaos
	<p><b>Research Name</b>: Invocation
	<p><b>Requirement</b>: R177+, Forgotten Relic, Mana Loom artifact and upgrade
	<p><b>Effect</b>: Increase Maximum Mana additively and multiplicatively based on the activity time of your least used spell.
    <p><b>Additive</b>: (1000 + 80 * x ^ 0.8), where x is spell activity time in seconds.</p>
    <p><b>Multiplicative</b>: (0.6 * x ^ 0.6), where x is spell activity time in seconds.</p>
	" coords="277,194,327,241" shape="rect">
        <area research="S5625 - For All Factions
	<p><b>Research Name</b>: Leylines
	<p><b>Requirement</b>: R179+, Forgotten Relic, Mana Loom artifact and upgrade
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on assistants owned.
	<p><b>Formula</b>: (0.65 * x ^ 0.35), where x is assistants
	" coords="332,194,382,241" shape="rect">
        <area research="S5875 - For All Factions
	<p><b>Research Name</b>: Mirrors
	<p><b>Requirement</b>: R181+, Forgotten Relic, Mana Loom artifact and upgrade
	<p><b>Effect</b>: Multiplicatively increase Assistants based on Spell casts in this game.
	<p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game
	" coords="389,192,436,241" shape="rect">
        <area research="C1 - For Elf
	<p><b>Research Name</b>: Dummy Targets
	<p><b>Cost</b>: 750 Qag (7.5E125)
	<p><b>Effect</b>: Increase Elven Training Grounds production based on the amount of Faction Coins you found.
	<p><b>Formula</b>: round(1.3 * ln ^3 (1 + x))%, where x is your Faction Coins Gained (This Game) stat.
	" coords="112,272,162,322" shape="rect">
        <area research="C10 - For Fairy
	<p><b>Research Name</b>: Cultivation
	<p><b>Requirement</b>: 2500 Farms
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)
	<p><b>Effect</b>: Increases production of Blacksmith and Inn by 60% per Enchanted field that you have.
	" coords="167,272,216,320" shape="rect">
        <area research="C25 - For Angel
	<p><b>Research Name</b>: Light Condenser
	<p><b>Requirement</b>: 12,000 Spells cast (This R)
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)
	<p><b>Effect</b>: Increase mana regeneration based on the amount of spells cast.
	<p><b>Formula</b>: floor(10 * x^0.3) / 10, where x is your Spells Cast (This Game) stat.
	" coords="221,271,273,320" shape="rect">
        <area research="C50 - For Demon
	<p><b>Research Name</b>: Refining
	<p><b>Requirement</b>: 1 B (1E9) Faction Coins (as Elf)
	<p><b>Cost</b>: 318.8 Tgag (3.188E134)
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this Game.
	<p><b>Formula</b>: round(0.8 * ln^3(1 + x))%, where x is your Demon Coins Gained (This Game) stat.
	" coords="278,271,328,320" shape="rect">
        <area research="C80 - For All Factions
	<p><b>Research Name</b>: Apprenticeship
	<p><b>Requirement</b>: 16,000 Good and Evil buildings
	<p><b>Cost</b>: 61.13 Qiqag (6.113E139)
	<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of Good and Evil buildings.
	<p><b>Formula</b>: round(x^0.8)%, where x is the number of Good and Evil Buildings you own.
	" coords="333,270,383,320" shape="rect">
        <area research="C105 - For All Factions
	<p><b>Research Name</b>: Woodcraft
	<p><b>Requirement</b>: 25,000 clicks (This Game)
	<p><b>Cost</b>: 1.544 Spqag (1.544E144)
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.
	<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.
	" coords="389,272,437,320" shape="rect">
        <area research="C120 - For All Factions
	<p><b>Research Name</b>: Socketing
	<p><b>Requirement</b>: 200,000 clicks (This Game)
	<p><b>Cost</b>: 676 Spqag (6.76E146)
	<p><b>Effect</b>: Increase clicking reward based on the amount of gems you own.
	<p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.
	" coords="443,271,490,319" shape="rect">
        <area research="C135 - For All Factions
	<p><b>Research Name</b>: Reinforcing
	<p><b>Requirement</b>: 250,000 clicks (This Game, as Elf)
	<p><b>Cost</b>: 296 Ocqag (2.96E149)
	<p><b>Effect</b>: Increase the production of all buildings based on your total number of clicks.
	<p><b>Formula</b>: (ln(1 + x) ^ 2.75)%, where x is your Treasure Clicks (Total) stat.
	" coords="499,271,547,320" shape="rect">
        <area research="C150 - For All Factions
	<p><b>Research Name</b>: Tinkering
	<p><b>Requirement</b>: Research Recycling (E10) & Reinforcing (C135)
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of total research points bought.
	<p><b>Formula</b>: round(125 * x ^ 0.38)%, where x is number of total research points bought.
	" coords="112,326,161,375" shape="rect">
        <area research="C175 - For Goblin
	<p><b>Research Name</b>: Gemcutting
	<p><b>Requirement</b>: Research Refining (C50) & Socketing (C120)
	<p><b>Cost</b>: 3.273 Uqig (3.273E156)
	<p><b>Effect</b>: Increase the production bonus from gems based on the number of buildings you own.
	<p><b>Formula</b>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.
	" coords="168,327,215,374" shape="rect">
        <area research="C200 - For All Factions
	<p><b>Research Name</b>: Journeymen
	<p><b>Requirement</b>: Research Apprenticeship (C80) & Bartering (E50).
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)
	<p><b>Effect</b>: Increase the production of Unique Buildings based on total time spent as that faction.
	<p><b>Formula</b>: round(0.125 * x ^ 0.7)%, where x is your Time Spent as that faction stat.
	" coords="224,327,271,375" shape="rect">
        <area research="C225 - For Elf
	<p><b>Research Name</b>: Automatons
	<p><b>Requirement</b>: Research Dummy Targets (C1) & Vivification (A120).
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)
	<p><b>Effect</b>: Each Elven Training Grounds counts as 200 buildings for Call to Arms purposes.
	" coords="278,326,327,375" shape="rect">
        <area research="C250 - For All Factions
	<p><b>Research Name</b>: Magnetism
	<p><b>Requirement</b>: Research Tinkering (C150) & Critical Strike (W225).
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
	<p><b>Effect</b>: Increase the chance to find Faction Coins by a multiplicative 50%
	<p><b>Effect</b>: Increase the chance to find faction coins based on total time spent offline. (in minutes)
	<p><b>Formula</b>: floor(7.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.
	" coords="333,326,383,375" shape="rect">
        <area research="C251 - For Titan
	<p><b>Research Name</b>: Architecture
	<p><b>Requirement</b>: Secrets of the Ancients (as Titan)
	<p><b>Cost</b>: 79.05 QiQig (79.05E168)
	<p><b>Effect</b>: Increase the production of Olympian Halls based on the amount of buildings you own.
	<p><b>Formula</b>: round(0.5 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.
	" coords="387,327,436,376" shape="rect">
        <area research="C300 - For Druid
	<p><b>Research Name</b>: Weighting
	<p><b>Requirement</b>: 650 Lightning Strikes (This R)
	<p><b>Cost</b>: 33.6 OcQig (33.6E177)
	<p><b>Effect</b>: While Grand Balance hits Stone Pillars, increase its production by 2000%.
	<p><b>Effect</b>: Also increase the production of every Grand Balance target based on maximum mana.
	<p><b>Formula</b>: 10 * (2.15 * log10(1 + x)) ^ 1.75) ^ y), where x is your maximum mana and y is spell tier.
	" coords="444,327,492,376" shape="rect">
        <area research="C305 - For All Factions
	<p><b>Research Name</b>: Golemcraft
	<p><b>Requirement</b>: 2 days as Titans (Total across all R)
	<p><b>Cost</b>: 255.2 OcQig (2.552E179)
	<p><b>Effect</b>: Gain additional assistants based on your total time spent offline (in hours).
	<p><b>Formula</b>: floor(0.85 * (x / 60) ^ 0.85), where x is your Time Spent Offline(this R).
	" coords="499,327,547,375" shape="rect">
        <area research="C330 - For All Factions
	<p><b>Research Name</b>: Overload
	<p><b>Requirement</b>: Research Aeromancy (S250) & Critical Strike (W225)
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)
	<p><b>Effect</b>: Increase mana regeneration based on the amount of research made.
	<p><b>Formula</b>: (3.5 *  x  ^0.35), where x is researches made.
	" coords="3,383,51,429" shape="rect">
        <area research="C340 - For All Factions
	<p><b>Research Name</b>: Gem Duster
	<p><b>Requirement</b>: 800 Gem Grinders (This R),Research Sifting (E260) & Surveyorship (E290)
	<p><b>Cost</b>: 371.5 Sxg (3.715E185)
	<p><b>Effect</b>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative)
	<p><b>Formula</b>: floor(10 * x), where x is your Rubies Gained (All Time) stat.
	" coords="57,381,105,429" shape="rect">
        <area research="C375 - For Titan
	<p><b>Research Name</b>: Lightning Rod
	<p><b>Requirement</b>: Research Chain Lightning (S300) & Overload (C330)
	<p><b>Cost</b>: 541 DSxg (5.41E191)
	<p><b>Effect</b>: Olympian Halls are always hit by Lightning Strike in addition to the primary target. Olympian Halls can no longer be a primary target.
	" coords="113,381,161,430" shape="rect">
        <area research="C400 - For All Factions
	<p><b>Research Name</b>: Gravitation
	<p><b>Requirement</b>: Research Magnetism (C250) & Weighting (C300)
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.
	<p><b>Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 100%.
	<p><b>Formula</b>: floor(3.5 * ln(x + 1) ^ 3), where x is your Faction Coins Gained (This Game) stat.
	" coords="166,383,216,429" shape="rect">
        <area research="C405 - For Dwarf
	<p><b>Research Name</b>: Metallurgy
	<p><b>Requirement</b>: Secrets of the Underworld (as Dwarf)
	<p><b>Cost</b>: 103.7 QaSxg (1.037E197)
	<p><b>Effect</b>: Increase the production of Dwarven Forges based on the Dwarven Forges you own.
	<p><b>Formula</b>: (45 * x ^ 0.825)%, where x is the number of Dwarven Forges you own.
	" coords="222,383,273,431" shape="rect">
        <area research="C460 - For All Factions
	<p><b>Research Name</b>: Distribution
	<p><b>Requirement</b>: 1M Clicks (This game)
	<p><b>Cost</b>: 502.3 SpSxg (5.023E206)
	<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of clicks you made in this game.
	<p><b>Formula</b>: (35 * x ^ 0.5)%, where x is your Treasure Clicks (This Game) stat.
	" coords="278,382,326,430" shape="rect">
        <area research="C500 - For All Factions
	<p><b>Research Name</b>: Minecrafting
	<p><b>Requirement</b>: 3250 excavations (as Dwarf)
	<p><b>Cost</b>: 5.554Spg (5.554E213)
	<p><b>Effect</b>: Increases production bonus from gems based on the amount of excavations you made.
	<p><b>Formula</b>: (3 * x ^ 0.35)%, where x is the amount of Excavations you made.
	" coords="333,383,381,430" shape="rect">
        <area research="C520 - For Dwarf
	<p><b>Research Name</b>: Blacksmithing
	<p><b>Requirement</b>: Research Reinforcing (C135) & Metallurgy (C405)
	<p><b>Cost</b>: 18.47 USpg (1.847E217)
	<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarven Forges you own.
	<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarven Forges you own.
	<p><b>Formula</b>: Clicking Reward: (2.5 * x^0.3)%, where x is the number of Dwarven Forges you own.
	<p><b>Formula</b>: Diamond Pickaxe: (20 * x^0.4)%, where x is the number of Dwarven Forges you own.
	" coords="387,383,437,431" shape="rect">
        <area research="C590 - For Elf,Dwarf
	<p><b>Research Name</b>: Alloys
	<p><b>Requirement</b>: 200 Dwarf Exchanges (as Dwelf), Research Fusion(A105) and Blacksmithing(C520)
	<p><b>Cost</b>: 39.16 QiSpg (3.916E229)
	<p><b>Effect</b>: Increase clicking reward based on your chance to find Faction Coins, (if your FC chance is 10k%, this will be 10k%).
	<p><b>Effect</b>: Autoclicks the treasure 10 times per second.
	" coords="442,381,492,431" shape="rect">
        <area research="C1300 - For Neutral,Dragon
	<p><b>Research Name</b>: Scintillation
	<p><b>Requirement</b>: 30000 Max Mana, as any Neutral,Dragon (This game)
	<p><b>Cost</b>: 4.698 Tvg (4.698e72)
	<p><b>Effect</b>: Increase production of buildings based on max mana and additive gem bonus. (Higher boost for lower gem bonus.)
	<p><b>Formula</b>: ((250 * x ^ 0.5) / y ^ 0.95), where x is max mana and y is total additive gem bonus.
	" coords="499,382,548,431" shape="rect">
        <area research="C1325 - For All Factions
	<p><b>Research Name</b>: Plasmation
	<p><b>Requirement</b>: 50m (5e7) Mana Produced (This game)
	<p><b>Cost</b>: 144.9 Tvg (1.449e74)
	<p><b>Effect</b>: Gain assistants based on mana produced in this game.
	<p><b>Formula</b>: floor(1.25 * ln(1 + x) ^ 2.25), where x is mana produced (this game).
	" coords="3,437,50,484" shape="rect">
        <area research="C1500 - For Titan,Dragon
	<p><b>Research Name</b>: Gargantuaness
	<p><b>Requirement</b>: 2500 Royal Exchanges Research E460, D1275 (As Titan, Dragon)
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)
	<p><b>Effect</b>: Increase the production of all buildings based on total time spent as Neutral.
	<p><b>Formula</b>: (1.5 * x) ^ 0.7, where x is neutral time (this R) in minutes.
	" coords="57,437,105,485" shape="rect">
        <area research="C3000 - For Mercenary
	<p><b>Research Name</b>: Customizing
	<p><b>Requirement</b>: 9000 Excavations as Mercenary.
	<p><b>Cost</b>: 850.7 SxQig (8.507e173)
	<p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.
	<p><b>Formula</b>: (2 * x ^ 2), where X is artifacts you own.
	" coords="113,435,160,484" shape="rect">
        <area research="C3100 - All Factions
	<p><b>Research Name</b>: Engineering
	<p><b>Requirement</b>: 15 days Mercenary time spent (Across all R's).
	<p><b>Cost</b>: 769.3 OcQig (7.693e179)
	<p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).
	<p><b>Formula</b>: (65 * x ^ 0.35), where x is clicks made.
	" coords="168,438,218,484" shape="rect">
        <area research="C5125 - For All Factions
    <p><b>Research Name</b>: Restauration
	<p><b>Requirement</b>: R175+, Forgotten Relic, Factory artifact and upgrade
	<p><b>Effect</b>: Increase the production of all buildings based on assistants owned.
	<p><b>Formula</b>: (0.5 * x ^ 0.25), where x is assistants owned.
	" coords="224,436,272,484" shape="rect">
        <area research="C5375 - For Neutral
	<p><b>Research Name</b>: Manufacture
	<p><b>Requirement</b>: R177+, Forgotten Relic, Factory artifact and upgrade
	<p><b>Effect</b>: Increase Faction Coin Find Chance additively and multiplicatively based on Clicks made in this game.
    <p><b>Formulas</b></p>
    <p><b>Additive</b>: (6 * x ^ 0.6),  where x is clicks in this game</p>
    <p><b>Multiplicative</b>: (x ^ 0.35), where x is clicks in this game</p>
	" coords="278,437,326,485" shape="rect">
        <area research="C5625 - For All Factions
	<p><b>Research Name</b>: Discovery
	<p><b>Requirement</b>: R179+, Forgotten Relic, Factory artifact and upgrade
	<p><b>Effect</b>: Trophies and Artifacts count more based on excavations, including resets made in this game.
	<p><b>Formula</b>: (0.25 * (x * (y + 1)) ^ 0.5), where x is excavations (This R) and y is excavation resets (This Game).
	" coords="334,437,383,485" shape="rect">
        <area research="C5875 - For All Factions
	<p><b>Research Name</b>: Genuineness
	<p><b>Requirement</b>: R181+, Forgotten Relic, Factory artifact and upgrade
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on lowest Lineage level.
	<p><b>Formula</b>: (50 + 1.5 * x ^ 0.95), where x is the lowest lineage.
	" coords="388,436,436,485" shape="rect">
        <area research="D1 - For Angel
	<p><b>Research Name</b>: Blessing
	<p><b>Cost</b>: 750 Qag (7.50E125)
	<p><b>Effect</b>: Increase the production of Heaven's Domains based on total time spent with at least one active spell.
	<p><b>Formula</b>: round(2.5 * x ^ 0.8)%, where x is total time spent with at least one active spell.
	" coords="112,512,162,562" shape="rect">
        <area research="D10 - For Demon
	<p><b>Research Name</b>: Inflame
	<p><b>Requirement</b>: 2,000 Infernal Realms
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)
	<p><b>Effect</b>: Increase the production of all other buildings by 110% per Infernal Realm you own.
	" coords="167,513,217,562" shape="rect">
        <area research="D25 - For Undead
	<p><b>Research Name</b>: Cursing
	<p><b>Requirement</b>: Play 8 hours Offline (as Undead) (This Game)
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)
	<p><b>Effect</b>: Increase the production of all buildings based on your offline production bonus.
	<p><b>Formula</b>: (2.75 * log10(1 + x) ^ 2.75)%, where x is your offline production bonus multiplier.
	" coords="222,513,272,563" shape="rect">
        <area research="D50 - For Elf
	<p><b>Research Name</b>: Hallowing
	<p><b>Requirement</b>: 15,000 Good Buildings(as Angel)
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)
	<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.
	<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Elven Training Grounds you own.
	" coords="279,513,327,561" shape="rect">
        <area research="D55 - For All Factions
	<p><b>Research Name</b>: Transfixion
	<p><b>Requirement</b>: Produce 3 M (3E6) Mana (This Game)
	<p><b>Cost</b>: 2.421 Qaqag (2.421E135)
	<p><b>Effect</b>: Increase clicking reward based on spell cast in this game.
	<p><b>Formula</b>: round(3.5 * x ^ 0.8)%, where x is your Spells Cast (This Game) stat.
	" coords="333,512,381,560" shape="rect">
        <area research="D135 - For All Factions
	<p><b>Research Name</b>: Illumination
	<p><b>Requirement</b>: 250 m/s Mana Regen(as Angel)
	<p><b>Cost</b>: 296 Ocqag (2.96E149)
	<p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own.
	<p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10), where x is amount of gems you own.
	" coords="389,513,436,560" shape="rect">
        <area research="D150 - For All Factions
	<p><b>Research Name</b>: Retribution
	<p><b>Requirement</b>: Research Betrayal (W120) & Transfixion (D55).
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)
	<p><b>Effect</b>: Increase chance to find faction coins based on the amount of total research points bought.
	<p><b>Formula</b>: floor(x ^ 1.25), where x is the amount of total research points bought.
	" coords="444,513,492,562" shape="rect">
        <area research="D175 - For Angel
	<p><b>Research Name</b>: Resurrection
	<p><b>Requirement</b>: Research Blessing (D1) & Refraction (A55)
	<p><b>Cost</b>: 3.273 Uqig (3.273E156)
	<p><b>Effect</b>: You gain additional assistants based on God's Hands activity time. (This R)
	<p><b>Formula</b>: floor(1.5 * x ^ 0.75), where x is God's Hands Cast Time Activity (This R).
	" coords="496,512,546,561" shape="rect">
        <area research="D200 - For All Factions
	<p><b>Research Name</b>: Transcendence
	<p><b>Requirement</b>: Research Resurrection (D175) & Illumination (D135)
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)
	<p><b>Effect</b>: Decrease the cost of all spells by 20% and increase their duration by 20%.
	" coords="113,567,161,615" shape="rect">
        <area research="D205 - For All Good Factions
	<p><b>Research Name</b>: Communion
	<p><b>Requirement</b>: 777 Holy Lights (Total this R),Research Gemcutting (C175) & Illumination (D135)
	<p><b>Cost</b>: 627.6 Dqig (6.276E161)
	<p><b>Effect</b>: Increase Holy Light duration by 300 seconds.
	" coords="168,567,217,616" shape="rect">
        <area research="D225 - For Fairy
	<p><b>Research Name</b>: Weather Control
	<p><b>Requirement</b>: Research Light Condenser (C25) & Vacuumancy (S30)
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)
	<p><b>Effect</b>: Increase the production of Enchanted Fields based on maximum mana.
	<p><b>Formula</b>: floor(2.25 * x ^ 0.8)%, where x is your maximum mana.
	" coords="223,568,271,617" shape="rect">
        <area research="D245 - For All Factions
	<p><b>Research Name</b>: Sanctification
	<p><b>Requirement</b>: 500 Spiritual Surge (Total this R), Research Soulweaving (A175) & Necromancy (S225)
	<p><b>Cost</b>: 6.94Qiqig (6.94E168)
	<p><b>Effect</b>: Increase the production of Unique Buildings based on the amount of Non-Unique Buildings you own.
	<p><b>Formula</b>: (2.5 * x ^ 0.55), where x is the amount of Non-Unique Buildings you own.
	" coords="279,566,326,615" shape="rect">
        <area research="D250 - For All Factions
	<p><b>Research Name</b>: Demonology
	<p><b>Requirement</b>: Research Transcendence (D200) & Pyromancy (S150)
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
	<p><b>Effect</b>: Gain additional assistants based on the amount of Faction Coins found in this game.
	<p><b>Formula</b>: floor(ln(1 + x) ^ 1.5), where x is your Faction Coins Gained (This Game) stat.
	" coords="334,567,382,615" shape="rect">
        <area research="D260 - For Faceless
	<p><b>Research Name</b>: Mutation
	<p><b>Requirement</b>: 3,000 Sunken Cities
	<p><b>Cost</b>: 3.039 SxQig (3.039E171)
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Sunken Cities you own.
	" coords="388,567,436,615" shape="rect">
        <area research="D275 - For Druid
	<p><b>Research Name</b>: Meditation
	<p><b>Requirement</b>: Have 10,000 Mana (as Druid)
	<p><b>Cost</b>: 1.331 SpQig (1.331E174)
	<p><b>Effect</b>: Increase mana regeneration based on your current mana.
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.
	<p><b>Formula</b>: (0.35 * x ^0.35 + 0.035 * log(x) ^3.5), where x is max mana.
	" coords="444,568,493,615" shape="rect">
        <area research="D290 - For All Factions
	<p><b>Research Name</b>: Transubstantiation
	<p><b>Requirement</b>: 1 Rough Stone Artifact
	<p><b>Cost</b>: 582.7 SpQig (5.827E176)
	<p><b>Effect</b>: Each artifact you discover increases Maximum Mana additively and multiplicatively.
	<p><b>Additive Formula</b>: (50 * x ^1.1), where x is the number of artifacts found.
	<p><b>Multiplicative Formula</b>: (0.45 * x ^ 1.1), where x is the number of artifacts found.
	" coords="499,567,546,616" shape="rect">
        <area research="D320 - For All Factions
	<p><b>Research Name</b>: Deliverance
	<p><b>Requirement</b>: 350 m/s Mana Regen
	<p><b>Cost</b>: 1.117 NoQig (1.117E180)
	<p><b>Effect</b>: Increase assistants production based on mana regeneration.
	<p><b>Formula</b>: round(20 * x ^ 0.85)%, where x is your Mana per Second stat.
	" coords="3,622,50,670" shape="rect">
        <area research="D330 - For All Factions
	<p><b>Research Name</b>: Eternity
	<p><b>Requirement</b>: Research Offering (E275) & Deliverance (D320)
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)
	<p><b>Effect</b>: Double the duration of all faction spells.
	" coords="57,622,105,671" shape="rect">
        <area research="D350 - For Titan
	<p><b>Research Name</b>: Descent
	<p><b>Requirement</b>: Research Swarming (W250) & Heroism (W330)
	<p><b>Cost</b>: 21.42 USxg (2.142E187)
	<p><b>Effect</b>: Gain additional assistants based on the amount of Olympian Halls you own.
	<p><b>Formula</b>: floor(x ^ 0.5)%, where x is the number of Olympian Halls you own.
	" coords="113,622,161,669" shape="rect">
        <area research="D400 - For All Factions
	<p><b>Research Name</b>: Miracle
	<p><b>Requirement</b>: Research Communion (D205) & Transubstantiation (D290)
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
	<p><b>Effect</b>: Increase the Production of a random building by x250. Target changes every 2 minutes. While offline, increase the production of all buildings by x75.
	" coords="168,622,216,671" shape="rect">
        <area research="D435 - For Dwarf
	<p><b>Research Name</b>: Devotion
	<p><b>Requirement</b>: 14400s (4 hour) Diamond Pickaxe Cast Time (This Game)
	<p><b>Cost</b>: 19.89 SxSxg (1.989E202)
	<p><b>Effect</b>: Increase the production of Good buildings based on spells cast in this game.
	<p><b>Formula</b>: (2.5 * x ^ 0.85)%, where x is your Spells Cast (This Game) stat.
	" coords="223,621,273,670" shape="rect">
        <area research="D480 - For All Factions
	<p><b>Research Name</b>: Mercy
	<p><b>Requirement</b>: 12h Spent as each Good, Evil and Neutral alignment (This R)
	<p><b>Cost</b>: 1.67 NoSxg (1.67E210)
	<p><b>Effect</b>: Increase the production of all buildings based on the difference in time spent with the three alignments. A smaller difference produces a higher bonus.
	<p><b>Formula</b>: (100000 * (tmin / tmax) ^ 1.5)%, where tmin is shortest Time Spent Being Alignment and tmax is longest Time Spent Being Alignment (Total) Stat.
	" coords="278,620,327,669" shape="rect">
        <area research="D525 - For Good
	<p><b>Research Name</b>: Purity
	<p><b>Requirement</b>: 1d12h as Good (This R), Research Communion (D205) and Devotion (D435)
	<p><b>Cost</b>: 140.2 USpg (1.402E218)
	<p><b>Effect</b>: Increase Holy Light multiplier based on the amount of times you cast your faction spell in this game.
	<p><b>Formula</b>: (300 * x ^ 0.3)%, where x is your Faction Spells' Cast This Game stat.
	" coords="333,622,384,671" shape="rect">
        <area research="D560 - For Drow
	<p><b>Research Name</b>: Ritualism
	<p><b>Requirement</b>: Research Necromancy(S225) and Heirlooms(S500)(as drow)
	<p><b>Cost</b>: 204.2 TSpq (2.042E224)
	<p><b>Effect</b>: Increase mana regeneration based on the amount of trophies you unlocked.
	<p><b>Formula</b>: (floor(0.7 * x) / 10), where x is the amount of Trophies Unlocked.
	" coords="388,621,436,671" shape="rect">
        <area research="D590 - For Angel,Dwarf
	<p><b>Research Name</b>: Dispelling
	<p><b>Requirement</b>: 200 Dwarf Exchanges as Dwangel, Research Shattering (W320) and Waste (A480)
	<p><b>Cost</b>: 39.16 QiSpg (3.916E229)
	<p><b>Effect</b>: Increase the production of Unique buildings based on mana regeneration.
	<p><b>Formula</b>: (2.5 x ^ 1.25)%, where x is your Mana per Second stat.
	" coords="441,623,491,670" shape="rect">
        <area research="D1125 - For Neutral,Dragon
	<p><b>Research Name</b>: Oblation<p><b>Requirement</b>: Any Neutral,Build Dragons' Unique Building
	<p><b>Cost</b>: 177.2 Nod (1.772e62)
	<p><b>Effect</b>: Increase the production of Wyrm's Den based on Faction Coin find chance.
	<p><b>Formula</b>: 1.55*x^0.55, where x is Faction Coin find chance in percent.
	" coords="499,622,547,669" shape="rect">
        <area research="D1275 - For All Factions
	<p><b>Research Name</b>: Solemnity
	<p><b>Requirement</b>: 100000 Total Buildings
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)
	<p><b>Effect</b>: Increase the production of each building by +0.3% per building of the same type.
	" coords="4,676,52,722" shape="rect">
        <area research="D1375 - For All Factions
	<p><b>Research Name</b>: Soulrending
	<p><b>Requirement</b>: 604800s 7 days spent as good (Across all Rs)
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)
	<p><b>Effect</b>: Ascensions count 50% more for Spiritual Surge.
	" coords="57,677,105,723" shape="rect">
        <area research="D2775 - For Mercenary
	<p><b>Research Name</b>: Intervention
	<p><b>Requirement</b>: Secrets of the Warriors.
	<p><b>Cost</b>: 33.73 DQig (3.373e160)
	<p><b>Effect</b>: Increases the production of Unique Building based on time spent with Mercenaries.
	<p><b>Formula</b>: (10 * x ^ 0.7)%, where x is time spent with Mercenary.
	" coords="113,676,163,723" shape="rect">
        <area research="D3350 - For All Factions
	<p><b>Research Name</b>: Vampirism
	<p><b>Requirement</b>: 100 Sp% (1e26%) offline bonus, (Intervention D2775) and (Upheaval W3150).
	<p><b>Cost</b>: 598.3 TSxg (5.983e194)
	<p><b>Effect</b>: Increase assistants additively and multiplicatively based on your Offline Bonus.</p>
	<p><b>Additive Formula</b>: (3.25 * log10(1 + x) ^ 2.25), where x is your Offline Bonus.
	<p><b>Multiplicative Formula</b>: (0.05 * log10(1 + x) ^ 2), where x is your Offline Bonus.
	" coords="168,676,217,724" shape="rect">
        <area research="D5125 - For All Factions
	<p><b>Research Name</b>: Selection
	<p><b>Requirement</b>: R175+, Forgotten Relic, Mythos artifact and upgrade
	<p><b>Effect</b>: Increase the production of Unique buildings based on Clicks in this game.
	<p><b>Formula</b>: (x ^ 0.4), where x is clicks this game.
	" coords="223,676,271,724" shape="rect">
        <area research="D5375 - For Good
	<p><b>Research Name</b>: Zealotry
	<p><b>Requirement</b>: R177+, Forgotten Relic, Mythos artifact and upgrade
	<p><b>Effect</b>: Multiplicatively increase Mana Regeneration based on Royal Exchanges purchased in this game.
	<p><b>Formula</b>: (0.75 * x ^ 0.75), where x is royal exchanges this game
	" coords="278,676,328,724" shape="rect">
        <area research="D5625 - For All Factions
	<p><b>Research Name</b>: Prophecy
	<p><b>Requirement</b>: R179+, Forgotten Relic, Mythos artifact and upgrade
	<p><b>Effect</b>: Empowers the effects of your faction's Set based on time spent with your least used faction. Lineage levels count more, by the same amount, for your faction’s Advanced Heritage.
	<p><b>Formula</b>: (0.3 * x ^ 0.7), where x is your least spent faction time.
	" coords="334,676,382,723" shape="rect">
        <area research="D5875 - For All Factions
	<p><b>Research Name</b>: Birthright
	<p><b>Requirement</b>: R181+, Forgotten Relic, Mythos artifact and upgrade
	<p><b>Effect</b>: Gain the Bloodline effects of your least used non-mercenary faction. Based on time (This R), can give any vanilla, prestige or elite bloodline.
	" coords="388,673,436,723" shape="rect">
        <area research="E1 - For Goblin
	<p><b>Research Name</b>: Coinage
	<p><b>Cost</b>: 750 Qag (7.50E125)
	<p><b>Effect</b>: Increase the production of Goblin Banks based on the amount of buildings you own.
	<p><b>Formula</b>: round(0.8 * x ^ 0.8)%, where x is your Buildings Owned (This Game) stat.
	" coords="114,748,161,798" shape="rect">
        <area research="E10 - For Undead
	<p><b>Research Name</b>: Recycling
	<p><b>Requirement</b>: 2,000 Undercities
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Undercity you own.
	" coords="168,748,217,797" shape="rect">
        <area research="E25 - For Elf
	<p><b>Research Name</b>: Commerce
	<p><b>Requirement</b>: 100 M (1E8) Faction Coins (Found this Game)
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)
	<p><b>Effect</b>: Gain additional assistants based on the amount of Royal Exchanges you purchased.
	<p><b>Formula</b>: floor((1 + 6 * x) ^ 0.5 - 1), where x is your Royal Exchanges Made stat.
	" coords="223,747,271,796" shape="rect">
        <area research="E30 - For All Factions
	<p><b>Research Name</b>: Diplomacy
	<p><b>Requirement</b>: 1000 Exchanges (This Game)
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)
	<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.
	<p><b>Formula</b>: Faction Coin Chance: floor(1.5 * x ^ 1.05)%
	<p><b>Formula</b>: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).
	" coords="278,748,327,796" shape="rect">
        <area research="E50 - For Fairy
	<p><b>Research Name</b>: Bartering
	<p><b>Requirement</b>: 1,000 Exchanges(as Goblin)
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)
	<p><b>Effect</b>: Reduce Enchanted Field cost multiplier. Reduces cost multiplier by 0.035; with no other reductions applying, the multiplier will be 1.115 instead of 1.15.
	" coords="333,748,382,797" shape="rect">
        <area research="E80 - For All Factions
	<p><b>Research Name</b>: Common Business
	<p><b>Requirement</b>: 9,000 Neutral Buildings
	<p><b>Cost</b>: 61.13 Qiqag (6.113E139)
	<p><b>Effect</b>: Increase the production of Good and Evil buildings based on the amount of neutral buildings.
	<p><b>Formula</b>: round((1.75 * x) ^ 0.8)%, where x is the number of neutral buildings you own.
	" coords="389,749,438,796" shape="rect">
        <area research="E135 - For All Factions
	<p><b>Research Name</b>: Bribing
	<p><b>Requirement</b>: 28,000 Total Buildings(as Goblin)
	<p><b>Cost</b>: 296 Ocqag (2.96E149)
	<p><b>Effect</b>: Reduce the building cost multiplier for Unique Buildings. Reduces cost multiplier by 0.02; with no other reductions applying, the multiplier will be 1.13 instead of 1.15.
	" coords="444,749,491,796" shape="rect">
        <area research="E145 - For All Factions
	<p><b>Research Name</b>: Royal Demand
	<p><b>Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) & Woodcraft (C105)
	<p><b>Cost</b>: 17.07 Noqag (1.707E151)
	<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.
	" coords="498,747,547,796" shape="rect">
        <area research="E150 - For All Factions
	<p><b>Research Name</b>: Investment
	<p><b>Requirement</b>: Research Bribing (E135) & Commerce (E25)
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of coins you own.
	<p><b>Formula</b>: round(ln(1 + x) ^ 1.25)%, where x is the amount of gold you own.
	" coords="114,802,163,852" shape="rect">
        <area research="E200 - For All Factions
	<p><b>Research Name</b>: Acquisition
	<p><b>Requirement</b>: Research Investment (E150)  Common Business (E80)
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)
	<p><b>Effect</b>: Increase the production of all buildings based on your percentage of trophies unlocked.
	<p><b>Formula</b>: round(0.0003 * (100 * x) ^ 3.35), where x is trophies unlocked / max trophies.
	" coords="167,804,216,851" shape="rect">
        <area research="E225 - For Goblin
	<p><b>Research Name</b>: Forgery
	<p><b>Requirement</b>: Research Coinage (E1) & Gilding (A50)
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)
	<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.
	<p><b>Formula</b>: round(10 * x ^ 0.85)%, where x is the number of Goblin Banks you own.
	" coords="224,804,272,853" shape="rect">
        <area research="E230 - For Demon
	<p><b>Research Name</b>: Coercion
	<p><b>Requirement</b>: Research Exertion (W50) & Diplomacy (E30)
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)
	<p><b>Effect</b>: Increases trophy count based on time spent as Evil this R.
	<p><b>Formula</b>: (0.25 * x ^ 0.5), where x is time spent as Evil this R.
	" coords="278,804,327,851" shape="rect">
        <area research="E250 - For All Factions
	<p><b>Research Name</b>: Trade Routes
	<p><b>Requirement</b>: Research Forgery (E225) & Royal Demand (E145)
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
	<p><b>Effect</b>: Increase mana regeneration based on the amount of Royal Exchanges you purchased.
	<p><b>Formula</b>: floor(10 * x ^ 0.55) / 10, where x is your Royal Exchanges Made stat.
	" coords="334,802,382,850" shape="rect">
        <area research="E260 - For Druid
	<p><b>Research Name</b>: Sifting
	<p><b>Requirement</b>: 3,000 Stonehenge Circles
	<p><b>Cost</b>: 3.039 SxQig (3.039E171)
	<p><b>Effect</b>: Increase the production of all other buildings based on the amount of Stone Pillars you own.
	<p><b>Formula</b>: (100 * x), where x is Stone Pillars
	" coords="390,804,437,851" shape="rect">
        <area research="E275 - For Titan
	<p><b>Research Name</b>: Offering
	<p><b>Requirement</b>: 1,250 Royal Exchanges(as Titans)
	<p><b>Cost</b>: 175.2 SxQig (1.752E173)
	<p><b>Effect</b>: Increase mana regeneration based on your Royal Exchange Bonus.
	<p><b>Formula</b>: (x ^ 0.95), where x is your Royal Exchange Bonus.
	" coords="443,804,491,851" shape="rect">
        <area research="E290 - For All Factions
	<p><b>Research Name</b>: Surveyorship
	<p><b>Requirement</b>: 7 Artifacts
	<p><b>Cost</b>: 582.7 SpQig (5.827E176)
	<p><b>Effect</b>: Reduces Excavation cost multiplier by 0.025; with no other reductions applying, the multiplier will be 1.175 instead of 1.2.
	" coords="499,804,547,852" shape="rect">
        <area research="E320 - For All Factions
	<p><b>Research Name</b>: Smuggling
	<p><b>Requirement</b>: Have 2x Gems in Abdication Treasury
	<p><b>Cost</b>: 1.117 NoQig (1.117E180)
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings owned.
	<p><b>Effect</b>: Also increase FC chance find chance by a multiplicative 100%.
	<p><b>Formula</b>: 5 * x ^ 0.9, where x is Unique Building owned
	" coords="3,857,51,906" shape="rect">
        <area research="E330 - For All Factions
	<p><b>Research Name</b>: Collection
	<p><b>Requirement</b>: Research Acquisition (E200) & Forgery (E225)
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of artifacts you found.
	<p><b>Formula</b>: round(50 * x ^ 1.1)%, where x is the amount of artifacts found.
	" coords="57,858,107,907" shape="rect">
        <area research="E350 - For Faceless
	<p><b>Research Name</b>: Repurpose
	<p><b>Requirement</b>: Research Journeymen (C200) & Adaptation (A330)(as Faceless)
	<p><b>Cost</b>: 21.42 USxg (2.142E187)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Reincarnations you made.
	<p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.
	" coords="112,859,161,907" shape="rect">
        <area research="E400 - For All Factions
	<p><b>Research Name</b>: Conversion
	<p><b>Requirement</b>: Research Philosopher's Stone (A250) & Repurpose (E350).
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
	<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus.
	<p><b>Formula</b>: (0.85 * floor(x ^ 0.85))%, where x is your Royal Exchange Bonus.
	" coords="169,858,217,906" shape="rect">
        <area research="E410 - For Dwarf
	<p><b>Research Name</b>: Marketing
	<p><b>Requirement</b>: 5000 Blacksmiths
	<p><b>Cost</b>: 787.7 QaSxg (7.877E197)
	<p><b>Effect</b>: Increase production of all other buildings by 85% per Dwarven Forge you own.
	" coords="224,857,272,907" shape="rect">
        <area research="E460 - For All Factions
	<p><b>Research Name</b>: Inflation
	<p><b>Requirement</b>: 100B (1E11) Faction Coins (Found this Game)
	<p><b>Cost</b>: 502.3 SpSxg (5.023E206)
	<p><b>Effect</b>: Increase Royal Exchange Bonus based on the amount of Faction Coins found in this game.
	<p><b>Formula</b>: floor(3.5 * log10(1 + x))%, where x is your Faction Coins Gained (This Game) stat.
	" coords="279,858,328,907" shape="rect">
        <area research="E480 - For All Factions
	<p><b>Research Name</b>: Undercutting
	<p><b>Requirement</b>: 15000 max mana
	<p><b>Cost</b>: 1.67 NoSxg (1.67E210)
	<p><b>Effect</b>: Increase the production of non-unique buildings based on total spells cast.
	<p><b>Formula</b>: (0.65 * x ^ 0.65)%, where x is your Spells Cast (Total) stat.
	" coords="333,858,384,906" shape="rect">
        <area research="E495 - For Drow
	<p><b>Research Name</b>: Jewellery
	<p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf)
	<p><b>Cost</b>: 731.4 NoSxg (7.314E212)
	<p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own.
	<p><b>Formula</b>: (0.06 * x ^ 0.8)%, where x is the number of Spider Sanctuaries you own.
	" coords="388,858,437,906" shape="rect">
        <area research="E590 - For Goblin,Drow
	<p><b>Research Name</b>: Slavery
	<p><b>Requirement</b>: 200 Drow Exchanges as Droblin, Research Automatons(C225) and Undercutting(E480)
	<p><b>Cost</b>: 39.16 QiSpg (3.916 E229)
	<p><b>Effect</b>: Gain additional assistants based on the amount of Non-Unique buildings you own.
	<p><b>Formula</b>: (0.1 * x ^ 0.8), where x is the number of Non Unique Buildings you own.
	" coords="442,859,492,906" shape="rect">
        <area research="E1225 - For Neutral,Dragon
	<p><b>Research Name</b>: Hoarding
	<p><b>Requirement</b>: 1T (1E12) Faction coins (Found this game)
	<p><b>Cost</b>: 160.2 Uvg (1.602e68)
	<p><b>Effect</b>: Removes 1 Ascension penalty for Royal Exchanges.
	" coords="498,858,548,906" shape="rect">
        <area research="E1325 - For All Factions
	<p><b>Research Name</b>: Intimidation
	<p><b>Requirement</b>: 18000 Unique Buildings
	<p><b>Cost</b>: 144.9 Tvg (1.449e74)
	<p><b>Effect</b>: Reduce Royal Exchange cost multiplier.
	<p><b>Formula</b>: Reduces multiplier by 0.025; with no other reductions applying, base multiplier is 1.1
	" coords="3,914,51,960" shape="rect">
        <area research="E1425 - For All Neutral Factions
	<p><b>Research Name</b>: Rarity
	<p><b>Requirement</b>: 5 days playtime each with Titan, Druid and Faceless, Research A545, C1300
	<p><b>Cost</b>: 131 Qivg (1.31e80)
	<p><b>Effect</b>: Increase Gem Grinder bonus based on the amount of artifacts you found.
	<p><b>Formula</b>: (1.25 * x ^ 1.25), where x is artifacts found.
	" coords="57,913,105,960" shape="rect">
        <area research="E3250 - For All
	<p><b>Research Name</b>: Hirelings
	<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).</p>
	<p><b>Cost</b>: 661.6 USxg (6.616e188)</p>
	<p><b>Effect</b>: Gives assistants based on the amount of coins you own.</p>
	<p><b>Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is amount of coins you own.</p>
	" coords="113,914,161,960" shape="rect">
        <area research="E3300 - For Mercenary
	<p><b>Research Name</b>: Estates
	<p><b>Requirement</b>: 45000 Unique buildings, (Hoarding E1225) and (Combination A2950).</p>
	<p><b>Cost</b>: 629.2 DSxg (6.292e191)</p>
	<p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.
	<p><b>Effect</b>: Ascension 3: Gain all the Unique Buildings that match your alignments.</p>
	" coords="169,913,216,960" shape="rect">
        <area research="E5125 - For All Factions
	<p><b>Research Name</b>: Decentralization
	<p><b>Requirement</b>: R175+, Forgotten Relic, Vault artifact and upgrade
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of buildings you own. Lower tiers get better bonuses.
	<p><b>Formula</b>: ((6 - 0.5 * T) ^ 2 * x ^ 0.85), where T is building tier and x is the number of (every) buildings you own
	" coords="224,913,272,960" shape="rect">
        <area research="E5375 - For Balance
	<p><b>Research Name</b>: Whipround
	<p><b>Requirement</b>: R177+, Forgotten Relic, Vault artifact and upgrade
	<p><b>Effect</b>: Increase Royal Exchange bonus additively and multiplicatively based on Tax Collections cast in this game.
    <p><b>Formulas</b></p>
    <p><b>Additive</b>: (x ^ 0.2), where x is tax collections (This game)</p>
    <p><b>Multiplicative</b>: (0.85 * x ^ 0.15), where x is tax collections (This game)</p>
	" coords="278,913,327,960" shape="rect">
        <area research="E5625 - For All Factions
	<p><b>Research Name</b>: Loan Sharking
	<p><b>Requirement</b>: R179+, Forgotten Relic, Vault artifact and upgrade
	<p><b>Effect</b>: Tax Collection is worth more based on Gold owned.
	<p><b>Formula</b>: (log10(1 + x) ^ 1.8), where x is your current gold
	" coords="334,912,382,959" shape="rect">
        <area research="E5875 - For All Factions
	<p><b>Research Name</b>: Prosperity
	<p><b>Requirement</b>: R181+, Forgotten Relic, Vault artifact and upgrade
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on your faction spell activity in this game.
	<p><b>Formula</b>: (0.4 * x ^ 0.4), where x is your least used faction spell (This game)
	<p>Note: Only checks the base faction spell of your faction(s). On mercs, scales off Share Benefits and the two chosen Faction Spells.
	" coords="388,911,436,961" shape="rect">
        <area research="A1 - For Undead
	<p><b>Research Name</b>: Plague
	<p><b>Cost</b>: 750 Qag (7.50E125)
	<p><b>Effect</b>: Increase the production of Undercities by 8% per assistant you own.
	" coords="113,990,163,1037" shape="rect">
        <area research="A10 - For Goblin
	<p><b>Research Name</b>: Transmutation
	<p><b>Requirement</b>: 2250 Goblin Banks
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)
	<p><b>Effect</b>: Increase the production of all other buildings by 85% per Goblin Bank you own.
	" coords="168,989,217,1037" shape="rect">
        <area research="A25 - For Demon
	<p><b>Research Name</b>: Deflagration
	<p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)
	<p><b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and increases its effect by 1000%.
	" coords="223,988,273,1036" shape="rect">
        <area research="A30 - For Fairy
	<p><b>Research Name</b>: Delayed Reaction
	<p><b>Requirement</b>: 750 Fairy Chanting (Total this R)
	<p><b>Cost</b>: 95.88 Dqag (9.588E130)
	<p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.
	<p><b>Formula</b>: Additive Production increase: floor(1000 * t ^ 1.5), where t is how long FC has been active in seconds.
	<p><b>Formula</b>: Duration increase: floor(x / 800) ^ 0.8) seconds, where x is the number of Farms, Inns, and Blacksmiths you own.
	" coords="278,987,326,1036" shape="rect">
        <area research="A50 - For Angel
	<p><b>Research Name</b>: Gilding
	<p><b>Requirement</b>: 120 m/s Mana Regen(as Undead)
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)
	<p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate.
	<p><b>Formula</b>: (1.45 * x ^ 0.45), where x is the number of Heaven's Domains you own.
	" coords="332,987,381,1037" shape="rect">
        <area research="A55 - For All Factions
	<p><b>Research Name</b>: Refraction
	<p><b>Requirement</b>: Cast 25000 spells (This Game)
	<p><b>Cost</b>: 2.421 Qaqag (2.421E135)
	<p><b>Effect</b>: Improve offline production based on spells cast.
	<p><b>Formula</b>: round(5 * x ^ 0.85), where x is your Spells Cast (Total) stat.
	" coords="388,990,437,1037" shape="rect">
        <area research="A105 - For All Factions
	<p><b>Research Name</b>: Fusion
	<p><b>Requirement</b>: 2750 Blacksmiths
	<p><b>Cost</b>: 1.544 Spqag (1.544E144)
	<p><b>Effect</b>: Increases the production of buildings based on the amount of Faction Coins found this game.
	<p><b>Formula</b>: round(0.7 * ln ^ 3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.
	" coords="444,990,493,1037" shape="rect">
        <area research="A120 - For All Factions
	<p><b>Research Name</b>: Vivification
	<p><b>Requirement</b>: Have 6500 mana
	<p><b>Cost</b>: 676 Spqag (6.76E146)
	<p><b>Effect</b>: Gain additional assistants based on max mana.
	<p><b>Formula</b>: floor((x / 15) ^ 0.825), where x is your maximum mana.
	" coords="499,989,548,1036" shape="rect">
        <area research="A135 - For All Factions
	<p><b>Research Name</b>: Decay
	<p><b>Requirement</b>: 1 Day Total Play Time any Faction (This R) (Must be Undead to unlock once condition is met.)
	<p><b>Cost</b>: 296 OcQag (9.6E149)
	<p><b>Effect</b>: Increase the production of all buildings based on time spent in this Reincarnation.
	<p><b>Formula</b>: (0.03 * (2x) ^ 0.7)%, where x is time spent in this Reincarnation in seconds.
	" coords="113,1043,161,1091" shape="rect">
        <area research="A150 - For All Factions
	<p><b>Research Name</b>: Explosives
	<p><b>Requirement</b>: Research (A25) Deflagration & (A30) Delayed Reaction
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)
	<p><b>Effect</b>: Whenever you cast a spell, increase the production of your most productive building based on the amount of mana produced in this game for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.
	<p><b>Formula</b>: round(0.7 * x ^ 0.6)%, where x is your Mana Produced (Total) stat.
	" coords="168,1043,218,1091" shape="rect">
        <area research="A175 - For Undead
	<p><b>Research Name</b>: Soulweaving
	<p><b>Requirement</b>: Research Cursing (D25) & Reinforcing (C135)
	<p><b>Cost</b>: 3.273 Uqig (3.273E156)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you Reincarnated.
	<p><b>Formula</b>: round(2.5 * x ^ 2.25)%, where x is the amount of times you reincarnated.
	" coords="224,1045,273,1091" shape="rect">
        <area research="A200 - For All Factions
	<p><b>Research Name</b>: Corrosion
	<p><b>Requirement</b>: Research Plague (A1) & Decay (A135)
	<p><b>Cost</b>: 82.65 Dqig (82.65E160)
	<p><b>Effect</b>: Increase clicking reward based on time spent in this game.
	<p><b>Formula</b>: (0.07 * (2x) ^ 0.75)%, where x is your Playtime (This Game) in seconds..
	" coords="279,1043,328,1091" shape="rect">
        <area research="A250 - For All Factions
	<p><b>Research Name</b>: Philosopher's Stone
	<p><b>Requirement</b>: Research Transmutation (A10) & Empowered Luck (S175)
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
	<p><b>Effect</b>: Increase production bonus from gems based on the amount of research made.
	<p><b>Formula</b>: floor(x ^ 0.9 / 25)%, where x is the amount of research made.
	" coords="333,1042,382,1091" shape="rect">
        <area research="A251 - For Druid
	<p><b>Research Name</b>: Infusion
	<p><b>Requirement</b>: Secrets of the Ancients (as Druids)
	<p><b>Cost</b>: 79.05 QiQig (7.905E169)
	<p><b>Effect</b>: Increase the production of Stonehenge Circles based on mana produced in this game.
	<p><b>Formula</b>: round(0.75 * x ^ 0.6)%, where x is your Mana Produced (This Game) stat.
	" coords="389,1044,436,1091" shape="rect">
        <area research="A270 - For All Factions
	<p><b>Research Name</b>: Synthesis
	<p><b>Requirement</b>: 20 B (2E10) Faction Coins (Found this game)
	<p><b>Cost</b>: 175.2 SxQig (1.752E173)
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Faction Coins found in this game.
	<p><b>Formula</b>: (1.25 * ln(1 + x) ^ 1.25), where x is Factions Coins found (this game).
	" coords="443,1043,491,1091" shape="rect">
        <area research="A300 - For Faceless
	<p><b>Research Name</b>: Creeping
	<p><b>Requirement</b>: Produce 5M mana (This game, as Druid)
	<p><b>Cost</b>: 33 OcQig (3.36E178)
	<p><b>Effect</b>: Increase mana regeneration based on mana produced in this game.
	<p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.
	" coords="498,1044,547,1091" shape="rect">
        <area research="A305 - For All Factions
	<p><b>Research Name</b>: Engraving
	<p><b>Requirement</b>: 2 days as Druids (Total across all R)
	<p><b>Cost</b>: 255.2 OcQig (2.552E179)
	<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.
	<p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.
	<p><b>Formula</b>: floor(3.5 * ln(1 + x) ^ 3.5)%, where x is your Spells Cast (This Game) stat,
	" coords="4,1096,51,1145" shape="rect">
        <area research="A330 - For All Factions
	<p><b>Research Name</b>: Adaptation
	<p><b>Requirement</b>: Research Mutation (D260) & Meditation (D275)
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)
	<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions.
	<p><b>Formula</b>: round(0.05 * x ^ 0.7)%, where x is time spent as other factions.
	" coords="56,1096,105,1145" shape="rect">
        <area research="A375 - For Druid
	<p><b>Research Name</b>: Transfusion
	<p><b>Requirement</b>: Research Infusion (A251) & Engraving (A305)
	<p><b>Cost</b>: 541 DSxg (5.41E191)
	<p><b>Effect</b>: Gain additional assistants based on mana produced this game.
	<p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.
	" coords="114,1097,162,1145" shape="rect">
        <area research="A400 - For All Factions But Mercenary
	<p><b>Research Name</b>: Bloodspring
	<p><b>Requirement</b>: Research Assimilation (S251) & Transfusion (A375).
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
	<p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions.
	<p><b>Note</b>: Provides Prestige Bloodline for Elite Factions from R125 to R129, MAD bloodlines at R130+.
	<p><b>Note</b>: Does not work with two Bloodlines of the same type.
	" coords="168,1097,216,1146" shape="rect">
        <area research="A410 - For Drow
	<p><b>Research Name</b>: Poisons
	<p><b>Requirement</b>: 4000 Sanctuaries
	<p><b>Cost</b>: 787.7 QaSxg (7.877E197)
	<p><b>Effect</b>: Increase the production of all other buildings by 95% per Spider Sanctuary you own.
	" coords="223,1097,273,1145" shape="rect">
        <area research="A480 - For All Factions
	<p><b>Research Name</b>: Waste
	<p><b>Requirement</b>: 2000 Royal Exchanges
	<p><b>Cost</b>: 1.67 NoSxg (1.67E210)
	<p><b>Effect</b>: Increase offline production based on the amount of Royal Exchanges you purchased.
	<p><b>Formula</b>: 120 * x ^ 0.85, where x is your Royal Exchanges Made stat.
	" coords="279,1098,326,1146" shape="rect">
        <area research="A495 - For Dwarf
	<p><b>Research Name</b>: Elixirs
	<p><b>Requirement</b>: 500 Base Assistants (as Drow)
	<p><b>Cost</b>: 731.4 NoSxg (7.314E212)
	<p><b>Effect</b>: Increase assistants production based on the amount of research made.
	<p><b>Formula</b>: (120 * x ^ 0.42)%, where x is the Amount of Researches made.
	" coords="333,1098,384,1146" shape="rect">
        <area research="A545 - For All Factions
	<p><b>Research Name</b>: Mineralogy
	<p><b>Requirement</b>: 700 trophies
	<p><b>Cost</b>: 466.3 DSpg (4.663E221)
	<p><b>Effect</b>: Increases mana regeneration based on Gems you own.
	<p><b>Formula</b>: log10(x) / 2, where x is Gems you own.
	" coords="389,1099,437,1146" shape="rect">
        <area research="A590 - For Undead,Drow
	<p><b>Research Name</b>: Hexing
	<p><b>Requirement</b>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410)
	<p><b>Cost</b>: 39.16 QiSpg (3.916E229)
	<p><b>Effect</b>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game.
	<p><b>Formula</b>: (0.045 * x ^ 0.45 * p)%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.
	" coords="442,1097,491,1146" shape="rect">
        <area research="A1200 - For Neutral,Dragon
	<p><b>Research Name</b>: Melting
	<p><b>Requirement</b>: 5000 Iron Stronghold, Any Neutral Dragon
	<p><b>Cost</b>: 5.195 Uvg (5.195e66)
	<p><b>Effect</b>: Increase the production of all other buildings per Iron Strongholds owned by 0.35%
	<p><b>Formula</b>: (0.35 * x)%, where x is Iron Strongholds owned
	" coords="499,1096,547,1146" shape="rect">
        <area research="A1325 - For All Factions
	<p><b>Research Name</b>: Calefaction
	<p><b>Requirement</b>: 4500 Excavations (This R)<p><b>Cost</b>: 144.9 Tvg (1.449e74)
	<p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.
	<p><b>Formula</b>:  floor(0.02 * x), where x is current excavations
	<p><b>Tip</b>: E290 and end of R54.
	" coords="4,1152,50,1199" shape="rect">
        <area research="A1500 - For Druid,Dragon
	<p><b>Research Name</b>: Sublimation
	<p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon
	<p><b>Cost</b>: 3.843 Spvg (3.843e84)
	<p><b>Effect</b>: Increase Faction Coin find chance based on the amount of Unique Buildings you own.</p>
	<p><b>Effect</b>: Also increase Faction Coin find chance by a multiplicative 250%.</p>
	<p><b>Formula</b>: (40 * x * 0.8), where x is Unique Buildings owned.</p>
	" coords="57,1151,105,1199" shape="rect">
        <area research="A2950 - For Mercenary
	<p><b>Research Name</b>: Combination
	<p><b>Requirement</b>: All Lineages Level at 15.
	<p><b>Cost</b>: 259 SxQig (2.59e173)
	<p><b>Effect</b>: Select an additional bloodline.
	<p><b>Effect</b>: You also gain the base effect of its respective Lineage.
	<p><b>Effect</b>: Combination Bloodline effects R60/R115 power.
	" coords="114,1151,161,1199" shape="rect">
        <area research="A3400 - For All Factions
	<p><b>Research Name</b>: Chemistry
	<p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) & (Manipulation S3200).
	<p><b>Cost</b>: 894.5 QiQig (5.69e197)
	<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.
	<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 300%.
	<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.
	" coords="167,1151,216,1200" shape="rect">
        <area research="A5125 - For All Factions
	<p><b>Research Name</b>: Putrefaction
	<p><b>Requirement</b>: R175+, Forgotten Relic, Athanor artifact and upgrade
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on the longest time spent without abdicating in this Reincarnation.
	<p><b>Formula</b>: (x ^ 0.75), where x is the longest time spent without abdicating (This R, can also be This Game)
	" coords="223,1151,271,1200" shape="rect">
        <area research="A5375 - For Order
	<p><b>Research Name</b>: Albedo
	<p><b>Requirement</b>: R177+, Forgotten Relic, Athanor artifact and upgrade
	<p><b>Effect</b>: Increase all spells duration based on spell casts in this game.
	<p><b>Formula</b>: (ln(x) ^ 1.85), where x is spell casts this game
	" coords="276,1150,327,1200" shape="rect">
        <area research="A5625 - For All Factions
	<p><b>Research Name</b>: Reduction
	<p><b>Requirement</b>: R179+, Forgotten Relic, Athanor artifact and upgrade
	<p><b>Effect</b>: Reduce all spells cost based on their individual duration.
	<p><b>Formula</b>: Additive reduction: ((x/y) ^ 0.65), where x is duration and y is base duration.
	" coords="334,1150,381,1200" shape="rect">
        <area research="A5875 - For All Factions
	<p><b>Research Name</b>: Equivalence
	<p><b>Requirement</b>: R181+, Forgotten Relic, Athanor artifact and upgrade
	<p><b>Effect</b>: Multiplicatively increase Royal Exchange bonus based on Faction Coin found in this game.
	<p><b>Formula</b>: (log10(x) ^ 1.5), where x is faction coins this game
	" coords="389,1150,437,1199" shape="rect">
        <area research="W1 - For Demon
	<p><b>Research Name</b>: Assault
	<p><b>Cost</b>: 750 Qag (7.50E125)
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.
	<p><b>Formula</b>: round(70 * x ^ 0.55)%, where x is Hellfire Blasts Cast This Game.
	" coords="113,1229,161,1277" shape="rect">
        <area research="W10 - For Elf
	<p><b>Research Name</b>: Dueling
	<p><b>Requirement</b>: 2000 Warrior Barracks
	<p><b>Cost</b>: 28.83 Uqag (2.883E127)
	<p><b>Effect</b>: Increase the production of all other buildings by 90% per Elven Training Grounds you own.
	" coords="169,1229,218,1277" shape="rect">
        <area research="W25 - For Goblin
	<p><b>Research Name</b>: War Funds
	<p><b>Requirement</b>: 1 Tqag (1E132) Coins Gained (This Game)
	<p><b>Cost</b>: 12.63 Dqag (1.263E130)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.
	<p><b>Formula</b>: round(5 * x ^ 0.6)%, where x is Tax Collections Cast This Game.
	" coords="224,1229,271,1277" shape="rect">
        <area research="W50 - For Undead
	<p><b>Research Name</b>: Exertion
	<p><b>Requirement</b>: 1 day of Evil Play Time this R, Note: Play as any Evil faction, but you must be Demon to unlock this.
	<p><b>Cost</b>: 318.8 Tqag (3.188E134)
	<p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.
	<p><b>Formula</b>: (floor(1.5 * x ^ 1.1))% where x is the number of Undercities you own.
	" coords="277,1228,327,1277" shape="rect">
        <area research="W120 - For All Factions
	<p><b>Research Name</b>: Betrayal
	<p><b>Requirement</b>: 250 base assistants
	<p><b>Cost</b>: 676 Spqag (6.76E146)
	<p><b>Effect</b>: Increase the production of non-unique buildings based on the amount of assistants you own.
	<p><b>Formula</b>: round(1.5 * x^1.5)%, where x is the amount of assistants you own.
	" coords="334,1227,382,1278" shape="rect">
        <area research="W135 - For All Factions
	<p><b>Research Name</b>: Rampage
	<p><b>Requirement</b>: 580 Trophies(as Demon)
	<p><b>Cost</b>: 296 Ocqag (9.6E149)
	<p><b>Effect</b>: Increase maximum mana based on the number of trophies you have unlocked.
	<p><b>Formula</b>: floor(1.3 * x ^ 1.1), where x is the amount of trophies unlocked.
	" coords="388,1229,436,1278" shape="rect">
        <area research="W150 - For All Factions
	<p><b>Research Name</b>: Invasion
	<p><b>Requirement</b>: Research War Funds (W25) & Rampage (W135)
	<p><b>Cost</b>: 129.6 Noqag (1.296E152)
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of assistants you own.
	<p><b>Formula</b>: round(32 * x ^ 0.75)%, where x is the amount of assistants you own.
	" coords="443,1229,492,1278" shape="rect">
        <area research="W175 - For Demon
	<p><b>Research Name</b>: Overwhelm
	<p><b>Requirement</b>: Research Assault (W1) & Invasion (W150)
	<p><b>Cost</b>: 3.273 Uqig (3.273E156)
	<p><b>Effect</b>: You gain additional assistants based on total amount of evil spells cast.
	<p><b>Formula</b>: (8 + 0.8 * x ^ 0.8), where x is the amount of evil spells cast.
	" coords="499,1227,547,1277" shape="rect">
        <area research="W180 - For All Factions
	<p><b>Research Name</b>: Formation
	<p><b>Requirement</b>: 1000 Call to Arms (This R), Research Dueling (W10) & Exertion (W50)
	<p><b>Cost</b>: 24.85 Uqig (2.485E157)
	<p><b>Effect</b>: Each building counts 15 times for Call to Arms purposes.
	" coords="112,1283,161,1331" shape="rect">
        <area research="W200 - For All Factions
	<p><b>Research Name</b>: Crusade
	<p><b>Requirement</b>: Research Hallowing (D50) & Formation (W180)
	<p><b>Cost</b>: 82.65 Dqig (8.265E160)
	<p><b>Effect</b>: Gain additional assistants based on time spent as Good this R.
	<p><b>Formula</b>: floor(0.065 * x ^ 0.5), where x is your Time Spent Being Good (This R) stat.
	" coords="169,1283,216,1332" shape="rect">
        <area research="W205 - For All Evil Factions
	<p><b>Research Name</b>: Berserking
	<p><b>Requirement</b>: 850 Blood Frenzy (This R), Research Rampage (W135) & Retribution (D150)
	<p><b>Cost</b>: 627.6 Dqig (6.276E161)
	<p><b>Effect</b>: While Blood Frenzy is active, increase mana regeneration based on the amount of assistants you own.
	<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 300%.
	<p><b>Formula</b>: floor(0.25x^0.9), where x is your Assistants stat.
	" coords="224,1283,272,1332" shape="rect">
        <area research="W225 - For Angel
	<p><b>Research Name</b>: Critical Strike
	<p><b>Requirement</b>: Research Dueling (W10) & Transfixion (D55)
	<p><b>Cost</b>: 2.087 Qaqig (2.087E165)
	<p><b>Effect</b>: Holy Light empowers Heaven’s Domains based on Holy Light activity time in this game.
	<p><b>Formula</b>: (5 * x ^ 0.65)%, where x is Holy Light Active Time This Game in seconds.
	" coords="277,1282,328,1331" shape="rect">
        <area research="W250 - For All Factions
	<p><b>Research Name</b>: Swarming
	<p><b>Requirement</b>: Research Overwhelm (W175) & Berserking (W205)
	<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
	<p><b>Effect</b>: Gain additional assistants based on the amount of trophies you unlocked.
	<p><b>Formula</b>: floor(x / 8), where x is the amount of trophies unlocked.
	" coords="333,1283,381,1332" shape="rect">
        <area research="W260 - For Titan
	<p><b>Research Name</b>: Athletics
	<p><b>Requirement</b>: 3,000 Olympian Halls
	<p><b>Cost</b>: 3.039 SxQig (3.039E171)
	<p><b>Effect</b>: Increase the production of all other buildings by 100% per Olympian Hall you own.
	" coords="388,1283,436,1331" shape="rect">
        <area research="W275 - For Faceless
	<p><b>Research Name</b>: Domination
	<p><b>Requirement</b>: 300 Base Assistants (as Faceless)
	<p><b>Cost</b>: 1.331 SpQig (1.331E174)
	<p><b>Effect</b>: Increase Faction Coin find chance based on the highest amount of assistants you had in a single game.(This R)
	<p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.
	<p><b>Formula</b>: (200 * x ^ 0.55), where x is your Assistants (Max) stat.
	" coords="443,1285,493,1332" shape="rect">
        <area research="W290 - For All Factions
	<p><b>Research Name</b>: Entrench
	<p><b>Requirement</b>: 2,000 Excavations
	<p><b>Cost</b>: 582.7 SpQig (5.827E176)
	<p><b>Effect</b>: Increase the production of Unique buildings based on the amount of Excavations you made.
	<p><b>Formula</b>: round(15 * x ^ 0.8)%, where x is the amount of excavations made.
	" coords="498,1283,547,1332" shape="rect">
        <area research="W320 - For All Factions
	<p><b>Research Name</b>: Shattering
	<p><b>Requirement</b>: 2,650 Excavations
	<p><b>Cost</b>: 1.117 NoQig (1.117E180)
	<p><b>Effect</b>: Increase your clicking reward based on the amount of Excavations you made.
	<p><b>Formula</b>: round(10 * x ^ 0.75)%, where x is the amount of excavations made.
	" coords="2,1337,50,1385" shape="rect">
        <area research="W330 - For All Factions
	<p><b>Research Name</b>: Heroism
	<p><b>Requirement</b>: Research Crusade (W200) & Athletics (W260).
	<p><b>Cost</b>: 6.443 Sxg (6.443E183)
	<p><b>Effect</b>: Increase your click reward based on the amount of trophies you unlocked.
	<p><b>Formula</b>: round(2.5 * x)%, where x is the amount of trophies unlocked.
	" coords="57,1336,106,1385" shape="rect">
        <area research="W350 - For Druid
	<p><b>Research Name</b>: Survival
	<p><b>Requirement</b>: Research Creeping (A300) & Synthesis (A270).
	<p><b>Cost</b>: 21.42 USxg (2.142E187)
	<p><b>Effect</b>: Increase the production of all other buildings based on the production of your Stonehenge Circles.
	<p><b>Formula</b>: (75 * (log10(1 + x)) ^ 1.3))%, where x is the production of your Stonehenge Circles.
	" coords="113,1338,163,1386" shape="rect">
        <area research="W400 - For All Factions
	<p><b>Research Name</b>: Siege
	<p><b>Requirement</b>: Research Architecture (C251) & Entrench (W290).
	<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
	<p><b>Effect</b>: Each building in the three highest building tiers count as 2 buildings for all purposes.
	" coords="169,1337,217,1386" shape="rect">
        <area research="W405 - For Drow
	<p><b>Research Name</b>: Ambush
	<p><b>Requirement</b>: Secrets of the Underworld (as Drow)
	<p><b>Cost</b>: 103.7 QaSxg (1.037E197)
	<p><b>Effect</b>: Increase the production of Spider Sanctuaries based on offline Bonus
	<p><b>Formula</b>: (3.25 * log10(1 + x) ^ 3.25)%, where x is offline production bonus multiplier.
	" coords="223,1337,275,1385" shape="rect">
        <area research="W520 - For Drow
	<p><b>Research Name</b>: Stalking
	<p><b>Requirement</b>: Research Exertion (W50) and Ambush (W405)
	<p><b>Cost</b>: 18.47 Uspg (1.847E217)
	<p><b>Effect</b>: Gain 1 assistant for every 100 seconds of Combo Strike activity time. (This Game)
	" coords="279,1336,328,1385" shape="rect">
        <area research="W525 - For All Factions
	<p><b>Research Name</b>: Bloodlust
	<p><b>Requirement</b>: 129600s (1d 12hours) as Evil (This R), Research Berserking (W205) and Focus (S460)
	<p><b>Cost</b>: 140.2 USpg (1.402E218)
	<p><b>Effect</b>: Increase Blood Frenzy multiplier based on the amount of times you cast faction spell in this game.
	<p><b>Formula</b>: (300 * floor(x ^ 0.3))%, where x is Faction Spells' Cast This Game.
	" coords="334,1338,382,1385" shape="rect">
        <area research="W560 - For Dwarf
	<p><b>Research Name</b>: Resilience
	<p><b>Requirement</b>: Research Eternity (D330) and Mercy (D480)
	<p><b>Cost</b>: 204.2 TSpg (2.042E224)
	<p><b>Effect</b>: Increase clicking reward based on the amount of clicks made in this game.
	<p><b>Formula</b>: (5 * x ^ 0.45)%, where x is your Treasure Clicks (This Game) stat.
	" coords="387,1335,439,1386" shape="rect">
        <area research="W590 - For Demon,Drow
	<p><b>Research Name</b>: Torture
	<p><b>Requirement</b>: 200 Drow Exchanges as Dromon, Research Soulrending (D245) and Stalking (W520)
	<p><b>Cost</b>: 39.16 QiSpg (3.916E229)
	<p><b>Effect</b>: Increase assistants production based on total time spent being Evil. (This R)
	<p><b>Formula</b>: (8 * x ^ 0.8)%, where x is your Time Spent Being Evil stat.
	" coords="443,1338,492,1385" shape="rect">
        <area research="W1275 - For All Factions
	<p><b>Research Name</b>: Authority
	<p><b>Requirement</b>: 43200s (12 hours) Call to Arms Cast Time (This game).
	<p><b>Cost</b>: 152.4 Dvg (1.524e71)
	<p><b>Effect</b>: Increase the duration of all spells based on the amount of Non-Unique buildings you own.
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is the amount of Non-Unique buildings you own.
	" coords="498,1336,546,1385" shape="rect">
        <area research="W1375 - For All Factions
	<p><b>Research Name</b>: Scavenging
	<p><b>Requirement</b>: 604800s 7 days spent as evil (Across all Rs)
	<p><b>Cost</b>: 137.8 Qavg (1.378e77)
	<p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 200%.
	<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.
	<p><b>Formula</b>: (100 * x ^ 0.5), where x is assistants.
	" coords="2,1390,50,1439" shape="rect">
        <area research="W1400 - For Dragon
	<p><b>Research Name</b>: Cataclysm
	<p><b>Requirement</b>:  Research W400, A1200, Affiliated Dragon
	<p><b>Cost</b>: 4.249 Qivg (4.249e78)
	<p><b>Effect</b>: Increase maximum mana based on the amount of clicks made in this game.
	<p><b>Formula</b>: (650 * x ^ 0.35), where x is clicks (this game).
	" coords="58,1392,105,1438" shape="rect">
        <area research="W3050 - For Mercenary
	<p><b>Research Name</b>: Flanking
	<p><b>Requirement</b>: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325).
	<p><b>Cost</b>: 809 SpQig (8.09e176)
	<p><b>Effect</b>: Increases the production of buildings one tier directly above or below a Unique Building based on the amount of assistants you own.
	<p><b>Formula</b>: (2 * x ^ 0.8), where x is assistants.
	" coords="114,1390,162,1439" shape="rect">
        <area research="W3150 - For All Factions
	<p><b>Research Name</b>: Upheaval
	<p><b>Requirement</b>: 60000 Farms, Inns and Blacksmiths.
	<p><b>Cost</b>: 731.6 NoQig (7.316e182)
	<p><b>Effect</b>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.
	<p><b>Formula</b>: (150 * (12 - T) ^ 2.15), where T is building tier.
	" coords="168,1390,217,1439" shape="rect">
        <area research="W5125 - For All Factions
	<p><b>Research Name</b>: Sovereignty
	<p><b>Requirement</b>: R175+, Forgotten Relic, Battlefield artifact and upgrade
	<p><b>Effect</b>: Increase the production of two highest tier buildings based on assistants you own.
	<p><b>Formula</b>: (x ^ 0.3), where x is assistants
	" coords="223,1391,271,1438" shape="rect">
        <area research="W5375 - For Evil
	<p><b>Research Name</b>: Officers
	<p><b>Requirement</b>: R177+, Forgotten Relic, Battlefield artifact and upgrade
	<p><b>Effect</b>: Gain assistants multiplicatively based on amount of trophies unlocked.
	<p><b>Formula</b>: (2.5 * x ^ 0.5), where x is trophies
	" coords="278,1390,329,1439" shape="rect">
        <area research="W5625 - For All Factions
	<p><b>Research Name</b>: Concealment
	<p><b>Requirement</b>: R179+, Forgotten Relic, Battlefield artifact and upgrade
	<p><b>Effect</b>: Offline time counts more based on Mana Produced in this game.
	<p><b>Effect</b>: (2.5 * ln(1 + x) ^ 2.5), where x is mana produced (This game)
	" coords="333,1390,382,1437" shape="rect">
        <area research="W5875 - For All Factions
	<p><b>Research Name</b>: Patience
	<p><b>Requirement</b>: R181+, Forgotten Relic, Battlefield artifact and upgrade
	<p><b>Effect</b>: Time spent with Prestige Counts 500% more.
	<p><b>Effect</b>: Time spent with Elite factions Counts 1000% more.
	" coords="388,1391,436,1438" shape="rect">
        <area research="F5250 - For All Factions
	<p><b>Research Name</b>: Dreamwalking
	<p><b>Requirement</b>: R176+, Forgotten Relic, Forbidden artifact and upgrade
	<p><b>Effect</b>: Increase Offline Bonus based on time spent offline in this Reincarnation.
	<p><b>Formula</b>: (0.7 * x ^ 0.7), where x is offline time (This R)
	" coords="113,1463,161,1511" shape="rect">
        <area research="F5500 - For All Factions
	<p><b>Research Name</b>: Gathering
	<p><b>Requirement</b>: R178+, Forgotten Relic, Forbidden artifact and upgrade
	<p><b>Effect</b>: Additively increase production bonus from Gems based on your Faction Coin find chance.
	<p><b>Formula</b>: (2.5 * log10(1 + x) ^ 2.5), where x is faction coin find chance
	" coords="169,1463,216,1511" shape="rect">
        <area research="F5750 - For All Factions
	<p><b>Research Name</b>: Corruption
	<p><b>Requirement</b>: R180+, Forgotten Relic, Forbidden artifact and upgrade
	<p><b>Effect</b>: Gain the base Union effect of your opposite Alignment.
	<p><b>Note</b>: Neutral and Balance don’t have opposites so they stay the same
	" coords="223,1462,272,1511" shape="rect">
        <area research="F6000 - For All Factions
	<p><b>Research Name</b>: Inevitability
	<p><b>Requirement</b>: R182+, Forgotten Relic, Forbidden artifact and upgrade
  <p><b>Effect</b>: Increase your next time head start based on time spent in this game.</p>
  <p><b>Note</b>: Capped at time spent in your current Reincarnation.</p>
  <p><b>Note</b>: Does not count when  Reincarnating.</p>
	<p><b>Formula</b>: (x ^ 0.75), where x is time spent (This Game)
	" coords="279,1464,326,1511" shape="rect">
        <area research="Unlocked Upgrade (X): You cannot use this upgrade with the faction you are playing. (There is an option to hide these icons.)
	" coords="499,193,548,239" shape="rect">
        <area research="Locked Upgrade (! exclamation mark): You can unlock this upgrade with the Faction you are playing. The Icon tool-tip will show your unlock progress %.
	" coords="498,435,548,485" shape="rect">
        <area research="Locked Upgrade (? question mark): You cannot unlock this upgrade with the Faction you are playing.
	" coords="500,676,549,723" shape="rect">
    </map>
    <?php include "../scripts/footer.html"; ?>
