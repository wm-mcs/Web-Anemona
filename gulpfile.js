var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    

     mix.sass('mixer.scss','public/css');
     mix.sass('creative_template_mixer.scss','public/css'); 
     mix.sass('admin.scss','public/css'); 

     mix.sass('ecomerce_minimal_scss/style.scss','public/css/ecomerce_minimal.css');

     
    mix.scripts([
        
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Template_creative/jquery.easing.js',        
        'Template_creative/scrollreveal.js',
        'Template_creative/jquery.magnific-popup.js',
        'Template_creative/creative.js',
        'Template_creative/jquery.easing.compatibility.js',
        'Plugins/Flickity.js',
        'Plugins/Plug-lazyLoadXT.js',
        'Customs/sliders.js',
        'Customs/team.js',
        'Customs/noticias_blog.js'


       ]);

    mix.scripts([
        
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Customs/helper_generales.js',
        'Plugins/Plug-bootstrap-fileinput v4.3.7.js',
        'Customs/mis-file_input.js',
        'Customs/admin_eventos.js'
       

       ],'public/js/admin.js');

    


      mix.scripts([
        
        'ecomerce_minimal/jquery-3.3.1.min.js',
        /*'ecomerce_minimal/jquery-ui.js',*/        
        'ecomerce_minimal/bootstrap.min.js',       
        'ecomerce_minimal/main.js',
        'Plugins/Plug-Notify.js',
        'Plugins/Plug-lazyLoadXT.js',
       

       ],'public/js/ecomerceApp.js');


    elixir(function(mix) {
            mix.version(['css/mixer.css','css/creative_template_mixer.css','css/admin.css','css/ecomerce_minimal.css' ,'js/all.js','js/admin.js','js/ecomerceApp.js']); 
    });

    
});
