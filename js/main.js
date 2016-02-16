jQuery(function($){
//スクロール値確認用の箱つくる
$('.container').prepend('<p id="vb"><span id="v">スクロール値</span>px</p>');
$('#vb').css({position:'fixed',top:40,right:60,fontSize:'2rem',color:'red'});

//上へ戻る箱作って隠す


//スクロールきっかけの世界
$(window).scroll(function(){
	var sval=$('html,body').scrollTop();
	$('#v').text(sval);	//スクロール値確認表示
	
	
	
	
	
});

	

});