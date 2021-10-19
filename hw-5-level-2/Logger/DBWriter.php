<?php

namespace Logger;

class DBWriter implements WriterInterface
{
    protected string $servername;

    protected string $database;

    protected string $username;

    protected string $password ;

    protected string $table_name;

    protected string $column_name;

    public function __construct($servername, $database, $username, $password, $table_name, $column_name)
    {
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->table_name = $table_name;
        $this->column_name = $column_name;
    }

    public function write($log)
    {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "INSERT INTO " . $this->table_name . " (" . $this->column_name . ") VALUES (" . $log . ")";

        if (mysqli_query($conn, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}