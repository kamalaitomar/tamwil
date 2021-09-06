<template>
    <div class="P-5 m-3">
      <div id="editor" class="p-1 text-left" :class="{'text-right': locale == 'ar'}" >
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


export default {
    name: 'createArticle',
    props: {
            article:null,
        },

    data() {
        return {
          editor: '',
          locale : window._locale
        };
    },
    
    methods:{
    },

    mounted(){
      this.editor = new EditorJS({ 
      /** 
       * Id of Element that should contain the Editor 
       */ 
      holder: 'editor', 
      readOnly: true,
      
      /** 
       * Available Tools list. 
       * Pass Tool's class or Settings object for each Tool you want to use 
       */ 
      autofocus: true,

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

      },

    })

      if (this.article) {

        this.editor.isReady
        .then(() => {
            if (window._locale == "ar") {
                this.editor.render(JSON.parse(this.article.content_ar))
            }else{
                this.editor.render(JSON.parse(this.article.content_fr))
            }
        }).catch((reason) => {
            console.log(`Editor.js initialization failed because of ${reason}`)
          });
      }  
    }
}
</script>
