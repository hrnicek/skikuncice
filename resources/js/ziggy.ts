const Ziggy = {"url":"http:\/\/localhost:8000","port":8000,"defaults":{},"routes":{"boost.browser-logs":{"uri":"_boost\/browser-logs","methods":["POST"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}} as any;
if (typeof window !== 'undefined' && typeof (window as any).Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, (window as any).Ziggy.routes);
}
export { Ziggy };
