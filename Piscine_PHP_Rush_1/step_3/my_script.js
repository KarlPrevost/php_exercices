document.querySelector("#myForm").onsubmit = function() {
		document.querySelectorAll("input").forEach(input => {
			if(input.type === "radio") {
				let fieldset = input.parentNode.parentNode;
				if(fieldset.querySelector(":checked") === null) {
					input.classList.add("redBackground")
				} else {
					fieldset.querySelectorAll(".redBackground").forEach(element => {
						element.classList.remove("redBackground")
					})
				}
			} else {
				if(input.value.trim().length === 0) {
					input.classList.add("redBackground")
				} else {
					input.classList.remove("redBackground")
				}
			}			
		});
		document.querySelectorAll(".redBackground + span").forEach(item => {
			if(item.previousElementSibling.type === "radio") {
				item.textContent = "Veuillez selectionner l'un des champs"
			} else {
				item.textContent = "Veuillez remplir ce champ"
			}
		});
		document.querySelectorAll("input:not(.redBackground) + span").forEach(item => {
			item.textContent = ""
		});
		if(document.querySelector(".redBackground") !== null) {
			return false
		}
}