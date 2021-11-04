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
			ae = true;
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
	}
</script>

<svelte:head>
  <title>BrainStorm Features</title>
</svelte:head>

<h2 class="page-title">Core Features</h2>

<Accordion multiselect>
	<AccordionItem expanded={cis} title="Capture Ideas">
    
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
		<p align="center">
			<img
				src="/images/present.gif"
				width="487"
				height="182"
				border="0"
				alt="Preparing a presentation"
			/>
		</p>
		<p />
		Think of a BrainStorm model as a list. Any entry in the list can have its own list attached. And
		identical entries in separate lists are automatically hyperlinked. Imagine you have captured someone's
		contact details. Every time you type that person's name as a BrainStorm entry, all the previously
		stored details presented to you instantly.
		<p />
		While this is massively useful and it is one of the ways in which BrainStorm stands apart from other
		programs, such a connection can be suppressed with a single mouse click.

    </AccordionItem>
    <AccordionItem expanded={ci} title="Capture Information">
      BrainStorm will try to make sense of any file it is offered. A text file will be easy. A
      formatted file from a word processor, for example, might not look so pretty, but it will try.
      <p />
      By far the easiest way to transfer information into BrainStorm is to copy it directly from the screen.
      Whether you're in a word processor, a database, an Acrobat document or a web page, simply highlight
      the material you want and copy it. If you have a scanner and recognition software, you can capture
      information from paper sources as well.
      <p />
      The fastest way to capture on-screen information is with BrainStorm's 'Magic paste'. As soon as you
      copy anything to the clipboard (using Ctrl+c or the copy command), it is immediately picked up by
      BrainStorm. You don't have to do anything else. Alternatively you can use regular paste or Smart
      paste, both of which require you to bring BrainStorm to the foreground before pasting.
      <p />
      Each kind of paste offers you a variety of formatting options for the incoming material. You can
      ignore leading spaces or use them to indicate hierarchy. You can let BrainStorm figure out where
      paragraphs start and end, or insist that the information is imported exactly as it appears on screen.
      <p />
      With Magic paste, you can define a separator, which might include date and time, to precede each
      paste so you can clearly distinguish between each paste. The separator and date/time paste functions
      are also available at the click of an icon.
  </AccordionItem>
  <AccordionItem expanded={ob} title="Organize Quickly">
    You can reorder your information in the traditional way by selecting and dragging/dropping or by
		cutting and pasting. But, since reorganization is at the heart of <a href="/">BrainStorm</a>'s
		functionality, you won't be surprised to learn that it has some additional useful ways of moving
		information around.
		<p />
		You can open a second window on the current model and navigate around each window independently,
		making it easy to drag and drop entries from one part of a model to another. This is great when you
		have got chapter headings, for example, and you want to move all related entries to the level below
		their chapter headings. (Just hold 'shift' while dragging and dropping.)
		<p />
		An alternative would be to Throw entries directly by pressing Ctrl+t. Just whiz down your dumped
		thoughts and information and, every time, you see an entry that relates to the topic of interest,
		Throw it. This is fast. Much faster than drag and drop.
		<p />
		A related command throws a copy of the selected entries, so the same information is on tap at multiple
		locations. This barely increases the model file size because the lower level detail is stored only
		once
		<p />
		'Push down' and 'Push up' commands allow you to grab blocks of entries and either make them subsidiary
		to an existing entry or push them up a level by dropping them onto the heading icon.
		<p />
		You can even resequence material on the fly by selecting it in the desired sequence prior to a drag
		or a throw. It will arrive in the selected sequence. Or you can use the more conventional sort commands
		to arrange selected entries into ascending or descending alphabetical sequence.
  </AccordionItem>
  <AccordionItem expanded={ae} title="Add &amp; Enhance">
    As you build your BrainStorm information model, it will probably stimulate
		further thoughts. Just drop them in. You could do this in a different color,
		so you can see the evolution of your work.
		<p />
		You can paste in date and/or time details if you wish but, when preparing documentation,
		this might hinder rather than help. BrainStorm is geared to the free flow of
		ideas.
		<p />
		The various paste options mean that you can capture additional material from
		the computer screen as you find it. Magic paste, in particular is excellent for
		this. Just highlight what you like the look of, press ctrl+c and it is automatically
		copied into BrainStorm.
		<p />
		If you are worried about corrupting the work you have already done, why not protect
		existing work from alteration by making it 'read only'. This can be done very
		easily for part or all of your work.
		<p />
		If you go into Aerial view, you will see how your work is evolving.
		<p />
		<img
			src="/images/presentaerial.gif"
			width="278"
			height="223"
			border="0"
			alt="Presentation - aerial view"
		/>
		<p />
		This lists each entry on a single line and indents successive levels. Thus, by
		looking at the left hand edge of the list, you can see where in the model you
		have plenty of information and where it's a bit light. You can instantly shift
		your focus to a weaker area of your model by double clicking at the appropriate
		point.
  </AccordionItem>
  <AccordionItem expanded={ps} title="Publish &amp; Share">
    <p>
      If your colleagues and friends use BrainStorm, that is the easiest way to share your thoughts and information with each other. However, you can also publish two kinds of HTML document as well as writing to text files and to the clipboard.<p />
        You can write the model as a text file, as an outline if you wish. And you can use spaces or tabs to determine successive levels.By outputting as plain text, you lose the internal hyperlinks between identical entries, but then if your friend or colleague is reading the file with
        a text or word processor, or even an outliner, then this won't
        matter too much. We provide a template for Word which presents the BrainStorm model very nicely in both Normal and Outline views<p />
        You can also publish your model as a simple HTML page, which makes it
        readable by a host of other programs, including Word.<p />
        More interestingly, perhaps, is that you can output your model
        as an HTML page, complete with an embedded JavaScript 'mind-reader'
        which attempts to present your information as a hierarchical, navigable model, complete with the original hyperlinks. Here's a sample clipping:<p />
        <img src="/images/presenthtml.gif" width="258" height="200" border="0" alt="HTML 'mind-reader'">
        <p />
        In modern browsers your information appears pretty much as it
        does in BrainStorm. The entry icons are clickable and the
        hypertext links (we call them 'namesakes') are easily followed.
        You can search the model and, in general, navigate it the way
        you do in BrainStorm itself. Of course, being a browser view
        means that it cannot be edited.<p />
        The older the browser, the less snappy the display. The very oldest browsers will give up on the clever stuff and just display the model as an outline, using HTML's heading styles to differentiate between levels.<p />
        BrainStorm's merge command allows you to embed BrainStorm and
        other files within the existing model. This can be useful when
        collecting contributions from other people. Assuming they are
        BrainStorm users, you just send them out a template of the
        information you require and ask them to throw in their
        suggestions, perhaps each using a different color. When you
        get these models in, you can merge them such that all their
        contributions appear under the respective headings but in their
        own colors.<p />
        Finally, we can provide a Java browser which you can embed in
        your own web page. You can point this to any BrainStorm model
        on your web server and it will be even snappier than the
        web-published version.
  </AccordionItem>
  <AccordionItem expanded={ir} title="Instant Recall">
    <p>
      All the information in your BrainStorm models is instantly on tap, and in
      the context you last left it. Some people return to models after years and
      'think their way' back in to their work.
      <p />
      The Find and Find again commands are probably the most obvious way of finding
      information that you know is in the model somewhere. An alternative would be
      to exploit the 'namesake' feature of the program. If you know what you are after,
      just type enough of the entry to be unique and bracket it with asterisks and
      the entry will be replicated at your fingertips.
      <p />
      For example, *just type enough* would find the above paragraph.
      <p />
      Immediately, any deeper level information about that entry is at your fingertips.
      All the information about the character in the play, for example, is there on
      tap.
      <p />
      A 'namesake' icon will appear to the left of your new entry to show that this
      is one in a chain of identical entries. Just press the left or right arrow key
      to go to the previous or next occurrence of the entry. You will see each in its
      original context.
      <p />
      Whether searching or namesaking or just browsing around your model, you will
      find that BrainStorm makes finding information a breeze.
  </AccordionItem>
  <AccordionItem expanded={cp} title="Check Progress">
    Progress monitoring comes in two forms. One is the progress of your
		information-gathering work. The other is the progress of the project on
		which you're engaged. BrainStorm helps with both.
		<p />
		The aerial view is probably the best way of reviewing your progress with building
		your freeform information database (which is what BrainStorm is). This shows
		your model in outline form and you can navigate up and down, and from side to
		side, to see how the work is progressing.
		<p />
		You might also assign part of your model, or a separate one, to your deadlines
		and deliverables. It's a simple matter to keep this updated and monitor progress
		in a more conventional way.
		<p />
		You can even send out copies of your model for others to make their own contributions.
		These can all be merged together to create a 'supermodel' of all your ideas and
		inputs. If you get colleagues to put their name against each contribution or
		work in a particular color, it is easy to keep on top of things.
		<p />
		When Marck and David were developing BrainStorm, they met up very occasionally
		- once or twice a year, yet the project was entirely managed using BrainStorm
		(there was a DOS version before the Windows version). They used to pass a single
		file back and forth, each updating when they had possession. Then they incorporated
		the Merge function, which meant that single file passing was no longer necessary.
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
