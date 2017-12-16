var NTP = {
  cookieShelfLife : 7, //7 days
  requiredResponses : 2,
  serverTimes : new Array, 
  serverUrl : "/includes/gettime.php",
  sync : function(){
     NTP.serverTimes = new Array;
     NTP.getServerTime();
  },
  getNow : function(){
      var date = new Date();
      return (date.getTime() + (date.getTimezoneOffset() * 60000));
  },
  parseServerResponse : function(data){
     var offset = parseInt(data.responseText.split(":")[0]);
     var origtime = parseInt(data.responseText.split(":")[1]);
     var delay = ((NTP.getNow() - origtime) / 2);
     offset = offset - delay;
     NTP.serverTimes.push(offset);
     
     // if we have enough responces set cookie
     if (NTP.serverTimes.length >= NTP.requiredResponses){
        // build average
	var average = 0;
	var i=0;
	for (i=0; i < NTP.serverTimes.length;i++){
	   average += NTP.serverTimes[i];
	}
	average = Math.round(average / i);
	
	NTP.setCookie("NTPClockOffset",average);	
     }
     else{
        NTP.getServerTime();
     }

  },
  getServerTime : function(){
     try{
      var req = new Ajax.Request(NTP.serverUrl,{
          onSuccess : NTP.parseServerResponse,
	  method : "get",
	  parameters : "t=" + NTP.getNow()
          });
      }
      catch(e){
         return false;
         //prototype.js not available
      }
  },
  setCookie : function(aCookieName,aCookieValue){
     var date = new Date();
     date.setTime(date.getTime() + (NTP.cookieShelfLife * 24*60*60*1000));
     var expires = '; expires=' + date.toGMTString();
     document.cookie = aCookieName + '=' + aCookieValue + expires + '; path=/';
  },
  getCookie : function(aCookieName){
     var crumbs = document.cookie.split('; ');
             for (var i = 0; i < crumbs.length; i++)
            {
                var crumb = crumbs[i].split('=');
                if (crumb[0] == aCookieName && crumb[1] != null)
                {
                    return crumb[1];
                }
            }
      return false;
  },
  fixTime : function(timeStamp){
      if(!timeStamp){timeStamp = NTP.getNow();}
      var offset = NTP.getCookie("NTPClockOffset") ;
      if (!offset){offset = 0;}
      return timeStamp + parseInt(offset);
  }  
};
