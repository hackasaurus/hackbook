<?php include_once("include/head.php")?>

<script type="text/javascript">		

	$(document).ready(function() {		
		$('.examples').show();
		$('.snippet:first .examples').show();
		$('.snippet h1').click(
		function() {
			var checkElement = $(this).next();
			if((checkElement.is('.examples')) && (checkElement.is(':visible'))) {
				return false;
			}
			if((checkElement.is('.examples')) && (!checkElement.is(':visible'))) {
				$('.snippet .examples:visible').slideUp('normal');
				checkElement.slideDown('normal');
				return false;
			}
		});
		
	});

</script>

<body class="page-how-to" onload="prettyPrint()">

<?php include_once("include/header.php")?>

<style>

	.nav-content {
		float: right;
		width: 22%;
		margin-right: 3%;
		background-image: url("../image/alpha/black-15.png");
		border-bottom: 2px solid rgba(0, 0, 0, 0.35);
		border-radius: 4px 4px 4px 4px;
		padding: 0;
		position: fixed;
		right: 0;
		color: #333;
		font-size: 1.1em;
	}
	
	.nav-content ul {
		margin: 0;
		padding: 0;
	}
	
	.nav-content li {
		margin: 0;
		padding: 0;
		border-bottom: 1px dotted #fff;
		list-style-type: none;
		padding: 0.5em 5%;
	}
	
	.nav-content li:last-of-type {
		border-bottom: none;
	}
	
	.nav-content a:link,
	.nav-content a:visited,
	.nav-content a:hover,
	.nav-content a:focus,
	.nav-content a:active {
		text-decoration: none;
	}
	
	.post {
		float: left;
	    margin-left: 3%;
	    width: 69%;
	    color: #333;
	    margin-bottom: 2em;
	}
	
	footer {
		position: relative;
	}
	
	.post .snippet {
		padding: 0;
		margin: 0;
		width: 100%;
		background-image: none;
		border-bottom: none;
		border-radius: 0;
	}
	
	a:link,
	a:visited,
	a:hover,
	a:focus,
	a:active {
		color: #458DA3;
	}
	
	#cheatsheet-html {
		float: left;
		width: 32.5%;
	}
	
	#cheatsheet-css {
		float: left;
		margin-left: 2%;
		width: 32.5%;
	}

</style>

<section role="main">

<div class="nav-content">
	<ul>
		<li><a href="#what-is-html">What is HTML</a></li>
		<li><a href="#what-is-css">What is CSS</a></li>
		<li><a href="#cheatsheet-html">HTML Cheatsheet</a></li>
		<li><a href="#cheatsheet-css">CSS Cheatsheet</a></li>
	</ul>
</div>

<article class="post" id="what-is-html">

<h1>What is HTML?</h1>

<p>HTML stands for HyperText Markup Langauge. We use HTML "tags" to tell the browser (the bit of software that shows us webpages) what our content is. So if we want to tell something be a paragraph, we give it a paragraph tag like this:</p>

<article class="snippet" id="snippet-paragraph-1">
	<div class="examples">
		<div class="how-it-looks">
			<h2>How it looks</h2>
			<div class="preview">
				<p>Lorem ipsum shizznit sit amizzle, consectetuer cool.</p>
				<p>Boom shackalack funky fresh, crackalackin.</p>
			</div>
			<a class="button" href="http://jsbin.com/oripic/1/edit#html,live">Hack This</a>
		</div>
		<div class="how-it-works">
			<h2>The code</h2>
			<pre class="code"><code class="prettyprint lang-html"><?php include_once('library/snippet/paragraph-1.html') ?></code></pre>
		</div>
	</div>
</article>

<p>It's really easy. We open the tag, pop our content inside, then when we're done, we close it using a forward slash.</p>

<p>If we want some text to behave as a link, we give it a link tag like this:</p>

<article class="snippet" id="snippet-link-1">
	<div class="examples">
		<div class="how-it-works">
			<h2>The code</h2>
			<pre class="code"><code class="prettyprint lang-html"><?php include_once('library/snippet/link-1.html') ?></code></pre>
		</div>
		<div class="how-it-looks">
			<h2>How it looks</h2>
			<div class="preview">
				<a href="http://google.com">This is a link to google.com</a>
			</div>
			<a class="button" href="http://jsbin.com/ewizaw/1/edit#html,live">Hack This</a>
		</div>
	</div>
</article>

<p>We open the tag with an &lt;a, and the href="&hellip;" bit tells the browser where the person will go when they click on the link. The browser makes the link blue and gives it an underline so people know they can click on it. When we want the link to stop, we close the tag by typing &lt;/a&gt;</p>

<p>Want to find out more? <a href="http://www.w3.org/wiki/The_basics_of_HTML">Read the W3C's page on the basics of HTML</a></p>

</article>

<article class="post" id="what-is-css">

	<h1>What is CSS?</h1>
	
	<p>HTML is all about telling the browser what things are. The browser gives content default styles depending on what tags we give it, but if we want to add our own styles, we use CSS.</p>
	
	<p>CSS stands for Cascading Style Sheet. It's a bit of a funny name, but it will make sense when we start using it.</p>
	
	<p>In my HTML, I've got 2 headings.</p>
	
	<p>In my CSS, I'm targeting these elements. The h1 points to the &lt;h1&gt; tag, and the open curly brace says "styles start here". I can then add my styles. The closing curly brace says "I've finished writing styles for this tag".</p>
	
	<article class="snippet" id="snippet-color-1">
		<div class="examples">
			<div class="how-it-works">
				<h2>The code</h2>
				<pre class="code"><code class="prettyprint lang-html"><?php include_once('library/snippet/color-1.html') ?></code></pre>
			</div>
			<div class="how-it-looks">
				<h2>How it looks</h2>
				<div class="preview">
					<h1>Blue Heading</h1>
					<h2>Green heading with a pink background</h2>
				</div>
				<a class="button" href="http://jsbin.com/uquzig/1/edit#html,live">Hack This</a>
			</div>
		</div>
	</article>
	
	<p>The h1 is now blue, and the h2 is green with a pink background. Try adding a paragraph to the HTML, and make it yellow in the CSS.</p>
	
	<p>Easy peasy! Don't worry, you don't need to remember what all these styles are called, we've got a handy cheatsheet for that!</p>
	
</article>

<article class="post" id="cheatsheet-html">

	<h1>HTML Cheatsheet</h1>
	
	<p><a href="resource/cheatsheet-html.pdf">HTML Cheatsheet</a> (.pdf 48 KB)</p>

</article>

<article class="post" id="cheatsheet-css">

	<h1>CSS Cheatsheet</h1>
	
	<p><a href="resource/cheatsheet-css.pdf">CSS Cheatsheet</a> (.pdf 74 KB)</p>

</article>
	
</section>

<?php include_once("include/footer.php")?>