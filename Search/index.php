<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<iframe style="
    width: 100%; 
        min-height: 67em; border:0;" id="SearchResult" src="">
</iframe>
<script>
$(document).ready(function(){
    var q=new URLSearchParams(window.location.search).get('q');    
q=q==null?"":q;    $("#SearchResult").attr('src','http://search.freefind.com/find.html?id=32588065&pageid=r&sbv=j2&_charset_=UTF-8&bcd=%C3%B7&scs=1&query='+q+'&Find=Search&mode=ALL');

});


}
    </script>
<?php include "../scripts/footer.html"; ?>
