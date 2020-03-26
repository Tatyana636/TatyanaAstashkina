
<?php  include("page/header.php"); ?>
<div class='Welcome'>
	<p>Добро пожаловать!</p>
</div>

<div class='services'>
	<div  class='title'><h3>Services</h3>
	<hr></div>
	<ul>
	<li class='list_coffee'>
	<img  class='ico_serv' src="../img/ico_coffee.png" alt="coffee">
	<a href='#' class='name_serv'>coffee</a>
	<span class='services_span'>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</span>
	</li>	
	<li class='list_instant'>
	<img class='ico_serv' src="img/ico_instant.png" alt="instant">
	<a href='#' class='name_serv'>instant</a>
		<span class='services_span'>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</span>
	</li>
	<li class='list_serious'>
	<img class='ico_serv' src="img/ico_serious.png" alt="serious">
	<a href='#'  class='name_serv'>serious</a>
	<span class='services_span'>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</span>
	</li>
	<li class='list_frame'>
	<img class='ico_serv' src="img/ico_frame.png" alt="frame">
	<a href='#'  class='name_serv'>frame</a>
	<span class='services_span'>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</span>
	</li>
	</ul>
</div>	

<div class='portfolio'>
	<div  class='title'><h3>portfolio</h3>
	<hr></div>
	<ul class='filtres'>
	<li class='all'>all</li>	
	<li class='Panorams'>panoramas</li>	
	<li class='Portraints'>portraints</li>	
	<li class='Macro'>macro</li>	
	<li class='journal'>journal</li>	
	</ul>
	<div class='container_img'>
	<div class='slider'>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<img src='img/plusbackground.jpg' title='add photo' alt='submit new photo' oncklick='fun()' id='add_img'></img>
	<img src="img/macro/portfol-photo_macro(1).jpg" alt='' class="mySlides">
	<img src="img/panorams/portfol-photo_panoram(1).jpg" alt='' class="mySlides">
	<img src="img/journal/portfol-photo_journal(1).jpg" alt='' class="mySlides">
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
		  
	<div class="row">
		<img class="demo cursor" alt='demo img' src="img/macro/portfol-photo_macro(1).jpg" onclick="currentSlide(1)">
		<img class="demo cursor" alt='demo img' src="img/panorams/portfol-photo_panoram(1).jpg" onclick="currentSlide(2)">
		<img class="demo cursor" alt='demo img' src="img/journal/portfol-photo_journal(1).jpg" onclick="currentSlide(3)">
	</div>
	</div>
</div>

<div class='modal_img'>
	<h3>Вставьте изображение</h3>
	<form id='form_img' method="POST" enctype="multipart/form-data" >
	<label>Выберите категорию изображения и вставьте само изображение
	<select class='category_img' name='category'>
	<option>Journal</option>
	<option> Panoram</option> 
	<option>Portrain</option> 
	<option>Macro</option> 
	</select>
    <input type="file" id='imgfiles' name='img'/></label>
	<input type="submit" value='Сохранить' id='saved' name='saved'/>
	<input type="button" class='cancelModal' value='Отмена' name='cancel'/>
	</form>
</div>

<div class='info_section'>
	<div class='title'><h3>just default section</h3>
	<hr></div>
	<p>Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi bears party gummi bears sesame snaps I love underwear.com. Souffle cotton candy dessert candy ice cream wafer gummies cheesecake brownie.
	
Maffin chupa chups jelly beans sweeet pie applicake. Croissant chocolate cake I love pudding bears party gummi bears sesame snaps i love underwear.com. Souffle cotton candy dessert candy ice cream wafer gummies cheesecake brownie.
<button type='button' class='but_visit' value='visit me'>view me</button>
</p>
	<video class='video' poster='img/video.jpg'></video>
</div>

<div class='twitter'>
	<h3>Twitter</h3>
	<hr>
	<a href='#'><img src="img/soc_twitter.png" alt="twitter" class='ico'></a>
	<p>Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé
<a href='#' class='link'>@cheesecake</a> tootsie roll.</p>
</div>

<div class='who_is'>
	<div  class='title'><h3>Who is John Doe?</h3>
	<hr></div>
	<p>Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi bears party gummi bears sesame snaps I love underwear.com. Souffle cotton candy dessert candy ice cream wafer gummies cheesecake brownie.
		
Maffin chupa chups jelly beans sweeet pie applicake. Croissant chocolate cake I love pudding bears party gummi bears sesame snaps i love underwear.com. Souffle cotton candy dessert candy ice cream wafer gummies cheesecake brownie.
	</p>
	<p>Pudding dessert jujubes tiramisu gingerbread croissant tiramisu applicake. Sesame snaps sugar plum cotton candy chocolate bonbon lemon drops candy canes cotton candy. Cake coffee pie bear claw pastry. </p>
	<div class='social'>
	<a href='#' class='soc soc_twitter'></a>
	<a href='#' class='soc soc_google'></a>
	<a href='#' class='soc soc_dribble'></a>
	<a href='#' class='soc soc_coffee'></a>
</div>
</div>

<div class='testimonials'>
	<div  class='title'><h3>testimonials</h3>
	<hr></div>
	<img src="img/quotation_marks.png" alt="quotation marks" class='ico'>
	<blockquote>
	Applicake chocolate cake wafer toffee pie soufflé wafer. Tart marshmallow wafer macaroor cheesecake jelly. Gingerbread cookie souffle sweet roll sweet roll jelly-o.
	<span class='author'>-Walter White</span>
	</blockquote>
</div>

<div class='contact'>
	<div  class='title'><h3>contact</h3>
	<hr></div>
	<form id='contact'>
	<label for='fullname'>Full name
	<input type='text' maxlength="10" name='FullName' id='fullname' required/>
	</label>	
	<label for='email'>email
	<input type='email' name='Email' id='email'/>
	</label>	
	<label for='message'>message
	<textarea class='message' id='message' name='Message' maxlength='10000'></textarea>
	</label>		
	<button type='submit' class='sub' id='submit'>message</button>
	</form>
	<p>
	Jujubes bear claw croissant wafer sweet lemon drops brownie chocolate bar. Sweet lollipop halvah tootsie rool cake fruitcake. Chocolate cake chocolate bar gingerbreaoa lollipop tart. Jujubes bear claw donut chupa chups.

	Linda Newman 
	W325 State Road 123
	Mondovi, WI(Wisconsin)
	98746-54321(715)946 - 1324
	</p>
</div>

<?php require_once "page/footer.php"; ?>
