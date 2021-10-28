
<svelte:head>
	<title>Company History</title>
</svelte:head>
<div class="company-ethos">Capture your thoughts, without distraction.</div>
<div class="company-info">
	<h2>
		<strong>How did BrainStorm come into being?</strong> In the mid to late seventies,
		David Tebbutt was a trainer, then a project manager, at ICL. His secret organizational
		weapon was based on the mind-mapping technique popularized by Tony Buzan, although
		David's maps often covered an entire wall. His maps were a combination of his
		own thoughts and material culled from his background reading. It was not ideal,
		because paper was such an inflexible medium. It lacked the intelligence to know
		when something was already in the map and couldn't easily be reorganised. David
		went on to become editor of Personal Computer World, still using vast maps but
		nurturing ideas to put them on the personal computer. He had also had close skirmishes
		with bill-of-materials processing in his previous life as an IT manager. These
		two strands, plus a fascination with how the mind works, led to the invention
		of BrainStorm. He started the design in 1980 and finished the programming in
		1981. He used it as his personal productivity aid in his latter days at Personal
		Computer World and during the early days as technical director of Caxton Software.
		When his partners at Caxton saw it in action, they decided to publish it. A superb
		programmer, Mike Liardet, was responsible for making David's efforts acceptable
		to the outside world. The finished product was launched in November 1983. UK
		sales soared for a few years before turning downwards as first CP/M then DOS
		fell from grace. Publishing rights reverted to David and Mike in 1988. Adrian
		Evans and Andy Redfern each contributed significant improvements to the DOS version
		but in 1996, it was clearly time to shut up shop.
	</h2>
	<h2>
		<strong>And what about BrainStorm for Windows?</strong> In 1994, David met up
		with one Marck Pearlstone, a professional programmer, who he'd first met in 1981
		while researching an article for Personal Computer World. The upshot of the 1994
		meeting was that they decided to apply their considerable combined experience
		to building a Windows version of BrainStorm. They decided to subsidize BrainStorm
		development with real work - Marck by programming and David by writing and teaching.
		Little did they realize that the project would consume much of their spare time
		ever since. They are both fanatical about giving users the: best quality, fastest
		speed of operation, least intrusive, and most useful software (David had been
		programming since 1966 and Marck since 1973.)
	</h2>
	<h2>
		<strong>And why is it suited to web-publishing?</strong> As luck would have it,
		the internet, the world-wide-web and email became massively popular while they
		were developing BrainStorm. The advent of HTML, Java and JavaScript meant that
		BrainStorm models could be easily published and shared with people who don't
		use BrainStorm itself. Paper could never reveal the richness of the contextual
		links that are an intrinsic part of every BrainStorm model. The internet also
		gave them the perfect base from which to spread BrainStorm throughout the world.
		And the shareware publishing model means that every customer can 'try before
		they buy'. In 2000, David´s son Daniel Tebbutt, by now a demon programmer in
		his own right, contributed to the project by writing all the Java, JavaScript
		and HTML web-publishing elements of BrainStorm.
	</h2>
	<h2>
		<strong>Who's responsible for what?</strong> Marck and David worked together
		on design and overall strategy. Marck programmed BrainStorm while David developed
		the website and the documentation. BC4, Inc. is responsible for the business
		and communication.
	</h2>
</div>



<div class="action-bar">
	<a href="team" class="button primary"> See the BrainStorm Team</a>
	<a href="gallery" class="button primary"> BrainStorm Gallery</a>
</div>

<style>
	.company-ethos {
		margin: 0px;
		padding: 0px;
		font-size: var(--fs-600);
		font-weight: 300;
		color: #111;
	}
	.company-info {
		display: flex;
		flex-wrap: wrap;
		margin: 0px;
		padding: 0px;
		color: #000;
	}

	.company-info h2 {
		flex-basis: 300px;
		min-width: 50px;
		padding: 10px;
		font-size: var(--fs-400);
		font-weight: 150;
	}
	.company-info h2 strong {
		color: navy;
	}
</style>
