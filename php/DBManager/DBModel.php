<?php

namespace php\DBManager;

use mysqli;

class DBModel
{
    private $conn;

    public function __construct($config) {
        $this->conn = new mysqli($config);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        if (!(isset($str) && strlen($str) === 0)) {
            die("Error: sql query is empty"); // TODO: Don't use the die function, instead redirect to a page
        }

        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Error executing query: " . $this->conn->error);
        }

        return $result;
    }

    public function fetchAssoc($result) {
        return $result->fetch_assoc();
    }

    public function escapeString($value) {
        return $this->conn->real_escape_string($value);
    }

    public function close() {
        $this->conn->close();
    }
}