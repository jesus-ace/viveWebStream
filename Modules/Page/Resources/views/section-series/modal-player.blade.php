@foreach ($series as $serie)
    @foreach ($serie->capitulo as $e_item)
        <div class="modal fade" id="modal{{$e_item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$e_item->name}}: {{$e_item->sub_name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i>
                        </span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframeYtb" width="1020" height="600" src="{{$e_item->video}}"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen onload="iframeModific()">
                            
                    </iframe>
                    </div>
                    <div class="modal-footer">
                        <p style="width:1020px; text-align:justify; margin:auto">
                            <strong>Sinopsis: </strong>{{$e_item->sinopsis}}
                        </p>
                    </div>
                </div>
            </div><script>
                function iframeModific() {
                    var selector = document.querySelector('#iframeYtb');
                    selector = selector.contentWindow.document || selector.contentDocument;  
                 
                    console.log(selector.body);
                    
                    
                }
            </script>
        </div>
    @endforeach
@endforeach
