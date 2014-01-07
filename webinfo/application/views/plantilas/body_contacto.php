    <body id="page6">
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
                                        <li><a href="<?= base_url() ;?>">Inicio</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/academicos" ;?>">Funcionarios</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/estudiante" ;?>">Estudiantes</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/laboral" ;?>">Laboral</a><strong></strong></li>
                                        <li><a href="<?= base_url() ."index.php/noticia" ;?>">Noticias</a><strong></strong></li>
                                        <li class="last active"><a href="<?= base_url() ."index.php/contacto" ;?>">Contactos</a><strong></strong></li>
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
                                <strong class="title-1">Contactanos!</strong>
                                <strong class="title-2">Su opinion es muy importante para nosotros, por favor, complete el siguiente formulario, para comunicarse con la Escuela de Informatica. </strong>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </div>
                    <div class="wrapper">
                        <article class="grid_7 suffix_1 spacer-5">
                            <h2>Contactanos!</h2>
                            <form id="contact-form" method="post" enctype="multipart/form-data">					
                                <fieldset>
                                    <label><span class="text-form">Nombre:</span><input name="p1" type="text" /></label>
                                    <label><span class="text-form">Email:</span><input name="p2" type="text" /></label>   
                                    <label><span class="text-form">telefono:</span><input name="p3" type="text" /></label>									
                                    <div class="wrapper"><div class="text-form">Mensaje:</div><textarea></textarea></div>
                                    <div class="buttons">
                                        <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
                                        <a class="button" href="" onClick="document.getElementById('contact-form').submit()">Enviar</a>
                                    </div>							 
                                </fieldset>						
                            </form>
                        </article>
                        <article class="grid_4">
                            <h2>Encuentranos</h2>
                            <figure class="img-indent-bot">
                                <iframe width="300" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Jos%C3%A9+Pedro+Alessandri+1242,+Santiago,+Chile&amp;aq=t&amp;sll=37.0625,-95.677068&amp;sspn=43.172547,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Jos%C3%A9+Pedro+Alessandri+1242,+%C3%91u%C3%B1oa,+Santiago,+Regi%C3%B3n+Metropolitana,+Chile&amp;t=m&amp;z=14&amp;ll=-33.466001,-70.598277&amp;output=embed"></iframe><br />
                            </figure>
                            <dl>
                                <dt class="indent-bot">Avenida José Pedro Alessandri 1242,<br> Ñuñoa, Santiago de Chile..</dt>
                                <dd><span>Telefono:</span>  (56 02) 7877100</dd>
                                
                                <dd><span>E-mail:</span> <a href="#">contacto.informatica@utem.cl</a></dd>
                            </dl>
                        </article>
                    </div>
                </div>
            </div>
        </section>
