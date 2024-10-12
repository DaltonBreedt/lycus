import{proxyCustomElement,HTMLElement,h,Fragment}from"@stencil/core/internal/client";import{s as state,e as isOptionSoldOut,h as isOptionMissing,b as setProduct}from"./watchers.js";import{d as defineCustomElement$4}from"./sc-form-control2.js";import{d as defineCustomElement$3}from"./sc-pill-option2.js";import{d as defineCustomElement$2}from"./sc-visually-hidden2.js";const scProductPillsVariantOptionCss=".sc-product-pills-variant-option__wrapper{display:flex;flex-wrap:wrap;gap:var(--sc-spacing-x-small)}",ScProductPillsVariantOption$1=proxyCustomElement(class extends HTMLElement{constructor(){super(),this.__registerHost(),this.label=void 0,this.optionNumber=1,this.productId=void 0}render(){return h("sc-form-control",{label:this.label},h("span",{slot:"label"},this.label),h("div",{class:"sc-product-pills-variant-option__wrapper"},(state[this.productId].variant_options[this.optionNumber-1].values||[]).map((t=>{const s=isOptionSoldOut(this.productId,this.optionNumber,t)||isOptionMissing(this.productId,this.optionNumber,t);return h("sc-pill-option",{isUnavailable:s,isSelected:state[this.productId].variantValues[`option_${this.optionNumber}`]===t,onClick:()=>setProduct(this.productId,{variantValues:{...state[this.productId].variantValues,[`option_${this.optionNumber}`]:t}})},h("span",{"aria-hidden":"true"},t),h("sc-visually-hidden",null,wp.i18n.sprintf(wp.i18n.__("Select %s: %s.","surecart"),this.label,t),s&&h(Fragment,null," ",wp.i18n.__("(option unavailable)","surecart")),state[this.productId].variantValues[`option_${this.optionNumber}`]===t&&h(Fragment,null," ",wp.i18n.__("This option is currently selected.","surecart"))))}))))}static get style(){return scProductPillsVariantOptionCss}},[0,"sc-product-pills-variant-option",{label:[1],optionNumber:[2,"option-number"],productId:[1,"product-id"]}]);function defineCustomElement$1(){"undefined"!=typeof customElements&&["sc-product-pills-variant-option","sc-form-control","sc-pill-option","sc-visually-hidden"].forEach((t=>{switch(t){case"sc-product-pills-variant-option":customElements.get(t)||customElements.define(t,ScProductPillsVariantOption$1);break;case"sc-form-control":customElements.get(t)||defineCustomElement$4();break;case"sc-pill-option":customElements.get(t)||defineCustomElement$3();break;case"sc-visually-hidden":customElements.get(t)||defineCustomElement$2()}}))}const ScProductPillsVariantOption=ScProductPillsVariantOption$1,defineCustomElement=defineCustomElement$1;export{ScProductPillsVariantOption,defineCustomElement};