/// <reference types="vite/client" />
/// <reference types="../../vendor/tightenco/ziggy/dist/index.d.ts" />

declare module 'vue' {
    interface ComponentCustomProperties {
        route: typeof import('../../vendor/tightenco/ziggy/dist/index').route;
    }
}

declare global {
    var route: typeof import('../../vendor/tightenco/ziggy/dist/index').route;
}