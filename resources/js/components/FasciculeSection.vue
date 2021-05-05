<template>
    <section v-if="offres!= 0"  class="testimony-section mb-2">
        <div class="container bg-primary" >
            <div class="row justify-content-center ">
                <div class="col-md-7 text-center heading-section heading-section-white ">
                    <h2>{{index}}</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <offre-component v-for="offre in offres" :key="offre.id" :offre="offre" :fascicule="fascicule"></offre-component>
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

        props: ['offres', 'index'],

        mounted() {},
        
        methods:{}
    }
</script>
