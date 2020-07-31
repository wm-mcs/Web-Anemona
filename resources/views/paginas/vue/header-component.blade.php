Vue.component('header-nav' ,
{

props:['scroll','color_tipo']
,  

data:function(){
    return {

         mostrar_menu_en_movil:false,

    }
}, 

watch:{ 

  

   
},
methods:{
  set_mostrar_menu_movil:function(){
    if(this.mostrar_menu_en_movil)
    {
      this.mostrar_menu_en_movil = false;
    }
    else
    {
      this.mostrar_menu_en_movil = true;
    }    
  }

},
computed:{

  determinar_la_nav_queda_fixed:function(){
   return this.scroll;
  },  
  mostrar_opciones_del_menu:function(){

    if(!this.$root.mostrar_para_celuar)
    {
     return true;
    }

    if(this.mostrar_menu_en_movil)
    {
      return true; 
    }
    else
    {
      return false;
    }
  },
  se_muestra_al_hacer_scroll:function(){

    if(!this.determinar_la_nav_queda_fixed)
    {
      return false;
    }

    if(this.$root.scrolled > 0)
    {
      return true;
    }

    return false;
    
  },
  getClassHeader:function(){   
    if(this.color_tipo == 'simple')
    {
      return {
      'header-nav-clase-base':true, 
      'position-fixed': this.determinar_la_nav_queda_fixed,
      'background-gris--1':this.se_muestra_al_hacer_scroll
     }
    }
    else if( this.color_tipo ==  'invertido')
    {
      return {
      'header-nav-clase-base':true, 
      'position-fixed': this.determinar_la_nav_queda_fixed,
      'background-primary':this.se_muestra_al_hacer_scroll
     }
    }
       
  },
  getClassUlLI:function(){
    if(this.$root.mostrar_para_celuar)
    {
      return {
      'header-nav-ul-li__celular':true
      }
    } 
    else
    {
      return {
      'header-nav-ul-li':true
      }
    }
  },
  getClassItemsNav:function(){

   if(this.$root.mostrar_para_celuar)
    {
      return {
      'header-nav-ul-li__en_movil':true
      }
    } 

    if(this.color_tipo == 'simple')
    {
       return {
        'header-nav-ul-general text-color-items__blanco':true, 
        'text-color-items__negro': this.se_muestra_al_hacer_scroll
       }
    } 
    else if( this.color_tipo ==  'invertido')
    {
      return {
        'header-nav-ul-general text-color-items__blanco':true, 
        'text-color-items__blanco': this.se_muestra_al_hacer_scroll
       }
    }   
  },
  getClassMostrarMenuMovil:function(){

   if(this.$root.mostrar_para_celuar)
   {
    if(this.mostrar_menu_en_movil)
    {
      return {
        'header-nav__on_action':true, 
      };
    }    
   }
    
  },
  getClassNavUlEnMovil:function(){
   if(this.$root.mostrar_para_celuar)
   {
    if(this.mostrar_menu_en_movil)
    {
      if(this.color_tipo == 'simple')
      {
        return {
          'header-nav-ul__on_action':true, 
           'background-gris--1':true

        };
      } 
      else if( this.color_tipo ==  'invertido')
      {
         return {
          'header-nav-ul__on_action':true, 
           'background-gris--1':true

        };
      } 
    }    
   }
  },
  getClassColorElement:function(){  
    if(this.color_tipo == 'simple')
    {      
      return {
      'text-color-items__blanco':true, 
       'text-color-items__negro':this.se_muestra_al_hacer_scroll

      };            
    }  
    else if( this.color_tipo ==  'invertido')
    {
      return {
      'text-color-items__blanco':true, 
       'text-color-items__blanco':this.se_muestra_al_hacer_scroll

      };  
    }
  }


}

});



Vue.component('menu-primer-triada' ,
{
props:['name_padre','url_padre'],

data:function(){
    return {

         mostrar:false,

    }
}, 
methods:{
  
  mostrar_menu_on_mouseover:function(){
    if(this.$root.mostrar_para_grande )
    {
      this.mostrar = true;
    }    
  },
  ocultar_menu_on_mouse_leave:function(){
    if(this.$root.mostrar_para_grande)
    {
      this.mostrar = false;
    }    
  },
  mostrar_ocultar_con_click:function(){
    if(this.$root.mostrar_para_celuar)
    {
      if(this.mostrar)
      {
        this.mostrar = false;
      }
      else
      {
        this.mostrar = true;
      }
      
    }  
  }
},
computed:{
  getClassUl:function(){   
    if(this.$root.mostrar_para_celuar)
    {
      return {
      'header-ul-primer-tria__celular':true, 
      }
    }
    else
    {
      return {
      'header-ul-primer-tria':true, 
      }
    }
       
  },
  getClassLi:function(){   
    if(this.$root.mostrar_para_celuar)
    {
      return {
      'header-nav-ul-li__celular flex-wrap d-flex flex-row align-items-center justify-content-between w-100':true, 
      }
    }
    else
    {
      return {
      'header-nav-ul-li':true, 
      }
    }
       
  }
  
},
template:'

<li @mouseover="mostrar_menu_on_mouseover"  
    @mouseleave="ocultar_menu_on_mouse_leave"

    
    :class="getClassLi">
    <a :class="$parent.getClassItemsNav" 
         :href="url_padre"> 
         @{{name_padre}} <i v-if="$root.mostrar_para_grande" class="fas fa-angle-down"></i>
    </a>
    <span class="p-2 sub-titulos-class  color-text-gris" 
           v-if="$root.mostrar_para_celuar"
           @click="mostrar_ocultar_con_click">
      <i v-if="mostrar" class="fas fa-angle-up"></i>
      <i v-else class="fas fa-angle-down"></i>
    </span>
     <ul v-if="mostrar" :class="getClassUl">      
       <slot name="opciones"></slot>      
     </ul>
</li>



'



});

Vue.component('menu-segunda-triada' ,
{
props:['name_padre','url_padre'],

data:function(){
    return {

         mostrar:false,

    }
}, 
methods:{
  
  mostrar_menu_on_mouseover:function(){
    if(this.$root.mostrar_para_grande )
    {
      this.mostrar = true;
    }    
  },
  ocultar_menu_on_mouse_leave:function(){
    if(this.$root.mostrar_para_grande)
    {
      this.mostrar = false;
    }    
  },
  mostrar_ocultar_con_click:function(){
    if(this.$root.mostrar_para_celuar)
    {
      if(this.mostrar)
      {
        this.mostrar = false;
      }
      else
      {
        this.mostrar = true;
      }      
    }  
  }
},
computed:{
  getClassUl:function(){   
    if(this.$root.mostrar_para_celuar)
    {
      return {
      'header-ul-segunda-tria__celular':true, 
      }
    }
    else
    {
      return {
      'header-ul-segunda-tria':true, 
      }
    }
       
  },
  getClassLi:function(){   
    if(this.$root.mostrar_para_celuar)
    {
      return {
      'flex-wrap d-flex flex-row align-items-center justify-content-between w-100':true, 
      }
    }
    else
    {
      return {
      '':true, 
      }
    }
       
  }
},
template:'

<li @mouseover="mostrar_menu_on_mouseover"  
    @mouseleave="ocultar_menu_on_mouse_leave"
    :class="getClassLi"
    class="header-li-primer-tria">
     <a 
        :href="url_padre"          
        class="">
        @{{name_padre}}
        <i v-if="$root.mostrar_para_grande" class="fas fa-angle-right"></i>
     </a>
     <span class="p-2 sub-titulos-class  color-text-gris" 
           v-if="$root.mostrar_para_celuar"
           @click="mostrar_ocultar_con_click">
      <i v-if="mostrar" class="fas fa-angle-up"></i>
      <i v-else class="fas fa-angle-down"></i>
     </span>
     <ul v-if="mostrar" :class="getClassUl">      
       <slot name="opciones_segunda_triada"></slot>      
     </ul>
</li>



'



});