<?php
	class Data
	{
		public $conn = '';
		public function __construct(){
			$this->conn = mysqli_connect("excellencetechnologies.co.in", "excelarf_himani", "himani@123", "excelarf_himani");
			if(mysqli_connect_errno()){
				printf("Connection Failed : \n %s",mysqli_connect_error());
				exit;
			}
		}
	}
?>