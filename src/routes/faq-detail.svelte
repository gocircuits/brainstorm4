<script>
  import News from "$lib/component/faq-data.js";
  import { page } from "$app/stores";
  const id = Number($page.query.get("id"));
  // console.log(id);
</script>

<svelte:head>
  <title>BrainStorm FAQ</title>
</svelte:head>
<h2 class="page-title">Frequently Asked Question Details</h2>

<div class="news-story">
  <header>
    <h3>{News[id].title}</h3>
    <!-- <time>{News[id].date}</time> -->
  </header>
  <div class="story-content">
    {#if News[id].video}
      <iframe
        width="450"
        height="315"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        title="{News[id].videotitle}"
        src="{News[id].video}"
      />
    {/if}

    {@html News[id].intro}
    {@html News[id].story}
  </div>
</div>

<style>
  .news-story header h3 {
    margin: 0;
    color: rgba(0, 0, 0, 0.8);
  }

  /* .news-story header time {
    display: block;
    padding: 0 0 10px 0;
    font-size: 0.85em;
    color: rgba(0, 0, 0, 0.5);
  } */

  .news-story .story-content {
    padding: 20px 0 0 20px;
    border-top: 1px solid rgba(0, 0, 0, 0.2);
  }
  @media only screen and (max-width: 450px) {
    .news-story iframe {
      width: 300px;
    }
  }
</style>
