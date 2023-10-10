<?php
    require_once APP_ROOT.'/app/model/patient.php';

    class PatinetService{
        public static function getAll(){
            try{
                $conn = new PDO('mysql:host=localhost;dbname=clinic','root','');
                $sql = "SELECT * FROM patient ORDER BY idPatient ASC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $Patinets = [];
                while($row = $stmt->fetch()){
                    $Patinet = new Patient($row['idPatient'],$row['namePatient'], $row['datePatient'], $row['symptom'], $row['idDoctor']);
                    $Patinets[] = $Patinet;
                }
                return $Patinets;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public static function addPatient($namePatient, $datePatient, $symptom, $idDoctor){
            try {
                $conn = new PDO('mysql:host=localhost;dbname=clinic','root','');
        
                $sql = "INSERT INTO patient (namePatient, datePatient, symptom, idDoctor) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$namePatient, $datePatient, $symptom, $idDoctor]);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public static function findById($id)
        {
            $conn = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');//
            $sql = "SELECT * from patient where idPatient=? ";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            $Patient = new Patient($data['idPatient'],$data['namePatient'], $data['datePatient'], $data['symptom'], $data['idDoctor']);
            return $Patient;
        }

        public static function editPatient($idPatient, $namePatient, $datePatient, $symptom, $idDoctor)
        {   
            $conn = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
            
            $sql = "UPDATE patient SET namePatient=?, datePatient=?, symptom=?, idDoctor=? WHERE idPatient=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$namePatient, $datePatient, $symptom, $idDoctor, $idPatient]);
        }
        
        public static function deletePatient($id)
        {
            $conn = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
            $sql = "DELETE from patient where idPatient = ?";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$id]);
            
        }
    }
?>