<script>
  import News  from '$lib/component/faq-data.js'
</script>

<svelte:head>
  <title>BrainStorm FAQ</title>
</svelte:head>
<h2 class="page-title">Frequently Asked Questions</h2>

<div class="news">
  {#each News as item,i}
    <div class="news-item">
      <!-- <div class='hook-number'>{i+1}</div> -->
      {#if item.href}
      <a href={item.href}>
        <h3>{item.title}<em>&rarr;</em></h3>
        <!-- <time>{item.date}</time> -->
        <p>
          {@html item.intro}
        </p>
      </a>
      {:else}
      <h3>{item.title}</h3>
      <!-- <time>{item.date}</time> -->
      <p>
        {@html item.intro}
      </p>
      {/if}
    </div>
  {/each}
</div>

<style>
  .news {
    padding-top: 1em;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    column-gap: 20px;
    align-content: center;
    row-gap: 20px;
  }

  .news-item {
    padding: 5px;
    flex-basis: 300px;
    justify-content: left;
    /* background-color: oldlace;
    
    border: rgba(96, 87, 70, 0.6);
    border-style: solid;
    border-width: 1px; */
    align-items: center;
    border-radius: 1rem;
  }
  .news-item h3 {
    color: black;
    margin: 10px 0px 5px 0px;
  }
  .news-item a h3 em {
    padding: 0 0 0 5px;
    font-style: normal;
    font-size: var(--fs-300);
    font-weight: 300;
    opacity: 0;
    transition: all 100ms ease-in-out;
    -webkit-transition: all 100ms ease-in-out;
  }

  .news-item a:hover h3 em {
    /* padding: 0 0 0 10px; */
    font-weight: 300;
    opacity: 0.99;
  }

 a{
  text-decoration: none;
 }
  
   p {
    font-size: var(--fs-300);
    margin: 20px 0px 0px 0px;
    color: rgba(0, 0, 0, 0.85);
    }

</style>
