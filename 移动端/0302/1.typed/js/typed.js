typed = function(){
	var hdThis = this;
	//字母种子
	hdThis.hdSeed = ['a','b','c','d','e','f','g','h'];
	//获得字母
	hdThis.hdGetLetter = function(){
		return {
			x:hdThis.hdGetPos().x,
			y:hdThis.hdGetPos().y,
			font:hdThis.hdGetFont(),
			size:30
		}
	}
	//获得随机字母
	hdThis.hdGetFont = function(){
		var index = Math.floor(Math.random() * hdThis.hdSeed.length);
		return hdThis.hdSeed[index];
	}
	
	//获得坐标
	hdThis.hdGetPos = function(){
		return {
			x: Math.floor(Math.random() * 600),
			y:20
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}

