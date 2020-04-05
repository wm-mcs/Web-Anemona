var app = new Vue({
    el: '#app',    
    data:{

      Empresa: {!! json_encode($Empresa) !!},
      categorias:[],

      windowWidth: window.innerWidth,
      resolucion_celular: 320,
      resolucion_tablet: 640,
      resolucion_pc: 990,
      scrolled:0,


      producto_vista_bloque:'bloque',
      producto_vista_bloque_en_slide:'bloque_slide'
      

      

    },
    mounted: function mounted () {        

      this.$nextTick(() => {
        window.addEventListener('resize', () => {
          this.windowWidth = window.innerWidth
        });
      });


    },

    methods:{

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
      }

},
watch: {
    windowWidth(newHeight, oldHeight) {
     window.addEventListener('resize', () => {
      this.windowWidth = window.innerWidth
    });
    }
}

     

   

});