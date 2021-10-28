<script>
  import Users  from '$lib/component/user-data.js';
  import { page } from "$app/stores";
  const id = Number($page.query.get("id"));

  // console.log(`the current uid is ${id}`);
</script>

<div class="profile">
  <img src={Users[id].avatar} alt={Users[id].label} />
  <h3>{Users[id].label}</h3>
  <p>{Users[id].bio}</p>
</div>
<div class="story">
  <blockquote class="quote">
    {@html Users[id].quote}
  </blockquote>
  <div class="review">
    {@html Users[id].review}
  </div>
</div>

<style>
  .profile img {
    float: left;
    width: 140px;
    margin: 0 20px 0 0;
    border-radius: 50%;
    -webkit-border-radius: 50%;
  }

  .profile h3 {
    margin: 40px 0 0 0;
  }

  .profile p {
    margin: 0;
  }

  .story {
    float: left;
    margin: 0 0 0 160px;
    padding: 40px 0;
    border-top: 1px solid rgba(0, 0, 0, 0.2);
  }
</style>
