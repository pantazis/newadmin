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
    var top_nav= {};
    top_nav.arr=[];    
    top_nav.num = 0;   
 
    top_nav.open_class = [];

    function menu_subcategory_open (parent_Element,open_class,listChildElement){
        
 
    $(parent_Element).click(function(){ 

        top_nav.parent_Element = parent_Element;
        top_nav.listChildElement = listChildElement;
        top_nav.class = open_class;
        

     
        
        
         
        if(top_nav.arr.length>1){
            top_nav.arr.shift();
        }
        top_nav.arr.push(this);
        lastElement = top_nav.arr[top_nav.arr.length-1]; 
        prevElement =  top_nav.arr[top_nav.arr.length-2]     
        top_nav.open_class.push(open_class); 
        $(top_nav.open_class).each(function(){ 
            if( $("."+this).length!=0 ){         
            $("."+this)[0].classList.remove(this);
            }
            
        });
        
        
       
        
        if( top_nav.arr.length >= 2 && lastElement == prevElement){
            top_nav.num++
        }else{
            top_nav.num=0;
        } 

        console.log(top_nav.num);
        
        if(top_nav.num%2==0){
           
            $(lastElement).addClass(open_class);
            }else{
            $(lastElement).removeClass(open_class);
        }

          
          

    });

  
}



$("body").click(function(e){
   // top_nav.parent_Element;
   // top_nav.top_nav.listChildElement;
   // top_nav.class;


   console.log(top_nav.parent_Element);

  

   if($(e.target).closest(top_nav.parent_Element).length==0 ){               
    $(top_nav.parent_Element).removeClass(top_nav.class);

};
    
    if($(e.target).closest(top_nav.listChildElement).length!=0 ){                    
    $(e.target).closest(top_nav.parent_Element).addClass(top_nav.class);
    top_nav.num=0;
};



  

  
});
    



        
    



menu_subcategory_open (".nav-list-item","opennav1",".custom-popup");
menu_subcategory_open (".nav-list-item2","opennav1",".sub-category");






   
  })();