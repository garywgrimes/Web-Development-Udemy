var clickedTime;
	var createdTime;
	var reactionTime;

		function generate(){
			var ran = Math.random();
			ran=ran*2;
			ran= Math.floor(ran);
			return ran;
		}

		function getRandomColor(){
		var letters = '0123456789ABCDEF'.split('');
		var color = '#';
		for(var i=0; i<6; i++){
		color+=letters[Math.round(Math.random()*15)];
		}
		return color;
		}
			function hideAndSeek(){
				setTimeout(function(){
							var v= generate();
							if(v==1){
								document.getElementById("box").style.borderRadius="0";
							}
							else{
								document.getElementById("box").style.borderRadius="100px";
							}
							var top =Math.random();
							top*=300;
							var left =Math.random();
							left*=500;
								document.getElementById("box").style.top = top+"px";
								document.getElementById("box").style.left = left + "px";

								document.getElementById("box").style.backgroundColor=getRandomColor();
								document.getElementById("box").style.display= "block";
								createdTime= Date.now();
						},3000);				
			}

		document.getElementById("box").onclick=function(){
			clickedTime= Date.now();
			reactionTime = (clickedTime-createdTime)/1000;
			document.getElementById("time").innerHTML = reactionTime;
			document.getElementById("box").style.display="none";
			hideAndSeek();
		}

	hideAndSeek();