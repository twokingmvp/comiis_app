function succeedhandle_forum_fav(a, b, c){
	if(b.indexOf("บันทึกสำเร็จ") >= 0){
		b = 'ติดตามสำเร็จ';
		$('.comiis_forum_fav').attr('href', 'home.php?mod=spacecp&ac=favorite&op=delete&type=forum&formhash='+formhash+'&favid=' + c['favid'] + '&handlekey=forum_fav').text('ติดตามแล้ว').removeClass('bg_a f_f').addClass("bg_b f_d");
	}
	popup.open(b, 'alert');
	upgjlist(c['id']);
}
function errorhandle_forum_fav(a, b){
	if(a.indexOf("บันทึกซ้ำ") >= 0){
		a = 'คุณได้ติดตามแล้ว';
	}else if(a.indexOf("ไม่มีอยู่") >= 0){
		a = 'คุณยังไม่ได้ติดตาม';
	}
	popup.open(a, 'alert');
}
function succeedhandle_favorite_del(a, b, c){
	if(b.indexOf("สำเร็จ") >= 0){
		b = 'ยกเลิกการติดตามแล้ว';
	}
	$('.comiis_forum_fav').attr('href', 'home.php?mod=spacecp&ac=favorite&type=forum&id=' + c['id'] + '&formhash='+formhash+'&handlekey=forum_fav').html('<i class="comiis_font">&#xe610</i>ติดตาม').removeClass('bg_b f_d').addClass("bg_a f_f");
	popup.open(b, 'alert');
	upgjlist(c['id']);
}
function errorhandle_favorite_del(a, b){
	if(a.indexOf("ไม่มีอยู่") >= 0){
		a = 'คุณยังไม่ได้ติดตาม';
	}
	popup.open(a, 'alert');
}
function upgjlist(fid){
	$.ajax({
		type : 'GET',
		url : 'plugin.php?id=comiis_app&comiis=list_gzuser&fid='+fid,
		dataType : 'xml',
	}).success(function(s) {
		$('.comiis_all_txshow_bktop').html(s.lastChild.firstChild.nodeValue);
	});
}


function upzhanlist(tid){
	$.ajax({
		type : 'GET',
		url : 'plugin.php?id=comiis_app&comiis=re_forum_list_zhan&tid='+tid+(typeof is_comiis_wdlist !== "undefined" ? '&is_comiis_wdlist=1' : ''),
		dataType : 'xml',
	}).success(function(s) {
		$('#comiis_wxlist_showbox_'+tid).html(s.lastChild.firstChild.nodeValue);
	});
}
var comiis_recommend_key = 0;
function comiis_recommend_addkey(){
	if($('.comiis_recommend_addkey').length > 0) {
		$('.comiis_recommend_addkey').off('click').on('click', function() {
		if(comiis_recommend_key == 0){
			comiis_recommend_key = 1;
			var comiis_zhankeys = $('.wxlist_bottom_box').length;
			var re_tids = $(this).attr('tid');
			var re_tid = $('.num-all_'+ re_tids);
			var comiis_retidbox = $(this);
			$.ajax({
				type : 'GET',
				url : $(this).attr('href') + '&inajax=1',
				dataType : 'xml',
			})
			.success(function(s) {
				var s = s.lastChild.firstChild.nodeValue;
				if(s.indexOf("คุณได้รีวิวหัวข้อนี้แล้ว") >= 0){
				$.ajax({
					type : 'GET',
					url : 'plugin.php?id=comiis_app&comiis=re_recommend&tid='+re_tids+'&inajax=1',
					dataType : 'xml',
				}).success(function(v) {
					if(comiis_zhankeys){
						upzhanlist(re_tids);
						$('#comiis_zhan_key'+ re_tids).text('ถูกใจ');
					}else{
						var recommend_num = Number(re_tid.text());
						if(recommend_num > 1){
							re_tid.text((recommend_num - Number(allowrecommend)));
						}else{
							re_tid.text('');
						}
					}
					comiis_retidbox.removeClass('f_wb');
					$('#comiis_listzhan_' + re_tids + ' i').html('&#xe63b;');
					popup.open('ยกเลิกการกดถูกใจแล้ว', 'alert');					
				});
				}else if(s.indexOf("คุณไม่สามารถรีวิวโพสต์ของตัวเองได้") >= 0){
					popup.open('ไม่สามารถกดถูกใจโพสต์ของตัวเองได้', 'alert');
				}else if(s.indexOf("โอกาสรีวิววันนี้ถูกใช้หมดแล้ว") >= 0){
					popup.open('โอกาสกดถูกใจของวันนี้ถูกใช้หมดแล้ว', 'alert');
				}else if(s.indexOf("'recommendv':'+" + allowrecommend + "'") >= 0){
					var b = [], r;
					r = s.match(/\'recommendc\':\'(.*?)\'/);
					if(r != null){
						b['recommendc'] = r[1];
					}else{
						b['recommendc'] = 0;
					}
					r = s.match(/\'daycount\':\'(.*?)\'/);
					if(r != null){
						b['daycount'] = r[1];
					}else{
						b['daycount'] = 0;
					}
					if(comiis_zhankeys){
						upzhanlist(re_tids);
						$('#comiis_zhan_key'+ re_tids).text('ยกเลิก');
					}else{
						re_tid.text(Number(re_tid.text()) + Number(allowrecommend));
					}
					comiis_retidbox.addClass('f_wb');
					$('#comiis_listzhan_' + re_tids + ' i').html('&#xe654;');
					popup.open('กดถูกใจสำเร็จ' + (b['daycount'] ? ', วันนี้คุณยังสามารถกดถูกใจได้ ' + (b['daycount'] - 1) + ' ครั้ง' : ''), 'alert');					
				}else if(s.indexOf("window.location.href = 'member.php?mod=logging&action=login&mobile=2'") >= 0){
					window.location.href = 'member.php?mod=logging&action=login&mobile=2';
				}else{
					popup.open('ไม่มีสิทธิ์กดถูกใจ', 'alert');
				}
				setTimeout(function() {
					comiis_recommend_key = 0;
				}, 500);
			});
			}
			return false;
		});
	}
}