<?php
include "include/header.php";
 ?>
 <!-- <link rel="stylesheet" href="css/food.css"> -->
 <style>
 body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.food {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.food-img {
    width: 100%;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

h2 {
    text-align: center;
    margin: 10px 0;
}
h1 {
    text-align: center;
    margin: 10px 0;
    font-size:50px;
}

.description {
    padding: 20px;
}

.price {
    font-weight: bold;
}
p{
   font-size: 19px;
}

</style>
  <h1>Food Menu</h1>

   <div class="food">
      <img id="roomimg" width="480" height="320"   src="img/grilled_chicken.jpg" >
      <h2><center>Grilled Chicken</center></h2>
      <div id="rdiscrp">
   <h3>Food Description:</h3>
         <p>
         Fresh salad with grilled chicken breast, mixed greens, cherry tomatoes, cucumbers, and balsamic vinaigrette dressing.
         </p>

         <br><label id="msg">Price: 250.00 </label>
      </div>
   </div>

   <div class="food">
      <img id="roomimg" width="480" height="320" src="img/margherita_pizza.jpg" >
      <h2><center>Margharita Pizza</center></h2>
      <div id="rdiscrp">
      <h3>Food Description:</h3>

         <p>
         Classic pizza topped with tomato sauce, fresh mozzarella cheese, basil leaves, and a drizzle of olive oil.
        </p>

        <br><label id="msg">Price: 300.99 </label>
      </div>
   </div>

   <div class="food">
      <img id="roomimg" width="480" height="320" src="img/chicken_burger.jpg" >
      <h2><center>Chicken Burger</center></h2>
      <div id="rdiscrp">
      <h3>Food Description:</h3>
         <p>
         Juicy chicken patty served on a sesame seed bun with lettuce, tomato, onion, pickles, and a side of fries.
         </p>

         <br><label id="msg">Price: 250.09 </label>
      </div>
   </div>

   <div class="food">
      <img id="roomimg" width="480" height="320" src="img/vegetable_stir_fry.jpg" >
      <h2><center>Vegetable Stir Fry</center></h2>
      <div id="rdiscrp">
      <h3>Food Description:</h3>
         <p>
          Assorted fresh vegetables stir-fried with tofu in a savory soy sauce, served with steamed rice.
         </p>

         <br><label id="msg">Price: 280.89 </label>
      </div>
   </div>

   <div class="food" >
      <img id="roomimg" width="480" height="320" src="img/spaghetti_carbonara.jpg" >
      <h2><center>Spaghetti Carbonara</center></h2>
      <div id="rdiscrp">
      <h3>Food Description:</h3>
         <p>
         Spaghetti pasta tossed in a creamy sauce with bacon, Parmesan cheese, and black pepper.
         </p>

         <br><label id="msg">Price: 350.50 </label>
   </div>

