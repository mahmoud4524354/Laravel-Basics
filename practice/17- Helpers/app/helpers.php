<?php

if (! function_exists("username")){
    function username(){
        return auth()->user()->name ;
    }

}

if (! function_exists("user_id")){
    function user_id(){
        return auth()->user()->id ;
    }
}
