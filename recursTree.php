<?php
$tree = [
"level 1" => ["level 1.1", "level 1.2"],
"level 2",
"level 3" => ["level 3.1", "level 3.2" => ["level 3.2.1", "level 3.2.2"], 
"level 3.3"],
"level 4" => ["level 4.1", "level 4.2", "level 4.3", "level 4.4"],
];


function printTree($data, $level = 0){
    foreach($data as $k => $v){
        $isArray = is_array($v);
        echo str_pad('', $level*2).($isArray ? $k : $v)."\n";
        if($isArray){
            printTree($v, $level + 1);
        }
    }
}

printTree($tree);

/* 
echo tree($tree);

function tree($array, $tab = '', $result = '')
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result .= "{$tab}[$key] <i style='color:red;'>(array)</i><br>";
            $result .= tree($value, $tab . str_repeat('&nbsp;', 4));
        } else {
            $result .= "{$tab}[$key] => <b>$value</b><br>";
        }
    }
    return $result;
} */