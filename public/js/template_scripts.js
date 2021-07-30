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


    var side_nav= {};
    side_nav.arr=[];
    side_nav.num = 0;
    $(".nav-list-item2").click(function(){
        if(side_nav.arr.length>2){
            side_nav.arr.shift();
        }
        side_nav.arr.push(this);
       
        $(".nav-list-item2").removeClass("opennav1");
        
        if( side_nav.arr.length >= 2 && side_nav.arr[side_nav.arr.length-1]==side_nav.arr[side_nav.arr.length-2]){
            
            side_nav.num++
        }else{
            side_nav.num=0;
        }
        if(side_nav.num%2==0){
            $(this).addClass("opennav1");
            }else{
            $(this).removeClass("opennav1");
            }

    });

    $("li.nav-list-item2").each(function(){
        
        if($(this).find(".sub-category").length!=0){
            $(this).addClass("subcategory");
            
        };
    });


    //top nav popup open close

    var top_nav= {};
    top_nav.arr=[];
    top_nav.num = 0;
    $(".nav-list-item").click(function(){
        if(top_nav.arr.length>2){
            top_nav.arr.shift();
        }
        top_nav.arr.push(this);
       
        $(".nav-list-item").removeClass("opennav1");
        
        if( top_nav.arr.length >= 2 && top_nav.arr[top_nav.arr.length-1]==top_nav.arr[top_nav.arr.length-2]){
            
            top_nav.num++
        }else{
            top_nav.num=0;
        }
        if(top_nav.num%2==0){
            $(this).addClass("opennav1");
            }else{
            $(this).removeClass("opennav1");
            }

    });
    



        
    









   
  })();