window.onload=function(){
    wait_HTML();
}
function wait_HTML(){
   
   
        try{
            var element_bg=document.getElementsByClassName("search_full_screen")[0]
    
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
    // var list_product=document.querySelectorAll(".grid-bottom > li").length;
    // // console.log(list_product.length);
    // document.getElementById("count_product").innerText=list_product;
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
        }catch(err){
            console.log(err.stack);
        }
    try{
        var save_select=document.getElementById("option_kind");
        var ul,li,p,a,text;
        ul=document.getElementsByClassName("grid-bottom")[0];
        li=ul.getElementsByTagName("li");
       save_select.addEventListener("click",function(){
            
            for(let i=0; i < li.length;i+=1){
                text=li[i].getElementsByClassName("count_money")[0].innerText.slice(1);
                if(this.value ==1){
                    if(text > 0 && text < 100){
                        li[i].style.display="block";
                    }else{
                        li[i].style.display="none";
                    }
                }else if(this.value ==2){
                    if(text > 101 && text < 300){
                        li[i].style.display="block";
                    }else{
                        li[i].style.display="none";
                    }
                }else if(this.value ==3){
                    if(text > 301 ){
                        li[i].style.display="block";
                    }else{
                        li[i].style.display="none";
                    }
                }
                else{
                   
                    li[i].style.display="block";
                }
                // console.log(li[i].getElementsByClassName("count_money")[0].innerText.slice(1));
            }
       });
    }catch(err){
        console.log(err.stack);
    }



    // var array=[];
// var array_new="";
// var string="";
//    for(let i=0 ; i < li.length; i+=1){
//   // console.log(value.style.display == "block");
//   if(li[i].style.display == "block"){
//     array[i]=i;
    
//     }else{
//         array[i]="0";
//     }
//     if(array[i] != "0"){
//         array_new+=array[i].length+",";
//         // console.log(array[i].length);
//     }
//    }
   
//    string=array_new.split(",");
// //    console.log(string.length );

     
//    console.log(array.length);y
  
}