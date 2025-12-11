import { createInertiaApp } from '@inertiajs/vue3';
import createServer from '@inertiajs/vue3/server';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createSSRApp, type DefineComponent, h } from 'vue';
import { renderToString } from 'vue/server-renderer';
import { i18nVue } from 'laravel-vue-i18n';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createServer(
    (page) =>
        createInertiaApp({
            page,
            render: renderToString,
            title: (title) => (title ? `${title} - ${appName}` : appName),
            resolve: (name) =>
                resolvePageComponent(
                    `./pages/${name}.vue`,
                    import.meta.glob<DefineComponent>('./pages/**/*.vue'),
                ),
            setup: ({ App, props, plugin }) => {
                const app = createSSRApp({ render: () => h(App, props) })
                    .use(plugin)
                    .use(i18nVue, {
                        lang: props.initialPage.props.locale,
                        resolve: (lang: string) => {
                            const langs = import.meta.glob('../../lang/*.json', { eager: true });
                            return langs[`../../lang/${lang}.json`].default;
                        },
                    })
                    .use(ZiggyVue, {
                        ...(props.initialPage.props.ziggy as any),
                        location: new URL(page.props.ziggy.location),
                    });

                // Make route available globally - it's provided by ZiggyVue plugin
                const ziggyConfig = props.initialPage.props.ziggy as any;
                globalThis.route = (name?: any, params?: any, absolute?: any) => {
                    // Simple route helper that builds URLs from Ziggy config
                    if (!name) return ziggyConfig;

                    const routes = ziggyConfig.routes || {};
                    const route = routes[name];

                    if (!route) return name;

                    let url = route.uri.replace(/{([^}?]+)\??}/g, (match: string, key: string) => {
                        if (params && params[key] !== undefined) {
                            return params[key];
                        }
                        return '';
                    });

                    // Clean up double slashes
                    url = url.replace(/\/+/g, '/');

                    return absolute !== false ? `${ziggyConfig.url}/${url}` : `/${url}`;
                };

                return app;
            },
        }),
    { cluster: true },
);