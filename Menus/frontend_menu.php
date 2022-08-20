<?php

Menu::create('WebSenifTheme'.'FrontendMenu', function($menu) {
    // URL, Title, Attributes

    $menu->url('home', 'Home', ['target' => 'blank']);
    $menu->url('home', 'About Us', ['target' => 'blank']);
    $menu->url('home', 'Blog', ['target' => 'blank']);
    $menu->url('home', 'Contact Us', ['target' => 'blank']);



    $menu->add([
        'url' => '',
        'title' => 'Visit My Profile',
        'attributes' => [
            'target' => '_blank'
        ]
    ]);



});
