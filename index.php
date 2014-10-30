<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="Photography by Thomas Wang - Wedding, Portrait and Event photographer in the Montreal area." />
<meta name="Keywords" content="thomas wang, photography, portrait, wedding, concert, landcape, event, photoshoot, montreal, canada, quebec" />

<title>THOMAS WANG PHOTOGRAPHY</title>
<link rel="icon" type="images/ico" href="images/favicon.ico" />
<link rel="stylesheet" href="scripts/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="scripts/colorbox.css" type="text/css" media="screen" />
<script src="scripts/swfobject.js" language="javascript"></script>
<script src="scripts/jquery.min.js" language="javascript"></script>
<script src="scripts/jquery.colorbox.js" language="javascript"></script>
<script>
	$(document).ready(function(){
		var
		vars = [],
		hash,
		hashes = window.location.href.slice(window.location.href.indexOf('?')+1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		} 
		$(".about").colorbox({transition:"none", opacity:"0", maxWidth:"50%", inline:true, href:"#about", open:vars[''] == 'about' ? true:false});
		$(".portfolio").colorbox({transition:"none", opacity:"0", inline:true, href:"#portfolio", open:vars[''] == 'portfolio' ? true:false});
		$(".projects").colorbox({transition:"none", opacity:"0", inline:true, href:"#projects", open:vars[''] == 'projects' ? true:false});
		$(".clients").colorbox({transition:"none", opacity:"0", maxWidth:"50%", inline:true, href:"#clients", open:vars[''] == 'clients' ? true:false});
		$(".contact").colorbox({transition:"none", opacity:"0", maxWidth:"50%", inline:true, href:"#contact", open:vars[''] == 'contact' ? true:false});
	});
</script>
<script type='text/javascript' src='scripts/form.js'></script>
</head>
<body>
<div id="fadingbg"><!--<a href="http://get.adobe.com/flashplayer/">Please Install Flash</a>--></div>
<script type="text/javascript">
	var so = new SWFObject("fadingbg.swf", "fadingbg", "100%", "100%", "8", "#333333");
	so.addParam("wmode", "opaque");
	so.addParam("salign","lt");
	so.write("fadingbg");
</script>
<div id="transparentw"></div>
<div id="title">
	<img src="images/title.png">
</div>
<div id="preloadmenu">
	<img src="images/abouth.png">
    <img src="images/dot.png" />
    <img src="images/portfolioh.png">
    <img src="images/dot.png" />
	<img src="images/projectsh.png">
    <img src="images/dot.png" />
    <img src="images/clientsh.png">
    <img src="images/dot.png" />
    <img src="images/contacth.png">
</div>
<div id="menu">
	<a class='about' href=""><img src="images/about.png" onMouseOver="this.src='images/abouth.png'" onMouseOut="this.src='images/about.png'" /></a>
    <img src="images/dot.png" />
    <a class='portfolio' href=""><img src="images/portfolio.png" onMouseOver="this.src='images/portfolioh.png'" onMouseOut="this.src='images/portfolio.png'" /></a>
    <img src="images/dot.png" />
    <a class='projects' href=""><img src="images/projects.png" onMouseOver="this.src='images/projectsh.png'" onMouseOut="this.src='images/projects.png'" /></a>
    <img src="images/dot.png" />
    <a class='clients' href=""><img src="images/clients.png" onMouseOver="this.src='images/clientsh.png'" onMouseOut="this.src='images/clients.png'" /></a>
    <img src="images/dot.png" />
    <a class='contact' href=""><img src="images/contact.png" onMouseOver="this.src='images/contacth.png'" onMouseOut="this.src='images/contact.png'" /></a>
</div>
<div id="copyright">
	<img src="images/copyright.png" />
</div>
<div id="socialnetworks">
	<a href="http://www.facebook.com/pages/Thomas-Wang-Photography/223483784347291"><img src="images/facebook.png" /></a>
	<a href="http://ca.linkedin.com/in/thomaswangphotography"><img src="images/linkedin.png" /></a>
</div>

<div style='display:none'>

<div id='about' style='padding:10px; background:#fff; text-align:justify;'>
<img src="images/about.png"/>
<br>
My name Thomas Wang and I'm an event and wedding photographer in the Montreal area. Presently a student at McGill, I specialize in portrait and landscape photography. 
<br><br>
I'm currently available for photoshoots and weddings during 2014.
</div>

<div id='portfolio' style='padding:10px; background:#fff; text-align:justify;'>
	<img src="../photography/images/portfolio.png"/>
	<br>
<?php
	$target = 'images/portfolio'; // Gives target folder location
	  
	$allowed_types = array('png','jpg','jpeg','gif'); // list of image types accepted
	
	$sectionfolders = scandir($target); // Creates an array of sorted "section" folders
	array_shift($sectionfolders); array_shift($sectionfolders); // Skip "." and ".."
	
	foreach($sectionfolders as $section) // Goes through all elements in $sectionfolders
	{
		echo  "\t" . substr($section, 2) . "<br>" . "\n"; //Gives "section" title (removes first two digits used for indexing)
		$setfolders = scandir($target . "/" . $section, 1); //Creates an array of sorted "set" folders, note that larger head digits (2) means higher in the order
		array_pop($setfolders); array_pop($setfolders); // Skip "." and ".." Note that because of previous comment, "." and ".." are last
		
		foreach($setfolders as $set) //Goes through all elements in $setfolders
		{
			echo "\t" . '<SCRIPT>$(document).ready(function(){$("a[rel=\'' . substr($set, 0) . '\']").colorbox({maxWidth:"90%", maxHeight:"90%"});});</SCRIPT>' . "\n"; //"Initializes" sets for colorbox
			$images = scandir($target . "/" . $section . "/" . $set); //Creates an array of images
			array_shift($images); array_shift($images); // Skip "." and ".."
			
			echo "\t" . "\t". '<a href="' . $target . "/" . $section . "/" . $set . "/". array_shift($images) . '" rel="' . substr($set, 0) . '">&nbsp;&nbsp;' . substr($set, 2) . '</a><br>' . "\n"; //Creates first line a href for colorbox and removes first element of $images, this also give the set title
			foreach($images as $image)
			{
				if(in_array(strtolower(substr($image,-3)),$allowed_types)) //Selects for allowed types
				{
					echo "\t" . "\t" . '<a href="' . $target . "/" . $section . "/" . $set . "/". $image . '" rel="' . substr($set, 0) . '"></a>' . "\n"; //Creates each subsequent a href for colorbox
				}
			}
		}
	}
?>  
</div>

<div id='projects' style='padding:10px; background:#fff; text-align:justify;'>
	<img src="../photography/images/projects.png"/>
	<br>
<?php
	$target = 'images/projects'; // Gives target folder location
	  
	$allowed_types = array('png','jpg','jpeg','gif'); // list of image types accepted
	
	$sectionfolders = scandir($target); // Creates an array of sorted "section" folders
	array_shift($sectionfolders); array_shift($sectionfolders); // Skip "." and ".."
	
	foreach($sectionfolders as $section) // Goes through all elements in $sectionfolders
	{
		echo  "\t" . substr($section, 2) . "<br>" . "\n"; //Gives "section" title (removes first two digits used for indexing)
		$setfolders = scandir($target . "/" . $section); //Creates an array of sorted "set" folders
		array_shift($setfolders); array_shift($setfolders); // Skip "." and ".."
		
		foreach($setfolders as $set) //Goes through all elements in $setfolders
		{
			echo "\t" . '<SCRIPT>$(document).ready(function(){$("a[rel=\'' . substr($set, 0) . '\']").colorbox({maxWidth:"90%", maxHeight:"90%"});});</SCRIPT>' . "\n"; //"Initializes" sets for colorbox
			$images = scandir($target . "/" . $section . "/" . $set); //Creates an array of images
			array_shift($images); array_shift($images); // Skip "." and ".."
			
			echo "\t" . "\t". '<a href="' . $target . "/" . $section . "/" . $set . "/". array_shift($images) . '" rel="' . substr($set, 0) . '">&nbsp;&nbsp;' . substr($set, 2) . '</a><br>' . "\n"; //Creates first line a href for colorbox and removes first element of $images, this also give the set title
			foreach($images as $image)
			{
				if(in_array(strtolower(substr($image,-3)),$allowed_types)) //Selects for allowed types
				{
					echo "\t" . "\t" . '<a href="' . $target . "/" . $section . "/" . $set . "/". $image . '" rel="' . substr($set, 0) . '"></a>' . "\n"; //Creates each subsequent a href for colorbox
				}
			}
		}
	}
?>  
</div>

<div id='clients' style='padding:10px; background:#fff; text-align:justify;'>
<img src="images/clients.png"/>
<br>
<form name=login>
	<input type="hidden" name="server" value="www.thomas-wang.com/clients/">
    Username
    <br />
	<input class="first" type=text name=username>
    <br />
    Photoshoot Date
	<br />
	(YYYYMMDD)
    <br />
	<input class="first" type=text name=date>
    <br /><br />
	<input type=button value="Download" onClick="Login(this.form)" name="button">
</form>
</div>

<div id='contact' style='padding:10px; background:#fff; text-align:justify;'>
<img src="images/contact.png"/>
<br>
For more information, please contact <a href="mailto:me@thomas-wang.com">me@thomas-wang.com</a> or call 514 804 7452.

</div>

</div>
</body>
</html>
