<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "demob1";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function create($name, $course, $dept) {
        $sql = "INSERT INTO student (Name, Course, Department) VALUES ('$name', '$course', '$dept')";
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function read() {
        $sql = "SELECT * FROM student";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["ID"] . " - Name: " . $row["Name"] . " - Course: " . $row["Course"] . " - Department: " . $row["Department"] ."<br>";
            }
        } else {
            echo "0 results";
        }
    }

    public function update($id, $name, $course, $dept) {
        $sql = "UPDATE student SET Name='$name', Course='$course', Department='$dept' WHERE ID=$id";
        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM student WHERE ID=$id";
        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}

// Usage example:

$db = new Database();

// Create
$db->create("Hirensingh Ham", "MSC CS","Computer Science");

// Read
$db->read();

// Update
$db->update(3, "Tirth1", "MSC CS","Computer Science");

// Delete
$db->delete(6);
?>