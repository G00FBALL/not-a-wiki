function calcInt (secs, num1, num2, minLength) {
	str = Math.floor (secs / num1);
	if (num2) str %= num2;
	str = str.toString ();
	while (str.length < minLength) str = "0" + str;
	return str;
}

function splitEscaped (str, separ) {
	arr = new Array ();
	len = str.length;
	s = '';
	for (i = 0; i < len; ++i) {
		c = str.charAt (i);
		if (c == '/') s += str.charAt (++i);
		else if (c == separ) {
			arr.push (s);
			s = '';
		} else s += c;
	}
	arr.push (s);
	return arr;
}

function eventTimerClient (timerSpanId, eventCode, eventTime, beforeString, afterString) {
	sign = new Array ('-', '+');
	custSign = false;
	timerSpan = document.getElementById (timerSpanId);
	if (arguments.length < 3) {
		separ = eventCode.indexOf (';');
		while (separ != -1 && eventCode.charAt (separ - 1) == '/') {
			temp = eventCode.substr (separ + 1).indexOf (';');
			if (temp == -1) separ = -1;
			else separ += temp + 1;
		}
		if (separ == -1) {
			time = eventCode;
			formatStr = "%dd%/%hh%:%mm%:%ss%";
		} else {
			time = eventCode.substr (0, separ++);
			formatStr = eventCode.substr (separ);
		}
		separ = time.indexOf ('?');
		if (separ != -1) {
			sign = splitEscaped (time.substr (separ + 1), '|');
			custSign = true;
			time = time.substr (0, separ);
		}
		timeCode = time.replace (/[-:]/g, ' ').split (' ');
		year = parseInt (timeCode[0], 10);
		month = parseInt (timeCode[1], 10) - 1;
		day = parseInt (timeCode[2], 10);
		hour = parseInt (timeCode[3], 10);
		minute = parseInt (timeCode[4], 10);
		second = parseInt (timeCode[5], 10);
		if (isNaN (second)) second = 0;
		dthen = new Date (year, month, day, hour, minute, second);
		eventTime = dthen.getTime () / 1000;
		eventCode = formatStr;
		if (timerSpan != null) timerSpan.title = "Event Time: " + time + " UTC";
	} else {
		formatStr = eventCode;
		dthen = new Date (eventTime * 1000);
		if (typeof (beforeString) != 'undefined' || typeof (afterString) != 'undefined') {
			if (typeof (beforeString) != 'undefined') sign[0] = beforeString;
			if (typeof (afterString) != 'undefined') sign[1] = afterString;
			custSign = true;
		}
	}
	gmtMS = NTP.fixTime ();
	dnow = new Date (gmtMS);
	ddiff = new Date (dnow - dthen);
	ms = ddiff.valueOf ();
	secs = Math.floor (Math.abs (ms / 1000));
	secmod = (formatStr.search (/%m+%/) != -1);
	minmod = (formatStr.search (/%h+%/) != -1);
	hourmod = (formatStr.search (/%d+%/) != -1);
	secmod = (secmod ? 60 : (minmod ? 3600 : (hourmod ? 86400 : 0)));
	minmod = (minmod ? 60 : (hourmod ? 1440 : 0));
	hourmod = (hourmod ? 24 : 0);
	formatStr = formatStr.replace (/%c%/g, (ms < 0 ? sign[0] : sign[1]));

	minLength = (formatStr.substr (formatStr.indexOf ("%d") + 1)).indexOf ("%");
	formatStr = formatStr.replace (/%d+%/g, calcInt (secs, 86400, 0, minLength));

	minLength = (formatStr.substr (formatStr.indexOf ("%h") + 1)).indexOf ("%");
 	formatStr = formatStr.replace (/%h+%/g, calcInt (secs, 3600, hourmod, minLength));

	minLength = (formatStr.substr (formatStr.indexOf ("%m") + 1)).indexOf ("%");
	formatStr = formatStr.replace (/%m+%/g, calcInt (secs, 60, minmod, minLength));

	minLength = (formatStr.substr (formatStr.indexOf ("%s") + 1)).indexOf ("%");
	formatStr = formatStr.replace (/%s+%/g, calcInt (secs, 1, secmod, minLength));

	if (timerSpan != null) {
		timerSpan.innerHTML = formatStr;
		func = "eventTimerClient(\'" + timerSpanId + "\',\'" + eventCode + "\'," + eventTime;
		if (custSign) func += ",\'" + sign[0] + "\',\'" + sign[1] + "\'";
		func += ")";
		setTimeout (func, 1000);
	}
}
