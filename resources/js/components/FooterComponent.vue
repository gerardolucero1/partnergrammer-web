<style>
    h1,h2,h3{
      font-weight: 800;
    }
    p{
      font-weight: 500;
    }
    footer{
        padding: 10em 5em 0 5em;
        display: flex;
        flex-direction: column;
    }

    .footer-section-1 p{
        font-size: 0.9em;
    }

    .footer-section-1 .icons{
        width: 30px;
        height: 30px;
        border: 1px solid black;
        border-radius: 50%;
    }

    .footer-section-1 .icons i{
        font-size: 0.9em;
    }

    .footer-section-2 div:nth-child(1){
        display: flex;
        justify-content: space-around;
    }

    .footer-section-2 .footer-navigation{
        display: flex;
        flex-direction: column;
        margin: 0 10px;
    }

    .footer-section-2 .footer-navigation a{
        font-size: 0.9em;
        color: #C9C9C9;
    }

    .footer-section-2 .footer-navigation a:nth-child(1){
        color: black;
    }

    @media only screen and (max-width: 600px){
        footer .row:nth-child(2){
            display: flex;
            flex: 1;
            order: 0;
        }

        footer .row:nth-child(1){
            flex: 1;
            order: 2;
            display: flex;
            flex-direction: column;
        }

        footer .row:nth-child(2){
            display: flex;
            flex: 1;
            order: 1;
        }

        footer .row:nth-child(1) .footer-section-1{
            flex: 1;
            order: 2;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: 1em;
        }

        .footer-section-1 p{
            text-align: right;
        }

        footer .row:nth-child(1) .footer-section-2{
            flex: 1;
            order: 1;
        }

        .footer-section-2 div:nth-child(1){
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .footer-section-2 .footer-navigation{
            display: flex;
            flex-direction: column;
            margin-top: 2em;
        }
    }
    a{
        color:black;
    }

</style>

<template>
    <section class="">
        <footer>
            <div class="row">
                <div class="col-md-6 footer-section-1">
                    <p>PIT2 Parque de Innovación y Transferencia de Tecnología, ITESM Heroico Colegio Militar 4709, Chihuahua, Chihuahua. Mexico CP. 31300</p>
                    <p>(614) 303-8662</p>
                    <div class="d-flex">
                        <div class="icons d-flex justify-content-center align-items-center">
                            <a href="https://www.facebook.com/pg/PartnerGrammer" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="icons d-flex justify-content-center align-items-center ml-3">
                            <a href="https://twitter.com/PartnerGrammer" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-section-2">
                    <div class="">
                        <div class="footer-navigation">
                            <router-link class="main-link" to="/projects">{{ $t('footer.portafolio') }}</router-link>
                            <router-link to="/">{{ $t('footer.web') }}</router-link>
                            <router-link to="/">{{ $t('footer.software') }}</router-link>
                        </div>
                        <div class="footer-navigation">
                            <router-link class="main-link" to="/about">{{ $t('footer.nosotros') }}</router-link>
                            <router-link to="/">{{ $t('footer.nosotros') }}</router-link>
                            <router-link to="/">{{ $t('footer.equipo') }}</router-link>
                        </div>
                        <div class="footer-navigation">
                            <router-link class="main-link" to="/">{{ $t('footer.servicios') }}</router-link>
                            <router-link to="/">{{ $t('footer.web') }}</router-link>
                            <router-link to="/">{{ $t('footer.software') }}</router-link>
                        </div>
                        <div class="footer-navigation">
                            <router-link class="main-link" to="/blog">{{ $t('footer.blog') }}</router-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <img src="/images/logos/logo.svg" alt="LOGO" style="width:auto; height: 100px; margin-bottom: 20px;">
                </div>
            </div>
        </footer>
    </section>
</template>

<script>
export default {
    name: 'Footer'
}
</script>
