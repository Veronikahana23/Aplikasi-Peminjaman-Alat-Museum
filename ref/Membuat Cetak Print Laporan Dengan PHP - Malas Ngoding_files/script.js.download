$(document).ready(function(){
    window.fbAsyncInit = function() {
            FB.init({
                appId      : '986519541536910',
                status     : true, 
                cookie     : true, 
                xfbml      : true,
                version : 'v2.11'
            });
        };
        (function(d){
            var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            d.getElementsByTagName('head')[0].appendChild(js);
        }(document));


        $("body").on("click",".btn-share-fb",function(){
            var linkd =  $(this).parent().attr('id');
            var myLink = window.location.href;
            var myName = "malasngoding";
            FB.ui({
                method: 'share',
                href: myLink,
                name: myName
            }, function(response) {
                if (response && !response.error_code){
                    alert("Terimakasih! Silahkan download.");
                    $(".box-share-social").after("<a target='_blank' class='btn-download' href='"+linkd+"'>DOWNLOAD</a>");
                    $(".box-share-social").hide();

                } else {
                    alert("Gagal membagikan halaman. silahkan hubungi admin untuk download.");
                }
            });
        });
        
      $(".box-share-social").append("<p>SILAHKAN SHARE UNTUK MENGAKTIFKAN TOMBOL DOWNLOAD !</p> <button class='btn-share-fb button--primary'>SHARE</button> ");
       
        
});

$(function(){	
	$(".typed").typed({			
		strings: ["web programming.","web design.", "mobile app.","wordpress.","database."],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 70,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 700,
		// loop
		loop: true,
		// false = infinite		
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {},
	});
});
