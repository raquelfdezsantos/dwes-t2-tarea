<?php
class TriangleGenerator {
    public static function generateTriangle(int $altura): string {
        if ($altura < 1) return "";
        $triangulo = "";
        for ($i = 1; $i <= $altura; $i++) {
            $espacios = str_repeat("&nbsp;", $altura - $i);
            $estrellas = str_repeat("*", $i * 2 - 1);
            $triangulo .= "<p>{$espacios}{$estrellas}</p>";
        }
        return $triangulo;
    }
}
?>