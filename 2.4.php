

<?php

class Student {
    public $name;
    public $rollNo;
    public $marks = array();

    public function __construct($name, $rollNo, $marks) {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->marks = $marks;
    }

    public function calculateTotalMarks() {
        return array_sum($this->marks);
    }

    public function calculatePercentage($totalMarks, $totalSubjects) {
        return ($totalMarks / ($totalSubjects * 100)) * 100;
    }

    public function generateMarksheet() {
        $totalMarks = $this->calculateTotalMarks();
        $totalSubjects = count($this->marks);
        $percentage = $this->calculatePercentage($totalMarks, $totalSubjects);

        $marksheet = "Name: {$this->name}\n";
        $marksheet .= "Roll No: {$this->rollNo}\n";
        $marksheet .= "Total Marks: $totalMarks\n";
        $marksheet .= "Percentage: $percentage%\n";

        return $marksheet;
    }

    public function saveMarksheetToFile($filename) {
        $marksheet = $this->generateMarksheet();
        file_put_contents($filename, $marksheet, FILE_APPEND);
        echo "Marksheet saved to $filename successfully.";
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $rollNo = $_POST["rollNo"];
    $marks = array();

    // Retrieve marks for each subject
    for ($i = 1; $i <= 5; $i++) {
        $subject = "subject$i";
        if (isset($_POST[$subject])) {
            $marks[] = $_POST[$subject];
        }
    }

    // Create Student object
    $student = new Student($name, $rollNo, $marks);

    // Save marksheet to file
    $filename = "marksheet.txt";
    $student->saveMarksheetToFile($filename);
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
</head>
<body>
    <h2>Student Marksheet</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="rollNo">Roll No:</label>
        <input type="text" id="rollNo" name="rollNo" required><br><br>

        <label for="subject1">Subject 1 Marks:</label>
        <input type="text" id="subject1" name="subject1" required><br><br>

        <label for="subject2">Subject 2 Marks:</label>
        <input type="text" id="subject2" name="subject2" required><br><br>

        <label for="subject3">Subject 3 Marks:</label>
        <input type="text" id="subject3" name="subject3" required><br><br>

        <label for="subject4">Subject 4 Marks:</label>
        <input type="text" id="subject4" name="subject4" required><br><br>

        <label for="subject5">Subject 5 Marks:</label>
        <input type="text" id="subject5" name="subject5" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
