<?php $title = "NoSleep Explanation Page";?>
<?php $ptitle = "NoSleep Explanation";?>
<?php $description = "A page explaining how the no sleep module on this site functions!";?>
<?php $ssheet = "../assets/dummy.css";?>
<?php $mdate = "2024";?>

<!DOCTYPE html>
<HTML LANG="en">

	<?php include "../assets/head.php";?>

	<BODY>

		<DIV CLASS="main">
			<?php include "../assets/header.php";?>
			<DIV CLASS="content">&nbsp;&nbsp;In 2008, W3C released HTML5, the fifth major revision of the Hypertext Markup Language standard. While I have my personal opinions regarding where we've gone since, HTML5 introduced a lot of very useful tools for developers like me, including the &lt;VIDEO&gt; tag.</DIV>
			<DIV CLASS="spacer"><BR></DIV>
			<DIV CLASS="content">&nbsp;&nbsp;While the &lt;VIDEO&gt; tag is very useful for sharing moving pictures with accompanying audio or subtitles, it also has some side effects: as most browser developers understand people watching videos don't want them interrupted, in most cases they will prevent your device from idling to sleep.</DIV>
			<DIV CLASS="spacer"><BR></DIV>
			<DIV CLASS="content">&nbsp;&nbsp;So we come to the nosleep.php module: by serving a webpage that has an autoplaying yet invisible video in the background, we are able to keep your device awake without needing any javascript whatsoever! And while modern browsers will not autoplay audio, they will still autoplay a &lt;VIDEO&gt; element that is muted!</DIV>
			<DIV CLASS="spacer"><BR></DIV>
			<DIV CLASS="content">&nbsp;&nbsp;Of course, Chromium-based browser users may notice a caveat: somewhere along the way, Google, owners of YouTube, *for some reason* decided to change the way that their browser handled embedded media elements. As a consequence, there's special consideration for Chromium-based browsers: there has to be an active audio output stream to prevent sleep. Since we can only suggest that the browser autoplay it, the user will need to enable automatic video and audio playback in the site settings in their browser's configuration.</DIV>
			<DIV CLASS="spacer"><BR></DIV>
			<DIV CLASS="content">And all of that, just to avoid client-side scripting.</DIV>
			<?php include "../assets/footer.php";?>
		</DIV>

		<BR>

		<DIV CLASS="fortune-box"><?php include "../assets/fortune.php";?></DIV>

	</BODY>

</HTML>

