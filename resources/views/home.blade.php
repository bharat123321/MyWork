 <!DOCTYPE html>  
<html>  
<head>  
<script type="text/javascript" src="http://laravel/js/jquery-3.4.1.min.js"></script>
    
 <script>    
$(document).ready(function(){    
  $("button").click(function(){    
    $("#div1").delay(1000).remove();    
});    
});    
   
 
$(document).ready(function(){  
    $("#flip").click(function(){  
        $("#panel").slideToggle("slow");  
    });  
 });
$(document).ready(function(){  
    $("button").click(function(){  
        $("div").animate({  
            height: 'toggle'  
     });  
    });  
}); 

</script>    
</head>    
<body>    
<button>Click me</button><br>  
<div style="height:100px;width:200px;padding:10px;margin:3px;border:1px solid blue;background-color:lightpink;"></div><br>  
<style>   
#panel, #flip {  
    padding: 5px;  
    text-align: center;  
    background-color: #00FFFF;  
    border: solid 1px #c3c3c3;  
}  
#panel {  
    padding: 50px;  
    display: none;  
}  
</style>  
</head>  
<body>  
<div id="flip">Click to slide down panel</div>  
<div id="panel">Hello javatpoint.com!   
It is the best tutorial website to learn jQuery and other languages.</div>  
<button>Start Animation</button>  
 <div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>  

</body>    
</html>  
 