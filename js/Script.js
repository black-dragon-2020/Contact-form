
$(function(){
    $('.nom').blur(function()
    {
        if($(this).val().length<3 ){
            $('.custom-alertr').fadeIn(300);  
        }else{
            
            $('.custom-alertr').fadeOut(300);  
            $('.custom-alert').fadeIn(300); 
        }
         
    })
    $('.prenom').blur(function()
    {
        if($(this).val().length<3 ){
            $('.custom-alertr').fadeIn(300);  
        }else{
            
            $('.custom-alertr').fadeOut(300);  
            $('.custom-alert').fadeIn(300); 
        }
         
    })
    $('.Address').blur(function()
    {
        if($(this).val().length<3 ){
            $('.custom-alertr').fadeIn(300);  
        }else{
            
            $('.custom-alertr').fadeOut(300);  
            $('.custom-alert').fadeIn(300);  
        }
    })
    $('.Tel').blur(function()
    {
        if($(this).val().length<9 ){
            $('.custom-alertr').fadeIn(300);  
        }else{
            $('.custom-alertr').fadeOut(300);  
            $('.custom-alert').fadeIn(300); 
        }
         
    })
  

  
})














