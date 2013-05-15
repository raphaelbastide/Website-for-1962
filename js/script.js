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
	jsPlumb.connect({ source:"v0_8_1", target:"v0_8_2", anchors: connectR});
}

jsPlumb.bind("ready", function() {
	drawtree();
});

// Text boxes
$('#textboxes').hide();
$('nav button').click(function(e){
	e.preventDefault();
	var opener = $(this),
	oclass = opener.attr('class');
	pid = $('#' + oclass);
	$('body').toggleClass(oclass);
	pid.toggle();
});

// Uses jQuery.fracs
var $window = $(window);
$window.resize($.throttle(10, function(){
	var wh = $window.height();
  jsPlumb.repaintEverything();
	$('#textboxes').css('height', wh);
	$('header').css('height', wh);
})).resize();  

$("#view").fracs("outline", {
	crop: true,
	viewportStyle: {
		fillStyle: 'rgba(249,250,255,0.3)'
		// strokeWidth: 10,
		// strokeStyle: 'black'
	},
	viewportDragStyle: {
		fillStyle: 'rgba(249,250,255,0.5)'
	},
	styles: [
		{
			selector: '.vbox',
			fillStyle: 'rgba(0,0,0,0.3)'
		},
		// {
		// 	selector: '._jsPlumb_connector ',
		// 	fillStyle: 'rgb(0,0,0)'
		// },
		{
			selector: '.textbox',
			fillStyle: 'rgb(290,290,290)'
		}
	]
});

