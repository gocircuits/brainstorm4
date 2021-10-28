<script>
</script>

<svelte:head>
  <title>Company Leadera</title>
</svelte:head>
<div class="team">
  <div class="team-member">
    <div class="position">Current Managment</div>
    <img  src="/images/team/team-member.jpg" alt="Oliver" />
    <h3>Oliver Gatchell</h3>
    <p>
      Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta
      gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus,
      tellus ac cursus commodo, tortor mauris.
    </p>
    <a href="https:\\linkedin.com" class="button secondary"
      >View LinkedIn Profile<em>&rarr;</em></a
    >
  </div>
  <div class="team-member">
    <div class="position">Founders</div>
    <img  src="/images/team/team-member.jpg" alt="Marck" />
    <h3>Marck Pearlstone</h3>
    <p>
      Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta
      gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus,
      tellus ac cursus commodo, tortor mauris.
    </p>
    <a href="https:\\linkedin.com" class="button secondary"
      >View LinkedIn Profile<em>&rarr;</em></a
    >
  </div>
  <div class="team-member">
    <div class="position">&nbsp;</div>
    <img  src="/images/team/team-member.jpg" alt="David" />
    <h3>David Tebbutt</h3>
    <p>
      Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta
      gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus,
      tellus ac cursus commodo, tortor mauris.
    </p>
    <a href="https:\\linkedin.com" class="button secondary"
      >View LinkedIn Profile<em>&rarr;</em></a
    >
  </div>
</div>

<style>
  .team {
    display: flex;
    flex-flow: row;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: space-evenly;
    /* background-color: rgba(255, 255, 0, 0.2); */
  }
  .team-member {
    flex-basis: 300px;
    display: flex;
    flex-flow: column;
    justify-content: center;
    background-color: rgba(96, 87, 70, 0.6);
    align-items: center;
  }
  .position {
    margin-right: auto;
  }

  .team-member img {
    display: block;
    width: 90%;
    height: auto;
    border-radius: 50%;
    -webkit-border-radius: 50%;
  }
  .team-member a {
    color: #aaaaaa;
    text-decoration: none;
  }
  .team-member h3 {
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;
    font-weight: 500;
    border-bottom: 2px solid #aaaaaa;
  }
  .team-member p {
    padding-left: 10px;
    padding-right: 10px;
  }
</style>
