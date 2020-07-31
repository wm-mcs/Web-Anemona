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

                     <menu-primer-triada  v-if="$root.categorias.length" name_padre="Categorías" url_padre="{{route('get_home')}}" >
                      /* O p c i o n e s   d e l   m e n ú   */
                      <template slot="opciones" >
                        <li v-for="categoria in $root.categorias" class="header-li-primer-tria">
                           <a :href="categoria.route">@{{categoria.name_arreglado}}</a>
                        </li>
                      </template> 
                     </menu-primer-triada> 
                      <span v-else class="contiene-el-spiner">
                        <div class="cssload-container">
                          <div class="cssload-speeding-wheel"></div>
                        </div>
                      </span>
                   
                    {{-- <marcas-nav v-if="Marcas.length" v-for="Marca in marcas_elite" :marca="Marca" :key="Marca.id"></marcas-nav>  --}}
                   
                        
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

