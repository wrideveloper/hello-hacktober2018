function getValue() {
  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;
  var par = document.createElement('p');
  var node = document.createTextNode('Hallo ' + firstName + ' ' +lastName);
  par.appendChild(node);
  document.getElementById('div').appendChild(par);
}