<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Information on tap</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
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
</Accordion>

<style>
	:global([data-accordion]) {
		list-style: none;
		margin-bottom: 1rem;
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
	:global([data-accordion-item] button[disabled]) {
		cursor: default;
	}
	:global([data-accordion-item] [role="region"]) {
		padding: 2rem;
	}
</style>
