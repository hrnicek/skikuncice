/// <reference types="vite/client" />
/// <reference types="../../vendor/tightenco/ziggy/dist/index.d.ts" />

import { route } from '../../vendor/tightenco/ziggy/dist/index';
import 'vue';

declare module '@vue/runtime-core' {
    interface ComponentCustomProperties {
        route: typeof route;
    }
}

declare global {
    var route: typeof import('../../vendor/tightenco/ziggy/dist/index').route;
}