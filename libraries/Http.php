<?php

class Http{
    // :void pour préciser que la fonction ne retournera rien
    public static function redirect(string $url): void 
    {
        header("Location: $url");
        exit();
    }
}