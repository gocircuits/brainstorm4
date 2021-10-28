<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Capturing information</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
        BrainStorm will try to make sense of any file it is offered. A
        text file will be easy. A formatted file from a word processor,
        for example, might not look so pretty, but it will try.<p />
        By far the easiest way to transfer information into BrainStorm
        is to copy it directly from the screen. Whether you're in a
        word processor, a database, an Acrobat document or a web page,
        simply highlight the material you want and copy it. If you have a scanner and recognition software, you can capture information from paper sources as well.<p />
        The fastest way to capture on-screen information is with BrainStorm's 'Magic paste'. As soon as you copy anything to the clipboard (using Ctrl+c or the copy command), it is immediately picked up by BrainStorm. You don't have to do anything else. Alternatively you can use regular paste or Smart paste, both of which require you to bring BrainStorm to the foreground before pasting.<p />
        Each kind of paste offers you a variety of formatting options
        for the incoming material. You can ignore leading spaces or use
        them to indicate hierarchy. You can let BrainStorm figure out
        where paragraphs start and end, or insist that the information
        is imported exactly as it appears on screen.<p />
        With Magic paste, you can define a separator, which might
        include date and time, to precede each paste so you can
        clearly distinguish between each paste. The separator and date/time paste functions are also available at the click of an icon.
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
        :global([data-accordion-item] button[disabled] ){
 
  cursor:default;
}
        :global([data-accordion-item] [role="region"]) {
            padding: 2rem;
        }
    </style>
