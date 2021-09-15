<?php 

function buttonsEl(){ 
    return   '<div class="button-padding"><a class="button green2 submit">Aποθήκευση</a></div>';
}

$domain=[
    "autocomplete"=>"domain",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"",
    "label"=>"domain",
    "value"=>".antoineeurtest.gr",
    "disabled"=>"disabled",
    "validate-length"=>""

 ];
 $host=[
    "autocomplete"=>"host",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"required host",
    "label"=>"Εξυπηρετητής",
    "value"=>"",
    "disabled"=>"",
    "validate-length"=>""

 ]; 
 $ip=[
    "autocomplete"=>"ip",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"ip required",
    "label"=>"Διεύθυνση IP",
    "value"=>"",
    "disabled"=>"",
    "validate-length"=>""
 ]; 

 $password=[
    "autocomplete"=>"ip",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"",
    "label"=>"Διεύθυνση IP",
    "value"=>"",
    "disabled"=>"",
    "validate-length"=>""

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
    <div class="material-text-field">  
    <input id="input-password"

      autocomplete="'.$inputprop["autocomplete"].'"
      type="'.$inputprop["type"].'"
      placeholder=" "
      data-last-val="'.$inputprop["data-last-val"].'"
      data-validate="'.$inputprop["data-validate"].'"
      data-validate-length="'.$inputprop["validate-length"].'";
      value="'.$inputprop["value"].'"'.$disabled.'
      
      
      
      class="material-text-field__input-text" >
    <div id="label-text" class="material-text-field__label-text">
    '.$inputprop["label"].'
    </div>
        <i id="trailing-icon" class="material-text-field__trailing-icon">
            <img class="eye" src="img/not_visible.svg" alt="">   
        </i>
    <div id="activation-indicator" class="material-text-field__activation-indicator"></div>
   
   
</div>
<div id="helper-text" class="material-text-field__helper-text">      
</div>
</div>';
    $template.=($hasButton?buttonsEl():"");
    return $template;
}

function checkbox($text1="",$text2="") {
$template ='<div class="checkbox-parent">
        <input type="checkbox" class="checkbox">
        <div class="knobs">
          <span>'.$text1.'</span>
          <span>'.$text2.'</span>
        </div>
        <div class="layer"></div>
      </div>';
      return $template;

}


function modal($id="",$title="",$mainText="",$btnColorClass="",$btnText="") {
    $template = '<div class="modal fade" id="'.$id.'" tabindex="-1" aria-labelledby="'.$id.'Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="'.$id.'Label">'.$title.'</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>'.$mainText.'</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Κλείσιμο</button>
          <button type="button"  class="btn '.$btnColorClass.'"><span class="activeText">Απενεργοποίηση</span><span class="notActiveText">Eνεργοποίηση</span></button>
        </div>
      </div>
    </div>
  </div>';
  echo $template;
    
    }



