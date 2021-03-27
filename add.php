<?php

function  vesGod($god):string {


    if (is_numeric($god) && !preg_match('/\./',$god)) {

        if (($god % 4 === 0 && $god % 100 !== 0) ||  $god % 400 === 0){

            return 'ДА - год високосный' ;

        }elseif  ($god % 4 !== 0) {

            return 'НЕТ - год не високосный';

        }else  return 'НЕТ - год не високосный';

        }else return 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';

}


