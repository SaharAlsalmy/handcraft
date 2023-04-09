<?php

return[
    [
        'icon'=>'nav-icon fas fa-tachometer-alt',
        'route'=>'dashboard.dashboard',
        'title'=>'Dashboard',
        'active'=>'dashboard.dashboard'
    ],
    [
        'icon'=>'nav-icon fas fa-copy',
        'route'=>'dashboard.categories.index',
        'title'=>'categories',
        'badge'=>'New',
        'active'=>'dashboard.categories.*'


    ],
    [
        'icon'=>'nav-icon fas fa-th',
        'route'=>'dashboard.products.index',
        'title'=>'Products',
        'active'=>'dashboard.products.*'


    ],
   


];
