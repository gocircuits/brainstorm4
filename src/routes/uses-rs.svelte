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
	let rm = false;

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
			alert = true;
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
			rm = true;
	}
</script>

<svelte:head>
	<title>BrainStorm Uses</title>
</svelte:head>
<h1>Research and Study</h1>
<Accordion multiselect>
	<AccordionItem expanded={rm} title="Organizing research material">
		If you're a researcher or student, you will want to gather all your research notes together and
		then classify and structure them. All the time you are doing this you are absorbing your subject
		and the clearer the end structure, the easier it is to remember and plan the writing stage of
		your work.
		<p />
		Well, BrainStorm proves ideal for this kind of work because it is infinitely flexible. You can gather
		material and add your own thoughts in any sequence and to any depth without any concern for structure
		or sequence. It then provides tools for rearranging and organizing the material in the headings and
		sub-headings that match your brief.
		<p />
		In short, BrainStorm lets you approach your research or studies in the way that best suits you. Everything
		is captured, nothing is lost and it's all on tap. You can take a break and return to it and everything
		is still in context and, of course, you can search for material or simply navigate around the model
		of your raw material.
	</AccordionItem>
	<AccordionItem expanded={cis} title="Capturing ideas">
		Most of your research and study work, especially in the early stages, involves gathering raw
		material. However you may want to capture all you know before you start so that you can hang
		subsequent research on to some kind of framework, even if you change your mind about its
		structure later. At this stage, when your creative juices are flowing, the last thing you need
		is a program that you have to think about. BrainStorm lets you just tap away. Put your thoughts
		in as they occur to you. Don't worry about sequence or structure, that can come later.
		<p />
		You can pursue the highways and byways of your mind, if one thought gives rise to a bunch of related
		thoughts they can all be 'hung off' the first thought at the time or later, when it suits you.
		<p />
		The important thing is that you capture your thoughts without having to worry about how to 'work'
		BrainStorm. At its simplest, you just type. Hierarchies of ideas can be created by clicking away
		with the mouse or using the Home and End keys.
		<p />
		<img src="/images/study.gif" width="467" height="198" border="0" alt="Study topics" />
		<p />
		Think of a BrainStorm model as a list. Any entry in the list can have its own list attached. And
		identical entries in separate lists are automatically hyperlinked. It doesn't really matter if you
		have already typed masses of information under, say, "electron spin resonance", if you type the expression
		again, all your original work will be attached to the new entry.
		<p />
		While this is massively useful and it is one of the ways in which BrainStorm stands apart from other
		programs, such a connection can be suppressed with a single mouse click.
		<p />
		Read on to see how BrainStorm can capture information from other programs and from the screen - a
		Web page for example.
	</AccordionItem>
	<AccordionItem expanded={ci} title="Capturing information from the Web and other programs">
		Research and study material is all around you - on the internet, in computer files and
		documents, in books, papers and magazines. Depending on your computer set up, the key elements
		of this information can be easily gathered together inside BrainStorm. Of course, a scanner is a
		key ingredient if you plan to grab significant amounts of information from paper-based sources.
		<p />
		BrainStorm will try to make sense of any file it is offered. A text file will be easy. A formatted
		file from a word processor, for example, might not look so pretty, but it will try.
		<p />
		By far the easiest way to transfer information into BrainStorm is to copy it directly from the screen.
		Whether you're in a word processor, a database, an Acrobat document or a web page, simply highlight
		the material you want and copy it.
		<p />
		And the fastest way to do that is with BrainStorm's 'Magic paste'. As soon as you copy anything to
		the clipboard, it is immediately picked up by BrainStorm. You don't have to do anything else. Alternatively
		you can use regular paste or Smart paste, both of which require you to bring BrainStorm to the foreground
		before pasting.
		<p />
		Each kind of paste offers you a variety of formatting options for the incoming material. You can
		ignore leading spaces or use them to indicate hierarchy. You can let BrainStorm figure out where
		paragraphs start and end, or insist that the information is imported exactly as it appears on screen.
		<p />
		With Magic paste, you can define a separator, which might include date and time, to precede each
		paste so you have a reminder of when you collected your different pieces of material.
	</AccordionItem>
	<AccordionItem expanded={ob} title="Organizing your information">
		You can reorder your information in the traditional way by selecting and dragging/dropping or by
		cutting and pasting. But, since reorganization is at the heart of BrainStorm's functionality,
		you won't be surprised to learn that it has some additional useful ways of moving information
		around.
		<p />
		You can open a second window on the current model and navigate around each window independently,
		making it easy to drag and drop entries from one part of a model to another. This is great when you
		have determined your research topics and you want to gather all related material together. If you
		want to put any of the same material in different sections, then this is clearly highlighted with
		BrainStorm's 'namesake' icons.
		<p />
		An alternative way to reorganize would be to Throw entries directly by pressing Ctrl+t. Just whiz
		down your raw information and, every time, you see an entry that relates to the topic of interest,
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
		As you browse around your growing body of information, it will probably stimulate further
		thoughts. Just drop them in. You could do this in a different color, so you can see the
		evolution of your research.
		<p />
		If you are worried about corrupting the work you have already done, why not protect existing work
		from alteration by making it 'read only'. This can be done very easily for part or all of your work.
		<p />
		If you go into Aerial view, you will see how your research is progressing.
		<p />
		<img src="/images/studyaerial.gif" width="413" height="283" border="0" alt="Aerial view" />
		<p />
		This lists each entry on a single line and indents successive levels. Thus, by looking at the left
		hand edge of the list, you can see where in the model you have plenty of information and where it's
		a bit light. You can instantly shift your focus to a weaker area of your model by double clicking
		at the appropriate point.
	</AccordionItem>
	<AccordionItem expanded={ps} title="Publishing and sharing your work">
		If you work with others, or want to share your research or studies, BrainStorm provides a number
		of useful options.
		<p />
		If your colleagues and friends are already using BrainStorm, it is easy enough for them to read and
		work with your BrainStorm models. These are very compact and suitable for emailing, for example.
		<p />
		You can write the model as a text file, as an outline if you wish. And you can use spaces or tabs
		to determine successive levels. You lose the internal hyperlinks between identical entries, but then
		if your friend or colleague is reading the file with a text or word processor, or even an outliner,
		then this won't matter too much. We provide a template for Word which presents the BrainStorm model
		very nicely in both Normal and Outline views
		<p />
		You can publish your model as a simple HTML page, which makes it readable by a host of other programs,
		including Word. More interestingly, perhaps, is that you can output your model as an HTML page, complete
		with an embedded JavaScript 'mind-reader' which attempts to present it as a navigable BrainStorm
		model. Here's a sample clipping:
		<p />
		<img src="/images/studyhtml.gif" width="286" height="244" border="0" alt="HTML 'mind reader'" />
		<p />
		In modern browsers your information appears pretty much as it does in BrainStorm. The entry icons
		are clickable and the hypertext links (we call them 'namesakes') are easily followed. You can search
		the model and, in general, navigate it the way you do in BrainStorm itself. Of course, being a browser
		view means that it cannot be edited.
		<p />
		In general, the older the browser, the less snappy the display. The very oldest browsers will display
		the model as an outline.
		<p />
		BrainStorm's merge command allows you to embed BrainStorm and other files within the existing model.
		This can be useful when collecting contributions from other people. Assuming they are BrainStorm
		users, you just send them out a template of the information you require and ask them to throw in
		their suggestions, perhaps each using a different color. When you get these models in, you can merge
		them such that all their contributions appear under the respective headings but in their own colors.
		<p />
		Finally, we can provide a Java browser which you can embed in your own web page. You can point this
		to any BrainStorm model on your web server and it will be even snappier than the web-published version.
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
		As mentioned above, the aerial view is probably the best way of reviewing your progress. This
		shows the model in outline form and you can navigate up and down, and from side to side, to see
		how the work is progressing.
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
		:global([data-accordion]),
		:global([data-accordion-item] button),
		:global([data-accordion-item] [role='region']) {
			padding: 1rem 0rem;
		}
	}
</style>
