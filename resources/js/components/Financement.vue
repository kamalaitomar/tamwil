<template>
    <div class="m-3">
        
        <!-- back button -->
        <!-- <div v-if="curentStep === 1" class="m-5"></div>
        <button v-if="curentStep != 1" @click.prevent="pretStep" class="btn btn-outline-primary" >{{__('tamwil.back')}}</button> -->

        <!-- steps time line  -->
        <div class="row justify-content-md-center" style="cursor: pointer">
            <div class="col-2 text-center d-flex" @click.prevent="profilsStep()">
                <div class=" col-12 d-flex align-items-center justify-content-center" :class="{'text-primary': curentStep === 1}">
                    <div class="m-1 p-2 col-12">
                        <div class=" col-12">
                            <svg fill= "currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40"><path d="M15.48 4.434c-3.021 0-5.48 2.469-5.48 5.5 0 3.03 2.459 5.5 5.48 5.5 3.022 0 5.48-2.47 5.48-5.5.001-3.031-2.458-5.5-5.48-5.5zm0 1c2.48 0 4.481 2.007 4.48 4.5 0 2.492-2 4.5-4.48 4.5a4.483 4.483 0 01-4.48-4.5c0-2.493 2.001-4.5 4.48-4.5zm-2.98 11c-4.148 0-7.5 3.368-7.5 7.529v4.516a.5.5 0 00.5.5h3.854a.5.5 0 00.292 0h11.708a.5.5 0 00.292 0H25.5a.5.5 0 00.5-.5v-4.516c0-4.161-3.352-7.53-7.5-7.53h-6zm0 1h6c3.609 0 6.5 2.902 6.5 6.529v4.016h-3v-4.024a.5.5 0 00-.508-.506.5.5 0 00-.492.506v4.024H10v-4.024a.5.5 0 00-.508-.506.5.5 0 00-.492.506v4.024H6v-4.016c0-3.627 2.891-6.53 6.5-6.53z" font-weight="400" font-family="sans-serif" overflow="visible" fill-rule="evenodd"/></svg>                        
                        </div>
                        <h5>{{__('tamwil.Je suis')}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-2 text-center d-flex" @click.prevent="cyclesStep()">
                <div class=" col-12 d-flex align-items-center justify-content-center" :class="{'text-primary': curentStep === 2}">
                    <div class="m-1 p-2 col-12">
                        <div class=" col-12">
                            <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><path d="M62.372 77.477c-11.348 5.11-24.884 2.628-33.684-6.172-10.951-10.951-11.687-28.304-2.217-40.122l.352 3.332a1.5 1.5 0 002.984-.314l-.688-6.516c.002-.065-.014-.126-.02-.19l-.004-.035a1.444 1.444 0 00-.138-.474 1.442 1.442 0 00-.251-.377c-.008-.009-.011-.02-.019-.028-.009-.009-.021-.012-.03-.021-.037-.036-.07-.076-.111-.109a1.485 1.485 0 00-1.102-.325l-6.741.713a1.499 1.499 0 00-1.333 1.649 1.496 1.496 0 001.649 1.333l2.955-.313c-10.248 12.99-9.389 31.938 2.592 43.918 6.323 6.323 14.866 9.679 23.511 9.679 4.586 0 9.202-.945 13.526-2.894a1.499 1.499 0 00.751-1.983 1.494 1.494 0 00-1.982-.751zm16.571-7.309l-2.919.309c4.592-5.815 7.091-12.95 7.091-20.474 0-8.848-3.445-17.166-9.702-23.423-9.747-9.745-24.709-12.438-37.232-6.695a1.498 1.498 0 00-.738 1.988 1.498 1.498 0 001.988.738c11.388-5.219 24.997-2.773 33.861 6.09 5.689 5.69 8.823 13.255 8.823 21.302 0 6.937-2.334 13.513-6.621 18.841l-.355-3.37c-.087-.824-.844-1.407-1.649-1.335a1.501 1.501 0 00-1.335 1.649l.712 6.741c.007.062.038.113.052.172.023.102.044.199.089.295.049.106.118.195.189.286.036.046.053.102.096.144.01.01.023.013.033.022.127.121.272.217.434.288.012.005.021.015.033.02a1.484 1.484 0 00.723.108l6.742-.712a1.501 1.501 0 001.335-1.649c-.088-.824-.838-1.41-1.65-1.335z"/></svg>
                        </div>
                        <h5>{{__('tamwil.life cycle')}}</h5>
                    </div>
                </div>
            </div>

            <div class="col-2 text-center d-flex" @click.prevent="besoinsStep()">
                <div class=" col-12 d-flex align-items-center justify-content-center" :class="{'text-primary': curentStep === 3}">
                    <div class="m-1 p-2 col-12">
                        <div class="col-12">
                            <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;marker:none;-inkscape-font-specification:Sans" d="M68.781 10.531a1 1 0 00-.812 1v4.281c-2.777.814-5.28 2.175-7.344 4.094l-3.688-2.093a1 1 0 00-1.374.343l-4.188 7.157a1 1 0 00.375 1.375l3.656 2.093c-.337 1.36-.594 2.748-.593 4.219 0 1.462.26 2.858.593 4.219l-3.656 2.093a1 1 0 00-.375 1.376l4.188 7.156a1 1 0 001.374.343l3.688-2.093c2.064 1.916 4.569 3.31 7.344 4.125V54.5a1 1 0 001 1h8.312a1 1 0 001-1v-4.219a18.075 18.075 0 007.406-4.187l3.626 2.093a1 1 0 001.374-.343l4.188-7.157a1 1 0 00-.375-1.374l-3.625-2.094c.331-1.359.594-2.756.594-4.219 0-1.474-.259-2.86-.594-4.219l3.625-2.093a1 1 0 00.375-1.375l-4.188-7.157a1 1 0 00-1.374-.343l-3.626 2.093c-2.078-1.946-4.591-3.348-7.406-4.156v-4.219a1 1 0 00-1-1H68.97a1 1 0 00-.188 0zm1.188 2h6.312v3.906a1 1 0 00.75.97c3.045.734 5.748 2.256 7.844 4.405a1 1 0 001.219.157l3.344-1.938 3.187 5.438-3.344 1.937a1 1 0 00-.469 1.157c.414 1.425.657 2.893.657 4.437 0 1.54-.245 3.048-.656 4.469a1 1 0 00.468 1.125l3.344 1.937-3.188 5.438-3.343-1.938a1 1 0 00-1.219.157 16.255 16.255 0 01-7.844 4.437 1 1 0 00-.75.969V53.5H69.97v-3.938a1 1 0 00-.75-.968 16.441 16.441 0 01-7.781-4.407 1 1 0 00-1.22-.156l-3.406 1.938-3.187-5.438L57 38.594a1 1 0 00.469-1.125A15.952 15.952 0 0156.812 33c0-1.543.241-3.017.657-4.438A1 1 0 0057 27.407l-3.375-1.937 3.188-5.438 3.406 1.938a1 1 0 001.218-.157c2.09-2.127 4.765-3.63 7.782-4.375a1 1 0 00.75-.968V12.53zm3.187 12.094c-4.654 0-8.5 3.742-8.5 8.375 0 4.632 3.841 8.406 8.5 8.406 4.66 0 8.438-3.783 8.438-8.406 0-4.622-3.784-8.375-8.438-8.375zm0 2c3.588 0 6.438 2.837 6.438 6.375a6.404 6.404 0 01-6.438 6.406c-3.583 0-6.5-2.878-6.5-6.406 0-3.528 2.912-6.375 6.5-6.375zm-41 27.125a1 1 0 00-.281.094l-7.219 3.031a1.001 1.001 0 10.782 1.844L32.5 55.75h19.625a3.628 3.628 0 013.656 3.625c0 2.005-1.54 3.281-3.656 3.281H38.969a1 1 0 00-1 1v1a1 1 0 00.656.938L53.5 70.563a1 1 0 00.5.03s4.712-1.01 9.469-2c2.378-.494 4.761-.972 6.593-1.343.917-.185 1.692-.362 2.25-.469.28-.053.5-.067.657-.094.065-.01.119-.026.156-.03a3.41 3.41 0 013.438 3.437 3.45 3.45 0 01-2.344 3.281c.089-.03-.096.042-.281.094-.186.052-.457.098-.782.187-.65.179-1.55.426-2.625.719-2.149.585-4.97 1.363-7.781 2.125-5.482 1.486-10.64 2.897-10.906 2.969L28.28 74.563a1 1 0 00-.562.03l-6.782 2.594-5.25-19.468A1 1 .524 0014.47 57L5.75 59.344a1 1 .524 00-.125.031 1 1 .524 00-.563 1.188l6.22 23.25a1 1 .524 001.218.687l8.719-2.344a1 1 .524 00.718-1.219l-.5-1.812 6.657-2.531 23.531 4.875a1 1 0 00.469 0l11.187-3.031c2.811-.763 5.63-1.54 7.782-2.126 1.075-.292 1.972-.539 2.624-.718.327-.09.592-.166.782-.219.19-.053.23-.045.375-.094a5.487 5.487 0 003.719-5.187 5.44 5.44 0 00-5.438-5.438c-.168 0-.183-.01-.25 0s-.161.016-.25.031c-.178.032-.402.102-.688.157-.571.11-1.361.251-2.28.437-1.84.372-4.214.88-6.594 1.375-4.62.961-8.92 1.85-9.188 1.906l-11.781-3.906h10.031c3.026 0 5.656-2.193 5.656-5.281 0-3.089-2.55-5.625-5.656-5.625H32.281a1 1 0 00-.125 0zm-18.125 5.438L19.75 80.5l-6.813 1.813L7.25 61l6.781-1.813z" font-weight="400"  overflow="visible" font-family="Sans"/></svg>
                        </div>
                        <h5>{{__('tamwil.i need')}}</h5>
                    </div>
                </div>
            </div>

            <div class="col-2 text-center d-flex" @click.prevent="fasciculesStep()">
                <div class=" col-12 d-flex align-items-center justify-content-center" :class="{'text-primary': curentStep === 4}">
                    <div class="m-1 p-2 col-12">
                        <div class="col-12">
                            <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 640"><path d="M476.38 181.536c-3.779-5.121-9.977-8.07-17.005-8.07h-49.389V88.832c0-3.991-3.249-7.24-7.24-7.24H39.026c-3.991 0-7.24 3.249-7.24 7.24v334.337c0 .359.155.665.205 1.01.057.405.111.785.237 1.174.204.63.505 1.181.865 1.723.139.211.172.47.334.667.067.082.173.114.244.192.497.557 1.094.98 1.739 1.364.226.135.407.326.646.435.912.415 1.904.675 2.969.675h363.72c1.444 0 2.713-.533 3.844-1.265.235-.15.444-.268.659-.445 1.035-.843 1.821-1.915 2.266-3.202.026-.077.111-.114.136-.192l69.378-224.01c2.243-7.222 1.272-14.426-2.648-19.759zM46.266 96.071h349.24v77.395h-25.728v-41.867c0-3.991-3.249-7.24-7.24-7.24H98.957c-3.991 0-7.24 3.249-7.24 7.24v81.827H79.993a7.224 7.224 0 00-7.081 5.809L46.266 350.949V96.071zm309.033 42.768v34.627h-53.875c-13.349 0-26.999 10.348-31.096 23.556l-5.086 16.404H106.197v-74.587h249.102zm109.921 58.183l-67.807 218.906H47.873l38.035-188.023h184.668a7.216 7.216 0 006.904-5.103l6.657-21.507c2.207-7.116 10.295-13.349 17.287-13.349h157.951c1.713 0 4.026.371 5.35 2.172 1.184 1.589 1.36 4.097.495 6.904z"/></svg>                        </div>
                        <h5>{{__('tamwil.programme')}}</h5>
                    </div>
                </div>
            </div>

            <div class="col-2 text-center d-flex" @click.prevent="offresStep()">
                <div class=" col-12 d-flex align-items-center justify-content-center" :class="{'text-primary': curentStep === 5}">
                    <div class="m-1 p-2 col-12">
                        <div class="col-12">
                            <svg fill= "currentColor" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 100 125"><path d="M82 17H18a1 1 0 00-1 1v18.5a1 1 0 001 1h64a1 1 0 001-1V18a1 1 0 00-1-1zm-1 18.5H19V19h62v16.5z"/><path d="M24.208 32.857a1 1 0 00.81-.413l1.244-1.714a4.69 4.69 0 001.9.415c.251 0 .504-.02.756-.06a4.716 4.716 0 003.1-1.903c.744-1.027 1.045-2.282.845-3.535s-.874-2.354-1.901-3.099a4.72 4.72 0 00-3.536-.846 4.718 4.718 0 00-3.098 1.902 4.72 4.72 0 00-.847 3.536 4.714 4.714 0 001.158 2.42l-1.24 1.71a1 1 0 00.809 1.587zm1.739-8.079a2.732 2.732 0 012.231-1.135c.575 0 1.134.18 1.61.524a2.73 2.73 0 011.1 1.794 2.731 2.731 0 01-.49 2.047 2.732 2.732 0 01-1.794 1.101 2.726 2.726 0 01-2.046-.49 2.73 2.73 0 01-1.101-1.793 2.733 2.733 0 01.49-2.048zM38.292 28.25h37.5a1 1 0 000-2h-37.5a1 1 0 000 2zM75.685 45h-51.37a1 1 0 000 2h51.37a1 1 0 000-2zM75.685 57h-51.37a1 1 0 000 2h51.37a1 1 0 000-2zM75.685 69h-51.37a1 1 0 000 2h51.37a1 1 0 000-2zM75.685 81h-51.37a1 1 0 000 2h51.37a1 1 0 000-2z"/></svg>                        </div>
                        <h5>{{__('tamwil.offre')}}</h5>
                    </div>
                </div>
            </div>
           
        </div>

        <!-- choosing steps  -->
        <form method="POST" action="/organisation"  @submit.prevent="onSubmit">

            <div class="row justify-content-md-center my-3">
                <button v-if="curentStep > 1 && curentStep < 4 &&  loading == false" @click.prevent="pretStep" class="btn btn-primary" :title="__('tamwil.back')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                    </svg><br>
                </button>
                <div class="col-10">
                 
                    <!-- choose profil section -->
                    <div v-if="curentStep == 1" class="text-center">
                        <div class="row">
                            <div v-for="profil in profils" :key="profil.id" @click.prevent="selectProfil(profil.id)" class="col-lg-3 ftco-animate fadeInUp ftco-animated d-flex" style="cursor: pointer">
                                <div class="staff bg-info m-1 p-2 mb-3 col-12  shadow-sm " :class="{ 'bg-white border-light' : profil.id != form.profil}">
                                    <img :src="'/assets/images/'+profil.icon" class="col-lg-6">
                                    <div class="text m-1 mt-3" :class="{'bg-info ':profil.id == form.profil}">
                                        <h3>{{__('tamwil.'+profil.nom_profil )}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- choose cycle section -->      
                    <div v-if="curentStep == 2" class="ftco-animate fadeInUp ftco-animated">
                            <div class="row justify-content-center">
                                <grid-loader :loading="loading" color="DeepSkyBlue" class="mb-5"></grid-loader>
                            </div>
                            <div v-if="loading == false">
                                <div class="row" >
                                    <div v-for="cycle in cycles" :key="cycle.id" @click.prevent="selectCycle(cycle.id)" class="col-lg-4 ftco-animate fadeInUp ftco-animated d-flex" style="cursor: pointer">
                                        <div class="staff bg-info p-4 mb-3 col-12 shadow-sm d-flex align-items-center justify-content-center" :class="{ 'bg-white border-light' : cycle.id != form.cycle}">
                                            <div class="text m-1 text-center"  :class="{'bg-info ':cycle.id == form.cycle, 'text-right': locale=='ar'}">
                                                <h3>{{__('tamwil.'+cycle.nom_cycle )}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- choose besoin section -->
                    <div v-if="curentStep == 3" class="text-center">
                        <div class="row">
                            <div v-for="besoin in besoins" :key="besoin.id" @click.prevent="selectBesoin(besoin.id)" class="col-lg-4 ftco-animate fadeInUp ftco-animated d-flex" style="cursor: pointer">
                                <div class="staff bg-info m-1 p-2 border mb-3 col-12  shadow-sm" :class="{ 'bg-white border-light' : besoin.id != form.besoin}">
                                    <img :src="'/assets/images/'+besoin.icon" class="col-lg-6">
                                    <div class="text m-1  text-center mt-3"  :class="{'bg-info ':besoin.id == form.besoin}">
                                        <h3>{{__('tamwil.'+besoin.nom_besoin)}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>

        <!-- showing results sections -->

            <!-- showing groups of results -->
        <div v-if="curentStep == 4">
            <button v-if="loading == false" @click.prevent="pretStep" class="btn btn-primary col-1 mb-3" :title="__('tamwil.back')">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                </svg><br>
            </button>
            <div class="row justify-content-center">
                <grid-loader :loading="loading" color="DeepSkyBlue" class="mb-5"></grid-loader>
            </div>
            <div v-if="loading == false">
                <div class="row justify-content-md-center">
                    <div v-for="(offre, key) in offres" :key="key" class="col-3 ftco-animate fadeInUp ftco-animated d-flex text-center" >
                        <div class="staff bg-white border-light m-1 p-2 border mb-5 col-12 card">
                            <div class="text text-center card-body">
                                <h2>{{__('tamwil.'+key )}}</h2>
                            </div>
                            <div>
                                <h1  class="text-success font-weight-bold">{{offre.length}}</h1>
                                <span>{{__('tamwil.offres')}}</span>
                            </div>
                            <div class="m-3">
                                <a v-if="offre.length == 1" :href="'offre/'+offre[0].id" target="_blank" class="btn btn-outline-primary btn-lg btn-block">{{__('tamwil.savoir_plus')}}</a>
                                <button v-else @click.prevent="showOffres(offre)" type="button" :offre="offre" class="btn btn-outline-primary btn-lg btn-block">{{__('tamwil.savoir_plus')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="loading == false">
                <div v-if="offres == 0" class="alert alert-warning col-12 mb-5" role="alert" >
                        {{__('tamwil.aucune')}}
                </div> 
            </div>
        </div>

            <!-- showing offers -->
        <div v-if="curentStep ==5" class="ftco-animate fadeInUp ftco-animated">
            <button v-if="loading == false" @click.prevent="pretStep" class="btn btn-primary col-1 mb-3" :title="__('tamwil.back')">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                </svg><br>
            </button>
            <div class="row justify-content-md-center">
                <div v-for="off in offre" :key="off.id" class="col-3 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body" :class="{'text-right': locale == 'ar'}">
                            <div class="row no-gutters align-items-center mb-2">
                                <h4 v-if="locale == 'ar'" class="text-primary" :title="off.nom_offre_ar">{{ off.nom_offre_ar.substring(0,70)+"..."  }}</h4>
                                <h4 v-else class="text-primary" :title="off.nom_offre_fr">{{ off.nom_offre_fr.substring(0,70)+"..." }}</h4>
                            </div>
                            <div class="mr-2">
                                <p  v-if="locale == 'ar'" class="h5 mb-0 text-gray-800">{{off.objet_ar.substring(0,70)+"..."}}</p>
                                <p v-else class="h5 mb-0 text-gray-800">{{off.objet_fr.substring(0,70)+"..."}}</p>
                            </div>
                        </div>
                        <div class="m-3">
                            <a :href="'offre/'+off.id" target="_blank" class="btn btn-outline-primary btn-lg btn-block">{{__('tamwil.affiche_loffre')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import GridLoader from 'vue-spinner/src/GridLoader.vue'

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
                slected: false,
                name : '{{off.nom_offre_'+window._locale+'}}',

                loading: false,
            }
        },

        props: {
                profils:Array,
                besoins: Array,
                },

        mounted() {
            console.log(_locale)
        },

        components:{
            GridLoader
        },
        
        methods:{
            
            onSubmit(){
                
                this.loading = true;
                let dataform = new FormData();
                dataform.append('profil', this.form.profil);
                dataform.append('cycle', this.form.cycle);
                dataform.append('besoin', this.form.besoin);


                axios.post( '/offres', dataform).then( response => {
                    setTimeout(()=>{
                        console.log(response);
                        console.log(dataform);
                        this.allerros = [];
                        this.submited = true;
                        this.success = true;
                        this.offres = response.data;
                        this.loading= false
                    }, 10)
                    
                } ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });

                    this.curentStep ++
                    this.allerrors = ''
            },

            pretStep(){
                this.curentStep --,
                this.slected = true
            },

            selectProfil($id){
                
                this.loading = true;
                this.form.profil = $id
                this.slected = true 
                var that = this
                axios.get('/cycles/' + this.form.profil)
                .then(function(res){
                    setTimeout(()=>{
                    console.log(res)
                    that.cycles = res.data
                    that.loading= false
                        }, 5)
                    }
                );
                this.curentStep ++
                this.allerrors = '',
                this.slected = false
            },

            selectCycle($id){
                this.form.cycle = $id,
                this.slected = true,
                this.curentStep ++
                this.allerrors = '',
                this.slected = false
            },

            selectBesoin($id){
                
                this.loading = true;
                this.form.besoin = $id,
                this.slected = true

                let dataform = new FormData();
                dataform.append('profil', this.form.profil);
                dataform.append('cycle', this.form.cycle);
                dataform.append('besoin', this.form.besoin);


                axios.post( '/offres', dataform).then( response => {
                    setTimeout(()=>{
                            console.log(response);
                            console.log(dataform);
                            this.allerros = [];
                            this.submited = true;
                            this.success = true;
                            this.offres = response.data;
                            this.loading= false
                        }, 5)
                    } ).catch((error) => {
                            this.allerros = error.response.data.errors;
                            this.success = false;
                        });

                    this.curentStep ++
                    this.allerrors = ''
            },

            showOffres($id){
                this.offre = $id
                this.curentStep ++
            },

            profilsStep(){
                if (this.form.profil != '') {
                    this.curentStep = 1
                }
                
            },
            cyclesStep(){
                if (this.form.profil != '') {
                    this.curentStep = 2
                }
            },
            besoinsStep(){
                if (this.form.cycle != '') {
                    this.curentStep = 3
                }
            },
            fasciculesStep(){
                if (this.form.besoin != '') {
                    this.curentStep = 4
                }
            },

        }
    }
</script>
