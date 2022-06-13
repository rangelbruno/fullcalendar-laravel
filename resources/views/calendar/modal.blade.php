<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="formEvent" class="modal-body">
          <form action="">
            <div class="row">
                <div class="col">
                    <label for="title">Titulo</label>
                  <input type="text" class="form-control" id="title" name="title">
                  <input type="hidden" name="id">
                </div>
                <div class="col">
                    <label for="start">Data/hora</label>
                  <input type="text" class="form-control date-time" id="start" name="start">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="color">Cor do Evento</label>
                  <input type="color" class="form-control" id="color" name="color">
                </div>
                
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger deleteEvent">Exlcuir</button>
          <button type="button" class="btn btn-primary saveEvent">Salvar</button>
        </div>
      </div>
    </div>
  </div>