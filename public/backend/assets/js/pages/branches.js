
function syncSlugENValue(){
    let val = document.getElementById('name_en').value;
    document.getElementById('slug_en').value = val.replace(/\s/g, "_");
}

function syncSlugTHValue(){
    let val = document.getElementById('name_th').value;
    document.getElementById('slug_th').value = val.replace(/\s/g, "_");
    document.getElementById('meta_title').value = val.replace(/\s/g, "_");
}
