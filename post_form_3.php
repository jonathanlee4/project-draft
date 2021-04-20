<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> CTEC 4309 Class Working File: Posting a Message </TITLE>
</HEAD>

<BODY>
CTEC 4309 Class Working File
<hr>

<h2>Post a Message</h2>

<hr size="1">

<h3>Form</h3>
* required fields
 <form action= "post3.php" method="post">
	Author * : <input type="text" name="author"><br/>
	Email : <input type="text" name="email"><br/>
	Title * : <input type="text" name="title"><br/>

  City * :
  <select name = "city">
    <option value = ""> --Select-- </option>
    <option value = "Seoul"> Seoul </option>
    <option value = "Beijing"> Beijing </option>
    <option value = "Tokyo"> Tokyo </option>
  </select>
  <br/>

	Tag:
	<input type="checkbox" name="tag[]" value="Vacation"> Vacation
	<input type="checkbox" name="tag[]" value="Work"> Work
	<input type="checkbox" name="tag[]" value="Studies"> Studies
	<br/>


  Background Color: <input type="radio" name="bgcolor" value="pink"> Pink
					  <input type="radio" name="bgcolor" value="green"> Green
            <br/>

	Comment * : <br/><textarea name="comment" rows="5" cols="40"></textarea><br>
	<input type="Submit" name="SubmitThis" value="Preview">
  </form>



</BODY>
</HTML>
