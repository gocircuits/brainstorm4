<script>
	import { images } from "$lib/component/screenshots.js";
	import Slide from "$lib/component/Slide.svelte";
	import Thumbnail from "$lib/component/Thumbnail.svelte";
	import Caption from "$lib/component/Caption.svelte";

	/* IMAGE TO SHOW */
	let imageShowingIndex = 0;
	// $: console.log(imageShowingIndex);
	$: image = images[imageShowingIndex];

	const nextSlide = () => {
		if (imageShowingIndex === images.length - 1) {
			imageShowingIndex = 0;
		} else {
			imageShowingIndex += 1;
		}
	};

	const prevSlide = () => {
		if (imageShowingIndex === 0) {
			imageShowingIndex = images.length - 1;
		} else {
			imageShowingIndex -= 1;
		}
	};

	const goToSlide = (number) => (imageShowingIndex = number);
</script>

<svelte:head>
	<title>BrainStorm Products</title>
</svelte:head>
<h2 class="page-title">BrainStorm in Action.</h2>
<div class="top">
	<!-- svelte-ignore a11y-media-has-caption -->
	<video controls poster="/images/prod-video.png">
		<source src="/video/bswdemo10a.mp4" type="video/mp4" />
		Your browser does not support the video tag.
	</video>
	<div class="screenshots">
		<!-- image gallery -->
		<div class="container">
			<Slide
				image={image.imgurl}
				altTag={image.name}
				attr={image.attribution}
				slideNo={image.id + 1}
				totalSlides={images.length}
			/>
		</div>

		<!-- Image text -->
		<Caption
			caption={images[imageShowingIndex].name}
			on:prevClick={prevSlide}
			on:nextClick={nextSlide}
		/>

		<!-- Thumbnail images -->
		<div class="thumbnails-row">
			{#each images as { id, imgurl, name, attribution }}
				<Thumbnail
					thumbImg={imgurl}
					altTag={name}
					titleLink={attribution}
					{id}
					selected={imageShowingIndex === id}
					on:click={() => goToSlide(id)}
				/>
			{/each}
		</div>
	</div>
</div>
<h3>BrainStorm Organizer</h3>
<div class="feature">
	<span>The Basics</span>
	<ul>
		<li>The working view of BrainStorm is a heading and a list</li>
		<li>Any entry in a list can be the heading of its own list</li>
		<li>
			Duplicate entries are automatically hyperlinked and marked with a double
			chevron
		</li>
	</ul>
	The end result is a tree of information with &#39;back-door&#39; links between
	related branches. The Aerial view shows an outline of how your work is progressing.
	You can open multiple views of your working model. Graham Smith kindly provided
	an annotated example of how he works in this way.
	<div class="examples">
		<div class="thumb">
			<img alt="Normal view" src="/images/tn_usertips.jpg" />
			Working view
		</div>
		<div class="thumb">
			<img alt="Aerial view" src="/images/tn_usertipsaerialpart.jpg" />
			Aerial view
		</div>
		<div class="thumb">
			<img alt="Multiple views" src="/images/tn_grahamscascadepart.jpg" />
			Multiple views
		</div>
	</div>
</div>
<div class="feature">
	<span>Grab information and links on the fly</span>
	BrainStorm&#39;s Magic Paste automatically grabs text from the clipboard. This
	means that all you have to do is highlight and copy material you see on screen.
	You can use regular copy/paste if you prefer. In both cases, you can set BrainStorm
	up to take heed of or ignore things like indents, vertical spaces and line breaks.
	If you include valid email, web, file or program addresses then you can activate
	them directly with Magic Launch.
	<div class="examples">
		<div class="thumb">
			<img alt="A web page" src="/images/tn_thinkerlogpart.jpg" />
			Selected area of web page
		</div>
		<div class="thumb">
			<img alt="Magic pasted" src="/images/tn_magicpastedpart.jpg" />
			Pasted into BrainStorm
		</div>
	</div>
</div>
<div class="feature">
	<span>Web-publish BrainStorm models</span>
	A web-publish button creates an HTML version of your work which is navigable in
	a similar way to BrainStorm itself. You can even embed extra HTML code to change
	fonts, add pictures, hotlinks and so on. Another option allows you to switch off
	the clever stuff and output the file as a simple HTML outline.
	<div class="examples">
		<div class="thumb">
			<img alt="HTML Version" src="/images/tn_allhtmlpart.jpg" />
			HTML version
		</div>
		<div class="thumb">
			<img alt="Extra Code version" src="/images/tn_graphicpart.jpg" />
			With extra code
		</div>
		<div class="thumb">
			<img alt="Outline Version" src="/images/tn_weddingoutline.jpg" />
			As an outline
		</div>
	</div>
</div>
<div class="feature">
	<span>Work with Word (and other programs)</span>
	You can output your work to other programs through the clipboard or a file. Many
	programs accept tabbed outlines as an input format. BrainStorm&#39;s File Open
	command is intelligent enough to extract meaningful information from any file.
	<br />
	Here&#39;s an example of exporting work to Word. (A Word macro is supplied with
	BrainStorm.)
	<div class="examples">
		<div class="thumb">
			<img alt="BrainStorm model" src="/images/tn_weddingsm.jpg" />
			A simple model
		</div>
		<div class="thumb">
			<img alt="Pasted into Word" src="/images/tn_weddingword.jpg" />
			Pasted into Word
		</div>
		<div class="thumb">
			<img alt="As Word outline" src="/images/tn_weddingwordout.jpg" />
			In Word outline
		</div>
	</div>
</div>
<div class="feature">
	<span>Work with PowerPoint (and other programs)</span>
	BrainStorm&#39;s File Open command is intelligent enough to extract meaningful
	information from any file. It particularly likes outlines because it can re-create
	the original hierarchy. Exporting to PowerPoint is simply a case of adding an empty
	line between each slide.<br />
	Here&#39;s an example of importing the text of a presentation from PowerPoint.
	(A PowerPoint AddIn is supplied with BrainStorm.)
	<div class="examples">
		<div class="thumb">
			<img alt="HTML" src="/images/tn_pherepptpart.jpg" />
			A PowerPoint presentation
		</div>
		<div class="thumb">
			<img alt="Pasted into Word" src="/images/tn_pptbrntricks.jpg" />
			Exported to BrainStorm
		</div>
		<div class="thumb">
			<img alt="As Word outline" src="/images/tn_pptbrnaerial.jpg" />
			Aerial view
		</div>
	</div>
</div>
<!-- </div>
	<div class="product">
		<img alt="Diary Generator" src="/images/diary.png" />
		<h3>Diary Generator</h3>
		<p>
			Download a free diary generator which complements BrainStorm and other
			programs
		</p>
	</div>
</div> -->

<div class="action-bar">
	<a href="features">See its core features</a>
</div>

<style>
	.top{
		display: flex;
	}
	.examples {
		display: flex;
		/* flex-direction: column; */
		/* flex-wrap: wrap; */
		margin: 0px;
		padding: 0px;
		color: #000;
		/* text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.35); */
	}

	.thumb {
		flex-basis: 450px;
		padding: 5px;
		font-size: var(--fs-300);
	}

	.thumb img {
		display: block;
		padding-bottom: 10px;
	}

	/* .products {
		display: flex;
		flex-wrap: wrap;
		margin: 0px;
		padding: 0px;
		color: #000; */
	/* text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.35); */
	/* } */

	/* .product {
		flex-basis: 450px;
		padding: 10px;
		font-size: var(--fs-400);
		font-weight: 150;
	} */
	.feature {
		border-top: 2px solid blue;
		padding: 20px;
	}
	span {
		color: blue;
		display: block;
		padding-bottom: 10px;
	}

	ul {
		margin-top: 2px;
	}
	video {
		margin: 5rem;
		width: 49vh;
	}

	.screenshots {
		width: 49vw;
		display: flex;
		flex-direction: column;
		margin: 10% auto;
		/* background-color: #222; */
		box-shadow: 0 0 10px black;
	}

	/* Position the image container (needed to position the left and right arrows) */
	.container {
		position: relative;
	}

	.thumbnails-row {
		width: 100%;
		display: flex;
		align-self: flex-end;
	}

	@media only screen and (max-width: 450px) {
		/* .product {
			flex-basis: 300px;
		} */

		video {
			width: 300px;
		}
	}
</style>
