import{S as C,i as G,s as J,e as f,k as q,t as P,c as d,a as h,d as _,m as A,h as V,K as D,b as m,g as K,J as l,j as N,n as k}from"../../chunks/index-d241cd96.js";function M(c){let e,t,s,r,u,a,g,v,y,o,S,p;return{c(){e=f("div"),t=f("span"),s=f("img"),u=q(),a=f("div"),g=f("p"),v=P(c[1]),y=q(),o=f("span"),S=P("- "),p=P(c[0]),this.h()},l(n){e=d(n,"DIV",{class:!0});var i=h(e);t=d(i,"SPAN",{class:!0});var b=h(t);s=d(b,"IMG",{src:!0,class:!0,alt:!0}),b.forEach(_),u=A(i),a=d(i,"DIV",{class:!0});var E=h(a);g=d(E,"P",{});var j=h(g);v=V(j,c[1]),j.forEach(_),y=A(E),o=d(E,"SPAN",{class:!0});var I=h(o);S=V(I,"- "),p=V(I,c[0]),I.forEach(_),E.forEach(_),i.forEach(_),this.h()},h(){D(s.src,r="images/"+c[2])||m(s,"src",r),m(s,"class","img-responsive"),m(s,"alt","client-image"),m(t,"class","client-img"),m(o,"class","client-name"),m(a,"class","client-desc"),m(e,"class","col-lg-6 col-md-6 col-sm-12 col-xs-12 client-testimonial")},m(n,i){K(n,e,i),l(e,t),l(t,s),l(e,u),l(e,a),l(a,g),l(g,v),l(a,y),l(a,o),l(o,S),l(o,p)},p(n,[i]){i&4&&!D(s.src,r="images/"+n[2])&&m(s,"src",r),i&2&&N(v,n[1]),i&1&&N(p,n[0])},i:k,o:k,d(n){n&&_(e)}}}function T(c,e,t){let{name:s}=e,{testimony:r="Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."}=e,{filename:u="client-img1.jpg"}=e;return c.$$set=a=>{"name"in a&&t(0,s=a.name),"testimony"in a&&t(1,r=a.testimony),"filename"in a&&t(2,u=a.filename)},[s,r,u]}class z extends C{constructor(e){super(),G(this,e,T,M,J,{name:0,testimony:1,filename:2})}}export{z as default};
