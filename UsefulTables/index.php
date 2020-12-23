<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<br/><br/>
<b><center><font size="5">Useful Tables</font></center></b>
<br/><br/>
<div id="bubble-swarm">
  <div>
    <p for="dlinput"><b>Bubble Swarm Count - Max Mana</b> </p>
    <p for="dlinput"><b>This includes: Dwarf Challenge 5, Kind Hearts (FR7), Druid Heritage, Dragon Lineage Perk 3</b> </p>
    <label for="dlinput"><b>Dragon Lineage</b>: </label>
    <input type="number" id="dlinput" name="dragon lineage" value="0">
    <br />
    <label for="archinput"><b>Archon Heritage</b>: </label>
    <input type="checkbox" id="archinput" name="archon heritage">
    <button id="dlsubmit">Submit</button>
  </div>
  <br />
  <span id="bubble-swarm-table"></span>
</div>

<script>
function sumOfDigits(x) {
    var sum = 0;
    while (x > 0)
    {
	sum += x % 10;
	x = Math.floor(x / 10);
    }
    return sum;
}

function druidHeritage(x) {
	return Math.floor(x / 15);
}

function dragonPerk3(x) {
	return Math.floor(1.25 * x / 2);
}

function kindHearts(x) {
	return Math.floor(x / 8);
}

function bubbleSwarm(x) {
	return Math.floor(sumOfDigits(x) * 100 * Math.pow( x, 0.45 ) );
}

function applyBldgMultiplier(x, l, h) {
	return Math.floor(Math.fround(x * (h ? 1.1 : 1.0) * 1.2 * (1 + 0.12 * l)));
}

function buildBubbleSwarmTable(l, h) {
	var minbldg = 7999;  // This is the minimum number of buildings after applying building multiplier
    var maxbldg = 100000; // This is the maximum number of purchased buildings
  	if(l > 5)
  		minbldg = 17999;
    if(l > 10)
  	    minbldg = 19999;
    if(l > 15)
  	    minbldg = 24999;
    if(l > 20)
  	    minbldg = 29999;
    if(l > 25)
  	    minbldg = 39999;
    if(l > 30)
  	    minbldg = 49999;

  var tabletext = "";
  var maxmana = 0;
  var bldgvals = [];
  var bubblevals = [];
  var manavals = [];
  var numvals = 0;

  for (i = 1; i < maxbldg; i++) {
  	var bldgcount = applyBldgMultiplier(i,l,h);
    var bubbleval = bubbleSwarm(bldgcount);
    var manaval = bubbleval + kindHearts(bldgcount) + druidHeritage(bldgcount) + ((l > 0) ? dragonPerk3(bldgcount) : 0);
    if( manaval > maxmana ) {
    	if( bldgcount >= minbldg ){
        bubblevals[numvals] = bubbleval;
      	manavals[numvals] = manaval;
        bldgvals[numvals] = i;
      	numvals++;
      }
      maxmana = manaval;
    }
	}
  tabletext += "<a id=\"Swarming Towers\"></a><table class=\"numtable\" align=\"left\"><thead><tr><th>Swarming Towers</th><th>FR10 Max Mana</th></tr></thead><tbody>";
  for(i = 0; i < numvals/2; i++){
  	  tabletext += "<tr research=\"Total Max Mana from Swarming Towers: " + manavals[i] + "\"><td>" + bldgvals[i] + "</td><td>" + bubblevals[i] + "</td></tr>";
  }
  tabletext += "</tbody></table>";

  tabletext += "<a id=\"Swarming Towers\"></a><table class=\"numtable\" align=\"left\"><thead><tr><th>Swarming Towers</th><th>FR10 Max Mana</th></tr></thead><tbody>";
  for(; i < numvals; i++){
  	  tabletext += "<tr research=\"Total Max Mana from Swarming Towers: " + manavals[i] + "\"><td>" + bldgvals[i] + "</td><td>" + bubblevals[i] + "</td></tr>";
  }
  tabletext += "</tbody></table>";

  return tabletext;
}

function bubbleSwarmActivate(){
  var lineage = document.getElementById("dlinput").value;
  var heritage = document.getElementById("archinput").checked;
  $( "#bubble-swarm-table" ).html(buildBubbleSwarmTable(lineage, heritage));
  $( "#s-m-t-tooltip" ).css("z-index",100);
  $( "tr[research]" ).style_my_tooltips();
}

$( "#dlsubmit" ).click(function(){
  bubbleSwarmActivate();
})

$( "#dlinput" ).change(function(){
  bubbleSwarmActivate();
})

$( "#archinput" ).change(function(){
  bubbleSwarmActivate();
})
</script>
<br style="clear: both"/><hr>
    <a id="Companions"></a>
    <table class="numtable" align="left" >
        <thead>
        <tbody>
        <tr>
            <th colspan="2">Animal Companions</th>
        </tr>
        <tr>
            <td>Hour of Playtime</td>
            <th>Assistants</th>
        </tr>
        <tbody>
        <tr>
            <td><center>0</td>
            <td><center>3</td>
        </tr>
        <tr>
            <td><center>1</td>
            <td><center>4</td>
        </tr>
        <tr>
            <td><center>2</td>
            <td><center>5</td>
        </tr>
        <tr>
            <td><center>3</td>
            <td><center>5</td>
        </tr>
        <tr>
            <td><center>4</td>
            <td><center>6</td>
        </tr>
        <tr>
            <td><center>5</td>
            <td><center>6</td>
        </tr>
        <tr>
            <td><center>6</td>
            <td><center>6</td>
        </tr>
        </tbody>
        <tr>
            <td><center>12</td>
            <td><center>8</td>
        </tr>
        </tbody>
        <tr>
           <td><center>18</td>
           <td><center>9</td>
        </tr>
        </tbody>
        <tr>
            <td><center>24</td>
            <td><center>11</td>
        </tr>
        <tr>
            <td><center>36</td>
            <td><center>12</td>
        </tr>
        <tr>
            <td><center>48</td>
            <td><center>14</td>
        </tr>
        <tr>
            <td><center>60</td>
            <td><center>15</td>
        </tr>
        <tr>
            <td><center>72</td>
            <td><center>17</td>
        </tr>
        </tbody>
        </thead>
    </table>
    <a id="TC3"></a>
    <table class="numtable" align="center" >
        <thead>
        <tr>
            <th colspan="3">God's Finger Time Table</th>
        </tr>
        <tr>
            <th>Clicks Per Sec</th>
            <th>Days</th>
            <th>Hours</th>
        </tr>
        </thead>
        <tbody>
         <tr>
            <td><center>100</td>
            <td><center>11</td>
            <td><center>13</td>
        </tr>
         <tr>
            <td><center>200</td>
            <td><center>5</td>
            <td><center>18</td>
        </tr>
         <tr>
            <td><center>300</td>
            <td><center>3</td>
            <td><center>20</td>
        </tr>
         <tr>
            <td><center>400</td>
            <td><center>2</td>
            <td><center>21</td>
        </tr>
         <tr>
            <td><center>500</td>
            <td><center>2</td>
            <td><center>7</td>
        </tr>
         <tr>
            <td><center>600</td>
            <td><center>1</td>
            <td><center>22</td>
        </tr>
         <tr>
            <td><center>700</td>
            <td><center>1</td>
            <td><center>15</td>
        </tr>
         <tr>
            <td><center>800</td>
            <td><center>1</td>
            <td><center>10</td>
        </tr>
         <tr>
            <td><center>900</td>
            <td><center>1</td>
            <td><center>6</td>
        </tr>
         <tr>
            <td><center>1000</td>
            <td><center>1</td>
            <td><center>3</td>
        </tr>
         <tr>
            <td><center>1158</td>
            <td colspan="2"><center>Under 1 day</td>
        </tr>
        <tr>
            <th colspan="3">By Aramil Nailo</th>
        </tr>
       </tbody>
    </table>
    <br style="clear: both"/>
<hr>
    <a id="Primal Balance"></a>
    <center><table class="numtable" >
        <thead>
        <tr>
            <th colspan="6">Primal Balance (GB +10)</th>
        </tr>
        <tr>

            <th>Targets</th>
            <th>A0</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
            <th>A4</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>+1</td>
            <td>1.000e5</td>
            <td>1.000e5</td>
            <td>1.000e5</td>
            <td>1.000e5</td>
            <td>1.000e5</td>
        </tr>
        <tr>
            <td>+2</td>
            <td>3.200e6</td>
            <td>5.250e6</td>
            <td>1.016e7</td>
            <td>2.560e7</td>
            <td>1.024e8</td>
        </tr>
        <tr>

            <td>+3</td>
            <td>2.430e7</td>
            <td>5.326e7</td>
            <td>1.516e8</td>
            <td>6.561e8</td>
            <td>5.905e9</td>
        </tr>
        <tr>
            <td>+4</td>
            <td>1.024e8</td>
            <td>2.756e8</td>
            <td>1.032e9</td>
            <td>6.554e9</td>
            <td>1.049e11</td>
        </tr>
        <tr>
            <td>+5</td>
            <td>3.125e8</td>
            <td>9.865e8</td>
            <td>4.569e9</td>
            <td>3.906e10</td>
            <td>9.766e11</td>
        </tr>
        <tr>
            <td>+6</td>
            <td>7.776e8</td>
            <td>2.796e9</td>
            <td>1.541e10</td>
            <td>1.680e11</td>
            <td>6.047e12</td>
        </tr>
        <tr>
            <td>+7</td>
            <td>1.681e9</td>
            <td>6.747e9</td>
            <td>4.305e10</td>
            <td>5.765e11</td>
            <td>2.825e13</td>
        </tr>
        <tr>
            <td>+8</td>
            <td>3.277e9</td>
            <td>1.447e10</td>
            <td>1.049e11</td>
            <td>1.678e12</td>
            <td>1.074e14</td>
        </tr>
        <tr>
            <td>+9</td>
            <td>5.905e9</td>
            <td>2.837e10</td>
            <td>2.299e11</td>
            <td>4.305e12</td>
            <td>3.487e14</td>
        </tr>
        <tr>
            <td>+10</td>
            <td>1.000e10</td>
            <td>5.179e10</td>
            <td>4.642e11</td>
            <td>1.000e13</td>
            <td>1.000e15</td>
        </tr>
        </tbody>
    </table></center>
<br style="clear: both"/>
<hr>
<center><p>List provided by <a target="_blank" href="http://www.kongregate.com/accounts/pseudobyte"><b>pseudobyte</b></a></center>
    <a id="TC3"></a>
    <table class="numtable" align="left" >
        <thead>
        <tr>
            <th colspan="2">Titan Challenge 3</th>
        </tr>
        <tr>
            <th colspan="2">Lightning Strikes needed</th>
        </tr>
        <tr>
            <th>Your Gem Count</th>
            <th>Lightning Strikes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><center>1 K (1e3)</td>
            <td><center>2020203</td>
        </tr>
        <tr>
            <td><center>1 M (1e6)</td>
            <td><center>252845</td>
        </tr>
         <tr>
            <td><center>1 B (1e9)</td>
            <td><center>74907</td>
        </tr>
         <tr>
            <td><center>1 T (1e12)</td>
            <td><center>31603</td>
        </tr>
         <tr>
            <td><center>1 Qa (1e15)</td>
            <td><center>16181</td>
        </tr>
         <tr>
            <td><center>1 Qi (1e18)</td>
            <td><center>9364</td>
        </tr>
         <tr>
            <td><center>1 Sx (1e21)</td>
            <td><center>5897</td>
        </tr>
         <tr>
            <td><center>1 Sp (1e24)</td>
            <td><center>3951</td>
        </tr>
         <tr>
            <td><center>1 Oc (1e27)</td>
            <td><center>2775</td>
        </tr>
         <tr>
            <td><center>1 No (1e30)</td>
            <td><center>2023</td>
        </tr>
         <tr>
            <td><center>1 Dc (1e33)</td>
            <td><center>1520</td>
        </tr>
         <tr>
            <td><center>1 Ud (1e36)</td>
            <td><center>1171</td>
        </tr>
         <tr>
            <td><center>1 Dd (1e39)</td>
            <td><center>921</td>
        </tr>
         <tr>
            <td><center>1 Td (1e42)</td>
            <td><center>738</td>
        </tr>
         <tr>
            <td><center>1 Qad (1e45)</td>
            <td><center>600</td>
        </tr>
         <tr>
            <td><center>1 Qid (1e48)</td>
            <td><center>494</td>
        </tr>
         <tr>
            <td><center>1 Sxd (1e51)</td>
            <td><center>412</td>
        </tr>
         <tr>
            <td><center>1 Spd (1e54)</td>
            <td><center>347</td>
        </tr>
         <tr>
            <td><center>1 Ocd (1e57)</td>
            <td><center>295</td>
        </tr>
         <tr>
            <td><center>1 Nod (1e60)</td>
            <td><center>253</td>
        </tr>
         <tr>
            <td><center>1 Vg (1e63)</td>
            <td><center>219</td>
        </tr>
         <tr>
            <td><center>1 Uvg (1e66)</td>
            <td><center>190</td>
        </tr>
         <tr>
            <td><center>1 Dvg (1e69)</td>
            <td><center>167</td>
        </tr>
         <tr>
            <td><center>1 Tvg (1e72)</td>
            <td><center>147</td>
        </tr>
         <tr>
            <td><center>1 Qavg (1e75)</td>
            <td><center>130</td>
        </tr>
       </tbody>
    </table>
    <a id="TC3"></a>
    <table class="numtable" align="right" >
        <thead>
        <tr>
            <th colspan="2">Titan Challenge 3</th>
        </tr>
        <tr>
            <th colspan="2">Lightning Strikes needed</th>
        </tr>
        <tr>
            <th>Gem Count</th>
            <th>Lightning Strikes</th>
        </tr>
        </thead>
        <tbody>
         <tr>
            <td><center>1 Qivg (1e78)</td>
            <td><center>116</td>
        </tr>
         <tr>
            <td><center>1 Sxvg (1e81)</td>
            <td><center>103</td>
        </tr>
         <tr>
            <td><center>1 Spvg (1e84)</td>
            <td><center>93</td>
        </tr>
         <tr>
            <td><center>1 Ocvg (1e87)</td>
            <td><center>83</td>
        </tr>
         <tr>
            <td><center>1 Novg (1e90)</td>
            <td><center>75</td>
        </tr>
         <tr>
            <td><center>1 Tg (1e93)</td>
            <td><center>68</td>
        </tr>
         <tr>
            <td><center>1 Utg (1e96)</td>
            <td><center>62</td>
        </tr>
         <tr>
            <td><center>1 Dtg (1e99)</td>
            <td><center>57</td>
        </tr>
         <tr>
            <td><center>1 Ttg (1e102)</td>
            <td><center>52</td>
        </tr>
         <tr>
            <td><center>1 Qatg (1e105)</td>
            <td><center>48</td>
        </tr>
         <tr>
            <td><center>1 Qitg (1e108)</td>
            <td><center>44</td>
        </tr>
         <tr>
            <td><center>1 Sxtg (1e111)</td>
            <td><center>40</td>
        </tr>
         <tr>
            <td><center>1 Sptg (1e114)</td>
            <td><center>37</td>
        </tr>
         <tr>
            <td><center>1 Octg (1e117)</td>
            <td><center>35</td>
        </tr>
         <tr>
            <td><center>1 Notg (1e120)</td>
            <td><center>32</td>
        </tr>
         <tr>
            <td><center>1 Qag (1e123)</td>
            <td><center>30</td>
        </tr>
         <tr>
            <td><center>1 Uqag (1e126)</td>
            <td><center>28</td>
        </tr>
         <tr>
            <td><center>1 Dqag (1e129)</td>
            <td><center>26</td>
        </tr>
         <tr>
            <td><center>1 Tqag (1e132)</td>
            <td><center>24</td>
        </tr>
         <tr>
            <td><center>1 Qaqag (1e135)</td>
            <td><center>23</td>
        </tr>
         <tr>
            <td><center>1 Qiqag (1e138)</td>
            <td><center>21</td>
        </tr>
         <tr>
            <td><center>1 Sxqag (1e141)</td>
            <td><center>20</td>
        </tr>
         <tr>
            <td><center>1 Spqag (1e144)</td>
            <td><center>19</td>
        </tr>
         <tr>
            <td><center>1 Ocqag (1e147)</td>
            <td><center>18</td>
        </tr>
         <tr>
            <td><center>1 Noqag (1e150)</td>
            <td><center>17</td>
        </tr>
       </tbody>
    </table>
<br style="clear: both"/>
<?php include "../scripts/footer.html"; ?>
