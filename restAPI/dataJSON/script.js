// let mahasiswa = {
//     nama : "marrochi",
//     umur : 30,
//     hobi : ["sepak tabok","tonjok belinger"],
//     status : true

// }
// console.log(JSON.stringify(mahasiswa))


// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if(xhr.readyState == 4 && xhr.status == 200){
//         let mahasiswa = JSON_parse(this.responseText)
//         console.log(mahasiswa)

//     }
// }
// xhr.open('GET', 'coba2.json', true)
// xhr.send()


$.getJSON('coba2.json', function(bebas){
    console.log(bebas)
})