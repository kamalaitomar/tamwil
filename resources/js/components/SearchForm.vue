<template>
    <!-- <section>
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
        <fascicule-section-component v-for="(offre, key) in offres" :key="offre" :index="key" :offres="offre"></fascicule-section-component>
        
    </section> -->

    <form method="POST" action="/offres"  @submit.prevent="onSubmit" >
            <span v-for="error in allerrors" :key="error.id" class="danger" >{{error}}</span>
            <section v-if="curentStep == 1" class="text-center">
                <h1>Profil</h1>
                <div class="row">
                    <div v-for="profil in profils" :key="profil.id" @click.prevent="selectProfil(profil.id)" class="col-lg-3 ftco-animate fadeInUp ftco-animated" >
                        <div class="staff">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <h3>{{ profil.nom_profil}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section v-if="curentStep == 2" class="text-center">
                <h1>Cycle de vie</h1>
                <div class="row">
                    <div v-for="cycle in cycles" :key="cycle.id" @click.prevent="selectCycle(cycle.id)" class="col-lg-3 ftco-animate fadeInUp ftco-animated" >
                        <div class="staff">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <h3>{{cycle.nom_cycle}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section v-if="curentStep == 3" class="text-center">
                <h1>Besoin</h1>
                <div class="row">
                    <div v-for="besoin in besoins" :key="besoin.id" @click.prevent="selectBesoin(besoin.id)" class="col-lg-3 ftco-animate fadeInUp ftco-animated" >
                        <div class="staff">
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <h3>{{besoin.nom_besoin}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <button v-if="curentStep != 1" @click.prevent="pretStep" >previos</button>
            <button v-if="curentStep != allSteps" @click.prevent="nextStep" >next</button>
            <button v-if="curentStep == allSteps" type="submit" >submit</button>
    </form>

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

                allerrors: [],
                success : false,
                submited : false,

                allSteps : 3,
                curentStep : 1,
                
            }
        },

        props: {profils:Array,
                besoins: Array},

        mounted() {
            console.log('Component mounted.')
        },
        
        methods:{
            
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
                    this.offres = response.data;
                } ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });

                    alert('done')
            },

            nextStep(){
                if(this.curentStep == 1){
                    if(!this.form.profil){
                        this.allerrors = 'choose one Profil'
                        return false
                    }
                    
                }

                if(this.curentStep == 2){
                    if(!this.form.cycle){
                        this.allerrors = 'choose one cycle'
                        return false
                    }
                    
                }

                if(this.curentStep == 3){
                    if(!this.form.besoin){
                        this.allerrors = 'choose one besoin'
                        return false
                    }
                    
                }

                this.curentStep ++
                this.allerrors = ''
            },

            pretStep(){
                this.curentStep --
            },

            selectProfil($id){
                this.form.profil = $id
                var that = this
                axios.get('/cycles/' + this.form.profil)
                .then(function(res){
                    console.log(res)
                    that.cycles = res.data
                    }
                );
            },

            selectCycle($id){
                this.form.cycle = $id
            },

            selectBesoin($id){
                this.form.besoin = $id
            },

        }
    }
</script>
