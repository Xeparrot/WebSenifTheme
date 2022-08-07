<?php

Menu::create('WebSenifTheme', function($menu) {
    // URL, Title, Attributes

    $menu->dropdown('WebSenifTheme', function ($sub) {
        $sub->url('admin/webseniftheme', 'Articles');
    }, [
        'icon'=> 'c-sidebar-nav-icon cil-book'
    ]);
});
