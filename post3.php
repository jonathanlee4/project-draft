<?php
//--------------------------
// Form Processing Script
//		This script is written to work with the form in post_form_3.php.
//--------------------------


//==========================
// Data validation
//==========================

// check to see if there is a form submission or not
if (array_key_exists("SubmitThis", $_POST)) {

	// data validation
	//  - check required fields

	//== Modify the required and expected arrays below to fit your form ========
	$required = array('name', 'email','subject', 'city', 'comment');
	$expected = array('name', 'email','subject', 'city', 'comment', 'tag');
	$missing = array();

	// use foreach loop to run through each item in the expected array
	foreach($expected as $thisField) {
		// setup a variable to store user input for this field name
		$thisUserInput = $_POST[$thisField];

		// check if this field is a required field
		if (in_array($thisField, $required)) {
			// check if user input of this field is empty, if yes, add this field to the missing array
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				// set up a variable to store the user input for this field
				/*
					Say $thisField contains "title", then this line
						${$thisField} = $thisUserInput;
					will effectively turn to
						$title = $thisUserInput;
					In this example, after the foreach loop, we will then have the following variables: $title, $author, $comment, and $tag, all set up and that's why we can use them to compose the $output below (line 66).

					Also note that the names of these new variables match the form field names recorded in the $expected array.
				*/
				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	}



	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
	if (empty($missing)){
		// empty($missing) is true --> no missing field, proceed with business processes (in this example, display all user input.)

		// deal with array input, ex. $tag
		$tagStr = implode(", ", $tag);

		// print_r ($tag); // enable this line will print the $tag array, so you can see what's been stored in the $tag array.  It may help you to debug.

		// process author name and email
		if (!empty($email)) {
			$author = "<a href='mailto:$email'>$author</a>";
		}


		$output = "<table class='previewTable'>
				<tr><th>Name</th><td>$name </td></tr>
				<tr><th>Email</th><td>$email </td></tr>
				<tr><th>Subject</th><td>$subject </td></tr>
				<tr><th>Tag</th><td>$tagStr</td></tr>
				<tr><th>City</th><td>$city</td></tr>
				<tr><th>Comment</th><td>$comment</td></tr>
					</table>";

	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

		$missingFieldList = implode(", ",$missing);
		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";

	}


} else {
	$output = "Please post your message use <a href='post_form_3.php'>this form</a>.";
}


	// decide the value of $class, which depends on the value of $page


?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> CTEC 4309 Class Working File: Message Form Processing </TITLE>
<style>
    .previewTable {border-collapse: collapse;}
    .previewTable tr td, .previewTable tr th {border: 1px solid black; padding: 0.8em;}
    .previewTable tr th {background-color: darkgray; color: white;}
		
</style>
</HEAD>

<BODY>
CTEC 4309 Class Working File
<hr>

<h2>Preview Your Message</h2>

<hr size="1">
<p>
	<?php echo $output ?>

</p>


</BODY>
</HTML>
