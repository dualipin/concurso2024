<?php
require_once __DIR__ . '../../config/connect_db.php';

class Numero
{
    private mysqli $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function generar()
    {
        $random = range(1, 500);
        $sql = "INSERT INTO numero (valor) VALUES ($random)";
        $this->conn->query($sql);
    }

    public function generar_5000()
    {
        for ($i = 0; $i < 5000; $i++) {
            $this->generar();
        }
    }

    public function consultar()
    {
        $sql = "SELECT valor FROM numero";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $values = [];
            while ($row = $result->fetch_assoc()) {
                $values[] = $row['valor'];
            }

            $count = count($values);
            $sum = array_sum($values);
            $mean = $sum / $count;
            sort($values);
            $median = ($count % 2 == 0) ? ($values[$count / 2 - 1] + $values[$count / 2]) / 2 : $values[floor($count / 2)];
            $min = min($values);
            $max = max($values);

            return ['res' => true, "sum" => $sum, "mean" => $mean, "max" => $max, "contador" => $count, "median" => $median, "min" => $min];
        } else {
            return ["res" => false];
        }
    }
}