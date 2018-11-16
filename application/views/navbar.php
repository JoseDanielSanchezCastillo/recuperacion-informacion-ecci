    <nav class="navbar navbar-expand-lg navbar-dark bg-default">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>">Recuperación de información</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-default">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.html">
                                <img src="<?php echo base_url().'public/img/brand/logo-ecci.png'?>">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clustering
                        </a>
                        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbar-default_dropdown_1">
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/que_es_clustering'?>">Definición</a>
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/tipos_clustering'?>">Tipos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            K-Means
                        </a>
                        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbar-default_dropdown_1">
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/que_es_k_means'?>">Definición</a>
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/ejemplo_k_means'?>">Ejemplo</a>
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/codigo_fuente_k_means'?>">Codigo fuente</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HAC
                        </a>
                        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbar-default_dropdown_1">
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/que_es_hac'?>">Definición</a>
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/ejemplo_hac'?>">Ejemplo</a>
                            <a class="dropdown-item" href="<?php echo base_url().'clustering/codigo_fuente_hac'?>">Codigo fuente</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="<?php echo base_url().'clustering/referencias'?>">
                            Referencias
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="<?php echo base_url().'clustering/acerca_de_nosotros'?>">
                            Acerca de nosotros
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

<div class="container contendor_principal">