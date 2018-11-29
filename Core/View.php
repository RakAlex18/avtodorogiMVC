<?php

namespace Core;

class View {

    public static function render($view, $template, $args = []) {

        // разбивает массив на переменные
        extract($args, EXTR_SKIP);
        $template = "../App/Views/$template";
        $file = "../App/Views/$view";
        if (is_readable($file)) {

            require $template;
            //require $file;
        } else {
            echo "$file не найден";
        }
    }
}