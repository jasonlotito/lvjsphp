var $username = $('#loginEmail');
var $password = $('#loginPassword');
var $formErrorDisplay = $('#formErrorDisplay');
var $loginModal = $('#loginModal');
var $contentContainer = $('#contentContainer');
var $loginLink = $('#loginLink');
var $logoutLink = $('#logoutLink');

function testLogin()
{
  $.getJSON('/login.php', function(){
    fetchHomeLoginPage();
    prepareLoggedInState();
  });
}

$('#buttonLogin').on('click', function() {
  $.post('/login.php', {u: $username.val(), p: $password.val()}, function() {
    fetchHomeLoginPage();
    prepareLoggedInState();
  }).fail(function(){
     showErrorModalMessage();
  });
});

function fetchHomeLoginPage ()
{
  $.getJSON('/home.php', function(data){
    $contentContainer.html(data.page);
  });
}

function prepareLoggedInState () {
  $loginModal.modal('hide');
  $loginLink.hide();
  $logoutLink.show();
}
function showErrorModalMessage () {
  $formErrorDisplay.show();
}

testLogin();