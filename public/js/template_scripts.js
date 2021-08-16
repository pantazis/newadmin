(function () {
    var $ = window.$

// navgation open close
    $(".logo").click(function () {
        $("body").toggleClass("closeNav")
    });

    $(".logo-button").click(function () {
        $("body").addClass("openMenuLeft");
        $("body").removeClass("openMenuRight"); 
    });

    $("nav.sidebar.navbar").click(function(e){                
       if( $(e.target).closest(".side-nav-list").length==0){
          $("body").removeClass("openMenuLeft");
          $("body").removeClass("openMenuRight"); 
       }
    });
    
    $(".fi-sr-menu-burger").click(function(){
        $("body").addClass("openMenuRight");
        $("body").removeClass("openMenuLeft");    

    })

    /*activate */
    $(".light").click(function(){
        if($("body").hasClass("isNotActive")){            
     
            $("body").addClass("isActive");
            $("body").removeClass("isNotActive");

        }else{
            $("body").removeClass("isActive");
            $("body").addClass("isNotActive");
           
        }
    });

   
    var isDark = localStorage.getItem('dark');
 
    
    if(isDark==null){localStorage.setItem('dark', 'false');}
    isDark = localStorage.getItem('dark');
  

    if(isDark=="true"){
        $(".toggle-container .toggle-checkbox").prop( "checked",false );
        $("body").addClass("dark");

    }

    if(isDark=="false"){
        $(".toggle-container .toggle-checkbox").prop( "checked",true );
        $("body").removeClass("dark");

    }




    $(".toggle-container").click(function(){
      var isChecked =  $(this).find(".toggle-checkbox").prop( "checked" );
      
      if(isChecked){
        $("body").removeClass("dark");
        localStorage.setItem('dark', 'false');       

      }else{
      
        $("body").addClass("dark");
        localStorage.setItem('dark',"true");
      }

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


  

  

   if($(e.target).closest(top_nav.parent_Element).length==0 ){               
    $(top_nav.parent_Element).removeClass(top_nav.class);

};
    
    if($(e.target).closest(top_nav.listChildElement).length!=0 ){                    
    $(e.target).closest(top_nav.parent_Element).addClass(top_nav.class);
    top_nav.num=0;
};
});

$("li.nav-list-item2").each(function(){        
    if($(this).find(".sub-category").length!=0){
        $(this).addClass("subcategory");
        
    };
});
    



        
    



menu_subcategory_open (".nav-list-item","opennav1",".custom-popup");
menu_subcategory_open (".nav-list-item2","opennav1",".sub-category");
menu_subcategory_open (".nav-icon-3","opennav1",".popup-notifications");






   
  })();