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

<article class="post" id="what-is-css">

	<h1>What is CSS?</h1>
	
		<div class="post-content">
		
		<p>HTML is all about telling the browser what things are. The browser gives content default styles depending on what tags we give it, but if we want to add our own styles, we use CSS. CSS stands for Cascading Style Sheet. It's a bit of a funny name, but it will make sense when we start using it.</p>
		
		<p>When we write CSS, first we say what tag we want to style (like the paragraph tag), then we say what we want to do with it (like give it a different color), then we say what that style is going to be (like red).</p>
		
		<p>In my CSS, I'm targeting these elements. The p points to the &lt;p&gt; tag, and the open curly brace says "styles start here". I can then add my styles. The closing curly brace says "I've finished writing styles for this tag".</p>
		
		<iframe src="http://jsbin.com/utivep/1/edit#html,live"></iframe>
		
		<p>In CSS, the thing we are styling is called the selector, the thing we are going to do with it is called the property, and the style we're giving it is called the value.</p>
		
		<p>There are lots of different properties and values which have different effects, like spells in a spell book.</p>		
				
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