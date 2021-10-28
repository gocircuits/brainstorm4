<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Publish and share your BrainStorm models</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
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
