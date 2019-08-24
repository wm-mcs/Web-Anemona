var app = new Vue({
    el: '#app',    
    data:{

      Empresa: {!! json_encode($Empresa) !!},
      

      

    },
    mounted: function mounted () {        

     


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
      }

    
   }

     

   

});