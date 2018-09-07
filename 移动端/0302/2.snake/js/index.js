//背景图
bgImg = new Image;
bgImg.src = './images/bg.jpg';
//蛇头
headLImg = new Image;
headLImg.src = './images/l.gif';

headRImg = new Image;
headRImg.src = './images/r.gif';

headTImg = new Image;
headTImg.src = './images/t.gif';

headBImg = new Image;
headBImg.src = './images/b.gif';

//蛇身
bodyImg = new Image;
bodyImg.src = './images/body.gif';

//食物
foodImg = new Image;
foodImg.src = './images/food.gif';




var snake = function(){
	var hdThis = this;
	//原生对象
	hdThis.hdEle = document.getElementById("canvas");
	//画布对象
	hdThis.hdCtx = hdThis.hdEle.getContext('2d');
	//保存蛇的信息数组
	hdThis.hdSnakeArr = [];
	//食物数组
	hdThis.hdFoodArr = [];
	//移动定时器
	hdThis.hdMoveTimer;
	//分数
	hdThis.hdScore = 0;
	
	hdThis.hdPlay = function(){
		//1.绘制
		hdThis.hdInit();
		//2.移动
		hdThis.hdMove();
	}
	//1.绘制画布和整条蛇，建立蛇的信息数组，通过刷新画布方法，把蛇摆在正中央
	hdThis.hdInit = function(){
		for (var i=0;i<4;i++) {
			hdThis.hdSnakeArr.push({
				x : 500 / 25 / 2 + i - 2,
				y : 500 / 25 / 2,
				d : 'l'
			})
		}
		hdThis.hdFlashCtx();
	}
	//刷新画布
	hdThis.hdFlashCtx = function(){
		//背景
		hdThis.hdCtx.drawImage(bgImg,0,0,500,500);
		//食物
		if(hdThis.hdFoodArr.length != 0){
			hdThis.hdCtx.drawImage(foodImg,hdThis.hdFoodArr[0].x * 25,hdThis.hdFoodArr[0].y * 25,25,25);
		}
		//分数
		hdThis.hdCtx.font = '20px Arial';
		hdThis.hdCtx.fillStyle = 'red';
		hdThis.hdCtx.fillText('得分：' + hdThis.hdScore,0,20);
		for (var i=0;i<hdThis.hdSnakeArr.length;i++) {
			if(i == 0){
				var headImg = '';
				switch (hdThis.hdSnakeArr[0].d){
					case 'l':
						headImg = headLImg;
						break;
					case 'r':
						headImg = headRImg;
						break;
					case 'b':
						headImg = headBImg;
						break;
					case 't':
						headImg = headTImg;
						break;
				}
				//蛇头
				hdThis.hdCtx.drawImage(headImg,hdThis.hdSnakeArr[i].x * 25,hdThis.hdSnakeArr[i].y * 25,25,25);
			}else{
				//蛇身
				hdThis.hdCtx.drawImage(bodyImg,hdThis.hdSnakeArr[i].x * 25,hdThis.hdSnakeArr[i].y * 25,25,25);
			}
			
		}
	}
	
	//2.蛇移动每次重新绘制画布和蛇身，包括键盘自己控制方向,创建食物，碰撞检测(碰壁，碰到自己，碰到食物)，游戏结束
	hdThis.hdMove = function(){
		document.onkeydown = function(e){
			switch (e.keyCode){
				case 37:
					hdThis.hdSnakeArr[0].d = 'l';
					break;
				case 38:
					hdThis.hdSnakeArr[0].d = 't';
					break;
				case 39:
					hdThis.hdSnakeArr[0].d = 'r';
					break;
				case 40:
					hdThis.hdSnakeArr[0].d = 'b';
					break;
			}
		}
		
		
		hdThis.hdMoveTimer = setInterval(function(){
			//蛇身子
			for (var i=hdThis.hdSnakeArr.length-1;i>0;i--) {
				hdThis.hdSnakeArr[i].x = hdThis.hdSnakeArr[i-1].x;
				hdThis.hdSnakeArr[i].y = hdThis.hdSnakeArr[i-1].y;
			}
			//蛇头
			switch (hdThis.hdSnakeArr[0].d){
				case 'l':
					hdThis.hdSnakeArr[0].x--;
					break;
				case 'r':
					hdThis.hdSnakeArr[0].x++;
					break;
				case 't':
					hdThis.hdSnakeArr[0].y--;
					break;
				case 'b':
					hdThis.hdSnakeArr[0].y++;
					break;
			}
			//创建食物
			hdThis.hdCreateFood();
			//碰撞检测(碰壁，碰到自己，碰到食物)
			hdThis.hdCheckHit();
			//刷新画布
			hdThis.hdFlashCtx();
		},100);
	}
	
	hdThis.hdCheckHit = function(){
		//1.碰壁
		if(hdThis.hdSnakeArr[0].x < 0 || hdThis.hdSnakeArr[0].x > 500 / 25 || hdThis.hdSnakeArr[0].y < 0 || hdThis.hdSnakeArr[0].y > 500 / 25){
			hdThis.hdGameOver();
		}
		//2.碰到自己
		for (var i=1;i<hdThis.hdSnakeArr.length;i++) {
			if(hdThis.hdSnakeArr[0].x == hdThis.hdSnakeArr[i].x && hdThis.hdSnakeArr[0].y == hdThis.hdSnakeArr[i].y){
				hdThis.hdGameOver();
				break;
			}
		}
		//3.碰到食物
		if(hdThis.hdSnakeArr[0].x == hdThis.hdFoodArr[0].x && hdThis.hdSnakeArr[0].y == hdThis.hdFoodArr[0].y){
			hdThis.hdSnakeArr.push({
				x : hdThis.hdFoodArr[0].x,
				y : hdThis.hdFoodArr[0].y,
				d : 'l'
			})
			//吃掉食物，去掉食物数组中的1个，为了将来重新生成
			hdThis.hdFoodArr.shift();
			//分数++
			hdThis.hdScore++;
		}
		
		
	}
	hdThis.hdGameOver = function(){
		clearInterval(hdThis.hdMoveTimer);
		alert('游戏结束');
	}
	
	hdThis.hdCreateFood = function(){
		//食物只需要生成一个
		if(hdThis.hdFoodArr.length != 0){
			return;
		}
		var pos = {
			x : Math.floor(Math.random() * 500 / 25),
			y : Math.floor(Math.random() * 500 / 25)
		}
		var crash = false;
		//不能随机到蛇的身上
		for (var i=0;i<hdThis.hdSnakeArr.length;i++) {
			//如果是在蛇身上
			if(pos.x == hdThis.hdSnakeArr[i].x && pos.y == hdThis.hdSnakeArr[i].y){
				crash = true;
				break;
			}
		}
		//如果在蛇身上，那么重新生成
		if(crash){
			hdThis.hdCreateFood();
		}else{
			hdThis.hdFoodArr.push(pos);
		}
		
	}
	
	
}


window.onload = function(){
	var obj = new snake;
	obj.hdPlay();
}











