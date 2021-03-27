<?php

    if (is_numeric($_POST['name']) && !preg_match('/\./',$_POST['name'])) {

        if (($_POST['name'] % 4 === 0 && $_POST['name'] % 100 !== 0) ||  $_POST['name'] % 400 === 0){

           echo 'ДА - год високосный' ;

        }elseif  ($_POST['name'] % 4 !== 0) {

           echo'НЕТ - год не високосный';

        }else  echo 'НЕТ - год не високосный';

    }else echo 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';




