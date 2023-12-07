<?php

namespace App\Models;

use App\Core\Model;

class Gaji extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_gaji";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['user_email'];
            $full_name = $_POST['user_full_name'];
            $gaji = $_POST['total_gaji'];

            $sql = "INSERT INTO tb_gaji
            SET user_email=:user_email, user_full_name=:user_full_name, total_gaji=:total_gaji";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_full_name", $full_name);
            $stmt->bindParam(":total_gaji", $gaji);
            

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_gaji WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $email = $_POST['user_email'];
            $full_name = $_POST['user_full_name'];
            $gaji = $_POST['total_gaji'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_gaji
                  SET user_email=:user_email, user_full_name=:user_full_name,total_gaji=:total_gaji
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_gaji
                  SET user_email=:user_email, user_full_name=:user_full_name,total_gaji=:total_gaji
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_full_name", $full_name);
            $stmt->bindParam(":total_gaji", $gaji);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_gaji WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}
