<template>
    <section class="ftco-section testimony-section">
            <div class="img img-bg border" style=""></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2 class="">Offres</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            
                            <offre-component v-for="offre in offres" :key="offre.id" :offre="offre"></offre-component>
                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>


<script>
    export default {

        name : 'FasciculeSection',
        
        data: function(){
            return{ }
        },

        props: ['offres'],

        mounted() {},
        
        methods:{}
    }
</script>
