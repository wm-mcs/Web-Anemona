Vue.component('producto-lista' ,
{

props:['Empresa','Tipo','Producto']
,  



methods:{

         

},
computed:{
  
  formato_bloque:function(){
    if(this.Tipo == 'bloque')
    {
    return true;
    }
  },
  formato_bloque_slide:function(){
    if(this.Tipo == 'bloque_slide')
    {
    return true;
    }
   } 
   

},


template:'

  <div v-if="formato_bloque" class="col-4 col-md-4 col-lg-4">
    <a href="#" class="item">
      <img :src="Producto.url_img" :alt="Producto.name" class="img-fluid">
      <div class="item-info">
        <h3>@{{Producto.name}}</h3>
        <span class="collection d-block">@{{Producto.categoria_producto.name}}</span>
        <strong class="price">@{{Producto.moneda}} @{{Producto.precio}} </strong>
      </div>
    </a>
  </div>
   <div v-else-if="formato_bloque_slide" class="product">
                <a href="#" class="item">
                  <span class="tag">Sale</span>
                  <img :src="Producto.url_img" :alt="Producto.name" class="img-fluid">
                  <div class="item-info">
                    <h3>@{{Producto.name}}</h3>
                    <span class="collection d-block">@{{Producto.categoria_producto.name}}</span>
                    <strong class="price">@{{Producto.moneda}} @{{Producto.precio}} <del>$30.00</del></strong>
                  </div>
                </a>
    </div>



'



});