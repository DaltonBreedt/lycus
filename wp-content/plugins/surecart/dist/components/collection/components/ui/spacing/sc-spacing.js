import{Host,h}from"@stencil/core";export class ScSpacing{render(){return h(Host,null,h("slot",null))}static get is(){return"sc-spacing"}static get encapsulation(){return"shadow"}static get originalStyleUrls(){return{$:["sc-spacing.scss"]}}static get styleUrls(){return{$:["sc-spacing.css"]}}}