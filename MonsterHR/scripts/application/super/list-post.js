var contentContainer        = document.getElementById("content");
var categoryDropdown        = document.getElementById("category-dropdown");

var postCollectionReference = [];
var objectCollection        = { postCollection : [] };

var render = function() {
    
    Ajax.getJSON("posts", function(data) {

        var postCollection          = [];
        postCollectionReference = data;
        for(var $index = 0; $index < data.length; $index++) {

            var postElement = data[$index];

            var template = `<div class='post'>
                            <div class='col-8'>
                            <header class='post-title'>${postElement.title}</header>
                            <div class='details'>${postElement.details}</div>
                            <div class='post-timestamp'>днес</div>
                            </div>
                            
                            <div class="d-flex col-2">
                                <button class="btn btn-primary" onclick="editPost(${$index})">Edit</button>
                            </div>
                            <div class="d-flex col-2">  
                                <button class="btn btn-dark" onclick="deletePost(${$index})">Delete</button>
                            </div>
                            </div>`;           
            postCollection.push(template);
        }

        var postTemplate = postCollection.join('');
        contentContainer.innerHTML = postTemplate;

    }, function() {
        console.log("GET error")
        console.log(error);
    });    
};

var renderPost = function(data) {
    
    var postCollection      = [];
    for(var i = 0; i < data.length; i++) {
        
        var postElement = data[i];
        
        var template = `<div class='post'>
                        <div class='col-8'>
                        <header class='post-title'>${postElement.title}</header>
                        <div class='details'>${postElement.details}</div>
                        <div class='post-timestamp'>днес</div>
                        </div>
                        <a class='d-flex' href='#'> + </a>
                        <div class="d-flex col-2">
                            <button class="btn btn-primary" onclick="editPost(${i})">Edit</button>
                        </div>
                        <div class="d-flex col-2">  
                            <button class="btn btn-dark" onclick="deletePost(${i})">Delete</button>
                        </div>
                        </div>`;
        postCollection.push(template);
    }
    
    var postTemplate = postCollection.join('');
    contentContainer.innerHTML = postTemplate;
};

var renderRelatedCategoryPosts = function(categoryId) {
    
    Ajax.getJSON(`posts/category/${categoryId}`, function(data) {
        renderPost(data);
    });
};

Ajax.getJSON("categories", function(collection){
   
    var templateCollection = [];
    for(var i = 0; i < collection.length; i++) {
        templateCollection.push(`<a class='dropdown-item' href='#' onclick='renderRelatedCategoryPosts(${collection[i].id})'>${collection[i].title}</a>`);
    }
    
    categoryDropdown.innerHTML = templateCollection.join('');
    
});

var editPost = function(index) {
//    postTitleInput.value                = postCollectionReference[index].title;
//    postId                              = postCollectionReference[index].id;
//    postEditorFormSubmit.value          = "Submit";
//    postEditorFormCancel.style.display  = "inline";
};

var deletePost = function(index) {
    
    var URLEncodedRequest = {
        post_id    : postCollectionReference[index].id
    };
    
    Ajax.post('posts/delete', URLEncodedRequest, function() {
        render();
    });
};

render();




