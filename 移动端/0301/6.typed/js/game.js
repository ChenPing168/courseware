var bgImg = new Image;
bgImg.src = './images/bg.jpg';

var game = function(){
	var hdThis = this;
	//字母数组
	hdThis.hdTypeArr = [];
	//画布原生对象
	hdThis.hdEle = document.getElementById("canvas");
	//画布的2d对象
	hdThis.hdCtx = hdThis.hdEle.getContext('2d');
	//失败分数
	hdThis.hdErrNum = 0;
	//成功分数
	hdThis.hdRightNum = 0;
	
	//开始游戏
	hdThis.hdPlay = function(){
		hdThis.hdInit();
		hdThis.hdFlashCtx();
		hdThis.hdMove();
		hdThis.hdHit();
	}
	//1.初始化(开始界面消失，音乐播放，初始一个字母)
	hdThis.hdInit = function(){
		//开始界面消失
		document.getElementById("welcome").style.display = 'none';
		//音乐播放
		document.getElementById("huanbanxie").play();
		//初始一个字母
		hdThis.hdTypeArr.push({x:50,y:60,font:'a',size:30});
	}
	//2.绘制(绘制背景，绘制字母)
	hdThis.hdFlashCtx = function(){
		//绘制背景
		hdThis.hdCtx.drawImage(bgImg,0,0,600,400);
		//绘制字母
		for (var i=0;i<hdThis.hdTypeArr.length;i++) {
			//设置字体大小
			hdThis.hdCtx.font = hdThis.hdTypeArr[i].size + 'px Arial';
			//设置颜色
			hdThis.hdCtx.fillStyle = 'red';
			//写字
			hdThis.hdCtx.fillText(hdThis.hdTypeArr[i].font,hdThis.hdTypeArr[i].x,hdThis.hdTypeArr[i].y);
		}
	}
	//3.字母移动(不够数量生成字母，字母向下移动，底部碰撞，写正确失败数量，检测游戏是否结束)
	hdThis.hdMove = function(){
		//不够数量生成字母
		setInterval(function(){
			if(hdThis.hdTypeArr.length < 10){
				hdThis.hdTypeArr.push({x:50,y:60,font:'b',size:30});
			}
		},1000);
		//字母向下移动
		setInterval(function(){
			for (var i=0;i<hdThis.hdTypeArr.length;i++) {
				hdThis.hdTypeArr[i].y++;
			}
			//刷新画布
			hdThis.hdFlashCtx();
			//底部检测
			hdThis.checkHit();
			//检测游戏是否结束
			hdThis.gameOver();
		},2);
	}
	hdThis.gameOver = function(){
		if(hdThis.hdErrNum >= 10){
			//清除定时器
			//背景音乐停止
		}
	}
	//底部检测
	hdThis.checkHit = function(){
		for (var i=0;i<hdThis.hdTypeArr.length;i++) {
			if(hdThis.hdTypeArr[i].y >= 400){
				//删掉失败的单元
				hdThis.hdTypeArr.splice(i,1);
				//错误分数+1
				hdThis.hdErrNum++;
			}
		}
	}
	
	//4.用户击打检测(打对字母移除字母数组，正确错误分数增加，播放音效)
	hdThis.hdHit = function(){
		document.onkeydown = function(e){
			//音效
			var right = document.getElementById("fire");
			var error = document.getElementById("laugh");
			//获得用户击打的字母
			var letter = String.fromCharCode(e.keyCode).toLowerCase();
			for (var i=0;i<hdThis.hdTypeArr.length;i++) {
				//如果打对了
				if(letter == hdThis.hdTypeArr[i].font){
					hdThis.hdTypeArr.splice(i,1);
					hdThis.hdRightNum++;
					right.play();
					return;
				}
			}
			//如果打错了
			hdThis.hdErrNum++;
			error.play();
		}
	}

}

gameObj = new game;







