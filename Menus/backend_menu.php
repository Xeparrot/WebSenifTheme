<?php

Menu::create('WebSenifTheme', function($menu) {
    // URL, Title, Attributes

    $menu->dropdown('WebSenifTheme', function ($sub) {
        $sub->url('admin/webseniftheme', 'Page Settings');
        $sub->url('admin/webseniftheme', 'Home Page Settings');
        $sub->url('admin/webseniftheme', 'Custom CSS/JS');
    }, [
        'icon'=> 'c-sidebar-nav-icon cil-brush'
    ]);

});





