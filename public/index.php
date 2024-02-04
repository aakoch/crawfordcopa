<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Crawford County, PA</title>
<meta name="description" content="">
<meta name="author" content="">
<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<!-- CSS : implied media="all" -->
<link rel="stylesheet" href="style.css?v=1">
<meta name="verify-v1" content="a6A9P9XhwRyR/KjW5bENGjQaXx88jh9yKKN6wfvoefo=" />
<style type="text/css">
#introTour {
    font-size: .85em;
	font-variant: normal;
    color: #000;
    display: block;
}
#introOf {
    font-size: .5em;
    font-style: italic;
	font-variant: normal;
    color: #000;
    display: block;
}
h1 {
    text-align: center;
    padding-bottom: 30px;
}
#main {
    font-size: 1.2em;
    text-align: center;
}
#main div {
    margin: 8px auto;
}
#main div#non-categories {
    margin: 30px auto 25px;
    font-style: normal;
}
#main div#email {
    font-size: 12.8px;
}
#main div#email label {
    font-style: italic;
}
#disclaimer {
    width: 89%;
    margin: 55px auto 0;
}
#disclaimer label {
    font-weight: bold;
    text-transform: uppercase;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ECKENLZ8P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ECKENLZ8P');
</script>
</head>
<body>

  <div id="container">
    <header>
    	<h1>
&nbsp;
            <span id="introTour">A Genealogical Tour</span>
    	    <span id="introOf">of</span>
            Crawford County, Pennsylvania</h1></header>
    <div id="main">
        <div>  
			<a href="biography.shtml">Biography</a>   &middot;  
			<a href="cemetery.html">Cemeteries</a>   &middot;  
			<a href="census.html">Census</a>  &middot;
			<a href="court.html">Courthouse</a>     
        </div>
        <div>
			<a href="history.html">History</a>   &middot;  
			<a href="indexes.html">Indexes</a>   &middot;  
			<a href="maps.html">Maps</a>   &middot;  
			<a href="military.html">Military Affairs</a>   &middot;  
			<a href="places.html">Places</a>
        </div>
        <div>   
			<a href="publications.html">Published Sources</a>   &middot;  
			<a href="facilities.html">Research Facilities</a>   &middot;  
			<a href="vital.html">Vital Records</a>
        </div>
        <div id="non-categories">
            <font size="-0.5"><a href="added.shtml">Latest Additions</a>  &middot; 
            <a href="related.html">Related Sites</a></font>
        </div>
<?php
function enc($string){
	$string = htmlentities($string);
	for($i=0;$i<strlen($string);++$i){
		$n = rand(0,2);
		if ($n == 0)
			$finished.='&#x'.sprintf("%X",ord($string{$i})).';';
		else if ($n == 1)
			$finished.='&#'.ord($string{$i}).';';
		else if ($n == 2)
			$finished.=$string{$i};
	}
	return $finished;
}
?>
	<div id="email"><label>E-mail</label> <a href="<?= enc('mailto:' . "tom@yoset.org");?>">Tom Yoset</a>
	<br>(Tom&#64;Yoset.org)</div></div>
    <footer>
        <div id="disclaimer"><label>Disclaimer</label>: &nbsp;The information on this web site is not intended for redistribution for any commercial use, but may be freely copied and shared for genealogical, historical, or other educational research purposes. &nbsp;The validity of the information should, however, be verified from original sources. &nbsp;Any and all representations regarding the accuracy or completeness of this information are hereby disavowed. 
        &nbsp;This site was last revised in June 2023.</div>
    </footer></div>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ECKENLZ8P');
</script>
<a href="http://crawfordcopa.com/vindictivematte.php"><!-- enterprise --></a> <a href="http://crawfordcopa.com/vindictivematte.php" style="display: none;">enterprise</a> <div style="display: none;"><a href="http://crawfordcopa.com/vindictivematte.php">enterprise</a></div> <a href="http://crawfordcopa.com/vindictivematte.php"></a> <!-- <a href="http://crawfordcopa.com/vindictivematte.php">enterprise</a> --> <div style="position: absolute; top: -250px; left: -250px;"><a href="http://crawfordcopa.com/vindictivematte.php">enterprise</a></div> <a href="http://crawfordcopa.com/vindictivematte.php"><span style="display: none;">enterprise</span></a> <a href="http://crawfordcopa.com/vindictivematte.php"><div style="height: 0px; width: 0px;"></div></a>
</body>
</html>