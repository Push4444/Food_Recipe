<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script
  async
  src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js">
  </script>


  <style type="text/css">
	.pic_pos{
		float: left;
		height: 400px;
		width: 400px;
		margin-left: 7%;
		margin-top: 5%;

	}

	#recipe_heading{
		-ms-transform: rotate(55deg); 
		  -ms-transform-origin: 20% 40%; 
		  transform: rotate(-25deg);
		  transform-origin: 90% 65%;
	}

	.content_pos{
		float: right;
		margin-right: 30%;
		margin-top: 5%;

	}

	.background_color_matcher{
		background-color: #fff7d0;
	}

	.ingredients_box{
		margin-top: 5%;
		margin-right: 10%;
		float: right; 
		width: 49%;
		height: 300px;
		overflow: scroll;
		
	}
	.table {
	border-spacing: 0 15px;
}

i {
	font-size: 1rem !important;
}

.table tr {
	border-radius: 20px;
}

tr td:nth-child(n+5),
tr th:nth-child(n+5) {
	border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
	border-radius: .625rem 0 0 .625rem;
}


#instruction_table{
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

.instr_table_cont{
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
} 
  
.wrapper{
  
 
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
</style>
<style>
 	/*Sliding Section  */
</style>
</head>
<head>
    <title>Food Recipe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section id="Home">
    <nav>
        <div class="logo">
            <!--Logo image -->
        <img src="logo.png" alt="Website Logo">
        </div>
        <!-- Selection Bar -->
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Recipe.html">Gallery</a></li>
            <li><a href="Review">Review</a></li>
        </ul>
        <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-list"></i>
        </div>
    </nav>
</section>
</body>
<body class="bg-blue-50 overflow-x-hidden">
    <!-- Header Navigation Section -->
    <br><br>
    <!--Dish Details-->
	<div>
		<div class="flex pt-5 md:pt-12 justify-center">
			<div class="bg-white md:h-96 w-11/12 md:w-7/10 md:mx-8 md:flex md:max-w-5xl shadow-lg rounded-lg">
				<div class="md:w-1/2 h-64% rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:rounded-bl-lg md:h-auto overflow-hidden"><br>
					<img id="dish-page-image" class="object-cover" src="Chicken1.jpg" />
					<!-- <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url(butterChicken.jpeg)"></div> -->
				</div>
				<div class="mb-4 pt-5 px-6 max-w-xl md:max-w-5xl md:w-1/2" style="overflow: scroll">
					<h2 id="dish-page-name" class="text-3xl font-medium text-yellow-600">Chicken Curry</h2>
					<span id="dish-page-prep-time" class="bg-green-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">45 min</span>
					<span id="dish-page-cuisine-type" class="bg-green-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Indian</span>
					<p id="dish-page-ingredients" class="mt-4 text-gray-600 text-base font-regular">
						<span><li class="text-base font-regular">2 pound chicken</li></span>
						<span><li>2 teaspoons salt</li></span>
						<span><li>1/2 cup cooking oil</li></span>
						<span><li>1 tbsp Garam Masala Powder</li></span>
						<span><li>1/2 tsp Red Chilli Powder</li></span>
						<span><li>1/2 Tumeric Powder</li></span>
						<span><li>For garnishing Coriander Leaves,chopped</li></span>
						<span><li>to taste Salt</li></span>
						<span><li>2 tsp Coriander powder</li></span>
						<span><li>1 tbsp Ginger Paste</li></span>
						<span><li>1 tbsp Garlic Paste</li></span>
						<span><li>2 Tomatoes,purseed</li></span>
						<span><li>3 large Onions(paste)</li></span> 
					</p>
				   
				</div>
			</div>
		</div> 
	</div>
	
	<!-- end of ingredients box-->
	
	<!-- start of dish directions box -->
	
	<div>
		<div class="py-5 flex justify-center">
			<div class="bg-white w-11/12 md:w-7/10 md:mx-8 md:flex md:max-w-5xl shadow-lg rounded-lg">
				<div class="pt-5 px-6 max-w-xl lg:max-w-5xl mb-4">
					<h2 class="text-2xl font-medium text-yellow-600">Directions<span class="text-indigo-600"></span></h2>
					<span class="bg-green-400 text-gray-50 text-sm font-bold rounded-md px-2 py-1">Instructions</span>
					<span id="dish-page-video-present" class="hidden bg-green-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Video</span>
					 <p id="dish-page-direction-text" class="mt-4 font-regular text-base">
                        <b>Quick Chicken Curry</b>
                        <br><br>
                        <span><li>Heat oil in a pan and sauté the onion paste, garlic and ginger paste till golden brown.<br></li></span>
                        <span><li>Add tomato puree. When the tomato puree dries up, add coriander powder, cumin powder, garam masala, red chilli powder, turmeric powder and salt. Let the spices cook.<br></li></span>
                        <span><li>Add chicken pieces into the masala. Stir well and cook till they are golden brown.<br>
                        <span><li>Add 1/2 cup of water and stir. Cover with a lid and let it simmer till the chicken is cooked.<br>
                        <span><li>Garnish with chopped coriander and serve.</li></span>       
                    </p>
                    <br>
	<!-- video section -->
                <center>

				 <iframe width="800" height="400" src="https://www.youtube.com/embed/sT65XKV4BB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center> 
				<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name"  style="border:solid 1px orange;">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="type your comment"  style="border:solid 1px orange;"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment" style="border:solid 1px black;">Post Comment</button>
		</form>
	</div>

				<div class="mt-8 flex flex-row">
					<svg id="dish-page-like-btn" onClick="toggleLikeButton(this)" class="w-6 h-6 cursor-pointer" fill="#FFFFFF" stroke="#EC4899" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
					<span id="dish-page-num-likes" class="ml-2">0</span>
					<!-- <svg class="w-6 h-6 stroke-current text-pink-500 fill-current text-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg> -->
				</div>

				</div>

				<!--Like button-->
			</div>
		</div> 
	</div> 
	  
	
	<div><?php include ('chickencurrybackend.php');?></div>
		

	<!-- Foooter -->
    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <!-- <h2>Location</h2> -->
                <!-- <p>Sri Lanka</p> -->
                <!-- <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p> -->
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <a href="Home.html"><p>Home</p></a>
                <a href="About.html"><p>About</p></a>
                <a href="Recipe.html"><p>Gallery</p></a>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+91 63018 07996</p>
                <p>+91 70938 99432</p>
                <p>teamfoodies143@gmail.com</p>
            </div>

            <!-- <div class="footer_tag">
                <h2>Our Service</h2>
                <p></p>
                <p></p>
                <p>24 x 7 Service</p>
            </div> -->

            <div class="footer_tag">
                <h2>Follows</h2>
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a><br><br>
                <i class="fa-brands fa-twitter"></i><br><br>
                <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a><br><br>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> Team Food Lover</span></p>

    </footer>

    
</body>
</html>
    <script type="text/javascript" src='../scripts/loginHandler.js'></script>
	<script type="text/javascript" src='../scripts/dishPageHandler.js'></script>

</body>
</html>
