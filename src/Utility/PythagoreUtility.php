<?php

namespace App\Utility;

final class PythagoreUtility
{
    public function display(): string
    {
        $value = '<table>';

        for ($i = 0; $i <= 10; $i++) {

            $value .= '<tr>';
            for ($j = 0; $j <= 10; $j++) {
                $value .= '<td>';
                if ($i === 0) {
                    $value .= $j;
                } else if ($j === 0) {
                    $value .= $i;
                } else if ($i === $j) {
                    $value .= 'X';
                } else {
                    $value .= $i * $j;
                }
                $value .= '</td>';
            }
            $value .= '</tr>';
        }
        $value .= '</table>';

        return $value;
    }
}

