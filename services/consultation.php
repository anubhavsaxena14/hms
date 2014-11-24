<!DOCTYPE html>
<html>
<body>
<h3>CONSULTATION</h3><hr />
<font size="4">Please fill the details in this online form to get consultation via email.
<br />
(For patients already registered with us)

<br /><br />

</font>
Note:- Before you start with the form, be ready with your Hospital Registration Number. <br />
It will be used to understand your disease history and also to verify the patient. In case of non-availability a fee of 100 Rs/- will be subjected upon the patient.<br />
In order to process your consultation request a fee will be required to be submitted in advance. <br />
If the personal details are found to mismatch, than your request will be aborted and money will be returned back to the same account holder after a 10% cut.

<form id="consultForm" name="consultForm" method="POST" enctype="multipart/form-data" action="submitConsultation.php" autocomplete="on">

<h4>PERSONAL DETAILS</h4>
First Name: <input type="text" name="fname" placeholder="John" id="textfield" />
Middle Name: <input type="text" name="mname" id="textfield2" />
Last Name: <input type="text" name="lname" placeholder="Smith" id="textfield3" />
<br /><br />
Date of Birth: <input type="date" name="dob" placeholder="31-12-1950" required id="textfield4" />
Age: <input type="number" name="age" placeholder="63"  min="1" max="120" required id="textfield6" />
Nationality: <input type="text" name="nation" placeholder="Indian" required id="textfield7" />
<br /><br />
Registration Number: <input type="number" name="registration" maxlength="10" required id="textfield8" />
<br /><br />
Telephone: <input type="number" name="phone" placeholder="9012345678" maxlength="10" required id="textfield9" />
Email: <input type="email" name="email" placeholder="JohnSmith@email.com" required id="textfield10" />

<h4>DISEASE DETAILS</h4>
Disease Categorisation: <input type="text" name="disease" placeholder="cardiac/diabetes/skin/gastric/etc." required id="textfield11" />
<br /><br />
Main Symptoms (not more than 500 words): <textarea rows="5" cols="100" maxlength="500" name="symptoms"
placeholder="Explain when the problem started, how it progressed, if any sensation of pain and any other related problem like -GastricRespiratory/Circulatory/Blood /Nervous/ Urinary, Renal/Hormonal/Reproductive/ Joints or Muscles etc."
id="textfield12" ></textarea>
<br /><br />
Diagnostic Reports (only in PDF format supported) : <input type="file" name="report" accept="application/pdf">

<br /><br />
<input type="submit" name="button" id="button" value="Submit" />
</form>

</body>
</html>
