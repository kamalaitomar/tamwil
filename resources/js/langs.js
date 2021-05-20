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
                return lang.get(key)
            }
        }
    },
}