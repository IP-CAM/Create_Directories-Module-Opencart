<?php

    $admin1 = 'admin/controller/extension/module';
    $admin2 = 'admin/language/ru-ru/extension/module';
    $admin3 = 'admin/view/template/extension/module';
    $catalog1 ='catalog/controller/extension/module';
    $catalog2 ='catalog/language/ru-ru/extension/module';
    $catalog3 ='catalog/view/theme/default/template/extension/module';
	
    $all = array($admin1, $admin2, $admin3, $catalog1, $catalog2, $catalog3);

    foreach ($all as $result) {
        if (!mkdir($result, 0777, true)) {
            die('<p> Что то не работает :(( </p>');
        } else {
            echo '<p> Магия! </p>';  
        }
    }
