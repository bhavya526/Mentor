<div  style='background-color:red; width:300px; height:auto;'>
    <img src='admin images/arrow.png' style='width:20px;height:22px;margin-left:270px;margin-top:10px' id='btn1' onclick="">
      <div id="green" style='display:none;background:black;color:white;width:100%;height:auto;;margin-top:20px'>
         Bhavya SHarma<br>
	     Anuta<br>
	     Bhavhsdjh
      </div>

       
       <img src='admin images/arrow.png' style='width:20px;height:22px;margin-left:270px;margin-top:10px' id='btn2' onclick="">
         <div id="orange" style='display:none;background:black;color:white;width:100%;height:auto;;margin-top:20px'>
           Bhavya SHarma<br>
	       Anuta<br>
	       Bhavhsdjh
        </div>
    
</div>

<script>
   var box1=document.getElementById("green");
   
   
   document.getElementById("btn1").addEventListener("click",function()
   {
      
	  if(box1.style.display=="none")
	  {
	       box1.style.display="block";
		   document.getElementById("btn1").src="admin images/divdownload.png";
		   
	  }
	  else
	  {
	      box1.style.display="none"; 
          document.getElementById("btn1").src="admin images/arrow.png";		  
	  }
   });
   var box2=document.getElementById("orange");
   
   
   document.getElementById("btn2").addEventListener("click",function()
   {
      
	  if(box2.style.display=="none")
	  {
	       box2.style.display="block";
		   
	  }
	  else
	  {
	      box2.style.display="none";  
	  }
   });
 
  </script>