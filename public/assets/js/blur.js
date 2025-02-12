function blurOn () {
    document.getElementById('hb').classList.add('blur');
    document.getElementById('sb').classList.add('blur');
    document.getElementById('nb').classList.add('blur');
    document.getElementById('pb').classList.add('blur');
    document.getElementById('ph').classList.add('blur');
    document.getElementById('ah').classList.add('blur');
    document.getElementById('hm').style.display = 'block';
}
function blurOff () {
    document.getElementById('hb').classList.remove('blur');
    document.getElementById('sb').classList.remove('blur');
    document.getElementById('nb').classList.remove('blur');
    document.getElementById('pb').classList.remove('blur');
    document.getElementById('ph').classList.remove('blur');
    document.getElementById('ah').classList.remove('blur');
    document.getElementById('hm').style.display = 'none';
}
