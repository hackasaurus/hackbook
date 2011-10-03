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

<h1>HTML</h1>

<p>HTML stands for HyperText Markup Langauge. We use HTML "tags" to tell the browser (the bit of software that shows us webpages) what our content is. When we're writing HTML, this is referred to as "marking up" content. In other words, we're adding special annotations to it that makes the content make more sense to humans and computers.</p>

<h2>What's so great about HTML?</h2>

<p>HTML pages can be viewed on pretty much any device. You don't need special software to write it, just a simple text editor. When we mark up content in HTML, we're basically describing what that content is. We mark up content by using something called a tag. We open the tag, put the relevant content inside, then close it.</p>

<h2>Marking up paragraphs</h2>

<p>So if we want to tell something be a paragraph, we give it a paragraph tag like this:</p>

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
			<div class="instructions">
				<p>It's really easy. We open the tag, pop our content inside, then when we're done, we close it using a forward slash.</p>
			</div>
		</div>
	</div>
</article>

<h2>Marking up links</h2>

<p>If we want some text to behave as a link, we need to tell the browser 3 things. First, we need to tell it that we're making a link, then we need to tell it where we want people to go when they click on the link, and we also need to tell it what we want the clickable content to be.</p>

<article class="snippet" id="snippet-link-1">
	<div class="examples">
		<div class="how-it-works">
			<h2>The code</h2>
			<pre class="code"><code class="prettyprint lang-html"><?php include_once('library/snippet/link-1.html') ?></code></pre>
			<div class="instructions">
				<p>As you can see, we've opened the tag with an &lt;a, and the href="&hellip;" bit tells the browser where the person will go when they click on the link. The browser makes the link blue and gives it an underline so people know they can click on it. When we want the link to stop, we close the tag by typing &lt;/a&gt;.</p>
			</div>
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

<h2>See for yourself</h2>

<p>You can see how pages are marked up by looking at the source code. Try right-clicking on this web page and selecting "View Source".</p>

<p>Want to find out more? <a href="http://www.w3.org/wiki/The_basics_of_HTML">Read the W3C's page on the basics of HTML</a></p>

</article>

<article class="post" id="what-is-css">

	<h1>What is CSS?</h1>
	
	<p>HTML is all about telling the browser what things are. The browser gives content default styles depending on what tags we give it, but if we want to add our own styles, we use CSS.</p>
	
	<p>CSS stands for Cascading Style Sheet. It's a bit of a funny name, but it will make sense when we start using it.</p>
	
	<p>When we write CSS, first we say what tag we want to style (like the paragraph tag), then we say what we want to do with it (like give it a different color), then we say what that style is going to be (like red).
	
	<p>In CSS, the thing we are styling is called the selector, the thing we are going to do with it is called the property, and the style we're giving it is called the value.</p>
	
	<p>There are lots of different properties and values which have different effects, like spells in a spell book.</p>
	
	<h2>Styling some text</h2>
	
	<p>In my CSS, I'm targeting these elements. The p points to the &lt;p&gt; tag, and the open curly brace says "styles start here". I can then add my styles. The closing curly brace says "I've finished writing styles for this tag".</p>
	
	<article class="snippet" id="snippet-paragraph-2">
		<div class="example">
			<div class="how-it-looks">
				<h2>How it looks</h2>
				<div class="preview snippet-paragraph-2c">
					<p>Lorem ipsum shizznit sit amizzle, consectetuer cool.</p>
				</div>
				<a class="button" href="http://jsbin.com/utivep/1/edit#html,live">Hack This</a>
			</div>
			<div class="how-it-works">
				<h2>The code</h2>
				<pre class="code"><code class="prettyprint lang-html"><?php include_once('library/snippet/paragraph-2c.html') ?></code></pre>
			</div>
		</div>
	</article>
	
	<p>In my HTML, I've got 2 headings. Because both headings have different tags, I can target these to give each heading a different style.</p>
	
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