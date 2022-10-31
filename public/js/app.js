//funcion seleccionar serie

$(document).ready(function(params) {
    let serie_select = document.getElementById('select_titular');
    function cargarseries() {
      $.ajax({
          url: 'admin/select_serie',
          type: 'GET',
          success: function(response) {
            const serie = response;
            console.log(serie);
            let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'

            serie.forEach(serie_select => {
                template += `<option class="form-control" value="${serie_select.id}">${serie_select.name}</option>`;
            })
            serie_select.innerHTML = template;
          }
      })
    }
    cargarseries();
});