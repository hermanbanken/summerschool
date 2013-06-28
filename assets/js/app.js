$(function(){
	var timeline = document.getElementById("timeline"),
			pieChart = document.getElementById("pieChartCanvas"),
			pieChartData = [
			{
				value: 40,
				color:"#70a670",
				label: "Gehaald"
			},
			{
				value : 60,
				color:"#ff7f66",
				label : "Gefaald"
			}
			],
			globalGraphSettings = {animation : true || Modernizr.canvas };

	if(pieChart){
		new Chart(pieChart.getContext("2d")).Pie(pieChartData,globalGraphSettings);
	}
	
	function hoverState(circle, text, set){
		var originalTransform = text.attr('transform');
		return [
			function(){
				circle.animate({transform: "s1.3"}, 200);
				text.animate({fill: color, transform: originalTransform+"r30"}, 200);
			}, function(){
				circle.animate({transform: "s1"}, 200);
				text.animate({fill: "black", transform: originalTransform}, 200);
			}
		];
	}
	
	if(timeline){
		var color = "#6c91c4";
		var r = Raphael(timeline, "100%", 100);
		var line = r.path("M5,50H"+(timeline.clientWidth-5)).attr({stroke: color,  "stroke-width": 4, "stroke-linecap": 'round', });
	
		var s = 1, e = 35;
		var events = {
			5: {t:"Eerste\nbijeenkomst"},
			9: {t:"Tweede\nbijeenkomst"},
			13: {t:"Derde\nbijeenkomst"},
			15: {t:"EOW", w:4, h:"//etv.tudelft.nl"},
			16: {t:"EJW", w:3, h:"//eerstejaarsweekend.nl"},
			19: {t:"OWee", w:4, h:"//owee.nl"},
			33: {t:"Eerste\ncollegedag"},
		};

	
		for(var i = s; i <= e; i++){
			if(i in events){
				var set,
						p = (line.getTotalLength()/(e-s)*(i-s)),
						w = events[i].w ? line.getTotalLength()/(e-s)*events[i].w : 1;
		
				r.setStart();
		
				// Circle and text
				var circle = w > 1 ? r.rect(p-4, 50-4, w, 8, 4) : r.circle(p, 50, 4);
				circle.attr({stroke: color, fill: 'white', "stroke-width": 2});
				var text = r.text(p + (w > 1 ? w/2 : 0), 10, events[i].t);
				text.transform(
					"r-30T"+ (events[i].t.length > 7 ? "10,10": "0,20") + 
					(i==15 ? 'T-15,0' : '')
				);
			
				// Animate
				//var hs = hoverState(circle, text, set);
				(set = r.setFinish()).hover.apply(set, hoverState(circle, text, set));
				if(events[i].h) set.attr({href:events[i].h,target:"blank"});
			
				// Day of month
				r.text(p, 65, i%31);
			}
		}
	
		r.text(25, 65, "Augustus");
		r.text(460, 65, "September");
	}
	
	$(".exam .row").each(function(){
		var l = $(this).find(".span");
		l.addClass("span"+Math.floor(12/l.size()));
	});
});