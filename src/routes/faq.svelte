<script>
  import News  from '$lib/component/faq-data.js'
  import { Accordion, AccordionItem } from 'svelte-accessible-accordion';
</script>

<svelte:head>
  <title>BrainStorm FAQ</title>
</svelte:head>
<h2>Frequently Asked Questions</h2>

<Accordion multiselect>
  {#each News as item,i}
  <AccordionItem expanded title={item.title}>
      <!-- <div class='hook-number'>{i+1}</div> -->
      {#if item.href}
      <a href={item.href}>
        <p>
          {@html item.intro}
        </p>
      </a>
      {:else}
      <p>
        {@html item.intro}
      </p>
      {/if}
    </AccordionItem>
  {/each}
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
a{
  font-size: var(--fs-400);
  color:black;
  text-decoration: none;
}
a::after{
  content: "<more>"
}
</style>
