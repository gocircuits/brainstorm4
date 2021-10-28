<script>
	import Feat from '$lib/component/feat-data.js';
	import Feat2 from '$lib/component/feat2-data.js';
</script>

<!-- <script context="module"> -->
<!-- export const prerender = true; -->
<!-- </script> -->

<svelte:head>
	<title>BrainStorm, Inc. &mdash; your thoughts, without distraction</title>
</svelte:head>
<div class="container">
	<h1 class="intro-title">BrainStorm for Windows</h1>
	<h2 class="intro-tag">Accelerate your thinking, writing and planning</h2>

	<a href="/products" class="image">
		<img alt="Grab data from the web" src="/images/tn_thinkerlog.jpg" />
	</a>
	<h2 class="text">
		<a href="/products"><strong>Keep on top of things</strong></a><br /> BrainStorm makes it easy for
		you to capture information from your head, your computer screen or any file. Grab what you need on
		the fly. organize and embellish it when it suits you. References to external files, programs, web
		and email addresses can be invoked with Magic Launch.
	</h2>
	<a href="/products" class="image">
		<img alt="look at multiple views" src="/images/tn_grahamscascadepart.jpg" />
	</a>
	<h2 class="text">
		<a href="/products"><strong>Effortlessly improve your ideas</strong></a><br /> BrainStorm doesn't
		get in your way. Its apparent simplicity hides enormous power. Use it to refine, enhance and organize
		your ideas and other information into a comprehensive and coherent structure.
	</h2>
	<div class="features">
		{#each Feat as item, i}
			{#if item.title}
				{#if item.href}
					<a class="item" href={item.href}>{item.title}</a>
				{:else}
					<span class="item" style="background-color: inherit">
						{@html item.title}
					</span>
				{/if}
			{:else}
				<a class="item" href={item.href}>
					<img src="/arrow-right-circle.svg" alt="" />
				</a>
			{/if}
		{/each}
	</div>
	<div class="features2 mobile-table">
		{#each Feat2 as item2, i}
			<a class="item2" href={item2.href}>{item2.title}</a>
		{/each}
	</div>
	<div class="action-tag">
		<p>Capture your thoughts, without distraction.</p>
	</div>
	<div class="action-bar">
		<a class="button" href="users"> See who 's using it</a>
		<a class="button" href="products"> Learn about our app </a>
		<a class="button" href="features"> Core Features</a>
	</div>
</div>

<style>
	.container {
		display: grid;
		grid-template-columns: 110px 1fr;
		grid-template-rows: auto;
		gap: 1em 1em;
	}

	.intro-title,
	.intro-tag {
		color: white;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.35);
		margin: 0rem;
		grid-column-start: 2;
		grid-column-end: 3;
	}

	.intro-title {
		font-size: var(--fs-600);
		font-weight: 300;
	}
	.intro-tag {
		font-size: var(--fs-500);
		font-weight: 300;
	}

	img {
		margin-top: 0px;
		border-radius: 10%;
		-webkit-border-radius: 10%;
		opacity: 0.8;
		-webkit-transition: all 150ms ease-in-out;
		-moz-transition: all 150ms ease-in-out;
		transition: all 150ms ease-in-out;
	}

	.image {
		grid-column-start: 1;
		grid-column-end: 2;
		align-self: center;
	}
	.text {
		grid-column-start: 2;
		grid-column-end: 3;
		margin: 0rem;
		font-size: var(--fs-400);
		font-weight: 200;
		color: white;
		align-self: center;
	}
	.text a {
		text-decoration: none;
	}

	.features {
		grid-column: 2/3;
		display: grid;
		grid-gap: 10px;
		grid-template-columns: repeat(5, [col] 135px);
		grid-template-rows: repeat(8, [row] auto);
		color: #444;
	}
	.item {
		border-radius: 10%;
		-webkit-border-radius: 10%;
		font-size: var(--fs-300);
		padding: 10px;
		font-weight: 200;
		background-color: hsla(39, 77%, 83%, 0.3);
		text-align: center;
		color: black;
		text-decoration: none;
	}

	.item:hover {
		background-color: hsla(39, 77%, 83%, 0.6);
	}

	.action-bar,
	.action-tag {
		grid-column-start: span 2;
	}
	.action-tag {
		margin: auto;
		text-align: center;
		text-transform: uppercase;
		font-size: var(--fs-300);
		font-weight: 400;
		letter-spacing: 0.15em;
		color: white;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.35);
	}

	strong {
		font-size: var(--fs-500);
		font-weight: 200;
		color: wheat;
	}
	.mobile-table {
		display: none;
	}
	@media only screen and (max-width: 835px) {
		.features {
			display: none;
		}
		.intro-title,
		.intro-tag {
			grid-column-start: span 2;
		}
		.features2 {
			grid-column-start: span 2;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-evenly;
			color: #444;
		}
		.item2 {
			flex-basis: 2rem;
			border-radius: 10%;
			-webkit-border-radius: 10%;
			font-size: var(--fs-300);
			margin: 0.55rem;
			padding: 10px;
			font-weight: 200;
			background-color: hsla(39, 77%, 83%, 0.3);
			text-align: center;
			color: black;
			text-decoration: none;
		}
		.item2:hover {
			background-color: hsla(39, 77%, 83%, 0.6);
		}
	}
</style>
