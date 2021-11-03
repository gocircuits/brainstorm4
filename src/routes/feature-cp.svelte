<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Check and monitor progress</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
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
	:global([data-accordion-item] button[disabled]::before) {
		content:none;
	}
	:global([data-accordion-item] [role="region"]) {
		padding: 2rem;
	}
</style>
