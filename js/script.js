var $window = $(window),
    connectR = [[ 1, 0.3, 0.5, 0 ], [ 0, 0.5, 0.5, 0 ]],
    vbox = $('.vbox');

// Fixes a variable height issue
vbox.each(function(){
  var $this = $(this);
  var height = $this.height();
  $this.css('height', height);
})

function drawtree() {
	jsPlumb.importDefaults({
		PaintStyle:{ lineWidth:4, strokeStyle:"#000"},
		Endpoint:[ "Rectangle", { width:12, height:12, fillStyle:"#000" } ],
		//Endpoint:[ "Dot", { radius:7, fillStyle:"#000" } ],
		EndpointStyle:{ fillStyle:"#000" },
		Connector : "Straight",
		Anchors : ["TopCenter", "BottomCenter"]
	});
	
	jsPlumb.connect({ source:"v0_1", target:"v0_2",});
	jsPlumb.connect({ source:"v0_2", target:"v0_3"});
	jsPlumb.connect({ source:"v0_3", target:"v0_4"});
	jsPlumb.connect({ source:"v0_4", target:"v0_5"});
	jsPlumb.connect({ source:"v0_5", target:"v0_6"});
	jsPlumb.connect({ source:"v0_6", target:"v0_7"});
	jsPlumb.connect({ source:"v0_7", target:"v0_7_b", anchors: connectR});
	jsPlumb.connect({ source:"v0_7", target:"v0_8"});
	jsPlumb.connect({ source:"v0_8", target:"v0_8_1"});
	jsPlumb.connect({ source:"v0_8_1", target:"v0_8_1_c", anchors: connectR});
	jsPlumb.connect({ source:"v0_8_1", target:"v0_9",});
	jsPlumb.connect({ source:"v0_9", target:"v0_9_2",});
	jsPlumb.connect({ source:"v0_9_2", target:"v0_9_3",});
	// jsPlumb.connect({ source:"v0_9", target:"v0_9_i", anchors: connectR});
}

jsPlumb.bind("ready", function() {
	drawtree();
});

// Text boxes
$('nav button').click(function(e){
	e.preventDefault();
	var opener = $(this),
	oclass = opener.attr('class');
	pid = $('#' + oclass);
	$('body').toggleClass(oclass);
	pid.toggle();
});

// Images
var bigImg = $('<div class="olive-large" />'),
	imgFrame;

$('.vbox img').click(function(e){
    $this = $(this);
	if (imgFrame) {
		imgFrame.css('z-index', '1');
	}
	imgFrame = $('.frame');
	imgFrame.css('z-index', '6');
	bigImg.appendTo(imgFrame);
	bigImg.html('<img width="auto" height="auto" alt="'+ this.alt +'" title="'+ this.title +'" src="'+ this.src +'" />');
	bigImg.show();
	$window.resize();
});
bigImg.click(function(){
	bigImg.hide();
});


// Uses jQuery.fracs
$window.resize($.throttle(10, function(){
	var wh = $window.height();
  jsPlumb.repaintEverything();
	$('#textboxes').css('height', wh);
	$('header').css('height', wh);
	$('.olive-large img').css('height', wh)
})).resize();  

$("#view").fracs("outline", {
	crop: true,
	invertViewport: true,
	diagonal: false,
	viewportStyle: {
		fillStyle: 'rgba(221,224,227,.8)'
	},
	viewportDragStyle: {
		fillStyle: 'rgba(221,224,227,0.8)'
	},
	styles: [
		{
			selector: '.vbox',
			fillStyle: 'rgba(0,0,0,0.8)',
		},
		{
			selector: '._jsPlumb_connector',
			fillStyle: 'rgba(0,0,0,0)',
		}
	]
});

