<header-nav :scroll="true" color_tipo="simple" inline-template>
  <header class="py-4 " :class="getClassHeader" role="banner">

        <div class="container-fluid ">
          <div class="row align-items-center justify-content-between ">
            
            <div class="col-6 col-lg-2">
             <a href="{{route('get_home')}}" class="text-left titulos-class" :class="getClassColorElement">
              <i class="fas fa-code"></i>
               

             </a>
            </div> 

          

            
              <nav v-if="mostrar_opciones_del_menu" class="col-lg-8 d-flex flex-column align-items-end" role="navigation" :class="getClassMostrarMenuMovil">
                <ul :class="getClassNavUlEnMovil" class="d-flex flex-column align-items-start flex-lg-row align-items-lg-center m-0 px-lg-3">     
                  <div v-if="$root.mostrar_para_celuar"  v-on:click="set_mostrar_menu_movil" class="p-2 w-100 text-right titulos-class"><i class="fas fa-times"></i>
                  </div>
                  
                    <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('get_home')}}" >Inicio</a></li>


                    <categorias :empresa="Empresa" :categorias="Categorias" ></categorias>
                    {{-- <marcas-nav v-if="Marcas.length" v-for="Marca in marcas_elite" :marca="Marca" :key="Marca.id"></marcas-nav>  --}}
                   
                  <li class="header-nav-ul-li"><a :class="getClassItemsNav" href="#services-section" class="nav-link">Servicios</a></li>          
                  <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('getQuienes')}}">Sobre Be Fitness</a></li>
                  <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('getServicios')}}">Servicios</a></li>
                  <li :class="getClassUlLI"><a :class="getClassItemsNav" href="{{route('getContacto')}}" >Contacto</a>
                  </li>
                  
                </ul>
              </nav> 
              <div v-if="$root.mostrar_para_celuar" v-on:click="set_mostrar_menu_movil" class="col-3 text-right titulos-class" :class="getClassColorElement">
                 <i v-if="!mostrar_menu_en_movil" class="fas fa-bars"></i>
                 
              </div>

          </div>
        </div>      
  </header>
</header-nav>
