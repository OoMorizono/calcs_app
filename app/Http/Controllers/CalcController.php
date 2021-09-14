<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calcs($num, $colc, $num2)
    {
        if ($colc == 'addition') {
            $result = $num + $num2;
        } elseif ($colc == 'subtraction') {
            $result = $num - $num2;
        } elseif ($colc == 'multiplication') {
            $result = $num * $num2;
        } elseif ($colc == 'division') {
            $result = $num / $num2;
        }else{
            $result =  '?';
        }
        return view(
            'message.calcs',
            [
                'result' => $result
            ]
        );
    }

    public function hello()
    {
        return '<h>hello</h>';
    }
}
