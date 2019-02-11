/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("#botonNuevoFormulario").click(function(){
    var nombreFormulario = $("#inputNomFormulari");
    var newDiv = document.createElement("div");
    newDiv.setAttribute('class','divs');
    var currentDiv = document.getElementById("divFormularis");
    document.body.insertBefore(newDiv, currentDiv);
    
    var newForm = document.createElement("form");
    document.body.insertBefore(newForm, newDiv);
});