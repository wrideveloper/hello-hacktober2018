function getValue() {
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var par = document.createElement('p');
    par.setAttribute('id','welcome');
    var node = document.createTextNode('Hallo ' + firstName + ' ' + lastName);
    par.appendChild(node);
    document.getElementById('div').appendChild(par);
    var clearBtn = document.getElementById('clearBtn').removeAttribute('hidden');
  }

  function clearValue(){
      var firstName = document.getElementById('firstName').value = '';
      var lastName = document.getElementById('lastName').value = '';
      var hello = document.getElementById('welcome');
      document.getElementById('div').removeChild(hello);
      var clearBtn = document.getElementById('clearBtn').setAttribute('hidden','');
  }