<div class="acordeon">
            <div class="bloque active">
                <h2 class="h2">Producciones Originales de Vive</h2>
                <div class="contenido">
                    <div class="cont-none" id="cont">
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25);  height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25); height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="bloque">
                <h2 class="h2">Infantiles</h2>
                <div class="contenido">
                    <div class="cont-none" id="cont">
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25);  height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25); height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="bloque">
                <h2 class="h2">Para ver en Familia</h2>
                <div class="contenido">
                    <div class="cont-none" id="cont">
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25); width:  height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                           
                        </a>
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25); width:  height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                    </div>
                </div>
            </div>

            <div class="bloque">
                <h2 class="h2">123TV</h2>
                <div class="contenido">
                    <div class="cont-none" id="cont">
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25);   height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                        <a class="" href="" style="width: 300px; height: 276px; cursor: pointer; margin-inline: 15px;  border-radius: 5px;">
                            
                                <div style="background-color: rgb(25, 25, 25);  height: 210px; border-radius: 5px;" >
                                    <div>
                                        <div style="border-radius: 5px; background-size: 100% 100%; height: 210px; width: 300px; background-image: url('/image/CineCorto_375x210px.png');"></div>
                                    </div>
                                </div>
                            
                        </a>
                    </div>
                </div>
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
            const cont    = document.querySelectorAll('.cont-none')

            h2.forEach( ( cadaH2 , i )=>{    
                h2[i].addEventListener('click', ()=>{
                    bloque.forEach( ( cadaBloque , i )=>{
                        //bloque[i].classList.remove('activo')
                        cont[i].classList.remove('cont-none')
                    })
                    //bloque[i].classList.add('activo')
                    cont[i].classList.add('cont-block')
                    
                })
            })

            h2.forEach( ( cadaH2 , i )=>{    
                h2[i].addEventListener('click', ()=>{
                    cont.forEach( ( cadaBloque , i )=>{
                        cont[i].classList.remove('cont-none')
                    })
                    cont[i].classList.add('cont-block')  
                })
            })
       </script>