var forum = {

init: function(){
	this.cacheDom();
	this.bindEvents();
},
cacheDom: function() {
	this.firstForm = $('.first-form');
	this.secondForm  = $('.second-form');
	this.thirdForm = $('.third-form');
	this.fourthForm = $('.fourth-form');
	this.fifthForm = $('.fifth-form');
	this.abroadStudy = $('.abroad_hide');
},
bindEvents: function() {
	$('.sigla').hover(function () {
		$(this).css({"opacity":"1"});
	}, function () {
		$(this).css({"opacity":"0.6"});
	});
	$('.application-form').on('click','.first-next', this.firstNext.bind(this));  
	$('.application-form').on('click','.second-next', this.secondNext.bind(this));
	$('.application-form').on('click','.third-next', this.thirdNext.bind(this));	
	$('.application-form').on('click','.fourth-next', this.fourthNext.bind(this));
	$('.application-form').on('click','.second-back', this.secondBack.bind(this));
	$('.application-form').on('click','.third-back', this.thirdBack.bind(this));
	$('.application-form').on('click','.fourth-back', this.fourthBack.bind(this));
	$('.application-form').on('click','.fifth-back', this.fifthBack.bind(this));
	$('.application-form').on('click','#radio-yes', this.showAbroadField.bind(this));
	$('.application-form').on('click','#radio-no', this.hideAbroadField.bind(this));

},
firstNext: function(event) {

	event.preventDefault();
	this.firstForm.hide();
	this.secondForm.show();
},
secondNext: function(event) {

	event.preventDefault();
	this.secondForm.hide();
	this.thirdForm.show();
},
thirdNext: function(event) {

	event.preventDefault();
	this.thirdForm.hide();
	this.fourthForm.show();
},
fourthNext: function(event) {

	event.preventDefault();
	this.fourthForm.hide();
	this.fifthForm.show();
},
secondBack: function(event) {

	event.preventDefault();
	this.secondForm.hide();
	this.firstForm.show();
},
thirdBack: function(event) {

	event.preventDefault();
	this.thirdForm.hide();
	this.secondForm.show();
},
fourthBack: function(event) {

	event.preventDefault();
	this.fourthForm.hide();
	this.thirdForm.show();
},
fifthBack: function(event) {

	event.preventDefault();
	this.fifthForm.hide();
	this.fourthForm.show();
},
showAbroadField: function() {

  this.abroadStudy.addClass('visible');
},
hideAbroadField: function() {

	this.abroadStudy.removeClass('visible');

}


};

$(document).ready(function () {

	forum.init();

});



