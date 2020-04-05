Vue.component('producto-lista' ,
{

props:['Empresa','Tipo']
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
   

},


template:'

  <div v-if="formato_bloque" class="col-6 col-md-6 col-lg-4">
    <a href="#" class="item">
      <img src="images/product_1.jpg" alt="Image" class="img-fluid">
      <div class="item-info">
        <h3>The Shoe</h3>
        <span class="collection d-block">Summer Collection</span>
        <strong class="price">$9.50</strong>
      </div>
    </a>
  </div>
   <div v-else-if="formato_bloque" class="product">
                <a href="#" class="item">
                  <span class="tag">Sale</span>
                  <img src="images/product_2.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>Marc Jacobs Bag</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50 <del>$30.00</del></strong>
                  </div>
                </a>
    </div>



'



});