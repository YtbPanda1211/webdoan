document.write("<div class='QQbox' id='divQQbox' >");
document.write("<div class='Qlist' id='divOnline' onmouseout='hideMsgBox(event);' style='display : none;'>");
document.write("<div class='t'></div>");
document.write("<div class='infobox'>Giờ làm việc <br>8:00 A.M - 18:00 P.M</div>");
document.write("<div class='con'>");

document.write("<ul>");


document.write('<div align="center"> <font color="#0000ff" ><b>Kỹ thuật<br></b></font> <li><a href="ymsgr:sendim?stupid_253" target="_blank"><img border="0" src="http://opi.yahoo.com/online?u=stupid_253&m=g&t=2"></a></li> </div>');

document.write('<div align="center"> <font color="#0000ff" ><b>Bảo hành<br></b></font> <li><a href="ymsgr:sendim?stupid_253" target="_blank"><img border="0" src="http://opi.yahoo.com/online?u=stupid_253&m=g&t=2"></a></li> </div>');

document.write('<div align="center"> <font color="#0000ff" ><b>Kinh doanh<br></b></font> <li><a href="ymsgr:sendim?stupid_253" target="_blank"><img border="0" src="http://opi.yahoo.com/online?u=stupid_253&m=g&t=2"></a></li> </div>');

document.write('<tr><td><li><b><div align="center"><font color="#ff0000" >Hotline: 0985.065.067</font> </div></b></li></td></tr>');

document.write("</ul>");

document.write("</div>");

document.write("<div class='b'></div>");

document.write("</div>");

document.write("<div id='divMenu' onmouseover='OnlineOver();'><img src='themes/360/qq/images/qq_1.gif' class='press' alt='Tư vấn trực tuyến'></div>");

document.write("</div>");



//<![CDATA[

var tips; var theTop = 145/*这是默认高度,越大越往下*/; var old = theTop;

function initFloatTips() {

tips = document.getElementById('divQQbox');

moveTips();

};

function moveTips() {

var tt=50;

if (window.innerHeight) {

pos = window.pageYOffset

}

else if (document.documentElement && document.documentElement.scrollTop) {

pos = document.documentElement.scrollTop

}

else if (document.body) {

pos = document.body.scrollTop;

}

pos=pos-tips.offsetTop+theTop;

pos=tips.offsetTop+pos/10;



if (pos < theTop) pos = theTop;

if (pos != old) {

tips.style.top = pos+"px";

tt=10;

//alert(tips.style.top);

}



old = pos;

setTimeout(moveTips,tt);

}

//!]]>

initFloatTips();







function OnlineOver(){

document.getElementById("divMenu").style.display = "none";

document.getElementById("divOnline").style.display = "block";

document.getElementById("divQQbox").style.width = "170px";

}



function OnlineOut(){

document.getElementById("divMenu").style.display = "block";

document.getElementById("divOnline").style.display = "none";



}



if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  


function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式

　 if (theEvent){

　 var browser=navigator.userAgent; //取得浏览器属性

　 if (browser.indexOf("Firefox")>0){ //如果是Firefox

　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素

　　 return; //结束函式

} 

} 

if (browser.indexOf("MSIE")>0){ //如果是IE

if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素

return; //结束函式

}

}

}

/*要执行的操作*/

document.getElementById("divMenu").style.display = "block";

document.getElementById("divOnline").style.display = "none";

}









   