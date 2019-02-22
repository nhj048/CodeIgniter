// linksys.js

$(function(){
	$(".saListBox").click(function(e) {
		$(this).css({cursor:"pointer"});
		url = "/www/CodeIgniter/search/detail";
		window.open(url, '', 'width='+sw+',height='+sh+',top=0 ,left='+ml+',resizable=no, scrollbar=yes');
	
	});

	$(".ca-document-link").click(function(e) {
		e.preventDefault();
		url = "../mvp_php/ca_view2.php?pno=1";
		window.open(url, '', 'width='+sw+',height='+sh+',top=0 ,left='+ml+',resizable=no, scrollbar=yes');
	});

});// jQB //