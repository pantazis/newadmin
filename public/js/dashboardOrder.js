if (localStorage.getItem("dashboardOrder") != null) {
	var elOrder = localStorage.getItem("dashboardOrder");
	var elOrder = elOrder.split(",");
	var items = $(".template .item");

	$(elOrder).each(function () {
		var num = parseInt(this);
		$(".grid").append(items[num]);
	});
} else {
	var items = $(".template").html();
	$(".grid").html(items);
}

var grid = new Muuri(".grid", {
	dragEnabled: true,
	layoutOnResize: true,
	fillGaps: true,
});
var flag = 1;

grid.on("layoutEnd", function () {
	if (flag == 1) {
		getposition();
		flag++;
	}
});

grid.on("dragReleaseEnd", function (item) {
	if (flag > 1) {
		setTimeout(function () {
			getposition();
			fillelments();
			setLocalStorageData();
		}, 1000);
	}
});

obj1 = {
	top: {},
	left: {},
};

function getposition() {
	allElementObj = [];

	$(".grid .item").each(function (index) {
		var info = {};

		info.el = this;
		info.left = Math.round($(this).offset().left);
		info.top = Math.round($(this).offset().top);		
		info.val = pythagorean(info.top, info.left, info.el);
		allElementObj.push(info);
	});

	giveval();
	loop();
}

setTimeout(function () {
	getposition();
}, 1000);

var num = 1;
var num2 = 1;

function pythagorean(top, left, el) {
	
	obj1.top[top] = top;
	obj1.left[left] = left;
}

function giveval() {
	var i = 1;
	var v = 1;

	for (const property in obj1.top) {
		obj1.top[property] = i;
		i++;
	}
	for (const property in obj1.left) {
		obj1.left[property] = v;
		v++;
	}
}

var newObj = {};

function loop() {
	newObj = {};

	$(allElementObj).each(function () {
		var item = this;
		var num = obj1.top[item.top] + "" + obj1.left[item.left];
		newObj[num] = item.el;
	});
}

function fillelments() {
	$(".grid").html("");

	for (const property in newObj) {
		$(".grid").append(newObj[property]);
	}
}

function setLocalStorageData() {
	var newarr = [];
	$(".grid .item").each(function () {
		var num = $(this).attr("data-num");
		newarr.push(num);
	});

	localStorage.setItem("dashboardOrder", newarr);
}
