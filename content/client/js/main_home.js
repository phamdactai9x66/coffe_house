window.onload=function(){
    wait_HTML();
}
function wait_HTML(){
    function scroll_visible(){
        var class_top=document.getElementsByClassName("parent-filex")[0];
        var class_top2=document.querySelector(".parent-filex2 > .filex");
        
        if(window.pageYOffset >2){
            class_top.classList.add("unvisible");
        
        }else{
            class_top.classList.remove("unvisible");
           
        }
        if(window.pageYOffset > 20){
            class_top2.style.top="0px";
            // alert("xin chao");
        }else{
            class_top2.style.top="-150px";
        }
    }
    var element_bg=document.getElementsByClassName("search_full_screen")[0]
    
    var click_element=document.getElementsByClassName("searching_form")[0];
    var click_element2=document.getElementsByClassName("searching_form")[1];
    click_element.addEventListener("click",function(){
        // element_bg.style.visibility="visible";
        Object.assign(element_bg.style,{
            visibility:"visible",
            transform : "scale(1)",
            opacity: "1"
        })
    });
    click_element2.addEventListener("click",function(){
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

    window.addEventListener("scroll",scroll_visible);
    // window.onclick=function(a){
    //     if(a.target == body){
    //         document.getElementById("mySidenav").style.width = "0";
    //         document.getElementById("main").style.marginLeft= "0";
    //         document.body.style.backgroundColor = "white";
    //     }
    // }
}