<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> Contact Us </TITLE>
</HEAD>

<BODY>
Contact Us
<hr>

<h2>Post a Message</h2>

<hr size="1">

<h3>Form</h3>
* required fields
 <form action= "post3.php" method="post">
	Name * : <input type="text" name="author"><br/>
	Email * : <input type="text" name="email"><br/>
	Subject : <input type="text" name="title"><br/>



	Tag *:
	<input type="checkbox" name="tag[]" value="Food"> Food
	<input type="checkbox" name="tag[]" value="Customer Service"> Customer Service
	<input type="checkbox" name="tag[]" value="Management"> Management
	<br/>


 

	Comment * : <br/><textarea name="comment" rows="5" cols="40"></textarea><br>
	<input type="Submit" name="SubmitThis" value="Preview">
	 <br/>
  </form>



</BODY>
</HTML>
