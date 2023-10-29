// soal point 4
// soal 1
let angka = 15;
let kelipatan = 7;
const soal1Point4 = (e) => {
    let li = document.createElement("li");
    li.innerHTML = e;
    document.getElementById("soal1Point4").appendChild(li);
};
for (let i = 1; i <= angka; i++) {
    if (i == kelipatan) {
        hasilLooping = "bestada";
        kelipatan += 7;
        soal1Point4(hasilLooping);
    } else {
        i == angka ? (hasilLooping = "success") : (hasilLooping = i);
        soal1Point4(hasilLooping);
    }
}
// soal 2
let array = [3, 7, 1, 2, 6, 7, 8, 9, 12, 5, 3, 12];

const unique = [...new Set(array)];

const revers = unique.sort((i, j) => {
    return j - i;
});

document.getElementById("arrayLamaSoal2Point4").innerHTML = array;
document.getElementById("arrayUniqueSoal2Point4").innerHTML = unique;
document.getElementById("arraySortSoal2Point4").innerHTML = revers;
