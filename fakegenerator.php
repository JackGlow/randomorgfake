<?php

require_once("config.php");

$cfg = new fakeRnd;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>RANDOM.ORG - Integer Widget</title>

<style type="text/css">
/* Eric Myer's Global Reset http://meyerweb.com/eric/tools/css/reset/index.html v1.0 | 20080212 */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}

#true-random-integer-generator {
	font-family: verdana, sans;
	font-size: 9pt;
	background: #FFFFFF;
	padding: 5px;
	margin: 0px;
	width: 148px;
	color: #777777;
	
		border: 1px solid #CCCCFF;}

#true-random-integer-generator-title {
	text-align: center;
	padding: 1px;
	display: block;
	background: #CCCCFF;
	color: #000000;
	margin: -6px;
	margin-bottom: 10px;
}


#true-random-integer-generator-min-span {
	display: block;
	margin-bottom: 5px;
}

#true-random-integer-generator-min-span label {
	color: #777777;
}

#true-random-integer-generator-min-span input {
	width: 77px;
	margin-left: 10px;
}

#true-random-integer-generator-max-span {
	display: block;
	margin-bottom: 5px;
}

#true-random-integer-generator-max-span label {
	color: #777777;
}

#true-random-integer-generator-max-span input {
	width: 77px;
	margin-left: 6px;
}

#true-random-integer-generator-button {
	display: block;
}

#true-random-integer-generator-result {
	display: block;
	padding: 2px;
	margin-bottom: 10px;
	color: #000000;
	background:  #CCCCFF;
	font-size: 11pt;
}

#true-random-integer-generator-credits {
	display: block;
	font-size: 6pt;
	text-align: right;
	padding: 1px;
}

#true-random-integer-generator-credits a {
	color: #777777;
}

#true-random-integer-generator-credits a:hover {
	color: #000000;
}
</style>

<script type="text/javascript">
    if ("https:" == document.location.protocol) {
      document.write(unescape("%3Cscript src='https://www.google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    } else {
      document.write(unescape("%3Cscript src='http://www.google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    }
  </script>
  <script type="text/javascript">
    var rdoIframeTracker = _gat._getTracker("UA-6153345-1");
    rdoIframeTracker._setDomainName("none");
    rdoIframeTracker._setAllowLinker(true);
    rdoIframeTracker._trackPageview("/widgets/integers/iframe?title=True+Random+Number+Generator&amp;buttontxt=Generate&amp;width=160&amp;height=200&amp;border=on&amp;bgcolor=%23FFFFFF&amp;txtcolor=%23777777&amp;altbgcolor=%23CCCCFF&amp;alttxtcolor=%23000000&amp;defaultmin=1&amp;defaultmax=100&amp;fixed=off");
  </script>

<script language="javascript" type="text/javascript" src="iframe.js"></script>

</head>

<body>

<div id="true-random-integer-generator">
	<span id="true-random-integer-generator-title">True Random Number Generator</span>
	<span id="true-random-integer-generator-min-span">
		<label for="true-random-integer-generator-min">Min:</label>
		<input type="number" name="true-random-integer-generator-min" id="true-random-integer-generator-min" maxlength="9" value="1" onkeypress="return integerJsInputControl(event);" />
	</span>
	<span id="true-random-integer-generator-max-span">
		<label for="true-random-integer-generator-max">Max:</label>
		<input type="number" name="true-random-integer-generator-max" id="true-random-integer-generator-max" maxlength="9" value="100" onkeypress="return integerJsInputControl(event);" />
	</span>
	<span id="true-random-integer-generator-max-button-span">
		<input type="button" value="Generate" name="true-random-integer-generator-button" id="true-random-integer-generator-button" onclick="fakeGenerate();" />
	</span>
	<label for="true-random-integer-generator-result">Result:</label>
	<span id="true-random-integer-generator-result"></span>
	<span id="true-random-integer-generator-credits">Powered by <a href="https://www.random.org/" target="_blank">RANDOM.ORG</a></span>
</div>

</body>
</html>


<script type="text/javascript">
var tries = <?= $cfg->tries ?>;
function fakeGenerate(){
	document.getElementById('true-random-integer-generator-result').innerHTML = "<img src='ajax-loader.gif'>";

	if(window.tries > 0){
		setTimeout(function(){
		document.getElementById('true-random-integer-generator-result').innerHTML = getRandomInt(parseInt(document.getElementById("true-random-integer-generator-min").value), parseInt(document.getElementById("true-random-integer-generator-max").value));
	},getRandomInt(333,3000));
		window.tries--;
		return;
	}
	setTimeout(function(){
		document.getElementById('true-random-integer-generator-result').innerHTML = "<?= $cfg->result; ?>";
	},getRandomInt(333,3000));
	
}

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
</script>