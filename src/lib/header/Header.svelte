<script>
	import { page } from "$app/stores";
	// import logo from './brainstorm-logo.svg';
	import logo from './brainstorm-logo-new.svg';
	import { onMount } from "svelte";
	// let location = 33;
	// let direction = "right";
	// let color="orange";
	
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

	// Show mobile icon and display menu
	let showMobileMenu = false;

	// List of navigation items
	const navItems = [
		{ label: "Home", href: "/"},
		{ label: "Products", href: "/products"},
		{ label: "Company", href: "/company"},
		{ label: "Purchase", href: "/purchase"},
		{ label: "FAQ", href: "/faq"},
		{ label: "Contact", href: "/contact"},
	];


	// Mobile menu click event handler
	const handleMobileIconClick = () => (showMobileMenu = !showMobileMenu);

	// Media match query handler
	const mediaQueryHandler = (e) => {
		// Reset mobile state
		if (!e.matches) {
			showMobileMenu = false;
		}
	};

	// Attach media query listener on mount hook
	onMount(() => {
		const mediaListener = window.matchMedia("(max-width: 767px)");

		mediaListener.addListener(mediaQueryHandler);
	});
</script>

<header id="header">
	<h1 class="logo">
		<a href="/">
			<img  id="logo" src={logo} alt="BrainStorm" />
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
						fill="white"
						d="M84.789,65.944c0,17.039-12.771,40.211-23.238,40.211c-10.466,0-23.237-23.173-23.237-40.211
			c0-15.794,10.403-26.389,23.237-26.389C74.388,39.555,84.789,50.149,84.789,65.944z"
					/>
					<circle
						id="moon"
						r="9"
						cx={location}
						cy="43"
						fill={color}
						fill-opacity="0.9"
						stroke="black"
						stroke-width="1"
					/>
				</defs>
				{#if direction == "right"}
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#moon" />
					<use
						xmlns:xlink="http://www.w3.org/1999/xlink"
						xlink:href="#planet"
					/>
				{:else}
					<use
						xmlns:xlink="http://www.w3.org/1999/xlink"
						xlink:href="#planet"
					/>
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#moon" />
				{/if}
			</svg> -->
					</a>
	</h1>

	<nav>
		<div
			on:click={handleMobileIconClick}
			class={`mobile-icon${showMobileMenu ? " active" : ""}`}
		>
			<div class="middle-line" />
		</div>
		<ul class={`navbar-list${showMobileMenu ? " mobile" : ""}`}>
			{#each navItems as item}
				<li>
					<a class:active={$page.path === item.href} href={item.href}
						>{item.label}</a
					>
				</li>
			{/each}
		</ul>
	</nav>
</header>

<style>
	#header {
		display: flex;
		flex-direction: row;
		box-sizing: border-box;
		justify-content: left;
	}

	#header h1 {
		margin: 0px;
		padding: 0px;
	}

	#logo {
		display: block;
		width: 100px;
		height: 100px;
		margin: 0px 20px 0px 0px;
		background: rgba(0, 0, 0, 0.8);
		border-radius: 5px;
		box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
		-webkit-border-radius: 5px;
		-webkit-box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
		opacity: 1;
		-webkit-transition: all 150ms ease-in-out;
		-moz-transition: all 150ms ease-in-out;
		transition: all 150ms ease-in-out;
	}

	/* #logo {
		width: 100px;
		height: auto;
		margin-right: 10px;
		opacity: 1;
		-webkit-transition: all 150ms ease-in-out;
		-moz-transition: all 150ms ease-in-out;
		transition: all 150ms ease-in-out;
	} */

	#logo:hover {
		opacity: 0.7;
	}

	#header nav {
		height: 14px;
		padding: 20px;
		background: rgba(0, 0, 0, 0.8);
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-webkit-box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
		box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
	}

	#header nav ul {
		margin: 0;
		padding: 0px 20px 0px 0px;
	}

	#header nav li {
		float: none;
		display: inline-block;
		margin: 0 20px;
		font-size: var(--fs-300);
		text-transform: uppercase;
		letter-spacing: 0.1em;
		font-weight: 600;
		line-height: 100px;
	}

	#header nav a {
		position: relative;
		display: block;
		color: white;
		text-decoration: none;

		opacity: 0.7;
	}

	#header nav a::before {
		position: absolute;
		top: 30%;
		left: 50%;
		width: 10px;
		height: 10px;
		border-radius: 50%;
		background: white;
		content: "";
		opacity: 0;
		-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
		-moz-transition: -moz-transform 0.3s, opacity 0.3s;
		transition: transform 0.3s, opacity 0.3s;
		-webkit-transform: translateX(-50%) translateY(-50%) scale(0.2);
		-moz-transform: translateX(-50%) translateY(-50%) scale(0.2);
		transform: translateX(-50%) translateY(-50%) scale(0.2);
	}

	#header nav a::after {
		width: 90px;
		height: 90px;
		border-width: 6px;
		-webkit-transform: translateX(-50%) translateY(-50%) scale(0.8);
		-moz-transform: translateX(-50%) translateY(-50%) scale(0.8);
		transform: translateX(-50%) translateY(-50%) scale(0.8);
	}

	#header nav a:hover::before,
	#header nav a:hover::after,
	#header nav a:focus::before,
	#header nav a:focus::after {
		opacity: 1;
		-webkit-transform: translateX(-50%) translateY(-50%) scale(1);
		-moz-transform: translateX(-50%) translateY(-50%) scale(1);
		transform: translateX(-50%) translateY(-50%) scale(1);
	}

	#header nav a.active::before,
	#header nav a.active::after,
	#header nav a.active::before,
	#header nav a.active::after {
		opacity: 1;
		-webkit-transform: translateX(-50%) translateY(-50%) scale(1);
		-moz-transform: translateX(-50%) translateY(-50%) scale(1);
		transform: translateX(-50%) translateY(-50%) scale(1);
	}

	#header nav a:hover,
	#header nav a.active {
		color: white;
		opacity: 1;
	}

	/* nav {
    background-color: rgba(0, 0, 0, 0.8);
    font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    height: 45px;
  }

  .inner {
    max-width: 980px;
    padding-left: 20px;
    padding-right: 20px;
    margin: auto;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    height: 100%;
  } */

	.mobile-icon {
		width: 25px;
		height: 14px;
		position: relative;
		cursor: pointer;
	}

	.mobile-icon:after,
	.mobile-icon:before,
	.middle-line {
		content: "";
		position: absolute;
		width: 100%;
		height: 2px;
		background-color: #fff;
		transition: all 0.4s;
		transform-origin: center;
	}

	.mobile-icon:before,
	.middle-line {
		top: 0;
	}

	.mobile-icon:after,
	.middle-line {
		bottom: 0px;
	}

	.mobile-icon:before {
		width: 66%;
	}

	.mobile-icon:after {
		width: 33%;
	}

	.middle-line {
		margin: auto;
	}

	.mobile-icon:hover:before,
	.mobile-icon:hover:after,
	.mobile-icon.active:before,
	.mobile-icon.active:after,
	.mobile-icon.active .middle-line {
		width: 100%;
	}

	.mobile-icon.active:before,
	.mobile-icon.active:after {
		top: 50%;
		transform: rotate(-45deg);
	}

	.mobile-icon.active .middle-line {
		transform: rotate(45deg);
	}

	.navbar-list {
		display: none;
		width: 100%;
		justify-content: space-between;
		margin: 0;
		padding: 0 40px;
	}

	.navbar-list.mobile {
		background-color: rgba(0, 0, 0, 0.8);
		position: fixed;
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
		height: calc(100% - 45px);
		bottom: 0;
		left: 0;
	}

	.navbar-list li {
		list-style-type: none;
		position: relative;
	}

	.navbar-list li:before {
		content: "";
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 1px;
		background-color: #424245;
	}

	/* .navbar-list a {
    color: #fff;
    text-decoration: none;
    display: flex;
    height: 45px;
    align-items: center;
    padding: 0 10px;
    font-size: 13px;
  } */
	.logo {
		display: none;
	}
	@media only screen and (min-width: 835px) {
		.mobile-icon {
			display: none;
		}
		.logo {
			display: inherit;
		}

		.navbar-list {
			display: flex;
			padding: 0;
		}

		.navbar-list a {
			display: inline-flex;
		}
		#header {
			justify-content: center;
		}
		#header nav {
			float: left;
			height: 100px;
			padding: 0px;
		}
	}
</style>
