/*
 * 
 * 1.传入对象格式。要求如下：
 * 	ajax({
 * url:"",    [str] 访问地址    (必填)
 * type:"get",    [str]  传入方式    (默认get)  post   (可不填)
 * asynch:true,   [boolean] 默认true  (可不填)
 * data:"",传入参数   [str] [json]   json转换为字符串
 * dataType:"text",    返回值数据类型	[str]   text,document,xml,json...   默认text
 * success:function(text){}   成功之后执行的事件   text为返回的参数 
 * error:function(text){}   失败之后执行的事件   text为返回的参数
 * })
 * 
 * 
 * */
function ajax(obj){
	//判断obj是否为一个对象
	if(typeof(obj)!="object"){
		alert("请传入json对象");
		return;
	}
	var url=obj.url;
	//判断url是否为空
	if(url==undefined||url==""){
		alert("请传入有效地址");
		return;
	}
	//初始化type
	var type=obj.type||"get";
	//初始化 同步异步  asynch
	var asynch=obj.asynch==undefined?true:obj.asynch;
	//处理传入参数
	var data="";
	switch(typeof(obj.data)){
		case "undefined":
		data="";
		break;
		case "string":
		data=obj.data;
		break;
		//obj格式处理成为字符串
		case "object":
		for(var i in obj.data){
			data+=i+"="+obj.data[i]+"&";
		}
		//减去最后一个&
		data=data.slice(0,-1);
		break;
	}
	//初始化dataType
	var dataType=obj.dataType||"text";
	//申明返回结果    success()  error()
	var result="";
	var success=obj.success;
	var error=obj.error;
	//ajax定义
	var ajax=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
	//判定type传输方式
	if(type=="get"){
		ajax.open(type,url+"?"+data,asynch);
		//设置ajax的返回类型
		ajax.responseType=dataType;
		ajax.send();
	}else if(type=="post"){
		ajax.open(type,url,asynch);
		//定义post的必要条件
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		//设置ajax的返回类型
		ajax.responseType=dataType;
		ajax.send(data);
	}
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			if(ajax.status==200){
				//成功之后将返回的值赋值给result
				result=ajax.response;
				if(dataType=="xml"){
					result=ajax.responseXML;
				}
				//成功之后执行的函数  若未填写success直接输出发送成功
				if(success){
					success(result);
				}else{
					console.log("发送成功！");
				}
			}else if(ajax.status==404){
				//404弹出提示
				alert("页面未找到！");
			}else if(ajax.status==503){
				//503弹出提示
				alert("服务暂时不可用！");
			}else{
				//错误是运行error函数   若未填写error函数直接输出发送失败
				if(error){
					error(text);
				}else{
					alert("发送失败！");
				}
			}
		}
	}
}
