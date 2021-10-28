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
	let dp = false;

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
			dp = true;
	}
</script>

<svelte:head>
	<title>BrainStorm Uses</title>
</svelte:head>
<h1>Plan and Control</h1>
<Accordion multiselect>
	<AccordionItem expanded={dp} title="Developing a project plan">
		Whether a new project or taking over an existing project, it is important to get to know all the
		key elements as quickly as possible. This will involve all the elements of the project itself,
		whether it's a building, a piece of software, a wedding or a garden fete. Then there's the
		supplies and suppliers. The people involved, their skills and responsibilities. It's a lot to
		take on board yet it is vital if you are to plan and control things effectively.
		<p />
		Fortunately, BrainStorm offers a fast way to grab, organize and store all this information in a way
		that can easily be updated with new material, and in a way that you can lay your hands on any information
		instantly.
		<p />
		When it comes to control, you can even use BrainStorm to list tasks, target dates, who's responsible
		and when they're completed. Of course, there are project management programs around and you may prefer
		to use BrainStorm for the 'wit-gathering' stage of project planning and as a free-form database,
		giving you instant access to all your thoughts, plans, tasks and people at any time.
	</AccordionItem>

	<AccordionItem expanded={cis} title="Capturing ideas">
		When the creative juices are flowing, the last thing you need is a program that you have to
		think about. BrainStorm lets you just tap away. Put your thoughts in as they occur to you. Don't
		worry about sequence or structure, that can come later.
		<p />
		You can pursue the highways and byways of your mind, if one thought gives rise to a bunch of related
		thoughts they can all be 'hung off' the first thought at the time or later, when it suits you.
		<p />
		The important thing is that you capture your thoughts without having to worry about how to 'work'
		BrainStorm. At its simplest, you just type. Hierarchies of ideas can be created by clicking away
		with the mouse or using the Home and End keys.
		<p />
		<img src="/images/plan.gif" width="485" height="182" border="0" alt="Wedding plans" />
		<p />
		Think of a BrainStorm model as a list. Any entry in the list can have its own list attached. And
		identical entries in separate lists are automatically hyperlinked. For example, you may have a list
		of tasks which involve the same people, as soon as you assign someone to a task, all the information
		you have on that person is available instantly. The same goes for materials - for each item you might
		have alternative sources of supply listed, telephone numbers, contacts etc. All this information
		need be entered only once, yet it is on tap whenever you put the name in.
		<p />
		While this is massively useful and it is one of the ways in which BrainStorm stands apart from other
		programs, such a connection can be suppressed with a single mouse click.
		<p />
		Read on to see how BrainStorm can capture information from other programs and from the screen - a
		Web page for example.
	</AccordionItem>
	<AccordionItem expanded={ci} title="Capturing information from the Web and other programs">
		BrainStorm will try to make sense of any file it is offered. A text file will be easy. A
		formatted file from a word processor, for example, might not look so pretty, but it will try.
		You might have documents which list people's skills and experience, for example - just read them
		in.
		<p />
		By far the easiest way to transfer information into BrainStorm is to copy it directly from the screen.
		Whether you're in a word processor, a database, an Acrobat document or a web page, simply highlight
		the material you want and copy it. This could apply to product and service brochures, for example.
		Or you might have a scanner and character recognition software. Whichever approach you choose, BrainStorm
		helps you keep typing to a minimum.
		<p />
		The fastest way to capture information is with BrainStorm's 'Magic paste'. As soon as you copy anything
		from the screen to the clipboard, it is immediately picked up by BrainStorm. You don't have to do
		anything else. Alternatively you can use regular paste or Smart paste, both of which require you
		to bring BrainStorm to the foreground before pasting.
		<p />
		Each kind of paste offers you a variety of formatting options for the incoming material. You can
		ignore leading spaces or use them to indicate hierarchy. You can let BrainStorm figure out where
		paragraphs start and end, or insist that the information is imported exactly as it appears on screen.
		<p />
		With Magic paste, you can define a separator, which might include date and time, to precede each
		paste should you need to know when particular information made its way into BrainStorm.
	</AccordionItem>
	<AccordionItem expanded={ob} title="Organizing your information">
		You can reorder your information in the traditional way by selecting and dragging/dropping or by
		cutting and pasting. But, since reorganization is at the heart of BrainStorm's functionality,
		you won't be surprised to learn that it has some additional useful ways of moving information
		around.
		<p />
		You can open a second window on the current model and navigate around each window independently,
		making it easy to drag and drop entries from one part of a model to another. This is great when you
		have got chapter headings, for example, and you want to move all related entries into the appropriate
		part of the model.
		<p />
		An alternative would be to Throw entries directly by pressing Ctrl+t. Just whiz down your dumped
		thoughts and information and, every time, you see an entry that relates to the topic of interest,
		Throw it. This is fast. Much faster than drag and drop.
		<p />
		'Push down' and 'Push up' commands allow you to grab blocks of entries and either make them subsidiary
		to an existing entry or push them up a level by dropping them onto the heading icon.
		<p />
		You can even resequence material on the fly by selecting it in the desired sequence prior to a drag
		or a throw. It will arrive in the selected sequence.
		<p />
		Unlike many Help files, the BrainStorm one really does help you. Use it or context sensitive Help
		whenever you find yourself thinking "I wonder how I do this". The answer is probably there. And we
		are on tap if not. Just drop us an email.
	</AccordionItem>
	<AccordionItem expanded={ae} title="Adding to and enhancing your work">
		As you browse around your growing body of project information, it will probably stimulate
		further thoughts. Just drop them in. You could do this in a different color, so you can see the
		evolution of your project. Or you can paste in date and/or time details if you wish as mentioned
		above. <p />
		If you are worried about corrupting your evolving plan, why not protect it from alteration by making
		it 'read only'. This can be done very easily for part or all of your plan.
		<p />
		If you go into Aerial view, you will see how your plan is evolving.
		<p />
		<img src="/images/planaerial.gif" width="245" height="183" border="0" alt="Aerial view" />
		<p />
		This lists each entry on a single line and indents successive levels. Thus, by looking at the left
		hand edge of the list, you can see where in the model you have plenty of information and where it's
		still a bit light. You can instantly shift your focus to an area that needs more work, by double
		clicking at the appropriate point.
	</AccordionItem>
	<AccordionItem expanded={ps} title="Publishing and sharing your work">
		Of course, if others are computerized and involved in your project, you may want to share the
		ongoing plans. If they are already using BrainStorm, it is easy enough for them to read and work
		with your BrainStorm models. These are very compact and suitable for emailing, for example. If
		you want them to add comments, you might prefer to protect all the model you send out by making
		it 'read only'. This way they can't accidentally corrupt or alter your information.
		<p />
		You can also write the model as a text file, as an outline if you wish. And you can use spaces or
		tabs to determine successive levels. You lose the internal hyperlinks between identical entries,
		but then if colleagues are reading the file with a text or word processor, or even an outliner, then
		this won't matter. We provide a template for Word which presents the BrainStorm model very nicely
		in both Normal and Outline views
		<p />
		You can publish your model as a simple HTML page, which makes it readable by a host of other programs,
		including Word. More interestingly, perhaps, is that you can output your model as an HTML page, complete
		with an embedded JavaScript 'mind-reader' which attempts to present it as a navigable BrainStorm
		model. Here's a sample clipping:
		<p />
		<img src="/images/planhtml.gif" width="250" height="182" border="0" alt="HTML 'mind-reader'" />
		<p />
		In modern browsers your project information would appear pretty much as it does in BrainStorm. The
		entry icons are clickable and the hypertext links (we call them 'namesakes') are easily followed.
		You can search the model and, in general, navigate it the way you do in BrainStorm itself. Of course,
		being a browser view means that it cannot be edited.
		<p />
		In general, the older the browser, the less snappy the display. The very oldest browsers will display
		the model as an outline.
		<p />
		BrainStorm's merge command allows you to embed BrainStorm and other files within the existing model.
		This can be useful when collecting contributions from other people. Perhaps you get staff to go through
		the project plan adding their comments and task completion information. Assuming they are BrainStorm
		users, you just ask them to throw in their suggestions, perhaps each using a different color. When
		you get these annotated models back, you can merge them such that all their feedback appears under
		the respective headings but in their own colors.
		<p />
		Finally, we can provide a Java browser which you can embed in your own web page. You can point this
		to your project plan on your web server and it will be even snappier than the web-published version.
		This would be good if you wanted to provide self-service access to your project status.
	</AccordionItem>
	<AccordionItem expanded={ir} title="Instant recall of anything, in context">
		The Find and Find again commands are probably the most obvious way of finding information that
		you know is in the model somewhere.
		<p />
		An alternative would be to exploit the 'namesake' feature of the program. If you know what you are
		after, just type enough of the entry to be unique and bracket it with asterisks and the entry will
		be replicated at your fingertips.
		<p />
		For example, *just type enough* would find the above paragraph.
		<p />
		Immediately, any deeper level information about that entry is at your fingertips. All the information
		about the character in the play, for example, is there on tap.
		<p />
		A 'namesake' icon will appear to the left of your new entry to show that this is one in a chain of
		identical entries. Just press the left or right arrow key to go to the previous or next occurrence
		of the entry. You will see each in its original context.
	</AccordionItem>
	<AccordionItem expanded={cp} title="Checking progress">
		As mentioned above, the aerial view is probably the best way of reviewing progress. This shows
		the model in outline form and you can navigate up and down, and from side to side, to see how
		the work is progressing.
		<p />
		You might also assign part of your model, or a separate one, to your deadlines and deliverables.
		It's a simple matter to keep this updated and monitor progress in a more conventional way. And, as
		mentioned above, you can issue copies of the project model periodically and ask team members for
		updates. These can easily be merged together to give you a complete view.
	</AccordionItem>
</Accordion>

<style>
	:global([data-accordion]) {
		list-style: none;
		margin-bottom: 1rem;
	}
	:global([data-accordion-item] button[aria-expanded='false']::before) {
		content: '+ ';
	}
	:global([data-accordion-item] button[aria-expanded='true']::before) {
		content: '- ';
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
		:global([data-accordion]),
		:global([data-accordion-item] button),
		:global([data-accordion-item] [role='region']) {
			padding: 1rem 0rem;
		}
	}
</style>
