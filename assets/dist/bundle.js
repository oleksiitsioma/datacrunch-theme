(()=>{var e={778:()=>{fetch("https://data-crunch.ddev.site/wp-json/dcpapi/v1/portfolio").then((e=>e.json())).then((t=>e(t)));const e=e=>{const t=document.getElementById("recent-portfolio-container");e.forEach((e=>{const n=document.createElement("div");n.className="columnGrid__column columnGrid__column_6 columnGrid recentPortfolio";const o=document.createElement("img");o.className="columnGrid__column columnGrid__column_4 recentPortfolio__thumbnail",o.setAttribute("src",e.thumbnail),n.appendChild(o);const c=document.createElement("div");c.className="columnGrid__column columnGrid__column_8";const r=document.createElement("h3");r.className="recentPortfolio__title",r.textContent=e.title,c.appendChild(r);const l=document.createElement("p");l.className="recentPortfolio__skills";let a=[];e.skills.forEach((e=>{a.push(e.name)})),l.textContent=a.join(", "),c.appendChild(l);const i=document.createElement("p");i.className="recentPortfolio__excerpt",i.textContent=e.excerpt,c.appendChild(i),n.appendChild(c),t.appendChild(n)}))}}},t={};function n(o){var c=t[o];if(void 0!==c)return c.exports;var r=t[o]={exports:{}};return e[o](r,r.exports,n),r.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";n(778)})()})();