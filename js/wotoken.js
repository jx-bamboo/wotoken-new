
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

function notice(type){
	if(type == 1){
		alert("正在安装，请按Home键在桌面查看");
	}else {
		alert("Installing, please press the Home button to view on the desktop");
	}
}


