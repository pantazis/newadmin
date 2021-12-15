tableElements = {};

tableElements.checkbox = function (title, index) {
	var el = `<input class="checkboxTable" type="checkbox" id="${title}${index}" name="${title}" value="Bike",>`;
	return el;
};

tableElements.filters = function (title) {
	var el = `<div class="filter-box">
  <div class="filter-title">${title}</div>
  <div class="filters">
    <span class="icon-fi-sr-caret-up1" ></span>
    <span class="icon-fi-sr-caret-down1" ></span>
  </div>
</div>`;
	return el;
};

tableElements.email = function (title) {
	var el = `<a href="" class="email">${title}</a>`;
	return el;
};

tableElements.link = function (title) {
	var el = `<a href="">${title}</a>`;
	return el;
};

tableElements.date = function (title) {
	title = title.split(" ");
	var el = `<div class="flex-date">
    <span class="table-date">${title[0]}</span>
    <span class="table-time">${title[1]}</span>
    </div>`;
	return el;
};

tableElements.isActive = function () {
	var isActive = Math.round(Math.random());
	if (isActive) {
		var Elclass = "isActive";
		var text = "ΕΧΕΙ ΛΗΞΕΙ";
	} else {
		var Elclass = "isNotActive";
		var text = "ΚΑΤΑΧΩΡΗΜΕΝΟ";
	}

	var el = `<div class="status ${Elclass}">
    <span class="light"></span>
    <span class="active-text">${text}</span>
    </div>`;
	return el;
};

tableElements.action = function () {
	var el = `<div class="actions-container">
    <div class="p-icon"><div class="icon-fi-sr-time-past"><div class="popaction shadow-1-strong">action1</div></div></div>
    <div class="p-icon"><div class="icon-fi-sr-pulse"><div class="popaction shadow-1-strong">action2</div></div></div>
    <div class="p-icon"><div class="icon-fi-sr-receipt"><div class="popaction shadow-1-strong">action3</div></div></div>
	<div class="p-icon"><div class="icon-fi-sr-power1"><div class="popaction shadow-1-strong">action4</div></div></div>
</div>`;
	return el;
};

tableElements.singleIcon = function (title) {
	var isActive = Math.round(Math.random() * 2);

	switch (isActive) {
		case 0:
			var elClass = "red";
			break;
		case 1:
			var elClass = "green";
			break;
		case 2:
			var elClass = "noColor";
			break;
	}

	var el = `<div class="singleIcon ${elClass}">
        <span class="${title}"></span>
        </div>`;
	return el;
};

tableElements.domainName = function (title) {
	var isActive = Math.round(Math.random());
	if (isActive) {
		var hideIcon = "hideIcon";
	} else {
		var hideIcon = "";
	}

	var isActive = Math.round(Math.random() * 2);

	switch (isActive) {
		case 0:
			var elClass = "red";
			break;
		case 1:
			var elClass = "green";
			break;
		case 2:
			var elClass = "noColor";
			break;
	}

	icon = `<div class="singleIcon ${elClass}">
        <span class="icon-id_protect1"></span>
        </div>`;

	var el = `<div class="domain-name">
	<div class="flex-left-el">
     <div class="icon-fi-sr-clock1 icon ${hideIcon}"></div>
     <a href="" class="link" title="${title}">${title}</a>
	 </div>
	 ${icon}
    </div>`;

	return el;
};

function createHeadOfTable() {
	var headTemplate = "<tr>";
	$(tabledata.head).each(function (index) {
		var title = this.title;
		if (this.width != null) {
			var style = `style="width: ${this.width}"`;
		}

		if (this.element != null) {
			title = tableElements[this.element](title);
		}
		headTemplate += `<th scope="col" ${style}>${title}</th>`;
	});
	headTemplate += "</tr>";
	$("thead").html(headTemplate);
}

function createDataOfTable() {
	var headTemplate = "";
	$(tabledata.rows).each(function (index) {
		var row = this;
		var rownum = index;

		headTemplate += "<tr>";
		$(row).each(function (index) {
			var title = tabledata.head[index].title;
			var hideTitle = tabledata.head[index].hideMobile == true ? "hide-t" : "";
			var hideAllMobile =
				tabledata.head[index].hideAllMobile == true ? "hide-t" : "";
			var value = this.value;

			if (this.element != null) {
				if (this.element == "checkbox") {
					value = tableElements[this.element](value, rownum);
				} else {
					value = tableElements[this.element](value);
				}
			}

			headTemplate += `<td data-label="${title}" class="${hideAllMobile}"><span class="title_mobile ${hideTitle}">${title}</span>${value}</td>`;
		});
		headTemplate += "</tr>";
	});
	$("tbody").html(headTemplate);
}

createHeadOfTable();
createDataOfTable();

$(".filters-label").click(function () {
	togglefilters();
	localStorageFilters();
});

var element = $(".filters-conatiner")[0];

function togglefilters() {
	if ($(".filters-conatiner").attr("data-collapsed") == "true") {
		expandSection(element);
		$("body").addClass("filteropen");	
	} else {
		collapseSection(element);
		$("body").removeClass("filteropen");
	}
}

var selectOneRowPar = $("tbody tr");
var selectOneRow = $(' tbody input[type="checkbox"]');
var clearAllSelections = $(".clearSelections");
var selectAllCheckPar = $("thead tr");
var selectAllCheck = $(' thead input[type="checkbox"]');

selectAllCheckPar.click(function () {
	multiRowSelection();
});
selectOneRow.click(function () {
	oneRowSelection(this);
});
clearAllSelections.click(function () {
	multiRowSelection(true);
});

function multiRowSelection(clear = false) {
	if (selectAllCheck.is(":checked")) {
		selectOneRowPar.find(selectOneRow).each(function () {
			this.checked = true;
			selectOneRowPar.addClass("selected");
		});
	} else {
		selectOneRowPar.find(selectOneRow).each(function () {
			this.checked = false;
			selectOneRowPar.removeClass("selected");
		});
	}

	if (clear == true) {
		selectOneRowPar.find(selectOneRow).each(function () {
			this.checked = false;
			selectOneRowPar.removeClass("selected");
		});
		selectAllCheck.prop("checked", false);
	}
	openActions();
	printSelectCount();
}

function oneRowSelection(el) {
	if ($(el).is(":checked")) {
		$(el).closest("tr").addClass("selected");
	} else {
		$(el).closest("tr").removeClass("selected");
	}
	openActions();
	printSelectCount();
}

function openActions() {
	var ischecked = $("table input").is(":checked");

	if (ischecked) {
		$(".selectionActionsContainer").addClass("open");
	} else {
		$(".selectionActionsContainer").removeClass("open");
	}
}

function printSelectCount() {
	var counterSel = $(".selected").length;
	if (counterSel == 1) {
		$(".selectionCount").html("Έχετε επιλέξει " + counterSel + " στοιχείo");
	}
	if (counterSel != 1) {
		$(".selectionCount").html("Έχετε επιλέξει " + counterSel + " στοιχεία");
	}
}

function localStorageFilters() {
	var tableFilters = $(".filters-conatiner").attr("data-collapsed");

	if (tableFilters == "false") {
		localStorage.setItem("collapsed", "false");
	}

	if (tableFilters == "true") {
		localStorage.setItem("collapsed", "true");
	}
}

var filterCollapsedLoc = localStorage.getItem("collapsed");
//////console.log("collapsed "+filterCollapsedLoc)

if (filterCollapsedLoc == "true") {
	$(".filters-conatiner").attr("data-collapsed", "true").css("height", 0);
	$("body").removeClass("filteropen");
}

if (filterCollapsedLoc == "false") {
	$(".filters-conatiner").attr("data-collapsed", "false").removeAttr("style");
	$("body").addClass("filteropen");
}
$(".input-padding.title .close,.num11").click(function(){
	$(".filters-label").click();
});

$(document).ready(function () {
	var $chkboxes = $(".checkboxTable");
	var lastChecked = null;

	$chkboxes.click(function (e) {
		if (!lastChecked) {
			lastChecked = this;
			return;
		}

		if (e.shiftKey) {
			var start = $chkboxes.index(this);
			var end = $chkboxes.index(lastChecked);
			var selectedChecked = $chkboxes.slice(
				Math.min(start, end),
				Math.max(start, end) + 1
			);

			selectedChecked.prop("checked", lastChecked.checked);
			if (lastChecked.checked == true) {
				selectedChecked.closest("tr").addClass("selected");
			} else {
				selectedChecked.closest("tr").removeClass("selected");
			}
			printSelectCount();
		}

		lastChecked = this;
	});
});

window.onscroll = function () {
	animateFilters();
};

var filters = $(".filter-parent");
var sticky = filters[0].offsetTop;

function animateFilters() {

	var pagewidth = window.innerWidth;

	if (pagewidth < breakpoints.xxl) {
		if (window.pageYOffset > sticky) {
			filters.addClass("mobilefilters");
		} else {
			filters.removeClass("mobilefilters");
		}
	} else {
		filters.removeClass("mobilefilters");
	}
}

var inputdate = $(".input-date");
inputdate.each(function(){
	isempty($(this),false);
});

function isempty(el,istrue){
	var value=el.val();
	var inputisEmpty=value.length==0;
	
	if(inputisEmpty){
		el.closest(".select-parent").removeClass("not-empty");
		if(istrue){
			el.closest(".select-parent").addClass("not-empty");
		}

	}else{
		el.closest(".select-parent").addClass("not-empty");
	}

	

}




inputdate.focusin(function(){	
	isempty($(this),true);
});

inputdate.focusout(function(){
	isempty($(this),false);
});





resizefunctions.push(function () {
	animateFilters();
});

/*-----------------------------pagination-------------------------------------*/

var pagination = {
maxrow:undefined,
currentrow:0,
pagesArr:[],
last:undefined,
pagesArrLen:undefined,
first: 1,
}

function getPagesArr(){	
	var pageNums =$(".controls_pagination .num");
	$(pageNums).each(function(){
		var num = parseInt($(this).text());
		pagination.pagesArr.push(num);
	});	
	pagination.pagesArrLen=pagination.pagesArr.length

}

function getLast(){
	var last = parseInt($(".last").html());
	pagination.last=last;
	

}
function getMaxrow(){
	var maxrow =Math.floor(pagination.last/pagination.pagesArr.length);
	pagination.maxrow=maxrow;

}
pagination.next = function(){	
	pagination.currentrow= pagination.currentrow + 1 <=  pagination.maxrow ? pagination.currentrow + 1 : 0;	

};
pagination.prev = function(){	
	pagination.currentrow= pagination.currentrow - 1 <=  0 ? pagination.maxrow  : pagination.currentrow - 1;	

};
pagination.gotolast = function(){	
	pagination.currentrow=pagination.maxrow;	

};
pagination.gotofirst = function(){	
	pagination.currentrow=0;	

};

pagination.renewPagesArr = function(){
	
	$(pagination.pagesArr).each(function(index){
		var newpage = (index+1)+(pagination.pagesArrLen*pagination.currentrow);
		pagination.pagesArr[index]=newpage;

	});
	console.log(pagination.pagesArr);	

};

pagination.printNewPages=function(){
	var lastofarr=pagination.pagesArr[pagination.pagesArr.length-1];
	var diff =0;
	if(lastofarr>pagination.last){
		diff =lastofarr-pagination.last;
		

	}
	var pageTemplate=""
	$(pagination.pagesArr).each(function(index){	              
		var page=pagination.pagesArr[index]-diff;		
		 pageTemplate+=`<div class="page num">${page}</div>`;		
	});	
	$(".pagination .pages").html(pageTemplate);

}





/*--------------------------------fuctions after-----------------------------------*/
getPagesArr();
 getLast();
 getMaxrow();

 //jqeary
$(".controls_pagination .next").click(function(){
	pagination.next();
	pagination.renewPagesArr();
	pagination.printNewPages();	

});
$(".controls_pagination .last").click(function(){
	pagination.gotolast();
	pagination.renewPagesArr();
	pagination.printNewPages();	

});
$(".controls_pagination .prev").click(function(){
	pagination.prev();
	pagination.renewPagesArr();
	pagination.printNewPages();	

});
$(".controls_pagination .first").click(function(){
	pagination.gotofirst();
	pagination.renewPagesArr();
	pagination.printNewPages();	

});

 console.log(pagination);






/*-----------------------------pagination-------------------------------------*/



