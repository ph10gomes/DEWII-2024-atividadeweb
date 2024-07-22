function testeArray(){

const obj = [
    {"nome":"Pedro Bittencourt","idade":22},
    {"nome":"Paulo","idade":55}
];

for(let i; i<obj.length; i++) {
    console.log(obj[i].nome +':'+obj[i].idade);
}

console.log(obj);
}

export default testeArray;