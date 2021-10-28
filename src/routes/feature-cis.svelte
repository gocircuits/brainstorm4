<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Capturing ideas, thoughts and ephemera</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
                 When the creative juices are flowing, the last thing you need
         is a program that you have to think about. BrainStorm lets you
         just tap away. Put your thoughts in as they occur to you.
         Don't worry about sequence or structure, that can come later.<p />
         You can pursue the highways and byways of your mind, if one
         thought gives rise to a bunch of related thoughts they can all
         be 'hung off' the first thought at the time or later, when it
         suits you.<p />
         The important thing is that you capture your thoughts without
         having to worry about how to 'work' BrainStorm. At its simplest,
         you just type. Hierarchies of ideas can be created by clicking
         away with the mouse or using the Home and End keys.<p align="center">
         <img src="/images/present.gif" width="487" height="182" border="0" alt="Preparing a presentation">
         <p />
         Think of a BrainStorm model as a list. Any entry in the list
         can have its own list attached. And identical entries in separate
         lists are automatically hyperlinked. Imagine you have captured someone's contact details. Every time you type that person's name as a BrainStorm entry, all the previously stored details presented to you instantly.
         <p />
         While this is massively useful and it is one of the ways in
         which BrainStorm stands apart from other programs, such a
         connection can be suppressed with a single mouse click.
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