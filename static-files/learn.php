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
		
		<p>HTML stands for HyperText Markup Langauge. It's a special language we use to talk to tell computers how to build webpages. We use HTML <code>&lt;tags&gt;</code> to tell the browser (the bit of software that shows us webpages) what our content is. A tag opens when the content starts, like this: <code>&lt;tag&gt;</code>, and closes when it's finished, like this: <code>&lt;/tag&gt;</code>.</p>
		
		<p>When we're writing HTML, this is referred to as "marking up" content. In other words, we're adding invisible notes to it that makes the content make more sense to humans and computers. The tags describe what the content is so the computer can translate it for humans. Is it an image? A link? A heading?</p> 
		
		<h2>What's so great about HTML?</h2>
		
		<p>HTML pages can be viewed on pretty much any device that has a browser. A browser is something that looks at your code and translates it into a webpage. If you're reading this online, you're using a browser right now.</p>
		
		<p>To view an HTML page you use a browser, but to write one you can use a simple text editor. You've probably already got one installed, like Notepad or Textedit. To turn a page into a webpage, just save it as an HTML file (put .html on the end when you're saving it) like about-me.html.</p>
		
		<h2>Making a webpage</h2>
		
		<p>At the top of our webpage, we need to put some information for the browser. We tell it that it's a webpage by typing <code>&lt;!DOCTYPE html&gt;</code>, then we open an <code>&lt;html&gt;</code> tag to tell it that we've started writing HTML. Before we close this tag, we put another tag inside it. (When we open another tag before closing the previous one, this is called nesting tags.)</p>
		
		<p>Like people, web pages have a head and a body, so we have a <code>&lt;head&gt;</code> tag and a <code>&lt;body&gt;</code> tag. In the head, we put information that's useful to the browser but that we don't want to appear on the page. In the body, we put all the content. You can have a look at the example I've built here:</p>
		
		<iframe src="http://jsbin.com/osajac/36/edit#html,live"></iframe>	
		
		<p>Don't worry, you don't need to remember to write all that stuff, just copy and paste it.</p>	
		
		<h2>Paragraphs</h2>
		
		<p>So if we want to tell something be a paragraph, we wrap it in a <code>&lt;p&gt;</code> tag within our <code>&lt;body&gt;</code> tags like this:</p>
		
		<iframe src="http://jsbin.com/oripic/1/edit#html,live"></iframe>
		
		<p>It's really easy. We open the tag, pop our content inside, then when we're done, we close it using a forward slash.</p>
		
		<h2>Headings</h2>
		
		<p>Headings, like the one above break up the text and make it easier for someone to read. There are 6 different types of heading. Why so many? Well, you're probably going to want your biggest most important heading to be at the top of your page to explain what that page is all about, like "About me". We give this an <code>&lt;h1&gt;</code> tag. On your page, you'll probably want to have different sections like "My favourite things" and "My least favourite things". These could be <code>&lt;h2&gt;</code> tags which will appear a little smaller than the <code>&lt;h1&gt;</code>. Then within say the "My favourite things" section, you may want other sub-headings like "Films", "Food" and "Music". For these, you can use the <code>&lt;h3&gt;</code>. These different types of heading are called "heading level"s and they go all the way from <code>&lt;h1&gt;</code> which is the biggest and most important, to <code>&lt;h6&gt;</code> which is the smallest and least important. You'll probably only end up using the first 3 though!</p>
		
		<h2>Links</h2>
		
		<p>If we want some text to behave as a link, we need to tell the browser 3 things. First, we need to tell it that we're making a link, then we need to tell it where we want people to go when they click on the link, and we also need to tell it what we want the clickable content to be.</p>
		
		<iframe src="http://jsbin.com/ewizaw/1/edit#html,live"></iframe>
		
		<p>As you can see, we've opened the tag with an <code>&lt;a&gt;</code>, and the <code>href="&hellip;"</code> bit tells the browser where the person will go when they click on the link. The browser makes the link blue and gives it an underline so people know they can click on it. When we want the link to stop, we close the tag by typing <code>&lt;/a&gt;</code>.</p>
		
		<h2>See for yourself</h2>
		
		<p>You can see how pages are marked up by looking at the source code. Try right-clicking on this web page and selecting "View Source".</p>
		
		<p>Want to find out more? <a href="http://www.w3.org/wiki/The_basics_of_HTML">Read the W3C's page on the basics of HTML</a></p>
	
	</div>

</article>

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