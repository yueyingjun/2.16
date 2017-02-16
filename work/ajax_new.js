//	封装ajax的思想
		//1.到什么地方去取数据
		//2.取得方式
		//3.取到的数据的类型
		//4.如何对数据来做处理	回调函数
		//5.如何所容错处理
		//6.我们是不是要异步
	
//ajax({
//	type:"post","get",
//	url:"adas",
//	async:"true"or"false",
//	data:"name=zhangsan$age=12"/{name:"zhangsan",age:12},
//	dataType:"json"/"text"/"document"/"xml",
//	success:function(e){
//		
//	}
//	error:function(e){
//		
//	}

	//parma的参数类型
	//获取路径 	url:str[];
	//获取方式 	type:str["post","get"];
	//ajax同步还是异步		async:str["true","false"];
	//传入的数据	data:str[]	json:object;
	//取到的数据的类型		dataType:str["json"/"text"/"document"/"xml"]
	//如何对数据来做处理 		fn
	function ajax(parma){
		//如果传递的参数不是json格式，容错处理
		if(typeof parma!="object"){
			console.error("您输入的参数有误");
			return false;
		}
		//参数初始化
		var url=parma.url;
		if(url===undefined){
			console.error("您输入的地址有误");
			return false;
		}
		var type=parma.type||"get";
		var async=parma.async==undefined?true:parma.async;
		var data=parma.data||"";
		//用json格式传递数据更加方便，且不容易出错
			if(typeof data=="object"){
				var str="";
				for(var i in data){
					str+=i+"="+data[i]+"&";
				}
				data=str.slice(0,-1);
			}
		var dataType=parma.dataType||"text";
		var success=parma.success;	
		var error=parma.error;		
		
		
		var xmlobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");	
		xmlobj.onreadystatechange=function(){
			if(xmlobj.readyState==4){
				if(xmlobj.status==200){				
					if(dataType=="xml"){
						var result=xmlobj.responseXML;
					}else{
						var result=xmlobj.response;
					}
					if(success){
						success(result);
					}
				}else if(xmlobj.status==404){
					var info="没有发现文件";
					error(info);
				}
			}
		}
		
		if(type=="get"){
			xmlobj.open(type,url+"?"+data,async);
			xmlobj.responseType=dataType;
			xmlobj.send();
		}else if(type=="post"){
			xmlobj.open(type,url,async);
			xmlobj.responseType=dataType;
			xmlobj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			xmlobj.send(data);
		}
	}
		
	
