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
function Search(){
window.location.replace("http://musicfamily.org/realm/Search/?q="+$('#query').val())
}
    </script>
<?php include "../scripts/footer.html"; ?>
