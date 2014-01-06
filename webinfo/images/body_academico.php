<body id="page4">
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
                                    <li><a href="<?= base_url(); ?>">Inicio</a><strong></strong></li>
                                    <li class="active"><a href="<?= base_url() . "index.php/academicos"; ?>">Funcionarios</a><strong></strong></li>
                                    <li><a href="<?= base_url() ."index.php/estudiante" ;?>">Estudiantes</a><strong></strong></li>
                                    <li><a href="<?= base_url() ."index.php/laboral" ;?>">Laboral</a><strong></strong></li>
                                    <li><a href="<?= base_url() ."index.php/noticia" ;?>">Noticias</a><strong></strong></li>
                                    <li class="last"><a href="<?= base_url() ."index.php/contacto" ;?>">Contactos</a><strong></strong></li>
                                </ul>
                            </nav>
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
                            <strong class="title-1">&quot;Cuerpo Academico&quot;</strong>
                            <strong class="title-2">A lo largo de su desarrollo, la Unidad de Informática y Computación, se ha nutrido de un grupo de profesionales, que con su experiencia y amor por la docencia, han enriquecido la formación de nuestros estudiantes. </strong>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
                <div class="wrapper">
                    <article class="grid_6">
                        <h2 class="indent-bot">Nuestros equipo</h2>
                        <div class="wrapper img-indent-bot">
                            <figure class="img-indent"><img src="<?= base_url() ."images/imagen.php.jpg"?>" alt="" /></figure>
                            <div class="extra-wrap">
                                <h6 class="reg p0"><a class="link" href="#">Mauro Castillo</a></h6>
                                <p>Director de Escuela </p>	

                            </div>
                        </div>
                        <div class="wrapper img-indent-bot">
                            <figure class="img-indent"><img src="<?= base_url() ."images/page4-img3.jpg" ;?>" alt="" /></figure>
                            <div class="extra-wrap">
                                <h6 class="reg p0"><a class="link" href="#">Martita Rojas</a></h6>
                                <p>Nam elit magna</p>
                                profesora de base de datos.
                            </div>
                        </div>
                        <div class="wrapper">
                            <figure class="img-indent"><img src="<?= base_url() ."images/page4-img5.jpg";?>" alt="" /></figure>
                            <div class="extra-wrap">
                                <h6 class="reg p0"><a class="link" href="#">Rene Peña Crack!</a></h6>
                                <p>Nam elit magna</p>
                                profesor de simulacion.
                            </div>
                        </div>
                    </article>		 
                    <article class="grid_6 spacer-3">
                        <div class="indent2">
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="<?= base_url() ."images/page4-img2.jpg";?>" alt="" /></figure>
                                <div class="extra-wrap">
                                    <h6 class="reg p0"><a class="link" href="#">Sara Rojas</a></h6>
                                    <p>Nam elit magna</p>
                                    profesora de Base de datos.
                                </div>
                            </div>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="<?= base_url()."images/page4-img4.jpg";?>" alt="" /></figure>
                                <div class="extra-wrap">
                                    <h6 class="reg p0"><a class="link" href="#">Ricardo Corbinaud</a></h6>
                                    <p>Nam elit magna</p>
                                    Programador en corbi C.
                                </div>
                            </div>
                            <div class="wrapper">
                                <figure class="img-indent"><img src="<?= base_url() ."images/page4-img6.jpg";?>" alt="" /></figure>
                                <div class="extra-wrap">
                                    <h6 class="reg p0"><a class="link" href="#">Pelao Chucheta</a></h6>
                                    <p>Nam elit magna</p>
                                    Wn weno pa chuchear.							</div>
                            </div>
                        </div>
                    </article>		   
                </div>
            </div>
        </div>
    </section>