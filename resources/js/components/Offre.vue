<template>
    <div class="col-lg-3 ftco-animate fadeInUp ftco-animated" >
        <div class="staff">
            <div class="text pt-3 px-3 pb-4 text-center">
                <h3>{{ offre.nom_offre}}</h3>
                <div class="faded">
                    <p>{{ offre.description}}</p>
                    <a href="#"><button type="button" class="btn btn-primary">En savoir plus</button></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        name : 'Offre',
        
        data: function(){
            return{ }
        },

        props: ['offre', 'fascicule'],

        mounted() {},
        
        methods:{}
    }
</script>

