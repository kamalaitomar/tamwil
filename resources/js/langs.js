const Lang = require("lang.js");

module.exports ={
    methods:{


        __(key){
            if (key) {
                let lang = new Lang({
                    messages: window._translations,
                    locale: window._locale,
                    fallback: 'en'
                })
                console.log(lang.get(key))
                return lang.get(key)
            }
        }
    },
}