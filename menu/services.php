<!DOCTYPE html>
<html>
<head>
<style>
button {
	height:70px;
	width:180px;
	font: 20px Arial;
	margin:5px 5px 10px 25px;
	display: inline-block;
	background-color:cadetblue;
	text-align:center;
}
</style>
</head>
<body>
<button onclick="parent.serviceRequest('reception')">Reception</button>
<button onclick="parent.serviceRequest('emergency')">Emergency</button>
<button onclick="parent.serviceRequest('ambulance')">Ambulance</button>
<button onclick="parent.serviceRequest('department')">Departments</button>
<button onclick="parent.serviceRequest('admin')">Administration</button>
<button onclick="parent.serviceRequest('consultation')">Consultation</button>
<button onclick="parent.serviceRequest('appointment')">Appointment</button>
<button onclick="parent.serviceRequest('humanBody')">Human Body</button>
<button onclick="parent.serviceRequest('generalDiseases')">General Diseases</button>
</body>
</html>
