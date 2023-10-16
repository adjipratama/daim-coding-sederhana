<?php
	class database
	{
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $database = "db_kampus";
		
		function connect()
		{
            // Membuat koneksi ke database
            $conn = new mysqli($this->server, $this->username, $this->password, $this->database);

            // Cek koneksi
            if ($conn->connect_error) {
                die("Tidak dapat melakukan koneksi ke database: " . $conn->connect_error);
            }
            
            return $conn;
		}
	}
?>