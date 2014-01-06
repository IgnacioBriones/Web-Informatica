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
                                    <li><a href="<?= base_url() ."index.php/acedemicos" ;?>">Academicos</a><strong></strong></li>
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
    </header><div class="ic">More Website Templates  @ TemplateMonster.com - August 15th 2011!</div>