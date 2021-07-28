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

    var arr= [];
    $(".nav-list-item2").click(function(){
        arr.push(this);
        debugger;
        
       
        $(".nav-list-item2").removeClass("opennav1");
        if( arr.length >= 2 && arr[arr.length-1]==arr[arr.length-2]){
            $(this).removeClass("opennav1");
        }else{
            $(this).addClass("opennav1");

        }    
                
       
        

    });

    $("li.nav-list-item2").each(function(){
        
        if($(this).find(".sub-category").length!=0){
            $(this).addClass("subcategory");
            
        };
    })
        
    









   
  })();