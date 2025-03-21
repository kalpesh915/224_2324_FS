<?php
    require_once("Connection.class.php");

    class Team extends Connection{
        public function addNewTeamMember($name, $designation, $twitter, $instagram, $facebook, $linkedin, $photopath){
            $sqlQuery = "insert into team (name, designation, teamtwitter, teaminstagram, teamfacebook, teamlinkedin, photopath) values ('$name', '$designation', '$twitter', '$instagram', '$facebook', '$linkedin', '$photopath')";
            $this->conn->query($sqlQuery);
        }

        public function getAllTeamMembers(){
            $sqlQuery = "select * from team";
            return $this->conn->query($sqlQuery);
        }

        public function getOneTeamMembers($id){
            $sqlQuery = "select * from team where id = $id";
            return $this->conn->query($sqlQuery);
        }

        public function changeTeamMemberStatus($id, $status){
            $sqlQuery = "update team set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function deleteTeamMember($id){
            $sqlQuery = "select photopath from team where id = $id";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                // photo delete
                unlink($row["photopath"]);
            }

            $sqlQuery = "delete from team where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function updateTeamMember($id, $name, $designation, $twitter, $instagram, $facebook, $linkedin, $photopath = null){
            if($photopath != null){
                $sqlQuery = "select photopath from team where id = $id";
                $result = $this->conn->query($sqlQuery);

                while($row = $result->fetch_assoc()){
                    // photo delete
                    unlink($row["photopath"]);
                }

                $sqlQuery = "update team set photopath = '$photopath' where id = $id";
                $this->conn->query($sqlQuery);
            }

            $sqlQuery = "update team set name = '$name', designation = '$designation', teamtwitter = '$twitter', teaminstagram = '$instagram', teamfacebook = '$facebook', teamlinkedin = '$linkedin' where id = $id";
            $this->conn->query($sqlQuery);
        }
    }

    $team = new Team();
?>