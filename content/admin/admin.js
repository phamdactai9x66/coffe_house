window.onload=function(){
    wait_HTML();
}
function wait_HTML(){
    var open_nav=document.getElementsByClassName("open_nav")[0];
    var next=document.querySelector(".next");
    open_nav.addEventListener("click",function(){
       document.getElementById("first_nav").style.marginLeft="250px";
       document.getElementById("aside_left").style.width="250px";
       document.querySelector(".main_center").style.marginLeft="250px";
       document.getElementById("fix_full").style.width="100%";
    });
    next.addEventListener("click",function(){
        document.getElementById("first_nav").style.marginLeft="0px";
        document.getElementById("aside_left").style.width="0px";
        document.querySelector(".main_center").style.marginLeft="0px";
        document.getElementById("fix_full").style.width="0%";
    });
    window.onclick=function(check_event){
        var fix_full=document.querySelector("#fix_full");
        if(check_event.target == fix_full){
            document.getElementById("first_nav").style.marginLeft="0px";
            document.getElementById("aside_left").style.width="0px";
            document.querySelector(".main_center").style.marginLeft="0px";
            document.getElementById("fix_full").style.width="0%";
        }
    }
    
    var element_searching=document.getElementById("searching");
    element_searching.addEventListener("keyup",function(){
       var table,tr,td,searching,text;
       searching=this.value.toUpperCase();
        table=document.getElementById("table_parent2");
       table.style.backgroundColor
        tr=table.querySelectorAll("tbody > tr");
        for(let i=0; i < tr.length;i+=1){
            td=tr[i].getElementsByTagName("td")[1];
           if(td){
               text=td.innerText || td.textContent;

               if(text.toUpperCase().indexOf(searching) > -1){
                if(searching){
                    tr[i].style.backgroundColor="red";
                }else{
                    tr[i].style.backgroundColor="white";
                }
             
               }else{
                tr[i].style.backgroundColor="white";
               
               
               }
           }
        }
    });
}