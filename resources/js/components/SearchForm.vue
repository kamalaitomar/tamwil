<template>
    <section>
        <div class="hero-wrap" :style="{ backgroundImage: 'url(assets/images/bg_1.jpg)' }" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center d-flex justify-content-between">
                    <div class="col-md-5 ftco-animate d-flex align-items-end">
                        <div class="text w-80">
                            <h1 class="mb-4">Entrepreneurs: vous avez accès à plus de chose</h1>
                            <p class="mb-4">Bienvenu sur Tamwil, la première plateforme digitale de recherche de financement pour les entrepreneurs et les entreprises de la Région Marrakech-Safi.</p>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate d-flex align-items-end">
                        <form method="POST" action="/offres"  @submit.prevent="onSubmit" class="appointment" >
                            <h2 class="mb-4">Recherche de financement</h2>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="profil" >Sélectionnez votre Profil</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="profil" id="profil" class="form-control form-select-lg mb-3" v-on:change="profilCycle"  v-model="form.profil">
                                                    <option v-for="profil in profils" :value=" profil.id" :key="profil.id " name="profil">{{ profil.nom_profil }}</option>
                                                </select>
                                            </div>
                                            <div v-if="allerros.profil" class="text-danger">{{ allerros.profil[0] }}</div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cycle" >Sélectionnez votre Cycle</label><br>
                                        <div class="form-field ">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="cycle" id="cycle" class="form-control form-select-lg mb-3" v-model="form.cycle">
                                                    <option v-for="cycle in cycles" :value=" cycle.id" :key="cycle.id " name="cycle">{{ cycle.nom_cycle }}</option>
                                                </select> 
                                            </div>
                                            <div v-if="allerros.cycle" class="text-danger">{{ allerros.cycle[0] }}</div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="besoin" >Sélectionnez votre Besoin</label><br>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="besoin" id="besoin" class="form-control form-select-lg mb-3" v-model="form.besoin">
                                                    <option v-for="besoin in besoins" :value=" besoin.id" :key="besoin.id " name="cycle">{{ besoin.nom_besoin }}</option>
                                                </select>
                                            </div>
                                            <div v-if="allerros.besoin" class="text-danger">{{ allerros.besoin[0] }}</div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button  class="btn btn-primary py-3 px-4" >Recherche</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <fascicule-section-component v-for="fascicule in fascicules" :key="fascicule.id" :offres="offres" :fascicule="fascicule"></fascicule-section-component>
        
    </section>
</template>

<script>
    export default {

        name : 'SearchForm',
        data: function(){
            return{
                cycles :[],
                offres :[],
                
                form: {
                profil : '',
                cycle : '',
                besoin: ''
                },

                allerros: [],
                success : false,
                submited : false,
                fascicules :[
                    {
                        id : 1,
                        nom_fascicule : 'Subvention'
                    },
                    {
                        id : 2,
                        nom_fascicule : 'prete'
                    }
                ]
               
            }
        },

        props: {profils:Array,
                besoins: Array},

        mounted() {
            console.log('Component mounted.')
        },
        
        methods:{
            profilCycle(){
                
                var that = this
                axios.get('/cycles/' + this.form.profil)
                .then(function(res){
                    console.log(res)
                    that.cycles = res.data
                    }
                );
            },
            
            onSubmit(){

                let dataform = new FormData();
                dataform.append('profil', this.form.profil);
                dataform.append('cycle', this.form.cycle);
                dataform.append('besoin', this.form.besoin);


                axios.post('/offres', dataform).then( response => {
                    console.log(response);
                    this.allerros = [];
                    this.submited = true;
                    this.success = true;
                } ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });

                var that = this
                axios.get('/offres/'+ this.form.profil +'/'+ this.form.cycle +'/'+ this.form.besoin)
                .then(function(res){
                    console.log(res)
                    that.offres = res.data;
                    }
                );
                
            }
        }
    }
</script>
