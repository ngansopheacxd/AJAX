<?php
     if($_POST["dataId"]){
          $postData = $_POST["dataId"];
          $output = '';
          if($postData == "bestSellers"){
               $output .='
               <div class="product_data" id="bestSellers">
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/ring.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/chain.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/earring.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/earring_2.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/earring_3.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/mangalsutra.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/ring_2.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/ring_3.jpg">
               </div>
           </div>
               
               ';
               echo  $output;
          }
          if($postData == "newArrival"){
               $output .='
               <div class="product_data" id="newArrival">
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/band.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/bange.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/bangle.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/earring.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/earring_2.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/necklace.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/necklace_2.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/new_arrivals/ring.jpg">
               </div>
           </div>
               ';
               echo  $output;
          }
          if($postData == "recentViewed"){
               $output .='
               <div class="product_data" id="recentViewed">
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/bracelet.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/earring.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/earring_2.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/kada.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/pendant.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/pendant_2.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/recent_viewed/ring.jpg">
               </div>
               <div class="item" data-aos="zoom-out">
                   <img src="images/bestSellers/ring_2.jpg">
               </div>
           </div>
               ';  
               echo  $output;
          }
     }

?>