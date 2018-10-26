function validateForm(){
    var fname = document.forms["myForm"]["fname"].value;
    var lname = document.forms["myForm"]["lname"].value;

    if (fname=="" && lname=="") {
        alert('Nama depan dan belakang harus di isi!!!');
        return false;
    }
    else if(fname==""){
        alert('Nama depan harus di isi!!!');
        return false;
    }
    else if(lname==""){
        alert('Nama Belakang Harus di Isi!!!')
        return false;
    }
    else{
        return true;
    }
}