<header-nav :scroll="true" color_tipo="simple" inline-template>
  <header class="py-2 " :class="getClassHeader" role="banner">

        <div class="container-fluid ">
          <div class="row align-items-center justify-content-between ">
            
            <div class="col-5 col-lg-3 ">
               <a href="{{route('get_home')}}" class="d-block">
                 @yield('logo-imagenes')                  
               </a>
            </div> 

          

            
              <nav v-if="mostrar_opciones_del_menu" class="col-lg-8 d-flex flex-column align-items-end" role="navigation" :class="getClassMostrarMenuMovil">
                <ul :class="getClassNavUlEnMovil" class="d-flex flex-column align-items-start flex-lg-row align-items-lg-center m-0 px-lg-3">     
                  <div v-if="$root.mostrar_para_celuar"  v-on:click="set_mostrar_menu_movil" class="p-2 w-100 text-right titulos-class"><i class="fas fa-times"></i>
                  </div>
                  
                    <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('get_home')}}" >Inicio</a></li>

                     {{-- C a t e g o r í a s --}}
                     <menu-primer-triada  v-if="$root.Categorias.length" name_padre="Categorías" url_padre="{{route('get_home')}}" >
                      
                      <template slot="opciones" >
                        <li v-for="categoria in $root.Categorias" class="header-li-primer-tria">
                           <a :href="categoria.route">@{{categoria.name_arreglado}}</a>
                        </li>
                      </template> 
                     </menu-primer-triada> 
                      <span v-else class="contiene-el-spiner">
                        <div class="cssload-container">
                          <div class="cssload-speeding-wheel"></div>
                        </div>
                      </span>

                     {{-- M a r c a s   e l i t e  --}}
                       <menu-primer-triada  v-for="Marca in $root.marcas_elite" v-if="$root.Marcas.length" :name_padre="Marca.name_arreglado" :url_padre="Marca.route" >
                      
                      <template slot="opciones" >
                        <li v-for="marca in Marca.categorias_de_marca" class="header-li-primer-tria">
                           <a :href="marca.route">@{{marca.name_arreglado}}</a>
                        </li>
                      </template> 
                     </menu-primer-triada> 
                      <span v-else class="contiene-el-spiner">
                        <div class="cssload-container">
                          <div class="cssload-speeding-wheel"></div>
                        </div>
                      </span>
                   
                   
                   
                        
                  <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('getQuienes')}}">Sobre Be Fitness</a></li>
                  <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('getServicios')}}">Servicios</a></li>
                  <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('getContacto')}}" >Contacto</a>
                  </li>
                  <img  data-src="{{url()}}/imagenes/Pais/bandera-de-uruguay.jpg" class="icono-de-uruguay">
                  
                </ul>
              </nav> 
              <div v-if="$root.mostrar_para_celuar" v-on:click="set_mostrar_menu_movil" class="col-3 text-right titulos-class" :class="getClassColorElement">
                 <i v-if="!mostrar_menu_en_movil" class="fas fa-bars"></i>
                 
              </div>

          </div>
        </div>      
  </header>
</header-nav>

