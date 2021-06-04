<?php

function formatDate($data=NULL){
    if($data){
       $data = explode('-', $data);

        return $data[2] .'/'. $data[1] .'/'.$data[0];
    }
}