    <body id="page1">
        <script type="text/javascript">
            $(function() {
                $('.slider')._TMS({
                    duration: 800,
                    easing: 'easeOutQuad',
                    preset: 'diagonalFade',
                    pagination: '.pagination',
                    slideshow: 7000,
                    banners: false,
                    pauseOnHover: true
                })
            })
        </script>
        <!-- header -->
        <header>
            <div class="row-top">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper">
                            <div class="grid_9">
                                <h1>
                                    <a class="logo" href="<?= base_url();?>">family center</a>
                                </h1>  
                            </div>
                            <div class="grid_3">
                                <form id="search-form" method="post" enctype="multipart/form-data">
                                    <fieldset>	
                                        <div class="search-field">
                                            <input name="search" type="text" value="Search" onFocus="if (this.value == 'Search') {
                            this.value = ''
                        }" onBlur="if (this.value == '') {
                    this.value = 'Search'
                }" />
                                        </div>
                                        <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>							
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-bot">
                <div class="row-bot-shadow">
                    <div class="main">
                        <div class="container_12">
                            <div class="grid_12">
                                <nav>
                                    <ul class="menu">
                                        <li class="active"><a href="<?= base_url() ;?>">Inicio</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/academicos" ;?>">Funcionarios</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/estudiante" ;?>">Estudiantes</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/laboral" ;?>">Laboral</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/noticia" ;?>">Noticias</a><strong></strong></li>
                                        <li class="last"><a href="<?= base_url() ."index.php/contacto" ;?>">Contactos</a><strong></strong></li>
                                    </ul>
                                </nav>
                                <div class="slider-wrapper">
                                    <div class="slider">
                                        <ul class="items">
                                            <li>
                                                <img src="<?= base_url() ."images/foto2.png" ;?>" alt="" />
                                            </li>
                                            <li>
                                                <img src="<?= base_url() . "images/foto1.png";?>" alt="" />
                                            </li>
                                            <li>
                                                <img src="<?= base_url() ."images/foto3.png";?>" alt="" />
                                            </li>
                                        </ul>
                                        <ul class="pagination">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header><div class="ic">More Website Templates  @ TemplateMonster.com - August 15th 2011!</div>
        <!-- content -->
        <section id="content">
            <div class="main">
                <div class="container_12">
                    <div class="border-bot margin-bot">
                        <article class="grid_12">
                            <div class="aligncenter inner-top">
                                <strong class="title-1">&quot;Estudiantes Conscientes!&quot;</strong>
                                <strong class="title-2">Bienvenido al portal de la Escuela de Informatica de la Universidad Tecnologica Metropolitana.
El compromiso fundacional asumido por la Escuela de Informatica es la formacion de profesionales de la computacion y la informatica capaces de liderar proyectos de ingenieria informatica, abordar la planificacion estrategica de sistemas de computacion y de gestion informatica, y dirigir las areas de desarrollo y produccion de sistemas informaticos en las organizaciones.
Le invitamos a navegar por nuestro sitio y a ser partícipe de nuestra institucion.</strong>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </div>
                    <div class="wrapper border-bot2 margin-bot">
                        <article class="grid_3">
                            <h3>Mision </h3>
                            La Escuela de Informática es la unidad académica que forma profesionales de la ingeniería especializada en informática, computación y comunicaciones, a través de una docencia especializada y apoyada con investigación    <a class="link-1" href="#">>></a>
                        </article>
                        <article class="grid_3">
                            <h3>Vision</h3>
                            La Escuela de Informática de la Facultad de Ingeniería de la Universidad Tecnológica Metropolitana, proyecta una imagen y un posicionamiento sólidos en el ámbito de la educación superior universitaria presencial y no presencial en ingeniería,    <a class="link-1" href="#">>></a>
                        </article>
                        <article class="grid_3">
                            <h3>Perfil Profesional</h3>
                            Posee un sólido conocimiento en ciencias de la ingeniería y la computación, en sistemas de información y telecomunicaciones, y en ciencias administrativas y económicas. 
 <a class="link-1" href="#">>></a>
                        </article>
                        <article class="grid_3">
                            <h3>Campo ocupacional</h3>
                            Puede desempeñarse en el campo empresarial, comercial, industrial, académico y de servicios, en la gestión de información y en la administración de recursos computacionales, . <a class="link-1" href="#">>></a>
                        </article>
                    </div>
                    
                </div>
            </div>
        </section>