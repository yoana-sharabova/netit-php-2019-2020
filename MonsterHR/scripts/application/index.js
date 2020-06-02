    var contentContainer    = document.getElementById("content");
    var categoryPanel       = document.getElementById("category-panel");
    var categoryDropdown    = document.getElementById("category-dropdown");

    // search action dom element
    var searchForm      = document.getElementById("search-form");
    var searchInput     = document.getElementById("search-post");
    var searchAction    = document.getElementById("search-post-action");
    var clearAction     = document.getElementById("search-post-clear");
    var searchCombobox  = document.getElementById("search-post-combobox");
    var contentFullView = document.getElementById("content-full-view");
    var contentFullViewPost = document.getElementById("content-full-view-post");
    
    var fullviewCommentTextarea = document.getElementById("full-view-comment-textarea");
    var fullviewCommentAction = document.getElementById("full-view-comment-action");
    var contentFullviewCommentPlaceholder = document.getElementById("content-full-view-comment-placeholder");
    
    var activePostId = null;

    var objectCollection    = { postCollection : [] };

    var renderFullView = function(postId) {

        activePostId = postId;
        
        Ajax.getJSON(`posts/index/${postId}`, function(collection) {

            var templateFullViewCollection = [];
            for(var i = 0; i < collection.length; i++) {
                templateFullViewCollection.push(`<div class='post' id='full-view-post-container'>
                                                 <div class='col-11'>
                                                 <header class='post-title'>${collection[i].title}</header>
                                                 <div class='details'>${collection[i].details}</div>
                                                 <div class='details'>${collection[i].description}</div>
                                                 </div>
                                                 </div>`);
            }

            contentFullViewPost.innerHTML  = templateFullViewCollection.join('');
            contentFullView.style.display  = 'block';
            contentContainer.style.display = 'none';
            searchForm.style.display       = 'none';
            
                       
            Ajax.getJSON('comment/index', function(collection) {
                console.log(collection);
                var templateCollection = [];
                for(var i = 0; i < collection.length; i++) {
                    templateCollection.push(`<div class="container mb-3">
                                                <span class="font-weight-normal">${collection[i].author}</span>
                                                <div class="font-weight-light">${collection[i].content}</div>
                                            </div>`);
                }
                contentFullviewCommentPlaceholder.innerHTML = templateCollection.join('');
            });
        });
    };

    var renderPost = function(data) {

        var postCollection      = [];
        for(var i = 0; i < data.length; i++) {

            var postElement = data[i];

            var template = `<div class='post'>
                            <div class='col-11'>
                            <header class='post-title'>${postElement.title}</header>
                            <div class='details'>${postElement.details}</div>
                            <div class='post-timestamp'>днес</div>
                            </div>
                            <button class='btn btn-primary post-read-button' href='#'> View </button>
                            </div>`;            
            postCollection.push(template);
        }

        var postTemplate = postCollection.join('');
        contentContainer.innerHTML = postTemplate;
        
        var postReadButtonCollection = document.getElementsByClassName('post-read-button');
        for(let i = 0; i < postReadButtonCollection.length; i++) {
            postReadButtonCollection[i].addEventListener('click', function() {
                renderFullView(data[i].id);
            });
        }
    };

    var renderRelatedCategoryPosts = function(categoryId) {

        Ajax.getJSON(`posts/category/${categoryId}`, function(data) {
            renderPost(data);
        });
    };

    searchAction.addEventListener('click', function(e) {

        var searchInputQuery    = searchInput.value;
        var searchBy            = searchCombobox.value;
        Ajax.getJSON(`posts/search/?q=${searchInputQuery}&searchBy=${searchBy}`, function(data) {
            renderPost(data);
        });
    });

    clearAction.addEventListener('click', function() {

        Ajax.getJSON("posts", function(data) {
            renderPost(data);
        }, function() {
            console.log("GET error")
            console.log(error);
        });
    });


    Ajax.getJSON("categories", function(collection){

        var templateCollection = [];
        for(var i = 0; i < collection.length; i++) {
            templateCollection.push(`<a class='dropdown-item' href='#' onclick='renderRelatedCategoryPosts(${collection[i].id})'>${collection[i].title}</a>`);
        }

        categoryDropdown.innerHTML = templateCollection.join('');

    });
    
    fullviewCommentAction.addEventListener('click', function() {
       
       var request = {
         content : fullviewCommentTextarea.value,
         postId  : activePostId,
         author  : 'author'
       };
       
        Ajax.postJSON('comment/create', request, function(collection) {
            console.log(collection);
        });
        
    });

    Ajax.getJSON("posts", function(data) {
        renderPost(data);
    }, function() {
        console.log("GET error")
        console.log(error);
    });

