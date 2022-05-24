<style>
    .faq{
        width:100;
        display: flex;
    }
    .btn-faq-mobile{
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: "Open Sans",sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 28px;
        color: #004a81;
    }
    @media (max-width: 767px)  {
        .faq{
            flex-direction: column;
        }
        p{
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
    }

</style>
<!-- <button class="toggle-btn">
    <span class="more show">
    Producciones Originales de Vive
      <svg width="24" height="24" viewBox="0 0 24 24">
        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/>
      </svg>
    </span>
    <span class="less hide">
    Producciones Originales de Vive
      <svg width="24" height="24" viewBox="0 0 24 24">
        <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/>
      </svg>
    </span>
</button> -->
<div class="faq faq-mobile">
    <div class="container">
        <div class="faq-mob-des">
            <p id="boton_hogarizatem" data-accordion="accordion_hogarizatem" class="btn-faq-mobile">
                <a href="#anclafaqm"><b>Hogarízate</b> <i class="fas fa-caret-right"></i></a>
            </p>
            <!-- Accordion Hogarizate -->
            <div id="accordion_hogarizatem">
                <h3>hi</h3>
            </div>
        </div
    </div>
</div>
<script>
    $(".btn-faq-mobile").click(function() {  			
			var acc = $(this).data("accordion");
			var elem = $(this).attr('id');
			
			if( $( "#"+elem+" a" ).hasClass( "active-preca" ) ){
				console.log('clase activa'+elem);
				$("#"+acc).hide( "fade" );
				$( "#accordion_hogarizatem, #accordion_programasm,#accordion_precalificacionm,#accordion_aprovacionm,#accordion_contratosm,#accordion_propiedadm,#accordion_compram,#accordion_sistemam" ).accordion({
					collapsible: true,
					active: false,
					heightStyle: "content"
				}).hide();
				$("a").removeClass("active-preca");
				$(".faq a").css({'color':'rgb(0, 74, 129)'})
			}else{
				console.log('clase inactiva'+elem);
				$( "#accordion_hogarizatem, #accordion_programasm,#accordion_precalificacionm,#accordion_aprovacionm,#accordion_contratosm,#accordion_propiedadm,#accordion_compram,#accordion_sistemam" ).accordion({
					collapsible: true,
					active: false,
					heightStyle: "content"
				}).hide();
				$("#"+acc).show( "fade" );
				$("a").removeClass("active-preca");
				addActiveClass($(this).attr('id'));
				
			}
			

		});
</script>
