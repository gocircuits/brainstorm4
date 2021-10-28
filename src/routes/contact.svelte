<script>
	import { onMount } from "svelte";

	let name;
	let email;
	let message;
	let _gotcha;
	let gr;

	let status = "";

	onMount(async () => {
		window.grecaptcha.ready(() => {
			grecaptcha.render("recaptcha-id", {
				sitekey: "6Lc9boQcAAAAAA1rWE41gWCrgm5_Dq1w5eKuqAIc",
			});
		});
		gr = windows.grecaptcha.value;
	});
	const submitForm = async () => {
		try {
			gr = grecaptcha.getResponse();
			const submit = await fetch(
				"https://www.brainstormsw.com/contact-api.php",
				{
					method: "POST",
					body: JSON.stringify({
						name,
						email,
						_gotcha,
						message,
						gr,
					}),
					mode: 'cors',
					headers: {
						"Content-Type": "application/json",
					},
				}
			);

			status = submit.statusText;
		} catch (err) {
			status = err;
		}
		console.log(status);
	};

	
</script>

<svelte:head>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</svelte:head>

<h2 class="page-title">Contact Us</h2>

<div class="contact-info">
	<div class="col1">
		<h3>Mailing Address</h3>
		<p>
			BrainStorm Software, Inc<br />
			108340 Lake Drive<br />
			Monument, CO, 80132 USA
		</p>

	</div>
	<div class="col2">
		<h3>Get In Touch</h3>
		<form on:submit|preventDefault={submitForm} id="contact-form">
			<input
				type="text"
				name="name"
				bind:value={name}
				placeholder="Your Name"
			/>

			<input
				type="text"
				name="email"
				bind:value={email}
				placeholder="Email Address"
			/>
			<textarea
				name="message"
				bind:value={message}
				placeholder="What's your message?"
			/>

			<input type="submit" class="send-bar" value="Send It" />
			<div id="recaptcha-id" />
		</form>
	</div>
</div>

<style>
	.contact-info {
		padding-top: 10px;
		display: flex;
		flex-wrap: wrap;
		column-gap: 10px;
	}

	.send-bar {
		margin-left: 5px;
		margin-right: 5px;
		padding: 10px 20px;
		text-transform: uppercase;
		text-decoration: none;
		font-size: var(--fs-300);
		font-weight: 600;
		letter-spacing: 0.1em;
		color: #111;
		background: chocolate;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-webkit-transition: all 150ms ease-in-out;
		-moz-transition: all 150ms ease-in-out;
		transition: all 150ms ease-in-out;
	}
	.send-bar:hover {
		color: saddlebrown;
	}
	/* #contact-form label {

display: none;
} */

	#contact-form input[type="text"] {
		float: left;
		width: 90%;
		margin: 0px 10px 10px 0px;
		padding: 10px;
		font-size: var(--fs-400);
		border: 1px solid rgba(0, 0, 0, 0.3);
	}

	#contact-form input[type="text"]:focus,
	#contact-form textarea:focus {
		outline: none;
		border: 1px solid rgba(0, 0, 0, 0.5);
	}

	#contact-form textarea {
		float: left;
		width: 90%;
		min-height: 120px;
		margin: 0 0 10px 0;
		padding: 10px;
		font-size: var(--fs-400);
		border: 1px solid rgba(0, 0, 0, 0.3);
	}

	/* #contact-form input[type="button"] {

border: none;
} */
</style>
