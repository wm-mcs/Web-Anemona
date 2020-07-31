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
    

   
    
     mix.sass('admin.scss','public/css'); 
     mix.sass('ecomerce_minimal_scss/style.scss','public/css/ecomerce_minimal.css');

     


    mix.scripts([
        
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Customs/helper_generales.js',        
        'Customs/admin_eventos.js',
        'Plugins/Plug-lazyLoadXT.js',
       

       ],'public/js/admin.js');

    


      mix.scripts([
        
       
        'Plugins/Vue-Lazyload.js'
       

       ],'public/js/ecomerceApp.js');


    elixir(function(mix) {
            mix.version(['css/admin.css','css/ecomerce_minimal.css' ,'js/admin.js','js/ecomerceApp.js']); 
    });

    
});
