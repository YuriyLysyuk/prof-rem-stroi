(()=>{var e,t={797:()=>{document.addEventListener("DOMContentLoaded",(()=>{document.querySelectorAll('a[href="#"]').forEach((e=>{e.dataset.modalOpen="callback"}))}))},943:()=>{function e(e){e.preventDefault();const t=this,n=new FormData(t),s=this.querySelector('[type="submit"]'),o=document.createElement("i");o.classList.add("js-spinner","fa-solid","fa-spinner","fa-spin"),s.appendChild(o);const r=this.querySelector(".js-error");s.setAttribute("disabled",""),fetch("/wp-content/themes/prof-rem-stroi/integration/mail.php",{method:"POST",body:n}).then((e=>e.json())).then((({status:e,message:n})=>{var s;"success"===e?(function(){const e=[],t=window?.prsOptions?.ym?.number,n=window?.prsOptions?.ym?.formGoal;t||e.push("Добавьте счетчик номера Яндекс Метрики в window.prsOptions.ym.number"),n||e.push("Добавьте название цели Яндекс Метрики для успешной отправки формы window.prsOptions.ym.formGoal"),"undefined"==typeof ym&&e.push("Убедитесь что счетчик Яндекс Метрики установлен"),e.length?e.forEach((e=>console.log(e))):ym(t,n)}(),null!==(s=r)&&(s.textContent="",s.classList.add("error_hidden")),window?.prsOptions?.thankYouPage?setTimeout((()=>{window.location.assign(window.prsOptions.thankYouPage)}),0):console.log("Добавьте ссылку на страницу Спасибо в window.prsOptions.thankYouPage"),t.reset()):function(e,t){e?(e.textContent=t,e.classList.remove("error_hidden")):console.error(t)}(r,n)})).catch((e=>console.log(e))).finally((()=>{s.removeAttribute("disabled"),s.removeChild(s.querySelector(".js-spinner"))}))}document.addEventListener("DOMContentLoaded",(()=>{document.querySelectorAll(".js-form").forEach((t=>{t.addEventListener("submit",e)}))}))},196:()=>{const e=document.querySelector(".js-header"),t=document.querySelector(".js-watch-header");new IntersectionObserver((function(t){t[0].isIntersecting?e.classList.remove("header_fixed"):e.classList.add("header_fixed")})).observe(t)},303:()=>{const e={},t=document.querySelector(".js-overlay");function n(n){n.preventDefault();const s=n.currentTarget.dataset.modalOpen;r(s)&&(e[s].classList.remove("hidden"),t.classList.remove("hidden"))}function s(n){const s=n.currentTarget.dataset.modalClose;r(s)&&(e[s].classList.add("hidden"),t.classList.add("hidden"))}function o(){for(const t in e)e[t].classList.contains("hidden")||e[t].classList.add("hidden");t.classList.contains("hidden")||t.classList.add("hidden")}function r(t){return!!Object.hasOwn(e,t)||(console.error(`Модалки с именем ${t} не существует`),!1)}document.addEventListener("DOMContentLoaded",(()=>{const r=document.querySelectorAll("[data-modal]"),a=document.querySelectorAll("[data-modal-open]"),i=document.querySelectorAll("[data-modal-close]");r.forEach((t=>{const n=t.dataset.modal;e[n]=t})),a.forEach((e=>{e.addEventListener("click",n)})),i.forEach((e=>{e.addEventListener("click",s)})),t.addEventListener("click",o),document.addEventListener("keydown",(({key:e})=>{"Escape"===e&&o()}))}))},893:()=>{document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelectorAll(".js-sales-date"),t=function(){const e=new Date;return e.setMonth(e.getMonth()+1,1),e.setDate(e.getDate()-1),e}();e.forEach((e=>{e.textContent=t.toLocaleDateString()}))}))},691:(e,t,n)=>{"use strict";n(196),n(943),n(797),n(893),n(303);var s=n(56);const o=document.querySelectorAll(".image-compare"),r={controlColor:"#ffffff",controlShadow:!1,addCircle:!0,addCircleBlur:!1,smoothing:!1};o.forEach((e=>{new s.Z(e,r).mount()}));var a=n(374);const i={loop:!0,allowTouchMove:!1,grabCursor:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}},l={loop:!0,spaceBetween:10,slidesPerView:4,grabCursor:!0,freeMode:!0,watchSlidesProgress:!0};[{swiperClass:".js-example-1",thumbsClass:".js-example-thumbs-1"},{swiperClass:".js-example-2",thumbsClass:".js-example-thumbs-2"},{swiperClass:".js-example-3",thumbsClass:".js-example-thumbs-3"},{swiperClass:".js-example-4",thumbsClass:".js-example-thumbs-4"}].forEach((({swiperClass:e,thumbsClass:t},n,s)=>{s[n].thumbsSwiper=new a.Z(t,l),s[n].swiper=new a.Z(e,{...i,thumbs:{swiper:s[n].thumbsSwiper}})})),new a.Z(".js-video-reviews",{grabCursor:!0,slidesPerView:1,spaceBetween:16,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{576:{grabCursor:!0,slidesPerView:2,grid:{fill:"row",rows:2},spaceBetween:16,navigation:{enabled:!1}},992:{grabCursor:!0,slidesPerView:2,grid:{fill:"row",rows:2},spaceBetween:20,navigation:{enabled:!1}}}}),new a.Z(".js-certificates",{grabCursor:!0,slidesPerView:1,spaceBetween:16,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{576:{grabCursor:!0,slidesPerView:2,spaceBetween:16,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0}},992:{grabCursor:!0,slidesPerView:4,spaceBetween:20,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0}}}}),new(n(435).Z)({gallery:".js-certificates",children:"a",pswpModule:()=>n.e(216).then(n.bind(n,963))}).init();var d=n(537),c=n(151),p=n(469),u=n(397),m=n(175),h=n(899),w=n(869),b=n(390),v=n(730),f=n(995),g=n(698),y=n(323),C=n(357),E=n(320),O=n(317),L=n(36),j=n(363);const x=[c.VH,p.iD,u.Zz,m.eS,h.op,w.pZ,b.AB,f.FU,g.j1,y.op,C.yO,E.IL,O.gM,L.vt,v.Uv,j.LM];d.vI.add(x),d.vz.watch();var S=n(547);const k={mask:"+{7} (000) 000-00-00"};document.addEventListener("DOMContentLoaded",(()=>{document.querySelectorAll(".js-phone-mask").forEach((e=>{e.setAttribute("minlength",18),e.setAttribute("maxlength",18),(0,S.ZP)(e,k)}))}))}},n={};function s(e){var o=n[e];if(void 0!==o)return o.exports;var r=n[e]={exports:{}};return t[e](r,r.exports,s),r.exports}s.m=t,e=[],s.O=(t,n,o,r)=>{if(!n){var a=1/0;for(c=0;c<e.length;c++){for(var[n,o,r]=e[c],i=!0,l=0;l<n.length;l++)(!1&r||a>=r)&&Object.keys(s.O).every((e=>s.O[e](n[l])))?n.splice(l--,1):(i=!1,r<a&&(a=r));if(i){e.splice(c--,1);var d=o();void 0!==d&&(t=d)}}return t}r=r||0;for(var c=e.length;c>0&&e[c-1][2]>r;c--)e[c]=e[c-1];e[c]=[n,o,r]},s.d=(e,t)=>{for(var n in t)s.o(t,n)&&!s.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},s.e=()=>Promise.resolve(),s.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),s.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{var e={179:0};s.O.j=t=>0===e[t];var t=(t,n)=>{var o,r,[a,i,l]=n,d=0;if(a.some((t=>0!==e[t]))){for(o in i)s.o(i,o)&&(s.m[o]=i[o]);if(l)var c=l(s)}for(t&&t(n);d<a.length;d++)r=a[d],s.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return s.O(c)},n=self.webpackChunk=self.webpackChunk||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var o=s.O(void 0,[216],(()=>s(691)));o=s.O(o)})();
//# sourceMappingURL=main.js.map