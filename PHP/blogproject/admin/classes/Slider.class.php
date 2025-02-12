<?php
    require_once("Connection.class.php");

    class Slider extends Connection{
        public function addNewSlider($slidertitle, $description, $photopath){
            $sqlQuery = "insert into slider (slidertitle, description, photopath) values ('$slidertitle', '$description', '$photopath')";
            $this->conn->query($sqlQuery);
        }

        public function getAllSliders(){
            $sqlQuery = "select * from slider";
            return $this->conn->query($sqlQuery);
        }

        public function getOneSlider($id){
            $sqlQuery = "select * from slider where id = $id";
            return $this->conn->query($sqlQuery);
        }

        public function changeSliderStatus($id, $status){
            $sqlQuery = "update slider set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function deleteSlider($id){
            $sqlQuery = "select photopath from slider where id = $id";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                // photo delete
                unlink($row["photopath"]);
            }

            $sqlQuery = "delete from slider where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function updateSlider($id, $slidertitle, $description, $photopath = null){
            if($photopath != null){
                $sqlQuery = "select photopath from slider where id = $id";
                $result = $this->conn->query($sqlQuery);

                while($row = $result->fetch_assoc()){
                    // photo delete
                    unlink($row["photopath"]);
                }

                $sqlQuery = "update slider set photopath = '$photopath' where id = $id";
                $this->conn->query($sqlQuery);
            }

            $sqlQuery = "update slider set slidertitle = '$slidertitle', description = '$description' where id = $id";
            $this->conn->query($sqlQuery);
        }
    }

    $slider = new Slider();
?>