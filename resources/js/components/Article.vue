<template>
    <div class="P-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une organisation</h1>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#fr" role="tab" aria-controls="fr" aria-selected="true">Francais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ar" role="tab" aria-controls="ar" aria-selected="false">Arabe</a>
            </li>
        </ul>
            <div class="tab-content m-3" id="myTabContent">

                <div class="tab-pane fade show active" id="fr" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-md-12 mb-3 mb-sm-0">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control " id="title" name="title"  value="">
                        </div>
                    </div>                
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-md-12 mb-3 mb-sm-0">
                            <label for="content">Article</label>
                            <div id="editor-js-fr" class="bg-white p-1 border rounded"></div>
                        </div>
                    </div> 
                    
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <div class="alert alert-warning" role="alert">veuillez remplir la suite des informations en arabe aussi</div>
                        </div>
                    </div>               
                </div>

                <div class="tab-pane fade text-right" id="ar" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-md-12 mb-3 mb-sm-0">
                            <label for="title">العنوان</label>
                            <input type="text" class="form-control " id="title" name="title"  value="">
                        </div>
                    </div>                
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-md-12 mb-3 mb-sm-0">
                            <label for="content">المقال</label>
                            <div id="editor-js-ar" class="bg-white p-1"></div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <button @click.prevent="submit()" class="btn btn-primary btn-user btn-block">
                                Ajouter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
import EditorJS from '@editorjs/editorjs'; 
import Paragraph from '@editorjs/paragraph'; 
import Header from '@editorjs/header'; 
import List from '@editorjs/list'; 
import ImageTool from '@editorjs/image';

const Checklist = require('@editorjs/checklist');
const SimpleImage = require('@editorjs/simple-image');
const ColorPlugin = require('editorjs-text-color-plugin');
const Delimiter = require('@editorjs/delimiter');



const editorFr = new EditorJS({ 
  /** 
   * Id of Element that should contain the Editor 
   */ 
  holder: 'editor-js-fr', 
  
  /** 
   * Available Tools list. 
   * Pass Tool's class or Settings object for each Tool you want to use 
   */ 
  tools: { 
    header: {
      class: Header,
      inlineToolbar: true,
      config: {
        placeholder: 'Title...'
      }
    }, 

    paragraph: {
      class: Paragraph,
      inlineToolbar : true
    },

    list: {
      class: List,
      inlineToolbar : true
    },

    checklist: {
      class: Checklist,
      inlineToolbar : true
    },

    image : {
        class: ImageTool,
    },

    simpleImage: SimpleImage,
    delimiter: Delimiter,

    Color: {
      class: ColorPlugin, // if load from CDN, please try: window.ColorPlugin
      config: {
         colorCollections: ['#FF1300','#EC7878','#9C27B0','#673AB7','#3F51B5','#0070FF','#03A9F4','#00BCD4','#4CAF50','#8BC34A','#CDDC39', '#FFF'],
         defaultColor: '#FF1300',
         type: 'text', 
      }     
    },

    Marker: {
      class: ColorPlugin, // if load from CDN, please try: window.ColorPlugin
      config: {
         defaultColor: '#FFBF00',
         type: 'marker', 
      }       
    },

  }
})

const editorAr = new EditorJS({ 
  /** 
   * Id of Element that should contain the Editor 
   */ 
  holder: 'editor-js-ar', 
  
  /** 
   * Available Tools list. 
   * Pass Tool's class or Settings object for each Tool you want to use 
   */ 
  tools: { 
    header: {
      class: Header,
      inlineToolbar: true,
      config: {
        placeholder: 'Title...'
      }
    }, 

    paragraph: {
      class: Paragraph,
      inlineToolbar : true
    },

    list: {
      class: List,
      inlineToolbar : true
    },

    checklist: {
      class: Checklist,
      inlineToolbar : true
    },

    image : {
        class: ImageTool,
    },

    simpleImage: SimpleImage,
    delimiter: Delimiter,

    Color: {
      class: ColorPlugin, // if load from CDN, please try: window.ColorPlugin
      config: {
         colorCollections: ['#FF1300','#EC7878','#9C27B0','#673AB7','#3F51B5','#0070FF','#03A9F4','#00BCD4','#4CAF50','#8BC34A','#CDDC39', '#FFF'],
         defaultColor: '#FF1300',
         type: 'text', 
      }     
    },

    Marker: {
      class: ColorPlugin, // if load from CDN, please try: window.ColorPlugin
      config: {
         defaultColor: '#FFBF00',
         type: 'marker', 
      }       
    },

  }
})
 


export default {
    name: 'createArticle',
    data() {
        return {
        value: null
        };
    },
    methods:{
        submit(){

            editorFr.save().then((output) => {
                console.log('Data: ', output);
            }).catch((error) => {
                    console.log('Saving failed: ', error)
            });

            editorAr.save().then((output) => {
                console.log('Data: ', output);
            }).catch((error) => {
                    console.log('Saving failed: ', error)
            });

        }
    }
}
</script>
