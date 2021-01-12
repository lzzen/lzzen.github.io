// 开发成谷歌插件岂不是更好？更加久远地存在！

main = {
	bornTime:1610456635,
	echoTime:function(id){
		document.getElementById(id).innerHTML = '现在时间 ' +
			new Date().toLocaleString('cn',{hour12:false});
	},
	echoLifeTime:function(id){
		document.getElementById(id).innerHTML = '您已存活 ' +
			timeFn(this.bornTime * 1000);
	}
}

