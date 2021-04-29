<template>
        <form method="POST" action="/offres"  @submit.prevent="onSubmit" class="appointment">
            <h2 class="mb-4">Recherche de financement</h2>
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label for="profil" >Sélectionnez votre Profil</label>
                        <div class="form-field">
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="profil" id="profil" :class="['form-control form-select-lg mb-3', allerros.profil ? 'is-invalid' : '']" v-on:change="profilCycle"  v-model="form.profil">
                                    <option v-for="profil in profils" :value=" profil.id" :key="profil.id " name="profil">{{ profil.nom_profil }}</option>
                                </select>
                                <span v-if="allerros.profil" :class="['badge badge-danger']">@{{ allerros.profil[0] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cycle" >Sélectionnez votre Cycle</label><br>
                        <div class="form-field">
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="cycle" id="cycle" :class="['form-control form-select-lg mb-3', allerros.cycle ? 'is-invalid' : '']" v-model="form.cycle">
                                    <option v-for="cycle in cycles" :value=" cycle.id" :key="cycle.id " name="cycle">{{ cycle.nom_cycle }}</option>
                                </select>
                                <span v-if="allerros.cycle" :class="['badge badge-danger']">@{{ allerros.cycle[0] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="besoin" >Sélectionnez votre Besoin</label><br>
                        <div class="form-field">
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="besoin" id="besoin" :class="['form-control form-select-lg mb-3', allerros.besoin ? 'is-invalid' : '']" v-model="form.besoin">
                                    <option v-for="besoin in besoins" :value=" besoin.id" :key="besoin.id " name="cycle">{{ besoin.nom_besoin }}</option>
                                </select>
                                <span v-if="allerros.besoin" :class="['badge badge-danger']">@{{ allerros.besoin[0] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			        </div>
                </div>
            </div>
        </form>
</template>

<script>

// import Offre from './Offre.vue'

    export default {
        name : 'home',
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
                submited : false
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
                console.log(this.form.profil);


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
