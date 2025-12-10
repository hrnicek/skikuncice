<script>
import { Head } from "@inertiajs/vue3";
import { parse } from "node-html-parser";

export default {
  extends: Head,
  methods: {
    getMetadata() {
      const metadata = this.$page.props.seo;

      if (!metadata) return [];

      if (typeof DOMParser !== 'undefined') {
          const element = new DOMParser().parseFromString(`<div>${metadata}</div>`, "text/html").body.firstChild;
          return Array.from(element.children);
      }

      const element = parse(`<div>${metadata}</div>`).firstChild;
      return element.childNodes.filter(node => typeof node.setAttribute === 'function');
    },
    renderElements(elements) {
      return elements.map((element) => {
        element.setAttribute("inertia", "");
        return element.outerHTML;
      });
    },
  },
  render() {
    const seoElements = this.renderElements(this.getMetadata());

    const headElements = this.renderNodes(this.$slots.default ? this.$slots.default() : []);

    this.provider.update([...seoElements, ...headElements]);
  },
};
</script>