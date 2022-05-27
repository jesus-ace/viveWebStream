<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@300&display=swap');
   
    /*@media (max-width: 767px)  {*/
        .original-content{
            display: none;
        }

        .acordeon{
            display: block;
            width: 90%;
            padding: 2rem;
        }

        .acordeon .bloque{
            font-family: 'IBM Plex Sans Thai Looped';
            background-color: #34495e;
            color:#fff;
            margin: 0 0 1rem;
            padding: 5px;
            width: 325px;
            border-radius: 20px;
        }
        .acordeon .h2{
            margin: 0 0 1rem;
            padding: 1rem;
            font-size: 100%;
        }

        .acordeon .contenido{
            /*background-color: dimgrey;*/
            padding: 0rem;
            transition: all .5s ease;
            overflow-x: scroll;
        }
        .acordeon .bloque.activo .contenido{
            height: 4rem;
        }
   /* }*/
</style>
<div class="mb-5 original-content" style="overflow: hidden; height: 326px; padding: 30px;">
            <div style="height: 34px; left: 55px;" class="mb-5">
                <div>
                    <span style="display: inline-block; position: absolute; font-size: 22px; font-style: normal; text-decoration: none; text-transform: none; line-height: 34px; letter-spacing: 0px; color: rgb(240, 240, 240); white-space: pre; transform: translate(0px); "><span style="font-size: 22px; font-style: normal; text-decoration: none; text-transform: none; line-height: 34px; letter-spacing: 0px; color: rgb(240, 240, 240);"><span class="font-text-bold" style="display: inline;">Producciones Originales de Vive</span></span></span>
                </div>
            </div>
            <div style="height: 276px; top: 50px;">
                <div style="height: 276px; overflow: hidden;">
                   <div class="horizontal-scroll">
                        <button class="btn-scrollL" id="btn-scroll-left" onclick="scrollH(1)"><img src="/image/outline_keyboard_arrow_left_white_24dp.png" alt=""></button>
                        <button class="btn-scroll" id="btn-scroll-right" onclick="scrollH(-1)"><img src="/image/outline_navigate_next_white_24dp.png" alt=""></button>
                        <div class="programacion-container">
                            <a class="promo-card" href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;  border-radius: 5px;">
                                <div style="width: 375px; height: 210px;">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;" >
                                        <div>
                                            <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/CineCorto_375x210px.png');"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>

                            <a class="promo-card"  href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;  border-radius: 5px;">
                                <div style="width: 375px; height: 210px;" class="promo-card">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;">
                                        <div>
                                            <div style="background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/LaGenialHistoria_375x210px.png'); border-radius: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>

                            <a class="promo-card" href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;">
                                <div style="width: 375px; height: 210px;">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;">
                                        <div>
                                            <div style="background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/LeerEsSonar_375x210px.png'); border-radius: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <a class="promo-card" href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;">
                                <div style="width: 375px; height: 210px;">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;">
                                        <div>
                                            <div style="background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/ViveLaMusica_375x210px.png'); border-radius: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <a class="promo-card" href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;">
                                <div style="width: 375px; height: 210px;">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;">
                                        <div>
                                            <div style="background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/SHSC_375x210px.png'); border-radius: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <a class="promo-card" href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;">
                                <div style="width: 375px; height: 210px;">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;">
                                        <div>
                                            <div style="background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/barbara.jpg'); border-radius: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <a class="promo-card" href="" style="width: 375px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;">
                                <div style="width: 375px; height: 210px;">
                                    <div style="background-color: rgb(25, 25, 25); width: 375px; height: 210px; border-radius: 5px;">
                                        <div>
                                            <div style="background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/barbara.jpg'); border-radius: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:375px; height:58px;">
                                    <div style="width: 375px;">
                                        <span class="font-text-bold" style="display: inline-block; position: absolute; font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255); white-space: pre; max-width: 375px; transform: translate(0px);"><span style="font-size: 14px; font-style: normal; text-decoration: none; text-transform: none; line-height: 20px; letter-spacing: 0px; color: rgb(255, 255, 255);"><span style="display: inline; max-width: 375px;">Promoción 1</span></span></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                   </div>
                </div>
            </div>
       </div>
       <div class="acordeon">
            <div class="bloque">
                <h2 class="h2">Producciones Originales de Vive</h2>
                <div class="contenido">
                    <a class="promo-card" href="" style="width: 320px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;  border-radius: 5px;">
                        <div style="width: 320px; height: 210px;">
                            <div style="background-color: rgb(25, 25, 25); width: 330px; height: 210px; border-radius: 5px;" >
                                <div>
                                    <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/CineCorto_375x210px.png');"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="promo-card" href="" style="width: 320px; height: 276px; cursor: pointer; left: 55px; margin-inline: 15px;  border-radius: 5px;">
                        <div style="width: 320px; height: 210px;">
                            <div style="background-color: rgb(25, 25, 25); width: 330px; height: 210px; border-radius: 5px;" >
                                <div>
                                    <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 375px; background-image: url('./images/CineCorto_375x210px.png');"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="bloque">
                <h2 class="h2">por que</h2>
                <div class="contenido">que</div>
            </div>
        </div>
       <script>
           let currentScrollPosition = 0;
            let scrollAmount = 320;
            
            const sCont = document.querySelector(".programacion-container");
            const hScroll = document.querySelector(".horizontal-scroll");


            const btnScrollLeft = document.querySelector("#btn-scroll-left");
            const btnScrollRight = document.querySelector("#btn-scroll-right");

            btnScrollLeft.style.opacity = "0";

            let maxScroll = -sCont.offsetWidth + hScroll.offsetWidth;


            const sCont2 = document.querySelector(".programacion-container2");
            const hScroll2 = document.querySelector(".horizontal-scroll2");

            let maxScroll2 = -sCont2.offsetWidth + hScroll2.offsetWidth;

            function scrollH(val) {
                currentScrollPosition += (val * scrollAmount);
                if (currentScrollPosition > 0) {
                    currentScrollPosition = 0;
                    btnScrollLeft.style.opacity = "0";
                }else{
                    btnScrollLeft.style.opacity = "1";
                }


                if (currentScrollPosition < maxScroll) {
                    currentScrollPosition =  maxScroll;
                    btnScrollRight.style.opacity = "0";
                }else{
                    btnScrollRight.style.opacity = "1";
                }
                

                sCont.style.left = currentScrollPosition +"px";
            }
       </script>
       <script>
           'use strict'
            const bloque    = document.querySelectorAll('.bloque')
            const h2        = document.querySelectorAll('.h2')
            h2.forEach( ( cadaH2 , i )=>{    
                h2[i].addEventListener('click', ()=>{
                    bloque.forEach( ( cadaBloque , i )=>{
                        bloque[i].classList.remove('activo')
                    })
                    bloque[i].classList.add('activo')
                })
            })
       </script>