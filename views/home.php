

<!DOCTYPE html>
<html>
<title>Its A Wrap</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card-2" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">It's a Wrap</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="assets/images/wrap.png" alt="wrap" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">It's A Wrap Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="assets/images/jerknrice.png" class="w3-round w3-image w3-opacity-min" alt="jerk and rice" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About<br>It's A Wrap</h1><br>
    <!--  <h5 class="w3-center">Tradition since 1889</h5>-->
      <p class="w3-large">On one night in 2015, a discussion amongst family started when everyone present was arguing over food to order.
  The debate then moved to the kitchen, where the cupboards were raided and what was found were some Taco wraps, lettuce and shredded chicken pieces.
  Due to the lack of ingredients the cousins thought of all the possible tasty varities of wrap that could be had, Its a Wrap was born!!
  <br><br>
Its a Wrap was founded in February 2015 we pride ourselfes on specialising in providing a variety of warm wraps for an affordable price.
All meat used is halal and sourced from local suppliers.
We saw a niche in the market for high quality wraps that do not have a fast food feel or the traditional Lebanese angle.
Instead we use a mixture of cuisines with mouth watering combinations ranging from the Caribbean to Europe and Asia.
<br><br>
We also offer a range of Carribean dishes and sides that are served with a friendly smile.
Often Carribean food is associated with a chilled environment where patrons can sit and relax.
But at Its A Wrap we believe these meals can be made to go, for those busy people on the run,
who still want to enjoy good food but who have places to be.</p>
	</div>
  </div>

  <hr>

  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Bread Basket</h4>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>

      <h4>Honey Almond Granola with Fruits</h4>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>

      <h4>Belgian Waffle</h4>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

      <h4>Scrambled eggs</h4>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

      <h4>Blueberry Pancakes</h4>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div class="w3-col l6 w3-padding-large">
      <img src="assets/images/skewers2.jpeg" class="w3-round w3-image w3-opacity-min" alt="skewers" width="500" height="750">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="<?php echo base_url('home/send_mail');?>" method="post" accept-charset="utf-8">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name" name="name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People" name="people"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message" name="message"></p>
      <p><button class="w3-button w3-light-grey w3-section" id="submit" type="submit" name="submit" value="Submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p> <a title="W3.CSS" target="_blank" class="w3-hover-text-green">It's A Wrap &copy;</a></p>
</footer>

</body>
</html>
