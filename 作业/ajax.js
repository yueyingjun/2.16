//parma  object
//url  str[url] 请求地址
//data  str[post,get] 请求方式
//dataType  str[json,text,xml,document]  返回数据的类型
//data   传递的数据   str[search]  obj[{}]
//success  fn[callback]  callback(e) e 获取到的数据
//async   bool[true,false]  同步或者是异步
function ajax(parma){
	if(typeof parma!=="object"){
		console.error("请输入正确格式")
		return false;
	}
	var url=parma.url;
	if(parma.url===undefined){
		console.error("请输入地址")
		return false;
	}
	var type=parma.method||"get";
	var success=parma.success;
	var dataType=parma.dataType||"text";
	var async=parma.async===undefined?true:parma.async;
	var error=parma.error;
	var data="";
	if(parma.data="object"){
		for(var i in parma.data){
			data+=i+"="+parma.data[i]+"&";
		};
		data=data.slice(0,-1)
	}else{
		return data=parma.data;
	}
	var parma=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.HTMLHTTP")
	if(type=="get"){
		parma.open(type,url+"?"+data,async);
		parma.responseType=dataType;
		parma.send();
	}else if(type=="post"){
		parma.open(type,url,async);
		parma.responseType=dataType;
		parma.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		parma.send(data);
	}
	parma.onreadystatechange=function(){
		if(parma.readyState==4){
			if(parma.status==200){
				if(parma=="object"){
					var result=parma.responseXML;
					console.log(result)
				}else{
					var result=parma.response;
				}
				if(success){
					success(result)
				}
				
			}else if(parma.status==404){
				var info="页面找不到";
				error(info);
			}else{
				var info="页面不存在";
				error(info);
			}
		}
		
	}
}
