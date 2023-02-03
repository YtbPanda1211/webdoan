function $(element) {
    return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $(this.subj+"_v").innerHTML=$(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $(str+"_h").className="none";
  $(str+"_v").innerHTML=$(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

function colorStyle(id,color1,color2){
  var elem = $(id);
  if(elem.getAttribute("id") == id){
      //elem.className = color1;
      if(elem.className == color1)
           elem.className = color2;
        else
           elem.className = color1; 
    }
}

function articleSize(size,lineheight){
var article = $("article");
article.style.fontSize = size+"px";
article.style.lineHeight = lineheight+"px";
}

//goods.dwt
function initAutoFocus(){
    autoShiftFocus("focustab", "a", "focuscont", "div");
    function autoShiftFocus(tabsid, tabstagname, contentid, contenttagname){
        //var autotpc = setInterval(autoSlideTopic, 3000);//每隔3秒运行一次autoSlideTopic
        var tabs = document.getElementById(tabsid).getElementsByTagName(tabstagname);
        tabs[0].className = "act";
        var contents = document.getElementById(contentid).getElementsByTagName(contenttagname);
        contents[0].style.display = "block";
        var cur_index_num = 0;
        if (tabstagname == "a") {
            for (var a = tabs.length - 1; a >= 0; a--) {
                tabs[a].onclick = function(){
                    return false;
                }
            }
        }
        function getContentsArr(){
            var contentsarr = new Array();
            for (var z=0;z<contents.length; z++) {
                if(contents[z].id.indexOf(contentid)>=0){
                    contentsarr[contentsarr.length] = contents[z];
                }                
            }
             return contentsarr;
        }
        var contarr=getContentsArr();
        function autoSlideTopic(){
            for (var a = tabs.length - 1; a >= 0; a--) {
                tabs[a].className = "";
            }
            
            for (var b = contarr.length - 1; b >= 0; b--) {
                    contarr[b].style.display = "none";
            }
            contarr[cur_index_num].style.display = "block";
            
            tabs[cur_index_num].className = "act";
            var total_num = tabs.length;
            cur_index_num++;
            if (cur_index_num >= total_num) {
                cur_index_num = 0;
            }
        }
        for (var c = tabs.length - 1; c >= 0; c--) {
            tabs[c].onmouseover = function(){
                //clearInterval(autotpc);
                changeTabs(this.name);
            }
            tabs[c].onmouseout = function(){
                //autotpc = setInterval(autoSlideTopic, 3000);
                clearInterval(autoSlideTopic);
            }
        }
        function changeTabs(num){
            var thenum = num - 1;
            for (var n = tabs.length - 1; n >= 0; n--) {
                tabs[n].className = "";
            }
            tabs[thenum].className = "act";
            for (var m = contarr.length - 1; m >= 0; m--) {
                contarr[m].style.display = "none";
            }
            contarr[thenum].style.display = "block";
            cur_index_num = thenum;
        }
        
    }
    
}
//购物车
function cart(){
    var a=document.getElementById('ECS_CARTINFO').innerHTML;
    var b= /(\d+\.\d+)|(\d+)/g;
    var c=a.match(b);
    document.getElementById("a1").innerHTML = "<font>"+c[0]+"</font> Giá (<font>VNĐ"+c[1]+"</font>)";
}
//销售排行
function top10(id,cur){
var id = $(id).getElementsByTagName("li");
for(var i=0; i<id.length; i++)
 {
   id[0].className = "cur";
   id[i].onmouseover = function()
   {
    this.className="";
        for(var j=0; j<id.length; j++)
        {
             if((id[j].getAttribute("class") == cur) || (id[j].getAttribute("className") == cur))
             {
             id[j].className = "";
             break;
             }
        }
    this.className = cur;    
   }
 } 
}
//searchSelect
function clearBubble(e){
        if(e){
            e.stopPropagation();
        }else{
            window.event.cancelBubble = true;
        }
}
function makeSelect(){
    this.s;
    this.info = function(o){
        this.s = document.getElementById(o);
        var selectW = this.s.offsetWidth;
        var spanboxW = selectW+35;
        var input = document.createElement("input");
        input.setAttribute("type","hidden");
        input.id = o;
        var span = document.createElement("span");
        var spanv = document.createElement("span");
        spanv.className = "spancur";
        spanv.style.cssText = "width:"+selectW+"px;overflow:hidden";
        var opt = this.s.getElementsByTagName("option");
        for(var i = 0 ; i < opt.length ; i++){
            if(opt[i].selected == true){
                spanv.innerHTML = opt[i].innerHTML;
                input.value = opt[i].value;
            }
        }
        var img = document.createElement("img");
        var ul = document.createElement("ul");
        
        for(var i = 0 ; i < opt.length ; i++){
            var li = document.createElement("li");
            if(opt[i].selected == true){
                li.className = "selectedTrue";
            }else{
                li.className = "selectedFalse";
            }            
            li.innerHTML = opt[i].innerHTML;
            li.value = opt[i].value;
            li.onmouseover = function(){
                for(var j = 0 ; j < ul.getElementsByTagName("li").length ; j++){
                    ul.getElementsByTagName("li")[j].style.background = "#FFF";
                }
                this.style.background = "#EEE";
            }
            li.onclick = function(){
                this.style.background="#EEE";
                input.value=this.value;
                spanv.innerHTML = this.innerHTML;
                ul.style.display = "none";
                }
            ul.appendChild(li);
        }
        ul.className = "oplist";
        ul.style.cssText = "width:"+spanboxW+"px";
        ul.style.display = "none";
        img.src="themes/3cshop/images/arr.png";
        img.className = "imgarr";
        img.onclick = function(e){
            clearBubble(e);
            ul.style.display = "block";
        }
        span.appendChild(spanv);
        span.appendChild(ul);
        span.appendChild(img);
        span.className = "spanbox";
        span.style.cssText = "width:"+spanboxW+"px";
        this.s.parentNode.appendChild(input);
        this.s.parentNode.replaceChild(span,this.s);
        document.onclick = function(){
            ul.style.display = "none";
          }
    }
}
