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
      cargando:false,
      


      producto_vista_bloque:'bloque',
      producto_vista_bloque_en_slide:'bloque_slide',
      categorias_que_se_muestran_en_home:[],
      Nombres_secciones_marcas:{
                                  titulo_marcas_distribuimos:'Venta y servicio técnico de ...',
                                  titulo_marcas_service: 'Servicio técnico de ... '
                               },
      variables:{
                  input_color_primary:'input_color_primary',
                  input_color_white:'input_color_white'
                }
      

      

    },
    mounted: function mounted () {        

      this.$nextTick(() => {
        window.addEventListener('resize', () => {
          this.windowWidth = window.innerWidth
        });
      });

      this.getMarcas();
      this.getCategoriasActivas();


    },

    methods:{
      getMarcas:function(){   

       var url = '/getMarcas';       
       var vue = this; 
       this.cargando = true;

       axios.get(url).then(function (response){  
              var data = response.data;  
              

              if(data.Validacion == true)
              {  vue.cargando = false;
                 vue.Marcas = data.Marcas; 
              }
              else
              { vue.cargando = false;
                
              }
             
             }).catch(function (error){

               if(error.status != 200)
               {  vue.cargando = false;
                  
               }

                       
              
             });
      },
      getCategoriasActivas:function(){  
       this.cargando = true;
       var url = '/getCategoriasActivas';
       var vue = this;  

       axios.get(url).then(function (response){  
            var data = response.data;              

            if(data.Validacion == true)
            {
               vue.cargando = false;
               vue.Categorias = data.categorias;                
            }
            else
            {
              vue.cargando = false;
              
            }
           
           }).catch(function (error){

             if(error.status != 200)
             {  vue.cargando = false;
                
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
      handleScroll:function(){
       this.scrolled = window.scrollY > 0;

      }         

      

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
  },
  marcas_elite:function(){
    return this.Marcas.filter(marca => marca.rank > 2);
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