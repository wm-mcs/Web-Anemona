var app = new Vue({
    el: '#app',    
    data:{

      Empresa: {!! json_encode($Empresa) !!},
      Categorias:[],
      Marcas:[],
      windowWidth: window.innerWidth,
      resolucion_celular: 320,
      resolucion_tablet: 640,
      resolucion_pc: 990,
      scrolled:false,
      scrollY:0,


      producto_vista_bloque:'bloque',
      producto_vista_bloque_en_slide:'bloque_slide',
      categorias_que_se_muestran_en_home:[],
      Nombres_secciones_marcas:{
                                  titulo_marcas_distribuimos:'Venta y servicio técnico de ...',
                                  titulo_marcas_service: 'Servicio técnico de ... '
                               }
      

      

    },
    mounted: function mounted () {        

      this.$nextTick(() => {
        window.addEventListener('resize', () => {
          this.windowWidth = window.innerWidth
        });
      });


    },

    methods:{
      getMarcas:function(){
   

       var url = '/getMarcas';

       
       var vue = this; 

       axios.get(url).then(function (response){  
              var data = response.data;  
              

              if(data.Validacion == true)
              {
                 app.Marcas = data.Marcas; 
              }
              else
              {
                $.notify(response.data.Validacion_mensaje, "error");
              }
             
             }).catch(function (error){

               if(error.status != 200)
               {
                  $.notify(error.status, "error");
               }

                       
              
             });
      },

      valor_se_puede_mostrar:function(valor)
      {
        if(valor != 0 || valor != '' || valor != null)
        {
          return true;
        }
        else
        {
          return false;
        }
      },
      mostrar_para_grande:function(){
        if(this.windowWidth > this.resolucion_pc)
        {
          return true;
        }  
        else
        {
         return false;
        }
      },
      mostrar_para_celuar:function(){
       if(this.windowWidth <= this.resolucion_pc)
        {
          return true;
        }  
        else
        {
         return false;
        }
      },
      handleScroll:function() {
          

          if(window.scrollY > 0)
          {
           this.scrolled = true;

          }
          else
          {
           this.scrolled = false;
          }  

          this.scrollY = window.scrollY;        

      },

},
computed:{
  scroll_distinto_de_cero:function()
  {
    if(this.scrolled)
    {
      return true;
    } 
    else
    {
     return false;
    }
  }
},
watch: {
    windowWidth(newHeight, oldHeight) {
     window.addEventListener('resize', () => {
      this.windowWidth = window.innerWidth
    });
    }
},
created () {
  window.addEventListener('scroll', this.handleScroll);
},
destroyed () {
 window.removeEventListener('scroll', this.handleScroll);
}

     

   

});