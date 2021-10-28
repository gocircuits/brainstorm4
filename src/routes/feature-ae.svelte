<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Add to and enhance your work</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
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
