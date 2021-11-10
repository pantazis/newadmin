(function () {
  var $ = window.$;
  window.addActionObj = {};
  // noanιmαtion
  $(document).ready(function () {
    $("body").removeClass("noanimαtion");
    activeTab();
    $(this).scrollTop(0);
    tableHeadtop(0);
   // screenSize()
  });



  var rtime;
  var timeout = false;
  var delta = 200;




  var menuIsClose = localStorage.getItem("closeNav");

  if (menuIsClose == "true"){
    $("body").addClass("closeNav");
    }

  if (menuIsClose == "false"){
    $("body").removeClass("closeNav");
  }













  $(window).resize(function () {
    noanimαtion();
    tableHeadtop(0);
  
  });


  window.tableHeadtop=function(addheight){
    var navheight =$("nav.sidebar.top").height();
var filterheight =$(".filter-parent")[0].offsetHeight+addheight;


$("thead").css("top",navheight+filterheight+"px");

  }

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
    } else {
      timeout = false;
      $("body").removeClass("noanimαtion");
    }
  }

  var footerTemplate = {
    "search":".nav-icon-3.search",
    "notification": ".nav-icon-3.fi-sr-bell1",
    "cart":".nav-icon-3.fi-sr-shopping-cart",
    "profile":".nav-icon-3.fi-sr-user"

    }

    var footerTarget ={
     "search":".nav-icon-3.search-f .popup-notifications",
    "notification": ".nav-icon-3.notification-f .popup-notifications",
    "cart":".nav-icon-3.cart-f .popup-notifications",
    "profile":".nav-icon-3.user-f .popup-notifications"


    }


    for (const [key, value] of Object.entries(footerTemplate)) {
        clonePopup(value,key);
    }

    function clonePopup(value1,target){
     var htmlel =  $(value1).find(".popup-notifications").html();
     $(footerTarget[target]).html(htmlel);
    }

  //.info-title
  // .info-container
  // .info-row-con
  // .info-row-in

  // navgation open close

  function gridRefresh(){
    if(typeof grid  != "undefined"){
      var navbarleft = $("nav.sidebar.navbar.left")[0];
      navbarleft.addEventListener("webkitTransitionEnd",function(){ grid.refreshItems().layout()});
      navbarleft.addEventListener("transitionend",function(){
         grid.refreshItems().layout();
         });

    }

  }
  $(".logo-box,.logo-text").click(function(){
    url = $(this).attr("data-href");
    window.location.assign(url);
    l

  });

  $(".burger-menu").click(function () {



var menuIsCloseCheck = $("body").hasClass("closeNav");
if (menuIsCloseCheck == true ){
  localStorage.setItem("closeNav", "false");
}
if (menuIsCloseCheck == false ){
  localStorage.setItem("closeNav", "true");
}


    $("body").toggleClass("closeNav");
    gridRefresh();

  });




  $(".fi-sr-menu-burger_left.only-mobile").click(function () {
    $(".logo-button").click();
  });
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
  });
  /* activate */
  $("#setActiveButton").click(function () {
    if ($("body").hasClass("isNotActive")) {
      $("body").addClass("isActive");
      $("body").removeClass("isNotActive");
    } else {
      $("body").removeClass("isActive");
      $("body").addClass("isNotActive");
    }
  });


function checklocked(el){
  var parent =$(el).closest(".big-row-parent");
  var islocked =parent.hasClass("lock");
  if(islocked){
    parent.removeClass("lock");
    parent.find(".small-gray").html("Unlocked");
  }else{
    parent.addClass("lock");
    parent.find(".small-gray").html("locked");
  }
}
$(".d1").each(function(){
  checklocked(this);
});



$(".d1").click(function(){
  checklocked(this);

});

  var isDark = localStorage.getItem("dark");
  if (isDark == null) {
    localStorage.setItem("dark", "false");
  }
  isDark = localStorage.getItem("dark");
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
      localStorage.setItem("dark", "false");
    } else {
      $("body").addClass("dark");
      localStorage.setItem("dark", "true");
    }
  });
  $("nav.sidebar.navbar").mouseenter(function () {
    $("body").addClass("hover");
  });
  $("nav.sidebar.navbar").mouseleave(function () {
    $("body").removeClass("hover");
  });
  //top nav popup open close
  var top_nav = {};
  top_nav.arr = [];
  top_nav.num = 0;
  top_nav.open_class = [];


  function directSearchCategories(target,parent){


    var hasClassSearchTop =$(target).closest(".search-top").length;
    //console.log($(target));

    if(hasClassSearchTop ){
      return  true;
    }else{
      return  false;
    }



  }

  function menu_subcategory_open(parent_Element, open_class, listChildElement) {


    $(parent_Element).click(function (event) {



     var stopFun = directSearchCategories(event.target,this);
      //console.log(stopFun)
      if(stopFun){
        return;
      }



      top_nav.parent_Element = parent_Element;
      top_nav.listChildElement = listChildElement;
      top_nav.class = open_class;
      if (top_nav.arr.length > 1) {
        top_nav.arr.shift();
      }
      top_nav.arr.push(this);
      lastElement = top_nav.arr[top_nav.arr.length - 1];
      prevElement = top_nav.arr[top_nav.arr.length - 2];
      top_nav.open_class.push(open_class);
      $(top_nav.open_class).each(function () {
        if ($("." + this).length != 0) {
          $("." + this)[0].classList.remove(this);
        }
      });
      if (top_nav.arr.length >= 2 && lastElement == prevElement) {
        top_nav.num++;
      } else {
        top_nav.num = 0;
      }
      if (top_nav.num % 2 == 0) {
        $(lastElement).addClass(open_class);
        $("body").addClass("noscroll");
      } else {
        $(lastElement).removeClass(open_class);
        $("body").removeClass("noscroll");
      }
    });
  }

  $("body").click(function (e) {





    if ($(e.target).closest(top_nav.parent_Element).length == 0) {
      $(top_nav.parent_Element).removeClass(top_nav.class);
      $("body").removeClass("noscroll");
    }

    if ($(e.target).closest(top_nav.listChildElement).length != 0 ) {
      $(e.target).closest(top_nav.parent_Element).addClass(top_nav.class);
      $("body").addClass("noscroll");
      top_nav.num = 0;
    }

  });

  $("li.nav-list-item2").each(function () {
    if ($(this).find(".sub-category").length != 0) {
      $(this).addClass("subcategory");
    }
  });

  //create mobile actions
  var actions = $(".actions").clone().removeClass("btn");
  /*

  var elLength =   $(".actions").length;

  if(elLength < 4){
    elLength = 1;
    elPercent = "100%" ;
    elPercentMobile = "100%" ;

  }
  var root = $(':root');
  root.css('--elPercent',elPercent);
  */


  actions.each(function (index) {
    var classes = this.classList.value.replace("outline-", "");
    var newel = $(this).attr("class", classes)[0].outerHTML;
    var newParent = `<div class="dimensions">
                    <div class="resio">
                    <div class="gradientbg"></div>
                        ${newel}
                    </div>
                </div>`;
    $(".mobile_tabs").append(newParent);
  });


  function getActiveTab(el){
    $(".tab-in").removeClass("active");
    var activeEL=$(el).addClass("active");
    var num = activeEL.attr("data-active");
    $(".container.tab").removeClass("active");
    $(".container.tab.tab"+num).addClass("active");

  }

  $(".tab-in").click(function () {
    getActiveTab(this)



    var allTbas = $(".tab-in").length;
    var isEl = $(this).attr("data-active");
    var elwidth = 100 / allTbas;
    var move = parseInt(Math.ceil(elwidth * isEl)) + "%";
    elwidth = parseInt(elwidth) + "%";
    $(".activebox").css("left", move).css("width", elwidth);
  });

  menu_subcategory_open(".nav-list-item", "opennav1", ".custom-popup");
  menu_subcategory_open(".nav-list-item2", "opennav1", ".sub-category");
  menu_subcategory_open(".nav-icon-3", "opennav1", ".popup-notifications");
 // menu_subcategory_open(".nav-list.search", "opennav1", ".custom-popup");
  menu_subcategory_open(".alert-server", "opennav1", ".custom-popup");




  /* hide loader */

  if (sessionStorage.getItem("loaded") == "true") {
    $(".coverdiv.loader").addClass("hide-loader disable");
  }

  $(".tab-in").click(function (e) {
    e.preventDefault();
    var tablink = $(this).attr("data-tab-id");
    location.assign("#" + tablink);
  });

  function activeTab() {
    if (location.hash != "") {
      var tablink = location.hash.replace("#", "");
      $(".tab-in[data-tab-id='" + tablink + "']").click();
    }
  }


  $(".addAction").click(function(){
    makeElement(this);

   if(addActionObj.cloneEL.length>0){
    if(addActionObj.limit > addActionObj.numOfRow){
      addActionObj.lastEl.before(addActionObj.cloneEL);
      var openIcon = addActionObj.cloneEL.find(".info-icon.action1")[0];
      openCloseRow(openIcon);
      var form =addActionObj.parent.find("form[action]")[0];
      initValidation(form);

      $(openIcon).click();
      addActionObj.removeEl();
    }
    hideShowElments();

   }


  });



  function removeRow(el){
    $(el).click(function(){
      makeElement(this);
      if(addActionObj.numOfRow > 1){
      $(this).closest(".info-row").remove();

      if(addActionObj.parent.find(".info-form[data-collapsed='false']").length == 0){
      addActionObj.parent.removeClass("form_open");
      }

    }
    hideShowElments();

    });


  }
  function hideShowElments(){
    countRow();
    if(addActionObj.numOfRow==1){
      addActionObj.parent.find(".info-icon.action0").hide();
    }else{
      addActionObj.parent.find(".info-icon.action0").show();
    }
    if(addActionObj.limit > addActionObj.numOfRow){
      addActionObj.parent.find(".info-row.last").show();
    }else{
      addActionObj.parent.find(".info-row.last").hide();
    }

  }




  removeRow(".info-icon.action0");


  function countRow(){
    addActionObj.numOfRow =addActionObj.parent.find(".info-row:not(.hide):not(.last)").length;
  }

window.makeElement = function(el){

   addActionObj.parent = $(el).closest(".info-row-con");
   addActionObj.lastEl = addActionObj.parent.find(".info-row.last");
   addActionObj.cloneEL = addActionObj.parent.find(".info-row.hide").clone().removeClass("hide");
   addActionObj.removeEl = () => { removeRow(addActionObj.cloneEL.find(".info-icon.action0")) };
   addActionObj.numOfRow =addActionObj.parent.find(".info-row:not(.hide):not(.last)").length;
   addActionObj.length = addActionObj.cloneEL.length;
   addActionObj.limit = parseInt(addActionObj.parent.attr("data-limit"));
   addActionObj.countRow = () => {countRow()};
   addActionObj.hideShowElments = () => {hideShowElments()};


  }



  $(".checkbox").click(function(){
    if ($(this).prop('checked')) {
      $('#FreeHosting').modal('show');
    } else {
      $('#noFreeHosting').modal('show');
    }
  });

  $(".message").click(function(e){
    var del = $(e.target).closest(".remove").length;
    var el = $(this);
   /*
    if(del > 0){
      el.remove();
    }*/
    el.addClass("read")

    }
  )

  $(".read-all").click(function(){
    $(".message").addClass("read")

  });

 var messageCont =  $(".popup-notifications .main-el");
 messageCont.mouseenter(function(){
  noScrollToBody(true);

  });
messageCont.mouseleave(function(){
  noScrollToBody(false);

  });

  function noScrollToBody(isTrue){
   var hasScrollBar = messageCont[0].scrollHeight > messageCont[0].clientHeight ? true : false;

    if(isTrue && hasScrollBar){
      $("body").css("overflow","hidden");

    }else{
      $("body")[0].style.removeProperty("overflow");

    }
  };


  $(".bubble").click(function(){
    var textin = $(this).text();
    $(".bubble").removeClass("active");
    $(this).addClass("active");
    $(".search-textcustom>.text").text(textin);

  });

  const textarea = document.getElementsByTagName("textarea");
  for (let i = 0; i < textarea.length; i++) {
  textarea[i].setAttribute("style", "height:" + (textarea[i].scrollHeight) + "px;overflow-y:hidden;");
  textarea[i].addEventListener("input", OnInput, false);
  }

  function OnInput() {
  this.style.height = "auto";
  this.style.height = (this.scrollHeight) + "px";
}


window.bindinput={
val:(el)=>{ $(".search-top,.search-mobile").val($(el).val())}
}














  $(".select2").select2();

  setTimeout(function () {
    $(".coverdiv.loader").addClass("hide-loader");
    sessionStorage.setItem("loaded", "true");
    //display: none;
  }, 2500);
})();
