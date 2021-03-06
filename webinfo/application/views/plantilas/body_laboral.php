<body id="page2">
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
                                    <li><a href="<?= base_url()  ;?>">Inicio</a><strong></strong></li>
                                    <li><a href="<?= base_url() ."index.php/academicos" ;?>">Academicos</a><strong></strong></li>
                                    <li><a href="<?= base_url() ."index.php/estudiante" ;?>">Estudiantes</a><strong></strong></li>
                                    <li class="active"><a href="<?= base_url() ."index.php/laboral" ;?>">Laboral</a><strong></strong></li>
                                    <li><a href="<?= base_url() ."index.php/noticia" ;?>">Noticias</a><strong></strong></li>
                                    <li class="last"><a href="<?= base_url() ."index.php/contacto" ;?>">Contactos</a><strong></strong></li>						</ul>
                            </nav>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section id="content">
        <div class="main">
            <div class="container_12">
                <div class="border-bot margin-bot">
                    <article class="grid_12">
                        <div class="aligncenter inner-top">
                            <strong class="title-1">&quot;Ofertas laborales!&quot;</strong>
                            <strong class="title-2">Ofertas laborales de las mejores empresas del mercado.</strong>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
                <div class="wrapper">
                    <article class="grid_8 suffix_1 spacer-4">
                        <h2>Ofertas laborales UTEM</h2>
                        <?php foreach ($laborales as $laboral): ?>
                            <div class="p3">
                                <time class="tdate-2" datetime="<?= $laboral->fecha_publicacion_l ?>"><?= $laboral->fecha_publicacion_l ?></time>
                                <h3 class="p0"><?= $laboral->titulo_laboral ?></h3>
                                <p align="justify" class="p2"><?= $laboral->alias_usuario ?></p>
                                <div class="wrapper">
                                    <div class="extra-wrap">
                                        <p class="margin-bot"><?= $laboral->cuerpo_laboral ?></p>
                                        <p class="margin-bot"><?= $laboral->contacto_laboral ?></p>
                                        <br><br>
                                    </div>
                                </div>
                                                        <?php endforeach; ?>    
                            </div>
                  </div>
            </div>
        </div>
    </section>
