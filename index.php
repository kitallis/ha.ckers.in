<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
// Make sure this array is filled in accordance with the number of hackers in the HTML below. ALWAYS.
$hackerNicks = array("lut4rp", "nirbheek", "kitallis", "Ford_Prefect", "GeneralMaximus", "sid0", 
	"m1k3y", "ideamonk", "devilsadvocate");
shuffle($hackerNicks);

function get_blurb($nick) {
	$directory = "blurbs/";
	$nick = strtolower($nick); 
	$filePath = $directory.$nick.".txt";
	if ($file = fopen($filePath, "r")) { 
		while(!feof($file)) {
  		echo fgets($file);
    }
  }
	else
		echo "No description found";
	fclose($file);
}

function get_avatar($nick) {
	$directory = "avatars/";
	$nick = strtolower($nick); 
	$filePath = $directory.$nick;
	if (file_exists($filePath.".png")) {
		echo $filePath.".png";
	} elseif (file_exists($filePath.".jpg")) {
		echo $filePath.".jpg";
	} else { 
		echo $directory."default.jpg";
	}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs"> 
 <head> 
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  <link rel="stylesheet" href="style.css" type="text/css" /> 
    
  <title>#hackers-india</title> 
  
 </head> 
 <body> 
	<div id="wrapper">
		<div id="header">
			<a href="/" title="wanna refresh?">
				<img src="images/hi.png" alt="#hackers-india" />
			</a>
		</div>
		<div id="content">
		<?php
		$i = 0;
 		if($i < count($hackerNicks)) {
 		?>
			<div id="col1">
				<h4>
					<a href="/path/to/blog">
						<?php echo $hackerNicks[$i]; ?>
					</a>
				</h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->

			</div>
			
			
			
			<div id="col2">
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
			</div>
			
			
			
			<div id="col3">
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); $i = $i + 1; ?>
				</p>
				<!-- end of a hacker -->
				<h4><?php echo $hackerNicks[$i]; ?></h4>
				<p>
					<img  align="left" src=<?php get_avatar($hackerNicks[$i]); ?> alt="FooMaster" />
					<br />
					<?php get_blurb($hackerNicks[$i]); ?>
				</p>
				<!-- end of a hacker -->
			</div>
		<?php } ?>	
		</div>
		
		<div id="footer">
			Warning: The climate of #hackers-india may unknowingly vary from geek to sexist to silence to foo. Humans unaccustomed to sudden change and unparalleled levels of foo might be permanently affected. <br />
			&copy;2010 irc.oftc.net#hackers-india
		</div>
	</div>
 </body>
</html>
