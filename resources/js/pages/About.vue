<style scoped>
    h1,h2,h3{
      font-weight: 800;
    }
    p{
      font-weight: 500;
    }
    .container{
        position: relative;
    }

    .main-container *{
        padding: 0;
        margin: 0;

    }

    .image-about{
        width: 9vw;
        margin: 5px 10px;
        min-width: 85px;
        flex: 0 0 20%

    }

    .container-image{
        width: 100%;
        padding-top: 160%; /* 1:1 Aspect Ratio */
        position: relative; /* If you want text inside of it */
        background-position: center;
        background-size: cover;
    }

    .container-image img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        object-fit: cover;
        object-position: center;
    }

    .main-container .row:nth-child(1), .row:nth-child(4){
        margin-top: 5em;
    }

    .main-container .row:nth-child(2), .row:nth-child(5), .row:nth-child(6){
        margin-top: 2em;
    }

    .main-container .row:nth-child(3){
        position: relative;
        margin-top: 10em;
    }

    .main-container .row:nth-child(3) div{
        display: flex;
        justify-content: space-between;
    }

    .main-container .row:nth-child(6) .container-image{
        padding-top: 100%;
    }

    .main-container .row:nth-child(7) .container-image{
        padding-top: 40%;
    }

    .line{
        width: 100%;
        height: 200px;
        background-color: #EE1331;
        position: absolute;
        top: 0;
        right: 0;
        margin-top: -5%;
        margin-right: -20%;
    }

    .main-container h2{
        font-size: 3em;
        font-weight: bold;
    }

    .main-container{
        margin-top: 9em;
    }
    @media only screen and (max-width: 991px){
        .line{
            height: 352px;
        }
    }
    @media only screen and (max-width: 767px){
        .main-container{
            margin-top: 11em;
        }
        .image-about{
            width: 40vw;
            margin: 10px 10px;
        }

        .main-container .row:nth-child(3) div{
            flex-wrap: wrap;
        }
    }

    @media only screen and (max-width: 600px){
        .main-container .row:nth-child(14) .line{
            margin-right: 0;
        }

        .line{
            width: 100%;
            height: 103%;
            margin-right: 0;
        }
    }
    @media only screen and (max-width: 449px){
        .line{
            height: 474px;
        }
    }
    @media only screen and (max-width: 344px){
        .line{
            height: 612px;
        }
    }
    .segundo-titulo{
        margin-left: 3%
    }

    @media only screen and (min-width: 768px){
        #fila-nosotros{
            max-width:900px
        }
    }
</style>

</style>

<template>
    <div class="container">
        <Navbar />

        <section class="main-container" >
            <!-- seccion 1 -->
            <section class="row" style="margin-top: 325px;">
                <div class="col-md-12">
                    <h2 style="color: #949A9D;">your</h2>
                    <h2 class="segundo-titulo">partners</h2>
                </div>
            </section>

            <!-- seccion 2 -->
            <section class="row">
                <div class="col-md-3" />
                <div class="col-md-7 offset-4 text-left">
                    <p>{{ $t('about.sec_02') }} <br>{{ $t('about.sec_02_1') }}</p>
                </div>
            </section>

            <!-- seccion 3 -->
            <section class="row">
                <div class="line" />
                <div class="col-md-12" id="nosotros" style="flex-wrap: wrap; margin: 0 auto;">
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/luis.png" width="100%" alt="Luis Andrade">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/judith.png" width="100%" alt="Judith Delgado">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/lalo.png" width="100%" alt="Samuel Acosta">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/gera.png" width="100%" alt="Gerardo González">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/meny.png" width="100%" alt="Manuel Higuera">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/talita.png" width="100%" alt="Talita Roldán">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/monica.png" width="100%" alt="Monica Soto">
                        </div>
                    </div>
                    <div class="image-about">
                        <div class="container-image wow animate__animated animate__fadeIn">
                            <img src="/images/horacio.jpg" width="100%" alt="Horacio Adame">
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion 4 -->
            <section class="row" style="margin-top: 325px;">
                <div class="col-md-12 wow animate__animated animate__fadeInLeft">
                    <h2 style="color: #949A9D;">{{ $t('about.sec_04') }}</h2>
                    <h2 class="segundo-titulo">{{ $t('about.sec_04_1') }}</h2>
                </div>
            </section>

            <!-- seccion 5 -->
            <section class="row">
                <div class="col-md-3" />
                <div class="col-md-7 offset-4 text-left">
                    <p>{{ $t('about.sec_05') }}</p>
                </div>
            </section>

            <!-- seccion 6 -->
            <section class="row">
                <div class="col-md-3" />
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="container-image wow animate__animated animate__fadeIn">
                                <img src="/images/SCRUM-CSD.png" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-4 col-md-4">
                            <div class="container-image wow animate__animated animate__fadeIn">
                                <img src="/images/SCRUM-CSPO.png" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-4 col-md-4">
                            <div class="container-image wow animate__animated animate__fadeIn">
                                <img src="/images/SCRUM-CSPSM.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seccion 7 -->
            <section class="row">
                <div class="col-md-4" />
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/images/SCRUM.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <Footer />
    </div>
</template>

<script>
import Navbar from '../components/NavbarComponent'
import Footer from '../components/FooterComponent'

export default {
    name: 'About',

    components: {
        Navbar,
        Footer,
    },

    data(){
        return{

        }
    },

    mounted(){

    },


    methods: {
        goToArticle(args){
            this.$router.push({ name: 'Article', params: { id: args } })
        },

        async getArticle(){
            try {
                let URL = '/api/article'
                let response = await axios.get(URL)

                if(response){
                    this.mainArticle = response.data
                }
            } catch (error) {
                console.log(error)
            }
        },

        async getArticles(){
            try {
                this.articles = []
                let URL = `/api/articles?page=${this.count}`
                let response = await axios.get(URL)

                if (response) {
                    console.log(response.data)
                    this.lastPage = response.data.last_page
                    response.data.data.forEach(element => {
                        this.articles.push(element)
                    });
                }
            } catch (error) {
                console.log(error)
            }
        }
    }
}
</script>
