<?php
    require_once("Connection.class.php");

    class Services extends Connection{
        public function addNewService($servicetitle, $servicedesc, $serviceicon){
            $sqlQuery = "insert into services (servicetitle, servicedesc, serviceicon) values ('$servicetitle', '$servicedesc', '$serviceicon')";
            $this->conn->query($sqlQuery);
        }

        public function getAllServices(){
            $sqlQuery = "select * from services";
            return $this->conn->query($sqlQuery);
        }

        public function getOneService($id){
            $sqlQuery = "select * from services where id = $id";
            return $this->conn->query($sqlQuery);
        }

        public function updateServiceStatus($id, $status){
            $sqlQuery = "update services set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function updateService($id, $servicetitle, $servicedesc, $serviceicon){
            $sqlQuery = "update services set servicetitle = '$servicetitle', servicedesc = '$servicedesc', serviceicon = '$serviceicon' where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function deleteService($id){
            $sqlQuery = "delete from services where id = $id";
            $this->conn->query($sqlQuery);
        }
    }

    $services = new Services();
?>