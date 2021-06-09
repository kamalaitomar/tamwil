<template>
    <div>
        <div v-if="curentStep == 1" class="text-center mt-5" >   
            <h1 class="m-2 p-2">{{__('organisation.Types des organisations')}} :</h1>
            <div class="row justify-content-md-center"> 
                <!-- <div @click.prevent="selectOrg('NOTHING')" class="col-3 ftco-animate fadeInUp ftco-animated d-flex">
                    <div class="staff bg-info m-1 p-2 border mb-5 col-12" :class="{ 'bg-white border-light' : 'NOTHING' != type, 'shadow ':'NOTHING' == type}" >
                        <img src="/assets/images/icon.png" class="col-5">   
                        <div class="text m-1  text-center"  :class="{'bg-info ':'NOTHING' == type}">
                            <h3>NOTHING FOR THE MOMENT</h3>
                        </div>
                    </div>
                </div> -->
                <div v-for="(objet, key) in organisations" 
                                :key="key" 
                                :value="organisations[key].types_des_organisations"
                                 @click.prevent="selectOrg(organisations[key].types_des_organisations)" 
                                 class="col-3 ftco-animate fadeInUp ftco-animated d-flex" 
                                 >
                    <div class="staff bg-info m-1 p-2 border mb-5 col-12" :class="{ 'bg-white border-light' : organisations[key].types_des_organisations != type, 'shadow ':organisations[key].types_des_organisations == type}" >
                        <img :src="'/assets/images/organisation/'+organisations[key].types_des_organisations+'.png'" class="col-5">   
                        <div class="text m-1  text-center"  :class="{'bg-info ':organisations[key].types_des_organisations == type}">
                            <h3> 
                                {{__('organisation.'+organisations[key].types_des_organisations.replace(/_/g, " ") )}}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- <button v-if="(this.type)" class="btn btn-outline-primary btn-lg btn-block"  @click.prevent="next">{{__('organisation.Recherche')}}</button><br> -->

        </div>
        <div class="row">
                 <button v-if="curentStep != 1" @click.prevent="pretStep" type="button" class="btn btn-outline-primary mt-5 ml-5" data-mdb-ripple-color="dark">{{__('organisation.Retour')}}</button><br>

        </div>
                <div v-if="curentStep == 2" class="text-center m-3">
                    <div class="row justify-content-md-center m-3">
                        <div v-for="organisation in organisationsResult" :key="organisation.id" class="col-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-2">
                                        <h4 class="text-xs font-weight-bold text-primary text-uppercase col-9 text-left">{{organisation.nom_organisation}}</h4>
                                        <img :src="'/assets/images/organisation/'+organisation.icone" class="offset-1 col-2 rounded d-flex align-items-start " >
                                    </div>
                                     <h6 class="text-center"> {{__('organisation.'+organisation.types_des_organisations.replace(/_/g, " ") )}}</h6>  
                                </div>
                            <div class="d-flex align-items-end">
                                <a :href="'showorganisation/'+organisation.id" target="_blank" class="btn btn-outline-primary btn-lg btn-block m-3 ">{{__('organisation.Afficherlorganisation')}}</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</template>
<script> 
import ExampleComponent from './ExampleComponent.vue';
export default {
  components: { ExampleComponent },

        name : 'Organisations',
        data: function(){
            return{
                curentStep : 1,
                type:'',
                organisationsResult:[],
            }
        },
        props: {
                organisations:Array,
                
                },

        mounted() {
            // console.log(this.typedata)
        },

        methods:{

            // next(){
            //     var that = this
            //     axios.get('/organisation/'+this.type)
            //     .then(function(res){
            //         console.log(res)
            //         that.organisationsResult = res.data
            //         }
            //     ).catch((error) => {
            //              this.allerros = error.response.data.errors;
            //              this.success = false;
            //         });

            //     if(this.curentStep == 1){
            //         if(!this.type){
            //             swal({
            //                     title: "Rappel!",
            //                     text: "choisissez votre type d'organisation",
            //                     icon: "warning",
            //                     dangerMode: true,
            //                     })
            //             return false
            //         }
                    
            //     }    
            //     this.curentStep ++
            // },

            pretStep(){
                this.curentStep --
        
            },
            selectOrg(type){
                this.type = type
                var that = this
                axios.get('/organisation/'+this.type)
                .then(function(res){
                    console.log(res)
                    that.organisationsResult = res.data
                    }
                ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });

                if(this.curentStep == 1){
                    if(!this.type){
                        swal({
                                title: "Rappel!",
                                text: "choisissez votre type d'organisation",
                                icon: "warning",
                                dangerMode: true,
                                })
                        return false
                    }
                    
                }    
                this.curentStep ++
            }

            

        }

        
    }
</script>


 
   

    
