/*
	url 
	data
	type
	bool
	redata
	function
	function
	
	
	
	
*/




function ajax(prem){
//	参数初始化
	if(typeof(prem)!=="object"){
		console.error("请输入正确的参数");
		return;
	};
	if(typeof(prem.url)!=="string"){
		console.error("请输入正确的地址");
		return;
	};
	var url=prem.url;
	var type=prem.type||"get";
	var bool=prem.bool?true:prem.bool;
	if(typeof(prem.data=="object")){
		var str="";
		for(var i in prem.data){
			str=+prem.data[i]+"&";
		}
		str.slice(0,-1);
		prem.data=str;
	}
	var data=prem.data;
	var redata=prem.redata||"text";
	var suc=prem.success;
	var err=prem.error;
	var xmlobj=window.XMLHttpRequest?new XMLHttpRequest():new activexobject("microsoft.xmlhttp");
	if(type=="get"){
		xmlobj.open(type,url+"?"+data,bool);
		if(xmlobj.responseType=="xml"){
			xmlobj.responseType="xml";
		}else{
			xmlobj.responseType=redata;		
		}
		xmlobj.send();
	};
	if(type=="post"){
		xmlobj.open(type,url);
		if(xmlobj.responseType=="xml"){
			xmlobj.responseType="xml";
		}else{
			xmlobj.responseType=redata;		
		}
		xmlobj.send(data);
	}
	xmlobj.onreadystatechange=function(){
		if(xmlobj.readyState==4){
			if(xmlobj.status==200){
				suc(xmlobj.response);
			}else{
				err();
				alert("error")
			}
		}
	}
}
