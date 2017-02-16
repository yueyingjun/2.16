
function ajax(obj) {
	//判读是不是一个对象
	if (typeof obj!="object") {
		console.error("请输入正确的参数");
		return false;
	}
//数据初始化
	var type = obj.type || 'get';
	//要请求的方式
	var data = obj.data || null;
	//传递的数据
	var dataType=obj.dataType||"text";
	//返回数据的类型
	var url = obj.url;
	if (url==undefined) {
		console.error("请输入请求的地址");
		return false;
	};
	//要请求的地址
	var async = obj.async || true;
	//判断是否同步异步
	var success = obj.success;
	//获取的数据
	var xmlobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
	var tpof=typeof(obj.data);
	if (tpof=="string") {dataStr=obj.data};
	if (tpof=="object") {
		var aa = [];
		for (var i in obj.data){
			aa.push(i + '=' + data[i]);
		//  i 对象的下标输出冒号前面的内容
		}
		var dateStr= aa.join('&');
	}
	// if(tpof=="object"){
	// 	var str="";
	// 	for(var i in data){
	// 		str+=i+"="+data[i]+"&";
	// 	}
	// 	var dateStr=str.slice(0,-1);
	// }
	//这是url后面链接希望发送的数据
	if(type=="get"){
		xmlobj.open('get',url+'?'+dateStr,async);
		xmlobj.responseType=dataType;
		// ResponseType元素表示收件人对会议收到的响应的类型
		xmlobj.send(null);
	}else{
		xmlobj.open('post',url,async);
		xmlobj.responseType=dataType;
		xmlobj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlobj.send(dateStr);
	}
	//根据不同的方法选择不同的方式请求
	xmlobj.onreadystatechange = function () {
		// alert(1);
		if (xmlobj.readyState == 4) {
			if (xmlobj.status == 200) {
				//判定类型
				if(dataType=="XML"){
					var result=xmlobj.responseXML;
				}else{
					var result=xmlobj.response;
				}
				if(success){
					success(result);
				}
				// success(xmlobj.responseText);
			}else if (xmlobj.status == 404) {
				var info="页面错误";
				console.error(info);
				alert(1);
			}else if (xmlobj.status == 503) {
				var info="服务器暂时找不到";
				console.error(info);
			}
		}
	}
}
//调用
// xmlobj({
// 	url:"1.php",
// 	type:"get",
// 	async:true,
// 	data:{
// 		name1: 'value1',
// 		name2: 'value2'
// 	},
// 	dataType:"document",
// 	success:function(text){
// 		console.log(text);
// 	},
// 	error:function(){

// 	}
// })