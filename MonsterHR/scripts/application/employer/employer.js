var selectJobCategory       = document.getElementById("select-job-category");
// var categoryDropdown        = document.getElementById("category-dropdown");
var employerPostTitle       = document.getElementById("post_title");
var employerPostDetails     = document.getElementById("post_details");
var employerPostDescription = document.getElementById("post_description");
var employerPostJobCategory = document.getElementById("select-job-category");
var employerPostSubmit      = document.getElementById("employer-post-submit");

//Ajax.getJSON('categories', function(collection) {
//
//    var templateCollection = [];
//    for(var i = 0; i < collection.length; i++) {
//            templateCollection.push(`<option name = "post_job_category" value="${collection[i].id}">${collection[i].title}</option>`);
//    }
//
//    selectJobCategory.innerHTML = templateCollection.join('');
//
//            categoryCollectionReference = collection;
//            renderCategoryContainer(categoryCollectionReference);
//});

//Ajax.getJSON("categories", function(collection){
//
//    var templateCollection = [];
//    for(var i = 0; i < collection.length; i++) {
//        templateCollection.push(`<a class='dropdown-item' href='#'>${collection[i].title}</a>`);
//    }
//
//    categoryDropdown.innerHTML = templateCollection.join('');
//
//});
//        
employerPostSubmit.addEventListener ('click', function () {

    var request = {
        post_title          : employerPostTitle.value,
        post_details        : employerPostDetails.value,
        post_description    : employerPostDescription.value,
        post_job_category   : employerPostJobCategory.value
    };

    Ajax.post('posts/create', request, function(collection) {
        console.log(collection);
    });
});

