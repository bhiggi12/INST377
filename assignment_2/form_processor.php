<!DOCTYPE html>
<html>
<head>
	<title>Team Peer Evaluation - Processor</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

<?php
// The code to process recieved data from the form goes to here.
// In the file named "form_processor.php", you need to accept the post data and process it.
// The processed data should be presented to the user.
//
// The output should include:

// Team Project Name
echo "<strong>Team Project Name:</strong> ", $_POST['Team_Project_Name'], "<br/>";

// Presentation Time (calculated from start and stop time)
$PresentationTime = strtotime($_POST['Time_Stop'])-strtotime($_POST['Time_Start']);
echo "<strong>Presentation Time:</strong> ", gmdate("H:i:s", $PresentationTime), "<br/>";

// Overall Team Grade (A+ through F) (required)
if ($_POST['Overall_Team_Grade'] > 96.9) {
	$OverallTeamLetterGrade = 'A+';
} elseif (($_POST['Overall_Team_Grade'] < 97) && ($_POST['Overall_Team_Grade'] > 92.9)) {
	$OverallTeamLetterGrade = 'A';
} elseif (($_POST['Overall_Team_Grade'] < 93) && ($_POST['Overall_Team_Grade'] > 89.9)) {
	$OverallTeamLetterGrade = 'A-';
} elseif (($_POST['Overall_Team_Grade'] < 90) && ($_POST['Overall_Team_Grade'] > 86.9)) {
	$OverallTeamLetterGrade = 'B+';
} elseif (($_POST['Overall_Team_Grade'] < 87) && ($_POST['Overall_Team_Grade'] > 82.9)) {
	$OverallTeamLetterGrade = 'B';
} elseif (($_POST['Overall_Team_Grade'] < 83) && ($_POST['Overall_Team_Grade'] > 79.9)) {
	$OverallTeamLetterGrade = 'B-';
} elseif (($_POST['Overall_Team_Grade'] < 80) && ($_POST['Overall_Team_Grade'] > 76.9)) {
	$OverallTeamLetterGrade = 'C+';
} elseif (($_POST['Overall_Team_Grade'] < 77) && ($_POST['Overall_Team_Grade'] > 72.9)) {
	$OverallTeamLetterGrade = 'C';
} elseif (($_POST['Overall_Team_Grade'] < 73) && ($_POST['Overall_Team_Grade'] > 69.9)) {
	$OverallTeamLetterGrade = 'C-';
} elseif (($_POST['Overall_Team_Grade'] < 70) && ($_POST['Overall_Team_Grade'] > 66.9)) {
	$OverallTeamLetterGrade = 'D+';
} elseif (($_POST['Overall_Team_Grade'] < 67) && ($_POST['Overall_Team_Grade'] > 62.9)) {
	$OverallTeamLetterGrade = 'D';
} elseif (($_POST['Overall_Team_Grade'] < 63) && ($_POST['Overall_Team_Grade'] > 59.9)) {
	$OverallTeamLetterGrade = 'D-';
} else {
	$OverallTeamLetterGrade = 'F';
}
echo "<strong>Overall Team Grade: </strong>", $_POST['Overall_Team_Grade'], " (", $OverallTeamLetterGrade, ") <br/>";

// Repeating Sections for:

// Team Member Name 1
echo "<strong>Team Member Name:</strong> ", $_POST['Team_Member_Name1'], "<br/>";
$IndividualGrade = $_POST['Level_of_Participation1'] * $_POST['Overall_Team_Grade'];

// Individual Grade (calculated using team grade and participation level, however you feel is appropriate)
if ($IndividualGrade > 96.9) {
	$IndividualLetterGrade = 'A+';
} elseif (($IndividualGrade < 97) && ($IndividualGrade > 92.9)) {
	$IndividualLetterGrade = 'A';
} elseif (($IndividualGrade < 93) && ($IndividualGrade > 89.9)) {
	$IndividualLetterGrade = 'A-';
} elseif (($IndividualGrade < 90) && ($IndividualGrade > 86.9)) {
	$IndividualLetterGrade = 'B+';
} elseif (($IndividualGrade < 87) && ($IndividualGrade > 82.9)) {
	$IndividualLetterGrade = 'B';
} elseif (($IndividualGrade < 83) && ($IndividualGrade > 79.9)) {
	$IndividualLetterGrade = 'B-';
} elseif (($IndividualGrade < 80) && ($IndividualGrade > 76.9)) {
	$IndividualLetterGrade = 'C+';
} elseif (($IndividualGrade < 77) && ($IndividualGrade > 72.9)) {
	$IndividualLetterGrade = 'C';
} elseif (($IndividualGrade < 73) && ($IndividualGrade > 69.9)) {
	$IndividualLetterGrade = 'C-';
} elseif (($IndividualGrade < 70) && ($IndividualGrade > 66.9)) {
	$IndividualLetterGrade = 'D+';
} elseif (($IndividualGrade < 67) && ($IndividualGrade > 62.9)) {
	$IndividualLetterGrade = 'D';
} elseif (($IndividualGrade < 63) && ($IndividualGrade > 59.9)) {
	$IndividualLetterGrade = 'D-';
} else {
	$IndividualLetterGrade = 'F';
}
echo "<strong>Individual Grade:</strong> ", $IndividualGrade, " (", $IndividualLetterGrade, ") <br/>";

// Team Member Name 2
echo "<strong>Team Member Name: </strong>", $_POST['Team_Member_Name2'], "<br/>";
$IndividualGrade = $_POST['Level_of_Participation2'] * $_POST['Overall_Team_Grade'];

// Individual Grade (calculated using team grade and participation level, however you feel is appropriate)
if ($IndividualGrade > 96.9) {
	$IndividualLetterGrade = 'A+';
} elseif (($IndividualGrade < 97) && ($IndividualGrade > 92.9)) {
	$IndividualLetterGrade = 'A';
} elseif (($IndividualGrade < 93) && ($IndividualGrade > 89.9)) {
	$IndividualLetterGrade = 'A-';
} elseif (($IndividualGrade < 90) && ($IndividualGrade > 86.9)) {
	$IndividualLetterGrade = 'B+';
} elseif (($IndividualGrade < 87) && ($IndividualGrade > 82.9)) {
	$IndividualLetterGrade = 'B';
} elseif (($IndividualGrade < 83) && ($IndividualGrade > 79.9)) {
	$IndividualLetterGrade = 'B-';
} elseif (($IndividualGrade < 80) && ($IndividualGrade > 76.9)) {
	$IndividualLetterGrade = 'C+';
} elseif (($IndividualGrade < 77) && ($IndividualGrade > 72.9)) {
	$IndividualLetterGrade = 'C';
} elseif (($IndividualGrade < 73) && ($IndividualGrade > 69.9)) {
	$IndividualLetterGrade = 'C-';
} elseif (($IndividualGrade < 70) && ($IndividualGrade > 66.9)) {
	$IndividualLetterGrade = 'D+';
} elseif (($IndividualGrade < 67) && ($IndividualGrade > 62.9)) {
	$IndividualLetterGrade = 'D';
} elseif (($IndividualGrade < 63) && ($IndividualGrade > 59.9)) {
	$IndividualLetterGrade = 'D-';
} else {
	$IndividualLetterGrade = 'F';
}
echo "<strong>Individual Grade:</strong> ", $IndividualGrade, " (", $IndividualLetterGrade, ") <br/>";

// Team Member Name 3
echo "<strong>Team Member Name:</strong> ", $_POST['Team_Member_Name3'], "<br/>";
$IndividualGrade = $_POST['Level_of_Participation3'] * $_POST['Overall_Team_Grade'];

// Individual Grade (calculated using team grade and participation level, however you feel is appropriate)
if ($IndividualGrade > 96.9) {
	$IndividualLetterGrade = 'A+';
} elseif (($IndividualGrade < 97) && ($IndividualGrade > 92.9)) {
	$IndividualLetterGrade = 'A';
} elseif (($IndividualGrade < 93) && ($IndividualGrade > 89.9)) {
	$IndividualLetterGrade = 'A-';
} elseif (($IndividualGrade < 90) && ($IndividualGrade > 86.9)) {
	$IndividualLetterGrade = 'B+';
} elseif (($IndividualGrade < 87) && ($IndividualGrade > 82.9)) {
	$IndividualLetterGrade = 'B';
} elseif (($IndividualGrade < 83) && ($IndividualGrade > 79.9)) {
	$IndividualLetterGrade = 'B-';
} elseif (($IndividualGrade < 80) && ($IndividualGrade > 76.9)) {
	$IndividualLetterGrade = 'C+';
} elseif (($IndividualGrade < 77) && ($IndividualGrade > 72.9)) {
	$IndividualLetterGrade = 'C';
} elseif (($IndividualGrade < 73) && ($IndividualGrade > 69.9)) {
	$IndividualLetterGrade = 'C-';
} elseif (($IndividualGrade < 70) && ($IndividualGrade > 66.9)) {
	$IndividualLetterGrade = 'D+';
} elseif (($IndividualGrade < 67) && ($IndividualGrade > 62.9)) {
	$IndividualLetterGrade = 'D';
} elseif (($IndividualGrade < 63) && ($IndividualGrade > 59.9)) {
	$IndividualLetterGrade = 'D-';
} else {
	$IndividualLetterGrade = 'F';
}
echo "<strong>Individual Grade:</strong> ", $IndividualGrade, " (", $IndividualLetterGrade, ") <br/>";

// Team Member Name 4
echo "<strong>Team Member Name: </strong>", $_POST['Team_Member_Name4'], "<br/>";
$IndividualGrade = $_POST['Level_of_Participation4'] * $_POST['Overall_Team_Grade'];

// Individual Grade (calculated using team grade and participation level, however you feel is appropriate)
if ($IndividualGrade > 96.9) {
	$IndividualLetterGrade = 'A+';
} elseif (($IndividualGrade < 97) && ($IndividualGrade > 92.9)) {
	$IndividualLetterGrade = 'A';
} elseif (($IndividualGrade < 93) && ($IndividualGrade > 89.9)) {
	$IndividualLetterGrade = 'A-';
} elseif (($IndividualGrade < 90) && ($IndividualGrade > 86.9)) {
	$IndividualLetterGrade = 'B+';
} elseif (($IndividualGrade < 87) && ($IndividualGrade > 82.9)) {
	$IndividualLetterGrade = 'B';
} elseif (($IndividualGrade < 83) && ($IndividualGrade > 79.9)) {
	$IndividualLetterGrade = 'B-';
} elseif (($IndividualGrade < 80) && ($IndividualGrade > 76.9)) {
	$IndividualLetterGrade = 'C+';
} elseif (($IndividualGrade < 77) && ($IndividualGrade > 72.9)) {
	$IndividualLetterGrade = 'C';
} elseif (($IndividualGrade < 73) && ($IndividualGrade > 69.9)) {
	$IndividualLetterGrade = 'C-';
} elseif (($IndividualGrade < 70) && ($IndividualGrade > 66.9)) {
	$IndividualLetterGrade = 'D+';
} elseif (($IndividualGrade < 67) && ($IndividualGrade > 62.9)) {
	$IndividualLetterGrade = 'D';
} elseif (($IndividualGrade < 63) && ($IndividualGrade > 59.9)) {
	$IndividualLetterGrade = 'D-';
} else {
	$IndividualLetterGrade = 'F';
}
echo "<strong>Individual Grade: </strong>", $IndividualGrade, " (", $IndividualLetterGrade, ") <br/>";

// Notes about the project
echo "<strong>Notes about the project: </strong>", $_POST['Other_Comments'], "<br/>";

?>
</body>
</html>
