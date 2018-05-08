<button id="deleteBtn" type="button" onclick="idGrup({{$grup->idGrup}});" data-toggle="modal" data-target="#myModal_3" style="padding: 0; border: none; background: none; margin-left: 20px; margin-right: 20px;">
    <i class="glyphicon glyphicon-trash"></i>
</button>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal_3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center; background: #455A64; color: white; border-radius: 5px 5px 0px 0px;">
                <h4 class="modal-title" style="text-align: center; display:inline; cursor:default;">Eliminar grup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:inline;">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body-eliminarGrup">
                <h4>Segur que desitja eliminar el grup?</h4>
                <input type="text" name="cu37_nomGrup" id="cu37_nomGrup" class="form-control" placeholder="Nom Grup" value="{{$grup->nom}}" required />
                <!--<label for="password">Contrasenya:</label>
                <input type="password" name="password" id="password" size="35" placeholder="Contrasenya del administrador del grup">-->

            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" onclick="eliminarGrup();" class="btn btn-danger" id="modalEliminar" style="margin-right: 25%;">
                    Eliminar
                </button>


                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>