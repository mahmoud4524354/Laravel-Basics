// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',  // مسار ملف الإدخال الرئيسي
            refresh: true,  // تمكين التحديث التلقائي
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,  // إعداد قاعدة الروابط
                    includeAbsolute: false,  // عدم تضمين الروابط المطلقة
                },
            },
        }),
    ],
});
