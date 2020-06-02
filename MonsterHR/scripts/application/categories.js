var categoryEditorForm       = document.getElementById("category-editor");
var categoryEditorFormSubmit = document.getElementById("category-editor-submit");
var categoryEditorFormCancel = document.getElementById("category-editor-cancel");

var categoryTitleInput       = document.getElementById("category_title");
var messageBanner            = document.getElementById("message-banner");
var categoryContainer        = document.getElementById("category-container");

messageBanner.style.display             = "none";
categoryEditorFormCancel.style.display  = "none";

var categoryId                  = null;
var categoryCollectionReference = [];

var renderCategory = function() {
    
    Ajax.getJSON('categories', function(collection) {

        categoryCollectionReference = collection;
        renderCategoryContainer(categoryCollectionReference);
    });   
};

var renderCategoryContainer = function(collection) {
    
    var templateCollection = [];
    for(var $index = 0; $index < collection.length; $index++) {
        
        var element     = collection[$index];
        var template    = `<div class="post">
                            
                            <div class="col-11">
                                <div class="row">
                                  <div class="d-flex col-8">
                                    <span>${element.title}</span>
                                  </div>
                                  <div class="d-flex col-2">
                                    <button class="btn btn-primary" onclick="editCategory(${$index})">Edit</button>
                                  </div>
                                  <div class="d-flex col-2">  
                                    <button class="btn btn-dark" onclick="deleteCategory(${$index})">Delete</button>
                                  </div>
                                </div>
                            </div>
        
                          </div>`;
        templateCollection.push(template);
        
    }
    
    categoryContainer.innerHTML = templateCollection.join('');
};

var editCategory = function(index) {
    categoryTitleInput.value                = categoryCollectionReference[index].title;
    categoryId                              = categoryCollectionReference[index].id;
    categoryEditorFormSubmit.value          = "Submit";
    categoryEditorFormCancel.style.display  = "inline";
};

var deleteCategory = function(index) {
    
    var URLEncodedRequest = {
        category_id    : categoryCollectionReference[index].id
    };
    
    Ajax.post('categories/delete', URLEncodedRequest, function() {
        renderCategory();   
    }, function() {
        console.log("Error");
    });
};

renderCategory();

categoryEditorFormCancel.addEventListener('click', function() {
    
    categoryEditorFormSubmit.value          = "Add New";
    categoryEditorFormCancel.style.display  = "none";
    categoryId                              = null;
});

categoryEditorForm.addEventListener('submit', function(e) {
    
    e.preventDefault();
    
    var categoryTitleInputValue = categoryTitleInput.value;
    
    if(categoryTitleInputValue.length < 3) {
        alert("You must enter at least 3 characters");
        return;
    }
    
    var URLEncodedRequest = {
        category_id    : categoryId, 
        category_title : categoryTitleInputValue
    };
    
    if(categoryId) {
        
        Ajax.post('categories/update', URLEncodedRequest, function(collection) {
        
            messageBanner.style.display = "block";
            categoryTitleInput.value    = "";

            categoryCollectionReference.push(collection[0]);
            renderCategoryContainer(categoryCollectionReference);

            setTimeout(function() {
                messageBanner.style.display = "none";
            }, 3000);
        }, function() {
            console.log("Error");
        });
    }
    
    else {
    
        Ajax.postJSON('categories/create', URLEncodedRequest, function(collection) {

            messageBanner.style.display = "block";
            categoryTitleInput.value    = "";

            categoryCollectionReference.push(collection[0]);
            renderCategoryContainer(categoryCollectionReference);

            setTimeout(function() {
                messageBanner.style.display = "none";
            }, 3000);
        }, function() {
            console.log("Error");
        });
    }
});


