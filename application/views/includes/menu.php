<?php $this->lang->load('html_footer_lang', 'portuguese');?>
    
<style>

/* -------------------------------------------------------------------------------------------------- */
/* --------------------------------------------- Imports -------------------------------------------- */

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

@font-face {
    font-family: 'Dancing Script';
    src: url(<?php echo base_url("assets\fonts\DancingScript-VariableFont_wght.ttf");?>) format('truetype');
}

@font-face {
    font-family: 'Dongle';
    src: url(<?php echo base_url("assets/fonts/dongle.ttf");?>);
}

.dancingScript{
    font-family: 'Dancing Script', cursive !important;
}

.dongle{
    font-family: 'Dongle', sans-serif !important;
}


/* -------------------------------------------------------------------------------------------------- */
/* -------------------------------------------- Globais --------------------------------------------- */

body{
    background: #f9fbfd;
}

hr{
    border: 2px solid rgba(128, 128, 128, 0.70);
    margin-left: clamp(1px, 2vw, 50px);
    margin-right: clamp(1px, 2vw, 50px);
    margin-top: 0px;
    margin-bottom: 0px;
}

h5{
    margin-block-start: 0px !important;
    margin-block-end: 0px !important;
    margin-inline-start: 0px !important;
    margin-inline-end: 0px !important;
}

.containerMenu{
    justify-content: center;
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .05);
    padding-left: calc(var(--bs-gutter-x) * .05);
    margin-right: auto !important;
    margin-left: auto !important;

}

.rowMenu {
    /* flex-wrap: wrap; */
    /* flex-shrink: 0; */
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
}

.efeitoFundoMenu {
    /* background-color: #202327 !important; */
    background-image: linear-gradient(to bottom, rgba(250, 250, 250, 1) 95%, rgba(250, 250, 250, 0) 100%);
    padding-bottom: 20px;
}

.modoEscuro .efeitoFundoMenu {
    /* background-color: #202327 !important; */
    background-image: linear-gradient(to bottom, rgba(32, 35, 39, 1) 95%, rgba(32, 35, 39, 0) 100%);
    padding-bottom: 20px;
}

.efeitoFundoMenuHorizontal {
    height: 70%;
    right: 0;
    background-color: none;
    background-image: linear-gradient(to left, rgba(250, 250, 250, 1) 30%, rgba(250, 250, 250, 0) 60%);
    padding-right: 40px;
    z-index: 10;
    position: absolute;
}
.modoEscuro .efeitoFundoMenuHorizontal {
    background-image: linear-gradient(to left, rgba(32, 35, 39, 1) 30%, rgba(32, 35, 39, 0) 60%);
}

h4, .h4, .h4, h5, .h5, .h5, h6, .h6, .h6 {
font-weight: 400
}


/* -------------------------------------------------------------------------------------------------- */
/* ------------------------------------ Menu 1 - Card informacoesrmativo ----------------------------------- */

.limiteImagem{
    width: clamp(1px, 15vw, 100px);
    height: clamp(1px, 15vw, 100px);
}
.circuloAvatar {
    /* width: clamp(1px, 3.8rem, 50px);
    height: clamp(1px, 3.8rem, 50px); */
    font-family: 'Dongle', sans-serif;
    background-color: rgb(4, 139, 139);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    /* font-size: 3.5rem; */
    color: #fff;
}

.caixaTextoCentral{
    position: relative;
    /* min-height: 1px; */
    /* padding-right: 15px;
    padding-left: 15px; */
}

.menu1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 10% !important;
    flex: 0 0 10% !important;
    max-width: 100% !important;
    }

.circuloDavi {
    width: clamp(1px, 20vw, 50px);
    height: clamp(1px, 20vw, 50px);
    font-family: 'Dongle', sans-serif;
    background-color: rgb(4, 139, 139);
    border-radius: 50%;
    display: flex;
    justify-content: center !important;
    align-items: center !important;
    font-size: clamp(1px, 15vw, 40px);
    color: #fff;
}



/* -------------------------------------------------------------------------------------------------- */
/* --------------------------------------------- Menu 2 --------------------------------------------- */

.rolagemHorizontal {
  overflow-x: auto;
}

/* Estilizando a barra de rolagem da rolagemHorizontal em navegadores WebKit (Chrome, Safari) */
.rolagemHorizontal::-webkit-scrollbar {
    display: none;
    height: 6px;
    border-radius: 4px;
    padding-left: 6px;
    /* background-color: rgba(0, 0, 0, 0.5); */
    background-color: rgba(4, 139, 139, 0.005);
}

.rolagemHorizontal::-webkit-scrollbar-track {
    /* background-color: #f1f1f1; */
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.2);
}

.rolagemHorizontal::-webkit-scrollbar-thumb {
    /* background-color: #888; */
    border-radius: 4px;
    background-color: rgba(4, 139, 139, 1);
    /* box-shadow: inset 0px 4px 10px rgba(0, 0, 0, 0.5); */
    box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.4);
}
.rolagemHorizontal::-webkit-scrollbar-thumb:hover {
    /* background-color: #555; */
    border-radius: 4px;
    background-color: rgba(0, 0, 0, 1);
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px;
  color: #fff;
  font-family: "roboto";
  text-align: center;
  /* border-radius: clamp(1vw, calc((1vw - 20px)), 2vw); */
  transition: transform 0.2s ease-in-out;
  /* background-color: #007bff; */
  /* width: clamp(5em, 10em, calc((100vw - 40px) / 4));
  height: clamp(5em, 10em, calc((100vw - 40px) / 4)); */
}

.iconeMenu{
    font-size: clamp(4vw, 10vw, 15vw);
}

.col-3-menu{
    -webkit-box-flex: 0;
    -ms-flex: 0 0 26.5% !important;
    flex: 0 0 26.5% !important;
    max-width: 26.5% !important;
}

.card-title{
    font-size: clamp(1px, 1.2vw + 0.5em, 35px);
    padding-top: 1.5vw;
    margin: 0px;
    letter-spacing: 0.05em;
    
}

.card-block {
	/* width: calc((23vw)); */
    width: clamp(10px, 23vw, 160px);
    /* width: clamp(10vw, calc((8vw - 20px)), 15vw); */
    height: clamp(10px, 23vw, 160px);
    /* height: calc((23vw)); */
    /* height: clamp(vw, calc((8vw - 20px)), 15vw); */
	background-color: #fff;
	border: none;
	background-position: center;
	background-size: cover;
	transition: all 0.2s ease-in-out !important;
	/* border-radius: 24px; */
    border-radius: clamp(1vw, calc((2.5vw +1px)), 4vw);
    /* box-shadow: inset 0.5em -1em 2px rgba(0, 0, 0, 0.1); */
    /* box-shadow: inset  -5em 10px -10px; */
    /* box-shadow: inset 5em 1em gold; */
    box-shadow: 0px clamp(1px, 0.6vw, 6.4px) clamp(1px, 0.6vw, 6.4px) rgba(0, 0, 0, 0.25);
}

.modoEscuro .card-block{
    box-shadow: 3px clamp(3px, 0.6vw, 6.4px) clamp(5px, 0.6vw, 6.4px) rgba(0, 0, 0);
}

.card-block:hover:not(.pressionado) {
    transform: scale(1.05);
	box-shadow: none;
	opacity: 0.9;
}

.pressionado {
    box-shadow: inset 0px clamp(1px, 0.6vw, 6.4px) clamp(1px, 0.6vw, 6.4px) clamp(1px, 0.3vw, 3px) rgba(0, 0, 0, 0.3) !important;
}

/* .pressionado .card-block:hover{
    transition: none !important;
    transform: none !important;
	opacity: none !important;
} */

.card-inicio {
    background-color:#048b8b;
}

.card-vitais {
    background-color:#F06292;
}

.card-exames {
    background-color:#8C96FF;
}

.card-fichaMedica {
    background-color:#FFFF;
    color: #8C96FF;
} 

/* .card-configuracoes {
    background-color:#fcd573;
} */

/* .d_davi{
    transform: translateY(5px);
} */

@media (min-width: 700px) {
    .col-3-menu {
        -webkit-box-flex: 0;
        -ms-flex: none !important;
        flex: none !important;
        max-width: 190px !important;
    }

    .card-title{
        font-size: 14px;
        padding-top: 10.5px;
    }

    .iconeMenu{
        font-size: 55px;
    }
}

/* Modificar a medida de acordo com a quantidade de card */
/* 790px para 4 cards, 930px para 5 cards, YYYpx para 6 cards... */ 
@media (min-width: 790px){ 
    .rolagemHorizontal {
        justify-content: center;
        align-items: center;
    }

    .card-block {
        border-radius: 22px;
    }
}

/* -------------------------------------------------------------------------------------------------- */
/* ------------------------------------ Menu Lateral para desktop ----------------------------------- */
@media (max-width: 1199px) {
        .menuMobile {
            display: block;
        }

        .menuDesktop {
            display: none;
        }
    }


    @media (min-width: 1200px) {
      .menuMobile {
        display: none;
      }

      .menuDesktop {
        display: block;
      }
    }

    .estiloMenuLateral {
        height: 100vh;
        min-height: 500px;
        color: #fff;
        padding-top: 2rem;
    }

    .estiloMenuLateral-sticky {
        position: relative;
        top: 1rem;
        height: calc(100vh - 20rem);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .estiloMenuLateral .nav-link {
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
    }

    .col-xl-2 {
        transition: all 0.3s;
    }

@media (min-width: 1200px) {
    .estiloMenuLateral {
        width: 230px;
        flex-basis: 230px;
    }

    .col-xl-2:hover {
        width: 230px;
        flex-basis: 230px;
    }

    .col-xl-10 {
        transition: all 0.3s;
    }

    .col-xl-10:hover {
        width: calc(100% - 230px);
        flex-basis: calc(100% - 230px);
    }
}


.nav-item .pressionadoDesktop{
    color: white;
}

.daviEscrita{
    font-size: clamp(1px, 2.5vw + 1.8em, 45px);
    /* text-shadow: #fff; */
    font-weight: 400;
    color: #048B8B;
}

.daviEscrita {
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    }


/* -------------------------------------------------------------------------------------------------- */
/* ------------------------------------------ Borda lateral ----------------------------------------- */
.estiloMenuLateral {
    position: fixed;
    top: 80px;
    bottom: 0;
    left: 0;
    width: 300px;
    /* margin: 5px; */
    display: flexbox;
    z-index: 1000;
    color: #fff;
    font-weight: 200;
    background: #fff;
    -webkit-box-shadow: 4px 4px 10px rgba(69,65,78,.06);
    -moz-box-shadow: 4px 4px 10px rgba(69,65,78,.06);
    box-shadow: 4px 4px 10px rgba(69,65,78,.06);
    transition: all .3s;
    height: 100vh;
    min-height: 500px;
    padding-top: 1rem;
    border-top-right-radius: 20px;
}

.modoEscuro .estiloMenuLateral {

    color: #fff;
    font-weight: 200;
    background: #343a4099;
    -webkit-box-shadow: 4px 4px 10px rgba(69,65,78,.06);
    -moz-box-shadow: 4px 4px 10px rgba(69,65,78,.06);
    box-shadow: 4px 4px 10px rgba(69,65,78,.06);

}

.estiloMenuLateral .usuario {
    margin-top: 20px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 12.5px;
    border-bottom: 1px solid #f1f1f1;
    /* display: block; */
    margin-left: 10px;
    margin-right: 10px;
}

.estiloMenuLateral .usuario .informacoes a>span {
    font-size: 18px;
    font-weight: 400;
    color: #777;
    display: flex;
    flex-direction: column;

}

.estiloMenuLateral .usuario .informacoes a>span .nome {
    padding-top: 12px;
    font-size: 18px;
    font-weight: 400;
    color: #777;
    display: flex;
    flex-direction: column;
    margin-left: auto !important;
    margin-right: auto !important;
}

.modoEscuro .estiloMenuLateral .usuario .informacoes a>span .nome {
    color: #fafafa;
}

.estiloMenuLateral .usuario .informacoes a>span .tipoUsuario {
    color: #555;
    font-weight: 600;
    font-size: 14px;
    margin-top: 5px;
    margin-left: auto;
    margin-right: auto;
}

.modoEscuro .estiloMenuLateral .usuario .informacoes a>span .tipoUsuario {
    color: #fafafa99;
}

.TamanhoFotoAvatar {
    width: 120px;
    height: 120px;
    margin-left: auto;
    margin-right: auto;
    align-items: center !important;
    justify-content: center !important;
}

.avatar-img {
    width: 100%;
    height: 100%;
}
.rounded-circle, .avatar.rounded-circle img {
    border-radius: 50% !important;
}

.estiloMenuLateral .nav {
    /* display: block; */
    float: none;
    margin-top: 20px;
}

.estiloMenuLateral.estiloMenuLateral .nav .nav-item {
    padding: 0 15px;
}

.estiloMenuLateral .nav>.nav-item {
    display: list-item;
}

li {
    display: list-item;
    text-align: -webkit-match-parent;
}

.estiloMenuLateral.estiloMenuLateral .nav.nav-primary>.nav-item.pressionadoDesktop>a {
    background: #1572e8!important;
    box-shadow: 4px 4px 10px 0 rgba(0,0,0,.1),4px 4px 15px -5px rgba(21,114,232,.4)!important;
    color: white;
}

.estiloMenuLateral.estiloMenuLateral .nav .nav-item a {
    padding: 8px 10px;
    border-radius: 5px;
}

.estiloMenuLateral .nav>.nav-item a {
    display: flex;
    align-items: center;
    color: #575962;
    padding: 6px 25px;
    width: 100%;
    font-size: 14px;
    font-weight: 400;
    position: relative;
    margin-bottom: 3px;
}

.modoEscuro .estiloMenuLateral .nav>.nav-item a {
    color: #fafafa99;

}

.estiloMenuLateral .nav-link {
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
}

.nav-link {
    /* display: block; */
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color: var(--bs-nav-link-color);
    text-decoration: none;
    background: 0 0;
    border: 0;
    transition: color .15s ease-in-out,
    background-color .15s ease-in-out,
    border-color .15s ease-in-out;
}

.estiloMenuLateral.estiloMenuLateral .nav .nav-item a:hover {
    background: rgba(199,199,199,.2);
}

.conteudoTela {
    display: none;
}

.conteudoTela.ativa {
    display: block;
}

/* -------------------------------------------------------------------------------------------------- */
/* ------------------------------------------- Novo Menu 1 ------------------------------------------ */
    .footerMenu{
        /* position: fixed; */
        top: 0;
        width: 100%;
        z-index: 99999;
    }

    .containerFooterMenu{
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        width: 100%;
        padding-right: calc(var(--bs-gutter-x) * .5);
        padding-left: calc(var(--bs-gutter-x) * .5);
        margin-right: auto;
        margin-left: auto;
    }

    .efeitoFundoFooter {
        background-image: linear-gradient(to top, rgba(250, 250, 250, 1) 75%, rgba(250, 250, 250, 0) 100%);
    }

    .modoEscuro .efeitoFundoFooter {
        background-image: linear-gradient(to top, rgba(32, 35, 39, 1) 75%, rgba(32, 35, 39, 0) 100%);
    }

    .iconeMenuFooter {
        font-size: clamp(0.2vw, 4vw, 25px);
        color: #048B8B;
        border-radius: 50%;
        padding: 8px;
        border: 2px solid #048b8b7e;
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
        transform: translateX(-10px);
    }

    .modoEscuro .iconeMenuFooter {
        box-shadow: 0px 0px 2px rgba(255,2550, 255, 0.5);
    }

    .iconeMenuFooterDesk{
        font-size: clamp(0.2vw, 2.5vw, 20px);
        color: #048B8B;
        border-radius: 50%;
        padding: 8px;
        border: 2px solid #048b8b7e;
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
        transform: translateX(-10px);
    }

</style>


<body>

            
<!-------------------------------------------------------------------------------------------------------->
<!--------------------------------------------- Menu Mobile  --------------------------------------------->
    <div class="menuMobile">
        <div id="divMenuMob" class="containerMenu col-xl-8 justify-content-center align-items-center fixed-top efeitoFundoMenu ">

<!-------------------------------------------------------------------------------------------------------->
<!------------------------------------------------ Menu 1  ----------------------------------------------->

            <header class="footerMenu efeitoFundoFooter p-0 m-0">
                <div class="containerFooterMenu">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-1 justify-content-center align-items-center">
                            <a id="abrirConfiguracoes" class="circuloIcone" style="text-decoration: none; color: inherit;">
                                <i class="fa fa-cog iconeMenuFooter"></i>
                            </a>
                        </div>
                        <div class="col-9 text-center dongle daviEscrita">
                            DAVI
                        </div>
                        <div class="col-1 ">
                            <a style="text-decoration: none; color: inherit;" href="<?php echo base_url('configuracoes/faleConosco')?>">
                                <i class="fa-solid fa-bullhorn justify-content-center align-items-center iconeMenuFooter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------ Menu 2 ----------------------------------------------->    

            <hr>
            <div class="efeitoFundoMenuHorizontal" style="padding-top: 50px;"></div>
                <div class="rolagemHorizontal row rowMenu flex-row flex-nowrap mt-1 pb-2 pt-1">
                        
                    <a class="col-3-menu linkPagina m-1 ms-0" onclick="abrirMenuItem('dashboard/inicio')">
                        <div id="card-inicio" class="card card-block card-inicio" >
                            <i id="inicioPulsar" class="iconeMenu fa-solid fa-home-heart"></i>
                            <h5 id="card-title" class="card-title">Início</h5>
                        </div>
                    </a>
                    <a class="col-3-menu linkPagina m-1" onclick="abrirMenuItem('dashboard/vitais')">
                        <div id="card-vitais" class="card card-block card-vitais">
                            <i id="vitaisPulsar" class="iconeMenu fas fa-heartbeat"></i>
                            <h5 id="card-title" class="card-title">Vitais</h5>
                        </div>
                    </a>
                    <a class="col-3-menu linkPagina m-1" onclick="abrirMenuItem('dashboard/exames')">
                        <div id="card-exames" class="card card-block card-exames">
                            <i id="examesPulsar" class="iconeMenu fas fa-solid fa-file-waveform"></i>
                            <h5 id="card-title" class="card-title">Exames</h5>
                        </div>
                    </a>
                    <a class="col-3-menu linkPagina m-1" onclick="abrirMenuItem('dashboard/ficha_medica')">
                        <div id="card-fichaMedica" class="card card-block card-fichaMedica">
                            <i id="remediosPulsar" class="iconeMenu fas fa-solid fa-file-medical"></i>
                            <h5 id="card-title" class="card-title">Ficha</h5>
                        </div>
                    </a>
                    <!-- <a class="col-3-menu linkPagina m-1" href="<//?php echo base_url('configuracoes'); ?>">
                        <div id="card-configuracoes" class="card card-block card-configuracoes">
                            <i id="inicioPulsar" class="iconeMenu fas fa-gear"></i>
                            <h5 id="card-title" class="card-title">Configurações</h5>
                        </div>
                    </a> -->
                </div>
                <hr>
            </div>
        </div>

    </div>


<!-------------------------------------------------------------------------------------------------------->
<!--------------------------------------------- Menu Desktop  -------------------------------------------->

    <div class="menuDesktop">
        <div id="divMenuDesk" class="containerMenu efeitoFundoMenu ">

<!-------------------------------------------------------------------------------------------------------->
<!------------------------------------------------ Menu 1  ----------------------------------------------->

            <header class="footerMenu col-xl-8 efeitoFundoFooter w-100">
                <div class="containerFooterMenu">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-1 justify-content-center align-items-center">
                            <a id="abrirConfiguracoesDesk" style="text-decoration: none; color: inherit;">
                                <i class="fa fa-cog iconeMenuFooterDesk"></i>
                            </a>
                        </div>
                        <div class="col-9 text-center dongle daviEscrita">
                            DAVI
                        </div>
                        <div class="col-1">
                            <a style="text-decoration: none; color: inherit;" href="<?php echo base_url('configuracoes/faleConosco')?>">
                                <i class="fa-solid fa-bullhorn justify-content-center align-items-center iconeMenuFooterDesk"></i>
                            </a>
                        </div>
                    </div>
                </div><hr>
            </header>

<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------ Menu 2 (Lateral) ------------------------------------------->  

            <div class="estiloMenuLateral">

                <div class="usuario">
                    <div class="TamanhoFotoAvatar">
                        <img src="https://picsum.photos/500" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="informacoes">
                        <a data-toggle="collapse" href="#menu1persona" aria-expanded="true">
                            <span>
                                <span class="nome nomeUsuario"></span>
                                <span class="tipoUsuario" id="emailDesk"></span>
                                <span class="tipoUsuario idadeUsuario" ></span>
                            </span>
                        </a>
                    </div>
                </div>
                <ul class="nav flex-column nav-primary">
                    <li id="telaInicioDesktop" class="nav-item pressionadoDesktop">
                        <a class="nav-link" onclick="abrirMenuItem('dashboard/inicio')">
                            <i class="fas fa-solid fa-home-heart"></i>
                            <span class="nav-link-text" style="margin-left: 10px;">Início</span>
                            <i class="fa-solid fa-angles-right" style="margin-left: auto; margin-right: 10px; transition: all .5s"></i>
                        </a>
                    </li>
                    <li id="telaVitaisDesktop" class="nav-item">
                        <a class="nav-link" onclick="abrirMenuItem('dashboard/vitais')">
                            <i class="fas fa-heartbeat"></i>
                            <span class="nav-link-text" style="margin-left: 10px;">Vitais</span>
                            <i class="fa-solid fa-angles-right" style="margin-left: auto; margin-right: 10px; transition: all .5s"></i>
                        </a>
                    </li>
                    <li id="telaExamesDesktop" class="nav-item">
                        <a class="nav-link" onclick="abrirMenuItem('dashboard/exames')">
                            <i class="fas fa-solid fa-file-waveform"></i>
                            <span class="nav-link-text" style="margin-left: 10px;">Exames</span>
                            <i class="fa-solid fa-angles-right" style="margin-left: auto; margin-right: 10px; transition: all .5s"></i>
                        </a>
                    </li>
                    <li id="telaFichaMedicaDesktop" class="nav-item">
                        <a class="nav-link" onclick="abrirMenuItem('dashboard/ficha_medica')">
                            <i class="fas fa-solid fa-file-medical"></i>
                            <span class="nav-link-text" style="margin-left: 10px;">Ficha</span>
                            <i class="fa-solid fa-angles-right" style="margin-left: auto; margin-right: 10px; transition: all .5s"></i>
                        </a>
                    </li>
                </ul>
            </div>

		</div>
    </div>


<!-- Div para exibir o conteúdo dinâmico -->
<div id="conteudo" class="conteudo"></div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
/* ----------------------------------------------------------------------------------------------------- */
/* --------------------------------------------- Navegação --------------------------------------------- */

    function abrirMenuItem(nomeDaTela){
        localStorage.setItem('currentUrl', nomeDaTela);
        base_url = "<?php echo base_url() ?>" + nomeDaTela;
        $("#conteudo").load(base_url, function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                console.log(base_url + "0");
                verificarMudancaLocalStorage();
                atualizacaoPaddingSuperiorPagina();

            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
           
        });
    }


    var currentUrl = localStorage.getItem('currentUrl');

    if(currentUrl==null){
        localStorage.setItem('currentUrl', 'dashboard/inicio');
        base_url = "<?php echo base_url();?>" + 'dashboard/inicio';

        $("#conteudo").load(base_url, function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                console.log(base_url + "1101");
                verificarMudancaLocalStorage();
                atualizacaoPaddingSuperiorPagina();

            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
        console.log(currentUrl);
        console.log(base_url + "1111111");
    }else{
        base_url = "<?php echo base_url();?>" + currentUrl;
        $("#conteudo").load(base_url, function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                console.log(base_url + "0110101");
                verificarMudancaLocalStorage();
                atualizacaoPaddingSuperiorPagina();

            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
       
    }



/* ----------------------------------------------------------------------------------------------------- */
/* ---------------------------------------- Classes Navegação ------------------------------------------ */
// Altera as classes quando alterado o valor do currentUrl anteriormente criado


    //Reseta as classes anteriormente setadas de estilo dos botões
    function resetarConfiguracoes() {
        document.querySelectorAll('.card').forEach(function(mobile) {
            mobile.classList.remove('pressionado');
        });
        
        document.querySelectorAll('li').forEach(function(desktop) {
            desktop.classList.remove('pressionadoDesktop');
        });
        
    }

    // Função para verificar a mudança na variável localStorage

    function verificarMudancaLocalStorage() {

        var currentUrlAtualizacao = localStorage.getItem('currentUrl');

        switch (currentUrlAtualizacao) {
            case 'dashboard':
                resetarConfiguracoes();
                document.getElementById('card-inicio').classList.add('pressionado');
                document.getElementById('telaInicioDesktop').classList.add('pressionadoDesktop');
                // document.getElementById('divConteudo').classList.add('ativo');
                console.log("aquiDash");

            case 'dashboard/inicio':
                resetarConfiguracoes();
                document.getElementById('card-inicio').classList.add('pressionado');
                document.getElementById('telaInicioDesktop').classList.add('pressionadoDesktop');
                // document.getElementById('divConteudo').classList.add('ativo');
                console.log("aquiINi");

            break;
            case 'dashboard/vitais':
                resetarConfiguracoes();
                document.getElementById('card-vitais').classList.add('pressionado');
                document.getElementById('telaVitaisDesktop').classList.add('pressionadoDesktop');
                // document.getElementById('telaVitais').classList.add('ativo');
                console.log("aquiVit");

            break;
            case 'dashboard/exames':
                resetarConfiguracoes();
                document.getElementById('card-exames').classList.add('pressionado');
                document.getElementById('telaExamesDesktop').classList.add('pressionadoDesktop');
                // document.getElementById('telaExames').classList.add('ativo');
                console.log("aquiEx");

            break;
            case 'dashboard/ficha_medica':
                resetarConfiguracoes();
                document.getElementById('card-fichaMedica').classList.add('pressionado');
                document.getElementById('telaFichaMedicaDesktop').classList.add('pressionadoDesktop');
                // document.getElementById('telaFichaMedica').classList.add('ativo');
                console.log("aquiFM");

            break;
            default:
            break;
        }
    }

    window.addEventListener('storage', verificarMudancaLocalStorage);


/* ---------------------------------------------------------------------------------------------------- */
/* ------------------------------ Abrir e fechar o menu de configurações ------------------------------ */

document.getElementById('abrirConfiguracoes').addEventListener('click', function() {
        var configuracoesView = document.getElementById('configuracoesView');
        var efeitoTransparenciaConfiguracoes = document.getElementById('efeitoTransparenciaConfiguracoes');

        if (configuracoesView.style.display === 'none') {
              configuracoesView.style.animation = 'emergir 1s forwards';
              configuracoesView.style.display = 'block';
              efeitoTransparenciaConfiguracoes.style.display = 'block';
              efeitoTransparenciaConfiguracoes.style.animation = 'esmaecer 1s forwards';
        } else {
            efeitoTransparenciaConfiguracoes.style.animation = 'desesmaecer 1s forwards';
            configuracoesView.style.animation = 'fechar 1s forwards';
            configuracoesView.addEventListener('animationend', function() {
              configuracoesView.style.display = 'none';
              efeitoTransparenciaConfiguracoes.style.display = 'none';
            }, { once: true });
        }
    });

    document.getElementById('abrirConfiguracoesDesk').addEventListener('click', function() {
        var configuracoesView = document.getElementById('configuracoesView');
        var efeitoTransparenciaConfiguracoes = document.getElementById('efeitoTransparenciaConfiguracoes');

        if (configuracoesView.style.display === 'none') {
              configuracoesView.style.animation = 'emergir 1s forwards';
              configuracoesView.style.display = 'block';
              efeitoTransparenciaConfiguracoes.style.display = 'block';
              efeitoTransparenciaConfiguracoes.style.animation = 'esmaecer 1s forwards';
        } else {
            efeitoTransparenciaConfiguracoes.style.animation = 'desesmaecer 1s forwards';
            configuracoesView.style.animation = 'fechar 1s forwards';
            configuracoesView.addEventListener('animationend', function() {
              configuracoesView.style.display = 'none';
              efeitoTransparenciaConfiguracoes.style.display = 'none';
            }, { once: true });
        }
    });



/* ---------------------------------------------------------------------------------------------------- */
/* ------------------------------------------ Testes de projeto --------------------------------------- */


    // Testes para tamanho do card
    // var element = document.getElementById("card-block");
    // console.log("Altura atual: " + element.offsetHeight + "px");
    // console.log("Largura atual: " + element.offsetWidth + "px");

    //-----------------------------------------------------------------------------------
    // Testes para tamanho da fonte
    // const element = document.getElementById("card-title");
    // console.log("Tamanho atual do texto: " + card-title.style.fontSize);

    //-----------------------------------------------------------------------------------
    // Testes para tamanho da fonte do card
    // const element = document.querySelector(".card-title");
    // const style = window.getComputedStyle(element);
    // console.log("Tamanho atual do texto: " + style.fontSize);

    //-----------------------------------------------------------------------------------
    // Testes para tamanho do icone fontAwesome
    // const element = document.querySelector(".iconeMenu");
    // const style = window.getComputedStyle(element);
    // console.log("Tamanho atual do texto: " + style.fontSize);

    //-----------------------------------------------------------------------------------
    // Testes para tamanho da fonte
    // const element = document.querySelector(".card-block");
    // const style = window.getComputedStyle(element);
    // console.log("Tamanho atual do texto: " + style.fontSize);

    //-----------------------------------------------------------------------------------
    // Testes para tamanho do raio do card
    // const element = document.querySelector(".card-block");
    // const style = window.getComputedStyle(element);
    // console.log("Border-radius atual: " + style.getPropertyValue("border-radius"));

    //-----------------------------------------------------------------------------------
    // Testes para tamanho do padding entre o titulo e o icone
    // const element = document.querySelector(".card-title");
    // const style = window.getComputedStyle(element);
    // console.log("padding-top atual: " + style.getPropertyValue("padding-top"));
   
</script>
