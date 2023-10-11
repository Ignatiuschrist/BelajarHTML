var dataBarang = [
    'hp',
    'cd',
    'lp'
]

function showBarang() {
    var listBarang = document.getElementById('listBarang')

    listBarang.innerHTML = ""

    for(let i = 0; i < dataBarang.length; i++) {
        var btnEdit = "<button onclick='editBarang("+ i +")'>Edit</button>"
        var btnDelete = "<button onclick='deleteBarang("+ i +")'>Hapus</button>"

        listBarang.innerHTML +="<li>" + dataBarang[i] + " " + btnEdit + "|" + btnDelete + "</li>"
    }
}

function addBarang (){
    var input = document.getElementById('inputBarang')
    dataBarang.push(input.value)

    showBarang()
}

function editBarang(id) {
    var newBarang = prompt('Nama Barang Baru', dataBarang[id])
    dataBarang[id] = newBarang
    
    zshowBarang()
}

function deleteBarang(id) {
    dataBarang.splice(id, 1)

    showBarang()
}

showBarang()