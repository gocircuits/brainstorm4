<script>
	import { Accordion, AccordionItem } from 'svelte-accessible-accordion';
	import { page } from '$app/stores';
	const sect = $page.query.get('sect');

	let cis = false;
	let ci = false;
	let ob = false;
	let ae = false;
	let ps = false;
	let pr = false;
	let cp = false;
	let ir = false;
	let pp = false;

	switch (sect) {
		case 'cis':
			cis = true;
			break;
		case 'ci':
			ci = true;
			break;
		case 'ob':
			ob = true;
			break;
		case 'ae':
			cis = true;
			break;
		case 'ps':
			ps = true;
			break;
		case 'pr':
			pr = true;
			break;
		case 'cp':
			cp = true;
			break;
		case 'ir':
			ir = true;
			break;
		default:
			cis = true;
			ci = true;
			ob = true;
			ae = true;
			ps = true;
			ir = true;
			pr = true;
			cp = true;
			pp = true;
	}
</script>

<svelte:head>
	<title>BrainStorm Uses</title>
</svelte:head>
<h1>Present and Teach</h1>
<Accordion multiselect>
	<AccordionItem expanded={pp} title="Planning a presentation or speech">
		Presenters and teachers need to marshall their thoughts prior to writing their supporting
		materials - whether it's speaker notes, prompt cards, PowerPoint, overheads, handouts or
		booklets.
		<p />

		We had a call from one user who was given one hour's notice to step in to participate in a
		conference. One of the speakers had just pulled out. Our user got to work with BrainStorm and
		created his talk from scratch. At the end of the conference, he won a prize for the best
		presentation.
		<p />

		Whether you know your subject or not, BrainStorm will help you marshall and deploy your
		information very very quickly. BrainStorm acts as a dumping ground for all the thoughts and
		information that will contribute to the final presentation. It can be thrown in in any sequence
		and then, when planning the presentation, you'd probably have some kind of structure. BrainStorm
		lets you throw all the material into the appropriate headings. It's all sitting there, in
		context, ready for you to do the necessary polishing, adding anecdotes and other illustrative
		points.
		<p />

		At this point, you might want to move your attention to a presentation tool such as PowerPoint.
		You can output a whole BrainStorm model in a form which PowerPoint will recognize. This might
		work for text-only presentations but, if you're going to incorporate whizzy graphics, you would
		probably do better to have BrainStorm to one side of the side of your screen to keep you on
		track while using PowerPoint. Or maybe even print it out as an outline, giving you more
		on-screen space for PowerPoint.
		<p />

		In short, BrainStorm lets you approach your speech writing, presentation planning or course
		development in the way that suits you. Everything is captured, nothing is lost and it's all on
		tap. You can take a break and return to it and everything is in context and, of course, you can
		search for material or simply navigate around the model of your raw material.
	</AccordionItem>

	<AccordionItem expanded={cis} title="Capturing ideas">
		When the creative juices are flowing, the last thing you need is a program that you have to
		think about. BrainStorm lets you just tap away. Put your thoughts in as they occur to you. Don't
		worry about sequence or structure, that can come later. You can pursue the highways and byways
		of your mind, if one thought gives rise to a bunch of related thoughts they can all be 'hung
		off' the first thought at the time or later, when it suits you.
		<p />

		The important thing is that you capture your thoughts without having to worry about how to
		'work' BrainStorm. At its simplest, you just type. Hierarchies of ideas can be created by
		clicking away with the mouse or using the Home and End keys.
		<p />
		<img src="/images/present.gif" width="487" height="182" border="0" alt="Training topics" />
		<p />
		Think of a BrainStorm model as a list. Any entry in the list can have its own list attached. And
		identical entries in separate lists are automatically hyperlinked. If you were the chair of a conference,
		for example, you'd have a list of all the speakers and key information about them. When the moment
		comes in your script to write their introduction and thanks, all you need to do is type their name
		for all the details to be there on tap.
		<p />

		You could even use BrainStorm live during the conference, so the details are there should you
		need them in 'real time'. Bear in mind equipment's propensity to fail at the most awkward moment
		and keep a paper backup.
		<p />

		Read on to see how BrainStorm can capture information from other programs and from the screen -
		a Web page for example.
	</AccordionItem>

	<AccordionItem expanded={ci} title="Capturing information from the Web and other programs">
		BrainStorm will try to make sense of any file it is offered. A text file will be easy. A
		formatted file from a word processor, for example, might not look so pretty, but it will try.
		<p />

		By far the easiest way to transfer information into BrainStorm is to copy it directly from the
		screen. Whether you're in a word processor, a database, an Acrobat document or a web page,
		simply highlight the material you want and copy it.
		<p />

		If you have 'Magic paste' switched on, it is immediately picked up from the clipboard by
		BrainStorm. You don't have to do anything else. Alternatively you can use regular paste or Smart
		paste, both of which require you to bring BrainStorm to the foreground before pasting.<br />

		Each kind of paste offers you a variety of formatting options for the incoming material. You can
		ignore leading spaces or use them to indicate hierarchy. You can let BrainStorm figure out where
		paragraphs start and end, or insist that the information is imported exactly as it appears on
		screen.
		<p />

		With Magic paste, you can define a separator, which might include date and time, to precede each
		paste so you can clearly distinguish between each paste.
	</AccordionItem>

	<AccordionItem expanded={ob} title="Organizing your information">
		You can reorder your information in the traditional way by selecting and dragging/dropping or by
		cutting and pasting. But, since reorganization is at the heart of BrainStorm's functionality,
		you won't be surprised to learn that it has some additional useful ways of moving information
		around.
		<p />

		You can open a second window on the current model and navigate around each window independently,
		making it easy to drag and drop entries from one part of a model to another. This is great when
		you have got topic headings, for example, and you want to move all related entries to the level
		below their topic headings. (Just hold 'shift' while dragging and dropping.)
		<p />

		An alternative would be to Throw entries directly by pressing Ctrl+t. Just whiz down your dumped
		thoughts and information and, every time, you see an entry that relates to the topic of
		interest, Throw it. This is fast. Much faster than drag and drop.
		<p />

		'Push down' and 'Push up' commands allow you to grab blocks of entries and either make them
		subsidiary to an existing entry or push them up a level by dropping them onto the heading icon.
		<p />

		You can even resequence material on the fly by selecting it in the desired sequence prior to a
		drag or a throw. It will arrive in the selected sequence. Unlike many Help files, the BrainStorm
		one really does help you. Use it or context sensitive Help whenever you find yourself thinking
		"I wonder how I do this". The answer is probably there. And we are on tap if not. Just drop us
		an email.
	</AccordionItem>

	<AccordionItem expanded={ae} title="Adding to and enhancing your work">
		As you browse around your growing body of information, it might stimulate additional thoughts.
		Just drop them in. It might be an idea to do this in a different color, so you can see the
		evolution of your work.
		<p />

		You can paste in the current date and/or time if you wish. This might be helpful if you are
		trying to see when you collected any particular information.
		<p />

		If you are worried about corrupting the work you have already done, why not protect existing
		work from alteration by making it 'read only'. This can be done very easily for part or all of
		your work.
		<p />

		If you go into Aerial view, you will see how your work is evolving.
		<p />
		<img src="/images/presentaerial.gif" width="278" height="223" border="0" alt="Aerial view" />
		<p />
		This lists each entry on a single line and indents successive levels. Thus, by looking at the left
		hand edge of the list, you can see where in the model you have plenty of information and where it's
		a bit light. You can instantly shift your focus to a weaker area of your model by double clicking
		at the appropriate point.
	</AccordionItem>

	<AccordionItem expanded={ps} title="Publishing and sharing your work">
		Of course, if your colleagues and friends are using BrainStorm, it is easy enough for them to
		read and work with your BrainStorm models. These are very compact and suitable for emailing, for
		example.
		<p />

		You can write the model as a text file, as an outline if you wish. And you can use spaces or
		tabs to determine successive levels. You lose the internal hyperlinks between identical entries,
		but then if your friend or colleague is reading the file with a text or word processor, or even
		an outliner, then this won't matter. We provide a template for Word which presents the
		BrainStorm model very nicely in both Normal and Outline views
		<p />

		You can publish your model as a simple HTML page, which makes it readable by a host of other
		programs, including Word. More interestingly, perhaps, is that you can output your model as an
		HTML page, complete with an embedded JavaScript 'mind-reader' which attempts to present it as a
		navigable BrainStorm model. Here's a sample clipping:
		<p />
		<img
			src="/images/presenthtml.gif"
			width="258"
			height="200"
			border="0"
			alt="HTML 'mind reader'"
		/>
		<p />
		In modern browsers your information appears pretty much as it does in BrainStorm. The entry icons
		are clickable and the hypertext links (we call them 'namesakes') are easily followed. You can search
		the model and, in general, navigate it the way you do in BrainStorm itself. Of course, being a browser
		view means that it cannot be edited.
		<p />

		In general, the older the browser, the less snappy the display. The very oldest browsers will
		display the model as an outline.
		<p />

		BrainStorm's merge command allows you to embed BrainStorm and other files within the existing
		model. This can be useful when collecting contributions from other people. Assuming they are
		BrainStorm users, you just send them out a template of the information you require and ask them
		to throw in their suggestions, perhaps each using a different color. When you get these models
		in, you can merge them such that all their contributions appear under the respective headings
		but in their own colors.
		<p />

		Finally, we can provide a Java browser which you can embed in your own web page. You can point
		this to any BrainStorm model on your web server and it will be even snappier than the
		web-published version.
	</AccordionItem>

	<AccordionItem expanded={ir} title="Instant recall of anything, in context">
		The Find and Find again commands are probably the most obvious way of finding information that
		you know is in the model somewhere.
		<p />

		An alternative would be to exploit the 'namesake' feature of the program. If you know what you
		are after, just type enough of the entry to be unique and bracket it with asterisks and the
		entry will be replicated at your fingertips. For example, *just type enough* would find the
		above paragraph
		<p />

		Immediately, any deeper level information about that entry is at your fingertips. All the
		information about one of your conference speakers, for example, is there on tap.
		<p />

		You will see a namesake icon to the left of the entry, this means you can just press the left or
		right arrow key to go to the other occurrence of the entry. If there are more, further presses
		of the arrow key will take you to them. You will be able to see each in its original context.
	</AccordionItem>

	<AccordionItem expanded={cp} title="Checking progress">
		As mentioned above, the aerial view is probably the best way of reviewing progress. This shows
		the model in outline form and you can navigate up and down, and from side to side, to see how
		the work is progressing.
		<p />

		You might also assign part of your model, or a separate one, to your deadlines and deliverables.
		It's a simple matter to keep this updated and monitor progress in a more conventional way.
	</AccordionItem>
</Accordion>

<style>
	:global([data-accordion]) {
		list-style: none;
		margin-bottom: 1rem;
	}
	:global([data-accordion-item] button[aria-expanded="false"]::before){
		content: "+ ";
	}
	:global([data-accordion-item] button[aria-expanded="true"]::before){
		content: "- ";
	}
	:global([data-accordion-item] button) {
		border: 0;
		border-bottom: 1px solid #e0e0e0;
		background: none;
		font: inherit;
		font-size: var(--fs-600);
		line-height: inherit;
		color: inherit;
		cursor: pointer;
		padding: 0.5rem 1rem;
		width: 100%;
		text-align: left;
		margin: 0;
	}

	:global([data-accordion-item] [role='region']) {
		padding: 2rem;
	}
	@media only screen and (max-width: 835px) {
		:global([data-accordion] ),
		:global([data-accordion-item] button),
	:global([data-accordion-item] [role='region']) {
		padding:  1rem 0rem;
	}
	}
	</style>
