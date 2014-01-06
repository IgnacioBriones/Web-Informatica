<body id="page2">
    <!-- header -->
    <header>
        <div class="row-top">
            <div class="main">
                <div class="container_12">
                    <div class="wrapper">
                        <div class="grid_9">
                            <h1>
                                <a class="logo" href="<?= base_url(); ?>">family center</a>
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
                                    <li><a href="<?= base_url() . "index.php/academicos"; ?>">Funcionarios</a><strong></strong></li>
                                    <li class="active"><a href="<?= base_url() . "index.php/estudiante"; ?>">Estudiantes</a><strong></strong></li>
                                    <li><a href="<?= base_url() . "index.php/laboral"; ?>">Laboral</a><strong></strong></li>
                                    <li><a href="<?= base_url() . "index.php/noticia"; ?>">Noticias</a><strong></strong></li>
                                    <li class="last"><a href="<?= base_url() . "index.php/contacto"; ?>">Contactos</a><strong></strong></li>						</ul>
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
                            <strong class="title-1">&quot;Estudiantes Computacion e Informatica&quot;</strong>
                            <strong class="title-2">Todo lo que como estudiante puedes necesitar</strong>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
                <div class="wrapper margin-bot">
                    <article class="grid_12">
                        <h2 class="indent-bot">Nuestra Informacion</h2>
                        <div class="wrapper img-indent-bot">
                            <article class="grid_4 alpha">

                            </article>
                        </div>
                        <div class="wrapper border-bot">
                            <article class="grid_4 alpha">
                                <div class="wrapper">
                                    <figure class="img-indent"><img src="<?= base_url() . "images/nuestras_carreras.jpg"; ?>" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6 class="p1"><a class="link" href="#">Nuestras Carreras</a></h6>
                                        Información de las carreras sus mallas y competencias
                                    </div>
                                </div>
                            </article>
                            <article class="grid_4">
                                <div class="wrapper">
                                    <figure class="img-indent"><img src="<?= base_url() . "images/reglamento.jpg"; ?>" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6 class="p1"><a class="link" href="#">Reglamentos</a></h6>
                                        Reglamentos Estudiantiles, de titulación y de las carreras.
                                    </div>
                                </div>
                            </article>
                            <article class="grid_4 omega">
                                <div class="wrapper">
                                    <figure class="img-indent"><img src="<?= base_url() . "images/cee.jpg" ?>" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <h6 class="p1"><a class="link" href="#">Centros de Estudiantes</a></h6>
                                        Historico de los Centros de estudiantes de nuestras carreras.
                                    </div>
                                </div>
                            </article>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>