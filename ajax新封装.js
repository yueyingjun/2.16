
//ajax封装
//ajax({type:"get",url:"1.php",data:"aaa",dataType:"text",succes:function(e){},failrue:function(){}})
function ajax(parma){
	//判断传入的参数是否正确
	if(typeof parma!=="object"){
		console.error("请传入正确的参数");
		return false;
	}
	//参数初始化
	var url=parma.url;
	//判断是否传入请求地址
	if(url===undefined){
		console.error("请传入请求地址");
		return false;
	}
	//发送请求方式初始化
	var type=parma.type||"get";
	//数据返回类型初始化
	var dataType=parma.dataType||"text";
	//连接方式初始化      异步true  同步flase 
	var async=parma.async===undefined?true:parma.async;
	var success=parma.success;
	var failure=parma.failure;
	//传送的数据初始化
	var data=parma.data||"";
	//判断传入的数据类型
	if(typeof data==="object"){
		var str="";
		for(var i in data){
			str+=i+"="+data[i]+"&";
		}
		data=str.slice(0,-1);
	}
	//获取ajax对象
	var xmlObj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
	//监听的客户端和服务器交互的状态
	xmlObj.onreadystatechange=function(){
		if(xmlObj.readyState===4){
			if(xmlObj.status===200){
				var result;
				if(dataType==="xml"){
					result=xmlObj.responseXML;
				}else{
					result=xmlObj.response;
				}
				if(success){
					success(result)
				}
			}else if(xmlObj.status===404){
				console.log("页面未找到")
			}else{
				if(failure){
					failure()
				}else{
					console.log("获取错误")
				}
			}
		}
	}
	//两种发送请求过程
	if(type=="get"){
	    xmlObj.open(type,url+"?"+data,async);
	    xmlObj.reponseType=dataType;
	    xmlObj.send(null);
	}else if(type=="post"){
	    xmlObj.open(type,url,async);
	    xmlObj.reponseType=dataType;
	    xmlObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	    xmlObj.send(data);
	}
}



//function ajax(parma){
//	if(typeof parma!==object){
//		console.error("请输入准确的参数");
//	}
//	var url=parma.url;
//	if(url===undefined){
//		console.error("请传入请求地址")
//	}
//	var type=parma.type||"get";
//	var dataType=parma.data||"text";
//	var async=parma.async||"true";
//	var data=parma.data||"";
//	if(typeof data==="object"){
//		var str="";
//		for(var i in data){
//			str+=i+"="+data[i]+"&";
//		}
//		data=str.slice(0,-1)
//	}
//	var xmlObj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
//	xmlObj.onreadystatechange=function(){
//		if(xmlObj.readystate===4){
//			if(xmlObj.status===200){
//				var result;
//				if(dataType==="xml"){
//					result=xmlObj.responseXML;
//				}else if{
//					result=xmlObj.response;
//				}
//				if(success){
//					success(result);
//				}
//			}else if(xmlObj.status===404){
//				console.log("页面未找到")
//			}else{
//				if(failrue){
//					console.log("失败");
//				}else{
//					console.log("获取失败");
//				}
//			}
//		}
//	}
//	if(type=="get"){
//	    xmlObj.open(type,url+"?"+data,async);
//	    xmlObj.reponseType=dataType;
//	    xmlObj.send(null);
//	}else if(type=="post"){
//	    xmlObj.open(type,url,async);
//	    xmlObj.reponseType=dataType;
//	    xmlObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//	    xmlObj.send(data);
//	}
//}
