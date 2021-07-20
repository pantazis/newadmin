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









   
  })();