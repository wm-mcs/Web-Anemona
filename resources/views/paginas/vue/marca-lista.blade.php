Vue.component('marca-lista' ,
{

props:['Marca']
,  



methods:{

         

},
computed:{
  
  
   

},


template:'

  <div  class="col-6 col-md-6 col-lg-3">
    <a :href="Marca.route" class="item">
      <img :src="Marca.url_img" :alt="Marca.name" class="img-fluid">
      <div class="item-info">
        <h3>@{{Marca.name}}</h3>
        <span class="collection d-block">@{{Marca.tipo_de_representacion_marca}}</span>
        
      </div>
    </a>
  </div>
   



'



});