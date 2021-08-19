<template>
    <div class="row m-3">
        <div id="ftco-loader" class="" :class="{'show': loading }">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#3D90D9"/>
            </svg>
        </div>
        <div class="col-1">
            <!-- back button  -->
            <div class="col-12 h-100 d-flex align-items-center">
                <button v-if="curentStep == 2 &&  loading == false" @click.prevent="pretStep" class="btn btn-outline-primary h-25" :title="__('organisation.Retour')">
                    <svg v-if="locale == 'ar'" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                    </svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="justify-content-center col-10">

            <!-- steps time line  -->
            <div class="col-12 row justify-content-center text-center">
                <div class="col-3 text-center d-flex">
                    <div class=" col-12 d-flex align-items-center justify-content-center" @click.prevent="organisationsStep()" style="cursor: pointer" :class="{'text-primary': curentStep === 1}">
                        <div class="m-2 p-2 col-12 justify-content-center">
                            <div class="d-flex justify-content-center">
                                <div class="col-8">
                                    <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M70.045 78.249a7.219 7.219 0 108.219-7.141V62.47a1 1 0 00-1-1H51v-3.861h15.082a1.001 1.001 0 001-1.038l-.373-9.81a4.59 4.59 0 00-3.034-4.329c-2.127-.911-7.238-3.028-9.038-3.773a14.684 14.684 0 003.354-4.584c1.61-.7 2.217-2.92 2.534-4.584a2.777 2.777 0 00-.492-2.715 1.702 1.702 0 00-.486-.322v-2.985a8.946 8.946 0 00-8.935-8.936h-1.138a8.946 8.946 0 00-8.936 8.936v3.029a1.932 1.932 0 00-.773.52c-.696.769-.756 1.998-.175 3.788a6.126 6.126 0 002.84 3.594 12.298 12.298 0 002.745 4.106l-9.557 4.09a4.691 4.691 0 00-2.323 3.799c-.187 2.198-.369 9.865-.376 10.19a1 1 0 001 1.024H49v3.86H22.736a1 1 0 00-1 1v8.639a7.218 7.218 0 102 0V63.47H49v7.638a7.219 7.219 0 102 0V63.47h25.264v7.638a7.224 7.224 0 00-6.219 7.14zM44.144 33.287a1.004 1.004 0 00-.7-.646c-.867-.22-1.587-1.442-1.962-2.482-.449-1.384-.245-1.78-.255-1.783a.257.257 0 01.1-.012 1 1 0 001.21-.978V23.47a6.944 6.944 0 016.937-6.936h1.138a6.944 6.944 0 016.935 6.936v3.852a.996.996 0 00.38.797.98.98 0 00.717.204 2.84 2.84 0 01-.08.776c-.497 2.609-1.151 3.113-1.497 3.182a.999.999 0 00-.73.598c-.022.056-2.382 5.52-5.936 5.52h-.716c-3.738 0-5.524-5.06-5.541-5.111zm-8.856 13.277a2.762 2.762 0 011.171-2.153l10.09-4.318a.971.971 0 00.402-.341 6.083 6.083 0 002.734.647h.716a5.728 5.728 0 002.39-.538.974.974 0 00.435.379c.07.029 7.083 2.926 9.66 4.03a2.6 2.6 0 011.826 2.408.968.968 0 00-.003.119l.334 8.812h-5.021l-.155-4.635a1 1 0 00-1.999.066l.152 4.569H41.908l.152-4.569a1 1 0 00-1.999-.066l-.155 4.635h-4.962c.057-2.213.202-7.374.344-9.045zm-7.333 31.685a5.219 5.219 0 11-5.219-5.219 5.224 5.224 0 015.219 5.219zm27.264 0A5.219 5.219 0 1150 73.03a5.225 5.225 0 015.219 5.219zm27.263 0a5.219 5.219 0 11-5.218-5.219 5.225 5.225 0 015.218 5.219z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <h5>{{__('organisation.Types des organisations')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3 text-center d-flex">
                    <div class=" col-12 d-flex align-items-center justify-content-center" @click.prevent="financementStep()" style="cursor: pointer" :class="{'text-primary': curentStep === 2}">
                        <div class="m-2 p-2 col-12 justify-content-center">
                            <div class="d-flex justify-content-center">
                                <div class="col-8">
                                    <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;marker:none;-inkscape-font-specification:Sans" d="M68.781 10.531a1 1 0 00-.812 1v4.281c-2.777.814-5.28 2.175-7.344 4.094l-3.688-2.093a1 1 0 00-1.374.343l-4.188 7.157a1 1 0 00.375 1.375l3.656 2.093c-.337 1.36-.594 2.748-.593 4.219 0 1.462.26 2.858.593 4.219l-3.656 2.093a1 1 0 00-.375 1.376l4.188 7.156a1 1 0 001.374.343l3.688-2.093c2.064 1.916 4.569 3.31 7.344 4.125V54.5a1 1 0 001 1h8.312a1 1 0 001-1v-4.219a18.075 18.075 0 007.406-4.187l3.626 2.093a1 1 0 001.374-.343l4.188-7.157a1 1 0 00-.375-1.374l-3.625-2.094c.331-1.359.594-2.756.594-4.219 0-1.474-.259-2.86-.594-4.219l3.625-2.093a1 1 0 00.375-1.375l-4.188-7.157a1 1 0 00-1.374-.343l-3.626 2.093c-2.078-1.946-4.591-3.348-7.406-4.156v-4.219a1 1 0 00-1-1H68.97a1 1 0 00-.188 0zm1.188 2h6.312v3.906a1 1 0 00.75.97c3.045.734 5.748 2.256 7.844 4.405a1 1 0 001.219.157l3.344-1.938 3.187 5.438-3.344 1.937a1 1 0 00-.469 1.157c.414 1.425.657 2.893.657 4.437 0 1.54-.245 3.048-.656 4.469a1 1 0 00.468 1.125l3.344 1.937-3.188 5.438-3.343-1.938a1 1 0 00-1.219.157 16.255 16.255 0 01-7.844 4.437 1 1 0 00-.75.969V53.5H69.97v-3.938a1 1 0 00-.75-.968 16.441 16.441 0 01-7.781-4.407 1 1 0 00-1.22-.156l-3.406 1.938-3.187-5.438L57 38.594a1 1 0 00.469-1.125A15.952 15.952 0 0156.812 33c0-1.543.241-3.017.657-4.438A1 1 0 0057 27.407l-3.375-1.937 3.188-5.438 3.406 1.938a1 1 0 001.218-.157c2.09-2.127 4.765-3.63 7.782-4.375a1 1 0 00.75-.968V12.53zm3.187 12.094c-4.654 0-8.5 3.742-8.5 8.375 0 4.632 3.841 8.406 8.5 8.406 4.66 0 8.438-3.783 8.438-8.406 0-4.622-3.784-8.375-8.438-8.375zm0 2c3.588 0 6.438 2.837 6.438 6.375a6.404 6.404 0 01-6.438 6.406c-3.583 0-6.5-2.878-6.5-6.406 0-3.528 2.912-6.375 6.5-6.375zm-41 27.125a1 1 0 00-.281.094l-7.219 3.031a1.001 1.001 0 10.782 1.844L32.5 55.75h19.625a3.628 3.628 0 013.656 3.625c0 2.005-1.54 3.281-3.656 3.281H38.969a1 1 0 00-1 1v1a1 1 0 00.656.938L53.5 70.563a1 1 0 00.5.03s4.712-1.01 9.469-2c2.378-.494 4.761-.972 6.593-1.343.917-.185 1.692-.362 2.25-.469.28-.053.5-.067.657-.094.065-.01.119-.026.156-.03a3.41 3.41 0 013.438 3.437 3.45 3.45 0 01-2.344 3.281c.089-.03-.096.042-.281.094-.186.052-.457.098-.782.187-.65.179-1.55.426-2.625.719-2.149.585-4.97 1.363-7.781 2.125-5.482 1.486-10.64 2.897-10.906 2.969L28.28 74.563a1 1 0 00-.562.03l-6.782 2.594-5.25-19.468A1 1 .524 0014.47 57L5.75 59.344a1 1 .524 00-.125.031 1 1 .524 00-.563 1.188l6.22 23.25a1 1 .524 001.218.687l8.719-2.344a1 1 .524 00.718-1.219l-.5-1.812 6.657-2.531 23.531 4.875a1 1 0 00.469 0l11.187-3.031c2.811-.763 5.63-1.54 7.782-2.126 1.075-.292 1.972-.539 2.624-.718.327-.09.592-.166.782-.219.19-.053.23-.045.375-.094a5.487 5.487 0 003.719-5.187 5.44 5.44 0 00-5.438-5.438c-.168 0-.183-.01-.25 0s-.161.016-.25.031c-.178.032-.402.102-.688.157-.571.11-1.361.251-2.28.437-1.84.372-4.214.88-6.594 1.375-4.62.961-8.92 1.85-9.188 1.906l-11.781-3.906h10.031c3.026 0 5.656-2.193 5.656-5.281 0-3.089-2.55-5.625-5.656-5.625H32.281a1 1 0 00-.125 0zm-18.125 5.438L19.75 80.5l-6.813 1.813L7.25 61l6.781-1.813z" font-weight="400"  overflow="visible" font-family="Sans"/></svg>
                                </div>
                            </div>
                            <h5>{{__('organisation.Types des financement ')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3 text-center d-flex">
                    <div class=" col-12 d-flex align-items-center justify-content-center" @click.prevent="afficheStep()" style="cursor: pointer" :class="{'text-primary': curentStep === 3}">
                        <div class="m-2 p-2 col-12">
                            <div class="d-flex justify-content-center">
                                <div class=" col-8">
                                    <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path fill="none" d="M26.551 46.402h38.518v1.017H26.551zM26.551 37h46.898v1.018H26.551zM26.551 56.392h46.898v1.017H26.551z"/>
                                        <path fill="none" d="M72.875 17.834h-.004V8.422H17.045v83.156h65.91V18.834h-10.08v-1zM24.551 44.402h42.518v5.017H24.551v-5.017zm50.898 25.006H24.551v-5.017h50.898v5.017zm0-10H24.551v-5.017h50.898v5.017zm0-24.408v5.018H24.551V35h50.898z"/>
                                        <path fill="none" d="M26.551 66.392h46.898v1.017H26.551zM74.871 16.834h8.084v-.311l-8.084-7.168z"/>
                                        <path d="M24.551 69.408h50.898v-5.017H24.551v5.017zm2-3.016h46.898v1.017H26.551v-1.017zM24.551 40.018h50.898V35H24.551v5.018zm2-3.018h46.898v1.018H26.551V37z"/>
                                        <path d="M74.576 6.422H15.045v87.156h69.91V15.624L74.576 6.422zm8.379 85.156h-65.91V8.422h55.826v9.412h.004v1h10.08v72.744zm0-74.744h-8.084V9.355l8.084 7.168v.311z"/>
                                        <path d="M67.068 44.402H24.551v5.017h42.518v-5.017zm-2 3.017H26.551v-1.017h38.518v1.017zM24.551 59.408h50.898v-5.017H24.551v5.017zm2-3.016h46.898v1.017H26.551v-1.017z"/>
                                    </svg> 
                                </div>
                            </div>
                            <h5>{{__('organisation.offre')}} </h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content  -->
            <div class="col-12 row justify-content-center">

                <!-- choosing steps  -->

                <!-- type d'organisation -->
                <div v-if="curentStep == 1" class="row justify-content-md-center text-center">
                        <div v-for="(objet, key) in organisations" 
                                        :key="key" 
                                        :value="organisations[key].type_d_organisation_fr"
                                        @click.prevent="selectOrg(organisations[key].type_d_organisation_fr)" 
                                        class="staff bg-info col-3 m-2 ftco-animate fadeInUp ftco-animated d-flex justify-content-center" 
                                        :class="{ 'bg-white border-light' : organisations[key].type_d_organisation_fr != form.type, 'shadow ':organisations[key].types_des_organisations == form.type}"
                                        style="cursor: pointer" 
                                        >
                            <div class=" m-2 p-2 col-12"  >
                                <img :src="'/assets/images/organisation/'+organisations[key].type_d_organisation_fr+'.png'" class="col-5 mt-2">   
                                <div class="text mt-3  text-center"  :class="{'bg-info ':organisations[key].type_d_organisation_fr == form.type}">
                                    <h3> 
                                        {{__('organisation.'+organisations[key].type_d_organisation_fr)}}
                                    </h3>
                                </div>
                            </div>
                    </div>    
                </div>
                
                
                <!-- choose besoin section -->
                <div v-if="curentStep == 2" class="row d-flex justify-content-center text-center"> 
                    <div v-if="loading == false" class="row justify-content-center">
                        <div v-for="besoin in besoins" :key="besoin.id" @click.prevent="selectBesoin(besoin.id)" class="staff bg-info col-lg-3 ftco-animate fadeInUp ftco-animated d-flex shadow-sm m-2  justify-content-center" :class="{ 'bg-white border-light' : besoin.id != form.bes}" style="cursor: pointer">
                            <div class="m-1 p-2 mb-3 col-12">
                                    <img :src="'/assets/images/'+besoin.icon" class="col-lg-6">
                                <div class="text m-1 text-center mt-3"  :class="{'bg-info':besoin.id == form.bes}">
                                    <h3 v-if="__('tamwil.'+besoin.nom_besoin).length<25" :title="__('tamwil.'+besoin.nom_besoin)" class="text-center">{{__('tamwil.'+besoin.nom_besoin)}}</h3>
                                    <h3 v-else :title="__('tamwil.'+besoin.nom_besoin)" class="text-center">{{__('tamwil.'+besoin.nom_besoin).substring(0,25)+".."}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- showing results sections -->
                <div v-if="curentStep == 3" class="col-12"  :class="{'text-right': locale == 'ar'}">
                    
                    <button v-if="loading == false" @click.prevent="pretStep" class="btn btn-primary col-1 mb-3" :title="__('tamwil.back')">
                        <svg v-if="locale == 'ar'" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                        </svg>
                    </button>
                    <div v-if="loading == false"> 
                        <div class="row justify-content-md-center m-2">
                            <div v-for="organisation in organisationsResult" :key="organisation.id" class="col-4 ftco-animate fadeInUp ftco-animated d-flex text-center">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center mb-2">
                                            <h5 v-if="locale == 'ar'" class="text-xs font-weight-bold text-primary col-9 text-right" :title="organisation.nom_organisation_ar">{{organisation.nom_organisation_ar.substring(0,35)+"..."}}</h5>
                                            <h5 v-else class="text-xs font-weight-bold text-primary col-9 text-left" :title="organisation.nom_organisation_fr">{{organisation.nom_organisation_fr.substring(0,35)+"..."}}</h5>
                                            <img :src="'/assets/images/organisation/'+organisation.icone" class="offset-1 col-2 rounded d-flex align-items-start " >
                                        </div> 
                                    </div>
                                            <h6 class="text-center"> {{__('organisation.'+organisation.type_d_organisation_fr.replace(/_/g, " ") )}}</h6> 
                                    <div class="d-flex align-items-end">
                                        <a :href="'showorganisation/'+organisation.id" class="btn btn-outline-primary btn-lg btn-block m-3 ">{{__('organisation.Afficherlorganisation')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="loading == false">
                        <div v-if="organisationsResult == 0" class="alert alert-warning col-12" role="alert" >
                                {{__('organisation.aucune')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>
</template>
<script> 

export default {

        name : 'Organisations',

        props: {
                organisations:Array,               
                },
        
        components:{
        },

        data: function(){
            return{
                curentStep : 1,
                form:{
                    type:'',
                    bes:'',
                },
                
                organisationsResult:[],
                allerrors: [],
                success : false,
                locale: window._locale,
                loading: false,
                besoins :[]
                
            }
        },

        methods:{

            pretStep(){
                this.curentStep --
                history.pushState({}, null, '?step='+this.curentStep)
            },

            nextStep(){
                this.curentStep++
                history.pushState({}, null, '?step='+this.curentStep)

                const queryString = window.location.search;

                const urlParams = new URLSearchParams(queryString);

                const step = urlParams.get('step')
            },

            selectOrg(type){
                this.loading = true;
                this.form.type = type
                
                var dataform = new FormData();
                dataform.append('type', this.form.type);

                axios.post('/selectBesoins',dataform)
                .then( response => {
                        this.besoins = response.data;
                        this.loading= false
                    }).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });   
                    
                this.nextStep()
                localStorage.setItem('type', JSON.stringify(this.form.type))
            },

            selectBesoin(id){
                
                this.loading = true;
                this.form.bes = id

                var dataform = new FormData();
                dataform.append('type', this.form.type);
                dataform.append('besoin', id);


                axios.post('/findOrganisation',dataform)
                .then( response => {
                        this.organisationsResult = response.data;
                        
                        localStorage.setItem('organisations', JSON.stringify(this.organisationsResult))
                        this.loading= false
                    }).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });   
                this.nextStep()

                localStorage.setItem('orgBesoin', JSON.stringify(this.form.bes))
                localStorage.setItem('orgBesoins', JSON.stringify(this.besoins))

                localStorage.setItem('curentStep', JSON.stringify(this.curentStep))

                const time = Date.now()
                localStorage.setItem('time', JSON.stringify(time))
                
            },

            organisationsStep(){
                if (this.form.type != '') {
                    this.curentStep = 1
                    history.pushState({}, null, '?step='+this.curentStep)
                }
            },

            financementStep(){
                if (this.form.type != '') {
                    this.curentStep = 2
                    history.pushState({}, null, '?step='+this.curentStep)
                }  
            },

            afficheStep(){
                if (this.form.bes != '') {
                    this.curentStep = 3
                    history.pushState({}, null, '?step='+this.curentStep)
                } 
            },
        },

        mounted() {
            let vm = this;
            window.onpopstate = function(event) {
                var url = new URL(window.location.href)

                var step = url.searchParams.get("step")
                if (!step) { step= 1 }
                vm.curentStep = step
            };

            if(localStorage){

                this.besoins = JSON.parse(localStorage.orgBesoins)

                this.form.type = JSON.parse(localStorage.type) 
                this.form.bes = JSON.parse(localStorage.orgBesoin ) 

                this.organisationsResult =JSON.parse(localStorage.organisations)

                const date = Date.now()
                if(date -  JSON.parse(localStorage.time) < 300000){
                    this.curentStep = JSON.parse(localStorage.curentStep)
                }
                else{
                    this.curentStep = 1
                }
                
            }
        },
    }
</script>


 
   

    
