$(document).ready(function(){
	imagePreview();
	$('.title_type').click(function(){
        var id = $(this).attr('lang');
        $('.content_bank[lang='+id+']').slideToggle('fast');
	});

	$('.content .bank').mouseover(function(){
		$(this).addClass('bank-hover');
	});
    $('.content .bank').mouseout(function(){
		$('.bank-hover').removeClass('bank-hover');
	});
    
    $('.content .bank').click(function(){
        $('.bank-click').removeClass('bank-click');
	    $(this).addClass('bank-click');
        $('#step-payment-bk-2').show();
        
    });
    
});
this.imagePreview = function(){	
	$(".content_bank .content img").hover(function(e){
		this.t = this.title;
        var explode_title_array = explode_title(this.t);
        var percent_fee = this.lang;
        var fix_fee     = this.alt;
        var complete_time = this.name;

		var c = (explode_title_array[0] != "") ? explode_title_array[0] : "";
        var d = (explode_title_array[1] != "") ? explode_title_array[1] : "";
        
        var content = "<div style='margin: 7px; font-size:13px;font-family:Arial;margin-top: 10px;'><b>"+ c +"</b><br />Phí tiện tích thanh toán: "+ fix_fee + percent_fee +"<br />Thời gian hoàn thành: "+complete_time+"</div>";
        
        $("body").append("<div id='preview' class='tooltip_preview'>"+ content +"</div> ");    
        		 
        $("#preview")
            .css("width",250)
            .css("height",80)
			.css("top",(e.pageY - 100))
			.css("left",(e.pageX + 10))
            .css({  'background': '#EAF2F5', 
                    'position' : 'absolute',
                    'border': '1px solid #ccc'
             })
			.fadeIn("fast")
        },
    	function(){
    		this.title = this.t;	
    		$("#preview").remove();
        });	
    	$(".content_bank .content img").mousemove(function(e){
    		$("#preview")
    			.css("top",(e.pageY - 100))
    			.css("left",(e.pageX + 10));
    	});	
};

function explode_title(str){
    var title = str;
    var title_parts = title.split('-');
    return title_parts;
}
function popup(url,namepopup)
{
 var width  = 800;
 var height = 800;
 var left   = (screen.width  - width)/2;
 var top    = (screen.height - height)/2;
 var params = 'width='+width+', height='+height;
 params += ', top='+top+', left='+left;
 params += ', directories=no';
 params += ', location=0';
 params += ', menubar=0';
 params += ', scrollbars=auto';
 params += ', status=0';
 params += ', toolbar=no';
 params += ', modal=yes';
 params += ', alwaysRaised=yes';
 var newwin = window.open(url,"_blank", params);
 if (window.focus) {newwin.location()}
 return false;
}
function set_id(id){
    document.getElementById("bank_payment_method_id").value = id;
    $('.bank .divChecked').css("display","none");
    $('#divChecked_' + id).css("display","block");
}

function chane_info_payment(rad){
    var id = rad.value;
    if(id==1){
        document.getElementById('info_1').style.display = 'block';
        document.getElementById('info_2').style.display = 'none';
    }else{
        document.getElementById('info_1').style.display = 'none';
        document.getElementById('info_2').style.display = 'block';
    }

}
function extra_payment(){
    document.getElementById('extra_payment').value = "baokim";
    document.demo_v2.submit();
}