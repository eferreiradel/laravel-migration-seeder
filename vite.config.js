import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import path from "path";

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: {
                css: "resources/css/app.css",
                scss: "resources/scss/main.scss",
                app: "resources/js/app.js",
            },
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
