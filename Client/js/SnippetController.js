/* global $ SnippetsModel snippetsTable */

const getUrl = window.location;
const baseUrl = getUrl.protocol + '//' + getUrl.host + '/';
const SnippetsUrl = baseUrl + 'Server/php/snippets.php';
const registerUrl = baseUrl + 'Server/php/create_user.php';
const model = new SnippetsModel();

//
$(document).one('ready', function() {
    // initialize datatable
    window.snippetsTable = $('#snippets-table').DataTable({
        'columnDefs': [
            {
                'targets': [0],
                'visible': false,
                'searchable': false,
            }
        ],
    });
    
    // datable row click event listener
    $('#snippets-table tbody').on( 'click', 'tr', function () {
        model.setSelectedSnippet(snippetsTable.row(this));
        updateSnippet();
    });
    
    
    // listen for click on submit buttons in modals
    $('#register-submit').on('click', function(e){
       $('form#registerUserForm').submit(); 
    });
    $('#recover-submit').on('click', function(e){
        $('form#recoverPasswordForm').submit();
    })
    
    //listen for form submit events
    $('form#registerUserForm').submit(function(e) {
        registerUser(e);   
    });
    
    $('form#recoverPasswordForm').submit(function(e) {
        recoverPassword(e); 
    });
    
    // make initial ajax calls
    getSnippets();
}); 



// VIEW UI Handler

function updateSnippet() {
    var snippet = model.getSelectedSnippet();
    var row = model.getSnippetRow();
    $('#snippets-table tbody')
        .find('tr.selected')
        .removeClass('selected');
    $(row.node()).addClass('selected');
    var code = $('#snippet-frame')
        .find('code')
        .text(snippet.code);
}

function updateView() {
    let snippets = model.getSnippets();
    console.log(snippets);
    $.each(snippets, function(index, snippet) {
        snippetsTable.row.add([
            snippet['id'],
            snippet['creator'],
            snippet['description'],
            snippet['language']
        ]);
    });
    snippetsTable.draw();
}


function getSnippets() {
    let url = SnippetsUrl + '?cmd=list';
    $.get(url, function (response) {
        let snippetData = JSON.parse(response['snippets']);
        model.setSnippetsList(snippetData);
        updateView();
    });
}

// user and password submit
function registerUser(e){
    e.preventDefault();
    var name = $(e.target).find('input[name="name"]'); 
    var password = $(e.target).find('input[name="password"]');
    $.post(registerUrl, {
        name: name.val(),
        password: password.val() ,
    }).done(function( data ) {
        name.val('');
        password.val('');
        $('#registerModal').modal('hide')
        $('#alert').alert();
    });
}


// submits Forgot your password form
function recoverPassword(e){
    e.preventDefault();
    var question1 = $(e.target).find('input[name="question-1"]'); 
    var question2 = $(e.target).find('input[name="question-2"]');
    $.post(registerUrl, {
        question1: question1.val(),
        question2: question2.val() ,
    }).done(function( data ) {
        name.val('');
        password.val('');
        $('#registerModal').modal('hide')
        $('#alert').alert();
    });
}