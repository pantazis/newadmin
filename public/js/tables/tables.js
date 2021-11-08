tableElements = {};

tableElements.checkbox = function (title) {
	var el = `<input type="checkbox" id="${title}" name="${title}" value="Bike",>`;
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
    <div class="icon-fi-sr-chess"></div>
    <div class="icon-fi-sr-clock1"></div>
    <div class="icon-fi-sr-comment-alt"></div>
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
	var el = `<div class="domain-name">
     <div class="icon-fi-sr-clock1 icon ${hideIcon}"></div>
     <a href="" class="link" title="${title}">${title}</a>
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

		headTemplate += "<tr>";
		$(row).each(function (index) {
			var title = tabledata.head[index].title;
			var hideTitle = tabledata.head[index].hideMobile == true ? "hide-t" : "";
			var hideAllMobile =
				tabledata.head[index].hideAllMobile == true ? "hide-t" : "";
			var value = this.value;

			if (this.element != null) {
				value = tableElements[this.element](value);
			}

			headTemplate += `<td data-label="${title}" class="${hideAllMobile}"><span class="title_mobile ${hideTitle}">${title}</span>${value}</td>`;
		});
		headTemplate += "</tr>";
	});
	$("tbody").html(headTemplate);
}

createHeadOfTable();
createDataOfTable();

var open = 0;
$(".filters-label").click(function () {
	togglefilters();
});

var element = $(".filters-conatiner")[0];

function togglefilters() {
	if (open % 2) {
		expandSection(element);
				
	
	} else {
		collapseSection(element);
		
	
		
	}
	open++;

	$(".filter-parent")[0].ontransitionend = () => {
		tableHeadtop();
	};
	
	
}













var selectOneRowPar = $("tbody tr");
var selectOneRow = $(' tbody input[type="checkbox"]');

var selectAllCheckPar = $("thead tr");
var selectAllCheck = $(' thead input[type="checkbox"]');


selectAllCheckPar.click(function() {multiRowSelection() });


selectOneRow.click(function() {oneRowSelection(this) });






function multiRowSelection() {


	if (selectAllCheck.is(":checked")) {

		selectOneRowPar.find(selectOneRow).each(function () {
			this.checked = true;
      selectOneRowPar.addClass('selected')
		});
	} else {
		selectOneRowPar.find(selectOneRow).each(function () {
			this.checked = false;
      selectOneRowPar.removeClass('selected')
		});
	}


}





function oneRowSelection(el) {

      if ($(el).is(":checked")){
      $(el).closest("tr").addClass('selected')
    }
    else {
      $(el).closest("tr").removeClass('selected')
    }
}





