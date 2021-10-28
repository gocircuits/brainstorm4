<script>
	import { Accordion, AccordionItem } from "svelte-accessible-accordion";
</script>

<h1>Organizing your information</h1>
<Accordion multiselect>
	<AccordionItem expanded disabled title="">
        You can reorder your information in the traditional way by
        selecting and dragging/dropping or by cutting and pasting. But,
        since reorganization is at the heart of <a href="/">BrainStorm</a>'s
        functionality, you won't be surprised to learn that it has some
        additional useful ways of moving information around.
        <p />
        You can open a second window on the current model and navigate
        around each window independently, making it easy to drag and
        drop entries from one part of a model to another. This is great
        when you have got chapter headings, for example, and you want
        to move all related entries to the level below their chapter
        headings. (Just hold 'shift' while dragging and dropping.)<p />
        An alternative would be to Throw entries directly by pressing
        Ctrl+t. Just whiz down your dumped thoughts and information
        and, every time, you see an entry that relates to the topic of
        interest, Throw it. This is fast. Much faster than drag and drop.<p />
        A related command throws a copy of the selected entries, so the same
        information is on tap at multiple locations. This barely increases
        the model file size because the lower level detail is stored only once<p />
        'Push down' and 'Push up' commands allow you to grab blocks of
        entries and either make them subsidiary to an existing entry
        or push them up a level by dropping them onto the heading icon.<p />
        You can even resequence material on the fly by selecting it in
        the desired sequence prior to a drag or a throw. It will arrive
        in the selected sequence. Or you can use the more conventional sort
        commands to arrange selected entries into ascending or descending
        alphabetical sequence.
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
