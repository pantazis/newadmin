<?php 

function buttonsEl(){ 
    return   '<div class="button-padding"><a class="button green2">Aποθήκευση</a></div>';
}

$domain=[
    "autocomplete"=>"domain",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"",
    "label"=>"domain",
    "value"=>".antoineeurtest.gr",
    "disabled"=>"disabled"

 ];
 $dns=[
    "autocomplete"=>"dns",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"required name_servers",
    "label"=>"Εξυπηρετητής",
    "value"=>"",
    "disabled"=>""

 ]; 
 $ip=[
    "autocomplete"=>"ip",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"",
    "label"=>"Διεύθυνση IP",
    "value"=>"",
    "disabled"=>""

 ]; 

 $password=[
    "autocomplete"=>"ip",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"",
    "label"=>"Διεύθυνση IP",
    "value"=>"",
    "disabled"=>""

 ]; 
   



function formPersonal($inputprop1,$inputprop2,$inputprop3) {
    $template ='<div class="info-text-in">';
    $template .=inputEl($inputprop1,false);
    $template .='<div class="button-padding" style="flex: 1">';
    $template .=inputEl($inputprop2,false);
    $template .='</div>';
    $template .='</div><div class="info-text-in">';
    $template .=inputEl($inputprop3,true);
    $template .='</div>';                          
    
    return $template;
    };



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


function select2($optionArr,$placeholder,$id = ""){    
    $template = '<select class="form-select select2"    data-placeholder="'.$placeholder.'">';                                                   
    foreach($optionArr as $group){    
    $template .='<optgroup label="'.$group['group'].'">';
    foreach($group["option"] as $option){
        $template .='<option value="'.$option["value"].'">'.$option["name"].'</option>';
    }
    $template .='</optgroup>';
    }
    $template .='</select>';
return $template;

}


                    

 
 $formPersonalArr=[inputEl($password,false),inputEl($password,false), inputEl($password,false)];


function inputEl($inputprop,$hasButton) {
    $disabled= $inputprop["disabled"]!=""?'disabled="'.$inputprop["disabled"].'"':"";
    $template = '<div class="material-text-field__container ">
    <input id="input-password"

      autocomplete="'.$inputprop["autocomplete"].'"
      type="'.$inputprop["type"].'"     
      data-last-val="'.$inputprop["data-last-val"].'"
      data-validate="'.$inputprop["data-validate"].'"
      value="'.$inputprop["value"].'"'.$disabled.'
      
      
      
      class="material-text-field__input-text" >
    <div id="label-text" class="material-text-field__label-text">
    '.$inputprop["label"].'
    </div>
        <i id="trailing-icon" class="material-text-field__trailing-icon">
            <img class="eye" src="img/not_visible.svg" alt="">   
        </i>
    <div id="activation-indicator" class="material-text-field__activation-indicator"></div>
    <div id="helper-text" class="material-text-field__helper-text">
       
    </div>
</div>';
    $template.=($hasButton?buttonsEl():"");
    return $template;
}



