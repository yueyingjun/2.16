// function ajax(obj){
//     var method=obj.method||"get";
//     var url=obj.url;
//     var dataType=obj.dataType||"text";
//     var asynch=obj.asynch==undefined?true:obj.asynch;
//     var success=obj.success;
//     var data="";
//     switch(typeof(obj.data)){
//         case "undefined":break;
//         case "object":
//            for(var i in obj.data){
//             data+=i+"="+obj.data[i]+"&";
//            }data=data.slice(0,-1);
//         break;
//         case "string":
//            data=obj.data;
//         break;
//     }


//     var ajax=window.XMLHttpRequest? new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP"); 
//     if (method=="get") {
//         ajax.open("get",url+"?"+data,asynch);        
//         if (dataType=="document") {
//             ajax.responseType="document";

//         }
//         ajax.send(null);
//     }else if (method=="post") {
//         ajax.open("post",url,asynch);
//         ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//         ajax.send(data);
//         if (dataType=="document") {
//             ajax.responseType-"document";
//         };
//     };

//     ajax.onreadystatechange=function(){  //监听事件
//                 if(ajax.readyState==4){    //打开请求成功
//                     if(ajax.status==200){
//                         var result;
//                         switch(dataType){
//                             case "text":
//                             result=ajax.responseText;
//                             break;
//                             case "json":
//                             result=eval("("+ajax.response+")");
                            
//                             break;
//                             case "xml":
//                             result=ajax.responseXML;
                            
//                             break; 
//                             case "document":
//                             result=ajax.response;
//                             break;                          
//                         }
//                         if (success){
//                             success(result);
//                         }

//                     }else if(ajax.status==404){
//                         alert("页面未找到");
//                     }else{
//                         alert("请求不成功")
//                     }
//                 }

// }
// }

//parma  object
function ajax(parma){
    if (typeof parma!=="object") {
        console.error("请传入正确的参数");
        return false;
    }
    //参数的初始化
    var url=parma.url;
    if (url===undefined) {
        console.error("请传入正确的地址");
        return false;
    }
    var type=parma.type||"get";
    var dataType=parma.dataType||"text";
    var asynch=parma.asynch===undefined?true:parma.asynch;
    var data=parma.data||"";
    var success=parma.success;
    var error=parma.error;
    
    if (typeof data==="object") {
        var str="";
        for(var i in data){
            str+=i+"="+parma.data[i]+"&";
        }
        data=str.slice(0,-1);
    };

    var ajax=window.XMLHttpRequest? new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP"); 
    if (type=="get") {
        
        ajax.open(type,url+"?"+data,asynch);
        if (dataType!="xml") {
                    ajax.responseType=dataType;
                };
        ajax.send(null);

    }else if(type=="post"){
        
        ajax.open(type,url,asynch);
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        if (dataType!="xml") {
                    ajax.responseType=dataType;
                };
        ajax.send(data);
    }
    ajax.onreadystatechange=function(){
        if (ajax.readyState==4) {
            if (ajax.status==200) {
                var result;
                if (dataType==="xml") {
                    result=ajax.responseXML;
                }else{
                    result=ajax.response;
                }
                success(result);
            }else if(ajax.status==404){
                var str1="页面未找到";
                error(str1);
            }
        }
    }
}