


(function () {
    var $ = window.$

    // noanιmαtion
    $(document).ready(function () {
        $("body").removeClass("noanimαtion");
    });


    var rtime;
    var timeout = false;
    var delta = 200;

    

    $(document).ready(function(){
        $(this).scrollTop(0);
    });



    $(window).resize(function () {
        noanimαtion();


    });



    function noanimαtion() {
        $("body").addClass("noanimαtion");
        rtime = new Date();
        if (timeout === false) {
            timeout = true;
            setTimeout(resizeend, delta);
        }

    }

    function resizeend() {
        if (new Date() - rtime < delta) {
            setTimeout(resizeend, delta);
        }
        else {
            timeout = false;
            $("body").removeClass("noanimαtion");
        }
    }




    $(".info-title").click(function () {

        var parent = $(this).closest(".info-container");
        var innercont = parent.find(".info-row-con");
        if (parent.hasClass("open")) {

            parent.removeClass("open");
            var heightEl = parent.find(".info-row-in").height();
            innercont.css("height", heightEl + "px");

        }
        else {
            parent.addClass("open");
            var heightEl = parent.find(".info-row-in").height();
            innercont.css("height", heightEl + "px");
        }
        innercont[0].ontransitionend = () => {
            innercont.attr("style", "")
        };



    });






    // navgation open close
    $(".logo").click(function () {
        $("body").toggleClass("closeNav")
    });
    $(".fi-sr-menu-burger_left.only-mobile").click(function () {
        $(".logo-button").click();

    })

    $(".logo-button").click(function () {       
        $("body").addClass("openMenuLeft");
        $("body").removeClass("openMenuRight");
    });

    $("nav.sidebar.navbar").click(function (e) {
        if ($(e.target).closest(".side-nav-list").length == 0) {
            $("body").removeClass("openMenuLeft");
            $("body").removeClass("openMenuRight");
        }
    });

    $(".fi-sr-menu-burger").click(function () {
        $("body").addClass("openMenuRight");
        $("body").removeClass("openMenuLeft");

    })

    /*activate */
    $("#setActiveButton").click(function () {
        if ($("body").hasClass("isNotActive")) {

            $("body").addClass("isActive");
            $("body").removeClass("isNotActive");

        }
        else {
            $("body").removeClass("isActive");
            $("body").addClass("isNotActive");

        }
    });


    var isDark = localStorage.getItem('dark');


    if (isDark == null) { localStorage.setItem('dark', 'false'); }
    isDark = localStorage.getItem('dark');


    if (isDark == "true") {
        $(".toggle-container .toggle-checkbox").prop("checked", false);
        $("body").addClass("dark");

    }

    if (isDark == "false") {
        $(".toggle-container .toggle-checkbox").prop("checked", true);
        $("body").removeClass("dark");

    }




    $(".toggle-container").click(function () {
        var isChecked = $(this).find(".toggle-checkbox").prop("checked");

        if (isChecked) {
            $("body").removeClass("dark");
            localStorage.setItem('dark', 'false');

        }

        else {

            $("body").addClass("dark");
            localStorage.setItem('dark', "true");
        }

    });



    $("nav.sidebar.navbar").mouseenter(function () {
        $("body").addClass("hover");
    })
    $("nav.sidebar.navbar").mouseleave(function () {
        $("body").removeClass("hover");
    });





    //top nav popup open close
    var top_nav = {};
    top_nav.arr = [];
    top_nav.num = 0;

    top_nav.open_class = [];

    function menu_subcategory_open(parent_Element, open_class, listChildElement) {



        $(parent_Element).click(function () {

            top_nav.parent_Element = parent_Element;
            top_nav.listChildElement = listChildElement;
            top_nav.class = open_class;


            if (top_nav.arr.length > 1) {
                top_nav.arr.shift();
            }
            top_nav.arr.push(this);
            lastElement = top_nav.arr[top_nav.arr.length - 1];
            prevElement = top_nav.arr[top_nav.arr.length - 2]
            top_nav.open_class.push(open_class);

            $(top_nav.open_class).each(function () {
                if ($("." + this).length != 0) {
                    $("." + this)[0].classList.remove(this);
                }

            });




            if (top_nav.arr.length >= 2 && lastElement == prevElement) {
                top_nav.num++
            } else {
                top_nav.num = 0;
            }



            if (top_nav.num % 2 == 0) {

                $(lastElement).addClass(open_class);
            }
            else {
                $(lastElement).removeClass(open_class);
            }




        });


    }



    $("body").click(function (e) {
        // top_nav.parent_Element;
        // top_nav.top_nav.listChildElement;
        // top_nav.class;






        if ($(e.target).closest(top_nav.parent_Element).length == 0) {
            $(top_nav.parent_Element).removeClass(top_nav.class);

        };

        if ($(e.target).closest(top_nav.listChildElement).length != 0) {
            $(e.target).closest(top_nav.parent_Element).addClass(top_nav.class);
            top_nav.num = 0;
        };
    });





    $("li.nav-list-item2").each(function () {
        if ($(this).find(".sub-category").length != 0) {
            $(this).addClass("subcategory");

        };
    });

    //create mobile actions





    var actions = $(".actions").clone().removeClass("btn");
    actions.each(function(index){       
        
        var classes = this.classList.value.replace("outline-", "");
        var newel = $(this).attr("class",classes)[0].outerHTML;     
        var newParent =`<div class="dimensions">
                    <div class="resio">
                    <div class="gradientbg"></div>
                    
                        ${newel}
                    </div>
                </div>`;

        $(".mobile_tabs").append(newParent);
    });


    







    $(".tab-in").click(function () {
        $(".tab-in").removeClass("active");
        $(this).addClass("active");
        var allTbas = $(".tab-in").length;
        var isEl = $(this).attr("data-active");
        var elwidth = (100 / allTbas);
        var move = parseInt(Math.ceil((elwidth * isEl))) + "%";
        elwidth = parseInt(elwidth) + "%";
        $(".activebox").css("left", move).css("width", elwidth);



    });












    menu_subcategory_open(".nav-list-item", "opennav1", ".custom-popup");
    menu_subcategory_open(".nav-list-item2", "opennav1", ".sub-category");
    menu_subcategory_open(".nav-icon-3", "opennav1", ".popup-notifications");
    menu_subcategory_open(".nav-list.search", "opennav1", ".custom-popup");



    /*hide loader*/
    // console.log(sessionStorage.getItem('loaded'));
    if (sessionStorage.getItem('loaded') == 'true') {
        $(".coverdiv.loader").addClass("hide-loader disable");

    }
    setTimeout(function () {

        $(".coverdiv.loader").addClass("hide-loader");
        sessionStorage.setItem('loaded', 'true');


        //display: none;
    }, 2500);




})();
