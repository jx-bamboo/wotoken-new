
function toggle_lang(){
	$(".other-lang").toggle(500);
}

window.onresize = function(){
	fun.getWH();
	alert(height);
}

var fun = (function(f){
	f.getWH = function(){
			var width = $(window).width();
			var height = $(window).height();
	}
	
	return f;
	
})(window.fun || {});


