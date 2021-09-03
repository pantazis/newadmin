<?php 

function buttonsEl(){ 
    return   '<div class="pl-1"><button type="button" class="btn btn-outline-blue_purple">add</button></div>';
}



function selectEl($arr,$title) {

$template = '<div class="info-text-in">';
$template.='<select class="form-select" aria-label="">';
foreach($arr as $key => $val){
 $value=$key+1;
 $template.='<option '.($value==1?"selected":"").' value="'.$value.'">'.$val.'</option>'; 
 
}; 
$template.='</select>'.buttonsEl().'</div>';



return $template;
};


                    
                  


function inputEl($title,$name,$type,$validateLength,$validate) {
    $template ='<div class="info-text-in">';
    $template .= '<div class="material-text-field__container">
                <input id="input-password" data-input-num="5" autocomplete="'.$type.'" type="'.$type.'" placeholder=" " class="material-text-field__input-text" data-last-val="" '.($validateLength!=null ? 'data-validate-length="' .$validateLength.'"':"").'  data-validate="'.$validate.'">
                <div id="label-text" class="material-text-field__label-text">'.$name.'</div>
                '.($type=="password" ?  '<i id="trailing-icon" class="material-text-field__trailing-icon">
                <img class="eye" src="img/not_visible.svg" alt="">                       
                 </i>' : '').'                  
                 <div id="activation-indicator" class="material-text-field__activation-indicator"></div>
                <div id="helper-text" class="material-text-field__helper-text">
                   
                </div>
            </div>';
    $template.=buttonsEl().'</div>';
    return $template;
}



