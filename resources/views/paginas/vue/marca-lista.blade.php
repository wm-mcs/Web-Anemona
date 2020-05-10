Vue.component('marca-lista' ,
{

props:['marca']
,  



methods:{

         

},
computed:{
  
  
   

},


template:'

  <div  class="col-6 col-md-6 col-lg-3">
    <a :href="marca.route" class="item">
      <img :src="marca.url_img" :alt="marca.name" class="img-fluid">
      <div class="item-info">
        <h3>@{{marca.name_arreglado}}</h3>
        <span class="collection d-block">@{{marca.tipo_de_representacion_marca}}</span>
        
      </div>
    </a>
  </div>
   



'



});