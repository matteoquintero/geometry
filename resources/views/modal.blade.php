<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
		<form action="{{action('CacheController@create')}}" method="post" id="auth">
		{{ csrf_field() }}
	      <div class="modal-body">
	            <div class="row">
	              <div class="col">
	                <div class="form-group">
	                  <label>Escribe tu correo electónico para poder ingresar</label>
	                  <input type="text" class="form-control" name="email" id="email">
	                </div>
	              </div>
	            </div>
	      </div>
	      <div class="modal-footer">
	        <button id="auth-button" type="button" class="btn btn-danger btn-block" data-dismiss="modal">Ingresar</button>
	      </div>
	    </form>
    </div>
  </div>
</div>