var produk = ['yo', 'ok', 'to']
//produk.push('sembarang')
//produk[1] = 'ganti edit'
produk.splice(0, 1)

for(let i=0; i < produk.length; i++) {
    console.log(produk[i]);
}

// filter, sort, includes