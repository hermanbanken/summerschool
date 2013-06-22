$(function(){
	var pieChartData = [
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
	];
	var globalGraphSettings = {animation : true || Modernizr.canvas };
	
	var ctx = document.getElementById("pieChartCanvas").getContext("2d");
	new Chart(ctx).Pie(pieChartData,globalGraphSettings);
	
	var color = "#6c91c4";
	var timeline = document.getElementById("timeline");
	var r = Raphael(timeline, "100%", 100);
	var line = r.path("M5,50H"+(timeline.clientWidth-5)).attr({stroke: color,  "stroke-width": 4, "stroke-linecap": 'round', });
	
	var s = 1, e = 34;
	var events = {
		5: {t:"Eerste\nbijeenkomst"},
		10: {t:"Tweede\nbijeenkomst"},
		15: {t:"Afsluiting"},
		16: {t:"EJW"},
		19: {t:"OWee"},
		33: {t:"Eerste collegedag"},
		
	};
	for(var i = s; i <= e; i++){
		if(i in events){
			var p = (line.getTotalLength()/(e-s)*(i-s));
			var circle = r.circle(p, 50, 4).attr({stroke: color, fill: 'white', "stroke-width": 2});
			circle.hover(function(){
				this.animate({transform: "s1.3"}, 200);
			}, function(){
				this.animate({transform: "s1"}, 200);
			}, circle, circle);
			r.text(p, 10, events[i].t).transform("r-30T20,10");
			r.text(p, 65, i%31);
		}
	}
	
	r.text(25, 65, "Augustus");
	r.text(480, 65, "September");
	
});