$(function(){
	$(window).scroll( function() {
		var value = $(this).scrollTop();
		if ( value > 70 )
			$("#menu").addClass('fixed');
		else
			$("#menu").removeClass('fixed');
	});

	/*	
		If images should be loaded on click on the "Archives" buttom, make sure to make the following changes:
		*	In index.php: The img tag should also be changed in and must use "dara-src" tag instead of "src".
		*	In main.css: #archives #inner{display:none;} must be uncommented
		*	In this file: the following block must be uncommented
	*/
	/*	
	function openSection(section, callback) {
		section.children('#inner').show();
		var sImg = section.children('#inner').children('.imgbox').children('img');
		sImg.each(function(){
			var $this = $(this),
				imgDataSrc = $this.attr('data-src');
			$this.attr('src',imgDataSrc);
		});
	}
	
	$.history.init(function(hash){
		if(hash !== "") {
			openSection($('#' + hash));
		}
	},
	{ unescape: ",/" });
	
	$('#menu a#archives-link').click(function(e){
		//e.preventDefault();
		var curHash = $(this).attr('href').slice(1);
		$.history.load(curHash);
	});
	*/
});
