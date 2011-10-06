<?php include_once("include/head.php")?>

<body class="page-how-to" onload="prettyPrint()">

<?php include_once("include/header.php")?>

<section role="main">

<div class="nav-content">
	<ul>
		<li class="selected"><a href="learn.php">HTML walkthrough</a></li>
		<li><a href="learn-css.php">CSS walkthrough</a></li>
		<li><a class="cheatsheet-html" href="resource/cheatsheet-html.pdf">HTML Cheatsheet (.pdf 48 KB)</a></li>
		<li><a class="cheatsheet-css" href="resource/cheatsheet-css.pdf">CSS Cheatsheet (.pdf 74 KB)</a></li>
	</ul>	
</div>

<article class="post" id="what-is-html">

<h1>What is HTML?</h1>

	<div class="post-content">
		
		<p>HTML stands for HyperText Markup Langauge. We use HTML "tags" to tell the browser (the bit of software that shows us webpages) what our content is. When we're writing HTML, this is referred to as "marking up" content. In other words, we're adding special annotations to it that makes the content make more sense to humans and computers.</p>		
		
		<h2>What's so great about HTML?</h2>
		
		<p>HTML pages can be viewed on pretty much any device. You don't need special software to write it, just a simple text editor. When we mark up content in HTML, we're basically describing what that content is.</p>
		
		<h2>Writing HTML</h2>
		
		<p>Like people, web pages have a head and a body. In the head, we put information that's useful to the browser but that we don't want to appear on the page. In the body, we put all the content. This is how a very basic webpage is built:</p>
		
		<!--<article class="snippet" id="snippet-template-1">
			<div class="examples">
				<div class="how-it-works">
					<h3>The code</h3>
					<p class="helper-text">You can copy and paste this, or click "hack this" to edit it straight away</p>
					<pre class="code"><code class="prettyprint lang-html"><?php include_once('library/snippet/template-1.html') ?></code></pre>
				</div>
				<div class="how-it-looks">
					<h3>How it looks</h3>
					<p class="helper-text">A preview of what the code looks like</p>
					<div class="preview">
						<img src="library/asset/template-1.png" alt="Screenshot of template 1" />
						<a class="button" href="http://jsbin.com/osajac/36/edit#html,live">Hack this</a>
						<p class="helper-text">Click "Hack This" to play with the code</p>
					</div>
				</div>
			</div>
		</article>-->
		
		<iframe src="http://jsbin.com/osajac/36/edit#html,live"></iframe>
		
		<p>We mark up content by using something called a tag. We open the tag, put the relevant content inside, then close it.</p>
		
		
		<h2>Marking up paragraphs</h2>
		
		<p>So if we want to tell something be a paragraph, we give it a paragraph tag like this:</p>
		
		<iframe src="http://jsbin.com/oripic/1/edit#html,live"></iframe>
		
		<p>It's really easy. We open the tag, pop our content inside, then when we're done, we close it using a forward slash.</p>
		
		<h2>Marking up links</h2>
		
		<p>If we want some text to behave as a link, we need to tell the browser 3 things. First, we need to tell it that we're making a link, then we need to tell it where we want people to go when they click on the link, and we also need to tell it what we want the clickable content to be.</p>
		
		<iframe src="http://jsbin.com/ewizaw/1/edit#html,live"></iframe>
		
		<p>As you can see, we've opened the tag with an &lt;a, and the href="&hellip;" bit tells the browser where the person will go when they click on the link. The browser makes the link blue and gives it an underline so people know they can click on it. When we want the link to stop, we close the tag by typing &lt;/a&gt;.</p>
		
		<h2>See for yourself</h2>
		
		<p>You can see how pages are marked up by looking at the source code. Try right-clicking on this web page and selecting "View Source".</p>
		
		<p>Want to find out more? <a href="http://www.w3.org/wiki/The_basics_of_HTML">Read the W3C's page on the basics of HTML</a></p>
	
	</div>

</article>

<article class="post" id="what-is-css">

	<h1>What is CSS?</h1>
	
		<div class="post-content">
		
		<p>HTML is all about telling the browser what things are. The browser gives content default styles depending on what tags we give it, but if we want to add our own styles, we use CSS.</p>
		
		<p>CSS stands for Cascading Style Sheet. It's a bit of a funny name, but it will make sense when we start using it.</p>
		
		<p>When we write CSS, first we say what tag we want to style (like the paragraph tag), then we say what we want to do with it (like give it a different color), then we say what that style is going to be (like red).</p>
		
		<p>In CSS, the thing we are styling is called the selector, the thing we are going to do with it is called the property, and the style we're giving it is called the value.</p>
		
		<p>There are lots of different properties and values which have different effects, like spells in a spell book.</p>
		
		<h2>Styling some text</h2>
		
		<p>In my CSS, I'm targeting these elements. The p points to the &lt;p&gt; tag, and the open curly brace says "styles start here". I can then add my styles. The closing curly brace says "I've finished writing styles for this tag".</p>
		
		<iframe src="http://jsbin.com/utivep/1/edit#html,live"></iframe>
		
		<h2>Styling headings</h2>
		
		<p>In my HTML, I've got 2 headings. Because both headings have different tags, I can target these to give each heading a different style.</p>
		
		<iframe src="http://jsbin.com/uquzig/1/edit#html,live"></iframe>
		
		<h2>Up for a challenge?</h2>
		
		<p>Try adding a paragraph to the HTML, and make it yellow in the CSS.</p>
		
		<p>Don't worry, you don't need to remember what all these styles are called, we've got a handy cheatsheet for that!</p>
		
		<p>Want to find out more? <a href="http://www.w3.org/wiki/CSS_basics">Read the W3C's page on the basics of CSS</a></p>
		
	</div>	
	
</article>
	
</section>

<?php include_once("include/footer.php")?>