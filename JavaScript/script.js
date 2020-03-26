$(document).ready(function(){
$('.nav').click(function(){
	$('.icon-bar1').toggleClass('icon-bar1_anim');
	$('.icon-bar2').toggleClass('icon-bar2_anim');
	$('.icon-bar3').toggleClass('icon-bar3_anim');
	$('.nav_container').removeClass('.nav_container').toggleClass('anim_container');
})

$('.cancelModal').on('click', function(){
	$('.modal_img').css('display', 'none');
  });
  $('.Login').click(function(){
	$('#modalLogin').css('display','block');
});

$('.registration').click(function(){
	$('#modalRegistration').css('display','block');
});

$('.registr').click(function(){{
	$('#modalLogin').css('display','none');
	$('#modalRegistration').css('display','block');
}
});

$('input[name="RepeatPassword"]').blur(function(){
	$pass=$('.RegPassword').val();
	$repeatpass=$('.RepeatPassword').val();
	if($repeatpass!=$pass){
		$('input[name="RepeatPassword"]').css('border','2px solid red');
		if($('.Nopass')==0){
		$('input[name="RepeatPassword"]').after('<span class="Nopass">Passwords don`t match</span>');
		}
	}else{
		$('input[name="RepeatPassword"]').css('border','2px solid green');
		$('.Nopass').remove();	}
})


let password='';
let ValidPassword='';
$('.RegPassword').blur(function(){
	password=$('.RegPassword').val();
	if(password!= ''){
		$('#RegistrationForm input[type=submit]').attr('disabled', true);
		if(password.length < 8){
			errorText('The minimum password length is 8 characters');
			$('#RegistrationForm input[type=submit]').attr('disabled', true);
			$('#password').css('border','1px solid red');	 
		}else{
			$('#RegistrationForm input[type=submit]').attr('disabled', false);
			$('#password').css('border','1px solid black');
		}
	}else{
		errorText('Enter the password');
		$('#RegistrationForm input[type=submit]').attr('disabled', true);
		$('#password').css('border','1px solid red');	 
	}
	$('#password').css('border','1px solid black');
	ValidPassword='TRUE';
});



$('#RegistrationForm').on('submit', function( event ){
	event.preventDefault();
	if($('input[type="checkbox"]').is(':checked')){
		console.log('OK');
	let login=$('.Reglogin').val();
	let name=$('.RegName').val();
	let password=$('.RegPassword').val();
	let captcha=$('.code').val();
	let email=$('.RegEmail').val();
	let surname=$('.RegSurname').val();
	let valid=ValidMail(email);
	if(valid=='TRUE' && ValidPassword=='TRUE'){
	if($('input[name="code"]')!=''){
 	$.ajax({
 		method: 'POST',
 		url: '../php/registrationusers.php',
	 data:{Reglogin:login,
		RegName: name,
		RegPassword: password,
		code: captcha,
		RegSurname: surname,
		RegEmail: email
	}
	}).done(function(link){
	 if(link=='TRUE'){
		window.top.close();
		$('.Welcome').css('display','block');
			$.ajax({
			method: 'POST',
			url: 'php/categorimg.php',
				data:
				{category: 'all'}
			}).done(function(countf1){
				if(countf1.length!=0){
				arr=countf1.match(/upload\/\w+\S\w+/gi);
				count_img=arr.length;
				add_img(arr, count_img);
				};
			});
 	}else{
		errorText(link);
	}}
	)
	}else{
		$('input[name="code"]').css('background','red');
		errorText('Please fill out the captcha');
	}
	}
	}else{
		errorText('We cannot process your data without your consent');
		}
});

let files;

$('input[type=file]').change(function(){
	files = this.files;
	console.log(files);
});

$('#form_img').on('submit', function( event ){
	event.preventDefault();
	let $that=$(this);
	let data = new FormData($that.get(0));
	let ext = $('#imgfiles').val().split('.')[$('#imgfiles').val().split('.').length-1];
	let availableExt = ['jpeg','jpg','png']; 
	if (availableExt.includes(ext)){
	$.ajax({
		url: 'php/addimg.php',
		type: 'POST',
		data: data,
		cache: false,
		dataType: 'text',
		processData: false,
		contentType: false
});
}
});
});

function errorText(text){
	$('.TextError').text('');
	$('.MessageError').css('display','block');
	$('.TextError').text(text);
	setTimeout(function(){
		$('.MessageError').css('display','none');
	}, 8000);
}

function fun(){
	$('.modal_img').css('display', 'block');
  };

function preload(block, img){
	$(block).append(img);
}


let slideInd = 1;
change(slideInd);

function plusSlides(n) {
	change(	slideInd += n);
}

function currentSlide(n) {
	change(	slideInd = n);
}

function change(n) {
	let img=$('.mySlides');
	let dots = $('.demo');
	if(n>img.length){
		slideInd=1;};
	if(n<0){
		slideInd=img.length-1;};
	img.css('display','none');
	img.filter(':eq('+(slideInd-1)+')').css('display','block');
	dots.removeClass('active');
	dots.filter(':eq('+(slideInd-1)+')').addClass('active');
}

function autotime() {
	slideInd++;
	if(slideInd > $('.mySlides').length) {
		slideInd = 1;
	}			
	change();
}	
let interval = setInterval(autotime, 30000);

$('.prev, .next, .demo').mouseover(function() {
	clearInterval(interval);
});
$('.prev, .next, .demo').mouseout(function() {
	interval = setInterval(autotime, 30000);
});


let arr=[];
let count_img=0;
$('.filtres li').click(function(){
	let category_img=$(this).attr('class');
	if($('.exit').length==1){
	$.ajax({
	method: 'POST',
	url: 'php/categorimg.php',
		data:
		{category: url_img}
	}).done(function(img){
		arr=img.match(/upload\/\w+\S\w+/gi);
		count_img=arr.length;
		add_img(arr, count_img);
	})
}else{
	$.ajax({
		method: 'POST',
		url: '../php/sysimg.php',
			data:
			{category: category_img}
		}).done(function(img){
			arr=img;
			arr=arr.match(/img\S+\.\w{3}/ig);
			count_img=arr.length;
			add_img(arr, count_img);
			arr=[];
			count_img=0;
		})
}
});


function ValidMail(string){
	if(string!=''){
		let pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
		if(string.search(pattern) == 0){
			$('input[type=submit]').attr('disabled', false);
			return 'TRUE';
		}else{
			errorText('Incorrect E-mail address');
			$('input[type=submit]').attr('disabled', true);
		}	
	}else{
		return 'TRUE';
	}
   }

function cancel(el){
	$(el).parent().css('display','none');
}

function add_img(array, count){
	$('.slider img').remove();	
	$('.row img').remove();
		for(let i=count;i>0;i--){
		$('.prev').after('<img src="../'+array[i-1]+'" class="mySlides">');
		}
		for(let i=0;i<count;i++){
		$('.row').append('<img src="../'+array[i]+'" class="demo cursor" onclick="currentSlide('+(i+1)+')">');
	}
	if($('.open').length==1){
	$('.slider img:last').after('<img src="../img/plusbackground.jpg"  title="add photo" onclick="fun()" alt="submit new photo" id="add_img" class="mySlides">');
	}
	change(0);
}

function clicker(){
	let log=$('.Loglogin').val();
	 let pass=$('.LogPass').val();
 	$.ajax({
 		method: 'POST',
 		url: '../php/testereg.php',
 	data: {
 		login: log,
		password: pass,
 	}
 }).done(function(link){
	if(link=='TRUE'){
		location.replace("http://blueasy");
		$('.Welcome').css('display','block');
		$.ajax({
			method: 'POST',
			url: 'php/categorimg.php',
				data:
				{category: 'all'}
			}).done(function(countf1){
				if(countf1.length!=0){
				arr=countf1.match(/upload\/\w+\S\w+/gi);
				count_img=arr.length;
				add_img(arr, count_img);
				};
			});
 }else{
	$('.ContainerError').css('display','block');
	setTimeout(function(){$('.ContainerError').css('display','none');
	}, 8000);
 }
})	
}

