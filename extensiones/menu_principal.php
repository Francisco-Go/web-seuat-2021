  <div id="wrap">
  <header>
    <div class="inner relative">
      
    <?php 
    //<a class="logo pt-7" href="#"><img src="../images/logo_seuat_desktop_blanco.png" width="220" height="45" alt="SEUAT"></a>

    if ($paginaweb == 'raiz'){
      echo '
        <a class="logo pt-7" href="index"><img src="images/logo_seuat_desktop_blanco.png" width="220" height="45" alt="SEUAT"></a>

    <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl white-text"></i></a>
      <nav id="navigation">
        <ul id="main-menu">
          <li class="current-menu-item"><a href="index">SEUAT</a></li>
          <li class="parent">
            <a href="#">Planteles</a>
            <ul class="sub-menu">
              <li><a href="#"> Tuxtla Gutiérrez</a></li>
              <li><a href="#">  Yajalón</a></li>
              <li><a href="#"> Reforma</a></li>
              <li>
                <a class="parent" href="#"> Tapachula</a>
                <!--
                <ul class="sub-menu">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2r</a></li>
                  <li><a href="#">3r</a></li>
                  <li><a href="#">4</a></li>
                </ul>-->
              </li>
              <li><a href="#"> Tapilula</a></li>
              <li><a href="#"> Comitán</a></li>
              <li><a href="#"> Campeche</a></li>
            </ul>
          </li>
          <li><a href="#">Secundaria</a></li>
          <li class="parent">
            <a href="#">Media Superior</a>
            <ul class="sub-menu">
              <li><a href="#">Bachillerato General <!--CEJHET--></a></li>
              <li><a href="#">Centro de Asesoría de Preparatoria Abierta <!--CEJHET--></a></li>
              <li><a href="#">Bachillerato Tecnológico <!--ITECH--></a></li>
            </ul>
          </li>
          <li><a href="licenciaturas-seuat">Licenciaturas</a></li>
          <li class="parent">
            <a href="#">Posgrados</a>
            <ul class="sub-menu">
              <li><a href="#">Especialidades</a></li>
              <li><a href="#">Maestrías</a></li>
              <li><a href="posgrados/doctorados">Doctorados</a></li>
            </ul>
          </li>
          <li><a href="#">Egresados</a></li>
          <li><a href="#">Directorio</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
      ';
    }elseif ($paginaweb == 'primer_nivel'){
      echo '
       <a class="logo pt-7" href="../index"><img src="../images/logo_seuat_desktop_blanco.png" width="220" height="45" alt="SEUAT"></a>

      <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl white-text"></i></a>
      <nav id="navigation">
        <ul id="main-menu">
          <li class="current-menu-item"><a href="../index">SEUAT</a></li>
          <li class="parent">
            <a href="#">Planteles</a>
            <ul class="sub-menu">
              <li><a href="#"> Tuxtla Gutiérrez</a></li>
              <li><a href="#">  Yajalón</a></li>
              <li><a href="#"> Reforma</a></li>
              <li>
                <a class="parent" href="#"> Tapachula</a>
                <!--
                <ul class="sub-menu">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2r</a></li>
                  <li><a href="#">3r</a></li>
                  <li><a href="#">4</a></li>
                </ul>-->
              </li>
              <li><a href="#"> Tapilula</a></li>
              <li><a href="#"> Comitán</a></li>
              <li><a href="#"> Campeche</a></li>              
            </ul>
          </li>
          <li><a href="#">Secundaria</a></li>
          <li class="parent">
            <a href="#">Media Superior</a>
            <ul class="sub-menu">
              <li><a href="#">Bachillerato General <!--CEJHET--></a></li>
              <li><a href="#">Centro de Asesoría de Preparatoria Abierta <!--CEJHET--></a></li>
              <li><a href="#">Bachillerato Tecnológico <!--ITECH--></a></li>
            </ul>
          </li>
          <li><a href="../licenciaturas-seuat">Licenciaturas</a></li>
          <li class="parent">
            <a href="#">Posgrados</a>
            <ul class="sub-menu">
              <li><a href="#">Especialidades</a></li>
              <li><a href="#">Maestrías</a></li>
              <li><a href="../posgrados/doctorados">Doctorados</a></li>
            </ul>
          </li>
          <li><a href="#">Egresados</a></li>
          <li><a href="#">Directorio</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
      ';
    }else{
      echo '
        <a class="logo pt-4" href="index"><img src="images/logo_seuat_desktop.png" width="220" height="45"  alt="SEUAT"></a>

              <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl white-text"></i></a>
      <nav id="navigation">
        <ul id="main-menu">
          <li class="current-menu-item"><a href="index">SEUAT</a></li>
          <li class="parent">
            <a href="#">Planteles</a>
            <ul class="sub-menu">
              <li><a href="#"> Tuxtla Gutiérrez</a></li>
              <li><a href="#">  Yajalón</a></li>
              <li><a href="#"> Reforma</a></li>
              <li>
                <a class="parent" href="#"> Tapachula</a>
                <!--
                <ul class="sub-menu">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2r</a></li>
                  <li><a href="#">3r</a></li>
                  <li><a href="#">4</a></li>
                </ul>-->
              </li>
              <li><a href="#"> Tapilula</a></li>
              <li><a href="#"> Comitán</a></li>
              <li><a href="#"> Campeche</a></li>              
            </ul>
          </li>
          <li><a href="#">Secundaria</a></li>
          <li class="parent">
            <a href="#">Media Superior</a>
            <ul class="sub-menu">
              <li><a href="#">Bachillerato General <!--CEJHET--></a></li>
              <li><a href="#">Centro de Asesoría de Preparatoria Abierta <!--CEJHET--></a></li>
              <li><a href="#">Bachillerato Tecnológico <!--ITECH--></a></li>
            </ul>
          </li>
          <li><a href="licenciaturas-seuat">Licenciaturas</a></li>
          <li class="parent">
            <a href="#">Posgrados</a>
            <ul class="sub-menu">
              <li><a href="#">Especialidades</a></li>
              <li><a href="#">Maestrías</a></li>
              <li><a href="posgrados/doctorados">Doctorados</a></li>
            </ul>
          </li>
          <li><a href="#">Egresados</a></li>
          <li><a href="#">Directorio</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
      ';
    }
    ?>


    </div>
  </header> 
  </div> 