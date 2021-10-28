<script>
	let name = '';
	let email = '';
	let message = '';
	let _gotcha;

	let status = '';

	const submitForm = async () => {
		try {
			const submit = await fetch('https://usebasin.com/f/b268ba5a9c65', {
				method: 'POST',
				body: JSON.stringify({
					name,
					email,
					_gotcha,
					message
				}),
				headers: {
					'Content-Type': 'application/json'
				}
			});

			status = submit.statusText;
		} catch (err) {
			status = err;
		}
		// console.log(status);
	};
</script>

<svelte:head>
	<title>Contact BrainStorm</title>
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
			<input type="text" name="name" bind:value={name} placeholder="Your Name" required />

			<input type="text" name="email" bind:value={email} placeholder="Email Address" required />
			<input type="hidden" name="_gotcha" />
			<textarea name="message" bind:value={message} placeholder="What's your message?" />

			<input type="submit" class="send-bar" value="Send It" />
		</form>
		{#if status == 'OK'}
			<p>Thank you {name}, Your message has been recieved</p>
		{:else if status != ''}
			<p>Something went wrong {status}</p>
		{/if}
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
	#contact-form input[type='text'] {
		float: left;
		width: 90%;
		margin: 0px 10px 10px 0px;
		padding: 10px;
		font-size: var(--fs-400);
		border: 1px solid rgba(0, 0, 0, 0.3);
	}
	#contact-form input[type='text']:focus,
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
</style>
