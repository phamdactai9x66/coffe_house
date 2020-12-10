window.onload=function(){
    wait_HTML();
}
function wait_HTML(){
 
    var image_origin=document.getElementById("image_origin1");
    var image_clone=document.querySelector("#big_img >img");
    var name_clone=document.querySelector("#big_img >p");
    image_origin.onclick=function(){
       
        document.getElementById("big_img").style.display="block";
        image_clone.src=this.src;
        name_clone.innerText=this.alt;
    }

    document.getElementById("next").onclick=function(){
        document.getElementById("big_img").style.display="none";
    }

    var element_bg=document.getElementsByClassName("search_full_screen")[0];
    
    var click_element=document.getElementsByClassName("searching_form")[0];
    // var click_element2=document.getElementsByClassName("searching_form")[1];
    click_element.addEventListener("click",function(){
        // element_bg.style.visibility="visible";
        Object.assign(element_bg.style,{
            visibility:"visible",
            transform : "scale(1)",
            opacity: "1"
        })
    });
   
    window.onclick=function(select_element){
       
        if(select_element.target == element_bg){
            // alert("das");
            Object.assign(element_bg.style,{
                visibility:"hidden",
                transform : "scale(0.9)",
                opacity: "0"
            })
        }
    }
   
}
