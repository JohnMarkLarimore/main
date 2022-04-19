<?php
	echo "<title>JML</title><body><h3>Welcome!</h3>";
	echo "<p>Today is ";
	echo date("l, F jS, Y", time());
	echo ". I launched my website on "; 
	$beginning_of_time = '2022-04-18 09:00:00';
	echo date("l F jS Y", strtotime($beginning_of_time)); 
	echo ", or "; 
	echo time_elapsed_string($beginning_of_time, TRUE);
	echo ". I recently uploaded a few YouTube math <a href=https://www.youtube.com/channel/UCeJ2R8F1xxydUL4GIDTMifA> videos</a>";
	echo ". Here is are links to my interconnected professional social media: <a href=https://www.linkedin.com/in/johnlarimore/> LinkedIn</a> and ";
	echo " <a href=https://github.com/JohnMarkLarimore/>Github</a>.</p>";
	echo "In May 2013, I earned a bachelor's degree in mathematics, with an emphasis in ";
	echo "probability & statistics. My minor was political science. I worked for seven years as an analyst for a renewable energy";
	echo " consultancy, doing technical due diligence enabling tax equity investments.</p>";
	echo "<p>This website is meant to be fast. The first thing I did was remove the Wordpress files and set the configuration setting to ";
	echo "read the index.php file that currently powers it. This website is about data aggregation and visualization. If you have any";
	echo " suggetions for intersting data sets tha you'd like to see a picture of, let me know. Let's collaborate!";
	echo "</p></body>";
	echo "<a href=mathvideos.html>This link</a> takes you to my collection of Youtube math problems layed out differently.";


	
	function time_elapsed_string($datetime, $full = false) {
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);

		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;

		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}

		if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>