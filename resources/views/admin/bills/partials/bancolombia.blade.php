<div class="form-body" id="bancolombia" style="display: none;">
    <div class="row">
        <div class="col-12">
           <div class="form-group">
               <label class="h5" for="fee">% de feed <span style="color: red;">*</span></label>
               <input type="text" class="form-control @error('fee') is-invalid @enderror"
                      name="fee" id="fee" placeholder="Ingrese el feed de la transacción" >
                @error('fee')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                @enderror
           </div>
           <div class="form-group">
               <label class="h5" for="payment_id">Referencia <span style="color: red;">*</span></label>
               <input type="text" class="form-control @error('payment_id') is-invalid @enderror"
                name="payment_id" id="payment_id" placeholder="Ingrese la referencia de la transacción" >
              @error('payment_id')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
              @enderror
           </div>
           <div class="form-group">
               <label class="h5" for="support">Imagen del Comprobante <span style="color: red;">*</span></label>
                       
               <div class="custom-file">
                   <label class="custom-file-label" for="photo"><b>Clic para seleccionar una imagen</b></label>
                   <input type="file" id="support"
                          class="custom-file-input @error('support') is-invalid @enderror"
                          name="support"
                          accept="image/*"
                          onchange="previewFile(this, 'photo_preview')">
                   @error('support')                        
                      <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                     </span>
                   @enderror
              </div>
          </div> 
        </div>                                 
        </div>
    </div>
</div>