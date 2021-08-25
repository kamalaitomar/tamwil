<template>
  <div id="editorjs" class="bg-white p-1 border rounded">
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

const editor = new EditorJS({ 
  /** 
   * Id of Element that should contain the Editor 
   */ 
  holder: 'editorjs', 
  
  /** 
   * Available Tools list. 
   * Pass Tool's class or Settings object for each Tool you want to use 
   */ 
  tools: { 
    header: {
      class: Header,
      inlineToolbar: ['link'],
      config: {
        placeholder: 'Title...'
      }
    }, 
    list: {
      class: List,
      inlineToolbar : true
    },
    paragraph: {
      class: Paragraph,
      inlineToolbar : true
    },
    image : {
        class: ImageTool,
        config: {
            endpoints: {
                // byFile: 'http://localhost:800/public/images', // Your backend file uploader endpoint
                // byUrl: 'http://localhost:800/public/images', // Your endpoint that provides uploading by Url
            },
        },
    },
    checklist: {
      class: Checklist,
      inlineToolbar : true
    },
    simpleImage: SimpleImage
  }
})


export default {
  data() {
    return {
      value: null
    };
  }
}
</script>
