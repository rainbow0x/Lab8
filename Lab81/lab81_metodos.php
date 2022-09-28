<?php
class Calcular_procentaje
{
    public $num = 0;
    public $imagen = '';
    public $factorial = 1;
    public $unit = 1;

    function __construct($por)
    {
        $this->num = $por;
    }

    function porc()
    {
        if ($this->num >= 80) 
        {
            $this->imagen = "Bueno.jpg";
        } 
        elseif ($this->num >= 50 & $this->num <= 79) 
        {
            $this->imagen = "Medio.jpg";
        } 
        else 
        {
            $this->imagen = "Malo.jpg";
        }
        return $this->imagen;
    }

    function factorial_num()
    {
        for ($x = 1; $x <= $this->num; $x++) {
            $this->factorial = $this->factorial * $x;
        }
        return $this->factorial;
    }

    function matrix()
    {
        $unit = 1;
        if ($this->num % 2 == 0) {
            echo "<table border='1px'>";
            for ($i = 1; $i <= $this->num; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $this->num; $j++) {
                    if ($unit == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                $unit = $unit + 1;
                echo "<tr>";
            }
            echo "</table>";
        } else {
            return "el numero no es divisible";
        }
    }
}