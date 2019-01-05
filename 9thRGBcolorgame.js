window.setTimeout(function() {
	var numsquares=6;
	var value=600;
	var colors=[];
	var pickedcolor;
	var messagedisplay=document.querySelector("#message");
	var score=document.querySelector("#score");
	var total=document.querySelector("#total");
	var squares=document.querySelectorAll(".square");
	var h1=document.querySelector("h1");
	var resetbutton=document.querySelector("#reset");
	var modebuttons=document.querySelectorAll(".mode");
	var error=document.querySelector(".try_again");
	var modevalue;
	var toal_score=0;
	init();
	function init()
	{
		setupmodebuttons();
		setupsquares();
		reset();
	}
	function setupmodebuttons()
	{
		for(var i=0;i<modebuttons.length;i++){
			console.log(modevalue+ "+"+ modebuttons[i]);
			modebuttons[i].addEventListener("click",function(){
				modevalue=modebuttons[i];
				modebuttons[0].classList.remove("selected");
				modebuttons[1].classList.remove("selected");
				this.classList.add("selected");
				if(this.textContent==="Easy")
					{
						value=300;
						numsquares=3;
					}
				else
					{
						value=600;
						 console.log(value);
						numsquares=6;
					}
				resetbutton.textContent="new colours";
				reset();
			});
		}
	}
	function setupsquares()
	{
		var total_score=0;
		var error_value=5;
		for(var i=0;i<squares.length;i++)
			{
				squares[i].addEventListener("click",function(){
				document.querySelector("h1").style.backgroundColor="steelblue";
				var clickcolor=this.style.backgroundColor;
				if(pickedcolor==clickcolor){
					messagedisplay.textContent="Correct!!";
					
					changecolors(pickedcolor);
					h1.style.backgroundColor=pickedcolor;
					console.log(modebuttons);
					score.textContent=value;
					total_score+=value;
					total.textContent=total_score;

					var q=Math.floor(Math.random()*255);
					console.log(q);
					if(q>0||q<27){
						alert("Congrats your guess turned out to be right");
					}
					
					
					resetbutton.textContent="Play Again!";
					value=600;
					
				}
				else{
					this.style.backgroundColor="#232323";
					messagedisplay.textContent="InCorrect, Try again";
					error_value-=1;
					error.textContent=error_value;
					if(error_value===0)
					{
						alert("YOUR SCORE:"+total_score);
						alert("No of tries exxhausted, click Play Again")
						resetbutton.textContent="Play Again!";
						error.textContent=5;
						error_value=5;
						total.textContent=0;
						modebuttons.disabled=true;



					}
					value-=100;
				}
				});
			} 
	}
	function reset(){
		var colors=generaterandomcolors(numsquares);
		score.textContent="0";
	    pickedcolor=colors[pickcolor()];
		colordisplay.textContent=pickedcolor;
		resetbutton.textContent="new colours";
		messagedisplay.textContent="";
		for(var i=0;i<squares.length;i++)
		{
			squares[i].style.display="block";
			if(colors[i])
			{
				squares[i].style.backgroundColor=colors[i];
				console.log(colors[i]);
			}
			else
			{
				squares[i].style.display="none";
			}
		}
		h1.style.backgroundColor="steelblue";
	}
    resetbutton.addEventListener("click",function(){
		reset();
	});
	function changecolors(color)
	{
		for(var i=0;i<squares.length;i++)
		{
			squares[i].style.backgroundColor=pickedcolor;
		}
	}
	function pickcolor()
	{
		var a=Math.floor(Math.random()*numsquares);
		console.log(numsquares);
		return a;
	}
	function generaterandomcolors(num)
	{
		var arr=[];
		for (var i=0;i<num;i++)
		{
			arr.push(randomcolor());
		}

		return arr;
	}
	function randomcolor()
	{
		var r=Math.floor(Math.random()*255);
		var g=Math.floor(Math.random()*255);
		var b=Math.floor(Math.random()*255);
		return "rgb("+r+", "+g+", "+b+")";
	}
	var how_to=document.querySelector("#how");
	how_to.addEventListener(click,function(){
		alert("1.Select the coloured square which u think is the picked colour\n2.for every wrong guess clicked square will disappear with decrementing no of tries\n3.Max score for Easy:300 & Hard:600");
	});





},500);

