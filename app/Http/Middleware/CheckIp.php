<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $adress = ['172.16.1.189'];

        if (!in_array($request->ip(), $adress)) {
            return response('
                            <!DOCTYPE html>
                            <html>
                            <head>
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1">

                            <title>AMJID IMAD SECURITY </title>

                            <style id="" media="all">/* vietnamese */
                            @font-face {
                            font-family: "Cabin";
                            font-style: normal;
                            font-weight: 400;
                            font-stretch: 100%;
                            font-display: swap;
                            src: url(/fonts.gstatic.com/s/cabin/v27/u-4i0qWljRw-PfU81xCKCpdpbgZJl6XvptnsBXw.woff2) format("woff2");
                            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
                            }
                          
                            @font-face {
                            font-family: "Cabin";
                            font-style: normal;
                            font-weight: 400;
                            font-stretch: 100%;
                            font-display: swap;
                            src: url(/fonts.gstatic.com/s/cabin/v27/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvp9nsBXw.woff2) format("woff2");
                            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
                            }
                            
                            @font-face {
                            font-family: "Cabin";
                            font-style: normal;
                            font-weight: 400;
                            font-stretch: 100%;
                            font-display: swap;
                            src: url(/fonts.gstatic.com/s/cabin/v27/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvqdns.woff2) format("woff2");
                            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                            }
                            @font-face {
                            font-family: "Cabin";
                            font-style: normal;
                            font-weight: 700;
                            font-stretch: 100%;
                            font-display: swap;
                            src: url(/fonts.gstatic.com/s/cabin/v27/u-4i0qWljRw-PfU81xCKCpdpbgZJl6XvptnsBXw.woff2) format("woff2");
                            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
                            }
                            @font-face {
                            font-family: "Cabin";
                            font-style: normal;
                            font-weight: 700;
                            font-stretch: 100%;
                            font-display: swap;
                            src: url(/fonts.gstatic.com/s/cabin/v27/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvp9nsBXw.woff2) format("woff2");
                            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
                            }
                            /* latin */
                            @font-face {
                            font-family: "Cabin";
                            font-style: normal;
                            font-weight: 700;
                            font-stretch: 100%;
                            font-display: swap;
                            src: url(/fonts.gstatic.com/s/cabin/v27/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvqdns.woff2) format("woff2");
                            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                            }
                            </style>

                            <link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/404/colorlib-error-404-9/css/style.css" />


                            <!--[if lt IE 9]>
                                    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                    <![endif]-->
                            <meta name="robots" content="noindex, follow">
                            <script nonce="1b7200ed-23b1-452a-955a-ec1015c3f69d">try{(function(w,d){!function(j,k,l,m){if(j.zaraz)console.error("zaraz is loaded twice");else{j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz._v="5774";j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async eX=>new Promise((eY=>{if(eX){eX.e&&eX.e.forEach((eZ=>{try{const e$=d.querySelector("script[nonce]"),fa=e$?.nonce||e$?.getAttribute("nonce"),fb=d.createElement("script");fa&&(fb.nonce=fa);fb.innerHTML=eZ;fb.onload=()=>{d.head.removeChild(fb)};d.head.appendChild(fb)}catch(fc){console.error(`Error executing script: ${eZ}\n`,fc)}}));Promise.allSettled((eX.f||[]).map((fd=>fetch(fd[0],fd[1]))))}eY()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
                            <body>
                            <div id="notfound">
                            <div class="notfound">
                            <div class="notfound-404">
                            <div></div>
                            <h1>404</h1>
                            </div>
                            <h2>Page introuvable</h2>
                            <p>La page que vous recherchez a peut-être été supprimée, son nom a changé ou est temporairement indisponible.</p>
                            <a href="http://172.16.1.189:8000/">home page</a>
                            </div>
                            </div>

                            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                            <script>
                            window.dataLayer = window.dataLayer || [];
                            function gtag(){dataLayer.push(arguments);}
                            gtag("js", new Date());

                            gtag("config", "UA-23581568-13");
                            </script>
                            <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" 
                            integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" 
                            </script>
                            </body>
                            </html>
                            ', 403);
        }
       return $next($request);
    }
}
