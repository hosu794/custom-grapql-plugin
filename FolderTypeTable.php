<?php

namespace Table\FolderTypeTable;

class FolderTypeTable {

    private $conn;

    public function __construct() {
        connectDatabase();
    }

    function connectDatabase() {
        $conn = new mysqli("localhost", "root", "", "wordpress");

        if($conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
        }

        echo "Connected succesfully <br />";
    }

    static function getItems() {

        $elements = [];

        $sql = "SELECT * FROM wp_realmedialibrary";

        $result = $conn->query($sql);

        if($result->num_rows > 0) {

            while($row = mysqli_fetch_array($result))
            {
                $elements[] = $row;
            }

            return $elements;

        } else {
            echo "0 results";
        }

    }

    public function close() {
        $conn->close();
    }



}

?>