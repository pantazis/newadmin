<?php

function buttonsEl(){
  $tempalte = '<div class="button-padding"><button class="button green2 submit">';
  $tempalte .='<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style=" margin: auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; shape-rendering: auto;"  viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
  <circle cx="50" cy="50" fill="none"  stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
  </circle>
  </svg>';
  $tempalte .='<span class="save">Aποθήκευση<span></button></div>';
  return  $tempalte;
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

 function simpleTextArea($label="****")
 {
     $template ='<div class="info-text-in">';    
     $template .=textareaEL($label,true);
     $template .='</div>';
 
     return $template;
 };

 function formPersonal2($inputprop1)
 {
 
      
     $template ='<div class="info-text-in">';    
     $template .=inputEl($inputprop1, true);
     $template .='</div>'; 
     return $template;
 };


function formPersonal($inputprop1, $inputprop2, $inputprop3)
{
    $template ='<div class="info-text-in">';
    $template .=inputEl($inputprop1, false);
    $template .='<div class="button-padding" style="flex: 1">';
    $template .=inputEl($inputprop2, false);
    $template .='</div>';
    $template .='</div><div class="info-text-in">';
    $template .=inputEl($inputprop3, true);
    $template .='</div>';

    return $template;
};



function selectEl($arr, $title)
{
    $template = '<div class="info-text-in">';
    $template.='<div class="select-parent"><select class="form-select" aria-label="" required>
    <option value="" disabled selected style="display: none;"></option>';
    foreach ($arr as $key => $val) {
        $value=$key+1;
        $template.='<option value="'.$value.'">'.$val.'</option>';
    };
    $template.='</select><label class="select-label">Επίλεξε κατάσταση</label></div>'.buttonsEl().'</div>';



    return $template;
};


function select2($optionArr, $placeholder, $id = "")
{
    $template = '<div class="info-text-in"><select class="form-select select2"    data-placeholder="'.$placeholder.'">';
    foreach ($optionArr as $group) {
        $template .='<optgroup label="'.$group['group'].'">';
        foreach ($group["option"] as $option) {
            $template .='<option value="'.$option["value"].'">'.$option["name"].'</option>';
        }
        $template .='</optgroup>';
    }
    $template .='</select></div>';
    return $template;
}





 $formPersonalArr=[inputEl($password, false),inputEl($password, false), inputEl($password, false)];
 
 function textareaEL($label,$hasButton){
  $template ='<div class="select-parent">';
  $template.='<textarea class="textareaCustom" placeholder=" " rows="1"></textarea>';
  $template.='<label class="select-label">'.$label.'</label>';
  $template.='</div>';
  $template.=($hasButton?buttonsEl():"");
  return $template;

 }

function inputEl($inputprop, $hasButton)
{
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
    </div>';
     if($inputprop["type"]=='password'){
      $template .= '<i id="trailing-icon" class="material-text-field__trailing-icon">
            <img class="eye" src="img/not_visible.svg" alt="">
        </i>';
     }


        $template .= '<div id="activation-indicator" class="material-text-field__activation-indicator"></div>


</div>
<div id="helper-text" class="material-text-field__helper-text">
</div>
</div>';
    $template.=($hasButton?buttonsEl():"");
    return $template;
}

function checkbox($text1="", $text2="")
{
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


function modal($id="", $title="", $mainText="", $btnColorClass="", $btnText="")
{
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
          <button type="button"  class="btn '.$btnColorClass.'">'.$btnText.'</button>
        </div>
      </div>
    </div>
  </div>';
    echo $template;
}


function search(){
  $buttons = ["Domain","Domain (orders)","Domain (trades)","Email (users)","VAT","Documents"]; 
  $template='<div class="nav-list search">
      
  <div class="search-cont search-cont only-superlarge">
      <span class="search-text"><span class="text">Domains</span> <div class="icon-fi-sr-caret-down navdown"></div></span>
      <input class="search-top" oninput="bindinput.val(this)" type="search" placeholder="Αναζήτηση" name="" id="">     
  </div>
 
</div>
<div class="arrow-div dark"></div>
<div class="custom-popup ss popup-notifications  shadow-2-strong">
      
        <div class="padd-search">
          <input class="search-mobile" oninput="bindinput.val(this)"  type="search" placeholder="Αναζήτηση" name="" id="">
        </div>        
        
        <div class="bubble-cont shadow-1-strong">';
        foreach ($buttons as $key => $value) {            
        $template .= '<div class="bubble'.($key==0 ? ' active':'').'">
            <div class="icon-anim">
              <span class="icon-success search_icon" alt=""></span>          
            </div>
            <div class="b_in">'.$value.'</div>
          </div>' ;
        };
        $template .= '<div class="button_search">
                          Αναζήτηση            
           
          </div>';


    $template .=  '</div>
       
    </div>';
return $template;
};



