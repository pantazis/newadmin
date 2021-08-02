(function () {
    var $ = window.$

// navgation open close
    $(".logo").click(function () {
        $("body").toggleClass("closeNav")
    });


    $("a.btn.btn-primary.my-2").click(function (event) {        
        event.preventDefault(),
        $("body").toggleClass("dark");
    });

    $("nav.sidebar.navbar").mouseenter(function () {        
        $("body").addClass("hover");
    })
    $("nav.sidebar.navbar").mouseleave(function () {
        $("body").removeClass("hover");
    });





    //top nav popup open close

    function menu_subcategory_open (parent_Element,open_class,listChildElement){
  
    var top_nav= {};
    top_nav.arr=[];    
    top_nav.num = 0;
 
    $(parent_Element).click(function(){ 
        
         
        if(top_nav.arr.length>1){
            top_nav.arr.shift();
        }
        top_nav.arr.push(this);       
        $(parent_Element).removeClass(open_class);      
        
        if( top_nav.arr.length >= 2 && top_nav.arr[top_nav.arr.length-1]==top_nav.arr[top_nav.arr.length-2]){
            top_nav.num++
        }else{
            top_nav.num=0;
        }
       
        
        if(top_nav.num%2==0){
            $(this).addClass(open_class);
            }else{
            $(this).removeClass(open_class);
        }

          
          

    });

    $("body").click(function(e){
        var element = top_nav.arr[top_nav.arr.length-1];
       
        if($(e.target).closest(parent_Element).length==0 ){             
            $(element).removeClass(open_class); 

        };
        if($(e.target).closest(listChildElement).length!=0 ){            
            $(element).addClass(open_class);
        };
      
      
    })
}
    



        
    



menu_subcategory_open (".nav-list-item","opennav1",".custom-popup");
//menu_subcategory_open (".nav-list-item","opennav1")





   
  })();