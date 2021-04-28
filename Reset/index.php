<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6>Hard Resets</h6>
<p>Do not mistake SOFT with HARD resets: Hard resets totally erase your progress, as if you had never played!</p>
<h6>Soft Resets</h6>
<p>In Realm Grinder there are three kinds of soft resets:</p>
<p>We go through several abdications to reach the required level to reincarnate. We then go through several reincarnations, to reach Ascension. Each time, you will lose nearly everything in exchange for a powerful boost.</p>
<p>Soft resets are done by clicking their respective buttons in the upgrades tab. Abdications can be performed anytime, even when there is no benefit. Reincarnations and Ascensions can only be performed when the necessary requirements are met.</p>
<h6>Concept</h6>
<p>The idea of these soft resets represents the story of more than one life time:</p>
<p>During one's life, we make alliances with many Factions. We affiliate to join, and abdicate to leave. When we leave, we leave enriched with the experiences. Later, when we become old, we die and reincarnate to start over. Start over, but enriched from our previous life.</p>
<p>Finally, enriched with all the experiences through many reincarnations and lives, we reach the ultimate state of wisdom and are able to ascend, to walk the heaven as mortal.</p>
</br>
<h6><img src="http://musicfamily.org/realm/Factions/picks/Reset-Abdication.png" alt="Abdication" align="middle"></h6>
<p>Abdicating is the first kind of soft reset in Realm Grinder. It allows you to cash in all the gems you have earned in order to boost your production.</p>
<p>Abdicating will reset all buildings, upgrades and coins, but you will keep your trophies and be awarded with gems that will boost your production. Otherwise, you may also spend Rubies to gain Gems without resetting!</p>
<p><b> Gems to Coins Formula</b>: n * (n + 1) * 5e11</br>[5e3 in A2, 5e26 in A4], where n is gems</p>
<p><b> Coins to Gems Formula</b>: floor(((1 + 4 * n / 5e11</br>[5e3 in A2, 5e26 in A4]) ^ 0.5 - 1) / 2), where n is coins.</p>
<div id="GemCoinCostCalculator" class="calc">
  <table>
    <tr>
      <th style="width:20%; height:12px" >Ascension</th>
      <th style="width:20%; height:12px" >Gem Input</th>
      <th style="width:20%; height:12px" >Coin Output</th>
      <th style="width:20%; height:12px" >Coin Input</th>
      <th style="width:20%; height:12px" >Gem Output</th>
    </tr>
    <tr>
      <td ><input id="Ascension" type="number" min="0" max="4" value="0"></td>
      <td > <input id="GemIn" type="text" value="0"></td>
      <td id = "CoinOut"></td>
      <td ><input id="CoinIn" type="text" value="0"></td>
      <td id = "GemOut"></td>
    </tr>
  </table>
  <script>
    function getGemForm(ascension) {
		if (ascension == 4) {
			return 5e26;
		}
		if (ascension == 2) {
			return 5e3;
		}
		return 5e11;
    }
    function gemToCoin(mul) {
      var input = Number($('#GemIn').val());
      return input * (input + 1) * mul;
    }
    function coinToGem(mul) {
      var input = Number($('#CoinIn').val());
      return Math.floor(Math.sqrt(input) / Math.sqrt(mul));
    }
    function calValues() {
      var mul = getGemForm($('#Ascension').val());
      $('#CoinOut').text(gemToCoin(mul).toPrecision(4));
      $('#GemOut').text(coinToGem(mul).toPrecision(4));
    }
    calValues();
    $('#Ascension, #GemIn, #CoinIn').on('input', calValues);
  </script>
</div>
<p><b><a target="" href="http://musicfamily.org/realm/Abdication/">More about Abdication</b></a></p>
</br>
<h6><img src="http://musicfamily.org/realm/Factions/picks/Reset-Reincarnate.png" alt="Reincarnate" align="middle"></h6>
<p>Reincarnation was introduced in the Underworld Expansion. In terms of game-play, it is a second kind of soft reset where players can trade in all of their gems and have most of their stats reset for other bonuses.</p>
<p>Reincarnation can only be performed for the first time when the user reaches 1 Oc (1e27) gems. Each subsequent reincarnation costs 1,000 times more gems.</p>
<p><b><a target="" href="http://musicfamily.org/realm/Reincarnation/">More about Reincarnation</b></a></p>
</br>
<h6><img src="http://musicfamily.org/realm/Factions/picks/Reset-Ascend.png" alt="Ascend" align="middle"></h6>
<p>Ascension is a third kind of soft reset. It was implemented to overcome the usual representation limit for coins. Most production upgrades will be shifted to a smaller range to enable the game to progress further.</p>
<p>At the end of R39, R99, R159 and R219 the Reincarnation Button will say Ascension.</p>
<p>Ascending will reset all the progress a Reincarnation would reset.</p>
<p><b><a target="" href="http://musicfamily.org/realm/Ascension/">More about Ascension</b></a></p>
<?php include "../scripts/footer.html"; ?>
