function send_data(planType) {
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'insertBooking.php', true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	var roomType = "", date = "2018-04-06", company_name = "",  tot_people = "", details = "";

	if(planType == 1) {
		details = "BASIC PLAN";
	}
	else if(planType == 2) {
		details = "PRO PLAN";
	}
	else if(planType == 3) {
		details = "ENTERPRISE PLAN";
	}
	else if(planType == 4) {
		roomType = document.getElementById("type").value;
		date = document.getElementById("date").value;
		tot_people = document.getElementById("total_people").value;
		company_name = document.getElementById("comp_name").value;
		details = document.getElementById("add_deets").value;
	}
	var params = "planType=" + planType + "&roomType=" + roomType + "&date=" + date + "&comp_name=" + company_name + 
		"&tot_people=" + tot_people + "&details=" + details;
	xhr.onload = function () {
	    alert("Successful Booking");
	};
	xhr.send(params);
}