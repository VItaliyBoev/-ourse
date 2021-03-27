<?php

function rr($m , $n):string {


    if(is_numeric($m) && is_numeric($n) && $n > 0 && $m >0 && !preg_match('/\./',$n) && !preg_match('/\./',$m)){
        $smuz = intdiv($m,$n);
        if($smuz == 0 ){
            return 'смузи не может быть меньше чем хипстеров';}
        if($m % $n !== 0){
            return ' когда в лофте ' . $n . ' хипстерам досталось '. $m . ' смузи , каждый из них получит по '. $smuz . ' смузи и ' . ($m % $n) . ' смузи можно выкинуть';}
        If($m % $n == 0) return ' когда в лофте ' . $n . ' хипстерам досталось '. $m . ' смузи , каждый из них получит по '. $smuz . ' смузи';
    }else{
        return 'данные введены некорректно';
    }
    return '';
}


echo rr(5,9) ;
echo '<br>';
echo rr(8,'8') ;
echo '<br>';
echo rr(9,'7.7') ;
echo '<br>';
echo rr(9.9,'7') ;