if (typeof String.prototype.startsWith != 'function') {
	String.prototype.startsWith = function (str){
		return this.indexOf(str) == 0;
	};
}
// Validate Indian Mobile & Phone Numbers
jQuery.validator.addMethod('phone', function (value, element) {
	if(value.length == 0) {
		return true;
	}
	if(value.length < 5) {
		return false;
	} else {
		if(value.match(/^(\+\d{1,3}[- ]?)?\d{10}$/) && ! (value.match(/0{5,}/)) ) {
		    return true;
		} else {
		    return false;
		}
	}
	return this.optional(element) || /^\d{3}-\d{3}-\d{4}$/.test(value);
}, "Enter valid phone number");