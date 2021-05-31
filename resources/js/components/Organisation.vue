<template>
<div  class="container">
    <section>
        
            <div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <!-- <div class="page-next-level"> -->
                            <h1 > Organismes de financement </h1>
                            <div class="page-next w-100">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb  bg-light shadow mb-0">
                                        <li class="breadcrumb-item text-white"><a href="">Accueil</a></li>
                                        <li class="breadcrumb-item active text-secondary" aria-current="page">Organismes de financement</li>
                                    </ul>
                                </nav>
                            </div>
                        <!-- </div> -->
                    </div>  
                </div>
            </div>             
        </section> 

        <section >
            <div >
                 <div class="row">
                   <div class="col-lg-12">
                       
        <form   method="POST" action="/organisation"   @submit.prevent='' class=" p-4 shadow bg-white rounded  "   >
        
            <h4   class="font-weight-bold">Recherche avancée</h4>
                      <!-- organisation table -->
                      <div class="row text-left">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <label > Types des organismes: </label>
                                        <div>
                                        <select  required v-model="selected.selorganisation" name="type" type="text"    class="form-control">
										<option v-for="organisation in organisations" :key="organisation.id"  :value="organisation">{{organisation.type_organisme}}</option>
                                        </select>
                                    </div>
                                </div>
                      </div>
                      <!-- besoin section   -->
                                <div class="col-lg-3 col-md-6">
                                   <div class="form-group " >
                                       <label for="status" > Types de financement:: </label>
                                         <select  required v-model="selected.selbesoin"    type="Leavetext"    class="form-control">
										<option   v-for="besoin in besoins" :key="besoin.id"  :value="besoin">{{besoin.nom_besoin}}</option>	
                                          </select>
                                    </div>
                                </div>

                     <!-- button submit -->
                       <button  v-on:click="cli=!cli"  class="btn btn-primary btn-lg btn-block m-2 "   data-toggle="button" aria-pressed="false" autocomplete="off" data-mdb-ripple-color="dark">search</button>
           
           <div  v-if="cli" class="col-md-6">
                <div  class="card border-primary flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-3 text-primary"> {{selected.selorganisation['nom_organisation'] }}</strong>
                            <h5 class="mb-0">
                               <a class="text-dark" href="#"><a >financement :</a>{{selected.selbesoin['nom_besoin']}}</a>
                            </h5>
                            <div class="mb-1 text-muted small"  > {{selected.selorganisation['tel']}} </div>
                            <div class="mb-1 text-muted small"  > {{selected.selorganisation['email']}} </div>
                            <p style="color:blue;" class="card-text mb-auto">{{selected.selorganisation[' adresse']}}</p>
                            <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.google.com">visit their website</a>
                   </div>
                  </div>
                </div>
            </div>
                    </form>
                   </div>
                 </div>
            </div>
                        <!-- <iframe width="700" height="315" style="position: absolute; top: 80 px; left:50 px;"  src="https://www.youtube.com/embed/5lJqdOK9O10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

        </section> 
       
</div>                                                            
</template>
<script>
    export default {

        name : 'dropdownForm',
        data: function(){
            return{ 
                selected :{
                    selorganisation:[],
                    selbesoin:[]
                    

                },
                cli: false,
                
                
            }
        },

        props: {
                organisations:Array,
                besoins: Array,
                },

        mounted() {
            console.log()
        },
    
        
    }
</script>
                