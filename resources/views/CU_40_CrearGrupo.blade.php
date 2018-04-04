<div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Crear Grup</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="position:fixed; top:50%; left:50%; width:30em; min-height:19em; margin-top:-9em; margin-left:-15em; border: 1px solid #ccc; background-color: #f3f3f3;">
        <form method="post" action="/action_page_post.php">
            <div>
                <div class="form-group">
                    <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center;">Crear grup</th> 
                        </tr>
                        </thead>
                    </table>
                </div>
                <h4>Nom</h4>
                <label for="nombre_grupo" class="ui-hidden-accessible"></label>
                <input type="text" name="nombre_grupo" id="nombre_grupo" placeholder="Nom del grup">
                <h4>Usuaris</h4>
                <label for="usuarios_grupo" class="ui-hidden-accessible"></label>
                <input type="text" name="usuarios_grupo" id="usuarios_grupo" placeholder="Usuaris del grup">
                <div data-role="main" class="ui-content">
                    <a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Seleccionar usuaris</a>

                    <div data-role="popup" id="myPopup2" class="ui-content" style="position:fixed; top:50%; left:50%; width:10em; min-height:10em; margin-top:-9em; margin-left:-15em; border: 1px solid #ccc; background-color: #f3f3f3;">
                        <form method="post" action="/action_page2_post.php">
                            <div>
                                <div class="form-group">
                                    <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">Selecciona els usuaris</th> 
                                        </tr>
                                        </thead>
                                    </table>

                                </div>
                                @include('CU_39_ModificarMembres')  
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <div style="width: 50%; display: flex; justify-content: center; float: left;">
                        <input type="submit" data-inline="true" value="Acceptar">
                    </div>
                    <div style="width: 50%; display: flex; justify-content: center; float: right;">
                        <input type="submit" data-inline="true" value="Cancelar">
                    </div>
                </div>    
            </div>
        </form>
    </div>
</div>
