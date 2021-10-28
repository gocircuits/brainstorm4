<script>
	import { page } from "$app/stores";
	import Header from "$lib/header/Header.svelte";
	import "../app.css";

	// let location = 33;
	// let direction = "right";
	// const orbit = setInterval(() => {
	// 	if (direction == "right") {
	// 		if (location <= 93) {
	// 			location += 3;
	// 		} else {
	// 			direction = "left";
	// 		}
	// 	} else {
	// 		if (location >= 33) {
	// 			location -= 3;
	// 		} else {
	// 			direction = "right";
	// 		}
	// 	}
	// }, 100);
</script>

<div class="content">
	{#if $page.path === "/"}
		<video autoplay muted loop id="myVideo">
			<source src="/bg-vid-480.mp4" type="video/mp4" />
		</video>
	{/if}
	<Header />

	<main>
		<slot />
	</main>

	<footer>
		<!-- <svg
			version="1.1"
			id="Layer_1"
			xmlns="http://www.w3.org/2000/svg"
			xmlns:xlink="http://www.w3.org/1999/xlink"
			x="0px"
			y="0px"
			width="140px"
			height="140px"
			viewBox="0 0 140 140"
			enable-background="new 0 0 140 140"
			xml:space="preserve"
		>
			<defs>
				<path
					id="planet"
					fill="#FF0000"
					d="M84.789,65.944c0,17.039-12.771,40.211-23.238,40.211c-10.466,0-23.237-23.173-23.237-40.211
			c0-15.794,10.403-26.389,23.237-26.389C74.388,39.555,84.789,50.149,84.789,65.944z"
				/>
				<circle
					id="moon"
					r="9"
					cx={location}
					cy="43"
					fill="orange"
					fill-opacity="0.8"
				/>
			</defs>
      {#if (direction == 'right')}
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#moon" />
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#planet" />
      {:else}
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#planet" />
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#moon" />
			
      {/if}
		</svg> -->
		<p>Copyright 2021 BrainStorm, Inc.</p>
	</footer>
</div>

<style>
	#myVideo {
		position: fixed;
		right: 0;
		bottom: 0;
		min-width: 100%;
		min-height: 100%;
		z-index: -1;
	}
	.content {
		padding-top: 5px;
		/* background-image: url("/bg-dots.png"); */
		/* background-image:  linear-gradient(to bottom,rgba(10,10,0,.6),rgba(10,10,0,.9)),url('bg-whiteboard.jpg'); */
		/* background-size: cover;  */
		/* background-color: rgba(10,10,0,.9);  */
	}
	main {
		flex: 1;
		display: flex;
		flex-direction: column;
		padding: 1rem;
		width: 100%;
		max-width: 1024px;
		margin: 0 auto;
		box-sizing: border-box;
	}

	footer {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		padding: 40px;
		border-top: 1px solid rgba(0, 0, 0, 0.1);
	}

	@media (min-width: 480px) {
		footer {
			padding: 40px 0;
		}
	}
</style>
