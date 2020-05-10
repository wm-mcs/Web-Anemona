Vue.component('producto-lista' ,
{

props:['empresa','tipo','producto']
,  



methods:{

         

},
computed:{
  
  formato_bloque:function(){
    if(this.tipo == 'bloque')
    {
    return true;
    }
  },
  formato_bloque_slide:function(){
    if(this.tipo == 'bloque_slide')
    {
    return true;
    }
   } 
   

},


template:'

  <div v-if="formato_bloque" class="col-6 col-md-6 col-lg-3">
    <a :href="producto.route" class="item">
      <img :src="producto.url_img" :alt="producto.name" class="img-fluid">
      <div class="item-info">
        <h3>@{{producto.name_arreglado}}</h3>
        <span class="collection d-block text-bold">@{{producto.categoria_producto.name}}</span>
        <strong class="price text-bold"> @{{producto.moneda}} @{{producto.precio}} </strong>
      </div>
    </a>
  </div>
'



});