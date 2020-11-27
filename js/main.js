jQuery(document).ready(function($){
	const $div = $('#subsection-four-items div');
	console.log( $div == null );
	if($div.is('div')) $divTop = $div.offset().top;
	$span = $div.find('h3').find('span');
	const $nav = $("#masthead");
	let scrollBundle = true;
	let scrollH;
	
	$('html').animate({'scrollTop': 0}, 200);

	$('nav>ul li:last-child').hover(function(){
		$(this).parent().css('border-right', '1px solid transparent');
	}, function(){
		$(this).parent().css('border-right', '1px solid #E8C547');
	});

	$('nav>ul li:first-child').hover(function(){
		$(this).parent().css('border-left', '1px solid transparent');
	}, function(){
		$(this).parent().css('border-left', '1px solid #E8C547');
	});


	if($div.is('div')) { $(window).on('scroll.animate', function(){
		
	   if( $divTop && $(window).scrollTop() >  $divTop - 600){

		     (function(){   
		
			   $div.eq(0).animate({
					'left': 0,
					'opacity': 1
				}, 200);
				 $div.eq(1).animate({
					'left': 0,
					'opacity': 1
				}, 300);
				 $div.eq(2).animate({
					'left': 0,
					'opacity': 1
				}, 200);
				 $div.eq(3).animate({
					'left': 0,
					'opacity': 1
				}, 300); 

				$('.principlesProf').addClass('spanRotate');
				})();
				$(window).off('scroll.animate');
				
			};
		 });
		}

	$(window).on('scroll.menu', function(){
		if( $(window).scrollTop() > 220 && $("#masthead").hasClass("fadein1") == false){
			//$('#masthead').hide();
			  $('#masthead').addClass('fadein1');
			  //$('#masthead').removeClass('fadein2');
			  $('#masthead').fadeIn(1000);
			  $('#mobile-primary-menu').css('top', '80px');
			  $('#mobile-primary-menu a').css('line-height', '3');
		  }else if($(window).scrollTop() < 180 && $("#masthead").hasClass("fadein1") == true){
			$('#masthead').removeClass('fadein1');
			//$('#masthead').addClass('fadein2');
			//$('#masthead').fadeIn(1000);
			$('#masthead').show();
		  };
		})
	
	// $(window).on('scroll.bundle', function(e){
	// 	if ($(window).width() > 1200) {
	// 		scrollH = 200;
	// 	}else{
	// 		scrollH = 450;
	// 	}
	// 	if($('#post-2').length) {
	// 		if( scrollBundle == true && $(window).scrollTop() >  ($('#post-2').offset().top + scrollH)){
	// 			//$('.bundle-services').slideDown(400);
	// 			//$('.bundle-services').animate({marginTop: '0', opacity: 1 }, 600);
	// 			//$('.bundle-services').css({marginTop: '0', opacity: ( ($(window).scrollTop() - ($('#sect-cards').offset().top - 240))/120) });
	// 			$('.bundle-services').css({marginTop: '30px', opacity: '1', transition: 'all 1s'});
	// 			$('.profess-services').css({marginTop: '-50px', opacity: '0', transition: 'all 0.3s', height: '0'});
	// 			//$('#intermediateone').animate({visibility: 'hidden' });
	// 			$('#intermediateone').animate({top: 340, visibility: 'hidden' }, 500);
	// 			$('#intermediateone').css({backgroundColor: 'rgba(0,0,0,0.4)'});
	// 			scrollBundle = false;
	// 		}else if (scrollBundle == false && $(window).scrollTop() <=   ($('#post-2').offset().top + scrollH )){
	// 			$('.bundle-services').css({marginTop: '-150px', opacity: '0', transition: 'all 0.3s'});
	// 			$('.profess-services').css({marginTop: '0', opacity: '1', transition: 'all 0.4s', height: '250'});
	// 			$('#intermediateone').animate({top: 30, visibility: 'visible'}, 500);
	// 			//$('#intermediatetwo').css({visibility: 'hidden' });
	// 			$('#intermediateone').css({backgroundColor: '#ffc107'});
	// 			scrollBundle = true;
	// 		};
	// 	}	
	// })

	$('.nav-previous a').prepend('<span> << &nbsp; </span>');
	$('.nav-next a').append('<span> &nbsp; >> </span>');
	$('.nav-previous').on('mouseenter', function(){
		$(this).find('span').addClass('arrow-move');
	})
	$('.nav-previous').on('mouseleave', function(){
		$(this).find('span').removeClass('arrow-move');
	})

	$('.nav-next').on('mouseenter', function(){
		$(this).find('span').addClass('arrow-move');
	})
	$('.nav-next').on('mouseleave', function(){
		$(this).find('span').removeClass('arrow-move');
	})
	
	$('.menu-toggle').on('click', () => {
		$('#mobile-nav-wrap').css('display','block');
		$('#mobile-primary-menu').toggleClass('hidden shown');
	});
	$(window).on('resize', () => {
		if ($(window).width() > 599) {
			$('#mobile-primary-menu').removeClass('shown');
		}
	});

	$(window).on('load', () => setTimeout( function () {
		$('ul#primary-menu').css({overflow: 'visible'});
		$('.main-navigation').css({overflow: 'visible'});
		$('#masthead').css({overflow: 'visible'});
	}, 2000) );

	$('form.wpcf7-form').one('submit',
	(e) => {
		//alert(trim($('.wpcf7-validates-as-required').eq(0).val()));
			 if( $('.wpcf7-validates-as-required').eq(0).val().trim() === "" ) {
				//alert('Gicu');
				e.preventDefault();
				$('#modal-popup').modal('show');
			// 	$(this).submit();
				console.log($('.wpcf7-validates-as-required').eq(1).val());
			 }
		}
	);   

	$('form#reviewMain').one('submit',
	(e) => {
		//alert(trim($('.wpcf7-validates-as-required').eq(0).val()));
			 if( $('input#postId').val() === "" || $('input[type="text"]').val() || $('textarea').val() ) {
				//alert('Gicu');
				e.preventDefault();
				$('#modal-popup').modal('show');
			// 	$(this).submit();
				//console.log($('.wpcf7-validates-as-required').eq(1).val());
			 }
		}
	);   

	// $('.menu li').on('hover', () => {
	// 		$('.menu').css({overflow: 'visible'});
	// 		$('.main-navigation').css({overflow: 'visible'});
	// });

	$('span.button').on('click', () => {
		//este butonul de pe prima pagina (Share experience) care redirectioneaza spre reviews
		$(location).attr('href', main_vars.base + "/reviews"); //variabila trimisa din functions prin wp_localize_script
	});

	$('#services-select').on("change", function(e) {
		$(location).attr('href', e.target.value);
	});

	(function(){

		$('#star-1').on('click', function(){
			$('.fa-star').not('.yellowStar').css('color','black'); // merg ambele si .not() si :not; yellowStar este o clasa care se ataseaza acelor review care au fost colectate din baza de date (si salvate anterior)...ele nu trebuie sa fie afectate de acest click
			$(this).css('color','yellow');
			i = 1;
			sendStar(i);
		});
		
		$('#star-2').on('click', function(){
			$('.fa-star:not(".yellowStar")').css('color','black'); // merg ambele si .not() si :not; yellowStar este o clasa care se ataseaza acelor review care au fost colectate din baza de date (si salvate anterior)...ele nu trebuie sa fie afectate de acest click
			$("#star-1, #star-2").css('color','yellow');
			i = 2;
			sendStar(i);
		});
		
		$('#star-3').on('click', function(){
			$('.fa-star').not('.yellowStar').css('color','black'); // merg ambele si .not() si :not; yellowStar este o clasa care se ataseaza acelor review care au fost colectate din baza de date (si salvate anterior)...ele nu trebuie sa fie afectate de acest click
			$("#star-1, #star-2, #star-3").css('color','yellow');
			i = 3;
			sendStar(i);
		});
		
		$('#star-4').on('click', function(){
			// yellowStar este o clasa care se ataseaza acelor review care au fost colectate din baza de date (si salvate 
			//anterior)...ele nu trebuie sa fie afectate de acest click
			$('.fa-star:not(".yellowStar")').css('color','black');   // merg ambele si .not() si :not;
			$("#star-1, #star-2, #star-3, #star-4").css('color','yellow');
			i = 4;
			sendStar(i);
		});
		
		$('#star-5').on('click', function(){
			$('.fa-star').not('.yellowStar').css('color','black'); // merg ambele si .not() si :not
			$("#star-1, #star-2, #star-3, #star-4, #star-5").css('color','yellow');
			i = 5;
			sendStar(i);
		});
		
		
		function sendStar(i){
			$('#postId').attr('value',i);
		}

		//------ Beginning Stars


		var getButton = document.getElementById('getButton');
		var resultSection = document.getElementById('resultSection');
		var formReview = document.getElementById("reviewMain");
		if(getButton){
				getButton.addEventListener("click", function(){
						var request = new XMLHttpRequest();
						/* request.open('GET','http://localhost/Dani/wordpress/wp-json/wp/v2/review');
						 request.onload = function(){
							  if(request.status >=200  && request.status < 400){
										 var data = JSON.parse(request.responseText);
										 createHTML(data);
										 getButton.remove();
								}else{
									 var data = "Multiple Errors";
								}
						} */

					//	request.open('GET','http://localhost/Dani/wordpress/wp
					request.open("GET", main_vars.base + "/wp-json/reviewnamespace/v1/notion");
					request.onload = function(){
							if(request.status >= 200 && request.status < 400){
								var data = JSON.parse(request.responseText);
						        var j = 0;
									for(var i = 0;i<data.reviewPosts.length;i++){
									j = data.reviewPosts[i][2];
									resultSection.className = "reviews container";
									resultSection.innerHTML +=  `<br/><i> &nbsp; &nbsp;&nbsp; <u> ` + data.reviewPosts[i][0] + `</u></i></h5><br/>`;
									resultSection.innerHTML += `<i class="fa fa-star ${(j>0)?'yellowStar':''}"></i><i class="fa fa-star ${(j>1)?'yellowStar':''}"></i><i class="fa fa-star ${(j>2)?'yellowStar':''}"></i><i class="fa fa-star ${(j>3)?'yellowStar':''}"></i><i class="fa fa-star ${(j>4)?'yellowStar':''}"></i><br>`;
									resultSection.innerHTML +=  `<span>` + data.reviewPosts[i][1] + `</span> <br/>`;
									  j = 0;
									}
									resultSection.innerHTML += "</div><br/><br/>";  //here the div container is closed
									document.getElementById('content').style.height = 'auto';
									if ( document.getElementsByClassName('h3-review')[0]) document.getElementsByClassName('h3-review')[0].remove();
									document.getElementById('reviewsPara').childNodes[1].innerHTML = "<h3>Clients' reviews</h3>";
									//document.getElementById('reviewsPara').childNodes[1].childNodes[0].textContent = "Client's reviews";
									
									if(resultSection.textContent.trim() === ""){
										resultSection.innerHTML = "<br/> <span id='noResultsSpan'> There are no previous reviews </span> <br/><br/><br/>";
										document.getElementsByClassName('h3-review')[0].remove();
									}
								//alert(typeof(data));
								//alert(data.length);
								//createHTML(data);
								getButton.remove();
							}
						}
					request.send();
				});
				
				$.ajax(
				   
				);
		}

				function createHTML(postsData){
					 var ourHTMLstring = "";
					 //resultSection.innerHTML = postsData.name.length;
					// for(var i=0; i<postsData.length; i++) {
						 for (var infoData in postsData) {
							resultSection.innerHTML += infoData.isArray() + "<br/>";
						//ourHTMLstring += '<br/><h4> &nbsp; &nbsp;&nbsp; <u>' + postsData[i].title.rendered + '</u></h4>';
						//ourHTMLstring += postsData[i].content.rendered;
						   /* for (var i=0; i<infoData.length;i++){
							ourHTMLstring += '<br/><h4> &nbsp; &nbsp;&nbsp; <u>' + infoData.name + '</u></h4>';
							ourHTMLstring +=infoData.content;
						  } */
					 }

					//resultSection.innerHTML = ourHTMLstring;
					//resultSection.innerHTML = infoData.name[0];
				}
	// Adding a review
	/* var addReview = document.querySelector('#addButton');

	if(addReview){
		addReview.addEventListener('click',function(){
			var theReview = {
				"title" : document.querySelector('#reviewsMain [name="title"]').value,
				"content" : document.querySelector('#reviewsMain [name="content"]').value,
				"status": "publish"
			};
			var createPost = new XMLHttpRequest();
			createPost.open('POST', "http://localhost/Dani/wordpress/wp-json/wp/v2/review");
			createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce);
			createPost.setRequestHeader("Content-Type","application/json;charset=UTF-8");
			createPost.send(JSON.stringify(theReview));
			createPost.onreadystatechange = function(){
				if(createPost.readyState == 4){
					if(createPost.status == 201){
						document.querySelector('#reviewsMain [name="title"]').value = "";
						document.querySelector('#reviewsMain [name="content"]').value = "";
					} else {
						alert('Error - please try again');
					}
				}
			}
		});
	} */
	
	// if(formReview){
	//       formReview.addEventListener('submit', function(e){
	//         if(formReview.title.value.trim() === "" || formReview.content.value.trim() === "" || formReview.postId.getAttribute("value") === ""){
	//             e.preventDefault();
	//             alert("Please rate and fill all fields");
	//         }
	//     });
	//   }



		//------ End Stars

		//$('#ul-text-slider:li').animate({marginLeft: '+2000px'}, 500);
		if($('#post-2').length == 0) return false;
		var acest = (function(){
			var i = 0;
			return function () {
			i++;
			if(i>4) { i=0; $(".text-slider").eq(i).css({marginLeft: "3000px"}); }
			//console.log(i);
				$(".text-slider").eq(i-1).animate({marginLeft: "-3000px"}, 4000);
				//$(".text-slider").eq(i).animate({marginLeft: "0"}, 2000);
				$(".text-slider").eq(i).animate({marginLeft: "-20px"}, 2000);  //ca sa se centreze mai bine
				$(".text-slider").eq(i+1).css({marginLeft: "3000px"});
			};
		})();
		setInterval( function () {
			acest();
		}, 4000);

	})()
    });