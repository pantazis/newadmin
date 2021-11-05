var tabledata = {
	head: [
		{
			title: "",
			width: "50px",
			element: "checkbox",
			hideMobile: false,
			hideAllMobile: true,
		},
		{
			title: "ID",
			width: "150px",
			element: "filters",
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "DOMAIN NAME",
			width: null,
			element: "filters",
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "",
			width: "50px",
			element: null,
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "EMAIL ΧΡΗΣΤΗ",
			width: null,
			element: "filters",
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "ΗΜΕΡΟΜΗΝΙΑ ΛΗΞΗΣ",
			width: "20%",
			element: "filters",
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "ΚΑΤΑΣΤΑΣΗ",
			width: "10%",
			element: "filters",
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "ONOMA KATOXOY",
			width: null,
			element: "filters",
			hideMobile: false,
			hideAllMobile: false,
		},
		{
			title: "ACTIONS",
			width: "150px",
			element: null,
			hideMobile: true,
			hideAllMobile: false,
		},
	],
	rows: [],
};

function randomDate() {
	var dateTest = parseInt(randomNumber());

	var a = new Date(dateTest * 225005000000);
	var months = [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	];
	var year = a.getFullYear();
	var month = a.getMonth() + 1;
	var date = a.getDate();
	var hour = a.getHours();
	var min = a.getMinutes();
	var time = date + "/" + month + "/" + year + " " + hour + ":" + min;

	return time;
}

function randomNumber(multiple) {
	if (multiple == undefined) {
		multiple = 10;
	}
	var numb = Math.random(0.1, 1) * multiple;
	return numb;
}

var arrA = [
	{
		value: "checkobox",
		element: "checkbox",
	},
	{
		value: "",
		element: "link",
	},
	{
		value: "fsdfdsaffdsaf2423rwesafdsfdffsd.com",
		element: "domainName",
	},
	{
		value: "icon-id_protect1",
		element: "singleIcon",
	},
	{},
	{
		value: "randomDate",
		element: "date",
	},
	{
		value: "ΕΧΕΙ ΛΗΞΕΙ",
		element: "isActive",
	},
	{
		value: "Billy Kemmer",
		element: "link",
	},
	{
		value: "icons",
		element: "action",
	},
];
tableData();
function tableData() {
	var counter = 20;
	var i = 1;
	while (i < counter) {
		obj = JSON.parse(JSON.stringify(arrA));
		if (tabledata.rows[0] == undefined) {
			tabledata.rows = [];
			tabledata.rows.push(obj);
		}
		tabledata.rows.push(obj);

		for (row in tabledata.rows) {
			var dat = tabledata.rows[i][5].value;
			if (dat == "randomDate") {
				tabledata.rows[i][5].value = randomDate();
				tabledata.rows[i][1].value = parseInt(randomNumber(1000000));
			}
		}

		i++;
	}
}

//debugger;

/*
  $(tabledata.head).each(function(index){
      this.hideAllMobile = false;
});*/
