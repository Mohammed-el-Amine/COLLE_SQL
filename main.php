<?php
function prommpt(){
    $prompt = ("mysql> ");
    while(!str_ends_with($prompt,";")){
        readline($prompt);
    }
}
prommpt();
