/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("#botonNuevoFormulario").click(function(){
  
    //alert($("#inputNomFormulari").val());
    var nombreFormulario = $("#inputNomFormulari").val();
    var textoNomForm = document.createTextNode(nombreFormulario); 
    var newDiv = document.createElement("div");
    newDiv.setAttribute('class','divs');
    
    var currentDiv = document.getElementById("divFormularis");
    //document.body.insertBefore(newDiv, currentDiv);
    currentDiv.appendChild(newDiv);
    
    /*var contendo = document.createTextNode("sddsfdsfdsfdsfdsffdsfdsdsfdsf");
    newDiv.appendChild(contendo);*/
    
    var newForm = document.createElement("form");
    //document.body.insertBefore(newForm, newDiv);
    
    newForm.method = 'POST';
    var newLabel = document.createElement("label");
    //document.body.insertBefore(newLabel, newForm);
    newLabel.appendChild(textoNomForm);
    newForm.appendChild(newLabel);
    
    newDiv.appendChild(newForm);
});