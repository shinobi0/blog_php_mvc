<?php

class Renderer{

        /**
         * Affiche un template HTML en injectant les $variables
         * @param string $path
         * @param array $variables
         * @return void
         */
        public static function render(string $path, array $variables=[])
        {
            //transformer un tableau associatif en véritable variables avec la fonction extract
            extract($variables);
            ob_start();
            require('templates/' . $path . '.html.php');
            $pageContent = ob_get_clean();
            require('templates/layout.html.php');
        }
}
