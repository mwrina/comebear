function calcPreco(){

const precoUnit = document.getElementById('preco1').innerHTML;
const precoTotal = document.getElementById('preco2')
const select = document.getElementById('quant')

var precoUnitario = Number(precoUnit).toFixed(2)
var quantidade = Number(select.options[select.selectedIndex].text)

precoTotal.innerText = (precoUnitario * quantidade).toFixed(2)

}

const precoUnit = document.getElementById('preco1').innerHTML;
const precoTotal = document.getElementById('preco2')
const select = document.getElementById('quant')

var precoUnitario = Number(precoUnit).toFixed(2)
var quantidade = Number(select.options[select.selectedIndex].text)

precoTotal.innerText = (precoUnitario * quantidade).toFixed(2)
