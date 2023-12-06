<?php

namespace App\Models;

use App\Core\Model;

class Makanan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM makanan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['harga'];

            $sql = "INSERT INTO makanan
            SET nama=:nama, jenis=:jenis, harga=:harga";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":jenis", $jenis);
            $stmt->bindParam(":harga", $harga);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM makanan WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['harga'];
            $id = $_POST['id'];

            $sql = "UPDATE makanan
            SET nama=:nama, jenis=:jenis, harga=:harga
                  WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":jenis", $jenis);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM makanan WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
