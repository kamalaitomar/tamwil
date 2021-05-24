<template>
    <div>
        <!-- choosing step  -->
        <form method="POST" action="/offres"  @submit.prevent="onSubmit" >
            <!-- back button -->
            <div class="row">
                 <button v-if="curentStep != 1" @click.prevent="pretStep" type="button" class="btn btn-outline-primary mt-5 ml-5" data-mdb-ripple-color="dark">{{__('tamwil.back')}}</button><br>

            </div>

            <div class="row justify-content-md-center">
                 <div class="col-10 mb-5 mt-2">

                    <!-- choose profil section -->
                    <div v-if="curentStep == 1" class="text-center">
                        <h1 class="m-2 p-2">{{__('tamwil.Je suis')}}</h1>
                        <div class="row">
                            <div v-for="profil in profils" :key="profil.id" @click.prevent="selectProfil(profil.id)" class="col-lg-3 ftco-animate fadeInUp ftco-animated d-flex" >
                                <div class="staff bg-info m-1 p-2 border mb-5 col-12" :class="{ 'bg-white border-light' : profil.id != form.profil, 'shadow ':profil.id == form.profil}">
                                    <img :src="'/assets/images/'+profil.icon" class="col-lg-6">
                                    <div class="text m-1  text-center"  :class="{'bg-info ':profil.id == form.profil}">
                                        <h3>{{__('tamwil.'+profil.nom_profil )}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- choose cycle section -->      
                    <div v-if="curentStep == 2" >
                        <h1 class="m-2 p-2 text-center"> {{__('tamwil.life cycle')}} </h1>
                        
                            <ul class="list-group" >
                                <button v-for="cycle in cycles" :key="cycle.id" @click.prevent="selectCycle(cycle.id)" :class="{'active':cycle.id == form.cycle, 'text-right': locale=='ar'}"  type="button" class="list-group-item list-group-item-action border border-light fs-3" >{{__('tamwil.'+cycle.nom_cycle )}}</button>
                            </ul>
                    </div>

                    <!-- choose besoin section -->
                    <div v-if="curentStep == 3" class="text-center">
                        <h1 class="m-2 p-2">{{__('tamwil.i need')}}</h1>
                        <div class="row">
                            <div v-for="besoin in besoins" :key="besoin.id" @click.prevent="selectBesoin(besoin.id)" class="col-lg-4 ftco-animate fadeInUp ftco-animated d-flex" >
                                <div class="staff bg-info m-1 p-2 border mb-5 col-12" :class="{ 'bg-white border-light' : besoin.id != form.besoin, 'shadow ':besoin.id == form.besoin}">
                                    <img :src="'/assets/images/'+besoin.icon" class="col-lg-6">
                                    <div class="text m-1  text-center"  :class="{'bg-info ':besoin.id == form.besoin}">
                                        <h3>{{__('tamwil.'+besoin.nom_besoin)}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- next and submit button -->
                    <button v-if="curentStep < 3" @click.prevent="nextStep" type="button" class="btn btn-outline-primary btn-lg btn-block mt-4">{{__('tamwil.next')}}</button>
                    <button v-if="curentStep == 3 && form.besoin != 0" type="submit" class="btn btn-primary btn-lg btn-block m-2" data-mdb-ripple-color="dark">{{__('tamwil.submit')}}</button>
                </div>
            </div>
            
           
        </form>

        <!-- showing results sections -->

            <!-- showing groups of results -->
        <div v-if="curentStep == 4" class="text-center col-10 justify-content-md-center ">
            <div v-if="offres == 0" class="alert alert-warning" role="alert" >
                nous n'avons trouvé aucune offre correspondant à votre recherche, essayez d'autres conditions!
            </div>
            <div class="row">
                <div v-for="(offre, key) in offres" :key="key" class="col-lg-4 ftco-animate fadeInUp ftco-animated d-flex " >
                    <div class="staff bg-white border-light m-1 p-2 border mb-5 col-12">
                        <div class="text m-1 text-center">
                            <h1  class="text-success font-weight-bold">{{offre.length}}</h1><h2>{{key}}</h2>
                            <button @click.prevent="showOffres(offre)" type="button" :offre="offre" class="btn btn-outline-primary btn-lg btn-block mt-4">En savoir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- showing offers -->
        <div v-if="curentStep ==5" class="col-10 offset-1 ">
            <div class="row">
                <div v-for="off in offre" :key="off.id" class="col-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center mb-2">
                                <h4 class="text-xs font-weight-bold text-primary text-uppercase col-10">{{off.nom_offre}}</h4>
                                <img src="/assets/images/icon.png" class="col-2">
                            </div>
                            <div class="mr-2">
                                <p class="h5 mb-0 text-gray-800">{{off.description}}</p>
                                <a :href="'offre/'+off.id" target="_blank" class="btn btn-outline-primary btn-lg btn-block mt-4">Afficher l'offre</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
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

                allSteps : 5,
                curentStep : 1,

                offre:[],
                locale: window._locale,
                
            }
        },

        props: {
                profils:Array,
                besoins: Array,
                },

        mounted() {
            console.log(_locale)
        },
        
        methods:{
            
            onSubmit(){

                let dataform = new FormData();
                dataform.append('profil', this.form.profil);
                dataform.append('cycle', this.form.cycle);
                dataform.append('besoin', this.form.besoin);


                axios.post( '/offres', dataform).then( response => {
                    console.log(response);
                    this.allerros = [];
                    this.submited = true;
                    this.success = true;
                    this.offres = response.data;
                } ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });

                    this.curentStep ++
                    this.allerrors = ''
            },

            nextStep(){
                if(this.curentStep == 1){
                    if(!this.form.profil){
                        swal({
                                title: "Rappel!",
                                text: "choisissez votre profil",
                                icon: "warning",
                                dangerMode: true,
                                })
                        return false
                    }
                    
                }

                if(this.curentStep == 2){
                    if(!this.form.cycle){
                        swal({
                                title: "Rappel!",
                                text: "choisissez votre cycle de vie",
                                icon: "warning",
                                dangerMode: true,
                                })
                        return false
                    }
                    
                }

                if(this.curentStep == 3){
                    if(!this.form.besoin){
                        swal({
                                title: "Rappel!",
                                text: "choisissez votre besoin",
                                icon: "warning",
                                dangerMode: true,
                                })
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

            showOffres($id){
                this.offre = $id
                this.curentStep ++

            },

        }
    }
</script>
