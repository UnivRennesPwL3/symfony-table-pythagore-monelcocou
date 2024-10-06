<?php

namespace App\Utility;

class PythagoreUtility
{
    public function display(): string
    {
        $value = '<table class="table table-light table-striped-columns mt-5">';

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

