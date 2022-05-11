

$(".contact").on("click",function(){
	$(".contact-form").toggleClass("active");
});
$(".contact-form input[type=submit], .contact-form .close").on("click",function(e){
	e.preventDefault();
	$(".contact-form").toggleClass("active")
});