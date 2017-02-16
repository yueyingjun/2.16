/*obj 是一个对象
 * obj.url   str[url];
 * type str[get,post];默认get
 * obj.data  str[data] {data};
 * obj.dataType   [text,document,xml,json];默认text
 * success fun();
 * error  fun();
 */
	function ajax(obj){
		if(typeof(obj)!="object"){
			console.log("请输入正确的格式")
			return false;
		}
		var url=obj.url;
		var success=obj.success;
		var error=obj.error;
		if(url==undefined){
			var con="请输入请求地址"
			error(con);
			return false;
		}
		var data=obj.data;
		var str=""
		if(typeof(data)=="object"){
			for(var i in data){				
				str+=i+"="+data[i]+"&";
			}
			data=str.slice(0,-1);
		}
		else if(data==undefined){
			data="";
		}
		var xmlobj=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHttp");
		var dataType=obj.dataType||"text";		
		xmlobj.onreadystatechange=function(){
			if(xmlobj.readyState==4){
				if(xmlobj.status==200){
					var result=xmlobj.response;
					if(dataType=="xml"){
						result=xmlobj.responseXML;
					}
					success(result)
				}else if(xmlobj.status==404){
					var con="页面未找到"
					error(con)
				}
			}
		}
		var type=obj.type||"get";
		var async=obj.async===undefined?true:obj.async;
		if(type=="get"){
			xmlobj.open(type,url+"?"+data,async);
			xmlobj.responseType=dataType;
			xmlobj.send();
		}	
		else if(type=="post"){
			xmlobj.open(type,url,async);
			xmlobj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			xmlobj.responseType=dataType;
			xmlobj.send(data);
		}
	}
