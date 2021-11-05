// This is the important part!
arrform=[];
function collapseSection(element,parentel) { 
  
   
    
    // get the height of the element's inner content, regardless of its actual size
    var sectionHeight = element.scrollHeight;
    
    // temporarily disable all css transitions
    var elementTransition = element.style.transition;
    element.style.transition = '';
    
    // on the next frame (as soon as the previous style change has taken effect),
    // explicitly set the element's height to its current pixel height, so we 
    // aren't transitioning out of 'auto'
    requestAnimationFrame(function() {
      element.style.height = sectionHeight + 'px';
      element.style.transition = elementTransition;
     
      
      // on the next frame (as soon as the previous style change has taken effect),
      // have the element transition to height: 0
      requestAnimationFrame(function() {       
        
        element.style.height = 0 + 'px';
       
        element.addEventListener('transitionend', function() {
          
          isFormEmpty(element);
          
        }, false);
      
         
       
        


      });
      



    });
    
    // mark the section as "currently collapsed"
  
    
    element.setAttribute('data-collapsed', 'true');
    if(parentel!=undefined){
      addClassToParent(element,parentel);
    }
  }

  
  
  function expandSection(element,parentel) {
      
    // get the height of the element's inner content, regardless of its actual size
    var sectionHeight = element.scrollHeight;
    
    // have the element transition to the height of its inner content
    element.style.height = sectionHeight + 'px';
  
    // when the next css transition finishes (which should be the one we just triggered)
    element.addEventListener('transitionend', function(e) {
       
      // remove this event listener so it only gets triggered once
      element.removeEventListener('transitionend', arguments.callee);      
      
      // remove "height" from the element's inline styles, so it can return to its initial value
     
      element.style.height = null;
    });
    
    // mark the section as "currently not collapsed"
   
    
    element.setAttribute('data-collapsed', 'false');
    if(parentel!=undefined){
      addClassToParent(element,parentel);
    }
    
  }
  function isFormEmpty(el){  
    if(addActionObj.parent==undefined){
       makeElement();
    }
   
    addActionObj.countRow(); 
       
    var parent =$(el).closest(".info-row");
    var text = parent.find(".info-val").text().trim().length;    
    if(text == 0 && addActionObj.numOfRow>1){
    parent.remove();
    }
    addActionObj.hideShowElments();
  }

  function addClassToParent(el,parent){
    if($(el).attr('data-collapsed')=='false'){
    $(parent).addClass("open");
    $(parent).closest(".info-row-con").addClass("form_open");
    }else{
    $(parent).removeClass("open");
    $(parent).closest(".info-row-con").removeClass("form_open");
    }

  }
  
  function openForms(clickEl,el,toggleDiv){ 

    console.log(clickEl,el,toggleDiv);
   
      
         
    $(clickEl)[0].addEventListener('click', function(e) { 
   
    var parent = $(el);
    var section = parent.find(toggleDiv)[0]; 

    arrform.push(el);
      
    if(arrform.length == 1)  {       
        toggleClass(section,parent);
    }
    if(arrform.length > 1 ){
    
        if(arrform[arrform.length-2]===arrform[arrform.length-1]) {            
         toggleClass(section,parent);
        }else{ 
                      
            $(toggleDiv+'[data-collapsed="false"]').each(function(){ 
            if(section!==this){                                 
            var parent = $(this).closest("."+el[0].classList[0]);        
            toggleClass(this,parent);
            }
            });
          
        toggleClass(section,parent); 

        }
    }
   
  });
}

$('.big-row-in').each(function(){  
  var parent = $(this).closest(".big-row-parent");
   openForms(this,parent,'.info-form');
});


$('.info-title').each(function(){  
  var parent = $(this).closest(".info-container");
   openForms(this,parent,'.info-row-con');
});

$('.info-icon.action1').each(function(){
  openCloseRow(this);
    
});

function openCloseRow(icon){
    
  var parent = $(icon).closest(".info-row"); 
  openForms(icon,parent,'.info-form');  
}

function toggleClass(section,parent){
    var isCollapsed = $(section).attr('data-collapsed')=='true';    
    if(isCollapsed){
       
       
        expandSection(section,parent)
        section.setAttribute('data-collapsed', 'false');
    }else{ 
                    
        collapseSection(section,parent);
    }

}












