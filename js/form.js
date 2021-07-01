let submitButton = document.querySelector('.js-submit');
let commentField = document.querySelector('.js-message');



commentField.oninput = function () {
  	event.preventDefault();


  	if (commentField.value.length > 200 || commentField.value.length < 20) {
    	submitButton.disabled = true;
 	} else {
    	submitButton.disabled = false;
  } 
};
