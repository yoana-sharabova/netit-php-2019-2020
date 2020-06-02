var registrationFormSuper    = document.getElementById("registration-form-super");
var registrationFormHr       = document.getElementById("registration-form-hr");
var registrationFormEmployer = document.getElementById("registration-form-employer");
var registrationFormEmployee = document.getElementById("registration-form-employee");

registrationFormSuper.style.display     = "none";
registrationFormHr.style.display        = "none";
registrationFormEmployer.style.display  = "none";
registrationFormEmployee.style.display  = "none";

var showSuperForm = function() {
    registrationFormSuper.style.display     = "block";
    registrationFormHr.style.display        = "none";
    registrationFormEmployer.style.display  = "none";
    registrationFormEmployee.style.display  = "none";
};

var showHrForm = function() {
    registrationFormSuper.style.display     = "none";
    registrationFormHr.style.display        = "block";
    registrationFormEmployer.style.display  = "none";
    registrationFormEmployee.style.display  = "none";
};

var showEmployerForm = function() {
    registrationFormSuper.style.display     = "none";
    registrationFormHr.style.display        = "none";
    registrationFormEmployer.style.display  = "block";
    registrationFormEmployee.style.display  = "none";
};

var showEmployeeForm = function() {
    registrationFormSuper.style.display     = "none";
    registrationFormHr.style.display        = "none";
    registrationFormEmployer.style.display  = "none";
    registrationFormEmployee.style.display  = "block";
};
