(()=>{var e,t={943:()=>{function e(e){e.preventDefault();const t=new FormData(this);fetch("/wp-content/themes/prof-rem-stroi/mail.php",{method:"POST",body:t}).then((e=>e.json())).then((({status:e})=>{"success"===e&&(console.log("ToDo: добавить цель Яндекс Метрики"),console.log("ToDo: добавить редирект на страницу спасибо"))})).catch((e=>console.log("Error: ",e)))}document.addEventListener("DOMContentLoaded",(()=>{document.querySelectorAll(".js-form").forEach((t=>{t.addEventListener("submit",e)}))}))},196:()=>{const e=document.querySelector(".js-header"),t=document.querySelector(".js-watch-header");new IntersectionObserver((function(t){t[0].isIntersecting?e.classList.remove("header_fixed"):e.classList.add("header_fixed")})).observe(t)},303:()=>{const e=document.querySelector(".js-overlay"),t=document.querySelectorAll("[data-modal]"),r=document.querySelectorAll("[data-modal-open]"),s=document.querySelectorAll("[data-modal-close]"),n={};function o(t){const r=t.currentTarget.dataset.modalOpen;l(r)&&(n[r].classList.remove("hidden"),e.classList.remove("hidden"))}function a(t){const r=t.currentTarget.dataset.modalClose;l(r)&&(n[r].classList.add("hidden"),e.classList.add("hidden"))}function i(){for(const e in n)n[e].classList.contains("hidden")||n[e].classList.add("hidden");e.classList.contains("hidden")||e.classList.add("hidden")}function l(e){return!!Object.hasOwn(n,e)||(console.error(`Модалки с именем ${e} не существует`),!1)}t.forEach((e=>{const t=e.dataset.modal;n[t]=e})),r.forEach((e=>{e.addEventListener("click",o)})),s.forEach((e=>{e.addEventListener("click",a)})),e.addEventListener("click",i),document.addEventListener("keydown",(({key:e})=>{"Escape"===e&&i()}))},691:(e,t,r)=>{"use strict";r(196),r(303),r(943);var s=r(56);const n=document.querySelectorAll(".image-compare"),o={controlColor:"#ffffff",controlShadow:!1,addCircle:!0,addCircleBlur:!1,smoothing:!1};n.forEach((e=>{new s.Z(e,o).mount()}));var a=r(374);const i={loop:!0,allowTouchMove:!1,grabCursor:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}},l={loop:!0,spaceBetween:10,slidesPerView:4,grabCursor:!0,freeMode:!0,watchSlidesProgress:!0};[{swiperClass:".js-example-1",thumbsClass:".js-example-thumbs-1"},{swiperClass:".js-example-2",thumbsClass:".js-example-thumbs-2"},{swiperClass:".js-example-3",thumbsClass:".js-example-thumbs-3"},{swiperClass:".js-example-4",thumbsClass:".js-example-thumbs-4"}].forEach((({swiperClass:e,thumbsClass:t},r,s)=>{s[r].thumbsSwiper=new a.Z(t,l),s[r].swiper=new a.Z(e,{...i,thumbs:{swiper:s[r].thumbsSwiper}})})),new a.Z(".js-video-reviews",{grabCursor:!0,slidesPerView:1,spaceBetween:16,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{576:{grabCursor:!0,slidesPerView:2,grid:{fill:"row",rows:2},spaceBetween:16,navigation:{enabled:!1}},992:{grabCursor:!0,slidesPerView:2,grid:{fill:"row",rows:2},spaceBetween:20,navigation:{enabled:!1}}}}),new a.Z(".js-certificates",{grabCursor:!0,slidesPerView:1,spaceBetween:16,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{576:{grabCursor:!0,slidesPerView:2,spaceBetween:16,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0}},992:{grabCursor:!0,slidesPerView:4,spaceBetween:20,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0}}}}),new(r(435).Z)({gallery:".js-certificates",children:"a",pswpModule:()=>r.e(216).then(r.bind(r,963))}).init();var c=r(537),d=r(151),p=r(469),u=r(397),b=r(175),m=r(899),w=r(869),h=r(390),v=r(995),f=r(698),g=r(323),E=r(357),y=r(320),C=r(317),j=r(36);const x=[d.VH,p.iD,u.Zz,b.eS,m.op,w.pZ,h.AB,v.FU,f.j1,g.op,E.yO,y.IL,C.gM,j.vt];c.vI.add(x),c.vz.watch();var O=r(547);const L={mask:"+{7} (000) 000-00-00"};document.addEventListener("DOMContentLoaded",(()=>{document.querySelectorAll(".js-phone-mask").forEach((e=>{e.setAttribute("minlength",18),e.setAttribute("maxlength",18),(0,O.ZP)(e,L)}))}))}},r={};function s(e){var n=r[e];if(void 0!==n)return n.exports;var o=r[e]={exports:{}};return t[e](o,o.exports,s),o.exports}s.m=t,e=[],s.O=(t,r,n,o)=>{if(!r){var a=1/0;for(d=0;d<e.length;d++){for(var[r,n,o]=e[d],i=!0,l=0;l<r.length;l++)(!1&o||a>=o)&&Object.keys(s.O).every((e=>s.O[e](r[l])))?r.splice(l--,1):(i=!1,o<a&&(a=o));if(i){e.splice(d--,1);var c=n();void 0!==c&&(t=c)}}return t}o=o||0;for(var d=e.length;d>0&&e[d-1][2]>o;d--)e[d]=e[d-1];e[d]=[r,n,o]},s.d=(e,t)=>{for(var r in t)s.o(t,r)&&!s.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},s.e=()=>Promise.resolve(),s.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),s.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{var e={179:0};s.O.j=t=>0===e[t];var t=(t,r)=>{var n,o,[a,i,l]=r,c=0;if(a.some((t=>0!==e[t]))){for(n in i)s.o(i,n)&&(s.m[n]=i[n]);if(l)var d=l(s)}for(t&&t(r);c<a.length;c++)o=a[c],s.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return s.O(d)},r=self.webpackChunk=self.webpackChunk||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var n=s.O(void 0,[216],(()=>s(691)));n=s.O(n)})();
//# sourceMappingURL=main.js.map