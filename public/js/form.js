(function () {
    var textWarning = "js__helper-text--warning";
    var borderWarning = "js__activation-indicator--warning"
    var labelWarning ="js__label-text--warning";
    var inputIsFocused = false;    
    var regularExpressions={
        email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i,
        domain:/^(([a-zA-Z]{1})|([a-zA-Z]{1}[a-zA-Z]{1})|([a-zA-Z]{1}[0-9]{1})|([0-9]{1}[a-zA-Z]{1})|([a-zA-Z0-9][a-zA-Z0-9-_]{1,61}[a-zA-Z0-9]))\.([a-zA-Z]{2,6}|[a-zA-Z0-9-]{2,30}\.[a-zA-Z]{2,3})$/i,
        nameservers:/^(([a-zA-Z]{1})|([a-zA-Z]{1}[a-zA-Z]{1})|([a-zA-Z]{1}[0-9]{1})|([0-9]{1}[a-zA-Z]{1})|([a-zA-Z0-9][a-zA-Z0-9-_]{1,61}[a-zA-Z0-9]))\.([a-zA-Z]{2,6}|[a-zA-Z0-9-]{2,30}\.[a-zA-Z]{2,3})$/i,
        telephone:/^[0-9]{10}(?!.)/i,
        postcode:/^[0-9]{5}(?!.)/i,
        
    }
   

    var errorMessages={
        email: `error mail`,
        domain:"domain",
        nameservers:"nameservers",
        telephone:"telephone",
        postcode:"postcode",
        password: `<div class="password_strength_bar"><div class="bar_l"></div><div class="pass_power"></div></div>`,
        min:(charactercount) => {return `Ελάχιστο μήκος ${charactercount} χαρακτήρων`},
        max:(charactercount)=> {return `Mέγιστο μήκος ${charactercount} χαρακτήρων`},
        required :"input is required",       

    }


    //get all input
   
    inputArr=[];

    var toggle = 0;
    $("i.material-text-field__trailing-icon").click((e)=>{
     
        
         var input=$(e.target).closest(".material-text-field__container").find("input");
        input.focus();
        

        if(toggle%2==0){
           
        
            input.attr("type","text");            
            $("i.material-text-field__trailing-icon").html('<img class="eye "  src="img/visible.svg" alt="">')

        }else{
           
            input.attr("type","password");
            $("i.material-text-field__trailing-icon").html('<img class="eye" src="img/not_visible.svg" alt=""></img>');

        }       
        
        
        
        toggle++
    })



  $("form input").focusout(function(){
        inputIsFocused=false;
    });
    $("form input").focusin(function(){
        debugger;
        inputIsFocused=true;

    });
     
    $("form input").keyup(function() {
        debugger; 
             
        if(inputIsFocused){
            submit();

        }  
});
    function submit(){        
    $("form input").each(function(){
        inputsObj = {};       
        inputsObj.element=this;
        inputsObj.valueEl=$(this).val();
        inputsObj.lengthEL=$(this).val().length;        
        getattrforvalidation(this);
        inputArr.push(inputsObj);
        
       
        
    });
    validateProperties();
    inputArr=[];
}


    //get propertis for validation
    function getattrforvalidation(el){
        var elAttributes = el.attributes;
        $(elAttributes).each(function(index){ 
                          
            if(elAttributes[index].name.search("validate")!=-1){
               // get all Validation props              
                             
               inputsObj[elAttributes[index].name]=elAttributes[index].value;
             

                
                
            }
        });

    }

   //validate different properties

  function  validateProperties(){
    resetForm();
      
    $(inputArr).each(function(){   
            
       var input =this;       
       if(input["data-validate-length"]!=undefined){
            validateLength(input);
       }
       
       if(input["data-validate"]!=undefined){        
            validateType(input);
       }
       

    });
}
function validateType(el){
    
    var validationProps =el["data-validate"].split(" ");
     
    $(validationProps).each(function(){
       var singleprop = this; 
   
       singleprop=singleprop.valueOf()
        switch (singleprop) {
            
            case "email":
                checkvalidation(singleprop,el.valueEl,el);
            break;
            case "domain":
                checkvalidation(singleprop,el.valueEl,el);
            break;
            case "nameservers":
                checkvalidation(singleprop,el.valueEl,el);
            break;
            case "telephone":                
                checkvalidation(singleprop,el.valueEl,el);
            break;
            case "postcode":
                checkvalidation(singleprop,el.valueEl,el);
            break;
            case "password":
                passwordStrengthChecker(el.valueEl,el);
                checkvalidation(singleprop,el.valueEl,el);
            break;
            case "required":
            
            break;  
        }


    });
    
   

};

function passwordStrengthChecker(inputValue,inputEL){
let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

 var el =inputEL.element;

 var password_conatainer =$(el).parent().find(".password_strength_bar");
var first =false;
 if(inputEL.valueEl.length>0 ){
    if(password_conatainer.length==0){        
    $(errorMessages.password).insertAfter( el ); 
    password_conatainer =$(el).parent().find(".password_strength_bar");
    first =true;
     
    }


    
    
    

if(inputValue.match(strongPassword)) {
    password_conatainer.attr("class","password_strength_bar strong");
    password_conatainer.find(".pass_power").html("strong");

   } else if(inputValue.match(mediumPassword)){
    password_conatainer.attr("class","password_strength_bar medium");
    password_conatainer.find(".pass_power").html("medium");
           
} else{ 
    if(first){
    setTimeout(function(){
        password_conatainer.attr("class","password_strength_bar weak");
        first =false;  
      }, 100); 
    }else{
        password_conatainer.attr("class","password_strength_bar weak");

    }    
    
    password_conatainer.find(".pass_power").html("weak");     
}
 }else{
    password_conatainer.find(".pass_power").html("");
    password_conatainer.attr("class","password_strength_bar");
        setTimeout(function(){
            $(".password_strength_bar").remove();
        },500)

  

 }
};






function checkvalidation(attr,inputValue,element){

    var reg = inputValue.match(regularExpressions[attr]);
    
    
    if(reg==null){
       
      
        input_validation_error(errorMessages[attr],element.element,element.lengthEL);

    };
    

};


    function validateLength(inputEl){
        var elValue = inputEl["data-validate-length"].split(" ");
        var len =  parseInt(inputEl["lengthEL"]);
        var curentInput = inputEl.element;
        
        
      
        $(elValue).each(function(){
            if(this.search("min") != -1){
              var minCharacters = parseInt(this.replace("min",""));
         
               if(minCharacters > len){
                charactercount= minCharacters;                   
                input_validation_error(errorMessages.min(charactercount),curentInput,inputEl.lengthEL);


               }
                

            }
            if(this.search("max") != -1){
              var maxCharacters = parseInt(this.replace("max",""));

              if(maxCharacters < len){
                 charactercount= maxCharacters;
                 
                input_validation_error(errorMessages.max(charactercount),curentInput,inputEl.lengthEL);


                }

            }
        })
        

    }


function input_validation_error(messege,el,inputEl){
 
    
   
    if(inputEl!=0){    
    var inputConatainer =$(el).closest(".material-text-field__container");
    var textbox = inputConatainer.find("#helper-text");  
    var border =$(inputConatainer).find(".material-text-field__activation-indicator")
    var label = $(inputConatainer).find("#label-text");
    
    textbox.html(messege);
    textbox.addClass(textWarning);
    border.addClass(borderWarning); 
    label.addClass(labelWarning);
    }else{
        resetForm(inputEl);
        
    }
}

resetForm=function (inputel){    
    if(inputel==undefined){
 
    $(".material-text-field__helper-text").html("");
    $("."+textWarning).removeClass(textWarning);
    $("."+borderWarning).removeClass(borderWarning);
    $("."+labelWarning ).removeClass(labelWarning);
    }else{
    var container =   $(inputel).closest(".material-text-field__container");
    container.find(".material-text-field__helper-text").html("");
    container.find("."+textWarning).removeClass(textWarning);
    container.find("."+borderWarning).removeClass(borderWarning);
    container.find("."+labelWarning ).removeClass(labelWarning);

    }
    
}
function checkRequired(){  
    var forminput = $(".material-text-field__input-text");

    $(forminput).each(function(){
        var validate = $(this).attr("data-validate");
        if(validate.search("required")!= -1 && $(this).val().length==0 ){
            console.log(1);            
            errorflag = true;            
            input_validation_error(errorMessages.required,this,1);
            var inputparent = $(this).closest(".material-text-field__container")[0];
            
            
            
            inputparent.style.animation = 'noshake .82s';
            setTimeout(function(){
                inputparent.style.animation = 'shake .82s'; 
            },100)
            
    
    
        }else{

        }


    });

    
   
   


}

function checkForError(){
    
    var errorsign = $(".js__activation-indicator--warning");
    if(errorsign.length!= 0){
        console.log(2);
        errorflag = true;

        $(errorsign).each(function(index){
            var el =errorsign[index];            
            
            el.style.animation = 'noshake .82s';
            setTimeout(function(){
                el.style.animation = 'shake .82s'; 
            },100)
                
          
            
        

        })
        

    }


}


    $(".submit").click(function(e){
    e.preventDefault(); 
    $(".shake").removeClass("shake"); 

    errorflag = false;    
    checkForError();
    checkRequired();

    if(errorflag){
        return;
    }
    console.log("estila");
    errorflag = false; 

   
        
  

   });

})();

