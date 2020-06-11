
function validar() {
	var txt = document.getElementByName("txtNome");
	var nome = txt.value;
	if(nome.length < 3){
		alert("Preencha este campo. ");
		return false;
	}else{
		return true;
	}
}
	
