Vue.component('categorias' ,
{

props:['Empresa']
,  



methods:{

         

},


template:'

  <li class="has-children active">
    <a href="index.html">Collection</a>
    <ul class="dropdown">
      <li><a href="#">Men</a></li>
      <li><a href="#">Women</a></li>
      <li><a href="#">Children</a></li>
      <li class="has-children">
        <a href="#">Sub Menu</a>
        <ul class="dropdown">
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Children</a></li>
        </ul>
      </li>
    </ul>
  </li>


'



});