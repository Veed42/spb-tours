import {build, defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

build:{
    minify:false,
    outDir:'public/build',
    },
plugins:[
    laravel({
        input:['resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/app.scss'
        ],
        refresh:true,

    })
]

}
);
