Vue.component('marca-lista' ,
{

props:['marca']
,  



methods:{

         

},
computed:{
  
  
   

},


template:'
 

  <div class="col-6 col-lg-3 mb-4">
  	<a :href="marca.route" class="item">
	    <div class="w-100 ">
	      <div class="d-flex flex-column align-items-center">
	        <img :src="marca.url_img_foto_principal" :alt="marca.name" class="img-cover-con-formato-rectangular border-gris">
	      </div>   
	    </div>
    </a>
  </div>
   



'



});