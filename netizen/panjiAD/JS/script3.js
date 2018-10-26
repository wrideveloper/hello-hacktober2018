function showAlert() {
    alert('Hallo, ini adalah sebuah window alert!');
  }
  
  function showPrompt() {
    var fullName = prompt('Please enter your full name!');
    var par = document.createElement('p');
    if (fullName != null) {
      var node = document.createTextNode('Hallo ' + fullName + '!');
      par.appendChild(node);
      document.getElementById('window').appendChild(par);
    }
  }

  function cari(){
      window.open("http://lms.jti.polinema.ac.id/","LMS JTI","width=500,height=500");
  }