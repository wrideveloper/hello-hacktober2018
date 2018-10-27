function nimValidation() {
    var nim = document.getElementById('nim')
    if (nim.value == '') {
        var nims = document.getElementById('nims').removeAttribute('hidden')
    }
    else {
        var nims = document.getElementById('nims').setAttribute('hidden', '')
    }
}

function namaValidation() {
    var nama = document.getElementById('nama')
    if (nama.value == '') {
        var namas = document.getElementById('namas').removeAttribute('hidden')
    }
    else {
        var namas = document.getElementById('namas').setAttribute('hidden', '')
    }
}

function alamatValidation() {
    var alamat = document.getElementById('alamat')
    if (alamat.value == '') {
        var alamats = document.getElementById('alamats').removeAttribute('hidden')
    }
    else {
        var alamats = document.getElementById('alamats').setAttribute('hidden', '')
    }
}

function pendidikanValidation() {
    var pendidikan = document.getElementById('pendidikan')
    if (pendidikan.value == '') {
        var pendidikans = document.getElementById('pendidikans').removeAttribute('hidden')
    }
    else {
        var pendidikans = document.getElementById('pendidikans').setAttribute('hidden', '')
    }
}

function jkValidation() {
    var jk1 = document.getElementById('jk1')
    var jk2 = document.getElementById('jk2')
    if (jk1.checked == false && jk2.checked == false) {
        var jks = document.getElementById('jks').removeAttribute('hidden')
    }
    else {
        var jks = document.getElementById('jks').setAttribute('hidden', '')
    }
}

function hobiValidation() {

    var hobi = document.getElementsByName('hobi[]')
    var checked = false
    for (var i = 0; i < hobi.length; i++) {
        if (hobi[i].checked) {
            var hobis = document.getElementById('hobis').setAttribute('hidden', '')
            checked = true
            break
        }
    }
    if (checked == false) {
        var hobis = document.getElementById('hobis').removeAttribute('hidden')
        return false
    }
    return true
}

function validateForm() {
    var nims = document.forms["form"]["nim"].value;
    var names = document.forms["form"]["name"].value;
    var alamats = document.forms["form"]["alamat"].value;
    var pendidikans = document.forms["form"]["pendidikan"].value;
    var jks = document.forms["form"]["jk"].value;

    nimValidation()
    namaValidation()
    alamatValidation()
    pendidikanValidation()
    jkValidation()
    hobiValidation()

    if (nims == "" || names == "" || alamats == "" || pendidikans == "" || jks == "" || hobiValidation() == false) {
        alert('Anda Belum Melengkapi semua data')
        return false
    }
    else {
        return true
    }
}