<style>
  button {
    float : right;
    border: 1px color:black;
    background-color: lightgray;
    padding: 15px 32px;
    text-align: right;
    font-size: 25px; 
    cursor: pointer;
  }
  button:hover {
    background-color: gray; 
    color: red;
  }
</style>
<div id="hero-image">
  <img src="images/homepage_assets/man_computer.png" width="900" height="200" alt="" />
</div>

<div id="content">
  <h2>By me you can find all the servises for Software Development. From scratch to upgrading the system you have.</h2>

  <div id="service-blocks">
    <div class="service">
      <img src="images/homepage_assets/isolated.jpg" width="250" height="166" alt="Family in front of sold home" />
      <h1>Looking for technologies for isolated places?</h1>
      <p>By me you can get all the necessary equipment for such places as well.</p>
      <p><a href="#" class="learnmore">Learn More...</a></p>
    </div>

    <div class="service">
      <img src="images/homepage_assets/management_systems.png" width="250" height="166" alt="Father and daughter discussing finances" />
      <h1>Looking for management systems apps?</h1>
      <p>Let us provide you the best tools in market to plan and schedule all your works.</p>
      <p><a href="#" class="learnmore">Learn More...</a> </p>
    </div>

    <div class="service">
      <img src="images/homepage_assets/hw.jpg" width="250" height="166" alt="Small business owner" />
      <h1>Needs super fast hardware?</h1>
      <p>By us you will find everything from processors to supercomputers.</p>
      <p><a href="#" class="learnmore">Learn More...</a> </p>
    </div>
    <div>
      <a href="<?php echo url_for('/staff/index.php'); ?>"><button>Administration area <br><p style="font-size: 20">(authorized only)</p></button></a>
    </div>
  </div>

</div>
