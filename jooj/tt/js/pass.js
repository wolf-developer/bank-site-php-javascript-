$("#submitbutton").click(function(){
 	
});
$("#password").click(function(){
	$(".span-placeholder").addClass("span-placeholder-eff");
	$(".warning-section").addClass("pass-warning");
    $(".warning-section").removeClass("pass-warning-show");
    $(".span-placeholder").css("color", "black");
    $(".form-pass").css("border-bottom", "1px solid black");
});

$("#password").focusout(function(){
    if($("#password").val()==""){
		$(".span-placeholder").removeClass("span-placeholder-eff");
		$(".span-placeholder").addClass("span-placeholder-eff-remove");
	}
});
$(".pass-eye").click(function(){
	var hide = $(".eye-img").hasClass("eye-img-show");
	var show = $(".eye-img").hasClass("eye-img-hide");
	var input = $("#password");
	if (hide) {
		$(".eye-img").removeClass("eye-img-show");
		$(".eye-img").addClass("eye-img-hide");
		input.attr({type:"password"});
	}
	if (show) {
		$(".eye-img").removeClass("eye-img-hide");
		$(".eye-img").addClass("eye-img-show");
		input.attr({type:"text"});
	}
});
// $(".eui-form").submit(function(){
// 	return $('.eui-form').jqxValidator('validate');
// });
$('.eui-form').on('submit', function() {

	return $('eui-form').jqxValidator('validate');
});