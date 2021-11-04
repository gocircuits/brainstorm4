<script>
  import Users  from '$lib/component/user-data.js'
  // console.log (Users);
</script>

<svelte:head>
  <title>BrainStorm Users</title>
</svelte:head>
<h2 class="page-title">Our Users</h2>

<ul class="users">
  {#each Users as item}
    <li class="user">
      <a href={item.href}>
        <img src={item.avatar} alt={item.label} />
        <h3>{item.label}</h3>
      </a>
    </li>
  {/each}
</ul>

<style>
  .page-title {
    text-align: center;
  }
  .users {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
  }

  ul.users {
    list-style: none;
    padding: 0;
    text-align: center;
  }

  li.user {
    width: 130px;
  }

  a{
    text-decoration: none;
  }
  
  a img {
    width: 80%;
    margin: 0 0 10px 0;
    padding: 10px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    opacity: 0.8;
    -webkit-transition: all 150ms ease-in-out;
    -moz-transition: all 150ms ease-in-out;
    transition: all 150ms ease-in-out;
  }

  a h3 {
    font-size: var(--fs-400);
    font-weight: 400;
    color: rgba(0, 0, 0, 0.6);
  }

  a:hover img {
    opacity: 0.99;
  }

  a:hover h3 {
    color: rgba(0, 0, 0, 0.9);
  }
</style>
