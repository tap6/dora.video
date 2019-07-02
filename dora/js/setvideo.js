	function setVideo(obj)
	{
		var video_URL=obj.value;
		
		var filename=video_URL.substring(video_URL.lastIndexOf('/')+1,video_URL.length);//getBasename
		document.getElementById("ti").innerHTML=filename;
		
		var x = document.getElementById("myVideo");
		x.setAttribute("src", video_URL);
		
		
		/*switch(video_index)
		{
			case 560:
				x.setAttribute("src", "src_dora/[新番多啦A夢][560][20190517][720P] 管教糖果  人情味調料.mp4");
				break;
			case 561:
				x.setAttribute("src", "src_dora/[新番多啦A夢][561][20190531][720P] 蹦床瓶  肥皂泡宅急送.mp4");
				break;
			case 562:
				x.setAttribute("src", "src_dora/[新番多啦A夢][562][20190607][720P] 拯救尼安德特人  大雄偶爾也會思考！？.mp4");
				break;
			case 563:
				x.setAttribute("src", "src_dora/[新番多啦A夢][563][20190614][1080P] 巨星胖虎！？  恐怖的晚餐秀.mp4");
				break;
			case 564:
				x.setAttribute("src", "src_dora/[新番多啦A夢][564][20190621][1080P] 瓦鬼  許願麥秸.mp4");
				break;
		}*/
		
	}

/*
//getBasename
var t="C:\\www\serweb\\src_dora\\哆啦A梦新番";
var final=t.substring(t.lastIndexOf('\\')+1,t.length);
document.write(final+ "<br />");
*/