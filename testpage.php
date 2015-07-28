<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Document</title>  
    <style type="text/css">    
    span#slide_box_sp{    
        display:block;    
        float:left;    
    }    
    div.go_l_nav{    
        display:block;    
        cursor:pointer;    
        background-color:red;    
        float:left;    
    }    
    div.go_r_nav{    
        display:block;    
        cursor:pointer;    
        background-color:red;    
        float:left;    
    }    
    div.content_slide{    
        display:block;    
        margin:0px;    
        float:left;    
        overflow:hidden;    
    }    
    a.list_nav{    
        font-size:11px;    
        text-align:center;    
        float:left;    
        margin:0px;    
        background-color:#FFFF66;    
        color:#333333;    
    }    
    a.list_nav:hover{    
        font-size:11px;    
        text-align:center;    
        float:left;    
        margin:0px;    
        background-color:#99FF33;    
        color:#621cc4;      
    }    
    div#content_slide_in{    
        display:block;    
        margin-left:0px;    
    }    
    </style>        
</head>  
<body>  
      
   
      
<div style="margin:auto;width:800px;">  
  
<span id="slide_box_sp">    
<div class="go_l_nav" title="Back"></div>    
<div class="content_slide">    
<div id="content_slide_in">    
<a href="#" class="list_nav">รูป หรือ ข้อความ 1</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 2</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 3</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 4</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 5</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 6</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 7</a>    
<a href="#" class="list_nav">รูป หรือ ข้อความ 8</a>    
</div>    
</div>    
<div class="go_r_nav" title="Next"></div>    
</span>            
      
</div>           
            
    <script src="assets/jquerymobile/jquery.mobile-1.4.5.js"></script>    
<script type="text/javascript">  
$(function(){  
  
   // เริ่มส่วนที่่ควรปรับแต่ง    
    var box_w=100;  // กำหนดความกว้างของแต่ละ box    
    var box_h=100;  // กำหนดความสูงของ slide    
    var box_show=4;  // กำหนดจำนวนรายการที่จะแสดงเริ่มต้น    
    var nav_w=30;   // กำหนดความกว้างของตัวเลื่อยนซ้าย ขวา    
    var marGL=2;     // กำหนดระยะห่างของแต่ละ box     
    // สิ้นสุดส่วนที่ควรปรับแต่ง    
    var slide_w=(box_show*(marGL+box_w))+(nav_w*2)+marGL    
    var content_w=(box_show*(marGL+box_w));    
    var nol_nav_l,new_nev_l=null;    
    $("span#slide_box_sp").width(slide_w);    
    $("a.list_nav").width(box_w).css("marginLeft",marGL);    
    $("span#slide_box_sp,span#slide_box_sp *").height(box_h);    
    $("div.go_l_nav,div.go_r_nav").width(nav_w);    
    $("div.go_r_nav").css("marginLeft",marGL);    
    $("div.content_slide").width(content_w);    
    $("div#content_slide_in").css("marginLeft","0px");    
    $("div.go_r_nav").click(function(){    
        var numA=$("div#content_slide_in > a").length-box_show;    
        numA=numA*(box_w+marGL);    
        var charA="-"+numA+"px";    
        now_nav_l=$("div#content_slide_in").css("marginLeft");    
        if(now_nav_l!=charA){    
            now_nav_l=now_nav_l.replace("px","");    
            new_nav_l=now_nav_l-box_w-marGL;    
            $("div#content_slide_in").animate({    
                marginLeft:new_nav_l    
            },100);    
        }    
    });    
    $("div.go_l_nav").click(function(){    
        now_nav_l=$("div#content_slide_in").css("marginLeft");    
        if(now_nav_l!="0px"){    
            now_nav_l=now_nav_l.replace("px","");    
            now_nav_l=parseInt(now_nav_l);    
            new_nav_l=now_nav_l+box_w+marGL;    
            $("div#content_slide_in").animate({    
                marginLeft:new_nav_l    
            },100);    
        }    
    });                 
      
});  
</script>         
      
</body>
</html>
